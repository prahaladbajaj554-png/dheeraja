<?php
namespace App\Controllers\Admin;

use App\Core\Controller;
use App\Core\Request;
use App\Core\Response;
use App\Core\Session;
use App\Core\Database;
use App\Models\AdminLog;
use App\Helpers\MailerHelper;

class SettingsController extends Controller
{
    public function mailSettings(Request $request)
    {
        $settings = [
            'smtp_host'          => setting('smtp_host', 'smtp.gmail.com'),
            'smtp_port'          => setting('smtp_port', '587'),
            'smtp_username'      => setting('smtp_username', 'dheerajamatrimony@gmail.com'),
            'smtp_password'      => setting('smtp_password', ''),
            'smtp_from_name'     => setting('smtp_from_name', 'Dheeraja Matrimony Alerts'),
            'smtp_encryption'    => setting('smtp_encryption', 'tls'),
            'alert_admin_email'  => setting('alert_admin_email', 'dheerajamatrimony@gmail.com'),
            'support_email'      => setting('support_email', 'dheerajamatrimony@gmail.com'),
            'support_phone'      => setting('support_phone', '+91 98765 43210')
        ];

        $this->view('admin/settings/mail', [
            'page_title' => 'Email & PHPMailer SMTP Settings',
            'settings'   => $settings
        ]);
    }

    public function saveMailSettings(Request $request)
    {
        $fields = [
            'smtp_host'         => trim($request->post('smtp_host', 'smtp.gmail.com')),
            'smtp_port'         => trim($request->post('smtp_port', '587')),
            'smtp_username'     => trim($request->post('smtp_username', '')),
            'smtp_from_name'    => trim($request->post('smtp_from_name', 'Dheeraja Matrimony Alerts')),
            'smtp_encryption'   => trim($request->post('smtp_encryption', 'tls')),
            'alert_admin_email' => trim($request->post('alert_admin_email', '')),
            'support_email'     => trim($request->post('support_email', '')),
            'support_phone'     => trim($request->post('support_phone', ''))
        ];

        // Only update password if a new one is provided
        $pwd = trim($request->post('smtp_password', ''));
        if (!empty($pwd)) {
            $fields['smtp_password'] = $pwd;
        }

        foreach ($fields as $key => $val) {
            Database::query("INSERT INTO `app_settings` (`setting_key`, `setting_value`, `setting_group`) 
                            VALUES (:k, :v, 'mail') 
                            ON DUPLICATE KEY UPDATE `setting_value` = :v", [
                'k' => $key,
                'v' => $val
            ]);
        }

        $admin = Session::getAdmin();
        AdminLog::log($admin['id'] ?? 1, 'UPDATE_MAIL_SETTINGS', 'app_settings', null, [
            'smtp_host'     => $fields['smtp_host'],
            'smtp_username' => $fields['smtp_username']
        ]);

        $this->flash('success', 'PHPMailer & Gmail SMTP settings updated successfully.');
        Response::redirect('/admin/settings/mail');
    }

    public function sendTestEmail(Request $request)
    {
        $testEmail = trim($request->post('test_email', ''));
        if (empty($testEmail) || !filter_var($testEmail, FILTER_VALIDATE_EMAIL)) {
            $this->flash('error', 'Please provide a valid destination email address for the test.');
            Response::redirect('/admin/settings/mail');
        }

        $sent = MailerHelper::send(
            $testEmail,
            'Master Administrator',
            '💍 [SMTP Test] Dheeraja Matrimony Email System Verification',
            'admin-urgent-alert',
            [
                'alert_subject' => 'SMTP Configuration Verified Successfully',
                'alert_message' => "Congratulations! Your PHPMailer engine is functioning properly.\nOutgoing emails and real-time matrimonial notifications are operating normally.",
                'details'       => [
                    'SMTP Host'     => setting('smtp_host', 'smtp.gmail.com'),
                    'SMTP Port'     => setting('smtp_port', '587'),
                    'From Email'    => setting('smtp_username', 'dheerajamatrimony@gmail.com'),
                    'Sender Name'   => setting('smtp_from_name', 'Dheeraja Matrimony Alerts'),
                    'Dispatched At' => date('Y-m-d H:i:s T')
                ]
            ]
        );

        if ($sent) {
            $this->flash('success', "✅ Test email successfully dispatched to {$testEmail}! Check your inbox/spam folder.");
        } else {
            $this->flash('warning', "Notice: Test logged to storage/logs/mailer.log. If using Gmail, ensure your 16-character Google App Password is entered.");
        }

        Response::redirect('/admin/settings/mail');
    }

    public function apiSettings(Request $request)
    {
        $settings = [
            'payment_gateway_mode'         => setting('payment_gateway_mode', 'test'),
            'razorpay_key_id'              => setting('razorpay_key_id', 'rzp_test_placeholder_key'),
            'razorpay_key_secret'          => setting('razorpay_key_secret', ''),
            'phonepe_merchant_id'          => setting('phonepe_merchant_id', ''),
            'phonepe_salt_key'             => setting('phonepe_salt_key', ''),
            'phonepe_salt_index'           => setting('phonepe_salt_index', '1'),
            'upi_merchant_vpa'             => setting('upi_merchant_vpa', 'dheeraja@okhdfcbank'),
            'upi_merchant_name'            => setting('upi_merchant_name', 'Dheeraja Matrimony'),
            'sms_gateway_provider'         => setting('sms_gateway_provider', 'msg91'),
            'sms_api_key'                  => setting('sms_api_key', ''),
            'sms_sender_id'                => setting('sms_sender_id', 'DHRMAT'),
            'whatsapp_cloud_api_token'     => setting('whatsapp_cloud_api_token', ''),
            'whatsapp_phone_number_id'     => setting('whatsapp_phone_number_id', ''),
            'whatsapp_business_account_id' => setting('whatsapp_business_account_id', ''),
            'firebase_server_key'          => setting('firebase_server_key', ''),
            'firebase_project_id'          => setting('firebase_project_id', '')
        ];

        $this->view('admin/settings/api', [
            'page_title' => 'Master API Credentials & Payment Gateways',
            'settings'   => $settings
        ]);
    }

    public function saveApiSettings(Request $request)
    {
        $keys = [
            'payment_gateway_mode', 'razorpay_key_id', 'razorpay_key_secret',
            'phonepe_merchant_id', 'phonepe_salt_key', 'phonepe_salt_index',
            'upi_merchant_vpa', 'upi_merchant_name',
            'sms_gateway_provider', 'sms_api_key', 'sms_sender_id',
            'whatsapp_cloud_api_token', 'whatsapp_phone_number_id', 'whatsapp_business_account_id',
            'firebase_server_key', 'firebase_project_id'
        ];

        foreach ($keys as $k) {
            $val = trim($request->post($k, ''));
            // If secret is blank, retain previous value
            if (in_array($k, ['razorpay_key_secret', 'phonepe_salt_key', 'whatsapp_cloud_api_token', 'firebase_server_key']) && empty($val)) {
                continue;
            }

            Database::query("INSERT INTO `app_settings` (`setting_key`, `setting_value`, `setting_group`) 
                            VALUES (:k, :v, 'api') 
                            ON DUPLICATE KEY UPDATE `setting_value` = :v", [
                'k' => $k,
                'v' => $val
            ]);
        }

        $admin = Session::getAdmin();
        AdminLog::log($admin['id'] ?? 1, 'UPDATE_API_SETTINGS', 'app_settings', null, [
            'gateway_mode' => $request->post('payment_gateway_mode', 'test')
        ]);

        $this->flash('success', 'Master API Keys, Payment Gateways & SMS/WhatsApp Credentials updated successfully without code changes!');
        Response::redirect('/admin/settings/api');
    }
}
