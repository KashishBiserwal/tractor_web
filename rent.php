<!DOCTYPE html>
<html lang="en">

   <?php
  include 'includes/headertag.php';
    //include 'includes/headertagadmin.php';
     include 'includes/footertag.php';
     
     ?> 
    <script> var APIBaseURL = "<?php echo $APIBaseURL; ?>";</script>
    <script> var baseUrl = "<?php echo $baseUrl; ?>";</script>
    <script src="<?php $baseUrl; ?>model/rent.js"></script>
    <script src="<?php $baseUrl; ?>model/State_dist_tehsil.js"></script>

<head>
    <?php
   include 'includes/header.php';
   ?>

    <style>
    .container-mid {
        max-width: 1280px;
        margin: 0 auto;
        width: 55%;
        padding-left: 8px;
        padding-right: 8px;
        margin-top: -214px;
    }

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
    .mul_stp_frm {
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
        background-color: #198754;
        border-color: #198754;
        border-radius: 10px;
        line-height: 26px;
        font-size: 14px;
    }
    .upload__btn:hover {
        background-color: unset;
        color: #198754;
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


    <section class=" mt-5 pt-5 bg-light">
        <div class="container pt-3 mt-4">
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
                    <span class="text-dark">Rent</span>
                </span>
            </div>
        </div>
    </section>

    <!--Banner-->
    <div class="container-fluid">
        <div class="row siv" id="">
            <img src="assets/images/rent.jpg" alt="reload img" class="w-100" style="height:358px;">
            <div class="container-mid">
                <div class="row justify-content-center loan_form bg-light">
                    <h4 class="text-dark text-center fw-bold mt-3 mb-0">Rent Your Tractors and Implements</h4>
                        <form id="rent_list_form_">
                            <div class="row justify-content-center pt-4">
                                <div class="col-12 col-sm-12 col-md-4 col-lg-4 mt-2" hidden>
                                    <div class="form-outline">
                                        <input type="text" id="enquiry_type_id" name="" value="18" class=" data_search form-control input-group-sm py-2" />
                                    </div>
                                </div>
                                <div class="col-12 col-lg-6 col-md-6 col-sm-6 " hidden>
                                    <label for="name" class="form-label fw-bold text-dark"> <i class="fa-regular fa-user"></i> product type id</label>
                                    <input type="text" class="form-control" id="added_by" value="">
                                </div>
                                <div class="col-12 col-sm-4 col-md-4 col-lg-4">
                                    <div class="form-outline">
                                        <label class="form-label text-dark">Brand</label>
                                        <select class="form-select" aria-label="Default select example"id="brand" name="brand">
                                        
                                        </select>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-4 col-md-4 col-lg-4">
                                    <div class="form-outline">
                                        <label class="form-label text-dark">Model</label>
                                        <select class="form-select" aria-label="Default select example"id="model_main" name="model">
                                         
                                        </select>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-4 col-md-4 col-lg-4">
                                    <div class="form-outline">
                                        <label class="form-label text-dark">Year</label>
                                        <select class="form-select" aria-label="Default select example"id="year_main" name="year">
                                    
                                        </select>
                                    </div>
                                </div>
                                <div class="table-responsive my-3">
                                    <table id="rentTractorTable" class="table table-sm">
                                        <thead>
                                            <tr>
                                                <th>No.</th>
                                                <th width="80">Image</th>
                                                <th>Implement Type</th>
                                                <th>Rate</th>
                                                <th>Rate Per</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td> 
                                                <td>
                                                    <div class="card upload-img-wrap" onclick="triggerFileInput('impImage_0')" style="height:38px;">
                                                        <i class="fas fa-image m-auto" style="cursor: pointer;" onclick="triggerFileInput('impImage_0')"></i>
                                                        <img id="impImagePreview_0" src="" alt="Image Preview" style="max-width: 100%; max-height: 100%; display: none;" class="images">
                                                    </div>
                                                    <input type="file" name="imp_0" id="impImage_0" class="image-file-input" accept="image/*" style="display: none;" onclick="displayImagePreview(this, 'impImagePreview_0')"  onchange="displayImagePreview(this, 'impImagePreview_0')"required>
                                                </td>
                                                <td>
                                                    <div class="select-wrap">
                                                        <select name="imp_type_id[]" id="impType_0" class="form-control implement-type-input" >
                                                        <option value>Select</option>
                                                        <option value="type1">Type 1</option>
                                                        <option value="type2">Type 2</option>
                                                        </select>
                                                    </div>
                                                </td>
                                                <td>
                                                     <input type="text" name="implement_rate[]" id="implement_rent" class="form-control implement-rate-input" maxlength="10" placeholder="e.g- 1,500">
                                                </td>
                                                <td>
                                                    <div class="select-wrap">
                                                        <select name="rate_per[]" id="impRatePer_0" class="form-control implement-unit-input">
                                                        <option value="">Select</option>
                                                        <option value="Acer">Acer</option>
                                                        <option value="Hour">Hour</option>
                                                        </select>
                                                    </div>
                                                </td>
                                                <td>
                                                    <button type="button" class="btn btn-danger" title="Remove Row" onclick="removeRow(this)">
                                                        <i class="fas fa-minus"></i>
                                                    </button>
                                                </td>
                                            </tr>
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <td colspan="6" align="right">
                                                    <button type="button" class="btn btn-success" title="Add Row" id="addRentTractorRowBtn">
                                                    <i class="fas fa-plus"></i>
                                                    </button>
                                                </td>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                                <div class="col-12 col-lg-6 col-md-6 col-sm-6 ">
                                    <div class="form-outline">
                                        <label class="form-label text-dark">Working Area</label>
                                        <textarea rows="2" cols="70" class="w-100 p-2"  id="workingRadius" name="textarea_"></textarea>
                                    </div>
                                </div>
                                <div class="col-12 col-lg-6 col-md-6 col-sm-6 ">
                                    <div class="form-outline">
                                        <label class="form-label text-dark">Description</label>
                                        <textarea rows="2" cols="70" class="w-100 p-2"  id="textarea_d" name="textarea_d"></textarea>
                                    </div>
                                </div>
                                <div class="text-center">
                                    <h5 class="pb-2 mt-2">Personal Information</h5>
                                </div>
                                <div class="col-12 col-lg-6 col-sm-5 col-md-6">
                                    <div class="form-outline mt-3">
                                        <label for="name" class="form-label text-dark">First Name</label>
                                        <input type="text" class="form-control" placeholder="" id="myfname" name="fname">
                                    </div>
                                </div>
                                <div class="col-12 col-lg-6 col-sm-5 col-md-6">
                                    <div class="form-outline mt-3">
                                        <label for="name" class="form-label text-dark">Last Name</label>
                                        <input type="text" class="form-control" placeholder="" id="mylname" name="lname">
                                    </div>
                                </div>
                                <div class="col-12 col-lg-6 col-sm-5 col-md-6 my-1">
                                    <div class="form-outline mt-2">
                                        <label for="name" class="form-label text-dark">Mobile Number</label>
                                        <input type="text" class="form-control" placeholder="" id="mynumber" name="number">
                                    </div>
                                </div>
                                <div class="col-12 col-lg-6 col-sm-5 col-md-6">
                                    <div class="form-outline mt-2">
                                        <label class="form-label text-dark">State</label>
                                        <select class="form-select py-2 state-dropdown" aria-label="Default select example" id="state_state" name="state_">
                                         
                                        </select>
                                    </div>
                                </div>
                                <div class="col-12 col-lg-6 col-sm-5 col-md-6">
                                    <div class="form-outline mt-3">
                                        <label class="form-label text-dark">District</label>
                                        <select class="form-select py-2 district-dropdown" aria-label="Default select example" id="dist_district" name="dist">
                                          
                                        </select>
                                    </div>
                                </div>
                                <div class="col-12 col-lg-6 col-sm-5 col-md-6 ">
                                    <div class="form-outline mt-3">
                                        <label class="form-label text-dark">Tehsil</label>
                                        <select class="form-select py-2 tehsil-dropdown" aria-label="Default select example" id="tehsil_t">
                                         
                                        </select>
                                    </div>
                                </div>
                                <div class="col-12 mt-3">
                                      <button type="button" id="rent_submit" class="btn btn-success fw-bold px-3 w-100"  data-bs-dismiss="modal">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        
    <div class="container mt-5">
        <h3 class="text-center mb-4 fw-bold ">EASY RENTAL FOR TRACTOR AND IMPLEMENT</h3>

        <div class="row">

            <!-- Card 1 with shadow -->
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

            <!-- Card 2 with shadow -->
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

            <!-- Card 3 with shadow -->
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

        <p>BharatAgrimart Rent page helps farmers to get tractors on a rent basis. Also, if they wish to sell their products
            on
            a rental basis for various brands then BharatAgrimart is the best option.</p>

        <p>Tractor Rental in India is additional income for farmers. Many farmers buy tractors for both personal and
            commercial use. For such Farmers, BharatAgrimart provides a platform where a Farmer can list his tractor on
            BharatAgrimart and rent out Tractors to needy farmers. There are many tractors available on BharatAgrimart for
            rental
            purpose in India. Farmers can rent their tractors of all brands like Mahindra tractor on rent, Mahindra 575
            tractor on rent, John Deere tractor on rent, Kubota tractor on rent, New Holland tractor on rent, Swaraj
            tractor
            on rent at mutually agreed tractor rent priceTractor Rental in India is additional income for farmers. Many
            farmers buy tractors for both personal and commercial use. For such Farmers BharatAgrimart provides a platform
            where
            a Farmer can list his tractor on BharatAgrimart and rent out Tractors to needy farmers. There are many tractors
            available on BharatAgrimart for rental purpose in India. Farmers can rent their tractors of all brands like
            Mahindra
            tractor on rent, Mahindra 575 tractor on rent, John Deere tractor on rent, Kubota tractor on rent, New
            Holland
            tractor on rent, Swaraj tractor on rent at mutually agreed tractor rent price.</p>
    </div>

    <section>
        <div class="container">
            <h4 class="fw-bold assured px-2 mt-2">Quick Links</h4>
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

  <!-- <form id="form-step-1" class=" ps-4 pe-4 mul_stp_frm2" method="post">
                            <div class="d-flex justify-content-center mb-3">
                                <div class="col-12 col-lg-5 col-md-5 col-sm-5">
                                    <div class="float-start">Harvest Info</div>
                                </div>
                                <div class="col-12 col-lg-3 col-md-3 col-sm-3">
                                    Upload Image
                                </div>
                                <div class="col-12 col-lg-4 col-md-4 col-sm-4">
                                    <div class="float-end">Personal Info</div>
                                </div>
                            </div>
                            <div class="progress px-1" style="height: 4px;">
                                <div class="progress-bar" role="progressbar"
                                    style="width: 0%; background-color: #6f98c2;" aria-valuenow="0" aria-valuemin="0"
                                    aria-valuemax="100"></div>
                            </div>

                            <div class="step-container d-flex justify-content-between">
                                <div class="step-circle" onclick="displayStep(1)">1</div>
                                <div class="step-circle" onclick="displayStep(2)">2</div>
                                <div class="step-circle" onclick="displayStep(3)">3</div>
                            </div>
                            <div class="step step-1">
                                <div class="step_sellused">
                                    <div class="row">
                                    <div class="col-12 col-lg-6 col-md-6 col-sm-6 " hidden>
                                        <label for="name" class="form-label fw-bold text-dark"> <i class="fa-regular fa-user"></i> enquiryName</label>
                                        <input type="text" class="form-control" placeholder="Enter Your Name" id="enquiry_type_id" value="18" name="fname">
                                    </div>
                                    <div class="col-12 col-lg-6 col-md-6 col-sm-6 " hidden>
                                        <label for="name" class="form-label fw-bold text-dark"> <i class="fa-regular fa-user"></i> product type id</label>
                                        <input type="text" class="form-control" id="added_by" value="">
                                    </div>
                                    
                                        <div class="col-12 col-sm-6 col-md-6 col-lg-6">
                                            <div class="form-outline">
                                                <label class="form-label" for="brand">Brand</label>
                                                <select class="form-select" id="brand_main" name="brand" required>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-6 col-md-6 col-lg-6">
                                            <div class="form-outline">
                                                <label class="form-label" for="model">Model</label>
                                                <select class="form-select" id="model_main" name="model" required>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-6 col-md-6 col-lg-6 mt-4">
                                            <div class="form-outline">
                                                <label class="form-label" for="year">Year</label>
                                                <select class="form-select" id="year_main" name="year" required>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-6 col-md-6 col-lg-6 mt-4">
                                            <div class="form-outline">
                                                <label class="form-label" for="workingRadius">Working Radius</label>
                                                <input type="text" id="workingRadius" name="workingRadius"
                                                    class="form-control input-group-sm " required />
                                            </div>
                                        </div>

                                        <div class="form-outline mt-4">
                                            <label class="form-label" for="note">Note (if any)</label>
                                            <textarea class="form-control" id="note" name="note" rows="3"></textarea>
                                        </div>
                                    </div>
                                    <div class="form-footer d-flex my-3">
                                        <button type="submit" class="btn btn-success w-100 next-step" id="step1_form">Next</button>
                                    </div>
                                </div>
                            </div>
                        </form>

                        <form id="form-step-2" class=" mul_stp_frm2  ps-4 pe-4 " style="display:none;" method="post"
                            action="">
                            <div class="d-flex justify-content-center mb-3">
                                <div class="col-12 col-lg-5 col-md-5 col-sm-5">
                                    <div class="float-start">Harvest Info</div>
                                </div>
                                <div class="col-12 col-lg-3 col-md-3 col-sm-3">
                                    Upload Image
                                </div>
                                <div class="col-12 col-lg-4 col-md-4 col-sm-4">
                                    <div class="float-end">Personal Info</div>
                                </div>
                            </div>
                            <div class="progress px-1" style="height: 4px;">
                                <div class="progress-bar" role="progressbar"
                                    style="width: 0%; background-color:#6f98c2;" aria-valuenow="0" aria-valuemin="0"
                                    aria-valuemax="100"></div>
                            </div>
                            <div class="step-container d-flex justify-content-between">
                                <div class="step-circle" onclick="displayStep(1)">1</div>
                                <div class="step-circle" onclick="displayStep(2)">2</div>
                                <div class="step-circle" onclick="displayStep(3)">3</div>
                            </div>
                            <div class="step step-2">
                                <div id="formContainer">
                                    <div class="row">
                                        <div class="col-12 col-sm-6 col-md-6 col-lg-4 mt-4">
                                            <div class="form-outline">
                                                <label class="form-label" for="implement">Implement Type</label>
                                                <select class="form-select" id="implement_type" name="implement" required>
                                                    <option value="" selected disabled>Select Implement Type</option>
                                                    <option value="vegetable">Vegetable</option>
                                                    <option value="fruits">Fruits</option>
                                                    <option value="grain">Grain</option>
                                                    <option value="pulses">Pulses</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-6 col-md-6 col-lg-4 mt-4">
                                            <div class="form-outline">
                                                <label class="form-label" for="rate">Rate</label>
                                                <input type="text" id="rate" name="rate" class="form-control input-group-sm" required />
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-6 col-md-6 col-lg-4 mt-4">
                                            <div class="form-outline">
                                                <label class="form-label" for="ratePer">Rate Per</label>
                                                <select class="form-select" id="ratePer" name="ratePer" required>
                                                    <option value="" selected disabled>Select Rate</option>
                                                    <option value="acer">Acre</option>
                                                    <option value="hour">Hour</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="upload__box text-center mt-5">
                                            <div class="upload__btn-box">
                                                <label>
                                                    <p class="upload__btn w-100">Upload Images</p>
                                                    <input type="file" data-max_length="4" class="upload__inputfile" id="imageInput" name="images[]" accept="image/*" multiple required>
                                                </label>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="upload__img-wrap"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-footer d-flex mt-3">
                                    <button type="button" class="btn btn-success w-50 mb-4 prev-step"
                                        id="">Previous</button>
                                    <button type="button" class="btn btn-success ms-2 mb-4 w-50 next-step"
                                        id="step2_form">Next</button>
                                    <button type="button" class="btn btn-info ms-2 mb-4 w-25" id="addMore">Add
                                        More</button>
                                </div>

                            </div>
                        </form>

                        <form id="form-step-3" class=" mul_stp_frm2 ps-4 pe-4 " action="" method="post"
                            style="display:none;">
                            <div class="d-flex justify-content-center mb-3">
                                <div class="col-12 col-lg-5 col-md-5 col-sm-5">
                                    <div class="float-start">Harvest Info</div>
                                </div>
                                <div class="col-12 col-lg-3 col-md-3 col-sm-3">
                                    Upload Image
                                </div>
                                <div class="col-12 col-lg-4 col-md-4 col-sm-4">
                                    <div class="float-end">Personal Info</div>
                                </div>
                            </div>
                            <div class="progress px-1" style="height: 4px;">
                                <div class="progress-bar" role="progressbar"
                                    style="width: 0%; background-color: #6f98c2;" aria-valuenow="0" aria-valuemin="0"
                                    aria-valuemax="100"></div>
                            </div>
                            <div class="step-container d-flex justify-content-between">
                                <div class="step-circle" onclick="displayStep(1)">1</div>
                                <div class="step-circle" onclick="displayStep(2)">2</div>
                                <div class="step-circle" onclick="displayStep(3)">3</div>
                            </div>
                            <div class="step step-3">
                                <div class="row ">
                                    <div class="col-12 col-sm-6 col-md-6 col-lg-6 mt-4">
                                        <div class="form-outline">
                                            <label class="form-label " for="fname"><i class="fa-regular fa-user"></i> First Name</label>
                                            <input type="text" id="firstname_1" name="fname"
                                            class="data_search form-control input-group-sm" onkeydown="return /[a-zA-Z]/i.test(event.key)" />
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6 col-md-6 col-lg-6 mt-4">
                                        <div class="form-outline">
                                            <label class="form-label" for="lname"><i class="fa-regular fa-user"></i> Last Name</label>
                                            <input type="text" id="lastname_1" name="lname"
                                                class="data_search form-control input-group-sm"onkeydown="return /[a-zA-Z]/i.test(event.key)" />
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6 col-md-6 col-lg-6 mt-4">
                                        <div class="form-outline">
                                            <label class="form-label" for="phone">
                                                <i class="fa fa-phone" aria-hidden="true"></i>Phone Number</label>
                                            <input type="text" id="phone_number" name="phone" class=" data_search form-control input-group-sm" />
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6 col-md-6 col-lg-6 mt-4">
                                        <div class="form-outline">
                                            <label class="form-label" for="state"> <i class="fas fa-location"></i>State</label>
                                            <select class="form-select error mb-2 pb-2 state-dropdown" id="state_3" name="state" aria-label="Default select example">
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6 col-md-6 col-lg-6 mt-4">
                                        <div class="form-outline">
                                            <label class="form-label" for="district">
                                                <i class="fa-solid fa-location-dot"></i> District</label>
                                            <select class="form-select error mb-2 pb-2 district-dropdown" id="district_2" name="district" aria-label="Default select example">
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6 col-md-6 col-lg-6 mt-4">
                                        <div class="form-outline">
                                            <label class="form-label" for="tehsil">Tehsil</label>
                                            <select class="form-select error mb-2 pb-2 tehsil-dropdown" id="tehsil_1" name="tehsil" aria-label="Default select example">
                                             </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-footer d-flex mt-4">
                                    <button type="button" class="btn w-50 btn-primary mb-4 prev-step">Previous</button>
                                    <button type="button" class="btn w-50 ms-2 btn-success mb-4" id="rent_submit">Submit</button>
                                </div>
                            </div>
                        </form> -->


    <?php
    include 'includes/footer.php';
    include 'includes/footertag.php';

?>
    <!-- <script>
    document.addEventListener("DOMContentLoaded", function() {
        const addMoreButton = document.getElementById('addMore');
        const formContainer = document.getElementById('formContainer');

        addMoreButton.addEventListener('click', function() {
            // Clone the entire row and append it to the container
            const lastRow = formContainer.lastElementChild.cloneNode(true);
            // Clear values of the cloned fields
            const inputFields = lastRow.querySelectorAll('input, select');
            inputFields.forEach(field => {
                field.value = '';
            });

            formContainer.appendChild(lastRow);
        });
    });
    </script> -->
<!-- <script>
document.addEventListener("DOMContentLoaded", function() {
    const addMoreButton = document.getElementById('addMore');
    const formContainer = document.getElementById('formContainer');

    addMoreButton.addEventListener('click', function() {
        // Clone the entire row and append it to the container
        const lastRow = formContainer.lastElementChild.cloneNode(true);
        
        // Clear values of the cloned fields except for the file input field
        const inputFields = lastRow.querySelectorAll('input:not([type="file"]), select');
        inputFields.forEach(field => {
            field.value = ''; // Clear the value
        });

        // Reset the value of the cloned file input field
        const clonedFileInput = lastRow.querySelector('input[type="file"]');
        clonedFileInput.value = null;

        formContainer.appendChild(lastRow);
    });
});

</script> -->

<!-- <script>
    $(document).ready(function() {
        // Sample data (replace with your actual data)
        var stateData = {
            "state1": {
                "districts": ["District1", "District2"],
                "tehsils": ["Tehsil1", "Tehsil2"]
            },
            "state2": {
                "districts": ["District3", "District4"],
                "tehsils": ["Tehsil3", "Tehsil4"]
            }
        };

        // Function to populate dropdown based on data
        function populateDropdown(dropdown, data) {
            dropdown.empty();
            $.each(data, function(index, value) {
                dropdown.append($("<option>").val(value).text(value));
            });
        }

        // Event listener for state selection change
        $("#state").change(function() {
            var selectedState = $(this).val();
            var districtsDropdown = $("#district");
            var tehsilsDropdown = $("#tehsil");

            // Check if the selected state exists in the data
            if (stateData.hasOwnProperty(selectedState)) {
                // Populate districts dropdown
                populateDropdown(districtsDropdown, stateData[selectedState].districts);

                // Populate tehsils dropdown
                populateDropdown(tehsilsDropdown, stateData[selectedState].tehsils);
            } else {
                // Clear dropdowns if the selected state is not found
                districtsDropdown.empty();
                tehsilsDropdown.empty();
            }
        });
        $("#step1_form").on('click', function(event) {
            step1_form();
        });
        $("#step2_form").on('click', function(event) {
            step2_form();
        });
        $("#rent_submit").on('click', function(event) {
            rent_submit();
        });
    });
    </script>-->

  <!-- SCRIPT FOR THE DISPLAY & HIDE -->

<!-- <script>
  $(document).ready(function() {
    var totalSteps = 3; // Total number of steps
    var currentStep = 1;
    var updateProgressBar;

    function displayStep(stepNumber) {
        if (stepNumber >= 1 && stepNumber <= totalSteps) {
            $(".mul_stp_frm").hide();
            $("#form-step-" + stepNumber).show();
            currentStep = stepNumber;
            updateProgressBar();
        }
    }

    $(".next-step").click(function(event) {
        event.preventDefault();
        var currentStepForm = $("#form-step-" + currentStep);

        if (currentStepForm.valid()) {
            currentStepForm.hide();
            currentStep++;
            if (currentStep > totalSteps) {
                // Handle reaching the last step
                // You might want to submit the form or perform other actions here
                return;
            }
            $("#form-step-" + currentStep).show();
            updateProgressBar();
        }
    });

    $(".prev-step").click(function(event) {
        event.preventDefault();
        currentStep--;
        displayStep(currentStep);
    });

    updateProgressBar = function() {
        var progressPercentage = ((currentStep - 1) / (totalSteps - 1)) * 100;
        $(".progress-bar").css("width", progressPercentage + "%");
    };

    $(".step-circle").click(function() {
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

</script> -->





    <!-- SCRIPT FOR THE VALIDATION OF 1st FORM -->
    <!-- <script>
    $(document).ready(function() {
        $("form[id='form-step-1']").validate({
            rules: {
                brand: {
                    required: true,
                },
                model: {
                    required: true,
                },
                year: {
                    required: true,
                    digits: true,

                },
                workingRadius: {
                    required: true,
                    digits: true,

                },
                note: {
                    letterswithspaces: true 
                },
            },

        });

         $.validator.addMethod("letterswithspaces", function(value, element) {
            return this.optional(element) || /^[a-zA-Z\s]*$/.test(value);
        }, "Only alphabets and spaces are allowed");
    });
    </script>

    <script>
    $(document).ready(function() {
        $("form[id='form-step-2']").validate({
            rules: {
                imageInput: {
                    required: true,
                },
                implement: {
                    required: true,
                },
                rate: {
                    required: true,
                    digits: true,
                },
                ratePer: {
                    required: true,
                },

            },

        });
    });
    </script> -->

<script>
        // $(document).ready(function() {
        //     $("#imageInput").change(function() {
        //         var selectedFiles = $(this)[0].files;
        //         var maxAllowedFiles = 4;

        //         if (selectedFiles.length < 1 || selectedFiles.length > maxAllowedFiles) {
        //             alert("Please select between 1 and " + maxAllowedFiles + " images.");
        //         } else {
                
        //             alert("Selected " + selectedFiles.length + " image(s).");
        //         }
        //     });
        // });
  </script>

    <!-- SCRIPT FOR THE VALIDATION OF 3rd FORM -->
    <script>
    $(document).ready(function() {
        // $.validator.addMethod("indianMobile", function(value, element) {
        //     return this.optional(element) || /^[789]\d{9}$/.test(value);
        // }, "Please enter a valid Indian mobile number.");
        $("form[id='form-step-3']").validate({
            rules: {
                fname: {
                    required: true,
                    minlength: 2,
                },
                lname: {
                    required: true,
                    minlength: 2,
                },
                phone: {
                    required: true,
                    digits: true,
                    indianMobile: true,
                },
                state: {
                    required: true,
                },
                district: {
                    required: true,
                },
            },

        });
    });
    </script>

    <!-- SCRIPT FOR THE VALIDATION OF IAMGE UPLOAD -->
<!-- <script>
        jQuery(document).ready(function() {
            ImgUpload();
        });

        function ImgUpload() {
        var imgWrap = "";
        var imgArray = [];

        $('.upload__inputfile').each(function() {
            $(this).on('change', function(e) {
                imgWrap = $(this).closest('.upload__box').find('.upload__img-wrap');
                var maxLength = $(this).attr('data-max_length');

                var files = e.target.files;
                var filesArr = Array.prototype.slice.call(files);
                var iterator = 0;
                filesArr.forEach(function(f, index) {

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
                            reader.onload = function(e) {
                                var html =
                                    "<div class='upload__img-box'><div style='background-image: url(" +
                                    e.target.result + ")' data-number='" + $(
                                        ".upload__img-close").length + "' data-file='" + f
                                    .name +
                                    "' class='img-bg'><div class='upload__img-close'></div></div></div>";
                                imgWrap.append(html);
                                iterator++;
                            }
                            reader.readAsDataURL(f);
                        }
                    }
                });
            });
        });

        $('body').on('click', ".upload__img-close", function(e) {
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

    var arry = [];  // Declare arry outside of functions to maintain its scope

    function step1_form() {
    var brand_name = $('#brand').val();
    var model_name = $('#model').val();
    var year = $('#year').val();
    var workingRadius = $('#workingRadius').val();
    var note = $('#note').val();

    console.log(brand_name, model_name, year, workingRadius, note);

    // Push values into the array
    arry.push({
        brand_name: brand_name,
        model_name: model_name,
        year: year,
        workingRadius: workingRadius,
        note: note
    });

    console.log(arry);
    }

    function step2_form(a) {
    var index = 1;
    var implement = $(`#implement${a.index}`).val();
    var rate = $(`#rate${a.index}`).val();
    var ratePer = $(`#ratePer${a.index}`).val();
    var imageInput = $(`#imageInput${a.index}`).val();

    console.log(implement, rate, ratePer, imageInput);

    // Push values into the array
    arry.push({
        implement: implement,
        rate: rate,
        ratePer: ratePer,
        imageInput: imageInput,
    });
    
    index++;
    console.log(arry);
    }


    var index = 1;
    var arry = [];

    function addMore() {
        var dynamicId = index;
    
    // Clone the existing HTML elements and update their IDs
    var newElements = $("#formContainer").clone();
    newElements.find("[id]").each(function () {
        var oldId = $(this).attr("id");
        var newId = oldId + dynamicId;
        $(this).attr("id", newId);
    });

    // Append the cloned elements to the container
    $("#formContainer").append(newElements.html());
    
    index++;
    }

    function step2_form(a) {
    var dynamicId = a.index;

    var implement = $(`#implement_type${dynamicId}`).val();
    var rate = $(`#rate${dynamicId}`).val();
    var ratePer = $(`#ratePer${dynamicId}`).val();
    var imageInput = $(`#imageInput${dynamicId}`).val();

    console.log(implement, rate, ratePer, imageInput);

    // Push values into the array
    arry.push({
        implement: implement,
        rate: rate,
        ratePer: ratePer,
        imageInput: imageInput,
    });

    console.log(arry);
    }


</script> -->


<script>
     $(document).ready(function () {



    // jQuery.validator.addMethod("customPhoneNumber", function(value, element) {
    //         return /^[6-9]\d{9}$/.test(value); 
    //       }, "Phone number must start with 6 or above");

    $("#rent_list_form_").validate({
      // Specify validation rules
      rules: {
        brand: {
          required: true,
        },
        model: {
          required: true,
        },
        year: {
          required: true,
        },
        textarea_: {
          required: true,
        },
        textarea_d: {
          required: true,
        },
        fname:{
          required: true,
        },
        lname:{
          required: true,
        },
        // number:{
        //   required:true, 
        //     maxlength:10,
        //     digits: true,
        //     customPhoneNumber: true
        // },
        state_:{
          required: true,
        },
        dist:{
          required: true,
        }
      },
      // Specify validation error messages
      messages: {
        brand: {
          required: "This field is required",
        },
        model: {
          required: "This field is required",
        },
        year: {
          required: "This field is required",
        },
        textarea_: {
          required: "This field is required",
        },
        textarea_d: {
          required:"This field is required",
        },
        fname:{
          required:"This field is required",
        },
        lname:{
          required:"This field is required",
        },
        // number:{
        //   required:"This field is required",
        //   maxlength:"Enter only 10 digits",
        //   digits: "Please enter only digits"
        // },
        state_:{
          required:"This field is required",
        },
        dist:{
          required:"This field is required",
        }
      },
      
      submitHandler: function (form) {
        alert("Form submitted successfully!");
      },
    });

   
    $("#sub_btn_").on("click", function () {
   
      $("#rent_list_form_").valid();
    
    });
   
  });
    function triggerFileInput(inputId) {
        $('#' + inputId).trigger('click');
    }

    function displayImagePreview(input, previewId) {
    var fileInput = $(input);
    var preview = $("#" + previewId);
    var currentRow = fileInput.closest("tr");

    if (fileInput.get(0).files.length > 0) {
        var reader = new FileReader();

        reader.onload = function (e) {
            preview.attr('src', e.target.result);
            preview.show();
            currentRow.find('.fas.fa-image').hide();
        };

        reader.readAsDataURL(fileInput.get(0).files[0]);
    } else {
        preview.hide();
        currentRow.find('.fas.fa-image').show();
    }
    }
   
    function removeRow(button) {
        $(button).closest('tr').remove();
       // updateSerialNumbers();
    }

    function updateSerialNumbers() {
    $('#rentTractorTable tbody tr').each(function (index) {
        var rowNumber = index + 1;
        $(this).find('td:first').text(rowNumber);

        var newImageId = 'impImage_' + rowNumber;
        var newPreviewId = 'impImagePreview_' + rowNumber;

        $(this).find('.fas.fa-image').attr('onclick', "triggerFileInput('" + newImageId + "')");
        $(this).find('.image-file-input').attr('id', newImageId);
        $(this).find('img').attr('id', newPreviewId).attr('src', '').hide();
        $(this).find('.upload-img-wrap').attr('onclick', 'triggerFileInput(\'' + newImageId + '\')');
    });
    }

   
      $("#addRentTractorRowBtn").click(function () {
            var isValidFirstRow = validateRow($("#rentTractorTable tbody tr").length - 1);

            if (isValidFirstRow) {
                var newIndex = $("#rentTractorTable tbody tr").length;

                var newRow = $("#rentTractorTable tbody tr:last").clone();
                newRow.find("input, select").each(function () {
                    var originalId = $(this).attr("id");
                    var originalName = $(this).attr("name");

                    var index = parseInt(originalId.split("_")[1]);
                    var newId = originalId.split("_")[0] + "_" + newIndex;
                    var newName = originalName.split("_")[0] + "_" + newIndex;
                    $(this).attr("id", newId);
                    $(this).attr("name", newName);

                    if ($(this).is("input")) {
                        $(this).val("");
                    } else if ($(this).is("select")) {
                        $(this).val($(this).find("option:first").val());
                    }
                    $(this).removeClass("is-invalid");
                    $(this).next(".invalid-feedback").remove();
                });

                var newImageId = 'impImage_' + newIndex;
                var newPreviewId = 'impImagePreview_' + newIndex;
               // $('.fas.fa-image').show();
                newRow.find('.fas.fa-image').attr('onclick', "triggerFileInput('" + newImageId + "')");
                newRow.find('.image-file-input').attr('id', newImageId);
                newRow.find('img').attr('id', newPreviewId).hide();
                newRow.find('.image-file-input').attr('onclick', "displayImagePreview(this, '" + newPreviewId + "')");
                newRow.find('.image-file-input').attr('onchange', "displayImagePreview(this, '" + newPreviewId + "')");
                newRow.find('.upload-img-wrap').attr('onclick', 'triggerFileInput(\'' + newImageId + '\')');

                newRow.find('td:first').text(newIndex + 1);
                newRow.find('td:last').html('<button type="button" class="btn btn-danger" title="Remove Row" onclick="removeRow(this)"><i class="fas fa-minus"></i></button>');

                $('#rentTractorTable tbody').append(newRow);
            }
        });

        $(document).on("click", ".btn-danger", function () {
            $(this).closest("tr").remove();
            //updateSerialNumbers();
        });


        $("#rentTractorTable").on("submit", function (e) {
            var isValidForm = true;

            $("#rentTractorTable tbody tr").each(function (index) {
                if (!validateRow(index)) {
                    isValidForm = false;
                    return false;
                }
            });

            if (!isValidForm) {
                e.preventDefault();
            }
        });

        $("#rentTractorTable").on("input change", ".image-file-input, .implement-type-input, .implement-rate-input, .implement-unit-input", function () {
            validateRow($(this).closest("tr").index());
        });
            
        function displayImagePreview(input, previewId) {
        var fileInput = input;
        var preview = $("#" + previewId);
        var currentRow = $(input).closest("tr");
        var rowIndex = currentRow.index();

        if (fileInput.files.length > 0) {
            var reader = new FileReader();

            reader.onload = function (e) {
                preview.attr('src', e.target.result);
                preview.show();
                currentRow.find('.fas.fa-image').hide();
            };

            reader.readAsDataURL(fileInput.files[0]);
        } else {
            preview.hide();
            currentRow.find('.fas.fa-image').show();
        }
      }

        function validateRow(rowIndex) {
            var isValidRow = true;
            var row = $("#rentTractorTable tbody tr:eq(" + rowIndex + ")");
            row.find('.is-invalid').removeClass('is-invalid');
            row.find('.invalid-feedback').remove();

            var imageInput = row.find(".image-file-input");
            var currentRowIndex = row.index();

            displayImagePreview(imageInput.get(0), 'impImagePreview_' + currentRowIndex);

            if (imageInput.prop("required") && !imageInput.get(0).files.length) {
                isValidRow = false;
                imageInput.addClass("is-invalid");
                imageInput.after("<div class='invalid-feedback'>This field is required.</div>");
            } else {
                imageInput.removeClass("is-invalid");
                imageInput.next(".invalid-feedback").remove();
            }

            var implementTypeField = row.find(".implement-type-input");
            if (implementTypeField.val() === "Select" || implementTypeField.val() === "") {
                isValidRow = false;
                implementTypeField.addClass("is-invalid");
                implementTypeField.after("<div class='invalid-feedback'>This field is required.</div>");
            } else {
                implementTypeField.removeClass("is-invalid");
            }

            row.find(".implement-rate-input").each(function (index) {
                var rate = parseFloat($(this).val());
                if (isNaN(rate) || rate <= 0) {
                    isValidRow = false;
                    $(this).addClass("is-invalid");
                    $(this).after("<div class='invalid-feedback'>This field is required.</div>");
                } else {
                    $(this).removeClass("is-invalid");
                }
            });

            row.find(".implement-unit-input").each(function (index) {
                if ($(this).val() === "") {
                    isValidRow = false;
                    $(this).addClass("is-invalid");
                    $(this).after("<div class='invalid-feedback'>This field is required.</div>");
                } else {
                    $(this).removeClass("is-invalid");
                }
            });

          return isValidRow;
        }
   
   
</script>

<script>
 
</script>
<script>
    $(document).ready(function() {
        // Event listener for dynamically added rows
        $(document).on('input', '.implement-rate-input', function() {
            var value = $(this).val().replace(/\D/g, ''); 
            var formattedValue = Number(value).toLocaleString('en-IN');
            $(this).val(formattedValue);
        });

        // Event listener for the initial row
        $('.implement-rate-input').on('input', function() {
            var value = $(this).val().replace(/\D/g, ''); 
            var formattedValue = Number(value).toLocaleString('en-IN');
            $(this).val(formattedValue);
        });
    });
</script>
</body>

</html>