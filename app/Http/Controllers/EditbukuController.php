<?php
// app/Http/Controllers/BukuController

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Buku;

class BukuController extends Controller
{
    // Method lain seperti index, create, store, dan lainnya

    public function edit($id)
    {
        // Mengambil data buku berdasarkan ID
        $buku = Buku::findOrFail($id);

        // Mengirim data buku ke view untuk diedit
        return view('bukus.edit', compact('buku'));
    }
}