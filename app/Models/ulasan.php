<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ulasan extends Model
{
    use HasFactory;

    protected $table = 'ulasans';
    protected $fillable = [ 'UserID','BukuID' ,'Ulasan', 'Rating'];
}
