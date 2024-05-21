@extends('layouts.app')

@section('content')
  @include('sections/v3/header')
  @include('partials/left-sidebar')
  @if(in_array('elementor-default', get_body_class()))
    @while(have_posts()) @php(the_post())
      @include('partials.content-elementor')
    @endwhile
  @else
  @while(have_posts()) @php(the_post())
    @includeFirst(['partials.content-single-' . get_post_type(), 'partials.content-single'])
  @endwhile
  @endif
@endsection
