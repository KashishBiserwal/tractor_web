<?php
include 'includes/headertag.php';
include 'includes/footertag.php';
?>

<script>
  var APIBaseURL = "<?php echo $APIBaseURL; ?>";
</script>
<script>
  var baseUrl = "<?php echo $baseUrl; ?>";
</script>
<script src="<?php $baseUrl; ?>model/tractor_listing.js"></script>
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

<style>
        p {
        margin: 0;
        }

        .upload__box {
        padding: 40px;
        width: 50;
        padding-left:6px;

       
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

<div class="container">
    <div class="row  my-4">
    <h4 class="text-center">Fill your Tractor Details</h4>
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
                                                    <div class="col-12 col-sm-4 col-lg-8 col-md-6 mt-4">
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


    </div>
</div>


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



