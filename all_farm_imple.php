<!DOCTYPE html>
<html lang="en">

<head>
   <?php
   include 'includes/headertag.php';
   include 'includes/header.php';
   ?>
</head>

<body>
<script> var CustomerAPIBaseURL = "<?php echo $CustomerAPIBaseURL; ?>";</script>
    <script> var baseUrl = "<?php echo $baseUrl; ?>";</script>
    <script src="<?php $baseUrl; ?>model/all_farm_imple.js" defer></script>
<section class="mt-5 pt-5">
    <div class="container pt-4">
        <div class="mt-3">
            <span class="text-white">
                <a href="index.php" class="text-decoration-none header-link px-1">Home <i class="fa-solid fa-chevron-right px-1"></i></a>
                    <span class="text-dark"> Implements <i class="fa-solid fa-chevron-right px-1"></i> </span>
                    <span class="text-dark">Tractor Implements</span>
            </span> 
        </div>
    </div>
</section>
<!-- TRACTOR IMPLEMENTS -->
<section >
    <div class="container mt-3">
        <div class="row">
            <div class="col-12 ">  
                <div id="productContainer" class="row py-1"></div>
                <h5 id="noDataMessage" class="text-center mt-4 text-danger" style="display: none;">
                <img src="assets/images/404.gif" class="w-25" alt=""></br>Data not found..!</h5>
                <div class="col text-center mt-3 pb-3">
                    <button id="load_moretract" type="button" class=" btn add_btn btn-success"><i class="fas fa-undo"></i>View All</button>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="bg-light">
    <div class="container">
        <div class="old_tracter py-3 ">
            <h3 class="fw-bold mt-3">Featured Brands</h3>
        </div>
        <div class="row mt-3 ps-5 justify-content-center m-0">
            <div class="col-12 col-md-3 col-lg-3 col-sm-3">
                <div class="tjcol states-block">
                    <div class="brand-main box-shadow mt-2 text-center">
                        <a class="weblink text-decoration-none text-dark" href="#" title="Sonalika Old Tractors">
                        <img class="img-fluid w-50" src="assets/images/mahindra-1673872647.webp" data-src="h" alt="Sonalika Brand Logo">
                        <p class="mb-0 oneline">Mahindra</p>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-3 col-lg-3 col-sm-3">
                <div class="tjcol states-block">
                    <div class="brand-main box-shadow mt-2 text-center">
                        <a class="weblink text-decoration-none text-dark" href="#" title="Sonalika Old Tractors">
                        <img class="img-fluid w-50" src="assets/images/swaraj-1608095532.webp" data-src="" alt="Sonalika Brand Logo">
                        <p class="mb-2 oneline">Swaraj</p>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-3 col-lg-3 col-sm-3">
                <div class="tjcol states-block">
                    <div class="brand-main  box-shadow mt-2 text-center">
                        <a class="weblink text-decoration-none text-dark" href="#" title="Sonalika Old Tractors">
                        <img  class="img-fluid w-50" src="assets/images/sonalika.png" data-src="" alt="Sonalika Brand Logo">
                        <p class="mb-2 oneline">Sonalika</p>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-3 col-lg-3 col-sm-3">
                <div class="tjcol states-block">
                    <div class="brand-main box-shadow mt-2 text-center">
                        <a class="weblink text-decoration-none text-dark" href="#" title="Sonalika Old Tractors">
                        <img class="img-fluid w-50" src="assets/images/massey-ferguson-1579512590.webp" data-src="" alt="Sonalika Brand Logo">
                        <p class="mb-2 oneline">massey ferguson</p>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-3 col-lg-3 col-sm-3">
                <div class="tjcol states-block">
                    <div class="brand-main box-shadow mt-2 text-center">
                        <a class="weblink text-decoration-none text-dark" href="#" title="Sonalika Old Tractors">
                        <img class="img-fluid w-50" src="assets/images/eicher-1608095225.webp" data-src="" alt="Sonalika Brand Logo">
                        <p class="mb-2  oneline">Eicher</p>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-3 col-lg-3 col-sm-3">
                <div class="tjcol states-block">
                    <div class="brand-main box-shadow mt-2 text-center">
                        <a class="weblink text-decoration-none text-dark" href="#" title="Sonalika Old Tractors">
                        <img class="img-fluid w-50" src="assets/images/farmtrac-1579511831.webp" data-src="" alt="Sonalika Brand Logo">
                        <p class="mb-2  oneline">Farmtrac</p>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-3 col-lg-3 col-sm-3">
                <div class="tjcol states-block">
                    <div class="brand-main box-shadow mt-2 text-center">
                        <a class="weblink text-decoration-none text-dark" href="#" title="Sonalika Old Tractors">
                        <img class="img-fluid w-50" src="assets/images/john-deere-1579511882.webp" data-src="" alt="Sonalika Brand Logo">
                        <p class="mb-2  oneline">john-deere</p>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-3 col-lg-3 col-sm-3">
                <div class="tjcol states-block">
                    <div class="brand-main box-shadow mt-2 text-center">
                        <a class="weblink text-decoration-none text-dark" href="#" title="Sonalika Old Tractors">
                        <img class="img-fluid w-50" src="assets/images/powertrac-1579511958-2.webp" data-src="" alt="Sonalika Brand Logo">
                        <p class="mb-2  oneline">Powertrac</p>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-3 col-lg-3 col-sm-3">
                <div class="tjcol states-block">
                    <div class="brand-main box-shadow mt-2 text-center">
                        <a class="weblink text-decoration-none text-dark" href="#" title="Sonalika Old Tractors">
                        <img class="img-fluid w-50" src="assets/images/new-holland-1579511945.webp" data-src="" alt="Sonalika Brand Logo">
                        <p class="mb-2  oneline">New-holland</p>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-3 col-lg-3 col-sm-3">
                <div class="tjcol states-block">
                    <div class="brand-main box-shadow mt-2 text-center">
                        <a class="weblink text-decoration-none text-dark" href="#" title="Sonalika Old Tractors">
                        <img class="img-fluid w-50" src="assets/images/kubota-1579512571.webp" data-src="" alt="Sonalika Brand Logo">
                        <p class="mb-2  oneline">Kubota</p>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-3 col-lg-3 col-sm-3">
                <div class="tjcol states-block">
                    <div class="brand-main box-shadow mt-2 text-center">
                        <a class="weblink text-decoration-none text-dark" href="#" title="Sonalika Old Tractors">
                        <img class="img-fluid w-50" src="assets/images/escort-1579512292.webp" data-src="" alt="Sonalika Brand Logo">
                        <p class="mb-2  oneline">Escort</p>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-3 col-lg-3 col-sm-3">
                <div class="tjcol states-block">
                    <div class="brand-main box-shadow mt-2 text-center">
                        <a class="weblink text-decoration-none text-dark" href="#" title="Sonalika Old Tractors">
                        <img class="img-fluid w-50" src="assets/images/vst-shakti-1623048840.webp" data-src="" alt="Sonalika Brand Logo">
                        <p class="mb-2  oneline">VST</p>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-3 col-lg-3 col-sm-3">
                <div class="tjcol states-block">
                    <div class="brand-main box-shadow mt-2 text-center">
                        <a class="weblink text-decoration-none text-dark" href="#" title="Sonalika Old Tractors">
                        <img class="img-fluid w-50" src="assets/images/a-c-e-1579511768.webp" data-src="" alt="Sonalika Brand Logo">
                        <p class="mb-2  oneline">ACE</p>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-3 col-lg-3 col-sm-3">
                <div class="tjcol states-block">
                    <div class="brand-main box-shadow mt-2 text-center">
                        <a class="weblink text-decoration-none text-dark" href="#" title="Sonalika Old Tractors">
                        <img class="img-fluid w-50" src="assets/images/same-deutz-fahr-1579511987.webp" data-src="" alt="Sonalika Brand Logo">
                        <p class="mb-2  oneline">Same Deutz Fahr</p>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-3 col-lg-3 col-sm-3">
                <div class="tjcol states-block">
                    <div class="brand-main box-shadow mt-2 text-center">
                        <a class="weblink text-decoration-none text-dark" href="#" title="Sonalika Old Tractors">
                        <img class="img-fluid w-50" src="assets/images/preet-1579511971.webp" data-src="" alt="Sonalika Brand Logo">
                        <p class="mb-2  oneline">Preet</p>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-3 col-lg-3 col-sm-3">
                <div class="tjcol states-block">
                    <div class="brand-main box-shadow mt-2 text-center">
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
    <div class="container py-4">
        <div class="old_tracter py-3 float-left">
            <h2 class="fw-bold text-dark mt-3">About Tractor Implements</h3>
        </div>
        <div class="row">
            <a href="#" class="col-12 col-lg-4 col-md-4 col-sm-4 my-2 text-decoration-none text-dark text-center ">
                <div class="card-1 py-3 mt-2 px-2 bg-light rounded-4">
                    <h3 class="text-center fw-bold"> Rotavator </h3>
                    <p class=" py-2"> <strong class="text-success">Rotavator </strong>is a secondary tilling equipment that churns the soil to organise the fine seedbed for seeding and planting. It has a sequence of rotating knives to break and turn the ground.</p>
                </div>
            </a>
            <a href="#" class="col-12 col-lg-4 col-md-4 col-sm-4 my-2 text-decoration-none text-dark text-center ">
                <div class="card-1 py-3 mt-2 px-2 bg-light rounded-4">
                    <h3 class="text-center fw-bold">  Seed Drills</h3>
                    <p class=" py-2"> <strong class="text-success">seed drill </strong> is a farming machine that helps to sow seeds at a specific depth and distance inside the soil. Also, it spreads seeds evenly by growing them at a proper seeding rate and depth.</p>
                </div>
            </a>
            <a href="#" class="col-12 col-lg-4 col-md-4 col-sm-4 my-2 text-decoration-none text-dark text-center ">
                <div class="card-1 py-3 mt-2 px-2 bg-light rounded-4">
                    <h3 class="text-center fw-bold"> Baler  </h3>
                    <p class=" py-2"> <strong class="text-success">Baler </strong> is a necessary farm implement, used to make bales of grass from the field. This machine collects grass, straws and other materials and processes them to make neat bales.</p>
                </div>
            </a>
            <a href="#" class="col-12 col-lg-4 col-md-4 col-sm-4 my-2 text-decoration-none text-dark text-center ">
                <div class="card-1 py-3 mt-2 px-2 bg-light rounded-4">
                    <h3 class="text-center fw-bold">  Sprayer </h3>
                    <p class=" py-2"> <strong class="text-success">Sprayer </strong>is a farming tool that helps in the distribution of chemicals such as pesticides, herbicides or weedicides. Moreover, farmers use this implement to do efficient spraying tasks.</p>
                </div>
            </a>
            <a href="#" class="col-12 col-lg-4 col-md-4 col-sm-4 my-2 text-decoration-none text-dark text-center ">
                <div class="card-1 py-3 mt-2 px-2 bg-light rounded-4">
                    <h3 class="text-center fw-bold"> Cultivator </h3>
                    <p class=" py-2"> <strong class="text-success">cultivator </strong>cultivator has many applications. It works in secondary tillage and improves soil fertility by breaking soil clods and burying previously grown crops.</p>
                </div>
            </a>
            <a href="#" class="col-12 col-lg-4 col-md-4 col-sm-4 my-2 text-decoration-none text-dark text-center ">
                <div class="card-1 py-3 mt-2 px-2 bg-light rounded-4">
                    <h3 class="text-center fw-bold"> Planter</h3>
                    <p class=" py-2"> <strong class="text-success">Planters  </strong>make planting tasks easier as they help grow seedlings and large-sized seeds. This machine is recommended for its accuracy in producing at a specific depth.</p>
                </div>
            </a>
            <a href="#" class="col-12 col-lg-4 col-md-4 col-sm-4 my-2 text-decoration-none text-dark text-center">
                <div class="card-1 py-3 mt-2 px-2 bg-light rounded-4">
                    <h3 class="text-center fw-bold text-success"> Mulcher </h3>
                    <p class=" py-2"> <strong class="text-success">Mulcher </strong> is a tractor-drawn farming equipment utilised in cutting the unnecessary tiny plants, bushes and trees which are present at the base of the crops.</p>
                </div>
            </a>
            <a href="#" class="col-12 col-lg-4 col-md-4 col-sm-4 my-2 text-decoration-none text-dark text-center">
                <div class="card-1 py-3 mt-2 px-2  bg-light rounded-4">
                    <h3 class="text-center fw-bold text-success">Combine harvester </h3>
                    <p class=" py-2"> <strong class="text-success">combine harvester </strong> can either be self-propelled or tractor mounted, and it is used to obtain grains from the crops by moving in the whole field.</p>
                </div>
            </a>
            <a href="#" class="col-12 col-lg-4 col-md-4 col-sm-4 my-2 text-decoration-none text-dark text-center">
                <div class="card-1 py-3 mt-2 px-2  bg-light rounded-4">
                    <h3 class="text-center fw-bold text-success">Power tiller</h3>
                    <p class=" py-2"> <strong class="text-success"> power tiller </strong>is a type of farming equipment that is used to prepare the soil, sowing, and plant seeds & spraying fertilizers.</p>
                </div>
            </a>
        </div>
    </div>
</section>

<section class="">
    <div class="container mt-4 ">
        <div class="col-12 assured mt-3">
            <h4 class="fw-bold p-2">More Implements Types</h4>
        </div>
        <div class="row mt-4">
            <div class="col-12 col-sm-4 col-lg-4 col-md-4 my-2">
                <ul class="justify-content-center ul-box  ">
                    <li class=""> <a href="#" class="text-dark text-decoration-none"><p>  <i class="fa-solid fa-angles-right"></i> &nbsp; Rotavator</p></a></li>
                    <li class=""> <a href="#" class="text-dark text-decoration-none"><p>  <i class="fa-solid fa-angles-right"></i> &nbsp; Tractor Mounted Sprayer </p></a></li>
                    <li class=""> <a href="#" class="text-dark text-decoration-none"><p> <i class="fa-solid fa-angles-right"></i> &nbsp; Plough </p></a></li>
                </ul>
            </div>
            <div class="col-12 col-sm-4 col-lg-4 col-md-4 my-2">
                <ul class="justify-content-center ul-box  ">
                    <li class=""> <a href="#" class="text-dark text-decoration-none"><p>  <i class="fa-solid fa-angles-right"></i> &nbsp; Cultivator </p></a></li>
                    <li class=""> <a href="#" class="text-dark text-decoration-none"><p>  <i class="fa-solid fa-angles-right"></i> &nbsp; Thresher </p></a></li>
                    <li class=""> <a href="#" class="text-dark text-decoration-none"><p> <i class="fa-solid fa-angles-right"></i> &nbsp; Assured Used Tractor In Surajpur </p></a></li>
                </ul>
            </div>
            <div class="col-12 col-sm-4 col-lg-4 col-md-4 my-2">
                <ul class="justify-content-center ul-box  ">
                    <li class=""> <a href="#" class="text-dark text-decoration-none"><p>  <i class="fa-solid fa-angles-right"></i> &nbsp; Harrow</p></a></li>
                    <li class=""> <a href="#" class="text-dark text-decoration-none"><p>  <i class="fa-solid fa-angles-right"></i> &nbsp; Disc harrow</p></a></li>
                    <li class=""> <a href="#" class="text-dark text-decoration-none"><p> <i class="fa-solid fa-angles-right"></i> &nbsp; Tractor Trailer</p></a></li>
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