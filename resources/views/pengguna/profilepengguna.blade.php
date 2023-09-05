<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="css/profile.css">
    <title>Profile</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
            <div class="collapse navbar-collapse" id="navbarText">
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
                <span class="collapse navbar-collapse justify-content-end">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" href="#">Kontrak</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="#">Profile</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Logout</a>
                        </li>
                    </ul>
                </span>
            </div>
        </div>
    </nav>

    <div class="container-xl px-4 mt-4">
        <hr class="mt-0 mb-4">
        <div class="row">
            <div class="col-xl-4">
                <!-- Profile picture card-->
                <div class="card mb-4 mb-xl-0">
                    <div class="card-header">Foto Profile</div>
                    <div class="card-body text-center">
                        <!-- Profile picture image-->
                        <img class="img-account-profile rounded-circle mb-2"
                            src="http://bootdey.com/img/Content/avatar/avatar1.png" alt="">
                        <!-- Profile picture help block-->
                        <div class="small font-italic text-muted mb-4"></div>
                        <!-- Profile picture upload button-->
                        <button class="btn btn-primary" type="button">Upload Gambar Baru</button>
                    </div>
                </div>
            </div>
            <div class="col-xl-8">
                <div class="card mb-4">
                    <div class="card-header">Pengaturan Akun</div>
                    <div class="card-body">
                        <form action="/editprofilepengguna" method="post">
                            <div class="mb-3">
                                <label class="small mb-1" for="inputUsername">Nama Lengkap</label>
                                <input class="form-control" id="inputUsername" type="text" placeholder="{{ $c_NamaUser }}" name="nama">
                            </div>
                            <div class="mb-3">
                                <label class="small mb-1" for="inputEmailAddress">Email address</label>
                                <input class="form-control" id="inputEmailAddress" type="email"
                                    placeholder="{{ $c_EmailUser }}" name="email">
                            </div>
                            <div class="mb-3">
                                <label class="small mb-1" for="inputEmailAddress">Gender</label>
                                <select class="form-select small mb-1" aria-label="Default select example">
                                    <option selected>{{ $c_JenisKelaminUser }}</option>
                                    <option value="Laki-laki">Laki-laki</option>
                                    <option value="Perempuan">Perempuan</option>
                                </select>
                            </div>
                            <button class="btn btn-primary float-end" type="button">Save changes</button>
                        </form>
                    </div>
                </div>

                <div class="card mb-4">
                    <div class="card-header">Pengaturan Password</div>
                    <div class="card-body">
                        <form>
                            <div class="row gx-3 mb-3">
                                <div class="col-md-6">
                                    <label class="small mb-1" for="inputFirstName">Password Lama</label>
                                    <input class="form-control" id="inputFirstName" type="password">
                                </div>
                                <div class="col-md-6">
                                    <label class="small mb-1" for="inputLastName">Password Baru</label>
                                    <input class="form-control" id="inputLastName" type="password">
                                </div>
                            </div>
                            <button class="btn btn-primary float-end" type="button">Save changes</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


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
