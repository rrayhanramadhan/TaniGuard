<?php

namespace App\Http\Controllers;

use App\Models\MSensor;
use App\Models\PencatatanHama;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RiwayatController extends Controller
{
    // public function riwayat(){
    //     return view('monitoring.riwayat');
    // }

    public function riwayat(){
        $uniqueMonths = PencatatanHama::selectRaw('MONTH(created_at) as month')
        ->distinct()
        ->orderBy('month')
        ->get()
        ->pluck('month');

        $namaBulan = [
            1 => 'Januari',
            2 => 'Februari',
            3 => 'Maret',
            4 => 'April',
            5 => 'Mei',
            6 => 'Juni',
            7 => 'Juli',
            8 => 'Agustus',
            9 => 'September',
            10 => 'Oktober',
            11 => 'November',
            12 => 'Desember'
        ];

        // Inisialisasi array untuk menyimpan opsi dropdown
        $dropdownOptions = [];

         // Loop melalui nilai bulan unik dan tambahkan opsi dropdown
        foreach ($uniqueMonths as $month) {
            $dropdownOptions[$month] = $namaBulan[$month];
        }
    

        $data = PencatatanHama::select(
            DB::raw('COUNT(respon) as total_respon'),
            DB::raw('MONTH(created_at) as bulan')
        )
        ->groupBy(DB::raw('MONTH(created_at)'))
        ->get();

        $total_respon = [];
        $bulan = [];

        foreach ($data as $item) {
            $total_respon[] = $item->total_respon;
            $bulan[] = $namaBulan[$item->bulan];
        }

        return view('monitoring.riwayat', compact('total_respon', 'bulan','dropdownOptions'));
    }
}
