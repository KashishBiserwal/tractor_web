$(document).ready(function() {
    $('#undate_btn_nursery_enq').click(edit_insurance);
});

function get_loan() {
    var apiBaseURL = APIBaseURL;
    var url = apiBaseURL + 'insurance_data';
    
    $.ajax({
        url: url,
        type: "GET",
        headers: {
            'Authorization': 'Bearer ' + localStorage.getItem('token')
        },
        success: function (data) {
            const tableBody = $('#data-table'); // Use jQuery selector for the table body
            tableBody.empty(); // Clear previous data
  
            // let serialNumber = 1;
            let serialNumber = data.enquiry_for_insurance_data.length;
  
            if (data.enquiry_for_insurance_data && data.enquiry_for_insurance_data.length > 0) {
              
                var table = $('#example').DataTable({
                    paging: true,
                    searching: true,
                    columns: [
                        { title: 'S.No.' },
                        { title: 'Date' },
                        { title: 'Insurance Type' },
                        { title: 'Brand' },
                        { title: 'Full Name' },
                        { title: 'State' },
                        { title: 'District' },
                        { title: 'Action', orderable: false }
                    ]
                });
  
                data.enquiry_for_insurance_data.forEach(row => {
                    const fullName = row.first_name + ' ' + row.last_name;
  
                    // Add row to DataTable
                    table.row.add([
                        serialNumber--,
                        row.date,
                        row.insurance_type_value,
                        row.brand_name,
                        fullName,
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
  
                    // serialNumber++;
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
  get_loan();

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
        console.log("Delete request successful");
        alert("Delete operation successful");
        window.location.reload();
      },
      error: function(error) {
        console.error('Error fetching data:', error);
        alert("Error during delete operation");
      }
    });
  }


//   get insurance type
function get_insurance_type() {
    var url = 'http://tractor-api.divyaltech.com/api/customer/get_all_insurance_type';
    $.ajax({
        url: url,
        type: "GET",
        headers: {
            'Authorization': 'Bearer ' + localStorage.getItem('token')
        },
        success: function (data) {
            console.log(data);
            const selects = document.querySelectorAll('#insurance_type');

            selects.forEach(select => {
                select.innerHTML = '<option selected disabled value="">Please select an option</option>';

                if (data.insuranceType.length > 0) {
                    data.insuranceType.forEach(row => {
                        const option = document.createElement('option');
                        option.textContent = row.insurance_type_value;
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
get_insurance_type();

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
                  option.value = row.brand_id;
                  select.appendChild(option);
              });

              // Add event listener to brand dropdown
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

function get_model_1(brand_id) {
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

//****edit fetch****
function fetch_edit_data(id) {
    var apiBaseURL = APIBaseURL;
    var url = apiBaseURL + 'insurance_data/' + id;
    console.log(url);
  
    var headers = {
        'Authorization': 'Bearer ' + localStorage.getItem('token')
    };
  
    $.ajax({
        url: url,
        type: 'GET',
        headers: headers,
        success: function (response) {
            var Data = response.enquiry_for_insurance_data[0];
            $('#userId').val(Data.id);
            $('#first_name').val(Data.first_name);
            $('#last_name').val(Data.last_name);
            $('#mobile_no').val(Data.mobile);
            $('#vehicle_no').val(Data.vehicle_registered_num);
            $('#registerd_year').val(Data.registered_year);

      
  

            $("#insurance_type option").prop("selected", false);
            $("#insurance_type option[value='" + Data.insurance_type_id+ "']").prop("selected", true);

        
            var brandDropdown = document.getElementById('brand_name');
            for (var i = 0; i < brandDropdown.options.length; i++) {
                if (brandDropdown.options[i].text === Data.brand_name) {
                    brandDropdown.selectedIndex = i;
                    break;
                }
            }

            //  $("#model_name option").prop("selected", false);
            // $("#model_name option[value='" +Data.model+ "']").prop("selected", true);

            $('#model_name').empty();
            get_model_1(Data.brand_id);
            setTimeout(function () { 
                $("#model_name option").prop("selected", false);
                $("#model_name option[value='" + Data.model + "']").prop("selected", true);
            }, 2000); 
  
            // setSelectedOption('model_name', Data.brand_id);
            setSelectedOption('state_2', Data.state_id);
            setSelectedOption('dist_2', Data.district_id);
            
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
  
//   edit form data
function edit_insurance() {
    var enquiry_type_id = 17;
    var id = $("#userId").val();
    var first_name = $("#first_name").val();
    var last_name = $("#last_name").val();
    var mobile_no = $("#mobile_no").val();
    var brand_name = $("#brand_name").val();
    var model_name = $("#model_name").val();
    var vehicle_no = $("#vehicle_no").val();
    var registerd_year = $("#registerd_year").val();
    var insurance_type = $("#insurance_type").val();
    var state_2 = $("#state_2").val();
    var dist_2 = $("#dist_2").val();
    var tehsil_2 = $("#tehsil_2").val();
    
    // Validate mobile number
    if (!/^[6-9]\d{9}$/.test(mobile_no)) {
        alert("Mobile number must start with 6 or above and should be 10 digits");
        return; // Exit the function if validation fails
    }
    
    var paraArr = {
        'id':id,
        'enquiry_type_id':enquiry_type_id,
        'first_name': first_name,
        'last_name': last_name,
        'mobile': mobile_no,
        'brand_id': brand_name,
        'model': model_name,
        'vehicle_registered_num': vehicle_no,
        'registered_year': registerd_year,
        'insurance_type_id': insurance_type,
        'state': state_2,
        'district': dist_2,
        'tehsil': tehsil_2,
    };
    
    var apiBaseURL = APIBaseURL;
    var url = apiBaseURL + 'customer_enquiries/' + id;
    
    var headers = {
        'Authorization': 'Bearer' + localStorage.getItem('token')
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
            alert('successfully updated..!');
        },
        error: function (error) {
            console.error('Error fetching data:', error);
        }
    });
    }
 
// View data
function openViewdata(userId) {
    var apiBaseURL = APIBaseURL;
    var url = apiBaseURL + 'insurance_data/' + userId;
  
    var headers = {
      'Authorization': 'Bearer ' + localStorage.getItem('token')
    };
  
    $.ajax({
      url: url,
      type: 'GET',
      headers: headers,
    
      success: function(response) {
        var userData = response.enquiry_for_insurance_data[0];
        var policyClaim = userData.previous_policy_claim === 1 ? "Yes" : "No";
        var name = userData.first_name +" "+userData.last_name;
        document.getElementById('last_name2').innerText=name;
        document.getElementById('number').innerText=userData.mobile;
        document.getElementById('brand_id').innerText=userData.brand_name;
        document.getElementById('model1').innerText=userData.model;
        document.getElementById('vehicle').innerText=userData.vehicle_registered_num;
        document.getElementById('regi_no').innerText=userData.registered_year;
        document.getElementById('state1').innerText=userData.state_name;
        document.getElementById('district1').innerText=userData.district_name;
        document.getElementById('tehsil1').innerText=userData.tehsil_name;
        document.getElementById('insurance_type_name1').innerText=userData.insurance_type_value;
        document.getElementById('policy').innerText = policyClaim;
      },
      error: function(error) {
        console.error('Error fetching user data:', error);
      }
    });
  } 

//   search dataaa
function search_data() {
    var selectedBrand = $('#brand_search').val();
    var state = $('#state_state').val();
    var district = $('#dist_state').val();
    var paraArr = {
      'brand_id': selectedBrand,
      'state':state,
      'district':district,
    };
  
    var apiBaseURL = APIBaseURL;
    var url = apiBaseURL + 'search_for_insurance_enquiry';
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
                updateTable([]); // Pass an empty array to updateTable function
            } else {
                console.error('Error searching for insurance:', error);
            }
        }
    });
}

function updateTable(data) {
    const table = $('#example').DataTable();
    table.clear().draw(); // Clear table data before adding new rows

    const tableBody = $('#data-table');
    tableBody.empty();

    if (data && data.enquiry_for_insurance_data && data.enquiry_for_insurance_data.length > 0) {
        data.enquiry_for_insurance_data.forEach(row => {
            const fullName = row.first_name + ' ' + row.last_name;
            let action = `<div class="d-flex">
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

            table.row.add([
                '',
                row.date,
                row.insurance_type_value,
                row.brand_name,
                fullName,
                row.state_name,
                row.district_name,
                action
            ]).draw(false);
        });
    } else {
        // Display a message if there's no valid data
        tableBody.html('<tr><td colspan="8">No valid data available</td></tr>');
    }
}

  function get_search() {
    // var url = "<?php echo $APIBaseURL; ?>getBrands";
    var url = 'http://tractor-api.divyaltech.com/api/customer/get_brand_for_finance';
    $.ajax({
        url: url,
        type: "GET",
        headers: {
            'Authorization': 'Bearer' + localStorage.getItem('token')
        },
        success: function (data) {
            console.log(data);
            const select = document.getElementById('brand_search');
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
get_search();

function resetform(){
    $('#brand_search').val();
    $('#state_state').val();
    $('#dist_state').val();
    // get_loan();
    window.location.reload();
}


