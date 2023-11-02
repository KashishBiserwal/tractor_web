<!DOCTYPE html>
<html lang="en">

<head>
   <?php
   include 'includes/headertag.php';
   ?>
</head>

<body>
   <?php
   include 'includes/header.php';
   ?>

<section class=" mt-5 pt-5 bg-light">
    <div class="container pt-3">
        <div class="py-2">
            <span class="text-white ">
                <a href="index.php" class="text-decoration-none header-link px-1">Home <i class="fa-solid fa-chevron-right px-1"></i></a>
                    <span class=""><span class="text-dark header-link  px-1">Enquiries<i class="fa-solid fa-chevron-right px-1"></i> </span></span>
                    <span class="text-dark">On-Load Price</span>
            </span> 
        </div>
    </div>
</section>
<section>
    <div class="d-sm-flex align-items-center justify-content-between w-100">

        <!-- in mobile remove the clippath -->
        <div class="col-12 h-100 " style="min-height: 360px; background-image: url(assets/images/on-road-price.jpg); background-position: center; background-size: cover;">
        </div>
    </div>
    <div class="page-banner-content text-center position-absolute px-2">
        <h1>Get on road price</h1>
        <p>Please fill the form to Get on road price</p>
        </div>
</section>

<section class="form-view bg-white pb-4">
  <div class="container-mid">
    <div class="row justify-content-center">
      <div class="col-md-8 col-lg-7">
        <form id="tractor_submit_form" class="form-view-inner form-view-overlay bg-light box-shadow p-3" action="" method="" novalidate="novalidate">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-6 col-md-6 col-sm-6  ">
                    <div class="mt-2">
                        <label class="form-label text-dark">Brand</label>
                        <select class="form-control" name="brand_id" id="brand_id" onchange="getModel(this.value)" required="">
                            <option value="" selected="">Select Brand</option>
                            <option value="64">ACE</option>
                            <option value="211">Digitrac</option>
                            <option value="56">Eicher</option>
                            <option value="60">Escorts</option>
                            <option value="75">Farmtrac</option>
                            <option value="66">Force</option>
                            <option value="223">Hindustan</option>
                            <option value="68">Indo Farm</option>
                            <option value="59">John Deere</option>
                        </select>
                    </div>
                </div>
                <div class="col-12 col-lg-6 col-md-6 col-sm-6  ">
                    <div class="mt-2">
                        <label class="form-label text-dark">Model</label>
                        <select class="form-control" name="model_id" id="modelreview" required="">
                            <option value="">Select Model</option>
                        </select>
                    </div>
                </div>
                <div class="col-12 col-lg-6 col-md-6 col-sm-6 mt-2 ">
                    <div class="mt-2">
                        <label class="form-label text-dark">Name</label>
                        <input type="text" id="search_name" placeholder="Enter Name" name="search_name" class=" search form-control input-group-sm" />
                    </div>
                </div>
                <div class="col-12 col-lg-6 col-md-6 col-sm-6 mt-2 ">
                    <div class=" mt-2">
                        <label class="form-label text-dark">Mobile Number</label>
                        <input type="text" id="search_name" placeholder="Enter Number"  name="search_name" class=" search form-control input-group-sm" />
                    </div>
                </div>
                <div class="col-6 col-sm-6">
                    <div class="mt-2">
                    <label class="form-label text-dark">District</label>
                        <select class="form-control" name="brand_id" id="brand_id"  required=""><option value="" selected="">Select Brand</option><option value="632">Balod</option><option value="770">Baloda Bazar</option><option value="656">Balrampur</option><option value="436">Bastar</option><option value="675">Bemetra</option><option value="725">Bhatapara</option><option value="735">Bijapur</option><option value="437">Bilaspur</option><option value="438">Dantewada</option><option value="439">Dhamtari</option><option value="440">Durg</option><option value="676">Gariaband</option><option value="441">Janjgir - Champa</option><option value="442">Jashpur</option><option value="769">Kabirdham</option><option value="443">Kanker</option><option value="444">Kawardha</option><option value="693">Kondagaon</option><option value="445">Korba</option><option value="446">Koriya</option><option value="447">Mahasamund</option><option value="664">Mungeli</option><option value="729">Narayanpur</option><option value="755">Pendra</option><option value="448">Raigarh</option><option value="449">Raipur</option><option value="450">Rajnandgaon</option><option value="793">Sakti</option><option value="782">Sarangarh</option><option value="702">Sukma</option><option value="700">Surajpur</option><option value="451">Surguja</option><option value="736">Udaipur</option></select>
                        <span class="text-danger"></span>
                    </div>
                </div>
                <div class="col-6 col-sm-6">
                    <div class=" mt-2">
                        <label class="form-label text-dark">Tehsil </label>
                        <input type="text" id="search_name" placeholder="Enter Tehsil"  name="search_name" class=" search form-control input-group-sm" />
                    </div>
                </div> 
                <div class="col-12">
                    <button class="tractor_submit form-submit-btn  text-white bg-success w-100 px-3 mt-2 mb-3" type="submit">CHECK ON ROAD PRICE</button>
                </div>
                <p class="mb-0 text-center">By proceeding ahead you expressly agree to the Tractor Junctions <a href="#" class="text-decoration-none" target="_blank" title="terms and conditions">terms and conditions*</a></p>
            </div>
        </form>
      </div>
    </div>
  </div>
</section>
<section class="bg-light">
    <div class="container mb-4">
        <div class="old_tracter py-3 ">
            <h3 class="fw-bold mt-3">Featured Brands</h3>
        </div>
        <div class="row mt-3 ps-5 py-4 justify-content-center m-0">
            <div class="col-12 col-md-3 col-lg-3 col-sm-3 ">
                <div class="tjcol states-block rounded-3">
                    <div class="brand-main shadow my-2 text-center ">
                        <a class="weblink text-decoration-none text-dark" href="#" title="Sonalika Old Tractors">
                        <img class="img-fluid w-50" src="assets/images/mahindra-1673872647.webp" data-src="h" alt="Sonalika Brand Logo">
                        <p class="mb-0 oneline">Mahindra</p>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-3 col-lg-3 col-sm-3 ">
                <div class="tjcol states-block rounded-3">
                    <div class="brand-main shadow my-2 text-center">
                        <a class="weblink text-decoration-none text-dark" href="#" title="Sonalika Old Tractors">
                        <img class="img-fluid w-50" src="assets/images/swaraj-1608095532.webp" data-src="" alt="Sonalika Brand Logo">
                        <p class="mb-2 oneline">Swaraj</p>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-3 col-lg-3 col-sm-3">
                <div class="tjcol states-block">
                    <div class="brand-main shadow my-2 text-center">
                        <a class="weblink text-decoration-none text-dark" href="#" title="Sonalika Old Tractors">
                        <img  class="img-fluid w-50" src="assets/images/sonalika.png" data-src="" alt="Sonalika Brand Logo">
                        <p class="mb-2 oneline">Sonalika</p>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-3 col-lg-3 col-sm-3">
                <div class="tjcol states-block">
                    <div class="brand-main shadow my-2 text-center">
                        <a class="weblink text-decoration-none text-dark" href="#" title="Sonalika Old Tractors">
                        <img class="img-fluid w-50" src="assets/images/massey-ferguson-1579512590.webp" data-src="" alt="Sonalika Brand Logo">
                        <p class="mb-2 oneline">massey ferguson</p>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-3 col-lg-3 col-sm-3">
                <div class="tjcol states-block">
                    <div class="brand-main shadow my-2 text-center">
                        <a class="weblink text-decoration-none text-dark" href="#" title="Sonalika Old Tractors">
                        <img class="img-fluid w-50" src="assets/images/eicher-1608095225.webp" data-src="" alt="Sonalika Brand Logo">
                        <p class="mb-2  oneline">Eicher</p>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-3 col-lg-3 col-sm-3">
                <div class="tjcol states-block">
                    <div class="brand-main shadow my-2 text-center">
                        <a class="weblink text-decoration-none text-dark" href="#" title="Sonalika Old Tractors">
                        <img class="img-fluid w-50" src="assets/images/farmtrac-1579511831.webp" data-src="" alt="Sonalika Brand Logo">
                        <p class="mb-2  oneline">Farmtrac</p>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-3 col-lg-3 col-sm-3">
                <div class="tjcol states-block">
                    <div class="brand-main shadow my-2 text-center">
                        <a class="weblink text-decoration-none text-dark" href="#" title="Sonalika Old Tractors">
                        <img class="img-fluid w-50" src="assets/images/john-deere-1579511882.webp" data-src="" alt="Sonalika Brand Logo">
                        <p class="mb-2  oneline">john-deere</p>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-3 col-lg-3 col-sm-3">
                <div class="tjcol states-block">
                    <div class="brand-main shadow my-2 text-center">
                        <a class="weblink text-decoration-none text-dark" href="#" title="Sonalika Old Tractors">
                        <img class="img-fluid w-50" src="assets/images/powertrac-1579511958-2.webp" data-src="" alt="Sonalika Brand Logo">
                        <p class="mb-2  oneline">Powertrac</p>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-3 col-lg-3 col-sm-3">
                <div class="tjcol states-block">
                    <div class="brand-main shadow my-2 text-center">
                        <a class="weblink text-decoration-none text-dark" href="#" title="Sonalika Old Tractors">
                        <img class="img-fluid w-50" src="assets/images/new-holland-1579511945.webp" data-src="" alt="Sonalika Brand Logo">
                        <p class="mb-2  oneline">New-holland</p>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-3 col-lg-3 col-sm-3">
                <div class="tjcol states-block">
                    <div class="brand-main shadow my-2 text-center">
                        <a class="weblink text-decoration-none text-dark" href="#" title="Sonalika Old Tractors">
                        <img class="img-fluid w-50" src="assets/images/kubota-1579512571.webp" data-src="" alt="Sonalika Brand Logo">
                        <p class="mb-2  oneline">Kubota</p>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-3 col-lg-3 col-sm-3">
                <div class="tjcol states-block">
                    <div class="brand-main shadow my-2 text-center">
                        <a class="weblink text-decoration-none text-dark" href="#" title="Sonalika Old Tractors">
                        <img class="img-fluid w-50" src="assets/images/escort-1579512292.webp" data-src="" alt="Sonalika Brand Logo">
                        <p class="mb-2  oneline">Escort</p>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-3 col-lg-3 col-sm-3">
                <div class="tjcol states-block">
                    <div class="brand-main shadow my-2 text-center">
                        <a class="weblink text-decoration-none text-dark" href="#" title="Sonalika Old Tractors">
                        <img class="img-fluid w-50" src="assets/images/vst-shakti-1623048840.webp" data-src="" alt="Sonalika Brand Logo">
                        <p class="mb-2  oneline">VST</p>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-3 col-lg-3 col-sm-3">
                <div class="tjcol states-block">
                    <div class="brand-main shadow my-2 text-center">
                        <a class="weblink text-decoration-none text-dark" href="#" title="Sonalika Old Tractors">
                        <img class="img-fluid w-50" src="assets/images/a-c-e-1579511768.webp" data-src="" alt="Sonalika Brand Logo">
                        <p class="mb-2  oneline">ACE</p>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-3 col-lg-3 col-sm-3">
                <div class="tjcol states-block">
                    <div class="brand-main shadow my-2 text-center">
                        <a class="weblink text-decoration-none text-dark" href="#" title="Sonalika Old Tractors">
                        <img class="img-fluid w-50" src="assets/images/same-deutz-fahr-1579511987.webp" data-src="" alt="Sonalika Brand Logo">
                        <p class="mb-2  oneline">Same Deutz Fahr</p>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-3 col-lg-3 col-sm-3">
                <div class="tjcol states-block">
                    <div class="brand-main shadow my-2 text-center">
                        <a class="weblink text-decoration-none text-dark" href="#" title="Sonalika Old Tractors">
                        <img class="img-fluid w-50" src="assets/images/preet-1579511971.webp" data-src="" alt="Sonalika Brand Logo">
                        <p class="mb-2  oneline">Preet</p>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-3 col-lg-3 col-sm-3">
                <div class="tjcol states-block">
                    <div class="brand-main shadow my-2 text-center">
                        <a class="weblink text-decoration-none text-dark" href="#" title="Sonalika Old Tractors">
                        <img class="img-fluid w-50" src="assets/images/ford.webp" data-src="" alt="Sonalika Brand Logo">
                        <p class="mb-2  oneline">Ford</p>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section>
    <div class="container my-5">
        <div class="col-12 assured mt-3">
            <h4 class="fw-bold p-2">More About Tractor Price</h4>
        </div>

        <div>
            <p class="mt-3">Bharat Tractor  presents to you the ease of buying a tractor and the other required implements with clicks of fingers. Best in Class tractors now do not need deep and engrossed research, the revolution of the tractor industry has come. On Road Price section brings to you the details about the pricing and the related queries at your ease, all you need to do is fill up the enquiry, submitting the enquiry will lead you to procuring the privilege of being personally handled and served by our friendly and knowledgeable customer care executives. </p>
        </div>
        <div class="col-12 assured mt-3">
            <h4 class="fw-bold p-2">Get New Tractor On Road Price</h4>
        </div>

        <div>
            <p class="mt-3">Bharat Tractor cares for you, and we know how keen you know the tractor price on road of your selected tractor. We came up with this easy solution, here on this separate page “Tractor On Road Price” you get the on road tractor price in just a few steps. We are following explaining steps to get a new tractor on road price for your comfort.  </p>
            <p class="mt-2">At Bharat Tractor, you can easily find the “Tractor On Road Price '' page. You have to fill the given form like your tractor brand, tractor model no., your name, mobile no., state district, and tehsil. After that, you have to click on the check on road price.</p>
        </div>
    </div>
    
</section>

<?php
    include 'includes/footer.php';
    include 'includes/footertag.php';

    ?>
    </html>