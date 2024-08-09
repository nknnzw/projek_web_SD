<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Extra;

use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;
use Illuminate\Support\Facades\Storage;

class ExtraController extends Controller
{
    public function index()
    {
        $extras = Extra::all();
        return view('extra.index', compact('extras'));
    }
    
    public function create()
    {
        return view('extra.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'foto' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'nama' => 'required|string|max:255',
            'keterangan' => 'required|string',
            'hari' => 'required|string|max:255',
        ]);

        $imageName = time().'.'.$request->foto->extension();  
        $request->foto->move(public_path('images'), $imageName);

        $extra = new Extra();
        $extra->foto = $imageName;
        $extra->nama = $request->nama;
        $extra->keterangan = $request->keterangan;
        $extra->hari = $request->hari;
        $extra->save();

        return redirect()->route('extra.index')->with('success', 'Ekstra berhasil ditambahkan.');
    }

    public function show($id)
    {
        $extra = Extra::find($id);
        return view('extra.show', compact('extra'));
    }

    public function edit($id)
    {
        $extra = Extra::find($id);
        return view('extra.edit', compact('extra'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'foto' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'nama' => 'required|string|max:255',
            'keterangan' => 'required|string',
            'hari' => 'required|string|max:255',
        ]);

        $extra = Extra::find($id);

        if ($request->hasFile('foto')) {
            $imageName = time().'.'.$request->foto->extension();  
            $request->foto->move(public_path('images'), $imageName);
            $extra->foto = $imageName;
        }

        $extra->nama = $request->nama;
        $extra->keterangan = $request->keterangan;
        $extra->hari = $request->hari;
        $extra->save();

        return redirect()->route('extra.index')->with('success', 'Ekstra berhasil diupdate.');
    }

    public function destroy($id)
    {
        $extra = Extra::find($id);
        $extra->delete();

        return redirect()->route('extra.index')->with('success', 'Ekstra berhasil dihapus.');
    }
}
