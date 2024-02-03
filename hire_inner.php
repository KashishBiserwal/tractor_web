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
  <script src="<?php $baseUrl; ?>model/hire_inner.js"></script>
</head>
<body>
<?php
   include 'includes/headertag.php';
   ?>
    <style>
    .form-outline .form-label {
        color: #454444;
        font-weight: 500;
        font-size: 18px;
        margin-bottom: 5px;
        position: absolute;
        margin-top: -12px;
        background: #fff;
        margin-left: 23px;
    }

    label.error {
        color: red !important;
        margin-bottom: 2px;
        font-size: 13px;
    }

    .img_buy_hire {
        height: 400px;
    }

    .post-slide .post-content {
        background: #fff;
        padding: 2px 20px 40px;
        border-radius: 15px;
    }
    </style>
</head>

<body> <?php
   include 'includes/header.php';
   ?>
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <section class="mt-5 pt-5">
        <div class="container pt-4">
            <div class="">
                <span class="mt-5 text-white pt-5 ">
                    <a href="index.php" class="text-decoration-none header-link px-1">Home <i
                            class="fa-solid fa-chevron-right px-1"></i></a><span class="text-dark"><a
                            href="nursery_ui.php" class="text-decoration-none header-link px-1"> Nursery </a></span>
                </span>
            </div>
        </div>
    </section>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-6 col-lg-6 col-md-6 mt-2">
                    <div>
                      <h4 id="model_name"></h4>
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
                <div class="col-12 col-sm-6 col-lg-6 col-md-6">
                    <h5 class="text-black fw-bold text-center "></h5>
                    <div class="power">
                        <div class="row ">
                            <div class="content d-flex flex-column flex-grow-1 mt-2">
                                <div class="power ">
                                    <div class="row mt-4">
                                        <div class="col-6 col-lg-6 col-md-6 col-sm-6 mt-2">
                                            <p class="text-dark "><i class="fa-solid fa-user mx-2"></i>Name</p>
                                        </div>
                                        <div class="col-6 col-lg-6 col-md-6 col-sm-6 mt-2">
                                            <p class="text-dark "id="name_first"></p>
                                        </div>
                                        <div class="col-6 col-lg-6 col-md-6 col-sm-6 mt-2">
                                            <p class="text-dark "><i class="fa-solid fa-location-dot mx-2"></i>Location</p>
                                        </div>
                                        <div class="col-6 col-lg-6 col-md-6 col-sm-6 mt-2">
                                            <p class="text-dark "><span id="set_dist"></span>,<span id="set_state"></span></p>
                                        </div>
                                        <div class="col-6 col-lg-6 col-md-6 col-sm-6 mt-2">
                                            <p class="text-dark "><i class="fas fa-bolt mx-2"></i>Power</p>
                                        </div>
                                        <div class="col-6 col-lg-6 col-md-6 col-sm-6 mt-2">
                                            <p class="text-dark " id="power_hp"></p>
                                        </div>
                                        <div class="col-6 col-lg-6 col-md-6 col-sm-6 mt-2">
                                            <p class="text-dark "><i class="fa-solid fa-gear mx-2"></i>Engine</p>
                                        </div>
                                        <div class="col-6 col-lg-6 col-md-6 col-sm-6 mt-2">
                                            <p id="engine_cc" type="" class="text-dark "></p>
                                        </div>
                                    </div>
                                    <div class="col-10">
                                        <button id="send_enquiry" type="button" class="add_btn  btn-success w-100"data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                                            Send Enquiry</button>
                                    </div>
                                </div>

                                 <!-- Modal -->
                                <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static"
                                    data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel"
                                    aria-hidden="true">
                                    <div class="modal-dialog modal-lg modal-dialog-centered">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title text-dark fw-bold" id="model_name_2"></h4>
                                                    <button type="button" class="btn-close btn-success" data-bs-dismiss="modal" aria-label="Close"><img src="assets/images/close.png"></button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="model-cont">
                                                    <form id="hire_inner" name="hire_inner" method="post">
            
                                                        <div class="row">
                                                            <div class="col-12 col-lg-6 col-md-6 col-sm-6 " hidden>
                                                                <label for="name" class="form-label fw-bold text-dark"> <i class="fa-regular fa-user"></i> enquiryName</label>
                                                                <input type="text" class="form-control" placeholder="Enter Your Name" id="enquiry_type_id" value="19" name="fname">
                                                            </div>
                                                            <div class="col-12 col-lg-6 col-md-6 col-sm-6 " hidden>
                                                                <label for="name" class="form-label fw-bold text-dark"> <i class="fa-regular fa-user"></i> product_id</label>
                                                                <input type="text" class="form-control" id="product_id" value="">
                                                            </div>
                                                            <div class="col-12 col-sm-12 col-md-4 col-lg-4 mt-4">
                                                                <div class="form-outline">
                                                                    <label class="form-label" for="first_name"><i
                                                                            class="fa-regular fa-user"></i> First Name</label>
                                                                    <input type="text" id="first_name" name="first_name" class=" data_search form-control input-group-sm py-2" />
                                                                </div>
                                                            </div>
                                                            <div class="col-12 col-sm-12 col-md-4 col-lg-4 mt-4">
                                                                <div class="form-outline">
                                                                    <label class="form-label" for="last_name"><i class="fa-regular fa-user"></i> Last Name</label>
                                                                    <input type="text" id="last_name" name="last_name"class=" data_search form-control input-group-sm py-2" />
                                                                </div>
                                                            </div>
                                                            <div class="col-12 col-sm-12 col-md-4 col-lg-4 mt-4">
                                                                <div class="form-outline">
                                                                    <label class="form-label" for="mobile_number">Mobile Number</label>
                                                                    <input type="text" id="mobile_number"name="mobile_number" class=" data_search form-control input-group-sm py-2" />
                                                                </div>
                                                            </div>
                                                            <div class="col-12 col-sm-12 col-md-4 col-lg-4 mt-4">
                                                                <div class="form-outline">
                                                                    <label class="form-label" for="state"> <i class="fas fa-location"></i> State</label>
                                                                    <select class="form-select py-2" aria-label="Default select example" id="the_state"name="state">
                                                                    <option value="" selected disabled></option>
                                                                    <option value="Chhattisgarh">Chhattisgarh</option>
                                                                    <option value="Other">Other</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="col-12 col-sm-12 col-md-4 col-lg-4 mt-4">
                                                                <div class="form-outline">
                                                                    <label class="form-label" for="district"><i class="fa-solid fa-location-dot"></i>District</label>
                                                                    <select class="form-select py-2"aria-label="Default select example"name="district" id="the_district">
                                                                    <option value="" selected disabled></option>
                                                                    <option value="Raipur">Raipur</option>
                                                                    <option value="Bilaspur">Bilaspur</option>
                                                                    <option value="Durg">Durg</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="col-12 col-sm-12 col-md-4 col-lg-4 mt-4">
                                                                <div class="form-outline">
                                                                    <label class="form-label"for="tehsil">Tehsil</label>
                                                                    <select class="form-select py-2" aria-label="Default select example"name="tehsil" id="the_tehsil">
                                                                    <option value="" selected disabled></option>
                                                                    <option value="Raipur">Raipur</option>
                                                                    <option value="Bilaspur">Bilaspur</option>
                                                                    <option value="Durg">Durg</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"data-bs-dismiss="modal">Close</button>
                                                <button type="button" class="btn btn-danger"id="button_hire">Request</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- <form action="" id="used_farm_inner_from" class="outline-solid bg-light">
                        <div class="row my-3">
                            <div class="col-12 justify-content-center">
                                <div class="d-flex flex-md-row px-3  flex-column-reverse">
                                    <div class="col-md-12 col-12 col-lg-12 col-lg-12">
                                        <div class=" ml-2">
                                            <div class="row px-3 ">
                                                <div class="col-12 col-lg-6 col-md-6 col-sm-6 ">
                                                    <label for="name" class="form-label fw-bold text-dark"> <i
                                                            class="fa-regular fa-user"></i> First Name</label>
                                                    <input type="text" class="form-control"
                                                        placeholder="Enter Your Name" id="fname" name="fname">
                                                </div>
                                                <div class="col-12 col-lg-6 col-md-6 col-sm-6 ">
                                                    <label for="name" class="form-label fw-bold text-dark"> <i
                                                            class="fa-regular fa-user"></i> Last Name</label>
                                                    <input type="text" class="form-control"
                                                        placeholder="Enter Your Name" id="lname" name="lname">
                                                </div>
                                                <div class="col-12 ">
                                                    <label for="number" class="form-label text-dark fw-bold"> <i
                                                            class="fa fa-phone" aria-hidden="true"></i> Phone
                                                        Number</label>
                                                    <input type="text" class="form-control" placeholder="Enter Number"
                                                        id="number" name="number">
                                                </div>
                                                <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                                                    <label for="yr_state" class="form-label text-dark fw-bold"
                                                        id="state" name="state"> <i class="fas fa-location"></i>
                                                        State</label>
                                                    <select class="form-select py-2"
                                                        aria-label=".form-select-lg example" id="state_form"
                                                        name="state">
                                                        <option value>Select State</option>
                                                        <option value="1">Chhattisgarh</option>
                                                        <option value="2">Other</option>
                                                    </select>
                                                </div>
                                                <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                                                    <label class="form-label text-dark"><i
                                                            class="fa-solid fa-location-dot"></i> District</label>
                                                    <select class="form-select py-2 "
                                                        aria-label=".form-select-lg example" name="district"
                                                        id="district_form">
                                                        <option value>Select District</option>
                                                        <option value="1">Raipur</option>
                                                        <option value="2">Bilaspur</option>
                                                        <option value="2">Durg</option>
                                                    </select>
                                                </div>
                                                <div class="col-12 col-sm-12 col-md-6 col-lg-6 mt-2">
                                                    <label for="yr_tehsil" class="form-label text-dark"> Tehsil</label>
                                                    <input type="yr_tehsil" class="form-control"
                                                        placeholder="Enter Tehsil" id="tehsil" name="tehsil">
                                                </div>
                                                <div class="col-12 col-sm-12 col-md-6 col-lg-6 mt-2">
                                                    <label for="yr_price" class="form-label text-dark">Price</label>
                                                    <input type="yr_price" class="form-control"
                                                        placeholder="Enter Price" id="price" name="price">
                                                </div>
                                                <div class="col-12 col-sm-12 col-md-6 col-lg-6 mt-3">
                                                    <div class="">
                                                        <input type="submit" value="Contact Seller" id="contact_seller"
                                                            class="btn btn-success w-100">
                                                    </div>
                                                </div>
                                                <div class="col-12 col-sm-12 col-md-6 col-lg-6 mt-3">
                                                    <div class="get-loan text-center ">
                                                        <a href="#" class="btn border-success text-success w-100">View
                                                            Loan Offer</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                    </form> -->
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container">
            <div class="row mt-4 pt-3">
                <h4 class=" px-2 fw-bold">Related Implement Types</h4>
                <div class="col-12 col-sm-3 col-md-3 col-lg-3 px-2 py-3 h-100">
                    <div class="h-auto success__stry__item d-flex flex-column shadow ">
                        <div class="thumb">
                            <a href="#">
                                <div class="ratio ratio-16x9">
                                    <img src="assets/images/hydraulic_reversible.webp" class="object-fit-cover "
                                        alt="img">
                                </div>
                            </a>
                        </div>
                        <div class="content d-flex flex-column flex-grow-1 ">
                            <a href="#" class="text-decoration-none text-dark">
                                <h5 class="fw-bold mt-3 mx-2">Hydraulic Reversible</h5>
                            </a>
                            <div class="row">
                                <div class="col-12 col-lg-6 col-md-6 col-sm-6">
                                    <i class="fa-solid fa-indian-rupee-sign mx-2 mb-3"></i>30/Acre
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-3 col-md-3 col-lg-3 px-2 py-3 h-100">
                    <div class="h-auto success__stry__item d-flex flex-column shadow ">
                        <div class="thumb">
                            <a href="#">
                                <div class="ratio ratio-16x9">
                                    <img src="assets/images/happy_seeder.webp" class="object-fit-cover " alt="img">
                                </div>
                            </a>
                        </div>
                        <div class="content d-flex flex-column flex-grow-1 ">

                            <a href="#" class="text-decoration-none text-dark">
                                <h5 class="fw-bold mt-3 mx-2">Happy Seeder</h5>
                            </a>
                            <div class="row">
                                <div class="col-12 col-lg-6 col-md-6 col-sm-6">

                                    <i class="fa-solid fa-indian-rupee-sign mx-2 mb-3"></i>30/Acre
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-3 col-md-3 col-lg-3 px-2 py-3 h-100">
                    <div class="h-auto success__stry__item d-flex flex-column shadow ">
                        <div class="thumb">
                            <a href="#">
                                <div class="ratio ratio-16x9">
                                    <img src="assets/images/seed_drill.webp" class="object-fit-cover " alt="img">
                                </div>
                            </a>
                        </div>
                        <div class="content d-flex flex-column flex-grow-1 ">
                            <a href="#" class="text-decoration-none text-dark">
                                <h5 class="fw-bold mt-3 mx-2">Seed Drill</h5>
                            </a>
                            <div class="row">
                                <div class="col-12 col-lg-6 col-md-6 col-sm-6">

                                    <i class="fa-solid fa-indian-rupee-sign mx-2 mb-3"></i>30/Acre
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-3 col-md-3 col-lg-3 px-2 py-3 h-100">
                    <div class="h-auto success__stry__item d-flex flex-column shadow ">
                        <div class="thumb">
                            <a href="#">
                                <div class="ratio ratio-16x9">
                                    <img src="assets/images/mud-loader.webp" class="object-fit-cover " alt="img">
                                </div>
                            </a>
                        </div>
                        <div class="content d-flex flex-column flex-grow-1 ">
                            <a href="#" class="text-decoration-none text-dark">
                                <h5 class="fw-bold mt-3 mx-2">Mud Loader</h5>
                            </a>
                            <div class="row">
                                <div class="col-12 col-lg-6 col-md-6 col-sm-6">

                                    <i class="fa-solid fa-indian-rupee-sign mx-2 mb-3"></i>30/Acre
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section slider-section">

        <div class="container slider-column">
            <h3 class="assured px-2 fw-bold mt-4">Similar Rent Tractor</h3>
            <div class="carousel-wrap">
                <div class="owl-carousel" id="usedtractorforsell">
                    <div class="item">
                        <div class="post-slide">
                            <div class="post-img">
                                <img src="assets/images/275-di-tu-1632206550.webp" alt="">
                                <a href="#" class="over-layer">
                                    <i class="fa fa-link"></i>
                                </a>
                            </div>
                            <div class="post-content">
                                <h3 class="post-title text-center">
                                    <a href="#" class="text-decoration-none fw-bold">Mahindra 275DI TU</a>
                                </h3>
                                <div class="row">
                                    <div class="col-6 col-lg-6 col-md-6 col-sm-6">
                                        <p class="text-dark"><i class="fa-solid fa-location-dot mx-2"></i>Dhamtari</p>
                                    </div>
                                    <div class="col-6 col-lg-6 col-md-6 col-sm-6">
                                        <p class="text-dark" style="margin-left:32px;"><i
                                                class="fas fa-bolt mx-2"></i>47 HP
                                        </p>
                                    </div>
                                    <div class="col-6 col-lg-6 col-md-6 col-sm-6">
                                        <p id="adduser" type="" class="text-dark">
                                            <i class="fa-solid fa-indian-rupee-sign mx-2"></i>30/Acre
                                        </p>
                                    </div>
                                    <div class="col-6 col-lg-6 col-md-6 col-sm-6">
                                        <p id="adduser" type="" class="text-dark " style="margin-left:29px;">
                                            <i class="fa-solid fa-gear mx-2"></i>2979 CC
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="post-slide">
                            <div class="post-img">
                                <img src="assets/images/275-di-tu-1632206550.webp" alt="">
                                <a href="#" class="over-layer">
                                    <i class="fa fa-link"></i>
                                </a>
                            </div>
                            <div class="post-content">
                                <h3 class="post-title text-center">
                                    <a href="#" class="text-decoration-none fw-bold">Mahindra 275DI TU</a>
                                </h3>
                                <div class="row">
                                    <div class="col-6 col-lg-6 col-md-6 col-sm-6">
                                        <p class="text-dark"><i class="fa-solid fa-location-dot mx-2"></i>Dhamtari</p>
                                    </div>
                                    <div class="col-6 col-lg-6 col-md-6 col-sm-6">
                                        <p class="text-dark" style="margin-left:32px;"><i
                                                class="fas fa-bolt mx-2"></i>47 HP
                                        </p>
                                    </div>
                                    <div class="col-6 col-lg-6 col-md-6 col-sm-6">
                                        <p id="adduser" type="" class="text-dark">
                                            <i class="fa-solid fa-indian-rupee-sign mx-2"></i>30/Acre
                                        </p>
                                    </div>
                                    <div class="col-6 col-lg-6 col-md-6 col-sm-6">
                                        <p id="adduser" type="" class="text-dark " style="margin-left:29px;">
                                            <i class="fa-solid fa-gear mx-2"></i>2979 CC
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="post-slide">
                            <div class="post-img">
                                <img src="assets/images/275-di-tu-1632206550.webp" alt="">
                                <a href="#" class="over-layer">
                                    <i class="fa fa-link"></i>
                                </a>
                            </div>
                            <div class="post-content">
                                <h3 class="post-title text-center">
                                    <a href="#" class="text-decoration-none fw-bold">Mahindra 275DI TU</a>
                                </h3>
                                <div class="row">
                                    <div class="col-6 col-lg-6 col-md-6 col-sm-6">
                                        <p class="text-dark"><i class="fa-solid fa-location-dot mx-2"></i>Dhamtari</p>
                                    </div>
                                    <div class="col-6 col-lg-6 col-md-6 col-sm-6">
                                        <p class="text-dark" style="margin-left:32px;"><i
                                                class="fas fa-bolt mx-2"></i>47 HP
                                        </p>
                                    </div>
                                    <div class="col-6 col-lg-6 col-md-6 col-sm-6">
                                        <p id="adduser" type="" class="text-dark">
                                            <i class="fa-solid fa-indian-rupee-sign mx-2"></i>30/Acre
                                        </p>
                                    </div>
                                    <div class="col-6 col-lg-6 col-md-6 col-sm-6">
                                        <p id="adduser" type="" class="text-dark " style="margin-left:29px;">
                                            <i class="fa-solid fa-gear mx-2"></i>2979 CC
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="col-12 text-center mb-4 pt-2 ">
        <a href="hire.php"><button id="adduser" type="button" class="add_btn btn btn-success">
                <i class="fas fa-undo"></i> Load More tractors</button></a>
    </div>

    <div class="container">
        <h4 class="fw-bold assured px-2">Quick Links</h4>
        <div class="row my-4">
            <div class="col-12 col-lg-4 col-md-4 col-sm-4 py-2">
                <a href="#" id="adduser" class="btn btn-outline-success text-decoration-none border-2 p-2 w-100">
                    <i class="fas fa-bolt"></i>TRACTOR PRICE</a>
            </div>
            <div class="col-12 col-lg-4 col-md-4 col-sm-4 py-2">
                <a href="#" id="adduser" class=" btn btn-outline-success text-decoration-none border-2 py-2 px-3 w-100">
                    <i class="fas fa-bolt"></i>TRACTOR</a>
            </div>
            <div class="col-12 col-lg-4 col-md-4 col-sm-4 py-2">
                <a href="#" id="adduser" class=" btn btn-outline-success text-decoration-none border-2 py-2 px-3 w-100">
                    <i class="fas fa-bolt"></i>HARVESTERS</a>
            </div>
            <div class="col-12 col-lg-4 col-md-4 col-sm-4 py-2">
                <a href="#" id="adduser" class="btn btn-outline-success text-decoration-none  border-2 py-2 px-3 w-100">
                    <i class="fas fa-bolt"></i>SECOND HAND TRACTOR</a>
            </div>
            <div class="col-12 col-lg-4 col-md-4 col-sm-4 py-2">
                <a href="#" id="adduser" class="btn btn-outline-success text-decoration-none border-2 py-2 px-3 w-100">
                    <i class="fas fa-bolt"></i>EASY FINANCE</a>
            </div>
            <div class="col-12 col-lg-4 col-md-4 col-sm-4 py-2">
                <a href="#" id="adduser" class="btn btn-outline-success text-decoration-none border-2 py-2 px-3 w-100">
                    <i class="fas fa-bolt"></i>DEALERSHIP</a>
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
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

</html>