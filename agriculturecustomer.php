<?php
    include 'includes/headertag.php';
    include 'includes/headertagadmin.php';
   include 'includes/footertag.php';
   
   ?> 
  <script> var APIBaseURL = "<?php echo $APIBaseURL; ?>";</script>
  <script> var baseUrl = "<?php echo $baseUrl; ?>";</script>
  <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
</head>

<body>
   <?php
   include 'includes/header.php';
   ?>
<body>
        <!-- HEADING Home > Blog-->
    <section class="mt-5 pt-5 bg-light">
        <div class="container mt-4 pt-4">
            <div class="">
                <span class="mt-5 text-white pt-5 ">
                    <a href="index.php" class="text-decoration-none header-link px-1">Home <i class="fa-solid fa-chevron-right px-1"></i></a>
                </span>
                  <span class="text-dark">Agriculture College</span>
                </span> 
            </div>
        </div>
    </section>
<section>
    <div class="container" id="an">   
        <div class="row">
            <div class="col-12 col-sm-9 col-lg-9 col-md-9">  
                <div id="productContainer" class="row py-1">
                    <div class="col-12 col-lg-4 col-sm-4 col-md-4 mt-2 mb-2">
                        <div class="success__stry__item shadow h-100">
                            <div class="thumb">
                                <a href="#">
                                    <img src="assets/images/agriculture-image.jpg" class="engineoil_img  w-100" alt="img">
                                </a>
                            </div>
                            <div class="content mb-3 ms-3">
                            <div class="row mt-2">
                                    <p class="fw-bold">College Name:</p>
                                </div>
                            </div>
                            <div class="col-12">
                                <button type="button" id="adduser"class="btn-state state btn-success text-decoration-none text-truncate px-2 w-100">Durg, Chhattisgarh</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-4 col-sm-4 col-md-4 mt-2 mb-2">
                        <div class="success__stry__item shadow h-100">
                            <div class="thumb">
                                <a href="#">
                                    <img src="assets/images/agriculture-image.jpg" class="engineoil_img  w-100" alt="img">
                                </a>
                            </div>
                            <div class="content mb-3 ms-3">
                            <div class="row mt-2">
                                    <p class="fw-bold">College Name:</p>
                                </div>
                            </div>
                            <div class="col-12">
                                <button type="button" id="adduser"class="btn-state state btn-success text-decoration-none text-truncate px-2 w-100">Durg, Chhattisgarh</a>
                            </div>
                        </div>
                    </div>
                </div>
                <h5 id="noDataMessage" class="text-center mt-4 text-danger" style="display: none;">
                <img src="assets/images/404.gif" class="w-25" alt=""></br>Data not found..!</h5>
                <div class="col text-center mt-3 pb-3">
                    <button id="load_moretract" type="button" class=" btn add_btn btn-success p-2"><i class="fas fa-undo"></i>View All</button>
                </div>
            </div>
            <div class="col-12 col-sm-3 col-lg-3 col-md-3">
                    <div class=" row mb-3" id="">
                        <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                            <div class=" row text-center">
                                <div class="col-12 col-sm-6 col-lg-6 col-md-6">
                                    <button id="reset_tractor" type="button" onclick="resetform()" class="add_btn btn btn-success w-100">
                                    <i class="fas fa-undo"></i>  Reset </button>
                                </div>
                                <div class="col-12 col-sm-6 col-lg-6 col-md-6 pe-2">
                                    <button id="filter_tractor" type="button" class="add_btn btn btn-success w-100">
                                    <i class="fas fa-filter"></i>Apply Filter</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="scrollbar mb-3" id=" my-2">
                        <div class="force-overflow">
                            <h5 class=" ps-1 text-dark fw-bold  pt-2">Search By College Name</h5>
                            <div class="HP py-2" id="checkboxContainer" style=" height: 78px;">
                            </div>
                        </div>
                    </div> -->
                    <div class="scrollbar mb-3" id=" my-2">
                        <div class="force-overflow">
                            <h5 class=" ps-1 text-dark fw-bold  pt-2">Search By State</h5>
                            <div class="HP py-2" id="state_state" style=" height: 78px;">
                            </div>
                        </div>
                    </div>
                    <div class="scrollbar mb-3" id="district_container">
                        <div class="force-overflow">
                            <h5 class="ps-1 text-dark fw-bold pt-2">Search By District</h5>
                            <div class="HP py-2" id="get_dist">
                                <!-- District checkboxes will be appended here -->
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

</body>
</html>
<script>
    function getState() {
    var url = 'http://tractor-api.divyaltech.com/api/customer/state_data';
    $.ajax({
        url: url,
        type: "GET",
        headers: {
            'Authorization': 'Bearer ' + localStorage.getItem('token')
        },
        success: function(data) {
            console.log("State data:", data);

            const checkboxContainer = $('#state_state');
            checkboxContainer.empty(); // Clear existing checkboxes
            
            const stateId = 7; // Replace 7 with the desired state ID
            const filteredState = data.stateData.find(state => state.id === stateId);
            if (filteredState) {
                var checkboxHtml = '<input type="checkbox" class="checkbox-round mt-1 ms-3 state_checkbox" value="' + filteredState.id + '"/>' +
                    '<span class="ps-2 fs-6">' + filteredState.state_name + '</span> <br/>';
                checkboxContainer.append(checkboxHtml);
                ge_tDistricts(stateId);
            } else {
                checkboxContainer.html('<p>No valid data available</p>');
            }
        },
        error: function(error) {
            console.error('Error fetching state data:', error);
        }
    });
}
function ge_tDistricts(stateId) {
    var url = 'http://tractor-api.divyaltech.com/api/customer/get_district_by_state/' + stateId;
    $.ajax({
        url: url,
        type: "GET",
        headers: {
            'Authorization': 'Bearer ' + localStorage.getItem('token')
        },
        success: function(data) {
            console.log("District data:", data);
            
            const checkboxContainer = $('#get_dist');
            checkboxContainer.empty(); // Clear existing checkboxes
            
            if (data && data.districtData && data.districtData.length > 0) {
                data.districtData.forEach(district => {
                    var checkboxHtml = '<input type="checkbox" class="checkbox-round mt-1 ms-3 district_checkbox" value="' + district.id + '" id="district_' + district.id + '"/>' +
                        '<label for="district_' + district.id + '" class="ps-2 fs-6">' + district.district_name + '</label> <br/>';
                    checkboxContainer.append(checkboxHtml);
                });
            } else {
                checkboxContainer.html('<p>No districts available for this state</p>');
            }
        },
        error: function(error) {
            console.error('Error fetching districts:', error);
        }
    });
}
getState();
</script>