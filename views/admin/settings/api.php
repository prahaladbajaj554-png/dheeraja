<div class="max-w-5xl mx-auto space-y-6">

  <!-- Header Breadcrumb & Actions -->
  <div class="flex items-center justify-between">
    <div>
      <div class="flex items-center space-x-2 text-xs text-stone-500 mb-1">
        <a href="/admin/dashboard" class="hover:text-maroon-700">Dashboard</a>
        <span>/</span>
        <span class="text-maroon-800 font-bold">API & Gateway Settings</span>
      </div>
      <h1 class="text-2xl font-cinzel font-bold text-stone-900">Master API & Payment Gateways</h1>
      <p class="text-xs text-stone-500 mt-0.5">Control live payment gateways, WhatsApp Cloud API, and push notification secrets without editing code.</p>
    </div>

    <div class="flex items-center space-x-2">
      <a href="/admin/settings/mail" class="px-3.5 py-2 rounded-xl bg-stone-100 hover:bg-stone-200 text-stone-700 text-xs font-semibold">
        <i class="fa-solid fa-envelope-open-text text-amber-500 mr-1.5"></i> Mail & SMTP Config
      </a>
    </div>
  </div>

  <form action="/admin/settings/api" method="POST" class="space-y-6">
    <?= csrf_field() ?>

    <!-- 1. Gateway Mode Ribbon -->
    <div class="bg-white p-5 rounded-3xl border border-stone-200 shadow-sm flex flex-col sm:flex-row items-start sm:items-center justify-between gap-4">
      <div class="flex items-center space-x-3">
        <div class="w-10 h-10 rounded-xl bg-amber-50 text-amber-600 flex items-center justify-center text-lg border border-amber-200">
          <i class="fa-solid fa-toggle-on"></i>
        </div>
        <div>
          <div class="font-bold text-xs text-stone-900">Payment & API Environment Mode</div>
          <div class="text-[11px] text-stone-500">Toggle between testing sandbox and live production transactions.</div>
        </div>
      </div>

      <div class="flex items-center space-x-3">
        <label class="inline-flex items-center space-x-2 cursor-pointer">
          <input type="radio" name="payment_gateway_mode" value="test" <?= ($settings['payment_gateway_mode'] ?? 'test') === 'test' ? 'checked' : '' ?> class="text-amber-600 focus:ring-amber-500">
          <span class="text-xs font-bold text-stone-700">Sandbox / Test Mode</span>
        </label>
        <label class="inline-flex items-center space-x-2 cursor-pointer">
          <input type="radio" name="payment_gateway_mode" value="live" <?= ($settings['payment_gateway_mode'] ?? '') === 'live' ? 'checked' : '' ?> class="text-emerald-600 focus:ring-emerald-500">
          <span class="text-xs font-bold text-emerald-700">Live Production Mode</span>
        </label>
      </div>
    </div>

    <!-- 2. Razorpay & PhonePe & UPI Gateways -->
    <div class="bg-white p-6 sm:p-8 rounded-3xl border border-stone-200 shadow-sm space-y-5">
      <div class="flex items-center justify-between border-b border-amber-100 pb-3">
        <div class="flex items-center space-x-2.5">
          <div class="w-8 h-8 rounded-lg bg-blue-50 text-blue-600 flex items-center justify-center text-base">
            <i class="fa-solid fa-credit-card"></i>
          </div>
          <div>
            <h3 class="font-cinzel font-bold text-sm text-stone-900">Payment Gateways & UPI QR Settlement</h3>
            <p class="text-[11px] text-stone-400">Collect VIP subscriptions via Razorpay, PhonePe, and Direct UPI</p>
          </div>
        </div>
        <span class="text-[10px] font-bold px-2.5 py-0.5 rounded-full bg-emerald-100 text-emerald-800">Multi-Channel</span>
      </div>

      <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 text-xs">
        <!-- Razorpay Key ID -->
        <div>
          <label class="block font-semibold text-stone-700 mb-1">Razorpay Key ID</label>
          <input type="text" name="razorpay_key_id" value="<?= htmlspecialchars($settings['razorpay_key_id'] ?? '') ?>" placeholder="rzp_live_xxxxxxxxxxxx"
                 class="w-full px-3.5 py-2.5 bg-stone-50 border border-stone-200 rounded-xl focus:border-amber-500 font-mono text-xs">
        </div>

        <!-- Razorpay Secret -->
        <div>
          <label class="block font-semibold text-stone-700 mb-1">Razorpay Key Secret</label>
          <input type="password" name="razorpay_key_secret" placeholder="••••••••••••••••••••••••"
                 class="w-full px-3.5 py-2.5 bg-stone-50 border border-stone-200 rounded-xl focus:border-amber-500 font-mono text-xs">
          <span class="text-[10px] text-stone-400 mt-0.5 block">Leave empty to keep existing secret</span>
        </div>

        <!-- PhonePe Merchant ID -->
        <div>
          <label class="block font-semibold text-stone-700 mb-1">PhonePe Merchant ID</label>
          <input type="text" name="phonepe_merchant_id" value="<?= htmlspecialchars($settings['phonepe_merchant_id'] ?? '') ?>" placeholder="MERCHANTUAT / LIVE_MID"
                 class="w-full px-3.5 py-2.5 bg-stone-50 border border-stone-200 rounded-xl focus:border-amber-500 font-mono text-xs">
        </div>

        <!-- PhonePe Salt Key -->
        <div>
          <label class="block font-semibold text-stone-700 mb-1">PhonePe Salt Key & Index</label>
          <div class="flex space-x-2">
            <input type="password" name="phonepe_salt_key" placeholder="Salt Key (••••••••)"
                   class="flex-1 px-3.5 py-2.5 bg-stone-50 border border-stone-200 rounded-xl focus:border-amber-500 font-mono text-xs">
            <input type="text" name="phonepe_salt_index" value="<?= htmlspecialchars($settings['phonepe_salt_index'] ?? '1') ?>" placeholder="Index (1)"
                   class="w-20 px-3 py-2.5 bg-stone-50 border border-stone-200 rounded-xl focus:border-amber-500 font-mono text-xs text-center font-bold">
          </div>
        </div>

        <!-- Direct UPI Merchant VPA -->
        <div>
          <label class="block font-semibold text-stone-700 mb-1">Direct Merchant UPI VPA (For 0% Fee QR Payments)</label>
          <input type="text" name="upi_merchant_vpa" value="<?= htmlspecialchars($settings['upi_merchant_vpa'] ?? '') ?>" placeholder="e.g. dheeraja@okhdfcbank"
                 class="w-full px-3.5 py-2.5 bg-stone-50 border border-stone-200 rounded-xl focus:border-amber-500 font-mono text-xs font-semibold text-emerald-800">
        </div>

        <!-- Direct UPI Business Name -->
        <div>
          <label class="block font-semibold text-stone-700 mb-1">Merchant Payee Name</label>
          <input type="text" name="upi_merchant_name" value="<?= htmlspecialchars($settings['upi_merchant_name'] ?? 'Dheeraja Matrimony') ?>" placeholder="Dheeraja Matrimony Services"
                 class="w-full px-3.5 py-2.5 bg-stone-50 border border-stone-200 rounded-xl focus:border-amber-500 text-xs font-semibold">
        </div>
      </div>
    </div>

    <!-- 3. WhatsApp Cloud API & SMS Gateways -->
    <div class="bg-white p-6 sm:p-8 rounded-3xl border border-stone-200 shadow-sm space-y-5">
      <div class="flex items-center justify-between border-b border-amber-100 pb-3">
        <div class="flex items-center space-x-2.5">
          <div class="w-8 h-8 rounded-lg bg-emerald-50 text-emerald-600 flex items-center justify-center text-base">
            <i class="fa-brands fa-whatsapp"></i>
          </div>
          <div>
            <h3 class="font-cinzel font-bold text-sm text-stone-900">Meta WhatsApp Cloud API & OTP SMS</h3>
            <p class="text-[11px] text-stone-400">Automated candidate biodata notifications, match alerts, and login OTPs</p>
          </div>
        </div>
        <span class="text-[10px] font-bold px-2.5 py-0.5 rounded-full bg-emerald-100 text-emerald-800">Official Graph API</span>
      </div>

      <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 text-xs">
        <div class="sm:col-span-2">
          <label class="block font-semibold text-stone-700 mb-1">Meta WhatsApp System User Permanent Token</label>
          <input type="password" name="whatsapp_cloud_api_token" placeholder="EAABwzLIX... (Leave blank to keep existing)"
                 class="w-full px-3.5 py-2.5 bg-stone-50 border border-stone-200 rounded-xl focus:border-amber-500 font-mono text-xs">
        </div>

        <div>
          <label class="block font-semibold text-stone-700 mb-1">WhatsApp Phone Number ID</label>
          <input type="text" name="whatsapp_phone_number_id" value="<?= htmlspecialchars($settings['whatsapp_phone_number_id'] ?? '') ?>" placeholder="e.g. 109283746501928"
                 class="w-full px-3.5 py-2.5 bg-stone-50 border border-stone-200 rounded-xl focus:border-amber-500 font-mono text-xs">
        </div>

        <div>
          <label class="block font-semibold text-stone-700 mb-1">WhatsApp Business Account ID (WABA)</label>
          <input type="text" name="whatsapp_business_account_id" value="<?= htmlspecialchars($settings['whatsapp_business_account_id'] ?? '') ?>" placeholder="e.g. 819283746501"
                 class="w-full px-3.5 py-2.5 bg-stone-50 border border-stone-200 rounded-xl focus:border-amber-500 font-mono text-xs">
        </div>

        <div>
          <label class="block font-semibold text-stone-700 mb-1">SMS Gateway Provider</label>
          <select name="sms_gateway_provider" class="w-full px-3.5 py-2.5 bg-stone-50 border border-stone-200 rounded-xl focus:border-amber-500">
            <option value="msg91" <?= ($settings['sms_gateway_provider'] ?? '') === 'msg91' ? 'selected' : '' ?>>MSG91 Enterprise SMS</option>
            <option value="fast2sms" <?= ($settings['sms_gateway_provider'] ?? '') === 'fast2sms' ? 'selected' : '' ?>>Fast2SMS (Quick Indian DLT)</option>
            <option value="twilio" <?= ($settings['sms_gateway_provider'] ?? '') === 'twilio' ? 'selected' : '' ?>>Twilio International</option>
          </select>
        </div>

        <div>
          <label class="block font-semibold text-stone-700 mb-1">SMS DLT Header / Sender ID</label>
          <input type="text" name="sms_sender_id" value="<?= htmlspecialchars($settings['sms_sender_id'] ?? 'DHRMAT') ?>" placeholder="e.g. DHRMAT"
                 class="w-full px-3.5 py-2.5 bg-stone-50 border border-stone-200 rounded-xl focus:border-amber-500 font-mono text-xs uppercase font-bold">
        </div>

        <div class="sm:col-span-2">
          <label class="block font-semibold text-stone-700 mb-1">SMS Gateway API Key / Auth AuthToken</label>
          <input type="password" name="sms_api_key" placeholder="API Key for SMS Provider"
                 class="w-full px-3.5 py-2.5 bg-stone-50 border border-stone-200 rounded-xl focus:border-amber-500 font-mono text-xs">
        </div>
      </div>
    </div>

    <!-- 4. Firebase Cloud Messaging (Push Notifications) -->
    <div class="bg-white p-6 sm:p-8 rounded-3xl border border-stone-200 shadow-sm space-y-5">
      <div class="flex items-center justify-between border-b border-amber-100 pb-3">
        <div class="flex items-center space-x-2.5">
          <div class="w-8 h-8 rounded-lg bg-amber-50 text-amber-600 flex items-center justify-center text-base">
            <i class="fa-solid fa-bell"></i>
          </div>
          <div>
            <h3 class="font-cinzel font-bold text-sm text-stone-900">Firebase Cloud Messaging (FCM Push)</h3>
            <p class="text-[11px] text-stone-400">Real-time mobile push notifications for interests, chat, and matching profiles</p>
          </div>
        </div>
        <span class="text-[10px] font-bold px-2.5 py-0.5 rounded-full bg-amber-100 text-amber-900">Android & iOS</span>
      </div>

      <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 text-xs">
        <div>
          <label class="block font-semibold text-stone-700 mb-1">Firebase Project ID</label>
          <input type="text" name="firebase_project_id" value="<?= htmlspecialchars($settings['firebase_project_id'] ?? '') ?>" placeholder="e.g. dheeraja-matrimony-app"
                 class="w-full px-3.5 py-2.5 bg-stone-50 border border-stone-200 rounded-xl focus:border-amber-500 font-mono text-xs">
        </div>

        <div>
          <label class="block font-semibold text-stone-700 mb-1">Firebase Server Key / Service Account Secret</label>
          <input type="password" name="firebase_server_key" placeholder="Server Key (Leave blank to keep existing)"
                 class="w-full px-3.5 py-2.5 bg-stone-50 border border-stone-200 rounded-xl focus:border-amber-500 font-mono text-xs">
        </div>
      </div>
    </div>

    <!-- 5. Official Social Media & WhatsApp Community Channels -->
    <div class="bg-white p-6 sm:p-8 rounded-3xl border border-stone-200 shadow-sm space-y-5">
      <div class="flex items-center justify-between border-b border-amber-100 pb-3">
        <div class="flex items-center space-x-2.5">
          <div class="w-8 h-8 rounded-lg bg-pink-50 text-pink-600 flex items-center justify-center text-base">
            <i class="fa-solid fa-share-nodes"></i>
          </div>
          <div>
            <h3 class="font-cinzel font-bold text-sm text-stone-900">Cover Page External Channels (WhatsApp, Instagram, Facebook)</h3>
            <p class="text-[11px] text-stone-400">Manage direct external buttons that work outside the app on the cover page</p>
          </div>
        </div>
        <span class="text-[10px] font-bold px-2.5 py-0.5 rounded-full bg-emerald-100 text-emerald-800">Direct Actions</span>
      </div>

      <div class="grid grid-cols-1 sm:grid-cols-3 gap-4 text-xs">
        <div>
          <label class="block font-semibold text-stone-700 mb-1 flex items-center">
            <i class="fa-brands fa-whatsapp text-emerald-600 mr-1.5"></i> WhatsApp Community / Helpline Link
          </label>
          <input type="url" name="social_whatsapp_url" value="<?= htmlspecialchars($settings['social_whatsapp_url'] ?? '') ?>" placeholder="https://chat.whatsapp.com/..."
                 class="w-full px-3.5 py-2.5 bg-stone-50 border border-stone-200 rounded-xl focus:border-amber-500 font-mono text-xs">
        </div>

        <div>
          <label class="block font-semibold text-stone-700 mb-1 flex items-center">
            <i class="fa-brands fa-instagram text-pink-600 mr-1.5"></i> Instagram Official Profile URL
          </label>
          <input type="url" name="social_instagram_url" value="<?= htmlspecialchars($settings['social_instagram_url'] ?? '') ?>" placeholder="https://instagram.com/..."
                 class="w-full px-3.5 py-2.5 bg-stone-50 border border-stone-200 rounded-xl focus:border-amber-500 font-mono text-xs">
        </div>

        <div>
          <label class="block font-semibold text-stone-700 mb-1 flex items-center">
            <i class="fa-brands fa-facebook text-blue-600 mr-1.5"></i> Facebook Page / Group URL
          </label>
          <input type="url" name="social_facebook_url" value="<?= htmlspecialchars($settings['social_facebook_url'] ?? '') ?>" placeholder="https://facebook.com/..."
                 class="w-full px-3.5 py-2.5 bg-stone-50 border border-stone-200 rounded-xl focus:border-amber-500 font-mono text-xs">
        </div>
      </div>
    </div>

    <!-- Save Button Floating Footer -->
    <div class="sticky bottom-4 bg-white/95 backdrop-blur-md p-4 rounded-2xl border border-amber-200 shadow-xl flex items-center justify-between z-20">
      <div class="text-xs text-stone-500 flex items-center space-x-2">
        <i class="fa-solid fa-shield-halved text-emerald-600"></i>
        <span>Credentials are stored safely in database without altering PHP codebase.</span>
      </div>

      <button type="submit" class="px-6 py-2.5 rounded-xl bg-gradient-to-r from-maroon-700 to-maroon-800 hover:from-maroon-800 hover:to-maroon-900 text-white font-bold text-xs shadow-md shadow-maroon-700/20 transition flex items-center space-x-2">
        <i class="fa-solid fa-floppy-disk text-amber-300"></i>
        <span>Save All API Credentials</span>
      </button>
    </div>

  </form>

</div>
