@extends('layouts.app')

@section('content')
  @include('partials/right-sidebar')
  @include('sections/home-slider')
  @include('sections/headline')
  @include('sections/editors-pick')
  @include('sections/lastest-articles')
  @include('sections/dataviz')
  @include('sections/videos')
  @include('sections/infographic')
@endsection
