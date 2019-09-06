@extends('layouts.user')

@section('title', 'Profile Us')

@section('content')
    <div class="container">
    <div id="profilePage">
    <h3 class="mt-3"> PROFIL PERPUSTAKAAN AR-RASYID </h3>
    <p> 
        Perpustakaan Ar-Rasyid merupakan perpustakaan berbasis online 
        pertama yang dikerjakan oleh para siswa bootcamp edu-tech di 
        bidang pemrograman full stack web developer. Diawali dari 
        instruktur terbaik kepada para siswa bootcamp untuk membuat 
        sebuah project team menggunakan salah satu frame work ternama 
        saat ini yaitu laravel.
    </p>
    <p>
        Project team ini dimulai dari tanggal 28 agustus 2019 dan Alhamdulillah 
        bisa diselesaikan pada tanggal 6 september 2019 dengan hasil yang sangat 
        memuaskan bagi kami. Banyak pelajaran yang kami dapatkan dari project team ini, 
        yaitu bagaimana kita menjadi leader dalam sebuah team cara komunikasi yang baik 
        serta cara mengatasi segala permasalahan yang ada pada project yang kita kerjakan. Dan kami selalu memprioritaskan agar segala sesuatu yang menjadi permasalah dalam pengerjaan project agar segera berkomunikasi dengan teman-teman satu team atau dengan instuktur langsung.
    </p>
    <p>
        Dan pada setiap kita mulai project kita slalu mengingatkan satu sama lain agar bekerja 
        dengan baik dan semaksimal mungkin dan jangan lupa untuk enjoy di dalam pengerjaan project.
        Project Perpustakaan Ar-Rasyid ini dibangun oleh team kami yaitu, Muhamar, Sundara, Raymond, 
        Rizal M., Aris, dan Hendra yang pastinya mereka sangat ahli dibidangnya masing-masing.
        Dan harapan kita dengan adanya Perpustakaan Ar-Rasyid ini bisa mudah diakses serta bermanfaat 
        bagi orang banyak dalam mengakses informasi buku-buku yang dibutuhkan.
    </p>
    </div>
    
        <div id="teamProject">
            <h3 class="my-3 text-center"> Our Team </h3>
            <div id="fotoTeam" class="row no-gutters justify-content-around">
                <!-- card muhamar -->
                <div class="card mb-3 col-lg-5 col-md-5">
                    <div class="row no-gutters">
                        <div class="col-md-4">
                            <img src="{{ asset('/img/amar.jpg') }}" class="card-img" alt="foto">
                            <h6 class="card-text text-center">Muhamar</h6>                            
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">Team Leader</h5>
                                
                                <p class="card-text">
                                    Memimpin selama pengerjaan project,
                                    mengawasi para anggota team agar project berjalan sebagaimana mesinya.
                                </p>
                                <p class="card-text"><small class="text-muted">edu-tech 2019 &copy;</small></p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end card muhamar -->

                <!-- card raymond -->
                <div class="card mb-3 col-lg-5 col-md-5">
                    <div class="row no-gutters">
                        <div class="col-md-4">
                            <img src="{{ asset('/img/raymond.png') }}" class="card-img" alt="foto">
                            <h6 class="card-text text-center">Raymond</h6>
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">Team Member</h5>
                                
                                <p class="card-text">
                                    Full Stack Developer
                                </p>
                                <p class="card-text"><small class="text-muted">edu-tech 2019 &copy;</small></p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end card raymond -->

                <!-- card sundara-->
                <div class="card mb-3 col-lg-5 col-md-5">
                    <div class="row no-gutters">
                        <div class="col-md-4">
                            <img src="{{ asset('/img/sundara.png') }}" class="card-img" alt="foto">
                            <h6 class="card-text text-center">Sundara</h6>
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">Team Member</h5>
                                
                                <p class="card-text">
                                    Full Stack Developer
                                </p>
                                <p class="card-text"><small class="text-muted">edu-tech 2019 &copy;</small></p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end card sundara -->

                <!-- card aris-->
                <div class="card mb-3 col-lg-5 col-md-5">
                    <div class="row no-gutters">
                        <div class="col-md-4">
                            <img src="{{ asset('/img/aris.png') }}" class="card-img" alt="foto">
                            <h6 class="card-text text-center">Aris</h6>
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">Team Member</h5>
                                
                                <p class="card-text">
                                    Full Stack Developer
                                </p>
                                <p class="card-text"><small class="text-muted">edu-tech 2019 &copy;</small></p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end card aris -->

                <!-- card aris-->
                <div class="card mb-3 col-lg-5 col-md-5">
                    <div class="row no-gutters">
                        <div class="col-md-4">
                            <img src="{{ asset('/img/rizal.jpeg') }}" class="card-img" alt="foto">
                            <h6 class="card-text text-center">Rizal M.</h6>
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">Team Member</h5>
                                
                                <p class="card-text">
                                    Full Stack Developer
                                </p>
                                <p class="card-text"><small class="text-muted">edu-tech 2019 &copy;</small></p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end card aris -->

            </div>
        </div>

    </div>
@endsection