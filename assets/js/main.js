$(document).ready(function () {
    //--Preloader--//
    setTimeout(function () {
        $('.preloader__wrap').fadeToggle();
    }, 1000);
    //--Preloader--//


    const swiper = new Swiper('#swiper-testimonial .swiper', {
        direction: 'horizontal',
        loop: false,
        slidesPerView: 2,
        spaceBetween: 10,
        mousewheel: false,
        watchSlidesProgress: true,
        slideVisibleClass: 'slide-is-visible',
        breakpoints: {
            // when window width is >= 320px
            320: {
                slidesPerView: 1,
                spaceBetween: 20
            },
            // when window width is >= 480px
            480: {
                slidesPerView: 1,
                spaceBetween: 30
            },
            // when window width is >= 640px
            768: {
                slidesPerView: 2,
                spaceBetween: 40
            },
            992: {
                slidesPerView: 3,
                spaceBetween: 40
            }
        },
        navigation: {
            nextEl: '#swiper-testimonial-next',
            prevEl: '#swiper-testimonial-prev',
        },
    });

    const swiper1 = new Swiper('#proj_swip .swiper', {
        direction: 'horizontal',
        loop: false,
        mousewheel: false,
        slidesPerView: 3,
        spaceBetween: 10,
        watchSlidesProgress: true,
        slideVisibleClass: 'slide-is-visible',
        // Responsive breakpoints
        breakpoints: {
            // when window width is >= 320px
            320: {
                slidesPerView: 1,
                spaceBetween: 20
            },
            // when window width is >= 480px
            480: {
                slidesPerView: 1,
                spaceBetween: 30
            },
            // when window width is >= 640px
            768: {
                slidesPerView: 2,
                spaceBetween: 40
            },
            992: {
                slidesPerView: 3,
                spaceBetween: 40
            }
        },
        navigation: {
            nextEl: '#proj_swip-next',
            prevEl: '#proj_swip-prev',
        },
    });

   

    $(".nav-item").click(function () {
        $(this).addClass("active").siblings().removeClass("active");
    });

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


    const swiper3 = new Swiper('#team_swiper .swiper', {
        direction: 'horizontal',
        loop: false,
        slidesPerView: 5,
        spaceBetween: 10,
        mousewheel: false,
        watchSlidesProgress: true,
        slideVisibleClass: 'slide-is-visible',
        breakpoints: {
            // when window width is >= 320px
            320: {
                slidesPerView: 1,
                spaceBetween: 20
            },
            // when window width is >= 480px
            480: {
                slidesPerView: 1,
                spaceBetween: 30
            },
            // when window width is >= 640px
            768: {
                slidesPerView: 2,
                spaceBetween: 40
            },
            992: {
                slidesPerView: 5,
                spaceBetween: 40
            }
        },
        navigation: {
            nextEl: '#swiper-testimonial-next',
            prevEl: '#swiper-testimonial-prev',
        },
    });
});

// navbar

// Other important pens.

let dropdowns = document.querySelectorAll('.navbar .dropdown-toggler')
let dropdownIsOpen = false

// Handle dropdown menues
if (dropdowns.length) {
  // Usually I don't recommend doing this (adding many event listeners to elements have the same handler)
  // Instead use event delegation: https://javascript.info/event-delegation
  // Why: https://gomakethings.com/why-event-delegation-is-a-better-way-to-listen-for-events-in-vanilla-js
  // But since we only have two dropdowns, no problem with that. 
  dropdowns.forEach((dropdown) => {
    dropdown.addEventListener('click', (event) => {
      let target = document.querySelector(`#${event.target.dataset.dropdown}`)

      if (target) {
        if (target.classList.contains('show')) {
          target.classList.remove('show')
          dropdownIsOpen = false
        } else {
          target.classList.add('show')
          dropdownIsOpen = true
        }
      }
    })
  })
}

// Handle closing dropdowns if a user clicked the body
window.addEventListener('mouseup', (event) => {
  if (dropdownIsOpen) {
    dropdowns.forEach((dropdownButton) => {
      let dropdown = document.querySelector(`#${dropdownButton.dataset.dropdown}`)
      let targetIsDropdown = dropdown == event.target

      if (dropdownButton == event.target) {
        return
      }

      if ((!targetIsDropdown) && (!dropdown.contains(event.target))) {
        dropdown.classList.remove('show')
      }
    })
  }
})
// main swip
var swiper = new Swiper('.swiper-5', {
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },
  loop: true,
  autoplay: {
    delay: 3000,
    disableOnInteraction: true,
},
});

// let dropdowdns = document.querySelectorAll('.dropdown-toggle')
// dropdowns.forEach((dd)=>{
//     dd.addEventListener('click', function (e) {
//         var el = this.nextElementSibling
//         el.style.display = el.style.display==='block'?'none':'block'
//     })
// })


// var mySwiper = new Swiper ('.swiper-5', {
//   // Optional parameters
//   pagination: '.swiper-pagination',
//   paginationClickable: true,
//   nextButton: '.swiper-button-next',
//   prevButton: '.swiper-button-prev',
//   spaceBetween: 0,
//   parallax: true,
//   autoplay: 3000,
//   speed: 400,
//   autoplayDisableOnInteraction: false
// })


// brand swip
// var mySwiper3 = new Swiper('.swiper-container',{
//   pagination: '.pagination',
//   loop:true,
//   autoplay: 1000,
//   paginationClickable: true
// })
// $('.swiper-container').on('mouseenter', function(e){
//   console.log('stop autoplay');
//   mySwiper3.stopAutoplay();
// })
// $('.swiper-container').on('mouseleave', function(e){
//   console.log('start autoplay');
//   mySwiper3.startAutoplay();
// })

var mySwiper = new Swiper(".swiper-container1", {
  // If swiper loop is true set photoswipe counterEl: false (line 175 her)
  loop: true,
  /* slidesPerView || auto - if you want to set width by css like flickity.js layout - in this case width:80% by CSS */
  slidesPerView: "auto",
  // autoplay: true,
  autoplay: 1000,
  spaceBetween: 7,
  slidesPerView: 4,
  loop: true,
  centeredSlides: true,
  // If we need pagination
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
    renderBullet: function(index, className) {
      return '<span class="' + className + '">' + (index + 1) + "</span>";
    },
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    }
  },
   // Navigation arrows
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    }
});

// implements
// const swiper5 = new Swiper(".swiper-5", {
  
//   centeredSlides: true,
//   slidesPerView: 1,
//   grabCursor: true,
//   freeMode: false,
//   loop: true,

//   mousewheel: false,
//   keyboard: {
//     enabled: true
//   },

//   // Enabled autoplay mode
//   autoplay: {
//     delay: 3000,
//     disableOnInteraction: false
//   },

//   // If we need pagination
//   pagination: {
//     el: ".swiper-pagination",
//     dynamicBullets: false,
//     clickable: true
//   },

//   // If we need navigation
//   navigation: {
//     nextEl: ".swiper-button-next",
//     prevEl: ".swiper-button-prev"
//   },

// //   // Responsive breakpoints
//   breakpoints: {
//     640: {
//       slidesPerView: 1.25,
//       spaceBetween: 20
//     },
//     1024: {
//       slidesPerView: 2,
//       spaceBetween: 20
//     }
//   }
// });

// mahindra-inner
$(document).ready(function() {
  // Swiper: Slider
      new Swiper('.swiper-container-mahi', {
          loop: true,
          nextButton: '.swiper-button-next-mahi',
          prevButton: '.swiper-button-next-mahi',
          slidesPerView: 3,
          paginationClickable: true,
          spaceBetween: 20,
          breakpoints: {
              1920: {
                  slidesPerView: 3,
                  spaceBetween: 30
              },
              1028: {
                  slidesPerView: 2,
                  spaceBetween: 30
              },
              480: {
                  slidesPerView: 1,
                  spaceBetween: 10
              }
          }
      });
  });

  // login user

  $('#verify-otp').hide();
$('#request-otp').on('click',function(){
  $('#sign-in').hide();
  $('#verify-otp').show();
});
$('.fa-chevron-left').on('click',function(){
  $('#sign-in').show();
  $('#verify-otp').hide();
});

// profile user


var readURL = function(input) {
  if (input.files && input.files[0]) {
      var reader = new FileReader();

      reader.onload = function (e) {
          $('.profile-pic').attr('src', e.target.result);
      }

      reader.readAsDataURL(input.files[0]);
  }
}


// admin profile
function readURL(input) {
  if (input.files && input.files[0]) {
      var reader = new FileReader();
      reader.onload = function(e) {
          $('#imagePreview').css('background-image', 'url('+e.target.result +')');
          $('#imagePreview').hide();
          $('#imagePreview').fadeIn(650);
      }
      reader.readAsDataURL(input.files[0]);
  }
}
$("#imageUpload").change(function() {
  readURL(this);
});





// Open links in mobiles
// function handleSmallScreens() {
//   document.querySelector('.navbar-toggler')
//     .addEventListener('click', () => {
//       let navbarMenu = document.querySelector('.navbar-menu')

//       if (!navbarMenu.classList.contains('active')) {
//         navbarMenu.classList.add('active')
//       } else {
//         navbarMenu.classList.remove('active')
//       }
//     })
// }

// handleSmallScreens()


  

