<!DOCTYPE html>
<html lang="hi">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no, viewport-fit=cover">
  <title>DHEERAJA™ ROYAL MATRIMONY | Activity & Matches Tracker (तालिका)</title>
  
  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@600;700;800;900&family=Cinzel+Decorative:wght@700;900&family=Plus+Jakarta+Sans:wght@400;500;600;700;800&family=Rozha+One&family=Yatra+One&family=Noto+Serif+Devanagari:wght@400;600;700;800&family=Noto+Sans+Devanagari:wght@400;500;600;700;800&display=swap" rel="stylesheet">
  
  <!-- FontAwesome Icons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
  
  <!-- Tailwind CSS -->
  <script src="https://cdn.tailwindcss.com"></script>
  
  <!-- html2pdf Bundle for 1-Click PDF Download -->
  <script src="/assets/js/html2pdf.bundle.min.js"></script>
  <script>
    tailwind.config = {
      theme: {
        extend: {
          colors: {
            maroon: { 700: '#6B1D2F', 800: '#521321', 900: '#420A16', 950: '#2A050D' },
            gold: { 300: '#F3D883', 400: '#E6C254', 500: '#D4AF37', 600: '#B89326', 700: '#9A6A24' },
            emerald: { 500: '#10B981', 600: '#059669', 700: '#047857', 800: '#065F46', 900: '#064E3B', 950: '#033626' },
          },
          fontFamily: {
            cinzel: ['Cinzel', 'serif'],
            sans: ['Plus Jakarta Sans', 'Noto Sans Devanagari', 'sans-serif'],
          }
        }
      }
    }
  </script>

  <!-- Self-Contained Styles -->
  <style>
    * {
      -webkit-tap-highlight-color: transparent;
      box-sizing: border-box;
    }
    body {
      background-color: #EBF3EA;
      background-image: radial-gradient(rgba(5, 150, 105, 0.12) 1.5px, transparent 1.5px), radial-gradient(rgba(212, 175, 55, 0.12) 1.5px, transparent 1.5px);
      background-size: 28px 28px;
      background-position: 0 0, 14px 14px;
      font-family: 'Plus Jakarta Sans', 'Noto Sans Devanagari', sans-serif;
      margin: 0;
      padding: 0;
      min-height: 100vh;
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: flex-start;
    }
    /* Mobile Frame Shell */
    #matchesShell {
      width: 100%;
      max-width: 440px;
      min-height: 100vh;
      background-color: #F6F8F5;
      position: relative;
      box-shadow: 0 10px 40px rgba(6, 78, 59, 0.15), 0 0 0 1px rgba(6, 78, 59, 0.08);
      display: flex;
      flex-direction: column;
      overflow-x: hidden;
      transition: max-width 0.3s cubic-bezier(0.4, 0, 0.2, 1);
    }
    /* Filter Pill Buttons */
    .filter-pill {
      background: #FFFFFF;
      border: 1px solid #D5E0D8;
      color: #1F2937;
      border-radius: 9999px;
      padding: 6px 4px;
      font-size: 10px;
      font-weight: 700;
      line-height: 1.15;
      text-align: center;
      transition: all 0.2s cubic-bezier(0.4, 0, 0.2, 1);
      cursor: pointer;
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      min-height: 38px;
      box-shadow: 0 1px 2px rgba(0,0,0,0.03);
      user-select: none;
    }
    .filter-pill:hover {
      background: #F0FDF4;
      border-color: #064E3B;
      color: #064E3B;
      transform: translateY(-1px);
    }
    .filter-pill.active {
      background: #064E3B !important;
      color: #FFFFFF !important;
      border-color: #064E3B !important;
      box-shadow: 0 3px 8px rgba(6, 78, 59, 0.25);
    }
    .filter-pill.active span.sub-text {
      color: #D1FAE5 !important;
    }
    /* ==============================================================
       SAMAJ EXCLUSIVE ACTION & FILTER BUTTONS ("बटन लगाकर")
       ============================================================== */
    .samaj-filter-btn {
      background: rgba(255, 255, 255, 0.08);
      border: 1px solid rgba(255, 255, 255, 0.2);
      color: #F8FAFC;
      border-radius: 12px;
      padding: 6px 4px;
      font-size: 10px;
      font-weight: 700;
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      gap: 2px;
      text-align: center;
      cursor: pointer;
      transition: all 0.18s ease;
      line-height: 1.15;
      box-shadow: 0 1px 3px rgba(0, 0, 0, 0.2);
      user-select: none;
    }
    .samaj-filter-btn:hover {
      background: rgba(255, 255, 255, 0.18);
      border-color: rgba(212, 175, 55, 0.6);
      color: #FFFFFF;
      transform: translateY(-1px);
    }
    .samaj-filter-btn.active {
      background: linear-gradient(135deg, #F59E0B, #D4AF37) !important;
      border-color: #FEF08A !important;
      color: #064E3B !important;
      font-weight: 800;
      box-shadow: 0 3px 10px rgba(212, 175, 55, 0.4), inset 0 1px 0 rgba(255, 255, 255, 0.6) !important;
    }
    .samaj-filter-btn .sub-badge {
      font-size: 8.5px;
      font-weight: 800;
      opacity: 0.95;
      margin-top: 1px;
    }
    .samaj-filter-btn.active .sub-badge {
      color: #022C22 !important;
      font-weight: 900;
    }
    /* ==============================================================
       INSTANT BIODATA ID & SEARCH AUTO-SUGGEST & HIGHLIGHT PULSE
       ============================================================== */
    @keyframes goldPulseHighlight {
      0% {
        box-shadow: 0 0 0 0 rgba(212, 175, 55, 0.85), 0 4px 12px rgba(0,0,0,0.1);
        transform: scale(1);
      }
      50% {
        box-shadow: 0 0 0 10px rgba(212, 175, 55, 0.4), 0 12px 28px rgba(212, 175, 55, 0.35);
        transform: scale(1.02);
      }
      100% {
        box-shadow: 0 0 0 0 rgba(212, 175, 55, 0), 0 4px 12px rgba(0,0,0,0.1);
        transform: scale(1);
      }
    }
    .highlight-card-pulse {
      animation: goldPulseHighlight 1.6s ease-in-out 2 !important;
      border-color: #D4AF37 !important;
      border-width: 2.5px !important;
      background: #FFFDF7 !important;
    }
    .suggest-item {
      padding: 8px 10px;
      cursor: pointer;
      display: flex;
      align-items: center;
      justify-content: space-between;
      transition: all 0.15s ease;
    }
    .suggest-item:hover, .suggest-item.active {
      background: #FEF3C7;
    }
    /* ==============================================================
       ACTION BUTTONS IN CANDIDATE CARD - 3D RAISED TACTILE BUTTONS
       ============================================================== */
    .card-btn {
      font-size: 9.5px;
      font-weight: 800;
      padding: 7px 4px;
      border-radius: 10px;
      display: flex;
      align-items: center;
      justify-content: center;
      gap: 3.5px;
      transition: all 0.18s cubic-bezier(0.4, 0, 0.2, 1);
      cursor: pointer;
      user-select: none;
      white-space: nowrap;
      flex: 1;
      position: relative;
      text-shadow: 0 1px 1px rgba(0, 0, 0, 0.25);
      border: 1px solid transparent;
      box-shadow: 0 3px 6px rgba(0, 0, 0, 0.16), inset 0 1px 0 rgba(255, 255, 255, 0.35);
    }
    .card-btn:hover {
      transform: translateY(-2px);
      box-shadow: 0 5px 10px rgba(0, 0, 0, 0.22), inset 0 1px 0 rgba(255, 255, 255, 0.45);
      filter: brightness(1.08);
    }
    .card-btn:active {
      transform: translateY(1px) scale(0.97);
      box-shadow: 0 1px 2px rgba(0, 0, 0, 0.25), inset 0 1px 2px rgba(0, 0, 0, 0.2);
    }

    /* 1. Send Interest (Rose/Crimson 3D Button) */
    .btn-interest {
      background: linear-gradient(145deg, #FF456B 0%, #E11D48 60%, #BE123C 100%);
      border-color: #9F1239;
      color: #FFFFFF !important;
      box-shadow: 0 3px 7px rgba(225, 29, 72, 0.35), inset 0 1px 0 rgba(255, 255, 255, 0.4);
    }
    .btn-interest:hover {
      background: linear-gradient(145deg, #FF5C7E 0%, #F43F5E 60%, #E11D48 100%);
    }
    .btn-interest.sent {
      background: linear-gradient(145deg, #10B981 0%, #059669 60%, #047857 100%) !important;
      border-color: #065F46 !important;
      color: #FFFFFF !important;
      box-shadow: 0 3px 7px rgba(5, 150, 105, 0.35), inset 0 1px 0 rgba(255, 255, 255, 0.4) !important;
    }

    /* 2. Chat (Royal Emerald 3D Button) */
    .btn-chat {
      background: linear-gradient(145deg, #10B981 0%, #064E3B 65%, #022C1E 100%);
      border-color: #065F46;
      color: #FFFFFF !important;
      box-shadow: 0 3px 7px rgba(6, 78, 59, 0.38), inset 0 1px 0 rgba(255, 255, 255, 0.3);
    }
    .btn-chat:hover {
      background: linear-gradient(145deg, #34D399 0%, #059669 65%, #064E3B 100%);
    }

    /* 3. Kundali Milan (Mystic Violet 3D Button) */
    .btn-kundali {
      background: linear-gradient(145deg, #A855F7 0%, #7C3AED 60%, #581C87 100%);
      border-color: #4C1D95;
      color: #FFFFFF !important;
      box-shadow: 0 3px 7px rgba(124, 58, 237, 0.38), inset 0 1px 0 rgba(255, 255, 255, 0.35);
    }
    .btn-kundali:hover {
      background: linear-gradient(145deg, #C084FC 0%, #9333EA 60%, #6D28D9 100%);
    }

    /* 4. WhatsApp / Contact VIP (3D WhatsApp Emerald Green Button) */
    .btn-contact {
      background: linear-gradient(145deg, #25D366 0%, #16A34A 60%, #065F46 100%);
      border-color: #064E3B;
      color: #FFFFFF !important;
      box-shadow: 0 3px 7px rgba(37, 211, 102, 0.38), inset 0 1px 0 rgba(255, 255, 255, 0.4);
    }
    .btn-contact:hover {
      background: linear-gradient(145deg, #4ADE80 0%, #22C55E 60%, #15803D 100%);
    }

    /* 5. Skip (Steel Slate 3D Button) */
    .btn-skip {
      background: linear-gradient(145deg, #94A3B8 0%, #64748B 60%, #334155 100%);
      border-color: #1E293B;
      color: #FFFFFF !important;
      box-shadow: 0 3px 6px rgba(71, 85, 105, 0.3), inset 0 1px 0 rgba(255, 255, 255, 0.3);
    }
    .btn-skip:hover {
      background: linear-gradient(145deg, #CBD5E1 0%, #94A3B8 60%, #475569 100%);
    }

    /* ==============================================================
       BOTTOM DOCK 5 NAVIGATION BUTTONS (Real 3D Pushable Capsules)
       ============================================================== */
    .dock-nav-btn {
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      padding: 6px 4px;
      min-height: 48px;
      border-radius: 14px;
      background: linear-gradient(180deg, rgba(255, 255, 255, 0.16) 0%, rgba(255, 255, 255, 0.05) 100%);
      border: 1.5px solid rgba(255, 255, 255, 0.22);
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3), inset 0 1px 0 rgba(255, 255, 255, 0.25);
      color: #E2E8F0;
      font-weight: 700;
      transition: all 0.2s cubic-bezier(0.4, 0, 0.2, 1);
      cursor: pointer;
      user-select: none;
      text-decoration: none;
      position: relative;
      flex: 1;
      max-width: 80px;
    }
    .dock-nav-btn:hover {
      background: linear-gradient(180deg, rgba(255, 255, 255, 0.25) 0%, rgba(255, 255, 255, 0.08) 100%);
      border-color: rgba(255, 255, 255, 0.4);
      transform: translateY(-2px);
      box-shadow: 0 6px 14px rgba(0, 0, 0, 0.4), inset 0 1px 0 rgba(255, 255, 255, 0.35);
      color: #FFFFFF;
    }
    .dock-nav-btn:active {
      transform: translateY(1px) scale(0.96);
      box-shadow: 0 1px 3px rgba(0, 0, 0, 0.4), inset 0 2px 4px rgba(0, 0, 0, 0.25);
    }
    /* Active Button State (Table / Matches) - Elevated Golden 3D Button */
    .dock-nav-btn.active {
      background: linear-gradient(135deg, #FFF1C5 0%, #E6C254 35%, #C99718 70%, #996D0A 100%) !important;
      border: 1.5px solid #FFFBEB !important;
      color: #064E3B !important;
      box-shadow: 0 5px 16px rgba(212, 175, 55, 0.6), inset 0 1px 0 rgba(255, 255, 255, 0.8), inset 0 -2px 0 rgba(153, 109, 10, 0.5) !important;
      transform: translateY(-3px);
      font-weight: 800 !important;
    }
    .dock-nav-btn.active i {
      color: #064E3B !important;
      filter: drop-shadow(0 1px 0 rgba(255, 255, 255, 0.4));
    }
    .dock-nav-btn.active .dock-label {
      color: #064E3B !important;
      font-weight: 900 !important;
    }
    .dock-badge {
      position: absolute;
      top: -5px;
      right: -6px;
      background: linear-gradient(135deg, #EF4444 0%, #DC2626 100%);
      color: #FFFFFF;
      border-radius: 9999px;
      font-size: 8.5px;
      font-weight: 900;
      min-width: 17px;
      height: 17px;
      padding: 0 3px;
      display: flex;
      align-items: center;
      justify-content: center;
      border: 1.5px solid #064E3B;
      box-shadow: 0 2px 5px rgba(220, 38, 38, 0.5);
    }

    /* Key Features Ribbon Tactile Mini Buttons */
    .ribbon-btn {
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      padding: 4px 6px;
      border-radius: 8px;
      background: #FFFFFF;
      border: 1px solid #E5E7EB;
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.06);
      transition: all 0.15s ease;
      cursor: pointer;
    }
    .ribbon-btn:hover {
      background: #F9FAFB;
      border-color: #D1D5DB;
      transform: translateY(-1px);
      box-shadow: 0 3px 6px rgba(0, 0, 0, 0.1);
    }
    /* ==============================================================
       BEAUTIFUL MOVING ONLINE TICKER (चलती हुई लाइव ऑनलाइन लाइन)
       ============================================================== */
    @keyframes liveTickerScroll {
      0% {
        transform: translate3d(0, 0, 0);
      }
      100% {
        transform: translate3d(-50%, 0, 0);
      }
    }
    .ticker-wrapper {
      mask-image: linear-gradient(to right, transparent 0%, black 4%, black 96%, transparent 100%);
      -webkit-mask-image: linear-gradient(to right, transparent 0%, black 4%, black 96%, transparent 100%);
    }
    .ticker-track {
      display: inline-flex;
      white-space: nowrap;
      animation: liveTickerScroll 30s linear infinite;
      will-change: transform;
    }
    .ticker-track:hover {
      animation-play-state: paused;
    }
    @keyframes livePulseGlow {
      0% {
        transform: scale(0.92);
        box-shadow: 0 0 0 0 rgba(16, 185, 129, 0.85);
      }
      70% {
        transform: scale(1.06);
        box-shadow: 0 0 0 6px rgba(16, 185, 129, 0);
      }
      100% {
        transform: scale(0.92);
        box-shadow: 0 0 0 0 rgba(16, 185, 129, 0);
      }
    }
    .live-pulse-beacon {
      display: inline-block;
      border-radius: 9999px;
      animation: livePulseGlow 1.8s infinite cubic-bezier(0.45, 0, 0.55, 1);
    }

    /* Modal Backdrop */
    .modal-backdrop {
      opacity: 0;
      pointer-events: none;
      transition: opacity 0.25s ease-out;
    }
    .modal-backdrop.open {
      opacity: 1;
      pointer-events: auto;
    }
    /* Floating Toast */
    .toast-anim {
      transform: translate(-50%, -100px);
      opacity: 0;
      transition: all 0.35s cubic-bezier(0.175, 0.885, 0.32, 1.275);
    }
    .toast-anim.show {
      transform: translate(-50%, 0);
      opacity: 1;
    }
    /* Custom Scrollbar */
    ::-webkit-scrollbar {
      width: 5px;
      height: 5px;
    }
    ::-webkit-scrollbar-track {
      background: #F1F5F2;
    }
    ::-webkit-scrollbar-thumb {
      background: #A7F3D0;
      border-radius: 999px;
    }
    ::-webkit-scrollbar-thumb:hover {
      background: #059669;
    }

    /* ==============================================================
       PHOTO PRIVACY & SECURITY WATERMARK SYSTEM (फोटो सुरक्षा व प्राइवेसी)
       ============================================================== */
    .photo-container-shield {
      position: relative;
      user-select: none;
      -webkit-user-select: none;
      -webkit-touch-callout: none;
    }
    .photo-container-shield img {
      pointer-events: none;
      -webkit-user-drag: none;
    }
    /* Repeating Diagonal Security Watermark Overlay */
    .photo-watermark-overlay {
      position: absolute;
      inset: 0;
      pointer-events: none;
      overflow: hidden;
      z-index: 10;
      display: flex;
      align-items: center;
      justify-content: center;
      background: radial-gradient(circle at center, rgba(255,255,255,0.06) 0%, transparent 80%);
      transition: opacity 0.25s ease;
    }
    .photo-watermark-overlay.disabled {
      display: none !important;
    }
    .photo-watermark-text {
      position: absolute;
      transform: rotate(-32deg);
      white-space: nowrap;
      color: rgba(255, 255, 255, 0.42);
      font-size: 7.5px;
      font-weight: 800;
      letter-spacing: 0.8px;
      text-transform: uppercase;
      text-shadow: 0 1px 2px rgba(0, 0, 0, 0.85), 0 0 1px rgba(0, 0, 0, 0.95);
      user-select: none;
      pointer-events: none;
    }
    .photo-watermark-text.row-top { top: 20%; }
    .photo-watermark-text.row-mid { top: 50%; }
    .photo-watermark-text.row-bot { top: 80%; }

    /* Security Watermark Badge on bottom right of candidate photo */
    .photo-security-pill {
      position: absolute;
      bottom: 2px;
      right: 2px;
      padding: 1px 4px;
      border-radius: 4px;
      background: rgba(6, 78, 59, 0.90);
      backdrop-filter: blur(2px);
      border: 1px solid rgba(212, 175, 55, 0.7);
      color: #FFF2C2;
      font-size: 7.5px;
      font-weight: 800;
      font-family: monospace;
      display: flex;
      align-items: center;
      gap: 2.5px;
      box-shadow: 0 1px 3px rgba(0, 0, 0, 0.45);
      z-index: 12;
      pointer-events: none;
    }

    /* Privacy Blur Shield (फोटो निजी है / केवल अनुरोध पर) */
    .photo-blur-active {
      filter: blur(8px) saturate(0.8);
      transform: scale(1.08);
      transition: filter 0.35s ease, transform 0.35s ease;
    }
    .photo-privacy-guard {
      position: absolute;
      inset: 0;
      background: rgba(15, 23, 42, 0.72);
      backdrop-filter: blur(3px);
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      text-align: center;
      padding: 4px;
      z-index: 15;
      transition: all 0.3s ease;
    }

    /* Royal Golden Ornate Border & Biodata Styles */
    .royal-border-outer {
      padding: 10px;
      background: linear-gradient(135deg, #BF953F 0%, #FCF6BA 25%, #B38728 50%, #FBF5B7 75%, #AA771C 100%);
      box-shadow: 0 0 20px rgba(212, 175, 55, 0.45);
      border-radius: 8px;
    }
    .royal-border-middle {
      padding: 5px;
      background: #064E3B;
      border-radius: 6px;
    }
    .royal-border-inner {
      background: #FFFDF9;
      border: 2px solid #D4AF37;
      padding: 18px 20px;
      position: relative;
      border-radius: 4px;
    }
    .corner-flourish {
      position: absolute;
      width: 36px;
      height: 36px;
      pointer-events: none;
      z-index: 10;
    }
    .corner-tl { top: 4px; left: 4px; }
    .corner-tr { top: 4px; right: 4px; transform: rotate(90deg); }
    .corner-bl { bottom: 4px; left: 4px; transform: rotate(-90deg); }
    .corner-br { bottom: 4px; right: 4px; transform: rotate(180deg); }
    .royal-watermark {
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      width: 280px;
      height: 280px;
      opacity: 0.04;
      background-image: url('/assets/images/dheeraja_dm_logo_icon.png');
      background-size: contain;
      background-repeat: no-repeat;
      background-position: center;
      pointer-events: none;
      z-index: 1;
    }
    .section-banner {
      background: linear-gradient(90deg, #064E3B 0%, #0F684F 50%, #064E3B 100%);
      color: #F8E7A2;
      padding: 4px 10px;
      border-radius: 6px;
      border-left: 4px solid #D4AF37;
      border-right: 4px solid #D4AF37;
      display: flex;
      align-items: center;
      justify-content: space-between;
      margin-bottom: 6px;
    }
    .attr-row {
      display: flex;
      padding: 3.5px 4px;
      border-bottom: 1px dashed #E5D5BA;
      font-size: 11.5px;
      align-items: baseline;
    }
    .attr-row:last-child {
      border-bottom: none;
    }
    .attr-label {
      width: 40%;
      font-weight: 700;
      color: #78350F;
      display: flex;
      align-items: center;
      gap: 5px;
    }
    .attr-sep {
      width: 4%;
      text-align: center;
      color: #92400E;
      font-weight: bold;
    }
    .attr-val {
      width: 56%;
      color: #1F2937;
      font-weight: 700;
    }
    .photo-gold-frame {
      position: relative;
      padding: 3px;
      background: linear-gradient(135deg, #BF953F 0%, #FCF6BA 35%, #B38728 70%, #AA771C 100%);
      border-radius: 14px;
      box-shadow: 0 4px 12px rgba(0,0,0,0.15), 0 0 10px rgba(212, 175, 55, 0.4);
      display: inline-block;
    }
    .photo-gold-frame img {
      width: 120px;
      height: 145px;
      object-fit: cover;
      border-radius: 10px;
      display: block;
      border: 1.5px solid #FFFDF9;
    }
  </style>
</head>
<body class="selection:bg-emerald-200 selection:text-emerald-900 relative">

  <!-- ==================== DESKTOP EMULATION TOOLBAR ==================== -->
  <aside class="hidden sm:flex items-center justify-between w-full max-w-4xl px-6 py-2.5 my-2 bg-white/95 backdrop-blur-md rounded-2xl border border-emerald-300 text-stone-700 text-xs shadow-sm">
    <div class="flex items-center space-x-2">
      <a href="/cover" class="px-2.5 py-1 rounded-lg bg-stone-100 hover:bg-stone-200 font-bold text-stone-700 flex items-center space-x-1 transition mr-1" title="पहला पेज">
        <i class="fa-solid fa-home text-[10px]"></i>
        <span>1. कवर पेज</span>
      </a>
      <a href="/welcome" class="px-2.5 py-1 rounded-lg bg-stone-100 hover:bg-stone-200 font-bold text-stone-700 flex items-center space-x-1 transition mr-1" title="दूसरा पेज">
        <i class="fa-solid fa-door-open text-[10px]"></i>
        <span>2. वेलकम</span>
      </a>
      <a href="/biodata" class="px-2.5 py-1 rounded-lg bg-emerald-50 hover:bg-emerald-100 font-bold text-emerald-900 border border-emerald-300 flex items-center space-x-1 transition mr-2" title="तीसरे पेज पर वापस जाएं">
        <i class="fa-solid fa-arrow-left text-[10px] text-emerald-700"></i>
        <span>3. बायोडाटा फॉर्म</span>
      </a>
      <span class="w-2.5 h-2.5 rounded-full bg-emerald-500 animate-pulse"></span>
      <span class="font-cinzel font-bold text-emerald-900 tracking-wider">DHEERAJA ROYAL MATRIMONY™</span>
      <span class="text-stone-400 font-bold">| 4. तालिका</span>
      <a href="/membership" class="ml-1 px-2 py-0.5 rounded-lg bg-gradient-to-r from-amber-400 to-amber-500 text-maroon-950 font-extrabold text-[11px] transition flex items-center space-x-1 shadow-xs border border-amber-300">
        <i class="fa-solid fa-crown text-[9px] text-amber-950"></i>
        <span>VIP प्लान्स</span>
      </a>
    </div>
    <div class="flex items-center space-x-3">
      <span class="text-stone-500 font-medium">Viewport:</span>
      <button onclick="setViewport('390px')" class="px-2.5 py-1 rounded-lg bg-stone-100 hover:bg-stone-200 font-mono text-[11px] border border-stone-200">iPhone</button>
      <button onclick="setViewport('440px')" class="px-2.5 py-1 rounded-lg bg-emerald-50 text-emerald-800 font-mono text-[11px] border border-emerald-300 font-bold">Standard</button>
      <button onclick="setViewport('100%')" class="px-2.5 py-1 rounded-lg bg-stone-100 hover:bg-stone-200 font-mono text-[11px] border border-stone-200">Full Width</button>
    </div>
  </aside>

  <!-- ==================== FLOATING NOTIFICATION TOAST ==================== -->
  <div id="actionToast" class="toast-anim fixed top-4 left-1/2 z-[200] max-w-sm w-[92%] bg-gradient-to-r from-[#065F46] via-[#047857] to-[#033626] text-white p-3 rounded-2xl border-2 border-[#E6C254] shadow-2xl flex items-center space-x-3 pointer-events-none">
    <div class="w-9 h-9 rounded-full bg-amber-400/20 border border-amber-300 flex items-center justify-center shrink-0 text-amber-300 text-base shadow-inner">
      <i class="fa-solid fa-check" id="toastIcon"></i>
    </div>
    <div class="flex-1">
      <h4 class="text-xs font-extrabold text-[#F5D061] tracking-wide" id="toastTitle">सफलतापूर्वक पूर्ण!</h4>
      <p class="text-[11px] text-emerald-50 font-medium leading-tight mt-0.5" id="toastMsg">आपकी रुचि सफलतापूर्वक भेज दी गई है।</p>
    </div>
  </div>

  <!-- ==================== MAIN MATCHES & TRACKER SHELL ==================== -->
  <main id="matchesShell">

    <!-- 1. TOP MOBILE STATUS BAR (10:24, 4G, 78%) -->
    <div class="w-full bg-[#053F2E] text-emerald-100/90 px-4 pt-1.5 pb-1 flex items-center justify-between text-[11px] font-semibold select-none border-b border-emerald-800/40">
      <span class="tracking-tight">10:24</span>
      <div class="flex items-center space-x-2 text-[10px]">
        <span><i class="fa-solid fa-signal text-[9px] mr-0.5"></i> 4G</span>
        <span><i class="fa-solid fa-wifi text-[9px] mr-0.5"></i></span>
        <span>78% <i class="fa-solid fa-battery-three-quarters text-[10px] ml-0.5 text-emerald-300"></i></span>
      </div>
    </div>

    <!-- 2. TOP ROYAL APP BAR (Exact Recreation from Reference Image) -->
    <header class="w-full bg-gradient-to-b from-[#064E3B] to-[#043E2F] px-3.5 py-2.5 flex items-center justify-between text-white shadow-md relative z-30">
      <!-- Left: Back Arrow to Page 3 (बाण बटन) + Hamburger Menu -->
      <div class="flex items-center space-x-1.5 shrink-0">
        <a href="/biodata" onclick="window.location.href='/biodata'; return false;" class="px-2.5 py-1 rounded-full bg-white/15 hover:bg-white/25 border border-amber-300/50 text-[#F5D061] hover:text-white text-xs font-bold flex items-center space-x-1.5 shadow-sm active:scale-95 transition" title="वापस तीसरे पेज (बायोडाटा फॉर्म) पर जाएं">
          <i class="fa-solid fa-arrow-left text-xs text-amber-300"></i>
          <span class="text-[11px] font-sans">पेज 3</span>
        </a>
        <button onclick="toggleSideMenu()" class="w-7 h-7 flex items-center justify-center text-white/80 hover:text-white rounded-lg active:bg-white/10 transition" title="Menu">
          <i class="fa-solid fa-bars text-base"></i>
        </button>
      </div>

      <!-- Center: Royal Crown Emblem + Branding Typography -->
      <div class="flex items-center space-x-2 cursor-pointer" onclick="window.location.href='/matches'">
        <!-- Royal Heart Crown SVG Crest -->
        <div class="w-9 h-9 rounded-full bg-gradient-to-br from-amber-300 via-amber-400 to-amber-600 p-0.5 shadow-md flex items-center justify-center shrink-0">
          <div class="w-full h-full rounded-full bg-[#064E3B] flex items-center justify-center">
            <i class="fa-solid fa-crown text-amber-300 text-xs"></i>
          </div>
        </div>
        <div class="flex flex-col text-left">
          <span class="font-cinzel text-sm sm:text-base font-extrabold text-[#F3D883] tracking-widest leading-none">DHEERAJA</span>
          <span class="font-cinzel text-[9.5px] font-bold text-amber-200/90 tracking-wider leading-tight">ROYAL MATRIMONY</span>
          <span class="text-[7.5px] text-emerald-200/70 tracking-tight leading-none mt-0.5 font-medium">Trusted &bull; Traditional &bull; Together Forever</span>
        </div>
      </div>

      <!-- Right: VIP Upgrade + Search & Notification with Badge '3' -->
      <div class="flex items-center space-x-1.5 shrink-0">
        <a href="/membership" class="px-2 py-0.5 rounded-full bg-gradient-to-r from-amber-400 to-amber-500 hover:from-amber-500 hover:to-amber-600 text-[#064E3B] font-extrabold text-[10px] flex items-center space-x-1 shadow-xs transition transform active:scale-95 border border-amber-200" title="VIP सदस्यता प्लान्स">
          <i class="fa-solid fa-crown text-[8.5px] text-amber-900"></i>
          <span class="tracking-tight text-amber-950">VIP</span>
        </a>
        <button onclick="focusInstantSearch()" class="w-7 h-7 flex items-center justify-center text-white/90 hover:text-white rounded-full hover:bg-white/10 transition cursor-pointer" title="त्वरित बायोडाटा ID व नाम खोजें">
          <i class="fa-solid fa-magnifying-glass text-xs"></i>
        </button>
        <button onclick="toggleNotificationsModal()" class="relative w-7 h-7 flex items-center justify-center text-white/90 hover:text-white rounded-full hover:bg-white/10 transition" title="सूचनाएं (Notifications)">
          <i class="fa-solid fa-bell text-xs"></i>
          <span class="absolute top-0.5 right-0.5 w-3.5 h-3.5 bg-red-600 text-white rounded-full text-[8.5px] font-extrabold flex items-center justify-center border border-[#064E3B] shadow-sm animate-pulse">3</span>
        </button>
      </div>
    </header>

    <!-- 2.1 TOP 5 BUTTONS LINE (तालिका पेज के सारे बटन ऊपर वाली लाइन में) -->
    <nav class="sticky top-0 z-40 w-full bg-gradient-to-r from-[#02281e] via-[#064E3B] to-[#085a44] text-white px-2.5 py-2 flex items-center justify-between gap-1.5 border-b-2 border-[#D4AF37]/60 shadow-[0_4px_16px_rgba(0,0,0,0.35)] select-none">
      <!-- 1. Home Button -->
      <a href="/cover" class="dock-nav-btn" title="होम पेज (Home)">
        <i class="fa-solid fa-house text-sm mb-1 text-emerald-200"></i>
        <span class="dock-label text-[10px]">होम</span>
      </a>

      <!-- 2. Table / Matches Button (ACTIVE 3D Royal Gold Button) -->
      <a href="/matches" class="dock-nav-btn active" title="तालिका (Matches / Dashboard)">
        <i class="fa-solid fa-table-cells text-base mb-1"></i>
        <span class="dock-label text-[10px]">तालिका</span>
      </a>

      <!-- 3. Chats Button (with Badge '2') -->
      <button onclick="openChatModal('अंजलि सिंह (Anjali)', '/assets/images/match_anjali.jpg', true)" class="dock-nav-btn" title="संदेश (Chats)">
        <div class="relative flex items-center justify-center">
          <i class="fa-solid fa-comments text-sm mb-1 text-emerald-200"></i>
          <span class="dock-badge">2</span>
        </div>
        <span class="dock-label text-[10px]">चैट</span>
      </button>

      <!-- 4. Interests Button (with Badge '5') -->
      <button onclick="filterByCategory('interests_received')" class="dock-nav-btn" title="रुचियां (Interests)">
        <div class="relative flex items-center justify-center">
          <i class="fa-solid fa-heart text-sm mb-1 text-emerald-200"></i>
          <span class="dock-badge">5</span>
        </div>
        <span class="dock-label text-[10px]">रुचि</span>
      </button>

      <!-- 5. Profile Button -->
      <a href="/biodata" class="dock-nav-btn" title="मेरा बायोडाटा (Profile)">
        <i class="fa-solid fa-user-circle text-sm mb-1 text-emerald-200"></i>
        <span class="dock-label text-[10px]">बायोडाटा</span>
      </a>
    </nav>

    <!-- 2.2 BEAUTIFUL MOVING ONLINE TICKER LINE (ऑनलाइन को चलता हुआ मूविंग करती हुई लाइन) -->
    <div class="w-full bg-gradient-to-r from-[#011a13] via-[#043e2f] to-[#011a13] border-b-2 border-[#D4AF37]/50 px-2 py-1.5 flex items-center overflow-hidden shadow-md select-none relative z-20">
      <!-- Fixed Live Online Beacon Badge -->
      <div class="shrink-0 flex items-center space-x-1.5 px-2.5 py-1 bg-gradient-to-r from-emerald-600 via-emerald-500 to-teal-600 text-white rounded-full text-[10.5px] font-black tracking-wide shadow-sm border border-emerald-300 mr-2 z-10">
        <span class="w-2.5 h-2.5 rounded-full bg-white live-pulse-beacon"></span>
        <span class="font-cinzel tracking-wider text-[#FFF2C2] drop-shadow-xs">🟢 ऑनलाइन</span>
      </div>

      <!-- Moving Track -->
      <div class="ticker-wrapper flex-1 overflow-hidden relative">
        <div class="ticker-track flex items-center space-x-6 text-[11px] text-emerald-100 font-semibold py-0.5">
          
          <!-- Loop Segment A -->
          <span class="inline-flex items-center space-x-1.5 shrink-0 bg-white/10 px-2.5 py-0.5 rounded-full border border-emerald-400/30">
            <span class="w-2 h-2 rounded-full bg-emerald-400 animate-pulse"></span>
            <span class="text-[#F8E7A2] font-extrabold">प्रिया शर्मा (इन्दौर)</span>
            <span class="text-emerald-200 text-[10px]">अभी ऑनलाइन हैं</span>
          </span>

          <span class="inline-flex items-center space-x-1.5 shrink-0">
            <i class="fa-solid fa-users text-amber-300 text-xs"></i>
            <span class="text-white font-extrabold">1,280+ सक्रिय वर-वधू</span>
            <span class="text-emerald-200 text-[10px]">ऑनलाइन सक्रिय</span>
          </span>

          <span class="inline-flex items-center space-x-1.5 shrink-0 bg-white/10 px-2.5 py-0.5 rounded-full border border-emerald-400/30">
            <span class="w-2 h-2 rounded-full bg-emerald-400 animate-pulse"></span>
            <span class="text-[#F8E7A2] font-extrabold">अंजलि सिंह (जयपुर)</span>
            <span class="text-emerald-200 text-[10px]">अभी ऑनलाइन हैं</span>
          </span>

          <span class="inline-flex items-center space-x-1.5 shrink-0">
            <i class="fa-solid fa-crown text-amber-300 text-xs"></i>
            <span class="text-[#F8E7A2] font-extrabold">👑 रॉयल बायोडाटा (सुनहरा बॉर्डर)</span>
            <span class="text-emerald-200 text-[10px]">1-क्लिक PDF डाउनलोड उपलब्ध</span>
          </span>

          <span class="inline-flex items-center space-x-1.5 shrink-0 bg-white/10 px-2.5 py-0.5 rounded-full border border-emerald-400/30">
            <span class="w-2 h-2 rounded-full bg-emerald-400 animate-pulse"></span>
            <span class="text-[#F8E7A2] font-extrabold">नेहा वर्मा (पुणे)</span>
            <span class="text-emerald-200 text-[10px]">अभी ऑनलाइन हैं</span>
          </span>

          <span class="inline-flex items-center space-x-1.5 shrink-0">
            <i class="fa-solid fa-certificate text-amber-300 text-xs"></i>
            <span class="text-amber-200 font-extrabold">100% सत्यापित प्रोफाइल्स</span>
            <span class="text-emerald-200 text-[10px]">वैदिक गोत्र व कुंडली मिलान</span>
          </span>

          <span class="inline-flex items-center space-x-1.5 shrink-0 bg-white/10 px-2.5 py-0.5 rounded-full border border-emerald-400/30">
            <span class="w-2 h-2 rounded-full bg-emerald-400 animate-pulse"></span>
            <span class="text-[#F8E7A2] font-extrabold">रितिका पटेल (अहमदाबाद)</span>
            <span class="text-emerald-200 text-[10px]">अभी ऑनलाइन हैं</span>
          </span>

          <span class="inline-flex items-center space-x-1.5 shrink-0">
            <i class="fa-solid fa-heart text-rose-400 text-xs"></i>
            <span class="text-white font-extrabold">आज 48 नए रिश्ते जुड़े</span>
            <span class="text-emerald-200 text-[10px]">शुभ मुहूर्त मिलान जारी</span>
          </span>

          <!-- Loop Segment B (Identical Duplicate for Smooth Seamless Marquee) -->
          <span class="inline-flex items-center space-x-1.5 shrink-0 bg-white/10 px-2.5 py-0.5 rounded-full border border-emerald-400/30">
            <span class="w-2 h-2 rounded-full bg-emerald-400 animate-pulse"></span>
            <span class="text-[#F8E7A2] font-extrabold">प्रिया शर्मा (इन्दौर)</span>
            <span class="text-emerald-200 text-[10px]">अभी ऑनलाइन हैं</span>
          </span>

          <span class="inline-flex items-center space-x-1.5 shrink-0">
            <i class="fa-solid fa-users text-amber-300 text-xs"></i>
            <span class="text-white font-extrabold">1,280+ सक्रिय वर-वधू</span>
            <span class="text-emerald-200 text-[10px]">ऑनलाइन सक्रिय</span>
          </span>

          <span class="inline-flex items-center space-x-1.5 shrink-0 bg-white/10 px-2.5 py-0.5 rounded-full border border-emerald-400/30">
            <span class="w-2 h-2 rounded-full bg-emerald-400 animate-pulse"></span>
            <span class="text-[#F8E7A2] font-extrabold">अंजलि सिंह (जयपुर)</span>
            <span class="text-emerald-200 text-[10px]">अभी ऑनलाइन हैं</span>
          </span>

          <span class="inline-flex items-center space-x-1.5 shrink-0">
            <i class="fa-solid fa-crown text-amber-300 text-xs"></i>
            <span class="text-[#F8E7A2] font-extrabold">👑 रॉयल बायोडाटा (सुनहरा बॉर्डर)</span>
            <span class="text-emerald-200 text-[10px]">1-क्लिक PDF डाउनलोड उपलब्ध</span>
          </span>

          <span class="inline-flex items-center space-x-1.5 shrink-0 bg-white/10 px-2.5 py-0.5 rounded-full border border-emerald-400/30">
            <span class="w-2 h-2 rounded-full bg-emerald-400 animate-pulse"></span>
            <span class="text-[#F8E7A2] font-extrabold">नेहा वर्मा (पुणे)</span>
            <span class="text-emerald-200 text-[10px]">अभी ऑनलाइन हैं</span>
          </span>

          <span class="inline-flex items-center space-x-1.5 shrink-0">
            <i class="fa-solid fa-certificate text-amber-300 text-xs"></i>
            <span class="text-amber-200 font-extrabold">100% सत्यापित प्रोफाइल्स</span>
            <span class="text-emerald-200 text-[10px]">वैदिक गोत्र व कुंडली मिलान</span>
          </span>

          <span class="inline-flex items-center space-x-1.5 shrink-0 bg-white/10 px-2.5 py-0.5 rounded-full border border-emerald-400/30">
            <span class="w-2 h-2 rounded-full bg-emerald-400 animate-pulse"></span>
            <span class="text-[#F8E7A2] font-extrabold">रितिका पटेल (अहमदाबाद)</span>
            <span class="text-emerald-200 text-[10px]">अभी ऑनलाइन हैं</span>
          </span>

          <span class="inline-flex items-center space-x-1.5 shrink-0">
            <i class="fa-solid fa-heart text-rose-400 text-xs"></i>
            <span class="text-white font-extrabold">आज 48 नए रिश्ते जुड़े</span>
            <span class="text-emerald-200 text-[10px]">शुभ मुहूर्त मिलान जारी</span>
          </span>

        </div>
      </div>
    </div>

    <!-- 2.9 ROYAL INSTANT BIODATA ID & ADVANCED SEARCH SUITE -->
    <section class="px-3 pt-2.5 pb-1 relative z-30" id="instantSearchSection">
      <div class="bg-gradient-to-r from-emerald-950 via-[#033628] to-emerald-950 rounded-2xl p-2.5 border-2 border-[#D4AF37] shadow-lg relative">
        
        <!-- Top Search Row -->
        <div class="flex items-center gap-1.5 relative">
          <!-- Search Input Container -->
          <div class="flex-1 relative flex items-center bg-white rounded-xl border border-amber-300/80 shadow-inner px-2.5 py-1.5 focus-within:ring-2 focus-within:ring-amber-400 focus-within:border-amber-500 transition">
            <!-- Search Icon with Gold Accent -->
            <span class="text-amber-600 mr-2 text-xs flex items-center shrink-0">
              <i class="fa-solid fa-magnifying-glass"></i>
            </span>

            <!-- Input Field -->
            <input type="text"
                   id="instantSearchInput"
                   placeholder="बायोडाटा ID (उदा. DM10041), नाम, गोत्र या शहर..."
                   class="w-full bg-transparent text-xs text-stone-900 font-semibold placeholder:text-stone-400 placeholder:font-normal focus:outline-hidden"
                   autocomplete="off"
                   oninput="onInstantSearchInput(this.value)"
                   onkeydown="if(event.key==='Enter') executeInstantSearch();">

            <!-- Clear Search Icon (Hidden by default) -->
            <button type="button"
                    id="btnClearInstantSearch"
                    onclick="clearInstantSearch()"
                    class="hidden text-stone-400 hover:text-stone-600 text-xs px-1 cursor-pointer"
                    title="हटाएं">
              <i class="fa-solid fa-circle-xmark"></i>
            </button>
          </div>

          <!-- Advanced Filter Toggle Button -->
          <button type="button"
                  onclick="toggleAdvancedSearchDrawer()"
                  id="btnToggleAdvSearch"
                  class="px-2.5 py-2 rounded-xl bg-gradient-to-r from-amber-400 to-amber-500 hover:from-amber-500 hover:to-amber-600 text-emerald-950 font-black text-[11px] flex items-center gap-1.5 shadow-md border border-amber-300 transition active:scale-95 shrink-0 cursor-pointer"
                  title="उन्नत फिल्टर व विस्तृत खोज">
            <i class="fa-solid fa-sliders text-[11px]"></i>
            <span>उन्नत खोज</span>
            <span id="advFilterBadge" class="hidden w-4 h-4 bg-emerald-950 text-amber-300 rounded-full text-[9px] font-black flex items-center justify-center">0</span>
          </button>
        </div>

        <!-- Live Auto-Suggest Popup Dropdown (Instant Matrimony ID & Name Suggestions) -->
        <div id="instantSuggestDropdown"
             class="hidden absolute left-2.5 right-2.5 top-[52px] bg-white rounded-xl shadow-2xl border-2 border-amber-400 z-50 max-h-72 overflow-y-auto divide-y divide-stone-100">
          <!-- Dynamically filled by JS -->
        </div>

        <!-- Collapsible Advanced Search Drawer -->
        <div id="advancedSearchDrawer" class="hidden mt-2.5 pt-2.5 border-t border-emerald-700/80">
          <div class="text-[10px] font-bold text-amber-300 mb-2 flex items-center justify-between">
            <span class="flex items-center gap-1.5">
              <i class="fa-solid fa-filter text-amber-400"></i>
              <span>उन्नत वैवाहिक फिल्टर (Multi-Criteria Matchmaker):</span>
            </span>
            <span class="text-stone-300 hover:text-white cursor-pointer text-[10px]" onclick="toggleAdvancedSearchDrawer()">✕ बंद करें</span>
          </div>

          <!-- Advanced Filters Grid: 2 columns on mobile, 4 on desktop -->
          <div class="grid grid-cols-2 gap-2 text-stone-900 text-xs">
            
            <!-- Filter 1: Matrimony ID Direct Jump -->
            <div class="bg-emerald-900/60 p-2 rounded-xl border border-emerald-600/50">
              <label class="block text-[9.5px] font-bold text-amber-300 mb-1">
                <i class="fa-solid fa-id-badge mr-1"></i>सीधी बायोडाटा ID
              </label>
              <input type="text"
                     id="advFilterMatrimonyId"
                     placeholder="उदा. DM10041"
                     class="w-full bg-white px-2 py-1 rounded-lg text-xs font-bold text-emerald-950 uppercase border border-amber-300 focus:outline-hidden"
                     oninput="this.value = this.value.toUpperCase();">
            </div>

            <!-- Filter 2: Gender / लिंग -->
            <div class="bg-emerald-900/60 p-2 rounded-xl border border-emerald-600/50">
              <label class="block text-[9.5px] font-bold text-amber-300 mb-1">
                <i class="fa-solid fa-venus-mars mr-1"></i>रिश्ता (लिंग)
              </label>
              <select id="advFilterGender" class="w-full bg-white px-2 py-1 rounded-lg text-xs font-semibold text-stone-800 border border-amber-300 focus:outline-hidden">
                <option value="all">सभी रिश्ते (All)</option>
                <option value="male">वर (लड़के / Grooms)</option>
                <option value="female">वधू (लड़कियां / Brides)</option>
              </select>
            </div>

            <!-- Filter 3: Samaj / Community -->
            <div class="bg-emerald-900/60 p-2 rounded-xl border border-emerald-600/50">
              <label class="block text-[9.5px] font-bold text-amber-300 mb-1">
                <i class="fa-solid fa-users mr-1"></i>वैवाहिक समाज
              </label>
              <select id="advFilterCaste" class="w-full bg-white px-2 py-1 rounded-lg text-xs font-semibold text-stone-800 border border-amber-300 focus:outline-hidden">
                <option value="all">सभी समाज (All)</option>
                <option value="सिंधी" selected>सिंधी (Sindhi)</option>
                <option value="ब्राह्मण">ब्राह्मण (Brahmin)</option>
                <option value="माहेश्वरी">माहेश्वरी (Maheshwari)</option>
                <option value="अग्रवाल">अग्रवाल (Agarwal)</option>
                <option value="राजपूत">राजपूत (Rajput)</option>
                <option value="जैन">जैन (Jain)</option>
                <option value="जाट">जाट (Jat)</option>
                <option value="यादव">यादव (Yadav)</option>
                <option value="गुर्जर">गुर्जर (Gurjar)</option>
                <option value="सोनी">सोनी (Soni)</option>
                <option value="सैनी">सैनी (Saini)</option>
                <option value="पाटीदार">पाटीदार (Patidar)</option>
                <option value="सिख">सिख (Sikh)</option>
                <option value="कायस्थ">कायस्थ (Kayastha)</option>
              </select>
            </div>

            <!-- Filter 4: Manglik Status / मांगलिक स्थिति -->
            <div class="bg-emerald-900/60 p-2 rounded-xl border border-emerald-600/50">
              <label class="block text-[9.5px] font-bold text-amber-300 mb-1">
                <i class="fa-solid fa-circle-half-stroke mr-1"></i>मांगलिक स्थिति
              </label>
              <select id="advFilterManglik" class="w-full bg-white px-2 py-1 rounded-lg text-xs font-semibold text-stone-800 border border-amber-300 focus:outline-hidden">
                <option value="all">सभी (All Status)</option>
                <option value="non_manglik">अमांगलिक (Non-Manglik)</option>
                <option value="anshik_manglik">आंशिक मांगलिक</option>
                <option value="manglik">पूर्ण मांगलिक (Manglik)</option>
              </select>
            </div>

            <!-- Filter 5: Age Range / आयु सीमा -->
            <div class="bg-emerald-900/60 p-2 rounded-xl border border-emerald-600/50">
              <label class="block text-[9.5px] font-bold text-amber-300 mb-1">
                <i class="fa-solid fa-calendar-days mr-1"></i>आयु सीमा
              </label>
              <select id="advFilterAge" class="w-full bg-white px-2 py-1 rounded-lg text-xs font-semibold text-stone-800 border border-amber-300 focus:outline-hidden">
                <option value="all">सभी उम्र (All Ages)</option>
                <option value="20-25">20 से 25 वर्ष</option>
                <option value="26-29">26 से 29 वर्ष</option>
                <option value="30-34">30 से 34 वर्ष</option>
                <option value="35-plus">35 वर्ष से अधिक</option>
              </select>
            </div>

            <!-- Filter 6: City / शहर -->
            <div class="bg-emerald-900/60 p-2 rounded-xl border border-emerald-600/50">
              <label class="block text-[9.5px] font-bold text-amber-300 mb-1">
                <i class="fa-solid fa-location-dot mr-1"></i>शहर / राज्य
              </label>
              <select id="advFilterCity" class="w-full bg-white px-2 py-1 rounded-lg text-xs font-semibold text-stone-800 border border-amber-300 focus:outline-hidden">
                <option value="all">सभी शहर (All Cities)</option>
                <option value="jaipur">जयपुर (Jaipur)</option>
                <option value="mumbai">मुम्बई (Mumbai)</option>
                <option value="pune">पुणे (Pune)</option>
                <option value="delhi">दिल्ली NCR (Delhi NCR)</option>
                <option value="indore">इन्दौर (Indore)</option>
                <option value="ahmedabad">अहमदाबाद (Ahmedabad)</option>
                <option value="bengaluru">बेंगलुरु (Bengaluru)</option>
              </select>
            </div>

            <!-- Filter 7: Education & Profession / पेशा -->
            <div class="bg-emerald-900/60 p-2 rounded-xl border border-emerald-600/50">
              <label class="block text-[9.5px] font-bold text-amber-300 mb-1">
                <i class="fa-solid fa-briefcase mr-1"></i>पेशा व शिक्षा
              </label>
              <select id="advFilterProfession" class="w-full bg-white px-2 py-1 rounded-lg text-xs font-semibold text-stone-800 border border-amber-300 focus:outline-hidden">
                <option value="all">सभी प्रोफेशन (All)</option>
                <option value="it_software">IT व सॉफ्टवेयर इंजीनियर</option>
                <option value="doctor_healthcare">डॉक्टर व चिकित्सा (MBBS/MDS)</option>
                <option value="finance_banking">CA व इन्वेस्टमेंट बैंकिंग</option>
                <option value="design_architecture">फैशन व डिज़ाइनिंग</option>
                <option value="business">व्यापार व बिज़नेस</option>
              </select>
            </div>

            <!-- Filter 8: Annual Income / वार्षिक आय -->
            <div class="bg-emerald-900/60 p-2 rounded-xl border border-emerald-600/50">
              <label class="block text-[9.5px] font-bold text-amber-300 mb-1">
                <i class="fa-solid fa-indian-rupee-sign mr-1"></i>न्यूनतम वार्षिक आय
              </label>
              <select id="advFilterIncome" class="w-full bg-white px-2 py-1 rounded-lg text-xs font-semibold text-stone-800 border border-amber-300 focus:outline-hidden">
                <option value="all">कोई न्यूनतम नहीं (All)</option>
                <option value="10">₹ 10 LPA और अधिक</option>
                <option value="15">₹ 15 LPA और अधिक</option>
                <option value="25">₹ 25 LPA और अधिक</option>
                <option value="35">₹ 35 LPA और अधिक</option>
              </select>
            </div>
          </div>

          <!-- Quick Checkboxes Row -->
          <div class="flex flex-wrap gap-2.5 mt-2.5 pt-2 border-t border-emerald-800 text-[11px] text-emerald-100">
            <label class="flex items-center gap-1.5 cursor-pointer hover:text-white">
              <input type="checkbox" id="advFilterVerifiedOnly" class="rounded text-amber-500 focus:ring-0">
              <span>🛡️ 100% सत्यापित रिश्ते केवल</span>
            </label>
            <label class="flex items-center gap-1.5 cursor-pointer hover:text-white">
              <input type="checkbox" id="advFilterHighGuna" class="rounded text-amber-500 focus:ring-0">
              <span>☸️ 28+ गुण मिलान केवल</span>
            </label>
            <label class="flex items-center gap-1.5 cursor-pointer hover:text-white">
              <input type="checkbox" id="advFilterOnlineOnly" class="rounded text-amber-500 focus:ring-0">
              <span>🟢 अभी ऑनलाइन सदस्य</span>
            </label>
          </div>

          <!-- Drawer Action Buttons -->
          <div class="flex items-center justify-between gap-2 mt-3 pt-2 border-t border-emerald-800">
            <button type="button"
                    onclick="resetAllAdvancedFilters()"
                    class="px-3 py-1.5 rounded-xl bg-white/10 hover:bg-white/20 text-stone-200 text-xs font-bold transition cursor-pointer">
              <i class="fa-solid fa-rotate-left mr-1"></i>रीसेट करें
            </button>
            <button type="button"
                    onclick="applyAdvancedSearchDrawerFilters()"
                    class="px-5 py-2 rounded-xl bg-gradient-to-r from-amber-400 via-amber-300 to-amber-500 hover:from-amber-500 hover:to-amber-400 text-emerald-950 text-xs font-black shadow-md border border-amber-200 transition active:scale-95 cursor-pointer">
              <i class="fa-solid fa-magnifying-glass mr-1.5"></i>फिल्टर लागू करें (खोजें)
            </button>
          </div>
        </div>

        <!-- Active Search Filter Pills & Result Badge -->
        <div id="searchFeedbackBar" class="hidden mt-2 pt-1.5 border-t border-emerald-800/80 flex items-center justify-between text-[11px]">
          <span class="text-amber-200 flex items-center gap-1.5" id="searchFeedbackText">
            <i class="fa-solid fa-circle-check text-emerald-400 text-xs"></i>
            <span>सर्च परिणाम सक्रिय</span>
          </span>
          <button type="button" onclick="clearInstantSearch()" class="text-stone-300 hover:text-white text-[10.5px] underline cursor-pointer">
            खोज हटाएं (Clear) ✕
          </button>
        </div>

      </div>
    </section>

    <!-- 3. TRACKER BANNER CARD: "Activity & Matches Tracker" -->
    <section class="px-3 pt-2 pb-1">
      <div onclick="filterByCategory('all')" class="w-full bg-white rounded-xl p-3 border border-emerald-100 shadow-sm flex items-center justify-between cursor-pointer hover:border-emerald-300 transition group">
        <div class="flex items-center space-x-3">
          <!-- Green Bar Chart Icon -->
          <div class="w-10 h-10 rounded-lg bg-emerald-50 border border-emerald-200 flex items-center justify-center text-[#065F46] shrink-0 group-hover:scale-105 transition">
            <i class="fa-solid fa-chart-simple text-lg text-emerald-700"></i>
          </div>
          <div>
            <h2 class="text-sm font-extrabold text-stone-900 leading-tight">Activity & Matches Tracker</h2>
            <p class="text-[11px] text-stone-500 font-medium leading-tight mt-0.5">View profile activity, matches and your interactions</p>
          </div>
        </div>
        <div class="w-7 h-7 rounded-full bg-stone-50 group-hover:bg-emerald-50 flex items-center justify-center text-stone-400 group-hover:text-emerald-700 transition">
          <i class="fa-solid fa-chevron-right text-xs"></i>
        </div>
      </div>
    </section>

    <!-- 3.5. DEDICATED SAMAJ COMMUNITY EXCLUSIVE GROUP GATE -->
    <section class="px-3 pt-1 pb-1">
      <div id="samajCommunityBanner" class="bg-gradient-to-r from-emerald-950 via-emerald-900 to-emerald-950 text-white rounded-2xl p-3 border-2 border-amber-400 shadow-md relative overflow-hidden">
        <!-- Background Decorative Watermark -->
        <div class="absolute -right-3 -bottom-3 text-emerald-800/25 text-7xl font-serif select-none pointer-events-none">
          <i class="fa-solid fa-users-line"></i>
        </div>

        <div class="relative z-10">
          <!-- Top Row: Samaj Title & Badges -->
          <div class="flex items-center justify-between">
            <div class="flex items-center space-x-2.5">
              <div class="w-10 h-10 rounded-xl bg-gradient-to-br from-amber-400 to-amber-600 text-emerald-950 flex items-center justify-center text-lg font-black shadow-inner shrink-0">
                <i class="fa-solid fa-shield-halved"></i>
              </div>
              <div>
                <div class="flex items-center space-x-1.5">
                  <span class="text-[9.5px] uppercase tracking-wider font-black text-amber-300 bg-amber-950/70 px-2 py-0.5 rounded-full border border-amber-500/30">
                    🔒 समाज विशिष्ट ग्रुप
                  </span>
                  <span class="text-[9.5px] text-emerald-300 font-bold">100% समाज सुरक्षा</span>
                </div>
                <h3 class="text-sm font-black text-white mt-0.5 flex items-center gap-1.5">
                  <span id="activeSamajTitle"><?= htmlspecialchars($user_samaj ?? 'सिंधी') ?></span> समाज वैवाहिक ग्रुप
                </h3>
              </div>
            </div>

            <!-- Right: Count Badge & Subtle Switcher -->
            <div class="flex items-center space-x-1.5 shrink-0">
              <span class="font-extrabold text-amber-300 bg-amber-950/80 px-2.5 py-1 rounded-xl border border-amber-400/40 text-[10px] shadow-xs" id="samajTotalCountBadge">
                <span id="samajCountNumber">4</span> रिश्ते उपलब्ध
              </span>
              <button type="button" onclick="toggleSamajDropdown()" class="text-[9.5px] text-amber-200/80 hover:text-amber-100 bg-white/10 hover:bg-white/20 px-2 py-1 rounded-xl border border-white/20 transition flex items-center gap-1 cursor-pointer" title="अन्य समाज ग्रुप देखना चाहें तो">
                <span>अन्य समाज</span>
                <i class="fa-solid fa-chevron-down text-[7.5px]"></i>
              </button>
            </div>
          </div>

          <!-- Community Rule Explanation -->
          <div class="mt-2 pt-1.5 border-t border-emerald-800/80 flex items-center justify-between text-[10.5px]">
            <span class="text-emerald-200 flex items-center gap-1">
              <i class="fa-solid fa-lock text-amber-400 text-[10px]"></i>
              <span>केवल <strong><span id="activeSamajSubtitle"><?= htmlspecialchars($user_samaj ?? 'सिंधी') ?></span></strong> समाज के सदस्य व रिश्ते</span>
            </span>
            <span class="text-[10px] text-emerald-300 font-semibold flex items-center gap-1">
              <i class="fa-solid fa-circle-check text-[9px] text-emerald-400"></i>
              <span>100% समाज गोपनीय</span>
            </span>
          </div>

          <!-- DEDICATED SAMAJ FILTER & ACTION BUTTONS ("बटन लगाकर") -->
          <div class="mt-2.5 pt-2 border-t border-emerald-800/80">
            <div class="flex items-center justify-between mb-1.5 text-[10px] text-amber-300 font-bold">
              <span class="flex items-center gap-1.5">
                <i class="fa-solid fa-layer-group text-amber-400 text-[11px]"></i>
                <span><span id="samajBtnPrefixText"><?= htmlspecialchars($user_samaj ?? 'सिंधी') ?></span> समाज मुख्य विकल्प:</span>
              </span>
              <span class="text-emerald-300 text-[9px] font-normal" id="samajActiveFilterLabel">सभी रिश्ते सक्रिय</span>
            </div>

            <!-- 6 Dedicated Interactive Samaj Buttons -->
            <div class="grid grid-cols-3 gap-1.5 sm:grid-cols-6" id="samajSubFilterContainer">
              <!-- 1. All Samaj Matches -->
              <button type="button" onclick="filterSamajSubCategory('all', this)" id="btn-samaj-sub-all" class="samaj-filter-btn active">
                <span class="text-xs">👥</span>
                <span>सभी रिश्ते</span>
                <span class="sub-badge" id="countSamajAll">(4)</span>
              </button>

              <!-- 2. Grooms (वर / लड़के) -->
              <button type="button" onclick="filterSamajSubCategory('male', this)" id="btn-samaj-sub-male" class="samaj-filter-btn">
                <span class="text-xs">🤵</span>
                <span id="labelSamajMale"><?= htmlspecialchars($user_samaj ?? 'सिंधी') ?> वर (लड़के)</span>
                <span class="sub-badge" id="countSamajMale">(2)</span>
              </button>

              <!-- 3. Brides (वधू / लड़कियां) -->
              <button type="button" onclick="filterSamajSubCategory('female', this)" id="btn-samaj-sub-female" class="samaj-filter-btn">
                <span class="text-xs">👰</span>
                <span id="labelSamajFemale"><?= htmlspecialchars($user_samaj ?? 'सिंधी') ?> वधू (लड़कियां)</span>
                <span class="sub-badge" id="countSamajFemale">(2)</span>
              </button>

              <!-- 4. Verified 100% -->
              <button type="button" onclick="filterSamajSubCategory('verified', this)" id="btn-samaj-sub-verified" class="samaj-filter-btn">
                <span class="text-xs">🛡️</span>
                <span>100% सत्यापित</span>
                <span class="sub-badge text-emerald-300">Verified</span>
              </button>

              <!-- 5. Manglik / Kundali Match -->
              <button type="button" onclick="filterSamajSubCategory('manglik', this)" id="btn-samaj-sub-manglik" class="samaj-filter-btn">
                <span class="text-xs">🪐</span>
                <span>मांगलिक मिलान</span>
                <span class="sub-badge">कुंडली</span>
              </button>

              <!-- 6. Official Samaj WhatsApp Community -->
              <button type="button" onclick="openSamajWhatsappCommunity()" id="btn-samaj-sub-whatsapp" class="samaj-filter-btn bg-emerald-700/80 hover:bg-emerald-600 text-white border-emerald-400/70 shadow-emerald-950/40">
                <span class="text-xs">💬</span>
                <span>WhatsApp ग्रुप</span>
                <span class="sub-badge bg-emerald-950 text-amber-300 font-black">VIP 🔒</span>
              </button>
            </div>
          </div>

          <!-- Quick Samaj Switcher Drawer (Kept Hidden by Default, for Optional Switch) -->
          <div id="samajSwitcherDrawer" class="hidden mt-2.5 pt-2 border-t border-emerald-800">
            <div class="text-[10px] font-bold text-amber-300 mb-1.5 flex items-center justify-between">
              <span>वैकल्पिक: अन्य अधिकृत समाज ग्रुप (Demonstration Switcher):</span>
              <span class="text-stone-300 hover:text-white cursor-pointer text-[10px]" onclick="toggleSamajDropdown()">✕ बंद करें</span>
            </div>
            <div class="flex flex-wrap gap-1 max-h-28 overflow-y-auto pr-1" id="samajQuickPills">
              <!-- Rendered dynamically via JS -->
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- 4. CATEGORY FILTER PILLS (8 Buttons in 2 Rows x 4 Columns) -->
    <section class="px-3 py-2">
      <div class="grid grid-cols-4 gap-1.5">
        <!-- Row 1 -->
        <button onclick="filterByCategory('all', this)" id="pill-all" class="filter-pill active">
          <span>All</span>
          <span class="sub-text text-[9px] font-normal text-emerald-100">(सभी)</span>
        </button>
        <button onclick="filterByCategory('viewed_me', this)" id="pill-viewed_me" class="filter-pill">
          <span>Who Viewed Me</span>
          <span class="sub-text text-[9px] font-normal text-stone-500">(किसने मुझे देखा)</span>
        </button>
        <button onclick="filterByCategory('interests_received', this)" id="pill-interests_received" class="filter-pill">
          <span>Interests</span>
          <span class="sub-text text-[9px] font-normal text-stone-500">Received</span>
        </button>
        <button onclick="filterByCategory('interests_sent', this)" id="pill-interests_sent" class="filter-pill">
          <span>Interests</span>
          <span class="sub-text text-[9px] font-normal text-stone-500">Sent</span>
        </button>

        <!-- Row 2 -->
        <button onclick="filterByCategory('mutual', this)" id="pill-mutual" class="filter-pill">
          <span>Mutual</span>
          <span class="sub-text text-[9px] font-normal text-stone-500">Matches</span>
        </button>
        <button onclick="filterByCategory('chat_history', this)" id="pill-chat_history" class="filter-pill">
          <span>Chat</span>
          <span class="sub-text text-[9px] font-normal text-stone-500">History</span>
        </button>
        <button onclick="filterByCategory('shortlisted', this)" id="pill-shortlisted" class="filter-pill">
          <span>Shortlisted</span>
          <span class="sub-text text-[9px] font-normal text-stone-500">पसंदीदा</span>
        </button>
        <button onclick="filterByCategory('verified', this)" id="pill-verified" class="filter-pill">
          <span>Verified</span>
          <span class="sub-text text-[9px] font-normal text-stone-500">सत्यापित</span>
        </button>
      </div>

      <!-- Dynamic Active Filter Count Banner -->
      <div id="filterStatusBanner" class="mt-2 px-2.5 py-1 bg-emerald-50/80 rounded-lg border border-emerald-200/60 flex items-center justify-between text-[11px] text-emerald-900 font-medium">
        <span id="filterStatusText"><i class="fa-solid fa-list-check text-emerald-700 mr-1.5"></i> सभी योग्य रिश्ते (All Matches): <strong>4 प्रोफाइल</strong></span>
        <span class="text-[10px] text-stone-500 font-mono">100% Verified</span>
      </div>

      <!-- 4.1 PHOTO PRIVACY & SECURITY WATERMARK CONTROL BANNER -->
      <div class="mt-1.5">
        <button type="button" onclick="openPhotoPrivacyModal()" class="w-full py-2 px-3 rounded-xl bg-gradient-to-r from-emerald-950 via-emerald-900 to-emerald-950 border border-amber-400 text-white text-xs flex items-center justify-between shadow-xs hover:border-amber-300 transition active:scale-[0.99] cursor-pointer group">
          <div class="flex items-center space-x-2.5">
            <div class="w-7 h-7 rounded-lg bg-gradient-to-br from-amber-400 to-amber-600 text-emerald-950 flex items-center justify-center text-xs font-black shadow-inner shrink-0 group-hover:scale-105 transition">
              <i class="fa-solid fa-shield-halved"></i>
            </div>
            <div class="text-left">
              <div class="text-white text-[11px] font-black leading-tight flex items-center gap-1.5">
                <span>फोटो प्राइवेसी व सुरक्षा वाटरमार्क</span>
                <span class="text-[8.5px] bg-emerald-400 text-emerald-950 px-1.5 py-0.2 rounded font-black tracking-wider uppercase">सक्रिय 🔒</span>
              </div>
              <p class="text-[9.5px] text-amber-200/90 leading-tight mt-0.5">स्क्रीनशॉट लॉक • 'केवल रिश्ते हेतु' मुहर • दृश्यता नियंत्रण</p>
            </div>
          </div>
          <span class="text-[10px] text-amber-300 font-extrabold bg-white/10 px-2 py-1 rounded-lg border border-amber-400/40 group-hover:bg-amber-400 group-hover:text-emerald-950 transition flex items-center gap-1">
            <span>सेटिंग्स</span>
            <i class="fa-solid fa-sliders text-[9px]"></i>
          </span>
        </button>
      <!-- 4.2 ADVANCED MULTI-FILTER BAR (उन्नत रिश्ते, उम्र, कद, सिटी, व्यवसाय, मांगलिक/नॉन-मांगलिक) -->
      <div class="mt-2 bg-white rounded-2xl p-2.5 border border-stone-200 shadow-xs space-y-2">
        <!-- Filter Header Row with Title & Quick Reset -->
        <div class="flex items-center justify-between pb-1.5 border-b border-stone-100">
          <div class="flex items-center space-x-1.5">
            <span class="w-6 h-6 rounded-lg bg-emerald-100 text-emerald-800 flex items-center justify-center text-xs font-bold">
              <i class="fa-solid fa-sliders"></i>
            </span>
            <span class="text-xs font-black text-stone-900 font-cinzel">उन्नत रिश्ते व पसंद फ़िल्टर</span>
          </div>
          <div class="flex items-center space-x-1.5">
            <button type="button" onclick="openAdvancedFilterModal()" class="px-2 py-0.5 rounded-lg bg-amber-50 hover:bg-amber-100 border border-amber-300 text-amber-900 text-[10.5px] font-extrabold flex items-center space-x-1 transition cursor-pointer">
              <i class="fa-solid fa-filter text-[9px] text-amber-700"></i>
              <span>विस्तृत फ़िल्टर</span>
              <span id="activeFilterBadge" class="hidden ml-1 px-1 rounded-full bg-emerald-600 text-white text-[8px] font-mono font-bold">0</span>
            </button>
            <button type="button" onclick="resetAllFilters()" id="btnResetFilters" class="hidden px-2 py-0.5 rounded-lg bg-stone-100 hover:bg-rose-50 text-stone-600 hover:text-rose-700 border border-stone-200 text-[10px] font-bold transition cursor-pointer">
              <i class="fa-solid fa-rotate-left mr-0.5 text-[8.5px]"></i> रीसेट
            </button>
          </div>
        </div>

        <!-- 5 Fast Quick-Select Dropdowns Row (उम्र, कद, सिटी, व्यवसाय, मांगलिक) -->
        <div class="grid grid-cols-2 sm:grid-cols-5 gap-1.5 text-[11px]">
          <!-- 1. Manglik Status Filter -->
          <div class="space-y-0.5">
            <label class="text-[9.5px] font-bold text-stone-600 flex items-center gap-0.5">
              <span>🪐 मांगलिक</span>
            </label>
            <select id="quickFilterManglik" onchange="onQuickFilterChange()" class="w-full py-1.5 px-2 rounded-lg bg-stone-50 border border-stone-200 text-stone-800 text-[10.5px] font-bold focus:ring-1 focus:ring-emerald-500 focus:border-emerald-500 cursor-pointer">
              <option value="all">सभी (कोई भी)</option>
              <option value="non_manglik">🟢 नॉन-मांगलिक (अमांगलिक)</option>
              <option value="manglik">🔴 केवल मांगलिक</option>
              <option value="anshik_manglik">🟡 आंशिक मांगलिक</option>
            </select>
          </div>

          <!-- 2. Age Range Filter -->
          <div class="space-y-0.5">
            <label class="text-[9.5px] font-bold text-stone-600 flex items-center gap-0.5">
              <span>🎂 उम्र सीमा</span>
            </label>
            <select id="quickFilterAge" onchange="onQuickFilterChange()" class="w-full py-1.5 px-2 rounded-lg bg-stone-50 border border-stone-200 text-stone-800 text-[10.5px] font-bold focus:ring-1 focus:ring-emerald-500 focus:border-emerald-500 cursor-pointer">
              <option value="all">सभी उम्र (Any)</option>
              <option value="21-24">21 - 24 वर्ष</option>
              <option value="25-27">25 - 27 वर्ष</option>
              <option value="28-32">28 - 32 वर्ष</option>
            </select>
          </div>

          <!-- 3. City / Location Filter -->
          <div class="space-y-0.5">
            <label class="text-[9.5px] font-bold text-stone-600 flex items-center gap-0.5">
              <span>🏙️ शहर / सिटी</span>
            </label>
            <select id="quickFilterCity" onchange="onQuickFilterChange()" class="w-full py-1.5 px-2 rounded-lg bg-stone-50 border border-stone-200 text-stone-800 text-[10.5px] font-bold focus:ring-1 focus:ring-emerald-500 focus:border-emerald-500 cursor-pointer">
              <option value="all">सभी शहर (All Cities)</option>
              <option value="Jaipur">जयपुर (Jaipur)</option>
              <option value="Indore">इन्दौर (Indore)</option>
              <option value="Pune">पुणे (Pune)</option>
              <option value="Surat">सूरत (Surat)</option>
              <option value="Ahmedabad">अहमदाबाद (Ahmedabad)</option>
              <option value="Udaipur">उदयपुर (Udaipur)</option>
              <option value="Jodhpur">जोधपुर (Jodhpur)</option>
              <option value="Sikar">सीकर (Sikar)</option>
              <option value="Alwar">अलवर (Alwar)</option>
              <option value="Ajmer">अजमेर (Ajmer)</option>
              <option value="Chandigarh">चंडीगढ़ (Chandigarh)</option>
            </select>
          </div>

          <!-- 4. Vyavsay / Profession Filter -->
          <div class="space-y-0.5">
            <label class="text-[9.5px] font-bold text-stone-600 flex items-center gap-0.5">
              <span>💼 व्यवसाय / पेशा</span>
            </label>
            <select id="quickFilterProfession" onchange="onQuickFilterChange()" class="w-full py-1.5 px-2 rounded-lg bg-stone-50 border border-stone-200 text-stone-800 text-[10.5px] font-bold focus:ring-1 focus:ring-emerald-500 focus:border-emerald-500 cursor-pointer">
              <option value="all">सभी व्यवसाय (Any)</option>
              <option value="it_software">💻 IT व सॉफ्टवेयर</option>
              <option value="govt_service">🏛️ सरकारी / बैंक / RAS</option>
              <option value="business_finance">📊 CA, फाइनेंस व बिजनेस</option>
              <option value="education_teaching">📚 शिक्षण व प्राध्यापक</option>
              <option value="design_architecture">🎨 डिज़ाइन व आर्किटेक्चर</option>
            </select>
          </div>

          <!-- 5. Height / Kad Filter -->
          <div class="space-y-0.5 col-span-2 sm:col-span-1">
            <label class="text-[9.5px] font-bold text-stone-600 flex items-center gap-0.5">
              <span>📏 कद / लंबाई</span>
            </label>
            <select id="quickFilterHeight" onchange="onQuickFilterChange()" class="w-full py-1.5 px-2 rounded-lg bg-stone-50 border border-stone-200 text-stone-800 text-[10.5px] font-bold focus:ring-1 focus:ring-emerald-500 focus:border-emerald-500 cursor-pointer">
              <option value="all">सभी कद (Any Height)</option>
              <option value="short">5'0" - 5'3"</option>
              <option value="medium">5'4" - 5'6"</option>
              <option value="tall">5'7" और अधिक</option>
            </select>
          </div>
        </div>

        <!-- Active Filter Pills Strip (Visible when any filter is non-default) -->
        <div id="activeFilterPillsContainer" class="hidden pt-1.5 border-t border-stone-100 flex flex-wrap items-center gap-1">
          <span class="text-[9.5px] font-bold text-stone-500 mr-0.5">लागू फ़िल्टर:</span>
          <div id="activePillsList" class="flex flex-wrap gap-1"></div>
        </div>
      </div>
    </section>

    <!-- 5. CANDIDATE MATCHES LIST (तालिका कार्ड्स) -->
    <section class="px-3 pb-3 space-y-3 flex-1" id="matchesContainer">

      <!-- Fallback Card when No Matching Profile Found -->
      <div id="noMatchesCard" class="hidden bg-white rounded-2xl p-6 border-2 border-amber-300 text-center shadow-md">
        <div class="w-14 h-14 mx-auto rounded-full bg-amber-50 text-amber-600 flex items-center justify-center text-2xl mb-3 shadow-inner border border-amber-200">
          <i class="fa-solid fa-magnifying-glass-chart"></i>
        </div>
        <h3 class="text-sm font-extrabold text-stone-900" id="noMatchesTitle">कोई रिश्ता नहीं मिला</h3>
        <p class="text-xs text-stone-500 mt-1 max-w-xs mx-auto leading-relaxed" id="noMatchesDesc">
          आपके द्वारा दर्ज की गई ID या खोजे गए फिल्टर के अनुसार कोई रिश्ता उपलब्ध नहीं है। कृपया स्पेलिंग जांचें या अन्य समाज/फिल्टर चुनें।
        </p>
        <div class="mt-4 flex items-center justify-center gap-2">
          <button type="button" onclick="clearInstantSearch()" class="px-4 py-2 rounded-xl bg-gradient-to-r from-emerald-800 to-emerald-700 hover:from-emerald-700 hover:to-emerald-600 text-white text-xs font-bold shadow-md transition active:scale-95 cursor-pointer">
            <i class="fa-solid fa-rotate-left mr-1.5"></i>सभी बायोडाटा पुनः देखें
          </button>
        </div>
      </div>

      <!-- ==================== DYNAMIC CANDIDATE CARDS FROM MYSQL DATABASE ==================== -->
      <?php if (!empty($candidates)): ?>
        <?php foreach ($candidates as $cand): ?>
          <article class="candidate-card bg-white rounded-2xl p-3 border border-stone-200 shadow-sm transition hover:shadow-md relative"
                   data-caste="<?= htmlspecialchars($cand['caste_search'] ?? $cand['caste']) ?>"
                   data-categories="<?= htmlspecialchars($cand['categories'] ?? 'all') ?>"
                   data-id="<?= (int)$cand['id'] ?>"
                   data-matrimony-id="<?= htmlspecialchars($cand['matrimony_id']) ?>"
                   data-gender="<?= htmlspecialchars($cand['gender']) ?>"
                   data-income="<?= htmlspecialchars((string)$cand['income_lpa']) ?>"
                   data-name="<?= htmlspecialchars($cand['name']) ?>"
                   data-age="<?= (int)$cand['age'] ?>"
                   data-height="<?= htmlspecialchars($cand['height_formatted']) ?>"
                   data-height-inches="<?= (int)$cand['height_inches'] ?>"
                   data-city="<?= htmlspecialchars($cand['city']) ?>"
                   data-profession="<?= htmlspecialchars($cand['profession_code']) ?>"
                   data-manglik="<?= htmlspecialchars($cand['manglik_code']) ?>"
                   data-online="<?= $cand['is_online'] ? 'true' : 'false' ?>"
                   data-royal="<?= $cand['is_royal'] ? 'true' : 'false' ?>"
                   data-verified="<?= $cand['is_verified'] ? 'true' : 'false' ?>"
                   data-edu="<?= htmlspecialchars($cand['education']) ?>"
                   data-location="<?= htmlspecialchars($cand['location']) ?>"
                   data-gotra="<?= htmlspecialchars($cand['gotra']) ?>"
                   data-guna="<?= (int)$cand['guna_score'] ?>"
                   data-phone="<?= htmlspecialchars($cand['phone']) ?>"
                   data-father="<?= htmlspecialchars($cand['father_info']) ?>">
            
            <!-- Top Main Info Flex Row -->
            <div class="flex items-start space-x-2.5">
              <!-- Left: Portrait Photo with Online Badge & Shield Watermark -->
              <div class="relative shrink-0 w-[94px] h-[104px] rounded-xl overflow-hidden bg-stone-100 border border-stone-200 photo-container-shield">
                <img src="<?= htmlspecialchars($cand['photo']) ?>" 
                     alt="<?= htmlspecialchars($cand['name']) ?>" 
                     class="w-full h-full object-cover select-none pointer-events-none" 
                     draggable="false" 
                     oncontextmenu="return false;"
                     onerror="this.src='/uploads/photos/user_<?= ($cand['gender'] === 'female') ? '20' : '10' ?>_photo_1.svg'">
                
                <!-- Online Pill Badge -->
                <?php if ($cand['is_online']): ?>
                <div class="absolute top-1 left-1 bg-white/95 backdrop-blur-xs px-1.5 py-0.5 rounded-full flex items-center space-x-1 shadow-xs border border-emerald-300 z-12">
                  <span class="w-2 h-2 rounded-full bg-emerald-500 live-pulse-beacon"></span>
                  <span class="text-[8.5px] font-extrabold text-emerald-800 leading-none">ऑनलाइन</span>
                </div>
                <?php endif; ?>
                
                <!-- Security Watermark Overlay -->
                <div class="photo-watermark-overlay">
                  <span class="photo-watermark-text row-top">DHEERAJA • <?= htmlspecialchars($cand['matrimony_id']) ?></span>
                  <span class="photo-watermark-text row-mid"><?= htmlspecialchars($cand['caste_badge']) ?> • सुरक्षित</span>
                  <span class="photo-watermark-text row-bot">100% VERIFIED</span>
                </div>
                <!-- Security Pill -->
                <div class="photo-security-pill" title="धीरजा सुरक्षा वाटरमार्क">
                  <i class="fa-solid fa-shield-halved text-amber-300"></i>
                  <span><?= htmlspecialchars($cand['matrimony_id']) ?></span>
                </div>
              </div>

              <!-- Center: Candidate Details -->
              <div class="flex-1 min-w-0 pr-1">
                <!-- Name + Verified Badge + Matrimony ID + Guna Milan Badge -->
                <div class="flex flex-wrap items-center gap-1.5 mb-0.5">
                  <h3 class="text-sm font-extrabold text-stone-900 leading-none truncate"><?= htmlspecialchars($cand['name']) ?></h3>
                  <?php if ($cand['is_verified']): ?>
                  <span class="text-blue-600 text-xs" title="सत्यापित प्रोफाइल">
                    <i class="fa-solid fa-circle-check"></i>
                  </span>
                  <?php endif; ?>
                  <span class="bg-amber-100/90 text-amber-950 border border-amber-300 rounded px-1.5 py-0.5 text-[9px] font-black tracking-wide font-mono" title="बायोडाटा ID"><?= htmlspecialchars($cand['matrimony_id']) ?></span>
                  <span onclick="openKundaliModal('<?= addslashes($cand['name']) ?>', <?= (int)$cand['guna_score'] ?>, '<?= addslashes($cand['gotra']) ?>', '<?= addslashes($cand['caste_badge']) ?>', '<?= addslashes($cand['city']) ?>')" class="cursor-pointer bg-amber-50 text-amber-900 border border-amber-300 rounded-full px-1.5 py-0.5 text-[9px] font-bold flex items-center space-x-0.5 hover:bg-amber-100 transition shadow-2xs" title="36 गुण मिलान देखें">
                    <i class="fa-solid fa-dharmachakra text-[9px] text-amber-600"></i>
                    <span><?= (int)$cand['guna_score'] ?>/36 गुण मिलान</span>
                  </span>
                </div>

                <!-- Age & Height -->
                <p class="text-[11px] text-stone-600 leading-snug font-medium">
                  Age: <?= (int)$cand['age'] ?> <span class="text-stone-300">|</span> Height: <?= htmlspecialchars($cand['height_formatted']) ?>
                </p>

                <!-- Status Badges: Manglik, Profession, Income -->
                <div class="flex flex-wrap items-center gap-1 my-1">
                  <?php if ($cand['manglik_code'] === 'manglik'): ?>
                  <span class="inline-flex items-center gap-0.5 px-1.5 py-0.5 rounded-md bg-rose-50 text-rose-900 border border-rose-300 text-[9.5px] font-bold">
                    <i class="fa-solid fa-fire-flame-curved text-[8px] text-rose-600"></i>
                    <span>मांगलिक</span>
                  </span>
                  <?php elseif ($cand['manglik_code'] === 'anshik'): ?>
                  <span class="inline-flex items-center gap-0.5 px-1.5 py-0.5 rounded-md bg-amber-50 text-amber-900 border border-amber-300 text-[9.5px] font-bold">
                    <i class="fa-solid fa-scale-balanced text-[8px] text-amber-600"></i>
                    <span>आंशिक मांगलिक</span>
                  </span>
                  <?php else: ?>
                  <span class="inline-flex items-center gap-0.5 px-1.5 py-0.5 rounded-md bg-emerald-50 text-emerald-800 border border-emerald-200 text-[9.5px] font-bold">
                    <i class="fa-solid fa-circle-check text-[8px] text-emerald-600"></i>
                    <span>अमांगलिक</span>
                  </span>
                  <?php endif; ?>

                  <span class="inline-flex items-center gap-0.5 px-1.5 py-0.5 rounded-md bg-stone-100 text-stone-700 border border-stone-200 text-[9.5px] font-bold">
                    <i class="fa-solid fa-briefcase text-[8px] text-stone-600"></i>
                    <span><?= htmlspecialchars($cand['occupation_label']) ?></span>
                  </span>

                  <?php if ($cand['income_lpa'] > 0): ?>
                  <span class="inline-flex items-center gap-0.5 px-1.5 py-0.5 rounded-md bg-emerald-50 text-emerald-800 border border-emerald-200 text-[9.5px] font-bold">
                    <i class="fa-solid fa-indian-rupee-sign text-[8px] text-emerald-600"></i>
                    <span>₹ <?= $cand['income_lpa'] ?> LPA</span>
                  </span>
                  <?php endif; ?>
                </div>

                <!-- Education -->
                <p class="text-[11px] text-stone-600 leading-snug font-medium truncate">
                  Education: <?= htmlspecialchars($cand['education']) ?>
                </p>

                <!-- Location -->
                <p class="text-[11px] text-stone-600 leading-snug font-medium flex items-center space-x-1 mt-0.5">
                  <i class="fa-solid fa-location-dot text-rose-500 text-[10px]"></i>
                  <span class="truncate"><?= htmlspecialchars($cand['location']) ?></span>
                </p>

                <!-- Gotra -->
                <p class="text-[11px] text-stone-600 leading-snug font-medium flex items-center space-x-1">
                  <i class="fa-solid fa-tree text-emerald-700 text-[10px]"></i>
                  <span>Gotra: <?= htmlspecialchars($cand['gotra']) ?> (<?= htmlspecialchars($cand['caste_badge']) ?> समाज)</span>
                </p>
              </div>

              <!-- Right: Top Icons & Status Indicators -->
              <div class="flex flex-col items-end space-y-1 shrink-0">
                <div class="flex items-center space-x-1 text-stone-500">
                  <button onclick="openKundaliModal('<?= addslashes($cand['name']) ?>', <?= (int)$cand['guna_score'] ?>, '<?= addslashes($cand['gotra']) ?>', '<?= addslashes($cand['caste_badge']) ?>', '<?= addslashes($cand['city']) ?>')" class="w-6 h-6 flex items-center justify-center text-purple-600 hover:bg-purple-50 rounded-full transition" title="कुंडली चक्र">
                    <i class="fa-solid fa-circle-notch text-xs"></i>
                  </button>
                  <button onclick="shareProfile('<?= addslashes($cand['name']) ?>', '<?= addslashes($cand['city']) ?>')" class="w-6 h-6 flex items-center justify-center text-stone-600 hover:bg-stone-100 rounded-full transition" title="शेयर करें">
                    <i class="fa-solid fa-share-nodes text-xs"></i>
                  </button>
                  <button onclick="openProfileActions('<?= addslashes($cand['name']) ?>', <?= (int)$cand['id'] ?>)" class="w-6 h-6 flex items-center justify-center text-stone-600 hover:bg-stone-100 rounded-full transition" title="और विकल्प">
                    <i class="fa-solid fa-ellipsis-vertical text-xs"></i>
                  </button>
                </div>

                <?php if ($cand['is_vip']): ?>
                <div class="flex items-center space-x-1 text-amber-700 font-bold text-[9.5px]">
                  <i class="fa-solid fa-crown text-[9px] text-amber-500"></i>
                  <span>Premium Member</span>
                </div>
                <?php endif; ?>

                <div class="flex flex-col items-end text-right">
                  <span class="text-[9.5px] font-semibold text-teal-800 flex items-center space-x-1">
                    <i class="fa-solid fa-eye text-[9px] text-teal-600"></i>
                    <span><?= $cand['view_count'] ?> views</span>
                  </span>
                  <span class="text-[8px] text-stone-400 font-medium leading-none"><?= htmlspecialchars($cand['activity_time']) ?></span>
                </div>
              </div>
            </div>

            <!-- Royal Golden Biodata 1-Click Ribbon -->
            <div class="mt-2 pt-1.5 border-t border-amber-200/70">
              <button onclick="openRoyalBiodataModal('<?= addslashes($cand['name']) ?>')" class="w-full py-1.5 px-2.5 rounded-xl bg-gradient-to-r from-amber-100 via-amber-50 to-amber-200 hover:from-amber-200 hover:to-amber-300 border border-amber-300 text-amber-950 font-bold text-[11px] flex items-center justify-between shadow-2xs transition active:scale-98" title="सुनहरे बॉर्डर वाला बायोडाटा व 1-क्लिक PDF डाउनलोड">
                <span class="flex items-center space-x-1.5">
                  <i class="fa-solid fa-crown text-amber-600 text-xs"></i>
                  <span>👑 रॉयल बायोडाटा (सुनहरा बॉर्डर)</span>
                </span>
                <span class="bg-[#064E3B] text-amber-200 text-[10px] px-2 py-0.5 rounded-full font-extrabold flex items-center space-x-1 shadow-xs">
                  <i class="fa-solid fa-cloud-arrow-down text-[10px]"></i>
                  <span>⚡ 1-क्लिक PDF</span>
                </span>
              </button>
            </div>

            <!-- Bottom: 5 Action Buttons in Horizontal Row -->
            <div class="mt-2.5 pt-2 border-t border-stone-100 flex items-center space-x-1.5">
              <button onclick="sendInterest(this, '<?= addslashes($cand['name']) ?>')" class="card-btn btn-interest" title="रुचि भेजें (Send Interest)">
                <i class="fa-solid fa-heart text-[10px]"></i>
                <span>Interest</span>
              </button>
              <button onclick="openChatModal('<?= addslashes($cand['name']) ?>', '<?= addslashes($cand['photo']) ?>', <?= $cand['is_online'] ? 'true' : 'false' ?>)" class="card-btn btn-chat" title="चैट करें (Chat)">
                <i class="fa-solid fa-comment-dots text-[10px]"></i>
                <span>Chat</span>
              </button>
              <button onclick="openKundaliModal('<?= addslashes($cand['name']) ?>', <?= (int)$cand['guna_score'] ?>, '<?= addslashes($cand['gotra']) ?>', '<?= addslashes($cand['caste_badge']) ?>', '<?= addslashes($cand['city']) ?>')" class="card-btn btn-kundali" title="36 गुण मिलान (Kundali Milan)">
                <i class="fa-solid fa-dharmachakra text-[10px]"></i>
                <span>Kundali</span>
              </button>
              <button onclick="handleCardWhatsappClick('<?= addslashes($cand['name']) ?>', '<?= addslashes($cand['phone']) ?>', '<?= addslashes($cand['father_info']) ?>', '<?= addslashes($cand['photo']) ?>')" class="card-btn btn-contact" title="WhatsApp पर बात करें (VIP 🔒)">
                <i class="fa-brands fa-whatsapp text-[10px]"></i>
                <span>WhatsApp 🔒</span>
              </button>
              <button onclick="skipCard(this, '<?= addslashes($cand['name']) ?>')" class="card-btn btn-skip" title="छोड़ें (Skip)">
                <i class="fa-solid fa-xmark text-[10px]"></i>
                <span>Skip</span>
              </button>
            </div>
          </article>
        <?php endforeach; ?>
      <?php endif; ?>

    </section>

    <!-- 6. PAGINATION BAR (Exact Recreation from Reference Image) -->
    <section class="px-3 pb-3">
      <div class="flex items-center justify-between space-x-2">
        <!-- Previous Page Button -->
        <button onclick="changePage(-1)" id="btnPrevPage" class="flex-1 py-2.5 px-3 rounded-xl bg-gradient-to-r from-[#064E3B] to-[#047857] hover:from-[#047857] hover:to-[#059669] text-white text-[11px] font-extrabold flex items-center justify-center space-x-1.5 shadow-md border border-emerald-600/50 transition-all active:scale-95 disabled:opacity-50 disabled:cursor-not-allowed">
          <i class="fa-solid fa-arrow-left text-[10px]"></i>
          <span>Previous Page</span>
        </button>

        <!-- Current Page Pill -->
        <div class="px-3.5 py-2 rounded-xl bg-amber-50 border border-amber-300 text-amber-950 font-extrabold text-xs shadow-2xs whitespace-nowrap">
          <span id="pageIndicator">Page 1 of 15</span>
        </div>

        <!-- Next Page Button -->
        <button onclick="changePage(1)" id="btnNextPage" class="flex-1 py-2.5 px-3 rounded-xl bg-gradient-to-r from-[#064E3B] to-[#047857] hover:from-[#047857] hover:to-[#059669] text-white text-[11px] font-extrabold flex items-center justify-center space-x-1.5 shadow-md border border-emerald-600/50 transition-all active:scale-95">
          <span>Next Page</span>
          <i class="fa-solid fa-arrow-right text-[10px]"></i>
        </button>
      </div>
    </section>

    <!-- 7. BOTTOM APP BAR (Dock Menu: 5 Distinct 3D Buttons: Home, Table, Chats, Interests, Profile) -->
    <nav class="sticky bottom-0 left-0 right-0 bg-gradient-to-t from-[#02281e] via-[#064E3B] to-[#085a44] text-white px-2.5 py-2 flex items-center justify-between gap-1.5 z-40 border-t-2 border-[#D4AF37]/60 shadow-[0_-8px_25px_rgba(0,0,0,0.4)] select-none">
      <!-- 1. Home Button -->
      <a href="/cover" class="dock-nav-btn" title="होम पेज (Home)">
        <i class="fa-solid fa-house text-sm mb-1 text-emerald-200"></i>
        <span class="dock-label text-[10px]">होम</span>
      </a>

      <!-- 2. Table / Dashboard (ACTIVE 3D Royal Gold Button) -->
      <a href="/matches" class="dock-nav-btn active" title="तालिका (Matches / Dashboard)">
        <i class="fa-solid fa-table-cells text-base mb-1"></i>
        <span class="dock-label text-[10px]">तालिका</span>
      </a>

      <!-- 3. Chats Button (with Badge '2') -->
      <button onclick="openChatModal('अंजलि सिंह (Anjali)', '/assets/images/match_anjali.jpg', true)" class="dock-nav-btn" title="संदेश (Chats)">
        <div class="relative flex items-center justify-center">
          <i class="fa-solid fa-comments text-sm mb-1 text-emerald-200"></i>
          <span class="dock-badge">2</span>
        </div>
        <span class="dock-label text-[10px]">चैट</span>
      </button>

      <!-- 4. Interests Button (with Badge '5') -->
      <button onclick="filterByCategory('interests_received')" class="dock-nav-btn" title="रुचियां (Interests)">
        <div class="relative flex items-center justify-center">
          <i class="fa-solid fa-heart text-sm mb-1 text-emerald-200"></i>
          <span class="dock-badge">5</span>
        </div>
        <span class="dock-label text-[10px]">रुचि</span>
      </button>

      <!-- 5. Profile Button -->
      <a href="/biodata" class="dock-nav-btn" title="मेरा बायोडाटा (Profile)">
        <i class="fa-solid fa-user-circle text-sm mb-1 text-emerald-200"></i>
        <span class="dock-label text-[10px]">बायोडाटा</span>
      </a>
    </nav>

    <!-- 8. BOTTOM EXTRA FEATURE RIBBON ("Key Features Added") -->
    <footer class="w-full bg-[#FAF7EE] border-t border-[#E6C254]/60 px-3 py-2 flex items-center justify-between text-stone-800 text-[10px] font-bold select-none z-30">
      <!-- Left: Key Features Added Crown Badge -->
      <div class="flex items-center space-x-1.5 shrink-0 pr-2 border-r border-amber-200">
        <i class="fa-solid fa-crown text-amber-600 text-xs"></i>
        <span class="font-extrabold text-stone-900 tracking-tight">Key Features</span>
      </div>

      <!-- Right: Feature Actions -->
      <div class="flex items-center justify-around flex-1 px-1 space-x-1.5">
        <!-- Kundali Milan -->
        <button onclick="openKundaliModal('Priya Sharma', 28, 'Kashyap', 'Brahmin', 'Indore')" class="ribbon-btn" title="36 गुण मिलान">
          <i class="fa-solid fa-dharmachakra text-xs text-amber-700"></i>
          <span class="text-[8.5px] mt-0.5 font-bold text-stone-800">Kundali</span>
        </button>

        <!-- Download PDF -->
        <button onclick="downloadPdfProfile('Priya Sharma')" class="ribbon-btn" title="डाउनलोड PDF">
          <i class="fa-solid fa-file-pdf text-xs text-rose-700"></i>
          <span class="text-[8.5px] mt-0.5 font-bold text-stone-800">PDF</span>
        </button>

        <!-- Report Profile -->
        <button onclick="openReportModal('Priya Sharma')" class="ribbon-btn" title="रिपोर्ट प्रोफाइल">
          <i class="fa-solid fa-triangle-exclamation text-xs text-amber-600"></i>
          <span class="text-[8.5px] mt-0.5 font-bold text-stone-800">Report</span>
        </button>

        <!-- Block Profile -->
        <button onclick="openBlockModal('Priya Sharma')" class="ribbon-btn" title="ब्लॉक प्रोफाइल">
          <i class="fa-solid fa-ban text-xs text-stone-600"></i>
          <span class="text-[8.5px] mt-0.5 font-bold text-stone-800">Block</span>
        </button>
      </div>
    </footer>

  </main>

  <!-- ==================== MODAL 1: KUNDALI MILAN (36 गुण मिलान) ==================== -->
  <div id="kundaliModal" class="modal-backdrop fixed inset-0 z-[150] bg-black/60 backdrop-blur-xs flex items-center justify-center p-3">
    <div class="bg-white rounded-3xl max-w-sm w-full overflow-hidden shadow-2xl border-2 border-amber-400 flex flex-col max-h-[90vh] animate-bounce-in">
      <!-- Modal Header -->
      <div class="bg-gradient-to-r from-[#064E3B] via-[#047857] to-[#033626] text-white p-4 flex items-center justify-between border-b-2 border-amber-300">
        <div class="flex items-center space-x-2.5">
          <div class="w-9 h-9 rounded-full bg-amber-400/20 border border-amber-300 flex items-center justify-center text-amber-300 text-sm">
            <i class="fa-solid fa-dharmachakra"></i>
          </div>
          <div>
            <h3 class="font-cinzel text-sm font-bold text-amber-200">वैदिक अष्टकूट कुंडली मिलान</h3>
            <p class="text-[11px] text-emerald-100 font-sans" id="kmCandidateName">Priya Sharma & आप</p>
          </div>
        </div>
        <button onclick="closeKundaliModal()" class="w-7 h-7 rounded-full bg-white/10 hover:bg-white/20 flex items-center justify-center text-white text-xs transition">
          <i class="fa-solid fa-xmark"></i>
        </button>
      </div>

      <!-- Modal Body -->
      <div class="p-4 overflow-y-auto space-y-3 text-stone-800 text-xs">
        <!-- Score Highlights Banner -->
        <div class="bg-gradient-to-br from-amber-50 to-orange-50 border border-amber-300 rounded-2xl p-3 flex items-center justify-between">
          <div>
            <span class="text-[10px] text-amber-800 font-bold uppercase tracking-wider block">कुल गुण मिलान स्कोर</span>
            <div class="flex items-baseline space-x-1.5 mt-0.5">
              <span class="text-3xl font-extrabold text-[#064E3B]" id="kmScoreNumber">28</span>
              <span class="text-sm font-bold text-stone-500">/ 36 गुण</span>
            </div>
            <span class="inline-block mt-1 px-2 py-0.5 rounded-full bg-emerald-100 text-emerald-800 text-[10px] font-extrabold" id="kmScoreVerdict">
              अति उत्तम मिलान (Highly Auspicious)
            </span>
          </div>
          <div class="w-16 h-16 rounded-full border-4 border-amber-400 flex flex-col items-center justify-center bg-white shadow-inner">
            <span class="text-[10px] font-bold text-stone-500">अनुकूलता</span>
            <span class="text-sm font-extrabold text-amber-600" id="kmPercent">78%</span>
          </div>
        </div>

        <!-- Ashtakoot Milan Table -->
        <div>
          <h4 class="font-bold text-stone-900 text-xs mb-1.5 flex items-center justify-between">
            <span>अष्टकूट मिलान विवरण (8 Kootas)</span>
            <span class="text-[10px] font-normal text-stone-500">प्राप्तांक / पूर्णांक</span>
          </h4>
          <div class="bg-stone-50 rounded-xl border border-stone-200 overflow-hidden">
            <table class="w-full text-left text-[11px]">
              <tbody class="divide-y divide-stone-200">
                <tr class="hover:bg-amber-50/50">
                  <td class="py-1.5 px-2.5 font-bold text-stone-800">1. वर्ण (Varna)</td>
                  <td class="py-1.5 px-2 text-stone-600 text-[10px]">आध्यात्मिक अनुकूलता</td>
                  <td class="py-1.5 px-2.5 text-right font-extrabold text-emerald-700">1 / 1</td>
                </tr>
                <tr class="hover:bg-amber-50/50">
                  <td class="py-1.5 px-2.5 font-bold text-stone-800">2. वश्य (Vashya)</td>
                  <td class="py-1.5 px-2 text-stone-600 text-[10px]">पारस्परिक आकर्षण</td>
                  <td class="py-1.5 px-2.5 text-right font-extrabold text-emerald-700">2 / 2</td>
                </tr>
                <tr class="hover:bg-amber-50/50">
                  <td class="py-1.5 px-2.5 font-bold text-stone-800">3. तारा (Tara)</td>
                  <td class="py-1.5 px-2 text-stone-600 text-[10px]">भाग्य व स्वास्थ्य</td>
                  <td class="py-1.5 px-2.5 text-right font-extrabold text-emerald-700">3 / 3</td>
                </tr>
                <tr class="hover:bg-amber-50/50">
                  <td class="py-1.5 px-2.5 font-bold text-stone-800">4. योनि (Yoni)</td>
                  <td class="py-1.5 px-2 text-stone-600 text-[10px]">शारीरिक व मानसिक सामंजस्य</td>
                  <td class="py-1.5 px-2.5 text-right font-extrabold text-amber-700">2 / 4</td>
                </tr>
                <tr class="hover:bg-amber-50/50">
                  <td class="py-1.5 px-2.5 font-bold text-stone-800">5. ग्रहमैत्री (Graha Maitri)</td>
                  <td class="py-1.5 px-2 text-stone-600 text-[10px]">मित्रता व वैचारिक एकता</td>
                  <td class="py-1.5 px-2.5 text-right font-extrabold text-emerald-700">5 / 5</td>
                </tr>
                <tr class="hover:bg-amber-50/50">
                  <td class="py-1.5 px-2.5 font-bold text-stone-800">6. गण (Gana)</td>
                  <td class="py-1.5 px-2 text-stone-600 text-[10px]">स्वभाव व व्यवहार</td>
                  <td class="py-1.5 px-2.5 text-right font-extrabold text-emerald-700">5 / 6</td>
                </tr>
                <tr class="hover:bg-amber-50/50">
                  <td class="py-1.5 px-2.5 font-bold text-stone-800">7. भकूट (Bhakoot)</td>
                  <td class="py-1.5 px-2 text-stone-600 text-[10px]">प्रेम, वंश व समृद्धि</td>
                  <td class="py-1.5 px-2.5 text-right font-extrabold text-emerald-700">7 / 7</td>
                </tr>
                <tr class="hover:bg-amber-50/50">
                  <td class="py-1.5 px-2.5 font-bold text-stone-800">8. नाड़ी (Nadi)</td>
                  <td class="py-1.5 px-2 text-stone-600 text-[10px]">आनुवंशिक स्वास्थ्य व संतति</td>
                  <td class="py-1.5 px-2.5 text-right font-extrabold text-emerald-700">8 / 8</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>

        <!-- Manglik Match -->
        <div class="p-2.5 rounded-xl bg-emerald-50 border border-emerald-200 flex items-start space-x-2">
          <i class="fa-solid fa-shield-heart text-emerald-700 text-sm mt-0.5"></i>
          <div>
            <span class="font-bold text-emerald-900 block text-[11px]">मांगलिक स्थिति: दोष रहित (Compatible)</span>
            <p class="text-[10px] text-emerald-800 mt-0.5">दोनों कुंडलियों में मांगलिक दोष सामंजस्यपूर्ण है। विवाह हेतु पूर्णतः शास्त्रसम्मत है।</p>
          </div>
        </div>
      </div>

      <!-- Modal Footer -->
      <div class="p-3 bg-stone-50 border-t border-stone-200 flex items-center space-x-2">
        <button onclick="downloadKundaliReport()" class="flex-1 py-2 px-3 rounded-xl bg-[#064E3B] text-white text-xs font-bold hover:bg-[#055F46] transition flex items-center justify-center space-x-1.5 shadow-sm">
          <i class="fa-solid fa-file-arrow-down text-xs text-amber-300"></i>
          <span>कुंडली रिपोर्ट डाउनलोड करें (PDF)</span>
        </button>
        <button onclick="closeKundaliModal()" class="py-2 px-3 rounded-xl bg-stone-200 text-stone-700 text-xs font-bold hover:bg-stone-300 transition">
          बंद करें
        </button>
      </div>
    </div>
  </div>

  <!-- ==================== MODAL 2: CONTACT / ACCEPT DETAILS ==================== -->
  <div id="contactModal" class="modal-backdrop fixed inset-0 z-[150] bg-black/60 backdrop-blur-xs flex items-center justify-center p-3">
    <div class="bg-white rounded-3xl max-w-sm w-full overflow-hidden shadow-2xl border-2 border-emerald-400 flex flex-col animate-bounce-in">
      <!-- Header -->
      <div class="bg-gradient-to-r from-[#064E3B] via-[#047857] to-[#033626] text-white p-4 flex items-center justify-between border-b-2 border-amber-300">
        <div class="flex items-center space-x-2.5">
          <div class="w-9 h-9 rounded-full bg-emerald-400/20 border border-emerald-300 flex items-center justify-center text-emerald-200 text-sm">
            <i class="fa-solid fa-address-book"></i>
          </div>
          <div>
            <h3 class="font-cinzel text-sm font-bold text-amber-200">सत्यापित संपर्क विवरण</h3>
            <p class="text-[11px] text-emerald-100 font-sans" id="contactCandidateName">Priya Sharma</p>
          </div>
        </div>
        <button onclick="closeContactModal()" class="w-7 h-7 rounded-full bg-white/10 hover:bg-white/20 flex items-center justify-center text-white text-xs transition">
          <i class="fa-solid fa-xmark"></i>
        </button>
      </div>

      <!-- Body -->
      <div class="p-4 space-y-3 text-stone-800 text-xs">
        <div class="p-3 rounded-2xl bg-emerald-50/70 border border-emerald-200">
          <span class="text-[10px] text-emerald-800 font-bold uppercase tracking-wider block">अभिभावक / संपर्क व्यक्ति</span>
          <p class="text-sm font-extrabold text-stone-900 mt-0.5" id="contactGuardianName">श्री रमाकांत शर्मा (पिताजी)</p>
          <p class="text-[11px] text-stone-600 mt-0.5" id="contactLocationText">📍 Indore, Madhya Pradesh</p>
        </div>

        <div class="p-3 rounded-2xl bg-amber-50/60 border border-amber-200 flex items-center justify-between">
          <div>
            <span class="text-[10px] text-amber-800 font-bold uppercase tracking-wider block">सत्यापित मोबाइल नंबर</span>
            <p class="text-base font-extrabold text-[#064E3B] font-mono tracking-wider mt-0.5" id="contactPhoneNumber">+91 98260 •••••</p>
            <div id="contactVipStatusBadge" class="text-[10.5px] text-amber-800 font-bold flex items-center space-x-1 mt-0.5">
              <i class="fa-solid fa-lock text-amber-600"></i>
              <span>VIP अनलॉक आवश्यक</span>
            </div>
          </div>
          <button onclick="copyPhone()" class="px-2.5 py-1.5 rounded-lg bg-white border border-amber-300 text-amber-800 text-[10px] font-bold hover:bg-amber-100 transition shadow-2xs cursor-pointer">
            <i class="fa-solid fa-copy mr-1"></i> कॉपी करें
          </button>
        </div>

        <div class="p-2.5 rounded-xl bg-stone-50 border border-stone-200 text-[11px] text-stone-600 space-y-1">
          <p><i class="fa-regular fa-clock text-emerald-600 mr-1.5"></i><strong>बातचीत का अनुकूल समय:</strong> सुबह 10:00 से सायं 07:00 बजे तक</p>
          <p><i class="fa-solid fa-shield text-emerald-600 mr-1.5"></i><strong>गोपनीयता:</strong> यह संपर्क धीरजा मैट्रिमोनी के नियमों के अंतर्गत सुरक्षित है।</p>
        </div>

        <!-- 2 Big Action Buttons: WhatsApp & Direct Call -->
        <div class="grid grid-cols-2 gap-2 pt-1">
          <button id="btnWhatsappCall" type="button" onclick="handleWhatsappClickFromContactModal()" class="py-2.5 px-3 rounded-xl bg-[#25D366] hover:bg-[#1EBE5D] text-white text-xs font-bold flex items-center justify-center space-x-1.5 shadow-md transition active:scale-95 cursor-pointer">
            <i class="fa-brands fa-whatsapp text-sm"></i>
            <span>WhatsApp 🔒</span>
          </button>
          <button id="btnPhoneCall" type="button" onclick="handlePhoneClickFromContactModal()" class="py-2.5 px-3 rounded-xl bg-[#064E3B] hover:bg-[#055F46] text-white text-xs font-bold flex items-center justify-center space-x-1.5 shadow-md transition active:scale-95 cursor-pointer">
            <i class="fa-solid fa-phone text-xs"></i>
            <span>सीधे कॉल 🔒</span>
          </button>
        </div>

        <!-- Free In-App Chat Alternative -->
        <div class="pt-2 border-t border-stone-200">
          <button type="button" onclick="closeContactModal(); openChatModal(currentContactData.name, currentContactData.photo, true);" class="w-full py-2 px-3 rounded-xl bg-emerald-50 hover:bg-emerald-100 border border-emerald-300 text-[#064E3B] font-extrabold text-[11px] flex items-center justify-center space-x-1.5 transition cursor-pointer">
            <i class="fa-solid fa-comment-dots text-emerald-700"></i>
            <span>💬 ऐप के अंदर मुफ्त में चैट करें (Free In-App Chat)</span>
          </button>
        </div>
      </div>
    </div>
  </div>

  <!-- ==================== MODAL 2.5: VIP WHATSAPP & CONTACT UNLOCK PAYWALL ==================== -->
  <div id="vipWhatsappPayModal" class="modal-backdrop fixed inset-0 z-[155] bg-black/75 backdrop-blur-xs flex items-center justify-center p-3">
    <div class="bg-white rounded-3xl max-w-sm w-full overflow-hidden shadow-2xl border-2 border-amber-400 flex flex-col animate-bounce-in">
      <!-- Header -->
      <div class="bg-gradient-to-r from-emerald-950 via-emerald-900 to-emerald-950 text-white p-3.5 flex items-center justify-between border-b-2 border-amber-400">
        <div class="flex items-center space-x-2">
          <div class="w-9 h-9 rounded-xl bg-gradient-to-br from-amber-400 to-amber-600 text-emerald-950 flex items-center justify-center font-black text-base shadow-xs">
            <i class="fa-brands fa-whatsapp text-lg"></i>
          </div>
          <div>
            <div class="text-[9.5px] uppercase font-black tracking-wider text-amber-300">धीरजा VIP सेवा • डायरेक्ट संपर्क</div>
            <h3 class="font-cinzel text-xs font-bold text-white">WhatsApp नंबर अनलॉक करें</h3>
          </div>
        </div>
        <button onclick="closeVipWhatsappModal()" class="w-7 h-7 rounded-full bg-white/10 hover:bg-white/20 flex items-center justify-center text-white text-xs transition cursor-pointer">
          <i class="fa-solid fa-xmark"></i>
        </button>
      </div>

      <!-- Body -->
      <div class="p-3.5 space-y-3 text-stone-800 text-xs">
        <!-- Target Candidate Brief -->
        <div class="flex items-center space-x-2.5 p-2.5 rounded-2xl bg-emerald-50/80 border border-emerald-200">
          <img id="vipTargetPhoto" src="/assets/images/match_priya.jpg" alt="Target" class="w-12 h-12 rounded-xl object-cover border border-amber-300 shrink-0">
          <div class="min-w-0 flex-1">
            <h4 class="text-sm font-black text-stone-900 leading-tight truncate" id="vipTargetName">Priya Sharma</h4>
            <p class="text-[10.5px] text-stone-600 leading-tight mt-0.5 truncate" id="vipTargetFather">श्री रमाकांत शर्मा (पिताजी)</p>
            <div class="flex items-center space-x-1 mt-1">
              <span class="text-[9.5px] font-mono text-emerald-800 font-extrabold bg-emerald-100 px-1.5 py-0.5 rounded border border-emerald-300">
                🔒 WhatsApp: <span id="vipMaskedPhone">+91 98260 •••••</span>
              </span>
            </div>
          </div>
        </div>

        <!-- Why VIP explanation -->
        <div class="bg-amber-50/80 rounded-2xl p-2.5 border border-amber-300 space-y-1">
          <div class="text-[11px] font-extrabold text-amber-950 flex items-center gap-1.5">
            <i class="fa-solid fa-lock text-amber-600"></i>
            <span>व्हाट्सएप पर बात करना VIP सर्विस क्यों है?</span>
          </div>
          <p class="text-[10px] text-stone-600 leading-relaxed">
            परिवारों और कन्या पक्ष की पूर्ण सुरक्षा हेतु सीधा WhatsApp व कॉलिंग नंबर केवल अधिकृत VIP सदस्यों को ही दिया जाता है।
          </p>
        </div>

        <!-- Plan Options Selection -->
        <div class="space-y-1.5">
          <div class="text-[10px] font-extrabold text-stone-700 uppercase tracking-wider">अनलॉक प्लान चुनें (1-क्लिक Pay):</div>
          
          <!-- Plan Option 1: ₹499 -->
          <label class="flex items-center justify-between p-2.5 rounded-xl border-2 border-emerald-500 bg-emerald-50/50 cursor-pointer transition hover:bg-emerald-50">
            <div class="flex items-center space-x-2">
              <input type="radio" name="vip_plan_choice" value="499" checked class="text-emerald-700 focus:ring-emerald-500">
              <div>
                <span class="text-xs font-black text-emerald-950 block">सिल्वर पास (Silver Pass)</span>
                <span class="text-[10px] text-stone-500">5 परिवारों के सीधे WhatsApp नंबर अनलॉक</span>
              </div>
            </div>
            <div class="text-right">
              <span class="text-xs font-black text-emerald-900 block">₹499</span>
              <span class="text-[9px] text-stone-400 line-through">₹999</span>
            </div>
          </label>

          <!-- Plan Option 2: ₹999 -->
          <label class="flex items-center justify-between p-2.5 rounded-xl border border-stone-200 bg-white cursor-pointer transition hover:border-amber-400 hover:bg-amber-50/30">
            <div class="flex items-center space-x-2">
              <input type="radio" name="vip_plan_choice" value="999" class="text-emerald-700 focus:ring-emerald-500">
              <div>
                <span class="text-xs font-black text-stone-900 block flex items-center gap-1">
                  <span>गोल्ड पास (Gold Pass)</span>
                  <span class="text-[8.5px] bg-amber-400 text-emerald-950 px-1 rounded font-bold">लोकप्रिय</span>
                </span>
                <span class="text-[10px] text-stone-500">15 WhatsApp नंबर + 3 माह VIP मुहर</span>
              </div>
            </div>
            <div class="text-right">
              <span class="text-xs font-black text-amber-700 block">₹999</span>
              <span class="text-[9px] text-stone-400 line-through">₹1999</span>
            </div>
          </label>
        </div>

        <!-- 1-Click Pay & Unlock Button -->
        <button type="button" onclick="executeVipUnlockPayment()" class="w-full py-2.5 px-3 rounded-xl bg-gradient-to-r from-amber-400 via-amber-500 to-amber-600 text-emerald-950 font-black text-xs shadow-md transition active:scale-95 flex items-center justify-center space-x-1.5 cursor-pointer">
          <i class="fa-solid fa-lock-open text-xs"></i>
          <span>Pay करें व WhatsApp तुरंत खोलें (UPI / QR)</span>
        </button>

        <!-- FREE Alternative Callout -->
        <div class="pt-1.5 border-t border-stone-200 text-center">
          <p class="text-[10.5px] text-stone-600 mb-1">
            💡 <strong>बिना पेमेंट किए बात करना चाहते हैं?</strong>
          </p>
          <button type="button" onclick="switchFromPayToFreeChat()" class="w-full py-2 px-3 rounded-xl bg-stone-100 hover:bg-emerald-50 border border-emerald-300 text-emerald-900 font-extrabold text-[11px] flex items-center justify-center space-x-1.5 transition cursor-pointer">
            <i class="fa-solid fa-comment-dots text-emerald-700"></i>
            <span>💬 ऐप के अंदर मुफ्त में चैट करें (Free In-App Chat)</span>
          </button>
        </div>
      </div>
    </div>
  </div>

  <!-- ==================== MODAL 3: INSTANT CHAT MODAL ==================== -->
  <div id="chatModal" class="modal-backdrop fixed inset-0 z-[150] bg-black/60 backdrop-blur-xs flex items-center justify-center p-3">
    <div class="bg-white rounded-3xl max-w-sm w-full overflow-hidden shadow-2xl border-2 border-emerald-400 flex flex-col h-[520px] max-h-[90vh] animate-bounce-in">
      <!-- Chat Header -->
      <div class="bg-gradient-to-r from-[#064E3B] to-[#043E2F] text-white p-3 flex items-center justify-between border-b border-emerald-800 shrink-0">
        <div class="flex items-center space-x-2.5">
          <div class="relative w-9 h-9 rounded-full overflow-hidden border border-amber-300">
            <img id="chatHeaderImg" src="/assets/images/match_priya.jpg" alt="Candidate" class="w-full h-full object-cover">
          </div>
          <div>
            <h3 class="text-xs font-extrabold text-white flex items-center space-x-1" id="chatHeaderName">
              <span>Priya Sharma</span>
              <i class="fa-solid fa-circle-check text-blue-400 text-[10px]"></i>
            </h3>
            <span class="text-[9px] text-emerald-200 flex items-center space-x-1" id="chatOnlineIndicator">
              <span class="w-1.5 h-1.5 rounded-full bg-emerald-400 animate-pulse"></span>
              <span>Online Now</span>
            </span>
          </div>
        </div>
        <div class="flex items-center space-x-2">
          <button onclick="openKundaliFromChat()" class="text-amber-300 hover:text-white text-xs px-2 py-1 rounded bg-white/10" title="कुंडली देखें">
            <i class="fa-solid fa-compass"></i>
          </button>
          <button onclick="closeChatModal()" class="w-7 h-7 rounded-full bg-white/10 hover:bg-white/20 flex items-center justify-center text-white text-xs transition">
            <i class="fa-solid fa-xmark"></i>
          </button>
        </div>
      </div>

      <!-- Chat Messages Scroll Area -->
      <div class="flex-1 p-3 overflow-y-auto space-y-2.5 bg-[#F7FAF7] text-xs" id="chatMessagesBox">
        <div class="text-center my-1">
          <span class="px-2.5 py-0.5 rounded-full bg-stone-200/70 text-stone-600 text-[9px] font-semibold">Today</span>
        </div>
        <!-- Incoming message -->
        <div class="flex items-start space-x-1.5 max-w-[85%]">
          <div class="p-2.5 rounded-2xl rounded-tl-xs bg-white text-stone-800 shadow-2xs border border-stone-200 leading-relaxed text-[11px]">
            नमस्ते! धीरजा मैट्रिमोनी पर आपकी प्रोफाइल देखी, पारिवारिक विवरण बहुत अच्छा लगा। 🙏
            <span class="text-[8.5px] text-stone-400 block text-right mt-1">10:18 AM</span>
          </div>
        </div>
        <!-- Outgoing message -->
        <div class="flex items-start justify-end space-x-1.5 max-w-[85%] ml-auto">
          <div class="p-2.5 rounded-2xl rounded-tr-xs bg-[#064E3B] text-white shadow-2xs leading-relaxed text-[11px]">
            धन्यवाद जी! क्या हम दोनों परिवारों की बातचीत आगे बढ़ा सकते हैं?
            <span class="text-[8.5px] text-emerald-200 block text-right mt-1">10:20 AM <i class="fa-solid fa-check-double text-[8px] text-emerald-300"></i></span>
          </div>
        </div>
      </div>

      <!-- Quick Matrimonial Icebreakers -->
      <div class="px-2 py-1.5 bg-white border-t border-stone-100 flex items-center space-x-1 overflow-x-auto text-[9.5px] shrink-0">
        <button onclick="sendQuickReply('बायोडाटा पसंद आया! 😊')" class="px-2 py-1 rounded-full bg-emerald-50 text-emerald-800 border border-emerald-200 hover:bg-emerald-100 whitespace-nowrap">
          बायोडाटा पसंद आया! 😊
        </button>
        <button onclick="sendQuickReply('कुंडली मिलान देखें? 🧭')" class="px-2 py-1 rounded-full bg-amber-50 text-amber-800 border border-amber-200 hover:bg-amber-100 whitespace-nowrap">
          कुंडली मिलान देखें? 🧭
        </button>
        <button onclick="sendQuickReply('पारिवारिक कॉल कब करें? 📞')" class="px-2 py-1 rounded-full bg-stone-100 text-stone-700 hover:bg-stone-200 whitespace-nowrap">
          पारिवारिक कॉल कब करें? 📞
        </button>
      </div>

      <!-- Chat Input Area -->
      <div class="p-2.5 bg-white border-t border-stone-200 flex items-center space-x-2 shrink-0">
        <input type="text" id="chatInput" placeholder="अपना संदेश लिखें..." class="flex-1 px-3 py-2 rounded-xl bg-stone-100 border border-stone-200 text-stone-900 text-xs focus:outline-none focus:border-emerald-600 focus:bg-white" onkeydown="if(event.key==='Enter') sendMessage()">
        <button onclick="sendMessage()" class="w-9 h-9 rounded-xl bg-[#064E3B] hover:bg-[#055F46] text-white flex items-center justify-center transition shrink-0 shadow-sm">
          <i class="fa-solid fa-paper-plane text-xs"></i>
        </button>
      </div>
    </div>
  </div>

  <!-- ==================== MODAL 4: NOTIFICATIONS DRAWER ==================== -->
  <div id="notificationsModal" class="modal-backdrop fixed inset-0 z-[150] bg-black/60 backdrop-blur-xs flex items-start justify-center p-3 pt-12">
    <div class="bg-white rounded-3xl max-w-sm w-full overflow-hidden shadow-2xl border-2 border-emerald-400 flex flex-col animate-bounce-in">
      <div class="bg-[#064E3B] text-white p-3.5 flex items-center justify-between">
        <div class="flex items-center space-x-2">
          <i class="fa-solid fa-bell text-amber-300"></i>
          <h3 class="text-xs font-bold">नवीनतम सूचनाएं (3 नई)</h3>
        </div>
        <button onclick="toggleNotificationsModal()" class="w-6 h-6 rounded-full bg-white/10 hover:bg-white/20 flex items-center justify-center text-white text-xs">
          <i class="fa-solid fa-xmark"></i>
        </button>
      </div>
      <div class="p-3 divide-y divide-stone-100 text-xs space-y-1">
        <div class="py-2 flex items-start space-x-2.5">
          <span class="w-7 h-7 rounded-full bg-rose-100 text-rose-600 flex items-center justify-center shrink-0 text-xs">
            <i class="fa-solid fa-heart"></i>
          </span>
          <div>
            <p class="font-bold text-stone-900 leading-tight">नेहा वर्मा ने आपकी प्रोफाइल में रुचि दिखाई</p>
            <span class="text-[10px] text-stone-400">2 घंटे पहले</span>
          </div>
        </div>
        <div class="py-2 flex items-start space-x-2.5">
          <span class="w-7 h-7 rounded-full bg-blue-100 text-blue-600 flex items-center justify-center shrink-0 text-xs">
            <i class="fa-solid fa-comment-dots"></i>
          </span>
          <div>
            <p class="font-bold text-stone-900 leading-tight">अंजलि सिंह का नया संदेश आया है</p>
            <span class="text-[10px] text-stone-400">कल 08:42 PM</span>
          </div>
        </div>
        <div class="py-2 flex items-start space-x-2.5">
          <span class="w-7 h-7 rounded-full bg-teal-100 text-teal-600 flex items-center justify-center shrink-0 text-xs">
            <i class="fa-solid fa-eye"></i>
          </span>
          <div>
            <p class="font-bold text-stone-900 leading-tight">प्रिया शर्मा ने आपकी प्रोफाइल 3 बार देखी</p>
            <span class="text-[10px] text-stone-400">आज 10:15 AM</span>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- ==================== MODAL 5: ROYAL GOLDEN BIODATA (1-CLICK PDF) ==================== -->
  <div id="royalBiodataModal" class="modal-backdrop fixed inset-0 z-[160] bg-black/80 backdrop-blur-sm flex items-center justify-center p-2 sm:p-4 overflow-y-auto">
    <div class="bg-[#102A21] rounded-3xl max-w-2xl w-full overflow-hidden shadow-2xl border-2 border-[#D4AF37] flex flex-col max-h-[96vh] animate-bounce-in my-auto">
      
      <!-- Top Action Bar -->
      <div class="bg-gradient-to-r from-[#064E3B] via-[#0D5F48] to-[#043628] text-white p-3 sm:p-3.5 flex items-center justify-between border-b-2 border-amber-400">
        <div class="flex items-center space-x-2">
          <div class="w-8 h-8 rounded-full bg-amber-400/20 border border-amber-300 flex items-center justify-center text-amber-300 text-xs">
            <i class="fa-solid fa-crown"></i>
          </div>
          <div>
            <h3 class="font-cinzel text-xs sm:text-sm font-bold text-amber-200">रॉयल बायोडाटा (सुनहरा बॉर्डर)</h3>
            <p class="text-[10.5px] text-emerald-100 font-sans" id="modalBiodataHeaderSub">प्रिया शर्मा • 1-क्लिक PDF डाउनलोड</p>
          </div>
        </div>

        <div class="flex items-center space-x-1.5 sm:space-x-2">
          <!-- 1-Click Instant Download Button -->
          <button id="btnModalDownloadPdf" onclick="downloadModalRoyalBiodata()" class="px-3 sm:px-4 py-1.5 rounded-full bg-gradient-to-r from-amber-400 via-amber-500 to-amber-600 text-[#064E3B] font-black text-[11px] sm:text-xs flex items-center space-x-1.5 shadow-md hover:brightness-105 active:scale-95 transition cursor-pointer">
            <i class="fa-solid fa-cloud-arrow-down text-xs"></i>
            <span>⚡ 1-क्लिक डाउनलोड PDF</span>
          </button>

          <!-- Open in Standalone Tab -->
          <button onclick="openCandidateRoyalPage()" class="w-7 h-7 rounded-full bg-white/10 hover:bg-white/20 flex items-center justify-center text-amber-200 text-xs transition" title="अलग पेज पर खोलें">
            <i class="fa-solid fa-arrow-up-right-from-square"></i>
          </button>

          <!-- Close Modal -->
          <button onclick="closeRoyalBiodataModal()" class="w-7 h-7 rounded-full bg-white/10 hover:bg-white/20 flex items-center justify-center text-white text-xs transition" title="बंद करें">
            <i class="fa-solid fa-xmark"></i>
          </button>
        </div>
      </div>

      <!-- Download Toast inside Modal -->
      <div id="modalPdfProgress" class="hidden bg-amber-500 text-amber-950 px-4 py-2 text-xs font-bold flex items-center justify-between border-b border-amber-600 animate-pulse">
        <span class="flex items-center space-x-2">
          <i class="fa-solid fa-spinner fa-spin"></i>
          <span>✨ सुनहरा बॉर्डर वाला PDF बायोडाटा तैयार हो रहा है...</span>
        </span>
        <span class="text-[10px] font-mono">हाई-रेजोल्यूशन</span>
      </div>

      <!-- Scrollable Biodata Sheet Wrapper -->
      <div class="p-2 sm:p-4 overflow-y-auto flex-1 bg-stone-900/60 flex justify-center">
        <!-- The Printable Sheet with Golden Border -->
        <div id="modalRoyalSheet" class="w-full max-w-[620px] bg-[#FFFDF9] rounded-xl shadow-2xl relative select-none">
          <div class="royal-border-outer">
            <div class="royal-border-middle">
              <div class="royal-border-inner">

                <!-- 4 Ornate Vector Corner Flourishes -->
                <svg class="corner-flourish corner-tl" viewBox="0 0 50 50">
                  <path d="M0,0 L50,0 C35,6 20,20 14,35 L14,50 C8,35 6,15 0,0 Z" fill="#BF953F"/>
                  <path d="M4,4 L42,4 C30,9 18,20 12,32 L12,42 C7,30 5,14 4,4 Z" fill="#FCF6BA"/>
                  <circle cx="8" cy="8" r="3.5" fill="#78350F"/>
                </svg>
                <svg class="corner-flourish corner-tr" viewBox="0 0 50 50">
                  <path d="M0,0 L50,0 C35,6 20,20 14,35 L14,50 C8,35 6,15 0,0 Z" fill="#BF953F"/>
                  <path d="M4,4 L42,4 C30,9 18,20 12,32 L12,42 C7,30 5,14 4,4 Z" fill="#FCF6BA"/>
                  <circle cx="8" cy="8" r="3.5" fill="#78350F"/>
                </svg>
                <svg class="corner-flourish corner-bl" viewBox="0 0 50 50">
                  <path d="M0,0 L50,0 C35,6 20,20 14,35 L14,50 C8,35 6,15 0,0 Z" fill="#BF953F"/>
                  <path d="M4,4 L42,4 C30,9 18,20 12,32 L12,42 C7,30 5,14 4,4 Z" fill="#FCF6BA"/>
                  <circle cx="8" cy="8" r="3.5" fill="#78350F"/>
                </svg>
                <svg class="corner-flourish corner-br" viewBox="0 0 50 50">
                  <path d="M0,0 L50,0 C35,6 20,20 14,35 L14,50 C8,35 6,15 0,0 Z" fill="#BF953F"/>
                  <path d="M4,4 L42,4 C30,9 18,20 12,32 L12,42 C7,30 5,14 4,4 Z" fill="#FCF6BA"/>
                  <circle cx="8" cy="8" r="3.5" fill="#78350F"/>
                </svg>

                <div class="royal-watermark"></div>

                <!-- Invocation & Title -->
                <div class="relative z-10 text-center pb-2 border-b-2 border-[#D4AF37]">
                  <div class="text-[#9A1B1E] font-extrabold text-xs font-rozha tracking-widest">
                    ॥ 卐 श्री गणेशाय नमः 卐 ॥
                  </div>
                  <h2 class="font-cinzel text-base sm:text-lg font-black text-[#064E3B] tracking-wider mt-0.5 leading-none">
                    DHEERAJA ROYAL MATRIMONY
                  </h2>
                  <p class="text-[10px] text-amber-800 font-bold tracking-wider mt-0.5">
                    पवित्र सनातन विवाह संगम • 100% सत्यापित बायोडाटा
                  </p>
                  <div class="mt-1 flex items-center justify-center space-x-2 text-[9px] font-bold">
                    <span class="px-2 py-0.5 bg-amber-100 text-amber-900 rounded-full border border-amber-300 font-mono" id="rbCandidateId">ID: DM10028</span>
                    <span class="px-2 py-0.5 bg-emerald-100 text-emerald-900 rounded-full border border-emerald-300">✓ सत्यापित सदस्य</span>
                    <span class="px-2 py-0.5 bg-stone-100 text-stone-700 rounded-full border border-stone-300" id="rbCandidateGuna">28/36 गुण मिलान</span>
                  </div>
                </div>

                <!-- Spotlight Candidate & Photo -->
                <div class="relative z-10 mt-3 flex items-start gap-3 pb-2.5 border-b border-[#E5D5BA]">
                  <div class="shrink-0 text-center">
                    <div class="photo-gold-frame">
                      <img id="rbCandidatePhoto" src="/assets/images/match_priya.jpg" alt="Candidate" class="w-[98px] h-[120px] object-cover rounded-lg border border-white">
                    </div>
                  </div>
                  <div class="flex-1 min-w-0">
                    <span class="inline-block px-2 py-0.5 rounded-full bg-amber-50 border border-amber-300 text-[#9A1B1E] text-[9.5px] font-bold" id="rbCandidatePrefix">
                      सौभाग्यकांक्षिणी (सौ.)
                    </span>
                    <h3 class="text-base sm:text-lg font-black text-[#064E3B] leading-tight font-rozha truncate mt-0.5" id="rbCandidateName">
                      प्रिया शर्मा (Priya Sharma)
                    </h3>
                    <div class="mt-1.5 grid grid-cols-2 gap-1.5 text-[10.5px]">
                      <div class="bg-amber-50/70 p-1.5 rounded border border-amber-200">
                        <span class="text-[9px] text-amber-800 font-bold block">आयु व कद</span>
                        <span class="font-extrabold text-stone-900" id="rbCandidateAgeHeight">26 वर्ष | 5'4"</span>
                      </div>
                      <div class="bg-emerald-50/70 p-1.5 rounded border border-emerald-200">
                        <span class="text-[9px] text-emerald-800 font-bold block">जाति / समाज</span>
                        <span class="font-extrabold text-stone-900 truncate block" id="rbCandidateCaste">सनाढ्य ब्राह्मण</span>
                      </div>
                      <div class="bg-amber-50/70 p-1.5 rounded border border-amber-200">
                        <span class="text-[9px] text-amber-800 font-bold block">उच्चतम शिक्षा</span>
                        <span class="font-extrabold text-stone-900 truncate block" id="rbCandidateEdu">B.Tech (CS)</span>
                      </div>
                      <div class="bg-emerald-50/70 p-1.5 rounded border border-emerald-200">
                        <span class="text-[9px] text-emerald-800 font-bold block">वार्षिक पैकेज</span>
                        <span class="font-extrabold text-[#064E3B] truncate block" id="rbCandidateIncome">₹ 14.50 LPA</span>
                      </div>
                    </div>
                  </div>
                </div>

                <!-- 1. व्यक्तिगत विवरण -->
                <div class="relative z-10 mt-2 mb-2.5">
                  <div class="section-banner">
                    <span class="font-bold text-[11px] font-rozha tracking-wider flex items-center space-x-1">
                      <i class="fa-solid fa-user-check text-amber-300 text-[10px]"></i>
                      <span>१. व्यक्तिगत विवरण (Personal Details)</span>
                    </span>
                    <span class="text-[9px] opacity-75">Confidential</span>
                  </div>
                  <div class="grid grid-cols-1 sm:grid-cols-2 gap-x-2 bg-white/70 p-1.5 rounded border border-amber-100">
                    <div class="attr-row"><span class="attr-label">जन्म तिथि</span><span class="attr-sep">:</span><span class="attr-val" id="rbDob">12-05-1998</span></div>
                    <div class="attr-row"><span class="attr-label">जन्म समय</span><span class="attr-sep">:</span><span class="attr-val" id="rbBirthTime">07:45 AM</span></div>
                    <div class="attr-row"><span class="attr-label">जन्म स्थान</span><span class="attr-sep">:</span><span class="attr-val" id="rbBirthPlace">Indore (M.P.)</span></div>
                    <div class="attr-row"><span class="attr-label">वैवाहिक स्थिति</span><span class="attr-sep">:</span><span class="attr-val" id="rbMarital">अविवाहित</span></div>
                    <div class="attr-row"><span class="attr-label">खान-पान</span><span class="attr-sep">:</span><span class="attr-val" id="rbDiet">शाकाहारी</span></div>
                    <div class="attr-row"><span class="attr-label">रंग-रूप</span><span class="attr-sep">:</span><span class="attr-val" id="rbComplexion">गोरा</span></div>
                  </div>
                </div>

                <!-- 2. धार्मिक एवं कुल विवरण -->
                <div class="relative z-10 mb-2.5">
                  <div class="section-banner">
                    <span class="font-bold text-[11px] font-rozha tracking-wider flex items-center space-x-1">
                      <i class="fa-solid fa-om text-amber-300 text-[10px]"></i>
                      <span>२. धार्मिक एवं कुल विवरण (Astro & Gotra)</span>
                    </span>
                    <span class="text-[9px] opacity-75">Kundali Compatible</span>
                  </div>
                  <div class="grid grid-cols-1 sm:grid-cols-2 gap-x-2 bg-white/70 p-1.5 rounded border border-amber-100">
                    <div class="attr-row"><span class="attr-label">धर्म</span><span class="attr-sep">:</span><span class="attr-val" id="rbReligion">सनातन हिन्दू</span></div>
                    <div class="attr-row"><span class="attr-label">समाज / जाति</span><span class="attr-sep">:</span><span class="attr-val" id="rbCasteFull">ब्राह्मण</span></div>
                    <div class="attr-row"><span class="attr-label">गोत्र (स्वयं/पिता)</span><span class="attr-sep">:</span><span class="attr-val text-[#064E3B] font-black" id="rbGotra">कश्यप</span></div>
                    <div class="attr-row"><span class="attr-label">मूल गोत्र (ऐच्छिक)</span><span class="attr-sep">:</span><span class="attr-val" id="rbOriginGotra">शांडिल्य</span></div>
                    <div class="attr-row"><span class="attr-label">राशि व नक्षत्र</span><span class="attr-sep">:</span><span class="attr-val" id="rbRashi">कन्या (हस्त)</span></div>
                    <div class="attr-row"><span class="attr-label">मांगलिक स्थिति</span><span class="attr-sep">:</span><span class="attr-val text-emerald-800" id="rbManglik">अमांगलिक</span></div>
                  </div>
                </div>

                <!-- 3. शैक्षणिक एवं व्यावसायिक विवरण -->
                <div class="relative z-10 mb-2.5">
                  <div class="section-banner">
                    <span class="font-bold text-[11px] font-rozha tracking-wider flex items-center space-x-1">
                      <i class="fa-solid fa-graduation-cap text-amber-300 text-[10px]"></i>
                      <span>३. शैक्षणिक एवं व्यावसायिक विवरण (Career)</span>
                    </span>
                    <span class="text-[9px] opacity-75">Professional</span>
                  </div>
                  <div class="grid grid-cols-1 sm:grid-cols-2 gap-x-2 bg-white/70 p-1.5 rounded border border-amber-100">
                    <div class="attr-row"><span class="attr-label">उच्चतम शिक्षा</span><span class="attr-sep">:</span><span class="attr-val" id="rbEduDetail">B.Tech (CS)</span></div>
                    <div class="attr-row"><span class="attr-label">संस्थान</span><span class="attr-sep">:</span><span class="attr-val" id="rbCollege">SGSITS</span></div>
                    <div class="attr-row"><span class="attr-label">पद / पेशा</span><span class="attr-sep">:</span><span class="attr-val" id="rbOcc">सॉफ्टवेयर इंजीनियर</span></div>
                    <div class="attr-row"><span class="attr-label">कार्यरत कंपनी</span><span class="attr-sep">:</span><span class="attr-val" id="rbCompany">MNC Tech</span></div>
                    <div class="attr-row"><span class="attr-label">वार्षिक आय</span><span class="attr-sep">:</span><span class="attr-val text-[#064E3B] font-black" id="rbIncomeFull">₹ 14.5 LPA</span></div>
                    <div class="attr-row"><span class="attr-label">कार्य स्थल</span><span class="attr-sep">:</span><span class="attr-val" id="rbWorkCity">इन्दौर / बेंगलुरु</span></div>
                  </div>
                </div>

                <!-- 4. पारिवारिक पृष्ठभूमि -->
                <div class="relative z-10 mb-2.5">
                  <div class="section-banner">
                    <span class="font-bold text-[11px] font-rozha tracking-wider flex items-center space-x-1">
                      <i class="fa-solid fa-people-roof text-amber-300 text-[10px]"></i>
                      <span>४. पारिवारिक पृष्ठभूमि (Family Background)</span>
                    </span>
                    <span class="text-[9px] opacity-75">Cultured</span>
                  </div>
                  <div class="grid grid-cols-1 sm:grid-cols-2 gap-x-2 bg-white/70 p-1.5 rounded border border-amber-100">
                    <div class="attr-row"><span class="attr-label">पूज्य पिताश्री</span><span class="attr-sep">:</span><span class="attr-val" id="rbFatherName">डॉ. रमाकांत शर्मा</span></div>
                    <div class="attr-row"><span class="attr-label">पिता का व्यवसाय</span><span class="attr-sep">:</span><span class="attr-val" id="rbFatherOcc">Chief Medical Officer</span></div>
                    <div class="attr-row"><span class="attr-label">पूज्या माताजी</span><span class="attr-sep">:</span><span class="attr-val" id="rbMotherName">श्रीमती सुनीता शर्मा</span></div>
                    <div class="attr-row"><span class="attr-label">भाई-बहन</span><span class="attr-sep">:</span><span class="attr-val" id="rbSiblings">1 भाई (IIT Delhi)</span></div>
                    <div class="attr-row"><span class="attr-label">मूल निवास</span><span class="attr-sep">:</span><span class="attr-val" id="rbNative">इन्दौर / उज्जैन</span></div>
                    <div class="attr-row"><span class="attr-label">पारिवारिक मूल्य</span><span class="attr-sep">:</span><span class="attr-val" id="rbFamilyType">संयुक्त व संस्कारी</span></div>
                  </div>
                </div>

                <!-- 5. संपर्क एवं आवास -->
                <div class="relative z-10 mb-2">
                  <div class="section-banner">
                    <span class="font-bold text-[11px] font-rozha tracking-wider flex items-center space-x-1">
                      <i class="fa-solid fa-address-book text-amber-300 text-[10px]"></i>
                      <span>५. संपर्क सूत्र एवं पता (Contact & Residence)</span>
                    </span>
                    <span class="text-[9px] opacity-75">Verified</span>
                  </div>
                  <div class="bg-amber-50/70 p-2 rounded border border-amber-200 text-[11px]">
                    <div class="flex items-center justify-between">
                      <div>
                        <span class="text-[9px] font-bold text-amber-800 uppercase">अभिभावक संपर्क:</span>
                        <p class="font-extrabold text-stone-900" id="rbContactPerson">डॉ. रमाकांत शर्मा</p>
                      </div>
                      <div class="text-right">
                        <span class="text-[9px] font-bold text-amber-800 uppercase">मोबाइल नंबर:</span>
                        <p class="font-mono font-bold text-xs text-[#064E3B]" id="rbPhone">+91 98260 41289</p>
                      </div>
                    </div>
                    <div class="mt-1 pt-1 border-t border-amber-200/60 text-[10.5px]">
                      <span class="font-bold text-stone-700">निवास पता: </span>
                      <span class="text-stone-800" id="rbAddress">142, साकेत नगर, इन्दौर (म.प्र.)</span>
                    </div>
                  </div>
                </div>

                <!-- Footer & Official Stamp -->
                <div class="relative z-10 pt-2 border-t-2 border-[#D4AF37] flex items-center justify-between text-[10px] text-stone-600">
                  <div class="flex items-center space-x-2">
                    <div class="w-8 h-8 rounded-full border border-amber-600 border-dashed flex items-center justify-center text-[6px] font-black text-amber-900 leading-none bg-amber-100 text-center">
                      ★ DHEERAJA ★<br>VERIFIED
                    </div>
                    <div>
                      <span class="font-cinzel font-bold text-[#064E3B] block leading-none">धीरजा रॉयल मैट्रिमोनी™</span>
                      <span class="text-[8.5px] text-stone-500">अखंड सनातन वैवाहिक परंपरा</span>
                    </div>
                  </div>
                  <div class="text-right text-[8.5px] text-stone-500 font-mono">
                    <span>डिजिटल सत्यापित बायोडाटा</span><br>
                    <span>www.dheerajamatrimony.com</span>
                  </div>
                </div>

              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Bottom Action Strip inside Modal -->
      <div class="bg-[#0A2018] p-2.5 sm:p-3 border-t border-amber-400/40 flex items-center justify-between">
        <div class="text-emerald-200 text-xs flex items-center space-x-1.5">
          <i class="fa-solid fa-shield-check text-amber-400"></i>
          <span class="hidden sm:inline">100% सत्यापित एवं सुनहरे बॉर्डर वाला आधिकारिक बायोडाटा</span>
          <span class="sm:hidden">100% सत्यापित बायोडाटा</span>
        </div>
        <div class="flex items-center space-x-2">
          <button onclick="closeRoyalBiodataModal()" class="px-3 py-1.5 rounded-full bg-white/10 hover:bg-white/20 text-white text-xs font-semibold transition">
            बंद करें
          </button>
          <button onclick="downloadModalRoyalBiodata()" class="px-4 py-1.5 rounded-full bg-gradient-to-r from-amber-400 to-amber-600 text-[#064E3B] font-extrabold text-xs shadow-md transition active:scale-95 flex items-center space-x-1.5 cursor-pointer">
            <i class="fa-solid fa-cloud-arrow-down"></i>
            <span>⚡ 1-क्लिक PDF डाउनलोड</span>
          </button>
        </div>
      </div>

    </div>
  <!-- ==================== MODAL 6: PHOTO PRIVACY & SECURITY WATERMARK ==================== -->
  <div id="photoPrivacyModal" class="modal-backdrop fixed inset-0 z-[160] bg-black/75 backdrop-blur-xs flex items-center justify-center p-3">
    <div class="bg-white rounded-3xl max-w-sm w-full overflow-hidden shadow-2xl border-2 border-amber-400 flex flex-col max-h-[92vh] animate-bounce-in">
      <!-- Modal Header -->
      <div class="bg-gradient-to-r from-emerald-950 via-emerald-900 to-emerald-950 text-white p-3.5 flex items-center justify-between border-b-2 border-amber-400 shrink-0">
        <div class="flex items-center space-x-2.5">
          <div class="w-9 h-9 rounded-xl bg-gradient-to-br from-amber-400 to-amber-600 text-emerald-950 flex items-center justify-center text-base font-black shadow-xs">
            <i class="fa-solid fa-shield-halved text-base"></i>
          </div>
          <div>
            <div class="text-[9.5px] uppercase font-black tracking-wider text-amber-300">कन्या व वर सुरक्षा शील्ड</div>
            <h3 class="font-cinzel text-xs font-bold text-white">फोटो प्राइवेसी एवं सुरक्षा वाटरमार्क</h3>
          </div>
        </div>
        <button onclick="closePhotoPrivacyModal()" class="w-7 h-7 rounded-full bg-white/10 hover:bg-white/20 flex items-center justify-center text-white text-xs transition cursor-pointer">
          <i class="fa-solid fa-xmark"></i>
        </button>
      </div>

      <!-- Modal Body (Scrollable) -->
      <div class="p-3.5 space-y-3.5 text-stone-800 text-xs overflow-y-auto">
        <!-- Live Photo Preview Box with Watermark Toggle Demonstration -->
        <div class="bg-gradient-to-b from-stone-50 to-stone-100 rounded-2xl p-3 border border-stone-200 text-center">
          <div class="text-[10px] font-extrabold text-stone-600 uppercase tracking-wider mb-2 flex items-center justify-center gap-1">
            <i class="fa-solid fa-eye text-emerald-700"></i>
            <span>आपकी फोटो का लाइव सुरक्षा दृश्य (Live Preview)</span>
          </div>

          <div class="relative w-28 h-32 mx-auto rounded-2xl overflow-hidden border-2 border-amber-400 shadow-md bg-stone-200 photo-container-shield">
            <img id="privacyPreviewImg" src="/assets/images/match_priya.jpg" alt="Preview" class="w-full h-full object-cover select-none pointer-events-none" draggable="false" oncontextmenu="return false;">
            
            <!-- Dynamic Watermark Layer inside Preview -->
            <div id="previewWatermarkLayer" class="photo-watermark-overlay">
              <span class="photo-watermark-text row-top">Dheeraja • DH-9821</span>
              <span class="photo-watermark-text row-mid">धीरजा सुरक्षा • केवल रिश्ते हेतु</span>
              <span class="photo-watermark-text row-bot">Dheeraja Verified</span>
            </div>

            <!-- Security Pill in Preview -->
            <div id="previewSecurityPill" class="photo-security-pill">
              <i class="fa-solid fa-shield-halved text-amber-300"></i>
              <span>DH-9821</span>
            </div>

            <!-- Preview Privacy Blur Lock Overlay (Dynamic) -->
            <div id="previewBlurLayer" class="photo-privacy-guard hidden">
              <div class="w-7 h-7 rounded-full bg-amber-400 text-emerald-950 flex items-center justify-center text-xs mb-1 shadow-sm">
                <i class="fa-solid fa-lock"></i>
              </div>
              <span class="text-[9px] font-extrabold text-white leading-tight">फोटो सुरक्षित है</span>
              <span class="text-[7.5px] text-amber-200 mt-0.5">केवल अनुमति पर दिखेगी</span>
            </div>
          </div>

          <p class="text-[10px] text-emerald-800 font-bold mt-2 flex items-center justify-center gap-1">
            <i class="fa-solid fa-circle-check text-emerald-600" id="previewStatusIcon"></i>
            <span id="previewStatusText">सुरक्षा वाटरमार्क सक्रिय है (Anti-Theft Active)</span>
          </p>
        </div>

        <!-- Setting 1: Watermark Switch -->
        <div class="p-2.5 rounded-2xl bg-amber-50/70 border border-amber-300 flex items-center justify-between">
          <div class="pr-2">
            <div class="text-xs font-black text-amber-950 flex items-center gap-1.5">
              <i class="fa-solid fa-stamp text-amber-700"></i>
              <span>धीरजा सुरक्षा वाटरमार्क (Watermark)</span>
            </div>
            <p class="text-[10px] text-stone-600 mt-0.5 leading-snug">
              फोटो पर 'केवल रिश्ते हेतु' की मुहर लगाएं ताकि फोटो का स्क्रीनशॉट व दुरुपयोग रोका जा सके।
            </p>
          </div>
          <label class="relative inline-flex items-center cursor-pointer shrink-0">
            <input type="checkbox" id="toggleWatermarkSwitch" checked onchange="updatePhotoPrivacyPreview()" class="sr-only peer">
            <div class="w-10 h-5 bg-stone-300 peer-focus:outline-hidden rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-stone-300 after:border after:rounded-full after:h-4 after:w-4 after:transition-all peer-checked:bg-emerald-600"></div>
          </label>
        </div>

        <!-- Setting 2: Who can view full clear photo -->
        <div class="space-y-1.5">
          <div class="text-[10.5px] font-extrabold text-stone-800 uppercase tracking-wider flex items-center gap-1">
            <i class="fa-solid fa-user-lock text-emerald-800"></i>
            <span>आपकी फोटो कौन देख सकता है?</span>
          </div>

          <!-- Option 1: Public with Watermark -->
          <label id="lblPhotoOptPublic" class="flex items-start space-x-2.5 p-2.5 rounded-xl border-2 border-emerald-500 bg-emerald-50/60 cursor-pointer transition hover:bg-emerald-50" onclick="setPhotoPrivacyMode('public')">
            <input type="radio" name="photo_visibility_mode" value="public" checked onchange="updatePhotoPrivacyPreview()" class="mt-0.5 text-emerald-700 focus:ring-emerald-500">
            <div class="min-w-0 flex-1">
              <span class="text-xs font-black text-emerald-950 block">सभी सदस्यों को दिखे (वाटरमार्क के साथ)</span>
              <span class="text-[10px] text-stone-600 leading-snug block mt-0.5">
                अधिक से अधिक और शीघ्र रिश्ते आने हेतु अनुशंसित। फोटो पर सुरक्षित वाटरमार्क हमेशा रहेगा।
              </span>
            </div>
          </label>

          <!-- Option 2: Mutual / Accepted Interest Only -->
          <label id="lblPhotoOptMutual" class="flex items-start space-x-2.5 p-2.5 rounded-xl border border-stone-200 bg-white cursor-pointer transition hover:border-amber-400 hover:bg-amber-50/30" onclick="setPhotoPrivacyMode('mutual')">
            <input type="radio" name="photo_visibility_mode" value="mutual" onchange="updatePhotoPrivacyPreview()" class="mt-0.5 text-emerald-700 focus:ring-emerald-500">
            <div class="min-w-0 flex-1">
              <span class="text-xs font-black text-stone-900 block flex items-center gap-1.5">
                <span>केवल परस्पर रुचि / स्वीकृत रिश्तों को दिखे</span>
                <span class="text-[8.5px] bg-rose-100 text-rose-800 px-1.5 py-0.2 rounded font-bold">कन्या पक्ष प्रिय</span>
              </span>
              <span class="text-[10px] text-stone-500 leading-snug block mt-0.5">
                जब तक आप सामने वाले का रिश्ता स्वीकार नहीं करते, उन्हें फोटो धुंधली (Blur 🔒) दिखेगी।
              </span>
            </div>
          </label>

          <!-- Option 3: Request Only -->
          <label id="lblPhotoOptRequest" class="flex items-start space-x-2.5 p-2.5 rounded-xl border border-stone-200 bg-white cursor-pointer transition hover:border-amber-400 hover:bg-amber-50/30" onclick="setPhotoPrivacyMode('request')">
            <input type="radio" name="photo_visibility_mode" value="request" onchange="updatePhotoPrivacyPreview()" class="mt-0.5 text-emerald-700 focus:ring-emerald-500">
            <div class="min-w-0 flex-1">
              <span class="text-xs font-black text-stone-900 block">केवल अनुमति अनुरोध स्वीकारने पर दिखे</span>
              <span class="text-[10px] text-stone-500 leading-snug block mt-0.5">
                सदस्य फोटो देखने के लिए "अनुरोध" भेजेंगे। आपकी स्वीकृति के बाद ही फोटो खुलेगी।
              </span>
            </div>
          </label>
        </div>

        <!-- Setting 3: Anti-Theft Shield Summary -->
        <div class="p-2.5 rounded-xl bg-stone-100 border border-stone-200 text-[10.5px] text-stone-700 space-y-1">
          <div class="font-extrabold text-stone-900 flex items-center gap-1">
            <i class="fa-solid fa-shield-virus text-emerald-700"></i>
            <span>अतिरिक्त धीरजा सुरक्षा शील्ड (Active Protection):</span>
          </div>
          <div class="flex items-center gap-1.5 text-emerald-800 font-semibold">
            <i class="fa-solid fa-check text-[10px]"></i>
            <span>राइट-क्लिक एवं "Save Image" स्थायी रूप से अवरुद्ध (Blocked)</span>
          </div>
          <div class="flex items-center gap-1.5 text-emerald-800 font-semibold">
            <i class="fa-solid fa-check text-[10px]"></i>
            <span>स्क्रीनशॉट लेने पर वॉटरमार्क व सदस्य आईडी स्वतः दर्ज</span>
          </div>
        </div>

        <!-- Action Button: Save Settings -->
        <button type="button" onclick="savePhotoPrivacySettings()" class="w-full py-2.5 px-3 rounded-xl bg-gradient-to-r from-emerald-800 via-emerald-700 to-emerald-900 text-white font-black text-xs shadow-md transition active:scale-95 flex items-center justify-center space-x-1.5 cursor-pointer">
          <i class="fa-solid fa-floppy-disk text-amber-300"></i>
          <span>प्राइवेसी व वाटरमार्क सेटिंग्स सुरक्षित करें</span>
        </button>
      </div>
    </div>
  </div>

  <!-- ==================== MODAL 7: ADVANCED MULTI-FILTER MODAL (उन्नत रिश्ते, उम्र, कद, सिटी, व्यवसाय, मांगलिक) ==================== -->
  <div id="advancedFilterModal" class="modal-backdrop fixed inset-0 z-[160] bg-black/75 backdrop-blur-xs flex items-center justify-center p-3">
    <div class="bg-white rounded-3xl max-w-md w-full overflow-hidden shadow-2xl border-2 border-amber-400 flex flex-col max-h-[92vh] animate-bounce-in">
      <!-- Modal Header -->
      <div class="bg-gradient-to-r from-emerald-950 via-emerald-900 to-emerald-950 text-white p-3.5 flex items-center justify-between border-b-2 border-amber-400 shrink-0">
        <div class="flex items-center space-x-2.5">
          <div class="w-9 h-9 rounded-xl bg-gradient-to-br from-amber-400 to-amber-600 text-emerald-950 flex items-center justify-center text-base font-black shadow-xs">
            <i class="fa-solid fa-sliders text-base"></i>
          </div>
          <div>
            <div class="text-[9.5px] uppercase font-black tracking-wider text-amber-300">पसंद अनुसार रिश्ते चुनें</div>
            <h3 class="font-cinzel text-xs font-bold text-white">उन्नत रिश्ते व विस्तृत फ़िल्टर (Filters)</h3>
          </div>
        </div>
        <button onclick="closeAdvancedFilterModal()" class="w-7 h-7 rounded-full bg-white/10 hover:bg-white/20 flex items-center justify-center text-white text-xs transition cursor-pointer">
          <i class="fa-solid fa-xmark"></i>
        </button>
      </div>

      <!-- Modal Body (Scrollable) -->
      <div class="p-3.5 space-y-3.5 text-stone-800 text-xs overflow-y-auto">
        <!-- Notice note -->
        <div class="p-2.5 rounded-xl bg-amber-50/80 border border-amber-300 text-[10.5px] text-amber-950 flex items-start gap-2">
          <i class="fa-solid fa-circle-info text-amber-700 mt-0.5 text-xs shrink-0"></i>
          <div>
            <strong>सुविधाजनक चयन:</strong> यदि किसी बात से कोई आपत्ति नहीं है, तो <em>"सभी (Doesn't Matter / कोई भी)"</em> विकल्प चुनें। जो जरूरी हो, केवल वही फ़िल्टर करें।
          </div>
        </div>

        <!-- Section 1: उन्नत रिश्ते प्राथमिकताएं (Elite Matches) -->
        <div class="space-y-1.5">
          <label class="text-[11px] font-black text-emerald-950 flex items-center gap-1.5">
            <i class="fa-solid fa-award text-amber-600"></i>
            <span>उन्नत रिश्ते प्राथमिकताएं (Elite Matches):</span>
          </label>
          <div class="grid grid-cols-2 gap-2">
            <!-- 28+ Guna Milan -->
            <label class="flex items-center space-x-2 p-2 rounded-xl border border-stone-200 bg-stone-50 hover:bg-emerald-50/50 cursor-pointer transition">
              <input type="checkbox" id="modalAdvHighGuna" class="w-4 h-4 rounded text-emerald-600 focus:ring-emerald-500">
              <div>
                <div class="text-[11px] font-bold text-stone-900">🌟 28+ गुण मिलान</div>
                <div class="text-[9.5px] text-stone-500">उत्तम कुंडली मिलान</div>
              </div>
            </label>
            <!-- Verified Only -->
            <label class="flex items-center space-x-2 p-2 rounded-xl border border-stone-200 bg-stone-50 hover:bg-emerald-50/50 cursor-pointer transition">
              <input type="checkbox" id="modalAdvVerified" class="w-4 h-4 rounded text-emerald-600 focus:ring-emerald-500">
              <div>
                <div class="text-[11px] font-bold text-stone-900">🛡️ 100% सत्यापित</div>
                <div class="text-[9.5px] text-stone-500">आधार व बायोडाटा प्रमाणित</div>
              </div>
            </label>
            <!-- Royal Biodata Only -->
            <label class="flex items-center space-x-2 p-2 rounded-xl border border-stone-200 bg-stone-50 hover:bg-emerald-50/50 cursor-pointer transition">
              <input type="checkbox" id="modalAdvRoyal" class="w-4 h-4 rounded text-emerald-600 focus:ring-emerald-500">
              <div>
                <div class="text-[11px] font-bold text-stone-900">👑 रॉयल बायोडाटा</div>
                <div class="text-[9.5px] text-stone-500">गोल्डन बॉर्डर व PDF</div>
              </div>
            </label>
            <!-- Online Only -->
            <label class="flex items-center space-x-2 p-2 rounded-xl border border-stone-200 bg-stone-50 hover:bg-emerald-50/50 cursor-pointer transition">
              <input type="checkbox" id="modalAdvOnline" class="w-4 h-4 rounded text-emerald-600 focus:ring-emerald-500">
              <div>
                <div class="text-[11px] font-bold text-stone-900">🟢 अभी ऑनलाइन</div>
                <div class="text-[9.5px] text-stone-500">सक्रिय रिश्तेदार / सदस्य</div>
              </div>
            </label>
          </div>
        </div>

        <!-- Section 2: मांगलिक स्थिति (Manglik Status) -->
        <div class="space-y-1.5">
          <label class="text-[11px] font-black text-emerald-950 flex items-center gap-1.5">
            <i class="fa-solid fa-ring text-rose-600"></i>
            <span>मांगलिक स्थिति (Manglik Status):</span>
          </label>
          <div class="grid grid-cols-2 gap-1.5">
            <label class="flex items-center space-x-2 p-2 rounded-xl border border-stone-200 bg-stone-50 cursor-pointer hover:border-emerald-500 transition">
              <input type="radio" name="modalAdvManglikRadio" value="all" checked class="text-emerald-600 focus:ring-emerald-500">
              <span class="text-[11px] font-bold text-stone-800">सभी (कोई भी / Doesn't Matter)</span>
            </label>
            <label class="flex items-center space-x-2 p-2 rounded-xl border border-stone-200 bg-stone-50 cursor-pointer hover:border-emerald-500 transition">
              <input type="radio" name="modalAdvManglikRadio" value="non_manglik" class="text-emerald-600 focus:ring-emerald-500">
              <span class="text-[11px] font-bold text-emerald-800">🟢 केवल नॉन-मांगलिक (अमांगलिक)</span>
            </label>
            <label class="flex items-center space-x-2 p-2 rounded-xl border border-stone-200 bg-stone-50 cursor-pointer hover:border-emerald-500 transition">
              <input type="radio" name="modalAdvManglikRadio" value="manglik" class="text-emerald-600 focus:ring-emerald-500">
              <span class="text-[11px] font-bold text-rose-800">🔴 केवल मांगलिक</span>
            </label>
            <label class="flex items-center space-x-2 p-2 rounded-xl border border-stone-200 bg-stone-50 cursor-pointer hover:border-emerald-500 transition">
              <input type="radio" name="modalAdvManglikRadio" value="anshik_manglik" class="text-emerald-600 focus:ring-emerald-500">
              <span class="text-[11px] font-bold text-amber-800">🟡 आंशिक मांगलिक</span>
            </label>
          </div>
        </div>

        <!-- Section 3: उम्र सीमा (Age Range) -->
        <div class="space-y-1.5">
          <label class="text-[11px] font-black text-emerald-950 flex items-center gap-1.5">
            <i class="fa-solid fa-cake-candles text-amber-600"></i>
            <span>उम्र सीमा (Age Range):</span>
          </label>
          <div class="grid grid-cols-2 gap-1.5">
            <label class="flex items-center space-x-2 p-2 rounded-xl border border-stone-200 bg-stone-50 cursor-pointer hover:border-emerald-500 transition">
              <input type="radio" name="modalAdvAgeRadio" value="all" checked class="text-emerald-600 focus:ring-emerald-500">
              <span class="text-[11px] font-bold text-stone-800">सभी उम्र (कोई भी)</span>
            </label>
            <label class="flex items-center space-x-2 p-2 rounded-xl border border-stone-200 bg-stone-50 cursor-pointer hover:border-emerald-500 transition">
              <input type="radio" name="modalAdvAgeRadio" value="21-24" class="text-emerald-600 focus:ring-emerald-500">
              <span class="text-[11px] font-bold text-stone-800">21 - 24 वर्ष</span>
            </label>
            <label class="flex items-center space-x-2 p-2 rounded-xl border border-stone-200 bg-stone-50 cursor-pointer hover:border-emerald-500 transition">
              <input type="radio" name="modalAdvAgeRadio" value="25-27" class="text-emerald-600 focus:ring-emerald-500">
              <span class="text-[11px] font-bold text-stone-800">25 - 27 वर्ष</span>
            </label>
            <label class="flex items-center space-x-2 p-2 rounded-xl border border-stone-200 bg-stone-50 cursor-pointer hover:border-emerald-500 transition">
              <input type="radio" name="modalAdvAgeRadio" value="28-32" class="text-emerald-600 focus:ring-emerald-500">
              <span class="text-[11px] font-bold text-stone-800">28 - 32 वर्ष</span>
            </label>
          </div>
        </div>

        <!-- Section 4: कद / ऊंचाई (Height) -->
        <div class="space-y-1.5">
          <label class="text-[11px] font-black text-emerald-950 flex items-center gap-1.5">
            <i class="fa-solid fa-ruler-vertical text-emerald-700"></i>
            <span>कद / लंबाई (Height):</span>
          </label>
          <div class="grid grid-cols-2 gap-1.5">
            <label class="flex items-center space-x-2 p-2 rounded-xl border border-stone-200 bg-stone-50 cursor-pointer hover:border-emerald-500 transition">
              <input type="radio" name="modalAdvHeightRadio" value="all" checked class="text-emerald-600 focus:ring-emerald-500">
              <span class="text-[11px] font-bold text-stone-800">सभी कद (कोई भी)</span>
            </label>
            <label class="flex items-center space-x-2 p-2 rounded-xl border border-stone-200 bg-stone-50 cursor-pointer hover:border-emerald-500 transition">
              <input type="radio" name="modalAdvHeightRadio" value="short" class="text-emerald-600 focus:ring-emerald-500">
              <span class="text-[11px] font-bold text-stone-800">5'0" - 5'3" (152-160 cm)</span>
            </label>
            <label class="flex items-center space-x-2 p-2 rounded-xl border border-stone-200 bg-stone-50 cursor-pointer hover:border-emerald-500 transition">
              <input type="radio" name="modalAdvHeightRadio" value="medium" class="text-emerald-600 focus:ring-emerald-500">
              <span class="text-[11px] font-bold text-stone-800">5'4" - 5'6" (162-168 cm)</span>
            </label>
            <label class="flex items-center space-x-2 p-2 rounded-xl border border-stone-200 bg-stone-50 cursor-pointer hover:border-emerald-500 transition">
              <input type="radio" name="modalAdvHeightRadio" value="tall" class="text-emerald-600 focus:ring-emerald-500">
              <span class="text-[11px] font-bold text-stone-800">5'7" और अधिक (170+ cm)</span>
            </label>
          </div>
        </div>

        <!-- Section 5: सिटी व व्यवसाय (City & Profession Dropdowns) -->
        <div class="grid grid-cols-1 sm:grid-cols-2 gap-2.5">
          <div class="space-y-1">
            <label class="text-[11px] font-black text-emerald-950 flex items-center gap-1">
              <i class="fa-solid fa-city text-emerald-700"></i>
              <span>सिटी / शहर (City):</span>
            </label>
            <select id="modalAdvCity" class="w-full py-2 px-2.5 rounded-xl bg-stone-50 border border-stone-200 text-stone-800 text-xs font-bold focus:ring-2 focus:ring-emerald-500 cursor-pointer">
              <option value="all">सभी शहर (All Cities - Doesn't Matter)</option>
              <option value="Jaipur">जयपुर (Jaipur)</option>
              <option value="Indore">इन्दौर (Indore)</option>
              <option value="Pune">पुणे (Pune)</option>
              <option value="Surat">सूरत (Surat)</option>
              <option value="Ahmedabad">अहमदाबाद (Ahmedabad)</option>
              <option value="Udaipur">उदयपुर (Udaipur)</option>
              <option value="Jodhpur">जोधपुर (Jodhpur)</option>
              <option value="Sikar">सीकर (Sikar)</option>
              <option value="Alwar">अलवर (Alwar)</option>
              <option value="Ajmer">अजमेर (Ajmer)</option>
              <option value="Chandigarh">चंडीगढ़ (Chandigarh)</option>
            </select>
          </div>

          <div class="space-y-1">
            <label class="text-[11px] font-black text-emerald-950 flex items-center gap-1">
              <i class="fa-solid fa-briefcase text-emerald-700"></i>
              <span>व्यवसाय / पेशा (Profession):</span>
            </label>
            <select id="modalAdvProfession" class="w-full py-2 px-2.5 rounded-xl bg-stone-50 border border-stone-200 text-stone-800 text-xs font-bold focus:ring-2 focus:ring-emerald-500 cursor-pointer">
              <option value="all">सभी व्यवसाय (Any Profession - Doesn't Matter)</option>
              <option value="it_software">💻 IT व सॉफ्टवेयर (Software / IT)</option>
              <option value="govt_service">🏛️ सरकारी / बैंक / RAS (Govt / Civil)</option>
              <option value="business_finance">📊 CA, फाइनेंस व व्यापार (Finance / CA)</option>
              <option value="education_teaching">📚 शिक्षण व प्राध्यापक (Teaching / Lecturer)</option>
              <option value="design_architecture">🎨 डिज़ाइन व आर्किटेक्चर (Design / Architecture)</option>
            </select>
          </div>
        </div>
      </div>

      <!-- Modal Footer -->
      <div class="p-3 bg-stone-50 border-t border-stone-200 flex items-center justify-between gap-2 shrink-0">
        <button type="button" onclick="resetAllFiltersFromModal()" class="px-3 py-2 rounded-xl bg-stone-200 hover:bg-rose-100 text-stone-700 hover:text-rose-800 font-bold text-xs transition cursor-pointer flex items-center gap-1">
          <i class="fa-solid fa-rotate-left text-[10px]"></i>
          <span>सभी रीसेट करें</span>
        </button>
        <button type="button" onclick="applyAdvancedModalFilters()" class="flex-1 py-2 px-4 rounded-xl bg-gradient-to-r from-emerald-800 via-emerald-700 to-emerald-900 text-white font-black text-xs shadow-md transition active:scale-95 flex items-center justify-center space-x-1.5 cursor-pointer">
          <i class="fa-solid fa-check text-amber-300"></i>
          <span>फ़िल्टर लागू करें</span>
        </button>
      </div>
    </div>
  </div>

  <!-- ==================== JAVASCRIPT LOGIC ==================== -->
  <script>
    // Desktop Viewport Switcher
    function setViewport(width) {
      const shell = document.getElementById('matchesShell');
      shell.style.maxWidth = width;
    }

    // Show Toast
    function showToast(title, msg, iconClass = 'fa-check') {
      const toast = document.getElementById('actionToast');
      document.getElementById('toastTitle').textContent = title;
      document.getElementById('toastMsg').textContent = msg;
      document.getElementById('toastIcon').className = 'fa-solid ' + iconClass;
      toast.classList.add('show');
      setTimeout(() => {
        toast.classList.remove('show');
      }, 3000);
    }

    // 8-Filter Pills Logic
    // 8-Filter Pills Logic + Dedicated Samaj Group Filter
    let currentSamajFilter = <?= json_encode($user_samaj ?? 'सिंधी') ?>;
    let currentSamajSubCategory = 'all'; // 'all', 'male', 'female', 'verified', 'manglik'
    let currentFilter = 'all';
    let activeSearchQuery = '';
    let advDrawerFilters = {
      matrimonyId: '',
      gender: 'all',
      caste: 'all',
      manglik: 'all',
      age: 'all',
      city: 'all',
      profession: 'all',
      income: 'all',
      verifiedOnly: false,
      highGuna: false,
      onlineOnly: false
    };

    const ALL_SAMAJ_LIST = [
      { name: 'सिंधी', label: 'सिंधी (Sindhi)', icon: '🌟' },
      { name: 'ब्राह्मण', label: 'ब्राह्मण (Brahmin)', icon: '🕉️' },
      { name: 'माहेश्वरी', label: 'माहेश्वरी (Maheshwari)', icon: '💎' },
      { name: 'अग्रवाल', label: 'अग्रवाल (Agarwal)', icon: '🪙' },
      { name: 'राजपूत', label: 'राजपूत (Rajput)', icon: '⚔️' },
      { name: 'जैन', label: 'जैन (Jain)', icon: '🪷' },
      { name: 'जाट', label: 'जाट (Jat)', icon: '🌾' },
      { name: 'यादव', label: 'यादव (Yadav)', icon: '🦚' },
      { name: 'गुर्जर', label: 'गुर्जर (Gurjar)', icon: '🛡️' },
      { name: 'सोनी', label: 'सोनी (Soni)', icon: '✨' },
      { name: 'सैनी', label: 'सैनी (Saini)', icon: '🌸' },
      { name: 'पाटीदार', label: 'पाटीदार (Patidar)', icon: '🚜' },
      { name: 'बिश्नोई', label: 'बिश्नोई (Bishnoi)', icon: '🌾' },
      { name: 'सिख', label: 'सिख (Sikh)', icon: 'ੴ' },
      { name: 'कायस्थ', label: 'कायस्थ (Kayastha)', icon: '📜' },
      { name: 'all', label: 'सभी समाज (All)', icon: '🌐' }
    ];

    function renderSamajDrawerPills() {
      const container = document.getElementById('samajQuickPills');
      if (!container) return;
      container.innerHTML = '';

      ALL_SAMAJ_LIST.forEach(s => {
        const btn = document.createElement('button');
        btn.type = 'button';
        const isActive = (currentSamajFilter === s.name || (s.name === 'all' && currentSamajFilter === 'all'));
        btn.className = `text-[9.5px] font-bold px-2 py-1 rounded-lg border transition flex items-center space-x-1 cursor-pointer ${
          isActive 
            ? 'bg-amber-400 text-emerald-950 border-amber-300 shadow-xs' 
            : 'bg-white/10 hover:bg-white/20 text-stone-200 border-white/20'
        }`;
        btn.innerHTML = `<span>${s.icon}</span><span>${s.label}</span>`;
        btn.onclick = () => {
          filterMatchesBySamaj(s.name);
          toggleSamajDropdown();
        };
        container.appendChild(btn);
      });
    }

    function toggleSamajDropdown() {
      const drawer = document.getElementById('samajSwitcherDrawer');
      if (drawer) {
        drawer.classList.toggle('hidden');
      }
    }

    function filterMatchesBySamaj(samajName) {
      currentSamajFilter = samajName;
      currentSamajSubCategory = 'all'; // reset to all
      const titleEl = document.getElementById('activeSamajTitle');
      const subEl = document.getElementById('activeSamajSubtitle');
      const prefixEl = document.getElementById('samajBtnPrefixText');
      const labelMale = document.getElementById('labelSamajMale');
      const labelFemale = document.getElementById('labelSamajFemale');
      const displayTitle = (samajName === 'all') ? 'समस्त समाज' : samajName;

      if (titleEl) titleEl.textContent = displayTitle;
      if (subEl) subEl.textContent = displayTitle;
      if (prefixEl) prefixEl.textContent = displayTitle;
      if (labelMale) labelMale.textContent = `${displayTitle} वर (लड़के)`;
      if (labelFemale) labelFemale.textContent = `${displayTitle} वधू (लड़कियां)`;

      document.querySelectorAll('.samaj-filter-btn').forEach(b => b.classList.remove('active'));
      const btnAll = document.getElementById('btn-samaj-sub-all');
      if (btnAll) btnAll.classList.add('active');

      const hintEl = document.getElementById('samajActiveFilterLabel');
      if (hintEl) hintEl.textContent = 'सभी रिश्ते सक्रिय';

      renderSamajDrawerPills();
      applyCombinedFilters();
      showToast('समाज ग्रुप सक्रिय 🔒', `केवल ${displayTitle} समाज के रिश्ते दिख रहे हैं।`, 'fa-shield-halved');
    }

    function filterSamajSubCategory(subCat, btnElem) {
      currentSamajSubCategory = subCat;

      // Update active state on sub buttons
      document.querySelectorAll('.samaj-filter-btn').forEach(b => b.classList.remove('active'));
      if (btnElem) {
        btnElem.classList.add('active');
      } else {
        const target = document.getElementById('btn-samaj-sub-' + subCat);
        if (target) target.classList.add('active');
      }

      // Update hint text
      const hintEl = document.getElementById('samajActiveFilterLabel');
      const labels = {
        'all': 'सभी रिश्ते सक्रिय',
        'male': 'केवल वर (लड़के) दिख रहे हैं',
        'female': 'केवल वधू (लड़कियां) दिख रही हैं',
        'verified': 'केवल 100% सत्यापित रिश्ते',
        'manglik': 'मांगलिक / कुंडली मिलान रिश्ते'
      };
      if (hintEl) hintEl.textContent = labels[subCat] || '';

      applyCombinedFilters();

      const samajName = (currentSamajFilter === 'all') ? 'समस्त समाज' : `${currentSamajFilter} समाज`;
      showToast('फिल्टर लागू', `${samajName}: ${labels[subCat] || subCat}`, 'fa-filter');
    }

    function openSamajWhatsappCommunity() {
      const samaj = currentSamajFilter || 'सिंधी';
      showToast('WhatsApp कम्युनिटी 📲', `${samaj} समाज के आधिकारिक WhatsApp ग्रुप से जुड़ रहे हैं...`, 'fa-whatsapp');
      window.open('https://chat.whatsapp.com/demo-sindhi-matrimony-dheeraja', '_blank');
    }

    function filterByCategory(cat, btnElem) {
      currentFilter = cat;
      // Update pills styles
      document.querySelectorAll('.filter-pill').forEach(pill => {
        pill.classList.remove('active');
      });
      if (btnElem) {
        btnElem.classList.add('active');
      } else {
        const target = document.getElementById('pill-' + cat);
        if (target) target.classList.add('active');
      }
      applyCombinedFilters();
    }

    // ==========================================
    // MULTI-FILTER STATE & LOGIC
    // (उन्नत रिश्ते, उम्र, कद, सिटी, व्यवसाय, मांगलिक)
    // ==========================================
    let activeMultiFilters = {
      manglik: 'all',
      age: 'all',
      city: 'all',
      profession: 'all',
      height: 'all',
      highGuna: false,
      verifiedOnly: false,
      royalOnly: false,
      onlineOnly: false
    };

    function onQuickFilterChange() {
      const qManglik = document.getElementById('quickFilterManglik')?.value || 'all';
      const qAge = document.getElementById('quickFilterAge')?.value || 'all';
      const qCity = document.getElementById('quickFilterCity')?.value || 'all';
      const qProf = document.getElementById('quickFilterProfession')?.value || 'all';
      const qHeight = document.getElementById('quickFilterHeight')?.value || 'all';

      activeMultiFilters.manglik = qManglik;
      activeMultiFilters.age = qAge;
      activeMultiFilters.city = qCity;
      activeMultiFilters.profession = qProf;
      activeMultiFilters.height = qHeight;

      syncModalInputsFromState();
      applyCombinedFilters();
      renderActiveFilterPills();
    }

    function syncModalInputsFromState() {
      const rManglik = document.querySelector(`input[name="modalAdvManglikRadio"][value="${activeMultiFilters.manglik}"]`);
      if (rManglik) rManglik.checked = true;

      const rAge = document.querySelector(`input[name="modalAdvAgeRadio"][value="${activeMultiFilters.age}"]`);
      if (rAge) rAge.checked = true;

      const rHeight = document.querySelector(`input[name="modalAdvHeightRadio"][value="${activeMultiFilters.height}"]`);
      if (rHeight) rHeight.checked = true;

      const mCity = document.getElementById('modalAdvCity');
      if (mCity) mCity.value = activeMultiFilters.city;

      const mProf = document.getElementById('modalAdvProfession');
      if (mProf) mProf.value = activeMultiFilters.profession;

      const chkGuna = document.getElementById('modalAdvHighGuna');
      if (chkGuna) chkGuna.checked = !!activeMultiFilters.highGuna;

      const chkVer = document.getElementById('modalAdvVerified');
      if (chkVer) chkVer.checked = !!activeMultiFilters.verifiedOnly;

      const chkRoyal = document.getElementById('modalAdvRoyal');
      if (chkRoyal) chkRoyal.checked = !!activeMultiFilters.royalOnly;

      const chkOnline = document.getElementById('modalAdvOnline');
      if (chkOnline) chkOnline.checked = !!activeMultiFilters.onlineOnly;
    }

    function syncQuickDropdownsFromState() {
      const qManglik = document.getElementById('quickFilterManglik');
      if (qManglik) qManglik.value = activeMultiFilters.manglik;

      const qAge = document.getElementById('quickFilterAge');
      if (qAge) qAge.value = activeMultiFilters.age;

      const qCity = document.getElementById('quickFilterCity');
      if (qCity) qCity.value = activeMultiFilters.city;

      const qProf = document.getElementById('quickFilterProfession');
      if (qProf) qProf.value = activeMultiFilters.profession;

      const qHeight = document.getElementById('quickFilterHeight');
      if (qHeight) qHeight.value = activeMultiFilters.height;
    }

    function openAdvancedFilterModal() {
      syncModalInputsFromState();
      document.getElementById('advancedFilterModal').classList.add('open');
    }

    function closeAdvancedFilterModal() {
      document.getElementById('advancedFilterModal').classList.remove('open');
    }

    function applyAdvancedModalFilters() {
      const rManglik = document.querySelector('input[name="modalAdvManglikRadio"]:checked')?.value || 'all';
      const rAge = document.querySelector('input[name="modalAdvAgeRadio"]:checked')?.value || 'all';
      const rHeight = document.querySelector('input[name="modalAdvHeightRadio"]:checked')?.value || 'all';
      const mCity = document.getElementById('modalAdvCity')?.value || 'all';
      const mProf = document.getElementById('modalAdvProfession')?.value || 'all';

      const chkGuna = document.getElementById('modalAdvHighGuna')?.checked || false;
      const chkVer = document.getElementById('modalAdvVerified')?.checked || false;
      const chkRoyal = document.getElementById('modalAdvRoyal')?.checked || false;
      const chkOnline = document.getElementById('modalAdvOnline')?.checked || false;

      activeMultiFilters = {
        manglik: rManglik,
        age: rAge,
        city: mCity,
        profession: mProf,
        height: rHeight,
        highGuna: chkGuna,
        verifiedOnly: chkVer,
        royalOnly: chkRoyal,
        onlineOnly: chkOnline
      };

      syncQuickDropdownsFromState();
      closeAdvancedFilterModal();
      applyCombinedFilters();
      renderActiveFilterPills();

      showToast('फ़िल्टर लागू हो गए 🎯', 'आपकी पसंद के अनुसार रिश्ते फिल्टर कर दिए गए हैं।', 'fa-filter');
    }

    function resetAllFiltersFromModal() {
      resetAllFilters();
      syncModalInputsFromState();
      closeAdvancedFilterModal();
    }

    function resetAllFilters() {
      activeMultiFilters = {
        manglik: 'all',
        age: 'all',
        city: 'all',
        profession: 'all',
        height: 'all',
        highGuna: false,
        verifiedOnly: false,
        royalOnly: false,
        onlineOnly: false
      };

      syncQuickDropdownsFromState();
      syncModalInputsFromState();
      applyCombinedFilters();
      renderActiveFilterPills();

      showToast('फ़िल्टर रीसेट 🔄', 'सभी फ़िल्टर हटा दिए गए हैं।', 'fa-rotate-left');
    }

    function removeSingleFilter(key) {
      if (key === 'highGuna' || key === 'verifiedOnly' || key === 'royalOnly' || key === 'onlineOnly') {
        activeMultiFilters[key] = false;
      } else {
        activeMultiFilters[key] = 'all';
      }

      syncQuickDropdownsFromState();
      syncModalInputsFromState();
      applyCombinedFilters();
      renderActiveFilterPills();
    }

    function checkCardMultiFilters(card) {
      // 1. Manglik check
      if (activeMultiFilters.manglik !== 'all') {
        const cardManglik = card.getAttribute('data-manglik') || '';
        if (cardManglik !== activeMultiFilters.manglik) return false;
      }

      // 2. Age check
      if (activeMultiFilters.age !== 'all') {
        const age = parseInt(card.getAttribute('data-age') || '0', 10);
        if (activeMultiFilters.age === '21-24' && (age < 21 || age > 24)) return false;
        if (activeMultiFilters.age === '25-27' && (age < 25 || age > 27)) return false;
        if (activeMultiFilters.age === '28-32' && (age < 28 || age > 32)) return false;
      }

      // 3. City check
      if (activeMultiFilters.city !== 'all') {
        const cardCity = (card.getAttribute('data-city') || '').toLowerCase();
        const cardLoc = (card.getAttribute('data-location') || '').toLowerCase();
        const targetCity = activeMultiFilters.city.toLowerCase();
        if (!cardCity.includes(targetCity) && !cardLoc.includes(targetCity)) return false;
      }

      // 4. Profession check
      if (activeMultiFilters.profession !== 'all') {
        const cardProf = card.getAttribute('data-profession') || '';
        if (cardProf !== activeMultiFilters.profession) return false;
      }

      // 5. Height check
      if (activeMultiFilters.height !== 'all') {
        const inches = parseInt(card.getAttribute('data-height-inches') || '0', 10);
        if (activeMultiFilters.height === 'short' && (inches < 60 || inches > 63)) return false;
        if (activeMultiFilters.height === 'medium' && (inches < 64 || inches > 66)) return false;
        if (activeMultiFilters.height === 'tall' && inches < 67) return false;
      }

      // 6. Highlights / Elite checks (उन्नत रिश्ते)
      if (activeMultiFilters.highGuna) {
        const guna = parseInt(card.getAttribute('data-guna') || '0', 10);
        if (guna < 28) return false;
      }

      if (activeMultiFilters.verifiedOnly) {
        const cats = card.getAttribute('data-categories') || '';
        const isVer = card.getAttribute('data-verified') === 'true' || cats.includes('verified');
        if (!isVer) return false;
      }

      if (activeMultiFilters.royalOnly) {
        const isRoyal = card.getAttribute('data-royal') === 'true';
        if (!isRoyal) return false;
      }

      if (activeMultiFilters.onlineOnly) {
        const isOnline = card.getAttribute('data-online') === 'true';
        if (!isOnline) return false;
      }

      return true;
    }

    function renderActiveFilterPills() {
      const container = document.getElementById('activeFilterPillsContainer');
      const listEl = document.getElementById('activePillsList');
      const resetBtn = document.getElementById('btnResetFilters');
      const badge = document.getElementById('activeFilterBadge');

      if (!container || !listEl) return;

      listEl.innerHTML = '';
      let activeCount = 0;

      const labels = {
        manglik: {
          'non_manglik': '🟢 अमांगलिक',
          'manglik': '🔴 मांगलिक',
          'anshik_manglik': '🟡 आंशिक मांगलिक'
        },
        age: {
          '21-24': '🎂 21-24 वर्ष',
          '25-27': '🎂 25-27 वर्ष',
          '28-32': '🎂 28-32 वर्ष'
        },
        height: {
          'short': '📏 5\'0"-5\'3"',
          'medium': '📏 5\'4"-5\'6"',
          'tall': '📏 5\'7"+'
        },
        profession: {
          'it_software': '💻 IT व सॉफ्टवेयर',
          'govt_service': '🏛️ सरकारी सेवा / Bank',
          'business_finance': '📊 CA व फाइनेंस',
          'education_teaching': '📚 शिक्षण व B.Ed',
          'design_architecture': '🎨 डिज़ाइन व आर्किटेक्चर'
        }
      };

      if (activeMultiFilters.manglik !== 'all') {
        createPillChip(labels.manglik[activeMultiFilters.manglik] || 'मांगलिक', 'manglik');
        activeCount++;
      }
      if (activeMultiFilters.age !== 'all') {
        createPillChip(labels.age[activeMultiFilters.age] || 'उम्र', 'age');
        activeCount++;
      }
      if (activeMultiFilters.city !== 'all') {
        createPillChip(`🏙️ ${activeMultiFilters.city}`, 'city');
        activeCount++;
      }
      if (activeMultiFilters.profession !== 'all') {
        createPillChip(labels.profession[activeMultiFilters.profession] || 'व्यवसाय', 'profession');
        activeCount++;
      }
      if (activeMultiFilters.height !== 'all') {
        createPillChip(labels.height[activeMultiFilters.height] || 'कद', 'height');
        activeCount++;
      }

      if (activeMultiFilters.highGuna) {
        createPillChip('🌟 28+ गुण मिलान', 'highGuna');
        activeCount++;
      }
      if (activeMultiFilters.verifiedOnly) {
        createPillChip('🛡️ 100% सत्यापित', 'verifiedOnly');
        activeCount++;
      }
      if (activeMultiFilters.royalOnly) {
        createPillChip('👑 रॉयल बायोडाटा', 'royalOnly');
        activeCount++;
      }
      if (activeMultiFilters.onlineOnly) {
        createPillChip('🟢 ऑनलाइन सदस्य', 'onlineOnly');
        activeCount++;
      }

      function createPillChip(text, key) {
        const chip = document.createElement('span');
        chip.className = 'inline-flex items-center gap-1 px-2 py-0.5 rounded-full bg-emerald-50 text-emerald-900 border border-emerald-300 text-[10px] font-bold shadow-2xs animate-fade-in';
        chip.innerHTML = `<span>${text}</span> <button type="button" onclick="removeSingleFilter('${key}')" class="text-emerald-700 hover:text-rose-600 transition ml-0.5 cursor-pointer font-black text-[11px]">&times;</button>`;
        listEl.appendChild(chip);
      }

      if (activeCount > 0) {
        container.classList.remove('hidden');
        if (resetBtn) resetBtn.classList.remove('hidden');
        if (badge) {
          badge.textContent = activeCount;
          badge.classList.remove('hidden');
        }
      } else {
        container.classList.add('hidden');
        if (resetBtn) resetBtn.classList.add('hidden');
        if (badge) badge.classList.add('hidden');
      }
    }

    function applyCombinedFilters() {
      const cards = document.querySelectorAll('.candidate-card');
      let visibleCount = 0;
      let samajTotal = 0;
      let samajMale = 0;
      let samajFemale = 0;

      cards.forEach(card => {
        const cardCaste = (card.getAttribute('data-caste') || '').toLowerCase().trim();
        const cardGender = (card.getAttribute('data-gender') || 'female').toLowerCase().trim();
        const cardCats = card.getAttribute('data-categories') || '';
        const cardVerified = card.getAttribute('data-verified') === 'true';
        const cardManglik = (card.getAttribute('data-manglik') || 'non_manglik').toLowerCase();

        // 1. Samaj check (Adv drawer Samaj overrides or falls back to currentSamajFilter)
        let matchSamaj = true;
        if (advDrawerFilters.caste && advDrawerFilters.caste !== 'all') {
          const target = advDrawerFilters.caste.toLowerCase().trim();
          matchSamaj = cardCaste.includes(target) || target.includes(cardCaste);
        } else if (currentSamajFilter && currentSamajFilter !== 'all') {
          const target = currentSamajFilter.toLowerCase().trim();
          matchSamaj = cardCaste.includes(target) || target.includes(cardCaste);
        }

        if (matchSamaj) {
          samajTotal++;
          if (cardGender === 'male') samajMale++;
          if (cardGender === 'female') samajFemale++;
        }

        // 2. Sub-filter inside Samaj
        let matchSub = true;
        if (currentSamajSubCategory === 'male') {
          matchSub = (cardGender === 'male');
        } else if (currentSamajSubCategory === 'female') {
          matchSub = (cardGender === 'female');
        } else if (currentSamajSubCategory === 'verified') {
          matchSub = cardVerified;
        } else if (currentSamajSubCategory === 'manglik') {
          matchSub = (cardManglik !== 'non_manglik' && cardManglik !== 'no');
        }

        // 3. Category check (Viewed Me, Mutual, Shortlisted, etc.)
        const matchCategory = (currentFilter === 'all' || cardCats.includes(currentFilter));

        // 4. Quick Modal Multi-Filters check
        const matchMulti = checkCardMultiFilters(card);

        // 5. Advanced Search Drawer Filters check
        let matchAdv = true;
        if (advDrawerFilters.matrimonyId) {
          const targetMid = advDrawerFilters.matrimonyId.toLowerCase().replace(/[^a-z0-9]/g, '');
          const cardMid = (card.getAttribute('data-matrimony-id') || '').toLowerCase().replace(/[^a-z0-9]/g, '');
          const cardId = (card.getAttribute('data-id') || '').toLowerCase();
          const cardText = (card.textContent || '').toLowerCase().replace(/[^a-z0-9]/g, '');
          if (!cardMid.includes(targetMid) && !targetMid.includes(cardMid) && !cardText.includes(targetMid) && cardId !== targetMid) {
            matchAdv = false;
          }
        }
        if (matchAdv && advDrawerFilters.gender !== 'all') {
          if (cardGender !== advDrawerFilters.gender) matchAdv = false;
        }
        if (matchAdv && advDrawerFilters.manglik !== 'all') {
          if (cardManglik !== advDrawerFilters.manglik) matchAdv = false;
        }
        if (matchAdv && advDrawerFilters.age !== 'all') {
          const age = parseInt(card.getAttribute('data-age') || '0', 10);
          if (advDrawerFilters.age === '20-25' && (age < 20 || age > 25)) matchAdv = false;
          if (advDrawerFilters.age === '26-29' && (age < 26 || age > 29)) matchAdv = false;
          if (advDrawerFilters.age === '30-34' && (age < 30 || age > 34)) matchAdv = false;
          if (advDrawerFilters.age === '35-plus' && age < 35) matchAdv = false;
        }
        if (matchAdv && advDrawerFilters.city !== 'all') {
          const cardCity = (card.getAttribute('data-city') || '').toLowerCase();
          const cardLoc = (card.getAttribute('data-location') || '').toLowerCase();
          const targetCity = advDrawerFilters.city.toLowerCase();
          if (!cardCity.includes(targetCity) && !cardLoc.includes(targetCity)) matchAdv = false;
        }
        if (matchAdv && advDrawerFilters.profession !== 'all') {
          const cardProf = (card.getAttribute('data-profession') || '').toLowerCase();
          const cardEdu = (card.getAttribute('data-edu') || '').toLowerCase();
          const targetProf = advDrawerFilters.profession.toLowerCase();
          if (cardProf !== targetProf && !cardEdu.includes(targetProf)) matchAdv = false;
        }
        if (matchAdv && advDrawerFilters.income !== 'all') {
          const minIncome = parseFloat(advDrawerFilters.income);
          const cardIncome = parseFloat(card.getAttribute('data-income') || '0');
          if (cardIncome < minIncome) matchAdv = false;
        }
        if (matchAdv && advDrawerFilters.verifiedOnly) {
          if (!cardVerified) matchAdv = false;
        }
        if (matchAdv && advDrawerFilters.highGuna) {
          const guna = parseInt(card.getAttribute('data-guna') || '0', 10);
          if (guna < 28) matchAdv = false;
        }
        if (matchAdv && advDrawerFilters.onlineOnly) {
          const isOnline = card.getAttribute('data-online') === 'true';
          if (!isOnline) matchAdv = false;
        }

        // 6. Instant Search Input Query check (ID, Name, Gotra, City, Profession)
        let matchSearch = true;
        if (activeSearchQuery && activeSearchQuery.length > 0) {
          const q = activeSearchQuery.toLowerCase().trim();
          const qClean = q.replace(/[^a-z0-9]/g, '');
          const cardMid = (card.getAttribute('data-matrimony-id') || '').toLowerCase();
          const cardMidClean = cardMid.replace(/[^a-z0-9]/g, '');
          const cardId = (card.getAttribute('data-id') || '').toLowerCase();
          const cardName = (card.getAttribute('data-name') || '').toLowerCase();
          const cardGotra = (card.getAttribute('data-gotra') || '').toLowerCase();
          const cardCity = (card.getAttribute('data-city') || '').toLowerCase();
          const cardLoc = (card.getAttribute('data-location') || '').toLowerCase();
          const cardEdu = (card.getAttribute('data-edu') || '').toLowerCase();
          const cardCasteVal = cardCaste.toLowerCase();
          const cardText = (card.textContent || '').toLowerCase();

          const matchesMid = (cardMid.includes(q) || (qClean && cardMidClean.includes(qClean)) || cardId === q);
          const matchesName = cardName.includes(q);
          const matchesGotra = cardGotra.includes(q);
          const matchesCity = (cardCity.includes(q) || cardLoc.includes(q));
          const matchesEdu = cardEdu.includes(q);
          const matchesCaste = cardCasteVal.includes(q);
          const matchesText = cardText.includes(q);

          if (!matchesMid && !matchesName && !matchesGotra && !matchesCity && !matchesEdu && !matchesCaste && !matchesText) {
            matchSearch = false;
          }
        }

        // Final Visibility Decision
        if (matchSamaj && matchSub && matchCategory && matchMulti && matchAdv && matchSearch) {
          card.dataset.filteredOut = 'false';
          visibleCount++;
        } else {
          card.dataset.filteredOut = 'true';
          card.style.display = 'none';
        }
      });

      // Update Pagination for visible cards
      if (typeof updatePagination === 'function') {
        updatePagination();
      }

      // Update count indicators
      const countNumberEl = document.getElementById('samajCountNumber');
      if (countNumberEl) countNumberEl.textContent = visibleCount;

      const cntAll = document.getElementById('countSamajAll');
      if (cntAll) cntAll.textContent = `(${samajTotal})`;
      const cntMale = document.getElementById('countSamajMale');
      if (cntMale) cntMale.textContent = `(${samajMale})`;
      const cntFemale = document.getElementById('countSamajFemale');
      if (cntFemale) cntFemale.textContent = `(${samajFemale})`;

      // Fallback Card Visibility Check
      const noMatchesEl = document.getElementById('noMatchesCard');
      if (noMatchesEl) {
        if (visibleCount === 0) {
          noMatchesEl.classList.remove('hidden');
          const titleEl = document.getElementById('noMatchesTitle');
          const descEl = document.getElementById('noMatchesDesc');
          if (activeSearchQuery) {
            if (titleEl) titleEl.textContent = `"${activeSearchQuery}" के लिए कोई बायोडाटा नहीं मिला`;
            if (descEl) descEl.textContent = `बायोडाटा ID (उदा. DM10041) अथवा नाम की स्पेलिंग जांचें, या 'सभी बायोडाटा पुनः देखें' दबाएं।`;
          } else {
            if (titleEl) titleEl.textContent = 'चयनित फिल्टर के अनुसार कोई रिश्ता नहीं मिला';
            if (descEl) descEl.textContent = 'कृपया कुछ फिल्टर कम करें अथवा पुनः प्रयास करें।';
          }
        } else {
          noMatchesEl.classList.add('hidden');
        }
      }

      const banner = document.getElementById('filterStatusText');
      const catNames = {
        'all': 'सभी योग्य रिश्ते (All Matches)',
        'viewed_me': 'किसने मुझे देखा (Who Viewed Me)',
        'interests_received': 'रुचि प्राप्त (Interests Received)',
        'interests_sent': 'रुचि भेजी (Interests Sent)',
        'mutual': 'आपसी मिलान (Mutual Matches)',
        'chat_history': 'चैट इतिहास (Chat History)',
        'shortlisted': 'पसंदीदा प्रोफाइल (Shortlisted)',
        'verified': 'सत्यापित रिश्ते (100% Verified)'
      };

      if (banner) {
        let activeName = (currentSamajFilter === 'all') ? 'समस्त समाज' : `${currentSamajFilter} समाज`;
        if (advDrawerFilters.caste && advDrawerFilters.caste !== 'all') {
          activeName = `${advDrawerFilters.caste} समाज`;
        }
        let searchNote = activeSearchQuery ? ` [खोज: "${activeSearchQuery}"]` : '';
        banner.innerHTML = `<i class="fa-solid fa-shield-halved text-emerald-700 mr-1.5"></i> <strong>${activeName}:</strong> ${visibleCount} प्रोफाइल (${catNames[currentFilter] || currentFilter})${searchNote}`;
      }
    }

    // Send Interest Button Click (Connected to Backend Database & Notifications)
    function sendInterest(btn, name) {
      if (btn.classList.contains('sent')) {
        showToast('पहले से भेजी गई है', `${name} को रुचि पहले ही भेजी जा चुकी है।`, 'fa-info');
        return;
      }
      btn.classList.add('sent');
      btn.innerHTML = `<i class="fa-solid fa-circle-check text-[9px]"></i><span>Interest Sent</span>`;
      showToast('रुचि भेजी गई! ❤️', `${name} को आपकी रुचि एवं बायोडाटा सफलतापूर्वक भेज दिया गया है।`, 'fa-heart');

      // Asynchronous API Persist to Database & Admin Mailer
      fetch('/matches/interest', {
        method: 'POST',
        headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
        body: 'name=' + encodeURIComponent(name)
      }).catch(() => {});
    }

    // Skip Card
    function skipCard(btn, name) {
      const card = btn.closest('.candidate-card');
      if (card) {
        card.style.transition = 'all 0.3s ease';
        card.style.opacity = '0';
        card.style.transform = 'translateX(60px)';
        setTimeout(() => {
          card.remove();
          showToast('प्रोफाइल हटाई गई', `${name} की प्रोफाइल सूची से हटा दी गई।`, 'fa-xmark');
        }, 300);
      }
    }

    // Share Profile
    function shareProfile(name, loc) {
      if (navigator.share) {
        navigator.share({
          title: `Dheeraja Matrimony - ${name}`,
          text: `${name} (${loc}) की रॉयल बायोडाटा प्रोफाइल देखें:`,
          url: window.location.href
        }).catch(() => {});
      } else {
        navigator.clipboard.writeText(window.location.href);
        showToast('लिंक कॉपी किया गया 📋', `${name} की प्रोफाइल लिंक क्लिपबोर्ड पर कॉपी हो गया है।`, 'fa-copy');
      }
    }

    // Profile Actions Menu (Shortlist Connected to Backend)
    function openProfileActions(name, id) {
      const choice = confirm(`${name} के लिए विकल्प:\n\n1. OK दबाएं - पसंदीदा (Shortlist) करें\n2. Cancel दबाएं - बंद करें`);
      if (choice) {
        showToast('पसंदीदा सूची में जोड़ा गया ⭐', `${name} को आपकी शॉर्टलिस्ट में सुरक्षित कर लिया गया है।`, 'fa-star');
        fetch('/matches/shortlist', {
          method: 'POST',
          headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
          body: 'target_id=' + encodeURIComponent(id)
        }).catch(() => {});
      }
    }

    // Kundali Milan Modal Controls
    let activeCandidate = {};
    function openKundaliModal(name, score, gotra, caste, loc) {
      activeCandidate = { name, score, gotra, caste, loc };
      document.getElementById('kmCandidateName').textContent = `${name} (${gotra} गोत्र) & आप`;
      document.getElementById('kmScoreNumber').textContent = score;
      const pct = Math.round((score / 36) * 100);
      document.getElementById('kmPercent').textContent = pct + '%';
      
      const verdict = document.getElementById('kmScoreVerdict');
      if (score >= 26) {
        verdict.textContent = 'अति उत्तम मिलान (Highly Auspicious)';
        verdict.className = 'inline-block mt-1 px-2 py-0.5 rounded-full bg-emerald-100 text-emerald-800 text-[10px] font-extrabold';
      } else if (score >= 18) {
        verdict.textContent = 'शुभ मिलान (Good Match)';
        verdict.className = 'inline-block mt-1 px-2 py-0.5 rounded-full bg-amber-100 text-amber-800 text-[10px] font-extrabold';
      } else {
        verdict.textContent = 'सामान्य मिलान (Average Match)';
        verdict.className = 'inline-block mt-1 px-2 py-0.5 rounded-full bg-stone-100 text-stone-800 text-[10px] font-extrabold';
      }

      document.getElementById('kundaliModal').classList.add('open');
    }
    function closeKundaliModal() {
      document.getElementById('kundaliModal').classList.remove('open');
    }
    function downloadKundaliReport() {
      showToast('कुंडली रिपोर्ट तैयार! 📄', `${activeCandidate.name || 'कैंडिडेट'} की 36 गुण अष्टकूट रिपोर्ट PDF डाउनलोड हो रही है...`, 'fa-file-pdf');
      setTimeout(() => {
        window.print();
      }, 600);
    }

    // VIP & WhatsApp Contact System (Freemium & VIP Paywall)
    let isVipUser = false; // default freemium status
    let currentContactData = { name: 'Priya Sharma', phone: '+91 98260 41289', father: 'श्री रमाकांत शर्मा (पिताजी)', loc: 'Indore, MP', photo: '/assets/images/match_priya.jpg' };

    function openContactModal(name, phone, father, loc, photo) {
      currentContactData = {
        name: name || 'कैंडिडेट',
        phone: phone || '+91 98260 41289',
        father: father || 'श्री रमाकांत शर्मा (पिताजी)',
        loc: loc || 'Indore, MP',
        photo: photo || '/assets/images/match_priya.jpg'
      };

      document.getElementById('contactCandidateName').textContent = currentContactData.name;
      document.getElementById('contactGuardianName').textContent = currentContactData.father;
      document.getElementById('contactLocationText').textContent = '📍 ' + currentContactData.loc;

      const phoneEl = document.getElementById('contactPhoneNumber');
      const badgeVip = document.getElementById('contactVipStatusBadge');
      
      if (isVipUser) {
        phoneEl.textContent = currentContactData.phone;
        if (badgeVip) badgeVip.innerHTML = '<i class="fa-solid fa-crown text-amber-500 mr-1"></i><span class="text-emerald-700 font-extrabold">VIP सदस्य • अनलॉक</span>';
      } else {
        const masked = currentContactData.phone.length > 7 ? currentContactData.phone.substring(0, 8) + ' •••••' : '+91 98260 •••••';
        phoneEl.textContent = masked;
        if (badgeVip) badgeVip.innerHTML = '<i class="fa-solid fa-lock text-amber-600 mr-1"></i><span class="text-amber-900 font-extrabold cursor-pointer" onclick="openVipWhatsappPayModal()">VIP अनलॉक आवश्यक</span>';
      }

      document.getElementById('contactModal').classList.add('open');
    }

    function closeContactModal() {
      document.getElementById('contactModal').classList.remove('open');
    }

    function handleWhatsappClickFromContactModal() {
      if (isVipUser) {
        const cleanPhone = currentContactData.phone.replace(/[^0-9]/g, '');
        window.open(`https://wa.me/${cleanPhone}?text=Namaste!%20I%20saw%20your%20profile%20of%20${encodeURIComponent(currentContactData.name)}%20on%20Dheeraja%20Matrimony.`, '_blank');
      } else {
        closeContactModal();
        openVipWhatsappPayModal(currentContactData.name, currentContactData.phone, currentContactData.father, currentContactData.photo);
      }
    }

    function handlePhoneClickFromContactModal() {
      if (isVipUser) {
        window.location.href = `tel:${currentContactData.phone}`;
      } else {
        closeContactModal();
        openVipWhatsappPayModal(currentContactData.name, currentContactData.phone, currentContactData.father, currentContactData.photo);
      }
    }

    function handleCardWhatsappClick(name, phone, father, photo) {
      if (isVipUser) {
        const cleanPhone = phone.replace(/[^0-9]/g, '');
        window.open(`https://wa.me/${cleanPhone}?text=Namaste!%20I%20saw%20your%20profile%20of%20${encodeURIComponent(name)}%20on%20Dheeraja%20Matrimony.`, '_blank');
      } else {
        openVipWhatsappPayModal(name, phone, father, photo);
      }
    }

    function openVipWhatsappPayModal(name, phone, father, photo) {
      const cName = name || currentContactData.name || 'कैंडिडेट';
      const cPhone = phone || currentContactData.phone || '+91 98260 41289';
      const cFather = father || currentContactData.father || 'श्री रमाकांत शर्मा (पिताजी)';
      const cPhoto = photo || currentContactData.photo || '/assets/images/match_priya.jpg';

      currentContactData = { name: cName, phone: cPhone, father: cFather, loc: currentContactData.loc || '', photo: cPhoto };

      const nameEl = document.getElementById('vipTargetName');
      if (nameEl) nameEl.textContent = cName;

      const fatherEl = document.getElementById('vipTargetFather');
      if (fatherEl) fatherEl.textContent = cFather;

      const photoEl = document.getElementById('vipTargetPhoto');
      if (photoEl) photoEl.src = cPhoto;

      const maskedPhone = cPhone.length > 7 ? cPhone.substring(0, 8) + ' •••••' : '+91 98260 •••••';
      const maskedPhoneEl = document.getElementById('vipMaskedPhone');
      if (maskedPhoneEl) maskedPhoneEl.textContent = maskedPhone;

      document.getElementById('vipWhatsappPayModal').classList.add('open');
    }

    function closeVipWhatsappModal() {
      document.getElementById('vipWhatsappPayModal').classList.remove('open');
    }

    function switchFromPayToFreeChat() {
      closeVipWhatsappModal();
      openChatModal(currentContactData.name, currentContactData.photo, true);
      showToast('मुफ्त संदेश फोल्डर 💬', `${currentContactData.name} के साथ ऐप में 100% फ्री सुरक्षित चैट शुरू हो गई है।`, 'fa-comment-dots');
    }

    function executeVipUnlockPayment() {
      const selectedPlan = document.querySelector('input[name="vip_plan_choice"]:checked')?.value || '499';
      showToast('सुरक्षित पेमेंट गेटवे 💳', `₹${selectedPlan} का पेमेंट प्रोसेस हो रहा है (UPI / QR)...`, 'fa-shield-halved');
      
      setTimeout(() => {
        isVipUser = true;
        closeVipWhatsappModal();
        showToast('VIP सदस्यता सक्रिय! 🎉', `बधाई हो! अब आप सीधे WhatsApp व फोन कॉल कर सकते हैं।`, 'fa-crown');
        
        // Open WhatsApp directly
        const cleanPhone = currentContactData.phone.replace(/[^0-9]/g, '');
        window.open(`https://wa.me/${cleanPhone}?text=Namaste!%20I%20saw%20your%20profile%20of%20${encodeURIComponent(currentContactData.name)}%20on%20Dheeraja%20Matrimony.`, '_blank');
      }, 1200);
    }

    function copyPhone() {
      if (!isVipUser) {
        showToast('VIP सुविधा 🔒', 'पूरा नंबर कॉपी करने के लिए VIP प्लान अनलॉक करें।', 'fa-lock');
        openVipWhatsappPayModal();
        return;
      }
      const phone = document.getElementById('contactPhoneNumber').textContent;
      navigator.clipboard.writeText(phone);
      showToast('नंबर कॉपी हुआ 📞', `${phone} क्लिपबोर्ड पर सुरक्षित हो गया है।`, 'fa-copy');
    }

    // Chat Modal Controls
    let activeChatName = '';
    function openChatModal(name, photo, isOnline) {
      activeChatName = name;
      document.getElementById('chatHeaderName').innerHTML = `<span>${name}</span> <i class="fa-solid fa-circle-check text-blue-400 text-[10px]"></i>`;
      document.getElementById('chatHeaderImg').src = photo;
      const ind = document.getElementById('chatOnlineIndicator');
      if (isOnline) {
        ind.innerHTML = `<span class="w-1.5 h-1.5 rounded-full bg-emerald-400 animate-pulse"></span><span>Online Now</span>`;
      } else {
        ind.innerHTML = `<span class="w-1.5 h-1.5 rounded-full bg-stone-400"></span><span>Active 2h ago</span>`;
      }
      document.getElementById('chatModal').classList.add('open');
    }
    function closeChatModal() {
      document.getElementById('chatModal').classList.remove('open');
    }
    function openKundaliFromChat() {
      closeChatModal();
      openKundaliModal(activeChatName, 28, 'Kashyap', 'Brahmin', 'Indore');
    }
    function sendMessage() {
      const input = document.getElementById('chatInput');
      const text = input.value.trim();
      if (!text) return;

      const box = document.getElementById('chatMessagesBox');
      const now = new Date();
      const timeStr = now.toLocaleTimeString([], { hour: '2-digit', minute: '2-digit' });

      // Append my message
      const msgDiv = document.createElement('div');
      msgDiv.className = 'flex items-start justify-end space-x-1.5 max-w-[85%] ml-auto animate-bounce-in';
      msgDiv.innerHTML = `
        <div class="p-2.5 rounded-2xl rounded-tr-xs bg-[#064E3B] text-white shadow-2xs leading-relaxed text-[11px]">
          ${text}
          <span class="text-[8.5px] text-emerald-200 block text-right mt-1">${timeStr} <i class="fa-solid fa-check text-[8px] text-emerald-300"></i></span>
        </div>
      `;
      box.appendChild(msgDiv);
      input.value = '';
      // Asynchronous API Persist to Database
      fetch('/matches/chat', {
        method: 'POST',
        headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
        body: 'message=' + encodeURIComponent(text) + '&target_id=1'
      }).catch(() => {});

      // Simulated auto-reply after 1.5 seconds
      setTimeout(() => {
        const replyDiv = document.createElement('div');
        replyDiv.className = 'flex items-start space-x-1.5 max-w-[85%] animate-bounce-in';
        replyDiv.innerHTML = `
          <div class="p-2.5 rounded-2xl rounded-tl-xs bg-white text-stone-800 shadow-2xs border border-stone-200 leading-relaxed text-[11px]">
            जी धन्यवाद! मैं परिवार से विचार-विमर्श करके आपको जल्द बताती हूँ। 🙏
            <span class="text-[8.5px] text-stone-400 block text-right mt-1">${timeStr}</span>
          </div>
        `;
        box.appendChild(replyDiv);
        box.scrollTop = box.scrollHeight;
      }, 1500);
    }
    function sendQuickReply(text) {
      document.getElementById('chatInput').value = text;
      sendMessage();
    }

    // Notifications Modal
    function toggleNotificationsModal() {
      const m = document.getElementById('notificationsModal');
      m.classList.toggle('open');
    }

    // ==================== INSTANT BIODATA ID & ADVANCED SEARCH SUITE ====================
    let isAdvSearchDrawerOpen = false;

    function onInstantSearchInput(val) {
      const q = (val || '').trim();
      const clearBtn = document.getElementById('btnClearInstantSearch');
      const dropdown = document.getElementById('instantSuggestDropdown');

      if (q.length > 0) {
        if (clearBtn) clearBtn.classList.remove('hidden');
        renderInstantSearchSuggestions(q);
      } else {
        if (clearBtn) clearBtn.classList.add('hidden');
        if (dropdown) dropdown.classList.add('hidden');
        activeSearchQuery = '';
        applyCombinedFilters();
        const feedbackBar = document.getElementById('searchFeedbackBar');
        if (feedbackBar) feedbackBar.classList.add('hidden');
        return;
      }

      // Debounced live filtering of candidate cards grid
      if (window.instantSearchDebounceTimer) {
        clearTimeout(window.instantSearchDebounceTimer);
      }
      window.instantSearchDebounceTimer = setTimeout(() => {
        activeSearchQuery = q.toLowerCase();
        applyCombinedFilters();
      }, 150);
    }

    function renderInstantSearchSuggestions(query) {
      const dropdown = document.getElementById('instantSuggestDropdown');
      if (!dropdown) return;

      const q = query.toLowerCase().trim();
      const qClean = q.replace(/[^a-z0-9]/g, '');
      const cards = document.querySelectorAll('.candidate-card');
      const matched = [];

      cards.forEach(card => {
        const mid = card.getAttribute('data-matrimony-id') || ('DM' + (10000 + parseInt(card.getAttribute('data-id') || '0', 10)));
        const midClean = mid.toLowerCase().replace(/[^a-z0-9]/g, '');
        const id = card.getAttribute('data-id') || '';
        const name = card.getAttribute('data-name') || '';
        const caste = card.getAttribute('data-caste') || '';
        const gotra = card.getAttribute('data-gotra') || '';
        const city = card.getAttribute('data-city') || '';
        const age = card.getAttribute('data-age') || '';
        const height = card.getAttribute('data-height') || '';
        const prof = card.getAttribute('data-profession') || '';
        const edu = card.getAttribute('data-edu') || '';
        const imgEl = card.querySelector('img');
        const photo = imgEl ? imgEl.src : '/assets/images/match_priya.jpg';
        const isVer = card.getAttribute('data-verified') === 'true';

        // Check matching
        const matchMid = (mid.toLowerCase().includes(q) || (qClean && midClean.includes(qClean)) || id === q);
        const matchName = name.toLowerCase().includes(q);
        const matchGotra = gotra.toLowerCase().includes(q);
        const matchCity = city.toLowerCase().includes(q);
        const matchCaste = caste.toLowerCase().includes(q);
        const matchEdu = edu.toLowerCase().includes(q);

        if (matchMid || matchName || matchGotra || matchCity || matchCaste || matchEdu) {
          matched.push({
            mid,
            name,
            caste,
            gotra,
            city,
            age,
            height,
            prof,
            edu,
            photo,
            isVer,
            cardId: id
          });
        }
      });

      if (matched.length === 0) {
        dropdown.innerHTML = `
          <div class="p-3 text-center text-xs text-stone-600 bg-amber-50/40">
            <span class="text-amber-700 font-bold">🔍 "${query}"</span> के लिए कोई सीधा सुझाव नहीं मिला।
            <div class="mt-1 text-[10.5px] text-stone-400">Enter दबाकर पूरा सर्च करें या स्पेलिंग जांचें।</div>
          </div>
        `;
        dropdown.classList.remove('hidden');
        return;
      }

      // Render top 5-6 matching candidates in dropdown
      const topMatches = matched.slice(0, 6);
      dropdown.innerHTML = `
        <div class="p-1.5 bg-amber-50/90 border-b border-amber-200/80 flex items-center justify-between text-[10.5px] font-black text-amber-900">
          <span class="flex items-center gap-1"><i class="fa-solid fa-bolt text-amber-600"></i> सीधे बायोडाटा सुझाव (${matched.length})</span>
          <span class="text-[9.5px] text-stone-500 font-normal">क्लिक करें और तुरंत देखें</span>
        </div>
      `;

      topMatches.forEach(item => {
        const itemRow = document.createElement('div');
        itemRow.className = 'suggest-item p-2 hover:bg-amber-50/70 transition flex items-center justify-between gap-2 cursor-pointer border-b border-stone-100 last:border-b-0';
        itemRow.onclick = () => selectSuggestedCandidate(item.mid, item.name, item.cardId);
        itemRow.innerHTML = `
          <div class="flex items-center gap-2 min-w-0">
            <img src="${item.photo}" alt="${item.name}" class="w-8 h-8 rounded-full object-cover border border-amber-300 shadow-2xs shrink-0">
            <div class="min-w-0">
              <div class="flex items-center gap-1">
                <span class="font-extrabold text-stone-900 text-xs truncate">${item.name}</span>
                ${item.isVer ? '<i class="fa-solid fa-circle-check text-blue-600 text-[10px]" title="सत्यापित"></i>' : ''}
                <span class="bg-amber-100 text-emerald-950 border border-amber-300 font-mono font-black text-[9px] px-1 py-0.2 rounded ml-1">${item.mid}</span>
              </div>
              <div class="text-[10px] text-stone-500 truncate mt-0.5">
                ${item.age} वर्ष • ${item.caste} (${item.gotra}) • ${item.city}
              </div>
            </div>
          </div>
          <button type="button" class="shrink-0 px-2 py-1 rounded-lg bg-emerald-800 text-amber-300 font-bold text-[10px] hover:bg-emerald-700 shadow-2xs">
            देखें →
          </button>
        `;
        dropdown.appendChild(itemRow);
      });

      dropdown.classList.remove('hidden');
    }

    function selectSuggestedCandidate(mid, name, cardId) {
      const input = document.getElementById('instantSearchInput');
      const dropdown = document.getElementById('instantSuggestDropdown');
      const clearBtn = document.getElementById('btnClearInstantSearch');
      if (input) input.value = mid;
      if (clearBtn) clearBtn.classList.remove('hidden');
      if (dropdown) dropdown.classList.add('hidden');

      activeSearchQuery = mid.toLowerCase();
      applyCombinedFilters();

      // Find the card and smooth scroll with pulse highlight
      const targetCard = document.querySelector(`.candidate-card[data-matrimony-id="${mid}"]`) ||
                         document.querySelector(`.candidate-card[data-id="${cardId}"]`);

      if (targetCard) {
        targetCard.style.display = 'block';
        setTimeout(() => {
          targetCard.scrollIntoView({ behavior: 'smooth', block: 'center' });
          targetCard.classList.remove('highlight-card-pulse');
          // Force reflow
          void targetCard.offsetWidth;
          targetCard.classList.add('highlight-card-pulse');
          setTimeout(() => {
            targetCard.classList.remove('highlight-card-pulse');
          }, 3500);
        }, 150);
      }

      const feedbackBar = document.getElementById('searchFeedbackBar');
      const feedbackText = document.getElementById('searchFeedbackText');
      if (feedbackBar && feedbackText) {
        feedbackBar.classList.remove('hidden');
        feedbackText.innerHTML = `<i class="fa-solid fa-circle-check text-emerald-400 text-xs mr-1"></i> बायोडाटा ID <strong>${mid}</strong> (${name}) चयनित`;
      }

      showToast('बायोडाटा मिल गया ✨', `${name} (${mid}) की प्रोफाइल प्रदर्शित की गई है।`, 'fa-circle-check');
    }

    function executeInstantSearch() {
      const input = document.getElementById('instantSearchInput');
      const dropdown = document.getElementById('instantSuggestDropdown');
      if (dropdown) dropdown.classList.add('hidden');

      const q = (input ? input.value : '').trim();
      if (!q) {
        clearInstantSearch();
        return;
      }

      activeSearchQuery = q.toLowerCase();
      applyCombinedFilters();

      // Check if there is exactly 1 visible card, scroll to it!
      const visibleCards = Array.from(document.querySelectorAll('.candidate-card')).filter(c => c.style.display !== 'none');
      if (visibleCards.length === 1) {
        const card = visibleCards[0];
        const cardName = card.getAttribute('data-name') || '';
        const cardMid = card.getAttribute('data-matrimony-id') || '';
        setTimeout(() => {
          card.scrollIntoView({ behavior: 'smooth', block: 'center' });
          card.classList.add('highlight-card-pulse');
          setTimeout(() => card.classList.remove('highlight-card-pulse'), 3500);
        }, 150);
        showToast('बायोडाटा मिल गया ✨', `${cardName} (${cardMid}) प्रदर्शित है।`, 'fa-circle-check');
      } else {
        showToast('खोज परिणाम 🔍', `"${q}" के लिए ${visibleCards.length} बायोडाटा मिले।`, 'fa-magnifying-glass');
      }

      const feedbackBar = document.getElementById('searchFeedbackBar');
      const feedbackText = document.getElementById('searchFeedbackText');
      if (feedbackBar && feedbackText) {
        feedbackBar.classList.remove('hidden');
        feedbackText.innerHTML = `<i class="fa-solid fa-magnifying-glass text-amber-400 text-xs mr-1"></i> खोज परिणाम: "${q}" — <strong>${visibleCards.length}</strong> रिश्ते मिले`;
      }
    }

    function clearInstantSearch() {
      const input = document.getElementById('instantSearchInput');
      const clearBtn = document.getElementById('btnClearInstantSearch');
      const dropdown = document.getElementById('instantSuggestDropdown');
      const feedbackBar = document.getElementById('searchFeedbackBar');

      if (input) input.value = '';
      if (clearBtn) clearBtn.classList.add('hidden');
      if (dropdown) dropdown.classList.add('hidden');
      if (feedbackBar && !hasActiveDrawerFilters()) feedbackBar.classList.add('hidden');

      activeSearchQuery = '';
      applyCombinedFilters();
      showToast('खोज रीसेट 🔄', 'सभी रिश्ते पुनः प्रदर्शित कर दिए गए हैं।', 'fa-rotate-left');
    }

    function hasActiveDrawerFilters() {
      return (
        advDrawerFilters.matrimonyId ||
        advDrawerFilters.gender !== 'all' ||
        advDrawerFilters.caste !== 'all' ||
        advDrawerFilters.manglik !== 'all' ||
        advDrawerFilters.age !== 'all' ||
        advDrawerFilters.city !== 'all' ||
        advDrawerFilters.profession !== 'all' ||
        advDrawerFilters.income !== 'all' ||
        advDrawerFilters.verifiedOnly ||
        advDrawerFilters.highGuna ||
        advDrawerFilters.onlineOnly
      );
    }

    function toggleAdvancedSearchDrawer() {
      const drawer = document.getElementById('advancedSearchDrawer');
      if (drawer) {
        drawer.classList.toggle('hidden');
        if (!drawer.classList.contains('hidden')) {
          const idInput = document.getElementById('advFilterMatrimonyId');
          const searchInput = document.getElementById('instantSearchInput');
          if (idInput && !idInput.value && searchInput && searchInput.value) {
            idInput.value = searchInput.value;
          }
        }
      }
    }

    function applyAdvancedSearchDrawerFilters() {
      const midInput = document.getElementById('advFilterMatrimonyId');
      const genderEl = document.getElementById('advFilterGender');
      const casteEl = document.getElementById('advFilterCaste');
      const manglikEl = document.getElementById('advFilterManglik');
      const ageEl = document.getElementById('advFilterAge');
      const cityEl = document.getElementById('advFilterCity');
      const profEl = document.getElementById('advFilterProfession');
      const incomeEl = document.getElementById('advFilterIncome');
      const verEl = document.getElementById('advFilterVerifiedOnly');
      const gunaEl = document.getElementById('advFilterHighGuna');
      const onlineEl = document.getElementById('advFilterOnlineOnly');

      advDrawerFilters.matrimonyId = midInput ? midInput.value.trim() : '';
      advDrawerFilters.gender = genderEl ? genderEl.value : 'all';
      advDrawerFilters.caste = casteEl ? casteEl.value : 'all';
      advDrawerFilters.manglik = manglikEl ? manglikEl.value : 'all';
      advDrawerFilters.age = ageEl ? ageEl.value : 'all';
      advDrawerFilters.city = cityEl ? cityEl.value : 'all';
      advDrawerFilters.profession = profEl ? profEl.value : 'all';
      advDrawerFilters.income = incomeEl ? incomeEl.value : 'all';
      advDrawerFilters.verifiedOnly = verEl ? verEl.checked : false;
      advDrawerFilters.highGuna = gunaEl ? gunaEl.checked : false;
      advDrawerFilters.onlineOnly = onlineEl ? onlineEl.checked : false;

      let count = 0;
      if (advDrawerFilters.matrimonyId) count++;
      if (advDrawerFilters.gender !== 'all') count++;
      if (advDrawerFilters.caste !== 'all') count++;
      if (advDrawerFilters.manglik !== 'all') count++;
      if (advDrawerFilters.age !== 'all') count++;
      if (advDrawerFilters.city !== 'all') count++;
      if (advDrawerFilters.profession !== 'all') count++;
      if (advDrawerFilters.income !== 'all') count++;
      if (advDrawerFilters.verifiedOnly) count++;
      if (advDrawerFilters.highGuna) count++;
      if (advDrawerFilters.onlineOnly) count++;

      const badge = document.getElementById('advFilterBadge');
      if (badge) {
        if (count > 0) {
          badge.textContent = count;
          badge.classList.remove('hidden');
        } else {
          badge.classList.add('hidden');
        }
      }

      // Hide drawer
      const drawer = document.getElementById('advancedSearchDrawer');
      if (drawer) drawer.classList.add('hidden');

      applyCombinedFilters();

      const visibleCards = Array.from(document.querySelectorAll('.candidate-card')).filter(c => c.style.display !== 'none');
      const feedbackBar = document.getElementById('searchFeedbackBar');
      const feedbackText = document.getElementById('searchFeedbackText');
      if (feedbackBar && feedbackText) {
        if (count > 0 || activeSearchQuery) {
          feedbackBar.classList.remove('hidden');
          feedbackText.innerHTML = `<i class="fa-solid fa-sliders text-amber-400 text-xs mr-1"></i> <strong>उन्नत फ़िल्टर:</strong> ${count} फ़िल्टर सक्रिय (${visibleCards.length} रिश्ते मिले)`;
        } else {
          feedbackBar.classList.add('hidden');
        }
      }

      showToast('उन्नत फ़िल्टर लागू 🎯', `${count} फ़िल्टर के अनुसार ${visibleCards.length} रिश्ते मिले।`, 'fa-filter');
    }

    function resetAllAdvancedFilters() {
      const midInput = document.getElementById('advFilterMatrimonyId');
      if (midInput) midInput.value = '';
      const genderEl = document.getElementById('advFilterGender');
      if (genderEl) genderEl.value = 'all';
      const casteEl = document.getElementById('advFilterCaste');
      if (casteEl) casteEl.value = 'all';
      const manglikEl = document.getElementById('advFilterManglik');
      if (manglikEl) manglikEl.value = 'all';
      const ageEl = document.getElementById('advFilterAge');
      if (ageEl) ageEl.value = 'all';
      const cityEl = document.getElementById('advFilterCity');
      if (cityEl) cityEl.value = 'all';
      const profEl = document.getElementById('advFilterProfession');
      if (profEl) profEl.value = 'all';
      const incomeEl = document.getElementById('advFilterIncome');
      if (incomeEl) incomeEl.value = 'all';
      const verEl = document.getElementById('advFilterVerifiedOnly');
      if (verEl) verEl.checked = false;
      const gunaEl = document.getElementById('advFilterHighGuna');
      if (gunaEl) gunaEl.checked = false;
      const onlineEl = document.getElementById('advFilterOnlineOnly');
      if (onlineEl) onlineEl.checked = false;

      advDrawerFilters = {
        matrimonyId: '',
        gender: 'all',
        caste: 'all',
        manglik: 'all',
        age: 'all',
        city: 'all',
        profession: 'all',
        income: 'all',
        verifiedOnly: false,
        highGuna: false,
        onlineOnly: false
      };

      const badge = document.getElementById('advFilterBadge');
      if (badge) badge.classList.add('hidden');

      const feedbackBar = document.getElementById('searchFeedbackBar');
      if (feedbackBar && !activeSearchQuery) feedbackBar.classList.add('hidden');

      applyCombinedFilters();
      showToast('फ़िल्टर रीसेट 🔄', 'सभी उन्नत फ़िल्टर हटा दिए गए हैं।', 'fa-rotate-left');
    }

    function focusInstantSearch() {
      const section = document.getElementById('instantSearchSection');
      const input = document.getElementById('instantSearchInput');
      if (section) {
        section.scrollIntoView({ behavior: 'smooth', block: 'center' });
      }
      if (input) {
        setTimeout(() => {
          input.focus();
          input.select();
        }, 200);
      }
    }

    // Backwards compatibility for header search button
    function toggleSearchModal() {
      focusInstantSearch();
    }

    // Close suggestions dropdown when clicking outside
    document.addEventListener('click', function(e) {
      const section = document.getElementById('instantSearchSection');
      if (section && !section.contains(e.target)) {
        const dropdown = document.getElementById('instantSuggestDropdown');
        if (dropdown) dropdown.classList.add('hidden');
      }
    });

    // Check URL parameters for instant ID jump (e.g. ?id=DM10041 or ?q=Sindhi)
    window.addEventListener('DOMContentLoaded', () => {
      const params = new URLSearchParams(window.location.search);
      const paramId = params.get('id') || params.get('mid');
      const paramQ = params.get('q') || params.get('search');
      if (paramId) {
        const input = document.getElementById('instantSearchInput');
        if (input) {
          input.value = paramId;
          onInstantSearchInput(paramId);
          setTimeout(() => executeInstantSearch(), 300);
        }
      } else if (paramQ) {
        const input = document.getElementById('instantSearchInput');
        if (input) {
          input.value = paramQ;
          onInstantSearchInput(paramQ);
          setTimeout(() => executeInstantSearch(), 300);
        }
      }
    });

    // ==================== REAL DYNAMIC PAGINATION ====================
    let currentPage = 1;
    const pageSize = 12;

    function updatePagination() {
      const allCards = Array.from(document.querySelectorAll('.candidate-card'));
      const activeCards = allCards.filter(c => c.dataset.filteredOut !== 'true');
      const totalCards = activeCards.length;
      const totalPages = Math.max(1, Math.ceil(totalCards / pageSize));

      if (currentPage > totalPages) currentPage = totalPages;
      if (currentPage < 1) currentPage = 1;

      allCards.forEach(c => {
        if (c.dataset.filteredOut === 'true') {
          c.style.display = 'none';
        }
      });

      activeCards.forEach((c, idx) => {
        const start = (currentPage - 1) * pageSize;
        const end = start + pageSize;
        if (idx >= start && idx < end) {
          c.style.display = 'block';
        } else {
          c.style.display = 'none';
        }
      });

      const indicator = document.getElementById('pageIndicator');
      if (indicator) {
        indicator.textContent = `Page ${currentPage} of ${totalPages} (${totalCards} बायोडाटा)`;
      }
      const prevBtn = document.getElementById('btnPrevPage');
      if (prevBtn) prevBtn.disabled = (currentPage <= 1);
      const nextBtn = document.getElementById('btnNextPage');
      if (nextBtn) nextBtn.disabled = (currentPage >= totalPages);
    }

    function changePage(delta) {
      currentPage += delta;
      updatePagination();
      const container = document.getElementById('matchesContainer');
      if (container) container.scrollIntoView({ behavior: 'smooth' });
      showToast(`पेज ${currentPage}`, `पेज ${currentPage} के रिश्ते प्रदर्शित हैं`, 'fa-arrows-rotate');
    }

    // ==================== ROYAL GOLDEN BIODATA & 1-CLICK PDF LOGIC ====================
    const dynamicServerCatalog = <?= json_encode($biodata_catalog ?? [], JSON_UNESCAPED_UNICODE) ?>;
    const royalCandidatesCatalog = Object.assign({}, dynamicServerCatalog, {
      'Priya Sharma': {
        id: 'DM10028',
        slug: 'priya-sharma',
        name: 'प्रिया शर्मा (Priya Sharma)',
        raw_name: 'Priya Sharma',
        gender_prefix: 'सौभाग्यकांक्षिणी (सौ.)',
        dob: '12 मई 1998 (12-05-1998)',
        birth_time: 'प्रातः 07:45 बजे',
        birth_place: 'इन्दौर, मध्य प्रदेश',
        age_height: '26 वर्ष | 5 फीट 4 इंच',
        caste: 'सनाढ्य ब्राह्मण (Brahmin)',
        caste_full: 'सनाढ्य ब्राह्मण (सनातन हिन्दू)',
        religion: 'सनातन हिन्दू',
        gotra: 'कश्यप (Kashyap)',
        origin_gotra: 'शांडिल्य (ऐच्छिक)',
        rashi: 'कन्या (हस्त नक्षत्र)',
        manglik: 'नहीं (अमांगलिक / सौम्य कुंडली)',
        guna_score: '28 / 36 गुण उत्तम',
        education: 'B.Tech (Computer Science)',
        college: 'SGSITS, Indore (Gold Medalist)',
        occupation: 'सीनियर सॉफ्टवेयर इंजीनियर',
        company: 'MNC Tech Solutions (Hybrid)',
        income: '₹ 14.50 LPA',
        income_full: '₹ 14,50,000/- प्रतिवर्ष (14.5 LPA)',
        work_city: 'इन्दौर / बेंगलुरु',
        marital: 'अविवाहित (Never Married)',
        diet: 'शुद्ध शाकाहारी',
        complexion: 'गोरा (Fair & Radiant)',
        father_name: 'डॉ. रमाकांत शर्मा',
        father_occ: 'मुख्य चिकित्सा अधिकारी (CMO Retd.)',
        mother_name: 'श्रीमती सुनीता शर्मा',
        siblings: '1 छोटा भाई (IIT Delhi से B.Tech)',
        native: 'इन्दौर / उज्जैन (मध्य प्रदेश)',
        family_type: 'उच्च मध्यमवर्गीय संयुक्त व संस्कारी',
        contact_person: 'डॉ. रमाकांत शर्मा (पिताजी)',
        phone: '+91 98260 41289',
        address: '142, साकेत नगर, ओल्ड पलासिया, इन्दौर (म.प्र.)',
        photo: '/assets/images/match_priya.jpg'
      },
      'Neha Verma': {
        id: 'DM10034',
        slug: 'neha-verma',
        name: 'नेहा वर्मा (Neha Verma)',
        raw_name: 'Neha Verma',
        gender_prefix: 'सौभाग्यकांक्षिणी (सौ.)',
        dob: '18 अगस्त 2000 (18-08-2000)',
        birth_time: 'प्रातः 10:15 बजे',
        birth_place: 'पुणे, महाराष्ट्र',
        age_height: '24 वर्ष | 5 फीट 3 इंच',
        caste: 'कायस्थ (Kayastha)',
        caste_full: 'कायस्थ (श्रीवास्तव)',
        religion: 'सनातन हिन्दू',
        gotra: 'भारद्वाज (Bharadwaj)',
        origin_gotra: 'कश्यप (ऐच्छिक)',
        rashi: 'तुला (चित्रा नक्षत्र)',
        manglik: 'आंशिक मांगलिक (परिहार सहित)',
        guna_score: '31 / 36 गुण अत्यंत शुभ',
        education: 'M.Sc (Biotechnology)',
        college: 'पुणे यूनिवर्सिटी (Pune University)',
        occupation: 'क्लीनिकल रिसर्च एसोसिएट',
        company: 'सीरम इंस्टीट्यूट ऑफ इंडिया (Serum Institute)',
        income: '₹ 9.80 LPA',
        income_full: '₹ 9,80,000/- प्रतिवर्ष (9.8 LPA)',
        work_city: 'पुणे, महाराष्ट्र',
        marital: 'अविवाहित (Never Married)',
        diet: 'शाकाहारी (Vegetarian)',
        complexion: 'गेहुंआ/गोरा (Fair)',
        father_name: 'श्री सतीश वर्मा',
        father_occ: 'सेवानिवृत्त बैंक मुख्य प्रबंधक (SBI)',
        mother_name: 'श्रीमती अनीता वर्मा',
        siblings: '1 बड़ी बहन (विवाहित, MNC में)',
        native: 'पुणे / नागपुर (महाराष्ट्र)',
        family_type: 'मध्यमवर्गीय संस्कारी व शिक्षित',
        contact_person: 'श्री सतीश वर्मा (पिताजी)',
        phone: '+91 97654 82910',
        address: 'फ्लैट 402, रॉयल पाम्स, कोथरुड, पुणे (महाराष्ट्र)',
        photo: '/assets/images/match_neha.jpg'
      },
      'Anjali Singh': {
        id: 'DM10038',
        slug: 'anjali-singh',
        name: 'अंजलि सिंह (Anjali Singh)',
        raw_name: 'Anjali Singh',
        gender_prefix: 'सौभाग्यकांक्षिणी (सौ.)',
        dob: '04 नवम्बर 1999 (04-11-1999)',
        birth_time: 'प्रातः 04:30 बजे (ब्रह्म मुहूर्त)',
        birth_place: 'जयपुर, राजस्थान',
        age_height: '25 वर्ष | 5 फीट 5 इंच',
        caste: 'राजपूत राठौड़ (Rajput)',
        caste_full: 'सूर्यवंशी कुलीन राजपूत',
        religion: 'सनातन हिन्दू',
        gotra: 'गौतम (Gautam)',
        origin_gotra: 'राठौड़ कुल (ऐच्छिक)',
        rashi: 'वृषभ (रोहिणी नक्षत्र)',
        manglik: 'नहीं (अमांगलिक / सर्वगुण संपन्न)',
        guna_score: '32 / 36 गुण सर्वश्रेष्ठ',
        education: 'MBA (Finance & Banking)',
        college: 'राजस्थान विश्वविद्यालय, जयपुर',
        occupation: 'असिस्टेंट मैनेजर',
        company: 'HDFC बैंक लिमिटेड',
        income: '₹ 12.00 LPA',
        income_full: '₹ 12,00,000/- प्रतिवर्ष (12 LPA)',
        work_city: 'जयपुर, राजस्थान',
        marital: 'अविवाहित (Never Married)',
        diet: 'शुद्ध शाकाहारी',
        complexion: 'अत्यंत गोरा (Very Fair & Royal)',
        father_name: 'ठाकुर भंवर सिंह',
        father_occ: 'कृषि एवं रियल एस्टेट व्यवसायी',
        mother_name: 'श्रीमती पुष्पा कंवर',
        siblings: '2 भाई (1 सेना में कैप्टन, 1 बिज़नेस)',
        native: 'जयपुर / जोधपुर (राजस्थान)',
        family_type: 'कुलीन रॉयल राजपूत संयुक्त परिवार',
        contact_person: 'ठाकुर भंवर सिंह (पिताजी)',
        phone: '+91 94140 76321',
        address: 'राठौड़ विला, प्लॉट 52, वैशाली नगर, जयपुर (राज.)',
        photo: '/assets/images/match_anjali.jpg'
      },
      'Ritika Patel': {
        id: 'DM10055',
        slug: 'ritika-patel',
        name: 'रीतिका पटेल (Ritika Patel)',
        raw_name: 'Ritika Patel',
        gender_prefix: 'सौभाग्यकांक्षिणी (सौ.)',
        dob: '22 जनवरी 1997 (22-01-1997)',
        birth_time: 'दोपहर 01:20 बजे',
        birth_place: 'अहमदाबाद, गुजरात',
        age_height: '27 वर्ष | 5 फीट 2 इंच',
        caste: 'कड़वा पाटीदार (Patidar)',
        caste_full: 'पाटीदार (सनातन वैष्णव)',
        religion: 'सनातन हिन्दू वैष्णव',
        gotra: 'वशिष्ठ (Vashishtha)',
        origin_gotra: 'कश्यप (ऐच्छिक)',
        rashi: 'मिथुन (पुनर्वसु नक्षत्र)',
        manglik: 'नहीं (अमांगलिक)',
        guna_score: '29 / 36 गुण उत्तम',
        education: 'CA (Chartered Accountant) & B.Com',
        college: 'ICAI (Institute of Chartered Accountants)',
        occupation: 'सीनियर फाइनेंशियल ऑडिटर',
        company: 'Big 4 Financial Advisory Services',
        income: '₹ 16.00 LPA',
        income_full: '₹ 16,00,000/- प्रतिवर्ष (16 LPA)',
        work_city: 'अहमदाबाद, गुजरात',
        marital: 'अविवाहित (Never Married)',
        diet: 'शुद्ध शाकाहारी (Pure Jain/Veg)',
        complexion: 'गोरा (Fair)',
        father_name: 'श्री दिनेश पटेल',
        father_occ: 'उद्योगपति (डायरेक्टर - टेक्सटाइल)',
        mother_name: 'श्रीमती हंसा पटेल',
        siblings: '1 बड़ा भाई (डायरेक्टर, टेक्सटाइल)',
        native: 'अहमदाबाद / मेहसाणा (गुजरात)',
        family_type: 'उच्च संभ्रांत वैष्णव व्यापारिक परिवार',
        contact_person: 'श्री दिनेश पटेल (पिताजी)',
        phone: '+91 98980 54312',
        address: '701, शिवालिक हाइट्स, बोडकदेव, अहमदाबाद (गुजरात)',
        photo: '/assets/images/match_ritika.jpg'
      },
      'Khushi Advani': {
        id: 'DM10040',
        slug: 'khushi-advani',
        name: 'खुशी अडवाणी (Khushi Advani)',
        raw_name: 'Khushi Advani',
        gender_prefix: 'सौभाग्यकांक्षिणी (सौ.)',
        dob: '14 मई 2001 (14-05-2001)',
        birth_time: 'प्रातः 08:45 बजे',
        birth_place: 'जयपुर, राजस्थान',
        age_height: '25 वर्ष | 5 फीट 4 इंच',
        caste: 'सिंधी (Sindhi)',
        caste_full: 'सिंधी समाज (कुलीन व्यापारिक परिवार)',
        religion: 'सनातन हिन्दू',
        gotra: 'अडवाणी (Advani)',
        origin_gotra: 'सिंधी समाज (ऐच्छिक)',
        rashi: 'कन्या (हस्त नक्षत्र)',
        manglik: 'आंशिक मांगलिक (सौम्य)',
        guna_score: '28 / 36 गुण उत्तम',
        education: 'Fashion Merchandiser & BBA (NIFT Certified)',
        college: 'NIFT / राजस्थान विश्वविद्यालय',
        occupation: 'फैशन मर्चेंडाइज़र एवं स्टाइलिस्ट',
        company: 'रॉयल हेरिटेज क्रिएशन्स',
        income: '₹ 10.00 LPA',
        income_full: '₹ 10,00,000/- प्रतिवर्ष (10 LPA)',
        work_city: 'जयपुर, राजस्थान',
        marital: 'अविवाहित (Never Married)',
        diet: 'शाकाहारी (Vegetarian)',
        complexion: 'गोरा व आकर्षक (Fair & Charming)',
        father_name: 'श्री किशन लाल अडवाणी',
        father_occ: 'टेक्सटाइल एवं गारमेंट्स व्यवसायी',
        mother_name: 'श्रीमती कोमल अडवाणी',
        siblings: '1 छोटा भाई (B.Com)',
        native: 'जयपुर (राजस्थान)',
        family_type: 'सिंधी संभ्रांत मध्यमवर्गीय संयुक्त परिवार',
        contact_person: 'श्री किशन लाल अडवाणी (पिताजी)',
        phone: '+91 98290 66554',
        address: '24, सिंधी कॉलोनी, राजापार्क, जयपुर (राजस्थान)',
        photo: '/assets/images/sindhi_bride_khushi.jpg'
      },
      'Karan Motwani': {
        id: 'DM10041',
        slug: 'karan-motwani',
        name: 'करन मोटवानी (Karan Motwani)',
        raw_name: 'Karan Motwani',
        gender_prefix: 'आयुष्मान (चि.)',
        dob: '22 मार्च 1998 (22-03-1998)',
        birth_time: 'प्रातः 07:15 बजे',
        birth_place: 'जयपुर, राजस्थान',
        age_height: '28 वर्ष | 5 फीट 11 इंच',
        caste: 'सिंधी (Sindhi)',
        caste_full: 'सिंधी समाज (संस्कारी व प्रतिष्ठित)',
        religion: 'सनातन हिन्दू',
        gotra: 'मोटवानी (Motwani)',
        origin_gotra: 'सिंधी समाज',
        rashi: 'मीन (उत्तर भाद्रपद नक्षत्र)',
        manglik: 'नहीं (अमांगलिक / सर्वगुण संपन्न)',
        guna_score: '31 / 36 गुण सर्वश्रेष्ठ',
        education: 'M.Tech Software Engineering (BITS Pilani)',
        college: 'BITS Pilani',
        occupation: 'लीड सॉफ्टवेयर आर्किटेक्ट & टेक लीड',
        company: 'Global Tier-1 Tech MNC',
        income: '₹ 28.00 LPA',
        income_full: '₹ 28,00,000/- प्रतिवर्ष (28 LPA)',
        work_city: 'जयपुर & बेंगलुरु',
        marital: 'अविवाहित (Never Married)',
        diet: 'शाकाहारी (Vegetarian)',
        complexion: 'गोरा (Fair & Smart)',
        father_name: 'श्री प्रकाश मोटवानी',
        father_occ: 'होलसेल ऑटोमोबाइल पार्ट्स व्यवसायी',
        mother_name: 'श्रीमती विद्या मोटवानी',
        siblings: '1 छोटी बहन (MBA)',
        native: 'जयपुर (राजस्थान)',
        family_type: 'कुलीन सिंधी संयुक्त परिवार',
        contact_person: 'श्री प्रकाश मोटवानी (पिताजी)',
        phone: '+91 98290 77112',
        address: '58, मालवीय नगर, सेक्टर 3, जयपुर (राजस्थान)',
        photo: '/assets/images/sindhi_groom_karan.jpg'
      },
      'Dr. Simran Chawla': {
        id: 'DM10042',
        slug: 'dr-simran-chawla',
        name: 'डॉ. सिमरन चावला (Dr. Simran Chawla)',
        raw_name: 'Dr. Simran Chawla',
        gender_prefix: 'सौभाग्यकांक्षिणी (सौ.)',
        dob: '18 सितम्बर 2000 (18-09-2000)',
        birth_time: 'प्रातः 11:20 बजे',
        birth_place: 'मुम्बई, महाराष्ट्र',
        age_height: '26 वर्ष | 5 फीट 5 इंच',
        caste: 'सिंधी (Sindhi)',
        caste_full: 'सिंधी समाज (चिकित्सक व प्रतिष्ठित)',
        religion: 'सनातन हिन्दू',
        gotra: 'चावला (Chawla)',
        origin_gotra: 'सिंधी समाज',
        rashi: 'वृषभ (रोहिणी नक्षत्र)',
        manglik: 'नहीं (अमांगलिक)',
        guna_score: '30 / 36 गुण उत्तम',
        education: 'BDS, MDS (Orthodontics & Dental Surgeon)',
        college: 'MUHS महाराष्ट्र',
        occupation: 'कंसल्टेंट ऑर्थोडॉन्टिस्ट एवं डेंटल सर्जन',
        company: 'मल्टीस्पेशियलिटी डेंटल क्लिनिक',
        income: '₹ 18.00 LPA',
        income_full: '₹ 18,00,000/- प्रतिवर्ष (18 LPA)',
        work_city: 'मुम्बई, महाराष्ट्र',
        marital: 'अविवाहित (Never Married)',
        diet: 'शाकाहारी',
        complexion: 'गोरा व सौम्य (Fair & Radiant)',
        father_name: 'डॉ. रमेश चावला',
        father_occ: 'सीनियर फिजीशियन एवं क्लिनिक संचालक',
        mother_name: 'श्रीमती सीमा चावला',
        siblings: '1 भाई (MBBS स्टूडेंट)',
        native: 'मुम्बई / जयपुर',
        family_type: 'कुलीन सिंधी संस्कारी परिवार',
        contact_person: 'डॉ. रमेश चावला (पिताजी)',
        phone: '+91 98290 88223',
        address: 'B-202, हीरानंदानी गार्डन्स, पवई, मुम्बई (महाराष्ट्र)',
        photo: '/assets/images/sindhi_bride_simran.jpg'
      },
      'Ritesh Thadani': {
        id: 'DM10043',
        slug: 'ritesh-thadani',
        name: 'रितेश थदानी (Ritesh Thadani)',
        raw_name: 'Ritesh Thadani',
        gender_prefix: 'आयुष्मान (चि.)',
        dob: '10 नवम्बर 1997 (10-11-1997)',
        birth_time: 'दोपहर 03:40 बजे',
        birth_place: 'पुणे, महाराष्ट्र',
        age_height: '29 वर्ष | 6 फीट 0 इंच',
        caste: 'सिंधी (Sindhi)',
        caste_full: 'सिंधी समाज (उच्च प्रतिष्ठित परिवार)',
        religion: 'सनातन हिन्दू',
        gotra: 'थदानी (Thadani)',
        origin_gotra: 'सिंधी समाज',
        rashi: 'वृश्चिक (अनुराधा नक्षत्र)',
        manglik: 'मांगलिक (शुभ योग)',
        guna_score: '29 / 36 गुण उत्तम',
        education: 'CA (ICAI) & CFA (Charterholder)',
        college: 'ICAI New Delhi & CFA Institute',
        occupation: 'वाइस प्रेसिडेंट - इन्वेस्टमेंट बैंकिंग',
        company: 'ग्लोबल इन्वेस्टमेंट बैंक',
        income: '₹ 36.00 LPA',
        income_full: '₹ 36,00,000/- प्रतिवर्ष (36 LPA)',
        work_city: 'मुम्बई & पुणे',
        marital: 'अविवाहित (Never Married)',
        diet: 'शाकाहारी',
        complexion: 'गोरा (Fair & Athletic)',
        father_name: 'श्री हरीश थदानी',
        father_occ: 'रियल एस्टेट डेवलपर एवं बिल्डर',
        mother_name: 'श्रीमती नीतू थदानी',
        siblings: '1 छोटा भाई (MBA Finance)',
        native: 'पुणे / मुम्बई',
        family_type: 'कुलीन सिंधी उच्च संभ्रांत परिवार',
        contact_person: 'श्री हरीश थदानी (पिताजी)',
        phone: '+91 98290 99445',
        address: '401, कोरेगांव पार्क एवेन्यू, पुणे (महाराष्ट्र)',
        photo: '/assets/images/sindhi_groom_ritesh.jpg'
      }
    });

    let activeCandidateData = null;

    function openRoyalBiodataModal(name) {
      let data = royalCandidatesCatalog[name];
      if (!data) {
        const card = document.querySelector(`.candidate-card[data-name="${name}"]`);
        if (card) {
          const mid = card.getAttribute('data-matrimony-id') || 'DM-BIO';
          const gender = card.getAttribute('data-gender') || 'female';
          const age = card.getAttribute('data-age') || '25';
          const height = card.getAttribute('data-height') || "5'4\"";
          const caste = card.getAttribute('data-caste') || '';
          const gotra = card.getAttribute('data-gotra') || 'कश्यप';
          const city = card.getAttribute('data-city') || 'जयपुर';
          const edu = card.getAttribute('data-edu') || 'स्नातक';
          const income = card.getAttribute('data-income') || '10';
          const father = card.getAttribute('data-father') || 'श्री परिवार प्रमुख';
          const phone = card.getAttribute('data-phone') || '+91 98290 12345';
          const photo = card.querySelector('img')?.src || '/uploads/photos/user_20_photo_1.svg';
          const guna = card.getAttribute('data-guna') || '28';
          const manglik = card.getAttribute('data-manglik') === 'manglik' ? 'मांगलिक' : 'अमांगलिक';
          
          data = {
            id: mid,
            slug: name.toLowerCase().replace(/[^a-z0-9]+/g, '-'),
            name: name,
            raw_name: name,
            gender_prefix: gender === 'male' ? 'सौभाग्यकांक्षी (चि.)' : 'सौभाग्यकांक्षिणी (सौ.)',
            dob: '14 मई 1998',
            birth_time: 'प्रातः 08:30 बजे',
            birth_place: city,
            age_height: `${age} वर्ष | ${height}`,
            caste: caste,
            caste_full: `${caste} (सनातन हिन्दू)`,
            religion: 'सनातन हिन्दू',
            gotra: gotra,
            origin_gotra: 'शांडिल्य / भारद्वाज',
            rashi: 'मेष / वृषभ',
            manglik: manglik,
            guna_score: `${guna} / 36 गुण उत्तम`,
            education: edu,
            college: 'विश्वविद्यालय सम्बद्ध',
            occupation: card.getAttribute('data-profession') || 'कार्यरत',
            company: 'प्रतिष्ठित संस्थान',
            income: `₹ ${income} LPA`,
            income_full: `₹ ${income} लाख प्रतिवर्ष`,
            work_city: city,
            marital: 'अविवाहित (Never Married)',
            diet: 'शुद्ध शाकाहारी',
            complexion: 'गोरा (Fair & Radiant)',
            father_name: father,
            father_occ: 'व्यवसाय / सेवा',
            mother_name: 'श्रीमती गृहलक्ष्मी',
            siblings: '1 भाई, 1 बहन',
            native: city,
            family_type: 'एकल व संभ्रांत परिवार (Nuclear)',
            contact_person: father,
            phone: phone,
            address: city,
            photo: photo
          };
        } else {
          data = royalCandidatesCatalog['Khushi Advani'] || royalCandidatesCatalog['Priya Sharma'] || Object.values(royalCandidatesCatalog)[0];
        }
      }
      activeCandidateData = data;

      // Populate Modal Fields
      document.getElementById('modalBiodataHeaderSub').textContent = `${data.name} • 1-क्लिक PDF डाउनलोड`;
      document.getElementById('rbCandidateId').textContent = `ID: ${data.id}`;
      document.getElementById('rbCandidateGuna').textContent = data.guna_score;
      document.getElementById('rbCandidatePhoto').src = data.photo;
      document.getElementById('rbCandidatePrefix').textContent = data.gender_prefix;
      document.getElementById('rbCandidateName').textContent = data.name;
      document.getElementById('rbCandidateAgeHeight').textContent = data.age_height;
      document.getElementById('rbCandidateCaste').textContent = data.caste;
      document.getElementById('rbCandidateEdu').textContent = data.education;
      document.getElementById('rbCandidateIncome').textContent = data.income;

      // 1. Personal
      document.getElementById('rbDob').textContent = data.dob;
      document.getElementById('rbBirthTime').textContent = data.birth_time;
      document.getElementById('rbBirthPlace').textContent = data.birth_place;
      document.getElementById('rbMarital').textContent = data.marital;
      document.getElementById('rbDiet').textContent = data.diet;
      document.getElementById('rbComplexion').textContent = data.complexion;

      // 2. Astro & Gotra
      document.getElementById('rbReligion').textContent = data.religion;
      document.getElementById('rbCasteFull').textContent = data.caste_full;
      document.getElementById('rbGotra').textContent = data.gotra;
      document.getElementById('rbOriginGotra').textContent = data.origin_gotra;
      document.getElementById('rbRashi').textContent = data.rashi;
      document.getElementById('rbManglik').textContent = data.manglik;

      // 3. Career
      document.getElementById('rbEduDetail').textContent = data.education;
      document.getElementById('rbCollege').textContent = data.college;
      document.getElementById('rbOcc').textContent = data.occupation;
      document.getElementById('rbCompany').textContent = data.company;
      document.getElementById('rbIncomeFull').textContent = data.income_full;
      document.getElementById('rbWorkCity').textContent = data.work_city;

      // 4. Family
      document.getElementById('rbFatherName').textContent = data.father_name;
      document.getElementById('rbFatherOcc').textContent = data.father_occ;
      document.getElementById('rbMotherName').textContent = data.mother_name;
      document.getElementById('rbSiblings').textContent = data.siblings;
      document.getElementById('rbNative').textContent = data.native;
      document.getElementById('rbFamilyType').textContent = data.family_type;

      // 5. Contact
      document.getElementById('rbContactPerson').textContent = data.contact_person;
      document.getElementById('rbPhone').textContent = data.phone;
      document.getElementById('rbAddress').textContent = data.address;

      // Open Modal
      document.getElementById('royalBiodataModal').classList.add('open');
    }

    function closeRoyalBiodataModal() {
      document.getElementById('royalBiodataModal').classList.remove('open');
    }

    /**
     * 1-Click Instant Download of Royal Golden Biodata PDF!
     */
    function downloadModalRoyalBiodata() {
      if (!activeCandidateData) return;
      const element = document.getElementById('modalRoyalSheet');
      const progress = document.getElementById('modalPdfProgress');
      const cleanFileName = `Dheeraja_Royal_Biodata_${activeCandidateData.raw_name.replace(/[^a-zA-Z0-9]/g, '_')}.pdf`;

      if (progress) progress.classList.remove('hidden');

      const opt = {
        margin:       [3, 3, 3, 3],
        filename:     cleanFileName,
        image:        { type: 'jpeg', quality: 0.98 },
        html2canvas:  { 
          scale: 2, 
          useCORS: true, 
          letterRendering: true,
          scrollY: 0
        },
        jsPDF: { 
          unit: 'mm', 
          format: 'a4', 
          orientation: 'portrait' 
        }
      };

      html2pdf().set(opt).from(element).save().then(function() {
        if (progress) progress.classList.add('hidden');
        showToast('सफल डाउनलोड! ⚡', `${activeCandidateData.raw_name} का सुनहरा बॉर्डर वाला रॉयल बायोडाटा 1-क्लिक में डाउनलोड हो गया है।`, 'fa-cloud-arrow-down');
      }).catch(function(err) {
        if (progress) progress.classList.add('hidden');
        console.error("PDF generation failed:", err);
        // Fallback to direct window.open
        window.open('/biodata/royal/' + (activeCandidateData.slug || '1') + '?download=1', '_blank');
      });
    }

    function openCandidateRoyalPage() {
      if (!activeCandidateData) return;
      window.open('/biodata/royal/' + (activeCandidateData.slug || '1'), '_blank');
    }

    // Footer Ribbon actions
    function downloadPdfProfile(name) {
      openRoyalBiodataModal(name);
    }
    function openReportModal(name) {
      const reason = prompt(`${name} की प्रोफाइल रिपोर्ट करने का कारण चुनें:\n1. गलत जानकारी\n2. फोटो सत्यापन समस्या\n3. अन्य`);
      if (reason) {
        showToast('शिकायत दर्ज की गई ⚠️', 'आपकी शिकायत धीरजा ट्रस्ट एवं सेफ्टी टीम को भेज दी गई है।', 'fa-triangle-exclamation');
      }
    }
    function openBlockModal(name) {
      if (confirm(`क्या आप सचमुच ${name} को ब्लॉक करना चाहते हैं? वे आपको संपर्क नहीं कर पाएंगे।`)) {
        showToast('प्रोफाइल ब्लॉक की गई 🚫', `${name} को ब्लॉक सूची में डाल दिया गया है।`, 'fa-ban');
      }
    }

    function toggleSideMenu() {
      alert("धीरजा रॉयल मैट्रिमोनी मेनू:\n\n• 1. कवर पेज (/cover)\n• 2. वेलकम स्क्रीन (/welcome)\n• 3. बायोडाटा फॉर्म (/biodata)\n• 4. तालिका / रिश्ते (/matches)\n• 👑 VIP सदस्यता एवं पेमेंट (/membership)\n• हेल्प & सपोर्ट");
    }

    // ==================== PHOTO PRIVACY & WATERMARK CONTROLS ====================
    let userPhotoPrivacy = {
      watermarkEnabled: true,
      visibilityMode: 'public', // 'public', 'mutual', 'request'
      antiTheftEnabled: true
    };

    function openPhotoPrivacyModal() {
      // Sync form with current state
      const wmSwitch = document.getElementById('toggleWatermarkSwitch');
      if (wmSwitch) wmSwitch.checked = userPhotoPrivacy.watermarkEnabled;

      const radio = document.querySelector(`input[name="photo_visibility_mode"][value="${userPhotoPrivacy.visibilityMode}"]`);
      if (radio) radio.checked = true;

      updatePhotoPrivacyPreview();
      document.getElementById('photoPrivacyModal').classList.add('open');
    }

    function closePhotoPrivacyModal() {
      document.getElementById('photoPrivacyModal').classList.remove('open');
    }

    function setPhotoPrivacyMode(mode) {
      userPhotoPrivacy.visibilityMode = mode;
      
      const lblPublic = document.getElementById('lblPhotoOptPublic');
      const lblMutual = document.getElementById('lblPhotoOptMutual');
      const lblRequest = document.getElementById('lblPhotoOptRequest');
      
      if (lblPublic && lblMutual && lblRequest) {
        lblPublic.className = (mode === 'public')
          ? 'flex items-start space-x-2.5 p-2.5 rounded-xl border-2 border-emerald-500 bg-emerald-50/60 cursor-pointer transition'
          : 'flex items-start space-x-2.5 p-2.5 rounded-xl border border-stone-200 bg-white cursor-pointer transition hover:border-amber-400';
          
        lblMutual.className = (mode === 'mutual')
          ? 'flex items-start space-x-2.5 p-2.5 rounded-xl border-2 border-emerald-500 bg-emerald-50/60 cursor-pointer transition'
          : 'flex items-start space-x-2.5 p-2.5 rounded-xl border border-stone-200 bg-white cursor-pointer transition hover:border-amber-400';
          
        lblRequest.className = (mode === 'request')
          ? 'flex items-start space-x-2.5 p-2.5 rounded-xl border-2 border-emerald-500 bg-emerald-50/60 cursor-pointer transition'
          : 'flex items-start space-x-2.5 p-2.5 rounded-xl border border-stone-200 bg-white cursor-pointer transition hover:border-amber-400';
      }

      updatePhotoPrivacyPreview();
    }

    function updatePhotoPrivacyPreview() {
      const wmSwitch = document.getElementById('toggleWatermarkSwitch');
      const isWmOn = wmSwitch ? wmSwitch.checked : true;
      const selectedMode = document.querySelector('input[name="photo_visibility_mode"]:checked')?.value || userPhotoPrivacy.visibilityMode;
      
      const wmLayers = document.getElementById('previewWatermarkLayer');
      const secPill = document.getElementById('previewSecurityPill');
      const blurLayer = document.getElementById('previewBlurLayer');
      const prevImg = document.getElementById('privacyPreviewImg');
      const statusText = document.getElementById('previewStatusText');
      const statusIcon = document.getElementById('previewStatusIcon');

      // Watermark visibility
      if (isWmOn) {
        if (wmLayers) wmLayers.classList.remove('disabled');
        if (secPill) secPill.classList.remove('hidden');
      } else {
        if (wmLayers) wmLayers.classList.add('disabled');
        if (secPill) secPill.classList.add('hidden');
      }

      // Blur layer according to selected mode
      if (selectedMode === 'public') {
        if (blurLayer) blurLayer.classList.add('hidden');
        if (prevImg) prevImg.classList.remove('photo-blur-active');
        if (statusText) statusText.textContent = isWmOn ? 'सार्वजनिक दृश्य • सुरक्षा वाटरमार्क सक्रिय' : 'सार्वजनिक दृश्य • वाटरमार्क निष्क्रिय';
        if (statusIcon) statusIcon.className = 'fa-solid fa-circle-check text-emerald-600';
      } else if (selectedMode === 'mutual') {
        if (blurLayer) blurLayer.classList.remove('hidden');
        if (prevImg) prevImg.classList.add('photo-blur-active');
        if (statusText) statusText.textContent = 'परस्पर रुचि स्वीकार होने पर ही स्पष्ट दिखेगी (Blur 🔒)';
        if (statusIcon) statusIcon.className = 'fa-solid fa-shield-heart text-rose-500';
      } else if (selectedMode === 'request') {
        if (blurLayer) blurLayer.classList.remove('hidden');
        if (prevImg) prevImg.classList.add('photo-blur-active');
        if (statusText) statusText.textContent = 'केवल अनुमति अनुरोध स्वीकारने पर दिखेगी (Request 🔒)';
        if (statusIcon) statusIcon.className = 'fa-solid fa-lock text-amber-600';
      }
    }

    function savePhotoPrivacySettings() {
      const wmSwitch = document.getElementById('toggleWatermarkSwitch');
      userPhotoPrivacy.watermarkEnabled = wmSwitch ? wmSwitch.checked : true;
      userPhotoPrivacy.visibilityMode = document.querySelector('input[name="photo_visibility_mode"]:checked')?.value || 'public';
      
      closePhotoPrivacyModal();
      
      const modeLabel = {
        'public': 'सार्वजनिक (वाटरमार्क सहित)',
        'mutual': 'केवल परस्पर रुचि स्वीकारने पर (Blur 🔒)',
        'request': 'केवल अनुमति अनुरोध पर (Request 🔒)'
      }[userPhotoPrivacy.visibilityMode];

      showToast('प्राइवेसी सेटिंग्स सुरक्षित! 🛡️', `फोटो दृश्यता: ${modeLabel} | सुरक्षा वाटरमार्क: ${userPhotoPrivacy.watermarkEnabled ? 'सक्रिय' : 'निष्क्रिय'}`, 'fa-shield-halved');
    }

    function requestPhotoAccess(btn, name, cardId) {
      btn.disabled = true;
      btn.className = 'mt-1 px-2 py-0.5 rounded-md bg-emerald-800 text-emerald-200 text-[8px] font-bold tracking-tight shadow-xs flex items-center space-x-1 cursor-default';
      btn.innerHTML = '<i class="fa-solid fa-check text-[7.5px]"></i><span>अनुरोध भेजा</span>';

      showToast('फोटो अनुरोध भेजा गया 📩', `${name} के परिवार को आपका फोटो देखने का अनुरोध पहुंच गया है। स्वीकृति मिलते ही फोटो स्वतः दिख जाएगी।`, 'fa-camera');

      // Live demonstration simulation: after 2.5 seconds, simulate accepted access!
      setTimeout(() => {
        const img = document.getElementById(`cardPhotoImg-${cardId}`);
        const guard = document.getElementById(`cardPrivacyGuard-${cardId}`);
        if (img && guard) {
          img.classList.remove('photo-blur-active');
          guard.style.opacity = '0';
          setTimeout(() => guard.classList.add('hidden'), 300);
          showToast('फोटो अनुमति स्वीकृत! 🔓', `${name} के परिवार ने आपकी फोटो देखने की अनुमति स्वीकार कर ली है।`, 'fa-lock-open');
        }
      }, 2500);
    }

    // Initialize on DOM Ready
    document.addEventListener('DOMContentLoaded', function() {
      renderSamajDrawerPills();
      syncQuickDropdownsFromState();
      renderActiveFilterPills();
      filterMatchesBySamaj(currentSamajFilter);
    });
  </script>

</body>
</html>
