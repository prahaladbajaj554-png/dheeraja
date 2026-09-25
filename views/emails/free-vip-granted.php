<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>VIP Activated - Dheeraja Matrimony</title>
</head>
<body style="margin: 0; padding: 0; background-color: #FDFBF7; font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; color: #2D2D2D;">
  <table width="100%" border="0" cellspacing="0" cellpadding="0" style="background-color: #FDFBF7; padding: 40px 10px;">
    <tr>
      <td align="center">
        <!-- Main Card -->
        <table width="600" border="0" cellspacing="0" cellpadding="0" style="background-color: #FFFFFF; border-radius: 16px; overflow: hidden; border: 1px solid #E8DFD0; box-shadow: 0 10px 30px rgba(107, 29, 47, 0.08);">
          
          <!-- Header Banner -->
          <tr>
            <td align="center" style="background: linear-gradient(135deg, #6B1D2F 0%, #3D0C17 100%); padding: 36px 20px; border-bottom: 3px solid #D4AF37;">
              <h1 style="color: #D4AF37; margin: 0; font-size: 26px; letter-spacing: 2px; text-transform: uppercase; font-family: Georgia, serif;">DHEERAJA MATRIMONY</h1>
              <p style="color: #FDFBF7; margin: 6px 0 0 0; font-size: 13px; letter-spacing: 1px; opacity: 0.9;">Sacred Connections • Royal Heritage • Trust</p>
            </td>
          </tr>

          <!-- Content Body -->
          <tr>
            <td style="padding: 40px 35px;">
              <div style="text-align: center; margin-bottom: 25px;">
                <span style="background-color: #FFFDF5; border: 1px solid #D4AF37; color: #6B1D2F; padding: 6px 18px; border-radius: 20px; font-size: 12px; font-weight: bold; letter-spacing: 1.5px; text-transform: uppercase;">
                  👑 SPECIAL LAUNCH PRIVILEGE
                </span>
              </div>

              <h2 style="color: #6B1D2F; margin: 0 0 15px 0; font-size: 22px; text-align: center; font-family: Georgia, serif;">
                Namaste <?= htmlspecialchars($recipient_name) ?> ji,
              </h2>

              <p style="font-size: 15px; line-height: 1.6; color: #555555; text-align: center; margin: 0 0 25px 0;">
                We are pleased to present you with a complimentary upgrade to our premier <strong><?= htmlspecialchars($plan_title) ?></strong> as part of our exclusive launch celebration!
              </p>

              <!-- Benefits Card -->
              <table width="100%" border="0" cellspacing="0" cellpadding="0" style="background-color: #FDF9F3; border: 1px solid #EADBBA; border-radius: 12px; margin-bottom: 30px;">
                <tr>
                  <td style="padding: 24px;">
                    <table width="100%" border="0" cellspacing="0" cellpadding="8">
                      <tr>
                        <td width="30" style="font-size: 18px;">👑</td>
                        <td style="font-size: 14px; color: #333333;"><strong>Membership Plan:</strong> <?= htmlspecialchars($plan_title) ?></td>
                      </tr>
                      <tr>
                        <td width="30" style="font-size: 18px;">⏳</td>
                        <td style="font-size: 14px; color: #333333;"><strong>Validity:</strong> <?= (int)$duration_days ?> Days (Valid till <?= htmlspecialchars($expires_at) ?>)</td>
                      </tr>
                      <tr>
                        <td width="30" style="font-size: 18px;">📞</td>
                        <td style="font-size: 14px; color: #333333;"><strong>Verified Contact Views:</strong> 200 Free Direct Contacts</td>
                      </tr>
                      <tr>
                        <td width="30" style="font-size: 18px;">💬</td>
                        <td style="font-size: 14px; color: #333333;"><strong>Direct In-App Messaging:</strong> Unlimited Conversations</td>
                      </tr>
                      <tr>
                        <td width="30" style="font-size: 18px;">⭐</td>
                        <td style="font-size: 14px; color: #333333;"><strong>Match Visibility:</strong> Featured Profile with Royal Gold Badge</td>
                      </tr>
                    </table>
                  </td>
                </tr>
              </table>

              <!-- Call to Action Button -->
              <div style="text-align: center; margin: 30px 0;">
                <a href="<?= htmlspecialchars(setting('app_url', 'http://localhost:8000')) ?>/matches" style="background: linear-gradient(135deg, #D4AF37 0%, #B89326 100%); color: #3D0C17; text-decoration: none; padding: 14px 34px; border-radius: 8px; font-weight: bold; font-size: 15px; display: inline-block; box-shadow: 0 4px 15px rgba(212, 175, 55, 0.4); text-transform: uppercase; letter-spacing: 1px;">
                  Explore Recommended Matches &rarr;
                </a>
              </div>

              <p style="font-size: 14px; line-height: 1.6; color: #777777; text-align: center; margin: 25px 0 0 0;">
                Wishing you harmony, prosperity, and joy on your journey to finding your life partner.
              </p>
            </td>
          </tr>

          <!-- Footer -->
          <tr>
            <td style="background-color: #F8F5EE; padding: 25px 30px; text-align: center; border-top: 1px solid #E8DFD0;">
              <p style="margin: 0; font-size: 12px; color: #8C8C8C;">
                Need assistance? Our Relationship Managers are here to help:<br>
                Email: <a href="mailto:<?= htmlspecialchars($support_email) ?>" style="color: #6B1D2F; text-decoration: none; font-weight: bold;"><?= htmlspecialchars($support_email) ?></a> | Phone: <?= htmlspecialchars($support_phone) ?>
              </p>
              <p style="margin: 10px 0 0 0; font-size: 11px; color: #AAAAAA;">
                &copy; <?= date('Y') ?> <?= htmlspecialchars($site_name) ?>. All rights reserved.
              </p>
            </td>
          </tr>

        </table>
      </td>
    </tr>
  </table>
</body>
</html>
