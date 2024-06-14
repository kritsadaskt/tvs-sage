@php
$hero_slides = get_field('hero_banner', get_the_ID());
@endphp
<div id="home_slider_section" class="md:h-1/2 lg:h-auto 2xl:h-screen relative bg-black flex items-center pt-10 pb-10 lg:pb-16 xl:min-h-[775px]">
  <div id="slide_backdrop" class="absolute w-full h-full overflow-hidden top-0">
    <div class="top-layer absolute w-full h-full z-[1]"></div>
    <div class="bottom-layer bg-cover w-full h-full blur-sm grayscale transition ease-linear duration-500"></div>
  </div>
  <div id="slide_overlay" class="absolute w-full h-full overflow-hidden top-0">
    <div class="overlay-left w-1/5 left-0 absolute h-full bg-gradient-to-r from-black to-transparent z-[2]"></div>
    <div class="overlay-right w-1/5 right-0 absolute h-full bg-gradient-to-l from-black to-transparent z-[2]"></div>
  </div>
  <div class="container relative">
    <div id="home_slider" class="swiper pt-[8.5rem] pb-[6.5rem] px-2 xl:pt-[12rem] xl:pb-[8rem] lg:px-0">
      <div class="swiper-wrapper">
        @foreach ($hero_slides as $slide)
          @php
            $medias = $slide['medias'];
          @endphp
          <div class="swiper-slide" data-backdrop="{{ $medias['desktop_image'] }}" data-title="{{ $slide['title'] }}" data-desc="{{ $slide['description'] }}" data-link="{{ $slide['link'] }}">
            <a href="{{ $slide['link'] }}" title="{{ $slide['title'] }}">
              <div class="aspect-video bg-cover bg-center hidden lg:block" style="background-image: url({{$medias['desktop_image']}})"></div>
              <div class="aspect-square bg-cover bg-center lg:hidden" style="background-image: url({{$medias['mobile_image']}})"></div>
            </a>
          </div>
        @endforeach
      </div>
    </div>
    <div class="description w-5/6 mx-auto lg:w-3/5 text-white text-center flex flex-col gap-2 lg:gap-1 z-[1] relative transition ease-out duration-500">
      <span class="text-white bg-tvs-orange-1 text-[12px] self-center font-light px-[10px] py-[4px] leading-none rounded-[25px]">HIGHLIGHT</span>
      <a href="" id="slide_active_link" title="">
        <h3 id="hero_title" class="text-[26px] mb-3 lg:mb-2 leading-tight xl:text-[32px] font-medium"></h3>
        <p id="hero_desc" class="text-sm font-[300]"></p>
      </a>
    </div>
    <div class="slide-navigation flex w-11/12 justify-between top-[36%] lg:top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 z-[3] absolute">
      <div class="home-slide-btn swiper-button-prev relative after:hidden bg-none md:w-10 left-0 mt-0">
        <svg class="rotate-180" width="24" height="22" viewBox="0 0 24 22" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M23.2031 11.8242L13.9219 20.6836C13.3945 21.1582 12.6035 21.1582 12.1289 20.6309C11.6543 20.1035 11.6543 19.3125 12.1816 18.8379L19.1953 12.1406H1.26562C0.527344 12.1406 0 11.6133 0 10.875C0 10.1895 0.527344 9.60938 1.26562 9.60938H19.1953L12.1816 2.96484C11.6543 2.49023 11.6543 1.64648 12.1289 1.17188C12.6035 0.644531 13.4473 0.644531 13.9219 1.11914L23.2031 9.97852C23.4668 10.2422 23.625 10.5586 23.625 10.875C23.625 11.2441 23.4668 11.5605 23.2031 11.8242Z" fill="white"/>
          </svg>              
      </div>
      <div class="home-slide-btn swiper-button-next relative after:hidden bg-none md:w-10 right-0 mt-0">
        <svg width="24" height="22" viewBox="0 0 24 22" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M23.2031 11.8242L13.9219 20.6836C13.3945 21.1582 12.6035 21.1582 12.1289 20.6309C11.6543 20.1035 11.6543 19.3125 12.1816 18.8379L19.1953 12.1406H1.26562C0.527344 12.1406 0 11.6133 0 10.875C0 10.1895 0.527344 9.60938 1.26562 9.60938H19.1953L12.1816 2.96484C11.6543 2.49023 11.6543 1.64648 12.1289 1.17188C12.6035 0.644531 13.4473 0.644531 13.9219 1.11914L23.2031 9.97852C23.4668 10.2422 23.625 10.5586 23.625 10.875C23.625 11.2441 23.4668 11.5605 23.2031 11.8242Z" fill="white"/>
          </svg>              
      </div>
    </div>
    <div class="home-slide-pagination swiper-pagination z-[1] relative"></div>
  </div>
</div>
