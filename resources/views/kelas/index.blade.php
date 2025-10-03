<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Data Kelas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="/docs/5.3/assets/brand/bootstrap-logo.svg" alt="" width="30" height="24">Data Mahasiswa
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
                    <li class="nav-item active">
                        <a class="nav-link" aria-current="page" href="{{ route('kelas.index') }}">Kelas</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container">
        <div class="text-center">
            <a href="/kelas/create" class="btn btn-dark m-5">Tambah Data</a>
        </div>
        <table class="table table-bordered text-center">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama Kelas</th>
                    <th scope="col">Kode Kelas</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse($kelas as $kls)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $kls->nama_kelas }}</td>
                        <td>{{ $kls->kode_kelas }}</td>
                        <td>
                            <a href="{{ route('kelas.edit', $kls->id_kelas) }}" class="btn btn-warning btn-sm">Edit</a>
                            <form action="{{ route('kelas.destroy', $kls->id_kelas) }}" method="POST"
                                style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm"
                                    onclick="return confirm('Yakin hapus data ini?')">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="2" class="text-center">Data kelas belum ada</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous">
    </script>
</body>

</html>
