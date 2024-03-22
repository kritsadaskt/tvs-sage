@php
//$dataviz_items = new WP_Query(array('post_type'=>'post', 'category_name'=>'equality', 'posts_per_page'=>5));
$dataviz_items = get_field('top_stories', get_the_ID());
$dataviz_cats = array('Green', 'Urban', 'Culture', 'General', 'Equality');
@endphp
<div id="dataviz" class="bg-black px-4 md:px-0 relative">
  <div id="dataviz_backdrop" class="absolute top-0 left-0 w-full h-full bg-cover opacity-10 bg-fixed"></div>
  <div class="container flex-col md:flex-row flex relative">
    <div class="dataviz-left md:w-2/5 md:px-6 backdrop-blur-md">
      <div id="dataviz_left_header" class="flex flex-col py-5 gap-2">
        <span class="text-tvs-orange-1 font-medium text-2xl">Data Viz</span>
        <div class="dataviz-tags">
          @foreach ($dataviz_cats as $d_cat)
            <span class="tag text-white hover:text-black hover:bg-white transition-all cursor-pointer font-light border border-white rounded-3xl px-3 py-1 mb-2 md:mb-0 leading-none inline-block">{{ $d_cat }}</span>
          @endforeach
        </div>
      </div>
      <div id="dataviz_listed" class="x overflow-y-scroll">
        @foreach ($dataviz_items as $item)
          <div class="dataviz_box py-6 flex-col md:flex-row flex gap-5 [&:not(:last-child)]:border-b border-b-white">
            <div class="txt-box md:w-1/2 flex flex-col justify-between">
              <h4 class="text-white text-xl font-medium mb-[18px]">{!! get_the_title($item) !!}</h4>
              <p class="post-meta uppercase text-[#B8B8B8] text-[12px] flex gap-2 items-center">
                <span>
                  @php
                    $cats = get_the_category( $item );
                    print_r($cats[0]->name);
                  @endphp
                </span>
                <span class="circle-o bg-[#B8B8B8] w-[5px] h-[5px] rounded flex"></span>
                <span>
                  {{ get_the_date( 'm M y', $item ) }}
                </span>
              </p>
            </div>
            <div class="img-box md:w-1/2">
              <div class="box_thumbnail aspect-video bg-cover bg-center" style="background-image: url('{{ get_the_post_thumbnail_url($item) }}')"></div>
            </div>
          </div>
        @endforeach
      </div>
    </div>
    <div class="dataviz-right hidden md:flex md:w-3/5 px-9">
      <div id="dataviz_featured_img" class="w-full h-[700px] bg-cover bg-center" style="background-image: url({{ get_the_post_thumbnail_url($dataviz_items[0]) }})" data-bgimg="{{ get_the_post_thumbnail_url($dataviz_items[0]) }}"></div>
    </div>
  </div>
</div>