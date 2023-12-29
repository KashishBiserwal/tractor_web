<?php
include 'includes/headertag.php';
   include 'includes/headertagadmin.php';
   include 'includes/footertag.php';
   
   ?> 
<script> var APIBaseURL = "<?php echo $APIBaseURL; ?>";</script>
<script> var baseUrl = "<?php echo $baseUrl; ?>";</script>
    <script src="<?php $baseUrl; ?>model/lookupdata.js"></script>
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
                <span>Lookup Data</span>
              </li>
            </ol>
          </nav>
          <button type="button" id="add_trac" class="btn add_btn btn-success float-right btn_all" data-bs-toggle="modal"  data-bs-target="#staticBackdrop1">
              <i class="fa fa-plus" aria-hidden="true"></i> Add Lookup Data
          </button>
  
                <!-- modal -->
                <div class="modal fade" id="staticBackdrop1" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                  <div class="modal-dialog  modal-dialog-centered">
                    <div class="modal-content modal_box">
                      <div class="modal-header modal_head">
                        <h5 class="modal-title text-white fw-bold" id="staticBackdropLabel">Add Lookup Data</h5>
                        <button type="button" class="btn-close btn-success" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body bg-white">
                              <div class="row justify-content-center">
                                  <div class="col-12">
                                    <!-- <h5 class="text-center">Fill Details</h5> -->
                                    <form id="form">
                                      <div class="row justify-content-center">
                                        <div class="col-12 col-sm-12 col-md-12 col-lg-12  mt-4">
                                            <div class="form-outline">
                                                <label for="lookupSelectbox" class="form-label">Type</label>
                                                <select class="form-select form-control py-2" value="lookupSelectbox" for="lookupSelectbox" id="lookupSelectbox" aria-label="Default select example">
                                                  <option value="" id="lookupSelect">Select Type Name</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-12 mt-4">
                                            <div class="form-outline">
                                            <label for="lookup_data_value" class="form-label"> Lookup Data Name</label>
                                              <input type="text" class="form-control" placeholder=" " id="lookup_data_value"  for="lookup_data_value" >
                                             
                                            </div>
                                        </div>
                                      </div>
                                      <button type="button" class="btn btn-success  mt-3 mb-0 btn_all" id="login">Submit</button>
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
        
    <div class="">
      <!-- Filter Card -->
      <div class="filter-card">
        <div class="card-body">
            <form action="" id="myform" class="mb-0">
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-4 col-lg-4">
                        <div class="form-outline">
                            <label class="form-label">Search by Any Field</label>
                            <input type="text" id="name" onkeyup="myFunction()"  name="name" class="mb-0 data_search form-control input-group-sm" />
                        </div>
                    </div>
                    <div class="col-12 col-sm-12 col-md-8 col-lg-8">
                        <input type="reset" onclick="resetForm()" class="bg-success text-white btn  mb-0 btn_all" value="Reset">
                    </div>
                </div>
            </form>
        </div>
      </div>
      <!-- Table Card -->
      <div class=" mb-5">
      <div class="table-responsive shadow bg-white mt-3">
            <table id="example" class="table table-striped  table-hover table-bordered  no-footer" width="100%;">
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
//     $(document).ready(function() {
//         $("#form").validate({
//         rules:{
//             lookupSelectbox:"required",
//             lookup_data_value:"required"
//         },
//         messages:{
//             lookupSelectbox:"Select field",
//             lookup_data_value:"Field is required"
//         }

//     });
//     $('#login').click(store);
//   });
//   function get_data() {
//     console.log('hhsdfshdfch');
//     var url = "<?php echo $APIBaseURL; ?>lookup_data";
//     console.log(url);
//     $.ajax({
//         url: url,
//         type: "GET",
//         headers: {
//             'Authorization': 'Bearer ' + localStorage.getItem('token')
//         },
//         success: function (data) {
//           console.log(data);
//             const tableBody = document.getElementById('data-table');
//             tableBody.innerHTML = ''; // Clear previous data

            

//             if (data.lookup_data.length > 0) {
//           console.log(typeof data.lookup_data);

//                 // Loop through the data and create table rows 
//                 data.lookup_data.map(row => {
//                   console.log(row);
//                     const tableRow = document.createElement('tr');
//                     tableRow.innerHTML = `
//                         <td>${row.id}</td>
//                         <td>${row.lookup_type_id}</td>
//                         <td>${row.lookup_data_value}</td>
//                         <td><div class="d-flex"><button class="btn btn-danger btn-sm mx-1" id="delete_user" onclick="destroy(${row.id});"><i class="fa fa-trash" style="font-size: 11px;"></i></button></div></td>
//                     `;
//                     tableBody.appendChild(tableRow);
//                 });
//             } else {
//                 // Display a message if there's no valid data
//                 tableBody.innerHTML = '<tr><td colspan="7">No valid data available</td></tr>';
//             }
//         },
//         error: function (error) {
//             console.error('Error fetching data:', error);
//             // Display an error message or handle the error as needed
//         }
//     });
// }
// get_data();

//   function store(event) {
//     event.preventDefault();
//     console.log('jfhfhw');
//     var lookup_type = $('#lookupSelectbox').val();
//     var lookup_data_value = $('#lookup_data_value').val();
//     console.log(lookup_type);

//     // Prepare data to send to the server
//     var paraArr = {
//       'lookup_type_id': lookup_type,
//       'lookup_data_value':lookup_data_value
//     };

//     var url = "<?php echo $APIBaseURL; ?>lookup_data";
//     console.log(url);

//     var token = localStorage.getItem('token');
//     var headers = {
//       'Authorization': 'Bearer ' + token
//     };

//     // Make an AJAX request to the server
//     $.ajax({
//       url: url,
//       type: "POST",
//       data: paraArr,
//       headers: headers,
//       success: function (result) {
//         console.log(result, "result");
//         window.location.href = "<?php echo $baseUrl; ?>lookup_data.php"; 
//         console.log("Add successfully");
//         alert('successfully inserted..!')
//       },
//       error: function (error) {
//         console.error('Error fetching data:', error);
//       }
//     });
//   }

// //   get data in select box
// function get() {
//     var url = "<?php echo $APIBaseURL; ?>lookup_type";
//     $.ajax({
//         url: url,
//         type: "GET",
//         headers: {
//             'Authorization':'Bearer' + localStorage.getItem('token')
//         },
//         success: function (data) {
//             console.log(data);
//             const select = document.getElementById('lookupSelectbox');
//             select.innerHTML = ''; // Clear previous data

//             if (data.lookup_type.length > 0) {
//                 data.lookup_type.forEach(row => {
//                     const option = document.createElement('option');
//                     option.textContent = row.name;
                  
//                     option.value = row.id;
//                     select.appendChild(option);
//                 });
//             } else {
//                 select.innerHTML = '<option> No valid data available</option>';
//             }
//         },
//         error: function (error) {
//             console.error('Error fetching data:', error);
//         }
//     });
// }
// get();


// // get data in table
// // delete data
// function destroy(id) {
//   var url = "<?php echo $APIBaseURL; ?>lookup_data/" + id;
//   var token = localStorage.getItem('token');
  
//   if (!token) {
//     console.error("Token is missing");
//     return;
//   }

//   $.ajax({
//     url: url,
//     type: "DELETE",
//     headers: {
//       'Authorization': 'Bearer ' + token
//     },
//     success: function(result) {
//       // window.location.reload();
//       get_data();
//       console.log("Delete request successful");
//       alert("Delete operation successful");
//     },
//     error: function(error) {
//       console.error('Error fetching data:', error);
//       alert("Error during delete operation");
//     }
//   });
// }

   </script>