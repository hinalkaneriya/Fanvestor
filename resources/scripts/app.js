import 'jquery';
import {domReady} from '@roots/sage/client';
import AOS from 'aos';
import Swiper from 'swiper/bundle';
import { each } from 'jquery';


/**
 * app.main
 */
const main = async (err) => {
  if (err) {
    // handle hmr errors
    console.error(err);
  }

  jQuery(document).ready(function(){
    AOS.init({
      duration: 1000
    });

    var lightbox = lity
    jQuery(document).on('click', '[data-lightbox]', lity);
  });


  jQuery(document).ready(function($){
    jQuery("body").removeClass("fp-watermark");

      // var rellax = new Rellax('.rellax');
  });

  jQuery(function () {
      var galleryTop = new Swiper(".gallery-top", {
        direction: "horizontal",
        loop: true,
        spaceBetween: 10,
        slidesPerView: 1,
        navigation: {
          nextEl: ".swiper-button-next",
          prevEl: ".swiper-button-prev"
        },
        pagination: {
          el: '.swiper-pagination',
          clickable: true,
        },
        keyboard: {
          enabled: true,
        },
        thumbs: {
          swiper: galleryThumbs
        }
      });

      var galleryThumbs = new Swiper(".gallery-thumbs", {
        centeredSlides: true,
        centeredSlidesBounds: true, 
        loop: true,
        direction: "horizontal",
        spaceBetween: 10,
        slidesPerView: 3,
        freeMode: false,
        watchSlidesVisibility: true,
        watchSlidesProgress: true,
        watchOverflow: true,
        breakpoints: {
         991: {
            direction: "vertical",
            slidesPerView: 3,
            spaceBetween: 30
          }
        }
      });

      galleryTop.on("slideChangeTransitionStart", function () {
        galleryThumbs.slideTo(galleryTop.activeIndex);
      });
      galleryThumbs.on("transitionStart", function () {
        galleryTop.slideTo(galleryThumbs.activeIndex);
      });
  });


  jQuery(document).ready(function($){
      $(window).scroll(function(){
          if($(this).scrollTop() > 200){
              $('header').addClass('sticky')
          } else{
              $('header').removeClass('sticky')
          }
      });

      $( ".timelinelist" ).hover(
        function() {
          $( this ).addClass( "blink" );
        }, function() {
          $( this ).removeClass( "blink" );
        }
      );
    
    
      $(window).scroll(function(){
        if($(this).scrollTop() > 1200){
          $('.remove-scroll').css("opacity","0");
        }
      });
    


      $('.hamburguer').click(function(){
          $('.full-menu').toggleClass('active')
          $('.hamburguer').toggleClass('close-hamburguer')
          $('body').toggleClass('stop-scroll')
      });

      $("#open").click(function(){
        $("#a").css("display","block");
        $("#b").css("display","block");
      });


      $(".cancel").click(function(){
            $("#a").fadeOut();
            $("#b").fadeOut();
      });


      var btn = document.querySelector('.background-gradient')
      btn.onmousemove = function (e) {
        var x = e.pageX - btn.offsetLeft
        var y = e.pageY - btn.offsetTop
        btn.style.setProperty('--x', x + 'px')
        btn.style.setProperty('--y', y + 'px')
      }
  });


  jQuery(document).ready(function(){
    jQuery('.team-card-content').click(function(){
      jQuery('.overlay', this).addClass("active");
      jQuery(this).siblings('.close-icon').css("display","block");
    });
  
   
  
    jQuery('.close-icon').click(function(){
      // jQuery('.overlay').removeClass("active");
      // jQuery(this).find('.overlay').removeClass("active");
      jQuery(this).parent().find('.overlay').removeClass("active");
      jQuery(this).css("display","none");
    });

  });


  jQuery(document).ready(function() {
    // jQuery('.acc-container .acc:nth-child(1) .acc-head').addClass('active');
    // jQuery('.acc-container .acc:nth-child(1) .acc-content').slideDown();
    jQuery('.acc-head').on('click', function() {
        if(jQuery(this).hasClass('active')) {
          jQuery(this).siblings('.acc-content').slideUp();
          jQuery(this).removeClass('active');
        }
        else {
          jQuery('.acc-content').slideUp();
          jQuery('.acc-head').removeClass('active');
          jQuery(this).siblings('.acc-content').slideToggle();
          jQuery(this).toggleClass('active');
        }
    });     
    });


jQuery(document).ready(function() {
  if(jQuery(window).width() >= 1080){
    const scrollUpItem = gsap.utils.toArray('.scroll-up');
    const scrollDownItem = gsap.utils.toArray('.scroll-down');

    let tl = gsap.timeline({
      scrollTrigger: {
        trigger: '.sec-5',
        pin: '.wrapper',
        pinnedContainer: ".wrapper",
        scrub: 3,
        start: '-500 top',
        end: () => "+=" + 200,
        markers: false,
      }
    });


    tl.from(scrollUpItem, {
      xPercent: 500,
      opacity: 0,
    })
    tl.from(scrollDownItem, {
      opacity: 0,
      xPercent: -500,
    }, 0)
  }
});


};

/**
 * Initialize
 *
 * @see https://webpack.js.org/api/hot-module-replacement
 */
domReady(main);
import.meta.webpackHot?.accept(main);
