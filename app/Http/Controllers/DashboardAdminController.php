<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Inventory;
use DB;

class DashboardAdminController extends Controller
{
    public function index()
    {
        $stok = Inventory::select("kategori_inventory.nama_kategori", DB::raw("count(inventory.id) as jml"))
            ->where('status', 'ada')
            ->join('kategori_inventory', 'inventory.kategori_id', '=', 'kategori_inventory.id')->groupBy('kategori_inventory.nama_kategori')->get();
        return view('admin.dashboard', [
            'stok' => $stok
        ]);
    }
}
