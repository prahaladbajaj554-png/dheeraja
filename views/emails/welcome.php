<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Welcome to Dheeraja Matrimony</title>
</head>
<body style="margin: 0; padding: 0; background-color: #FDFBF7; font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; color: #2D2D2D;">
  <table width="100%" border="0" cellspacing="0" cellpadding="0" style="background-color: #FDFBF7; padding: 40px 10px;">
    <tr>
      <td align="center">
        <table width="600" border="0" cellspacing="0" cellpadding="0" style="background-color: #FFFFFF; border-radius: 16px; overflow: hidden; border: 1px solid #E8DFD0; box-shadow: 0 10px 30px rgba(107, 29, 47, 0.08);">
          <tr>
            <td align="center" style="background: linear-gradient(135deg, #6B1D2F 0%, #3D0C17 100%); padding: 36px 20px; border-bottom: 3px solid #D4AF37;">
              <h1 style="color: #D4AF37; margin: 0; font-size: 26px; letter-spacing: 2px; text-transform: uppercase; font-family: Georgia, serif;">DHEERAJA MATRIMONY</h1>
              <p style="color: #FDFBF7; margin: 6px 0 0 0; font-size: 13px; letter-spacing: 1px; opacity: 0.9;">Sacred Connections • Royal Heritage • Trust</p>
            </td>
          </tr>
          <tr>
            <td style="padding: 40px 35px;">
              <h2 style="color: #6B1D2F; margin: 0 0 15px 0; font-size: 22px; text-align: center; font-family: Georgia, serif;">
                Namaste <?= htmlspecialchars($recipient_name) ?> ji, Welcome to Dheeraja!
              </h2>
              <p style="font-size: 15px; line-height: 1.6; color: #555555; text-align: center; margin: 0 0 25px 0;">
                Your matrimonial profile has been created successfully. Your unique Matrimony ID is:
              </p>
              <div style="text-align: center; margin-bottom: 30px;">
                <span style="display: inline-block; background-color: #FFFDF5; border: 2px dashed #D4AF37; padding: 12px 28px; font-size: 20px; font-weight: bold; color: #6B1D2F; letter-spacing: 2px; border-radius: 8px;">
                  <?= htmlspecialchars($matrimony_id ?? 'DM10000') ?>
                </span>
              </div>
              <p style="font-size: 14px; line-height: 1.6; color: #555555; text-align: center; margin-bottom: 30px;">
                To maximize interest from verified families, please upload your photograph and complete your Kundali / family details.
              </p>
              <div style="text-align: center;">
                <a href="<?= htmlspecialchars(setting('app_url', 'http://localhost:8000')) ?>/profile" style="background: linear-gradient(135deg, #6B1D2F 0%, #4A121F 100%); color: #FFFFFF; text-decoration: none; padding: 14px 34px; border-radius: 8px; font-weight: bold; font-size: 15px; display: inline-block; box-shadow: 0 4px 15px rgba(107, 29, 47, 0.3);">
                  Complete Your Profile &rarr;
                </a>
              </div>
            </td>
          </tr>
          <tr>
            <td style="background-color: #F8F5EE; padding: 20px; text-align: center; border-top: 1px solid #E8DFD0; font-size: 12px; color: #888888;">
              &copy; <?= date('Y') ?> <?= htmlspecialchars($site_name) ?>. All rights reserved.
            </td>
          </tr>
        </table>
      </td>
    </tr>
  </table>
</body>
</html>
