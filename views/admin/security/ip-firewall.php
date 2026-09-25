<div class="space-y-8">
  
  <!-- Page Header -->
  <div class="flex items-center justify-between">
    <div>
      <h2 class="text-2xl font-cinzel font-bold text-maroon-800">Firewall & Anti-Hacking Defense</h2>
      <p class="text-xs text-stone-500 mt-0.5">Control IP blacklists, inactivity session timeouts, and proactive intrusion defenses</p>
    </div>
  </div>

  <!-- Defensive Security Status Cards -->
  <div class="grid grid-cols-1 sm:grid-cols-3 gap-5">
    
    <div class="glass-card p-5 rounded-2xl border-l-4 border-emerald-500">
      <div class="flex items-center space-x-3">
        <div class="w-10 h-10 rounded-xl bg-emerald-50 text-emerald-600 flex items-center justify-center text-lg">
          <i class="fa-solid fa-shield-virus"></i>
        </div>
        <div>
          <div class="text-xs font-bold text-stone-900">SQLi & XSS Filter</div>
          <div class="text-[11px] text-emerald-700 font-semibold">Active & Armed</div>
        </div>
      </div>
      <p class="text-[11px] text-stone-500 mt-3 leading-relaxed">
        100% Parameterized prepared statements & regex pattern inspection on all incoming query strings.
      </p>
    </div>

    <div class="glass-card p-5 rounded-2xl border-l-4 border-emerald-500">
      <div class="flex items-center space-x-3">
        <div class="w-10 h-10 rounded-xl bg-emerald-50 text-emerald-600 flex items-center justify-center text-lg">
          <i class="fa-solid fa-key"></i>
        </div>
        <div>
          <div class="text-xs font-bold text-stone-900">Anti-CSRF Guard</div>
          <div class="text-[11px] text-emerald-700 font-semibold">Active & Enforced</div>
        </div>
      </div>
      <p class="text-[11px] text-stone-500 mt-3 leading-relaxed">
        Strict 256-bit cryptographic CSRF token validation on every state-altering administrative form.
      </p>
    </div>

    <div class="glass-card p-5 rounded-2xl border-l-4 border-gold-500">
      <div class="flex items-center space-x-3">
        <div class="w-10 h-10 rounded-xl bg-amber-50 text-amber-600 flex items-center justify-center text-lg">
          <i class="fa-solid fa-clock"></i>
        </div>
        <div>
          <div class="text-xs font-bold text-stone-900">Session Lock Timer</div>
          <div class="text-[11px] text-amber-800 font-semibold"><?= (int)$timeoutMinutes ?> Mins Inactivity</div>
        </div>
      </div>
      <p class="text-[11px] text-stone-500 mt-3 leading-relaxed">
        Automatic royal lockscreen triggers when workstation is unattended for more than <?= (int)$timeoutMinutes ?> minutes.
      </p>
    </div>

  </div>

  <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
    
    <!-- Left 2 Cols: Blocked IPs Firewall Table -->
    <div class="lg:col-span-2 glass-card rounded-2xl p-6">
      <div class="flex items-center justify-between pb-3 border-b border-stone-200 mb-4">
        <div>
          <h3 class="font-cinzel font-bold text-sm text-maroon-800 flex items-center">
            <i class="fa-solid fa-ban text-red-500 mr-2"></i> Firewall Blacklisted IP Addresses
          </h3>
          <p class="text-xs text-stone-500">IPs blocked from accessing API endpoints or admin portals</p>
        </div>
        <span class="text-xs font-bold bg-stone-100 text-stone-700 px-2.5 py-1 rounded-full">
          <?= count($blockedIps) ?> Blocked
        </span>
      </div>

      <div class="overflow-x-auto">
        <table class="w-full text-left border-collapse text-xs">
          <thead class="bg-stone-50 border-b border-stone-200 text-stone-500 uppercase tracking-wider text-[11px]">
            <tr>
              <th class="py-3 px-3 font-semibold">IP Address</th>
              <th class="py-3 px-3 font-semibold">Reason</th>
              <th class="py-3 px-3 font-semibold">Blocked Until</th>
              <th class="py-3 px-3 font-semibold text-right">Action</th>
            </tr>
          </thead>
          <tbody class="divide-y divide-stone-100 text-stone-700 font-mono">
            <?php if (empty($blockedIps)): ?>
              <tr>
                <td colspan="4" class="py-8 text-center text-stone-400 font-sans">
                  <i class="fa-solid fa-shield text-2xl text-emerald-500 mb-1"></i>
                  <p>Firewall is clear! No active IP bans currently in effect.</p>
                </td>
              </tr>
            <?php else: ?>
              <?php foreach ($blockedIps as $b): ?>
                <tr>
                  <td class="py-3 px-3 font-bold text-stone-900"><?= htmlspecialchars($b['ip_address']) ?></td>
                  <td class="py-3 px-3 font-sans text-stone-600"><?= htmlspecialchars($b['reason']) ?></td>
                  <td class="py-3 px-3 font-sans text-stone-500">
                    <?= $b['blocked_until'] ? date('d M Y, h:i A', strtotime($b['blocked_until'])) : '<span class="text-red-600 font-bold">Permanent</span>' ?>
                  </td>
                  <td class="py-3 px-3 text-right">
                    <form action="/admin/security/unblock-ip/<?= $b['id'] ?>" method="POST" class="inline">
                      <?= csrf_field() ?>
                      <button type="submit" class="px-2.5 py-1 rounded bg-stone-100 hover:bg-stone-200 text-stone-700 font-sans font-semibold text-[11px] transition">
                        Unblock IP
                      </button>
                    </form>
                  </td>
                </tr>
              <?php endforeach; ?>
            <?php endif; ?>
          </tbody>
        </table>
      </div>
    </div>

    <!-- Right 1 Col: Block New IP & Configure Session Timeout -->
    <div class="space-y-6">
      
      <!-- Block IP Form -->
      <form action="/admin/security/block-ip" method="POST" class="glass-card p-6 rounded-2xl space-y-4">
        <?= csrf_field() ?>
        <h3 class="font-cinzel font-bold text-sm text-maroon-800 border-b border-stone-200 pb-2 flex items-center">
          <i class="fa-solid fa-hand-dots text-red-500 mr-2"></i> Block Suspicious IP
        </h3>

        <div class="space-y-3 text-xs">
          <div>
            <label class="block font-semibold text-stone-700 mb-1">Target IP Address *</label>
            <input type="text" name="ip_address" placeholder="e.g. 192.168.1.100" required class="w-full px-3 py-2 bg-stone-50 border border-stone-200 rounded-xl font-mono focus:border-red-400">
          </div>
          <div>
            <label class="block font-semibold text-stone-700 mb-1">Ban Reason *</label>
            <input type="text" name="reason" placeholder="e.g. Automated bot scraper / brute force" required class="w-full px-3 py-2 bg-stone-50 border border-stone-200 rounded-xl focus:border-red-400">
          </div>
          <div>
            <label class="block font-semibold text-stone-700 mb-1">Duration (Hours, 0 for permanent)</label>
            <input type="number" name="duration_hours" value="24" class="w-full px-3 py-2 bg-stone-50 border border-stone-200 rounded-xl focus:border-red-400">
          </div>
          <button type="submit" class="w-full py-2.5 rounded-xl bg-red-600 hover:bg-red-700 text-white font-bold text-xs uppercase tracking-wider shadow transition">
            <i class="fa-solid fa-ban mr-1.5"></i> Apply Firewall Ban
          </button>
        </div>
      </form>

      <!-- Inactivity Timeout Settings -->
      <form action="/admin/security/session-config" method="POST" class="glass-card p-6 rounded-2xl space-y-4">
        <?= csrf_field() ?>
        <h3 class="font-cinzel font-bold text-sm text-maroon-800 border-b border-stone-200 pb-2 flex items-center">
          <i class="fa-solid fa-stopwatch text-gold-500 mr-2"></i> Session Inactivity Timer
        </h3>

        <div class="space-y-3 text-xs">
          <div>
            <label class="block font-semibold text-stone-700 mb-1">Lock Workstation After Inactivity</label>
            <select name="admin_session_timeout_minutes" class="w-full px-3 py-2 bg-stone-50 border border-stone-200 rounded-xl focus:border-gold-400">
              <option value="5" <?= (int)$timeoutMinutes === 5 ? 'selected' : '' ?>>5 Minutes</option>
              <option value="10" <?= (int)$timeoutMinutes === 10 ? 'selected' : '' ?>>10 Minutes</option>
              <option value="15" <?= (int)$timeoutMinutes === 15 ? 'selected' : '' ?>>15 Minutes (Recommended)</option>
              <option value="30" <?= (int)$timeoutMinutes === 30 ? 'selected' : '' ?>>30 Minutes</option>
              <option value="60" <?= (int)$timeoutMinutes === 60 ? 'selected' : '' ?>>60 Minutes</option>
            </select>
          </div>
          <button type="submit" class="btn-royal-maroon w-full py-2.5 rounded-xl font-bold text-xs uppercase tracking-wider shadow transition">
            Update Timer
          </button>
        </div>
      </form>

    </div>

  </div>

</div>
