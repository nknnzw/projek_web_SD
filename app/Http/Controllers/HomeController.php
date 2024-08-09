<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TabelGuru;

class HomeController extends Controller
{
    public function index ()
    {
        $guru = TabelGuru::all();
        return view('main', compact('guru'));
    }
    
}
