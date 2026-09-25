# 🎨 Module 06: Theme & UI Design System

## 📌 Aesthetic Vision: Royal Heritage Meets Modern Liquid Glass

**Dheeraja Matrimony** embraces a distinguished visual language that honors sacred Indian traditions while delivering ultra-modern luxury.

- **Primary Colors**:
  - **Royal Ivory & Pearl White**: Clean, spacious, and pure background canvas.
  - **Imperial Crimson Maroon (`#6B1D2F` to `#800020`)**: Evokes auspiciousness, royalty, and timeless commitment.
  - **Antique Radiant Gold (`#D4AF37` / `#F5BD42`)**: Represents prosperity, elegance, and premium VIP prestige.
- **Glassmorphism & Liquid Glass**:
  - Translucent surfaces (`rgba(255, 255, 255, 0.85)` for light cards, `rgba(107, 29, 47, 0.90)` for royal panels) with hardware-accelerated backdrop blur (`12px` to `20px`), subtle border gradients, and soft golden glows.
- **Micro-Interactions**:
  - Gentle shimmer effects on VIP badges.
  - Smooth scale transitions on profile action cards.
  - Subtle ripple effects on touch buttons.

---

## 🎨 Color Palette & Design Tokens

```css
:root {
  /* Royal Maroon Core */
  --color-maroon-900: #3D0C17;
  --color-maroon-800: #521321;
  --color-maroon-700: #6B1D2F; /* Primary Brand Maroon */
  --color-maroon-600: #85243B;
  --color-maroon-500: #A32D49;
  --color-maroon-100: #F7EAEF;
  --color-maroon-50:  #FDF5F8;

  /* Imperial Radiant Gold */
  --color-gold-700: #9B7B1B;
  --color-gold-600: #B89326;
  --color-gold-500: #D4AF37;   /* Primary Imperial Gold */
  --color-gold-400: #E6C254;
  --color-gold-300: #F3D883;
  --color-gold-100: #FBF4DE;
  --color-gold-50:  #FFFDF5;

  /* Pearl White & Neutrals */
  --color-pearl-white: #FDFBF7;
  --color-surface-pure: #FFFFFF;
  --color-neutral-slate: #5A6065;
  --color-dark-obsidian: #18191B;

  /* Liquid Glass Styles */
  --glass-bg-white: rgba(255, 255, 255, 0.82);
  --glass-bg-maroon: rgba(107, 29, 47, 0.88);
  --glass-border-gold: rgba(212, 175, 55, 0.35);
  --glass-border-white: rgba(255, 255, 255, 0.25);
  --glass-shadow: 0 10px 30px 0 rgba(0, 0, 0, 0.08);
  --glass-gold-glow: 0 0 25px rgba(212, 175, 55, 0.30);
  --glass-maroon-glow: 0 0 25px rgba(107, 29, 47, 0.35);
}
```

---

## 🛠️ Tailwind CSS Integration Config (`tailwind.config.js`)

```javascript
module.exports = {
  content: [
    "./views/**/*.php",
    "./public/assets/js/**/*.js"
  ],
  theme: {
    extend: {
      colors: {
        maroon: {
          50: '#FDF5F8',
          100: '#F7EAEF',
          500: '#A32D49',
          600: '#85243B',
          700: '#6B1D2F',
          800: '#521321',
          900: '#3D0C17',
        },
        gold: {
          50: '#FFFDF5',
          100: '#FBF4DE',
          300: '#F3D883',
          400: '#E6C254',
          500: '#D4AF37',
          600: '#B89326',
          700: '#9B7B1B',
        },
        pearl: '#FDFBF7'
      },
      fontFamily: {
        cinzel: ['Cinzel', 'serif'],
        sans: ['Plus Jakarta Sans', 'Inter', 'sans-serif'],
      },
      boxShadow: {
        'royal-gold': '0 8px 30px -4px rgba(212, 175, 55, 0.35)',
        'royal-maroon': '0 10px 32px -4px rgba(107, 29, 47, 0.40)',
        'glass-card': '0 8px 32px 0 rgba(31, 38, 135, 0.08)',
      },
      backdropBlur: {
        'xs': '2px',
        'glass': '16px',
        'glass-heavy': '24px',
      }
    },
  },
  plugins: [],
}
```

---

## 💎 Liquid Glass Utility Classes (`public/assets/css/glassmorphism.css`)

```css
/* Frosted Liquid Glass Card (White) */
.glass-panel-white {
  background: rgba(255, 255, 255, 0.85);
  backdrop-filter: blur(16px);
  -webkit-backdrop-filter: blur(16px);
  border: 1px solid rgba(255, 255, 255, 0.6);
  box-shadow: 0 8px 32px 0 rgba(107, 29, 47, 0.06);
  border-radius: 1.25rem;
}

/* Royal Maroon Frosted Glass Panel */
.glass-panel-maroon {
  background: linear-gradient(135deg, rgba(107, 29, 47, 0.92) 0%, rgba(61, 12, 23, 0.95) 100%);
  backdrop-filter: blur(20px);
  -webkit-backdrop-filter: blur(20px);
  border: 1px solid rgba(212, 175, 55, 0.35);
  box-shadow: 0 12px 40px 0 rgba(0, 0, 0, 0.25);
  border-radius: 1.25rem;
}

/* Glowing Gold Gradient Button */
.btn-royal-gold {
  background: linear-gradient(135deg, #F5BD42 0%, #D4AF37 50%, #B89326 100%);
  color: #3D0C17;
  font-weight: 700;
  border: 1px solid #FFE485;
  box-shadow: 0 6px 20px rgba(212, 175, 55, 0.35);
  transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
}
.btn-royal-gold:hover {
  transform: translateY(-2px);
  box-shadow: 0 10px 25px rgba(212, 175, 55, 0.50);
}

/* Royal Maroon Primary Button */
.btn-royal-maroon {
  background: linear-gradient(135deg, #85243B 0%, #6B1D2F 50%, #521321 100%);
  color: #FFFFFF;
  font-weight: 600;
  border: 1px solid rgba(212, 175, 55, 0.4);
  box-shadow: 0 6px 20px rgba(107, 29, 47, 0.30);
  transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
}
.btn-royal-maroon:hover {
  transform: translateY(-2px);
  box-shadow: 0 10px 25px rgba(107, 29, 47, 0.45);
}

/* Golden Shimmer Animation for VIP Badges */
@keyframes shimmer {
  0% { background-position: -200% 0; }
  100% { background-position: 200% 0; }
}

.vip-badge-shimmer {
  background: linear-gradient(90deg, #D4AF37 0%, #FFF2B2 50%, #D4AF37 100%);
  background-size: 200% 100%;
  animation: shimmer 3s infinite linear;
  color: #3D0C17;
  font-weight: 800;
}
```

---

## 📱 Mobile App View Guidelines (Touch & Gesture Architecture)

When rendered inside the mobile WebView or deployed to Google Play Store:
1. **Safe-Area Insets**: Header and footer respect mobile device notch and gesture navigation bar (`env(safe-area-inset-top)`, `env(safe-area-inset-bottom)`).
2. **Bottom Navigation Bar**: Fixed frosted glass bar offering one-tap access to:
   - 🏠 **Home / Feed** (Algorithmic recommendations).
   - 🔍 **Discover / Search** (Filters for Caste, Gotra, City, Income).
   - 💌 **Interests** (Received & Sent requests).
   - 💬 **Chat** (Direct messages).
   - 👤 **My Profile & VIP Plan**.
3. **Card Swiping**: Tinder/Bumble-inspired gesture cards for rapid profile exploration, with immediate "Express Interest" (heart), "Shortlist" (star), and "Skip" (cross) buttons.
4. **Instant Kundali Score Card**: Floating mini-badge showing Astrological Match percentage (e.g., `32/36 Gunas - High Compatibility`) with a tap-to-expand Kundali breakdown.
