<?php

namespace App\Http\Controllers;

use App\Models\Prodi;
use Illuminate\Http\Request;

class ProdiController extends Controller
{
    // Tampilkan semua Prodi
    public function index()
    {
        $prodi = Prodi::all();
        return view('prodi.index', compact('prodi'));
    }

    public function create()
    {
        return view('prodi.create');
    }

    // Simpan Prodi baru
    public function store(Request $request)
    {
        $request->validate([
            'nama_prodi' => 'required|string|max:255',
            'kode_prodi' => 'required|string|max:10|unique:prodis,kode_prodi',
        ]);

        Prodi::create([
            'nama_prodi' => $request->nama_prodi,
            'kode_prodi' => $request->kode_prodi,
        ]);

        return redirect()->route('prodi.index')->with('success', 'Prodi berhasil ditambahkan');
    }



    // Tampilkan Prodi berdasarkan ID
    public function show($id)
    {
        $prodi = Prodi::findOrFail($id);
        return response()->json($prodi);
    }

    // Update Prodi
    public function update(Request $request, $id)
    {
        $prodi = Prodi::findOrFail($id);

        $request->validate([
            'nama_prodi' => 'required|string|max:255',
            'kode_prodi' => 'required|string|max:10',
        ]);

        $prodi = Prodi::findOrFail($id);
        $prodi->nama_prodi = $request->nama_prodi;
        $prodi->kode_prodi = $request->kode_prodi;
        $prodi->save();

        return redirect()->route('prodi.index')->with('success', 'Prodi berhasil diubah');
    }

    public function edit($id)
    {
        $prodi = Prodi::findOrFail($id);
        return view('prodi.edit', compact('prodi'));
    }


    // Hapus Prodi
    public function destroy($id)
    {
        $prodi = Prodi::findOrFail($id);
        $prodi->delete();

        return redirect()->route('prodi.index')->with('success', 'Prodi berhasil dihapus');
    }
}
