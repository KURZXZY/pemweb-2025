<?php
// filepath: /database/migrations/2025_05_19_000000_create_murids_table.php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMuridsTable extends Migration
{
    public function up(): void
    {
        Schema::create('murids', function (Blueprint $table) { // Use plural table name
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('phone_number')->nullable();
            $table->date('birth_date')->nullable();
            $table->text('address')->nullable();
            $table->string('image')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('murids'); // Use plural table name
    }
}
