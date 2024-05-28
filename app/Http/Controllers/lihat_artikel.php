<?php

namespace App\Http\Controllers;

use App\Models\Artikel;
use Illuminate\Http\Request;

class lihat_artikel extends Controller
{
    public function view(Request $request,$id){
        $ardata_view = Artikel::find($id);
        return view('artikel.view_artikel',compact('ardata_view'));

    }
}
