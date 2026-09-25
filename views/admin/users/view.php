<div class="space-y-6">
  
  <!-- Breadcrumb -->
  <div class="flex items-center justify-between">
    <div class="flex items-center space-x-2 text-xs text-stone-500">
      <a href="/admin/users" class="hover:text-maroon-700">Members</a>
      <span>/</span>
      <span class="text-maroon-800 font-semibold"><?= htmlspecialchars($user['matrimony_id']) ?> Dossier</span>
    </div>
    <div class="flex items-center space-x-2">
      <a href="/admin/users" class="px-3 py-1.5 rounded-lg bg-stone-100 hover:bg-stone-200 text-stone-700 text-xs">
        &larr; Back to Members
      </a>
    </div>
  </div>

  <!-- Hero Profile Banner Card with Master Admin Powers -->
  <div class="glass-card rounded-2xl p-6 relative overflow-hidden">
    <div class="flex flex-col md:flex-row md:items-center justify-between gap-6">
      
      <!-- User Info & Avatar -->
      <div class="flex items-start sm:items-center space-x-4">
        <div class="w-20 h-20 rounded-2xl bg-gradient-to-tr from-maroon-700 to-maroon-900 border-2 border-gold-400 flex items-center justify-center text-gold-300 text-2xl font-bold flex-shrink-0 shadow-md">
          <?= strtoupper(substr($user['first_name'] ?? 'M', 0, 1)) ?>
        </div>

        <div>
          <div class="flex flex-wrap items-center gap-2">
            <h2 class="text-xl font-cinzel font-bold text-stone-900">
              <?= htmlspecialchars(($user['first_name'] ?? '') . ' ' . ($user['last_name'] ?? '')) ?>
            </h2>

            <!-- Badges -->
            <?php if (!empty($user['is_vip'])): ?>
              <span class="px-2.5 py-0.5 rounded-full text-[10px] font-bold bg-amber-100 text-amber-900 border border-amber-300 flex items-center">
                <i class="fa-solid fa-crown mr-1 text-amber-600"></i> <?= htmlspecialchars($user['plan_title'] ?? 'Royal VIP Pro') ?>
              </span>
            <?php else: ?>
              <span class="px-2 py-0.5 rounded-full text-[10px] bg-stone-100 text-stone-600">Basic Member</span>
            <?php endif; ?>

            <?php if (!empty($user['is_kyc_verified'])): ?>
              <span class="px-2.5 py-0.5 rounded-full text-[10px] font-bold bg-emerald-100 text-emerald-800 border border-emerald-300 flex items-center">
                <i class="fa-solid fa-shield-check mr-1 text-emerald-600"></i> KYC Verified
              </span>
            <?php else: ?>
              <span class="px-2 py-0.5 rounded-full text-[10px] bg-red-100 text-red-700">KYC Unverified</span>
            <?php endif; ?>

            <?php if ($user['status'] === 'active'): ?>
              <span class="px-2 py-0.5 rounded-full text-[10px] font-bold bg-emerald-50 text-emerald-700 border border-emerald-200">Active</span>
            <?php elseif ($user['status'] === 'suspended'): ?>
              <span class="px-2 py-0.5 rounded-full text-[10px] font-bold bg-amber-50 text-amber-700 border border-amber-200">Suspended</span>
            <?php else: ?>
              <span class="px-2 py-0.5 rounded-full text-[10px] font-bold bg-red-50 text-red-700 border border-red-200">Banned</span>
            <?php endif; ?>
          </div>

          <div class="text-xs text-stone-500 mt-1 flex flex-wrap items-center gap-x-3 gap-y-1">
            <span class="font-mono text-maroon-700 font-bold"><?= htmlspecialchars($user['matrimony_id']) ?></span>
            <span>•</span>
            <span><?= ucfirst($user['gender'] ?? 'Profile') ?></span>
            <span>•</span>
            <span><?= htmlspecialchars($user['caste'] ?? 'General') ?></span>
            <span>•</span>
            <span><?= htmlspecialchars($user['occupation'] ?? 'Professional') ?> (<?= htmlspecialchars($user['current_city'] ?? 'India') ?>)</span>
          </div>

          <div class="text-xs text-stone-600 mt-1 flex flex-wrap items-center gap-3">
            <span><i class="fa-solid fa-phone text-stone-400 mr-1"></i> <?= htmlspecialchars($user['phone']) ?></span>
            <span><i class="fa-solid fa-envelope text-stone-400 mr-1"></i> <?= htmlspecialchars($user['email']) ?></span>
          </div>
        </div>
      </div>

      <!-- MASTER ADMIN POWER CONTROLS -->
      <div class="flex flex-wrap items-center gap-2 self-start md:self-center">
        
        <!-- 1-Click VIP Grant Button -->
        <a href="/admin/users/grant-vip/<?= $user['id'] ?>" class="btn-royal-gold px-3.5 py-2 rounded-xl text-xs flex items-center space-x-1.5 shadow">
          <i class="fa-solid fa-gem"></i>
          <span>Grant VIP Pro</span>
        </a>

        <!-- Edit Profile -->
        <a href="/admin/users/edit/<?= $user['id'] ?>" class="px-3.5 py-2 rounded-xl bg-maroon-50 hover:bg-maroon-100 text-maroon-800 text-xs font-semibold border border-maroon-200 transition flex items-center space-x-1.5">
          <i class="fa-solid fa-pen-to-square"></i>
          <span>Edit Profile</span>
        </a>

        <!-- Status Toggle Form -->
        <form action="/admin/users/toggle-status/<?= $user['id'] ?>" method="POST" class="inline">
          <?= csrf_field() ?>
          <select name="status" onchange="this.form.submit()" class="px-3 py-2 rounded-xl bg-stone-100 border border-stone-300 text-xs font-semibold text-stone-700 cursor-pointer">
            <option value="active" <?= $user['status'] === 'active' ? 'selected' : '' ?>>Status: Active</option>
            <option value="suspended" <?= $user['status'] === 'suspended' ? 'selected' : '' ?>>Status: Suspended</option>
            <option value="banned" <?= $user['status'] === 'banned' ? 'selected' : '' ?>>Status: Banned</option>
          </select>
        </form>

        <!-- Delete User Form -->
        <form action="/admin/users/delete/<?= $user['id'] ?>" method="POST" onsubmit="return confirm('WARNING: Are you sure you want to permanently delete member <?= $user['matrimony_id'] ?>? This action is irreversible.')" class="inline">
          <?= csrf_field() ?>
          <button type="submit" class="px-3 py-2 rounded-xl bg-red-50 hover:bg-red-100 text-red-700 text-xs font-semibold border border-red-200 transition" title="Delete Profile">
            <i class="fa-solid fa-trash-can"></i>
          </button>
        </form>

      </div>

    </div>
  </div>

  <!-- Detailed Sections Grid -->
  <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
    
    <!-- Left Column: Bio, Horoscope, Family -->
    <div class="lg:col-span-2 space-y-6">
      
      <!-- Personal & Lifestyle -->
      <div class="glass-card p-6 rounded-2xl">
        <h3 class="font-cinzel font-bold text-sm text-maroon-800 border-b border-stone-200 pb-2 mb-4 flex items-center">
          <i class="fa-solid fa-user text-gold-500 mr-2"></i> Personal Dossier & About
        </h3>
        
        <?php if (!empty($user['about_me'])): ?>
          <div class="p-3.5 rounded-xl bg-stone-50 border border-stone-200 text-xs text-stone-700 leading-relaxed italic mb-4">
            "<?= htmlspecialchars($user['about_me']) ?>"
          </div>
        <?php endif; ?>

        <div class="grid grid-cols-2 sm:grid-cols-3 gap-4 text-xs">
          <div><span class="text-stone-400">Date of Birth:</span> <strong class="block text-stone-800"><?= $user['dob'] ?></strong></div>
          <div><span class="text-stone-400">Marital Status:</span> <strong class="block text-stone-800"><?= ucwords(str_replace('_', ' ', $user['marital_status'] ?? 'Never Married')) ?></strong></div>
          <div><span class="text-stone-400">Mother Tongue:</span> <strong class="block text-stone-800"><?= htmlspecialchars($user['mother_tongue'] ?? 'Hindi') ?></strong></div>
          <div><span class="text-stone-400">Height:</span> <strong class="block text-stone-800"><?= $user['height_cm'] ?> cm</strong></div>
          <div><span class="text-stone-400">Weight:</span> <strong class="block text-stone-800"><?= $user['weight_kg'] ?? 'N/A' ?> kg</strong></div>
          <div><span class="text-stone-400">Location:</span> <strong class="block text-stone-800"><?= htmlspecialchars($user['current_city'] ?? '') ?>, <?= htmlspecialchars($user['current_state'] ?? '') ?></strong></div>
        </div>
      </div>

      <!-- Career & Education -->
      <div class="glass-card p-6 rounded-2xl">
        <h3 class="font-cinzel font-bold text-sm text-maroon-800 border-b border-stone-200 pb-2 mb-4 flex items-center">
          <i class="fa-solid fa-graduation-cap text-gold-500 mr-2"></i> Education, Profession & Annual Income
        </h3>

        <div class="grid grid-cols-2 sm:grid-cols-3 gap-4 text-xs">
          <div><span class="text-stone-400">Highest Degree:</span> <strong class="block text-stone-800"><?= htmlspecialchars($user['highest_education'] ?? 'N/A') ?></strong></div>
          <div><span class="text-stone-400">Occupation:</span> <strong class="block text-stone-800"><?= htmlspecialchars($user['occupation'] ?? 'N/A') ?></strong></div>
          <div><span class="text-stone-400">Annual Income:</span> <strong class="block text-emerald-700 text-sm"><?= format_inr($user['annual_income_inr'] ?? 0) ?> LPA</strong></div>
        </div>
      </div>

      <!-- Astrology & Gotra -->
      <div class="glass-card p-6 rounded-2xl">
        <h3 class="font-cinzel font-bold text-sm text-maroon-800 border-b border-stone-200 pb-2 mb-4 flex items-center">
          <i class="fa-solid fa-star-and-crescent text-gold-500 mr-2"></i> Astrological & Cultural Heritage
        </h3>

        <div class="grid grid-cols-2 sm:grid-cols-4 gap-4 text-xs">
          <div><span class="text-stone-400">Religion:</span> <strong class="block text-stone-800"><?= htmlspecialchars($user['religion'] ?? 'Hindu') ?></strong></div>
          <div><span class="text-stone-400">Caste / Sub-caste:</span> <strong class="block text-stone-800"><?= htmlspecialchars($user['caste'] ?? 'General') ?> <?= htmlspecialchars($user['sub_caste'] ?? '') ?></strong></div>
          <div><span class="text-stone-400">Gotra:</span> <strong class="block text-stone-800"><?= htmlspecialchars($user['gotra'] ?? 'N/A') ?></strong></div>
          <div><span class="text-stone-400">Manglik Status:</span> <strong class="block text-maroon-700 font-bold uppercase"><?= htmlspecialchars($user['manglik'] ?? 'no') ?></strong></div>
        </div>
      </div>

      <!-- Subscription Ledger & History -->
      <div class="glass-card p-6 rounded-2xl">
        <div class="flex items-center justify-between border-b border-stone-200 pb-2 mb-4">
          <h3 class="font-cinzel font-bold text-sm text-maroon-800 flex items-center">
            <i class="fa-solid fa-crown text-gold-500 mr-2"></i> Subscriptions & VIP Grant History
          </h3>
          <a href="/admin/users/grant-vip/<?= $user['id'] ?>" class="btn-royal-gold px-3 py-1 rounded-lg text-[11px]">
            + Grant New Plan
          </a>
        </div>

        <?php if (empty($subscriptions)): ?>
          <p class="text-xs text-stone-400 text-center py-4">No subscription history recorded yet.</p>
        <?php else: ?>
          <div class="space-y-3">
            <?php foreach ($subscriptions as $s): ?>
              <div class="p-3.5 rounded-xl border <?= $s['status'] === 'active' ? 'bg-amber-50/50 border-amber-300' : 'bg-stone-50 border-stone-200' ?> text-xs flex flex-col sm:flex-row sm:items-center justify-between gap-2">
                <div>
                  <div class="flex items-center space-x-2">
                    <strong class="text-stone-900 font-bold"><?= htmlspecialchars($s['title']) ?></strong>
                    <span class="px-2 py-0.5 rounded-full text-[10px] font-bold <?= $s['status'] === 'active' ? 'bg-emerald-100 text-emerald-800' : 'bg-stone-200 text-stone-700' ?>">
                      <?= ucfirst($s['status']) ?>
                    </span>
                    <?php if ($s['is_free_grant']): ?>
                      <span class="px-2 py-0.5 rounded-full text-[10px] font-bold bg-gold-400/20 text-maroon-900 border border-gold-400/40">Free Grant</span>
                    <?php endif; ?>
                  </div>
                  <div class="text-[11px] text-stone-500 mt-1">
                    Starts: <?= date('d M Y', strtotime($s['starts_at'])) ?> • Expires: <?= date('d M Y', strtotime($s['expires_at'])) ?>
                  </div>
                  <?php if (!empty($s['grant_notes'])): ?>
                    <div class="text-[10px] text-stone-400 mt-0.5 italic">Note: <?= htmlspecialchars($s['grant_notes']) ?></div>
                  <?php endif; ?>
                </div>

                <?php if ($s['status'] === 'active'): ?>
                  <form action="/admin/users/revoke-vip/<?= $user['id'] ?>" method="POST" onsubmit="return confirm('Revoke VIP privileges for this member?')">
                    <?= csrf_field() ?>
                    <button type="submit" class="px-3 py-1.5 rounded-lg bg-red-100 hover:bg-red-200 text-red-700 font-semibold text-xs transition">
                      Revoke VIP
                    </button>
                  </form>
                <?php endif; ?>
              </div>
            <?php endforeach; ?>
          </div>
        <?php endif; ?>
      </div>

    </div>

    <!-- Right Column: Photos & KYC Verification Review -->
    <div class="space-y-6">
      
      <!-- KYC Documents Card -->
      <div class="glass-card p-6 rounded-2xl">
        <h3 class="font-cinzel font-bold text-sm text-maroon-800 border-b border-stone-200 pb-2 mb-4 flex items-center justify-between">
          <span><i class="fa-solid fa-id-card text-gold-500 mr-2"></i> KYC Verification Proof</span>
        </h3>

        <?php if (empty($kycDocs)): ?>
          <div class="text-center py-6 text-stone-400 text-xs">
            <i class="fa-solid fa-file-circle-question text-3xl mb-2"></i>
            <p>No government ID documents submitted yet.</p>
          </div>
        <?php else: ?>
          <div class="space-y-3">
            <?php foreach ($kycDocs as $kd): ?>
              <div class="p-3 rounded-xl bg-stone-50 border border-stone-200 text-xs">
                <div class="flex items-center justify-between">
                  <span class="font-bold uppercase text-stone-800"><?= $kd['doc_type'] ?></span>
                  <span class="px-2 py-0.5 rounded-full text-[10px] font-bold <?= $kd['status'] === 'approved' ? 'bg-emerald-100 text-emerald-800' : ($kd['status'] === 'rejected' ? 'bg-red-100 text-red-800' : 'bg-amber-100 text-amber-800') ?>">
                    <?= ucfirst($kd['status']) ?>
                  </span>
                </div>
                <div class="text-[11px] text-stone-400 mt-1 font-mono">Doc #: <?= htmlspecialchars($kd['doc_number_masked']) ?></div>
                <div class="mt-3">
                  <a href="/admin/kyc/review/<?= $kd['id'] ?>" class="btn-royal-maroon w-full block text-center py-1.5 rounded-lg text-xs">
                    Inspect & Verify &rarr;
                  </a>
                </div>
              </div>
            <?php endforeach; ?>
          </div>
        <?php endif; ?>
      </div>

      <!-- Quick Action Shortcuts -->
      <div class="glass-card p-6 rounded-2xl bg-maroon-900 text-pearl space-y-3">
        <h4 class="font-cinzel font-bold text-xs text-gold-300 tracking-wider uppercase">Direct Member Actions</h4>
        <div class="space-y-2 text-xs">
          <a href="/admin/users/grant-vip/<?= $user['id'] ?>" class="block w-full py-2.5 px-3 rounded-xl bg-gold-500 hover:bg-gold-400 text-maroon-950 font-bold text-center transition">
            👑 Grant Instant Free VIP
          </a>
          <a href="/admin/users/edit/<?= $user['id'] ?>" class="block w-full py-2.5 px-3 rounded-xl bg-white/10 hover:bg-white/20 text-center text-pearl font-semibold transition">
            Edit Full Profile Record
          </a>
        </div>
      </div>

    </div>

  </div>

</div>
