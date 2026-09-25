<div class="max-w-5xl mx-auto space-y-6">
  
  <!-- Breadcrumb -->
  <div class="flex items-center justify-between">
    <div class="flex items-center space-x-2 text-xs text-stone-500">
      <a href="/admin/kyc" class="hover:text-maroon-700">KYC Queue</a>
      <span>/</span>
      <span class="text-maroon-800 font-semibold">Review ID: <?= htmlspecialchars($doc['matrimony_id']) ?></span>
    </div>
    <a href="/admin/kyc" class="px-3 py-1.5 rounded-lg bg-stone-100 hover:bg-stone-200 text-stone-700 text-xs">
      &larr; Back to Queue
    </a>
  </div>

  <!-- Review Header Banner -->
  <div class="glass-card p-6 rounded-2xl flex flex-col sm:flex-row sm:items-center justify-between gap-4">
    <div>
      <span class="px-2.5 py-0.5 rounded-full text-[10px] font-bold bg-amber-100 text-amber-900 border border-amber-300 uppercase">
        Verification Pending
      </span>
      <h2 class="text-xl font-cinzel font-bold text-stone-900 mt-1">
        <?= htmlspecialchars($doc['first_name'] . ' ' . $doc['last_name']) ?> (<?= htmlspecialchars($doc['matrimony_id']) ?>)
      </h2>
      <p class="text-xs text-stone-500 mt-0.5">
        Submitted Document: <strong class="text-maroon-800 uppercase"><?= htmlspecialchars($doc['doc_type']) ?></strong> (Masked #: <?= htmlspecialchars($doc['doc_number_masked']) ?>)
      </p>
    </div>

    <!-- Quick Link to Full Dossier -->
    <a href="/admin/users/view/<?= $doc['user_id'] ?>" target="_blank" class="px-3.5 py-2 rounded-xl bg-stone-100 hover:bg-stone-200 text-stone-700 text-xs font-semibold flex items-center space-x-1.5">
      <i class="fa-solid fa-arrow-up-right-from-square"></i>
      <span>Open Profile Dossier</span>
    </a>
  </div>

  <!-- Split Screen Review Grid -->
  <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
    
    <!-- Left Screen: Submitted ID Document Preview -->
    <div class="glass-card p-6 rounded-2xl space-y-4">
      <h3 class="font-cinzel font-bold text-sm text-maroon-800 border-b border-stone-200 pb-2 flex items-center">
        <i class="fa-solid fa-file-image text-gold-500 mr-2"></i> Uploaded Document Proof
      </h3>

      <!-- Document Frame / Simulation -->
      <div class="p-6 rounded-2xl bg-stone-900 border border-stone-700 text-center text-pearl space-y-4 shadow-inner">
        <div class="inline-flex items-center justify-center w-16 h-16 rounded-full bg-gold-500/20 border border-gold-400 text-gold-400 text-2xl">
          <i class="fa-solid fa-id-card"></i>
        </div>
        
        <div>
          <div class="text-sm font-bold text-gold-300 uppercase tracking-wider"><?= htmlspecialchars($doc['doc_type']) ?> PROOF</div>
          <div class="text-xs text-stone-400 font-mono mt-1">Doc Number: <?= htmlspecialchars($doc['doc_number_masked']) ?></div>
        </div>

        <div class="p-4 rounded-xl bg-stone-800/80 border border-stone-600 text-left text-xs space-y-2">
          <div class="flex justify-between"><span class="text-stone-400">File Name:</span> <span class="font-mono text-stone-200"><?= basename($doc['file_front']) ?></span></div>
          <div class="flex justify-between"><span class="text-stone-400">MIME Integrity:</span> <span class="text-emerald-400 font-semibold">image/jpeg (Validated)</span></div>
          <div class="flex justify-between"><span class="text-stone-400">Uploaded At:</span> <span class="text-stone-300"><?= $doc['created_at'] ?></span></div>
        </div>

        <div class="text-[11px] text-stone-400">
          <i class="fa-solid fa-lock text-gold-500 mr-1"></i> Document proof encrypted and restricted to compliance administrators only.
        </div>
      </div>
    </div>

    <!-- Right Screen: Profile Comparison Data & Verification Actions -->
    <div class="space-y-6">
      
      <!-- Profile Comparison Card -->
      <div class="glass-card p-6 rounded-2xl space-y-4">
        <h3 class="font-cinzel font-bold text-sm text-maroon-800 border-b border-stone-200 pb-2 flex items-center">
          <i class="fa-solid fa-check-double text-gold-500 mr-2"></i> Profile Data to Verify Against ID
        </h3>

        <div class="space-y-3 text-xs">
          <div class="p-2.5 rounded-lg bg-stone-50 border border-stone-200 flex justify-between items-center">
            <span class="text-stone-500">Registered Name:</span>
            <strong class="text-stone-900 font-bold"><?= htmlspecialchars($doc['first_name'] . ' ' . $doc['last_name']) ?></strong>
          </div>
          <div class="p-2.5 rounded-lg bg-stone-50 border border-stone-200 flex justify-between items-center">
            <span class="text-stone-500">Date of Birth:</span>
            <strong class="text-stone-900 font-bold"><?= $doc['dob'] ?></strong>
          </div>
          <div class="p-2.5 rounded-lg bg-stone-50 border border-stone-200 flex justify-between items-center">
            <span class="text-stone-500">Gender:</span>
            <strong class="text-stone-900 font-bold capitalize"><?= $doc['gender'] ?></strong>
          </div>
          <div class="p-2.5 rounded-lg bg-stone-50 border border-stone-200 flex justify-between items-center">
            <span class="text-stone-500">Location:</span>
            <strong class="text-stone-900 font-bold"><?= htmlspecialchars($doc['current_city'] . ', ' . $doc['current_state']) ?></strong>
          </div>
          <div class="p-2.5 rounded-lg bg-stone-50 border border-stone-200 flex justify-between items-center">
            <span class="text-stone-500">Verified Contact:</span>
            <strong class="text-stone-900 font-mono"><?= htmlspecialchars($doc['phone']) ?></strong>
          </div>
        </div>
      </div>

      <!-- Action Panel: Approve OR Reject -->
      <div class="glass-card p-6 rounded-2xl space-y-4">
        <h4 class="font-cinzel font-bold text-xs uppercase text-maroon-800 tracking-wider">
          Compliance Decision
        </h4>

        <!-- 1. Approve Form -->
        <form action="/admin/kyc/approve/<?= $doc['id'] ?>" method="POST">
          <?= csrf_field() ?>
          <button type="submit" class="w-full py-3 px-4 rounded-xl text-xs font-bold bg-emerald-600 hover:bg-emerald-700 text-white uppercase tracking-wider shadow transition flex items-center justify-center space-x-2">
            <i class="fa-solid fa-shield-check text-sm"></i>
            <span>Approve & Award Verified Badge</span>
          </button>
        </form>

        <div class="relative flex py-1 items-center">
          <div class="flex-grow border-t border-stone-200"></div>
          <span class="flex-shrink mx-3 text-stone-400 text-[10px] uppercase tracking-wider">or reject submission</span>
          <div class="flex-grow border-t border-stone-200"></div>
        </div>

        <!-- 2. Reject Form -->
        <form action="/admin/kyc/reject/<?= $doc['id'] ?>" method="POST" class="space-y-3">
          <?= csrf_field() ?>
          <div>
            <label class="block text-[11px] font-semibold text-stone-600 mb-1">Standard Rejection Reason</label>
            <select name="rejection_reason" class="w-full px-3 py-2 bg-stone-50 border border-stone-200 rounded-xl text-xs focus:border-red-400">
              <option value="Document photo is blurry or unreadable.">Document photo is blurry or unreadable.</option>
              <option value="Name on ID card does not match profile name.">Name on ID does not match profile name.</option>
              <option value="Date of birth does not match profile date of birth.">Date of birth does not match profile.</option>
              <option value="Expired government document submitted.">Expired government document submitted.</option>
              <option value="Incomplete document: both front and back sides required.">Both front and back sides required.</option>
            </select>
          </div>
          <button type="submit" class="w-full py-2.5 px-4 rounded-xl text-xs font-bold bg-red-100 hover:bg-red-200 text-red-800 border border-red-300 transition">
            <i class="fa-solid fa-xmark mr-1"></i> Reject & Request Resubmission
          </button>
        </form>

      </div>

    </div>

  </div>

</div>
