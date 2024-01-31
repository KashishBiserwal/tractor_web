<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    include 'includes/headertag.php';
    // include 'includes/headertagadmin.php';
   include 'includes/footertag.php';
   
   ?> 
  <script> var APIBaseURL = "<?php echo $APIBaseURL; ?>";</script>
  <script> var baseUrl = "<?php echo $baseUrl; ?>";</script>
  <script src="<?php $baseUrl; ?>model/4wd.js"></script>
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

                    <span class="text-dark"> Popular Tractor</span>
                </span>
            </div>
        </div>
    </section>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-9 col-lg-9 col-md-9 mt-3">
                    <h3 class="pb-3 fw-bold">4WD Tractors</h3>
                    <div id="productContainer4wd" class="row">
                    </div>
                    <div class="col-12 text-center mt-3 mb-4 pt-2 ">
                    <button id="load_moretract" type="button" class=" btn add_btn btn-success">
                    <i class="fas fa-undo"></i>  Load More tractors</button>
                    </div>
                </div>

                <div class="col-12 col-sm-3 col-lg-3 col-md-3 mt-3">
                    <div class=" row mb-3" id="">
                        <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                            <div class=" row text-center">
                                <div class="col-12 col-sm-6 col-lg-6 col-md-6">
                                    <button onclick="resetform()" type="button" class=" btn add_btn btn-success px-4">
                                        <i class="fas fa-undo"></i> Reset </button>
                                </div>
                                <div class="col-12 col-sm-6 col-lg-6 col-md-6 pe-2">
                                <button id="filter_tractor" type="button" class=" btn add_btn btn-success">
                                <i class="fas fa-filter"></i>Apply Filter</button>
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
                                <input type="checkbox" class="checkbox-round ms-3" value="0 - 20" /><span
                                    class="ps-2 fs-6">Manendragarh Chirmiri Bharatpur</span><br />
                                <input type="checkbox" class="checkbox-round ms-3" value="21 - 30" /><span
                                    class="ps-2 fs-6">Koriya</span><br />
                                <input type="checkbox" class="checkbox-round ms-3" value="31 - 40" /><span
                                    class="ps-2 fs-6">Surajpur</span><br />
                                <input type="checkbox" class="checkbox-round ms-3" value="41 - 50" /><span
                                    class="ps-2 fs-6">Balrampur</span><br />
                                <input type="checkbox" class="checkbox-round ms-3" value="51 - 60" /><span
                                    class="ps-2 fs-6">Janjgir Champa</span><br />
                                <input type="checkbox" class="checkbox-round ms-3" value="61 - 70" /><span
                                    class="ps-2 fs-6">Korba</span><br />
                                <input type="checkbox" class="checkbox-round ms-3" value="71 - 80" /><span
                                    class="ps-2 fs-6">Raigarh</span><br />
                            </div>
                        </div>
                    </div>
                    <div class="scrollbar mb-3" id="">
                        <div class="force-overflow">
                            <h5 class=" ps-1 text-dark fw-bold pt-2">Search By HP</h5>
                            <div class="HP py-2">
                                <input type="checkbox" class="checkbox-round ms-3" value="0 - 20" /><span
                                    class="ps-2 fs-6">0 HP - 20 HP</span><br />
                                <input type="checkbox" class="checkbox-round ms-3" value="21 - 30" /><span
                                    class="ps-2 fs-6">21 HP - 30 HP</span><br />
                                <input type="checkbox" class="checkbox-round ms-3" value="31 - 40" /><span
                                    class="ps-2 fs-6">31 HP - 40 HP</span><br />
                                <input type="checkbox" class="checkbox-round ms-3" value="41 - 50" /><span
                                    class="ps-2 fs-6">41 HP - 50 HP</span><br />
                                <input type="checkbox" class="checkbox-round ms-3" value="51 - 60" /><span
                                    class="ps-2 fs-6">51 HP - 60 HP</span><br />
                                <input type="checkbox" class="checkbox-round ms-3" value="61 - 70" /><span
                                    class="ps-2 fs-6">61 HP - 75 HP</span><br />
                                <input type="checkbox" class="checkbox-round ms-3" value="71 - 80" /><span
                                    class="ps-2 fs-6">Above 75 Hp </span><br />
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



    <section>
        <div class="container">
            <h3 class="fw-bold assured px-2"> About 4WD Tractors</h3>
            <div class="" role="alert">
                <p class="text-dark" id="4wd_descrip"></p>
            </div>
        </div>
    </section>


    <section>
        <div class="container">
            <h4 class="fw-bold assured px-2">Tractors By HP</h4>
            <div class="row my-4">
                <div class="col-12 col-lg-4 col-md-4 col-sm-4 py-2">
                    <a href="#" id="adduser" class="btn btn-outline-success text-decoration-none border-2 p-2 w-100">
                        <i class="fas fa-bolt"></i>UNDER 20 HP</a>
                </div>
                <div class="col-12 col-lg-4 col-md-4 col-sm-4 py-2">
                    <a href="#" id="adduser"
                        class=" btn btn-outline-success text-decoration-none border-2 py-2 px-3 w-100">
                        <i class="fas fa-bolt"></i>21-30 HP</a>
                </div>
                <div class="col-12 col-lg-4 col-md-4 col-sm-4 py-2">
                    <a href="#" id="adduser"
                        class=" btn btn-outline-success text-decoration-none border-2 py-2 px-3 w-100">
                        <i class="fas fa-bolt"></i>31-40 HP</a>
                </div>
                <div class="col-12 col-lg-4 col-md-4 col-sm-4 py-2">
                    <a href="#" id="adduser"
                        class="btn btn-outline-success text-decoration-none  border-2 py-2 px-3 w-100">
                        <i class="fas fa-bolt"></i>41-45 HP</a>
                </div>
                <div class="col-12 col-lg-4 col-md-4 col-sm-4 py-2">
                    <a href="#" id="adduser"
                        class="btn btn-outline-success text-decoration-none border-2 py-2 px-3 w-100">
                        <i class="fas fa-bolt"></i>46-50 HP</a>
                </div>
                <div class="col-12 col-lg-4 col-md-4 col-sm-4 py-2">
                    <a href="#" id="adduser"
                        class="btn btn-outline-success text-decoration-none border-2 py-2 px-3 w-100">
                        <i class="fas fa-bolt"></i>51-60 HP</a>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <h4 class="fw-bold assured px-2">Tractors By Price</h4>
            <div class="row my-4">
                <div class="col-12 col-lg-4 col-md-4 col-sm-4 py-2">
                    <a href="#" id="adduser" class="btn btn-outline-success text-decoration-none border-2 p-2 w-100">
                        <i class="fas fa-bolt"></i>UNDER 3 LAKH</a>
                </div>
                <div class="col-12 col-lg-4 col-md-4 col-sm-4 py-2">
                    <a href="#" id="adduser"
                        class=" btn btn-outline-success text-decoration-none border-2 py-2 px-3 w-100">
                        <i class="fas fa-bolt"></i>3-5 LAKH</a>
                </div>
                <div class="col-12 col-lg-4 col-md-4 col-sm-4 py-2">
                    <a href="#" id="adduser"
                        class=" btn btn-outline-success text-decoration-none border-2 py-2 px-3 w-100">
                        <i class="fas fa-bolt"></i>5-7 LAKH</a>
                </div>
                <div class="col-12 col-lg-4 col-md-4 col-sm-4 py-2">
                    <a href="#" id="adduser"
                        class="btn btn-outline-success text-decoration-none  border-2 py-2 px-3 w-100">
                        <i class="fas fa-bolt"></i>7-10 LAKH</a>
                </div>
                <div class="col-12 col-lg-4 col-md-4 col-sm-4 py-2">
                    <a href="#" id="adduser"
                        class="btn btn-outline-success text-decoration-none border-2 py-2 px-3 w-100">
                        <i class="fas fa-bolt"></i>ABOVE 10 LAKH</a>
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