<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class DataAdminController extends Controller
{

    public function index()
    {
        $adm = User::all();

        return view('admin.dataadmin', [
            'user' => $adm



        ]);
    }
}