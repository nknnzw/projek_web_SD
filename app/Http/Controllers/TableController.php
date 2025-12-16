<?php

namespace App\Http\Controllers;

use App\Models\TabelGuru;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class TableController extends Controller
{
    
    public function index(): View
    {
        $posts = TabelGuru::all();
        return view('tabelGuru', compact('posts'));
    }

    
    public function create(): View
    {
        return view('create-guru');
    }

    
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'foto' => 'required|image|mimes:jpeg,jpg,png|max:2048',
            'nama' => 'required',
            'nip' => 'required',
            'tanggal_lahir' => 'required',
            'jenis_kelamin' => 'required',
            'jabatan' => 'required',
            'status_kepegawaian' => 'required',
        ]);

        $image = $request->file('foto');
        $imageName = time() . '.' . $image->extension();

      
        $image->move(public_path('images'), $imageName);

        TabelGuru::create([
            'foto' => $imageName,
            'nama' => $request->nama,
            'nip' => $request->nip,
            'tanggal_lahir' => $request->tanggal_lahir,
            'jenis_kelamin' => $request->jenis_kelamin,
            'jabatan' => $request->jabatan,
            'status_kepegawaian' => $request->status_kepegawaian,
        ]);

        return redirect()->route('tabelGuru.index')
            ->with('success', 'Data guru berhasil disimpan!');
    }

  
    public function edit($id): View
    {
        $post = TabelGuru::findOrFail($id);
        return view('update-guru', compact('post'));
    }

   
    public function update(Request $request, $id): RedirectResponse
    {
        $request->validate([
            'foto' => 'image|mimes:jpeg,jpg,png|max:2048',
            'nama' => 'required',
            'nip' => 'required',
            'tanggal_lahir' => 'required',
            'jenis_kelamin' => 'required',
            'jabatan' => 'required',
            'status_kepegawaian' => 'required',
        ]);

        $post = TabelGuru::findOrFail($id);

        if ($request->hasFile('foto')) {
            $image = $request->file('foto');
            $imageName = time() . '.' . $image->extension();

            
            $image->move(public_path('images'), $imageName);

            
            if ($post->foto && file_exists(public_path('images/' . $post->foto))) {
                unlink(public_path('images/' . $post->foto));
            }

            $post->foto = $imageName;
        }

        $post->update([
            'nama' => $request->nama,
            'nip' => $request->nip,
            'tanggal_lahir' => $request->tanggal_lahir,
            'jenis_kelamin' => $request->jenis_kelamin,
            'jabatan' => $request->jabatan,
            'status_kepegawaian' => $request->status_kepegawaian,
        ]);

        return redirect()->route('tabelGuru.index')
            ->with('success', 'Data guru berhasil diperbarui!');
    }

    
    public function destroy($id): RedirectResponse
    {
        $post = TabelGuru::findOrFail($id);

        if ($post->foto && file_exists(public_path('images/' . $post->foto))) {
            unlink(public_path('images/' . $post->foto));
        }

        $post->delete();

        return redirect()->route('tabelGuru.index')
            ->with('success', 'Data guru berhasil dihapus!');
    }
}
