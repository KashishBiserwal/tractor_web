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
            <div class="pt-5">
                <span class="mt-4 pt-4 ">
                    <a href="index.php" class="text-decoration-none header-link px-1">Home <i class="fa-solid fa-chevron-right px-1"></i></a>
                    <span class=""><span class=" header-link  px-1">Engine Oil</span></span>
                </span> 
            </div>
        </div>
    </section>

    <section>
      <div class="container">
        <div class="vegehead pt-3">
            <div class="row">
                <div class="col-12 col-lg-6 ">
                    <h1 class="fw-bold text-danger pt-3">Engine Oil</h1>
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
                    <img class="img_buy " src="assets/images/engineoiltotal.webp" />
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
          <h2 class="text-danger fw-bold">About This Engine Oil</h2>
              <form action="">
                <div class="row my-3">
                  <div class="col-12 justify-content-center">
                    <div class="d-flex flex-md-row px-3  flex-column-reverse">
                      <div class="col-md-12 col-12 col-lg-12 col-lg-12">
                        <div class=" ml-2">
                          <div class="row px-3 ">
                            <div class="col-12 col-lg-6 col-md-6 col-sm-6 ">
                              <label for="name" class="form-label fw-bold text-dark"> <i class="fa-regular fa-user"></i> First Name</label>
                              <input type="text" class="form-control" placeholder="Enter Your Name" id="name">
                            </div>
                            <div class="col-12 col-lg-6 col-md-6 col-sm-6 ">
                              <label for="name" class="form-label fw-bold text-dark"> <i class="fa-regular fa-user"></i> Last Name</label>
                              <input type="text" class="form-control" placeholder="Enter Your Name" id="name">
                            </div>
                            <div class="col-12 ">
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
                              <label for="yr_dist" class="form-label text-dark"><i class="fa-solid fa-location-dot"></i> District</label>
                              <select class="form-select py-2 " aria-label=".form-select-lg example">
                                <option selected>Select District</option>
                                <option value="1">Raipur</option>
                                <option value="2">Bilaspur</option>
                                <option value="2">Durg</option>
                              </select>
                            </div>
                            <div class="col-12 col-sm-12 col-md-6 col-lg-6 mt-2">
                              <label for="yr_price" class="form-label text-dark"> Tehsil</label>
                              <input type="yr_price" class="form-control" placeholder="Enter Tehsil" id="tehsil">
                            </div>
                            
                             <!-- Button trigger modal -->
                            <div class="col-12 col-sm-12 col-md-6 col-lg-6 mt-4 pt-3">
                              <button type="button" class="btn btn-success w-100" data-bs-toggle="modal" data-bs-target="#staticBackdrop3">
                                  Request
                                </button>
                              </div>
                              <div class="modal fade" id="staticBackdrop3" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                      <h5 class="modal-title" id="staticBackdropLabel"></h5>
                                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                      <div class="row px-3  mb-4 text-center">
                                        <h2 class="col-12 text-danger"><strong>ThankYou For Contacting Us..!</strong></h2>
                                        <div class="col-12 text-center"><img class="tick w-100" alt="dfd" src="assets/images/dribbble_yamm.gif"></div>
                                        <h6 class="col-12 mt-3"><i>We will Connect You Soon</i></h6>
                                        <h6 class="col-12 mt-2"><i>Enjoy Your Day..!</i></h6>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-12">
                    <div class="row px-3 float-end">
                      <img class="pic  mr-3 " src="assets/images/vege.png">
                    </div>
                  </div>
                </div>
              </form>
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