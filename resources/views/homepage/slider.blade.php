@if ($banners)
<div class="row">
   <div class="col-12">
      <div id="slider" class="carousel slide slider" data-bs-ride="carousel">
         <div class="carousel-indicators">
            @foreach ($banners as $i => $banner )
            <button type="button" data-bs-target="#slider" data-bs-slide-to="{{ $i }}" class="shadow btn-indicator {{ $i == 0 ? 'active' : '' }} " aria-current="true" aria-label="Slide 1"></button>
            @endforeach
         </div>
         <div class="carousel-inner">
            @foreach ($banners as $key => $banner)
            <div class="carousel-item {{ $key == 0 ? 'active' : '' }}">
               <a href="{{ $banner->url}}"><img src="{{asset('images/banner/' .$banner->image)}}" loading="lazy" class="img-fluid d-block w-100" alt="{{ $banner->title }}" /></a>
            </div>
            @endforeach
          
         </div>
         <button class="carousel-control-prev" type="button" data-bs-target="#slider" data-bs-slide="prev">
            <i class="icon-prev fa-solid fa-circle-chevron-left fa-2xl"></i>
         </button>
         <button class="carousel-control-next" type="button" data-bs-target="#slider" data-bs-slide="next">
            <i class="icon-next fa-solid fa-circle-chevron-right fa-2xl"></i>
         </button>
      </div>
   </div>
</div>
   
@endif

