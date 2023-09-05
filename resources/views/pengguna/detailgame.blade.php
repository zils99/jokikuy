@extends('layout.pengguna')

@section('container')
    <div class="isidetail container-xl px-3 mt-4">
        <div class="row">
            <div class="col-xl-3">
                <!-- Profile picture card-->
                <div class="gambargame mb-4">
                    <div class="card-body text-center">
                        <!-- Profile picture image-->
                        <img class="imggame" src="{{ asset('img/' . $datagame['c_GambarGame']) }}" alt="">
                        <!-- Profile picture help block-->
                        <div class="small font-italic text-muted mb-4"></div>
                    </div>
                </div>
            </div>
            <div class="col-xl-9">
                <div class="card mb-4">
                    <div class="card-header">{{ $datagame->c_NamaGame }}</div>
                    <div class="card-body">
                        <p class="deskripsigame">
                            {{ $datagame['c_DeskripsiGame'] }}
                        </p>
                        <button class="btn btn-primary float-end" type="button">Buat Kontrak Sekarang!</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="isidetail container-xl px-3 mt-4">
        <div class="row">
            <div class="col-xl-3">
            </div>
            <div class="col-xl-9">
                <div class="card mb-4">
                    <div class="card-header">Apa aja yang dapat dikontrakkan?</div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-xl-4">
                                <div class="card sm-4">
                                    <div class="card">
                                        <img src="http://bootdey.com/img/Content/avatar/avatar1.png"
                                            class="imgdetail mx-auto mt-4 mb-2" alt="...">
                                        <div class="card-body">
                                            <h5 class="card-title">Mora</h5>
                                            <p class="card-text">Kalian kekurangan Mora? Kami bisa mencarinya untuk
                                                kalian.
                                                Tinggal
                                                duduk manis saja dan kami akan menyelesaikan secepatnya</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4">
                                <div class="card sm-4">
                                    <img src="http://bootdey.com/img/Content/avatar/avatar1.png"
                                        class="imgdetail mx-auto mt-4 mb-2" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">Card title</h5>
                                        <p class="card-text">Some quick example text to build on the card title and
                                            make
                                            up the
                                            bulk
                                            of the card's content.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4">
                                <div class="card sm-4">
                                    <div class="card">
                                        <img src="http://bootdey.com/img/Content/avatar/avatar1.png"
                                            class="imgdetail mx-auto mt-4 mb-2" alt="...">
                                        <div class="card-body">
                                            <h5 class="card-title">Card title</h5>
                                            <p class="card-text">Some quick example text to build on the card title and
                                                make
                                                up the
                                                bulk
                                                of the card's content.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
