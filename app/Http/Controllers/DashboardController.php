<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use App\Models\Prodi;
use App\Models\Kelas;

class DashboardController extends Controller
{
    public function index()
    {
        // Hitung total mahasiswa
        $totalMahasiswa = Mahasiswa::count();
        $totalProdi = Prodi::count();
        $totalKelas = Kelas::count();

        // Kirim ke welcome.blade
        return view('welcome', compact('totalMahasiswa', 'totalProdi', 'totalKelas'));
    }
}

