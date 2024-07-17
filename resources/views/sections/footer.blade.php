<footer class="content-info bg-black py-5 md:pr-[60px]">
  <div class="container text-center text-white px-4 xl:px-0">
    <div class="contact py-10 md:py-8 gap-10 md:gap-0 flex flex-col md:flex-row w-full items-center justify-between">
      <div class="flex md:w-auto xl:w-2/6">
        <img src="{{ asset('images/tvs-logo-white-2.png') }}" alt="" class="w-44 lg:w-32 h-auto">
      </div>
      <div class="flex flex-col-reverse lg:flex-row w-auto xl:w-4/6 gap-10 lg:gap-20 xl-gap-0 justify-between items-center md:items-end lg:items-center">
        @if (has_nav_menu('footer_menu'))
          {!! wp_nav_menu(['menu' => 'Footer Menu', 'menu_class' => 'footer-menu flex gap-4 md:gap-7 flex-wrap']) !!}
        @endif
        <div class="social-btn-group flex gap-4 items-center">
          <a href="https://www.facebook.com/ThaiPBS" target="_blank" title="Facebook Thai PBS"><img src="{{ asset('images/facebook.svg') }}" alt="Facebook Page"></a>
          <a href="https://x.com/ThaiPBS" target="_blank" title="X (Twitter)"><img src="{{ asset('images/x-twitter.svg') }}" alt="X (Twitter)"></a>
          <a href="https://www.instagram.com/thaipbs/" target="_blank" title="Instagram"><img src="{{ asset('images/instagram.svg') }}" alt="Instagram"></a>
          <a href="https://www.youtube.com/@ThaiPBS" target="_blank" title="YouTube"><img src="{{ asset('images/youtube.svg') }}" alt="Youtube"></a>
          <a href="https://www.tiktok.com/@ThaiPBS" target="_blank" title="Tiktok"><img src="{{ asset('images/tiktok.svg') }}" alt="Tiktok"></a>
        </div>
      </div>
    </div>
    <hr class="border-t border-[#4C4C4C] mb-5">
    <small class="footer-txt">© Thai Public Broadcasting Service. All Rights Reserved 2024</small>
  </div>
</footer>
{{-- <div id="lightbox" class="flex fixed bg-black/90 w-full h-full z-[99] top-0 left-0 flex-col justify-center">
  <div class="container text-right">
    <button id="close_lightbox" class="text-[32px]"><i class="fa-solid fa-xmark text-white"></i></button>
  </div>
  <img src="" alt="">
</div> --}}
