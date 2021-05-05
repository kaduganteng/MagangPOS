<?php

namespace App\Http\Controllers;

use App\Inventory;
use App\pemasangan;
use Illuminate\Http\Request;

class PemasanganController extends Controller
{

    public function index()
    {
        $pemasangan = Inventory::select('inventory.*', 'pemasangan.inv_id')
            ->join('pemasangan', 'pemasangan.id', '=', 'inventory.kategori_id')
            ->get();
        return view('pemasangan.index', [
            'inv' => $pemasangan
        ]);
    }
    public function create()
    {
        $inv = Inventory::all();
        return view('pemasangan/form', [
            'pemasangan' => $inv
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
