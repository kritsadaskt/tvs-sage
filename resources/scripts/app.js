import domReady from '@roots/sage/client/dom-ready';
// import Swiper JS
import Swiper from 'swiper/bundle';
// import Swiper and modules styles
import 'swiper/css/bundle';

import { gsap } from "gsap";
import { ScrollTrigger } from "gsap/ScrollTrigger";

gsap.registerPlugin(ScrollTrigger);

/**
 * Application entrypoint
 */
domReady(async () => {

  // RUN ON HOME PAGE
  if (document.body.classList.contains('home')) {
    const home_slider_section = document.getElementById('home_slider_section');
    const homepage_top_slider = document.getElementById('home_slider');

    const home_slider = new Swiper(homepage_top_slider, {
      slidesPerView: 3,
      centeredSlides: true,
      loop: true,
      speed: 800,
      spaceBetween: 20,
      navigation: {
        nextEl: '.home-slide-btn.swiper-button-next',
        prevEl: '.home-slide-btn.swiper-button-prev',
      },
      pagination: {
        el: ".home-slide-pagination",
      },
    });

    const infographic_slider = new Swiper('#infos_slider', {
      effect: 'coverflow',
      centeredSlides: true,
      slidesPerView: 1.2,
      loop: true,
      coverflowEffect: {
        rotate: 0,
        stretch: 100,
        depth: 100,
        modifier: 2,
        slideShadows: true,
      },
      pagination: {
        el: ".swiper-pagination.info-navi",
      },
      breakpoints: {
        1024: {
          slidesPerView: 3,
          effect: 'coverflow',
          coverflowEffect: {
            depth: 100,
            stretch: 0,
          },
          centeredSlides: true,
          loop: true,
          navigation: {
            nextEl: ".info-navi .swiper-button-next",
            prevEl: ".info-navi .swiper-button-prev",
          },
        }
      }
    });

    if (home_slider_section) {

      home_slider_section.querySelector('.bottom-layer').style.backgroundImage = 'url("'+homepage_top_slider.querySelector('.swiper-slide-active').dataset.backdrop+'")';
  
      document.getElementById('hero_title').innerHTML = homepage_top_slider.querySelector('.swiper-slide-active').dataset.title;
      document.getElementById('hero_desc').innerHTML = homepage_top_slider.querySelector('.swiper-slide-active').dataset.desc;
      //console.log(homepage_top_slider.querySelector('.swiper-slide-active').dataset.link);
      document.getElementById('slide_active_link').href = homepage_top_slider.querySelector('.swiper-slide-active').dataset.link;
  
      home_slider.on('slideChangeTransitionStart', function() {
        home_slider_section.querySelector('.bottom-layer').style.opacity = 0;
        home_slider_section.querySelector('.description').style.opacity = 0;
      });
  
      home_slider.on('slideChangeTransitionEnd', function() {
        let current_backdrop_bg = homepage_top_slider.querySelector('.swiper-slide.swiper-slide-active').dataset.backdrop;
        home_slider_section.querySelector('.bottom-layer').style.backgroundImage = 'url("'+current_backdrop_bg+'")';
        document.getElementById('hero_title').innerHTML = homepage_top_slider.querySelector('.swiper-slide-active').dataset.title;
        document.getElementById('hero_desc').innerHTML = homepage_top_slider.querySelector('.swiper-slide-active').dataset.desc;
        document.getElementById('slide_active_link').href = homepage_top_slider.querySelector('.swiper-slide-active').dataset.link;
        setTimeout(() => {
          home_slider_section.querySelector('.bottom-layer').style.opacity = 1;
          home_slider_section.querySelector('.description').style.opacity = 1;
        }, 50);
      });
    }
  
    const mainClipPlayer = document.getElementById('clip_player');
    const clipPlaylisted = document.getElementById('clips_listed');
  
    if (clipPlaylisted) {
      if (window.innerWidth >= 992) {
        clipPlaylisted.style.height = mainClipPlayer.offsetHeight+'px';
      }
    }
  
    const reels_slider = new Swiper('#reel_slider', {
      slidesPerView: 2.5,
      spaceBetween: 10,
      breakpoints: {
        1024: {
          slidesPerView: 4.5,
          spaceBetween: 20,
        }
      }
    })
  
    const editors_pick_slider = new Swiper('#editors_pick_slider', {
      slidesPerView: 4.5,
      freeMode: true,
      pagination: {
        el: "#editors_pick_slider .swiper-pagination",
        type: "progressbar",
      },
    });
  
    gsap.utils.toArray('.section-header').forEach(el=>{
      gsap.from(el, {
        y: 100,
        opacity: 0,
        scrollTrigger: {
          trigger: el,
          start: 'top 100%',
          end: 'bottom top',
        }
      })
    });
  
    const dataviz_card = gsap.utils.toArray('.dataviz-highlight-card');
    gsap.from( dataviz_card, {
      scale: 0.8,
      opacity: 0,
      stagger: 0.1,
      scrollTrigger: {
        trigger: '#dataviz_highlight',
        start: 'top center',
      }
    });
  
    const about_btn = document.getElementById('about_btn');
  
    if (about_btn) {
      about_btn.addEventListener('mousemove', (e) => {
        const { x,y } = about_btn.getBoundingClientRect();
        about_btn.style.setProperty("--x", e.clientX - x);
        about_btn.style.setProperty("--y", e.clientY - y);
      });
    }
  
    if (window.innerWidth >= 992) {
      ScrollTrigger.create({
        trigger: "#headline",
        start: "top top",
        pin: true,
        pinSpacing: false,
      });
    }

    const headline = gsap.timeline({
      scrollTrigger: {
        trigger: '#headline',
        start: 'top center'
      }
    });

    headline.from('.headline-text-box h3', { opacity: 0, y: 30, duration: 1, ease: 'back.in'})
          .from('.headline-text-box p', { opacity: 0, y: 40, duration: 0.7, ease: 'back.inOut'})
          .from('#cat_boxes', { opacity: 0, y: 40, duration: 0.7, ease: 'back' });
    let editor_p = gsap.timeline({
      scrollTrigger: {
        trigger: '#editor_pick',
        start: 'top bottom',
      }
    });
  
    const hl_listed = document.querySelectorAll('.highlight-listed a');
  
    editor_p.from('#editors_pick_backdrop video', { scale: 0.7, opacity: 0, duration: 1 })
    .from('#edtors_pick_info', { y: 350 })
    .from('#edtors_pick_listed', { xPercent: -100 });
  
    let hl_articles = gsap.timeline({
      scrollTrigger: {
        trigger: '#highlight_articles',
        start: 'top center+=300px'
      }
    });
  
    hl_articles.from('.hl-content-wrapper h4', { opacity: 0, y: 50 })
    .from('.hl-content-wrapper h3', { opacity:0 , y: 40 })
    .from(hl_listed, { opacity: 0, stagger: 0.4, y: 60 })
    .from('.see-this-topic-btn', { scale: 0.7, opacity: 0 });
  
    document.changeDataVizHighlight = function(evt, tabName) {
      //console.log(tabName);
      // Declare all variables
      var i, tabcontent, tablinks;
      var tabName = tabName+'_tab_content';
      console.log(tabName);
    
      // Get all elements with class="tabcontent" and hide them
      tabcontent = document.getElementsByClassName("tabcontent");
      for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
      }
    
      // Get all elements with class="tablinks" and remove the class "active"
      tablinks = document.getElementsByClassName("tablinks");
      for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
      }
    
      // Show the current tab, and add an "active" class to the button that opened the tab
      document.getElementById(tabName).style.display = "block";
      evt.currentTarget.className += " active";
    }

    // Video Section
    const vdo_sec = gsap.timeline({
      scrollTrigger: {
        trigger: '#videos',
        start: 'top center'
      }
    });


    gsap.from('#clip_player', {
      opacity: 0,
      x: -60,
      delay: 0.3,
      scrollTrigger: {
        trigger: '#videos',
        start: 'top center',
      }
    });

    gsap.from('#clips_listed', {
      opacity: 0,
      x: 60,
      delay: 0.3,
      scrollTrigger: {
        trigger: '#videos',
        start: 'top center',
      }
    });

    const reels = gsap.utils.toArray('#reel_slider .reel-item');
    gsap.from(reels, {
      opacity: 0,
      stagger: 0.4,
      scrollTrigger: {
        trigger: '#reel_slider',
        start: 'top bottom'
      }
    });
    gsap.from('#reels .view-all-btn-wrapper', {
      opacity: 0,
      y: 30,
      scrollTrigger: {
        trigger: '#videos',
        start: 'bottom bottom'
      }
    });
  }

  // GLOBAL SCRIPTS
  //=====================

  // Site Header
  const mainHeaderAnim = gsap.from('header.banner', {
    yPercent: -100,
    paused: true,
    duration: 0.3
  }).progress(1);

  ScrollTrigger.create({
    start: 'top top',
    end: 'max',
    onUpdate: (self) => {
      self.direction === -1 ? mainHeaderAnim.play() : mainHeaderAnim.reverse();
    }
  });

  // Search Button
  document.querySelector('.search-btn').addEventListener('click', (e) => {
    document.getElementById('search_panel').style.display = 'block';
    //document.getElementById('search_panel').classList.add('animate__fadeIn');
  });

  document.getElementById('close_search_panel').addEventListener('click', (e) => {
    document.getElementById('search_panel').classList.remove('animate__fadeIn');
    document.getElementById('search_panel').classList.add('animate__fadeOut');
    setTimeout(() => {
      document.getElementById('search_panel').style.display = 'none';
      document.getElementById('search_panel').classList.remove('animate__fadeOut');
      document.getElementById('search_panel').classList.add('animate__fadeIn');
    }, 300);
  });

  const menu_toggler = document.getElementById('toggle_menu');
  const menu_pane = document.getElementById('menu_pane');
  const menu_close = document.getElementById('close_menu_panel');

  menu_toggler.addEventListener('click', (e)=>{
    menu_pane.classList.toggle('open');
  });
  menu_close.addEventListener('click', (e)=>{
    menu_pane.classList.toggle('open');
  });

});

// VIDEOS 

window.set_main_video = function(el, vdo_url) {
  player.cueVideoById(vdo_url);

  // Set active thumb
  let clipThumb = Array.from(el.parentNode.children);
  clipThumb.forEach((clip)=>{
    clip.classList.remove('playing');
  });

  el.classList.add('playing');
  const playerContent = document.querySelector('#clip_player .content-box');
  playerContent.classList.add('animate__fadeOut');
  setTimeout(() => {
    document.querySelector('.content-box .clip_title').innerHTML = el.dataset.vdoTitle;
    document.querySelector('.content-box .clip_desc').innerHTML = el.dataset.vdoDesc;
    setTimeout(()=> {
      playerContent.classList.remove('animate__fadeOut')
    }, 400);
  }, 550);
}

var player;
if (document.getElementById('player')) {
  var initialVideoId = document.getElementById('player').dataset.videoId;
}

window.onYouTubeIframeAPIReady = function () {
  player = new YT.Player('player', {
    videoId: initialVideoId, // Initial video ID retrieved from data attribute
  });
}

var tag = document.createElement('script');
tag.src = "https://www.youtube.com/iframe_api";
var firstScriptTag = document.getElementsByTagName('script')[0];
firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

/**
 * @see {@link https://webpack.js.org/api/hot-module-replacement/}
 */
if (import.meta.webpackHot) import.meta.webpackHot.accept(console.error);
