<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;   

class DataUserController extends Controller
{
    public function index()
    {
        $adm = User::find(Auth::user()->id);

        return view('admin.datauser', [
            'adm' => $adm
        ]);
    }
}
