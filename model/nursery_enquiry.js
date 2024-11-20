$(document).ready(function(){
  // $('#Search').click(search_data);
  $('#undate_btn_nursery_enq').click(edit_data_id);
  
        jQuery.validator.addMethod("customPhoneNumber", function(value, element) {
        return /^[6-9]\d{9}$/.test(value); 
        }, "Phone number must start with 6 or above");
  
          
    $("#narsary_list_enq_form").validate({
    
    rules: {
        name: {
        required: true,
      },
      fname:{
        required: true,
      },
      lname:{
        required: true,
      },
      number:{
        required:true, 
          maxlength:10,
          digits: true,
          customPhoneNumber: true
      },
      email:{

        required:true,
       email:true
      },
      date:{
        required: true,
      },
      state_:{
        required: true,
      },
      dist:{
        required: true,
      },
      loc: {
        required: true
      }
    },

    messages:{
        name: {
        required: "This field is required",
      },
      fname:{
        required: "This field is required",
      },
      lname: {
        required: "This field is required",
      },
      number: {
        required:"This field is required",
        maxlength:"Enter only 10 digits",
        digits: "Please enter only digits"
      },
      email:{

        required:"This field is required",
        email:"Please Enter vaild Email",
      },
      date: {
        required: "This field is required",
      },
      state_: {
        required: "This field is required",
      },
      dist: {
        required: "This field is required",
      },
      loc: {
        required:"This field is required",
        }
    },
    
    submitHandler: function (form) {
      alert("Form submitted successfully!");
    },
    });

  
    $("#undate_btn_nursery_enq").on("click", function () {
  
      $("#narsary_list_enq_form").valid();
    
    });
    

    });
  //****get data***
  function get_nursery() {
    var apiBaseURL = APIBaseURL;
    var url = apiBaseURL + 'get_nursery_enquiry_data';
    console.log('dfghjkiuytgf');
    
    $.ajax({
        url: url,
        type: "GET",
        headers: {
            'Authorization': 'Bearer ' + localStorage.getItem('token')
        },
        success: function (data) {
            const tableBody = $('#data-table'); // Use jQuery selector for the table body
            tableBody.empty(); // Clear previous data
  
            let serialNumber = 1;
  
            if (data.nursery_enquiry_data && data.nursery_enquiry_data.length > 0) {
                var table = $('#example').DataTable({
                    paging: true,
                    searching: true,
                    columns: [
                        { title: 'S.No.' },
                        { title: 'Date' },
                        { title: 'Nursery Name' },
                        { title: 'Full Name' },
                        { title: 'Mobile' },
                        { title: 'State' },
                        { title: 'District' },
                        { title: 'Action', orderable: false }
                    ]
                });
  
                // Reverse the array to prepend latest data to the top
                data.nursery_enquiry_data.reverse().forEach(row => {
                    const fullName = row.first_name + ' ' + row.last_name;
  
                    // Add row to DataTable
                    table.row.add([
                        serialNumber,
                        row.date,
                        row.nursery_name,
                        fullName,
                        row.mobile,
                        row.state_name,
                        row.district_name,
                        `<div class="d-flex">
                            <button class="btn btn-warning btn-sm text-white mx-1" data-bs-toggle="modal" onclick="openViewdata(${row.id});" data-bs-target="#view_model_nursery_enq">
                                <i class="fas fa-eye" style="font-size: 11px;"></i>
                            </button>
                            <button class="btn btn-primary btn-sm btn_edit" onclick="fetch_edit_data(${row.id});" data-bs-toggle="modal" data-bs-target="#editmodel_nursery_enq" id="yourUniqueIdHere">
                                <i class="fas fa-edit" style="font-size: 11px;"></i>
                            </button>
                            <button class="btn btn-danger btn-sm mx-1" onclick="destroy(${row.id});">
                                <i class="fa fa-trash" style="font-size: 11px;"></i>
                            </button>
                        </div>`
                    ]).draw(false);
  
                    serialNumber++;
                });
            } else {
                tableBody.html('<tr><td colspan="6">No valid data available</td></tr>');
            }
        },
        error: function (error) {
            console.error('Error fetching data:', error);
            if(error.status == '401' && error.responseJSON.error == 'Token expired or invalid'){
              $("#errorStatusLoading").modal('show');
              $("#errorStatusLoading").find('.modal-title').html('Error');
              $("#errorStatusLoading").find('.modal-body').html(error.responseJSON.error);
              window.location.href = baseUrl + "login.php"; 

            }
        }
    });
  }
  get_nursery();
  

//****delete data***
function destroy(id) {
    var apiBaseURL = APIBaseURL;
    var url = apiBaseURL + 'customer_enquiries/' + id;
    console.log(url);
    var token = localStorage.getItem('token');
  
    if (!token) {
      console.error("Token is missing");
      return;
    }
    var isConfirmed = confirm("Are you sure you want to delete this data?");
    if (!isConfirmed) {
      return;
    }
  
    $.ajax({
      url: url,
      type: "DELETE",
      headers: {
        'Authorization': 'Bearer ' + token
      },
      success: function(result) {
        // get_tyre_list();
        window.location.reload();
        console.log("Delete request successful");
        alert("Delete operation successful");
      },
      error: function(error) {
        console.error('Error fetching data:', error);
        alert("Error during delete operation");
      }
    });
  }

  
// View data
function openViewdata(userId) {
    var apiBaseURL = APIBaseURL;
    var url = apiBaseURL + 'get_nursery_enquiry_data_by_id/' + userId;
  
    var headers = {
      'Authorization': 'Bearer ' + localStorage.getItem('token')
    };
  
    $.ajax({
      url: url,
      type: 'GET',
      headers: headers,
    
      success: function(response) {
        var userData = response.nursery_enquiry_data[0];
        document.getElementById('nname1').innerText=userData.nursery_name;
        document.getElementById('fname1').innerText=userData.first_name;
        document.getElementById('lname1').innerText=userData.last_name;
        document.getElementById('number1').innerText=userData.mobile;
        // document.getElementById('email_1').innerText=userData.email;
        document.getElementById('date_1').innerText=userData.date;
        document.getElementById('state1').innerText=userData.state_name;
        document.getElementById('dist1').innerText=userData.district_name;
        document.getElementById('tehsil1').innerText=userData.tehsil_name;
      },
      error: function(error) {
        console.error('Error fetching user data:', error);
      }
    });
  }

function fetch_edit_data(id) {
  var apiBaseURL = APIBaseURL;
  var url = apiBaseURL + 'get_nursery_enquiry_data_by_id/' + id;
  console.log(url);

  var headers = {
      'Authorization': 'Bearer ' + localStorage.getItem('token')
  };

  $.ajax({
      url: url,
      type: 'GET',
      headers: headers,
      success: function (response) {
          var Data = response.nursery_enquiry_data[0];
          $('#userId').val(Data.id);
          $('#nursery_name1').val(Data.nursery_name);
          $('#fname_2').val(Data.first_name);
          $('#lname_2').val(Data.last_name);
          $('#number_2').val(Data.mobile);
          // $('#email_2').val(Data.email);
          $('#date_2').val(Data.date);
          $('#product_id').val(Data.product_subject_id);

          setSelectedOption('state_2', Data.state_id);
          getDistricts(Data.state_id, 'district-dropdown', 'tehsil-dropdown');
          setTimeout(function() {
            setSelectedOption('dist_2', Data.district_id);
            populateTehsil(Data.district_id, 'tehsil-dropdown', Data.tehsil_id);
          }, 1000); 
        
        },
        error: function(error) {
          console.error('Error fetching user data:', error);
        }
      });
    }
    
      function setSelectedOption(selectId, value) {
        var select = document.getElementById(selectId);
        for (var i = 0; i < select.options.length; i++) {
          if (select.options[i].value == value) {
            select.selectedIndex = i;
            break;
          }
        }
      }
      
      function populateTehsil(selectId, value) {
        var select = document.getElementById(selectId);
        for (var i = 0; i < select.options.length; i++) {
          if (select.options[i].value == value) {
            select.options[i].selected = true;
            break;
          }
        }
      }

// get_hire_tract();

function edit_data_id() {
  var enquiry_type_id = $("#enquiry_type_id").val();
  var product_id = $("#product_id").val();
  var edit_id = $("#userId").val();
  var nursery_name = $("#nursery_name1").val();
  var first_name = $("#fname_2").val();
  var last_name = $("#lname_2").val();
  var mobile = $("#number_2").val();
  var date = $("#date_2").val();
  var state = $("#state_2").val();
  var district = $("#dist_2").val();
  var tehsil = $("#tehsil_2").val();

  // Validate mobile number
  if (!/^[6-9]\d{9}$/.test(mobile)) {
      alert("Mobile number must start with 6 or above and should be 10 digits");
      return; // Exit the function if validation fails
  }

  var paraArr = {
      'nursery_name': nursery_name,
      'first_name': first_name,
      'last_name': last_name,
      'mobile': mobile,
      'date': date,
      'state': state,
      'district': district,
      'tehsil': tehsil,
      'id': edit_id,
      'enquiry_type_id': enquiry_type_id,
      'product_id': product_id
  };

  var apiBaseURL = APIBaseURL;
  var url = apiBaseURL + 'customer_enquiries/' + edit_id;

  var headers = {
      'Authorization': 'Bearer ' + localStorage.getItem('token')
  };

  $.ajax({
      url: url,
      type: "PUT",
      data: paraArr,
      headers: headers,
      success: function (result) {
          console.log(result, "result");

          var table = $('#example').DataTable();
          var rowIndex = -1; // Default value for rowIndex

          table.rows().every(function (index) {
              var rowData = this.data(); 
              var rowEditId = rowData[0]; 

              if (rowEditId == edit_id) {
                  rowIndex = index; 
                  return false; 
              }
          });

          if (rowIndex != -1) {
              var rowData = [
                  '', // S.No.
                  date,
                  nursery_name,
                  first_name + ' ' + last_name,
                  mobile,
                  state,
                  district,
                  `<div class="d-flex">
                      <button class="btn btn-warning btn-sm text-white mx-1" data-bs-toggle="modal" onclick="openViewdata(${edit_id});" data-bs-target="#view_model_nursery_enq">
                          <i class="fas fa-eye" style="font-size: 11px;"></i>
                      </button>
                      <button class="btn btn-primary btn-sm btn_edit" onclick="fetch_edit_data(${edit_id});" data-bs-toggle="modal" data-bs-target="#editmodel_nursery_enq" id="yourUniqueIdHere">
                          <i class="fas fa-edit" style="font-size: 11px;"></i>
                      </button>
                      <button class="btn btn-danger btn-sm mx-1" onclick="destroy(${edit_id});">
                          <i class="fa fa-trash" style="font-size: 11px;"></i>
                      </button>
                  </div>`
              ];

              // Update the data in the DataTable at the specified row index
              table.row(rowIndex).data(rowData).draw(false);
              console.log("Updated successfully");
              alert('Successfully updated..!');
          } else {
              console.error("Row index not found");
              alert('Successfully updated..!');
              window.location.reload();
          }
      },
      error: function (error) {
          console.error('Error fetching data:', error);
      }
  });
}


function search_data() {
  var nursery_name = $('#nursery_name').val();
  var state = $('#state_1').val();
  var district = $('#dist_1').val();

  // Create an object to store search parameters
  var paraArr = {
    // 'brand_id': brand_name,
    'nursery_name': nursery_name,
    'state': state,
    'district': district,
  };


  console.log('Search Parameters:', paraArr);

  var apiBaseURL = APIBaseURL;
  var url = apiBaseURL + 'search_for_nursery_enquiry';

  $.ajax({
    url: url,
    type: 'POST',
    data: paraArr,
    headers: {
      'Authorization': 'Bearer ' + localStorage.getItem('token')
    },
    success: function (searchData) {
      console.log('API Response:', searchData); // Log API response for debugging
      updateTable(searchData);
    },
    error: function (error) {
      console.error('Error searching for brands:', error);
  
      if (error.status === 400) {
        // Display a message in the table when no valid data is available
        updateTable({ nurseryEnquiry: [] });
      } else {
        // Handle other errors as needed
      }
    }
  });
}

// Update table function
function updateTable(data) {
  const tableBody = document.getElementById('data-table');
  tableBody.innerHTML = '';
  let serialNumber = 1;

  if (data.nurseryEnquiry && data.nurseryEnquiry.length > 0) {
    let tableData = [];
    data.nurseryEnquiry.forEach(row => {
      const fullName = row.first_name + ' ' + row.last_name;
      const action = buildActionButtons(row.id);

      tableData.push([
        serialNumber,
        row.date,
        row.nursery_name,
        fullName,
        row.mobile,
        row.state_name,
        row.district_name,
        action
      ]);

      serialNumber++;
    });

    $('#example').DataTable().destroy();
    $('#example').DataTable({
      data: tableData,
      columns: [
        { title: 'S.No.' },
        { title: 'Date' },
        { title: 'Nursery Name' },
        { title: 'Full Name' },
        { title: 'Mobile' },
        { title: 'State' },
        { title: 'District' },
        { title: 'Action', orderable: false }
      ],
      paging: true,
      searching: false,
      // ... other options ...
    });
  } else {
    tableBody.innerHTML = '<tr><td colspan="8">No valid data available</td></tr>';
    
  }
}
// Function to build action buttons
function buildActionButtons(id) {
  return  `<div class="d-flex">
  <button class="btn btn-warning btn-sm text-white mx-1" data-bs-toggle="modal" onclick="openViewdata(${id});" data-bs-target="#view_model_nursery_enq">
      <i class="fas fa-eye" style="font-size: 11px;"></i>
  </button>
  <button class="btn btn-primary btn-sm btn_edit" onclick="fetch_edit_data(${id});" data-bs-toggle="modal" data-bs-target="#editmodel_nursery_enq" id="yourUniqueIdHere">
      <i class="fas fa-edit" style="font-size: 11px;"></i>
  </button>
  <button class="btn btn-danger btn-sm mx-1" onclick="destroy(${id});">
      <i class="fa fa-trash" style="font-size: 11px;"></i>
  </button>
</div>`;
}
// Reset form function
function resetform() {
  // Clear input fields
  $('#nursery_name').val('');
  $('#state_1').val('');
  $('#dist_1').val('');

  // Fetch all data and update the table
  fetchAllData();
}
// Fetch all data function
function fetchAllData() {
  var apiBaseURL = APIBaseURL;
  var url = apiBaseURL + 'search_for_nursery_enquiry';

  $.ajax({
    url: url,
    type: 'POST',
    data: {}, 
    headers: {
      'Authorization': 'Bearer ' + localStorage.getItem('token')
    },
    success: function (allData) {
      updateTable(allData);
    },
    error: function (error) {
      console.error('Error fetching all data:', error);
    }
  });
}

