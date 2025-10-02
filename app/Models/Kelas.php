<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
    use HasFactory;

    protected $table = 'kelas';
    protected $primaryKey = 'id_kelas';
    public $incrementing = true; // karena PK bukan auto increment
    protected $keyType = 'int';

    protected $fillable = [
        'nama_kelas',
        'kode_kelas',
    ];

    // Relasi ke Kelas
    public function kelas()
    {
        return $this->hasMany(Kelas::class, 'kelas_id', 'id_kelas', 'kode_kelas');
    }

    // Relasi ke Mahasiswa
    public function mahasiswa()
    {
        return $this->hasMany(Mahasiswa::class, 'kelas_id', 'id_kelas', 'kode_kelas');
    }
}