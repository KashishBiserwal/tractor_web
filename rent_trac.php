<?php
    include 'includes/headertag.php';
    // $product_id=$_REQUEST['product_id'];
    // echo $product_id;
    include 'includes/footertag.php';
    ?>
   
   <script> var APIBaseURL = "<?php echo $APIBaseURL; ?>";</script>
   <script> var baseUrl = "<?php echo $baseUrl; ?>";</script>
   <script src="<?php $baseUrl; ?>model/rent_trac.js"></script>
   <script src="<?php $baseUrl; ?>model/State_dist_tehsil.js"></script>
   <script src="<?php $baseUrl; ?>model/state2_dist2.js"></script>
   <script src="<?php $baseUrl; ?>model/sdt.js"></script>

    <style>
    /* Add your custom styles here */
    .table-responsive {
        width: 100%;
        overflow-x: auto;
    }

    .upload-img-wrap {
        position: relative;
        width: 80px;
        height: 38px;
        overflow: hidden;
    }

    .upload-img-wrap i {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        font-size: 24px;
        color: #aaa;
    }
  
    .image-file-input {
        display: none;
    }

    @media (max-width: 991px) {
  .tab-content>.tab-pane {
    display: block;
    opacity: 1;
  }
}
</style>
<body class="loaded"> 
<div class="main-wrapper">
    <div class="app" id="app">
    <?php
    include 'includes/left_nav.php';
    include 'includes/header_admin.php';
    ?>
  <section style="padding: 0 15px;">
    <div class="">
      <div class="container">
        <div class="card-body d-flex align-items-center justify-content-between page_title">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb my-0 ms-2">
              
              <li class="breadcrumb-item">
                <span>Rent tractor & Implement List</span>
              </li>
            </ol>
          </nav>
          <button type="button" id="add_trac" class="btn add_btn btn-success float-right p-1" data-bs-toggle="modal" data-bs-target="#staticBackdrop" onclick="resetFormFields(); enableFormFields()">
            <i class="fa fa-plus" aria-hidden="true"></i> Add Rent Tractor & Implement
          </button>
          <!-- Modal -->
          <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-xl modal-dialog-centered">
              <div class="modal-content modal_box">
                <div class="modal-header modal_head">
                  <h5 class="modal-title text-white fw-bold" id="staticBackdropLabel">New Rent Tractor & Implement </h5>
                  <button type="button" class="btn-close btn-success" data-bs-dismiss="modal" aria-label="Close"><img src="assets/images/close.png"></button>
                </div>
                <div class="modal-body bg-light">
                  <div class="row justify-content-center">
                    <div class="col-lg-10">
                      <h4 class="text-center">Fill your Details</h4>
                    </div>   
                    <ul class="nav nav-tabs d-none d-lg-flex px-3" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active fw-bold" id="home-tab"  data-bs-toggle="tab" data-bs-target="#home-tab-pane" type="button" role="tab" aria-controls="home-tab-pane" aria-selected="true">Rent Tractor Only</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link fw-bold" id="profile-tab" data-bs-toggle="tab"data-bs-target="#profile-tab-pane" type="button" role="tab" aria-controls="profile-tab-pane" aria-selected="false">Rent Implement Type Only</button>
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
                                                                    <div class="card upload-img-wrap" name="rent_trac_image" onclick="triggerFileInput('customFile1')" style="height: 38px; cursor: pointer;">
                                                                            <i class="fas fa-image m-auto" style="font-size: 16px;" onclick="triggerFileInput('customFile1')"></i>
                                                                            <img id="selectedImage" src="assets/images/upload-img-logo.jpg" alt="example placeholder" style="max-width: 100%; max-height: 100%; object-fit: cover; display: none;" name="image_tractor" class="img-thumbnail"/>
                                                                    </div>
                                                                    <input type="file" id="customFile1" class="d-none" accept="image/*" name="tractor_rent_image[]" onchange="displayImagePreview(this, 'selectedImage')" required>
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
                                                            <textarea rows="2" cols="70" class="w-100 p-2" id="workingRadius" name="textarea_" oninput="this.value = this.value.replace(/[^0-9]/g, '')"></textarea>
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
                                            <h5 class="pb-2 mt-2">Implement Brand Detail</h5>
                                      </div>
                                      <div class="col-12 col-sm-12 col-md-4 col-lg-4 mt-2">
                                          <div class="form-outline">
                                            <label class="form-label text-dark">Brand</label>
                                              <select class="form-select" aria-label="Default select example"id="brand_implement" name="brand">
                                              </select>
                                          </div>
                                          </div>
                                        <div class="text-center">
                                            <h5 class="pb-2 mt-2">Implement Type Information</h5>
                                        </div>
                                        <form id="implement_rent_form">
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
                                                        <input type="text" id="enquiry_type_id1" name="" value="18" class=" data_search form-control input-group-sm py-2"/>
                                                    </div>
                                                </div>
                                                <div class="col- col-sm-6 col-lg-6 col-md-6" hidden>
                                                <label class="text-dark">User<span class="text-danger">*</span></label>
                                                        <input type="text" class="form-control py-2" for="idUser"  id="idUser1" name="first_name" placeholder="Enter First Name">
                                                <small></small>
                                                </div>  
                                                <div class="col-12 col-lg-6 col-md-6 col-sm-6" hidden>
                                                  <label for="name" class="form-label fw-bold text-dark"> <i class="fa-regular fa-user"></i> product type id</label>
                                                  <input type="text" class="form-control" id="added_by1" value="">
                                                </div>
                                                <div class="table-responsive my-3">
                                                    <table id="Implement_rent_only" class="table table-sm">
                                                        <thead>
                                                            <tr>
                                                                <th>No.</th>
                                                                <th width="80">Image</th>
                                                                <!-- <th>Brand</th> -->
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
                                                                </td>
                                                                <!-- <td>
                                                                    <div class="select-wrap">
                                                                        <select name="brand[]" id="brand_implement" class="form-control">
                                                                            <option value>Select</option>
                                                                        </select>
                                                                    </div>
                                                                </td> -->
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
                                                        <textarea rows="2" cols="70" class="w-100 p-2" id="workingRadius1" name="textarea_" oninput="this.value = this.value.replace(/[^0-9]/g, '')"></textarea>
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
                                                        <input type="text" class="form-control" placeholder="" id="mynumber1" name="number">
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
                                                    <button type="button" class="btn btn-success fw-bold px-3 w-100" id="rent_implement">
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
                                              <input type="text" id="enquiry_type_id2" name="" value="18" class=" data_search form-control input-group-sm py-2" />
                                          </div>
                                      </div>
                                      <div class="col- col-sm-6 col-lg-6 col-md-6" hidden>
                                          <label class="text-dark">User<span class="text-danger">*</span></label>
                                                  <input type="text" class="form-control py-2" for="idUser"  id="idUser2" name="first_name" placeholder="Enter First Name">
                                          <small></small>
                                      </div>  
                                      <div class="col-12 col-lg-6 col-md-6 col-sm-6 " hidden>
                                          <label for="name" class="form-label fw-bold text-dark"> <i class="fa-regular fa-user"></i> product type id</label>
                                          <input type="text" class="form-control" id="added_by2" value="">
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
                                              <textarea rows="2" cols="70" class="w-100 p-2" id="workingRadius3" name="textarea_" oninput="this.value = this.value.replace(/[^0-9]/g, '')"></textarea>
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
                                              <input type="text" class="form-control" placeholder="" id="mynumber2" name="number">
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
                                          <button type="button" id="rent_submit_both" class="btn btn-success fw-bold px-3 w-100">Submit</button>
                                      </div>
                                    </div>
                                  </form>
                                </div>
                              </div>
                            </div>
                          </div> 
                        </div>
                      </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary px-3" data-bs-dismiss="modal">Close</button>
                  <!-- <button type="button" id="sub_btn_" class="btn btn-success fw-bold px-3"  data-bs-dismiss="modal">Submit</button> -->
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <!-- Filter Card -->
      <div class="filter-card mb-2">
        <div class="card-body">
          <div class="row">
            <div class="col-12 col-sm-12 col-md-3 col-lg-3">
              <div class="form-outline">
                <label class="form-label"> Brand Name</label>
                <select class="form-select py-2" aria-label="Default select example" id="brandsearch">
               
                </select>
              </div>
            </div>
            <div class="col-12 col-sm-12 col-md-3 col-lg-3">
              <div class="form-outline ">
                <label class="form-label">Model</label>
                    <select class="form-select py-2" aria-label="Default select example" id="modelsearch">
                    
                    </select>
              </div>
            </div>
            <div class="col-12 col-sm-12 col-md-3 col-lg-3">
              <div class="form-outline">
                <label class="form-label">State</label>
                <select class="form-select py-2 state_select" aria-label="Default select example" id="state_sct">
                  
                </select>
              </div>
            </div>
            <div class="col-12 col-sm-12 col-md-3 col-lg-3">
              <div class="form-outline">
                <label class="form-label">District</label>
                <select class="form-select py-2 district_select" aria-label="Default select example" id="district_sct">
                 
                </select>
              </div>
            </div>
            <div class="col-12 my-3">
              <div class="text-center">
                <button type="button" class="btn-success btn px-3 pt-2" id="Search" >Search</button>
                <button type="button" class="btn-success btn mx-2 px-3 pt-2" id="Reset">Reset</button>
              </div>
            </div>
           </div>
        </div>
      </div>
      <!-- Table Card -->
      <div class=" mb-5 shadow bg-white mt-3 p-3">
        <div class="table-responsive">
          <table id="example" class="table table-striped  table-hover table-bordered dataTable no-footer" width="100%; margin-bottom: 15px;">
            <thead>
              <tr>
                <th class="d-none d-md-table-cell text-white">S.No.</th>
                <th class="d-none d-md-table-cell text-white">Date/Time</th>
                <th class="d-none d-md-table-cell text-white">Brand</th>
                <th class="d-none d-md-table-cell text-white">Model</th>
                <th class="d-none d-md-table-cell text-white">Name</th>
                <th class="d-none d-md-table-cell text-white">Purchase Year</th>
                <th class="d-none d-md-table-cell text-white">State</th>
                <th class="d-none d-md-table-cell text-white">District</th>
                <th class="d-none d-md-table-cell text-white">Action</th>
              </tr>
            </thead>
            <tbody id="data-table-rent">
            </tbody>
            </table>
        </div>
      </div>
    </div>
</section>
      
     <!-- view -->
     <div class="modal fade" id="rent_view_model" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered">
              <div class="modal-content modal_box">
                <div class="modal-header modal_head">
                  <h5 class="modal-title text-white fw-bold" id="staticBackdropLabel">Rent Tractor Information </h5>
                  <button type="button" class="btn-close btn-success" data-bs-dismiss="modal" aria-label="Close"><img src="assets/images/close.png"></button>
                </div>
                  <div class="modal-body bg-light">
                    <div class="row ">
                       <div class="col-12">
                        <table class="table table-striped">
                        <tbody>
                          <tr>
                            <td>Brand-</td>
                            <td id="brand1"></td> 
                            <td>Model-</td>
                            <td id="model1"></td> 
                          </tr>
                         <tr>
                            <td>First Name:-</td>
                            <td id="first_name2"></td>
                            <td>Last Name-</td>
                            <td id="last_name2"></td>
                          </tr>
                          <tr>
                            <td>Mobile Number-</td>
                            <td id="monile"></td>
                            <td>Date-</td>
                            <td id="date_2"></td>
                          </tr>
                          <tr>
                            <td>Purchase Year-</td>
                            <td id="purchase_year1"></td> 
                            <td>State-</td>
                            <td id="state2"></td>
                          </tr>
                          <tr>
                            <td>District-</td>
                            <td id="district2"></td>
                            <td>Tehsil-</td>
                            <td id="tehsil2"></td>
                           </tr>
                          <tr>
                            <td>Upload images-</td>
                              <td colspan="3">
                                  <div class="col-12">
                                      <div id="selectedImagesContainer-old" class="upload__img-wrap row"></div>
                                  </div>
                              </td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>  
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary px-3" data-bs-dismiss="modal">Close</button>
                </div>
              </div>
            </div>
          </div>
    </div>
</div>
</body>

<?php
   include 'includes/footertag.php';
   ?> 
   </body>


   <!-- <script>
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
        fname:{
          required: true,
        },
        lname:{
          required: true,
        },
        number:{
          required:true, 
            maxlength:10,
            digits: true,
            customPhoneNumber: true
        },
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
        number:{
          required:"This field is required",
          maxlength:"Enter only 10 digits",
          digits: "Please enter only digits"
        },
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
  </script> -->
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

<!-- <script>
      function updateTableRows(userData2) {
                var tableBody = $('#rentTractorTable tbody');
                tableBody.empty();
            
                userData2.forEach(function(item, index) {
                    var formattedRate = formatPriceWithCommas(item.rate);
                    var imageUrl = 'http://tractor-api.divyaltech.com/uploads/rent_img/' + item.images.trim();
                    var row = '<tr>' +
                        '<td>' + (index + 1) + '</td>' +
                        '<td>' +
                        '<div class="card upload-img-wrap" id="imageDiv_' + index + '">' +
                        '<img src="' + imageUrl + '" alt="Image" class="img-thumbnail image-clickable" id="image_' + index + '">' +
                        '</div>' +
                        '<input type="file" name="imp_' + index + '" id="impImage_0' + index + '" class="image-file-input" accept="image/*" style="display: none;" onchange="displayImagePreview(this, \'impImagePreview_' + index + '\')" required>' +
                        '</td>' +
                        '<td>' +
                        '<div class="select-wrap">' +
                        '<select name="imp_type_id[]" id="impType_0' + index + '" class="form-control implement-type-input">' +
                        '<option value="' + item.id + '">' + item.category_name + '</option>' +
                        '</select>' +
                        '</div>' +
                        '</td>' +
                        '<td>' +
                        '<input type="text" name="implement_rate[]" id="implement_rent' + index + '" class="form-control implement-rate-input" maxlength="10" placeholder="e.g- 1,500" value="' + formattedRate + '">' +
                        '</td>' +
                        '<td>' +
                        '<div class="select-wrap">' +
                        '<select name="rate_per[]" id="impRatePer_0' + index + '" class="form-control implement-unit-input">' +
                        '<option value="' + item.rate_per + '">' + item.rate_per + '</option>' +
                        '</select>' +
                        '</div>' +
                        '</td>' +
                        '<td>' +
                        '<button type="button" class="btn btn-danger" title="Remove Row" onclick="removeRow(this)">' +
                        '<i class="fas fa-minus"></i>' +
                        '</button>' +
                        '</td>' +
                        '</tr>';
            
                    tableBody.append(row);
                    
                    $('#image_' + index).click(function() {
                        $('#impImage_0' + index).click();
                    });
                });
            }
</script> -->


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

            const stateIds = [7, 15, 20, 26, 34]; // Array of State IDs you want to fetch districts for

            stateIds.forEach(stateId => {
                const filteredState = data.stateData.find(state => state.id === stateId);
                if (filteredState) {
                    const option = document.createElement('option');
                    option.textContent = filteredState.state_name;
                    option.value = filteredState.id;
                    stateSelect.appendChild(option);
                }
            });

            // Event listener for state select change
            stateSelect.addEventListener('change', function() {
                const selectedStateId = stateSelect.value;
                if (selectedStateId) {
                    getDistricts(selectedStateId, districtClassName, tehsilClassName);
                } else {
                    clearDropdown(districtClassName);
                    clearDropdown(tehsilClassName);
                }
            });

            // Initial population of districts for the first state
            if (stateIds.length > 0) {
                getDistricts(stateIds[0], districtClassName, tehsilClassName);
            } else {
                stateSelect.innerHTML = '<option>No valid data available</option>';
            }
        },
        error: function(error) {
            console.error('Error fetching data:', error);
        }
    });
}
function getDistricts(state_id, districtClassName, tehsilClassName) {
    console.log(state_id,districtClassName,tehsilClassName);
    var url = 'http://tractor-api.divyaltech.com/api/customer/get_district_by_state/' + state_id;
    var districtSelect = document.getElementsByClassName(districtClassName)[0];
    districtSelect.innerHTML = '<option selected disabled value="">Please select a district</option>';

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

                // Event listener for district select change
                districtSelect.addEventListener('change', function() {
                    populateTehsil(districtSelect.value, tehsilClassName);
                });

                // Initial population of tehsils for the first district
                populateTehsil(districtSelect.value, tehsilClassName);
            } else {
                districtSelect.innerHTML = '<option>No districts available for this state</option>';
            }
        },
        error: function(error) {
            console.error('Error fetching districts:', error);
        }
    });
}
function clearDropdown(className) {
    var dropdown = document.getElementsByClassName(className)[0];
    dropdown.innerHTML = '';
}
function populateTehsil(districtId, tehsilClassName, selectedTehsilId) {
    var url = 'http://tractor-api.divyaltech.com/api/customer/get_tehsil_by_district/' + districtId; 
    console.log(url);
    var tehsilSelect = document.getElementsByClassName(tehsilClassName)[0];
    tehsilSelect.innerHTML = '<option selected disabled value="">Please select a tehsil</option>';

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
        $('#rent_submit').on('click', function() {
          $('#tractor_rent_form').valid();
          console.log($('#tractor_rent_form').valid());
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
            number: {
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
            number: {
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
    });
  $('#rent_implement').on('click', function() {
          $('#implement_rent_form').valid();
          console.log($('#implement_rent_form').valid());
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