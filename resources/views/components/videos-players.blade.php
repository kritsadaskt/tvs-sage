@php
  function get_vdo_id($l) {
    $r = explode('?v=', $l);
    return $r[1];
  }
  if (isset($theme)) {
    if ($theme == '') {
      $theme = 'light';
    }
  }
@endphp
<div id="main_player" class="container flex flex-col md:flex-row gap-4 mb-10 group theme-{{ $theme }}">
  <div id="clip_player" class="md:w-9/12 h-fit">
    @php
      $fst = $videos[0];
    @endphp
    <div id="player" data-video-id="{{ get_vdo_id($fst['video_url']) }}" class="w-full h-auto aspect-video lg:mb-5"></div>
    <div class="content-box hidden lg:block animate__animated">
      <h4 class="clip_title text-[18px] lg:text-[24px] mb-1 font-semibold group-[.theme-dark]:text-white group-[.theme-light]:text-black">{{ $fst['title'] }}</h4>
      <p class="clip_desc text-tvs-light-gray-2 text-base lg:text-[18px] group-[.theme-dark]:text-white group-[.theme-light]">{{ $fst['description'] }}</p>
    </div>
  </div>
  <div id="clips_listed" class="w-full h-full md:w-3/12 flex md:flex-col gap-4 overflow-scroll">
    @foreach ($videos as $key=>$vdo)
      <div class="clip-thumb cursor-pointer vdo-{{$key+1}} {{ $key+1 == 1 ? 'playing':'' }} bg-cover w-[130px] lg:w-full aspect-video lg:min-h-[130px] xl:min-h-[180px] flex-none" style="background-image: url({{ $vdo['thumbnail'] }})" data-vdo-title="{{ $vdo['title'] }}" data-vdo-desc="{{ $vdo['description'] }}" onclick="set_main_video(this, '{{ get_vdo_id($vdo['video_url']) }}')" ></div>
    @endforeach
  </div>
  <div class="content-box block lg:hidden animate__animated animate__fadeIn">
    <h4 class="clip_title text-white text-[18px] lg:text-[24px] mb-1">{{ $fst['title'] }}</h4>
    <p class="clip_desc text-tvs-light-gray-2 text-base lg:text-[18px]">{{ $fst['description'] }}</p>
  </div>
</div>