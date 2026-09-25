<div class="space-y-6">
  
  <!-- Page Header -->
  <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4">
    <div>
      <h2 class="text-2xl font-cinzel font-bold text-maroon-800">Subscription Plans & Monetization</h2>
      <p class="text-xs text-stone-500 mt-0.5">Configure membership tiers, contact view quotas, pricing, and perks</p>
    </div>
    <div class="flex items-center space-x-3">
      <a href="/admin/subscriptions/grant-logs" class="px-3.5 py-2.5 rounded-xl bg-stone-100 hover:bg-stone-200 text-stone-700 text-xs font-semibold flex items-center space-x-1.5 transition">
        <i class="fa-solid fa-book-open"></i>
        <span>VIP Grant Ledger</span>
      </a>
      <a href="/admin/subscriptions/add" class="btn-royal-gold px-4 py-2.5 rounded-xl text-xs flex items-center space-x-2">
        <i class="fa-solid fa-plus"></i>
        <span>Create Package</span>
      </a>
    </div>
  </div>

  <!-- Plans Grid -->
  <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
    <?php foreach ($plans as $p): ?>
      <div class="glass-card rounded-2xl p-6 relative flex flex-col justify-between <?= $p['plan_code'] === 'VIP_PRO' ? 'border-2 border-gold-400 shadow-xl' : '' ?>">
        
        <div>
          <!-- Plan Badge & Code -->
          <div class="flex items-center justify-between mb-4">
            <span class="px-2.5 py-0.5 rounded-full text-[10px] font-bold <?= $p['plan_code'] === 'VIP_PRO' ? 'bg-amber-100 text-amber-900 border border-amber-300' : 'bg-stone-100 text-stone-700' ?>">
              <?= htmlspecialchars($p['badge_name']) ?>
            </span>
            <span class="text-xs text-stone-400 font-mono"><?= htmlspecialchars($p['plan_code']) ?></span>
          </div>

          <!-- Title & Price -->
          <h3 class="text-lg font-cinzel font-bold text-maroon-800 mb-1"><?= htmlspecialchars($p['title']) ?></h3>
          <div class="flex items-baseline space-x-1 mb-4">
            <span class="text-2xl font-bold text-stone-900"><?= format_inr($p['price_inr']) ?></span>
            <span class="text-xs text-stone-400">/ <?= (int)$p['duration_days'] ?> Days</span>
          </div>

          <!-- Perks List -->
          <div class="space-y-2.5 py-4 border-t border-b border-stone-100 text-xs text-stone-600">
            <div class="flex items-center space-x-2">
              <i class="fa-solid fa-check text-emerald-600 text-xs"></i>
              <span><strong><?= (int)$p['contact_views_limit'] ?></strong> Verified Contact Views</span>
            </div>
            <div class="flex items-center space-x-2">
              <i class="fa-solid fa-check text-emerald-600 text-xs"></i>
              <span><strong><?= (int)$p['direct_messages_limit'] ?></strong> Direct In-App Messages</span>
            </div>
            <div class="flex items-center space-x-2">
              <i class="fa-solid <?= $p['priority_search_boost'] ? 'fa-check text-emerald-600' : 'fa-xmark text-stone-300' ?>"></i>
              <span>Priority Search Placement</span>
            </div>
            <div class="flex items-center space-x-2">
              <i class="fa-solid <?= $p['kundali_matching_unlimited'] ? 'fa-check text-emerald-600' : 'fa-xmark text-stone-300' ?>"></i>
              <span>Unlimited Kundali Gun Milan</span>
            </div>
          </div>

          <!-- Active Subscribers Metric -->
          <div class="mt-4 p-3 rounded-xl bg-stone-50 border border-stone-200 flex items-center justify-between text-xs">
            <span class="text-stone-500">Active Subscribers:</span>
            <strong class="text-maroon-800 font-bold"><?= (int)($p['subscriber_count'] ?? 0) ?> Members</strong>
          </div>
        </div>

        <!-- Action Buttons -->
        <div class="mt-6 flex items-center space-x-2">
          <a href="/admin/subscriptions/edit/<?= $p['id'] ?>" class="w-full py-2.5 rounded-xl bg-maroon-50 hover:bg-maroon-100 text-maroon-800 font-semibold text-xs text-center border border-maroon-200 transition">
            <i class="fa-solid fa-pen-to-square mr-1"></i> Edit Plan
          </a>
        </div>

      </div>
    <?php endforeach; ?>
  </div>

</div>
