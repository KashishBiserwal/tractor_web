
$(document).ready(function(){

  $('#Search').click(search_data);
  $("#Reset").click(function () {
    $("#brand_name").val("");
    $("#model_sct").val("");
    $("#state_sct").val("");
    $("#district_sct").val("");
    get_hire_tract();

  });

  $('#dataeditbtn').click(edit_user);
  jQuery.validator.addMethod("customPhoneNumber", function(value, element) {
    return /^[6-9]\d{9}$/.test(value);
}, "Phone number must start with 6 or above and should be 10 digits");

$("#hire_trac_form").validate({
    rules: {
        brand_name: {
            required: true,
        },
        model_1: {
            required: true,
        },
        fname: {
            required: true,
        },
        last_name: {
            required: true,
        },
        lname: {
            required: true,
        },
        mobile: {
            required: true,
            minlength: 10,
            maxlength: 10,
            digits: true,
            customPhoneNumber: true
        },
        state_: {
            required: true,
        },
        dist: {
            required: true,
        }
    },
    messages: {
        brand_name: {
            required: "This field is required",
        },
        model_1: {
            required: "This field is required",
        },
        fname: {
            required: "This field is required",
        },
        last_name: {
            required: "This field is required",
        },
        lname: {
            required: "This field is required",
        },
        mobile: {
            required: "This field is required",
            minlength: "Enter exactly 10 digits",
            maxlength: "Enter exactly 10 digits",
            digits: "Please enter only digits"
        },
        state_: {
            required: "This field is required",
        },
        dist: {
            required: "This field is required",
        }
    },
    submitHandler: function (form) {
        alert("Form submitted successfully!");
    },
});

$("#dataeditbtn").on("click", function () {
    $("#hire_trac_form").valid();
});
});

function get_hire_tract() {
  var apiBaseURL = APIBaseURL;
  var url = apiBaseURL + 'hire_data';
  $.ajax({
      url: url,
      type: "GET",
      headers: {
          'Authorization': 'Bearer ' + localStorage.getItem('token')
      },
      success: function (data) {
          console.log(data, "datata");

          const tableBody = document.getElementById('data-table');
          let tableData = [];
          if (data.hire_details && data.hire_details.length > 0) {
              // Reverse the order of hire_details array
              data.hire_details.reverse();

              let serialNumber = 1;

              data.hire_details.forEach(row => {
                  const fullName = row.first_name + ' ' + row.last_name;
                  let action = `<div class="d-flex">
                      <button class="btn btn-warning text-white btn-sm mx-1" onclick="openViewdata(${row.id})" data-bs-toggle="modal" data-bs-target="#hire_trac_model" id="viewbtn">
                          <i class="fa fa-eye" style="font-size: 11px;"></i>
                      </button>
                      <button class="btn btn-primary btn-sm btn_edit" onclick="fetch_edit_data(${row.id});" data-bs-toggle="modal" data-bs-target="#staticBackdrop" id="yourUniqueIdHere">
                          <i class="fas fa-edit" style="font-size: 11px;"></i>
                      </button>
                      <button class="btn btn-danger btn-sm mx-1" onclick="destroy(${row.id})">
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
                      { title: 'Date/Time' },
                      { title: 'Brand' },
                      { title: 'Model' },
                      { title: 'fullName' },
                      { title: 'mobile' },
                      { title: 'state' },
                      { title: 'district' },
                      { title: 'Action', orderable: false } 
                  ],
                  paging: true,
                  searching: false,
              });
          } else {
              tableBody.innerHTML = '<tr><td colspan="9">No valid data available</td></tr>';
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
get_hire_tract();

        function getSearchBrand() {
            var url = 'http://tractor-api.divyaltech.com/api/customer/get_brand_for_finance';
            $.ajax({
                url: url,
                type: "GET",
                headers: {
                    'Authorization': 'Bearer ' + localStorage.getItem('token')
                },
                success: function (data) {
                    const selects = document.querySelectorAll('#brand_name');
          
                    selects.forEach(select => {
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
            console.log('Requesting models for brand ID:', brand_id); 
            $.ajax({
                url: url,
                type: "GET",
                headers: {
                    'Authorization': 'Bearer ' + localStorage.getItem('token')
                },
                success: function (data) {
                    console.log('Received models data:', data);
                    const selects = document.querySelectorAll('#model_sct');
          
                    selects.forEach(select => {
                      // Clear the existing options
                      select.innerHTML = '<option selected disabled value="">Please select an option</option>';
                  
                      if (Array.isArray(data.model) && data.model.length > 0) {
                          data.model.forEach(modelName => {
                              const option = document.createElement('option');
                              option.textContent = modelName;  // Directly use the model name string
                              option.value = modelName;
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
          getSearchBrand();


// brand
function get_search() {
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
  get_search();
  
   // View data
function openViewdata(userId) {
    var apiBaseURL = APIBaseURL;
    var url = apiBaseURL + 'hire_data/' + userId;
    var headers = {
      'Authorization': 'Bearer ' + localStorage.getItem('token')
    };
  
    $.ajax({
      url: url,
      type: 'GET',
      headers: headers,
      success: function(response) {
        var userData = response.hire_details[0];
        document.getElementById('b_name').innerText=userData.brand_name;
        document.getElementById('m_name').innerText=userData.model;
        document.getElementById('f_name').innerText=userData.first_name;
        document.getElementById('l_name').innerText=userData.last_name;
        document.getElementById('mo_number').innerText=userData.mobile;
        document.getElementById('date_1').innerText=userData.date;
        document.getElementById('state_1').innerText=userData.state_name;
        document.getElementById('dist_1').innerText=userData.district_name;
        document.getElementById('tehsil_1').innerText=userData.tehsil_name;
      },
      error: function(error) {
        console.error('Error fetching user data:', error);
      }
    });
  }

  function fetch_edit_data(id) {
    var apiBaseURL = APIBaseURL;
    var url = apiBaseURL + 'hire_data/' + id;
    var headers = {
        'Authorization': 'Bearer ' + localStorage.getItem('token')
    };
  
    $.ajax({
        url: url,
        type: 'GET',
        headers: headers,
        success: function (response) {
            var Data = response.hire_details[0];
            $('#idUser').val(Data.id);
            $('#product_id').val(Data.product_subject_id);
            $('#first_name1').val(Data.first_name);
            $('#last_name1').val(Data.last_name);
            $('#mobile').val(Data.mobile);
            $('#email').val(Data.email);
            $('#date').val(Data.date);
            
          var brandDropdown = document.getElementById('brand_name_1');
          for (var i = 0; i < brandDropdown.options.length; i++) {
            if (brandDropdown.options[i].text === Data.brand_name) {
              brandDropdown.selectedIndex = i;
              break;
            }
          }

          // $('#model_1').empty(); 
          get_model_1(Data.brand_id); 

          setTimeout(function() { 
              $("#model_1 option").prop("selected", false);
              $("#model_1 option[value='" + Data.model + "']").prop("selected", true);
          }, 1000); 
          
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

// get_hire_tract();

function edit_user() {
    var enquiry_type_id = $("#enquiry_type_id").val();
  var product_id = $("#product_id").val();
  var edit_id = $("#idUser").val();
  var brand_name = $("#brand_name_1").val();
  var model_name = $("#model_1").val();
  var first_name = $("#first_name1").val();
  var last_name = $("#last_name1").val();
  var mobile = $("#mobile").val();
  var state = $("#state_").val();
  var district = $("#dist_").val();
  var tehsil = $("#tehsil_").val();
  var _method = 'put';
  // Validate mobile number
  if (!/^[6-9]\d{9}$/.test(mobile)) {
      alert("Mobile number must start with 6 or above and should be 10 digits");
      return; 
  }

  var paraArr = {
      'brand_name': brand_name,
      'model': model_name,
      'first_name': first_name,
      'last_name': last_name,
      'mobile': mobile,
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
          alert('successfully updated..!')
          get_hire_tract();
          window.location.reload();
          
      },
      error: function (error) {
          console.error('Error fetching data:', error);
      }
  });
}

// **delete data**//
  function destroy(id) {
    console.log(id);
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
        alert("Delete operation successful");
      },
      error: function(error) {
        console.error('Error fetching data:', error);
        alert("Error during delete operation");
      }
    });
  }

 // Data Searching
 function search_data() {
    var selectedBrand = $('#brand_name').val();
    var model = $('#model_sct').val();
    var state = $('#state_sct').val();
    var district = $('#district_sct').val();
    var paraArr = {
      'brand_id': selectedBrand,
      'model': model,
      'state': state,
      'district': district,
    };
    var apiBaseURL = APIBaseURL;
    var url = apiBaseURL + 'search_for_hire_enquiry';
    $.ajax({
      url: url,
      type: 'POST',
      data: paraArr,
      headers: {
        'Authorization': 'Bearer ' + localStorage.getItem('token')
      },
      success: function(searchData) {
        updateTable(searchData);
      },
      error: function(xhr, status, error) {
        if (xhr.status === 404) {
          // Handle 404 error
          console.error('404 Not Found:', error);
          $('#example').DataTable().clear().draw(); 
          $('#data-table').html('<tr><td colspan="9">No valid data available</td></tr>'); 
        } else {
          console.error('Error searching for brands:', error);
        }
      }
    });
  };
  
  function updateTable(data) {
    const tableBody = document.getElementById('data-table');
    tableBody.innerHTML = '';
    let serialNumber = 1;
  
    if (data.hire_details && data.hire_details.length > 0) {
      let tableData = [];
      data.hire_details.forEach(row => {
        const fullName = row.first_name + ' ' + row.last_name;
        let action = `<div class="d-flex">
            <button class="btn btn-warning text-white btn-sm mx-1" onclick="openViewdata(${row.id})" data-bs-toggle="modal" data-bs-target="#hire_trac_model" id="viewbtn">
            <i class="fa fa-eye" style="font-size: 11px;"></i>
        </button>
                <button class="btn btn-primary btn-sm btn_edit" onclick="fetch_edit_data(${row.id});" data-bs-toggle="modal" data-bs-target="#staticBackdrop" id="yourUniqueIdHere">
                    <i class="fas fa-edit" style="font-size: 11px;"></i>
                </button>
                <button class="btn btn-danger btn-sm mx-1" onclick="destroy(${row.id})">
                          <i class="fa fa-trash" style="font-size: 11px;"></i>
                      </button>
               
            </div>
        </td>
    `;
        console.log(row.customer_id);
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
          { title: 'Date/Time' },
          { title: 'Brand' },
          { title: 'Model' },
          { title: 'fullName' },
          { title: 'mobile' },
          { title: 'state' },
          { title: 'district' },
          { title: 'Action', orderable: false }
        ],
        paging: true,
        searching: false,
      });
    } else {
      tableBody.innerHTML = '<tr><td colspan="9">No valid data available</td></tr>';
    }
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
  function get_model_1(brand_id, selectedModel = null) {
    var url = 'http://tractor-api.divyaltech.com/api/customer/get_brand_model/' + brand_id;
    $.ajax({
        url: url,
        type: "GET",
        headers: {
            'Authorization': 'Bearer ' + localStorage.getItem('token')
        },
        success: function (data) {
            console.log(data);
            const select = document.getElementById('model_1');
            select.innerHTML = '<option selected disabled value="">Please select an option</option>';
  
            if (Array.isArray(data.model) && data.model.length > 0) {
                data.model.forEach(modelName => {
                    const option = document.createElement('option');
                    option.textContent = modelName; // Directly use the model name as a string
                    option.value = modelName;
                    select.appendChild(option);
  
                    // Auto-select the option if it matches the selectedModel
                    if (selectedModel && modelName === selectedModel) {
                        option.selected = true;
                    }
                });
            } else {
                select.innerHTML = '<option>No valid data available</option>';
            }
        },
        error: function (error) {
            console.error('Error fetching model data:', error);
        }
    });
  }
  // function get_model_1(brand_id, selectedModel) {
  //   var url = 'http://tractor-api.divyaltech.com/api/customer/get_brand_model/' + brand_id;
  //   $.ajax({
  //       url: url,
  //       type: "GET",
  //       headers: {
  //           'Authorization': 'Bearer ' + localStorage.getItem('token')
  //       },
  //       success: function (data) {
  //           console.log(data);
  //           const select = document.getElementById('model_1');
  //           select.innerHTML = '<option selected disabled value="">Please select an option</option>';
  
  //           if (data.model.length > 0) {
  //               data.model.forEach(row => {
  //                   const option = document.createElement('option');
  //                   option.textContent = row.model;
  //                   option.value = row.model;
  //                   select.appendChild(option);
  //                   if (row.model === selectedModel) {
  //                       option.selected = true;
  //                   }
  //               });
  //           } else {
  //               select.innerHTML = '<option>No valid data available</option>';
  //           }
  //       },
  //       error: function (error) {
  //           console.error('Error fetching data:', error);
  //       }
  //   });
  // }
  
  get_1();