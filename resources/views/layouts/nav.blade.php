{{-- <div class="container-fluid" id="upper" style="background-color: rgba(0, 183, 255, 1);"> --}}
<div class="row" id="upper" style="background-color: #0EA44D;">
   <div class="col-md-2">
   </div>
   <div class="col-md-8">
      <div class="d-flex justify-content-center align-items-center flex-row" style="height: 72px;">
         <p class="text-white" style="font-family: 'Poppins', sans-serif; font-weight:500; font-size:16px; height:14px;">
            Yuk konsultasikan BUM Desa anda disini!
         </p>
         <a href="https://wa.me/6285772900800" target="_BLANK" class="btn btn-primary"
            style="margin-left: 17px; font-family: 'Poppins', sans-serif; font-weight:500; font-size:16px; background-color:#1C8E4C; border-color:#1C8E4C; border-radius: 4px;">
            Cek sekarang!
         </a>
      </div>
   </div>
   <div class="col-md-2">
      <div class="d-flex justify-content-center align-items-center" style="height: 72px;">
         <a href="#" onclick="upper()" class="text-white"><i class="fa-solid fa-xmark"></i></a>
      </div>
   </div>
</div>
{{-- </div> --}}
{{-- <header> --}}
<nav class="navbar navbar-expand-xl sticky-top navbar-light nav-menu shadow">
   <div class="container-fluid">
      <a class="navbar-brand" href="{{ url('/') }}">
         <img class="logo-bumdes nav-logo" src="{{ asset('/assets/home/img/bumdes.svg') }}">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false"
         aria-label="Toggle navigation">
         <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse nav-menu-item" id="navbarCollapse">
         <ul class="navbar-nav me-auto mb-md-0 mb-2">
            <li class="nav-item item-nav">
               <a class="nav-link {{ Request::is('/') ? 'aktif' : '' }}" aria-current="page" href="{{ url('/') }}">Beranda</a>
            </li>
            <li class="nav-item item-nav">
               <a class="nav-link dropdown-toggle" onclick="pelatihan()" href="#">Pelatihan</a>
            </li>
            <li class="nav-item item-nav">
               <a class="nav-link dropdown-toggle" onclick="pendampingan()" href="#">Pendampingan</a>
            </li>
            <li class="nav-item item-nav">
               <a class="nav-link dropdown-toggle" onclick="layanan()" href="#">Layanan Digital</a>
            </li>
            <li class="nav-item item-nav">
                    <a class="nav-link" href="{{ url('merch')}}">Merchandise</a>
                </li>
            <li class="nav-item item-nav">
               <a class="nav-link dropdown-toggle" onclick="berita()" href="#">Berita BUM Desa</a>
            </li>
            <li class="nav-item item-nav">
               <a class="nav-link dropdown-toggle" onclick="profil()" href="#">Profil BUM Desa</a>
            </li>
            @auth @if(Auth::user()->hak_akses == 0)
            <!--<li class="nav-item item-nav {{Request::path() === 'admin' ? 'active' : ''}}">-->
            <!--    <a class="nav-link dropdown-toggle" href="{{url('/admin')}}">Admin</a>-->
            <!--</li>-->
            @endif @endauth
             @auth @if(Auth::user()->hak_akses == 1)
            <!--<li class="nav-item item-nav {{Request::path() === 'pegawai_bumdes' ? 'active' : ''}}">-->
            <!--    <a class="nav-link dropdown-toggle" href="">Pegawai Bumdes</a>-->
            <!--</li>-->
            @endif @endauth
            @auth @if(Auth::user()->hak_akses == 2)
            <!--<li class="nav-item item-nav {{Request::path() === 'pegawai_desa' ? 'active' : ''}}">-->
            <!--    <a class="nav-link dropdown-toggle" href="">Pegawai Desa</a>-->
            <!--</li>-->
            @endif @endauth
            @auth @if(Auth::user()->hak_akses == 3)
            <!--<li class="nav-item item-nav {{Request::path() === 'umum' ? 'active' : ''}}">-->
            <!--    <a class="nav-link dropdown-toggle" href="">Umum</a>-->
            <!--</li>-->
            @endif @endauth
         </ul>
         <div class="d-flex button-nav">
             @if (Route::has('login'))
            <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                @auth
                <a class="navbar-brand" href="#">{{ Auth::user()->name }}</a>
                <a class="btn button-daftar" href="{{ route('logout') }}" onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">
                {{ __('Logout') }}
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST"
                style="display: none;">
                @csrf
            </form>
                @else
                <a href="{{ url('/login') }}"><button class="btn button-masuk">Masuk</button></a>

                    @if (Route::has('register'))
                    <a href="{{ url('daftar') }}"><button class="btn button-daftar">Daftar</button></a>
                    @endif
                @endif
            </div>
            @endif
         </div>
      </div>
   </div>
</nav>
{{-- </header> --}}
