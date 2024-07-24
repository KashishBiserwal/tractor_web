<!DOCTYPE html>
<html lang="en">
<head>
  <?php
include 'includes/headertag.php';
   include 'includes/header.php';
  // include 'includes/footertag.php';
   
   ?> 
<script> var APIBaseURL = "<?php echo $APIBaseURL; ?>";</script>
<script> var baseUrl = "<?php echo $baseUrl; ?>";</script>
    <script src="<?php $baseUrl; ?>model/certified_dealers_inner.js"></script>
    <script src="<?php $baseUrl; ?>model/State_dist_tehsil.js"></script>

</head>
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-6Z38E658LD"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-6Z38E658LD');
</script>
<style>
    .text-truncate {
    overflow: hidden;
    white-space: nowrap;
    text-overflow: ellipsis;
   
    }
    </style>
<body>
    <section class="bg-light mt-3">
      <div class="container mt-4 pt-4">
        <div class="mt-5 pt-5">
          <span class="mt-4 pt-4 ">
          <a href="index.php" class="text-decoration-none header-link px-1">Home <i class="fa-solid fa-chevron-right px-1"></i></a>
          <a href="certified_dealers.php" class="text-decoration-none header-link px-1">Certified Dealers <i class="fa-solid fa-chevron-right px-1"></i></a>
          <span class="text-dark" id=""></span>
        </div>
      </div>
    </section>
    
<section>
  <div class="container">
    <div class="row mt-2">
      <div class="col-12 col-sm-6 col-lg-6 col-md-6">
        <div>
          <h4 id="brand_main"></h4>
        </div>
        <div>
          <div class="swiper swiper_buy mySwiper2_buy">
            <div class="swiper-wrapper swiper-wrapper_buy">
              <div class=" swiper-slide swiper-slide_buy">
                <!-- <img class="img_buy" src="assets/images/437-1632718440.webp" /> -->
              </div>
            </div>
          </div>
          <div thumbsSlider="" class="swiper mySwiper_buy" style="height:50px; width: 43%;" id="swip_img"></div>
        </div>
      </div>
      <div class="col-12 col-sm-6 col-lg-6 col-md-6 py-2">
        <table class="mt-5 table table-border">
          <div class="col-12 mt-2">
            <tr>
              <div class="col-12 col-sm-6 col-lg-6 col-md-6">
                 <td style="width:25%;">Brand</td>
               </div>
               <div class="col-12 col-sm-6 col-lg-6 col-md-6">
                <td><a href="" class="text-decoration-none" id="brand_second"></a></td>
              </div>
            </tr>
          </div>
          <div class="col-12 mt-2">
            <tr>
              <div class="col-12 col-sm-6 col-lg-6 col-md-6">
                <td>Address</td>
              </div>
              <div class="col-12 col-sm-6 col-lg-6 col-md-6">
                <td id="location"></td>
              </div>
            </tr>
          </div>
          <div class="col-12 my-2">
            <tr>
              <div class="col-12 col-sm-6 col-lg-6 col-md-6">
                <td>Email</td>
              </div>
              <div class="col-12 col-sm-6 col-lg-6 col-md-6 ">
                <td id="email_id"></td>
              </div>
            </tr>
          </div>
                
          <div class="col-12 my-2">
            <tr>
              <div class="col-12 col-sm-6 col-lg-6 col-md-6">
                <td>Contact</td>
              </div>
              <div class="col-12 col-sm-6 col-lg-6 col-md-6">
                <td id="mob_number"></td>
              </div>
            </tr>
          </div>
                
          <div class="col-12">
            <tr>
              <div class="col-12 col-sm-6 col-lg-6 col-md-6">
                <td>State</td>
              </div>
              <div class="col-12 col-sm-6 col-lg-6 col-md-6">
                <td id="mystate"></td>
              </div>
            </tr>
          </div>
                
          <div class="col-12">
            <tr>
              <div class="col-12 col-sm-6 col-lg-6 col-md-6">
                <td>District</td>
              </div>
              <div class="col-12 col-sm-6 col-lg-6 col-md-6">
                <td id="mydistrict"></td>
              </div>
            </tr>
          </div>
        </table>
        <div class="text-center mt-4">
          <div class="row">
            <div class="col-lg-5 col-md-5 col-sm-5">
              <button type="button" id="certified_dlr_rcb_btn" class="btn btn-success btn-block w-100 justify-content-end" data-bs-toggle="modal" data-bs-target="#staticBackdrop3">Request Call Back</button>                                
            </div>
            <div class="col-lg-7 col-md-7 col-sm-7">
              <a href="become_certified.php" class="text-decoration-none">
                <div class="">
                  <button type="button" class="btn btn-success btn-block d-flex justify-content-end">Become Certified Dealer</button>
                </div>
              </a>
            </div>
          </div>
    </div>
  </div>      
</section>           
  
    
    <!-- MODAL  REQUEST CALL BACK -->
    <section>
      <div class="modal fade" id="staticBackdrop3" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title ms-1" id="staticBackdropLabel">Request Call Back</h5>
              <button type="button" class="btn-close btn-success" data-bs-dismiss="modal" aria-label="Close"><img src="assets/images/close.png" class="w-25"></button>
            </div>
            <!-- MODAL BODY -->
            <div class="modal-body">
              <form id="dealership_enq_from" class="bg-light" action="" method="POST" >
                <div class="row justify-content-center">
                  <div class="col- col-sm-6 col-lg-6 col-md-6" hidden>
                    <label class="text-dark">id Name<span class="text-danger">*</span></label>
                    <input type="text" class="form-control py-2" for="idUser"  id="enquiry_type_id" value="16" name="first_name" placeholder="Enter First Name">
                    <small></small>
                  </div>
                  <div class="col-12 col-lg-6 col-md-6 col-sm-6 " hidden>
                    <label for="name" class="form-label fw-bold text-dark"> <i class="fa-regular fa-user"></i> product_id</label>
                    <input type="text" class="form-control" id="product_id" value="">
                  </div>
                  <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                    <div class="mt-2">
                      <label class="form-label  fw-bold text-dark"> <i class="fa-regular fa-user"></i> First Name</label>
                      <input type="text" class="form-control" id="f_name" name="f_name">
                    </div>
                  </div>
                  <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                    <div class="mt-2">
                      <label class="form-label fw-bold  text-dark"> <i class="fa-regular fa-user"></i> Last Name</label>
                      <input type="text" class="form-control" id="l_name" name="l_name">
                    </div>
                  </div>
                  <div class="col-12 col-lg-12 col-md-12 col-sm-12">
                    <div class="mt-2">
                      <label class="form-label  fw-bold text-dark"><i class="fa fa-phone" aria-hidden="true"></i> Mobile Number</label>
                        <input type="text" class="form-control" id="mob_num" name="mob_num">
                    </div>
                  </div>
                  <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                    <label for="yr_state" class="form-label text-dark fw-bold"> <i class="fas fa-location"></i> State</label>
                    <select class="form-select py-2 state-dropdown" id="_state" name="_state"aria-label=".form-select-lg example">
                     
                    </select>
                  </div>
                  <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                    <label for="yr_dist" class="form-label  fw-bold text-dark"><i class="fa-solid fa-location-dot"></i> District</label>
                    <select class="form-select py-2 district-dropdown" id="_district" name="_district" aria-label=".form-select-lg example">
                   
                    </select>
                  </div>
                  <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                    <label for="tehsil" class="form-label fw-bold mt-1 text-dark"> Tehsil</label>
                    <select class="form-select py-2 tehsil-dropdown " id="_tehsil" name="_tehsil"aria-label=".form-select-lg example">
                      
                    </select>
                  </div>
                  <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                    <label for="tehsil" class="form-label fw-bold  mt-1 text-dark">Brand</label>
                        <select class="form-select py-2" aria-label="Default select example" id="_brand" name="_brand">
                                                
                        </select>
                      </div>
                  </div>
                  <div class="text-center my-3">
                    <button type="button" id="delership_enq_btn" class="btn btn-success px-5 w-100 " data-bs-dismiss="modal">Submit</button>         
                  </div>        
                  <p class="mb-0 text-center">By proceeding ahead you expressly agree to the Bharat Tractors <a href="#" class="text-decoration-none" target="_blank" title="terms and conditions">terms and conditions*</a></p>
                </div>
              </form>                                       
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Modal -->
<div class="modal fade" id="get_OTP_btn" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header bg-success">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Verify Your OTP</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><img src="assets/images/close.png" class=" w-100"></button>
                </div>
                <div class="modal-body">
                    <form id="otp_form">
                        <div class=" col-12 input-group">
                        <div class="col-12" hidden>
                                <label for="Mobile" class=" text-dark float-start pl-2">Enter OTP</label>
                                <input type="text" class="form-control text-dark" placeholder="Enter OTP" id="Mobile"name="Mobile">
                            </div>
                            <div class="col-12">
                                <label for="Mobile" class=" text-dark float-start pl-2">Enter OTP</label>
                                <input type="text" class="form-control text-dark" placeholder="Enter OTP" id="otp"name="opt_1">
                            </div>
                            <div class="float-end col-12">
                                <a href="" class="float-end">Resend OTP</a>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-success" id="Verify">Verify</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Contact Seller</h5>
                    <button type="button" class="btn-close btn-success" data-bs-dismiss="modal" aria-label="Close"><img src="assets/images/close.png"class="w-25"></button>
                </div>
                <div class="modal-body">
                    <div class="model-cont">
                        <h4 class="text-center text-danger">Seller Information</h3>
                        <div class="row px-3 py-2">
                            <div class="col-12  col-sm-12 col-md-6 col-lg-6 ">
                                <label for="slr_name"class="form-label fw-bold text-dark"><i class="fa-regular fa-user"></i>Seller Name</label>
                                <input type="text" class="form-control" id="dealer_name" value="">
                            </div>
                            <div class="col-12 col-sm-12 col-md-6 col-lg-6  ">
                                <label for="number"class="form-label text-dark fw-bold"><i class="fa fa-phone"aria-hidden="true"></i>Phone Number</label>
                                <input type="text" class="form-control" id="mobile_number" value="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button"  id="got_it_btn "class="btn btn-secondary"data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <!-- BRAND SIMILAR TRACTOR -->
<!-- <section class="bg-light pb-4">
    <div class="container-fullwidth ">
        <div class="row">
            <div id="popular_tractor"></div>
            <div id="productContainer" class="row"></div>
                
		
		</div>
        <div class="col-12 text-center mt-3 pt-2 ">
            <button id="load_moretract" type="button" class=" btn add_btn btn-success p-1">
            <i class="fas fa-undo"></i>  Load More tractors</button>
         </div>
    </div>
</section>   -->
<section>
      <div class="container">
      <div>
      <h4><p class="mt-md mt-3 p-2 mb-5 my-3 assured">Harvester</p></h4>
      </div>
            <div class="section slider-section">
              <div class="container slider-column">
              <div class="carousel-wrap">
                <div class="owl-carousel" id="New_Tractor_Implements"> </div>
                <div class="col text-center pb-4">
                  <a href="harvester.php" class="btn btn-success px-5">View all Harvester</a>
                </div>
              </div>
            </div>
            </div>
            </section>
<section>
      <div class="container">
      <div>
      <h4><p class="mt-md mt-3 p-2 mb-5 my-3 assured"> Populer Tractor </p></h4>
      </div>
            <div class="section slider-section">
              <div class="container slider-column">
              <div class="carousel-wrap">
                <div class="owl-carousel" id="New_Populer_Tractor"> </div>
                <div class="col text-center pb-4">
                  <a href="popular_tractors.php" class="btn btn-success px-5">Load More tractors</a>
                </div>
              </div>
            </div>
            </div>
            </section>

    <!-- TRACTOR IMPLEMENTS CAROUSEL -->
   
  <!-- <section>
    <div class="container">
      <div class="text-editor-black  my-3" style="background-color:#fff">
        <h4><p class="mt-md mt-3 p-2 mb-5 my-3 assured">Tractor Implements</p></h4>
      </div>
      <div class="owl-slider ">
        <div id="carousel_related" class="owl-carousel owl-carousel_related">

          <div class="item">
            <div class="col-md-12 shadow d-flex flex-row">
              <div class="">
                <a href="#"><img class="img-fluid" src="assets/images/grizo-j-type-33-1692966584.webp"></a>
                <div class="text-center">
                  <a href="#" title="Mahendra Yuvo 265 DI" class="weblink" tabindex="0">
                    <p class="para fw-bold h5 pt-2">Grizo J Type</p>
                  </a>                                
                </div>
                <div class="row text-center">
                  <div class="col-6">
                    <p class="fw-bold ps-2 text-dark">By Agrizone</p>
                  </div>
                  <div class="col-6">
                    <p class="fw-bold pe-2 text-dark">Tillage</p>
                  </div>
                </div>
                <div class="col-12">
                  <span><a href="#" class="btn price-bnt btn-success w-100 ">Power : 35 & Above</a></span>
                </div>
              </div>
            </div>
          </div>

          <div class="item">
            <div class="col-md-12 shadow d-flex flex-row">
              <div class="">
                <a href="#"><img class="img-fluid" src="assets/images/grizo-j-type-33-1692966584.webp"></a>
                <div class="text-center">
                  <a href="#" title="Mahendra Yuvo 265 DI" class="weblink" tabindex="0">
                    <p class="para fw-bold h5 pt-2">Grizo J Type</p>
                  </a>                
                </div>
                <div class="row text-center">
                  <div class="col-6">
                    <p class="fw-bold ps-2 text-dark">By Agrizone</p>
                  </div>
                  <div class="col-6">
                    <p class="fw-bold pe-2 text-dark">Tillage</p>
                  </div>
                </div>
                <div class="col-12">
                  <span><a href="#" class="btn price-bnt btn-success w-100 ">Power : 35 & Above</a></span>
                </div>
              </div>
            </div>
          </div>   

          <div class="item">
            <div class="col-md-12 shadow d-flex flex-row">
              <div class="">
                <a href="#"><img class="img-fluid" src="assets/images/grizo-j-type-33-1692966584.webp"></a>
                <div class="text-center">
                  <a href="#" title="Mahendra Yuvo 265 DI" class="weblink" tabindex="0">
                    <p class="para fw-bold h5 pt-2">Grizo J Type</p>
                  </a>                
                </div>
                <div class="row text-center">
                  <div class="col-6">
                    <p class="fw-bold ps-2 text-dark">By Agrizone</p>
                  </div>
                  <div class="col-6">
                    <p class="fw-bold pe-2 text-dark">Tillage</p>
                  </div>
                </div>
                <div class="col-12">
                  <span><a href="#" class="btn price-bnt btn-success w-100 ">Power : 35 & Above</a></span>
                </div>
              </div>
            </div>
          </div>         

          <div class="item">
            <div class="col-md-12 shadow d-flex flex-row">
              <div class="">
                <a href="#"><img class="img-fluid" src="assets/images/grizo-j-type-33-1692966584.webp"></a>
                <div class="text-center">
                  <a href="#" title="Mahendra Yuvo 265 DI" class="weblink" tabindex="0">
                    <p class="para fw-bold h5 pt-2">Grizo J Type</p>
                  </a>                
                </div>
                <div class="row text-center">
                  <div class="col-6">
                    <p class="fw-bold ps-2 text-dark">By Agrizone</p>
                  </div>
                  <div class="col-6">
                    <p class="fw-bold pe-2 text-dark">Tillage</p>
                  </div>
                </div>
                <div class="col-12">
                  <span><a href="#" class="btn price-bnt btn-success w-100 ">Power : 35 & Above</a></span>
                </div>
              </div>
            </div>
          </div>         

          <div class="item">
            <div class="col-md-12 shadow d-flex flex-row">
              <div class="">
                <a href="#"><img class="img-fluid" src="assets/images/grizo-j-type-33-1692966584.webp"></a>
                <div class="text-center">
                  <a href="#" title="Mahendra Yuvo 265 DI" class="weblink" tabindex="0">
                    <p class="para fw-bold h5 pt-2">Grizo J Type</p>
                  </a>                
                </div>
                <div class="row text-center">
                  <div class="col-6">
                    <p class="fw-bold ps-2 text-dark">By Agrizone</p>
                  </div>
                  <div class="col-6">
                    <p class="fw-bold pe-2 text-dark">Tillage</p>
                  </div>
                </div>
                <div class="col-12">
                  <span><a href="#" class="btn price-bnt btn-success w-100 ">Power : 35 & Above</a></span>
                </div>
              </div>
            </div>
          </div>         

          <div class="item">
            <div class="col-md-12 shadow d-flex flex-row">
              <div class="">
                <a href="#"><img class="img-fluid" src="assets/images/grizo-j-type-33-1692966584.webp"></a>
                <div class="text-center">
                  <a href="#" title="Mahendra Yuvo 265 DI" class="weblink" tabindex="0">
                    <p class="para fw-bold h5 pt-2">Grizo J Type</p>
                  </a>                
                </div>
                <div class="row text-center">
                  <div class="col-6">
                    <p class="fw-bold ps-2 text-dark">By Agrizone</p>
                  </div>
                  <div class="col-6">
                    <p class="fw-bold pe-2 text-dark">Tillage</p>
                  </div>
                </div>
                <div class="col-12">
                  <span><a href="#" class="btn price-bnt btn-success w-100 ">Power : 35 & Above</a></span>
                </div>
              </div>
            </div>
          </div>         

          <div class="item">
            <div class="col-md-12 shadow d-flex flex-row">
              <div class="">
                <a href="#"><img class="img-fluid" src="assets/images/grizo-j-type-33-1692966584.webp"></a>
                <div class="text-center">
                  <a href="#" title="Mahendra Yuvo 265 DI" class="weblink" tabindex="0">
                    <p class="para fw-bold h5 pt-2">Grizo J Type</p>
                  </a>                
                </div>
                <div class="row text-center">
                  <div class="col-6">
                    <p class="fw-bold ps-2 text-dark">By Agrizone</p>
                  </div>
                  <div class="col-6">
                    <p class="fw-bold pe-2 text-dark">Tillage</p>
                  </div>
                </div>
                <div class="col-12">
                  <span><a href="#" class="btn price-bnt btn-success w-100 ">Power : 35 & Above</a></span>
                </div>
              </div>
            </div>
          </div>   
          
        </div>
      </div>
    </div>
  </section> -->

  <?php
    include 'includes/footer.php';
  ?>

  <script>
    $(document).ready(function(){
      jQuery.validator.addMethod("customPhoneNumber", function(value, element) {
        return /^[6-9]\d{9}$/.test(value);
      }, "Phone number must start with 6 or above");
      $("#delership_enq_btn").click(function () {
        // setTimeout(() => {
        //     console.log("validation of Department")
        // }, 2000);
        $("form[id='dealership_enq_from']").validate({
          rules: {
            f_name: {
                required: true,
                minlength: 3
            },

           l_name: {
              required: true,
              minlength: 3
            },
            mb_num: {
                required: true,
              minlength: 10,
              digits: true,
              customPhoneNumber: true 
            },
           // _tehsil: {
           //     required: true,
            //     minlength: 3
           // },
            _state: {
             required: true,
               // minlength: 10
           },
            _district: {
              required: true,
              // minlength: 10
            },
            _brand: {
              required: true,
               // minlength: 10
            }
          },
          messages: {
            f_name: {
              required: "Enter Your First Name",
              minlength: "First Name must be atleast 3 characters long"
            },
            l_name: {
              required: "Enter Your Last Name",
              minlength: "Last Name must be atleast 3 characters long"
            },
            mb_num: {
              required: "Enter Your Mobile Number",
              minlength: "Mobile must be 10 characters long",
              digits: "Please enter only digits"
            },
            // _tehsil: {
            //     required: "Select Your Tehsil Name",
            //     minlength: "Tehsil Name must be atleast 3 characters long"
              // },
            _state: {
              required: "Select Your State",
              // minlength: ""
            },
            _district: {
              required: "Select Your District Name",
              // minlength: ""
            },
            _brand: {
              required: "Select Your Brand Name",
              // minlength: ""
            }},               
          
          });
        })
      });


      $("#carousel_related_brand").owlCarousel({
  autoplay: true,
  rewind: true,
  margin: 20,
  responsiveClass: true,
  autoHeight: true,
  autoplayTimeout: 7000,
  smartSpeed: 800,
  nav: true,
  responsive: {
    0: {
      items: 1
    },

    600: {
      items: 3
    },

    1024: {
      items: 4
    },

    1366: {
      items: 4
    }
  }
});



jQuery("#carousel_related").owlCarousel({
  autoplay: true,
  rewind: true,
  margin: 20,
   /*
  animateOut: 'fadeOut',
  animateIn: 'fadeIn',
  */
  responsiveClass: true,
  autoHeight: true,
  autoplayTimeout: 7000,
  smartSpeed: 800,
  nav: true,
  responsive: {
    0: {
      items: 1
    },

    600: {
      items: 3
    },

    1024: {
      items: 4
    },

    1366: {
      items: 4
    }
  }
});

  </script>

</body>
</html>