<?php

namespace App\Http\Controllers;

use App\Models\Data; // Import Data model
use Illuminate\Http\Request;

class DataController extends Controller
{
    public function destroy($id)
    {
        $data = Data::findOrFail($id);
        $data->delete();
        
        return redirect()->route('data.index')->with('success', 'Data berhasil dihapus.');
    }
}