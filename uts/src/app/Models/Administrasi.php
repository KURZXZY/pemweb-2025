<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Administrasi extends Model
{
    protected $table = 'administrasi'; // Pastikan nama tabel sesuai
    protected $fillable = ['nama', 'deskripsi'];
}
