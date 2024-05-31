@extends('layouts.app')

@section('content')
  @include('partials.page-search-header')

  <div class="container mb-10">
    @if (! have_posts())
      <x-alert type="warning">
        {!! __('Sorry, no results were found.', 'sage') !!}
      </x-alert>

      {!! get_search_form(false) !!}
    @endif


    <div class="post-listed grid grid-cols-3 gap-5">
    @while(have_posts()) @php(the_post())
      @include('partials.content-search')
    @endwhile
    </div>

    {{-- {!! get_the_posts_navigation() !!} --}}
  </div>
@endsection
