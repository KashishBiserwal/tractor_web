 
  $(document).ready(function(){
    $('#engine_subbtn').click(edit_data_id);
    $('#Search').click(searchdata);
          jQuery.validator.addMethod("customPhoneNumber", function(value, element) {
          return /^[6-9]\d{9}$/.test(value); 
          }, "Phone number must start with 6 or above");
      $("#engine_oilr_form").validate({
      
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
      $("#engine_subbtn").on("click", function () {
      $("#engine_oilr_form").valid();
      });
    });

//****get data***
var table; 
function get_engine() {
    var apiBaseURL = APIBaseURL;
    var url = apiBaseURL + 'get_engine_oil_enquiry_data';
    console.log('dfghjkiuytgf');
    
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
            if ($.fn.DataTable.isDataTable('#example')) {
                $('#example').DataTable().clear().destroy(); 
            }
            table = $('#example').DataTable({
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
            data.customer_details.reverse();
  
            if (data.customer_details && data.customer_details.length > 0) {
                data.customer_details.forEach(row => {
                    const fullName = row.first_name + ' ' + row.last_name;
                    table.row.add([
                        serialNumber,
                        row.date,
                        row.brand_name,
                        row.oil_model,
                        fullName,
                        row.mobile,
                        row.state_name,
                        row.district_name,
                        `<div class="d-flex">
                            <button class="btn btn-warning btn-sm text-white mx-1" data-bs-toggle="modal" onclick="openViewdata(${row.id});" data-bs-target="#view_model_engine_oil">
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
get_engine();

  // View data
function openViewdata(userId) {
    var apiBaseURL = APIBaseURL;
    var url = apiBaseURL + 'get_engine_oil_enquiry_by_id/' + userId;
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
        document.getElementById('mname1').innerText=userData.oil_model;
        document.getElementById('fname1').innerText=userData.first_name;
        document.getElementById('lname1').innerText=userData.last_name;
        document.getElementById('number1').innerText=userData.mobile;
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

// **delete***
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

// edit data 
function fetch_edit_data(id) {
    var apiBaseURL = APIBaseURL;
    var url = apiBaseURL + 'get_engine_oil_enquiry_by_id/' + id;
    var headers = {
        'Authorization': 'Bearer ' + localStorage.getItem('token')
    };
  
    $.ajax({
        url: url,
        type: 'GET',
        headers: headers,
        success: function (response) {
            var Data = response.customer_details[0];
            $('#idUser').val(Data.id);
            $('#model_name').val(Data.oil_model);
            $('#first_name').val(Data.first_name);
            $('#last_name').val(Data.last_name);
            $('#mobile').val(Data.mobile);
            $('#email').val(Data.email);
            $('#date').val(Data.date);
            $('#product_id').val(Data.product_id);
            var brandDropdown = document.getElementById('brand_name');
            for (var i = 0; i < brandDropdown.options.length; i++) {
              if (brandDropdown.options[i].text === Data.brand_name) {
                brandDropdown.selectedIndex = i;
                break;
              }
            }
            setSelectedOption('state_', Data.state_id);
            getDistricts(Data.state_id, 'district-dropdown', 'tehsil-dropdown');
            setTimeout(function() {
              setSelectedOption('dist_', Data.district_id);
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
  function edit_data_id() {
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
    if (!/^[6-9]\d{9}$/.test(mobile)) {
        alert("Mobile number must start with 6 or above and should be 10 digits");
        return; 
    }
    var paraArr = {
        'brand_id': brand_name,
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
            alert('successfully updated..!');
        },
        error: function (error) {
            console.error('Error fetching data:', error);
        }
    });
  }

function searchdata() {
  var brandselect = $('#brand_name_search').val();
  var modelselect = $('#model_search').val();
  var stateselect = $('#state_search').val();
  var districtselect = $('#district_search').val();
    var paraArr = {
    'brand_id':brandselect,
    'model':modelselect,
    'state':stateselect,
    'district':districtselect,
  };
  var apiBaseURL = APIBaseURL;
  var url = apiBaseURL + 'search_for_engine_oil_enquiry';
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
  if(data.engineOilData && data.engineOilData.length > 0) {
      let tableData = []; 
      data.engineOilData.forEach(row => {
        const fullName = row.first_name + ' ' + row.last_name;
          let action =     `<div class="d-flex">
          <button class="btn btn-warning btn-sm text-white mx-1" data-bs-toggle="modal" onclick="openViewdata(${row.id});" data-bs-target="#view_model_engine_oil">
              <i class="fas fa-eye" style="font-size: 11px;"></i>
          </button> 
          <button class="btn btn-primary btn-sm btn_edit" onclick="fetch_edit_data(${row.id});" data-bs-toggle="modal" data-bs-target="#staticBackdrop2" id="yourUniqueIdHere">
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
            row.oil_model,
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
      tableBody.innerHTML = '<tr><td colspan="4">No valid data available</td></tr>';
  }
}


function get_oil() {
  var url = 'https://shopninja.in/bharatagri/api/public/api/customer/get_oil_brands';
  $.ajax({
    url: url,
    type: "GET",
    headers: {
      'Authorization': 'Bearer ' + localStorage.getItem('token')
    },
    success: function (data) {
      const select = $('#brand_name_search');
      select.empty(); 
      select.append('<option selected disabled value="">Please select Brand</option>');
      var uniqueBrands = {};

      $.each(data.brands, function (index, brand) {
        var brand_id = brand.id;
        var brand_name = brand.brand_name;
        if (!uniqueBrands[brand_id]) {
          uniqueBrands[brand_id] = true;
          select.append('<option value="' + brand_id + '">' + brand_name + '</option>');
        }
      });
    },
    error: function (error) {
      console.error('Error fetching data:', error);
    }
  });
}
get_oil();

function get_oilUpdate() {
  var url = 'https://shopninja.in/bharatagri/api/public/api/customer/get_oil_brands';
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
      var uniqueBrands = {};

      $.each(data.brands, function (index, brand) {
        var brand_id = brand.id;
        var brand_name = brand.brand_name;
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
get_oilUpdate();