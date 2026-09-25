<div class="space-y-6">
  
  <!-- Page Header -->
  <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4">
    <div>
      <h2 class="text-2xl font-cinzel font-bold text-maroon-800">Manage Matrimony Members</h2>
      <p class="text-xs text-stone-500 mt-0.5">Total <?= number_format($total) ?> profiles registered in the system</p>
    </div>
    <div class="flex items-center space-x-3">
      <a href="/admin/users/add" class="btn-royal-gold px-4 py-2.5 rounded-xl text-xs flex items-center space-x-2">
        <i class="fa-solid fa-user-plus"></i>
        <span>Register New Member</span>
      </a>
    </div>
  </div>

  <!-- Filter & Search Toolbar -->
  <div class="glass-card p-4 rounded-2xl">
    <form action="/admin/users" method="GET" class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-6 gap-3">
      
      <!-- Search Input -->
      <div class="md:col-span-2 relative">
        <input type="text" name="search" value="<?= htmlspecialchars($search) ?>" 
               placeholder="Search by Matrimony ID, Name, Phone, Caste..."
               class="w-full pl-9 pr-3 py-2 bg-stone-50 border border-stone-200 rounded-xl text-xs text-stone-800 focus:outline-none focus:border-gold-400">
        <i class="fa-solid fa-magnifying-glass absolute left-3 top-2.5 text-stone-400 text-xs"></i>
      </div>

      <!-- Gender Filter -->
      <div>
        <select name="gender" class="w-full px-3 py-2 bg-stone-50 border border-stone-200 rounded-xl text-xs text-stone-700 focus:outline-none focus:border-gold-400">
          <option value="">All Genders</option>
          <option value="male" <?= $gender === 'male' ? 'selected' : '' ?>>Grooms (Male)</option>
          <option value="female" <?= $gender === 'female' ? 'selected' : '' ?>>Brides (Female)</option>
        </select>
      </div>

      <!-- Status Filter -->
      <div>
        <select name="status" class="w-full px-3 py-2 bg-stone-50 border border-stone-200 rounded-xl text-xs text-stone-700 focus:outline-none focus:border-gold-400">
          <option value="">All Statuses</option>
          <option value="active" <?= $status === 'active' ? 'selected' : '' ?>>Active</option>
          <option value="suspended" <?= $status === 'suspended' ? 'selected' : '' ?>>Suspended</option>
          <option value="banned" <?= $status === 'banned' ? 'selected' : '' ?>>Banned</option>
        </select>
      </div>

      <!-- VIP Filter -->
      <div>
        <select name="is_vip" class="w-full px-3 py-2 bg-stone-50 border border-stone-200 rounded-xl text-xs text-stone-700 focus:outline-none focus:border-gold-400">
          <option value="">All Tiers</option>
          <option value="1" <?= $isVip === '1' ? 'selected' : '' ?>>VIP Pro Members</option>
          <option value="0" <?= $isVip === '0' ? 'selected' : '' ?>>Free Basic Only</option>
        </select>
      </div>

      <!-- Action Buttons -->
      <div class="flex items-center space-x-2">
        <button type="submit" class="btn-royal-maroon w-full py-2 rounded-xl text-xs font-semibold">
          Filter
        </button>
        <a href="/admin/users" class="px-3 py-2 rounded-xl bg-stone-100 hover:bg-stone-200 text-stone-600 text-xs" title="Reset Filters">
          <i class="fa-solid fa-rotate-left"></i>
        </a>
      </div>

    </form>
  </div>

  <!-- Members Table -->
  <div class="glass-card rounded-2xl overflow-hidden shadow-sm">
    <div class="overflow-x-auto">
      <table class="w-full text-left border-collapse text-xs">
        <thead class="bg-stone-50 border-b border-stone-200 text-stone-500 uppercase tracking-wider text-[11px]">
          <tr>
            <th class="py-3.5 px-4 font-semibold">Matrimony ID & Name</th>
            <th class="py-3.5 px-4 font-semibold">Contact Details</th>
            <th class="py-3.5 px-4 font-semibold">Caste & Gotra</th>
            <th class="py-3.5 px-4 font-semibold">Profession & City</th>
            <th class="py-3.5 px-4 font-semibold">KYC</th>
            <th class="py-3.5 px-4 font-semibold">Subscription Tier</th>
            <th class="py-3.5 px-4 font-semibold">Status</th>
            <th class="py-3.5 px-4 font-semibold text-right">Actions</th>
          </tr>
        </thead>
        <tbody class="divide-y divide-stone-100 text-stone-700">
          <?php if (empty($users)): ?>
            <tr>
              <td colspan="8" class="py-12 text-center text-stone-400">
                <i class="fa-solid fa-user-slash text-3xl mb-2"></i>
                <p>No matrimony profiles found matching your search criteria.</p>
              </td>
            </tr>
          <?php else: ?>
            <?php foreach ($users as $u): ?>
              <tr class="hover:bg-amber-50/30 transition">
                
                <!-- ID & Name -->
                <td class="py-3.5 px-4">
                  <div class="font-bold text-stone-900 text-sm">
                    <a href="/admin/users/view/<?= $u['id'] ?>" class="hover:text-maroon-700">
                      <?= htmlspecialchars(($u['first_name'] ?? 'Member') . ' ' . ($u['last_name'] ?? '')) ?>
                    </a>
                  </div>
                  <div class="text-[11px] text-stone-400 font-mono flex items-center space-x-1.5 mt-0.5">
                    <span class="text-maroon-700 font-bold"><?= htmlspecialchars($u['matrimony_id']) ?></span>
                    <span>•</span>
                    <span class="<?= ($u['gender'] ?? '') === 'female' ? 'text-pink-600 font-semibold' : 'text-indigo-600 font-semibold' ?>">
                      <?= ucfirst($u['gender'] ?? 'Profile') ?>
                    </span>
                  </div>
                </td>

                <!-- Contact -->
                <td class="py-3.5 px-4">
                  <div class="font-medium text-stone-800"><?= htmlspecialchars($u['phone']) ?></div>
                  <div class="text-[11px] text-stone-400 truncate max-w-[140px]"><?= htmlspecialchars($u['email']) ?></div>
                </td>

                <!-- Caste & Gotra -->
                <td class="py-3.5 px-4">
                  <div class="font-semibold text-stone-800"><?= htmlspecialchars($u['caste'] ?? 'General') ?></div>
                  <div class="text-[11px] text-stone-400">Gotra: <?= htmlspecialchars($u['gotra'] ?? 'N/A') ?></div>
                </td>

                <!-- Profession & City -->
                <td class="py-3.5 px-4">
                  <div class="font-medium text-stone-800"><?= htmlspecialchars($u['occupation'] ?? 'Professional') ?></div>
                  <div class="text-[11px] text-stone-400"><?= htmlspecialchars($u['current_city'] ?? 'India') ?></div>
                </td>

                <!-- KYC Badge -->
                <td class="py-3.5 px-4">
                  <?php if (!empty($u['is_kyc_verified'])): ?>
                    <span class="inline-flex items-center px-2 py-0.5 rounded-full text-[10px] font-bold bg-emerald-100 text-emerald-800 border border-emerald-300">
                      <i class="fa-solid fa-shield-check mr-1 text-emerald-600"></i> Verified
                    </span>
                  <?php else: ?>
                    <span class="inline-flex items-center px-2 py-0.5 rounded-full text-[10px] font-medium bg-stone-100 text-stone-600 border border-stone-200">
                      Unverified
                    </span>
                  <?php endif; ?>
                </td>

                <!-- Subscription Tier -->
                <td class="py-3.5 px-4">
                  <?php if (!empty($u['is_vip'])): ?>
                    <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-[10px] font-bold bg-amber-100 text-amber-900 border border-amber-300 shadow-sm">
                      <i class="fa-solid fa-crown mr-1 text-amber-600"></i> <?= htmlspecialchars($u['plan_title'] ?? 'Royal VIP Pro') ?>
                    </span>
                    <?php if (!empty($u['plan_expires_at'])): ?>
                      <div class="text-[10px] text-stone-400 mt-0.5">Exp: <?= date('d M Y', strtotime($u['plan_expires_at'])) ?></div>
                    <?php endif; ?>
                  <?php else: ?>
                    <span class="text-stone-400 font-medium">Free Member</span>
                  <?php endif; ?>
                </td>

                <!-- Status -->
                <td class="py-3.5 px-4">
                  <?php if ($u['status'] === 'active'): ?>
                    <span class="inline-flex items-center px-2 py-0.5 rounded-full text-[10px] font-bold bg-emerald-50 text-emerald-700 border border-emerald-200">Active</span>
                  <?php elseif ($u['status'] === 'suspended'): ?>
                    <span class="inline-flex items-center px-2 py-0.5 rounded-full text-[10px] font-bold bg-amber-50 text-amber-700 border border-amber-200">Suspended</span>
                  <?php else: ?>
                    <span class="inline-flex items-center px-2 py-0.5 rounded-full text-[10px] font-bold bg-red-50 text-red-700 border border-red-200">Banned</span>
                  <?php endif; ?>
                </td>

                <!-- Actions -->
                <td class="py-3.5 px-4 text-right space-x-1">
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
          <?php endif; ?>
        </tbody>
      </table>
    </div>

    <!-- Pagination -->
    <?php if ($totalPages > 1): ?>
      <div class="p-4 border-t border-stone-200 bg-stone-50 flex items-center justify-between text-xs text-stone-500">
        <div>Showing Page <?= $page ?> of <?= $totalPages ?> (<?= number_format($total) ?> total)</div>
        <div class="flex items-center space-x-1">
          <?php if ($page > 1): ?>
            <a href="?page=<?= $page - 1 ?>&search=<?= urlencode($search) ?>&gender=<?= $gender ?>&status=<?= $status ?>&is_vip=<?= $isVip ?>" class="px-2.5 py-1 rounded bg-white border border-stone-200 hover:bg-stone-100">&larr; Prev</a>
          <?php endif; ?>
          
          <span class="px-3 py-1 font-bold text-maroon-800 bg-white border border-gold-400 rounded"><?= $page ?></span>
          
          <?php if ($page < $totalPages): ?>
            <a href="?page=<?= $page + 1 ?>&search=<?= urlencode($search) ?>&gender=<?= $gender ?>&status=<?= $status ?>&is_vip=<?= $isVip ?>" class="px-2.5 py-1 rounded bg-white border border-stone-200 hover:bg-stone-100">Next &rarr;</a>
          <?php endif; ?>
        </div>
      </div>
    <?php endif; ?>

  </div>

</div>
