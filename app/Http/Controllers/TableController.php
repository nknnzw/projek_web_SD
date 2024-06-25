<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\TabelGuru;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;
use Illuminate\Support\Facades\Storage;


class TableController extends Controller
{
    public function index()
    {
        $data['posts'] = TabelGuru::all();        
        return view('tabelGuru' , $data);
    }
    public function create()
    {
        $data['get'] = TabelGuru::all();        
        return view('create-guru' , $data);
    }

    public function store(Request $request): RedirectResponse
    {
        $this->validate($request, [
            'foto'     => 'required|image|mimes:jpeg,jpg,png|max:2048',
            'nama' => 'required',
            'nip' => 'required',
            'tanggal_lahir' => 'required',
            'jenis_kelamin' => 'required',
            'jabatan' => 'required',
            'status_kepegawaian' => 'required',
        ]);

        $image = $request->file('foto');
        $image->storeAs('public/posts', $image->hashName());

        TabelGuru::create([
            'foto'     => $image->hashName(),
            'nama'     => $request->nama,
            'nip'   => $request->nip,
            'tanggal_lahir'   => $request->tanggal_lahir,
            'jenis_kelamin'   => $request->jenis_kelamin,
            'jabatan'   => $request->jabatan,
            'status_kepegawaian'   => $request->status_kepegawaian,
        ]);

        return redirect()->route('tabelGuru.index')->with(['success' => 'Data Berhasil Disimpan!']);
    }

    public function delete(TabelGuru $post)
    {
        $post->delete();
        return redirect()->route('tabelGuru');
    }

    public function destroy($id): RedirectResponse
    {
        $post = TabelGuru::findOrFail($id);

        Storage::delete('public/posts/'. $post->foto);

        $post->delete();

        return redirect()->route('tabelGuru.index')->with(['success' => 'Data Berhasil Dihapus!']);
    }
    
    public function edit(string $id): View
    {
        $post = TabelGuru::findOrFail($id);

        return view('update-guru', compact('post'));
    }

    public function update(Request $request, $id): RedirectResponse
    {
        $this->validate($request, [
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
            $imageName = $image->hashName(); 
            $image->storeAs('public/posts', $imageName);

            if ($post->foto) {
                Storage::delete('public/posts/' . $post->foto);
            }

            $post->update([
                'foto' => $imageName,
                'nama' => $request->nama,
                'nip' => $request->nip,
                'tanggal_lahir' => $request->tanggal_lahir,
                'jenis_kelamin' => $request->jenis_kelamin,
                'jabatan' => $request->jabatan,
                'status_kepegawaian' => $request->status_kepegawaian,
            ]);
        } else {
            $post->update([
                'nama' => $request->nama,
                'nip' => $request->nip,
                'tanggal_lahir' => $request->tanggal_lahir,
                'jenis_kelamin' => $request->jenis_kelamin,
                'jabatan' => $request->jabatan,
                'status_kepegawaian' => $request->status_kepegawaian,
            ]);
        }

        return redirect()->route('tabelGuru.index')->with(['success' => 'Data berhasil diubah!']);
    }


}