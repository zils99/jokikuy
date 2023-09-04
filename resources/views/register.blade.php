<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="css/login.css">
    <title>Register</title>
</head>

<body>
    <div class="container-fluid">
        <form class="formregister mx-auto" action="/register" method="post">
            @csrf
            <h4 class="text-center">Register</h4>
            <div class="row">
                <div class="col">
                    <div class="mb-3 mt-3">
                        <label for="Nama" class="form-label">Username</label>
                        <input type="text" class="form-control" name="c_NamaUser"
                            class=" @error('Username') is-invalid @enderror">
                        @error('Username')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="Password" class="form-label">Password</label>
                        <input type="password" class="form-control" name="Password">
                    </div>
                    <div class="mb-3">
                        <label for="Password" class="form-label">Jenis Kelamin</label>
                        <div class="col-sm">
                            <input type="radio" id="laki-laki" name="jeniskelamin" value="laki-laki">
                            <label for="laki-laki">Laki-laki</label>
                            <input type="radio" id="perempuan" name="jeniskelamin" value="perempuan">
                            <label for="perempuan">Perempuan</label>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="mb-3 mt-3">
                        <label for="Email" class="form-label">Email</label>
                        <input type="Email" class="form-control" name="c_EmailUser">
                    </div>
                    <div class="mb-3">
                        <label for="Password" class="form-label">Re-Password</label>
                        <input type="password" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="Role" class="form-label">Role Pendaftar</label>
                        <div class="col-sm">
                            <input type="radio" id="penjoki" name="rolependaftar" value="penjoki">
                            <label for="penjoki">Penjoki</label>
                            <input type="radio" id="pengguna" name="rolependaftar" value="pengguna">
                            <label for="pengguna">Pengguna</label>
                        </div>
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-primary mt-3 mb-3">Daftar Sekarang!</button>
            <small>Sudah punya akun? <a href="/login">Login Sekarang!</a></small>
        </form>
    </div>
</body>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
    integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"
    integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous">
</script>

<script></script>

</html>
