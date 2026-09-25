<div class="max-w-4xl mx-auto space-y-6">
  
  <!-- Page Header -->
  <div class="flex items-center justify-between">
    <div>
      <h2 class="text-2xl font-cinzel font-bold text-maroon-800">Email & PHPMailer SMTP Configuration</h2>
      <p class="text-xs text-stone-500 mt-0.5">Configure authenticated Gmail SMTP delivery for user alerts, welcomes, and admin alerts</p>
    </div>
  </div>

  <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
    
    <!-- Left 2 Cols: Main SMTP Credentials Form -->
    <div class="lg:col-span-2 glass-card p-8 rounded-3xl space-y-6">
      
      <div class="border-b border-stone-200 pb-3">
        <h3 class="font-cinzel font-bold text-base text-maroon-800 flex items-center">
          <i class="fa-solid fa-envelope-open-text text-gold-500 mr-2"></i> Gmail SMTP Server Parameters
        </h3>
        <p class="text-xs text-stone-500 mt-0.5">Settings are persisted in the database and loaded dynamically by the mailer engine</p>
      </div>

      <form action="/admin/settings/mail" method="POST" class="space-y-4 text-xs">
        <?= csrf_field() ?>

        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
          <div>
            <label class="block font-semibold text-stone-700 mb-1">SMTP Host *</label>
            <input type="text" name="smtp_host" value="<?= htmlspecialchars($settings['smtp_host']) ?>" required class="w-full px-3 py-2 bg-stone-50 border border-stone-200 rounded-xl font-mono focus:border-gold-400">
          </div>
          <div>
            <label class="block font-semibold text-stone-700 mb-1">SMTP Port *</label>
            <input type="number" name="smtp_port" value="<?= htmlspecialchars($settings['smtp_port']) ?>" required class="w-full px-3 py-2 bg-stone-50 border border-stone-200 rounded-xl font-mono focus:border-gold-400">
          </div>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
          <div>
            <label class="block font-semibold text-stone-700 mb-1">Sender Email / Username *</label>
            <input type="email" name="smtp_username" value="<?= htmlspecialchars($settings['smtp_username']) ?>" required class="w-full px-3 py-2 bg-stone-50 border border-stone-200 rounded-xl focus:border-gold-400">
          </div>
          <div>
            <label class="block font-semibold text-stone-700 mb-1">16-Character Google App Password *</label>
            <input type="password" name="smtp_password" placeholder="<?= !empty($settings['smtp_password']) ? '••••••••••••••••' : 'e.g. abcd efgh ijkl mnop' ?>" class="w-full px-3 py-2 bg-stone-50 border border-stone-200 rounded-xl font-mono focus:border-gold-400">
            <span class="text-[10px] text-stone-400">Leave blank to retain current password</span>
          </div>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
          <div>
            <label class="block font-semibold text-stone-700 mb-1">Outgoing Sender Name *</label>
            <input type="text" name="smtp_from_name" value="<?= htmlspecialchars($settings['smtp_from_name']) ?>" required class="w-full px-3 py-2 bg-stone-50 border border-stone-200 rounded-xl focus:border-gold-400">
          </div>
          <div>
            <label class="block font-semibold text-stone-700 mb-1">Encryption Protocol</label>
            <select name="smtp_encryption" class="w-full px-3 py-2 bg-stone-50 border border-stone-200 rounded-xl focus:border-gold-400">
              <option value="tls" <?= $settings['smtp_encryption'] === 'tls' ? 'selected' : '' ?>>TLS (Port 587 - Recommended)</option>
              <option value="ssl" <?= $settings['smtp_encryption'] === 'ssl' ? 'selected' : '' ?>>SSL (Port 465)</option>
            </select>
          </div>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 pt-2 border-t border-stone-100">
          <div>
            <label class="block font-semibold text-stone-700 mb-1">Admin Alert Destination Email *</label>
            <input type="email" name="alert_admin_email" value="<?= htmlspecialchars($settings['alert_admin_email']) ?>" required class="w-full px-3 py-2 bg-stone-50 border border-stone-200 rounded-xl focus:border-gold-400">
            <span class="text-[10px] text-stone-400">Receives security, KYC and new signup alerts</span>
          </div>
          <div>
            <label class="block font-semibold text-stone-700 mb-1">Support Email</label>
            <input type="email" name="support_email" value="<?= htmlspecialchars($settings['support_email']) ?>" required class="w-full px-3 py-2 bg-stone-50 border border-stone-200 rounded-xl focus:border-gold-400">
          </div>
        </div>

        <div class="flex items-center justify-end pt-3">
          <button type="submit" class="btn-royal-maroon px-8 py-2.5 rounded-xl font-bold text-xs uppercase tracking-wider shadow">
            Save Mail Settings
          </button>
        </div>
      </form>

    </div>

    <!-- Right 1 Col: Live SMTP Test Dispatcher & Help Box -->
    <div class="space-y-6">
      
      <!-- Live Test Email Dispatcher -->
      <div class="glass-card p-6 rounded-2xl space-y-4 border-2 border-gold-400/50">
        <h3 class="font-cinzel font-bold text-sm text-maroon-800 flex items-center">
          <i class="fa-solid fa-paper-plane text-gold-500 mr-2"></i> Send Live Test Email
        </h3>
        <p class="text-xs text-stone-600 leading-relaxed">
          Verify SMTP connectivity and test your Royal Maroon & Gold email template delivery.
        </p>

        <form action="/admin/settings/mail/test" method="POST" class="space-y-3 text-xs">
          <?= csrf_field() ?>
          <div>
            <label class="block font-semibold text-stone-700 mb-1">Recipient Test Email</label>
            <input type="email" name="test_email" value="<?= htmlspecialchars($settings['alert_admin_email']) ?>" required class="w-full px-3 py-2 bg-stone-50 border border-stone-200 rounded-xl focus:border-gold-400">
          </div>
          <button type="submit" class="btn-royal-gold w-full py-2.5 rounded-xl text-xs font-bold uppercase tracking-wider shadow">
            <i class="fa-solid fa-vial mr-1.5"></i> Dispatch Test Email
          </button>
        </form>
      </div>

      <!-- Quick Gmail App Password Guide -->
      <div class="p-5 rounded-2xl bg-amber-50/70 border border-amber-300 text-xs space-y-2 text-stone-700">
        <div class="font-bold text-amber-900 flex items-center">
          <i class="fa-solid fa-lightbulb text-gold-600 mr-1.5"></i> How to get Gmail App Password:
        </div>
        <ol class="list-decimal pl-4 space-y-1 text-[11px] text-stone-600">
          <li>Enable 2-Step Verification on your Gmail account.</li>
          <li>Go to Google Account Security &rarr; App Passwords.</li>
          <li>Select "Mail" and generate a 16-character code.</li>
          <li>Paste the 16 characters into the password field above.</li>
        </ol>
      </div>

    </div>

  </div>

</div>
