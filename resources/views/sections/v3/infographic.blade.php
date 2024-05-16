@php
  $infos = get_field('infographics', get_the_ID());
@endphp

<div id="infographic" class="min-h-fit bg-white pt-[40px] lg:pt-20 pb-7">
  <div class="container flex flex-col lg:flex-row justify-between lg:items-center mb-10 px-5 lg:px-0 gap-5 lg:gap-0">
    <h2 class="text-[28px] lg:text-[32px] font-semibold border-l-[19px] border-tvs-orange-1 pl-3">INFOGRAPHICS</h2>
    <a href="" class="text-tvs-gray-2 flex gap-2 items-center self-end">
      SEE ALL INFOGRAPHICS
      <svg width="14" height="13" viewBox="0 0 14 13" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M13.75 7.0625L8.25 12.3125C7.9375 12.5938 7.46875 12.5938 7.1875 12.2812C6.90625 11.9688 6.90625 11.5 7.21875 11.2188L11.375 7.25H0.75C0.3125 7.25 0 6.9375 0 6.5C0 6.09375 0.3125 5.75 0.75 5.75H11.375L7.21875 1.8125C6.90625 1.53125 6.90625 1.03125 7.1875 0.75C7.46875 0.4375 7.96875 0.4375 8.25 0.71875L13.75 5.96875C13.9062 6.125 14 6.3125 14 6.5C14 6.71875 13.9062 6.90625 13.75 7.0625Z" fill="#484848"/>
        </svg>        
    </a>
  </div>
  <div class="container flex-col-reverse md:flex-row flex gap-5">
    <div id="infos_slides_wrapper" class="w-full relative">
      <div id="infos_slider" class="swiper w-10/12 mx-auto pt-0 pb-14 lg:py-32">
        <div class="swiper-wrapper">
          @foreach ($infos as $item)
            <a title="" class="swiper-slide">
              <img src="{{$item['infographics_image']}}" alt="" class="info-img">
            </a>
          @endforeach
        </div>
      </div>
      <div class="info-navi hidden lg:block absolute w-full h-14 top-1/2 -mt-6">
        <div class="swiper-button-next info-next">
          <svg width="24" height="22" viewBox="0 0 24 22" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M23.2031 11.8242L13.9219 20.6836C13.3945 21.1582 12.6035 21.1582 12.1289 20.6309C11.6543 20.1035 11.6543 19.3125 12.1816 18.8379L19.1953 12.1406H1.26562C0.527344 12.1406 0 11.6133 0 10.875C0 10.1895 0.527344 9.60938 1.26562 9.60938H19.1953L12.1816 2.96484C11.6543 2.49023 11.6543 1.64648 12.1289 1.17188C12.6035 0.644531 13.4473 0.644531 13.9219 1.11914L23.2031 9.97852C23.4668 10.2422 23.625 10.5586 23.625 10.875C23.625 11.2441 23.4668 11.5605 23.2031 11.8242Z" fill="#484848"/>
            </svg>
        </div>
        <div class="swiper-button-prev info-prev">
          <svg class="rotate-180" width="24" height="22" viewBox="0 0 24 22" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M23.2031 11.8242L13.9219 20.6836C13.3945 21.1582 12.6035 21.1582 12.1289 20.6309C11.6543 20.1035 11.6543 19.3125 12.1816 18.8379L19.1953 12.1406H1.26562C0.527344 12.1406 0 11.6133 0 10.875C0 10.1895 0.527344 9.60938 1.26562 9.60938H19.1953L12.1816 2.96484C11.6543 2.49023 11.6543 1.64648 12.1289 1.17188C12.6035 0.644531 13.4473 0.644531 13.9219 1.11914L23.2031 9.97852C23.4668 10.2422 23.625 10.5586 23.625 10.875C23.625 11.2441 23.4668 11.5605 23.2031 11.8242Z" fill="#484848"/>
            </svg>
        </div>
      </div>
      <div class="swiper-pagination info-navi lg:hidden bottom-8"></div>
    </div>
  </div>
</div>