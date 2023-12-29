<?php
include 'includes/headertag.php';
   include 'includes/footertag.php';
   
   ?>
   <head>

   </head>
   <body>
   <section style="padding: 0 15px;">
    <div class="">
      <div class="container">
        <div class="card-body d-flex align-items-center justify-content-between page_title">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb my-0 ms-2">
              
              <li class="breadcrumb-item">
                <span> Dealers Listings</span>
              </li>
            </ol>
          </nav>
          <button type="button" id="add_trac" class="btn add_btn btn-success float-right" data-bs-toggle="modal"  data-bs-target="#staticBackdrop">
              <i class="fa fa-plus" aria-hidden="true"></i> Add New Dealers
          </button>

          <!-- Modal -->
          <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered">
              <div class="modal-content modal_box">
                <div class="modal-header modal_head">
                  <h5 class="modal-title text-white fw-bold" id="staticBackdropLabel"> Add New Dealers </h5>
                  <button type="button" class="btn-close btn-success" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body bg-light">
                        <div class="row justify-content-center">
                            <div class="col-lg-10">
                              <h4 class="text-center">Fill your Details</h4>
                            <form id="dealer_list_form">
                                <div class="row justify-content-center pt-4">
                                 <div class="col-12 col-lg-6 col-md-6 col-sm-6 ">
                                      <div class="form-outline">
                                        <label for="name" class="form-label text-dark">Dealer Name</label>
                                        <input type="text" class="form-control" placeholder="" id="dname" name="dname">
                                      </div>
                                    </div>
                                    <div class="ol-12 col-lg-6 col-md-6 col-sm-6">
                                        <div class="form-outline">
                                            <label class="form-label"> Brand</label>
                                            <select class="form-select py-2" aria-label="Default select example" id="brand" name="brand">
                                                <option value>Select Brand</option>
                                                <option value="1">Mahindra</option>
                                                <option value="2">Swaraj</option>
                                                <option value="3">John Deere</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-6 col-md-6 col-sm-6 ">
                                      <div class="form-outline mt-3">
                                        <label for="name" class="form-label text-dark">Email Id</label>
                                        <input type="text" class="form-control" placeholder="" id="email" name="email">
                                      </div>
                                    </div>
                                    <div class="col-12 col-lg-6 col-md-6 col-sm-6 ">
                                      <div class="form-outline mt-3">
                                        <label for="name" class="form-label text-dark">Contact Number</label>
                                        <input type="text" class="form-control" placeholder="" id="cno" name="cno">
                                      </div>
                                    </div>
                                    <div class="col-12  ">
                                      <div class="form-outline mt-3">
                                        <label for="name" class="form-label text-dark">Address</label>
                                        <input type="email" class="form-control" placeholder="" id="address" name="address">
                                      </div>
                                    </div>
                                    <div class="col-12 col-sm-4 col-md-4 col-lg-4">
                                            <div class="form-outline mt-3">
                                                <label class="form-label">State</label>
                                                <select class="form-select py-2" aria-label="Default select example" id="state_" name="state_">
                                                    <option value>Select State</option>
                                                    <option value="1">Chattisgarh</option>
                                                    <option value="2">Other</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-4 col-md-4 col-lg-4">
                                            <div class="form-outline mt-3">
                                                <label class="form-label">District</label>
                                                <select class="form-select py-2" aria-label="Default select example" id="dist" name="dist">
                                                    <option value>Select District</option>
                                                    <option value="1">Raipur</option>
                                                    <option value="2">Bilaspur</option>
                                                    <option value="3">Surajpur</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-4 col-md-4 col-lg-4">
                                            <div class="form-outline mt-3">
                                                <label class="form-label">Tehsil</label>
                                                <select class="form-select py-2" aria-label="Default select example">
                                                    <option value>Select Tehsil</option>
                                                    <option value="1">Raipur</option>
                                                    <option value="2">Bilaspur</option>
                                                    <option value="3">Surajpur</option>
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
                  <button type="submit" id="subbtn_" class="btn btn-success fw-bold px-3">Submit</button>
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
              <div class="form-outline ">
                <label class="form-label">Name</label>
                    <select class="form-select py-2" aria-label="Default select example">
                        <option selected>Select Name</option>
                        <option value="1">.....</option>
                        <option value="2">.....</option>
                        <option value="3">.....</option>
                    </select>
              </div>
            </div>
            <div class="col-12 col-sm-12 col-md-3 col-lg-3">
              <div class="form-outline">
                <label class="form-label"> Brand Name</label>
                <select class="form-select py-2" aria-label="Default select example">
                    <option selected>Select Brand</option>
                    <option value="1">Mahindra</option>
                    <option value="2">Swaraj</option>
                    <option value="3">John Deere</option>
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
                        <th class="d-none d-md-table-cell text-white">Phone Number </th>
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

   <?php
   include 'includes/footertag.php';
   ?>
   </body>
   <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>


<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>

<script>
  $(document).ready(function () {
  
    $("#dealer_list_form").validate({
    
      rules: {
        dname: {
          required: true,
        },
        brand: {
          required: true,
        },
        email:{
          required:true,
         email:true
        },
        cno:{
            required:true,
            maxlength:10,
            digits: true,
            customPhoneNumber: true
        },
        address:{
          required:true,
          digits: true,
        },
        state_:{
          required: true,
        },
        dist: {
          required: true,
        }
      },
  
      messages: {
        dname: {
          required: "This field is required",
        },
        brand: {
          required: "This field is required",
        },
      
        email:{
          required:"This field is required",
          email:"Please Enter vaild Email",
        },
         cno:{
          required:"This field is required",
          maxlength:"Enter only 10 digits",
          digits: "Please enter only  digits"
        },
        address:{
          required:"This field is required",
          digits: "Please enter only digits"
        },
        state_:{
          required: "This field is required",
        },
        dist: {
          required: "This field is required",
        }
      },
      
      submitHandler: function (form) {
        alert("Form submitted successfully!");
      },
    });

   
    $("#subbtn_").on("click", function () {
   
      $("#dealer_list_form").valid();
  
    });
   
  });
</script>