<article @php(post_class())>
  <div class="post-thumbnail aspect-video w-full h-auto bg-cover mb-5" style="background-image: url({{ get_the_post_thumbnail_url() }})"></div>
  <header>
    <h4 class="entry-title text-[20px] font-medium mb-3 leading-tight">
      <a href="{{ get_permalink() }}">
        {!! $title !!}
      </a>
    </h4>
  </header>

  <div class="entry-summary font-baijam">
    @php(the_excerpt())
  </div>
</article>
