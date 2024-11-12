<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Motor extends Model
{
    use HasFactory;

    // Menambahkan kolom yang ingin diisi melalui mass assignment
    protected $fillable = [
        'nama_motor', 'merk', 'tahun', 'harga', 'deskripsi',
    ];
}
