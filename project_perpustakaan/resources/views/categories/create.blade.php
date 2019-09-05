@extends('categories.admintemplate')
@section('title', 'Categories Page')

@section('container')
<div class="container">
    <div class="row">
        <div class="col-md-4 ">
            <form method="post" action="/categories">
                @csrf
                <div class=" form-group">
                    <label for="namaKategori">Nama Kategori</label>
                    <input type="text" class="form-control @error('namaKategori') is-invalid @enderror" id="namaKategori" placeholder="Nama Kategori" name="namaKategori" value=" {{old('namaKategori')}} ">
                    @error('namaKategori')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary">Save</button>
            </form>
        </div>
    </div>
</div>
@endsection