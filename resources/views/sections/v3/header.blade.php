@php
  $custom_logo_id = get_theme_mod( 'custom_logo' );
  $logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
@endphp
<header class="banner fixed w-full top-0 left-0 z-10 py-4 px-2 md:pl-[60px] md:pr-0 md:py-7 group bg-gradient-to-b from-black to-transparent">
  <div class="container mx-auto flex justify-between items-center">
    <div class="logo">
      <a href="" class="site-logo w-[220px] block group-[.mini]:w-[150px] transition-all">
        <img src="{!! $logo[0] !!}" alt="{{ get_bloginfo('name') }}" class="site-logo-img">
      </a>
    </div>
  </div>
</header>
