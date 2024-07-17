@php
  $articles = new WP_Query(array('post_type'=>'post', 'posts_per_page'=>6));
  $hl_a = get_field('highlight_articles', get_the_ID());
@endphp
<div id="lastest_articles" class="min-h-screen bg-white px-4 xl:px-0 py-14 xl:py-20 relative">
  <div class="section-header container flex justify-between items-center mb-10 xl:mb-12">
    <h2 class="text-[24px] xl:text-[32px] font-semibold border-l-[19px] border-tvs-orange-1 pl-3">ARTICLES</h2>
    <a href="/articles" class="text-tvs-gray-1 flex gap-2 items-center">
      SEE ALL ARTICLES
      <svg width="14" height="13" viewBox="0 0 14 13" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M13.75 7.0625L8.25 12.3125C7.9375 12.5938 7.46875 12.5938 7.1875 12.2812C6.90625 11.9688 6.90625 11.5 7.21875 11.2188L11.375 7.25H0.75C0.3125 7.25 0 6.9375 0 6.5C0 6.09375 0.3125 5.75 0.75 5.75H11.375L7.21875 1.8125C6.90625 1.53125 6.90625 1.03125 7.1875 0.75C7.46875 0.4375 7.96875 0.4375 8.25 0.71875L13.75 5.96875C13.9062 6.125 14 6.3125 14 6.5C14 6.71875 13.9062 6.90625 13.75 7.0625Z" fill="#656565"/>
        </svg>        
    </a>
  </div>
  <div class="container flex flex-col md:grid md:grid-cols-3 gap-3 lg:gap-5 lg:mb-10">
    @if ($articles->have_posts())
      @while ($articles->have_posts())
        @php($articles->the_post())
        <a href="{{ get_the_permalink() }}" title="{!! get_the_title() !!}">
          <div class="lastest-article-box relative group">
            <div class="overlay absolute top-0 opacity-0 group-hover:opacity-100 transition-all duration-200 ease-linear flex justify-center items-center w-full h-full bg-black/90 px-5 text-center"><p class="text-white">{!! get_the_title() !!}</p></div>
            <div class="post-thumbnail aspect-video bg-cover bg-center md:mb-3 lg:mb-4 border border-tvs-light-gray" style="background-image: url({!! get_the_post_thumbnail_url() !!})"></div>
          </div>
        </a>
      @endwhile
    @endif
    @php(wp_reset_postdata())
    <div class="view-all-btn-wrapper text-center col-span-3 mt-3 mb-6 lg:my-4 hidden">
      <a href="/articles" class="view-all-articles uppercase text-white bg-tvs-orange-1 rounded-3xl py-2 px-10 inline-block hover:scale-110 transition-all duration-300 ease-in-out">SEE MORE</a>
    </div>
  </div>
  <div id="highlight_articles" class="container border border-gray-200 pt-[130px] px-2 pb-14 lg:pt-20 lg:px-10 lg:pb-11 relative overflow-hidden">
    <div class="hl_a-backdrop w-full h-full top-0 left-0 absolute grayscale" style="background-image: url('{{$hl_a['topic_background_image']}}')"></div>
    <div class="hl-content-wrapper relative">
      <h4 class="text-tvs-orange-1 font-medium text-[20px] text-center lg:text-start">Highlight Articles :</h4>
      <h3 class="text-black font-semibold text-[24px] text-center lg:text-start lg:text-[30px] mb-5 w-4/5 mx-auto lg:w-full">{{ $hl_a['topic_title'] }}</h3>
      <div class="highlight-listed grid lg:grid-cols-3 gap-4 mb-8">
        @foreach ($hl_a['article_listed'] as $item)
          <a class="highlight-article-item" href="{{ get_the_permalink($item) }}" title="{{ get_the_title($item) }}">
            <img src="{{ get_the_post_thumbnail_url($item) }}" alt="">
          </a>
        @endforeach
      </div>
      @if(!empty($hl_a['link_to_topic']))
        <div class="flex justify-center">
          <a href="{{ $hl_a['link_to_topic'] }}" class="see-this-topic-btn bg-black text-white px-8 py-3 text-sm md:text-base text-center rounded-3xl">SEE ALL ARTICLES IN THIS TOPIC</a>
        </div>
      @endif
    </div>
  </div>
</div>
