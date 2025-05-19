<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MuridSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('murid')->insert([ // Use singular table name if that's the convention
            [
                'name' => 'John Doe',
                'email' => 'johndoe@example.com',
                'phone_number' => '1234567890',
                'birth_date' => '2005-01-15',
                'address' => '123 Main St',
                'image' => '',
            ],
            [
                'name' => 'Jane Smith',
                'email' => 'janesmith@example.com',
                'phone_number' => '0987654321',
                'birth_date' => '2003-07-22',
                'address' => '456 Elm St',
                'image' => '',
            ],
        ]);
    }
}
