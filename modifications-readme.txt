FormSpammerTrap Plugin Custom Changes Log
=========================================

Date: August 29, 2025
Plugin Version: [check your current version]
File: includes/formspammertrap-contact-functions.php

Changes Made:
- Line 1046: Changed FILTER_VALIDATE_BOOL to FILTER_VALIDATE_BOOLEAN
- Line 1063: Changed FILTER_VALIDATE_BOOL to FILTER_VALIDATE_BOOLEAN  
- Line 1064: Changed FILTER_VALIDATE_BOOL to FILTER_VALIDATE_BOOLEAN

Reason: PHP warnings - FILTER_VALIDATE_BOOL constant doesn't exist
Fix: Use correct PHP constant FILTER_VALIDATE_BOOLEAN

Replaced original paths:

- Line 1257:require_once __DIR__ . '/phpmailer/Exception.php';
- Line 1258:require_once __DIR__ . '/phpmailer/PHPMailer.php';
- Line 1259:require_once __DIR__ . '/phpmailer/SMTP.php';

Reason: Some wordpress sites were intermittent (Critical Error) in loading PHPMailer in the formspammertrap includes folder due to wp also having PHPMailer in wp-includes folder by default

Notes: These changes eliminate PHP errors/warnings in error logs. Plugin functionality remains the same.