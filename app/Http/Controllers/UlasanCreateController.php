<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ulasan;

class UlasanController extends Controller
{
    public function create()
    {
        return view('ulasan.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'UlasanID' => 'required',
            'UserID' => 'required',
            'BukuID' => 'required',
            'Ulasan' => 'required',
            'Rating' => 'required|integer',
        ]);

        Ulasan::create($request->all());

        return redirect()->route('ulasan.create')->with('success', 'Ulasan berhasil ditambahkan.');
    }
}