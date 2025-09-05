<?php
/**
 * WordPress/ClassicPress DB adapter for FormSpammerTrap
 * - No manual DB creds
 * - Ensures the contacts table exists with FST-required types
 * - Runs before the legacy FST file defines its constants
 */

if (!defined('ABSPATH')) exit;

// Helper: table name
if (!function_exists('fst_get_contact_table_name')) {
    function fst_get_contact_table_name() {
        global $wpdb;
        return $wpdb->prefix . 'fst_contacts';
    }
}

// Create (or update) table with the exact types FST’s sanity check wants
if (!function_exists('fst_create_contact_table')) {
    function fst_create_contact_table() {
        global $wpdb;
        $table_name = fst_get_contact_table_name();
        $charset_collate = $wpdb->get_charset_collate();

        // FST checks *types*, not the primary key type.
        // Required: email/name/guid = CHAR(50), status = CHAR(2), last_updated = TIMESTAMP
        $sql = "CREATE TABLE {$table_name} (
            id bigint(20) unsigned NOT NULL AUTO_INCREMENT,
            email char(50) NOT NULL,
            name char(50) NOT NULL,
            guid char(50) NOT NULL,
            status char(2) NOT NULL DEFAULT '10',
            last_updated timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
            PRIMARY KEY (id),
            UNIQUE KEY email (email),
            KEY guid (guid),
            KEY status (status)
        ) {$charset_collate};";

        require_once ABSPATH . 'wp-admin/includes/upgrade.php';
        dbDelta($sql);

        add_option('fst_contacts_table_version', '1.0');
    }
}

// Portable table-exists check (avoids INFORMATION_SCHEMA perms issues)
if (!function_exists('fst_ensure_contact_table_exists')) {
    function fst_ensure_contact_table_exists() {
        global $wpdb;
        $table_name = fst_get_contact_table_name();

        // SHOW TABLES LIKE is cheap and works on shared hosts
        $exists = $wpdb->get_var( $wpdb->prepare("SHOW TABLES LIKE %s", $table_name) );
        if ($exists !== $table_name) {
            fst_create_contact_table();
        }
    }
}

// Configure globals that the legacy file will promote into constants
if (!function_exists('fst_configure_wordpress_database')) {
    function fst_configure_wordpress_database() {
        // Ensure WP DB constants exist
        if (!defined('DB_HOST') || !defined('DB_NAME') || !defined('DB_USER') || !defined('DB_PASSWORD')) {
            return;
        }

        // IMPORTANT: use a VARIABLE; the legacy file will do define('FST_CONTACT_DATABASE', $FST_CONTACT_DATABASE)
        global $FST_CONTACT_DATABASE, $FST_SAVE_CONTACT_INFO;

        $FST_CONTACT_DATABASE = array(
            'DATABASE_LOC'    => DB_HOST,
            'DATABASE_NAME'   => DB_NAME,
            'DATABASE_USER'   => DB_USER,
            'DATABASE_PASS'   => DB_PASSWORD,
            'DATABASE_TABLE'  => fst_get_contact_table_name(),

            // Column mappings – your column names are fine:
            'FIELD_EMAIL'     => 'email',
            'FIELD_FULLNAME'  => 'name',
            'FIELD_GUID'      => 'guid',
            'FIELD_STATUS'    => 'status',
            'FIELD_DATESTAMP' => 'last_updated',

            // Optional: add extra defaulted columns if you later add them to the table:
            // 'FIELD_DEFAULTS'  => array('source' => 'contact_form'),
        );

        // Turn on saving (you can wire this to a plugin option later)
        $FST_SAVE_CONTACT_INFO = true;

        // Make sure table exists before the legacy sanity check runs
        fst_ensure_contact_table_exists();
    }
}

// Run before 'init' where the legacy file is included
add_action('plugins_loaded', 'fst_configure_wordpress_database', 1);