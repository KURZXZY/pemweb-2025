<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AkademikSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('akademik')->insert([
            ['nama' => 'Semester 1', 'kode' => 'S1', 'deskripsi' => 'Deskripsi Semester 1', 'tanggal_mulai' => '2025-01-01', 'tanggal_selesai' => '2025-06-30'],
            ['nama' => 'Semester 2', 'kode' => 'S2', 'deskripsi' => 'Deskripsi Semester 2', 'tanggal_mulai' => '2025-07-01', 'tanggal_selesai' => '2025-12-31'],
        ]);
    }
}
