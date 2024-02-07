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
<script src="<?php $baseUrl; ?>model/become_certified_dealer.js"></script>
</head>


    <?php
   include 'includes/header.php';
   ?>
<body>
    <section>
        <div class="container mt-5 pt-4">
            <div class="mt-4 pt-5">
                <span class="mt-4 pt-4 ">
                <a href="index.php" class="text-decoration-none header-link px-1">Home <i class="fa-solid fa-chevron-right px-1"></i></a>
                <a href="certified_dealers.php" class="text-decoration-none header-link px-1">Certified Dealers <i class="fa-solid fa-chevron-right px-1"></i></a>
                <span class="text-dark">Become Certified Dealer</span>
            </div>
        </div>
    </section>

    <section>
        <div class="d-sm-flex align-items-center justify-content-between w-100">
            <div class="col-12 h-100 " style="min-height: 360px; background-image: url(assets/images/becomeadealertimg.webp); background-position: center; background-size: cover;"></div>
        </div>
        <div class="page-banner-content position-absolute mt-4 px-2">
            <div class="row w-100 ms-5 text-dark">
                <div class="col-12">
                    <h1>Join Bharat Tractor as Certified Dealers</h1></br>
                    <p class="fw-bold">Get huge amount of enquiries for a perfect buisness. For enquiry call or</p>
                    <p class="fw-bold">WhatsApp on 8769-934-402</p></br>
                <div>                
            </div>
        </div>
    </section>

    <!-- FORM -->
    <section class="form-view bg-white pb-4">
        <!-- <div class="container-lg bg-light"> -->
            <div class="container-mid" style="position: relative;">
                <div class="row justify-content-center">
                    <div class="col-md-8 col-lg-7">
                        <form id="become_dealership_enq_from" class="form-view-inner form-view-overlay bg-light box-shadow p-3" action="" method="" >
                            <div class="row justify-content-center">
                                <div class="col-12 col-lg-6 col-md-6 col-sm-6 " hidden>
                                    <label for="name" class="form-label fw-bold text-dark"> <i class="fa-regular fa-user"></i> enquiryName</label>
                                    <input type="text" class="form-control" placeholder="Enter Your Name" id="enquiry_type_id" value="13" name="fname">
                                </div>
                                <!-- <div class="col-12 col-lg-6 col-md-6 col-sm-6 " hidden>
                                    <label for="name" class="form-label fw-bold text-dark"> <i class="fa-regular fa-user"></i> product id</label>
                                    <input type="text" class="form-control" id="product_id" value="">
                                </div> -->
                                <div class="col-12 col-lg-6 col-md-6 col-sm-6 ">
                                    <div class="form-outline mt-3">
                                        <label for="name" class="form-label text-dark">Dealer Name</label>
                                        <input type="text" class="form-control" placeholder="" id="dname" name="dname">
                                    </div>
                                </div>
                                <div class="ol-12 col-lg-6 col-md-6 col-sm-6">
                                    <div class="form-outline mt-3">
                                        <label class="form-label"> Brand</label>
                                        <select class="form-select py-2" aria-label="Default select example" id="brand" name="brand">
                                                
                                        </select>
                                    </div>
                                </div>
                                <div class="col-12 col-lg-6 col-md-6 col-sm-6 ">
                                    <div class="form-outline mt-3">
                                        <label for="name" class="form-label text-dark">Email Id</label>
                                        <input type="text" class="form-control" placeholder="" id="email" name="email">
                                    </div>
                                </div>
                                <div class="col-12 col-lg-6 col-md-6 col-sm-6 ">
                                    <div class="form-outline mt-3">
                                        <label for="name" class="form-label text-dark">Contact Number</label>
                                        <input type="text" class="form-control" placeholder="" id="mobnumber" name="bcd_num">
                                    </div>
                                </div>
                                <div class="col-12  mb-2">
                                      <div class="form-outline mt-3">
                                        <label for="name" class="form-label text-dark">Address</label>
                                        <!-- <input type="email" class="form-control" placeholder="" id="" name=""> -->
                                        <textarea rows="3" cols="70" class="w-100 pt-2" minlength="1" maxlength="255" id="address" name="address"></textarea>
                                      </div>
                                    </div>
                                <div class="col-12 col-sm-6 col-md-6 col-lg-6">
                                    <div class="form-outline mt-3">
                                        <label class="form-label">State</label>
                                        <select class="form-select py-2" aria-label="Default select example" id="bcd_state" name="state_">
                                            <option value>Select State</option>
                                            <option value="Chattisgarh">Chattisgarh</option>
                                            <option value="Other">Other</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-12  col-sm-6 col-md-6 col-lg-6">
                                    <div class="form-outline mt-3">
                                        <label class="form-label">District</label>
                                        <select class="form-select py-2" aria-label="Default select example" id="bcd_district" name="dist">
                                            <option value>Select District</option>
                                            <option value="Raipur">Raipur</option>
                                            <option value="Bilaspur">Bilaspur</option>
                                            <option value="Surajpur">Surajpur</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6 col-md-6 col-lg-6">
                                    <div class="form-outline mt-3">
                                        <label class="form-label">Tehsil</label>
                                        <select class="form-select py-2" id="tehsil" aria-label="Default select example" id="bcd_tehsil">
                                            <option value>Select Tehsil</option>
                                            <option value="Raipur">Raipur</option>
                                            <option value="Bilaspur">Bilaspur</option>
                                            <option value="Surajpur">Surajpur</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-12 col-lg-6 col-md-6 col-sm-6">
                                          <div class="upload__box mt-5">
                                            <div class="upload__btn-box text-center">
                                              <label >
                                                <p class="upload__btn ">Upload images</p>
                                                <input type="file" multiple="" data-max_length="20" class="upload__inputfile" id="_image" name="_image">
                                              </label>
                                            </div>
                                            <div id="selectedImagesContainer" class="upload__img-wrap"></div>
                                          </div>
                                        </div>
                               
                                <div class="text-center my-3">
                                    <button type="submit" id="become_delership_enq_btn" class="btn btn-success mt-1 px-5 w-100 ">Submit</button>         
                                </div>        
                                <p class="mb-0 text-center">By proceeding ahead you expressly agree to the Bharat Tractors <a href="#" class="text-decoration-none" target="_blank" title="terms and conditions">terms and conditions*</a></p>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        <!-- </div> -->
    </section>

    <?php
        include 'includes/footer.php';
        include 'includes/footertag.php';
        
    ?>

    <script>
        $(document).ready(function(){
          jQuery.validator.addMethod("customPhoneNumber", function(value, element) {
            return /^[6-9]\d{9}$/.test(value); 
          }, "Phone number must start with 6 or above");
            $("#become_delership_enq_btn").click(function () {
                // setTimeout(() => {
                //     console.log("validation of Department")
                // }, 2000);
                $("form[id='become_dealership_enq_from']").validate({
                    rules: {
                        dname: {
                            required: true, 
                        },
                        brand: {
                            required: true,
                        },
                        bcd_num: {
                            required: true,
                            minlength: 10,
                            maxlength: 10,
                            digits: true,
                            customPhoneNumber: true 
                        },
                        email: {
                            required:true,
                            email:true
                        },
                        address: {
                            required: true,
                            // minlength: 3
                        },
                        state_: {
                            required: true,
                            // minlength: 3
                        },
                       dist: {
                            required: true,
                            // minlength: 3
                        },
                        _image:{
                            required: true, 
                            minlength: 2,
                            maxlength: 4,
                        }
                    },
                    messages: {
                        dname: {
                            required:"This field is required",
                           
                        },
                        brand: {
                            required:"This field is required",
                          
                        },
                        bcd_num: {
                            required:"This field is required",
                            minlength: "Phone Number must be of 10 Digit",
                            maxlength: "Ensure exactly 10 digits of Mobile No.",
                            digits: "Please enter only digits"
                        },
                        email: {
                            required:"This field is required",
                            email:"Please Enter vaild Email",
                            
                        },
                        address: {
                            required:"This field is required",
                           
                        },
                        state_: {
                            required:"This field is required",
                            
                        },
                        dist: {
                            required:"This field is required",
                           
                        },
                        _image:{
                            required:"This field is required",
                            minlength: "minimum 2 images",
                            maxlength: "maximum 4 images",
                        }

                    },

                });
            })
        });
    </script>

    
</body>
</html>