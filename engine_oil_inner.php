<!DOCTYPE html>
<html lang="en">
<head>
    
    <?php
      include 'includes/headertag.php';
      include 'includes/header.php';
      $id=$_REQUEST['id'];
      //echo $id;
      include 'includes/footertag.php';
      ?>
     
     <script> var CustomerAPIBaseURL = "<?php echo $CustomerAPIBaseURL; ?>";</script>
     <script> var baseUrl = "<?php echo $baseUrl; ?>";</script>
     <script src="<?php $baseUrl; ?>model/engineoil_detail.js"></script>
     <script src="<?php $baseUrl; ?>model/State_dist_tehsil.js"></script>
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-6Z38E658LD"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-6Z38E658LD');
    </script>
  
<style>
     .gallery {
  width: 100%;
  max-width: 620px;
  margin: 40px auto;
}
    .gallery-slider {
  width: 100%;
  height: auto;
  margin: 0 0 10px 0;
}
.gallery-slider .swiper-slide {
  width: auto;
  height: 300px;
}
.gallery-slider .swiper-slide img {
  display: block;
  width: auto;
  height: 100%;
  margin: 0 auto;
}
.gallery-thumbs {
  width: 100%;
  padding: 0;
  overflow: hidden;
  height: 140px;
}
.gallery-thumbs .swiper-slide {
  width: 100px;
  height: 100px;
  text-align: center;
  overflow: hidden;
  opacity: 0.5;
}
.gallery-thumbs .swiper-slide-active {
  opacity: 1;
}
.gallery-thumbs .swiper-slide img {
  width: auto;
  height: 75%;
}
.swiper-button-prev:after, .swiper-button-next:after {

    background: transparent;
    font-size: 25px !important;
}
</style>

</head>
<body>
<section class="mt-130 bg-light">
        <div class="container">
        <div class="py-2">
                    <span class="text-white">
                        <a href="index.php" class="text-decoration-none header-link px-1">Home <i
                                class="fa-solid fa-chevron-right px-1"></i></a>

                                <a href="engine_oil.php" class="text-decoration-none header-link px-1"> <span class="text-dark p">Engine Oil</span></a>
                    </span>
                </div>
        </div>
    </section>

    <!-- IMAGE SWIPER WITH THREE THUMBNAIL IMAGE -->
    <section>
        <div class="container">
            <div class="row mt-3">
                <div class="col-12 col-sm-6 col-lg-6 col-md-6" style="position: relative;">
                    <div>
                    <h1 class="fw-bold text-danger pt-3" id="brand_name"></h1>
                    <div class="gallery">   
                        <div class="swiper-container gallery-slider">
                            <div class="swiper-wrapper mySwiper2_data"></div>
                            <div class="swiper-button-prev"></div>
                            <div class="swiper-button-next"></div>
                        </div>

                        <div class="swiper-container gallery-thumbs">
                            <div class="swiper-wrapper mySwiper_data"></div>
                        </div>
                    </div>
                    </div>
                </div>
                <div class="col-12 col-lg-6 col-md-6 col-sm-6 mt-5" style="z-index: 9; background: #fff;">
                    <table class="table border bg-light  mt-5">
                        <tbody>
                            <tr>
                                <td class="col-12 col-lg-6 col-md-6 col-sm-6">
                                    <h5> <i class="fa-solid fa-award"></i> Name</h5>
                                </td>
                                <td class="col-12 col-lg-6 col-md-6 col-sm-6">
                                    <h5><a href="#" class="text-decoration-none h5 text-danger " id="model_name"></a></h5>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <h6><i class="fa-solid fa-gas-pump"></i> Grade</h6>
                                </td>
                                <td><p id="grade"></p></td>
                            </tr>
                            <tr>
                                <td>
                                    <h6><i class="fas fa-bolt"></i>Quantity</h6>
                                </td>
                                <td><p> <span id="quantity"></span></p> </td>
                            </tr>
                            <tr>
                                <td>
                                    <h6><i class="fas fa-bolt"></i>Price</h6>
                                </td>
                                <td>
                                    <p> <span  id="price"></span></p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <h6><i class="fas fa-bolt"></i>Compatible Tractors</h6>
                                </td>
                                <td>
                                    <p> <span  id="compatible_tractor"></span></p>
                                </td>
                            </tr>
                           
                        </tbody>
                    </table>
                    <div class="row my-3 text-center">
                       
                        <div class="col-12 col-lg-12 col-md-12 col-sm-12">
                            <button type="button" class="btn btn-success text-center w-100" data-bs-toggle="modal" data-bs-target="#staticBackdrop3">
                                Request Call Back
                            </button>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <!-- MODAL -->
    <section>
        <div class="modal fade" id="staticBackdrop3" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="staticBackdropLabel"> Request Call Back</h5>
                        <button type="button" class="btn-close btn-success" data-bs-dismiss="modal" aria-label="Close"><img src="assets/images/close.png" class="w-25"></button>
                    </div>
                    <!-- MODAL BODY -->
                    <div class="modal-body bg-light">
                    <form id="engine_oil_form" method="POST" onsubmit="return false">
                        <div class="row">
                            <div class="col- col-sm-6 col-lg-6 col-md-6" hidden>
                                <label class="text-dark"> id Name<span class="text-danger">*</span></label>
                                    <input type="text" class="form-control py-2" for="idUser"  id="enquiry_type_id" value="12" name="first_name" placeholder="Enter First Name">
                                <small></small>
                            </div>
                            <div class="col-12 col-lg-6 col-md-6 col-sm-6 " hidden>
                                            <label for="name" class="form-label  text-dark"> <i class="fa-regular fa-user"></i> product</label>
                                            <input type="text" class="form-control" placeholder="" id="product_subject_id" name="fname">
                                        </div>
                            <div class="col-12 col-lg-6 col-md-6 col-sm-6">
                                <div class="form-outline">
                                <label for="f_name" class="form-label fw-bold text-dark"> <i class="fa-regular fa-user"></i> First Name</label>
                                <input type="text" class="form-control mb-0" placeholder="Enter Your Name" id="firstName" name="firstName">
                                </div>
                            </div>
                            <div class="col-12 col-lg-6 col-md-6 col-sm-6">
                                <div class="form-outline">
                                <label for="last_name" class="form-label fw-bold text-dark"> <i class="fa-regular fa-user"></i> Last Name</label>
                                <input type="text" class="form-control mb-0" placeholder="Enter Your Name" id="lastName" name="lastName">
                                </div>
                            </div>
                            <div class="col-12 col-sm-6 col-md-6 col-lg-6 mt-4">
                                <div class="form-outline">
                                <label for="eo_number" class="form-label text-dark fw-bold"> <i class="fa fa-phone" aria-hidden="true"></i> Phone Number</label>
                                <input type="text" class="form-control mb-0" placeholder="Enter Number" id="mobile_number" name="mobile_number">
                                </div>
                            </div>
                            <div class="col-12 col-sm-12 col-md-6 col-lg-6 mt-4">
                                <div class="form-outline">
                                <label for="eo_state" class="form-label text-dark fw-bold"> <i class="fas fa-location"></i> State</label>
                                <select class="form-select py-2 state-dropdown" aria-label=".form-select-lg example" id="state" name="state">
                                
                                </select>
                                </div>
                            </div>
                            <div class="col-12 col-sm-12 col-md-6 col-lg-6 mt-4">
                                <div class="form-outline">
                                <label for="eo_dist" class="form-label fw-bold  text-dark"><i class="fa-solid fa-location-dot"></i> District</label>
                                <select class="form-select py-2 district-dropdown" aria-label=".form-select-lg example" id="district" name="district">
                                
                                </select>
                                </div>                    
                            </div>       
                            <div class="col-12 col-sm-6 col-md-6 col-lg-6 mt-4">
                                <div class="form-outline">
                                <label for="eo_tehsil" class="form-label fw-bold text-dark"> Tehsil</label>
                                <select class="form-select py-2 tehsil-dropdown" aria-label=".form-select-lg example" id="Tehsil" name="Tehsil">
                                    
                                </select>
                                </div>
                            </div>

                            </div> 
                            <div class="text-center my-3">
                            <button type="submit" id="submit_enquiry" class="btn add_btn btn-success w-100 btn_all" data-bs-dismiss="modal" data-bs-toggle="modal" data-bs-target="get_OTP_btn">Submit</button>        
                            </div>        
                    </form>           
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--DESCRIPTION  -->
    <section>
        <div class="container">
            <div class="row ">
                <h3> Description</h3>
                <p id="description"></p>

            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <div class="row py-1 mb-3">
                <h2 class="fw-bold text-dark text-start mt-4 assured ps-3">Similar Product</h3>
                <div id="productContainer" class="row"></div>

                <div class="col text-center mt-3">
                    <a href="engine_oil.php" class="btn btn-success btn-lg">View All</a>
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

    <?php   
        include 'includes/footer.php';
   
    ?> 
    
  <!--   <script>
        $(document).ready(function(){
          jQuery.validator.addMethod("customPhoneNumber", function(value, element) {
            return /^[6-9]\d{9}$/.test(value);
          }, "Phone number must start with 6 or above");
            $("#engine_oil_btn").click(function () {
                // setTimeout(() => {
                //     console.log("validation of Department")
                // }, 2000);
                $("form[id='engine_oil_form']").validate({
                    rules: {
                        f_name: {
                            required: true,
                            minlength: 3
                        },

                        eo_name: {
                            required: true,
                            minlength: 3
                        },
                        eo_number: {
                            required: true,
                            minlength: 10,
                            maxlength:10,
                            digits: true,
                            customPhoneNumber: true 
                        },
                        eo_state: {
                            required: true,
                            // minlength: 3
                        },
                        // eo_tehsil: {
                        //     required: true,
                        //     // minlength: 3
                        // }
                        eo_dist: {
                            required: true,
                            // minlength: 3
                        }
                    },
                    messages: {
                        f_name: {
                            required: "Enter Your First Name",
                            minlength: "First Name must be atleast 3 characters long"
                        },
                        eo_name: {
                            required: "Enter Your Last Name",
                            minlength: "Last Name must be atleast 3 characters long"
                        },
                        eo_number: {
                            required: "Enter Your Phone Number",
                            minlength: "Phone Number must be of 10 Digit",
                            maxlength: "Ensure exactly 10 digits of Mobile No.",
                            digits: "Please enter only digits"
                        },
                        eo_state: {
                            required: "Select Your State",
                            // minlength: "First Name must be atleast 3 characters long"
                        },
                        // eo_tehsil: {
                        //     required: "Select Your Tehsil",
                        //     // minlength: "First Name must be atleast 3 characters long"
                        // }
                        eo_dist: {
                            required: "Select Your District",
                            // minlength: "First Name must be atleast 3 characters long"
                        }
                    },

                });
            })
        });
  </script> -->

<script>
      var slider = new Swiper ('.gallery-slider', {
    slidesPerView: 1,
    centeredSlides: true,
    loop: true,
    loopedSlides: 1, 
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
});

var thumbs = new Swiper ('.gallery-thumbs', {
    slidesPerView: 'auto',
    spaceBetween: 10,
    centeredSlides: true,
    loop: true,
    slideToClickedSlide: true,
});


slider.controller.control = thumbs;
thumbs.controller.control = slider;
</script>
<script>
 function googleTranslateElementInit() {
 new google.translate.TranslateElement({
 pageLanguage: 'en',
 autoDisplay: 'true',
 includedLanguages:'en,hi,bn,mr,pa,or,te,ta,ml', // <- remove this line to show all language
 layout: google.translate.TranslateElement.InlineLayout.HORIZONTAL
 }, 'google_translate_element');
 }
</script>
</body>
</html>