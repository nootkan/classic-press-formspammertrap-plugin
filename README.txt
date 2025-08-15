=== FormSpammerTrap Contact Form ===
Contributors: Van Isle Web Solutions
Tags: contact form, spam protection, anti-spam, form security, email, file uploads
Requires at least: 4.9
Tested up to: 6.0
Stable tag: 1.4.0
Requires PHP: => 7.2
License: GPL2
License URI: https://www.gnu.org/licenses/gpl-2.0.html

Professional anti-spam contact form powered by FormSpammerTrap with advanced spam protection, file uploads, and enterprise-level security features.

== Description ==

FormSpammerTrap Contact Form provides a secure, spam-resistant contact form for your ClassicPress/Wordpress website. Built on the proven FormSpammerTrap anti-spam system, this plugin offers advanced protection against bots, spammers, and automated attacks while maintaining excellent usability for legitimate visitors.

**Key Features:**

* **Advanced Spam Protection** - Multiple layers of bot detection and spam prevention
* **No CAPTCHA Required** - Uses invisible protection methods that don't burden users
* **Secure File Uploads** - Allow visitors to attach files with enterprise-level security
* **Complete Clean Uninstall** - Removes ALL plugin data, files, and database entries when deleted
* **Automatic File Cleanup** - GDPR-compliant automatic deletion of uploaded files
* **Directory Protection** - .htaccess security prevents direct file access for uploads folder
* **Security Dashboard** - Real-time monitoring of security status and file storage
* **Database Cleanup** - Comprehensive removal of all FormSpammerTrap configuration on uninstall
* **Customizable Thank You Messages** - Create personalized success messages
* **URL Spam Control** - Configurable limits on URLs in messages to prevent link spam
* **Form Reset Button** - Optional reset functionality for better user experience
* **Field Color Coding** - Visual feedback for required field validation
* **Version Display** - Optional FormSpammerTrap version information display to help promote FormSpammerTrap developer
* **Email Validation** - Built-in email address verification
* **Responsive Design** - Mobile-friendly form layout
* **PHPMailer Integration** - Reliable email delivery system
* **Multiple Recipients** - Support for CC and BCC email addresses

**🧹 Complete Cleanup Features (NEW in v1.4.4):**

* **Database Options Cleanup** - Removes all plugin-specific options (fst_default_email, fst_enable_uploads, etc.)
* **FormSpammerTrap Core Cleanup** - Removes all FormSpammerTrap configuration options (fst_show_required_message, fst_cc_email, etc.)
* **Database Tables Cleanup** - Safely removes FormSpammerTrap database tables (fst_* and formspammertrap* patterns only)
* **Upload Folder Cleanup** - Completely removes upload folder and all contents (files, .htaccess, security files)
* **Transients Cleanup** - Removes all cached data and temporary settings
* **Cron Jobs Cleanup** - Removes scheduled cleanup tasks
* **Zero Leftover Data** - Ensures no plugin traces remain in your database or file system

**Security Features:**

* **Multi-Layer Bot Detection** - Session validation, JavaScript delays, hidden field manipulation detection
* **File Upload Security** - Extension validation, automatic .htaccess protection, secure storage for uploads directory
* **Privacy Compliance** - Automatic uploads folder file deletion for GDPR compliance
* **Directory Protection** - Prevents direct URL access to uploaded files
* **Script Execution Blocking** - Prevents dangerous file types from being executed in the uploads directory
* **Automated Cleanup** - Daily cron jobs remove old upload folder files based on retention settings
* **Security Monitoring** - Real-time dashboard shows protection status and storage usage of uploads directory
* **Safe Table Cleanup** - Intelligent database cleanup that only targets FormSpammerTrap-specific tables

**File Upload Features:**

* **Multiple File Support** - Visitors can attach multiple files to their messages
* **Extension Filtering** - Configurable allowed file types (PDF, images, documents)
* **File Preview** - Visual preview of selected files before submission
* **Size Monitoring** - Automatic file size reporting and disk usage tracking
* **Retention Control** - Automatic deletion after 7, 14, 30, or 90 days
* **Secure Storage** - Files protected from direct access while available to admins
* **Complete Removal** - All upload files and folders removed during plugin uninstall

**Easy to Use:**

Simply add the `[formspammertrap]` shortcode to any page or post to display the contact form. The plugin includes a comprehensive admin interface for configuration and security monitoring.

== Installation ==

**Automatic Installation:**
1. Download and upload the plugin zip file from the wp-admin/plugins "Upload" setting
2. Activate the plugin from the 'Plugins' menu in ClassicPress/Wordpress
3. Follow the settings instructions below

**Manual Installation:**
1. Download and extract the plugin files
2. Upload the entire `formspammertrap-plugin` folder to `/wp-content/plugins/`
3. Activate the plugin in your ClassicPress admin
4. Complete the required setup steps

**Required Files Setup:**
5. Upload `formspammertrap-contact-functions.php` to the `includes/` folder in the plugin directory
6. Upload PHPMailer files to `includes/phpmailer/` folder if not already present

**Configuration:**
7. Go to Settings > FormSpammerTrap in your admin
8. Set your email address (must be on your domain)
9. Configure file upload options if desired
10. Review security status and configure retention settings

**🗑️ Clean Removal:**
When you no longer want the plugin, simply delete it from the Plugins page. The enhanced cleanup system will automatically remove all plugin data, uploaded files, database entries, and configuration - leaving your site completely clean!

== Configuration ==

**Basic Settings:**

1. **Default Email Address** - Where form submissions will be sent (must be on your domain)
2. **Required Field Colors** - Enable visual feedback for form validation
3. **Show Version** - Display FormSpammerTrap version information
4. **Custom Thank You Message** - Personalize the success message
5. **Max URLs Allowed** - Control spam by limiting URLs in messages (0-10)
6. **Enable Reset Button** - Add a form reset option for users

**File Upload Settings:**

1. **Enable File Uploads** - Allow visitors to attach files to messages
2. **Allowed File Extensions** - Configure permitted file types (e.g., .pdf,.jpg,.doc)
3. **Upload Folder** - Specify storage location (automatically secured)
4. **File Retention Period** - Automatic deletion timeline (7-90 days or never)

**Uploads Folder Security Features:**

1. **Automatic .htaccess Protection** - Blocks direct file access
2. **Daily Cleanup Schedule** - Automatic old file removal
3. **Storage Monitoring** - Track file count and disk usage
4. **Security Status Dashboard** - Real-time protection monitoring
5. **Complete Removal on Uninstall** - No leftover files or folders

**Email Settings:**

The default email address must be on your domain to prevent delivery issues. For example:
- ✅ Good: `contact@yourdomain.com`
- ❌ Bad: `yourname@gmail.com`

== Usage ==

**Basic Usage:**
Add this shortcode to any page or post:
```
[formspammertrap]
```

**Advanced Usage with Attributes:**
```
[formspammertrap email="contact@yourdomain.com"]
[formspammertrap cc="copy@example.com"]
[formspammertrap bcc="blind@example.com"]
[formspammertrap email="contact@yourdomain.com",bcc="blind@example.com",cc="copy@example.com,another@example.com"]
```

**Shortcode Attributes:**
* `email` - Override default recipient email
* `cc` - Add CC recipients (comma-separated for multiple)
* `bcc` - Add BCC recipients (comma-separated for multiple)

== Form Fields ==

The contact form includes these standard fields:
* **Your Name** (Required) - Visitor's full name
* **Your Email** (Required) - Visitor's email address  
* **Subject** (Required) - Message subject line
* **Message** (Required) - Main message content
* **Attach File** (Optional) - Multiple file uploads with preview

All fields include validation and spam protection features. File uploads include extension validation and security scanning.

== Plugin Security Features ==

**Multi-Layer Protection:**
* Session validation prevents direct form access
* JavaScript delays prevent automated submissions
* Hidden field manipulation detection
* reCAPTCHA support (optional)
* URL counting prevents link spam
* Email validation prevents invalid addresses

**File Upload Security:**
* Extension whitelist prevents dangerous files
* Automatic .htaccess protection blocks direct access
* Directory browsing prevention
* Script execution blocking
* Secure temporary file handling
* Automatic cleanup prevents storage abuse
* Complete removal on plugin deletion

**Bot Detection:**
* User agent analysis
* Submission timing analysis
* Form interaction patterns
* Session-based verification

**Privacy & Compliance:**
* GDPR-compliant file retention policies
* Automatic deletion of old uploads
* Privacy-focused logging controls
* Secure file storage practices
* Complete data removal on plugin deletion

**🆕 Database Protection:**
* Safe cleanup that only targets FormSpammerTrap-specific tables
* Preserves other plugin data (Contact Form 7, WPForms, etc.)
* Intelligent pattern matching for table identification
* Complete options and transients cleanup

== Frequently Asked Questions ==

= What gets removed when I delete the plugin? =
**Everything!** Version 1.4.4 features comprehensive cleanup that removes:
- All plugin configuration options
- All FormSpammerTrap core options (fst_* database entries)
- Upload folder and all files (including security files)
- FormSpammerTrap database tables (if any)
- Scheduled cleanup tasks
- Cached data and transients
Your site will be completely clean with zero leftover data.

= Will deleting this plugin affect my other form plugins? =
No! The cleanup system only targets FormSpammerTrap-specific data (fst_* and formspammertrap* patterns). Your Contact Form 7, WPForms, Gravity Forms, and other plugins are completely safe.

= Why do I need FormSpammerTrap files? =
This plugin integrates with the FormSpammerTrap system, which provides the core anti-spam functionality. The FormSpammerTrap files contain the proven spam protection algorithms.

= Can I use my Gmail address to receive emails? =
No, the email address must be on your domain (e.g., contact@yourdomain.com). This prevents delivery issues and spam filtering.

= Are uploaded files secure? =
Yes! The plugin automatically creates .htaccess protection to prevent direct URL access to uploaded files. Files are also automatically deleted based on your retention settings for privacy compliance.

= What file types can visitors upload? =
You can configure allowed file extensions in the admin settings. Common safe types include: .pdf, .jpg, .jpeg, .png, .gif, .doc, .docx. Dangerous file types like .php are automatically blocked.

= How long are uploaded files kept? =
You can set retention periods of 7, 14, 30, or 90 days. Files are automatically deleted via daily cron jobs. The recommended setting is 30 days for GDPR compliance.

= Can visitors access uploaded files directly? =
No, the plugin automatically creates security protection that blocks direct URL access to uploaded files. Only site administrators can access them through the server.

= Why doesn't the submit button appear immediately? =
This is a security feature. The submit button appears after visitors interact with required fields, preventing automated submissions.

= What happens if I disable file uploads? =
The upload folder and cleanup schedule are automatically managed. Disabling uploads stops new uploads but doesn't affect existing files until their retention period expires.

= How much storage do uploaded files use? =
The Security Status dashboard shows real-time file count and storage usage. The automatic cleanup prevents unlimited storage growth.

= Can I use this on multiple sites? =
Yes, but each site needs its own FormSpammerTrap setup and email configuration.

= Is reCAPTCHA required? =
No, FormSpammerTrap provides effective protection without requiring CAPTCHA.

= What happens to spam submissions? =
Spam submissions are automatically blocked and redirected. No spam emails reach your inbox.

= How do I know the cleanup worked? =
Check your error logs for detailed cleanup reports. You'll see exactly what was removed: options, files, folders, and database entries.

== Requirements ==

**Minimum Requirements:**
* ClassicPress/Wordpress 4.9 or higher
* PHP 7.2 or higher
* MySQL 5.6 or higher
* HTTPS/SSL enabled (required for security)
* Email account on your domain

**Recommended:**
* PHP 8.0 or higher
* Modern web browser with JavaScript enabled
* Reliable email hosting
* Adequate disk space for file uploads (if enabled)

**Server Requirements:**
* PHP mail() function or SMTP access
* Session support enabled
* CURL support (for reCAPTCHA if used)
* File system write permissions for upload folder
* Cron job support for automatic cleanup

== Installation Status ==

The plugin includes a comprehensive installation status checker that verifies:
* FormSpammerTrap functions file
* PHPMailer directory and files
* Upload directory (if using file uploads)
* Security protection status
* Cleanup schedule status
* Core requirements

Check Settings > FormSpammerTrap > Installation Status for detailed status information.

== Security Status ==

The Security Status dashboard provides real-time monitoring of:
* **Directory Protection** - .htaccess security status
* **Automatic Cleanup** - File retention and deletion schedule
* **Cleanup Schedule** - Cron job status and next run time
* **Current Storage** - File count and disk usage statistics

== Data Management ==

**🆕 Enhanced in v1.4.4:**

**What Gets Cleaned Up on Plugin Deletion:**
- ✅ All plugin configuration (fst_default_email, fst_enable_uploads, etc.)
- ✅ All FormSpammerTrap core options (fst_show_required_message, fst_cc_email, etc.)
- ✅ Upload folder and ALL contents (files, .htaccess, index.php, subdirectories)
- ✅ FormSpammerTrap database tables (fst_* and formspammertrap* patterns only)
- ✅ Scheduled cleanup tasks and cron jobs
- ✅ Cached data and transients

**What's Protected:**
- ❌ Other plugin data (Contact Form 7, WPForms, etc.)
- ❌ WordPress core tables and options
- ❌ Your content and posts
- ❌ Other plugin upload folders

**Backup Recommendation:**
If you have important uploaded files, create a backup before deleting the plugin. The cleanup is thorough and permanent!

== Support ==

**Getting Help:**
1. Check the FAQ section above
2. Review the FormSpammerTrap documentation at FormSpammerTrap.com
3. Verify all required files are properly installed
4. Check the Installation Status and Security Status in the plugin settings

**Common Issues:**
* **Blank page after submission** - Usually indicates a PHP error or missing files
* **Emails not received** - Check that your email address is on your domain
* **Form not appearing** - Verify FormSpammerTrap function file is in the includes/ folder
* **Submit button not appearing** - This is normal; fill out required fields first
* **File uploads not working** - Check server permissions and file extension settings
* **Security warnings** - Review Security Status dashboard for specific issues

**For FormSpammerTrap Core Issues Only:**
Visit FormSpammerTrap.com for support with the core FormSpammerTrap system.

== Changelog ==

= 1.4.4 =
* **🧹 ENHANCED CLEANUP SYSTEM**
* Complete upload folder removal including all security files (.htaccess, index.php)
* Enhanced recursive directory cleanup for nested folders
* Improved error logging and cleanup reporting
* Better handling of file permissions during cleanup
* Complete folder removal after successful file cleanup
* Zero leftover files or folders after plugin deletion

= 1.4.3 =
* **🗄️ COMPREHENSIVE DATABASE CLEANUP**
* Automatic removal of all FormSpammerTrap core options (fst_* entries)
* Safe cleanup that preserves other plugin data
* FormSpammerTrap database table cleanup (fst_* and formspammertrap* patterns)
* Complete transients and cached data removal
* Enhanced logging of cleanup operations
* Zero database traces after plugin deletion

= 1.4.2 =
* Enhanced safety features for database cleanup
* Improved plugin detection and protection
* Better logging and error reporting

= 1.4.1 =
* Added initial comprehensive uninstall cleanup system
* Database options cleanup functionality
* Enhanced security for cleanup operations

= 1.4.0 =
* **Major Security Update**
* Added secure file upload functionality
* Automatic .htaccess protection for upload directories
* GDPR-compliant file retention system (7-90 days)
* Daily automated file cleanup via cron jobs
* Security Status dashboard with real-time monitoring
* File storage usage tracking and reporting
* Enhanced upload folder protection and validation
* Improved logging mechanisms with daily limits
* Fixed HTTP_HOST warnings in various server environments
* Added file preview functionality for selected uploads
* Enhanced admin interface with security indicators

= 1.3.0 =
* Improved error handling and warning suppression
* Enhanced session management
* Better compatibility across hosting environments
* Optimized JavaScript enhancements

= 1.2.0 =
* Added custom thank you message functionality
* Enhanced form reset button features
* Improved admin interface

= 1.1.0 =
* Added URL spam control features
* Enhanced field validation
* Improved PHPMailer integration

= 1.0.0 =
* Initial release
* Integration with FormSpammerTrap anti-spam system
* Basic contact form functionality
* Responsive form design
* Comprehensive admin interface
* Shortcode support with attributes
* Multi-recipient email support (CC/BCC)

== Upgrade Notice ==

= 1.4.4 =
🧹 Enhanced cleanup system! Now completely removes upload folders and all contents during plugin deletion. Automatic recursive cleanup ensures zero leftover files. Update recommended for complete data removal capability.

= 1.4.3 =
🗄️ Comprehensive database cleanup! Now removes ALL FormSpammerTrap data from database when plugin is deleted. Safe cleanup protects other plugins. Highly recommended update for clean uninstall functionality.

= 1.4.0 =
Major security update! Adds secure file upload functionality, automatic file cleanup, and enhanced security protection. Existing users should review new security settings after update.

= 1.3.0 =
Improved compatibility and error handling. Recommended update for all users.

= 1.0.0 =
Initial release of FormSpammerTrap Contact Form plugin.

== Privacy ==

This plugin:
* Processes form submissions and sends them via email
* May temporarily store uploaded files based on retention settings
* Uses session data temporarily for spam protection
* May log basic form submission data if logging is enabled
* Automatically deletes uploaded files according to configured retention periods
* **🆕 Completely removes ALL data when plugin is deleted**
* Respects visitor privacy while maintaining security

**File Upload Privacy:**
* Uploaded files are automatically protected from direct URL access
* Files are automatically deleted based on your retention settings
* No permanent storage of personal files unless specifically configured
* All file handling complies with GDPR requirements when using recommended settings
* **Complete removal of all files and data when plugin is uninstalled**

Form submissions are processed according to your site's privacy policy. Consider adding appropriate privacy notices for form users, especially regarding file uploads and retention periods.

== Credits ==

* Built on the FormSpammerTrap anti-spam system by Rick Hellewell
* Uses PHPMailer for reliable email delivery
* Designed for ClassicPress/Wordpress compatibility
* Follows ClassicPress/Wordpress coding standards and best practices
* Security features designed with GDPR compliance in mind
* Enhanced cleanup system ensures responsible data management

== License ==

This plugin is licensed under the GPL2 license. FormSpammerTrap components retain their original licensing terms.

== Technical Notes ==

**File Structure:**
```
fst-uploads/ (created automatically when file uploads enabled)
    ├── .htaccess (security protection)
    └── index.php (directory protection)
wp-content/plugins/formspammertrap-plugin/
├── formspammertrap-plugin.php (main plugin file)
├── includes/
│   ├── formspammertrap-contact-functions.php (required)
│   └── phpmailer/
│       ├── PHPMailer.php (required)
│       ├── Exception.php (required)
│       └── SMTP.php (required for SMTP)
└── readme.txt
```

**🆕 Cleanup Implementation:**
* Enhanced recursive folder removal with subdirectory support
* Safe database table cleanup using pattern matching
* Complete options cleanup (plugin + FormSpammerTrap core)
* Automatic transients and cached data removal
* Cron job cleanup and scheduled task removal
* Comprehensive logging of all cleanup operations

**Security Implementation:**
* .htaccess rules block direct file access
* Daily cron jobs handle automated cleanup
* File extension validation prevents dangerous uploads
* Session-based protection prevents bot submissions
* Automatic directory protection creation
* **Complete security cleanup on plugin removal**

**Database:**
No database tables are created by default. All settings are stored in ClassicPress options. Uploaded files are stored in the file system with automatic cleanup. All database entries are completely removed when plugin is deleted.

**Cron Jobs:**
* Daily cleanup job: `fst_cleanup_uploads`
* Automatically scheduled when file uploads are enabled
* Respects retention period settings for file deletion
* **Automatically removed when plugin is deleted**

**🗑️ Cleanup Logging:**
Monitor your error logs during plugin deletion to see detailed cleanup reports:
```
FormSpammerTrap Plugin: Starting comprehensive uninstall cleanup process
FormSpammerTrap Plugin: Successfully removed upload folder 'fst-uploads' and X files
FormSpammerTrap Plugin: Removed X plugin-specific options
FormSpammerTrap Plugin: Removed X FormSpammerTrap core options
FormSpammerTrap Plugin: Cleaned up FormSpammerTrap transients
FormSpammerTrap Plugin: Comprehensive uninstall cleanup completed
```

== Advanced Configuration ==

**For Advanced Users:**

**Maximum Security Setup:**
For highest security, consider moving the upload folder outside your web root directory:
1. Create a folder outside public_html: `/home/username/private_uploads/`
2. Set the upload folder path to the full system path
3. Implement custom file delivery scripts for administrative access

**Custom Retention Policies:**
The retention system can be customized for specific compliance requirements. Contact support for enterprise-level retention configurations.

**Server-Level Security:**
* Ensure proper file permissions (755 for directories, 644 for files)
* Consider additional server-level upload restrictions
* Monitor disk usage if allowing large file uploads
* Implement backup procedures for important uploaded files before plugin deletion

**🆕 Cleanup Customization:**
The cleanup system is designed to be safe and comprehensive. Advanced users can modify cleanup patterns in the plugin source code, but this is not recommended as it may affect the safety of the cleanup process.

== Donations ==

If you find this plugin useful, consider supporting:
* FormSpammerTrap development at https://FormSpammerTrap.com
* ClassicPress development at https://ClassicPress.net
* Wordpress development at https://www.wordpress.org

---

Thank you for using FormSpammerTrap Contact Form!