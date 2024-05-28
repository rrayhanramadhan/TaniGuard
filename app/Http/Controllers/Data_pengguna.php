<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class Data_pengguna extends Controller
{
    public function data_pengguna(){
        // Mengambil data pengguna yang memiliki role "pengguna"
        $data = User::role('pengguna')->get();
    
        return view('data_user', compact('data'));
    }
    
}
