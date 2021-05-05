<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pengembalian extends Model
{
    protected $table = 'pengembalian';
    protected $fillable = [
        'pengembalian_id',
        'tgl_pengembalian'
    ];
}
