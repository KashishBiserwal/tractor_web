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
                <span>Old Farm Implements</span>
              </li>
            </ol>
          </nav>
          <!-- <button type="button" id="add_trac" class="btn add_btn btn-success float-right" data-bs-toggle="modal"  data-bs-target="#staticBackdrop">
              <i class="fa fa-plus" aria-hidden="true"></i> Add Rent Tractor
          </button> -->

          <!-- Modal -->
          <!-- <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered">
              <div class="modal-content modal_box">
                <div class="modal-header modal_head">
                  <h5 class="modal-title text-white fw-bold" id="staticBackdropLabel"> Add New Rent Tractor </h5>
                  <button type="button" class="btn-close btn-success" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body bg-light">
                        <div class="row justify-content-center">
                            <div class="col-lg-10">
                              <h4 class="text-center">Fill your Details</h4>
                            <form>
                                <div class="row justify-content-center pt-4">
                                   
                                    <div class="col-12 col-lg-6 col-md-6 col-sm-6  my-2">
                                      <div class="form-group">
                                        <input type="text" class="py-3" placeholder=" " id="brand">
                                        <label for="name" class="text-dark ">Brand Name</label>
                                      </div>
                                    </div>
                                    <div class="col-12 col-lg-6 col-md-6 col-sm-6  my-1">
                                      <div class="form-group">
                                        <input type="text" class="py-3" placeholder=" " id="model_name">
                                        <label for="name" class="text-dark">Model</label>
                                      </div>
                                    </div>
                                    <div class="col-12 col-lg-6 col-md-6 col-sm-6  my-1">
                                      <div class="form-group">
                                        <input type="text" class="py-3" placeholder=" " id="model_name">
                                        <label for="name" class="text-dark">Year</label>
                                      </div>
                                    </div>
                                    <div class="col-12 col-lg-6 col-md-6 col-sm-6  my-1">
                                      <div class="form-group">
                                        <input type="text" class="py-3" placeholder=" " id="model_name">
                                        <label for="name" class="text-dark">Implement Type</label>
                                      </div>
                                    </div>
                                    <div class="col-12 col-lg-6 col-md-6 col-sm-6 my-1">
                                      <div class="form-group">
                                        <input type="text" class="py-3" placeholder=" " id="model_name">
                                        <label for="name" class="text-dark">Rate</label>
                                      </div>
                                    </div>
                                    
                                    <div class="col-12 col-lg-6 col-md-6 col-sm-6 my-1">
                                        <label for="name" class="text-dark">Rate Per:</label>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                            <label class="form-check-label text-dark ps-2" for="flexRadioDefault1">
                                               Acer
                                            </label>
                                            </div>
                                            <div class="form-check">
                                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                                            <label class="form-check-label text-dark ps-2" for="flexRadioDefault2">
                                               Per Hour
                                            </label>
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
          </div> -->
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
                <!-- <label class="form-label"> Seller Name</label> -->
                <!-- <input type="text" id="search_email" name="search_email" class="form-control" /> -->
                <select class="form-select py-2" aria-label="Default select example">
                    <option selected>Select Name</option>
                    <option value="1">name1</option>
                    <option value="2">name2</option>
                    <option value="3">namme3</option>
                </select>
              </div>
            </div>
            <div class="col-12 col-sm-12 col-md-3 col-lg-3">
              <div class="form-outline">
                <!-- <label class="form-label"> Brand Name</label> -->
                <!-- <input type="text" id="search_email" name="search_email" class="form-control" /> -->
                <select class="form-select py-2" aria-label="Default select example">
                    <option selected>Select Brand</option>
                    <option value="1">Mahindra</option>
                    <option value="2">Swaraj</option>
                    <option value="3">John Deere</option>
                </select>
              </div>
            </div>
            <!-- <div class="col-12 col-sm-12 col-md-3 col-lg-3">
              <div class="form-outline ">
                <label class="form-label">Model</label>
                    <select class="form-select py-2" aria-label="Default select example">
                        <option selected>Select Model</option>
                        <option value="1">3032 NX</option>
                        <option value="2">3030 NX</option>
                        <option value="3">3230 NX</option>
                    </select>
              </div>
            </div> -->
            <div class="col-12 col-sm-12 col-md-3 col-lg-3">
              <div class="form-outline">
                    <select class="form-select py-2" aria-label="Default select example">
                       
                        <option value="1" selected> Select District</option>
                        <option value="2">Bilaspur</option>
                        <option value="3">Ambikapur</option>
                    </select>
              </div>
            </div>
            <div class="col-12 col-sm-12 col-md-3 col-lg-3">
              <div class=" ">
                <!-- <button type="button" class="btn-success btn px-3 py-2" id="Search">Search</button> -->
                <button type="button" class="btn-success btn  mx-2 px-3 " id="Reset">Reset</button>
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
                                            
                                            <th class="d-none d-md-table-cell text-white">  Brand name</th>
                                            <th class="d-none d-md-table-cell text-white">Model name</th>
                                            <th class="d-none d-md-table-cell text-white">Year</th>
                                            <th class="d-none d-md-table-cell text-white">Seller name</th>
                                            <th class="d-none d-md-table-cell text-white"> Mobile Number</th>
                                            <th class="d-none d-md-table-cell text-white">State </th>
                                            <th class="d-none d-md-table-cell text-white">District</th>
                                            <th class="d-none d-md-table-cell text-white">Tehsil</th>
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