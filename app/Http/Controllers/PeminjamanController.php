<?php

namespace App\Http\Controllers;

use App\Inventory;
use App\Peminjaman;
use Illuminate\Http\Request;

class PeminjamanController extends Controller
{
    public function index()
    {
        $inven = Inventory::select('inventory.*', 'peminjaman.inv_id')
            ->join('peminjaman', 'peminjaman.id', '=', 'inventory.kategori_id')
            ->get();
        return view('peminjaman.index', [
            'peminjaman' => $inven
        ]);
    }
    public function create()
    {
        $inv = Inventory::all();
        return view('peminjaman/form', [
            'peminjaman' => $inv
        ]);
    }
    public function store(Request $request)
    {
        $inv = Peminjaman::create([

            'inv_id' => $request->inv_id,
            'tgl_peminjaman' => $request->tanggal_pinjam,
            'nippos' => $request->nip,
            'surat_peminjaman' => $request->suratpinjam



        ]);

        return redirect()->back()->with('success', 'Berhasil di Input');
    }
}
