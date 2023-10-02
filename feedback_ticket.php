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
                <span>Feedback & Support Tickets</span>
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
                <label class="form-label"> Name </label>
                <input type="text" id="name" name="name" class="form-control" />
              </div>
            </div>
            <div class="col-12 col-sm-12 col-md-3 col-lg-3">
              <div class="form-outline">
                <label class="form-label">Complaint Number</label>
                <input type="text" id="complaint" name="complaint" class="form-control" />
              </div>
            </div>
            <div class="col-12 col-sm-12 col-md-3 col-lg-3">
              <div class="form-outline ">
                <label class="form-label">Date</label>
                <input type="text" id="date" name="date" class="form-control" />
              </div>
            </div>
           
            
            <div class="col-12 col-sm-12 col-md-3 col-lg-3">
              <div class=" text-center pt-4 mt-1">
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
                    <th class="d-none d-md-table-cell text-white">Complaint number</th>
                    <th class="d-none d-md-table-cell text-white">Type</th>
                    <th class="d-none d-md-table-cell text-white">Phone No.</th>
                    <th class="d-none d-md-table-cell text-white">Discription</th>
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