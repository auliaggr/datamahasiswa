<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use App\Models\Prodi;
use App\Models\Kelas;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    // Tampilkan semua Mahasiswa
    public function index()
    {
        $mahasiswa = Mahasiswa::with(['prodi', 'kelas'])->get();
        return view('mahasiswa.index', compact('mahasiswa'));
    }

    // Form tambah Mahasiswa
    public function create()
    {
        $prodis = Prodi::all();
        $kelas = Kelas::all();
        return view('mahasiswa.create', compact('prodis', 'kelas'));
    }

    // Simpan Mahasiswa baru
    public function store(Request $request)
    {
        $request->validate([
            'nim' => 'required|string|max:11|unique:mahasiswas,nim',
            'nama' => 'required|string|max:255',
            'jenis_kelamin' => 'required|in:L,P', // L = Laki-laki, P = Perempuan
            'prodi_id' => 'required|exists:prodis,id_prodi',
            'kelas_id' => 'required|exists:kelas,id_kelas',
        ]);

        Mahasiswa::create($request->all());

        return redirect()->route('mahasiswa.index')->with('success', 'Mahasiswa berhasil ditambahkan');
    }

    // Form edit Mahasiswa
    public function edit($id_mahasiswa)
    {
        $mahasiswa = Mahasiswa::findOrFail($id_mahasiswa);
        $prodis = Prodi::all();
        $kelas = Kelas::all();
        return view('mahasiswa.edit', compact('mahasiswa', 'prodis', 'kelas'));
    }

    // Update Mahasiswa
    public function update(Request $request, $id_mahasiswa)
    {
        $mahasiswa = Mahasiswa::findOrFail($id_mahasiswa);

        $request->validate([
            'nim' => 'required|string|max:11',
            'nama' => 'required|string|max:255',
            'jenis_kelamin' => 'required|in:L,P',
            'prodi_id' => 'required|exists:prodis,id_prodi',
            'kelas_id' => 'required|exists:kelas,id_kelas',
        ]);

        $mahasiswa = Mahasiswa::findOrFail($id_mahasiswa);
        $mahasiswa->nim = $request->nim;
        $mahasiswa->nama = $request->nama;
        $mahasiswa->jenis_kelamin = $request->jenis_kelamin;
        $mahasiswa->prodi_id = $request->prodi_id;
        $mahasiswa->kelas_id = $request->kelas_id;
        $mahasiswa->save();

        return redirect()->route('mahasiswa.index')->with('success', 'Mahasiswa berhasil diubah');
    }

    // Hapus Mahasiswa
    public function destroy($id_mahasiswa)
    {
        $mahasiswa = Mahasiswa::findOrFail($id_mahasiswa);
        $mahasiswa->delete();

        return redirect()->route('mahasiswa.index')->with('success', 'Mahasiswa berhasil dihapus');
    }
}
