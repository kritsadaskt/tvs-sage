{{--
  Template Name: The Visual Full-Width
  Template Post Type: post
--}}

@extends('layouts.app')

@section('content')
  @while(have_posts()) @php(the_post())
    @php(the_content())
  @endwhile
@endsection