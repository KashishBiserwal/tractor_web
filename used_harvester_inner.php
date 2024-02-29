<!DOCTYPE html>
<html lang="en">
<head>
<?php
    include 'includes/headertag.php';
    $product_id=$_REQUEST['product_id'];
    include 'includes/footertag.php';
    ?>
   
   <script> var APIBaseURL = "<?php echo $APIBaseURL; ?>";</script>
   <script> var baseUrl = "<?php echo $baseUrl; ?>";</script>
   <script src="<?php $baseUrl; ?>model/used_harvester_inner.js"></script>
   <script src="<?php $baseUrl; ?>model/State_dist_tehsil.js"></script>

</head>
<body>
<?php
   include 'includes/header.php';
   ?>
<section class="bg-light mt-5 pt-4">
    <div class="container py-2">
        <div class="py-2">
            <span class="my-4 text-white pt-4 ">
                <a href="index.php" class="text-decoration-none header-link px-1">Home <i class="fa-solid fa-chevron-right px-1"></i></a>
                    <span class=""><a href="#" class="text-decoration-none header-link  px-1">Used Harvesters<i class="fa-solid fa-chevron-right px-1"></i> </a></span>
                    
            </span> 
        </div>
    </div>
</section>
<section>
    <div class="container">
        <div class="row my-3">
            <div class="col-12 col-sm-6 col-lg-6 col-md-6">
            <div>
                <h4></span> <span  id="brand_model_name"></span></h4>
                </div>
                    <div>
                        <div class="swiper swiper_buy mySwiper2_buy">
                            <div class="swiper-wrapper swiper-wrapper_buy">
                                <div class=" swiper-slide swiper-slide_buy">
                                    <!-- <img class="img_buy" src="assets/images/437-1632718440.webp" /> -->
                                </div>
                            </div>
                        </div>
                        <div thumbsSlider="" class="swiper mySwiper_buy" style="height:75px; width: 43%;" id="swip_img"></div>
                    </div>
                </div>
            <div class="col-12 col-sm-6 col-lg-6 col-md-6" style="z-index: 9; background: #fff;">
                 <div class="pirce-section ">
                    <h5 class="my-2">₹ <span id="price_main"></span> /-</h5>
                </div>
          
                <form action="" method="POST" id="interested-harvester-form" class="outline-solid bg-light">
                <h5 class="text-black fw-bold text-center my-2 ">Interested In Harvester</h5>
                    <div class="row my-3">
                        <div class="col-12 justify-content-center">
                            <div class="d-flex flex-md-row px-3  flex-column-reverse">
                            <div class="col-md-12 col-12 col-lg-12 col-lg-12">
                                <div class=" ml-2">
                                    <div class="row px-3 ">
                                        <div class="col-12 col-lg-6 col-md-6 col-sm-6 " hidden>
                                            <label for="name" class="form-label fw-bold text-dark"> <i class="fa-regular fa-user"></i> First Name</label>
                                            <input type="text" class="form-control" placeholder="" id="customer_id" name="fname">
                                        </div>
                                        <div class="col- col-sm-6 col-lg-6 col-md-6" hidden>
                                          <label class="text-dark"> id Name<span class="text-danger">*</span></label>
                                                  <input type="text" class="form-control py-2" for="idUser"  id="enquiry_type_id" value="22" name="first_name" placeholder="Enter First Name">
                                          <small></small>
                                        </div>
                                        <div class="col-12 col-lg-6 col-md-6 col-sm-6 " hidden>
                                            <label for="name" class="form-label fw-bold text-dark"> <i class="fa-regular fa-user"></i> First Name</label>
                                            <input type="text" class="form-control" placeholder="" id="product_subject_id" name="fname">
                                        </div>
                                        <div class="col-12 col-lg-6 col-md-6 col-sm-6 " hidden>
                                            <label for="name" class="form-label fw-bold text-dark"> <i class="fa-regular fa-user"></i>Model</label>
                                            <input type="text" class="form-control" placeholder="" id="model" name="model">
                                        </div>
                                        <div class="col-12 col-lg-6 col-md-6 col-sm-6 ">
                                            <label for="name" class="form-label fw-bold text-dark"> <i class="fa-regular fa-user"></i> First Name</label>
                                            <input type="text" class="form-control" placeholder="Enter Your First Name" id="fname" name="fname">
                                        </div>
                                        <div class="col-12 col-lg-6 col-md-6 col-sm-6 ">
                                            <label for="name" class="form-label fw-bold text-dark"> <i class="fa-regular fa-user"></i> Last Name</label>
                                            <input type="text" class="form-control" placeholder="Enter Your Last Name" id="lname" name="lname">
                                        </div>
                                        <div class="col-12 ">
                                            <label for="number" class="form-label text-dark fw-bold"> <i class="fa fa-phone" aria-hidden="true"></i> Phone Number</label>
                                            <input type="text" class="form-control" placeholder="Enter Number" id="number" name="number">
                                        </div>
                                        <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                                        <label for="yr_state" class="form-label text-dark fw-bold"  name="state"> <i class="fas fa-location"></i> State</label>
                                        <select class="form-select py-2 state-dropdown" aria-label=".form-select-lg example" id="state_form" name="state">
                                           
                                        </select>
                                        </div>
                                        <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                                        <label class="form-label text-dark"><i class="fa-solid fa-location-dot"></i> District</label>
                                        <select class="form-select py-2 district-dropdown" aria-label=".form-select-lg example" name="district" id="district_form">
                                           
                                        </select>
                                        </div>
                                        <div class="col-12 col-sm-12 col-md-6 col-lg-6 mt-2">
                                            <label for="yr_tehsil" class="form-label text-dark"> Tehsil</label>
                                            <select class="form-select py-2 tehsil-dropdown" aria-label=".form-select-lg example" id="tehsil" name="tehsil">
                                           
                                           </select>
                                        </div>
                                        <div class="col-12 col-sm-12 col-md-6 col-lg-6 mt-2">
                                            <label for="yr_price" class="form-label text-dark">Price</label>
                                            <input type="yr_price" class="form-control" placeholder="Enter Price" id="price" name="price">
                                        </div>
                                        <div class="col-12 col-sm-12 col-md-6 col-lg-6 mt-3">
                                            <div class="">
                                            <input type="submit" id="submit_enquiry" value="Contact Seller" class="btn btn-success w-100"> 
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-12 col-md-6 col-lg-6 mt-3">
                                            <div class="get-loan text-center ">
                                                <a href="loan.php" class="btn border-success text-success w-100">Get Loan</a>
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
<section class="bg-light mt-n5 ">
    <div class="container">
        <div class="row mb-2">
            <div class="col-12 col-lg-9 col-md-9 col-sm-9">
                <div class="row my-4">
                    <div class="col-3 col-md-3 col-lg-3 col-sm-3 ">
                        <div class="Engine shadow p-3 "style="backdistrictground-color:#fff">
                            <div class="col-12 text-center">
                                <img src="assets/images/location.png" width="50" height="50" alt="">
                            </div>
                            <div class="col-12">
                                <h6 class="engine_ text-center fw-bold fs-6 m-1 text-dark">Location</h6>
                                <p class="engine_name text-center" id="location"></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-3 col-md-3 col-lg-3 col-sm-3 ">
                        <div class=" Total-Hours shadow p-3" style="background-color:#fff">
                            <div class="col-12 text-center">
                                <img src="assets/images/engine.png" width="50" height="50" alt="">
                            </div>
                            <div class="col-12">
                                <h6 class="total_hours text-center fw-bold fs-6 m-1 text-dark">Power Source</h6>
                                <p class="total_time text-center" id="power_source1"></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-3 col-md-3 col-lg-3 col-sm-3">
                        <div class=" RTO shadow p-3" style="background-color:#fff">
                            <div class="col-12 text-center">
                                <img src="assets/images/total-hours.png" width="50" height="50" alt="">
                            </div>
                            <div class="col-12">
                                <h6 class=" text-center fw-bold m-1 text-dark">Total Hours</h6>
                                <p class=" text-center" id="hour"></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-3 col-md-3 col-lg-3 col-sm-3 ">
                        <div class=" RTO shadow p-3" style="background-color:#fff">
                            <div class="col-12 text-center">
                                <img src="assets/images/purchase-year.png" width="50" height="50" alt="">
                            </div>
                            <div class="col-12">
                                <h6 class=" text-center fw-bold m-1 text-dark">purchase Year</h6>
                                <p class=" text-center" id="year1"></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="my-4">
                    <div class="text-editor-black my-4 " style="background-color:#fff">
                        <h4><p class="mt-md mt-4 p-2 mb-3 my-4 assured"><span id="model2"></span> Harvester Specifications</p></h4>
                    </div>
                </div>
                <table class="table w-100 table-hover table table-striped my-4">
                    <tbody>
                    <tr>
                        <td class="table-data">Brand</td>
                        <td class="table-data" id="brand"></td>
                        </tr>
                      
                        <tr class="col-12">
                        <td class="table-data">Crop Type</td>
                        <td class="table-data" id="crop_type"></td>
                        </tr>
                        <tr>
                        <td class="table-data">Power Source</td>
                        <td class="table-data" id="power_source"></td>
                        </tr>
                        <tr>
                        <td class="table-data">Hours</td>
                        <td class="table-data" id="hours"></td>
                        </tr>
                        <tr>
                        <td class="table-data">Year</td>
                        <td class="table-data" id="year"></td>
                        </tr>
                        <tr>
                        <td class="table-data">Price</td>
                        <td class="table-data">₹ <span id="price_"></span> /-</td>
                        </tr>
                        
                    </tbody>
                </table>
                <div class="my-4">
                    <div class="text-editor-black my-4 " style="background-color:#fff">
                        <h4><p class="mt-md mt-4 p-2 mb-3 my-4 assured">Seller Info</p></h4>
                    </div>
                </div>
                <table class="table1 w-100 table-hover table table-striped my-4">
                     <tbody>
                        <tr>
                        <td class="table-data">Name</td>
                        <td class="table-data" id="first_name"></td>
                        </tr>
                        <tr>
                        <td class="table-data">Mobile Number</td>
                        <td class="table-data" id="mobile_"></td>
                        </tr>
                        <tr>
                        <td class="table-data">District</td>
                        <td class="table-data" id="district_"></td>
                        </tr>
                        <tr>
                        <td class="table-data">State</td>
                        <td class="table-data" id="state_"></td>
                        </tr>
                    </tbody>
                </table>

                <div class="text-editor-black  my-3" style="background-color:#fff">
                <h4><p class="mt-md mt-3 p-2 mb-3 assured ps-3 my-4"><span id="model3"></span> Harvester Description</p></h4>
                </div>
                <div class="product_discription">
                    <p id="description"></p>
                </div>
            </div>

            <div class="col-12 col-lg-3 col-md-3 col-sm-3">
                <div class="row">
                    <div>
                        <h1 class="h4  my-4">New Popular Tractor</h1>
                    </div>
                    <div id="productContainerupcoming" class="row"></div>
                    <div class="sticky my-3">
                        <div class="popular_used_tractor mb-3">
                            <h4>Upcoming Tractors</h4>
                        </div>
                        <div id="productContainerupcoming2" class="row"></div>
                    </div>
                </div>
            </div>
    </div>
</section>

    <div class="container">
        <h5 class="assured ps-3 p-2">Disclaimer:-</h5>
        <p>*Used tractors and Farm Equipments Buy/Sell is totally Farmer-To-Farmer driven transactions. BharatAgrimart has provided the platform for Used tractors and Farm Equipments to support & help Farmers. Tractor Junction is not for information provided by Sellers/Brokers or any such frauds resulting from the same. Please read safety tips carefully before making any purchase.</p>
        </div>
    </div>

</body>
<?php
   include 'includes/footertag.php';
   include 'includes/footer.php';
   ?>
   <script>
$(document).ready(function(){
 
    $.validator.addMethod("validPrice", function(value, element) {
      
      const cleanedValue = value.replace(/,/g, '');

      return /^\d+$/.test(cleanedValue);
    }, "Please enter a valid price (digits and commas only)");
    $('#interested-harvester-form').validate({
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
                validPrice: true,
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
                validPrice: "Please enter a valid price",
            }
        },
        submitHandler: function(form) {
    form.submit();
        }
    });
});
</script>
</head>
</html>