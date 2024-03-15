@php
$dataviz_items = new WP_Query(array('post_type'=>'post', 'category_name'=>'equality', 'posts_per_page'=>5));
$dataviz_cats = array('Green', 'Urban', 'Culture', 'General', 'Equality');
@endphp
<div id="dataviz" class="min-h-screen bg-black px-4 md:px-0 py-12">
  <div class="container flex-col md:flex-row flex md:gap-10">
    <div class="dataviz-left md:w-1/2">
      <div class="dataviz-left-header flex-col md:flex-row flex justify-between items-center gap-2 md:gap-0 md:mb-5">
        <span class="text-tvs-orange-1 font-medium text-2xl">Data Viz</span>
        <div class="dataviz-tags">
          @foreach ($dataviz_cats as $d_cat)
            <span class="tag text-white font-thin border border-white rounded-3xl px-3 py-1 inline-block">{{ $d_cat }}</span>
          @endforeach
        </div>
      </div>
      <div id="dataviz_listed">
        @if ($dataviz_items->have_posts())
          @php($d = 1)
          @while ($dataviz_items->have_posts())
            @php($dataviz_items->the_post())
            @if ($d == 1)
              <div class="dataviz_fetured_box py-10 border-b border-b-white">
                <h4 class="text-xl mb-[18px] md:mb-0 md:text-[46px] font-bold text-white">{!! get_the_title() !!}</h4>
                <p class="excerpt font-baijam text-white mb-4 md:mb-0 text-[16px] md:text-2xl font-light">{{get_the_excerpt()}}</p>
                <a href="{{ get_the_permalink() }}" class="hidden md:inline-block read-more text-2xl font-baijam text-white hover:text-tvs-orange-1 font-light">READ MORE</a>
                <img src="{{ get_the_post_thumbnail_url() }}" alt="" class="md:hidden">
              </div>
            @else
              <div class="dataviz_box py-10 flex-col md:flex-row flex gap-5 border-b border-b-white">
                <div class="txt-box md:w-1/2">
                  <h4 class="text-white text-xl font-bold mb-[18px]">{!! get_the_title() !!}</h4>
                  <p class="excerpt font-baijam text-white mb-4 md:mb-0 text-[16px] font-light">{{get_the_excerpt()}}</p>
                </div>
                <div class="img-box md:w-1/2">
                  <div class="box_thumbnail aspect-4/3 bg-cover bg-center" style="background-image: url('{{ get_the_post_thumbnail_url() }}')"></div>
                </div>
              </div>
            @endif
            @php($d++)
          @endwhile
        @endif
        @php(wp_reset_postdata())
      </div>
    </div>
    <div class="dataviz-right hidden md:flex md:w-1/2">
      @if ($dataviz_items->have_posts())
        @php($img_id = $dataviz_items->posts[0]->ID)
        <div id="dataviz_featured_img" class="min-h-[710px] w-full bg-cover bg-center" style="background-image: url({{ get_the_post_thumbnail_url($img_id) }})"></div>
      @endif
    </div>
  </div>
</div>