import domReady from '@roots/sage/client/dom-ready';
// import Swiper JS
import Swiper from 'swiper/bundle';
// import Swiper and modules styles
import 'swiper/css/bundle';
import 'animate.css';

import { gsap } from "gsap";
import { ScrollTrigger } from "gsap/ScrollTrigger";

/**
 * Application entrypoint
 */
domReady(async () => {
  gsap.registerPlugin(ScrollTrigger);

  ScrollTrigger.create({
    trigger: '#headline', 
    start: "top top",
    pin: true,
    pinSpacing: false,
  });

  ScrollTrigger.create({
    trigger: '#editor_pick', 
    start: "top top",
    end: "bottom bottom",
    pin: true,
    pinSpacing: false,
  });

  ScrollTrigger.create({
    trigger: "#dataviz",
    start: "top top", 
    end: "bottom bottom",
    pin: "#dataviz_featured_img"
  });

  // Homepage Slider
  const homepage_top_slider = document.getElementById('home_slider');
  const home_slider_thumbs = document.getElementById('home_slider_thumbs');

  const home_thumbnails = new Swiper(home_slider_thumbs, {
    slidesPerView: 2.2,
    loop: true,
    watchSlidesProgress: true,
    breakpoints: {
      640: {
        slidesPerView: 4,
        spaceBetween: 5,
      }
    }
  });

  const home_slider = new Swiper(homepage_top_slider, {
    slidesPerView: 1,
    loop: true,
    speed: 800,
    //modules: [Navigation, Pagination],
    navigation: {
      nextEl: '.home-slide-btn.swiper-button-next',
      prevEl: '.home-slide-btn.swiper-button-prev',
    },
    thumbs: {
      swiper: home_thumbnails,
    }
  });

  const infos_slider  = new Swiper('#infos_slides', {
    slidesPerView: 4,
    spaceBetween: 15,
    loop: true,
    navigation: {
      nextEl: '#infos_slides_nav .swiper-button-next',
      prevEl: '#infos_slides_nav .swiper-button-prev',
    },
  });

  const classToggle = function(el, class0, class1) {
    el.classList.toggle(class0);
    el.classList.toggle(class1);
  }

  infos_slider.on('slideChangeTransitionEnd', (sl)=>{
    let active_sl = document.querySelector('#infos_slides .swiper-slide-active');
    let info_txt = document.querySelector('.info-text-shows');
    classToggle(info_txt, 'animate__flipInX', 'animate__flipOutX');
    setTimeout(()=>{ 
      document.querySelector('.info-text-shows').innerText = active_sl.dataset.title;
      setTimeout(()=>{
        classToggle(info_txt, 'animate__flipInX', 'animate__flipOutX');
      }, 100);
    }, 500);
    document.getElementById('info_img').src = active_sl.dataset.img;
  });

});

/**
 * @see {@link https://webpack.js.org/api/hot-module-replacement/}
 */
if (import.meta.webpackHot) import.meta.webpackHot.accept(console.error);
