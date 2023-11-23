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
        <div class="align-items-center justify-content-between page_title my-4">
        
          <div class="row">
            <div class="col-12 col-sm-5 col-lg-5 col-md-5">
              <h4>Lookup Data</h4>
            </div>
            <div class="col-12 col-sm-7 col-lg-7 col-md-7">
              <div class=" float-end">
                <button type="button" id="add_trac" class="btn add_btn bg-success" data-bs-toggle="modal"  data-bs-target="#staticBackdrop1">
                  <i class="fa fa-plus" aria-hidden="true"></i>Add Lookup Data
                </button>
                <!-- modal -->
                <div class="modal fade" id="staticBackdrop1" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                  <div class="modal-dialog  modal-dialog-centered">
                    <div class="modal-content modal_box">
                      <div class="modal-header modal_head">
                        <h5 class="modal-title text-white fw-bold" id="staticBackdropLabel">Add Lookup Data</h5>
                        <button type="button" class="btn-close btn-success" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body bg-light">
                              <div class="row justify-content-center">
                                  <div class="col-12">
                                    <h5 class="text-center">Fill Details</h5>
                                    <form id="form">
                                      <div class="row justify-content-center">
                                        <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                                            <div class="form-outline">
                                                <label for="name" class="text-dark">Type</label>
                                                <select class="form-select py-2" value="lookupSelectbox" for="lookupSelectbox" id="lookupSelectbox" aria-label="Default select example">
                                                  <option value="" id="lookupSelect">Select Type Name</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-12 mt-3">
                                            <div class="form-group">
                                              <input type="text" class="" placeholder=" " id="lookup_data_value"  for="lookup_data_value" >
                                              <label for="name" class="text-dark"> Lookup Data Name</label>
                                            </div>
                                        </div>
                                      </div>
                                      <button type="button" class="btn btn-success fw-bold px-3 " id="login">Submit</button>
                                    </form>
                                  </div>
                              </div>
                          </div>
                        <!-- <div class="modal-footer">
                          <button type="button" class="btn btn-secondary px-3" data-bs-dismiss="modal">Close</button>
                        
                      </div> -->
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <!-- Filter Card -->
      <div class="filter-card mb-2">
        <div class="card-body">
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
                                    <thead>
                                        <tr>
                                            <th class="d-none d-md-table-cell text-white">ID</th>
                                            <th class="d-none d-md-table-cell text-white">Lookup Type </th>
                                            <th class="d-none d-md-table-cell text-white">Lookup Data </th>
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
</body>

<?php
   include 'includes/footertag.php';
   ?> 
   <script>
    $(document).ready(function() {
        $("#form").validate({
        rules:{
            lookupSelectbox:"required",
            lookup_data_value:"required"
        },
        messages:{
            lookupSelectbox:"Select field",
            lookup_data_value:"Field is required"
        }

    });
    $('#login').click(store);
  });
  function get_data() {
    console.log('hhsdfshdfch');
    var url = "<?php echo $APIBaseURL; ?>LookupData";
    console.log(url);
    $.ajax({
        url: url,
        type: "GET",
        headers: {
            'Authorization': 'Bearer ' + localStorage.getItem('token')
        },
        success: function (data) {
          console.log(data);
            const tableBody = document.getElementById('data-table');
            tableBody.innerHTML = ''; // Clear previous data

            

            if (data.lookup_data.length > 0) {
          console.log(typeof data.lookup_data);

                // Loop through the data and create table rows 
                data.lookup_data.map(row => {
                  console.log(row);
                    const tableRow = document.createElement('tr');
                    tableRow.innerHTML = `
                        <td>${row.id}</td>
                        <td>${row.lookup_type_id}</td>
                        <td>${row.lookup_data_value}</td>
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
get_data();

  function store(event) {
    // Get values from form fields
    event.preventDefault();
    console.log('jfhfhw');
    var lookup_type = $('#lookupSelectbox').val();
    var lookup_data_value = $('#lookup_data_value').val();
    console.log(lookup_type);

    // Prepare data to send to the server
    var paraArr = {
      'lookup_type_id': lookup_type,
      'lookup_data_value':lookup_data_value
    };

    // Define the URL where you want to send the data
    var url = "<?php echo $APIBaseURL; ?>LookupData";
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
        window.location.href = "<?php echo $baseUrl; ?>lookupdata.php"; 
        console.log("Add successfully");
        alert('successfully inserted..!')
      },
      error: function (error) {
        console.error('Error fetching data:', error);
      }
    });
  }

//   get data in select box
function get() {
    var url = "<?php echo $APIBaseURL; ?>LookupType";
    $.ajax({
        url: url,
        type: "GET",
        headers: {
            'Authorization': 'Bearer' + localStorage.getItem('token')
        },
        success: function (data) {
            console.log(data);
            const select = document.getElementById('lookupSelectbox');
            select.innerHTML = ''; // Clear previous data

            if (data.lookup_type.length > 0) {
                data.lookup_type.forEach(row => {
                    const option = document.createElement('option');
                    option.textContent = row.name;
                    option.value = row.id; // Set the value attribute if needed
                    select.appendChild(option);
                });
            } else {
                // Display a message if there's no valid data
                select.innerHTML = '<option> No valid data available</option>';
            }
        },
        error: function (error) {
            console.error('Error fetching data:', error);
            // Display an error message or handle the error as needed
        }
    });
}
get();


// get data in table
// delete data
function destroy(id) {
  var url = "<?php echo $APIBaseURL; ?>LookupData/" + id;
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
      get_data();
      console.log("Delete request successful");
      alert("Delete operation successful");
    },
    error: function(error) {
      console.error('Error fetching data:', error);
      alert("Error during delete operation");
    }
  });
}

   </script>