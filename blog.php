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
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-6Z38E658LD"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-6Z38E658LD');
</script>
<body>
   <?php
   include 'includes/header.php';
   ?>
<body>
        <!-- HEADING Home > Blog-->
    <section class="mt-5 pt-5 bg-light">
        <div class="container mt-4 pt-3">
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
                    <button id="load_moretract" type="button" class=" btn add_btn btn-success p-2"><i class="fas fa-undo"></i>View All</button>
                </div>
            </div>
            <div class="col-12 col-sm-3 col-lg-3 col-md-3">
                    <div class=" row mb-3" id="">
                        <div class="col-12">
                            <div class="row">
                                <div class="col-6 col-sm-6 p-2">
                                    <button id="reset_tractor" type="button" onclick="resetform()" class="add_btn btn btn-success w-100">
                                    <i class="fas fa-undo"></i>  Reset </button>
                                </div>
                                <div class="col-6 col-sm-6 p-2">
                                    <button id="filter_tractor" type="button" class="add_btn btn btn-success w-100">
                                    <i class="fas fa-filter"></i>Apply Filter</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="scrollbar mb-3" id=" my-2">
                        <div class="force-overflow">
                            <h5 class=" ps-1 text-dark fw-bold  pt-2">Search By Category</h5>
                            <div class="HP py-2 w-100" id="checkboxContainer">
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
  <script>
 function googleTranslateElementInit() {
 new google.translate.TranslateElement({
 pageLanguage: 'en',
 autoDisplay: 'true',
 includedLanguages:'en,hi,bn,mr,pa,or,te,ta,ml',
 layout: google.translate.TranslateElement.InlineLayout.HORIZONTAL
 }, 'google_translate_element');
 }
</script>
</body>
</html>