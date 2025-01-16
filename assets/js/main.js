$(document).ready(function () {
  //--Preloader--//
  setTimeout(function () {
      $('.preloader__wrap').fadeToggle();
  }, 1000);
  //--Preloader--//

  // Testimonial Swiper
  const swiper = new Swiper('#swiper-testimonial .swiper', {
      direction: 'horizontal',
      loop: false,
      slidesPerView: 2,
      spaceBetween: 10,
      mousewheel: false,
      watchSlidesProgress: true,
      slideVisibleClass: 'slide-is-visible',
      breakpoints: {
          320: { slidesPerView: 1, spaceBetween: 20 },
          480: { slidesPerView: 1, spaceBetween: 30 },
          768: { slidesPerView: 2, spaceBetween: 40 },
          992: { slidesPerView: 3, spaceBetween: 40 }
      },
      navigation: {
          nextEl: '#swiper-testimonial-next',
          prevEl: '#swiper-testimonial-prev',
      },
  });

  // Project Swiper
  const swiper1 = new Swiper('#proj_swip .swiper', {
      direction: 'horizontal',
      loop: false,
      mousewheel: false,
      slidesPerView: 4,
      spaceBetween: 10,
      watchSlidesProgress: true,
      slideVisibleClass: 'slide-is-visible',
      breakpoints: {
          320: { slidesPerView: 1, spaceBetween: 20 },
          480: { slidesPerView: 1, spaceBetween: 30 },
          768: { slidesPerView: 2, spaceBetween: 40 },
          992: { slidesPerView: 4, spaceBetween: 40 }
      },
      navigation: {
          nextEl: '#proj_swip-next',
          prevEl: '#proj_swip-prev',
      },
  });

  // Premium Swiper
  const swiper_premium = new Swiper('#premium .swiper', {
      direction: 'horizontal',
      loop: true,
      mousewheel: false,
      slidesPerView: 3,
      spaceBetween: 10,
      watchSlidesProgress: true,
      slideVisibleClass: 'slide-is-visible',
      breakpoints: {
          320: { slidesPerView: 1, spaceBetween: 20 },
          480: { slidesPerView: 1, spaceBetween: 30 },
          768: { slidesPerView: 2, spaceBetween: 40 },
          992: { slidesPerView: 3, spaceBetween: 40 }
      },
      navigation: {
          nextEl: '#proj_swip-next',
          prevEl: '#proj_swip-prev',
      },
  });

  // Main Swiper with autoplay
  var swiper2 = new Swiper("#main_swiper .swiper", {
      autoplay: {
          delay: 2000,
          loop: true,
          disableOnInteraction: false,
      },
      watchSlidesProgress: true,
      slideVisibleClass: 'slide-is-visible',
      navigation: {
          nextEl: "#main_swiper-next",
          prevEl: "#main_swiper-prev",
      },
  });
  // Swiper for 'mahi' section
  $(document).ready(function () {
      new Swiper('.swiper-container-mahi', {
          loop: true,
          nextButton: '.swiper-button-next-mahi',
          prevButton: '.swiper-button-next-mahi',
          slidesPerView: 3,
          paginationClickable: true,
          spaceBetween: 20,
          breakpoints: {
              1920: { slidesPerView: 3, spaceBetween: 30 },
              1028: { slidesPerView: 2, spaceBetween: 30 },
              480: { slidesPerView: 1, spaceBetween: 10 }
          }
      });
  });

  // Form Step Navigation (Next/Previous)
  var current_fs, next_fs, previous_fs;

  if ($(".show").hasClass("first-screen")) {
      $(".prev").css({ 'display': 'none' });
  }

  // Next button
 

});
