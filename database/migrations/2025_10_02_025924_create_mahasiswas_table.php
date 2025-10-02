<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('mahasiswas', function (Blueprint $table) {
            $table->id('id_mahasiswa')->primary();
            $table->string('nim', 11)->unique();;
            $table->string('nama', 255);
            $table->enum('jenis_kelamin', ['L', 'P']); // Lebih aman pakai enum biar konsisten
            $table->unsignedBigInteger('prodi_id'); // FK ke prodis
            $table->unsignedBigInteger('kelas_id'); // FK ke kelas
            $table->timestamps();

            // Foreign Keys
            $table->foreign('prodi_id')->references('id_prodi')->on('prodis')->onDelete('cascade');
            $table->foreign('kelas_id')->references('id_kelas')->on('kelas')->onDelete('cascade');
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mahasiswas');
    }
};
