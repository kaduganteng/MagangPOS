<?php

namespace App\Http\Controllers;

use App\Inventory;
use App\Peminjaman;
use App\User;
use Illuminate\Http\Request;

class PeminjamanController extends Controller
{
    public function index()
    {
        $inven = Inventory::select('inventory.nama', 'peminjaman.*', 'users.name')
            ->join('peminjaman', 'peminjaman.inv_id', '=', 'inventory.id')
            ->join('users', 'peminjaman.nippos', '=', 'users.nippos')
            ->where('peminjaman.status', 'belum dikembalikan')
            ->get();
        return view('peminjaman.index', [
            'peminjaman' => $inven
        ]);
    }
    public function create()
    {
        $inv = Inventory::where('status', 'ada')->get();
        $user = User::all();
        
        return view('peminjaman/form', [
            'peminjaman' => $inv,
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



        return redirect()->back()->with('success', 'Berhasil di Input');
    }
}
