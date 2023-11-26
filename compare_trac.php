<!DOCTYPE html>
<html lang="en">

  <head>
    <?php
      include 'includes/headertag.php';
    ?>
  </head>
  <?php
    include 'includes/header.php';
  ?>

  <section class="mt-5 pt-5">
    <div class="container pt-4">
      <div class="">
        <span class="mt-5 text-white pt-5 ">
          <a href="index.php" class="text-decoration-none header-link px-1">Home <i class="fa-solid fa-chevron-right px-1"></i></a>
        </span>
        <span class="text-dark">Compare</span>
      </div>
    </div>
  </section>
  <!-- All News Section -->
  <div class="container" id="an">       
    <div class="row py-1">
      <h3 class="mt-2 mb-3 bg-light">Compare Tractors</h3>

      <div class="col-12 col-lg-3 col-sm-3 col-md-3 mt-2 mb-2">
        <div class="success__stry__item shadow h-100">
          <div class="thumb">
            <a href="#">
              <div class="">
                <img src="assets\images\default-image.jpg" class="object-fit-cover p-3 w-100" alt="img">
              </div>
            </a>
          </div>
          <div class="content mt-5 py-5 pb-3 text-center">                        
            <button type="button" class="text-primary fs-5" data-bs-toggle="modal" data-bs-target="#select_trac_modal">
              Select Tractor
            </button>                    
          </div>
          <div class="col-12  text-center"> 
            <button class="btn btn-success text-white col-12 px-5">Compare</button>
          </div>  
        </div>
      </div>   

      <div class="col-12 col-lg-3 col-sm-3 col-md-3 mt-2 mb-2">
        <div class="success__stry__item shadow h-100">
          <div class="thumb">
            <a href="#">
              <div class="">
                <img src="assets\images\default-image.jpg" class="object-fit-cover p-3 w-100" alt="img">
              </div>
            </a>
          </div>
          <div class="content mt-5 py-5 pb-3 text-center">                        
            <button type="button" class="text-primary fs-5" data-bs-toggle="modal" data-bs-target="#select_trac_modal">
              Select Tractor
            </button>                    
          </div>
          <div class="col-12  text-center"> 
            <button class="btn btn-success text-white col-12 px-5">Compare</button>
          </div>  
        </div>
      </div>   


      <div class="col-12 col-lg-3 col-sm-3 col-md-3 mt-2 mb-2">
        <div class="success__stry__item shadow h-100">
          <div class="thumb">
            <a href="#">
              <div class="">
                <img src="assets\images\default-image.jpg" class="object-fit-cover p-3 w-100" alt="img">
              </div>
            </a>
          </div>
          <div class="content mt-5 py-5 pb-3 text-center">                        
            <button type="button" class="text-primary fs-5" data-bs-toggle="modal" data-bs-target="#select_trac_modal">
              Select Tractor
            </button>                    
          </div>
          <div class="col-12  text-center"> 
            <button class="btn btn-success text-white col-12 px-5">Compare</button>
          </div>  
        </div>
      </div>   
              
      <div class="col-12 col-lg-3 col-sm-3 col-md-3 mt-2 mb-2">
        <div class="success__stry__item shadow h-100">
          <div class="thumb">
            <a href="#">
              <div class="">
                <img src="assets\images\default-image.jpg" class="object-fit-cover p-3 w-100" alt="img">
              </div>
            </a>
          </div>
          <div class="content mt-5 py-5 pb-3 text-center">                        
            <button type="button" class="text-primary fs-5" data-bs-toggle="modal" data-bs-target="#select_trac_modal">
              Select Tractor
            </button>                    
          </div>
          <div class="col-12  text-center"> 
            <button class="btn btn-success text-white col-12 px-5">Compare</button>
          </div>  
        </div>
      </div>   

    </div>
  </div>
  <!-- MODAL SELECT BRANDS -->
  <section>
    <div class="modal fade" id="select_trac_modal"  tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <!-- <div class="modal-header">         
          </div> -->
          <div class="modal-body">
            <form id="multi-step-form">
              <div class="step step-1">
                <!-- Step 1 form fields here -->
                <div class="row mt-3 mb-3">
                  <div class="col-12 col-lg-6 col-md-6 col-sm-6">
                    <div>
                      <h5 class="modal-title fs-2" id="exampleModalLabel"><i class="fa-solid fa-arrow-left"></i>Select Brand</h5>
                    </div>
                  </div>
                  <div class="col-12 col-lg-6 col-md-6 col sm 6 d-flex justify-content-end">
                    <!-- SEARCH BOX  -->
                    <div>
                      <div class="input-group">
                        <div class="form-outline" data-mdb-input-init>
                          <input type="search" id="form1" class="form-control" />
                          <label class="form-label" style="margin-top:-61px;" for="form1">Search</label>
                        </div>
                        <button type="button" style="margin-top:-11px;"class="btn btn-primary" data-mdb-ripple-init>
                          <i class="fas fa-search"></i>
                        </button>
                      </div>             
                    </div>
                  </div>
                </div>
                <div>
                  <p class="fs-5">Popular Brands</p> 
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio_brand" id="radio_brand1">
                    <label class="form-check-label text-dark" for="radio_brand1">
                      Mahindra
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio_brand" id="radio_brand2">
                    <label class="form-check-label text-dark" for="radio_brand2">
                      Swaraj
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio_brand" id="radio_brand3">
                    <label class="form-check-label text-dark" for="radio_brand3">
                      Massey Ferguson
                    </label>
                  </div>
                  <p class="fs-5 py-2">Other Brands</p> 
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio_brand" id="radio_brand4">
                    <label class="form-check-label text-dark" for="radio_brand4">
                      ACE
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio_brand" id="radio_brand5">
                    <label class="form-check-label text-dark" for="radio_brand5">
                      Autonxt
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio_brand" id="radio_brand6">
                    <label class="form-check-label text-dark" for="radio_brand6">
                      captain
                    </label>
                  </div>
                </div>
                <button type="button" class="btn btn-primary  next-step mt-4">Next</button>
              </div>

              <div class="step step-2">
                <!-- Step 2 form fields here -->
                <div class="row mt-3 mb-3">
                  <div class="col-12 col-lg-6 col-md-6 col-sm-6">
                    <div>
                      <h5 class="modal-title fs-2" id="exampleModalLabel"><i class="fa-solid fa-arrow-left"></i>Select Modal</h5>
                    </div>
                  </div>
                  <div class="col-12 col-lg-6 col-md-6 col sm 6 d-flex justify-content-end">
                    <!-- SEARCH BOX  -->
                    <div>
                      <div class="input-group">
                        <div class="form-outline" data-mdb-input-init>
                          <input type="search" id="form1" class="form-control" />
                          <label class="form-label" style="margin-top:-61px;" for="form1">Search</label>
                        </div>
                        <button type="button" style="margin-top:-11px;"class="btn btn-primary" data-mdb-ripple-init>
                          <i class="fas fa-search"></i>
                        </button>
                      </div>             
                    </div>
                  </div>
                </div>
                <div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio_model" id="radio_model1">
                    <label class="form-check-label text-dark" for="radio_model1">
                      575 DI XP Plus
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio_model" id="radio_model2">
                    <label class="form-check-label text-dark" for="radio_model2">
                      Oja 3140 4WD
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio_model" id="radio_model3">
                    <label class="form-check-label text-dark" for="radio_model3">
                      265 DI
                    </label>
                  </div> 
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio_model" id="radio_model4">
                    <label class="form-check-label text-dark" for="radio_model4">
                      Arjun Novo 605 Di-i2WD
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio_model" id="radio_model5">
                    <label class="form-check-label text-dark" for="radio_model5">
                      Arjun 555 DI
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio_model" id="radio_model6">
                    <label class="form-check-label text-dark" for="radio_model6">
                      475 DI
                    </label>
                  </div>
                </div>
                <button type="button" class="btn btn-primary prev-step mt-4">Previous</button>
                <button type="submit" class="btn btn-success mt-4">Submit</button>
              </div>

              <!-- <div class="step step-3"> -->
                <!-- Step 3 form fields here -->
                <!-- <h3>Step 3</h3>
                <div class="mb-3">
                  <label for="field3" class="form-label">Field 3:</label>
                  <input type="text" class="form-control" id="field3" name="field3">
                </div>
                <button type="button" class="btn btn-primary prev-step">Previous</button>
                <button type="submit" class="btn btn-success">Submit</button>
              </div> -->
            </form>
          </div>
        </div>
      </div>          
      <!-- </div>
      </div> -->
    </div>
  </section>


  <section>
    <div class="container">
      <div class=" ps-5 pe-5">
        <a href="#" class="text-decoration-none fs-5 text-primary pb-1">
          <img src="assets\images\5-year-warranty-Mobile-Banner_1077x168Pxl.avif" class="object-fit-cover p-3 w-100" alt="img">                       
        </a>      
      </div>
    </div>
  </section>

  <!-- Compare To Buy The Right Tractor  -->  

  <section class="">
    <div class="container bg-light">
      <h3 class="my-3 pt-3 fw-bold mb-4">Compare To Buy The Right Tractor</h3>
      <nav class="">
        <div class="nav nav-tabs w-100" id="nav-tab" role="tablist">
          <a class="nav-link active px-3 py-3 h5 fw-bold text-dark py-2" id="nav-under20-tab" type="button" data-bs-toggle="tab" data-bs-target="#nav-under20" role="tab" aria-controls="nav-under20" aria-selected="true">Under 20 HP</a>
          <a class="nav-link px-3 py-3 h5 fw-bold text-dark"id="nav-21_30-tab" type="button" data-bs-toggle="tab" data-bs-target="#nav-21_30" role="tab" aria-controls="nav-21_30" aria-selected="false">21-30 HP</a>
          <a class="nav-link px-3 py-3 h5 fw-bold text-dark"id="nav-31_40-tab" type="button" data-bs-toggle="tab" data-bs-target="#nav-31_40" role="tab" aria-controls="nav-31_40" aria-selected="false">31-40 HP</a>
          <a class="nav-link px-3 py-3 h5 fw-bold text-dark"id="nav-41_45-tab" type="button" data-bs-toggle="tab" data-bs-target="#nav-41_45" role="tab" aria-controls="nav-41_45" aria-selected="false">41-45 HP</a>
          <a class="nav-link px-3 py-3 h5 fw-bold text-dark"id="nav-46_50-tab" type="button" data-bs-toggle="tab" data-bs-target="#nav-46_50" role="tab" aria-controls="nav-46_50" aria-selected="false">46-50 HP</a>
          <a class="nav-link px-3 py-3 h5 fw-bold text-dark"id="nav-above_50-tab" type="button" data-bs-toggle="tab" data-bs-target="#nav-above_50" role="tab" aria-controls="nav-above_50-tab" aria-selected="false">Above 50 HP</a>
        </div>       
      </nav>


      <!-- UNDER 20 HP -->
      <div class="tab-content p-3 " id="nav-tabContent">
        <div class="tab-pane fade active show" id="nav-under20" role="tabpanel" aria-labelledby="nav-under20-tab">
          <div class="row">
          <!--Under 20 HP 1st Comparison card -->
            <div class="col-12 col-lg-4 col-sm-4 col-md-4 mt-3 mb-2">
              <div class="success__stry__item shadow h-100">
                <div class="thumb">
                  <a href="#">
                    <div class="">
                      <img src="assets\images\compare1.jpg" class="object-fit-cover p-3 w-100" alt="img">
                    </div>
                  </a>
                  <div class="row">
                    <div class="col-12 col-lg-6 col-md-6 col-sm-6 mt-n3">
                      <div class="content justify-content-center text-align-center ms-4 col-12 ">
                        <a href="#" class="text-decoration-none text-dark mt-n3">
                          <p>Mahindra</p>
                        </a>
                        <a href="#" class="text-decoration-none text-dark mt-n3 mb-n2">
                          <p>Yuvraj 215 NXT</p>
                        </a>
                        <p> ₹ 3.20-3.40 Lakhs</p>
                      </div>
                    </div>
                    <div class="col-12 col-lg-6 col-md-6 col-sm-6">
                      <div class="content justify-content-center text-align-center  col-12 ">
                        <a href="#" class="text-decoration-none text-dark">
                          <p>Swaraj</p>
                        </a>
                        <a href="#" class="text-decoration-none text-dark">
                          <p>717</p>
                        </a>
                        <p> ₹ 3.20-3.30 Lakhs</p>
                      </div>              
                    </div> 
                    <div class="">
                      <button type="button" class=" btn btn-compare border-success col-12">Compare</button>
                    </div>  
                  </div>
                </div>
              </div>
            </div>

            <!--Under 20 HP 2nd Comparison card-->
            <div class="col-12 col-lg-4 col-sm-4 col-md-4 mt-3 mb-2">
              <div class="success__stry__item shadow h-100">
                <div class="thumb">
                  <a href="#">
                    <div class="">
                      <img src="assets\images\compare1.jpg" class="object-fit-cover p-3 w-100" alt="img">
                    </div>
                  </a>
                  <div class="row">
                    <div class="col-12 col-lg-6 col-md-6 col-sm-6 mt-n3">
                      <div class="content text-center  col-12 ">
                        <a href="#" class="text-decoration-none text-dark mt-n3">
                          <p>VST</p>
                        </a>
                        <a href="#" class="text-decoration-none text-dark mt-n3 mb-n2">
                          <p>VT-180D HS/JAI-4W...</p>
                        </a>
                        <p> ₹ 2.98-3.35 Lakhs</p>
                      </div>
                    </div>
                    <div class="col-12 col-lg-6 col-md-6 col-sm-6">
                      <div class="content text-center  col-12 ">
                        <a href="#" class="text-decoration-none text-dark">
                          <p>Mahindra</p>
                        </a>
                        <a href="#" class="text-decoration-none text-dark">
                          <p>JIVO 225 DI</p>
                        </a>
                        <p> ₹ 4.30-4.50 Lakhs</p>
                      </div>              
                    </div>               
                    <div class="">
                      <button type="button" class=" btn btn-compare border-success col-12">Compare</button>
                    </div>  
                  </div>
                </div>
              </div>
            </div>

            <!--Under 20 HP 3rd  Comparison card-->
            <div class="col-12 col-lg-4 col-sm-4 col-md-4 mt-3 mb-2">
              <div class="success__stry__item shadow h-100">
                <div class="thumb">
                  <a href="#">
                    <div class="">
                      <img src="assets\images\compare1.jpg" class="object-fit-cover p-3 w-100" alt="img">
                    </div>
                  </a>
                  <div class="row">
                    <div class="col-12 col-lg-6 col-md-6 col-sm-6 mt-n3">
                      <div class="content text-center  col-12 ">
                        <a href="#" class="text-decoration-none text-dark mt-n3">
                          <p>massey Ferguson</p>
                        </a>
                        <a href="#" class="text-decoration-none text-dark mt-n3 mb-n2">
                          <p>5118</p>
                        </a>
                        <p> ₹ 3.47-3.60 Lakhs</p>
                      </div>
                    </div>
                    <div class="col-12 col-lg-6 col-md-6 col-sm-6">
                      <div class="content text-center  col-12 ">
                        <a href="#" class="text-decoration-none text-dark">
                          <p>Captain</p>
                        </a>
                        <a href="#" class="text-decoration-none text-dark">
                          <p>200 DI</p>
                        </a>
                        <p> ₹ 3.29-3.39 Lakhs</p>
                      </div>              
                    </div>               
                    <div class="">
                      <button type="button" class=" btn btn-compare border-success col-12">Compare</button>
                    </div>  
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>


        <!--21-30 HP Comparison  -->
        <div class="tab-pane fade " id="nav-21_30" role="tabpanel" aria-labelledby="nav-21_30-tab">
          <div class="row">
            <!--21-30 HP 1st Comparison card -->
            <div class="col-12 col-lg-4 col-sm-4 col-md-4 mt-3 mb-2">
              <div class="success__stry__item shadow h-100">
                <div class="thumb">
                  <a href="#">
                    <div class="">
                      <img src="assets\images\compare1.jpg" class="object-fit-cover p-3 w-100" alt="img">
                    </div>
                  </a>
                  <div class="row">
                    <div class="col-12 col-lg-6 col-md-6 col-sm-6 mt-n3">
                      <div class="content justify-content-center text-align-center ms-4 col-12 ">
                        <a href="#" class="text-decoration-none text-dark mt-n3">
                          <p>Eicher</p>
                        </a>
                        <a href="#" class="text-decoration-none text-dark mt-n3 mb-n2">
                          <p>241</p>
                        </a>
                        <p> ₹ 3.83-4.15 Lakhs</p>
                      </div>
                    </div>
                    <div class="col-12 col-lg-6 col-md-6 col-sm-6">
                      <div class="content justify-content-center text-align-center  col-12 ">
                        <a href="#" class="text-decoration-none text-dark">
                          <p>Eicher</p>
                        </a>
                        <a href="#" class="text-decoration-none text-dark">
                          <p>242</p>
                        </a>
                        <p> ₹ 4.05-4.40 Lakhs</p>
                      </div>              
                    </div> 
                    <div class="">
                      <button type="button" class=" btn btn-compare border-success col-12">Compare</button>
                    </div>  
                  </div>
                </div>
              </div>
            </div>

            <!--21-30 HP 2nd Comparison card-->
            <div class="col-12 col-lg-4 col-sm-4 col-md-4 mt-3 mb-2">
              <div class="success__stry__item shadow h-100">
                <div class="thumb">
                  <a href="#">
                    <div class="">
                      <img src="assets\images\compare1.jpg" class="object-fit-cover p-3 w-100" alt="img">
                    </div>
                  </a>
                  <div class="row">
                    <div class="col-12 col-lg-6 col-md-6 col-sm-6 mt-n3">
                      <div class="content text-center  col-12 ">
                        <a href="#" class="text-decoration-none text-dark mt-n3">
                          <p>Mahindra</p>
                        </a>
                        <a href="#" class="text-decoration-none text-dark mt-n3 mb-n2">
                          <p>265 DI</p>
                        </a>
                        <p> ₹ 4.95-5.10 Lakhs</p>
                      </div>
                    </div>
                    <div class="col-12 col-lg-6 col-md-6 col-sm-6">
                      <div class="content text-center  col-12 ">
                        <a href="#" class="text-decoration-none text-dark">
                          <p>Swaraj</p>
                        </a>
                        <a href="#" class="text-decoration-none text-dark">
                          <p>825 XM</p>
                        </a>
                        <p> ₹ 3.90-5.20 Lakhs</p>
                      </div>              
                    </div>               
                    <div class="">
                      <button type="button" class=" btn btn-compare border-success col-12">Compare</button>
                    </div>  
                  </div>
                </div>
              </div>
            </div>

            <!--21-30 HP 3rd  Comparison card-->
            <div class="col-12 col-lg-4 col-sm-4 col-md-4 mt-3 mb-2">
              <div class="success__stry__item shadow h-100">
                <div class="thumb">
                  <a href="#">
                    <div class="">
                      <img src="assets\images\compare1.jpg" class="object-fit-cover p-3 w-100" alt="img">
                    </div>
                  </a>
                  <div class="row">
                    <div class="col-12 col-lg-6 col-md-6 col-sm-6 mt-n3">
                      <div class="content text-center  col-12 ">
                        <a href="#" class="text-decoration-none text-dark mt-n3">
                          <p>Swaraj</p>
                        </a>
                        <a href="#" class="text-decoration-none text-dark mt-n3 mb-n2">
                          <p>724 XM ORCHARD</p>
                        </a>
                        <p> ₹ 4.70-5.05 Lakhs</p>
                      </div>
                    </div>
                    <div class="col-12 col-lg-6 col-md-6 col-sm-6">
                      <div class="content text-center  col-12 ">
                        <a href="#" class="text-decoration-none text-dark">
                          <p>Kubota</p>
                        </a>
                        <a href="#" class="text-decoration-none text-dark">
                          <p>NeoStar B2741S 4..</p>
                        </a>
                        <p> ₹ 6.27-6.29 Lakhs</p>
                      </div>              
                    </div>               
                    <div class="">
                      <button type="button" class=" btn btn-compare border-success col-12">Compare</button>
                    </div>  
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>


        <!--31-40 HP Comparison  -->
        <div class="tab-pane fade " id="nav-31_40" role="tabpanel" aria-labelledby="nav-31_40-tab">
          <div class="row">
            <!-- 31-40 HP 1st Comparison card -->
            <div class="col-12 col-lg-4 col-sm-4 col-md-4 mt-3 mb-2">
              <div class="success__stry__item shadow h-100">
                <div class="thumb">
                  <a href="#">
                    <div class="">
                      <img src="assets\images\compare1.jpg" class="object-fit-cover p-3 w-100" alt="img">
                    </div>
                  </a>
                  <div class="row">
                    <div class="col-12 col-lg-6 col-md-6 col-sm-6 mt-n3">
                      <div class="content justify-content-center text-align-center ms-4 col-12 ">
                        <a href="#" class="text-decoration-none text-dark mt-n3">
                          <p>Swaraj</p>
                        </a>
                        <a href="#" class="text-decoration-none text-dark mt-n3 mb-n2">
                          <p>735 FE</p>
                        </a>
                        <p> ₹ 5.85-620 Lakhs</p>
                      </div>
                    </div>
                    <div class="col-12 col-lg-6 col-md-6 col-sm-6">
                      <div class="content justify-content-center text-align-center  col-12 ">
                        <a href="#" class="text-decoration-none text-dark">
                          <p>Massey Ferguson</p>
                        </a>
                        <a href="#" class="text-decoration-none text-dark">
                          <p>475 DI</p>
                        </a>
                        <p> ₹ 8.30-8.40 Lakhs</p>
                      </div>              
                    </div> 
                    <div class="">
                      <button type="button" class=" btn btn-compare border-success col-12">Compare</button>
                    </div>  
                  </div>
                </div>
              </div>
            </div>

            <!-- 31-40 HP 2nd Comparison card-->
            <div class="col-12 col-lg-4 col-sm-4 col-md-4 mt-3 mb-2">
              <div class="success__stry__item shadow h-100">
                <div class="thumb">
                  <a href="#">
                    <div class="">
                      <img src="assets\images\compare1.jpg" class="object-fit-cover p-3 w-100" alt="img">
                    </div>
                  </a>
                  <div class="row">
                    <div class="col-12 col-lg-6 col-md-6 col-sm-6 mt-n3">
                      <div class="content text-center  col-12 ">
                        <a href="#" class="text-decoration-none text-dark mt-n3">
                          <p>Massey Ferguson</p>
                        </a>
                        <a href="#" class="text-decoration-none text-dark mt-n3 mb-n2">
                          <p>475 DI</p>
                        </a>
                        <p> ₹ 6.45-6.75 Lakhs</p>
                      </div>
                    </div>
                    <div class="col-12 col-lg-6 col-md-6 col-sm-6">
                      <div class="content text-center  col-12 ">
                        <a href="#" class="text-decoration-none text-dark">
                          <p>Mahindra</p>
                        </a>
                        <a href="#" class="text-decoration-none text-dark">
                          <p>475 DI</p>
                        </a>
                        <p> ₹ 8.30-8.40 Lakhs</p>
                      </div>              
                    </div>               
                    <div class="">
                      <button type="button" class=" btn btn-compare border-success col-12">Compare</button>
                    </div>  
                  </div>
                </div>
              </div>
            </div>

            <!-- 31-40 HP 3rd  Comparison card-->
            <div class="col-12 col-lg-4 col-sm-4 col-md-4 mt-3 mb-2">
              <div class="success__stry__item shadow h-100">
                <div class="thumb">
                  <a href="#">
                    <div class="">
                      <img src="assets\images\compare1.jpg" class="object-fit-cover p-3 w-100" alt="img">
                    </div>
                  </a>
                  <div class="row">
                    <div class="col-12 col-lg-6 col-md-6 col-sm-6 mt-n3">
                      <div class="content text-center  col-12 ">
                        <a href="#" class="text-decoration-none text-dark mt-n3">
                          <p>Swaraj</p>
                        </a>
                        <a href="#" class="text-decoration-none text-dark mt-n3 mb-n2">
                          <p>475 DI</p>
                        </a>
                        <p> ₹ 6.45-6.75 Lakhs</p>
                      </div>
                    </div>
                    <div class="col-12 col-lg-6 col-md-6 col-sm-6">
                      <div class="content text-center  col-12 ">
                        <a href="#" class="text-decoration-none text-dark">
                          <p>Mahindra</p>
                        </a>
                        <a href="#" class="text-decoration-none text-dark">
                          <p>475 DI</p>
                        </a>
                        <p> ₹ 8.30-8.40 Lakhs</p>
                      </div>              
                    </div>               
                    <div class="">
                      <button type="button" class=" btn btn-compare border-success col-12">Compare</button>
                    </div>  
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>



        <!-- 41-45 HP Comparison -->
        <div class="tab-pane fade " id="nav-41_45" role="tabpanel" aria-labelledby="nav-41_45-tab">
          <div class="row">
            <!--41-45 HP 1st Comparison card -->
            <div class="col-12 col-lg-4 col-sm-4 col-md-4 mt-3 mb-2">
              <div class="success__stry__item shadow h-100">
                <div class="thumb">
                  <a href="#">
                    <div class="">
                      <img src="assets\images\compare1.jpg" class="object-fit-cover p-3 w-100" alt="img">
                    </div>
                  </a>
                  <div class="row">
                    <div class="col-12 col-lg-6 col-md-6 col-sm-6 mt-n3">
                      <div class="content justify-content-center text-align-center ms-4 col-12 ">
                        <a href="#" class="text-decoration-none text-dark mt-n3">
                          <p>Mahindra</p>
                        </a>
                        <a href="#" class="text-decoration-none text-dark mt-n3 mb-n2">
                          <p>475 DI</p>
                        </a>
                        <p> ₹ 6.45-6.75 Lakhs</p>
                      </div>
                    </div>
                    <div class="col-12 col-lg-6 col-md-6 col-sm-6">
                      <div class="content justify-content-center text-align-center  col-12 ">
                        <a href="#" class="text-decoration-none text-dark">
                          <p>Kubota</p>
                        </a>
                        <a href="#" class="text-decoration-none text-dark">
                          <p>475 DI</p>
                        </a>
                        <p> ₹ 8.30-8.40 Lakhs</p>
                      </div>              
                    </div> 
                    <div class="">
                      <button type="button" class=" btn btn-compare border-success col-12">Compare</button>
                    </div>  
                  </div>
                </div>
              </div>
            </div>

            <!--41-45 HP 2nd Comparison card-->
            <div class="col-12 col-lg-4 col-sm-4 col-md-4 mt-3 mb-2">
              <div class="success__stry__item shadow h-100">
                <div class="thumb">
                  <a href="#">
                    <div class="">
                      <img src="assets\images\compare1.jpg" class="object-fit-cover p-3 w-100" alt="img">
                    </div>
                  </a>
                  <div class="row">
                    <div class="col-12 col-lg-6 col-md-6 col-sm-6 mt-n3">
                      <div class="content text-center  col-12 ">
                        <a href="#" class="text-decoration-none text-dark mt-n3">
                          <p>Mahindra</p>
                        </a>
                        <a href="#" class="text-decoration-none text-dark mt-n3 mb-n2">
                          <p>475 DI</p>
                        </a>
                        <p> ₹ 6.45-6.75 Lakhs</p>
                      </div>
                    </div>
                    <div class="col-12 col-lg-6 col-md-6 col-sm-6">
                      <div class="content text-center  col-12 ">
                        <a href="#" class="text-decoration-none text-dark">
                          <p>Mahindra</p>
                        </a>
                        <a href="#" class="text-decoration-none text-dark">
                          <p>475 DI</p>
                        </a>
                        <p> ₹ 8.30-8.40 Lakhs</p>
                      </div>              
                    </div>               
                    <div class="">
                      <button type="button" class=" btn btn-compare border-success col-12">Compare</button>
                    </div>  
                  </div>
                </div>
              </div>
            </div>

            <!--41-45 HP 3rd  Comparison card-->
            <div class="col-12 col-lg-4 col-sm-4 col-md-4 mt-3 mb-2">
              <div class="success__stry__item shadow h-100">
                <div class="thumb">
                  <a href="#">
                    <div class="">
                      <img src="assets\images\compare1.jpg" class="object-fit-cover p-3 w-100" alt="img">
                    </div>
                  </a>
                  <div class="row">
                    <div class="col-12 col-lg-6 col-md-6 col-sm-6 mt-n3">
                      <div class="content text-center  col-12 ">
                        <a href="#" class="text-decoration-none text-dark mt-n3">
                          <p>John Deere</p>
                        </a>
                        <a href="#" class="text-decoration-none text-dark mt-n3 mb-n2">
                          <p>475 DI</p>
                        </a>
                        <p> ₹ 6.45-6.75 Lakhs</p>
                      </div>
                    </div>
                    <div class="col-12 col-lg-6 col-md-6 col-sm-6">
                      <div class="content text-center  col-12 ">
                        <a href="#" class="text-decoration-none text-dark">
                          <p>Mahindra</p>
                        </a>
                        <a href="#" class="text-decoration-none text-dark">
                          <p>475 DI</p>
                        </a>
                        <p> ₹ 8.30-8.40 Lakhs</p>
                      </div>              
                    </div>               
                    <div class="">
                      <button type="button" class=" btn btn-compare border-success col-12">Compare</button>
                    </div>  
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>


        <!--46-50 HP Comparison -->
        <div class="tab-pane fade " id="nav-46_50" role="tabpanel" aria-labelledby="nav-46_50-tab">
          <div class="row">
            <!--46-50 HP 1st Comparison card -->
            <div class="col-12 col-lg-4 col-sm-4 col-md-4 mt-3 mb-2">
              <div class="success__stry__item shadow h-100">
                <div class="thumb">
                  <a href="#">
                    <div class="">
                      <img src="assets\images\compare1.jpg" class="object-fit-cover p-3 w-100" alt="img">
                    </div>
                  </a>
                  <div class="row">
                    <div class="col-12 col-lg-6 col-md-6 col-sm-6 mt-n3">
                      <div class="content justify-content-center text-align-center ms-4 col-12 ">
                        <a href="#" class="text-decoration-none text-dark mt-n3">
                          <p>Mahindra</p>
                        </a>
                        <a href="#" class="text-decoration-none text-dark mt-n3 mb-n2">
                          <p>475 DI</p>
                        </a>
                        <p> ₹ 6.45-6.75 Lakhs</p>
                      </div>
                    </div>
                    <div class="col-12 col-lg-6 col-md-6 col-sm-6">
                      <div class="content justify-content-center text-align-center  col-12 ">
                        <a href="#" class="text-decoration-none text-dark">
                          <p>Swaraj</p>
                        </a>
                        <a href="#" class="text-decoration-none text-dark">
                          <p>475 DI</p>
                        </a>
                        <p> ₹ 8.30-8.40 Lakhs</p>
                      </div>              
                    </div> 
                    <div class="">
                      <button type="button" class=" btn btn-compare border-success col-12">Compare</button>
                    </div>  
                  </div>
                </div>
              </div>
            </div>

            <!--46-50 HP 2nd Comparison card-->
            <div class="col-12 col-lg-4 col-sm-4 col-md-4 mt-3 mb-2">
              <div class="success__stry__item shadow h-100">
                <div class="thumb">
                  <a href="#">
                    <div class="">
                      <img src="assets\images\compare1.jpg" class="object-fit-cover p-3 w-100" alt="img">
                    </div>
                  </a>
                  <div class="row">
                    <div class="col-12 col-lg-6 col-md-6 col-sm-6 mt-n3">
                      <div class="content text-center  col-12 ">
                        <a href="#" class="text-decoration-none text-dark mt-n3">
                          <p>Mahindra</p>
                        </a>
                        <a href="#" class="text-decoration-none text-dark mt-n3 mb-n2">
                          <p>VT-180D HS/JAI-4W...</p>
                        </a>
                        <p> ₹ 6.45-6.75 Lakhs</p>
                      </div>
                    </div>
                    <div class="col-12 col-lg-6 col-md-6 col-sm-6">
                      <div class="content text-center  col-12 ">
                        <a href="#" class="text-decoration-none text-dark">
                          <p>Mahindra</p>
                        </a>
                        <a href="#" class="text-decoration-none text-dark">
                          <p>475 DI</p>
                        </a>
                        <p> ₹ 8.30-8.40 Lakhs</p>
                      </div>              
                    </div>               
                    <div class="">
                      <button type="button" class=" btn btn-compare border-success col-12">Compare</button>
                    </div>  
                  </div>
                </div>
              </div>
            </div>

            <!--46-50 HP 3rd  Comparison card-->
            <div class="col-12 col-lg-4 col-sm-4 col-md-4 mt-3 mb-2">
              <div class="success__stry__item shadow h-100">
                <div class="thumb">
                  <a href="#">
                    <div class="">
                      <img src="assets\images\compare1.jpg" class="object-fit-cover p-3 w-100" alt="img">
                    </div>
                  </a>
                  <div class="row">
                    <div class="col-12 col-lg-6 col-md-6 col-sm-6 mt-n3">
                      <div class="content text-center  col-12 ">
                        <a href="#" class="text-decoration-none text-dark mt-n3">
                          <p>John Deere</p>
                        </a>
                        <a href="#" class="text-decoration-none text-dark mt-n3 mb-n2">
                          <p>475 DI</p>
                        </a>
                        <p> ₹ 6.45-6.75 Lakhs</p>
                      </div>
                    </div>
                    <div class="col-12 col-lg-6 col-md-6 col-sm-6">
                      <div class="content text-center  col-12 ">
                        <a href="#" class="text-decoration-none text-dark">
                          <p>Swaraj</p>
                        </a>
                        <a href="#" class="text-decoration-none text-dark">
                          <p>475 DI</p>
                        </a>
                        <p> ₹ 8.30-8.40 Lakhs</p>
                      </div>              
                    </div>               
                    <div class="">
                      <button type="button" class=" btn btn-compare border-success col-12">Compare</button>
                    </div>  
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Above 50 HP Comparison -->
        <div class="tab-pane fade " id="nav-above_50" role="tabpanel" aria-labelledby="nav-above_50-tab">
          <div class="row">
            <!--Above 50 HP 1st Comparision card -->
            <div class="col-12 col-lg-4 col-sm-4 col-md-4 mt-3 mb-2">
              <div class="success__stry__item shadow h-100">
                <div class="thumb">
                  <a href="#">
                    <div class="">
                      <img src="assets\images\compare1.jpg" class="object-fit-cover p-3 w-100" alt="img">
                    </div>
                  </a>
                  <div class="row">
                    <div class="col-12 col-lg-6 col-md-6 col-sm-6 mt-n3">
                      <div class="content justify-content-center text-align-center ms-4 col-12 ">
                        <a href="#" class="text-decoration-none text-dark mt-n3">
                          <p>Swaraj</p>
                        </a>
                        <a href="#" class="text-decoration-none text-dark mt-n3 mb-n2">
                          <p>475 DI</p>
                        </a>
                        <p> ₹ 6.45-6.75 Lakhs</p>
                      </div>
                    </div>
                    <div class="col-12 col-lg-6 col-md-6 col-sm-6">
                      <div class="content justify-content-center text-align-center  col-12 ">
                        <a href="#" class="text-decoration-none text-dark">
                          <p>Powertrac</p>
                        </a>
                        <a href="#" class="text-decoration-none text-dark">
                          <p>475 DI</p>
                        </a>
                        <p> ₹ 8.30-8.40 Lakhs</p>
                      </div>              
                    </div> 
                    <div class="">
                      <button type="button" class=" btn btn-compare border-success col-12">Compare</button>
                    </div>  
                  </div>
                </div>
              </div>
            </div>

            <!--Above 50 HP 2nd Comparision card-->
            <div class="col-12 col-lg-4 col-sm-4 col-md-4 mt-3 mb-2">
              <div class="success__stry__item shadow h-100">
                <div class="thumb">
                  <a href="#">
                    <div class="">
                      <img src="assets\images\compare1.jpg" class="object-fit-cover p-3 w-100" alt="img">
                    </div>
                  </a>
                  <div class="row">
                    <div class="col-12 col-lg-6 col-md-6 col-sm-6 mt-n3">
                      <div class="content text-center  col-12 ">
                        <a href="#" class="text-decoration-none text-dark mt-n3">
                          <p>Massey Ferguson</p>
                        </a>
                        <a href="#" class="text-decoration-none text-dark mt-n3 mb-n2">
                          <p>475 DI</p>
                        </a>
                        <p> ₹ 6.45-6.75 Lakhs</p>
                      </div>
                    </div>
                    <div class="col-12 col-lg-6 col-md-6 col-sm-6">
                      <div class="content text-center  col-12 ">
                        <a href="#" class="text-decoration-none text-dark">
                          <p>Swaraj</p>
                        </a>
                        <a href="#" class="text-decoration-none text-dark">
                          <p>475 DI</p>
                        </a>
                        <p> ₹ 8.30-8.40 Lakhs</p>
                      </div>              
                    </div>               
                    <div class="">
                      <button type="button" class=" btn btn-compare border-success col-12">Compare</button>
                    </div>  
                  </div>
                </div>
              </div>
            </div>

            <!--Above 50 HP 3rd  Comparision card-->
            <div class="col-12 col-lg-4 col-sm-4 col-md-4 mt-3 mb-2">
              <div class="success__stry__item shadow h-100">
                <div class="thumb">
                  <a href="#">
                    <div class="">
                      <img src="assets\images\compare1.jpg" class="object-fit-cover p-3 w-100" alt="img">
                    </div>
                  </a>
                  <div class="row">
                    <div class="col-12 col-lg-6 col-md-6 col-sm-6 mt-n3">
                      <div class="content text-center  col-12 ">
                        <a href="#" class="text-decoration-none text-dark mt-n3">
                          <p>Digitrac</p>
                        </a>
                        <a href="#" class="text-decoration-none text-dark mt-n3 mb-n2">
                          <p>475 DI</p>
                        </a>
                        <p> ₹ 6.45-6.75 Lakhs</p>
                      </div>
                    </div>
                    <div class="col-12 col-lg-6 col-md-6 col-sm-6">
                      <div class="content text-center  col-12 ">
                        <a href="#" class="text-decoration-none text-dark">
                          <p>Sonalika</p>
                        </a>
                        <a href="#" class="text-decoration-none text-dark">
                          <p>475 DI</p>
                        </a>
                        <p> ₹ 8.30-8.40 Lakhs</p>
                      </div>              
                    </div>               
                    <div class="">
                      <button type="button" class=" btn btn-compare border-success col-12">Compare</button>
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



  <section>
    <div class="container">       
      <div class="row py-1 bg-lighta">
        <h1 class="mt-2 mb-3 fs-5 mt-4">Watch Tractors Comparison Videos</h1> 
          <!-- 1st comparison card -->
          <div class="col-12 col-lg-3 col-sm-3 col-md-3 mt-2 mb-2">
            <div class="success__stry__item shadow h-100">
              <div class="thumb">
                <a href="#">
                  <div class="">
                    <img src="assets\images\mqdefault 1.jpg" class="object-fit-cover p-3 w-100" alt="img">
                  </div>
                </a>
              </div>
              <div class="content mb-3 pb-3 ms-3">
                <a href="#" class="text-decoration-none text-dark ">
                  <h4 class="fs-6 mt-1">Compare Tractors 5060e and 6010...</h3>
                </a>
                <a href="#" class="text-decoration-none fs-6 text-dark">
                  <span class="">-23 jun 2020 </span>                  
                </a>
              </div>
            </div>
          </div> 
          <!-- 2nd comparison card -->
          <div class="col-12 col-lg-3 col-sm-3 col-md-3 mt-2 mb-2">
            <div class="success__stry__item shadow h-100">
              <div class="thumb">
                <a href="#">
                  <div class="">
                    <img src="assets\images\mqdefault 2.jpg" class="object-fit-cover p-3 w-100" alt="img">
                  </div>
                </a>
              </div>
              <div class="content mb-3 pb-3 ms-3">
                <a href="#" class="text-decoration-none text-dark ">
                  <h4 class="fs-6 mt-1">Massey Ferguson 7250 Power vs M...</h3>
                </a>
                <a href="#" class="text-decoration-none fs-6 text-dark">
                  <span class="">-09 jul 2020 </span>                  
                </a>
              </div>
            </div>
          </div> 
          <!-- 3rd comparison card -->
          <div class="col-12 col-lg-3 col-sm-3 col-md-3 mt-2 mb-2">
            <div class="success__stry__item shadow h-100">
              <div class="thumb">
                <a href="#">
                  <div class="">
                    <img src="assets\images\mqdefault 3.jpg" class="object-fit-cover p-3 w-100" alt="img">
                  </div>
                </a>
              </div>
              <div class="content mb-3 pb-3 ms-3">
                <a href="#" class="text-decoration-none text-dark ">
                  <h4 class="fs-6 mt-1">हरियाणा में हैरो मुकाबला : इस ट्रैक्टर ने...</h3>
                </a>
                <a href="#" class="text-decoration-none fs-6 text-dark">
                  <span class="">-28 Nov 2020 </span>                  
                </a>
              </div>
            </div>
          </div> 
          <!-- 4th comparison card -->
          <div class="col-12 col-lg-3 col-sm-3 col-md-3 mt-2 mb-2">
            <div class="success__stry__item shadow h-100">
              <div class="thumb">
                <a href="#">
                  <div class="">
                    <img src="assets\images\mqdefault 4.jpg" class="object-fit-cover p-3 w-100" alt="img">
                  </div>
                </a>
              </div>
              <div class="content mb-3 pb-3 ms-3">
                <a href="#" class="text-decoration-none text-dark ">
                  <h4 class="fs-6 mt-1">Agriculture News , सरकारी योजनाएं , T...</h3>
                </a>
                <a href="#" class="text-decoration-none fs-6 text-dark">
                  <span class="">-23 jun 2020 </span>                  
                </a>
              </div>
            </div>
          </div> 

      </div>
    </div>    
  </section>


  <section>
    <div class="container">
      <div class=" fw-bold fs-5 mt-3 ">
        <p class="mb-n4">Compare Tractors</p>
      </div>
      <p class="">Tractorjunction.com is a one-stop authentic online destination where you can compare a variety of Tractors and Farm Implements. All top tractor brands are available here including Mahindra, John Deere, Escorts, Sonalika, Eicher, TAFE, New Holland and many more. The information displayed on Tractor Junction is believed to be accurate, unbiased and correct. Choose at least two tractors as per your choice to compare based on their specifications, features, mileage, Price, overall perf<span id="dots">...</span><span id="more">ormance and warranty. All Indian Farmers can easily compare tractors of distinct varieties just in a few clicks. TractorJunction brings a welfare opportunity to compare tractor price in India. This allows farmers from every region to compare tractors in India.<br><br>

      TractorJunction provides the most comprehensive tractor comparison tool in India on which you can select at least two or more tractors of your choice for comparison. This online platform provides all the useful guidelines for tractor comparison India. TractorJunction always works to empower Indian farmers with a new tractor compare section.<br><br>

      Compare tractor prices in India, specifications, warranty and many more at one place and then select your dream tractor. For Further more inquiries stay tuned with TractorJunction.</span></p>
      <button class="text-primary" onclick="myFunction()" id="myBtn">Read more</button>
      <script>
        function myFunction() {
          var dots = document.getElementById("dots");
          var moreText = document.getElementById("more");
          var btnText = document.getElementById("myBtn");

          if (dots.style.display === "none") {
            dots.style.display = "inline";
            btnText.innerHTML = "Read more"; 
            moreText.style.display = "none";
          } else {
            dots.style.display = "none";
            btnText.innerHTML = "Read less"; 
            moreText.style.display = "inline";
          }
        }
      </script>
    </div>
  </section>

   <?php
   include 'includes/footer.php';
   include 'includes/footertag.php';
   ?>

  <script>
    // SCRIPT FOR THE SEARCH BOX
    $(".data_search").on("keyup", function() {
      var value = $(this).val().toLowerCase();
      $("#data-table tr").filter(function() {
        $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
      });
    }); 

    // SCRIPT FOR THE SELECTION OF BRANDS & MODAL
    var currentStep = 1;
    var updateProgressBar;

    function displayStep(stepNumber) {
      if (stepNumber >= 1 && stepNumber <= 3) {
        $(".step-" + currentStep).hide();
        $(".step-" + stepNumber).show();
        currentStep = stepNumber;
        updateProgressBar();
      }
    }

    $(document).ready(function() {
      $('#multi-step-form').find('.step').slice(1).hide();
    
      $(".next-step").click(function() {
        if (currentStep < 3) {
          $(".step-" + currentStep).addClass("animate__animated animate__fadeOutLeft");
          currentStep++;
          setTimeout(function() {
            $(".step").removeClass("animate__animated animate__fadeOutLeft").hide();
            $(".step-" + currentStep).show().addClass("animate__animated animate__fadeInRight");
            updateProgressBar();
          }, 500);
        }
      });

      $(".prev-step").click(function() {
        if (currentStep > 1) {
          $(".step-" + currentStep).addClass("animate__animated animate__fadeOutRight");
          currentStep--;
          setTimeout(function() {
            $(".step").removeClass("animate__animated animate__fadeOutRight").hide();
            $(".step-" + currentStep).show().addClass("animate__animated animate__fadeInLeft");
            updateProgressBar();
          }, 500);
        }
      });

      updateProgressBar = function() {
        var progressPercentage = ((currentStep - 1) / 2) * 100;
        $(".progress-bar").css("width", progressPercentage + "%");
      }
    });
  </script>
</body>
</html>