<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    include 'includes/headertag.php';
    include 'includes/headertagadmin.php';
    $product_id = $_REQUEST['product_id'];
    //    echo $product_id;
    include 'includes/footertag.php';
    ?>

    <script> var APIBaseURL = "<?php echo $APIBaseURL; ?>";</script>
    <script> var baseUrl = "<?php echo $baseUrl; ?>";</script>
    <script src="<?php $baseUrl; ?>model/new_tractor_inner_new.js" defer></script>
    <script src="<?php $baseUrl; ?>model/State_dist_tehsil.js" defer></script>
</head>
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-6Z38E658LD"></script>
<script>
    window.dataLayer = window.dataLayer || [];
    function gtag() { dataLayer.push(arguments); }
    gtag('js', new Date());

    gtag('config', 'G-6Z38E658LD');
</script>
<style>
    .head {
        font-size: 20px;
        font-weight: 600;
        color: #333;
        margin-bottom: 20px;
        background-color: #F2F2F2;
        padding-top: 10px;
        border-radius: 10px;
    }

    .highlights {
        background-color: #F2F2F2;
        padding: 10px 25px;
        border-radius: 10px;
        max-height: max-content;
    }

    .mainImage {
        width: 100%;
        height: 100%;
        object-fit: contain;
        border: 1px solid #F2F2F2;
        padding: 10px;
        border-radius: 10px;
    }

    #left-bar {
        display: grid;
    }

    .tabs {
        display: flex;
        gap: 10px;
        cursor: pointer;
    }

    .tab {
        padding: 10px 20px;
        border: 1px solid #ccc;
        border-bottom: none;
        background: #f1f1f1;
        border-radius: 10px 10px 0 0;
    }

    .tab.active {
        background: #233C50;
        font-weight: bold;
        color: white;
    }

    .content {
        display: none;
        padding: 20px;
        border-top: 2px solid #ccc;
    }

    .content.active {
        display: block;
    }

    .gridd {
        display: grid;
        grid-template-columns: 8fr 4fr;
        gap: 80px;
    }


    @media (max-width: 768px) {
        .row {
            margin-left: 0 !important;
            margin-right: 0 !important;
        }

        .col-6 {
            padding-left: 8px !important;
            padding-right: 8px !important;
        }

        .feature__gridIcon img {
            width: 40px;
            height: 40px;
        }

        .feature__gridProperty {
            font-size: 12px;
        }

        .engine_name {
            font-size: 11px;
        }

        .mt-130 {
            margin-top: 72px !important;
        }
    }

    .mt-130 {
        margin-top: 117px;
    }
</style>

<body>
    <?php
    include 'includes/header.php';
    ?>
    <section class="mt-130 bg-light" style="margin-top: 180px;">
        <div class="container">
            <div class="py-2">
                <span class="text-white">
                    <a href="index.php" class="text-decoration-none header-link px-1">Home
                        <i class="fa-solid fa-chevron-right px-1"></i>
                    </a>
                    <a href="" id="model_name" class="text-decoration-none header-link px-1"> <span
                            class="text-dark p"></span></a>
                </span>
            </div>
        </div>
    </section>
    <section id="Mahindra_575" class="mb-5">
        <div class="container pt-4">
            <div class="row">
                <div class="col-9">
                    <div>
                        <div id="tractor-images" class="d-flex gap-5">
                            <div id="left-bar"></div>
                            <div>
                                <img src="" id="main-image" alt="" class="mainImage">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-3 highlights">
                    <h4 class="head">Highlights</h4>
                    <ul>
                        <li>
                            <p>Brand : <span id="brand_name"></span></>
                        </li>
                    </ul>
                    <ul>
                        <li>
                            <p>No. of Cylinder : <span id="total_cyclinder_value2"></span></>
                        </li>
                    </ul>
                    <ul>
                        <li>
                            <p>HP Category : <span id="hp_category"></span> HP</>
                        </li>
                    </ul>
                    <ul>
                        <li>
                            <p>PTO HP : <span id="horse_power"></span> HP</>
                        </li>
                    </ul>
                    <ul>
                        <li>
                            <p>Gear Box : <span id="gear_box_forward"></span> Forward + <span
                                    id="gear_box_reverse"></span> Reverse</>
                        </li>
                    </ul>
                    <ul>
                        <li>
                            <p>Brakes : <span id="brake_value2"></span></>
                        </li>
                    </ul>
                    <ul>
                        <li>
                            <p>Warranty : <span id="warranty"></span> Year</>
                        </li>
                    </ul>
                    <ul>
                        <li>
                            <button type="submit" class="btn fw-bold" style="background-color: #B90405; color: white" data-bs-toggle="modal" data-bs-target="#staticBackdrop3">
                        Check Price
                    </button>
                                
                        </li>
                    </ul>
                   

                    <!-- <div class="row my-3 text-center">
                <div class="col-12 col-lg-6 col-md-6 col-sm-6 mb-2 mb-lg-0">
                    <button type="submit" class="btn btn-success w-100 fw-bold" data-bs-toggle="modal" data-bs-target="#staticBackdrop3">
                        Request Call Back
                    </button>
                </div>
                <div class="col-12 col-lg-6 col-md-6 col-sm-6">
                    <a href="new_tractor_loan.php">
                        <button type="submit" class="btn btn-outline-success w-100 fw-bold">VIEW LOAN OFFERS</button>
                    </a>
                </div>
            </div> -->

                </div>
                <div class="mt-3 highlights">
                    <h4 class="head"><span class="brand_model" style="color: #B90405"></span> Other Features</h4>
                    <div class="d-flex justify-content-around w-100">
                        <div class="d-flex gap-3 bg-light p-2" style="border-radius: 10px;">
                            <div><img src="assets/images/clutch.png" style="width: 30px;" alt=""></div>
                            <div>
                                <p class="fw-bold text-uppercase">clutch </p>
                                <p id="transmission_clutch_value2"></p>
                            </div>
                        </div>
                        <div class="d-flex gap-3 bg-light p-2" style="border-radius: 10px;">
                            <div><img src="assets/images/steering.png" style="width: 30px;" alt=""></div>
                            <div>
                                <p class="fw-bold text-uppercase">Steering </p>
                                <p id="steering_column_value2"></p>
                            </div>
                        </div>
                        <div class="d-flex gap-3 bg-light p-2" style="border-radius: 10px;">
                            <div><img src="assets/images/wheel-drive.png" style="width: 30px;" alt=""></div>
                            <div>
                                <p class="fw-bold text-uppercase">Wheel Drive </p>
                                <p id="wheel_drive"></p>
                            </div>
                        </div>
                        <div class="d-flex gap-3 bg-light p-2" style="border-radius: 10px;">
                            <div><img src="assets/images/lifting.webp" style="width: 30px;" alt=""></div>
                            <div>
                                <p class="fw-bold text-uppercase">Lifting </p>
                                <p id="liftingC"></p>
                            </div>
                        </div>
                        <div class="d-flex gap-3 bg-light p-2" style="border-radius: 10px;">
                            <div><img src="assets/images/rpm.png" style="width: 30px;" alt=""></div>
                            <div>
                                <p class="fw-bold text-uppercase">Engine Rated RPM </p>
                                <p id="engine_rated_rpm2"></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="container">
        <div class="gridd">
            <div class="left">
                <div class="tabs">
                    <div class="tab active" data-tab="description">About</div>
                    <div class="tab" data-tab="specifications">Specifications</div>
                    <div class="tab" data-tab="faqs">FAQs</div>
                </div>
                <div id="description" class="content active ">
                </div>
                <div id="specifications" class="content ">
                    <div class="about border-success  border-4 text-dark border-start mt-4">
                        <h4 class="text-dark fw-bold text-start ps-2">
                            Engine
                        </h4>
                    </div>
                    <table class="table table-hover table-striped my-4">
                        <tbody>
                            <tr class="row">
                                <td class="col-6 table-data">No. Of Cylinder</td>
                                <td class="col-6 table-data" id="total_cyclinder_value"></td>
                            </tr>
                            <tr class="row">
                                <td class="col-6 table-data">HP Category</td>
                                <td class="col-6 table-data"><span id="hp_category_id"></span> HP</td>
                            </tr>
                            <tr class="row">
                                <td class="col-6 table-data">Capacity CC</td>
                                <td class="col-6 table-data"><span id="engine_capacity_cc"></span> CC</td>
                            </tr>
                            <tr class="row">
                                <td class="col-6 table-data">Engine Rated RPM</td>
                                <td class="col-6 table-data"><span id="engine_rated_rpm"></span> RPM</td>
                            </tr>
                            <tr class="row">
                                <td class="col-6 table-data">Cooling</td>
                                <td class="col-6 table-data" id="cooling_value"></td>
                            </tr>
                            <tr class="row">
                                <td class="col-6 table-data">Air Filter</td>
                                <td class="col-6 table-data" id="air_filter"></td>
                            </tr>
                            <tr class="row">
                                <td class="col-6 table-data">PTO HP</td>
                                <td class="col-6 table-data">
                                    <p><span id="horse_power_2"></span> HP</p>
                                </td>
                            </tr>
                            <tr class="row">
                                <td class="col-6 table-data">Fuel Pump</td>
                                <td class="col-6 table-data"><span id="fuel_value"></span></td>
                            </tr>
                            <tr class="row">
                                <td class="col-6 table-data">Torque</td>
                                <td class="col-6 table-data"><span id="torque"></span> NM</td>
                            </tr>
                        </tbody>
                    </table>

                    <div class="about border-success  border-4 text-dark border-start">
                        <h4 class="text-dark fw-bold text-start ps-2">
                            Transmission</h4>
                    </div>
                    <table class="table table-hover table-striped my-4">
                        <tbody>
                            <tr class="row">
                                <td class="col-6 table-data">Type</td>
                                <td class="col-6 table-data"><span id="transmission_type_value"></span></td>
                            </tr>
                            <tr class="row">
                                <td class="col-6 table-data">Clutch</td>
                                <td class="col-6 table-data"><span id="transmission_clutch_value"></span></td>
                            </tr>
                            <tr class="row">
                                <td class="col-6 table-data">Gear Box</td>
                                <td class="col-6 table-data">
                                    <span id="gear_box_forward_2"></span> Forward +
                                    <span id="gear_box_reverse_2"></span> Reverse
                                </td>
                            </tr>
                            <tr class="row">
                                <td class="col-6 table-data">Forward Speed</td>
                                <td class="col-6 table-data"><span id="transmission_forward"></span> kmph</td>
                            </tr>
                            <tr class="row">
                                <td class="col-6 table-data">Reverse Speed</td>
                                <td class="col-6 table-data"><span id="transmission_reverse"></span> kmph</td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="about border-success  border-4 text-dark border-start">
                        <h4 class="text-dark fw-bold text-start ps-2">
                            Brakes</h4>
                    </div>
                    <table class="table table-hover table-striped my-4">
                        <tbody>
                            <tr class="row">
                                <td class="col-6 table-data">Brakes</td>
                                <td class="col-6 table-data"><span id="brake_value"></span></td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="about border-success  border-4 text-dark border-start">
                        <h3 class="text-dark fw-bold text-start ps-2">
                            Steering</h3>
                    </div>
                    <table class="table table-hover table-striped my-4">
                        <tbody>
                            <tr>
                                <td class="table-data">Type</td>
                                <td class="table-data" id="steering_details_value"> </td>
                            </tr>
                            <tr>
                                <td class="table-data">Steering Column</td>
                                <td class="table-data"><span id="steering_column_value"></span></td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="about border-success  border-4 text-dark border-start">
                        <h4 class="text-dark fw-bold text-start ps-2">
                            Power Take Off</h4>
                    </div>
                    <table class="table table-hover table-striped my-4">
                        <tbody>
                            <tr>
                                <td class="table-data">Type</td>
                                <td class="table-data"><span id="power_take_off_type"></span></td>
                            </tr>
                            <tr>
                                <td class="table-data">RPM</td>
                                <td class="table-data"><span id="power_take_off_type_rpm"></span></td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="about border-success  border-4 text-dark border-start">
                        <h4 class="text-dark fw-bold text-start ps-2">
                            Dimensions And Weight Of Tractor</h4>
                    </div>
                    <table class="table table-hover table-striped my-4">
                        <tbody>
                            <tr>
                                <td class="table-data">Total Weight</td>
                                <td class="table-data"><span id="total_weight"></span> kg</td>
                            </tr>
                            <tr>
                                <td class="table-data">Wheel Base</td>
                                <td class="table-data"><span id="wheel_base"></span> mm</td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="about border-success  border-4 text-dark border-start">
                        <h4 class="text-dark fw-bold text-start ps-2">
                            Hydraulics</h4>
                    </div>
                    <table class="table table-hover table-striped my-4">
                        <tbody>
                            <tr>
                                <td class="table-data">Lifting Capacity</td>
                                <td class="table-data"><span id="lifting_capacity"></span> Kg</td>
                            </tr>
                            <tr>
                                <td class="table-data">3 point Linkage</td>
                                <td class="table-data"> <span id="linkage_point_value"></span></td>
                            </tr>
                        </tbody>
                    </table>


                    <div class="about border-success  border-4 text-dark border-start">
                        <h4 class="text-dark fw-bold text-start ps-2">
                            Wheels And Tyres</h4>
                    </div>
                    <table class="table table-hover table-striped my-4">
                        <tbody>
                            <tr>
                                <td class="table-data">Wheel drive</td>
                                <td class="table-data"><span id="wheel_drive_value"></span></td>
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


                    <div class="about border-success  border-4 text-dark border-start">
                        <h4 class="text-dark fw-bold text-start ps-2">
                            Other Information</h4>
                    </div>
                    <table class="table table-hover table-striped my-4">
                        <tbody>
                            <tr>
                                <td class="table-data">Accessories</td>
                                <td class="table-data"><span id="accessory_id"></span> </td>
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
                <div id="faqs" class="content ">
                    <div class="mt-4 pb-5">
                        <div class="accordion " id="accordionFlushExample">
                            <div class="accordion-item  rounded-3">
                                <h2 class="accordion-header" id="flush-headingOne">
                                    <button class="accordion-button collapsed fw-bold mb-0 h4" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#flush-collapseOne"
                                        aria-expanded="false" aria-controls="flush-collapseOne">
                                        Que. How much HP does the Mahindra 575 DI XP Plus tractor have?
                                    </button>
                                </h2>
                                <div id="flush-collapseOne" class="accordion-collapse collapse"
                                    aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">
                                        <p class="text-dark">Ans. Mahindra 575 DI XP Plus Tractor comes with 47 HP for
                                            long-term
                                            farming tasks.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item rounded-3 my-3">
                                <h2 class="accordion-header" id="flush-headingTwo">
                                    <button class="accordion-button collapsed mb-0  fw-bold h4" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo"
                                        aria-expanded="false" aria-controls="flush-collapseTwo">
                                        Que. What is the price of the Mahindra 575 DI XP Plus tractor?
                                    </button>
                                </h2>
                                <div id="flush-collapseTwo" class="accordion-collapse collapse"
                                    aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">
                                        <p class="text-dark">Ans. Mahindra 575 DI XP Plus price is Rs. 6.90-7.27 Lakh*.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item  rounded-3 my-3">
                                <h2 class="accordion-header" id="flush-headingThree">
                                    <button class="accordion-button collapsed mb-0  fw-bold h4" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#flush-collapseThree"
                                        aria-expanded="false" aria-controls="flush-collapseThree">
                                        Que. Does the Mahindra 575 DI XP Plus tractor consist high fuel mileage?
                                    </button>
                                </h2>
                                <div id="flush-collapseThree" class="accordion-collapse collapse"
                                    aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">
                                        <p class="text-dark">Ans. Yes, Mahindra 575 DI XP Plus tractor has high fuel
                                            mileage.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="right">
                <div class=" table-and-card pt-4">
                    <div class="">
                        <div class="" id="related_brand">
                        </div>
                        <div class="sticky my-3">
                            <div class="popular_used_tractor mb-3">
                                <h4 class="text-center fw-bold mt-3">Similar Tractors</h4>
                            </div>
                            <div class="popular-used-tractor">
                                <div id="productContainerpopular">
                                </div>
                                <div class=" text-center"><button class="btn btn-success" id="loadMoretract">Load
                                        More</button></div>
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
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><img
                            src="assets/images/close.png" class=" w-100"></button>
                </div>
                <div class="modal-body">
                    <form id="otp_form">
                        <div class=" col-12 input-group">
                            <div class="col-12">
                                <label for="Mobile" class=" text-dark float-start pl-2">Enter OTP</label>
                                <input type="text" class="form-control text-dark" placeholder="Enter OTP" id="otp"
                                    name="opt_1">
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
    <div class="modal fade" id="staticBackdrop3" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-md modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title ms-1 brand_model" id="staticBackdropLabel"></h5>
                    <button type="button" data-bs-dismiss="modal" aria-label="Close"><img
                            src="assets/images/close.png" style="filter: brightness(0); width: 20px;"></button>
                </div>
                <!-- MODAL BODY -->
                <div class="modal-body">
                    <form id="inner_brand_form" method="POST" onsubmit="return false">
                        <div class="row gap-2">
                            <div class="col-12 " hidden>
                                <label for="name" class="form-label fw-bold text-dark"><i
                                        class="fa-duotone fa-chart-pie-simple"></i></label>
                                <input type="text" class="form-control" placeholder="Enter Your Name" id="product_id"
                                    value="" name="">
                            </div>
                            <div class="col-12 " hidden>
                                <label for="name" class="form-label fw-bold text-dark"><i
                                        class="fa-duotone fa-chart-pie-simple"></i> Model Name</label>
                                <input type="text" class="form-control" placeholder="Enter Your Name"
                                    id="enquiry_type_id" value="2" name="iduser">
                            </div>
                            <div class="col-12 " hidden>
                                <label for="name" class="form-label fw-bold text-dark"><i
                                        class="fa-duotone fa-chart-pie-simple"></i> Model Name</label>
                                <input type="text" class="form-control" placeholder="Enter Your Name"
                                    id="product_type_id" value="2" name="iduser">
                            </div>
                            <div class="col-12">
                                <input type="text" class="form-control" placeholder="Enter Your Name" id="fullname"
                                    name="fullname">
                            </div>
                            <!-- <div class="col-12 col-sm-6 col-md-6 col-lg-6">
                                <label for="" class="form-label text-dark fw-bold"><i class="fa-regular fa-user"></i>
                                    Last Name</label>
                                <input type="text" class="form-control" placeholder="Enter Number" id="lastName"
                                    name="lastName">
                            </div> -->
                            <div class="col-12">
                                <input type="number" class="form-control" placeholder="Enter Mobile Number" id="mobile_number"
                                    name="mobile_number">
                            </div>
                            <div class="col-12">
                                <div class="form-outline mb-2">
                                    <label for="state" class="form-label text-dark fw-bold">State</label>
                                    <select class="form-select py-2 state-dropdown" aria-label=".form-select-lg example"
                                        id="state" name="state">
                                    </select>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-outline my-2">
                                    <label for="district" class="form-label fw-bold text-dark"> District</label>
                                    <select class="form-select py-2 district-dropdown"
                                        aria-label=".form-select-lg example" id="district" name="district">
                                    </select>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-outline my-2">
                                    <label for="Tehsil" class="form-label fw-bold text-dark"> Tehsil</label>
                                    <select class="form-select py-2 tehsil-dropdown"
                                        aria-label=".form-select-lg example" id="Tehsil" name="Tehsil">
                                    </select>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="submit" id="submit_enquiry" class="btn add_btn w-100 btn_all" style="background-color: #B90405; color: white"
                                    onclick="savedata('${formId}')" data-bs-dismiss="modal">Submit</button>
                            </div>
                    </form>
                    <!-- <form id="inner_brand_form" method="POST" onsubmit="return false">
                        <div class="row">
                            <div class="col-12 col-lg-6 col-md-6 col-sm-6 " hidden>
                                <label for="name" class="form-label fw-bold text-dark"><i
                                        class="fa-duotone fa-chart-pie-simple"></i></label>
                                <input type="text" class="form-control" placeholder="Enter Your Name" id="product_id"
                                    value="" name="">
                            </div>
                            <div class="col-12 col-lg-6 col-md-6 col-sm-6 " hidden>
                                <label for="name" class="form-label fw-bold text-dark"><i
                                        class="fa-duotone fa-chart-pie-simple"></i> Model Name</label>
                                <input type="text" class="form-control" placeholder="Enter Your Name"
                                    id="enquiry_type_id" value="2" name="iduser">
                            </div>
                            <div class="col-12 col-lg-6 col-md-6 col-sm-6 " hidden>
                                <label for="name" class="form-label fw-bold text-dark"><i
                                        class="fa-duotone fa-chart-pie-simple"></i> Model Name</label>
                                <input type="text" class="form-control" placeholder="Enter Your Name"
                                    id="product_type_id" value="2" name="iduser">
                            </div>
                            <div class="col-12 col-sm-6 col-md-6 col-lg-6">
                                <label for="" class="form-label text-dark fw-bold"> <i class="fa-regular fa-user"></i>
                                    First Name</label>
                                <input type="text" class="form-control" placeholder="Enter Number" id="firstName"
                                    name="firstName">
                            </div>
                            <div class="col-12 col-sm-6 col-md-6 col-lg-6">
                                <label for="" class="form-label text-dark fw-bold"><i class="fa-regular fa-user"></i>
                                    Last Name</label>
                                <input type="text" class="form-control" placeholder="Enter Number" id="lastName"
                                    name="lastName">
                            </div>
                            <div class="col-12 col-sm-6 col-md-6 col-lg-6">
                                <label for="number" class="form-label text-dark fw-bold"><i class="fa fa-phone"
                                        aria-hidden="true"></i> Mobile Number</label>
                                <input type="text" class="form-control" placeholder="Enter Number" id="mobile_number"
                                    name="mobile_number">
                            </div>
                            <div class="col-12 col-sm-6 col-md-6 col-lg-6 mt-4">
                                <div class="form-outline">
                                    <label for="state" class="form-label text-dark fw-bold"> <i
                                            class="fas fa-location"></i> State</label>
                                    <select class="form-select py-2 state-dropdown" aria-label=".form-select-lg example"
                                        id="state" name="state">
                                    </select>
                                </div>
                            </div>
                            <div class="col-12 col-sm-6 col-md-6 col-lg-6 mt-4">
                                <div class="form-outline">
                                    <label for="district" class="form-label fw-bold text-dark"><i
                                            class="fa-solid fa-location-dot"></i> District</label>
                                    <select class="form-select py-2 district-dropdown"
                                        aria-label=".form-select-lg example" id="district" name="district">
                                    </select>
                                </div>
                            </div>
                            <div class="col-12 col-sm-6 col-md-6 col-lg-6 mt-4">
                                <div class="form-outline">
                                    <label for="Tehsil" class="form-label fw-bold text-dark"> Tehsil</label>
                                    <select class="form-select py-2 tehsil-dropdown"
                                        aria-label=".form-select-lg example" id="Tehsil" name="Tehsil">
                                    </select>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="submit" id="submit_enquiry" class="btn add_btn btn-success w-100 btn_all"
                                    onclick="savedata('${formId}')" data-bs-dismiss="modal">Submit</button>
                            </div>
                    </form> -->
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
    document.querySelectorAll('.tab').forEach(tab => {
        tab.addEventListener('click', function () {
            document.querySelectorAll('.tab').forEach(t => t.classList.remove('active'));
            document.querySelectorAll('.content').forEach(c => c.classList.remove('active'));

            this.classList.add('active');
            document.getElementById(this.dataset.tab).classList.add('active');
        });
    });
</script>