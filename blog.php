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
        <!-- <div class="container">
            <div class="row  align-items-center my-3" id="productContainer">       
                <div class="col-12">
                    <div class="py-3 my-3 ps-4">
                        <p class="fw-bold text-center fs-5">Want to be Featured in Bharat Tractor Blog? Connect With Us</p>
                        <p class="text-center mt-n-2"> <button class="btn btn-primary btn-lg btn-block">Write for Us</button></p> 
                    </div>
                </div>
            </div>
        </div> -->
    <div class="container" id="an">       
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
          <div class="col text-center mt-3">
            <button id="load_moretract" type="button" class=" btn add_btn btn-success"><i class="fas fa-undo"></i>View All</button>
          </div>
    </div>
    </section>

<?php
    include 'includes/footer.php';
    include 'includes/footertag.php';
?>

</body>
</html>