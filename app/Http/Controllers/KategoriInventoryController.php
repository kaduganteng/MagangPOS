<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\KategoriInventory;

class KategoriInventoryController extends Controller
{
    public function index()
    {
        $kategori = KategoriInventory::get();
        return view('kategori_inventory.index', [
            'kategori' => $kategori
        ]);
    }
}
