@php
$editors_pick = get_field('editors_pick', get_the_ID());
@endphp
<div class="panel">
  <div id="editor_pick" class="bg-cover h-screen flex items-end" style="background-image: url('{{ get_the_post_thumbnail_url($editors_pick) }}')">
    <div class="editor-pick-content w-full backdrop-blur-md bg-black/60 h-1/4 flex items-center">
      <div class="container">
        <p class="text-2xl text-tvs-orange-1 font-bold mb-2">Editor's Pick</p>
        <h3 class="text-4xl font-medium text-white">{!! get_the_title( $editors_pick ) !!}</h3>
      </div>
    </div>
  </div>
</div>