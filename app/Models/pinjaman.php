<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pinjaman extends Model
{
    use HasFactory;

    protected $table = 'pinjaman';
    protected $fillable = ['user_id','buku_id','TanggalPeminjaman', 'TanggalPengembalian', 'StatusPeminjaman', 'jumlahPinjaman'];


    public function user()
    {
        return $this->belongsTo(User::class); // Menyatakan relasi bahwa setiap pinjaman dimiliki oleh satu user
    }

    public function buku()
    {
        return $this->belongsTo(Buku::class); // Menyatakan relasi bahwa setiap pinjaman terkait dengan satu buku
    }
}

