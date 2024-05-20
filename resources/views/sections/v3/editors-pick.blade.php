@php
$editors_pick = get_field('editors_pick', get_the_ID());
@endphp
<div id="editor_pick" class="min-h-[765px] relative flex items-end overflow-hidden">
  <div id="editors_pick_backdrop" class="h-full w-full absolute bg-cover bg-center">
    @if ($editors_pick['video'] !== '')
    <video autoplay muted loop class="w-full scale-[5] md:scale-100">
      <source src="{{ $editors_pick['video'] }}" type="video/mp4">
    </video>
    @endif
  </div>
  <div class="container flex gap-4 relative flex-col lg:flex-row">
    <div id="edtors_pick_listed" class="lg:w-7/12 flex flex-col justify-end lg:mb-8 px-4 lg:px-0">
      <h2 class="text-[32px] text-white font-semibold border-l-[19px] border-tvs-orange-1 pl-3 lg:mb-5">EDITOR'S PICK</h2>
    </div>
    <div id="edtors_pick_info" class="lg:w-5/12 px-5 py-8 lg:pt-12 lg:px-10 pb-10 backdrop-blur-md bg-black/40 min-h-[320px] flex flex-col justify-between animate__animated animate__fadeInUp">
      <div class="top-box">
        <h4 class="text-white font-semibold text-[28px] lg:text-[32px] leading-none mb-4">{!! get_the_title( $editors_pick['selected_article'] ) !!}</h4>
        <p class="text-white font-light text-[20px] font-baijam">{!! get_the_excerpt( $editors_pick['selected_article'] ) !!}</p>
      </div>
      <a href="{{ get_the_permalink($editors_pick['selected_article']) }}" class="view-this-project text-white flex gap-4 text-[18px] items-center justify-end">SEE THIS PROJECT 
        <svg width="14" height="13" viewBox="0 0 14 13" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M13.75 7.0625L8.25 12.3125C7.9375 12.5938 7.46875 12.5938 7.1875 12.2812C6.90625 11.9688 6.90625 11.5 7.21875 11.2188L11.375 7.25H0.75C0.3125 7.25 0 6.9375 0 6.5C0 6.09375 0.3125 5.75 0.75 5.75H11.375L7.21875 1.8125C6.90625 1.53125 6.90625 1.03125 7.1875 0.75C7.46875 0.4375 7.96875 0.4375 8.25 0.71875L13.75 5.96875C13.9062 6.125 14 6.3125 14 6.5C14 6.71875 13.9062 6.90625 13.75 7.0625Z" fill="#ffffff"/>
        </svg></a>
    </div>
  </div>
</div>