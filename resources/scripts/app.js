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
    end: "bottom -150px",
    pin: "#dataviz_featured_img"
  });
  
  // Homepage Slider
  const homepage_top_slider = document.getElementById('home_slider');
  const home_slider_thumbs = document.getElementById('home_slider_thumbs');

  const home_thumbnails = new Swiper(home_slider_thumbs, {
    slidesPerView: 4,
    spaceBetween: 5,
    loop: true,
    watchSlidesProgress: true,
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
});

/**
 * @see {@link https://webpack.js.org/api/hot-module-replacement/}
 */
if (import.meta.webpackHot) import.meta.webpackHot.accept(console.error);
