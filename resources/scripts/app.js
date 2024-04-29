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
  const home_slider_section = document.getElementById('home_slider_section');
  const homepage_top_slider = document.getElementById('home_slider');

  const home_slider = new Swiper(homepage_top_slider, {
    slidesPerView: 3,
    centeredSlides: true,
    loop: true,
    speed: 800,
    spaceBetween: 20,
    //modules: [Navigation],
    navigation: {
      nextEl: '.home-slide-btn.swiper-button-next',
      prevEl: '.home-slide-btn.swiper-button-prev',
    },
    pagination: {
      el: ".home-slide-pagination",
    },
    // thumbs: {
    //   swiper: home_thumbnails,
    // }
  });

  const infographic_slider = new Swiper('#infos_slider', {
    slidesPerView: 5,
    centeredSlides: true,
    loop: true,
    allowTouchMove: false,
    //loopAdditionalSlides: 10,
    // speed: 800,
    spaceBetween: 10,
    navigation: {
      nextEl: ".swiper-button-next.info-next",
      prevEl: ".swiper-button-prev.info-prev",
    },
  });

  //console.log(homepage_top_slider.querySelector('.swiper-slide-active').dataset.backdrop);

  home_slider_section.querySelector('.bottom-layer').style.backgroundImage = 'url("'+homepage_top_slider.querySelector('.swiper-slide-active').dataset.backdrop+'")';

  document.getElementById('hero_title').innerHTML = homepage_top_slider.querySelector('.swiper-slide-active').dataset.title;
  document.getElementById('hero_desc').innerHTML = homepage_top_slider.querySelector('.swiper-slide-active').dataset.desc;

  home_slider.on('slideChangeTransitionStart', function() {
    home_slider_section.querySelector('.bottom-layer').style.opacity = 0;
    home_slider_section.querySelector('.description').style.opacity = 0;
  });

  home_slider.on('slideChangeTransitionEnd', function() {
    let current_backdrop_bg = homepage_top_slider.querySelector('.swiper-slide.swiper-slide-active').dataset.backdrop;
    home_slider_section.querySelector('.bottom-layer').style.backgroundImage = 'url("'+current_backdrop_bg+'")';
    document.getElementById('hero_title').innerHTML = homepage_top_slider.querySelector('.swiper-slide-active').dataset.title;
    document.getElementById('hero_desc').innerHTML = homepage_top_slider.querySelector('.swiper-slide-active').dataset.desc;
    setTimeout(() => {
      home_slider_section.querySelector('.bottom-layer').style.opacity = 1;
      home_slider_section.querySelector('.description').style.opacity = 1;
    }, 50);
  });

  const mainClipPlayer = document.getElementById('clip_player');
  const clipPlaylisted = document.getElementById('clips_listed');

  clipPlaylisted.style.height = mainClipPlayer.offsetHeight+'px';
  //console.log(mainClipPlayer.offsetHeight);

  const reels_slider = new Swiper('#reel_slider', {
    slidesPerView: 4,
    spaceBetween: 20,
  })

  const editors_pick_slider = new Swiper('#editors_pick_slider', {
    slidesPerView: 4.5,
    freeMode: true,
    pagination: {
      el: "#editors_pick_slider .swiper-pagination",
      type: "progressbar",
    },
  });

  const about_btn = document.getElementById('about_btn');
  const readout = document.querySelector('.readout');

  about_btn.addEventListener('mousemove', (e) => {
    const { x,y } = about_btn.getBoundingClientRect();
    about_btn.style.setProperty("--x", e.clientX - x);
    about_btn.style.setProperty("--y", e.clientY - y);
    
    readout.innerText = `
    mouse X: ${e.clientX} mouse Y: ${e.clientY}

    left edge: ${parseInt(x)} top edge: ${parseInt(y)}

    BTN X: ${e.clientX - parseInt(x)} shiny Y: ${e.clientY - parseInt(y)}`;
  });

});

/**
 * @see {@link https://webpack.js.org/api/hot-module-replacement/}
 */
if (import.meta.webpackHot) import.meta.webpackHot.accept(console.error);
