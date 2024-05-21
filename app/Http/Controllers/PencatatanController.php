<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PencatatanController extends Controller
{
    public function pencatatan(){
        return view('user.pencatatan');

    }
}
