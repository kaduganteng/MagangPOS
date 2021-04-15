<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KategoriInventory extends Model
{
    protected $table = "kategori_inventory";
    protected $fillable = [
        'nama_kategori'
    ];
}
