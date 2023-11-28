<!DOCTYPE html>
<html lang="en">
<head>
<?php
   include 'includes/headertag.php';
   ?>
    <title>Used_darm_inner</title>
     
</head>
<body>
<?php
   include 'includes/header.php';
   ?>
<section class="bg-light mt-5 pt-5">
    <div class="container py-2">
        <div class="py-2">
            <span class="my-4 text-white pt-4 ">
                <a href="index.php" class="text-decoration-none header-link px-1">Home <i class="fa-solid fa-chevron-right px-1"></i></a>
                    <span class=""><a href="#" class="text-decoration-none header-link  px-1">Used tractor<i class="fa-solid fa-chevron-right px-1"></i> </a></span>
                    <span class="text-dark">farmtrac Used Tractor</span>
            </span> 
        </div>
    </div>
</section>
<section class="">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-6 col-md-6 col-sm-6">
                <div class="product-carousel slider-for slick-initialized slick-slider slick-dotted my-3">
                    <div class="shadow p-1">
                        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-indicators">
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                            </div>
                            <div class="carousel-inner">
                                <div class="">
                                <div class="carousel-item active">
                                    <img src="assets/images/farmtrac-60-powermaxx-1690541201.webp" class="d-block w-100  m-1" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="assets/images/farmtrac-champion-42-1690538013.webp" class="d-block w-100  m-1" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="assets/images/farmtrac60 (1).jpg" class="d-block w-100  m-1" alt="...">
                                </div>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next w-25" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden ">Next</span>
                            </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-6 col-md-6 col-sm-6">
                <div class="row">
                     <div class="pirce-section mt-3">
                        <h5>Price - ₹ 1,05,000</h5>
                     </div>
                   <form action="" class="bg-light box-shadow px-3 py-3 mt-3">
                      <p class="text-center boldfont fs-15">Interested In Implement</p>
                      <input type="text" class="form-control is-invalid" name="" id="" placeholder="Enter Your Name">
                      <input type="text" class="form-control is-invalid" name="" id="" placeholder="Enter Mobile Number">
                        <div class="row">
                            <div class="col-6">
                            <div class="form-group">
                                    <select class="custom select form-control is-invalid" name="" id="">
                                        <option value="">Select State</option>
                                        <option value="">..............</option>
                                        <option value="">..............</option>
                                        <option value="">..............</option>
                                        <option value="">..............</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <select class="custom select form-control is-invalid" name="" id="">
                                        <option value="">Select District</option>
                                        <option value="">..............</option>
                                        <option value="">..............</option>
                                        <option value="">..............</option>
                                        <option value="">..............</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="number" class="form-control" name="price" placeholder="Enter Your Price">
                        </div>
                        <div class="d-md-block">
                            <div class="row">
                                <div class="col-6">
                                    <button type="submit" class="form-submit-btn boldfont w-100 px-2 d-block text-center">Contact Seller</button>
                                </div>
                                <div class="clo-6"></div>
                            </div>
                        </div>
                   </form>
                </div>
            </div>
        </div>
    </div>
</section>
<?php 
 include 'includes/footertag.php'; 
 include 'includes/footer.php';
?> 

</body>
</html>