<div id="left_sidebar" class="fixed w-[60px] h-20 md:h-screen bg-tvs-dark-2 right-0 top-0 z-10 flex items-center md:items-start justify-center p-5 md:pt-8">
  <div class="sidebar_buttons flex flex-col gap-4">
    <button id="toggle_menu">
      <svg width="20" height="17" viewBox="0 0 20 17" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M0 1.53125C0 0.972656 0.429688 0.5 1.03125 0.5H18.2188C18.7773 0.5 19.25 0.972656 19.25 1.53125C19.25 2.13281 18.7773 2.5625 18.2188 2.5625H1.03125C0.429688 2.5625 0 2.13281 0 1.53125ZM0 8.40625C0 7.84766 0.429688 7.375 1.03125 7.375H18.2188C18.7773 7.375 19.25 7.84766 19.25 8.40625C19.25 9.00781 18.7773 9.4375 18.2188 9.4375H1.03125C0.429688 9.4375 0 9.00781 0 8.40625ZM19.25 15.2812C19.25 15.8828 18.7773 16.3125 18.2188 16.3125H1.03125C0.429688 16.3125 0 15.8828 0 15.2812C0 14.7227 0.429688 14.25 1.03125 14.25H18.2188C18.7773 14.25 19.25 14.7227 19.25 15.2812Z" fill="white"/></svg>
    </button>
    <div class="search-btn">
      <button id="search_btn">
        <svg width="23" height="23" viewBox="0 0 23 23" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M15.8125 9.6875C15.8125 7.23828 14.4805 5.00391 12.375 3.75781C10.2266 2.51172 7.60547 2.51172 5.5 3.75781C3.35156 5.00391 2.0625 7.23828 2.0625 9.6875C2.0625 12.1797 3.35156 14.4141 5.5 15.6602C7.60547 16.9062 10.2266 16.9062 12.375 15.6602C14.4805 14.4141 15.8125 12.1797 15.8125 9.6875ZM14.4805 16.7344C12.9336 17.9375 11 18.625 8.9375 18.625C3.99609 18.625 0 14.6289 0 9.6875C0 4.78906 3.99609 0.75 8.9375 0.75C13.8359 0.75 17.875 4.78906 17.875 9.6875C17.875 11.793 17.1445 13.7266 15.9414 15.2734L21.6992 20.9883C22.0859 21.418 22.0859 22.0625 21.6992 22.4492C21.2695 22.8789 20.625 22.8789 20.2383 22.4492L14.4805 16.7344Z" fill="white"/>
          </svg>
      </button>
    </div>
  </div>
  <div class="side-panel hidden">
    @if (has_nav_menu('primary_navigation'))
      <nav class="nav-primary" aria-label="{{ wp_get_nav_menu_name('primary_navigation') }}">
        {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav', 'echo' => false]) !!}
      </nav>
    @endif
  </div>
</div>