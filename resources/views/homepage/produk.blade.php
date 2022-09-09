<style>
    .carousel-control-prev,
    .carousel-control-next {
        background-color: #e1e1e1 !important;
        width: 5vh !important;
        height: 5vh;
        border-radius: 50% !important;
        top: 50% !important;
        transform: translateY(-50%) !important;
    }

</style>
<link rel="stylesheet" href="{{ url('assets/home/css/adminlte.min.css')}}">

<div class="container p-2">
    <div class="row align-items-center">
        <div class="col-6">
            <p class="text-lightgreen" style="font-weight: 600">Katalog Produk BUM Desa</p>
            <h3>Katalog Produk BUM Desa Indonesia</h3>
            <p class="text-secondary">Kumpulan produk baru BUM Desa </p>
        </div>
        <div class="col-6 text-end">
            <a href="" class="link-success text-decoration-none">Lihat semua <i class="fa-solid fa-arrow-right"></i></a>
        </div>
        <hr>
    </div>
    <div id="slider-owl">
        <div class="owl-carousel carousel-produk owl-theme px-5 py-3">
            @foreach ($produk as $produks)
            <div class="card rounded-5 h-100 p-2 shadow-sm">
                <div class="bg-yellow rounded-5">
                    <img class="img-fluid" src="{{ $produks->foto }}" alt="">
                </div>
                <div class="card-body small">
                    <p class="card-text" style="font-weight: 600">{{$produks->nama}}</p>
                    <h6 style="font-weight: 600">Rp. {{number_format($produks->harga, 0,'', '.')}}</h6>
                    <span class="text-lightgreen badge me-1 mb-3" style="background-color: rgba(14, 164, 77, 0.1)"></span>
                    <a href="" type="button" class="btn btn-sm w-100 text-white" style="background-color: #0EA44D">Beli Produk</a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>


<script src="{{ url('assets/user/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src=" {{ url('assets/user/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{ url('assets/user/js/adminlte.min.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ url('assets/user/js/demo.js')}}"></script>
