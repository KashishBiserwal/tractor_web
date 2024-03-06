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
  <script src="<?php $baseUrl; ?>model/hatbazar_buy_customerlist.js"></script>
  <script src="<?php $baseUrl; ?>model/State_dist_tehsil.js"></script>

</head>

<body>
    <?php
   include 'includes/header.php';
   ?>

    <section class=" bg-light mt-5 pt-5">
        <div class="container-fullwidth pt-4">
            <div class="mt-4">
                <span class="mt-5 text-white pt-5 ">
                    <a href="index.php" class="text-decoration-none header-link px-1">Home <i
                            class="fa-solid fa-chevron-right px-1"></i></a>
                    <span class=""><span class="text-dark px-1">Haatbazar<i class="fa-solid fa-chevron-right px-1"></i>
                        </span></span>
                    <span class="text-dark">Buy</span>
                </span>
            </div>
        </div>
    </section>
    <section>
        <div class="container mt-4">
            <div class="row">
                <div class="col-12 col-sm-9 col-lg-9 col-md-9">
                    <h3 class="py-2">Buy Your Item From <span class="text-success fw-bold">Haatbazar</span> </h3>
                    <div class="row my-4" id="productContainer">
                      
                      

                    </div>
                    <div class="col-12 text-center mb-4">
                       <button class="btn btn-success btn-lg" id="load_more">Load more</button>
                    </div>
                </div>

                    <div class="col-12 col-sm-3 col-lg-3 col-md-3">
                        <div class=" row mb-3" id="">
                        <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                            <div class="row text-center">
                                <div class="col-6 col-sm-6 col-lg-6 col-md-6 g-1">
                                    <button id="resetButton" type="button" onclick="resetform()" class="add_btn btn btn-success w-75">
                                        <i class="fas fa-undo"></i> Reset </button>
                                </div>
                                <div class="col-6 col-sm-6 col-lg-6 col-md-6 g-1">
                                    <button id="apply_filter_bnt" type="button" class="add_btn btn btn-success w-75">
                                        <i class="fas fa-filter"></i> Apply Filter</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="scrollbar mb-3" id="filter_district">
                        <div class="force-overflow">
                            <h5 class=" ps-1 text-dark fw-bold pt-2">Search By State</h5>
                            <div class="HP py-2">
                                
                                <!-- <input type="checkbox" class="text-align-center ms-3" value=""/><span> This is checkbox </span><br /> -->
                                <input type="checkbox" class="checkbox-round mt-1 ms-3 select_state" value="Chhattisgarh" /><span class="ps-2 fs-6">Chhattisgarh</span><br />
                                <input type="checkbox" class="checkbox-round mt-1 ms-3 select_state" value="Other" /><span class="ps-2 fs-6">Other</span><br />
                            </div>
                        </div>
                    </div>
                    <div class="scrollbar mb-3" id="filter_district">
                       <div class="force-overflow">
                        <h5 class=" ps-1 text-dark fw-bold pt-2">Search By District</h5>
                            <div class="HP py-2">
                                
                                <!-- <input type="checkbox" class="text-align-center ms-3" value=""/><span> This is checkbox </span><br /> -->
                                <input type="checkbox" class="checkbox-round ms-3 mt-1 select_district" value="raipur" /><span class="ps-2 fs-6">Raipur</span><br />
                                <input type="checkbox" class="checkbox-round ms-3 mt-1 select_district" value="Bilaspur" /><span class="ps-2 fs-6">Bilaspur</span><br />
                                <input type="checkbox" class="checkbox-round ms-3 mt-1 select_district" value="Ambikapur" /><span class="ps-2 fs-6">Ambikapur</span><br />
                                <input type="checkbox" class="checkbox-round ms-3 mt-1 select_district" value="Raigarh" /><span class="ps-2 fs-6">Raigarh</span><br />
                                <input type="checkbox" class="checkbox-round ms-3 mt-1 select_district" value="Surajpur" /><span class="ps-2 fs-6">Surajpur</span><br />
                                <input type="checkbox" class="checkbox-round ms-3 mt-1 select_district" value="Jagdalpur" /><span class="ps-2 fs-6">Chirmiri</span><br />
                                <input type="checkbox" class="checkbox-round ms-3 mt-1 select_district" value="Korba" /><span class="ps-2 fs-6">Korba</span><br />
                            
                            </div>
                        </div>
                    </div>
                  
                    <div class="scrollbar mb-3" id="category_filter">
                             <div class="force-overflow">
                                <h5 class="ps-1 text-dark fw-bold pt-2">Search By category</h5>
                                <div class="HP py-2" id="checkboxContainercategory"></div>
                            </div>
                        </div>
                    <div class="scrollbar mb-3" id="Sub_category_filter">
                        <div class="force-overflow">
                            <h5 class="ps-1 text-dark fw-bold pt-2">Search By Sub category</h5>
                            <div class="HP py-2" id="sub_cateory_checkbox"></div>
                        </div>
                    </div>

                </div>
                    
                </div>
            </div>
        </div>
    </section>
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
                    <!-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button> -->
                    <button type="button" class="btn btn-success" id="Verify"onclick="verifyotp()">Verify</button>
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
                    <button type="button"  id="closeButton "class="btn btn-secondary"data-bs-dismiss="modal">Close</button>
                    <!-- <button type="button" class="btn btn-danger" id="got_it_btn">Got It</button> -->
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
                    indianMobile: true, // Allow only digits
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

</html>