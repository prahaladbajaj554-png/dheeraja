<div class="space-y-6">
  
  <!-- Page Header -->
  <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4">
    <div>
      <h2 class="text-2xl font-cinzel font-bold text-maroon-800">Master Security Audit Trail</h2>
      <p class="text-xs text-stone-500 mt-0.5">Immutable record of every administrative login, profile edit, VIP grant, and security action</p>
    </div>
    <div class="flex items-center space-x-2">
      <span class="px-3 py-1 rounded-full text-xs font-bold bg-stone-100 text-stone-700">
        <?= number_format($total) ?> Total Security Events Logged
      </span>
    </div>
  </div>

  <!-- Filter Toolbar -->
  <div class="glass-card p-4 rounded-2xl">
    <form action="/admin/security/audit-logs" method="GET" class="grid grid-cols-1 sm:grid-cols-3 gap-3">
      <div>
        <input type="text" name="search" value="<?= htmlspecialchars($search) ?>" placeholder="Search by IP, Admin, or details..." class="w-full px-3 py-2 bg-stone-50 border border-stone-200 rounded-xl text-xs focus:border-gold-400">
      </div>
      <div>
        <select name="action" class="w-full px-3 py-2 bg-stone-50 border border-stone-200 rounded-xl text-xs focus:border-gold-400 font-mono">
          <option value="">All Action Types</option>
          <?php foreach ($actions as $act): ?>
            <option value="<?= htmlspecialchars($act) ?>" <?= $selectedAction === $act ? 'selected' : '' ?>><?= htmlspecialchars($act) ?></option>
          <?php endforeach; ?>
        </select>
      </div>
      <div class="flex items-center space-x-2">
        <button type="submit" class="btn-royal-maroon w-full py-2 rounded-xl text-xs font-semibold">Filter Logs</button>
        <a href="/admin/security/audit-logs" class="px-3 py-2 rounded-xl bg-stone-100 hover:bg-stone-200 text-stone-600 text-xs">Reset</a>
      </div>
    </form>
  </div>

  <!-- Audit Table -->
  <div class="glass-card rounded-2xl overflow-hidden shadow-sm">
    <div class="overflow-x-auto">
      <table class="w-full text-left border-collapse text-xs">
        <thead class="bg-stone-50 border-b border-stone-200 text-stone-500 uppercase tracking-wider text-[11px]">
          <tr>
            <th class="py-3 px-4 font-semibold">Event / Action</th>
            <th class="py-3 px-4 font-semibold">Administrator</th>
            <th class="py-3 px-4 font-semibold">Target Resource</th>
            <th class="py-3 px-4 font-semibold">Event Payload / Details</th>
            <th class="py-3 px-4 font-semibold">IP Address</th>
            <th class="py-3 px-4 font-semibold text-right">Timestamp</th>
          </tr>
        </thead>
        <tbody class="divide-y divide-stone-100 text-stone-700">
          <?php if (empty($logs)): ?>
            <tr>
              <td colspan="6" class="py-12 text-center text-stone-400">No audit records found.</td>
            </tr>
          <?php else: ?>
            <?php foreach ($logs as $log): ?>
              <tr class="hover:bg-amber-50/20 transition font-mono">
                <td class="py-3 px-4">
                  <span class="px-2 py-0.5 rounded text-[10px] font-bold <?= strpos($log['action'], 'GRANT') !== false ? 'bg-amber-100 text-amber-900 border border-amber-300' : (strpos($log['action'], 'DELETE') !== false || strpos($log['action'], 'BAN') !== false ? 'bg-red-100 text-red-900 border border-red-300' : 'bg-stone-100 text-stone-800') ?>">
                    <?= htmlspecialchars($log['action']) ?>
                  </span>
                </td>
                <td class="py-3 px-4 text-stone-800 font-sans">
                  <div class="font-bold text-xs"><?= htmlspecialchars($log['admin_email']) ?></div>
                  <div class="text-[10px] text-stone-400"><?= htmlspecialchars(($log['first_name'] ?? 'Admin') . ' ' . ($log['last_name'] ?? '')) ?></div>
                </td>
                <td class="py-3 px-4 text-stone-600">
                  <?= htmlspecialchars($log['target_entity']) ?> <?= $log['target_id'] ? '#' . $log['target_id'] : '' ?>
                </td>
                <td class="py-3 px-4 text-[11px] text-stone-500 max-w-xs truncate">
                  <?= htmlspecialchars($log['details_json'] ?? '-') ?>
                </td>
                <td class="py-3 px-4 text-stone-600 font-bold"><?= htmlspecialchars($log['ip_address']) ?></td>
                <td class="py-3 px-4 text-right text-stone-400 font-sans text-[11px]">
                  <?= date('d M Y, h:i:s A', strtotime($log['created_at'])) ?>
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
        <div>Showing Page <?= $page ?> of <?= $totalPages ?></div>
        <div class="flex items-center space-x-1">
          <?php if ($page > 1): ?>
            <a href="?page=<?= $page - 1 ?>&action=<?= urlencode($selectedAction) ?>&search=<?= urlencode($search) ?>" class="px-2.5 py-1 rounded bg-white border border-stone-200">&larr; Prev</a>
          <?php endif; ?>
          <span class="px-3 py-1 font-bold text-maroon-800 bg-white border border-gold-400 rounded"><?= $page ?></span>
          <?php if ($page < $totalPages): ?>
            <a href="?page=<?= $page + 1 ?>&action=<?= urlencode($selectedAction) ?>&search=<?= urlencode($search) ?>" class="px-2.5 py-1 rounded bg-white border border-stone-200">Next &rarr;</a>
          <?php endif; ?>
        </div>
      </div>
    <?php endif; ?>

  </div>

</div>
