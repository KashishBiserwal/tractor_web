<?php
   include 'includes/headertagadmin.php';
  
   
   ?> 
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
                <div class="modal-body">
                        <div class="row justify-content-center">
                            <div class="col-lg-12">
                              <h5 class="fw-bold text-center">Fill your Details</h5>
                              <!-- <form id="form" method="POST">
                                  <div class="row justify-content-center">
                                      <div class="col-12">
                                          <div class="form-group">
                                              <input type="text" placeholder=" " id="name">
                                              <label for="name" class="text-dark">User Name</label>
                                              <small></small>
                                          </div>
                                      </div>
                                      <div class="col-12 col-sm-6 col-lg-6 col-md-6">
                                          <div class="form-group">
                                              <input type="text" placeholder=" " id="number">
                                              <label for="number" class="text-dark">Contact Number</label>
                                              <small></small>
                                          </div>
                                      </div>
                                      <div class="col-12 col-sm-6 col-lg-6 col-md-6">
                                          <div class="form-group">
                                              <input type="text" placeholder=" " id="email">
                                              <label for="email" class="text-dark">Email ID</label>
                                              <small></small>
                                          </div>
                                      </div>
                                      <div class="col-12 col-sm-6 col-lg-6 col-md-6">
                                          <div class="form-group">
                                              <input type="text" placeholder=" " id="state">
                                              <label for="state" class="text-dark">State</label>
                                              <small></small>
                                          </div>
                                      </div>
                                      <div class="col-12 col-sm-6 col-lg-6 col-md-6">
                                          <div class="form-group">
                                              <input type="text" placeholder=" " id="district">
                                              <label for="district" class="text-dark">District</label>
                                              <small></small>
                                          </div>
                                      </div>
                                      <div class="col-12 col-sm-6 col-lg-6 col-md-6">
                                          <div class="form-group">
                                              <input type="text" placeholder=" " id="tehsil">
                                              <label for="tehsil" class="text-dark">Tehsil</label>
                                              <small></small>
                                          </div>
                                      </div>
                                      <div class="col-12 col-sm-6 col-lg-6 col-md-6">
                                          <div class="form-group">
                                              <input type="text" placeholder=" " id="pincode">
                                              <label for="pincode" class="text-dark">Pincode</label>
                                              <small></small>
                                          </div>
                                      </div>
                                  </div>
                              </form> -->
                              <form action="" method="POST"  class="" id="form">
                                  <div class="filter-card ">
                                    <div class="card-body">
                                      <div class="row">
                                        <!-- <div class="col-12 col-sm-6 col-lg-6 col-md-6">
                                          <div class="form-group">
                                              <input type="text" placeholder=" " id="first_name">
                                              <label for="name" class="text-dark">First Name</label>
                                              <small></small>
                                          </div>
                                        </div> -->
                                        <div class="col- col-sm-6 col-lg-6 col-md-6">
                                          <label class="text-dark"> First Name<span class="text-danger">*</span></label>
                                          <input type="text" class="form-control py-2" id="first_name" placeholder="Enter First Name">
                                          <small></small>
                                        </div>
                                       
                                        <div class="col- col-sm-6 col-lg-6 col-md-6">
                                          <label class="text-dark"> Last Name<span class="text-danger">*</span></label>
                                          <input type="text" class="form-control py-2" id="last_name" placeholder="Enter Last Name">
                                          <small></small>
                                        </div>
                                        <div class="col- col-sm-6 col-lg-6 col-md-6">
                                          <label class="text-dark">Contact Number<span class="text-danger">*</span></label>
                                          <input type="text" class="form-control py-2" id="mobile" placeholder="Enter contact number">
                                          <small></small>
                                        </div>
                                        <div class="col- col-sm-6 col-lg-6 col-md-6">
                                          <label class="text-dark">Email ID<span class="text-danger">*</span></label>
                                          <input type="text" class="form-control py-2" id="email" placeholder="Enter email id">
                                          <small></small>
                                        </div>
                                        
                                        <div class="col- col-sm-6 col-lg-6 col-md-6">
                                          <label class="text-dark">Password<span class="text-danger">*</span></label>
                                          <input type="text" class="form-control py-2" id="password" placeholder="Enter Password">
                                          <small></small>
                                        </div>
                                        <div class="col- col-sm-6 col-lg-6 col-md-6">
                                          <label class="text-dark">Confirm Password<span class="text-danger">*</span></label>
                                          <input type="text" class="form-control py-2" id="password2" placeholder="Enter Password">
                                          <small></small>
                                        </div>
                                        <div class="col- col-sm-6 col-lg-6 col-md-6">
                                          <label class="text-dark">User Type<span class="text-danger">*</span></label>
                                          <input type="text" class="form-control py-2" id="user_type" placeholder="Eg- Admin or User">
                                          <small></small>
                                        </div>
                                        <div class="col-12 col-sm-6 col-md-6 col-lg-6">
                                          <div class="form-group mt-4 pt-1">
                                            <select class="form-select py-2" aria-label="Default select example">
                                                <option selected>Select Status</option>
                                                <option value="1">Active</option>
                                                <option value="2">In Active</option>
                                            </select>
                                          </div>
                                        </div>
                        
                                        <div class="col-12 ">
                                            <div class="text-center ">
                                                <button class="btn px-4 bg-success " id="save">Submit</button>
                                            </div>
                                        </div>
                                      </div>
                                  </div>
                              </form>
                            </div>
                        </div>
                    </div>
                  <!-- <div class="modal-footer">
                    <button type="button" class="btn btn-secondary px-3" data-bs-dismiss="modal">Close</button>
                    <button class="btn btn_search" id="save">Submit</button>
                </div> -->
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <!-- Filter Card -->
      <div class="filter-card ">
        <div class="card-body" >
          <div class="row">
            <div class="col-12 col-sm-12 col-md-4 col-lg-4">
                <div class="form-outline">
                  <label class="form-label">Search by Any Field</label>
                  <input type="text" id="name"  name="search_name" class=" search form-control input-group-sm" />
                </div>
            </div>
           
            
            <div class="col-12 col-sm-12 col-md-8 col-lg-8 mt-3">
              <button type="button" class="btn-success  mx-2 px-4 py-2 btn" id="Reset">Reset</button>
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
                    <th class="d-none d-md-table-cell text-white py-2">Action</th>
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
<script>
   $(document).ready(function() {
  $('#save').click(user_registration);
  });

  function user_registration() {
    // Get values from form fields
    var first_name = $('#first_name').val();
    var last_name = $('#last_name').val();
    var email = $('#email').val();
    var mobile = $('#mobile').val();
    var password = $('#password').val();
    var user_type = $('#user_type').val();

    // Prepare data to send to the server
    var paraArr = {
      'first_name': first_name,
      'last_name': last_name,
      'email': email,
      'mobile': mobile,
      'password': password,
      'user_type': user_type
    };

    // Define the URL where you want to send the data
    var url = "<?php echo $APIBaseURL; ?>user_registration";

    // You may need to include headers, but you should ensure they are properly configured
    var token = localStorage.getItem('token');
    var headers = {
      'Authorization': 'Bearer ' + token
    };

    // Make an AJAX request to the server
    $.ajax({
      url: url,
      type: "POST",
      data: paraArr,
      headers: headers,
      success: function (result) {
        console.log(result, "result");
        // Redirect to a success page or perform other actions
        window.location.href = "<?php echo $baseUrl; ?>usermanagement.php"; 
        console.log("Add successfully");
      },
      error: function (error) {
        console.error('Error fetching data:', error);
      }
    });
  }
 const form = document.getElementById('form');
const first_name = document.getElementById('first_name');
const last_name = document.getElementById('last_name');
const mobile = document.getElementById('mobile');
const email = document.getElementById('email');
const password = document.getElementById('password');
const password2 = document.getElementById('password2');
const state = document.getElementById('state');
const district = document.getElementById('district');
const tehsil = document.getElementById('tehsil');
const pincode = document.getElementById('pincode');

// Show input error messages
function showError(input, message) {
    const formControl = input.parentElement;
    const small = formControl.querySelector('small');
    formControl.className = 'form-outline mb-4 error';
    small.innerText = message;
    small.classList.add('error-message');
}

// Show success color
function showSuccess(input) {
    const formControl = input.parentElement;
    formControl.className = 'form-outline mb-4 success';
}

// Check required fields
function checkRequired(inputArr) {
    inputArr.forEach(function (input) {
        if (input.value.trim() === '') {
            showError(input, `${getFieldName(input)} is required`);
           
        } else {
            showSuccess(input);
        }
    });
}

// Check input length
function checkLength(input, min, max) {
    if (input.value.length < min) {
        showError(input, `${getFieldName(input)} must be at least ${min} characters`);
    } else if (input.value.length > max) {
        showError(input, `${getFieldName(input)} must be less than ${max} characters`);
    } else {
        showSuccess(input);
    }
}

// Get Field Name
function getFieldName(input) {
    return input.id.charAt(0).toUpperCase() + input.id.slice(1);
}

// Check email format
function checkEmail(input) {
    const emailValue = input.value.trim();
    const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (!emailPattern.test(emailValue)) {
        showError(input, 'Invalid email format');
    } else {
        showSuccess(input);
    }
}
// check passwords match
function checkPasswordMatch(input1, input2) {
    if(input1.value !== input2.value) {
        showError(input2, 'Passwords do not match');
    }
}
// Event Listeners
form.addEventListener('submit', function (e) {
    e.preventDefault();

    checkRequired([first_name,last_name, mobile, email, state, district,tehsil,pincode]);
    checkEmail(email); // If you want to check email format
});


</script>
  

