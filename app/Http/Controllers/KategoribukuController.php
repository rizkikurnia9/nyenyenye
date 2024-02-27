<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kategoribuku;

class KategoribukuController extends Controller
{
    public function index()
    {
        $kategoribuku = Kategoribuku::all();
        return view('kategoribuku.index', compact('kategoribuku'));
    }

    public function create()
    {
        return view('kategoribuku.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'NamaKategori' => 'required',
        ]);

        Kategoribuku::create($request->all());

        return redirect()->route('kategoribuku.index')
                        ->with('success','Kategoribuku created successfully.');
    }

    public function edit(Kategoribuku $kategoribuku)
    {
        return view('kategoribuku.edit', compact('kategoribuku'));
    }

    public function update(Request $request, Kategoribuku $kategoribuku)
    {
        $request->validate([
            'NamaKategori' => 'required',
        ]);

        $kategoribuku->update($request->all());

        return redirect()->route('kategoribuku.index')
                        ->with('success','Kategoribuku updated successfully');
    }

    public function destroy(Kategoribuku $kategoribuku)
    {
        $kategoribuku->delete();    

        return redirect()->route('kategoribuku.index')
                        ->with('success','Kategoribuku deleted successfully');
    }
}
