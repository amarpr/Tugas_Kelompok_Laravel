@extends('layouts.user')

@section('title', 'Halaman Utama')

@section('content')
    @php
        $datas = [
            [
                "image" => "ini untuk photo",
                "name" => "ini untuk nama",
                "desc" => "ini untuk keterangan",
                "other" => "lain-lain",
                "btn" => "deatil" 
            ],
            [
                "image" => "ini untuk photo",
                "name" => "ini untuk nama",
                "desc" => "ini untuk keterangan",
                "other" => "lain-lain",
                "btn" => "deatil" 
            ],
            [
                "image" => "ini untuk photo",
                "name" => "ini untuk nama",
                "desc" => "ini untuk keterangan",
                "other" => "lain-lain",
                "btn" => "deatil" 
            ],
            [
                "image" => "ini untuk photo",
                "name" => "ini untuk nama",
                "desc" => "ini untuk keterangan",
                "other" => "lain-lain",
                "btn" => "deatil" 
            ]
        ];
    @endphp
    <div class="container">
        <section id="bukuProgramming" class="my-lg-3">
            <h4 class="my-lg-3 text-center">Buku Programming</h4>
            <div class="row">
            @foreach ($datas as $data)
                <div class="col-xl-3 col-lg-3 col-md-6 col-12">
                    <div class="card">
                    <img src="{{ asset('/img/deception-point.jpg') }}" class="card-img-top" alt="{{ $data['image'] }}">
                    <div class="card-body">
                        <h5 class="card-title">{{ $data['name'] }}</h5>
                        <p class="card-text">{{ $data['desc'] }}</p>
                        <p class="card-text">{{ $data['other'] }}</p>
                        <button class="btn btn-primary"> {{ $data['btn'] }} </button>
                    </div>
                    </div>
                </div>
            @endforeach
            </div>
        </section>

        <section id="bukuKomik" class="my-lg-3">
            <h4 class="my-lg-3 text-center">Komik</h4>
            <div class="row">
            @foreach ($datas as $data)
                <div class="col-xl-3 col-lg-3 col-md-6 col-12">
                    <div class="card">
                    <img src="{{ asset('/img/deception-point.jpg') }}" class="card-img-top" alt="{{ $data['image'] }}">
                    <div class="card-body">
                        <h5 class="card-title">{{ $data['name'] }}</h5>
                        <p class="card-text">{{ $data['desc'] }}</p>
                        <p class="card-text">{{ $data['other'] }}</p>
                        <button class="btn btn-primary"> {{ $data['btn'] }} </button>
                    </div>
                    </div>
                </div>
            @endforeach
            </div>
        </section>

        <section id="bukuMajalah" class="my-lg-3">
            <h4 class="my-lg-3 text-center">Majalah</h4>
            <div class="row">
            @foreach ($datas as $data)
                <div class="col-xl-3 col-lg-3 col-md-6 col-12">
                    <div class="card">
                    <img src="{{ asset('/img/deception-point.jpg') }}" class="card-img-top" alt="{{ $data['image'] }}">
                    <div class="card-body">
                        <h5 class="card-title">{{ $data['name'] }}</h5>
                        <p class="card-text">{{ $data['desc'] }}</p>
                        <p class="card-text">{{ $data['other'] }}</p>
                        <button class="btn btn-primary"> {{ $data['btn'] }} </button>
                    </div>
                    </div>
                </div>
            @endforeach
            </div>
        </section>
    </div>
@endsection
