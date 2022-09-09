<div class="container p-2 mt-4">
    <div class="row align-items-center">
        <div class="col-8">
            <p class="text-lightgreen" style="font-weight: 600">Profil BUM Desa Indonesia</p>
            <h3>Profil Online BUM Desa Indonesia</h3>
            <p class="text-secondary">Mereka adalah seluruh mitra yang berkolaborasi dengan dengan kami.</p>
        </div>
        <div class="col-4 text-end">
            <a href="" class="link-success text-decoration-none">Lihat semua <i class="fa-solid fa-arrow-right"></i></a>
        </div>
        <hr>
        <div id="slider-owl">
            <div class="owl-carousel carousel-profile owl-theme px-5 py-3">
                @foreach ( $profile as $profiles)
                <div class="card rounded-5 h-100 p-2 shadow-sm">
                    <div class="bg-light rounded-5">
                        <img class="img-fluid p-2" src="{{ $profiles->logo }}" alt="">
                    </div>
                    <div class="card-body small">
                        <h6 class="card-text" style="font-weight: 600">{{$profiles->nama_bumdes}}</h6>
                        <p class="text-muted small my-0">Nomor Registrasi: {{$profiles->no_registrasi}}</p>
                        <p class="small mb-2 mt-2"><i class="fa-solid text-primary fa-location-dot"></i> {{$profiles->alamat}}</p>
                        <a href="" type="button" class="btn btn-sm w-100 text-white" style="background-color: #0EA44D">Kunjungi Website <i class="fa-solid text-white fa-arrow-right"></i></a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
