<?php
/**
 * Fix FormSpammerTrap PHPMailer Conflict
 * 
 * This ensures WordPress's PHPMailer is loaded before the FormSpammerTrap plugin
 * tries to load its own copy, preventing the "class already declared" error.
 */

// Load WordPress's PHPMailer very early
add_action('plugins_loaded', function() {
    // Only load if FormSpammerTrap plugin is active
    if (is_plugin_active('formspammertrap-plugin/formspammertrap-plugin.php')) {
        // Ensure WordPress PHPMailer classes are loaded
        if (!class_exists('PHPMailer\\PHPMailer\\PHPMailer')) {
            require_once ABSPATH . WPINC . '/PHPMailer/PHPMailer.php';
            require_once ABSPATH . WPINC . '/PHPMailer/SMTP.php';
            require_once ABSPATH . WPINC . '/PHPMailer/Exception.php';
        }
    }
}, 1); // Very early priority

/**
 * Alternative approach: Hook into the specific plugin loading
 */
add_action('activate_plugin', function($plugin) {
    if (strpos($plugin, 'formspammertrap') !== false) {
        if (!class_exists('PHPMailer\\PHPMailer\\PHPMailer')) {
            require_once ABSPATH . WPINC . '/PHPMailer/PHPMailer.php';
            require_once ABSPATH . WPINC . '/PHPMailer/SMTP.php';
            require_once ABSPATH . WPINC . '/PHPMailer/Exception.php';
        }
    }
});