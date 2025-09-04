# FormSpammerTrap PHPMailer Fix

## Overview

This must-use (mu-plugin) plugin resolves PHPMailer class conflicts that occur when using the FormSpammerTrap plugin on WordPress and Classic Press sites. It ensures WordPress's built-in PHPMailer library is loaded before the FormSpammerTrap plugin attempts to load its own copy, preventing fatal "class already declared" errors.

## Compatibility

**✅ WORDPRESS AND CLASSIC PRESS**  
This plugin is designed specifically for WordPress and Classic Press sites.

## Installation

1. Download the `fix-formspammertrap-phpmailer.php` file
2. Upload it to your WordPress site's `/wp-content/mu-plugins/` directory
3. If the `mu-plugins` directory doesn't exist, create it
4. The plugin will automatically activate (mu-plugins don't appear in the admin plugins list)

## When to Use

Install this mu-plugin if you experience any of these issues with FormSpammerTrap:

- Fatal error: "Cannot declare class PHPMailer, because the name is already in use"
- Critical errors when activating the FormSpammerTrap plugin
- Email sending failures related to PHPMailer conflicts
- WordPress/Classic Press sites where FormSpammerTrap worked before but suddenly stopped

## How It Works

The plugin loads WordPress's native PHPMailer classes very early in the WordPress initialization process (priority 1). This ensures that when the FormSpammerTrap plugin "Sanity Check Feature" checks for existing PHPMailer classes, it finds them already loaded and skips loading its own copy.

## Troubleshooting

### If you're still getting errors after installation:

1. **Check file location**: Ensure the file is in `/wp-content/mu-plugins/` (not `/wp-content/plugins/`)
2. **File permissions**: Make sure the file has proper read permissions
3. **Deactivate temporarily**: Rename the mu-plugin file to test if it's causing any issues ie: wp-content/mu-plugins/fix-formspammertrap-phpmailer-old.php

### If emails aren't sending:

This plugin only fixes PHPMailer loading conflicts. Email sending issues may be related to:
- SMTP configuration
- Server email settings
- FormSpammerTrap plugin configuration
- WordPress email settings

## Version Compatibility

- **WordPress**: All recent versions
- **ClassicPress**: 2.4.1
- **FormSpammerTrap Plugin**: All versions that include PHPMailer
- **PHP**: 7.4+ recommended

## Support

This is a community-contributed fix for a known compatibility issue. For FormSpammerTrap plugin support, contact the original plugin developer. For WordPress-specific issues, consult WordPress documentation or community forums.

## Notes

- This plugin has no admin interface - it works automatically
- Safe to leave installed permanently on WordPress sites
- Will not interfere with other email plugins
- Does not modify any existing plugin files

## Changelog

### Version 1.1
- Fixed "Call to undefined function is_plugin_active()" error on ClassicPress
- Added automatic platform detection for WordPress vs ClassicPress
- Now compatible with both WordPress and ClassicPress
- Improved error handling and file existence checks

### Version 1.0
- Initial release
- WordPress PHPMailer compatibility fix for FormSpammerTrap plugin
- Platform detection to prevent Wordpress/ClassicPress conflicts
