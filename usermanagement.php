<?php
include 'includes/headertag.php';
   include 'includes/headertagadmin.php';
   include 'includes/footertag.php';
   
   ?> 
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<script> var APIBaseURL = "<?php echo $APIBaseURL; ?>";</script>
<script> var baseUrl = "<?php echo $baseUrl; ?>";</script>
<script src="<?php $baseUrl; ?>model/usermanagement.js" defer></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<style>
  .error-message {
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
    <section style="padding: 0 15px 0 60px;">
      <div class="">
        <div class="">
          <div class="card-body d-flex align-items-center justify-content-between page_title">
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb mb-0">
                <li class="breadcrumb-item">
                  <span>User Overview</span>
                </li>
              </ol>
            </nav>
            <button type="button" id="add_trac" class="btn add_btn btn-success float-right btn_all" data-bs-toggle="modal"  data-bs-target="#staticBackdrop">
              <i class="fa fa-plus" aria-hidden="true"></i> Add New User
            </button>
            <!-- Modal -->
            <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
              <div class="modal-dialog modal-lg modal-dialog-centered">
                <div class="modal-content modal_box">
                  <div class="modal-header modal_head">
                    <h5 class="modal-title text-white fw-bold" id="staticBackdropLabel"> Add New User</h5>
                    <button type="button" class="btn-close btn-success" data-bs-dismiss="modal" aria-label="Close"><img src="assets/images/close.png"></button>
                  </div>
                  <div class="modal-body">
                    <div class="row justify-content-center">
                      <div class="col-lg-12">
                        <form action="" method="POST"  class="" id="form_add">
                          <div class="filter-card ">
                            <div class="card-body">
                              <div class="row">
                                <div class="col- col-sm-6 col-lg-6 col-md-6 mt-3">
                                  <div class="form-outline">
                                    <label class="form-label"> First Name<span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" for="first_name"  id="first_name" name="first_name" >
                                    <small></small>
                                  </div>
                                </div>
                                <div class="col- col-sm-6 col-lg-6 col-md-6 mt-3">
                                  <div class="form-outline">
                                    <label class="form-label" for="last_name"> Last Name<span class="text-danger">*</span></label>
                                    <input type="text" class="form-control"  name="last_name"   id="last_name">
                                    <small></small>
                                  </div>
                                </div>
                                <div class="col- col-sm-6 col-lg-6 col-md-6 mt-3">
                                  <div class="form-outline">
                                    <label class="form-label">Contact Number<span class="text-danger">*</span></label>
                                    <input type="text" class="form-control"  name="mobile" for="mobile" id="mobile" >
                                    <small></small>
                                  </div>
                                </div>
                                <div class="col- col-sm-6 col-lg-6 col-md-6 mt-3">
                                  <div class="form-outline">
                                    <label class="form-label">Email ID<span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="email" name="email" for="email" >
                                    <small></small>
                                  </div>
                                </div>
                                <div class="col- col-sm-6 col-lg-6 col-md-6 mt-3">
                                  <div class="form-outline">
                                    <label class="form-label">Password<span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="password"name="password" for="password"  >
                                    <small></small>
                                  </div>
                                </div>
                              <div class="col- col-sm-6 col-lg-6 col-md-6 mt-3">
                                <div class="form-outline">
                                  <label class="form-label">Confirm Password<span class="text-danger">*</span></label>
                                  <input type="text" class="form-control py-2" id="password_confirmation" name="password_confirmation" for="password_confirmation" >
                                  <small></small>
                                  <div class="form-text confirm-message"></div>
                                </div>
                              </div>
                              <div class="col- col-sm-6 col-lg-6 col-md-6 mt-3">
                                <div class="form-outline">
                                  <label class="form-label">User Type<span class="text-danger">*</span></label>
                                  <select class="form-select py-2" aria-label="Default select example" name="user_type" id="user_type">
                                    <option value>Select User</option>
                                    <option value="0" >Admin</option>
                                    <option value="1">Super Admin</option>
                                  </select>
                                </div>
                              </div>
                              <div class="col-12 col-sm-6 col-md-6 col-lg-6 mt-3">
                                <div class="form-outline">
                                  <label class="form-label"> State<span class="text-danger">*</span></label>
                                  <select class="form-select py-2" aria-label="Default select example"  name="status" id="status">
                                    <option value>Select Status</option>
                                    <option value="0">Active</option>
                                    <option value="1">In Active</option>
                                  </select>
                                </div>
                              </div>
                              <div class="col-12 mt-4 ">
                                <div class="text-center">
                                  <button class="bg-success text-white btn mb-0 btn_all" id="save">Submit</button>
                                </div>
                            </div>
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="">
      <!-- Filter Card -->
      <div class="filter-card ">
        <div class="card-body" >
          <form action="" id="myform" class="mb-0">
            <div class="row">
              <div class="col-12 col-sm-12 col-md-4 col-lg-4">
                <div class="form-outline">
                  <label class="form-label">Search by Any Field</label>
                  <input type="text" id="name"  name="search_name" onkeyup="myFunction()" class="mb-0 data_search form-control input-group-sm" />
                </div>
              </div>
              <div class="col-12 col-sm-12 col-md-8 col-lg-8">
                <input type="button" onclick="resetForm()" class="bg-success text-white btn mb-0 btn_all" value="Reset">
              </div>
            </div>
          </form>
        </div>
      </div>
      <!-- Table Card -->
      <div class=" mb-5 shadow bg-white mt-3 p-3">
        <div class="table-responsive">
          <table id="example" class="table table-striped  table-hover table-bordered dataTable no-footer" width="100%; margin-bottom: 15px;">
            <thead class="">
              <tr>
                <th class="d-none d-md-table-cell text-white ">S.No.</th>
                <th class="d-none d-md-table-cell text-white">Date</th>
                <th class="d-none d-md-table-cell text-white">Name</th>
                <th class="d-none d-md-table-cell text-white">Mobile Number</th>
                <th class="d-none d-md-table-cell text-white">User Type</th>
                <th class="d-none d-md-table-cell text-white">Status</th>
                <th class="d-none d-md-table-cell text-white">Action</th>
              </tr>
            </thead>
            <tbody id="data-table">
            </tbody>
          </table>
        </div>
      </div>
      <!-- model -->
      <div class="modal fade" id="exampleModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered" data-bs-backdrop="static"  role="document">
          <div class="modal-content">
            <div class="modal-header modal_head">
              <h5 class="modal-title text-white fw-bold" id="staticBackdropLabel">Edit User</h5>
            </div>
            <div class="modal-body">
              <form action="" method="POST"  class="" id="">
                <div class="">
                  <div class="card-body">
                    <div class="row">
                      <div class="col- col-sm-6 col-lg-6 col-md-6 mt-3" hidden>
                        <div class="form-outline">
                          <label class="form-label"> id Name<span class="text-danger">*</span></label>
                          <input type="text" class="form-control py-2" for="idUser"  id="idUser" name="first_name" placeholder="Enter First Name">
                          <small></small>
                        </div>
                      </div>
                      <div class="col- col-sm-6 col-lg-6 col-md-6 mt-3">
                        <div class="form-outline">
                          <label class="form-label"> First Name<span class="text-danger">*</span></label>
                          <input type="text" class="form-control" for="first_name" prachi="" id="first_name1" name="first_name" >
                          <small></small>
                        </div>
                      </div>
                      <div class="col- col-sm-6 col-lg-6 col-md-6 mt-3">
                        <div class="form-outline">
                          <label class="form-label" for="last_name"> Last Name<span class="text-danger">*</span></label>
                          <input type="text" class="form-control"  name="last_name"   id="last_name1" >
                          <small></small>
                        </div>
                      </div>
                      <div class="col- col-sm-6 col-lg-6 col-md-6 mt-3">
                        <div class="form-outline">
                          <label class="form-label">Contact Number<span class="text-danger">*</span></label>
                          <input type="text" class="form-control"  name="mobile" for="mobile" id="mobile1">
                          <small></small>
                        </div>
                      </div>
                      <div class="col- col-sm-6 col-lg-6 col-md-6 mt-3">
                        <div class="form-outline">
                          <label class="form-label">Email ID<span class="text-danger">*</span></label>
                          <input type="text" class="form-control" id="email1" name="email" for="email1">
                          <small></small>
                        </div>
                      </div>
                      <div class="col- col-sm-6 col-lg-6 col-md-6 mt-3">
                        <div class="form-outline">
                          <label class="form-label">User Type<span class="text-danger">*</span></label>
                          <select class="form-select" aria-label="Default select example" name="user_type" id="user_type1">
                            <option value>Select User</option>
                            <option value="0" >Admin</option>
                            <option value="1">User</option>
                          </select>
                        </div>
                      </div>
                      <div class="col-12 col-sm-6 col-md-6 col-lg-6 mt-3">
                        <div class="form-outline">
                          <label class="form-label"> State<span class="text-danger">*</span></label>
                            <select class="form-select" aria-label="Default select example"  name="status" id="status1">
                              <option value>Select Status</option>
                              <option value="0">Active</option>
                              <option value="1">In Active</option>
                            </select>
                          </div>
                        </div>
                      </div>
                    </div>
                  </form>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary  mb-0 btn_all" data-dismiss="modal">Close</button>
                  <button type="button" class="btn btn-success  mb-0 btn_all" id="dataedit" data-dismiss="modal" >Save changes</button>
                </div>
              </div>
            </div>
          </div>  
        </div>
      </section> 
    </div>
  </div>
</body>
<script>
function myFunction() {
  var input, filter, table, tr, td, i, j, txtValue;
  input = document.getElementById("name");
  filter = input.value.toUpperCase();
  table = document.getElementById("example");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    // Loop through all td elements in the current row
    td = tr[i].getElementsByTagName("td");
    for (j = 0; j < td.length; j++) {
      txtValue = td[j].textContent || td[j].innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
        break; 
      } else {
        tr[i].style.display = "none";
      }
    }
  }
}
function resetForm() {
        document.getElementById("myform").reset();
        // Show all rows in the table
        var table = document.getElementById("example");
        var rows = table.getElementsByTagName("tr");
        for (var i = 0; i < rows.length; i++) {
            rows[i].style.display = "";
        }
    }
</script>


