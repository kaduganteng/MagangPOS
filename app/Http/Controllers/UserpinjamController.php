<?php

namespace App\Http\Controllers;

use App\Inventory;
use App\Peminjaman;
use App\User;
use Illuminate\Http\Request;
use App\Mail\UserPeminjamanEmail;
use Illuminate\Support\Facades\Mail;
use PDF;
use App\KategoriInventory;


class UserpinjamController extends Controller

{
    public function index($kategori)
    {
        $kategori = KategoriInventory::where('nama_kategori', $kategori)->first();

        $inventory = Inventory::where([
            ['status', 'ada'],
            ['kategori_id',$kategori->id]
        ])->get();

        
        $user = User::all();
        return view('userpinjam', [
            'inventory' => $inventory,
            'user' => $user


        ]);
    }
    public function store(Request $request)
    {
        // return $request->all();
        $this->validate($request, [
            'suratpinjam' => 'required'
        ]);

        $suratpinjam = $request->file('suratpinjam');
        $nama_file = time() . "_" . $suratpinjam->getClientOriginalName();

        // isi dengan nama folder tempat kemana file diupload
        $tujuan_upload = 'upload/';
        $suratpinjam->move($tujuan_upload, $nama_file);
        $peminjaman = Peminjaman::create([
            'inv_id' => $request->inv_id,
            'tgl_peminjaman' => $request->tanggal_pinjam,
            'nippos' => $request->nip,
            'surat_peminjaman' => $tujuan_upload . $nama_file

        ]);
        $inv = Inventory::findOrFail($request->inv_id);

        $status = $inv->update([
            'status' => 'tidak'
        ]);

        $user = User::where('nippos',$request->nip)->first();
       // Mail::to("hudanur0509@gmail.com")->send(new UserPeminjamanEmail());
      //  return view('struk.struk_peminjaman',['data'=>$request->all()]);
        $pdf = PDF::loadview('struk.struk_peminjaman', ['data' => $request->all(),'user' => $user,'inv' => $inv]);
        return $pdf->download('struk-peminjaman-pdf.pdf');
    }
}
