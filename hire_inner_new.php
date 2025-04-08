<!DOCTYPE html>
<html lang="en">

<head>
<?php
    include 'includes/headertag.php';
    include 'includes/headertagadmin.php';
    include 'includes/footertag.php';
 ?> 
  <script> var APIBaseURL = "<?php echo $APIBaseURL; ?>";</script>
  <script> var baseUrl = "<?php echo $baseUrl; ?>";</script>
  <script src="<?php $baseUrl; ?>model/hire_inner_new.js" defer></script>
  <script src="<?php $baseUrl; ?>model/State_dist_tehsil.js" defer></script>
</head>
<script async src="https://www.googletagmanager.com/gtag/js?id=G-6Z38E658LD"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());
  gtag('config', 'G-6Z38E658LD');
</script>
    <?php
        include 'includes/headertag.php';
    ?>
    <style>
    .form-outline .form-label {
        color: #454444;
        font-weight: 500;
        font-size: 18px;
        margin-bottom: 5px;
        position: absolute;
        margin-top: -12px;
        background: #fff;
        margin-left: 23px;
    }

    label.error {
        color: red !important;
        margin-bottom: 2px;
        font-size: 13px;
    }
    .post-slide .post-content {
        background: #fff;
        padding: 2px 20px 40px;
        border-radius: 15px;
    }
    .img_buy {
        width: 100%;
        height: auto; 
        max-height: 200px; 
        object-fit: cover; 
    }
    .table {
        margin-bottom: 0;
    }
    .swiper-slide_buy {
        display: flex; 
        align-items: center;
        justify-content: center; 
        height: auto;
        margin: 0;
        padding: 0; 
    }

    .swiper-slide_buy .img_buy {
        display: block;
        width: 100%; 
        height: auto;
        max-height: 697px !important;
        object-fit: cover; 
        border-radius: 4px;
    }
    .implement_table {
        height: 350px;
        text-align: justify;
    }
    .swiper-button-next{
        margin-top: -120px;
    }
    .swiper {
        height: 610px;
    }
    </style>
<body>
    <?php
        include 'includes/header.php';
    ?>
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <!-- <section class="mt-5 pt-5 bg-light" >
        <div class="container pt-5" style="margin-top: 150px">
            <div class="">
                <span class="mt-5 text-white pt-5 ">
                    <a href="index.php" class="text-decoration-none header-link px-1">Home <i
                        class="fa-solid fa-chevron-right px-1"></i>
                    </a>
                    <span class="text-dark">
                        <a href="hire.php" class="text-decoration-none header-link px-1"> Hire Tractor</a>
                    </span>
                </span>
            </div>
        </div>
    </section> -->
    <section class="mt-130">
        <div class="container">
            <h4 id="brand_name1"></h4>
            <div class="row">
                <div class="col-12">
                    <div>
                        <div class="swiper swiper_buy mySwiper2_buy">
                            <div class="swiper-wrapper swiper-wrapper_buy"></div>
                            <div class="swiper-button-next"></div>
                            <div class="swiper-button-prev"></div>
                        </div>
                    </div>
                </div>
                <div class="col-12" id="datatable"></div>
            </div>
        </div>
    </section>
    <!-- <section>
        <div class="container">
            <div class="row mt-4 pt-3">
                <h4 class="assured px-2 fw-bold mb-3">Related Old Harvester </h4>
                <div class="carousel-wrap">
                    <div class="owl-carousel" id="old_harvester_car"></div>
                </div>
                <div class="col text-center pb-4 mt-2">
                  <a href="used_harvester.php" class="btn btn-success px-5">View all Old Harvester</a>
                </div>
            </div>
        </div>
    </section> -->
    <!-- Modal -->
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static"data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header modal_head" style="background-color: #B90405;">
                    <h5 class="ms-1 text-white" id="">Generate Enquiry</h5>
                    <button type="button" class="btn-close btn-success" data-bs-dismiss="modal" aria-label="Close"><img src="assets/images/close.png" class="w-100"></button>
                </div>
                <div class="modal-body">
                    <div class="model-cont">
                        <form id="hire_inner" method="POST" onsubmit="return false">
                                <div class="row gap-2">
                                    <div class="row px-3 ">
                                        <div class="col-12 col-lg-6 col-md-6 col-sm-6 " hidden>
                                            <label for="name" class="form-label fw-bold text-dark"> <i class="fa-regular fa-user"></i> enquiryName</label>
                                            <input type="text" class="form-control" placeholder="Enter Your Name" id="enquiry_type_id" value="19" name="fname">
                                        </div>
                                        <div class="col-12 col-lg-6 col-md-6 col-sm-6 " hidden>
                                            <label for="name" class="form-label  text-dark"> <i class="fa-regular fa-user"></i> customer_id</label>
                                            <input type="text" class="form-control" id="customer_id" value="">
                                        </div>
                                        <div class="col-12 col-lg-6 col-md-6 col-sm-6 "hidden>
                                            <label for="name" class="form-label fw-bold text-dark"> <i class="fa-regular fa-user"></i>brand_name</label>
                                            <input type="text" class="form-control" placeholder="Enter Your Name"  id="brand_name_brand" name="">
                                        </div>
                                        <div class="col-12 col-lg-6 col-md-6 col-sm-6 "hidden>
                                            <label for="name" class="form-label fw-bold text-dark"> <i class="fa-regular fa-user"></i>model</label>
                                            <input type="text" class="form-control" placeholder="Enter Your Name"  id="model_form" name="">
                                        </div>
                                       
                                        <div class="col-12">
                                <input type="text" class="form-control" placeholder="Enter Your Name" id="fullname"
                                    name="fullname">
                            </div>
                                        <div class="col-12">
                                <input type="number" class="form-control" placeholder="Enter Mobile Number" id="mobile_number"
                                    name="mobile_number">
                            </div>
                                        <div class="col-12">
                                <div class="form-outline mb-2">
                                    <label for="state" class="form-label text-dark fw-bold">State</label>
                                    <select class="form-select py-2 state-dropdown" aria-label=".form-select-lg example"
                                        id="state" name="state">
                                    </select>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-outline my-2">
                                    <label for="district" class="form-label fw-bold text-dark"> District</label>
                                    <select class="form-select py-2 district-dropdown"
                                        aria-label=".form-select-lg example" id="district" name="district">
                                    </select>
                                </div>
                            </div>
                                    <div class="col-12">
                                <div class="form-outline my-2">
                                    <label for="Tehsil" class="form-label fw-bold text-dark"> Tehsil</label>
                                    <select class="form-select py-2 tehsil-dropdown"
                                        aria-label=".form-select-lg example" id="Tehsil" name="Tehsil">
                                    </select>
                                </div>
                            </div>
                            <div class="col-12">
                                <input type="yr_price" class="form-control" placeholder="Enter Price" id="price_form"
                                    name="mobile_number">
                            </div>
                                    
                                </div>          
                            </div>
                        <div class="modal-footer">
                            <button type="submit" id="button_hire" class="btn add_btn w-100 btn_all" style="background-color: #B90405; color: white" data-bs-dismiss="modal">Submit</button>
                        </div>      
                    </form>    
                </div>
            </div>
        </div>
    </div>
    <!-- <div class="container">
        <h4 class="fw-bold assured px-2">Quick Links</h4>
        <div class="row my-4">
            <div class="col-12 col-lg-4 col-md-4 col-sm-4 py-2">
                <a href="index.php" id="adduser" class="btn btn-outline-success text-decoration-none border-2 p-2 w-100">
                    <i class="fas fa-bolt"></i>TRACTOR PRICE</a>
            </div>
            <div class="col-12 col-lg-4 col-md-4 col-sm-4 py-2">
                <a href="find_new_tractors.php" id="adduser" class=" btn btn-outline-success text-decoration-none border-2 py-2 px-3 w-100">
                    <i class="fas fa-bolt"></i>TRACTOR</a>
            </div>
            <div class="col-12 col-lg-4 col-md-4 col-sm-4 py-2">
                <a href="harveste.php" id="adduser" class=" btn btn-outline-success text-decoration-none border-2 py-2 px-3 w-100">
                    <i class="fas fa-bolt"></i>HARVESTERS</a>
            </div>
            <div class="col-12 col-lg-4 col-md-4 col-sm-4 py-2">
                <a href="used_tractor.php" id="adduser" class="btn btn-outline-success text-decoration-none  border-2 py-2 px-3 w-100">
                    <i class="fas fa-bolt"></i>SECOND HAND TRACTOR</a>
            </div>
            <div class="col-12 col-lg-4 col-md-4 col-sm-4 py-2">
                <a href="insurance.php" id="adduser" class="btn btn-outline-success text-decoration-none border-2 py-2 px-3 w-100">
                    <i class="fas fa-bolt"></i>EASY FINANCE</a>
            </div>
            <div class="col-12 col-lg-4 col-md-4 col-sm-4 py-2">
                <a href="certified_dealers.php" id="adduser" class="btn btn-outline-success text-decoration-none border-2 py-2 px-3 w-100">
                    <i class="fas fa-bolt"></i>DEALERSHIP</a>
            </div>
        </div>
    </div>

    <div class="modal fade" id="get_OTP_btn" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header bg-success">
                    <h1 class="modal-title fs-5 text-white" id="exampleModalLabel">Verify Your OTP</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><img src="assets/images/close.png" class=" w-100"></button>
                </div>
                <div class="modal-body">
                    <form id="otp_form">
                        <div class=" col-12 input-group">
                            <div class="col-12" hidden>
                                <label for="Mobile" class=" text-dark float-start pl-2">Munber</label>
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
    </div> -->
    <div class="modal fade" id="staticBackdrop1" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
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
                                <input type="text" class="form-control" id="get_slr_name" value="">
                            </div>
                            <div class="col-12 col-sm-12 col-md-6 col-lg-6  ">
                                <label for="number"class="form-label text-dark fw-bold"><i class="fa fa-phone"aria-hidden="true"></i>Phone Number</label>
                                <input type="text" class="form-control" id="get_mob_num">
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

    <?php
        include 'includes/footer.php';
        include 'includes/footertag.php';
    ?>

    <script>
    $(document).ready(function() {
        $('#price_form').on('input', function() {
            var value = $(this).val().replace(/\D/g, ''); 
            var formattedValue = Number(value).toLocaleString('en-IN'); 
            $(this).val(formattedValue);
        });

        var input = document.getElementById('price_form');
        input.focus();
        input.setSelectionRange(0, 0);

        input.style.textAlign = 'left';

        $.validator.addMethod("indianMobile", function(value, element) {
            return this.optional(element) || /^[789]\d{9}$/.test(value);
        }, "Please enter a valid Indian mobile number.");
        $("#hire_inner").validate({
            rules: {
                first_name: 'required',

                last_name: 'required',
                mobile_number: {
                    required: true,
                    digits: true,
                    indianMobile: true, 
                },
                state: "required",
                district: "required",
            }
        });
        $('#button_hire').on('click', function() {
            $('#hire_inner').valid();
            console.log($('#hire_inner').valid());
        });
    });

    $('#usedtractorforsell').owlCarousel({
        loop: true,
        margin: 10,
        nav: true,
        navText: [
            "<i class='fa fa-caret-left'></i>",
            "<i class='fa fa-caret-right'></i>"
        ],
        autoplay: false,
        autoplayTimeout: 3000,
        autoplayHoverPause: true,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 3
            },
            1000: {
                items: 3
            }
        }
    })
    </script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<script>
    function googleTranslateElementInit() {
    new google.translate.TranslateElement({
    pageLanguage: 'en',
    autoDisplay: 'true',
    includedLanguages:'en,hi,bn,mr,pa,or,te,ta,ml', 
    layout: google.translate.TranslateElement.InlineLayout.HORIZONTAL
    }, 'google_translate_element');
    }
</script>
</html>


