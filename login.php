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
                                                  
                                                      <input type="text" class="form-control" for="password" name="password" id="password" placeholder="Enter Password">
                                                      <small></small>
                                              </div>
                                              <div class="col-12 text-center">
                                                <button class="btn px-4 bg-success " id="login">Login</button>
                                              </div>
                                              <div class="col-12 text-center">
                                                  <!-- <p class="text-dark">Don't Have an Account ? <a href="#" class="text-success text-center text-decoration-none"><strong>Sign-Up</strong></a> </p> -->
                                                  <a href="#" class=" text-success text-decoration-none">Forgot Password?</a>
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
  
<script>
 $(document).ready(function() {

    // $("#form").validate({
    //   rules:{
    //     email:{
    //   required:true,
    //   email:true
    //  },
    //  password:{
    //   required:true,
    //   minlenght:5
    //  }

    // },
    // messages:{
    //     email:"Please Enter Your Email id",
    //     password:{
    //     required:"Please provide a valid password",
    //   }
    // }

    // });

if(document.getElementById('login')){
    document.getElementById('login').addEventListener('click', login);
}
    function login(){       
        var email = document.getElementById('email').value;
        var password = document.getElementById('password').value;
        var paraArr = {};
        paraArr['email']   = email;
        paraArr['password']   = password;
        var url = "<?php echo $APIBaseURL; ?>user_login";
        $.ajax({
            url: url,
            type:"POST",
            data: paraArr,
            success: function(result){ 
            },
            complete:function(data){  
              console.log(data,"data login")  
              var res = data.responseJSON;  
              console.log(res.message,"responseText")
              if(data.status == 200){
                window.location.href = "usermanagement.php";
              }
              if(res.message == "Login credentials are invalid."){
                alert("Login credentials are invalid Please Enter valid credentials")
              }
              localStorage.setItem("token",res.token);
              localStorage.setItem("expireIn",res.expires_in);
               console.log("login successfully");

            }
        });
        
    }

    
});

//  const form = document.getElementById('form');
// const email = document.getElementById('email');
// const password = document.getElementById('password');

// // Show input error messages
// function showError(input, message) {
//     const formControl = input.parentElement;
//     const small = formControl.querySelector('small');
//     formControl.className = 'form-outline mb-3 error';
//     small.innerText = message;
//     small.classList.add('error-message');
// }

// // Show success color
// function showSuccess(input) {
//     const formControl = input.parentElement;
//     formControl.className = 'form-outline mb-3 success';
// }

// // Check required fields
// function checkRequired(inputArr) {
//     inputArr.forEach(function (input) {
//         if (input.value.trim() === '') {
//             showError(input, `${getFieldName(input)} is required`);
           
//         } else {
//             showSuccess(input);
//         }
//     });
// }

// // Check input length
// function checkLength(input, min, max) {
//     if (input.value.length < min) {
//         showError(input, `${getFieldName(input)} must be at least ${min} characters`);
//     } else if (input.value.length > max) {
//         showError(input, `${getFieldName(input)} must be less than ${max} characters`);
//     } else {
//         showSuccess(input);
//     }
// }

// // Get Field Name
// function getFieldName(input) {
//     return input.id.charAt(0).toUpperCase() + input.id.slice(1);
// }

// // Check email format
// function checkEmail(input) {
//     const emailValue = input.value.trim();
//     const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
//     if (!emailPattern.test(emailValue)) {
//         showError(input, 'Invalid email format');
//     } else {
//         showSuccess(input);
//     }
// }

// // Event Listeners
// form.addEventListener('submit', function (e) {
//     e.preventDefault();

//     checkRequired([email, password]);
//     checkEmail(email); // If you want to check email format
// });


</script>
 