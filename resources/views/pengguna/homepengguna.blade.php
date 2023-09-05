@extends('.layout.pengguna')

@section('container')
    <div class="isikonten">
        <h1>Kontrak Game /Nama User/</h1>
        <div class="card mb-3" style="max-width: 540px;">
            <div class="row g-0">
                <div class="col-md-4">
                    <img src="..." class="img-fluid rounded-start" alt="...">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title">Kontrak Genshin Impact</h5>
                        <div class="row">
                            <div class="col">
                                <p class="card-text">Penjoki : </p>
                                <p class="card-text">Target : </p>
                            </div>
                            <div class="col">
                                <p class="card-text">Progress : </p>
                                <p class="card-text">Deadline : </p>
                            </div>
                        </div>
                        <a href=""><button class="btn kontakjoki btn-primary">hubungi penjoki</button></a>
                    </div>
                </div>
            </div>
        </div>

        <h1>Game yang sering dimainkan</h1>

        <div class="row">
            <div class="col-sm-4">
                <div class="card" style="width: 25rem;">
                    <img src="..." class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the
                            card's content.</p>
                        <p>Genre Game : </p>
                        <a href="#" class="btn btn-primary">Buat Kontrak</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card" style="width: 25rem;">
                    <img src="..." class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the
                            card's content.</p>
                        <p>Genre Game : </p>
                        <a href="#" class="btn btn-primary">Buat Kontrak</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card" style="width: 25rem;">
                    <img src="..." class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the
                            card's content.</p>
                        <p>Genre Game : </p>
                        <a href="#" class="btn btn-primary">Buat Kontrak</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
