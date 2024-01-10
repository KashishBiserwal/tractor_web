
$(document).ready(function(){
  $('#dataeditbtn').click(edit_user);
  
  jQuery.validator.addMethod("customPhoneNumber", function(value, element) {
    return /^[6-9]\d{9}$/.test(value);
}, "Phone number must start with 6 or above and should be 10 digits");

$("#hire_trac_form").validate({
    rules: {
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
            console.log(data);
            const tableBody = document.getElementById('data-table');
            let serialNumber = 1;
  
            if (data.hire_details && data.hire_details.length > 0) {
                data.hire_details.forEach(row => {
                    const fullName = row.first_name + ' ' + row.last_name;
                    const tableRow = document.createElement('tr');
                    tableRow.innerHTML = `
                        <td>${serialNumber}</td>
                        <td>${row.date}</td>
                        <td>${fullName}</td> 
                        <td>${row.mobile}</td>
                        <td>${row.state}</td>
                        <td>${row.district}</td>
                        <td>
                            <div class="d-flex">
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
                    tableBody.appendChild(tableRow);
                    serialNumber++;
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
  get_hire_tract();

  function fetch_edit_data(id) {
    var apiBaseURL = APIBaseURL;
    var url = apiBaseURL + 'hire_data/' + id;
    console.log(url);
  
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
            $('#first_name1').val(Data.first_name);
            $('#last_name1').val(Data.last_name);
            $('#mobile').val(Data.mobile);
            $('#state_').val(Data.state);
            console.log(Data.state);
            $('#dist_').val(Data.district);
            $('#tehsil_').val(Data.tehsil);
        },
        error: function (error) {
            console.error('Error fetching user data:', error);
        }
    });
  }

// get_hire_tract();

function edit_user() {
  var enquiry_type_id = $("#enquiry_type_id").val();
  var edit_id = $("#idUser").val();
  var first_name = $("#first_name1").val();
  var last_name = $("#last_name1").val();
  var mobile = $("#mobile").val();
  console.log(mobile);
  var state = $("#state_").val();
  var district = $("#dist_").val();
  var tehsil = $("#tehsil_").val();

  // Validate mobile number
  if (!/^[6-9]\d{9}$/.test(mobile)) {
      alert("Mobile number must start with 6 or above and should be 10 digits");
      return; // Exit the function if validation fails
  }

  var paraArr = {
      'first_name': first_name,
      'last_name': last_name,
      'mobile': mobile,
      'state': state,
      'district': district,
      'tehsil': tehsil,
      'id': edit_id,
      'enquiry_type_id': enquiry_type_id,
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
          alert('successfully updated..!')
          get_hire_tract();
          window.location.reload();
          console.log("updated successfully");
          
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
      document.getElementById('f_name').innerText=userData.first_name;
      document.getElementById('l_name').innerText=userData.last_name;
      document.getElementById('mo_number').innerText=userData.mobile;
      document.getElementById('state_1').innerText=userData.state;
      document.getElementById('dist_1').innerText=userData.district;
      document.getElementById('tehsil_1').innerText=userData.tehsil;
      
        // $('#exampleModal').modal('show');
    },
    error: function(error) {
      console.error('Error fetching user data:', error);
    }
  });
}