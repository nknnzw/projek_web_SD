<?php

namespace App\Http\Controllers;

use App\Models\Extra;
use App\Models\Jadwal;
use App\Models\Kegiatan;
use App\Models\Prestasi;
use App\Models\Struktur;
use Illuminate\Http\Request;
use App\Models\TabelGuru;

class HomeController extends Controller
{
    public function index ()
    {
        $guru = TabelGuru::all();
        $struktur = Struktur::first();
        $kegiatan = Kegiatan::all()->groupBy("bulan");
        $jadwal = Jadwal::all();
        $prestasi = Prestasi::all();
        $ekstrakulikuler = Extra::all();
        // dd($ekstrakulikuler);
        return view('main', compact('guru', 'struktur', 'kegiatan', 'jadwal', 'prestasi', 'ekstrakulikuler'));
    }
    
}
