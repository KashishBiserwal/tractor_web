<!DOCTYPE html>
<html lang="en">

<head> 
<?php
    include 'includes/headertag.php';
    $product_id=$_REQUEST['product_id'];
    echo $product_id;
    include 'includes/footertag.php';
?>
  <script> var APIBaseURL = "<?php echo $APIBaseURL; ?>";</script>
  <script> var baseUrl = "<?php echo $baseUrl; ?>";</script>
  <script src="<?php $baseUrl; ?>model/tyre_inner.js" defer></script>
  <script src="<?php $baseUrl; ?>model/sdt.js" defer></script>
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
.error {
    color: red !important;
    margin-bottom: 2px;
    font-size: 13px;
}
.img_buy_hire {
    height: 400px;
}
.post-slide .post-content {
    background: #fff;
    padding: 2px 20px 40px;
    border-radius: 15px;
}
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
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-6Z38E658LD"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());
  gtag('config', 'G-6Z38E658LD');
</script>
<body> 
    <?php
        include 'includes/header.php';
    ?>
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <section class="mt-100 bg-light">
        <div class="container">
            <div class="py-2">
                <span class="text-white">
                    <a href="index.php" class="text-decoration-none header-link px-1">Home <i
                        class="fa-solid fa-chevron-right px-1"></i>
                    </a>
                    <span class="text-dark p">Tyre</span>
                </span>
            </div>
        </div>
    </section>
    <section class="mt-0 pt-0">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-6 col-lg-6 col-md-6" style="position: relative;">
                    <h4 class="fw-bold text-danger pt-3" id="brand_name"></h4>
                    <div>
                        <div class="swiper swiper_buy mySwiper2_buy">
                            <div class="swiper-wrapper swiper-wrapper_buy">
                                <div class=" swiper-slide swiper-slide_buy"></div>
                            </div>
                        </div>
                        <div thumbsSlider="" class="swiper mySwiper_buy" style="height:50px; width: 43%;" id="swip_img"></div>
                    </div>
                </div>
                <div class="col-12 col-lg-6 col-md-6 col-sm-6 mt-5" style="z-index: 9; background: #fff;">
                    <table class="table border bg-light  mt-5">
                        <tbody>
                            <tr>
                                <td class="col-12 col-lg-6 col-md-6 col-sm-6">
                                    <h5> <i class="fa-solid fa-award"></i> Brand</h5>
                                </td>
                                <td class="col-12 col-lg-6 col-md-6 col-sm-6">
                                    <h5><a href="mahindra.php" class="text-decoration-none h5 text-danger " id="brand_name1"></a></h5>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <h6><i class="fa-solid fa-gas-pump"></i> Model</h6>
                                </td>
                                <td><p id="tyre"></p></td>
                            </tr>
                            <tr>
                                <td>
                                    <h6><i class="fas fa-bolt"></i>Type</h6>
                                </td>
                                <td><p> <span id="tyre_type"></span></p> </td>
                            </tr>
                            <tr>
                                <td>
                                    <h6><i class="fas fa-bolt"></i>Size</h6>
                                </td>
                                <td>
                                    <p> <span  id="tyre_size"></span></p>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="row my-3 text-center">
                        <div class="col-12 col-lg-12 col-md-12 col-sm-12">
                            <button id="adduser" type="button" class="add_btn  btn-success w-100" data-bs-toggle="modal" data-bs-target="#staticBackdrop3">
                                Send Enquiry
                            </button>
                        </div>
                    </div>
                </div>
                <div class="modal fade" id="staticBackdrop3" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title ms-1" id="staticBackdropLabel">Request Call Back</h5>
                                <button type="button" class="btn-close btn-success" data-bs-dismiss="modal" aria-label="Close"><img src="assets/images/close.png" class="w-25"></button>
                            </div>
                            <!-- MODAL BODY -->
                            <div class="modal-body">
                                <form id="dealership_enq_from" class="bg-light" action="" method="POST">
                                    <div class="row justify-content-center">
                                        <div class="col-12 col-lg-6 col-md-6 col-sm-6 " hidden>
                                            <label for="name" class="form-label fw-bold text-dark"> <i class="fa-regular fa-user"></i> enquiryName</label>
                                            <input type="text" class="form-control" placeholder="Enter Your Name" id="enquiry_type_id" value="10" name="fname">
                                        </div>
                                        <div class="col-12 col-lg-6 col-md-6 col-sm-6 " hidden>
                                            <label for="name" class="form-label fw-bold text-dark"> <i class="fa-regular fa-user"></i> product id</label>
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
                                            <select class="form-select py-2 state-dropdown1" id="s_state" name="_state" aria-label=".form-select-lg example">
                                            </select>
                                        </div>
                                        <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                                            <label for="yr_dist" class="form-label  fw-bold text-dark"><i class="fa-solid fa-location-dot"></i> District</label>
                                            <select class="form-select py-2 district-dropdown1" id="s_district" name="_district" aria-label=".form-select-lg example">
                                            </select>
                                        </div>
                                        <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                                            <label for="tehsil" class="form-label fw-bold mt-1 text-dark"> Tehsil</label>
                                            <select class="form-select py-2 tehsil-dropdown1" id="t_tehsil" name="_tehsil" aria-label=".form-select-lg example">
                                            </select>
                                        </div>
                                        <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                                            <label for="tehsil" class="form-label fw-bold  mt-1 text-dark">Brand</label>
                                            <select class="form-select py-2" aria-label="Default select example" id="brand_select" name="_brand"></select>
                                        </div>
                                        <div class="text-center my-3">
                                            <button type="button" id="tyre_enq_btn" class="btn btn-success px-5 w-100" data-bs-dismiss="modal" data-bs-toggle="modal" data-bs-target="get_OTP_btn">Submit</button>
                                        </div>
                                        <p class="mb-0 text-center">By proceeding ahead you expressly agree to the Bharat Tractors <a href="#" class="text-decoration-none" target="_blank" title="terms and conditions">terms and conditions*</a></p>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section >
        <div class="container">
            <h3 class="fw-bold assured px-2">About MRF SHAKTI LIFE 13.6 - 28</h3>
            <div class="" role="alert">
                <p class="text-dark py-3">
                Choose the MRF SHAKTI LIFE Tyre for a driving experience that transcends the ordinary.
                 Whether you're a performance enthusiast or a practical driver, these tyres are crafted
                  to exceed expectations and redefine what's possible on the road. Elevate your journey
                   with the MRF SHAKTI LIFE  – where innovation meets excellence.
                </p>
            </div>
        </div>
    </section>
    <section class="mt-3">
        <div class="container">
            <div>
                <h2 class="fw-bold text-dark text-start mt-3 assured ps-3">Similar Tyres</h3>
            </div>
            <div id="productContainer" class="row owl Carousel mt-4" ></div>
            <div class="col text-center my-3 pb-5">
                <a href="tyre.php" class="btn btn-success btn-md">Load More Tyres</a>
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
    ?>
</body>
  <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script>
    $(document).ready(function() {
        $("#hire_inner").validate({
            rules: {
                first_name: 'required',

                last_name: 'required',
                mobile_number: {
                    required: true,
                    digits: true, 
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
