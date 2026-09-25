<div class="space-y-6">
  
  <!-- Page Header -->
  <div class="flex items-center justify-between">
    <div>
      <div class="flex items-center space-x-2 text-xs text-stone-500 mb-1">
        <a href="/admin/subscriptions" class="hover:text-maroon-700">Plans</a>
        <span>/</span>
        <span class="text-maroon-800 font-semibold">VIP Grant Ledger</span>
      </div>
      <h2 class="text-2xl font-cinzel font-bold text-maroon-800">VIP & Free Plan Manual Grant Ledger</h2>
      <p class="text-xs text-stone-500 mt-0.5">Transparent immutable audit log of all complimentary and manual plan provisions</p>
    </div>
    <a href="/admin/subscriptions" class="px-3.5 py-2 rounded-xl bg-stone-100 hover:bg-stone-200 text-stone-700 text-xs font-semibold">
      &larr; Back to Plans
    </a>
  </div>

  <div class="glass-card rounded-2xl overflow-hidden shadow-sm">
    <div class="overflow-x-auto">
      <table class="w-full text-left border-collapse text-xs">
        <thead class="bg-stone-50 border-b border-stone-200 text-stone-500 uppercase tracking-wider text-[11px]">
          <tr>
            <th class="py-3.5 px-4 font-semibold">Member</th>
            <th class="py-3.5 px-4 font-semibold">Package Granted</th>
            <th class="py-3.5 px-4 font-semibold">Validity Period</th>
            <th class="py-3.5 px-4 font-semibold">Administrative Reason / Notes</th>
            <th class="py-3.5 px-4 font-semibold">Granted By</th>
            <th class="py-3.5 px-4 font-semibold">Date Granted</th>
          </tr>
        </thead>
        <tbody class="divide-y divide-stone-100 text-stone-700">
          <?php if (empty($logs)): ?>
            <tr>
              <td colspan="6" class="py-12 text-center text-stone-400">
                <i class="fa-solid fa-book-open text-3xl mb-2"></i>
                <p>No manual VIP grants recorded yet.</p>
              </td>
            </tr>
          <?php else: ?>
            <?php foreach ($logs as $log): ?>
              <tr class="hover:bg-amber-50/30 transition">
                <td class="py-3.5 px-4">
                  <div class="font-bold text-stone-900">
                    <a href="/admin/users/view/<?= $log['user_id'] ?>" class="hover:text-maroon-700">
                      <?= htmlspecialchars($log['first_name'] . ' ' . $log['last_name']) ?>
                    </a>
                  </div>
                  <div class="text-[11px] text-stone-400 font-mono"><?= htmlspecialchars($log['matrimony_id']) ?></div>
                </td>
                <td class="py-3.5 px-4">
                  <span class="inline-flex items-center px-2 py-0.5 rounded-full text-[10px] font-bold bg-amber-100 text-amber-900 border border-amber-300">
                    <i class="fa-solid fa-crown mr-1 text-amber-600"></i> <?= htmlspecialchars($log['plan_title']) ?>
                  </span>
                </td>
                <td class="py-3.5 px-4">
                  <div class="text-stone-800 font-medium"><?= date('d M Y', strtotime($log['starts_at'])) ?> &rarr; <?= date('d M Y', strtotime($log['expires_at'])) ?></div>
                  <div class="text-[10px] text-stone-400 font-mono"><?= (int)$log['contacts_viewed_count'] ?> contacts consumed</div>
                </td>
                <td class="py-3.5 px-4 text-stone-600 italic">
                  <?= htmlspecialchars($log['grant_notes'] ?: 'Complimentary Launch Access') ?>
                </td>
                <td class="py-3.5 px-4 font-mono text-[11px] text-stone-500">
                  <?= htmlspecialchars($log['admin_email'] ?? 'System / Launch Engine') ?>
                </td>
                <td class="py-3.5 px-4 text-stone-400">
                  <?= date('d M Y, h:i A', strtotime($log['created_at'])) ?>
                </td>
              </tr>
            <?php endforeach; ?>
          <?php endif; ?>
        </tbody>
      </table>
    </div>
  </div>

</div>
