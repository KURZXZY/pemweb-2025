<?php

// database/factories/LoanFactory.php
namespace Database\Factories;

use App\Models\Book;
use App\Models\Member;
use Illuminate\Database\Eloquent\Factories\Factory;

class LoanFactory extends Factory
{
    public function definition(): array
    {
        // Pastikan sudah ada buku dan anggota di database
        // Jika belum ada, factory akan membuatnya secara otomatis
        $loanDate = fake()->dateTimeBetween('-1 month', 'now');
        $dueDate = (clone $loanDate)->modify('+2 weeks');

        return [
            'book_id' => Book::factory(),
            'member_id' => Member::factory(),
            'loan_date' => $loanDate,
            'due_date' => $dueDate,
            'return_date' => null, // Awalnya semua pinjaman belum dikembalikan
            'status' => 'Borrowed',
        ];
    }
}
