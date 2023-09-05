@extends('layout.pengguna')

@section('container')
    <h1>Hasil pencarian {{ $datagame['search'] }}</h1>

    <div class="row mb-5">
        @foreach ($datagame['game'] as $game)
            <div class="col-sm-3">
                <div class="card " style="width: 18rem;">
                    <img src="{{ asset('img/' . $game['c_GambarGame']) }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">{{ $game['c_NamaGame'] }}</h5>
                        <a href="{{ url('detailgame') }}/{{ $game['c_IdGame'] }}" class="btn btn-primary float-end">Buat
                            Kontrak!</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
