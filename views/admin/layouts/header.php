<?php
$admin = auth_admin();
$pendingKycCount = (int)\App\Core\Database::fetchOne("SELECT COUNT(*) as cnt FROM `kyc_documents` WHERE `status` = 'pending'")['cnt'];
$isLaunchVip = setting('launch_free_vip_enabled', '1') === '1';
?>
<header class="bg-white/95 border-b border-amber-200/70 text-stone-800 px-6 py-3.5 sticky top-0 z-30 shadow-sm backdrop-blur-md">
  <div class="flex items-center justify-between">
    
    <!-- Left: Brand / Quick Search -->
    <div class="flex items-center space-x-4">
      <div class="flex items-center space-x-2">
        <span class="text-amber-500 text-xl"><i class="fa-solid fa-crown"></i></span>
        <h1 class="font-cinzel font-bold text-lg text-maroon-800 tracking-wider hidden sm:inline">DHEERAJA ADMIN</h1>
      </div>

      <!-- Launch VIP Mode Indicator -->
      <?php if ($isLaunchVip): ?>
        <a href="/admin/promotions" class="hidden md:inline-flex items-center px-3 py-1 rounded-full text-xs font-bold bg-amber-50 text-amber-900 border border-amber-300 shadow-sm">
          <i class="fa-solid fa-bolt mr-1.5 text-amber-500"></i> Free VIP Launch Mode: ACTIVE
        </a>
      <?php endif; ?>
    </div>

    <!-- Right: Quick Actions & Profile -->
    <div class="flex items-center space-x-4">
      
      <!-- KYC Alert Badge -->
      <a href="/admin/kyc" class="relative text-stone-700 hover:text-maroon-800 p-2 rounded-xl bg-stone-50 hover:bg-amber-50 border border-stone-200 text-sm transition">
        <i class="fa-solid fa-id-card text-amber-600"></i>
        <?php if ($pendingKycCount > 0): ?>
          <span class="absolute -top-1.5 -right-1.5 bg-red-600 text-white font-bold text-[10px] w-5 h-5 rounded-full flex items-center justify-center border-2 border-white">
            <?= $pendingKycCount ?>
          </span>
        <?php endif; ?>
      </a>

      <!-- Direct Link to Mobile View -->
      <a href="/app" target="_blank" class="hidden sm:inline-flex items-center space-x-1.5 px-3 py-1.5 rounded-xl text-xs font-bold bg-amber-50/80 hover:bg-amber-100 text-maroon-800 border border-amber-300/80 shadow-sm transition">
        <i class="fa-solid fa-mobile-screen text-amber-600"></i>
        <span>Open App View</span>
      </a>

      <!-- Admin Profile Avatar -->
      <div class="flex items-center space-x-3 pl-3 border-l border-stone-200">
        <div class="w-8 h-8 rounded-full bg-gradient-to-tr from-amber-500 to-amber-400 flex items-center justify-center text-maroon-950 font-bold text-xs shadow-sm">
          <i class="fa-solid fa-user-shield"></i>
        </div>
        <div class="hidden lg:block text-left text-xs">
          <div class="font-bold text-stone-800"><?= htmlspecialchars($admin['first_name'] ?? $admin['name'] ?? 'Master Admin') ?></div>
          <div class="text-amber-700 font-semibold uppercase text-[10px] tracking-wider"><?= htmlspecialchars($admin['role'] ?? 'super_admin') ?></div>
        </div>
        
        <!-- Lock & Logout Icons -->
        <a href="/admin/lockscreen" title="Lock Session" class="text-stone-400 hover:text-amber-600 text-sm transition ml-1">
          <i class="fa-solid fa-lock"></i>
        </a>
        <a href="/admin/logout" title="Sign Out" class="text-stone-400 hover:text-red-600 text-sm transition ml-1">
          <i class="fa-solid fa-arrow-right-from-bracket"></i>
        </a>
      </div>

    </div>
  </div>
</header>
