<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Admin Security Alert - Dheeraja Matrimony</title>
</head>
<body style="margin: 0; padding: 0; background-color: #1A1A1A; font-family: monospace; color: #E0E0E0;">
  <table width="100%" border="0" cellspacing="0" cellpadding="20" style="background-color: #1A1A1A;">
    <tr>
      <td align="center">
        <table width="600" border="0" cellspacing="0" cellpadding="0" style="background-color: #242424; border-radius: 8px; border-left: 4px solid #D4AF37;">
          <tr>
            <td style="padding: 20px 25px; background-color: #2D141A; border-bottom: 1px solid #441A22;">
              <h2 style="color: #FF5A79; margin: 0; font-size: 18px;">🚨 <?= htmlspecialchars($alert_subject) ?></h2>
              <span style="font-size: 12px; color: #D4AF37;">DHEERAJA MASTER SECURITY MONITOR</span>
            </td>
          </tr>
          <tr>
            <td style="padding: 25px;">
              <p style="font-size: 14px; line-height: 1.5; color: #FFFFFF; margin: 0 0 20px 0;">
                <?= nl2br(htmlspecialchars($alert_message)) ?>
              </p>

              <?php if (!empty($details)): ?>
                <table width="100%" border="0" cellspacing="0" cellpadding="6" style="background-color: #1A1A1A; border-radius: 6px; font-size: 12px; margin-bottom: 20px;">
                  <?php foreach ($details as $k => $v): ?>
                    <tr>
                      <td width="140" style="color: #888888; border-bottom: 1px solid #282828;"><strong><?= htmlspecialchars($k) ?>:</strong></td>
                      <td style="color: #00FFB2; border-bottom: 1px solid #282828;"><?= is_array($v) ? json_encode($v) : htmlspecialchars((string)$v) ?></td>
                    </tr>
                  <?php endforeach; ?>
                </table>
              <?php endif; ?>

              <div style="margin-top: 20px;">
                <a href="<?= htmlspecialchars(setting('app_url', 'http://localhost:8000')) ?>/admin/security/audit-logs" style="background-color: #6B1D2F; color: #FFFFFF; padding: 10px 20px; text-decoration: none; border-radius: 4px; font-size: 13px; font-weight: bold; display: inline-block;">
                  Inspect Master Admin Logs &rarr;
                </a>
              </div>
            </td>
          </tr>
          <tr>
            <td style="padding: 15px 25px; background-color: #1F1F1F; font-size: 11px; color: #666666; border-top: 1px solid #2E2E2E;">
              Timestamp: <?= date('Y-m-d H:i:s T') ?> | Server IP: <?= $_SERVER['SERVER_ADDR'] ?? '127.0.0.1' ?>
            </td>
          </tr>
        </table>
      </td>
    </tr>
  </table>
</body>
</html>
