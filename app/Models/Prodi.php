<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prodi extends Model
{
    use HasFactory;

    protected $table = 'prodis';
    protected $primaryKey = 'id_prodi';
    public $incrementing = true; // karena PK bukan auto increment
    protected $keyType = 'int';

    protected $fillable = [
        'nama_prodi',
        'kode_prodi',
    ];

    // Relasi ke Kelas
    public function kelas()
    {
        return $this->hasMany(Kelas::class, 'prodi_id', 'id_prodi', 'kode_prodi');
    }

    // Relasi ke Mahasiswa
    public function mahasiswa()
    {
        return $this->hasMany(Prodi::class, 'prodi_id', 'id_prodi', 'kode_prodi');
    }
}