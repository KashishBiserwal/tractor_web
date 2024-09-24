<!DOCTYPE html>
<html lang="en">

<head>
   <?php
   include 'includes/headertag.php';
   include 'includes/footertag.php';
   ?>
  <script> var APIBaseURL = "<?php echo $APIBaseURL; ?>";</script>
<script> var baseUrl = "<?php echo $baseUrl; ?>";</script>
<script src="<?php $baseUrl; ?>model/userlogin.js"></script>

</head>

<div class="container">
    <div class="loginBox">
        <img src="assets/images/user.webp" class="rounded-circle text-center  user" alt="">
          <div id='sign-in' class=''>
            <h4 class="request-otp-header text-center text-success">User Login</h4>
            <p class="text-dark text-center">Enter your phonr number to receive a one-time password</p>
            <div class="form-group login-label">
            <p class="mt-3 pt-4 text-dark fw-bold">Phone Number*</p>
            <input type="text" name="phone" id="phone" class="text-dark" placeholder="" required>
            <input type="submit" name="Get OTP" class="fw-bold" value="Get OTP" id='request-otp'>
          </div>
            <!-- <input type=" Get OTP" class="btn btn-default btn-lg btn-block request-otp" id='request-otp'>Get OTP</input> -->
        </div>
        <div id='verify-otp' class="login-setup-section">
        <i class="fa fa-chevron-left" aria-hidden="true" class="float-start"></i>
        <h3 class="request-otp-header text-success text-center">Enter OTP</h3>
        <div class="form-group login-label">
            <!--<label for="inputnumber">One Time Password</label> -->
            <p class="mt-3 pt-4 text-dark fw-bold" for="inputnumber">One Time Password*</p>
            <!-- <input type="number" class="form-control input-edit" placeholder='Enter OTP' id="number"> -->
            <input type="text" name="email" class="text-dark" placeholder="" id="otp" required>
            <label class="pull-right resend-otp"><a href="" class="text-success">Resend otp</a></label>
        </div>
        <!-- <button type="button" class="btn btn-default btn-lg btn-block request-otp ">Verify</button> -->
        <input type="button" name="Verify" class="fw-bold" value="Verify" id='Verify'>
    </div>
  </div>
</div>
<script>
    $('#verify-otp').hide();
    $('#request-otp').on('click',function(){
    $('#sign-in').hide();
    $('#verify-otp').show();
    });
    $('.fa-chevron-left').on('click',function(){
    $('#sign-in').show();
    $('#verify-otp').hide();
    });
    
</script>
