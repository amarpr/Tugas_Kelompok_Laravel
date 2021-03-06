<!-- konten header -->
<div class="container-fluid">
  <div class="row mx-2 my-2">
    <div class="col-md-5">
      <h2>PERPUSTAKAAN AR-RASYID</h2>
      <marquee behavior="#" direction="#">
        <p>Лорем ипсум долор сит амет, иусто омиттам волуптатум дуо ад, сед пертинах сенсерит ад. Дуо антиопам партиендо ехплицари ан, аудире цоммодо цонцлусионемяуе вим ан. Делецтус десерунт ан нам. Ин еяуидем маиорум при, ест ут яуодси маиорум, про еу алияуандо сентентиае диспутатиони.</p>
      </marquee>
    </div>
    <div class="col-md-7">
      <div class="sign mt-5 float-right mr-5">
        <!-- Authentication Links -->
        @guest
        @if (Route::has('register'))
        <a href="{{ url('/login') }}" class="btn btn-sm btn-outline-primary"> Sign In</a>
        <a href="{{ url('/register') }}" class="btn btn-sm btn-primary"> Sign Up</a>
        @endif
        @else
        <a id="navbarDropdown" class="nav-link btn-md btn-primary dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          {{ Auth::user()->name }} <span class="caret"></span>
        </a>

        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="/profiluser" onclick="event.preventDefault();
                                                    document.getElementById('user-form').submit();">
            {{ __('User Profile') }}
          </a>
          <form id="user-form" action="/profiluser" method="GET">
            @csrf
          </form>
          <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
            {{ __('Logout') }}
          </a>

          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
          </form>
        </div>
        @endguest
      </div>
    </div>
  </div>
  <!-- tutup header  -->
  <!-- navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-info px-5">
    <a class="navbar-brand" href="#"><img src="https://pngimage.net/wp-content/uploads/2018/05/buku-logo-png-4.png" style="width:4rem" alt="gambar-logo-perpustakaan"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item {{ Request::is('/') ? 'active' : '' }}">
          <a class="nav-link" href="{{ url('/') }}">Beranda <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item {{ Request::is('profile') ? 'active' : '' }}">
          <a class="nav-link" href="{{ url('/profile') }}">Profil</a>
        </li>
        <li class="nav-item dropdown {{ (Request::is('buku-pemograman') || Request::is('majalah') || Request::is('comic')) ? 'active' : '' }}">
          <a class="nav-link dropdown-toggle " href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Kategori
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item {{ Request::is('buku-pemograman') ? 'active' : '' }}" href="{{ url('/buku-pemograman') }}">Buku Programmer</a>
            <a class="dropdown-item {{ Request::is('majalah') ? 'active' : '' }}" href="{{ url('/majalah') }}">Majalah</a>
            <a class="dropdown-item {{ Request::is('comic') ? 'active' : '' }}" href="{{ url('/comic') }}">Komik</a>
          </div>
        </li>
      </ul>
      <form class="form-inline my-2 my-lg-0">
        <input class="form mr-sm-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-sm btn-light my-2 my-sm-0" type="submit">Search</button>
      </form>
    </div>
  </nav>
  <!-- tutup navbar -->
</div>