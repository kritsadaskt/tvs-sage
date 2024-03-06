@php
$hero_slides = get_field('hero_banner', get_the_ID());    
@endphp
<div class="panel">
  <div id="home_slider" class="swiper h-screen relative">
    <div class="swiper-wrapper">
      @foreach ($hero_slides as $slide)
        @php($medias = $slide['medias'])
        <div class="swiper-slide bg-cover brightness-50" style="background-image: url('{{ $medias['background_image'] }}')">
          {{ $slide['title'] }}
          {{ $slide['description'] }}
        </div>
      @endforeach
    </div>
    <div class="navgation absolute bottom-4 w-full">
      <div class="container flex">
        <div class="w-10/12">
          <div id="home_slider_thumbs" thumbsSlider="" class="swiper">
            <div class="swiper-wrapper">
              @foreach ($hero_slides as $slide)
                @php($medias = $slide['medias'])
                <div class="swiper-slide bg-white bg-cover aspect-video" style="background-image: url('{{ $medias['background_image'] }}')"></div>
              @endforeach
            </div>
          </div>
        </div>
        <div class="w-2/12 flex justify-around">
          <div class="home-slide-btn swiper-button-prev relative"></div>
          <div class="home-slide-btn swiper-button-next relative"></div>
        </div>
      </div>
    </div>
  </div>
</div>
