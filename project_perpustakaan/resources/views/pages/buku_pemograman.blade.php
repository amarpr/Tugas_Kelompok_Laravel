@extends('layouts.user')

@section('title', 'Buku Pemrograman')

@section('content')
    @php
        $datas = [
            [
                "image" => "photo buku",
                "name" => "Deception Point",
                "pengarang" => "Dan Brown"
            ],[
                "image" => "photo buku",
                "name" => "Deception Point",
                "pengarang" => "Dan Brown"
            ],[
                "image" => "photo buku",
                "name" => "Deception Point",
                "pengarang" => "Dan Brown"
            ],[
                "image" => "photo buku",
                "name" => "Deception Point",
                "pengarang" => "Dan Brown"
            ]
        ];
    @endphp
    <div class="container">
        <h4 class="my-lg-3">Buku Pemrograman</h4>
        <table class="table table-borderless table-striped table-hover">
            <thead class="thead-dark">
                <th>buku</th>
                <th>Judul</th>
                <th>Pengarang</th>
                <th>Action</th>
            </thead>
            <tbody>
                @foreach ($datas as $data)
                    <tr>
                        <td style="width:15%">
                        <div class="card">
                            <img src="{{ asset('/img/deception-point.jpg') }}" class="card-img-top" alt="{{ $data['image'] }}" style="width:100%">
                        </div> 
                        </td>
                        <td class="align-middle"> {{ $data['name'] }}</td>
                        <td class="align-middle"> {{ $data['pengarang'] }}</td>
                        <td class="align-middle"> <button class="btn btn-primary"> details </button> </td>
                    </tr>
                @endforeach
                <tr>
                </tr>
            </tbody>
        </table>
    </div>    
@endsection