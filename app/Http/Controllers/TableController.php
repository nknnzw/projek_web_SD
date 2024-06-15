<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\TabelGuru;
use Illuminate\Http\Request;

class TableController extends Controller
{
    public function tableGuru()
    {
        $data['posts'] = TabelGuru::all();        
        return view('tabelGuru' , $data);
    }
    public function createGuru()
    {
        $data['get'] = TabelGuru::all();        
        return view('create-guru' , $data);
    }

    public function storeGuru(Request $request)
    {
        $validatedData = $request->validate([
            'gambar' => 'required',
            'nama' => 'required',
            'nip' => 'required',
            'tanggal_lahir' => 'required',
            'jenis_kelamin' => 'required',
            'jabatan' => 'required',
            'status_kepegawaian' => 'required',
            
        ]);

        // Simpan data ke database
        TabelGuru::create($validatedData);
        return redirect()->route('tabelGuru')->with('success', 'Post created successfully!');
    }

    public function deleteGuru(TabelGuru $post)
    {
        $post->delete();
        return redirect()->route('tabelGuru');
    }

    public function updateGuru(Request $request, TabelGuru $post)
    {
        $post->update($request->all());
        return redirect()->route('tabelGuru');
    }
}