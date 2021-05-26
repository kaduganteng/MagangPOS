<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pemasangan extends Model
{
    protected $table = 'pemasangan';
    protected $fillable = [
        'inv_id',
        'tgl_pemasangan',
        'ruangan',
        'alamat',
        'status'
    ];
}
