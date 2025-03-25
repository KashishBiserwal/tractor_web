$(document).ready(function(){
    $('#undate_btn_nursery_enq').click(edit_insurance);
    jQuery.validator.addMethod("customPhoneNumber", function(value, element) {
    return /^[6-9]\d{9}$/.test(value); 
    }, "Phone number must start with 6 or above");
});
    //****get data***
    function get_loan() {
        var apiBaseURL = APIBaseURL;
        var url = apiBaseURL + 'loan_data';
        $.ajax({
            url: url,
            type: "GET",
            headers: {
                'Authorization': 'Bearer ' + localStorage.getItem('token')
            },
            success: function (data) {
                const tableBody = $('#data-table'); 
                tableBody.empty(); 
                let serialNumber = data.Enquiry_for_loan_data.length;
                if (data.Enquiry_for_loan_data && data.Enquiry_for_loan_data.length > 0) {
                    var table = $('#example').DataTable({
                        paging: true,
                        searching: true,
                        columns: [
                            { title: 'S.No.' },
                            { title: 'Date' },
                            { title: 'Loan Type' },
                            { title: 'Name' },
                            { title: 'Phone Number'},
                            { title: 'District'},
                            { title: 'State' },
                            { title: 'Action', orderable: false }
                        ]
                    });
    
                    data.Enquiry_for_loan_data.forEach(row => {
                        const fullName = row.first_name + ' ' + row.last_name;
                        table.row.add([
                            serialNumber--,
                            row.date,
                            row.loan_type_value,
                            fullName,
                            row.mobile,
                            row.district_name,
                            row.state_name,
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
        alert("Delete operation successful");
        window.location.reload();
      },
      error: function(error) {
        console.error('Error fetching data:', error);
        alert("Error during delete operation");
      }
    });
  }

// get insurance type
function get_loan_type() {
    var url = 'https://shopninja.in/bharatagri/api/public/api/customer/get_all_loan_type';
    $.ajax({
        url: url,
        type: "GET",
        headers: {
            'Authorization': 'Bearer ' + localStorage.getItem('token')
        },
        success: function (data) {
            const select = $('#insurance_type');
            select.empty().append('<option selected disabled value="">Please select an option</option>');
            if (data.loanType.length > 0) {
                data.loanType.forEach(row => {
                    const option = $('<option>');
                    option.text(row.loan_type_value);
                    option.val(row.id);
                    select.append(option);
                });
            } else {
                select.append('<option>No valid data available</option>');
            }
        },
        error: function (error) {
            console.error('Error fetching data:', error);
        }
    });
}
get_loan_type();

function get_1() {
    var url = 'https://shopninja.in/bharatagri/api/public/api/customer/get_brand_for_finance';
    $.ajax({
        url: url,
        type: "GET",
        headers: {
            'Authorization': 'Bearer ' + localStorage.getItem('token')
        },
        success: function (data) {
            const select = document.getElementById('brand_name');
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
  
  function get_model_1(id) {
    var url = 'https://shopninja.in/bharatagri/api/public/api/customer/get_brand_model/' + id;
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

//   for search
function get_search1() {
    var url = 'https://shopninja.in/bharatagri/api/public/api/customer/get_brand_for_finance';
    $.ajax({
        url: url,
        type: "GET",
        headers: {
            'Authorization': 'Bearer ' + localStorage.getItem('token')
        },
        success: function (data) {
            const select = document.getElementById('brand_search');
            select.innerHTML = '<option selected disabled value="">Please select an option</option>';
  
            if (data.brands.length > 0) {
                data.brands.forEach(row => {
                    const option = document.createElement('option');
                    option.textContent = row.brand_name;
                    option.value = row.brand_id;
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
get_search1();
  
//****edit fetch****
function fetch_edit_data(id) {
    var apiBaseURL = APIBaseURL;
    var url = apiBaseURL + 'get_enquiry_for_loan_data_by_id/' + id;
    var headers = {
        'Authorization': 'Bearer ' + localStorage.getItem('token')
    };
    $.ajax({
        url: url,
        type: 'GET',
        headers: headers,
        success: function (response) {
            var Data = response.Enquiry_for_loan_data[0];
            $('#userId').val(Data.id);
            $('#first_name').val(Data.first_name);
            $('#last_name').val(Data.last_name);
            $('#mobile_no').val(Data.mobile);
            $('#vehicle_no').val(Data.vehicle_registered_num);
            $("#registeredYear").val(Data.registered_year);

            var insuranceTypeDropdown = document.getElementById('insurance_type');
            for (var i = 0; i < insuranceTypeDropdown.options.length; i++) {
                if (insuranceTypeDropdown.options[i].value == Data.loan_type_id) {
                    insuranceTypeDropdown.selectedIndex = i;
                    break;
                }
            }
            var brandDropdown = document.getElementById('brand_name');
            for (var i = 0; i < brandDropdown.options.length; i++) {
              if (brandDropdown.options[i].text === Data.brand_name) {
                brandDropdown.selectedIndex = i;
                break;
              }
            }
            $('#model_name').empty();
            get_model_1(Data.brand_id);
            setTimeout(function () { 
                $("#model_name option").prop("selected", false);
                $("#model_name option[value='" + Data.model + "']").prop("selected", true);
            }, 2000); 
            setSelectedOption('state_2', Data.state_id);
            getDistricts(Data.state_id, 'district-dropdown', 'tehsil-dropdown');
            setTimeout(function() {
              setSelectedOption('dist_2', Data.district_id);
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

//   edit form data
function edit_insurance() {
    var enquiry_type_id = 15;
    var id = $("#userId").val();
    var first_name = $("#first_name").val();
    var last_name = $("#last_name").val();
    var mobile_no = $("#mobile_no").val();
    var brand = $("#brand_name").val();
    var model_name = $("#model_name").val();
    var vehicle_no = $("#vehicle_no").val();
    var registerd_year = $("#registerd_year").val();
    var insurance_type = $("#insurance_type").val();
    var state_2 = $("#state_2").val();
    var dist_2 = $("#dist_2").val();
    var tehsil_2 = $("#tehsil_2").val();
    if (!/^[6-9]\d{9}$/.test(mobile_no)) {
        alert("Mobile number must start with 6 or above and should be 10 digits");
        return; 
    }
    var paraArr = {
        'id':id,
        'enquiry_type_id':enquiry_type_id,
        'first_name': first_name,
        'last_name': last_name,
        'mobile': mobile_no,
        'brand_id': brand,
        'model': model_name,
        'vehicle_registered_num': vehicle_no,
        'registered_year': registerd_year,
        'loan_type_id': insurance_type,
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
    var url = apiBaseURL + 'get_enquiry_for_loan_data_by_id/' + userId;
    var headers = {
      'Authorization': 'Bearer ' + localStorage.getItem('token')
    };
  
    $.ajax({
      url: url,
      type: 'GET',
      headers: headers,
      success: function(response) {
        var userData = response.Enquiry_for_loan_data[0];
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
        document.getElementById('insurance_type_name1').innerText=userData.loan_type_value;
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
        'state': state,
        'district': district,
    };

    var apiBaseURL = APIBaseURL;
    var url = apiBaseURL + 'search_for_loan_enquiry';
    console.log(url,'dfghdfgdfg');
    $.ajax({
        url: url,
        type: 'POST',
        data: paraArr,
        headers: {
            'Authorization': 'Bearer ' + localStorage.getItem('token')
        },
        success: function (data) {
            const tableBody = $('#data-table'); 
            const dataTable = $('#example').DataTable();
            dataTable.clear().draw();

            if (data.Enquiry_for_loan_data && data.Enquiry_for_loan_data.length > 0) {
                let serialNumber = 1; 
                data.Enquiry_for_loan_data.forEach(row => {
                    const fullName = row.first_name + ' ' + row.last_name;
                    dataTable.row.add([
                        serialNumber--,
                        row.date,
                        row.loan_type_value,
                        fullName,
                        row.mobile,
                        row.district_name,
                        row.state_name,
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
                });
            } else {
                tableBody.html('<tr><td colspan="6">No valid data available</td></tr>');
            }
        },
        error: function (xhr, status, error) {
            if (xhr.status === 404) {
                const tableBody = $('#data-table');
                tableBody.html('<tr><td colspan="8">No matching data available</td></tr>');
            } else {
                console.error('Error fetching data:', error);
            }
        }
    });
}
function resetform(){
    $('#brand_search').val();
    $('#state_state').val();
    $('#dist_state').val();
    window.location.reload();
}

