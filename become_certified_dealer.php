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
                <a href="certified_dealers.php" class="text-decoration-none header-link px-1">Certified Dealers <i class="fa-solid fa-chevron-right px-1"></i></a>
                <span class="text-dark">Become Certified Dealer</span>
            </div>
        </div>
    </section>

    <section>
        <div class="d-sm-flex align-items-center justify-content-between w-100">
            <div class="col-12 h-100 " style="min-height: 360px; background-image: url(assets/images/becomeadealertimg.webp); background-position: center; background-size: cover;"></div>
        </div>
        <div class="page-banner-content position-absolute mt-4 px-2">
            <div class="row w-100 ms-5 text-dark">
                <div class="col-12 text-center">
                    <h1>Join TractorJunction as Certified Dealers</h1>
                    <p class="fw-bold">Get huge amount of enquiries for a perfect buisness. For enquiry call or</p>
                    <p class="fw-bold">WhatsApp on 8769-934-402</p>
                <div>                
            </div>
        </div>
    </section>

    <!-- FORM -->
    <section class="form-view bg-white pb-4">
        <!-- <div class="container-lg bg-light"> -->
            <div class="container-mid" style="position: relative;">
                <div class="row justify-content-center">
                    <div class="col-md-8 col-lg-7">
                        <form id="dealership_enq_from" class="form-view-inner form-view-overlay bg-light box-shadow p-3" action="" method="" >
                            <div class="row justify-content-center">
                                <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                                    <div class="mt-2">
                                        <label class="form-label text-dark">First Name</label>
                                        <input type="text" class="form-control" id="f_name" name="f_name">
                                    </div>
                                </div>
                                <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                                    <div class="mt-2">
                                        <label class="form-label text-dark">Last Name</label>
                                        <input type="text" class="form-control" id="l_name" name="l_name">
                                    </div>
                                </div>
                                <div class="col-12 col-lg-6 col-md-6 col-sm-6">
                                    <div class="mt-2">
                                        <label class="form-label text-dark">Mobile Number</label>
                                        <input type="text" class="form-control" id="mob_num" name="mob_num">
                                    </div>
                                </div>
                                <div class="col-12 col-lg-6 col-md-6 col-sm-6">
                                    <div class="mt-2">
                                        <label class="form-label text-dark">Email</label>
                                        <input type="text" class="form-control" id="_email" name="mob_num">
                                    </div>
                                </div>
                                <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                                    <label for="yr_state" class="form-label text-dark fw-bold"> <i class="fas fa-location"></i> State</label>
                                    <select class="form-select py-2" id="_state" name="_state"aria-label=".form-select-lg example">
                                        <option selected>Select State</option>
                                        <option value="1">Chhattisgarh</option>
                                        <option value="2">Other</option>
                                    </select>
                                </div>
                                <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                                    <label for="yr_dist" class="form-label text-dark"><i class="fa-solid fa-location-dot"></i> District</label>
                                    <select class="form-select py-2" id="_district" name="_district" aria-label=".form-select-lg example">
                                        <option selected>Select District</option>
                                        <option value="1">Raipur</option>
                                        <option value="2">Bilaspur</option>
                                        <option value="2">Durg</option>
                                    </select>
                                </div>
                                <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                                    <label for="yr_price" class="form-label text-dark"> Tehsil</label>
                                    <input type="yr_price" class="form-control" placeholder="Enter Tehsil" id="_tehsil" name="_tehsil">
                                </div>
                                <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                                    <label for="yr_dist" class="form-label text-dark">Brand</label>
                                    <select class="form-select py-2 " id="_brand" name="_brand"aria-label=".form-select-lg example">
                                        <option selected>Select Brand</option>
                                        <option value="1">Mahindra</option>
                                        <option value="2">Swaraj</option>
                                        <option value="2">Powertrac</option>
                                    </select>
                                </div>
                                <div class="col-12 col-lg-12 col-md-12 col-sm-12">
                                    <div class="mt-2">
                                        <label class="form-label text-dark">Message</label>
                                        <textarea rows="2" class="form-control" id="_msg" name="message"></textarea>
                                    </div>
                                </div>
                                <div class="text-center my-3">
                                    <button type="submit" id="delership_enq_btn" class="btn btn-success px-5 w-100 ">Click Here</button>         
                                </div>        
                                <p class="mb-0 text-center">By proceeding ahead you expressly agree to the Tractor Junctions <a href="#" class="text-decoration-none" target="_blank" title="terms and conditions">terms and conditions*</a></p>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        <!-- </div> -->
    </section>



    <?php
        include 'includes/footer.php';
        include 'includes/footertag.php';
        
    ?>
    
</body>
</html>