<?php

namespace App\Http\Controllers;

use App\Models\Dashboard;
use App\Models\TabelGuru;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index() {
        $jumlah_guru = TabelGuru::all()->count();
        $informasi = Dashboard::firstOrFail();
        $kurikulum = $informasi->kurikulum;
        $jumlah_siswa = $informasi->jumlah_Siswa;
        $latest_info = $informasi->informasi_terkini;
        $info_terkini = $latest_info == null ? "belum ada informasi terkini." : $latest_info; 

        return view("adminn", compact('jumlah_guru','jumlah_siswa','kurikulum','info_terkini'));
    }

    public function edit() {
        $dashboard = Dashboard::firstOrFail();
        return view("dashboard.edit", compact('dashboard'));
    }

    public function update(Request $request) {
        $dashboard = Dashboard::firstOrFail();
        $dashboard->kurikulum = $request->kurikulum;
        $dashboard->jumlah_Siswa = $request->siswa;
        $dashboard->informasi_terkini = $request->informasi;
        $dashboard->save();
        return redirect()->back(); 
    }
}
