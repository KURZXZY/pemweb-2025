<?php
// filepath: /app/Models/Murid.php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Murid extends Model
{
    use HasFactory;

    protected $table = 'murids'; // Explicitly define the table name
    protected $fillable = ['name', 'email', 'phone_number', 'birth_date', 'address', 'image'];
}
