$(document).ready(function() {
console.log("ready");

  jQuery.validator.addMethod("customPhoneNumber", function(value, element) {
    return /^[6-9]\d{9}$/.test(value); 
  }, "Phone number must start with 6 or above");

  $('#password, #password_confirmation').on('keyup', function(){
    $('.confirm-message').removeClass('success-message').removeClass('error-message');
    let password=$('#password').val();
    let confirm_password=$('#password_confirmation').val();
    if(password===""){
      $('.confirm-message').text("Password Field cannot be empty").addClass('error-message');
    }
    else if(confirm_password===""){
        $('.confirm-message').text("Confirm Password Field cannot be empty").addClass('error-message');
    }
    else if(confirm_password===password)
    {
        $('.confirm-message').text('Password Match!').addClass('success-message');
    }
    else{
        $('.confirm-message').text("Password Doesn't Match!").addClass('error-message');
    }

  });
$('#form_add').validate({
rules:{
  first_name:{
        required:true,
    },
    last_name:{
        required:true,
    },
    mobile:{
      required:true,
      minlength: 10,
      maxlength:10,
      digits: true,
      customPhoneNumber: true
    },
    password:{
        required:true,
        minlength:5
    },
    password_confirmation:{
     required:true,
     minlength:5,
     
     equalTo:'[name="password"]'
    },
    email:{
        required:true,
        email:true
    },
    user_type:{
        required:true,
    },
    status:{
        required:true,
    }
},
messages:{
  first_name:{
        required:"Please Enter Your First Name",
    },
    last_name:{
        required:"Please Enter Your Last Name",
    },
    mobile:{
      required:"Please Enter Your Contact Number",
      minlength: "Phone Number must be of 10 Digit long",
      maxlength:"Enter only 10 digits",
      digits: "Please enter only digits"
    },
    password:{
      required:"Please provide a valid password",
      minlenght:"Your password must be atleast 5 character long"
    },
    password_confirmation:{
      required:"Please provide a valid password",
      minlenght:"Your password must be atleast 5 character long",
      equalTo:"Please enter  as same password above"
    },
    email:{
        required:"Please Enter Your Email",
    },
    user_type:{
        required:"Please Select Your User Type",
    },
    status:{
        required:"Please select Your Status",
    }
},
submitHandler: function(form) {
form.submit();
}
});
$('#save').on('click', function() {
  $('#form_add').valid();
  console.log($('#form_add').valid());
});



  $('#save').click(user_registration);
  $('#dataedit').click(edit_user);
  });

  function user_registration(event) {
    // Get values from form fields
    event.preventDefault();
    console.log('jfhfhw');
    var first_name = $('#first_name').val();
    var last_name = $('#last_name').val();
    var email = $('#email').val();
    var mobile = $('#mobile').val();
    var password = $('#password').val();
    var password_confirmation = $('#password_confirmation').val();
    var user_type = $('#user_type').val();

    // Prepare data to send to the server
    var paraArr = {
      'first_name': first_name,
      'last_name': last_name,
      'email': email,
      'mobile': mobile,
      'password': password,
      'password_confirmation': password_confirmation,
      'user_type': user_type
    };

    // var url = "<?php echo $APIBaseURL; ?>user_registration";
    var apiBaseURL =APIBaseURL;
    var url = apiBaseURL + 'user_registration';
    console.log(url);

    // var token = localStorage.getItem('token');
    // var headers = {
    //   'Authorization': 'Bearer ' + token
    // };

    // Make an AJAX request to the server
    $.ajax({
      url: url,
      type: "POST",
      data: paraArr,
      // headers: headers,
      success: function (result) {
        console.log(result, "result");
        get();
        console.log("Add successfully");
        alert('successfully inserted..!')
      },
      error: function (error) {
        console.error('Error fetching data:', error);
      }
    });
  }

  // fetch data
  function get() {
    var apiBaseURL = APIBaseURL;
    var url = apiBaseURL + 'getUsers';
    $.ajax({
        url: url,
        type: "GET",
        headers: {
            'Authorization': 'Bearer ' + localStorage.getItem('token')
        },
        success: function (data) {
            const tableBody = document.getElementById('data-table');
            tableBody.innerHTML = ''; // Clear previous data

            let users = data.user;

            if (users.length > 0) {
                // Initialize serialNumber outside the loop
                let serialNumber = 1;

                // Loop through the data and create table rows
                users.map(row => {
                    const tableRow = document.createElement('tr');
                    let originalDate = new Date(row.created_at);

                    let day = originalDate.getDate();
                    let month = originalDate.getMonth() + 1;
                    let year = originalDate.getFullYear();

                    let formatDate = `${day}-${month}-${year}`;
                    let userTypeLabel = row.user_type == 0 ? 'Admin' : 'User';
                    let status = row.status == 0 ? 'Active' : 'InActive';

                    tableRow.innerHTML = `
                        <td>${serialNumber}</td>
                        <td>${formatDate}</td>
                        <td>${row.first_name}</td>
                        <td>${row.mobile}</td>
                        <td>${userTypeLabel}</td>
                        <td>${status}</td>
                        <td>
                            <div class="float-start">
                                <button class="btn btn-danger btn-sm" id="delete_user" onclick="destroy(${row.id});">
                                    <i class="fa fa-trash" style="font-size: 11px;"></i>
                                </button>
                                    <button class="btn btn-primary btn-sm btn_edit" data-toggle="modal"onclick="fetch_edit_data(${row.id});" data-target="#exampleModal" id="yourUniqueIdHere">
                                    <i class="fas fa-edit" style="font-size: 11px;"></i>
                                  </button>
                            </div>
                        </td>
                    `;

                    serialNumber++;
                    tableBody.appendChild(tableRow);
                });
            } else {
                tableBody.innerHTML = '<tr><td colspan="7">No valid data available</td></tr>';
            }
        },
        error: function (error) {
            console.error('Error fetching data:', error);
            // Display an error message or handle the error as needed
        }
    });
}
get();
// delete data
function destroy(id) {
//   var url = "<?php echo $APIBaseURL; ?>deleteUser/" + id;
var apiBaseURL =APIBaseURL;
var url = apiBaseURL + "deleteUser/" + id;
  var token = localStorage.getItem('token');
  
  if (!token) {
    console.error("Token is missing");
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
      get();
      console.log("Delete request successful");
      alert("Delete operation successful");
    },
    error: function(error) {
      console.error('Error fetching data:', error);
      alert("Error during delete operation");
    }
  });
}


function fetch_edit_data(userId) {
  var apiBaseURL = APIBaseURL;
  var url = apiBaseURL + 'getSelfData/' + userId;

  var headers = {
    'Authorization': 'Bearer ' + localStorage.getItem('token')
  };

  $.ajax({
    url: url,
    type: 'GET',
    headers: headers,
    success: function(response) {
      var userData = response.user[0];
      // $('#idUser').val(userData.id);
      $('#first_name1').val(userData.first_name);
      $('#last_name1').val(userData.last_name);
      $('#mobile1').val(userData.mobile);
      $('#email1').val(userData.email);
      console.log(userData.email);
      $('#user_type1').val(userData.user_type);
      $('#status1').val(userData.status);
      $('#idUser').val(userData.id);
      // editUserId=userData.id;


      // $('#exampleModal').modal('show');
    },
    error: function(error) {
      console.error('Error fetching user data:', error);
    }
  });
}



function edit_user(){
 var edit_id = $("#idUser").val();
  var first_name = $("#first_name1").val();
  var last_name = $("#last_name1").val();
  var email = $("#email1").val();
  var mobile = $("#mobile1").val();
  var status = $("#status1").val();
  var user_type1 = $("#user_type1").val();
  var paraArr = {
    'first_name': first_name,
    'last_name': last_name,
    'email': email,
    'mobile': mobile,
    'user_type': user_type1,
    'id': edit_id,
    'status':status,

  };
  var apiBaseURL = APIBaseURL;
  var url = apiBaseURL + 'updateUser/' + edit_id;

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
        get();
        console.log("updated successfully");
        alert('successfully updated..!')
      },
      error: function (error) {
        console.error('Error fetching data:', error);
      }
  })
}


