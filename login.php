<!DOCTYPE html>
<html lang="en">

<head>
   <?php
   include 'includes/headertag.php';
   include 'includes/footertag.php';
   include 'includes/spinner.php';
   
   ?>
<script> var APIBaseURL = "<?php echo $APIBaseURL; ?>";</script>
<script> var baseUrl = "<?php echo $baseUrl; ?>";</script>
    <script src="<?php $baseUrl; ?>model/login.js"></script>
</head>

<style>
    .error-message {
    color: red;
}
</style>
<body>

<section class="">
  <div class="login-page ">
          <div class="container form-container">
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
                                                  <a href="" type="submit" class="btn px-4 bg-success text-white" id="login">Login</a>
                                              </div>
                                              <!-- <div class="col-12 text-center">
                                                  <a href="#" class="text-success text-decoration-none">Forgot Password?</a>
                                              </div> -->
                                      </form>
                                  </div>
                              </div>
                      </div>
          </div>
  </div>

</body>



</html>