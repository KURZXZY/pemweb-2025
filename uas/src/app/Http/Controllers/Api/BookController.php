<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Book;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

/**
 * @OA\Tag(
 * name="Books",
 * description="API Endpoints untuk mengelola data buku"
 * )
 */
class BookController extends Controller
{
    /**
     * @OA\Get(
     * path="/api/books",
     * operationId="getBooksList",
     * tags={"Books"},
     * summary="Tampilkan daftar buku",
     * description="Mengambil daftar semua buku dengan paginasi.",
     * @OA\Response(
     * response=200,
     * description="Operasi berhasil",
     * @OA\JsonContent(type="array", @OA\Items(ref="#/components/schemas/Book"))
     * )
     * )
     */
    public function index()
    {
        return Book::paginate(15);
    }

    /**
     * @OA\Post(
     * path="/api/books",
     * operationId="storeBook",
     * tags={"Books"},
     * summary="Buat buku baru",
     * description="Menyimpan data buku baru ke database.",
     * @OA\RequestBody(
     * required=true,
     * @OA\JsonContent(ref="#/components/schemas/StoreBookRequest")
     * ),
     * @OA\Response(
     * response=201,
     * description="Buku berhasil dibuat",
     * @OA\JsonContent(ref="#/components/schemas/Book")
     * ),
     * @OA\Response(
     * response=422,
     * description="Data tidak valid"
     * )
     * )
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'author' => 'required|string|max:255',
            'stock' => 'required|integer|min:0',
        ]);

        $book = Book::create($validated);

        return response()->json($book, 201);
    }

    /**
     * @OA\Get(
     * path="/api/books/{id}",
     * operationId="getBookById",
     * tags={"Books"},
     * summary="Tampilkan detail buku",
     * description="Mengambil data satu buku berdasarkan ID.",
     * @OA\Parameter(
     * name="id",
     * description="ID Buku",
     * required=true,
     * in="path",
     * @OA\Schema(
     * type="integer"
     * )
     * ),
     * @OA\Response(
     * response=200,
     * description="Operasi berhasil",
     * @OA\JsonContent(ref="#/components/schemas/Book")
     * ),
     * @OA\Response(
     * response=404,
     * description="Buku tidak ditemukan"
     * )
     * )
     */
    public function show(Book $book)
    {
        return $book;
    }

    /**
     * @OA\Put(
     * path="/api/books/{id}",
     * operationId="updateBook",
     * tags={"Books"},
     * summary="Perbarui data buku",
     * description="Memperbarui data buku yang sudah ada di database.",
     * @OA\Parameter(
     * name="id",
     * description="ID Buku",
     * required=true,
     * in="path",
     * @OA\Schema(
     * type="integer"
     * )
     * ),
     * @OA\RequestBody(
     * required=true,
     * @OA\JsonContent(ref="#/components/schemas/StoreBookRequest")
     * ),
     * @OA\Response(
     * response=200,
     * description="Buku berhasil diperbarui",
     * @OA\JsonContent(ref="#/components/schemas/Book")
     * ),
     * @OA\Response(
     * response=404,
     * description="Buku tidak ditemukan"
     * ),
     * @OA\Response(
     * response=422,
     * description="Data tidak valid"
     * )
     * )
     */
    public function update(Request $request, Book $book)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'author' => 'required|string|max:255',
            'stock' => 'required|integer|min:0',
        ]);

        $book->update($validated);

        return response()->json($book);
    }

    /**
     * @OA\Delete(
     * path="/api/books/{id}",
     * operationId="deleteBook",
     * tags={"Books"},
     * summary="Hapus data buku",
     * description="Menghapus data buku dari database.",
     * @OA\Parameter(
     * name="id",
     * description="ID Buku",
     * required=true,
     * in="path",
     * @OA\Schema(
     * type="integer"
     * )
     * ),
     * @OA\Response(
     * response=204,
     * description="Buku berhasil dihapus"
     * ),
     * @OA\Response(
     * response=404,
     * description="Buku tidak ditemukan"
     * )
     * )
     */
    public function destroy(Book $book)
    {
        $book->delete();
        return response()->noContent();
    }
}
