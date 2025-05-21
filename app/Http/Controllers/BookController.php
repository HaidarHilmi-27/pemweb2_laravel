<?php

namespace App\Http\Controllers;
use App\Models\Book;


use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index()
    {
        $books = Book::all();
        return view('books.index', compact('books'));
    }

    public function create()
    {
        return view('books.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'author' => 'required|max:255',
            'year' => 'required|integer',
        ]);

        book::create($validatedData);
        return redirect('/books')->with('success',);
    }
    public function edit($id)
    {
        $book = Book::findOrFail($id);
        return view('books.edit', compact('book'));
    }
    public function update(Request $request, $id)
    {
    // Validasi input
    $validated = $request->validate([
        'title' => 'required|string|max:255',
        'author' => 'required|string|max:255',
        'year' => 'required|integer',
    ]);

    // Cari buku berdasarkan ID
    $book = Book::findOrFail($id);

    // Update data buku
    $book->update($validated);

    // Redirect kembali ke daftar buku
    return redirect('/books')->with('success', 'Buku berhasil diperbarui!');
    }
    public function destroy($id)
    {
    // Cari buku berdasarkan ID
    $book = Book::findOrFail($id);

    // Hapus buku dari database
    $book->delete();

    // Redirect ke halaman daftar buku dengan pesan sukses
    return redirect('/books')->with('success', 'Buku berhasil dihapus!');
    }


}
