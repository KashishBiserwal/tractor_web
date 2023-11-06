<!DOCTYPE html>
<html lang="en">

<head>
   <?php
   include 'includes/headertag.php';
   ?>
</head>
<style>
    .error-message {
    color: red;
   
}
</style>
<section class="bg-light">
  <div class="login-page ">
          <div class="container form-container bg-light">
                      <div class="bg-white shadow rounded">
                              <div class=" pe-0">
                                  <div class="form-center h-100 py-5 px-5">
                                      <form action="" id="form" class="row g-2">
                                        <img src="assets/images/user.webp" class="rounded-circle text-center user-login" alt="">
                                        <h5 class="text-center">Admin Login </h5>
                                              <div class="col-12">
                                                  <label class="text-dark fw-bold"><i class="fa-solid fa-user"></i> Email ID<span class="text-danger">*</span></label>
                                                      
                                                      <input type="text" class="form-control py-2" id="email" for="email" name="email" placeholder="Enter Email Id">
                                                      <small></small>
                                              </div>
                                              <div class="col-12">
                                                  <label class="text-dark fw-bold"><i class="fa-solid fa-lock"></i> Password<span class="text-danger">*</span></label>
                                                  
                                                      <input type="password" class="form-control" for="password" name="password" id="password" placeholder="Enter Password">
                                                      <small></small>
                                              </div>
                                              <div class="col-12 text-center">
                                                <button type="submit" class="btn px-4 bg-success" id="login">Login</button>
                                              </div>
                                              <div class="col-12 text-center">
                                                  <a href="#" class="text-success text-decoration-none">Forgot Password?</a>
                                              </div>
                                      </form>
                                  </div>
                              </div>
                      </div>
          </div>
  </div>
  <?php
   include 'includes/footertag.php';
   ?> 

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>
<script>
$(document).ready(function() {
    $("#form").validate({
        rules: {
            email: {
                required: true,
                email: true
            },
            password: {
                required: true
            }
        },
        messages: {
            email: "Please Enter Your Email id",
            password: "Please provide a valid password"
        },
        submitHandler: function(form) {
            login();
        }
    });

    if (document.getElementById('login')) {
        document.getElementById('login').addEventListener('click', function(event) {
            event.preventDefault();
            $("#form").submit();
        });
    }
});

function login() {
    var email = document.getElementById('email').value;
    var password = document.getElementById('password').value;
    var paraArr = {};
    paraArr['email'] = email;
    paraArr['password'] = password;
    var url = "<?php echo $APIBaseURL; ?>user_login";
    $.ajax({
        url: url,
        type: "POST",
        data: paraArr,
        success: function(result) {
          window.location.href = "<?php echo $baseUrl; ?>usermanagement.php"; 
        },
        complete: function(data) {
            var res = data.responseJSON;
            if (data.status == 200) {
                console.log("login success");
            }
            if (res.message == "Login credentials are invalid.") {
                alert("Login credentials are invalid. Please enter valid credentials");
            }
            localStorage.setItem("token", res.token);
            localStorage.setItem("expireIn", res.expires_in);
            console.log("login successfully");
        },
        error: function(data) {
            console.log(data, "data");

        }
    });
}
</script>
</html>