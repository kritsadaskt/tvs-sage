import domReady from '@roots/sage/client/dom-ready';
// import Swiper JS
import Swiper from 'swiper';
import { Navigation, Pagination } from 'swiper/modules';
// import Swiper and modules styles
import 'swiper/css';
import 'swiper/css/navigation';
import 'swiper/css/pagination';

/**
 * Application entrypoint
 */
domReady(async () => {
  // Homepage Slider
  const homepage_top_slider = document.getElementById('home_slider');
  const home_slider = new Swiper(homepage_top_slider, {
    slidesPerView: 1,
    loop: true,
    modules: [Navigation, Pagination],
    navigation: {
      nextEl: '.home-slide-btn.swiper-button-next',
      prevEl: '.home-slide-btn.swiper-button-prev',
    },
    pagination: {
      el: '.swiper-pagination',
    }
  });
});

/**
 * @see {@link https://webpack.js.org/api/hot-module-replacement/}
 */
if (import.meta.webpackHot) import.meta.webpackHot.accept(console.error);
