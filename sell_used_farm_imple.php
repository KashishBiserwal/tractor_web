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

<section class="bg-light mt-5 pt-5">
    <div class="container py-2">
        <div class="py-2">
            <span class="my-4 text-white pt-4 ">
                <a href="index.php" class="text-decoration-none header-link px-1">Home <i class="fa-solid fa-chevron-right px-1"></i></a>
                    <span class=""><a href="#" class="text-decoration-none header-link  px-1">Buy Used <i class="fa-solid fa-chevron-right px-1"></i> </a></span>
                    <span class="text-dark">Sell Old Implement</span>
            </span> 
        </div>
    </div>
</section>
<section>
    <div class="d-sm-flex align-items-center justify-content-between w-100">

        <!-- in mobile remove the clippath -->
        <div class="col-12 h-100 " style="min-height: 360px; background-image: url(assets/images/image_2023_09_02T08_22_01_554Z.png); background-position: center; background-size: cover;">
        </div>
    </div>
    <div class="page-banner-content text-center position-absolute px-2">
    <h2 class=" text-dark ">Sell Your <span class="text-success">Used Implements</span></h2>
    <h4 class="mb-4">"Fill the information to sell your used Implement"</h4>
        </div>
</section>
<section class="form-view bg-white ">
    <div class="container-mid" style="position: relative;">
        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-7">
                <form id="signUpForm_sellused" action="#!" class="bg-light">
                    <div class="form-header d-flex mb-4">
                        <span class="stepIndicator_sellused">Tractor Type</span>
                        <span class="stepIndicator_sellused">Condition State</span>
                        <span class="stepIndicator_sellused">Images</span>
                    </div>
                    <div class="step_sellused">
                        <p class="text-center mb-4">Sell Your Used Tractort</p>
                        <div class="row">
                            <div class="col-12 col-lg-6 col-md-6 col-sm-6 ">
                                <label for="name" class="form-label fw-bold text-dark"> <i class="fa-regular fa-user"></i> First Name</label>
                                <input type="text" class="form-control" placeholder="Enter Your Name" id="fname" name="fname">
                            </div>
                            <div class="col-12 col-lg-6 col-md-6 col-sm-6 ">
                                <label for="name" class="form-label fw-bold text-dark"> <i class="fa-regular fa-user"></i> Last Name</label>
                                <input type="text" class="form-control" placeholder="Enter Your Name" id="lname" name="lname">
                            </div>
                            <div class="col-12 col-lg-6 col-md-6 col-sm-6 ">
                                <label for="number" class="form-label text-dark fw-bold"> <i class="fa fa-phone" aria-hidden="true"></i> Phone Number</label>
                                <input type="password" class="form-control" placeholder="Enter Number" id="number" name="number">
                            </div>
                            <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                                <label for="yr_tehsil" class="form-label text-dark"> Tehsil</label>
                                <input type="yr_tehsil" class="form-control" placeholder="Enter Tehsil" id="tehsil" name="tehsil">
                            </div>
                            <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                                <label for="yr_state" class="form-label text-dark fw-bold" id="state" name="state"> <i class="fas fa-location"></i> State</label>
                                <select class="form-select py-2 " aria-label=".form-select-lg example"id="state" name="state">
                                    <option value>Select State</option>
                                    <option value="1">Chhattisgarh</option>
                                    <option value="2">Other</option>
                                </select>
                            </div>
                            <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                                <label class="form-label text-dark"><i class="fa-solid fa-location-dot"></i> District</label>
                                <select class="form-select py-2 " aria-label=".form-select-lg example" name="district" id="district">
                                    <option value>Select District</option>
                                    <option value="1">Raipur</option>
                                    <option value="2">Bilaspur</option>
                                    <option value="2">Durg</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="step_sellused">
                        <p class="text-center mb-4">Which tractor do you Own?</p>
                        <div class="row">
                            <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                                <label class="form-label text-dark">Brand</label>
                                <select class="form-select py-2 " aria-label=".form-select-lg example" name="Brand" id="Brand">
                                    <option value>Select Brand</option>
                                    <option value="1">Mahindra</option>
                                    <option value="2">svaraj</option>
                                    <option value="2">sonakila</option>
                                </select>
                            </div>
                            <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                                <label class="form-label text-dark my-1">Model</label>
                                <select class="form-select py-2 " aria-label=".form-select-lg example" name="Model" id="Model">
                                    <option value>Select Model</option>
                                    <option value="1">MU4501 2WD</option>
                                    <option value="2">MU5501</option>
                                    <option value="2">A211N-OP</option>
                                </select>
                            </div>
                            <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                                <label class="form-label text-dark my-1">Year</label>
                                <select class="form-select py-2 " aria-label=".form-select-lg example" name="Model" id="Model">
                                    <option value>Select year</option>
                                    <option value="1">2007</option>
                                    <option value="2">2008</option>
                                    <option value="2">2010</option>
                                </select>
                            </div>
                            <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                                <label class="form-label text-dark my-1">Engine Condition</label>
                               <select class="form-select py-2 " aria-label=".form-select-lg example" name="engine_condition" id="engine_conditin">
                                    <option value>Select Engine Condition</option>
                                    <option value="1">0-25%(poor)</option>
                                    <option value="2">25-50%(Average)</option>
                                    <option value="2">51-75%(Good)</option>
                                    <option value="2">76-100%(Very Good)</option>
                                </select>
                            </div>
                            <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                                <label class="form-label text-dark my-1">Tyre Condition</label>
                                <select class="form-select py-2" aria-label=".form-select-lg example" name="Tyre_Condition"id="Tyre_Condition">
                                    <option value>Select Engine Condition</option>
                                    <option value="1">0-25%(poor)</option>
                                    <option value="2">25-50%(Average)</option>
                                    <option value="2">51-75%(Good)</option>
                                    <option value="2">76-100%(Very Good)</option>
                                </select>
                            </div>
                            <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                                <label class="form-label text-dark my-1">Hours driven</label>
                                <select class="form-select py-2 " aria-label=".form-select-lg example" name="hours_driven" id="hours_driven">
                                    <option value>Select Hours Driven</option>
                                    <option value="1">Less then 1000</option>
                                    <option value="2">1001-2000</option>
                                    <option value="2">2001-3000</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="step_sellused">
                        <p class="text-center mb-4">Upload Tractor Images</p>
                        <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                            <input type="file" id="myFile" name="filename">
                        </div>
                        <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                            <label class="form-label text-dark my-1">How early do you want to sell?</label>
                            <select class="form-select py-2 " aria-label=".form-select-lg example" name="" id="">
                                <option value>Within 15 days</option>
                                <option value="1">15-30 days</option>
                                <option value="2">More then 30 days</option>
                            </select>
                        </div>
                    </div>
                     <div class="form-footer d-flex my-3">
                        <button type="button" id="prevBtn_sellused" onclick="nextPrev(-1)">Previous</button>
                        <button type="button" id="nextBtn_sellused" onclick="nextPrev(1)">Next</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container">
        <div class="sell my-3">
            <h3 class="text-dark assured ps-3">Sell Your<span class="text-success"> Used Implements</span></h3>
        </div>
        <div class="sellcontent">
            <h4 class="text-center">Do you want to sell your used implement online?</h4>
            <p class="text-center">Now you can easily sell your old tractor implements without any tension from sitting at your home</p>
            <p class="text-center"> TractorJunction has come up with a new page ‘Sell Your Used Implements’ where you can comfortably sell your old implement to the right buyer. If you like to sell used tractor implements online then you have to follow a few simple steps.</p>
        </div>
    </div>
</section>


<section class="bg-light">
    <div class="container mt-4 ">
        <div class="col-12 assured mt-3">
            <h4 class="fw-bold p-2">Quick Links</h4>
        </div>
        <div class="row mt-4">
            <div class="col-12 col-sm-4 col-lg-4 col-md-4 my-2">
                <ul class="justify-content-center ul-box  ">
                    <li class=""> <a href="#" class="text-dark text-decoration-none"><p>  <i class="fa-solid fa-angles-right"></i> &nbsp; New Tractors</p></a></li>
                    <li class=""> <a href="#" class="text-dark text-decoration-none"><p>  <i class="fa-solid fa-angles-right"></i> &nbsp; Finance </p></a></li>
                    <li class=""> <a href="#" class="text-dark text-decoration-none"><p> <i class="fa-solid fa-angles-right"></i> &nbsp; Popular Tractors</p></a></li>
                </ul>
            </div>
            <div class="col-12 col-sm-4 col-lg-4 col-md-4 my-2">
                <ul class="justify-content-center ul-box  ">
                    <li class=""> <a href="#" class="text-dark text-decoration-none"><p>  <i class="fa-solid fa-angles-right"></i> &nbsp; Latest Tractors</p></a></li>
                    <li class=""> <a href="#" class="text-dark text-decoration-none"><p>  <i class="fa-solid fa-angles-right"></i> &nbsp; Upcoming Tractors</p></a></li>
                    <li class=""> <a href="#" class="text-dark text-decoration-none"><p> <i class="fa-solid fa-angles-right"></i> &nbsp; Tractor News </p></a></li>
                </ul>
            </div>
            <div class="col-12 col-sm-4 col-lg-4 col-md-4 my-2">
                <ul class="justify-content-center ul-box  ">
                    <li class=""> <a href="#" class="text-dark text-decoration-none"><p>  <i class="fa-solid fa-angles-right"></i> &nbsp; Used Tractors</p></a></li>
                    <li class=""> <a href="#" class="text-dark text-decoration-none"><p>  <i class="fa-solid fa-angles-right"></i> &nbsp; Dealership Enquiry</p></a></li>
                    <li class=""> <a href="#" class="text-dark text-decoration-none"><p> <i class="fa-solid fa-angles-right"></i> &nbsp; Contact / Mail Us</p></a></li>
                </ul>
            </div>
        </div>
    </div>
</section>




<?php
    include 'includes/footer.php';
    include 'includes/footertag.php';

    ?>
    </html>