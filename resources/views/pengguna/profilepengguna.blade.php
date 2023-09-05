@extends('layout.pengguna')

@section('container')
    @if (\Session::has('update'))
        <div class="alert alert-success alert-dismissible fade show">
            {!! \Session::get('update') !!}
        </div>
    @endif

    @if (\Session::has('gagal'))
        <div class="alert alert-danger alert-dismissible fade show">
            {!! \Session::get('gagal') !!}
        </div>
    @endif

    <div class="container-xl px-4 mt-4">
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
                            @csrf
                            <div class="mb-3">
                                <label class="small mb-1" for="inputUsername">Nama Lengkap</label>
                                <input class="form-control" id="inputUsername" type="text"
                                    placeholder="{{ $c_NamaUser }}" name="nama" value={{ $c_NamaUser }}>
                            </div>
                            <div class="mb-3">
                                <label class="small mb-1" for="inputEmailAddress">Email address</label>
                                <input class="form-control" id="inputEmailAddress" type="email"
                                    placeholder="{{ $c_EmailUser }}" name="email"value={{ $c_EmailUser }}>
                            </div>
                            <div class="mb-3">
                                <label class="small mb-1" for="inputEmailAddress">Gender</label>
                                <select class="form-select small mb-1" aria-label="Default select example"
                                    name="jeniskelamin" value={{ $c_JenisKelaminUser }}>
                                    <option selected>{{ $c_JenisKelaminUser }}</option>
                                    <option value="Laki-laki">Laki-laki</option>
                                    <option value="Perempuan">Perempuan</option>
                                </select>
                            </div>
                            <button class="btn btn-primary float-end" type="submit">Save changes</button>
                        </form>
                    </div>
                </div>

                <div class="card mb-4">
                    <div class="card-header">Pengaturan Password</div>
                    <div class="card-body">
                        <form action="/editprofilepengguna" method="post">
                            @csrf
                            <div class="row gx-3 mb-3">
                                <div class="col-md-6">
                                    <label class="small mb-1" for="inputFirstName">Password Lama</label>
                                    <input class="form-control" id="inputFirstName" type="password" name="passwordlama">
                                </div>
                                <div class="col-md-6">
                                    <label class="small mb-1" for="inputLastName">Password Baru</label>
                                    <input class="form-control" id="inputLastName" type="password" name="passwordbaru">
                                </div>
                            </div>
                            <button class="btn btn-primary float-end" type="submit">Save changes</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
