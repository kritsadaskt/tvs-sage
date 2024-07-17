<section class="min-h-[350px] flex justify-center items-end bg-tvs-orange-1 relative pb-20 px-4 lg:px-0">
  <div class="background-overlay absolute w-full h-full grayscale opacity-30 bg-cover blur-sm top-0 left-0" style="background-image: url({{ get_the_post_thumbnail_url() }})"></div>
  <div class="container">
    <h1 class="text-center text-[30px] leading-tight lg:text-4xl drop-shadow-xl text-white font-semibold relative">{!! $title !!}</h1>
  </div>
</section>
<section class="content-body-wrapper">
  <div class="container">
    @php(the_content())
  </div>
</section>