<!DOCTYPE html>
<html lang="en">

<head>
    <?php
   include 'includes/headertag.php';
   ?>
</head>

<body>
    <?php
   include 'includes/header.php';
   ?>

    <section class="mt-5 pt-5">
        <div class="container-fullwidth pt-4">
            <div class="">
                <span class="mt-5 text-white pt-5 ">
                    <a href="index.php" class="text-decoration-none header-link px-1">Home <i
                            class="fa-solid fa-chevron-right px-1"></i></a>
                    <span class=""><span class="text-dark px-1">Haatbazar<i class="fa-solid fa-chevron-right px-1"></i>
                        </span></span>
                    <span class="text-dark">Buy</span>
                </span>
            </div>
        </div>
    </section>
    <section>
        <div class="container-fullwidth mt-4">
            <div class="row">
                <div class="col-12 col-sm-9 col-lg-9 col-md-9">
                    <h3 class="py-2">Buy Your Item From <span class="text-success fw-bold">Haatbazar</span> </h3>
                    <div class="row my-4">
                        <div class="col-12 col-lg-4 col-md-4 col-sm-4 mb-4">
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
                                                <p class="text-success ps-2">Potato</p>
                                            </div>
                                            <div class="col-6 col-lg-6 col-md-6 col-sm-6">
                                                <p class=" text-success pe-2 float-end">Kufri Jyoti</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row ">
                                        <div class="col-6 col-lg-6 col-md-6 col-sm-6">
                                            <p class="text-success ps-2"><i class="fa fa-inr" aria-hidden="true"></i>
                                                380.00/Kg</p>
                                        </div>
                                        <div class="col-6 col-lg-6 col-md-6 col-sm-6">
                                            <p class=" text-success pe-2 float-end">4 Kg</p>
                                        </div>
                                    </div>
                                    <div class="row">

                                        <div class="col-12">
                                            <p class=" text-center" id="district"><span
                                                    id="engine_powerhp2"></span>Ambikapur,<span
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
                             <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static"
                                data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel"
                                aria-hidden="true">
                                <div class="modal-dialog modal-lg modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title text-dark fw-bold" id="staticBackdropLabel">Contact Seller</h4>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="model-cont">
                                                <form id="hire_inner" name="hire_inner" method="post">
                                                    <div class="row">
                                                        <div class="col-12 col-sm-12 col-md-4 col-lg-4 mt-4">
                                                            <div class="form-outline">
                                                                <label class="form-label" for="first_name"><i
                                                                        class="fa-regular fa-user"></i> First
                                                                    Name</label>
                                                                <input type="text" id="first_name" name="first_name"
                                                                    class=" data_search form-control input-group-sm py-2" />
                                                            </div>
                                                        </div>
                                                        <div class="col-12 col-sm-12 col-md-4 col-lg-4 mt-4">
                                                            <div class="form-outline">
                                                                <label class="form-label" for="last_name"><i
                                                                        class="fa-regular fa-user"></i> Last
                                                                    Name</label>
                                                                <input type="text" id="last_name" name="last_name"
                                                                    class=" data_search form-control input-group-sm py-2" />
                                                            </div>
                                                        </div>
                                                        <div class="col-12 col-sm-12 col-md-4 col-lg-4 mt-4">
                                                            <div class="form-outline">
                                                                <label class="form-label" for="mobile_number"> <i
                                                                        class="fa fa-phone" aria-hidden="true"></i>
                                                                    Mobile
                                                                    Number</label>
                                                                <input type="text" id="mobile_number"
                                                                    name="mobile_number"
                                                                    class=" data_search form-control input-group-sm py-2" />
                                                            </div>
                                                        </div>
                                                        <div class="col-12 col-sm-12 col-md-4 col-lg-4 mt-4">
                                                            <div class="form-outline">
                                                                <label class="form-label" for="state"> <i
                                                                        class="fas fa-location"></i>

                                                                    State</label>
                                                                <select class="form-select py-2"
                                                                    aria-label="Default select example" id="state"
                                                                    name="state">
                                                                    <option selected></option>
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
                                                                <label class="form-label" for="district"> <i
                                                                        class="fa-solid fa-location-dot"></i>
                                                                    District</label>
                                                                <select class="form-select py-2"
                                                                    aria-label="Default select example" name="district"
                                                                    id="district">
                                                                    <option selected></option>
                                                                    <option value="1">name1</option>
                                                                    <option value="2">name2</option>
                                                                    <option value="3">name3</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-12 col-sm-12 col-md-4 col-lg-4 mt-4">
                                                            <div class="form-outline">
                                                                <label class="form-label" for="taluka">Tehsil</label>
                                                                <select class="form-select py-2"
                                                                    aria-label="Default select example" name="taluka"
                                                                    id="taluka">
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
                                            <button type="button" id="button_hire"
                                                class="btn btn-danger">Request</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-lg-4 col-md-4 col-sm-4 mb-4">
                            <a href="#"
                                class="h-auto success__stry__item d-flex flex-column text-decoration-none shadow ">
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
                                                <p class="text-success ps-2">Rice</p>
                                            </div>
                                            <div class="col-6 col-lg-6 col-md-6 col-sm-6">
                                                <p id="adduser" type="" class="text-success pe-2 float-end">Sona Masoori
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-6 col-lg-6 col-md-6 col-sm-6">
                                            <p class="ps-2 text-success"> <i class="fa fa-inr" aria-hidden="true"></i>
                                                380.00/Kg</p>
                                        </div>
                                        <div class="col-6 col-lg-6 col-md-6 col-sm-6">
                                            <p class=" text-success pe-2 float-end">4 Kg</p>
                                        </div>
                                    </div>

                                    <div class="row">

                                        <div class="col-12">
                                            <p class=" text-center" id="district"><span
                                                    id="engine_powerhp2"></span>Ambikapur,<span
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
                            <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static"
                                data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel"
                                aria-hidden="true">
                                <div class="modal-dialog modal-lg modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title text-danger" id="staticBackdropLabel">Contact Seller
                                            </h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="model-cont">
                                                <h4 class="text-center text-danger">Contact with Seller</h3>
                                                    <div class="row px-3 py-2">
                                                        <div class="col-12  col-sm-12 col-md-6 col-lg-6 ">
                                                            <label for="slr_name" class="form-label fw-bold text-dark">
                                                                <i class="fa-regular fa-user"></i>Name</label>
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
                                                            <label for="slr_name"
                                                                class="form-label fw-bold text-dark mt-2"> Price</label>
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
                        <div class="col-12 col-lg-4 col-md-4 col-sm-4 mb-4">
                            <a href="#"
                                class="h-auto success__stry__item text-decoration-none d-flex flex-column shadow ">
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
                            </a>
                            <div class="col-12 btn-success">
                                <button type="button" class="btn btn-success py-2 w-100" data-bs-toggle="modal"
                                    data-bs-target="#staticBackdrop"><i class="fa-solid fa-phone"></i>
                                    Contact Seller
                                </button>
                            </div>

                            <!-- Modal -->
                            <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static"
                                data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel"
                                aria-hidden="true">
                                <div class="modal-dialog modal-lg modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title text-danger" id="staticBackdropLabel">Contact Seller
                                            </h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="model-cont">
                                                <h4 class="text-center text-danger">Contact with Seller</h3>
                                                    <div class="row px-3 py-2">
                                                        <div class="col-12  col-sm-12 col-md-6 col-lg-6 ">
                                                            <label for="slr_name" class="form-label fw-bold text-dark">
                                                                <i class="fa-regular fa-user"></i>Name</label>
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
                                                            <label for="slr_name"
                                                                class="form-label fw-bold text-dark mt-2"> Price</label>
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
                        <div class="col-12 col-lg-4 col-md-4 col-sm-4 mb-4">
                            <a href="#"
                                class="h-auto success__stry__item d-flex text-decoration-none flex-column shadow ">
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
                                                    Lentils</p>
                                            </div>
                                            <div class="col-6 col-lg-6 col-md-6 col-sm-6">
                                                <p id="adduser" type="" class="text-success float-end pe-2">Yellow
                                                    Lentils</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row ">
                                        <div class="col-6 col-lg-6 col-md-6 col-sm-6">
                                            <p class="ps-2 text-success"> <i class="fa fa-inr" aria-hidden="true"></i>
                                                80.00/Kg</p>
                                        </div>
                                        <div class="col-6 col-lg-6 col-md-6 col-sm-6">
                                            <p class="float-end pe-2 text-success">8 Kg</p>
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
                            <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static"
                                data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel"
                                aria-hidden="true">
                                <div class="modal-dialog modal-lg modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title text-danger" id="staticBackdropLabel">Contact Seller
                                            </h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="model-cont">
                                                <h4 class="text-center text-danger">Contact with Seller</h3>
                                                    <div class="row px-3 py-2">
                                                        <div class="col-12  col-sm-12 col-md-6 col-lg-6 ">
                                                            <label for="slr_name" class="form-label fw-bold text-dark">
                                                                <i class="fa-regular fa-user"></i>Name</label>
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
                                                            <label for="slr_name"
                                                                class="form-label fw-bold text-dark mt-2"> Price</label>
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
                        <div class="col-12 col-lg-4 col-md-4 col-sm-4 mb-4">
                            <a href="#"
                                class="h-auto success__stry__item text-decoration-none d-flex flex-column shadow ">
                                <div class="thumb">
                                    <div>
                                        <div class="ratio ratio-16x9">
                                            <img src="assets/images/brinjal.jpg" class="object-fit-cover " alt="img">
                                        </div>
                                    </div>
                                </div>
                                <div class="content d-flex flex-column flex-grow-1 ">
                                    <div class="power mt-3">
                                        <div class="row ">
                                            <div class="col-6 col-lg-6 col-md-6 col-sm-6">
                                                <p class="text-success ps-2">
                                                    Brinjal</p>
                                            </div>
                                            <div class="col-6 col-lg-6 col-md-6 col-sm-6">
                                                <p id="adduser" type="" class="text-success float-end pe-2">Arka Sheel
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
                            <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static"
                                data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel"
                                aria-hidden="true">
                                <div class="modal-dialog modal-lg modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title text-danger" id="staticBackdropLabel">Contact Seller
                                            </h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="model-cont">
                                                <h4 class="text-center text-danger">Contact with Seller</h3>
                                                    <div class="row px-3 py-2">
                                                        <div class="col-12  col-sm-12 col-md-6 col-lg-6 ">
                                                            <label for="slr_name" class="form-label fw-bold text-dark">
                                                                <i class="fa-regular fa-user"></i>Name</label>
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
                                                            <label for="slr_name"
                                                                class="form-label fw-bold text-dark mt-2"> Price</label>
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
                        <div class="col-12 col-lg-4 col-md-4 col-sm-4 mb-4">
                            <a href="#"
                                class="h-auto success__stry__item text-decoration-none d-flex flex-column shadow ">
                                <div class="thumb">
                                    <div>
                                        <div class="ratio ratio-16x9">
                                            <img src="assets/images/papaya.jpg" class="object-fit-cover " alt="img">
                                        </div>
                                    </div>
                                </div>
                                <div class="content d-flex flex-column flex-grow-1 ">
                                    <div class="power mt-3">
                                        <div class="row ">
                                            <div class="col-6 col-lg-6 col-md-6 col-sm-6">
                                                <p class="text-success ps-2">
                                                    Papaya</p>
                                            </div>
                                            <div class="col-6 col-lg-6 col-md-6 col-sm-6">
                                                <p id="adduser" type="" class="text-success float-end pe-2">Pusa Nanha
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
                                            <p class="pe-2 float-end text-success">4 Kg</p>
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
                            <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static"
                                data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel"
                                aria-hidden="true">
                                <div class="modal-dialog modal-lg modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title text-danger" id="staticBackdropLabel">Contact Seller
                                            </h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="model-cont">
                                                <h4 class="text-center text-danger">Contact with Seller</h3>
                                                    <div class="row px-3 py-2">
                                                        <div class="col-12  col-sm-12 col-md-6 col-lg-6 ">
                                                            <label for="slr_name" class="form-label fw-bold text-dark">
                                                                <i class="fa-regular fa-user"></i>Name</label>
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
                                                            <label for="slr_name"
                                                                class="form-label fw-bold text-dark mt-2"> Price</label>
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
                    <div class="col-12 text-center mb-4">
                        <button id="adduser" type="button" class="add_btn btn-success btn btn-lg">
                            <i class="fas fa-undo"></i> Load More </button>
                    </div>
                </div>

                <div class="col-12 col-sm-3 col-lg-3 col-md-3">
                    <div class=" row mb-3" id="">
                        <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                            <div class=" row text-center">
                                <div class="col-12 col-sm-6 col-lg-6 col-md-6 g-1">
                                    <button id="adduser" type="button" class="add_btn btn btn-success ">
                                        <i class="fas fa-undo"></i> Reset </button>
                                </div>
                                <div class="col-12 col-sm-6 col-lg-6 col-md-6 g-1">
                                    <button id="adduser" type="button" class="add_btn btn btn-success">
                                        <i class="fas fa-filter"></i> Apply Filter </button>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class=" mb-3" id="">
                        <div class="force-overflow ">
                            <h5 class=" text-center text-dark fw-bold mb-3">Search By State</h5>
                            <div class="price py-2 " style="margin: 0 auto;">
                                <div class=" d-flex">
                                    <input type="checkbox" class="checkbox-round mt-1 ms-3" value="cg" /><span
                                        class="ps-2 fs-6">Chhattisgarh</span><br />
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="scrollbar mb-3" id="">
                        <div class="force-overflow">
                            <h5 class=" text-center text-dark fw-bold pt-2">Search By District</h5>
                            <div class="HP py-2" style="margin: 0 auto;">
                                <div class=" d-flex">
                                    <input type="checkbox" class="checkbox-round ms-3  mt-1" value="raipur" /><span
                                        class="ps-2 fs-6">Raipur</span><br />
                                </div>
                                <div class=" d-flex">
                                    <input type="checkbox" class="checkbox-round ms-3 mt-1" value="Bilaspur" /><span
                                        class="ps-2 fs-6">Bilaspur</span><br />
                                </div>
                                <div class=" d-flex">
                                    <input type="checkbox" class="checkbox-round ms-3 mt-1" value="Ambikapur" /><span
                                        class="ps-2 fs-6">Ambikapur</span><br />
                                </div>
                                <div class=" d-flex">
                                    <input type="checkbox" class="checkbox-round ms-3 mt-1" value="Raigarh" /><span
                                        class="ps-2 fs-6">Raigarh</span><br />
                                </div>

                                <div class=" d-flex">
                                    <input type="checkbox" class="checkbox-round ms-3 mt-1" value="Surajpur" /><span
                                        class="ps-2 fs-6">Surajpur</span><br />
                                </div>
                                <div class=" d-flex">
                                    <input type="checkbox" class="checkbox-round ms-3 mt-1" value="Chirmiri" /><span
                                        class="ps-2 fs-6">Chirmiri</span><br />
                                </div>
                                <div class=" d-flex">
                                    <input type="checkbox" class="checkbox-round ms-3 mt-1" value="Korba" /><span
                                        class="ps-2 fs-6">Korba</span><br />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="scrollbar mb-3" id="">
                        <div class="force-overflow">
                            <h5 class=" text-center text-dark fw-bold pt-2">Search By Tehsil</h5>
                            <div class="HP py-2" style="margin: 0 auto;">
                                <div class=" d-flex">
                                    <input type="checkbox" class="checkbox-round ms-3  mt-1" value="raipur" /><span
                                        class="ps-2 fs-6">Raipur</span><br />
                                </div>
                                <div class=" d-flex">
                                    <input type="checkbox" class="checkbox-round ms-3 mt-1" value="Bilaspur" /><span
                                        class="ps-2 fs-6">Bilaspur</span><br />
                                </div>
                                <div class=" d-flex">
                                    <input type="checkbox" class="checkbox-round ms-3 mt-1" value="Ambikapur" /><span
                                        class="ps-2 fs-6">Ambikapur</span><br />
                                </div>
                                <div class=" d-flex">
                                    <input type="checkbox" class="checkbox-round ms-3 mt-1" value="Raigarh" /><span
                                        class="ps-2 fs-6">Raigarh</span><br />
                                </div>
                                <div class=" d-flex">
                                    <input type="checkbox" class="checkbox-round ms-3 mt-1" value="Surajpur" /><span
                                        class="ps-2 fs-6">Surajpur</span><br />
                                </div>
                                <div class=" d-flex">
                                    <input type="checkbox" class="checkbox-round ms-3 mt-1" value="Jagdalpur" /><span
                                        class="ps-2 fs-6">Chirmiri</span><br />
                                </div>
                                <div class=" d-flex">
                                    <input type="checkbox" class="checkbox-round ms-3 mt-1" value="Korba" /><span
                                        class="ps-2 fs-6">Korba</span><br />
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class=" mb-3" id="">
                        <div class="force-overflow">
                            <h5 class=" text-center text-dark fw-bold mb-3">Last Added</h5>
                            <div class="price py-2 " style="margin: 0 auto;">
                                <div class=" d-flex">
                                    <input type="checkbox" class="checkbox-round ms-3 mt-1" value="less_30day" /><span
                                        class="ps-2 fs-6">Less than 30 days</span><br />
                                </div>
                                <div class=" d-flex">
                                    <input type="checkbox" class="checkbox-round ms-3 mt-1" value="less_30mnth" /><span
                                        class="ps-2 fs-6">Less than 3 months</span><br />
                                </div>
                                <div class=" d-flex">
                                    <input type="checkbox" class="checkbox-round ms-3 mt-1" value="less_60_mnth" /><span
                                        class="ps-2 fs-6">Less than 6 months</span><br />
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class=" mb-3" id="">
                        <div class="force-overflow">
                            <h5 class=" text-center text-dark fw-bold mb-3">Harvest</h5>
                            <div class="price py-2 " style="margin: 0 auto;">
                                <div class=" d-flex">
                                    <input type="checkbox" class="checkbox-round ms-3 mt-1" value="vege" /><span
                                        class="ps-2 fs-6">Vegetable</span><br />
                                </div>
                                <div class=" d-flex">
                                    <input type="checkbox" class="checkbox-round ms-3 mt-1" value="fruits" /><span
                                        class="ps-2 fs-6">Fruits</span><br />
                                </div>
                                <div class=" d-flex">
                                    <input type="checkbox" class="checkbox-round ms-3 mt-1" value="grains" /><span
                                        class="ps-2 fs-6">Grains</span><br />
                                </div>
                                <div class=" d-flex">
                                    <input type="checkbox" class="checkbox-round ms-3 mt-1" value="pulses" /><span
                                        class="ps-2 fs-6">Pulses</span><br />
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>




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
    </script>

</html>