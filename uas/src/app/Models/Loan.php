<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Loan extends Model
{
    use HasFactory;

    protected $fillable = [
        'book_id',
        'member_id',
        'loan_date',
        'due_date',
        'return_date',
        'status',
    ];

    // ✅ Relasi ke Book
    public function book()
    {
        return $this->belongsTo(Book::class);
    }

    // ✅ Relasi ke Member
    public function member()
    {
        return $this->belongsTo(Member::class);
    }
}
