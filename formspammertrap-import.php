<?php
/**
 * FormSpammerTrap Import Functionality - Simple Version
 * Provides secure import capabilities for form submissions
 */

// Prevent direct access
if (!defined('ABSPATH')) {
    exit;
}

class FormSpammerTrap_Import {
    
    private $max_file_size = 5242880; // 5MB
    private $max_records_per_import = 1000;
    
    public function __construct() {
        add_action('admin_menu', array($this, 'add_import_menu'), 16);
        add_action('wp_ajax_fst_import_preview', array($this, 'handle_preview_request'));
        add_action('admin_post_fst_import_process', array($this, 'handle_import_request'));
        add_action('admin_enqueue_scripts', array($this, 'enqueue_import_scripts'));
    }
    
    public function add_import_menu() {
        add_submenu_page(
            'options-general.php',
            'Import Form Submissions',
            'Import Submissions',
            'manage_options',
            'fst-import',
            array($this, 'import_page')
        );
    }
    
    public function enqueue_import_scripts($hook) {
        if ($hook === 'settings_page_fst-import') {
            wp_enqueue_script('jquery');
        }
    }
    
    public function import_page() {
        global $wpdb;
        
        $table_name = $wpdb->prefix . 'fst_submissions';
        
        if ($wpdb->get_var("SHOW TABLES LIKE '$table_name'") != $table_name) {
            echo '<div class="wrap">';
            echo '<h1>Import Form Submissions</h1>';
            echo '<div class="notice notice-error"><p>No submissions table found.</p></div>';
            echo '</div>';
            return;
        }
        
        $total_submissions = $wpdb->get_var("SELECT COUNT(*) FROM $table_name");
        
        ?>
        <div class="wrap">
            <h1>Import Form Submissions</h1>
            
            <div class="notice notice-info">
                <p><strong>Current Database:</strong> You have <?php echo $total_submissions; ?> submissions in your database.</p>
            </div>
            
            <form id="fst-import-form" method="post" action="<?php echo admin_url('admin-post.php'); ?>" enctype="multipart/form-data" style="background: white; padding: 25px; border: 1px solid #ddd; border-radius: 5px;">
                <?php wp_nonce_field('fst_import_nonce', 'import_nonce'); ?>
                <input type="hidden" name="action" value="fst_import_process">
                
                <h2>Import New Data</h2>
                
                <table class="form-table">
                    <tr>
                        <th scope="row">Select CSV File</th>
                        <td>
                            <input type="file" name="import_file" id="import_file" accept=".csv" required>
                            <p class="description">
                                <strong>Supported format:</strong> CSV only<br>
                                <strong>Maximum file size:</strong> 5MB<br>
                                <strong>Maximum records:</strong> 1,000 per import
                            </p>
                        </td>
                    </tr>
                    
                    <tr>
                        <th scope="row">Import Options</th>
                        <td>
                            <label><input type="checkbox" name="validate_emails" checked> Validate email addresses</label><br>
                            <label><input type="checkbox" name="test_mode"> Test mode - Preview only, don't actually import. Uncheck this before processing the import</label>
                        </td>
                    </tr>
					<tr>
    <tr>
    <th scope="row">How to Use Import</th>
    <td>
        <div style="background: #f0f8ff; padding: 15px; border-radius: 5px; border: 1px solid #0073aa;">
            <h4 style="margin-top: 0;">📋 Step-by-Step Instructions</h4>
            
            <p><strong>Step 1: Upload Your File</strong><br>
            Click "Choose File" and select your CSV file, then click "Upload & Preview File"</p>
            
            <p><strong>Step 2: Review the Preview</strong><br>
            You'll see the first 5 rows of your data to make sure it looks correct</p>
            
            <p><strong>Step 3: Check Field Mapping</strong><br>
            The system will try to automatically match your CSV columns to the right database fields:
            </p>
            <ul style="margin-left: 20px;">
                <li><strong>✅ Green "(Auto-detected)"</strong> - The system found a good match</li>
                <li><strong>Dropdown menus</strong> - Choose which column from your CSV goes to which field in the database</li>
                <li><strong>"-- Skip this field --"</strong> - Select this if you don't want to import that type of data</li>
            </ul>
            
            <p><strong>Step 4: Test or Import</strong><br>
            • <strong>With "Test mode" checked:</strong> Shows you what would be imported (safe preview)<br>
            • <strong>With "Test mode" unchecked:</strong> Actually imports the data into your database</p>
            
            <div style="background: #fff3cd; border: 1px solid #ffeaa7; padding: 10px; border-radius: 3px; margin-top: 10px;">
                <strong>💡 Example:</strong> If your CSV has a column called "Full Name" but the database expects "Visitor Name", 
                just select "Full Name" from the dropdown next to "Visitor Name" and the system will match them up correctly.
            </div>
        </div>
    </td>
</tr>
                </table>
                
                <h3>Step 1: Upload and Preview</h3>
                <p>
                    <button type="button" id="upload-preview" class="button">Upload & Preview File</button>
                </p>
                
                <div id="import-preview" style="margin-top: 20px; display: none;"></div>
                <div id="field-mapping" style="margin-top: 20px; display: none;"></div>
                
                <div id="import-actions" style="margin-top: 20px; display: none;">
                    <h3>Step 2: Import Data</h3>
                    <p>
                        <button type="submit" name="process_import" class="button button-primary" disabled>
                            Process Import
                        </button>
                    </p>
                </div>
            </form>
            
            <div style="background: #f0f8ff; border: 1px solid #0073aa; padding: 15px; border-radius: 5px; margin-top: 20px;">
                <h3>CSV Format Requirements</h3>
                <p>Your CSV should have headers in the first row. Common field names that will be auto-mapped:</p>
                <ul>
                    <li><strong>Name</strong> → Visitor Name</li>
                    <li><strong>Email</strong> → Visitor Email</li>
                    <li><strong>Subject</strong> → Subject</li>
                    <li><strong>Message</strong> → Message</li>
                    <li><strong>Timestamp</strong> → Submission Date</li>
                    <li><strong>IP</strong> → IP Address</li>
                </ul>
            </div>
        </div>
        
        <script>
        jQuery(document).ready(function($) {
            var uploadedData = null;
            
            $('#upload-preview').on('click', function() {
                var fileInput = $('#import_file')[0];
                var formData = new FormData();
                
                if (!fileInput.files[0]) {
                    alert('Please select a file first.');
                    return;
                }
                
                if (fileInput.files[0].size > 5242880) {
                    alert('File is too large. Maximum size is 5MB.');
                    return;
                }
                
                formData.append('import_file', fileInput.files[0]);
                formData.append('action', 'fst_import_preview');
                formData.append('import_nonce', $('input[name="import_nonce"]').val());
                
                $('#import-preview').html('<p>Analyzing file...</p>').show();
                
                $.ajax({
                    url: ajaxurl,
                    type: 'POST',
                    data: formData,
                    processData: false,
                    contentType: false,
                    success: function(response) {
                        if (response.success) {
                            uploadedData = response.data;
                            displayPreview(response.data);
                            displayFieldMapping(response.data);
                            $('#import-actions').show();
                            $('button[name="process_import"]').prop('disabled', false);
                        } else {
                            $('#import-preview').html('<div class="notice notice-error"><p>' + response.data + '</p></div>');
                        }
                    },
                    error: function() {
                        $('#import-preview').html('<div class="notice notice-error"><p>Upload failed. Please try again.</p></div>');
                    }
                });
            });
            
            function displayPreview(data) {
                var html = '<h4>File Preview (' + data.total_records + ' records found)</h4>';
                html += '<div style="background: #f9f9f9; padding: 15px; border: 1px solid #ddd; border-radius: 3px; overflow-x: auto;">';
                html += '<table class="widefat">';
                
                if (data.preview && data.preview.length > 0) {
                    html += '<thead><tr>';
                    for (var key in data.preview[0]) {
                        html += '<th>' + key + '</th>';
                    }
                    html += '</tr></thead>';
                    
                    html += '<tbody>';
                    for (var i = 0; i < Math.min(5, data.preview.length); i++) {
                        html += '<tr>';
                        for (var key in data.preview[i]) {
                            var value = data.preview[i][key];
                            if (value && value.length > 50) {
                                value = value.substring(0, 50) + '...';
                            }
                            html += '<td>' + (value || '') + '</td>';
                        }
                        html += '</tr>';
                    }
                    html += '</tbody>';
                }
                
                html += '</table>';
                html += '<p><em>Showing first 5 records. Total records to import: ' + data.total_records + '</em></p>';
                html += '</div>';
                
                $('#import-preview').html(html);
            }
            
            function displayFieldMapping(data) {
                var html = '<h4>Field Mapping</h4>';
                html += '<p>Map your CSV columns to database fields:</p>';
                html += '<table class="form-table">';
                
                var dbFields = [
                    {key: 'visitor_name', label: 'Visitor Name'},
                    {key: 'visitor_email', label: 'Visitor Email'},
                    {key: 'subject', label: 'Subject'},
                    {key: 'message', label: 'Message'},
                    {key: 'submission_date', label: 'Submission Date'},
                    {key: 'visitor_ip', label: 'IP Address'}
                ];
                
                var fileFields = data.available_fields || [];
                var autoMapping = data.auto_mapping || {};
                
                for (var i = 0; i < dbFields.length; i++) {
                    var field = dbFields[i];
                    var suggestedField = autoMapping[field.key] || '';
                    
                    html += '<tr>';
                    html += '<th>' + field.label + '</th>';
                    html += '<td>';
                    html += '<select name="field_mapping[' + field.key + ']">';
                    html += '<option value="">-- Skip this field --</option>';
                    
                    for (var j = 0; j < fileFields.length; j++) {
                        var selected = (fileFields[j] === suggestedField) ? ' selected' : '';
                        html += '<option value="' + fileFields[j] + '"' + selected + '>' + fileFields[j] + '</option>';
                    }
                    
                    html += '</select>';
                    if (suggestedField) {
                        html += ' <span style="color: green;">(Auto-detected)</span>';
                    }
                    html += '</td></tr>';
                }
                
                html += '</table>';
                $('#field-mapping').html(html).show();
            }
            
            $('#fst-import-form').on('submit', function(e) {
                if (!uploadedData) {
                    e.preventDefault();
                    alert('Please upload and preview a file first.');
                    return false;
                }
                return true;
            });
        });
        </script>
        <?php
    }
    
    public function handle_preview_request() {
        if (!wp_verify_nonce($_POST['import_nonce'], 'fst_import_nonce') || !current_user_can('manage_options')) {
            wp_send_json_error('Security check failed');
        }
        
        if (!isset($_FILES['import_file']) || $_FILES['import_file']['error'] !== UPLOAD_ERR_OK) {
            wp_send_json_error('File upload failed');
        }
        
        $file = $_FILES['import_file'];
        
        if ($file['size'] > $this->max_file_size) {
            wp_send_json_error('File too large');
        }
        
        $file_extension = strtolower(pathinfo($file['name'], PATHINFO_EXTENSION));
        if ($file_extension !== 'csv') {
            wp_send_json_error('Only CSV files are supported');
        }
        
        $parsed_data = $this->parse_csv_file($file['tmp_name']);
        
        if (is_wp_error($parsed_data)) {
            wp_send_json_error($parsed_data->get_error_message());
        }
        
        wp_send_json_success($parsed_data);
    }
    
    public function handle_import_request() {
        if (!wp_verify_nonce($_POST['import_nonce'], 'fst_import_nonce') || !current_user_can('manage_options')) {
            wp_die('Security check failed');
        }
        
        if (!isset($_FILES['import_file']) || $_FILES['import_file']['error'] !== UPLOAD_ERR_OK) {
            wp_die('File upload failed');
        }
        
        $file = $_FILES['import_file'];
        $test_mode = isset($_POST['test_mode']);
        
        $parsed_data = $this->parse_csv_file($file['tmp_name']);
        
        if (is_wp_error($parsed_data)) {
            wp_die('File parsing failed: ' . $parsed_data->get_error_message());
        }
        
        $result = $this->process_import($parsed_data, $_POST, $test_mode);
        
        $redirect_url = admin_url('admin.php?page=fst-import');
        if ($test_mode) {
            $redirect_url .= '&test_complete=1&records=' . $result['processed'];
        } else {
            $redirect_url .= '&import_complete=1&imported=' . $result['imported'];
        }
        
        wp_redirect($redirect_url);
        exit;
    }
    
    private function auto_detect_field_mapping($headers) {
    $mapping = array();
    
    foreach ($headers as $header) {
        $clean_header = strtolower(trim($header));
        
        // More flexible matching patterns
        if (preg_match('/^(name|visitor_name|full_?name|customer_?name)$/i', $clean_header)) {
            $mapping['visitor_name'] = $header; // Use original header case
        } elseif (preg_match('/^(email|visitor_email|e_?mail|customer_?email)$/i', $clean_header)) {
            $mapping['visitor_email'] = $header;
        } elseif (preg_match('/^(subject|title|topic)$/i', $clean_header)) {
            $mapping['subject'] = $header;
        } elseif (preg_match('/^(message|content|comment|description|body)$/i', $clean_header)) {
            $mapping['message'] = $header;
        } elseif (preg_match('/^(timestamp|date|created|submitted|time)$/i', $clean_header)) {
            $mapping['submission_date'] = $header;
        } elseif (preg_match('/^(ip|ip_address|visitor_ip)$/i', $clean_header)) {
            $mapping['visitor_ip'] = $header;
        } elseif (preg_match('/^(user_agent|browser|agent)$/i', $clean_header)) {
            $mapping['user_agent'] = $header;
        }
    }
    
    return $mapping;
}
    
    private function parse_csv_file($file_path) {
        $data = array();
        
        if (($handle = fopen($file_path, 'r')) !== FALSE) {
            $headers = fgetcsv($handle);
            
            if (!$headers) {
                return new WP_Error('parse_error', 'Could not read CSV headers');
            }
            
            $headers = array_map('trim', $headers);
            $row_count = 0;
            
            while (($row = fgetcsv($handle)) !== FALSE && $row_count < $this->max_records_per_import) {
                if (count($row) === count($headers)) {
                    $record = array_combine($headers, $row);
                    $data[] = $this->sanitize_record($record);
                    $row_count++;
                }
            }
            
            fclose($handle);
        } else {
            return new WP_Error('file_error', 'Could not open CSV file');
        }
        
        return array(
            'total_records' => count($data),
            'preview' => array_slice($data, 0, 5),
            'data' => $data,
            'available_fields' => $headers,
            'auto_mapping' => $this->auto_detect_field_mapping($headers)
        );
    }
    
    private function sanitize_record($record) {
    $sanitized = array();
    
    foreach ($record as $key => $value) {
        // Keep the original key case for field mapping, just trim whitespace
        $clean_key = trim($key);
        $clean_value = sanitize_textarea_field($value);
        $sanitized[$clean_key] = $clean_value;
    }
    
    return $sanitized;
}
    
    private function process_import($parsed_data, $options, $test_mode = false) {
        global $wpdb;
        
        $table_name = $wpdb->prefix . 'fst_submissions';
        $imported = 0;
        $skipped = 0;
        
        $field_mapping = isset($options['field_mapping']) ? $options['field_mapping'] : array();
        
        foreach ($parsed_data['data'] as $record) {
            $mapped_record = $this->apply_field_mapping($record, $field_mapping);
            
            if (!$test_mode) {
                $insert_result = $this->insert_record($mapped_record);
                if (!is_wp_error($insert_result)) {
                    $imported++;
                } else {
                    $skipped++;
                }
            } else {
                $imported++;
            }
        }
        
        return array(
            'processed' => $imported + $skipped,
            'imported' => $imported,
            'skipped' => $skipped
        );
    }
    
    private function apply_field_mapping($record, $field_mapping) {
    $mapped_record = array();
    
    // Create a case-insensitive lookup array for the record
    $record_lookup = array();
    foreach ($record as $key => $value) {
        $record_lookup[strtolower(trim($key))] = array('original_key' => $key, 'value' => $value);
    }
    
    foreach ($field_mapping as $target_field => $source_field) {
        if (!empty($source_field)) {
            $source_field_lower = strtolower(trim($source_field));
            
            if (isset($record_lookup[$source_field_lower])) {
                $actual_key = $record_lookup[$source_field_lower]['original_key'];
                $mapped_record[$target_field] = $record_lookup[$source_field_lower]['value'];
            }
        }
    }
    
    return $mapped_record;
}
    
    private function insert_record($record) {
    global $wpdb;
    
    $table_name = $wpdb->prefix . 'fst_submissions';
    
    // Ensure we have data to insert
    if (empty($record)) {
        return new WP_Error('empty_record', 'No data to insert');
    }
    
    // Process submission date
    $submission_date = current_time('mysql');
    if (isset($record['submission_date']) && !empty($record['submission_date'])) {
        // Try to parse the date from various formats
        $date_formats = array(
            'Y-m-d H:i:s',
            'Y-m-d',
            'm/d/Y',
            'd/m/Y',
            'M j, Y',
            'F j, Y'
        );
        
        foreach ($date_formats as $format) {
            $parsed_date = DateTime::createFromFormat($format, $record['submission_date']);
            if ($parsed_date !== false) {
                $submission_date = $parsed_date->format('Y-m-d H:i:s');
                break;
            }
        }
    }
    
    $insert_data = array(
        'visitor_name' => isset($record['visitor_name']) ? sanitize_text_field($record['visitor_name']) : '',
        'visitor_email' => isset($record['visitor_email']) ? sanitize_email($record['visitor_email']) : '',
        'subject' => isset($record['subject']) ? sanitize_text_field($record['subject']) : '',
        'message' => isset($record['message']) ? wp_kses_post($record['message']) : '',
        'submission_date' => $submission_date,
        'status' => 'unread',
        'visitor_ip' => isset($record['visitor_ip']) ? sanitize_text_field($record['visitor_ip']) : '',
        'user_agent' => isset($record['user_agent']) ? sanitize_text_field($record['user_agent']) : '',
        'additional_fields' => '',
        'attachments' => '',
        'admin_notes' => ''
    );
    
    $result = $wpdb->insert(
        $table_name,
        $insert_data,
        array('%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s')
    );
    
    if ($result === false) {
        $error_message = 'Database insert failed: ' . $wpdb->last_error;
        return new WP_Error('db_error', $error_message);
    }
	
    return $wpdb->insert_id;
}
}

// Initialize the import functionality
new FormSpammerTrap_Import();
?>