@extends('layouts.user')

@section('title', 'Profil')

@section('content')
    <ul>
        @foreach($profil as $p)
            <li>{{"Nama : ".$p->name. ' | E-mail : ' .$p->email. " | Phone Number : ".$p->phone}}</li>
        @endforeach
    </ul>
    <!-- <table>
        <thead>
            <tr>
                <th>Nama</th>
                <th>Email</th>
                <th>Phone</th>
            </tr>
        </thead>
        <tbody>
            @foreach($profil as $p)
                <tr>
                    <td>{{$p->name}}</td>
                    <td>{{$p->email}}</td>
                    <td>{{$p->phone}}</td>
                </tr>
            @endforeach
        </tbody>
    </table> -->
@endsection