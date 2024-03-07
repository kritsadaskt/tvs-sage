@php
  $custom_logo_id = get_theme_mod( 'custom_logo' );
  $logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
@endphp
<header class="banner absolute w-full top-0 left-0 z-10 py-5">
  <div class="container mx-auto flex justify-between items-center">
    <div class="logo">
      <a href="" class="site-logo w-[200px] block">
        <img src="{!! $logo[0] !!}" alt="{{ get_bloginfo('name') }}" class="site-logo-img">
      </a>
    </div>
    <div class="search-btn">
      <button id="search_btn">
        <svg width="23" height="23" viewBox="0 0 23 23" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M15.8125 9.6875C15.8125 7.23828 14.4805 5.00391 12.375 3.75781C10.2266 2.51172 7.60547 2.51172 5.5 3.75781C3.35156 5.00391 2.0625 7.23828 2.0625 9.6875C2.0625 12.1797 3.35156 14.4141 5.5 15.6602C7.60547 16.9062 10.2266 16.9062 12.375 15.6602C14.4805 14.4141 15.8125 12.1797 15.8125 9.6875ZM14.4805 16.7344C12.9336 17.9375 11 18.625 8.9375 18.625C3.99609 18.625 0 14.6289 0 9.6875C0 4.78906 3.99609 0.75 8.9375 0.75C13.8359 0.75 17.875 4.78906 17.875 9.6875C17.875 11.793 17.1445 13.7266 15.9414 15.2734L21.6992 20.9883C22.0859 21.418 22.0859 22.0625 21.6992 22.4492C21.2695 22.8789 20.625 22.8789 20.2383 22.4492L14.4805 16.7344Z" fill="white"/>
          </svg>
      </button>
    </div>
  </div>
</header>
