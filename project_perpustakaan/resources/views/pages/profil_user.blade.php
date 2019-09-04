@extends('layouts.user')

@section('title', 'Profil')

@section('content')
<div class="container">
    <div class="card mt-5">
        <div class="card-header text-center">
            <h5 class="text-info">User Profile</h5>
        </div>
        <div class="card-body">
            <div class="card-image d-flex justify-content-center my-3">
                <img src="http://www.myiconfinder.com/uploads/iconsets/ac7256a56da1fa7c09a699ddec407e7e-human.png"
                    alt="" width="100px">
            </div>
            <table class="table table-bordered table-hover table-striped">
                <tbody>
                    <tr>
                        <td> <strong>Nama</strong> </td>
                        <td>{{ Auth::user()->name }}</td>
                    </tr>
                    <tr>
                        <td> <strong>Nomor Handphone</strong> </td>
                        <td>{{ Auth::user()->phone }}</td>
                    </tr>
                    <tr>
                        <td> <strong>Email</strong> </td>
                        <td>{{ Auth::user()->email }}</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>



@endsection