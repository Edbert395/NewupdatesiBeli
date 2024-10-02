<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class barangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('barangs')->insert([
            'kode_barang' => 'B0001',
            'harga_jual' => '110000',
            'harga_beli' => '180000',
            'stok' => '20',
            'status' => 'Tersedia',
            'satuan' => 'pcs',
            'nama_barang' => 'Baju',
        ]);
        DB::table('barangs')->insert([
            'kode_barang' => 'B0002',
            'harga_jual' => '110000',
            'harga_beli' => '180000',
            'stok' => '20',
            'status' => 'Tersedia',
            'satuan' => 'pcs',
            'nama_barang' => 'Hoodie',
        ]);
        DB::table('barangs')->insert([
            'kode_barang' => 'B0003',
            'harga_jual' => '110000',
            'harga_beli' => '180000',
            'stok' => '20',
            'status' => 'Tersedia',
            'satuan' => 'pcs',
            'nama_barang' => 'Jeans',
        ]);
        DB::table('barangs')->insert([
            'kode_barang' => 'B0004',
            'harga_jual' => '110000',
            'harga_beli' => '180000',
            'stok' => '20',
            'status' => 'Tersedia',
            'satuan' => 'pcs',
            'nama_barang' => 'Celana Panjang',
        ]);
        DB::table('barangs')->insert([
            'kode_barang' => 'B0005',
            'harga_jual' => '110000',
            'harga_beli' => '180000',
            'stok' => '20',
            'status' => 'Tersedia',
            'satuan' => 'pcs',
            'nama_barang' => 'Celana Pendek',
        ]);
        DB::table('barangs')->insert([
            'kode_barang' => 'B0006',
            'harga_jual' => '110000',
            'harga_beli' => '180000',
            'stok_' => '20',
            'status' => 'Tersedia',
            'satuan' => 'pcs',
            'nama_barang' => 'Dress',
        ]);
        DB::table('barangs')->insert([
            'kode_barang' => 'B0007',
            'harga_jual' => '110000',
            'harga_beli' => '180000',
            'stok' => '20',
            'status' => 'Tersedia',
            'satuan' => 'pcs',
            'nama_barang' => 'Rok Panjang',
        ]);
        DB::table('barangs')->insert([
            'kode_barang' => 'B0008',
            'harga_jual' => '110000',
            'harga_beli' => '180000',
            'stok' => '20',
            'status' => 'Tersedia',
            'satuan' => 'pcs',
            'nama_barang' => 'Rok Pendek',
        ]);
        DB::table('barangs')->insert([
            'kode_barang' => 'B0009',
            'harga_jual' => '110000',
            'harga_beli' => '180000',
            'stok' => '20',
            'status' => 'Tersedia',
            'satuan' => 'pcs',
            'nama_barang' => 'Kaos Kaki',
        ]);
        DB::table('barangs')->insert([
            'kode_barang' => 'B0010',
            'harga_jual' => '110000',
            'harga_beli' => '180000',
            'stok' => '20',
            'status' => 'Tersedia',
            'satuan' => 'pcs',
            'nama_barang' => 'Sepatu',
        ]);
    }
}
