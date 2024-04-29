@php
  $cat = get_field('topic_buttons_group', get_the_ID());
  array_push($cat, array('button_title'=>'About Us', 'link'=>'', 'description'=>'Lorem Ipsum vovemcoven.','background_img'=>''));
  print_r($cat);
@endphp
<div id="headline" class="bg-black items-center flex px-4 md:px-0 py-16">
  <div class="container">
    <div class="headline-text-box flex flex-col gap-3 text-center mb-10">
      <h3 class="text-[22px] md:text-[26px] text-white font-normal leading-tight">เปิดประสบการณ์ใหม่ของการเปลี่ยนข้อมูล<br class="hidden md:block">มหาศาล เป็นเรื่องเล่าเข้าใจง่ายด้วย</h3>
      <h3 class="text-[36px] md:text-[42px] text-tvs-orange-1 font-semibold">Data Visualization (Data Viz)</h3>
    </div>
    <div id="cat_boxes" class="grid grid-cols-3 grid-rows-2 border-l border-t border-[#484848]">
      @foreach ($cat as $box)

        @if ($loop->last)
          <a id="about_btn" href="{{ $box['link'] }}" class="box group text-white h-[200px] bg-[#121212] border-b border-r border-[#484848] bg-cover bg-center flex flex-col justify-between p-5 overflow-hidden">
            <svg class="self-end z-[1]" width="28" height="31" viewBox="0 0 28 31" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M26.25 15.5C26.25 11.125 23.8984 7.13281 20.125 4.94531C16.2969 2.70312 11.6484 2.70312 7.875 4.94531C4.04688 7.13281 1.75 11.125 1.75 15.5C1.75 19.9297 4.04688 23.9219 7.875 26.1094C11.6484 28.3516 16.2969 28.3516 20.125 26.1094C23.8984 23.9219 26.25 19.9297 26.25 15.5ZM0 15.5C0 10.5234 2.625 5.92969 7 3.41406C11.3203 0.898438 16.625 0.898438 21 3.41406C25.3203 5.92969 28 10.5234 28 15.5C28 20.5312 25.3203 25.125 21 27.6406C16.625 30.1562 11.3203 30.1562 7 27.6406C2.625 25.125 0 20.5312 0 15.5ZM15.4766 21.4062C15.1484 21.7344 14.5469 21.7344 14.2188 21.4062C13.8906 21.0781 13.8906 20.4766 14.2188 20.1484L17.9922 16.375H7.875C7.38281 16.375 7 15.9922 7 15.5C7 15.0625 7.38281 14.625 7.875 14.625H17.9922L14.2188 10.9062C13.8906 10.5781 13.8906 9.97656 14.2188 9.64844C14.5469 9.32031 15.1484 9.32031 15.4766 9.64844L20.7266 14.8984C21.0547 15.2266 21.0547 15.8281 20.7266 16.1562L15.4766 21.4062Z" fill="#898989"/>
              </svg>
            <div class="text-box">
              <h4 class="text-4xl font-semibold text-tvs-orange-1 mb-2" style="background-image: url('{{ $box['background_img'] }}')">{{ $box['button_title'] }}</h4>
              <p class="text-white font-baijam font-light">{{ $box['description'] }}</p>
            </div>
          </a>
        @else
          <a href="{{ $box['link'] }}" class="box group text-white h-[200px] bg-[#121212] border-b border-r border-[#484848] bg-cover bg-center" style="background-image: url('{{ $box['background_img'] }}')">
            <div class="inner-link bg-[#121212] h-full w-full p-5 opacity-100 group-hover:opacity-0 transition-opacity duration-500 flex flex-col justify-between">
              <svg class="self-end" width="28" height="31" viewBox="0 0 28 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M26.25 15.5C26.25 11.125 23.8984 7.13281 20.125 4.94531C16.2969 2.70312 11.6484 2.70312 7.875 4.94531C4.04688 7.13281 1.75 11.125 1.75 15.5C1.75 19.9297 4.04688 23.9219 7.875 26.1094C11.6484 28.3516 16.2969 28.3516 20.125 26.1094C23.8984 23.9219 26.25 19.9297 26.25 15.5ZM0 15.5C0 10.5234 2.625 5.92969 7 3.41406C11.3203 0.898438 16.625 0.898438 21 3.41406C25.3203 5.92969 28 10.5234 28 15.5C28 20.5312 25.3203 25.125 21 27.6406C16.625 30.1562 11.3203 30.1562 7 27.6406C2.625 25.125 0 20.5312 0 15.5ZM15.4766 21.4062C15.1484 21.7344 14.5469 21.7344 14.2188 21.4062C13.8906 21.0781 13.8906 20.4766 14.2188 20.1484L17.9922 16.375H7.875C7.38281 16.375 7 15.9922 7 15.5C7 15.0625 7.38281 14.625 7.875 14.625H17.9922L14.2188 10.9062C13.8906 10.5781 13.8906 9.97656 14.2188 9.64844C14.5469 9.32031 15.1484 9.32031 15.4766 9.64844L20.7266 14.8984C21.0547 15.2266 21.0547 15.8281 20.7266 16.1562L15.4766 21.4062Z" fill="#898989"/>
                </svg>              
              <div class="text-box">
                <h4 class="text-4xl font-semibold bg-[length:425px_199px] bg-[-20px_110px] bg-clip-text text-transparent mb-2" style="background-image: url('{{ $box['background_img'] }}')">{{ $box['button_title'] }}</h4>
                <p class="text-white font-baijam font-light">{{ $box['description'] }}</p>
              </div>
            </div>
          </a>
        @endif  
        
      @endforeach
    </div>
    
  </div>
</div>