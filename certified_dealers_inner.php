<!DOCTYPE html>
<html lang="en">
<head>
  <?php
include 'includes/headertag.php';
   include 'includes/headertagadmin.php';
   include 'includes/footertag.php';
   
   ?> 
<script> var APIBaseURL = "<?php echo $APIBaseURL; ?>";</script>
<script> var baseUrl = "<?php echo $baseUrl; ?>";</script>
    <script src="<?php $baseUrl; ?>model/certified_dealers_inner.js"></script>
</head>
<body>
    <section>
      <div class="container mt-5 pt-4">
        <div class="mt-5 pt-5">
          <span class="mt-4 pt-4 ">
          <a href="index.php" class="text-decoration-none header-link px-1">Home <i class="fa-solid fa-chevron-right px-1"></i></a>
          <a href="certified_dealers.php" class="text-decoration-none header-link px-1">Certified Dealers <i class="fa-solid fa-chevron-right px-1"></i></a>
          <span class="text-dark" id="">Ratna Automotive Pvt. Ltd.</span>
        </div>
      </div>
    </section>
    
    <section>
      <div class="container">
        <div class="row mt-2">
          <div class="col-12 col-sm-6 col-lg-6 col-md-6">
            <div>
            <h1 class="fw-bold text-danger pt-3">Ratna Automotive Pvt. Ltd.</h1>
            <div class="swiper swiper_buy mySwiper2_buy">
              <div class="swiper-wrapper swiper-wrapper_buy" style="margin-bottom:-100px;">
                <div class=" swiper-slide swiper-slide_buy">
                  <img class="img_buy" src="assets/images/ratnaautomotive.webp"/>
                </div>
                <div class="swiper-slide swiper-slide_buy">
                <img class="img_buy " src="assets/images/ratnaautomotive.webp"/>
              </div>
              <div class="swiper-slide swiper-slide_buy">
                <img class="img_buy " src="assets/images/ratnaautomotive.webp" />
              </div>
            </div>
          </div>
          <div thumbsSlider="" class="swiper mySwiper_buy"></div>
        </div>
      </div>
      <div class="col-12 col-sm-6 col-lg-6 col-md-6 py-2">
        <table class="mt-5 table table-border">
          <div class="col-12 mt-2">
            <tr>
              <div class="col-12 col-sm-6 col-lg-6 col-md-6">
                 <td style="width:25%;">Brand</td>
               </div>
               <div class="col-12 col-sm-6 col-lg-6 col-md-6">
                <td><a href="" class="text-decoration-none">Sonalika</a></td>
              </div>
            </tr>
          </div>
          <div class="col-12 mt-2">
            <tr>
              <div class="col-12 col-sm-6 col-lg-6 col-md-6">
                <td>Address</td>
              </div>
              <div class="col-12 col-sm-6 col-lg-6 col-md-6">
                <td>B.O: 7-316/1, Sagar Road, Green City, Ibrahimpatnam, Rangareddy District, Telangana, 502506, Rangareddy,Telangana</td>
              </div>
            </tr>
          </div>
          <div class="col-12 my-2">
            <tr>
              <div class="col-12 col-sm-6 col-lg-6 col-md-6">
                <td>Email</td>
              </div>
              <div class="col-12 col-sm-6 col-lg-6 col-md-6 ">
                <td>digital@ricomtechnologies.com</td>
              </div>
            </tr>
          </div>
                
          <div class="col-12 my-2">
            <tr>
              <div class="col-12 col-sm-6 col-lg-6 col-md-6">
                <td>Contact</td>
              </div>
              <div class="col-12 col-sm-6 col-lg-6 col-md-6">
                <td>+91****</td>
              </div>
            </tr>
          </div>
                
          <div class="col-12">
            <tr>
              <div class="col-12 col-sm-6 col-lg-6 col-md-6">
                <td>State</td>
              </div>
              <div class="col-12 col-sm-6 col-lg-6 col-md-6">
                <td>Telangana</td>
              </div>
            </tr>
          </div>
                
          <div class="col-12">
            <tr>
              <div class="col-12 col-sm-6 col-lg-6 col-md-6">
                <td>District</td>
              </div>
              <div class="col-12 col-sm-6 col-lg-6 col-md-6">
                <td>Rangareddy</td>
              </div>
            </tr>
          </div>
        </table>
        <div class="text-center mt-4">
          <div class="row">
            <div class="col-lg-5 col-md-5 col-sm-5">
              <button type="button" id="certified_dlr_rcb_btn" class="btn btn-success btn-block w-100 justify-content-end" data-bs-toggle="modal" data-bs-target="#staticBackdrop3">Request Call Back</button>                                
            </div>
            <div class="col-lg-7 col-md-7 col-sm-7">
              <a href="become_certified_dealer.php" class="text-decoration-none">
                <div class="">
                  <button type="button" class="btn btn-success btn-block d-flex justify-content-end">Become Certified Dealer</button>
                </div>
              </a>
            </div>
          </div>
        </div>
      </div>      <!-- </div>-->
    </section>                <!-- </div>        -->
  
    
    <!-- MODAL  REQUEST CALL BACK -->
    <section>
      <div class="modal fade" id="staticBackdrop3" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title ms-1" id="staticBackdropLabel">Request Call Back</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <!-- MODAL BODY -->
            <div class="modal-body">
              <form id="dealership_enq_from" class="bg-light" action="" method="POST" >
                <div class="row justify-content-center">
                  <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                    <div class="mt-2">
                      <label class="form-label  fw-bold text-dark"> <i class="fa-regular fa-user"></i> First Name</label>
                      <input type="text" class="form-control" id="f_name" name="f_name">
                    </div>
                  </div>
                  <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                    <div class="mt-2">
                      <label class="form-label fw-bold  text-dark"> <i class="fa-regular fa-user"></i> Last Name</label>
                      <input type="text" class="form-control" id="l_name" name="l_name">
                    </div>
                  </div>
                  <div class="col-12 col-lg-12 col-md-12 col-sm-12">
                    <div class="mt-2">
                      <label class="form-label  fw-bold text-dark"><i class="fa fa-phone" aria-hidden="true"></i> Mobile Number</label>
                        <input type="text" class="form-control" id="mob_num" name="mob_num">
                    </div>
                  </div>
                  <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                    <label for="yr_state" class="form-label text-dark fw-bold"> <i class="fas fa-location"></i> State</label>
                    <select class="form-select py-2" id="_state" name="_state"aria-label=".form-select-lg example">
                      <option value="" selected-disabled=""></option>
                      <option value="1">Chhattisgarh</option>
                      <option value="2">Other</option>
                    </select>
                  </div>
                  <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                    <label for="yr_dist" class="form-label  fw-bold text-dark"><i class="fa-solid fa-location-dot"></i> District</label>
                    <select class="form-select py-2" id="_district" name="_district" aria-label=".form-select-lg example">
                      <option value="" selected-disabled=""></option>
                      <option value="1">Raipur</option>
                      <option value="2">Bilaspur</option>
                      <option value="2">Durg</option>
                      <option value="2">Other</option>
                    </select>
                  </div>
                  <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                    <label for="yr_price" class="form-label fw-bold  text-dark"> Tehsil</label>
                    <!-- <input type="yr_price" class="form-control" placeholder="Enter Tehsil" id="_tehsil" name="_tehsil"> -->
                    <select class="form-select py-2 " id="_tehsil" name="_tehsil"aria-label=".form-select-lg example">
                      <option value="" selected-disabled=""></option>
                      <option value="1">Durg</option> 
                      <option value="2">Other</option>                     
                    </select>
                  </div>
                  <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                    <label for="yr_dist" class="form-label fw-bold text-dark">Brand</label>
                    <select class="form-select py-2 " id="_brand" name="_brand"aria-label=".form-select-lg example">
                      <option value="" selected-disabled=""></option>
                      <option value="1">Mahindra</option>
                      <option value="2">Swaraj</option>
                      <option value="2">Powertrac</option>
                    </select>
                  </div>
                  <div class="text-center my-3">
                    <button type="button" id="delership_enq_btn" class="btn btn-success px-5 w-100 ">Submit</button>         
                  </div>        
                  <p class="mb-0 text-center">By proceeding ahead you expressly agree to the Bharat Tractors <a href="#" class="text-decoration-none" target="_blank" title="terms and conditions">terms and conditions*</a></p>
                </div>
              </form>                                       
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- BRAND SIMILAR TRACTOR -->
  <section>
    <div class="container bg-light">
      <div class="text-editor-black  my-3" style="background-color:#fff">
        <h3 class="">Sonalika <span class="text-success fw-bold"> Tractors</span> </h3>
      </div>
      <div class="owl-slider ">
        <div id="carousel_related_brand" class="owl-carousel owl-carousel_related">

          <div class="item">
            <div class="success__stry__item shadow h-100">
              <div class="thumb">
                <a href="#">
                  <div class="">
                    <img src="assets\images\sonalika-rx-42-4wd-1693217919.webp" class="object-fit-cover p-3 w-100" alt="img">
                  </div>
                </a>
              </div>
              <div class="content mb-3 ms-3">
                <div class="post-content">
                  <h5 class="post-title">
                    <a href="#" class="text-decoration-none text-dark fw-bold">Sonalika DI 750 Sikander</a>
                  </h5>
                  <div class="row mt-1">
                    <div class="col-12 col-lg-6 col-md-6 col-sm-6">
                      <p><i class="fas fa-bolt"></i> 30 HP</p>
                    </div>
                    <div class="col-12 col-lg-6 col-md-6 col-sm-6">
                      <p> <i class="fa fa-cog" aria-hidden="true"></i> 1290CC</p>
                    </div>
                  </div>                                
                </div>                            
              </div>
              <button type="button" class="btn btn-success w-100 text-center">Get On Road Price</button>
            </div>   
          </div>

          <div class="item">
            <div class="success__stry__item shadow h-100">
              <div class="thumb">
                <a href="#">
                  <div class="">
                    <img src="assets\images\sonalika-rx-42-4wd-1693217919.webp" class="object-fit-cover p-3 w-100" alt="img">
                  </div>
                </a>
              </div>
              <div class="content mb-3 ms-3">
                <div class="post-content">
                  <h5 class="post-title">
                    <a href="#" class="text-decoration-none text-dark fw-bold">Sonalika DI 750 Sikander</a>
                  </h5>
                  <div class="row mt-1">
                    <div class="col-12 col-lg-6 col-md-6 col-sm-6">
                      <p><i class="fas fa-bolt"></i> 30 HP</p>
                    </div>
                    <div class="col-12 col-lg-6 col-md-6 col-sm-6">
                      <p> <i class="fa fa-cog" aria-hidden="true"></i> 1290CC</p>
                    </div>
                  </div>                                
                </div>                            
              </div>
              <button type="button" class="btn btn-success w-100 text-center">Get On Road Price</button>
            </div>   
          </div>

          <div class="item">
            <div class="success__stry__item shadow h-100">
              <div class="thumb">
                <a href="#">
                  <div class="">
                    <img src="assets\images\sonalika-rx-42-4wd-1693217919.webp" class="object-fit-cover p-3 w-100" alt="img">
                  </div>
                </a>
              </div>
              <div class="content mb-3 ms-3">
                <div class="post-content">
                  <h5 class="post-title">
                    <a href="#" class="text-decoration-none text-dark fw-bold">Sonalika DI 750 Sikander</a>
                  </h5>
                  <div class="row mt-1">
                    <div class="col-12 col-lg-6 col-md-6 col-sm-6">
                      <p><i class="fas fa-bolt"></i> 30 HP</p>
                    </div>
                    <div class="col-12 col-lg-6 col-md-6 col-sm-6">
                      <p> <i class="fa fa-cog" aria-hidden="true"></i> 1290CC</p>
                    </div>
                  </div>                                
                </div>                            
              </div>
              <button type="button" class="btn btn-success w-100 text-center">Get On Road Price</button>
            </div>   
          </div>

          <div class="item">
            <div class="success__stry__item shadow h-100">
              <div class="thumb">
                <a href="#">
                  <div class="">
                    <img src="assets\images\sonalika-rx-42-4wd-1693217919.webp" class="object-fit-cover p-3 w-100" alt="img">
                  </div>
                </a>
              </div>
              <div class="content mb-3 ms-3">
                <div class="post-content">
                  <h5 class="post-title">
                    <a href="#" class="text-decoration-none text-dark fw-bold">Sonalika DI 750 Sikander</a>
                  </h5>
                  <div class="row mt-1">
                    <div class="col-12 col-lg-6 col-md-6 col-sm-6">
                      <p><i class="fas fa-bolt"></i> 30 HP</p>
                    </div>
                    <div class="col-12 col-lg-6 col-md-6 col-sm-6">
                      <p> <i class="fa fa-cog" aria-hidden="true"></i> 1290CC</p>
                    </div>
                  </div>                                
                </div>                            
              </div>
              <button type="button" class="btn btn-success w-100 text-center">Get On Road Price</button>
            </div>   
          </div>

          <div class="item">
            <div class="success__stry__item shadow h-100">
              <div class="thumb">
                <a href="#">
                  <div class="">
                    <img src="assets\images\sonalika-rx-42-4wd-1693217919.webp" class="object-fit-cover p-3 w-100" alt="img">
                  </div>
                </a>
              </div>
              <div class="content mb-3 ms-3">
                <div class="post-content">
                  <h5 class="post-title">
                    <a href="#" class="text-decoration-none text-dark fw-bold">Sonalika DI 750 Sikander</a>
                  </h5>
                  <div class="row mt-1">
                    <div class="col-12 col-lg-6 col-md-6 col-sm-6">
                      <p><i class="fas fa-bolt"></i> 30 HP</p>
                    </div>
                    <div class="col-12 col-lg-6 col-md-6 col-sm-6">
                      <p> <i class="fa fa-cog" aria-hidden="true"></i> 1290CC</p>
                    </div>
                  </div>                                
                </div>                            
              </div>
              <button type="button" class="btn btn-success w-100 text-center">Get On Road Price</button>
            </div>   
          </div>

          <div class="item">
            <div class="success__stry__item shadow h-100">
              <div class="thumb">
                <a href="#">
                  <div class="">
                    <img src="assets\images\sonalika-rx-42-4wd-1693217919.webp" class="object-fit-cover p-3 w-100" alt="img">
                  </div>
                </a>
              </div>
              <div class="content mb-3 ms-3">
                <div class="post-content">
                  <h5 class="post-title">
                    <a href="#" class="text-decoration-none text-dark fw-bold">Sonalika DI 750 Sikander</a>
                  </h5>
                  <div class="row mt-1">
                    <div class="col-12 col-lg-6 col-md-6 col-sm-6">
                      <p><i class="fas fa-bolt"></i> 30 HP</p>
                    </div>
                    <div class="col-12 col-lg-6 col-md-6 col-sm-6">
                      <p> <i class="fa fa-cog" aria-hidden="true"></i> 1290CC</p>
                    </div>
                  </div>                                
                </div>                            
              </div>
              <button type="button" class="btn btn-success w-100 text-center">Get On Road Price</button>
            </div>   
          </div>

          <div class="item">
            <div class="success__stry__item shadow h-100">
              <div class="thumb">
                <a href="#">
                  <div class="">
                    <img src="assets\images\sonalika-rx-42-4wd-1693217919.webp" class="object-fit-cover p-3 w-100" alt="img">
                  </div>
                </a>
              </div>
              <div class="content mb-3 ms-3">
                <div class="post-content">
                  <h5 class="post-title">
                    <a href="#" class="text-decoration-none text-dark fw-bold">Sonalika DI 750 Sikander</a>
                  </h5>
                  <div class="row mt-1">
                    <div class="col-12 col-lg-6 col-md-6 col-sm-6">
                      <p><i class="fas fa-bolt"></i> 30 HP</p>
                    </div>
                    <div class="col-12 col-lg-6 col-md-6 col-sm-6">
                      <p> <i class="fa fa-cog" aria-hidden="true"></i> 1290CC</p>
                    </div>
                  </div>                                
                </div>                            
              </div>
              <button type="button" class="btn btn-success w-100 text-center">Get On Road Price</button>
            </div>   
          </div>
             
        </div>
      </div>
    </div>
  </section>    

    <!-- TRACTOR IMPLEMENTS CAROUSEL -->
  <section>
    <div class="container">
      <div class="text-editor-black  my-3" style="background-color:#fff">
        <h4><p class="mt-md mt-3 p-2 mb-5 my-3 assured">Tractor Implements</p></h4>
      </div>
      <div class="owl-slider ">
        <div id="carousel_related" class="owl-carousel owl-carousel_related">

          <div class="item">
            <div class="col-md-12 shadow d-flex flex-row">
              <div class="">
                <a href="#"><img class="img-fluid" src="assets/images/grizo-j-type-33-1692966584.webp"></a>
                <div class="text-center">
                  <a href="#" title="Mahendra Yuvo 265 DI" class="weblink" tabindex="0">
                    <p class="para fw-bold h5 pt-2">Grizo J Type</p>
                  </a>                                
                </div>
                <div class="row text-center">
                  <div class="col-6">
                    <p class="fw-bold ps-2 text-dark">By Agrizone</p>
                  </div>
                  <div class="col-6">
                    <p class="fw-bold pe-2 text-dark">Tillage</p>
                  </div>
                </div>
                <div class="col-12">
                  <span><a href="#" class="btn price-bnt btn-success w-100 ">Power : 35 & Above</a></span>
                </div>
              </div>
            </div>
          </div>

          <div class="item">
            <div class="col-md-12 shadow d-flex flex-row">
              <div class="">
                <a href="#"><img class="img-fluid" src="assets/images/grizo-j-type-33-1692966584.webp"></a>
                <div class="text-center">
                  <a href="#" title="Mahendra Yuvo 265 DI" class="weblink" tabindex="0">
                    <p class="para fw-bold h5 pt-2">Grizo J Type</p>
                  </a>                
                </div>
                <div class="row text-center">
                  <div class="col-6">
                    <p class="fw-bold ps-2 text-dark">By Agrizone</p>
                  </div>
                  <div class="col-6">
                    <p class="fw-bold pe-2 text-dark">Tillage</p>
                  </div>
                </div>
                <div class="col-12">
                  <span><a href="#" class="btn price-bnt btn-success w-100 ">Power : 35 & Above</a></span>
                </div>
              </div>
            </div>
          </div>   

          <div class="item">
            <div class="col-md-12 shadow d-flex flex-row">
              <div class="">
                <a href="#"><img class="img-fluid" src="assets/images/grizo-j-type-33-1692966584.webp"></a>
                <div class="text-center">
                  <a href="#" title="Mahendra Yuvo 265 DI" class="weblink" tabindex="0">
                    <p class="para fw-bold h5 pt-2">Grizo J Type</p>
                  </a>                
                </div>
                <div class="row text-center">
                  <div class="col-6">
                    <p class="fw-bold ps-2 text-dark">By Agrizone</p>
                  </div>
                  <div class="col-6">
                    <p class="fw-bold pe-2 text-dark">Tillage</p>
                  </div>
                </div>
                <div class="col-12">
                  <span><a href="#" class="btn price-bnt btn-success w-100 ">Power : 35 & Above</a></span>
                </div>
              </div>
            </div>
          </div>         

          <div class="item">
            <div class="col-md-12 shadow d-flex flex-row">
              <div class="">
                <a href="#"><img class="img-fluid" src="assets/images/grizo-j-type-33-1692966584.webp"></a>
                <div class="text-center">
                  <a href="#" title="Mahendra Yuvo 265 DI" class="weblink" tabindex="0">
                    <p class="para fw-bold h5 pt-2">Grizo J Type</p>
                  </a>                
                </div>
                <div class="row text-center">
                  <div class="col-6">
                    <p class="fw-bold ps-2 text-dark">By Agrizone</p>
                  </div>
                  <div class="col-6">
                    <p class="fw-bold pe-2 text-dark">Tillage</p>
                  </div>
                </div>
                <div class="col-12">
                  <span><a href="#" class="btn price-bnt btn-success w-100 ">Power : 35 & Above</a></span>
                </div>
              </div>
            </div>
          </div>         

          <div class="item">
            <div class="col-md-12 shadow d-flex flex-row">
              <div class="">
                <a href="#"><img class="img-fluid" src="assets/images/grizo-j-type-33-1692966584.webp"></a>
                <div class="text-center">
                  <a href="#" title="Mahendra Yuvo 265 DI" class="weblink" tabindex="0">
                    <p class="para fw-bold h5 pt-2">Grizo J Type</p>
                  </a>                
                </div>
                <div class="row text-center">
                  <div class="col-6">
                    <p class="fw-bold ps-2 text-dark">By Agrizone</p>
                  </div>
                  <div class="col-6">
                    <p class="fw-bold pe-2 text-dark">Tillage</p>
                  </div>
                </div>
                <div class="col-12">
                  <span><a href="#" class="btn price-bnt btn-success w-100 ">Power : 35 & Above</a></span>
                </div>
              </div>
            </div>
          </div>         

          <div class="item">
            <div class="col-md-12 shadow d-flex flex-row">
              <div class="">
                <a href="#"><img class="img-fluid" src="assets/images/grizo-j-type-33-1692966584.webp"></a>
                <div class="text-center">
                  <a href="#" title="Mahendra Yuvo 265 DI" class="weblink" tabindex="0">
                    <p class="para fw-bold h5 pt-2">Grizo J Type</p>
                  </a>                
                </div>
                <div class="row text-center">
                  <div class="col-6">
                    <p class="fw-bold ps-2 text-dark">By Agrizone</p>
                  </div>
                  <div class="col-6">
                    <p class="fw-bold pe-2 text-dark">Tillage</p>
                  </div>
                </div>
                <div class="col-12">
                  <span><a href="#" class="btn price-bnt btn-success w-100 ">Power : 35 & Above</a></span>
                </div>
              </div>
            </div>
          </div>         

          <div class="item">
            <div class="col-md-12 shadow d-flex flex-row">
              <div class="">
                <a href="#"><img class="img-fluid" src="assets/images/grizo-j-type-33-1692966584.webp"></a>
                <div class="text-center">
                  <a href="#" title="Mahendra Yuvo 265 DI" class="weblink" tabindex="0">
                    <p class="para fw-bold h5 pt-2">Grizo J Type</p>
                  </a>                
                </div>
                <div class="row text-center">
                  <div class="col-6">
                    <p class="fw-bold ps-2 text-dark">By Agrizone</p>
                  </div>
                  <div class="col-6">
                    <p class="fw-bold pe-2 text-dark">Tillage</p>
                  </div>
                </div>
                <div class="col-12">
                  <span><a href="#" class="btn price-bnt btn-success w-100 ">Power : 35 & Above</a></span>
                </div>
              </div>
            </div>
          </div>   
          
        </div>
      </div>
    </div>
  </section>

  <?php
    include 'includes/footer.php';
  ?>

  <script>
    $(document).ready(function(){
      jQuery.validator.addMethod("customPhoneNumber", function(value, element) {
        return /^[6-9]\d{9}$/.test(value);
      }, "Phone number must start with 6 or above");
      $("#delership_enq_btn").click(function () {
        // setTimeout(() => {
        //     console.log("validation of Department")
        // }, 2000);
        $("form[id='dealership_enq_from']").validate({
          rules: {
            f_name: {
                required: true,
                minlength: 3
            },

           l_name: {
              required: true,
              minlength: 3
            },
            mb_num: {
                required: true,
              minlength: 10,
              digits: true,
              customPhoneNumber: true 
            },
           // _tehsil: {
           //     required: true,
            //     minlength: 3
           // },
            _state: {
             required: true,
               // minlength: 10
           },
            _district: {
              required: true,
              // minlength: 10
            },
            _brand: {
              required: true,
               // minlength: 10
            }
          },
          messages: {
            f_name: {
              required: "Enter Your First Name",
              minlength: "First Name must be atleast 3 characters long"
            },
            l_name: {
              required: "Enter Your Last Name",
              minlength: "Last Name must be atleast 3 characters long"
            },
            mb_num: {
              required: "Enter Your Mobile Number",
              minlength: "Mobile must be 10 characters long",
              digits: "Please enter only digits"
            },
            // _tehsil: {
            //     required: "Select Your Tehsil Name",
            //     minlength: "Tehsil Name must be atleast 3 characters long"
              // },
            _state: {
              required: "Select Your State",
              // minlength: ""
            },
            _district: {
              required: "Select Your District Name",
              // minlength: ""
            },
            _brand: {
              required: "Select Your Brand Name",
              // minlength: ""
            }},               
          
          });
        })
      });
  </script>

</body>
</html>