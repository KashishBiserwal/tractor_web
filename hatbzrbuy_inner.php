<!DOCTYPE html>
<html lang="en">

<head>  <?php
// include 'includes/header.php';
include 'includes/headertag.php';
include 'includes/headertagadmin.php';
include 'includes/footertag.php';

?> 
<script> var APIBaseURL = "<?php echo $APIBaseURL; ?>";</script>
<script> var baseUrl = "<?php echo $baseUrl; ?>";</script>
    <script src="<?php $baseUrl; ?>model/haatbazar_inner.js"></script>
</head>

<body> <?php
   include 'includes/header.php';
   ?>
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <section class=" bg-light mt-5 pt-5">
        <div class="container pt-5">
            <div class="py-1">
                <span class="text-white ">
                    <a href="index.php" class="text-decoration-none header-link px-1">Home <i
                            class="fa-solid fa-chevron-right px-1"></i>
                    </a>
                    <span class="">
                        <span class="text-dark header-link  px-1">HaatBazar <i
                                class="fa-solid fa-chevron-right px-1"></i>
                        </span>
                    </span>
                    <span class="text-dark">Sell</span>
                </span>
            </div>
        </div>
    </section>
    <section>
        <div class="container">
            <div class="vegehead">
                <div class="row">
                    <div class="col-12 col-lg-6 ">
                        <h3 class="fw-bold text-danger">Potato in <span id="district_main"></span></h3>
                       
                    </div>
                    <div class="col-12 col-lg-6 ">
                        <h4 class="fw-bold text-danger">Are You Intrested In This Vegetable ?</h4>
                        <h5>Price:- <span id="original_price"></span> /-</h5>
                    </div>
                </div>
            </div>

            <div class="row ">
                <div class="col-12 col-sm-6 col-lg-6 col-md-6">
                <div class="col-12 col-sm-6 col-lg-6 col-md-6" style="position: relative;">
                    <div>
                    <h1 class="fw-bold text-danger pt-3" id="brand_name"></h1>
                    <div class="gallery">   
                        <div class="swiper-container gallery-slider">
                            <div class="swiper-wrapper mySwiper2_data"></div>
                            <div class="swiper-button-prev"></div>
                            <div class="swiper-button-next"></div>
                        </div>

                        <div class="swiper-container gallery-thumbs">
                            <div class="swiper-wrapper mySwiper_data"></div>
                        </div>
                    </div>
                    </div>
                </div>
                </div>
                <div class="col-12 col-sm-6 col-lg-6 col-md-6">
                    <form action="" id="nursery_form" method="post">
                        <div class="row my-3">
                            <div class="col-12 justify-content-center bg-light">
                                <div class="d-flex flex-md-row px-3  flex-column-reverse">
                                    <div class="col-md-12 col-12 col-lg-12 col-lg-12">
                                        <div class=" ml-2">
                                            <div class="row px-3 ">
                                                <div class="col-12 col-lg-6 col-md-6 col-sm-6 " hidden>
                                                    <label for="name" class="form-label fw-bold text-dark"> <i class="fa-regular fa-user"></i> enquiryName</label>
                                                    <input type="text" class="form-control" placeholder="Enter Your Name" id="enquiry_type_id" value="8" name="fname">
                                                </div>
                                                <div class="col-12 col-lg-6 col-md-6 col-sm-6 " hidden>
                                                    <label for="name" class="form-label fw-bold text-dark"> <i class="fa-regular fa-user"></i> product_id</label>
                                                    <input type="text" class="form-control" id="product_id" value="">
                                                </div>
                                                <div class="col-12 col-lg-6 col-md-6 col-sm-6 mt-3">
                                                    <div class="form-outline">
                                                        <label for="fname" class="form-label "><i
                                                                class="fa-regular fa-user"></i> First Name</label>
                                                        <input type="text" class="form-control" id="fname" onkeydown="return /[a-zA-Z]/i.test(event.key)" name="fname">
                                                    </div>
                                                </div>
                                                <div class="col-12 col-lg-6 col-md-6 col-sm-6 mt-3">
                                                    <div class="form-outline">
                                                        <label for="lname" class="form-label "><i
                                                                class="fa-regular fa-user"></i> Last Name</label>
                                                        <input type="text" class="form-control" onkeydown="return /[a-zA-Z]/i.test(event.key)" id="lname" name="lname">
                                                    </div>
                                                </div>
                                                <div class="col-12 col-lg-6 col-md-6 col-sm-6 mt-2">
                                                    <div class="form-outline">
                                                        <label for="phone" class="form-label "><i class="fa fa-phone"aria-hidden="true"></i> Mobile Number</label>
                                                        <input type="text" class="form-control" id="phone" name="phone">
                                                    </div>
                                                </div>

                                                <div class="col-12 col-sm-12 col-md-6 col-lg-6 mt-2">
                                                    <div class="form-outline ">
                                                        <label for="state" class="form-label " id="state" name="state">
                                                            <i class="fas fa-location"></i> State</label>
                                                        <select class="form-select mb-2 "aria-label=".form-select-lg example" id="state"name="state">
                                                            <option value="" selected disabled>Select State</option>
                                                            <option value="Chhattisgarh">Chhattisgarh</option>
                                                            <option value="Other">Other</option>
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="col-12 col-sm-12 col-md-6 col-lg-6 mt-2">
                                                    <div for="district" class="form-outline">
                                                        <label class="form-label "><i
                                                                class="fa-solid fa-location-dot"></i> District</label>
                                                        <select class="form-select mb-2" aria-label=".form-select-lg example" name="district"id="district">
                                                            <option value="" selected disabled>Select District</option>
                                                            <option value="Raipur">Raipur</option>
                                                            <option value="Bilaspur">Bilaspur</option>
                                                            <option value="Durg">Durg</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-sm-12 col-md-6 col-lg-6 mt-2">
                                                    <div class="form-outline">
                                                        <label for="tehsil" class="form-label">Tehsil</label>
                                                        <select class="form-select" aria-label=".form-select-lg example" name="tehsil" id="tehsil">
                                                            <option value="" selected disabled>Select Tehsil</option>
                                                            <option value="Raipur">Raipur</option>
                                                            <option value="Bilaspur">Bilaspur</option>
                                                            <option value="Durg">Durg</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-lg-6 col-md-6 col-sm-6 mt-3">
                                                    <div class="form-outline">
                                                        <label for="price" class="form-label ">Price</label>
                                                        <input type="text" class="form-control" id="price" name="price">
                                                    </div>
                                                </div>

                                                <div class="col-12 col-sm-12 col-md-6 col-lg-12 mt-2">
                                                    <button type="button" class="btn btn-success w-100" data-bs-toggle="modal" data-bs-target="#staticBackdrop"
                                                        id="button_nursery">
                                                        Contact Seller
                                                    </button>
                                                </div>
                                                <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
                                                    aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                                    <div class="modal-dialog modal-lg modal-dialog-centered">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="staticBackdropLabel">Contact
                                                                    Seller</h5>
                                                                    <button type="button" class="btn-close btn-success" data-bs-dismiss="modal" aria-label="Close"><img src="assets/images/close.png"></button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <div class="model-cont">
                                                                    <h4 class="text-center text-danger">Seller Information</h3>
                                                                        <div class="row px-3 py-2">
                                                                            <div
                                                                                class="col-12  col-sm-12 col-md-6 col-lg-6 ">
                                                                                <label for="slr_name"class="form-label fw-bold text-dark"><i class="fa-regular fa-user"></i>
                                                                                    Seller Name</label>
                                                                                <input type="text" class="form-control" id="slr_name">
                                                                            </div>
                                                                            <div
                                                                                class="col-12 col-sm-12 col-md-6 col-lg-6  ">
                                                                                <label for="number"class="form-label text-dark fw-bold"><i class="fa fa-phone"aria-hidden="true"></i>
                                                                                 Phone Number</label>
                                                                                <input type="text" class="form-control" id="number">
                                                                            </div>
                                                                        </div>
                                                                </div>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary"
                                                                    data-bs-dismiss="modal">Close</button>
                                                                <button type="button" class="btn btn-danger">Got
                                                                    It</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="row px-3 mt-4 float-end">
                                    <img class="pic  mr-3 " src="assets/images/vege.png">
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container">
            <h3 class="text-danger assured ps-2">About Item</h3>
            <table class="table w-100 table-hover table table-striped my-4">
                <tbody>
                    <tr>
                        <td class="table-data col-6 col-md-6 col-lg-6 col-sm-6">Category</td>
                        <td class="table-data col-6 col-md-6 col-lg-6 col-sm-6" id="category_name"></td>
                    </tr>
                    <tr>
                        <td class="table-data">Vegetable Type:</td>
                        <td class="table-data"id="sucategory_name"></td>
                    </tr>
                    <tr>
                        <td class="table-data">Quantity:</td>
                        <td class="table-data" id="quantity"></td>
                    </tr>
                    <tr>
                        <td class="table-data">Price (as per kg):</td>
                        <td class="table-data" id="price_as"><span> /- </span></td>
                    </tr>
                    <tr>
                        <td class="table-data">About</td>
                        <td class="table-data" id="description"></td>
                    </tr>


                </tbody>
            </table>
            <h3 class="text-danger assured ps-2">Personal Information</h3>
            <table class="table w-100 table-hover table table-striped my-4">
                <tbody>
                    <tr>
                        <td class="table-data col-6 col-md-6 col-lg-6 col-sm-6">Name</td>
                        <td class="table-data col-6 col-md-6 col-lg-6 col-sm-6" id="first_name"></td>
                    </tr>
                    <tr>
                        <td class="table-data">Phone Number</td>
                        <td class="table-data" id="phone_number"></td>
                    </tr>
                    <tr>
                        <td class="table-data">State</td>
                        <td class="table-data" id="state"></td>
                    </tr>
                    <tr>
                        <td class="table-data">District</td>
                        <td class="table-data" id="district"></td>
                    </tr>
                    <tr>
                        <td class="table-data">Tehsil</td>
                        <td class="table-data" id="tehsil"></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </section>
    <section>
        <div class="container ">
            <h2 class="fw-bold text-dark text-start mt-4 assured ps-3">Similar Product</h3>
                <div class="row">
                    <div class="col-12 col-lg-3 col-md-3 col-sm-3 mb-4">
                        <a href="hatbzrbuy_inner.php"
                            class="h-auto success__stry__item d-flex flex-column text-decoration-none shadow ">
                            <div class="thumb">
                                <div>
                                    <div class="ratio ratio-16x9">
                                        <img src="assets/images/potato.webp" class="object-fit-cover " alt="img">
                                    </div>
                                </div>
                            </div>
                            <div class="content d-flex flex-column flex-grow-1 ">
                                    <div class="power mt-3">
                                        <div class="row ">
                                            <div class="col-6 col-lg-6 col-md-6 col-sm-6">
                                                <p class="text-success ps-2">
                                                    Watermelon</p>
                                            </div>
                                            <div class="col-6 col-lg-6 col-md-6 col-sm-6">
                                                <p id="adduser" type="" class="text-success float-end pe-2">Nadiya Rani
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row ">
                                        <div class="col-6 col-lg-6 col-md-6 col-sm-6">
                                            <p class="ps-2 text-success"> <i class="fa fa-inr" aria-hidden="true"></i>
                                                80.00/Kg</p>
                                        </div>
                                        <div class="col-6 col-lg-6 col-md-6 col-sm-6">
                                            <p class="text-success float-end pe-2">4 Kg</p>
                                        </div>
                                    </div>

                                    <div class="row">

                                        <div class="col-12">
                                            <p class=" text-center" id="district"><span
                                                id="engine_powerhp2"></span>Surajpur,<span
                                                id="year">Chhattisgarh</span></p>
                                        </div>
                                    </div>
                                </div>
                        </a>
                        <div class="col-12 btn-success">
                            <button type="button" class="btn btn-success py-2 w-100" data-bs-toggle="modal"
                                data-bs-target="#staticBackdrop"><i class="fa-solid fa-phone"></i>
                                Contact Seller
                            </button>
                        </div>

                        <!-- Modal -->
                        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false"
                            tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title text-danger" id="staticBackdropLabel">Contact Seller</h5>
                                        <button type="button" class="btn-close btn-success" data-bs-dismiss="modal" aria-label="Close"><img src="assets/images/close.png"></button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="model-cont">
                                            <h4 class="text-center text-danger">Contact with Seller</h3>
                                                <div class="row px-3 py-2">
                                                    <div class="col-12  col-sm-12 col-md-6 col-lg-6 ">
                                                        <label for="slr_name" class="form-label fw-bold text-dark"> <i
                                                                class="fa-regular fa-user"></i>Name</label>
                                                        <input type="text" class="form-control" id="slr_name">
                                                    </div>
                                                    <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                                                        <label for="number" class="form-label text-dark fw-bold"> <i
                                                                class="fa fa-phone" aria-hidden="true"></i> Phone Number</label>
                                                        <input type="text" class="form-control" id="number">
                                                    </div>
                                                    <div class="col-12 col-sm-12 col-md-6 col-lg-6  ">
                                                        <label for="number" class="form-label text-dark fw-bold">
                                                            State</label>
                                                        <select class="form-select py-2 "
                                                            aria-label=".form-select-lg example">
                                                            <option selected>Select State</option>
                                                            <option value="1">Chhattisgarh</option>
                                                            <option value="2">Other</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-12 col-sm-12 col-md-6 col-lg-6  ">
                                                        <label for="number" class="form-label text-dark fw-bold">
                                                            District</label>
                                                        <select class="form-select py-2 "
                                                            aria-label=".form-select-lg example">
                                                            <option selected>Select District</option>
                                                            <option value="1">Mungeli</option>
                                                            <option value="2">Durg</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-12  col-sm-12 col-md-6 col-lg-6 ">
                                                        <label for="slr_name" class="form-label fw-bold text-dark mt-2">
                                                            Price</label>
                                                        <input type="text" class="form-control"
                                                            placeholder="Enter price" id="price">
                                                    </div>
                                                    <div class="col-12  col-sm-12 col-md-6 col-lg-6 mt-4 pt-3">
                                                        <button type="button"
                                                            class="btn btn-success px-3">Request</button>
                                                    </div>
                                                </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer py-4">
                                        <!-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-3 col-md-3 col-sm-3 mb-4">
                        <a href="#" class="h-auto success__stry__item d-flex flex-column text-decoration-none shadow ">
                            <div class="thumb">
                                <div>
                                    <div class="ratio ratio-16x9">
                                        <img src="assets/images/rice.webp" class="object-fit-cover " alt="img">
                                    </div>
                                </div>
                            </div>
                            <div class="content d-flex flex-column flex-grow-1 ">
                                    <div class="power mt-3">
                                        <div class="row ">
                                            <div class="col-6 col-lg-6 col-md-6 col-sm-6">
                                                <p class="text-success ps-2">
                                                    Watermelon</p>
                                            </div>
                                            <div class="col-6 col-lg-6 col-md-6 col-sm-6">
                                                <p id="adduser" type="" class="text-success float-end pe-2">Nadiya Rani
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row ">
                                        <div class="col-6 col-lg-6 col-md-6 col-sm-6">
                                            <p class="ps-2 text-success"> <i class="fa fa-inr" aria-hidden="true"></i>
                                                80.00/Kg</p>
                                        </div>
                                        <div class="col-6 col-lg-6 col-md-6 col-sm-6">
                                            <p class="text-success float-end pe-2">4 Kg</p>
                                        </div>
                                    </div>

                                    <div class="row">

                                        <div class="col-12">
                                            <p class=" text-center" id="district"><span
                                                    id="engine_powerhp2"></span>Surajpur,<span
                                                    id="year">Chhattisgarh</span></p>
                                        </div>
                                    </div>
                                </div>
                            <!-- <div class="content d-flex flex-column flex-grow-1 ">
                                <div class="power text-center mt-3">
                                    <div class="row ">
                                        <div class="col-12 col-lg-6 col-md-6 col-sm-6">
                                            <p class="text-success ps-2"> <i class="fa-solid fa-bowl-food"></i> Grain
                                            </p>
                                        </div>
                                        <div class="col-12 col-lg-6 col-md-6 col-sm-6" style="padding-right: 32px;">
                                            <p id="adduser" type="" class="text-danger fw-bold"> Rice</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="row text-center">
                                    <div class="col-6">
                                        <p class="ps-2"> <i class="fa fa-inr" aria-hidden="true"></i> Price: <strong
                                                class="text-primary">380</strong></p>
                                    </div>
                                    <div class="col-6 text-center">
                                        <p class="fw-bold pe-3">Ambikapur(C.G)</p>
                                    </div>
                                </div>
                            </div> -->
                        </a>
                        <div class="col-12 btn-success">
                            <button type="button" class="btn btn-success py-2 w-100" data-bs-toggle="modal"
                                data-bs-target="#staticBackdrop"><i class="fa-solid fa-phone"></i>
                                Contact Seller
                            </button>
                        </div>

                        <!-- Modal -->
                        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false"
                            tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title text-danger" id="staticBackdropLabel">Contact Seller</h5>
                                        <button type="button" class="btn-close btn-success" data-bs-dismiss="modal" aria-label="Close"><img src="assets/images/close.png"></button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="model-cont">
                                            <h4 class="text-center text-danger">Contact with Seller</h3>
                                                <div class="row px-3 py-2">
                                                    <div class="col-12  col-sm-12 col-md-6 col-lg-6 ">
                                                        <label for="slr_name" class="form-label fw-bold text-dark"> <i
                                                                class="fa-regular fa-user"></i>Name</label>
                                                        <input type="text" class="form-control" id="slr_name">
                                                    </div>
                                                    <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                                                        <label for="number" class="form-label text-dark fw-bold"> <i
                                                                class="fa fa-phone" aria-hidden="true"></i> Phone
                                                            Number</label>
                                                        <input type="text" class="form-control" id="number">
                                                    </div>
                                                    <div class="col-12 col-sm-12 col-md-6 col-lg-6  ">
                                                        <label for="number" class="form-label text-dark fw-bold">
                                                            State</label>
                                                        <select class="form-select py-2 "
                                                            aria-label=".form-select-lg example">
                                                            <option selected>Select State</option>
                                                            <option value="1">Chhattisgarh</option>
                                                            <option value="2">Other</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-12 col-sm-12 col-md-6 col-lg-6  ">
                                                        <label for="number" class="form-label text-dark fw-bold">
                                                            District</label>
                                                        <select class="form-select py-2 "
                                                            aria-label=".form-select-lg example">
                                                            <option selected>Select District</option>
                                                            <option value="1">Mungeli</option>
                                                            <option value="2">Durg</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-12  col-sm-12 col-md-6 col-lg-6 ">
                                                        <label for="slr_name" class="form-label fw-bold text-dark mt-2">
                                                            Price</label>
                                                        <input type="text" class="form-control"
                                                            placeholder="Enter price" id="price">
                                                    </div>
                                                    <div class="col-12  col-sm-12 col-md-6 col-lg-6 mt-4 pt-3">
                                                        <button type="button"
                                                            class="btn btn-success px-3">Request</button>
                                                    </div>
                                                </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer py-4">
                                        <!-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-3 col-md-3 col-sm-3 mb-4">
                        <a href="#" class="h-auto success__stry__item text-decoration-none d-flex flex-column shadow ">
                            <div class="thumb">
                                <div>
                                    <div class="ratio ratio-16x9">
                                        <img src="assets/images/growing-watermelons.jpg" class="object-fit-cover "
                                            alt="img">
                                    </div>
                                </div>
                            </div>
                            <div class="content d-flex flex-column flex-grow-1 ">
                                    <div class="power mt-3">
                                        <div class="row ">
                                            <div class="col-6 col-lg-6 col-md-6 col-sm-6">
                                                <p class="text-success ps-2">
                                                    Watermelon</p>
                                            </div>
                                            <div class="col-6 col-lg-6 col-md-6 col-sm-6">
                                                <p id="adduser" type="" class="text-success float-end pe-2">Nadiya Rani
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row ">
                                        <div class="col-6 col-lg-6 col-md-6 col-sm-6">
                                            <p class="ps-2 text-success"> <i class="fa fa-inr" aria-hidden="true"></i>
                                                80.00/Kg</p>
                                        </div>
                                        <div class="col-6 col-lg-6 col-md-6 col-sm-6">
                                            <p class="text-success float-end pe-2">4 Kg</p>
                                        </div>
                                    </div>

                                    <div class="row">

                                        <div class="col-12">
                                            <p class=" text-center" id="district"><span
                                                    id="engine_powerhp2"></span>Surajpur,<span
                                                    id="year">Chhattisgarh</span></p>
                                        </div>
                                    </div>
                                </div>
                            <!-- <div class="content d-flex flex-column flex-grow-1 ">
                                <div class="power text-center mt-3">
                                    <div class="row ">
                                        <div class="col-12 col-lg-6 col-md-6 col-sm-6">
                                            <p class="text-success ps-2"> <i class="fa-solid fa-bowl-food"></i> Fruit
                                            </p>
                                        </div>
                                        <div class="col-12 col-lg-6 col-md-6 col-sm-6" style="padding-right: 32px;">
                                            <p id="adduser" type="" class="text-danger fw-bold"> Watermelon</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="row text-center">
                                    <div class="col-6">
                                        <p class="ps-2"> <i class="fa fa-inr" aria-hidden="true"></i> Price: <strong
                                                class="text-primary">80</strong></p>
                                    </div>
                                    <div class="col-6 text-center">
                                        <p class="fw-bold pe-3">Surajpur(C.G)</p>
                                    </div>
                                </div>
                            </div> -->
                        </a>
                        <div class="col-12 btn-success">
                            <button type="button" class="btn btn-success py-2 w-100" data-bs-toggle="modal"
                                data-bs-target="#staticBackdrop2"><i class="fa-solid fa-phone"></i>
                                Contact Seller
                            </button>
                        </div>

                        <!-- Modal -->
                        <div class="modal fade" id="staticBackdrop2" data-bs-backdrop="static" data-bs-keyboard="false"
                            tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title text-danger" id="staticBackdropLabel">Contact Seller</h5>
                                        <button type="button" class="btn-close btn-success" data-bs-dismiss="modal" aria-label="Close"><img src="assets/images/close.png"></button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="model-cont">
                                            <h4 class="text-center text-danger">Contact with Seller</h3>
                                                <div class="row px-3 py-2">
                                                    <div class="col-12  col-sm-12 col-md-6 col-lg-6 ">
                                                        <label for="slr_name" class="form-label fw-bold text-dark"> <i
                                                                class="fa-regular fa-user"></i>Name</label>
                                                        <input type="text" class="form-control" id="slr_name">
                                                    </div>
                                                    <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                                                        <label for="number" class="form-label text-dark fw-bold"> <i
                                                                class="fa fa-phone" aria-hidden="true"></i> Phone
                                                            Number</label>
                                                        <input type="text" class="form-control" id="number">
                                                    </div>
                                                    <div class="col-12 col-sm-12 col-md-6 col-lg-6  ">
                                                        <label for="number" class="form-label text-dark fw-bold">
                                                            State</label>
                                                        <select class="form-select py-2 "
                                                            aria-label=".form-select-lg example">
                                                            <option selected>Select State</option>
                                                            <option value="1">Chhattisgarh</option>
                                                            <option value="2">Other</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-12 col-sm-12 col-md-6 col-lg-6  ">
                                                        <label for="number" class="form-label text-dark fw-bold">
                                                            District</label>
                                                        <select class="form-select py-2 "
                                                            aria-label=".form-select-lg example">
                                                            <option selected>Select District</option>
                                                            <option value="1">Mungeli</option>
                                                            <option value="2">Durg</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-12  col-sm-12 col-md-6 col-lg-6 ">
                                                        <label for="slr_name" class="form-label fw-bold text-dark mt-2">
                                                            Price</label>
                                                        <input type="text" class="form-control"
                                                            placeholder="Enter price" id="price">
                                                    </div>
                                                    <div class="col-12  col-sm-12 col-md-6 col-lg-6 mt-4 pt-3">
                                                        <button type="button"
                                                            class="btn btn-success px-3">Request</button>
                                                    </div>
                                                </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer py-4">
                                        <!-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-3 col-md-3 col-sm-3 mb-4">
                        <a href="#" class="h-auto success__stry__item d-flex text-decoration-none flex-column shadow ">
                            <div class="thumb">
                                <div>
                                    <div class="ratio ratio-16x9">
                                        <img src="assets/images/pulses.jpg" class="object-fit-cover " alt="img">
                                    </div>
                                </div>
                            </div>
                            <div class="content d-flex flex-column flex-grow-1 ">
                                    <div class="power mt-3">
                                        <div class="row ">
                                            <div class="col-6 col-lg-6 col-md-6 col-sm-6">
                                                <p class="text-success ps-2">
                                                    Watermelon</p>
                                            </div>
                                            <div class="col-6 col-lg-6 col-md-6 col-sm-6">
                                                <p id="adduser" type="" class="text-success float-end pe-2">Nadiya Rani
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row ">
                                        <div class="col-6 col-lg-6 col-md-6 col-sm-6">
                                            <p class="ps-2 text-success"> <i class="fa fa-inr" aria-hidden="true"></i>
                                                80.00/Kg</p>
                                        </div>
                                        <div class="col-6 col-lg-6 col-md-6 col-sm-6">
                                            <p class="text-success float-end pe-2">4 Kg</p>
                                        </div>
                                    </div>

                                    <div class="row">

                                        <div class="col-12">
                                            <p class=" text-center" id="district"><span
                                                    id="engine_powerhp2"></span>Surajpur,<span
                                                    id="year">Chhattisgarh</span></p>
                                        </div>
                                    </div>
                                </div>
                        </a>
                        <div class="col-12 btn-success">
                            <button type="button" class="btn btn-success py-2 w-100" data-bs-toggle="modal"
                                data-bs-target="#staticBackdrop2"><i class="fa-solid fa-phone"></i>
                                Contact Seller
                            </button>
                        </div>

                        <!-- Modal -->
                        <div class="modal fade" id="staticBackdrop2" data-bs-backdrop="static" data-bs-keyboard="false"
                            tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title text-danger" id="staticBackdropLabel">Contact Seller</h5>
                                        <button type="button" class="btn-close btn-success" data-bs-dismiss="modal" aria-label="Close"><img src="assets/images/close.png"></button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="model-cont">
                                            <h4 class="text-center text-danger">Contact with Seller</h3>
                                                <div class="row px-3 py-2">
                                                    <div class="col-12  col-sm-12 col-md-6 col-lg-6 ">
                                                        <label for="slr_name" class="form-label fw-bold text-dark"> <i
                                                                class="fa-regular fa-user"></i>Name</label>
                                                        <input type="text" class="form-control" id="slr_name">
                                                    </div>
                                                    <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                                                        <label for="number" class="form-label text-dark fw-bold"> <i
                                                                class="fa fa-phone" aria-hidden="true"></i> Phone
                                                            Number</label>
                                                        <input type="text" class="form-control" id="number">
                                                    </div>
                                                    <div class="col-12 col-sm-12 col-md-6 col-lg-6  ">
                                                        <label for="number" class="form-label text-dark fw-bold">
                                                            State</label>
                                                        <select class="form-select py-2 "
                                                            aria-label=".form-select-lg example">
                                                            <option selected>Select State</option>
                                                            <option value="1">Chhattisgarh</option>
                                                            <option value="2">Other</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-12 col-sm-12 col-md-6 col-lg-6  ">
                                                        <label for="number" class="form-label text-dark fw-bold">
                                                            District</label>
                                                        <select class="form-select py-2 "
                                                            aria-label=".form-select-lg example">
                                                            <option selected>Select District</option>
                                                            <option value="1">Mungeli</option>
                                                            <option value="2">Durg</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-12  col-sm-12 col-md-6 col-lg-6 ">
                                                        <label for="slr_name" class="form-label fw-bold text-dark mt-2">
                                                            Price</label>
                                                        <input type="text" class="form-control"
                                                            placeholder="Enter price" id="price">
                                                    </div>
                                                    <div class="col-12  col-sm-12 col-md-6 col-lg-6 mt-4 pt-3">
                                                        <button type="button"
                                                            class="btn btn-success px-3">Request</button>
                                                    </div>
                                                </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer py-4">
                                        <!-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
        <div class="col text-center my-3 pb-5">
            <a href="hatbazar_buy.php" class="btn btn-success btn-lg">View All</a>
        </div>
    </section>

    <?php
    include 'includes/footer.php';
    include 'includes/footertag.php';
    ?>

    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script>
    $(document).ready(function() {
        $.validator.addMethod("indianMobile", function(value, element) {
            return this.optional(element) || /^[789]\d{9}$/.test(value);
        }, "Please enter a valid Indian mobile number.");

        $("#nursery_form").validate({
            rules: {
                fname: {
                    required: true,
                    minlength: 2,
                },

                lname: {
                    required: true,
                    minlength: 2,
                },
                phone: {
                    required: true,
                    digits: true, // Allow only digits
                    indianMobile: true,


                },
                state: "required",
                district: "required",
                price: "required",

            },




        });


        $('#button_nursery').on('click', function() {
            $('#nursery_form').valid();
        });




    });
    </script>

</html>