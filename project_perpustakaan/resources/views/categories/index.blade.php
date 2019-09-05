@extends('categories.admintemplate')
@section('title', 'Categories Page')

@section('container')

<div class="container mb-5">
    <div class="row">
        <div class="col-10 ">
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nama Kategori</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($categories as $ct)
                    <tr>
                        <th scope="row">{{$loop->iteration}}</th>
                        <td>{{$ct->namaKategori}}</td>
                        <td>
                            <!-- <a href="/categories/{{$ct->id}}/edit" class="btn btn-primary">Edit</a> -->
                            <form action="/categories/{{$ct->id}}" method="post" class="display inline">
                                @method('delete')
                                @csrf
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection