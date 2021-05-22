<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pengembalian extends Model
{
    protected $table = 'pengembalian';
    protected $fillable = [
        'peminjaman_id',
        'tgl_pengembalian'
    ];
}
