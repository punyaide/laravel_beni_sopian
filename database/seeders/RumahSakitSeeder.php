<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RumahSakitSeeder extends Seeder {
    public function run(): void {
        DB::table('rumah_sakits')->insert([
            ['nama' => 'RS Siloam', 'alamat' => 'Jakarta', 'email' => 'siloam@mail.com', 'telepon' => '021123456'],
            ['nama' => 'RS Harapan', 'alamat' => 'Bandung', 'email' => 'harapan@mail.com', 'telepon' => '022987654'],
        ]);
    }
}
