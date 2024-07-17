@php
$editors_pick = get_field('editors_pick', get_the_ID());
@endphp
<div id="editor_pick" class="bg-cover bg-center h-screen flex items-end relative" style="background-image: url('{{ get_the_post_thumbnail_url($editors_pick) }}')">
  <div class="editor-pick-content w-full bg-black/80 md:bg-black/60 h-full flex items-end px-4 md:px-0 pb-8">
    <div class="container">
      <p class="text-2xl text-tvs-orange-1 font-bold mb-2 animate__animated animate__fadeInUp">Editor's Pick</p>
      <h3 class="text-4xl font-medium text-white animate__animated animate__fadeInUp delay-300">{!! get_the_title( $editors_pick ) !!}</h3>
    </div>
  </div>
</div>