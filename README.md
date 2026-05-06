# Laravel Supplier & Product System

Sistem CRUD Laravel lengkap untuk mengelola data Supplier dan Produk.

## Fitur

- **Modul Supplier**: Menampilkan daftar supplier dengan data dummy
- **Modul Produk**: CRUD lengkap (Create, Read, Update, Delete) untuk produk
- **Relasi Database**: Produk terhubung dengan Supplier
- **Validasi Form**: Input form produk dengan validasi
- **UI Bootstrap**: Tampilan yang bersih dan responsif

## Struktur Database

### Tabel Suppliers
- `id` (Primary Key)
- `name` (varchar 150)
- `phone` (varchar 15)
- `address` (text, nullable)
- `timestamps`

### Tabel Products
- `id` (Primary Key)
- `nama_produk` (varchar)
- `harga` (decimal)
- `stok` (integer)
- `supplier_id` (foreign key)
- `timestamps`

## Cara Menjalankan

### 1. Install Dependencies
```bash
composer install
```

### 2. Konfigurasi Database
Edit file `.env` sesuai dengan konfigurasi database Anda:
```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=laravel_supplier_product
DB_USERNAME=root
DB_PASSWORD=
```

### 3. Generate Application Key
```bash
php artisan key:generate
```

### 4. Jalankan Migration & Seeder
```bash
php artisan migrate
php artisan db:seed --class=SupplierSeeder
```

### 5. Jalankan Server
```bash
php artisan serve
```

### Cara Cepat (Auto Script)
Jalankan file `run_laravel.bat` untuk menjalankan semua langkah sekaligus:
```batch
run_laravel.bat
```

## Routes

- `GET /supplier` - Menampilkan daftar supplier
- `GET /produk` - Menampilkan daftar produk
- `GET /produk/create` - Form tambah produk
- `POST /produk` - Simpan produk baru
- `GET /produk/{id}/edit` - Form edit produk
- `PUT /produk/{id}` - Update produk
- `DELETE /produk/{id}` - Hapus produk

## Akses Aplikasi

Setelah server berjalan, buka browser dan akses:
- **Halaman Supplier**: http://127.0.0.1:8000/supplier
- **Halaman Produk**: http://127.0.0.1:8000/produk

## Data Dummy (Seeder)

SupplierSeeder akan membuat 5 data supplier:
1. PT. Maju Jaya Abadi (Jakarta)
2. CV. Sukses Makmur (Bandung)
3. UD. Berkah Jaya (Surabaya)
4. PT. Sejahtera Bersama (Semarang)
5. CV. Mandiri Sejahtera (Medan)

## Teknologi

- **Laravel 10.x**
- **MySQL**
- **Bootstrap 5**
- **PHP 8.1+**
