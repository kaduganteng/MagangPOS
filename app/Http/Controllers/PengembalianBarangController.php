<?php

namespace App\Http\Controllers;

use App\Peminjaman;
use App\Inventory;
use App\Pengembalian;
use Illuminate\Http\Request;

class PengembalianBarangController extends Controller
{
    public function index()
    {
        $peminjaman = Inventory::select('inventory.nama', 'peminjaman.*', 'pengembalian.tgl_pengembalian')
            ->join('peminjaman', 'peminjaman.inv_id', '=', 'inventory.id')
            ->join('pengembalian', 'pengembalian.peminjaman_id', '=', 'peminjaman.id')
            ->get();

        return view('pengembalian_barang.index', [
            'pengembalian' => $peminjaman
        ]);
    }
    public function create()
    {
        $pinjam = Inventory::select('inventory.nama', 'peminjaman.*')
            ->join('peminjaman', 'peminjaman.inv_id', '=', 'inventory.id')
            ->where('peminjaman.status', 'belum dikembalikan')
            ->get();

        return view('pengembalian_barang.form', [
            'pinjam' => $pinjam
        ]);
    }
    public function store(Request $request)
    {
        $inv = Pengembalian::create([

            'peminjaman_id' => $request->peminjaman_id,
            'tgl_pengembalian' => $request->tanggal_pinjam



        ]);
        $peminjaman = Peminjaman::findOrFail($request->peminjaman_id);
        $peminjaman->update([
            'status' => 'sudah dibalikan'

        ]);
        $statusinventory = Inventory::findOrFail($peminjaman->inv_id)->update([
            'status' => 'ada'
        ]);

        return redirect()->back()->with('success', 'Berhasil di Input');
    }
}
