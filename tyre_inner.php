<!DOCTYPE html>
<html lang="en">

<head> <?php
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

    .error {
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
    <section class="mt-0 pt-0">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-6 col-lg-6 col-md-6">
                    <!-- Swiper -->
                    <div class="swiper swiper_buy mySwiper2_buy pt-3 ">
                        <div class="swiper-wrapper swiper-wrapper_buy">
                            <div class="swiper-slide swiper-slide_buy">
                                <img class="img_buy_hire w-100" src="assets/images/birla_tyre.jpg" />
                            </div>
                        </div>
                    </div>
                    <div thumbsSlider="" class="swiper mySwiper_buy"></div>
                </div>
                <div class="col-12 col-sm-4 col-lg-4 col-md-4">
                    <h3 class="text-dark fw-bold">MRF SHAKTI LIFE 13.6 - 28</h3>
                    <div class="row my-3">
                        <div class="col-12 justify-content-center">
                            <div class="d-flex flex-md-row px-3  flex-column-reverse">
                                <div class="power">
                                    <div class="row ">
                                        <div class="content d-flex flex-column flex-grow-1 ">
                                            <div class="power">
                                                <div class="row ">
                                                    <div class="col-12 col-lg-12 col-md-12 col-sm-12">
                                                        <p class="text-dark fw-bold">Tyre	: Rear
                                                        </p>
                                                    </div>
                                                    <div class="col-12 col-lg-12 col-md-12 col-sm-12">
                                                        <p class="text-dark fw-bold">Type	: TT
                                                        </p>
                                                    </div>
                                                    <div class="col-12 col-lg-12 col-md-12 col-sm-12">
                                                        <p class="text-dark fw-bold">Size	: 13.6 - 28</p>
                                                    </div>

                                                   
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <button id="adduser" type="button" class="add_btn  btn-success w-100"
                                                    data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                                                    Send Enquiry</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Button trigger modal -->

                                <!-- Modal -->
                                <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static"
                                    data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel"
                                    aria-hidden="true">
                                    <div class="modal-dialog modal-lg modal-dialog-centered">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title text-dark fw-bold" id="staticBackdropLabel">
                                                Fill the form to Get Tyre Price MRF SHAKTI LIFE 13.6 - 28</h4>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="model-cont">
                                                    <form id="hire_inner" name="hire_inner" method="post">
                                                        <div class="row">
                                                            <div class="col-12 col-sm-12 col-md-4 col-lg-4 mt-4">
                                                                <div class="form-outline">
                                                                    <label class="form-label" for="first_name">First
                                                                        Name</label>
                                                                    <input type="text" id="first_name" name="first_name"
                                                                        class=" data_search form-control input-group-sm py-2" />
                                                                </div>
                                                            </div>
                                                            <div class="col-12 col-sm-12 col-md-4 col-lg-4 mt-4">
                                                                <div class="form-outline">
                                                                    <label class="form-label" for="last_name">Last
                                                                        Name</label>
                                                                    <input type="text" id="last_name" name="last_name"
                                                                        class=" data_search form-control input-group-sm py-2" />
                                                                </div>
                                                            </div>
                                                            <div class="col-12 col-sm-12 col-md-4 col-lg-4 mt-4">
                                                                <div class="form-outline">
                                                                    <label class="form-label" for="mobile_number">Mobile
                                                                        Number</label>
                                                                    <input type="text" id="mobile_number"
                                                                        name="mobile_number"
                                                                        class=" data_search form-control input-group-sm py-2" />
                                                                </div>
                                                            </div>
                                                            <div class="col-12 col-sm-12 col-md-4 col-lg-4 mt-4">
                                                                <div class="form-outline">
                                                                    <label class="form-label" for="state">State</label>
                                                                    <select class="form-select py-2"
                                                                        aria-label="Default select example" id="state"
                                                                        name="state">
                                                                        <option selected></option>
                                                                        <option value="1">New Tractor Loan</option>
                                                                        <option value="2">Used Tractor Loan,
                                                                        </option>
                                                                        <option value="3">Loan Against Tractor
                                                                        </option>
                                                                        <option value="4">Harvester Loan</option>
                                                                        <option value="5">Used Harvester Loan
                                                                        </option>
                                                                        <option value="6">Implement Loan</option>
                                                                        <option value="7">Personal Loan</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="col-12 col-sm-12 col-md-4 col-lg-4 mt-4">
                                                                <div class="form-outline">
                                                                    <label class="form-label"
                                                                        for="district">District</label>
                                                                    <select class="form-select py-2"
                                                                        aria-label="Default select example"
                                                                        name="district" id="district">
                                                                        <option selected></option>
                                                                        <option value="1">name1</option>
                                                                        <option value="2">name2</option>
                                                                        <option value="3">name3</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="col-12 col-sm-12 col-md-4 col-lg-4 mt-4">
                                                                <div class="form-outline">
                                                                    <label class="form-label"
                                                                        for="tehsil">Tehsil</label>
                                                                    <select class="form-select py-2"
                                                                        aria-label="Default select example"
                                                                        name="tehsil" id="tehsil">
                                                                        <option selected></option>
                                                                        <option value="1">name1</option>
                                                                        <option value="2">name2</option>
                                                                        <option value="3">name3</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-bs-dismiss="modal">Close</button>
                                                <button type="button" class="btn btn-danger"
                                                    id="button_hire">Request</button>
                                            </div>
                                        </div>
                                    </div>
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
    <div class="col-12 text-center mb-4 pt-2 ">
        <a href="tyre.php"><button id="adduser" type="button" class="add_btn btn btn-success">
                <i class="fas fa-undo"></i> Load More Tyres</button></a>
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
        $("#hire_inner").validate({
            rules: {
                first_name: 'required',

                last_name: 'required',
                mobile_number: {
                    required: true,
                    digits: true, // Allow only digits
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