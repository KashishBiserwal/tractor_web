<!DOCTYPE html>
<html lang="en">

<head>
 
    <?php
    include 'includes/headertag.php';
    include 'includes/headertagadmin.php';
    include 'includes/footertag.php';
    include 'includes/spinner.php';
    ?> 
<script> var APIBaseURL = "<?php echo $APIBaseURL; ?>";</script>
<script> var baseUrl = "<?php echo $baseUrl; ?>";</script>
<script src="<?php $baseUrl; ?>model/tyre.js"></script>
</head>
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
    .text-truncate {
        overflow: hidden;
        white-space: nowrap;
        text-overflow: ellipsis;
    }
</style>
</head>
<body>
    <?php
   include 'includes/header.php';
   ?>

<section class="mt-130 bg-light">
    <div class="container ">
        <div class="py-2">
            <span class="text-white">
                <a href="index.php" class="text-decoration-none header-link px-1">Home <i class="fa-solid fa-chevron-right px-1"></i></a>
                <span class="text-dark p"> Tractor Tyres </span>
            </span>
        </div>
    </div>
</section>
<section>
    <div class="container my-4">
        <div class="row">
            <div class="col-12 col-sm-9 col-lg-9 col-md-9">
                <h3 class="pb-3 fw-bold"> Tractor Tyres <span class="text-success fw-bold">In INDIA</span></h3>
                <div id="productContainer" class="row"> </div>
                <div class="col-12 text-center mt-3 pt-2 ">
                    <h5 id="noDataMessage" class="text-center mt-4 text-danger" style="display: none;">
                    <img src="assets/images/404.gif" class="w-25" alt=""></br>Data not found..!</h5>
                    <button id="load_moretract" type="button" class="add_btn btn btn-success p-1"><i class="fas fa-undo"></i> Load More Tyres</button>
                </div>
            </div>
            <div class="col-12 col-sm-3 col-lg-3 col-md-3">
                <div class=" row mb-3" id="">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                        <div class=" row text-center">
                            <div class="col-12 col-sm-6 col-lg-6 col-md-6">
                                <button onclick="resetform()" type="button" onclick="resetform()" class="add_btn btn btn-success w-100">
                                <i class="fas fa-undo"></i>  Reset </button>
                            </div>
                            <div class="col-12 col-sm-6 col-lg-6 col-md-6 pe-2">
                                <button id="filter_tractor"  type="button" class="add_btn btn btn-success w-100">
                                <i class="fas fa-filter"></i>  Apply Filter </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="scrollbar mb-3" id="">
                    <div class="force-overflow">
                        <h5 class="ps-1 text-dark fw-bold pt-2">Search By Brand</h5>
                        <div class="HP py-2" id="checkboxContainer"></div>
                    </div>
                </div>
                <div class=" mb-3" id="">
                    <div class="force-overflow">
                        <div class="price py-2 ">
                            <h5 class=" ps-3 text-dark fw-bold mb-3">Search By Type</h5>
                            <input type="checkbox" class="checkbox-round ms-3 chechbox-position-tyre" value="front" /><span
                                 class="ps-2 fs-6">Front</span><br />
                            <input type="checkbox" class="checkbox-round ms-3 chechbox-position-tyre" value="rare" /><span
                                class="ps-2 fs-6">Rare</span><br />
                            <input type="checkbox" class="checkbox-round ms-3 chechbox-position-tyre" value="steer" /><span
                                class="ps-2 fs-6">Steer</span><br />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section>
    <div class="container">
        <h4 class="fw-bold assured px-2">Quick Links</h4>
        <div class="row my-4">
            <div class="col-12 col-lg-4 col-md-4 col-sm-4 py-2">
                <a href="find_new_tractors.php" id="adduser"class="btn btn-outline-success text-decoration-none border-2 p-2 w-100">
                <i class="fas fa-bolt"></i>TRACTOR</a>
            </div>
            <div class="col-12 col-lg-4 col-md-4 col-sm-4 py-2">
                <a href="harvester.php" id="adduser"class=" btn btn-outline-success text-decoration-none border-2 py-2 px-3 w-100">
                <i class="fas fa-bolt"></i>HARVESTERS</a>
            </div>
            <div class="col-12 col-lg-4 col-md-4 col-sm-4 py-2">
                <a href="used_tractor.php" id="adduser"class="btn btn-outline-success text-decoration-none  border-2 py-2 px-3 w-100">
                <i class="fas fa-bolt"></i>USED TRACTOR</a>
            </div>
            <div class="col-12 col-lg-4 col-md-4 col-sm-4 py-2">
                <a href="used_harvester.php" id="adduser" class=" btn btn-outline-success text-decoration-none border-2 py-2 px-3 w-100">
                <i class="fas fa-bolt"></i>USED HARVESTERS</a>
            </div>
            <div class="col-12 col-lg-4 col-md-4 col-sm-4 py-2">
                <a href="new_tractor_loan.php" id="adduser"class="btn btn-outline-success text-decoration-none border-2 py-2 px-3 w-100">
                <i class="fas fa-bolt"></i>EASY FINANCE</a>
            </div>
            <div class="col-12 col-lg-4 col-md-4 col-sm-4 py-2">
                <a href="dealership_enq.php" id="adduser"class="btn btn-outline-success text-decoration-none border-2 py-2 px-3 w-100">
                <i class="fas fa-bolt"></i>DEALERSHIP</a>
            </div>
        </div>
    </div>
</section>

<?php
    include 'includes/footer.php';
    // include 'includes/footertag.php';
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
  
</body>

</html>