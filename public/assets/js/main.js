(function ($) {
  "use strict";


  $(window).on('load', function () {
    // Pre-loader
    $('.loader').addClass('completein', 700);
    setTimeout(function () {
      $('.preloader').addClass('complete');
    }, 10);
  });

  jQuery(document).ready(function ($) {
    // Promo Video        
    $('.button-container button').on('click', function () {
      $('.box').addClass('centered');
      setTimeout(function () {
        $('.button-container button').addClass('hide');
        setTimeout(function () {
          $('.box:first-of-type').addClass('scale');
          $('body').addClass('no-scroll');
          setTimeout(function () {
            $('.overlay1').addClass('active');
            bindBodyClick();
          }, 700);
        }, 200);
      }, 500);
    });
    var video = document.getElementById("video1");
    function bindBodyClick() {
      $('.box.centered.scale').on('click', function () {
        video.pause();
        $('.box.centered.scale').removeClass('scale');
        $('.overlay1').removeClass('active');
        setTimeout(function () {
          $('.box').removeClass('centered');
          $('body').removeClass('no-scroll');
          setTimeout(function () {
            $('.button-container button').removeClass('hide');
          }, 300);
        }, 800);
      });
    }

    // Counter           
    $('.counter').counterUp({
      delay: 10,
      time: 1000,
    });

    // Counter           
    $('.grid').isotope({
      itemSelector: '.grid-item',
      percentPosition: true,
      masonry: {
        columnWidth: 1,
        gutter: 20,
      }
    })

    // Password show/hide        
    $('.pas_show').append('<i class="ptxt ti-eye"></i>');
    $(document).on('click', '.pas_show .ptxt', function () {
      $(".pas_show .ptxt").toggleClass('show');
      $(this).prev().attr('type', function (index, attr) { return attr == 'password' ? 'text' : 'password'; });
    });

    // Password show-hide        
    $('.pas_show').append('<i class="ptxt ti-eye"></i>');
    $(document).on('click', '.pas_show .ptxt', function () {
      $(".pas_show .ptxt").toggleClass('show');
      $(this).prev().attr('type', function (index, attr) { return attr == 'password' ? 'text' : 'password'; });
    });

    // Red Star if input is requird        
    $("input[required]").siblings("label").addClass("required");
    $("select[required]").parent().siblings("label").addClass("required");
    $("select[required]").siblings("label").addClass("required");

    // Accordion Card shadow on claik (faq)        
    $('.faq_area .accordion_wrapper_2 .card .btn.btn-link').on('click', function () {
      if ($(this).parent().parent().hasClass('shadow')) {
        $(this).parent().parent().siblings('.card').removeClass('shadow');
        $(this).parent().parent().removeClass('shadow');
      }
      else {
        $(this).parent().parent().siblings('.card').removeClass('shadow');
        $(this).parent().parent().addClass('shadow');
      }
    });

    // Video Popup [colorbox.js]        
    $(".youtube").colorbox({
      iframe: true,
      transition: "elastic",
      innerWidth: 640,
      innerHeight: 409,
      closeButton: false,
      maxWidth: '90%'
    });

    // Hero area 3 animation js using jquery        
    setInterval(function () {
      // add class
      $('.hero_area_3 .swiper-slide-active .layer').addClass('animatedaa');

      // remove class
      $(" .hero_area_3 .swiper-slide-next.slide_1 .layer, .hero_area_3  .swiper-slide-prev  .layer").removeClass('animatedaa');
    });

    // Search Bar        
    $('.search_icon').on('click', function () {
      $('.offcanvas_overlay, .search_bar, .search_bar_2').css({ 'opacity': '1', 'display': 'inline-flex' });
    });

    $('.offcanvas_overlay').on('click', function () {
      $('.offcanvas_overlay, .search_bar, .search_bar_2').css({ 'opacity': '0', 'display': 'none' });
    });

    // Offcanves Menu        
    $('.offcanvas').on('click', function () {
      $('.offcanvas_overlay').css({ 'opacity': '1', 'display': 'inline-flex' });
      $('.offcanvas_menu').css({ 'right': '0' });
    });
    $('.offcanvas_overlay').on('click', function () {
      $('.offcanvas_menu').css({ 'right': '-100%' });
    });
    // Burger Icon        
    $(".burger_icon").on('click', function () {
      $(".mobile_menu").toggleClass(function () {
        return $(".mobile_menu").is('.open_menu, .close_menu') ? 'open_menu close_menu' : 'open_menu';
      });

      $(".stick").toggleClass(function () {
        return $(this).is('.open_menu, .close_menu') ? 'open_menu close_menu' : 'open_menu';
      });
    });

    // Tooltip        
    $('[data-toggle="tooltip"]').tooltip();

    // Mega Menu        
    function checkWidth() {
      var windowsize = $(window).width();
      if (windowsize < 992) {
        $(".hid").removeClass("collapse");
        $(".hid").addClass("collapse");
      }
      if (windowsize > 991) {
        $(".hid").addClass("collapse");
        $(".hid").removeClass("collapse");
      }
    }

    checkWidth();
    $(window).resize(checkWidth);

    // mega menu slider
    // $('#mega_page_slider').carousel({
    //   interval: 2000,
    // });

    var mySwiper = new Swiper('.mega_menu_slide', {
      direction: 'horizontal',
      slidesPerView: 1,
      loop: true,
      centeredSlides: false,
      autoplay: {
        delay: 2000,
        disableOnInteraction: false,
      },
      autoplay: {
        delay: 5000,
      },
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      }
    });

    // Pricing Dropdown        
    if (document.getElementById("chose_plan") != null) {
      document.getElementById('chose_plan').value = document.getElementById('firstItem_plan').innerText;
    }
    $('.select_month_wrapper #chose_plan, .select_month_wrapper .arrow, .select_month_wrapper .split').on('click', function (event) {
      $('.select_month_wrapper .option_list').toggle(200, function () {
        $('.select_month_wrapper .option_list').toggleClass('dropon');
        $('.select_month_wrapper .arrow').toggleClass('reverce');
      });
      event.stopPropagation();
    });

    var listItems1 = document.querySelectorAll(".select_month_wrapper ol li");
    listItems1.forEach(function (item) {
      item.onclick = function (e) {
        document.getElementById('chose_plan').value = this.innerText;
        $('.select_month_wrapper .option_list').toggle(200, function () {
          $('.select_month_wrapper .arrow').removeClass('reverce');
          $('.select_month_wrapper .option_list').removeClass('dropon');

        });
        if ((this).value == 1) {
          $('.tab_wrapper .tab_1').css('opacity', '1');
          $('.tab_wrapper .tab_2').css('opacity', '0');
        }
        else {
          $('.tab_wrapper .tab_1').css('opacity', '0');
          $('.tab_wrapper .tab_2').css('opacity', '1');
        }
      }
    });
    // select dropdown out side click 
    $(":not(.select_month_wrapper #chose_plan, .select_month_wrapper .arrow, .select_month_wrapper .option_list, .select_month_wrapper .split )").on('click', function () {
      $('.select_month_wrapper .option_list').removeClass('dropon').hide();
      $('.select_month_wrapper .arrow').removeClass('reverce');
    });

    // Domain dropdown        
    if (document.getElementById("chose_domain") != null) {
      document.getElementById('chose_domain').value = document.getElementById('firstItem_domain').innerText;
    }
    $('.select_wrapper #chose_domain, .select_wrapper .arrow').on('click', function (event) {
      $('.select_wrapper .option_list').toggle(200, function () {
        $('.select_wrapper .option_list').toggleClass('dropon');
        $('.select_wrapper .arrow').toggleClass('reverce');
      });
      event.stopPropagation();
    });

    var listItems2 = document.querySelectorAll(".select_wrapper ol li");
    listItems2.forEach(function (item) {
      item.onclick = function (e) {
        document.getElementById('chose_domain').value = this.innerText;
        $('.select_wrapper .option_list').toggle(200, function () {
          $('.select_wrapper .arrow').removeClass('reverce');
          $('.select_wrapper .option_list').removeClass('dropon');
        });
      }
    });
    // select dropdown out side click 
    $(":not(.select_wrapper #chose_domain, .select_wrapper .arrow, .select_wrapper .option_list )").on('click', function () {
      $('.select_wrapper .option_list').removeClass('dropon').hide();
      $('.select_wrapper .arrow').removeClass('reverce');
    });

    // Custom dropdown 2      
    $(".custom_select").each(function () {
      var classes = $(this).attr("class"),
        name = $(this).attr("name");
      var template = '<div class="' + classes + '">';
      template += '<div class="custom_select_trigger">' + $(this).attr("data-value") + '</div>';
      template += '<ul class="custom_options">';
      $(this).find("option").each(function () {
        template += '<li class="custom_option ' + $(this).attr("class") + '" data-value="' + $(this).attr("value") + '">' + $(this).html() + '</li>';
      });
      template += '</ul></div>';

      $(this).wrap('<div class="custom_select_wrapper"></div>');
      $(this).hide();
      $(this).after(template);
    });
    $(".custom_select_trigger").on("click", function (event) {
      $('html').on('click', function () {
        $(".custom_select").removeClass("opened");
      });
      $(this).parents(".custom_select").toggleClass("opened");
      event.stopPropagation();
    });
    $(".custom_option").on("click", function () {
      $(this).parents(".custom_select_wrapper").find('#inputservice').val($(this).data("value"));
      $(this).parents(".custom_options").find(".custom_option").removeClass("selection");
      $(this).addClass("selection");
      $(this).parents(".custom_select").removeClass("opened");
      $(this).parents(".custom_select").find(".custom_select_trigger").text($(this).text());
    });

    // Testimonial Carousel 1
    var mySwiper = new Swiper('.testimonial_wrapper.swiper-container', {
      direction: 'horizontal',
      slidesPerView: 3,
      loop: true,
      centeredSlides: true,
      autoplay: {
        delay: 2000,
        disableOnInteraction: false,
      },
      pagination: {
        el: '.swiper-pagination',
        clickable: true,
      },
      breakpoints: {
        992: {
          slidesPerView: 2,
          spaceBetween: 40,
          centeredSlides: false,
        },
        768: {
          slidesPerView: 1,
          spaceBetween: 30,
        }
      }

    });

    // Testimonial Carousel 2
    var mySwiper = new Swiper('.testimonial_wrapper_2.swiper-container', {
      direction: 'horizontal',
      slidesPerView: 3,
      loop: true,
      centeredSlides: true,
      autoplay: {
        delay: 2000,
        disableOnInteraction: false,
      },
      pagination: {
        el: '.swiper-pagination',
        clickable: true,
      },
      breakpoints: {
        992: {
          slidesPerView: 2,
          spaceBetween: 40,
          centeredSlides: false,
        },
        768: {
          slidesPerView: 1,
          spaceBetween: 30,
        }
      }

    });

    // Testimonial Carousel 3
    var mySwiper = new Swiper('.testimonial_wrapper_3.swiper-container', {
      direction: 'horizontal',
      slidesPerView: 1,
      loop: true,
      centeredSlides: true,
      autoplay: {
        delay: 2000,
        disableOnInteraction: false,
      },
      pagination: {
        el: '.swiper-pagination',
        clickable: true,
      }

    });

    //Testimonial Carousel 4
    var mySwiper = new Swiper('.testimonial_area_4', {
      direction: 'horizontal',
      slidesPerView: 1,
      effect: 'fade',
      speed: 900,
      fadeEffect: {
        crossFade: true
      },
      spaceBetween: 30,
      loop: true,
      centeredSlides: false,
      autoplay: {
        delay: 2500,
        disableOnInteraction: false,
      },
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      }

    });


    // Testimonial Carousel 5
    var mySwiper = new Swiper('.testimonial_area_5 .swiper-container', {
      direction: 'horizontal',
      slidesPerView: 2,
      loop: true,
      centeredSlides: false,
      autoplay: {
        delay: 2000,
        disableOnInteraction: false,
      },
      breakpoints: {
        992: {
          slidesPerView: 1,
          centeredSlides: false,
        },
        768: {
          slidesPerView: 1,
          centeredSlides: false,
        }
      }

    });

    // Testimonial Carousel 7
    var mySwiper = new Swiper('.testimonial_area_7 .swiper-container', {
      direction: 'horizontal',
      slidesPerView: 3,
      centeredSlides: true,
      loop: true,
      autoplay: {
        delay: 2000,
        disableOnInteraction: false,
      },
      breakpoints: {
        992: {
          slidesPerView: 1,
          centeredSlides: false,
        },
        768: {
          slidesPerView: 1,
          centeredSlides: false,
        }
      }

    });

    // Testimonial Carousel 8
    var mySwiper = new Swiper('.testimonial_wrapper_8.swiper-container', {
      direction: 'horizontal',
      slidesPerView: 3,
      loop: true,
      centeredSlides: true,
      autoplay: {
        delay: 2000,
        disableOnInteraction: false,
      },
      pagination: {
        el: '.swiper-pagination',
        clickable: true,
      },
      breakpoints: {
        992: {
          slidesPerView: 2,
          spaceBetween: 40,
          centeredSlides: false,
        },
        768: {
          slidesPerView: 1,
          spaceBetween: 30,
        }
      }

    });
    // Testimonial thumbs Carousel 6
    var galleryThumbs = new Swiper('.gallery-thumbs', {
      slidesPerView: 3,
      loop: true,
      centeredSlides: true,
      loopedSlides: 3, //looped slides should be the same
      slideToClickedSlide: true,
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
    });
    var galleryTop = new Swiper('.gallery-top', {
      spaceBetsween: 10,
      loop: true,
      centeredSlides: true,
      loopedSlides: 3, //looped slides should be the same
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
      thumbs: {
        swiper: galleryThumbs,
      },
    });

    // Service Carousel 1, 2, 3
    var mySwiper = new Swiper('.service_carousel', {
      direction: 'horizontal',
      slidesPerView: 2,
      loop: true,
      centeredSlides: false,
      autoplay: {
        delay: 2000,
        disableOnInteraction: false,
      },
      pagination: {
        el: '.swiper-pagination',
        clickable: true,
      },
      breakpoints: {
        992: {
          slidesPerView: 1,
          centeredSlides: false,
        },
        768: {
          slidesPerView: 1,
          centeredSlides: false,
        }
      }
    });

    //  Offer Carousel 1
    var mySwiper = new Swiper('.offer_carousel_1', {
      direction: 'horizontal',
      slidesPerView: 2,
      loop: true,
      centeredSlides: false,
      autoplay: {
        delay: 2000,
        disableOnInteraction: false,
      },
      pagination: {
        el: '.swiper-pagination',
        clickable: true,
      },
      breakpoints: {
        992: {
          slidesPerView: 1,
          centeredSlides: false,
        },
        768: {
          slidesPerView: 1,
          centeredSlides: false,
        }
      }

    });

    // Client Carousel 3, 4, 5
    var mySwiper = new Swiper('.client_area_3 .swiper-container, .client_area_4, .client_area_5 .swiper-container', {
      direction: 'horizontal',
      slidesPerView: 5,
      loop: true,
      centeredSlides: false,
      autoplay: {
        delay: 2000,
        disableOnInteraction: false,
      },
      pagination: {
        el: '.swiper-pagination',
        clickable: false,
      },
      breakpoints: {
        1200: {
          slidesPerView: 4,
          centeredSlides: false,
        },
        992: {
          slidesPerView: 3,
          centeredSlides: false,
        },
        768: {
          slidesPerView: 2,
          centeredSlides: false,
        },
        480: {
          slidesPerView: 1,
          centeredSlides: false,
        }
      }

    });

    // Client Carousel 6
    var mySwiper = new Swiper('.client_area_6 .swiper-container', {
      direction: 'horizontal',
      slidesPerView: 5,
      loop: true,
      centeredSlides: false,
      autoplay: {
        delay: 2000,
        disableOnInteraction: false,
      },
      pagination: {
        el: '.swiper-pagination',
        clickable: true,
      },
      breakpoints: {
        1200: {
          slidesPerView: 4,
          centeredSlides: false,
        },
        992: {
          slidesPerView: 3,
          centeredSlides: false,
        },
        768: {
          slidesPerView: 2,
          centeredSlides: false,
        },
        480: {
          slidesPerView: 1,
          centeredSlides: false,
        }
      }

    });

    // Hero Slider 1(home 3)
    var mySwiper = new Swiper('.hero_area_3 .swiper-container', {
      direction: 'horizontal',
      slidesPerView: 1,
      loop: true,
      centeredSlides: false,
      autoplay: {
        delay: 6666000,
        disableOnInteraction: false,
      },
      pagination: {
        el: '.swiper-pagination',
        clickable: true,
      },
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },

    });

    // Blog Carousel
    var mySwiper = new Swiper('.blog_carousel.swiper-container', {
      direction: 'horizontal',
      slidesPerView: 2,
      loop: true,
      centeredSlides: false,
      pagination: {
        el: '.swiper-pagination',
        clickable: true,
      },
      breakpoints: {
        992: {
          slidesPerView: 1,
          centeredSlides: false,
        },
        768: {
          slidesPerView: 1,
          centeredSlides: false,
        }
      }

    });

    // Blog details video slider
    var mySwiper = new Swiper('.video_slider.swiper-container', {
      direction: 'horizontal',
      slidesPerView: 1,
      loop: true,
      centeredSlides: false,
      autoplay: {
        delay: 2000,
        disableOnInteraction: false,
      },
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
    });

    // Scroll to top
    $(window).on('scroll', function () {
      // declare variable
      var topPos = $(this).scrollTop();
      // if user scrolls down - show scroll to top button
      if (topPos > 300) {
        $('.scrolltop_wrapper').addClass('scrollon');

      }
      else {
        $('.scrolltop_wrapper').removeClass('scrollon');
      }
    });

    function topFunction_2() {
      $('.scrolltop_wrapper').on('click', function () {
        $('html, body').animate({ scrollTop: 0 }, 800);
        return false;
      });
    }
    function topFunction() {
      $('.scrolltop').on('click', function () {
        $('html, body').animate({ scrollTop: 0 }, 800);
        return false;
      });
    }
    topFunction();
    topFunction_2();

    // Radio pricing 4
    function show2() {
      $('#second_toggle').on('click', function () {
        $('.packege_pricing_area_4 .tab_1').css('opacity', '0');
        $('.packege_pricing_area_4 .tab_2').css('opacity', '1');
      });
    }
    function show1() {
      $('#first_toggle').on('click', function () {
        $('.packege_pricing_area_4 .tab_1').css('opacity', '1');
        $('.packege_pricing_area_4 .tab_2').css('opacity', '0');
      });
    }

    show2();
    show1();


  });


}(jQuery));

