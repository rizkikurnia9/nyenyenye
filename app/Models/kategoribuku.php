<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategoribuku extends Model
{
    use HasFactory;
    protected $table = 'Kategoribukus';
    protected $fillable = ['NamaKategori'];

}
