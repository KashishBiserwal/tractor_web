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
            <!-- <div class="vegehead">
                <div class="row">
                    <div class="col-12 col-lg-6 ">
                        <h1 class="fw-bold text-danger mt-3">Merigold in District Name</h1>
                    </div>
                    <div class="col-12 col-lg-6 text-center">
                        <p class="text-success h5 fw-bold"> Total Price:- <i class="fa fa-inr" aria-hidden="true"></i>
                            222</p>
                    </div>
                </div>
            </div> -->
            <div class="row">
                <div class="col-12 col-sm-6 col-lg-6 col-md-6">
                    <!-- Swiper -->
                    <div class="swiper swiper_buy mySwiper2_buy pt-3 ">
                        <div class="swiper-wrapper swiper-wrapper_buy">
                            <div class="swiper-slide swiper-slide_buy">
                                <img class="img_buy " src="assets/images/575-di-xp-plus-1632207330.webp" />
                            </div>
                            <!-- <div class=" swiper-slide swiper-slide_buy">
                                <img class="img_buy " src="assets/images/meri4.webp" />
                            </div>
                            <div class="swiper-slide swiper-slide_buy">
                                <img class="img_buy " src="assets/images/orange_merigold_plant_african.jpg" />
                            </div>
                            <div class="swiper-slide swiper-slide_buy">
                                <img class="img_buy"
                                    src="assets/images/Nature-Rabbit-African-marigold-Orange-Plant.jpg" />
                            </div> -->
                        </div>
                    </div>
                    <div thumbsSlider="" class="swiper mySwiper_buy"></div>
                </div>
                <div class="col-12 col-sm-4 col-lg-4 col-md-4">
                    <h2 class="text-dark fw-bold"> Massey Ferguson 245 DI</h2>
                    <form action="">
                        <div class="row my-3">
                            <div class="col-12 justify-content-center">
                                <div class="d-flex flex-md-row px-3  flex-column-reverse">
                                    <div class="power">
                                        <div class="row ">
                                            <div class="content d-flex flex-column flex-grow-1 ">
                                                <div class="power">
                                                    <div class="row ">
                                                        <div class="col-12 col-lg-12 col-md-12 col-sm-12">
                                                            <p class="text-dark fw-bold"><i
                                                                    class="fa-solid fa-location-dot mx-2"></i>Dhamtari
                                                            </p>
                                                        </div>
                                                        <div class="col-12 col-lg-12 col-md-12 col-sm-12">
                                                            <p class="text-dark fw-bold"><i
                                                                    class="fas fa-bolt mx-2"></i>47 HP</p>
                                                        </div>
                                                        <div class="col-12 col-lg-12 col-md-12 col-sm-12">
                                                            <p id="adduser" type="" class="text-dark fw-bold">
                                                                <i class="fa-solid fa-indian-rupee-sign mx-2"></i>30 per
                                                                Acre/hr
                                                            </p>
                                                        </div>

                                                        <div class="col-12 col-lg-12 col-md-12 col-sm-12">
                                                            <p id="adduser" type="" class="text-dark fw-bold">
                                                                <i class="fa-solid fa-gear mx-2"></i>2979 CC
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <button id="adduser" type="button"
                                                        class="add_btn  btn-success w-100" data-bs-toggle="modal"
                                                        data-bs-target="#staticBackdrop">
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
                                                        Send
                                                        Rental Enquiry Mahindra 575 DI XP Plus</h4>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="model-cont">
                                                        <!-- <h4 class="text-center text-danger">Request to Call</h3> -->
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
                                                                    <label class="form-label" for="email">Email
                                                                        Id</label>
                                                                    <input type="text" id="email" name="email"
                                                                        class=" data_search form-control input-group-sm py-2" />
                                                                </div>
                                                            </div>
                                                            <div class="col-12 col-sm-12 col-md-4 col-lg-4 mt-4">
                                                                <div class="form-outline">
                                                                    <label class="form-label" for="state">State</label>
                                                                    <select class="form-select py-2"
                                                                        aria-label="Default select example" id="state"
                                                                        name="state">
                                                                        <option value="#"></option>
                                                                        <option value="1">New Tractor Loan</option>
                                                                        <option value="2">Used Tractor Loan,</option>
                                                                        <option value="3">Loan Against Tractor</option>
                                                                        <option value="4">Harvester Loan</option>
                                                                        <option value="5">Used Harvester Loan</option>
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
                                                                        for="taluka">Tehsil</label>
                                                                    <select class="form-select py-2"
                                                                        aria-label="Default select example"
                                                                        name="taluka" id="taluka">
                                                                        <option selected></option>
                                                                        <option value="1">name1</option>
                                                                        <option value="2">name2</option>
                                                                        <option value="3">name3</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                        data-bs-dismiss="modal">Close</button>
                                                    <button type="button" class="btn btn-danger">Request</button>
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
        </form>
        </div>
        </div>
        </div>
    </section>
    <section>
        <div class="container">
            <div class="row">
                <h3 class="assured px-2 ">Related Implement Types</h1>
                    <div class="col-12 col-sm-6 col-md-3 col-lg-4 px-2 py-3 h-100">
                        <div class="h-auto success__stry__item d-flex flex-column shadow ">
                            <div class="thumb">
                                <a href="#">
                                    <div class="ratio ratio-16x9">
                                        <img src="assets/images/575-di-xp-plus-1632207330.webp"
                                            class="object-fit-cover " alt="img">
                                    </div>
                                </a>
                            </div>
                            <div class="content d-flex flex-column flex-grow-1 ">

                                <a href="mahindra_575.php" class="text-decoration-none text-dark">
                                    <h4 class="fw-bold mt-3 mx-3">Mahindra 575 DI XP Plus
                </h3>
                </a>
                <div class="row mt-1 ps-1">
                    <div class="col-12 col-lg-6 col-md-6 col-sm-6">
                        <p class=" ps-3"> <i class="fas fa-bolt"></i> 47 HP</p>
                    </div>
                    <div class="col-12 col-lg-6 col-md-6 col-sm-6">
                        <p class="pe-5 me-4"> <i class="fa fa-cog" aria-hidden="true"></i> 2979 CC </p>
                    </div>
                </div>
                <a href="#" class="text-decoration-none text-dark pb-3  fw-bold">
                    <span class="p-3">
                        Get On Road price
                    </span>
                    <span class="icon">
                        <i class="fa-solid fa-chevron-right"></i>
                    </span>
                </a>
            </div>
        </div>
        </div>
        <div class="col-12 col-sm-6 col-md-3 col-lg-4 px-2 py-3 h-100">
            <div class="h-auto success__stry__item d-flex flex-column shadow ">
                <div class="thumb">
                    <a href="#">
                        <div class="ratio ratio-16x9">
                            <img src="assets/images/mahindra-oja-3140-4wd-1692164169.webp" class="object-fit-cover "
                                alt="img">
                        </div>
                    </a>
                </div>
                <div class="content d-flex flex-column flex-grow-1 ">

                    <a href="#" class="text-decoration-none text-dark">
                        <h4 class="fw-bold mt-3 mx-3">Mahindra Oja 3140 4WD</h3>
                    </a>
                    <div class="row mt-1 ps-1">
                        <div class="col-12 col-lg-6 col-md-6 col-sm-6">
                            <p class=" ps-3"> <i class="fas fa-bolt"></i> 40 HP</p>
                        </div>
                        <div class="col-12 col-lg-6 col-md-6 col-sm-6">
                            <!-- <p class="pe-5 me-4"> <i class="fa fa-cog" aria-hidden="true"></i>  CC </p> -->
                        </div>
                    </div>
                    <a href="#" class="text-decoration-none text-dark pb-3  fw-bold">
                        <span class="p-3">
                            Get On Road price
                        </span>
                        <span class="icon">
                            <i class="fa-solid fa-chevron-right"></i>
                        </span>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-12 col-sm-6 col-md-3 col-lg-4 px-2 py-3 h-100">
            <div class="h-auto success__stry__item d-flex flex-column shadow ">
                <div class="thumb">
                    <a href="#">
                        <div class="ratio ratio-16x9">
                            <img src="assets/images/mahindra-oja-2121-4wd-1692163509.webp" class="object-fit-cover"
                                alt="img">
                        </div>
                    </a>
                </div>
                <div class="content d-flex flex-column flex-grow-1 ">

                    <a href="#" class="text-decoration-none text-dark">
                        <h4 class="fw-bold mt-3 mx-3">Mahindra OJA 2121 4WD</h3>
                    </a>
                    <div class="row mt-1 ps-1">
                        <div class="col-12 col-lg-6 col-md-6 col-sm-6">
                            <p class=" ps-3"> <i class="fas fa-bolt"></i> 21 HP</p>
                        </div>
                        <div class="col-12 col-lg-6 col-md-6 col-sm-6">
                            <!-- <p class="pe-5 me-4"> <i class="fa fa-cog" aria-hidden="true"></i>  3531 CC </p> -->
                        </div>
                    </div>
                    <a href="#" class="text-decoration-none text-dark pb-3  fw-bold">
                        <span class="p-3">
                            Get On Road price
                        </span>
                        <span class="icon">
                            <i class="fa-solid fa-chevron-right"></i>
                        </span>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-12 col-sm-6 col-md-3 col-lg-4 px-2 py-3 h-100">
            <div class="h-auto success__stry__item d-flex flex-column shadow ">
                <div class="thumb">
                    <a href="#">
                        <div class="ratio ratio-16x9">
                            <img src="assets/images/275-di-tu-1632206550.webp" class="object-fit-cover " alt="img">
                        </div>
                    </a>
                </div>
                <div class="content d-flex flex-column flex-grow-1 ">

                    <a href="#" class="text-decoration-none text-dark">
                        <h4 class="fw-bold mt-3 mx-3">Mahindra 275 DI TU</h3>
                    </a>
                    <div class="row mt-1 ps-1">
                        <div class="col-12 col-lg-6 col-md-6 col-sm-6">
                            <p class=" ps-3"> <i class="fas fa-bolt"></i> 39 HP</p>
                        </div>
                        <div class="col-12 col-lg-6 col-md-6 col-sm-6">
                            <p class="pe-5 me-4"> <i class="fa fa-cog" aria-hidden="true"></i> 2048 CC </p>
                        </div>
                    </div>
                    <a href="#" class="text-decoration-none text-dark pb-3  fw-bold">
                        <span class="p-3">
                            Get On Road price
                        </span>
                        <span class="icon">
                            <i class="fa-solid fa-chevron-right"></i>
                        </span>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-12 col-sm-6 col-md-3 col-lg-4 px-2 py-3 h-100">
            <div class="h-auto success__stry__item d-flex flex-column shadow ">
                <div class="thumb">
                    <a href="#">
                        <div class="ratio ratio-16x9">
                            <img src="assets/images/arjun-novo-605-di-i-1632207718.webp" class="object-fit-cover "
                                alt="img">
                        </div>
                    </a>
                </div>
                <div class="content d-flex flex-column flex-grow-1 ">

                    <a href="#" class="text-decoration-none text-dark">
                        <h4 class="fw-bold mt-3 mx-3">Mahindra Yuvo 575 DI 4WD</h3>
                    </a>
                    <div class="row mt-1 ps-1">
                        <div class="col-12 col-lg-6 col-md-6 col-sm-6">
                            <p class=" ps-3"> <i class="fas fa-bolt"></i> 45 HP</p>
                        </div>
                        <div class="col-12 col-lg-6 col-md-6 col-sm-6">
                            <p class="pe-5 me-4"> <i class="fa fa-cog" aria-hidden="true"></i> 2979 CC </p>
                        </div>
                    </div>
                    <a href="#" class="text-decoration-none text-dark pb-3  fw-bold">
                        <span class="p-3">
                            Get On Road price
                        </span>
                        <span class="icon">
                            <i class="fa-solid fa-chevron-right"></i>
                        </span>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-12 col-sm-6 col-md-3 col-lg-4 px-2 py-3 h-100">
            <div class="h-auto success__stry__item d-flex flex-column shadow ">
                <div class="thumb">
                    <a href="#">
                        <div class="ratio ratio-16x9">
                            <img src="assets/images/265-di-xp-plus-1632206429.webp" class="object-fit-cover" alt="img">
                        </div>
                    </a>
                </div>
                <div class="content d-flex flex-column flex-grow-1 ">

                    <a href="#" class="text-decoration-none text-dark">
                        <h4 class="fw-bold mt-3 mx-3">Mahindra 265 DI XP Plus</h3>
                    </a>
                    <div class="row mt-1 ps-1">
                        <div class="col-12 col-lg-6 col-md-6 col-sm-6">
                            <p class=" ps-3"> <i class="fas fa-bolt"></i> 33 HP</p>
                        </div>
                        <div class="col-12 col-lg-6 col-md-6 col-sm-6">
                            <p class="pe-5 me-4"> <i class="fa fa-cog" aria-hidden="true"></i> 2048 CC </p>
                        </div>
                    </div>
                    <a href="#" class="text-decoration-none text-dark pb-3 fw-bold">
                        <span class="p-3">
                            Get On Road price
                        </span>
                        <span class="icon">
                            <i class="fa-solid fa-chevron-right"></i>
                        </span>
                    </a>
                </div>
            </div>
        </div>
        </div>
        <div class="col text-center my-3">
            <a href="#" class="btn btn-success btn-lg">Load More Tractors</a>
        </div>
        </div>
    </section>

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
    </section>

    <?php
    include 'includes/footer.php';
    include 'includes/footertag.php';
    ?>

    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

</html>