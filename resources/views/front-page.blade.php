{{--
  Template Name: Homepage V3
--}}

@extends('layouts.app')

@section('content')
  @include('sections/v3/header')
  @include('partials/left-sidebar')
  {{-- <div id="scroll_1" class=""> --}}
    @include('sections/v3/home-slider')
    @include('sections/v3/headline')
  {{-- </div> --}}
  @include('sections/v3/editors-pick')
  @include('sections/v3/articles')
  @include('sections/v3/videos')
  @include('sections/v3/dataviz-listed')
  @include('sections/v3/infographic')
@endsection
