<?php
   include 'includes/headertagadmin.php';
  
   
   ?> 
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
                <span>HaatBazaar Item List</span>
              </li>
            </ol>
          </nav>
          <button type="button" id="add_trac" class="btn add_btn btn-success float-right" data-bs-toggle="modal"  data-bs-target="#staticBackdrop">
            <i class="fa fa-plus" aria-hidden="true"></i>Add Haatbazaar Items
          </button>

          <!-- Modal -->
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
                            <form>
                                <div class="row justify-content-center pt-4">
                                   
                                    <div class="col-12 col-lg-4 col-sm-4 col-md-4 my-2">
                                      <div class="form-group">
                                        <input type="text" class="py-3" placeholder=" " id="brand">
                                        <label for="name" class="text-dark"> Category</label>
                                      </div>
                                    </div>
                                    <div class="col-12 col-lg-4 col-sm-4 col-md-4 my-2">
                                      <div class="form-group">
                                        <input type="text" class="py-3" placeholder=" " id="model">
                                        <label for="name" class="text-dark">Sub-Category</label>
                                      </div>
                                    </div>
                                    <div class="col-12 col-lg-4 col-sm-4 col-md-4 my-2">
                                      <div class="form-group">
                                        <input type="text" class="py-3" placeholder=" " id="model">
                                        <label for="name" class="text-dark">Quantity</label>
                                      </div>
                                    </div>
                                    <div class="col-12 col-12 col-lg-6 col-sm-5 col-md-6 my-1">
                                      <div class="form-group">
                                        <!-- <input type="text" class="py-3" placeholder=" " id="model_name"> -->
                                        <label for="name" class="text-dark"> </label>
                                        <select class="form-select py-3" aria-label="Default select example">
                                            <option selected>Select Quantity per</option>
                                            <option value="1">Kg</option>
                                            <option value="2">Quintal</option>
                                            <option value="3">Ton</option>
                                        </select>
                                      </div>
                                    </div>
                                    <div class="col-12 col-lg-6 col-sm-5 col-md-6 my-1">
                                      <div class="form-group">
                                        <input type="text" class="py-3" placeholder=" " id="model_name">
                                        <label for="name" class="text-dark">Price</label>
                                      </div>
                                    </div>
                                    
                                    <div class="col-12  my-1">
                                      <div class="form-group">
                                        <input type="text" class="py-5" placeholder=" " id="name">
                                        <label for="name" class="text-dark">About Your Harvest</label>
                                      </div>
                                    </div>
                                    <div class="col-12 col-lg-6 col-sm-5 col-md-6  my-1">
                                      <div class="form-group">
                                      <input type="file" name="files[]" class="py-3" multiple >
                                        <label for="name" class="text-dark fw-bold"></label>
                                      </div>
                                    </div>
                                    <div class="text-center">
                                        <h4 class="pb-2">Personal Information</h4>
                                    </div>
                                    <div class="col-12 col-lg-6 col-sm-5 col-md-6 my-1">
                                      <div class="form-group">
                                        <input type="text" class="py-3" placeholder=" " id="model_name">
                                        <label for="name" class="text-dark">Seller Name</label>
                                      </div>
                                    </div>
                                    <div class="col-12 col-lg-6 col-sm-5 col-md-6 my-1">
                                      <div class="form-group">
                                        <input type="text" class="py-3" placeholder=" " id="model_name">
                                        <label for="name" class="text-dark">Mobile Number</label>
                                      </div>
                                    </div>
                                    <div class="col-12 col-lg-6 col-sm-5 col-md-6 my-1">
                                      <div class="form-group">
                                        <select class="form-select py-3" aria-label="Default select example">
                                            <option selected>Select State</option>
                                            <option value="1">Chattisgarh</option>
                                            <option value="2">Other</option>
                                        </select>
                                      </div>
                                    </div>
                                    <div class="col-12 col-lg-6 col-sm-5 col-md-6 my-1">
                                      <div class="form-group">
                                        <select class="form-select py-3" aria-label="Default select example">
                                            <option selected>Select District</option>
                                            <option value="1">Raipur</option>
                                            <option value="2">Bilaspur</option>
                                        </select>
                                      </div>
                                    </div>
                                    <div class="col-12 col-lg-6 col-sm-5 col-md-6 my-1">
                                      <div class="form-group">
                                        <select class="form-select py-3" aria-label="Default select example">
                                            <option selected>Select Tehsil</option>
                                            <option value="1">Raipur</option>
                                            <option value="2">Bilaspur</option>
                                        </select>
                                      </div>
                                    </div>
                                    <div class="col-12 col-lg-6 col-sm-5 col-md-6 my-1">
                                      <div class="form-group">
                                        <input type="text" class="py-3" placeholder=" " id="model_name">
                                        <label for="name" class="text-dark">Pincode</label>
                                      </div>
                                    </div>
                                </div>

                            </form>
                            </div>
                        </div>
                    </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary px-3" data-bs-dismiss="modal">Close</button>
                  <button type="button" class="btn btn-success fw-bold px-3">Submit</button>
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
              <div class="mt-4 pt-1 text-center">
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
   include 'includes/footertag.php';
   ?> 