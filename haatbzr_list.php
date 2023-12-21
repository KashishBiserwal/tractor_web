<?php
 include 'includes/headertag.php';
   include 'includes/headertagadmin.php';
   include 'includes/footertag.php';
   
   ?> 
   <style>
     label.error {
    color: red;
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
        <div class="align-items-center justify-content-between page_title my-4">
          <div class="row">
            <div class="col-12 col-sm-5 col-lg-5 col-md-5">
             <h5 class="fw-bold"> <span>Haatbazaar Item List</span></h5>
            </div>
            
            <div class="col-12 col-sm-7 col-lg-7 col-md-7">
              <div class=" float-end">
                <button type="button" id="add_trac" class="btn add_btn bg-success" data-bs-toggle="modal"  data-bs-target="#staticBackdrop1">
                  <i class="fa fa-plus" aria-hidden="true"></i> Category
                </button>
                <!-- modal -->
                <div class="modal fade" id="staticBackdrop1" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                  <div class="modal-dialog  modal-dialog-centered">
                    <div class="modal-content modal_box">
                      <div class="modal-header modal_head">
                        <h5 class="modal-title text-white fw-bold" id="staticBackdropLabel"> Add HaatBazaar Category</h5>
                        <button type="button" class="btn-close btn-success" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                        <div class="modal-body bg-light">
                          <div class="row justify-content-center">
                            <div class="col-12">
                              <h5 class="text-center">Fill Category Details</h5>
                              <form id=category_details>
                                <div class="row justify-content-center">
                                  <div class="col-12">
                                    <div class="form-outline mt-3">
                                      <label for="name" class="form-label text-dark"> Add Category</label>
                                      <input type="text" class="form-control line-height-2" placeholder="" id="category" name="category">
                                    </div>
                                  </div>
                                </div>
                              </form>
                            </div>
                          </div>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary px-3" data-bs-dismiss="modal">Close</button>
                          <button type="submit" id="btn_submit" class="btn btn-success fw-bold px-3">Submit</button>
                        </div>
                    </div>
                  </div>
                </div>
                <!-- subcategory -->
                <button type="button" id="add_trac" class="btn add_btn bg-success" data-bs-toggle="modal"  data-bs-target="#staticBackdrop2">
                  <i class="fa fa-plus" aria-hidden="true"></i> Sub-Category
                </button>
                <div class="modal fade" id="staticBackdrop2" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                  <div class="modal-dialog  modal-dialog-centered">
                    <div class="modal-content modal_box">
                      <div class="modal-header modal_head">
                        <h5 class="modal-title text-white fw-bold" id="staticBackdropLabel">Add HaatBazaar Sub-Category</h5>
                        <button type="button" class="btn-close btn-success" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                        <div class="modal-body bg-light">
                            <div class="row justify-content-center">
                                <div class="col-12">
                                    <h5 class="text-center">Fill Sub-Category Details</h5>
                                    <form id="sub_category_form">
                                        <div class="row justify-content-center">
                                            <div class="col-12 mt-3">
                                                <div class="form-outline">
                                                    <label class="form-label text-dark">Select Category</label>
                                                    <select class="form-select py-2" aria-label="Default select example" id="category_" name="category_">
                                                        <option value>Select Category</option>
                                                        <option value="1">Vegitable</option>
                                                        <option value="2">Fruits</option>
                                                        <option value="3">Grains</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-12 ">
                                                <div class="form-outline mt-4">
                                                    <label for="name" class="form-label text-dark">Enter Sub-Category</label>
                                                    <input type="text" class="form-control" placeholder="" id="sub_category" name="sub_category">
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary px-3" data-bs-dismiss="modal">Close</button>
                          <button type="submit" id="sub_bnt" class="btn btn-success fw-bold px-3">Submit</button>
                      </div>
                    </div>
                  </div>
                </div>
                <button type="button" id="add_trac" class="btn add_btn bg-success" data-bs-toggle="modal"  data-bs-target="#staticBackdrop">
                  <i class="fa fa-plus" aria-hidden="true"></i> Haatbazaar Items
                </button>
                <!-- modal -->
                <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                  <div class="modal-dialog modal-lg modal-dialog-centered">
                    <div class="modal-content modal_box">
                      <div class="modal-header modal_head">
                        <h5 class="modal-title text-white fw-bold" id="staticBackdropLabel">Add HaatBazaar Items</h5>
                        <button type="button" class="btn-close btn-success" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                    <div class="modal-body bg-light">
                        <div class="row justify-content-center">
                            <div class="col-lg-10">
                                    <h4 class="text-center">Fill your Details</h4>
                                <form id="hatbazar_form">
                                    <div class="row justify-content-center pt-4">
                                        <div class="col-12 col-sm-6 col-md-6 col-lg-6">
                                            <div class="form-outline">
                                                <label class="form-label">Category</label>
                                                <select class="form-select py-2" aria-label="Default select example" id="_category" name="_category">
                                                    <option value>Select Category</option>
                                                    <option value="1">....</option>
                                                    <option value="2">....</option>
                                                    <option value="2">....</option>
                                                    <option value="2">....</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-6 col-md-6 col-lg-6">
                                            <div class="form-outline">
                                                <label class="form-label">Sub-Category</label>
                                                <select class="form-select py-2" aria-label="Default select example"id="sub_cate" name="sub_cate">
                                                    <option value>Select Sub-Category</option>
                                                    <option value="1">Vegitable</option>
                                                    <option value="2">Fruits</option>
                                                    <option value="2">Grains</option>
                                                    <option value="2">Pulses</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-12 col-md-6 col-lg-6 mt-4">
                                            <div class="input-group">
                                                <input type="number" id="quantityInput" class="form-control text-black" placeholder="Quantity" aria-label="Text input with dropdown button" name="quantity">
                                                <select type="button" id="unitSelect" name="unit" class="btn border border-secondary-2 h-25 dropdown-toggle" data-bs-toggle="dropdown">
                                                    <ul class="dropdown-menu">
                                                        <option class="dropdown-item" value="">Select Unit</option>
                                                        <option class="dropdown-item" value="As per">As per</option>
                                                        <option class="dropdown-item" value="gram">gram</option>
                                                        <option class="dropdown-item" value="Kg">Kg</option>
                                                        <option class="dropdown-item" value="Quintal">Quintal</option>
                                                        <option class="dropdown-item" value="Ton">Ton</option>
                                                        <option class="dropdown-item" value="Pack">Pack</option>
                                                        <option class="dropdown-item" value="Unit">Unit</option>
                                                    </ul>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-12 col-lg-6 col-md-6 col-sm-6 ">
                                            <div class="form-outline mt-4">
                                                <label for="name" class="form-label text-dark">Price</label>
                                                <input type="text" class="form-control" placeholder="" id="price" name="price">
                                            </div>
                                        </div>
                                        <div class="col-12 col-lg-6 col-md-6 col-sm-6 ">
                                            <div class="form-outline mt-4">
                                                <label for="name" class="form-label text-dark">Total Price Calculation</label>
                                                <input type="text" class="form-control" placeholder="" id="tprice" name="tprice">
                                            </div>
                                        </div>
                                        <div class="col-12 col-lg-6 col-md-6 col-sm-6">
                                          <div class="upload__box mt-2">
                                            <div class="upload__btn-box text-center">
                                              <label >
                                                <p class="upload__btn ">Upload images</p>
                                                <input type="file" multiple="" data-max_length="20" class="upload__inputfile" id="_image" name="_image">
                                              </label>
                                            </div>
                                            <div id="selectedImagesContainer" class="upload__img-wrap"></div>
                                          </div>
                                        </div>
                                        
                                        <div class="col-12 ">
                                            <div class="form-outline ">
                                                <label class="form-label text-dark">About Your Harvest</label>
                                                <textarea rows="4" cols="70" class="w-100 pt-2" minlength="1" maxlength="255" id="textarea_" name="textarea_"></textarea>
                                            </div>
                                        </div>
                                        
                                      <div class="text-center">
                                        <h4 class="pb-2 mt-2">Personal Information</h4>
                                      </div>
                                      <div class="col-12 col-lg-6 col-sm-5 col-md-6 my-1">
                                        <div class="form-outline mt-2">
                                            <label for="name" class="form-label text-dark">First Name</label>
                                            <input type="text" class="form-control" placeholder="" id="fname" name="fname">
                                        </div>
                                      </div>
                                     <div class="col-12 col-lg-6 col-sm-5 col-md-6 my-1">
                                      <div class="form-outline mt-2">
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
                    <div class="modal-footer mt-2">
                        <button type="button" class="btn btn-secondary px-3" data-bs-dismiss="modal">Close</button>
                        <button type="submit" id="save_btn" class="btn btn-success fw-bold px-3">Submit</button>
                        
                    </div>
                </div>
            </div>
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
                <label class="form-label">Category</label>
                <select class="form-select py-2" aria-label="Default select example">
                    <option value>Select Category</option>
                    <option value="1">Vegitable</option>
                    <option value="2">Fruits</option>
                    <option value="2">Grains</option>
                    <option value="2">Pulses</option>
                </select>
              </div>
            </div>
            <div class="col-12 col-sm-12 col-md-3 col-lg-3">
              <div class="form-outline">
                <label class="form-label">Sub-Category</label>
                <select class="form-select py-2" aria-label="Default select example">
                    <option value>Select Sub-Category</option>
                    <option value="1">Potato</option>
                    <option value="2">Rice</option>
                    <option value="3">Papaya</option>
                </select>
              </div>
            </div>
            <div class="col-12 col-sm-12 col-md-3 col-lg-3">
              <div class="form-outline">
                <label class="form-label">State</label>
                <select class="form-select py-2" aria-label="Default select example">
                    <option value>Select State</option>
                    <option value="1"></option>
                    <option value="2">Chattisgarh</option>
                    <option value="3">Other</option>
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
                                            <th class="d-none d-md-table-cell text-white">Category</th>
                                            <th class="d-none d-md-table-cell text-white">Sub-Category</th>
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
   
   ?> 

<script>
  $(document).ready(function () {
  //category form
    $("#category_details").validate({
    
      rules: {
        category: {
          required: true,
        }
      },
  messages:{
      category: {
         required: "This field is required",
        }
      },
      
      submitHandler: function (form) {
        alert("Form submitted successfully!");
      },
    });

   
    $("#btn_submit").on("click", function () {
   
      $("#category_details").valid();
      if ($("#category_details").valid()) {
        
        alert("Form is valid. Ready to submit!");
      }
    });

    // sub-category form
    $("#sub_category_form").validate({
    
    rules: {
      category_: {
        required: true,
      },
      sub_category:{
        required: true,
      }
    },

    messages:{
      category_: {
        required: "This field is required",
      },
      sub_category:{
        required: "This field is required",
      }
    },
    
    submitHandler: function (form) {
      alert("Form submitted successfully!");
    },
  });

 
  $("#sub_bnt").on("click", function () {
 
    $("#sub_category_form").valid();
    if ($("#sub_category_form").valid()) {
      
      alert("Form is valid. Ready to submit!");
    }
  });
   
  // add hartbazar item form
          jQuery.validator.addMethod("customPhoneNumber", function(value, element) {
            return /^[6-9]\d{9}$/.test(value); 
          }, "Phone number must start with 6 or above");
  
          $.validator.addMethod("validPrice", function(value, element) {
      
      const cleanedValue = value.replace(/,/g, '');

      return /^\d+$/.test(cleanedValue);
    }, "Please enter a valid price (digits and commas only)");
    $("#hatbazar_form").validate({
    
    rules: {
      _category: {
        required: true,
      },
      sub_cate:{
        required: true,
      },
      firstNumber:{
        required: true,
      },
      price:{
        required: true,
          validPrice: true,
      },
      textarea_:{
        required: true,
      },
      _image:{
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
          minlength: 10,
          maxlength:10,
          digits: true,
          customPhoneNumber: true
      },
      state_:{
        required: true,
      },
      dist:{
        required: true,
      },
      unit: {
        required: true
      }
    },

    messages:{
      _category: {
        required: "This field is required",
      },
      sub_cate:{
        required: "This field is required",
      },
      firstNumber: {
        required: "This field is required",
      },
      price: {
        required: "This field is required",
          validPrice: "Please enter a valid price",
      },
      textarea_: {
        required: "This field is required",
      },
      _image: {
        required: "This field is required",
      },
      fname: {
        required: "This field is required",
      },
      lname: {
        required: "This field is required",
      },
      number: {
        required:"This field is required",
        minlength: "Phone Number must be of 10 Digit long",
        maxlength:"Enter only 10 digits",
        digits: "Please enter only digits"
      },
      state_: {
        required: "This field is required",
      },
      dist: {
        required: "This field is required",
      },
      unit: {
        required: "Please select a quantity and unit."
        }
    },
    
    submitHandler: function (form) {
      alert("Form submitted successfully!");
    },
  });

 
  $("#save_btn").on("click", function () {
 
    $("#hatbazar_form").valid();
   
  });
   
  function calculateTotalPrice() {
        var quantity = parseFloat(document.getElementById('quantityInput').value) || 0;
        var unit = document.getElementById('unitSelect').value;
        var price = parseFloat(document.getElementById('price').value) || 0;

        var unitConversion = {
            'As per': 1,
            'gram': 1,
            'Kg': 1000,
            'Quintal': 100000,
            'Ton': 1000000,
            'Pack': 1,
            'Unit': 1
        };
        var total = quantity * price * unitConversion[unit];

        document.getElementById('tprice').value = total.toFixed(2);
    }

    document.getElementById('quantityInput').addEventListener('input', calculateTotalPrice);
    document.getElementById('unitSelect').addEventListener('change', calculateTotalPrice);
    document.getElementById('price').addEventListener('input', calculateTotalPrice);
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