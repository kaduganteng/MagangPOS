<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;

class DataAdminController extends Controller
{

    public function index()
    {
        $adm = User::find(Auth::user()->id);    

        return view('admin.dataadmin', [
            'adm' => $adm



        ]);
    }
}