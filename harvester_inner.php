<!DOCTYPE html>
<html lang="en">

<head>
   <?php
  include 'includes/headertag.php';
//   include 'includes/header.php';
  $id=$_REQUEST['id'];
  //echo $id;
  include 'includes/footertag.php';
  ?>
 
 <script> var CustomerAPIBaseURL = "<?php echo $CustomerAPIBaseURL; ?>";</script>
 <script> var baseUrl = "<?php echo $baseUrl; ?>";</script>
 <script src="<?php $baseUrl; ?>model/harvester_customer_inner.js"></script>
 <script src="<?php $baseUrl; ?>model/State_dist_tehsil.js"></script>

</head>

<body>
   <?php
   include 'includes/header.php';
   ?>
 <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
<section class="bg-light">
    <div class="container mt-5 pt-4">
        <div class="mt-4">
            <span class="mt-4 pt-4 ">
                <a href="index.php" class="text-decoration-none header-link px-1">Home <i class="fa-solid fa-chevron-right px-1"></i></a>
                <span class=""><span class=" header-link  px-1">Harvester <i class="fa-solid fa-chevron-right px-1"></i> </span></span>  
            </span> 
        </div>
    </div>
</section>

<section>
    <div class="container mt-2">
        <!-- <h1 class="mt-3" id="model_name">Kartar 4000</h1> -->
        <div class="row">
            <div class="col-12 col-sm-6 col-lg-6 col-md-6">
                <div>
                <h4><span  id="brand_name"></span></h4>
                </div>
                <div>
                    <div class="swiper swiper_buy mySwiper2_buy">
                        <div class="swiper-wrapper swiper-wrapper_buy">
                            <div class=" swiper-slide swiper-slide_buy">
                            <!-- <img class="img_buy" src="assets/images/437-1632718440.webp" /> -->
                            </div>
                        </div>
                    </div>
                    <div thumbsSlider="" class="swiper mySwiper_buy" style="height:50px; width: 43%;" id="swip_img"></div>
                </div>
            </div>
            <div class="col-12 col-lg-6 col-md-6 col-sm-6">
                <table class="table table-bordered">
                   
                    <tbody>
                        <tr>
                            <td class="fw-bold">Brand</td>
                            <td id="brand"></td>
                        </tr>
                        <tr>
                            <td class="fw-bold">Model Name</td>
                            <td id="model_name"></td>
                        </tr>
                        <tr>
                            <td class="fw-bold">Power</td>
                            <td><span id="hp"></span></td>
                        </tr>
                        <tr>
                            <td class="fw-bold">Cutter Bar – Width</td>
                            <td> <span id="cutting_width"></span></td>
                        </tr>
                        <tr>
                            <td class="fw-bold">No Of Cylinder</td>
                            <td id="cylinder"></td>
                        </tr>
                        <tr>
                            <td class="fw-bold">Power Source</td>
                            <td id="power_source"></td>
                        </tr>
                        <tr>
                            <td class="fw-bold">Crop</td>
                            <td id="crop"></td>
                        </tr>
                    </tbody>
                </table>
                <div class="row my-3 text-center">
                    <div class="col-12 col-lg-6 col-md-6 col-sm-6">
                        <button type="button" class="btn-success w-100 fw-bold" data-bs-toggle="modal" data-bs-target="#staticBackdrop3">GET BEST PRICE</button>
                    </div>
                    
                    <div class="col-12 col-lg-5 col-md-5 col-sm-5 ms-4 border border-success">
                        <a href="new_tractor_loan.php">
                            <button type="submit" class="text-success w-100 fw-bold" >VIEW LOAN OFFERS</button>
                        </a>    
                    </div>                    
                </div>
            </div>
        </div>       
    </div>
</section>

    <!-- MODAL -->
    <section>
        <div class="modal fade" id="staticBackdrop3" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header bg-success">
                        <h5 class="modal-title ms-1" id="staticBackdropLabel">Request Call Back</h5>
                        <button type="button" class="btn-close btn-success" data-bs-dismiss="modal" aria-label="Close"><img class="w-25" src="assets/images/close.png"></button>
                    </div>

                    <!-- MODAL BODY -->
                    <div class="modal-body mt-2">
                        <form id="engine_oil_form" class="bg-light"action="">
                            <div class="row">
                                <div class="col-12 col-lg-6 col-md-6 col-sm-6 ">
                                    <div class="form-outline">
                                        <label for="f_name" class="form-label fw-bold text-dark"> <i class="fa-regular fa-user"></i> First Name</label>
                                        <input type="text" class="form-control mb-0" placeholder="Enter Your Name" id="f_name" name="f_name">
                                    </div>
                                </div>
                                <div class="col-12 col-lg-6 col-md-6 col-sm-6 ">
                                    <div class="form-outline">
                                        <label for="last_name" class="form-label fw-bold text-dark"> <i class="fa-regular fa-user"></i> Last Name</label>
                                        <input type="text" class="form-control mb-0" placeholder="Enter Your Name" id="lastName" name="eo_name">
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6 col-md-6 col-lg-6 mt-3">
                                    <div class="form-outline">
                                        <label for="eo_number" class="form-label text-dark fw-bold"> <i class="fa fa-phone" aria-hidden="true"></i> Phone Number</label>
                                        <input type="text" class="form-control mb-0" placeholder="Enter Number" id="mobile_number" name="eo_number" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');">
                                    </div>
                                </div>
                                  
                                <div class="col-12 col-sm-12 col-md-6 col-lg-6 mt-3">
                                    <div class="form-outline">
                                        <label for="eo_state" class="form-label text-dark fw-bold"> <i class="fas fa-location"></i> State</label>
                                        <select class="form-select py-2 state-dropdown" aria-label=".form-select-lg example" id="state" name="eo_state">
                                        
                                        </select>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-12 col-md-6 col-lg-6 mt-4">
                                    <div class="form-outline">
                                        <label for="eo_dist" class="form-label fw-bold  text-dark"><i class="fa-solid fa-location-dot"></i> District</label>
                                        <select class="form-select py-2 district-dropdown" aria-label=".form-select-lg example" id="district" name="eo_dist">
                                        
                                        </select>
                                    </div>
                                </div>                           
                                <div class="col-12 col-sm-6 col-md-6 col-lg-6 mt-4">
                                    <div class="form-outline">
                                        <label for="eo_tehsil" class="form-label fw-bold text-dark"> Tehsil</label>
                                        <select class="form-select py-2 tehsil-dropdown" aria-label=".form-select-lg example" id="Tehsil" name="eo_tehsil">
                                          
                                        </select>
                                    </div>
                                </div>

                            </div> 
                            <div class="text-center my-3">
                                <button type="submit" id="enquiry" class="btn btn-success px-5 w-40 mt-2">Submit</button>         
                            </div>        
                        </form>                             
                    </div>
                </div>
            </div>
        </div>
    </section>

<!-- Kartar 4000 Harvester Features -->
<section>
    <div class="container my-5">
        <div class="about border-success  border-4 text-dark border-start">
            <h2 class="text-dark fw-bold text-start ps-3"><span class="brand_model"></span> Harvester Features</h2>

        </div>
        <div class="mt-1">
            <p class="text-dark" id="description"></p>
        </div>
     

    </div>
</section>

<!-- Specifications For Kartar 4000 ("51") -->
<section class="mt-3">
    <div class="container">
        <div class="about border-success  border-4 text-dark border-start">
            <h4 class="text-dark fw-bold text-start ps-3">Specifications For <span class="brand_model" id="brand_specification"></span></h4>
        </div>
        <h5 class="fw-bold pt-2 ps-2">Engine</h5>

        <table class="table w-100 table-hover table table-striped my-4">
            
            <tbody>
          
                <tr>
                    <td class="w-100">
                        <div class="row w-100">
                            <div class="col-12 col-lg-5 col-md-5 col-sm-5">
                                <p class="mb-1 mt-1">TYPE</p>
                            </div>
                            <div class="col-12 col-lg-7 col-md-7 col-sm-7">
                                <p class="mb-1 mt-1" id="engine_type"> </p>
                            </div>
                        </div>
                    </td>                  
                </tr>

                <tr>
                    <td class="w-100">
                        <div class="row w-100">
                            <div class="col-12 col-lg-5 col-md-5 col-sm-5">
                                <p class="mb-1 mt-1">No. of Cylinders:</p>
                            </div>
                            <div class="col-12 col-lg-7 col-md-7 col-sm-7">
                                <p class="mb-1 mt-1" id="no_of_cylinder"> </p>
                            </div>
                        </div>
                    </td>                  
                </tr>

                <tr>
                    <td class="w-100">
                        <div class="row w-100">
                            <div class="col-12 col-lg-5 col-md-5 col-sm-5">
                                <p class="mb-1 mt-1">Cooling System</p>
                            </div>
                            <div class="col-12 col-lg-7 col-md-7 col-sm-7">
                                <p class="mb-1 mt-1" id="cooling_system"></p>
                            </div>
                        </div>
                    </td>                  
                </tr>
                
            </tbody>
        </table>

        <h5 class="fw-bold pt-2 ps-2">CUTTER BAR</h5>
        <table class="table w-100 table-hover table table-striped my-4">
            
            <tbody>

                <tr>
                    <td class="w-100">
                        <div class="row w-100">
                            <div class="col-12 col-lg-5 col-md-5 col-sm-5">
                                <p class="mb-1 mt-1">Width:</p>
                            </div>
                            <div class="col-12 col-lg-7 col-md-7 col-sm-7">
                                <p class="mb-1 mt-1" ><span id="cutting_bar_width"></span> mm</p>
                            </div>
                        </div>
                    </td>                  
                </tr>

                <tr>
                    <td class="w-100">
                        <div class="row w-100">
                            <div class="col-12 col-lg-5 col-md-5 col-sm-5">
                                <p class="mb-1 mt-1">Height Adjustment:</p>
                            </div>
                            <div class="col-12 col-lg-7 col-md-7 col-sm-7">
                                <p class="mb-1 mt-1" id="height_adj1"></p>
                            </div>
                        </div>
                    </td>                  
                </tr>

                <tr>
                    <td class="w-100">
                        <div class="row w-100">
                            <div class="col-12 col-lg-5 col-md-5 col-sm-5">
                                <p class="mb-1 mt-1">Cutting Height Max:</p>
                            </div>
                            <div class="col-12 col-lg-7 col-md-7 col-sm-7">
                                <p class="mb-1 mt-1"><span id="cutting_bar_height_max"></span> mm</p>
                            </div>
                        </div>
                    </td>                  
                </tr>                

            </tbody>
        </table>

        <h5 class="fw-bold pt-2 ps-2">REEL</h5>
        <table class="table w-100 table-hover table table-striped my-4">
            
            <tbody>

                <tr>
                    <td class="w-100">
                        <div class="row w-100">
                            <div class="col-12 col-lg-5 col-md-5 col-sm-5">
                                <p class="mb-1 mt-1">TYPE:</p>
                            </div>
                            <div class="col-12 col-lg-7 col-md-7 col-sm-7">
                                <p class="mb-1 mt-1" id="reel_type"></p>
                            </div>
                        </div>
                    </td>                  
                </tr>                  

                <tr>
                    <td class="w-100">
                        <div class="row w-100">
                            <div class="col-12 col-lg-5 col-md-5 col-sm-5">
                                <p class="mb-1 mt-1">Speed Adjustment:</p>
                            </div>
                            <div class="col-12 col-lg-7 col-md-7 col-sm-7">
                                <p class="mb-1 mt-1" id="speed_adj"></p>
                            </div>
                        </div>
                    </td>                  
                </tr>                  

                <tr>
                    <td class="w-100">
                        <div class="row w-100">
                            <div class="col-12 col-lg-5 col-md-5 col-sm-5">
                                <p class="mb-1 mt-1">Height Adjustment:</p>
                            </div>
                            <div class="col-12 col-lg-7 col-md-7 col-sm-7">
                                <p class="mb-1 mt-1" id="height_adj"></p>
                            </div>
                        </div>
                    </td>                  
                </tr>                

            </tbody>
        </table>

        <h5 class="fw-bold pt-2 ps-2">Thresher Drum</h5>
        <table class="table w-100 table-hover table table-striped my-4">
            
            <tbody>

                <tr>
                    <td class="w-100">
                        <div class="row w-100">
                            <div class="col-12 col-lg-5 col-md-5 col-sm-5">
                                <p class="mb-1 mt-1">Dia of Drum:</p>
                            </div>
                            <div class="col-12 col-lg-7 col-md-7 col-sm-7">
                                <p class="mb-1 mt-1"><span id="dia_drum"></span> mm</p>
                            </div>
                        </div>
                    </td>                  
                </tr>

                <tr>
                    <td class="w-100">
                        <div class="row w-100">
                            <div class="col-12 col-lg-5 col-md-5 col-sm-5">
                                <p class="mb-1 mt-1">Length of Drum:</p>
                            </div>
                            <div class="col-12 col-lg-7 col-md-7 col-sm-7">
                                <p class="mb-1 mt-1"><span id="length_drum"></span> mm</p>
                            </div>
                        </div>
                    </td>                  
                </tr>

                <tr>
                    <td class="w-100">
                        <div class="row w-100">
                            <div class="col-12 col-lg-5 col-md-5 col-sm-5">
                                <p class="mb-1 mt-1">Speed of Drum:</p>
                            </div>
                            <div class="col-12 col-lg-7 col-md-7 col-sm-7">
                                <p class="mb-1 mt-1"><span id="speed_drum"></span> rpm</p>
                            </div>
                        </div>
                    </td>                  
                </tr>

                <tr>
                    <td class="w-100">
                        <div class="row w-100">
                            <div class="col-12 col-lg-5 col-md-5 col-sm-5">
                                <p class="mb-1 mt-1">Adjustment:</p>
                            </div>
                            <div class="col-12 col-lg-7 col-md-7 col-sm-7">
                                <p class="mb-1 mt-1" id="drum_adjustment"></p>
                            </div>
                        </div>
                    </td>                  
                </tr>

            </tbody>
        </table>    

        <h5 class="fw-bold pt-2 ps-2">Concave</h5>
        <table class="table w-100 table-hover table table-striped my-4">
            
            <tbody>
                <tr>
                    <td class="w-100">
                        <div class="row w-100">
                            <div class="col-12 col-lg-5 col-md-5 col-sm-5">
                                <p class="mb-1 mt-1">Clearance Between:</p>
                            </div>
                            <div class="col-12 col-lg-7 col-md-7 col-sm-7">
                                <p class="mb-1 mt-1"><span id="clearance_concave"></span> mm</p>
                            </div>
                        </div>
                    </td>                  
                </tr>

                <!-- <tr>
                    <td class="w-100">
                        <div class="row w-100">
                            <div class="col-12 col-lg-5 col-md-5 col-sm-5">
                                <p class="mb-1 mt-1">Concave & Thresher:</p>
                            </div>
                            <div class="col-12 col-lg-7 col-md-7 col-sm-7">
                                <p class="mb-1 mt-1">3 to 16 mm</p>
                            </div>
                        </div>
                    </td>                  
                </tr> -->
<!-- 
                <tr>
                    <td class="w-100">
                        <div class="row w-100">
                            <div class="col-12 col-lg-5 col-md-5 col-sm-5">
                                <p class="mb-1 mt-1">No. of Spikes:</p>
                            </div>
                            <div class="col-12 col-lg-7 col-md-7 col-sm-7">
                                <p class="mb-1 mt-1">Mechanically 36</p>
                            </div>
                        </div>
                    </td>                  
                </tr> -->

            </tbody>
        </table>

        <!-- <h5 class="fw-bold pt-2 ps-2">Straw Walkers</h5>
        <table class="table w-75 table-hover table table-striped my-4">
            
            <tbody>
                <tr>
                    <td class="w-100">
                        <div class="row w-100">
                            <div class="col-12 col-lg-5 col-md-5 col-sm-5">
                                <p class="mb-1 mt-1">No. of Straw Walkers :</p>
                            </div>
                            <div class="col-12 col-lg-7 col-md-7 col-sm-7">
                                <p class="mb-1 mt-1">5(FIVE)</p>
                            </div>
                        </div>
                    </td>                  
                </tr>

                <tr>
                    <td class="w-100">
                        <div class="row w-100">
                            <div class="col-12 col-lg-5 col-md-5 col-sm-5">
                                <p class="mb-1 mt-1">Total Area :</p>
                            </div>
                            <div class="col-12 col-lg-7 col-md-7 col-sm-7">
                                <p class="mb-1 mt-1">46565 sq. cm.</p>
                            </div>
                        </div>
                    </td>                  
                </tr>
            </tbody>
        </table> -->

        <!-- <h5 class="fw-bold pt-2 ps-2">Cleaning</h5>
        <table class="table w-75 table-hover table table-striped my-4">
            <tbody>
                <tr>
                    <td class="w-100">
                        <div class="row w-100">
                            <div class="col-12 col-lg-5 col-md-5 col-sm-5">
                                <p class="mb-1 mt-1">Area:</p>
                            </div>
                            <div class="col-12 col-lg-7 col-md-7 col-sm-7">
                                <p class="mb-1 mt-1">16422 sq. cm.</p>
                            </div>
                        </div>
                    </td>                  
                </tr>

                <tr>
                    <td class="w-100">
                        <div class="row w-100">
                            <div class="col-12 col-lg-5 col-md-5 col-sm-5">
                                <p class="mb-1 mt-1">Adjustment:</p>
                            </div>
                            <div class="col-12 col-lg-7 col-md-7 col-sm-7">
                                <p class="mb-1 mt-1">Mechanically</p>
                            </div>
                        </div>
                    </td>                  
                </tr>

            </tbody>
        </table> -->

        <h5 class="fw-bold pt-2 ps-2">Tyre Size</h5>
        <table class="table w-100 table-hover table table-striped my-4">
            <tbody>
                <tr>
                    <td class="w-100">
                        <div class="row w-100">
                            <div class="col-12 col-lg-5 col-md-5 col-sm-5">
                                <p class="mb-1 mt-1">Front:</p>
                            </div>
                            <div class="col-12 col-lg-7 col-md-7 col-sm-7">
                                <p class="mb-1 mt-1"  id="tyre_front"></p>
                            </div>
                        </div>
                    </td>                  
                </tr>
                
                <tr>
                    <td class="w-100">
                        <div class="row w-100">
                            <div class="col-12 col-lg-5 col-md-5 col-sm-5">
                                <p class="mb-1 mt-1">Rear/Trolley:</p>
                            </div>
                            <div class="col-12 col-lg-7 col-md-7 col-sm-7">
                                <p class="mb-1 mt-1" id="tyre_rear"></p>
                            </div>
                        </div>
                    </td>                  
                </tr>
                
            </tbody>
        </table>

        <h5 class="fw-bold pt-2 ps-2">Dimensions</h5>
        <table class="table w-100 table-hover table table-striped my-4">
            <tbody>
                <tr>
                    <td class="w-100">
                        <div class="row w-100">
                            <div class="col-12 col-lg-5 col-md-5 col-sm-5">
                                <p class="mb-1 mt-1">Length:</p>
                            </div>
                            <div class="col-12 col-lg-7 col-md-7 col-sm-7">
                                <p class="mb-1 mt-1"><span id="dia_lenght"></span> mm</p>
                            </div>
                        </div>
                    </td>                  
                </tr>

                <tr>
                    <td class="w-100">
                        <div class="row w-100">
                            <div class="col-12 col-lg-5 col-md-5 col-sm-5">
                                <p class="mb-1 mt-1">Height:</p>
                            </div>
                            <div class="col-12 col-lg-7 col-md-7 col-sm-7">
                                <p class="mb-1 mt-1"><span id="dia_height"></span> mm</p>
                            </div>
                        </div>
                    </td>                  
                </tr>

                <tr>
                    <td class="w-100">
                        <div class="row w-100">
                            <div class="col-12 col-lg-5 col-md-5 col-sm-5">
                                <p class="mb-1">Min Ground Clearance:</p>
                            </div>
                            <div class="col-12 col-lg-7 col-md-7 col-sm-7">
                                <p class="mb-1"><span id="min_ground_clear"></span> mm</p>
                            </div>
                        </div>
                    </td>                  
                </tr>

                <tr>
                    <td class="w-100">
                        <div class="row w-100">
                            <div class="col-12 col-lg-5 col-md-5 col-sm-5">
                                <p class="mb-1 mt-1">Weight:</p>
                            </div>
                            <div class="col-12 col-lg-7 col-md-7 col-sm-7">
                                <p class="mb-1 mt-1"><span id="min_ground_weight"></span> Kgs. (Approx.)</p>
                            </div>
                        </div>
                    </td>                  
                </tr>

            </tbody>
        </table>

        <!-- <h5 class="fw-bold pt-2 ps-2">Capacity</h5>
            <table class="table w-75 table-hover table table-striped my-4">
                <tbody>
                    <tr>
                        <td class="w-100">
                            <div class="row w-100">
                                <div class="col-12 col-lg-5 col-md-5 col-sm-5">
                                    <p class="mb-1 mt-1">Fuel Tank Capacity:</p>
                                </div>
                                <div class="col-12 col-lg-7 col-md-7 col-sm-7">
                                    <p class="mb-1 mt-1" id="fuel_tank"><span id="grain_tank_capacity"> </span> L</p>
                                </div>
                            </div>
                        </td>                  
                    </tr>

                    <tr>
                        <td class="w-100">
                            <div class="row w-100">
                                <div class="col-12 col-lg-5 col-md-5 col-sm-5">
                                    <p class="mb-1 mt-1">Paddy:</p>
                                </div>
                                <div class="col-12 col-lg-7 col-md-7 col-sm-7">
                                    <p class="mb-1 mt-1" ><span id="grain_tank_capacity1"> </span> Acres/hour(approx)</p>
                                </div>
                            </div>
                        </td>                  
                    </tr>

                </tbody>
            </table> -->

    </div>
</section>


        <!-- CARDS SIMILAR HARVETER -->
<!-- <section>
         <div class="container ">
            <h2 class="fw-bold text-dark text-start mt-4 assured ps-3">Similar Harvesters</h3>
            <div class="section slider-section">
              <div class="container slider-column">
              <div class="carousel-wrap">
            <div class="owl-carousel" id="productContainerharvester"></div>
       
         <div class="col text-center my-3 pb-5">
            <a href="harvester.php" class="btn btn-success btn-lg">View All Harvester</a>
        </div>
        </div>
            </div>
            </div>
</section> -->
<!-- <section>
    <div class="container">
        <div>
            <h4><p class="mt-md mt-3 p-2 mb-5 my-3 assured">Similar Harvesters</p></h4>
        </div>
        <div class="section slider-section">
            <div class="container slider-column">
               <div class="carousel-wrap">
                    <div class="owl-carousel" id="productContainerharvester"> </div>
                    <div class="col text-center pb-4">
                    <a href="harvester.php" class="btn btn-success px-5">View All Harvester</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
 </section> -->

    <?php
        include 'includes/footer.php';
    ?>

    <script>
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
                            maxlength: 10,
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
                        // },
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
                        // },
                        eo_dist: {
                            required: "Select Your District",
                            // minlength: "First Name must be atleast 3 characters long"
                        }                        
                    },

                });
            })
        });
    </script>

    </html>