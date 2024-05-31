<article class="post-{{ get_the_ID() }} mb-5">
  <div class="post-thumbnail aspect-video w-full h-auto bg-cover mb-3" style="background-image: url({{ get_the_post_thumbnail_url() }})">
  </div>
  <div class="mb-2">
    <h4 class="entry-title text-[20px] font-medium leading-tight">
      <a href="{{ get_permalink() }}">
        {!! $title !!}
      </a>
    </h4>
  </div>
  <div class="entry-summary font-baijam text-sm">
    @php(the_excerpt())
  </div>
</article>
