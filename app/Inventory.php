<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Inventory extends Model
{
    protected $table = 'inventory';
    protected $fillable = [
        'nama',
        'sn',
        'merk',
        'kelengkapan',
        'tgl_masuk',
        'kategori_id'
    ];
}
