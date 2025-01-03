<script> var APIBaseURL = "<?php echo $APIBaseURL; ?>";</script>
<script> var baseUrl = "<?php echo $baseUrl; ?>";</script>
<script src="<?php $baseUrl; ?>model/header.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

<style>
.autocomplete {
  position: relative;
  z-index: 999; /* Set a higher z-index value */
}
.autocomplete ul {
  list-style: none;
  padding: 0;
  margin: 0;
  position: absolute;
  background-color: #fff;
  border: 1px solid #ccc;
  width: 100%;
  max-height: 200px;
  overflow-y: auto;
  display: none;
}

.autocomplete ul li {
  padding: 8px 12px;
  cursor: pointer;
}

.autocomplete ul li:hover {
  background-color: #f0f0f0;
}
::placeholder {
        color: grey;
    }
    .logo {
    border-radius: 0; 
}
.language-image {
  filter: brightness(0) invert(1);
}

.goog-te-gadget {
    color: transparent!important;
    font-size:0px;
  }
  .goog-text-highlight {
    background: none !important;
    box-shadow: none !important;
  }
  #google_translate_element select{
    background:#2b1a12;
    color:#fff4e4;
    border: none;
    font-weight:bold;
    border-radius:3px;
    padding:8px 12px
  }
.language-dropdown{
  width: 10px;
}
iframe.skiptranslate {
    display: none !important;
}
#goog-gt-tt {
  visibility: hidden !important;  /* Hide the tooltip by default */
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
    height: 35px; /* Same height as search input */
    border-radius: 0 2px 2px 0;
    background-color: #346498;
    border: block;
    border-color:#ebedee;
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
    /* transition: background-color 0.2s ease; */
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
  .lang{
  align-self: start;
}
}
@media (max-width: 768px) { 
  .navbar-navbar {
    display: flex;
    flex-direction: row; 
    justify-content: space-between;
    align-items: center;
  }
.navbar-nav-mobile{
  margin-left: 16px;
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
  .search-box-mobile{
    width: 320px;
    margin-left: 57px;
  }
  .navbar-toggler:focus {
  outline: none; 
  box-shadow: none; 
}
.navbar-toggler-2 {
    display: block;
  }
#search_form_container{
  margin-left: -17px;
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
/* Ensure the dropdown appears below the button */
#myAccountDropdown .dropdown-menu {
  position: absolute;
  top: 100%; /* Place it just below the parent button */
  left: 0; /* Align it with the left edge of the parent button */
  transform: translateX(0); /* Prevent any unintended horizontal shifts */
  z-index: 1050; /* Ensure it appears above other elements */
  width: auto; /* Adjust width as needed */
  min-width: 150px; /* Prevent the dropdown from being too narrow */
}

/* Adjust for mobile screens */
@media (max-width: 576px) {
  #myAccountDropdown .dropdown-menu {
    width: 100%; /* Full width for mobile screens */
    left: 0; /* Align with the parent button */
  }
}

</style>
<body>
  
<div class="fixed_nav" >
  <nav class="navbar navbar-expand-sm navbar-index">
    <div class="container p-0">
      <div class="row w-100 m-0">
        <div class="col-sm-3 d-flex align-items-center justify-content-between">
          <a href="index.php" class="text-decoration-none">
            <img src="assets/images/IMG-20240516-WA0006.jpg" alt="reload img" class="logo">
          </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
            <i class="bi bi-three-dots-vertical" style="color: white;"></i>
          </button>
        </div>
        <div class="collapse navbar-collapse col-sm-9 pe-0" id="collapsibleNavbar" style="justify-content: end;">
          <div class="row w-100">
            <div class="col-sm-6 mt-1 search-box-mobile">
              <form class="mb-0 navsearch position-relative">
                <div class="input-group">
                  <input id="searchInput" type="text" class="form-control search-input" placeholder="Search">
                    <button class="btn btn-primary search-button" type="button" onclick="redirectToSearchPage()">
                      <i class="fa-solid fa-magnifying-glass"></i>
                    </button>
                </div>
                <ul id="suggestions" class="suggestion-list mt-5" style="display:none"></ul>
              </form>
            </div>
            <div class="col-sm-6 navbar-nav-mobile">
              <ul class="navbar-nav navbar-navbar float-end ">
                <li class="dropdown lang">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown2" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <img src="https://static-asset.tractorjunction.com/tj/language-icon.svg" width="28" height="28" alt="Language Icon" title="Language" class="language-image">
                    <span id="selected-language" class="text-white">English</span>
                  </a>
                  <div class="dropdown-menu language-dropdown" id="lang-mobile-block">
                    <a href="#" hreflang="en" class="dropdown-item text-dark notranslate" onclick="translateLanguage('en')">English</a>
                    <a href="#" hreflang="hi" class="dropdown-item text-dark notranslate" onclick="translateLanguage('hi')">Hindi</a>
                    <a href="#" hreflang="bn" class="dropdown-item text-dark notranslate" onclick="translateLanguage('bn')">Bengali</a>
                    <a href="#" hreflang="mr" class="dropdown-item text-dark notranslate" onclick="translateLanguage('mr')">Marathi</a>
                    <a href="#" hreflang="pa" class="dropdown-item text-dark notranslate" onclick="translateLanguage('pa')">Punjabi</a>
                    <a href="#" hreflang="or" class="dropdown-item text-dark notranslate" onclick="translateLanguage('or')">Odia</a>
                    <a href="#" hreflang="te" class="dropdown-item text-dark notranslate" onclick="translateLanguage('te')">Telugu</a>
                    <a href="#" hreflang="ta" class="dropdown-item text-dark notranslate" onclick="translateLanguage('ta')">Tamil</a>
                    <a href="#" hreflang="ml" class="dropdown-item text-dark notranslate" onclick="translateLanguage('ml')">Malayalam</a>
                  </div>
                </li>
              <li class="" id="google_translate_element" hidden></li>
              <li class="nav-item up-down mt-2">
                    <a class="nav-link" href="https://play.google.com/store/apps/details?id=com.divyal.bharat_tractor_app_1" style="border-right: 1px solid #fff;">Download App</a>
                </li>

                <li class="nav-item up-down mt-2" id="loginContainer">
                  <a class="nav-link" id="loginButton" href="user-login.php">
                    Login 
                  </a>
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
  <nav class="navbar  navbar-expand-lg navbar-dark main-navbar p-0" >
    <div class="container p-0">
      <button class="navbar-toggler-2" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon bg-dark"></span>
      </button>
      <div class="collapse navbar-collapse p-0" id="navbarSupportedContent">
        <ul class="navbar-nav  mb-2 mb-lg-0 ">
          <li class="nav-item dropdown dropdown-toggle ">
            <a class="nav-link dropdown-toggle  fw-bold " href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              New Tractor
            </a>
            <ul class="dropdown-menu">
              <li class="nav-item dropend">
                <a class=" nav-link nav-link_brand dropdown-toggle  fw-bold text-dark " href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Brand
                </a>
                <ul class="dropdown-menu p-0" id="selectedImagesContainer2"></ul>
              </li>
              <hr class="dropdown-divider m-0">
                <li><a href="find_new_tractors.php" class="dropdown-item fw-bold" >Find New Tractors</a></li>
              <hr class="dropdown-divider m-0">
                <li><a href="popular_tractors.php" class="dropdown-item  fw-bold" >Popular Tractors</a></li>
              <hr class="dropdown-divider m-0">
                <li><a href="upcoming_tractors.php" class="dropdown-item fw-bold" >Upcoming Tractor</a></li>
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
              <!-- <li class="nav-item dropend "> -->
                <a class=" nav-link nav-link_brand dropdown-toggle fw-bold  " href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Sell Tractor
                </a>
                <ul class="dropdown-menu p-0">
                  <li><a class="dropdown-item fw-bold  py-2" href="sell_used_trac.php">Sell Used Tractor</a></li>
                <hr class="dropdown-divider m-0">
                  <li><a class="dropdown-item fw-bold  py-2" href="sell_used_farm_imple.php">Used Farm Implements</a></li>
                <hr class="dropdown-divider m-0">
                  <li><a class="dropdown-item fw-bold  py-2" href="sell_used_harvester.php">Used Harvester</a></li>
                </ul>
              <!-- </li> -->
            </hr>
          </li>
          <li class="nav-item dropdown dropdown-toggle ">
            <a class="nav-link dropdown-toggle  fw-bold " href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Used
            </a>
            <ul class="dropdown-menu p-0">
              <li class="nav-item dropend ">
                <a class=" nav-link nav-link_brand dropdown-toggle fw-bold text-dark" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Buy Used
                </a>
                <ul class="dropdown-menu p-0">
                  <!-- <li><a class="dropdown-item fw-bold  py-2" href="certified_used_tractor.php">Certified Used Tractors</a></li>
                <hr class="dropdown-divider m-0"> -->
                  <li><a class="dropdown-item fw-bold  py-2" href="used_tractor.php">Used Tractors</a></li>
                <hr class="dropdown-divider m-0">
                  <li><a class="dropdown-item fw-bold  py-2" href="used_farm_imple.php">Used Farm Implements</a></li>
                <hr class="dropdown-divider m-0">
                  <li><a class="dropdown-item fw-bold py-2" href="used_harvester.php">Used Harvester</a></li>
                <hr class="dropdown-divider m-0">
                  <li><a class="dropdown-item  fw-bold py-2" href="tractor_valuation.php">Tractor valuation</a></li>
                <hr class="dropdown-divider m-0">
                  <li><a class="dropdown-item  fw-bold py-2" href="find_used_tracters.php">Find Used Tractor</a></li>
                </ul>
              </li>
            <!-- <hr class="dropdown-divider m-0">
              <li class="nav-item dropend ">
                <a class=" nav-link nav-link_brand dropdown-toggle fw-bold text-dark " href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Sell Used
                </a>
                <ul class="dropdown-menu p-0">
                  <li><a class="dropdown-item fw-bold  py-2" href="sell_used_trac.php">Sell Used Tractor</a></li>
                <hr class="dropdown-divider m-0">
                  <li><a class="dropdown-item fw-bold  py-2" href="sell_used_farm_imple.php">Used Farm Implements</a></li>
                <hr class="dropdown-divider m-0">
                  <li><a class="dropdown-item fw-bold  py-2" href="sell_used_harvester.php">Used Harvester</a></li>
                </ul>
              </li> -->
            <hr class="dropdown-divider m-0">
              <li class="nav-item dropend ">
                <a class=" nav-link nav-link_brand dropdown-toggle fw-bold text-dark " href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
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
            <a class="nav-link dropdown-toggle  fw-bold" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Farm Equipment's
            </a>
            <ul class="dropdown-menu p-0">
              <li class="nav-item dropend">
                <a class="nav-link dropdown-toggle text-dark fw-bold" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Implements</a>
                <ul class="dropdown-menu p-0" id="selectedImagesContainer3"></ul>
                  <!-- <li><a class="dropdown-item fw-bold py-1 mt-2" href="all_farm_imple.php">All Implements</a></li>
                <hr class="dropdown-divider m-0">
                  <li><a class="dropdown-item fw-bold py-1" href="#">Rotary Tiller</a></li>
                <hr class="dropdown-divider m-0">
                  <li><a class="dropdown-item fw-bold py-1" href="#">Cultivator</a></li>
                <hr class="dropdown-divider m-0">
                  <li><a class="dropdown-item fw-bold py-1" href="#">Plough</a></li>
                <hr class="dropdown-divider m-0">
                  <li><a class="dropdown-item  fw-bold py-1" href="#">Harrow</a></li>
                <hr class="dropdown-divider m-0">
                  <li><a class="dropdown-item  fw-bold py-1" href="#">Trailor</a></li>
                <hr class="dropdown-divider m-0">
                  <li><a class="dropdown-item  fw-bold py-1 mb-1" href="#">Tractor Mounted Sprayers</a></li> -->
              </li>
              <li>
                <hr class="dropdown-divider m-0">
              </li>
              <li class="" ><a class="dropdown-item text-dark fw-bold" href="harvester.php">Harvester</a></li>
            </ul>
          </li>
          <li class="nav-item dropdown dropdown-toggle">
            <a class="nav-link dropdown-toggle  fw-bold" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Market & Farms
            </a>
            <ul class="dropdown-menu p-0">
              <li class="nav-item dropend">
                <a class="nav-link text-dark fw-bold" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Bazaar Apke Aas Pass
                </a>
                <ul class="dropdown-menu p-0">
                  <li><a class="dropdown-item fw-bold" href="dummy.php">Sell Product</a></li>
                  <hr class="dropdown-divider m-0">
                  <li><a class="dropdown-item fw-bold " href="hatbazar_buy.php">Buy Product</a></li>
                </ul>
              </li>
              <li><hr class="dropdown-divider m-0"></li>
              <li class="" ><a class="dropdown-item text-dark fw-bold" href="nursery_ui.php">Nursery</a></li>
            </ul>
          </li>
          <li class="nav-item dropdown dropdown-toggle">
            <a class="nav-link dropdown-toggle  fw-bold" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Enquiries
            </a>
            <ul class="dropdown-menu p-0">
              <li><a class="dropdown-item fw-bold" href="onload.php"> On-Road Price</a></li>
            <hr class="dropdown-divider m-0">
              <li><a class="dropdown-item fw-bold" href="compare_trac.php">Compare</a></li>
            </ul>
          </li>
          <li class="nav-item dropdown dropdown-toggle">
            <a class="nav-link dropdown-toggle  fw-bold" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Finance
            </a>
            <ul class="dropdown-menu p-0">
              <li><a class="dropdown-item fw-bold" href="new_tractor_loan.php">Loan</a></li>
            <hr class="dropdown-divider m-0">
              <li><a class="dropdown-item fw-bold" href="Insurance.php">Insurance</a></li>
            </ul>
          </li>
          
          <!-- <li class="nav-item dropdown dropdown-toggle mt-3 ">
            <a class="nav-link dropdown-toggle text-white fw-bold" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Loan
            </a> 
            <ul class="dropdown-menu pt-3 mt-2">
              <li><a class="dropdown-item fw-bold" href="new_tractor_loan.php">New Tractor Loan</a></li>
            <hr class="dropdown-divider m-0">
              <li><a class="dropdown-item fw-bold" href="#">Used Tractor Loan</a></li>
            <hr class="dropdown-divider m-0">
              <li><a class="dropdown-item fw-bold" href="#">Loan Against Tractor</a></li>
            <hr class="dropdown-divider m-0">
              <li><a class="dropdown-item fw-bold" href="#">Personal Loan</a></li>
            </ul>
          </li>-->
          <li class="nav-item dropdown dropdown-toggle">
            <a class="nav-link dropdown-toggle fw-bold" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              News & Update
            </a>
            <ul class="dropdown-menu p-0" id="selectedImagesContainer1"></ul>
          </li>
          <li class="nav-item dropdown dropdown-toggle ">
            <a class="nav-link dropdown-toggle  fw-bold " href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              More
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
    </div>
  </nav>
</div>

<!-- model popup -->
<div class="modal fade" id="errorStatusLoading" tabindex="-1" role="dialog" aria-labelledby="errorStatusLoadingTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="errorStatusLoadingTitle">Loading Status</h5>
      </div>
      <div class="modal-body">
        <p></p>
         <!-- <img src="../assets/images/success.gif">  -->
      </div>
      <div class="modal-footer">
        <button type="button" class="btn add_btn btn-success btn_all px-3" data-bs-dismiss="modal">OK</button>
        <!-- <a class="btn  text-primary" data-dismiss="modal">Ok</a> -->
      </div>
    </div>
  </div>
</div>

<?php 
 include 'includes/footertag.php';
?>
</body>
<script>
  
</script>
<script>
  $(document).ready(function(){
    news_category();
    get_brands();
    get_implement();
  });
  $('.navbar-toggler').click(function() {
    $('#collapsibleNavbar').toggle(); 
  });
  $('.navbar-toggler-2').click(function() {
    $('#navbarSupportedContent').toggle(); 
  });
  function news_category(id) {
    var url = 'http://tractor-api.divyaltech.com/api/customer/get_news_category';
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
            data.news_category.sort(function(a, b) {
                // Sorting by category ID, change this according to your sorting criteria
                return a.id - b.id;
            });

            var topFourCategories = data.news_category.slice(0, 4);
              var newCard = topFourCategories.map(function(category) {
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
  var url = 'http://tractor-api.divyaltech.com/api/customer/get_implement_category';
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
  var url = 'http://tractor-api.divyaltech.com/api/customer/get_all_brands';
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
$(document).ready(function() {
    $("#searchInput").on("input", function() {
        var query = $(this).val();
        if (query.length > 0) {
            var suggestions = getSuggestions(query);
            displaySuggestions(suggestions);
        } else {
            $("#suggestions").empty().hide();
        }
    });

    $(document).on("click", "#suggestions li", function() {
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
    $.each(suggestionUrls, function(suggestion, url) {
        if (suggestion.toLowerCase().indexOf(query.toLowerCase()) !== -1) {
            filteredSuggestions.push(suggestion);
        }
    });
    return filteredSuggestions;
}

function displaySuggestions(suggestions) {
    var list = $("#suggestions");
    list.empty();
    $.each(suggestions, function(index, suggestion) {
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
document.getElementById('navbarDropdown2').addEventListener('click', function() {
  var dropdownMenu = document.getElementById('lang-mobile-block');
  if (dropdownMenu.style.display === 'none' || dropdownMenu.style.display === '') {
    dropdownMenu.style.display = 'block';
  } else {
    dropdownMenu.style.display = 'none';
  }
});

window.onload = function() {
    var googleTranslateWidget = document.querySelectorAll('.VIpgJd-ZVi9od-l4eHX-hSRGPd, #options, .VIpgJd-ZVi9od-ORHb-KE6vqe, #google_translate_element table');
    googleTranslateWidget.forEach(function(element) {
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

document.addEventListener("DOMContentLoaded", function() {
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
    navItems.forEach(function(item) {
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

window.onload = function() {
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
