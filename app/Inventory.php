<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Inventory extends Model
{
    protected $table = 'inventory';
    protected $fillable = [
        'nama',
        'kode',
        'tanggal_masuk',
        'tanggal_keluar',
        'kategori_id'
    ];
}
