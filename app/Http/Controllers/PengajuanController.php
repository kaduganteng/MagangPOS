<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PengajuanBarang;

class PengajuanController extends Controller
{
    public function create()
    {
        return view('pengajuan.form');
    }
    public function store(Request $request)
    {
        $inv = PengajuanBarang::create([
            'nip' => $request->nip,
            'nama_pegawai' => $request->nama_peminjam,
            'barang' => $request->nama_barang,

        ]);

        return redirect()->back()->with('success', 'Berhasil di Input');
    }
}
