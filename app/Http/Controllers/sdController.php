<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller; 
use App\Models\TabelGuru;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class sdController extends Controller
{
    public function dashboard()
    {
     return view('adminn');
    }
    public function tableGuru()
    {
     return view('tabelGuru');
    }
}
?>