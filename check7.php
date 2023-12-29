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
                <span>Feedback & Support Tickets</span>
              </li>
            </ol>
          </nav>
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
                            <option value>Select Name</option>
                            <option value="1">.....</option>
                            <option value="2">.....</option>
                            <option value="3">.....</option>
                        </select>
                </div>
            </div>
            <div class="col-12 col-sm-12 col-md-3 col-lg-3">
                <div class="form-outline ">
                    <label class="form-label">Complaint Number</label>
                        <select class="form-select py-2" aria-label="Default select example">
                            <option value>Select Complaint Number</option>
                            <option value="1">.....</option>
                            <option value="2">.....</option>
                            <option value="3">.....</option>
                        </select>
                </div>
            </div>
            <div class="col-12 col-sm-12 col-md-3 col-lg-3">
              <div class="form-outline ">
                <label class="form-label">Date</label>
                    <select class="form-select py-2" aria-label="Default select example">
                        <option value>Select Date</option>
                        <option value="1">.....</option>
                        <option value="2">.....</option>
                        <option value="3">.....</option>
                    </select>
              </div>
            </div>
            <div class="col-12 col-sm-12 col-md-3 col-lg-3">
              <div class=" text-center">
                <button type="button" class="btn-success btn px-4 py-2" id="Search">Search</button>
                <button type="button" class="btn-success  mx-2 btn px-4 py-2" id="Reset">Reset</button>
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
                    <th class="d-none d-md-table-cell text-white">Name </th>
                    <th class="d-none d-md-table-cell text-white">Phone Number</th>
                    <th class="d-none d-md-table-cell text-white">Complaint number</th>
                    <th class="d-none d-md-table-cell text-white">Type</th>
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