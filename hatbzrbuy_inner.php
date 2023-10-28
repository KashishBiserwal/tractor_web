<!DOCTYPE html>
<html lang="en">
  <head> <?php
   include 'includes/headertag.php';
   ?> </head>
  <body> <?php
   include 'includes/header.php';
   ?> 
      <link
      rel="stylesheet"
      href="https://unpkg.com/swiper/swiper-bundle.min.css"
    />
   <section class=" mt-5 pt-5">
      <div class="container pt-3">
        <div class="py-1">
          <span class="text-white ">
            <a href="index.php" class="text-decoration-none header-link px-1">Home <i class="fa-solid fa-chevron-right px-1"></i>
            </a>
            <span class="">
              <span class="text-dark header-link  px-1">HaatBazar <i class="fa-solid fa-chevron-right px-1"></i>
              </span>
            </span>
            <span class="text-dark">Sell</span>
          </span>
        </div>
      </div>
    </section>
    <section>
      <div class="container">
        <div class="vegehead pt-3">
          <div class="row">
            <div class="col-12 col-lg-6 ">
              <h1 class="fw-bold text-danger pt-3">Potato in District Name</h1>
            </div>
            <div class="col-12 col-lg-6 text-center">
              <p class="text-success h5 fw-bold"> Total Price:-  <i class="fa fa-inr" aria-hidden="true"></i> 222</p>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-12 col-sm-6 col-lg-6 col-md-6">
            <!-- Swiper -->
            <div class="swiper swiper_buy mySwiper2_buy pt-3 mt-4">
              <div class="swiper-wrapper swiper-wrapper_buy">
                <div class=" swiper-slide swiper-slide_buy">
                  <img class="img_buy " src="assets/images/potato.webp" />
                </div>
                <div class="swiper-slide swiper-slide_buy">
                  <img class="img_buy " src="assets/images/brinjal.jpg" />
                </div>
                <div class="swiper-slide swiper-slide_buy">
                  <img class="img_buy " src="assets/images/potato.webp" />
                </div>
                <div class="swiper-slide swiper-slide_buy">
                  <img class="img_buy" src="assets/images/papaya.jpg" />
                </div>
              </div>
              <!-- <div class="swiper-button-next"></div>
              <div class="swiper-button-prev"></div> -->
            </div>
            <div thumbsSlider="" class="swiper mySwiper_buy"></div>
          </div>
          <div class="col-12 col-sm-6 col-lg-6 col-md-6">
              <h2 class="text-danger fw-bold">Are You Intrested in this Vegetable</h2>
              <form action="">
                <div class="row my-3">
                  <div class="col-12 justify-content-center">
                    <div class="d-flex flex-md-row px-3  flex-column-reverse">
                      <div class="col-md-12 col-12 col-lg-12 col-lg-12">
                        <div class=" ml-2">
                          <div class="row px-3 ">
                            <div class="col-12  ">
                              <label for="name" class="form-label fw-bold text-dark"> <i class="fa-regular fa-user"></i> Name</label>
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
                              <label for="yr_price" class="form-label text-dark"><i class="fa fa-inr" aria-hidden="true"></i> Price</label>
                              <input type="yr_price" class="form-control" placeholder="Enter Your Price" id="yr_price">
                            </div>
                            <!-- Button trigger modal -->
                            <div class="col-12 col-sm-12 col-md-6 col-lg-6 mt-4 pt-3">
                              <button type="button" class="btn btn-danger w-100" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                              Contact Seller
                              </button>
                            </div>

                            <!-- Modal -->
                            <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                              <div class="modal-dialog modal-lg modal-dialog-centered">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <h5 class="modal-title" id="staticBackdropLabel">Contact Seller</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                  </div>
                                  <div class="modal-body">
                                    <div class="model-cont">
                                      <h4 class="text-center text-danger">Seller Information</h3>
                                        <div class="row px-3 py-2">
                                          <div class="col-12  col-sm-12 col-md-6 col-lg-6 ">
                                            <label for="slr_name" class="form-label fw-bold text-dark"> <i class="fa-regular fa-user"></i> Seller Name</label>
                                            <input type="text" class="form-control"  id="slr_name">
                                          </div>
                                          <div class="col-12 col-sm-12 col-md-6 col-lg-6  ">
                                            <label for="number" class="form-label text-dark fw-bold"> <i class="fa fa-phone" aria-hidden="true"></i> Phone Number</label>
                                            <input type="text" class="form-control" id="number">
                                          </div>
                                        </div>
                                    </div>
                                  </div>
                                  <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-danger">Got It</button>
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
    <section>
      <div class="container">
        <div class="specification_head">
            <h3 class="text-danger">About Item</h3>
        </div>
        <div class="about_cont my-3 pt-3">
          <div class="row">
            <div class="col-12 col-lg-3 col-md-3 col-sm-3">
              <h5>Vegetable:</h5>
            </div>
            <div class="col-12 col-lg-9 col-md-9 col-sm-9">
              <p>Potato</p>
            </div>
          </div>
          <div class="row">
            <div class="col-12 col-lg-3 col-md-3 col-sm-3">
              <h5>Vegetable Type:</h5>
            </div>
            <div class="col-12 col-lg-9 col-md-9 col-sm-9">
              <p>Type</p>
            </div>
          </div>
          <div class="row">
            <div class="col-12 col-lg-3 col-md-3 col-sm-3">
              <h5>Quantity:</h5>
            </div>
            <div class="col-12 col-lg-9 col-md-9 col-sm-9">
              <p>1</p>
            </div>
          </div>
          <div class="row">
            <div class="col-12 col-lg-3 col-md-3 col-sm-3">
              <h5>Price (as per kg):</h5>
            </div>
            <div class="col-12 col-lg-9 col-md-9 col-sm-9">
              <p>222</p>
            </div>
          </div>
        </div>
      </div>
    </section>
   
    <?php
    include 'includes/footer.php';
    include 'includes/footertag.php';
    ?>

<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
</html>