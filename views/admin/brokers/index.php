<div class="space-y-6">

  <!-- Header Breadcrumb & Actions -->
  <div class="flex flex-col sm:flex-row items-start sm:items-center justify-between gap-4">
    <div>
      <div class="flex items-center space-x-2 text-xs text-stone-500 mb-1">
        <a href="/admin/dashboard" class="hover:text-maroon-700">Dashboard</a>
        <span>/</span>
        <span class="text-maroon-800 font-bold">Vivah Sahayak & Marriage Bureaus</span>
      </div>
      <h1 class="text-2xl font-cinzel font-bold text-stone-900">Broker & Agent Network</h1>
      <p class="text-xs text-stone-500 mt-0.5">Manage matrimonial consultants, client portfolios, and referral commission contributions.</p>
    </div>

    <a href="/admin/brokers/add" class="px-4 py-2.5 rounded-xl bg-gradient-to-r from-maroon-700 to-maroon-800 hover:from-maroon-800 hover:to-maroon-900 text-white font-bold text-xs shadow-md shadow-maroon-700/20 flex items-center space-x-2 transition">
      <i class="fa-solid fa-user-plus text-amber-300"></i>
      <span>Register New Broker</span>
    </a>
  </div>

  <!-- KPI Metrics Ribbon -->
  <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4">
    <div class="bg-white p-5 rounded-2xl border border-stone-200/90 shadow-sm flex items-center justify-between">
      <div>
        <span class="text-xs font-semibold text-stone-500 uppercase tracking-wider">Active Bureau Partners</span>
        <div class="text-2xl font-bold text-stone-900 mt-1"><?= $totalBrokers ?></div>
        <div class="text-[11px] text-emerald-600 font-semibold mt-0.5">Verified Agents</div>
      </div>
      <div class="w-12 h-12 rounded-xl bg-amber-50 text-amber-600 flex items-center justify-center text-xl border border-amber-200">
        <i class="fa-solid fa-handshake"></i>
      </div>
    </div>

    <div class="bg-white p-5 rounded-2xl border border-stone-200/90 shadow-sm flex items-center justify-between">
      <div>
        <span class="text-xs font-semibold text-stone-500 uppercase tracking-wider">Candidates Enrolled</span>
        <div class="text-2xl font-bold text-maroon-700 mt-1"><?= $totalClientsEnrolled ?></div>
        <div class="text-[11px] text-stone-400 mt-0.5">Managed through bureau network</div>
      </div>
      <div class="w-12 h-12 rounded-xl bg-rose-50 text-rose-600 flex items-center justify-center text-xl border border-rose-200">
        <i class="fa-solid fa-users"></i>
      </div>
    </div>

    <div class="bg-white p-5 rounded-2xl border border-stone-200/90 shadow-sm flex items-center justify-between">
      <div>
        <span class="text-xs font-semibold text-stone-500 uppercase tracking-wider">Commissions Distributed</span>
        <div class="text-2xl font-bold text-emerald-700 mt-1"><?= format_inr($totalCommissionsDistributed) ?></div>
        <div class="text-[11px] text-emerald-600 font-semibold mt-0.5">Total lifetime payout</div>
      </div>
      <div class="w-12 h-12 rounded-xl bg-emerald-50 text-emerald-600 flex items-center justify-center text-xl border border-emerald-200">
        <i class="fa-solid fa-money-bill-transfer"></i>
      </div>
    </div>

    <div class="bg-white p-5 rounded-2xl border border-stone-200/90 shadow-sm flex items-center justify-between">
      <div>
        <span class="text-xs font-semibold text-stone-500 uppercase tracking-wider">Pending Payout Balance</span>
        <div class="text-2xl font-bold text-amber-600 mt-1"><?= format_inr($totalPendingBalance) ?></div>
        <div class="text-[11px] text-amber-700/80 font-semibold mt-0.5">Ready for release</div>
      </div>
      <div class="w-12 h-12 rounded-xl bg-amber-50 text-amber-600 flex items-center justify-center text-xl border border-amber-200">
        <i class="fa-solid fa-wallet"></i>
      </div>
    </div>
  </div>

  <!-- Brokers Table Card -->
  <div class="bg-white rounded-3xl border border-stone-200 shadow-sm overflow-hidden">
    <div class="px-6 py-4 border-b border-stone-100 flex items-center justify-between bg-stone-50/50">
      <h3 class="font-bold text-sm text-stone-800">Registered Matchmakers Directory</h3>
      <span class="text-xs text-stone-400"><?= count($brokers) ?> Agencies active</span>
    </div>

    <div class="overflow-x-auto">
      <table class="w-full text-left border-collapse text-xs">
        <thead>
          <tr class="border-b border-stone-200 bg-stone-50/80 text-[11px] text-stone-500 font-bold uppercase tracking-wider">
            <th class="py-3 px-5">Agent / Bureau</th>
            <th class="py-3 px-4">Location</th>
            <th class="py-3 px-4">Contact</th>
            <th class="py-3 px-4 text-center">Commission %</th>
            <th class="py-3 px-4 text-center">Clients</th>
            <th class="py-3 px-4 text-right">Total Earned</th>
            <th class="py-3 px-4 text-right">Balance Due</th>
            <th class="py-3 px-4 text-center">Status</th>
            <th class="py-3 px-5 text-right">Actions</th>
          </tr>
        </thead>
        <tbody class="divide-y divide-stone-100 text-stone-700">
          <?php foreach ($brokers as $b): ?>
            <tr class="hover:bg-amber-50/40 transition">
              <td class="py-3.5 px-5">
                <div class="flex items-center space-x-3">
                  <div class="w-9 h-9 rounded-xl bg-gradient-to-br from-amber-400 to-amber-600 text-maroon-950 font-bold flex items-center justify-center text-sm shadow-xs">
                    <i class="fa-solid fa-user-tie"></i>
                  </div>
                  <div>
                    <a href="/admin/brokers/view/<?= $b['id'] ?>" class="font-bold text-stone-900 hover:text-maroon-700 text-xs">
                      <?= htmlspecialchars($b['name']) ?>
                    </a>
                    <div class="text-[11px] text-amber-800 font-semibold font-mono"><?= htmlspecialchars($b['broker_code']) ?></div>
                    <div class="text-[10px] text-stone-400"><?= htmlspecialchars($b['agency_name'] ?? 'Independent Consultant') ?></div>
                  </div>
                </div>
              </td>

              <td class="py-3.5 px-4 font-medium text-stone-600">
                <?= htmlspecialchars($b['city'] ?? 'India') ?><?= !empty($b['state']) ? ', ' . htmlspecialchars($b['state']) : '' ?>
              </td>

              <td class="py-3.5 px-4">
                <div class="font-mono text-stone-800 font-semibold"><?= htmlspecialchars($b['phone']) ?></div>
                <div class="text-stone-400 text-[10px] truncate max-w-[140px]"><?= htmlspecialchars($b['email'] ?? 'N/A') ?></div>
              </td>

              <td class="py-3.5 px-4 text-center">
                <span class="px-2 py-0.5 rounded-full text-[11px] font-bold bg-amber-50 text-amber-900 border border-amber-200">
                  <?= number_format($b['commission_rate_percent'], 1) ?>%
                </span>
              </td>

              <td class="py-3.5 px-4 text-center font-bold text-stone-800">
                <?= (int)$b['total_clients_count'] ?>
              </td>

              <td class="py-3.5 px-4 text-right font-bold text-emerald-700">
                <?= format_inr($b['total_earned_inr']) ?>
              </td>

              <td class="py-3.5 px-4 text-right font-bold text-amber-600">
                <?= format_inr($b['balance_due_inr']) ?>
              </td>

              <td class="py-3.5 px-4 text-center">
                <span class="px-2 py-0.5 rounded-full text-[10px] font-bold <?= $b['status'] === 'active' ? 'bg-emerald-100 text-emerald-800' : 'bg-stone-100 text-stone-600' ?>">
                  <?= ucfirst($b['status']) ?>
                </span>
              </td>

              <td class="py-3.5 px-5 text-right space-x-1.5 whitespace-nowrap">
                <a href="/admin/brokers/view/<?= $b['id'] ?>" class="px-3 py-1.5 rounded-lg bg-stone-100 hover:bg-amber-100 text-stone-700 hover:text-maroon-800 font-bold text-[11px] transition shadow-xs">
                  <i class="fa-solid fa-eye mr-1"></i> Dossier
                </a>
              </td>
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>
  </div>

</div>
