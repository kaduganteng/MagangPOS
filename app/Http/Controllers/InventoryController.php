<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class InventoryController extends Controller
{
    public function index()
    {
        $inv = DB::table('inventory')->select('*')->get();

        return view('inventory/index');
    }
}
