<?php

namespace App\Http\Controllers;


use App\Models\PencatatanHama;
use Carbon\Carbon;
use Illuminate\Http\Request;

class SensorController extends Controller
{
    public function monitoring_RT() {
        return view('monitoring.RealTime');
    }

    public function bacarespon(){
        //mengambil tanggal saat ini
        $today = Carbon::today()->toDateString();

        //menjumlahkan data berdasarkan tanggal saat ini
        $totalRespon = PencatatanHama::whereDate('created_at', $today)->count();

        //
        return view('bacarespon', ['totalRespon' => $totalRespon]);
    }

    public function simpansensor(){
        PencatatanHama::where('id', '1')->update(['respon' => request()->nilairespon]);
    }

    public function sensor_data(Request $request) {
        $request->validate([
            'respon' => 'required|numeric',
        ]);

        PencatatanHama::create([
            'respon' => $request->respon,
        ]);

        return response()->json(['message' =>'Data berhasil disimpan' ], 200);
    }

}
