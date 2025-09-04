# FormSpammerTrap PHPMailer Fix

## Overview

This must-use (mu-plugin) plugin resolves PHPMailer class conflicts that occur when using the FormSpammerTrap plugin on WordPress sites. It ensures WordPress's built-in PHPMailer library is loaded before the FormSpammerTrap plugin attempts to load its own copy, preventing fatal "class already declared" errors.

## Compatibility

**✅ WORDPRESS ONLY**  
This plugin is designed specifically for WordPress sites and should only be used with WordPress.

**❌ NOT COMPATIBLE with ClassicPress**  
Do NOT use this plugin on ClassicPress sites. ClassicPress handles PHPMailer differently and this plugin will cause critical errors on ClassicPress installations.

## Platform Information

- **WordPress**: Uses an older version of PHPMailer that requires this compatibility fix
- **ClassicPress**: Uses a newer PHPMailer version and has better plugin isolation - no fix needed

## Installation

1. Download the `fix-formspammertrap-phpmailer.php` file
2. Upload it to your WordPress site's `/wp-content/mu-plugins/` directory
3. If the `mu-plugins` directory doesn't exist, create it
4. The plugin will automatically activate (mu-plugins don't appear in the admin plugins list)

## When to Use

Install this mu-plugin if you experience any of these issues with FormSpammerTrap on a wp installation:

- Fatal error: "Cannot declare class PHPMailer, because the name is already in use"
- Critical errors when activating the FormSpammerTrap plugin
- Email sending failures related to PHPMailer conflicts
- WordPress sites where FormSpammerTrap worked before but suddenly stopped

## How It Works

The plugin loads WordPress's native PHPMailer classes very early in the WordPress initialization process (priority 1). This ensures that when the FormSpammerTrap plugin checks for existing PHPMailer classes, it finds them already loaded and skips loading its own copy.

## Troubleshooting

### If you're still getting errors after installation:

1. **Verify platform**: Confirm you're running WordPress, not ClassicPress
2. **Check file location**: Ensure the file is in `/wp-content/mu-plugins/` (not `/wp-content/plugins/`)
3. **File permissions**: Make sure the file has proper read permissions
4. **Deactivate temporarily**: Rename the mu-plugin file to test if it's causing any issues ie: fix-formspammertrap-phpmailer-old.php

### If emails aren't sending:

This plugin only fixes PHPMailer loading conflicts. Email sending issues may be related to:
- SMTP configuration
- Server email settings
- FormSpammerTrap plugin configuration
- WordPress email settings

## Version Compatibility

- **WordPress**: All recent versions
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

### Version 1.0
- Initial release
- WordPress PHPMailer compatibility fix for FormSpammerTrap plugin
- Platform detection to prevent ClassicPress conflicts