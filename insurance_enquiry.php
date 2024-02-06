<?php
    include 'includes/headertag.php';
    include 'includes/headertagadmin.php';
   include 'includes/footertag.php';
   
   ?> 
  <script> var APIBaseURL = "<?php echo $APIBaseURL; ?>";</script>
  <script> var baseUrl = "<?php echo $baseUrl; ?>";</script>
  <script src="<?php $baseUrl; ?>model/insurance_enquiry.js"></script>

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
                <span>Insurance Enquiry Listing</span>
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
              <div class="form-outline">
                <label class="form-label fw-bold"> Name</label>
                <input type="text" class="form-control" id="nursery_name" >
             
              </div>
            </div>
            <div class="col-12 col-sm-12 col-md-3 col-lg-3">
              <div class="form-outline">
                <label class="form-label">State</label>
                <select class="form-select py-2" aria-label="Default select example"  id="state_1">
                    <option value>Select State</option>
                    <option value="Chattisgarh">Chattisgarh</option>
                    <option value="Chhattisgarh">Chhattisgarh</option>
                    <option value="Other">Other</option>
                </select>
              </div>
            </div>
            <div class="col-12 col-sm-12 col-md-3 col-lg-3">
              <div class="form-outline">
                <label class="form-label">District</label>
                <select class="form-select py-2" aria-label="Default select example" id="dist_1">
                    <option value>Select District</option>
                    <option value="Raipur">Raipur</option>
                    <option value="Bilaspur">Bilaspur</option>
                    <option value="	Dhamtari">	Dhamtari</option>
                    <option value="Surajpur">Surajpur</option>
                </select>
              </div>
            </div>
            <div class="col-12 col-sm-12 col-md-3 col-lg-3">
              <div class="">
                <button type="button" class="btn-success btn px-3 py-2 " id="Search" onclick="search_data()">Search</button>
                <button type="button" class="btn-success btn mx-2 px-3 py-2  " id="Reset" onclick="resetform()">Reset</button>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Table Card -->
      <div class=" mb-5">
                            <div class="table-responsive shadow bg-white">
                                <table id="example" class="table dataTable no-footer py-1" width="100%">
                                    <thead>
                                        <tr>
                                            <th class="d-none d-md-table-cell text-white">S.No.</th>
                                            <th class="d-none d-md-table-cell text-white">Date </th>
                                            <th class="d-none d-md-table-cell text-white">Insurance Type </th>
                                            <th class="d-none d-md-table-cell text-white">Name </th>
                                            <th class="d-none d-md-table-cell text-white">Phone Number</th>
                                            <th class="d-none d-md-table-cell text-white">State</th>
                                            <th class="d-none d-md-table-cell text-white">District</th>
                                            <th class="d-none d-md-table-cell text-white"> Action</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody id="data-table">
                                    </tbody>
                                </table>
                            </div>
      </div>
    </div>
   </section>
</body>
</html>