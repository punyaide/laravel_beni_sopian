<!DOCTYPE html>
<html>
<head>
    <title>Masuk - Sistem Manajemen Rumah Sakit</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"/>
</head>
<body class="bg-light">

<div class="container mt-5">
    <div class="col-md-4 mx-auto">
        <div class="card">
            <div class="card-header text-center">Masuk</div>
            <div class="card-body">

                @if($errors->any())
                    <div class="alert alert-danger">{{ $errors->first() }}</div>
                @endif

                <form method="POST">
                    @csrf
                    <div class="mb-3">
                        <label>Nama Pengguna</label>
                        <input name="username" class="form-control" placeholder="Masukkan nama pengguna"/>
                    </div>

                    <div class="mb-3">
                        <label>Kata Sandi</label>
                        <input type="password" name="password" class="form-control" placeholder="Masukkan kata sandi"/>
                    </div>

                    <button class="btn btn-primary w-100">Masuk</button>
                </form>

            </div>
        </div>
    </div>
</div>

</body>
</html>
