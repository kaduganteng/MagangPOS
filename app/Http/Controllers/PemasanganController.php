<?php

namespace App\Http\Controllers;

use App\Inventory;
use App\pemasangan;
use App\KategoriInventory;
use Illuminate\Http\Request;

class PemasanganController extends Controller
{

    public function index()
    {
        $pemasangan = Inventory::select('inventory.nama', 'pemasangan.*')
            ->join('pemasangan', 'pemasangan.inv_id', '=', 'inventory.id')
            ->get();
        return view('pemasangan.index', [
            'inv' => $pemasangan
        ]);
    }
    public function create()
    {
        $webcam = KategoriInventory::where('nama_kategori', 'webcam')->first();
        $pemasangan = Inventory::where('kategori_id', $webcam->id)->get();
        return view('pemasangan/form', [
            'pemasangan' => $pemasangan
        ]);
    }
    public function store(Request $request)
    {
        $pemasangan = pemasangan::create([
            'inv_id' => $request->idbarang,
            'tgl_pemasangan' => $request->tanggalpasang,
            'ruangan' => $request->ruangan,
            'alamat' => $request->alamat,
            'status' => $request->status
        ]);

        return redirect()->back()->with('success', 'Berhasil di Input');
    }
}
