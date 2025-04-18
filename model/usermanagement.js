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
      equalTo:"Please enter as same password above"
    },
    email:{
        required:"Please Enter Your Email",
        email:"Please Enter vaild Email",
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
    event.preventDefault();
    var first_name = $('#first_name').val();
    var last_name = $('#last_name').val();
    var email = $('#email').val();
    var mobile = $('#mobile').val();
    var password = $('#password').val();
    var password_confirmation = $('#password_confirmation').val();
    var user_type = $('#user_type').val();

    if (first_name.trim() === '' || last_name.trim() === '' || email.trim() === '' || mobile.trim() === '' || password.trim() === '' || password_confirmation.trim() === '') {
       
        alert('All fields are required.');
        return; 
    }

    var paraArr = {
        'first_name': first_name,
        'last_name': last_name,
        'email': email,
        'mobile': mobile,
        'password': password,
        'password_confirmation': password_confirmation,
        'user_type': user_type
    };

    var apiBaseURL = APIBaseURL; 
    var url = apiBaseURL + 'user_registration';
    $.ajax({
        url: url,
        type: "POST",
        data: paraArr,
        success: function(result) {
            console.log(result, "result");
            $("#staticBackdrop").modal("hide");
            var msg = "User Inserted successfully !"
            $("#errorStatusLoading").modal('show');
            $("#errorStatusLoading").find('.modal-title').html('Success');
            $("#errorStatusLoading").find('.modal-body').html(msg);
            // Reset the form
            $('#form_add')[0].reset();
        },
        error: function(error) {
            console.error('Error fetching data:', error.status);
            console.error('Error fetching data:', error.responseJSON.error);
            var msg = error.responseJSON.email ? error.responseJSON.email[0] : 'An error occurred.';
            if (msg === "The email has already been taken.") {
                alert('Email address already exists.');
            } else {
                $("#errorStatusLoading").modal('show');
                $("#errorStatusLoading").find('.modal-title').html('Error');
                $("#errorStatusLoading").find('.modal-body').html(msg);
            }
        }
    });
}

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
            tableBody.innerHTML = ''; 

            let users = data.user;

            if (users.length > 0) {
                let serialNumber = users.length;
                let tableData = [];
                users.forEach(row => {
                    let originalDate = new Date(row.created_at);
                    let day = originalDate.getDate();
                    let month = originalDate.getMonth() + 1;
                    let year = originalDate.getFullYear();

                    let formatDate = `${day}-${month}-${year}`;
                    let userTypeLabel = row.user_type == 0 ? 'Admin' : 'User';
                    let status = row.status == 0 ? 'Active' : 'InActive';
                    let action = `<div class="float-start">
                                    <button class="btn btn-danger btn-sm" id="delete_user" onclick="destroy(${row.id});" style="padding:5px">
                                        <i class="fa fa-trash" style="font-size: 11px;"></i>
                                    </button>
                                    <button class="btn btn-primary btn-sm btn_edit" data-toggle="modal" onclick="fetch_edit_data(${row.id});" data-target="#exampleModal" id="yourUniqueIdHere" style="padding:5px">
                                        <i class="fas fa-edit" style="font-size: 11px;"></i>
                                    </button>
                                </div>`;
                    tableData.push([
                        serialNumber--,
                        formatDate,
                        row.first_name,
                        row.mobile,
                        userTypeLabel,
                        status,
                        action
                    ]);
                });

                $('#example').DataTable().destroy();
                $('#example').DataTable({
                        data: tableData,
                        columns: [
                          { title: 'S.No.' },
                          { title: 'Date' },
                          { title: 'Name' },
                          { title: 'Mobile Number' },
                          { title: 'User Type' },
                          { title: 'Status' },
                          { title: 'Action', orderable: false } 
                      ],
                        paging: true,
                        searching: false,
                  });
              
            } else {
                tableBody.innerHTML = '<tr><td colspan="7">No valid data available</td></tr>';
            }
        },
        error: function (error) {
            console.error('Error fetching data:', error);
            console.error('Error fetching data:', error.status);
            console.error('Error fetching data:', error.responseJSON.error);
            if(error.status == '401' && error.responseJSON.error == 'Token expired or invalid'){
              $("#errorStatusLoading").modal('show');
              $("#errorStatusLoading").find('.modal-title').html('Error');
              $("#errorStatusLoading").find('.modal-body').html(error.responseJSON.error);
              window.location.href = baseUrl + "login.php"; 

            }
            
        }
    });
}

get();


function destroy(id) {
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
      console.log("Delete request successful");
      var msg = "User Deleted successfully !"
        $("#errorStatusLoading").modal('show');
        $("#errorStatusLoading").find('.modal-title').html('Success');
        $("#errorStatusLoading").find('.modal-body').html(msg);
    },
    error: function(error) {
      console.error('Error fetching data:', error);
      var msg = error;
        $("#errorStatusLoading").modal('show');
        $("#errorStatusLoading").find('.modal-title').html('Error');
        $("#errorStatusLoading").find('.modal-body').html(msg);
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
      $('#first_name1').val(userData.first_name);
      $('#last_name1').val(userData.last_name);
      $('#mobile1').val(userData.mobile);
      $('#email1').val(userData.email);
      console.log(userData.email);
      $('#emaipassword_editl1').val(userData.password);
      $('#password_confirmation_edit').val(userData.password_confirmation);
      $('#user_type1').val(userData.user_type);
      $('#status1').val(userData.status);
      $('#idUser').val(userData.id);
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
        var msg = "User Updated successfully !"
        $("#errorStatusLoading").modal('show');
        $("#errorStatusLoading").find('.modal-title').html('Success');
        $("#errorStatusLoading").find('.modal-body').html(msg);
      },
      error: function (error) {
        console.error('Error fetching data:', error);
        var msg = error;
        $("#errorStatusLoading").modal('show');
        $("#errorStatusLoading").find('.modal-title').html('Error');
        $("#errorStatusLoading").find('.modal-body').html(msg);
      }
  })
}

