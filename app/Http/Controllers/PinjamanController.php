<?php

namespace App\Http\Controllers;

use App\Models\buku;
use App\Models\Pinjaman;
use Illuminate\Http\Request;

class PinjamanController extends Controller
{
    public function index()
    {
        $pinjaman = Pinjaman::all();
        return view('peminjaman.index', compact('pinjaman')); // Mengubah 'peminjaman' menjadi 'pinjaman'
    }

    public function create()
    {
        $buku = buku::all();
        return view('peminjaman.create', compact('buku'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'user_id' => 'required',
            'buku_id' => 'required',
            'TanggalPeminjaman' => 'required',
            'TanggalPengembalian' => 'required',
            // 'StatusPeminjaman' => 'required',
            'jumlahPinjaman' => 'required'
        ]);

        Pinjaman::create($request->all()); // Mengubah 'Peminjaman' menjadi 'Pinjaman'

        return redirect()->route('pinjaman.index')
            ->with('success', 'Peminjaman berhasil ditambahkan'); // Mengubah 'peminjaman' menjadi 'pinjaman'
    }

    public function edit($id) // Mengubah $peminjaman menjadi $id, karena parameter yang diterima adalah id
    {
        $pinjaman = Pinjaman::findOrFail($id); // Mengubah 'peminjaman.edit' menjadi 'peminjaman.edit'
        return view('peminjaman.edit', compact('pinjaman'));
    }

    public function update(Request $request, $id)
    {
        $pinjaman = Pinjaman::findOrFail($id);

        $validatedData = $request->validate([
            'UserID' => 'required',
            'BukuID' => 'required',
            'TanggalPeminjaman' => 'required',
            'TanggalPengembalian' => 'required',
            'StatusPeminjaman' => 'required'
        ]);

        $pinjaman->update($validatedData);

        return redirect()->route('pinjaman.index')
            ->with('success', 'Peminjaman berhasil diperbarui'); // Mengubah 'pinjaman' menjadi 'Peminjaman'
    }

    public function destroy($id) // Mengubah $pinjaman menjadi $id, karena parameter yang diterima adalah id
    {
        $pinjaman = Pinjaman::findOrFail($id);
        $pinjaman->delete();

        return redirect()->route('pinjaman.index')
            ->with('success', 'Peminjaman berhasil dihapus'); // Mengubah 'pinjaman' menjadi 'Peminjaman'
    }
}
