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

  //console.log(homepage_top_slider.querySelector('.swiper-slide-active').dataset.backdrop);

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

  // Homepage Video Functions

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
    //console.log(el.dataset.vdoTitle);
    // clipThumb.forEach((sib)=> {
    //   sib.classList.remove('playing');
    // });
    // el.classList.add('playing');
  }

  // const video_thumbs_slider = new Swiper('#clips_listed', {
  //   slidesPerView: 2.2,
  //   spaceBetween: 8,
  //   breakpoints: {
  //     1024: {
  //       slidesPerView: 3.5,
  //       spaceBetween: 10,
  //       direction: "vertical",
  //     }
  //   }
  // })

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

  const about_btn = document.getElementById('about_btn');
  //const readout = document.querySelector('.readout');

  if (about_btn) {
    about_btn.addEventListener('mousemove', (e) => {
      const { x,y } = about_btn.getBoundingClientRect();
      about_btn.style.setProperty("--x", e.clientX - x);
      about_btn.style.setProperty("--y", e.clientY - y);
    });
  }

  ScrollTrigger.create({
    trigger: "body", 
    start: "top -120", 
    toggleClass: {
      targets: "header",
      className: "mini"
    }
  });

  if (window.innerWidth >= 992) {
    ScrollTrigger.create({
      trigger: "#scroll_1",
      start: "bottom bottom+=1000",
      //markers: true,
      //end: `bottom+=${headlineH}`,
      pin: true,
      pinSpacing: false,
    });
  }

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

var player;
if (document.getElementById('player')) {
  var initialVideoId = document.getElementById('player').dataset.videoId;
}
window.onYouTubeIframeAPIReady = function () {
  //console.log('YT api ready');
  player = new YT.Player('player', {
    // height: '360',
    // width: '640',
    videoId: initialVideoId, // Initial video ID retrieved from data attribute
    // playerVars: {
    //   'autoplay': 1, // Autoplay the video
    //   'controls': 1, // Show player controls
    //   // Add any additional player parameters as needed
    // },
    //events: {
      //'onReady': onPlayerReady,
      //You can add more event listeners if needed
    //}
  });
}

// window.onPlayerReady = function(event) {
//   //console.log('ready');
//   event.target.playVideo();
// }

var tag = document.createElement('script');
//console.log('loading youtube api..');
tag.src = "https://www.youtube.com/iframe_api";
var firstScriptTag = document.getElementsByTagName('script')[0];
firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);
console.log('YT api loaded.');

/**
 * @see {@link https://webpack.js.org/api/hot-module-replacement/}
 */
if (import.meta.webpackHot) import.meta.webpackHot.accept(console.error);
