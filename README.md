# 🏥 Sistem Manajemen Rumah Sakit

Aplikasi web modern untuk manajemen data rumah sakit dan pasien yang dibangun dengan **Laravel 12** dan antarmuka yang indah serta responsif.

## 📋 Tentang Aplikasi

Aplikasi ini adalah sistem manajemen rumah sakit yang komprehensif dengan fitur:

- ✅ **Autentikasi Username-based** - Login menggunakan username dan password
- ✅ **CRUD Data Rumah Sakit** - Kelola informasi rumah sakit (ID, Nama, Alamat, Email, Telepon)
- ✅ **CRUD Data Pasien** - Kelola data pasien dengan relasi ke rumah sakit
- ✅ **Filter AJAX** - Filter pasien berdasarkan rumah sakit secara real-time
- ✅ **Delete AJAX** - Hapus data tanpa reload halaman
- ✅ **UI Modern** - Desain responsif dengan Bootstrap 5 dan Font Awesome
- ✅ **Bahasa Indonesia** - Antarmuka lengkap dalam bahasa Indonesia

## 🚀 Teknologi yang Digunakan

- **Framework**: Laravel 12.0
- **PHP**: ^8.2
- **Database**: MySQL
- **Frontend**: Bootstrap 5.3.0, Font Awesome 6.0.0, jQuery 3.7.1
- **Authentication**: Custom (Username-based)
- **Session**: File-based storage

### Dependencies Utama

```json
{
  "php": "^8.2",
  "laravel/framework": "^12.0",
  "laravel/tinker": "^2.10.1"
}
```

### Development Dependencies

```json
{
  "fakerphp/faker": "^1.23",
  "laravel/pint": "^1.24",
  "phpunit/phpunit": "^11.5.3"
}
```

## 🗄️ Struktur Database

### Tabel Rumah Sakit
```sql
- id (Primary Key)
- nama (String)
- alamat (String)
- email (String)
- telepon (String)
- timestamps
```

### Tabel Pasien
```sql
- id (Primary Key)
- nama (String)
- alamat (String)
- telepon (String)
- rumah_sakit_id (Foreign Key)
- timestamps
```

## 🛠️ Instalasi dan Setup

1. **Clone Repository**
   ```bash
   git clone <repository-url>
   cd laravel_beni_sopian
   ```

2. **Install Dependencies**
   ```bash
   composer install
   npm install
   ```

3. **Environment Setup**
   ```bash
   cp .env.example .env
   php artisan key:generate
   ```

4. **Database Configuration**
   - Edit file `.env` untuk konfigurasi database
   - Pastikan database MySQL sudah dibuat

5. **Database Migration & Seeding**
   ```bash
   php artisan migrate
   php artisan db:seed
   ```

6. **Jalankan Aplikasi**
   ```bash
   php artisan serve
   ```

   Akses aplikasi di: `http://127.0.0.1:8000`

## 📱 Fitur Aplikasi

### 🔐 Autentikasi
- Login dengan username dan password
- Redirect otomatis berdasarkan status login
- Session management yang aman

### 🏥 Manajemen Rumah Sakit
- Tambah, edit, hapus data rumah sakit
- Validasi data lengkap
- Interface yang user-friendly

### 👥 Manajemen Pasien
- CRUD lengkap data pasien
- Relasi dengan rumah sakit
- Filter real-time berdasarkan rumah sakit
- Delete dengan konfirmasi AJAX

### 🎨 Antarmuka Pengguna
- Desain modern dan responsif
- Mobile-friendly
- Animasi dan transisi yang smooth
- Color scheme yang profesional

## 🧪 Testing

Jalankan test suite:
```bash
php artisan test
```

## 📦 Build untuk Production

```bash
npm run build
php artisan config:cache
php artisan route:cache
php artisan view:cache
```

## 👨‍💻 Developer

**BENI SOPIAN**

Aplikasi ini dibuat dan dikembangkan dengan hati-hati oleh **BENI SOPIAN**, peserta test untuk masuk ke perusahaan **PT Terakorp Indonesia**.

**BENI SOPIAN** adalah seorang **Mobile Developer** dan **Full-stack Developer** yang saat ini masih bekerja di salah satu perusahaan Jepang yaitu **Natural, Inc.**

Untuk informasi lebih lanjut tentang background dan pengalaman BENI SOPIAN, dapat dilihat di:
**[https://naturaling.jp/member.html](https://naturaling.jp/member.html)**

## 📄 Lisensi

Aplikasi ini menggunakan framework Laravel yang dilisensikan di bawah [MIT License](https://opensource.org/licenses/MIT).

---

**Dibuat dengan ❤️ oleh BENI SOPIAN**
