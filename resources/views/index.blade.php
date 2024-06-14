@extends('layouts.app')

@section('content')
  @include('partials.page-header')

  @if (! have_posts())
    <x-alert type="warning">
      {!! __('Sorry, no results were found.', 'sage') !!}
    </x-alert>

    {!! get_search_form(false) !!}
  @endif

  @if (get_post_type() === 'post')
    <div class="container">
      <div class="grid lg:grid-cols-3 gap-5 lg:gap-4">
        @while(have_posts()) @php(the_post())
          @include('partials.content')
        @endwhile
      </div>
    </div>
  @else
    @while(have_posts()) @php(the_post())
      @include('partials.content-' . get_post_type())
    @endwhile
  @endif

  <div class="posts-navigation justify-center pt-5 pb-10 hidden">
  {!! get_the_posts_navigation() !!}
  </div>
@endsection

@section('sidebar')
  @include('sections.sidebar')
@endsection
