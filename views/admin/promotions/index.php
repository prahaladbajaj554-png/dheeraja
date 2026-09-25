<div class="space-y-8">
  
  <!-- Page Header -->
  <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4">
    <div>
      <h2 class="text-2xl font-cinzel font-bold text-maroon-800">Promotions & Launch Mode</h2>
      <p class="text-xs text-stone-500 mt-0.5">Control the initial Free VIP Pro rollout, marketing banners, and coupon codes</p>
    </div>
    <a href="/admin/promotions/add" class="btn-royal-gold px-4 py-2.5 rounded-xl text-xs flex items-center space-x-2">
      <i class="fa-solid fa-plus"></i>
      <span>New Campaign / Banner</span>
    </a>
  </div>

  <!-- LAUNCH PROMOTION ENGINE CONTROL CARD -->
  <div class="glass-card-maroon p-8 rounded-3xl text-pearl relative overflow-hidden shadow-2xl">
    <div class="max-w-2xl">
      <div class="flex items-center space-x-2.5">
        <span class="w-8 h-8 rounded-lg bg-gold-400 text-maroon-950 flex items-center justify-center font-bold">
          <i class="fa-solid fa-rocket"></i>
        </span>
        <h3 class="font-cinzel text-xl font-bold text-gold-300">Early Bird Free VIP Launch Mode</h3>
      </div>
      <p class="text-xs text-stone-200 mt-2 leading-relaxed">
        When enabled, <strong>every newly registered bride and groom automatically receives a complimentary VIP Pro plan</strong> upon registration with zero payment required. This solves early liquidity and rapidly builds your user base.
      </p>

      <!-- Launch Configuration Form -->
      <form action="/admin/promotions/launch-vip" method="POST" class="mt-6 p-5 rounded-2xl bg-black/30 border border-gold-400/30 space-y-4">
        <?= csrf_field() ?>
        
        <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-4">
          
          <!-- Master Switch Toggle -->
          <div class="flex items-center space-x-3">
            <input type="checkbox" name="launch_free_vip_enabled" id="launch_free_vip_enabled" value="1" <?= $launchEnabled === '1' ? 'checked' : '' ?> class="w-5 h-5 text-gold-500 rounded border-gold-400 focus:ring-gold-400 cursor-pointer">
            <label for="launch_free_vip_enabled" class="text-xs font-bold text-gold-200 cursor-pointer">
              <?= $launchEnabled === '1' ? 'STATUS: LAUNCH FREE VIP IS ACTIVE' : 'STATUS: DISABLED (STANDARD FREE PLAN)' ?>
            </label>
          </div>

          <!-- Validity Days Input -->
          <div class="flex items-center space-x-2">
            <label class="text-xs text-stone-300 font-semibold whitespace-nowrap">Duration (Days):</label>
            <input type="number" name="launch_free_vip_days" value="<?= (int)$launchDays ?>" min="7" max="365" class="w-24 px-3 py-1.5 bg-maroon-950/80 border border-gold-400/50 rounded-xl text-xs text-center font-bold text-gold-300 focus:outline-none">
          </div>

          <!-- Save Button -->
          <button type="submit" class="btn-royal-gold px-5 py-2 rounded-xl text-xs font-bold uppercase tracking-wider">
            Update Settings
          </button>
        </div>

      </form>
    </div>
  </div>

  <!-- Active Campaigns List -->
  <div class="glass-card rounded-2xl p-6">
    <div class="flex items-center justify-between pb-3 border-b border-stone-200 mb-4">
      <h3 class="font-cinzel font-bold text-sm text-maroon-800 flex items-center">
        <i class="fa-solid fa-bullhorn text-gold-500 mr-2"></i> Promotional Banners & Urgency Ribbons
      </h3>
    </div>

    <div class="overflow-x-auto">
      <table class="w-full text-left border-collapse text-xs">
        <thead class="bg-stone-50 border-b border-stone-200 text-stone-500 uppercase tracking-wider text-[11px]">
          <tr>
            <th class="py-3 px-4 font-semibold">Campaign Title</th>
            <th class="py-3 px-4 font-semibold">Badge</th>
            <th class="py-3 px-4 font-semibold">Coupon Code</th>
            <th class="py-3 px-4 font-semibold">Action Target Link</th>
            <th class="py-3 px-4 font-semibold">Status</th>
            <th class="py-3 px-4 font-semibold text-right">Created</th>
          </tr>
        </thead>
        <tbody class="divide-y divide-stone-100 text-stone-700">
          <?php if (empty($promotions)): ?>
            <tr>
              <td colspan="6" class="py-8 text-center text-stone-400">No active campaigns configured.</td>
            </tr>
          <?php else: ?>
            <?php foreach ($promotions as $promo): ?>
              <tr>
                <td class="py-3.5 px-4 font-bold text-stone-900"><?= htmlspecialchars($promo['title']) ?></td>
                <td class="py-3.5 px-4">
                  <span class="px-2 py-0.5 rounded-full text-[10px] font-bold bg-amber-100 text-amber-900 border border-amber-300">
                    <?= htmlspecialchars($promo['badge_text']) ?>
                  </span>
                </td>
                <td class="py-3.5 px-4 font-mono font-bold text-maroon-700"><?= htmlspecialchars($promo['coupon_code'] ?: 'None') ?></td>
                <td class="py-3.5 px-4 text-stone-500 font-mono text-[11px]"><?= htmlspecialchars($promo['action_link'] ?: '/plans') ?></td>
                <td class="py-3.5 px-4">
                  <span class="px-2 py-0.5 rounded-full text-[10px] font-bold bg-emerald-100 text-emerald-800">Published</span>
                </td>
                <td class="py-3.5 px-4 text-right text-stone-400"><?= date('d M Y', strtotime($promo['created_at'])) ?></td>
              </tr>
            <?php endforeach; ?>
          <?php endif; ?>
        </tbody>
      </table>
    </div>
  </div>

</div>
