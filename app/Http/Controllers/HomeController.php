<?php

namespace App\Http\Controllers;

use App\Models\Artikel;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class HomeController extends Controller
{
    // public function index(){
    //     $data = User::get();

    //     return view('data_user',compact('data'));
    // }


    // public function landing(){
        
    //     // dd(auth()->user()->getRoleNames());
    //     return view('halaman-depan');
    // }



    // public function profil(){
    //     // $akun = Auth::user();
    //     // return view('profil.profil',compact('akun'));
    //     return view('profil.profil');
    // }

    // public function profil_edit(){
    //     return view('profil.profil_edit');
    // }

    // public function profil_update(Request $request,$id){
    //     $validator = Validator::make($request->all(),[
    //         'nama'          => 'required',
    //         'username'      => 'required',
    //         'email'         => 'required|email',
    //         'password'      => 'nullable',
    //         'gambar'        => 'nullable|mimes:png,jpg,jpeg|max:2048',
    //     ]);
        
    //     if($validator->fails()) return redirect()->back()->withInput()->withErrors($validator);

    //     $data['name']               = $request->nama;
    //     $data['username']           = $request->username;
    //     $data['email']              = $request->email;
    //     if($request->password){
    //         $data['password']           = Hash::make($request->password);
    //     }

    //     $gambar     = $request->file('gambar');
    //     if($gambar){
    //         $filename   = date('Y-m-d').$gambar->getClientOriginalName();
    //         $path       = 'gambar-profil/'.$filename;

    //         Storage::disk('public')->put($path,file_get_contents($gambar));

    //         $data['image']       = $filename;
    //     }

    //     User::whereId($id)->update($data);

    //     return redirect()->route('profil')->with('success','Data Berhasil Diubah');
    // }
    
    // public function dasboard(){
    //     return view('dasboard.dasboard_admin');

    // }

    // public function pencatatan(){
    //     return view('user.pencatatan');

    // }

    


}
