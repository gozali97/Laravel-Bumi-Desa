@foreach ($newslatters as $newslatter)
<div class="container p-5">
   <div class="row align-items-center">
      <div class="col-6">
         <h3 style="font-weight: 700">Newsletter terbaru</h3>
      </div>
      <div class="col-6 text-end">
         <a href="" class="link-success text-decoration-none">Lihat semua <i class="fa-solid fa-arrow-right"></i></a>
      </div>
      <div class="col-md-5">
         <h4 style="font-weight: 600">{{ $newslatter->name }}</h4>
         <p class="my-0 text-secondary small">Periode:{{  $newslatter->period }}</p>
         <p class="my-3">
           {!! $newslatter->description !!}
         </p>
         <a href="{{ url('newslatter/download/' .$newslatter->id) }}" class="btn-lightgreen btn px-5 rounded-4 py-2">Download Newsletter</a>
      </div>
      <div class="col-md-7">
         <div class="flip-book-container" src="{{ 'public/newslatter/'.$newslatter->file }}"></div>
         <!--<embed class="flip-book-container" type="application/pdf" src="{{ asset('assets/home/pdf/newsletter.pdf') }}" width="600" height="400"></embed>-->
         <!--<iframe src="../public/assets/home/pdf/newsletter.pdf" align="top" height="620" width="100%" frameborder="0" scrolling="auto"></iframe>-->
      </div>
   </div>
</div>
@endforeach
