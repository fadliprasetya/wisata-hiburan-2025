# 🎢 Sistem Wisata Hiburan - Laravel + Struktur Data

📌 Proyek ini merupakan simulasi sistem wisata hiburan berbasis Laravel yang mengimplementasikan struktur data dasar: **Array, Stack, Queue, Tree, Graph, dan Searching**.

📍 URL Lokal: `http://127.0.0.1:8000/`

## 🚀 Fitur yang Diimplementasikan

| Struktur Data | URL Akses |
|---------------|-----------|
| Array         | `/array` |
| Stack         | `/stack` |
| Queue         | `/queue` |
| Tree          | `/tree` |
| Graph         | `/graph` |
| Searching     | `/searching` |
| Dashboard     | `/`      |

## 📁 Struktur Folder Penting

- `app/Http/Controllers/` → Logika semua struktur data
- `resources/views/` → Tampilan Blade masing-masing struktur
- `routes/web.php` → Routing utama Laravel

## ⚙️ Cara Menjalankan Proyek

```bash
git clone https://github.com/fadliprasetya/wisata-hiburan-2025.git
cd wisata-hiburan-2025/wisatahiburan
composer install
cp .env.example .env
php artisan key:generate
php artisan migrate
php artisan serve
