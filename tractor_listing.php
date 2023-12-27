<?php
include 'includes/headertag.php';
include 'includes/headertagadmin.php';
include 'includes/footertag.php';

?>
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script>
  $(document).ready(function() {
    console.log('dfsdwe');
  $(".js-select2").select2({
    closeOnSelect: false
  });
});
</script>
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
                    <span>Tractor Listing</span>
                  </li>
                </ol>
              </nav>

              <!-- Add new tractor -->
              <a href="tractor_form_list.php" type="button"  class="btn add_btn btn-success float-right" >
                <i class="fa fa-plus" aria-hidden="true"></i>Add New tractor
              </a>

              
            </div>
          </div>
        </div>
        <div class="container">
          <!-- Filter Card -->
          <div class="filter-card mb-2">
            <div class="card-body">
              <div class="row" id="myForm">
                <div class="col-12 col-sm-12 col-md-3 col-lg-3">
                    <label class="text-dark fw-bold mb-2">Search By Brand</label>
                    <select class="js-select2 form-select" id="brand">
                    </select>
                </div>
                <div class="col-12 col-sm-12 col-md-3 col-lg-3">
                    <label class="text-dark fw-bold  mb-2">Search by Model</label>
                    <select class="js-select2 form-select" id="model">
                    </select>
                </div>
                <div class="col-12 col-sm-12 col-md-3 col-lg-3">
                    <label class="text-dark fw-bold mb-2">Search by HP</label>
                    <select class="js-select2 form-select" id="hp">
                    </select>
                </div>
                <div class="col-12 col-sm-12 col-md-3 col-lg-3 text-center">
                  <div class="mt-3 pt-1">
                    <button type="button" class="btn-success btn px-4 py-2"  id="Search">Search</button>
                    <button type="reset" value = "Reset data"  class="btn-success btn px-4 py-2" id="Reset">Reset</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="mb-5">
            <div class="table-responsive shadow bg-white">
              <table id="example" class="table bg-white table-striped table-hover py-1" width="100%">
                <thead>
                  <tr>
                    <th class="d-none d-md-table-cell text-white">S.No.</th>
                    <th class="d-none d-md-table-cell text-white">Date</th>
                    <th class="d-none d-md-table-cell text-white">Brand</th>
                    <th class="d-none d-md-table-cell text-white">Model</th>
                    <th class="d-none d-md-table-cell text-white">Wheel Drive</th>
                    <th class="d-none d-md-table-cell text-white"> HP Category</th>
                    <th class="d-none d-md-table-cell text-white"> Price</th>
                    <th class="d-none d-md-table-cell text-white">Action</th>
                  </tr>
                </thead>
                <tbody id="data-table" class="">
                </tbody>
              </table>
            </div>

            <!-- model -->
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <div class="col-lg-12">
                      <div class="row">
                        <div class="col-lg-4">
                          <div class="form-group">
                            <label for="">Enter Subject Name:</label>
                            <input type="text" placeholder="Subject Name" class="form-control" id="subject_name1" prachii=""></input>
                          </div>
                        </div>
                        <div class="col-lg-4">
                          <div class="form-group">
                            <label for="">Enter Subject Code:</label>
                            <input type="text" placeholder="Subject Code" class="form-control" id="subject_code1" name="">
                          </div>
                        </div>
                        <div class="col-lg-4">
                          <div class="form-group">
                            <label for="">Subject Type:</label>
                            <select placeholder="Slect name" class="form-control" id="subject_type1" name="">
                              <option value="Theory">Theory</option>
                              <option value="Practical">Practical</option>
                              <option value="NUE">Non-University Exam</option>
                            </select>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" id="prachiedit" data-dismiss="modal">Save changes</button>
                  </div>
                </div>
              </div>
            </div>



          </div>
        </div>
      </section>
      <div class="modal fade" id="viewModal_btn" tabindex="-1" role="dialog" aria-labelledby="viewModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl" role="document">
    <div class="modal-content">
      <div class="modal-header bg-success text-white">
        <h4 class="modal-title">New Tractor Information</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>
      <div class="modal-body">
        <div class="container">
          <table class="table">
                        <tbody>
                          <tr>
                            <td colspan="4" class="fw-bold text-center py-3">Listing</td>
                          </tr>
                          <tr>
                            <td class="bg-light">Brand-</td>
                            <td class="bg-light" id="brand_"></td>
                            <td>Model Name-</td>
                            <td id="model_"></td>
                          </tr>
                          <tr>
                            <td>HP Category-</td>
                            <td id="hp_"></td>
                            <td class="bg-light">No. of Cylinder-</td>
                            <td id="cylinder_" class="bg-light"></td>
                          </tr>
                          <tr>
                            <td class="bg-light">PTO HP-</td>
                            <td id="pto_hp_" class="bg-light"></td>
                            <td>Gear Box Forward-</td>
                            <td id="Gear_Box_Forward_1"></td>
                          </tr>
                          <tr>
                            <td>Gear Box Reverse-</td>
                            <td id="Gear_Box_Reverse_1"></td>
                            <td class="bg-light">Brakes-</td>
                            <td id="brakes_1" class="bg-light"></td>
                          </tr>
                          <tr>
                            <td class="bg-light">Starting Price-</td>
                            <td id="Starting_Price_1" class="bg-light"></td>
                            <td>Ending Price-</td>
                            <td id="Ending_Price_1"></td>
                          </tr>
                          <tr>
                            <td>Warranty-</td>
                            <td id="Warranty_1"></td>
                            <td class="bg-light">Select Tractor Type-</td>
                            <td id="Select_Tractor_Type_1" class="bg-light"></td>
                          </tr>
                          <tr>
                            <td class="bg-light">Upload images-</td>
                            <td colspan="3">
                              <div class="row" id="image_1">
                                  <div class="col-12" ></div>
                               </div>
                            </td>
                          </tr>
                          <tr>
                            <td colspan="4" class="fw-bold text-center py-3">Engine Details</td>
                          </tr>
                          <tr>
                            <td class="bg-light">Capacity CC-</td>
                            <td id="capacity_cc_1"class="bg-light"></td>
                            <td>Engine Rated RPM-</td>
                            <td id="Engine_Rated_RPM_1"></td>
                          </tr>
                          <tr>
                            <td>Select Cooling-</td>
                            <td id="Select_Cooling_1"></td>
                            <td class="bg-light">Air Filter-</td>
                            <td id="Air_Filter_1"class="bg-light"></td>
                          </tr>
                          <tr>
                            <td class="bg-light">Fuel pump-</td>
                            <td id="Fuel_pump_1" class="bg-light"></td>
                            <td>Torque-</td>
                            <td id="Torque_1"></td>
                          </tr>
                          <td colspan="4" class="fw-bold text-center py-3">Transmission Details</td>
                          <tr>
                            <td class="bg-light">Type-</td>
                            <td id="Type_1" class="bg-light"></td>
                            <td>Clutch-</td>
                            <td id="Clutch_1"></td>
                          </tr>
                          <tr>
                            <td>Min Forward Speed-</td>
                            <td id="Min_Forward_Speed_1"></td>
                            <td class="bg-light">Max Forward Speed-</td>
                            <td id="Max_Forward_Speed_1" class="bg-light"></td>
                          </tr> <tr>
                            <td class="bg-light">Min Reverse Speed-</td>
                            <td id="Min_Reverse_Speed_1" class="bg-light"></td>
                            <td>Max Reverse Speed-</td>
                            <td id="Max_Reverse_Speed_1"></td>
                          </tr>
                          <td colspan="4" class="fw-bold text-center py-3">Steering Details</td>
                          <tr>
                            <td class="bg-light">Type-</td>
                            <td id="st_Type_1" class="bg-light"></td>
                            <td>Coloumn-</td>
                            <td id="Coloumn_1"></td>
                          </tr>
                          <td colspan="4" class="fw-bold text-center py-3">Power Take Off Details</td>
                          <tr>
                            <td class="bg-light">Type-</td>
                            <td id="Type2_1" class="bg-light"></td>
                            <td>RPM-</td>
                            <td id="RPM_1"></td>
                          </tr>
                          <td colspan="4" class="fw-bold text-center py-3">Dimensions And Weight Details</td>
                          <tr>
                            <td class="bg-light">Total Weight-</td>
                            <td id="Total_Weight_1" class="bg-light"></td>
                            <td>Wheel Base-</td>
                            <td id="Wheel_Base_1"></td>
                          </tr>
                          <td colspan="4" class="fw-bold text-center py-3">Hydraulics Details</td>
                          <tr>
                            <td class="bg-light">Lifting Capacity-</td>
                            <td id="Lifting_Capacity_1" class="bg-light"></td>
                            <td>3 Point Linkage-</td>
                            <td id="Point_Linkage_1"></td>
                          </tr>
                          <td colspan="4" class="fw-bold text-center py-3">Wheels And Tyres Details</td>
                          <tr>
                            <td class="bg-light">Wheel Drive-</td>
                            <td id="Wheel_Drive_1" class="bg-light"></td>
                            <td>Front-</td>
                            <td id="Front_1"></td>
                          </tr>
                          <tr>
                            <td>Rear-</td>
                            <td id="Rear_1"></td>
                          </tr>
                          <td colspan="4" class="fw-bold text-center py-3">Other Information Details</td>
                          <tr>
                            <td class="bg-light">Accessories-</td>
                            <td id="Accessories_1" class="bg-light"></td>
                            <td>Status-</td>
                            <td id="Status_1"></td>
                          </tr>
                          <tr>
                            <td>About-</td>
                            <td id="About_1"></td>
                          </tr>
                        </tbody>
          </table>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>


    </div>
  </div>
</body>
<script>
  var APIBaseURL = "<?php echo $APIBaseURL; ?>";
</script>
<script>
  var baseUrl = "<?php echo $baseUrl; ?>";
</script>

<script>
//    function fun(){  
//    document.getElementById("myForm").reset();  
//  }   
</script>
<script src="<?php $baseUrl; ?>model/newtractor_listing_get.js"></script>
