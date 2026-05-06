<?php

namespace Database\Seeders;

use App\Models\Supplier;
use App\Models\Produk;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SupplierProdukSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Data 25 Supplier
        $suppliersData = [
            ['nama' => 'PT. Sumber Jaya', 'telepon' => '081234567890', 'alamat' => 'Jl. Sudirman No. 123, Jakarta'],
            ['nama' => 'CV. Maju Bersama', 'telepon' => '082345678901', 'alamat' => 'Jl. Thamrin No. 45, Bandung'],
            ['nama' => 'PT. Sejahtera Abadi', 'telepon' => '083456789012', 'alamat' => 'Jl. Gatot Subroto No. 78, Surabaya'],
            ['nama' => 'UD. Berkah Makmur', 'telepon' => '084567890123', 'alamat' => 'Jl. Ahmad Yani No. 90, Semarang'],
            ['nama' => 'PT. Teknologi Nusantara', 'telepon' => '085678901234', 'alamat' => 'Jl. MH Thamrin Kav. 10, Jakarta'],
            ['nama' => 'CV. Sukses Mandiri', 'telepon' => '086789012345', 'alamat' => 'Jl. Dago No. 88, Bandung'],
            ['nama' => 'PT. Digital Solusi', 'telepon' => '087890123456', 'alamat' => 'Jl. Pemuda No. 56, Surabaya'],
            ['nama' => 'UD. Jaya Abadi', 'telepon' => '088901234567', 'alamat' => 'Jl. Pahlawan No. 23, Yogyakarta'],
            ['nama' => 'PT. Elektronik Prima', 'telepon' => '089012345678', 'alamat' => 'Jl. Gatot Subroto No. 100, Jakarta'],
            ['nama' => 'CV. Makmur Sentosa', 'telepon' => '081123456789', 'alamat' => 'Jl. Asia Afrika No. 77, Bandung'],
            ['nama' => 'PT. Inovasi Teknologi', 'telepon' => '082234567890', 'alamat' => 'Jl. Mayjend Sungkono No. 89, Surabaya'],
            ['nama' => 'UD. Sumber Rejeki', 'telepon' => '083345678901', 'alamat' => 'Jl. Malioboro No. 45, Yogyakarta'],
            ['nama' => 'PT. Global Sukses', 'telepon' => '084456789012', 'alamat' => 'Jl. Sudirman No. 200, Jakarta'],
            ['nama' => 'CV. Karya Mandiri', 'telepon' => '085567890123', 'alamat' => 'Jl. Braga No. 34, Bandung'],
            ['nama' => 'PT. Mitra Sejahtera', 'telepon' => '086678901234', 'alamat' => 'Jl. Basuki Rahmat No. 67, Surabaya'],
            ['nama' => 'UD. Lancar Jaya', 'telepon' => '087789012345', 'alamat' => 'Jl. Solo No. 12, Yogyakarta'],
            ['nama' => 'PT. Citra Teknologi', 'telepon' => '088890123456', 'alamat' => 'Jl. Kuningan No. 55, Jakarta'],
            ['nama' => 'CV. Bintang Terang', 'telepon' => '089901234567', 'alamat' => 'Jl. Merdeka No. 89, Bandung'],
            ['nama' => 'PT. Harmoni Digital', 'telepon' => '081012345678', 'alamat' => 'Jl. Diponegoro No. 78, Surabaya'],
            ['nama' => 'UD. Permata Indah', 'telepon' => '082123456789', 'alamat' => 'Jl. Magelang No. 56, Yogyakarta'],
            ['nama' => 'PT. Nusantara Computama', 'telepon' => '083234567890', 'alamat' => 'Jl. TB Simatupang No. 99, Jakarta'],
            ['nama' => 'CV. Dinamika Usaha', 'telepon' => '084345678901', 'alamat' => 'Jl. Setiabudi No. 44, Bandung'],
            ['nama' => 'PT. Sinergi Teknologi', 'telepon' => '085456789012', 'alamat' => 'Jl. Wolter Monginsidi No. 33, Surabaya'],
            ['nama' => 'UD. Tugu Jaya', 'telepon' => '086567890123', 'alamat' => 'Jl. Urip Sumoharjo No. 22, Yogyakarta'],
            ['nama' => 'PT. Multi Prima', 'telepon' => '087678901234', 'alamat' => 'Jl. HR Rasuna Said No. 88, Jakarta'],
        ];

        $suppliers = [];
        foreach ($suppliersData as $data) {
            $suppliers[] = Supplier::create($data);
        }

        // Data 25 Produk
        $produkData = [
            ['kode' => 'PRD001', 'nama' => 'Laptop ASUS VivoBook', 'harga' => 7500000, 'stok' => 15],
            ['kode' => 'PRD002', 'nama' => 'Mouse Logitech MX', 'harga' => 850000, 'stok' => 50],
            ['kode' => 'PRD003', 'nama' => 'Keyboard Mechanical Keychron', 'harga' => 1200000, 'stok' => 30],
            ['kode' => 'PRD004', 'nama' => 'Monitor Dell 24 inch', 'harga' => 2100000, 'stok' => 20],
            ['kode' => 'PRD005', 'nama' => 'SSD Samsung 1TB', 'harga' => 1500000, 'stok' => 25],
            ['kode' => 'PRD006', 'nama' => 'RAM Corsair 16GB', 'harga' => 950000, 'stok' => 40],
            ['kode' => 'PRD007', 'nama' => 'Processor Intel i7', 'harga' => 4500000, 'stok' => 10],
            ['kode' => 'PRD008', 'nama' => 'VGA RTX 4060', 'harga' => 5500000, 'stok' => 12],
            ['kode' => 'PRD009', 'nama' => 'Motherboard ASUS ROG', 'harga' => 3200000, 'stok' => 18],
            ['kode' => 'PRD010', 'nama' => 'Power Supply 650W', 'harga' => 750000, 'stok' => 35],
            ['kode' => 'PRD011', 'nama' => 'Casing PC Gaming', 'harga' => 850000, 'stok' => 22],
            ['kode' => 'PRD012', 'nama' => 'Cooler CPU Liquid', 'harga' => 1100000, 'stok' => 15],
            ['kode' => 'PRD013', 'nama' => 'Webcam Logitech C920', 'harga' => 1200000, 'stok' => 28],
            ['kode' => 'PRD014', 'nama' => 'Headset HyperX Cloud', 'harga' => 680000, 'stok' => 45],
            ['kode' => 'PRD015', 'nama' => 'Speaker Edifier', 'harga' => 450000, 'stok' => 38],
            ['kode' => 'PRD016', 'nama' => 'Router WiFi 6', 'harga' => 890000, 'stok' => 20],
            ['kode' => 'PRD017', 'nama' => 'Switch Hub 16 Port', 'harga' => 550000, 'stok' => 25],
            ['kode' => 'PRD018', 'nama' => 'Kabel HDMI 5m', 'harga' => 85000, 'stok' => 100],
            ['kode' => 'PRD019', 'nama' => 'USB Hub 7 Port', 'harga' => 150000, 'stok' => 60],
            ['kode' => 'PRD020', 'nama' => 'Laptop Stand Aluminium', 'harga' => 250000, 'stok' => 50],
            ['kode' => 'PRD021', 'nama' => 'Mousepad Gaming XL', 'harga' => 180000, 'stok' => 75],
            ['kode' => 'PRD022', 'nama' => 'Webcam Ring Light', 'harga' => 220000, 'stok' => 40],
            ['kode' => 'PRD023', 'nama' => 'Cable Management Kit', 'harga' => 95000, 'stok' => 90],
            ['kode' => 'PRD024', 'nama' => 'Desk Mat Leather', 'harga' => 350000, 'stok' => 30],
            ['kode' => 'PRD025', 'nama' => 'Monitor Arm Stand', 'harga' => 450000, 'stok' => 20],
        ];

        foreach ($produkData as $index => $produk) {
            Produk::create([
                'kode' => $produk['kode'],
                'nama' => $produk['nama'],
                'harga' => $produk['harga'],
                'stok' => $produk['stok'],
                'supplier_id' => $suppliers[$index % count($suppliers)]->id
            ]);
        }
    }
}
