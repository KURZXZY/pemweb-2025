<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Kehadiran extends Model
{
    use SoftDeletes;

    protected $table = 'kehadiran'; // Pastikan nama tabel sesuai
    protected $fillable = ['user_id', 'tanggal', 'status'];
}
