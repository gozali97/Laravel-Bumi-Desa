<div class="container p-2">
    <div class="row align-items-center">
        <div class="col-8">
            <p class="text-lightgreen" style="font-weight: 600">Intagram BUMDES.id</p>
            <h3>Sosial Media Bumdes.id</h3>
            <p class="text-secondary">Mereka adalah seluruh mitra yang berkolaborasi dengan dengan kami.</p>
        </div>
        <div class="col-4 text-end">
            <a href="" class="link-success text-decoration-none">Lihat semua <i class="fa-solid fa-arrow-right"></i></a>
        </div>
        <hr>
        <div id="slider-owl">
            <div class="owl-carousel carousel-profile owl-theme px-5 py-3">
                @for ($x=1; $x<=8; $x++) <div class="card rounded-5 h-100 p-2 shadow-sm">
                    <div class="bg-yellow rounded-5">
                        <img class="img-fluid" src="{{ asset('assets/home/img/sosmed/IG.png') }}" alt="">
                    </div>
                    <div class="card-body small">
                        {{-- <h6 class="card-text" style="font-weight: 600">Sistem Aplikasi Akuntansi BUMDES (SAAB)</h6>
                        <p class="text-muted small my-0" {{$x}}>Sistem aplikasi akuntansi yang dapat memudahkan BUMDes dalam melakukan pencatatan keuangan.</p>
                        <a href="" class="stretched-link"></a> --}}
                    </div>
            </div>
            @endfor
        </div>
    </div>
</div>
</div>
