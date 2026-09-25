# 📧 Module 05: Alert & PHPMailer Notification Engine

## 📌 Engine Architecture

The notification engine is architected to deliver **zero-latency, high-deliverability alerts** to both users and administrators across every critical matrimonial lifecycle event.

- **Primary Email Driver**: **PHPMailer (v6.9+)** using authenticated **Gmail SMTP**.
- **Delivery Protocol**: SMTP over TLS on port `587` (or SSL on port `465`).
- **Templating**: Modular HTML email templates adhering to email client standards (tables, inline CSS, mobile-responsive layout) designed with our **Royal Maroon & Gold** visual identity.
- **Fail-Safe Mechanism**: Automatic error catching and logging to `storage/logs/mailer.log` without breaking application execution flow.

---

## ⚙️ Gmail SMTP Configuration Blueprint

To authenticate with Google's SMTP infrastructure securely without using the personal account password, the system utilizes a 16-character **Google App Password**.

```php
// app/Config/mail.php
return [
    'driver'       => 'smtp',
    'host'         => getenv('MAIL_HOST') ?: 'smtp.gmail.com',
    'port'         => getenv('MAIL_PORT') ?: 587,
    'encryption'   => getenv('MAIL_ENCRYPTION') ?: 'tls', // 'tls' or 'ssl'
    'username'     => getenv('MAIL_USERNAME') ?: 'dheerajamatrimony@gmail.com',
    'password'     => getenv('MAIL_PASSWORD') ?: 'xxxx xxxx xxxx xxxx', // 16-char App Password
    'from_address' => getenv('MAIL_FROM_ADDRESS') ?: 'dheerajamatrimony@gmail.com',
    'from_name'    => getenv('MAIL_FROM_NAME') ?: 'Dheeraja Matrimony',
    'admin_alert_email' => getenv('MAIL_ADMIN_ALERT') ?: 'admin@dheerajamatrimony.com',
    'debug_level'  => 0 // 0 for production, 2 for verbose SMTP debugging
];
```

---

## 🔔 Complete Alert Trigger Matrix

### 1. User Event Alerts

| Trigger Event | Channel | Subject Line | Recipient | Action Link / CTA |
| :--- | :--- | :--- | :--- | :--- |
| **New User Welcome** | Email + In-App | 💍 Welcome to Dheeraja Matrimony — Your Journey Begins! | User | Complete Profile Now |
| **Email Verification** | Email | 🔐 Verify Your Email Address — Dheeraja Matrimony | User | Verify Email Button / OTP |
| **Password Reset** | Email | 🛡️ Reset Your Account Password | User | Reset Password Link |
| **KYC Approved** | Email + In-App | ✅ Congratulations! Your Identity is Verified on Dheeraja | User | View Verified Profile |
| **KYC Rejected** | Email + In-App | ⚠️ Action Required: Update Your ID Proof Verification | User | Resubmit Documents |
| **Interest Received** | Email + In-App | 💖 [Sender Name] has Expressed Interest in You! | User | View Profile & Respond |
| **Interest Accepted** | Email + In-App | 🎉 Great News! [Sender Name] Accepted Your Interest | User | Start In-App Conversation |
| **New Direct Message**| In-App + Email | 💬 New Message from [Sender Name] | User | Reply in App |
| **Free VIP Granted** | Email + In-App | 👑 Congratulations! Dheeraja Royal VIP Pro Activated for You | User | Explore VIP Features |
| **Plan Expiring Soon**| Email + In-App | ⏳ Your VIP Pro Access Expires in 3 Days | User | Renew Subscription |
| **New Matches Digest**| Email | ✨ 5 Compatible Matches Found for You This Week | User | Explore Recommendations |

---

### 2. Admin Operational & Security Alerts

| Trigger Event | Severity | Subject Line | Recipient | Action Link / CTA |
| :--- | :--- | :--- | :--- | :--- |
| **New Member Registered** | Normal | 👤 New Member Joined: [Name] ([Matrimony ID]) | Master Admin | Review Profile in Admin |
| **KYC Document Submitted** | High | 📄 New ID Verification Pending: [Matrimony ID] | Verification Queue | Review Documents Now |
| **Suspicious Login / Brute Force** | Critical | 🚨 Security Alert: 5 Failed Logins on Admin Panel from [IP] | Master Admin | Inspect Security Logs / Ban IP |
| **Profile Reported by User**| High | 🚩 Profile Flagged for Review: [Reported ID] | Moderator | Review Report & Chat Logs |
| **Daily Executive Digest** | Informational| 📊 Dheeraja Matrimony Daily Summary: [Date] | Master Admin | Open Executive Dashboard |

---

## 💌 Royal HTML Email Template Architecture

All outgoing emails use a unified, responsive master frame styled with Royal Maroon and Gold accents.

### Visual Wireframe of Outgoing Email

```text
+-------------------------------------------------------------+
|               👑 DHEERAJA MATRIMONY                         |
|             Purity • Heritage • Trust                       |
|               (Deep Maroon & Gold Gradient Header)           |
+-------------------------------------------------------------+
|                                                             |
|  Namaste Rohan Sharma ji,                                   |
|                                                             |
|  Congratulations! We are delighted to inform you that       |
|  your special DHEERAJA ROYAL VIP PRO subscription has       |
|  been activated with our compliments!                       |
|                                                             |
|  +-------------------------------------------------------+  |
|  |  👑 Plan: Dheeraja Royal VIP Pro (Launch Special)     |  |
|  |  ⏳ Validity: 90 Days (Expires 25 Dec 2026)          |  |
|  |  📞 Contact Views: 200 Free Profile Contacts          |  |
|  |  💬 Direct Chat: Unlimited In-App Conversations       |  |
|  |  ⭐ Search Boost: Featured at the top of recommendations |
|  +-------------------------------------------------------+  |
|                                                             |
|               [ EXPLORE VIP PROFILES NOW ]                  |
|               (Gold Button with Maroon Text)                |
|                                                             |
|  Wishing you the very best in finding your ideal life        |
|  partner.                                                   |
|                                                             |
+-------------------------------------------------------------+
|  Need assistance? Contact us at support@dheerajamatrimony.com|
|  © 2026 Dheeraja Matrimony. All Rights Reserved.             |
|  (Clean Muted Gold Border & Footer)                         |
+-------------------------------------------------------------+
```

---

## 💻 Reusable `MailerHelper` Implementation Standard

The mailer is wrapped in a clean, self-contained static helper class:

```php
namespace App\Helpers;

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

class MailerHelper
{
    public static function send(string $toEmail, string $toName, string $subject, string $templateName, array $data = []): bool
    {
        $config = require __DIR__ . '/../../config/mail.php';
        $mail = new PHPMailer(true);

        try {
            // SMTP Server Settings
            $mail->isSMTP();
            $mail->Host       = $config['host'];
            $mail->SMTPAuth   = true;
            $mail->Username   = $config['username'];
            $mail->Password   = $config['password'];
            $mail->SMTPSecure = $config['encryption'] === 'ssl' ? PHPMailer::ENCRYPTION_SMTPS : PHPMailer::ENCRYPTION_STARTTLS;
            $mail->Port       = $config['port'];
            $mail->CharSet    = 'UTF-8';

            // Sender & Recipient
            $mail->setFrom($config['from_address'], $config['from_name']);
            $mail->addAddress($toEmail, $toName);
            $mail->addReplyTo($config['support_email'] ?? $config['from_address'], $config['from_name']);

            // Compile HTML View Template
            $htmlBody = self::renderTemplate($templateName, $data);

            // Content
            $mail->isHTML(true);
            $mail->Subject = $subject;
            $mail->Body    = $htmlBody;
            $mail->AltBody = strip_tags(str_replace(['<br>', '</p>'], ["\n", "\n\n"], $htmlBody));

            return $mail->send();
        } catch (Exception $e) {
            error_log(date('[Y-m-d H:i:s]') . " Mailer Error: {$mail->ErrorInfo} | Exception: " . $e->getMessage() . "\n", 3, __DIR__ . '/../../storage/logs/mailer.log');
            return false;
        }
    }

    public static function alertAdmin(string $subject, string $message, array $details = []): bool
    {
        $config = require __DIR__ . '/../../config/mail.php';
        return self::send(
            $config['admin_alert_email'],
            'Master Admin',
            "[ALERT] " . $subject,
            'admin-urgent-alert',
            ['message' => $message, 'details' => $details, 'timestamp' => date('Y-m-d H:i:s')]
        );
    }

    private static function renderTemplate(string $templateName, array $data): string
    {
        extract($data);
        ob_start();
        $templatePath = __DIR__ . "/../../views/emails/{$templateName}.php";
        if (file_exists($templatePath)) {
            include $templatePath;
        } else {
            echo "<p>" . htmlspecialchars($data['message'] ?? '') . "</p>";
        }
        return ob_get_clean();
    }
}
```
