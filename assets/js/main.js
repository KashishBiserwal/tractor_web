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
        slidesPerView: 4,
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
                slidesPerView: 4,
                spaceBetween: 40
            }
        },
        navigation: {
            nextEl: '#proj_swip-next',
            prevEl: '#proj_swip-prev',
        },
    });
    const swiper_premium = new Swiper('#premium .swiper', {
      direction: 'horizontal',
      loop: true,
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


    // const swiper3 = new Swiper('#team_swiper .swiper', {
    //     direction: 'horizontal',
    //     loop: false,
    //     slidesPerView: 5,
    //     spaceBetween: 10,
    //     mousewheel: false,
    //     watchSlidesProgress: true,
    //     slideVisibleClass: 'slide-is-visible',
    //     breakpoints: {
    //         // when window width is >= 320px
    //         320: {
    //             slidesPerView: 1,
    //             spaceBetween: 20
    //         },
    //         // when window width is >= 480px
    //         480: {
    //             slidesPerView: 1,
    //             spaceBetween: 30
    //         },
    //         // when window width is >= 640px
    //         768: {
    //             slidesPerView: 2,
    //             spaceBetween: 40
    //         },
    //         992: {
    //             slidesPerView: 5,
    //             spaceBetween: 40
    //         }
    //     },
    //     navigation: {
    //         nextEl: '#swiper-testimonial-next',
    //         prevEl: '#swiper-testimonial-prev',
    //     },
    // });
});

// navbar

// Other important pens.

// let dropdowns = document.querySelectorAll('.navbar .dropdown-toggler')
// let dropdownIsOpen = false

// // Handle dropdown menues
// if (dropdowns.length) {
//   // Usually I don't recommend doing this (adding many event listeners to elements have the same handler)
//   // Instead use event delegation: https://javascript.info/event-delegation
//   // Why: https://gomakethings.com/why-event-delegation-is-a-better-way-to-listen-for-events-in-vanilla-js
//   // But since we only have two dropdowns, no problem with that. 
//   dropdowns.forEach((dropdown) => {
//     dropdown.addEventListener('click', (event) => {
//       let target = document.querySelector(`#${event.target.dataset.dropdown}`)

//       if (target) {
//         if (target.classList.contains('show')) {
//           target.classList.remove('show')
//           dropdownIsOpen = false
//         } else {
//           target.classList.add('show')
//           dropdownIsOpen = true
//         }
//       }
//     })
//   })
// }

// // Handle closing dropdowns if a user clicked the body
// window.addEventListener('mouseup', (event) => {
//   if (dropdownIsOpen) {
//     dropdowns.forEach((dropdownButton) => {
//       let dropdown = document.querySelector(`#${dropdownButton.dataset.dropdown}`)
//       let targetIsDropdown = dropdown == event.target

//       if (dropdownButton == event.target) {
//         return
//       }

//       if ((!targetIsDropdown) && (!dropdown.contains(event.target))) {
//         dropdown.classList.remove('show')
//       }
//     })
//   }
// })
// main swip
// var swiper = new Swiper('.swiper-5', {
//   navigation: {
//     nextEl: '.swiper-button-next',
//     prevEl: '.swiper-button-prev',
//   },
//   loop: true,
//   autoplay: {
//     delay: 3000,
//     disableOnInteraction: true,
// },
// });


// state 
// const swiper_state = new Swiper(".slider-section-state", {
//   // Optional parameters
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
//     el: ".swiper-pagination-state",
//     dynamicBullets: false,
//     clickable: true
//   },

//   // If we need navigation
//   navigation: {
//     nextEl: ".swiper-button-next-state",
//     prevEl: ".swiper-button-prev-state"
//   },

//   // Responsive breakpoints
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






// var mySwiper = new Swiper(".swiper-container1", {
//   loop: true,
//   slidesPerView: "auto",
//   autoplay: 1000,
//   spaceBetween: 7,
//   slidesPerView: 4,
//   loop: true,
//   centeredSlides: true,
//   pagination: {
//     el: ".swiper-pagination",
//     clickable: true,
//     renderBullet: function(index, className) {
//       return '<span class="' + className + '">' + (index + 1) + "</span>";
//     },
//     navigation: {
//       nextEl: '.swiper-button-next',
//       prevEl: '.swiper-button-prev',
//     }
//   },
//    // Navigation arrows
//     navigation: {
//       nextEl: '.swiper-button-next',
//       prevEl: '.swiper-button-prev',
//     }
// });

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


// datatable brand listing
// $('#example_brand').DataTable({
//   "processing":true,
//    "serverSide":true,
//    "ajax":'fetchbrandData.php',  
// });


// haatbazar sell form

var current_fs, next_fs, previous_fs;

// No BACK button on first screen
if($(".show").hasClass("first-screen")) {
$(".prev").css({ 'display' : 'none' });
}

// Next button
$(".next-button").click(function(){

current_fs = $(this).parent().parent();
next_fs = $(this).parent().parent().next();

$(".prev").css({ 'display' : 'block' });

$(current_fs).removeClass("show");
$(next_fs).addClass("show");

$("#progressbar li").eq($(".card2").index(next_fs)).addClass("active");

current_fs.animate({}, {
step: function() {

current_fs.css({
'display': 'none',
'position': 'relative'
});

next_fs.css({
'display': 'block'
});
}
});
});

// Previous button
$(".prev").click(function(){

current_fs = $(".show");
previous_fs = $(".show").prev();

$(current_fs).removeClass("show");
$(previous_fs).addClass("show");

$(".prev").css({ 'display' : 'block' });
if($(".show").hasClass("first-screen")) {
$(".prev").css({ 'display' : 'none' });
}

$("#progressbar li").eq($(".card2").index(current_fs)).removeClass("active");

current_fs.animate({}, {
step: function() {

current_fs.css({
'display': 'none',
'position': 'relative'
});

previous_fs.css({
'display': 'block'
});
}
});
});


// swiper hatbazar buy inner
// document.addEventListener("DOMContentLoaded", function () {
//   const mySwiper2_wrapper = document.querySelector(".mySwiper2_buy .swiper-wrapper_buy"),
//   mySwiper_container = document.querySelector(".mySwiper_buy"),
//         clone = mySwiper2_wrapper.cloneNode(true);
//   mySwiper_container.appendChild(clone);

//   const swiper_buy = new Swiper(".mySwiper_buy", {
//   loop: true,
//   spaceBetween: 10,
//   slidesPerView: mySwiper2_wrapper.childNodes.length,
//   freeMode: true,
//   watchSlidesProgress: true
//   });

//   const swiper2_buy = new Swiper(".mySwiper2_buy", {
//   autoplay: {
//       delay: 5000,
//       disableOnInteraction: false
//   },
//   slidesPerView: "auto",
//   centeredSlides: true,
//   loop: true,
//   loopedSlides: mySwiper2_wrapper.childNodes.length,
//   spaceBetween: 10,
//   speed: 800,
//   navigation: {
//       nextEl: ".swiper-button-next",
//       prevEl: ".swiper-button-prev"
//   },
//   thumbs: {
//       swiper: swiper
//   }
//   });
// },false);
document.addEventListener("DOMContentLoaded", function () {
  const mySwiper2_wrapper = document.querySelector(".mySwiper2_buy .swiper-wrapper_buy"),
  mySwiper_container = document.querySelector(".mySwiper_buy"),
        clone = mySwiper2_wrapper.cloneNode(true);
  mySwiper_container.appendChild(clone);

  const swiper = new Swiper(".mySwiper_buy", {
  loop: true,
  navigation: {
    nextButton: '.swiper-button-next',
       prevButton: '.swiper-button-prev',
   },
  spaceBetween: 10,
  slidesPerView: mySwiper2_wrapper.childNodes.length,
  freeMode: true,
  watchSlidesProgress: true
  });

  const swiper3 = new Swiper(".mySwiper2_buy", {
  autoplay: {
      delay: 3000,
      disableOnInteraction: false
  },
  slidesPerView: "auto",
  centeredSlides: true,
  loop: true,
  loopedSlides: mySwiper2_wrapper.childNodes.length,
  spaceBetween: 10,
  speed: 800,
  navigation: {
    nextButton: '.swiper-button-next',
       prevButton: '.swiper-button-prev',
   },
  thumbs: {
      swiper: swiper
  }
  });
},false);



// latest sell swiper

// carousal
$("#news-slider").owlCarousel({
  items : 3,
  itemsDesktop:[1199,3],
  itemsDesktopSmall:[980,2],
  itemsMobile : [600,1],
  navigation:true,
  navigationText:["",""],
  pagination:true,
  autoPlay:true
});
const swiper_sell = new Swiper(".slider", {
  // Optional parameters
  centeredSlides: true,
  slidesPerView: 1,
  grabCursor: true,
  freeMode: false,
  loop: true,
  mousewheel: false,
  keyboard: {
    enabled: true
  },

  // Enabled autoplay mode
  autoplay: {
    delay: 2000,
    disableOnInteraction: false
  },

  // If we need pagination
  pagination: {
    el: ".swiper-pagination",
    dynamicBullets: false,
    clickable: true
  },

  // If we need navigation
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev"
  },

  // Responsive breakpoints
  breakpoints: {
    640: {
      slidesPerView: 1.25,
      spaceBetween: 20
    },
    1024: {
      slidesPerView: 2,
      spaceBetween: 20
    }
  }
});

// mahindra brand carousel

// jQuery("#carousel_related").owlCarousel({
//   autoplay: true,
//   rewind: true,
//   margin: 20,
//    /*
//   animateOut: 'fadeOut',
//   animateIn: 'fadeIn',
//   */
//   responsiveClass: true,
//   autoHeight: true,
//   autoplayTimeout: 7000,
//   smartSpeed: 800,
//   nav: true,
//   responsive: {
//     0: {
//       items: 1
//     },

//     600: {
//       items: 3
//     },

//     1024: {
//       items: 4
//     },

//     1366: {
//       items: 4
//     }
//   }
// });


// certified dealers similar brands
// $("#carousel_related_brand").owlCarousel({
//   autoplay: true,
//   rewind: true,
//   margin: 20,
//   responsiveClass: true,
//   autoHeight: true,
//   autoplayTimeout: 7000,
//   smartSpeed: 800,
//   nav: true,
//   responsive: {
//     0: {
//       items: 1
//     },

//     600: {
//       items: 3
//     },

//     1024: {
//       items: 4
//     },

//     1366: {
//       items: 4
//     }
//   }
// });

// $(function() {
//   // Owl Carousel
//   var owl = $(".owl-carousel");
//   owl.owlCarousel({
//     items: 4,
//     margin: 15,
//     loop: true,
//     nav: true
//   });
// });

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


// sell used**********************
var currentTab = 0; // Current tab is set to be the first tab (0)
showTab(currentTab); // Display the current tab

function showTab(n) {
  // This function will display the specified tab of the form...
  var x = document.getElementsByClassName("step_sellused");
  x[n].style.display = "block";
  //... and fix the Previous/Next buttons:
  if (n == 0) {
    document.getElementById("prevBtn_sellused").style.display = "none";
  } else {
    document.getElementById("prevBtn_sellused").style.display = "inline";
  }
  if (n == (x.length - 1)) {
    document.getElementById("nextBtn_sellused").innerHTML = "Submit";
  } else {
    document.getElementById("nextBtn_sellused").innerHTML = "Next";
  }
  //... and run a function that will display the correct step indicator:
  fixStepIndicator(n)
}

function nextPrev(n) {
  // This function will figure out which tab to display
  var x = document.getElementsByClassName("step_sellused");
  // Exit the function if any field in the current tab is invalid:
  if (n == 1 && !validateForm()) return false;
  // Hide the current tab:
  x[currentTab].style.display = "none";
  // Increase or decrease the current tab by 1:
  currentTab = currentTab + n;
  // if you have reached the end of the form...
  if (currentTab >= x.length) {
    // ... the form gets submitted:
    document.getElementById("signUpForm_sellused").submit();
    return false;
  }
  // Otherwise, display the correct tab:
  showTab(currentTab);
}

//  function validateForm(){
//   var x, y, i, valid = true;
//   x = document.getElementsByClassName("step_sellused");
//   y = x[currentTab].getElementsByTagName("input");
//   for (i = 0; i < y.length; i++) {
  
//     if (y[i].value == "") {

//      y[i].className += " invalid";

//       valid = false;
//     }
//   }

//  if (valid) {
//    document.getElementsByClassName("stepIndicator_sellused")[currentTab].className += " finish";
//  }
// return valid;                     
// }

function fixStepIndicator(n) {
  // This function removes the "active" class of all steps...
  var i, x = document.getElementsByClassName("stepIndicator_sellused");
  for (i = 0; i < x.length; i++) {
    x[i].className = x[i].className.replace(" active", "");
  }
  //... and adds the "active" class on the current step:
  x[n].className += " active";
}

/* sell harvester multi-image uplode */
jQuery(document).ready(function () {
  ImgUpload();
});

function ImgUpload() {
  var imgWrap = "";
  var imgArray = [];

  $('.upload__inputfile').each(function () {
    $(this).on('change', function (e) {
      imgWrap = $(this).closest('.upload__box').find('.upload__img-wrap');
      var maxLength = $(this).attr('data-max_length');

      var files = e.target.files;
      var filesArr = Array.prototype.slice.call(files);
      var iterator = 0;
      filesArr.forEach(function (f, index) {

        if (!f.type.match('image.*')) {
          return;
        }

        if (imgArray.length > maxLength) {
          return false
        } else {
          var len = 0;
          for (var i = 0; i < imgArray.length; i++) {
            if (imgArray[i] !== undefined) {
              len++;
            }
          }
          if (len > maxLength) {
            return false;
          } else {
            imgArray.push(f);

            var reader = new FileReader();
            reader.onload = function (e) {
              var html = "<div class='upload__img-box'><div style='background-image: url(" + e.target.result + ")' data-number='" + $(".upload__img-close").length + "' data-file='" + f.name + "' class='img-bg'><div class='upload__img-close'></div></div></div>";
              imgWrap.append(html);
              iterator++;
            }
            reader.readAsDataURL(f);
          }
        }
      });
    });
  });




  $('body').on('click', ".upload__img-close", function (e) {
    var file = $(this).parent().data("file");
    for (var i = 0; i < imgArray.length; i++) {
      if (imgArray[i].name === file) {
        imgArray.splice(i, 1);
        break;
      }
    }
    $(this).parent().parent().remove();
  });
}



