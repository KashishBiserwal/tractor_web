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
              <h4>Lookup Type</h4>
            </div>
            <div class="col-12 col-sm-7 col-lg-7 col-md-7">
              <div class=" float-end">
                <button type="button" id="add_trac" class="btn add_btn bg-success" data-bs-toggle="modal"  data-bs-target="#staticBackdrop1">
                  <i class="fa fa-plus" aria-hidden="true"></i>Add Lookup Type
                </button>
                <!-- modal -->
                <div class="modal fade" id="staticBackdrop1" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                  <div class="modal-dialog  modal-dialog-centered">
                    <div class="modal-content modal_box">
                      <div class="modal-header modal_head">
                        <h5 class="modal-title text-white fw-bold" id="staticBackdropLabel">Add Lookup Type</h5>
                        <button type="button" class="btn-close btn-success" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body bg-light">
                              <div class="row justify-content-center">
                                  <div class="col-12">
                                    <h5 class="text-center">Fill Details</h5>
                                    <form id="form">
                                      <div class="row justify-content-center">
                                          <div class="col-12 mt-3">
                                            <div class="">
                                                <label class="text-dark">Lookup Type Name<span class="text-danger">*</span></label>
                                                <input type="text" class="form-control py-2 text-uppercase" id="name" for="name" name="name" placeholder="">
                                            </div>
                                          </div>
                                      </div>
                                      <!-- <button type="button" id="" class="btn btn-success fw-bold px-3">Submit</button> -->
                                      <button type="submit" class="btn px-4 bg-success" id="login">Submit</button>
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
                            <input type="text" id="namesearch"  name="search_name" class=" data_search form-control input-group-sm" />
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
      <!-- <div class=" mb-5">
        <div class="table-responsive">
            <table id="example" class="table table-striped table-hover table-bordered dataTable no-footer" width="100%; margin-bottom: 15px;">
                <thead>
                    <tr>
                        <th class="d-none d-md-table-cell text-white">ID</th>
                        <th class="d-none d-md-table-cell text-white">Lookup Type </th>
                        <th class="d-none d-md-table-cell text-white">Action</th>
                    </tr>
                </thead>
                <tbody id="data-table">
                </tbody>
            </table>
        </div>
      </div> -->
      <div class="card mb-5">
          <div class="table-responsive" style="overflow: hidden;">
            <table id="example" class="table  table-striped table-hover table-bordered dataTable no-footer" width="100%; margin-bottom: 15px;">
                <thead>
                    <tr class="bg-success">
                        <th class="d-none d-md-table-cell text-white">ID</th>
                        <th class="d-none d-md-table-cell text-white">Lookup Type </th>
                        <th class="d-none d-md-table-cell text-white">Action</th>
                    </tr>
                </thead>
              <tbody id="data-table"></tbody>
              
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
    name:"required"
},
messages:{
    name:"Field is required"
}

});

$('#login').click(store);
  });

  function store(event) {
    // Get values from form fields
    event.preventDefault();
    console.log('jfhfhw');
    var lookup_type = $('#name').val();

    // Prepare data to send to the server
    var paraArr = {
      'lookup_type': lookup_type
    };

    // Define the URL where you want to send the data
    var url = "<?php echo $APIBaseURL; ?>LookupType";
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
        window.location.href = "<?php echo $baseUrl; ?>lookupvalue.php"; 
        console.log("Add successfully");
        alert('successfully inserted..!')
      },
      error: function (error) {
        console.error('Error fetching data:', error);
      }
    });
  }


  function get() {
    var url = "<?php echo $APIBaseURL; ?>LookupType";
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

            

            if (data.lookup_type.length > 0) {
          console.log(typeof data.lookup_type);

                // Loop through the data and create table rows
                data.lookup_type.map(row => {
                  console.log(row);
                    const tableRow = document.createElement('tr');
                    tableRow.innerHTML = `
                        <td>${row.id}</td>
                        <td>${row.name}</td>
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
get();

function destroy(id) {
  var url = "<?php echo $APIBaseURL; ?>LookupType/" + id;
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