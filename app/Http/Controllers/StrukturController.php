<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Struktur;

class StrukturController extends Controller
{
    public function index()
    {
        $strukturs = Struktur::all();
        return view('struktur.index', compact('strukturs'));
    }

    public function create()
    {
        return view('struktur.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'foto' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'nama' => 'required|string|max:255',
            'jabatan' => 'required|string|max:255',
        ]);

        $struktur = new Struktur();

        if ($request->hasFile('foto')) {
            $imageName = time().'.'.$request->foto->extension();  
            $request->foto->move(public_path('images'), $imageName);
            $struktur->foto = $imageName;
        }

        $struktur->nama = $request->nama;
        $struktur->jabatan = $request->jabatan;
        $struktur->save();

        return redirect()->route('struktur.index')->with('success', 'Struktur berhasil ditambahkan.');
    }

    public function show($id)
    {
        $struktur = Struktur::find($id);
        return view('struktur.show', compact('struktur'));
    }

    public function edit($id)
    {
        $struktur = Struktur::find($id);
        return view('struktur.edit', compact('struktur'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'foto' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'nama' => 'required|string|max:255',
            'jabatan' => 'required|string|max:255',
        ]);

        $struktur = Struktur::find($id);

        if ($request->hasFile('foto')) {
            $imageName = time().'.'.$request->foto->extension();  
            $request->foto->move(public_path('images'), $imageName);
            $struktur->foto = $imageName;
        }

        $struktur->nama = $request->nama;
        $struktur->jabatan = $request->jabatan;
        $struktur->save();

        return redirect()->route('struktur.index')->with('success', 'Struktur berhasil diupdate.');
    }

    public function destroy($id)
    {
        $struktur = Struktur::find($id);
        $struktur->delete();

        return redirect()->route('struktur.index')->with('success', 'Struktur berhasil dihapus.');
    }
}
