<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Akademik extends Model
{
    protected $table = 'akademik'; // Pastikan nama tabel sesuai
    protected $fillable = ['nama', 'kode', 'deskripsi', 'tanggal_mulai', 'tanggal_selesai'];
}
