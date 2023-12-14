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

<section>
    <div class="container mt-5 pt-4">
        <div class="pt-5">
            <span class="mt-4 pt-4 ">
                <a href="index.php" class="text-decoration-none header-link px-1">Home <i class="fa-solid fa-chevron-right px-1"></i></a>
                    <span class=""><span class=" header-link  px-1">Brand <i class="fa-solid fa-chevron-right px-1"></i> </span></span>
                    <span class="text-dark"> Mahindra</span>
            </span> 
        </div>
    </div>
</section>

<!-- Mahindra 575 DI XP Plus -->
<section>
    <div class="container">
        <h1 class="mt-3">Kartar 4000</h1>
        <div class="row">
            <div class="col-12 col-lg-6 col-md-6 col-sm-6 mt-5 pt-3">
                <img src="assets/images/40009999.webp" class="w-75" alt="40009999.webp">
            </div>
            <div class="col-12 col-lg-6 col-md-6 col-sm-6">
                <table class="table table-bordered">
                   
                    <tbody>
                        <tr>
                            <td class="fw-bold">Brand</td>
                            <td>Kartar</td>
                        </tr>
                        <tr>
                            <td class="fw-bold">Model Name</td>
                            <td>4000</td>
                        </tr>
                        <tr>
                            <td class="fw-bold">Power</td>
                            <td>101 HP</td>
                        </tr>
                        <tr>
                            <td class="fw-bold">Cutter Bar – Width</td>
                            <td>14 Feet</td>
                        </tr>
                        <tr>
                            <td class="fw-bold">No Of Cylinder</td>
                            <td>6</td>
                        </tr>
                        <tr>
                            <td class="fw-bold">Power Source</td>
                            <td>Self Propelled</td>
                        </tr>
                        <tr>
                            <td class="fw-bold">Crop</td>
                            <td>Multicrop</td>
                        </tr>
                    </tbody>
                </table>
                <div class="row my-3 text-center">
                    <div class="col-12 col-lg-6 col-md-6 col-sm-6">
                        <button type="button" class="btn-success w-100 fw-bold" data-bs-toggle="modal" data-bs-target="#staticBackdrop3">GET BEST PRICE</button>
                    </div>
                    
                    <div class="col-12 col-lg-5 col-md-5 col-sm-5 ms-4 border border-success">
                        <a href="new_tractor_loan.php">
                            <button type="submit" class="text-success w-100 fw-bold" >VIEW LOAN OFFERS</button>
                        </a>    
                    </div>                    
                </div>
            </div>
        </div>       
    </div>
</section>

    <!-- MODAL -->
    <section>
        <div class="modal fade" id="staticBackdrop3" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title ms-1" id="staticBackdropLabel">Request Call Back</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>

                    <!-- MODAL BODY -->
                    <div class="modal-body">
                        <form id="engine_oil_form" class="bg-light"action="">
                            <div class="row">
                                <div class="col-12 col-lg-6 col-md-6 col-sm-6 ">
                                    <div class="form-outline">
                                        <label for="f_name" class="form-label fw-bold text-dark"> <i class="fa-regular fa-user"></i> First Name</label>
                                        <input type="text" class="form-control mb-0" placeholder="Enter Your Name" id="f_name" name="f_name">
                                    </div>
                                </div>
                                <div class="col-12 col-lg-6 col-md-6 col-sm-6 ">
                                    <div class="form-outline">
                                        <label for="last_name" class="form-label fw-bold text-dark"> <i class="fa-regular fa-user"></i> Last Name</label>
                                        <input type="text" class="form-control mb-0" placeholder="Enter Your Name" id="eo_name" name="eo_name">
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6 col-md-6 col-lg-6 mt-3">
                                    <div class="form-outline">
                                        <label for="eo_number" class="form-label text-dark fw-bold"> <i class="fa fa-phone" aria-hidden="true"></i> Phone Number</label>
                                        <input type="text" class="form-control mb-0" placeholder="Enter Number" id="eo_number" name="eo_number" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');">
                                    </div>
                                </div>
                                    <!-- <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                                        <label for="eo_state" class="form-label text-dark fw-bold"> <i class="fas fa-location"></i> Number</label>
                                        <input type="text" placeholder="Enter Mobile number "class="form-control mb-0" id="eo_number" name="eo_number" >
                                        
                                </div> -->
                                <div class="col-12 col-sm-12 col-md-6 col-lg-6 mt-3">
                                    <div class="form-outline">
                                        <label for="eo_state" class="form-label text-dark fw-bold"> <i class="fas fa-location"></i> State</label>
                                        <select class="form-select py-2 " aria-label=".form-select-lg example" id="eo_state" name="eo_state">
                                        <option value="" selected disabled=""> </option>  
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
    </section>

<!-- Kartar 4000 Harvester Features -->
<section>
    <div class="container my-5">
        <div class="about border-success  border-4 text-dark border-start">
            <h2 class="text-dark fw-bold text-start ps-3">Kartar 4000 Harvester Features</h2>

        </div>
        <div class="mt-1">
            <p class="text-dark">Kartar 4000 Tractor Harvester is an efficient machine for farming in India. The farmers are extensively using Kartar 4000 Multicrop harvester for their farms. In addition, Kartar 4000 harvester features are also excellent. That’s why the Kartar 4000 harvester machine is one of India's most preferred farming machines. Kartar 4000 price 2023 is also valuable for farmers. Moreover, the Kartar 4000 harvester machine is filled with highly modern technology to serve better in the field.</p>
        </div>
        <div class="about  text-dark ">
            <h5 class="text-dark text-start">Kartar 4000 Multicrop Combine Harvester Price</h5>
        </div>
        <div class="mt-1">
            <p class="text-dark">Kartar 4000 Multicrop combine harvester price is valuable to the Indian farmers. You can also get a complete Kartar 4000 combine harvester price list at Tractor Junction. On the other hand, the Kartar 4000 combine on road price can differ from state to state due to several factors.</p>
        </div>
        <div class="about  text-dark ">
            <h5 class="text-dark text-start">Kartar 4000 Harvester Features</h5>
        </div>
        <div class="mt-1">
            <p class="text-dark">Let’s know the Kartar 4000 harvester features. The working efficiency and performance of Kartar 4000 Tractor Harvester are also excellent. The engine of this Kartar 4000 has enormous power and comes at value for money Kartar 4000 combine price. So, let’s know more about Kartar 4000 Multicrop harvester at Tractor Junction.</p>
        </div>
     

    </div>
</section>

<!-- Specifications For Kartar 4000 ("51") -->
<section class="mt-3">
    <div class="container">
        <div class="about border-success  border-4 text-dark border-start">
            <h4 class="text-dark fw-bold text-start ps-3">Specifications For Kartar 4000 ("51")</h4>
        </div>
        <h5 class="fw-bold pt-2 ps-2">Engine</h5>

        <table class="table w-75 table-hover table table-striped my-4">
            
            <tbody>
          
                <tr>
                    <td class="w-100">
                        <div class="row w-100">
                            <div class="col-12 col-lg-5 col-md-5 col-sm-5">
                                <p class="mb-1 mt-1">TYPE</p>
                            </div>
                            <div class="col-12 col-lg-7 col-md-7 col-sm-7">
                                <p class="mb-1 mt-1">	Ashok Leyland H6ET1C3RD22/1101 H.P @2200 RPM </p>
                            </div>
                        </div>
                    </td>                  
                </tr>

                <tr>
                    <td class="w-100">
                        <div class="row w-100">
                            <div class="col-12 col-lg-5 col-md-5 col-sm-5">
                                <p class="mb-1 mt-1">No. of Cylinders:</p>
                            </div>
                            <div class="col-12 col-lg-7 col-md-7 col-sm-7">
                                <p class="mb-1 mt-1">6(SIX) </p>
                            </div>
                        </div>
                    </td>                  
                </tr>

                <tr>
                    <td class="w-100">
                        <div class="row w-100">
                            <div class="col-12 col-lg-5 col-md-5 col-sm-5">
                                <p class="mb-1 mt-1">Cooling System</p>
                            </div>
                            <div class="col-12 col-lg-7 col-md-7 col-sm-7">
                                <p class="mb-1 mt-1">Water Cooled</p>
                            </div>
                        </div>
                    </td>                  
                </tr>
                
            </tbody>
        </table>

        <h5 class="fw-bold pt-2 ps-2">CUTTER BAR</h5>
        <table class="table w-75 table-hover table table-striped my-4">
            
            <tbody>

                <tr>
                    <td class="w-100">
                        <div class="row w-100">
                            <div class="col-12 col-lg-5 col-md-5 col-sm-5">
                                <p class="mb-1 mt-1">Width:</p>
                            </div>
                            <div class="col-12 col-lg-7 col-md-7 col-sm-7">
                                <p class="mb-1 mt-1">4199 mm</p>
                            </div>
                        </div>
                    </td>                  
                </tr>

                <tr>
                    <td class="w-100">
                        <div class="row w-100">
                            <div class="col-12 col-lg-5 col-md-5 col-sm-5">
                                <p class="mb-1 mt-1">Height Adjustment:</p>
                            </div>
                            <div class="col-12 col-lg-7 col-md-7 col-sm-7">
                                <p class="mb-1 mt-1">Hydraulically</p>
                            </div>
                        </div>
                    </td>                  
                </tr>

                <tr>
                    <td class="w-100">
                        <div class="row w-100">
                            <div class="col-12 col-lg-5 col-md-5 col-sm-5">
                                <p class="mb-1 mt-1">Cutting Height Max:</p>
                            </div>
                            <div class="col-12 col-lg-7 col-md-7 col-sm-7">
                                <p class="mb-1 mt-1">700 mm</p>
                            </div>
                        </div>
                    </td>                  
                </tr>                

            </tbody>
        </table>

        <h5 class="fw-bold pt-2 ps-2">REEL</h5>
        <table class="table w-75 table-hover table table-striped my-4">
            
            <tbody>

                <tr>
                    <td class="w-100">
                        <div class="row w-100">
                            <div class="col-12 col-lg-5 col-md-5 col-sm-5">
                                <p class="mb-1 mt-1">TYPE:</p>
                            </div>
                            <div class="col-12 col-lg-7 col-md-7 col-sm-7">
                                <p class="mb-1 mt-1">Pick Up</p>
                            </div>
                        </div>
                    </td>                  
                </tr>                  

                <tr>
                    <td class="w-100">
                        <div class="row w-100">
                            <div class="col-12 col-lg-5 col-md-5 col-sm-5">
                                <p class="mb-1 mt-1">Speed Adjustment:</p>
                            </div>
                            <div class="col-12 col-lg-7 col-md-7 col-sm-7">
                                <p class="mb-1 mt-1">Mechanically</p>
                            </div>
                        </div>
                    </td>                  
                </tr>                  

                <tr>
                    <td class="w-100">
                        <div class="row w-100">
                            <div class="col-12 col-lg-5 col-md-5 col-sm-5">
                                <p class="mb-1 mt-1">Height Adjustment:</p>
                            </div>
                            <div class="col-12 col-lg-7 col-md-7 col-sm-7">
                                <p class="mb-1 mt-1">Hydraulically</p>
                            </div>
                        </div>
                    </td>                  
                </tr>                

            </tbody>
        </table>

        <h5 class="fw-bold pt-2 ps-2">Thresher Drum</h5>
        <table class="table w-75 table-hover table table-striped my-4">
            
            <tbody>

                <tr>
                    <td class="w-100">
                        <div class="row w-100">
                            <div class="col-12 col-lg-5 col-md-5 col-sm-5">
                                <p class="mb-1 mt-1">Dia of Drum:</p>
                            </div>
                            <div class="col-12 col-lg-7 col-md-7 col-sm-7">
                                <p class="mb-1 mt-1">600 mm</p>
                            </div>
                        </div>
                    </td>                  
                </tr>

                <tr>
                    <td class="w-100">
                        <div class="row w-100">
                            <div class="col-12 col-lg-5 col-md-5 col-sm-5">
                                <p class="mb-1 mt-1">Length of Drum:</p>
                            </div>
                            <div class="col-12 col-lg-7 col-md-7 col-sm-7">
                                <p class="mb-1 mt-1">1270 mm</p>
                            </div>
                        </div>
                    </td>                  
                </tr>

                <tr>
                    <td class="w-100">
                        <div class="row w-100">
                            <div class="col-12 col-lg-5 col-md-5 col-sm-5">
                                <p class="mb-1 mt-1">Speed of Drum:</p>
                            </div>
                            <div class="col-12 col-lg-7 col-md-7 col-sm-7">
                                <p class="mb-1 mt-1">535 to 1210 rpm</p>
                            </div>
                        </div>
                    </td>                  
                </tr>

                <tr>
                    <td class="w-100">
                        <div class="row w-100">
                            <div class="col-12 col-lg-5 col-md-5 col-sm-5">
                                <p class="mb-1 mt-1">Adjustment:</p>
                            </div>
                            <div class="col-12 col-lg-7 col-md-7 col-sm-7">
                                <p class="mb-1 mt-1">Mechanically</p>
                            </div>
                        </div>
                    </td>                  
                </tr>

                <tr>
                    <td class="w-100">
                        <div class="row w-100">
                            <div class="col-12 col-lg-5 col-md-5 col-sm-5">
                                <p class="mb-1 mt-1">No. of Rasp Bars:</p>
                            </div>
                            <div class="col-12 col-lg-7 col-md-7 col-sm-7">
                                <p class="mb-1 mt-1">8(Eight)</p>
                            </div>
                        </div>
                    </td>                  
                </tr>

                <tr>
                    <td class="w-100">
                        <div class="row w-100">
                            <div class="col-12 col-lg-5 col-md-5 col-sm-5">
                                <p class="mb-1 mt-1">No. of Spikes:</p>
                            </div>
                            <div class="col-12 col-lg-7 col-md-7 col-sm-7">
                                <p class="mb-1 mt-1">128</p>
                            </div>
                        </div>
                    </td>                  
                </tr>

            </tbody>
        </table>

        <h5 class="fw-bold pt-2 ps-2">Concave</h5>
        <table class="table w-75 table-hover table table-striped my-4">
            
            <tbody>
                <tr>
                    <td class="w-100">
                        <div class="row w-100">
                            <div class="col-12 col-lg-5 col-md-5 col-sm-5">
                                <p class="mb-1 mt-1">Clearance Between:</p>
                            </div>
                            <div class="col-12 col-lg-7 col-md-7 col-sm-7">
                                <p class="mb-1 mt-1">16 to 39 mm</p>
                            </div>
                        </div>
                    </td>                  
                </tr>

                <tr>
                    <td class="w-100">
                        <div class="row w-100">
                            <div class="col-12 col-lg-5 col-md-5 col-sm-5">
                                <p class="mb-1 mt-1">Concave & Thresher:</p>
                            </div>
                            <div class="col-12 col-lg-7 col-md-7 col-sm-7">
                                <p class="mb-1 mt-1">3 to 16 mm</p>
                            </div>
                        </div>
                    </td>                  
                </tr>

                <tr>
                    <td class="w-100">
                        <div class="row w-100">
                            <div class="col-12 col-lg-5 col-md-5 col-sm-5">
                                <p class="mb-1 mt-1">No. of Spikes:</p>
                            </div>
                            <div class="col-12 col-lg-7 col-md-7 col-sm-7">
                                <p class="mb-1 mt-1">Mechanically 36</p>
                            </div>
                        </div>
                    </td>                  
                </tr>

            </tbody>
        </table>

        <h5 class="fw-bold pt-2 ps-2">Straw Walkers</h5>
        <table class="table w-75 table-hover table table-striped my-4">
            
            <tbody>
                <tr>
                    <td class="w-100">
                        <div class="row w-100">
                            <div class="col-12 col-lg-5 col-md-5 col-sm-5">
                                <p class="mb-1 mt-1">No. of Straw Walkers :</p>
                            </div>
                            <div class="col-12 col-lg-7 col-md-7 col-sm-7">
                                <p class="mb-1 mt-1">5(FIVE)</p>
                            </div>
                        </div>
                    </td>                  
                </tr>

                <tr>
                    <td class="w-100">
                        <div class="row w-100">
                            <div class="col-12 col-lg-5 col-md-5 col-sm-5">
                                <p class="mb-1 mt-1">Total Area :</p>
                            </div>
                            <div class="col-12 col-lg-7 col-md-7 col-sm-7">
                                <p class="mb-1 mt-1">46565 sq. cm.</p>
                            </div>
                        </div>
                    </td>                  
                </tr>
            </tbody>
        </table>

        <h5 class="fw-bold pt-2 ps-2">Cleaning</h5>
        <table class="table w-75 table-hover table table-striped my-4">
            <tbody>
                <tr>
                    <td class="w-100">
                        <div class="row w-100">
                            <div class="col-12 col-lg-5 col-md-5 col-sm-5">
                                <p class="mb-1 mt-1">Area:</p>
                            </div>
                            <div class="col-12 col-lg-7 col-md-7 col-sm-7">
                                <p class="mb-1 mt-1">16422 sq. cm.</p>
                            </div>
                        </div>
                    </td>                  
                </tr>

                <tr>
                    <td class="w-100">
                        <div class="row w-100">
                            <div class="col-12 col-lg-5 col-md-5 col-sm-5">
                                <p class="mb-1 mt-1">Adjustment:</p>
                            </div>
                            <div class="col-12 col-lg-7 col-md-7 col-sm-7">
                                <p class="mb-1 mt-1">Mechanically</p>
                            </div>
                        </div>
                    </td>                  
                </tr>

            </tbody>
        </table>

        <h5 class="fw-bold pt-2 ps-2">Tyre Size</h5>
        <table class="table w-75 table-hover table table-striped my-4">
            <tbody>
                <tr>
                    <td class="w-100">
                        <div class="row w-100">
                            <div class="col-12 col-lg-5 col-md-5 col-sm-5">
                                <p class="mb-1 mt-1">Front:</p>
                            </div>
                            <div class="col-12 col-lg-7 col-md-7 col-sm-7">
                                <p class="mb-1 mt-1">18.4/15/30</p>
                            </div>
                        </div>
                    </td>                  
                </tr>
                
                <tr>
                    <td class="w-100">
                        <div class="row w-100">
                            <div class="col-12 col-lg-5 col-md-5 col-sm-5">
                                <p class="mb-1 mt-1">Rear/Trolley:</p>
                            </div>
                            <div class="col-12 col-lg-7 col-md-7 col-sm-7">
                                <p class="mb-1 mt-1">9.00 X 16</p>
                            </div>
                        </div>
                    </td>                  
                </tr>
                
            </tbody>
        </table>

        <h5 class="fw-bold pt-2 ps-2">Dimensions</h5>
        <table class="table w-75 table-hover table table-striped my-4">
            <tbody>
                <tr>
                    <td class="w-100">
                        <div class="row w-100">
                            <div class="col-12 col-lg-5 col-md-5 col-sm-5">
                                <p class="mb-1 mt-1">Length:</p>
                            </div>
                            <div class="col-12 col-lg-7 col-md-7 col-sm-7">
                                <p class="mb-1 mt-1">8535 mm</p>
                            </div>
                        </div>
                    </td>                  
                </tr>

                <tr>
                    <td class="w-100">
                        <div class="row w-100">
                            <div class="col-12 col-lg-5 col-md-5 col-sm-5">
                                <p class="mb-1 mt-1">Height:</p>
                            </div>
                            <div class="col-12 col-lg-7 col-md-7 col-sm-7">
                                <p class="mb-1 mt-1">4572 mm</p>
                            </div>
                        </div>
                    </td>                  
                </tr>

                <tr>
                    <td class="w-100">
                        <div class="row w-100">
                            <div class="col-12 col-lg-5 col-md-5 col-sm-5">
                                <p class="mb-1">Min Ground Clearance:</p>
                            </div>
                            <div class="col-12 col-lg-7 col-md-7 col-sm-7">
                                <p class="mb-1">460 mm</p>
                            </div>
                        </div>
                    </td>                  
                </tr>

                <tr>
                    <td class="w-100">
                        <div class="row w-100">
                            <div class="col-12 col-lg-5 col-md-5 col-sm-5">
                                <p class="mb-1 mt-1">Weight:</p>
                            </div>
                            <div class="col-12 col-lg-7 col-md-7 col-sm-7">
                                <p class="mb-1 mt-1">9150 Kgs. (Approx.)</p>
                            </div>
                        </div>
                    </td>                  
                </tr>

            </tbody>
        </table>

        <h5 class="fw-bold pt-2 ps-2">Working Capacity</h5>
        <table class="table w-75 table-hover table table-striped my-4">
            <tbody>
                <tr>
                    <td class="w-100">
                        <div class="row w-100">
                            <div class="col-12 col-lg-5 col-md-5 col-sm-5">
                                <p class="mb-1 mt-1">Wheat:</p>
                            </div>
                            <div class="col-12 col-lg-7 col-md-7 col-sm-7">
                                <p class="mb-1 mt-1">4.5 Acres/hour(approx)</p>
                            </div>
                        </div>
                    </td>                  
                </tr>

                <tr>
                    <td class="w-100">
                        <div class="row w-100">
                            <div class="col-12 col-lg-5 col-md-5 col-sm-5">
                                <p class="mb-1 mt-1">Paddy:</p>
                            </div>
                            <div class="col-12 col-lg-7 col-md-7 col-sm-7">
                                <p class="mb-1 mt-1">4 Acres/hour(approx)</p>
                            </div>
                        </div>
                    </td>                  
                </tr>

            </tbody>
        </table>

    </div>
</section>


        <!-- CARDS SIMILAR HARVETER -->
        <section>
         <div class="container ">
            <h2 class="fw-bold text-dark text-start mt-4 assured ps-3">Similar Harvesters</h3>
            <div class="row">
                <div class="col-12 col-lg-3 col-md-3 col-sm-3 mb-4">
                    <a href="harvester_inner.php" class="h-auto success__stry__item d-flex flex-column text-decoration-none shadow ">
                        <div class="thumb">
                            <div>
                                <img src="assets/images/40009999.webp" class="object-fit-cover w-100" alt="img">
                            </div>
                        </div>
                        <div class="content d-flex flex-column flex-grow-1 ">
                            <div class="power text-center mt-3">
                                <div class="row text-center">
                                    <div class="col-12 text-center">
                                        <p class="fw-bold pe-3 text-primary">Kartar 4000</p>
                                    </div>
                                </div>
                                <div class="row ">
                                   <div class="col-12 "><p class="text-dark ps-2">Cutting Width : 14 Feet</p></div>
                                        
                                </div>    
                            </div>
                        </div>
                        <div class="col-12 btn-success">
                            <button type="button" class="btn btn-success py-2 w-100"></i> 
                                Power : 101 HP
                            </button>
                        </div>
                    </a>
                </div>
                <div class="col-12 col-lg-3 col-md-3 col-sm-3 mb-4">
                    <a href="harvester_inner.php" class="h-auto success__stry__item d-flex flex-column text-decoration-none shadow ">
                        <div class="thumb">
                            <div>
                                <img src="assets/images/912-1646895681.webp" class="object-fit-cover w-100" alt="img">
                            </div>
                        </div>
                        <div class="content d-flex flex-column flex-grow-1 ">
                            <div class="power text-center mt-3">
                                <div class="row text-center">
                                    <div class="col-12 text-center">
                                        <p class="fw-bold pe-3 text-primary">Dasmesh 912</p>
                                    </div>
                                </div>
                                <div class="row ">
                                   <div class="col-12 "><p class="text-dark ps-2">Cutting Width : 14 Feet</p></div>
                                        
                                </div>    
                            </div>
                        </div>
                        <div class="col-12 btn-success">
                            <button type="button" class="btn btn-success py-2 w-100"></i> 
                                Power : 55-75
                            </button>
                        </div>
                    </a>
                </div>
                <div class="col-12 col-lg-3 col-md-3 col-sm-3 mb-4">
                    <a href="harvester_inner.php" class="h-auto success__stry__item d-flex flex-column text-decoration-none shadow ">
                        <div class="thumb">
                            <div>
                                <img src="assets/images/harvester_new.webp" class="object-fit-cover w-100" alt="img">
                            </div>
                        </div>
                        <div class="content d-flex flex-column flex-grow-1 ">
                            <div class="power text-center mt-3">
                                <div class="row text-center">
                                    <div class="col-12 text-center">
                                        <p class="fw-bold pe-3 text-primary">Hind Agro HIND 999</p>
                                    </div>
                                </div>
                                <div class="row ">
                                   <div class="col-12 "><p class="text-dark ps-2">Cutting Width : 4400 Feet</p></div>
                                        
                                </div>    
                            </div>
                        </div>
                        <div class="col-12 btn-success">
                            <button type="button" class="btn btn-success py-2 w-100"></i> 
                                Power : 101 HP
                            </button>
                        </div>
                    </a>
                </div>
                <div class="col-12 col-lg-3 col-md-3 col-sm-3 mb-4">
                    <a href="harvester_inner.php" class="h-auto success__stry__item d-flex flex-column text-decoration-none shadow ">
                        <div class="thumb">
                            <div>
                                <img src="assets/images/40009999.webp" class="object-fit-cover w-100" alt="img">
                            </div>
                        </div>
                        <div class="content d-flex flex-column flex-grow-1 ">
                            <div class="power text-center mt-3">
                                <div class="row text-center">
                                    <div class="col-12 text-center">
                                        <p class="fw-bold pe-3 text-primary">Kartar 4000</p>
                                    </div>
                                </div>
                                <div class="row ">
                                   <div class="col-12 "><p class="text-dark ps-2">Cutting Width : 14 Feet</p></div>
                                        
                                </div>    
                            </div>
                        </div>
                        <div class="col-12 btn-success">
                            <button type="button" class="btn btn-success py-2 w-100"></i> 
                                Power : 101 HP
                            </button>
                        </div>
                    </a>
                </div>
            </div>
         </div>
         <div class="col text-center my-3 pb-5">
            <a href="#" class="btn btn-success btn-lg">View All Harvester</a>
        </div>
    </section>


    <?php
        include 'includes/footer.php';
        include 'includes/footertag.php';
    ?>

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
                            maxlength: 10,
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
                        // },
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
                        // },
                        eo_dist: {
                            required: "Select Your District",
                            // minlength: "First Name must be atleast 3 characters long"
                        }                        
                    },

                });
            })
        });
    </script>

    </html>