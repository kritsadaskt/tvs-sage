@php
$hero_slides = get_field('hero_banner', get_the_ID());    
@endphp
<div id="home_slider" class="swiper h-[810px]">
  <div class="swiper-wrapper">
    @foreach ($hero_slides as $slide)
      @php($medias = $slide['medias'])
      <div class="swiper-slide bg-cover" style="background-image: url('{{ $medias['background_image'] }}')">
        {{ $slide['title'] }}
        {{ $slide['description'] }}
      </div>
    @endforeach
  </div>
  <div class="swiper-pagination"></div>
  <div class="home-slide-btn swiper-button-prev"></div>
  <div class="home-slide-btn swiper-button-next"></div>
</div>
