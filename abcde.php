<!DOCTYPE html>
<html lang="en">
<head>
<?php
include 'includes/headertag.php';
   include 'includes/footertag.php';
   
   ?> 
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
  <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
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
</style>
  </head>

<body>
<section style="padding: 0 15px;">
    <div class="">
      <div class="container">
        <div class="card-body d-flex align-items-center justify-content-between page_title">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb my-0 ms-2">
              
              <li class="breadcrumb-item">
                <span>Rent tractor List</span>
              </li>
            </ol>
          </nav>
          <button type="button" id="add_trac" class="btn add_btn btn-success float-right" data-bs-toggle="modal"  data-bs-target="#staticBackdrop">
              <i class="fa fa-plus" aria-hidden="true"></i> Add Rent Tractor
          </button>

          <!-- Modal -->
          <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-xl modal-dialog-centered">
              <div class="modal-content modal_box">
                <div class="modal-header modal_head">
                  <h5 class="modal-title text-white fw-bold" id="staticBackdropLabel"> Add New Rent Tractor </h5>
                  <button type="button" class="btn-close btn-success" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body bg-light">
                  <div class="row justify-content-center">
                    <div class="col-lg-10">
                      <h4 class="text-center">Fill your Details</h4>
                      <form id="rent_list_form_">
                              <div class="row justify-content-center pt-4">
                                <div class="col-12 col-sm-4 col-md-4 col-lg-4">
                                  <div class="form-outline">
                                    <label class="form-label">Brand</label>
                                    <select class="form-select" aria-label="Default select example"id="brand" name="brand">
                                      <option value>Select Brand</option>
                                      <option value="1">Mahindra</option>
                                      <option value="2">Swaraj</option>
                                      <option value="3">John deere</option>
                                    </select>
                                  </div>
                                </div>
                                <div class="col-12 col-sm-4 col-md-4 col-lg-4">
                                  <div class="form-outline">
                                    <label class="form-label">Model</label>
                                    <select class="form-select" aria-label="Default select example"id="model" name="model">
                                      <option value>Select Model</option>
                                      <option value="1">Mahindra</option>
                                      <option value="2">Swaraj</option>
                                      <option value="3">John deere</option>
                                    </select>
                                  </div>
                                </div>
                                <div class="col-12 col-sm-4 col-md-4 col-lg-4">
                                  <div class="form-outline">
                                    <label class="form-label">Year</label>
                                    <select class="form-select" aria-label="Default select example"id="year" name="year">
                                      <option value>Select Year</option>
                                      <option value="1">2020</option>
                                      <option value="2">2021</option>
                                      <option value="3">2022</option>
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
                                                    <div class="card upload-img-wrap">
                                                        <i class="fas fa-image m-auto" style="cursor: pointer;" onclick="triggerFileInput('impImage_0')"></i>
                                                        <img id="impImagePreview_0" src="" alt="Image Preview" style="max-width: 100%; max-height: 100%; display: none;" class="images">
                                                    </div>
                                                    <input type="file" name="imp_image[]" id="impImage_0" class="image-file-input" accept="image/*" style="display: none;" required="" onchange="displayImagePreview(this, 'impImagePreview_0')">
                                                </td>
                                                <td>
                                                    <div class="select-wrap">
                                                        <select name="imp_type_id[]" id="impType_0" class="form-control implement-type-input">
                                                        <option value>Select</option>
                                                        <option value="type1">Type 1</option>
                                                        <option value="type2">Type 2</option>
                                                        </select>
                                                    </div>
                                                </td>
                                                <td>
                                                     <input type="text" name="implement_rate[]" id="impRate_0" class="form-control implement-rate-input" maxlength="10" placeholder="e.g- 1500">
                                                </td>
                                                <td>
                                                    <div class="select-wrap">
                                                        <select name="rate_per[]" id="impRatePer_0" class="form-control implement-unit-input">
                                                        <option value="">Select</option>
                                                        <option value="per1">Acer</option>
                                                        <option value="per2">Hour</option>
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
                                  <div class="form-outline mt-2">
                                    <label class="form-label text-dark">Working Area</label>
                                    <textarea rows="3" cols="70" class="w-100" minlength="1" maxlength="255" id="textarea_" name="textarea_"></textarea>
                                  </div>
                                </div>
                                <div class="col-12 col-lg-6 col-md-6 col-sm-6 ">
                                  <div class="form-outline mt-2">
                                    <label class="form-label text-dark">Description</label>
                                    <textarea rows="3" cols="70" class="w-100" minlength="1" maxlength="255" id="textarea_d" name="textarea_d"></textarea>
                                  </div>
                                </div>
                                <div class="text-center">
                                  <h4 class="pb-2 mt-2">Personal Information</h4>
                                </div>
                                <div class="col-12 col-lg-6 col-sm-5 col-md-6 my-1">
                                  <div class="form-outline mt-3">
                                    <label for="name" class="form-label text-dark">First Name</label>
                                    <input type="text" class="form-control" placeholder="" id="fname" name="fname">
                                  </div>
                                </div>
                                <div class="col-12 col-lg-6 col-sm-5 col-md-6 my-1">
                                  <div class="form-outline mt-3">
                                    <label for="name" class="form-label text-dark">Last Name</label>
                                    <input type="text" class="form-control" placeholder="" id="lname" name="lname">
                                  </div>
                                </div>
                                <div class="col-12 col-lg-6 col-sm-5 col-md-6 my-1">
                                  <div class="form-outline mt-2">
                                    <label for="name" class="form-label text-dark">Mobile Number</label>
                                    <input type="text" class="form-control" placeholder="" id="number" name="number">
                                  </div>
                                </div>
                                <div class="col-12 col-lg-6 col-sm-5 col-md-6 my-1">
                                  <div class="form-outline mt-2">
                                    <label class="form-label ">State</label>
                                    <select class="form-select py-2" aria-label="Default select example" id="state_" name="state_">
                                      <option value>Select State</option>
                                      <option value="1">Chattisgarh</option>
                                      <option value="2">Other</option>
                                    </select>
                                  </div>
                                </div>
                                <div class="col-12 col-lg-6 col-sm-5 col-md-6 my-1">
                                  <div class="form-outline mt-3">
                                    <label class="form-label ">District</label>
                                    <select class="form-select py-2" aria-label="Default select example" id="dist" name="dist">
                                      <option value>Select District</option>
                                      <option value="1">Raipur</option>
                                      <option value="2">Bilaspur</option>
                                    </select>
                                  </div>
                                </div>
                                <div class="col-12 col-lg-6 col-sm-5 col-md-6 my-1">
                                  <div class="form-outline mt-3">
                                    <label class="form-label">Tehsil</label>
                                    <select class="form-select py-2" aria-label="Default select example">
                                      <option value>Select Tehsil</option>
                                      <option value="1">Raipur</option>
                                      <option value="2">Bilaspur</option>
                                    </select>
                                  </div>
                                </div>
                              </div>
                        </form>
                    </div>
                  </div>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary px-3" data-bs-dismiss="modal">Close</button>
                  <button type="submit"  id="sub_btn_"class="btn btn-success fw-bold px-3">Submit</button>
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
                <select class="form-select py-2" aria-label="Default select example">
                    <option value>Select Brand</option>
                    <option value="1">Mahindra</option>
                    <option value="2">Swaraj</option>
                    <option value="3">John Deere</option>
                </select>
              </div>
            </div>
            <div class="col-12 col-sm-12 col-md-3 col-lg-3">
              <div class="form-outline ">
                <label class="form-label">Model</label>
                    <select class="form-select py-2" aria-label="Default select example">
                        <option value>Select Model</option>
                        <option value="1">3032 NX</option>
                        <option value="2">3030 NX</option>
                        <option value="3">3230 NX</option>
                    </select>
              </div>
            </div>
            <div class="col-12 col-sm-12 col-md-3 col-lg-3">
              <div class="form-outline">
                <label class="form-label">State</label>
                <select class="form-select py-2" aria-label="Default select example">
                    <option value>Select State</option>
                    <option value="1">Chattisgarh</option>
                    <option value="2">Other</option>
                </select>
              </div>
            </div>
            <div class="col-12 col-sm-12 col-md-3 col-lg-3">
              <div class="form-outline">
                <label class="form-label">District</label>
                <select class="form-select py-2" aria-label="Default select example">
                    <option value>Select District</option>
                    <option value="1">Raipur</option>
                    <option value="2">Bilaspur</option>
                    <option value="3">Surajpur</option>
                </select>
              </div>
            </div>
            <div class="col-12 my-5">
              <div class="text-center">
                <button type="button" class="btn-success btn px-3 pt-2" id="Search">Search</button>
                <button type="button" class="btn-success btn mx-2 px-3 pt-2" id="Reset">Reset</button>
              </div>
            </div>
          
          </div>
        </div>
      </div>
      <!-- Table Card -->
      <div class=" mb-5">
        <div class="table-responsive">
          <table id="example" class="table dataTable no-footer py-1" width="100%">
            <thead>
              <tr>
                <th class="d-none d-md-table-cell text-dark">S.No.</th>
                <th class="d-none d-md-table-cell text-dark">Date</th>
                <th class="d-none d-md-table-cell text-dark">Brand</th>
                <th class="d-none d-md-table-cell text-dark">Model</th>
                <th class="d-none d-md-table-cell text-dark">Name</th>
                <th class="d-none d-md-table-cell text-dark">Phone Number</th>
                <th class="d-none d-md-table-cell text-dark">Year</th>
                <th class="d-none d-md-table-cell text-dark">Implement Type</th>
                <th class="d-none d-md-table-cell text-dark">Action</th>
              </tr>
            </thead>
            <tbody>
            </tbody>
          </table>
         </div>
        </div>
    </div>
</section>

<?php
   include 'includes/footertag.php';
   ?>
   
   <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

   <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>


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
        fname:{
          required: true,
        },
        lname:{
          required: true,
        },
        number:{
          required: true,
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
</script>


<!-- main code  -->
<!-- <script>
  function triggerFileInput(inputId) {
      $('#' + inputId).trigger('click');
    }

    function displayImagePreview(input, previewId) {
        var preview = $('#' + previewId);
        var file = input.files[0];
        var reader = new FileReader();

        reader.onloadend = function () {
            preview.attr('src', reader.result);
            preview.show();
            hideImageIcon(input);
        };

        if (file) {
            reader.readAsDataURL(file);
        } else {
            preview.attr('src', '').hide();
            showImageIcon(input);
        }
    }

    function hideImageIcon(input) {
        $(input).siblings('.upload-img-wrap').find('.fas.fa-image').hide();
    }

    function showImageIcon(input) {
        $(input).siblings('.upload-img-wrap').find('.fas.fa-image').show();
    }

    function removeRow(button) {
        $(button).closest('tr').remove();
        updateSerialNumbers();
    }

    function updateSerialNumbers() {
        $('#rentTractorTable tbody tr').each(function (index) {
            var rowNumber = index + 1;
            $(this).find('td:first').text(rowNumber);

            // Update other IDs as needed
            var newImageId = 'impImage_' + rowNumber;
            var newPreviewId = 'impImagePreview_' + rowNumber;
            $(this).find('.image-file-input').attr('id', newImageId);
            $(this).find('img').attr('id', newPreviewId);
            $(this).find('.upload-img-wrap').attr('onclick', 'triggerFileInput(\'' + newImageId + '\')');
        });
    }

    $(document).ready(function () {
        $('#addRentTractorRowBtn').click(function () {
            var newRow = $('#rentTractorTable tbody tr:last').clone();
            var newRowNumber = $('#rentTractorTable tbody tr').length +1;

            newRow.find('td:first').text(newRowNumber);

            var newImageId = 'impImage_' + newRowNumber;
            var newPreviewId = 'impImagePreview_' + newRowNumber;

            // Update IDs and content for the new row
            newRow.find('.image-file-input').attr('id', newImageId);
            newRow.find('img').attr('id', newPreviewId).hide();
            newRow.find('.upload-img-wrap').attr('onclick', 'triggerFileInput(\'' + newImageId + '\')');

            newRow.find('td:last').html('<button type="button" class="btn btn-danger" title="Remove Row" onclick="removeRow(this)"><i class="fas fa-minus"></i></button>');

            $('#rentTractorTable tbody').append(newRow);
            updateSerialNumbers();
        });
    });
        function displayImagePreview(input, previewId) {
        var preview = $('#' + previewId);
        var file = input.files[0];
        var reader = new FileReader();

        reader.onloadend = function () {
            preview.attr('src', reader.result);
            preview.show();
            hideImageIcon(input);
        };

        if (file) {
            reader.readAsDataURL(file);
        } else {
            preview.attr('src', '').hide();
            showImageIcon(input);
        }
    }

    function hideImageIcon(input) {
        $(input).siblings('.upload-img-wrap').find('.fas.fa-image').hide();
    }

    function showImageIcon(input) {
        $(input).siblings('.upload-img-wrap').find('.fas.fa-image').show();
    }
    $(document).ready(function () {
    $("#addRentTractorRowBtn").click(function () {
        // Validate all fields in the first row (index 0)
        var isValidFirstRow = validateRow($("#rentTractorTable tbody tr").length - 2);

<<<<<<< .mine
        if (isValidFirstRow) {
            var newIndex = $("#rentTractorTable tbody tr").length;



































































































































































































































































































































































































=======
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
                                                <textarea rows="4" cols="70" class="w-100" minlength="1" id="description" name="description"required></textarea>
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
>>>>>>> .theirs

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

            // Generate unique IDs for the image elements
            var imageIndex = newIndex - 1;
            var newImageId = 'impImage_' + newIndex;
            var newPreviewId = 'impImagePreview_' + newIndex;

            newRow.find('.fas.fa-image').attr('onclick', "triggerFileInput('" + newImageId + "')");
            newRow.find('.image-file-input').attr('id', newImageId);
            newRow.find('img').attr('id', newPreviewId).hide();
            newRow.find('.upload-img-wrap').attr('onclick', 'triggerFileInput(\'' + newImageId + '\')');

            newRow.find('td:last').html('<button type="button" class="btn btn-danger" title="Remove Row" onclick="removeRow(this)"><i class="fas fa-minus"></i></button>');

            $('#rentTractorTable tbody').append(newRow);
            updateSerialNumbers();
        }
    });

        $(document).on("click", ".btn-danger", function () {
            $(this).closest("tr").remove();
        });

        // Form Validation
        $("#rentTractorTable").on("submit", function (e) {
            var isValidForm = true;

            // Iterate through each row and validate
            $("#rentTractorTable tbody tr").each(function (index) {
                if (!validateRow(index)) {
                    isValidForm = false;
                    // Stop iteration if any row is invalid
                    return false;
                }
            });

            if (!isValidForm) {
                e.preventDefault();
            }
        });

        // Add event handlers for immediate validation on input or change
        $("#rentTractorTable").on("input change", ".image-file-input, .implement-type-input, .implement-rate-input, .implement-unit-input", function () {
            validateRow($(this).closest("tr").index());
        });

        function displayImagePreview(input, imagePreviewId) {
            var fileInput = $(input);
            var preview = $("#" + imagePreviewId);

            if (fileInput.get(0).files.length > 0) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    preview.attr('src', e.target.result);
                    preview.show(); // Show the image preview
                    fileInput.siblings('.fas.fa-image').hide(); // Hide the upload icon
                };

                reader.readAsDataURL(fileInput.get(0).files[0]);
            } else {
                // No file selected, hide the image preview and show the upload icon
                preview.hide();
                fileInput.siblings('.fas.fa-image').show();
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
    });
</script> -->

<!-- <script>
  function triggerFileInput(inputId) {
      $('#' + inputId).trigger('click');
    }

    function displayImagePreview(input, previewId) {
        var preview = $('#' + previewId);
        var file = input.files[0];
        var reader = new FileReader();

        reader.onloadend = function () {
            preview.attr('src', reader.result);
            preview.show();
            hideImageIcon(input);
        };

        if (file) {
            reader.readAsDataURL(file);
        } else {
            preview.attr('src', '').hide();
            showImageIcon(input);
        }
    }

    function hideImageIcon(input) {
        $(input).siblings('.upload-img-wrap').find('.fas.fa-image').hide();
    }

    function showImageIcon(input) {
        $(input).siblings('.upload-img-wrap').find('.fas.fa-image').show();
    }

    function removeRow(button) {
        $(button).closest('tr').remove();
        updateSerialNumbers();
    }

    function updateSerialNumbers() {
        $('#rentTractorTable tbody tr').each(function (index) {
            var rowNumber = index + 1;
            $(this).find('td:first').text(rowNumber);

            // Update other IDs as needed
            var newImageId = 'impImage_' + rowNumber;
            var newPreviewId = 'impImagePreview_' + rowNumber;
            $(this).find('.image-file-input').attr('id', newImageId);
            $(this).find('img').attr('id', newPreviewId);
            $(this).find('.upload-img-wrap').attr('onclick', 'triggerFileInput(\'' + newImageId + '\')');
        });
    }

    $(document).ready(function () {
    $("#addRentTractorRowBtn").click(function () {
        // Validate all fields in the first row (index 0)
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

            // Generate unique IDs for the image elements
            var imageIndex = newIndex - 1;
            var newImageId = 'impImage_' + newIndex;
            var newPreviewId = 'impImagePreview_' + newIndex;

            newRow.find('.fas.fa-image').attr('onclick', "triggerFileInput('" + newImageId + "')");
            newRow.find('.image-file-input').attr('id', newImageId);
            newRow.find('img').attr('id', newPreviewId).hide();
            newRow.find('.upload-img-wrap').attr('onclick', 'triggerFileInput(\'' + newImageId + '\')');

            newRow.find('td:first').text(newIndex + 1); // Update the serial number

            newRow.find('td:last').html('<button type="button" class="btn btn-danger" title="Remove Row" onclick="removeRow(this)"><i class="fas fa-minus"></i></button>');

            $('#rentTractorTable tbody').append(newRow);
            updateSerialNumbers();
        }
    });
        $(document).on("click", ".btn-danger", function () {
            $(this).closest("tr").remove();
        });

        // Form Validation
        $("#rentTractorTable").on("submit", function (e) {
            var isValidForm = true;

            // Iterate through each row and validate
            $("#rentTractorTable tbody tr").each(function (index) {
                if (!validateRow(index)) {
                    isValidForm = false;
                    // Stop iteration if any row is invalid
                    return false;
                }
            });

            if (!isValidForm) {
                e.preventDefault();
            }
        });

        // Add event handlers for immediate validation on input or change
        $("#rentTractorTable").on("input change", ".image-file-input, .implement-type-input, .implement-rate-input, .implement-unit-input", function () {
            validateRow($(this).closest("tr").index());
        });

        function displayImagePreview(input, imagePreviewId) {
            var fileInput = $(input);
            var preview = $("#" + imagePreviewId);

            if (fileInput.get(0).files.length > 0) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    preview.attr('src', e.target.result);
                    preview.show(); // Show the image preview
                    fileInput.siblings('.fas.fa-image').hide(); // Hide the upload icon
                };

                reader.readAsDataURL(fileInput.get(0).files[0]);
            } else {
                // No file selected, hide the image preview and show the upload icon
                preview.hide();
                fileInput.siblings('.fas.fa-image').show();
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

    function hideImageIcon(input) {
        $(input).closest('td').find('.fas.fa-image').hide();
    }

    function showImageIcon(input) {
        $(input).closest('td').find('.fas.fa-image').show();
    }

    function removeRow(button) {
        $(button).closest('tr').remove();
        updateSerialNumbers();
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

    $(document).ready(function () {
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

                newRow.find('.fas.fa-image').attr('onclick', "triggerFileInput('" + newImageId + "')");
                newRow.find('.image-file-input').attr('id', newImageId);
                newRow.find('img').attr('id', newPreviewId).hide();
                newRow.find('.upload-img-wrap').attr('onclick', 'triggerFileInput(\'' + newImageId + '\')');

                newRow.find('td:first').text(newIndex + 1);
                newRow.find('td:last').html('<button type="button" class="btn btn-danger" title="Remove Row" onclick="removeRow(this)"><i class="fas fa-minus"></i></button>');

                $('#rentTractorTable tbody').append(newRow);
                updateSerialNumbers();
            }
        });

        $(document).on("click", ".btn-danger", function () {
            $(this).closest("tr").remove();
            updateSerialNumbers();
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
    });
</script>



</body>
</html>