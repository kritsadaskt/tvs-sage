@php
  $infos = get_field('infographics', get_the_ID());
  $info_1 = $infos[0];
@endphp
<div id="infographic" class="min-h-fit bg-white pt-14 pb-[70px]">
  <div class="container flex-col-reverse md:flex-row flex gap-5">
    <div id="infos_slides_wrapper" class="w-full md:w-7/12 flex flex-col gap-4 px-4 md:px-0 pb-8 justify-end">
      <h4 class="text-tvs-orange-1 text-xl font-semibold">Infographics</h4>
      <h4 class="info-text-shows text-[46px] font-bold text-black leading-tight animate__animated animate__flipInX">{{ $info_1['info_title'] }}</h4>
      <img src="{{$info_1['infographics_image']}}" alt="" class="show-info-img w-full md:hidden">
      <div id="infos_slides" class="swiper w-full">
        <div id="infos_slides_nav" class="flex relative w-28 h-12 mb-4">
          <div class="swiper-button-prev bg-none after:hidden">
            <svg width="24" height="22" viewBox="0 0 24 22" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M0.369141 11.8242C0.105469 11.5605 0 11.2441 0 10.875C0 10.5586 0.105469 10.2422 0.369141 9.97852L9.65039 1.11914C10.1777 0.644531 10.9688 0.644531 11.4434 1.17188C11.918 1.64648 11.918 2.49023 11.3906 2.96484L4.37695 9.60938H22.3594C23.0449 9.60938 23.625 10.1895 23.625 10.875C23.625 11.6133 23.0449 12.1406 22.3594 12.1406H4.37695L11.3906 18.8379C11.918 19.3125 11.918 20.1035 11.4434 20.6309C10.9688 21.1582 10.1777 21.1582 9.65039 20.6836L0.369141 11.8242Z" fill="black"/>
              </svg>            
          </div>
          <div class="swiper-button-next bg-none after:hidden">
            <svg class="rotate-180" width="24" height="22" viewBox="0 0 24 22" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M0.369141 11.8242C0.105469 11.5605 0 11.2441 0 10.875C0 10.5586 0.105469 10.2422 0.369141 9.97852L9.65039 1.11914C10.1777 0.644531 10.9688 0.644531 11.4434 1.17188C11.918 1.64648 11.918 2.49023 11.3906 2.96484L4.37695 9.60938H22.3594C23.0449 9.60938 23.625 10.1895 23.625 10.875C23.625 11.6133 23.0449 12.1406 22.3594 12.1406H4.37695L11.3906 18.8379C11.918 19.3125 11.918 20.1035 11.4434 20.6309C10.9688 21.1582 10.1777 21.1582 9.65039 20.6836L0.369141 11.8242Z" fill="black"/>
              </svg>            
          </div>
        </div>
        <div class="swiper-wrapper">
        @foreach ($infos as $item)
          <div class="swiper-slide info-item brightness-[0.3] [&.swiper-slide-active]:brightness-100" data-title="{{$item['info_title']}}" data-img="{{$item['infographics_image']}}" data-link="{{$item['post_url']}}">
            <img src="{{$item['infographics_image']}}" alt="" class="aspect-[3/4]" data-id="{{ ($loop->index)+1 }}">
          </div>
        @endforeach
        </div>
      </div>
    </div>
    <div id="info_show_wrapper" class="hidden w-5/12 md:flex justify-center">
      <img src="{{$info_1['infographics_image']}}" alt="" class="show-info-img w-5/6">
    </div>
  </div>
</div>