<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Book;
use App\Models\Member;
use App\Models\Loan;

class LoanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $books = Book::all();
        $members = Member::all();

        if ($books->isEmpty() || $members->isEmpty()) {
            $this->command->info('Tidak ada buku atau anggota, silakan jalankan BookSeeder dan MemberSeeder terlebih dahulu.');
            return;
        }

        // Buat 30 data pinjaman
        for ($i = 0; $i < 30; $i++) {
            // Ambil buku acak yang stoknya masih ada
            $book = $books->where('stock', '>', 0)->random();

            Loan::factory()->create([
                'book_id' => $book->id,
                'member_id' => $members->random()->id,
            ]);

            // Kurangi stok buku
            $book->decrement('stock');
        }
    }
}
