<meta name="viewport" content="width=device-width, initial-scale=1">
<?php
include 'includes/headertag.php';

include 'includes/footertag.php';
//    $trac_edit_id=$_REQUEST['trac_edit_id'];
//    echo $trac_edit_id;
   ?>
  <script> var APIBaseURL = "<?php echo $APIBaseURL; ?>";</script>
<script> var baseUrl = "<?php echo $baseUrl; ?>";</script>
<script src="<?php $baseUrl; ?>model/tractor_listing.js"></script>
<!-- <script src="<?php $baseUrl; ?>model/newtractor_listing_get.js"></script> -->



      
<style>
        .step1 ul,.step2 ul,.step3 ul,.step4 ul,.step5 ul{
            margin-bottom: 0;
    padding: 15px 10px;
    font-size: 15px;
    font-weight: 600;
        }
        .step11{
            width: 5px;
            background: #dcdcdc;
            height: 100px;
            margin: 0 auto;
            position: relative;
        }
        .step21{
            width: 5px;
            background: green;
            height: 100px;
            margin: 0 auto;
            position: relative;
        }
        .step12{
            width: 5px;
            background: #dcdcdc;
            height: 75px;
            margin: 0 auto;
            position: relative;
        }
        .step13{
            width: 5px;
            background: #dcdcdc;
            height: 120px;
            margin: 0 auto;
            position: relative;
        }
        .step14{
            width: 5px;
            background: #dcdcdc;
            height: 100px;
            margin: 0 auto;
            position: relative;
        }
        .step15{
            width: 5px;
            background: #dcdcdc;
            height: 75px;
            margin: 0 auto 40px;
            position: relative;
        }

        .step22{
            width: 5px;
            background: green;
            height: 75px;
            margin: 0 auto;
            position: relative;
        }
        .step23{
            width: 5px;
            background: green;
            height: 120px;
            margin: 0 auto;
            position: relative;
        }
        .step24{
            width: 5px;
            background: green;
            height: 100px;
            margin: 0 auto;
            position: relative;
        }
        .step25{
            width: 5px;
            background: green;
            height: 100px;
            margin: 0 auto;
            position: relative;
        }

        .step11::before,.step12::before,.step13::before,.step14::before,.step15::before{
            content: '';
            position: absolute;
            width: 15px;
            height: 15px;
            background-color: #dcdcdc;
            border-radius: 50%;
            left: -5px;
            top: -5px;
        }
        .step15::after{
            content: '';
            position: absolute;
            width: 15px;
            height: 15px;
            background-color: #dcdcdc;
            border-radius: 50%;
            left: -5px;
            bottom: -5px;
        }
        .step25::after{
            content: '';
            position: absolute;
            width: 15px;
            height: 15px;
            background-color: green;
            border-radius: 50%;
            left: -5px;
            bottom: -5px;
        }
        .step21::before,.step22::before,.step23::before,.step24::before,.step25::before{
            content: '';
            position: absolute;
            width: 15px;
            height: 15px;
            background-color: green;
            border-radius: 50%;
            left: -5px;
            top: -5px;
        }
</style>

<body class="loaded">
  <div class="main-wrapper">
    <div class="app" id="app">
      <?php
      include 'includes/left_nav.php';
      include 'includes/header_admin.php';
      ?>
       <section style="padding: 0 15px 0 60px;">
       
                                <div id="wrapper" class="mt-4">
                                  <div class="row">
                                    <div class="col-9">
                                    <section id="content-wrapper" class="shadow p-5 bg-white">
                                
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <form id="step1_form" class="step">
                                                    <div class="row">
                                                        <h4 class="text-center">Listing</h4>
                                                        <div class="col-12 col-sm-6 col-lg-6 col-md-6 mt-3">
                                                            <div class="form-outline">
                                                                <label class="form-label">Brand</label>
                                                                <select class="form-select py-2" id="brand_name" name="brand_name" aria-label="Default select example" required>
                                                                    <!-- <option value="">Select Brand</option> -->
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <!-- <div class="col-12 col-sm-6 col-lg-6 col-md-6 mt-3">
                                                            <div class="form-outline">
                                                                <label class="form-label">Model Name</label>
                                                                <select class="form-select py-2" id="model" name="model" aria-label="Default select example" required>
                                                                    <option value="">Select Model Name</option>
                                                                    <option value="">1</option>
                                                                    <option value="1">2</option>
                                                                    <option value="2">3</option>
                                                                </select>
                                                            </div>
                                                        </div> -->
                                                        <div class="col-12 col-sm-6 col-lg-6 col-md-6 mt-3"hidden>
                                                            <div class="form-outline">
                                                                <label class="form-label">Model Name</label>
                                                                <input type="text" placeholder=" " id="image_type_id" value="1" name="" class="form-control" required>
                                                            </div>
                                                        </div>
                                                        <div class="col-12 col-sm-6 col-lg-6 col-md-6 mt-3">
                                                            <div class="form-outline">
                                                                <label class="form-label">Model Name</label>
                                                                <input type="text" placeholder=" " id="model" name="model" class="form-control" required>
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
                                                        <div class="col-12 col-sm-6 col-lg-6 col-md-6 mt-4">
                                                            <label for="name" class="text-dark fw-bold">Select Tractor Type</label>
                                                            <div id="type_name" name="type_name"></div>
                                                        </div>
                                                        <div class="col-12 col-sm-6 col-lg-6 col-md-6 mt-5">
                                                            <div class="upload__box text-center">
                                                                <div class="upload__btn-box text-center">
                                                                    <label >
                                                                        <p class="upload__btn">Upload images</p>
                                                                        <input type="file" multiple="" data-max_length="20" class="upload__inputfile" id="image_name" name="_image"required>
                                                                    </label>
                                                                </div>
                                                                
                                                                
                                                            </div>
                                                            <p class="text-danger">Note*- Image Must be JPEG, PNG & JPG format</p>
                                                        </div>
                                                        <div class="col-12">
                                                            <div class="upload__box text-center mt-3  w-100">
                                                            <div id="selectedImagesContainer2" class="upload__img-wrap"></div>
                                                            </div>
                                                    
                                                        </div>
                                                        <div class="col-12 mt-3">
                                                        <button type="button" class="nextStep text-center btn btn-success btn_all float-end" id="nextbtn1">Next</button>
                                                        </div>
                                                    </div>
                                              
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
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-12 col-sm-4 col-lg-4 col-md-4 my-3">
                                                            <div class="form-outline">
                                                                <label class="form-label">Air Filter</label>
                                                                <select class="form-select py-2" id="AIR_FILTER" name="AIR_FILTER" aria-label="Default select example"required>
                                                                    <option selected disabled="" value="">Please select an option</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-12 col-sm-4 col-lg-4 col-md-4 my-3">
                                                            <div class="form-outline">
                                                                <label class="form-label">Fuel pump</label>
                                                                <select class="form-select py-2" id="FUEL_PUMP" name="fuel_pump_id" aria-label="Default select example"required>
                                                                    <option selected disabled="" value="">Please select an option</option>
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
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-12 col-sm-6 col-lg-6 col-md-6 mb-4 mt-2">
                                                            <div class="form-outline">
                                                                <label class="form-label">Clutch</label>
                                                                <select class="form-select py-2" id="TRANSMISSION_CLUTCH" name="TRANSMISSION_CLUTCH" aria-label="Default select example"required>
                                                                    <option selected disabled="" value="">Please select an option</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div  class="col-12 col-sm-6 col-lg-6 col-md-6 mt-2">
                                                            <div class="form-outline">
                                                                <label class="form-label">Min-Max Forward Speed(kmph)</label>
                                                                <input type="text" placeholder=" " id="min_forward_speed"  name="min_forward_speed" class="form-control"required>
                                                            </div>
                                                        </div>
                                                        <!-- <div  class="col-12 col-sm-6 col-lg-6 col-md-6 mt-2">
                                                            <div class="form-outline">
                                                                <label class="form-label">Max Forward Speed(kmph)</label>
                                                                <input type="text" placeholder=" " id="max_forward_speed"  name="max_forward_speed" class="form-control"required>
                                                            </div>
                                                        </div> -->
                                                        <div  class="col-12 col-sm-6 col-lg-6 col-md-6 mt-3">
                                                            <div class="form-outline">
                                                                <label class="form-label">Min-Max Reverse Speed(kmph)</label>
                                                                <input type="text" placeholder=" " id="min_reverse_speed"  name="min_reverse_speed" class="form-control"required>
                                                            </div>
                                                        </div>
                                                        <!-- <div  class="col-12 col-sm-6 col-lg-6 col-md-6 mt-3">
                                                            <div class="form-outline">
                                                                <label class="form-label">Max Reverse Speed(kmph)</label>
                                                                <input type="text" placeholder=" " id="max_reverse_speed"  name="max_reverse_speed" class="form-control"required>
                                                            </div>
                                                        </div> -->
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-9"></div>
                                                        <div class="col-3">
                                                            <div class="row  mt-5">
                                                                <div class="col-6">
                                                                    <button type="button" class="prevStep btn btn-success btn_all  text-center" id="prevbtn2">Prev</button>
                                                                </div>
                                                                <div class="col-6">
                                                                    <button type="button" class="nextStep btn btn-success btn_all  text-center" id="nextbtn2">Next</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                   
                                                   
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
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-12 col-sm-6 col-lg-6 col-md-6 mt-3">
                                                            <div class="form-outline">
                                                                <label class="form-label">Coloumn</label>
                                                                <select class="form-select py-2" id="STEERING_COLUMN" name="STEERING_COLUMN" aria-label="Default select example" required>
                                                                    <option selected disabled="" value="">Please select an option</option>
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
                                                    <div class="row">
                                                        <div class="col-9"></div>
                                                        <div class="col-3">
                                                            <div class="row  mt-5">
                                                                <div class="col-6">
                                                                    <button type="button" class="prevStep btn btn-success btn_all  text-center" id="prevbtn3">Prev</button>
                                                                </div>
                                                                <div class="col-6">
                                                                    <button type="button" class="nextStep btn btn-success btn_all  text-center" id="nextbtn3">Next</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

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
                                                    <div class="row">
                                                        <div class="col-9"></div>
                                                        <div class="col-3">
                                                            <div class="row  mt-5">
                                                                <div class="col-6">
                                                                    <button type="button" class="prevStep btn btn-success btn_all  text-center" id="prevbtn4">Prev</button>
                                                                </div>
                                                                <div class="col-6">
                                                                    <button type="button" class="nextStep btn btn-success btn_all  text-center" id="nextbtn4">Next</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                
                                                </form>
                                                <form id="step5_form" class="step">
                                                        <!-- ... Step 5 content ... -->     
                                                    <div class="row">
                                                        <h5 class="text-center mt-3">Other Information Details</h5>
                                                        <div class="col-12 col-lg-8 col-sm-8 col-md-8 mt-0">
                                                            <div class="form-outline">
                                                                <label class="text-dark">Accessories</label>
                                                                <select class="js-example-basic-multiple mt-n2" multiple="multiple"  style="width:100%;" name="states[]" id="ass_list" multiple="multiple" required>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-12 col-sm-4 col-lg-4 col-md-4 mt-3">
                                                            <div class="form-outline">
                                                                <label class="form-label">Status</label>
                                                                    <select class="form-select py-2" id="STATUS" name="STATUS" aria-label="Default select example"required>
                                                                        <option selected disabled="" value="">Please select an option</option>
                                                                    </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-12 mt-4 ">
                                                            <div class="form-outline ">
                                                                <label class="form-label text-dark">About</label>
                                                                <textarea rows="4" cols="70" class="w-100  pt-2" minlength="1" id="description" name="description" required></textarea>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-9"></div>
                                                        <div class="col-3">
                                                            <div class="row  mt-5">
                                                                <div class="col-6">
                                                                    <button type="button" class="prevStep btn btn-success btn_all  text-center" id="prevbtn5">Prev</button>
                                                                </div>
                                                                <div class="col-6">
                                                                    <button type="button" class="subbtn btn btn-success btn_all  text-center" id="submitbtn">Submit</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                     </form>
                                            </div>
                                        </div>
                                        
                                    </section>
                                    </div>
                                    <div class="col-3">
                                    <aside id="sidebar-wrapper" class="shadow">
                                        <div class="sidebar-nav bg-white">
                                            <h4 class="text-center fw-bold pt-3" style="color: #4aa65a; text-transform: uppercase;">Progress</h4>
                                            <div id="multistep_nav" class="col-12 col-lg-12 col-md-12 col-sm-12 mt-4">
                                                <div class="step1">
                                                    <div class="d-flex">
                                                        <div class="col-2">
                                                            <div class="step11 step1list"> </div>
                                                        </div>
                                                        <div class="col-10">
                                                            <ul>
                                                                <li> Listing</li>
                                                                <li> Select Tractor Type</li>
                                                                <li> image</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="step2">
                                                    <div class="d-flex">
                                                        <div class="col-2">
                                                            <div class="step12 step2list"> </div>
                                                        </div>
                                                        <div class="col-10">
                                                            <ul>
                                                                <li>Engine Details</li>
                                                                <li>Transmission Details</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="step3">
                                                    <div class="d-flex">
                                                        <div class="col-2">
                                                            <div class="step13 step3list"> </div>
                                                        </div>
                                                        <div class="col-10">
                                                            <ul>
                                                                <li>Steering Details</li>
                                                                <li>Power Take Off Details</li>
                                                                <li>Dimensions</li>
                                                                <li>Weight Details</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="step4">
                                                    <div class="d-flex">
                                                        <div class="col-2">
                                                            <div class="step14 step4list"> </div>
                                                        </div>
                                                        <div class="col-10">
                                                            <ul>
                                                                <li>Hydraulics Details</li>
                                                                <li>Wheels Details</li>
                                                                <li>Tyres Details</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="step5">
                                                    <div class="d-flex">
                                                        <div class="col-2">
                                                            <div class="step15 step5list"> </div>
                                                        </div>
                                                        <div class="col-10">
                                                            <ul>
                                                                <li>Other Information Details</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                              <!--   <div class="progress_holder"disabled>
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
                                                </div> -->
                                            </div>
                                        </div>
                                    </aside>
                                    </div>
                                  </div>
                                    
                                   
                                   
                                    <a href="tractor_listing.php" class=" mt-4  btn text-center btn-secondary backbtn">Back To Tractor details</a>
                                </div>
                            
    </section>
    </div>
  </div>

<!-- <div class="modal fade" id="viewModal_btn" tabindex="-1" role="dialog" aria-labelledby="viewModalLabel" aria-hidden="true">
   
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="viewModalLabel">View Details</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
           <h1>wertyuytrewertyuioiuytrd</h1>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                
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

<!-- <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script> -->

<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

<script>
     $(document).ready(function () {
        $('.js-example-basic-multiple').select2();
     });
</script>

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
                },"Please enter a valid price (digits and commas only)");
                $.validator.addMethod("customNumber", function (value, element) {
                    // Use a regular expression to validate the input
                    return /^(\d+(\.\d+)?|\d*\.\d+)(\*\d+(\.\d+)?|\*\d*\.\d+)?$/.test(value);
                },"Please enter a valid number or multiplication expression");

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

       
                $("#step4_form").validate({
                    rules: {
                        LIFTING_CAPACITY:{
                            required: true,
                            number:true,
                        },
                        LINKAGE_POINT:{
                            required: true,
                        },
                        // fuel_tank_cc:{
                        //     required: true,
                        // },
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
                        // fuel_tank_cc:{
                        //     required:"This field is required",
                        // },
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

       

                $("#step5_form").validate({
                    // ignore: ":hidden:not(select)",
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

    $('#nextbtn1').on('click', function () {
        $('#step1_form').valid();
        if( $('#step1_form').valid()){
            $(".step1list").removeClass('step11');
            $(".step1list").addClass('step21');
        }
    });
    $('#nextbtn2').on('click', function () {
        $('#step2_form').valid();
        if( $('#step2_form').valid()){
            $(".step2list").removeClass('step12');
            $(".step2list").addClass('step22');
        }
    });
    $('#nextbtn3').on('click', function () {
        $('#step3_form').valid();
        if( $('#step3_form').valid()){
            $(".step3list").removeClass('step13');
            $(".step3list").addClass('step23');
        }
    });
    $('#nextbtn4').on('click', function () {
        $('#step4_form').valid();
        if( $('#step4_form').valid()){
            $(".step4list").removeClass('step14');
            $(".step4list").addClass('step24');
        }
    });
    $('#submitbtn').on('click', function(event) {
        event.preventDefault();
        if ($('#step5_form').valid()) {
            $('#step5_form').submit(); 
            if( $('#step5_form').valid()){
                $(".step5list").removeClass('step15');
                $(".step5list").addClass('step25');
            }
        }
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
