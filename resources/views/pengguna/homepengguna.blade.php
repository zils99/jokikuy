@extends('layout.pengguna')

@section('container')
    <div class="isikonten">
        <h1>Kontrak Game {{ $datagame['user']->c_NamaUser }}</h1>
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

        <div class="row mb-5">
            @foreach ($datagame['game'] as $game)
                <div class="col-sm-3 mb-5">
                    <div class="card">
                        <img src="{{ asset('img/Logo/' . $game['c_GambarGame']) }}" class="homegame" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">{{ $game['c_NamaGame'] }}</h5>
                            <p> Genre Game : </p>
                            <a href="#" class="btn btn-primary float-end">Detail Game</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
