<script> var APIBaseURL = "<?php echo $APIBaseURL; ?>";</script>
<script> var baseUrl = "<?php echo $baseUrl; ?>";</script>
<script src="<?php $baseUrl; ?>model/header.js"></script>
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

</style>
<div class="fixed_nav">
<nav class="navbar navbar-expand-sm navbar-index">
  <div class="container p-0">
    <div class="row w-100 m-0">
      <div class="col-sm-3">
        <a href="index.php" class="text-decoration-none">
          <img src="assets/images/IMG-20240516-WA0006.jpg"alt="reload img" class="logo ">
        </a>
      </div>
      <button class="navbar-toggler col-sm-6" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse col-sm-9 pe-0" id="collapsibleNavbar" style="justify-content: end;">
        <div class="row w-100">
          <div class="col-sm-8">
            <form class="mb-0 navsearch">
              <div class="row w-100">
                  <div class="col-sm-9 pe-0">
                      <div class="autocomplete">
                          <input id="searchInput" type="text" class="w-100 text-dark" style="height:35px;"placeholder="Search">
                          <ul id="suggestions"></ul>
                      </div>
                  </div>
                  <div class="col-sm-3 ps-0">
                      <button class="btn btn-success" style="height:35px;" type="button" onclick="redirectToSearchPage()"><i class="fa-solid fa-magnifying-glass" style="font-size: 26px;"></i></button>
                  </div> 
              </div>
            </form>
        </div>
  <div class="col-sm-4 mt-2">
    <ul class="navbar-nav float-end">
        <li class="nav-item">
            <a class="nav-link" href="https://play.google.com/store/apps/details?id=com.divyal.bharat_tractor_app_1" style="border-right: 1px solid #fff;">Download App</a>
        </li>
        <li class="nav-item" id="loginContainer">
            <a class="nav-link" id="loginButton" href="user-login.php">Login</a>
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
<nav class="navbar  navbar-expand-lg navbar-dark main-navbar" >
  <div class="container">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
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
              <a class=" nav-link nav-link_brand dropdown-toggle fw-bold text-dark " href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Brand
              </a>
              <ul class="dropdown-menu p-0" id="selectedImagesContainer2">
              </ul>
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
           <hr class="dropdown-divider m-0">
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
            </li>
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
              <ul class="dropdown-menu p-0" id="selectedImagesContainer3">
              </ul>
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
              <a class="nav-link dropdown-toggle text-dark fw-bold" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              HaatBazaar
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
          <ul class="dropdown-menu p-0" id="selectedImagesContainer1">
           
          </ul>
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
        <p>Sorry, there was an issue with the Data Loading , please try again.</p>
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
<script>
  $(document).ready(function(){
    news_category();
    get_brands();
    get_implement();
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

            // Take only the first four categories
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

                    <!-- <li id="allNews"><a class="dropdown-item fw-bold" href="all_news.php">All News</a></li>
                   <hr class="dropdown-divider m-0">
                    <li id="tractorNews"><a class="dropdown-item fw-bold" href="tractor_news.php" >Tractor News</a></li>
                   <hr class="dropdown-divider m-0">
                    <li id="agricultureNews"><a class="dropdown-item fw-bold" href="agri_news.php">Agriculture News</a></li>
                   <hr class="dropdown-divider m-0">
                    <li id="sarkariNews"><a class="dropdown-item fw-bold" href="sarkari_news.php">Sarkari Yojana news</a></li> -->




                    <!-- <div class="col-sm-4">
                <ul class="navbar-nav float-end">
                    <li class="nav-item">
                        <a class="nav-link" href="#" style="border-right: 1px solid #fff;">Download App</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="loginButton" href="user-login.php">Login</a>
                        <div id="myAccountDropdown" class="dropdown" style="display: none;">
                            <button class="nav-link dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                My Account
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton" style="background-color: #fff;">
                                <a class="dropdown-item text-dark" href="#" onclick="logout()">Logout</a>
                            </div>
                        </div>
                    </li>
                </ul>
            </div> -->

<!-- 
            <script>
    var loggedIn = true; // Change this to false if the user is logged out

    window.onload = function() {
        updateUI();
    };

    function updateUI() {
        var loginButton = document.getElementById("loginButton");
        var myAccountDropdown = document.getElementById("myAccountDropdown");

        if (loggedIn) {
            // User is logged in, hide login button and show my account dropdown
            loginButton.style.display = "none";
            myAccountDropdown.style.display = "block";
        } else {
            // User is not logged in, show login button and hide my account dropdown
            loginButton.style.display = "block";
            myAccountDropdown.style.display = "none";
        }
    }

    function logout() {
        // Perform logout actions here

        // Clear token (example: remove from local storage)
        localStorage.removeItem('token');

        // Update loggedIn status
        loggedIn = false;

        // Update UI
        updateUI();

        // Redirect to index page after logout
        window.location.href = 'index.php'; // Redirect to index page
    }
</script> -->