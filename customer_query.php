<?php
include 'includes/headertag.php';
include 'includes/headertagadmin.php';
include 'includes/footertag.php';

?>
<script> var APIBaseURL = "<?php echo $APIBaseURL; ?>";</script>
<script> var baseUrl = "<?php echo $baseUrl; ?>";</script>
<script src="<?php $baseUrl; ?>model/customer_query.js"></script>
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
                            <span>Customer Query/Message</span>
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
                            <label class="form-label">Name</label>
                            <input type="text" id="name" name="name" class="form-control" />
                        </div>
                        </div>
                        <div class="col-12 col-sm-12 col-md-3 col-lg-3">
                        <div class="form-outline">
                            <label class="form-label">Mobile Number</label>
                            <input type="text" id="phone_number" name="complaint" class="form-control" />
                        </div>
                        </div>
                        <div class="col-12 col-sm-12 col-md-6 col-lg-6">
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
                                <th class="d-none d-md-table-cell text-white">FullName </th>
                                <th class="d-none d-md-table-cell text-white">Phone No.</th>
                                <th class="d-none d-md-table-cell text-white">Subject</th>
                                <th class="d-none d-md-table-cell text-white">Query/Message</th>
                                <th class="d-none d-md-table-cell text-white">Action</th>
                            </tr>
                            </thead>
                            <tbody id="data-table">
                        </tbody>
                        </table>
                    </div>
                    </div>
                </div>
            </section>  
        </div>
    </div>

    <div class="modal fade" id="customer_view_model" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog  modal-dialog-centered">
              <div class="modal-content modal_box">
                <div class="modal-header modal_head">
                  <h5 class="modal-title text-white fw-bold" id="staticBackdropLabel">Query/Message</h5>
                  <button type="button" class="btn-close btn-success" data-bs-dismiss="modal" aria-label="Close"><img src="assets/images/close.png"></button>
                </div>
                  <div class="modal-body bg-light">
                    <div class="row ">
                       <div class="col-12">
                        <table class="table table-striped">
                        <tbody>
                            <tr>
                                <td>Name:-</td>
                                <td id="fullname"></td>
                            </tr>
                            <tr>
                                <td>Email:-</td>
                                <td id="email"></td>
                            </tr>
                            <tr>
                                <td>Mobile Number:-</td>
                                <td id="mo_number"></td>
                            </tr>
                            <tr>
                                <td>Subject:-</td>
                                <td id="subject"></td>
                            </tr>
                            <tr>
                                <td>Query/Message:-</td>
                                <td id="query"></td>
                            </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>  
                <div class="modal-footer p-2">
                  <button type="button" class="btn btn-secondary px-3" data-bs-dismiss="modal">Close</button>
                  
                </div>
              </div>
            </div>
          </div>
    </div>
</body>


<?php
   include 'includes/footertag.php';
   ?> 

<script>


</script>