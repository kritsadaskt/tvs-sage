import domReady from '@roots/sage/client/dom-ready';
// import Swiper JS
import Swiper from 'swiper/bundle';
// import Swiper and modules styles
import 'swiper/css/bundle';

import { gsap } from "gsap";
import { ScrollTrigger } from "gsap/ScrollTrigger";

/**
 * Application entrypoint
 */
domReady(async () => {
  gsap.registerPlugin(ScrollTrigger);
  let panels = gsap.utils.toArray(".panel");
  let tops = panels.map(panel => ScrollTrigger.create({trigger: panel, start: "top top"}));
  panels.forEach((panel, i) => {
    ScrollTrigger.create({
      trigger: panel,
      start: () => panel.offsetHeight < window.innerHeight ? "top top" : "bottom bottom",
      pin: true, 
      pinSpacing: false 
    });
  });

  ScrollTrigger.create({
    snap: {
      snapTo: (progress, self) => {
        let panelStarts = tops.map(st => st.start),
        snapScroll = gsap.utils.snap(panelStarts, self.scroll());
        return gsap.utils.normalize(0, ScrollTrigger.maxScroll(window), snapScroll);
      },
      duration: 0.5
    }
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
