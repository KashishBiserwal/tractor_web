<!DOCTYPE html>
<html lang="en">

<?php
include 'includes/headertag.php';
   include 'includes/headertagadmin.php';
   include 'includes/footertag.php';
   
   ?> 
<script> var APIBaseURL = "<?php echo $APIBaseURL; ?>";</script>
<script> var baseUrl = "<?php echo $baseUrl; ?>";</script>
    <script src="<?php $baseUrl; ?>model/upcomig.js"></script>

<body>
   <?php
   include 'includes/header.php';
   ?>

<section class="mt-5 pt-3">
    <div class="container">
        <div class="mt-5">
            <span class="mt-5 text-white pt-5 ">
                <a href="index.php" class="text-decoration-none header-link px-1">Home <i class="fa-solid fa-chevron-right px-1"></i></a>
                   
                    <span class="text-dark"> Upcoming Tractor</span>
            </span> 
        </div>
    </div>
</section>
<section>
    <div class="container my-4">
        <div class="row">
            <div class="col-12 col-sm-9 col-lg-9 col-md-9">
                <h3 class="pb-3">Upcoming<span class="text-success fw-bold">Tractors in India</span> </h3>
                <div id="productContainer" class="row">
                    <!-- <div class="col-12 col-lg-4 col-md-4 col-sm-4 mb-3">
                        <div class="h-auto success__stry__item d-flex flex-column shadow ">
                            <div class="thumb">
                                <a href="#">
                                    <div class="ratio ratio-16x9">
                                        <img src="assets/images/alt-3000-1632718601.webp" class="object-fit-cover " alt="img">
                                    </div>
                                </a>
                            </div>
                            <div class="content d-flex flex-column flex-grow-1 ">
                                <div class="caption text-center">
                                    <a href="#" class="text-decoration-none text-dark">
                                        <p class="pt-3"><strong class="series_tractor_strong text-center h4 fw-bold ">Powertrac ALT 3000</strong></p>
                                    </a>      
                                </div>
                                <div class="power text-center mt-2">
                                    <div class="row ">
                                        <div class="col-12 col-lg-6 col-md-6 col-sm-6"><p class="text-dark ps-2"><i class="fas fa-bolt"></i> 4728 HP</p></div>
                                        <div class="col-12 col-lg-6 col-md-6 col-sm-6" style="padding-right: 32px;">
                                             <p id="adduser" type="" class="text-dark">
                                              <i class="fa-solid fa-gear"></i>  1841  CC </p>
                                        </div>
                                    </div>    
                                </div>
                                <div class="col-12">
                                    <button id="adduser" type="button" class="add_btn  btn-success w-100">
                                    <i class="fa-regular fa-handshake"></i> Get on Road Price </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-4 col-md-4 col-sm-4 mb-3">
                        <div class="h-auto success__stry__item d-flex flex-column shadow ">
                            <div class="thumb">
                                <a href="#">
                                    <div class="ratio ratio-16x9">
                                        <img src="assets/images/3600-1632736952.webp" class="object-fit-cover " alt="img">
                                    </div>
                                </a>
                            </div>
                            <div class="content d-flex flex-column flex-grow-1 ">
                                <div class="caption text-center">
                                    <a href="#" class="text-decoration-none text-dark">
                                        <p class="pt-3"><strong class="series_tractor_strong text-center h4 fw-bold ">Farmtrac 3600</strong></p>
                                    </a>      
                                </div>
                                <div class="power text-center mt-2">
                                    <div class="row ">
                                        <div class="col-12 col-lg-6 col-md-6 col-sm-6"><p class="text-dark ps-2"><i class="fas fa-bolt"></i> 75  HP</p></div>
                                        <div class="col-12 col-lg-6 col-md-6 col-sm-6" style="padding-right: 32px;">
                                             <p id="adduser" type="" class="text-dark">
                                              <i class="fa-solid fa-gear"></i>  4160   CC </p>
                                        </div>
                                    </div>    
                                </div>
                                <div class="col-12">
                                    <button id="adduser" type="button" class="add_btn btn-success w-100">
                                    <i class="fa-regular fa-handshake"></i> Get on Road Price </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-4 col-md-4 col-sm-4 mb-3">
                        <div class="h-auto success__stry__item d-flex flex-column shadow ">
                            <div class="thumb">
                                <a href="#">
                                    <div class="ratio ratio-16x9">
                                        <img src="assets/images/eicher-551-2wd-prima-g3.webp" class="object-fit-cover " alt="img">
                                    </div>
                                </a>
                            </div>
                            <div class="content d-flex flex-column flex-grow-1 ">
                                <div class="caption text-center">
                                    <a href="#" class="text-decoration-none text-dark">
                                        <p class="pt-3"><strong class="series_tractor_strong text-center h4 fw-bold ">Eicher 551 Prima G3</strong></p>
                                    </a>      
                                </div>
                                <div class="power text-center mt-2">
                                    <div class="row ">
                                        <div class="col-12 col-lg-6 col-md-6 col-sm-6"><p class="text-dark ps-2"><i class="fas fa-bolt"></i> 49 HP</p></div>
                                        <div class="col-12 col-lg-6 col-md-6 col-sm-6" style="padding-right: 32px;">
                                             <p id="adduser" type="" class="text-dark">
                                              <i class="fa-solid fa-gear"></i>  3300  CC </p>
                                        </div>
                                    </div>    
                                </div>
                                <div class="col-12">
                                    <button id="adduser" type="button" class="add_btn btn-success w-100">
                                    <i class="fa-regular fa-handshake"></i> Get on Road Price </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-4 col-md-4 col-sm-4 mb-3">
                        <div class="h-auto success__stry__item d-flex flex-column shadow ">
                            <div class="thumb">
                                <a href="#">
                                    <div class="ratio ratio-16x9">
                                        <img src="assets/images/solis-6524-s.webp" class="object-fit-cover " alt="img">
                                    </div>
                                </a>
                            </div>
                            <div class="content d-flex flex-column flex-grow-1 ">
                                <div class="caption text-center">
                                    <a href="#" class="text-decoration-none text-dark">
                                        <p class="pt-3"><strong class="series_tractor_strong text-center h4 fw-bold ">Solis 6524 S</strong></p>
                                    </a>      
                                </div>
                                <div class="power text-center mt-2">
                                    <div class="row ">
                                        <div class="col-12 col-lg-6 col-md-6 col-sm-6"><p class="text-dark ps-2"><i class="fas fa-bolt"></i> 65 HP</p></div>
                                        <div class="col-12 col-lg-6 col-md-6 col-sm-6" style="padding-right: 32px;">
                                             <p id="adduser" type="" class="text-dark">
                                              <i class="fa-solid fa-gear"></i>  4710  CC </p>
                                        </div>
                                    </div>    
                                </div>
                                <div class="col-12">
                                    <button id="adduser" type="button" class="add_btn btn-success w-100">
                                    <i class="fa-regular fa-handshake"></i> Get on Road Price </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-4 col-md-4 col-sm-4 mb-3">
                        <div class="h-auto success__stry__item d-flex flex-column shadow ">
                            <div class="thumb">
                                <a href="#">
                                    <div class="ratio ratio-16x9">
                                        <img src="assets/images/437-1632718440.webp" class="object-fit-cover " alt="img">
                                    </div>
                                </a>
                            </div>
                            <div class="content d-flex flex-column flex-grow-1 ">
                                <div class="caption text-center">
                                    <a href="#" class="text-decoration-none text-dark">
                                        <p class="pt-3"><strong class="series_tractor_strong text-center h4 fw-bold ">Powertrac 437</strong></p>
                                    </a>      
                                </div>
                                <div class="power text-center mt-2">
                                    <div class="row ">
                                        <div class="col-12 col-lg-6 col-md-6 col-sm-6"><p class="text-dark ps-2"><i class="fas fa-bolt"></i> 37 HP</p></div>
                                        <div class="col-12 col-lg-6 col-md-6 col-sm-6" style="padding-right: 32px;">
                                             <p id="adduser" type="" class="text-dark">
                                              <i class="fa-solid fa-gear"></i> 2146   CC </p>
                                        </div>
                                    </div>    
                                </div>
                                <div class="col-12">
                                    <button id="adduser" type="button" class="add_btn btn-success w-100">
                                    <i class="fa-regular fa-handshake"></i> Get on Road Price </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-4 col-md-4 col-sm-4 mb-3">
                        <div class="h-auto success__stry__item d-flex flex-column shadow ">
                            <div class="thumb">
                                <a href="#">
                                    <div class="ratio ratio-16x9">
                                        <img src="assets/images/vst-4511-pro-2wd6.webp" class="object-fit-cover " alt="img">
                                    </div>
                                </a>
                            </div>
                            <div class="content d-flex flex-column flex-grow-1 ">
                                <div class="caption text-center">
                                    <a href="#" class="text-decoration-none text-dark">
                                        <p class="pt-3"><strong class="series_tractor_strong text-center h4 fw-bold ">VST 4511 Pro 2WD</strong></p>
                                    </a>      
                                </div>
                                <div class="power text-center mt-2">
                                    <div class="row ">
                                        <div class="col-12 col-lg-6 col-md-6 col-sm-6"><p class="text-dark ps-2"><i class="fas fa-bolt"></i> 45 HP</p></div>
                                        <div class="col-12 col-lg-6 col-md-6 col-sm-6" style="padding-right: 32px;">
                                             <p id="adduser" type="" class="text-dark">
                                              <i class="fa-solid fa-gear"></i> 3500  CC </p>
                                        </div>
                                    </div>    
                                </div>
                                <div class="col-12">
                                    <button id="adduser" type="button" class="add_btn btn-success w-100">
                                    <i class="fa-regular fa-handshake"></i> Get on Road Price </button>
                                </div>
                            </div>
                        </div>
                    </div> -->
                    
                </div>
                <div class="col-12 text-center mt-3 pt-2 ">
                    <button id="load_moretract" type="button" class="add_btn btn btn-success">
                    <i class="fas fa-undo"></i>  Load More tractors</button>
                </div>
            </div>
            
            <div class="col-12 col-sm-3 col-lg-3 col-md-3">
                <div class=" row mb-3" id="">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                        <div class=" row text-center">
                            <div class="col-12 col-sm-6 col-lg-6 col-md-6">
                                <button id="adduser" type="button" class=" btn add_btn btn-success px-4">
                                <i class="fas fa-undo"></i>  Reset </button>
                            </div>
                           <div class="col-12 col-sm-6 col-lg-6 col-md-6 pe-2">
                                <button id="adduser" type="button" class=" btn add_btn btn-success">
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
                            <input type="checkbox" class="checkbox-round mt-1 ms-3" value="3-6"/><span class="ps-2 fs-6"> 3 Lakh - 5 Lakh</span><br />
                            <input type="checkbox" class="checkbox-round mt-1 ms-3" value="6-9"/><span class="ps-2 fs-6"> 5 Lakh - 6 Lakh</span><br />
                            <input type="checkbox" class="checkbox-round mt-1 ms-3" value="6-9"/><span class="ps-2 fs-6"> 6 Lakh - 7 Lakh</span><br />
                            <input type="checkbox" class="checkbox-round mt-1 ms-3" value="6-9"/><span class="ps-2 fs-6"> 7 Lakh - 9 Lakh</span><br />
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
                            <input type="checkbox" class="checkbox-round mt-1 ms-3" value="61-70"/><span class="ps-2 fs-6">61 HP - 75 HP</span><br />
                            <input type="checkbox" class="checkbox-round mt-1 ms-3" value="71-80"/><span class="ps-2 fs-6">Above 75 Hp </span><br />
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
            </div>
        </div>
    </div>
</section>

<section class="my-4">
    <div class="container my-5">
        <h3 class="fw-bold assured px-3 py-2">Upcoming Tractor Price List 2023</h3>
        <div class="" role="alert">
            <p class="text-dark py-3">The latest tractor brands in India are now in one place. Find out the best tractor in India for your agriculture needs. We are provides you Latest Tractors in India at an affordable latest tractor price. Popular latest tractors in India are Swaraj 963 FE, Mahindra Arjun Novo 605 Di-i, Sonalika DI 745 III, and many more.</p>
        </div>
        <table class="table table-striped my-3">
            <thead class="">
                <tr class="py-3">
                <th scope="col">Upcoming Tractor Models</th>
                <th scope="col">Tractor HP</th>
                <th scope="col">Upcoming Tractors Price</th>
                </tr>
            </thead>
            <tbody>
                <tr class="">
                    <td class="col-12 col-lg-5 col-md-5 col-sm-5 py-3">Powertrac ALT 3000</td>
                    <td class="col-12 col-lg-3 col-md-3 col-sm-3 py-3">28  HP</td>
                    <td class="col-12 col-lg-4 col-md-4 col-sm-4 py-3">Rs. 4.87 lac*</td>
                </tr>
                <tr  class="py-3">
                    <td class="py-3">Farmtrac 3600</td>
                    <td class="py-3">47  HP</td>
                    <td class="py-3">Rs. 7.06-7.28 lac*</td>
                </tr>
                <tr class="py-3">
                    <td class="py-3">Swaraj 978 FE</td>
                    <td class="py-3">75  HP</td>
                    <td class="py-3">Rs. 12.60-13.50 lac*</td>
                </tr>
                <tr class="py-3">
                    <td class="py-3">Farmtrac 60 PowerMaxx</td>
                    <td class="py-3">55 HP</td>
                    <td class="py-3">Rs. 7.92-8.24 lac*</td>
                </tr>
                <tr>
                    <td class="py-3">Mahindra OJA 2121 4WD</td>
                    <td class="py-3">21 HP</td>
                    <td class="py-3">Rs. 4.78 lac*</td>
                </tr>
                <tr>
                    <td  class="py-3">Mahindra 275 DI XP Plus</td>
                    <td class="py-3">37 HP</td>
                    <td class="py-3">	Rs. 5.65-5.90 lac*</td>
                </tr>
                <tr>
                    <td  class="py-3">Mahindra Yuvo 575 DI 4WD</td>
                    <td class="py-3">52 HP</td>
                    <td class="py-3">Rs. 7.59-7.90 lac*</td>
                </tr>
                <tr>
                    <td class="py-3" >Sonalika Tiger 50</td>
                    <td class="py-3">	45 HP</td>
                    <td class="py-3">	Rs. 8.35-8.67 lac*</td>
                </tr>
            </tbody>
        </table>
    </div>
</section>

<section>
    <div class="container"> 
        <h3 class="fw-bold assured px-3 ">Tractors By HP</h3>
            <div class="row my-4">
                <div class="col-12 col-lg-3 col-md-4 col-sm-3 py-2">
                    <a href="#" id="adduser" class="btn add_btn text-decoration-none btn-danger border-2 p-2 w-100">
                    <i class="fas fa-bolt"></i> Under 20 HP</a>
                </div>
                <div class="col-12 col-lg-3 col-md-4 col-sm-3 py-2">
                    <a href="#" id="adduser" class=" btn add_btn text-decoration-none btn-danger border-2 py-2 px-3 w-100">
                    <i class="fas fa-bolt"></i> 21-30 HP</a>
                </div>
                <div class="col-12 col-lg-3 col-md-4 col-sm-3 py-2">
                    <a href="#" id="adduser" class=" btn add_btn text-decoration-none btn-danger border-2 py-2 px-3 w-100">
                    <i class="fas fa-bolt"></i> 31-40 HP</a>
                </div>
                <div class="col-12 col-lg-3 col-md-4 col-sm-3 py-2">
                    <a href="#" id="adduser" class="btn add_btn text-decoration-none btn-danger border-2 py-2 px-3 w-100">
                    <i class="fas fa-bolt"></i>  41-45 HP</a>
                </div>
                <div class="col-12 col-lg-3 col-md-4 col-sm-3 py-2">
                    <a href="#" id="adduser" class="btn add_btn text-decoration-none btn-danger border-2 py-2 px-3 w-100">
                    <i class="fas fa-bolt"></i>  46-50 HP</a>
                </div>
                <div class="col-12 col-lg-3 col-md-4 col-sm-3 py-2">
                    <a href="#" id="adduser" class="btn add_btn text-decoration-none btn-danger border-2 py-2 px-3 w-100">
                    <i class="fas fa-bolt"></i>  51-60 HP</a>
                </div>
                <div class="col-12 col-lg-3 col-md-4 col-sm-3 py-2">
                    <a href="#" id="adduser" class="btn add_btn text-decoration-none btn-danger border-2 py-2 px-3 w-100">
                    <i class="fas fa-bolt"></i> 61-75 HP</a>
                </div>
                <div class="col-12 col-lg-3 col-md-4 col-sm-3 py-2">
                    <a href="#" id="adduser" class="btn add_btn text-decoration-none btn-danger border-2 py-2 px-3 w-100">
                    <i class="fas fa-bolt"></i>  ABOVE 75 HP</a>
                </div>
            </div>
    </div>
    <div class="container"> 
        <h3 class="fw-bold assured px-3">Tractors By Price</h3>
            <div class="row my-4">
                <div class="col-12 col-lg-3 col-md-4 col-sm-3 py-2">
                    <a href="#" id="adduser" class="btn add_btn text-decoration-none btn-danger border-2 p-2 w-100">
                    <i class="fas fa-rupee-sign"></i> Under 3 lakh</a>
                </div>
                <div class="col-12 col-lg-3 col-md-4 col-sm-3 py-2">
                    <a href="#" id="adduser" class=" btn add_btn text-decoration-none btn-danger border-2 py-2 px-3 w-100">
                    <i class="fas fa-rupee-sign"></i> 3-5 Lakh</a>
                </div>
                <div class="col-12 col-lg-3 col-md-4 col-sm-3 py-2">
                    <a href="#" id="adduser" class=" btn add_btn text-decoration-none btn-danger border-2 py-2 px-3 w-100">
                    <i class="fas fa-rupee-sign"></i> 5-7 Lakh</a>
                </div>
                <div class="col-12 col-lg-3 col-md-4 col-sm-3 py-2">
                    <a href="#" id="adduser" class="btn add_btn text-decoration-none btn-danger border-2 py-2 px-3 w-100">
                    <i class="fas fa-rupee-sign"></i> Above 7 Lakh</a>
                </div>
            </div>
    </div>
</section>


<?php
    include 'includes/footer.php';
    include 'includes/footertag.php';

?>
</html>