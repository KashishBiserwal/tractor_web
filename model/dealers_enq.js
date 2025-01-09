
$(document).ready(function(){
  get_dealers_normal();
  get_dealers();

  $('#state_state').change(function() {
      var state_id = $(this).val();
      populateDistricts(state_id);
  });
  $('#dist2').change(function() {
      var district_id = $(this).val();
      populateTehsils(district_id);
  });
    $('#subbtn').click(edit_id_data);
    $('#subbtn_2').click(edit_id_data_2);
    $('#Reset').click(reset);
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
var table1; 
var table2;

function get_dealers() {
    var apiBaseURL = APIBaseURL;
    var url = apiBaseURL + 'get_dealer_enquiry_data_for_particular_dealer'; 
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
            if (data.dealer_enquiry_details_for_particular_data && data.dealer_enquiry_details_for_particular_data.length > 0) {
                data.dealer_enquiry_details_for_particular_data.reverse();
                
                if ($.fn.DataTable.isDataTable('#example')) {
                    $('#example').DataTable().destroy();
                }

                table1 = $('#example').DataTable({
                    paging: true,
                    searching: true,
                    lengthChange: false,
                    info: false, 
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

                data.dealer_enquiry_details_for_particular_data.forEach(row => {
                    const fullName = row.first_name + ' ' + row.last_name; 
                    // Add row to DataTable
                    table1.row.add([
                        serialNumber,
                        row.date,
                        row.brand_name,
                        fullName,
                        row.mobile,
                        row.state_name,
                        row.district_name,
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
            if(error.status == '401' && error.responseJSON.error == 'Token expired or invalid'){
              $("#errorStatusLoading").modal('show');
              $("#errorStatusLoading").find('.modal-title').html('Error');
              $("#errorStatusLoading").find('.modal-body').html(error.responseJSON.error);
              window.location.href = baseUrl + "login.php"; 

            }
        }
    });
}
function get_dealers_normal() {
    var apiBaseURL = APIBaseURL;
    var url = apiBaseURL + 'get_dealer_enquiry_data';
    $.ajax({
        url: url,
        type: "GET",
        headers: {
            'Authorization': 'Bearer ' + localStorage.getItem('token')
        },
        success: function (data) {
            const tableBody = $('#data-table2'); 
            tableBody.empty();

            let serialNumber = 1;

            if (data.dealer_enquiry_details && data.dealer_enquiry_details.length > 0) {
                // Destroy the DataTable if already initialized
                if ($.fn.DataTable.isDataTable('#example2')) {
                    $('#example2').DataTable().destroy();
                }

                table2 = $('#example2').DataTable({
                    paging: true,
                    searching: true,
                    lengthChange: false,
                    info: false, 
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

                data.dealer_enquiry_details.reverse().forEach(row => {
                    const fullName = row.first_name + ' ' + row.last_name;

                    table2.row.add([
                        serialNumber,
                        row.date,
                        row.brand_name,
                        fullName,
                        row.mobile,
                        row.state_name,
                        row.district_name,
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
            if(error.status == '401' && error.responseJSON.error == 'Token expired or invalid'){
              $("#errorStatusLoading").modal('show');
              $("#errorStatusLoading").find('.modal-title').html('Error');
              $("#errorStatusLoading").find('.modal-body').html(error.responseJSON.error);
              window.location.href = baseUrl + "login.php"; 

            }
        }
    });
}
  // View data
function openViewdatacertifed(userId) {
    var apiBaseURL = APIBaseURL;
    var url = apiBaseURL + 'get_dealer_enquiry_data_for_particular_dealer_by_id/' + userId;
   
    var headers = {
      'Authorization': 'Bearer ' + localStorage.getItem('token')
    };
  
    $.ajax({
      url: url,
      type: 'GET',
      headers: headers,
    
      success: function(response) {
        var userData = response.dealer_enquiry_details_for_particular_data[0];
        document.getElementById('bname1').innerText=userData.brand_name;
        document.getElementById('fname_1').innerText=userData.first_name;
        document.getElementById('lname_1').innerText=userData.last_name;
        document.getElementById('number_1').innerText=userData.mobile;
        document.getElementById('date1').innerText=userData.date;
        document.getElementById('state_2').innerText=userData.state_name;
        document.getElementById('dist_1').innerText=userData.district_name;
        document.getElementById('tehsil_1').innerText=userData.tehsil_name;
      },
      error: function(error) {
        console.error('Error fetching user data:', error);
      }
    });
}

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
      document.getElementById('brand_particuler').innerText=userData.brand_name;
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

// edit data  particular_dealer
function fetch_edit_data_2(id) {
  var apiBaseURL = APIBaseURL;
  var url = apiBaseURL + 'get_dealer_enquiry_data_for_particular_dealer_by_id/' + id;
  var headers = {
      'Authorization': 'Bearer ' + localStorage.getItem('token')
  };
  $.ajax({
      url: url,
      type: 'GET',
      headers: headers,
      success: function(response) {
          var Data = response.dealer_enquiry_details_for_particular_data[0];
          $('#IdUser').val(Data.id);
          $('#dname_name').val(Data.dealer_name);
          $('#mobile_1').val(Data.mobile);
          $('#first_nme_1').val(Data.first_name);
          $('#last_name_1').val(Data.last_name);
          $('#date_date').val(Data.date);
          $('#message_1').val(Data.message);
          $('#product_id').val(Data.product_id);
          var brandDropdown = document.getElementById('brand_name_2');
          for (var i = 0; i < brandDropdown.options.length; i++) {
            if (brandDropdown.options[i].text === Data.brand_name) {
              brandDropdown.selectedIndex = i;
              break;
            }
          }
          setSelectedOption('state_state', Data.state_id);
          getDistricts(Data.state_id, 'district-dropdown1', 'tehsil-dropdown1');
          setTimeout(function() {
            setSelectedOption('dist2', Data.district_id);
            populateTehsil(Data.district_id, 'tehsil-dropdown1', Data.tehsil_id);
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
function edit_id_data_2() {
  var enquiry_type_id=16;
  var product_id = $("#product_id").val();
  var edit_id = $("#IdUser").val();
  console.log(edit_id, 'edit_id');
  var brand_name = $("#brand_name_2").val();
  var first_name = $("#first_nme_1").val();
  var last_name = $("#last_name_1").val();
  var mobile = $("#mobile_1").val();
  var date = $("#date_date").val();
  var state = $("#state_state").val();
  var district = $("#dist2").val();
  var tehsil = $("#tehsil_tehsil").val();
  var message = $("#message_1").val();
  if (!/^[6-9]\d{9}$/.test(mobile)) {
      alert("Mobile number must start with 6 or above and should be 10 digits");
      return; 
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
      'product_id': product_id,
     
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
          window.location.reload();
          alert('successfully updated..!')
      },
      error: function (error) {
          console.error('Error fetching data:', error);
      }
  });
}

// edit data Normal dealer
function fetch_edit_data(id) {
  var apiBaseURL = APIBaseURL;
  var url = apiBaseURL + 'get_dealer_enquiry_data_by_id/' + id;
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
          $('#first_name').val(Data.first_name);
          $('#last_name').val(Data.last_name);
          $('#mobile').val(Data.mobile);
          $('#email').val(Data.email);
          $('#date').val(Data.date);
          $('#message').val(Data.message);
        
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
          }, 2000); 
         
      },
      error: function (error) {
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
  var enquiry_type_id=14;
  var product_id=13;
  var edit_id = $("#idUser").val();
  console.log(edit_id, 'edit_id');
  var brand_name = $("#brand_name").val();
  var first_name = $("#first_name").val();
  var last_name = $("#last_name").val();
  var mobile = $("#mobile").val();
  var date = $("#date_date").val();
  var state = $("#state_").val();
  var district = $("#dist_").val();
  var tehsil = $("#tehsil_").val();
  var message = $("#message").val();
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
      'product_id': product_id,
     
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
          window.location.reload();
          alert('successfully updated..!')
      },
      error: function (error) {
          console.error('Error fetching data:', error);
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
  var url = 'http://tractor-api.divyaltech.com/api/customer/get_brand_for_finance';
  $.ajax({
    url: url,
    type: "GET",
    headers: {
      'Authorization': 'Bearer ' + localStorage.getItem('token')
    },
    success: function (data) {
      const select = $('#brand_name');
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
get();

function get_search() {
  var url = 'http://tractor-api.divyaltech.com/api/customer/get_brand_for_finance';

  $.ajax({
    url: url,
    type: "GET",
    headers: {
      'Authorization': 'Bearer ' + localStorage.getItem('token')
    },
    success: function (data) {
      const select = $('#brand_name_2');
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
get_search();

function searchdata() {
  var state = $('#state_1').val();
  var district = $('#district_1').val();

  var paraArr = {
      'state': state,
      'district': district,
  };

  var apiBaseURL = APIBaseURL;
  var url;
  if ($('#dealers_certifide_target').hasClass('active')) {
      url = apiBaseURL + 'search_for_particular_dealer_enquiry';
  } else {
      url = apiBaseURL + 'search_for_dealer_for_enquiry';
  }

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
          // Handle 404 error here
          const tableBody = $('#dealers_certifide_target').hasClass('active') ? $('#data-table') : $('#data-table2');
          tableBody.html('<tr><td colspan="9">No matching data available</td></tr>');
          // Clear the DataTable
          $('#example').DataTable().clear().draw();
          $('#example2').DataTable().clear().draw();
        } else {
          console.error('Error searching for brands:', error);
        }
      }
  });
};

function updateTable(data) {
  const tableBody = $('#dealers_certifide_target').hasClass('active') ? $('#data-table') : $('#data-table2');
  tableBody.empty();
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

          if (!$('#dealers_certifide_target').hasClass('active')) {
              action = `<div class="d-flex">
                          <button class="btn btn-warning btn-sm text-white mx-1" data-bs-toggle="modal" onclick="openViewdata(${row.id});" data-bs-target="#view_model_dealer">
                              <i class="fas fa-eye" style="font-size: 11px;"></i>
                          </button> 
                          <button class="btn btn-primary btn-sm btn_edit" onclick="fetch_edit_data(${row.id});" data-bs-toggle="modal" data-bs-target="#edit_dealers" id="yourUniqueIdHere">
                              <i class="fas fa-edit" style="font-size: 11px;"></i>
                          </button>
                          <button class="btn btn-danger btn-sm mx-1" onclick="destroy(${row.id});">
                              <i class="fa fa-trash" style="font-size: 11px;"></i>
                          </button>
                      </div>`;
          }

          tableData.push([
              serialNumber,
              row.date,
              row.brand_name,
              fullName,
              row.mobile,
              row.state_name,
              row.district_name,
              action
          ]);

          serialNumber++;
      });

      const table = $('#dealers_certifide_target').hasClass('active') ? $('#example') : $('#example2');
      table.DataTable().clear().destroy();
      table.DataTable({
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
      });
  } else {
      tableBody.html('<tr><td colspan="4">No valid data available</td></tr>');
  }
}
function reset() {
  $("#state_1").val("");
  $("#district_1").val("");
  window.location.reload();
};
