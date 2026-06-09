# UTS Pemrograman Web - Aplikasi Portofolio & Sistem Inventori

<p align="center">
  <img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk.svg" width="300" alt="Laravel Logo">
</p>

## 📌 Daftar Isi
1. [Deskripsi Proyek](#-deskripsi-proyek)
2. [Fitur Utama Aplikasi](#-fitur-utama-aplikasi-direktori-src)
3. [Teknologi Utama](#%EF%B8%8F-teknologi-utama)
4. [Dokumentasi Skrip Shell](#-dokumentasi-skrip-shell)
5. [Panduan Instalasi & Setup Lingkungan](#-panduan-instalasi--setup-lingkungan)
6. [Panduan Penggunaan Aplikasi](#-panduan-penggunaan-aplikasi)
7. [Pengujian Otomatis (Testing)](#-pengujian-otomatis-testing)
8. [Integrasi Berkelanjutan (CI/CD) & Code Style](#-integrasi-berkelanjutan-cicd--code-style)
9. [Panduan Kontribusi](#-panduan-kontribusi)
10. [Informasi Lisensi](#-informasi-lisensi)

---

## 📝 Deskripsi Proyek
Proyek **utspemweb** ini adalah sebuah aplikasi web fungsional yang dibangun untuk memenuhi tugas UTS mata kuliah Pemrograman Web di **Universitas Esa Unggul (UEU) FASILKOM**.

Tujuan utama dari proyek ini adalah mengintegrasikan **Sistem Informasi Portofolio Bisnis** dan **Sistem Manajemen Inventori** (studi kasus pengelolaan user, supplier, dan barang) secara dinamis. Core application dikembangkan menggunakan framework **Laravel 11**, **Filament v3 (Admin Panel)**, serta **Livewire** yang terletak sepenuhnya di dalam direktori `src/`. Seluruh sistem ini dibungkus menggunakan arsitektur **Docker Container** untuk mempermudah replikasi lingkungan pengembangan secara modular dan terisolasi.

### 🚀 Fitur Utama Aplikasi (Direktori `src/`)
- **Dashboard Manajemen Inventori:** Mengelola entitas data barang, supplier, dan user secara efisien melalui Filament Resource.
- **Portofolio & Manajemen Proyek:** Menampilkan data project dinamis dan interaktif ke halaman publik.
- **Formulir Kontak Livewire:** Fitur pesan/kontak interaktif pada halaman depan yang terintegrasi langsung dengan database tanpa me-refresh halaman.
- **Sistem Autentikasi & Log Akses:** Pengamanan hak akses menggunakan role management (Filament Shield) dan pencatatan aktivitas log sistem secara otomatis.

### 🛠️ Teknologi Utama
- **Backend Framework:** Laravel 11
- **Admin Panel Framework:** Filament v3
- **Frontend Interactivity:** Livewire & Tailwind CSS
- **Containerization / DevOps:** Docker, Docker Compose, Nginx, PHP 8.3-FPM, MySQL 8.0
- **Environment Support:** WSL 2 (Windows Subsystem for Linux), `mkcert` (Lokal SSL)

---

## 🐚 Dokumentasi Skrip Shell
Repositori ini menyediakan skrip otomasi shell di root direktori untuk mempercepat proses inisialisasi lingkungan tanpa perlu melakukan konfigurasi manual satu per satu:

- `start.sh`: Skrip untuk pengguna Linux / Windows WSL 2. Mengotomatisasi pembuatan SSL lokal via `mkcert`, menyalin setup `.env`, dan membangun kontainer.
- `start_mac.sh`: Skrip yang dioptimasi khusus untuk arsitektur macOS (Apple Silicon M1/M2/M3 atau Intel Core).
- `docker-cleanup.sh`: Membersihkan cache, menghentikan container yang bentrok, dan menghapus volume sisa.
- `delete-repo.sh`: Utilitas pembersihan repositori lokal secara aman.

---

## 💻 Panduan Instalasi & Setup Lingkungan

### 1. Prasyarat Sistem
Sebelum menjalankan aplikasi, pastikan perangkat Anda telah terpasang tools berikut:
- Docker & Docker Desktop (Aktif)
- Lingkungan WSL 2 (Pengguna Windows) atau Terminal (Pengguna macOS)
- `jq` dan `mkcert` (untuk otomasi local trusted SSL certificate)

### 2. Kloning Repositori
```bash
git clone [https://github.com/muhamadhaikal12123-code/utspemweb.git](https://github.com/muhamadhaikal12123-code/utspemweb.git)
cd utspemweb