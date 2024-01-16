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
  
      

</head>
<body>
    <section class="mt-4 pt-5">
    <div class="container mt-5 pt-4">
        <div class="">
            <span class="mt-5 text-white pt-5 ">
                <a href="index.php" class="text-decoration-none header-link px-1">Home <i class="fa-solid fa-chevron-right px-1"></i></a>
            </span>
            <span class="mt-5 text-white pt-5 ">
                <a href="engine_oil.php" class="text-decoration-none header-link px-1">Engine Oil <i class="fa-solid fa-chevron-right px-1"></i></a>
            </span>
            <!-- </span>  -->
        </div>
    </div>
    </section>
    <!-- IMAGE SWIPER WITH THREE THUMBNAIL IMAGE -->
    <section>
        <div class="container">
            <div class="vegehead pt-3">
                <div class="row">
                    <!-- <h1 class="fw-bold text-danger pt-3">Engine Oil</h1> -->
                </div>
            </div>
       
            <div class="row mt-3">
                <div class="col-12 col-sm-6 col-lg-6 col-md-6">
                    <div>
                    <h1 class="fw-bold text-danger pt-3" id="brand_name"></h1>
                    <div class="swiper swiper_buy mySwiper2_buy">
                    <div class="swiper-wrapper swiper-wrapper_buy"></div>
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div>
                    </div>
                    <div thumbsSlider="" class="swiper mySwiper_buy"  style="height:74px;" id="swip_img"></div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-lg-6 col-md-6 mt-4">
                    <h2 class="text-danger fw-bold me-5">About This Engine Oil</h2>
                    <form action="">
                        <div class="row my-3">
                            <div class="col-12 justify-content-center">
                                <div class="d-flex flex-md-row px-3  flex-column-reverse">
                                    <div class="col-md-12 col-12 col-lg-12 col-lg-12">
                                        <!-- <div class=" ml-2"> -->
                                        <div class="row px-3 ">
                                            <table class="table table-border">
                                                <tr>
                                                    <div class="col-12 col-lg-3 col-md-3 col-sm-3 ">
                                                        <td><p class="fw-bold text-dark">Name</p></td>
                                                    </div>
                                                    <div class="col-12 col-lg-9 col-md-9 col-sm-9 ">
                                                        <td><p id="model_name" ></p> </td>
                                                    </div>
                                                </tr>
                                                <tr>
                                                    <div class="col-12 col-lg-3 col-md-3 col-sm-3 ">
                                                        <td><p class="fw-bold text-dark">Grade</p></td>
                                                    </div>
                                                    <div class="col-12 col-lg-9 col-md-9 col-sm-9 ">
                                                        <td><p id="grade"></p></td>
                                                    </div>
                                                </tr>
                                                <tr>
                                                    <div class="col-12 col-lg-3 col-md-3 col-sm-3 ">
                                                        <td><p class="fw-bold text-dark">Quantity</p></td>
                                                    </div>
                                                    <div class="col-12 col-lg-9 col-md-9 col-sm-9 ">
                                                        <td><p id="quantity"></p></td>
                                                    </div>
                                                </tr>
                                                <tr>
                                                    <div class="col-12 col-lg-3 col-md-3 col-sm-3 ">
                                                        <td><p class="fw-bold text-dark">Price</p></td>
                                                    </div>
                                                    
                                                    <div class="col-12 col-lg-9 col-md-9 col-sm-9 ">
                                                        <td><p id="price"></p></td>
                                                    </div>
                                                </tr>
                                                <tr>
                                                    <div class="col-12 col-lg-3 col-md-3 col-sm-3 ">
                                                        <td><p class="fw-bold text-dark">Compatible Tractors</p></td>
                                                    </div>
                                                    <div class="col-12 col-lg-2 col-md-2 col-sm-2">
                                                        <td colspan="3" class="margin-left:10px;"><p id="compatible_tractor"></p></td>
                                                    </div>   
                                               </tr>     
                                            </table> 

                                            <div class="row mt-1">
                                                <div class="col-12 col-lg-12 col-md-12 col-sm-12">
                                                    <button type="button" class="btn btn-success text-center w-100" data-bs-toggle="modal" data-bs-target="#staticBackdrop3">
                                                        Request Call Back
                                                    </button>
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

    <!-- MODAL -->
    <section>
        <div class="modal fade" id="staticBackdrop3" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="staticBackdropLabel"> Request Call Back</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <!-- MODAL BODY -->
                    <div class="modal-body bg-light">
                    <form id="engine_oil_form" method="POST" onsubmit="return false">
                <div class="row">
            
             <!--    <input type="hidden" id="brand_name">
                <input type="hidden" id="model_name" > -->
                <input type="hidden" id="enquiry_type_id" value="12" >
                
            
         
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
                      <select class="form-select py-2 " aria-label=".form-select-lg example" id="state" name="state">
                        <option value="" selected disabled=""> </option>  
                        <option value="1">Chhattisgarh</option>
                        <option value="2">Other</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-12 col-sm-12 col-md-6 col-lg-6 mt-4">
                    <div class="form-outline">
                      <label for="eo_dist" class="form-label fw-bold  text-dark"><i class="fa-solid fa-location-dot"></i> District</label>
                      <select class="form-select py-2 " aria-label=".form-select-lg example" id="district" name="district">
                        <option value="" selected disabled=""></option>
                        <option value="1">Raipur</option>
                        <option value="2">Bilaspur</option>
                        <option value="2">Durg</option>
                      </select>
                    </div>                    
                  </div>       
                  <div class="col-12 col-sm-6 col-md-6 col-lg-6 mt-4">
                    <div class="form-outline">
                      <label for="eo_tehsil" class="form-label fw-bold text-dark"> Tehsil</label>
                      <select class="form-select py-2 " aria-label=".form-select-lg example" id="Tehsil" name="Tehsil">
                        <option value="" selected disabled=""></option>
                        <option value="2">Durg</option>
                      </select>
                    </div>
                  </div>

                </div> 
                <div class="text-center my-3">
                <button type="submit" id="submit_enquiry" class="btn add_btn btn-success w-100 btn_all" onclick="engineoil_enquiry()" data-bs-dismiss="modal">Submit</button>        
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


</body>
</html>