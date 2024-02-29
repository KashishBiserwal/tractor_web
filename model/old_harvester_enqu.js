$(document).ready(function(){
  // $('#Search_btn').click(search_data);
  $('#undate_btn_oldharvester_enq').click(edit_data_id);
  
        jQuery.validator.addMethod("customPhoneNumber", function(value, element) {
        return /^[6-9]\d{9}$/.test(value); 
        }, "Phone number must start with 6 or above");
  
          
    $("#old_harvester_form").validate({
    
    rules: {
      bname: {
        required: true,
      },
      mname: {
        required: true,
      },
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
      bname: {
        required: "This field is required",
      },
      mname: {
        required: "This field is required",
      },
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

  
    $("#undate_btn_oldharvester_enq").on("click", function () {
  
      $("#old_harvester_form").valid();
    
    });
    

    });


function BackgroundUpload() {
    var imgWrap = "";
    var imgArray = [];

    function generateUniqueClassName(index) {
      return "background-image-" + index;
    }

    $('.background__inputfile').each(function () {
      $(this).on('change', function (e) {
        imgWrap = $(this).closest('.background__box').find('.background__img-wrap');
        var maxLength = $(this).attr('data-max_length');

        var files = e.target.files;
        var filesArr = Array.prototype.slice.call(files);
        var iterator = 0;
        filesArr.forEach(function (f, index) {

          if (!f.type.match('image.*')) {
            return;
          }

          if (imgArray.length > maxLength) {
            return false;
          } else {
            var len = 0;
            for (var i = 0; i < imgArray.length; i++) {
              if (imgArray[i] !== undefined) {
                len++;
              }
            }
            if (len > maxLength) {
              return false;
            } else {
              imgArray.push(f);

              var reader = new FileReader();
              reader.onload = function (e) {
                var className = generateUniqueClassName(iterator);
                var html = "<div class='background__img-box'><div onclick='BackgroundImage(\"" + className + "\")' style='background-image: url(" + e.target.result + ")' data-number='" + $(".background__img-close").length + "' data-file='" + f.name + "' class='img-bg " + className + "'><div class='background__img-close'></div></div></div>";
                imgWrap.append(html);
                iterator++;
              }
              reader.readAsDataURL(f);
            }
          }
        });
      });
    });

    $('body').on('click', ".background__img-close", function (e) {
      var file = $(this).parent().data("file");
      for (var i = 0; i < imgArray.length; i++) {
        if (imgArray[i].name === file) {
          imgArray.splice(i, 1);
          break;
        }
      }
      $(this).parent().parent().remove();
    });
}

//****get data***
function get_old_harvester_enqu() {
  var apiBaseURL = APIBaseURL;
  var url = apiBaseURL + 'get_enquiry_for_old_harvester';
  
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

          if (data.enquiry_data && data.enquiry_data.length > 0) {
              // Initialize DataTable
              var table = $('#example').DataTable({
                  paging: true,
                  searching: true,
                  columns: [
                      { title: 'S.No.' },
                      { title: 'Date'},
                      { title: 'Brand'},
                      { title: 'Model'},
                      { title: 'Full Name' },
                      { title: 'Mobile' },
                      { title: 'State' },
                      { title: 'District' }, 
                      { title: 'Action', orderable: false }
                  ]
              });

              // Reverse the order of data
              data.enquiry_data.reverse();

              data.enquiry_data.forEach(row => {
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
                          <button class="btn btn-warning btn-sm text-white mx-1" data-bs-toggle="modal" onclick="openViewdata(${row.id});" data-bs-target="#view_old_harvester_enqu">
                              <i class="fas fa-eye" style="font-size: 11px;"></i>
                          </button>
                          <button class="btn btn-primary btn-sm btn_edit" onclick="fetch_edit_data(${row.id});" data-bs-toggle="modal" data-bs-target="#editmodel_old_harvester" id="yourUniqueIdHere">
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
              tableBody.html('<tr><td colspan="7">No valid data available</td></tr>');
          }
      },
      error: function (error) {
          console.error('Error fetching data:', error);
      }
  });
}

get_old_harvester_enqu();



function get() {
  var url = 'http://tractor-api.divyaltech.com/api/customer/get_all_brands';
  $.ajax({
      url: url,
      type: "GET",
      headers: {
          'Authorization': 'Bearer ' + localStorage.getItem('token')
      },
      success: function (data) {
          const selects = document.querySelectorAll('#brand_name1');

          selects.forEach(select => {
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
          });
      },
      error: function (error) {
          console.error('Error fetching data:', error);
      }
  });
}

function get_model(brand_id) {
  var url = 'http://tractor-api.divyaltech.com/api/customer/get_brand_model/' + brand_id;
  $.ajax({
      url: url,
      type: "GET",
      headers: {
          'Authorization': 'Bearer ' + localStorage.getItem('token')
      },
      success: function (data) {
          const selects = document.querySelectorAll('#model_2');

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

get();




function searchdata() {
  console.log("dfghsfg,sdfgdfg");
  var brand_id = $('#brand_id').val();
  var brandselect = $('#brand_name').val();
  var modelselect = $('#model_1').val();
  var stateselect = $('#state_1').val();
  var districtselect = $('#district_2').val();

  var paraArr = {
    'id':brand_id,
    'brand_id':brandselect,
    'model':modelselect,
    'state':stateselect,
    'district':districtselect,
  };

  var apiBaseURL = APIBaseURL;
  var url = apiBaseURL + 'search_for_old_harvester_enquiry';
  $.ajax({
      url:url, 
      type: 'POST',
      data: paraArr,
    
      headers: {
          'Authorization': 'Bearer ' + localStorage.getItem('token')
      },
      success: function (searchData) {
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
  if(data.newTractor && data.newTractor.length > 0) {
      let tableData = []; 
      data.newTractor.forEach(row => {
        const fullName = row.first_name + ' ' + row.last_name;
          let action =    `<div class="d-flex">
          <button class="btn btn-warning btn-sm text-white mx-1" data-bs-toggle="modal" onclick="openViewdata(${row.id});" data-bs-target="#view_old_harvester_enqu">
              <i class="fas fa-eye" style="font-size: 11px;"></i>
          </button>
          <button class="btn btn-primary btn-sm btn_edit" onclick="fetch_edit_data(${row.id});" data-bs-toggle="modal" data-bs-target="#editmodel_old_harvester" id="yourUniqueIdHere">
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
          { title: 'Date'},
          { title: 'Brand'},
          { title: 'Model'},
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
}



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
    var url = apiBaseURL + 'get_enquiry_for_old_harvester_by_id/' + userId;
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
        document.getElementById('First_Name1').innerText=userData.first_name;
        document.getElementById('Last_Name1').innerText=userData.last_name;
        document.getElementById('Mobile_1').innerText=userData.mobile;
        document.getElementById('email_1').innerText=userData.email;
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
  var url = apiBaseURL + 'get_enquiry_for_old_harvester_by_id/' + id;

  var headers = {
      'Authorization': 'Bearer ' + localStorage.getItem('token')
  };

  $.ajax({
      url: url,
      type: 'GET',
      headers: headers,
      success: function (response) {
          var Data = response.enquiry_data [0];
          $('#userId').val(Data.id);
          // $('#brand_name1').val(Data.brand_name);
          // console.log(Data.brand_name,'brand');
          // $('#model_name').val(Data.model);
          $('#fnam_e').val(Data.first_name);
          $('#lnam_e').val(Data.last_name);
          $('#numbe_r').val(Data.mobile);
          $('#emai_l').val(Data.email);
          $('#dat_e').val(Data.date);
          var brandDropdown = document.getElementById('brand_name1');
          for (var i = 0; i < brandDropdown.options.length; i++) {
            if (brandDropdown.options[i].text === Data.brand_name) {
              brandDropdown.selectedIndex = i;
              break;
            }
          }

          $('#model_2').empty(); 
          get_model(Data.brand_id); 

          // Selecting the option in the model dropdown
          setTimeout(function() { // Wait for the model dropdown to populate
              $("#model_1 option").prop("selected", false);
              $("#model_1 option[value='" + Data.model + "']").prop("selected", true);
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


function edit_data_id() {
  var enquiry_type_id =22;
// var enquiry_type_id = $("#enquiry_type_id").val();
var product_id = $("#product_id").val();
var edit_id = $("#userId").val();
var brand_name = $("#brand_name1").val();
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

function get_1() {
  var url = 'http://tractor-api.divyaltech.com/api/customer/get_all_brands';
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
          const select = document.getElementById('model_1model_1');
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

