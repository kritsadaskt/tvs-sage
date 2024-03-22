@extends('layouts.app')

@section('content')
  @include('partials/right-sidebar')
  <div class="panel">
    @include('sections/home-slider')
  </div>
  <div class="panel">
    @include('sections/headline')
  </div>
  @include('sections/dataviz')
  @include('sections/lastest-articles')
  @include('sections/videos')
  @include('sections/infographic')
@endsection
