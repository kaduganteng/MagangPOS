<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PengembalianBarangController extends Controller
{
    public function index()
    {
        return view('pengembalian_barang.index');
    }
}
