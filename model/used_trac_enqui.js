 
  $(document).ready(function(){
   
    $('#dataeditbtn').click(edit_id);
   
    // $('#Search').click(search);
          jQuery.validator.addMethod("customPhoneNumber", function(value, element) {
          return /^[6-9]\d{9}$/.test(value); 
          }, "Phone number must start with 6 or above");
    
            
      $("#old_tractor_form").validate({
      
      rules: {
        bname: {
          required: true,
        },
        mname: {
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
        }
    },
        messages:{
          bname: {
            required: "This field is required",
          },
          mname: {
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
      $("#dataeditbtn").on("click", function () {
    
        $("#old_tractor_form").valid();
      
      });
    });
 

 //****get data***
 function get_old_tractor() {
  var apiBaseURL = APIBaseURL;
  var url = apiBaseURL + 'get_enquiry_for_old_tractor';
  console.log('dfghjkiuytgf');
  
  $.ajax({
      url: url,
      type: "GET",
      headers: {
          'Authorization': 'Bearer ' + localStorage.getItem('token')
      },
      success: function (data) {
          const tableBody = $('#data-table'); // Use jQuery selector for the table body
          let serialNumber = 1;

          if (data.enquiry_data && data.enquiry_data.length > 0) {
              var table = $('#example').DataTable({
                  paging: true,
                  searching: true,
                  columns: [
                      { title: 'S.No.' },
                      { title: 'Date' },
                      { title: 'Brand' },
                      { title: 'Model' },
                      { title: 'Full Name' },
                      { title: 'Mobile' },
                      { title: 'State' },
                      { title: 'District' },
                      { title: 'Action', orderable: false }
                  ]
              });

              // Clear table before appending new data
              table.clear();

              // Loop through the data in reverse order to prepend rows
              for (let i = data.enquiry_data.length - 1; i >= 0; i--) {
                  const row = data.enquiry_data[i];
                  const fullName = row.first_name + ' ' + row.last_name;

                  // Add row to DataTable
                  table.row.add([
                      serialNumber,
                      row.date,
                      row.brand_name,
                      row.model,
                      fullName,
                      row.mobile,
                      row.state_name,
                      row.district_name,
                      `<div class="d-flex">
                          <button class="btn btn-warning btn-sm text-white mx-1" data-bs-toggle="modal" onclick="openViewdata(${row.id});" data-bs-target="#view_model_tractor_enq">
                              <i class="fas fa-eye" style="font-size: 11px;"></i>
                          </button>
                          <button class="btn btn-primary btn-sm btn_edit" onclick="fetch_edit_data(${row.id});" data-bs-toggle="modal" data-bs-target="#editmodel_oldtractor_enq" id="yourUniqueIdHere">
                              <i class="fas fa-edit" style="font-size: 11px;"></i>
                          </button>
                          <button class="btn btn-danger btn-sm mx-1" onclick="destroy(${row.id});">
                              <i class="fa fa-trash" style="font-size: 11px;"></i>
                          </button>
                      </div>`
                  ]);

                  serialNumber++;
              }

              // Draw the table to update the view
              table.draw();
          } else {
              // If no data available, show a message
              tableBody.html('<tr><td colspan="9">No valid data available</td></tr>');
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
get_old_tractor();


function get() {
  var url = 'http://tractor-api.divyaltech.com/api/customer/get_brand_for_finance';
  $.ajax({
      url: url,
      type: "GET",
      headers: {
          'Authorization': 'Bearer ' + localStorage.getItem('token')
      },
      success: function (data) {
          console.log(data);
          const selects = document.querySelectorAll('#brand_name1');

          selects.forEach(select => {
              select.innerHTML = '<option selected disabled value="">Please select an option</option>';

              if (data.brands.length > 0) {
                  data.brands.forEach(row => {
                      const option = document.createElement('option');
                      option.textContent = row.brand_name;
                      option.value = row.id;
                      console.log(option);
                      select.appendChild(option);
                  });

                  // Add event listener to brand dropdown
                  select.addEventListener('change', function() {
                      const selectedBrandId = this.value;
                      get_model(selectedBrandId);
                  });
              } else {
                  select.innerHTML = '<option>No valid data available</option>';
              }
          });
      },
      error: function (error) {
          console.error('Error fetching data:', error);
      }
  });
}

function get_model(brand_id) {
  var url = 'http://tractor-api.divyaltech.com/api/customer/get_brand_model/' + brand_id;
  console.log('Requesting models for brand ID:', brand_id); // Debugging statement
  $.ajax({
      url: url,
      type: "GET",
      headers: {
          'Authorization': 'Bearer ' + localStorage.getItem('token')
      },
      success: function (data) {
          console.log('Received models data:', data); // Debugging statement
          const selects = document.querySelectorAll('#model2');

          selects.forEach(select => {
              select.innerHTML = '<option selected disabled value="">Please select an option</option>';

              if (data.model && data.model.length > 0) {
                  data.model.forEach(row => {
                      const option = document.createElement('option');
                      option.textContent = row.model;
                      option.value = row.model;
                      console.log('Adding model:', option); // Debugging statement
                      select.appendChild(option);
                  });
              } else {
                  select.innerHTML = '<option>No valid data available</option>';
              }
          });
      },
      error: function (error) {
          console.error('Error fetching model data:', error);
      }
  });
}
get();
// brand
function get_search() {
  var url = 'http://tractor-api.divyaltech.com/api/customer/get_brand_for_finance';;

  $.ajax({
    url: url,
    type: "GET",
    headers: {
      'Authorization': 'Bearer ' + localStorage.getItem('token')
    },
    success: function (data) {
      console.log(data);

      const select = $('#brand_name');
      select.empty(); 
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
  // View data
function openViewdata(userId) {
    var apiBaseURL = APIBaseURL;
    var url = apiBaseURL + 'get_enquiry_for_old_tractor_by_id/' + userId;
  
    var headers = {
      'Authorization': 'Bearer ' + localStorage.getItem('token')
    };
  
    $.ajax({
      url: url,
      type: 'GET',
      headers: headers,
    
      success: function(response) {
        var userData = response.enquiry_data[0];
        document.getElementById('bname1').innerText=userData.brand_name;
        document.getElementById('mname1').innerText=userData.model;
        document.getElementById('fname1').innerText=userData.first_name;
        document.getElementById('lname1').innerText=userData.last_name;
        document.getElementById('number1').innerText=userData.mobile;
        document.getElementById('date_1').innerText=userData.date;
        document.getElementById('state1').innerText=userData.state_name;
        document.getElementById('dist2').innerText=userData.district_name;
        document.getElementById('tehsil2').innerText=userData.tehsil_name;
      },
      error: function(error) {
        console.error('Error fetching user data:', error);
      }
    });
  }

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

    
// edit data 

function fetch_edit_data(id) {
  var apiBaseURL = APIBaseURL;
  var url = apiBaseURL + 'get_enquiry_for_old_tractor_by_id/' + id;
  console.log(url);

  var headers = {
      'Authorization': 'Bearer ' + localStorage.getItem('token')
  };

  $.ajax({
      url: url,
      type: 'GET',
      headers: headers,
      success: function (response) {
          var Data = response.enquiry_data[0];
          $('#idUser').val(Data.id);
          // $('#brand_name').val(Data.brand_name);
        
          $('#model_name').val(Data.model);
          $('#first_name').val(Data.first_name);
          $('#last_name').val(Data.last_name);
          $('#mobile').val(Data.mobile); 
          $('#date').val(Data.date);
          
         
          var brandDropdown = document.getElementById('brand_name');
          for (var i = 0; i < brandDropdown.options.length; i++) {
            if (brandDropdown.options[i].text === Data.brand_name) {
              brandDropdown.selectedIndex = i;
              break;
            }
          }

          $('#model_name').empty(); 
          get_model_1(Data.brand_id); 

          // Selecting the option in the model dropdown
          setTimeout(function() { // Wait for the model dropdown to populate
              $("#model_name option").prop("selected", false);
              $("#model_name option[value='" + Data.model + "']").prop("selected", true);
          }, 1000); // Adjust the delay time as needed

          setSelectedOption('state_', Data.state_id);
          setSelectedOption('dist_', Data.district_id);
          
          // Call function to populate tehsil dropdown based on selected district
          populateTehsil(Data.district_id, 'tehsil-dropdown', Data.tehsil_id);

          // setSelectedOption('tehsil-dropdown', Data.tehsil_id);
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

function edit_id() {
  var enquiry_type_id = $("#enquiry_type_id").val();
  var product_id = $("#product_id").val();
  var edit_id = $("#idUser").val();
  var brand_name = $("#brand_name").val();
  var model_name = $("#model_name").val();
  var first_name = $("#first_name").val();
  var last_name = $("#last_name").val();
  var mobile = $("#mobile").val();
  var email = $("#email").val();
  var date = $("#date").val();
  var state = $("#state_").val();
  var district = $("#dist_").val();
  var tehsil = $("#tehsil_").val();
  var _method = 'put';

  // Validate mobile number
  if (!/^[6-9]\d{9}$/.test(mobile)) {
      alert("Mobile number must start with 6 or above and should be 10 digits");
      return; // Exit the function if validation fails
  }

  var paraArr = {
      'brand_name': brand_name,
      'model': model_name,
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

function searchdata() {
  console.log("dfghsfg,sdfgdfg");
  var brandselect = $('#brand_name1').val();
  var modelselect = $('#model2').val();
  var stateselect = $('#state2').val();
  var districtselect = $('#district2').val();
  var paraArr = {
    'brand_id': brandselect,
    'model': modelselect,
    'state': stateselect,
    'district': districtselect,
  };
  var apiBaseURL = APIBaseURL;
  var url = apiBaseURL + 'search_for_old_tractor_enquiry';
  $.ajax({
    url: url,
    type: 'POST',
    data: paraArr,

    headers: {
      'Authorization': 'Bearer ' + localStorage.getItem('token')
    },
    success: function (searchData) {
      console.log(searchData, "hello brand");
      updateTable(searchData);
    },
    error: function (xhr, status, error) {
      if (xhr.status === 404) {
        // Handle 404 error here
        const tableBody = $('#data-table');
        tableBody.html('<tr><td colspan="9">No matching data available</td></tr>');
        // Clear the DataTable
        $('#example').DataTable().clear().draw();
      } else {
        console.error('Error searching for brands:', error);
      }
    }
  });
}

function updateTable(data) {
  const tableBody = document.getElementById('data-table');
  tableBody.innerHTML = '';
  let serialNumber = 1;
  if (data.newTractor && data.newTractor.length > 0) {
    let tableData = [];
    data.newTractor.forEach(row => {
      const fullName = row.first_name + ' ' + row.last_name;
      let action = `<div class="d-flex">
          <button class="btn btn-warning btn-sm text-white mx-1" data-bs-toggle="modal" onclick="openViewdata(${row.id});" data-bs-target="#view_model_tractor_enq">
              <i class="fas fa-eye" style="font-size: 11px;"></i>
          </button>
          <button class="btn btn-primary btn-sm btn_edit" onclick="fetch_edit_data(${row.id});" data-bs-toggle="modal" data-bs-target="#editmodel_oldtractor_enq" id="yourUniqueIdHere">
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
        row.model,
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
        { title: 'Brand' },
        { title: 'Model' },
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
    tableBody.innerHTML = '<tr><td colspan="9">No valid data available</td></tr>';
  }
}


function resetform(){
  $('#brand_name1').val('');
  $('#model2').val('');
  $('#state2').val('');
  $('#district2').val('');
  window.location.reload();
}


function get_1() {
  var url = 'http://tractor-api.divyaltech.com/api/customer/get_brand_for_finance';
  $.ajax({
      url: url,
      type: "GET",
      headers: {
          'Authorization': 'Bearer ' + localStorage.getItem('token')
      },
      success: function (data) {
          console.log(data);
          const select = document.getElementById('brand_name');
          select.innerHTML = '<option selected disabled value="">Please select an option</option>';

          if (data.brands.length > 0) {
              data.brands.forEach(row => {
                  const option = document.createElement('option');
                  option.textContent = row.brand_name;
                  option.value = row.id;
                  select.appendChild(option);
              });

              // Add event listener to brand dropdown
              select.addEventListener('change', function() {
                  const selectedBrandId = this.value;
                  get_model(selectedBrandId);
              });
          } else {
              select.innerHTML = '<option>No valid data available</option>';
          }
      },
      error: function (error) {
          console.error('Error fetching data:', error);
      }
  });
}

function get_model_1(brand_id, selectedModel) {
  var url = 'http://tractor-api.divyaltech.com/api/customer/get_brand_model/' + brand_id;
  $.ajax({
      url: url,
      type: "GET",
      headers: {
          'Authorization': 'Bearer ' + localStorage.getItem('token')
      },
      success: function (data) {
          console.log(data);
          const select = document.getElementById('model_name');
          select.innerHTML = '<option selected disabled value="">Please select an option</option>';

          if (data.model.length > 0) {
              data.model.forEach(row => {
                  const option = document.createElement('option');
                  option.textContent = row.model;
                  option.value = row.model;
                  select.appendChild(option);

                  // Select the option if it matches the selectedModel
                  if (row.model === selectedModel) {
                      option.selected = true;
                  }
              });
          } else {
              select.innerHTML = '<option>No valid data available</option>';
          }
      },
      error: function (error) {
          console.error('Error fetching data:', error);
      }
  });
}

get_1();