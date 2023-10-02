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

<section class=" bg-light mt-5 pt-5">
    <div class="container py-2">
        <div class="py-2">
            <span class="my-4 text-white">
                <a href="#" class="text-decoration-none header-link px-1">Home <i class="fa-solid fa-chevron-right px-1"></i></a>
                    <span class=""><a href="#" class="text-decoration-none header-link  px-1">Buy Used <i class="fa-solid fa-chevron-right px-1"></i> </a></span>
                    <span class="text-dark"> Buy Old Tractor</span>
            </span> 
        </div>
    </div>
</section>
<section>
    <div class="d-sm-flex align-items-center justify-content-between w-100" >
        <div class="col-md-4 mx-auto mb-4 mb-sm-0 text-center headline">
            <span class="text-secondary text-uppercase"></span>
            <h2 class=" text-dark ">Interested To <span class="text-success">Buy Old Tractor</span></h2>
            <h5 class="mb-4">Fill the form will contact you shortly</h4>
            <!-- <a class="btn px-5 py-3 text-white mt-3 mt-sm-0 btn-success" type="
            button"  data-toggle="modal" data-target="#exampleModal" style="border-radius: 30px; ">Get Valuation</a> -->
            <!-- Button trigger modal -->
            <button type="button" class="btn px-5 py-3 text-white mt-3 mt-sm-0 btn-success" data-bs-toggle="modal" style="border-radius: 30px; "data-bs-target="#exampleModal">
            Click Here
            </button>

            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered">
                <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Interested To Buy Old Tractor</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row justify-content-center">
                        <div class="col-lg-10">
                        <!-- <h3 class="mb-3">Fill The Form</h3> -->
                        <form>
                            <div class="row ">
                                <div class="col-12 col-lg-6 col-sm-5 col-md-6 my-2">
                                    <label for="Tyre" class=" text-dark float-start fw-bold">Name</label>
                                    <input type="text" class="form-control text-dark" placeholder="Enter Name" id="your-name" name="your-name" required>
                                </div>
                                <div class="col-12 col-lg-6 col-sm-5 col-md-6 my-2">
                                    <label for="Mobile" class=" text-dark float-start fw-bold">Mobile Number</label>
                                    <input type="text" class="form-control text-dark" placeholder="Enter Name" id="Mobile" name="Mobile" required>
                                </div>
                                <div class="col-12 col-lg-6 col-sm-5 col-md-6 my-2">
                                    <label for="your-name" class=" text-dark float-start fw-bold">State</label>
                                    <select class="form-select form-control" aria-label="Default select example" name="select_brand" id="select_brand">
                                        <option selected>Select State</option>
                                        <option value="Assam">Assam</option>
                                        <option value="Bihar">Bihar</option>
                                        <option value="Chandigarh">Chandigarh</option>
                                        <option value="Chhattisgarh">Chhattisgarh</option>
                                    </select>
                                </div>
                                <div class="col-12 col-lg-6 col-sm-5 col-md-6 my-2">
                                    <label for="District" class=" text-dark float-start fw-bold">District</label>
                                    <select class="form-select form-control" aria-label="Default select example" name="District" id="District">
                                        <option selected>Select District</option>
                                    </select>
                                </div>
                                <div class="col-12 col-lg-6 col-sm-5 col-md-6 my-2">
                                    <label for="Budget" class=" text-dark float-start fw-bold">Select your Budget</label>
                                    <!-- <input type="text" class="form-control" id="your-name" name="your-name" required> -->
                                    <select class="form-select form-control" aria-label="Default select example" name="Budget" id="Budget">
                                        <option selected>Select your Budget</option>
                                        <option value="1">1-2 lakh</option>
                                        <option value="2">3-4 Lakh</option>
                                        <option value="3">5-7 Lakh </option>
                                        <option value="4">Above 7 Lakh</option>
                                        
                                    </select>
                                </div>
                                <div class="col-12 col-lg-6 col-sm-5 col-md-6 my-2">
                                    <label for="Manufacture" class=" text-dark float-start fw-bold">Manufacture Year</label>
                                    <select class="form-select form-control" aria-label="Default select example" name="Manufacture" id="Manufacture">
                                        <option selected>Select Year</option>
                                        <option value="2023">2023</option>
                                        <option value="2022">2022</option>
                                        <option value="2021">2021</option>
                                        <option value="2020">2020</option>
                                        <option value="2018">2018</option>
                                        <option value="2017">2017</option>
                                        <option value="2016">2016</option>
                                        <option value="2015">2015</option>
                                        <option value="2014">2014</option>
                                    </select>
                                </div>
                                <div class="col-12 col-lg-6 col-sm-5 col-md-6 my-2">
                                    <label for="brand" class=" text-dark float-start fw-bold">Brand</label>
                                    <select class="form-select form-control" aria-label="Default select example" name="brand" id="brand">
                                        <option selected>Select brand</option>
                                        <option value="1st">Mahindra</option>
                                        <option value="2st">Swaraj</option>
                                        <option value="3st">Hindustan</option>
                                        <option value="All">Ford</option>
                                    </select>
                                </div>
                                <div class="col-12 col-lg-6 col-sm-5 col-md-6 my-2">
                                    <label for="model" class=" text-dark float-start fw-bold">Model</label>
                                    <select class="form-select form-control" aria-label="Default select example" name="model" id="model">
                                        <option selected>select Model</option>
                                        <option value="1">3055 DI</option>
                                        <option value="2">3040 DI</option>
                                        <option value="3">3048 DI</option>
                                        <option value="4">2035 DI</option>
                                    </select>
                                </div>
                               
                                
                                <div class="col-12 col-lg-6 col-sm-5 col-md-6 my-2">
                                    <label for="Manufacture" class=" text-dark float-start fw-bold">Manufacture Year</label>
                                    <select class="form-select form-control" aria-label="Default select example" name="Manufacture" id="Manufacture">
                                        <option selected>Select Year</option>
                                        <option value="2023">2023</option>
                                        <option value="2022">2022</option>
                                        <option value="2021">2021</option>
                                        <option value="2020">2020</option>
                                        <option value="2018">2018</option>
                                        <option value="2017">2017</option>
                                        <option value="2016">2016</option>
                                        <option value="2015">2015</option>
                                        <option value="2014">2014</option>
                                    </select>
                                </div>
                                
                                
                                
                                <div class="col-6 mt-4 pt-2">
                                    <button data-res="<?php echo $sum; ?>" type="submit" class="btn-success w-100 fw-bold" >Get OTP</button>
                                </div>
                            </div>
                        </form>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn-info" data-bs-dismiss="modal">Close</button>
                    <button type="button" class=" btn-success">Save changes</button>
                </div>
                </div>
            </div>
            </div>

             
            
        </div>
            
        <!-- in mobile remove the clippath -->
        <div class="col-md-8 h-100 clipped" style="min-height: 350px; background-image: url(assets/images/istockphoto-1033665866-612x612.jpg); background-position: center; background-size: cover;">

        </div>
    </div>
</section>
<section class="bg-light">
    <div class="container">
        <div class="old_tracter py-3 text-center">
            <h3 class="fw-bold mt-3">Old Tractors By Brand</h3>
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
<section class="">
    <div class="container mt-4 ">
        <div class="col-12 assured mt-3">
            <h4 class="fw-bold p-2">Quick Links</h4>
        </div>
        <div class="row mt-4">
            <div class="col-12 col-sm-4 col-lg-4 col-md-4 my-2">
                <ul class="justify-content-center ul-box  ">
                    <li class=""> <a href="#" class="text-dark text-decoration-none"><p>  <i class="fa-solid fa-angles-right"></i> &nbsp; New Tractors </p></a></li>
                    <li class=""> <a href="#" class="text-dark text-decoration-none"><p>  <i class="fa-solid fa-angles-right"></i> &nbsp;Finance </p></a></li>
                    <li class=""> <a href="#" class="text-dark text-decoration-none"><p> <i class="fa-solid fa-angles-right"></i> &nbsp; Popular Tractors</p></a></li>
                </ul>
            </div>
            <div class="col-12 col-sm-4 col-lg-4 col-md-4 my-2">
                <ul class="justify-content-center ul-box  ">
                    <li class=""> <a href="#" class="text-dark text-decoration-none"><p>  <i class="fa-solid fa-angles-right"></i> &nbsp;Insurance </p></a></li>
                    <li class=""> <a href="#" class="text-dark text-decoration-none"><p>  <i class="fa-solid fa-angles-right"></i> &nbsp;Latest Tractors</p></a></li>
                    <li class=""> <a href="#" class="text-dark text-decoration-none"><p> <i class="fa-solid fa-angles-right"></i> &nbsp; Compare</p></a></li>
                </ul>
            </div>
            <div class="col-12 col-sm-4 col-lg-4 col-md-4 my-3">
                <ul class="justify-content-center ul-box  ">
                    <li class=""> <a href="#" class="text-dark text-decoration-none"><p>  <i class="fa-solid fa-angles-right"></i> &nbsp; Upcoming Tractors</p></a></li>
                    <li class=""> <a href="#" class="text-dark text-decoration-none"><p>  <i class="fa-solid fa-angles-right"></i> &nbsp; Tractor News </p></a></li>
                    <li class=""> <a href="#" class="text-dark text-decoration-none"><p> <i class="fa-solid fa-angles-right"></i> &nbsp; Used Tractors</p></a></li>
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