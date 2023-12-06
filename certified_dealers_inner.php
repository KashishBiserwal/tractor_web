<!DOCTYPE html>
<html lang="en">
<head>
    <?php
        include 'includes/headertag.php';
        include 'includes/header.php';
    ?>
</head>
<body>
    <section>
      <div class="container mt-5 pt-4">
        <div class="mt-5 pt-5">
          <span class="mt-4 pt-4 ">
          <a href="index.php" class="text-decoration-none header-link px-1">Home <i class="fa-solid fa-chevron-right px-1"></i></a>
          <a href="certified_dealers.php" class="text-decoration-none header-link px-1">Certified Dealers <i class="fa-solid fa-chevron-right px-1"></i></a>
          <span class="text-dark">Ratna Automotive Pvt. Ltd.</span>
        </div>
      </div>
    </section>
    
    <section>
      <div class="container">
        <div class="vegehead pt-3">
          <div class="row">
            <div class="col-12 col-lg-6 ">
              <h1 class="fw-bold text-danger pt-3">Ratna Automotive Pvt. Ltd.</h1>
            </div>
          </div>
        </div>        
        <div class="row mt-3">

          <div class="col-12 col-sm-6 col-lg-6 col-md-6">
            <div>
              <div class="swiper swiper_buy mySwiper2_buy">
                <div class="swiper-wrapper swiper-wrapper_buy">
                  <div class=" swiper-slide swiper-slide_buy">
                    <img class="img_buy" src="assets/images/nursury.jpg" />
                  </div>
                  <div class="swiper-slide swiper-slide_buy">
                    <img class="img_buy " src="assets/images/360_F_244762082_uooufBapemjGDq3em6RW41iiYvMoifJS.jpg" />
                  </div>
                  <div class="swiper-slide swiper-slide_buy">
                    <img class="img_buy " src="assets/images/nursry.jpg" />
                  </div>
                </div>
              </div>
              <div thumbsSlider="" class="swiper mySwiper_buy"></div>
            </div>
          </div>

          <div class="col-12 col-sm-6 col-lg-6 col-md-6">
            <form id="certified_dlr_inr_form" action="">
              <div class="row my-3">
                <div class="col-12 justify-content-center">
                  <div class="d-flex flex-md-row px-3  flex-column-reverse">
                    <div class="col-md-12 col-12 col-lg-12 col-lg-12">
                      <div class=" ml-2">
                        <div class="row px-3 ">
                          <div class="col-12 col-lg-4 col-md-4 col-sm-4 ">
                            <label for="cd_brand" class="form-label text-dark">Brand</label>
                          </div>
                          <div class="col-12 col-lg-8 col-md-8 col-sm-8">
                            <input type="text" placeholder="Enter Brand Name"class="form-control border-dark" name="cd_brand"id="cd_brand" >                                        
                          </div>
                          <div class="col-12 col-lg-4 col-md-4 col-sm-4">
                            <label for="cd_add" class="form-label text-dark">Address</label>
                          </div>
                          <div class="col-12 col-lg-8 col-md-8 col-sm-8">
                            <textarea  placeholder="Enter Your Address"class="form-control border-dark mb-2" rows="3" name="cd_add" id="cd_add"></textarea>
                          </div>                                          
                          <div class="col-12 col-lg-4 col-md-4 col-sm-4 ">
                            <label for="cd_email"  class="form-label text-dark">Email</label>
                          </div>
                          <div class="col-12 col-lg-8 col-md-8 col-sm-8">
                           <input type="email" placeholder="Enter Your E-mail" class="form-control border-dark" name="cd_email" id="cd_email" >                                        
                          </div>
                          <div class="col-12 col-lg-4 col-md-4 col-sm-4 ">
                            <label for="cd_con" class="form-label text-dark">Contact</label>
                          </div>
                          <div class="col-12 col-lg-8 col-md-8 col-sm-8">
                            <input type="text" placeholder="Your Contact No."class="form-control border-dark" name="cd_con" id="cd_con" >                                        
                          </div>                                                
                          <div class="col-12 col-lg-4 col-md-4 col-sm-4 ">
                            <label for="cd_state" class="form-label text-dark mb-2">State</label>
                          </div>
                          <div class="col-12 col-lg-8 col-md-8 col-sm-8">
                            <!-- <input type="text" class="form-control border-dark" id="l_state" > -->
                            <select class="form-control border-dark mb-2" name="cd_state" id="cd_state">
                              <option selected>Select State</option>
                              <option value="1">Chhattisgarh</option>
                              <option value="2">Other</option>
                            </select>                                        
                          </div>
                          <div class="col-12 col-lg-4 col-md-4 col-sm-4 ">
                            <label for="cd_dist" class="form-label text-dark mb-2">District</label>
                          </div>
                          <div class="col-12 col-lg-8 col-md-8 col-sm-8">
                            <!-- <input type="text" class="form-control border-dark" id="l_dist" >                                         -->
                            <select class="form-control border-dark mb-2" name="cd_dist"id="cd_dist">
                              <option selected>Select District</option>
                              <option value="1">Durg</option>
                              <option value="2">Other</option>
                            </select>                                        
                          </div>  
                          <div class="text-center mt-2">
                            <div class="row">
                              <div class="col-lg-5 col-md-5 col-sm-5">
                                <button type="button" id="certified_dlr_rcb_btn" class="btn btn-success btn-block justify-content-end" data-bs-toggle="modal" data-bs-target="#staticBackdrop3">Request Call Back</button>
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
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>  
      </div>
    </section>
    
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


            <form id="dealership_enq_from" class="form-view-inner form-view-overlay bg-light box-shadow p-3" action="" method="" >
                        <div class="row justify-content-center">
                            <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                                <div class="mt-2">
                                    <label class="form-label text-dark">First Name</label>
                                    <input type="text" class="form-control" id="f_name" name="f_name">
                                </div>
                            </div>
                            <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                                <div class="mt-2">
                                    <label class="form-label text-dark">Last Name</label>
                                    <input type="text" class="form-control" id="l_name" name="l_name">
                                </div>
                            </div>
                            <div class="col-12 col-lg-12 col-md-12 col-sm-12">
                                <div class="mt-2">
                                    <label class="form-label text-dark">Mobile Number</label>
                                    <input type="text" class="form-control" id="mob_num" name="mob_num">
                                </div>
                            </div>
                            <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                                <label for="yr_state" class="form-label text-dark fw-bold"> <i class="fas fa-location"></i> State</label>
                                <select class="form-select py-2" id="_state" name="_state"aria-label=".form-select-lg example">
                                    <option value="">Select State</option>
                                    <option value="1">Chhattisgarh</option>
                                    <option value="2">Other</option>
                                </select>
                            </div>
                            <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                                <label for="yr_dist" class="form-label text-dark"><i class="fa-solid fa-location-dot"></i> District</label>
                                <select class="form-select py-2" id="_district" name="_district" aria-label=".form-select-lg example">
                                    <option value="">Select District</option>
                                    <option value="1">Raipur</option>
                                    <option value="2">Bilaspur</option>
                                    <option value="2">Durg</option>
                                </select>
                            </div>
                            <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                                <label for="yr_price" class="form-label text-dark"> Tehsil</label>
                                <input type="yr_price" class="form-control" placeholder="Enter Tehsil" id="_tehsil" name="_tehsil">
                            </div>
                            <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                                <label for="yr_dist" class="form-label text-dark">Brand</label>
                                <select class="form-select py-2 " id="_brand" name="_brand"aria-label=".form-select-lg example">
                                    <option value="">Select Brand</option>
                                    <option value="1">Mahindra</option>
                                    <option value="2">Swaraj</option>
                                    <option value="2">Powertrac</option>
                                </select>
                            </div>
                            <div class="text-center my-3">
                                <button type="submit" id="delership_enq_btn" class="btn btn-success px-5 w-100 ">Click Here</button>         
                            </div>        
                            <p class="mb-0 text-center">By proceeding ahead you expressly agree to the Tractor Junctions <a href="#" class="text-decoration-none" target="_blank" title="terms and conditions">terms and conditions*</a></p>
                        </div>
            </form>           
              
              
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- BRAND SIMILAR TRACTOR -->
  <section>
    <div class="container">
      <div class="text-editor-black  my-3" style="background-color:#fff">
        <h3 class="">Sonalika <span class="text-success fw-bold"> Tractors</span> </h3>
      </div>
      <div class="owl-slider ">
        <div id="carousel_related_brand" class="owl-carousel owl-carousel_related">
          <div class="item">
            <div class="success__stry__item shadow h-100">
              <div class="thumb">
                <a href="news_content.php">
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
                <a href="news_content.php">
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
                <a href="news_content.php">
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
                <a href="news_content.php">
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
                <a href="news_content.php">
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
                <a href="news_content.php">
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
                <a href="news_content.php">
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
    include 'includes/footertag.php';
  ?>

<!-- <script>
  $(document).ready(function(){
    $("#certified_dlr_inr_btn").click(function () {    
      $("form[id='certified_dlr_inr_form']").validate({
        rules: {
            cd_brand: {
                required: true,
                minlength: 3
            },

            cd_add: {
                required: true,
                minlength: 3
            },
            cd_email: {
                required: true,
                minlength: 10
            },
            cd_con: {
                required: true,
                minlength: 3
            },
            cd_state: {
                required: true,
                // minlength: 10
            },
            cd_district: {
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
            mob_num: {
               required: "Enter Your Mobile Number",
               minlength: "Mobile must be 10 characters long"
            },
            tehsil: {
               required: "Enter Your Tehsil Name",
                minlength: "Tehsil Name must be atleast 3 characters long"
            },
            _state: {
                required: "Select Your State",
                // minlength: ""
            },
            district: {
                required: "Select Your District Name",
                // minlength: ""
            },
            _brand: {
               required: "Enter Your Brand Name",
               // minlength: ""
            }
          },
        );
      })
    });
</script> -->

  <!-- <script>
        $(document).ready(function(){
            $("#certified_dlr_rcb_btn").click(function () {
                // setTimeout(() => {
                //     console.log("validation of Department")
                // }, 2000);
                $("form[id='certified_dlr_rcb_form']").validate({
                    rules: {
                        f_name: {
                            required: true,
                            minlength: 3
                        },

                        l_name: {
                            required: true,
                            minlength: 3
                        }
                        // _number: {
                        //     required: true,
                        //     minlength: 10
                        // },
                        // _tehsil: {
                        //     required: true,
                        //     minlength: 3
                        // },
                        // _state: {
                        //     required: true,
                        //     // minlength: 10
                        // },
                        // _district: {
                        //     required: true,
                        //     // minlength: 10
                        // }
                        // _number: {
                        //     required: true,
                        //     // minlength: 10
                        // }
                    },
                    messages: {
                        f_name: {
                            required: "Enter Your First Name",
                            minlength: "First Name must be atleast 3 characters long"
                        },
                        l_name: {
                            required: "Enter Your Last Name",
                            minlength: "Last Name must be atleast 3 characters long"
                        }
                        // _number: {
                        //     required: "Enter Your Mobile Number",
                        //     minlength: "Mobile must be 10 characters long"
                        // },
                        // _tehsil: {
                        //     required: "Enter Your Tehsil Name",
                        //     minlength: "Tehsil Name must be atleast 3 characters long"
                        // },
                        // _state: {
                        //     required: "Select Your State",
                        //     // minlength: ""
                        // },
                        // _district: {
                        //     required: "Select Your District Name",
                        //     // minlength: ""
                        // }
                        // _number: {
                        //     required: "Enter Your Brand Name",
                        //     // minlength: ""
                        // }
                    },

                });
            })
        });
  </script> -->



<!-- <script>
        $(document).ready(function(){
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
                        mob_num: {
                            required: true,
                            minlength: 10
                        },
                        _tehsil: {
                            required: true,
                            minlength: 3
                        },
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
                        mob_num: {
                            required: "Enter Your Mobile Number",
                            minlength: "Mobile must be 10 characters long"
                        },
                        _tehsil: {
                            required: "Enter Your Tehsil Name",
                            minlength: "Tehsil Name must be atleast 3 characters long"
                        },
                        _state: {
                            required: "Select Your State",
                            // minlength: ""
                        },
                        _district: {
                            required: "Select Your District Name",
                            // minlength: ""
                        },
                        _brand: {
                            required: "Enter Your Brand Name",
                            // minlength: ""
                        }
                    },

                });
            })
        });
</script> -->

</body>
</html>