<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use Illuminate\Http\Request;

class KelasController extends Controller
{
    // Tampilkan semua Kelas
    public function index()
    {
        $kelas = Kelas::all();
        return view('kelas.index', compact('kelas'));
    }

    public function create()
    {
        return view('kelas.create');
    }

    // Simpan kelas baru
    public function store(Request $request)
    {
        $request->validate([
            'nama_kelas' => 'required|string|max:255',
            'kode_kelas' => 'required|integer|unique:kelas,kode_kelas',
        ]);

        kelas::create([
            'nama_kelas' => $request->nama_kelas,
            'kode_kelas' => $request->kode_kelas,
        ]);

        return redirect()->route('kelas.index')->with('success', 'kelas berhasil ditambahkan');
    }



    // Tampilkan kelas berdasarkan ID
    public function show($id)
    {
        $kelas = kelas::findOrFail($id);
        return response()->json($kelas);
    }

    // Update kelas
    public function update(Request $request, $id)
    {
        $kelas = kelas::findOrFail($id);

        $request->validate([
            'nama_kelas' => 'required|string|max:255',
            'kode_kelas' => 'required|string|max:10',
        ]);

        $kelas = kelas::findOrFail($id);
        $kelas->nama_kelas = $request->nama_kelas;
        $kelas->kode_kelas = $request->kode_kelas;
        $kelas->save();

        return redirect()->route('kelas.index')->with('success', 'kelas berhasil diubah');
    }

    public function edit($id)
    {
        $kelas = kelas::findOrFail($id);
        return view('kelas.edit', compact('kelas'));
    }


    // Hapus kelas
    public function destroy($id)
    {
        $kelas = kelas::findOrFail($id);
        $kelas->delete();

        return redirect()->route('kelas.index')->with('success', 'kelas berhasil dihapus');
    }
}
