<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class DaftarController extends Controller
{
    public function daftar(){
        return view('auth.daftar');
    }

    public function daftar_proses(Request $request){
        
        if(empty($request->nama) || empty($request->username) || empty($request->email)|| empty($request->password)) {
            return redirect()->route('daftar')->withErrors('Seluruh Data Wajib Diisi')->withInput();
        }

        $checkUser = User::where('username',$request->username)->first();
        if ($checkUser){
            return redirect()->route('daftar')->withErrors('Maaf data anda tidak valid!');
        }
        // $checkEmail = User::where('email',$request->email)->first();
        // if ($checkEmail){
        //     return redirect()->route('daftar')->withErrors('Akun anda telah Terdaftar!');
        // }

        dd($request);
        $user = User::create([
            'name' => $request->nama,
            'username' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
        $user->assignRole('pengguna');
        return redirect()->route('masuk');

    }
}
