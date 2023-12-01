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
    <div class="container pt-4">
        <div class="">
            <span class="mt-5 text-white pt-5 ">
                <a href="index.php" class="text-decoration-none header-link px-1">Home <i class="fa-solid fa-chevron-right px-1"></i></a>
                    <span class=""><span class="text-dark px-1">Haatbazar<i class="fa-solid fa-chevron-right px-1"></i> </span></span>
                    <span class="text-dark">Buy</span>
            </span> 
        </div>
    </div>
</section>
<section >
    <div class="container mt-4">
        <div class="row">
            <div class="col-12 col-sm-9 col-lg-9 col-md-9">
                <h3 class="py-2">Buy Your Item From <span class="text-success fw-bold">Haatbazar</span> </h3>
                <div class="row my-4">
                    <div class="col-12 col-lg-4 col-md-4 col-sm-4 mb-4">
                        <a href="hatbzrbuy_inner.php" class="h-auto success__stry__item d-flex flex-column text-decoration-none shadow ">
                            <div class="thumb">
                                <div>
                                    <div class="ratio ratio-16x9">
                                        <img src="assets/images/potato.webp" class="object-fit-cover " alt="img">
                                    </div>
                                </div>
                            </div>
                            <div class="content d-flex flex-column flex-grow-1 ">
                                
                                <div class="power text-center mt-3">
                                    <div class="row ">
                                        <div class="col-12 col-lg-6 col-md-6 col-sm-6"><p class="text-success ps-2"> <i class="fa-solid fa-bowl-food"></i> Vegetable</p></div>
                                        <div class="col-12 col-lg-6 col-md-6 col-sm-6" style="padding-right: 32px;">
                                             <p id="adduser" type="" class="text-danger fw-bold"> Potato</p>
                                        </div>
                                    </div>    
                                </div>
                                <div class="row text-center">
                                    <div class="col-6">
                                        <p class="ps-2"> <i class="fa fa-inr" aria-hidden="true"></i> Price: <strong class="text-primary">230</strong></p>
                                    </div>
                                    <div class="col-6 text-center">
                                        <p class="fw-bold pe-3">Ambikapur(C.G)</p>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <div class="col-12 btn-success">
                            <button type="button" class="btn btn-success py-2 w-100" data-bs-toggle="modal" data-bs-target="#staticBackdrop"><i class="fa-solid fa-phone"></i> 
                                Contact Seller
                            </button>
                        </div>

                                <!-- Modal -->
                        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title text-danger" id="staticBackdropLabel">Contact Seller</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="model-cont">
                                            <h4 class="text-center text-danger">Contact with Seller</h3>
                                            <div class="row px-3 py-2">
                                                <div class="col-12  col-sm-12 col-md-6 col-lg-6 ">
                                                    <label for="slr_name" class="form-label fw-bold text-dark"> <i class="fa-regular fa-user"></i>Name</label>
                                                    <input type="text" class="form-control"  id="slr_name">
                                                </div>
                                                <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                                                    <label for="number" class="form-label text-dark fw-bold"> <i class="fa fa-phone" aria-hidden="true"></i> Phone Number</label>
                                                    <input type="text" class="form-control" id="number">
                                                </div>
                                                <div class="col-12 col-sm-12 col-md-6 col-lg-6  ">
                                                    <label for="number" class="form-label text-dark fw-bold"> State</label>
                                                    <select class="form-select py-2 " aria-label=".form-select-lg example">
                                                        <option selected>Select State</option>
                                                        <option value="1">Chhattisgarh</option>
                                                        <option value="2">Other</option>
                                                    </select>
                                                </div>
                                                <div class="col-12 col-sm-12 col-md-6 col-lg-6  ">
                                                    <label for="number" class="form-label text-dark fw-bold"> District</label>
                                                    <select class="form-select py-2 " aria-label=".form-select-lg example">
                                                        <option selected>Select District</option>
                                                        <option value="1">Mungeli</option>
                                                        <option value="2">Durg</option>
                                                    </select>
                                                </div>
                                                <div class="col-12  col-sm-12 col-md-6 col-lg-6 ">
                                                    <label for="slr_name" class="form-label fw-bold text-dark mt-2"> Price</label>
                                                    <input type="text" class="form-control" placeholder="Enter price" id="price">
                                                </div>
                                                <div class="col-12  col-sm-12 col-md-6 col-lg-6 mt-4 pt-3">
                                                    <button type="button" class="btn btn-success px-3">Request</button>
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
                        <a href="#" class="h-auto success__stry__item d-flex flex-column text-decoration-none shadow ">
                            <div class="thumb">
                                <div>
                                    <div class="ratio ratio-16x9">
                                        <img src="assets/images/rice.webp" class="object-fit-cover " alt="img">
                                    </div>
                                </div>
                            </div>
                            <div class="content d-flex flex-column flex-grow-1 ">
                                <div class="power text-center mt-3">
                                    <div class="row ">
                                        <div class="col-12 col-lg-6 col-md-6 col-sm-6"><p class="text-success ps-2"> <i class="fa-solid fa-bowl-food"></i> Grain</p></div>
                                        <div class="col-12 col-lg-6 col-md-6 col-sm-6" style="padding-right: 32px;">
                                             <p id="adduser" type="" class="text-danger fw-bold"> Rice</p>
                                        </div>
                                    </div>    
                                </div>
                                <div class="row text-center">
                                    <div class="col-6">
                                        <p class="ps-2"> <i class="fa fa-inr" aria-hidden="true"></i> Price: <strong class="text-primary">380</strong></p>
                                    </div>
                                    <div class="col-6 text-center">
                                        <p class="fw-bold pe-3">Ambikapur(C.G)</p>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <div class="col-12 btn-success">
                            <button type="button" class="btn btn-success py-2 w-100" data-bs-toggle="modal" data-bs-target="#staticBackdrop"><i class="fa-solid fa-phone"></i> 
                                Contact Seller
                            </button>
                        </div>

                                <!-- Modal -->
                        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title text-danger" id="staticBackdropLabel">Contact Seller</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="model-cont">
                                            <h4 class="text-center text-danger">Contact with Seller</h3>
                                            <div class="row px-3 py-2">
                                                <div class="col-12  col-sm-12 col-md-6 col-lg-6 ">
                                                    <label for="slr_name" class="form-label fw-bold text-dark"> <i class="fa-regular fa-user"></i>Name</label>
                                                    <input type="text" class="form-control"  id="slr_name">
                                                </div>
                                                <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                                                    <label for="number" class="form-label text-dark fw-bold"> <i class="fa fa-phone" aria-hidden="true"></i> Phone Number</label>
                                                    <input type="text" class="form-control" id="number">
                                                </div>
                                                <div class="col-12 col-sm-12 col-md-6 col-lg-6  ">
                                                    <label for="number" class="form-label text-dark fw-bold"> State</label>
                                                    <select class="form-select py-2 " aria-label=".form-select-lg example">
                                                        <option selected>Select State</option>
                                                        <option value="1">Chhattisgarh</option>
                                                        <option value="2">Other</option>
                                                    </select>
                                                </div>
                                                <div class="col-12 col-sm-12 col-md-6 col-lg-6  ">
                                                    <label for="number" class="form-label text-dark fw-bold"> District</label>
                                                    <select class="form-select py-2 " aria-label=".form-select-lg example">
                                                        <option selected>Select District</option>
                                                        <option value="1">Mungeli</option>
                                                        <option value="2">Durg</option>
                                                    </select>
                                                </div>
                                                <div class="col-12  col-sm-12 col-md-6 col-lg-6 ">
                                                    <label for="slr_name" class="form-label fw-bold text-dark mt-2"> Price</label>
                                                    <input type="text" class="form-control" placeholder="Enter price" id="price">
                                                </div>
                                                <div class="col-12  col-sm-12 col-md-6 col-lg-6 mt-4 pt-3">
                                                    <button type="button" class="btn btn-success px-3">Request</button>
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
                        <a href="#" class="h-auto success__stry__item text-decoration-none d-flex flex-column shadow ">
                            <div class="thumb">
                                <div>
                                    <div class="ratio ratio-16x9">
                                        <img src="assets/images/growing-watermelons.jpg" class="object-fit-cover " alt="img">
                                    </div>
                                </div>
                            </div>
                            <div class="content d-flex flex-column flex-grow-1 ">
                                <div class="power text-center mt-3">
                                    <div class="row ">
                                        <div class="col-12 col-lg-6 col-md-6 col-sm-6"><p class="text-success ps-2"> <i class="fa-solid fa-bowl-food"></i> Fruit</p></div>
                                        <div class="col-12 col-lg-6 col-md-6 col-sm-6" style="padding-right: 32px;">
                                             <p id="adduser" type="" class="text-danger fw-bold"> Watermelon</p>
                                        </div>
                                    </div>    
                                </div>
                                <div class="row text-center">
                                    <div class="col-6">
                                        <p class="ps-2"> <i class="fa fa-inr" aria-hidden="true"></i> Price: <strong class="text-primary">80</strong></p>
                                    </div>
                                    <div class="col-6 text-center">
                                        <p class="fw-bold pe-3">Surajpur(C.G)</p>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <div class="col-12 btn-success">
                            <button type="button" class="btn btn-success py-2 w-100" data-bs-toggle="modal" data-bs-target="#staticBackdrop"><i class="fa-solid fa-phone"></i> 
                                Contact Seller
                            </button>
                        </div>

                                <!-- Modal -->
                        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title text-danger" id="staticBackdropLabel">Contact Seller</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="model-cont">
                                            <h4 class="text-center text-danger">Contact with Seller</h3>
                                            <div class="row px-3 py-2">
                                                <div class="col-12  col-sm-12 col-md-6 col-lg-6 ">
                                                    <label for="slr_name" class="form-label fw-bold text-dark"> <i class="fa-regular fa-user"></i>Name</label>
                                                    <input type="text" class="form-control"  id="slr_name">
                                                </div>
                                                <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                                                    <label for="number" class="form-label text-dark fw-bold"> <i class="fa fa-phone" aria-hidden="true"></i> Phone Number</label>
                                                    <input type="text" class="form-control" id="number">
                                                </div>
                                                <div class="col-12 col-sm-12 col-md-6 col-lg-6  ">
                                                    <label for="number" class="form-label text-dark fw-bold"> State</label>
                                                    <select class="form-select py-2 " aria-label=".form-select-lg example">
                                                        <option selected>Select State</option>
                                                        <option value="1">Chhattisgarh</option>
                                                        <option value="2">Other</option>
                                                    </select>
                                                </div>
                                                <div class="col-12 col-sm-12 col-md-6 col-lg-6  ">
                                                    <label for="number" class="form-label text-dark fw-bold"> District</label>
                                                    <select class="form-select py-2 " aria-label=".form-select-lg example">
                                                        <option selected>Select District</option>
                                                        <option value="1">Mungeli</option>
                                                        <option value="2">Durg</option>
                                                    </select>
                                                </div>
                                                <div class="col-12  col-sm-12 col-md-6 col-lg-6 ">
                                                    <label for="slr_name" class="form-label fw-bold text-dark mt-2"> Price</label>
                                                    <input type="text" class="form-control" placeholder="Enter price" id="price">
                                                </div>
                                                <div class="col-12  col-sm-12 col-md-6 col-lg-6 mt-4 pt-3">
                                                    <button type="button" class="btn btn-success px-3">Request</button>
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
                        <a href="#" class="h-auto success__stry__item d-flex text-decoration-none flex-column shadow ">
                            <div class="thumb">
                                <div>
                                    <div class="ratio ratio-16x9">
                                        <img src="assets/images/pulses.jpg" class="object-fit-cover " alt="img">
                                    </div>
                                </div>
                            </div>
                            <div class="content d-flex flex-column flex-grow-1 ">  
                                <div class="power text-center mt-3">
                                    <div class="row ">
                                        <div class="col-12 col-lg-6 col-md-6 col-sm-6"><p class="text-success ps-2"> <i class="fa-solid fa-bowl-food"></i> Pulses</p></div>
                                        <div class="col-12 col-lg-6 col-md-6 col-sm-6" style="padding-right: 32px;">
                                             <p id="adduser" type="" class="text-danger fw-bold"> Pulses</p>
                                        </div>
                                    </div>    
                                </div>
                                <div class="row text-center">
                                    <div class="col-6">
                                        <p class="ps-2"> <i class="fa fa-inr" aria-hidden="true"></i> Price: <strong class="text-primary">330</strong></p>
                                    </div>
                                    <div class="col-6 text-center">
                                        <p class="fw-bold pe-3">Raipur(C.G)</p>
                                    </div>
                                </div>
                                
                            </div>
                        </a>
                        <div class="col-12 btn-success">
                            <button type="button" class="btn btn-success py-2 w-100" data-bs-toggle="modal" data-bs-target="#staticBackdrop"><i class="fa-solid fa-phone"></i> 
                                Contact Seller
                            </button>
                        </div>

                                <!-- Modal -->
                        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title text-danger" id="staticBackdropLabel">Contact Seller</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="model-cont">
                                            <h4 class="text-center text-danger">Contact with Seller</h3>
                                            <div class="row px-3 py-2">
                                                <div class="col-12  col-sm-12 col-md-6 col-lg-6 ">
                                                    <label for="slr_name" class="form-label fw-bold text-dark"> <i class="fa-regular fa-user"></i>Name</label>
                                                    <input type="text" class="form-control"  id="slr_name">
                                                </div>
                                                <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                                                    <label for="number" class="form-label text-dark fw-bold"> <i class="fa fa-phone" aria-hidden="true"></i> Phone Number</label>
                                                    <input type="text" class="form-control" id="number">
                                                </div>
                                                <div class="col-12 col-sm-12 col-md-6 col-lg-6  ">
                                                    <label for="number" class="form-label text-dark fw-bold"> State</label>
                                                    <select class="form-select py-2 " aria-label=".form-select-lg example">
                                                        <option selected>Select State</option>
                                                        <option value="1">Chhattisgarh</option>
                                                        <option value="2">Other</option>
                                                    </select>
                                                </div>
                                                <div class="col-12 col-sm-12 col-md-6 col-lg-6  ">
                                                    <label for="number" class="form-label text-dark fw-bold"> District</label>
                                                    <select class="form-select py-2 " aria-label=".form-select-lg example">
                                                        <option selected>Select District</option>
                                                        <option value="1">Mungeli</option>
                                                        <option value="2">Durg</option>
                                                    </select>
                                                </div>
                                                <div class="col-12  col-sm-12 col-md-6 col-lg-6 ">
                                                    <label for="slr_name" class="form-label fw-bold text-dark mt-2"> Price</label>
                                                    <input type="text" class="form-control" placeholder="Enter price" id="price">
                                                </div>
                                                <div class="col-12  col-sm-12 col-md-6 col-lg-6 mt-4 pt-3">
                                                    <button type="button" class="btn btn-success px-3">Request</button>
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
                        <a href="#" class="h-auto success__stry__item text-decoration-none d-flex flex-column shadow ">
                            <div class="thumb">
                                <div>
                                    <div class="ratio ratio-16x9">
                                        <img src="assets/images/brinjal.jpg" class="object-fit-cover " alt="img">
                                    </div>
                                </div>
                            </div>
                            <div class="content d-flex flex-column flex-grow-1 ">
                                <div class="power text-center mt-3">
                                    <div class="row ">
                                        <div class="col-12 col-lg-6 col-md-6 col-sm-6"><p class="text-success ps-2"> <i class="fa-solid fa-bowl-food"></i> Vegetable</p></div>
                                        <div class="col-12 col-lg-6 col-md-6 col-sm-6" style="padding-right: 32px;">
                                             <p id="adduser" type="" class="text-danger fw-bold"> Brinjal</p>
                                        </div>
                                    </div>    
                                </div>
                                <div class="row text-center">
                                    <div class="col-6">
                                        <p class="ps-2"> <i class="fa fa-inr" aria-hidden="true"></i> Price: <strong class="text-primary">50</strong></p>
                                    </div>
                                    <div class="col-6 text-center">
                                        <p class="fw-bold pe-3">Surajpur(C.G)</p>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <div class="col-12 btn-success">
                            <button type="button" class="btn btn-success py-2 w-100" data-bs-toggle="modal" data-bs-target="#staticBackdrop"><i class="fa-solid fa-phone"></i> 
                                Contact Seller
                            </button>
                        </div>

                                <!-- Modal -->
                        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title text-danger" id="staticBackdropLabel">Contact Seller</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="model-cont">
                                            <h4 class="text-center text-danger">Contact with Seller</h3>
                                            <div class="row px-3 py-2">
                                                <div class="col-12  col-sm-12 col-md-6 col-lg-6 ">
                                                    <label for="slr_name" class="form-label fw-bold text-dark"> <i class="fa-regular fa-user"></i>Name</label>
                                                    <input type="text" class="form-control"  id="slr_name">
                                                </div>
                                                <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                                                    <label for="number" class="form-label text-dark fw-bold"> <i class="fa fa-phone" aria-hidden="true"></i> Phone Number</label>
                                                    <input type="text" class="form-control" id="number">
                                                </div>
                                                <div class="col-12 col-sm-12 col-md-6 col-lg-6  ">
                                                    <label for="number" class="form-label text-dark fw-bold"> State</label>
                                                    <select class="form-select py-2 " aria-label=".form-select-lg example">
                                                        <option selected>Select State</option>
                                                        <option value="1">Chhattisgarh</option>
                                                        <option value="2">Other</option>
                                                    </select>
                                                </div>
                                                <div class="col-12 col-sm-12 col-md-6 col-lg-6  ">
                                                    <label for="number" class="form-label text-dark fw-bold"> District</label>
                                                    <select class="form-select py-2 " aria-label=".form-select-lg example">
                                                        <option selected>Select District</option>
                                                        <option value="1">Mungeli</option>
                                                        <option value="2">Durg</option>
                                                    </select>
                                                </div>
                                                <div class="col-12  col-sm-12 col-md-6 col-lg-6 ">
                                                    <label for="slr_name" class="form-label fw-bold text-dark mt-2"> Price</label>
                                                    <input type="text" class="form-control" placeholder="Enter price" id="price">
                                                </div>
                                                <div class="col-12  col-sm-12 col-md-6 col-lg-6 mt-4 pt-3">
                                                    <button type="button" class="btn btn-success px-3">Request</button>
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
                        <a href="#" class="h-auto success__stry__item text-decoration-none d-flex flex-column shadow ">
                            <div class="thumb">
                                <div>
                                    <div class="ratio ratio-16x9">
                                        <img src="assets/images/papaya.jpg" class="object-fit-cover " alt="img">
                                    </div>
                                </div>
                            </div>
                            <div class="content d-flex flex-column flex-grow-1 ">
                                <div class="power text-center mt-3">
                                    <div class="row ">
                                        <div class="col-12 col-lg-6 col-md-6 col-sm-6"><p class="text-success ps-2"> <i class="fa-solid fa-bowl-food"></i> Fruit</p></div>
                                        <div class="col-12 col-lg-6 col-md-6 col-sm-6" style="padding-right: 32px;">
                                             <p id="adduser" type="" class="text-danger fw-bold"> Papaya</p>
                                        </div>
                                    </div>    
                                </div>
                                <div class="row text-center">
                                    <div class="col-6">
                                        <p class="ps-2"> <i class="fa fa-inr" aria-hidden="true"></i> Price: <strong class="text-primary">30</strong></p>
                                    </div>
                                    <div class="col-6 text-center">
                                        <p class="fw-bold pe-3">Ratanpur(C.G)</p>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <div class="col-12 btn-success">
                            <button type="button" class="btn btn-success py-2 w-100" data-bs-toggle="modal" data-bs-target="#staticBackdrop"><i class="fa-solid fa-phone"></i> 
                                Contact Seller
                            </button>
                        </div>

                                <!-- Modal -->
                        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title text-danger" id="staticBackdropLabel">Contact Seller</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="model-cont">
                                            <h4 class="text-center text-danger">Contact with Seller</h3>
                                            <div class="row px-3 py-2">
                                                <div class="col-12  col-sm-12 col-md-6 col-lg-6 ">
                                                    <label for="slr_name" class="form-label fw-bold text-dark"> <i class="fa-regular fa-user"></i>Name</label>
                                                    <input type="text" class="form-control"  id="slr_name">
                                                </div>
                                                <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                                                    <label for="number" class="form-label text-dark fw-bold"> <i class="fa fa-phone" aria-hidden="true"></i> Phone Number</label>
                                                    <input type="text" class="form-control" id="number">
                                                </div>
                                                <div class="col-12 col-sm-12 col-md-6 col-lg-6  ">
                                                    <label for="number" class="form-label text-dark fw-bold"> State</label>
                                                    <select class="form-select py-2 " aria-label=".form-select-lg example">
                                                        <option selected>Select State</option>
                                                        <option value="1">Chhattisgarh</option>
                                                        <option value="2">Other</option>
                                                    </select>
                                                </div>
                                                <div class="col-12 col-sm-12 col-md-6 col-lg-6  ">
                                                    <label for="number" class="form-label text-dark fw-bold"> District</label>
                                                    <select class="form-select py-2 " aria-label=".form-select-lg example">
                                                        <option selected>Select District</option>
                                                        <option value="1">Mungeli</option>
                                                        <option value="2">Durg</option>
                                                    </select>
                                                </div>
                                                <div class="col-12  col-sm-12 col-md-6 col-lg-6 ">
                                                    <label for="slr_name" class="form-label fw-bold text-dark mt-2"> Price</label>
                                                    <input type="text" class="form-control" placeholder="Enter price" id="price">
                                                </div>
                                                <div class="col-12  col-sm-12 col-md-6 col-lg-6 mt-4 pt-3">
                                                    <button type="button" class="btn btn-success px-3">Request</button>
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
                    <i class="fas fa-undo"></i>  Load More  </button>
                </div>
            </div>
            
            <div class="col-12 col-sm-3 col-lg-3 col-md-3">
                <div class=" row mb-3" id="">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                        <div class=" row text-center">
                            <div class="col-12 col-sm-6 col-lg-6 col-md-6">
                                <button id="adduser" type="button" class="add_btn btn-success px-3">
                                <i class="fas fa-undo"></i>  Reset </button>
                            </div>
                           <div class="col-12 col-sm-6 col-lg-6 col-md-6 pe-2">
                                <button id="adduser" type="button" class="add_btn btn-success">
                                <i class="fas fa-filter"></i>  Apply Filter </button>
                           </div>
                            
                        </div>
                    </div>
                </div>
               
                <div class=" mb-3" id="">
                    <div class="force-overflow">
                        <div class="price py-2 ">
                            <h5 class=" ps-3 text-dark fw-bold mb-3">Search By State</h5>
                            <input type="checkbox" class="checkbox-round ms-3" value="cg"/><span class="ps-2 fs-6"> Chhattisgarh</span><br />
                            <input type="checkbox" class="checkbox-round ms-3" value="other"/><span class="ps-2 fs-6">Other</span><br />
                        </div>
                    </div>
                </div>
                <div class="scrollbar mb-3" id="">
                    <div class="force-overflow">
                    <h5 class=" ps-1 text-dark fw-bold pt-2">Search By District</h5>
                        <div class="HP py-2">
                            <input type="checkbox" class="checkbox-round ms-3" value="raipur"/><span class="ps-2 fs-6">Raipur</span><br />
                            <input type="checkbox" class="checkbox-round ms-3" value="Bilaspur"/><span class="ps-2 fs-6">Bilaspur</span><br />
                            <input type="checkbox" class="checkbox-round ms-3" value="Ambikapur"/><span class="ps-2 fs-6">Ambikapur</span><br />
                            <input type="checkbox" class="checkbox-round ms-3" value="Raigarh"/><span class="ps-2 fs-6">Raigarh</span><br />
                            <input type="checkbox" class="checkbox-round ms-3" value="Surajpur"/><span class="ps-2 fs-6">Surajpur</span><br />
                            <input type="checkbox" class="checkbox-round ms-3" value="Chirmiri"/><span class="ps-2 fs-6">Chirmiri</span><br />
                            <input type="checkbox" class="checkbox-round ms-3" value="Korba"/><span class="ps-2 fs-6">Korba</span><br />
                        </div>
                    </div>
                </div>
                <div class=" mb-3" id="">
                    <div class="force-overflow">
                        <h5 class=" ps-3 text-dark fw-bold mb-3">Harvest</h5>
                        <div class="price py-2 ">
                            <input type="checkbox" class="checkbox-round ms-3" value="vege"/><span class="ps-2 fs-6">Vegetable</span><br />
                            <input type="checkbox" class="checkbox-round ms-3" value="fruits"/><span class="ps-2 fs-6">Fruits</span><br />
                            <input type="checkbox" class="checkbox-round ms-3" value="grains"/><span class="ps-2 fs-6">Grains</span><br />
                            <input type="checkbox" class="checkbox-round ms-3" value="pulses"/><span class="ps-2 fs-6">Pulses</span><br />
                        </div>
                    </div>
                </div>
                <div class=" mb-3" id="">
                    <div class="force-overflow">
                        <h5 class=" ps-3 text-dark fw-bold mb-3">Last Added:</h5>
                        <div class="price py-2 ">
                            <input type="checkbox" class="checkbox-round ms-3" value="less_30day"/><span class="ps-2 fs-6">Less than 30 days</span><br />
                            <input type="checkbox" class="checkbox-round ms-3" value="less_30mnth"/><span class="ps-2 fs-6">Less than 3 months</span><br />
                            <input type="checkbox" class="checkbox-round ms-3" value="less_60_mnth"/><span class="ps-2 fs-6"> Less than 6 months</span><br />
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
    </html>