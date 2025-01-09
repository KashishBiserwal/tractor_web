<!DOCTYPE html>
<html lang="en">
<head>
    <?php
      include 'includes/headertag.php';
      include 'includes/header.php';
      $id=$_REQUEST['id'];
      include 'includes/footertag.php';
    ?>
     <script> var CustomerAPIBaseURL = "<?php echo $CustomerAPIBaseURL; ?>";</script>
     <script> var APIBaseURL = "<?php echo $APIBaseURL; ?>";</script>
     <script> var baseUrl = "<?php echo $baseUrl; ?>";</script>
     <script src="<?php $baseUrl; ?>model/nursery_detail.js" defer></script>
     <script src="<?php $baseUrl; ?>model/sdt.js" defer></script>
</head>
   <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-6Z38E658LD"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
        gtag('config', 'G-6Z38E658LD');
    </script>
<body> 
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
        <section class="mt-130 bg-light">
            <div class="container ">
                <div class="py-2">
                    <span class="text-white">
                        <a href="index.php" class="text-decoration-none header-link px-1">Home <i
                            class="fa-solid fa-chevron-right px-1"></i>
                        </a>
                        <span class="text-dark p">Nursery</span>
                    </span>
                </div>
            </div>
        </section>
        <!-- next section start -->
        <section>
            <div class="container my-4">
                <div class="vegehead ">
                    <div class="row">
                        <div class="col-12 col-lg-6 ">
                            <h4 id="district_main"></h4>
                        </div>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-12 col-sm-6 col-lg-6 col-md-6"><div>
                    <h4 id="district_main"></h4>
                </div>
                <div>
                    <div class="swiper swiper_buy mySwiper2_buy">
                        <div class="swiper-wrapper swiper-wrapper_buy">
                            <div class=" swiper-slide swiper-slide_buy"></div>
                        </div>
                    </div>
                    <div thumbsSlider="" class="swiper mySwiper_buy" style="height:75px; width: 43%;" id="swip_img"></div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-lg-6 col-md-6">
                <form action="" id="nursery_form" class="bg-light shadow " method="post">
                    <h4 class="fw-bold text-center text-danger pt-4">Are You Intrested In This Nursery ?</h4>
                    <div class="row">
                        <div class="col-12 justify-content-center">
                            <div class="d-flex flex-md-row px-3  flex-column-reverse">
                                <div class="col-md-12 col-12 col-lg-12 col-lg-12">
                                    <div class=" ml-2">
                                        <div class="row">
                                            <div class="col-12 col-lg-6 col-md-6 col-sm-6 " hidden>
                                                <label for="name" class="form-label fw-bold text-dark"> <i class="fa-regular fa-user"></i> enquiryName</label>
                                                <input type="text" class="form-control" placeholder="Enter Your Name" id="enquiry_type_id" value="11" name="fname">
                                            </div>
                                            <div class="col-12 col-lg-6 col-md-6 col-sm-6 " hidden>
                                                <label for="name" class="form-label fw-bold text-dark"> <i class="fa-regular fa-user"></i> product_id</label>
                                                <input type="text" class="form-control" id="product_id" value="">
                                            </div>
                                            <div class="col-12 col-lg-6 col-md-6 col-sm-12 mt-4">
                                                <div class="form-outline">
                                                    <label for="fname" class="form-label "><i
                                                        class="fa-regular fa-user"></i> First Name</label>
                                                    <input type="text" class="form-control" onkeydown="return /[a-zA-Z]/i.test(event.key)" id="fname" name="fname">
                                                </div>
                                            </div>
                                            <div class="col-12 col-lg-6 col-md-6 col-sm-12 mt-4">
                                                <div class="form-outline">
                                                    <label for="lname" class="form-label "><i
                                                        class="fa-regular fa-user"></i> Last Name</label>
                                                    <input type="text" class="form-control" onkeydown="return /[a-zA-Z]/i.test(event.key)" id="lname" name="lname">
                                                </div>
                                            </div>
                                            <div class="col-12 col-lg-6 col-md-6 col-sm-12 mt-4">
                                                <div class="form-outline ">
                                                    <label for="phone" class="form-label "><i class="fa fa-phone" aria-hidden="true"></i> Phone Number</label>
                                                    <input type="tel" class="form-control" id="phone_number" name="phone">
                                                </div>
                                            </div>
                                            <div class="col-12 col-sm-12 col-md-6 col-lg-6 mt-4">
                                                <div class="form-outline ">
                                                    <label for="state" class="form-label "><i class="fas fa-location"></i> State</label>
                                                    <select class="form-select py-2 state-dropdown1"aria-label=".form-select-lg example" id="state"name="state">
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-12 col-sm-12 col-md-6 col-lg-6 mt-4">
                                                <div class="form-outline ">
                                                    <label for="district" class="form-label "><i class="fa-solid fa-location-dot"></i> District</label>
                                                    <select class="form-select py-2 district-dropdown1"aria-label=".form-select-lg example" name="district"id="district">
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-12 col-sm-12 col-md-6 col-lg-6 mt-4">
                                                <div class="form-outline ">
                                                    <label for="tehsil" class="form-label">Tehsil</label>
                                                    <select class="form-select py-2 tehsil-dropdown1"aria-label=".form-select-lg example" name="tehsil"id="tehsil">
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                         <!-- Button trigger modal -->
                                        <div class="col-12 col-sm-12 col-md-6 col-lg-12 mb-4 mt-4">
                                            <button type="button" class="btn btn-success w-100" id="button_nursery"  data-bs-toggle="modal" data-bs-target="get_OTP_btn">
                                                 Request
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<section>
    <div class="container">
        <div class="my-4">
            <div class="text-editor-black my-4 " style="background-color:#fff">
                <h4><p class="mt-md mt-4 p-2 mb-3 my-4 assured"><span id="model4"></span> About Nursety</p></h4>
            </div>
            <p id="description"></p>
        </div>
        <table class="table w-100 table-hover table table-striped my-4  ">
            <tbody>
                <tr>
                    <td class="table-data col-lg-6">Address</td>
                    <td class="table-data col-lg-6" id="address"></td>
                </tr>
                <tr>
                    <td class="table-data">State</td>
                    <td class="table-data" id="state_1"></td>
                </tr>
                <tr>
                    <td class="table-data">District</td>
                    <td class="table-data" id="district_1"></td>
                </tr>
                <tr>
                    <td class="table-data">Tehsil</td>
                    <td class="table-data"id="tehsil_1"></td>
                </tr>
                <tr>
                    <td class="table-data">Phone Number</td>
                    <td class="table-data"id="number_1"></td>
                </tr>
            </tbody>
        </table>
    </div>
</section>
<section class="mt-3">
    <div class="container">
        <h3 class="fw-bold text-dark text-start mt-4 assured ps-3">Similar Product</h3>
        <div id="productContainer" class="row"></div>
    </div>
    <div class="col text-center my-3 pb-5">
        <a href="nursery_ui.php" class="btn btn-success btn-lg">View All</a>
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
                            <input type="text" class="form-control text-dark" placeholder="Enter OTP" id="mobile_verify"name="Mobile">
                        </div>
                        <div class="col-12">
                            <label for="Mobile" class=" text-dark float-start pl-2">Enter OTP</label>
                            <input type="text" class="form-control text-dark" placeholder="Enter OTP" id="otp1"name="opt_1">
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
<div class="modal fade" id="seller_model" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Nursery Contact Seller</h5>
                <button type="button" class="btn-close btn-success" data-bs-dismiss="modal" aria-label="Close"><img src="assets/images/close.png"class="w-25"></button>
            </div>
            <div class="modal-body">
                <div class="model-cont">
                    <h4 class="text-center text-danger">Nursery Seller Information</h3>
                     <div class="row px-3 py-2">
                        <div class="col-12  col-sm-12 col-md-6 col-lg-6 ">
                            <label for="slr_name"class="form-label fw-bold text-dark"><i class="fa-regular fa-user"></i>Nursery Seller Name</label>
                            <input type="text" class="form-control" id="slr_name">
                        </div>
                        <div class="col-12 col-sm-12 col-md-6 col-lg-6  ">
                            <label for="number"class="form-label text-dark fw-bold"><i class="fa fa-phone"aria-hidden="true"></i>Phone Number</label>
                            <input type="text" class="form-control" id="mob_num">
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
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script>
    $(document).ready(function() {
        $.validator.addMethod("indianMobile", function(value, element) {
            return this.optional(element) || /^[6789]\d{9}$/.test(value);
        }, "Please enter a valid Indian mobile number.");

        $("#nursery_form").validate({
            rules: {
                fname: {
                    required: true,
                    minlength: 2,
                },
                lname:{
                    required: true,
                    minlength: 2,
                },
                phone: {
                    required: true,
                    digits: true, 
                    indianMobile: true,
                },
                state: "required",
                district: "required",
                tehsil: "required",
            },
        });

        $('#button_nursery').on('click', function() {
            $('#nursery_form').valid();
        });
    });
    </script>
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