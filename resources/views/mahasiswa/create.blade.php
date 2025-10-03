<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tambah Data Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="text-center m-5">
            <h2>Tambah Data Mahasiswa</h2>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-6 col-md-6 col-sm-6">
                <form action="{{ route('mahasiswa.store') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="nim" class="form-label">NIM</label>
                        <input type="text" class="form-control" id="nim" name="nim" placeholder="Cth: J0403221111">
                    </div>
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama</label>
                        <input type="text" class="form-control" id="nama" name="nama" placeholder="Cth: Ahmad Sahroni">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Jenis Kelamin</label> <br>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="jenis_kelamin" id="laki" value="L"
                                required>
                            <label class="form-check-label" for="laki">Laki-laki</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="jenis_kelamin" id="perempuan" value="P"
                                required>
                            <label class="form-check-label" for="perempuan">Perempuan</label>
                        </div>
                    </div>
        
                    <div class="mb-3">
                        <label for="prodi_id" class="form-label">Program Studi</label>
                        <select class="form-select" id="prodi_id" name="prodi_id" required>
                            <option value="">-- Pilih Prodi --</option>
                            @foreach ($prodis as $prodi)
                                <option value="{{ $prodi->id_prodi }}">{{ $prodi->nama_prodi }}</option>
                            @endforeach
                        </select>
                    </div>
        
                    <div class="mb-3">
                        <label for="kelas_id" class="form-label">Kelas</label>
                        <select class="form-select" id="kelas_id" name="kelas_id" required>
                            <option value="">-- Pilih Kelas --</option>
                            @foreach ($kelas as $kls)
                                <option value="{{ $kls->id_kelas }}">
                                    {{ $kls->nama_kelas }}{{ $kls->kode_kelas }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-dark my-4">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous">
    </script>
</body>

</html>
