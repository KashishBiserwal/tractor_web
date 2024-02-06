<!DOCTYPE html>
<html lang="en">

<head>
<?php
include 'includes/headertag.php';
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
                                <div class="col-12 col-sm-6 col-lg-6 col-md-6">
                                    <button onclick="resetform()" type="button" onclick="resetform()" class="add_btn btn btn-success w-100">
                                    <i class="fas fa-undo"></i>  Reset </button>
                                </div>
                                <div class="col-12 col-sm-6 col-lg-6 col-md-6 pe-2">
                                    <button id="filter_tractor"  type="button" class="add_btn btn btn-success w-100">
                                    <i class="fas fa-filter"></i>  Apply Filter </button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class=" mb-3" id="">
                    <div class="force-overflow">
                        <div class="price py-2 ">
                            <h5 class=" ps-3 text-dark fw-bold mb-3">Search By Budget</h5>
                            <input type="checkbox" class="checkbox-round mt-1 ms-3 budget_checkbox" value="0 - 3"/><span class="ps-2 fs-6"> 0 Lakh - 3 Lakh</span><br />
                            <input type="checkbox" class="checkbox-round mt-1 ms-3 budget_checkbox" value="3 - 6"/><span class="ps-2 fs-6"> 3 Lakh - 6 Lakh</span><br />
                            <input type="checkbox" class="checkbox-round mt-1 ms-3 budget_checkbox" value="6 - 9"/><span class="ps-2 fs-6"> 9 Lakh - 9 Lakh</span><br />
                        </div>
                    </div>
                </div>
                <div class="scrollbar mb-3" id="">
                    <div class="force-overflow">
                    <h5 class=" ps-1 text-dark fw-bold pt-2">Search By HP</h5>
                        <div class="HP py-2">
                            
                            <!-- <input type="checkbox" class="text-align-center ms-3" value=""/><span> This is checkbox </span><br /> -->
                            <input type="checkbox" class="checkbox-round mt-1 ms-3 hp_checkbox" value="0 - 20"/><span class="ps-2 fs-6">0 HP - 20 HP</span><br />
                            <input type="checkbox" class="checkbox-round mt-1 ms-3 hp_checkbox" value="21 - 30"/><span class="ps-2 fs-6">21 HP - 30 HP</span><br />
                            <input type="checkbox" class="checkbox-round mt-1 ms-3 hp_checkbox" value="31 - 40"/><span class="ps-2 fs-6">31 HP - 40 HP</span><br />
                            <input type="checkbox" class="checkbox-round mt-1 ms-3 hp_checkbox" value="41 - 50"/><span class="ps-2 fs-6">41 HP - 50 HP</span><br />
                            <input type="checkbox" class="checkbox-round mt-1 ms-3 hp_checkbox" value="51 - 60"/><span class="ps-2 fs-6">51 HP - 60 HP</span><br />
                            <input type="checkbox" class="checkbox-round mt-1 ms-3 hp_checkbox" value="61 - 70"/><span class="ps-2 fs-6">61 HP - 70 HP</span><br />
                            <input type="checkbox" class="checkbox-round mt-1 ms-3 hp_checkbox" value="71 - 80"/><span class="ps-2 fs-6">71 HP - 80 HP</span><br />
                            <input type="checkbox" class="checkbox-round mt-1 ms-3 hp_checkbox" value="81 - 90"/><span class="ps-2 fs-6">81 HP - 90 HP</span><br />
                            <input type="checkbox" class="checkbox-round mt-1 ms-3 hp_checkbox" value="91 - 100"/><span class="ps-2 fs-6">91 HP - 100 HP</span><br />
                            <input type="checkbox" class="checkbox-round mt-1 ms-3 hp_checkbox" value="101 - 110"/><span class="ps-2 fs-6">101 HP - 110 HP</span><br />
                            <input type="checkbox" class="checkbox-round mt-1 ms-3 hp_checkbox" value="111 - 120"/><span class="ps-2 fs-6">111 HP - 120 HP</span><br />
                        </div>
                    </div>
                </div>
                <div class="scrollbar mb-3" id="">
                    <div class="force-overflow">
                            <h5 class="ps-1 text-dark fw-bold pt-2">Search By Brand</h5>
                            <div class="HP py-2" id="checkboxContainer">
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
            // console.log($('#hire_inner').valid());
        });
    });
    </script>


</html>


