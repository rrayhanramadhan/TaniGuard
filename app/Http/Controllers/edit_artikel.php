<?php

namespace App\Http\Controllers;

use App\Models\Artikel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class edit_artikel extends Controller
{
    public function edit(Request $request,$id){
        $ardata = Artikel::find($id);
        return view('artikel.artikel_edit',compact('ardata'));

    }

    public function update(Request $request,$id){
        $validator = Validator::make($request->all(),[
            'judul'         => 'required',
            'deskripsi'     => 'required',
            'gambar'        => 'nullable|mimes:png,jpg,jpeg|max:2048',
            
            
        ]);

        if($validator->fails()) return redirect()->back()->withInput()->withErrors($validator);

        $ardata['judul']        = $request->judul;
        $ardata['deskripsi']    = $request->deskripsi;

        $gambar     = $request->file('gambar');
        if($gambar){
            $filename   = date('Y-m-d').$gambar->getClientOriginalName();
            $path       = 'gambar-artikel/'.$filename;

            Storage::disk('public')->put($path,file_get_contents($gambar));

            $ardata['gambar']       = $filename;
        }
        
        
        Artikel::whereId($id)->update($ardata);

        return redirect()->route('admin.artikel')->with('update','Data Berhasil Diubah');
    }
}
