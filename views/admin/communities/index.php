<div class="space-y-6">
  
  <!-- Page Header -->
  <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4">
    <div>
      <h2 class="text-2xl font-cinzel font-bold text-maroon-800">Matrimony WhatsApp Communities</h2>
      <p class="text-xs text-stone-500 mt-0.5">Manage community WhatsApp groups displayed in the mobile app for brides, grooms and families</p>
    </div>
    <a href="/admin/communities/add" class="btn-royal-gold px-4 py-2.5 rounded-xl text-xs flex items-center space-x-2">
      <i class="fa-solid fa-plus"></i>
      <span>Add WhatsApp Group</span>
    </a>
  </div>

  <div class="glass-card rounded-2xl overflow-hidden shadow-sm">
    <div class="overflow-x-auto">
      <table class="w-full text-left border-collapse text-xs">
        <thead class="bg-stone-50 border-b border-stone-200 text-stone-500 uppercase tracking-wider text-[11px]">
          <tr>
            <th class="py-3 px-4 font-semibold">Community Group Title</th>
            <th class="py-3 px-4 font-semibold">Caste & Region</th>
            <th class="py-3 px-4 font-semibold">Members</th>
            <th class="py-3 px-4 font-semibold">WhatsApp Invite Link</th>
            <th class="py-3 px-4 font-semibold">Status</th>
            <th class="py-3 px-4 font-semibold text-right">Actions</th>
          </tr>
        </thead>
        <tbody class="divide-y divide-stone-100 text-stone-700">
          <?php if (empty($communities)): ?>
            <tr>
              <td colspan="6" class="py-8 text-center text-stone-400">No WhatsApp communities added yet.</td>
            </tr>
          <?php else: ?>
            <?php foreach ($communities as $c): ?>
              <tr class="hover:bg-amber-50/20 transition">
                <td class="py-3.5 px-4">
                  <div class="font-bold text-stone-900 text-sm flex items-center">
                    <span class="w-6 h-6 rounded-full bg-emerald-100 text-emerald-700 flex items-center justify-center mr-2 text-xs">
                      <i class="fa-brands fa-whatsapp"></i>
                    </span>
                    <?= htmlspecialchars($c['title']) ?>
                  </div>
                  <div class="text-[11px] text-stone-400 mt-0.5"><?= htmlspecialchars($c['description'] ?: 'Open matrimony community') ?></div>
                </td>
                <td class="py-3.5 px-4">
                  <span class="font-semibold text-stone-800"><?= htmlspecialchars($c['caste_group']) ?></span>
                  <div class="text-[10px] text-stone-400"><?= htmlspecialchars($c['region']) ?></div>
                </td>
                <td class="py-3.5 px-4 font-bold text-emerald-700">
                  <i class="fa-solid fa-users text-xs mr-1 text-emerald-500"></i> <?= number_format($c['member_count']) ?>+
                </td>
                <td class="py-3.5 px-4">
                  <a href="<?= htmlspecialchars($c['whatsapp_url']) ?>" target="_blank" class="text-maroon-700 hover:underline font-mono text-[11px] truncate max-w-xs block">
                    <?= htmlspecialchars($c['whatsapp_url']) ?>
                  </a>
                </td>
                <td class="py-3.5 px-4">
                  <span class="px-2 py-0.5 rounded-full text-[10px] font-bold <?= $c['is_active'] ? 'bg-emerald-100 text-emerald-800' : 'bg-stone-200 text-stone-600' ?>">
                    <?= $c['is_active'] ? 'Active in App' : 'Hidden' ?>
                  </span>
                </td>
                <td class="py-3.5 px-4 text-right space-x-2">
                  <a href="/admin/communities/edit/<?= $c['id'] ?>" class="p-1.5 rounded-lg bg-stone-100 hover:bg-stone-200 text-stone-700 transition" title="Edit">
                    <i class="fa-solid fa-pen-to-square"></i>
                  </a>
                  <form action="/admin/communities/delete/<?= $c['id'] ?>" method="POST" onsubmit="return confirm('Delete this WhatsApp community?')" class="inline">
                    <?= csrf_field() ?>
                    <button type="submit" class="p-1.5 rounded-lg bg-red-50 hover:bg-red-100 text-red-700 transition" title="Delete">
                      <i class="fa-solid fa-trash-can"></i>
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

</div>
