<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PengajuanBarang extends Model
{
    protected $table = "pengajuan_barang";
    protected $fillable = [
        'nip',
        'nama_pegawai',
        'barang'
    ];
}
