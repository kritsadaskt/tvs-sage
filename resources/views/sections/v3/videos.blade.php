@php
  $vdo_links = get_field('video_links', get_the_ID());
  $reels = get_field('reels_listed', get_the_ID());
  function get_vdo_id($l) {
    $r = explode('?v=', $l);
    return $r[1];
  }
@endphp
<div id="videos" class="min-h-fit bg-black px-4 xl:px-0 pt-20 pb-16">
  <div class="section-header container flex justify-between items-center mb-5 lg:mb-12">
    <h2 class="text-[24px] md:text-[32px] text-white font-semibold border-l-[19px] border-tvs-orange-1 pl-3">VIDEOS</h2>
    <a href="" class="text-white text-base flex gap-2 items-center">
      SEE ALL VIDEOS
      <svg width="14" height="13" viewBox="0 0 14 13" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M13.75 7.0625L8.25 12.3125C7.9375 12.5938 7.46875 12.5938 7.1875 12.2812C6.90625 11.9688 6.90625 11.5 7.21875 11.2188L11.375 7.25H0.75C0.3125 7.25 0 6.9375 0 6.5C0 6.09375 0.3125 5.75 0.75 5.75H11.375L7.21875 1.8125C6.90625 1.53125 6.90625 1.03125 7.1875 0.75C7.46875 0.4375 7.96875 0.4375 8.25 0.71875L13.75 5.96875C13.9062 6.125 14 6.3125 14 6.5C14 6.71875 13.9062 6.90625 13.75 7.0625Z" fill="#ffffff"/>
        </svg>        
    </a>
  </div>
  <div id="main_player" class="container flex flex-col md:flex-row gap-4 mb-10">
    <div id="clip_player" class="md:w-9/12 h-fit">
      @php
        $fst = $vdo_links[0];
      @endphp
      <div id="player" data-video-id="{{ get_vdo_id($fst['video_url']) }}" class="w-full h-auto aspect-video lg:mb-8"></div>
      <div class="content-box hidden lg:block animate__animated">
        <h4 class="clip_title text-white text-[18px] lg:text-[24px] mb-1">{{ $fst['title'] }}</h4>
        <p class="clip_desc text-tvs-light-gray-2 text-base lg:text-[18px]">{{ $fst['description'] }}</p>
      </div>
    </div>
    <div id="clips_listed" class="w-full h-full md:w-3/12 flex md:flex-col gap-4 overflow-scroll">
      @foreach ($vdo_links as $key=>$vdo)
        <div class="clip-thumb cursor-pointer vdo-{{$key+1}} {{ $key+1 == 1 ? 'playing':'' }} bg-cover w-[130px] lg:w-full aspect-video lg:min-h-[130px] xl:min-h-[180px] flex-none" style="background-image: url({{ $vdo['thumbnail'] }})" data-vdo-title="{{ $vdo['title'] }}" data-vdo-desc="{{ $vdo['description'] }}" onclick="set_main_video(this, '{{ get_vdo_id($vdo['video_url']) }}')" ></div>
      @endforeach
    </div>
    <div class="content-box block lg:hidden animate__animated animate__fadeIn">
      <h4 class="clip_title text-white text-[18px] lg:text-[24px] mb-1">{{ $fst['title'] }}</h4>
      <p class="clip_desc text-tvs-light-gray-2 text-base lg:text-[18px]">{{ $fst['description'] }}</p>
    </div>
  </div>
  <div id="reels" class="container hidden">
    <h2 class="text-[22px] lg:text-[28px] text-white font-medium mb-7">SHORTS</h2>
    <div id="reel_slider" class="swiper">
      <div class="swiper-wrapper">
        @foreach ($reels as $reel)
        <a title="" href="{{ $reel['reel_url'] }}" class="reel-item swiper-slide relative flex justify-center items-center group">
          <svg class="play-btn absolute group-hover:scale-125 ease-out duration-300" width="70" height="74" viewBox="0 0 70 74" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M0 36.75C0 24.3086 6.5625 12.8242 17.5 6.53516C28.3008 0.246094 41.5625 0.246094 52.5 6.53516C63.3008 12.8242 70 24.3086 70 36.75C70 49.3281 63.3008 60.8125 52.5 67.1016C41.5625 73.3906 28.3008 73.3906 17.5 67.1016C6.5625 60.8125 0 49.3281 0 36.75ZM25.7031 21.9844C24.6094 22.5312 24.0625 23.625 24.0625 24.7188V48.7812C24.0625 50.0117 24.6094 51.1055 25.7031 51.6523C26.6602 52.3359 28.0273 52.1992 28.9844 51.6523L48.6719 39.6211C49.6289 38.9375 50.3125 37.9805 50.3125 36.75C50.3125 35.6562 49.6289 34.5625 48.6719 34.0156L28.9844 21.9844C28.0273 21.3008 26.6602 21.3008 25.7031 21.8477V21.9844Z" fill="white"/>
            </svg>            
          <img src="{{ $reel['reel_thumbnail'] }}" alt="">
        </a>
        @endforeach
      </div>
    </div>
    <div class="view-all-btn-wrapper text-center flex mt-8 justify-center">
      <a href="" class="view-all-articles uppercase text-white bg-tvs-orange-1 rounded-3xl px-10 py-2 tvs-btn-hover">SEE MORE REELS</a>
    </div>
  </div>
</div>