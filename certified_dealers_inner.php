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
            <form action="">
              <div class="row my-3">
                <div class="col-12 justify-content-center">
                  <div class="d-flex flex-md-row px-3  flex-column-reverse">
                    <div class="col-md-12 col-12 col-lg-12 col-lg-12">
                      <div class=" ml-2">
                        <div class="row px-3 ">
                          <div class="col-12 col-lg-4 col-md-4 col-sm-4 ">
                            <label for="l_brand" class="form-label text-dark">Brand</label>
                          </div>
                          <div class="col-12 col-lg-8 col-md-8 col-sm-8">
                            <input type="text" placeholder="Enter Brand Name"class="form-control border-dark" id="l_brand" >                                        
                          </div>
                          <div class="col-12 col-lg-4 col-md-4 col-sm-4">
                            <label for="l_add" class="form-label text-dark">Address</label>
                          </div>
                          <div class="col-12 col-lg-8 col-md-8 col-sm-8">
                            <textarea  placeholder="Enter Your Address"class="form-control border-dark mb-2" rows="3" id="l_add"></textarea>
                          </div>                                          
                          <div class="col-12 col-lg-4 col-md-4 col-sm-4 ">
                            <label for="l_email"  class="form-label text-dark">Email</label>
                          </div>
                          <div class="col-12 col-lg-8 col-md-8 col-sm-8">
                           <input type="email" placeholder="Enter Your E-mail" class="form-control border-dark" id="l_email" >                                        
                          </div>
                          <div class="col-12 col-lg-4 col-md-4 col-sm-4 ">
                            <label for="l_con" class="form-label text-dark">Contact</label>
                          </div>
                          <div class="col-12 col-lg-8 col-md-8 col-sm-8">
                            <input type="text" placeholder="Your Contact No."class="form-control border-dark" id="l_con" >                                        
                          </div>                                                
                          <div class="col-12 col-lg-4 col-md-4 col-sm-4 ">
                            <label for="l_state" class="form-label text-dark mb-2">State</label>
                          </div>
                          <div class="col-12 col-lg-8 col-md-8 col-sm-8">
                            <!-- <input type="text" class="form-control border-dark" id="l_state" > -->
                            <select class="form-control border-dark mb-2" id="l_state">
                              <option selected>Select State</option>
                              <option value="1">Chhattisgarh</option>
                              <option value="2">Other</option>
                            </select>                                        
                          </div>
                          <div class="col-12 col-lg-4 col-md-4 col-sm-4 ">
                            <label for="l_dist" class="form-label text-dark mb-2">District</label>
                          </div>
                          <div class="col-12 col-lg-8 col-md-8 col-sm-8">
                            <!-- <input type="text" class="form-control border-dark" id="l_dist" >                                         -->
                            <select class="form-control border-dark mb-2" id="l_dist">
                              <option selected>Select District</option>
                              <option value="1">Durg</option>
                              <option value="2">Other</option>
                            </select>                                        
                          </div>  
                          <div class="text-center mt-2">
                            <div class="row">
                              <div class="col-lg-5 col-md-5 col-sm-5">
                                <button type="button" class="btn btn-success btn-block justify-content-end" data-bs-toggle="modal" data-bs-target="#staticBackdrop3">Request Call Back</button>
                              </div>
                              <div class="col-lg-7 col-md-7 col-sm-7">
                                <button type="button" class="btn btn-success btn-block d-flex justify-content-end">Become Certified Dealer</button>
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
    
    <!-- MODAL -->
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
              <form action="">
                <div class="row">
                  <div class="col-12 col-lg-6 col-md-6 col-sm-6 ">
                    <label for="name" class="form-label fw-bold text-dark"> <i class="fa-regular fa-user"></i> First Name</label>
                      <input type="text" class="form-control" placeholder="Enter Your Name" id="name">
                  </div>
                  <div class="col-12 col-lg-6 col-md-6 col-sm-6 ">
                    <label for="name" class="form-label fw-bold text-dark"> <i class="fa-regular fa-user"></i> Last Name</label>
                      <input type="text" class="form-control" placeholder="Enter Your Name" id="name">
                  </div>
                  <div class="col-12 col-sm-6 col-md-6 col-lg-6">
                    <label for="number" class="form-label text-dark fw-bold"> <i class="fa fa-phone" aria-hidden="true"></i> Phone Number</label>
                    <input type="password" class="form-control" placeholder="Enter Number" id="number">
                  </div>
                  <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                    <label for="yr_state" class="form-label text-dark fw-bold"> <i class="fas fa-location"></i> State</label>
                    <select class="form-select py-2 " aria-label=".form-select-lg example">
                      <option selected>Select State</option>
                      <option value="1">Chhattisgarh</option>
                      <option value="2">Other</option>
                    </select>
                  </div>
                  <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                    <label for="yr_dist" class="form-label fw-bold  text-dark"><i class="fa-solid fa-location-dot"></i> District</label>
                    <select class="form-select py-2 " aria-label=".form-select-lg example">
                      <option selected>Select District</option>
                      <option value="1">Raipur</option>
                      <option value="2">Bilaspur</option>
                      <option value="2">Durg</option>
                    </select>
                  </div>                           
                  <div class="col-12 col-sm-6 col-md-6 col-lg-6">
                    <label for="yr_price" class="form-label fw-bold text-dark"> Tehsil</label>
                    <input type="yr_price" class="form-control" placeholder="Enter Tehsil" id="tehsil">
                  </div>

                </div> 
                <div class="text-center my-3">
                  <button type="button" class="btn btn-success px-5 w-40">Submit</button>         
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
</body>
</html>