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
    public function destroy($id)
    {
        $destroy = KategoriInventory::destroy($id);
        return redirect()->back()->with('success', 'Berhasil di dihapus ');
    }
    public function create()
    {

        return view('kategori_inventory.form');
    }
    public function store(Request $request)
    {
        $inv = KategoriInventory::create([
            'nama_kategori' => $request->kategori,

        ]);

        return redirect()->back()->with ('success', 'Berhasil di Input');
    }
}
