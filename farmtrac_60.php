<!DOCTYPE html>
<html lang="en">
<head>
    <?php
        include 'includes/headertag.php';
        include 'includes/headertagadmin.php';
        $product_id=$_REQUEST['product_id'];
        echo $product_id;
        include 'includes/footertag.php';
    ?>
   
   <script> var APIBaseURL = "<?php echo $APIBaseURL; ?>";</script>
   <script> var baseUrl = "<?php echo $baseUrl; ?>";</script>
   <script src="<?php $baseUrl; ?>model/used_tractor_inner.js" defer></script>
   <script src="<?php $baseUrl; ?>model/State_dist_tehsil.js" defer></script>
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
    .t-condition {
        font-size: 12px; 
    }
   </style>
<body>
    <?php
        include 'includes/header.php';
    ?>
   <section class="bg-light mt-4 pt-5 mt-5">
        <div class="container py-2">
            <div class="py-1 mt-4">
                <span class="my-4 text-white pt-4 ">
                    <a href="index.php" class="text-decoration-none header-link px-1">Home <i class="fa-solid fa-chevron-right px-1"></i></a>
                    <span class=""><a href="#" class="text-decoration-none text-dark px-1">Used tractor</a></span>
                </span> 
            </div>
        </div>
    </section>
    <section>
        <div class="container">
            <div class="row my-3">
                <div class="col-12 col-sm-6 col-lg-6 col-md-6">
                    <div>
                        <h4> <span id="brand_main"></span> <span id="model_name"></span></h4>
                    </div>
                    <div>
                        <div class="swiper swiper_buy mySwiper2_buy">
                            <div class="swiper-wrapper swiper-wrapper_buy">
                                <div class="swiper-slide swiper-slide_buy"></div>
                            </div>
                        </div>
                        <div thumbsSlider="" class="swiper mySwiper_buy" style="height:75px; width: 43%;" id="swip_img"></div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-lg-6 col-md-6">
                    <h5 class="my-2">₹ <span id="price_main"></span> /-</h5>
                    <h5 class="text-black fw-bold text-center">Are You Interested in this Tractor?</h5>
                    <form action="" id="used_farm_inner_from" class="outline-solid bg-light">
                        <div class="row my-3">
                            <div class="col-12 justify-content-center">
                                <div class="d-flex flex-md-row px-3 flex-column-reverse">
                                    <div class="col-md-12 col-12 col-lg-12 col-lg-12">
                                        <div class="ml-2">
                                            <div class="row px-3">
                                                <div class="col-12 col-lg-6 col-md-6 col-sm-6" hidden>
                                                    <label for="name" class="form-label text-dark">
                                                        <i class="fa-regular fa-user"></i> enquiryName
                                                    </label>
                                                    <input type="text" class="form-control" placeholder="Enter Your Name" id="enquiry_type_id" value="21" name="fname">
                                                </div>
                                                <div class="col-12 col-lg-6 col-md-6 col-sm-6" hidden>
                                                    <label for="name" class="form-label text-dark">
                                                        <i class="fa-regular fa-user"></i> product_id
                                                    </label>
                                                    <input type="text" class="form-control" id="product_id" value="">
                                                </div>
                                                <div class="col-12 col-lg-6 col-md-6 col-sm-6">
                                                    <label for="name" class="form-label text-dark">
                                                        <i class="fa-regular fa-user"></i> First Name
                                                    </label>
                                                    <input type="text" class="form-control" placeholder="Enter Your Name" id="fname" name="fname">
                                                </div>
                                                <div class="col-12 col-lg-6 col-md-6 col-sm-6">
                                                    <label for="name" class="form-label text-dark">
                                                        <i class="fa-regular fa-user"></i> Last Name
                                                    </label>
                                                    <input type="text" class="form-control" placeholder="Enter Your Name" id="lname" name="lname">
                                                </div>
                                                <div class="col-12">
                                                    <label for="number" class="form-label text-dark">
                                                        <i class="fa fa-phone" aria-hidden="true"></i> Phone Number
                                                    </label>
                                                    <input type="text" class="form-control" placeholder="Enter Number" id="number" name="number">
                                                </div>
                                                <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                                                    <label for="yr_state" class="form-label text-dark" id="state" name="state">
                                                        <i class="fas fa-location"></i> State
                                                    </label>
                                                    <select class="form-select py-2 state-dropdown" aria-label=".form-select-lg example" id="state_form" name="state"></select>
                                                </div>
                                                <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                                                    <label class="form-label text-dark">
                                                        <i class="fa-solid fa-location-dot"></i> District
                                                    </label>
                                                    <select class="form-select py-2 district-dropdown" aria-label=".form-select-lg example" name="district" id="district_form"></select>
                                                </div>
                                                <div class="col-12 col-sm-12 col-md-6 col-lg-6 mt-2">
                                                    <label for="yr_tehsil" class="form-label text-dark"> Tehsil</label>
                                                    <select class="form-select py-2 tehsil-dropdown" aria-label=".form-select-lg example" id="tehsil" name="tehsil"></select>
                                                </div>
                                                <div class="col-12 col-sm-12 col-md-6 col-lg-6 mt-2">
                                                    <label for="yr_price" class="form-label text-dark">Price</label>
                                                    <input type="yr_price" class="form-control" placeholder="Enter Price" id="price" name="price">
                                                </div>
                                                <div class="col-12 col-sm-12 col-md-6 col-lg-6 mt-3">
                                                    <div>
                                                        <input type="submit" value="Contact Seller" id="contact_seller" class="btn btn-success w-100" data-bs-toggle="modal" data-bs-target="get_OTP_btn">
                                                    </div>
                                                </div>
                                                <div class="col-12 col-sm-12 col-md-6 col-lg-6 mt-3">
                                                    <div class="get-loan text-center">
                                                        <a href="new_tractor_loan.php" class="btn border-success text-success w-100">Get Loan</a>
                                                    </div>
                                                </div>
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
    <section class="bg-light">
        <div class="container">
            <div class="row">
                <!-- Left Column -->
                <div class="col-12 col-lg-9 col-md-9 col-sm-12">
                    <!-- Specifications -->
                    <div class="row my-4">
                        <!-- Engine Power -->
                        <div class="col-6 col-sm-4 col-md-2 p-2">
                            <div class="Engine shadow p-3 bg-white d-flex flex-column align-items-center justify-content-between" style="height: 150px;">
                                <div class="text-center">
                                    <img src="assets/images/engine.png" width="50" height="50" alt="Engine">
                                </div>
                                <div class="text-center">
                                    <h6 class="engine_ fw-bold fs-6 m-1 text-dark">Engine Power</h6>
                                    <p class="engine_name"><span id="engine_powerhp">39</span> HP</p>
                                </div>
                            </div>
                        </div>
                        <!-- Total Hours -->
                        <div class="col-6 col-sm-4 col-md-2 p-2">
                            <div class="Total-Hours shadow p-3 bg-white d-flex flex-column align-items-center justify-content-between" style="height: 150px;">
                                <div class="text-center">
                                    <img src="assets/images/total-hours.png" width="50" height="50" alt="Total Hours">
                                </div>
                                <div class="text-center">
                                    <h6 class="fw-bold fs-6 m-1 text-dark">Total Hours</h6>
                                    <p class="total_time"><span id="hours_driven">250</span> hrs</p>
                                </div>
                            </div>
                        </div>
                        <!-- Tyre Condition -->
                        <div class="col-6 col-sm-4 col-md-2 p-2">
                            <div class="Tyre shadow p-3 bg-white d-flex flex-column align-items-center justify-content-between" style="height: 150px;">
                                <div class="text-center">
                                    <img src="assets/images/tyre-condition.png" width="50" height="58" alt="Tyre Condition">
                                </div>
                                <div class="text-center">
                                    <h6 class="fw-bold fs-6 m-1 text-dark">Tyre Condition</h6>
                                    <p class="t-condition"><span id="tyre_condition">Good</span></p>
                                </div>
                            </div>
                        </div>
                        <!-- Engine Condition -->
                        <div class="col-6 col-sm-4 col-md-2 p-2">
                            <div class="Engine-Condition shadow p-3 bg-white d-flex flex-column align-items-center justify-content-between" style="height: 150px;">
                                <div class="text-center">
                                    <img src="assets/images/engine-condition.png" width="40" height="40" alt="Engine Condition">
                                </div>
                                <div class="text-center">
                                    <h6 class="fw-bold fs-6 m-1 text-dark">Engine Condition</h6>
                                    <p class="t-condition"><span id="engine_condition">Excellent</span></p>
                                </div>
                            </div>
                        </div>
                        <!-- Financier -->
                        <div class="col-6 col-sm-4 col-md-2 p-2">
                            <div class="Financier shadow p-3 bg-white d-flex flex-column align-items-center justify-content-between" style="height: 150px;">
                                <div class="text-center">
                                    <img src="assets/images/financier.png" width="50" height="50" alt="Financier/NOC">
                                </div>
                                <div class="text-center">
                                    <h6 class="fw-bold fs-6 m-1 text-dark">Financier/NOC</h6>
                                    <p class="rto_noumber"><span id="noc">Yes</span></p>
                                </div>
                            </div>
                        </div>
                        <!-- RC -->
                        <div class="col-6 col-sm-4 col-md-2 p-2">
                            <div class="RC shadow p-3 bg-white d-flex flex-column align-items-center justify-content-between" style="height: 150px;">
                                <div class="text-center">
                                    <img src="assets/images/rc.png" width="50" height="50" alt="RC">
                                </div>
                                <div class="text-center">
                                    <h6 class="fw-bold fs-6 m-1 text-dark">RC</h6>
                                    <p class="financier_no"><span id="rc_number">12345</span></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Specifications Table -->
                    <div class="my-4">
                        <div class="text-editor-black bg-white p-3">
                            <h4>Specifications For <span id="model_name2"></span></h4>
                        </div>
                    </div>
                    <table class="table w-100 table-hover table-striped my-4">
                        <tbody>
                            <tr>
                                <td class="table-data">Brand</td>
                                <td class="table-data" id="brand_name"></td>
                            </tr>
                            <tr>
                                <td class="table-data">Model</td>
                                <td class="table-data" id="model_name3"></td>
                            </tr>
                            <tr>
                                <td class="table-data">Tyre Condition</td>
                                <td class="table-data" id="tyre2"></td>
                            </tr>
                            <tr>
                                <td class="table-data">Engine Condition</td>
                                <td class="table-data" id="engine2"></td>
                            </tr>
                        </tbody>
                    </table>
                    <!-- Seller Info -->
                    <div class="my-4">
                        <div class="text-editor-black bg-white p-3">
                            <h4>Seller Info <span id="model_name4"></span></h4>
                        </div>
                    </div>
                    <table class="table1 w-100 table-hover table-striped my-4">
                        <tbody>
                            <tr>
                                <td class="table-data">Name</td>
                                <td class="table-data" id="name"></td>
                            </tr>
                            <tr>
                                <td class="table-data">Mobile Number</td>
                                <td class="table-data" id="mobile"></td>
                            </tr>
                            <tr>
                                <td class="table-data">District</td>
                                <td class="table-data" id="district">Durg</td>
                            </tr>
                            <tr>
                                <td class="table-data">State</td>
                                <td class="table-data" id="state_td"></td>
                            </tr>
                        </tbody>
                    </table>
                    <!-- Description -->
                    <div class="my-4">
                        <div class="text-editor-black bg-white p-3">
                            <h4><span id="model4"></span> Description</h4>
                        </div>
                        <p id="description"></p>
                    </div>
                </div>
                <!-- Right Column -->
                <div class="col-12 col-lg-3 col-md-3 col-sm-3">
                    <div class="row">
                        <div>
                            <h1 class="h4 my-4">New Popular Tractor</h1>
                            <div id="productContainerpopular" class="row"></div>
                        </div>
                        <div class="text-center">
                            <button id="load_more" class="btn btn-success">Load More</button>
                        </div>
                        <div class="sticky my-3">
                            <div class="popular_used_tractor mb-3">
                                <h4>New Upcoming Tractors</h4>
                                <div class="popular-used-tractor">
                                    <div class="row">
                                        <div id="productContainerupcoming" class="row"></div>
                                        <div class="col-12 text-center">
                                            <button id="load_btn" type="button" class="btn btn-success">
                                                <i class="fas fa-undo"></i> Load More
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
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
    include 'includes/footertag.php'; 
    include 'includes/footer.php';
    ?> 
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.3/dist/jquery.validate.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.inputmask/5.0.6/jquery.inputmask.min.js"></script>
<script>
$(document).ready(function(){
    console.log('testing');
    $('#price').on('input', function() {
            var value = $(this).val().replace(/\D/g, ''); 
            var formattedValue = Number(value).toLocaleString('en-IN');
            $(this).val(formattedValue);
        });
        var input = document.getElementById('price');
        input.focus();
        input.setSelectionRange(0, 0);
        input.style.textAlign = 'left';

    $('#used_farm_inner_from').validate({
        rules:{
            fname:{
                required:true,
            },
            lname:{
                required:true,
            },
            number:{
                required:true,
            },
            state:{
                required:true,
            },
            district:{
                required:true,
            },
            tehsil:{
                required:true,
            },
            price:{
                required:true,
            }
        },
        messages:{
            fname:{
                required:"This field is required",
            },
            lname:{
                required:"This field is required",
            },
            number:{
                required:"This field is required",
            },
            state:{
                required:"This field is required",
            },
            district:{
                required:"This field is required",
            },
            tehsil:{
                required:"This field is required",
            },
            price:{
                required:"This field is required",
            }
        },
        submitHandler: function(form) {
    form.submit();
        }
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
</body>
</html>