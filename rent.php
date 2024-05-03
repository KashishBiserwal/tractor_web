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
                                                    <input type="file" name="imp_0" id="impImage_0" class="image-file-input" accept="image/*" style="display: none;" onchange="displayImagePreview(this, 'impImagePreview_0')" required>
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
                                        <textarea rows="2" cols="70" class="w-100 p-2" id="workingRadius" name="textarea_" oninput="this.value = this.value.replace(/[^0-9]/g, '')"></textarea>
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
                                      <button type="button" id="rent_submit" class="btn btn-success fw-bold px-3 w-100"  data-bs-dismiss="modal" data-bs-toggle="modal" data-bs-target="get_OTP_btn">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!--OTP model-->
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
                            </div>
                            <div class="float-end col-12">
                                <a href="" class="float-end">Resend OTP</a>
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

  


    <?php
    include 'includes/footer.php';
    include 'includes/footertag.php';

?>
  

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
</body>

</html>