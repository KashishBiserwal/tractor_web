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

              data.nursery_enquiry_data.forEach(row => {
                  const fullName = row.first_name + ' ' + row.last_name;

                  // Add row to DataTable
                  table.row.add([
                      serialNumber,
                      row.date,
                      row.nursery_name,
                      fullName,
                      row.mobile,
                      row.state,
                      row.district,
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
        document.getElementById('email_1').innerText=userData.email;
        document.getElementById('date_1').innerText=userData.date;
        document.getElementById('state1').innerText=userData.state;
        document.getElementById('dist1').innerText=userData.district;
        document.getElementById('tehsil1').innerText=userData.tehsil;
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
          $('#email_2').val(Data.email);
          $('#date_2').val(Data.date);
          // $('#state_2').val(Data.state);
          // $('#dist_2').val(Data.district);
          // $('#tehsil_2').val(Data.tehsil);

          $("#state_2 option").prop("selected", false);
          $("#state_2 option[value='" + Data.state+ "']").prop("selected", true);
          
          $("#dist_2 option").prop("selected", false);
          $("#dist_2 option[value='" + Data.district+ "']").prop("selected", true);
          
          $("#tehsil_2 option").prop("selected", false);
          $("#tehsil_2 option[value='" + Data.tehsil+ "']").prop("selected", true);
      },
      error: function (error) {
          console.error('Error fetching user data:', error);
      }
  });
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
var email = $("#email_2").val();
var date = $("#date_2").val();
var state = $("#state_2").val();
var district = $("#dist_2").val();
var tehsil = $("#tehsil_2").val();
var _method = 'put';

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
    'email': email,
    'date': date,
    'state': state,
    'district': district,
    'tehsil': tehsil,
    'id': edit_id,
    'enquiry_type_id': enquiry_type_id,
    'product_id': product_id,
    '_method': _method,
};

var apiBaseURL = APIBaseURL;
var url = apiBaseURL + 'customer_enquiries/' + edit_id;

var headers = {
    'Authorization': 'Bearer ' + localStorage.getItem('token')
};

$.ajax({
    url: url,
    type: "POST",
    data: paraArr,
    headers: headers,
    success: function (result) {
        console.log(result, "result");
        window.location.reload();
        console.log("updated successfully");
        alert('successfully updated..!')
    },
    error: function (error) {
        console.error('Error fetching data:', error);
    }
});
}


// function search_data() {
//   var nursery_name = $('#nursery_name').val();
//   var state = $('#state_1').val();
//   var district = $('#dist_1').val();

//   // Create an object to store search parameters with the first non-empty value
//   var paraArr = {};

//   if (nursery_name.trim() !== '') {
//     paraArr['nursery_name'] = nursery_name.trim();
//   } else if (state.trim() !== '') {
//     paraArr['state'] = state.trim();
//   } else if (district.trim() !== '') {
//     paraArr['district'] = district.trim();
//   }

//   console.log('Search Parameters:', paraArr);

//   var apiBaseURL = APIBaseURL;
//   var url = apiBaseURL + 'search_for_nursery_enquiry';

//   $.ajax({
//     url: url,
//     type: 'POST',
//     data: paraArr,
//     headers: {
//       'Authorization': 'Bearer ' + localStorage.getItem('token')
//     },
//     success: function (searchData) {
//       updateTable(searchData);
//     },
//     error: function (error) {
//       console.error('Error searching for brands:', error);
//     }
//   });
// }
// function updateTable(data) {
//   const tableBody = document.getElementById('data-table');
//   tableBody.innerHTML = '';
 

//   if(data.nurseryEnquiry && data.nurseryEnquiry.length > 0) {
//       let tableData = []; 
//       let serialNumber = 1; 
//       data.nurseryEnquiry.forEach(row => {

//         const fullName = row.first_name + ' ' + row.last_name;
//           let action =  `<div class="d-flex">
//           <button class="btn btn-warning btn-sm text-white mx-1" data-bs-toggle="modal" onclick="openViewdata(${row.id});" data-bs-target="#view_model_nursery_enq">
//               <i class="fas fa-eye" style="font-size: 11px;"></i>
//           </button>
//           <button class="btn btn-primary btn-sm btn_edit" onclick="fetch_edit_data(${row.id});" data-bs-toggle="modal" data-bs-target="#editmodel_nursery_enq" id="yourUniqueIdHere">
//               <i class="fas fa-edit" style="font-size: 11px;"></i>
//           </button>
//           <button class="btn btn-danger btn-sm mx-1" onclick="destroy(${row.id});">
//               <i class="fa fa-trash" style="font-size: 11px;"></i>
//           </button>
//       </div>`;

//           tableData.push([
//             serialNumber,
//             row.date,
//             row.nursery_name,
//             fullName,
//             row.mobile,
//             row.state,
//             row.district,
//             action
//         ]);

//         serialNumber++;
//     });

//     // Initialize DataTable after preparing the tableData
//     $('#example').DataTable().destroy();
//     $('#example').DataTable({
//             data: tableData,
//             columns: [
//               { title: 'S.No.' },
//               { title: 'Date' },
//               { title: 'Nursery Name' },
//               { title: 'Full Name' },
//               { title: 'Mobile' },
//               { title: 'State' },
//               { title: 'District' },
//               { title: 'Action', orderable: false } 
//           ],
//             paging: true,
//             searching: false,
//             // ... other options ...
//         });
//   } else {
//       // Display a message if there's no valid data
//       tableBody.innerHTML = '<tr><td colspan="4">No valid data available</td></tr>';
//   }
// }

// function resetform(){
//   $('#nursery_name').val('');
//   $('#state_1').val('');
//   $('#dist_1').val('');
//   // get_nursery();
// }


// function search_data() {
//   var nursery_name = $('#nursery_name').val();
//   var state = $('#state_1').val();
//   var district = $('#dist_1').val();

//   // Create an object to store search parameters
//   var paraArr = {};

//   if (nursery_name.trim() !== '') {
//     paraArr['nursery_name'] = nursery_name.trim();
//   }

//   if (state.trim() !== '') {
//     paraArr['state'] = state.trim();
//   }

//   if (district.trim() !== '') {
//     paraArr['district'] = district.trim();
//   }

//   console.log('Search Parameters:', paraArr);

//   var apiBaseURL = APIBaseURL;
//   var url = apiBaseURL + 'search_for_nursery_enquiry';

//   $.ajax({
//     url: url,
//     type: 'POST',
//     data: paraArr,
//     headers: {
//       'Authorization': 'Bearer ' + localStorage.getItem('token')
//     },
//     success: function (searchData) {
//       updateTable(searchData);
//     },
//     error: function (error) {
//       console.error('Error searching for brands:', error);
//     }
//   });
// }


// Search data function
function searchdata() {
  var nursery_name = $('#nursery_name').val();
  var state = $('#state_1').val();
  var district = $('#dist_1').val();

  // Check if any search criteria are provided
  if (!nursery_name && (!state || state === 'Select State') && (!district || district === 'Select District')) {
    console.error('Please provide at least one valid search criteria');
    return; // Exit the function if no valid search criteria are provided
  }

  // Check which fields are filled
  var searchParams = {};

  if (nursery_name) {
    searchParams['nursery_name'] = nursery_name;
  }

  if (state && state !== 'Select State') {
    searchParams['state'] = state;
  }

  if (district && district !== 'Select District') {
    searchParams['district'] = district;
  }

  console.log('Search Parameters:', searchParams); // Log search parameters for debugging

  var apiBaseURL = APIBaseURL;
  var url = apiBaseURL + 'search_for_nursery_enquiry';

  $.ajax({
    url: url,
    type: 'POST',
    data: searchParams,
    headers: {
      'Authorization': 'Bearer ' + localStorage.getItem('token')
    },
    success: function (searchData) {
      console.log('API Response:', searchData); // Log API response for debugging
      updateTable(searchData);
    },
    error: function (error) {
      console.error('Error searching for brands:', error);
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
        row.state,
        row.district,
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
  <button class="btn btn-warning btn-sm text-white mx-1" data-bs-toggle="modal" onclick="openViewdata(${row.id});" data-bs-target="#view_model_nursery_enq">
      <i class="fas fa-eye" style="font-size: 11px;"></i>
  </button>
  <button class="btn btn-primary btn-sm btn_edit" onclick="fetch_edit_data(${row.id});" data-bs-toggle="modal" data-bs-target="#editmodel_nursery_enq" id="yourUniqueIdHere">
      <i class="fas fa-edit" style="font-size: 11px;"></i>
  </button>
  <button class="btn btn-danger btn-sm mx-1" onclick="destroy(${row.id});">
      <i class="fa fa-trash" style="font-size: 11px;"></i>
  </button>
</div>`;
}
function resetform() {
  $('#nursery_name').val('');
  $('#state_1').val('');
  $('#dist_1').val('');
  // get_nursery();
}