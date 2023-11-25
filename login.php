<!DOCTYPE html>
<html lang="en">

<head>
   <?php
   include 'includes/headertag.php';
   include 'includes/footertag.php';

   
   ?>
<script> var APIBaseURL = "<?php echo $APIBaseURL; ?>";</script>
    <script src="model/login.js"></script>
</head>

<style>
    .error-message {
    color: red;
}
</style>
<body>

<section class="bg-light">
  <div class="login-page ">
          <div class="container form-container bg-light">
                      <div class="bg-white shadow rounded">
                              <div class=" pe-0">
                                  <div class="form-center h-100 py-5 px-5">
                                    <!-- {% csrf %} -->
                                      <form action="" id="form" class="row g-2">
                                        <!-- @csrf -->
                                        <img src="assets/images/user.webp" class="rounded-circle text-center user-login" alt="">
                                        <h5 class="text-center">Admin Login </h5>
                                              <div class="col-12">
                                                  <label class="text-dark fw-bold"><i class="fa-solid fa-user"></i> Email ID<span class="text-danger">*</span></label>
                                                      
                                                      <input type="text" class="form-control py-2" id="email" for="email" name="email" placeholder="Enter Email Id">
                                                      <small></small>
                                              </div>
                                              <div class="col-12">
                                                     <label class="text-dark fw-bold"><i class="fa-solid fa-lock"></i> Password<span class="text-danger">*</span></label>
                                                        <div class="input-group  mr-sm-2">
                                                          <div class="input-group-prepend">
                                                            <div class="input-group-text py-3"><i class="fas fa-eye-slash" id="eyeeye"></i></div>
                                                          </div>
                                                          <input type="password" class="form-control pb-3" for="password" id="password" placeholder="Enter Password">
                                                          <small></small>
                                                        </div>
                                              </div>
                                              <div class="col-12 text-center">
                                                <a href="" type="submit" class="btn px-4 bg-success" id="login">Login</a>
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

  <script src="/model/login.js"></script>
</body>


<script>
// $(document).ready(function() {
//     if (document.getElementById('login')) {
//         document.getElementById('login').addEventListener('click', function(event) {
//             event.preventDefault();
//             $("#form").submit();
//         });
//     }
// });

// function login() {
//     var email = document.getElementById('email').value;
//     var password = document.getElementById('password').value;
//     var paraArr = {};
//     paraArr['email'] = email;
//     paraArr['password'] = password;
//     var url = "<?php echo $APIBaseURL; ?>user_login";
//     $.ajax({
//         url: url,
//         type: "POST",
//         data: paraArr,
//         success: function(result) {
        
//         },
//         complete: function(data) {
//           console.log(data,"login");
//             var res = data.responseJSON;
//             if (data.status == 200) {
//                 console.log("login success");
//                 window.location.href = "<?php echo $baseUrl; ?>usermanagement.php"; 
//             }
           
//             localStorage.setItem("token", res.access_token);
//             localStorage.setItem("expireIn", res.expires_in);
//             // console.log("login successfully");
//         },
//         error: function(data) {
//             console.log(data, "data");
//             var res = data.responseJSON;
//             if (data.status == 401) {
//                 console.log("invalid credentials");
//                 alert(" Please enter valid credentials..!");
//             }
//         }
//     });
// }

// function login() {
//   var email = document.getElementById('email').value;
//     var password = document.getElementById('password').value;
//     var paraArr = {};
//     paraArr['email'] = email;
//     paraArr['password'] = password;
//     var url = "<?php echo $APIBaseURL; ?>user_login";
//     $.ajax({
//         url: url,
//         type: "POST",
//         data: paraArr,
//         success: function(result) {
//             // Handle successful login if needed
//         },
//         complete: function(data) {
//             console.log(data);
//             var res = data.responseJSON;
//             if (data.status == 200) {
//                 console.log("login success");
//                 window.location.href = "<?php echo $baseUrl; ?>usermanagement.php";
//             } else {
//                 localStorage.setItem("token", res.access_token);
//                 localStorage.setItem("expireIn", res.expires_in);
                
//                 if (res.token_expire) {
//                     console.log("Token expired. Redirecting to login page.");
//                     window.location.href = "<?php echo $baseUrl; ?>login.php";
//                 }
//             }
//         },
//         error: function(data) {
//             console.log(data, "data");
//             var res = data.responseJSON;
//             if (data.status == 401) {
//                 console.log("invalid credentials");
//                 alert(" Please enter valid credentials..!");
//             }
//         }
//     });
// }

</script>
</html>