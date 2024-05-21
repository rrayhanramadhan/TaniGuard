<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class KeluarController extends Controller
{
    public function keluar(){
        Auth::logout();
        return redirect('/');
    }
}
