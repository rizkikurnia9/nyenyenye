<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Buku;

class BukuController extends Controller
{
    public function create()
    {
        $buku = Buku::all(); // Mendapatkan semua data buku
        return view('peminjaman.create', compact('buku')); // Meneruskan variabel $buku ke view
    }

    public function store(Request $request)
    {
        $request->validate([
            'Judul' => 'required',
            'Penerbit' => 'required',
            'Penulis' => 'required',
            'Tahun_terbit' => 'required|integer'
        ]);

        Buku::create($request->all());
        $buku = Buku::all();
        return redirect()->route('bukus.create')->with('success', 'Buku berhasil ditambahkan.');
    }
}