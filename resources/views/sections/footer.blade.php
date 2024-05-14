<footer class="content-info bg-black py-5 md:pr-[60px]">
  <div class="container text-center text-white px-4 xl:px-0">
    <div class="contact py-10 md:py-8 gap-10 md:gap-0 flex flex-col md:flex-row w-full items-center justify-between">
      <div class="flex md:w-auto xl:w-2/6">
        <img src="{{ asset('images/tvs-logo-white-2.png') }}" alt="" class="w-44 lg:w-32 h-auto">
      </div>
      <div class="flex flex-col-reverse lg:flex-row w-auto xl:w-4/6 gap-10 lg:gap-20 xl-gap-0 justify-between items-center md:items-end lg:items-center">
        @if (has_nav_menu('footer_menu'))
          {!! wp_nav_menu(['menu' => 'Footer Menu', 'menu_class' => 'footer-menu flex gap-4 md:gap-7']) !!}
        @endif
        <div class="social-btn-group flex gap-4 items-center">
          <a href="" title="Facebook Page"><img src="{{ asset('images/facebook.svg') }}" alt="Facebook Page"></a>
          <a href="" title="X (Twitter)"><img src="{{ asset('images/x-twitter.svg') }}" alt="X (Twitter)"></a>
          <a href="" title="Instagram"><img src="{{ asset('images/instagram.svg') }}" alt="Instagram"></a>
          <a href="" title="Youtube"><img src="{{ asset('images/youtube.svg') }}" alt="Youtube"></a>
          <a href="" title="Tiktok"><img src="{{ asset('images/tiktok.svg') }}" alt="Tiktok"></a>
        </div>
      </div>
    </div>
    <hr class="border-t border-[#4C4C4C] mb-5">
    <small class="footer-txt">© Thai Public Broadcasting Service. All Rights Reserved 2021</small>
  </div>
</footer>
