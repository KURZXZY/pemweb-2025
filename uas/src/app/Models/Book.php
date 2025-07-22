<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @OA\Schema(
 * schema="Book",
 * type="object",
 * title="Book",
 * required={"id", "title", "author", "stock"},
 * @OA\Property(property="id", type="integer", format="int64", description="Primary Key"),
 * @OA\Property(property="title", type="string", description="Judul Buku"),
 * @OA\Property(property="author", type="string", description="Penulis Buku"),
 * @OA\Property(property="stock", type="integer", description="Jumlah stok buku yang tersedia"),
 * @OA\Property(property="created_at", type="string", format="date-time"),
 * @OA\Property(property="updated_at", type="string", format="date-time")
 * )
 *
 * @OA\Schema(
 * schema="StoreBookRequest",
 * type="object",
 * title="Store Book Request",
 * required={"title", "author", "stock"},
 * @OA\Property(property="title", type="string", example="Belajar Laravel dari Dasar"),
 * @OA\Property(property="author", type="string", example="John Doe"),
 * @OA\Property(property="stock", type="integer", example=15)
 * )
 */
class Book extends Model
{
    use HasFactory;

    // ... isi model lainnya
    protected $fillable = ['title', 'author', 'stock'];

    public function loans()
    {
        return $this->hasMany(Loan::class);
    }
}
