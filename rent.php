<!DOCTYPE html>
<html lang="en">

<head>
    <?php
				include 'includes/headertag.php';
			?>
    <style>
    #my-form {
        text-align: center;
        position: relative;
        margin-top: 20px;
    }

    #my-form .field-set {
        background: white;
        border: 0 none;
        border-radius: 0.5rem;
        box-sizing: border-box;
        width: 100%;
        margin: 0;
        padding-bottom: 20px;
        position: relative;
    }

    #my-form .field-set:not(:first-of-type) {
        display: none
    }

    #my-form .previous-step,
    .next-step {
        width: 110px;
        font-weight: bold;
        color: white;
        border: 0 none;
        border-radius: 0px;
        cursor: pointer;
        padding: 10px 5px;
        margin: 10px 5px 10px 0px;
        display: inline-block;
    }

    .previous-step {
        background: #d21515;
    }

    .text {
        color: #2F8D46;
        font-weight: normal
    }

    #progress_bar {
        margin-bottom: -5px;
        overflow: hidden;
        color: lightgrey
    }

    #progress_bar .active_rent {
        color: #2F8D46
    }

    #progress_bar li {
        list-style-type: none;
        font-size: 15px;
        width: 20%;
        float: left;
        position: relative;
        font-weight: 400
    }

    #progress_bar #step1:before {
        content: "1";
        z-index: 999;
        position: relative;
    }

    #progress_bar #step2:before {
        content: "2";
        z-index: 999;
        position: relative;
    }

    #progress_bar #step3:before {
        content: "3";
        z-index: 999;
        position: relative;
    }

    #progress_bar #step4:before {
        content: "4";
        z-index: 999;
        position: relative;
    }

    #progress_bar #step5:before {
        content: "5";
        z-index: 999;
        position: relative;
    }

    #progress_bar li:before {
        width: 30px;
        height: 34px;
        line-height: 35px;
        display: block;
        font-size: 20px;
        color: #f4eeee;
        background: lightgray;
        border-radius: 100%;
        margin: 0 auto 30px auto;
    }

    #progress_bar li:after {
        content: '';
        width: 100%;
        height: 2px;
        background: rgb(246, 243, 243);
        position: absolute;
        left: 0;
        top: 19px;
        z-index: -1px;
    }

    #progress_bar li.active_rent:before,
    #progress_bar li.active_rent:after {
        background: #2F8D46
    }

    .progress1 {
        height: 1px;
    }

    .progress_bar {
        background-color: #2F8D46
    }

    #image {
        width: 83px;
        height: 50px;
    }

    .form-outline .form-label {
        color: #454444;
        font-weight: 500;
        font-size: 18px;
        margin-bottom: 5px;
        position: absolute;
        margin-top: -12px;
        background: #fff;
        margin-left: -98px;
    }

    .loan_form_rent {
        margin-top: -282px;
    }
    </style>
</head>

<body>
    <?php
   include 'includes/header.php';
   ?>
    <section class=" mt-5 pt-5 bg-light">
        <div class="container pt-3">
            <div class="py-2">
                <span class="text-white ">
                    <a href="index.php" class="text-decoration-none header-link px-1">Home <i
                            class="fa-solid fa-chevron-right px-1"></i>
                    </a>
                    <span class="">
                        <span class="text-dark header-link  px-1">Enquiries <i
                                class="fa-solid fa-chevron-right px-1"></i>
                        </span>
                    </span>
                    <span class="text-dark">All Loan</span>
                </span>
            </div>
        </div>
    </section>
    <!--Banner-->
    <div class="container-fluid">
        <div class="row siv" id="">
            <img src="assets/images/rent.jpg" alt="reload img" class="w-100" style="height: 400px;">
            <div class="container-mid">
                <div class="row justify-content-center loan_form_rent bg-light  w-100 shadow">
                    <h1 class="text-dark text-center fw-bold mt-3">Rent Your Tractors and Implements</h1>
                    <div class="col-10 col-sm-8 col-md-8 col-lg-10 col-xl-10 text-center p-0 mt-3 mb-2">
                        <div id="my-form">
                            <ul id="progress_bar">
                                <li class="active_rent" id="step1">
                                    <strong></strong>
                                </li>
                                <li id="step2"><strong></strong></li>
                                <li id="step3"><strong></strong></li>
                                <li id="step4"><strong></strong></li>
                                <li id="step5"><strong></strong></li>
                            </ul>
                            <div class="progress1">
                                <div class="progress_bar"></div>
                            </div>
                            <fieldset class="field-set">
                                <h3 class="fw-bold">Popular Brands</h3>
                                <select class="form-select form-select-lg mt-4 fw-bold border border-dark "
                                    aria-label=".form-select-sm example">
                                    <option selected>More</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                                <div name="next-step" class="next-step mx-2 shadow p-3 ">
                                    <img src="assets\images\Mahindralogo.png" alt="Button Image" id="image">
                                </div>
                                <div name="next-step" class="next-step mx-2 shadow p-3 ">
                                    <img src="assets\images\johndeerelogo.png" alt="Button Image" id="image">
                                </div>
                                <div name="next-step" class="next-step mx-2 shadow p-3 ">
                                    <img src="assets\images\sonalika.png" alt="Button Image" id="image">
                                </div>

                                <div name="next-step" class="next-step mx-2 shadow p-3">
                                    <img src="assets\images\swarajlogo.webp" alt="Button Image" id="image">
                                </div>
                                <div name="next-step" class="next-step mx-2 shadow p-3">
                                    <img src="assets\images\massey-ferguson-1579512590.webp" alt="Button Image"
                                        id="image">
                                </div>
                                <div name="next-step" class="next-step mx-2 shadow p-3">
                                    <img src="assets\images\New-Holland-Logo.png" alt="Button Image" id="image">
                                </div>

                                <button type="button" name="next-step"
                                    class="next-step text-light bg-dark ">Next</button>

                            </fieldset>
                            <fieldset class="field-set">
                                <h3 class="fw-bold">Popular Models</h3>
                                <select class="form-select form-select-lg mt-4 fw-bold border border-dark"
                                    aria-label=".form-select-sm example">
                                    <option selected>More</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                                <input type="button" name="next-step" class="next-step text-dark mx-2 shadow "
                                    value="5038 D">
                                <input type="button" name="next-step" class="next-step  text-dark mx-2 shadow "
                                    value="5042 D">
                                <input type="button" name="next-step" class="next-step text-dark mx-2 shadow "
                                    value=" 5050D">
                                <input type="button" name="next-step" class="next-step text-dark mx-2 shadow "
                                    value="   5050 E " />
                                <input type="button" name="next-step" class="next-step text-dark mx-2 shadow "
                                    value="  5055E 2WD " />
                                <input type="button" name="next-step" class="next-step text-dark mx-2 shadow "
                                    value="5060E " />
                                <button type="button" name="previous-step" class="previous-step ">Previous</button>
                                <button type="button" name="next-step" class="next-step text-light bg-dark d-inline "
                                    value=" More">Next</button>
                            </fieldset>
                            <fieldset class="field-set">
                                <h3 class="fw-bold">Tractor Registration Year (As per RC)</h3>
                                <h6>Last 15 registration years</h6>
                                <select class="form-select form-select-lg mt-4 fw-bold border border-dark"
                                    aria-label=".form-select-sm example">
                                    <option selected>More</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                                <input type="button" name="next-step" class="next-step text-dark" value="2008" />
                                <input type="button" name="next-step" class="next-step text-dark" value="2009" />
                                <input type="button" name="next-step" class="next-step text-dark" value="2010" />
                                <input type="button" name="next-step" class="next-step text-dark" value="2011" />
                                <input type="button" name="next-step" class="next-step text-dark" value="2012" />
                                <input type="button" name="next-step" class="next-step text-dark" value="2013" />
                                <input type="button" name="next-step" class="next-step text-dark" value="2014" />
                                <input type="button" name="next-step" class="next-step text-dark" value="2015" />
                                <input type="button" name="next-step" class="next-step text-dark" value="2016" />
                                <input type="button" name="next-step" class="next-step text-dark" value="2017" />
                                <input type="button" name="next-step" class="next-step text-dark" value="2018" />
                                <input type="button" name="next-step" class="next-step text-dark" value="2019" />
                                <button type="button" name="previous-step" class="previous-step ">Previous</button>
                                <button type="button" name="next-step"
                                    class="next-step  text-light bg-dark">Next</button>

                            </fieldset>
                            <div class="field-set">
                                <!-- <form id="myform_rent" name="myform_rent" method="post"> -->
                                <div class="row">

                                    <div class="col-12 col-sm-12 col-md-4 col-lg-4 mt-4">

                                        <div class="form-outline">
                                            <label class="form-label" for="implement_type">Implement Type</label>
                                            <select class="form-select py-2" name="implement_type" id="implement_type"
                                                aria-label="Default select example">
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
                                            <label class="form-label" for="image">Image</label>
                                            <input type="file" id="img" name="image"
                                                class=" data_search form-control input-group-sm py-2" />
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-12 col-md-4 col-lg-4 mt-4">
                                        <div class="form-outline">
                                            <label class="form-label" for="rate">Rate</label>
                                            <input type="text" id="rate" name="rate"
                                                class=" data_search form-control input-group-sm py-2" />
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-12 col-md-4 col-lg-4 mt-4">
                                        <div class="form-outline">
                                            <label class="form-label" for="rate_per">Rate Per</label>
                                            <select class="form-select py-2" id="rate_per" name="rate_per"
                                                aria-label="Default select example">
                                                <option selected></option>
                                                <option value="1">name1</option>
                                                <option value="2">name2</option>
                                                <option value="3">name3</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-12 col-md-4 col-lg-4 mt-4">
                                        <div class="form-outline">
                                            <label class="form-label" for="working_radius">Working Radius</label>
                                            <input type="text" name="working_radius" id="working_radius"
                                                class=" data_search form-control input-group-sm py-2" />
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-12 col-md-4 col-lg-4 mt-4">
                                        <div class="form-outline">
                                            <label class="form-label">Note(if any)</label>
                                            <textarea class=" data_search form-control input-group-sm py-2" rows="1"
                                                cols="70"></textarea>
                                        </div>
                                    </div>

                                </div>
                                <div id="extend-field"></div>
                                <button type="button" id="extend" class="text-light bg-success fw-bold mt-2 mx-1">+</button>
                                <button type="button" name="previous-step" class="previous-step">Previous</button>
                                <button type="button" name="next-step"
                                    class="next-step  text-light bg-dark">Next</button>

                                <!-- </form> -->

                            </div>
                            <fieldset class="field-set">
                                <!-- <form id="myform_register" name="myform_register" method="post"> -->
                                <div class="row">
                                    <div class="col-12 col-sm-12 col-md-4 col-lg-4 mt-4">
                                        <div class="form-outline">
                                            <label class="form-label" for="first_name">First Name</label>
                                            <input type="text" id="first_name" name="first_name"
                                                class=" data_search form-control input-group-sm py-2" />
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-12 col-md-4 col-lg-4 mt-4">
                                        <div class="form-outline">
                                            <label class="form-label" for="last_name">Last Name</label>
                                            <input type="text" id="last_name" name="last_name"
                                                class=" data_search form-control input-group-sm py-2" />
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-12 col-md-4 col-lg-4 mt-4">
                                        <div class="form-outline">
                                            <label class="form-label" for="mobile_number">Mobile Number</label>
                                            <input type="text" id="mobile_number" name="mobile_number"
                                                class=" data_search form-control input-group-sm py-2" />
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-12 col-md-4 col-lg-4 mt-4">
                                        <div class="form-outline">
                                            <label class="form-label" for="email">Email Id</label>
                                            <input type="text" id="email" name="email"
                                                class=" data_search form-control input-group-sm py-2" />
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-12 col-md-4 col-lg-4 mt-4">
                                        <div class="form-outline">
                                            <label class="form-label" for="state">State</label>
                                            <select class="form-select py-2" aria-label="Default select example"
                                                id="state" name="state">
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
                                            <label class="form-label" for="district">District</label>
                                            <select class="form-select py-2" aria-label="Default select example"
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
                                            <label class="form-label" for="taluka">Tehsil</label>
                                            <select class="form-select py-2" aria-label="Default select example"
                                                name="taluka" id="taluka">
                                                <option selected></option>
                                                <option value="1">name1</option>
                                                <option value="2">name2</option>
                                                <option value="3">name3</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <button type="button" name="previous-step" class="previous-step">Previous</button>
                                <button type="button" name="next-step" class="next-step text-light bg-success"
                                    id="button_register">Register</button>
                                <!-- </form> -->
                            </fieldset>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="container mt-5">
        <h3 class="text-center mb-4 fw-bold ">EASY RENTAL FOR TRACTOR AND IMPLEMENT</h3>
        <div class="row">
            <div class="col-12 col-md-4 col-lg-4 col-sm-4 ">
                <div class="card shadow ">
                    <img src="assets\images\phone.png" class="card-img-top images" alt="Tractor Insurance 1"
                        style="height: 250px;">
                    <div class="card-body">
                        <h5 class="card-title text-center  fw-bold ">Tractor & Implement</h5>
                        <p class="card-text text-center">List your tractors and implements for additional income</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-4 col-lg-4 col-sm-4 ">
                <div class="card shadow ">
                    <img src="assets\images\quick.png" class="card-img-top images " alt="Tractor Insurance 2"
                        style="height: 250px;">
                    <div class="card-body">
                        <h5 class="card-title text-center  fw-bold ">Quick Information</h5>
                        <p class="card-text text-center">List your or implement with minimun information and earning
                            additional income
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-4 col-lg-4 col-sm-4 ">
                <div class="card shadow">
                    <img src="assets\images\rent_tractor.jpg" class="card-img-top images" alt="Tractor Insurance 3"
                        style="height: 250px;">
                    <div class="card-body">
                        <h5 class="card-title text-center  fw-bold ">Rent Tractor</h5>
                        <p class="card-text text-center">Start renting your tractors and implement easy near by you</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <h4 class="mt-5 mb-4 assured px-2 fw-bold">Popular Tractor Insurance Companies</h4>
        <p> Rent tractors are also the best options for some farmers who are looking to purchase on a minimum budget.
            Renting tractors with a few years of work can be the best way to work in the fields for a long time. Though,
            it requires a little maintenance but maintaining it with a proper interval of time reduces time and money.
        </p>
        <p>KhetiGaadi Rent page helps farmers to get tractors on a rent basis. Also, if they wish to sell their products
            on
            a rental basis for various brands then KhetiGaadi is the best option.</p>
        <p>Tractor Rental in India is additional income for farmers. Many farmers buy tractors for both personal and
            commercial use. For such Farmers, KhetiGaadi provides a platform where a Farmer can list his tractor on
            KhetiGaadi and rent out Tractors to needy farmers. There are many tractors available on KhetiGaadi for
            rental
            purpose in India. Farmers can rent their tractors of all brands like Mahindra tractor on rent, Mahindra 575
            tractor on rent, John Deere tractor on rent, Kubota tractor on rent, New Holland tractor on rent, Swaraj
            tractor
            on rent at mutually agreed tractor rent priceTractor Rental in India is additional income for farmers. Many
            farmers buy tractors for both personal and commercial use. For such Farmers KhetiGaadi provides a platform
            where
            a Farmer can list his tractor on KhetiGaadi and rent out Tractors to needy farmers. There are many tractors
            available on KhetiGaadi for rental purpose in India. Farmers can rent their tractors of all brands like
            Mahindra
            tractor on rent, Mahindra 575 tractor on rent, John Deere tractor on rent, Kubota tractor on rent, New
            Holland
            tractor on rent, Swaraj tractor on rent at mutually agreed tractor rent price.</p>
    </div>
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
   <script type="text/javascript"></script>
    <script>
    $(document).ready(function() {
        var currentGfgStep, nextGfgStep, previousGfgStep;
        var opacity;
        var current = 1;
        var steps = $(".field-set").length;
        setProgressBar(current);
        $(".next-step").click(function() {
            currentGfgStep = $(this).parent();
            nextGfgStep = $(this).parent().next();
            $("#progress_bar li").eq($(".field-set")
                .index(nextGfgStep)).addClass("active_rent");
            nextGfgStep.show();
            currentGfgStep.animate({
                opacity: 0
            }, {
                step: function(now) {
                    opacity = 1 - now;
                    currentGfgStep.css({
                        'display': 'none',
                        'position': 'relative'
                    });
                    nextGfgStep.css({
                        'opacity': opacity
                    });
                },
                duration: 500
            });
            setProgressBar(++current);
        });
        $(".previous-step").click(function() {
            currentGfgStep = $(this).parent();
            previousGfgStep = $(this).parent().prev();
            $("#progress_bar li").eq($(".field-set")
                .index(currentGfgStep)).removeClass("active_rent");
            previousGfgStep.show();
            currentGfgStep.animate({
                opacity: 0
            }, {
                step: function(now) {
                    opacity = 1 - now;
                    currentGfgStep.css({
                        'display': 'none',
                        'position': 'relative'
                    });
                    previousGfgStep.css({
                        'opacity': opacity
                    });
                },
                duration: 500
            });
            setProgressBar(--current);
        });

        function setProgressBar(currentStep) {
            var percent = parseFloat(100 / steps) * current;
            percent = percent.toFixed();
            $(".progress_bar")
                .css("width", percent + "%")
        }
        $(".submit").click(function() {
            return false;
        })
    });
    $(document).ready(function() {
        $("#extend").click(function(e) {
            e.preventDefault();
            $("#extend-field").append(
                '<div><div class=row><div class="col-12 col-lg-4 col-md-4 col-sm-12 mt-4"><div class=form-outline><label class=form-label>Implement Type</label> <select aria-label="Default select example"class="py-2 form-select"><option value=#><option value=1>New Tractor Loan<option value=2>Used Tractor Loan,<option value=3>Loan Against Tractor<option value=4>Harvester Loan<option value=5>Used Harvester Loan<option value=6>Implement Loan<option value=7>Personal Loan</select></div></div><div class="col-12 col-lg-4 col-md-4 col-sm-12 mt-4"><div class=form-outline><label class=form-label>Image</label> <input class="py-2 data_search form-control input-group-sm"name=search_name id=name type=file></div></div><div class="col-12 col-lg-4 col-md-4 col-sm-12 mt-4"><div class=form-outline><label class=form-label>Rate</label> <input class="py-2 data_search form-control input-group-sm"name=search_name id=name></div></div><div class="col-12 col-lg-4 col-md-4 col-sm-12 mt-4"><div class=form-outline><label class=form-label>Rate Per</label> <select aria-label="Default select example"class="py-2 form-select"><option selected><option value=1>name1<option value=2>name2<option value=3>name3</select></div></div><div class="col-12 col-lg-4 col-md-4 col-sm-12 mt-4"><div class=form-outline><label class=form-label>Working Radius</label> <input class="py-2 data_search form-control input-group-sm"name=search_name></div></div><div class="col-12 col-lg-4 col-md-4 col-sm-12 mt-4"><div class=form-outline><label class=form-label>Note(if any)</label> <textarea class="py-2 data_search form-control input-group-sm"cols=70 rows=1></textarea></div></div></div><a class="add-text-field"><button class=" text-success fw-bold "><h1>+</h1></button></a><a class="remove-extend-field"><button class=" text-danger fw-bold "><h1>-</h1></button></a>'
            );
        });
        $("#extend-field").on("click", ".add-text-field", function(e) {
            e.preventDefault();
            $("#extend-field").append(
                '<div><div class=row><div class="col-12 col-lg-4 col-md-4 col-sm-12 mt-4"><div class=form-outline><label class=form-label>Implement Type</label> <select aria-label="Default select example"class="py-2 form-select"><option value=#><option value=1>New Tractor Loan<option value=2>Used Tractor Loan,<option value=3>Loan Against Tractor<option value=4>Harvester Loan<option value=5>Used Harvester Loan<option value=6>Implement Loan<option value=7>Personal Loan</select></div></div><div class="col-12 col-lg-4 col-md-4 col-sm-12 mt-4"><div class=form-outline><label class=form-label>Image</label> <input class="py-2 data_search form-control input-group-sm"name=search_name id=name type=file></div></div><div class="col-12 col-lg-4 col-md-4 col-sm-12 mt-4"><div class=form-outline><label class=form-label>Rate</label> <input class="py-2 data_search form-control input-group-sm"name=search_name id=name></div></div><div class="col-12 col-lg-4 col-md-4 col-sm-12 mt-4"><div class=form-outline><label class=form-label>Rate Per</label> <select aria-label="Default select example"class="py-2 form-select"><option selected><option value=1>name1<option value=2>name2<option value=3>name3</select></div></div><div class="col-12 col-lg-4 col-md-4 col-sm-12 mt-4"><div class=form-outline><label class=form-label>Working Radius</label> <input class="py-2 data_search form-control input-group-sm"name=search_name></div></div><div class="col-12 col-lg-4 col-md-4 col-sm-12 mt-4"><div class=form-outline><label class=form-label>Note(if any)</label> <textarea class="py-2 data_search form-control input-group-sm"cols=70 rows=1></textarea></div></div></div><a class="add-text-field"><button class="text-success fw-bold "><h1>+</h1></button></a><a class="remove-extend-field"><button class=" text-danger fw-bold "><h1>-<h1></button></a>'
            )
        });
        $("#extend-field").on("click", ".remove-extend-field", function(e) {
            e.preventDefault();
            $(this).parent('div').remove();
        });
    });

    $(document).ready(function() {
        $("#myform_rent").validate({
            rules: {
                implement_type: 'required',
                img: 'required',
                rate: 'required',
                rate_per: 'required',
                working_radius: 'required',
            }

        });
        $('#implement_button').on('click', function() {
            $('#myform_rent').valid();
            console.log("lily");


        });
    });

    $(document).ready(function() {
        $("#myform_register").validate({
            rules: {
                first_name: 'required',
                last_name: 'required',
                mobile_number: 'required',
                email: 'required',
                state: 'required',
                district: 'required',
                taluka: 'required',
            }
        });
        $('#button_register').on('click', function() {
            $('#myform_register').valid();
            console.log("Verma");
            // console.log($('#myform_rent').valid());

        });
    });
    </script>
</body>

</html>