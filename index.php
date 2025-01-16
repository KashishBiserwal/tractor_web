
<html lang="en">
<head>
  <?php
  include 'includes/headertag.php';
  include 'includes/footertag.php';
  include 'includes/headertagadmin.php';
  ?> 

  <!-- Preload Critical Image -->
  <link rel="preload" as="image" href="assets/images/Slide-1.png">

  <!-- Google Tag (gtag.js) -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-6Z38E658LD"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag() {
      dataLayer.push(arguments);
    }
    gtag('js', new Date());
    gtag('config', 'G-6Z38E658LD');
  </script>
  <script> var APIBaseURL = "<?php echo $APIBaseURL; ?>";</script>
  <script> var baseUrl = "<?php echo $baseUrl; ?>";</script>
  <script src="<?php $baseUrl; ?>model/index.js"defer></script>
  <!-- <script src="<?php $baseUrl; ?>model/indexminify.js"defer></script> -->
</head>

  <body> 
    <?php
      include 'includes/header.php';
      ?>
<style>
 .thumb img {
  height: 100%;
    width: 100%;
    max-width: 400px;
    max-height: 205px;
}
.new-tractor-content {
    padding: 15px 0 0;
    background-color: #fff;
}
.new-tractor-content h5{
    white-space: nowrap;
    text-overflow: ellipsis;
    overflow: hidden;
    font-size: 15px;
    margin-bottom: 0;
    text-transform: uppercase;
}
  .text-truncate {
    overflow: hidden;
    white-space: nowrap;
    text-overflow: ellipsis;
    }
    .model-message-brand{
      color:#439347;
    }
    .add_btn i {
    background: rgb(109 204 123);
    width: 28px;
    height: 25px;
    border-radius: 50%;
    padding: 8px;
    padding-right: 10px;
    font-size: 12px;
    }
    #search_form_container {
  position: absolute;
  top: 30%; 
  left: 70px; 
  width: 350px;
  background-color: #f8f9fac9;
  padding: 20px;
  display: block;
  z-index: 5;
}
.bannerbg00:hover {
  cursor: pointer;
}

#search_form {
  width: 100%;
}
.thumb {
    width: 100%;
    height: 200px; 
    position: relative;
    background-color: #f0f0f0; /
  }

  .thumb img {
    width: 100%;
    height: 100%;
    object-fit: cover; 
  }

  .item {
    width: 100%;
    min-height: 350px;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
    padding: 5px;
  }
  .content {
    flex-grow: 1;
    display: flex;
    flex-direction: column;
    justify-content: flex-end;
  }
  @media screen and (max-width: 912px) {
    #search_form_container {
  position: absolute;
  top: 30%; 
  left: 5px; 
  width: 350px;
  background-color: #f8f9fac9;
  padding: 20px;
  display: block;
  z-index: 5;
}
  }
}
</style>
<section id="home-banner" class="banner__section overflow-hidden">
<div id="demo" class="carousel slide" data-bs-ride="carousel">
    <!-- Indicators -->
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#demo" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#demo" data-bs-slide-to="2" aria-label="Slide 3"></button>
        <button type="button" data-bs-target="#demo" data-bs-slide-to="3" aria-label="Slide 4"></button>
        <button type="button" data-bs-target="#demo" data-bs-slide-to="4" aria-label="Slide 5"></button>
        <button type="button" data-bs-target="#demo" data-bs-slide-to="5" aria-label="Slide 6"></button>
        <button type="button" data-bs-target="#demo" data-bs-slide-to="6" aria-label="Slide 7"></button>
    </div>

    <!-- The slideshow/carousel -->
    <div class="carousel-inner">
        <div class="carousel-item active" style="position: relative;">
            <img src="assets/images/Slide-1.png" alt="Slide 1: Description of New York" class="d-block mx-auto w-100" loading="lazy">
        </div>
        <div class="carousel-item" style="position: relative;">
            <img src="assets/images/Slide-2.png" alt="Slide 2: Description of New York" class="d-block mx-auto w-100" loading="lazy">
        </div>
        <div class="carousel-item" style="position: relative;">
            <img src="assets/images/Slide-3 (1).png" alt="Slide 3: Description of New York" class="d-block mx-auto w-100" loading="lazy">
        </div>
        <div class="carousel-item" style="position: relative;">
            <img src="assets/images/Slide-4.png" alt="Slide 4: Description of New York" class="d-block mx-auto w-100" loading="lazy">
        </div>
        <div class="carousel-item" style="position: relative;">
            <img src="assets/images/Slide-5.png" alt="Slide 5: Description of New York" class="d-block mx-auto w-100" loading="lazy">
        </div>
        <div class="carousel-item" style="position: relative;">
            <img src="assets/images/new_image_for_slide6.png" alt="Slide 6: Description of New York" class="d-block mx-auto w-100" loading="lazy">
        </div>
        <div class="carousel-item" style="position: relative;">
            <img src="assets/images/Slide-7.png" alt="Slide 7: Description of New York" class="d-block mx-auto w-100" loading="lazy">
        </div>
    </div>

    <!-- Left and right controls/icons -->
    <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev" aria-label="Previous slide" style="margin-left:-70px; z-index: 4;">
        <span class="carousel-control-prev-icon bg-success" aria-hidden="true"></span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next" aria-label="Next slide" style="margin-right:-70px; z-index: 4;">
        <span class="carousel-control-next-icon bg-success" aria-hidden="true"></span>
    </button>
</div>

  <div id="search_form_container">
    <form id="search_form">
      <div class="row">
        <div class="col-12 mt-2">
          <label class="form-label text-dark fw-bold">Select Brand</label>
          <select class="form-control" name="brand" id="brand" required>
            <option value="">Select Brand</option>
          </select>
        </div>
        <div class="col-12 mt-2">
          <label class="form-label text-dark fw-bold">Select HP</label>
          <select class="form-control" name="hp" id="hp" required="">
            <option value="" selected="">Select HP</option>
            <option value="0 - 20">0 HP - 20 HP</option>
            <option value="21 - 30">21 HP - 30 HP</option>
            <option value="31 - 40">31 HP - 40 HP</option>
            <option value="41 - 50">41 HP - 50 HP</option>
            <option value="51 - 60">51 HP - 60 HP</option>
            <option value="61 - 70">61 HP - 70 HP</option>
            <option value="71 - 80">71 HP - 80 HP</option>
          </select>
        </div>
        <div class="col-12 text-center mt-3">
          <button type="button" class="btn btn-success px-3" id="Search">Search</button>
          <button type="button" class="btn-success btn px-3" id="Reset" onclick="resetForm()">Reset</button>
        </div>
      </div>
    </form>
  </div>
</section>
<!-- banner end here -->
<section class="why_head bg-light">
  <div class=" container">
    <h3 class="text-dark  display-6 pt-4 mb-0 fw-bold text-center">Why <span class="text-success">Bharat Agrimart's?</span></h3>
    <div class="container">
      <div class="row my-4 pt-3">
        <div class="col-12 col-sm-4 col-lg-4 col-md-4">
          <div class="why_con text-center">
            <img src="assets/images/priority.png" class="w-25 h-auto mb-3 " alt="Market">
              <h5 class="text-dark">Priority to Customers</h5>
              <p class="mb-0 oneline text-dark">10 Lakh+ Monthly Users.</p>
          </div>
        </div>
        <div class="col-12 col-sm-4 col-lg-4 col-md-4">
          <div class="why_con text-center">
            <img src="assets/images/price.png" class="w-25 h-auto mb-3 img-fluid" alt="Market">
              <h5 class="text-dark">Fair Market Price</h5>
              <p class="mb-0 oneline text-dark">Get a fair price for all the farm machines.</p>
          </div>
        </div>
        <div class="col-12 col-sm-4 col-lg-4 col-md-4">
          <div class="why_con text-center">
            <img src="assets/images/free.png" class="w-25 h-auto mb-3 text-white  img-fluid" alt="Market">
            <h5 class="text-dark">Free of Cost</h5>
            <p class="mb-0 oneline text-dark">All services provided free of cost.</p>
          </div>
        </div>
        <div class="col-12 col-sm-4 col-lg-4 col-md-4">
          <div class="content-grids grey-bg mt-3 px-3 py-3 text-center">
            <img src="assets/images/certified.png" class="w-25 h-auto mb-3 img-fluid" alt="Market">
            <h5 class="text-dark">All services provided free of cost.</h5>
            <p class="mb-0 oneline text-dark">Here we provide genuine buyers.</p>
          </div>
        </div>
        <div class="col-12 col-sm-4 col-lg-4 col-md-4">
          <div class="content-grids grey-bg mt-3 px-3 py-3 text-center">
            <img src="assets/images/msg-noti.png" class="w-25 h-auto mb-3 img-fluid" alt="Market">
            <h5 class="text-dark">Instant Notification</h5>
            <p class="mb-0 oneline text-dark">Get immediate SMS notification on your mobile.</p>
          </div>
        </div>
        <div class="col-12 col-sm-4 col-lg-4 col-md-4">
          <div class="content-grids grey-bg mt-3 px-3 py-3 text-center">
            <img src="assets/images/settingcus.png" class="w-25 mb-3 h-auto  img-fluid bg-white" alt="Market">
            <h5 class="text-dark">Customer Support</h5>
            <p class="mb-0 oneline text-dark">Call us at +91-97709-74974.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="" id="">
  <div class="container ">
    <h4 class="display-6 fw-bold">Tractors in <span class="text-success">2023</span></h4>
    <nav class="">
      <div class="nav nav-tabs" id="nav-tab" role="tablist">
        <a class="nav-link active px-5 py-3 h5 fw-bold text-dark py-2" type="button" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Polpular</a>
        <a class="nav-link px-5 py-3 h5 fw-bold text-dark" id="nav-contact-tab" type="button" data-bs-toggle="tab" data-bs-target="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Latest</a>
        <a class="nav-link px-5 py-3 h5 fw-bold text-dark" id="nav-Personal-tab" type="button" data-bs-toggle="tab" data-bs-target="#nav-Personal" role="tab" aria-controls="nav-Personal" aria-selected="false">Upcoming</a>
      </div>
    </nav>
    <div class="tab-content p-3 mt-4" id="nav-tabContent">
      <div class="tab-pane fade active show justify-content-center" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
        <div class="row  justify-content-between">
          <div class="col-12 p-0">
            <div class="position-relative justify-content-center" id="proj_swip">
              <div class="swiper swiper-slides-visible p-5 m-n5 testimonial__wrap">
                <div class="swiper-wrapper " id="popular_tractor"></div>
                <div class="swiper-pagination"></div>
              </div>
            </div>
          </div>
        </div>
        <div class="col text-center py-4 mt-3">
          <a href="popular_tractors.php" class="btn btn-success btn-lg">View all Popular Tractors</a>
        </div>
      </div>
      <div class="tab-pane fade justify-content-center" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
        <div class="row  justify-content-between  ">
          <div class="col-12 p-0">
            <div class="position-relative justify-content-center" id="proj_swip">
              <div class="swiper swiper-slides-visible p-5 m-n5 testimonial__wrap">
                <div class="swiper-wrapper " id="Latest_tractor"></div>
                <div class="swiper-pagination"></div>
              </div>
            </div>
          </div>
          <div class="col text-center pb-4 mt-5 pt-2">
            <a href="latest_tractor.php" class="btn btn-success btn-lg">View all Latest Tractors</a>
          </div>
        </div>
      </div>
      <div class="tab-pane fade justify-content-center" id="nav-Personal" role="tabpanel" aria-labelledby="nav-Personal-tab">
        <div class="row  justify-content-between  ">
          <div class="col-12 p-0">
            <div class="position-relative justify-content-center" id="proj_swip">
              <div class="swiper swiper-slides-visible p-5 m-n5 testimonial__wrap">
                <div class="swiper-wrapper " id="upcoming_tractor"></div>
                <!-- </div> -->
                <div class="swiper-pagination"></div>
              </div>
            </div>
          </div>
          <div class="col text-center pb-4 mt-5 pt-2">
            <a href="upcoming_tractors.php" class="btn btn-success btn-lg">View all Upcoming Tractors</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="bg-light">
  <div class="container">
    <h4 class=" py-1 display-6 fw-bold">Harvester in <span class="text-success">2023</span></h4>
    <nav class="mb-3">
      <div class="nav nav-tabs " id="nav-tab" role="tablist">
        <a class="nav-link active px-5 py-3 h5 fw-bold text-dark py-2" type="button" id="premium-tab" data-bs-toggle="tab" data-bs-target="#premium" role="tab" aria-controls="premium" aria-selected="true">New Harvester</a>
        <a class="nav-link px-5 py-3 h5 fw-bold text-dark" id="latest-tab" type="button" data-bs-toggle="tab" data-bs-target="#latest" role="tab" aria-controls="latest" aria-selected="false">Old Harvester</a>
      </div>
    </nav>
    <div class="tab-content justify-content-center" >
      <div role="tabpanel" class="tab-pane fade show active" id="premium" aria-labelledby="premium-tab">
        <section class="section slider-section">
          <div class="container slider-column">
            <div class="carousel-wrap">
              <div class="owl-carousel" id="new_harvester"> </div>
              <div class="col text-center pb-4">
                <a href="harvester.php" class="btn btn-success px-5">View all New Harvester</a>
              </div>
            </div>
          </div>
        </section>
      </div>
      <div role="tabpanel" class="tab-pane fade" id="latest" aria-labelledby="latest-tab">
        <section class="section slider-section">
          <div class="container slider-column">
            <div class="carousel-wrap">
              <div class="owl-carousel" id="old_harvester">
              </div>
            </div>
            <div class="col text-center pb-4">
              <a href="used_harvester.php" class="btn btn-success px-5">View all Old Harvester</a>
            </div>
          </div>
        </section>
      </div>
    </div>
  </div>
</section>
<!-- Tractors by Budget -->
<section class="bybudget position-relative bg-light">
  <div class="container  ">
    <div class="row text-align-center justify-content-between">
      <div class="col-12 col-lg-6 col-md-6 col-sm-6 pt-3">
        <h4 class="text-dark display-6 fw-bold">Tractors by <span class="text-success">Budget</span></h4>
        <div class="pricerate container py-3 my-2 ps-5">
          <div class="yr-con my-3 py-2">
            <div class="ps-3">
              <a href="tractor_by_budget.php?budget=3 Lakh Below" class="text-decoration-none text-dark">
                <h5 class="fw-bold bgd_list">
                  <i class="fas fa-tractor p-2 bg-success bgd_list_i opacity-25"></i> &nbsp;&nbsp; Below 3 Lakh
                </h5>
              </a>
            </div>
          </div>
          <div class="yr-con my-3 py-2">
            <div class="ps-3">
              <a href="tractor_by_budget.php?budget=3-5" class="text-decoration-none text-dark">
                <h5 class="fw-bold bgd_list">
                  <i class="fas fa-tractor p-2 bg-success bgd_list_i  opacity-25" ></i>&nbsp;&nbsp; 3 lakh - 5 lakh
                </h5>
              </a>
            </div>
          </div>
          <div class="yr-con my-3 py-2">
            <div class="ps-3">
              <a href="tractor_by_budget.php?budget=5-7" class="text-decoration-none text-dark">
                <h5 class="fw-bold bgd_list">
                  <i class="fas fa-tractor p-2 bg-success bgd_list_i  opacity-25"></i> &nbsp;&nbsp; 5 lakh - 7 lakh
                </h5>
              </a>
            </div>
          </div>
          <div class="yr-con my-3 py-2">
            <div class="ps-3">
              <a href="tractor_by_budget.php?budget=7-10" class="text-decoration-none text-dark">
                <h5 class="fw-bold bgd_list">
                  <i class="fas fa-tractor p-2 bg-success bgd_list_i  opacity-25"></i> &nbsp;&nbsp; 7 lakh - 10 lakh
                </h5>
              </a>
            </div>
          </div>
          <div class="yr-con my-3 py-2">
            <div class="ps-3">
              <a href="tractor_by_budget.php?budget=11 Lakh Above" class="text-decoration-none text-dark">
                <h5 class="fw-bold  bgd_list">
                  <i class="fas fa-tractor p-2 bg-success  bgd_list_i  opacity-25"></i> &nbsp;&nbsp; Above 10 lakh
                </h5>
              </a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-12 col-lg-6 col-md-6 col-sm-6 align-center">
        <img src="assets/images/new-tractors.png" class="text-align-center mt-5 pt-5 tractor" alt="">
      </div>
    </div>
  </div>
</section>
  <section class="backhp">
      <div class="container  py-4">
        <h4 class="text-dark display-6 fw-bold my-3 pb-2">Tractors By HP</h4>
        <div class="container">
          <div class="row my-4 pt-2">
            <div class="col-12 col-sm-3 col-lg-3 col-md-3 my-2">
              <div class="hpbg">
                <a href="tractor_by_hp.php?hp=0 - 20" class="text-decoration-none text-dark my-3">
                  <div class="text-center mt-2">
                    <i class="fas fa-tractor trac_icon fs-2 mt-3"></i>
                  </div>
                  <p class="text-center fw-bold mt-3">Tractors</p>
                  <h5 class="text-center pb-3">Under 20 HP</h5>
                </a>
              </div>
            </div>
            <div class="col-12 col-sm-3 col-lg-3 col-md-3 my-2">
              <div class="hpbg">
                <a href="tractor_by_hp.php?hp=21 - 30" class="text-decoration-none text-dark py-2">
                  <div class="text-center mt-2">
                    <i class="fas fa-tractor trac_icon fs-2  mt-3"></i>
                  </div>
                  <p class="text-center fw-bold mt-3">Tractors</p>
                  <h5 class="text-center pb-3">Under 21-30 HP</h5>
                </a>
              </div>
            </div>
            <div class="col-12 col-sm-3 col-lg-3 col-md-3 my-2">
              <div class="hpbg">
                <a href="tractor_by_hp.php?hp=31 - 40" class="text-decoration-none text-dark">
                  <div class="text-center mt-2">
                    <i class="fas fa-tractor trac_icon fs-2  mt-3"></i>
                  </div>
                  <p class="text-center fw-bold mt-3">Tractors</p>
                  <h5 class="text-center pb-3">Under 31-40 HP</h5>
                </a>
              </div>
            </div>
            <div class="col-12 col-sm-3 col-lg-3 col-md-3  my-2">
              <div class="hpbg">
                <a href="tractor_by_hp.php?hp=41 - 45" class="text-decoration-none text-dark">
                  <div class="text-center mt-2">
                    <i class="fas fa-tractor trac_icon fs-2  mt-3"></i>
                  </div>
                  <p class="text-center fw-bold mt-3">Tractors</p>
                  <h5 class="text-center pb-3">Under 41-45 HP</h5>
                </a>
              </div>
            </div>
            <div class="col-12 col-sm-3 col-lg-3 col-md-3 py-2 my-2">
              <div class="hpbg">
                <a href="tractor_by_hp.php?hp=46 - 50" class="text-decoration-none text-dark">
                  <div class="text-center mt-2">
                    <i class="fas fa-tractor trac_icon fs-2  mt-3"></i>
                  </div>
                  <p class="text-center fw-bold mt-3">Tractors</p>
                  <h5 class="text-center pb-3"> Under 46-50 HP</h5>
                </a>
              </div>
            </div>
            <div class="col-12 col-sm-3 col-lg-3 col-md-3 py-2 my-2">
              <div class="hpbg">
                <a href="tractor_by_hp.php?hp=51 - 60" class="text-decoration-none text-dark">
                  <div class="text-center mt-2">
                    <i class="fas fa-tractor trac_icon fs-2  mt-3"></i>
                  </div>
                  <p class="text-center fw-bold mt-3">Tractors</p>
                  <h5 class="text-center pb-3">Under 51-60 HP</h5>
                </a>
              </div>
            </div>
            <div class="col-12 col-sm-3 col-lg-3 col-md-3 py-2 my-2">
              <div class="hpbg">
                <a href="tractor_by_hp.php?hp=61 - 70" class="text-decoration-none text-dark">
                  <div class="text-center mt-2">
                    <i class="fas fa-tractor trac_icon fs-2  mt-3"></i>
                  </div>
                  <p class="text-center fw-bold mt-3">Tractors</p>
                  <h5 class="text-center pb-3">under 61-70 HP </h5>
                </a>
              </div>
            </div>
            <div class="col-12 col-sm-3 col-lg-3 col-md-3 py-2 my-2">
              <div class="hpbg">
                <a href="tractor_by_hp.php?hp=70 - 1000" class="text-decoration-none text-dark">
                  <div class="text-center mt-2">
                    <i class="fas fa-tractor trac_icon fs-2  mt-3"></i>
                  </div>
                  <p class="text-center fw-bold mt-3">Tractors</p>
                  <h5 class="text-center pb-3">Above 75 HP</h5>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
  </section>
  <section class="">
    <div class="container">
      <h3 class="mt-5 pt-4 display-6 fw-bold">
        <spna class="text-success">Mini </spna> Tractors
      </h3>
      <div class="row ">
        <div class="col-12 ">
          <div class="position-relative " id="proj_swip">
            <div class="swiper swiper-slides-visible p-5 m-n5 testimonial__wrap">
              <div class="swiper-wrapper " id="mini_tractor"></div>
              <div class="swiper-pagination"></div>
              <div class="swiper_nav"></div>
            </div>
          </div>
        </div>
        <div class="py-3"></div>
        <div class="col text-center mb-3">
          <a href="mini_tractor.php" class="btn btn-success btn-lg">View all Mini Tractors</a>
        </div>
      </div>
    </div>
  </section>
  <section class="bg-light">
    <div class="container">
      <div class=" my-3  ">
        <h3 class="display-6 fw-bold  pt-2">
          <span class="text-success">Tools</span> and <span class="text-success">Services</span>
        </h3>
        <div class="row text-center">
          <div class="col-12 col-md-2 col-lg-2 col-sm-3 p-4 ">
            <div class="p-3 toolsservice rounded-3 shadow h-100 bg-white">
              <div class="col-12 text-center">
                <img src="assets/images/service.png" class="img-tools p-3  w-50 " alt="">
              </div>
              <div class="col-12">
                <h6 class="service-box text-center fw-bold fs-6 mt-2 text-dark">Service Center</h6>
              </div>
            </div>
          </div>
          <div class="col-12 col-md-2 col-lg-2 col-sm-3 p-4 ">
            <div class="p-3 toolsservice rounded-3 shadow h-100 bg-white">
              <div class="col-12 text-center">
                <img src="assets/images/call-service.png" class="w-50 img-tools p-3" alt="">
              </div>
              <div class="col-12">
                <h6 class="service-box fw-bold fs-6 mt-2 text-center text-dark">Contact Us</h6>
              </div>
            </div>
          </div>
          <div class="col-12 col-md-2 col-lg-2 col-sm-3 p-4 ">
            <div class="p-3 toolsservice rounded-3 shadow h-100 bg-white">
              <div class="col-12 text-center">
                <img src="assets/images/dealer.png" class="w-50 img-tools p-3" alt="">
              </div>
              <div class="col-12">
                <h6 class="service-box fw-bold fs-6 mt-2 text-center text-dark">Dealer Locator</h6>
              </div>
            </div>
          </div>
          <div class="col-12 col-md-2 col-lg-2 col-sm-3 p-4">
            <div class="p-3 toolsservice rounded-3 shadow h-100 bg-white">
              <div class="col-12 text-center">
                <img src="assets/images/offers-1.png" class="w-50 img-tools p-2" alt="">
              </div>
              <div class="col-12">
                <h6 class="service-box fw-bold fs-6 mt-2 text-center text-dark">Offers</h6>
              </div>
            </div>
          </div>
          <div class="col-12 col-md-2 col-lg-2 col-sm-3 p-4">
            <div class="p-3 toolsservice rounded-3 h-100 shadow bg-white">
              <div class="col-12 text-center">
                <img src="assets/images/about-us.png" class="w-50 img-tools p-3" alt="">
              </div>
              <div class="col-12">
                <h6 class="service-box fw-bold fs-6 mt-2 t-condition text-center text-dark">About Us</h6>
              </div>
            </div>
          </div>
          <div class="col-12 col-md-2 col-lg-2 col-sm-3 p-4 ">
            <div class="p-3 toolsservice  rounded-3 shadow h-100 bg-white">
              <div class="col-12 text-center">
                <img src="assets/images/dealer.png" class="w-50 img-tools p-3" alt="">
              </div>
              <div class="col-12 text-center">
                <h6 class="service-box fw-bold fs-6 mt-2 text-center text-dark ">Customer Care</h6>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
    <!-- Nwes & Blog-->
  <section>
    <div class="container">
      <h3 class=" py-4 display-6 fw-bold">Our Latest<span class="text-success">News & Blog</span></h3>
      <nav class="mb-3">
        <div class="nav nav-tabs " id="nav-tab" role="tablist">
          <a class="nav-link active px-5 py-3 h5 fw-bold text-dark py-2" type="button" id="news-tab" data-bs-toggle="tab" data-bs-target="#premium_news" role="tab" aria-controls="premium" aria-selected="true">All News</a>
          <a class="nav-link px-5 py-3 h5 fw-bold text-dark" id="latest-blog-tab" type="button" data-bs-toggle="tab" data-bs-target="#premium_blog" role="tab" aria-controls="latest" aria-selected="false">Blog</a>
        </div>
      </nav>
      <div class="tab-content justify-content-center" >
        <div role="tabpanel" class="tab-pane fade show active" id="premium_news" aria-labelledby="news-tab">
          <section class="section slider-section">
            <div class="container slider-column">
              <div class="carousel-wrap">
                <div class="owl-carousel" id="all_news"> </div>
                <div class="col text-center pb-4">
                  <a href="all_news.php" class="btn btn-success px-5">View all News</a>
                </div>
              </div>
            </div>
          </section>
        </div>
        <div role="tabpanel" class="tab-pane fade" id="premium_blog" aria-labelledby="latest-blog-tab">
          <section class="section slider-section">
            <div class="container slider-column">
              <div class="carousel-wrap">
                <div class="owl-carousel" id="blog"></div>
              </div>
              <div class="col text-center pb-4">
                <a href="blog.php" class="btn btn-success px-5">View all Blog </a>
              </div>
            </div>
          </section>
        </div>
      </div>
    </div>
  </section>
    <!-- about tractor junction -->
    <section class="about bg-light">
      <div class="container">
        <div class="lecture_heading text-center">
          <h3 class="fw-bold mt-4 pt-4">About <span class="text-success">Bharat Agrimart's</span>
          </h3>
        </div>
        <div class="mt-4 pb-5">
          <div class="accordion" id="accordionFlushExample">
            <div class="accordion-item  rounded-3">
              <h2 class="accordion-header" id="flush-headingOne">
                <button class="accordion-button collapsed fw-bold h4" type="" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne"> Bharat Agrimart's For Your All Agriculture Needs </button>
              </h2>
              <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">
                  <p>Bharat Agrimart's is an online digital platform to buy, sell, finance, insurance, service, new/used tractor and farm implements. Here you can find all popular brands like Mahindra, Swaraj, Eicher, Sonalika, New Holland, Massey Ferguson, John Deere, Powertrac, Farmtrac, Kubota and many more on a single platform. We care about your needs. So here at one platform, we have the entire farm-related products in one place for your comfort. Along with this, get each agricultural product at a fair price.</p>
                  <p>We have connected with well established <strong> 25+ brands</strong>. Each tractor, according to your priority, is provided in the market. The brands won farmers' hearts by providing quality products at economical prices. All we separated according to categories at Bharat Agrimart's for your convenience. Want to know more? Following, we are showing in detail. </p>
                </div>
              </div>
            </div>
            <div class="accordion-item rounded-3 my-3">
              <h2 class="accordion-header" id="flush-headingTwo">
                <button class="accordion-button collapsed  fw-bold h4" type="" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo"> Tractor Categories </button>
              </h2>
              <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">
                  <p>Find separate segments for <strong> new tractors</strong>, popular tractors, latest tractors, upcoming tractors, mini tractors, Ac cabin Tractors and 4WD tractors for your convenience. You can quickly get your dream tractor at an affordable price. Along with this, you can easily find your tractor itself on the home page by selecting hp and brand name. And, you can get offer details, and a new tractor is also launched on the home page. </p>
                </div>
              </div>
            </div>
            <div class="accordion-item  rounded-3 my-3">
              <h2 class="accordion-header" id="flush-headingThree">
                <button class="accordion-button collapsed  fw-bold h4" type="" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree"> Sell Used Tractors </button>
              </h2>
              <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">
                  <p>Now you can sell used tractors online without any effort. Just go on, sell tractor online on Bharat Agrimart's and fill the form. After that, our team will help you sell your used tractor. We have also introduced tractor valuation to get your used tractor fair market value. You can sell used tractors at a fair market price. Upload your used tractor at Bharat Agrimart's, free of cost.</p>
                </div>
              </div>
            </div>
            <div class="accordion-item  rounded-3 my-3">
              <h2 class="accordion-header" id="flush-heading4">
                <button class="accordion-button collapsed  fw-bold h4" type="" data-bs-toggle="collapse" data-bs-target="#flush-collapse4" aria-expanded="false" aria-controls="flush-collapse4"> Compare Tractors </button>
              </h2>
              <div id="flush-collapse4" class="accordion-collapse collapse" aria-labelledby="flush-heading4" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">
                  <p>We also have a compare segment in which you can compare two or more tractors at a time. For that, you get the comparison between tractors price, tractors specifications, warranty and many more on one page. Compare your selected tractor.</p>
                </div>
              </div>
            </div>
            <div class="accordion-item  rounded-3 my-3">
              <h2 class="accordion-header" id="flush-heading5">
                <button class="accordion-button collapsed  fw-bold h4" type="" data-bs-toggle="collapse" data-bs-target="#flush-collapse5" aria-expanded="false" aria-controls="flush-collapse5"> Harvesters and Implements </button>
              </h2>
              <div id="flush-collapse5" class="accordion-collapse collapse" aria-labelledby="flush-heading5" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">
                  <p>Here on Bharat Agrimart's's, we have an individual segment for harvesters. You can get all leading brands to combine harvesters with complete specifications. Get full detailed information about combine harvesters and their price without any trouble. Additionally, find implements like <strong> rotavator, cultivator, plough, harrow and trailer</strong> of all leading brands at their reasonable price. </p>
                </div>
              </div>
            </div>
            <div class="accordion-item  rounded-3 my-3">
              <h2 class="accordion-header" id="flush-heading6">
                <button class="accordion-button collapsed  fw-bold h4" type="" data-bs-toggle="collapse" data-bs-target="#flush-collapse6" aria-expanded="false" aria-controls="flush-collapse6"> Tyres Available </button>
              </h2>
              <div id="flush-collapse6" class="accordion-collapse collapse" aria-labelledby="flush-heading6" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">
                  <p>We have now introduced a separate tyre segment in which you get all brands tyres, i.e. <strong> MRF, Apollo, BKT, Good Year, CEAT, Birla Tyres and JK Tyres</strong> , with complete information. So find the perfect match for your tractor. </p>
                </div>
              </div>
            </div>
            <div class="accordion-item  rounded-3 my-3">
              <h2 class="accordion-header" id="flush-headingoil">
                <button class="accordion-button collapsed  fw-bold h4" type="" data-bs-toggle="collapse" data-bs-target="#flush-collapseoil" aria-expanded="false" aria-controls="flush-collapseoil"> Engine Oil </button>
              </h2>
              <div id="flush-collapseoil" class="accordion-collapse collapse" aria-labelledby="flush-headingoil" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">
                  <p>We have introduced a separate engine oil segment in which you get all brands engine oil i.e Gulf, Servo, RBM, Castrol and Valvoline, with complete information. So find the perfect match for your tractor.</p>
                </div>
              </div>
            </div>
            <div class="accordion-item  rounded-3 my-3">
              <h2 class="accordion-header" id="flush-heading7">
                <button class="accordion-button collapsed  fw-bold h4" type="" data-bs-toggle="collapse" data-bs-target="#flush-collapse7" aria-expanded="false" aria-controls="flush-collapse7"> Other Information Segments </button>
              </h2>
              <div id="flush-collapse7" class="accordion-collapse collapse" aria-labelledby="flush-heading7" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">
                  <p>Additionally, we have a Blog segment, Agriculture and Tractor news segment form to update your knowledge about agriculture. These segments cover articles, blogs on the tractor price list, agriculture informational blogs, articles, Hindi news, English news etc.</p>
                  <p>Also, find a certified dealer, dealership enquiry, videos, offers, on road price, reviews, EMI calculator and many more. Other than this, get separate segments for loans, offers, broker dealers, etc.</p>
                  <p>We have a youtube channel where we provide tractor and other agriculture reviews, agriculture headlines, and other to-do lists. Additionally, there we provide crop information and how to enhance productivity. You also upload lasting tractor videos and work.</p>
                  <p>Buy tractor online India on Bharat Agrimart's's. Here you can find a new tractor online price, new tractors for sale and find a tractor online with implements.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="collection">
          <h4 class="fw-bold mb-2">
            <i class="far fa-star"></i> &nbsp; “भारत एग्रीमार्ट पर मिलेगी ट्रैक्टर की सही कीमत, साथ ही मिलेगा नए व पुराने ट्रैक्टरों का शानदार कलेक्शन”
          </h4>
          <div class="mt-4 pb-5">
            <div class="accordion accordion-col" id="accordionFlushExample">
              <div class="accordion-item rounded-3">
                <h2 class="accordion-header" id="flush-headingbox2">
                  <button class="accordion-button collapsed  fw-bold h4" type="" data-bs-toggle="collapse" data-bs-target="#flush-collapsebox2" aria-expanded="false" aria-controls="flush-collapsebox2"> Top New Tractors </button>
                </h2>
                <div id="flush-collapsebox2" class="accordion-collapse collapse" aria-labelledby="flush-headingbox2" data-bs-parent="#accordionFlushExample">
                  <div class="container">
                    <div class="row my-2 py-2">
                      <div class="col-12 col-md-4 col-lg-4 col-sm-4">
                        <ul class="justify-content-center ul-box   shadow p-2">
                          <li class="">
                            <a href="#" class="text-dark text-decoration-none">
                              <p>
                                <i class="fa-solid fa-angles-right"></i> &nbsp;Mahindra ARJUN NOVO 605 DI-i-4WD
                              </p>
                            </a>
                          </li>
                          <li class="">
                            <a href="#" class="text-dark text-decoration-none">
                              <p>
                                <i class="fa-solid fa-angles-right"></i> &nbsp;Sonalika WT 60
                              </p>
                            </a>
                          </li>
                          <li class="">
                            <a href="#" class="text-dark text-decoration-none">
                              <p>
                                <i class="fa-solid fa-angles-right"></i> &nbsp;John Deere 3028 EN
                              </p>
                            </a>
                          </li>
                          <li class="">
                            <a href="#" class="text-dark text-decoration-none">
                              <p>
                                <i class="fa-solid fa-angles-right"></i> &nbsp;VST 927 4WD
                              </p>
                            </a>
                          </li>
                          <li class="">
                            <a href="#" class="text-dark text-decoration-none">
                              <p>
                                <i class="fa-solid fa-angles-right"></i> &nbsp;Farmtrac 60
                              </p>
                            </a>
                          </li>
                          <li class="">
                            <a href="#" class="text-dark text-decoration-none">
                              <p>
                                <i class="fa-solid fa-angles-right"></i> &nbsp;VST 927 4WD
                              </p>
                            </a>
                          </li>
                          <li class="">
                            <a href="#" class="text-dark text-decoration-none">
                              <p>
                                <i class="fa-solid fa-angles-right"></i> &nbsp;VST 918 4WD 60
                              </p>
                            </a>
                          </li>
                        </ul>
                      </div>
                      <div class="col-12 col-md-4 col-lg-4 col-sm-4 ">
                        <ul class="justify-content-center ul-box shadow p-2">
                          <li class="">
                            <a href="#" class="text-dark text-decoration-none">
                              <p>
                                <i class="fa-solid fa-angles-right"></i> &nbsp;Mahindra 475 DI
                              </p>
                            </a>
                          </li>
                          <li class="">
                            <a href="#" class="text-dark text-decoration-none">
                              <p>
                                <i class="fa-solid fa-angles-right"></i> &nbsp;Eicher 380 2WD Prima G3
                              </p>
                            </a>
                          </li>
                          <li class="">
                            <a href="#" class="text-dark text-decoration-none">
                              <p>
                                <i class="fa-solid fa-angles-right"></i> &nbsp;Eicher 548
                              </p>
                            </a>
                          </li>
                          <li class="">
                            <a href="#" class="text-dark text-decoration-none">
                              <p>
                                <i class="fa-solid fa-angles-right"></i> &nbsp;Sonalika Tiger 50
                              </p>
                            </a>
                          </li>
                          <li class="">
                            <a href="#" class="text-dark text-decoration-none">
                              <p>
                                <i class="fa-solid fa-angles-right"></i> &nbsp;Swaraj 742 FE
                              </p>
                            </a>
                          </li>
                          <li class="">
                            <a href="#" class="text-dark text-decoration-none">
                              <p>
                                <i class="fa-solid fa-angles-right"></i> &nbsp;Massey Ferguson 9500 Smart 4WD
                              </p>
                            </a>
                          </li>
                          <li class="">
                            <a href="#" class="text-dark text-decoration-none">
                              <p>
                                <i class="fa-solid fa-angles-right"></i> &nbsp;Powertrac Euro 60
                              </p>
                            </a>
                          </li>
                        </ul>
                      </div>
                      <div class="col-12 col-md-4 col-lg-4 col-sm-4 ">
                        <ul class="justify-content-center ul-box shadow p-2">
                          <li class="">
                            <a href="#" class="text-dark text-decoration-none">
                              <p>
                                <i class="fa-solid fa-angles-right"></i> &nbsp;Swaraj 969 FE
                              </p>
                            </a>
                          </li>
                          <li class="">
                            <a href="#" class="text-dark text-decoration-none">
                              <p>
                                <i class="fa-solid fa-angles-right"></i> &nbsp;John Deere 3028 EN
                              </p>
                            </a>
                          </li>
                          <li class="">
                            <a href="#" class="text-dark text-decoration-none">
                              <p>
                                <i class="fa-solid fa-angles-right"></i> &nbsp;John Deere 3028 EN
                              </p>
                            </a>
                          </li>
                          <li class="">
                            <a href="#" class="text-dark text-decoration-none">
                              <p>
                                <i class="fa-solid fa-angles-right"></i> &nbsp;New Holland 3630-TX Super
                              </p>
                            </a>
                          </li>
                          <li class="">
                            <a href="#" class="text-dark text-decoration-none">
                              <p>
                                <i class="fa-solid fa-angles-right"></i> &nbsp;New Holland Excel 4710 Red
                              </p>
                            </a>
                          </li>
                          <li class="">
                            <a href="#" class="text-dark text-decoration-none">
                              <p>
                                <i class="fa-solid fa-angles-right"></i> &nbsp;Massey Ferguson 9500 Smart
                              </p>
                            </a>
                          </li>
                          <li class="">
                            <a href="#" class="text-dark text-decoration-none">
                              <p>
                                <i class="fa-solid fa-angles-right"></i> &nbsp;Farmtrac 60
                              </p>
                            </a>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="accordion-item  rounded-3 my-3">
                <h2 class="accordion-header" id="flush-headingbox">
                  <button class="accordion-button collapsed  fw-bold h4" type="" data-bs-toggle="collapse" data-bs-target="#flush-collapsebox" aria-expanded="false" aria-controls="flush-collapsebox"> Other Information Segments </button>
                </h2>
                <div id="flush-collapsebox" class="accordion-collapse collapse" aria-labelledby="flush-headingbox" data-bs-parent="#accordionFlushExample">
                  <div class="container">
                    <div class="accordion-body">
                      <div class="row my-2 py-2">
                        <div class="col-12 col-md-4 col-lg-4 col-sm-4 ">
                          <ul class="justify-content-center ul-box shadow p-2">
                            <li class="">
                              <a href="find_new_tractors.php" class="text-dark text-decoration-none">
                                <p>
                                  <i class="fa-solid fa-angles-right"></i> &nbsp;New Tractors
                                </p>
                              </a>
                            </li>
                            <li class="">
                              <a href="#" class="text-dark text-decoration-none">
                                <p>
                                  <i class="fa-solid fa-angles-right"></i> &nbsp;Offers
                                </p>
                              </a>
                            </li>
                            <li class="">
                              <a href="popular_tractors.php" class="text-dark text-decoration-none">
                                <p>
                                  <i class="fa-solid fa-angles-right"></i> &nbsp;Popular Tractors
                                </p>
                              </a>
                            </li>
                            <li class="">
                              <a href="dealership_enq.php" class="text-dark text-decoration-none">
                                <p>
                                  <i class="fa-solid fa-angles-right"></i> &nbsp;Dealership Enquiry
                                </p>
                              </a>
                            </li>
                          </ul>
                        </div>
                        <div class="col-12 col-md-4 col-lg-4 col-sm-4">
                          <ul class="justify-content-center ul-box shadow p-2">
                            <li class="">
                              <a href="latest_tractor.php" class="text-dark text-decoration-none">
                                <p>
                                  <i class="fa-solid fa-angles-right"></i> &nbsp;Latest Tractors
                                </p>
                              </a>
                            </li>
                            <li class="">
                              <a href="4wd.php" class="text-dark text-decoration-none">
                                <p>
                                  <i class="fa-solid fa-angles-right"></i> &nbsp;4WD Tractors
                                </p>
                              </a>
                            </li>
                            <li class="">
                              <a href="upcoming_tractors.php" class="text-dark text-decoration-none">
                                <p>
                                  <i class="fa-solid fa-angles-right"></i> &nbsp;Upcoming Tractors
                                </p>
                              </a>
                            </li>
                            <li class="">
                              <a href="compare_trac.php" class="text-dark text-decoration-none">
                                <p>
                                  <i class="fa-solid fa-angles-right"></i> &nbsp;Compare
                                </p>
                              </a>
                            </li>
                          </ul>
                        </div>
                        <div class="col-12 col-md-4 col-lg-4 col-sm-4 ">
                          <ul class="justify-content-center ul-box shadow p-2">
                            <li class="">
                              <a href="new_tractor_loan.php" class="text-dark text-decoration-none">
                                <p>
                                  <i class="fa-solid fa-angles-right"></i> &nbsp;Loan
                              </a>
                            </li>
                            <li class="">
                              <a href="Insurance.php" class="text-dark text-decoration-none">
                                <p>
                                  <i class="fa-solid fa-angles-right"></i> &nbsp;Insurance
                                </p>
                              </a>
                            </li>
                            <li class="">
                              <a href="#" class="text-dark text-decoration-none">
                                <p>
                                  <i class="fa-solid fa-angles-right"></i> &nbsp;Contact / Mail Us
                                </p>
                              </a>
                            </li>
                          </ul>
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
    </section> 

    <?php
    include 'includes/footer.php';
    ?>
</body>
    <script>
      $('#usedtractorforsell').owlCarousel({
        loop: true,
        margin: 10,
        nav: true,
        navText: [
          "<i class='fa fa-caret-left'></i>",
          "<i class='fa fa-caret-right'></i>"
        ],
        
    autoplay:false,
    autoplayTimeout:3000,
    autoplayHoverPause:true,
        responsive: {
          0: {
            items: 1
          },
          600: {
            items: 3
          },
          1000: {
            items: 3
          }
        }
})
    </script>
    <script>
      function getImageSize(img) {
    var naturalWidth = img.naturalWidth;
    var naturalHeight = img.naturalHeight;
    console.log("Natural width: " + naturalWidth + "px, Natural height: " + naturalHeight + "px");
}
    </script>
<script>
function showForm() {
  const formContainer = document.getElementById('search_form_container');
  formContainer.style.display = 'block'; // Show the form
}

function closeForm() {
  const formContainer = document.getElementById('search_form_container');
  formContainer.style.display = 'none'; // Hide the form
}
</script>
<script>
// fetch('http://tractor-api.divyaltech.com/api/customer/get_new_tractor_brands')
//   .then(response => response.json())
//   .then(data => {
//     const brandSelect = document.getElementById('brand');
    
//     data.brands.forEach(brand => {
//       const option = document.createElement('option');
//       option.value = brand.id;
//       option.textContent = brand.name;
//       brandSelect.appendChild(option);
//     });
//   })
//   .catch(error => console.error('Error fetching brands:', error));

document.getElementById('Search').addEventListener('click', function() {
  var brandId = document.getElementById('brand').value;
  var hpValue = document.getElementById('hp').value;
  
  if (brandId) {
    fetch('http://tractor-api.divyaltech.com/api/customer/get_new_tractor_by_brands/' + brandId)
      .then(response => response.json())
      .then(data => {
        if (data.product && data.product.allProductData.length === 0 && data.product.accessory_and_tractor_type.length === 0) {
          var msg = 'No Valid Data For This Brand.';
          $("#errorStatusLoading").modal('show');
          $("#errorStatusLoading").find('.modal-title').html('<p class="text-center model-message-brand">No valid data in this brand</p>');
          $("#errorStatusLoading").find('.modal-body').html();
          $("#errorStatusLoading").find('.modal-body').append('<img src="assets/images/404.gif" style="display:block; margin:0 auto;" class="w-50 text-center" alt="No Data Available"></img>');
          $('#errorStatusLoading').on('hidden.bs.modal', function (){
              // Optional: You can perform any other action or reset the form
              window.location.reload();
          });
        } else {
          // If data is available, handle the redirection based on the selections
          if (hpValue) {
            window.location.href = 'brands.php?brand_id=' + brandId + '&hp=' + encodeURIComponent(hpValue);
          } else {
            window.location.href = 'brands.php?brand_id=' + brandId;
          }
        }
      })
      .catch(error => console.error('Error fetching brand data:', error));
  } else if (hpValue) {
    // If only HP is selected
    window.location.href = 'tractor_by_hp.php?hp=' + encodeURIComponent(hpValue);
  } else {
    // If neither brand nor HP is selected, prompt the user
    alert('Please select a brand, HP range, or both to search.');
  }
});
</script>
<script>
  document.addEventListener('DOMContentLoaded', function() {
    const brandSelect = document.getElementById('brand');
    const hpSelect = document.getElementById('hp');

    // Event listener for brand selection
    brandSelect.addEventListener('change', function() {
      if (brandSelect.value !== "") {
        hpSelect.disabled = true;
      } else {
        hpSelect.disabled = false;
      }
    });

    // Event listener for HP selection
    hpSelect.addEventListener('change', function() {
      if (hpSelect.value !== "") {
        brandSelect.disabled = true;
      } else {
        brandSelect.disabled = false;
      }
    });

    // If the form is reset or the page is reloaded, ensure both dropdowns are enabled
    document.getElementById('search_form').addEventListener('reset', function() {
      brandSelect.disabled = false;
      hpSelect.disabled = false;
    });
  });

  function resetForm() {
    // Reset all the fields in the form
    document.getElementById("search_form").reset();
  }
</script>

<script>
 function googleTranslateElementInit() {
 new google.translate.TranslateElement({
 pageLanguage: 'en',
 autoDisplay: 'true',
 includedLanguages:'en,hi,bn,mr,pa,or,te,ta,ml',
 layout: google.translate.TranslateElement.InlineLayout.HORIZONTAL
 }, 'google_translate_element');
 }
</script>
</html>