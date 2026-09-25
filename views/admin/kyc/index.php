<div class="space-y-6">
  
  <!-- Page Header -->
  <div class="flex items-center justify-between">
    <div>
      <h2 class="text-2xl font-cinzel font-bold text-maroon-800">KYC Verification Workbench</h2>
      <p class="text-xs text-stone-500 mt-0.5">Review and verify government identity documents submitted by members</p>
    </div>
    <div class="flex items-center space-x-2">
      <span class="px-3 py-1 rounded-full text-xs font-bold <?= count($pending) > 0 ? 'bg-red-100 text-red-700 animate-pulse' : 'bg-emerald-100 text-emerald-800' ?>">
        <?= count($pending) ?> Pending Verifications
      </span>
    </div>
  </div>

  <!-- Pending Submissions Queue -->
  <div class="glass-card rounded-2xl overflow-hidden shadow-sm">
    <div class="p-5 border-b border-stone-200 bg-amber-50/30 flex items-center justify-between">
      <h3 class="font-cinzel font-bold text-sm text-maroon-800 flex items-center">
        <i class="fa-solid fa-clock text-amber-500 mr-2"></i> Pending ID Submissions Queue
      </h3>
    </div>

    <div class="overflow-x-auto">
      <table class="w-full text-left border-collapse text-xs">
        <thead class="bg-stone-50 border-b border-stone-200 text-stone-500 uppercase tracking-wider text-[11px]">
          <tr>
            <th class="py-3 px-4 font-semibold">Member</th>
            <th class="py-3 px-4 font-semibold">Document Type</th>
            <th class="py-3 px-4 font-semibold">Masked ID Number</th>
            <th class="py-3 px-4 font-semibold">Submitted On</th>
            <th class="py-3 px-4 font-semibold text-right">Actions</th>
          </tr>
        </thead>
        <tbody class="divide-y divide-stone-100 text-stone-700">
          <?php if (empty($pending)): ?>
            <tr>
              <td colspan="5" class="py-12 text-center text-stone-400">
                <i class="fa-solid fa-circle-check text-emerald-500 text-3xl mb-2"></i>
                <p>All KYC document submissions have been verified and processed!</p>
              </td>
            </tr>
          <?php else: ?>
            <?php foreach ($pending as $doc): ?>
              <tr class="hover:bg-amber-50/30 transition">
                <td class="py-3.5 px-4">
                  <div class="font-bold text-stone-900"><?= htmlspecialchars($doc['first_name'] . ' ' . $doc['last_name']) ?></div>
                  <div class="text-[11px] text-stone-400 font-mono"><?= htmlspecialchars($doc['matrimony_id']) ?> • <?= htmlspecialchars($doc['phone']) ?></div>
                </td>
                <td class="py-3.5 px-4">
                  <span class="px-2.5 py-1 rounded-lg text-[10px] font-bold bg-maroon-50 text-maroon-800 border border-maroon-200 uppercase">
                    <?= htmlspecialchars($doc['doc_type']) ?>
                  </span>
                </td>
                <td class="py-3.5 px-4 font-mono font-semibold text-stone-800">
                  <?= htmlspecialchars($doc['doc_number_masked']) ?>
                </td>
                <td class="py-3.5 px-4 text-stone-500">
                  <?= date('d M Y, h:i A', strtotime($doc['created_at'])) ?>
                </td>
                <td class="py-3.5 px-4 text-right">
                  <a href="/admin/kyc/review/<?= $doc['id'] ?>" class="btn-royal-gold px-3.5 py-1.5 rounded-lg text-xs font-bold inline-flex items-center space-x-1 shadow-sm">
                    <i class="fa-solid fa-magnifying-glass"></i>
                    <span>Review & Verify</span>
                  </a>
                </td>
              </tr>
            <?php endforeach; ?>
          <?php endif; ?>
        </tbody>
      </table>
    </div>
  </div>

  <!-- Past Verification History -->
  <div class="glass-card rounded-2xl p-6">
    <h3 class="font-cinzel font-bold text-sm text-maroon-800 border-b border-stone-200 pb-3 mb-4 flex items-center">
      <i class="fa-solid fa-clock-rotate-left text-gold-500 mr-2"></i> Recent Verification Decisions
    </h3>

    <?php if (empty($history)): ?>
      <p class="text-xs text-stone-400 text-center py-4">No recent verification history available.</p>
    <?php else: ?>
      <div class="overflow-x-auto">
        <table class="w-full text-left border-collapse text-xs">
          <thead>
            <tr class="text-stone-400 uppercase tracking-wider border-b border-stone-200 text-[10px]">
              <th class="py-2 px-3">Member</th>
              <th class="py-2 px-3">Document</th>
              <th class="py-2 px-3">Decision</th>
              <th class="py-2 px-3">Reason / Notes</th>
              <th class="py-2 px-3">Verified By</th>
              <th class="py-2 px-3">Date</th>
            </tr>
          </thead>
          <tbody class="divide-y divide-stone-100 text-stone-700">
            <?php foreach ($history as $h): ?>
              <tr>
                <td class="py-2.5 px-3">
                  <div class="font-semibold text-stone-800"><?= htmlspecialchars($h['first_name'] . ' ' . $h['last_name']) ?></div>
                  <div class="text-[10px] text-stone-400 font-mono"><?= htmlspecialchars($h['matrimony_id']) ?></div>
                </td>
                <td class="py-2.5 px-3 uppercase text-stone-600 font-medium"><?= htmlspecialchars($h['doc_type']) ?></td>
                <td class="py-2.5 px-3">
                  <?php if ($h['status'] === 'approved'): ?>
                    <span class="text-emerald-700 font-bold"><i class="fa-solid fa-check mr-1"></i> Approved</span>
                  <?php else: ?>
                    <span class="text-red-700 font-bold"><i class="fa-solid fa-xmark mr-1"></i> Rejected</span>
                  <?php endif; ?>
                </td>
                <td class="py-2.5 px-3 text-stone-500 truncate max-w-xs"><?= htmlspecialchars($h['rejection_reason'] ?? 'Verified successfully') ?></td>
                <td class="py-2.5 px-3 text-stone-600 font-mono text-[11px]"><?= htmlspecialchars($h['verified_by_email'] ?? 'Master Admin') ?></td>
                <td class="py-2.5 px-3 text-stone-400"><?= time_ago($h['verified_at'] ?? $h['created_at']) ?></td>
              </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
      </div>
    <?php endif; ?>
  </div>

</div>
