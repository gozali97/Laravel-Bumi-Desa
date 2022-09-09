<div class="container p-2">
    <div class="row align-items-center">
        <div class="col-8">
            <p class="text-lightgreen" style="font-weight: 600">Bumdes TV</p>
            <h3>Kuliah Online BUM Desa</h3>
            <p class="text-secondary">Mereka adalah seluruh mitra yang berkolaborasi dengan dengan kami.</p>
        </div>
        <div class="col-4 text-end">
            <a href="" class="link-success text-decoration-none">Lihat semua <i class="fa-solid fa-arrow-right"></i></a>
        </div>
        <hr>
        <div id="slider-owl">
            <div class="owl-carousel carousel-tv owl-theme px-5 py-3">
                @foreach ( $videoList as $v)
                <div class="card rounded-5 h-100 p-2 shadow-sm">
                    <div class="embed-responsive embed-responsive-16by9 rounded-5">
                        <iframe width="540" height="315" src="https://www.youtube.com/embed/{{$v->id->videoId}}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                    <div class="card-body small">
                        <h6 class="card-text" style="font-weight: 600">{{$v->snippet->title}}</h6>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>


{{-- <div id="slider-owl">
    <div class="card card-body ratio ratio-16x9 overflow-hidden rounded border-0">
        <div class="owl-carousel carousel-profile owl-theme px-5 py-3">
            @for ($x=1; $x<=8; $x++) <div class="card rounded-5 h-100 p-2 shadow-sm">
                <div class="rounded-5">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/JOQN8fki21g" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
                <div class="card-body small">
                    <h5 style="font-weight: 600">Kuliah Bumdes - Peta Jalan Kemandirian Desa
                        - Wahyudi Anggoro Hadi</h5>
                </div>
        </div>
        @endfor
    </div>
</div> --}}
