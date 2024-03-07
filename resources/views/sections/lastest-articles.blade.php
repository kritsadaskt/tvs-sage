@php
  $articles = new WP_Query(array('post_type'=>'post', 'posts_per_page'=>7))
@endphp
<div id="lastest_articles" class="min-h-screen bg-white py-10">
  <div class="container grid grid-cols-3 gap-5">
    @if ($articles->have_posts())
      @php($i = 1)
      @while ($articles->have_posts())
        @php($articles->the_post())
        @if ($i == 1)
          <div class="lastest-article-box box-{{$i}} col-span-3 flex gap-5">
            <div class="box-left w-1/2 flex flex-col justify-center">
              <h3 class="lastes-post-title text-tvs-orange-1 font-semibold">Lastest Articles</h3>
              <h4 class="text-5xl text-black font-bold mb-3">{!! get_the_title() !!}</h4>
              <p class="box-excerp text-tvs-gray-1 font-baijam mb-6">{{ get_the_excerpt() }}</p>
              <a href="{{ get_the_permalink() }}" class="featured-article-readmore font-baijam text-tvs-gray-1 hover:text-tvs-orange-1">READ MORE</a>
            </div>
            <div class="box-right w-1/2 flex justify-end">
              <div class="featured-post-thumb h-[760px] aspect-[3/4] bg-center" style="background-image: url({!! get_the_post_thumbnail_url() !!})"></div>
            </div>
          </div>
        @else
          <div class="lastest-article-box box-{{$i}}">
            <div class="post-thumbnail aspect-video bg-cover bg-center" style="background-image: url({!! get_the_post_thumbnail_url() !!})"></div>
            <h4>{!! get_the_title() !!}</h4>
          </div>
        @endif
        @php($i++)
      @endwhile
    @endif
    <div class="view-all-btn-wrapper text-center col-span-3 my-4">
      <a href="" class="view-all-articles uppercase text-tvs-gray-1 hover:text-black">View All Articles</a>
    </div>
  </div>
</div>