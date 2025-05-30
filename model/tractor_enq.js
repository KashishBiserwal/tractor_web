
$(document).ready(function(){
    $('#new_trac_subbtn').click(edit_id_data);

      jQuery.validator.addMethod("customPhoneNumber", function(value, element) {
      return /^[6-9]\d{9}$/.test(value); 
      }, "Phone number must start with 6 or above");
    
      $("#new_tractor_form").validate({
      
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
        loc: {
          required: true
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
      $("#new_trac_subbtn").on("click", function () {
        $("#new_tractor_form").valid();
      });
   });
 
//****get data***
function get_new_tractor() {
  var apiBaseURL = APIBaseURL;
  var url = apiBaseURL + 'get_enquiry_for_new_tractor';
  $.ajax({
      url: url,
      type: "GET",
      headers: {
          'Authorization': 'Bearer ' + localStorage.getItem('token')
      },
      success: function (data) {
          const tableBody = $('#data-table'); 
          tableBody.empty(); 
          let serialNumber = 1;
          if (data.enquiry_data && data.enquiry_data.length > 0) {
              data.enquiry_data.sort((a, b) => new Date(b.date) - new Date(a.date));
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

              data.enquiry_data.forEach(row => {
                  const fullName = row.first_name + ' ' + row.last_name;
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
                          <button class="btn btn-warning btn-sm text-white mx-1" data-bs-toggle="modal" onclick="openViewdata(${row.id});" data-bs-target="#view_model_new_tractor">
                              <i class="fas fa-eye" style="font-size: 11px;"></i>
                          </button> 
                          <button class="btn btn-primary btn-sm btn_edit" onclick="fetch_edit_data(${row.id});" data-bs-toggle="modal" data-bs-target="#staticBackdrop2" id="yourUniqueIdHere">
                          <i class="fas fa-edit" style="font-size: 11px;"></i>
                      </button>
                          <button class="btn btn-danger btn-sm mx-1" onclick="destroy(${row.id});">
                              <i class="fa fa-trash" style="font-size: 11px;"></i>
                          </button>
                      </div>`
                  ]).draw(false); 

                  serialNumber++;
              });
              table.order([1, 'desc']).draw();
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
get_new_tractor();

// brand 
function get() {
  var url = 'https://shopninja.in/bharatagri/api/public/api/customer/get_brand_for_finance';
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

function get_model(brand_id) {
  var url = 'https://shopninja.in/bharatagri/api/public/api/customer/get_brand_model/' + brand_id;
  $.ajax({
      url: url,
      type: "GET",
      headers: {
          'Authorization': 'Bearer ' + localStorage.getItem('token')
      },
      success: function (data) {
          console.log(data);
          const select = document.getElementById('mode_l');
          select.innerHTML = '<option selected disabled value="">Please select an option</option>';

          if (Array.isArray(data.model) && data.model.length > 0) {
              data.model.forEach(modelName => { // Corrected for array of strings
                  const option = document.createElement('option');
                  option.textContent = modelName; // Use the string directly
                  option.value = modelName;
                  select.appendChild(option);
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

// Call the function to populate brand dropdown
get();

//****delete data***
function destroy(id) {
    var apiBaseURL = APIBaseURL;
    var url = apiBaseURL + 'customer_enquiries/' + id;
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
    var url = apiBaseURL + 'get_enquiry_for_new_tractor_by_id/' + userId;
  
    var headers = {
      'Authorization': 'Bearer ' + localStorage.getItem('token')
    };
  
    $.ajax({
      url: url,
      type: 'GET',
      headers: headers,
    
      success: function(response) {
        var userData = response.enquiry_data[0];
        document.getElementById('bname_1').innerText = userData.brand_name;
        document.getElementById('mname_1').innerText = userData.model;
        document.getElementById('fname_1').innerText = userData.first_name;
        document.getElementById('lname_1').innerText = userData.last_name;
        document.getElementById('number_1').innerText = userData.mobile;
        document.getElementById('date_1').innerText = userData.date;
        document.getElementById('state_1').innerText = userData.state_name;
        document.getElementById('dist_1').innerText = userData.district_name;
        document.getElementById('tehsil_1').innerText = userData.tehsil_name;
      },
      error: function(error) {
        console.error('Error fetching user data:', error);
      }
    });
}

function fetch_edit_data(id) {
  var apiBaseURL = APIBaseURL;
  var url = apiBaseURL + 'get_enquiry_for_new_tractor_by_id/' + id;
  var headers = {
    'Authorization': 'Bearer ' + localStorage.getItem('token')
  };
  $.ajax({
    url: url,
    type: 'GET',
    headers: headers,
    success: function(response) {
      var Data = response.enquiry_data[0];
      $('#id').val(Data.id);
      $('#enquiry_type_id').val(Data.enquiry_type_id);
      $('#product_subject_id').val(Data.product_subject_id);
      $('#first_name').val(Data.first_name);
      $('#last_name').val(Data.last_name);
      $('#mobile').val(Data.mobile);
      $('#email').val(Data.email);
      $('#date').val(Data.date);

      // Set selected option for brand dropdown
      var brandDropdown = document.getElementById('brand_name_1');
      for (var i = 0; i < brandDropdown.options.length; i++) {
        if (brandDropdown.options[i].text === Data.brand_name) {
          brandDropdown.selectedIndex = i;
          break;
        }
      }
    
      $('#model_name_1').empty(); 
      get_model_1(Data.brand_id); 
        setTimeout(function() { 
          $("#model_name_1 option").prop("selected", false);
          $("#model_name_1 option[value='" + Data.model + "']").prop("selected", true);
        }, 2000); 
      setSelectedOption('state_', Data.state_id);
      getDistricts(Data.state_id, 'district-dropdown', 'tehsil-dropdown');
      setTimeout(function() {
        setSelectedOption('dist_', Data.district_id);
        populateTehsil(Data.district_id, 'tehsil-dropdown', Data.tehsil_id);
      }, 2000); 
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

function edit_id_data() {
  var enquiry_type_id = $("#enquiry_type_id").val();
  var product_subject_id = $("#product_subject_id").val();
  var edit_id = $("#id").val();
  var first_name = $("#first_name").val();
  var last_name = $("#last_name").val();
  var mobile = $("#mobile").val();
  var date = $("#date").val();
  var state = $("#state_").val();
  var district = $("#dist_").val();
  var tehsil = $("#tehsil_").val();
  if (!/^[6-9]\d{9}$/.test(mobile)) {
      alert("Mobile number must start with 6 or above and should be 10 digits");
      return; 
  }
  var paraArr = {
    'first_name': first_name,
      'last_name': last_name,
      'mobile': mobile,
      'date': date,
      'state': state,
      'district': district,
      'tehsil': tehsil,
      'id': edit_id,
      'enquiry_type_id': enquiry_type_id,
      'product_id': product_subject_id,
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
  var brandselect = $('#brand_name').val();
  var modelselect = $('#mode_l').val();
  var stateselect = $('#stat_e').val();
  var districtselect = $('#dis_t').val();
  var paraArr = {
      'brand_id': brandselect,
      'model': modelselect,
      'state': stateselect,
      'district': districtselect,
  };

  var apiBaseURL = APIBaseURL; 
  var url = apiBaseURL + 'search_for_new_tractor_enquiry';
  $.ajax({
      url: url,
      type: 'POST',
      data: paraArr,
      headers: {
          'Authorization': 'Bearer ' + localStorage.getItem('token')
      },
      success: function (searchData) {
          updateTable(searchData);
      },
      error: function (xhr, status, error) {
        if (xhr.status === 404) {
          const tableBody = $('#data-table');
          tableBody.html('<tr><td colspan="9">No matching data available</td></tr>');
          $('#example').DataTable().clear().draw();
        } else {
          console.error('Error searching for brands:', error);
        }
      }
  });
}

function updateTable(data) {
  const tableBody = $('#data-table');
  tableBody.empty(); 
  let serialNumber = 1;
  
  if (data.newTractor && data.newTractor.length > 0) {
      let tableData = [];
      
      data.newTractor.forEach(row => {
          const fullName = row.first_name + ' ' + row.last_name;
          
          let action = `<div class="d-flex">
              <button class="btn btn-warning btn-sm text-white mx-1" data-bs-toggle="modal" onclick="openViewdata(${row.id});" data-bs-target="#view_model_new_tractor">
                  <i class="fas fa-eye" style="font-size: 11px;"></i>
              </button> 
              <button class="btn btn-primary btn-sm btn_edit" onclick="fetch_edit_data(${row.id});" data-bs-toggle="modal" data-bs-target="#staticBackdrop2" id="yourUniqueIdHere">
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
      });
  } else {
      // Display a message if there's no valid data
      tableBody.html('<tr><td colspan="9">No valid data available</td></tr>');
  }
}
function resetform(){
  $('#brand_name').val('');
  $('#mode_l').val('');
  $('#stat_e').val('');
  $('#dis_t').val('');
  window.location.reload();
}

function get_1() {
  var url = 'https://shopninja.in/bharatagri/api/public/api/customer/get_brand_for_finance';
  $.ajax({
      url: url,
      type: "GET",
      headers: {
          'Authorization': 'Bearer ' + localStorage.getItem('token')
      },
      success: function (data) {
      
          const select = document.getElementById('brand_name_1');
          select.innerHTML = '<option selected disabled value="">Please select an option</option>';

          if (data.brands.length > 0) {
              data.brands.forEach(row => {
                  const option = document.createElement('option');
                  option.textContent = row.brand_name;
                  option.value = row.id;
                  select.appendChild(option);
              });
              select.addEventListener('change', function() {
                  const selectedBrandId = this.value;
                  get_model_1(selectedBrandId);
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
  var url = 'https://shopninja.in/bharatagri/api/public/api/customer/get_brand_model/' + brand_id;
  $.ajax({
      url: url,
      type: "GET",
      headers: {
          'Authorization': 'Bearer ' + localStorage.getItem('token')
      },
      success: function (data) {
          console.log(data);
          const select = document.getElementById('model_name_1');
          select.innerHTML = '<option selected disabled value="">Please select an option</option>';

          if (Array.isArray(data.model) && data.model.length > 0) {
              data.model.forEach(modelName => { // Fixed: Handling array of strings
                  const option = document.createElement('option');
                  option.textContent = modelName; // Directly use the string
                  option.value = modelName;
                  select.appendChild(option);

                  if (modelName === selectedModel) {
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
