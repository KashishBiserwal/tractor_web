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
          <!-- <nav aria-label="breadcrumb">
            <ol class="breadcrumb my-0 ms-2">
              
              <li class="breadcrumb-item">
                <span>HaatBazaar Item List</span>
              </li>
            </ol>
          </nav> -->
          <div class="row">
            <div class="col-12 col-sm-5 col-lg-5 col-md-5">
              <h4>HaatBazaar Item List</h4>
            </div>
            <div class="col-12 col-sm-7 col-lg-7 col-md-7">
              <div class=" float-end">
                <button type="button" id="add_trac" class="btn add_btn bg-success" data-bs-toggle="modal"  data-bs-target="#staticBackdrop1">
                  <i class="fa fa-plus" aria-hidden="true"></i>Category
                </button>
                <!-- modal -->
                <div class="modal fade" id="staticBackdrop1" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                  <div class="modal-dialog  modal-dialog-centered">
                    <div class="modal-content modal_box">
                      <div class="modal-header modal_head">
                        <h5 class="modal-title text-white fw-bold" id="staticBackdropLabel">Add HaatBazaar Category</h5>
                        <button type="button" class="btn-close btn-success" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body bg-light">
                              <div class="row justify-content-center">
                                  <div class="col-12">
                                    <h5 class="text-center">Fill Category Details</h5>
                                  <form>
                                      <div class="row justify-content-center">
                                        
                                          <div class="col-12 mt-3">
                                            <div class="form-group">
                                              <input type="text" class="py-3" placeholder=" " id="brand">
                                              <label for="name" class="text-dark">Add Category</label>
                                            </div>
                                          </div>
                                         
                                      </div>
                                      <button type="button" class="btn btn-success fw-bold px-3">Submit</button>

                                  </form>
                                  </div>
                              </div>
                          </div>
                        <!-- <div class="modal-footer">
                          <button type="button" class="btn btn-secondary px-3" data-bs-dismiss="modal">Close</button>
                        
                      </div> -->
                    </div>
                  </div>
                </div>
                <!-- subcategory -->
                <button type="button" id="add_trac" class="btn add_btn bg-success" data-bs-toggle="modal"  data-bs-target="#staticBackdrop2">
                  <i class="fa fa-plus" aria-hidden="true"></i>Sub-Category
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
                                  <form>
                                      <div class="row justify-content-center">
                                          <div class="col-12 mt-3">
                                            <label class="text-dark">Select Category</label>
                                            <select class="form-select py-2" aria-label="Default select example">
                                              <option selected>Select Category</option>
                                              <option value="1">Vegitable</option>
                                              <option value="2">Fruits</option>
                                              <option value="2">Grains</option>
                                              <option value="2">Pulses</option>
                                            </select>
                                          </div>
                                          <div class="col-12 mt-3">
                                            <div class="form-group">
                                              <input type="text" class="py-2" placeholder=" " id="model">
                                              <label for="name" class="text-dark">Enter Sub-Category</label>
                                            </div>
                                          </div>
                                         
                                      </div>
                                      <button type="button" class="btn btn-success fw-bold px-3">Submit</button>

                                  </form>
                                  </div>
                              </div>
                          </div>
                        <!-- <div class="modal-footer">
                          <button type="button" class="btn btn-secondary px-3" data-bs-dismiss="modal">Close</button>
                        
                      </div> -->
                    </div>
                  </div>
                </div>
                <button type="button" id="add_trac" class="btn add_btn bg-success" data-bs-toggle="modal"  data-bs-target="#staticBackdrop">
                  <i class="fa fa-plus" aria-hidden="true"></i>Haatbazaar Items
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
                                        
                                          <div class="col-12 col-lg-4 col-sm-4 col-md-4 my-2">
                                            <div class="form-group">
                                              <input type="text" class="py-3" placeholder=" " id="category" name="category">
                                              <label for="name" class="text-dark"> Category</label>
                                            </div>
                                          </div>
                                          <div class="col-12 col-lg-4 col-sm-4 col-md-4 my-2">
                                            <div class="form-group">
                                              <input type="text" class="py-3" placeholder=" " id="subcategory" value="" name="subcategory">
                                              <label for="name" class="text-dark">Sub-Category</label>
                                            </div>
                                          </div>
                                          <div class="col-12 col-lg-4 col-sm-4 col-md-4 my-2">
                                            <div class="form-group">
                                              <input type="text" class="py-3" placeholder=" " id="quantity" name="quantity">
                                              <label for="name" class="text-dark">Quantity</label>
                                            </div>
                                          </div>
                                          <div class="col-12 col-12 col-lg-6 col-sm-5 col-md-6 my-1">
                                            <div class="form-group">
                                              <!-- <input type="text" class="py-3" placeholder=" " id="model_name"> -->
                                              <label for="name" class="text-dark"> </label>
                                              <select class="form-select py-3" aria-label="Default select example" id="quantity_per" name="quantity_per">
                                                  <option selected>Select Quantity per</option>
                                                  <option value="1">Kg</option>
                                                  <option value="2">Quintal</option>
                                                  <option value="3">Ton</option>
                                              </select>
                                            </div>
                                          </div>
                                          <div class="col-12 col-lg-6 col-sm-5 col-md-6 my-1">
                                            <div class="form-group">
                                              <input type="text" class="py-3" placeholder=" " id="price" name="price">
                                              <label for="name" class="text-dark">Price</label>
                                            </div>
                                          </div>
                                          
                                          <div class="col-12  my-1">
                                            <div class="form-group">
                                              <input type="text" class="py-5" placeholder=" " id="about" name="about">
                                              <label for="name" class="text-dark">About Your Harvest</label>
                                            </div>
                                          </div>
                                          <div class="col-12 col-lg-6 col-sm-5 col-md-6  my-1">
                                            <div class="form-group">
                                            <input type="file" name="files[]" id="image"  class="py-3" multiple >
                                              <label for="name" class="text-dark fw-bold"></label>
                                            </div>
                                          </div>
                                          <div class="text-center">
                                              <h4 class="pb-2">Personal Information</h4>
                                          </div>
                                          <div class="col-12 col-lg-6 col-sm-5 col-md-6 my-1">
                                            <div class="form-group">
                                              <input type="text" class="py-3" placeholder=" " name="name" id="name">
                                              <label for="name" class="text-dark">Seller Name</label>
                                            </div>
                                          </div>
                                          <div class="col-12 col-lg-6 col-sm-5 col-md-6 my-1">
                                            <div class="form-group">
                                              <input type="text" class="py-3" placeholder=" " name="number" id="number">
                                              <label for="name" class="text-dark">Mobile Number</label>
                                            </div>
                                          </div>
                                          <div class="col-12 col-lg-6 col-sm-5 col-md-6 my-1">
                                            <div class="form-group">
                                              <select class="form-select py-3" aria-label="Default select example" id="state" name="state">
                                                  <option selected>Select State</option>
                                                  <option value="1">Chattisgarh</option>
                                                  <option value="2">Other</option>
                                              </select>
                                            </div>
                                          </div>
                                          <div class="col-12 col-lg-6 col-sm-5 col-md-6 my-1">
                                            <div class="form-group">
                                              <select class="form-select py-3" aria-label="Default select example" name="district" id="district">
                                                  <option selected>Select District</option>
                                                  <option value="1">Raipur</option>
                                                  <option value="2">Bilaspur</option>
                                              </select>
                                            </div>
                                          </div>
                                          <div class="col-12 col-lg-6 col-sm-5 col-md-6 my-1">
                                            <div class="form-group">
                                              <select class="form-select py-3" id="tehsil" name="tehsil" aria-label="Default select example">
                                                  <option selected>Select Tehsil</option>
                                                  <option value="1">Raipur</option>
                                                  <option value="2">Bilaspur</option>
                                              </select>
                                            </div>
                                          </div>
                                          <div class="col-12 col-lg-6 col-sm-5 col-md-6 my-1">
                                            <div class="form-group">
                                              <input type="text" class="py-3" placeholder=" " id="pincode" name="pincode">
                                              <label for="name" class="text-dark">Pincode</label>
                                            </div>
                                          </div>
                                      </div>

                                      <button type="button" id="save" class="btn btn-success fw-bold px-3" onclick="validateForm()">Submit</button>
                                  </form>
                                  </div>
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
                    <option selected>Select Category</option>
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
                    <option selected>Select Sub-Category</option>
                    <option value="1">Potato</option>
                    <option value="2">Rice</option>
                    <option value="3">Papaya</option>
                </select>
              </div>
            </div>
            <div class="col-12 col-sm-12 col-md-3 col-lg-3">
              <div class="form-outline">
                <label class="form-label">Quantity</label>
                <select class="form-select py-2" aria-label="Default select example">
                    <option selected>Select Quantity</option>
                    <option value="1">Kg</option>
                    <option value="2">Quintal</option>
                    <option value="3">Ton</option>
                </select>
              </div>
            </div>
            <div class="col-12 col-sm-12 col-md-3 col-lg-3">
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
                                            <th class="d-none d-md-table-cell text-white">Category </th>
                                            <th class="d-none d-md-table-cell text-white">Sub-Category</th>
                                            <th class="d-none d-md-table-cell text-white">Quantity</th>
                                            <th class="d-none d-md-table-cell text-white">Price</th>
                                            <th class="d-none d-md-table-cell text-white">Post Date</th>
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
    $("#hatbazar_form").validate({
      rules: {
        category: {
          required: true,
        },
        subcategory: {
          required: true,
        },
        quantity: {
          required: true,
        },
        quantity_per: {
          required: true,
        },
        price: {
          required: true,
        },
        about: {
          required: true,
        },
        image: {
          required: true,
        },
        name: {
          required: true,
        },
        number: {
          required: true,
        },
        state: {
          required: true,
        },
        district: {
          required: true,
        },
        tehsil: {
          required: true,
        },
        pincode: {
          required: true,
        },
      },
      messages: {
        category: "Category field is required",
        subcategory: "Sub-Category field is required",
        quantity: "Quantity field is required",
        quantity_per: "Quantity per field is required",
        price: "Price field is required",
        about: "About Your Harvest field is required",
        image: "Image field is required",
        name: "Seller Name field is required",
        number: "Mobile Number field is required",
        state: "State field is required",
        district: "District field is required",
        tehsil: "Tehsil field is required",
        pincode: "Pincode field is required",
      },
      success: function (element) {
        // Hide the error message when the field becomes valid
        label.hide();
      },
    });
  });

  function validateForm() {
    if ($("#hatbazar_form").valid()) {
      // Your form submission logic goes here
      alert("Form is valid. Submitting...");
    }
  }
</script>

