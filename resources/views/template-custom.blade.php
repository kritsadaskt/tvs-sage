{{--
  Template Name: Topic Detail Page
--}}

@extends('layouts.app')

@php
  $pId = get_the_ID();
  $selected_cat = get_field('topic_selection', $pId);
  $videos = get_field('videos_listed', $pId);
  function check_field($name) {
    $pId = get_the_ID();
    if (get_field($name, $pId) && get_field($name, $pId) !== '') {
      return get_field($name, $pId);
    } else {
      return '';
    }
  }
@endphp

@section('content')

  <section id="topic_header" class="min-h-[600px] bg-cover bg-center pb-[70px] flex items-end relative" style="background-image: url({{ get_field('header_bg_img') }})">
    <div class="w-full h-full absolute bg-black/30 top-0"></div>
    <div class="container relative animate__animated animate__fadeInUp px-4 lg:px-0">
      <h3 class="header-title text-white drop-shadow-md text-[32px] xl:text-[40px] font-semibold mb-3">{{ check_field('header_title') }}</h3>
      <p class="header-desc text-white text-[24px]">{{ check_field('header_desc') }}</p>
    </div>
  </section>
  <section id="topic_intro" class="h-screen flex justify-center items-center" style="background-color: {{ get_field('intro_bg_color', $pId) }}">
    <div class="container text-black animate__animated animate__fadeInUp px-4 lg:px-0">
      <div class="xl:w-5/6 flex flex-col gap-[50px] place-items-start">
        <div class="intro-header-set font-semibold">
          <h3 class="intro-header text-[40px]">{{ check_field('intro_title') }}</h3>
          <h4 class="intro-subtitle text-[32px]">{{ check_field('intro_sub_title') }}</h4>
        </div>
        <p class="intro-desc text-[24px] opacity-80">{{ check_field('intro_desc') }}</p>
        <a href="" class="to-project text-white bg-black/80 hover:bg-black transition-all duration-300 px-8 py-2 rounded-3xl">SEE THIS PROJECT</a>
      </div>
    </div>
  </section>
  <section id="article_listed" class="bg-black py-24">
    <div class="container px-4 lg:px-0">
      <h2 class="section-title text-[#FFFDE3] font-semibold text-[40px] mb-12">Articles</h2>
      @php
        $article_listed = new WP_Query( array(
          'category_name' => $selected_cat->slug,
          'posts_per_page' => 6,
        ));
      @endphp

      @if ( $article_listed->have_posts() )
        <div class="articles-listed grid xl:grid-cols-3 gap-5">
          @while ( $article_listed->have_posts() )
            @php($article_listed->the_post())
            <div class="article cursor-pointer">
              <div class="post-thumbnail w-full aspect-video bg-cover bg-center mb-5" style="background-image: url({{ get_the_post_thumbnail_url() }})"></div>
              <p class="text-white font-semibold text-[20px] mb-2">{{ the_title(); }}</p>
              <div class="post-meta text-[#B8B8B8] font-light text-sm flex gap-3 uppercase font-baijam">
                <span>{{ $selected_cat->name }}</span>
                <span>{{ get_the_date( 'j F Y' ) }}</span>
              </div>
            </div>
          @endwhile
        </div>
      @else
        <p>No Posts Found.</p>  
      @endif

      @php(wp_reset_postdata()) 
    </div>
  </section>
  <section id="videos" class="py-10 xl:py-20">
    <div class="container px-4 lg:px-0">
      <h2 class="section-title text-black font-semibold text-[40px] mb-10">Videos</h2>
      <x-videos-players :videos="$videos" />
    </div>
  </section>

  <section id="infographics" class="pt-20 pb-10 bg-black">
    <div class="container px-4 lg:px-0">
      <h2 class="section-title text-white font-semibold text-[40px] mb-10">Infographics</h2>
      <div class="columns-2 gap-5 text-white">
        @php($infos = get_field('info_graphic_listed', $pId))
        @foreach ($infos as $info)
          <a title="" target="_blank" href="{{ $info }}" class="inline-block w-full pt-20 xl:pt-40 first:pt-0">
            <img src="{{ $info }}" alt="">
          </a>
        @endforeach
      </div>
    </div>
  </section>

@endsection
