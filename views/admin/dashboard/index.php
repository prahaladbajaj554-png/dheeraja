<div class="space-y-8">
  
  <!-- Executive Welcome & Launch Mode Alert Banner -->
  <div class="bg-gradient-to-r from-amber-50 via-white to-rose-50/40 border border-amber-200/90 p-6 rounded-3xl flex flex-col md:flex-row items-center justify-between gap-4 text-stone-800 shadow-sm">
    <div>
      <div class="flex items-center space-x-2">
        <span class="px-2.5 py-0.5 rounded-full text-[10px] font-bold bg-amber-400 text-maroon-950 uppercase tracking-wider shadow-xs">Master Control</span>
        <span class="text-xs text-amber-800 font-semibold">Live System Overview</span>
      </div>
      <h2 class="text-2xl font-cinzel font-bold text-maroon-800 mt-1.5">Dheeraja Executive Headquarters</h2>
      <p class="text-xs text-stone-600 mt-1 font-medium">Full administrative control over profiles, subscriptions, KYC and anti-hacking firewall.</p>
    </div>

    <!-- Quick Action Launch VIP Status -->
    <div class="flex flex-wrap items-center gap-3">
      <?php if ($launchVipPromo === '1'): ?>
        <div class="bg-amber-100/70 border border-amber-300/80 px-4 py-2 rounded-2xl text-xs text-amber-950 flex items-center space-x-2.5 shadow-xs">
          <i class="fa-solid fa-gift text-amber-600 text-base"></i>
          <div>
            <div class="font-bold text-amber-900">Launch Mode: FREE VIP PRO</div>
            <div class="text-[10px] text-stone-500 font-medium">Auto-grants 90 Days VIP to new signups</div>
          </div>
        </div>
      <?php endif; ?>

      <a href="/admin/users/add" class="px-4 py-2.5 rounded-2xl text-xs font-bold bg-gradient-to-r from-maroon-700 to-maroon-800 hover:from-maroon-800 hover:to-maroon-900 text-white flex items-center space-x-2 shadow-md shadow-maroon-700/20 transition">
        <i class="fa-solid fa-user-plus text-amber-300"></i>
        <span>Add Member</span>
      </a>

      <a href="/admin/kyc" class="bg-white hover:bg-amber-50 text-stone-700 hover:text-maroon-800 px-4 py-2.5 rounded-2xl text-xs font-bold border border-stone-200 shadow-xs transition flex items-center space-x-2">
        <i class="fa-solid fa-shield-halved text-amber-500"></i>
        <span>KYC Queue (<?= $pendingKyc ?>)</span>
      </a>
    </div>
  </div>

  <!-- Key Performance Indicators (KPI Cards) -->
  <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-5">
    
    <!-- KPI 1: Total Profiles -->
    <div class="glass-card p-5 rounded-2xl flex items-center justify-between">
      <div>
        <span class="text-xs font-semibold text-stone-500 uppercase tracking-wider">Total Members</span>
        <div class="text-2xl font-bold text-maroon-700 mt-1"><?= number_format($totalUsers) ?></div>
        <div class="text-[11px] text-stone-400 mt-1">
          <span class="text-indigo-600 font-semibold"><?= $totalGrooms ?> Grooms</span> • 
          <span class="text-pink-600 font-semibold"><?= $totalBrides ?> Brides</span>
        </div>
      </div>
      <div class="w-12 h-12 rounded-xl bg-maroon-50 text-maroon-700 flex items-center justify-center text-xl border border-maroon-100">
        <i class="fa-solid fa-users"></i>
      </div>
    </div>

    <!-- KPI 2: Active VIPs -->
    <div class="glass-card p-5 rounded-2xl flex items-center justify-between">
      <div>
        <span class="text-xs font-semibold text-stone-500 uppercase tracking-wider">Active VIP Pros</span>
        <div class="text-2xl font-bold text-amber-600 mt-1"><?= number_format($activeVips) ?></div>
        <div class="text-[11px] text-amber-700/80 font-medium mt-1">
          <i class="fa-solid fa-crown text-amber-500 mr-1"></i> Complimentary & Paid
        </div>
      </div>
      <div class="w-12 h-12 rounded-xl bg-amber-50 text-amber-600 flex items-center justify-center text-xl border border-amber-200">
        <i class="fa-solid fa-gem"></i>
      </div>
    </div>

    <!-- KPI 3: Pending KYC -->
    <div class="glass-card p-5 rounded-2xl flex items-center justify-between">
      <div>
        <span class="text-xs font-semibold text-stone-500 uppercase tracking-wider">KYC Pending</span>
        <div class="text-2xl font-bold <?= $pendingKyc > 0 ? 'text-red-600 animate-pulse' : 'text-stone-700' ?> mt-1">
          <?= number_format($pendingKyc) ?>
        </div>
        <div class="text-[11px] text-stone-400 mt-1">
          <a href="/admin/kyc" class="text-maroon-700 font-bold hover:underline">Review ID Submissions &rarr;</a>
        </div>
      </div>
      <div class="w-12 h-12 rounded-xl <?= $pendingKyc > 0 ? 'bg-red-50 text-red-600 border border-red-200' : 'bg-stone-50 text-stone-600' ?> flex items-center justify-center text-xl">
        <i class="fa-solid fa-id-card"></i>
      </div>
    </div>

    <!-- KPI 4: Today Signups -->
    <div class="glass-card p-5 rounded-2xl flex items-center justify-between">
      <div>
        <span class="text-xs font-semibold text-stone-500 uppercase tracking-wider">Signups Today</span>
        <div class="text-2xl font-bold text-emerald-600 mt-1">+<?= number_format($todaySignups) ?></div>
        <div class="text-[11px] text-emerald-700 font-medium mt-1">
          <i class="fa-solid fa-arrow-trend-up mr-1"></i> Organic Registrations
        </div>
      </div>
      <div class="w-12 h-12 rounded-xl bg-emerald-50 text-emerald-600 flex items-center justify-center text-xl border border-emerald-100">
        <i class="fa-solid fa-user-check"></i>
      </div>
    </div>

  </div>

  <!-- Middle Grid: Recent Signups & Pending KYC Quick Actions -->
  <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
    
    <!-- Left 2 Cols: Recent Registered Members -->
    <div class="lg:col-span-2 glass-card rounded-2xl p-6">
      <div class="flex items-center justify-between pb-4 border-b border-stone-200">
        <div>
          <h3 class="font-cinzel font-bold text-base text-maroon-800">Recently Registered Members</h3>
          <p class="text-xs text-stone-500">Newly joined brides and grooms across India</p>
        </div>
        <a href="/admin/users" class="text-xs font-semibold text-maroon-700 hover:text-maroon-900 transition flex items-center">
          <span>View All Members</span>
          <i class="fa-solid fa-chevron-right ml-1.5 text-[10px]"></i>
        </a>
      </div>

      <div class="overflow-x-auto mt-4">
        <table class="w-full text-left border-collapse text-xs">
          <thead>
            <tr class="text-stone-400 uppercase tracking-wider border-b border-stone-200">
              <th class="py-3 px-3">Member</th>
              <th class="py-3 px-3">Caste & Gotra</th>
              <th class="py-3 px-3">Profession / City</th>
              <th class="py-3 px-3">Tier</th>
              <th class="py-3 px-3 text-right">Actions</th>
            </tr>
          </thead>
          <tbody class="divide-y divide-stone-100 text-stone-700 font-medium">
            <?php foreach ($recentUsers as $u): ?>
              <tr class="hover:bg-amber-50/40 transition">
                <td class="py-3 px-3">
                  <div class="font-bold text-stone-900"><?= htmlspecialchars(($u['first_name'] ?? 'Member') . ' ' . ($u['last_name'] ?? '')) ?></div>
                  <div class="text-[11px] text-stone-400 font-mono"><?= htmlspecialchars($u['matrimony_id']) ?> • <?= ucfirst($u['gender'] ?? 'profile') ?></div>
                </td>
                <td class="py-3 px-3">
                  <span class="font-semibold text-stone-800"><?= htmlspecialchars($u['caste'] ?? 'General') ?></span>
                </td>
                <td class="py-3 px-3">
                  <div><?= htmlspecialchars($u['occupation'] ?? 'Professional') ?></div>
                  <div class="text-[11px] text-stone-400"><?= htmlspecialchars($u['current_city'] ?? 'India') ?></div>
                </td>
                <td class="py-3 px-3">
                  <?php if (!empty($u['is_vip'])): ?>
                    <span class="inline-flex items-center px-2 py-0.5 rounded-full text-[10px] font-bold bg-amber-100 text-amber-800 border border-amber-300">
                      <i class="fa-solid fa-crown mr-1 text-amber-600"></i> VIP Pro
                    </span>
                  <?php else: ?>
                    <span class="text-stone-400 text-xs">Basic</span>
                  <?php endif; ?>
                </td>
                <td class="py-3 px-3 text-right space-x-1">
                  <a href="/admin/users/view/<?= $u['id'] ?>" class="p-1.5 rounded-lg bg-stone-100 hover:bg-stone-200 text-stone-700 transition" title="View Dossier">
                    <i class="fa-solid fa-eye"></i>
                  </a>
                  <a href="/admin/users/grant-vip/<?= $u['id'] ?>" class="p-1.5 rounded-lg bg-amber-100 hover:bg-amber-200 text-amber-800 transition" title="Grant Free VIP">
                    <i class="fa-solid fa-gem"></i>
                  </a>
                  <a href="/admin/users/edit/<?= $u['id'] ?>" class="p-1.5 rounded-lg bg-maroon-50 hover:bg-maroon-100 text-maroon-700 transition" title="Edit Profile">
                    <i class="fa-solid fa-pen-to-square"></i>
                  </a>
                </td>
              </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
      </div>
    </div>

    <!-- Right 1 Col: Urgent Pending KYC & Security Quick Peek -->
    <div class="space-y-6">
      
      <!-- Pending KYC Mini Card -->
      <div class="glass-card rounded-2xl p-6">
        <div class="flex items-center justify-between pb-3 border-b border-stone-200">
          <h3 class="font-cinzel font-bold text-sm text-maroon-800 flex items-center">
            <i class="fa-solid fa-id-card text-gold-500 mr-2"></i> Pending ID Verification
          </h3>
          <span class="text-xs bg-red-100 text-red-700 px-2 py-0.5 rounded-full font-bold"><?= count($pendingKycList) ?></span>
        </div>

        <div class="mt-4 space-y-3">
          <?php if (empty($pendingKycList)): ?>
            <div class="text-center py-6 text-stone-400 text-xs">
              <i class="fa-solid fa-circle-check text-emerald-500 text-2xl mb-1"></i>
              <p>All submitted KYC documents are verified!</p>
            </div>
          <?php else: ?>
            <?php foreach ($pendingKycList as $k): ?>
              <div class="p-3 rounded-xl bg-stone-50 border border-stone-200 flex items-center justify-between text-xs">
                <div>
                  <div class="font-bold text-stone-800"><?= htmlspecialchars($k['first_name'] . ' ' . $k['last_name']) ?></div>
                  <div class="text-[10px] text-stone-400 font-mono"><?= htmlspecialchars($k['matrimony_id']) ?> • <?= strtoupper($k['doc_type']) ?></div>
                </div>
                <a href="/admin/kyc/review/<?= $k['id'] ?>" class="btn-royal-maroon px-2.5 py-1 rounded-lg text-[11px]">
                  Review &rarr;
                </a>
              </div>
            <?php endforeach; ?>
          <?php endif; ?>
        </div>
      </div>

      <!-- Quick Launch Promo Manager Box -->
      <div class="glass-card rounded-2xl p-6 bg-gradient-to-br from-amber-50/50 to-amber-100/30 border border-amber-300">
        <div class="flex items-center justify-between mb-3">
          <h4 class="font-bold text-xs uppercase tracking-wider text-amber-900">
            <i class="fa-solid fa-bullhorn text-gold-600 mr-1.5"></i> Launch VIP Control
          </h4>
          <span class="text-[10px] font-bold px-2 py-0.5 rounded-full bg-emerald-600 text-white">Active</span>
        </div>
        <p class="text-xs text-stone-600 leading-relaxed mb-4">
          All early registered brides and grooms are currently receiving <strong>90 Days of Dheeraja Royal VIP Pro for Free</strong>.
        </p>
        <div class="flex items-center space-x-2">
          <a href="/admin/promotions" class="btn-royal-gold w-full text-center py-2 rounded-xl text-xs">
            Manage Launch Parameters
          </a>
        </div>
      </div>

    </div>

  </div>

  <!-- Bottom Section: Recent Security Audit Trail -->
  <div class="glass-card rounded-2xl p-6">
    <div class="flex items-center justify-between pb-4 border-b border-stone-200">
      <div>
        <h3 class="font-cinzel font-bold text-base text-maroon-800 flex items-center">
          <i class="fa-solid fa-shield-halved text-gold-500 mr-2"></i> Security & Admin Audit Trail
        </h3>
        <p class="text-xs text-stone-500">Immutable ledger of all administrative interventions and logins</p>
      </div>
      <a href="/admin/security/audit-logs" class="text-xs font-semibold text-maroon-700 hover:text-maroon-900 flex items-center">
        <span>Full Audit Ledger</span>
        <i class="fa-solid fa-chevron-right ml-1.5 text-[10px]"></i>
      </a>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4 mt-4">
      <?php foreach (array_slice($recentLogs, 0, 4) as $log): ?>
        <div class="p-3.5 rounded-xl bg-stone-50 border border-stone-200 text-xs">
          <div class="flex items-center justify-between text-[11px] text-stone-400 mb-1">
            <span class="font-bold text-stone-700 font-mono"><?= htmlspecialchars($log['action']) ?></span>
            <span><?= time_ago($log['created_at']) ?></span>
          </div>
          <div class="text-stone-600 text-[11px] truncate">Admin: <?= htmlspecialchars($log['admin_email']) ?></div>
          <div class="text-stone-400 text-[10px] mt-1 font-mono">IP: <?= htmlspecialchars($log['ip_address']) ?></div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>

</div>
