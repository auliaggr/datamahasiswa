<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Data Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">
                <img src="{{ asset('img/logo.png') }}" class="fw-bold" alt="" width="30" height="30"> IPB UNIVERSITY
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="{{ route('mahasiswa.index') }}">Mahasiswa</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="{{ route('prodi.index') }}">Program Studi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="{{ route('kelas.index') }}">Kelas</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 cold-md-12 col-sm-12">
                <div class="text-center my-5 py-5">
                    <h2>SELAMAT DATANG DI SISTEM INFORMASI DATA MAHASISWA</h2>
                </div>
            </div>
        </div>
        <div class="row my-3">
            <div class="col-lg-4 cold-md-4 col-sm-4">
                <div class="card p-2">
                    <div class="card-body text-center">
                        <h5 class="card-title">TOTAL MAHASISWA</h5>
                        <p class="card-text display-6 fw-bold">{{ $totalMahasiswa }}</p>
                        <a href="{{ route('mahasiswa.index') }}" class="btn btn-dark">Lihat Data</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 cold-md-4 col-sm-4">
                <div class="card p-2">
                    <div class="card-body text-center">
                        <h5 class="card-title">TOTAL PROGRAM STUDI</h5>
                        <p class="card-text display-6 fw-bold">{{ $totalProdi }}</p>
                        <a href="{{ route('prodi.index') }}" class="btn btn-dark">Lihat Data</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 cold-md-4 col-sm-4">
                <div class="card p-2">
                    <div class="card-body text-center">
                        <h5 class="card-title">TOTAL KELAS</h5>
                        <p class="card-text display-6 fw-bold">{{ $totalKelas }}</p>
                        <a href="{{ route('kelas.index') }}" class="btn btn-dark">Lihat Data</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous">
    </script>
</body>

</html>
