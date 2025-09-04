<?php
/**
 * Fix FormSpammerTrap PHPMailer Conflict
 * 
 * This ensures WordPress's/ClassicPress's PHPMailer is loaded before the FormSpammerTrap plugin
 * tries to load its own copy, preventing the "class already declared" error.
 * 
 * Compatible with both WordPress and ClassicPress
 */

// Load PHPMailer early, but check platform compatibility
add_action('plugins_loaded', function() {
    // Check if FormSpammerTrap plugin directory exists instead of using is_plugin_active()
    $plugin_path = WP_PLUGIN_DIR . '/formspammertrap-plugin/formspammertrap-plugin.php';
    
    if (file_exists($plugin_path)) {
        // Detect platform and handle accordingly
        if (function_exists('classicpress_version')) {
            // ClassicPress - check if ClassicPress has PHPMailer in a different location
            if (!class_exists('PHPMailer\\PHPMailer\\PHPMailer')) {
                // Try ClassicPress PHPMailer path (same as WordPress for now)
                if (file_exists(ABSPATH . WPINC . '/PHPMailer/PHPMailer.php')) {
                    require_once ABSPATH . WPINC . '/PHPMailer/PHPMailer.php';
                    require_once ABSPATH . WPINC . '/PHPMailer/SMTP.php';
                    require_once ABSPATH . WPINC . '/PHPMailer/Exception.php';
                }
            }
        } else {
            // WordPress - use built-in PHPMailer
            if (!class_exists('PHPMailer\\PHPMailer\\PHPMailer')) {
                if (file_exists(ABSPATH . WPINC . '/PHPMailer/PHPMailer.php')) {
                    require_once ABSPATH . WPINC . '/PHPMailer/PHPMailer.php';
                    require_once ABSPATH . WPINC . '/PHPMailer/SMTP.php';
                    require_once ABSPATH . WPINC . '/PHPMailer/Exception.php';
                }
            }
        }
    }
}, 1); // Very early priority