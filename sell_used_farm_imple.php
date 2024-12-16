<!DOCTYPE html>
<html lang="en">

   <?php
  include 'includes/headertag.php';
    //include 'includes/headertagadmin.php';
     include 'includes/footertag.php';
     
     ?> 
    <script> var APIBaseURL = "<?php echo $APIBaseURL; ?>";</script>
    <script> var baseUrl = "<?php echo $baseUrl; ?>";</script>
    <script src="<?php $baseUrl; ?>model/sell_used_farm_imple.js"></script>
    <script src="<?php $baseUrl; ?>model/State_dist_tehsil.js"></script>

<head>
    <!-- Google tag (gtag.js) -->
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

    <!-- SweetAlert2 -->
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
            /* border: 6px solid #007bff; */
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

<section class="bg-light mt-3 pt-5">
    <div class="container pt-5">
        <div class="py-2">
            <span class="my-4 text-white pt-4 ">
                <a href="index.php" class="text-decoration-none header-link px-1">Home <i class="fa-solid fa-chevron-right px-1"></i></a>
                    <span class=""><a href="#" class="text-decoration-none header-link  px-1">Buy Used <i class="fa-solid fa-chevron-right px-1"></i> </a></span>
                    <span class="text-dark">Sell Old Implement</span>
            </span> 
        </div>
    </div>
</section>
<section>
    <div class="d-sm-flex align-items-center justify-content-between w-100">

        <!-- in mobile remove the clippath -->
        <div class="col-12 h-100 " style="min-height: 360px; background-image: url(assets/images/image_2023_09_02T08_22_01_554Z.png); background-position: center; background-size: cover;">
        </div>
    </div>
    <div class="page-banner-content text-center position-absolute px-2" style="top:14%">
    <h2 class=" text-dark ">Sell Your <span class="text-success">Used Implements</span></h2>
    <h4 class="mb-4">"Photo Khicho Implements Becho"</h4>
    <!-- <h4 class="mb-4">"Fill the information to sell your used Implement"</h4> -->
        </div>
</section>


<section class="form-view bg-white ">
    <div class="container-mid" style="position: relative;">
        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-7">
                <!-- <form id="signUpForm_sellused"  method="Post" class="bg-light"> -->
                    <div id="container" class="container mt-5">
                     
                        <!-- <form id="signUpForm_sllused" class="bg-light"action=""> -->
                            <!-- FORM 1 -->
                        <form id="form-step-1" class="bg-light mul_stp_frm"  method="post">
                            <div class="d-flex justify-content-center mb-3">
                                <div class="col-12 col-lg-3 col-md-3 col-sm-3">
                                    <div class="float-start">Implement Info</div>
                                </div>
                                <div class="col-12 col-lg-3 col-md-3 col-sm-3">
                                    Implement Condition
                                </div>
                                <div class="col-12 col-lg-4 col-md-4 col-sm-4">
                                    <div class="text-center">Implement  Images</div>
                                </div>
                                <div class="col-12 col-lg-2 col-md-2 col-sm-2">
                                    <div class="float-end">Personal Info</div>
                                </div>                                
                            </div>
                            <div class="progress px-1" style="height: 4px;">
                                <div class="progress-bar" role="progressbar" style="width: 0%; background-color: ##6f98c2;" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>

                            <div class="step-container d-flex justify-content-between">
                                <div class="step-circle" onclick="displayStep(1)">1</div>
                                <div class="step-circle" onclick="displayStep(2)">2</div>
                                <div class="step-circle" onclick="displayStep(3)">3</div>
                                <div class="step-circle" onclick="displayStep(4)">4</div>
                            </div>
                            <div class="step step-1">
                            <!-- Step 1 form fields here -->
                                <div class="step_sellused">
                                    <p class="text-center mb-4">Your Implement Informations</p>
                                    <div class="row">
                                    <div class="col-12 col-lg-6 col-md-6 col-sm-6 " hidden>
                                        <label for="name" class="form-label fw-bold text-dark"> <i class="fa-regular fa-user"></i> enquiryName</label>
                                        <input type="text" class="form-control" placeholder="Enter Your Name" id="enquiry_type_id" value="5" name="fname">
                                    </div>
                                    <div class="col-12 col-lg-6 col-md-6 col-sm-6 " hidden>
                                        <label for="name" class="form-label fw-bold text-dark"> <i class="fa-regular fa-user"></i> product type id</label>
                                        <input type="text" class="form-control" id="product_type_id" value="">
                                    </div>
                                        <div class="col-12 col-lg-12 col-md-12 col-sm-12 mb-2 mt-3 ">
                                            <div class="form-outline">
                                                <label for="_category" class="form-label mb-0 text-dark fw-bold">Category</label>
                                                <select class="form-select py-2 " aria-label=".form-select-lg example" name="_category" id="c_category">
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-12 col-lg-6 col-md-6 col-sm-6 mb-2 mt-3 ">
                                            <div class="form-outline">
                                                <label for="_brand" class="form-label mb-0 text-dark fw-bold">Brand</label>
                                                <select class="form-select py-2 " aria-label=".form-select-lg example" name="_brand" id="brand_1">
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-12 col-lg-6 col-md-6 col-sm-6 mb-2 mt-3 ">
                                            <div class="form-outline">
                                                <label for="m_name" class="form-label mb-0 text-dark fw-bold">Model Name</label>
                                                <select class="form-select py-2 " aria-label=".form-select-lg example" name="m_name" id="m_name">
                                                </select>
                                            </div>
                                        </div> 
                                        <div class="col-12 col-lg-6 col-md-6 col-sm-6 mb-2 mt-3 ">
                                            <div class="form-outline">
                                                <label for="p_year" class="form-label mb-0 text-dark fw-bold">Purchase Year</label>
                                                <select class="form-select py-2 " aria-label=".form-select-lg example" name="p_year" id="p_year">
                                                 </select>
                                            </div>
                                        </div>    
                                        <div class="col-12 col-lg-6 col-md-6 col-sm-6 mb-2 mt-3">
                                            <div class="form-outline">
                                                <label for="f_name" class="form-label mb-0 text-dark">Price</label>
                                                <input type="text" class="form-control" placeholder="Enter price" id="p_price" name="p_price" inputmode="decimal" >
                                            </div>
                                        </div> 
                                    </div>
                                    <div class="form-footer d-flex my-3">
                                        <button type="submit" id="  " class="btn btn-success w-100 next-step">Next</button>
                                    </div>
                                </div>
                            </div>
                        </form>

                        <!-- FORM 2 -->
                        <form id="form-step-2" class="bg-light mul_stp_frm" style="display:none;" method="post" action="">
                            <div class="d-flex justify-content-center mb-3">
                                <div class="col-12 col-lg-3 col-md-3 col-sm-3">
                                    <div class="float-start">Implement Info</div>
                                </div>
                                <div class="col-12 col-lg-3 col-md-3 col-sm-3">
                                    Implement Condition
                                </div>
                                <div class="col-12 col-lg-4 col-md-4 col-sm-4">
                                    <div class="text-center">Implement  Images</div>
                                </div>
                                <div class="col-12 col-lg-2 col-md-2 col-sm-2">
                                    <div class="float-end">Personal Info</div>
                                </div>                                
                            </div>
                            <div class="progress px-1" style="height: 4px;">
                                <div class="progress-bar" role="progressbar" style="width: 0%; background-color: ##6f98c2;" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <div class="step-container d-flex justify-content-between">
                                <div class="step-circle" onclick="displayStep(1)">1</div>
                                <div class="step-circle" onclick="displayStep(2)">2</div>
                                <div class="step-circle" onclick="displayStep(3)">3</div>
                                <div class="step-circle" onclick="displayStep(4)">4</div>
                            </div>
                            <div class="step step-2">
                                <!-- Step 2 form fields here -->
                                <div class="">
                                    <p class="text-center mb-4">Your Implement Condition</p>
                                    <div class="row">                                                           
                                        <div class="col-12 col-lg-6 col-md-6 col-sm-6 mb-2 mt-3 ">
                                            <div class="form-outline">
                                                <label for="h_driven" class="form-label mb-0 text-dark fw-bold">Hours Driven</label>
                                                <select class="form-select py-2 " aria-label=".form-select-lg example" name="h_driven" id="h_driven">
                                                </select>
                                            </div>
                                        </div> 
                                        <div class="col-12 col-sm-12 col-md-12 col-lg-12 mt-3">
                                                <label for="a_imple" class="form-label text-dark fw-bold">About Your Implement</label>
                                                <textarea class="form-control" rows="3" placeholder="Leave a comment here (max 200 words)" name="a_imple" id="a_imple" onkeydown="return /[a-zA-Z\s]/i.test(event.key)"  oninput="limitWords(this, 200)"></textarea>
                                        </div>

                                    </div>
                                    <div class="form-footer d-flex mt-3">
                                        <button type="button" class="btn btn-success w-50 prev-step" id="">Previous</button>
                                        <button type="button" class="btn btn-success ms-2 w-50 next-step" id="">Next</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <!-- FORM 3  -->
                        <form id="form-step-3" class="bg-light mul_stp_frm" style="display:none;" method="post" action="">
                            <div class="d-flex justify-content-center mb-3">
                                <div class="col-12 col-lg-3 col-md-3 col-sm-3">
                                    <div class="float-start">Implement Info</div>
                                </div>
                                <div class="col-12 col-lg-3 col-md-3 col-sm-3">
                                    Implement Condition
                                </div>
                                <div class="col-12 col-lg-4 col-md-4 col-sm-4">
                                    <div class="text-center">Implement Images</div>
                                </div>
                                <div class="col-12 col-lg-2 col-md-2 col-sm-2">
                                    <div class="float-end">Personal Info</div>
                                </div>                                
                            </div>
                            <div class="progress px-1" style="height: 4px;">
                                <div class="progress-bar" role="progressbar" style="width: 0%; background-color: ##6f98c2;" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <div class="step-container d-flex justify-content-between">
                                <div class="step-circle" onclick="displayStep(1)">1</div>
                                <div class="step-circle" onclick="displayStep(2)">2</div>
                                <div class="step-circle" onclick="displayStep(3)">3</div>
                                <div class="step-circle" onclick="displayStep(4)">4</div>
                            </div>
                            <div class="step step-3">
                                <!-- Step 3 form fields here -->
                                <p class="text-center mb-4">Implement Images</p>
                                <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                                    <div class="upload__box">
                                        <div class="upload__btn-box">
                                            <label>
                                                <p class="upload__btn w-100">Upload images</p>
                                                <input type="file" multiple="" data-max_length="3" class="upload__inputfile" id="m_file" name="_file">
                                            </label>
                                        </div>
                                        <div class="col-sm-12" style="display:flex; flex-wrap:wrap;">
                                            <div class="upload__img-wrap"></div>
                                        </div>
                                    </div>
                                    <!-- <input type="file" id="_file" class="w-100 pb-0 mb-auto" name="_file" required> -->
                                </div>
                                    <div class="form-footer d-flex mt-3">
                                        <button type="button" class="btn btn-success w-50 prev-step" id="">Previous</button>
                                        <button type="button" class="btn btn-success ms-2 w-50 next-step" id="">Next</button>
                                    </div>
                                </div>
                            </div>
                        </form>

                        <form id="form-step-4" class="bg-light mul_stp_frm" action="" method="post" style="display:none;">
                            <div class="d-flex justify-content-center mb-3">
                                <div class="col-12 col-lg-3 col-md-3 col-sm-3">
                                    <div class="float-start">Implement Info</div>
                                </div>
                                <div class="col-12 col-lg-3 col-md-3 col-sm-3">
                                    Implement Condition
                                </div>
                                <div class="col-12 col-lg-4 col-md-4 col-sm-4">
                                    <div class="text-center">Implement  Images</div>
                                </div>
                                <div class="col-12 col-lg-2 col-md-2 col-sm-2">
                                    <div class="float-end">Personal Info</div>
                                </div>                                
                            </div>
                            <div class="progress px-1" style="height: 4px;">
                                <div class="progress-bar" role="progressbar" style="width: 0%; background-color: ##6f98c2;" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <div class="step-container d-flex justify-content-between">
                                <div class="step-circle" onclick="displayStep(1)">1</div>
                                <div class="step-circle" onclick="displayStep(2)">2</div>
                                <div class="step-circle" onclick="displayStep(3)">3</div>
                                <div class="step-circle" onclick="displayStep(4)">4</div>
                            </div>
                            <div class="step step-4">
                                <!-- Step 3 form fields here -->
                                <p class="text-center mb-4">Your Personal Info</p>
                                <div class="row">
                                        <div class="col-12 col-lg-6 col-md-6 col-sm-6 mb-2 mt-3 ">
                                            <div class="form-outline">
                                                <label for="f_name" class="form-label mb-0 text-dark"> <i class="fa-regular fa-user"></i> First Name</label>
                                                <input type="text" class="form-control mb-0" placeholder="Enter Your Name" id="f_name" name="f_name" >
                                            </div>
                                        </div>
                                        <div class="col-12 col-lg-6 col-md-6 col-sm-6 mb-2 mt-3">
                                            <div class="form-outline">
                                                <label for="eo_name" class="form-label text-dark"> <i class="fa-regular fa-user"></i> Last Name</label>
                                                <input type="text" class="form-control mb-0" placeholder="Enter Your Name" id="l_name" name="eo_name" >
                                            </div>
                                        </div>
                                        <div class="col-12 col-lg-6 col-md-6 col-sm-6 ">
                                            <div class="form-outline mt-3">
                                                <label for="eo_number" class="form-label text-dark"> <i class="fa fa-phone" aria-hidden="true"></i> Phone Number</label>
                                                <input type="text" class="form-control mb-0" placeholder="Enter Number" id="m_number" name="eo_number" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');" >
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                                        <div class="form-outline mt-3">
                                                <label for="eo_state" class="form-label text-dark" id="state" name="state"> <i class="fas fa-location"></i> State</label>
                                                <select class="form-select py-2 state-dropdown" aria-label=".form-select-lg example"id="s_state" name="eo_state">
                                             
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                                            <div class="form-outline mt-4">
                                                <label for="eo_dist" class="form-label text-dark"><i class="fa-solid fa-location-dot"></i> District</label>
                                                <select class="form-select py-2 district-dropdown" aria-label=".form-select-lg example" name="eo_dist" id="d_dist">
                                              
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
                                
                                <div class="form-footer d-flex mt-4">
                                    <button type="button" class="btn w-50 btn-primary prev-step">Previous</button>
                                    <button type="button" class="btn w-50 ms-2 btn-success" id="sell_used_trac_btn" data-bs-toggle="modal" data-bs-target="get_OTP_btn">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                <!-- </form> -->
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
                    <button type="button" class="btn btn-success" id="Verify">Verify</button>
                </div>
            </div>
        </div>
    </div>


<section>
    <div class="container">
        <div class="sell my-3">
            <h3 class="text-dark assured ps-3">Sell Your<span class="text-success"> Used Implements</span></h3>
        </div>
        <div class="sellcontent">
            <h4 class="text-center">Do you want to sell your used implement online?</h4>
            <p class="text-center">Now you can easily sell your old tractor implements without any tension from sitting at your home</p>
            <p class="text-center"> Bharat Agrimart's has come up with a new page ‘Sell Your Used Implements’ where you can comfortably sell your old implement to the right buyer. If you like to sell used tractor implements online then you have to follow a few simple steps.</p>
        </div>
    </div>
</section>


<section class="bg-light">
    <div class="container mt-4 ">
    <div class="row">
                <h5 class="bg-light assured py-1 ps-3">Quick links</h5>
                <div class="col-12 col-md-6 col-lg-3 py-1">
                    <ul>
                        <li><i class="fa-solid fa-angles-right pe-1"></i><a href="find_new_tractors.php" class="text-decoration-none text-dark">New Tractor</a></li>                    
                        <li><i class="fa-solid fa-angles-right pe-1"></i><a href="compare_trac.php" class="text-decoration-none text-dark">Compare</a></li>
                        <li><i class="fa-solid fa-angles-right pe-1"></i><a href="dealership_enq.php" class="text-decoration-none text-dark">Dealership Enquiry</a></li>
                    </ul>
                </div>
                <div class="col-12 col-md-6 col-lg-3 py-1">
                    <ul>
                        <li><i class="fa-solid fa-angles-right pe-1"></i><a href="new_tractor_loan.php" class="text-decoration-none text-dark">Finance</a></li>                    
                        <li><i class="fa-solid fa-angles-right pe-1"></i><a href="upcoming_tractors.php" class="text-decoration-none text-dark">Upcoming Tractors</a></li>
                        <li><i class="fa-solid fa-angles-right pe-1"></i><a href="popular_tractors.php" class="text-decoration-none text-dark">Popular Tractors</a></li> 
                      
                    </ul>
                </div>
                <div class="col-12 col-md-6 col-lg-3 py-1">
                    <ul>
                        <li><i class="fa-solid fa-angles-right pe-1"></i><a href="used_tractor.php" class="text-decoration-none text-dark">Used Tractors</a></li>
                        <li><i class="fa-solid fa-angles-right pe-1"></i><a href="latest_tractor.php" class="text-decoration-none text-dark">Latest Tractors</a></li>
                        <li><i class="fa-solid fa-angles-right pe-1"></i><a href="Insurance.php" class="text-decoration-none text-dark">Insurance</a></li>
                    </ul>
                </div>
                <div class="col-12 col-md-6 col-lg-3 py-1">
                    <ul>
                       
                        <li><i class="fa-solid fa-angles-right pe-1"></i><a href="harvester.php" class="text-decoration-none text-dark">Harvester</a></li>
                        <li><i class="fa-solid fa-angles-right pe-1"></i><a href="nursery_ui.php" class="text-decoration-none text-dark">Nursery</a></li>
                        <li><i class="fa-solid fa-angles-right pe-1"></i><a href="engine_oil.php" class="text-decoration-none text-dark">Engine Oil</a></li>
                    </ul>
                </div>
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
    <!-- SCRIPT FOR THE DISPLAY & HIDE -->
    <script>
        $(document).ready(function () {
            var currentStep = 1;
            var updateProgressBar;

            function displayStep(stepNumber) {
                if (stepNumber >= 1 && stepNumber <= 4) {
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
                var progressPercentage = ((currentStep - 1) / 3) * 100;
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



    <!-- SCRIPT FOR THE VALIDATION OF 1st FORM -->
    <script>
    
    $(document).ready(function(){
        $('#p_price').on('input', function() {
            var value = $(this).val().replace(/\D/g, ''); // Remove non-digit characters
            var formattedValue = Number(value).toLocaleString('en-IN'); // Format using Indian numbering system
            $(this).val(formattedValue);
        });

        // Set cursor position to the beginning of the input field
        var input = document.getElementById('p_price');
        input.focus();
        input.setSelectionRange(0, 0);

        // Set text alignment to left
        input.style.textAlign = 'left';

        // Validate the form
        $("form[id='form-step-1']").validate({
            rules: {
                _category: {
                    required: true
                },
                _brand: {
                    required: true
                },
                m_name: {
                    required: true
                },
                p_year: {
                    required: true
                },
                p_price: {
                    required: true,
                }
            },
            messages: {
                _category: {
                    required: "Select Your Category"
                },
                _brand: {
                    required: "Select Brand Name"
                },
                m_name: {
                    required: "Select Model Name"
                },
                p_year: {
                    required: "Select Purchase Year"
                },
                p_price: {
                    required: "Enter Price Of Harvester",
                }                   
            },
        });
    });
</script>

    </script>


    <!-- SCRIPT FOR THE VALIDATION OF 2nd FORM -->
    <script>
        $(document).ready(function(){
            $("form[id='form-step-2']").validate({
                rules: {
                    h_driven: {
                        required: true
                    },
                    a_imple: {
                        required: true
                    }
                },
                messages: {
                    h_driven: {
                        required: "Select Hours Driven"
                    },
                    a_imple: {
                        required: "Description About Your Harvester"
                    }                     
                },
            });
        });
    </script>

    <!-- SCRIPT FOR THE VALIDATION OF 3rd FORM -->
    <script>
        $(document).ready(function(){
            $("form[id='form-step-3']").validate({
                rules: {
                    _file: {
                        required: true,
                    }
                },
                messages: {
                    _file: {
                        required: "Upload minimum 1 or maximum 4 image"
                    }                   
                },
            });
        });
    </script>

    

    <!-- SCRIPT FOR THE VALIDATION OF 4th FORM -->
    <script>
        $(document).ready(function(){
            jQuery.validator.addMethod("customPhoneNumber", function(value, element) {
                return /^[6-9]\d{9}$/.test(value); 
            }, "Phone number must start with 6 or above");
            $("form[id='form-step-4']").validate({
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
                        required: "Select Your State"
                    },
                    eo_dist: {
                        required: "Select Your District"
                    }                        
                },
            });            
        });
    </script>


    <!-- SCRIPT FOR LIMITING THE WORDS -->
    <script>
        function limitWords(textarea, maxWords) {
            // Split the input value by spaces to count words
            let words = textarea.value.trim().split(/\s+/);
            
            // Update the word count display (optional)
            let wordCountDisplay = document.getElementById('wordCountDisplay'); // Assuming you have an element to display the word count
            if (wordCountDisplay) {
            wordCountDisplay.textContent = words.length;
            }

            // Restrict input if the word count exceeds the limit
            if (words.length > maxWords) {
            // Prevent further input
            textarea.value = words.slice(0, maxWords).join(' ');
            // Optionally, display a message or alert the user about the limit
            // Example: alert("Maximum word limit reached");
            }
        }
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

    <!-- SCRIPT FOR SHOWING MESSAGE OF SUCCESSFULL SUBMISSION -->
    <script>
        $(document).ready(function () {
            // Function to display a specific step
            function displayStep(stepNumber) {
                if (stepNumber >= 1 && stepNumber <= 4) {
                    $(".mul_stp_frm").hide();
                    $("#form-step-" + stepNumber).show();
                    updateProgressBar(stepNumber); // Update the progress bar for the given step
                }
            }

            // Function to check if all three forms are valid
            function areAllFormsValid() {
                var formsValid = true;

                $("form").each(function () {
                    if (!$(this).valid()) {
                        formsValid = false;
                        return false; // Break out of the loop if any form is invalid
                    }
                });

                return formsValid;
            }

            // function resetForms() {
            //     $("form").each(function () {
            //         this.reset(); 
            //     });

            //     $("#form-step-3 input[type='file']").val(''); 
            // }

            // function updateProgressBar(stepNumber) {
            //     var progressPercentage = ((stepNumber - 1) / 3) * 100;
            //     $(".progress-bar").css("width", progressPercentage + "%");
            // }
            // $("#sell_used_trac_btn").click(function () {
            //     if (areAllFormsValid()) {
            //         resetForms();
            //         displayStep(1); 
            //         showSuccessMessage(); 
            //     }
            // });

            // Function to show success message after form submission using SweetAlert
            // function showSuccessMessage() {
            //     Swal.fire({
            //         title: "Congratulations!",
            //         text: "Your form is submitted successfully!",
            //         icon: "success"
            //     });
            // }
        });
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


</html>