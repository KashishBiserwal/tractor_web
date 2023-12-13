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
                            class="fa-solid fa-chevron-right px-1"></i></a><span class="text-dark">Nursery</span>
                </span>
            </div>
        </div>
    </section>
    <section>
        <div class="container-fullwidth mt-4">
            <div class="row">
                <div class="col-12 col-sm-9 col-lg-9 col-md-9">
                    <h3 class="py-2  fw-bold">Locate <span class="text-success fw-bold"> Nurseries </span>Near You</h3>
                    <div class="row my-4">
                        <div class="col-12 col-lg-4 col-md-4 col-sm-4 mb-4">
                            <a href="nursery_inner.php"
                                class="h-auto success__stry__item text-decoration-none d-flex flex-column shadow ">
                                <div class="thumb">
                                    <div>
                                        <div class="ratio ratio-16x9">
                                            <img src="assets/images/sunflower.jpg" class="object-fit-cover " alt="img">
                                        </div>
                                    </div>
                                </div>
                                <div class="content d-flex flex-column flex-grow-1 ">
                                    <div class="power text-center mt-3">
                                        <div class="col-12">
                                            <p class="text-success fw-bold">Nursery Name</p>
                                        </div>
                                    </div>
                                    <div class="row text-center">
                                        <div class="col-12 text-center">
                                            <p class="fw-bold pe-3">Durg, Chhattisgarh</p>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <div class="col-12 btn-success">
                                <button type="button" class="btn btn-success py-2 w-100" data-bs-toggle="modal"
                                    data-bs-target="#staticBackdrop"><i class="fa-solid fa-phone"></i>
                                    Contact Nursery
                                </button>
                            </div>

                            <!-- Modal -->
                            <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static"
                                data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel"
                                aria-hidden="true">
                                <div class="modal-dialog modal-lg modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title text-danger" id="staticBackdropLabel">Contact Nursery
                                            </h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="model-cont">
                                                <h4 class="text-center text-danger">Request to Call</h3>
                                                    <div class="row px-3 py-2">
                                                        <div class="col-12  col-sm-12 col-md-6 col-lg-6 ">
                                                            <label for="slr_name" class="form-label fw-bold text-dark">
                                                                Seller Name</label>
                                                            <input type="text" class="form-control" id="slr_name">
                                                        </div>
                                                        <div class="col-12 col-sm-12 col-md-6 col-lg-6  ">
                                                            <label for="number" class="form-label text-dark fw-bold">
                                                                Phone Number</label>
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
                                                    </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-bs-dismiss="modal">Close</button>
                                            <button type="button" class="btn btn-success" data-bs-toggle="modal"
                                                data-bs-target="#staticBackdrop4">
                                                Request
                                            </button>
                                            <div class="modal fade" id="staticBackdrop4" data-bs-keyboard="false"
                                                tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered">
                                                    <div class="modal-content">
                                                        <!-- <div class="modal-header">
                                                                <h5 class="modal-title" id="staticBackdropLabel"></h5>
                                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div> -->
                                                        <div class="modal-body">
                                                            <div class="row px-3  mb-4 text-center">
                                                                <h2 class="col-12 text-danger"><strong>ThankYou For
                                                                        Contacting Us..!</strong></h2>
                                                                <div class="col-12 text-center"><img class="tick w-100"
                                                                        alt="dfd" src="assets/images/dribbble_yamm.gif">
                                                                </div>
                                                                <h6 class="col-12 mt-3"><i>We will Connect You Soon</i>
                                                                </h6>
                                                                <h6 class="col-12 mt-2"><i>Enjoy Your Day..!</i></h6>
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
                        <div class="col-12 col-lg-4 col-md-4 col-sm-4 mb-4">
                            <div class="h-auto success__stry__item d-flex flex-column text-decoration-none shadow ">
                                <div class="thumb">
                                    <div>
                                        <a href="#" class="ratio ratio-16x9">
                                            <img src="assets/images/navaneet-farms-nursery-puttur-44.webp"
                                                class="object-fit-cover " alt="img">
                                        </a>
                                    </div>
                                </div>
                                <div class="content d-flex flex-column flex-grow-1 ">
                                    <div class="power text-center mt-3">
                                        <div class="col-12">
                                            <p class="text-success fw-bold">Nursery Name</p>
                                        </div>
                                    </div>
                                    <div class="row text-center">
                                        <div class="col-12 text-center">
                                            <p class="fw-bold pe-3 text-primary">Raipur,Chhattisgarh</p>
                                        </div>
                                    </div>
                                    <div class="col-12 btn-success">
                                        <button type="button" class="btn btn-success py-2 w-100" data-bs-toggle="modal"
                                            data-bs-target="#staticBackdrop"><i class="fa-solid fa-phone"></i>
                                            Contact Nursery
                                        </button>
                                    </div>

                                    <!-- Modal -->
                                    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static"
                                        data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel"
                                        aria-hidden="true">
                                        <div class="modal-dialog modal-lg modal-dialog-centered">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title text-danger" id="staticBackdropLabel">Contact
                                                        Nursery</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="model-cont">
                                                        <h4 class="text-center text-danger">Request to Call</h3>
                                                            <div class="row px-3 py-2">
                                                                <div class="col-12  col-sm-12 col-md-6 col-lg-6 ">
                                                                    <label for="slr_name"
                                                                        class="form-label fw-bold text-dark"> Seller
                                                                        Name</label>
                                                                    <input type="text" class="form-control"
                                                                        id="slr_name">
                                                                </div>
                                                                <div class="col-12 col-sm-12 col-md-6 col-lg-6  ">
                                                                    <label for="number"
                                                                        class="form-label text-dark fw-bold"> Phone
                                                                        Number</label>
                                                                    <input type="text" class="form-control" id="number">
                                                                </div>
                                                                <div class="col-12 col-sm-12 col-md-6 col-lg-6  ">
                                                                    <label for="number"
                                                                        class="form-label text-dark fw-bold">
                                                                        State</label>
                                                                    <select class="form-select py-2 "
                                                                        aria-label=".form-select-lg example">
                                                                        <option selected>Select State</option>
                                                                        <option value="1">Chhattisgarh</option>
                                                                        <option value="2">Other</option>
                                                                    </select>
                                                                </div>
                                                                <div class="col-12 col-sm-12 col-md-6 col-lg-6  ">
                                                                    <label for="number"
                                                                        class="form-label text-dark fw-bold">
                                                                        District</label>
                                                                    <select class="form-select py-2 "
                                                                        aria-label=".form-select-lg example">
                                                                        <option selected>Select District</option>
                                                                        <option value="1">Mungeli</option>
                                                                        <option value="2">Durg</option>
                                                                    </select>
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
                        <div class="col-12 col-lg-4 col-md-4 col-sm-4 mb-4">
                            <a href="#"
                                class="h-auto success__stry__item text-decoration-none d-flex flex-column shadow ">
                                <div class="thumb">
                                    <div>
                                        <div class="ratio ratio-16x9">
                                            <img src="assets/images/default-plant-nurseries-9.avif"
                                                class="object-fit-cover w-100 " alt="img">
                                        </div>
                                    </div>
                                </div>
                                <div class="content d-flex flex-column flex-grow-1 ">
                                    <div class="power text-center mt-3">
                                        <div class="col-12">
                                            <p class="text-success fw-bold">Nursery Name</p>
                                        </div>
                                    </div>
                                    <div class="row text-center">
                                        <div class="col-12 text-center">
                                            <p class="fw-bold pe-3">Surajpur, Chhattisgarh</p>
                                        </div>
                                    </div>
                                    <div class="col-12 btn-success">
                                        <button type="button" class="btn btn-success py-2 w-100" data-bs-toggle="modal"
                                            data-bs-target="#staticBackdrop"><i class="fa-solid fa-phone"></i>
                                            Contact Nursery
                                        </button>
                                    </div>

                                    <!-- Modal -->
                                    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static"
                                        data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel"
                                        aria-hidden="true">
                                        <div class="modal-dialog modal-lg modal-dialog-centered">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title text-danger" id="staticBackdropLabel">Contact
                                                        Nursery</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="model-cont">
                                                        <h4 class="text-center text-danger">Request to Call</h3>
                                                            <div class="row px-3 py-2">
                                                                <div class="col-12  col-sm-12 col-md-6 col-lg-6 ">
                                                                    <label for="slr_name"
                                                                        class="form-label fw-bold text-dark"> <i
                                                                            class="fa-regular fa-user"></i> Seller
                                                                        Name</label>
                                                                    <input type="text" class="form-control"
                                                                        id="slr_name">
                                                                </div>
                                                                <div class="col-12 col-sm-12 col-md-6 col-lg-6  ">
                                                                    <label for="number"
                                                                        class="form-label text-dark fw-bold"> <i
                                                                            class="fa fa-phone" aria-hidden="true"></i>
                                                                        Phone Number</label>
                                                                    <input type="text" class="form-control" id="number">
                                                                </div>
                                                                <div class="col-12 col-sm-12 col-md-6 col-lg-6  ">
                                                                    <label for="number"
                                                                        class="form-label text-dark fw-bold">
                                                                        State</label>
                                                                    <select class="form-select py-2 "
                                                                        aria-label=".form-select-lg example">
                                                                        <option selected>Select State</option>
                                                                        <option value="1">Chhattisgarh</option>
                                                                        <option value="2">Other</option>
                                                                    </select>
                                                                </div>
                                                                <div class="col-12 col-sm-12 col-md-6 col-lg-6  ">
                                                                    <label for="number"
                                                                        class="form-label text-dark fw-bold">
                                                                        District</label>
                                                                    <select class="form-select py-2 "
                                                                        aria-label=".form-select-lg example">
                                                                        <option selected>Select District</option>
                                                                        <option value="1">Mungeli</option>
                                                                        <option value="2">Durg</option>
                                                                    </select>
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
                            </a>
                        </div>
                        <div class="col-12 col-lg-4 col-md-4 col-sm-4 mb-4">
                            <a href="#"
                                class="h-auto success__stry__item d-flex text-decoration-none flex-column shadow ">
                                <div class="thumb">
                                    <div>
                                        <div class="ratio ratio-16x9">
                                            <img src="assets/images/seed.jpg" class="object-fit-cover " alt="img">
                                        </div>
                                    </div>
                                </div>
                                <div class="content d-flex flex-column flex-grow-1 ">
                                    <div class="power text-center mt-3">
                                        <div class="col-12">
                                            <p class="text-success fw-bold">Nursery Name</p>
                                        </div>
                                    </div>
                                    <div class="row text-center">
                                        <div class="col-12 text-center">
                                            <p class="fw-bold pe-3">Raipur, Chhattisgarh</p>
                                        </div>
                                    </div>
                                    <div class="col-12 btn-success">
                                        <p class="call text-center pt-2"> <i class="fa-solid fa-phone"></i> Contact
                                            Nursery</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-12 col-lg-4 col-md-4 col-sm-4 mb-4">
                            <a href="#"
                                class="h-auto success__stry__item text-decoration-none d-flex flex-column shadow ">
                                <div class="thumb">
                                    <div>
                                        <div class="ratio ratio-16x9">
                                            <img src="assets/images/seeds-child-plant-nature-macro-nursery.jpg"
                                                class="object-fit-cover " alt="img">
                                        </div>
                                    </div>
                                </div>
                                <div class="content d-flex flex-column flex-grow-1 ">
                                    <div class="power text-center mt-3">
                                        <div class="col-12">
                                            <p class="text-success fw-bold">Nursery Name</p>
                                        </div>
                                    </div>
                                    <div class="row text-center">
                                        <div class="col-12 text-center">
                                            <p class="fw-bold pe-3">Surajpur, Chhattisgarh</p>
                                        </div>
                                    </div>
                                    <div class="col-12 btn-success">
                                        <p class="call text-center pt-2"> <i class="fa-solid fa-phone"></i> Contact
                                            Nursery</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-12 col-lg-4 col-md-4 col-sm-4 mb-4">
                            <a href="#"
                                class="h-auto success__stry__item text-decoration-none d-flex flex-column shadow ">
                                <div class="thumb">
                                    <div>
                                        <div class="ratio ratio-16x9">
                                            <img src="assets/images/sunflower.jpg" class="object-fit-cover " alt="img">
                                        </div>
                                    </div>
                                </div>
                                <div class="content d-flex flex-column flex-grow-1 ">
                                    <div class="power text-center mt-3">
                                        <div class="col-12">
                                            <p class="text-success fw-bold">Nursery Name</p>
                                        </div>
                                    </div>
                                    <div class="row text-center">
                                        <div class="col-12 text-center">
                                            <p class="fw-bold pe-3">Durg, Chhattisgarh</p>
                                        </div>
                                    </div>
                                    <div class="col-12 btn-success">
                                        <p class="call text-center pt-2"> <i class="fa-solid fa-phone"></i> Contact
                                            Nursery</p>
                                    </div>
                                </div>
                            </a>
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
                                    <button id="adduser" type="button" class="add_btn btn btn-success px-3">
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
                            <h5 class=" text-center text-dark fw-bold mb-3"  >Search By State</h5>
                            <div class="price py-2 " style="margin: 0 auto;">
                                <div class=" d-flex">
                                    <input type="checkbox" class="checkbox-round mt-1 ms-3" value="cg" /><span
                                        class="ps-2 fs-6">Chhattisgarh</span><br />
                                </div>
                                <div class=" d-flex">
                                    <input type="checkbox" class="checkbox-round mt-1 ms-3" value="other" /><span
                                        class="ps-2 fs-6">Other</span><br />
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
                </div>
            </div>
        </div>
    </section>




    <?php
    include 'includes/footer.php';
    include 'includes/footertag.php';

    ?>

</html>