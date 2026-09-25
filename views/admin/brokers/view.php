<div class="space-y-6">

  <!-- Header Breadcrumb & Actions -->
  <div class="flex flex-col sm:flex-row items-start sm:items-center justify-between gap-4">
    <div>
      <div class="flex items-center space-x-2 text-xs text-stone-500 mb-1">
        <a href="/admin/brokers" class="hover:text-maroon-700">Brokers</a>
        <span>/</span>
        <span class="text-maroon-800 font-bold"><?= htmlspecialchars($broker['name']) ?></span>
      </div>
      <h1 class="text-2xl font-cinzel font-bold text-stone-900">
        <?= htmlspecialchars($broker['name']) ?> 
        <span class="text-xs font-mono font-bold px-2.5 py-1 rounded-full bg-amber-50 text-amber-900 border border-amber-300 ml-2">
          <?= htmlspecialchars($broker['broker_code']) ?>
        </span>
      </h1>
      <p class="text-xs text-stone-500 mt-0.5"><?= htmlspecialchars($broker['agency_name'] ?? 'Independent Matrimonial Consultant') ?> • <?= htmlspecialchars($broker['city'] ?? '') ?></p>
    </div>

    <div class="flex items-center space-x-2">
      <a href="/admin/brokers" class="px-3.5 py-2 rounded-xl bg-stone-100 hover:bg-stone-200 text-stone-700 text-xs font-semibold">
        &larr; Directory
      </a>
      <button onclick="document.getElementById('payoutModal').classList.remove('hidden')" class="px-4 py-2 rounded-xl bg-emerald-600 hover:bg-emerald-700 text-white font-bold text-xs shadow-md shadow-emerald-600/20 flex items-center space-x-1.5 transition">
        <i class="fa-solid fa-money-bill-transfer"></i>
        <span>Release Payout</span>
      </button>
    </div>
  </div>

  <!-- Agent Summary Metrics -->
  <div class="grid grid-cols-1 md:grid-cols-3 gap-5">
    
    <!-- Profile Dossier Card -->
    <div class="bg-white p-6 rounded-3xl border border-stone-200 shadow-sm space-y-4">
      <div class="flex items-center space-x-3.5">
        <div class="w-14 h-14 rounded-2xl bg-gradient-to-br from-amber-400 via-amber-500 to-amber-600 text-maroon-950 flex items-center justify-center text-2xl font-bold shadow-md shadow-amber-500/20">
          <i class="fa-solid fa-user-tie"></i>
        </div>
        <div>
          <h3 class="font-bold text-base text-stone-900"><?= htmlspecialchars($broker['name']) ?></h3>
          <div class="text-xs text-amber-800 font-semibold"><?= htmlspecialchars($broker['agency_name']) ?></div>
          <span class="inline-block mt-1 px-2 py-0.5 rounded-full text-[10px] font-bold bg-emerald-100 text-emerald-800">
            <?= ucfirst($broker['status']) ?> Partner
          </span>
        </div>
      </div>

      <div class="p-3.5 rounded-2xl bg-stone-50 border border-stone-100 space-y-2 text-xs">
        <div class="flex justify-between"><span class="text-stone-400">Phone:</span> <strong class="text-stone-800 font-mono"><?= htmlspecialchars($broker['phone']) ?></strong></div>
        <div class="flex justify-between"><span class="text-stone-400">Email:</span> <strong class="text-stone-800"><?= htmlspecialchars($broker['email'] ?? 'N/A') ?></strong></div>
        <div class="flex justify-between"><span class="text-stone-400">Location:</span> <strong class="text-stone-800"><?= htmlspecialchars($broker['city']) ?>, <?= htmlspecialchars($broker['state']) ?></strong></div>
        <div class="flex justify-between"><span class="text-stone-400">Commission Rate:</span> <strong class="text-amber-800 font-bold"><?= number_format($broker['commission_rate_percent'], 1) ?>%</strong></div>
      </div>

      <!-- Banking Details Box -->
      <div class="p-3.5 rounded-2xl bg-amber-50/50 border border-amber-200/80 space-y-1.5 text-xs">
        <div class="font-bold text-stone-800 mb-1 flex items-center"><i class="fa-solid fa-building-columns text-amber-600 mr-1.5"></i> Settlement Details</div>
        <div class="flex justify-between"><span class="text-stone-500">UPI ID:</span> <strong class="font-mono text-emerald-800"><?= htmlspecialchars($broker['payout_upi_id'] ?? 'Not set') ?></strong></div>
        <div class="flex justify-between"><span class="text-stone-500">Account:</span> <strong class="font-mono text-stone-700"><?= htmlspecialchars($broker['bank_account_number'] ?? 'Not set') ?></strong></div>
        <div class="flex justify-between"><span class="text-stone-500">IFSC:</span> <strong class="font-mono text-stone-700"><?= htmlspecialchars($broker['bank_ifsc'] ?? 'N/A') ?></strong></div>
      </div>

      <?php if (!empty($broker['notes'])): ?>
        <p class="text-xs text-stone-500 italic">"<?= htmlspecialchars($broker['notes']) ?>"</p>
      <?php endif; ?>
    </div>

    <!-- Financial Ledger & Balances Card -->
    <div class="md:col-span-2 space-y-4">
      
      <div class="grid grid-cols-2 gap-4">
        <div class="bg-white p-5 rounded-3xl border border-stone-200 shadow-sm">
          <span class="text-xs font-semibold text-stone-500 uppercase tracking-wider">Total Commissions Earned</span>
          <div class="text-2xl font-bold text-emerald-700 mt-1"><?= format_inr($broker['total_earned_inr']) ?></div>
          <div class="text-[11px] text-stone-400 mt-0.5">Calculated from client signups & match bonuses</div>
        </div>

        <div class="bg-white p-5 rounded-3xl border border-amber-200 shadow-sm bg-gradient-to-br from-white to-amber-50/40">
          <span class="text-xs font-semibold text-amber-900 uppercase tracking-wider">Pending Payout Balance</span>
          <div class="text-2xl font-bold text-amber-600 mt-1"><?= format_inr($broker['balance_due_inr']) ?></div>
          <button onclick="document.getElementById('payoutModal').classList.remove('hidden')" class="mt-2 text-xs font-bold text-maroon-700 hover:underline">
            Initiate Payout &rarr;
          </button>
        </div>
      </div>

      <!-- Mapped Candidates Table -->
      <div class="bg-white rounded-3xl border border-stone-200 shadow-sm overflow-hidden">
        <div class="px-6 py-4 border-b border-stone-100 flex items-center justify-between bg-stone-50/50">
          <h3 class="font-bold text-sm text-stone-800">
            <i class="fa-solid fa-users text-amber-500 mr-2"></i> Candidates Managed (<?= count($clients) ?>)
          </h3>
          <span class="text-xs text-stone-400">Enrolled via <?= htmlspecialchars($broker['broker_code']) ?></span>
        </div>

        <div class="overflow-x-auto">
          <table class="w-full text-left text-xs">
            <thead>
              <tr class="border-b border-stone-100 bg-stone-50/70 text-[10px] text-stone-500 font-bold uppercase">
                <th class="py-2.5 px-4">Candidate</th>
                <th class="py-2.5 px-3">Caste & Gotra</th>
                <th class="py-2.5 px-3">Profession</th>
                <th class="py-2.5 px-3 text-right">Commission</th>
                <th class="py-2.5 px-3 text-center">Status</th>
                <th class="py-2.5 px-4 text-right">Action</th>
              </tr>
            </thead>
            <tbody class="divide-y divide-stone-100">
              <?php if (empty($clients)): ?>
                <tr><td colspan="6" class="p-4 text-center text-stone-400">No candidates mapped yet to this agent.</td></tr>
              <?php else: ?>
                <?php foreach ($clients as $c): ?>
                  <tr class="hover:bg-amber-50/30">
                    <td class="py-2.5 px-4">
                      <div class="font-bold text-stone-800"><?= htmlspecialchars($c['first_name'] . ' ' . $c['last_name']) ?></div>
                      <div class="text-[10px] text-amber-800 font-mono"><?= htmlspecialchars($c['matrimony_id']) ?></div>
                    </td>
                    <td class="py-2.5 px-3 font-medium text-stone-600">
                      <?= htmlspecialchars($c['caste'] ?? 'General') ?> (<?= htmlspecialchars($c['gotra'] ?? 'N/A') ?>)
                    </td>
                    <td class="py-2.5 px-3 text-stone-600">
                      <?= htmlspecialchars($c['occupation'] ?? 'Professional') ?>
                    </td>
                    <td class="py-2.5 px-3 text-right font-bold text-emerald-700">
                      <?= format_inr($c['commission_earned_inr']) ?>
                    </td>
                    <td class="py-2.5 px-3 text-center">
                      <span class="px-2 py-0.5 rounded-full text-[10px] font-bold bg-amber-50 text-amber-900 border border-amber-200">
                        <?= ucfirst($c['match_status'] ?? 'searching') ?>
                      </span>
                    </td>
                    <td class="py-2.5 px-4 text-right">
                      <a href="/admin/users/view/<?= $c['user_id'] ?>" target="_blank" class="text-maroon-700 hover:underline font-bold text-[11px]">View &rarr;</a>
                    </td>
                  </tr>
                <?php endforeach; ?>
              <?php endif; ?>
            </tbody>
          </table>
        </div>
      </div>

    </div>

  </div>

  <!-- Payout Ledger Table -->
  <div class="bg-white rounded-3xl border border-stone-200 shadow-sm overflow-hidden">
    <div class="px-6 py-4 border-b border-stone-100 flex items-center justify-between bg-stone-50/50">
      <h3 class="font-bold text-sm text-stone-800">
        <i class="fa-solid fa-clock-rotate-left text-amber-500 mr-2"></i> Contribution & Payout Settlement History
      </h3>
      <span class="text-xs text-stone-400"><?= count($contributions) ?> Records</span>
    </div>

    <div class="overflow-x-auto">
      <table class="w-full text-left text-xs">
        <thead>
          <tr class="border-b border-stone-100 bg-stone-50/70 text-[10px] text-stone-500 font-bold uppercase">
            <th class="py-3 px-5">Date</th>
            <th class="py-3 px-4">Contribution Type</th>
            <th class="py-3 px-4">Payment Method</th>
            <th class="py-3 px-4">Transaction Reference</th>
            <th class="py-3 px-4 text-right">Amount (INR)</th>
            <th class="py-3 px-5 text-center">Status</th>
          </tr>
        </thead>
        <tbody class="divide-y divide-stone-100">
          <?php if (empty($contributions)): ?>
            <tr><td colspan="6" class="p-6 text-center text-stone-400">No payout settlements recorded yet.</td></tr>
          <?php else: ?>
            <?php foreach ($contributions as $con): ?>
              <tr class="hover:bg-amber-50/30">
                <td class="py-3 px-5 font-mono text-stone-600">
                  <?= date('d M Y, h:i A', strtotime($con['created_at'])) ?>
                </td>
                <td class="py-3 px-4 font-bold text-stone-800">
                  <?= ucwords(str_replace('_', ' ', $con['contribution_type'])) ?>
                  <?php if (!empty($con['notes'])): ?>
                    <div class="text-[10px] text-stone-400 font-normal"><?= htmlspecialchars($con['notes']) ?></div>
                  <?php endif; ?>
                </td>
                <td class="py-3 px-4 uppercase font-semibold text-stone-600">
                  <?= htmlspecialchars($con['payment_method']) ?>
                </td>
                <td class="py-3 px-4 font-mono text-stone-700">
                  <?= htmlspecialchars($con['transaction_ref'] ?? 'N/A') ?>
                </td>
                <td class="py-3 px-4 text-right font-bold text-emerald-700 text-sm">
                  <?= format_inr($con['amount_inr']) ?>
                </td>
                <td class="py-3 px-5 text-center">
                  <span class="px-2 py-0.5 rounded-full text-[10px] font-bold bg-emerald-100 text-emerald-800">
                    <?= ucfirst($con['payout_status']) ?>
                  </span>
                </td>
              </tr>
            <?php endforeach; ?>
          <?php endif; ?>
        </tbody>
      </table>
    </div>
  </div>

</div>

<!-- Modal: Release Payout -->
<div id="payoutModal" class="fixed inset-0 bg-black/60 backdrop-blur-sm z-50 hidden flex items-center justify-center p-4">
  <div class="bg-white rounded-3xl max-w-md w-full p-6 space-y-4 shadow-2xl border border-amber-200">
    <div class="flex items-center justify-between pb-3 border-b border-stone-100">
      <h3 class="font-cinzel font-bold text-base text-stone-900">Release Payout to Agent</h3>
      <button onclick="document.getElementById('payoutModal').classList.add('hidden')" class="text-stone-400 hover:text-stone-700">
        <i class="fa-solid fa-xmark text-lg"></i>
      </button>
    </div>

    <form action="/admin/brokers/payout/<?= $broker['id'] ?>" method="POST" class="space-y-4 text-xs">
      <?= csrf_field() ?>

      <div>
        <label class="block font-semibold text-stone-700 mb-1">Payout Amount (INR) *</label>
        <input type="number" step="0.01" name="amount_inr" value="<?= (float)$broker['balance_due_inr'] ?>" required
               class="w-full px-3.5 py-2.5 bg-stone-50 border border-stone-200 rounded-xl focus:border-amber-500 font-bold text-sm text-stone-900">
        <span class="text-[10px] text-stone-400 mt-0.5 block">Current pending balance: <?= format_inr($broker['balance_due_inr']) ?></span>
      </div>

      <div>
        <label class="block font-semibold text-stone-700 mb-1">Payment Method</label>
        <select name="payment_method" class="w-full px-3.5 py-2.5 bg-stone-50 border border-stone-200 rounded-xl focus:border-amber-500">
          <option value="upi">UPI (Instant Transfer to <?= htmlspecialchars($broker['payout_upi_id'] ?? 'UPI') ?>)</option>
          <option value="bank_transfer">Bank Transfer (NEFT / IMPS)</option>
          <option value="cash">Cash Settlement</option>
          <option value="cheque">Cheque</option>
        </select>
      </div>

      <div>
        <label class="block font-semibold text-stone-700 mb-1">Bank Reference / UPI Transaction ID</label>
        <input type="text" name="transaction_ref" placeholder="e.g. UPI/1234567890/AXIS"
               class="w-full px-3.5 py-2.5 bg-stone-50 border border-stone-200 rounded-xl focus:border-amber-500 font-mono">
      </div>

      <div>
        <label class="block font-semibold text-stone-700 mb-1">Settlement Notes</label>
        <textarea name="notes" rows="2" placeholder="e.g. Commission settlement for Q3 client referrals"
                  class="w-full px-3.5 py-2.5 bg-stone-50 border border-stone-200 rounded-xl focus:border-amber-500"></textarea>
      </div>

      <div class="pt-2 flex items-center justify-end space-x-2">
        <button type="button" onclick="document.getElementById('payoutModal').classList.add('hidden')" class="px-4 py-2 rounded-xl bg-stone-100 hover:bg-stone-200 text-stone-700 font-semibold">Cancel</button>
        <button type="submit" class="px-5 py-2 rounded-xl bg-emerald-600 hover:bg-emerald-700 text-white font-bold shadow-md shadow-emerald-600/20">
          <i class="fa-solid fa-check mr-1.5"></i> Confirm Payout
        </button>
      </div>
    </form>
  </div>
</div>
