# 📱 Module 03: Mobile App REST API Specification

## 📌 API Architecture Overview

The **Dheeraja Matrimony** Mobile API is designed to power native Android/iOS applications (Flutter/React Native) as well as Progressive Web Apps (PWA) and Trusted Web Activity (TWA) wrappers for Google Play Store deployment.

- **Base URL**: `https://api.dheerajamatrimony.com/api/v1` (or `/api/v1/` on local development)
- **Data Format**: `application/json` (Requests & Responses)
- **Authentication**: `Bearer <JWT_TOKEN>` in the `Authorization` HTTP header
- **Standard Status Codes**:
  - `200 OK`: Request succeeded.
  - `201 Created`: Resource successfully created.
  - `400 Bad Request`: Validation failure or missing parameters.
  - `401 Unauthorized`: Invalid, expired, or missing Bearer token.
  - `403 Forbidden`: Account suspended, banned, or KYC required.
  - `429 Too Many Requests`: Rate limit exceeded (Max 60 req/min).
  - `500 Internal Error`: Server exception.

---

## 📦 Standard Response Envelope

All API responses follow a unified, predictable structure:

```json
{
  "success": true,
  "status_code": 200,
  "message": "Operation completed successfully.",
  "data": { ... },
  "meta": {
    "timestamp": 1727258400,
    "api_version": "v1.0.0",
    "pagination": {
      "current_page": 1,
      "per_page": 20,
      "total_records": 142,
      "total_pages": 8
    }
  }
}
```

---

## 🔐 1. Authentication & Security Endpoints

| Method | Endpoint | Description | Auth Required |
| :--- | :--- | :--- | :--- |
| `POST` | `/auth/register` | Register new user account & profile shell | ❌ No |
| `POST` | `/auth/login` | Authenticate with Email/Phone & Password | ❌ No |
| `POST` | `/auth/otp/send` | Send mobile verification OTP via SMS/Email | ❌ No |
| `POST` | `/auth/otp/verify` | Verify OTP and mark phone/email as verified | ❌ No |
| `POST` | `/auth/password/forgot` | Request password reset email / OTP | ❌ No |
| `POST` | `/auth/password/reset` | Set new password using token/OTP | ❌ No |
| `POST` | `/auth/refresh` | Refresh expired JWT token | 🛡️ Yes |
| `POST` | `/auth/logout` | Revoke active token & destroy session | 🛡️ Yes |

#### Sample Request: `POST /api/v1/auth/register`
```json
{
  "profile_for": "myself",
  "first_name": "Rohan",
  "last_name": "Sharma",
  "gender": "male",
  "dob": "1996-08-14",
  "email": "rohan.sharma@example.com",
  "phone": "+919876543210",
  "password": "SecurePassword#2026",
  "mother_tongue": "Hindi",
  "caste": "Brahmin",
  "city": "Jaipur",
  "state": "Rajasthan"
}
```

---

## 👤 2. Profile Management Endpoints

| Method | Endpoint | Description | Auth Required |
| :--- | :--- | :--- | :--- |
| `GET` | `/profile/me` | Fetch complete profile of logged-in user | 🛡️ Yes |
| `PUT` | `/profile/basic` | Update personal & physical attributes | 🛡️ Yes |
| `PUT` | `/profile/education` | Update education, career, and income LPA | 🛡️ Yes |
| `PUT` | `/profile/family` | Update family background & values | 🛡️ Yes |
| `PUT` | `/profile/astrology` | Update Gotra, Rashi, Nakshatra, Manglik | 🛡️ Yes |
| `PUT` | `/profile/preferences`| Update desired partner expectations | 🛡️ Yes |
| `POST` | `/profile/photos` | Upload new photo to gallery (Multipart) | 🛡️ Yes |
| `DELETE`| `/profile/photos/{id}`| Remove a photo from gallery | 🛡️ Yes |
| `PUT` | `/profile/photos/{id}/primary` | Set photo as primary display picture | 🛡️ Yes |
| `POST` | `/profile/kyc` | Submit Government ID proof for verification | 🛡️ Yes |

---

## 🔍 3. Matchmaking, Feed & Search Endpoints

| Method | Endpoint | Description | Auth Required |
| :--- | :--- | :--- | :--- |
| `GET` | `/matches/feed` | Algorithmic daily recommendations | 🛡️ Yes |
| `GET` | `/matches/recent` | Newly registered compatible profiles | 🛡️ Yes |
| `GET` | `/matches/premium`| Verified & VIP Pro profiles | 🛡️ Yes |
| `POST` | `/search/filter` | Multi-parameter search filter | 🛡️ Yes |
| `GET` | `/profiles/{matrimony_id}` | View full public details of a profile | 🛡️ Yes |
| `GET` | `/profiles/{matrimony_id}/contact` | Reveal verified phone/email (Deducts VIP credit) | 🛡️ Yes |
| `GET` | `/profiles/{matrimony_id}/kundali` | Astrological compatibility / Guna Milan score | 🛡️ Yes |

#### Search Filter Parameters (`POST /api/v1/search/filter`):
```json
{
  "age_from": 23,
  "age_to": 30,
  "height_from_cm": 155,
  "height_to_cm": 182,
  "marital_status": ["never_married"],
  "religion": "Hindu",
  "caste": ["Brahmin", "Sharma", "Any"],
  "manglik": "no",
  "education": ["B.Tech", "MBA", "MBBS"],
  "min_income_lpa": 10,
  "state": "Rajasthan",
  "city": "Jaipur",
  "has_photo_only": true,
  "page": 1,
  "limit": 20
}
```

---

## 💌 4. Express Interest & Connections

| Method | Endpoint | Description | Auth Required |
| :--- | :--- | :--- | :--- |
| `POST` | `/interests/send` | Send "Express Interest" to a profile | 🛡️ Yes |
| `POST` | `/interests/{id}/accept` | Accept an incoming interest request | 🛡️ Yes |
| `POST` | `/interests/{id}/decline`| Politely decline an interest request | 🛡️ Yes |
| `DELETE`| `/interests/{id}/cancel` | Withdraw a pending sent interest | 🛡️ Yes |
| `GET` | `/interests/received` | List incoming interest requests | 🛡️ Yes |
| `GET` | `/interests/sent` | List outgoing sent interests | 🛡️ Yes |
| `POST` | `/shortlist/{user_id}` | Bookmark/Shortlist a profile | 🛡️ Yes |
| `DELETE`| `/shortlist/{user_id}` | Remove profile from shortlist | 🛡️ Yes |
| `GET` | `/shortlist` | List all saved shortlisted profiles | 🛡️ Yes |

---

## 💬 5. In-App Direct Chat & Messaging

| Method | Endpoint | Description | Auth Required |
| :--- | :--- | :--- | :--- |
| `GET` | `/chat/threads` | List active conversations with last message | 🛡️ Yes |
| `GET` | `/chat/{user_id}/messages` | Get message history with a specific member | 🛡️ Yes |
| `POST` | `/chat/{user_id}/send` | Send text message to a connected member | 🛡️ Yes |
| `PUT` | `/chat/{user_id}/read` | Mark all unread messages as read | 🛡️ Yes |

---

## 💎 6. Subscriptions & Free VIP Launch Engine

| Method | Endpoint | Description | Auth Required |
| :--- | :--- | :--- | :--- |
| `GET` | `/plans` | Get all available subscription plans & perks | 🛡️ Yes |
| `GET` | `/plans/current` | Get active user plan, remaining views & expiry | 🛡️ Yes |
| `POST` | `/plans/launch-vip/claim` | Auto-claim Early Bird Free VIP Pro plan | 🛡️ Yes |

#### Sample Response: `GET /api/v1/plans/current`
```json
{
  "success": true,
  "data": {
    "plan_code": "VIP_PRO",
    "plan_title": "Dheeraja Royal VIP Pro (Launch Special)",
    "badge": "Royal VIP",
    "is_vip": true,
    "is_free_grant": true,
    "starts_at": "2026-09-25T15:20:00Z",
    "expires_at": "2026-12-25T15:20:00Z",
    "days_remaining": 91,
    "contact_views": {
      "limit": 200,
      "used": 14,
      "remaining": 186
    },
    "direct_messages": {
      "limit": 1000,
      "used": 35,
      "remaining": 965
    },
    "priority_search": true,
    "kundali_matching": true
  }
}
```

---

## 🔔 7. Notifications & Alerts

| Method | Endpoint | Description | Auth Required |
| :--- | :--- | :--- | :--- |
| `GET` | `/notifications` | List latest in-app alerts and notifications | 🛡️ Yes |
| `PUT` | `/notifications/{id}/read`| Mark specific notification as read | 🛡️ Yes |
| `PUT` | `/notifications/read-all` | Mark all user notifications as read | 🛡️ Yes |
| `GET` | `/notifications/unread-count`| Badge count of unread notifications | 🛡️ Yes |
