<?php
    include 'includes/headertag.php';
    include 'includes/headertagadmin.php';
   include 'includes/footertag.php';
   
   ?> 
  <script> var APIBaseURL = "<?php echo $APIBaseURL; ?>";</script>
  <script> var baseUrl = "<?php echo $baseUrl; ?>";</script>
  <script src="<?php $baseUrl; ?>model/customer_news_list.js" defer></script>
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

  <section class="mt-4 pt-5">
    <div class="container mt-5 pt-4">
        <div class="">
            <span class="mt-5 text-white pt-5 ">
                <a href="index.php" class="text-decoration-none header-link px-1">Home <i class="fa-solid fa-chevron-right px-1"></i></a>
            </span>
            <span class="text-dark"> All News</span>
            </span> 
        </div>
    </div>
  </section>
    <div class="marquee_tag my-1">
      <marquee behavior="scroll" class="py-2"direction="" scrollamount="10"><b> 90% छूट पर ले जाएं कॉम्पैक्ट सोलर पंप, ऐसे करें आवेदन | 3 से 10 एचपी के सोलर पंप पर मिल रही है बंपर सब्सिडी, यहां करें आवेदन | Domestic Tractor Sales Report October 2023 - Sales Dropped by 3.93%, 118232 Units Sold | स्क्वायर बेलर मशीन पर मिल रही है 6,25,000 रुपए की सब्सिडी, यहां करें आवेदन | लाड़ली बहना योजना : धनतेरस पर महिलाओं को मिलेगा दिवाली का गिफ्ट, खाते में आएंगे पैसे</b></marquee>
    </div>
    <div class="container" id="an">       
      <div id="productContainer" class="row py-1">
        <h1 class="mt-2 mb-3">All News</h1> 
      </div>
      <div class="col text-center mt-3">
        <button id="load_moretract" type="button" class=" btn" style=" background-color: #B90405; color: #fff;" ><i class="fas fa-undo"></i>View All</button>
      </div>
    </div>
  <section>
    <div class="container py-2 ">
      <div class="bg-light p-3">
        <h5 class="assured ps-3 py-1">News</h5>
        <p class="py-2">All are curious nowadays that what is happening in India. So with BharatAgrimart's, you get detailed latest news of India. Till now you are getting tractor news and agriculture news on BharatAgrimart's now for your convenience we are here starting India news online segment from where you can update daily with the latest breaking news. Here we update daily latest news headlines, today's state news, live news and many more in one place. On this page, we are going to show today's news headlines in Hindi with full detail and images. TarctorJunction always cares about you, you all are like a family to us. So, it is our responsibility to aware you of all breaking news of India.</p>
        <p>At BharatAgrimart's, we introduced a new section for the comfort of the farmers. Here you can find Tractor News, Agriculture News, Weather News, Agri Business News, Sarkari Yojana News, Animal Husbandry News and Social News.</p>
        <p>So, why search anywhere when here at one place in separate segment getting even pin size details about India in an easy language. We are hereby trying to aware of all of you about news India because it is each of your right to know what is happening in our nation</p>
        <p>So, Find out here today news, news Hindi and many more only on BharatAgrimart's. You can also visit our BharatAgrimart's youtube channel for news videos. </p>
      </div>
    </div>
  </section>

  <!-- QUICK LINKS -->
  <section>
    <div class="container py-3 mt-2">
        <h5 class="bg-light assured py-1 ps-3">Quick links</h5>
        <div class="row">
            <div class="col-12 col-md-6 col-lg-3 py-1">
              <ul>
                <li><i class="fa-solid fa-angles-right pe-1"></i><a href="find_new_tractors.php" class="text-decoration-none text-dark">New Tractor</a></li>                    
                <li><i class="fa-solid fa-angles-right pe-1"></i><a href="compare_trac.php" class="text-decoration-none text-dark">Compare</a></li>
                <li><i class="fa-solid fa-angles-right pe-1"></i><a href="dealership_enq.php" class="text-decoration-none text-dark">Dealership Enquiry</a></li>
              </ul>
            </div>
            <div class="col-12 col-md-6 col-lg-3 py-1">
              <ul>
                <li><i class="fa-solid fa-angles-right pe-1"></i><a href="new_tractor_loan.php" class="text-decoration-none text-dark">Finance</a></li>                    
                <li><i class="fa-solid fa-angles-right pe-1"></i><a href="upcoming_tractors.php" class="text-decoration-none text-dark">Upcoming Tractors</a></li>
                <li><i class="fa-solid fa-angles-right pe-1"></i><a href="#" class="text-decoration-none text-dark">Contact/Mail Us</a></li>
            </ul>
            </div>
            <div class="col-12 col-md-6 col-lg-3 py-1">
              <ul>
                <li><i class="fa-solid fa-angles-right pe-1"></i><a href="popular_tractors.php" class="text-decoration-none text-dark">Popular Tractors</a></li>                    
                <li><i class="fa-solid fa-angles-right pe-1"></i><a href="harvester.php" class="text-decoration-none text-dark">Harvester</a></li>
                <li><i class="fa-solid fa-angles-right pe-1"></i><a href="Insurance.php" class="text-decoration-none text-dark">Insurance</a></li>
              </ul>
            </div>
            <div class="col-12 col-md-6 col-lg-3 py-1">
              <ul>
                <li><i class="fa-solid fa-angles-right pe-1"></i><a href="used_tractor.php" class="text-decoration-none text-dark">Used Tractors</a></li>
                <li><i class="fa-solid fa-angles-right pe-1"></i><a href="latest_tractor.php" class="text-decoration-none text-dark">Latest Tractors</a></li>
                <li><i class="fa-solid fa-angles-right pe-1"></i><a href="#" class="text-decoration-none text-dark">Offers</a></li>
              </ul>
            </div>
        </div>
    </div>
  </section>

  <?php
    include 'includes/footer.php';
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
</html>