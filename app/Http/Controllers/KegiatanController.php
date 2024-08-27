<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kegiatan;

class KegiatanController extends Controller
{
    public function index()
    {
        $kegiatans = Kegiatan::all();
        return view('kegiatan.index', compact('kegiatans'));
    }

    public function create()
    {
        return view('kegiatan.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'media' => 'required|file|mimes:jpeg,png,jpg,gif,svg,mp4,mov,ogg|max:20480',
            'keterangan' => 'required|string',
            'hari' => 'required|string',
            'tanggal' => 'required|integer|min:1|max:31',
            'bulan' => 'required|integer|min:1|max:12',
            'tahun' => 'required|integer|min:1900|max:' . date('Y'),
        ]);

        $mediaName = time().'.'.$request->media->extension();  
        $request->media->move(public_path('media'), $mediaName);

        Kegiatan::create([
            'media' => $mediaName,
            'keterangan' => $request->keterangan,
            'hari' => $request->hari,
            'tanggal' => $request->tanggal,
            'bulan' => $request->bulan,
            'tahun' => $request->tahun,
        ]);

        return redirect()->route('kegiatan.index')->with('success', 'Kegiatan berhasil ditambahkan.');
    }

    public function show(Kegiatan $kegiatan)
    {
        return view('kegiatan.show', compact('kegiatan'));
    }

    public function edit(Kegiatan $kegiatan)
    {
        return view('kegiatan.edit', compact('kegiatan'));
    }

    public function update(Request $request, Kegiatan $kegiatan)
    {
        $request->validate([
            'media' => 'nullable|file|mimes:jpeg,png,jpg,gif,svg,mp4,mov,ogg|max:20480',
            'keterangan' => 'required|string',
            'hari' => 'required|string',
            'tanggal' => 'required|integer|min:1|max:31',
            'bulan' => 'required|integer|min:1|max:12',
            'tahun' => 'required|integer|min:1900|max:' . date('Y'),
        ]);

        if ($request->hasFile('media')) {
            $mediaName = time().'.'.$request->media->extension();  
            $request->media->move(public_path('media'), $mediaName);
            $kegiatan->media = $mediaName;
        }

        $kegiatan->keterangan = $request->keterangan;
        $kegiatan->hari = $request->hari;
        $kegiatan->tanggal = $request->tanggal;
        $kegiatan->bulan = $request->bulan;
        $kegiatan->tahun = $request->tahun;
        $kegiatan->save();

        return redirect()->route('kegiatan.index')->with('success', 'Kegiatan berhasil diupdate.');
    }

    public function destroy(Kegiatan $kegiatan)
    {
        $kegiatan->delete();

        return redirect()->route('kegiatan.index')->with('success', 'Kegiatan berhasil dihapus.');
    }
}
