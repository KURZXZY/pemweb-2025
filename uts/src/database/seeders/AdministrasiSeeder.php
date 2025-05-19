<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AdministrasiSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('administrasi')->insert([
            ['nama' => 'Administrasi 1', 'deskripsi' => 'Deskripsi Administrasi 1'],
            ['nama' => 'Administrasi 2', 'deskripsi' => 'Deskripsi Administrasi 2'],
        ]);
    }
}
