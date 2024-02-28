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
    <section class="mt-5 pt-5">
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
                <div id="productContainer" class="row py-1">

                <!-- <h1 class="mt-2 mb-3">Blog</h1>  -->
                    <!-- <div class="col-12 col-lg-4 col-sm-4 col-md-4 mt-2 mb-2">
                    <div class="success__stry__item shadow h-100">
                        <div class="thumb">
                        <a href="news_content.php">
                            <div class="">
                            <img src="assets\images\sarkari-yojana-1698841100.webp" class="object-fit-cover p-3 w-100" alt="img">
                            </div>
                        </a>
                        </div>
                        <div class="content mb-3 ms-3">
                        <button type="button" class="btn btn-warning">Latest News</button>
                        <div class="row mt-2">
                            <p>खुशखबरी दिवाली पर 1.75 करोड़ परिवारों को फ्री में गैस...</p>
                        </div>
                        <a href="#" class="text-decoration-none text-dark pb-1">
                            <span class=""> 23-November-2023 </span>
                        </a>
                        </div>
                    </div>
                    </div>    -->
                </div>
                <div class="col text-center mt-3 pb-3">
                    <button id="load_moretract" type="button" class=" btn add_btn btn-success"><i class="fas fa-undo"></i>View All</button>
                </div>
            </div>
          <div class="col-12 col-sm-3 col-lg-3 col-md-3">
                        <div class=" row mb-3" id="">
                        <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                            <div class="row text-center">
                                <div class="col-6 col-sm-6 col-lg-6 col-md-6 g-1">
                                    <button id="resetButton" type="button" onclick="resetform()" class="add_btn btn btn-success w-75">
                                        <i class="fas fa-undo"></i> Reset </button>
                                </div>
                                <div class="col-6 col-sm-6 col-lg-6 col-md-6 g-1">
                                    <button id="apply_filter_bnt" type="button" class="add_btn btn btn-success w-75">
                                        <i class="fas fa-filter"></i> Apply Filter</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="scrollbar mb-3" id="filter_district">
                        <div class="force-overflow">
                            <h5 class=" ps-1 text-dark fw-bold pt-2">Search By Category</h5>
                            <div class="HP py-2">
                                
                                <input type="checkbox" class="checkbox-round mt-1 ms-3 select_state" value="Tractor News" /><span class="ps-2 fs-6">Tractor News</span><br />
                                <input type="checkbox" class="checkbox-round mt-1 ms-3 select_state" value="Agriculture News" /><span class="ps-2 fs-6">Agriculture News</span><br />
                                <input type="checkbox" class="checkbox-round mt-1 ms-3 select_state" value="Sarkari Yojna" /><span class="ps-2 fs-6">Sarkari Yojna</span><br />
                            </div>
                        </div>
                    </div>
                    <!-- <div class="scrollbar mb-3" id="filter_district">
                        <div class="force-overflow">
                            <h5 class=" ps-1 text-dark fw-bold pt-2">Search By State</h5>
                            <div class="HP py-2">
                                
                                <input type="checkbox" class="checkbox-round mt-1 ms-3 select_state" value="Chhattisgarh" /><span class="ps-2 fs-6">Chhattisgarh</span><br />
                                <input type="checkbox" class="checkbox-round mt-1 ms-3 select_state" value="Other" /><span class="ps-2 fs-6">Other</span><br />
                            </div>
                        </div>
                    </div>
                    <div class="scrollbar mb-3" id="filter_district">
                       <div class="force-overflow">
                        <h5 class=" ps-1 text-dark fw-bold pt-2">Search By District</h5>
                            <div class="HP py-2">
                                
                                <input type="checkbox" class="checkbox-round ms-3 mt-1 select_district" value="raipur" /><span class="ps-2 fs-6">Raipur</span><br />
                                <input type="checkbox" class="checkbox-round ms-3 mt-1 select_district" value="Bilaspur" /><span class="ps-2 fs-6">Bilaspur</span><br />
                                <input type="checkbox" class="checkbox-round ms-3 mt-1 select_district" value="Ambikapur" /><span class="ps-2 fs-6">Ambikapur</span><br />
                                <input type="checkbox" class="checkbox-round ms-3 mt-1 select_district" value="Raigarh" /><span class="ps-2 fs-6">Raigarh</span><br />
                                <input type="checkbox" class="checkbox-round ms-3 mt-1 select_district" value="Surajpur" /><span class="ps-2 fs-6">Surajpur</span><br />
                                <input type="checkbox" class="checkbox-round ms-3 mt-1 select_district" value="Jagdalpur" /><span class="ps-2 fs-6">Chirmiri</span><br />
                                <input type="checkbox" class="checkbox-round ms-3 mt-1 select_district" value="Korba" /><span class="ps-2 fs-6">Korba</span><br />
                            
                            </div>
                        </div>
                    </div> -->
        </div>
    </div>
</section>

<?php
    include 'includes/footer.php';
    include 'includes/footertag.php';
?>

</body>
</html>