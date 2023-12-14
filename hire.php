<!DOCTYPE html>
<html lang="en">

<head>
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

    .error {
        color: red !important;
        margin-bottom: 2px;
        font-size: 13px;
    }
    </style>
</head>

<body>
    <?php
   include 'includes/header.php';
   ?>

    <section class="mt-5 pt-4 bg-light">
        <div class="container py-2">
            <div class="mt-5 pt-4">
                <span class="mt-5 text-white">
                    <a href="index.php" class="text-decoration-none header-link px-1">Home <i
                            class="fa-solid fa-chevron-right px-1"></i></a>

                    <span class="text-dark">Hire Tractor</span>
                </span>
            </div>
        </div>
    </section>
    <section>
        <div class="container my-4">
            <div class="row">
                <div class="col-12 col-sm-9 col-lg-9 col-md-9">
                    <h3 class="pb-3 fw-bold">Search<span class="text-success fw-bold"> Rental Tractors In INDIA</span>
                    </h3>
                    <div class="row">
                        <div class="col-12 col-lg-4 col-md-4 col-sm-4 mb-3">
                            <div class="h-auto success__stry__item d-flex flex-column shadow ">
                                <div class="thumb">
                                    <a href="hire_inner.php">
                                        <div class="ratio ratio-16x9">

                                            <img src="assets/images/575-di-xp-plus-1632207330.webp"
                                                class="object-fit-cover " alt="img">

                                        </div>
                                    </a>
                                </div>
                                <div class="content d-flex flex-column flex-grow-1 ">
                                    <div class="caption text-center">
                                        <a href="hire_inner.php" class="text-decoration-none text-dark">
                                            <p class="pt-3"><strong
                                                    class="series_tractor_strong text-center h4 fw-bold ">Mahindra 575
                                                    DI XP Plus</strong></p>
                                        </a>
                                    </div>
                                    <div class="power">
                                        <a href="hire_inner.php" class="text-decoration-none text-dark">
                                            <div class="row ">
                                                <div class="col-6 col-lg-6 col-md-6 col-sm-6">
                                                    <p class="text-dark"><i
                                                            class="fa-solid fa-location-dot mx-2"></i>Dhamtari</p>
                                                </div>
                                                <div class="col-6 col-lg-6 col-md-6 col-sm-6">
                                                    <p class="text-dark" style="margin-left:32px;"><i
                                                            class="fas fa-bolt mx-2"></i>47 HP</p>
                                                </div>
                                                <div class="col-6 col-lg-6 col-md-6 col-sm-6">
                                                    <p id="adduser" type="" class="text-dark">
                                                        <i class="fa-solid fa-indian-rupee-sign mx-2"></i>30 per Acre/hr
                                                    </p>
                                                </div>

                                                <div class="col-6 col-lg-6 col-md-6 col-sm-6">
                                                    <p id="adduser" type="" class="text-dark "
                                                        style="margin-left:29px;">
                                                        <i class="fa-solid fa-gear mx-2"></i>2979 CC
                                                    </p>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-12">
                                        <button id="adduser" type="button" class="add_btn  btn-success w-100"
                                            data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                                            Send Enquiry</button>
                                    </div>
                                </div>
                            </div>

                            <!-- Modal -->
                            <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static"
                                data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel"
                                aria-hidden="true">
                                <div class="modal-dialog modal-lg modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title text-dark fw-bold" id="staticBackdropLabel">Send
                                                Rental Enquiry Mahindra 575 DI XP Plus</h4>
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
                        <div class="col-12 col-lg-4 col-md-4 col-sm-4 mb-3">
                            <div class="h-auto success__stry__item d-flex flex-column shadow ">
                                <div class="thumb">
                                    <a href="#">
                                        <div class="ratio ratio-16x9">
                                            <img src="assets/images/swaraj-855-fe-1694259363.webp"
                                                class="object-fit-cover " alt="img">
                                        </div>
                                    </a>
                                </div>
                                <div class="content d-flex flex-column flex-grow-1 ">
                                    <div class="caption text-center">
                                        <a href="#" class="text-decoration-none text-dark">
                                            <p class="pt-3"><strong
                                                    class="series_tractor_strong text-center h4 fw-bold ">Swaraj 855
                                                    FE</strong></p>
                                        </a>
                                    </div>
                                    <div class="power">
                                        <div class="row ">
                                            <div class="col-6 col-lg-6 col-md-6 col-sm-6">
                                                <p class="text-dark"><i
                                                        class="fa-solid fa-location-dot mx-2"></i>Dhamtari</p>
                                            </div>
                                            <div class="col-6 col-lg-6 col-md-6 col-sm-6">
                                                <p class="text-dark" style="margin-left:32px;"><i
                                                        class="fas fa-bolt mx-2"></i>47 HP</p>
                                            </div>
                                            <div class="col-6 col-lg-6 col-md-6 col-sm-6">
                                                <p id="adduser" type="" class="text-dark">
                                                    <i class="fa-solid fa-indian-rupee-sign mx-2"></i>30 per Acre/hr
                                                </p>
                                            </div>

                                            <div class="col-6 col-lg-6 col-md-6 col-sm-6">
                                                <p id="adduser" type="" class="text-dark " style="margin-left:29px;">
                                                    <i class="fa-solid fa-gear mx-2"></i>2979 CC
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <button id="adduser" type="button" class="add_btn btn-success w-100">
                                            Send Enquiry</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-lg-4 col-md-4 col-sm-4 mb-3">
                            <div class="h-auto success__stry__item d-flex flex-column shadow ">
                                <div class="thumb">
                                    <a href="#">
                                        <div class="ratio ratio-16x9">
                                            <img src="assets/images/mahindra-275-di-xp-plus-1686557174.webp"
                                                class="object-fit-cover " alt="img">
                                        </div>
                                    </a>
                                </div>
                                <div class="content d-flex flex-column flex-grow-1 ">
                                    <div class="caption text-center">
                                        <a href="#" class="text-decoration-none text-dark">
                                            <p class="pt-3"><strong
                                                    class="series_tractor_strong text-center h4 fw-bold ">Mahindra 275
                                                    DI XP Plus</strong></p>
                                        </a>
                                    </div>
                                    <div class="power">
                                        <div class="row ">
                                            <div class="col-6 col-lg-6 col-md-6 col-sm-6">
                                                <p class="text-dark"><i
                                                        class="fa-solid fa-location-dot mx-2"></i>Dhamtari</p>
                                            </div>
                                            <div class="col-6 col-lg-6 col-md-6 col-sm-6">
                                                <p class="text-dark" style="margin-left:32px;"><i
                                                        class="fas fa-bolt mx-2"></i>47 HP</p>
                                            </div>
                                            <div class="col-6 col-lg-6 col-md-6 col-sm-6">
                                                <p id="adduser" type="" class="text-dark">
                                                    <i class="fa-solid fa-indian-rupee-sign mx-2"></i>30 per Acre/hr
                                                </p>
                                            </div>

                                            <div class="col-6 col-lg-6 col-md-6 col-sm-6">
                                                <p id="adduser" type="" class="text-dark " style="margin-left:29px;">
                                                    <i class="fa-solid fa-gear mx-2"></i>2979 CC
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <button id="adduser" type="button" class="add_btn btn-success w-100">
                                            Send Enquiry</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-lg-4 col-md-4 col-sm-4 mb-3">
                            <div class="h-auto success__stry__item d-flex flex-column shadow ">
                                <div class="thumb">
                                    <a href="#">
                                        <div class="ratio ratio-16x9">
                                            <img src="assets/images/swaraj-744-fe-1694259976.webp"
                                                class="object-fit-cover " alt="img">
                                        </div>
                                    </a>
                                </div>
                                <div class="content d-flex flex-column flex-grow-1 ">
                                    <div class="caption text-center">
                                        <a href="#" class="text-decoration-none text-dark">
                                            <p class="pt-3"><strong
                                                    class="series_tractor_strong text-center h4 fw-bold ">Swaraj 744
                                                    FE</strong></p>
                                        </a>
                                    </div>
                                    <div class="power">
                                        <div class="row ">
                                            <div class="col-6 col-lg-6 col-md-6 col-sm-6">
                                                <p class="text-dark"><i
                                                        class="fa-solid fa-location-dot mx-2"></i>Dhamtari</p>
                                            </div>
                                            <div class="col-6 col-lg-6 col-md-6 col-sm-6">
                                                <p class="text-dark" style="margin-left:32px;"><i
                                                        class="fas fa-bolt mx-2"></i>47 HP</p>
                                            </div>
                                            <div class="col-6 col-lg-6 col-md-6 col-sm-6">
                                                <p id="adduser" type="" class="text-dark">
                                                    <i class="fa-solid fa-indian-rupee-sign mx-2"></i>30 per Acre/hr
                                                </p>
                                            </div>

                                            <div class="col-6 col-lg-6 col-md-6 col-sm-6">
                                                <p id="adduser" type="" class="text-dark " style="margin-left:29px;">
                                                    <i class="fa-solid fa-gear mx-2"></i>2979 CC
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <button id="adduser" type="button" class="add_btn btn-success w-100">
                                            Send Enquiry</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-lg-4 col-md-4 col-sm-4 mb-3">
                            <div class="h-auto success__stry__item d-flex flex-column shadow ">
                                <div class="thumb">
                                    <a href="#">
                                        <div class="ratio ratio-16x9">
                                            <img src="assets/images/275-di-tu-1632206550.webp" class="object-fit-cover "
                                                alt="img">
                                        </div>
                                    </a>
                                </div>
                                <div class="content d-flex flex-column flex-grow-1 ">
                                    <div class="caption text-center">
                                        <a href="#" class="text-decoration-none text-dark">
                                            <p class="pt-3"><strong
                                                    class="series_tractor_strong text-center h4 fw-bold ">Mahindra 275
                                                    DI TU</strong></p>
                                        </a>
                                    </div>
                                    <div class="power">
                                        <div class="row ">
                                            <div class="col-6 col-lg-6 col-md-6 col-sm-6">
                                                <p class="text-dark"><i
                                                        class="fa-solid fa-location-dot mx-2"></i>Dhamtari</p>
                                            </div>
                                            <div class="col-6 col-lg-6 col-md-6 col-sm-6">
                                                <p class="text-dark" style="margin-left:32px;"><i
                                                        class="fas fa-bolt mx-2"></i>47 HP</p>
                                            </div>
                                            <div class="col-6 col-lg-6 col-md-6 col-sm-6">
                                                <p id="adduser" type="" class="text-dark">
                                                    <i class="fa-solid fa-indian-rupee-sign mx-2"></i>30 per Acre/hr
                                                </p>
                                            </div>

                                            <div class="col-6 col-lg-6 col-md-6 col-sm-6">
                                                <p id="adduser" type="" class="text-dark " style="margin-left:29px;">
                                                    <i class="fa-solid fa-gear mx-2"></i>2979 CC
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <button id="adduser" type="button" class="add_btn btn-success w-100">
                                            Send Enquiry</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-lg-4 col-md-4 col-sm-4 mb-3">
                            <div class="h-auto success__stry__item d-flex flex-column shadow ">
                                <div class="thumb">
                                    <a href="#">
                                        <div class="ratio ratio-16x9">
                                            <img src="assets/images/380-1632220220.webp" class="object-fit-cover "
                                                alt="img">
                                        </div>
                                    </a>
                                </div>
                                <div class="content d-flex flex-column flex-grow-1 ">
                                    <div class="caption text-center">
                                        <a href="#" class="text-decoration-none text-dark">
                                            <p class="pt-3"><strong
                                                    class="series_tractor_strong text-center h4 fw-bold ">Eicher
                                                    380</strong></p>
                                        </a>
                                    </div>
                                    <div class="power">
                                        <div class="row ">
                                            <div class="col-6 col-lg-6 col-md-6 col-sm-6">
                                                <p class="text-dark"><i
                                                        class="fa-solid fa-location-dot mx-2"></i>Dhamtari</p>
                                            </div>
                                            <div class="col-6 col-lg-6 col-md-6 col-sm-6">
                                                <p class="text-dark" style="margin-left:32px;"><i
                                                        class="fas fa-bolt mx-2"></i>47 HP</p>
                                            </div>
                                            <div class="col-6 col-lg-6 col-md-6 col-sm-6">
                                                <p id="adduser" type="" class="text-dark">
                                                    <i class="fa-solid fa-indian-rupee-sign mx-2"></i>30 per Acre/hr
                                                </p>
                                            </div>

                                            <div class="col-6 col-lg-6 col-md-6 col-sm-6">
                                                <p id="adduser" type="" class="text-dark " style="margin-left:29px;">
                                                    <i class="fa-solid fa-gear mx-2"></i>2979 CC
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <button id="adduser" type="button" class="add_btn btn-success w-100">
                                            Send Enquiry</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="col-12 text-center mt-3 pt-2 ">
                        <button id="adduser" type="button" class="add_btn btn btn-success">
                            <i class="fas fa-undo"></i> Load More tractors</button>
                    </div>
                </div>

                <div class="col-12 col-sm-3 col-lg-3 col-md-3">
                    <div class=" row mb-3" id="">
                        <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                            <div class=" row text-center">
                                <div class="col-12 col-sm-6 col-lg-6 col-md-6">
                                    <button id="adduser" type="button" class=" btn add_btn btn-success px-4">
                                        <i class="fas fa-undo"></i> Reset </button>
                                </div>
                                <div class="col-12 col-sm-6 col-lg-6 col-md-6 pe-2">
                                    <button id="adduser" type="button" class=" btn add_btn btn-success">
                                        <i class="fas fa-filter"></i> Apply Filter </button>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class=" mb-3" id="">
                        <div class="force-overflow">
                            <div class="price py-2 ">
                                <h5 class=" ps-3 text-dark fw-bold mb-3">Search By State</h5>
                                <input type="checkbox" class="checkbox-round ms-3" value="0-3" /><span
                                    class="ps-2 fs-6">Chhattisgarh</span><br />
                            </div>
                        </div>
                    </div>
                    <div class="scrollbar mb-3" id="">
                        <div class="force-overflow">
                            <h5 class=" ps-1 text-dark fw-bold pt-2">Search By District</h5>
                            <div class="HP py-2">
                                <input type="checkbox" class="checkbox-round ms-3" value="0-20" /><span
                                    class="ps-2 fs-6">Manendragarh Chirmiri Bharatpur</span><br />
                                <input type="checkbox" class="checkbox-round ms-3" value="21-30" /><span
                                    class="ps-2 fs-6">Koriya</span><br />
                                <input type="checkbox" class="checkbox-round ms-3" value="31-40" /><span
                                    class="ps-2 fs-6">Surajpur</span><br />
                                <input type="checkbox" class="checkbox-round ms-3" value="41-50" /><span
                                    class="ps-2 fs-6">Balrampur</span><br />
                                <input type="checkbox" class="checkbox-round ms-3" value="51-60" /><span
                                    class="ps-2 fs-6">Janjgir Champa</span><br />
                                <input type="checkbox" class="checkbox-round ms-3" value="61-70" /><span
                                    class="ps-2 fs-6">Korba</span><br />
                                <input type="checkbox" class="checkbox-round ms-3" value="71-80" /><span
                                    class="ps-2 fs-6">Raigarh</span><br />
                            </div>
                        </div>
                    </div>
                    <div class="scrollbar mb-3" id="">
                        <div class="force-overflow">
                            <h5 class=" ps-1 text-dark fw-bold pt-2">Search By HP</h5>
                            <div class="HP py-2">
                                <input type="checkbox" class="checkbox-round ms-3" value="0-20" /><span
                                    class="ps-2 fs-6">0 HP - 20 HP</span><br />
                                <input type="checkbox" class="checkbox-round ms-3" value="21-30" /><span
                                    class="ps-2 fs-6">21 HP - 30 HP</span><br />
                                <input type="checkbox" class="checkbox-round ms-3" value="31-40" /><span
                                    class="ps-2 fs-6">31 HP - 40 HP</span><br />
                                <input type="checkbox" class="checkbox-round ms-3" value="41-50" /><span
                                    class="ps-2 fs-6">41 HP - 50 HP</span><br />
                                <input type="checkbox" class="checkbox-round ms-3" value="51-60" /><span
                                    class="ps-2 fs-6">51 HP - 60 HP</span><br />
                                <input type="checkbox" class="checkbox-round ms-3" value="61-70" /><span
                                    class="ps-2 fs-6">61 HP - 75 HP</span><br />
                                <input type="checkbox" class="checkbox-round ms-3" value="71-80" /><span
                                    class="ps-2 fs-6">Above 75 Hp </span><br />
                            </div>
                        </div>
                    </div>
                    <div class="scrollbar mb-3" id=" my-2">
                        <div class="force-overflow">
                            <h5 class=" ps-1 text-dark fw-bold  pt-2">Search By Brand</h5>
                            <div class="HP py-2">
                                <!-- <input type="checkbox" class="text-align-center ms-3" value=""/><span> This is checkbox </span><br /> -->
                                <input type="checkbox" class="checkbox-round ms-3" value="Mahindra" /><span
                                    class="ps-2 fs-6">Mahindra (97)</span><br />
                                <input type="checkbox" class="checkbox-round ms-3" value="Farmtrac" /><span
                                    class="ps-2 fs-6">Farmtrac (21)</span><br />
                                <input type="checkbox" class="checkbox-round ms-3" value="Swaraj" /><span
                                    class="ps-2 fs-6">Swaraj (19)</span><br />
                                <input type="checkbox" class="checkbox-round ms-3" value="Massey" /><span
                                    class="ps-2 fs-6">Massey Ferguson (16)</span><br />
                                <input type="checkbox" class="checkbox-round ms-3" value="Powertrac" /><span
                                    class="ps-2 fs-6">Powertrac (15)</span><br />
                                <input type="checkbox" class="checkbox-round ms-3" value="Sonalika" /><span
                                    class="ps-2 fs-6">Sonalika (15)</span><br />
                                <input type="checkbox" class="checkbox-round ms-3" value="Eicher" /><span
                                    class="ps-2 fs-6">Eicher (12)</span><br />
                                <input type="checkbox" class="checkbox-round ms-3" value="John" /><span
                                    class="ps-2 fs-6">John Deere (6)</span><br />
                                <input type="checkbox" class="checkbox-round ms-3" value="Escorts" /><span
                                    class="ps-2 fs-6">Escorts (13)</span><br />
                                <input type="checkbox" class="checkbox-round ms-3" value="Holland" /><span
                                    class="ps-2 fs-6">New Holland (2)</span><br />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <section class="my-4">
        <div class="container my-5">
            <h3 class="fw-bold assured px-3 py-2">Rent Tractors in India</h3>
            <div class="" role="alert">
                <p class="text-dark py-4 ">Many Farmers hire tractor in India for their farming work. KhetiGaadi
                    provides many tractors which can be hired and farmers can complete their work on time without any
                    delay. Hiring tractors is a common practice in India. Farmers can hire tractors from large number of
                    tractors listed on KhetiGaadi. Farmers can rent a tractor as per the requirement from given list of
                    used tractors of many brands like Mahindra tractor on rent, Mahindra 575 tractor on rent, John Deere
                    tractor on rent, Kubota tractor on rent, New Holland tractor on rent, Swaraj Tractor on rent at
                    suitable tractor rent price. KhetiGaadi provides a feature of hiring a tractor nearby his
                    requirement and save time, money and energy.

                </p>
            </div>
        </div>
    </section>


    <section>
        <div class="container">
            <h4 class="fw-bold assured px-2">Quick Links</h4>
            <div class="row my-4">
                <div class="col-12 col-lg-4 col-md-4 col-sm-4 py-2">
                    <a href="#" id="adduser" class="btn btn-outline-success text-decoration-none border-2 p-2 w-100">
                        <i class="fas fa-bolt"></i>TRACTOR PRICE</a>
                </div>
                <div class="col-12 col-lg-4 col-md-4 col-sm-4 py-2">
                    <a href="#" id="adduser"
                        class=" btn btn-outline-success text-decoration-none border-2 py-2 px-3 w-100">
                        <i class="fas fa-bolt"></i>TRACTOR</a>
                </div>
                <div class="col-12 col-lg-4 col-md-4 col-sm-4 py-2">
                    <a href="#" id="adduser"
                        class=" btn btn-outline-success text-decoration-none border-2 py-2 px-3 w-100">
                        <i class="fas fa-bolt"></i>HARVESTERS</a>
                </div>
                <div class="col-12 col-lg-4 col-md-4 col-sm-4 py-2">
                    <a href="#" id="adduser"
                        class="btn btn-outline-success text-decoration-none  border-2 py-2 px-3 w-100">
                        <i class="fas fa-bolt"></i>SECOND HAND TRACTOR</a>
                </div>
                <div class="col-12 col-lg-4 col-md-4 col-sm-4 py-2">
                    <a href="#" id="adduser"
                        class="btn btn-outline-success text-decoration-none border-2 py-2 px-3 w-100">
                        <i class="fas fa-bolt"></i>EASY FINANCE</a>
                </div>
                <div class="col-12 col-lg-4 col-md-4 col-sm-4 py-2">
                    <a href="#" id="adduser"
                        class="btn btn-outline-success text-decoration-none border-2 py-2 px-3 w-100">
                        <i class="fas fa-bolt"></i>DEALERSHIP</a>
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
    </script>


</html>