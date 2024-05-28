<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;
use App\Models\Artikel;

class Buat_artikel extends Controller
{
    //craete
    public function buat_artikel(){
        return view('artikel.create_artikel');
    }

    //store
    public function menambah_artikel( Request $request ){
        $validator = Validator::make($request->all(),[
            'gambar'    => 'required|mimes:png,jpg,jpeg|max:2048',
        ]);

        if($validator->fails()) return redirect()->back()->withInput()->withErrors($validator);
        if(empty($request->judul) || empty($request->deskripsi) || empty($request->gambar)) {
            return redirect()->back()->withErrors('Semua Data Wajib Diisi')->withInput();
        }

        $gambar     = $request->file('gambar');
        $filename   = date('Y-m-d').$gambar->getClientOriginalName();
        $path       = 'gambar-artikel/'.$filename;

        Storage::disk('public')->put($path,file_get_contents($gambar));

        $ardata['judul']        = $request->judul;
        $ardata['deskripsi']    = $request->deskripsi;
        $ardata['gambar']       = $filename;
        // dd($ardata);

        Artikel::create($ardata);
        return redirect()->route('admin.artikel')->with('update','Data Berhasil Ditambahkan');

    }
}
