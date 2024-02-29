<?php
    include 'includes/headertag.php';
    include 'includes/headertagadmin.php';
   include 'includes/footertag.php';
   
   ?> 
  <script> var APIBaseURL = "<?php echo $APIBaseURL; ?>";</script>
  <script> var baseUrl = "<?php echo $baseUrl; ?>";</script>
  <script src="<?php $baseUrl; ?>model/blog.js"></script>
  <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
</head>

<body>
   <?php
   include 'includes/header.php';
   ?>
<body>
        <!-- HEADING Home > Blog-->
    <section class="mt-5 pt-5 bg-light">
        <div class="container mt-4 pt-4">
            <div class="">
                <span class="mt-5 text-white pt-5 ">
                    <a href="index.php" class="text-decoration-none header-link px-1">Home <i class="fa-solid fa-chevron-right px-1"></i></a>
                </span>
                <span class="text-dark">Blogs</span>
                </span> 
            </div>
        </div>
    </section>

    <!-- Want to be Featured in Bharat Tractor Weekly News? Connect With Us -->
<section>
    <div class="container" id="an">   
        <div class="row">
            <div class="col-12 col-sm-9 col-lg-9 col-md-9">  
                <div id="productContainer" class="row py-1">  </div>
                <h5 id="noDataMessage" class="text-center mt-4 text-danger" style="display: none;">
                <img src="assets/images/404.gif" class="w-25" alt=""></br>Data not found..!</h5>
                <div class="col text-center mt-3 pb-3">
                    <button id="load_moretract" type="button" class=" btn add_btn btn-success"><i class="fas fa-undo"></i>View All</button>
                </div>
            </div>
            <div class="col-12 col-sm-3 col-lg-3 col-md-3">
                <div class=" row mb-3" id="">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                            <div class=" row text-center">
                                <div class="col-12 col-sm-6 col-lg-6 col-md-6">
                                    <button id="reset_tractor" type="button" onclick="resetform()" class="add_btn btn btn-success w-100">
                                    <i class="fas fa-undo"></i>  Reset </button>
                                </div>
                                <div class="col-12 col-sm-6 col-lg-6 col-md-6 pe-2">
                                    <button id="filter_tractor" type="button" class="add_btn btn btn-success w-100">
                                    <i class="fas fa-filter"></i>Apply Filter</button>
                                </div>
                            </div>
                        </div>
                </div>
                    <!-- <div class="scrollbar mb-3" id="filter_district">
                        <div class="force-overflow">
                            <h5 class=" ps-1 text-dark fw-bold pt-2">Search By Category</h5>
                            <div class="HP py-2">
                                
                                <input type="checkbox" class="checkbox-round mt-1 ms-3 select_state" value="Tractor News" /><span class="ps-2 fs-6">Tractor News</span><br />
                                <input type="checkbox" class="checkbox-round mt-1 ms-3 select_state" value="Agriculture News" /><span class="ps-2 fs-6">Agriculture News</span><br />
                                <input type="checkbox" class="checkbox-round mt-1 ms-3 select_state" value="Sarkari Yojna" /><span class="ps-2 fs-6">Sarkari Yojna</span><br />
                            </div>
                        </div>
                    </div> -->
                    <div class="scrollbar mb-3" id=" my-2">
                    <div class="force-overflow">
                        <h5 class=" ps-1 text-dark fw-bold  pt-2">Search By Category</h5>
                        <div class="HP py-2" id="checkboxContainer">
                        </div>
                    </div>
                </div>
        </div>
    </div>
</section>

<?php
    include 'includes/footer.php';
    include 'includes/footertag.php';
?>

</body>
</html>