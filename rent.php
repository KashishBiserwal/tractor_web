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
    <script src="<?php $baseUrl; ?>model/sdt.js"></script>

<head>
    <?php
   include 'includes/header.php';
   ?>

    <style>
        /* form implement image */
        .imageWrapper {
            border: 3px solid #888;
    width: 5%;
    height: 44px;
    overflow: hidden;
    position: absolute;
}
.file-upload {
  position: relative;
  overflow: hidden;
  /* margin: 10px; */
}
.file-upload {
  position: relative;
  overflow: hidden;
  /* margin: 10px; */
  width: 44px;
  height:44px;
  /* max-width: 150px; */
  text-align: center;
  color: #fff;
  font-size: 1.2em;
  background: transparent;
  border: 2px solid #888;
  /* padding: 0.85em 1em; */
  display: inline;
  -ms-transition: all 0.2s ease;
  -webkit-transition: all 0.2s ease;
  transition: all 0.2s ease;
}
.file-upload:hover {
  background: #999;
  -webkit-box-shadow: 0px 0px 10px 0px rgba(255, 255, 255, 0.75);
  -moz-box-shadow: 0px 0px 10px 0px rgba(255, 255, 255, 0.75);
  box-shadow: 0px 0px 10px 0px rgba(255, 255, 255, 0.75);
}

.file-upload input.file-input {
  position: absolute;
  top: 0;
  right: 0;
  margin: 0;
  padding: 0;
  font-size: 20px;
  cursor: pointer;
  opacity: 0;
  filter: alpha(opacity=0);
  height: 100%;
}
/* for tractor image only */ 
.input-preview__src {
	/* display: none; */
    display: table;
    position: relative;
}

.input-preview {
	border: dashed gray 0.155em;
	border-radius: 0.5em;
	width: 77px;
	height: 37px;
	display: flex;
	justify-content: center;
	align-items: center;
	background-size: contain;
	background-repeat: no-repeat;
	background-position: center;
	position: relative;
	transition: ease-in-out 750ms;
}

.input-preview::after {
	/* position: absolute; */
	top: 50%;
	left: 0;
	width: 100%;
	text-align: center;
	/* transform: translateY(50%); */
	/* content: "file..."; */
	font-style: italic;
	font-size: 1em;
}

.has-image::before {
	position: absolute;
	top: 0;
	left: 0;
	width: 100%;
	height: 100%;
	background: rgba(50, 50, 50, 0.5);
	content: " ";
	transition: ease-in-out 750ms;
}

/* .has-image::after {
	content: "Choose another file...";
	color: white;
} */

.hide {
  display: none;
}

.myDIV:hover + .hide {
  display: block;
  color: red;
}
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
    .nav-link:hover{
        color: #198754;
    }
    </style>
</head>
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-6Z38E658LD"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-6Z38E658LD');
</script>
<body>
    <section class=" mt-5 pt-5 bg-light">
        <div class="container pt-2 mt-4">
            <div class="">
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
                    <h4 class="text-dark text-center fw-bold mt-4">Rent Your Tractors and Implements</h4>
                    <ul class="nav nav-tabs d-none d-lg-flex px-3" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active fw-bold" id="home-tab"  data-bs-toggle="tab" data-bs-target="#home-tab-pane" type="button" role="tab" aria-controls="home-tab-pane" aria-selected="true">Rent Tractor Only</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link fw-bold" id="profile-tab" data-bs-toggle="tab"  data-bs-target="#profile-tab-pane" type="button" role="tab" aria-controls="profile-tab-pane" aria-selected="false">Rent Implement Type Only</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link fw-bold" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact-tab-pane" type="button" role="tab" aria-controls="contact-tab-pane" aria-selected="false">Rent Tractor and Implement</button>
                        </li>
                    </ul>
                    <div class="tab-content accordion py-3" id="myTabContent">
                             <!--Rent Tractor Only-->
                             <div class="tab-pane fade show active accordion-item" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab" tabindex="0">
                                <h2 class="accordion-header d-lg-none" id="headingOne">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">Rent Tractor Only</button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse show  d-lg-block" aria-labelledby="headingOne" data-bs-parent="#myTabContent">
                                    <div class="accordion-body">
                                        <form id="tractor_rent_form">
                                            <div class="text-center">
                                                <h5 class="pb-2 mt-2">Tractor Information</h5>
                                            </div>
                                            <div class="row justify-content-center pt-2">
                                                <div class="col-12 col-sm-12 col-md-4 col-lg-4 mt-2" hidden>
                                                    <div class="form-outline">
                                                    <label class="form-label text-dark">forTractor</label>
                                                        <input type="text" id="forTractor" name="" value="forTractor" class=" data_search form-control input-group-sm py-2" />
                                                    </div>
                                                </div>
                                                <div class="col-12 col-sm-12 col-md-4 col-lg-4 mt-2" hidden>
                                                    <div class="form-outline">
                                                    <label class="form-label text-dark">Enquiry</label>
                                                        <input type="text" id="enquiry_type_id" name="" value="18" class=" data_search form-control input-group-sm py-2" />
                                                    </div>
                                                </div>
                                                <div class="col- col-sm-6 col-lg-6 col-md-6" hidden>
                                                    <label class="text-dark">User<span class="text-danger">*</span></label>
                                                            <input type="text" class="form-control py-2" for="idUser"  id="idUser" name="first_name" placeholder="Enter First Name">
                                                    <small></small>
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
                                                        <select class="form-select" aria-label="Default select example"id="year_main1" name="year">
                                                    
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="table-responsive my-3">
                                                    <table id="tractor_rent_only" class="table table-sm">
                                                        <thead>
                                                            <tr>
                                                                <th>No.</th>
                                                                <th width="80">Image</th>
                                                                <th>Rate</th>
                                                                <th>Rate Per</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td class="tractor_rent_serial">1</td>
                                                                <td>
                                                                    <div class="card upload-img-wrap" name="rent_trac_image" onclick="triggerFileInput('customFile1')" style="height: 38px; cursor: pointer;" id="dfghj">
                                                                            <i class="fas fa-image m-auto" style="font-size: 16px;" onclick="triggerFileInput('customFile1')"></i>
                                                                            <img id="selectedImage" src="assets/images/upload-img-logo.jpg" alt="example placeholder" style="max-width: 100%; max-height: 100%; object-fit: cover; display: none;" name="image_tractor" class="img-thumbnail"/>
                                                                    </div>
                                                                    <input type="file" id="customFile1" class="d-none" accept="image/*" name="tractor_rent_image[]" onchange="displayImagePreview(this, 'selectedImage')">
                                                                    <!-- <lable id="customFile1_error" class="error_image text-danger" for="customFile1">*required</lable> -->
                                                                </td>
                                                                <td>
                                                                    <input type="text" name="implement_rate[]" id="implement_rent_0" class="form-control implement-rate-input" maxlength="10" placeholder="e.g- 1,500">
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
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                                <div class="my-3"> 
                                                    <div class="text-center">
                                                        <h5 class="pb-2 mt-2">Working Area Information</h5>
                                                    </div>
                                                    <div class="row">
                                                    <div class="col-12 col-lg-6 col-md-6 col-sm-6">
                                                        <div class="form-outline">
                                                            <label class="form-label text-dark" for="workingRadius">Working Area</label>
                                                            <input rows="2" cols="70" class="w-100 p-2" style="height: 68px;" id="workingRadius" style="height: 68px;" name="textarea_" oninput="this.value = this.value.replace(/[^0-9]/g, '')"/>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-lg-6 col-md-6 col-sm-6 ">
                                                        <div class="form-outline">
                                                            <label class="form-label text-dark">Description</label>
                                                            <textarea rows="2" cols="70" class="w-100 p-2"  id="textarea_d" name="textarea_d"></textarea>
                                                        </div>
                                                    </div>
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
                                                    <button type="button" id="rent_submit" class="btn btn-success fw-bold px-3 w-100"  data-bs-dismiss="modal" data-bs-toggle="modal" data-bs-target="get_OTP_btn">Submit</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>

                            <!-- Rent Implement Only -->
                            <div class="tab-pane fade accordion-item" id="profile-tab-pane" role="tabpanel" aria-labelledby="profile-tab" tabindex="0">
                                <h2 class="accordion-header d-lg-none" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    Rent Implement Type Only
                                </button>
                                </h2>
                                <div id="collapseTwo" class="accordion-collapse collapse d-lg-block" aria-labelledby="headingTwo" data-bs-parent="#myTabContent">
                                    <div class="accordion-body">
                                        <div class="text-center">
                                            <h5 class="pb-2 mt-2">Implement Type Information</h5>
                                        </div>
                                        <form id="implement_rent_form" novalidate>
                                            <div class="row justify-content-center pt-2">
                                                <div class="col-12 col-sm-12 col-md-4 col-lg-4 mt-2" hidden>
                                                    <div class="form-outline">
                                                    <label class="form-label text-dark">forImplement</label>
                                                        <input type="text" id="forImplement" name="" value="forImplement" class=" data_search form-control input-group-sm py-2" />
                                                    </div>
                                                </div>
                                                <div class="col-12 col-sm-12 col-md-4 col-lg-4 mt-2" hidden>
                                                    <div class="form-outline">
                                                        <label class="form-label text-dark">Enquiry</label>
                                                        <input type="text" id="enquiry_type_id" name="" value="18" class=" data_search form-control input-group-sm py-2" />
                                                    </div>
                                                </div>
                                                <div class="col- col-sm-6 col-lg-6 col-md-6" hidden>
                                                <label class="text-dark">User<span class="text-danger">*</span></label>
                                                        <input type="text" class="form-control py-2" for="idUser"  id="idUser" name="first_name" placeholder="Enter First Name">
                                                <small></small>
                                                </div>  
                                                <div class="col-12 col-lg-6 col-md-6 col-sm-6 " hidden>
                                                    <label for="name" class="form-label fw-bold text-dark"> <i class="fa-regular fa-user"></i> product type id</label>
                                                    <input type="text" class="form-control" id="added_by" value="">
                                                </div>
                                                <div class="table-responsive my-3">
                                                    <table id="Implement_rent_only" class="table table-sm">
                                                        <thead>
                                                            <tr>
                                                                <th>No.</th>
                                                                <th width="80">Image</th>
                                                                <th>Brand</th>
                                                                <th>Implement Type</th>
                                                                <th>Rate</th>
                                                                <th>Rate Per</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td class="serial-number">1</td>
                                                                <td>
                                                                    <div class="card upload-img-wrap" onclick="triggerFileInput('customFile2')" style="height: 38px; cursor: pointer;">
                                                                        <i class="fas fa-image m-auto" style="font-size: 16px;" onclick="triggerFileInput('customFile2')"></i>
                                                                        <img id="selectedImage2" src="assets/images/upload-img-logo.jpg" alt="example placeholder" style="max-width: 100%; max-height: 100%; object-fit: cover; display: none;" class="img-thumbnail"/>
                                                                    </div>
                                                                    <input type="file" id="customFile2" class="d-none" accept="image/*" onchange="displayImagePreview(this, 'selectedImage2')" required>
                                                                    <!-- <label id="" class="error" for="">this filed is required</label> -->
                                                                </td>
                                                                <td>
                                                                    <div class="select-wrap">
                                                                        <select name="brand[]" id="brand_implement" class="form-control">
                                                                            <option value>Select</option>
                                                                        </select>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="select-wrap">
                                                                        <select name="imp_type_id[]" id="impType_1" class="form-control implement-type-input">
                                                                            <option value>Select</option>
                                                                        
                                                                        </select>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <input type="text" name="implement_rate[]" id="implement_rent_1" class="form-control implement-rate-input" maxlength="10" placeholder="e.g- 1,500">
                                                                </td>
                                                                <td>
                                                                    <div class="select-wrap">
                                                                        <select name="rate_per[]" id="impRatePer_1" class="form-control implement-unit-input">
                                                                            <option value="">Select</option>
                                                                            <option value="Acer">Acer</option>
                                                                            <option value="Hour">Hour</option>
                                                                        </select>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                                <div class="col-12 col-lg-6 col-md-6 col-sm-6">
                                                    <div class="form-outline">
                                                        <label class="form-label text-dark" for="workingRadius">Working Area</label>
                                                        <input rows="2" cols="70" class="w-100 p-2" style="height: 68px;" id="workingRadius1" name="textarea_" oninput="this.value = this.value.replace(/[^0-9]/g, '')"/>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-lg-6 col-md-6 col-sm-6 ">
                                                    <div class="form-outline">
                                                        <label class="form-label text-dark">Description</label>
                                                        <textarea rows="2" cols="70" class="w-100 p-2"  id="textarea_d1" name="textarea_d"></textarea>
                                                    </div>
                                                </div>
                                                <div class="text-center">
                                                    <h5 class="pb-2 mt-2">Personal Information</h5>
                                                </div>
                                                <div class="col-12 col-lg-6 col-sm-5 col-md-6">
                                                    <div class="form-outline mt-3">
                                                        <label for="name" class="form-label text-dark">First Name</label>
                                                        <input type="text" class="form-control" placeholder="" id="myfname1" name="fname">
                                                    </div>
                                                </div>
                                                <div class="col-12 col-lg-6 col-sm-5 col-md-6">
                                                    <div class="form-outline mt-3">
                                                        <label for="name" class="form-label text-dark">Last Name</label>
                                                        <input type="text" class="form-control" placeholder="" id="mylname1" name="lname">
                                                    </div>
                                                </div>
                                                <div class="col-12 col-lg-6 col-sm-5 col-md-6 my-1">
                                                    <div class="form-outline mt-2">
                                                        <label for="name" class="form-label text-dark">Mobile Number</label>
                                                        <input type="text" class="form-control" placeholder="" id="mynumber1" name="number1">
                                                    </div>
                                                </div>
                                                <div class="col-12 col-lg-6 col-sm-5 col-md-6">
                                                    <div class="form-outline mt-2">
                                                        <label class="form-label text-dark">State</label>
                                                        <select class="form-select py-2 state-dropdown1" aria-label="Default select example" id="state_state1" name="state_">
                                                        
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-lg-6 col-sm-5 col-md-6">
                                                    <div class="form-outline mt-3">
                                                    <label class="form-label text-dark">District</label>
                                                    <select class="form-select py-2 district-dropdown1" aria-label="Default select example" id="dist_district1" name="dist">
                                                    </select>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-lg-6 col-sm-5 col-md-6 ">
                                                    <div class="form-outline mt-3">
                                                        <label class="form-label text-dark">Tehsil</label>
                                                        <select class="form-select py-2 tehsil-dropdown1 " aria-label="Default select example" id="tehsil_t1">
                                                        
                                                        </select>
                                                    </div>
                                                </div>
                                                <!-- <div class="col-12 mt-3">
                                                    <button type="button" id="rent_submit_implement" class="btn btn-success fw-bold px-3 w-100"  data-bs-dismiss="modal" data-bs-toggle="modal" data-bs-target="get_OTP_btnTmplement">Submit</button>
                                                </div> -->
                                                <div class="col-12 mt-3">
                                                    <button type="button" class="btn btn-success fw-bold px-3 w-100" id="rent_implement" data-bs-toggle="modal" data-bs-target="myModal">
                                                        Submit
                                                    </button>
                                                </div>
                                            </form>
                                           
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Rent Tractor and Implement -->
                            <div class="tab-pane fade accordion-item" id="contact-tab-pane" role="tabpanel" aria-labelledby="contact-tab" tabindex="0">
                                <h2 class="accordion-header d-lg-none" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                Rent Tractor and Implement
                                </button>
                                </h2>
                                <div id="collapseThree" class="accordion-collapse collapse d-lg-block" aria-labelledby="headingThree" data-bs-parent="#myTabContent">
                                    <div class="accordion-body">
                                        <form id="rent_list_form_">
                                            <div class="text-center">
                                                <h5 class="pb-2 mt-2">Tractor Information</h5>
                                            </div>
                                            <div class="row justify-content-center pt-2">
                                                <div class="col-12 col-sm-12 col-md-4 col-lg-4 mt-2" hidden>
                                                    <div class="form-outline">
                                                    <label class="form-label text-dark">Enquiry</label>
                                                        <input type="text" id="enquiry_type_id" name="" value="18" class=" data_search form-control input-group-sm py-2" />
                                                    </div>
                                                </div>
                                                <div class="col- col-sm-6 col-lg-6 col-md-6" hidden>
                                                    <label class="text-dark">User<span class="text-danger">*</span></label>
                                                            <input type="text" class="form-control py-2" for="idUser"  id="idUser" name="first_name" placeholder="Enter First Name">
                                                    <small></small>
                                                </div>  
                                                <div class="col-12 col-lg-6 col-md-6 col-sm-6 " hidden>
                                                    <label for="name" class="form-label fw-bold text-dark"> <i class="fa-regular fa-user"></i> product type id</label>
                                                    <input type="text" class="form-control" id="added_by" value="">
                                                </div>
                                                <div class="col-12 col-sm-4 col-md-4 col-lg-4">
                                                    <div class="form-outline">
                                                        <label class="form-label text-dark">Brand</label>
                                                        <select class="form-select" aria-label="Default select example"id="brand3" name="brand">
                                                        
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-sm-4 col-md-4 col-lg-4">
                                                    <div class="form-outline">
                                                        <label class="form-label text-dark">Model</label>
                                                        <select class="form-select" aria-label="Default select example"id="model_main3" name="model">
                                                        
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-sm-4 col-md-4 col-lg-4">
                                                    <div class="form-outline">
                                                        <label class="form-label text-dark">Year</label>
                                                        <select class="form-select" aria-label="Default select example"id="year_main3" name="year">
                                                    
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="text-center">
                                                    <h5 class="pb-2 mt-4">Implement Type Information</h5>
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
                                                                    <input type="file" name="imp_0" id="impImage_0" class="image-file-input" accept="image/*" style="display: none;" onchange="displayImagePreview(this, 'impImagePreview_0')" required>
                                                                </td>
                                                                <td>
                                                                    <div class="select-wrap">
                                                                        <select name="imp_type_id[]" id="impType_0" class="form-control implement-type-input">
                                                                            <option value>Select</option>
                                                                        
                                                                        </select>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <input type="text" name="implement_rate[]" id="implement_rent_0" class="form-control implement-rate-input" maxlength="10" placeholder="e.g- 1,500">
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
                                                                    <button type="button" class="btn btn-danger remove-button" title="Remove Row" onclick="removeRow(this)">
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
                                                <div class="col-12 col-lg-6 col-md-6 col-sm-6">
                                                    <div class="form-outline">
                                                        <label class="form-label text-dark" for="workingRadius">Working Area</label>
                                                        <input rows="2" cols="70" class="w-100 p-2" style="height: 68px;" id="workingRadius3" name="textarea_" oninput="this.value = this.value.replace(/[^0-9]/g, '')"/>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-lg-6 col-md-6 col-sm-6 ">
                                                    <div class="form-outline">
                                                        <label class="form-label text-dark">Description</label>
                                                        <textarea rows="2" cols="70" class="w-100 p-2"  id="textarea_d3" name="textarea_d"></textarea>
                                                    </div>
                                                </div>
                                                <div class="text-center">
                                                    <h5 class="pb-2 mt-2">Personal Information</h5>
                                                </div>
                                                <div class="col-12 col-lg-6 col-sm-5 col-md-6">
                                                    <div class="form-outline mt-3">
                                                        <label for="name" class="form-label text-dark">First Name</label>
                                                        <input type="text" class="form-control" placeholder="" id="myfname3" name="fname">
                                                    </div>
                                                </div>
                                                <div class="col-12 col-lg-6 col-sm-5 col-md-6">
                                                    <div class="form-outline mt-3">
                                                        <label for="name" class="form-label text-dark">Last Name</label>
                                                        <input type="text" class="form-control" placeholder="" id="mylname3" name="lname">
                                                    </div>
                                                </div>
                                                <div class="col-12 col-lg-6 col-sm-5 col-md-6 my-1">
                                                    <div class="form-outline mt-2">
                                                        <label for="name" class="form-label text-dark">Mobile Number</label>
                                                        <input type="text" class="form-control" placeholder="" id="mynumber2" name="mob">
                                                    </div>
                                                </div>
                                                <div class="col-12 col-lg-6 col-sm-5 col-md-6">
                                                    <div class="form-outline mt-2">
                                                        <label class="form-label text-dark">State</label>
                                                        <select class="form-select py-2 state-dropdown_rent" aria-label="Default select example" id="state_state3" name="state_">
                                                        
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-lg-6 col-sm-5 col-md-6">
                                                    <div class="form-outline mt-3">
                                                        <label class="form-label text-dark">District</label>
                                                        <select class="form-select py-2 district-dropdown_rent" aria-label="Default select example" id="dist_district3" name="dist">
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-lg-6 col-sm-5 col-md-6 ">
                                                    <div class="form-outline mt-3">
                                                        <label class="form-label text-dark">Tehsil</label>
                                                        <select class="form-select py-2 tehsil-dropdown_rent" aria-label="Default select example" id="tehsil_t3">
                                                        
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-12 mt-3">
                                                    <button type="button" id="rent_submit_both" class="btn btn-success fw-bold px-3 w-100"  data-bs-dismiss="modal" data-bs-toggle="modal" data-bs-target="get_OTP_btnBoth">Submit</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>  
                    </div>
                </div>
            </div>
        </div>
        <!--OTP model for tractor only-->
        <div class="modal fade" id="get_OTP_btn" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header bg-success">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Verify Your OTP</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><img src="assets/images/close.png" class=" w-100"></button>
                    </div>
                    <div class="modal-body">
                        <form id="otp_form">
                            <div class=" col-12 input-group">
                            <div class="col-12" hidden>
                                    <label for="Mobile" class=" text-dark float-start pl-2">Number</label>
                                    <input type="text" class="form-control text-dark" placeholder="Enter OTP" id="mobile_verify"name="Mobile">
                                </div>
                                <div class="col-12">
                                    <label for="Mobile" class=" text-dark float-start pl-2">Enter OTP</label>
                                    <input type="text" class="form-control text-dark" placeholder="Enter OTP" id="otp1"name="opt_1">
                                    <div id="error_message" style="color:red;"></div>
                                </div>
                                <div class="float-end col-12">
                                    <a href="" class="float-end">Resend OTP</a>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-success" id="Verify_for_onlyTractor">Verify</button>
                    </div>
                </div>
            </div>
        </div>
        
        <!--OTP MODEL FOR TRACTOR AND IMPLEMENT-->
        <div class="modal fade" id="get_OTP_btnBoth" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header bg-success">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Verify Your OTP</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><img src="assets/images/close.png" class=" w-100 pb-2"></button>
                    </div>
                    <div class="modal-body">
                        <form id="otp_form">
                            <div class=" col-12 input-group">
                                <div class="col-12" hidden>
                                    <label for="Mobile" class=" text-dark float-start pl-2">Number</label>
                                    <input type="text" class="form-control text-dark" placeholder="Enter OTP" id="mobile_verify"name="Mobile">
                                </div>
                                <div class="col-12">
                                    <label for="Mobile" class=" text-dark float-start pl-2">Enter OTP</label>
                                    <input type="text" class="form-control text-dark" placeholder="Enter OTP" id="otpverify"name="opt_1">
                                    <div id="error_message2" style="color:red;"></div>
                                </div>
                                <div class="float-end col-12">
                                    <a href="" class="float-end">Resend OTP</a>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-success" id="VerifytreactorAndImplement">Verify</button>
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
                    <a href="tractor_by_budget.php?budget=3 Lakh Below" id="adduser" class="btn btn-outline-success text-decoration-none border-2 p-2 w-100">
                        <i class="fas fa-bolt"></i>TRACTOR PRICE</a>
                </div>
                <div class="col-12 col-lg-4 col-md-4 col-sm-4 py-2">
                    <a href="find_new_tractors.php" id="adduser"
                        class=" btn btn-outline-success text-decoration-none border-2 py-2 px-3 w-100">
                        <i class="fas fa-bolt"></i>TRACTOR</a>
                </div>
                <div class="col-12 col-lg-4 col-md-4 col-sm-4 py-2">
                    <a href="harvester.php" id="adduser"
                        class=" btn btn-outline-success text-decoration-none border-2 py-2 px-3 w-100">
                        <i class="fas fa-bolt"></i>HARVESTERS</a>
                </div>
                <div class="col-12 col-lg-4 col-md-4 col-sm-4 py-2">
                    <a href="used_tractor.php" id="adduser"
                        class="btn btn-outline-success text-decoration-none  border-2 py-2 px-3 w-100">
                        <i class="fas fa-bolt"></i>SECOND HAND TRACTOR</a>
                </div>
                <div class="col-12 col-lg-4 col-md-4 col-sm-4 py-2">
                    <a href="new_tractor_loan.php" id="adduser"
                        class="btn btn-outline-success text-decoration-none border-2 py-2 px-3 w-100">
                        <i class="fas fa-bolt"></i>EASY FINANCE</a>
                </div>
                <div class="col-12 col-lg-4 col-md-4 col-sm-4 py-2">
                    <a href="dealership_enq.php" id="adduser"
                        class="btn btn-outline-success text-decoration-none border-2 py-2 px-3 w-100">
                        <i class="fas fa-bolt"></i>DEALERSHIP</a>
                </div>
            </div>
        </div>
    </section>
    <!-- The Modal -->

<div class="modal fade" id="myModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-success">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Verify Your OTP</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><img src="assets/images/close.png" class=" w-100 pb-2"></button>
            </div>
            <div class="modal-body">
                <form id="otp_rent_implement_form">
                    <div class="col-12 input-group">
                        <div class="col-12" hidden>
                            <label for="Mobile" class="text-dark float-start pl-2">Number</label>
                            <input type="text" class="form-control text-dark" placeholder="Enter OTP" id="mobile_verify" name="Mobile">
                        </div>
                        <div class="col-12">
                            <label for="Mobile" class="text-dark float-start pl-2">Enter OTP</label>
                            <input type="text" class="form-control text-dark" placeholder="Enter OTP" id="otp2" name="opt_1">
                            <div id="error_message1" style="color:red;"></div>
                        </div>
                        <div class="float-end col-12">
                            <a href="#" class="float-end">Resend OTP</a>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-success" id="Verify">Verify</button>
            </div>
        </div>
    </div>
</div>

   <?php
        include 'includes/footer.php';
        include 'includes/footertag.php';
    ?>
  
  <script>
        // image upload for only tractor and only implement
        function triggerFileInput(inputId) {
            document.getElementById(inputId).click();
        }

        function displayImagePreview(input, previewId) {
            var fileInput = input;
            var preview = document.getElementById(previewId);
            var currentRow = fileInput.closest("td");

            if (fileInput.files && fileInput.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    preview.src = e.target.result;
                    preview.style.display = 'block';
                    currentRow.querySelector('.fas.fa-image').style.display = 'none';
                };

                reader.readAsDataURL(fileInput.files[0]);
            } else {
                preview.style.display = 'none';
                currentRow.querySelector('.fas.fa-image').style.display = 'block';
            }
        }
    </script>
<script>
    $(document).ready(function () {
        jQuery.validator.addMethod("customPhoneNumber", function(value, element) {
            return /^[6-9]\d{9}$/.test(value); 
          }, "Phone number must start with 6 or above");
        $("#tractor_rent_form").validate({
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
                fname: {
                    required: true,
                },
                lname: {
                    required: true,
                },
                'customFile1': {
                    required: true,
                },
                'rate_per[]': {
                    required: true,
                },
                'implement_rate[]': {
                    required: true,
                },
                number: {
                    required: true,
                            minlength: 10,
                            maxlength: 10,
                            digits: true,
                            customPhoneNumber: true
                },
                state_: {
                    required: true,
                },
                dist: {
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
                    required: "This field is required",
                },
                fname: {
                    required: "This field is required",
                },
                lname: {
                    required: "This field is required",
                },
                'customFile1': {
                    required: "This field is required ",
                },
                'rate_per[]': {
                    required: "This field is required",
                },
                'implement_rate[]': {
                    required: "This field is required",
                },
                number: {
                    required:"This field is required",
                    minlength: "Phone Number must be of 10 Digit",
                    maxlength: "Ensure exactly 10 digits of Mobile No.",
                    digits: "Please enter only digits"
                },
                state_: {
                    required: "This field is required",
                },
                dist: {
                    required: "This field is required",
                }
            },

            submitHandler: function (form) {
                var phone = $("#mynumber").val();

                // Validate the phone number first
                if (phone.length === 10 && $.isNumeric(phone)) {
                    if ($("#tractor_rent_form").valid()) {
                       // get_otp1(phone); 

                    }
                } else {
                    alert("Please enter a valid 10-digit mobile number.");

                }

    //             for (var i = 0; i < imageFilesArray.length; i++) {
    //              formData.append('images[]', imageFilesArray[i]);
    // }
    //             } else {
    //                 alert("this required.");

    //             }
            },
        });

        $("#rent_submit").on("click", function () {
            if ($("#tractor_rent_form").valid()) {
                $("#tractor_rent_form").submit();
            }
        });
    });
</script>
<script>
    $(document).ready(function(){
        $('#get_OTP_btn').on('hidden.bs.modal', function () {
            $('#otp_form input[type="text"]').val(''); 
        });
        
    });
</script>
<script>
   $(document).ready(function () {
    jQuery.validator.addMethod("customPhoneNumber", function(value, element) {
            return /^[6-9]\d{9}$/.test(value); 
          }, "Phone number must start with 6 or above");
    $("#implement_rent_form").validate({
        // Specify validation rules
        rules: {
            'brand[]': {
                required: true,
            },
            'imp_type_id[]': {
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
            fname: {
                required: true,
            },
            lname: {
                required: true,
            },
            customFile2: {
                required: true,
                extension: "jpg|jpeg|png|gif" // Validate image formats
            },
            'rate_per[]': {
                required: true,
            },
            'implement_rate[]': {
                required: true,
            },
            number1: {
                required: true,
                maxlength: 10,
                minlength: 10,
                digits: true,
                customPhoneNumber: true
            },
            state_: {
                required: true,
            },
            dist: {
                required: true,
            }
        },
        // Specify validation error messages
        messages: {
            'brand[]': {
                required: "This field is required",
            },
            'imp_type_id[]': {
                required: "This field is required",
            },
            year: {
                required: "This field is required",
            },
            textarea_: {
                required: "This field is required",
            },
            textarea_d: {
                required: "This field is required",
            },
            fname: {
                required: "This field is required",
            },
            lname: {
                required: "This field is required",
            },
            customFile2: {
                required: "Please upload an image",
                extension: "Please upload a valid image (jpg, jpeg, png, gif)"
            },
            'rate_per[]': {
                required: "This field is required",
            },
            'implement_rate[]': {
                required: "This field is required",
            },
            number1: {
                required: "This field is required",
                maxlength: "Enter only 10 digits",
                minlength: "Enter at least 10 digits",
                digits: "Please enter only digits"
            },
            state_: {
                required: "This field is required",
            },
            dist: {
                required: "This field is required",
            }
        },
        submitHandler: function (form) {
            var phone = $("#mynumber1").val();

            // Validate the phone number first
            if (phone.length === 10 && $.isNumeric(phone)) {
                if ($("#implement_rent_form").valid()) {
                    get_otp2(phone); // Only get OTP if the phone number is valid
                }
            } else {
                alert("Please enter a valid 10-digit mobile number.");
                $('#myModal').modal('hide'); 
                return;
            }
            
        }
    });

    // // Real-time validation for the mobile number field
    $("#mynumber1").on("input", function () {
        var phone = $(this).val();
        if (phone.length === 10 && $.isNumeric(phone)) {
            $("#mobile-error").hide(); 
        } else {
            $("#mobile-error").show(); 
        }
    });
    // Handle form submission
    $("#rent_implement").on("click", function () {
        var phone = $("#mynumber1").val();
        if ($("#implement_rent_form").valid()) {
           
            if (phone.length === 10 && $.isNumeric(phone)) {
                $("#implement_rent_form").submit();
            } else {
                alert("Please enter a valid 10-digit mobile number.");
                $('#myModal').modal('hide'); 
                return; 
            }
        }
    });
});
</script>
<script>
    $(document).ready(function(){
        $('#get_OTP_btnBoth').on('hidden.bs.modal', function () {
            $('#otpverify').val(''); 
        });
    });
</script>
<script>
    $(document).ready(function(){
        $('#myModal').on('hidden.bs.modal', function () {
            $('#otp2').val(''); 
        });
    });
</script>


<script>
    $(document).ready(function () {
      jQuery.validator.addMethod("customPhoneNumber", function(value, element) {
            return /^[6-9]\d{9}$/.test(value); 
          }, "Phone number must start with 6 or above");
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
                fname: {
                    required: true,
                },
                lname: {
                    required: true,
                },
                'tractor_rent_image[]': {
                    required: true,
                    extension: "jpg|jpeg|png|gif" // Validate image formats
                },
                'rate_per[]': {
                    required: true,
                },
                'implement_rate[]': {
                    required: true,
                },
                'imp_type_id[]':{
                    required: true,
                },
                number: {
                    required: true,
                            minlength: 10,
                            maxlength: 10,
                            digits: true,
                            customPhoneNumber: true
                },
                state_: {
                    required: true,
                },
                dist: {
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
                    required: "This field is required",
                },
                fname: {
                    required: "This field is required",
                },
                lname: {
                    required: "This field is required",
                },
                'tractor_rent_image[]': {
                    required: "Please upload an image",
                    extension: "Please upload a valid image (jpg, jpeg, png, gif)"
                },
                'rate_per[]': {
                    required: "This field is required",
                },
                'implement_rate[]': {
                    required: "This field is required",
                },
                'imp_type_id[]':{
                    required: "This field is required",
                },
                number: {
                    required:"This field is required",
                    minlength: "Phone Number must be of 10 Digit",
                    maxlength: "Ensure exactly 10 digits of Mobile No.",
                    digits: "Please enter only digits"
                },
                state_: {
                    required: "This field is required",
                },
                dist: {
                    required: "This field is required",
                }
            },
        });
        $('#rent_submit_both').on('click', function() {
                $('#rent_list_form_').valid();
                console.log($('#rent_list_form_').valid());
          });
    });
</script> 

<script>
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

    $("#addRentTractorRowBtn").click(function () {
        // Validate the last row before adding a new one
        var lastRowIndex = $("#rentTractorTable tbody tr").length - 1;
        var isValidLastRow = validateRow(lastRowIndex);

        if (isValidLastRow) {
            var newIndex = $("#rentTractorTable tbody tr").length;

            var newRow = $("#rentTractorTable tbody tr:last").clone();

            newRow.find("input, select").each(function () {
                var originalId = $(this).attr("id");
                var originalName = $(this).attr("name");

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

            newRow.find('.fas.fa-image').attr('onclick', "triggerFileInput('" + newImageId + "')");
            newRow.find('.image-file-input').attr('id', newImageId);
            newRow.find('img').attr('id', newPreviewId).hide();
            newRow.find('.image-file-input').attr('onclick', "displayImagePreview(this, '" + newPreviewId + "')");
            newRow.find('.image-file-input').attr('onchange', "displayImagePreview(this, '" + newPreviewId + "')");
            newRow.find('.upload-img-wrap').attr('onclick', 'triggerFileInput(\'' + newImageId + '\')');

            newRow.find('td:first').text(newIndex + 1);

            if (newIndex === 0) {
                newRow.find('.remove-button').hide();
            } else {
                newRow.find('.remove-button').show();
            }

            $('#rentTractorTable tbody').append(newRow);
        }
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
        if (rowIndex === 0) {
            row.find('.remove-button').hide();
        }

        return isValidRow;
    }

    function removeRow(button) {
        $(button).closest('tr').remove();
    }

    $("#addRentTractorRowBtn").click(function () {
    });
</script>


    <script>
        function removeRow(button) {
            var $clickedRow = $(button).closest('tr');
            
            // Check if the clicked row is not the first row
            if ($clickedRow.index() !== 0) {
                $clickedRow.remove();
            }
        }
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

<script>
    function populateDropdownsFromClass(stateClassName, districtClassName, tehsilClassName) {
    var url = 'http://tractor-api.divyaltech.com/api/customer/state_data';
    $.ajax({
        url: url,
        type: "GET",
        headers: {
            'Authorization': 'Bearer ' + localStorage.getItem('token')
        },
        success: function(data) {
            console.log(data);
            const stateSelect = document.getElementsByClassName(stateClassName)[0];
            stateSelect.innerHTML = '<option selected value="">Please select a state</option>';

            // Populate the state dropdown with all states
            data.stateData.forEach(state => {
                const option = document.createElement('option');
                option.textContent = state.state_name;
                option.value = state.id;
                stateSelect.appendChild(option);
            });

            // Event listener for state select change
            stateSelect.addEventListener('change', function() {
                const selectedStateId = stateSelect.value;
                if (selectedStateId) {
                    getDistricts(selectedStateId, districtClassName, tehsilClassName); // Fetch districts by state
                } else {
                    clearDropdown(districtClassName); // Clear district dropdown
                    clearDropdown(tehsilClassName); // Clear tehsil dropdown
                }
            });
        },
        error: function(error) {
            console.error('Error fetching states:', error);
        }
    });
}

function getDistricts(state_id, districtClassName, tehsilClassName) {
    // If no state_id is provided, fetch all districts
    var url = state_id
        ? 'http://tractor-api.divyaltech.com/api/customer/get_district_by_state/' + state_id
        : 'http://tractor-api.divyaltech.com/api/customer/get_all_districts';

    var districtSelect = document.getElementsByClassName(districtClassName)[0];
    districtSelect.innerHTML = '<option selected value="">Please select a district</option>';

    $.ajax({
        url: url,
        type: "GET",
        headers: {
            'Authorization': 'Bearer ' + localStorage.getItem('token')
        },
        success: function(data) {
            if (data.districtData.length > 0) {
                data.districtData.forEach(row => {
                    const option = document.createElement('option');
                    option.textContent = row.district_name;
                    option.value = row.id;
                    districtSelect.appendChild(option);
                });

                // Allow selecting tehsils only if district is selected
                districtSelect.addEventListener('change', function() {
                    populateTehsil(districtSelect.value, tehsilClassName);
                });
            } else {
                districtSelect.innerHTML = '<option>No districts available</option>';
            }
        },
        error: function(error) {
            console.error('Error fetching districts:', error);
        }
    });
}

function clearDropdown(className) {
    var dropdown = document.getElementsByClassName(className)[0];
    dropdown.innerHTML = '<option selected disabled value="">Please select an option</option>';
}

function populateTehsil(districtId, tehsilClassName, selectedTehsilId) {
    var url = 'http://tractor-api.divyaltech.com/api/customer/get_tehsil_by_district/' + districtId;
    var tehsilSelect = document.getElementsByClassName(tehsilClassName)[0];
    tehsilSelect.innerHTML = '<option selected value="">Please select a tehsil</option>';

    $.ajax({
        url: url,
        type: "GET",
        headers: {
            'Authorization': 'Bearer ' + localStorage.getItem('token')
        },
        success: function(data) {
            if (data.tehsilData.length > 0) {
                data.tehsilData.forEach(row => {
                    const option = document.createElement('option');
                    option.textContent = row.tehsil_name;
                    option.value = row.id;
                    if (row.id === selectedTehsilId) {
                        option.selected = true;
                    }
                    tehsilSelect.appendChild(option);
                });
            } else {
                tehsilSelect.innerHTML = '<option>No tehsils available for this district</option>';
            }
        },
        error: function(error) {
            console.error('Error fetching tehsils:', error);
        }
    });
}

// Call the function to populate dropdowns with specific class names
populateDropdownsFromClass('state-dropdown_rent', 'district-dropdown_rent', 'tehsil-dropdown_rent');
</script>
</body>
</html>