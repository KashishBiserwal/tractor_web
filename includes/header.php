<script> var APIBaseURL = "<?php echo $APIBaseURL; ?>";</script>
<script> var baseUrl = "<?php echo $baseUrl; ?>";</script>
<script src="<?php $baseUrl; ?>model/header.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

<style>
  .language-image {
    filter: brightness(0) invert(1);
  }

  .goog-te-gadget {
    color: transparent !important;
    font-size: 0px;
  }

  .goog-text-highlight {
    background: none !important;
    box-shadow: none !important;
  }

  #google_translate_element select {
    background: #2b1a12;
    color: #fff4e4;
    border: none;
    font-weight: bold;
    border-radius: 3px;
    padding: 8px 12px
  }

  .language-dropdown {
    width: 10px;
  }

  iframe.skiptranslate {
    display: none !important;
  }

  #goog-gt-tt {
    visibility: hidden !important;
    /* Hide the tooltip by default */
  }

  /* Default font size for languages */
  #selected-language {
    font-size: 16px;
  }

  .small-text-language {
    font-size: 14px;
  }

  .input-group {
    display: flex;
    align-items: center;
  }

  .search-input {
    height: 35px;
    border-radius: 2px 0 0 2px;
    padding-left: 15px;
    font-size: 16px;
    border: 2px solid #ebedee;
    outline: none;
    transition: box-shadow 0.3s ease, border 0.3s ease;
    flex: 1;
  }

  .search-input:focus {
    box-shadow: 0 0 8px rgba(0, 123, 255, 0.5);
  }

  .search-button {
    height: 35px;
    /* Same height as search input */
    border-radius: 0 2px 2px 0;
    background-color: #346498;
    border: block;
    border-color: #ebedee;
    font-size: 20px;
    padding: 0 15px;
    color: #fff;
    transition: background-color 0.3s ease;
    display: flex;
    align-items: center;
    justify-content: center;
  }

  .search-button:hover {
    background-color: #0056b3;
  }

  .suggestion-list {
    list-style: none;
    padding: 0;
    margin: 5px 0 0;
    max-height: 200px;
    overflow-y: auto;
    position: absolute;
    width: 100%;
    border: 1px solid #ebedee;
    background-color: #fff;
    border-radius: 0 0 10px 10px;
    z-index: 1000;
  }

  .suggestion-list li {
    padding: 10px 15px;
    cursor: pointer;
  }

  .suggestion-list li:hover {
    background-color: #f0f0f0;
  }

  .suggestion-list li:not(:last-child) {
    border-bottom: 1px solid #ddd;
  }

  .input-group .btn {
    position: relative;
    z-index: 2;
    top: -5px;
  }

  .navbar-toggler-2 {
    display: none;
  }

  @media (max-width: 576px) {
    .language-image {
      width: 24px;
      height: 24px;
    }

    .nav-link {
      font-size: 14px;
      padding: 0 5px;
    }

    #loginContainer a {
      font-size: 14px;
    }

    .lang {
      align-self: start;
      padding: 0px;
      margin-top: 6px;
    }
  }

  @media (max-width: 768px) {
    .navbar-navbar {
      display: flex;
      flex-direction: row;
      justify-content: space-between;
      align-items: center;
    }

    .navbar-nav-mobile {
      margin-left: 22px;
    }

    .navbar-navbar .nav-item {
      margin: 0;
      padding: 0 10px;
    }

    .navbar-navbar .dropdown.lang {
      flex-shrink: 0;
    }

    .navbar-navbar .nav-item a {
      white-space: nowrap;
    }

    #loginContainer {
      display: block !important;
    }

    #loginButton {
      display: inline-block;
    }

    #myAccountDropdown {
      display: block !important;
    }

    .search-box-mobile {
      width: 400px;
      margin-left: 6px;
    }

    .navbar-toggler:focus {
      outline: none;
      box-shadow: none;
    }

    .navbar-toggler-2 {
      display: block;
    }
  }

  .lang .dropdown-menu {
    position: absolute;
    top: 100%;
    left: 0;
    transform: translateX(0);
    z-index: 1050;
    width: auto;
    min-width: 150px;
  }

  @media (max-width: 576px) {
    .lang .dropdown-menu {
      width: 100%;
      left: 0;
    }
  }

  #myAccountDropdown .dropdown-menu {
    position: absolute;
    top: 100%;
    left: 0;
    transform: translateX(0);
    z-index: 1050;
    width: auto;
    min-width: 150px;
  }

  @media (max-width: 768px) {
    .navsearch {
      display: none;
    }

    .navbar-toggler {
      outline: none;
      border: none;
    }
  }

  @media (max-width: 576px) {
    .navsearch {
      width: 100%;
      display: block;
    }

    .language-image {
      width: 20px;
      height: 20px;
    }

    .nav-link {
      font-size: 12px;
      padding: 0 5px;
    }
  }

  @media (max-width: 768px) {
    .navbar-nav-mobile {
      width: 100% !important;
      position: relative !important;
    }

    .navbar_nav_mobile {
      display: flex !important;
      justify-content: flex-end !important;
      width: 100% !important;
    }

    .nav_item_mobile {
      text-align: center !important;
      flex: 1 !important;
    }

    .dropdown-menu.language-dropdown {
      position: absolute !important;
      top: 100% !important;
      left: 0 !important;
      right: 0 !important;
      margin: 0 auto !important;
      width: 90% !important;
      text-align: center !important;
      z-index: 1050 !important;
    }

    #myAccountDropdown {
      position: static !important;
      width: 100% !important;
    }

    #myAccountDropdown .dropdown-menu {
      width: auto !important;
      text-align: center !important;
      margin: 0 auto !important;
    }

    body {
      overflow-x: hidden !important;
    }
  }

  @media (max-width: 768px) {
    #myAccountDropdown {
      position: relative !important;
    }

    #myAccountDropdown .dropdown-menu {
      position: absolute !important;
      top: 100% !important;
      left: -25px !important;
      right: auto !important;
      width: 100% !important;
      margin: 0 !important;
      text-align: center !important;
      z-index: 1050 !important;
    }

    #myAccountDropdown .dropdown-item {
      padding: 10px !important;
      font-size: 14px !important;
      color: #000 !important;
      background-color: #fff !important;
      border-bottom: 1px solid #ddd !important;
    }

    #myAccountDropdown .dropdown-item:hover {
      background-color: #f8f9fa !important;
    }
  }

  .search-icon {
    position: absolute;
    right: 30;
    font-size: 26px;
    color: white;
    display: none;
  }

  @media (max-width: 767px) {
    .search-icon {
      display: block;
    }
  }

  @media (max-width: 768px) {
    .main-navbar {
      width: 80% !important;
      position: absolute;
      top: 0;
      z-index: 999;
      background-color: #fff;
      color: black;
      z-index: 99;
    }

    .navbar-toggler-2 {
      position: absolute;
    }

    .logo {
      margin-left: 50px;
    }
  }

  .mobileBlockMenu-top {
    background-color: #f8f9fa;
    padding: 10px 15px;
    border-bottom: 1px solid #000;
  }

  .mobileBlockMenu-top .row {
    display: flex;
    align-items: center;
    justify-content: space-between;
  }

  .mobileBlockMenu-top .col-3 {
    display: flex;
    justify-content: center;
    align-items: center;
  }

  .mobileBlockMenu-top .col-6 {
    text-align: center;
  }

  .new-user,
  .reg-login {
    font-size: 14px;
    color: #333;
  }

  .reg-login a {
    color: #007bff;
    text-decoration: none;
  }

  .reg-login a:hover {
    text-decoration: underline;
  }

  /* Language dropdown styles */
  #mob-lang-new {
    position: relative;
  }

  #lang-mobile-btn {
    font-size: 14px;
    color: #333;
    cursor: pointer;
    display: block;
    padding: 5px 10px !important;
    border-radius: 4px !important;
  }

  #lang-mobile-block {
    display: none;
    position: absolute;
    top: 100%;
    right: 0;
    background-color: #fff;
    border: 1px solid #ddd;
    border-radius: 4px;
    z-index: 10;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
  }

  #lang-mobile-block .lang-mobile-inner {
    max-height: 200px;
    overflow-y: auto;
  }

  #lang-mobile-block a {
    display: block;
    padding: 8px 15px;
    color: #007bff;
    text-decoration: none;
  }

  #lang-mobile-block a:hover {
    background-color: #f1f1f1;
  }

  #lang-mobile-btn:focus+#lang-mobile-block,
  #lang-mobile-btn:hover+#lang-mobile-block {
    display: block;
  }

  /* Responsive mobile-only styles */
  @media (max-width: 768px) {
    .mobileBlockMenu-top {
      display: block;
    }
  }

  @media (min-width: 769px) {
    .mobileBlockMenu-top {
      display: none;
    }
  }

  .search-icon {
    position: absolute;
    right: 30px;
    top: 50%;
    transform: translateY(-50%);
  }

  @media (max-width: 991px) {
    .mob-lang-list-wrp {
      border: 1px solid #A7A7A7;
      border-radius: 42px;
      padding: 3px 10px;
      display: inline-block;
      font-size: 12px;
      position: relative;
      background: #fff;
    }

    .nav-text-size {
      font-size: 16px;
    }

    #navbarSupportedContent {
      height: 100vh;
    }

    .social-links-mobile {
      display: flex;
      /* justify-content: center; */
      gap: 0px;
      padding: 260px 20px;

    }

    .social-links-mobile a {
      text-align: center;
      line-height: 40px;
      border-radius: 50%;
      background-color: rgba(255, 255, 255, 0.2);
      width: 40px;
      color: #ffffff;
      text-align: center;
      line-height: 40px;
      border-radius: 50%;
    }


  }

  @media (min-width: 769px) {
    .social-links-mobile {
      display: none;
      /* Desktop pe hide karne ke liye */
    }
  }

  .arrow-icon {
    margin-left: 80px;
    font-weight: bold;
    font-size: 16px;
  }
</style>

<body>
  <div class="fixed_nav">
    <nav class="navbar navbar-expand-sm" style="background: #FFF5D3; padding: 15px 0;">
      <div class="container p-0">
        <div class="row w-100 m-0">
          <div class="col-sm-3 d-flex align-items-center position-relative">
            <!-- Navbar Toggler (Left Side) -->
            <button class="navbar-toggler-2 me-2" type="button" data-bs-toggle="collapse"
              data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
              aria-label="Toggle navigation">
              <img src="assets/images/menu-more-navigation-basic-ui-removebg-preview.png" alt="" height="25" width="25">
            </button>
            <a href="index.php" class="text-decoration-none">
              <img src="assets/images/tractor-logo.png" alt="reload img" class="logo" style="width: 80px; height:80px;">
            </a>
            <i class="bi bi-search search-icon"></i>
          </div>
          <div class="collapse navbar-collapse col-sm-9 pe-0" id="collapsibleNavbar" style="justify-content: end;">
            <div class="row w-100">
              <div class="col-sm-6 search-box-mobile">
                <form class="mb-0 navsearch position-relative">
                  <div class="input-group"
                    style="border: 1px solid black; border-radius: 20px; padding: 5px; background-color: white;">
                    <span class="input-group-text" style="background: none; border: none;">
                      <i class="fa-solid fa-magnifying-glass" style="font-size: 18px;"></i>
                    </span>
                    <input id="searchInput" type="text" class="form-control search-input" placeholder="Search"
                      style="border: none; box-shadow: none; font-size: 16px; outline: none; margin-bottom: 0px; margin-right: 5px;">
                  </div>
                  <ul id="suggestions" class="suggestion-list mt-5" style="display:none"></ul>
                </form>
              </div>

              <div class="col-sm-6 navbar-nav-mobile">
                <ul class="navbar-nav navbar-navbar navbar_nav_mobile float-end ">
                  <li class="nav-item  nav_item_mobile mt-2">
                    <a class="text-dark" style="text-decoration: none; margin-right: 20px;"
                      href="https://play.google.com/store/apps/details?id=com.divyal.bharat_tractor_app_1">Download
                      App</a>
                  </li>
                  <!-- <li class="dropdown lang"  style="margin-right: 10px;">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown2" role="button"
                      data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <img src="https://static-asset.tractorjunction.com/tj/language-icon.svg" width="28" height="28"
                        alt="Language Icon" title="Language" class="language-image" style="filter: brightness(80%);">
                      <span id="selected-language" class="text-dark">English</span>
                    </a>
                    <div class="dropdown-menu language-dropdown" id="lang-mobile-block">
                      <a href="#" hreflang="en" class="dropdown-item text-dark notranslate"
                        onclick="translateLanguage('en')">English</a>
                      <a href="#" hreflang="hi" class="dropdown-item text-dark notranslate"
                        onclick="translateLanguage('hi')">Hindi</a>
                      <a href="#" hreflang="bn" class="dropdown-item text-dark notranslate"
                        onclick="translateLanguage('bn')">Bengali</a>
                      <a href="#" hreflang="mr" class="dropdown-item text-dark notranslate"
                        onclick="translateLanguage('mr')">Marathi</a>
                      <a href="#" hreflang="pa" class="dropdown-item text-dark notranslate"
                        onclick="translateLanguage('pa')">Punjabi</a>
                      <a href="#" hreflang="or" class="dropdown-item text-dark notranslate"
                        onclick="translateLanguage('or')">Odia</a>
                      <a href="#" hreflang="te" class="dropdown-item text-dark notranslate"
                        onclick="translateLanguage('te')">Telugu</a>
                      <a href="#" hreflang="ta" class="dropdown-item text-dark notranslate"
                        onclick="translateLanguage('ta')">Tamil</a>
                      <a href="#" hreflang="ml" class="dropdown-item text-dark notranslate"
                        onclick="translateLanguage('ml')">Malayalam</a>
                    </div>
                  </li>
                  <li class="" id="google_translate_element" hidden></li> -->


                  <li class="nav-item  nav_item_mobile mt-1" id="loginContainer">
                    <button class="bg-danger rounded" style="padding: 5px 20px;">
                      <a class="text-white" id="loginButton" href="user-login.php"  style="text-decoration: none;">
                        Login 
                      </a>
                    </button>
                  <div id="myAccountDropdown" class="dropdown" style="display: none;">
                    <button class="nav-link dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      My Account
                    </button>
                    <div class="dropdown-menu w-25" aria-labelledby="dropdownMenuButton" style="background-color: #fff;">
                      <a class="dropdown-item text-dark p-2" href="userProfile.php">Profile</a>
                      <a class="dropdown-item text-dark p-2" href="#" onclick="user_logout()">Logout</a>
                    </div>
                  </div>
                </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </nav>
    <nav class="navbar  navbar-expand-lg navbar-dark main-navbar p-0">
      <div class="container p-0">

        <div class="collapse navbar-collapse p-0" id="navbarSupportedContent">
          <div class="mobileBlockMenu-top">
            <div class="row">
              <div class="col-3">
                <img src="assets/images/user.png" width="65" height="50" class="" alt="user profile icon">
              </div>
              <div class="col-5 text-start">
                <p class="reg-login mb-0 mt-0">
                  <a href="" title="Login" class="text-decoration-none text-dark fw-bold fs-5">Login</a>
                </p>
              </div>
              <div class="col-4">
                <div class="mob-lang-list-wrp" id="mob-lang-new">
                  <span id="lang-mobile-btn bg-white p-2">English</span>
                  <div class="lang-mobile" id="lang-mobile-block">
                    <div class="lang-mobile-inner">
                      <a rel="alternate" hreflang="en" href="https://www.tractorjunction.com/login/" title="English"
                        class="d-block px-3 weblink checkLang_en active_cls">English</a>
                      <a rel="alternate" hreflang="hi" href="https://www.tractorjunction.com/hi/login/" title="हिन्दी"
                        class="d-block px-3 weblink checkLang_hi">हिन्दी</a>
                      <a rel="alternate" hreflang="te" href="https://www.tractorjunction.com/te/login/" title="Telugu"
                        class="d-block px-3 weblink checkLang_te">Telugu</a>
                      <a rel="alternate" hreflang="ta" href="https://www.tractorjunction.com/ta/login/" title="Tamil"
                        class="d-block px-3 weblink checkLang_ta">Tamil</a>
                      <a rel="alternate" hreflang="mr" href="https://www.tractorjunction.com/mr/login/" title="Marathi"
                        class="d-block px-3 weblink checkLang_mr">Marathi</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="mobile-screen-nav-containt">
            <ul class="navbar-nav  mb-2 mb-lg-0 ">
            <li class="nav-item">
                <a class="nav-link fw-bold" href="newTractors.php">
                  Categories
                </a>
              </li>
              <li class="nav-item dropdown dropdown-toggle ">
                <a class="nav-link dropdown-toggle fw-bold d-flex align-items-center" href="#" role="button"
                  data-bs-toggle="dropdown" aria-expanded="false">
                  <div class="menus-icon d-md-none" style="width: 40px; text-align: center;">
                    <img src="assets/images/new-tractor-icon.jpg" class="img-fluid" alt="NEW TRACTOR icon" width="35"
                      height="14">
                  </div>
                  <div class="nav-text-size flex-grow-1">New Tractor</div>
                  <div class="arrow-icon d-md-none" style="width: 20px; text-align: center;"> > </div>
                </a>
                <ul class="dropdown-menu">
                  <li class="nav-item dropend">
                    <a class=" nav-link nav-link_brand dropdown-toggle  fw-bold text-dark " href="#" role="button"
                      data-bs-toggle="dropdown" aria-expanded="false">
                      Brand
                    </a>
                    <ul class="dropdown-menu p-0" id="selectedImagesContainer2"></ul>
                  </li>
                  <hr class="dropdown-divider m-0">
                  <li><a href="newTractors.php" class="dropdown-item fw-bold">Find New Tractors</a></li>
                  <hr class="dropdown-divider m-0">
                  <li><a href="popular_tractors.php" class="dropdown-item  fw-bold">Popular Tractors</a></li>
                  <hr class="dropdown-divider m-0">
                  <li><a href="upcoming_tractors.php" class="dropdown-item fw-bold">Upcoming Tractor</a></li>
                  <hr class="dropdown-divider m-0">
                  <li><a href="latest_tractor.php" class="dropdown-item fw-bold">Latest Tractor</a></li>
                  <hr class="dropdown-divider m-0">
                  <li><a href="mini_tractor.php" class="dropdown-item fw-bold">Mini Tractor</a></li>
                  <hr class="dropdown-divider m-0">
                  <li><a href="4wd.php" class="dropdown-item fw-bold">4WD Tractor</a></li>
                </ul>
              </li>
              <li class="nav-item dropdown dropdown-toggle ">
                <hr class="dropdown-divider m-0">
                <a class="nav-link dropdown-toggle fw-bold d-flex align-items-center" href="#" role="button"
                  data-bs-toggle="dropdown" aria-expanded="false">
                  <div class="menus-icon d-md-none" style="width: 40px; text-align: center;">
                    <img src="assets/images/sell-used-trac.png" class="img-fluid" alt="Sell TRACTOR icon" width="35"
                      height="14">
                  </div>
                  <div class="nav-text-size flex-grow-1">Sell Tractor</div>
                  <div class="arrow-icon d-md-none" style="width: 20px; text-align: center;"> > </div>
                </a>
                <ul class="dropdown-menu p-0">
                  <li><a class="dropdown-item fw-bold  py-2" href="sell_used_trac.php">Sell Used Tractor</a></li>
                  <hr class="dropdown-divider m-0">
                  <li><a class="dropdown-item fw-bold  py-2" href="sell_used_farm_imple.php">Used Farm Implements</a>
                  </li>
                  <hr class="dropdown-divider m-0">
                  <li><a class="dropdown-item fw-bold  py-2" href="sell_used_harvester.php">Used Harvester</a></li>
                </ul>
                </hr>
              </li>
              <li class="nav-item dropdown dropdown-toggle">
                <a class="nav-link dropdown-toggle fw-bold d-flex align-items-center" href="#" role="button"
                  data-bs-toggle="dropdown" aria-expanded="false">
                  <div class="menus-icon d-md-none" style="width: 40px; text-align: center;">
                    <img src="assets/images/used-tractor.jpg" class="img-fluid" alt="Used TRACTOR icon" width="35"
                      height="14">
                  </div>
                  <div class="nav-text-size flex-grow-1">Used</div>
                  <div class="arrow-icon d-md-none" style="width: 20px; text-align: center;"> > </div>
                </a>
                <ul class="dropdown-menu p-0">
                  <li class="nav-item dropend ">
                    <a class=" nav-link nav-link_brand dropdown-toggle fw-bold text-dark" href="#" role="button"
                      data-bs-toggle="dropdown" aria-expanded="false">
                      Buy Used
                    </a>
                    <ul class="dropdown-menu p-0">
                      <li><a class="dropdown-item fw-bold  py-2" href="used_tractor.php">Used Tractors</a></li>
                      <hr class="dropdown-divider m-0">
                      <li><a class="dropdown-item fw-bold  py-2" href="used_farm_imple.php">Used Farm Implements</a>
                      </li>
                      <hr class="dropdown-divider m-0">
                      <li><a class="dropdown-item fw-bold py-2" href="used_harvester.php">Used Harvester</a></li>
                      <hr class="dropdown-divider m-0">
                      <li><a class="dropdown-item  fw-bold py-2" href="tractor_valuation.php">Tractor valuation</a></li>
                      <hr class="dropdown-divider m-0">
                      <li><a class="dropdown-item  fw-bold py-2" href="find_used_tracters.php">Find Used Tractor</a>
                      </li>
                    </ul>
                  </li>
                  <hr class="dropdown-divider m-0">
                  <li class="nav-item dropend ">
                    <a class=" nav-link nav-link_brand dropdown-toggle fw-bold text-dark " href="#" role="button"
                      data-bs-toggle="dropdown" aria-expanded="false">
                      Rent & Hire
                    </a>
                    <ul class="dropdown-menu p-0">
                      <li><a class="dropdown-item fw-bold  py-2" href="rent.php">Rent Tractor</a></li>
                      <hr class="dropdown-divider m-0">
                      <li><a class="dropdown-item fw-bold  py-2" href="hire.php">Hire tractor</a></li>
                    </ul>
                  </li>
                </ul>
              </li>
              <li class="nav-item dropdown dropdown-toggle">
                <a class="nav-link dropdown-toggle fw-bold d-flex align-items-center" href="#" role="button"
                  data-bs-toggle="dropdown" aria-expanded="false">
                  <div class="menus-icon d-md-none" style="width: 40px; text-align: center;">
                    <img src="assets/images/Farm-Equipment.jpg" class="img-fluid" alt="NEW TRACTOR icon" width="30"
                      height="14">
                  </div>
                  <div class="nav-text-size flex-grow-1"> Farm Equipment's</div>
                  <div class="arrow-icon d-md-none" style="width: 20px; text-align: center;"> > </div>
                </a>
                <ul class="dropdown-menu p-0">
                  <li class="nav-item dropend">
                    <a class="nav-link dropdown-toggle text-dark fw-bold" href="#" role="button"
                      data-bs-toggle="dropdown" aria-expanded="false">Implements</a>
                    <ul class="dropdown-menu p-0" id="selectedImagesContainer3"></ul>
                  </li>
                  <li>
                    <hr class="dropdown-divider m-0">
                  </li>
                  <li class=""><a class="dropdown-item text-dark fw-bold" href="harvester.php">Harvester</a></li>
                </ul>
              </li>
              <li class="nav-item dropdown dropdown-toggle">
                <a class="nav-link dropdown-toggle fw-bold d-flex align-items-center" href="#" role="button"
                  data-bs-toggle="dropdown" aria-expanded="false">
                  <div class="menus-icon d-md-none" style="width: 40px; text-align: center;">
                    <img src="assets/images/Market-Farms.jpg" class="img-fluid" alt="NEW TRACTOR icon" width="24"
                      height="14">
                  </div>
                  <div class="nav-text-size flex-grow-1">Market & Farms</div>
                  <div class="arrow-icon d-md-none" style="width: 20px; text-align: center;"> > </div>
                </a>
                <ul class="dropdown-menu p-0">
                  <li class="nav-item dropend">
                    <a class="nav-link text-dark fw-bold" href="#" role="button" data-bs-toggle="dropdown"
                      aria-expanded="false">
                      Bazaar Apke Aas Pass
                    </a>
                    <ul class="dropdown-menu p-0">
                      <li><a class="dropdown-item fw-bold" href="dummy.php">Sell Product</a></li>
                      <hr class="dropdown-divider m-0">
                      <li><a class="dropdown-item fw-bold " href="hatbazar_buy.php">Buy Product</a></li>
                    </ul>
                  </li>
                  <li>
                    <hr class="dropdown-divider m-0">
                  </li>
                  <li class=""><a class="dropdown-item text-dark fw-bold" href="nursery_ui.php">Nursery</a></li>
                </ul>
              </li>
              <li class="nav-item dropdown dropdown-toggle">
                <a class="nav-link dropdown-toggle fw-bold d-flex align-items-center" href="#" role="button"
                  data-bs-toggle="dropdown" aria-expanded="false">
                  <div class="menus-icon d-md-none" style="width: 40px; text-align: center;">
                    <img src="assets/images/compare-road-price.jpg" class="img-fluid" alt="NEW TRACTOR icon" width="30"
                      height="14">
                  </div>
                  <div class="nav-text-size flex-grow-1">Enquiries</div>
                  <div class="arrow-icon d-md-none" style="width: 20px; text-align: center;"> > </div>
                </a>
                <ul class="dropdown-menu p-0">
                  <li><a class="dropdown-item fw-bold" href="onload.php"> On-Road Price</a></li>
                  <hr class="dropdown-divider m-0">
                  <li><a class="dropdown-item fw-bold" href="compare_trac.php">Compare</a></li>
                </ul>
              </li>
              <li class="nav-item dropdown dropdown-toggle">
                <a class="nav-link dropdown-toggle fw-bold d-flex align-items-center" href="#" role="button"
                  data-bs-toggle="dropdown" aria-expanded="false">
                  <div class="menus-icon d-md-none" style="width: 40px; text-align: center;">
                    <img src="assets/images/loan.png" class="img-fluid" alt="NEW TRACTOR icon" width="25" height="14">
                  </div>
                  <div class="nav-text-size flex-grow-1">Finance</div>
                  <div class="arrow-icon d-md-none" style="width: 20px; text-align: center;"> > </div>
                </a>
                <ul class="dropdown-menu p-0">
                  <li><a class="dropdown-item fw-bold" href="new_tractor_loan.php">Loan</a></li>
                  <hr class="dropdown-divider m-0">
                  <li><a class="dropdown-item fw-bold" href="Insurance.php">Insurance</a></li>
                </ul>
              </li>
              <li class="nav-item dropdown dropdown-toggle">
                <a class="nav-link dropdown-toggle fw-bold d-flex align-items-center" href="#" role="button"
                  data-bs-toggle="dropdown" aria-expanded="false">
                  <div class="menus-icon d-md-none" style="width: 40px; text-align: center;">
                    <img src="assets/images/newspaper-icon-logo.jpg" class="img-fluid" alt="NEW TRACTOR icon" width="35"
                      height="14">
                  </div>
                  <div class="nav-text-size flex-grow-1">News & Update</div>
                  <div class="arrow-icon d-md-none" style="width: 20px; text-align: center;"> > </div>
                </a>
                <ul class="dropdown-menu p-0" id="selectedImagesContainer1"></ul>
              </li>
              <!-- <li class="nav-item dropdown dropdown-toggle">
              <a class="nav-link dropdown-toggle fw-bold d-flex align-items-center" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <div class="menus-icon d-md-none" style="width: 40px; text-align: center;">
                  <img src="assets/images/server-tool-icon.jpg" class="img-fluid" alt="NEW TRACTOR icon" width="38" height="14">
                </div>
                <div class="nav-text-size flex-grow-1">Service</div>
                <div class="arrow-icon d-md-none" style="width: 20px; text-align: center;"> > </div>
              </a>
              <ul class="dropdown-menu p-0">
                <li><a class="dropdown-item fw-bold" href="tractor_mistry.php">Tractor Mistri</a></li>
              </ul>
            </li> -->
              <!-- <li class="nav-item">
                <a class="nav-link fw-bold" href="tractor_mistri.php">
                  Tractor Mistri
                </a>
              </li> -->
              <li class="nav-item dropdown dropdown-toggle ">
                <a class="nav-link dropdown-toggle fw-bold d-flex align-items-center" href="#" role="button"
                  data-bs-toggle="dropdown" aria-expanded="false">
                  <div class="menus-icon d-md-none" style="width: 40px; text-align: center;">
                    <img src="assets/images/more-logo-img.jpg" class="img-fluid" alt="NEW TRACTOR icon" width="28"
                      height="14">
                  </div>
                  <div class="nav-text-size flex-grow-1">More</div>
                  <div class="arrow-icon d-md-none" style="width: 20px; text-align: center;"> > </div>
                </a>
                <ul class="dropdown-menu p-0">
                  <li><a class="dropdown-item fw-bold" href="emi.php">EMI Calculator</a></li>
                  <hr class="dropdown-divider m-0">
                  <li><a class="dropdown-item fw-bold" href="agriculturecustomer.php">Agriculture College</a></li>
                  <hr class="dropdown-divider m-0">
                  <li><a class="dropdown-item fw-bold" href="tyre.php">Tyres</a></li>
                  <hr class="dropdown-divider m-0">
                  <li><a class="dropdown-item  fw-bold" href="dealership_enq.php">Dealership Enquiry</a></li>
                  <hr class="dropdown-divider m-0">
                  <li><a class="dropdown-item fw-bold" href="certified_dealers.php">Certified Dealers</a></li>
                  <hr class="dropdown-divider m-0">
                  <li><a class="dropdown-item fw-bold" href="engine_oil.php">Engine Oil</a></li>
                  <hr class="dropdown-divider m-0">
                  <li><a class="dropdown-item fw-bold" href="blog.php">Blogs</a></li>
                </ul>
              </li>
            </ul>
          </div>
          <div class="social-links-mobile">
            <!-- <a href="#"><i class="fab fa-facebook-f mt-2"></i></a> -->
            <img src="assets/images/facebook-icon-logo-preview.png" class="img-fluid" alt="NEW TRACTOR icon"
              style="width: 40px; height: auto;">
            <img src="assets/images/icon-insta-preview.png" class="img-fluid" alt="NEW TRACTOR icon"
              style="width: 40px; height: auto;">
            <img src="assets/images/linkedin-logo-removebg-preview.png" class="img-fluid" alt="NEW TRACTOR icon"
              style="width: 40px; height: auto;">
            <img src="assets/images/twitter-bird-icon-preview.png" class="img-fluid" alt="NEW TRACTOR icon"
              style="width: 40px; height: auto;">

          </div>
        </div>
      </div>
    </nav>
  </div>

  <div class="modal fade" id="errorStatusLoading" tabindex="-1" role="dialog" aria-labelledby="errorStatusLoadingTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="errorStatusLoadingTitle">Loading Status</h5>
        </div>
        <div class="modal-body">
          <p></p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn add_btn btn-success btn_all px-3" data-bs-dismiss="modal">OK</button>
        </div>
      </div>
    </div>
  </div>

  <?php
  include 'includes/footertag.php';
  ?>
</body>
<script>
  document.addEventListener("click", function (event) {
    let navbar = document.getElementById("navbarSupportedContent");
    let toggler = document.querySelector(".navbar-toggler-2");

    // Agar click navbar ke andar ya button par na ho, toh navbar close ho jaye
    if (!navbar.contains(event.target) && !toggler.contains(event.target)) {
      let bsCollapse = new bootstrap.Collapse(navbar, { toggle: false });
      bsCollapse.hide();
    }
  });
</script>
<script>
  $(document).ready(function () {
    news_category();
    get_brands();
    get_implement();
  })
  function news_category(id) {
    var url = 'https://shopninja.in/bharatagri/api/public/api/customer/get_news_category';
    var headers = {
      'Authorization': 'Bearer ' + localStorage.getItem('token')
    };

    $.ajax({
      url: url,
      type: "GET",
      headers: headers,
      success: function (data) {
        $("#selectedImagesContainer1").empty();

        // Sort the categories by some criteria (e.g., category ID or any other relevant property)
        data.news_category.sort(function (a, b) {
          // Sorting by category ID, change this according to your sorting criteria
          return a.id - b.id;
        });

        var topFourCategories = data.news_category.slice(0, 4);
        var newCard = topFourCategories.map(function (category) {
          var categoryWithoutSpaces = category.category_name.replace(/\s+/g, '_');
          return `<li id="${categoryWithoutSpaces}">
                            <a class="dropdown-item fw-bold" href="${categoryWithoutSpaces.toLowerCase()}.php?category_id=${category.id}">
                                ${category.category_name}
                            </a>
                        </li>
                        <hr class="dropdown-divider m-0">`;
        });

        $("#selectedImagesContainer1").append(newCard.join(''));
      },
      error: function (error) {
        console.error('Error fetching data:', error);
      }
    });
  }
  function get_implement() {
    var url = 'https://shopninja.in/bharatagri/api/public/api/customer/get_implement_category';
    var headers = {
      'Authorization': 'Bearer ' + localStorage.getItem('token')
    };

    $.ajax({
      url: url,
      type: "GET",
      headers: headers,
      success: function (data) {
        $("#selectedImagesContainer3").empty();

        var newCard = data.allCategory.slice(0, 8).map(function (allCategory) {
          return `<li id="${allCategory.category_name.replace(/\s+/g, '')}">
                  <a class="dropdown-item fw-bold" href="farm_imple_category_customer.php?id=${allCategory.id}">
                    ${allCategory.category_name}
                  </a>
                </li>
                <hr class="dropdown-divider m-0">`;
        });

        // Add "ALL Implement" after the first 8 brands
        newCard.push(`<li id="allimple">
                     <a class="dropdown-item fw-bold" href="all_farm_imple.php">
                       ALL Category
                     </a>
                   </li>
                   `);

        $("#selectedImagesContainer3").append(newCard.join(''));

        // Assuming you have a select element with id "select"
        $("#select").on('click', function () {
          const selectedBrandId = this.value;
          get_subcategory(selectedBrandId);
        });
      },
      error: function (error) {
        console.error('Error fetching data:', error);
      }
    });
  }

  function get_brands() {
    var url = 'https://shopninja.in/bharatagri/api/public/api/customer/get_all_brands';
    var headers = {
      'Authorization': 'Bearer ' + localStorage.getItem('token')
    };

    $.ajax({
      url: url,
      type: "GET",
      headers: headers,
      success: function (data) {
        $("#selectedImagesContainer2").empty();

        var newCard = data.brands.slice(0, 8).map(function (brand) {
          return `<li id="${brand.brand_name.replace(/\s+/g, '')}">
                  <a class="dropdown-item fw-bold" href="brands.php?brand_id=${brand.id}">
                    ${brand.brand_name}
                  </a>
                </li>
                <hr class="dropdown-divider m-0">`;
        });

        // Add "ALL Brands" after the first 8 brands
        newCard.push(`<li id="allBrands">
                     <a class="dropdown-item fw-bold" href="all_brands.php">
                       ALL Brands
                     </a>
                   </li>
                   `);

        $("#selectedImagesContainer2").append(newCard.join(''));
      },
      error: function (error) {
        console.error('Error fetching data:', error);
      }
    });
  }
</script>
<script>
  $(document).ready(function () {
    $("#searchInput").on("input", function () {
      var query = $(this).val();
      if (query.length > 0) {
        var suggestions = getSuggestions(query);
        displaySuggestions(suggestions);
      } else {
        $("#suggestions").empty().hide();
      }
    });

    $(document).on("click", "#suggestions li", function () {
      var suggestion = $(this).text();
      redirectToBrandPage(suggestion);
    });
  });

  // Object mapping suggestions to PHP page URLs
  var suggestionUrls = {
    'Swaraj': 'brands.php?brand_id=1',
    'Mahindra': 'brands.php?brand_id=2',
    'John Deere': 'brands.php?brand_id=3',
    'Massey Ferguson': 'brands.php?brand_id=4',
    'Powertrac': 'brands.php?brand_id=5',
    'Kubota': 'brands.php?brand_id=6',
    'New Holland': 'brands.php?brand_id=7',
    'Farmtrac': 'brands.php?brand_id=8',
    'Certified Dealers': 'certified_dealers.php',
    'Engine Oil': 'engine_oil.php',
    'Tyres': 'tyre.php',
    'Haatbazar': 'hatbazar_buy.php',
    'Nursery': 'nursery_ui.php'
    // Add more suggestions and their corresponding URLs as needed
  };

  function getSuggestions(query) {
    var filteredSuggestions = [];
    $.each(suggestionUrls, function (suggestion, url) {
      if (suggestion.toLowerCase().indexOf(query.toLowerCase()) !== -1) {
        filteredSuggestions.push(suggestion);
      }
    });
    return filteredSuggestions;
  }

  function displaySuggestions(suggestions) {
    var list = $("#suggestions");
    list.empty();
    $.each(suggestions, function (index, suggestion) {
      list.append("<li>" + suggestion + "</li>");
    });
    list.show();
  }

  function redirectToBrandPage(suggestion) {
    var url = suggestionUrls[suggestion];
    if (url) {
      window.location.href = url;
    }
  }
</script>
<script>

  // Toggle dropdown visibility
  document.getElementById('navbarDropdown2').addEventListener('click', function () {
    var dropdownMenu = document.getElementById('lang-mobile-block');
    if (dropdownMenu.style.display === 'none' || dropdownMenu.style.display === '') {
      dropdownMenu.style.display = 'block';
    } else {
      dropdownMenu.style.display = 'none';
    }
  });

  window.onload = function () {
    var googleTranslateWidget = document.querySelectorAll('.VIpgJd-ZVi9od-l4eHX-hSRGPd, #options, .VIpgJd-ZVi9od-ORHb-KE6vqe, #google_translate_element table');
    googleTranslateWidget.forEach(function (element) {
      element.style.display = 'none';
    });
  };


  // document.getElementById('translate-text').addEventListener('mouseover', function() {
  //     document.getElementById('goog-gt-tt').style.visibility = 'visible';
  //   });

  //   document.getElementById('translate-text').addEventListener('mouseout', function() {
  //     document.getElementById('goog-gt-tt').style.visibility = 'hidden';
  //   });

</script>

<script>
  function googleTranslateElementInit() {
    new google.translate.TranslateElement({
      pageLanguage: 'en',
      autoDisplay: 'true',
      includedLanguages: 'hi,en,mr,bn,pa,or,te,ta,ml',  // Add the languages you want
      layout: google.translate.TranslateElement.InlineLayout.HORIZONTAL
    }, 'google_translate_element');
  }

  function loadGoogleTranslate() {
    var script = document.createElement('script');
    script.type = 'text/javascript';
    script.src = '//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit';
    document.head.appendChild(script);
  }

  document.addEventListener("DOMContentLoaded", function () {
    loadGoogleTranslate();
  });

  function translateLanguage(language) {
    var selectField = document.querySelector('#google_translate_element select');
    if (selectField) {
      for (var i = 0; i < selectField.options.length; i++) {
        if (selectField.options[i].value.indexOf(language) > -1) {
          selectField.selectedIndex = i;
          selectField.dispatchEvent(new Event('change'));
          localStorage.setItem('selectedLanguage', language);
          updateTextSizeAndPadding(language);

          // Update the displayed selected language
          updateSelectedLanguageText(language);

          break;
        }
      }
    } else {
      console.error('Select field not found');
    }
    document.getElementById('lang-mobile-block').style.display = 'none';
  }

  function updateTextSizeAndPadding(language) {
    var elements = document.querySelectorAll('body, nav, .nav-item, .dropdown, .container, .dropend, *');

    if (['pa', 'or', 'te', 'ta', 'ml'].includes(language)) {
      elements.forEach(function (element) {
        element.style.fontSize = '11px';
      });

      var navItems = document.querySelectorAll('.main-navbar .navbar-collapse .navbar-nav li a');
      navItems.forEach(function (item) {
        item.style.padding = '8px 12px';
      });
    }
  }

  function updateSelectedLanguageText(language) {
    var languageText;
    switch (language) {
      case 'en':
        languageText = 'English';
        break;
      case 'hi':
        languageText = 'Hindi';
        break;
      case 'bn':
        languageText = 'Bengali';
        break;
      case 'mr':
        languageText = 'Marathi';
        break;
      case 'pa':
        languageText = 'Punjabi';
        break;
      case 'or':
        languageText = 'Odia';
        break;
      case 'te':
        languageText = 'Telugu';
        break;
      case 'ta':
        languageText = 'Tamil';
        break;
      case 'ml':
        languageText = 'Malayalam';
        break;
      default:
        languageText = 'English';
    }
    document.getElementById('selected-language').textContent = languageText;
  }

  function translateResponseContent() {
    var savedLanguage = localStorage.getItem('selectedLanguage');
    if (savedLanguage) {
      translateLanguage(savedLanguage);
    }
  }

  window.onload = function () {
    var savedLanguage = localStorage.getItem('selectedLanguage');
    if (savedLanguage) {
      updateTextSizeAndPadding(savedLanguage);
      translateLanguage(savedLanguage);
    }
  };

  // Example of how to use after receiving new response
  function handleApiResponse(response) {
    // Update content with response
    document.getElementById('content').innerHTML = response;

    // Now, translate the content to the selected language
    translateResponseContent();
  }

</script>
<script>
  // JavaScript to toggle navbar on mobile view
  // window.addEventListener('resize', function() {
  //   if (window.innerWidth <= 768) {
  //     // Hide top navbar and show main navbar on small screens
  //     document.querySelector('.fixed_nav').style.display = 'none';
  //     document.querySelector('.main-navbar').style.display = 'block';
  //   } else {
  //     // Show top navbar and hide main navbar on larger screens
  //     document.querySelector('.fixed_nav').style.display = 'block';
  //     document.querySelector('.main-navbar').style.display = 'none';
  //   }
  // });

  // // Initial check when page loads
  // if (window.innerWidth <= 768) {
  //   document.querySelector('.fixed_nav').style.display = 'none';
  //   document.querySelector('.main-navbar').style.display = 'block';
  // } else {
  //   document.querySelector('.fixed_nav').style.display = 'block';
  //   document.querySelector('.main-navbar').style.display = 'none';
  // }

</script>