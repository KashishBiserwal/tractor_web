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
  <script src="<?php $baseUrl; ?>model/new_tractor_inner.js"></script>
</head>

<body>
    <?php
   include 'includes/header.php';
   ?>

    <section>
        <div class="container mt-5 pt-4">
            <div class="pt-5">
                <span class="mt-4 pt-4 ">
                    <a href="index.php" class="text-decoration-none header-link px-1">Home <i
                            class="fa-solid fa-chevron-right px-1"></i></a>
                    <span class=""><span class=" header-link  px-1">Brand <i class="fa-solid fa-chevron-right px-1"></i>
                        </span></span>
                    <span class="text-dark"> Mahindra</span>
                </span>
            </div>
        </div>
    </section>

    <section id="Mahindra_575">
        <div class="container">
            <h1 class="mt-4" id="model_name"></h1>
            <div class="row">
                <div class="col-12 col-lg-6 col-md-6 col-sm-6 mt-5 pt-3">
                    <img src="assets/images/mahindra-575-di-sp-plus-836976961.avif" alt="mahindra-575-DI-XP-Plus">
                    <!-- <img src="" alt="mahindra-575-DI-XP-Plus" id="image_id"> -->
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
                            <a href="4wd.php"><button type="submit" class="btn btn-success w-100 fw-bold ">GET ON ROAD
                                    PRICE</button></a>
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
            <div class="row">
                <div class="col-12 col-lg-12 col-md-12 col-sm-12 mt-3">
                <h3 class="text-dark fw-bold assured mt-2 ps-3" ><span class="text-success"  class="model_name"></span> Other Features</h3>
                </div>
                <div class="row mt-2">
                    <div class="col-12 col-lg-3 col-md-3 col-sm-3">

                        <div class=" text-center shadow bg-white ">
                            <img src="assets/images/clutch.png" class="w-50 h-50" alt="">
                            <h6 class=" text-center fw-bold  text-dark">Clutch</h6>
                            <p class="engine_name text-center" id="transmission_clutch_value2"> </p>
                        </div>

                    </div>
                    <div class="col-12 col-lg-3 col-md-3 col-sm-3">
                        <div class=" text-center shadow bg-white ">
                            <img src="assets/images/steering.png" class="w-50 h-50" alt="">
                            <h6 class=" text-center fw-bold  text-dark">STEERING</h6>
                            <p class="engine_name text-center" id="steering_column_value2"></p>
                        </div>
                    </div>
                    <div class="col-12 col-lg-3 col-md-3 col-sm-3">
                        <div class=" text-center shadow bg-white ">
                            <img src="assets/images/wheel-drive.png" class="w-50 h-50" alt="">
                            <h6 class=" text-center fw-bold  text-dark">LIFTING CAPACITY</h6>
                            <p class="engine_name text-center" id="liftingC"></p>
                        </div>

                    </div>
                    <div class="col-12 col-lg-3 col-md-3 col-sm-3">
                        <div class=" text-center shadow bg-white ">
                            <img src="assets/images/rpm.png" class="w-50 h-50" alt="">
                            <h6 class=" text-center fw-bold  text-dark">ENGINE RATED RPM</h6>
                            <p class="engine_name text-center" id="engine_rated_rpm2"></p>
                        </div>

                    </div>
                </div>


            </div>
        </div>

    </section>

    <section class="bg-light">
        <div class="container">

            <div class="row ">
                <div class="col-12 col-lg-8 col-md-8 col-sm-8 mt-3">
                    <div class="about border-success  border-4 text-dark border-start">
                    <h3 class="text-dark fw-bold  ps-4"> About <span id="brand_name"></span></h2>

                    </div>
                    <p class="text-dark justify-content-center" id="description"></p>


                    <div class="about border-success  border-4 text-dark border-start">
                        <h3 class="text-dark fw-bold text-start ps-2"> <span class="model_name"></span> Engine</h3>
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
                        <h3 class="text-dark fw-bold text-start ps-2"> <span class="model_name"></span> Transmission</h3>
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
                        <h3 class="text-dark fw-bold text-start ps-2"><span class="model_name"></span>  Brakes</h3>
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
                        <h3 class="text-dark fw-bold text-start ps-2"><span class="model_name"></span>  Steering</h3>
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
                        <h3 class="text-dark fw-bold text-start ps-2"><span class="model_name"></span> Power Take Off</h3>
                    </div>

                    <table class="table table-hover table table-striped my-4">

                        <tbody>
                            <tr>
                                <td class="table-data col-12 col-lg-6 col-md-6 col-sm-6">Type</td>
                                <td class="table-data" id="power_take_off_type"></td>
                            </tr>
                            <tr>
                                <td class="table-data">RPM</td>
                                <td class="table-data"><span id="power_take_off_type_rpm"></span></td>
                            </tr>
                        </tbody>
                    </table>








                </div>
                <div class="col-12 col-lg-4 col-md-4 col-sm-4">
                    <h3 class="text-center fw-bold mt-2">Related Brands</h3>
                    <div class="row" id="related_brand">
                        <!-- <div class=" col-6 col-lg-6 col-md-6 col-sm-6">
                            <div class="brand-main box-shadow mt-2 text-center shadow">
                                <a class="weblink text-decoration-none text-dark" href="#"
                                    title="Sonalika Old Tractors">
                                    <img class="img-fluid w-50" src="assets/images/mahindra-1673872647.webp"
                                        data-src="h" alt="Sonalika Brand Logo">
                                    <p class="mb-0 oneline">Mahindra</p>
                                </a>
                            </div>
                        </div> -->
                    </div>

                    <div class="sticky my-3">
                        <div class="popular_used_tractor mb-3">
                            <h3 class="text-center  fw-bold mt-3">Popular Used Tractors</h3>
                        </div>
                        <div class="popular-used-tractor">
                            <div class="row" id="productContainerpopular">
                                <!-- <div class="used-tractor mb-3 d-flex flex-row shadow p-2" style="background-color:#fff">
                                    <div class="text-center">
                                        <a href="#" class="weblink">
                                            <img src="assets/images/450-1630737775.webp" width="100" height="100" alt=""
                                                style=" border-radius: 10px;">
                                        </a>
                                    </div>
                                    <div class="px-2 d-flex flex-column justify-cintent-center">
                                        <a href="#" class="text-decoration-none">
                                            <p class="mb-1">farmtrac 242 DI </p>
                                        </a>
                                        <p class="trac">
                                            <span class="bg-light">40 HP</span>
                                            <span class="bg-light">WD</span>
                                        </p>
                                        <div class="">
                                            <a href="#"><img
                                                    src="assets/images/index_trac_files/park-solid_phone-call.svg"
                                                    width="15" height="15" alt="phone-call-icon">Call
                                                Now</span></a>
                                        </div>
                                    </div>
                                </div> -->
                                <!-- <div class="used-tractor mb-3 d-flex flex-row shadow p-2" style="background-color:#fff">
                                    <div class="text-center">
                                        <a href="#" class="weblink">
                                            <img src="assets/images/450-1630737775.webp" width="100" height="100" alt=""
                                                style=" border-radius: 10px;">
                                        </a>
                                    </div>
                                    <div class="px-2 d-flex flex-column justify-cintent-center">
                                        <a href="#" class="text-decoration-none">
                                            <p class="mb-1">farmtrac 242 DI </p>
                                        </a>
                                        <p class="trac">
                                            <span class="bg-light m-1" style=" font-size: 0.9rem;">40 HP</span>
                                            <span class="bg-light m-1" style=" font-size: 0.9rem;">WD</span>
                                        </p>
                                        <div class="">
                                            <a href="#"><img
                                                    src="assets/images/index_trac_files/park-solid_phone-call.svg"
                                                    width="15" height="15" alt="phone-call-icon">Call
                                                Now</span></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="used-tractor mb-3 d-flex flex-row shadow p-2" style="background-color:#fff">
                                    <div class="text-center">
                                        <a href="#" class="weblink">
                                            <img src="assets/images/450-1630737775.webp" width="100" height="100" alt=""
                                                style=" border-radius: 10px;">
                                        </a>
                                    </div>
                                    <div class="px-2 d-flex flex-column justify-cintent-center">
                                        <a href="#" class="text-decoration-none">
                                            <p class="mb-1">farmtrac 242 DI </p>
                                        </a>
                                        <p class="trac">
                                            <span class="bg-light" style=" font-size: 0.9rem;">40 HP</span>
                                            <span class="bg-light" style=" font-size: 0.9rem;">WD</span>
                                        </p>
                                        <div class="">
                                            <a href="#"><img
                                                    src="assets/images/index_trac_files/park-solid_phone-call.svg"
                                                    width="15" height="15" alt="phone-call-icon">Call
                                                Now</span></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="used-tractor mb-3 d-flex flex-row shadow p-2" style="background-color:#fff">
                                    <div class="text-center">
                                        <a href="#" class="weblink">
                                            <img src="assets/images/450-1630737775.webp" width="100" height="100" alt=""
                                                style=" border-radius: 10px;">
                                        </a>
                                    </div>
                                    <div class="px-2 d-flex flex-column justify-cintent-center">
                                        <a href="#" class="text-decoration-none">
                                            <p class="mb-1">farmtrac 242 DI </p>
                                        </a>
                                        <p class="trac">
                                            <span class="bg-light" style=" font-size: 0.9rem;">40 HP</span>
                                            <span class="bg-light" style=" font-size: 0.9rem;">WD</span>
                                        </p>
                                        <div class="">
                                            <a href="#"><img
                                                    src="assets/images/index_trac_files/park-solid_phone-call.svg"
                                                    width="15" height="15" alt="phone-call-icon">Call
                                                Now</span></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="used-tractor mb-3 d-flex flex-row shadow p-2" style="background-color:#fff">
                                    <div class="text-center">
                                        <a href="#" class="weblink">
                                            <img src="assets/images/450-1630737775.webp" width="100" height="100" alt=""
                                                style=" border-radius: 10px;">
                                        </a>
                                    </div>
                                    <div class="px-2 d-flex flex-column justify-cintent-center">
                                        <a href="#" class="text-decoration-none">
                                            <p class="mb-1">farmtrac 242 DI </p>
                                        </a>
                                        <p class="trac">
                                            <span class="bg-light" style=" font-size: 0.9rem;">40 HP</span>
                                            <span class="bg-light" style=" font-size: 0.9rem;">WD</span>
                                        </p>
                                        <div class="">
                                            <a href="#"><img
                                                    src="assets/images/index_trac_files/park-solid_phone-call.svg"
                                                    width="15" height="15" alt="phone-call-icon">Call
                                                Now</span></a>
                                        </div>
                                    </div>
                                </div> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>



    </section>










    <section class="mt-3">
        <div class="container">
            <div class="about border-success  border-4 text-dark border-start">
                <h3 class="text-dark fw-bold text-start ps-2"><span class="model_name"></span> Dimensions And Weight Of Tractor
                </h3>
            </div>

            <table class="table table-hover table table-striped my-4">

                <tbody>
                    <tr>
                        <td class="table-data col-12 col-lg-6 col-md-6 col-sm-6">Total Weight</td>
                        <td class="table-data col-12 col-lg-6 col-md-6 col-sm-6 table-data"><span id="total_weight"></span> KG</td>
                    </tr>
                    <tr>
                        <td class="table-data">Wheel Base</td>
                        <td class="table-data"><span id="wheel_base"></span>  MM</td>
                    </tr>
                </tbody>
            </table>

        </div>
    </section>

    <section class="mt-3">
        <div class="container">
            <div class="about border-success  border-4 text-dark border-start">
                <h3 class="text-dark fw-bold text-start ps-2"><span class="model_name"></span> Hydraulics</h3>
            </div>

            <table class="table  table-hover table table-striped my-4">

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
    </section>
    <!-- <section class="mt-3">
        <div class="container">
            <div class="about border-success  border-4 text-dark border-start">
                <h3 class="text-dark fw-bold text-start ps-2"><span class="model_name"></span> Fuel Tank</h3>
            </div>

            <table class="table table-hover table table-striped my-4">
                <tbody>
                    <tr>
                        <td class="table-data col-12 col-lg-6 col-md-6 col-sm-6">Capacity</td>
                        <td class="table-data col-12 col-lg-6 col-md-6 col-sm-6"><span id="fuel_capacity"></span> L</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </section> -->

    <section class="mt-3">
        <div class="container">
            <div class="about border-success  border-4 text-dark border-start">
                <h3 class="text-dark fw-bold text-start ps-2"><span class="model_name"></span> Wheels And Tyres</h3>
            </div>

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
    </section>
    <section class="mt-3">
        <div class="container">
            <div class="about border-success  border-4 text-dark border-start">
                <h3 class="text-dark fw-bold text-start ps-2"><span id="brand_name"></span> Other
                        Information</span></h3>
            </div>

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
    </section>



    <section class="about bg-light">
        <div class="container">
            <div class="lecture_heading text-center">
                <h3 class="fw-bold mt-4 pt-4">Recently Asked Questions on Mahindra 575 DI XP Plus</h3>
            </div>
            <div class="mt-4 pb-5">
                <div class="accordion " id="accordionFlushExample">
                    <div class="accordion-item  rounded-3">
                        <h2 class="accordion-header p-2" id="flush-headingOne">
                            <button class="accordion-button collapsed fw-bold h4" type="button"
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
                        <h2 class="accordion-header p-2" id="flush-headingTwo">
                            <button class="accordion-button collapsed  fw-bold h4" type="button"
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
                        <h2 class="accordion-header p-2" id="flush-headingThree">
                            <button class="accordion-button collapsed  fw-bold h4" type="button"
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

        <div class="container slider-column">
            <h3 class="assured px-2 fw-bold mt-4">Similar Tyres</h3>
            <div class="carousel-wrap">
                <div class="owl-carousel" id="usedtractorforsell">
                    <div class="item">
                        <div class="post-slide">
                            <div class="post-img">
                                <img src="assets/images/birla_tyre.jpg" alt="">
                                <a href="#" class="over-layer">
                                    <i class="fa fa-link"></i>
                                </a>
                            </div>
                            <div class="post-content">
                                <h3 class="post-title text-center">
                                    <a href="#" class="text-decoration-none fw-bold ">
                                        Birla Tyres SHAAN+ 18.4 - 30</a>
                                </h3>
                                <div class="row text-center">
                                    <div class="col-4 col-lg-4 col-md-4 col-sm-4">
                                        <p class="text-dark">Tractor</p>
                                    </div>
                                    <div class="col-4 col-lg-4 col-md-4 col-sm-4">
                                        <p class="text-dark">Rear
                                        </p>
                                    </div>
                                    <div class="col-4 col-lg-4 col-md-4 col-sm-4">
                                        <p id="adduser" type="" class="text-dark">
                                            18.4-30
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="post-slide">
                            <div class="post-img">
                                <img src="assets/images/birla_tyre.jpg" alt="">
                                <a href="#" class="over-layer">
                                    <i class="fa fa-link"></i>
                                </a>
                            </div>
                            <div class="post-content">
                                <h3 class="post-title  text-center">
                                    <a href="#" class="text-decoration-none fw-bold">
                                        Birla Tyres SHAAN+ 18.4 - 30</a>
                                </h3>
                                <div class="row text-center">
                                    <div class="col-4 col-lg-4 col-md-4 col-sm-4">
                                        <p class="text-dark">Tractor</p>
                                    </div>
                                    <div class="col-4 col-lg-4 col-md-4 col-sm-4">
                                        <p class="text-dark">Rear
                                        </p>
                                    </div>
                                    <div class="col-4 col-lg-4 col-md-4 col-sm-4">
                                        <p id="adduser" type="" class="text-dark">
                                            18.4-30
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="post-slide">
                            <div class="post-img">
                                <img src="assets/images/birla_tyre.jpg" alt="">
                                <a href="#" class="over-layer">
                                    <i class="fa fa-link"></i>
                                </a>
                            </div>
                            <div class="post-content">
                                <h3 class="post-title text-center">
                                    <a href="#" class="text-decoration-none fw-bold ">
                                        Birla Tyres SHAAN+ 18.4 - 30</a>
                                </h3>
                                <div class="row text-center">
                                    <div class="col-4 col-lg-4 col-md-4 col-sm-4">
                                        <p class="text-dark">Tractor</p>
                                    </div>
                                    <div class="col-4 col-lg-4 col-md-4 col-sm-4">
                                        <p class="text-dark">Rear
                                        </p>
                                    </div>
                                    <div class="col-4 col-lg-4 col-md-4 col-sm-4">
                                        <p id="adduser" type="" class="text-dark">
                                            <i class="fa-solid fa-indian-rupee-sign mx-2"></i>18.4-30
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="post-slide">
                            <div class="post-img">
                                <img src="assets/images/birla_tyre.jpg" alt="">
                                <a href="#" class="over-layer">
                                    <i class="fa fa-link"></i>
                                </a>
                            </div>
                            <div class="post-content">
                                <h3 class="post-title text-center">
                                    <a href="#" class="text-decoration-none fw-bold ">
                                        Birla Tyres SHAAN+ 18.4 - 30</a>
                                </h3>
                                <div class="row text-center">
                                    <div class="col-4 col-lg-4 col-md-4 col-sm-4">
                                        <p class="text-dark">Tractor</p>
                                    </div>
                                    <div class="col-4 col-lg-4 col-md-4 col-sm-4">
                                        <p class="text-dark">Rear
                                        </p>
                                    </div>
                                    <div class="col-4 col-lg-4 col-md-4 col-sm-4">
                                        <p id="adduser" type="" class="text-dark">
                                            <i class="fa-solid fa-indian-rupee-sign mx-2"></i>18.4-30
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="post-slide">
                            <div class="post-img">
                                <img src="assets/images/birla_tyre.jpg" alt="">
                                <a href="#" class="over-layer">
                                    <i class="fa fa-link"></i>
                                </a>
                            </div>
                            <div class="post-content">
                                <h3 class="post-title text-center">
                                    <a href="#" class="text-decoration-none fw-bold">
                                        Birla Tyres SHAAN+ 18.4 - 30</a>
                                </h3>
                                <div class="row text-center">
                                    <div class="col-4 col-lg-4 col-md-4 col-sm-4">
                                        <p class="text-dark">Tractor</p>
                                    </div>
                                    <div class="col-4 col-lg-4 col-md-4 col-sm-4">
                                        <p class="text-dark">Rear
                                        </p>
                                    </div>
                                    <div class="col-4 col-lg-4 col-md-4 col-sm-4">
                                        <p id="adduser" type="" class="text-dark">
                                            <i class="fa-solid fa-indian-rupee-sign mx-2"></i>18.4-30
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


    </section>
    <!-- <section>
        <div class="container">
            <div class="text-editor-black  my-3" style="background-color:#fff">
                <h4>
                    <p class="mt-md mt-3 p-2 mb-3 my-3 assured">Related Tractor Trailer </p>
                </h4>
            </div>
            <div class="owl-slider">
                <div id="carousel_related" class="owl-carousel owl-carousel_related">
                    <div class="item">
                        <div class="col-md-12 shadow d-flex flex-row">
                            <div class="">
                                <a href="#"><img class="img-fluid" src="assets/images/tractor-trolley-374.jpg"></a>
                                <div class="text-center">
                                    <a href="#" title="Mahendra Yuvo 265 DI" class="weblink" tabindex="0">
                                        <p class="para h5 pt-2">Mourya 265 DI</p>
                                    </a>
                                    <p class="mt-2 nb-0"> Price <b>₹</b> 5,00,000</p>
                                    <p class=""><span class="text-center">Hours:N/A</span></p>
                                </div>
                                <div class="col-12">
                                    <span><a href="#" class="btn price-bnt btn-success w-100 ">Get On Road
                                            Price</a></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="col-md-12 shadow d-flex flex-row">
                            <div class="">
                                <a href="#"><img class="img-fluid" src="assets/images/tractor-trolley-374.jpg"></a>
                                <div class="text-center">
                                    <a href="#" title="Mahendra Yuvo 265 DI" class="weblink" tabindex="0">
                                        <p class="para h5 pt-2">Mourya 2013</p>
                                    </a>
                                    <p class="mt-2 nb-0"> Price <b>₹</b> 5,00,000</p>
                                    <p class=""><span class="text-center">Hours:N/A</span></p>
                                </div>
                                <div class="col-12">
                                    <span><a href="#" class="btn price-bnt btn-success w-100 ">Get On Road
                                            Price</a></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="col-md-12 shadow d-flex flex-row">
                            <div class="">
                                <a href="#"><img class="img-fluid" src="assets/images/tractor-trolley-374.jpg"></a>
                                <div class="text-center">
                                    <a href="#" title="Mahendra Yuvo 265 DI" class="weblink" tabindex="0">
                                        <p class="para h5 pt-2">Mahendra Yuvo 265 DI</p>
                                    </a>
                                    <p class="mt-2 nb-0"> Price <b>₹</b> 5,00,000</p>
                                    <p class=""><span class="text-center">Hours:N/A</span></p>
                                </div>
                                <div class="col-12">
                                    <span><a href="#" class="btn price-bnt btn-success w-100 ">Get On Road
                                            Price</a></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="col-md-12 shadow d-flex flex-row">
                            <div class="">
                                <a href="#"><img class="img-fluid" src="assets/images/tractor-trolley-374.jpg"></a>
                                <div class="text-center">
                                    <a href="#" title="Mahendra Yuvo 265 DI" class="weblink" tabindex="0">
                                        <p class="para h5 pt-2">Mahendra Yuvo 265 DI</p>
                                    </a>
                                    <p class="mt-2 nb-0">Price <b>₹</b> 5,00,000</p>
                                    <p class=""><span class="text-center">Hours:N/A</span></p>
                                </div>
                                <div class="col-12">
                                    <span><a href="#" class="btn price-bnt btn-success w-100 ">Get On Road
                                            Price</a></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="col-md-12 shadow d-flex flex-row">
                            <div class="">
                                <a href="#"><img class="img-fluid" src="assets/images/tractor-trolley-374.jpg"></a>
                                <div class="text-center">
                                    <a href="#" title="Mahendra Yuvo 265 DI" class="weblink" tabindex="0">
                                        <p class="para h5 pt-2">Mahendra Yuvo 265 DI</p>
                                    </a>
                                    <p class="mt-2 nb-0"> Price <b>₹</b> 5,00,000</p>
                                    <p class=""><span class="text-center">Hours:N/A</span></p>
                                </div>
                                <div class="col-12">
                                    <span><a href="#" class="btn price-bnt btn-success w-100 ">Get On Road
                                            Price</a></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="col-md-12 shadow d-flex flex-row">
                            <div class="">
                                <a href="#"><img class="img-fluid" src="assets/images/tractor-trolley-374.jpg"></a>
                                <div class="text-center">
                                    <a href="#" title="Mahendra Yuvo 265 DI" class="weblink" tabindex="0">
                                        <p class="para h5 pt-2">Sonalika</p>
                                    </a>
                                    <p class="mt-2 nb-0"> Price <b>₹</b> 5,00,000</p>
                                    <p class=""><span class="text-center">Hours:N/A</span></p>
                                </div>
                                <div class="">
                                    <span><a href="#" class="btn price-bnt btn-success w-100 ">Get On Road
                                            Price</a></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="col-md-12 shadow d-flex flex-row">
                            <div class="">
                                <a href="#"><img class="img-fluid" src="assets/images/tractor-trolley-374.jpg"></a>
                                <div class="text-center">
                                    <a href="#" title="Mahendra Yuvo 265 DI" class="weblink" tabindex="0">
                                        <p class="para h5 pt-2">Mourya 2013</p>
                                    </a>
                                    <p class="mt-2 nb-0">Price <b>₹</b> 5,00,000</p>
                                    <p class=""><span class="text-center">Hours:N/A</span></p>
                                </div>
                                <div class="">
                                    <span><a href="#" class="btn price-bnt btn-success w-100 ">Get On Road
                                            Price</a></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->

    <h2 id="productName"></h2>


    <?php
    include 'includes/footer.php';
    include 'includes/footertag.php';

    ?>

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