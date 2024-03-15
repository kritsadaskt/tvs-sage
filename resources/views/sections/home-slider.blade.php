@php
$hero_slides = get_field('hero_banner', get_the_ID());    
@endphp
<div id="home_slider" class="swiper h-[90vh] md:h-screen relative">
  <div class="swiper-wrapper ease-[cubic-bezier(.02,.47,.58,.98)]">
    @foreach ($hero_slides as $slide)
      @php($medias = $slide['medias'])
      <div class="swiper-slide main-slide flex items-end animate_bg" style="background-image: url('{{ $medias['background_image'] }}')">
        <div class="slide-content container mb-52 relative">
          <div class="w-full md:w-3/5 px-4 md:px-0">
            <h3 class="text-white font-semibold text-4xl md:text-5xl mb-2">{{ $slide['title'] }}</h3>
            <p class="text-white font-baijam text-[20px] md:text-[24px] font-extralight">{{ $slide['description'] }}</p>
          </div>
        </div>
      </div>
    @endforeach
  </div>
  <div class="navgation absolute bottom-0 md:bottom-4 w-full">
    <div class="container flex flex-col-reverse md:flex-row">
      <div class="w-full md:w-10/12">
        <div id="home_slider_thumbs" thumbsSlider="" class="swiper">
          <div class="swiper-wrapper">
            @foreach ($hero_slides as $slide)
              @php($medias = $slide['medias'])
              <div class="swiper-slide bg-white bg-cover aspect-video brightness-[0.3] [&.swiper-slide-thumb-active]:brightness-100 cursor-pointer" style="background-image: url('{{ $medias['background_image'] }}')"></div>
            @endforeach
          </div>
        </div>
      </div>
      <div class="w-full md:w-2/12 h-[100px] md:h-auto flex justify-end md:justify-around gap-10 md:gap-0 pr-4 md:pr-0">
        <div class="home-slide-btn swiper-button-prev relative after:hidden bg-none md:w-10">
          <svg class="rotate-180" width="24" height="22" viewBox="0 0 24 22" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M23.2031 11.8242L13.9219 20.6836C13.3945 21.1582 12.6035 21.1582 12.1289 20.6309C11.6543 20.1035 11.6543 19.3125 12.1816 18.8379L19.1953 12.1406H1.26562C0.527344 12.1406 0 11.6133 0 10.875C0 10.1895 0.527344 9.60938 1.26562 9.60938H19.1953L12.1816 2.96484C11.6543 2.49023 11.6543 1.64648 12.1289 1.17188C12.6035 0.644531 13.4473 0.644531 13.9219 1.11914L23.2031 9.97852C23.4668 10.2422 23.625 10.5586 23.625 10.875C23.625 11.2441 23.4668 11.5605 23.2031 11.8242Z" fill="white"/>
            </svg>              
        </div>
        <div class="home-slide-btn swiper-button-next relative after:hidden bg-none md:w-10">
          <svg width="24" height="22" viewBox="0 0 24 22" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M23.2031 11.8242L13.9219 20.6836C13.3945 21.1582 12.6035 21.1582 12.1289 20.6309C11.6543 20.1035 11.6543 19.3125 12.1816 18.8379L19.1953 12.1406H1.26562C0.527344 12.1406 0 11.6133 0 10.875C0 10.1895 0.527344 9.60938 1.26562 9.60938H19.1953L12.1816 2.96484C11.6543 2.49023 11.6543 1.64648 12.1289 1.17188C12.6035 0.644531 13.4473 0.644531 13.9219 1.11914L23.2031 9.97852C23.4668 10.2422 23.625 10.5586 23.625 10.875C23.625 11.2441 23.4668 11.5605 23.2031 11.8242Z" fill="white"/>
            </svg>              
        </div>
      </div>
    </div>
  </div>
</div>
