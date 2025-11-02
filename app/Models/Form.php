<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Form extends Model
{
     protected $fillable = [
        'nama_siswa',
        'kejadian',
        'deskripsi', 
        'tempat',
        'gambar',
        'video',
        'audio',
        'status'
    ];
}
