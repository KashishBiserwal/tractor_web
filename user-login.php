<!DOCTYPE html>
<html lang="en">

<head>
   <?php
   include 'includes/headertag.php';
   ?>
</head>

<div class="container">
    <!-- <div class="background_login">
        <img src="assets/images/why.jpg" alt="">
    </div> -->
    <!-- <div class="userform position-relative">
        <div class="align-item-center">
            <form action="">
                <div class="col-12">
                    <label class="text-dark fw-bold"><i class="fa-solid fa-user"></i> Phone No.<span class="text-danger">*</span></label>
                        <input type="text" class="form-control py-2" placeholder="Enter phone number">
                </div>
            </form>
        </div>
    </div> -->


    <!-- <div class="loginBox">
      <img src="assets/images/user.webp" class="rounded-circle text-center  user" alt="">
      <h2 class="h2login">User Login</h2>
      <p class="text-dark text-center">Enter your phonr number to receive a one-time password</p>
      <form>
        <p class="mt-3 pt-4 text-dark fw-bold">Phone Number*</p>
        <input type="email" name="email" class="text-dark" placeholder="" required>
        <input type="submit" name="Get OTP" class="fw-bold" value="Get OTP">
        
        <div id='verify-otp' class="login-setup-section">
        <h3 class="request-otp-header">Verify OTP</h3>
        <div class="">
            <label for="inputnumber">One Time Password</label>
            <input type="OTP" name="OTP" class="text-dark" placeholder="" required>
            <label class="pull-right resend-otp">Resend otp</label>
        </div>
        <button type="button" class="btn btn-default btn-lg btn-block request-otp ">Verify</button>
      </form>
    </div> -->
    <div class="loginBox">
        <img src="assets/images/user.webp" class="rounded-circle text-center  user" alt="">
        <div id='sign-in' class=''>
            <h2 class="request-otp-header text-success">User Login</h3>
            <p class="text-dark text-center">Enter your phonr number to receive a one-time password</p>
            <div class="form-group login-label">
            <p class="mt-3 pt-4 text-dark fw-bold">Phone Number*</p>
            <input type="email" name="email" class="text-dark" placeholder="" required>
            <input type="submit" name="Get OTP" class="fw-bold" value="Get OTP" id='request-otp'>
            </div>
            <!-- <input type=" Get OTP" class="btn btn-default btn-lg btn-block request-otp" id='request-otp'>Get OTP</input> -->
        </div>
    <div id='verify-otp' class="login-setup-section">
        <i class="fa fa-chevron-left" aria-hidden="true" class="float-start"></i>
        <h3 class="request-otp-header text-success text-center">Enter OTP</h3>
        <div class="form-group login-label">
            <!--<label for="inputnumber">One Time Password</label> -->
            <p class="mt-3 pt-4 text-dark fw-bold"  for="inputnumber">One Time Password*</p>
            <!-- <input type="number" class="form-control input-edit" placeholder='Enter OTP' id="number"> -->
            <input type="text" name="email" class="text-dark" placeholder="" required>
            <label class="pull-right resend-otp"><a href="" class="text-success">Resend otp</a></label>
        </div>
        <!-- <button type="button" class="btn btn-default btn-lg btn-block request-otp ">Verify</button> -->
        <input type="submit" name="Verify" class="fw-bold" value="Verify" id=''>
    </div>
</div>
</div>

<?php
include 'includes/footertag.php';
?>