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
            <span class=""><span class=" header-link  px-1">Certified Dealers</span></span>
          </span> 
        </div>
      </div>
    </section>

    <section>
      <div class="row mt-3">
        <img src="assets/images/certified-dealer-main.jpg" height="400"alt="dealership-image">
      </div>            
    </section>

    <section class="form-view bg-white pb-4">
      <div class="container-mid" style="position: relative;">
        <div class="row justify-content-center">
          <div class="col-md-8 col-lg-7">
            <form id="dealership_enq_from" class="form-view-inner form-view-overlay bg-light box-shadow p-3" action="" method="" >
              <div class="row justify-content-center">            
                <div class="col-12 col-sm-4 col-md-4 col-lg-4">
                  <label for="yr_dist" class="form-label fw-bold text-dark">Brand</label>
                  <select class="form-select py-2 " id="_brand" name="_brand"aria-label=".form-select-lg example">
                    <option selected>Select Brand</option>
                    <option value="1">Mahindra</option>
                    <option value="2">Swaraj</option>
                    <option value="2">Powertrac</option>
                  </select>
                </div>                
                <div class="col-12 col-sm-4 col-md-4 col-lg-4">
                  <label for="yr_state" class="form-label text-dark fw-bold"> <i class="fas fa-location"></i> State</label>
                  <select class="form-select py-2" id="_state" name="_state"aria-label=".form-select-lg example">
                    <option selected>Select State</option>
                    <option value="1">Chhattisgarh</option>
                    <option value="2">Other</option>
                  </select>
                </div>
                <div class="col-12 col-sm-4 col-md-4 col-lg-4">
                  <label for="yr_dist" class="form-label fw-bold  text-dark"><i class="fa-solid fa-location-dot"></i> District</label>
                  <select class="form-select py-2" id="_district" name="_district" aria-label=".form-select-lg example">
                    <option selected>Select District</option>
                    <option value="1">Raipur</option>
                    <option value="2">Bilaspur</option>
                    <option value="2">Durg</option>
                  </select>
                </div>
                <div class="row">
                  <div class="text-center col-12 col-lg-6 col-md-6 col-sm-6 my-3">
                    <button type="submit" id="delership_enq_btn" class="btn btn-success px-5 w-100 ">Search Dealer</button>         
                  </div>        
                  <div class="text-center col-12 col-lg-6 col-md-6 col-sm-6 my-3">
                    <button type="submit" id="delership_enq_btn" class="btn btn-success px-5 w-100 ">Become Certified Dealer</button>         
                  </div>        
                </div>
                <p class="mb-0 text-center">By proceeding ahead you expressly agree to the Tractor Junctions <a href="#" class="text-decoration-none" target="_blank" title="terms and conditions">terms and conditions*</a></p>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>


    <!-- TOOLS AND SERVICES -->
    <!-- <section class="bg-light">
      <div class="container">
        <div class=" my-3 py-3">
          <h3 class="display-6 fw-bold  my-3">
            <span class="text-success">Tools</span> and <span class="text-success">Services</span>
          </h3>
          <div class="row text-center">
            <div class="col-12 col-md-2 col-lg-2 col-sm-3 p-4">
              <div class="p-3 toolsservice rounded-3 shadow">
                <div class="col-12 text-center">
                  <img src="assets/images/service.png" class="img-tools p-3  w-50 " alt="">
                </div>
                <div class="col-12">
                  <h6 class="service-box text-center fw-bold fs-6 mt-2 text-dark">Service Center</h6>
                </div>
              </div>
            </div>
            <div class="col-12 col-md-2 col-lg-2 col-sm-3 p-4 ">
              <div class="p-3 toolsservice rounded-3 shadow">
                <div class="col-12 text-center">
                  <img src="assets/images/call-service.png" class="w-50 img-tools p-3" alt="">
                </div>
                <div class="col-12">
                  <h6 class="service-box fw-bold fs-6 mt-2 text-center text-dark">Contact Us</h6>
                </div>
              </div>
            </div>
            <div class="col-12 col-md-2 col-lg-2 col-sm-3 p-4 ">
              <div class="p-3 toolsservice rounded-3 shadow">
                <div class="col-12 text-center">
                  <img src="assets/images/dealer.png" class="w-50 img-tools p-3" alt="">
                </div>
                <div class="col-12">
                  <h6 class="service-box fw-bold fs-6 mt-2 text-center text-dark">Dealer Locator</h6>
                </div>
              </div>
            </div>
            <div class="col-12 col-md-2 col-lg-2 col-sm-3 p-4">
              <div class="p-3 toolsservice rounded-3 shadow">
                <div class="col-12 text-center">
                  <img src="assets/images/offers-1.png" class="w-50 img-tools p-2" alt="">
                </div>
                <div class="col-12">
                  <h6 class="service-box fw-bold fs-6 mt-2 text-center text-dark">Offers</h6>
                </div>
              </div>
            </div>
            <div class="col-12 col-md-2 col-lg-2 col-sm-3 p-4 ">
              <div class="p-3 toolsservice rounded-3 shadow">
                <div class="col-12 text-center">
                  <img src="assets/images/about-us.png" class="w-50 img-tools p-4" alt="">
                </div>
                <div class="col-12">
                  <h6 class="service-box fw-bold fs-6 mt-2 text-center text-dark">About Us</h6>
                </div>
              </div>
            </div>
            <div class="col-12 col-md-2 col-lg-2 col-sm-3 p-4 ">
              <div class="p-3 toolsservice  rounded-3 shadow">
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
    </section> -->

    <!-- Find tractor dealers near you -->
    <section>
        <div class="container">
            <div class="row">
                <p class="fw-bold text-dark bg-light text-start mt-4 assured ps-3">Find tractor dealers near you</p>
                <p class="justify-content-center">Tractor Junction is India’s leading digital platform for all kinds of Tractor related services be it buying, selling, financing, insuring or servicing the machine we serve you all. Tractor Junction, in order to meet your expectations and needs strive hard in order to get more resources on-board for your betterment. One such feature we offer you is to find best and certified dealers for your desired activity. Finding a dealer we know can be very messy sometimes but we assure you ease through our highly selective database. Find best dealers in your locality and get a list of all the dealers in your proximity. We believe in making the tasks of buying and selling tractors easy for you and hassle free. When it is with us, it is assured, it is guaranteed and it is safe. Tractor Junction brings to you the best after scrutinizing the companies, brands, models and dealers through our integrated process of selection</p>
                <p class="justify-content-center">We offer you a hassle-free process to buy tractor dealerships in India. You just need to fill up the above form asking for basic details like name, tractor brand preferences, state, district, etc. We will help you identify the right steps to start your new tractor dealerships. We will help you with pre and post-opening & product support, prepare a marketing and advertising plan & even provide assistance on gathering resources for ideal site selection, followed by quality control parameters. For any further Tractor dealership enquiry, reach us.</p>
            </div>
        </div>
    </section>

    <!-- QUICK LINKS -->
    <section>
        <div class="container py-3 mt-2">
            <div class="row">
                <h5 class="bg-light assured py-1 ps-3">Quick links</h5>
                <div class="col-12 col-md-6 col-lg-3 py-1">
                    <ul>
                        <li><i class="fa-solid fa-angles-right pe-1"></i><a href="#" class="text-decoration-none text-dark">New Tractor</a></li>                    
                        <li><i class="fa-solid fa-angles-right pe-1"></i><a href="#" class="text-decoration-none text-dark">Compare</a></li>
                        <li><i class="fa-solid fa-angles-right pe-1"></i><a href="#" class="text-decoration-none text-dark">Dealership Enquiry</a></li>
                    </ul>
                </div>
                <div class="col-12 col-md-6 col-lg-3 py-1">
                    <ul>
                        <li><i class="fa-solid fa-angles-right pe-1"></i><a href="#" class="text-decoration-none text-dark">Finance</a></li>                    
                        <li><i class="fa-solid fa-angles-right pe-1"></i><a href="#" class="text-decoration-none text-dark">Upcoming Tractors</a></li>
                        <li><i class="fa-solid fa-angles-right pe-1"></i><a href="#" class="text-decoration-none text-dark">Contact/Mail Us</a></li>
                    </ul>
                </div>
                <div class="col-12 col-md-6 col-lg-3 py-1">
                    <ul>
                        <li><i class="fa-solid fa-angles-right pe-1"></i><a href="#" class="text-decoration-none text-dark">Popular Tractors</a></li>                    
                        <li><i class="fa-solid fa-angles-right pe-1"></i><a href="#" class="text-decoration-none text-dark">Tractor News</a></li>
                        <li><i class="fa-solid fa-angles-right pe-1"></i><a href="#" class="text-decoration-none text-dark">Insurance</a></li>
                    </ul>
                </div>
                <div class="col-12 col-md-6 col-lg-3 py-1">
                    <ul>
                        <li><i class="fa-solid fa-angles-right pe-1"></i><a href="#" class="text-decoration-none text-dark">Used Tractors</a></li>
                        <li><i class="fa-solid fa-angles-right pe-1"></i><a href="#" class="text-decoration-none text-dark">Latest Tractors</a></li>
                        <li><i class="fa-solid fa-angles-right pe-1"></i><a href="#" class="text-decoration-none text-dark">Offers</a></li>
                    </ul>
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