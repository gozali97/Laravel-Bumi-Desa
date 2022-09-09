<div class="container p-2">
    <div class="row align-items-center">
        <div class="col-6">
            <h6 class="text-lightgreen" style="font-weight: 600">Cek Kesehatan Usaha BUM Desa</h6>
            <h3 style="font-weight: 600">Data Cek Kesehatan Usaha <br> BUM Desa Seluruh Indonesia</h3>
            <div class="row mt-5">
                <div class="col-md-6">
                    <h3 id="data-bumdes" class="text-lightgreen counter-profile" style="font-weight: 600" data-counter="1373">0</h3>
                    <h5 style="font-weight: 600">Total Data BUM Desa</h5>
                </div>
                <div class="col-md-6">
                    <h3 id="bumdes-rintisan" class="text-lightgreen counter-profile" style="font-weight: 600" data-counter="2373">0</h3>
                    <h5>BUM Desa Rintisan</h5>
                    <p class="text-secondary small m-0 p-0">*Bintang 1 - 2</p>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-md-6">
                    <h3 id="bumdes-berkembang" class="text-lightgreen counter-profile" style="font-weight: 600" data-counter="4373">0</h3>
                    <h5>Bumdes Berkembang</h5>
                    <p class="text-secondary small m-0 p-0">*Bintang 3</p>
                </div>
                <div class="col-md-6">
                    <h3 id="bumdes-maju" class="text-lightgreen counter-profile" style="font-weight: 600" data-counter="211">0</h3>
                    <h5>BUM Desa Maju</h5>
                    <p class="text-secondary small m-0 p-0">*Bintang 4 - 5</p>
                </div>
            </div>
        </div>
        <div class="col-6">
            <img class="mt-4" src="{{url('assets/home/img/profil-image.png')}}" style="width: 450px" alt="">
        </div>
    </div>
</div>

@section('js')
<script>
    // animasi conter jumlah mitra, dll
    const counters = document.querySelectorAll('.counter-profile')
    const speed = 200

    counters.forEach(counter => {
        const updateCount = () => {
            const target = +counter.getAttribute('data-counter')
            const count = +counter.innerHTML
            const increment = target / speed

            if (count < target) {
                counter.innerHTML = Math.ceil(count + increment)
                setTimeout(updateCount, 1)
            }
        }

        updateCount()
    })

</script>
@endsection
