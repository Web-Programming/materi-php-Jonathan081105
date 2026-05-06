<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Supplier;

class SupplierSeeder extends Seeder
{
    public function run()
    {
        Supplier::create([
            'name' => 'PT. Maju Jaya Abadi',
            'phone' => '02112345678',
            'address' => 'Jl. Sudirman No. 123, Jakarta Pusat',
        ]);

        Supplier::create([
            'name' => 'CV. Sukses Makmur',
            'phone' => '02287654321',
            'address' => 'Jl. Asia Afrika No. 456, Bandung',
        ]);

        Supplier::create([
            'name' => 'UD. Berkah Jaya',
            'phone' => '03198765432',
            'address' => 'Jl. Gajah Mada No. 789, Surabaya',
        ]);

        Supplier::create([
            'name' => 'PT. Sejahtera Bersama',
            'phone' => '02456789012',
            'address' => 'Jl. Pahlawan No. 321, Semarang',
        ]);

        Supplier::create([
            'name' => 'CV. Mandiri Sejahtera',
            'phone' => '06123456789',
            'address' => 'Jl. Sisingamangaraja No. 654, Medan',
        ]);
    }
}
