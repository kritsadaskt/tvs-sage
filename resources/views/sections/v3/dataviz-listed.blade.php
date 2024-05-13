@php
  $dataviz_listed = '';
  if (get_field('dataviz_highlights', get_the_ID())) {
    $dataviz_listed = get_field('dataviz_highlights', get_the_ID());
  }
@endphp

<div id="dataviz_highlight" class="min-h-fit bg-white pt-20 pb-11">
  <div class="container flex justify-between items-center mb-12">
    <h2 class="text-[32px] font-semibold border-l-[19px] border-tvs-orange-1 pl-3">DATA VIZ HIGHLIGHT</h2>
    <ul class="dataviz-highlight-nav flex gap-3">
      <li><button class="tablinks active" onclick="changeDataVizHighlight(event, 'all')">All</button></li>
      @foreach ($dataviz_listed as $nav_item)
        @php
          $cat = $nav_item['selected_cat'];
        @endphp
        <li><button class="tablinks" onclick="changeDataVizHighlight(event, '{{ strtolower($nav_item['tab_name']) }}')">{{ $nav_item['tab_name'] }}</button></li>
      @endforeach
    </ul>
  </div>
  <div class="container">
    <div id="all_tab_content" class="tabcontent" style="display: block;">
      <div class="grid grid-cols-4 gap-4">
      @php
        $all_items = new WP_Query(array('post_type' => 'post', 'posts_per_page' => 8));
        $posts = $all_items->posts;
      @endphp
      @foreach ($posts as $post)
        <div class="dataviz-highlight-card aspect-video bg-cover" style="background-image: url({{ get_the_post_thumbnail_url($post->ID) }})">
          <h4>{!! $post->post_title !!}</h4>
        </div>
      @endforeach
      </div>
    </div>

    {{-- Other Tabs --}}
    @foreach ($dataviz_listed as $cat_box)
      <div id="{{ strtolower($cat_box['tab_name']) }}_tab_content" class="tabcontent">
        @php
          $cat_items = new WP_Query(array('cat' => $cat_box['selected_cat'], 'posts_per_page' => 8));
          $cat_posts = $cat_items->posts;
        @endphp
        @if (count($cat_posts) > 0)
          <div class="grid grid-cols-4 gap-4">
            @foreach ($cat_posts as $post)
              <div class="dataviz-highlight-card aspect-video bg-cover" style="background-image: url({{ get_the_post_thumbnail_url($post->ID) }})">
                <h4>{!! $post->post_title !!}</h4>
              </div>
            @endforeach
          </div>
        @else
          <p class="text-center">ไม่พบบทความที่เกี่ยวข้อง</p>
        @endif
      </div>
    @endforeach

  </div>
</div>