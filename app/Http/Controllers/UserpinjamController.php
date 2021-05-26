<?php

namespace App\Http\Controllers;

use App\Inventory;
use App\Peminjaman;
use App\User;
use Illuminate\Http\Request;
use App\Mail\UserPeminjamanEmail;
use Illuminate\Support\Facades\Mail;
class UserpinjamController extends Controller

{
    public function index()
    {

        $inventory = Inventory::where('status', 'ada')->get();
        $user = User::all();
        return view('userpinjam', [
            'inventory' => $inventory,
            'user' => $user


        ]);
    }
    public function store(Request $request)
    {
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

        $status = Inventory::findOrFail($request->inv_id)->update([
            'status' => 'tidak'
        ]);
        Mail::to("hudanur0509@gmail.com")->send(new UserPeminjamanEmail());
    }
}
