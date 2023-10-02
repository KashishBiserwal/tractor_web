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

<section class="bg-light mt-5 pt-5">
    <div class="container py-2">
        <div class="py-2">
            <span class="my-4 text-white pt-4 ">
                <a href="index.php" class="text-decoration-none header-link px-1">Home <i class="fa-solid fa-chevron-right px-1"></i></a>
                    <span class=""><a href="#" class="text-decoration-none header-link  px-1">Buy Used <i class="fa-solid fa-chevron-right px-1"></i> </a></span>
                    <span class="text-dark">Sell Old Implement</span>
            </span> 
        </div>
    </div>
</section>
<section>
    <div class="d-sm-flex align-items-center justify-content-between w-100">
        <div class="col-md-4 mx-auto mb-4 mb-sm-0 text-center headline ps-4">
            <span class="text-secondary text-uppercase"></span>
            <h2 class=" text-dark ">Sell Your <span class="text-success"> Used Implements</span></h2>
            <h4 class="mb-4">Fill the information to sell your used Implement</h4>
            <!-- <a class="btn px-5 py-3 text-white mt-3 mt-sm-0 btn-success" type="
            button"  data-toggle="modal" data-target="#exampleModal" style="border-radius: 30px; ">Get Valuation</a> -->
            <!-- Button trigger modal -->
            <button type="button" class="btn px-5 py-3 text-white mt-3 mt-sm-0 btn-success" data-bs-toggle="modal" style="border-radius: 27px; "data-bs-target="#exampleModal">
                Sell Used Implements
            </button>

            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg modal-dialog-centered">
                    <div class="modal-content modal_box">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">YOUR IMPLEMENT INFORMATIONS</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="row justify-content-center">
                            <div class="col-lg-10">
                            <!-- <h3 class="mb-3">Fill The Form</h3> -->
                            <form>
                                <div class="row ">
                                    <div class="col-12 my-2">
                                        <label for="location" class=" text-dark float-start fw-bold"> Category</label>
                                        <select class="form-select" aria-label="Default select example">
                                            <option selected>Select Category</option>
                                            <option value="Rotavator">Rotavator</option>
                                            <option value="Mounted">Tractor Mounted Sprayer</option>
                                            <option value="Plough">Plough</option>
                                        </select>
                                    </div>
                                    <div class="col-12 col-lg-6 col-sm-6 col-md-6 my-2">
                                        <label for="location" class=" text-dark float-start fw-bold"> Brand</label>
                                        <select class="form-select" aria-label="Default select example">
                                            <option selected>Select Brand</option>
                                            <option value="Agristar">Agristar</option>
                                            <option value="Agrizone">Agrizone</option>
                                            <option value="Plough">Balwaan</option>
                                        </select>
                                    </div>
                                    <div class="col-12 col-lg-6 col-sm-6 col-md-6 my-2">
                                        <label for="name" class=" text-dark float-start fw-bold">Model Name</label>
                                        <input type="text" class="form-control" id="name" placeholder="Model Name" name="name" required>
                                    </div>
                                    <div class="col-12 col-lg-6 col-sm-5 col-md-6 my-2">
                                        <label for="location" class=" text-dark float-start fw-bold">Purchase Year</label>
                                        <select class="form-select" aria-label="Default select example">
                                            <option selected>Select Purchase Year</option>
                                            <option value="2023">2023</option>
                                            <option value="2022">2022</option>
                                            <option value="2021">2021</option>
                                        </select>
                                    </div>
                                    <div class="col-12 col-lg-6 col-sm-5 col-md-6 mt-4 pt-2">
                                        <button data-res="<?php echo $sum; ?>" type="submit" class=" btn btn-success w-100 fw-bold" >Sell Now</button>
                                    </div>
                                </div>
                            </form>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class=" btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class=" btn btn-success">Save changes</button>
                    </div>
                    </div>
                </div>
            </div>

             
            
        </div>
            
        <!-- in mobile remove the clippath -->
        <div class="col-md-8 h-100 clipped" style="min-height: 350px; background-image: url(assets/images/image_2023_09_02T08_22_01_554Z.png); background-position: center; background-size: cover;">

        </div>
    </div>
</section>

<section>
    <div class="container">
        <div class="sell my-3">
            <h3 class="text-dark assured ps-3">Sell Your<span class="text-success"> Used Implements</span></h3>
        </div>
        <div class="sellcontent">
            <h4 class="text-center">Do you want to sell your used implement online?</h4>
            <p class="text-center">Now you can easily sell your old tractor implements without any tension from sitting at your home</p>
            <p class="text-center"> TractorJunction has come up with a new page ‘Sell Your Used Implements’ where you can comfortably sell your old implement to the right buyer. If you like to sell used tractor implements online then you have to follow a few simple steps.</p>
        </div>
    </div>
</section>


<section class="bg-light">
    <div class="container mt-4 ">
        <div class="col-12 assured mt-3">
            <h4 class="fw-bold p-2">Quick Links</h4>
        </div>
        <div class="row mt-4">
            <div class="col-12 col-sm-4 col-lg-4 col-md-4 my-2">
                <ul class="justify-content-center ul-box  ">
                    <li class=""> <a href="#" class="text-dark text-decoration-none"><p>  <i class="fa-solid fa-angles-right"></i> &nbsp; New Tractors</p></a></li>
                    <li class=""> <a href="#" class="text-dark text-decoration-none"><p>  <i class="fa-solid fa-angles-right"></i> &nbsp; Finance </p></a></li>
                    <li class=""> <a href="#" class="text-dark text-decoration-none"><p> <i class="fa-solid fa-angles-right"></i> &nbsp; Popular Tractors</p></a></li>
                </ul>
            </div>
            <div class="col-12 col-sm-4 col-lg-4 col-md-4 my-2">
                <ul class="justify-content-center ul-box  ">
                    <li class=""> <a href="#" class="text-dark text-decoration-none"><p>  <i class="fa-solid fa-angles-right"></i> &nbsp; Latest Tractors</p></a></li>
                    <li class=""> <a href="#" class="text-dark text-decoration-none"><p>  <i class="fa-solid fa-angles-right"></i> &nbsp; Upcoming Tractors</p></a></li>
                    <li class=""> <a href="#" class="text-dark text-decoration-none"><p> <i class="fa-solid fa-angles-right"></i> &nbsp; Tractor News </p></a></li>
                </ul>
            </div>
            <div class="col-12 col-sm-4 col-lg-4 col-md-4 my-2">
                <ul class="justify-content-center ul-box  ">
                    <li class=""> <a href="#" class="text-dark text-decoration-none"><p>  <i class="fa-solid fa-angles-right"></i> &nbsp; Used Tractors</p></a></li>
                    <li class=""> <a href="#" class="text-dark text-decoration-none"><p>  <i class="fa-solid fa-angles-right"></i> &nbsp; Dealership Enquiry</p></a></li>
                    <li class=""> <a href="#" class="text-dark text-decoration-none"><p> <i class="fa-solid fa-angles-right"></i> &nbsp; Contact / Mail Us</p></a></li>
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