<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('loans', function (Blueprint $table) {
            $table->id();

            // Pastikan foreign key cocok dan tabel 'books' sudah ada sebelum ini dijalankan
            $table->foreignId('book_id')->constrained('books')->cascadeOnDelete();

            // Tabel members harus sudah ada juga, kalau belum, ubah atau sesuaikan
            $table->foreignId('member_id')->constrained('members')->cascadeOnDelete();

            $table->date('loan_date');
            $table->date('due_date')->nullable();
            $table->date('return_date')->nullable();
            $table->string('status')->default('Borrowed');
            $table->boolean('is_returned')->default(false);

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('loans');
    }
};
