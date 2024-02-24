<?php
// app/Http/Controllers/PINJAMANController

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pinjaman;

class PinjamanController extends Controller
{
    // Method lain seperti index, create, store, dan lainnya

    public function edit($id)
    {
        // Mengambil data Pinjaman berdasarkan ID
        $Pinjaman = Pinjaman::findOrFail($id);

        // Mengirim data Pinjaman ke view untuk diedit
        return view('Pinjamans.edit', compact('Pinjaman'));
    }
}