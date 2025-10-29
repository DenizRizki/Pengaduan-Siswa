<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Laporan extends Model
{

protected $table = 'laporans'; //tambahan gw

protected $fillable = [
        'sid', 
        'deskripsi_laporan', 
        'status'
] ;
}

