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
        $inv = Inventory::select('inventory.*', 'kategori_inventory.nama_kategori')
            ->join('kategori_inventory', 'kategori_inventory.id', '=', 'inventory.kategori_id')
            ->where('status', 'ada')
            ->get();
        return view('inventory.index', [
            'inv' => $inv
        ]);
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
            'sn' => $request->sn,
            'merk' => $request->merk,
            'kelengkapan' => $request->kelengkapan,
            'tgl_masuk' => $request->tanggal_masuk,
            'kategori_id' => $request->kategori_id
        ]);

        return redirect()->back()->with('success', 'Berhasil di Input');
    }

    public function destroy($id)
    {
        $destroy = Inventory::destroy($id);
        return redirect()->back()->with('success', 'Berhasil di dihapus ');
        
    }
}
