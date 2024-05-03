
  
$(document).ready(function(){
  // getbrand('brand_name');
  $('#undate_btn').click(edit_data_id);
  $('#submit_btn').on('click', function(event) {
    $("#form_tyre_list").valid();
    store(event);
  });

          
    $("#form_tyre_list").validate({
    
    rules: {
      brand: {
        required: true,
      },
      tyre:{
        required: true,
      },
      tyre_position:{
        required: true,
      },
      tyre_size:{
        required: true,
      },
      tyre_width:{
        required: true,
      },
      category:{
        required:true, 
      },
      _image:{
        required:true,
      }
    },

    messages:{
      brand: {
        required: "This field is required",
      },
      tyre:{
        required: "This field is required",
      },
      tyre_position: {
        required: "This field is required",
      },
      tyre_size: {
        required:"This field is required",
        maxlength:"Enter only 10 digits",
        digits: "Please enter only digits"
      },
      tyre_width:{
          required:"This field is required",
          email:"Please Enter vaild Email",
        },
      
        category: {
        required: "This field is required",
      },
      _image: {
        required: "This field is required",
      },
    },
    
    submitHandler: function (form) {
      alert("Form submitted successfully!");
    },
    });
    $('#add_trac').on('click', function(){
      // getbrand('brand_data');
      getcategory('category');
    });
    });

    function getbrand() {
      var apiBaseURL =APIBaseURL;
      var url = apiBaseURL + 'get_tyre_brands';
      $.ajax({
          url: url,
          type: "GET",  
          headers: {
              'Authorization': 'Bearer' + localStorage.getItem('token')
          },
          success: function (data) {
              console.log(data);
              const select = document.getElementById('brand_name');
              // select.innerHTML = '';
  
              select.innerHTML = '<option selected disabled value="">Please select an option</option>';
              if (data.brands.length > 0) {
                  data.brands.forEach(row => {
                      const option = document.createElement('option');
                      option.value = row.id; 
                      option.textContent = row.brand_name;
                      select.appendChild(option);
                  });
              } else {
                  select.innerHTML ='<option>No valid data available</option>';
              }
          },
          error: function (error) {
              console.error('Error fetching data:', error);
          }
      });
  }
  getbrand(); 


  function getbrandedit() {
    var apiBaseURL =APIBaseURL;
    var url = apiBaseURL + 'get_tyre_brands';
    $.ajax({
        url: url,
        type: "GET",  
        headers: {
            'Authorization': 'Bearer' + localStorage.getItem('token')
        },
        success: function (data) {
            console.log(data);
            const select = document.getElementById('brand_data');
            // select.innerHTML = '';

            select.innerHTML = '<option selected disabled value="">Please select an option</option>';
            if (data.brands.length > 0) {
                data.brands.forEach(row => {
                    const option = document.createElement('option');
                    option.value = row.id; 
                    option.textContent = row.brand_name;
                    select.appendChild(option);
                });
            } else {
                select.innerHTML ='<option>No valid data available</option>';
            }
        },
        error: function (error) {
            console.error('Error fetching data:', error);
        }
    });
}
getbrandedit(); 

    function getcategory(selectId) {
      var apiBaseURL =APIBaseURL;
      var url = 'http://tractor-api.divyaltech.com/api/customer/get_tyre_category';
      $.ajax({
          url: url,
          type: "GET",
          headers: {
              'Authorization': 'Bearer' + localStorage.getItem('token')
          },
          success: function (data) {
              console.log(data);
              const select = document.getElementById(selectId);
            
              select.innerHTML = '<option selected disabled value="">Please select an option</option>';
    
              if (data.tyre_category.length > 0) {
                  data.tyre_category.forEach(row => {
                      const option = document.createElement('option');
                      option.textContent = row.category;
                      option.value = row.id;
                      select.appendChild(option);
                  });
              } else {
                  select.innerHTML ='<option>No valid data available</option>';
              }
        
          },
          error: function (error) {
              console.error('Error fetching data:', error);
              var msg = error;
              $("#errorStatusLoading").modal('show');
              $("#errorStatusLoading").find('.modal-title').html('Error');
              $("#errorStatusLoading").find('.modal-body').html(msg);
          }
      });
    }
   
//****get data***
function get_tyre_list() {
  var apiBaseURL = APIBaseURL;
  var url = apiBaseURL + 'get_tyre_enquiry_data';
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

        let serialNumber = data.customer_details.length;

          if (data.customer_details && data.customer_details.length > 0) {
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

              data.customer_details.forEach(row => {
                  const fullName = row.first_name + ' ' + row.last_name;

                  // Add row to DataTable
                  table.row.add([
                      serialNumber--,
                      row.date,
                      row.brand_name,
                      row.tyre_model,
                      fullName,
                      row.mobile,
                      row.state_name,
                      row.district_name,
                      `<div class="d-flex">
                          <button class="btn btn-warning btn-sm text-white mx-1" data-bs-toggle="modal" onclick="openViewdata(${row.id});" data-bs-target="#view_model_tyre">
                              <i class="fas fa-eye" style="font-size: 11px;"></i>
                          </button> 
                          <button class="btn btn-primary btn-sm btn_edit" onclick="fetch_edit_data(${row.id});" data-bs-toggle="modal" data-bs-target="#staticBackdrop" id="yourUniqueIdHere">
                          <i class="fas fa-edit" style="font-size: 11px;"></i>
                      </button>
                          <button class="btn btn-danger btn-sm mx-1" onclick="destroy(${row.id});">
                              <i class="fa fa-trash" style="font-size: 11px;"></i>
                          </button>
                      </div>`
                  ]).draw(false);

              });
          } else {
            tableBody.innerHTML = '<tr><td colspan="9">No valid data available</td></tr>';
          }
      },
      error: function (error) {
          console.error('Error fetching data:', error);
      }
  });
}

get_tyre_list();

function get_model(brand_id) {
  var url = 'http://tractor-api.divyaltech.com/api/customer/get_tyre_brands/' + brand_id;
  $.ajax({
      url: url,
      type: "GET",
      headers: {
          'Authorization': 'Bearer ' + localStorage.getItem('token')
      },
      success: function (data) {
          console.log(data);
          const selects = document.querySelectorAll('#model_1');

          selects.forEach(select => {
              select.innerHTML = '<option selected disabled value="">Please select an option</option>';

              if (data.model.length > 0) {
                  data.model.forEach(row => {
                      const option = document.createElement('option');
                      option.textContent = row.model;
                      option.value = row.id;
                      console.log(option);
                      select.appendChild(option);
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




function store(event) {
  event.preventDefault();



  var image_names = document.getElementById('_image').files;
  var brand_name = $('#brand').val();
  var tyre_model = $('#tyre').val();
  var tyre_position = $('#tyre_position').val();
  var tyre_size = $('#tyre_size').val();
  var tyre_width = $('#tyre_width').val();
  var category = $('#category').val();


  var apiBaseURL = APIBaseURL;
  var url = apiBaseURL + 'tyre_data';
  var token = localStorage.getItem('token');

  var headers = {
      'Authorization': 'Bearer ' + token
  };

  var data = new FormData();

  for (var x = 0; x < image_names.length; x++) {
      data.append('images[]', image_names[x]);
  }

  data.append('brand_id', brand_name);
  data.append('tyre_model', tyre_model);
  data.append('tyre_position', tyre_position);
  data.append('tyre_size', tyre_size);
  data.append('tyre_width', tyre_width);
  data.append('tyre_category_id', category);

  $.ajax({
    url: url,
    type: "POST",
    data: data,
    headers: headers,
    processData: false,
    contentType: false,
    success: function (result) {
      console.log('Success:', result);
      // Clear form values
      $('#brand, #tyre, #tyre_position, #tyre_size, #tyre_width, #tyre_category_id, #_image').val('');
      // window.location.reload();
      $("#staticBackdrop").modal('hide');
      var msg = "Added successfully !"
        $("#errorStatusLoading").modal('show');
        $("#errorStatusLoading").find('.modal-title').html('Success');
        $("#errorStatusLoading").find('.modal-body').html(msg);
    },
    error: function (error) {
      console.error('Error:', error);
      var msg = error;
      $("#errorStatusLoading").modal('show');
      $("#errorStatusLoading").find('.modal-title').html('Error');
      $("#errorStatusLoading").find('.modal-body').html(msg);
    }
  });
}

 // View data
 function openViewdata(userId) {
  var apiBaseURL = APIBaseURL;
  var url = apiBaseURL + 'get_tyre_enquiry_by_id/' + userId;
console.log(url);
console.log('sumansahu');
  var headers = {
    'Authorization': 'Bearer ' + localStorage.getItem('token')
  };

  $.ajax({
    url: url,
    type: 'GET',
    headers: headers,
  
    success: function(response) {
      var userData = response.customer_details[0];
      document.getElementById('bname1').innerText=userData.brand_name;
      document.getElementById('mname1').innerText=userData.tyre_model;
      document.getElementById('First_Name1').innerText=userData.first_name;
      document.getElementById('Last_Name1').innerText=userData.last_name;
      document.getElementById('Mobile_1').innerText=userData.mobile;
      document.getElementById('date_1').innerText=userData.date;
      document.getElementById('State_1').innerText=userData.state_name;
      document.getElementById('District_1').innerText=userData.district_name;
      document.getElementById('Tehsil_1').innerText=userData.tehsil_name;
    },
    error: function(error) {
      console.error('Error fetching user data:', error);
    }
  });
}


 // edit data 
 function fetch_edit_data(id) {
  var apiBaseURL = APIBaseURL;
  var url = apiBaseURL + 'get_tyre_enquiry_by_id/' + id;
  console.log(url);

  var headers = {
      'Authorization': 'Bearer ' + localStorage.getItem('token')
  };

  $.ajax({
      url: url,
      type: 'GET',
      headers: headers,
      success: function (response) {
          var Data = response.customer_details[0];
          $('#userId').val(Data.id);
          $('#model_name').val(Data.tyre_model);
          $('#fnam_e').val(Data.first_name);
          $('#lnam_e').val(Data.last_name);
          $('#numbe_r').val(Data.mobile);
          $('#dat_e').val(Data.date);

          setSelectedOption('state_', Data.state_id);
          setSelectedOption('dist_', Data.district_id);
          
          // Call function to populate tehsil dropdown based on selected district
          populateTehsil(Data.district_id, 'tehsil-dropdown', Data.tehsil_id);

          // Clear and Populate brand dropdown
          clearBrandDropdown();
          populateBrandDropdown(Data.brand_name);
      },
      error: function (error) {
          console.error('Error fetching user data:', error);
      }
  });
}

function clearBrandDropdown() {
  $('#brand_data').empty(); // Clear existing options
}

function populateBrandDropdown(selectedBrand) {
  var brandDropdown = document.getElementById('brand_data');
  var option = document.createElement('option');
  option.text = selectedBrand;
  brandDropdown.add(option); // Add selected brand to the dropdown
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

function populateTehsil(districtId, selectId, selectedTehsil) {
  // Assuming you have a function to fetch and populate tehsils based on districtId
  // populateTehsilDropdown(districtId, selectId, selectedTehsil);
}


function edit_data_id() {
var enquiry_type_id = $("#enquiry_type_id").val();
var product_id = $("#product_id").val();
var edit_id = $("#userId").val();
var brand_name = $("#brand_name").val();
var model_name = $("#model_name").val();
var first_name = $("#fnam_e").val();
var last_name = $("#lnam_e").val();
var mobile = $("#numbe_r").val();
var email = $("#emai_l").val();
var date = $("#dat_e").val();
var state = $("#stat_e").val();
var district = $("#dis_t").val();
var tehsil = $("#tehsi_l").val();
var _method = 'put';


if (!/^[6-9]\d{9}$/.test(mobile)) {
    alert("Mobile number must start with 6 or above and should be 10 digits");
    return; 
}

var paraArr = {
    'brand_name': brand_name,
    'tyre_model': model_name,
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
  

//****delete data***
function destroy(id) {
  var apiBaseURL = APIBaseURL;
  var url = apiBaseURL + 'tyre_data/' + id;
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




function searchdata() {
  console.log("dfghsfg,sdfgdfg");
  // var brand_id = $('#brand_id').val();
  var brandselect = $('#brand_name').val();
  var modelselect = $('#model_1').val();
  var stateselect = $('#state_1').val();
  var districtselect = $('#district_2').val();
 
console.log(brand_id);
console.log(brandselect);
console.log(modelselect);
console.log(stateselect);
console.log(districtselect);

  var paraArr = {
    // 'id':brand_id,
    'brand_id':brandselect,
    'model':modelselect,
    'state':stateselect,
    'district':districtselect,
  };

  var apiBaseURL = APIBaseURL;
  var url = apiBaseURL + 'search_for_tyre_enquiry';
  $.ajax({
      url:url, 
      type: 'POST',
      data: paraArr,
    
      headers: {
          'Authorization': 'Bearer ' + localStorage.getItem('token')
      },
      success: function (searchData) {
        console.log(searchData,"hello brand");
        updateTable(searchData);
      },
      error: function (error) {
          console.error('Error searching for brands:', error);
      }
  });
};
function updateTable(data) {
  const tableBody = document.getElementById('data-table');
  tableBody.innerHTML = '';
  let serialNumber = 1; 
  if(data.tyreData && data.tyreData.length > 0) {
      let tableData = []; 
      data.tyreData.forEach(row => {
        const fullName = row.first_name + ' ' + row.last_name;
          let action =    `<div class="d-flex">
          <button class="btn btn-warning btn-sm text-white mx-1" data-bs-toggle="modal" onclick="openViewdata(${row.id});" data-bs-target="#view_model_tyre">
              <i class="fas fa-eye" style="font-size: 11px;"></i>
          </button> 
          <button class="btn btn-primary btn-sm btn_edit" onclick="fetch_edit_data(${row.id});" data-bs-toggle="modal" data-bs-target="#staticBackdrop" id="yourUniqueIdHere">
          <i class="fas fa-edit" style="font-size: 11px;"></i>
      </button>
          <button class="btn btn-danger btn-sm mx-1" onclick="destroy(${row.id});">
              <i class="fa fa-trash" style="font-size: 11px;"></i>
          </button>
      </div>`
     
          tableData.push([
            serialNumber,
            row.date,
            row.brand_name,
            row.tyre_model,
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
      tableBody.innerHTML = '<tr><td colspan="4">No valid data available</td></tr>';
  }
}



function resetform(){
  $('#brand_name').val('');
  $('#model_1').val('');
  $('#state_1').val('');
  $('#district_1').val('');
  window.location.reload(); 
  // get_tyre_list();
}


populateDropdownsFromClass('state-dropdown', 'district-dropdown', 'tehsil-dropdown');
populateStateDropdown('state_select', 'district_select');