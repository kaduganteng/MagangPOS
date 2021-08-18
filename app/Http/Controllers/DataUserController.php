<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Inventory;
use Auth;

class DataUserController extends Controller
{
    public function index()
    {
        $adm = User::find(Auth::user()->id);
        $peminjaman = Inventory::select('inventory.nama', 'peminjaman.*', 'users.name')
            ->join('peminjaman', 'peminjaman.inv_id', '=', 'inventory.id')
            ->join('users', 'peminjaman.nippos', '=', 'users.nippos')
            ->where('peminjaman.status', 'belum dikembalikan')
            ->get();


        return view('admin.datauser', [
            'adm' => $adm,
            'peminjaman' => $peminjaman
        ]);
    }
}
