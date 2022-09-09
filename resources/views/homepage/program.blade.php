<div class="container-fluid">
   <div class="row bg-hero">
      <div class="col-12">
         <div class="container-fluid p-0 p-md-5">
            <h2 class="fw-bold mb-3 mb-md-5 text-center">Apa saja program kami</h2>
            <div class="row px-0 py-5 p-lg-5 text-center justify-content-center">
                @foreach($categoryPrograms as $category)
               <div class="col-program col-md-6 col-lg-4 mt-5">
                  <div class="card card-program border-0 h-100 position-relative px-3 text-center shadow pill-5">
                     <div class="img-program p-3">
                        <img src="{{asset('images/category/' .$category->image)}}" loading="lazy" alt="gambar pelatihan bum desa" class="img-fluid position-absolute start-0 bottom-0" />
                     </div>
                     <div class="card-body">
                        <h5 class="card-title fw-bold">{{ $category->program_name}}</h5>
                        <p class="card-text small text-muted mt-3">{!! $category->description!!}</p>
                     </div>
                     <div class="card-footer border-0 bg-transparent">
                        <div class="d-grid py-3">
                           <a href="{{ $category->button }}" class="btn btn-lightgreen stretched-link padding-y-13 px-2 px-md-5 rounded-pill" style="font-weight: 500">Cari tahu lebih lanjut</a>
                        </div>
                     </div>
                  </div>
               </div>
               @endforeach
            </div>
         </div>
      </div>
   </div>
</div>
