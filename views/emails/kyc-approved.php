<!DOCTYPE html>
<html>
<head><meta charset="utf-8"><title>KYC Status</title></head>
<body style="margin: 0; padding: 0; background-color: #FDFBF7; font-family: sans-serif; color: #2D2D2D;">
  <table width="100%" border="0" cellspacing="0" cellpadding="0" style="background-color: #FDFBF7; padding: 40px 10px;">
    <tr>
      <td align="center">
        <table width="600" border="0" cellspacing="0" cellpadding="0" style="background-color: #FFFFFF; border-radius: 16px; overflow: hidden; border: 1px solid #E8DFD0;">
          <tr>
            <td align="center" style="background: linear-gradient(135deg, #6B1D2F 0%, #3D0C17 100%); padding: 30px 20px; border-bottom: 3px solid #D4AF37;">
              <h1 style="color: #D4AF37; margin: 0; font-size: 24px; font-family: Georgia, serif;">DHEERAJA MATRIMONY</h1>
            </td>
          </tr>
          <tr>
            <td style="padding: 35px 30px; text-align: center;">
              <?php if (($status ?? '') === 'approved'): ?>
                <div style="font-size: 48px; margin-bottom: 10px;">🛡️</div>
                <h2 style="color: #1B7A43; margin: 0 0 10px 0;">Identity Verified Successfully!</h2>
                <p style="color: #555555; line-height: 1.6; font-size: 15px;">
                  Namaste <?= htmlspecialchars($recipient_name) ?> ji,<br>
                  Your Government ID proof has been verified by our compliance team. The <strong>Verified Blue Shield</strong> has been added to your profile.
                </p>
              <?php else: ?>
                <div style="font-size: 48px; margin-bottom: 10px;">⚠️</div>
                <h2 style="color: #C0392B; margin: 0 0 10px 0;">Action Required: ID Verification Update</h2>
                <p style="color: #555555; line-height: 1.6; font-size: 15px;">
                  Namaste <?= htmlspecialchars($recipient_name) ?> ji,<br>
                  We were unable to verify your submitted identity document.<br>
                  <strong>Reason:</strong> <?= htmlspecialchars($reason ?? 'Document unreadable or invalid') ?>
                </p>
                <div style="margin-top: 20px;">
                  <a href="<?= htmlspecialchars(setting('app_url', 'http://localhost:8000')) ?>/profile/kyc" style="background-color: #6B1D2F; color: #FFFFFF; padding: 12px 24px; text-decoration: none; border-radius: 6px; font-weight: bold;">Re-upload Verification Document</a>
                </div>
              <?php endif; ?>
            </td>
          </tr>
          <tr>
            <td style="background-color: #F8F5EE; padding: 15px; text-align: center; font-size: 12px; color: #888888;">
              &copy; <?= date('Y') ?> <?= htmlspecialchars($site_name) ?>.
            </td>
          </tr>
        </table>
      </td>
    </tr>
  </table>
</body>
</html>
