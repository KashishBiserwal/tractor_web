<!DOCTYPE html>
<html lang="en">
<head>
    <?php
        include 'includes/headertag.php';
        include 'includes/footertag.php';
    ?>
      <script> var APIBaseURL = "<?php echo $APIBaseURL; ?>";</script>
  <script> var baseUrl = "<?php echo $baseUrl; ?>";</script>
  <script src="<?php $baseUrl; ?>model/customer_info.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
  <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
    <body> 
        
     <?php 
     include 'includes/header.php';
    ?>
    <section class="mt-5">
        <div class="container">
            <div class="row">
              <div class="col-12 col-lg-6 col-sm-12 col-md-6">
                <div class="bg-light">
                    <div class="profile_image">
                        <img src="assets/images/user.png">
                    </div>
                    <div>
                        <p></p>
                    </div>
                </div>
              </div>
              <div class="col-12 col-lg-6 col-sm-12 col-md-6"></div>
              <div class="col-12 col-lg-6 col-sm-12 col-md-6"></div>
              <div class="col-12 col-lg-6 col-sm-12 col-md-6"></div>
            </div>
        </div>
    </section>
    <?php   
    include 'includes/footer.php';
    ?> 
  
</body>

