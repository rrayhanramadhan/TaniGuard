<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class BerandaController extends Controller
{
    public function beranda(){
        return view('dasboard.dasboard_admin');

    }

    public function data_pengguna(){
        $data = User::get();

        return view('data_user',compact('data'));
    }
}
