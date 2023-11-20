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
                                          <input type="text" class="form-control py-2" name="first_name" for="first_name"  id="first_name" placeholder="Enter First Name">
                                          <small></small>
                                        </div>
                                       
                                        <div class="col- col-sm-6 col-lg-6 col-md-6">
                                          <label class="text-dark"> Last Name<span class="text-danger">*</span></label>
                                          <input type="text" class="form-control py-2"  name="last_name" for="last_name"  id="last_name" placeholder="Enter Last Name">
                                          <small></small>
                                        </div>
                                        <div class="col- col-sm-6 col-lg-6 col-md-6">
                                          <label class="text-dark">Contact Number<span class="text-danger">*</span></label>
                                          <input type="text" class="form-control py-2"  name="mobile" for="mobile" id="mobile" placeholder="Enter contact number">
                                          <small></small>
                                        </div>
                                        <div class="col- col-sm-6 col-lg-6 col-md-6">
                                          <label class="text-dark">Email ID<span class="text-danger">*</span></label>
                                          <input type="text" class="form-control py-2" id="email" name="email" for="email"  placeholder="Enter email id">
                                          <small></small>
                                        </div>
                                        
                                        <div class="col- col-sm-6 col-lg-6 col-md-6">
                                          <label class="text-dark">Password<span class="text-danger">*</span></label>
                                          <input type="text" class="form-control py-2" id="password"name="password" for="password"   placeholder="Enter Password">
                                          <small></small>
                                        </div>
                                        <div class="col- col-sm-6 col-lg-6 col-md-6">
                                          <label class="text-dark">Confirm Password<span class="text-danger">*</span></label>
                                          <input type="text" class="form-control py-2" id="password_confirmation" name="password_confirmation" for="password_confirmation" placeholder="Enter Password">
                                          <small></small>
                                        </div>
                                        <div class="col- col-sm-6 col-lg-6 col-md-6">
                                          <!-- <div class="form-group mt-4 pt-1"> -->
                                          <label class="text-dark">User Type<span class="text-danger">*</span></label>
                                            <select class="form-select py-2" aria-label="Default select example">
                                                <option selected>Select User</option>
                                                <option value="1" >Admin</option>
                                                <option value="2">User</option>
                                            </select>
                                          <!-- </div> -->
                                        </div>
                                        <div class="col-12 col-sm-6 col-md-6 col-lg-6">
                                          <!-- <div class="form-group mt-4 pt-1"> -->
                                          <label class="text-dark"> State<span class="text-danger">*</span></label>
                                            <select class="form-select py-2" aria-label="Default select example">
                                                <option selected>Select Status</option>
                                                <option value="1">Active</option>
                                                <option value="2">In Active</option>
                                            </select>
                                          <!-- </div> -->
                                        </div>
                        
                                        <div class="col-12 mt-4 ">
                                            <div class="text-center">
                                                <button class="btn px-5 bg-success text-white" id="save">Submit</button>
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
          <form action="">
            <div class="row">
              <div class="col-12 col-sm-12 col-md-4 col-lg-4">
                  <div class="form-outline">
                    <label class="form-label">Search by Any Field</label>
                    <input type="text" id="name"  name="search_name" class=" data_search form-control input-group-sm" />
                  </div>
              </div>
              <div class="col-12 col-sm-12 col-md-8 col-lg-8">
                <input type="reset" class="bg-success text-white btn px-4 py-2" value="Reset">
              </div>
            </div>
          </form>
          
        </div>
      </div>
      <!-- Table Card -->
      <div class=" mb-5">
            <div class="table-responsive">
              <table id="example" class="table dataTable no-footer py-1" width="100%">
                <thead class="">
                  <tr>
                    <th class="d-none d-md-table-cell text-white py-2">S.No.</th>
                   
                    <th class="d-none d-md-table-cell text-white py-2">Name</th>
                    <th class="d-none d-md-table-cell text-white py-2">Mobile Number</th>
                    <th class="d-none d-md-table-cell text-white py-2">User Type</th>
                    <th class="d-none d-md-table-cell text-white py-2">Status</th>
                    <th class="d-none d-md-table-cell text-white py-2">Date</th>
                    <th class="d-none d-md-table-cell text-white py-2">Action</th>
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

    $("#form").validate({
      rules:{
        first_name:"required",
        last_name:"required",
     password:{
      required:true,
      minlenght:5
     },
     password_confirmation:{
      required:true,
      minlenght:5,
      equalTo:"password"
     },
     email:{
      required:true,
      email:true
     },
     user_type:"required"
    },
    messages:{
      first_name:"Please Enter Your First Name",
      last_name:"Please Enter Your Last Name",
      password:{
        required:"Please provide a valid password",
        minlenght:"Your password must be atleast 5 character long"
      },
      password_confirmation:{
        required:"Please provide a valid password",
        minlenght:"Your password must be atleast 5 character long",
        equalTo:"Please enter  as same password above"
      },
      user_type:"Enter a user type"
    }

    });



  $('#save').click(user_registration);
  });

  function user_registration(event) {
    // Get values from form fields
    event.preventDefault();
    console.log('jfhfhw');
    var first_name = $('#first_name').val();
    var last_name = $('#last_name').val();
    var email = $('#email').val();
    var mobile = $('#mobile').val();
    var password = $('#password').val();
    var password_confirmation = $('#password_confirmation').val();
    var user_type = $('#user_type').val();

    // Prepare data to send to the server
    var paraArr = {
      'first_name': first_name,
      'last_name': last_name,
      'email': email,
      'mobile': mobile,
      'password': password,
      'password_confirmation': password_confirmation,
      'user_type': user_type
    };

    // Define the URL where you want to send the data
    var url = "<?php echo $APIBaseURL; ?>user_registration";
    console.log(url);

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
        alert('successfully inserted..!')
      },
      error: function (error) {
        console.error('Error fetching data:', error);
      }
    });
  }

  // fetch data
  function get() {
    var url = "<?php echo $APIBaseURL; ?>getUsers";
    $.ajax({
        url: url,
        type: "GET",
        headers: {
            'Authorization': 'Bearer ' + localStorage.getItem('token')
        },
        success: function (data) {
          // console.log(data);
            const tableBody = document.getElementById('data-table');
            tableBody.innerHTML = ''; // Clear previous data

            let users=data.user;

            if (users.length > 0) {
          // console.log(typeof users);

                // Loop through the data and create table rows
                users.map(row => {
                  // console.log(row);
                    const tableRow = document.createElement('tr');
                    let originalDate= new Date(row.created_at);

                    let day=originalDate.getDate();
                    let month=originalDate.getMonth()+1;
                    let year=originalDate.getFullYear();

                    let formatDate=`${day}-${month}-${year}`;
                    tableRow.innerHTML = `
                        <td>${row.id}</td>
                        <td>${row.first_name}</td>
                        <td>${row.mobile}</td>
                        <td>${row.user_type}</td>
                        <td>${row.status}</td>
                        <td>${formatDate}</td>
                        <td><div class="d-flex"><button class="btn btn-danger btn-sm mx-1" id="delete_user" onclick="destroy(${row.id});"><i class="fa fa-trash" style="font-size: 11px;"></i></button></div></td>
                    `;
                    tableBody.appendChild(tableRow);
                });
            } else {
                // Display a message if there's no valid data
                tableBody.innerHTML = '<tr><td colspan="7">No valid data available</td></tr>';
            }
        },
        error: function (error) {
            console.error('Error fetching data:', error);
            // Display an error message or handle the error as needed
        }
    });
}

// Call the fetchData function to initiate the API request
get();

function destroy(id) {
  var url = "<?php echo $APIBaseURL; ?>deleteUser/" + id;
  var token = localStorage.getItem('token');
  
  if (!token) {
    console.error("Token is missing");
    return;
  }

  $.ajax({
    url: url,
    type: "DELETE",
    headers: {
      'Authorization': 'Bearer ' + token
    },
    success: function(result) {
      // window.location.reload();
      get();
      console.log("Delete request successful");
      alert("Delete operation successful");
    },
    error: function(error) {
      console.error('Error fetching data:', error);
      alert("Error during delete operation");
    }
  });
}

$(".data_search").on("keyup", function() {
  var value = $(this).val().toLowerCase();
  $("#data-table tr").filter(function() {
    $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
  });
});


</script>
  

