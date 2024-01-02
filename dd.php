<meta name="viewport" content="width=device-width, initial-scale=1">
<?php
include 'includes/headertag.php';
include 'includes/footertag.php';
?>
<head>
</head>

<style>
        p {
        margin: 0;
        }

        .upload__box {
        padding: 40px;
        width: 50;
        padding-left: 2px;
        }

        .upload__inputfile {
        width: .1px;
        height: .1px;
        opacity: 0;
        overflow: hidden;
        position: absolute;
        z-index: -1;
        }

        .upload__btn {
        display: inline-block;
        font-weight: 600;
        color: #fff;
        text-align: center;
        min-width: 150px;
        padding: 5px;
        transition: all .3s ease;
        cursor: pointer;
        border: 2px solid;
        background-color:  #198754;
        border-color:  #198754;
        border-radius: 10px;
        line-height: 26px;
        font-size: 14px;
        }

        .upload__btn:hover {
        background-color: unset;
        color:  #198754;
        transition: all .3s ease;
        }

        .upload__btn-box {
        margin-bottom: 10px;
        margin-top:-25px;
        width: 150px;
        }

        .upload__img-wrap {
        display: flex;
        flex-wrap:nowrap;
        margin: 0 -50px;
        }

        .upload__img-box {
        flex: 0 0 calc(33.333% - 20px); 
        margin: 0 10px 20px; 
        position: relative;
        }

        .upload__img-close {
        width: 24px;
        height: 24px;
        border-radius: 50%;
        background-color: rgba(0, 0, 0, 0.5);
        position: absolute;
        top: 10px;
        right: 10px;
        text-align: center;
        line-height: 24px;
        z-index: 1;
        cursor: pointer;
        }

        .upload__img-close:after {
        content: '\2716';
        font-size: 14px;
        color: white;
        }

        .img-bg {
        background-repeat: no-repeat;
        background-position: center;
        background-size: cover;
        position: relative;
        width: 160px;
        height: 125px;
        }

</style>
    <style>
        #multi_step_form {
        padding-bottom: 75px;
        }
        #multi_step_form .container {
        display: flex;
        align-items: center;
        justify-content: space-between;
        }
        .container #multistep_nav {
        display: flex;
        flex-direction: column; /* Change to column */
        }
        .container #multistep_nav .progress_holder {
        padding: 20px;
        text-align: center;
        width: ;
        }
        #multistep_nav .activated_step {
        background-color:LightGray;
        color: black;
        }
        #multi_step_form .nextStep {
        position: absolute;
        right: 45px;
        bottom: 6;
        padding: 5px;
        width: 80px;
        border: 1px solid black;
        background-color:#198754;
        color:white;
        text-align: start;
        }
        .subbtn{
        position: absolute;
        right: 45px;
        bottom: 6;
        padding: 5px;
        width: 80px;
        border: 1px solid black;
        background-color:#198754;
        color:white;
        text-align: start;
        }
        #multi_step_form  .prevStep {
        position: absolute;
        left: 48px;
        bottom: 6;
        padding: 6px;
        width: 80px;
        border: 1px solid black;
        background-color:#198754;
        color:white;
        text-align: start;
        }
        #multi_step_form .container form.step:not(:first-of-type) {
        display: none;
        }
        .btn{
            align-items: center;
        }

         #multi_step_form {
        margin-top: 50px;
        }
        .progress_holder {
            margin-bottom: 20px;
        }
        .progress-bar-container {
            width: 100%;
            position: relative;
        }
        .progress-bar {
            height: 20px;
            background-color: #4CAF50;
            width: 0%;
        }
        form {
            /* display: none; */
        }
        form.active {
            display: block;
        }
        .progress_holder {
            cursor: pointer;
        }
        .activated_step {
            background-color: #198754;
            color: white;
        }
</style>

<style>
        body {
        padding-bottom: 30px;
        position: relative;
        min-height: 100%;
        }

        a {
        transition: background 0.2s, color 0.2s;
        }
        a:hover,
        a:focus {
        text-decoration: none;
        }

        #wrapper {
        padding-left: 0;
        transition: all 0.5s ease;
        position: relative;
        }

        #sidebar-wrapper {
        z-index: 1000;
        position: fixed;
        left: 250px;
        width: 0;
        height: 100%;
        margin-left: -250px;
        overflow-y: auto;
        overflow-x: hidden;
        background: #198754;
        transition: all 0.5s ease;
        }

        #wrapper.toggled #sidebar-wrapper {
        width: 250px;
        }

        .sidebar-brand {
        position: absolute;
        top: 0;
        width: 250px;
        text-align: center;
        padding: 20px 0;
        }
        .sidebar-brand h2 {
        margin: 0;
        font-weight: 600;
        font-size: 24px;
        color: #fff;
        }

        .sidebar-nav {
        position: absolute;
        top: 75px;
        width: 250px;
        margin: 0;
        padding: 0;
        list-style: none;
        }
        .sidebar-nav > li {
        text-indent: 10px;
        line-height: 42px;
        }
        .sidebar-nav > li a {
        display: block;
        text-decoration: none;
        color: #757575;
        font-weight: 600;
        font-size: 18px;
        }
        .sidebar-nav > li > a:hover,
        .sidebar-nav > li.active > a {
        text-decoration: none;
        color: #fff;
        background: #F8BE12;
        }
        .sidebar-nav > li > a i.fa {
        font-size: 24px;
        width: 60px;
        }

        #navbar-wrapper {
            width: 100%;
            position: absolute;
            z-index: 2;
        }
        #wrapper.toggled #navbar-wrapper {
            position: absolute;
            margin-right: -250px;
        }
        #navbar-wrapper .navbar {
        border-width: 0 0 0 0;
        background-color: #eee;
        font-size: 24px;
        margin-bottom: 0;
        border-radius: 0;
        }
        #navbar-wrapper .navbar a {
        color: #757575;
        }
        #navbar-wrapper .navbar a:hover {
        color: #F8BE12;
        }

        #content-wrapper {
        width: 100%;
        position: absolute;
        padding: 15px;
        top: 100px;
        }
        #wrapper.toggled #content-wrapper {
        position: absolute;
        margin-right: -250px;
        }

        @media (min-width: 992px) {
        #wrapper {
            padding-left: 140px;
        }
        
        #wrapper.toggled {
            padding-left: 60px;
        }

        #sidebar-wrapper {
            width: 250px;
            top:0;
        }
        
        #wrapper.toggled #sidebar-wrapper {
            width: 60px;
        }
        
        #wrapper.toggled #navbar-wrapper {
            position: absolute;
            margin-right: -190px;
        }
        
        #wrapper.toggled #content-wrapper {
            position: absolute;
            margin-right: -190px;
        }

        #navbar-wrapper {
            position: relative;
        }

        #wrapper.toggled {
            padding-left: 60px;
        }

        #content-wrapper {
            position: relative;
            top: 0;
        }

        #wrapper.toggled #navbar-wrapper,
        #wrapper.toggled #content-wrapper {
            position: relative;
            margin-right: 60px;
        }
        }

        @media (min-width: 768px) and (max-width: 991px) {
        #wrapper {
            padding-left: 60px;
        }

        #sidebar-wrapper {
            width: 60px;
            top:0;
        }
        
        #wrapper.toggled #navbar-wrapper {
            position: absolute;
            margin-right: -250px;
        }
        
        #wrapper.toggled #content-wrapper {
            position: absolute;
            margin-right: -250px;
        }

        #navbar-wrapper {
            position: relative;
        }

        #wrapper.toggled {
            padding-left: 250px;
        }

        #content-wrapper {
            position: relative;
            top: 0;
        }

        #wrapper.toggled #navbar-wrapper,
        #wrapper.toggled #content-wrapper {
            position: relative;
            margin-right: 250px;
        }
        }

        @media (max-width: 767px) {
        #wrapper {
            padding-left: 0;
        }

        #sidebar-wrapper {
            width: 0;
            top:0;
        }

        #wrapper.toggled #sidebar-wrapper {
            width: 250px;
        }
        #wrapper.toggled #navbar-wrapper {
            position: absolute;
            margin-right: -250px;
        }

        #wrapper.toggled #content-wrapper {
            position: absolute;
            margin-right: -250px;
        }

        #navbar-wrapper {
            position: relative;
        }

        #wrapper.toggled {
            padding-left: 250px;
        }

        #content-wrapper {
            position: relative;
            top: 0;
        }

        #wrapper.toggled #navbar-wrapper,
        #wrapper.toggled #content-wrapper {
            position: relative;
            margin-right: 250px;
        }
        }
</style>

<body>
<section class="form-view bg-white ">
    <div class="container" style="position: relative;">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="row">
                    <div id="multi_step_form">
                        <div class="container">
                            <div id="wrapper">
                                <aside id="sidebar-wrapper">
                                    <div class="sidebar-nav">
                                        <div id="multistep_nav" class="col-12 col-lg-12 col-md-6 col-sm-3">
                                            <div class="progress_holder"disabled>
                                                <p>1.Listing,Select Tractor Type,image</p>
                                            </div>
                                            <div class="progress_holder">
                                                <p>2.Engine Details,Transmission Details</p>
                                            </div>
                                            <div class="progress_holder">
                                                <p>3.Steering Details,Power Take Off Details,Dimensions And Weight Details</p>
                                            </div>
                                            <div class="progress_holder">
                                                <p>4.Hydraulics Details,Wheels And Tyres Details</p>
                                             </div>
                                            <div class="progress_holder">
                                                <p>5.Other Information Details</p>
                                             </div>
                                        </div>
                                    </div>
                                </aside>
                                <div id="navbar-wrapper">
                                    <nav class="navbar navbar-inverse">
                                        <div class="container-fluid">
                                            <div class="navbar-header">
                                                <a href="#" class="navbar-brand" id="sidebar-toggle"><i class="fa fa-bars"></i></a>
                                            </div>
                                        </div>
                                    </nav>
                                </div>
                                <section id="content-wrapper" class="shadow p-5">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <form id="step1_form" class="step">
                                                <div class="row">
                                                    <h4 class="text-center">Listing</h4>
                                                    <div class="col-12 col-sm-6 col-lg-6 col-md-6 mt-3">
                                                        <div class="form-outline">
                                                            <label class="form-label">Brand</label>
                                                            <select class="form-select py-2" id="brand_name" name="brand_name" aria-label="Default select example" required>
                                                                <option value="">Select Brand</option>
                                                                <option value="">1</option>
                                                                <option value="1">2</option>
                                                                <option value="2">3</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-sm-6 col-lg-6 col-md-6 mt-3">
                                                        <div class="form-outline">
                                                            <label class="form-label">Model Name</label>
                                                            <select class="form-select py-2" id="model" name="model" aria-label="Default select example" required>
                                                                <option value="">Select Model Name</option>
                                                                <option value="">1</option>
                                                                <option value="1">2</option>
                                                                <option value="2">3</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-sm-6 col-lg-6 col-md-6 my-4" hidden>
                                                        <div class="form-outline">
                                                            <label class="form-label">Product Type</label>
                                                            <input type="text" class="" placeholder=" " value="2" id="product_type_id" >
                                                        </div>
                                                    </div>
                                                    <div  class="col-12 col-sm-4 col-lg-4 col-md-4 my-4">
                                                        <div class="form-outline">
                                                            <label class="form-label">HP Category</label>
                                                            <input type="text"  placeholder=" " id="hp_category" name="hp_category" class="form-control"required>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-sm-4 col-lg-4 col-md-4 my-4">
                                                        <div class="form-outline">
                                                            <label class="form-label">No. of Cylinder</label>
                                                            <select class="form-select py-2" id="TOTAL_CYCLINDER" name="TOTAL_CYCLINDER" aria-label="Default select example" required>
                                                                <option selected disabled="" value="">Please select an option</option>
                                                                <option value="1">1</option>
                                                                <option value="2">1</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div  class="col-12 col-sm-4 col-lg-4 col-md-4 my-4">
                                                        <div class="form-outline">
                                                            <label class="form-label">PTO HP</label>
                                                            <input type="text" placeholder=" " id="horse_power"  name="horse_power" class="form-control" required>
                                                        </div>
                                                    </div>
                                                    <div  class="col-12 col-sm-4 col-lg-4 col-md-4 my-2">
                                                        <div class="form-outline">
                                                            <label class="form-label">Gear Box Forward</label>
                                                            <input type="text" placeholder=" " id="gear_box_forward"  name="gear_box_forward" class="form-control" required>
                                                        </div>
                                                    </div>
                                                    <div  class="col-12 col-sm-4 col-lg-4 col-md-4 my-2">
                                                        <div class="form-outline">
                                                            <label class="form-label">Gear Box Reverse</label>
                                                            <input type="text" placeholder=" " id="gear_box_reverse"  name="gear_box_reverse" class="form-control" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-sm-4 col-lg-4 col-md-4 my-2">
                                                        <div class="form-outline">
                                                            <label class="form-label">Brakes</label>
                                                            <select class="form-select py-2" id="BRAKE_TYPE" name="BRAKE_TYPE"  aria-label="Default select example" required>
                                                                <option selected disabled="" value="">Please select an option</option>
                                                                <option value="1">1</option>
                                                                <option value="2">2</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div  class="col-12 col-sm-4 col-lg-4 col-md-4 my-4">
                                                        <div class="form-outline">
                                                            <label class="form-label">Starting Price</label>
                                                            <input type="text" placeholder=" " id="starting_price"  name="starting_price" class="form-control" required>
                                                        </div>
                                                    </div>
                                                    <div  class="col-12 col-sm-4 col-lg-4 col-md-4 my-4">
                                                        <div class="form-outline">
                                                            <label class="form-label">Ending Price</label>
                                                            <input type="text" placeholder=" " id="ending_price"  name="ending_price" class="form-control" required>
                                                        </div>
                                                    </div>
                                                    <div  class="col-12 col-sm-4 col-lg-4 col-md-4 my-4">
                                                        <div class="form-outline">
                                                            <label class="form-label">Warranty</label>
                                                            <input type="text" placeholder=" " id="warranty"  name="warranty" class="form-control"required>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-sm-4 col-lg-4 col-md-4 mt-4">
                                                        <label for="name" class="text-dark fw-bold">Select Tractor Type</label>
                                                        <div id="type_name" name="type_name"></div>
                                                    </div>
                                                    <div class="col-12 col-sm-4 col-lg-4 col-md-4">
                                                        <div class="upload__box mt-2 text-center">
                                                            <div class="upload__btn-box text-center">
                                                                <label >
                                                                    <p class="upload__btn">Upload images</p>
                                                                    <input type="file" multiple="" data-max_length="20" class="upload__inputfile" id="_image" name="_image"required>
                                                                </label>
                                                            </div>
                                                            <div id="selectedImagesContainer" class="upload__img-wrap"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                               <button type="button" class="nextStep text-center" id="nextbtn1">Next</button>
                                            </form>
                                            <form id="step2_form" class="step">
                                                  <!-- ... Step 2 content ... -->
                                                <div class="row">
                                                    <h4 class="text-center">Engine Details</h4>
                                                    <div  class="col-12 col-sm-4 col-lg-4 col-md-4  mt-3">
                                                        <div class="form-outline">
                                                            <label class="form-label">Capacity CC</label>
                                                            <input type="text" placeholder=" " id="CAPACITY_CC"  name="CAPACITY_CC" class="form-control"required>
                                                        </div>
                                                    </div>
                                                    <div  class="col-12 col-sm-4 col-lg-4 col-md-4 mt-3">
                                                        <div class="form-outline">
                                                            <label class="form-label">Engine Rated RPM</label>
                                                            <input type="text" placeholder=" " id="engine_rated_rpm"  name="engine_rated_rpm" class="form-control"required>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-sm-4 col-lg-4 col-md-4 mt-3">
                                                        <div class="form-outline">
                                                            <label class="form-label">Select Cooling</label>
                                                            <select class="form-select py-2" id="COOLING" name="COOLING" aria-label="Default select example"required>
                                                                <option selected disabled="" value="">Please select an option</option>
                                                                <option value="1">1</option>
                                                                <option value="2">2</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-sm-4 col-lg-4 col-md-4 my-3">
                                                        <div class="form-outline">
                                                            <label class="form-label">Air Filter</label>
                                                            <select class="form-select py-2" id="AIR_FILTER" name="AIR_FILTER" aria-label="Default select example"required>
                                                                <option selected disabled="" value="">Please select an option</option>
                                                                <option value="1">1</option>
                                                                <option value="2">2</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-sm-4 col-lg-4 col-md-4 my-3">
                                                        <div class="form-outline">
                                                            <label class="form-label">Fuel pump</label>
                                                            <select class="form-select py-2" id="fuel_pump_id" name="fuel_pump_id" aria-label="Default select example"required>
                                                                <option selected disabled="" value="">Please select an option</option>
                                                                <option value="1">1</option>
                                                                <option value="2">2</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div  class="col-12 col-sm-4 col-lg-4 col-md-4 my-3">
                                                        <div class="form-outline">
                                                            <label class="form-label">Torque</label>
                                                            <input type="text" placeholder=" " id="TORQUE"  name="TORQUE" class="form-control"required>
                                                        </div>
                                                    </div>
                                                    <h4 class="text-center mt-3">Transmission Details</h4>
                                                    <div class="col-12 col-sm-6 col-lg-6 col-md-6 mb-4 mt-2">
                                                        <div class="form-outline">
                                                            <label class="form-label">Type</label>
                                                            <select class="form-select py-2" id="TRANSMISSION_TYPE" name="TRANSMISSION_TYPE" aria-label="Default select example"required>
                                                                <option selected disabled="" value="">Please select an option</option>
                                                                <option value="1">1</option>
                                                                <option value="2">2</option>
                                                                <option value="3">3</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-sm-6 col-lg-6 col-md-6 mb-4 mt-2">
                                                        <div class="form-outline">
                                                            <label class="form-label">Clutch</label>
                                                            <select class="form-select py-2" id="TRANSMISSION_CLUTCH" name="TRANSMISSION_CLUTCH" aria-label="Default select example"required>
                                                                <option selected disabled="" value="">Please select an option</option>
                                                                <option value="1">1</option>
                                                                <option value="2">2</option>
                                                                <option value="3">3</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div  class="col-12 col-sm-6 col-lg-6 col-md-6 mt-2">
                                                        <div class="form-outline">
                                                            <label class="form-label">Min Forward Speed(kmph)</label>
                                                            <input type="text" placeholder=" " id="min_forward_speed"  name="min_forward_speed" class="form-control"required>
                                                        </div>
                                                    </div>
                                                    <div  class="col-12 col-sm-6 col-lg-6 col-md-6 mt-2">
                                                        <div class="form-outline">
                                                            <label class="form-label">Max Forward Speed(kmph)</label>
                                                            <input type="text" placeholder=" " id="max_forward_speed"  name="max_forward_speed" class="form-control"required>
                                                        </div>
                                                    </div>
                                                    <div  class="col-12 col-sm-6 col-lg-6 col-md-6 mt-3">
                                                        <div class="form-outline">
                                                            <label class="form-label">Min Reverse Speed(kmph)</label>
                                                            <input type="text" placeholder=" " id="min_reverse_speed"  name="min_reverse_speed" class="form-control"required>
                                                        </div>
                                                    </div>
                                                    <div  class="col-12 col-sm-6 col-lg-6 col-md-6 mt-3">
                                                        <div class="form-outline">
                                                            <label class="form-label">Max Reverse Speed(kmph)</label>
                                                            <input type="text" placeholder=" " id="max_reverse_speed"  name="max_reverse_speed" class="form-control"required>
                                                        </div>
                                                    </div>
                                                </div>
                                                <button type="button" class="prevStep text-center mt-5" id="prevbtn2">Prev</button>
                                                <button type="button" class="nextStep text-center" id="nextbtn2">Next</button>
                                            </form>
                                            <form id="step3_form" class="step">
                                            <!-- ... Step 3 content ... -->
                                                <div class="row">
                                                    <h5 class="text-center">Steering Details</h5>
                                                    <div class="col-12 col-sm-6 col-lg-6 col-md-6 mt-3">
                                                        <div class="form-outline">
                                                            <label class="form-label">Type</label>
                                                            <select class="form-select py-2" id="STEERING_DETAIL" name="STEERING_DETAIL" aria-label="Default select example" required>
                                                                <option selected disabled="" value="">Please select an option</option>
                                                                <option value="1">1</option>
                                                                <option value="2">2</option>
                                                                <option value="3">3</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-sm-6 col-lg-6 col-md-6 mt-3">
                                                        <div class="form-outline">
                                                            <label class="form-label">Coloumn</label>
                                                            <select class="form-select py-2" id="STEERING_COLUMN" name="STEERING_COLUMN" aria-label="Default select example" required>
                                                                <option selected disabled="" value="">Please select an option</option>
                                                                <option value="1">1</option>
                                                                <option value="2">2</option>
                                                                <option value="3">3</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <h5 class="text-center mt-3">Power Take Off Details</h5>
                                                    <div  class="col-12 col-sm-6 col-lg-6 col-md-6 mt-3">
                                                        <div class="form-outline">
                                                        <label class="form-label">Type</label>
                                                        <input type="text" placeholder=" " id="POWER_TAKEOFF_TYPE"  name="POWER_TAKEOFF_TYPE" class="form-control" required>
                                                        </div>
                                                    </div>
                                                    <div  class="col-12 col-sm-6 col-lg-6 col-md-6 mt-3">
                                                        <div class="form-outline">
                                                            <label class="form-label">RPM</label>
                                                            <input type="text" placeholder=" " id="power_take_off_rpm"  name="power_take_off_rpm" class="form-control" required>
                                                        </div>
                                                    </div>
                                                    <h5 class="text-center mt-3">Dimensions And Weight Details</h5>
                                                    <div  class="col-12 col-sm-6 col-lg-6 col-md-6 mt-3">
                                                        <div class="form-outline">
                                                            <label class="form-label">Total Weight(kg)</label>
                                                            <input type="text" placeholder=" " id="totat_weight"  name="totat_weight" class="form-control"required>
                                                        </div>
                                                    </div>
                                                    <div  class="col-12 col-sm-6 col-lg-6 col-md-6 mt-3">
                                                        <div class="form-outline">
                                                            <label class="form-label">Wheel Base(mm)</label>
                                                            <input type="text" placeholder=" " id="WHEEL_BASE"  name="WHEEL_BASE" class="form-control"required>
                                                        </div>
                                                    </div>
                                                </div>
                                                <button type="button" class="prevStep text-center" id="prevbtn3">Prev</button>
                                                <button type="button" class="nextStep text-center" id="nextbtn3">Next</button>
                                            </form>
                                            <form id="step4_form" class="step">
                                                    <!-- ... Step 4 content ... -->
                                                <div class="row">
                                                    <h5 class="text-center mt-3">Hydraulics Details</h5>
                                                    <div  class="col-12 col-sm-6 col-lg-6 col-md-6 mt-3">
                                                        <div class="form-outline">
                                                            <label class="form-label">Lifting Capacity(kg)</label>
                                                            <input type="text" placeholder=" " id="LIFTING_CAPACITY"  name="LIFTING_CAPACITY" class="form-control"required>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-sm-6 col-lg-6 col-md-6 mt-3">
                                                        <div class="form-outline">
                                                            <label class="form-label">3 Point Linkage</label>
                                                            <select class="form-select py-2" id="LINKAGE_POINT" name="LINKAGE_POINT" aria-label="Default select example"required>
                                                                <option selected disabled="" value="">Please select an option</option>
                                                                <option value="1">1</option>
                                                                <option value="2">2</option>
                                                                <option value="3">3</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <!-- <h5 class="text-center mt-3">Fuel Tank</h5>
                                                    <div  class="col-12 mt-3 ">
                                                        <div class="form-outline">
                                                            <label class="form-label">Capacity(Ltr)</label>
                                                            <input type="text" placeholder=" " id="fuel_tank_cc"  name="fuel_tank_cc" class="form-control"required>
                                                        </div>
                                                    </div> -->
                                                    <h5 class="text-center mt-3"> Wheels And Tyres Details</h5>
                                                    <div class="col-12 col-sm-4 col-lg-4 col-md-4 mt-3">
                                                        <div class="form-outline">
                                                        <label class="form-label">Wheel Drive</label>
                                                        <select class="form-select py-2" id="WHEEL_DRIVE" name="WHEEL_DRIVE" aria-label="Default select example"required>
                                                            <option selected disabled="" value="">Please select an option</option>
                                                                <option value="1">1</option>
                                                                <option value="2">2</option>
                                                                <option value="3">3</option>
                                                        </select>
                                                        </div>
                                                    </div>
                                                    <div  class="col-12 col-sm-4 col-lg-4 col-md-4 mt-3">
                                                        <div class="form-outline">
                                                        <label class="form-label">Front(mm)</label>
                                                        <input type="text" placeholder=" " id="front_tyre"  name="front_tyre" class="form-control"required>
                                                        </div>
                                                    </div>
                                                    <div  class="col-12 col-sm-4 col-lg-4 col-md-4 mt-3">
                                                        <div class="form-outline">
                                                        <label class="form-label">Rear(mm)</label>
                                                        <input type="text" placeholder=" " id="rear_tyre"  name="rear_tyre" class="form-control"required>
                                                        </div>
                                                    </div>
                                                </div>
                                                <button type="button" class="prevStep text-center" id="prevbtn4">Prev</button>
                                                <button type="button" class="nextStep text-center" id="nextbtn4">Next</button>
                                            </form>
                                            <form id="step5_form" class="step">
                                                     <!-- ... Step 5 content ... -->     
                                                <div class="row">
                                                    <h5 class="text-center mt-3">Other Information Details</h5>
                                                    <div class="col-12 col-lg-8 col-sm-8 col-md-8 mt-3">
                                                        <div class="form-outline">
                                                            <label class="form-label">Accessories</label>
                                                            <select class="js-example-basic-multiple w-100" name="states[]" id="ass_list" name="ass_list" multiple="multiple" required>
                                                               </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-sm-4 col-lg-4 col-md-4 mt-3">
                                                        <div class="form-outline">
                                                            <label class="form-label">Status</label>
                                                                <select class="form-select py-2" id="STATUS" name="STATUS" aria-label="Default select example"required>
                                                                    <option selected disabled="" value="">Please select an option</option>
                                                                    <option value="1">1</option>
                                                                    <option value="2">2</option>
                                                                    <option value="3">3</option>
                                                                </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 mt-4 ">
                                                        <div class="form-outline ">
                                                            <label class="form-label text-dark">About</label>
                                                            <textarea rows="4" cols="70" class="w-100  pt-2" minlength="1" maxlength="255" id="description" name="description" required></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                                <button type="button" class="prevStep text-center" id="prevbtn5">Prev</button>
                                                <button type="submit" class="subbtn text-center" id="submitbtn">Submit</button>
                                            </form>
                                        </div>
                                    </div>
                                </section>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

 <!-- <div class="row">
                        <div class="col-12 bg-light"><h6 class="fw-bold text-center py-1">Listing</h6></div>
                        <div class="col-12 col-lg-6 col-md-6 col-sm-6">
                          <div class="row">
                            <div class="col-12 col-lg-6 col-md-6 col-sm-6 my-1">
                              <p>Brand-</p>
                            </div>
                            <div class="col-12 col-lg-6 col-md-6 col-sm-6 my-1">
                              <p id="brand_"></p>
                            </div>
                          </div>
                        </div>

                        <div class="col-12 col-lg-6 col-md-6 col-sm-6 my-1">
                          <div class="row">
                            <div class="col-12 col-lg-6 col-md-6 col-sm-6">
                              <p>Model Name-</p>
                            </div>
                            <div class="col-12 col-lg-6 col-md-6 col-sm-6">
                              <p id="model_"></p>
                            </div>
                          </div>
                        </div>
                        <div class="col-12 col-lg-6 col-md-6 col-sm-6 my-1">
                          <div class="row">
                            <div class="col-12 col-lg-6 col-md-6 col-sm-6">
                              <p>HP Category-</p>
                            </div>
                            <div class="col-12 col-lg-6 col-md-6 col-sm-6">
                              <p id="hp_"></p>
                            </div>
                          </div>
                        </div>
                        <div class="col-12 col-lg-6 col-md-6 col-sm-6 my-1">
                          <div class="row">
                            <div class="col-12 col-lg-6 col-md-6 col-sm-6">
                              <p>No. of Cylinder-</p>
                            </div>
                            <div class="col-12 col-lg-6 col-md-6 col-sm-6">
                              <p id="cylinder_"></p>
                            </div>
                          </div>
                        </div>
                        <div class="col-12 col-lg-6 col-md-6 col-sm-6 my-1">
                          <div class="row">
                            <div class="col-12 col-lg-6 col-md-6 col-sm-6">
                              <p>PTO HP-</p>
                            </div>
                            <div class="col-12 col-lg-6 col-md-6 col-sm-6">
                              <p id="pto_hp_"></p>
                            </div>
                          </div>
                        </div>
                        <div class="col-12 col-lg-6 col-md-6 col-sm-6 my-1">
                          <div class="row">
                            <div class="col-12 col-lg-6 col-md-6 col-sm-6">
                              <p>Gear Box Forward-</p>
                            </div>
                            <div class="col-12 col-lg-6 col-md-6 col-sm-6">
                              <p id="Gear_Box_Forward_1"></p>
                            </div>
                          </div>
                        </div>
                        <div class="col-12 col-lg-6 col-md-6 col-sm-6 my-1">
                          <div class="row">
                            <div class="col-12 col-lg-6 col-md-6 col-sm-6">
                              <p>Gear Box Reverse-</p>
                            </div>
                            <div class="col-12 col-lg-6 col-md-6 col-sm-6">
                              <p id="Gear_Box_Reverse_1"></p>
                            </div>
                          </div>
                        </div>
                        <div class="col-12 col-lg-6 col-md-6 col-sm-6 my-1">
                          <div class="row">
                            <div class="col-12 col-lg-6 col-md-6 col-sm-6">
                              <p>Brakes-</p>
                            </div>
                            <div class="col-12 col-lg-6 col-md-6 col-sm-6">
                              <p id="brakes_1"></p>
                            </div>
                          </div>
                        </div>
                        <div class="col-12 col-lg-6 col-md-6 col-sm-6 my-1">
                          <div class="row">
                            <div class="col-12 col-lg-6 col-md-6 col-sm-6">
                              <p>Starting Price-</p>
                            </div>
                            <div class="col-12 col-lg-6 col-md-6 col-sm-6">
                              <p id="Starting_Price_1"></p>
                            </div>
                          </div>
                        </div>
                        <div class="col-12 col-lg-6 col-md-6 col-sm-6 my-1">
                          <div class="row">
                            <div class="col-12 col-lg-6 col-md-6 col-sm-6">
                              <p>Ending Price-</p>
                            </div>
                            <div class="col-12 col-lg-6 col-md-6 col-sm-6">
                              <p id="Ending_Price_1"></p>
                            </div>
                          </div>
                        </div>
                        <div class="col-12 col-lg-6 col-md-6 col-sm-6 my-1">
                          <div class="row">
                            <div class="col-12 col-lg-6 col-md-6 col-sm-6">
                              <p>Warranty-</p>
                            </div>
                            <div class="col-12 col-lg-6 col-md-6 col-sm-6">
                              <p id="Warranty_1"></p>
                            </div>
                          </div>
                        </div>
                        <div class="col-12 col-lg-6 col-md-6 col-sm-6 my-1">
                          <div class="row">
                            <div class="col-12 col-lg-6 col-md-6 col-sm-6">
                              <p>Select Tractor Type-</p>
                            </div>
                            <div class="col-12 col-lg-6 col-md-6 col-sm-6">
                              <p id="Select_Tractor_Type_1"></p>
                            </div>
                          </div>
                        </div>
                        <div class="col-12 my-1">
                          <div class="row">
                            <div class="col-12 col-lg-3 col-md-3 col-sm-3">
                              <p>Upload images-</p>
                            </div>
                            <div class="col-12 col-lg-9 col-md-9 col-sm-9">
                            <div class="row">
                              <div class="col-12 col-sm-3 col-md-3 col-lg-3 images_img" id="image_1"></div>
                            </div>
                            </div>
                          </div>
                        </div>
                        <div class="col-12 bg-light"><h6 class="fw-bold text-center py-1">Engine Details</h6></div>
                        <div class="col-12 col-lg-6 col-md-6 col-sm-6 my-1">
                        
                          <div class="row">
                            <div class="col-12 col-lg-6 col-md-6 col-sm-6">
                              <p>Capacity CC-</p>
                            </div>
                            <div class="col-12 col-lg-6 col-md-6 col-sm-6">
                            <div id="capacity_cc_1"></div>
                            </div>
                          </div>
                        </div>
                        <div class="col-12 col-lg-6 col-md-6 col-sm-6 my-1">
                          <div class="row">
                            <div class="col-12 col-lg-6 col-md-6 col-sm-6">
                              <p>Engine Rated RPM-</p>
                            </div>
                            <div class="col-12 col-lg-6 col-md-6 col-sm-6">
                            <div id="Engine_Rated_RPM_1"></div>
                            </div>
                          </div>
                        </div>
                        <div class="col-12 col-lg-6 col-md-6 col-sm-6 my-1">
                          <div class="row">
                            <div class="col-12 col-lg-6 col-md-6 col-sm-6">
                              <p>Select Cooling-</p>
                            </div>
                            <div class="col-12 col-lg-6 col-md-6 col-sm-6">
                            <div id="Select_Cooling_1"></div>
                            </div>
                          </div>
                        </div>
                        <div class="col-12 col-lg-6 col-md-6 col-sm-6 my-1">
                          <div class="row">
                            <div class="col-12 col-lg-6 col-md-6 col-sm-6">
                              <p>Air Filter-</p>
                            </div>
                            <div class="col-12 col-lg-6 col-md-6 col-sm-6">
                            <div id="Air_Filter_1"></div>
                            </div>
                          </div>
                        </div>
                        <div class="col-12 col-lg-6 col-md-6 col-sm-6 my-1">
                          <div class="row">
                            <div class="col-12 col-lg-6 col-md-6 col-sm-6">
                              <p>Fuel pump-</p>
                            </div>
                            <div class="col-12 col-lg-6 col-md-6 col-sm-6">
                            <div id="Fuel_pump_1"></div>
                            </div>
                          </div>
                        </div>
                        <div class="col-12 col-lg-6 col-md-6 col-sm-6 my-1">
                          <div class="row">
                            <div class="col-12 col-lg-6 col-md-6 col-sm-6">
                              <p>Torque-</p>
                            </div>
                            <div class="col-12 col-lg-6 col-md-6 col-sm-6">
                            <div id="Torque_1"></div>
                            </div>
                          </div>
                        </div>
                        <div class="col-12 bg-light"><h6 class="fw-bold text-center py-1">Transmission Details</h6></div>
                        <div class="col-12 col-lg-6 col-md-6 col-sm-6 my-1">
                          <div class="row">
                            <div class="col-12 col-lg-6 col-md-6 col-sm-6">
                              <p>Type-</p>
                            </div>
                            <div class="col-12 col-lg-6 col-md-6 col-sm-6">
                            <div id="Type_1"></div>
                            </div>
                          </div>
                        </div>
                        <div class="col-12 col-lg-6 col-md-6 col-sm-6 my-1">
                          <div class="row">
                            <div class="col-12 col-lg-6 col-md-6 col-sm-6">
                              <p>Clutch-</p>
                            </div>
                            <div class="col-12 col-lg-6 col-md-6 col-sm-6">
                            <div id="Clutch_1"></div>
                            </div>
                          </div>
                        </div>
                        <div class="col-12 col-lg-6 col-md-6 col-sm-6 my-1">
                          <div class="row">
                            <div class="col-12 col-lg-6 col-md-6 col-sm-6">
                              <p>Min Forward Speed-</p>
                            </div>
                            <div class="col-12 col-lg-6 col-md-6 col-sm-6">
                            <div id="Min_Forward_Speed_1"></div>
                            </div>
                          </div>
                        </div>
                        <div class="col-12 col-lg-6 col-md-6 col-sm-6 my-1">
                          <div class="row">
                            <div class="col-12 col-lg-6 col-md-6 col-sm-6">
                              <p>Max Forward Speed-</p>
                            </div>
                            <div class="col-12 col-lg-6 col-md-6 col-sm-6">
                            <div id="Max_Forward_Speed_1"></div>
                            </div>
                          </div>
                        </div>
                        <div class="col-12 col-lg-6 col-md-6 col-sm-6 my-1">
                          <div class="row">
                            <div class="col-12 col-lg-6 col-md-6 col-sm-6">
                              <p>Min Reverse Speed-</p>
                            </div>
                            <div class="col-12 col-lg-6 col-md-6 col-sm-6">
                            <div id="Min_Reverse_Speed_1"></div>
                            </div>
                          </div>
                        </div>
                        <div class="col-12 col-lg-6 col-md-6 col-sm-6 my-1">
                          <div class="row">
                            <div class="col-12 col-lg-6 col-md-6 col-sm-6">
                              <p>Max Reverse Speed-</p>
                            </div>
                            <div class="col-12 col-lg-6 col-md-6 col-sm-6">
                            <div id="Max_Reverse_Speed_1"></div>
                            </div>
                          </div>
                        </div>
                        <div class="clo-12 bg-light"><h6 class="fw-bold text-center py-1"> Steering Details</h6></div>
                        <div class="col-12 col-lg-6 col-md-6 col-sm-6 my-1">
                          <div class="row">
                            <div class="col-12 col-lg-6 col-md-6 col-sm-6">
                              <p>Type-</p>
                            </div>
                            <div class="col-12 col-lg-6 col-md-6 col-sm-6">
                            <div id="st_Type_1"></div>
                            </div>
                          </div>
                        </div>
                        <div class="col-12 col-lg-6 col-md-6 col-sm-6 my-1">
                          <div class="row">
                            <div class="col-12 col-lg-6 col-md-6 col-sm-6">
                              <p>Coloumn-</p>
                            </div>
                            <div class="col-12 col-lg-6 col-md-6 col-sm-6">
                            <div id="Coloumn_1"></div>
                            </div>
                          </div>
                        </div>
                        <div class="clo-12 bg-light"><h6 class="fw-bold text-center py-1">Power Take Off Details</h6></div>
                        <div class="col-12 col-lg-6 col-md-6 col-sm-6 my-1">
                          <div class="row">
                            <div class="col-12 col-lg-6 col-md-6 col-sm-6">
                              <p>Type-</p>
                            </div>
                            <div class="col-12 col-lg-6 col-md-6 col-sm-6">
                            <div id="Type2_1"></div>
                            </div>
                          </div>
                        </div>
                        <div class="col-12 col-lg-6 col-md-6 col-sm-6 my-1">
                          <div class="row">
                            <div class="col-12 col-lg-6 col-md-6 col-sm-6">
                              <p>RPM-</p>
                            </div>
                            <div class="col-12 col-lg-6 col-md-6 col-sm-6">
                            <div id="RPM_1"></div>
                            </div>
                          </div>
                        </div>
                        <div class="clo-12 bg-light"><h6 class="fw-bold text-center py-1">Dimensions And Weight Details</h6></div>
                        <div class="col-12 col-lg-6 col-md-6 col-sm-6 my-1">
                          <div class="row">
                            <div class="col-12 col-lg-6 col-md-6 col-sm-6">
                              <p>Total Weight-</p>
                            </div>
                            <div class="col-12 col-lg-6 col-md-6 col-sm-6">
                            <div id="Total_Weight_1"></div>
                            </div>
                          </div>
                        </div>
                        <div class="col-12 col-lg-6 col-md-6 col-sm-6 my-1">
                          <div class="row">
                            <div class="col-12 col-lg-6 col-md-6 col-sm-6">
                              <p>Wheel Base-</p>
                            </div>
                            <div class="col-12 col-lg-6 col-md-6 col-sm-6">
                            <div id="Wheel_Base_1"></div>
                            </div>
                          </div>
                        </div>
                        <div class="clo-12 bg-light"><h6 class="fw-bold text-center py-1">Hydraulics Details</h6></div>
                        <div class="col-12 col-lg-6 col-md-6 col-sm-6 my-1">
                          <div class="row">
                            <div class="col-12 col-lg-6 col-md-6 col-sm-6">
                              <p>Lifting Capacity-</p>
                            </div>
                            <div class="col-12 col-lg-6 col-md-6 col-sm-6">
                            <div id="Lifting_Capacity_1"></div>
                            </div>
                          </div>
                        </div>
                        <div class="col-12 col-lg-6 col-md-6 col-sm-6 my-1">
                          <div class="row">
                            <div class="col-12 col-lg-6 col-md-6 col-sm-6">
                              <p>3 Point Linkage-</p>
                            </div>
                            <div class="col-12 col-lg-6 col-md-6 col-sm-6">
                            <div id="Point_Linkage_1"></div>
                            </div>
                          </div>
                        </div>
                        <div class="clo-12 bg-light"><h6 class="fw-bold text-center py-1"> Wheels And Tyres Details</h6></div>
                        <div class="col-12 col-lg-6 col-md-6 col-sm-6 my-1">
                          <div class="row">
                            <div class="col-12 col-lg-6 col-md-6 col-sm-6">
                              <p>Wheel Drive-</p>
                            </div>
                            <div class="col-12 col-lg-6 col-md-6 col-sm-6">
                            <div id="Wheel_Drive_1"></div>
                            </div>
                          </div>
                        </div>
                        <div class="col-12 col-lg-6 col-md-6 col-sm-6 my-1">
                          <div class="row">
                            <div class="col-12 col-lg-6 col-md-6 col-sm-6">
                              <p>Front-</p>
                            </div>
                            <div class="col-12 col-lg-6 col-md-6 col-sm-6">
                            <div id="Front_1"></div>
                            </div>
                          </div>
                        </div>
                        <div class="col-12 col-lg-6 col-md-6 col-sm-6 my-1">
                          <div class="row">
                            <div class="col-12 col-lg-6 col-md-6 col-sm-6">
                              <p>Rear-</p>
                            </div>
                            <div class="col-12 col-lg-6 col-md-6 col-sm-6">
                            <div id="Rear_1"></div>
                            </div>
                          </div>
                        </div>
                        <div class="clo-12 bg-light"><h6 class="fw-bold text-center py-1">Other Information Details</h6></div>
                        <div class="col-12 col-lg-6 col-md-6 col-sm-6 my-1">
                          <div class="row">
                            <div class="col-12 col-lg-6 col-md-6 col-sm-6">
                              <p>Accessories-</p>
                            </div>
                            <div class="col-12 col-lg-6 col-md-6 col-sm-6">
                            <div id="Accessories_1"></div>
                            </div>
                          </div>
                        </div>
                        <div class="col-12 col-lg-6 col-md-6 col-sm-6 my-1">
                          <div class="row">
                            <div class="col-12 col-lg-6 col-md-6 col-sm-6">
                              <p>Status-</p>
                            </div>
                            <div class="col-12 col-lg-6 col-md-6 col-sm-6">
                            <div id="Status_1"></div>
                            </div>
                          </div>
                        </div>
                        <div class="col-12 col-lg-6 col-md-6 col-sm-6 my-1">
                          <div class="row">
                            <div class="col-12 col-lg-6 col-md-6 col-sm-6">
                              <p>About-</p>
                            </div>
                            <div class="col-12 col-lg-6 col-md-6 col-sm-6">
                            <div id="About_1"></div>
                            </div>
                          </div>
                        </div>

          </div> -->
</body>

<!-- <script>
const $button  = document.querySelector('#sidebar-toggle');
const $wrapper = document.querySelector('#wrapper');

$button.addEventListener('click', (e) => {
  e.preventDefault();
  $wrapper.classList.toggle('toggled');
});
</script> -->

<!-- <script>
    document.addEventListener('DOMContentLoaded', function() {
  document.body.addEventListener('click', function(e) {
    const $button = e.target.closest('#sidebar-toggle');
    const $wrapper = document.querySelector('#wrapper');

    if ($button) {
      e.preventDefault();
      $wrapper.classList.toggle('toggled');
    }
  });
  });

</script> -->
<!-- <script>
document.addEventListener('DOMContentLoaded', function() {
  document.body.addEventListener('click', function(e) {
    handleSidebarToggle(e);
  });

  document.body.addEventListener('touchstart', function(e) {
    handleSidebarToggle(e);
  });
});

function handleSidebarToggle(e) {
  const $button = e.target.closest('#sidebar-toggle');
  const $wrapper = document.querySelector('#wrapper');

  if ($button) {
    e.preventDefault();
    $wrapper.classList.toggle('toggled');
  }
}
</script> -->

<script>
    document.addEventListener('DOMContentLoaded', function() {
  document.body.addEventListener('click', function(e) {
    const $button = e.target.closest('#sidebar-toggle');
    const $wrapper = document.querySelector('#wrapper');

    if ($button) {
      e.preventDefault();
      $wrapper.classList.toggle('toggled');
      // If there's a form, submit it programmatically
      document.querySelector('form').submit();
    }
  });
});

</script>

<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>

<script>
    $(document).ready(function () {
        const formSections = $(".step");
        const progressBar = $(".progress-bar");
        const nextButtons = $(".nextStep");
        const prevButtons = $(".prevStep");
        const progressHolders = $(".progress_holder");

        let currentSectionIndex = 0;

        function updateProgressBar() {
            const progress = ((currentSectionIndex + 1) / formSections.length) * 100;
            progressBar.css("width", progress + "%");
        }

        function showSection(index) {
            formSections.hide().eq(index).fadeIn(150, 'linear').addClass('current');
            currentSectionIndex = index;
            updateProgressBar();
        }

        function handleStepClick(stepIndex) {
            progressHolders.removeClass('activated_step');
            progressHolders.eq(stepIndex - 1).addClass('activated_step');
            showSection(stepIndex - 1);
        }

        progressHolders.click(function () {
            const stepIndex = $(this).index() + 1;
            handleStepClick(stepIndex);
        });

        nextButtons.click(function () {
            const currentForm = $(this).closest('.step');
            const nextForm = currentForm.next('.step');

            // Validate current form before proceeding
            if (currentForm[0].checkValidity()) {
                currentForm.hide();
                nextForm.show();
                handleStepClick(currentSectionIndex + 2);
            } else {
                // Custom validation error messages for the first step
                $.validator.addMethod('decimal', function(value, element) {
        return this.optional(element) || /^[0-9]+\.\d{1,3}$/.test(value);
    }, "Please enter a correct number, format 0.00");

jQuery.validator.setDefaults({
        debug: true,
        success: "valid"
    });
    $.validator.addMethod("validPrice", function(value, element) {
      
      const cleanedValue = value.replace(/,/g, '');

      return /^\d+$/.test(cleanedValue);
    }, "Please enter a valid price (digits and commas only)");
    $.validator.addMethod("customNumber", function (value, element) {
        // Use a regular expression to validate the input
        return /^(\d+(\.\d+)?|\d*\.\d+)(\*\d+(\.\d+)?|\*\d*\.\d+)?$/.test(value);
    }, "Please enter a valid number or multiplication expression");

                $("#step1_form").validate({
                    rules: {
                        brand_name: {
                            required: true,
                        },
                        model: {
                            required: true,
                        },
                        hp_category: {
                            required: true,
                        },
                        TOTAL_CYCLINDER: {
                            required: true,
                        },
                        horse_power: {
                            required: true,
                        },
                        gear_box_forward: {
                            required: true,
                        },
                        gear_box_reverse: {
                            required: true,
                        },
                        BRAKE_TYPE: {
                            required: true,
                        },
                        starting_price: {
                            required: true,
                            validPrice: true,
                        },
                        ending_price: {
                            required: true,
                            validPrice: true,
                        },
                        warranty: {
                            required: true,
                        },
                        type_name:{
                             required: true,
                        },
                        _image: {
                            required: true,
                        }
                    },
                    messages: {
                        brand_name: {
                    required: "This field is required",
                },
                model: {
                    required: "This field is required",
                },
                hp_category: {
                    required: "This field is required",
                },
                TOTAL_CYCLINDER: {
                    required: "This field is required",
                },
                horse_power: {
                    required: "This field is required",
                },
                gear_box_forward: {
                    required: "This field is required",
                },
                gear_box_reverse: {
                    required: "This field is required",
                },
                BRAKE_TYPE: {
                    required: "This field is required",
                },
                starting_price: {
                    required: "This field is required",
                    validPrice: "Please enter a valid price",
                },
                ending_price: {
                    required: "This field is required",
                    validPrice: "Please enter a valid price",
                },
                warranty: {
                    required: "This field is required",
                },
                type_name:{
                    required: "This field is required",
                },
                _image: {
                    required: "This field is required",
                }
                    },
                });

                $('#nextbtn1').on('click', function () {
                    $('#step1_form').valid();
                });
                $("#step2_form").validate({
            rules: {
                CAPACITY_CC:{
                    required: true,
                    number:true,
                },
                engine_rated_rpm:{
                    required: true,
                    number:true,
                },
                COOLING:{
                    required: true,
                },
                AIR_FILTER:{
                    required: true,
                },
                fuel_pump_id:{
                    required: true,
                },
                TORQUE:{
                    required: true,
                },
                TRANSMISSION_TYPE:{
                    required: true,
                },
                TRANSMISSION_CLUTCH:{
                    required: true,
                },
                min_forward_speed:{
                    required: true,
                    number:true,
                },
                max_forward_speed:{
                    required: true,
                    number:true,
                },
                min_reverse_speed:{
                    required: true,
                    number:true,
                },
                max_reverse_speed:{
                    required: true,
                    number:true,
                }
            },
            messages: {
                CAPACITY_CC:{
                    required:"This field is required",
                    number:"Enter only digits /Decimal Number",
                },
                engine_rated_rpm:{
                    required:"This field is required",
                    number:"Enter only digits /Decimal Number",
                },
                COOLING:{
                    required:"This field is required",
                },
                AIR_FILTER:{
                    required:"This field is required",
                },
                fuel_pump_id:{
                    required:"This field is required",
                },
                TORQUE:{
                    required:"This field is required",
                },
                TRANSMISSION_TYPE:{
                    required:"This field is required",
                },
                TRANSMISSION_CLUTCH:{
                    required:"This field is required",
                },
                min_forward_speed:{
                    required:"This field is required",
                    number:"Enter only digits /Decimal Number",
                },
                max_forward_speed:{
                    required:"This field is required",
                    number:"Enter only digits /Decimal Number",
                },
                min_reverse_speed:{
                    required:"This field is required",
                    number:"Enter only digits /Decimal Number",
                },
                max_reverse_speed:{
                    required:"This field is required",
                    number:"Enter only digits /Decimal Number",
                }
            },
        });

        $('#nextbtn2').on('click', function () {
            $('#step2_form').valid();
        });

        
        $("#step3_form").validate({
            rules: {
                STEERING_DETAIL:{
                    required: true,
                },
                STEERING_COLUMN:{
                    required: true,
                },
                POWER_TAKEOFF_TYPE:{
                    required: true,
                },
                power_take_off_rpm:{
                    required: true,
                },
                totat_weight:{
                    required: true,
                    number:true,
                },
                WHEEL_BASE:{
                    required: true,
                    number:true,
                    
                }
            },
            messages: {
                STEERING_DETAIL:{
                    required:"This field is required",
                },
                STEERING_COLUMN:{
                    required:"This field is required",
                },
                POWER_TAKEOFF_TYPE:{
                    required:"This field is required",
                },
                power_take_off_rpm:{
                    required:"This field is required",
                },

                totat_weight:{
                    required:"This field is required",
                    number:"Enter only digits /Decimal Number",

                },
                WHEEL_BASE:{
                    required:"This field is required",
                    number:"Enter only digits /Decimal Number",
                    
                }
            },
        });

        $('#nextbtn3').on('click', function () {
            $('#step3_form').valid();
        });
        $("#step4_form").validate({
            rules: {
                LIFTING_CAPACITY:{
                    required: true,
                    number:true,
                },
                LINKAGE_POINT:{
                    required: true,
                },
                fuel_tank_cc:{
                    required: true,
                },
                WHEEL_DRIVE:{
                    required: true,
                },
                front_tyre:{
                    required: true,
                    customNumber: true,
                },
                rear_tyre:{
                    required: true,
                    customNumber: true,
                }
            },
            messages: {
                LIFTING_CAPACITY:{
                    required:"This field is required",
                    number:"Enter only digits /Decimal Number",
                },
                LINKAGE_POINT:{
                    required:"This field is required",
                },
                fuel_tank_cc:{
                    required:"This field is required",
                },
                WHEEL_DRIVE:{
                    required:"This field is required",
                },
                front_tyre:{
                    required:"This field is required",
                    customNumber: "Please enter a valid number or multiplication expression",
                },
                rear_tyre:{
                    required:"This field is required",
                    customNumber: "Please enter a valid number or multiplication expression",
                }
            },
        });

        $('#nextbtn4').on('click', function () {
            $('#step4_form').valid();
        });

        $("#step5_form").validate({
            rules: {
                ass_list: {
                    required: true,
                },
                STATUS: {
                    required: true,
                },
                description: {
                    required: true,
                }
            },
            messages: {
                ass_list: {
                    required: "This field is required",
                },
                STATUS: {
                    required: "This field is required",
                },
                description: {
                    required: "This field is required",
                }
            },
        });

        $('#submitbtn').on('click', function(event) {
        event.preventDefault();
        if ($('#step5_form').valid()) {
            // Your custom logic for final submission
            $('#step5_form').submit(); // If you want to submit the form after validation
        }
        });
            }
        });

        prevButtons.click(function () {
            const currentForm = $(this).closest('.step');
            const prevForm = currentForm.prev('.step');

            currentForm.hide();
            prevForm.show();
            handleStepClick(currentSectionIndex);
        });

        // Show the initial form section and set the initial progress bar state
        showSection(currentSectionIndex);
        progressHolders.eq(currentSectionIndex).addClass('activated_step');
    });
</script>
<script>
      jQuery(document).ready(function () {
      ImgUpload();
    });

    function ImgUpload() {
      var imgWrap = "";
      var imgArray = [];

      $('.upload__inputfile').each(function () {
        $(this).on('change', function (e) {
          imgWrap = $(this).closest('.upload__box').find('.upload__img-wrap');
          var maxLength = $(this).attr('data-max_length');

          var files = e.target.files;
          var filesArr = Array.prototype.slice.call(files);
          var iterator = 0;
          filesArr.forEach(function (f, index) {

            if (!f.type.match('image.*')) {
              return;
            }

            if (imgArray.length > maxLength) {
              return false
            } else {
              var len = 0;
              for (var i = 0; i < imgArray.length; i++) {
                if (imgArray[i] !== undefined) {
                  len++;
                }
              }
              if (len > maxLength) {
                return false;
              } else {
                imgArray.push(f);

                var reader = new FileReader();
                reader.onload = function (e) {
                  var html = "<div class='upload__img-box'><div style='background-image: url(" + e.target.result + ")' data-number='" + $(".upload__img-close").length + "' data-file='" + f.name + "' class='img-bg'><div class='upload__img-close'></div></div></div>";
                  imgWrap.append(html);
                  iterator++;
                }
                reader.readAsDataURL(f);
              }
            }
          });
        });
      });

      $('body').on('click', ".upload__img-close", function (e) {
        var file = $(this).parent().data("file");
        for (var i = 0; i < imgArray.length; i++) {
          if (imgArray[i].name === file) {
            imgArray.splice(i, 1);
            break;
          }
        }
        $(this).parent().parent().remove();
      });
    }
</script>

<!-- <script>
    $(document).ready(function () {
        const formSections = $(".step");
        const progressBar = $(".progress-bar");
        const nextButtons = $(".nextStep");
        const prevButtons = $(".prevStep");
        const progressHolders = $(".progress_holder");

        let currentSectionIndex = 0;

        function updateProgressBar() {
            const progress = ((currentSectionIndex + 1) / formSections.length) * 100;
            progressBar.css("width", progress + "%");
        }

        function showSection(index) {
            formSections.hide().eq(index).fadeIn(150, 'linear').addClass('current');
            currentSectionIndex = index;
            updateProgressBar();
        }

        function handleStepClick(stepIndex) {
            progressHolders.removeClass('activated_step');
            progressHolders.eq(stepIndex - 1).addClass('activated_step');
            showSection(stepIndex - 1);
        }

        progressHolders.click(function () {
            const stepIndex = $(this).index() + 1;
            handleStepClick(stepIndex);
        });

        nextButtons.click(function () {
            const currentForm = $(this).closest('.step');
            const nextForm = currentForm.next('.step');

            // Validate current form before proceeding
            if (currentForm[0].checkValidity()) {
                currentForm.hide();
                nextForm.show();
                handleStepClick(currentSectionIndex + 2);
            } else {
                // alert('Please fill in all fields.');
                $("#step1_form").validate({
            rules: {
                brand_name: {
                    required: true,
                },
                model: {
                    required: true,
                },
                hp_category: {
                    required: true,
                },
                TOTAL_CYCLINDER: {
                    required: true,
                },
                horse_power: {
                    required: true,
                },
                gear_box_forward: {
                    required: true,
                },
                gear_box_reverse: {
                    required: true,
                },
                BRAKE_TYPE: {
                    required: true,
                },
                starting_price: {
                    required: true,
                },
                ending_price: {
                    required: true,
                },
                warranty: {
                    required: true,
                },
                _image: {
                    required: true,
                }
            },
            messages: {
                brand_name: {
                    required: "This field is required",
                },
                model: {
                    required: "This field is required",
                },
                hp_category: {
                    required: "This field is required",
                },
                TOTAL_CYCLINDER: {
                    required: "This field is required",
                },
                horse_power: {
                    required: "This field is required",
                },
                gear_box_forward: {
                    required: "This field is required",
                },
                gear_box_reverse: {
                    required: "This field is required",
                },
                BRAKE_TYPE: {
                    required: "This field is required",
                },
                starting_price: {
                    required: "This field is required",
                },
                ending_price: {
                    required: "This field is required",
                },
                warranty: {
                    required: "This field is required",
                },
                _image: {
                    required: "This field is required",
                }
            },
        });

        $('#nextbtn1').on('click', function () {
            $('#step1_form').valid();
        });

            }
        });

        prevButtons.click(function () {
            const currentForm = $(this).closest('.step');
            const prevForm = currentForm.prev('.step');

            currentForm.hide();
            prevForm.show();
            handleStepClick(currentSectionIndex);
        });

        // Show the initial form section and set the initial progress bar state
        showSection(currentSectionIndex);
        progressHolders.eq(currentSectionIndex).addClass('activated_step');
    });
</script> -->

<!-- <script>

            $(document).ready(function () {
                
                // Hide all forms except the first one initially
                $('#multi_step_form form').not(':first').hide();

                // Handle next button click
                $('.nextStep').click(function () {
                    var currentForm = $(this).closest('form');
                    var nextForm = currentForm.next('form');

                    // Validate current form before proceeding
                    if (currentForm[0].checkValidity()) {
                        currentForm.hide();
                        nextForm.show();
                    } else {
                    
                    }
                });

                // Handle previous button click
                $('.prevStep').click(function () {
                    var currentForm = $(this).closest('form');
                    var prevForm = currentForm.prev('form');

                    currentForm.hide();
                    prevForm.show();
                });

                // Handle form submission
                $('#multi_step_form form').submit(function (e) {
                    e.preventDefault();
                    // Add your form submission logic here
                    alert('Form submitted successfully!');
                });
            
            var currentStep = 1;

            function showStep(stepIndex) {
                $('form.step').hide();
                $('form.step:nth-child(' + stepIndex + ')').fadeIn(150, 'linear').addClass('current');
                $('form.step:nth-child(' + stepIndex + ')').find('input').eq(0).focus();
            }

            $('.progress_holder').click(function () {
                var clickedStep = $(this).index() + 1;

                if (clickedStep > currentStep) {
                    // Validation logic can be added here before moving to the next step
                    // For example, check if the required fields are filled before proceeding
                }

                showStep(clickedStep);

                $('.progress_holder').removeClass('activated_step');
                $(this).addClass('activated_step');

                currentStep = clickedStep;
            });

            // Initial activation for the first step
            $('.progress_holder:first-child').addClass('activated_step');
    

        function handleStepClick(stepIndex) {
                    // Remove 'activated_step' class from all progress steps
                    $('.progress_holder').removeClass('activated_step');
                    
                    // Add 'activated_step' class to the clicked progress step
                    $('.progress_holder:nth-child(' + stepIndex + ')').addClass('activated_step');
                }

                // Set click event handlers for each progress step
                $('.progress_holder:nth-child(1)').click(function() {
                    handleStepClick(1);
                });

                $('.progress_holder:nth-child(2)').click(function() {
                    handleStepClick(2);
                });

                $('.progress_holder:nth-child(3)').click(function() {
                    handleStepClick(3);
                });

                $('.progress_holder:nth-child(4)').click(function() {
                    handleStepClick(4);
                });

                $('.progress_holder:nth-child(5)').click(function() {
                    handleStepClick(5);
                });
                $('.progress_holder:nth-child(1)').addClass('activated_step');

                // Manage next and previous buttons //
                
                
        

            document.addEventListener("DOMContentLoaded", function () {
            const formSections = document.querySelectorAll("form");
            const progressBar = document.getElementById("progress-bar");
            const nextButtons = document.querySelectorAll(".nextStep");
            const prevButtons = document.querySelectorAll(".prevStep");
            const progressHolders = document.querySelectorAll(".progress_holder");

            let currentSectionIndex = 0;

            function updateProgressBar() {
                const progress = ((currentSectionIndex + 1) / formSections.length) * 100;
                progressBar.style.width = progress + "%";
            }

            function showSection(index) {
                formSections.forEach((section, i) => {
                    section.style.display = i === index ? "block" : "none";
                });
                currentSectionIndex = index;
                updateProgressBar();
            }

            function handleStepClick(stepIndex) {
                // Remove 'activated_step' class from all progress steps
                progressHolders.forEach((progressHolder) => {
                    progressHolder.classList.remove('activated_step');
                });

                // Add 'activated_step' class to the clicked progress step
                progressHolders[stepIndex - 1].classList.add('activated_step');

                // Show the corresponding form section
                showSection(stepIndex - 1);
            }

            // Set click event handlers for each progress step
            progressHolders.forEach((progressHolder, index) => {
                progressHolder.addEventListener("click", function () {
                    handleStepClick(index + 1);
                });
            });

            // Additional code to handle next and previous buttons
            nextButtons.forEach((button) => {
                button.addEventListener("click", function () {
                    nextSection();
                });
            });

            prevButtons.forEach((button) => {
                button.addEventListener("click", function () {
                    prevSection();
                });
            });
            
            // Show the initial form section and set initial progress bar state
            showSection(currentSectionIndex);
            progressHolders[currentSectionIndex].classList.add('activated_step');
        });

    });

</script> -->

<!-- <script>
    $(document).ready(function () {
        // Initialize form validation
        $("#step1_form").validate({
            rules: {
                brand_name: {
                    required: true,
                },
                model: {
                    required: true,
                },
                hp_category: {
                    required: true,
                },
                TOTAL_CYCLINDER: {
                    required: true,
                },
                horse_power: {
                    required: true,
                },
                gear_box_forward: {
                    required: true,
                },
                gear_box_reverse: {
                    required: true,
                },
                BRAKE_TYPE: {
                    required: true,
                },
                starting_price: {
                    required: true,
                },
                ending_price: {
                    required: true,
                },
                warranty: {
                    required: true,
                },
                _image: {
                    required: true,
                }
            },
            messages: {
                brand_name: {
                    required: "This field is required",
                },
                model: {
                    required: "This field is required",
                },
                hp_category: {
                    required: "This field is required",
                },
                TOTAL_CYCLINDER: {
                    required: "This field is required",
                },
                horse_power: {
                    required: "This field is required",
                },
                gear_box_forward: {
                    required: "This field is required",
                },
                gear_box_reverse: {
                    required: "This field is required",
                },
                BRAKE_TYPE: {
                    required: "This field is required",
                },
                starting_price: {
                    required: "This field is required",
                },
                ending_price: {
                    required: "This field is required",
                },
                warranty: {
                    required: "This field is required",
                },
                _image: {
                    required: "This field is required",
                }
            },
        });

        $('#nextbtn1').on('click', function () {
            $('#step1_form').valid();
        });

           
        $("#step2_form").validate({
            rules: {
                CAPACITY_CC:{
                    required: true,
                },
                engine_rated_rpm:{
                    required: true,
                },
                COOLING:{
                    required: true,
                },
                AIR_FILTER:{
                    required: true,
                },
                fuel_pump_id:{
                    required: true,
                },
                TORQUE:{
                    required: true,
                },
                TRANSMISSION_TYPE:{
                    required: true,
                },
                TRANSMISSION_CLUTCH:{
                    required: true,
                },
                min_forward_speed:{
                    required: true,
                },
                max_forward_speed:{
                    required: true,
                },
                min_reverse_speed:{
                    required: true,
                },
                max_reverse_speed:{
                    required: true,
                }
            },
            messages: {
                CAPACITY_CC:{
                    required:"This field is required",
                },
                engine_rated_rpm:{
                    required:"This field is required",
                },
                COOLING:{
                    required:"This field is required",
                },
                AIR_FILTER:{
                    required:"This field is required",
                },
                fuel_pump_id:{
                    required:"This field is required",
                },
                TORQUE:{
                    required:"This field is required",
                },
                TRANSMISSION_TYPE:{
                    required:"This field is required",
                },
                TRANSMISSION_CLUTCH:{
                    required:"This field is required",
                },
                min_forward_speed:{
                    required:"This field is required",
                },
                max_forward_speed:{
                    required:"This field is required",
                },
                min_reverse_speed:{
                    required:"This field is required",
                },
                max_reverse_speed:{
                    required:"This field is required",
                }
            },
        });

        $('#nextbtn2').on('click', function () {
            $('#step2_form').valid();
        });


        $("#step3_form").validate({
            rules: {
                STEERING_DETAIL:{
                    required: true,
                },
                STEERING_COLUMN:{
                    required: true,
                },
                POWER_TAKEOFF_TYPE:{
                    required: true,
                },
                power_take_off_rpm:{
                    required: true,
                },
                totat_weight:{
                    required: true,
                },
                WHEEL_BASE:{
                    required: true,
                }
            },
            messages: {
                STEERING_DETAIL:{
                    required:"This field is required",
                },
                STEERING_COLUMN:{
                    required:"This field is required",
                },
                POWER_TAKEOFF_TYPE:{
                    required:"This field is required",
                },
                power_take_off_rpm:{
                    required:"This field is required",
                },

                totat_weight:{
                    required:"This field is required",
                },
                WHEEL_BASE:{
                    required:"This field is required",
                }
            },
        });

        $('#nextbtn3').on('click', function () {
            $('#step3_form').valid();
        });
        $("#step4_form").validate({
            rules: {
                LIFTING_CAPACITY:{
                    required: true,
                },
                LINKAGE_POINT:{
                    required: true,
                },
                fuel_tank_cc:{
                    required: true,
                },
                WHEEL_DRIVE:{
                    required: true,
                },
                front_tyre:{
                    required: true,
                },
                rear_tyre:{
                    required: true,
                }
            },
            messages: {
                LIFTING_CAPACITY:{
                    required:"This field is required",
                },
                LINKAGE_POINT:{
                    required:"This field is required",
                },
                fuel_tank_cc:{
                    required:"This field is required",
                },
                WHEEL_DRIVE:{
                    required:"This field is required",
                },
                front_tyre:{
                    required:"This field is required",
                },
                rear_tyre:{
                    required:"This field is required",
                }
            },
        });

        $('#nextbtn4').on('click', function () {
            $('#step4_form').valid();
        });

        $("#step5_form").validate({
            rules: {
                ass_list: {
                    required: true,
                },
                STATUS: {
                    required: true,
                },
                description: {
                    required: true,
                }
            },
            messages: {
                ass_list: {
                    required: "This field is required",
                },
                STATUS: {
                    required: "This field is required",
                },
                description: {
                    required: "This field is required",
                }
            },
        });

        $('#submitbtn').on('click', function(event) {
        event.preventDefault();
        if ($('#step5_form').valid()) {
            // Your custom logic for final submission
            $('#step5_form').submit(); // If you want to submit the form after validation
        }
        });
        
        });



  
</script> -->







<a href="tractor_form_list.php?trac_edit=${row.product_id};"  onclick="trac_edit_id(${row.id});" class="btn btn-primary btn-sm btn_edit"><i class="fas fa-edit" style="font-size: 11px;"></i></a>
