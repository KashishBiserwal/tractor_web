<!DOCTYPE html>
<html lang="en">
<?php
    include 'includes/headertag.php';
    include 'includes/footertag.php';
?> 
    <script> var APIBaseURL = "<?php echo $APIBaseURL; ?>";</script>
    <script> var baseUrl = "<?php echo $baseUrl; ?>";</script>
    <script src="<?php $baseUrl; ?>model/sell_used_trac.js" defer></script>
    <script src="<?php $baseUrl; ?>model/State_dist_tehsil.js" defer></script>
   <?php
    include 'includes/headertag.php';
   ?>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.10.1/dist/sweetalert2.all.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.10.1/dist/sweetalert2.min.css" rel="stylesheet">

<style>
.step-container {
    position: relative;
    text-align: center;
    transform: translateY(-43%);
}
.step-circle {
    width: 20px;
    height: 22px;
    border-radius: 50%;
    background-color: #4a80d2;
    color: #4a80d2;
    line-height: 30px;
    font-weight: bold;
    display: flex;
    align-items: center;
    justify-content: center;
    margin-bottom: 10px;
    cursor: pointer;
}   
html * {
    box-sizing: border-box;
}
.mul_stp_frm{
    overflow-x: hidden;
}  
p {
    margin: 0;
}
.upload__inputfile {
    width: .1px;
    height: .1px;
    opacity: 0;
    overflow: hidden;
    position: absolute;
    z-index: -1;
  }
.upload__btn {
    display: inline-block;
    font-weight: 600;
    color: #fff;
    text-align: center;
    min-width: 150px;
    padding: 5px;
    transition: all .3s ease;
    cursor: pointer;
    border: 2px solid;
    background-color:  #198754;
    border-color:  #198754;
    border-radius: 10px;
    line-height: 26px;
    font-size: 14px;
}
.upload__btn:hover {
    background-color: unset;
    color:  #198754;
    transition: all .3s ease;
}
.upload__btn-box {
    margin-bottom: 10px;
    margin-top:-25px;
}
.upload__img-wrap {
    display: flex;
    flex-wrap: wrap;
}
.upload__img-box {
    flex: 0 0 calc(33.333% - 20px); 
    margin: 0 10px 20px; 
    position: relative;
    display: flex;
    flex-wrap: wrap;
}
.upload__img-close,.upload__img-close_button {
    width: 24px;
    height: 24px;
    border-radius: 50%;
    background-color: rgba(0, 0, 0, 0.5);
    position: absolute;
    top: 10px;
    right: 60px;
    text-align: center;
    line-height: 24px;
    z-index: 1;
    cursor: pointer;
}
.upload__img-close:after,.upload__img-close_button:after {
    content: '\2716';
    font-size: 14px;
    color: white;
}
.img-bg {
    background-repeat: no-repeat;
    background-position: center;
    background-size: contain;
    position: relative;
    width: 160px;
    height: 125px;
}
body {
    font-family: "Open Sans", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen-Sans, Ubuntu, Cantarell, "Helvetica Neue", Helvetica, Arial, sans-serif; 
}
.tractor-banner-section {
    position: relative;
    width: 100%;
    min-height: 360px;
}
.tractor-banner-bg {
    min-height: 360px;
    background-image: url('assets/images/image_2023_09_02T08_22_01_554Z.png');
    background-position: center;
    background-size: cover;
}
.page-banner-content {
    position: absolute;
    top: 30%; 
    left: 50%;
    transform: translateX(-50%); 
    z-index: 10;
    padding: 0 15px; 
    width: 100%;
}
@media (max-width: 768px) {
    .page-banner-content {
        top: 30%;
        padding: 0 10px;
    }
}
@media (max-width: 768px) {
    .mobile-home-page {
            margin-top: -28px  !important; 
        }
        .mobilescreen{
            display:none;
        }
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
<section class="bg-light mt-3 pt-5 mobile-home-page">
    <div class="container pt-5">
        <div class="py-2">
            <span class="my-4 text-white pt-4 ">
                <a href="index.php" class="text-decoration-none header-link px-1">Home <i class="fa-solid fa-chevron-right px-1"></i></a>
                <span class=""><a href="#" class="text-decoration-none header-link  px-1">Sell Used <i class="fa-solid fa-chevron-right px-1"></i> </a></span>
                <span class="text-dark">Sell Used Tractor</span>
            </span> 
        </div>
    </div>
</section>
<section class="tractor-banner-section">
    <div class="d-sm-flex align-items-center justify-content-between w-100">
        <div class="col-12 h-100 tractor-banner-bg"></div>
    </div>
    <div class="page-banner-content text-center">
        <h2 class="text-dark">Sell Your <span class="text-success">Used Tractor</span></h2>
        <h4 class="mb-4">"Photo Khicho Tractor Becho"</h4>
    </div>
</section>
<section class="form-view bg-white ">
    <div class="container-mid" style="position: relative;">
        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-7">
                    <div id="container" class="container mt-5 p-0">
                        <form id="form-step-1" class="bg-light mul_stp_frm" style="" method="post">
                            <div class="d-flex justify-content-center  mb-3">
                                <div class="col-12 col-lg-5 col-md-5 col-sm-5">
                                    <div class="float-start">Tractor Type</div>
                                </div>
                                <div class="col-12 col-lg-3 col-md-3 col-sm-3 mobilescreen">
                                    Condition State
                                </div>
                                <div class="col-12 col-lg-4 col-md-4 col-sm-4">
                                    <div class="float-end">Image</div>
                                </div>                                
                            </div>
                            <div class="progress px-1" style="height: 4px;">
                                <div class="progress-bar" role="progressbar" style="width: 0%; background-color: ##6f98c2;" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <div class="step-container d-flex justify-content-between">
                                <div class="step-circle" onclick="displayStep(1)">1</div>
                                <div class="step-circle" onclick="displayStep(2)">2</div>
                                <div class="step-circle" onclick="displayStep(3)">3</div>
                            </div>
                            <div class="step step-1">
                            <!-- Step 1 form fields here -->
                                <div class="step_sellused">
                                    <p class="text-center mb-4 fw-bold">Sell Your Used Tractor</p>
                                    <div class="row">
                                        <div class="col-12 col-lg-6 col-md-6 col-sm-6 " hidden>
                                            <label for="name" class="form-label fw-bold text-dark"> <i class="fa-regular fa-user"></i> enquiryName</label>
                                            <input type="text" class="form-control" placeholder="Enter Your Name" id="enquiry_type_id" value="1" name="fname">
                                        </div>
                                        <div class="col-12 col-lg-6 col-md-6 col-sm-6 " hidden>
                                            <label for="name" class="form-label fw-bold text-dark"> <i class="fa-regular fa-user"></i> product type id</label>
                                            <input type="text" class="form-control" id="product_type_id" value="">
                                        </div>
                                        <div class="col-12 col-lg-6 col-md-6 col-sm-6 mb-2 mt-3 ">
                                            <div class="form-outline">
                                                <label for="f_name" class="form-label mb-0 text-dark"> <i class="fa-regular fa-user"></i> First Name</label>
                                                <input type="text" class="form-control mb-0" placeholder="Enter Your Name" id="f_name" name="f_name" required>
                                            </div>
                                        </div>
                                        <div class="col-12 col-lg-6 col-md-6 col-sm-6 mb-2 mt-3">
                                            <div class="form-outline">
                                                <label for="eo_name" class="form-label text-dark"> <i class="fa-regular fa-user"></i> Last Name</label>
                                                <input type="text" class="form-control mb-0" placeholder="Enter Your Name" id="l_name" name="eo_name" required>
                                            </div>
                                        </div>
                                        <div class="col-12 col-lg-6 col-md-6 col-sm-6 ">
                                            <div class="form-outline mt-3">
                                                <label for="eo_number" class="form-label text-dark"> <i class="fa fa-phone" aria-hidden="true"></i> Phone Number</label>
                                                <input type="text" class="form-control mb-0" placeholder="Enter Number" id="m_number" name="eo_number" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');" required>
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                                        <div class="form-outline mt-3">
                                                <label for="eo_state" class="form-label text-dark"> <i class="fas fa-location"></i> State</label>
                                                <select class="form-select py-2 state-dropdown" aria-label=".form-select-lg example"id="s_state" name="eo_state" required>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                                            <div class="form-outline mt-4">
                                                <label for="eo_dist" class="form-label text-dark"><i class="fa-solid fa-location-dot"></i> District</label>
                                                <select class="form-select py-2 district-dropdown" aria-label=".form-select-lg example" name="eo_dist" id="d_dist" required>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                                            <div class="form-outline mt-4">
                                                <label for="eo_tehsil" class="form-label fw-bold text-dark"> Tehsil</label>
                                                <select class="form-select py-2 tehsil-dropdown" aria-label=".form-select-lg example" id="t_tehsil" name="eo_tehsil">
                                                 </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-footer d-flex my-3">
                                        <button type="button" style="background: #B90405; color: #fff;" class="btn  w-100 next-step">Next</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <form id="form-step-2" class="bg-light mul_stp_frm" style="display:none;" method="post" action="">
                            <div class="d-flex justify-content-center mb-3">
                                <div class="col-12 col-lg-5 col-md-5 col-sm-5">
                                    <div class="float-start">Tractor Type</div>
                                </div>
                                <div class="col-12 col-lg-3 col-md-3 col-sm-3 mobilescreen">
                                    Condition State
                                </div>
                                <div class="col-12 col-lg-4 col-md-4 col-sm-4">
                                    <div class="float-end">Image</div>
                                </div>                                
                            </div>
                            <div class="progress px-1" style="height: 4px;">
                                <div class="progress-bar" role="progressbar" style="width: 0%; background-color: ##6f98c2;" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <div class="step-container d-flex justify-content-between">
                                <div class="step-circle" onclick="displayStep(1)">1</div>
                                <div class="step-circle" onclick="displayStep(2)">2</div>
                                <div class="step-circle" onclick="displayStep(3)">3</div>
                            </div>
                            <div class="step step-2">
                                <!-- Step 2 form fields here -->
                                <div class="">
                                    <p class="text-center mb-4 fw-bold">Which tractor do you own?</p>
                                     <div class="row">
                                        <div class="col-12 col-sm-12 col-md-6 col-lg-6 mb-3">
                                            <div class="form-outline">
                                                <label for="b_brand" class="form-label text-dark">Brand</label>
                                                <select class="form-select py-2" name="_brand" id="b_brand" required>
                                                    <option value="" selected-disabled=""></option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-12 col-md-6 col-lg-6 mb-3">
                                            <div class="form-outline">
                                                <label for="m_model" class="form-label text-dark">Model</label>
                                                <select class="form-select py-2" name="_model" id="m_model" required>
                                                    <option value="" selected-disabled=""></option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-12 col-md-6 col-lg-6 mb-3">
                                            <div class="form-outline my-2">
                                                <label for="p_year"class="form-label text-dark">Year</label>
                                                <select class="form-select py-2 " aria-label=".form-select-lg example" name="_year" id="p_year" required>
                                                    <option value="" selected-disabled=""></option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-12 col-md-6 col-lg-6 mb-3">
                                            <div class="form-outline my-2">
                                                <label for="engine_condition" class="form-label text-dark">Engine Condition</label>
                                                <select class="form-select py-2 " aria-label=".form-select-lg example" name="_e_con" id="engine_condition" required>
                                                    <option value="">Select Engine Condition</option>
                                                    <option value="0-25%(poor)">0-25%(poor)</option>
                                                    <option value="25-50%(Average)">25-50%(Average)</option>
                                                    <option value="51-75%(Good)">51-75%(Good)</option>
                                                    <option value="76-100%(Very Good)">76-100%(Very Good)</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-12 col-md-6 col-lg-6 mb-3">
                                            <div class="form-outline my-2">
                                                <label for="tyre_condition"class="form-label text-dark">Tyre Condition</label>
                                                <select class="form-select py-2 " aria-label=".form-select-lg example" name="_t_con" id="tyre_condition" required>
                                                    <option value="">Select Tyre Condition</option>
                                                    <option value="0-25%(poor)">0-25%(poor)</option>
                                                    <option value="25-50%(Average)">25-50%(Average)</option>
                                                    <option value="51-75%(Good)">51-75%(Good)</option>
                                                    <option value="76-100%(Very Good)">76-100%(Very Good)</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-12 col-md-6 col-lg-6 mb-3">
                                            <div class="form-outline my-2">
                                                <label for="h_driven"class="form-label text-dark">Hours driven</label>
                                                <select class="form-select py-2 " aria-label=".form-select-lg example" name="_h_driven" id="h_driven" required>
                                                    <option value="">Please select</option>
                                                    <option value="1">Less then 1000</option>
                                                    <option value="2">1001-2000</option>
                                                    <option value="2">2001-3000</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-12 col-md-6 col-lg-6 mb-3">
                                            <label class="pe-3 fs-5 text-dark">RC Number</label>
                                            <input type="radio" id="rc_res" name="fav_rc" value="1">
                                            <label for="rc_res" class="text-dark">Yes</label> 
                                            <input type="radio" id="rc_no" name="fav_rc" value="0">
                                            <label for="rc_no" class="text-dark">No</label>
                                        </div>
                                        <div class="col-12 col-sm-12 col-md-6 col-lg-6 mb-3 rc-num-container" style="display: none;">
                                            <div class="form-outline">
                                                <label class="form-label  text-dark" for="rc_num">Vehicle Registered Number</label>
                                                <input type="text" id="rc_num" name="rc_num" class="data_search form-control input-group-sm py-2" />
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-12 col-md-6 col-lg-6 mb-3">
                                            <label class="pe-3 fs-5 text-dark">Financed</label>
                                            <input type="radio" id="yes" name="fav_language" value="1">
                                            <label for="yes" class="text-dark">Yes</label> 
                                            <input type="radio" id="no" name="fav_language" value="0">
                                            <label for="no" class="text-dark">No</label>
                                        </div>
                                        <div class="col-12 col-sm-12 col-md-6 col-lg-6 mb-3" id="nocDiv" style="display: none;">
                                            <label class="pe-3 fs-5 text-dark">NOC Available:</label>
                                            <input type="radio" id="nocyes" name="fav_language1" value="1">
                                            <label for="nocyes" class="text-dark">Yes</label> 
                                            <input type="radio" id="nocno" name="fav_language1" value="0">
                                            <label for="nocno" class="text-dark">No</label>
                                        </div>
                                    </div>
                                    <div class="form-footer d-flex mb-3">
                                        <button type="button" style="background: #B90405; color: #fff;" class="btn w-50 prev-step" id="">Previous</button>
                                        <button type="button" style="background: #B90405; color: #fff;"  class="btn  ms-2 w-50 next-step" id="">Next</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <form id="form-step-3" class="bg-light mul_stp_frm" action="" method="post" style="display:none;">
                            <div class="d-flex justify-content-center mb-3">
                                <div class="col-12 col-lg-5 col-md-5 col-sm-5">
                                    <div class="float-start">Tractor Type</div>
                                </div>
                                <div class="col-12 col-lg-3 col-md-3 col-sm-3 mobilescreen">
                                    Condition State
                                </div>
                                <div class="col-12 col-lg-4 col-md-4 col-sm-4">
                                    <div class="float-end">Image</div>
                                </div>                                
                            </div>
                            <div class="progress px-1" style="height: 4px;">
                                <div class="progress-bar" role="progressbar" style="width: 0%; background-color: ##6f98c2;" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <div class="step-container d-flex justify-content-between">
                                <div class="step-circle" onclick="displayStep(1)">1</div>
                                <div class="step-circle" onclick="displayStep(2)">2</div>
                                <div class="step-circle" onclick="displayStep(3)">3</div>
                            </div>
                            <div class="step step-3">
                                <!-- Step 3 form fields here -->
                                <p class="text-center mb-4 fw-bold">Upload Tractor Images</p>
                                <p class="mb-0">Upload minimun 1 or maximum 4 images</p>                                
                                <div class="col-12 col-sm-12 col-md-12 col-lg-12 mt-0 mb-0 m-0 p-1">
                                    <div class="upload__box">
                                        <div class="upload__btn-box">
                                            <label>
                                                <p class="upload__btn w-100 m-5">Upload images</p>
                                                <input type="file" multiple="" data-max_length="3" class="upload__inputfile" id="f_file" name="_file">
                                            </label>
                                        </div>
                                        <div class="col-sm-12">
                                            <div class="upload__img-wrap" style="display:flex; flex-wrap:wrap;"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-lg-6 col-md-6 col-sm-6 mb-2 mt-1">
                                    <div class="form-outline">
                                        <label for="f_name" class="form-label mb-0 text-dark">Price</label>
                                        <input type="text" class="form-control" placeholder="Enter price" id="p_price" name="p_price" inputmode="decimal" >
                                    </div>
                                </div>
                                <div class="col-12 col-sm-12 col-md-12 col-lg-12 mt-3">
                                    <label for="a_hrvst" class="form-label text-dark  fw-bold">Description</label>
                                    <textarea class="form-control" rows="3" placeholder="Leave a comment here (max 200 words)" name="about" id="about" onkeydown="return /[a-zA-Z\s]/i.test(event.key)"  oninput="limitWords(this, 200)"></textarea>
                                </div>
                                <div class="col-12 col-sm-12 col-md-12 col-lg-12" hidden>
                                    <label for="td_duration" class="form-label text-dark mt-2 mb-0">How early do you want to sell?</label>
                                    <select class="form-select" aria-label=".form-select-lg example" name="_td_duration" id="td_duration" required>
                                        <option value="" selected-disabled=""></option>
                                        <option value="1">15-30 days</option>
                                        <option value="2">More then 30 days</option>
                                    </select>
                                </div>
                                <div class="form-footer d-flex mt-4">
                                    <button type="button" class="btn w-50 btn-primary prev-step">Previous</button>
                                    <button type="button" id="sell_used_trac_btn" class="btn w-50 ms-2 " style="background: #B90405; color: #fff;" data-bs-toggle="modal" data-bs-target="get_OTP_btn">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
  <!-- OTP Model -->
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
                                <label for="Mobile" class=" text-dark float-start pl-2">Number</label>
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
                    <button type="button" class="btn " style="background: #B90405; color: #fff;" id="Verify">Verify</button>
                </div>
            </div>
        </div>
    </div>
<!-- RECENTLTY ASKED QUESTONS -->
    <section class="about bg-light">
        <div class="container">
            <div class="lecture_heading text-center">
                <h3 class="fw-bold mt-4 pt-4">Recently Asked User Questions about Used Tractor Valuation</h3>
            </div>
            <div class="mt-4 pb-5">
                <div class="accordion " id="accordionFlushExample">
                    <div class="accordion-item  rounded-3">
                        <h2 class="accordion-header p-2" id="flush-headingOne" >
                            <button class="accordion-button collapsed fw-bold h4" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                                Que. What is used tractor valuation?
                            </button>
                        </h2>
                        <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                <p class="text-dark">Ans: Just after purchasing a tractor, your tractor value starts decreasing that is called depreciation. When you sell your used tractor the price isn’t the same one on which you purchased your tractor. So, this Used Tractor Valuation tool helps you to find out the true tractor resale value of your tractor.</p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item rounded-3 my-3">
                        <h2 class="accordion-header p-2" id="flush-headingTwo">
                            <button class="accordion-button collapsed  fw-bold h4" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                                Que. How to know fair tractor value price in our state?
                            </button>
                        </h2>
                        <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                <p class="text-dark">Ans: It's a simple process you get true value tractor price in just a few seconds. You have to tell you some information regarding tractor like your tractor brand, model number, state, year of purchase, tire condition, your name and mobile number. Now you have to go on, get valuation then you get fair used tractor value.</p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item  rounded-3 my-3">
                        <h2 class="accordion-header p-2" id="flush-headingThree">
                            <button class="accordion-button collapsed  fw-bold h4" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                                Que. How to use an old tractor valuation calculator?
                            </button>
                        </h2>
                        <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                <p class="text-dark">Ans. At Bharat Agrimart's, go on used tractor valuation then select your tractor brand name, select model number, select state, then select owner, select year in which you purchased your tractor, select tire condition of your tractor than add your name and mobile number. Then go on, get valuation and finally you get your fair tractor resale value.</p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item  rounded-3 my-3">
                        <h2 class="accordion-header p-2" id="flush-heading4">
                            <button class="accordion-button collapsed  fw-bold h4" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse4" aria-expanded="false" aria-controls="flush-collapse4">
                                Que. How do we know this is a fair tractor resale value?
                            </button>
                        </h2>
                        <div id="flush-collapse4" class="accordion-collapse collapse" aria-labelledby="flush-heading4" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                <p class="text-dark">Ans. Used tractor value calculator is made by our experts. This tool gives the price according to your tractor details which are given by you. Then this tool studies your tractor details and gives you a fair resale tractor price.</p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item  rounded-3 my-3">
                        <h2 class="accordion-header p-2" id="flush-heading5">
                            <button class="accordion-button collapsed  fw-bold h4" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse5" aria-expanded="false" aria-controls="flush-collapse5">
                                Que. After using used tractor valuation in India, how to sell the tractor?
                            </button>
                        </h2>
                        <div id="flush-collapse5" class="accordion-collapse collapse" aria-labelledby="flush-heading5" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                <p class="text-dark">Ans. Just like the used tractor valuation, you can easily sale your old tractor on Bharat Agrimart's. Go on, sell tractor online and fill the form and after that our team helps you in selling your tractor. Upload photos of your tractor if you want to sell your tractor quicker.</p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item  rounded-3 my-3">
                        <h2 class="accordion-header p-2" id="flush-heading6">
                            <button class="accordion-button collapsed  fw-bold h4" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse6" aria-expanded="false" aria-controls="flush-collapse6">
                            Que. Do we have to pay for using used tractor valuation?
                            </button>
                        </h2>
                        <div id="flush-collapse6" class="accordion-collapse collapse" aria-labelledby="flush-heading6" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                <p class="text-dark">Ans. No, Bharat Agrimart's has launched this feature for your convenience. Used tractor value guides free and provides you with a fair tractor resale price in India.</p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item  rounded-3 my-3">
                        <h2 class="accordion-header p-2" id="flush-headingoil">
                            <button class="accordion-button collapsed  fw-bold h4" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseoil" aria-expanded="false" aria-controls="flush-collapseoil">
                            Que. How does the Used Tractor Valuation impact the condition of my tractor tyre?
                            </button>
                        </h2>
                        <div id="flush-collapseoil" class="accordion-collapse collapse" aria-labelledby="flush-headingoil" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                <p class="text-dark">Ans. If you want to know the fair price of your tractor which you want to sell then you have to also give the condition of your tyre because it affects the price.</p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item  rounded-3 my-3">
                        <h2 class="accordion-header p-2" id="flush-heading7">
                            <button class="accordion-button collapsed  fw-bold h4" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse7" aria-expanded="false" aria-controls="flush-collapse7">
                            Que. Is Bharat Agrimart's the right place to sell our tractor?
                            </button>
                        </h2>
                        <div id="flush-collapse7" class="accordion-collapse collapse" aria-labelledby="flush-heading7" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                               <p class="text-dark">Ans. Yes, Bharat Agrimart's is India's number one online platform where you get all brands tractors and their specifications. On Bharat Agrimart's you can also sell your used tractor. From used tractor valuation you get fair price of your tractor and from that, you can easily sale your tractor online.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<section class="bestplace">
    <div class="container py-4 mb-1">
        <div class="col-12 text-center py-4 my-1">
            <div class="col-12"></div>
            <h2 class="my-4 text-white">Bharat Agrimart's is Best Place to <span class=" fw-bold text-warning"> sell your Tractor</span></h3>
            <div class="text-center">
                <span><i class="fa-solid fa-star text-warning"></i> <i class="fa-solid fa-star text-warning"></i> <i class="fa-solid fa-star text-warning"></i> <i class="fa-solid fa-star-half text-warning"></i></span>
            </div>
            <p class="text-white py-2 mt-3">As famous agriculture researchers quote, Tractors do not come with glamorous features like any other automobile but for sure go out with a glamorous price. In simple words, a tractor that comes with a high resale value is more dependable than the ones which do not offer a good resale price. Bharat Agrimart's works to make this price even better for you. If you want to sell your old tractor at the best price and ease then we have got you a simplified process that comforts you and does not hamper you in your daily lives. Register with us, submit your inquiry, post the update about your tractor and you are done, our highly trained tractor specialists quote the best price for your tractor and work to get hassle free buyers on-board. Selling an old tractor had never been this easy, with Bharat Agrimart's your tractor loves you back the way you do.</p>
        </div>
    </div>
</section>

<?php
    include 'includes/footer.php';
    include 'includes/footertag.php';
?>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.3/dist/jquery.validate.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.inputmask/5.0.6/jquery.inputmask.min.js"></script>
    <script>
      $(document).ready(function() {
    $('input[type="radio"]').change(function(){
        if($(this).attr('id') === 'yes'){
            $('#nocDiv').show();
        } else if ($(this).attr('id') === 'no'){
            $('#nocDiv').hide();
        }
    });

    $('input[name="fav_rc"]').change(function(){
        if ($(this).attr('id') === 'rc_res' && $(this).is(':checked')) {
            $('.rc-num-container').show();
        } else {
            $('.rc-num-container').hide();
        }
    });
});
</script>
<script>
    $(document).ready(function () {
        var currentStep = 1;
        var updateProgressBar;
        function displayStep(stepNumber) {
            if (stepNumber >= 1 && stepNumber <= 3) {
                $(".mul_stp_frm").hide();
                $("#form-step-" + stepNumber).show();
                currentStep = stepNumber;
                updateProgressBar();
            }
        }
        $(".next-step").click(function (event) {
            event.preventDefault();
            var currentStepForm = $("#form-step-" + currentStep);
                if (currentStepForm.valid()) {
                    currentStepForm.hide();
                    currentStep++;
                    $("#form-step-" + currentStep).show();
                    updateProgressBar();
                }
            });
            $(".prev-step").click(function (event) {
                event.preventDefault();
                currentStep--;
                displayStep(currentStep);
            });
            updateProgressBar = function () {
                var progressPercentage = ((currentStep - 1) / 2) * 100;
                $(".progress-bar").css("width", progressPercentage + "%");
            };
            $(".step-circle").click(function () {
                var stepNumber = parseInt($(this).text());
                if (stepNumber > currentStep) {
                    var currentStepForm = $("#form-step-" + currentStep);
                    if (!currentStepForm.valid()) {
                        return;
                    }
                }
                displayStep(stepNumber);
            });
            displayStep(1);
        });
    </script>
    <script>
        $(document).ready(function(){
            jQuery.validator.addMethod("customPhoneNumber", function(value, element) {
                return /^[6-9]\d{9}$/.test(value); 
            }, "Phone number must start with 6 or above");
            $("form[id='form-step-1']").validate({
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
                        maxlength: 10,
                        digits: true,
                        customPhoneNumber: true 
                    },
                    eo_state: {
                        required: true
                    },
                    eo_dist: {
                        required: true
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
                    },
                    eo_dist: {
                        required: "Select Your District",
                    }                        
                },
            });
        });
    </script>
    <!-- SCRIPT FOR THE VALIDATION OF 2nd FORM -->
    <script>
        $(document).ready(function(){
            $("form[id='form-step-2']").validate({
                rules: {
                    _brand: {
                        required: true
                    },
                    _model: {
                        required: true
                    },
                    _year: {
                        required: true
                    },
                    _e_con: {
                        required: true
                    },
                    _t_con: {
                        required: true
                    },
                    _h_driven: {
                        required: true
                    }
                },
                messages: {
                    _brand: {
                        required: "Select Your Brand"
                    },
                    _model: {
                        required: "Select Your Model"
                    },
                    _year: {
                        required: "Select Your Year"
                    },
                    _e_con: {
                        required: "Select Tractor Condition"
                    },
                    _t_con: {
                        required: "Select Tyre Condition"
                    },
                    _h_driven: {
                        required: "Select Hour Driven"
                    }                     
                },
            });
        });
    </script>
    <!-- SCRIPT FOR THE VALIDATION OF 3rd FORM -->
<script>
    $(document).ready(function() {
        $('#p_price').on('input', function() {
            var value = $(this).val().replace(/\D/g, ''); 
            var formattedValue = Number(value).toLocaleString('en-IN');
            $(this).val(formattedValue);
        });

        var input = document.getElementById('p_price');
        input.focus();
        input.setSelectionRange(0, 0);

        input.style.textAlign = 'left';
    // Validate the form
    $("form[id='form-step-3']").validate({
        rules: {
            _file: {
                required: true,
            },
            about: {
                required: true,
            },
            _td_duration: {
                required: true,
            },
            p_price:{
                required: true,
            }
        },
        messages: {
            _file: {
                required: "Upload minimum 1 or maximum 4 image",
            },
            about: {
                required: "This Field is required",
            },
            _td_duration: {
                required: "Select your time duration",
            } ,
            p_price:{
                required: "This Field is required",
            }
        },
    });
});
</script>
    <!-- SCRIPT FOR THE VALIDATION OF IAMGE UPLOAD -->
    <script>
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
                    }
                    else
                    {
                        var len = 0;
                        for (var i = 0; i < imgArray.length; i++) {
                            if (imgArray[i] !== undefined) {
                                len++;
                            }
                        }
                        if (len > maxLength) {
                            return false;
                        }
                        else {
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
</script>
<script>
    $(document).ready(function () {
        function displayStep(stepNumber) {
            if (stepNumber >= 1 && stepNumber <= 4) {
                $(".mul_stp_frm").hide();
                $("#form-step-" + stepNumber).show();
                updateProgressBar(stepNumber); 
            }
        }
            // Function to check if all three forms are valid
        function areAllFormsValid() {
            var formsValid = true;
                $("form").each(function () {
                    if (!$(this).valid()) {
                        formsValid = false;
                        return false; 
                    }
                });
                return formsValid;
            }
            // Function to reset all forms
            function resetForms() {
                $("form").each(function () {
                    this.reset(); 
                });
                $("#form-step-3 input[type='file']").val(''); 
            }
            function updateProgressBar(stepNumber) {
                var progressPercentage = ((stepNumber - 1) / 3) * 100; 
                $(".progress-bar").css("width", progressPercentage + "%");
            }
            $("#sell_used_trac_btn").click(function () {
                if (areAllFormsValid()) {
                    resetForms(); 
                    displayStep(1); 
                    showSuccessMessage(); 
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
  