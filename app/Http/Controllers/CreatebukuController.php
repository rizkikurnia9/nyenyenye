<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Buku;

class BukuController extends Controller
{
    public function create()
    {
        return view('bukus.create');
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

        return redirect()->route('bukus.create')->with('success', 'Buku berhasil ditambahkan.');
    }
}