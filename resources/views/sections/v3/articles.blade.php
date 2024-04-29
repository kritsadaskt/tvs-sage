@php
  $articles = new WP_Query(array('post_type'=>'post', 'posts_per_page'=>6));
  $hl_a = get_field('highlight_articles', get_the_ID());
@endphp
<div id="lastest_articles" class="min-h-screen bg-white px-4 md:px-0 py-20 relative">
  <div class="container flex justify-between items-center mb-12">
    <h2 class="text-[32px] font-semibold border-l-[19px] border-tvs-orange-1 pl-3">ARTICLES</h2>
    <a href="" class="text-tvs-gray-1 flex gap-2 items-center">
      SEE ALL ARTICLES
      <svg width="14" height="13" viewBox="0 0 14 13" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M13.75 7.0625L8.25 12.3125C7.9375 12.5938 7.46875 12.5938 7.1875 12.2812C6.90625 11.9688 6.90625 11.5 7.21875 11.2188L11.375 7.25H0.75C0.3125 7.25 0 6.9375 0 6.5C0 6.09375 0.3125 5.75 0.75 5.75H11.375L7.21875 1.8125C6.90625 1.53125 6.90625 1.03125 7.1875 0.75C7.46875 0.4375 7.96875 0.4375 8.25 0.71875L13.75 5.96875C13.9062 6.125 14 6.3125 14 6.5C14 6.71875 13.9062 6.90625 13.75 7.0625Z" fill="#656565"/>
        </svg>        
    </a>
  </div>
  <div class="container flex flex-col md:grid md:grid-cols-3 gap-5 mb-10">
    @if ($articles->have_posts())
      @while ($articles->have_posts())
        @php($articles->the_post())
        <a href="{{ get_the_permalink() }}" title="{!! get_the_title() !!}">
          <div class="lastest-article-box box-{{$i}}">
            <div class="post-thumbnail aspect-video bg-cover bg-center mb-4 border border-tvs-light-gray" style="background-image: url({!! get_the_post_thumbnail_url() !!})"></div>
          </div>
        </a>
      @endwhile
    @endif
    @php(wp_reset_postdata())
    <div class="view-all-btn-wrapper text-center col-span-3 my-4">
      <a href="" class="view-all-articles uppercase text-white bg-tvs-orange-1 rounded-3xl px-10 py-2">SEE MORE</a>
    </div>
  </div>
  <div id="highlight_articles" class="container border border-gray-200 pt-20 px-10 pb-11 relative overflow-hidden">
    <div class="hl_a-backdrop w-full h-full top-0 left-0 absolute grayscale" style="background-image: url('{{$hl_a['topic_background_image']}}')"></div>
    <div class="hl-content-wrapper relative">
      <h4 class="text-tvs-orange-1 font-medium">Highlight Articles :</h4>
      <h3 class="text-black font-semibold text-[30px] mb-5">{{ $hl_a['topic_title'] }}</h3>
      <div class="highlight-listed grid grid-cols-3 gap-4 mb-8">
        @foreach ($hl_a['article_listed'] as $item)
          <a href="{{ get_the_permalink($item) }}">
            <img src="{{ get_the_post_thumbnail_url($item) }}" alt="">
          </a>
        @endforeach
      </div>
      <div class="flex justify-center">
        <a href="" class="bg-black text-white px-8 py-1 rounded-3xl">SEE ALL ARTICLES IN THIS TOPIC</a>
      </div>
    </div>
  </div>
</div>
