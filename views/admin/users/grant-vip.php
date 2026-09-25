<div class="max-w-2xl mx-auto space-y-6">
  
  <!-- Breadcrumb -->
  <div class="flex items-center justify-between">
    <div class="flex items-center space-x-2 text-xs text-stone-500">
      <a href="/admin/users" class="hover:text-maroon-700">Members</a>
      <span>/</span>
      <a href="/admin/users/view/<?= $user['id'] ?>" class="hover:text-maroon-700"><?= htmlspecialchars($user['first_name']) ?></a>
      <span>/</span>
      <span class="text-maroon-800 font-semibold">Grant VIP Privileges</span>
    </div>
    <a href="/admin/users/view/<?= $user['id'] ?>" class="px-3 py-1.5 rounded-lg bg-stone-100 hover:bg-stone-200 text-stone-700 text-xs">
      &larr; Back to Dossier
    </a>
  </div>

  <!-- Member Dossier Header -->
  <div class="glass-card p-5 rounded-2xl flex items-center justify-between">
    <div class="flex items-center space-x-3">
      <div class="w-12 h-12 rounded-xl bg-gradient-to-tr from-maroon-700 to-maroon-900 border border-gold-400 flex items-center justify-center text-gold-300 font-bold text-lg">
        <?= strtoupper(substr($user['first_name'], 0, 1)) ?>
      </div>
      <div>
        <h3 class="font-cinzel font-bold text-base text-stone-900">
          <?= htmlspecialchars($user['first_name'] . ' ' . $user['last_name']) ?>
        </h3>
        <p class="text-xs text-stone-500 font-mono"><?= htmlspecialchars($user['matrimony_id']) ?> • <?= htmlspecialchars($user['email']) ?></p>
      </div>
    </div>
    <div class="text-right">
      <span class="text-xs text-stone-400">Current Status:</span>
      <div class="text-xs font-bold <?= !empty($user['is_vip']) ? 'text-amber-600' : 'text-stone-500' ?>">
        <?= !empty($user['is_vip']) ? '👑 Active VIP Pro' : 'Free Member' ?>
      </div>
    </div>
  </div>

  <!-- VIP Provisioning Form -->
  <form action="/admin/users/grant-vip/<?= $user['id'] ?>" method="POST" class="glass-card p-8 rounded-3xl space-y-6">
    <?= csrf_field() ?>

    <div class="border-b border-stone-200 pb-3">
      <h2 class="text-xl font-cinzel font-bold text-maroon-800 flex items-center">
        <i class="fa-solid fa-crown text-gold-500 mr-2.5"></i> Grant VIP Access Privileges
      </h2>
      <p class="text-xs text-stone-500 mt-1">
        Provision complimentary VIP Pro privileges to this member with customized duration and quotas.
      </p>
    </div>

    <!-- Select Plan -->
    <div>
      <label class="block text-xs font-bold text-stone-700 uppercase tracking-wider mb-2">Select Subscription Package *</label>
      <div class="grid grid-cols-1 sm:grid-cols-2 gap-3">
        <?php foreach ($plans as $p): ?>
          <label class="relative flex items-center p-4 rounded-xl border border-stone-200 hover:border-gold-400 cursor-pointer bg-stone-50/50 has-[:checked]:border-gold-500 has-[:checked]:bg-amber-50/40 transition">
            <input type="radio" name="plan_id" value="<?= $p['id'] ?>" <?= $p['plan_code'] === 'VIP_PRO' ? 'checked' : '' ?> class="text-gold-500 focus:ring-gold-400">
            <div class="ml-3">
              <span class="font-bold text-xs text-stone-900 block"><?= htmlspecialchars($p['title']) ?></span>
              <span class="text-[11px] text-stone-500 block"><?= (int)$p['contact_views_limit'] ?> Contacts • <?= (int)$p['duration_days'] ?> Days</span>
            </div>
          </label>
        <?php endforeach; ?>
      </div>
    </div>

    <!-- Validity Duration Presets -->
    <div>
      <label class="block text-xs font-bold text-stone-700 uppercase tracking-wider mb-2">Plan Validity (Days) *</label>
      <div class="grid grid-cols-3 sm:grid-cols-5 gap-2 mb-3">
        <button type="button" onclick="document.getElementById('duration_days').value = 30" class="py-2 text-xs font-semibold rounded-lg bg-stone-100 hover:bg-gold-100 text-stone-800 transition">30 Days</button>
        <button type="button" onclick="document.getElementById('duration_days').value = 60" class="py-2 text-xs font-semibold rounded-lg bg-stone-100 hover:bg-gold-100 text-stone-800 transition">60 Days</button>
        <button type="button" onclick="document.getElementById('duration_days').value = 90" class="py-2 text-xs font-semibold rounded-lg bg-amber-100 hover:bg-gold-200 text-amber-900 border border-amber-300 font-bold transition">90 Days</button>
        <button type="button" onclick="document.getElementById('duration_days').value = 180" class="py-2 text-xs font-semibold rounded-lg bg-stone-100 hover:bg-gold-100 text-stone-800 transition">180 Days</button>
        <button type="button" onclick="document.getElementById('duration_days').value = 365" class="py-2 text-xs font-semibold rounded-lg bg-stone-100 hover:bg-gold-100 text-stone-800 transition">365 Days</button>
      </div>
      <input type="number" name="duration_days" id="duration_days" value="90" required
             class="w-full px-4 py-2.5 bg-stone-50 border border-stone-200 rounded-xl text-xs font-semibold text-stone-800 focus:outline-none focus:border-gold-400">
    </div>

    <!-- Reason / Grant Notes -->
    <div>
      <label class="block text-xs font-bold text-stone-700 uppercase tracking-wider mb-2">Administrative Grant Reason</label>
      <input type="text" name="notes" value="Launch Promotional Special VIP Grant" 
             placeholder="e.g. Early Bird Launch Offer, Community VIP, Customer Support Courtesy"
             class="w-full px-4 py-2.5 bg-stone-50 border border-stone-200 rounded-xl text-xs text-stone-800 focus:outline-none focus:border-gold-400">
    </div>

    <!-- Send Email Notification Checkbox -->
    <div class="p-4 rounded-xl bg-gold-50/50 border border-gold-300/60 flex items-center space-x-3">
      <input type="checkbox" name="send_email" id="send_email" value="1" checked class="w-4 h-4 text-gold-600 rounded border-gold-300 focus:ring-gold-500">
      <label for="send_email" class="text-xs text-stone-800 font-medium cursor-pointer">
        <i class="fa-solid fa-paper-plane text-gold-600 mr-1.5"></i>
        Send royal congratulations email notification with activated perks to member's inbox (PHPMailer)
      </label>
    </div>

    <!-- Submit Button -->
    <div class="flex items-center justify-end space-x-3 pt-2">
      <a href="/admin/users/view/<?= $user['id'] ?>" class="px-5 py-2.5 rounded-xl bg-stone-100 hover:bg-stone-200 text-stone-700 text-xs font-semibold">Cancel</a>
      <button type="submit" class="btn-royal-gold px-8 py-3 rounded-xl text-xs font-bold uppercase tracking-wider shadow-lg">
        <i class="fa-solid fa-crown mr-1.5"></i> Provision VIP Plan
      </button>
    </div>

  </form>

</div>
