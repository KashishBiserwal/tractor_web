<!DOCTYPE html>
<html lang="en">

<head>
 
<?php
include 'includes/headertag.php';
   include 'includes/headertagadmin.php';
   include 'includes/footertag.php';
   
   ?> 
<script> var APIBaseURL = "<?php echo $APIBaseURL; ?>";</script>
<script> var baseUrl = "<?php echo $baseUrl; ?>";</script>
    <script src="<?php $baseUrl; ?>model/tyre.js"></script>
</head>

<body>

    <head>
    
        <style>
        .form-outline .form-label {
            color: #454444;
            font-weight: 500;
            font-size: 18px;
            margin-bottom: 5px;
            position: absolute;
            margin-top: -12px;
            background: #fff;
            margin-left: 23px;
        }

        .error {
            color: red !important;
            margin-bottom: 2px;
            font-size: 13px;
        }
        </style>
    </head>

    <body>
        <?php
   include 'includes/header.php';
   ?>

        <section class="mt-5 pt-4 bg-light">
            <div class="container ">
                <div class="mt-5 pt-4">
                    <span class="mt-5 text-white">
                        <a href="index.php" class="text-decoration-none header-link px-1">Home <i
                                class="fa-solid fa-chevron-right px-1"></i></a>

                        <span class="text-dark p"> Popular Tractor</span>
                    </span>
                </div>
            </div>
        </section>
        <section>
            <div class="container my-4">
                <div class="row">
                    <div class="col-12 col-sm-9 col-lg-9 col-md-9">
                        <h3 class="pb-3 fw-bold"> Tractor Tyres <span class="text-success fw-bold">In
                                INDIA</span>
                        </h3>
                        <div id="productContainer" class="row">
                            <!-- <div class="col-12 col-lg-4 col-md-4 col-sm-4 mb-3">
                                <div class="h-auto success__stry__item d-flex flex-column shadow ">
                                    <div class="thumb">
                                        <a href="tyre_inner.php">
                                            <div class="ratio ratio-16x9">

                                                <img src="assets/images/mrf_tyre.png" class="" alt="img">

                                            </div>
                                        </a>
                                    </div>
                                    <div class="content d-flex flex-column flex-grow-1 ">
                                        <div class="caption text-center">
                                            <a href="tyre_inner.php" class="text-decoration-none text-dark">
                                                <p class="pt-3"><strong
                                                        class="series_tractor_strong text-center h6 fw-bold ">MRF SHAKTI
                                                        LIFE 13.6 - 28</strong></p>
                                            </a>
                                        </div>
                                        <div class="power">
                                            <a href="tyre_inner.php" class="text-decoration-none text-dark">
                                                <div class="row text-center ">
                                                    <div class="col-4 col-lg-4 col-md-4 col-sm-4">

                                                        <p class="text-dark ">Tractor</p>
                                                    </div>
                                                    <div class="col-4 col-lg-4 col-md-4 col-sm-4">

                                                        <p class="text-dark"> Rear</p>
                                                    </div>
                                                    <div class="col-4 col-lg-4 col-md-4 col-sm-4">

                                                        <p id="adduser" type="" class="text-dark">18.4-30
                                                        </p>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-12">
                                            <button id="adduser" type="button" class="add_btn  btn-success w-100"
                                                data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                                                Get Price</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static"
                                    data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel"
                                    aria-hidden="true">
                                    <div class="modal-dialog modal-lg modal-dialog-centered">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title text-dark fw-bold" id="staticBackdropLabel">Fill
                                                    the form to Get Tyre Price MRF SHAKTI LIFE 13.6 - 28</h4>
                                            </div>
                                            <div class="modal-body">
                                                <div class="model-cont">
                                                    <form id="hire_inner" name="hire_inner" method="post">
                                                        <div class="row">
                                                            <div class="col-12 col-sm-12 col-md-4 col-lg-4 mt-4">
                                                                <div class="form-outline">
                                                                    <label class="form-label" for="first_name">First
                                                                        Name</label>
                                                                    <input type="text" id="first_name" name="first_name"
                                                                        class=" data_search form-control input-group-sm py-2" />
                                                                </div>
                                                            </div>
                                                            <div class="col-12 col-sm-12 col-md-4 col-lg-4 mt-4">
                                                                <div class="form-outline">
                                                                    <label class="form-label" for="last_name">Last
                                                                        Name</label>
                                                                    <input type="text" id="last_name" name="last_name"
                                                                        class=" data_search form-control input-group-sm py-2" />
                                                                </div>
                                                            </div>
                                                            <div class="col-12 col-sm-12 col-md-4 col-lg-4 mt-4">
                                                                <div class="form-outline">
                                                                    <label class="form-label" for="mobile_number">Mobile
                                                                        Number</label>
                                                                    <input type="text" id="mobile_number"
                                                                        name="mobile_number"
                                                                        class=" data_search form-control input-group-sm py-2" />
                                                                </div>
                                                            </div>
                                                            <div class="col-12 col-sm-12 col-md-4 col-lg-4 mt-4">
                                                                <div class="form-outline">
                                                                    <label class="form-label" for="state">State</label>
                                                                    <select class="form-select py-2"
                                                                        aria-label="Default select example" id="state"
                                                                        name="state">
                                                                        <option selected></option>
                                                                        <option value="1">New Tractor Loan</option>
                                                                        <option value="2">Used Tractor Loan,</option>
                                                                        <option value="3">Loan Against Tractor</option>
                                                                        <option value="4">Harvester Loan</option>
                                                                        <option value="5">Used Harvester Loan</option>
                                                                        <option value="6">Implement Loan</option>
                                                                        <option value="7">Personal Loan</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="col-12 col-sm-12 col-md-4 col-lg-4 mt-4">
                                                                <div class="form-outline">
                                                                    <label class="form-label"
                                                                        for="district">District</label>
                                                                    <select class="form-select py-2"
                                                                        aria-label="Default select example"
                                                                        name="district" id="district">
                                                                        <option selected></option>
                                                                        <option value="1">name1</option>
                                                                        <option value="2">name2</option>
                                                                        <option value="3">name3</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="col-12 col-sm-12 col-md-4 col-lg-4 mt-4">
                                                                <div class="form-outline">
                                                                    <label class="form-label"
                                                                        for="taluka">Tehsil</label>
                                                                    <select class="form-select py-2"
                                                                        aria-label="Default select example"
                                                                        name="taluka" id="taluka">
                                                                        <option selected></option>
                                                                        <option value="1">name1</option>
                                                                        <option value="2">name2</option>
                                                                        <option value="3">name3</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-bs-dismiss="modal">Close</button>
                                                <button type="button" id="button_hire"
                                                    class="btn btn-danger">Request</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> -->
                           

                        </div>
                        <div class="col-12 text-center mt-3 pt-2 ">
                            <button id="load_moretract" type="button" class="add_btn btn btn-success">
                                <i class="fas fa-undo"></i> Load More Tyres</button>
                        </div>
                    </div>

                    <div class="col-12 col-sm-3 col-lg-3 col-md-3">
                    <div class=" row mb-3" id="">
                        <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                            <div class=" row text-center">
                                <div class="col-12 col-sm-6 col-lg-6 col-md-6 g-1">
                                    <button id="adduser" type="button" class="add_btn btn btn-success">
                                        <i class="fas fa-undo"></i> Reset </button>
                                </div>
                                <div class="col-12 col-sm-6 col-lg-6 col-md-6 g-1">
                                    <button id="adduser" type="button" class="add_btn btn btn-success">
                                        <i class="fas fa-filter"></i> Apply Filter </button>
                                </div>

                            </div>
                        </div>
                    </div>

                        <div class="scrollbar mb-3" id=" my-2">
                            <div class="force-overflow">
                                <h5 class=" ps-1 text-dark fw-bold  pt-2">Search By Brand</h5>
                                <div class="HP py-2">
                                    <input type="checkbox" class="checkbox-round ms-3" value="Mahindra" /><span
                                        class="ps-2 fs-6">JK Tyre</span><br />
                                    <input type="checkbox" class="checkbox-round ms-3" value="Farmtrac" /><span
                                        class="ps-2 fs-6">Apollo Tyre</span><br />
                                    <input type="checkbox" class="checkbox-round ms-3" value="Swaraj" /><span
                                        class="ps-2 fs-6">BKT Tyre</span><br />
                                    <input type="checkbox" class="checkbox-round ms-3" value="Massey" /><span
                                        class="ps-2 fs-6">CEAT Tyre</span><br />
                                    <input type="checkbox" class="checkbox-round ms-3" value="Powertrac" /><span
                                        class="ps-2 fs-6">Good Year</span><br />
                                    <input type="checkbox" class="checkbox-round ms-3" value="Sonalika" /><span
                                        class="ps-2 fs-6">MRF</span><br />
                                    <input type="checkbox" class="checkbox-round ms-3" value="Eicher" /><span
                                        class="ps-2 fs-6">Birla Tyres</span><br />
                                </div>
                            </div>
                        </div>
                        <div class=" mb-3" id="">
                            <div class="force-overflow">
                                <div class="price py-2 ">
                                    <h5 class=" ps-3 text-dark fw-bold mb-3">Search By Type</h5>
                                    <input type="checkbox" class="checkbox-round ms-3" value="0-3" /><span
                                        class="ps-2 fs-6">Front</span><br />
                                    <input type="checkbox" class="checkbox-round ms-3" value="0-3" /><span
                                        class="ps-2 fs-6">Rear</span><br />
                                </div>
                            </div>
                        </div>
                        <div class="scrollbar mb-3" id="">
                            <div class="force-overflow">
                                <h5 class=" ps-1 text-dark fw-bold pt-2">Search By Size</h5>
                                <div class="HP py-2">
                                    <input type="checkbox" class="checkbox-round ms-3" value="0-20" /><span
                                        class="ps-2 fs-6">13.5-28</span><br />
                                    <input type="checkbox" class="checkbox-round ms-3" value="21-30" /><span
                                        class="ps-2 fs-6">16.9-28</span><br />
                                    <input type="checkbox" class="checkbox-round ms-3" value="31-40" /><span
                                        class="ps-2 fs-6">14.9-28</span><br />
                                    <input type="checkbox" class="checkbox-round ms-3" value="41-50" /><span
                                        class="ps-2 fs-6">13.6-28</span><br />
                                    <input type="checkbox" class="checkbox-round ms-3" value="51-60" /><span
                                        class="ps-2 fs-6">304/85-28</span><br />
                                    <input type="checkbox" class="checkbox-round ms-3" value="61-70" /><span
                                        class="ps-2 fs-6">12.4-28</span><br />
                                    <input type="checkbox" class="checkbox-round ms-3" value="71-80" /><span
                                        class="ps-2 fs-6">6.50-20</span><br />
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>



        <!-- <section class="my-4">
            <div class="container my-5">
                <h3 class="fw-bold assured px-2 py-2">About Tyre</h3>
                <div class="" role="alert">
                    <p class="text-dark">Well, if you are thinking of purchasing a tyre and if you are confused
                        which tyre fits into your tractor, then we are here to solve your problems and provide you with
                        the right information about the tyres. There are so many tyres available in the market but the
                        point is which range of tyres are suitable for your tractors. It depends on your tractor weight
                        and other specifications of the tractors.</p>
                </div>
            </div>
        </section> -->
      

        <section>
            <div class="container">
                <h4 class="fw-bold assured px-2">Quick Links</h4>
                <div class="row my-4">
                    <div class="col-12 col-lg-4 col-md-4 col-sm-4 py-2">
                        <a href="#" id="adduser"
                            class="btn btn-outline-success text-decoration-none border-2 p-2 w-100">
                            <i class="fas fa-bolt"></i>TRACTOR PRICE</a>
                    </div>
                    <div class="col-12 col-lg-4 col-md-4 col-sm-4 py-2">
                        <a href="#" id="adduser"
                            class=" btn btn-outline-success text-decoration-none border-2 py-2 px-3 w-100">
                            <i class="fas fa-bolt"></i>TRACTOR</a>
                    </div>
                    <div class="col-12 col-lg-4 col-md-4 col-sm-4 py-2">
                        <a href="#" id="adduser"
                            class=" btn btn-outline-success text-decoration-none border-2 py-2 px-3 w-100">
                            <i class="fas fa-bolt"></i>HARVESTERS</a>
                    </div>
                    <div class="col-12 col-lg-4 col-md-4 col-sm-4 py-2">
                        <a href="#" id="adduser"
                            class="btn btn-outline-success text-decoration-none  border-2 py-2 px-3 w-100">
                            <i class="fas fa-bolt"></i>SECOND HAND TRACTOR</a>
                    </div>
                    <div class="col-12 col-lg-4 col-md-4 col-sm-4 py-2">
                        <a href="#" id="adduser"
                            class="btn btn-outline-success text-decoration-none border-2 py-2 px-3 w-100">
                            <i class="fas fa-bolt"></i>EASY FINANCE</a>
                    </div>
                    <div class="col-12 col-lg-4 col-md-4 col-sm-4 py-2">
                        <a href="#" id="adduser"
                            class="btn btn-outline-success text-decoration-none border-2 py-2 px-3 w-100">
                            <i class="fas fa-bolt"></i>DEALERSHIP</a>
                    </div>
                </div>
            </div>
        </section>



        <?php
    include 'includes/footer.php';
    include 'includes/footertag.php';

    ?>
        <script>
        $(document).ready(function() {
            $("#hire_inner").validate({
                rules: {
                    first_name: 'required',

                    last_name: 'required',
                    mobile_number: {
                        required: true,
                        digits: true, // Allow only digits
                    },
                    state: "required",
                    district: "required",
                }
            });
            $('#button_hire').on('click', function() {
                $('#hire_inner').valid();
                console.log($('#hire_inner').valid());
            });
        });
        </script>


    </html>

    <?php
    include 'includes/footer.php';

    ?>
</body>

</html>