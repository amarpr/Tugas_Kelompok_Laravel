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
        <h4 class="my-lg-3">Comic</h4>
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
                        <td class="align-middle"> <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Detail</button></td>
                    </tr>
                @endforeach
                <tr>
                </tr>
            </tbody>
        </table>
    </div>
<div class="modal fade bd-example-modal-xl" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true" id="exampleModal">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
        <div class="row">
            <div class="col-md-5">
            <div class="card my-5 mx-3">
                <img src="https://ecs7.tokopedia.net/img/cache/700/product-1/2016/2/2/7332890/7332890_7b97151a-c415-4bfc-b35a-914e94badc54.jpg" style="max-width:450px" alt="gambar-sampul-buku">
            </div>
            </div>
            <div class="md-6 my-5" style="width:40rem">
            <table class="table">
                <tbody>
                <tr>
                    <th scope="row">NAMA BUKU:</th>
                    <td>Hujan</td>
                </tr>
                <tr>
                    <th scope="row">TIPE BUKU:</th>
                    <td>Novel</td>
                </tr>
                <tr>
                    <th scope="row">PENULIS:</th>
                    <td>Tere Liye</td>
                </tr>
                <tr>
                    <th scope="row">PENERBIT:</th>
                    <td>Gramedia</td>
                </tr>
                <tr>
                    <th scope="row">TAHUN TERBIT:</th>
                    <td>January 28th 201 6</td>
                </tr>
                </tbody>
            </table>
            <hr>
            <div class="resensi text-justifymas">
            <h4>Resensi
            </h4>
                <p>Novel ini secara mengejutkan menceritakan latar dunia pada tahun 2050-an. Terdapat seorang gadis bernama Lail yang hidup pada masa itu dengan segala kemajuan tekonologinya dan gentingnya isu-isu mengenai lingkungan. Lail berusaha untuk menghapus seluruh kenangannya yang menyakitkan dengan sebuah alat canggih yang ada di zaman tersebut. Syarat agar alat tersebut bisa bekerja adalah dengan menceritakan kenangan-kenganan selama hidupnya tanpa ada satu pun yang ditutup-tutupi.
                <br>
                Lail kemudian bercerita dimulai dari masa kecilnya. Saat itu Lail terburu-buru saat hari pertama masuk sekolah. Bersama ibutnya, ia tidak henti-hentinya menyuruh untuk bergegas supaya tidak ketinggalan kereta. Namun saat perjalanan di kereta, gempa bumi dahsyat terjadi dan mengguncang kota mereka. Semuanya hancur berantakan dan banyak korban berjatuhan termasuk Ibunya Lail. Beruntung Lail selamat karena ditolong oleh seorang anak laki-laki yang memegang tangannya saat akan jatuh ke lorong kereta. Anak laki-laki tersebut bernama Esok.
                <br>
                Tidak hanya sampai disitu. Lail merasa makin menderita setelah mendengar kabar bahwa pulau tempat ayahnya bekerja hancur diterjang tsunami. Lail pun menjadi seorang anak yatim piatu. Setelah kejadian bencana tersebut, Lail tinggal di tempat pengungsian yang dibuat oleh pemerintah kota. Di tempat pengungsian ini, Lail selalu bersama dengan Esok hingga muncul persahabatan di antara mereka dan kelak akan berubah menjadi sebuah cinta.
                <br>
                Setelah situasi kota sudah kembali normal, Lail ditampung di panti asuhan. Di sini Lail memiliki teman yang bernama Mariyam yang kelak akan menjadi relawan yang membanggakan bersama-sama. Esok sendiri diasuh oleh walikota. Karena kecerdasannya, Esok mendapatkan beasiswa kuliah ke luar negeri dan berhasil menciptakan teknologi yang mampu menyelematkan bumi dari kepunahan.
                </p>
            </div>
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
        </div>
    </div>
</div>     
@endsection