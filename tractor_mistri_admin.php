<?php
    include 'includes/headertag.php';
    include 'includes/headertagadmin.php';
    include 'includes/footertag.php';
?>
<script> var APIBaseURL = "<?php echo $APIBaseURL; ?>";</script>
<script> var baseUrl = "<?php echo $baseUrl; ?>";</script>
<script src="<?php $baseUrl; ?>model/sdt.js"></script>
<script src="<?php $baseUrl; ?>model/brand_function.js"></script>
<body class="loaded"> 
    <div class="main-wrapper">
        <div class="app" id="app">
            <?php
                include 'includes/left_nav.php';
                include 'includes/header_admin.php';
            ?>
            <section style="padding: 0 15px;">
    <div class="">
      <div class="container">
        <div class="card-body d-flex align-items-center justify-content-between page_title">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb my-0 ms-2">
              
              <li class="breadcrumb-item">
                <span> Tractor Mistri</span>
              </li>
            </ol>
          </nav>
          <button type="button" id="add_trac" class="btn add_btn btn-success float-right p-2" data-bs-toggle="modal"  data-bs-target="#staticBackdrop">
              <i class="fa fa-plus" aria-hidden="true"></i> Add Tractor Mistri
          </button>

          <!-- Modal -->
          <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered">
              <div class="modal-content modal_box">
                <div class="modal-header modal_head">
                  <h5 class="modal-title text-white fw-bold" id="staticBackdropLabel"> Tractor Mistri</h5>
                  <button type="button" class="btn-close btn-success" data-bs-dismiss="modal" aria-label="Close"><img src="assets/images/close.png"></button>
                </div>
                <div class="modal-body bg-light">
                    <div class="row justify-content-center">
                        <div class="col-lg-10">
                            <form id="tractor_mistri_form"method="post"enctype="multipart/form-data" onsubmit="return false">
                                <div class="row  pt-4">
                                    <div class="col-12 col-lg-6 col-sm-5 col-md-6 my-1">
                                        <div class="form-outline mt-3">
                                            <label for="first_name" class="form-label text-dark">Name</label>
                                            <input type="text" class="form-control" placeholder="" id="first_name" name="first_name">
                                        </div>
                                    </div>
                                    <!-- <div class="col-12 col-lg-6 col-sm-5 col-md-6 my-1">
                                        <div class="form-outline">
                                            <label for="last_name" class="form-label text-dark">Last Name</label>
                                            <input type="text" class="form-control" placeholder="" id="last_name" name="last_name">
                                        </div>
                                    </div> -->
                                    <div class="col-12 col-lg-6 col-sm-5 col-md-6 my-1">
                                        <div class="form-outline mt-3">
                                            <label for="last_name" class="form-label text-dark">Mobile Number</label>
                                            <input type="text" class="form-control" placeholder="" id="mobile_no" name="mobile_no">
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-6 col-sm-5 col-md-6 my-1">
                                        <div class="form-outline mt-3">
                                            <label class="form-label text-dark">State</label>
                                            <select class="form-select py-2 state-dropdown1" aria-label="Default select example" id="state_" name="state_">
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-6 col-sm-5 col-md-6 my-1">
                                        <div class="form-outline mt-3">
                                        <label class="form-label text-dark">District</label>
                                        <select class="form-select py-2 district-dropdown1" aria-label="Default select example" id="dist" name="dist">
                                        </select>
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-6 col-sm-5 col-md-6 my-1">
                                        <div class="form-outline mt-3">
                                        <label class="form-label text-dark">Tehsil</label>
                                        <select class="form-select py-2 tehsil-dropdown1" aria-label="Default select example" id="tehsil">
                                        </select>
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-6 col-sm-5 col-md-6 my-1">
                                        <div class="form-outline mt-3">
                                        <label class="form-label text-dark">Category</label>
                                        <select class="form-select py-2 " aria-label="Default select example" id="category_branch">
                                            <option value="" >Please select option</option>
                                             <option value="Dealer Branch">Dealer Branch</option>
                                            <option value="Local">Local</option>
                                        </select>
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-6 col-sm-5 col-md-6 my-1">
                                        <div class="form-outline mt-3">
                                            <label class="form-label text-dark" for="brand">Brand</label>
                                            <select class="form-select py-2" aria-label="Default select example" name="brand" id="brand">
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-6 col-sm-5 col-md-6 my-1">
                                        <div class="form-outline mt-3">
                                            <label class="form-label text-dark" for="model">Model</label>
                                            <select class="form-select py-2" aria-label="Default select example" id="model" name="model">
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-6 col-sm-5 col-md-6 my-1">
                                        <div class="form-outline mt-3">
                                            <label for="last_name" class="form-label text-dark">Local</label>
                                            <input type="text" class="form-control" placeholder="" id="local" name="local">
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-6 col-sm-5 col-md-6 my-1">
                                        <div class="form-outline mt-3">
                                            <label class="form-label text-dark">Contact Person</label>
                                            <select class="form-select py-2 " aria-label="Default select example" id="contact_person">
                                                <option value="" >Please select option</option>
                                                <option value="BM">BM</option>
                                                <option value="Owner">Owner</option>
                                                <option value="Mistri">Mistri</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-6 col-sm-5 col-md-6 my-1">
                                        <div class="form-outline mt-3">
                                            <label class="form-label text-dark">Service</label>
                                            <select class="form-select py-2 " aria-label="Default select example" id="service_provider">
                                                <option value="" >Please select option</option>
                                                <option value="1s">1s</option>
                                                <option value="2s">2s</option>
                                                <option value="3s">3s</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-6 col-sm-5 col-md-6 my-1">
                                        <div class="form-outline mt-3">
                                            <label class="form-label text-dark">Infra</label>
                                            <select class="form-select py-2 " aria-label="Default select example" id="infra">
                                                <option value="" >Please select option</option>
                                                <option value="Shopsize">Shopsize</option>
                                                <option value="Washing">Washing</option>
                                                <option value="BAY">BAY</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6 my-1">
                                        <div class="form-outline mt-3">
                                            <label for="manpower" class="form-label text-dark">ManPower</label>
                                            <input type="text" class="form-control" placeholder="" id="manpower" name="manpower">
                                        </div>
                                    </div>
                                    <!-- <div class="col-md-6 my-2">
                                        <label for="manpower" class="form-label text-dark">ManPower</label>
                                        <input type="text" class="form-control" id="manpower" name="manpower">
                                    </div> -->
                                    <!-- <div class="col-md-6 my-2">
                                        <label for="tractor_services" class="form-label text-dark">Tractor Services</label>
                                        <input type="text" class="form-control" id="tractor_services" name="tractor_services">
                                    </div> -->
                                    <div class="col-md-6 my-1">
                                        <div class="form-outline mt-3">
                                            <label for="tractor_services" class="form-label text-dark">Tractor Services</label>
                                            <input type="text" class="form-control" placeholder="" id="tractor_services" name="tractor_services">
                                        </div>
                                    </div>
                                    <div class="col-md-6 my-2">
                                        <label class="text-dark">Role <span class="text-danger">*</span></label>
                                        <div class="d-flex gap-3">
                                            <div class="form-check form-check-inline">
                                                <input type="radio" id="admin" name="role" value="1" class="form-check-input" required>
                                                <label for="admin" class="form-check-label text-dark mt-1">Rented</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input type="radio" id="owner" name="role" value="2" class="form-check-input" required>
                                                <label for="owner" class="form-check-label text-dark mt-1">Owner</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 my-2">
                                        <label class="text-dark">Doorstep Service <span class="text-danger">*</span></label>
                                        <div class="d-flex gap-3">
                                            <div class="form-check form-check-inline">
                                                <input type="radio" id="yes" name="doorstep_service" value="1" class="form-check-input" required>
                                                <label for="yes" class="form-check-label text-dark mt-1">Yes</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input type="radio" id="no" name="doorstep_service" value="2" class="form-check-input" required>
                                                <label for="no" class="form-check-label text-dark mt-1">No</label>
                                            </div>
                                        </div>
                                    </div>
                                  
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary px-3" data-bs-dismiss="modal">Close</button>
                  <button type="button" id="btn_sb" class="btn btn-success fw-bold px-3">Submit</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <!-- Filter Card -->
      <div class="filter-card mb-2">
        <div class="card-body">
          <div class="row">
            <div class="col-4">
                <div class="form-outline">
                    <label class="form-label">Name</label>
                    <input type="text" id="name1" name="name1" class="form-control" />
                </div>
            </div>
            <div class="col-4">
                <div class="form-outline">
                    <label class="form-label">Mobile Number</label>
                    <input type="text" id="mob_number" name="mob_number" class="form-control" />
                </div>
            </div>
            <!-- <div class="col-12 col-sm-12 col-md-3 col-lg-3">
              <div class="form-outline">
                <label class="form-label">State</label>
                <select class="form-select py-2 state_select" aria-label="Default select example"  id="state_1" name="state_1">
                  
                </select>
              </div>
            </div> -->
            <!-- <div class="col-12 col-sm-12 col-md-3 col-lg-3">
              <div class="form-outline">
                <label class="form-label">District</label>
                <select class="form-select py-2 district_select" aria-label="Default select example" id="district_1" name="district_1">
                   
                </select>
              </div>
            </div> -->
            <div class="col-4 text-center">
              <div class="text-center">
                <button type="button" class="btn-success btn px-3 pt-2" id="Search" onclick="searchdata()">Search</button>
                <button type="button" class="btn-success btn mx-2 px-3 pt-2" id="Reset" onclick="resetform()">Reset</button>
              </div>
            </div>
           </div>
        </div>
      </div>
      <!-- Table Card -->
        <div class=" mb-5 shadow bg-white mt-3 p-3">
            <div class="table-responsive">
              <table id="example" class="table table-striped  table-hover table-bordered dataTable no-footer" width="100%; margin-bottom: 15px;">
                <thead class="">
                  <tr>
                <th class="d-none d-md-table-cell text-white">S.No.</th>
                <th class="d-none d-md-table-cell text-white">Name</th>
                <th class="d-none d-md-table-cell text-white">Phone Number</th>
                <th class="d-none d-md-table-cell text-white">Service</th>
                <th class="d-none d-md-table-cell text-white">Doorstep Service</th>
                <th class="d-none d-md-table-cell text-white">State </th>
                <th class="d-none d-md-table-cell text-white">District</th>
                <th class="d-none d-md-table-cell text-white">Action</th>
              </tr>
            </thead>
            <tbody id="data-table">
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </section>
        <!-- Modal -->
        <div class="modal fade" id="view_model" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered">
              <div class="modal-content modal_box">
                <div class="modal-header modal_head">
                  <h5 class="modal-title text-white fw-bold" id="staticBackdropLabel"> Tractor Mistri Information </h5>
                  <button type="button" class="btn-close btn-success" data-bs-dismiss="modal" aria-label="Close"><img src="assets/images/close.png"></button>
                </div>
                  <div class="modal-body bg-light">
                    <div class="row ">
                       <div class="col-12">
                        <table class="table table-striped">
                        <tbody>
                          <tr>
                            <td>First Name-</td>
                            <td id="name_view"></td>
                            <td>Mobile Number-</td>
                            <td id="number_view"></td>
                          </tr>
                          <tr>
                            <td>State-</td>
                            <td id="state_view"></td>
                            <td>District-</td>
                            <td id="dist_view"></td>
                          </tr>
                          <tr>
                            <td>Tehsil-</td>
                            <td id="tehsil_view"></td>
                            <td>Category-</td>
                            <td id="category_view"></td>
                          </tr>
                          <tr>
                            <td>Brand-</td>
                            <td id="brand_view"></td>
                            <td>Model-</td>
                            <td id="model_view"></td>
                          </tr>
                          <tr>
                            <td>Local-</td>
                            <td id="local_view"></td>
                            <td>Contact Person-</td>
                            <td id="contact_person_view"></td>
                          </tr>
                          <tr>
                            <td>Service-</td>
                            <td id="Service_view"></td>
                            <td>Infra-</td>
                            <td id="Infra_view"></td>
                          </tr>
                          <tr>
                            <td>ManPower-</td>
                            <td id="ManPower_view"></td>
                            <td>Tractor Services-</td>
                            <td id="Tractor_Services_view"></td>
                          </tr>
                          <tr>
                            <td>Role-</td>
                            <td id="Role_view"></td>
                            <td>Doorstep Service-</td>
                            <td id="Doorstep_Service_view"></td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>  
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary px-3" data-bs-dismiss="modal">Close</button>
                  <!-- <button type="submit" id="btn_sb" class="btn btn-success fw-bold px-3">Submit</button> -->
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
<?php
   include 'includes/footertag.php';
?> 


<script>
$(document).ready(function(){
    $('#btn_sb').click(storeTractorMistri);
});

function viewTractorMistri(Id) {
    var url = "http://tractor-api.divyaltech.com/api/customer/tractor_mistri/" + Id; 
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
            // document.getElementById('lname_view').innerText = userData.last_name || " ";
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

// Function to get Service Name
function getServiceName(serviceId, callback) {
    var serviceMapping = { "1": "Repair", "2": "Maintenance", "3": "3S" };
    callback(serviceMapping[serviceId] || "Unknown");
}


    function storeTractorMistri(event) {
    event.preventDefault();

    // var apiBaseURL = APIBaseURL;
    // var url = apiBaseURL + 'tractor_mistri';
    var url = 'http://tractor-api.divyaltech.com/api/customer/tractor_mistri_store';
    var token = localStorage.getItem('token');

    var headers = {
        'Authorization': 'Bearer ' + token
    };

    var data = new FormData();

    data.append('first_name', $('#first_name').val());
    // data.append('last_name', $('#last_name').val());
    data.append('mobile', $('#mobile_no').val());
    data.append('brand', $('#brand').val());
    data.append('model', $('#model').val());
    data.append('state', $('#state_').val());
    data.append('district', $('#dist').val());
    data.append('tehsil', $('#tehsil').val());
    data.append('category', $('#category_branch').val());
    data.append('local', $('#local').val());
    data.append('contact_person', $('#contact_person').val());
    data.append('service', $('#service_provider').val());
    data.append('infra', $('#infra').val());
    data.append('role', $('input[name="role"]:checked').val());
    data.append('doorstep_service', $('input[name="doorstep_service"]:checked').val());
    data.append('manpower', $('#manpower').val());
    data.append('tractor_services', $('#tractor_services').val());

    $.ajax({
        url: url,
        type: "POST",
        data: data,
        headers: headers,
        processData: false,
        contentType: false,
        success: function (result) {
            console.log('Success:', result);
            alert('Successfully inserted!');
            $('#tractor_mistri_form')[0].reset();
        },
        error: function (error) {
            console.error('Error:', error);
            alert('Error inserting data. See console for details.');
        }
    });
}

function fetchTractorMistriData() {
    var url = 'http://tractor-api.divyaltech.com/api/customer/tractor_mistri';
    var token = localStorage.getItem('token'); 

    $.ajax({
        url: url,
        type: "GET",
        headers: {
            'Authorization': 'Bearer ' + token
        },
        success: function (data) {
            const tableBody = document.getElementById('data-table');
            let serialNumber = 1;
            let tableData = [];

            if (data.data && data.data.length > 0) {
                data.data.reverse().forEach(row => {
                    // let fullName = (row.first_name ? row.first_name : '') + ' ' + (row.last_name ? row.last_name : '');
                    let fullName = row.first_name ? row.first_name : ' ';
                    let phoneNumber = row.mobile ? row.mobile : ' ';
                    let service = row.service ? row.service : ' ';
                    let doorstep_service = row.doorstep_service == 1 ? 'Yes' : (row.doorstep_service == 2 ? 'No' : ' ');
                    let state = row.state_name ? row.state_name : ' ';
                    let district = row.district_name ? row.district_name : ' ';

                    let action = `<div class="d-flex">
                                    <button class="btn btn-warning text-white btn-sm mx-1" onclick="viewTractorMistri(${row.id})" data-bs-toggle="modal" data-bs-target="#view_model">
                                        <i class="fa fa-eye" style="font-size: 11px;"></i>
                                    </button>
                                    
                                    <button class="btn btn-primary btn-sm btn_edit" onclick="fetch_edit_data_tractorMistri(${row.id})" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                                        <i class="fas fa-edit" style="font-size: 11px;"></i>
                                    </button>
                                    <button class="btn btn-danger btn-sm mx-1" onclick="deleteTractorMistri(${row.id})">
                                        <i class="fa fa-trash" style="font-size: 11px;"></i>
                                    </button>
                                  </div>`;

                    tableData.push([
                        serialNumber,
                        fullName,
                        phoneNumber,
                        service,
                        doorstep_service,
                        state,
                        district,
                        action
                    ]);
                    serialNumber++;
                });

                // **Ensure DataTable is Destroyed Properly**
                if ($.fn.DataTable.isDataTable('#example')) {
                    $('#example').DataTable().clear().destroy();
                }

                // **Initialize DataTable Properly**
                $('#example').DataTable({
                    data: tableData,
                    columns: [
                        { title: 'S.No.' },
                        { title: 'Name' },
                        { title: 'Phone Number' },
                        { title: 'Service' },
                        { title: 'Doorstep Service' },
                        { title: 'State' },
                        { title: 'District' },
                        { title: 'Action', orderable: false }
                    ],
                    paging: true,
                    searching: false,
                    autoWidth: false 
                });
            } else {
                tableBody.innerHTML = '<tr><td colspan="8">No data available</td></tr>';
            }
        },
        error: function (error) {
            console.error('Error fetching data:', error);
            alert("Error fetching data. See console for details.");
        }
    });
}
fetchTractorMistriData();
function fetch_edit_data_tractorMistri(id) {
    var url = "http://tractor-api.divyaltech.com/api/customer/tractor_mistri/" + id; 

    var headers = {
        'Authorization': 'Bearer ' + localStorage.getItem('token')
    };

    $.ajax({
        url: url,
        type: 'GET',
        headers: headers,
        success: function(response) {
            var mistriData = response.data; 
            $('#mistriId').val(mistriData.id);
            $('#first_name').val(mistriData.first_name);
            $('#last_name').val(mistriData.last_name);
            $('#mobile_no').val(mistriData.mobile);
            $('#category_branch').val(mistriData.category);
            $('#local').val(mistriData.local);
            $('#contact_person').val(mistriData.contact_person);
            $('#service_provider').val(mistriData.service);
            $('#infra').val(mistriData.infra);
            $('#manpower').val(mistriData.manpower);
            $('#tractor_services').val(mistriData.tractor_services);
            var brandDropdown = document.getElementById('brand');
            for (var i = 0; i < brandDropdown.options.length; i++) {
                if (brandDropdown.options[i].text === mistriData.brand) {
                    brandDropdown.selectedIndex = i;
                    break;
                }
            }
            $('#model').empty();
            get_model_1(mistriData.brand);
            setTimeout(function() { 
                $("#model option[value='" + mistriData.model + "']").prop("selected", true);
            }, 2000);

            setSelectedOption('state_', mistriData.state_id);
            getDistricts(mistriData.state_id, 'district-dropdown', 'tehsil-dropdown');
            setTimeout(function() {
                setSelectedOption('dist', mistriData.district_id);
                // populateTehsil(mistriData.district_id, 'tehsil-dropdown', userData.tehsil_id);
            }, 2000);

            setRadioValue("role", mistriData.role);
            setRadioValue("doorstep_service", mistriData.doorstep_service);
        },
        error: function(error) {
            console.error('Error fetching Mistri data:', error);
        }
    });
}

function setSelectedOption(selectId, value) {
  var select = document.getElementById(selectId);
  for (var i = 0; i < select.options.length; i++) {
    if (select.options[i].value == value) {
      select.selectedIndex = i;
      break;
    }
  }
}
// function populateTehsil(selectId, value) {
//   var select = document.getElementById(selectId);
//   for (var i = 0; i < select.options.length; i++) {
//     if (select.options[i].value == value) {
//       select.options[i].selected = true;
//       break;
//     }
//   }
// }
function setRadioValue(name, value) {
    $("input[name='" + name + "'][value='" + value + "']").prop("checked", true);
}
function get_1() {
  var url = 'http://tractor-api.divyaltech.com/api/customer/get_brand_for_finance';
  $.ajax({
      url: url,
      type: "GET",
      headers: {
          'Authorization': 'Bearer ' + localStorage.getItem('token')
      },
      success: function (data) {
      
          const select = document.getElementById('brand');
          select.innerHTML = '<option selected disabled value="">Please select an option</option>';

          if (data.brands.length > 0) {
              data.brands.forEach(row => {
                  const option = document.createElement('option');
                  option.textContent = row.brand_name;
                  option.value = row.id;
                  select.appendChild(option);
              });
              select.addEventListener('change', function() {
                  const selectedBrandId = this.value;
                  get_model_1(selectedBrandId);
              });
          } else {
              select.innerHTML = '<option>No valid data available</option>';
          }
      },
      error: function (error) {
          console.error('Error fetching data:', error);
      }
  });
}

function get_model_1(brand_id, selectedModel) {
  var url = 'http://tractor-api.divyaltech.com/api/customer/get_brand_model/' + brand_id;
  $.ajax({
      url: url,
      type: "GET",
      headers: {
          'Authorization': 'Bearer ' + localStorage.getItem('token')
      },
      success: function (data) {
          console.log(data);
          const select = document.getElementById('model');
          select.innerHTML = '<option selected disabled value="">Please select an option</option>';

          if (Array.isArray(data.model) && data.model.length > 0) {
              data.model.forEach(modelName => { // Fixed: Handling array of strings
                  const option = document.createElement('option');
                  option.textContent = modelName; // Directly use the string
                  option.value = modelName;
                  select.appendChild(option);

                  if (modelName === selectedModel) {
                      option.selected = true;
                  }
              });
          } else {
              select.innerHTML = '<option>No valid data available</option>';
          }
      },
      error: function (error) {
          console.error('Error fetching data:', error);
      }
  });
}

get_1();
// delete
function deleteTractorMistri(id) {
    var url = 'http://tractor-api.divyaltech.com/api/customer/tractor_mistri_delete/' + id;
  var token = localStorage.getItem('token');

  if (!token) {
    console.error("Token is missing");
    return;
  }

  // Show a confirmation popup
  var isConfirmed = confirm("Are you sure you want to delete this data?");
  if (!isConfirmed) {
    // User clicked 'Cancel' in the confirmation popup
    return;
  }

  $.ajax({
    url: url,
    type: "DELETE",
    headers: {
      'Authorization': 'Bearer ' + token
    },
    success: function(result) {
      window.location.reload();
      console.log("Delete request successful");
      // alert("Delete operation successful");
    },
    error: function(error) {
      console.error('Error fetching data:', error);
      alert("Error during delete operation");
    }
  });
}

function searchdata() {
    var url = 'http://tractor-api.divyaltech.com/api/customer/tractor_mistri_search';
    var token = localStorage.getItem('token');

    var name = document.getElementById('name1').value.trim();
    var mobile = document.getElementById('mob_number').value.trim();

    $.ajax({
        url: url,
        type: "POST",
        headers: {
            'Authorization': 'Bearer ' + token,
            'Content-Type': 'application/json'
        },
        data: JSON.stringify({
            name1: name,
            mob_number: mobile
        }),
        success: function (data) {
            const tableBody = document.getElementById('data-table');
            let serialNumber = 1;
            let tableData = [];

            if (data.data && data.data.length > 0) {
                data.data.forEach(row => {
                    let fullName = row.first_name ? row.first_name : ' ';
                    let phoneNumber = row.mobile ? row.mobile : ' ';
                    let service = row.service ? row.service : ' ';
                    let doorstep_service = row.doorstep_service == 1 ? 'Yes' : (row.doorstep_service == 2 ? 'No' : ' ');

                    let state = row.state ? row.state : ' ';
                    let district = row.district ? row.district : ' ';

                    let action = `<div class="d-flex">
                                    <button class="btn btn-warning text-white btn-sm mx-1" onclick="viewTractorMistri(${row.id})" data-bs-toggle="modal" data-bs-target="#view_model">
                                        <i class="fa fa-eye" style="font-size: 11px;"></i>
                                    </button>
                                    
                                    <button class="btn btn-primary btn-sm btn_edit" onclick="fetch_edit_data_tractorMistri(${row.id})" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                                        <i class="fas fa-edit" style="font-size: 11px;"></i>
                                    </button>
                                    <button class="btn btn-danger btn-sm mx-1" onclick="deleteTractorMistri(${row.id})">
                                        <i class="fa fa-trash" style="font-size: 11px;"></i>
                                    </button>
                                  </div>`;

                    tableData.push([
                        serialNumber,
                        fullName,
                        phoneNumber,
                        service,
                        doorstep_service,
                        state,
                        district,
                        action
                    ]);
                    serialNumber++;
                });

                if ($.fn.DataTable.isDataTable('#example')) {
                    $('#example').DataTable().clear().destroy();
                }

                $('#example').DataTable({
                    data: tableData,
                    columns: [
                        { title: 'S.No.' },
                        { title: 'Name' },
                        { title: 'Phone Number' },
                        { title: 'Service' },
                        { title: 'Doorstep Service' },
                        { title: 'State' },
                        { title: 'District' },
                        { title: 'Action', orderable: false }
                    ],
                    paging: true,
                    searching: false,
                    autoWidth: false
                });

            } else {
                tableBody.innerHTML = '<tr><td colspan="8">No matching records found</td></tr>';
            }
        },
        error: function (error) {
            console.error('Error fetching search results:', error);
            alert("Error fetching data. See console for details.");
        }
    });
}

// ✅ Reset Search Form
function resetform() {
    $('#name1').val('');
    $('#mob_number').val('');
    fetchTractorMistriData(); 
}

</script>