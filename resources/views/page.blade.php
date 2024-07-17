@extends('layouts.app')

@section('content')
  @if(in_array('elementor-default', get_body_class()))
    <div class="container">
      @include('partials.content-elementor')
    </div>
  @else
    @while(have_posts()) @php(the_post())
      <div class="container">
        @includeFirst(['partials.content-page', 'partials.content'])
      </div>
    @endwhile
  @endif
  </div>

@endsection
