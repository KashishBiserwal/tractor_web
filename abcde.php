<?php
include 'includes/headertag.php';
include 'includes/footertag.php';
?>
<head>
<style>
        p {
        margin: 0;
        }

        .upload__box {
        padding: 40px;
        width: 50;
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

    #multi_step_form .container #multistep_nav {
    display: flex;
    flex-direction: column; /* Change to column */
    }

    #multi_step_form .container #multistep_nav .progress_holder {
    padding: 20px;
    text-align: center;
    width: ;
    }

    #multi_step_form .container #multistep_nav .activated_step {
    background-color:LightGray;
    color: black;
    }

    #multi_step_form .container fieldset.step {
    position: relative;
    padding: 50px;
    /* text-align: center;
    align-items: center;
    justify-content: center; */
    }

    #multi_step_form .container fieldset.step .nextStep {
    position: absolute;
    right: 49px;
    bottom: 0;
    padding: 5px;
    width: 80px;
    border: 1px solid black;
    background-color:#198754;
    color:white;
    text-align: start;
    
    }

    #multi_step_form .container fieldset.step .prevStep {
    position: absolute;
    left: 49px;
    bottom: 0;
    padding: 5px;
    width: 80px;
    border: 1px solid black;
    background-color:#198754;
    color:white;
    text-align: start;
    }

    #multi_step_form .container fieldset.step:not(:first-of-type) {
    display: none;
    }
    .btn{
        align-items: center;
    }
</style>
</head>

<body>
<section class="form-view bg-white ">
    <div class="container" style="position: relative;">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="row">
                    <div id="multi_step_form">
                        <div class="container">
                               <div class="col-12 col-lg-3 sm-3 md-3 p-2">
                                    <div id="multistep_nav">
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
                                            <p>4.Hydraulics Details, Fuel Tank, Wheels And Tyres Details</p>
                                            
                                        </div>
                                        <div class="progress_holder">
                                            <p>5.Other Information Details</p>
                                            
                                        </div>
                                      
                                    </div>
                                </div>
                            <div class="col-12 col-lg-9 col-sm-9 col-md-9">
                                <fieldset class="step" id="step1">
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
                                            <div class="upload__box mt-2">
                                                <div class="upload__btn-box text-center">
                                                    <label >
                                                    <p class="upload__btn ">Upload images</p>
                                                    <input type="file" multiple="" data-max_length="20" class="upload__inputfile" id="_image" name="_image"required>
                                                    </label>
                                                </div>
                                                <div id="selectedImagesContainer" class="upload__img-wrap"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <input type="submit" value="next" class="nextStep text-center" id="nextbtn">
                                </fieldset>
                                <fieldset class="step" id="step2">
                                <input type="button" value="Prev" class="prevStep text-center mt-5" id="">
                                    <div class="row">
                                        <h4 class="text-center">Engine Details</h4>
                                        <div  class="col-12 col-sm-4 col-lg-4 col-md-4  mt-3">
                                            <div class="form-outline">
                                                <label class="form-label">Capacity CC</label>
                                                <input type="text" placeholder=" " id="CAPACITY_CC"  name="CAPACITY_CC" class="form-control">
                                            </div>
                                        </div>
                                        <div  class="col-12 col-sm-4 col-lg-4 col-md-4 mt-3">
                                            <div class="form-outline">
                                                <label class="form-label">Engine Rated RPM</label>
                                                <input type="text" placeholder=" " id="engine_rated_rpm"  name="engine_rated_rpm" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-4 col-lg-4 col-md-4 mt-3">
                                            <div class="form-outline">
                                                <label class="form-label">Select Cooling</label>
                                                <select class="form-select py-2" id="COOLING" name="COOLING" aria-label="Default select example">
                                                    <option selected disabled="" value="">Please select an option</option>
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-4 col-lg-4 col-md-4 my-3">
                                            <div class="form-outline">
                                                <label class="form-label">Air Filter</label>
                                                <select class="form-select py-2" id="AIR_FILTER" name="AIR_FILTER" aria-label="Default select example">
                                                    <option selected disabled="" value="">Please select an option</option>
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-4 col-lg-4 col-md-4 my-3">
                                            <div class="form-outline">
                                                <label class="form-label">Fuel pump</label>
                                                <select class="form-select py-2" id="fuel_pump_id" name="fuel_pump_id" aria-label="Default select example">
                                                    <option value="0"></option>
                                                    <option value="">1</option>
                                                    <option value="">2</option>
                                                    <option value="">3</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div  class="col-12 col-sm-4 col-lg-4 col-md-4 my-3">
                                            <div class="form-outline">
                                                <label class="form-label">Torque</label>
                                                <input type="text" placeholder=" " id="TORQUE"  name="TORQUE" class="form-control">
                                            </div>
                                        </div>
                                        <h4 class="text-center mt-3">Transmission Details</h4>
                                        <div class="col-12 col-sm-6 col-lg-6 col-md-6 mb-4 mt-2">
                                            <div class="form-outline">
                                                <label class="form-label">Type</label>
                                                <select class="form-select py-2" id="TRANSMISSION_TYPE" name="TRANSMISSION_TYPE" aria-label="Default select example">
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
                                                <select class="form-select py-2" id="TRANSMISSION_CLUTCH" name="TRANSMISSION_CLUTCH" aria-label="Default select example">
                                                    <option selected disabled="" value="">Please select an option</option>
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div  class="col-12 col-sm-6 col-lg-6 col-md-6 mt-2">
                                            <div class="form-outline">
                                                <label class="form-label">Min Forward Speed</label>
                                                <input type="text" placeholder=" " id="min_forward_speed"  name="min_forward_speed" class="form-control">
                                            </div>
                                        </div>
                                        <div  class="col-12 col-sm-6 col-lg-6 col-md-6 mt-2">
                                            <div class="form-outline">
                                                <label class="form-label">Max Forward Speed</label>
                                                <input type="text" placeholder=" " id="max_forward_speed"  name="max_forward_speed" class="form-control">
                                            </div>
                                        </div>
                                        <div  class="col-12 col-sm-6 col-lg-6 col-md-6 mt-3">
                                            <div class="form-outline">
                                                <label class="form-label">Min Reverse Speed</label>
                                                <input type="text" placeholder=" " id="min_reverse_speed"  name="min_reverse_speed" class="form-control">
                                            </div>
                                        </div>
                                        <div  class="col-12 col-sm-6 col-lg-6 col-md-6 mt-3">
                                            <div class="form-outline">
                                                <label class="form-label">Max Reverse Speed</label>
                                                <input type="text" placeholder=" " id="max_reverse_speed"  name="max_reverse_speed" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    <input type="submit" value="next" class="nextStep text-center" id="nextbtn">
                                </fieldset>
                                <fieldset class="step" id="step3">
                                 <input type="button" value="Prev" class="prevStep text-center" id="">
                                    <div class="row">
                                            <h5 class="text-center">Steering Details</h5>
                                        <div class="col-12 col-sm-6 col-lg-6 col-md-6 mt-3">
                                            <div class="form-outline">
                                                <label class="form-label">Type</label>
                                                <select class="form-select py-2" id="STEERING_DETAIL" name="STEERING_DETAIL" aria-label="Default select example" >
                                                <option selected disabled="" value="">Please select an option</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-6 col-lg-6 col-md-6 mt-3">
                                            <div class="form-outline">
                                                <label class="form-label">Coloumn</label>
                                                <select class="form-select py-2" id="STEERING_COLUMN" name="STEERING_COLUMN" aria-label="Default select example" >
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
                                            <input type="text" placeholder=" " id="POWER_TAKEOFF_TYPE"  name="POWER_TAKEOFF_TYPE" class="form-control" >
                                            </div>
                                        </div>
                                        <div  class="col-12 col-sm-6 col-lg-6 col-md-6 mt-3">
                                            <div class="form-outline">
                                                <label class="form-label">RPM</label>
                                                <input type="text" placeholder=" " id="power_take_off_rpm"  name="power_take_off_rpm" class="form-control" >
                                            </div>
                                        </div>
                                        <h5 class="text-center mt-3">Dimensions And Weight Details</h5>
                                        <div  class="col-12 col-sm-6 col-lg-6 col-md-6 mt-3">
                                            <div class="form-outline">
                                                <label class="form-label">Total Weight</label>
                                                <input type="text" placeholder=" " id="totat_weight"  name="totat_weight" class="form-control">
                                            </div>
                                        </div>
                                        <div  class="col-12 col-sm-6 col-lg-6 col-md-6 mt-3">
                                            <div class="form-outline">
                                                <label class="form-label">Wheel Base</label>
                                                <input type="text" placeholder=" " id="WHEEL_BASE"  name="WHEEL_BASE" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    <input type="submit" value="next" class="nextStep text-center" id="nextbtn">
                                </fieldset>
                                 <fieldset class="step" id="step4">
                                 <input type="button" value="Prev" class="prevStep text-center" id="">
                                    <div class="row">
                                        <h5 class="text-center mt-3">Hydraulics Details</h5>
                                        <div  class="col-12 col-sm-6 col-lg-6 col-md-6 mt-3">
                                            <div class="form-outline">
                                                <label class="form-label">Lifting Capacity</label>
                                                <input type="text" placeholder=" " id="LIFTING_CAPACITY"  name="LIFTING_CAPACITY" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-6 col-lg-6 col-md-6 mt-3">
                                            <div class="form-outline">
                                                <label class="form-label">3 Point Linkage</label>
                                                <select class="form-select py-2" id="LINKAGE_POINT" name="LINKAGE_POINT" aria-label="Default select example">
                                                    <option selected disabled="" value="">Please select an option</option>
                                                </select>
                                            </div>
                                        </div>
                                        <h5 class="text-center mt-3">Fuel Tank</h5>
                                        <div  class="col-12 mt-3 ">
                                            <div class="form-outline">
                                                <label class="form-label">Capacity(Ltr)</label>
                                                <input type="text" placeholder=" " id="fuel_tank_cc"  name="fuel_tank_cc" class="form-control">
                                            </div>
                                        </div>
                                        <h5 class="text-center mt-3"> Wheels And Tyres Details</h5>
                                        <div class="col-12 col-sm-4 col-lg-4 col-md-4 mt-3">
                                            <div class="form-outline">
                                            <label class="form-label">Wheel Drive</label>
                                            <select class="form-select py-2" id="WHEEL_DRIVE" name="WHEEL_DRIVE" aria-label="Default select example">
                                                <option selected disabled="" value="">Please select an option</option>
                                            </select>
                                            </div>
                                        </div>
                                        <div  class="col-12 col-sm-4 col-lg-4 col-md-4 mt-4">
                                            <div class="form-outline">
                                            <label class="form-label">Front</label>
                                            <input type="text" placeholder=" " id="front_tyre"  name="front_tyre" class="form-control">
                                            </div>
                                        </div>
                                        <div  class="col-12 col-sm-4 col-lg-4 col-md-4 mt-3">
                                            <div class="form-outline">
                                            <label class="form-label">Rear</label>
                                            <input type="text" placeholder=" " id="rear_tyre"  name="rear_tyre" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    <!-- <div class="nextStep">Next</div> -->
                                    <input type="submit" value="next" class="nextStep text-center" id="nextbtn">
                                </fieldset>
                                <fieldset class="step" id="step5">
                                <input type="button" value="Prev" class="prevStep text-center" id="">
                                    <div class="row">
                                        <h5 class="text-center mt-3">Other Information Details</h5>
                                        <div class="col-12 col-lg-8 col-sm-8 col-md-8 mt-3">
                                            <div class="form-outline">
                                                <label class="form-label">Accessories</label>
                                                <select class="js-example-basic-multiple w-100" name="states[]" id="ass_list" name="ass_list" multiple="multiple" >
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-4 col-lg-4 col-md-4 mt-3">
                                            <div class="form-outline">
                                                <label class="form-label">Status</label>
                                                <select class="form-select py-2" id="STATUS" name="STATUS" aria-label="Default select example">
                                                    <option selected disabled="" value="">Please select an option</option>
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div  class="col-12 mt-4">
                                            <div class="form-outline">
                                                <label class="form-label">About</label>
                                                <textarea rows="4" cols="70" class="w-100" minlength="1" maxlength="255" id="description" name="description"required></textarea>
                                            </div>
                                        </div>
                                        <button type="button" id="save" class="btn btn-success fw-bold px-3 my-4 w-50">Submit</button>
                                    </div>
                                  </fieldset>
                            </div>
                         </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
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
            $(".nextStep").click(function () {
                
                // button is inside fieldset so set current and next vars //
                current_fs = $(this).parents('fieldset');
                next_fs = $(this).parents('fieldset').next();
                // make sure all fields are filled in //
                var empty = current_fs.find("input.required-field").filter(function () {
                    return this.value === "";
                });
                if (empty.length) {
                    alert('Please fill in all fields.');
                } else {
                    //show the next fieldset
                    next_fs.fadeIn(150, 'linear').addClass('current');
                    //hide the current fieldset with style
                    current_fs.fadeOut(0, 'linear').removeClass('current');
                    // change nav class //
                    if ($('fieldset.current').attr('id') == 'step2') {
                        $('.progress_holder:nth-child(2)').addClass('activated_step');
                    }
                    if ($('fieldset.current').attr('id') == 'step3') {
                        $('.progress_holder:nth-child(3)').addClass('activated_step');
                    }
                    if ($('fieldset.current').attr('id') == 'step4') {
                        $('.progress_holder:nth-child(4)').addClass('activated_step');
                    }
                    if ($('fieldset.current').attr('id') == 'step5') {
                        $('.progress_holder:nth-child(5)').addClass('activated_step');
                    }
                
                }
            });
            $(".prevStep").click(function (e) {
                e.preventDefault();
                current_fs = $(this).parents('fieldset');
                previous_fs = $(this).parents('fieldset').prev();
                //show the previous fieldset
                previous_fs.fadeIn(150, 'linear');
                //hide the current fieldset with style
                current_fs.fadeOut(0, 'linear');

                if ($(previous_fs).attr('id') == 'step1') {
                    $('.progress_holder:nth-child(2)').removeClass('activated_step');
                }
                if ($(previous_fs).attr('id') == 'step2') {
                    $('.progress_holder:nth-child(3)').removeClass('activated_step');
                }
                if ($(previous_fs).attr('id') == 'step3') {
                    $('.progress_holder:nth-child(4)').removeClass('activated_step');
                }
                if ($(previous_fs).attr('id') == 'step4') {
                    $('.progress_holder:nth-child(5)').removeClass('activated_step');
                }
            
            });
</script>
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>


<!-- <script>
    $(document).ready(function() {
        // Add validation rules and messages
        $("#multi_step_form").validate({
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
                _image:{
                    required: true,
                },
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
                },
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
                },
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
                 _image:{
                    required:"This field is required",
                },
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
                },
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
                },
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
        $("#nextbtn").on("click", function() {
         
        });

    });
</script>
<script>
    $(document).ready(function() {
        $('#multi_step_form').validate({
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
            submitHandler: function(form) {
                form.submit();
            }
        });

        $('#save').on('click', function() {
            $('#multi_step_form').valid();
        });
    });
</script> -->
<!-- <script>
    $(document).ready(function(){
        $('#multi_step_form').validate({
           rules:{
           
           },
           messages:{
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
                },
                fuel_tank_cc:{

                },
           },
        });
         // Handle form submission
         $("#nextbtn_").on("click", function() {
         
        });
    });
</script> -->
<!-- <script>
       
     

    function showStep(stepIndex) {
        $('fieldset.step').hide();
        $('fieldset.step:nth-child(' + stepIndex + ')').fadeIn(150, 'linear').addClass('current');
        $('fieldset.step:nth-child(' + stepIndex + ')').find('input').eq(0).focus();
    }

    $('.progress_holder').click(function () {
        var stepIndex = $(this).index() + 1;
        showStep(stepIndex);
        $('.progress_holder').removeClass('activated_step');
        $(this).addClass('activated_step');
    });

    $('.progress_holder.activated_step').prev().addClass('activated_step');

    $(".nextStep").click(function () {
        current_fs = $(this).parents('fieldset');
        next_fs = $(this).parents('fieldset').next();

        if (areRequiredFieldsFilled(current_fs)) {
            console.log('Proceeding to the next step.');
            next_fs.fadeIn(150, 'linear').addClass('current');
            current_fs.fadeOut(0, 'linear').removeClass('current');

            // Update progress tracking logic here
            var stepIndex = parseInt(next_fs.attr('id').replace('step', ''));
            $('.progress_holder').removeClass('activated_step');
            $('.progress_holder:nth-child(' + stepIndex + ')').addClass('activated_step');
        } else {
            alert('Please fill in all required fields before proceeding.');
            console.log('Form validation failed. Cannot proceed.');
        }
    });

    $(".prevStep").click(function (e) {
        e.preventDefault();
        current_fs = $(this).parents('fieldset');
        previous_fs = $(this).parents('fieldset').prev();
        previous_fs.fadeIn(150, 'linear');
        current_fs.fadeOut(0, 'linear');

        var stepIndex = parseInt(previous_fs.attr('id').replace('step', ''));
        $('.progress_holder').removeClass('activated_step');
        $('.progress_holder:nth-child(' + stepIndex + ')').addClass('activated_step');
    });

        function showStep(stepIndex) {

            $('fieldset.step').hide();
            $('fieldset.step:nth-child(' + stepIndex + ')').fadeIn(150, 'linear').addClass('current');
            $('fieldset.step:nth-child(' + stepIndex + ')').find('input').eq(0).focus();
        }

        $('.progress_holder:nth-child(1)').addClass('activated_step');

        $('.progress_holder:nth-child(1)').click(function() {
            showStep(1);
            $('.progress_holder').removeClass('activated_step');
            $('.progress_holder:nth-child(1)').addClass('activated_step');
        });

        $('.progress_holder:nth-child(2)').click(function() {
            showStep(2);
            $('.progress_holder').removeClass('activated_step');
            $('.progress_holder:nth-child(2)').addClass('activated_step');
        });

        $('.progress_holder:nth-child(3)').click(function() {
            showStep(3);
            $('.progress_holder').removeClass('activated_step');
            $('.progress_holder:nth-child(3)').addClass('activated_step');
        });

        $('.progress_holder:nth-child(4)').click(function() {
            showStep(4);
            $('.progress_holder').removeClass('activated_step');
            $('.progress_holder:nth-child(4)').addClass('activated_step');
        });

        $('.progress_holder:nth-child(5)').click(function() {
            showStep(5);
            $('.progress_holder').removeClass('activated_step');
            $('.progress_holder:nth-child(5)').addClass('activated_step');
        });

        // Manage next and previous buttons //
        $(".nextStep").click(function () {
            
            // button is inside fieldset so set current and next vars //
            current_fs = $(this).parents('fieldset');
            next_fs = $(this).parents('fieldset').next();
            // make sure all fields are filled in //
            var empty = current_fs.find("input.required-field").filter(function () {
                return this.value === "";
            });
            if (empty.length) {
                alert('Please fill in all fields.');
            } else {
                //show the next fieldset
                next_fs.fadeIn(150, 'linear').addClass('current');
                //hide the current fieldset with style
                current_fs.fadeOut(0, 'linear').removeClass('current');

                if ($('fieldset.current').attr('id') == 'step2') {
                    $('.progress_holder:nth-child(2)').addClass('activated_step');
                }
                if ($('fieldset.current').attr('id') == 'step3') {
                    $('.progress_holder:nth-child(3)').addClass('activated_step');
                }
                if ($('fieldset.current').attr('id') == 'step4') {
                    $('.progress_holder:nth-child(4)').addClass('activated_step');
                }
                if ($('fieldset.current').attr('id') == 'step5') {
                    $('.progress_holder:nth-child(5)').addClass('activated_step');
                }
            
            }
        });

        $(".prevStep").click(function (e) {
            e.preventDefault();
            current_fs = $(this).parents('fieldset');
            previous_fs = $(this).parents('fieldset').prev();
            previous_fs.fadeIn(150, 'linear');
            current_fs.fadeOut(0, 'linear');

            if ($(previous_fs).attr('id') == 'step1') {
                $('.progress_holder:nth-child(2)').removeClass('activated_step');
            }
            if ($(previous_fs).attr('id') == 'step2') {
                $('.progress_holder:nth-child(3)').removeClass('activated_step');
            }
            if ($(previous_fs).attr('id') == 'step3') {
                $('.progress_holder:nth-child(4)').removeClass('activated_step');
            }
            if ($(previous_fs).attr('id') == 'step4') {
                $('.progress_holder:nth-child(5)').removeClass('activated_step');
            }
        
        });
            $('.progress_holder.activated_step').prev().addClass('activated_step');

</script> -->
<!-- <script>
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
</script> -->

</body>



User
<script>
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
            $(".nextStep").click(function () {
                
                // button is inside fieldset so set current and next vars //
                current_fs = $(this).parents('fieldset');
                next_fs = $(this).parents('fieldset').next();
                // make sure all fields are filled in //
                var empty = current_fs.find("input.required-field").filter(function () {
                    return this.value === "";
                });
                if (empty.length) {
                    alert('Please fill in all fields.');
                } else {
                    //show the next fieldset
                    next_fs.fadeIn(150, 'linear').addClass('current');
                    //hide the current fieldset with style
                    current_fs.fadeOut(0, 'linear').removeClass('current');
                    // change nav class //
                    if ($('fieldset.current').attr('id') == 'step2') {
                        $('.progress_holder:nth-child(2)').addClass('activated_step');
                    }
                    if ($('fieldset.current').attr('id') == 'step3') {
                        $('.progress_holder:nth-child(3)').addClass('activated_step');
                    }
                    if ($('fieldset.current').attr('id') == 'step4') {
                        $('.progress_holder:nth-child(4)').addClass('activated_step');
                    }
                    if ($('fieldset.current').attr('id') == 'step5') {
                        $('.progress_holder:nth-child(5)').addClass('activated_step');
                    }
                
                }
            });
            $(".prevStep").click(function (e) {
                e.preventDefault();
                current_fs = $(this).parents('fieldset');
                previous_fs = $(this).parents('fieldset').prev();
                //show the previous fieldset
                previous_fs.fadeIn(150, 'linear');
                //hide the current fieldset with style
                current_fs.fadeOut(0, 'linear');

                if ($(previous_fs).attr('id') == 'step1') {
                    $('.progress_holder:nth-child(2)').removeClass('activated_step');
                }
                if ($(previous_fs).attr('id') == 'step2') {
                    $('.progress_holder:nth-child(3)').removeClass('activated_step');
                }
                if ($(previous_fs).attr('id') == 'step3') {
                    $('.progress_holder:nth-child(4)').removeClass('activated_step');
                }
                if ($(previous_fs).attr('id') == 'step4') {
                    $('.progress_holder:nth-child(5)').removeClass('activated_step');
                }
            
            });
<script>
