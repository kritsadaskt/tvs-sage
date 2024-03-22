@php
  $articles = new WP_Query(array('post_type'=>'post', 'posts_per_page'=>7));
  function get_post_cat(Int $id) {
    if ($id) {
      $cat = get_the_category($id);
    }
    
    $r = $cat[0]->name;

    return $r;
  }
@endphp
<div id="lastest_articles" class="min-h-screen bg-white px-4 md:px-0 py-10 relative">
  <div class="container flex flex-col md:grid md:grid-cols-3 gap-5">
    @if ($articles->have_posts())
      @php($i = 1)
      @while ($articles->have_posts())
        @php($articles->the_post())
        @if ($i == 1)
          <a href="{{ get_the_permalink() }}" title="{!! get_the_title() !!}" class="md:col-span-3">
            <div class="lastest-article-box box-{{$i}} flex flex-col md:flex-row gap-5">
              <div class="box-left md:w-1/2 flex flex-col justify-between">
                <div class="box-top">
                  <h3 class="lastes-post-title text-tvs-orange-1 font-semibold text-2xl mb-3">Lastest Articles</h3>
                  <h4 class="text-5xl text-black font-bold mb-3">{!! get_the_title() !!}</h4>
                  <p class="box-excerp text-tvs-gray-1 font-baijam mb-6">{{ get_the_excerpt() }}</p>
                </div>
                <div class="post-meta uppercase text-[#B8B8B8] text-[12px] flex gap-2 items-center">
                  <span>
                    {{ get_post_cat(get_the_ID()) }}
                  </span>
                  <span class="bg-[#B8B8B8] w-[5px] h-[5px] rounded flex"></span>
                  <span>{{ get_the_date('m M y') }}</span>
                </div>
              </div>
              <div class="box-right md:w-1/2 flex justify-end">
                <div class="featured-post-thumb w-full aspect-video bg-center bg-cover" style="background-image: url({!! get_the_post_thumbnail_url() !!})"></div>
              </div>
            </div>
          </a>
        @else
          <a href="{{ get_the_permalink() }}" title="{!! get_the_title() !!}">
            <div class="lastest-article-box box-{{$i}}">
              <div class="post-thumbnail aspect-video bg-cover bg-center mb-4" style="background-image: url({!! get_the_post_thumbnail_url() !!})"></div>
              <h4 class="text-xl font-medium text-tvs-gray-1">{!! get_the_title() !!}</h4>
            </div>
          </a>
        @endif
        @php($i++)
      @endwhile
    @endif
    @php(wp_reset_postdata())
    <div class="view-all-btn-wrapper text-center col-span-3 my-4">
      <a href="" class="view-all-articles text-xl uppercase text-tvs-gray-1 hover:text-black">View All Articles</a>
    </div>
  </div>
</div>