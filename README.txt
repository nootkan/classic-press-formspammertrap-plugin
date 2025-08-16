=== FormSpammerTrap Contact Form ===
Contributors: Van Isle Web Solutions
Tags: contact form, spam protection, anti-spam, form security, email, file uploads, form submissions, dashboard
Requires at least: 4.9
Tested up to: 6.8.2
Stable tag: 1.5.0
Requires PHP: => 7.2
License: GPL2
License URI: https://www.gnu.org/licenses/gpl-2.0.html

Professional anti-spam contact form with submission management, file uploads, and enterprise-level security features powered by FormSpammerTrap.

== Description ==

FormSpammerTrap Contact Form provides a secure, spam-resistant contact form for your ClassicPress/Wordpress website. Built on the proven FormSpammerTrap anti-spam system, this plugin offers advanced protection against bots, spammers, and automated attacks while maintaining excellent usability for legitimate visitors.

**🆕 NEW in v1.5.0: Complete Form Submissions Management System**

* **📊 Submissions Dashboard** - View, search, and manage all form submissions in one place
* **🔍 Advanced Search & Filtering** - Find submissions by status, date, name, email, or message content
* **📝 Individual Submission View** - See complete details including technical information and attachments
* **📋 Admin Notes** - Add internal notes to any submission for team collaboration
* **📈 Dashboard Widget** - Quick view of recent submissions on your WordPress dashboard
* **🔔 Admin Notifications** - Get notified about unread submissions throughout your admin area
* **📊 Submission Status Tracking** - Monitor email delivery success/failure for each submission
* **🗂️ Bulk Actions** - Mark multiple submissions as read/unread or delete them efficiently
* **📎 File Attachment Tracking** - See what files were uploaded with each submission
* **🏷️ Status Management** - Automatic status tracking (unread, read, sent, email failed)

**Key Features:**

* **Advanced Spam Protection** - Multiple layers of bot detection and spam prevention
* **No CAPTCHA Required** - Uses invisible protection methods that don't burden users
* **Secure File Uploads** - Allow visitors to attach files with enterprise-level security
* **Form Submissions Management** - Complete dashboard to view and manage all form submissions
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

**📊 Form Submissions Management Features:**

* **Comprehensive Submission Storage** - All form data automatically saved to secure database
* **Advanced Admin Interface** - Professional dashboard with sorting, filtering, and pagination
* **Email Integration** - Direct links to reply to submitters via your email client
* **Technical Details** - IP addresses, user agents, submission timestamps for security analysis
* **Search Functionality** - Find specific submissions by any field content
* **Status Tracking** - Track which submissions have been read and which emails succeeded
* **Bulk Management** - Efficiently manage multiple submissions simultaneously
* **Admin Collaboration** - Internal notes system for team communication about submissions
* **Dashboard Integration** - Quick access widget shows recent submissions on main dashboard
* **Smart Notifications** - Admin notices alert you to unread submissions throughout the admin area

**🧹 Complete Cleanup Features (Enhanced in v1.5.0):**

* **Submission Data Cleanup** - Removes all stored form submissions and related data
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
* **Secure Submission Storage** - All form data stored with proper sanitization and validation

**File Upload Features:**

* **Multiple File Support** - Visitors can attach multiple files to their messages
* **Extension Filtering** - Configurable allowed file types (PDF, images, documents)
* **File Preview** - Visual preview of selected files before submission
* **Size Monitoring** - Automatic file size reporting and disk usage tracking
* **Retention Control** - Automatic deletion after 7, 14, 30, or 90 days
* **Secure Storage** - Files protected from direct access while available to admins
* **Complete Removal** - All upload files and folders removed during plugin uninstall
* **Attachment Tracking** - View file information for each submission in the admin dashboard

**Easy to Use:**

Simply add the `[formspammertrap]` shortcode to any page or post to display the contact form. The plugin includes a comprehensive admin interface for configuration, security monitoring, and submission management.

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
11. **NEW:** Access Settings > Form Submissions to view and manage all form submissions

**🗑️ Clean Removal:**
When you no longer want the plugin, simply delete it from the Plugins page. The enhanced cleanup system will automatically remove all plugin data, uploaded files, form submissions, database entries, and configuration - leaving your site completely clean!

== Configuration ==

**Basic Settings:**

1. **Default Email Address** - Where form submissions will be sent (must be on your domain)
2. **Required Field Colors** - Enable visual feedback for form validation
3. **Show Version** - Display FormSpammerTrap version information
4. **Custom Thank You Message** - Personalize the success message
5. **Max URLs Allowed** - Control spam by limiting URLs in messages (0-10)
6. **Enable Reset Button** - Add a form reset option for users

**📊 Form Submissions Settings:**

1. **Automatic Saving** - All form submissions are automatically saved to the database
2. **Admin Access** - View submissions via Settings > Form Submissions
3. **Status Tracking** - Submissions are marked as read/unread automatically
4. **Email Delivery Tracking** - Monitor whether emails were sent successfully
5. **Admin Notes** - Add internal comments to any submission
6. **Search & Filter** - Find specific submissions quickly

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

**📊 Managing Form Submissions:**

1. **View All Submissions** - Go to Settings > Form Submissions
2. **Search Submissions** - Use the search box to find specific entries
3. **Filter by Status** - Show only unread, read, sent, or failed submissions
4. **View Individual Submissions** - Click "View" to see complete details
5. **Add Admin Notes** - Click "View" then add notes in the admin notes section
6. **Bulk Actions** - Select multiple submissions and mark as read/unread or delete
7. **Email Integration** - Click "Reply via Email" to respond directly to submitters

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

All fields include validation and spam protection features. File uploads include extension validation and security scanning. **All form data is automatically saved to the submissions dashboard for easy management.**

== 📊 Form Submissions Dashboard ==

**Dashboard Features:**

* **📋 Submissions List** - Comprehensive table showing all form submissions
* **🔍 Advanced Search** - Search by name, email, subject, or message content
* **📊 Status Filtering** - Filter by unread, read, sent, or email failed status
* **📄 Pagination** - Navigate through large numbers of submissions efficiently
* **📈 Quick Stats** - See total submissions, unread count, and today's submissions

**Individual Submission View:**

* **👤 Visitor Information** - Name, email, subject, submission date, and status
* **🔧 Technical Details** - IP address, user agent, and timestamp for security analysis
* **📎 File Attachments** - List of uploaded files with sizes and types
* **📝 Complete Message** - Full message content in easy-to-read format
* **🗒️ Admin Notes** - Add and edit internal notes for team collaboration
* **📧 Email Integration** - Direct "Reply via Email" links to your email client

**Bulk Management:**

* **✅ Bulk Actions** - Mark multiple submissions as read/unread
* **🗑️ Bulk Delete** - Remove multiple submissions efficiently
* **🔲 Select All** - Checkbox to select all visible submissions
* **📊 Status Management** - Change status for multiple submissions simultaneously

**Dashboard Widget:**

* **📈 Recent Submissions Widget** - Shows latest 5 submissions on WordPress dashboard
* **📊 Quick Statistics** - Total, unread, and today's submission counts
* **🔗 Quick Access** - Direct link to full submissions dashboard

**Admin Notifications:**

* **🔔 Unread Alerts** - Admin notices show when you have unread submissions
* **📍 Smart Placement** - Notifications appear throughout admin area (except on submissions page)
* **🔗 Direct Links** - Click notification to go directly to unread submissions

== Plugin Security Features ==

**Multi-Layer Protection:**
* Session validation prevents direct form access
* JavaScript delays prevent automated submissions
* Hidden field manipulation detection
* reCAPTCHA support (optional)
* URL counting prevents link spam
* Email validation prevents invalid addresses

**📊 Submission Security:**
* All form data sanitized before database storage
* Secure database queries prevent SQL injection
* Admin-only access to submissions dashboard
* Nonce verification for all admin actions
* XSS protection on all output
* CSRF protection for form actions

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
* Complete data removal on plugin deletion (including submissions)

**🆕 Database Protection:**
* Safe cleanup that only targets FormSpammerTrap-specific tables
* Preserves other plugin data (Contact Form 7, WPForms, etc.)
* Intelligent pattern matching for table identification
* Complete options and transients cleanup
* Secure submission data storage with proper validation

== Frequently Asked Questions ==

= 🆕 What happens to my form submissions when I delete the plugin? =
**All form submissions are permanently deleted!** Version 1.5.0 features comprehensive cleanup that removes all stored submissions along with files, configuration, and database entries. If you need to keep submission data, export or backup the information before deleting the plugin.

= How do I access my form submissions? =
Go to Settings > Form Submissions in your WordPress admin. You'll see a complete dashboard with all submissions, search functionality, and filtering options.

= Can I search through my form submissions? =
Yes! The submissions dashboard includes advanced search that looks through names, email addresses, subjects, and message content. You can also filter by status (unread, read, sent, email failed).

= What information is saved with each submission? =
Each submission includes: visitor name, email, subject, message, submission date/time, IP address, browser information, file attachments (if any), current status, and space for admin notes.

= Can I add notes to submissions? =
Absolutely! Click "View" on any submission and you'll find an admin notes section where you can add internal comments for team collaboration.

= How do I reply to someone who submitted the form? =
Click "View" on any submission, then click the "Reply via Email" button. This will open your default email client with the person's email address pre-filled.

= What gets removed when I delete the plugin? =
**Everything!** Version 1.5.0 features comprehensive cleanup that removes:
- All form submissions and related data
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
Check your error logs for detailed cleanup reports. You'll see exactly what was removed: options, files, folders, database entries, and form submissions.

= Can I export my form submissions? =
The current version displays submissions in the admin dashboard. For export functionality, you can copy the data from individual submission views or contact support for bulk export options.

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
* Adequate database space for form submissions storage

**Server Requirements:**
* PHP mail() function or SMTP access
* Session support enabled
* CURL support (for reCAPTCHA if used)
* File system write permissions for upload folder
* Cron job support for automatic cleanup
* Database write permissions for submissions storage

== Installation Status ==

The plugin includes a comprehensive installation status checker that verifies:
* FormSpammerTrap functions file
* PHPMailer directory and files
* Upload directory (if using file uploads)
* Security protection status
* Cleanup schedule status
* Core requirements
* **NEW:** Submissions database table status

Check Settings > FormSpammerTrap > Installation Status for detailed status information.

== Security Status ==

The Security Status dashboard provides real-time monitoring of:
* **Directory Protection** - .htaccess security status
* **Automatic Cleanup** - File retention and deletion schedule
* **Cleanup Schedule** - Cron job status and next run time
* **Current Storage** - File count and disk usage statistics
* **🆕 Submissions Database** - Table status and entry counts

== Data Management ==

**🆕 Enhanced in v1.5.0:**

**What Gets Cleaned Up on Plugin Deletion:**
- ✅ **All form submissions and related data**
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
If you have important uploaded files or want to keep form submission data, create a backup before deleting the plugin. The cleanup is thorough and permanent!

== Support ==

**Getting Help:**
1. Check the FAQ section above
2. Review the FormSpammerTrap documentation at FormSpammerTrap.com
3. Verify all required files are properly installed
4. Check the Installation Status and Security Status in the plugin settings
5. **NEW:** Check the Form Submissions dashboard for submission-related issues

**Common Issues:**
* **Blank page after submission** - Usually indicates a PHP error or missing files
* **Emails not received** - Check that your email address is on your domain
* **Form not appearing** - Verify FormSpammerTrap function file is in the includes/ folder
* **Submit button not appearing** - This is normal; fill out required fields first
* **File uploads not working** - Check server permissions and file extension settings
* **Security warnings** - Review Security Status dashboard for specific issues
* **🆕 Submissions not saving** - Verify database permissions and check Installation Status
* **🆕 Can't access submissions dashboard** - Ensure you have admin privileges and the database table was created

**For FormSpammerTrap Core Issues Only:**
Visit FormSpammerTrap.com for support with the core FormSpammerTrap system.

== Changelog ==

= 1.5.0 =
* **🆕 FORM SUBMISSIONS MANAGEMENT SYSTEM**
* Complete submissions dashboard with advanced search and filtering
* Individual submission view with full details and technical information
* Admin notes system for internal team collaboration
* Status tracking (unread, read, sent, email failed) for all submissions
* Bulk actions for efficient submission management
* Dashboard widget showing recent submissions and statistics
* Admin notifications for unread submissions throughout admin area
* Email integration with direct "Reply via Email" functionality
* File attachment tracking and display in submission details
* Automatic submission ID references in email subject lines
* Enhanced database security with prepared statements and data sanitization
* Complete submission data cleanup during plugin uninstall
* Professional admin interface with pagination and responsive design

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

= 1.5.0 =
🆕 Major Feature Update! Adds complete Form Submissions Management System with dashboard, search, filtering, admin notes, status tracking, and email integration. All form submissions are now automatically saved and manageable through a professional admin interface. Highly recommended update for enhanced form management capabilities.

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
* **🆕 Stores all form submissions in the database for admin management**
* May temporarily store uploaded files based on retention settings
* Uses session data temporarily for spam protection
* May log basic form submission data if logging is enabled
* Automatically deletes uploaded files according to configured retention periods
* **🆕 Completely removes ALL data including form submissions when plugin is deleted**
* Respects visitor privacy while maintaining security

**🆕 Form Submissions Privacy:**
* All form submissions are stored securely in your site's database
* Only site administrators can access the submissions dashboard
* All data is properly sanitized and validated before storage
* Submissions include visitor IP addresses for security purposes
* Admin notes are private and not visible to form submitters
* **Complete removal of all submission data when plugin is uninstalled**

**File Upload Privacy:**
* Uploaded files are automatically protected from direct URL access
* Files are automatically deleted based on your retention settings
* No permanent storage of personal files unless specifically configured
* All file handling complies with GDPR requirements when using recommended settings
* **Complete removal of all files and data when plugin is uninstalled**

Form submissions are processed according to your site's privacy policy. Consider adding appropriate privacy notices for form users, especially regarding data storage, file uploads, and retention periods.

== Credits ==

* Built on the FormSpammerTrap anti-spam system by Rick Hellewell
* Uses PHPMailer for reliable email delivery
* Designed for ClassicPress/Wordpress compatibility
* Follows ClassicPress/Wordpress coding standards and best practices
* Security features designed with GDPR compliance in mind
* Enhanced cleanup system ensures responsible data management
* **🆕 Form submissions system designed with security and privacy in mind**

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

**🆕 Database Implementation:**
* **Submissions Table:** `wp_fst_submissions` (created automatically on activation)
* **Table Structure:** Includes all form data, technical information, and admin notes
* **Security:** All queries use prepared statements and proper data sanitization
* **Performance:** Indexed fields for efficient searching and filtering
* **Privacy:** Complete table removal during plugin uninstall

**🆕 Cleanup Implementation:**
* Enhanced recursive folder removal with subdirectory support
* Safe database table cleanup using pattern matching
* Complete options cleanup (plugin + FormSpammerTrap core)
* **Form submissions table and data removal**
* Automatic transients and cached data removal
* Cron job cleanup and scheduled task removal
* Comprehensive logging of all cleanup operations

**Security Implementation:**
* .htaccess rules block direct file access
* Daily cron jobs handle automated cleanup
* File extension validation prevents dangerous uploads
* Session-based protection prevents bot submissions
* Automatic directory protection creation
* **Secure form submission storage with validation**
* **Admin-only access to submissions dashboard**
* **XSS and CSRF protection for all admin functions**
* **Complete security cleanup on plugin removal**

**🆕 Submissions Dashboard:**
* Professional WordPress-style admin interface
* Pagination for handling large numbers of submissions
* Advanced search across all form fields
* Status filtering and bulk actions
* Individual submission detailed view
* Admin notes system with update functionality
* Email integration for direct communication
* Dashboard widget with recent submissions and statistics

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
FormSpammerTrap Plugin: Removed submissions table: wp_fst_submissions
FormSpammerTrap Plugin: Removed X plugin-specific options
FormSpammerTrap Plugin: Removed X FormSpammerTrap core options
FormSpammerTrap Plugin: Cleaned up FormSpammerTrap transients
FormSpammerTrap Plugin: Comprehensive uninstall cleanup completed
```

== Advanced Configuration ==

**For Advanced Users:**

**🆕 Submissions Management:**
The submissions system is designed for security and performance:
* All form data is stored with proper validation and sanitization
* Database queries use WordPress prepared statements for security
* Admin interface includes nonce verification for all actions
* Bulk operations are optimized for handling large datasets
* Search functionality uses efficient database indexing

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
* **🆕 Consider database backup procedures for form submissions before plugin deletion**

**🆕 Cleanup Customization:**
The cleanup system is designed to be safe and comprehensive. Advanced users can modify cleanup patterns in the plugin source code, but this is not recommended as it may affect the safety of the cleanup process.

**🆕 Submissions Database Optimization:**
For sites expecting high submission volumes:
* Monitor database size and performance
* Consider implementing custom archiving procedures for old submissions
* Review server resources if storing submissions long-term
* Database table is optimized with indexes for efficient searching

== Donations ==

If you find this plugin useful, consider supporting:
* FormSpammerTrap development at https://FormSpammerTrap.com
* ClassicPress development at https://ClassicPress.net
* Wordpress development at https://www.wordpress.org

---

**🆕 A Special Thank You:**
The Form Submissions Management System was developed through collaborative effort and community feedback. We appreciate all users who contribute to making this plugin better!

Thank you for using FormSpammerTrap Contact Form!