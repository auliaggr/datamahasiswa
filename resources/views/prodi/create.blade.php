<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tambah Data Prodi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="text-center m-5">
            <h2>Tambah Data Program Studi</h2>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-6 col-md-6 col-sm-6">
                <form action="{{ route('prodi.store') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="nama_prodi" class="form-label">Nama Prodi</label>
                        <input type="text" class="form-control" id="nama_prodi" name="nama_prodi" placeholder="Cth: Teknologi Rekayasa Perangkat Lunak">
                    </div>
                    <div class="mb-3">
                        <label for="kode_prodi" class="form-label">Kode Prodi</label>
                        <input type="text" class="form-control" id="kode_prodi" name="kode_prodi" placeholder="Cth: TPL">
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
