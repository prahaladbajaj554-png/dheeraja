<div class="space-y-6">

  <!-- Header & Flash Messages -->
  <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4">
    <div>
      <h2 class="font-cinzel text-xl sm:text-2xl font-extrabold text-stone-900 tracking-wider flex items-center space-x-2">
        <span>ऑनलाइन पेमेंट्स एवं वित्तीय लेजर (Payment Transactions)</span>
        <span class="text-xs bg-emerald-100 text-emerald-800 font-sans font-bold px-2 py-0.5 rounded-full">Live Gateway</span>
      </h2>
      <p class="text-xs text-stone-500 mt-1">Razorpay, UPI QR एवं कार्ड द्वारा प्राप्त सभी ऑनलाइन भुगतानों का लेखा-जोखा</p>
    </div>
    <div class="flex items-center space-x-2">
      <a href="/admin/settings/api" class="px-3.5 py-2 rounded-xl bg-white border border-stone-200 text-stone-700 hover:bg-stone-50 text-xs font-bold shadow-xs flex items-center space-x-1.5 transition">
        <i class="fa-solid fa-gear text-stone-500"></i>
        <span>गेटवे सेटिंग्स (API Keys)</span>
      </a>
      <a href="/membership" target="_blank" class="px-3.5 py-2 rounded-xl bg-[#064E3B] hover:bg-[#055F46] text-white text-xs font-bold shadow-md flex items-center space-x-1.5 transition">
        <i class="fa-solid fa-arrow-up-right-from-square text-xs text-amber-300"></i>
        <span>सदस्यता पेज देखें</span>
      </a>
    </div>
  </div>

  <!-- Revenue Summary Metric Cards -->
  <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4">
    <!-- Card 1: Total Revenue -->
    <div class="bg-white p-5 rounded-2xl border border-stone-200 shadow-xs flex items-center justify-between">
      <div>
        <span class="text-[11px] font-bold text-stone-400 uppercase tracking-wider block">कुल प्राप्त राजस्व (Total Revenue)</span>
        <h3 class="text-2xl font-extrabold text-[#064E3B] font-mono mt-1">₹<?= number_format($stats['total_revenue'] ?? 0, 2) ?></h3>
        <span class="text-[10px] text-emerald-600 font-bold flex items-center mt-1">
          <i class="fa-solid fa-arrow-trend-up mr-1"></i> सफल भुगतानों से
        </span>
      </div>
      <div class="w-12 h-12 rounded-2xl bg-emerald-50 text-emerald-700 flex items-center justify-center text-xl shadow-inner">
        <i class="fa-solid fa-sack-dollar"></i>
      </div>
    </div>

    <!-- Card 2: Today Revenue -->
    <div class="bg-white p-5 rounded-2xl border border-stone-200 shadow-xs flex items-center justify-between">
      <div>
        <span class="text-[11px] font-bold text-stone-400 uppercase tracking-wider block">आज का राजस्व (Today)</span>
        <h3 class="text-2xl font-extrabold text-amber-600 font-mono mt-1">₹<?= number_format($stats['today_revenue'] ?? 0, 2) ?></h3>
        <span class="text-[10px] text-stone-500 font-medium mt-1 block">आज की तारीख में</span>
      </div>
      <div class="w-12 h-12 rounded-2xl bg-amber-50 text-amber-600 flex items-center justify-center text-xl shadow-inner">
        <i class="fa-solid fa-calendar-day"></i>
      </div>
    </div>

    <!-- Card 3: Total Transactions -->
    <div class="bg-white p-5 rounded-2xl border border-stone-200 shadow-xs flex items-center justify-between">
      <div>
        <span class="text-[11px] font-bold text-stone-400 uppercase tracking-wider block">कुल ट्रांजैक्शन संख्या</span>
        <h3 class="text-2xl font-extrabold text-stone-800 font-mono mt-1"><?= (int)($stats['total_count'] ?? 0) ?></h3>
        <span class="text-[10px] text-stone-400 font-medium mt-1 block">ऑल-टाइम प्रयास</span>
      </div>
      <div class="w-12 h-12 rounded-2xl bg-stone-50 text-stone-600 flex items-center justify-center text-xl shadow-inner">
        <i class="fa-solid fa-receipt"></i>
      </div>
    </div>

    <!-- Card 4: Pending / Manual UTRs -->
    <div class="bg-white p-5 rounded-2xl border border-stone-200 shadow-xs flex items-center justify-between">
      <div>
        <span class="text-[11px] font-bold text-stone-400 uppercase tracking-wider block">प्रलंबित (Pending / UTR)</span>
        <h3 class="text-2xl font-extrabold text-rose-600 font-mono mt-1"><?= (int)($stats['pending_count'] ?? 0) ?></h3>
        <span class="text-[10px] text-rose-600 font-bold mt-1 block">सत्यापन अपेक्षित</span>
      </div>
      <div class="w-12 h-12 rounded-2xl bg-rose-50 text-rose-600 flex items-center justify-center text-xl shadow-inner">
        <i class="fa-solid fa-clock-rotate-left"></i>
      </div>
    </div>
  </div>

  <!-- Filter Pills -->
  <div class="flex items-center space-x-2 text-xs">
    <span class="text-stone-500 font-medium">फ़िल्टर:</span>
    <a href="/admin/payments" class="px-3 py-1 rounded-full <?= empty($status) ? 'bg-[#064E3B] text-white font-bold' : 'bg-white text-stone-600 border border-stone-200 hover:bg-stone-50' ?>">
      सभी (All)
    </a>
    <a href="/admin/payments?status=successful" class="px-3 py-1 rounded-full <?= $status === 'successful' ? 'bg-emerald-700 text-white font-bold' : 'bg-white text-stone-600 border border-stone-200 hover:bg-stone-50' ?>">
      सफल (Successful)
    </a>
    <a href="/admin/payments?status=pending" class="px-3 py-1 rounded-full <?= $status === 'pending' ? 'bg-amber-600 text-white font-bold' : 'bg-white text-stone-600 border border-stone-200 hover:bg-stone-50' ?>">
      प्रलंबित (Pending UTR)
    </a>
  </div>

  <!-- Transactions Table -->
  <div class="bg-white rounded-2xl border border-stone-200 shadow-xs overflow-hidden">
    <div class="p-4 border-b border-stone-100 flex items-center justify-between">
      <h3 class="font-bold text-sm text-stone-800 flex items-center space-x-2">
        <i class="fa-solid fa-list-check text-emerald-700"></i>
        <span>लेन-देन सूची (Transactions Ledger)</span>
      </h3>
      <span class="text-xs text-stone-400 font-mono"><?= count($payments) ?> रिकॉर्ड्स</span>
    </div>

    <div class="overflow-x-auto">
      <table class="w-full text-left text-xs">
        <thead class="bg-stone-50 border-b border-stone-200 text-stone-500 uppercase text-[10px] font-bold tracking-wider">
          <tr>
            <th class="py-3 px-4">ट्रांजैक्शन विवरण</th>
            <th class="py-3 px-4">यूजर प्रोफाइल</th>
            <th class="py-3 px-4">प्लान एवं राशि</th>
            <th class="py-3 px-4">गेटवे व माध्यम</th>
            <th class="py-3 px-4">स्थिति (Status)</th>
            <th class="py-3 px-4">दिनांक व समय</th>
            <th class="py-3 px-4 text-right">कार्य (Action)</th>
          </tr>
        </thead>
        <tbody class="divide-y divide-stone-100">
          <?php if (empty($payments)): ?>
            <tr>
              <td colspan="7" class="py-8 text-center text-stone-400">
                <i class="fa-solid fa-receipt text-3xl mb-2 text-stone-300"></i>
                <p>कोई पेमेंट रिकॉर्ड नहीं मिला।</p>
              </td>
            </tr>
          <?php else: ?>
            <?php foreach ($payments as $p): ?>
              <tr class="hover:bg-amber-50/40 transition">
                <td class="py-3 px-4 font-mono">
                  <div class="font-bold text-stone-900"><?= htmlspecialchars($p['transaction_id']) ?></div>
                  <div class="text-[10px] text-stone-400"><?= htmlspecialchars($p['order_id'] ?? 'N/A') ?></div>
                  <?php if (!empty($p['utr_number'])): ?>
                    <span class="text-[9.5px] bg-purple-100 text-purple-800 px-1.5 py-0.5 rounded font-mono font-bold mt-0.5 inline-block">
                      UTR: <?= htmlspecialchars($p['utr_number']) ?>
                    </span>
                  <?php endif; ?>
                </td>
                <td class="py-3 px-4">
                  <div class="font-bold text-stone-800"><?= htmlspecialchars(($p['first_name'] ?? 'Member') . ' ' . ($p['last_name'] ?? '')) ?></div>
                  <div class="text-[10px] text-emerald-700 font-mono font-bold"><?= htmlspecialchars($p['matrimony_id'] ?? ('User #' . $p['user_id'])) ?></div>
                  <div class="text-[10px] text-stone-400"><?= htmlspecialchars($p['user_phone'] ?? $p['user_email'] ?? '') ?></div>
                </td>
                <td class="py-3 px-4">
                  <span class="font-bold text-stone-900 block"><?= htmlspecialchars($p['plan_title'] ?? ('Plan #' . $p['plan_id'])) ?></span>
                  <span class="text-sm font-extrabold text-[#064E3B] font-mono">₹<?= number_format($p['amount_inr'], 2) ?></span>
                </td>
                <td class="py-3 px-4">
                  <span class="px-2 py-0.5 rounded-full bg-stone-100 text-stone-700 font-bold text-[10px] uppercase inline-block">
                    <?= htmlspecialchars($p['payment_gateway']) ?>
                  </span>
                  <span class="text-[10px] text-stone-400 block mt-0.5 uppercase">
                    <?= htmlspecialchars($p['payment_method']) ?>
                  </span>
                </td>
                <td class="py-3 px-4">
                  <?php if ($p['status'] === 'successful'): ?>
                    <span class="px-2.5 py-1 rounded-full bg-emerald-100 text-emerald-800 font-bold text-[10px] flex items-center space-x-1 w-max">
                      <i class="fa-solid fa-circle-check text-emerald-600"></i>
                      <span>सफल (Paid)</span>
                    </span>
                  <?php elseif ($p['status'] === 'pending'): ?>
                    <span class="px-2.5 py-1 rounded-full bg-amber-100 text-amber-800 font-bold text-[10px] flex items-center space-x-1 w-max">
                      <i class="fa-solid fa-clock text-amber-600"></i>
                      <span>प्रलंबित (Pending)</span>
                    </span>
                  <?php else: ?>
                    <span class="px-2.5 py-1 rounded-full bg-rose-100 text-rose-800 font-bold text-[10px]">
                      <?= htmlspecialchars($p['status']) ?>
                    </span>
                  <?php endif; ?>
                </td>
                <td class="py-3 px-4 text-stone-500 font-mono text-[11px]">
                  <?= date('d M Y, h:i A', strtotime($p['created_at'])) ?>
                </td>
                <td class="py-3 px-4 text-right">
                  <?php if ($p['status'] === 'pending'): ?>
                    <form method="POST" action="/admin/payments/approve-utr/<?= $p['id'] ?>" onsubmit="return confirm('क्या आप इस भुगतान को सत्यापित करके VIP सब्सक्रिप्शन सक्रिय करना चाहते हैं?');">
                      <button type="submit" class="px-2.5 py-1 rounded-lg bg-emerald-700 hover:bg-emerald-800 text-white font-bold text-[10.5px] shadow-xs">
                        स्वीकारें (Approve)
                      </button>
                    </form>
                  <?php else: ?>
                    <span class="text-stone-300 text-xs">सत्यापित</span>
                  <?php endif; ?>
                </td>
              </tr>
            <?php endforeach; ?>
          <?php endif; ?>
        </tbody>
      </table>
    </div>
  </div>

</div>
