<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PemasukanBarangController extends Controller
{
    public function index()
    {
        return view('pemasukan_barang.index');
    }
}
