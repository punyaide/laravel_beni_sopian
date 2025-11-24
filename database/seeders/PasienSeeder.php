<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PasienSeeder extends Seeder {
    public function run(): void {
        DB::table('pasiens')->insert([
            ['nama' => 'Budi', 'alamat' => 'Jakarta', 'telepon' => '081111', 'rumah_sakit_id' => 1],
            ['nama' => 'Siti', 'alamat' => 'Bandung', 'telepon' => '082222', 'rumah_sakit_id' => 2],
        ]);
    }
}
