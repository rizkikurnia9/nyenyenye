<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pinjaman;

class PinjamanController extends Controller
{
    public function create()
    {
        return view('pinjaman.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'Judul' => 'required',
            'Penerbit' => 'required',
            'Penulis' => 'required',
            'Tahun_terbit' => 'required|integer'
        ]);

        Pinjaman::create($request->all());

        return redirect()->route('pinjaman.create')->with('success', 'Pinjaman berhasil ditambahkan.');
    }
}