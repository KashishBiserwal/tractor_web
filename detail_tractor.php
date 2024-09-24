<!DOCTYPE html>
<html lang="en">

<head>
<?php
   include 'includes/headertag.php';
   $product_id=$_REQUEST['product_id'];
//    echo $product_id;
   include 'includes/footertag.php';
   ?>
  
  <script> var APIBaseURL = "<?php echo $APIBaseURL; ?>";</script>
  <script> var baseUrl = "<?php echo $baseUrl; ?>";</script>
  <script src="<?php $baseUrl; ?>model/new_tractor_inner.js"></script>
  <script src="<?php $baseUrl; ?>model/State_dist_tehsil.js"></script>
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

<section class="mt-130 bg-light">
        <div class="container">
        <div class="py-2">
                    <span class="text-white">
                        <a href="index.php" class="text-decoration-none header-link px-1">Home <i
                                class="fa-solid fa-chevron-right px-1"></i></a>

                                <a href="" id="model_name" class="text-decoration-none header-link px-1"> <span class="text-dark p"></span></a>
                    </span>
                </div>
        </div>
    </section>

    <section id="Mahindra_575">
        <div class="container pt-4">
            <!-- <h1 class="mt-4 pb-2" id="model_name"></h1> -->
            <!-- <h1 class="mt-4 pb-2"></h1> -->
            <div class="row">
                <div class="col-12 col-lg-6 col-md-6 col-sm-6">
               
                <div>
                    <!-- <div class="swiper swiper_buy mySwiper2_buy">
                        <div class="swiper-wrapper swiper-wrapper_buy">
                            <div class=" swiper-slide swiper-slide_buy">
                            </div>
                        </div>
                    </div>
                    <div thumbsSlider="" class="swiper mySwiper_buy" style="height:74px;" id="swip_img"></div> -->
                    <div class="swiper swiper_buy mySwiper2_buy">
                    <div class="swiper-wrapper swiper-wrapper_buy"></div>
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div>
                    </div>
                    <div thumbsSlider="" class="swiper mySwiper_buy"  style="height:74px;" id="swip_img"></div>
                    
                </div>
              
                </div>
                <div class="col-12 col-lg-6 col-md-6 col-sm-6">
                    <table class="table border bg-light ">
                        <tbody>
                            <tr>
                                <td class="col-12 col-lg-6 col-md-6 col-sm-6">
                                    <h5> <i class="fa-solid fa-award"></i> Brand</h5>
                                </td>
                                <td class="col-12 col-lg-6 col-md-6 col-sm-6">
                                    <h5><a href="mahindra.php" class="text-decoration-none h5 text-danger " id="brand_name"></a></h5>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <h6><i class="fa-solid fa-gas-pump"></i> No. of Cylinder</h6>
                                </td>
                                <td><p id="total_cyclinder_value2"></p></td>
                            </tr>
                            <tr>
                                <td>
                                    <h6><i class="fas fa-bolt"></i> HP Category</h6>
                                </td>
                                <td><p> <span id="hp_category"></span> HP</p> </td>
                            </tr>
                            <tr>
                                <td>
                                    <h6><i class="fas fa-bolt"></i> PTO HP</h6>
                                </td>
                                <td>
                                    <p> <span  id="horse_power"></span> HP</p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <h6><i class="fa-solid fa-gear"></i> Gear Box</h6>
                                </td>
                                <td>
                                <p><span id="gear_box_forward"></span> Forward + <span id="gear_box_reverse"></span> Reverse</p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <h6><i class="fa fa-chain-broken" aria-hidden="true"></i> Brakes</h6>
                                </td>
                                <td><p id="brake_value2"></p></td>
                            </tr>
                            <tr>
                                <td>
                                    <h6><i class="fa-solid fa-pen-to-square"></i> Warranty</h6>
                                </td>
                                <td> <p><span id="warranty"></span> Year</p></td>
                            </tr>
                            <tr>
                                <td>
                                    <h6><i class="fa-solid fa-indian-rupee-sign"></i> Price</h6>
                                </td>
                                <td>
                                    <h6> <a href="#" class="text-decoration-none text-success">Check Price</a></h6>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="row my-3 text-center">
                        <div class="col-12 col-lg-6 col-md-6 col-sm-6">
                            <button type="submit" class="btn btn-success w-100 fw-bold "data-bs-toggle="modal" data-bs-target="#staticBackdrop3" >Request Call Back
                                    </button>
                        </div>
                        <div class="col-12 col-lg-6 col-md-6 col-sm-6">
                            <a href="new_tractor_loan.php"><button type="submit"
                                    class="btn btn-outline-success w-100 fw-bold ">VIEW LOAN
                                    OFFERS</button></a>
                        </div>
                    </div>

                </div>
            </div>


        </div>
    </section>

   
    <section class="bg-light">
        <div class="container">
            <div class="row pt-4">
                <div class="col-12 col-lg-12 col-md-12 col-sm-12 ">
                <h4 class="text-dark fw-bold assured mt-2 ps-3" ><span class="text-success brand_model "></span> Other Features</h4>
                </div>
                <div class="row mt-2">
                    <div class="col-12 col-lg-2 col-md-2 col-sm-2 col_padding ">

                        <div class=" text-center other_feature_card">
                        <div class="feature__gridIcon">
                            <img src="assets/images/clutch.png"  alt="">
                        </div>
                            <p class="feature__gridProperty mb-1   text-center fw-bold  text-dark">Clutch</p>
                            <p class="engine_name mb-0 text-center" id="transmission_clutch_value2"> </p>
                        </div>

                    </div>
                    <div class="col-12 col-lg-2 col-md-2 col-sm-2 col_padding">
                        <div class=" text-center other_feature_card">
                        <div class="feature__gridIcon">
                            <img src="assets/images/steering.png"  alt="">
                        </div>
                            <p class="feature__gridProperty mb-1   text-center fw-bold  text-dark">STEERING</p>
                            <p class="engine_name mb-0 text-center" id="steering_column_value2"></p>
                        </div>
                    </div>
                    <div class="col-12 col-lg-2 col-md-2 col-sm-2 col_padding">
                        <div class=" text-center other_feature_card">
                        <div class="feature__gridIcon">
                            <img src="assets/images/wheel-drive.png"  alt="">
                        </div>
                            <p class="feature__gridProperty mb-1   text-center fw-bold  text-dark">Wheel Drive</p>
                            <p class="engine_name mb-0 text-center" id="wheel_drive"></p>
                        </div>
                    </div>
                    <div class="col-12 col-lg-2 col-md-2 col-sm-2 col_padding">
                        <div class=" text-center other_feature_card">
                        <div class="feature__gridIcon">
                            <img src="assets/images/lifting.webp"  alt="">
                        </div>
                            <p class="feature__gridProperty mb-1  text-center fw-bold  text-dark">LIFTING CAPACITY</p>
                            <p class="engine_name mb-0 text-center" id="liftingC"></p>
                        </div>
                    </div>
                    <div class="col-12 col-lg-2 col-md-2 col-sm-2 col_padding ">
                        <div class=" text-center other_feature_card">
                        <div class="feature__gridIcon">
                            <img src="assets/images/rpm.png" alt="">
                        </div>
                            <p class="feature__gridProperty mb-1  text-center fw-bold  text-dark">ENGINE RATED RPM</p>
                            <p class="engine_name mb-0 text-center" id="engine_rated_rpm2"></p>
                        </div>

                    </div>
                </div>


            </div>
        </div>

    </section>

    <section class="bg-light ">
        <div class="container ">

            <div class="row  pt-4">
                <div class="col-12 col-lg-8 col-md-8 col-sm-8">
                    <div class="about border-success  border-4 text-dark border-start">
                    <h4 class="text-dark fw-bold  ps-4"> About <span class="text-success brand_model"></span></h4>

                    </div>
                    <p class="text-dark justify-content-center" id="description"></p>


                    <div class="about border-success  border-4 text-dark border-start mt-4">
                        <h4 class="text-dark fw-bold text-start ps-2"> <span class="text-success brand_model"></span> Engine</h4>
                    </div>

                    <table class="table  table-hover table table-striped my-4">
                        <tbody>
                            <tr>
                                <td class="table-data col-12 col-lg-6 col-md-6 col-sm-6">No. Of Cylinder</td>
                                <td class="table-data col-12 col-lg-6 col-md-6 col-sm-6" id="total_cyclinder_value">
                                    
                                </td>
                            </tr>
                            <tr>
                                <td class="table-data">HP Category</td>
                                <td class="table-data"><span id="hp_category_id"></span> HP</td>
                            </tr>
                            <tr>
                                <td class="table-data">Capacity CC</td>
                                <td class="table-data" ><span id="engine_capacity_cc"></span> CC</td>
                            </tr>
                            <tr>
                                <td class="table-data">Engine Rated RPM</td>
                                <td class="table-data"><span id="engine_rated_rpm"></span> RPM</td>
                            </tr>
                            <tr>
                                <td class="table-data">Cooling</td>
                                <td class="table-data" id="cooling_value"> </td>
                            </tr>
                            <tr>
                                <td class="table-data">Air Filter</td>
                                <td class="table-data" id="air_filter"></td>
                            </tr>
                            <tr>
                                <td class="table-data">PTO HP</td>
                                <td class="table-data"><p> <span  id="horse_power_2"></span> HP</p> </td>
                            </tr>
                            <tr>
                                <td class="table-data">Fuel Pump</td>
                                <td class="table-data"> <span  id="fuel_value"></span></td>
                            </tr>
                            <tr>
                                <td class="table-data">Torque</td>
                                <td class="table-data"><span  id="torque"></span> NM</td>
                            </tr>
                        </tbody>
                    </table>

                    <div class="about border-success  border-4 text-dark border-start">
                        <h4 class="text-dark fw-bold text-start ps-2"> <span class="text-success brand_model"></span> Transmission</h4>
                    </div>

                    <table class="table table-hover table table-striped my-4">
                        <tbody>
                            <tr>
                                <td class="table-data col-12 col-lg-6 col-md-6 col-sm-6">Type</td>
                                <td class="table-data col-12 col-lg-6 col-md-6 col-sm-6"><span  id="transmission_type_value"></span></td>
                            </tr>
                            <tr>
                                <td class="table-data">Clutch</td>
                                <td class="table-data"><span  id="transmission_clutch_value"></span></td>
                            </tr>
                            <tr>
                                <td class="table-data">Gear Box</td>
                                <td class="table-data"><span  id="gear_box_forward_2"></span> Forward + <span  id="gear_box_reverse_2"></span> Reverse</td>
                            </tr>
                            <tr>
                                <td class="table-data">Forward Speed</td>
                                <td class="table-data"> <span id="transmission_forward"></span> kmph </td>
                            </tr>
                            <tr>
                                <td class="table-data">Reverse Speed</td>
                                <td class="table-data" > <span id="transmission_reverse"></span> kmph</td>
                            </tr>
                        </tbody>
                    </table>

                    <div class="about border-success  border-4 text-dark border-start">
                        <h4 class="text-dark fw-bold text-start ps-2"><span class="text-success brand_model"></span>  Brakes</h4>
                    </div>

                    <table class="table table-hover table table-striped my-4">
                        <tbody>
                            <tr>
                                <td class="table-data col-12 col-lg-6 col-md-6 col-sm-6">Brakes</td>
                                <td class="table-data col-12 col-lg-6 col-md-6 col-sm-6"><span  id="brake_value"></span></td>
                            </tr>
                        </tbody>
                    </table>

                    <div class="about border-success  border-4 text-dark border-start">
                        <h3 class="text-dark fw-bold text-start ps-2"><span class="text-success brand_model"></span>  Steering</h3>
                    </div>

                    <table class="table  table-hover table table-striped my-4">

                        <tbody>
                            <tr>
                                <td class="table-data col-12 col-lg-6 col-md-6 col-sm-6">Type</td>
                                <td class="table-data col-12 col-lg-6 col-md-6 col-sm-6" id="steering_details_value"> </td>
                            </tr>
                            <tr>
                                <td class="table-data">Steering Column</td>
                                <td class="table-data"><span id="steering_column_value"></span></td>
                            </tr>
                        </tbody>
                    </table>

                    <div class="about border-success  border-4 text-dark border-start">
                        <h4 class="text-dark fw-bold text-start ps-2"><span class="text-success brand_model"></span> Power Take Off</h4>
                    </div>

                    <table class="table table-hover table table-striped my-4">

                        <tbody>
                            <tr>
                                <td class="table-data col-12 col-lg-6 col-md-6 col-sm-6">Type</td>
                                <td class="table-data"><span  id="power_take_off_type"></span> </td>
                            </tr>
                            <tr>
                                <td class="table-data">RPM</td>
                                <td class="table-data"><span id="power_take_off_type_rpm"></span></td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <div class="col-12 col-lg-4 col-md-4 col-sm-4">
                    <h4 class="text-center fw-bold mt-2">Related Brands</h4>
                    <div class="row" id="related_brand">
                    </div>
                    <div class=" text-center"><button class=" btn btn-success w-75 mt-2 mx-auto" id="loadMoreButton">Load More</button></div>

                    <div class="sticky my-3">
                        <div class="popular_used_tractor mb-3">
                            <h4 class="text-center  fw-bold mt-3">Popular Used Tractors</h4>
                        </div>
                        <div class="popular-used-tractor">
                            <div class="row" id="productContainerpopular">
                               
                            </div>
                            <div class=" text-center"><button class="btn btn-success" id="loadMoretract">Load More</button></div>

                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

<section class="mt-3">
        <div class="container">
            <div class="about border-success  border-4 text-dark border-start">
                <h4 class="text-dark fw-bold text-start ps-2"><span class="brand_model text-success"></span> Dimensions And Weight Of Tractor
                </h4>
            </div>
            <div class="row">
                <div class="col-12 col-lg-8 col-md-8 col-sm-8">
                    <table class="table table-hover table table-striped my-4">

                    <tbody>
                        <tr>
                            <td class="table-data col-12 col-lg-6 col-md-6 col-sm-6 ">Total Weight</td>
                            <td class="table-data col-12 col-lg-6 col-md-6 col-sm-6"><span id="total_weight"></span> kg</td>
                        </tr>
                        <tr>
                            <td class="table-data">Wheel Base</td>
                            <td class="table-data"><span id="wheel_base"></span>  mm</td>
                        </tr>
                    </tbody>
                    </table>
                </div>
                <div class="col-12 col-12-4 col-lg-4"></div>
            </div>
          
           

        </div>
    </section>

    <section class="mt-3">
        <div class="container">
            <div class="about border-success  border-4 text-dark border-start">
                <h4 class="text-dark fw-bold text-start ps-2"><span class="brand_model text-success"></span> Hydraulics</h4>
            </div>
            <div class="row">
                <div class="col-12 col-lg-8 col-md-8 col-sm-8">
                    <table class="table table-hover table table-striped my-4">

                    <tbody>
                        <tr>
                        <td class="table-data col-12 col-lg-6 col-md-6 col-sm-6">Lifting Capacity</td>
                        <td class="table-data col-12 col-lg-6 col-md-6 col-sm-6"><span id="lifting_capacity"></span> Kg</td>
                        </tr>
                        <tr>
                        <td class="table-data">3 point Linkage</td>
                        <td class="table-data"> <span id="linkage_point_value"></span></td>
                        </tr>
                    </tbody>
                    </table>
                </div>
                <div class="col-12 col-12-4 col-lg-4"></div>
            </div>

        </div>
    </section>

    <section class="mt-3">
        <div class="container">
            <div class="about border-success  border-4 text-dark border-start">
                <h4 class="text-dark fw-bold text-start ps-2"><span class="text-success brand_model"></span> Wheels And Tyres</h4>
            </div>
            <div class="row">
                <div class="col-12 col-lg-8 col-md-8 col-sm-8">
                    <table class="table table-hover table table-striped my-4">

                    <tbody>
                        <tr>
                        <td class="table-data col-12 col-lg-6 col-md-6 col-sm-6">Wheel drive</td>
                        <td class="table-data col-12 col-lg-6 col-md-6 col-sm-6"><span id="wheel_drive_value"></span></td>
                        </tr>
                        <tr>
                        <td class="table-data">Front</td>
                        <td class="table-data"><span id="front_tyre"></span></td>
                        </tr>
                        <tr>
                        <td class="table-data">Rear</td>
                        <td class="table-data"><span id="rear_tyre"></span></td>
                        </tr>
                    </tbody>
                    </table>
                </div>
                <div class="col-12 col-12-4 col-lg-4"></div>
            </div>

        </div>
    </section>
    <section class="mt-3">
        <div class="container">
            <div class="about border-success  border-4 text-dark border-start">
                <h4 class="text-dark fw-bold text-start ps-2"><span class=" text-success brand_model"></span> Other
                        Information</span></h4>
            </div>

            <div class="row">
                <div class="col-12 col-lg-8 col-md-8 col-sm-8">
                    <table class="table table-hover table table-striped my-4">

                    <table class="table table-hover table table-striped my-4">

                <tbody>
                    <tr>
                        <td class="table-data col-12 col-lg-6 col-md-6 col-sm-6">Accessories</td>
                        <td class="table-data col-12 col-lg-6 col-md-6 col-sm-6"><span id="accessory_id"></span> </td>
                    </tr>
                    <tr>
                        <td class="table-data">Warranty</td>
                        <td> <span id="warranty_2"></span> year</td>
                    </tr>
                    <tr>
                        <td class="table-data">Status</td>
                        <td class="table-data"><span id="status_value"></span></td>
                    </tr>

                </tbody>
            </table>
                </div>
                <div class="col-12 col-12-4 col-lg-4"></div>
            </div>

        </div>
    </section>



    <section class="about bg-light">
        <div class="container">
            <div class="lecture_heading text-center">
                <h4 class="fw-bold mt-4 pt-4">Recently Asked Questions on Mahindra 575 DI XP Plus</h4>
            </div>
            <div class="mt-4 pb-5">
                <div class="accordion " id="accordionFlushExample">
                    <div class="accordion-item  rounded-3">
                        <h2 class="accordion-header" id="flush-headingOne">
                            <button class="accordion-button collapsed fw-bold mb-0 h4" type="button"
                                data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false"
                                aria-controls="flush-collapseOne">
                                Que. How much HP does the Mahindra 575 DI XP Plus tractor have?
                            </button>
                        </h2>
                        <div id="flush-collapseOne" class="accordion-collapse collapse"
                            aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                <p class="text-dark">Ans. Mahindra 575 DI XP Plus Tractor comes with 47 HP for long-term
                                    farming tasks.</p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item rounded-3 my-3">
                        <h2 class="accordion-header" id="flush-headingTwo">
                            <button class="accordion-button collapsed mb-0  fw-bold h4" type="button"
                                data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false"
                                aria-controls="flush-collapseTwo">
                                Que. What is the price of the Mahindra 575 DI XP Plus tractor?
                            </button>
                        </h2>
                        <div id="flush-collapseTwo" class="accordion-collapse collapse"
                            aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                <p class="text-dark">Ans. Mahindra 575 DI XP Plus price is Rs. 6.90-7.27 Lakh*.</p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item  rounded-3 my-3">
                        <h2 class="accordion-header" id="flush-headingThree">
                            <button class="accordion-button collapsed mb-0  fw-bold h4" type="button"
                                data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false"
                                aria-controls="flush-collapseThree">
                                Que. Does the Mahindra 575 DI XP Plus tractor consist high fuel mileage?
                            </button>
                        </h2>
                        <div id="flush-collapseThree" class="accordion-collapse collapse"
                            aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                <p class="text-dark">Ans. Yes, Mahindra 575 DI XP Plus tractor has high fuel mileage.
                                </p>
                            </div>
                        </div>
                    </div>


                </div>
            </div>


        </div>
    </section>

    <section class="section slider-section">

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
                        <!-- <div class="col-12" hidden>
                                <label for="Mobile" class=" text-dark float-start pl-2">Enter OTP</label>
                                <input type="text" class="form-control text-dark" placeholder="Enter OTP" id="Mobile"name="Mobile">
                            </div> -->
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
                    <button type="button" class="btn btn-success" id="Verify">Verify</button>
                </div>
            </div>
        </div>
    </div>

 

    <h2 id="productName"></h2>


    <?php
    include 'includes/footer.php';
    include 'includes/footertag.php';

    ?>
    <div class="modal fade" id="staticBackdrop3" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title ms-1" id="staticBackdropLabel">Request Call Back</h5>
              <button type="button" class="btn-close btn-success" data-bs-dismiss="modal" aria-label="Close"><img src="assets/images/close.png" class="w-25"></button>
            </div>
            <!-- MODAL BODY -->
            <div class="modal-body">
            <form id="inner_brand_form" method="POST" onsubmit="return false">
                <div class="row">
                    <div class="col-12 col-lg-6 col-md-6 col-sm-6 " hidden>
                         <label for="name" class="form-label fw-bold text-dark"><i class="fa-duotone fa-chart-pie-simple"></i></label>
                        <input type="text" class="form-control" placeholder="Enter Your Name" id="product_id" value="" name="">
                    </div>
                    <div class="col-12 col-lg-6 col-md-6 col-sm-6 " hidden>
                         <label for="name" class="form-label fw-bold text-dark"><i class="fa-duotone fa-chart-pie-simple"></i> Model Name</label>
                        <input type="text" class="form-control" placeholder="Enter Your Name" id="enquiry_type_id" value="2" name="iduser">
                    </div>
                    <div class="col-12 col-lg-6 col-md-6 col-sm-6 " hidden>
                        <label for="name" class="form-label fw-bold text-dark"><i class="fa-duotone fa-chart-pie-simple"></i> Model Name</label>
                        <input type="text" class="form-control" placeholder="Enter Your Name" id="product_type_id" value="2" name="iduser">
                    </div>
                    <div class="col-12 col-sm-6 col-md-6 col-lg-6">
                        <label for="" class="form-label text-dark fw-bold"> <i class="fa-regular fa-user"></i> First Name</label>
                         <input type="text" class="form-control" placeholder="Enter Number" id="firstName" name="firstName">
                    </div>
                    <div class="col-12 col-sm-6 col-md-6 col-lg-6">
                        <label for="" class="form-label text-dark fw-bold"><i class="fa-regular fa-user"></i> Last Name</label>
                        <input type="text" class="form-control" placeholder="Enter Number" id="lastName" name="lastName">
                    </div>
                    <div class="col-12 col-sm-6 col-md-6 col-lg-6">
                        <label for="number" class="form-label text-dark fw-bold"><i class="fa fa-phone" aria-hidden="true"></i> Mobile Number</label>
                        <input type="text" class="form-control" placeholder="Enter Number" id="mobile_number" name="mobile_number">
                     
                    </div>
                     <div class="col-12 col-sm-6 col-md-6 col-lg-6 mt-4">
                        <div class="form-outline">
                            <label for="state" class="form-label text-dark fw-bold"> <i class="fas fa-location"></i> State</label>
                            <select class="form-select py-2 state-dropdown" aria-label=".form-select-lg example" id="state" name="state">
                            </select>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-6 col-lg-6 mt-4">
                        <div class="form-outline">
                            <label for="district" class="form-label fw-bold text-dark"><i class="fa-solid fa-location-dot"></i> District</label>
                            <select class="form-select py-2 district-dropdown" aria-label=".form-select-lg example" id="district" name="district">
                           </select>
                        </div>
                    </div>       
                    <div class="col-12 col-sm-6 col-md-6 col-lg-6 mt-4">
                        <div class="form-outline">
                            <label for="Tehsil" class="form-label fw-bold text-dark"> Tehsil</label>
                            <select class="form-select py-2 tehsil-dropdown" aria-label=".form-select-lg example" id="Tehsil" name="Tehsil">
                             </select>
                        </div>
                    </div>
                <div class="modal-footer">
                    <button type="submit" id="submit_enquiry" class="btn add_btn btn-success w-100 btn_all" onclick="savedata('${formId}')" data-bs-dismiss="modal">Submit</button>
                </div>      
            </form>                                           
            </div>
          </div>
        </div>
      </div>

</html>

<script>
$('#usedtractorforsell').owlCarousel({
    loop: true,
    margin: 10,
    nav: true,
    navText: [
        "<i class='fa fa-caret-left'></i>",
        "<i class='fa fa-caret-right'></i>"
    ],

    autoplay: false,
    autoplayTimeout: 3000,
    autoplayHoverPause: true,
    responsive: {
        0: {
            items: 1
        },
        600: {
            items: 3
        },
        1000: {
            items: 3
        }
    }
})
</script>
<script>
 function googleTranslateElementInit() {
 new google.translate.TranslateElement({
 pageLanguage: 'en',
 autoDisplay: 'true',
 includedLanguages:'hi,en,bn,ar,ja,iw', // <- remove this line to show all language
 layout: google.translate.TranslateElement.InlineLayout.HORIZONTAL
 }, 'google_translate_element');
 }
</script>