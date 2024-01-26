<!DOCTYPE html>
<html lang="en">

   <?php
  include 'includes/headertag.php';
    //include 'includes/headertagadmin.php';
     include 'includes/footertag.php';
     
     ?> 
    <script> var APIBaseURL = "<?php echo $APIBaseURL; ?>";</script>
    <script> var baseUrl = "<?php echo $baseUrl; ?>";</script>
    <script src="<?php $baseUrl; ?>model/used_farm_imple.js"></script>
<body>
   <?php
   include 'includes/header.php';
   ?>

<section class="mt-5 pt-5 bg-light">
    <div class="container">
        <div class="pt-5">
            <span class="mt-5 text-white pt-4 ">
                <a href="index.php" class="text-decoration-none header-link px-1">Home <i class="fa-solid fa-chevron-right px-1"></i></a>
                    <span class=""><a href="" class="text-decoration-none header-link  px-1">Buy Used <i class="fa-solid fa-chevron-right px-1"></i> </a></span>
                    <span class="text-dark"> Used Farm Implements</span>
            </span> 
        </div>
    </div>
</section>
<section >
    <div class="container my-3">
        <div class="row">
            <div class="col-12 col-sm-9 col-lg-9 col-md-9">
                <h3 class="fw-bold">Used <span class="text-success fw-bold">Farm Implements</span> </h3>
              
                <div class="row my-3" id="productContainer"></div>
                <div class="col-12 text-center">
                        <button id="loadMoreBtn" type="button" class="add_btn btn btn-success mt-4 shadow">
                        <i class="fas fa-undo"></i>  Load More Tractor </button>
                       
                    </div>
            </div>
            
            <div class="col-12 col-sm-3 col-lg-3 col-md-3">
                <div class=" row mb-3" id="">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                        <div class=" row">
                            <div class="col-12 col-sm-6 col-lg-6 col-md-6">
                                <button id="adduser" type="button" class="add_btn btn-success w-100">
                                <i class="fas fa-undo"></i>  Reset </button>
                            </div>
                           <div class="col-12 col-sm-6 col-lg-6 col-md-6 pe-2">
                                <button id="adduser" type="button" class="add_btn btn-success w-100">
                                <i class="fas fa-filter"></i>  Apply Filter </button>
                           </div>
                            
                        </div>
                    </div>
                </div>
               
                <div class=" mb-3" id="">
                    <div class="force-overflow">
                        <div class="price py-2 ">
                            <h5 class=" ps-3 text-dark fw-bold mb-3">Search By Budget</h5>
                            <input type="checkbox" class="checkbox-round mt-1 ms-3" value="0-3"/><span class="ps-2 fs-6"> 0 Lakh - 3 Lakh</span><br />
                            <input type="checkbox" class="checkbox-round mt-1 ms-3" value="3-6"/><span class="ps-2 fs-6"> 3 Lakh - 6 Lakh</span><br />
                            <input type="checkbox" class="checkbox-round mt-1 ms-3" value="6-9"/><span class="ps-2 fs-6"> 9 Lakh - 9 Lakh</span><br />
                        </div>
                    </div>
                </div>
                <div class="scrollbar mb-3" id="">
                    <div class="force-overflow">
                    <h5 class=" ps-1 text-dark fw-bold pt-2">Search By HP</h5>
                        <div class="HP py-2">
                            
                            <!-- <input type="checkbox" class="text-align-center ms-3" value=""/><span> This is checkbox </span><br /> -->
                            <input type="checkbox" class="checkbox-round mt-1 ms-3" value="0-20"/><span class="ps-2 fs-6">0 HP - 20 HP</span><br />
                            <input type="checkbox" class="checkbox-round mt-1 ms-3" value="21-30"/><span class="ps-2 fs-6">21 HP - 30 HP</span><br />
                            <input type="checkbox" class="checkbox-round mt-1 ms-3" value="31-40"/><span class="ps-2 fs-6">31 HP - 40 HP</span><br />
                            <input type="checkbox" class="checkbox-round mt-1 ms-3" value="41-50"/><span class="ps-2 fs-6">41 HP - 50 HP</span><br />
                            <input type="checkbox" class="checkbox-round mt-1 ms-3" value="51-60"/><span class="ps-2 fs-6">51 HP - 60 HP</span><br />
                            <input type="checkbox" class="checkbox-round mt-1 ms-3" value="61-70"/><span class="ps-2 fs-6">61 HP - 70 HP</span><br />
                            <input type="checkbox" class="checkbox-round mt-1 ms-3" value="71-80"/><span class="ps-2 fs-6">71 HP - 80 HP</span><br />
                            <input type="checkbox" class="checkbox-round mt-1 ms-3" value="81-90"/><span class="ps-2 fs-6">81 HP - 90 HP</span><br />
                            <input type="checkbox" class="checkbox-round mt-1 ms-3" value="91-100"/><span class="ps-2 fs-6">91 HP - 100 HP</span><br />
                            <input type="checkbox" class="checkbox-round mt-1 ms-3" value="101-110"/><span class="ps-2 fs-6">101 HP - 110 HP</span><br />
                            <input type="checkbox" class="checkbox-round mt-1 ms-3" value="111-120"/><span class="ps-2 fs-6">111 HP - 120 HP</span><br />
                        </div>
                    </div>
                </div>
                <div class="scrollbar mb-3" id=" my-2">
                    <div class="force-overflow">
                    <h5 class=" ps-1 text-dark fw-bold pt-2">Search By State</h5>
                        <div class="HP py-2">
                           
                            <!-- <input type="checkbox" class="text-align-center ms-3" value=""/><span> This is checkbox </span><br /> -->
                            <input type="checkbox" class="checkbox-round mt-1 ms-3" value="Andaman"/><span class="ps-2 fs-6">Andaman Nicobar</span><br />
                            <input type="checkbox" class="checkbox-round mt-1 ms-3" value="Andhra"/><span class="ps-2 fs-6">Andhra Pradesh</span><br />
                            <input type="checkbox" class="checkbox-round mt-1 ms-3" value="Arunachal"/><span class="ps-2 fs-6">Arunachal Pradesh</span><br />
                            <input type="checkbox" class="checkbox-round mt-1 ms-3" value="Assam"/><span class="ps-2 fs-6">Assam</span><br />
                            <input type="checkbox" class="checkbox-round mt-1 ms-3" value="Bihar"/><span class="ps-2 fs-6">Bihar</span><br />
                            <input type="checkbox" class="checkbox-round mt-1 ms-3" value="Chhattisgarh"/><span class="ps-2 fs-6">Chhattisgarh</span><br />
                            <input type="checkbox" class="checkbox-round mt-1 ms-3" value="Dadra"/><span class="ps-2 fs-6">Dadra and Nagar Haveli </span><br />
                            <input type="checkbox" class="checkbox-round mt-1 ms-3" value="3-6"/><span class="ps-2 fs-6">Daman and Diu</span><br />
                            <input type="checkbox" class="checkbox-round mt-1 ms-3" value="6-9"/><span class="ps-2 fs-6">Delhi</span><br />
                            <input type="checkbox" class="checkbox-round mt-1 ms-3" value="3-6"/><span class="ps-2 fs-6">Goa</span><br />
                            <input type="checkbox" class="checkbox-round mt-1 ms-3" value="6-9"/><span class="ps-2 fs-6">Gujarat</span><br />
                            <input type="checkbox" class="checkbox-round mt-1 ms-3" value="3-6"/><span class="ps-2 fs-6">Jammu Kashmir</span><br />
                            <input type="checkbox" class="checkbox-round mt-1 ms-3" value="6-9"/><span class="ps-2 fs-6">Haryana</span><br />
                            <input type="checkbox" class="checkbox-round mt-1 ms-3" value="3-6"/><span class="ps-2 fs-6">Himachal Pradesh</span><br />
                            <input type="checkbox" class="checkbox-round mt-1 ms-3" value="6-9"/><span class="ps-2 fs-6">Gujarat</span><br />
                            <input type="checkbox" class="checkbox-round mt-1 ms-3" value="3-6"/><span class="ps-2 fs-6">Jharkhand</span><br />
                            <input type="checkbox" class="checkbox-round mt-1 ms-3" value="6-9"/><span class="ps-2 fs-6">Karnataka</span><br />
                            <input type="checkbox" class="checkbox-round mt-1 ms-3" value="3-6"/><span class="ps-2 fs-6">Kerala</span><br />
                            <input type="checkbox" class="checkbox-round mt-1 ms-3" value="6-9"/><span class="ps-2 fs-6">Lakshadweep</span><br />
                            <input type="checkbox" class="checkbox-round mt-1 ms-3" value="6-9"/><span class="ps-2 fs-6">Madhya Pradesh</span><br />
                            <input type="checkbox" class="checkbox-round mt-1 ms-3" value="6-9"/><span class="ps-2 fs-6">Maharashtra</span><br />
                            <input type="checkbox" class="checkbox-round mt-1 ms-3" value="6-9"/><span class="ps-2 fs-6">Manipur</span><br />
                            <input type="checkbox" class="checkbox-round mt-1 ms-3" value="6-9"/><span class="ps-2 fs-6">Meghalaya</span><br />
                            <input type="checkbox" class="checkbox-round mt-1 ms-3" value="6-9"/><span class="ps-2 fs-6">Mizoram</span><br />
                            <input type="checkbox" class="checkbox-round mt-1 ms-3" value="6-9"/><span class="ps-2 fs-6">Nagaland</span><br />
                            <input type="checkbox" class="checkbox-round mt-1 ms-3" value="6-9"/><span class="ps-2 fs-6">Orissa</span><br />
                            <input type="checkbox" class="checkbox-round mt-1 ms-3" value="6-9"/><span class="ps-2 fs-6">Pondicherry</span><br />
                            <input type="checkbox" class="checkbox-round mt-1 ms-3" value="6-9"/><span class="ps-2 fs-6">Punjab</span><br />
                            <input type="checkbox" class="checkbox-round mt-1 ms-3" value="6-9"/><span class="ps-2 fs-6">Rajasthan</span><br />
                            <input type="checkbox" class="checkbox-round mt-1 ms-3" value="6-9"/><span class="ps-2 fs-6">Sikkim</span><br />
                            <input type="checkbox" class="checkbox-round mt-1 ms-3" value="6-9"/><span class="ps-2 fs-6">Tamil Nadu</span><br />
                            <input type="checkbox" class="checkbox-round mt-1 ms-3" value="6-9"/><span class="ps-2 fs-6">Tripura</span><br />
                            <input type="checkbox" class="checkbox-round mt-1 ms-3" value="6-9"/><span class="ps-2 fs-6">Telangana</span><br />
                            <input type="checkbox" class="checkbox-round mt-1 ms-3" value="6-9"/><span class="ps-2 fs-6">Uttar Pradesh</span><br />
                            <input type="checkbox" class="checkbox-round mt-1 ms-3" value="6-9"/><span class="ps-2 fs-6">Uttarakhand</span><br />
                            <input type="checkbox" class="checkbox-round mt-1 ms-3" value="6-9"/><span class="ps-2 fs-6">West Bengal</span><br />
                        </div>
                    </div>
                </div>
                <div class="scrollbar mb-3" id=" my-2">
                    <div class="force-overflow">
                    <h5 class=" ps-1 text-dark fw-bold  pt-2">Search By Brand</h5>
                        <div class="HP py-2">
                            <!-- <input type="checkbox" class="text-align-center ms-3" value=""/><span> This is checkbox </span><br /> -->
                            <input type="checkbox" class="checkbox-round mt-1 ms-3" value="Mahindra"/><span class="ps-2 fs-6">Mahindra (97)</span><br />
                            <input type="checkbox" class="checkbox-round mt-1 ms-3" value="Farmtrac"/><span class="ps-2 fs-6">Farmtrac (21)</span><br />
                            <input type="checkbox" class="checkbox-round mt-1 ms-3" value="Swaraj"/><span class="ps-2 fs-6">Swaraj (19)</span><br />
                            <input type="checkbox" class="checkbox-round mt-1 ms-3" value="Massey"/><span class="ps-2 fs-6">Massey Ferguson (16)</span><br />
                            <input type="checkbox" class="checkbox-round mt-1 ms-3" value="Powertrac"/><span class="ps-2 fs-6">Powertrac (15)</span><br />
                            <input type="checkbox" class="checkbox-round mt-1 ms-3" value="Sonalika"/><span class="ps-2 fs-6">Sonalika (15)</span><br />
                            <input type="checkbox" class="checkbox-round mt-1 ms-3" value="Eicher"/><span class="ps-2 fs-6">Eicher (12)</span><br />
                            <input type="checkbox" class="checkbox-round mt-1 ms-3" value="John"/><span class="ps-2 fs-6">John Deere (6)</span><br />
                            <input type="checkbox" class="checkbox-round mt-1 ms-3" value="Escorts"/><span class="ps-2 fs-6">Escorts (13)</span><br />
                            <input type="checkbox" class="checkbox-round mt-1 ms-3" value="Holland"/><span class="ps-2 fs-6">New Holland (2)</span><br />
                        </div>
                    </div>
                </div>
                <div class="scrollbar mb-3" id=" my-2">
                    <div class="force-overflow">
                    <h5 class=" ps-1 text-dark fw-bold  pt-2">Search By Year</h5>
                        <div class="HP py-2">
                            <!-- <input type="checkbox" class="text-align-center ms-3" value=""/><span> This is checkbox </span><br /> -->
                            <input type="checkbox" class="checkbox-round mt-1 ms-3" value="2021"/><span class="ps-2 fs-6">2021</span><br />
                            <input type="checkbox" class="checkbox-round mt-1 ms-3" value="2020"/><span class="ps-2 fs-6">2020</span><br />
                            <input type="checkbox" class="checkbox-round mt-1 ms-3" value="2019"/><span class="ps-2 fs-6">2019</span><br />
                            <input type="checkbox" class="checkbox-round mt-1 ms-3" value="2018"/><span class="ps-2 fs-6">2018 </span><br />
                            <input type="checkbox" class="checkbox-round mt-1 ms-3" value="2017"/><span class="ps-2 fs-6">2017</span><br />
                            <input type="checkbox" class="checkbox-round mt-1 ms-3" value="2016"/><span class="ps-2 fs-6">2016</span><br />
                            <input type="checkbox" class="checkbox-round mt-1 ms-3" value="2015"/><span class="ps-2 fs-6">2015</span><br />
                            <input type="checkbox" class="checkbox-round mt-1 ms-3" value="2014"/><span class="ps-2 fs-6">2006</span><br />
                            <input type="checkbox" class="checkbox-round mt-1 ms-3" value="2013"/><span class="ps-2 fs-6">2005</span><br />
                            <input type="checkbox" class="checkbox-round mt-1 ms-3" value="2012"/><span class="ps-2 fs-6">2009</span><br />
                            

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="bg-light">
    <div class="container mt-4 ">
        <div class="col-12 assured mt-3">
            <h4 class="fw-bold p-2">Used implement by Location</h4>
        </div>
        <div class="row mt-4">
            <div class="col-12 col-sm-4 col-lg-4 col-md-4 my-2">
                <ul class="justify-content-center ul-box  ">
                    <li class=""> <a href="#" class="text-dark text-decoration-none"><p>  <i class="fa-solid fa-angles-right"></i> &nbsp; Used Implement for sale in Ambikapur </p></a></li>
                    <li class=""> <a href="#" class="text-dark text-decoration-none"><p>  <i class="fa-solid fa-angles-right"></i> &nbsp; Used Implement for sale in Raipur </p></a></li>
                    <li class=""> <a href="#" class="text-dark text-decoration-none"><p> <i class="fa-solid fa-angles-right"></i> &nbsp; Used Implement for sale in Raigarh </p></a></li>
                </ul>
            </div>
            <div class="col-12 col-sm-4 col-lg-4 col-md-4 my-2">
                <ul class="justify-content-center ul-box  ">
                    <li class=""> <a href="#" class="text-dark text-decoration-none"><p>  <i class="fa-solid fa-angles-right"></i> &nbsp; Used Implement for sale in Ambikapur </p></a></li>
                    <li class=""> <a href="#" class="text-dark text-decoration-none"><p>  <i class="fa-solid fa-angles-right"></i> &nbsp; Used Implement for sale in Raipur </p></a></li>
                    <li class=""> <a href="#" class="text-dark text-decoration-none"><p> <i class="fa-solid fa-angles-right"></i> &nbsp; Used Implement for sale in Raigarh </p></a></li>
                </ul>
            </div>
            <div class="col-12 col-sm-4 col-lg-4 col-md-4 my-2">
                <ul class="justify-content-center ul-box  ">
                    <li class=""> <a href="#" class="text-dark text-decoration-none"><p>  <i class="fa-solid fa-angles-right"></i> &nbsp; Used Implement for sale in Ambikapur </p></a></li>
                    <li class=""> <a href="#" class="text-dark text-decoration-none"><p>  <i class="fa-solid fa-angles-right"></i> &nbsp; Used Implement for sale in Raipur </p></a></li>
                    <li class=""> <a href="#" class="text-dark text-decoration-none"><p> <i class="fa-solid fa-angles-right"></i> &nbsp; Used Implement for sale in Raigarh </p></a></li>
                </ul>
            </div>
        </div>
    </div>
</section>
<section class="bg-light">
    <div class="container mt-4 ">
        <div class="col-12 assured mt-3">
            <h4 class="fw-bold p-2">Used implement  By Brand</h4>
        </div>
        <div class="row mt-4">
            <div class="col-12 col-sm-4 col-lg-4 col-md-4 my-2">
                <ul class="justify-content-center ul-box  ">
                    <li class=""> <a href="#" class="text-dark text-decoration-none"><p>  <i class="fa-solid fa-angles-right"></i> &nbsp; Second hand Mahindra Implement for sale</p></a></li>
                    <li class=""> <a href="#" class="text-dark text-decoration-none"><p>  <i class="fa-solid fa-angles-right"></i> &nbsp; Second hand Swaraj Implement for sale </p></a></li>
                    <li class=""> <a href="#" class="text-dark text-decoration-none"><p> <i class="fa-solid fa-angles-right"></i> &nbsp; Second hand Mahindra Implement for sale</p></a></li>
                </ul>
            </div>
            <div class="col-12 col-sm-4 col-lg-4 col-md-4 my-2">
                <ul class="justify-content-center ul-box  ">
                    <li class=""> <a href="#" class="text-dark text-decoration-none"><p>  <i class="fa-solid fa-angles-right"></i> &nbsp; Second hand Mahindra Implement for sale</p></a></li>
                    <li class=""> <a href="#" class="text-dark text-decoration-none"><p>  <i class="fa-solid fa-angles-right"></i> &nbsp; Second hand Swaraj Implement for sale </p></a></li>
                    <li class=""> <a href="#" class="text-dark text-decoration-none"><p> <i class="fa-solid fa-angles-right"></i> &nbsp; Second hand Mahindra Implement for sale</p></a></li>
                </ul>
            </div>
            <div class="col-12 col-sm-4 col-lg-4 col-md-4 my-2">
                <ul class="justify-content-center ul-box  ">
                    <li class=""> <a href="#" class="text-dark text-decoration-none"><p>  <i class="fa-solid fa-angles-right"></i> &nbsp; Second hand Mahindra Implement for sale</p></a></li>
                    <li class=""> <a href="#" class="text-dark text-decoration-none"><p>  <i class="fa-solid fa-angles-right"></i> &nbsp; Second hand Swaraj Implement for sale </p></a></li>
                    <li class=""> <a href="#" class="text-dark text-decoration-none"><p> <i class="fa-solid fa-angles-right"></i> &nbsp; Second hand Mahindra Implement for sale</p></a></li>
                </ul>
            </div>
        </div>
    </div>
</section>
<section class="bg-light">
    <div class="container mt-4 ">
        <div class="col-12 assured mt-3">
            <h4 class="fw-bold p-2">Used Implement By Category</h4>
        </div>
        <div class="row mt-4">
            <div class="col-12 col-sm-4 col-lg-4 col-md-4 my-2">
                <ul class="justify-content-center ul-box  ">
                    <li class=""> <a href="#" class="text-dark text-decoration-none"><p>  <i class="fa-solid fa-angles-right"></i> &nbsp; Used Thresher for Sale</p></a></li>
                    <li class=""> <a href="#" class="text-dark text-decoration-none"><p>  <i class="fa-solid fa-angles-right"></i> &nbsp; Used Rotavator for Sale</p></a></li>
                    <li class=""> <a href="#" class="text-dark text-decoration-none"><p> <i class="fa-solid fa-angles-right"></i> &nbsp; Used Thresher for Sale</p></a></li>
                </ul>
            </div>
            <div class="col-12 col-sm-4 col-lg-4 col-md-4 my-2">
                <ul class="justify-content-center ul-box  ">
                    <li class=""> <a href="#" class="text-dark text-decoration-none"><p>  <i class="fa-solid fa-angles-right"></i> &nbsp; Used Thresher for Sale</p></a></li>
                    <li class=""> <a href="#" class="text-dark text-decoration-none"><p>  <i class="fa-solid fa-angles-right"></i> &nbsp; Used Rotavator for Sale</p></a></li>
                    <li class=""> <a href="#" class="text-dark text-decoration-none"><p> <i class="fa-solid fa-angles-right"></i> &nbsp; Used Thresher for Sale</p></a></li>
                </ul>
            </div>
            <div class="col-12 col-sm-4 col-lg-4 col-md-4 my-2">
                <ul class="justify-content-center ul-box  ">
                    <li class=""> <a href="#" class="text-dark text-decoration-none"><p>  <i class="fa-solid fa-angles-right"></i> &nbsp; Used Thresher for Sale</p></a></li>
                    <li class=""> <a href="#" class="text-dark text-decoration-none"><p>  <i class="fa-solid fa-angles-right"></i> &nbsp; Used Rotavator for Sale</p></a></li>
                    <li class=""> <a href="#" class="text-dark text-decoration-none"><p> <i class="fa-solid fa-angles-right"></i> &nbsp; Used Thresher for Sale</p></a></li>
                </ul>
            </div>
        </div>
    </div>
</section>



<?php
    include 'includes/footer.php';
    include 'includes/footertag.php';

    ?>
    </html>