
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
                <span> New Farm Equipment Enquiries</span>
              </li>
            </ol>
          </nav>
          <!-- <button id="adduser" type="button" class="add_btn btn-success float-right">
            <i class="fa fa-plus" aria-hidden="true"></i>Add New</button> -->
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
                <label class="form-label">Implement Type</label>
                <select class="form-select py-2" aria-label="Default select example">
                    <option selected>Implement Type</option>
                    <option value="1">Implement1</option>
                    <option value="2">Implement2</option>
                    <option value="3">Implement3</option>
                </select>
              </div>
            </div>
            <div class="col-12 col-sm-12 col-md-3 col-lg-3">
              <div class="form-outline">
                <label class="form-label">Category</label>
                <select class="form-select py-2" aria-label="Default select example">
                    <option selected>Select Category</option>
                    <option value="1">Category-1</option>
                    <option value="2">Category-2</option>
                    <option value="3">Category-3</option>
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
                    <th class="d-none d-md-table-cell text-dark">Category</th>
                    <th class="d-none d-md-table-cell text-dark">Implement Type</th>
                    <th class="d-none d-md-table-cell text-dark">Name</th>
                    <th class="d-none d-md-table-cell text-dark">Phone Number</th>
                    <th class="d-none d-md-table-cell text-dark">State</th>
                    <th class="d-none d-md-table-cell text-dark">District</th>
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
   </body>