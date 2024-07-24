<!DOCTYPE html>
<html lang="en">
<?php
  include 'includes/headertag.php';
    include 'includes/footertag.php';
     
     ?> 
    <script> var baseUrl = "<?php echo $baseUrl; ?>";</script>
    <script src="<?php $baseUrl; ?>model/compare_trac.js"></script>
    <style>
      .table-data {
        white-space: nowrap;
      } 
      .jumbo {
        padding-top: 5px;
        /* min-height: 20vh; */
      }

      /* .shrink .navbarrr {
        color: #fafafa;
        background: white;
        display:none;
        background: linear-gradient(35deg, white 1%, white 90%);
        height:140px;
      } */
    </style>
  </head>
  <!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-6Z38E658LD"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-6Z38E658LD');
</script>
 
  <body>
 
    <!-- Fixed navbar -->
    <section class="">
      <div class="">
        <nav class="navbarrr navbar-expand-lg navbar-dark bg-white d-none mb-1" id="myNavbar">
          <div class="row mt-1 mb-0"> 
            <div class="row mb-2">
              <div class="col-12 col-lg-3 col-md-3 col-sm-3 pe-0">
              </div>
              <div class="col-12 col-lg-8 col-md-8 col-sm-8 pe-0"> 
                <div class="row mb-3">

                  <div class="col-12 col-lg-3 col-md-3 col-sm-3 mb-0">
                    <div class="row">
                      <div class="col-12 col-lg-6 col-md-6 col-sm-6 p-0">
                        <div class="success__stry__item h-75">
                          <div class="thumb mt-2">
                            <div class="">
                              <img src="" id="img_1" class="object-fit-cover mt-2 pe-0" width="120px;" height="90px;" alt="img">
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-12 col-lg-6 col-md-6 col-sm-6 mt-2 text-dark" >
                        <div class="row mt-1" style="font-size:14px;">
                          <p class="mb-1 text-danger fw-bold" id="brand_nav"></p>
                          <p class="mb-1 fw-bold text-hover-green"  id="model_nav"></p> 
                          <p class="mb-1 fw-bold text-hover-green" id=""> <span  id="hp_nav-1"></span> HP</p>   
                          <!-- <p class="mb-0">₹ 6.55 Lac - 6.95 Lac*</p> -->
                          <!-- <a href="#" class="text-decoration-none"><p class="fw-bold text-start text-success mt-0" data-bs-toggle="modal" data-bs-target="#staticBackdrop3">Check Price</p></a> -->
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- 2nd card -->
                  <div class="col-12 col-lg-3 col-md-3 col-sm-3 mb-0">
                    <div class="row">
                      <div class="col-12 col-lg-6 col-md-6 col-sm-6 p-0">
                        <div class="success__stry__item h-75">
                          <div class="thumb mt-2">
                            <div class="">
                              <img src="" id="img_2" class="object-fit-cover mt-2 pe-0" width="120px;" height="90px;" alt="img">
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-12 col-lg-6 col-md-6 col-sm-6 mt-2 text-dark">
                        <div class="row mt-1" style="font-size:14px;">
                          <p class="mb-1 text-danger fw-bold"  id="brand_nav-2"></p>
                          <p class="mb-1 fw-bold text-hover-green"id="model_nav-2"></p>  
                          <p class="mb-1 fw-bold text-hover-green" id=""> <span  id="hp_nav-2"></span> HP</p>  
                          <!-- <p class="mb-0">₹ 6.55 Lac - 6.95 Lac*</p> -->
                          <!-- <a href="#" class="text-decoration-none"><p class="fw-bold text-start text-success mt-0" data-bs-toggle="modal" data-bs-target="#staticBackdrop3">Check Price</p></a> -->
                        </div>
                      </div>
                    </div>
                  </div>

                  <!-- 3rd card -->
                  <div class="col-12 col-lg-3 col-md-3 col-sm-3 mb-0">
                    <div class="row">
                      <div class="col-12 col-lg-6 col-md-6 col-sm-6 p-0">
                        <div class="success__stry__item h-75">
                          <div class="thumb mt-2">
                            <div class="">
                              <img src="" class="object-fit-cover mt-2 pe-0" id="img_3" width="120px;" height="90px;" alt="img">
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-12 col-lg-6 col-md-6 col-sm-6 mt-2 text-dark">
                        <div class="row mt-1" style="font-size:14px;">
                          <p class="mb-1 text-danger fw-bold"id="brand_nav-3"></p>
                          <p class="mb-1 fw-bold text-hover-green" id="model_nav-3"></p>  
                          <p class="mb-1 fw-bold text-hover-green" id=""> <span  id="hp_nav-3"></span> HP</p>  
                          <!-- <p class="mb-0">₹ 6.55 Lac - 6.95 Lac*</p> -->
                          <!-- <a href="#" class="text-decoration-none"><p class="fw-bold text-start text-success mt-0" data-bs-toggle="modal" data-bs-target="#staticBackdrop3">Check Price</p></a> -->
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="col-12 col-lg-3 col-md-3 col-sm-3 mb-0">
                    <div class="row">
                      <div class="col-12 col-lg-6 col-md-6 col-sm-6 p-0">
                        <div class="success__stry__item h-75">
                          <div class="thumb mt-2">
                            <div class="">
                              <img src="" id="img_4" class="object-fit-cover mt-2 pe-0" width="120px;" height="90px;" alt="img">
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-12 col-lg-6 col-md-6 col-sm-6 mt-2 text-dark">
                        <div class="row mt-1" style="font-size:14px;">
                          <p class="mb-1 text-danger fw-bold" id="brand_nav-4"></p>
                          <p class="mb-1 fw-bold text-hover-green" id="model_nav-4"></p>  
                          <p class="mb-1 fw-bold text-hover-green"> <span  id="hp_nav-4"></span> HP</p>  
                          <!-- <p class="mb-0">₹ 6.55 Lac - 6.95 Lac*</p> -->
                          <!-- <a href="#" class="text-decoration-none"><p class="fw-bold text-start text-success mt-0" data-bs-toggle="modal" data-bs-target="#staticBackdrop3">Check Price</p></a> -->
                        </div>
                      </div>
                    </div>
                  </div>

                  
                </div>                      
              </div>
              <div class="col-12 col-lg-1 col-md-1 col-sm-1">
              </div>
            </div>
          </div>                
        </nav>
      </div>
    </section>







      <div class="container jumbo mt-2">      
        <div class="row py-1">
          
          <div class="col-12 col-lg-3 col-sm-3 col-md-3 mb-2 mt-1" id="productContainer1">
          </div>  
          <div class="col-12 col-lg-3 col-sm-3 col-md-3 mb-2 mt-1" id="productContainer2">
          </div>   
          <div class="col-12 col-lg-3 col-sm-3 col-md-3 mb-2 mt-1" id="productContainer3">
          </div> 
          <div class="col-12 col-lg-3 col-sm-3 col-md-3 mb-2 mt-1"  id="productContainer4">
          </div>   
        </div>
      </div>
    <!-- </section> -->
    


      <!-- ENGINE -->
      <section class="mt-5">
        <div class="container">
          <div class="about border-success  border-4 text-dark border-start">
            <h3 class="text-dark fw-bold text-start ps-2">Engine</h3>
          </div>
          <table class="table w-100 table-hover table table-striped my-4">               
            <tbody>                     
              <tr>
                <td class="w-100">
                  <div class="row w-100">
                    <div class="col-12 col-lg-3 col-md-3 col-sm-3">
                      <p class="mb-1">No. Of Cylinder</p>
                    </div>
                    <div class="col-12 col-lg-9 col-md-9 col-sm-9">
                      <div class="row">
                        <div class="col-12 col-lg-3 col-md-3 col-sm-3">
                          <p class="mb-1" id="cylinder-1">NaN</p>
                        </div>
                        <div class="col-12 col-lg-3 col-md-3 col-sm-3">
                          <p class="mb-1" id="cylinder-2">NaN</p>
                        </div>
                        <div class="col-12 col-lg-3 col-md-3 col-sm-3">
                          <p class="mb-1" id="cylinder-3">NaN</p>
                        </div>
                        <div class="col-12 col-lg-3 col-md-3 col-sm-3">
                          <p class="mb-1" id="cylinder-4">NaN</p>
                        </div>           
                      </div>         
                    </div>
                  </div>
                </td>
              </tr>

              <tr>
                <td class="w-100">
                  <div class="row w-100">
                    <div class="col-12 col-lg-3 col-md-3 col-sm-3">
                      <p class="mb-1">HP Category</p>
                    </div>
                    <div class="col-12 col-lg-9 col-md-9 col-sm-9">
                      <div class="row">
                        <div class="col-12 col-lg-3 col-md-3 col-sm-3">
                          <p class="mb-1"> <span id="hp_category-1">NaN</span> HP</p>
                        </div>
                        <div class="col-12 col-lg-3 col-md-3 col-sm-3">
                          <p class="mb-1"> <span id="hp_category-2">NaN</span> HP</p>
                        </div>
                        <div class="col-12 col-lg-3 col-md-3 col-sm-3">
                          <p class="mb-1" > <span id="hp_category-3">NaN</span> HP</p>
                        </div>
                        <div class="col-12 col-lg-3 col-md-3 col-sm-3">
                          <p class="mb-1"> <span id="hp_category-4">NaN</span> HP</p>
                        </div>           
                      </div>         
                    </div>
                  </div>
                </td>
              </tr>  
                                
              <tr>
                <td class="w-100">
                  <div class="row w-100">
                    <div class="col-12 col-lg-3 col-md-3 col-sm-3">
                      <p class="mb-1">Capacity CC</p>
                    </div>
                    <div class="col-12 col-lg-9 col-md-9 col-sm-9">
                      <div class="row">
                        <div class="col-12 col-lg-3 col-md-3 col-sm-3">
                          <p class="mb-1" > <span id="cc-1">NaN</span> CC</p>
                        </div>
                        <div class="col-12 col-lg-3 col-md-3 col-sm-3">
                          <p class="mb-1" > <span id="cc-2">NaN</span> CC</p>
                        </div>
                        <div class="col-12 col-lg-3 col-md-3 col-sm-3">
                          <p class="mb-1" > <span id="cc-3">NaN</span> CC</p>
                        </div>
                        <div class="col-12 col-lg-3 col-md-3 col-sm-3">
                          <p class="mb-1"  > <span id="cc-4">NaN</span> CC</p>
                        </div>           
                      </div>         
                    </div>
                  </div>
                </td>
              </tr>  

              <tr>
                <td class="w-100">
                  <div class="row w-100">
                    <div class="col-12 col-lg-3 col-md-3 col-sm-3">
                      <p class="mb-1">Engine Rated RPM</p>
                    </div>
                    <div class="col-12 col-lg-9 col-md-9 col-sm-9">
                      <div class="row">
                        <div class="col-12 col-lg-3 col-md-3 col-sm-3">
                          <p class="mb-1"> <span id="rpm-1">NaN</span> RPM</p>
                        </div>
                        <div class="col-12 col-lg-3 col-md-3 col-sm-3">
                          <p class="mb-1"><span id="rpm-2">NaN</span> RPM</p>
                        </div>
                        <div class="col-12 col-lg-3 col-md-3 col-sm-3">
                          <p class="mb-1"><span id="rpm-3">NaN</span> RPM</p>
                        </div>
                        <div class="col-12 col-lg-3 col-md-3 col-sm-3">
                          <p class="mb-1"><span id="rpm-4">NaN</span> RPM</p>
                        </div>           
                      </div>         
                    </div>
                  </div>
                </td>
              </tr>  

              <tr>
                <td class="w-100">
                  <div class="row w-100">
                    <div class="col-12 col-lg-3 col-md-3 col-sm-3">
                      <p class="mb-1">Cooling</p>
                    </div>
                    <div class="col-12 col-lg-9 col-md-9 col-sm-9">
                      <div class="row">
                        <div class="col-12 col-lg-3 col-md-3 col-sm-3">
                          <p class="mb-1" id="cooling-1"> NaN</p>
                        </div>
                        <div class="col-12 col-lg-3 col-md-3 col-sm-3">
                          <p class="mb-1"  id="cooling-2"> NaN</p>
                        </div>
                        <div class="col-12 col-lg-3 col-md-3 col-sm-3">
                          <p class="mb-1"  id="cooling-3">  NaN</p>
                        </div>
                        <div class="col-12 col-lg-3 col-md-3 col-sm-3">
                          <p class="mb-1"  id="cooling-4">  NaN</p>
                        </div>           
                      </div>         
                    </div>
                  </div>
                </td>
              </tr> 
              
              <tr>
                <td class="w-100">
                  <div class="row w-100">
                    <div class="col-12 col-lg-3 col-md-3 col-sm-3">
                      <p class="mb-1">Air Filter</p>
                    </div>
                    <div class="col-12 col-lg-9 col-md-9 col-sm-9">
                      <div class="row">
                        <div class="col-12 col-lg-3 col-md-3 col-sm-3">
                          <p class="mb-1" id="air_filter-1">  NaN</p>
                        </div>
                        <div class="col-12 col-lg-3 col-md-3 col-sm-3">
                          <p class="mb-1" id="air_filter-2">  NaN</p>
                        </div>
                        <div class="col-12 col-lg-3 col-md-3 col-sm-3">
                          <p class="mb-1" id="air_filter-3">  NaN</p>
                        </div>
                        <div class="col-12 col-lg-3 col-md-3 col-sm-3">
                          <p class="mb-1" id="air_filter-4">  NaN</p>
                        </div>           
                      </div>         
                    </div>
                  </div>
                </td>
              </tr>  

              <tr>
                <td class="w-100">
                  <div class="row w-100">
                    <div class="col-12 col-lg-3 col-md-3 col-sm-3">
                      <p class="mb-1">PTO HP</p>
                    </div>
                    <div class="col-12 col-lg-9 col-md-9 col-sm-9">
                      <div class="row">
                        <div class="col-12 col-lg-3 col-md-3 col-sm-3">
                          <p class="mb-1" id="pto-1">NaN</p>
                        </div>
                        <div class="col-12 col-lg-3 col-md-3 col-sm-3">
                          <p class="mb-1" id="pto-2">NaN</p>
                        </div>
                        <div class="col-12 col-lg-3 col-md-3 col-sm-3">
                          <p class="mb-1"id="pto-3">NaN</p>
                        </div>
                        <div class="col-12 col-lg-3 col-md-3 col-sm-3">
                          <p class="mb-1"id="pto-4">NaN</p>
                        </div>           
                      </div>         
                    </div>
                  </div>
                </td>
              </tr>  

              <!-- <tr>
                <td class="w-100">
                  <div class="row w-100">
                    <div class="col-12 col-lg-3 col-md-3 col-sm-3">
                      <p class="mb-1">Fuel Pump</p>
                    </div>
                    <div class="col-12 col-lg-9 col-md-9 col-sm-9">
                      <div class="row">
                        <div class="col-12 col-lg-3 col-md-3 col-sm-3">
                          <p class="mb-1">N/A</p>
                        </div>
                        <div class="col-12 col-lg-3 col-md-3 col-sm-3">
                          <p class="mb-1">N/A</p>
                        </div>
                        <div class="col-12 col-lg-3 col-md-3 col-sm-3">
                          <p class="mb-1">N/A</p>
                        </div>
                        <div class="col-12 col-lg-3 col-md-3 col-sm-3">
                          <p class="mb-1">N/A</p>
                        </div>           
                      </div>         
                    </div>
                  </div>
                </td>
              </tr>   -->

              <tr>
                <td class="w-100">
                  <div class="row w-100">
                    <div class="col-12 col-lg-3 col-md-3 col-sm-3">
                      <p class="mb-1">Torque</p>
                    </div>
                    <div class="col-12 col-lg-9 col-md-9 col-sm-9">
                      <div class="row">
                        <div class="col-12 col-lg-3 col-md-3 col-sm-3">
                          <p class="mb-1"><span id="torque-1">NaN</span> NM</p>
                        </div>
                        <div class="col-12 col-lg-3 col-md-3 col-sm-3">
                          <p class="mb-1"> <span id="torque-2">NaN</span> NM</p>
                        </div>
                        <div class="col-12 col-lg-3 col-md-3 col-sm-3">
                          <p class="mb-1"><span id="torque-3">NaN</span> NM</p>
                        </div>
                        <div class="col-12 col-lg-3 col-md-3 col-sm-3">
                          <p class="mb-1"><span id="torque-4">NaN</span> NM</p>
                        </div>           
                      </div>         
                    </div>
                  </div>
                </td>
              </tr>  
              
            </tbody>
          </table>
        </div>
      </section>

     <!-- TRANSMISSION -->
      <section class="mt-3">
        <div class="container">
          <div class="about border-success  border-4 text-dark border-start">
            <h3 class="text-dark fw-bold text-start ps-2">Transmission</h3>
          </div>
          <table class="table w-100 table-hover table table-striped my-4">
            <tbody>
                <tr>
                  <td class="w-100">
                    <div class="row w-100">
                      <div class="col-12 col-lg-3 col-md-3 col-sm-3">
                        <p class="mb-1">Type</p>
                      </div>
                      <div class="col-12 col-lg-9 col-md-9 col-sm-9">
                        <div class="row">
                          <div class="col-12 col-lg-3 col-md-3 col-sm-3">
                            <p class="mb-1"><span id="trans_tye-1">NaN</span></p>
                          </div>
                          <div class="col-12 col-lg-3 col-md-3 col-sm-3">
                            <p class="mb-1"><span id="trans_tye-2">NaN</span></p>
                          </div>
                          <div class="col-12 col-lg-3 col-md-3 col-sm-3">
                            <p class="mb-1"> <span id="trans_tye-3">NaN</span> </p>
                          </div>
                          <div class="col-12 col-lg-3 col-md-3 col-sm-3">
                            <p class="mb-1"> <span id="trans_tye-4">NaN</span></p>
                          </div>           
                        </div>         
                      </div>
                    </div>
                  </td>
                </tr>  

                <tr>
                  <td class="w-100">
                    <div class="row w-100">
                      <div class="col-12 col-lg-3 col-md-3 col-sm-3">
                        <p class="mb-1">Clutch</p>
                      </div>
                      <div class="col-12 col-lg-9 col-md-9 col-sm-9">
                        <div class="row">
                          <div class="col-12 col-lg-3 col-md-3 col-sm-3">
                            <p class="mb-1"><span id="trans_clutch-1">NaN</span></p>
                          </div>
                          <div class="col-12 col-lg-3 col-md-3 col-sm-3">
                            <p class="mb-1"><span id="trans_clutch-2">NaN</span></p>
                          </div>
                          <div class="col-12 col-lg-3 col-md-3 col-sm-3">
                            <p class="mb-1"><span id="trans_clutch-3">NaN</span></p>
                          </div>
                          <div class="col-12 col-lg-3 col-md-3 col-sm-3">
                            <p class="mb-1"><span id="trans_clutch-4">NaN</span></p>
                          </div>           
                        </div>         
                      </div>
                    </div>
                  </td>
                </tr>  

                <tr>
                <td class="w-100">
                  <div class="row w-100">
                    <div class="col-12 col-lg-3 col-md-3 col-sm-3">
                      <p class="mb-1">Gear Box</p>
                    </div>
                    <div class="col-12 col-lg-9 col-md-9 col-sm-9">
                     <div class="row">
                        <div class="col-12 col-lg-3 col-md-3 col-sm-3">
                          <p class="mb-1"><span id="gear_box_forward-1">NaN</span> Forward + <span id="gear_box_reverse-1">NaN</span> Reverse</p>
                        </div>
                        <div class="col-12 col-lg-3 col-md-3 col-sm-3">
                          <p class="mb-1"><span id="gear_box_forward-2">NaN</span> Forward + <span id="gear_box_reverse-2">NaN</span> Reverse</p>
                        </div>
                        <div class="col-12 col-lg-3 col-md-3 col-sm-3">
                          <p class="mb-1"><span id="gear_box_forward-3">NaN</span> Forward + <span id="gear_box_reverse-3">NaN</span> Reverse</p>
                        </div>
                        <div class="col-12 col-lg-3 col-md-3 col-sm-3">
                          <p class="mb-1"><span id="gear_box_forward-4">NaN</span> Forward + <span id="gear_box_reverse-4">NaN</span> Reverse</p>
                        </div>           
                      </div>         
                    </div>
                  </div>
                </td>
              </tr>  

              <tr>
                <td class="w-100">
                  <div class="row w-100">
                    <div class="col-12 col-lg-3 col-md-3 col-sm-3">
                      <p class="mb-1">Forward Speed</p>
                    </div>
                    <div class="col-12 col-lg-9 col-md-9 col-sm-9">
                     <div class="row">
                        <div class="col-12 col-lg-3 col-md-3 col-sm-3">
                          <p class="mb-1"><span id="transmission_forward-1">NaN</span> kmph</p>
                        </div>
                        <div class="col-12 col-lg-3 col-md-3 col-sm-3">
                          <p class="mb-1"> <span id="transmission_forward-2">NaN</span> kmph</p>
                        </div>
                        <div class="col-12 col-lg-3 col-md-3 col-sm-3">
                          <p class="mb-1"><span id="transmission_forward-3">NaN</span> kmph</p>
                        </div>
                        <div class="col-12 col-lg-3 col-md-3 col-sm-3">
                          <p class="mb-1"><span id="transmission_forward-4">NaN</span> kmph</p>
                        </div>           
                      </div>         
                    </div>
                  </div>
                </td>
              </tr>  

              <tr>
              <td class="w-100">
                <div class="row w-100">
                  <div class="col-12 col-lg-3 col-md-3 col-sm-3">
                    <p class="mb-1">Reverse Speed</p>
                  </div>
                  <div class="col-12 col-lg-9 col-md-9 col-sm-9">
                     <div class="row">
                        <div class="col-12 col-lg-3 col-md-3 col-sm-3">
                          <p class="mb-1"><span id="transmission_reverse-1">NaN</span> kmph</p>
                        </div>
                        <div class="col-12 col-lg-3 col-md-3 col-sm-3">
                          <p class="mb-1"><span id="transmission_reverse-2">NaN</span> kmph</p>
                        </div>
                        <div class="col-12 col-lg-3 col-md-3 col-sm-3">
                          <p class="mb-1"><span id="transmission_reverse-3">NaN</span> kmph</p>
                        </div>
                        <div class="col-12 col-lg-3 col-md-3 col-sm-3">
                          <p class="mb-1"><span id="transmission_reverse-4">NaN</span> kmph</p>
                        </div>           
                      </div>         
                    </div>
                </div>
              </td>
              </tr>  

            </tbody>
          </table>
        </div>
      </section>
      <!-- BRAKES -->
      <section class="mt-3">
        <div class="container">
          <div class="about border-success  border-4 text-dark border-start">
            <h3 class="text-dark fw-bold text-start ps-2">Brakes</h3>
          </div>
          <table class="table w-100 table-hover table table-striped my-4">
            <tbody>
              <tr>
                <td class="w-100">
                  <div class="row w-100">
                    <div class="col-12 col-lg-3 col-md-3 col-sm-3">
                      <p class="mb-1">Brakes</p>
                    </div>
                    <div class="col-12 col-lg-9 col-md-9 col-sm-9">
                     <div class="row">
                        <div class="col-12 col-lg-3 col-md-3 col-sm-3">
                          <p class="mb-1"><span id="brake_value-1">NaN</span></p>
                        </div>
                        <div class="col-12 col-lg-3 col-md-3 col-sm-3">
                          <p class="mb-1"><span id="brake_value-2">NaN</span></p>
                        </div>
                        <div class="col-12 col-lg-3 col-md-3 col-sm-3">
                          <p class="mb-1"><span id="brake_value-3">NaN</span></p>
                        </div>
                        <div class="col-12 col-lg-3 col-md-3 col-sm-3">
                          <p class="mb-1"><span id="brake_value-4">NaN</span></p>
                        </div>           
                      </div>         
                    </div>
                  </div>
                </td>
              </tr>  
            </tbody>
          </table>
        </div>
      </section>

      <!-- STEERING -->
      <section class="mt-3">
        <div class="container">
          <div class="about border-success  border-4 text-dark border-start">
            <h3 class="text-dark fw-bold text-start ps-2">Steering</h3>
          </div>

          <table class="table w-100 table-hover table table-striped my-4">                  
            <tbody>
              <tr>
                <td class="w-100">
                  <div class="row w-100">
                    <div class="col-12 col-lg-3 col-md-3 col-sm-3">
                      <p class="mb-1">Type</p>
                    </div>
                    <div class="col-12 col-lg-9 col-md-9 col-sm-9">
                     <div class="row">
                        <div class="col-12 col-lg-3 col-md-3 col-sm-3">
                          <p class="mb-1"><span id="steering_type-1">NaN</span></p>
                        </div>
                        <div class="col-12 col-lg-3 col-md-3 col-sm-3">
                          <p class="mb-1"><span id="steering_type-2">NaN</span></p>
                        </div>
                        <div class="col-12 col-lg-3 col-md-3 col-sm-3">
                          <p class="mb-1"><span id="steering_type-3">NaN</span></p>
                        </div>
                        <div class="col-12 col-lg-3 col-md-3 col-sm-3">
                          <p class="mb-1"><span id="steering_type-4">NaN</span></p>
                        </div>           
                      </div>         
                    </div>
                  </div>
                </td>
              </tr>  

              <tr>
                <td class="w-100">
                  <div class="row w-100">
                    <div class="col-12 col-lg-3 col-md-3 col-sm-3">
                      <p class="mb-1">Steering Column</p>
                    </div>
                    <div class="col-12 col-lg-9 col-md-9 col-sm-9">
                     <div class="row">
                        <div class="col-12 col-lg-3 col-md-3 col-sm-3">
                          <p class="mb-1"><span id="steering_col-1">NaN</span></p>
                        </div>
                        <div class="col-12 col-lg-3 col-md-3 col-sm-3">
                          <p class="mb-1"><span id="steering_col-2">NaN</span></p>
                        </div>
                        <div class="col-12 col-lg-3 col-md-3 col-sm-3">
                          <p class="mb-1"><span id="steering_col-3">NaN</span></p>
                        </div>
                        <div class="col-12 col-lg-3 col-md-3 col-sm-3">
                          <p class="mb-1"><span id="steering_col-4">NaN</span></p>
                        </div>           
                      </div>         
                    </div>
                  </div>
                </td>
              </tr>                                            
            </tbody>
          </table>
        </div>
      </section>

      <!-- POWER TAKE OFF -->
      <section class="mt-3">
        <div class="container">
          <div class="about border-success  border-4 text-dark border-start">
            <h3 class="text-dark fw-bold text-start ps-2">Power Take Off</h3>
          </div>
          <table class="table w-100 table-hover table table-striped my-4">                  
            <tbody>
              <tr>
                <td class="w-100">
                  <div class="row w-100">
                  <div class="col-12 col-lg-3 col-md-3 col-sm-3">
                      <p class="mb-1">Type</p>
                    </div>
                    <div class="col-12 col-lg-9 col-md-9 col-sm-9">
                     <div class="row">
                        <div class="col-12 col-lg-3 col-md-3 col-sm-3">
                          <p class="mb-1"><span id="takeoff_type-1">NaN</span></p>
                        </div>
                        <div class="col-12 col-lg-3 col-md-3 col-sm-3">
                          <p class="mb-1"><span id="takeoff_type-2">NaN</span></p>
                        </div>
                        <div class="col-12 col-lg-3 col-md-3 col-sm-3">
                          <p class="mb-1"><span id="takeoff_type-3">NaN</span></p>
                        </div>
                        <div class="col-12 col-lg-3 col-md-3 col-sm-3">
                          <p class="mb-1"><span id="takeoff_type-4">NaN</span></p>
                        </div>           
                      </div>         
                    </div>
                  </div>
                </td>
              </tr>  

              <tr>
                <td class="w-100">
                  <div class="row w-100">
                    <div class="col-12 col-lg-3 col-md-3 col-sm-3">
                      <p class="mb-1">RPM</p>
                    </div>
                    <div class="col-12 col-lg-9 col-md-9 col-sm-9">
                     <div class="row">
                        <div class="col-12 col-lg-3 col-md-3 col-sm-3">
                          <p class="mb-1"><span id="takeoff_rpm-1">NaN</span></p>
                        </div>
                        <div class="col-12 col-lg-3 col-md-3 col-sm-3">
                          <p class="mb-1"><span id="takeoff_rpm-2">NaN</span></p>
                        </div>
                        <div class="col-12 col-lg-3 col-md-3 col-sm-3">
                          <p class="mb-1"><span id="takeoff_rpm-3">NaN</span></p>
                        </div>
                        <div class="col-12 col-lg-3 col-md-3 col-sm-3">
                          <p class="mb-1"><span id="takeoff_rpm-4">NaN</span></p>
                        </div>           
                      </div>         
                    </div>
                  </div>
                </td>
              </tr> 

            </tbody>
          </table>
        </div>
      </section>
      
      <!-- Fuel Tank -->
      <section class="mt-3">
        <div class="container">
          <div class="about border-success  border-4 text-dark border-start">
            <h3 class="text-dark fw-bold text-start ps-2">Fuel Tank</h3>
          </div>
          <table class="table w-100 table-hover table table-striped my-4">
            <tbody>
              <tr>
                <td class="w-100">
                  <div class="row w-100">
                  <div class="col-12 col-lg-3 col-md-3 col-sm-3">
                      <p class="mb-1">Capacity</p>
                    </div>
                    <div class="col-12 col-lg-9 col-md-9 col-sm-9">
                     <div class="row">
                        <div class="col-12 col-lg-3 col-md-3 col-sm-3">
                          <p class="mb-1"><span id="fuel_tank-1">NaN</span> L</p>
                        </div>
                        <div class="col-12 col-lg-3 col-md-3 col-sm-3">
                          <p class="mb-1"><span id="fuel_tank-2">NaN</span> L</p>
                        </div>
                        <div class="col-12 col-lg-3 col-md-3 col-sm-3">
                          <p class="mb-1"><span id="fuel_tank-3">NaN</span> L</p>
                        </div>
                        <div class="col-12 col-lg-3 col-md-3 col-sm-3">
                          <p class="mb-1"><span id="fuel_tank-4">NaN</span> L</p>
                        </div>           
                      </div>         
                    </div>
                  </div>
                </td>
              </tr> 
            </tbody>
          </table>
        </div>
      </section>

      <!--Dimensions And Weight Of Tractor -->
      <section class="mt-3">
        <div class="container">
          <div class="about border-success  border-4 text-dark border-start">
            <h3 class="text-dark fw-bold text-start ps-2">Dimensions And Weight Of Tractor</h3>
          </div>
          <table class="table w-100 table-hover table table-striped my-4">            
            <tbody>
              <tr>
                <td class="w-100">
                  <div class="row w-100">
                    <div class="col-12 col-lg-3 col-md-3 col-sm-3">
                      <p class="mb-1">Total Weight</p>
                    </div>
                    <div class="col-12 col-lg-9 col-md-9 col-sm-9">
                     <div class="row">
                        <div class="col-12 col-lg-3 col-md-3 col-sm-3">
                          <p class="mb-1"><span id="total_weight-1">NaN</span>  KG</p>
                        </div>
                        <div class="col-12 col-lg-3 col-md-3 col-sm-3">
                          <p class="mb-1"><span id="total_weight-2">NaN</span> KG</p>
                        </div>
                        <div class="col-12 col-lg-3 col-md-3 col-sm-3">
                          <p class="mb-1"><span id="total_weight-3">NaN</span> KG</p>
                        </div>
                        <div class="col-12 col-lg-3 col-md-3 col-sm-3">
                          <p class="mb-1"><span id="total_weight-4">NaN</span> KG</p>
                        </div>           
                      </div>         
                    </div>
                  </div>
                </td>
              </tr> 

              <tr>
                <td class="w-100">
                  <div class="row w-100">
                    <div class="col-12 col-lg-3 col-md-3 col-sm-3">
                      <p class="mb-1">Wheel Base</p>
                    </div>
                    <div class="col-12 col-lg-9 col-md-9 col-sm-9">
                     <div class="row">
                        <div class="col-12 col-lg-3 col-md-3 col-sm-3">
                          <p class="mb-1"><span id="wheel_base-1">NaN</span> MM</p>
                        </div>
                        <div class="col-12 col-lg-3 col-md-3 col-sm-3">
                          <p class="mb-1"><span id="wheel_base-2">NaN</span> MM</p>
                        </div>
                        <div class="col-12 col-lg-3 col-md-3 col-sm-3">
                          <p class="mb-1"><span id="wheel_base-3">NaN</span> MM</p>
                        </div>
                        <div class="col-12 col-lg-3 col-md-3 col-sm-3">
                          <p class="mb-1"><span id="wheel_base-4">NaN</span> MM</p>
                        </div>           
                      </div>         
                    </div>
                  </div>
                </td>
              </tr> 

            </tbody>
          </table>
        </div>
      </section>

      <!-- Hydraulics -->
      <section class="mt-3">
        <div class="container">
          <div class="about border-success  border-4 text-dark border-start">
            <h3 class="text-dark fw-bold text-start ps-2">Hydraulics</h3>
          </div>
          <table class="table w-100 table-hover table table-striped my-4">                  
            <tbody>
              <tr>
                <td class="w-100">
                  <div class="row w-100">
                    <div class="col-12 col-lg-3 col-md-3 col-sm-3">
                      <p class="mb-1">Lifting Capacity</p>
                    </div>
                    <div class="col-12 col-lg-9 col-md-9 col-sm-9">
                     <div class="row">
                        <div class="col-12 col-lg-3 col-md-3 col-sm-3">
                          <p class="mb-1"><span id="lifting_capacity-1">NaN</span> Kg</p>
                        </div>
                        <div class="col-12 col-lg-3 col-md-3 col-sm-3">
                          <p class="mb-1"><span id="lifting_capacity-2">NaN</span> Kg</p>
                        </div>
                        <div class="col-12 col-lg-3 col-md-3 col-sm-3">
                          <p class="mb-1"><span id="lifting_capacity-3">NaN</span> Kg</p>
                        </div>
                        <div class="col-12 col-lg-3 col-md-3 col-sm-3">
                          <p class="mb-1"><span id="lifting_capacity-4">NaN</span> Kg</p>
                        </div>           
                      </div>         
                    </div>
                  </div>
                </td>
              </tr> 

              <tr>
                <td class="w-100">
                  <div class="row w-100">
                    <div class="col-12 col-lg-3 col-md-3 col-sm-3">
                      <p class="mb-1">3 point Linkage</p>
                    </div>
                    <div class="col-12 col-lg-9 col-md-9 col-sm-9">
                     <div class="row">
                        <div class="col-12 col-lg-3 col-md-3 col-sm-3">
                          <p class="mb-1"><span id="3_pont-1">NaN</span></p>
                        </div>
                        <div class="col-12 col-lg-3 col-md-3 col-sm-3">
                          <p class="mb-1"><span id="3_pont-2">NaN</span></p>
                        </div>
                        <div class="col-12 col-lg-3 col-md-3 col-sm-3">
                          <p class="mb-1"><span id="3_pont-3">NaN</span></p>
                        </div>
                        <div class="col-12 col-lg-3 col-md-3 col-sm-3">
                          <p class="mb-1"><span id="3_pont-4">NaN</span></p>
                        </div>           
                      </div>         
                    </div>
                  </div>
                </td>
              </tr> 

            </tbody>
          </table>
        </div>
      </section>

      <!-- Wheels And Tyres -->
      <section class="mt-3">
        <div class="container">
          <div class="about border-success  border-4 text-dark border-start">
            <h3 class="text-dark fw-bold text-start ps-2">Wheels And Tyres</h3>
          </div>
          <table class="table w-100 table-hover table table-striped my-4">                  
            <tbody>

              <tr>
                <td class="w-100">
                  <div class="row w-100">
                    <div class="col-12 col-lg-3 col-md-3 col-sm-3">
                      <p class="mb-1">Wheel drive</p>
                    </div>
                    <div class="col-12 col-lg-9 col-md-9 col-sm-9">
                     <div class="row">
                        <div class="col-12 col-lg-3 col-md-3 col-sm-3">
                          <p class="mb-1"><span id="wheel_drive-1">NaN</span></p>
                        </div>
                        <div class="col-12 col-lg-3 col-md-3 col-sm-3">
                          <p class="mb-1"><span id="wheel_drive-2">NaN</span></p>
                        </div>
                        <div class="col-12 col-lg-3 col-md-3 col-sm-3">
                          <p class="mb-1"><span id="wheel_drive-3">NaN</span></p>
                        </div>
                        <div class="col-12 col-lg-3 col-md-3 col-sm-3">
                          <p class="mb-1"><span id="wheel_drive-4">NaN</span></p>
                        </div>           
                      </div>         
                    </div>
                  </div>
                </td>
              </tr> 

              <tr>
                <td class="w-100">
                  <div class="row w-100">
                    <div class="col-12 col-lg-3 col-md-3 col-sm-3">
                      <p class="mb-1">Front</p>
                    </div>
                    <div class="col-12 col-lg-9 col-md-9 col-sm-9">
                     <div class="row">
                        <div class="col-12 col-lg-3 col-md-3 col-sm-3">
                          <p class="mb-1"><span id="front-1">NaN</span></p>
                        </div>
                        <div class="col-12 col-lg-3 col-md-3 col-sm-3">
                          <p class="mb-1"><span id="front-2">NaN</span></p>
                        </div>
                        <div class="col-12 col-lg-3 col-md-3 col-sm-3">
                          <p class="mb-1"><span id="front-3">NaN</span></p>
                        </div>
                        <div class="col-12 col-lg-3 col-md-3 col-sm-3">
                          <p class="mb-1"><span id="front-4">NaN</span></p>
                        </div>           
                      </div>         
                    </div>
                  </div>
                </td>
              </tr> 

              <tr>
                <td class="w-100">
                  <div class="row w-100">
                  <div class="col-12 col-lg-3 col-md-3 col-sm-3">
                      <p class="mb-1">Rear</p>
                    </div>
                    <div class="col-12 col-lg-9 col-md-9 col-sm-9">
                     <div class="row">
                        <div class="col-12 col-lg-3 col-md-3 col-sm-3">
                          <p class="mb-1"><span id="rear-1">NaN</span></p>
                        </div>
                        <div class="col-12 col-lg-3 col-md-3 col-sm-3">
                          <p class="mb-1"><span id="rear-2">NaN</span></p>
                        </div>
                        <div class="col-12 col-lg-3 col-md-3 col-sm-3">
                          <p class="mb-1"><span id="rear-3">NaN</span></p>
                        </div>
                        <div class="col-12 col-lg-3 col-md-3 col-sm-3">
                          <p class="mb-1"><span id="rear-4">NaN</span></p>
                        </div>           
                      </div>         
                    </div>
                  </div>
                </td>
              </tr> 
                  
            </tbody>
          </table>
        </div>
      </section>

      <!-- Other Information -->
      <section class="mt-3">
        <div class="container">
          <div class="about border-success  border-4 text-dark border-start">
            <h3 class="text-dark fw-bold text-start ps-2">Other Information</h3>
          </div>
          <table class="table w-100 table-hover table table-striped my-4">                  
            <tbody>

              <tr>
                <td class="w-100">
                  <div class="row w-100">
                    <div class="col-12 col-lg-3 col-md-3 col-sm-3">
                      <p class="mb-1">Warranty</p>
                    </div>
                    <div class="col-12 col-lg-9 col-md-9 col-sm-9">
                     <div class="row">
                        <div class="col-12 col-lg-3 col-md-3 col-sm-3">
                          <p class="mb-1"><span id="warranty-1">NaN</span> year</p>
                        </div>
                        <div class="col-12 col-lg-3 col-md-3 col-sm-3">
                          <p class="mb-1"><span id="warranty-2">NaN</span> year</p>
                        </div>
                        <div class="col-12 col-lg-3 col-md-3 col-sm-3">
                          <p class="mb-1"><span id="warranty-3">NaN</span> year</p>
                        </div>
                        <div class="col-12 col-lg-3 col-md-3 col-sm-3">
                          <p class="mb-1"><span id="warranty-4">NaN</span> year</p>
                        </div>           
                      </div>         
                    </div>
                  </div>
                </td>
              </tr> 

              <tr>
                <td class="w-100">
                  <div class="row w-100">
                    <div class="col-12 col-lg-3 col-md-3 col-sm-3">
                      <p class="mb-1">Status</p>
                    </div>
                    <div class="col-12 col-lg-9 col-md-9 col-sm-9">
                     <div class="row">
                        <div class="col-12 col-lg-3 col-md-3 col-sm-3">
                          <p class="mb-1"><span id="status-1">NaN</span></p>
                        </div>
                        <div class="col-12 col-lg-3 col-md-3 col-sm-3">
                          <p class="mb-1"><span id="status-2">NaN</span></p>
                        </div>
                        <div class="col-12 col-lg-3 col-md-3 col-sm-3">
                          <p class="mb-1"><span id="status-3">NaN</span></p>
                        </div>
                        <div class="col-12 col-lg-3 col-md-3 col-sm-3">
                          <p class="mb-1"><span id="status-4">NaN</span></p>
                        </div>           
                      </div>         
                    </div>
                  </div>
                </td>
              </tr>

              <tr>
                <td class="w-100">
                  <div class="row w-100">
                    <div class="col-12 col-lg-3 col-md-3 col-sm-3">
                      <p class="mb-1">Price</p>
                    </div>


                    <div class="col-12 col-lg-9 col-md-9 col-sm-9">
                     <div class="row">
                        <div class="col-12 col-lg-3 col-md-3 col-sm-3">
                          <p class="mb-1"><span id="price-1">NaN</span>*</p>
                        </div>
                        <div class="col-12 col-lg-3 col-md-3 col-sm-3">
                          <p class="mb-1"><span id="price-2">NaN</span>*</p>
                        </div>
                        <div class="col-12 col-lg-3 col-md-3 col-sm-3">
                          <p class="mb-1"><span id="price-3">NaN</span>*</p>
                        </div>
                        <div class="col-12 col-lg-3 col-md-3 col-sm-3">
                          <p class="mb-1"><span id="price-4">NaN</span>*</p>
                        </div>           
                      </div>         
                    </div>
                  </div>
                </td>
              </tr>  

            </tbody>
          </table>
        </div>
      </section>

      

   <!-- MODAL -->
    <!-- <section>
      <div class="modal fade" id="staticBackdrop3" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="staticBackdropLabel"> Request Call Back</h5>
              <button type="button" class="btn-close btn-success" data-bs-dismiss="modal" aria-label="Close"><img class="w-25" src="assets/images/close.png"></button>
            </div>
            <div class="modal-body bg-light">
              <form id="engine_oil_form" class=""action="">
                <div class="row">
                  <div class="col-12 col-lg-6 col-md-6 col-sm-6 ">
                    <div class="form-outline">
                      <label for="f_name" class="form-label fw-bold text-dark"> <i class="fa-regular fa-user"></i> First Name</label>
                      <input type="text" class="form-control mb-0" placeholder="Enter Your Name" id="f_name" name="f_name">
                    </div>
                  </div>
                  <div class="col-12 col-lg-6 col-md-6 col-sm-6">
                    <div class="form-outline">
                      <label for="last_name" class="form-label fw-bold text-dark"> <i class="fa-regular fa-user"></i> Last Name</label>
                      <input type="text" class="form-control mb-0" placeholder="Enter Your Name" id="eo_name" name="eo_name">
                    </div>
                  </div>
                  <div class="col-12 col-sm-6 col-md-6 col-lg-6 mt-4">
                    <div class="form-outline">
                      <label for="eo_number" class="form-label text-dark fw-bold"> <i class="fa fa-phone" aria-hidden="true"></i> Phone Number</label>
                      <input type="text" class="form-control mb-0" placeholder="Enter Number" id="eo_number" name="eo_number" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');">
                    </div>
                  </div>
                  <div class="col-12 col-sm-12 col-md-6 col-lg-6 mt-4">
                    <div class="form-outline">
                      <label for="eo_state" class="form-label text-dark fw-bold"> <i class="fas fa-location"></i> State</label>
                      <select class="form-select py-2 " aria-label=".form-select-lg example" id="eo_state" name="eo_state">
                        <option value="" selected disabled=""></option>  
                        <option value="1">Chhattisgarh</option>
                        <option value="2">Other</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-12 col-sm-12 col-md-6 col-lg-6 mt-4">
                    <div class="form-outline">
                      <label for="eo_dist" class="form-label fw-bold  text-dark"><i class="fa-solid fa-location-dot"></i> District</label>
                      <select class="form-select py-2 " aria-label=".form-select-lg example" id="eo_dist" name="eo_dist">
                        <option value="" selected disabled=""></option>
                        <option value="1">Raipur</option>
                        <option value="2">Bilaspur</option>
                        <option value="2">Durg</option>
                      </select>
                    </div>                    
                  </div>       
                  <div class="col-12 col-sm-6 col-md-6 col-lg-6 mt-4">
                    <div class="form-outline">
                      <label for="eo_tehsil" class="form-label fw-bold text-dark"> Tehsil</label>
                      <select class="form-select py-2 " aria-label=".form-select-lg example" id="eo_tehsil" name="eo_tehsil">
                        <option value="" selected disabled=""></option>
                        <option value="2">Durg</option>
                      </select>
                    </div>
                  </div>
                </div> 
                <div class="text-center my-3">
                  <button type="submit" id="engine_oil_btn" class="btn btn-success px-5 w-40">Submit</button>         
                </div>        
              </form>         
            </div>
          </div>
        </div>
      </div>
    </section> -->

    <!-- MODAL FOR THE PRICE -->
    <!-- MODAL -->
    <!-- <section>
      <div class="modal fade" id="staticBackdrop3" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="staticBackdropLabel"> Request Call Back</h5>
              <button type="button" class="btn-close btn-success" data-bs-dismiss="modal" aria-label="Close"><img src="assets/images/close.png"></button>
            </div>
            <div class="modal-body bg-light">
              <form id="engine_oil_form" class=""action="">
                <div class="row">
                  <p>Price of the <span class="" id="">Brand </span><span class="" id="">Model </span><span>is ₹ </span><span class="" id="">6.5-7.6 Lakh</span></p>
                </div> 
                <div class="text-center my-3">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>button>         
                </div>        
              </form>         
            </div>
          </div>
        </div>
      </div>
    </section> -->

  <script>
    (function($) {
      $( window ).scroll( function () {
        if ( $(document).scrollTop() > 100 ) {
          // Navigation Bar
          $('.navbarrr').removeClass('fadeIn');
          $('body').addClass('shrink');
          $('.navbarrr').addClass('fixed-top animated fadeInDown');
        } else {
          $('.navbarrr').removeClass('fadeInDown');
          $('.navbarrr').removeClass('fixed-top');
          $('body').removeClass('shrink');
          $('.navbarrr').addClass('animated fadeIn');
        }
      });  
    })(jQuery);(function($) {
      $( window ).scroll( function () {
        if ( $(document).scrollTop() > 400 ) {
          // Navigation Bar
          $('.navbarrr').removeClass('fadeIn');
          $('body').addClass('shrink');
          $('.navbarrr').addClass('fixed-top animated fadeInDown');
        } else {
          $('.navbarrr').removeClass('fadeInDown');
          $('.navbarrr').removeClass('fixed-top');
          $('body').removeClass('shrink');
          $('.navbarrr').addClass('animated fadeIn');
        }
      });  
    })(jQuery);
  </script>

  <!-- <script>
    window.addEventListener('scroll', function() {
      var blockDiv = document.getElementById('blockOnScroll');
      var scrollPosition = window.scrollY;

      if (scrollPosition > 500) {
        blockDiv.style.display = 'block'; // Change 'block' to 'none' if you want to hide it initially
      } else {
        blockDiv.style.display = 'none';
      }
    });
  </script> -->


  <!-- VALIDATION -->
  <script>
    $(document).ready(function(){
      jQuery.validator.addMethod("customPhoneNumber", function(value, element) {
        return /^[6-9]\d{9}$/.test(value);
      }, "Phone number must start with 6 or above");
        $("#engine_oil_btn").click(function () {
          // setTimeout(() => {
              //     console.log("validation of Department")
              // }, 2000);
          $("form[id='engine_oil_form']").validate({
            rules: {
              f_name: {
                    required: true,
                    minlength: 3
              },

                 eo_name: {
                  required: true,
                  minlength: 3
                },
                eo_number: {
                  required: true,
                  minlength: 10,
                  maxlength:10,
                  digits: true,
                  customPhoneNumber: true 
                },
                eo_state: {
                    required: true,
                    // minlength: 3
                },
                // eo_tehsil: {
                //     required: true,
                //     // minlength: 3
                // }
                eo_dist: {
                    required: true,
                    // minlength: 3
                }
            },
            messages: {
              f_name: {
                required: "Enter Your First Name",
                minlength: "First Name must be atleast 3 characters long"
            },
            eo_name: {
              required: "Enter Your Last Name",
              minlength: "Last Name must be atleast 3 characters long"
            },
            eo_number: {
              required: "Enter Your Phone Number",
              minlength: "Phone Number must be of 10 Digit",
              maxlength: "Ensure exactly 10 digits of Mobile No.",
              digits: "Please enter only digits"
            },
            eo_state: {
              required: "Select Your State",
              // minlength: "First Name must be atleast 3 characters long"
            },
            // eo_tehsil: {
            //     required: "Select Your Tehsil",
            //     // minlength: "First Name must be atleast 3 characters long"
            // }
            eo_dist: {
              required: "Select Your District",
              // minlength: "First Name must be atleast 3 characters long"
            }
          },
        });
      })
    });
  </script>

<script>
  window.addEventListener('scroll', function () {
    const navbar = document.getElementById('myNavbar');
    if (window.scrollY > 300) {
      navbar.classList.remove('d-none');
    } else {
      navbar.classList.add('d-none');
    }
  });
</script>


  </body>
</html>