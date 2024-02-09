
$(document).ready(function(){
    $('#subbtn').click(edit_id_data);
    $('#subbtn_2').click(edit_id_data_2);
    // $('#Search_data').click(search);
          jQuery.validator.addMethod("customPhoneNumber", function(value, element) {
          return /^[6-9]\d{9}$/.test(value); 
          }, "Phone number must start with 6 or above");
    
            
      $("#dealers_form").validate({
      
      rules: {
        dname: {
          required: true,
        },
        fname: {
          required: true,
        },
        last_name:{
          required: true,
        },
        date:{
          required: true,
        },
        mobile:{
          required:true, 
            maxlength:10,
            digits: true,
            customPhoneNumber: true
        },
        email:{
        required:true,
        email:true
          },
        state_:{
          required: true,
        },
        dist:{
          required: true,
        },
      },
  
      messages:{
        dname: {
          required: "This field is required",
        },
        fname: {
          required: "This field is required",
        },
        last_name:{
          required: "This field is required",
        },
        date: {
          required: "This field is required",
        },
        mobile: {
          required:"This field is required",
          maxlength:"Enter only 10 digits",
          digits: "Please enter only digits"
        },
        email:{
            required:"This field is required",
            email:"Please Enter vaild Email",
          },
        
        state_: {
          required: "This field is required",
        },
        dist: {
          required: "This field is required",
        },
      },
      
      submitHandler: function (form) {
        alert("Form submitted successfully!");
      },
      });
  
    
      $("#subbtn").on("click", function () {
    
        $("#dealers_form").valid();
      
      });
      
  
      });


//****get data***
function get_dealers() {
  var apiBaseURL = APIBaseURL;
  var url = apiBaseURL + 'get_dealer_enquiry_data_for_particular_dealer'; // Adjust the API endpoint for Certifide data
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

          if (data.become_dealer_enquiry_details && data.become_dealer_enquiry_details.length > 0) {
              var table = $('#example').DataTable({
                  paging: true,
                  searching: true,
                  columns: [
                    { title: 'S.No.' },
                    { title: 'Date' },
                    { title: 'Brand' },
                    { title: 'Full Name' },
                    { title: 'Mobile' },
                    { title: 'State' },
                    { title: 'District' },
                    { title: 'Action', orderable: false }
                  ]
              });

              data.become_dealer_enquiry_details.forEach(row => {
              

                  // Add row to DataTable
                  table.row.add([
                      serialNumber,
                      row.date,
                      row.brand_name,
                      fullName,
                      row.mobile,
                      row.state,
                      row.district,
                      `<div class="d-flex">
                          <button class="btn btn-warning btn-sm text-white mx-1" data-bs-toggle="modal" onclick="openViewdatacertifed(${row.id});" data-bs-target="#view_model_dealer_1">
                              <i class="fas fa-eye" style="font-size: 11px;"></i>
                          </button> 
                          <button class="btn btn-primary btn-sm btn_edit" onclick="fetch_edit_data_2(${row.id});" data-bs-toggle="modal" data-bs-target="#edit_dealers_certifed" id="yourUniqueIdHere">
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

get_dealers();

  // View data
  function openViewdatacertifed(userId) {
    var apiBaseURL = APIBaseURL;
    var url = apiBaseURL + 'get_become_dealer_enquiry_data_by_id/' + userId;
   
    var headers = {
      'Authorization': 'Bearer ' + localStorage.getItem('token')
    };
  
    $.ajax({
      url: url,
      type: 'GET',
      headers: headers,
    
      success: function(response) {
        var userData = response.become_dealer_enquiry_details[0];
        // document.getElementById('dname1').innerText=userData.dealer_name;
        document.getElementById('bname1').innerText=userData.brand_name;
        document.getElementById('fname_1').innerText=userData.first_name;
        document.getElementById('lname_1').innerText=userData.last_name;
        document.getElementById('number_1').innerText=userData.mobile;
        document.getElementById('date1').innerText=userData.date;
        document.getElementById('state_2').innerText=userData.state;
        document.getElementById('dist_1').innerText=userData.district;
        document.getElementById('tehsil_1').innerText=userData.tehsil;
      },
      error: function(error) {
        console.error('Error fetching user data:', error);
      }
    });
  }


// edit data 

function fetch_edit_data_2(id) {
  var apiBaseURL = APIBaseURL;
  var url = apiBaseURL + 'get_become_dealer_enquiry_data_by_id/' + id;
  console.log(url);

  var headers = {
      'Authorization': 'Bearer ' + localStorage.getItem('token')
  };

  $.ajax({
      url: url,
      type: 'GET',
      headers: headers,
      success: function (response) {
          var Data = response.become_dealer_enquiry_details[0];
          $('#idUser').val(Data.id);
          $('#dname_name').val(Data.dealer_name);
          $("#brand_name_2 option").prop("selected", false);
          $("#brand_name_2 option[value='" + Data.brand_name + "']").prop("selected", true); $('#mobile_1').val(Data.mobile);
          $('#first_nme_1').val(Data.first_name);
          $('#last_name_1').val(Data.last_name);
          $('#date_date').val(Data.date);
          $('#message_1').val(Data.message);
          $("#state_state option").prop("selected", false);
          $("#state_state option[value='" + Data.state+ "']").prop("selected", true);
          
          $("#dist_dist option").prop("selected", false);
          $("#dist_dist option[value='" + Data.district+ "']").prop("selected", true);
          
          $("#tehsil_tehsil option").prop("selected", false);
          $("#tehsil_tehsil option[value='" + Data.tehsil+ "']").prop("selected", true);
         
      },
      error: function (error) {
          console.error('Error fetching user data:', error);
      }
  });
}

function edit_id_data_2() {
  var enquiry_type_id=13;
  // var product_id=13;
  var edit_id = $("#idUser").val();
  console.log(edit_id, 'edit_id');
  var brand_name = $("#brand_name_2").val();
  var first_name = $("#first_nme_1").val();
  var last_name = $("#last_name_1").val();
  var mobile = $("#mobile_1").val();
  var date = $("#date_date").val();
  var state = $("#state_state").val();
  var district = $("#dist_dist").val();
  var tehsil = $("#tehsil_tehsil").val();
  var message = $("#message_1").val();


  if (!/^[6-9]\d{9}$/.test(mobile)) {
      alert("Mobile number must start with 6 or above and should be 10 digits");
      return; // Exit the function if validation fails
  }

  var paraArr = {
      'brand_id': brand_name,
      'first_name': first_name,
      'last_name': last_name,
      'mobile': mobile,
      'date': date,
      'state': state,
      'district': district,
      'tehsil': tehsil,
      'message': message,
      'id': edit_id,
      'enquiry_type_id': enquiry_type_id,
      // 'product_id': product_id,
     
  };
  console.log(paraArr);

  var apiBaseURL = APIBaseURL;
  var url = apiBaseURL + 'customer_enquiries/' + edit_id;
  console.log(url);

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
          window.location.reload();
          console.log("updated successfully");
          alert('successfully updated..!')
      },
      error: function (error) {
          console.error('Error fetching data:', error);
      }
  });
}

function get_dealers_normal() {
  var apiBaseURL = APIBaseURL;
  var url = apiBaseURL + 'get_dealer_enquiry_data'; // Adjust the API endpoint for Normal data
  console.log('dfghjkiuytgf');
  
  $.ajax({
      url: url,
      type: "GET",
      headers: {
          'Authorization': 'Bearer ' + localStorage.getItem('token')
      },
      success: function (data) {
          const tableBody = $('#data-table2'); // Use jQuery selector for the table body
          tableBody.empty(); // Clear previous data

          let serialNumber = 1;

          if (data.dealer_enquiry_details && data.dealer_enquiry_details.length > 0) {
              var table2 = $('#example2').DataTable({
                  paging: true,
                  searching: true,
                  columns: [
                      { title: 'S.No.' },
                      { title: 'Date' },
                      { title: 'Brand' },
                      { title: 'Full Name' },
                      { title: 'Mobile' },
                      { title: 'State' },
                      { title: 'District' },
                      { title: 'Action', orderable: false }
                  ]
              });

              data.dealer_enquiry_details.forEach(row => {
                  const fullName = row.first_name + ' ' + row.last_name;

                  // Add row to DataTable
                  table2.row.add([
                      serialNumber,
                      row.date,
                      row.brand_name,
                      fullName,
                      row.mobile,
                      row.state,
                      row.district,
                      `<div class="d-flex">
                          <button class="btn btn-warning btn-sm text-white mx-1" data-bs-toggle="modal" onclick="openViewdata(${row.id});" data-bs-target="#view_model_dealer">
                              <i class="fas fa-eye" style="font-size: 11px;"></i>
                          </button> 
                          <button class="btn btn-primary btn-sm btn_edit" onclick="fetch_edit_data(${row.id});" data-bs-toggle="modal" data-bs-target="#edit_dealers" id="yourUniqueIdHere">
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

get_dealers_normal();

 // View data Certified
function openViewdata(userId) {
  var apiBaseURL = APIBaseURL;
  var url = apiBaseURL + 'get_dealer_enquiry_data_by_id/' + userId;

  var headers = {
    'Authorization': 'Bearer ' + localStorage.getItem('token')
  };

  $.ajax({
    url: url,
    type: 'GET',
    headers: headers,
  
    success: function(response) {
      var userData = response.dealer_enquiry_details[0];
      // document.getElementById('dname1').innerText=userData.dealer_name;
      document.getElementById('fname1').innerText=userData.first_name;
      document.getElementById('lname1').innerText=userData.last_name;
      document.getElementById('number1').innerText=userData.mobile;
      // document.getElementById('email_1').innerText=userData.email;
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



    
// edit data 

function fetch_edit_data(id) {
  var apiBaseURL = APIBaseURL;
  var url = apiBaseURL + 'get_dealer_enquiry_data_by_id/' + id;
  console.log(url);

  var headers = {
      'Authorization': 'Bearer ' + localStorage.getItem('token')
  };

  $.ajax({
      url: url,
      type: 'GET',
      headers: headers,
      success: function (response) {
          var Data = response.dealer_enquiry_details[0];
          $('#idUser').val(Data.id);
          $('#dname_name').val(Data.dealer_name);
          $("#brand_name option").prop("selected", false);
          $("#brand_name option[value='" + Data.brand_name + "']").prop("selected", true);
          $('#first_name').val(Data.first_name);
          // $('#first_name').val(Data.first_name);
          $('#last_name').val(Data.last_name);
          $('#mobile').val(Data.mobile);
          $('#email').val(Data.email);
          $('#date').val(Data.date);
          $('#message').val(Data.message);
          $("#state_ option").prop("selected", false);
          $("#state_ option[value='" + Data.state+ "']").prop("selected", true);
          
          $("#dist_ option").prop("selected", false);
          $("#dist_ option[value='" + Data.district+ "']").prop("selected", true);
          
          $("#tehsil_ option").prop("selected", false);
          $("#tehsil_ option[value='" + Data.tehsil+ "']").prop("selected", true);
         
      },
      error: function (error) {
          console.error('Error fetching user data:', error);
      }
  });
}

function edit_id_data() {
  var enquiry_type_id=13;
  // var product_id=13;
  var edit_id = $("#idUser").val();
  console.log(edit_id, 'edit_id');
  var brand_name = $("#brand_name_2").val();
  var first_name = $("#first_name").val();
  var last_name = $("#last_name").val();
  var mobile = $("#mobile_1").val();
  var date = $("#date_date").val();
  var state = $("#state_state").val();
  var district = $("#dist_dist").val();
  var tehsil = $("#tehsil_tehsil").val();
  var message = $("#message_1").val();


  if (!/^[6-9]\d{9}$/.test(mobile)) {
      alert("Mobile number must start with 6 or above and should be 10 digits");
      return; // Exit the function if validation fails
  }

  var paraArr = {
      'brand_id': brand_name,
      'mobile': mobile,
      'date': date,
      'first_name': first_name,
      'last_name': last_name,
      'state': state,
      'district': district,
      'tehsil': tehsil,
      'message': message,
      'id': edit_id,
      'enquiry_type_id': enquiry_type_id,
      // 'product_id': product_id,
     
  };
  console.log(paraArr);

  var apiBaseURL = APIBaseURL;
  var url = apiBaseURL + 'customer_enquiries/' + edit_id;
  console.log(url);

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
          window.location.reload();
          console.log("updated successfully");
          alert('successfully updated..!')
      },
      error: function (error) {
          console.error('Error fetching data:', error);
      }
  });
}


function searchdata() {
  var activeTabId = $('.tab-content').find('.tab-pane.active').attr('id');
  if (activeTabId === 'table_data1') {
      // Handle search for Certified table
      var brand = $('#brand_name_1').val();
      var state = $('#state_1').val();
      var district = $('#district_1').val();
      var paraArr = {
          'brand_id': brand,
          'state': state,
          'district': district,
      };

      var apiBaseURL = APIBaseURL;
      var url = apiBaseURL + 'search_for_become_dealer_enquiry';
      $.ajax({
          url: url,
          type: 'POST',
          data: paraArr,
          headers: {
              'Authorization': 'Bearer ' + localStorage.getItem('token')
          },
          success: function (searchData) {
              updateTable(searchData, 'data-table');
          },
          error: function (error) {
              console.error('Error searching for brands:', error);
          }
      });
  } else if (activeTabId === 'table_data2') {
      // Handle search for Normal table
      var brand = $('#brand_name_1').val();
      var state = $('#state_1').val();
      var district = $('#district_1').val();
      var paraArr = {
          'brand_id': brand,
          'state': state,
          'district': district,
      };

      var apiBaseURL = APIBaseURL;
      var url = apiBaseURL + 'search_for__enquiry';
      $.ajax({
          url: url,
          type: 'POST',
          data: paraArr,
          headers: {
              'Authorization': 'Bearer ' + localStorage.getItem('token')
          },
          success: function (searchData) {
              updateTable(searchData, 'data-table2');
          },
          error: function (error) {
              console.error('Error searching for brands:', error);
          }
      });
  }
}

function updateTable(data, tableId) {
  const tableBody = document.getElementById(tableId);
  tableBody.innerHTML = '';
  let serialNumber = 1;
  if (data.dealerData && data.dealerData.length > 0) {
      let tableData = [];
      data.dealerData.forEach(row => {
          const fullName = row.first_name + ' ' + row.last_name;
          let action = `<div class="d-flex">
              <button class="btn btn-warning btn-sm text-white mx-1" data-bs-toggle="modal" onclick="openViewdatacertifed(${row.id});" data-bs-target="#view_model_dealer_1">
                  <i class="fas fa-eye" style="font-size: 11px;"></i>
              </button> 
              <button class="btn btn-primary btn-sm btn_edit" onclick="fetch_edit_data_2(${row.id});" data-bs-toggle="modal" data-bs-target="#edit_dealers_certifed" id="yourUniqueIdHere">
                  <i class="fas fa-edit" style="font-size: 11px;"></i>
              </button>
              <button class="btn btn-danger btn-sm mx-1" onclick="destroy(${row.id});">
                  <i class="fa fa-trash" style="font-size: 11px;"></i>
              </button>
          </div>`;

          tableData.push([
              serialNumber,
              row.date,
              row.brand_name,
              fullName,
              row.mobile,
              row.state,
              row.district,
              action
          ]);

          serialNumber++;
      });

      $('#' + tableId).DataTable().destroy();
      $('#' + tableId).DataTable({
          data: tableData,
          columns: [
              { title: 'S.No.' },
              { title: 'Date' },
              { title: 'Brand' },
              { title: 'Full Name' },
              { title: 'Mobile' },
              { title: 'State' },
              { title: 'District' },
              { title: 'Action', orderable: false }
          ],
          paging: true,
          searching: true,
          // ... other options ...
      });
  } else {
      // Display a message if there's no valid data
      tableBody.innerHTML = '<tr><td colspan="4">No valid data available</td></tr>';
  }
}


// function searchdata() {
//   var activeTabId = $('.tab-content').find('.tab-pane.active').attr('id');
//   if (activeTabId === 'table_data1') {
//       // Handle search for Certified table
//       // Get filter values
//       var brand = $('#brand_name').val();
//       var state = $('#state_1').val();
//       var district = $('#district_1').val();
//       var paraArr = {
//         'brand_id':brand,
//         'state':state,
//         'district':district,
       
//       };
    
//       var apiBaseURL = APIBaseURL;
//       var url = apiBaseURL + 'search_for_become_dealer_enquiry';
//       $.ajax({
//           url:url, 
//           type: 'POST',
//           data: paraArr,
        
//           headers: {
//               'Authorization': 'Bearer ' + localStorage.getItem('token')
//           },
//           success: function (searchData) {
//             updateTable(searchData);
//           },
//           error: function (error) {
//               console.error('Error searching for brands:', error);
//           }
//       });
//     };
//       function updateTable(data) {
//         const tableBody = document.getElementById('data-table');
//         tableBody.innerHTML = '';
//         let serialNumber = 1; 
//         if(data.dealerData && data.dealerData.length > 0) {
//             let tableData = []; 
//             data.dealerData.forEach(row => {
//               const fullName = row.first_name + ' ' + row.last_name;
//                 let action =       `<div class="d-flex">
//                 <button class="btn btn-warning btn-sm text-white mx-1" data-bs-toggle="modal" onclick="openViewdatacertifed(${row.id});" data-bs-target="#view_model_dealer_1">
//                     <i class="fas fa-eye" style="font-size: 11px;"></i>
//                 </button> 
//                 <button class="btn btn-primary btn-sm btn_edit" onclick="fetch_edit_data_2(${row.id});" data-bs-toggle="modal" data-bs-target="#edit_dealers_certifed" id="yourUniqueIdHere">
//                     <i class="fas fa-edit" style="font-size: 11px;"></i>
//                 </button>
//                 <button class="btn btn-danger btn-sm mx-1" onclick="destroy(${row.id});">
//                     <i class="fa fa-trash" style="font-size: 11px;"></i>
//                 </button>
//             </div>`
           
//                 tableData.push([
//                   serialNumber,
//                   row.date,
//                   row.brand_name,
//                   fullName,
//                   row.mobile,
//                   row.state,
//                   row.district,
//                   action
//               ]);
      
//               serialNumber++;
//           });
      
//           $('#example').DataTable().destroy();
//           $('#example').DataTable({
//               data: tableData,
//               columns: [
//                 { title: 'S.No.' },
//                 { title: 'Date' },
//                 { title: 'Brand' },
//                 { title: 'Full Name' },
//                 { title: 'Mobile' },
//                 { title: 'State' },
//                 { title: 'District' },
//                 { title: 'Action', orderable: false }
//               ],
//               paging: true,
//               searching: true,
//               // ... other options ...
//           });
//         } else {
//             // Display a message if there's no valid data
//             tableBody.innerHTML = '<tr><td colspan="4">No valid data available</td></tr>';
//         }
//       }
//   } else if (activeTabId === 'table_data2') {
//       // Handle search for Normal table
//       // Get filter values
//       var brand = $('#brand_name').val();
//       var state = $('#state_1').val();
//       var district = $('#district_1').val();
//       var paraArr = {
//         'brand_id':brand,
//         'state':state,
//         'district':district,
       
//       };
    
//       var apiBaseURL = APIBaseURL;
//       var url = apiBaseURL + 'search_for__enquiry';
//       $.ajax({
//           url:url, 
//           type: 'POST',
//           data: paraArr,
        
//           headers: {
//               'Authorization': 'Bearer ' + localStorage.getItem('token')
//           },
//           success: function (searchData) {
//             updateTable(searchData);
//           },
//           error: function (error) {
//               console.error('Error searching for brands:', error);
//           }
//       });
//     };
//       function updateTable(data) {
//         const tableBody = document.getElementById('data-table2');
//         tableBody.innerHTML = '';
//         let serialNumber = 1; 
//         if(data.dealerData && data.dealerData.length > 0) {
//             let tableData = []; 
//             data.dealerData.forEach(row => {
//               const fullName = row.first_name + ' ' + row.last_name;
//                 let action =   `<div class="d-flex">
//                 <button class="btn btn-warning btn-sm text-white mx-1" data-bs-toggle="modal" onclick="openViewdata(${row.id});" data-bs-target="#view_model_dealer">
//                     <i class="fas fa-eye" style="font-size: 11px;"></i>
//                 </button> 
//                 <button class="btn btn-primary btn-sm btn_edit" onclick="fetch_edit_data(${row.id});" data-bs-toggle="modal" data-bs-target="#edit_dealers" id="yourUniqueIdHere">
//                     <i class="fas fa-edit" style="font-size: 11px;"></i>
//                 </button>
//                 <button class="btn btn-danger btn-sm mx-1" onclick="destroy(${row.id});">
//                     <i class="fa fa-trash" style="font-size: 11px;"></i>
//                 </button>
//             </div>`
           
//                 tableData.push([
//                   serialNumber,
//                   row.date,
//                   row.brand_name,
//                   fullName,
//                   row.mobile,
//                   row.state,
//                   row.district,
//                   action
//               ]);
      
//               serialNumber++;
//           });
      
//           $('#example2').DataTable().destroy();
//           $('#example2').DataTable({
//               data: tableData,
//               columns: [
//                 { title: 'S.No.' },
//               { title: 'Date' },
//               { title: 'Brand' },
//               { title: 'Full Name' },
//               { title: 'Mobile' },
//               { title: 'State' },
//               { title: 'District' },
//               { title: 'Action', orderable: false }
//               ],
//               paging: true,
//               searching: true,
//               // ... other options ...
//           });
//         } else {
//             // Display a message if there's no valid data
//             tableBody.innerHTML = '<tr><td colspan="4">No valid data available</td></tr>';
//         }
//       }
//   }


// Function to handle reset based on active tab
function resetform() {
  var activeTabId = $('.tab-content').find('.tab-pane.active').attr('id');
  if (activeTabId === 'table_data1') {
      // Reset filter values and table for Certified table
      $('#brand_name').val('');
      $('#state_1').val('Select State');
      $('#district_1').val('Select District');
      // Reset table_data tbody to its original state
  } else if (activeTabId === 'table_data2') {
      // Reset filter values and table for Normal table
      $('#brand_name').val('');
      $('#state_1').val('Select State');
      $('#district_1').val('Select District');
      // Reset data-table2 tbody to its original state
  }
}

// Search data function
// function searchdata() {
//   var dealer_name = $('#dealers_1').val();
//   var state = $('#state_1').val();
//   var district = $('#district_1').val();

//   // Check if any search criteria are provided
//   if (!dealer_name && (!state || state === 'Select State') && (!district || district === 'Select District')) {
//     console.error('Please provide at least one valid search criteria');
//     return; // Exit the function if no valid search criteria are provided
//   }

//   // Check which fields are filled
//   var searchParams = {};

//   if (dealer_name) {
//     searchParams['dealer_name'] = dealer_name;
//   }

//   if (state && state !== 'Select State') {
//     searchParams['state'] = state;
//   }

//   if (district && district !== 'Select District') {
//     searchParams['district'] = district;
//   }

//   console.log('Search Parameters:', searchParams); // Log search parameters for debugging

//   var apiBaseURL = APIBaseURL;
//   var url = apiBaseURL + 'search_for_dealer_for_enquiry';

//   $.ajax({
//     url: url,
//     type: 'POST',
//     data: searchParams,
//     headers: {
//       'Authorization': 'Bearer ' + localStorage.getItem('token')
//     },
//     success: function (searchData) {
//       console.log('API Response:', searchData); // Log API response for debugging
//       updateTable(searchData);
//     },
//     error: function (error) {
//       console.error('Error searching for brands:', error);
//     }
//   });
// }
// Update table function
// function updateTable(data) {
//   const tableBody = document.getElementById('data-table');
//   tableBody.innerHTML = '';
//   let serialNumber = 1;

//   if (data.dealerData && data.dealerData.length > 0) {
//     let tableData = [];
//     data.dealerData.forEach(row => {
//       const fullName = row.first_name + ' ' + row.last_name;
//       const action = buildActionButtons(row.id);

//       tableData.push([
//         serialNumber,
//         row.date,
//         row.dealer_name,
//         fullName,
//         row.mobile,
//         row.state,
//         row.district,
//         action
//       ]);

//       serialNumber++;
//     });

//     $('#example').DataTable().destroy();
//     $('#example').DataTable({
//       data: tableData,
//       columns: [
//         { title: 'S.No.' },
//         { title: 'Date' },
//         { title: 'Dealer Name' },
//         { title: 'Full Name' },
//         { title: 'Mobile' },
//         { title: 'State' },
//         { title: 'District' },
//         { title: 'Action', orderable: false }
//       ],
//       paging: true,
//       searching: false,
//       // ... other options ...
//     });
//   } else {
//     tableBody.innerHTML = '<tr><td colspan="8">No valid data available</td></tr>';
//   }
// }

// Function to build action buttons
// function buildActionButtons(id) {
//   return `<div class="d-flex">
//     <button class="btn btn-warning btn-sm text-white mx-1" data-bs-toggle="modal" onclick="openViewdata(${id});" data-bs-target="#view_model_dealer">
//       <i class="fas fa-eye" style="font-size: 11px;"></i>
//     </button> 
//     <button class="btn btn-primary btn-sm btn_edit" onclick="fetch_edit_data(${id});" data-bs-toggle="modal" data-bs-target="#edit_dealers" id="yourUniqueIdHere">
//       <i class="fas fa-edit" style="font-size: 11px;"></i>
//     </button>
//     <button class="btn btn-danger btn-sm mx-1" onclick="destroy(${id});">
//       <i class="fa fa-trash" style="font-size: 11px;"></i>
//     </button>
//   </div>`;
// }

// // Reset form function
// function resetform() {
//   // Clear input fields
//   $('#dealers_1').val('');
//   $('#state_1').val('');
//   $('#district_1').val('');

//   // Fetch all data and update the table
//   fetchAllData();
// }

// Fetch all data function
function fetchAllData() {
  var apiBaseURL = APIBaseURL;
  var url = apiBaseURL + 'search_for_dealer_for_enquiry';

  $.ajax({
    url: url,
    type: 'POST',
    data: {}, // Empty data to fetch all records
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


   // **delete***
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
        window.location.reload();
        get_dealers();
  
        console.log("Delete request successful");
        alert("Delete operation successful");
      },
      error: function(error) {
        console.error('Error fetching data:', error);
        alert("Error during delete operation");
      }
    });
  }
  


  

// get brand
function get() {
  var apiBaseURL = APIBaseURL;
  var url = apiBaseURL + 'getBrands';

  $.ajax({
    url: url,
    type: "GET",
    headers: {
      'Authorization': 'Bearer ' + localStorage.getItem('token')
    },
    success: function (data) {
      console.log(data);

      const select = $('#brand_name_1');
      select.empty(); // Clear existing options

      // Add a default option
      select.append('<option selected disabled value="">Please select Brand</option>');

      // Use an object to keep track of unique brands
      var uniqueBrands = {};

      $.each(data.brands, function (index, brand) {
        var brand_id = brand.id;
        var brand_name = brand.brand_name;

        // Check if the brand ID is not already in the object
        if (!uniqueBrands[brand_id]) {
          // Add brand ID to the object
          uniqueBrands[brand_id] = true;

          // Append the option to the dropdown
          select.append('<option value="' + brand_id + '">' + brand_name + '</option>');
        }
      });
    },
    error: function (error) {
      console.error('Error fetching data:', error);
    }
  });
}
get();

function get_search() {
  var apiBaseURL = APIBaseURL;
  var url = apiBaseURL + 'getBrands';

  $.ajax({
    url: url,
    type: "GET",
    headers: {
      'Authorization': 'Bearer ' + localStorage.getItem('token')
    },
    success: function (data) {
      console.log(data);

      const select = $('#brand_name_2');
      select.empty(); // Clear existing options

      // Add a default option
      select.append('<option selected disabled value="">Please select Brand</option>');

      // Use an object to keep track of unique brands
      var uniqueBrands = {};

      $.each(data.brands, function (index, brand) {
        var brand_id = brand.id;
        var brand_name = brand.brand_name;

        // Check if the brand ID is not already in the object
        if (!uniqueBrands[brand_id]) {
          // Add brand ID to the object
          uniqueBrands[brand_id] = true;

          // Append the option to the dropdown
          select.append('<option value="' + brand_id + '">' + brand_name + '</option>');
        }
      });
    },
    error: function (error) {
      console.error('Error fetching data:', error);
    }
  });
}
get_search();