
<html lang="en">
    <?php
include 'includes/headertag.php';
//    include 'includes/headertagadmin.php';
   include 'includes/footertag.php';
   
   ?> 
  <script> var APIBaseURL = "<?php echo $APIBaseURL; ?>";</script>
  <script> var baseUrl = "<?php echo $baseUrl; ?>";</script>
  <script src="<?php $baseUrl; ?>model/mahindra_brand.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>

<body>
   <?php
   include 'includes/header.php';
   ?>
   <!-- Banner Here -->
   


 




    <section class="about bg-white mt-100 ">
        <div class="container-fullwidth">
            <div class="lecture_heading ">
                <h3 class="my-4 pt-5">TRACTORS BY BRAND</h3>
            </div>
            <div class="mt-4 pb-5">
                <div class="row allbrands" id="brandContainer">
                    
                    
                </div>
              
            </div>

        </div>
    </section>

    <section class="bybudget position-relative bg-light">
      <div class="container  ">
        <div class="row text-align-center justify-content-between">
          <div class="col-12 col-lg-6 col-md-6 col-sm-6 pt-3">
            <h3 class="text-dark display-6 fw-bold">Tractors by <span class="text-success">Budget</span>
            </h3>
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
    <!--   <div class="col text-center pb-5 ">
        <a href="#" class="btn btn-success  px-5">View all</a>
      </div> -->
    </section>
    <section class="backhp">
      <div class="container  py-4">
        <h3 class="text-dark display-6 fw-bold my-3 pb-2">Tractors By HP</h3>
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
    <section class="bg-light">
      <div class="container">
        <div class=" py-3  ">
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
             <!-- <div class="col-12 col-md-3 col-lg-3 col-sm-4 p-4 my-1 ">
              <div class="row p-3 toolsservice rounded-3 shadow">
                <div class="col-12">
                  <img src="assets/images/dealer.png" class="w-50 img-tools p-3" alt="">
                </div>
                <div class="col-12 text-center">
                  <h6 class="service-box fw-bold fs-6 mt-2 text-dark ">Customer Care</h6>
                </div>
              </div>
            </div>
            <div class="col-12 col-md-3 col-lg-3 col-sm-4 p-4">
              <div class="row p-3 toolsservice rounded-3 shadow">
                <div class="col-12">
                  <img src="assets/images/loan.png" class="w-50 img-tools p-3" alt="">
                </div>
                <div class="col-12 text-center">
                  <h6 class="service-box fw-bold fs-6 mt-2 text-dark">Loan</h6>
                </div>
              </div>
            </div> -->
          </div>
        </div>
      </div>
    </section>


    <?php
    include 'includes/footer.php';
    ?>

    
