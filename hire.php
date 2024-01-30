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
<script src="<?php $baseUrl; ?>model/hire_customer.js"></script>
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


    .custom-font-size {
        font-size: 10.3px;
    }
    </style>
</head>

<body>
    <?php
   include 'includes/header.php';
   ?>

    <section class="mt-5 pt-4 bg-light">
        <div class="container-fullwidth py-2">
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
        <div class="container-fullwidth my-4">
            <div class="row">
                <div class="col-12 col-sm-9 col-lg-9 col-md-9">
                    <h3 class="pb-3 fw-bold">Search<span class="text-success fw-bold"> Rental Tractors In INDIA</span>
                    </h3>
                    <div class="row" id="productContainer">
                        <!-- <div class="col-12 col-lg-4 col-md-6 col-sm-6 mb-3">
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
                                            <p class="pt-3 " style="font-size: 17px;"><strong
                                                    class="series_tractor_strong text-center fw-bold ">Mahindra 575
                                                    DI XP Plus</strong></p>
                                        </a>
                                    </div>
                                    <div class="power">
                                        <a href="hire_inner.php" class="text-decoration-none text-dark">
                                            <div class="row text-center">
                                                <div class=" col-4 col-md-4 col-lg-4 col-sm-4">
                                                    <p class="text-dark custom-font-size fw-bold"> <i
                                                            class="fa-solid fa-indian-rupee-sign"></i> 30/Acre</p>
                                                </div>
                                                <div class="col-4 col-md-4 col-lg-4 col-sm-4">
                                                    <p class="text-dark custom-font-size fw-bold"> <i
                                                            class="fas fa-bolt "></i> 47 HP</p>
                                                </div>

                                                <div class=" col-4 col-md-4 col-lg-4 col-sm-4">
                                                    <p class="text-dark custom-font-size fw-bold"><i
                                                            class="fa-solid fa-gear"></i> 2979 CC</p>
                                                </div>
                                            </div>
                                            <div class="row text-center fw-bold text-primary">
                                                <div class=" col-12 mb-2">
                                                    Dhamtari,Chhattisgarh
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
                            <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static"
                                data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel"
                                aria-hidden="true">
                                <div class="modal-dialog modal-lg modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title text-dark fw-bold" id="staticBackdropLabel">Send
                                                Rental Enquiry Mahindra 575 DI XP Plus</h4>
                                                <button type="button" class="btn-close btn-success" data-bs-dismiss="modal" aria-label="Close"><img src="assets/images/close.png" class="w-25"></button>
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
                                                                    <option selected disabled>Select State </option>
                                                                    <option value="chhattisgarh">Chhattisgarh</option>
                                                                    <option value="others">Others</option>
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
                                                                    <option selected disabled>Select District</option>
                                                                    <option value="raipur">Raipur</option>
                                                                    <option value="bilaspur">Bilaspur</option>
                                                                    <option value="ambikapur">Ambikapur</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-12 col-sm-12 col-md-4 col-lg-4 mt-4">
                                                            <div class="form-outline">
                                                                <label class="form-label" for="taluka">Tehsil</label>
                                                                <select class="form-select py-2"
                                                                    aria-label="Default select example" name="taluka"
                                                                    id="taluka">
                                                                    <option selected disabled>Select Tehsil</option>
                                                                    <option value="raipur">Raipur</option>
                                                                    <option value="bilaspur">Bilaspur</option>
                                                                    <option value="ambikapur">Ambikapur</option>
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
                        </div> -->

                    </div>
                    <div class="col-12 text-center mt-3 pt-2 ">
                    <button id="loadMoreBtn" type="button" class="add_btn btn btn-success mt-4 shadow">
                        <i class="fas fa-undo"></i>  Load More Tractor </button>
                    </div>
                </div>

                <div class="col-12 col-sm-3 col-lg-3 col-md-3">
                <div class=" row mb-3" id="">
                        <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                            <div class=" row text-center">
                                <div class="col-12 col-sm-6 col-lg-6 col-md-6 g-1">
                                    <button id="adduser" type="button" class="add_btn btn btn-success">
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
                            <h5 class=" text-dark text-center fw-bold pt-2">Search By HP</h5>
                            <div class="HP py-2" style="margin: 0 auto;">
                                <div class=" d-flex">
                                    <input type="checkbox" class="checkbox-round ms-3 mt-1" value="0-20" /><span
                                        class="ps-2 fs-6">0 HP - 20 HP</span><br />
                                </div>
                                <div class=" d-flex">
                                    <input type="checkbox" class="checkbox-round ms-3 mt-1" value="21-30" /><span
                                        class="ps-2 fs-6">21 HP - 30 HP</span><br />
                                </div>
                                <div class=" d-flex">
                                    <input type="checkbox" class="checkbox-round ms-3 mt-1" value="31-40" /><span
                                        class="ps-2 fs-6">31 HP - 40 HP</span><br />
                                </div>
                                <div class=" d-flex">
                                    <input type="checkbox" class="checkbox-round ms-3 mt-1" value="41-50" /><span
                                        class="ps-2 fs-6">41 HP - 50 HP</span><br />
                                </div>
                                <div class=" d-flex">
                                    <input type="checkbox" class="checkbox-round ms-3 mt-1" value="51-60" /><span
                                        class="ps-2 fs-6">51 HP - 60 HP</span><br />
                                </div>
                                <div class=" d-flex">
                                    <input type="checkbox" class="checkbox-round ms-3 mt-1" value="61-70" /><span
                                        class="ps-2 fs-6">61 HP - 75 HP</span><br />
                                </div>
                                <div class=" d-flex">
                                    <input type="checkbox" class="checkbox-round ms-3 mt-1" value="71-80" /><span
                                        class="ps-2 fs-6">Above 75 Hp </span><br />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="scrollbar mb-3" id=" my-2">
                        <div class="force-overflow">
                            <h5 class=" text-dark text-center fw-bold  pt-2">Search By Brand</h5>
                            <div class="HP py-2"  style="margin: 0 auto;">

                                <div class=" d-flex">
                                    <input type="checkbox" class="checkbox-round ms-3 mt-1 " value="Mahindra" /><span
                                        class="ps-2 fs-6">Mahindra (97)</span><br />
                                </div>
                                <div class=" d-flex">
                                    <input type="checkbox" class="checkbox-round ms-3 mt-1" value="Farmtrac" /><span
                                        class="ps-2 fs-6">Farmtrac (21)</span><br />
                                </div>
                                <div class=" d-flex">
                                    <input type="checkbox" class="checkbox-round ms-3 mt-1" value="Swaraj" /><span
                                        class="ps-2 fs-6">Swaraj (19)</span><br />
                                </div>
                                <div class=" d-flex">
                                    <input type="checkbox" class="checkbox-round ms-3 mt-1" value="Massey" /><span
                                        class="ps-2 fs-6">Massey Ferguson (16)</span><br />
                                </div>
                                <div class=" d-flex">
                                    <input type="checkbox" class="checkbox-round ms-3 mt-1" value="Powertrac" /><span
                                        class="ps-2 fs-6">Powertrac (15)</span><br />
                                </div>
                                <div class=" d-flex">
                                    <input type="checkbox" class="checkbox-round ms-3 mt-1" value="Sonalika" /><span
                                        class="ps-2 fs-6">Sonalika (15)</span><br />
                                </div>
                                <div class=" d-flex">
                                    <input type="checkbox" class="checkbox-round ms-3 mt-1" value="Eicher" /><span
                                        class="ps-2 fs-6">Eicher (12)</span><br />
                                </div>
                                <div class=" d-flex">
                                    <input type="checkbox" class="checkbox-round ms-3 mt-1" value="John" /><span
                                        class="ps-2 fs-6">John Deere (6)</span><br />
                                </div>
                                <div class=" d-flex">
                                    <input type="checkbox" class="checkbox-round ms-3 mt-1" value="Escorts" /><span
                                        class="ps-2 fs-6">Escorts (13)</span><br />
                                </div>
                                <div class=" d-flex">
                                    <input type="checkbox" class="checkbox-round ms-3 mt-1" value="Holland" /><span
                                        class="ps-2 fs-6">New Holland (2)</span><br />
                                </div>
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