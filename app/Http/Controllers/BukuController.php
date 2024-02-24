<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use App\Models\User;
use Illuminate\Http\Request;

class BukuController extends Controller
{
    public function index()
    {
        $bukus = buku::all();
        return view('bukus.index', compact('bukus'));
    }

    public function create()
    {
        return view('bukus.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'Judul' => 'required',
            'Penulis' => 'required',
            'Penerbit' => 'required',
            'TahunTerbit' => 'required'
        ]);

        Buku::create($request->all());

        return redirect()->route('books.index')
            ->with('success', 'Buku berhasil ditambahkan');
    }

    public function edit(Buku $book)
    {
        return view('bukus.edit', compact('book'));
    }
    


    public function update(Request $request, $id)
    {
        $book = Buku::findOrFail($id);

        $validatedData = $request->validate([
            'Judul' => 'required',
            'Penulis' => 'required',
            'Penerbit' => 'required',
            'TahunTerbit' => 'required',
        ]);

        $book->update($validatedData); // Menggunakan data yang telah divalidasi

        return redirect()->route('books.index')
            ->with('success', 'Buku berhasil diperbarui');
    }


    public function destroy(Buku $buku, $id)
    {
        $buku = Buku::findOrfail($id);
        $buku->delete();

        return redirect()->route('books.index')
            ->with('success', 'Buku berhasil dihapus');
    }
}
