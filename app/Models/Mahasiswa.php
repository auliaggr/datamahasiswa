<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    use HasFactory;

    protected $table = 'mahasiswas';
    protected $primaryKey = 'id_mahasiswa';
    public $incrementing = true; // karena NIM bukan auto increment
    protected $keyType = 'int'; // NIM berupa string

    protected $fillable = [
        'nim',
        'nama',
        'jenis_kelamin',
        'prodi_id',
        'kelas_id',
    ];

    // Relasi ke Prodi
    public function prodi()
    {
        return $this->belongsTo(Prodi::class, 'prodi_id', 'id_prodi');
    }

    // Relasi ke Kelas
    public function kelas()
    {
        return $this->belongsTo(Kelas::class, 'kelas_id', 'id_kelas');
    }
}
