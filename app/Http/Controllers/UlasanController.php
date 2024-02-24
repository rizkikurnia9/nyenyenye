<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ulasan; // Pastikan untuk mengimpor model Ulasan

class UlasanController extends Controller
{
    public function index()
    {
        $ulasan = Ulasan::all(); // Mengambil semua data ulasan dari database
        return view('ulasan.index', compact('ulasan')); // Menampilkan tampilan index dengan data ulasan
    }

    public function create()
    {
        return view('ulasan.create'); // Menampilkan formulir untuk membuat ulasan baru
    }

    public function store(Request $request)
    {
        $request->validate([
            'UlasanID' => 'required',
            'UserID' => 'required',
            'BukuID' => 'required',
            'Ulasan' => 'required',
            'Rating' => 'required',
        ]);

        Ulasan::create($request->all()); // Menyimpan ulasan baru ke database

        return redirect()->route('ulasan.index')
            ->with('success', 'Ulasan berhasil ditambahkan');
    }

    public function edit(Ulasan $ulasan)
    {
        return view('ulasan.edit', compact('ulasan')); // Menampilkan formulir untuk mengedit ulasan
    }

    public function update(Request $request, Ulasan $ulasan)
    {
        $request->validate([
            'UlusanID' => 'required',
            'UserID' => 'required',
            'BukuID' => 'required',
            'Ulasan' => 'required',
            'Rating' => 'required',
        ]);

        $ulasan->update($request->all()); // Mengupdate ulasan yang sudah ada

        return redirect()->route('ulasan.index')
            ->with('success', 'Ulasan berhasil diperbarui');
    }

    public function destroy(Ulasan $ulasan)
    {
        $ulasan->delete(); // Menghapus ulasan dari database

        return redirect()->route('ulasan.index')
            ->with('success', 'Ulasan berhasil dihapus');
    }
}
