# 💌 BarokahPrint Digital Invitation

### Full-Stack Digital Wedding Invitation & Event Platform

> Platform undangan digital yang dikembangkan untuk membantu pengguna membuat, mengelola, membagikan, dan memantau undangan pernikahan secara digital melalui satu ekosistem yang terintegrasi.

[![Live Project](https://img.shields.io/badge/Live%20Project-barokahprint.com-2563eb?style=for-the-badge)](https://barokahprint.com/)
[![Project Status](https://img.shields.io/badge/Status-Ongoing-22c55e?style=for-the-badge)](https://barokahprint.com/)
[![Year](https://img.shields.io/badge/Year-2026-64748b?style=for-the-badge)](https://barokahprint.com/)

---

# 📌 Project Overview

**BarokahPrint Digital Invitation** merupakan platform undangan digital yang dikembangkan sebagai bagian dari ekosistem digital BarokahPrint.

Platform ini tidak hanya menyediakan halaman undangan pernikahan, tetapi dikembangkan sebagai sebuah **digital wedding event platform** yang mengintegrasikan:

- Invitation builder
- Template undangan
- Couple information
- Event schedule
- Location & maps
- Prewedding gallery
- Music playlist
- RSVP
- Guest management
- WhatsApp Blast
- Digital Gift
- Payment Gateway
- Personalized invitation URL
- Visitor tracking
- Admin dashboard
- Custom domain support

Project ini dikembangkan dengan pendekatan **full-stack web development**, sehingga mencakup frontend, backend, database, API integration, payment integration, communication services, deployment, dan optimization.

---

# 🎯 Project Goals

Project ini dikembangkan untuk mendigitalisasi proses pembuatan dan distribusi undangan pernikahan.

### Tujuan utama:

1. Membuat undangan pernikahan dapat dibuat secara digital.
2. Mempermudah pengguna melakukan personalisasi undangan.
3. Mengurangi ketergantungan pada undangan fisik.
4. Mempermudah distribusi undangan melalui WhatsApp.
5. Mempermudah pengelolaan data tamu.
6. Menyediakan RSVP secara digital.
7. Menyediakan fitur hadiah digital.
8. Mengintegrasikan pembayaran digital.
9. Menyediakan pengalaman undangan yang interaktif.
10. Menyediakan sistem pengelolaan undangan melalui dashboard.

---

# 👨‍💻 My Role

## Full-Stack Developer

Dalam project ini saya terlibat dalam proses pengembangan sistem dari sisi teknis secara menyeluruh.

### Responsibilities

- System planning
- Application architecture
- Database design
- Frontend development
- Backend development
- Invitation builder
- Template implementation
- Authentication
- Admin dashboard
- Guest management
- RSVP system
- WhatsApp integration
- WhatsApp Blast
- Payment Gateway integration
- Digital Gift system
- Music playlist
- Gallery management
- Custom domain
- Visitor tracking
- SEO implementation
- Structured data
- Responsive design
- Deployment
- Maintenance
- Continuous improvement

---

# ⭐ Project Highlights

- 💌 Digital wedding invitation platform
- 🎨 Customizable invitation templates
- 💑 Couple profile management
- 📅 Wedding event schedule
- 📍 Location & maps
- 📸 Prewedding gallery
- 🎵 Music playlist
- 💬 RSVP
- 👥 Guest management
- 📱 WhatsApp Blast
- 🎁 Digital Gift
- 💳 Payment Gateway
- 🔗 Personalized invitation URL
- 🌐 Custom domain support
- 📊 Visitor tracking
- ⚙️ Admin dashboard
- 🔍 SEO & structured data
- 📱 Responsive design

---

# 💡 The Challenge

Undangan digital bukan hanya sebuah halaman website yang menampilkan informasi pernikahan.

Dalam penggunaan nyata, pengguna membutuhkan berbagai fungsi yang saling terhubung.

Contohnya:

- Mengelola informasi mempelai
- Mengatur tanggal acara
- Menambahkan lokasi
- Mengupload foto
- Menambahkan musik
- Mengelola daftar tamu
- Membagikan undangan
- Mendapatkan konfirmasi kehadiran
- Menerima hadiah digital
- Melihat data kunjungan

Karena itu, platform membutuhkan lebih dari sekadar frontend.

Diperlukan sistem yang menghubungkan:

```text
Customer
    ↓
Invitation Builder
    ↓
Invitation Data
    ↓
Database
    ↓
Personalized Invitation
    ↓
Guest
    ↓
RSVP / Gift / Interaction
```

---

# 🚀 The Solution

BarokahPrint Digital Invitation dikembangkan sebagai platform modular.

Sistem memisahkan beberapa komponen utama:

```text
                         CUSTOMER
                            │
                            ▼
                  ┌──────────────────┐
                  │   ADMIN PANEL    │
                  └────────┬─────────┘
                           │
                           ▼
                  ┌──────────────────┐
                  │ INVITATION BUILDER│
                  └────────┬─────────┘
                           │
              ┌────────────┼────────────┐
              ▼            ▼            ▼
          TEMPLATE      CONTENT       GUEST
              │            │            │
              └────────────┼────────────┘
                           ▼
                    ┌─────────────┐
                    │   DATABASE  │
                    └──────┬──────┘
                           │
                           ▼
                 PERSONALIZED INVITATION
                           │
              ┌────────────┼────────────┐
              ▼            ▼            ▼
            RSVP         GIFT        WHATSAPP
              │            │            │
              ▼            ▼            ▼
           DATABASE     PAYMENT      DELIVERY
```

---

# 💌 Invitation Builder

Invitation Builder menjadi salah satu bagian utama platform.

Pengguna dapat mengelola berbagai informasi undangan dari dashboard.

### Informasi yang dapat dikelola

- Nama mempelai
- Foto mempelai
- Profil pasangan
- Tanggal acara
- Waktu acara
- Lokasi acara
- Informasi akad
- Informasi resepsi
- Galeri
- Musik
- Cerita pasangan
- RSVP
- Informasi hadiah
- Informasi tambahan

---

# 🎨 Invitation Templates

Platform menggunakan konsep template untuk memungkinkan satu sistem menghasilkan berbagai tampilan undangan.

Konsepnya:

```text
Invitation System
       │
       ├── Template A
       ├── Template B
       ├── Template C
       └── Template D
```

Setiap template dapat menggunakan data undangan yang sama tetapi menghasilkan pengalaman visual yang berbeda.

---

# 💑 Couple Information

Pengguna dapat mengelola informasi pasangan.

Contohnya:

- Nama lengkap
- Nama panggilan
- Foto
- Informasi keluarga
- Profil pasangan

Data tersebut kemudian ditampilkan secara dinamis pada halaman undangan.

---

# 📅 Event Schedule

Platform mendukung pengelolaan jadwal acara.

Contohnya:

### Akad

- Tanggal
- Waktu
- Lokasi

### Resepsi

- Tanggal
- Waktu
- Lokasi

Struktur tersebut memungkinkan satu undangan memiliki beberapa agenda.

---

# 📍 Location & Maps

Undangan dapat menampilkan informasi lokasi acara.

Fitur dapat mencakup:

- Nama lokasi
- Alamat
- Google Maps
- Link navigasi
- Koordinat lokasi

Tujuannya adalah mempermudah tamu menemukan lokasi acara.

---

# 📸 Prewedding Gallery

Platform menyediakan galeri foto untuk menampilkan dokumentasi pasangan.

Fitur meliputi:

- Upload foto
- Gallery management
- Multiple images
- Responsive gallery
- Image preview

Gallery dirancang agar dapat menyesuaikan berbagai ukuran perangkat.

---

# 🎵 Music Playlist

Undangan dapat menggunakan musik sebagai bagian dari pengalaman digital.

Fitur playlist meliputi:

- Background music
- Music selection
- Play / pause
- Audio controls
- Playlist support
- Mobile-friendly playback

Konsepnya:

```text
Invitation
    │
    └── Music
          │
          ├── Track 1
          ├── Track 2
          └── Track 3
```

Musik digunakan untuk memberikan pengalaman yang lebih personal dan imersif pada halaman undangan.

---

# 💬 RSVP System

RSVP digunakan untuk mengetahui konfirmasi kehadiran tamu.

Tamu dapat memberikan informasi seperti:

- Nama
- Kehadiran
- Jumlah tamu
- Ucapan
- Pesan

Data RSVP kemudian dapat dikelola melalui sistem.

Contoh alur:

```text
Guest
  ↓
Open Invitation
  ↓
RSVP Form
  ↓
Submit
  ↓
Backend
  ↓
Database
  ↓
Admin Dashboard
```

---

# 👥 Guest Management

Sistem guest management digunakan untuk mengelola daftar tamu.

Informasi dapat mencakup:

- Nama tamu
- Nomor WhatsApp
- Invitation URL
- RSVP status
- Kehadiran
- Waktu kunjungan
- Status pengiriman

Guest management menjadi bagian penting untuk mendukung fitur personalisasi dan WhatsApp Blast.

---

# 📱 WhatsApp Blast

Salah satu fitur utama platform adalah kemampuan mendistribusikan undangan melalui WhatsApp.

Sistem dapat digunakan untuk mengelola proses pengiriman undangan kepada banyak tamu.

### Workflow

```text
Guest List
    ↓
Personalized URL
    ↓
Message Template
    ↓
WhatsApp Blast
    ↓
Guest
    ↓
Open Invitation
```

### Komponen sistem

- Guest list
- Phone number management
- Personalized invitation URL
- Message template
- Bulk delivery
- Delivery status
- Invitation status

Personalized URL memungkinkan setiap tamu menerima link undangan yang dapat dikaitkan dengan data tamu.

---

# 🎁 Digital Gift

Platform menyediakan fitur **Digital Gift** untuk memungkinkan tamu memberikan hadiah secara digital.

Fitur dapat digunakan untuk:

- Informasi rekening
- Digital payment
- Gift submission
- Transaction records
- Payment status

Tujuannya adalah memberikan alternatif hadiah yang lebih praktis bagi tamu.

---

# 💳 Payment Gateway

Digital Gift dapat diintegrasikan dengan payment gateway.

Alur umum:

```text
Guest
   ↓
Digital Gift
   ↓
Select Payment Method
   ↓
Payment Gateway
   ↓
Payment Processing
   ↓
Payment Status
   ↓
Transaction Record
```

Integrasi pembayaran dirancang agar status transaksi dapat diproses secara terstruktur oleh sistem.

---

# 🔗 Personalized Invitation URL

Setiap undangan memiliki URL khusus.

Contoh konsep:

```text
barokahprint.com/undangan/nama-pasangan
```

atau:

```text
barokahprint.com/undangan/username
```

Personalized URL memungkinkan setiap pasangan memiliki halaman undangan sendiri.

---

# 🌐 Custom Domain

Platform juga dikembangkan dengan dukungan custom domain.

Contoh:

```text
namapasangan.com
```

Custom domain memberikan opsi branding yang lebih personal kepada pengguna.

Konsep pengelolaan domain:

```text
Invitation
    ↓
Custom Domain
    ↓
Domain Verification
    ↓
Domain Configuration
    ↓
Personalized Invitation
```

---

# 📊 Visitor Tracking

Platform dapat mencatat aktivitas kunjungan pada halaman undangan.

Data yang dapat digunakan antara lain:

- Total visitors
- Visitor
