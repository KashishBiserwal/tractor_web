
<link rel="stylesheet" href="assets/css/main.css">
<!-- <link rel="stylesheet" href="assets/js/main.js"> -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">

<aside class="aside is-placed-left is-expanded">
    <div class="aside-tools py-3" style="justify-content: center;">
       
        <h4 class="text-white fw-bold" style="text-align: center;">Dashboard</h4>
    </div>
   
    <div class="menu is-menu-main py-4">
        <button class="d-inline-flex fw-bold text-white admin-collapse w-100  align-items-center rounded" data-bs-toggle="collapse" data-bs-target="#about-collapse" aria-expanded="true">
            <i class="fa-solid fa-user pe-3"></i> User Management  <span class="ps-2"> <i class="fa-solid fa-caret-down"></i></span>
        </button>
        <div class="collapse px-2" id="about-collapse">
          <ul class="list-unstyled fw-normal small show">
              <li class="ps-3"><a href="usermanagement.php" class="d-inline-flex align-items-center text-white   text-decoration-none rounded">User Listing</a></li>
              <!-- <li class="py-1 ps-3"><a href="total_lead.php" class="d-inline-flex align-items-center text-white text-decoration-none rounded">Total Leads</a></li> -->
              <!-- <li class="py-1 ps-3"><a href="recentactivity.php" class="d-inline-flex align-items-center text-white text-decoration-none rounded">Recent Activity</a></li> -->
              <!-- <li class="py-1 ps-3"><a href="purchasereq.php" class="d-inline-flex align-items-center text-white  text-decoration-none rounded">Purchase Request</a></li> -->
          </ul>
        </div>

        <button class="d-inline-flex fw-bold text-white w-100 my-1 admin-collapse align-items-center rounded" data-bs-toggle="collapse" data-bs-target="#about-lookup" aria-expanded="true">
        <i class="fas fa-list-alt pe-3"></i>Lookup listing <span class="ps-2"> <i class="fa-solid fa-caret-down"></i></span>
        </button>
        <div class="collapse px-2" id="about-lookup">
          <ul class="list-unstyled fw-normal small">
              <li class="py-1 ps-3"><a href="lookupvalue.php" class="d-inline-flex align-items-center text-white   text-decoration-none rounded">Lookup Types</a></li>
              <li class="py-1 ps-3"><a href="lookupdata.php" class="d-inline-flex align-items-center text-white  text-decoration-none rounded">Lookup Data</a></li>
          </ul>
        </div>

        <button class=" d-inline-flex fw-bold text-white w-100 my-1 admin-collapse align-items-center rounded" data-bs-toggle="collapse" data-bs-target="#about-collapselist" aria-expanded="true">
        <i class="fa-solid fa-list pe-3"></i>  Product Listings <span class="ps-2"> <i class="fa-solid fa-caret-down"></i></span>
        </button>
        <div class="collapse px-2  " id="about-collapselist">
          <ul class="list-unstyled fw-normal small">
              <li class="py-1 ps-3"><a href="tractor_listing.php" class="d-inline-flex align-items-center text-white   text-decoration-none rounded"> New Tractor Listings</a></li>
              <li class="py-1 ps-3"><a href="old_tractor_list.php" class="d-inline-flex align-items-center text-white text-decoration-none rounded">Old Tractor List</a></li>
              <li class="py-1 ps-3"><a href="brand_listing.php" class="d-inline-flex align-items-center text-white text-decoration-none rounded"> Brand Listings</a></li>
              <li class="py-1 ps-3"><a href="farm_equip.php" class="d-inline-flex align-items-center text-white text-decoration-none rounded"> New Farm Equipment Listings</a></li>
              <li class="py-1 ps-3"><a href="old_farm_equilist.php" class="d-inline-flex align-items-center text-white text-decoration-none rounded">Old Farm Equipment  List</a></li>
              <li class="py-1 ps-3"><a href="harvester_list.php" class="d-inline-flex align-items-center text-white text-decoration-none rounded">New Harvester Listing</a></li>
              <li class="py-1 ps-3"><a href="old_farm_equilist.php" class="d-inline-flex align-items-center text-white text-decoration-none rounded">Old Harvester List</a></li>
              <li class="py-1 ps-3"><a href="news_updates.php" class="d-inline-flex align-items-center text-white  text-decoration-none rounded">News and Updates</a></li>
              <li class="py-1 ps-3"><a href="tyers_list.php" class="d-inline-flex align-items-center text-white text-decoration-none rounded">New Tyres Listing</a></li>
              <li class="py-1 ps-3"><a href="engine_oil_list.php" class="d-inline-flex align-items-center text-white  text-decoration-none rounded">Engine Oil Listing</a></li>
             
          </ul>
        </div>
        <button class="d-inline-flex fw-bold text-white my-1 admin-collapse w-100 align-items-center rounded" data-bs-toggle="collapse" data-bs-target="#about-collapsebazar" aria-expanded="true">
        <i class="fa-solid fa-cart-shopping pe-3"></i> HaatBazaar <span class="ps-2"> <i class="fa-solid fa-caret-down"></i></span>
        </button>
        <div class="collapse px-2 " id="about-collapsebazar">
          <ul class="list-unstyled fw-normal small">
          <li class="py-1 ps-3"><a href="haatbzr_list.php" class="d-inline-flex align-items-center text-white  text-decoration-none rounded">HaatBazaar List Items</a></li>
          <li class="py-1 ps-3"><a href="haatbzr_item_enq.php" class="d-inline-flex align-items-center text-white text-decoration-none rounded">HaatBazar item Enquiry</a></li>
              <li class="py-1 ps-3"><a href="haatbzr_byr_enq.php" class="d-inline-flex align-items-center text-white text-decoration-none rounded">HaatBazar Buyer Enquiry List</a></li>
          </ul>
        </div>
        <button class="d-inline-flex fw-bold text-white admin-collapse w-100 my-1 align-items-center rounded" data-bs-toggle="collapse" data-bs-target="#about-collapseenq" aria-expanded="true">
        <i class="fa fa-file pe-3 " aria-hidden="true"></i> Enquiries Report <span class="ps-2"> <i class="fa-solid fa-caret-down"></i></span>
        </button>
        <div class="collapse px-2 " id="about-collapseenq">
          <ul class="list-unstyled fw-normal small">
              <li class="py-1 ps-3"><a href="tractor_enq.php" class="d-inline-flex align-items-center text-white   text-decoration-none rounded"> New Tractor Enquiries</a></li>
              <li class="py-1 ps-3"><a href="used_trac_enqui.php" class="d-inline-flex align-items-center text-white text-decoration-none rounded">Used Tractor Enquiries</a></li>
              <li class="py-1 ps-3"><a href="dealer_enq_list.php" class="d-inline-flex align-items-center text-white   text-decoration-none rounded"> Dealers Enquiry Listing</a></li>
              <li class="py-1 ps-3"><a href="farm_equi_enq.php" class="d-inline-flex align-items-center text-white text-decoration-none rounded"> New Farm Equipment Enquiries</a></li>
              <li class="py-1 ps-3"><a href="old_farm_eqi_list.php" class="d-inline-flex align-items-center text-white text-decoration-none rounded"> Old Farm Equipment Enquiries</a></li>
              <li class="py-1 ps-3"><a href="harvester_enqui.php" class="d-inline-flex align-items-center text-white text-decoration-none rounded"> New Harvester Enquiries</a></li>
              <li class="py-1 ps-3"><a href="old_harvester_enqu.php" class="d-inline-flex align-items-center text-white text-decoration-none rounded"> Old Harvester Enquiries</a></li>
              <li class="py-1 ps-3"><a href="tyers_list.php" class="d-inline-flex align-items-center text-white text-decoration-none rounded">Tyres Enquiry</a></li>
              <li class="py-1 ps-3"><a href="nursery_enquiry.php" class="d-inline-flex align-items-center text-white text-decoration-none rounded">Nursery Enquiry</a></li>
              
              <li class="py-1 ps-3"><a href="rent_trsc_enq.php" class="d-inline-flex align-items-center text-white text-decoration-none rounded">Rent Tractor enquiry</a></li>
              <li class="py-1 ps-3"><a href="hire_trac_enq.php" class="d-inline-flex align-items-center text-white text-decoration-none rounded">Hire Tractor Enquiry</a></li>
          </ul>
        </div>
       

        <button class="d-inline-flex fw-bold text-white w-100 my-1 admin-collapse align-items-center rounded" data-bs-toggle="collapse" data-bs-target="#about-collapserent" aria-expanded="true">
        <i class="fa-solid fa-list-check pe-3"></i>  Rent & Hire List <span class="ps-2"> <i class="fa-solid fa-caret-down"></i></span>
        </button>
        <div class="collapse px-2" id="about-collapserent">
          <ul class="list-unstyled fw-normal small">
              <li class="py-1 ps-3"><a href="rent_trac.php" class="d-inline-flex align-items-center text-white   text-decoration-none rounded">Rent Tractor List</a></li>
              <li class="py-1 ps-3"><a href="hire_trac.php" class="d-inline-flex align-items-center text-white  text-decoration-none rounded">Hire Tractor List</a></li>
          </ul>
        </div>

        <button class="d-inline-flex fw-bold text-white w-100 my-1 admin-collapse align-items-center rounded" data-bs-toggle="collapse" data-bs-target="#about-collapsenur" aria-expanded="true">
        <i class="fas fa-list-alt pe-3"></i>Others <span class="ps-2"> <i class="fa-solid fa-caret-down"></i></span>
        </button>
        <div class="collapse px-2" id="about-collapsenur">
          <ul class="list-unstyled fw-normal small">
              <li class="py-1 ps-3"><a href="nursery.php" class="d-inline-flex align-items-center text-white   text-decoration-none rounded">Nursery</a></li>
              <li class="py-1 ps-3"><a href="dealers_list.php" class="d-inline-flex align-items-center text-white  text-decoration-none rounded">Dealers Listing</a></li>
          </ul>
        </div>

        <button class="d-inline-flex fw-bold text-white my-1 admin-collapse w-100 align-items-center rounded" data-bs-toggle="collapse" data-bs-target="#about-collapsenews" aria-expanded="true">
        <i class="fa-regular fa-comments pe-3"></i> Feedback & Support <span class="ps-2"> <i class="fa-solid fa-caret-down"></i></span>
        </button>
        <div class="collapse px-2 " id="about-collapsenews">
          <ul class="list-unstyled fw-normal small">
              <li class="py-1 ps-3"><a href="feedback_ticket.php" class="d-inline-flex align-items-center text-white   text-decoration-none rounded">Feedback & Support Tickets</a></li>
          </ul>
        </div>
       
    </div>

    
</aside>

