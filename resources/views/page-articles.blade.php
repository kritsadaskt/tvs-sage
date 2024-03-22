@extends('layouts.app')

@section('content')
  @include('partials/right-sidebar')
  @php
  $featured_item = get_field('featured_post', get_the_ID());
  $f_id = $featured_item->ID;
  $cats = get_field('show_categories', get_the_ID());    
  @endphp
  <div id="articles_wrapper" class="bg-black">
    <div class="container pt-[5rem] pb-10">
      <h2 class="text-white font-semi-bold text-4xl text-center mb-8">Articles</h1>
      <!-- Featured Post Box -->
      <div id="featured_box" class="h-[320px] lg:h-[700px] bg-cover bg-center flex flex-col justify-end" style="background-image: url({{ get_the_post_thumbnail_url($f_id) }})">
        <div class="featured_text_box bg-black/60 p-8">
          <h4 class="text-white text-[32px] font-bold flex items-center gap-3 mb-3">{{ $featured_item->post_title }}</h4>
          <p class="text-white font-thin text-xl mb-5">{{ get_the_excerpt($f_id) }}</p>
          <p class="post-meta text-tvs-light-gray uppercase flex items-center gap-2">
            <span>{{ get_post_cat($f_id) }}</span>
            <span class="w-[5px] h-[5px] rounded flex bg-tvs-light-gray"></span>
            <span>{{ get_the_date('m M y', $f_id) }}</span>
          </p>
        </div>
      </div>
    </div>
  </div>
@endsection
