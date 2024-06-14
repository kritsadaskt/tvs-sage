<article class="post-{{ get_the_ID() }} mb-5 group/item hover:cursor-pointer">
  <div class="post-thumbnail w-full mb-2 aspect-video bg-cover bg-center" style="background-image: url({{ get_the_post_thumbnail_url() }})"></div>
  <div>
    <h4 class="post-title mb-2 text-[20px] font-semibold">
      <a href="{{ get_permalink() }}" title="{{ get_the_title() }}" class="xl:group-hover/item:text-tvs-orange-1 transition-colors duration-200">
        {!! $title !!}
      </a>
    </h4>
  </div>

  <div class="post-ecerpt text-sm">
    {!! get_the_excerpt() !!}
  </div>
</article>
