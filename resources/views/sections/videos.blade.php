@php
  $vdo_link = get_field('video_section_link', get_the_ID());
  $link = explode('?v=', $vdo_link);
@endphp
<div id="videos" class="min-h-fit bg-tvs-dark-1">
  <iframe class="w-full aspect-video" src="https://www.youtube.com/embed/{{$link[1]}}" title="" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
</div>