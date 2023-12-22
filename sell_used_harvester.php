<!DOCTYPE html>
<html lang="en">

<head>
   <?php
   include 'includes/headertag.php';
   ?>

    <style>
        .step-container {
            position: relative;
            text-align: center;
            transform: translateY(-43%);
        }

        .step-circle {
            width: 20px;
            height: 22px;
            border-radius: 50%;
            background-color: #4a80d2;
            color: #4a80d2;
            /* border: 6px solid #007bff; */
            line-height: 30px;
            font-weight: bold;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 10px;
            cursor: pointer;
        }
        
        html * {
        box-sizing: border-box;
        }
        .mul_stp_frm{
            overflow-x: hidden;
        }

        
        p {
        margin: 0;
        }

        .upload__box {
        /* padding: 40px; */
        width: 20;
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

        .upload__img-close:after {
        content: '\2716';
        font-size: 14px;
        color: white;
        }

      
    </style>
</head>

<body>
   <?php
   include 'includes/header.php';
   ?>

<section class="bg-light mt-5 pt-5">
    <div class="container pt-5">
        <div class="py-2">
            <span class="my-4 text-white pt-4 ">
                <a href="index.php" class="text-decoration-none header-link px-1">Home <i class="fa-solid fa-chevron-right px-1"></i></a>
                    <span class=""><a href="#" class="text-decoration-none header-link  px-1">Sell Used <i class="fa-solid fa-chevron-right px-1"></i> </a></span>
                    <span class="text-dark">Sell Used Tractor</span>
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
    <h2 class=" text-dark ">Sell Your <span class="text-success">Used Harvester</span></h2>
    <h4 class="mb-4">"Photo Khicho Tractor Becho"</h4>
        </div>
</section>

<section class="form-view bg-white ">
    <div class="container-mid" style="position: relative;">
        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-7">
                <!-- <form id="signUpForm_sellused"  method="Post" class="bg-light"> -->
                    <div id="container" class="container mt-5">
                     
                        <!-- <form id="signUpForm_sllused" class="bg-light"action=""> -->
                            <!-- FORM 1 -->
                        <form id="form-step-1" class="bg-light mul_stp_frm" style="" method="post">
                            <div class="d-flex justify-content-center mb-3">
                                <div class="col-12 col-lg-3 col-md-3 col-sm-3">
                                    <div class="float-start">Harvester Info</div>
                                </div>
                                <div class="col-12 col-lg-3 col-md-3 col-sm-3">
                                    Harvester Condition
                                </div>
                                <div class="col-12 col-lg-4 col-md-4 col-sm-4">
                                    <div class="text-center">Harvester Images</div>
                                </div>
                                <div class="col-12 col-lg-2 col-md-2 col-sm-2">
                                    <div class="float-end">Personal Info</div>
                                </div>                                
                            </div>
                            <div class="progress px-1" style="height: 4px;">
                                <div class="progress-bar" role="progressbar" style="width: 0%; background-color: ##6f98c2;" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>

                            <div class="step-container d-flex justify-content-between">
                                <div class="step-circle" onclick="displayStep(1)">1</div>
                                <div class="step-circle" onclick="displayStep(2)">2</div>
                                <div class="step-circle" onclick="displayStep(3)">3</div>
                                <div class="step-circle" onclick="displayStep(4)">4</div>
                            </div>
                            <div class="step step-1">
                            <!-- Step 1 form fields here -->
                                <div class="step_sellused">
                                    <p class="text-center mb-4">Your Harvester Informations</p>
                                    <div class="row">
                                        <div class="col-12 col-lg-12 col-md-12 col-sm-12 mb-2 mt-3 ">
                                            <div class="form-outline">
                                                <label for="b_name" class="form-label mb-0 text-dark fw-bold">Brand</label>
                                                <select class="form-select py-2 " aria-label=".form-select-lg example" name="b_name" id="b_name">
                                                    <option value="" Selected Disabled=""></option>
                                                    <option value="1">Raipur</option>
                                                    <option value="2">Bilaspur</option>
                                                    <option value="2">Durg</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-12 col-lg-6 col-md-6 col-sm-6 mb-2 mt-3 ">
                                            <div class="form-outline">
                                                <label for="m_name" class="form-label mb-0 text-dark fw-bold">Model</label>
                                                <select class="form-select py-2 " aria-label=".form-select-lg example" name="m_name" id="m_name">
                                                    <option value="" Selected Disabled=""></option>
                                                    <option value="1">Raipur</option>
                                                    <option value="2">Bilaspur</option>
                                                    <option value="2">Durg</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-12 col-lg-6 col-md-6 col-sm-6 mb-2 mt-3 ">
                                            <div class="form-outline">
                                                <label for="c_width" class="form-label mb-0 text-dark fw-bold">Cutting Width</label>
                                                <select class="form-select py-2 " aria-label=".form-select-lg example" name="c_width" id="c_width">
                                                    <option value="" Selected Disabled=""></option>
                                                    <option value="1">Raipur</option>
                                                    <option value="2">Bilaspur</option>
                                                    <option value="2">Durg</option>
                                                </select>
                                            </div>
                                        </div> 
                                        <div class="col-12 col-lg-6 col-md-6 col-sm-6 mb-2 mt-3 ">
                                            <div class="form-outline">
                                                <label for="p_source" class="form-label mb-0 text-dark fw-bold">Power Source</label>
                                                <select class="form-select py-2 " aria-label=".form-select-lg example" name="p_source" id="p_source">
                                                    <option value="" Selected Disabled=""></option>
                                                    <option value="1">Raipur</option>
                                                    <option value="2">Bilaspur</option>
                                                    <option value="2">Durg</option>
                                                </select>
                                            </div>
                                        </div>                        
                                        <div class="col-12 col-lg-6 col-md-6 col-sm-6 mb-2 mt-3 ">
                                            <div class="form-outline">
                                                <label for="c_type" class="form-label mb-0 text-dark fw-bold">Crop Type</label>
                                                <select class="form-select py-2 " aria-label=".form-select-lg example" name="c_type" id="c_type">
                                                    <option value="" Selected Disabled=""></option>
                                                    <option value="1">Raipur</option>
                                                    <option value="2">Bilaspur</option>
                                                    <option value="2">Durg</option>
                                                </select>
                                            </div>
                                        </div> 
                                    </div>
                                    <div class="form-footer d-flex my-3">
                                        <button type="submit" id="  " class="btn btn-success w-100 next-step">Next</button>
                                    </div>
                                </div>
                            </div>
                        </form>

                        <!-- FORM 2 -->
                        <form id="form-step-2" class="bg-light mul_stp_frm" style="display:none;" method="post" action="">
                            <div class="d-flex justify-content-center mb-3">
                                <div class="col-12 col-lg-3 col-md-3 col-sm-3">
                                    <div class="float-start">Harvester Info</div>
                                </div>
                                <div class="col-12 col-lg-3 col-md-3 col-sm-3">
                                    Harvester Condition
                                </div>
                                <div class="col-12 col-lg-4 col-md-4 col-sm-4">
                                    <div class="text-center">Harvester Images</div>
                                </div>
                                <div class="col-12 col-lg-2 col-md-2 col-sm-2">
                                    <div class="float-end">Personal Info</div>
                                </div>                                
                            </div>
                            <div class="progress px-1" style="height: 4px;">
                                <div class="progress-bar" role="progressbar" style="width: 0%; background-color: ##6f98c2;" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <div class="step-container d-flex justify-content-between">
                                <div class="step-circle" onclick="displayStep(1)">1</div>
                                <div class="step-circle" onclick="displayStep(2)">2</div>
                                <div class="step-circle" onclick="displayStep(3)">3</div>
                                <div class="step-circle" onclick="displayStep(4)">4</div>
                            </div>
                            <div class="step step-2">
                                <!-- Step 2 form fields here -->
                                <div class="">
                                    <p class="text-center mb-4">Your Harvester Condition</p>
                                    <div class="row">
                                        <div class="col-12 col-lg- col-md-6 col-sm-6 mb-2 mt-3 ">
                                            <div class="form-outline">
                                                <label for="_hours" class="form-label mb-0 text-dark fw-bold"> Hours Driven</label>
                                                <select class="form-select py-2 " aria-label=".form-select-lg example" name="_hours" id="_hours">
                                                    <option value="" Selected Disabled=""></option>
                                                    <option value="1">Raipur</option>
                                                    <option value="2">Bilaspur</option>
                                                    <option value="2">Durg</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-12 col-md-6 col-lg-6 mt-3">
                                            <div class="form-outline">
                                                <label for="p_year" class="form-label mb-0 text-dark fw-bold"> Purchase Year</label>
                                                <select class="form-select py-2 " aria-label=".form-select-lg example" name="p_year" id="p_year">
                                                    <option value="" Selected Disabled=""></option>
                                                    <option value="1">Raipur</option>
                                                    <option value="2">Bilaspur</option>
                                                    <option value="2">Durg</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-12 col-md-6 col-lg-6 mt-3">
                                            <div class="form-outline">
                                                <label for="_price" class="form-label mb-0 text-dark fw-bold"> Price</label>
                                                <input type="text" class="form-control mb-0" placeholder="Enter Price" id="_price" name="_price"  oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');">
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-12 col-md-12 col-lg-12 mt-3">
                                                <label for="a_hrvst" class="form-label text-dark  fw-bold">About Your Harvester</label>
                                                <textarea class="form-control" rows="3" placeholder="Leave a comment here (max 200 words)" name="a_hrvst" id="a_hrvst" onkeydown="return /[a-zA-Z\s]/i.test(event.key)"  oninput="limitWords(this, 200)"></textarea>
                                        </div>

                                    </div>
                                    <div class="form-footer d-flex mt-3">
                                        <button type="button" class="btn btn-success w-50 prev-step" id="">Previous</button>
                                        <button type="button" class="btn btn-success ms-2 w-50 next-step" id="">Next</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <!-- FORM 3  -->
                        <form id="form-step-3" class="bg-light mul_stp_frm" style="display:none;" method="post" action="">
                            <div class="d-flex justify-content-center mb-3">
                                <div class="col-12 col-lg-3 col-md-3 col-sm-3">
                                    <div class="float-start">Harvester Info</div>
                                </div>
                                <div class="col-12 col-lg-3 col-md-3 col-sm-3">
                                    Harvester Condition
                                </div>
                                <div class="col-12 col-lg-4 col-md-4 col-sm-4">
                                    <div class="text-center">Harvester Images</div>
                                </div>
                                <div class="col-12 col-lg-2 col-md-2 col-sm-2">
                                    <div class="float-end">Personal Info</div>
                                </div>                                
                            </div>
                            <div class="progress px-1" style="height: 4px;">
                                <div class="progress-bar" role="progressbar" style="width: 0%; background-color: ##6f98c2;" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <div class="step-container d-flex justify-content-between">
                                <div class="step-circle" onclick="displayStep(1)">1</div>
                                <div class="step-circle" onclick="displayStep(2)">2</div>
                                <div class="step-circle" onclick="displayStep(3)">3</div>
                                <div class="step-circle" onclick="displayStep(4)">4</div>
                            </div>
                            <div class="step step-3">
                                <!-- Step 3 form fields here -->
                                <p class="text-center mb-4">Your Harvester Images</p>
                                <div class="col-12 col-sm-12 col-md-12 col-lg-12 mb-0 m-0 p-1">
                                    <div class="upload__box">
                                        <div class="upload__btn-box">
                                            <label>
                                                <p class="upload__btn w-100">Upload images</p>
                                                <input type="file" multiple="" data-max_length="3" class="upload__inputfile" id="_file" name="_file">
                                            </label>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="upload__img-wrap"></div>
                                        </div>
                                    </div>
                                    <!-- <input type="file" id="_file" class="w-100 pb-0 mb-auto" name="_file" required> -->
                                </div>
                                    <div class="form-footer d-flex mt-3">
                                        <button type="button" class="btn btn-success w-50 prev-step" id="">Previous</button>
                                        <button type="button" class="btn btn-success ms-2 w-50 next-step" id="">Next</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                        
                        <!-- FORM 4 -->
                        <form id="form-step-4" class="bg-light mul_stp_frm" action="" method="post" style="display:none;">
                            <div class="d-flex justify-content-center mb-3">
                                <div class="col-12 col-lg-3 col-md-3 col-sm-3">
                                    <div class="float-start">Harvester Info</div>
                                </div>
                                <div class="col-12 col-lg-3 col-md-3 col-sm-3">
                                    Harvester Condition
                                </div>
                                <div class="col-12 col-lg-4 col-md-4 col-sm-4">
                                    <div class="text-center">Harvester Images</div>
                                </div>
                                <div class="col-12 col-lg-2 col-md-2 col-sm-2">
                                    <div class="float-end">Personal Info</div>
                                </div>                                
                            </div>
                            <div class="progress px-1" style="height: 4px;">
                                <div class="progress-bar" role="progressbar" style="width: 0%; background-color: ##6f98c2;" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <div class="step-container d-flex justify-content-between">
                                <div class="step-circle" onclick="displayStep(1)">1</div>
                                <div class="step-circle" onclick="displayStep(2)">2</div>
                                <div class="step-circle" onclick="displayStep(3)">3</div>
                                <div class="step-circle" onclick="displayStep(4)">4</div>
                            </div>
                            <div class="step step-4">
                                <!-- Step 4 form fields here -->
                                <p class="text-center mb-4">Your Personal Info</p>
                                <div class="row">
                                        <div class="col-12 col-lg-6 col-md-6 col-sm-6 mb-2 mt-3 ">
                                            <div class="form-outline">
                                                <label for="f_name" class="form-label mb-0 text-dark"> <i class="fa-regular fa-user"></i> First Name</label>
                                                <input type="text" class="form-control mb-0" placeholder="Enter Your Name" id="f_name" name="f_name" >
                                            </div>
                                        </div>
                                        <div class="col-12 col-lg-6 col-md-6 col-sm-6 mb-2 mt-3">
                                            <div class="form-outline">
                                                <label for="eo_name" class="form-label text-dark"> <i class="fa-regular fa-user"></i> Last Name</label>
                                                <input type="text" class="form-control mb-0" placeholder="Enter Your Name" id="eo_name" name="eo_name" >
                                            </div>
                                        </div>
                                        <div class="col-12 col-lg-6 col-md-6 col-sm-6 ">
                                            <div class="form-outline mt-3">
                                                <label for="eo_number" class="form-label text-dark"> <i class="fa fa-phone" aria-hidden="true"></i> Phone Number</label>
                                                <input type="text" class="form-control mb-0" placeholder="Enter Number" id="eo_number" name="eo_number" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');" >
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                                        <div class="form-outline mt-3">
                                                <label for="eo_state" class="form-label text-dark" id="state" name="state"> <i class="fas fa-location"></i> State</label>
                                                <select class="form-select py-2 " aria-label=".form-select-lg example"id="eo_state" name="eo_state">
                                                    <option  value="" Selected Disabled=""></option>
                                                    <option value="1">Chhattisgarh</option>
                                                    <option value="2">Other</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                                            <div class="form-outline mt-4">
                                                <label for="eo_dist" class="form-label text-dark"><i class="fa-solid fa-location-dot"></i> District</label>
                                                <select class="form-select py-2 " aria-label=".form-select-lg example" name="eo_dist" id="eo_dist">
                                                    <option value="" Selected Disabled=""></option>
                                                    <option value="1">Raipur</option>
                                                    <option value="2">Bilaspur</option>
                                                    <option value="2">Durg</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                                            <div class="form-outline mt-4">
                                                <label for="eo_tehsil" class="form-label fw-bold text-dark"> Tehsil</label>
                                                <select class="form-select py-2 " aria-label=".form-select-lg example" id="eo_tehsil" name="eo_tehsil">
                                                    <option value="" selected disabled=""></option>
                                                    <option value="2">Durg</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                
                                <div class="form-footer d-flex mt-4">
                                    <button type="button" class="btn w-50 btn-primary prev-step">Previous</button>
                                    <button type="submit" class="btn w-50 ms-2 btn-success">Submit</button>
                                </div>
                            </div>
                            <div id="success-message" style="display: none;" class="alert alert-success" role="alert">
                                Form submitted successfully!
                            </div>
                        </form>
                    </div>
                <!-- </form> -->
            </div>
        </div>
    </div>
</section>

<!-- RECENTLTY ASKED QUESTONS -->
<section class="about bg-light">
        <div class="container">
            <div class="lecture_heading text-center">
                <h3 class="fw-bold mt-4 pt-4">Recently Asked User Questions about Used Tractor Valuation</h3>
            </div>
            <div class="mt-4 pb-5">
                <div class="accordion " id="accordionFlushExample">
                    <div class="accordion-item  rounded-3">
                        <h2 class="accordion-header p-2" id="flush-headingOne" >
                        <button class="accordion-button collapsed fw-bold h4" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                        Que. What is used tractor valuation?
                        </button>
                        </h2>
                        <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                <p class="text-dark">Ans: Just after purchasing a tractor, your tractor value starts decreasing that is called depreciation. When you sell your used tractor the price isn’t the same one on which you purchased your tractor. So, this Used Tractor Valuation tool helps you to find out the true tractor resale value of your tractor.</p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item rounded-3 my-3">
                        <h2 class="accordion-header p-2" id="flush-headingTwo">
                        <button class="accordion-button collapsed  fw-bold h4" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                            Que. How to know fair tractor value price in our state?
                        </button>
                        </h2>
                        <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">
                            <p class="text-dark">Ans: It's a simple process you get true value tractor price in just a few seconds. You have to tell you some information regarding tractor like your tractor brand, model number, state, year of purchase, tire condition, your name and mobile number. Now you have to go on, get valuation then you get fair used tractor value.</p>
                        </div>
                        </div>
                    </div>
                    <div class="accordion-item  rounded-3 my-3">
                        <h2 class="accordion-header p-2" id="flush-headingThree">
                        <button class="accordion-button collapsed  fw-bold h4" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                            Que. How to use an old tractor valuation calculator?
                        </button>
                        </h2>
                        <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">
                           <p class="text-dark">Ans. At TractorJunction, go on used tractor valuation then select your tractor brand name, select model number, select state, then select owner, select year in which you purchased your tractor, select tire condition of your tractor than add your name and mobile number. Then go on, get valuation and finally you get your fair tractor resale value.</p>
                        </div>
                        </div>
                    </div>
                    <div class="accordion-item  rounded-3 my-3">
                        <h2 class="accordion-header p-2" id="flush-heading4">
                        <button class="accordion-button collapsed  fw-bold h4" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse4" aria-expanded="false" aria-controls="flush-collapse4">
                            Que. How do we know this is a fair tractor resale value?
                        </button>
                        </h2>
                        <div id="flush-collapse4" class="accordion-collapse collapse" aria-labelledby="flush-heading4" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">
                            <p class="text-dark">Ans. Used tractor value calculator is made by our experts. This tool gives the price according to your tractor details which are given by you. Then this tool studies your tractor details and gives you a fair resale tractor price.</p>
                        </div>
                        </div>
                    </div>
                    <div class="accordion-item  rounded-3 my-3">
                        <h2 class="accordion-header p-2" id="flush-heading5">
                        <button class="accordion-button collapsed  fw-bold h4" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse5" aria-expanded="false" aria-controls="flush-collapse5">
                            Que. After using used tractor valuation in India, how to sell the tractor?
                        </button>
                        </h2>
                        <div id="flush-collapse5" class="accordion-collapse collapse" aria-labelledby="flush-heading5" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                            <p class="text-dark">Ans. Just like the used tractor valuation, you can easily sale your old tractor on TractorJunction. Go on, sell tractor online and fill the form and after that our team helps you in selling your tractor. Upload photos of your tractor if you want to sell your tractor quicker.</p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item  rounded-3 my-3">
                        <h2 class="accordion-header p-2" id="flush-heading6">
                        <button class="accordion-button collapsed  fw-bold h4" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse6" aria-expanded="false" aria-controls="flush-collapse6">
                        Que. Do we have to pay for using used tractor valuation?
                        </button>
                        </h2>
                        <div id="flush-collapse6" class="accordion-collapse collapse" aria-labelledby="flush-heading6" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                <p class="text-dark">Ans. No, TractorJunction has launched this feature for your convenience. Used tractor value guides free and provides you with a fair tractor resale price in India.</p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item  rounded-3 my-3">
                        <h2 class="accordion-header p-2" id="flush-headingoil">
                        <button class="accordion-button collapsed  fw-bold h4" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseoil" aria-expanded="false" aria-controls="flush-collapseoil">
                          Que. How does the Used Tractor Valuation impact the condition of my tractor tyre?
                        </button>
                        </h2>
                        <div id="flush-collapseoil" class="accordion-collapse collapse" aria-labelledby="flush-headingoil" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                <p class="text-dark">Ans. If you want to know the fair price of your tractor which you want to sell then you have to also give the condition of your tyre because it affects the price.</p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item  rounded-3 my-3">
                        <h2 class="accordion-header p-2" id="flush-heading7">
                        <button class="accordion-button collapsed  fw-bold h4" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse7" aria-expanded="false" aria-controls="flush-collapse7">
                        Que. Is TractorJunction the right place to sell our tractor?
                        </button>
                        </h2>
                        <div id="flush-collapse7" class="accordion-collapse collapse" aria-labelledby="flush-heading7" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                               <p class="text-dark">Ans. Yes, TractorJunction is India's number one online platform where you get all brands tractors and their specifications. On TractorJunction you can also sell your used tractor. From used tractor valuation you get fair price of your tractor and from that, you can easily sale your tractor online.</p>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>

           
        </div>
</section>

<section class="bestplace">
    <div class="container py-4 mb-1">
       <div class="col-12 text-center py-4 my-1">
        <div class="col-12"></div>
       
        <h2 class="my-4 text-white">Bharat tractor is Best Place to <span class=" fw-bold text-warning"> sell your Tractor</span></h3>
        <div class="text-center">
            <span><i class="fa-solid fa-star text-warning"></i> <i class="fa-solid fa-star text-warning"></i> <i class="fa-solid fa-star text-warning"></i> <i class="fa-solid fa-star-half text-warning"></i></span>
        </div>
        <p class="text-white py-2 mt-3">As famous agriculture researchers quote, Tractors do not come with glamorous features like any other automobile but for sure go out with a glamorous price. In simple words, a tractor that comes with a high resale value is more dependable than the ones which do not offer a good resale price. Tractor Junction works to make this price even better for you. If you want to sell your old tractor at the best price and ease then we have got you a simplified process that comforts you and does not hamper you in your daily lives. Register with us, submit your inquiry, post the update about your tractor and you are done, our highly trained tractor specialists quote the best price for your tractor and work to get hassle free buyers on-board. Selling an old tractor had never been this easy, with Tractor Junction your tractor loves you back the way you do.</p>
       </div>
    </div>
</section>


<?php
    include 'includes/footer.php';
    include 'includes/footertag.php';

?>


    <!-- SCRIPT FOR THE DISPLAY & HIDE -->
    <script>
        $(document).ready(function () {
            var currentStep = 1;
            var updateProgressBar;

            function displayStep(stepNumber) {
                if (stepNumber >= 1 && stepNumber <= 4) {
                    $(".mul_stp_frm").hide();
                    $("#form-step-" + stepNumber).show();
                    currentStep = stepNumber;
                    updateProgressBar();
                }
            }

            $(".next-step").click(function (event) {
                event.preventDefault();
                var currentStepForm = $("#form-step-" + currentStep);

                if (currentStepForm.valid()) {
                    currentStepForm.hide();
                    currentStep++;
                    $("#form-step-" + currentStep).show();
                    updateProgressBar();
                }
            });

            $(".prev-step").click(function (event) {
                event.preventDefault();
                currentStep--;
                displayStep(currentStep);
            });

            updateProgressBar = function () {
                var progressPercentage = ((currentStep - 1) / 3) * 100;
                $(".progress-bar").css("width", progressPercentage + "%");
            };

            $(".step-circle").click(function () {
                var stepNumber = parseInt($(this).text());

                if (stepNumber > currentStep) {
                    var currentStepForm = $("#form-step-" + currentStep);
                    if (!currentStepForm.valid()) {
                        return;
                    }
                }

                displayStep(stepNumber);
            });

            displayStep(1);
        });
    </script>

    <!-- SCRIPT FOR THE VALIDATION OF 1st FORM -->
    <script>
        $(document).ready(function(){
            $("form[id='form-step-1']").validate({
                rules: {
                    b_name: {
                        required: true
                    },
                    m_name: {
                        required: true
                    },
                    c_width: {
                        required: true
                    },
                    p_source: {
                        required: true
                    },
                    c_type: {
                        required: true
                    }
                },
                messages: {
                    b_name: {
                        required: "Select Your Brand"
                    },
                    m_name: {
                        required: "Select Your Model"
                    },
                    c_width: {
                        required: "Select Cutting Width"
                    },
                    p_source: {
                        required: "Select The Power Source"
                    },
                    c_type: {
                        required: "Select Crop Type"
                    }                   
                },
            });
        });
    </script>


    <!-- SCRIPT FOR THE VALIDATION OF 2nd FORM -->
    <script>
        $(document).ready(function(){
            $("form[id='form-step-2']").validate({
                rules: {
                    _hours: {
                        required: true
                    },
                    p_year: {
                        required: true
                    },
                    _price: {
                        required: true,
                        maxlength:7
                    },
                    a_hrvst: {
                        required: true
                    }
                },
                messages: {
                    _hours: {
                        required: "Select Hours Driven"
                    },
                    p_year: {
                        required:"Select Purchase Year"
                    },
                    _price: {
                        required: "Enter Price Of Harvester",
                        maxlength: "Price can't be more than 99,99,999"
                    },
                    a_hrvst: {
                        required: "Description About Your Harvester"
                    }                     
                },
            });
        });
    </script>

    <!-- SCRIPT FOR THE VALIDATION OF 3rd FORM -->
    <script>
        $(document).ready(function(){
            $("form[id='form-step-3']").validate({
                rules: {
                    _file: {
                        required: true,
                    }
                },
                messages: {
                    _file: {
                        required: "Upload Image"
                    }                   
                },
            });
        });
    </script>


    <!-- SCRIPT FOR LIMITING THE WORDS -->
    <script>
        function limitWords(textarea, maxWords) {
            // Split the input value by spaces to count words
            let words = textarea.value.trim().split(/\s+/);
            
            // Update the word count display (optional)
            let wordCountDisplay = document.getElementById('wordCountDisplay'); // Assuming you have an element to display the word count
            if (wordCountDisplay) {
            wordCountDisplay.textContent = words.length;
            }

            // Restrict input if the word count exceeds the limit
            if (words.length > maxWords) {
            // Prevent further input
            textarea.value = words.slice(0, maxWords).join(' ');
            // Optionally, display a message or alert the user about the limit
            // Example: alert("Maximum word limit reached");
            }
        }
    </script>


    <!-- SCRIPT FOR THE VALIDATION OF 4th FORM -->
    <script>
        $(document).ready(function(){
            jQuery.validator.addMethod("customPhoneNumber", function(value, element) {
                return /^[6-9]\d{9}$/.test(value); 
            }, "Phone number must start with 6 or above");
            $("form[id='form-step-4']").validate({
                rules: {
                    f_name: {
                        required: true,
                        minlength: 3
                    },
                    eo_name: {
                        required: true,
                        minlength: 3
                    },
                    eo_number: {
                        required: true,
                        minlength: 10,
                        maxlength: 10,
                        digits: true,
                        customPhoneNumber: true 
                    },
                    eo_state: {
                        required: true
                    },
                    eo_dist: {
                        required: true
                    }
                },
                messages: {
                    f_name: {
                        required: "Enter Your First Name",
                        minlength: "First Name must be atleast 3 characters long"
                    },
                    eo_name: {
                        required: "Enter Your Last Name",
                        minlength: "Last Name must be atleast 3 characters long"
                    },
                    eo_number: {
                        required: "Enter Your Phone Number",
                        minlength: "Phone Number must be of 10 Digit",
                        maxlength: "Ensure exactly 10 digits of Mobile No.",
                        digits: "Please enter only digits"
                    },
                    eo_state: {
                        required: "Select Your State"
                    },
                    eo_dist: {
                        required: "Select Your District"
                    }                        
                },
            });
        });
    </script>




    <!-- SCRIPT FOR THE VALIDATION OF IAMGE UPLOAD -->
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
                    }
                    else
                    {
                        var len = 0;
                        for (var i = 0; i < imgArray.length; i++) {
                            if (imgArray[i] !== undefined) {
                            len++;
                            }
                        }
                        if (len > maxLength) {
                            return false;
                        }
                        else {
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
</body>
</html>