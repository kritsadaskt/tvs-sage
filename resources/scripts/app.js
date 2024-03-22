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

  let panels = gsap.utils.toArray(".panel");

  panels.forEach((panel, i) => {
    ScrollTrigger.create({
      trigger: panel,
      //start: () => panel.offsetHeight < window.innerHeight ? "top top" : "bottom bottom", // if it's shorter than the viewport, we prefer to pin it at the top
      pin: true, 
      pinSpacing: false 
    });
  });

  // ScrollTrigger.create({
  //   trigger: '#headline', 
  //   start: "top top",
  //   pin: true,
  //   pinSpacing: false,
  // });

  // ScrollTrigger.create({
  //   trigger: '#editor_pick', 
  //   start: "top top",
  //   end: "bottom bottom",
  //   pin: true,
  //   pinSpacing: false,
  // });

  // ScrollTrigger.create({
  //   trigger: "#dataviz",
  //   start: "top top", 
  //   end: "bottom bottom",
  //   pin: "#dataviz_featured_img"
  // });

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
    pagination: {
      el: "#infos_slides .swiper-pagination",
      type: "progressbar",
    },
  });

  const classToggle = function(el, class0, class1) {
    el.classList.toggle(class0);
    el.classList.toggle(class1);
  }

  infos_slider.on('slideChangeTransitionEnd', (sl)=>{
    let active_sl = document.querySelector('#infos_slides .swiper-slide-active');
    let info_txt = document.querySelector('.info-text-shows');
    classToggle(info_txt, 'animate__fadeIn', 'animate__fadeOut');
    setTimeout(()=>{ 
      document.querySelector('.info-text-shows').innerText = active_sl.dataset.title;
      setTimeout(()=>{
        classToggle(info_txt, 'animate__fadeIn', 'animate__fadeOut');
      }, 100);
    }, 300);
    document.getElementById('info_img').src = active_sl.dataset.img;
  });

  home_slider.on('slideChangeTransitionStart', (sl)=> {
    let active_sl = document.querySelector('#home_slider .swiper-slide-active');
    let hero_slides = document.querySelectorAll('.main-slide');
    
    hero_slides.forEach((sli)=>{
      sli.classList.remove('animate_bg');
    });

    active_sl.classList.add('animate_bg');

  });

  // Set Data Viz Listed height
  const dataviz_sec = document.getElementById('dataviz');
  if (dataviz_sec) {
    let thumb_h = document.getElementById('dataviz_featured_img').offsetHeight;
    if (thumb_h) {
      let k = document.getElementById('dataviz_left_header').offsetHeight;
      document.getElementById('dataviz_listed').style.height = (thumb_h - k) + 'px';
    }
    let thumb_img = document.getElementById('dataviz_featured_img').dataset.bgimg;
    document.getElementById('dataviz_backdrop').style.backgroundImage = 'url('+thumb_img+')';
  }

});

/**
 * @see {@link https://webpack.js.org/api/hot-module-replacement/}
 */
if (import.meta.webpackHot) import.meta.webpackHot.accept(console.error);
