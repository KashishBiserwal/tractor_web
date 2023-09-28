
<link rel="stylesheet" href="assets/css/main.css">
<!-- <link rel="stylesheet" href="assets/js/main.js"> -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
<aside class="aside is-placed-left is-expanded">
    <div class="aside-tools" style="justify-content: center;">
        <!-- <div style="text-align: center;">
            <a href="#">
                <img src="./assets/images/logo-white.png" alt="BJP">
            </a>
        </div> -->
        <h4 class="text-white fw-bold py-2" style="text-align: center;">Dashboard</h4>
    </div>
    
    <div class="menu is-menu-main">
        <div class="accordion accordian_nav" id="accordionExample">
            <div class="accordion-item accor_item">
                <ul class="accordion-header menu-list" id="headingOne">
                <button class="accordion-button accordian_nav text-white"  style="background: #2f3e46;"data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                <i class="fa-solid fa-user pe-3"></i>  User Management
                </button>
                
                </ul>
                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                    <div class="accordion-body accordian_nav">

                        <li class="sidebar-item pt-1 text-white">
                            <a class="sidebar-link text-decoration-none text-white" href="usermanagement.php">
                                <i class="align-middle" data-feather="user"></i> <span class="align-middle">User Overview</span>
                            </a>
                        </li>

                        <li class="sidebar-item pt-1 text-white">
                            <a class="sidebar-link text-decoration-none text-white" href="total_lead.php">
                                <i class="align-middle" data-feather="log-in"></i> <span class="align-middle">Total Leads</span>
                            </a>
                        </li>

                        <li class="sidebar-item pt-1 text-white">
                            <a class="sidebar-link text-decoration-none text-white" href="recentactivity.php">
                                <i class="align-middle" data-feather="user-plus"></i> <span class="align-middle">Recent Activity</span>
                            </a>
                        </li>

                        <li class="sidebar-item pt-1 text-white">
                            <a class="sidebar-link text-decoration-none text-white" href="purchasereq.php">
                                <i class="align-middle" data-feather="book"></i> <span class="align-middle">Purchase Request</span>
                            </a>
                        </li>
                        <li class="sidebar-item pt-1 text-white">
                            <a class="sidebar-link text-decoration-none text-white" href="old_tractor_list.php">
                                <i class="align-middle" data-feather="book"></i> <span class="align-middle">Old Tractor List</span>
                            </a>
                        </li>
                        <li class="sidebar-item pt-1 text-white">
                            <a class="sidebar-link text-decoration-none text-white" href="intrested_buyers.php">
                                <i class="align-middle" data-feather="book"></i> <span class="align-middle">Interested Buyer List</span>
                            </a>
                        </li>
                    </div>
                </div>
            </div>
            <div class="accordion-item accor_item">
                <h2 class="accordion-header" id="headingTwo">
                <button class="accordion-button  accordian_nav text-white collapsed"  style="background: #2f3e46;" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                <i class="fa-solid fa-list pe-3"></i>  Product Listings
                </button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                    <div class="accordion-body  accordian_nav">
                        <li class="sidebar-item pt-1 text-white">
                            <a class="sidebar-link text-decoration-none text-white" href="tractor_listing.php">
                                    Tractor Listings
                            </a>
                        </li>
                        <li class="sidebar-item pt-1 text-white">
                            <a class="sidebar-link text-decoration-none text-white" href="brand_listing.php">
                                    Tractor Brand Listings
                            </a>
                        </li>

                        <li class="sidebar-item pt-1 text-white">
                            <a class="sidebar-link text-decoration-none text-white" href="farm_equip.php">
                                <i class="align-middle" data-feather="check-square"></i> <span class="align-middle">Farm Equipment Listings</span>
                            </a>
                        </li>

                        <li class="sidebar-item pt-1 text-white">
                            <a class="sidebar-link text-decoration-none text-white" href="news_updates.php">
                                <i class="align-middle" data-feather="grid"></i> <span class="align-middle">News and Updates</span>
                            </a>
                        </li>

                        <li class="sidebar-item pt-1 text-white">
                            <a class="sidebar-link text-decoration-none text-white" href="tyers_list.php">
                                <i class="align-middle" data-feather="align-left"></i> <span class="align-middle">Tyres Listing</span>
                            </a>
                        </li>

                        <li class="sidebar-item pt-1 text-white">
                            <a class="sidebar-link text-decoration-none text-white" href="engine_oil_list.php">
                            <i class="align-middle" data-feather="align-left"></i><span class="align-middle">Engine Oil Listing</span>
                            </a>
                        </li>
                        <li class="sidebar-item pt-1 text-white">
                            <a class="sidebar-link text-decoration-none text-white" href="dealers_list.php">
                            <i class="align-middle" data-feather="align-left"></i> <span class="align-middle">Dealers Listing</span>
                            </a>
                        </li>
                    </div>
                </div>
            </div>
            <div class="accordion-item accor_item">
                <h2 class="accordion-header" id="heading4">
                <button class="accordion-button  accordian_nav collapsed text-white"  style="background: #2f3e46;" type="button" data-bs-toggle="collapse" data-bs-target="#collapse4" aria-expanded="false" aria-controls="collapseTwo">
                    <i class="fa fa-file pe-3 " aria-hidden="true"></i> Enquiries Report
                </button>
                </h2>
                <div id="collapse4" class="accordion-collapse collapse" aria-labelledby="heading4" data-bs-parent="#accordionExample">
                    <div class="accordion-body accordian_nav">
                        <li class="sidebar-item pt-1 text-white">
                            <a class="sidebar-link text-decoration-none text-white" href="tractor_enq.php">
                                <i class="align-middle" data-feather="bar-chart-2"></i> <span class="align-middle">Tractor Enquiries</span>
                            </a>
                        </li>

                        <li class="sidebar-item pt-1 text-white">
                            <a class="sidebar-link text-decoration-none text-white" href="used_trac_enqui.php">
                                <i class="align-middle" data-feather="map"></i> <span class="align-middle">Used Tractor Enquiries</span>
                            </a>
                        </li>

                        <li class="sidebar-item pt-1 text-white ">
                            <a class="sidebar-link text-decoration-none text-white" href="farm_equi_enq.php">
                            <i class="align-middle" data-feather="map"></i>  <span class="align-middle">Farm Equipment Enquiries</span>
                            </a>
                        </li>

                        <li class="sidebar-item pt-1 text-white">
                            <a class="sidebar-link text-decoration-none text-white" href="harvester_enqui.php">
                            <i class="align-middle" data-feather="map"></i>  <span class="align-middle">Harvester Enquiries</span>
                            </a>
                        </li>
                        <li class="sidebar-item pt-1 text-white ">
                            <a class="sidebar-link text-decoration-none text-white" href="sell_useddadmin.php">
                            <i class="align-middle" data-feather="map"></i>  <span class="align-middle ">Sell Used tractor Enquiries</span>
                            </a>
                        </li>
                    </div>
                </div>
            </div>
            <div class="accordion-item accor_item">
                <h2 class="accordion-header" id="heading6">
                <button class="accordion-button collapsed text-white" style="background: #2f3e46;" type="button" data-bs-toggle="collapse" data-bs-target="#collapse6" aria-expanded="false" aria-controls="collapseTwo">
                <i class="fa-solid fa-bars pe-3"></i>  Others
                </button>
                </h2>
                <div id="collapse6" class="accordion-collapse collapse" aria-labelledby="heading6" data-bs-parent="#accordionExample">
                    <div class="accordion-body accordian_nav">
                        <li class="sidebar-item pb-3 text-white">
                            <a class="sidebar-link text-decoration-none text-white" href="nursery.php">
                             <span class="align-middle ">Nursery</span>
                            </a>
                        </li>
                    </div>
                </div>
            </div>
            <div class="accordion-item accor_item">
                <h2 class="accordion-header" id="heading5">
                <button class="accordion-button collapsed text-white" style="background: #2f3e46;" type="button" data-bs-toggle="collapse" data-bs-target="#collapse5" aria-expanded="false" aria-controls="collapseTwo">
                <i class="fa-regular fa-comments pe-3"></i> Feedback & Support
                </button>
                </h2>
                <div id="collapse5" class="accordion-collapse collapse" aria-labelledby="heading5" data-bs-parent="#accordionExample">
                    <div class="accordion-body accordian_nav">
                        <li class="sidebar-item pb-3 text-white">
                            <a class="sidebar-link text-decoration-none text-white" href="feedback_ticket.php">
                             <span class="align-middle ">Feedback & Support Tickets</span>
                            </a>
                        </li>
                    </div>
                </div>
            </div>
        </div>
        <!-- <div class="btn-group">
                <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuClickable" data-bs-toggle="dropdown" data-bs-auto-close="false" aria-expanded="false">
                    Manual close
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuClickable">
                    <li><a class="dropdown-item" href="#">Menu item</a></li>
                    <li><a class="dropdown-item" href="#">Menu item</a></li>
                    <li><a class="dropdown-item" href="#">Menu item</a></li>
                </ul>
            </div> -->
    </div>
    <!-- <div class="btn-group">
        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuClickable" data-bs-toggle="dropdown" data-bs-auto-close="false" aria-expanded="false">
            Manual close
        </button>
        <ul class="dropdown-menu" aria-labelledby="dropdownMenuClickable">
            <li><a class="dropdown-item" href="#">Menu item</a></li>
            <li><a class="dropdown-item" href="#">Menu item</a></li>
            <li><a class="dropdown-item" href="#">Menu item</a></li>
        </ul>
    </div> -->
    
</aside>

