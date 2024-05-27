@extends('layouts.app')
@php
  $topics = get_field('topics', get_the_ID());
@endphp

@section('content')
  @include('sections/v3/header')
  @include('partials/left-sidebar')
  <section id="page_header" class="h-[300px] bg-black flex justify-center items-end pb-10">
    <div class="container">
      <h2 class="page-title text-white text-center mb-5 uppercase text-[46px] font-semibold">Topics</h2>
      <div class="btn-group flex gap-3 justify-center">
        @foreach ($topics as $topic)
        <button class="px-6 py-1 border border-white rounded-2xl text-white text-sm font-light hover:bg-white hover:text-black transition-all">
          {{ $topic['topic_name'] }}
        </button>
        @endforeach
      </div>
    </div>
  </section>
  <section class="topics-listed">
    @foreach ($topics as $topic)
      <div class="topic-banner h-[400px] bg-cover bg-center relative group" style="background-image: url({{ get_the_post_thumbnail_url($topic['featured_article']) }})">
        <div class="overlay bg-tvs-orange-1/90 w-full h-full absolute px-10 flex flex-col justify-center items-center gap-4 -right-full group-hover:right-0 transition-all duration-[800ms] ease-[cubic-bezier(0.65, 0.05, 0.36, 1)] cursor-pointer">
          <h4 class="text-white text-[36px] ">{!! get_the_title($topic['featured_article']) !!}</h4>
          <a href="{{ get_the_permalink($topic['featured_article']) }}" class="read-more bg-white text-black px-5 py-1 rounded hover:scale-110 transition-all">อ่านต่อ</a>
        </div>
      </div>
    @endforeach
  </section>
@endsection