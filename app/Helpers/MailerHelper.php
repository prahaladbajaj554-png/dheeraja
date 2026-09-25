<?php
namespace App\Helpers;

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use App\Core\Database;

class MailerHelper
{
    public static function send(string $toEmail, string $toName, string $subject, string $templateName, array $data = []): bool
    {
        $config = require dirname(__DIR__, 2) . '/config/mail.php';
        
        // Check dynamic SMTP credentials from database if set
        $dbHost = setting('smtp_host', $config['host']);
        $dbPort = (int)setting('smtp_port', $config['port']);
        $dbUser = setting('smtp_username', $config['username']);
        $dbPass = setting('smtp_password', $config['password']);
        $dbFrom = setting('smtp_from_name', $config['from_name']);
        $dbEnc  = setting('smtp_encryption', $config['encryption']);

        $mail = new PHPMailer(true);

        try {
            $mail->isSMTP();
            $mail->Host       = $dbHost;
            $mail->SMTPAuth   = !empty($dbUser) && !empty($dbPass);
            $mail->Username   = $dbUser;
            $mail->Password   = $dbPass;
            $mail->SMTPSecure = $dbEnc === 'ssl' ? PHPMailer::ENCRYPTION_SMTPS : PHPMailer::ENCRYPTION_STARTTLS;
            $mail->Port       = $dbPort;
            $mail->CharSet    = 'UTF-8';
            $mail->Timeout    = 2;
            $mail->Timelimit  = 2;

            $fromEmail = !empty($dbUser) ? $dbUser : $config['from_address'];
            $mail->setFrom($fromEmail, $dbFrom);
            $mail->addAddress($toEmail, $toName);
            $mail->addReplyTo($config['support_email'], $dbFrom);

            $mail->isHTML(true);
            $mail->Subject = $subject;

            // Render view template
            $body = self::renderTemplate($templateName, array_merge($data, [
                'recipient_name' => $toName,
                'recipient_email'=> $toEmail,
                'site_name'      => setting('site_name', 'Dheeraja Matrimony'),
                'support_email'  => setting('support_email', 'support@dheerajamatrimony.com'),
                'support_phone'  => setting('support_phone', '+91 98765 43210')
            ]));

            $mail->Body = $body;
            $mail->AltBody = strip_tags(str_replace(['<br>', '</p>', '</div>'], ["\n", "\n\n", "\n"], $body));

            // In local/test mode if SMTP password is blank, simulate delivery and log
            if (empty($dbPass)) {
                $logMsg = date('[Y-m-d H:i:s]') . " [SIMULATED MAIL] To: {$toEmail} | Subject: {$subject} | Template: {$templateName}\n";
                file_put_contents(dirname(__DIR__, 2) . '/storage/logs/mailer.log', $logMsg, FILE_APPEND);
                return true;
            }

            return $mail->send();
        } catch (Exception $e) {
            $err = date('[Y-m-d H:i:s]') . " Mail Error: " . $mail->ErrorInfo . " | " . $e->getMessage() . "\n";
            file_put_contents(dirname(__DIR__, 2) . '/storage/logs/mailer.log', $err, FILE_APPEND);
            return false;
        }
    }

    public static function alertAdmin(string $subject, string $message, array $details = []): bool
    {
        $adminEmail = setting('alert_admin_email', 'admin@dheerajamatrimony.com');
        return self::send(
            $adminEmail,
            'Master Administrator',
            '🚨 [Dheeraja Alert] ' . $subject,
            'admin-urgent-alert',
            ['alert_subject' => $subject, 'alert_message' => $message, 'details' => $details]
        );
    }

    public static function sendFreeVipGranted(array $user, string $planTitle, int $durationDays): bool
    {
        $name = ($user['first_name'] ?? 'Member');
        return self::send(
            $user['email'],
            $name,
            '👑 Congratulations! Your Dheeraja Royal VIP Pro Plan is Activated',
            'free-vip-granted',
            [
                'user'          => $user,
                'plan_title'    => $planTitle,
                'duration_days' => $durationDays,
                'expires_at'    => date('d M Y', strtotime("+{$durationDays} days"))
            ]
        );
    }

    public static function sendKycStatus(array $user, string $status, string $reason = ''): bool
    {
        $template = $status === 'approved' ? 'kyc-approved' : 'kyc-rejected';
        $subject = $status === 'approved' 
            ? '✅ Your Identity Verification is Approved! - Dheeraja Matrimony' 
            : '⚠️ Identity Verification Update - Action Required';

        return self::send($user['email'], $user['first_name'] ?? 'Member', $subject, $template, [
            'status' => $status,
            'reason' => $reason
        ]);
    }

    private static function renderTemplate(string $templateName, array $data): string
    {
        extract($data);
        ob_start();
        $path = dirname(__DIR__, 2) . "/views/emails/{$templateName}.php";
        if (file_exists($path)) {
            include $path;
        } else {
            echo "<div style='font-family: sans-serif; padding: 20px;'><h2>" . htmlspecialchars($data['alert_subject'] ?? 'Notification') . "</h2><p>" . nl2br(htmlspecialchars($data['alert_message'] ?? '')) . "</p></div>";
        }
        return ob_get_clean();
    }
}
