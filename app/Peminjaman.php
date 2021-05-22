<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Peminjaman extends Model
{
    protected $table = 'peminjaman';
    protected $fillable = [
        'inv_id',
        'nippos',
        'tgl_peminjaman',
        'surat_peminjaman',
        'status'
    ];
}
