<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KehadiranSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('kehadiran')->insert([
            ['user_id' => 1, 'tanggal' => '2025-05-19', 'status' => 'hadir'],
            ['user_id' => 2, 'tanggal' => '2025-05-20', 'status' => 'tidak_hadir'],
        ]);
    }
}
