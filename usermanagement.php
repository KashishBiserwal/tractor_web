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
            <ol class="breadcrumb ms-2">
              
              <li class="breadcrumb-item">
                <span>User Overview</span>
              </li>
            </ol>
          </nav>
          <!-- Button trigger modal -->
          <button type="button" id="add_trac" class="btn add_btn btn-success float-right" data-bs-toggle="modal"  data-bs-target="#staticBackdrop">
              <i class="fa fa-plus" aria-hidden="true"></i> Add New User
          </button>

          <!-- Modal -->
          <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered">
              <div class="modal-content modal_box">
                <div class="modal-header modal_head">
                  <h5 class="modal-title text-white fw-bold" id="staticBackdropLabel"> Add New User</h5>
                  <button type="button" class="btn-close btn-success" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body bg-light">
                        <div class="row justify-content-center">
                            <div class="col-lg-10">
                              <h4 class="text-center">Fill your Details</h4>
                            <form>
                                <div class="row justify-content-center">
                                   
                                    <div class="col-12 col-lg-6 col-md-6 col-sm-6  ">
                                      <div class="form-group">
                                        <input type="text" class="" placeholder=" " id="brand">
                                        <label for="name" class="text-dark fw-bold"> Name</label>
                                      </div>
                                    </div>
                                    <div class="col-12 col-lg-6 col-md-6 col-sm-6">
                                      <div class="form-group">
                                        <input type="text" class="" placeholder=" " id="model_name">
                                        <label for="name" class="text-dark fw-bold">Contact Number</label>
                                      </div>
                                    </div>
                                    <div class="col-12 col-lg-6 col-md-6 col-sm-6 ">
                                      <div class="form-group">
                                        <input type="text" class="" placeholder=" " id="model_name">
                                        <label for="name" class="text-dark fw-bold">State</label>
                                      </div>
                                    </div>
                                    <div class="col-12 col-lg-6 col-md-6 col-sm-6">
                                      <div class="form-group">
                                        <input type="text" class="" placeholder=" " id="model_name">
                                        <label for="name" class="text-dark fw-bold">District</label>
                                      </div>
                                    </div>
                                    <div class="col-12 col-lg-6 col-md-6 col-sm-6 ">
                                      <div class="form-group">
                                        <input type="text" class="" placeholder=" " id="model_name">
                                        <label for="name" class="text-dark fw-bold">Tehsil</label>
                                      </div>
                                    </div>
                                    <div class="col-12 col-lg-6 col-md-6 col-sm-6 ">
                                      <div class="form-group">
                                        <input type="text" class="" placeholder=" " id="model_name">
                                        <label for="name" class="text-dark fw-bold">Pincode</label>
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
      <div class="filter-card ">
        <div class="card-body">
          <div class="row">
            <div class="col-12 col-sm-12 col-md-4 col-lg-4">
              <div class="form-outline">
                <label class="form-label">UserName</label>
                <input type="email" id="search_name" name="search_name" class="form-control" />
              </div>
            </div>
            <div class="col-12 col-sm-12 col-md-4 col-lg-4">
              <div class="form-outline">
                <label class="form-label">State</label>
                <input type="text" id="u_state" name="u_state" class="form-control" />
              </div>
            </div>
            <div class="col-12 col-sm-12 col-md-4 col-lg-4">
              <div class="form-outline">
                <label class="form-label">District</label>
                <input type="text" id="u_dist" name="u_dist" class="form-control" />
              </div>
            </div>
            <div class="col-12 col-sm-12 col-md-4 col-lg-4">
              <div class="form-outline ">
                <label class="form-label">Pincode</label>
                <input type="text" id="pincode" name="pincode" class="form-control" />
              </div>
            </div>
           
            
            <div class="col-12 col-sm-12 col-md-8 col-lg-8">
              <div class="float-end text-center">
                <button type="button" class="btn-success btn_search btn " id="Search">Search</button>
                <button type="button" class="btn-success  mx-2 btn_search btn" id="Reset">Reset</button>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Table Card -->
      <div class=" mb-5">
            <div class="table-responsive">
              <table id="example" class="table dataTable no-footer py-1" width="100%">
                <thead class="">
                  <tr>
                    <th class="d-none d-md-table-cell text-white py-2">S.No.</th>
                    <th class="d-none d-md-table-cell text-white py-2">Date</th>
                    <th class="d-none d-md-table-cell text-white py-2">Name</th>
                    <th class="d-none d-md-table-cell text-white py-2">Mobile Number</th>
                    <th class="d-none d-md-table-cell text-white py-2">state </th>
                    <th class="d-none d-md-table-cell text-white py-2">District</th>
                    <th class="d-none d-md-table-cell text-white py-2">Tehsil</th>
                    <th class="d-none d-md-table-cell text-white py-2">Pincode</th>
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
<!-- <script>
  var url = edfaults.camsAPIBaseURL + "CAMS/SearchLocationFaults";
  $.ajax({
    'url': url,
    'method': "POST",
    'contentType': 'application/json'
}).done( function(data) {
    $('#usertable').dataTable( {
        "aaData": data,
        "columns": [
            { "data": "username" },
            { "data": "email" },
            { "data": "designation" },
            { "data": "mobile" },
            { "data": "state" },
            { "data": "<button class='btn'></button>" }
        ]
    })
})
 </script>  -->



  
  

<?php
   include 'includes/footertag.php';
   ?> 