<?php

namespace Database\Seeders;

use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class supplierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        for($i = 1; $i <= 30; $i++) {
            DB::table('suppliers')->insert([
                'kode_supplier' => 'K' . str_pad($i, 4, '0', STR_PAD_LEFT),
                'nama_supplier' => $faker->name,
                'alamat' => $faker->address,
            ]);
        }
    }
}
