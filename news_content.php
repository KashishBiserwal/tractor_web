<?php
    include 'includes/headertag.php';
    include 'includes/headertagadmin.php';
   include 'includes/footertag.php';
   
   ?> 
  <script> var APIBaseURL = "<?php echo $APIBaseURL; ?>";</script>
  <script> var baseUrl = "<?php echo $baseUrl; ?>";</script>
  <script src="<?php $baseUrl; ?>model/news_content_customer.js"></script>

<body>
   <?php
        include 'includes/header.php';
   ?>
    <section class="mt-5 pt-5">
        <div class="container pt-4">
            <div class="">
                <span class="mt-5 text-white pt-5 ">
                    <a href="index.php" class="text-decoration-none header-link px-1">Home<i class="fa-solid fa-chevron-right px-1"></i></a>
                </span>
                <span class="mt-5 text-white pt-5 ">
                    <a href="all_news.php" class="text-decoration-none header-link px-1">All News <i class="fa-solid fa-chevron-right px-1"></i></a>
                </span>
                <span class="text-dark">News</span>                
            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <div class="row fw-bold fs-5 mt-3">
                <p id="news_heading"></p>
            </div>
            <div class="row">
                <p><i class="fa-solid fa-calendar-days me-2"></i>प्रकाशित - <span id="news_date"></span> ट्रैक्टर जंक्शन द्वारा</p>
                <!-- <img src="assets\images\sarkari-yojana-1698920602.webp" class="w-50 h-54" alt="img"> -->
                <div id="news_img"></div>
            </div>
                <h5 class="assured ps-3 py-3 fs-6 bg-light mt-5 fw-bold" > <span>About:-</span> <span id="heading_deatail"></span></h5>
                <p class="text-justify justify-content-center mt-3"id="content"></p>
            </div>
        </div>
    </section>



</body>
</html>

    <?php
    include 'includes/footer.php';
    include 'includes/footertag.php';
    ?>