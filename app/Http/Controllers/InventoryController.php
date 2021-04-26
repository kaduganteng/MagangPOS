<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Inventory;
use App\KategoriInventory;

class InventoryController extends Controller
{
    public function index()
    {
        $inv = DB::table('inventory')->select('*')->get();

        return view('inventory/index');
    }
    public function create()
    {
        $kategori = KategoriInventory::all();
        return view('inventory/form', [
            'kategori' => $kategori
        ]);
    }
    public function store(Request $request)
    {
        $inv = Inventory::create([
            'nama' => $request->nama_barang,
            'kode' => $request->kode_barang,
            'tanggal_masuk' => $request->tanggal_masuk,
            'kategori_id' => $request->kategori_id
        ]);

        return redirect()->back()->with('success', 'Berhasil di Input');
    }
}
