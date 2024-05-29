@extends('layouts.app')

@section('content')
  @if (! have_posts())
    <section id="notfound" class="h-[90vh] bg-tvs-orange-1 flex items-center">
      <div class="container text-center">
        <div class="animate-box flex justify-center">
          <script src="https://unpkg.com/@dotlottie/player-component@latest/dist/dotlottie-player.mjs" type="module"></script>
          <dotlottie-player src="https://lottie.host/3d18b4bf-1645-4c46-9fa8-d9841fde2e66/AltPe7ZxLU.json" background="transparent" speed="1" style="width: 350px; height: 350px;" loop autoplay></dotlottie-player>
        </div>
        <h2 class="text-3xl text-white">ไม่พบหน้าที่คุณเรียกหา</h2>
        <p class="text-white">กรุณาลองใหม่อีกครั้ง หรือ <a class="underline" href="https://thevisual.thaipbs.or.th/" title="The Visual by ThaiPBS Home">กลับไปที่หน้าแรก</a></p>
      </div>
    </section>  
  @endif
@endsection
