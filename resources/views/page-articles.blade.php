@extends('layouts.app')

@section('content')
  @include('sections/v3/header')
  @include('partials/right-sidebar')
  @php
  $featured_item = get_field('featured_post', get_the_ID());
  $f_id = $featured_item->ID;
  $cats = get_field('show_categories', get_the_ID());  
  $highlight_articles = get_field('highlight_articles', get_option('page_on_front'));  
  @endphp
  <section class="page-header-gradient min-h-80 bg-gradient-to-b from-tvs-orange-1 to-black flex justify-center pt-[80px] lg:pt-0">
    <div class="w-full lg:w-3/5 flex flex-col lg:flex-row justify-center gap-5 lg:gap-14 items-center px-4 lg:px-0">
      <div class="lg:w-1/2 text-right"><h2 class="text-white font-semibold text-5xl lg:text-[64px] uppercase">{{ get_the_title() }}</h2></div>
      <div class="lg:w-1/2"><p class="text-white text-center lg:text-left leading-tight">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p></div>
    </div>
  </section>
  {{-- @dd($highlight_articles)) --}}
  <div id="topics_highlight" class="bg-black min-h-[400px] py-10 -mt-[1px]">
    <div class="container text-white relative text-center overflow-hidden pt-12 px-10">
      <div class="inner relative z-[2]">
        <h5 class="font-semibold text-xl mb-3">Topics: </h5>
        <h3 class="text-3xl lg:text-[32px] font-semibold mb-3">{{ $highlight_articles['topic_title'] }}</h3>
        <a href="" class="text-white font-light inline-flex gap-2 items-center group">SEE THIS PROJECT <x-arrow-right width="15" height="15" class="group-hover:translate-x-1 transition-all duration-300 ease-linear" /></a>
        <hr class="w-4/5 border-[#848484] mx-auto mt-[50px] mb-[30px]" />
        <h4 class="text-[#FAC1B8] font-semibold text-xl mb-7">Highlight Articles from the topic :</h4>
        <div class="highlight-article-listed grid lg:grid-cols-3 gap-4 mb-10">
          @foreach ($highlight_articles['article_listed'] as $item)
            <a href="{{ get_the_permalink($item) }}">
              <img src="{{ get_the_post_thumbnail_url($item) }}" alt="">
            </a>
          @endforeach
        </div>
        <x-primary-btn text="SEE MORE" class="mb-10" link=""/>
      </div>
      <div class="absolute opacity-50 w-full h-full top-0 left-0 blur-[8px] grayscale scale-125 bg-top" style="background-image: url({{ $highlight_articles['topic_background_image'] }});"></div>
    </div>
  </div>
  @php
  $args = [
    'post_type' => 'post', // Change this to the post type you want to query
    'posts_per_page' => 12, // Number of posts per page
    'paged' => get_query_var('paged') ?? 1, // Current page
  ];
  $articles = new WP_Query($args);
  @endphp
  <div class="bg-black text-white pt-12 pb-20 px-4">
    <div class="container">
      <h3 class="text-white text-[40px] font-semibold mb-10">Articles</h3>
        @if ($articles->have_posts())
          <div class="post-grid grid lg:grid-cols-3 gap-5 mb-10">
            @while ($articles->have_posts())
              @php $articles->the_post() @endphp
              <a href="{{ get_the_permalink() }}">
                <article class="article-item group/item bg-cover aspect-video overflow-hidden" style="background-image: url({{ get_the_post_thumbnail_url() }})">
                  <div class="article-content w-full h-full bg-black/80 flex px-8 items-center transition-all duration-500 ease-in-out translate-y-[100%] group-hover/item:translate-y-0">
                    <h4 class="text-center text-[20px] font-semibold">{{ the_title() }}</h4>
                  </div>
                </article>
              </a>
            @endwhile
          </div>
          <div class="pagination-panel flex flex-col md:flex-row justify-between items-center">
            <p class="mb-5 lg:mb-0">Showing 1 to 10 of 97 Articles</p>
            <div class="pagination">
              {!! paginate_links(['total' => $articles->max_num_pages, 'prev_text' => '<i class="fa-solid fa-chevron-left"></i>', 'next_text' => '<i class="fa-solid fa-chevron-right"></i>']) !!}
            </div>
          </div>
        @else
          <p>No posts found</p>
        @endif

        @php wp_reset_postdata() @endphp
    </div>
  </div>
@endsection
