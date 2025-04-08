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
    <script src="<?php $baseUrl; ?>model/used_tractor_inner_new.js" defer></script>
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
                    </a>

                </span>
            </div>
        </div>
    </section>
    <section id="Mahindra_575" class="mb-5">
        <div class="container pt-4">
            <div class="row">
                <div class="col-7">
                    <div>
                        <div id="tractor-images" class="d-flex gap-5">
                            <div id="left-bar"></div>
                            <div>
                                <img src="" id="main-image" alt="" class="mainImage">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-5">
                    <h5 class="my-2 mb-3">₹ <span id="price_main"></span> /-</h5>
                    <!-- <h5 class="text-black fw-bold text-center">Are Youc Interested in this Tractor?</h5> -->
                    <form id="used_farm_inner_from" method="POST" onsubmit="return false">
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
                                <button type="submit" id="contact_seller" class="btn add_btn w-100 btn_all" style="background-color: #B90405; color: white"
                            data-bs-dismiss="modal">Submit</button>
                            </div>
                            <a href="new_tractor_loan.php">
                            <div class="modal-footer">
                                <button type="button" id="get_loan" class="btn add_btn w-100 btn_all" style="background-color: green; color: white">Get Loan</button>
                            </div>
                            </a>
                    </form>
                </div>

                
            </div>
        </div>
        <div class="mt-3 highlights">
                    <h4 class="head"><span class="brand_model" style="color: #B90405"></span> Other Features</h4>
                    <div class="d-flex justify-content-around w-100">
                        <div class="d-flex gap-3 bg-light p-2" style="border-radius: 10px;">
                            <div>
                                <img src="assets/images/engine.png" style="width: 30px;" alt="Engine">
                            </div>
                            <div>
                                <p class="fw-bold text-uppercase">Engine Power</p>
                                <p class="engine_name"><span id="engine_powerhp"></span> HP</p>
                            </div>
                        </div>
                        <div class="d-flex gap-3 bg-light p-2" style="border-radius: 10px;">
                            <div>
                                <img src="assets/images/total-hours.png" style="width: 30px;" alt="Engine">
                            </div>
                            <div>
                                <p class="fw-bold text-uppercase">Total Hours</p>
                                <p class="total_time"><span id="hours_driven"></span> Hours</p>
                            </div>
                        </div>
                        <div class="d-flex gap-3 bg-light p-2" style="border-radius: 10px;">
                            <div>
                                <img src="assets/images/tyre-condition.png" style="width: 30px;" alt="Engine">
                            </div>
                            <div>
                                <p class="fw-bold text-uppercase">Tyre Condition</p>
                                <p class="total_time"><span id="tyre_condition"></span></p>
                            </div>
                        </div>
                        <div class="d-flex gap-3 bg-light p-2" style="border-radius: 10px;">
                            <div>
                                <img src="assets/images/engine-condition.png" style="width: 30px;" alt="Engine">
                            </div>
                            <div>
                                <p class="fw-bold text-uppercase">Engine Condition</p>
                                <p class="engine_name"><span id="engine_condition"></span></p>
                            </div>
                        </div>
                        <div class="d-flex gap-3 bg-light p-2" style="border-radius: 10px;">
                            <div>
                                <img src="assets/images/financier.png" style="width: 30px;" alt="Engine">
                            </div>
                            <div>
                                <p class="fw-bold text-uppercase">Financier/NOC</p>
                                <p class="engine_name"><span id="noc"></span></p>
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
                    <table class="table table-hover table-striped my-4">
                        <tbody>
                            <tr class="row">
                                <td class="col-6 table-data">Purchase Year</td>
                                <td class="col-6 table-data" id="purchase_year"></td>
                            </tr>
                            <tr class="row">
                                <td class="col-6 table-data">Vehicle Registered Number</td>
                                <td class="col-6 table-data" id="vehicle_registered_num"></td>
                            </tr>
                            <tr class="row">
                                <td class="col-6 table-data">Model</td>
                                <td class="col-6 table-data" id="model"></td>
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
                    <button type="button" data-bs-dismiss="modal" aria-label="Close"><img src="assets/images/close.png"
                            style="filter: brightness(0); width: 20px;"></button>
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
                                <input type="number" class="form-control" placeholder="Enter Mobile Number"
                                    id="mobile_number" name="mobile_number">
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
                                <button type="submit" id="submit_enquiry" class="btn add_btn w-100 btn_all"
                                    style="background-color: #B90405; color: white" onclick="savedata('${formId}')"
                                    data-bs-dismiss="modal">Submit</button>
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