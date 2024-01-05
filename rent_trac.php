<?php
   include 'includes/headertagadmin.php';
  
   
   ?> 
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
                                                    <div class="card upload-img-wrap" onclick="triggerFileInput('impImage_0')">
                                                        <i class="fas fa-image m-auto" style="cursor: pointer;" onclick="triggerFileInput('impImage_0')"></i>
                                                        <img id="impImagePreview_0" src="" alt="Image Preview" style="max-width: 100%; max-height: 100%; display: none;" class="images">
                                                    </div>
                                                    <input type="file" name="imp_0" id="impImage_0" class="image-file-input" accept="image/*" style="display: none;" onclick="displayImagePreview(this, 'impImagePreview_0')" required="" onchange="displayImagePreview(this, 'impImagePreview_0')">
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
                <th class="d-none d-md-table-cell text-white">S.No.</th>
                <th class="d-none d-md-table-cell text-white">Date</th>
                <th class="d-none d-md-table-cell text-white">Brand</th>
                <th class="d-none d-md-table-cell text-white">Model</th>
                <th class="d-none d-md-table-cell text-white">Name</th>
                <th class="d-none d-md-table-cell text-white">Phone Number</th>
                <th class="d-none d-md-table-cell text-white">State</th>
                <th class="d-none d-md-table-cell text-white">District</th>
                <th class="d-none d-md-table-cell text-white">Action</th>
              </tr>
            </thead>
            <tbody>
            </tbody>
          </table>
         </div>
        </div>
    </div>
</section>
      
    
</div>
</div>
</body>

<?php
   include 'includes/footertag.php';
   ?> 
   </body>


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
               // updateSerialNumbers();
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

<!-- <script>
  function triggerFileInput(inputId) {
    console.log('triggerFileInput called with inputId:', inputId);
    $('#' + inputId).trigger('click');
      }
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
        };

        if (file) {
            reader.readAsDataURL(file);
        } else {
            preview.attr('src', '').hide();
        }
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
            $(this).find('.upload-img-wrap i').attr('onclick', 'triggerFileInput(\'' + newImageId + '\')');
          
        });
    }

    $(document).ready(function () {

      jQuery.validator.addMethod("customPhoneNumber", function(value, element) {
            return /^[6-9]\d{9}$/.test(value); 
          }, "Phone number must start with 6 or above");
      // updateSerialNumbers();
        $('#addRentTractorRowBtn').click(function () {
            var newRow = $('#rentTractorTable tbody tr:last').clone();
            var newRowNumber = $('#rentTractorTable tbody tr').length + 1;

            newRow.find('td:first').text(newRowNumber);

            var newImageId = 'impImage_' + newRowNumber;
            var newPreviewId = 'impImagePreview_' + newRowNumber;

            // Update IDs and content for the new row
            newRow.find('.image-file-input').attr('id', newImageId);
            newRow.find('img').attr('id', newPreviewId).hide();
            newRow.find('.upload-img-wrap').html('<i class="fas fa-image m-auto" style="cursor: pointer;" onclick="triggerFileInput(\'' + newImageId + '\')"></i>' +
                '<input type="file" name="imp_image[]" id="' + newImageId + '" class="image-file-input" accept="image/*" style="display: none;" onchange="displayImagePreview(this, \'' + newPreviewId + '\')">' +
                '<img id="' + newPreviewId + '" src="" alt="Image Preview" style="max-width: 100%; max-height: 100%; display: none;">');

            newRow.find('td:last').html('<button type="button" class="btn btn-danger" title="Remove Row" onclick="removeRow(this)"><i class="fas fa-minus"></i></button>');

            $('#rentTractorTable tbody').append(newRow);
            updateSerialNumbers();
        });

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

    $("#addRentTractorRowBtn").click(function () {
        // Validate all fields in the first row (index 0)
        var isValidFirstRow = validateRow($("#rentTractorTable tbody tr").length - 2);

        if (isValidFirstRow) {
            var newRow = $("#rentTractorTable tbody tr:last").clone();
            newRow.find("input, select").each(function () {
                var originalId = $(this).attr("id");
                var originalName = $(this).attr("name");

                var index = parseInt(originalId.split("_")[1]);
                var newId = originalId.split("_")[0] + "_" + index;
                var newName = originalName.split("_")[0] + "_" + index;
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

            $("#rentTractorTable tbody").append(newRow);
        }
    });

    $(document).on("click", ".btn-danger", function () {
        $(this).closest("tr").remove();
    });

    // Form Validation
    $("#rentTractorTable").on("submit", function (e) {
        var isValidFirstRow = validateRow(0);

        if (!isValidFirstRow) {
            e.preventDefault();
        }
    });

    // Add event handlers for immediate validation on input or change
    $("#rentTractorTable").on("input change", ".image-file-input, .implement-type-input, .implement-rate-input, .implement-unit-input", function () {
        validateRow($(this).closest("tr").index());
    });

    function validateRow(rowIndex) {
        var isValidRow = true;
        var row = $("#rentTractorTable tbody tr:eq(" + rowIndex + ")");
        row.find('.is-invalid').removeClass('is-invalid');
        row.find('.invalid-feedback').remove();

        var imageInput = row.find(".image-file-input");
        if (imageInput.prop("required") && imageInput.val() === "") {
            isValidRow = false;
            imageInput.addClass("is-invalid");
            imageInput.after("<div class='invalid-feedback'>This field is required.</div>");
            imageInput.next(".images").next(".invalid-feedback").remove();
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
