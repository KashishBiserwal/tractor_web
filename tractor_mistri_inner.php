<!DOCTYPE html>
<html lang="en">

<head>
<?php
    include 'includes/headertag.php';
    include 'includes/headertagadmin.php';
   include 'includes/footertag.php';
   include 'includes/spinner.php';
   ?> 
</head>
<style>
    .image-container{
height: 60%;
    }
</style>
<body>
<?php
   include 'includes/header.php';
   ?>

<section class="mt-5 pt-4 bg-light">
        <div class="container ">
            <div class="mt-5 pt-2">
                <span class="mt-5 text-white">
                    <a href="index.php" class="text-decoration-none header-link px-1">Home <i
                            class="fa-solid fa-chevron-right px-1"></i></a>

                    <span class="text-dark"> Tractor Mistri</span>
                </span>
            </div>
        </div>
    </section>
<section>
    <div class="container">
        <div>
            <h4 class="mb-3">
                <span id="brand_main"></span> <span id="model_name"></span>
            </h4>
        </div>
    </div>
</section>
    <section>
        <div class="container pb-5">
            <div class="row my-3 align-items-stretch">
                <!-- Left Side: Image -->
                <div class="col-12 col-md-6 d-flex justify-content-center align-items-center">
                    <div class="card shadow-lg w-100 bg-light">
                        <div class="card-body text-center">
                           
                            <img src="assets/images/Tractor-mistri.jpg" alt="Tractor Image" 
                                class="img-fluid w-100 object-fit-cover rounded" style="height: 100%; max-height: 400px;">
                        </div>
                    </div>
                </div>
                <!-- Right Side: Table -->
                <div class="col-12 col-md-6 d-flex align-items-center">
                <div class="card shadow-lg w-100 h-100">
                    <div class="card-body">
                        <table class="table table-striped text-center" style="height: 100%; max-height: 450px;">
                            <tbody>
                                <tr>
                                    <td><b>First Name</b></td>
                                    <td id="name_view"></td>
                                    <td><b>Mobile Number</b></td>
                                    <td id="number_view"></td>
                                </tr>
                                <tr>
                                    <td><b>State</b></td>
                                    <td id="state_view"></td>
                                    <td><b>District</b></td>
                                    <td id="dist_view"></td>
                                </tr>
                                <tr>
                                    <td><b>Tehsil</b></td>
                                    <td id="tehsil_view"></td>
                                    <td><b>Category</b></td>
                                    <td id="category_view"></td>
                                </tr>
                                <tr>
                                    <td><b>Brand</b></td>
                                    <td id="brand_view"></td>
                                    <td><b>Model</b></td>
                                    <td id="model_view"></td>
                                </tr>
                                <tr>
                                    <td><b>Local</b></td>
                                    <td id="local_view"></td>
                                    <td><b>Contact Person</b></td>
                                    <td id="contact_person_view"></td>
                                </tr>
                                <tr>
                                    <td><b>Service</b></td>
                                    <td id="Service_view"></td>
                                    <td><b>Infra</b></td>
                                    <td id="Infra_view"></td>
                                </tr>
                                <tr>
                                    <td><b>ManPower</b></td>
                                    <td id="ManPower_view"></td>
                                    <td><b>Tractor Services</b></td>
                                    <td id="Tractor_Services_view"></td>
                                </tr>
                                <tr>
                                    <td><b>Role</b></td>
                                    <td id="Role_view"></td>
                                    <td><b>Doorstep Service</b></td>
                                    <td id="Doorstep_Service_view"></td>
                                </tr>
                            </tbody>
                        </table>
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
function viewTractorMistri() {
    console.log(window.location)
    var urlParams = new URLSearchParams(window.location.search);
    var Id = urlParams.get('id');
    var url = "https://shopninja.in/bharatagri/api/public/api/customer/tractor_mistri/" + Id; 
    var headers = {
        'Authorization': 'Bearer ' + localStorage.getItem('token')
    };

    $.ajax({
        url: url,
        type: 'GET',
        headers: headers,
        success: function(response) {
            var userData = response.data;

            // Check if data exists
            if (!userData) {
                console.error("No data found!");
                return;
            }

            // Set text values directly
            document.getElementById('name_view').innerText = userData.first_name || " ";
            // document.getElementById('brand_view').innerText = userData.brand_name || " ";
            document.getElementById('number_view').innerText = userData.mobile || " ";
            document.getElementById('category_view').innerText = userData.category || " ";
            document.getElementById('local_view').innerText = userData.local || " ";
            document.getElementById('contact_person_view').innerText = userData.contact_person || " ";
            document.getElementById('Infra_view').innerText = userData.infra || " ";
            document.getElementById('ManPower_view').innerText = userData.manpower || " ";
            document.getElementById('Tractor_Services_view').innerText = userData.tractor_services || " ";
            document.getElementById('Service_view').innerText = userData.service || " ";
            document.getElementById('state_view').innerText = userData.state_name || " ";
            document.getElementById('dist_view').innerText = userData.district_name || " ";
            document.getElementById('tehsil_view').innerText = userData.tehsil_name || " ";
            // Role Mapping
            var roleMapping = { "1": "Owner", "2": "Operator", "3": "Helper" };
            document.getElementById('Role_view').innerText = roleMapping[userData.role] || " ";

            // Doorstep Service Mapping
            var doorstepMapping = { "1": "Yes", "2": "No" };
            document.getElementById('Doorstep_Service_view').innerText = doorstepMapping[userData.doorstep_service] || " ";

            // Model is already a name
            document.getElementById('model_view').innerText = userData.model || " ";
        },
        error: function(error) {
            console.error('Error fetching user data:', error);
        }
    });
}
viewTractorMistri();
</script>