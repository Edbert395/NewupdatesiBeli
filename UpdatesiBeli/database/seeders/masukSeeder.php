<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class masukSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('masuks')->insert([
            'kode_masuk' => 'KM001',
            'tanggal_masuk' => '2024-03-12',
            'kode_admin' => 'AD001',
            'kode_supplier' => 'SP001',
            'total_masuk' => '6',
        ]);
        DB::table('masuks')->insert([
            'kode_masuk' => 'KM002',
            'tanggal_masuk' => '2024-08-06',
            'kode_admin' => 'AD002',
            'kode_supplier' => 'SP002',
            'total_masuk' => '6',
        ]);
        DB::table('masuks')->insert([
            'kode_masuk' => 'KM003',
            'tanggal_masuk' => '2024-08-16',
            'kode_admin' => 'AD003',
            'kode_supplier' => 'SP003',
            'total_masuk' => '6',
        ]);
    }
}
