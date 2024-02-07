
<link rel="stylesheet" href="assets/css/main.css">
<!-- <link rel="stylesheet" href="assets/js/main.js"> -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">

<aside class="aside is-placed-left is-expanded">
    <div class="aside-tools py-3" style="justify-content: center;">
       
        <h4 class="text-white fw-bold mb-0" style="text-align: center;">Dashboard</h4>
    </div>
   
    <div class="menu is-menu-main py-2">
        <button class=" fw-800 text-white admin-collapse w-100  align-items-center rounded" data-bs-toggle="collapse" data-bs-target="#about-collapse" aria-expanded="true">
            <i class="fa-solid fa-user pe-3"></i> User Management  <span class="ps-2"><i class="fa-solid fa-angle-down"></i></span>
        </button>
        <div class="collapse" id="about-collapse">
          <ul class="list-unstyled fw-800  show mb-0">
              <li class="ps-3"><a href="usermanagement.php" class="align-items-center text-white   text-decoration-none rounded">User Listing</a></li>
              
          </ul>
        </div>

        <button class=" fw-800 text-white w-100  admin-collapse align-items-center rounded" data-bs-toggle="collapse" data-bs-target="#about-lookup" aria-expanded="true">
        <i class="fas fa-list-alt pe-3"></i>Lookup listing <span class="ps-2"> <i class="fa-solid fa-angle-down"></i></span>
        </button>
        <div class="collapse" id="about-lookup">
          <ul class="list-unstyled fw-800 mb-0">
              <li class="py-1 ps-3"><a href="lookupvalue.php" class="d-inline-flex align-items-center text-white   text-decoration-none rounded">Lookup Types</a></li>
              <li class="py-1 ps-3"><a href="lookupdata.php" class="d-inline-flex align-items-center text-white  text-decoration-none rounded">Lookup Data</a></li>
          </ul>
        </div>

        <button class=" fw-800 text-white w-100  admin-collapse align-items-center rounded" data-bs-toggle="collapse" data-bs-target="#about-collapselist" aria-expanded="true">
        <i class="fa-solid fa-list pe-3"></i>  Product Listings <span class="ps-2"> <i class="fa-solid fa-angle-down"></i></span>
        </button>
        <div class="collapse" id="about-collapselist">
          <ul class="list-unstyled fw-800 mb-0">
              <li class="py-1 ps-3"><a href="brand_listing.php" class="d-inline-flex align-items-center text-white text-decoration-none rounded"> Brand Listings</a></li>
              <li class="py-1 ps-3"><a href="tractor_listing.php" class="d-inline-flex align-items-center text-white   text-decoration-none rounded"> New Tractor Listings</a></li>
              <li class="py-1 ps-3"><a href="old_tractor_list.php" class="d-inline-flex align-items-center text-white text-decoration-none rounded">Old Tractor List</a></li>
              <li class="py-1 ps-3"><a href="accessories.php" class="d-inline-flex align-items-center text-white text-decoration-none rounded"> Accessories Listing</a></li>
              <li class="py-1 ps-3"><a href="old_farm_equilist.php" class="d-inline-flex align-items-center text-white text-decoration-none rounded">Old Farm Equipment  List</a></li>
              <li class="py-1 ps-3"><a href="harvester_list.php" class="d-inline-flex align-items-center text-white text-decoration-none rounded">New Harvester Listing</a></li>
              <li class="py-1 ps-3"><a href="old_harvester_equilist.php" class="d-inline-flex align-items-center text-white text-decoration-none rounded">Old Harvester List</a></li>
              <li class="py-1 ps-3"><a href="news_category.php" class="d-inline-flex align-items-center text-white  text-decoration-none rounded">Blog & News Category</a></li>
              <li class="py-1 ps-3"><a href="news_updates.php" class="d-inline-flex align-items-center text-white  text-decoration-none rounded">News and Updates</a></li>
              <li class="py-1 ps-3"><a href="blog_list.php" class="d-inline-flex align-items-center text-white  text-decoration-none rounded">Blog Section</a></li>
              <li class="py-1 ps-3"><a href="tyers_list.php" class="d-inline-flex align-items-center text-white text-decoration-none rounded">New Tyres Listing</a></li>
              <li class="py-1 ps-3"><a href="engine_oil_list.php" class="d-inline-flex align-items-center text-white  text-decoration-none rounded">Engine Oil Listing</a></li>
             
          </ul>
        </div>

        <!-- farm Implements -->
        <button class=" fw-800 text-white  admin-collapse w-100 align-items-center rounded" data-bs-toggle="collapse" data-bs-target="#about-collapsebazar" aria-expanded="true">
        <i class="fa-solid fa-cart-shopping pe-3"></i> Farm Implements <span class="ps-2"> <i class="fa-solid fa-angle-down"></i></span>
        </button>
        <div class="collapse" id="about-collapsebazar">
          <ul class="list-unstyled fw-800 mb-0">
          <li class="py-1 ps-3"><a href="farm_implement_category.php" class="d-inline-flex align-items-center text-white  text-decoration-none rounded">Farm Implement Category</a></li>
              <li class="py-1 ps-3"><a href="farm_imple_subcategory.php" class="d-inline-flex align-items-center text-white text-decoration-none rounded">Farm Implement Subcategory</a></li>
              <li class="py-1 ps-3"><a href="farm_equip.php" class="d-inline-flex align-items-center text-white text-decoration-none rounded"> New Farm Equipment Listings</a></li>
          </ul>
        </div>



        <!-- haatbazar -->
        <button class=" fw-800 text-white  admin-collapse w-100 align-items-center rounded" data-bs-toggle="collapse" data-bs-target="#about-collapsebazar" aria-expanded="true">
        <i class="fa-solid fa-cart-shopping pe-3"></i> HaatBazaar <span class="ps-2"> <i class="fa-solid fa-angle-down"></i></span>
        </button>
        <div class="collapse" id="about-collapsebazar">
          <ul class="list-unstyled fw-800 mb-0">
          <li class="py-1 ps-3"><a href="haatbzr_list.php" class="d-inline-flex align-items-center text-white  text-decoration-none rounded">HaatBazaar List Items</a></li>
              <li class="py-1 ps-3"><a href="haatbzr_byr_enq.php" class="d-inline-flex align-items-center text-white text-decoration-none rounded">HaatBazar Buyer Enquiry List</a></li>
          </ul>
        </div>
        <button class=" fw-800 text-white admin-collapse w-100  align-items-center rounded" data-bs-toggle="collapse" data-bs-target="#about-collapseenq" aria-expanded="true">
        <i class="fa fa-file pe-3 " aria-hidden="true"></i> Enquiries Report <span class="ps-2"> <i class="fa-solid fa-angle-down"></i></span>
        </button>
        <div class="collapse" id="about-collapseenq">
          <ul class="list-unstyled fw-800 mb-0">
              <li class="py-1 ps-3"><a href="tractor_enq.php" class="d-inline-flex align-items-center text-white   text-decoration-none rounded"> New Tractor Enquiries</a></li>
              <li class="py-1 ps-3"><a href="used_trac_enqui.php" class="d-inline-flex align-items-center text-white text-decoration-none rounded">Used Tractor Enquiries</a></li>
              <li class="py-1 ps-3"><a href="dealer_enq_list.php" class="d-inline-flex align-items-center text-white   text-decoration-none rounded"> Dealers Enquiry Listing</a></li>
              <li class="py-1 ps-3"><a href="become_certified_dealer.php" class="d-inline-flex align-items-center text-white   text-decoration-none rounded"> Become Certified Dealers Enquiry</a></li>
              <li class="py-1 ps-3"><a href="farm_equi_enq.php" class="d-inline-flex align-items-center text-white text-decoration-none rounded"> New Farm Equipment Enquiries</a></li>
              <li class="py-1 ps-3"><a href="old_farm_eqi_list.php" class="d-inline-flex align-items-center text-white text-decoration-none rounded"> Old Farm Equipment Enquiries</a></li>
              <li class="py-1 ps-3"><a href="harvester_enqui.php" class="d-inline-flex align-items-center text-white text-decoration-none rounded"> New Harvester Enquiries</a></li>
              <li class="py-1 ps-3"><a href="old_harvester_enqu.php" class="d-inline-flex align-items-center text-white text-decoration-none rounded"> Old Harvester Enquiries</a></li>
              <li class="py-1 ps-3"><a href="tyers_enquiry_list.php" class="d-inline-flex align-items-center text-white text-decoration-none rounded">Tyres Enquiry</a></li>
              <li class="py-1 ps-3"><a href="nursery_enquiry.php" class="d-inline-flex align-items-center text-white text-decoration-none rounded">Nursery Enquiry</a></li>
              <li class="py-1 ps-3"><a href="insurance_enquiry.php" class="d-inline-flex align-items-center text-white text-decoration-none rounded">Insurance Enquiry</a></li>
              <li class="py-1 ps-3"><a href="engine_oil_enquiry.php" class="d-inline-flex align-items-center text-white text-decoration-none rounded">Engine Oil Enquiry</a></li>
              <li class="py-1 ps-3"><a href="loan_enquiry.php" class="d-inline-flex align-items-center text-white text-decoration-none rounded">Loan Enquiry</a></li>
          </ul>
        </div>
       

        <button class="fw-800 text-white w-100  admin-collapse align-items-center rounded" data-bs-toggle="collapse" data-bs-target="#about-collapserent" aria-expanded="true">
        <i class="fa-solid fa-list-check pe-3"></i>  Rent & Hire List <span class="ps-2"> <i class="fa-solid fa-angle-down"></i></span>
        </button>
        <div class="collapse" id="about-collapserent">
          <ul class="list-unstyled fw-800 mb-0">
              <li class="py-1 ps-3"><a href="rent_trac.php" class="d-inline-flex align-items-center text-white   text-decoration-none rounded">Rent Tractor List</a></li>
              <li class="py-1 ps-3"><a href="hire_trac.php" class="d-inline-flex align-items-center text-white  text-decoration-none rounded">Hire Tractor List</a></li>
          </ul>
        </div>

        <button class="fw-800 text-white w-100  admin-collapse align-items-center rounded" data-bs-toggle="collapse" data-bs-target="#about-collapsenur" aria-expanded="true">
        <i class="fas fa-list-alt pe-3"></i>Others <span class="ps-2"> <i class="fa-solid fa-angle-down"></i></span>
        </button>
        <div class="collapse" id="about-collapsenur">
          <ul class="list-unstyled fw-800 mb-0">
              <li class="py-1 ps-3"><a href="nursery.php" class="d-inline-flex align-items-center text-white   text-decoration-none rounded">Nursery</a></li>
              <li class="py-1 ps-3"><a href="dealers_list.php" class="d-inline-flex align-items-center text-white  text-decoration-none rounded">Dealers Listing</a></li>
          </ul>
        </div>

        <button class="fw-800 text-white  admin-collapse w-100 align-items-center rounded" data-bs-toggle="collapse" data-bs-target="#about-collapsenews" aria-expanded="true">
        <i class="fa-regular fa-comments pe-3"></i>Feedback & Support <span class="ps-2"> <i class="fa-solid fa-angle-down"></i></span>
        </button>
        <div class="collapse" id="about-collapsenews">
          <ul class="list-unstyled fw-800 mb-0">
              <li class="py-1 ps-3"><a href="feedback_ticket.php" class="d-inline-flex align-items-center text-white   text-decoration-none rounded">Feedback & Support Tickets</a></li>
          </ul>
        </div>
       
    </div>

    
</aside>

<script>
window.setInterval(() => {
var date= new Date();
var currentdate = date.toString();
var expiredate = localStorage.getItem('expireIn');
var newtime = new Date(expiredate);
newtime.setSeconds(newtime.getSeconds() - 20);
var exiredatenew = new Date(newtime).toString();
var token =  localStorage.getItem('token');
if(currentdate >= exiredatenew){
  var username = localStorage.getItem('email');
  var password = localStorage.getItem('password');
  var paraArr = {};
    paraArr['email'] = username;
    paraArr['password'] = password;
  var apiBaseURL =APIBaseURL;
  var url = apiBaseURL + 'user_login';
      $.ajax({
          url: url,
          type: "POST",
          contentType: "application/json", 
          data: JSON.stringify(paraArr), 
          success: function (result) {
              localStorage.removeItem('email', username);
              localStorage.removeItem('password', password);
              localStorage.setItem('token', result.access_token);
              localStorage.setItem('email', username);
              localStorage.setItem('password', password);
              const d = new Date();
              d.setTime(d.getTime() + 60 * 60 * 1000);
              var expires_in = d;
              localStorage.setItem('expireIn', expires_in);
            //  window.location.href = baseUrl + "usermanagement.php"; 
            
        

          },
          error: function (xhr, textStatus, errorThrown) {
              console.log(xhr.status, 'error');
              if (xhr.status === 401) {
                  console.log('Invalid credentials');
                  var htmlcontent = `<p>Invalid credentials!</p>`;
              document.getElementById("error_message").innerHTML = htmlcontent;
                
              } else if (xhr.status === 403) {
                  console.log('Forbidden: You don\'t have permission to access this resource.');
                  var htmlcontent = ` <p> You don't have permission to access this resource.</p>`;
                  document.getElementById("error_message").innerHTML = htmlcontent;
                
              } else {
                  console.log('An error occurred:', textStatus, errorThrown);
                  var htmlcontent = `<p>An error occurred while processing your request.</p>`;
              document.getElementById("error_message").innerHTML = htmlcontent;
                  
              }
          },
          complete: function () {
              // Hide the spinner after the API call is complete
              hideOverlay();
          },
          
      });
  }


}
        ,1000);


      var mouseTimer;

      function handleEvent(event) {
          clearTimeout(mouseTimer);
          mouseTimer = setTimeout(stopRecording, 60 * 60 *1000); 
      }
       
      document.addEventListener('mousemove', handleEvent);
      document.addEventListener('click', handleEvent);
      document.addEventListener('keydown', handleEvent);
   
      function stopRecording() {
      var url = "<?php echo $APIBaseURL; ?>user_logout";
    var token = localStorage.getItem('token');
    
    if (!token) {
        console.error('Token not found. Cannot log out.');
        return;
    }

    $.ajax({
        url: url,
        type: "POST",
        headers: {
            'Authorization': 'Bearer ' + token
        },
        success: function (result) {
            console.log("Logout admin");
            localStorage.removeItem("token");
            localStorage.removeItem("expireIn");
            localStorage.removeItem('email', email);
            localStorage.removeItem('password', password);
            window.location.href = "login.php";
        },
        error: function (error) {
            console.error('Error logging out:', error);
        }
    });
      }
</script>
