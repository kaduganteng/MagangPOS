<?php

namespace App\Http\Controllers;

use App\Peminjaman;
use App\Pengembalian;
use Illuminate\Http\Request;

class PengembalianBarangController extends Controller
{
    public function index()
    {
        $peminjaman = peminjaman::select('peminjaman.*', 'pengembalian.peminjaman_id')
            ->join('pengembalian', 'pengembalian.id', '=', 'peminjaman.inv_id')
            ->get();
        return view('pengembalian_barang.index', [
            'pengembalian' => $peminjaman
        ]);
    }
    public function create()
    {
        $inv = Peminjaman::all();
        return view('pengembalian_barang/form', [
            'pengembalian' => $inv
        ]);
    }
    public function store(Request $request)
    {
        $inv = Pengembalian::create([

            'peminjaman_id' => $request->inv_id,
            'tgl_pengembalian' => $request->tanggal_pinjam



        ]);

        return redirect()->back()->with('success', 'Berhasil di Input');
    }
}
