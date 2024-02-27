<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Buku; // Sesuaikan dengan model Buku yang Anda miliki
use PDF;

class BukupdfController extends Controller
{
//Buku
    public function downloadBukuPDF(Request $request)
    {
        $data = Buku::all(); // Gantilah dengan logika pengambilan data yang sesuai

        $pdf = PDF::loadView('bukus.bukupdf', compact('data')); // Gantilah dengan nama view dan variabel yang sesuai

        return $pdf->download('buku.pdf');
    }
}