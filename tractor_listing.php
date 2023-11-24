<?php
   include 'includes/headertagadmin.php';
  
   
   ?> 
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
          

          <button type="button" id="add_trac" class="btn add_btn btn-success float-right" data-bs-toggle="modal"  data-bs-target="#staticBackdrop">
            <i class="fa fa-plus" aria-hidden="true"></i>Add New tractor
          </button>

          <!-- Modal -->
          <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-xl modal-dialog-centered">
              <div class="modal-content modal_box">
                <div class="modal-header modal_head">
                  <h5 class="modal-title text-white fw-bold" id="staticBackdropLabel">Add New tractor</h5>
                  <button type="button" class="btn-close btn-success" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body bg-light">
                        <div class="row justify-content-center">
                            <div class="col-lg-10">
                              <h4 class="text-center">Fill your Tractor Details</h4>
                              <form id="add_tractor_form" method="post">
                                <div class="row justify-content-center pt-4">
                                  <h5 class="fw-bold">Listing</h5>
                                    <div class="col-12 col-sm-6 col-lg-6 col-md-6 my-2">
                                      <div class="form-outline">
                                        <label class="form-label">Brand</label>
                                        <select class="form-select py-2" id="brand_name" aria-label="Default select example">
                                            <option value=""></option>
                                        </select>
                                      </div>
                                    </div>
                                    <div class="col-12 col-sm-6 col-lg-6 col-md-6 my-2">
                                      <div class="form-group">
                                        <input type="text" class="" placeholder=" " id="model">
                                        <label for="name" class="text-dark "> Model Name</label>
                                      </div>
                                    </div>
                                    <div class="col-12 col-sm-6 col-lg-6 col-md-6 my-2" hidden>
                                      <div class="form-outline" >
                                        <label class="form-label">Product Type</label>
                                        <input type="text" class="" placeholder=" " value="NEW_TRACTOR" id="product_type_id">
                                      </div>
                                    </div>
                                    <div class="col-12 col-sm-4 col-lg-4 col-md-4 my-2">
                                      <div class="form-group">
                                        <input type="text" class="" placeholder=" " id="hp_category">
                                        <label for="name" class="text-dark "> HP Category</label>
                                      </div>
                                    </div>
                                    <div class="col-12 col-sm-4 col-lg-4 col-md-4 my-2">
                                      <div class="form-outline">
                                        <label class="form-label">No. of Cylinder</label>
                                        <select class="form-select py-2" id="TOTAL_CYCLINDER" aria-label="Default select example">
                                          <option selected disabled="" value="">Please select an option</option>
                                        </select>
                                      </div>
                                    </div>
                                    <div class="col-12 col-sm-4 col-lg-4 col-md-4 my-2">
                                      <div class="form-group">
                                        <input type="text" class="" placeholder=" " id="horse_power">
                                        <label for="name" class="text-dark "> PTO HP</label>
                                      </div>
                                    </div>
                                    <div class="col-12 col-sm-4 col-lg-4 col-md-4">
                                      <div class="form-group">
                                        <input type="text" class="" placeholder=" " id="gear_box_forward">
                                        <label for="name" class="text-dark ">Gear Box Forward</label>
                                      </div>
                                    </div>
                                    <div class="col-12 col-sm-4 col-lg-4 col-md-4">
                                      <div class="form-group">
                                        <input type="text" class="" placeholder=" " id="gear_box_reverse">
                                        <label for="name" class="text-dark ">Gear Box Reverse</label>
                                      </div>
                                    </div>
                                    <div class="col-12 col-sm-4 col-lg-4 col-md-4">
                                      <div class="form-outline">
                                        <label class="form-label">Brakes</label>
                                        <select class="form-select py-2" id="BRAKE_TYPE" aria-label="Default select example">
                                        <option selected disabled="" value="">Please select an option</option>
                                        </select>
                                      </div>
                                    </div>
                                    <div class="col-12 col-sm-4 col-lg-4 col-md-4">
                                      <div class="form-group">
                                        <input type="number" class="" placeholder=" " id="starting_price">
                                        <label for="name" class="text-dark ">Starting Price</label>
                                      </div>
                                    </div>
                                    <div class="col-12 col-sm-4 col-lg-4 col-md-4">
                                      <div class="form-group">
                                        <input type="number" class="" placeholder=" " id="ending_price">
                                        <label for="name" class="text-dark ">Ending Price</label>
                                      </div>
                                    </div>
                                    <div class="col-12 col-sm-4 col-lg-4 col-md-4">
                                      <div class="form-group">
                                        <input type="text" class="" placeholder=" " id="warranty">
                                        <label for="name" class="text-dark ">Warranty</label>
                                      </div>
                                    </div>
                                    <div class="col-12 col-sm-8 col-lg-8 col-md-8">
                                      <div class="form-outline">
                                        <label class="form-label">Tractor Type</label>
                                        <select  class="form-select py-2" id="TRACTOR_TYPE" aria-label="Default select example">
                                        <option value="0">Latest</option>
                                        <option value="1">Popular</option>
                                        <option value="2">Upcoming</option>
                                        <option value="3">4WD</option>
                                        <option value="3">Mini Tractor</option>
                                      </select>
                                      </div>
                                    </div>
                                    <div class="col-12 col-sm-4 col-lg-4 col-md-4 ps-3">
                                      <div class="background__box">
                                            <div class="background__btn-box">
                                                <label class="background__btn">
                                                <p class="text-white bg-success p-2 rounded">Upload images</p>
                                                    <input type="file" data-max_length="20"name="imgfile"  ref="fileInput"
                                                    style="display: none"
                                                    @change="handleFileInput"
                                                    accept="image/png, image/jpg, image/jpeg" class="background__inputfile" id="image_name">
                                                    <small></small>
                                                </label>
                                            </div>
                                            <div class="">
                                                <div class="background__img-wrap"></div>
                                            </div>
                                      </div>
                                    </div>
                                    <h5 class="fw-bold"> Brand Details</h5>
                                    <div class="col-12 col-sm-4 col-lg-4 col-md-4">
                                      <div class="form-outline">
                                        <label class="form-label">Capacity CC</label>
                                        <select class="form-select py-2" id="CAPACITY_CC" aria-label="Default select example">
                                          <option selected disabled="" value="">Please select an option</option>
                                        </select>
                                      </div>
                                    </div>
                                    <div class="col-12 col-sm-4 col-lg-4 col-md-4">
                                      <div class="form-group">
                                        <input type="text" class="" placeholder=" " id="engine_rated_rpm">
                                        <label for="name" class="text-dark ">Engine Rated RPM</label>
                                      </div>
                                    </div>
                                    <div class="col-12 col-sm-4 col-lg-4 col-md-4">
                                      <div class="form-outline">
                                        <label class="form-label">Select Cooling</label>
                                          <select class="form-select py-2" id="COOLING" aria-label="Default select example">
                                          <option selected disabled="" value="">Please select an option</option>
                                        </select>
                                      </div>
                                    </div>
                                    <div class="col-12 col-sm-4 col-lg-4 col-md-4">
                                      <div class="form-outline">
                                        <label class="form-label">Air Filter</label>
                                        <select class="form-select py-2" id="AIR_FILTER" aria-label="Default select example">
                                          <option selected disabled="" value="">Please select an option</option>
                                        </select>
                                      </div>
                                    </div>
                                    <div class="col-12 col-sm-4 col-lg-4 col-md-4">
                                      <div class="form-outline">
                                        <label class="form-label">Fuel pump</label>
                                        <select class="form-select py-2" id="fuel_pump_id" aria-label="Default select example">
                                            <option value=""></option>
                                        </select>
                                      </div>
                                    </div>
                                    <div class="col-12 col-sm-4 col-lg-4 col-md-4">
                                      <div class="form-outline">
                                        <label class="form-label">Torque</label>
                                        <select class="form-select py-2" id="TORQUE" aria-label="Default select example">
                                          <option selected disabled="" value="">Please select an option</option>
                                        </select>
                                      </div>
                                    </div>
                                    <h5 class="fw-bold mt-4">Transmission Details</h5>
                                    <div class="col-12 col-sm-6 col-lg-6 col-md-6 mb-4">
                                      <div class="form-outline">
                                        <label class="form-label">Type</label>
                                        <select class="form-select py-2" id="TRANSMISSION_TYPE" aria-label="Default select example">
                                          <option selected disabled="" value="">Please select an option</option>
                                        </select>
                                      </div>
                                    </div>
                                    <div class="col-12 col-sm-6 col-lg-6 col-md-6 mb-4">
                                      <div class="form-outline">
                                        <label class="form-label">Clutch</label>
                                        <select class="form-select py-2" id="TRANSMISSION_CLUTCH" aria-label="Default select example">
                                          <option selected disabled="" value="">Please select an option</option>
                                        </select>
                                      </div>
                                    </div>
                                    <div class="col-12 col-sm-6 col-lg-6 col-md-6">
                                      <div class="form-group">
                                        <input type="text" class="" placeholder=" " id="min_forward_speed">
                                        <label for="name" class="text-dark ">Min Forward Speed</label>
                                      </div>
                                    </div>
                                    <div class="col-12 col-sm-6 col-lg-6 col-md-6">
                                      <div class="form-group">
                                        <input type="text" class="" placeholder=" " id="max_forward_speed">
                                        <label for="name" class="text-dark ">Max Forward Speed</label>
                                      </div>
                                    </div>
                                    <div class="col-12 col-sm-6 col-lg-6 col-md-6">
                                      <div class="form-group">
                                        <input type="text" class="" placeholder=" " id="min_reverse_speed">
                                        <label for="name" class="text-dark ">Min Reverse Speed</label>
                                      </div>
                                    </div>
                                    <div class="col-12 col-sm-6 col-lg-6 col-md-6">
                                      <div class="form-group">
                                        <input type="text" class="" placeholder=" " id="max_reverse_speed">
                                        <label for="name" class="text-dark ">Max Reverse Speed</label>
                                      </div>
                                    </div>
                                    <h5 class="fw-bold"> Steering Details</h5>
                                    <div class="col-12 col-sm-6 col-lg-6 col-md-6">
                                      <div class="form-outline">
                                        <label class="form-label">Type</label>
                                        <select class="form-select py-2" id="STEERING_DETAIL" aria-label="Default select example">
                                          <option selected disabled="" value="">Please select an option</option>
                                        </select>
                                      </div>
                                    </div>
                                    <div class="col-12 col-sm-6 col-lg-6 col-md-6">
                                      <div class="form-outline">
                                        <label class="form-label">Coloumn</label>
                                        <select class="form-select py-2" id="STEERING_COLUMN" aria-label="Default select example">
                                          <option selected disabled="" value="">Please select an option</option>
                                        </select>
                                      </div>
                                    </div>
                                    <h5 class="fw-bold mt-3 ">Power Take Off Details</h5>
                                    <div class="col-12 col-sm-6 col-lg-6 col-md-6">
                                      <div class="form-outline">
                                        <label class="form-label">Type</label>
                                        <select class="form-select py-2" id="POWER_TAKEOFF_TYPE" aria-label="Default select example">
                                          <option selected disabled="" value="">Please select an option</option>
                                        </select>
                                      </div>
                                    </div>
                                    <div class="col-12 col-sm-6 col-lg-6 col-md-6">
                                      <div class="form-group">
                                        <input type="text" class="" placeholder=" " id="power_take_off_rpm">
                                        <label for="name" class="text-dark ">RPM</label>
                                      </div>
                                    </div>
                                    <h5 class="fw-bold">Dimensions And Weight Details</h5>
                                    <div class="col-12 col-sm-6 col-lg-6 col-md-6">
                                      <div class="form-group">
                                        <input type="text" class="" placeholder=" " id="totat_weight">
                                        <label for="name" class="text-dark ">Total Weight</label>
                                      </div>
                                    </div>
                                    <div class="col-12 col-sm-6 col-lg-6 col-md-6">
                                      <div class="form-outline">
                                        <label class="form-label">Wheel Base</label>
                                        <select class="form-select py-2" id="WHEEL_BASE" aria-label="Default select example">
                                        <option selected disabled="" value="">Please select an option</option>
                                        </select>
                                      </div>
                                    </div>
                                    <h5 class="fw-bold mb-3">Hydraulics Details</h5>
                                    <div class="col-12 col-sm-6 col-lg-6 col-md-6">
                                      <div class="form-outline">
                                        <label class="form-label">Lifting Capacity</label>
                                        <select class="form-select py-2" id="LIFTING_CAPACITY" aria-label="Default select example">
                                        <option selected disabled="" value="">Please select an option</option>
                                        </select>
                                      </div>
                                    </div>
                                    <div class="col-12 col-sm-6 col-lg-6 col-md-6">
                                      <div class="form-outline">
                                        <label class="form-label">3 Point Linkage</label>
                                        <select class="form-select py-2" id="LINKAGE_POINT" aria-label="Default select example">
                                        <option selected disabled="" value="">Please select an option</option>
                                        </select>
                                      </div>
                                    </div>
                                    <h5 class="fw-bold mt-3">Fuel Tank</h5>
                                    <div class="col-12 col-sm-6 col-lg-6 col-md-6">
                                      <div class="form-group">
                                        <input type="text" class="" placeholder=" " id="fuel_tank_cc">
                                        <label for="name" class="text-dark ">Capacity(Ltr)</label>
                                      </div>
                                    </div>
                                    <h5 class="fw-bold"> Wheels And Tyres Details</h5>
                                    <div class="col-12 col-sm-4 col-lg-4 col-md-4">
                                      <div class="form-outline">
                                        <label class="form-label">Wheel Drive</label>
                                        <select class="form-select py-2" id="WHEEL_DRIVE" aria-label="Default select example">
                                        <option selected disabled="" value="">Please select an option</option>
                                        </select>
                                      </div>
                                    </div>
                                    <div class="col-12 col-sm-4 col-lg-4 col-md-4">
                                      <div class="form-group">
                                        <input type="text" class="" placeholder=" " id="front_tyre">
                                        <label for="name" class="text-dark ">Front</label>
                                      </div>
                                    </div>
                                    <div class="col-12 col-sm-4 col-lg-4 col-md-4">
                                      <div class="form-group">
                                        <input type="text" class="" placeholder=" " id="rear_tyre">
                                        <label for="name" class="text-dark ">Rear</label>
                                      </div>
                                    </div>
                                    <h5 class="fw-bold">Other Information Details</h5>
                                    <div class="col-12 col-sm-6 col-lg-6 col-md-6">
                                      <div class="form-group">
                                        <input type="text" class="" placeholder=" " id="accessory">
                                        <label for="name" class="text-dark ">Accessories</label>
                                      </div>
                                    </div>
                                    <div class="col-12 col-sm-6 col-lg-6 col-md-6">
                                      <div class="form-outline">
                                        <label class="form-label">Status</label>
                                        <select class="form-select py-2" id="STATUS" aria-label="Default select example">
                                        <option selected disabled="" value="">Please select an option</option>
                                        </select>
                                      </div>
                                    </div>
                                    <div class="col-12 ">
                                      <div class="form-group">
                                        <input type="text" class="py-5" placeholder=" " id="description">
                                        <label for="name" class="text-dark">About</label>
                                      </div>
                                    </div>
                                </div>
                                <button type="button" id="save" class="btn btn-success fw-bold px-3">Submit</button>
                              </form>
                            </div>
                        </div>
                    </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary px-3" data-bs-dismiss="modal">Close</button>
                  
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
            <div class="col-12 col-sm-12 col-md-3 col-lg-3">
              <div class="form-outline">
                <!-- <input type="text" id="search_email" name="search_email" class="form-control" /> -->
                <select class="form-select py-2" aria-label="Default select example">
                    <option selected>Select Brand</option>
                    <option value="1">Mahindra</option>
                    <option value="2">Swaraj</option>
                    <option value="3">John Deere</option>
                </select>
              </div>
            </div>
            <div class="col-12 col-sm-12 col-md-3 col-lg-3">
              <div class="form-outline">
                <!-- <input type="text" id="search_email" name="search_email" class="form-control" /> -->
                <select class="form-select py-2" aria-label="Default select example">
                    <option selected>Select Model</option>
                      <option value="1">3032 NX</option>
                      <option value="2">3030 NX</option>
                      <option value="3">3230 NX</option>
                </select>
              </div>
            </div>
            <div class="col-12 col-sm-12 col-md-3 col-lg-3">
              <div class="form-outline">
                <select class="form-select py-2" aria-label="Default select example">
                    <option selected>Select HP</option>
                      <option value="1">32 HP</option>
                      <option value="2">40 HP</option>
                      <option value="3">37 HP</option>
                </select>
              </div>
            </div>
            <div class="col-12 col-sm-12 col-md-3 col-lg-3 text-center">
              <div class="">
                <button type="button" class="btn-success btn px-4 py-2" id="Search">Search</button>
                <button type="button" class="btn-success btn px-4 py-2" id="Reset">Reset</button>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class=" mb-5">
                            <div class="table-responsive">
                                <table  id="example" class="table dataTable no-footer py-1" width="100%">
                                    <thead>
                                        <tr>
                                            <th class="d-none d-md-table-cell text-white">S.No.</th>
                                            <th class="d-none d-md-table-cell text-white">Brand</th>
                                            <th class="d-none d-md-table-cell text-white">Model</th>
                                            <th class="d-none d-md-table-cell text-white">No. of Cylinder</th>
                                            <th class="d-none d-md-table-cell text-white">PTO HP</th>
                                            <th class="d-none d-md-table-cell text-white"> HP Category</th>
                                            <th class="d-none d-md-table-cell text-white"> Brakes</th>
                                            <th class="d-none d-md-table-cell text-white">Steering</th>
                                            <th class="d-none d-md-table-cell text-white">Tyres</th>
                                        </tr>
                                    </thead>
                                    <tbody class="data-table">
                                    </tbody>
                                </table>
                            </div>
      </div>
    </div>
   </section>
      
    
</div>
</div>
</body>

<?php
   include 'includes/footertag.php';
   ?> 
   
   <script>
  $(document).ready(function () {
    BackgroundUpload();
    $('#save').click(store);
    console.log('fjfej');
    $("#add_tractor_form").validate({
      
      rules: {
        brand_name: "required",
        model: "required",
        product_type_id: "required",
        hp_category: "required",
        // TOTAL_CYCLINDER: "required",
        // horse_power: "required",
        // gear_box_forward: "required",
        // gear_box_reverse: "required",
        // BRAKE_TYPE: "required",
        // starting_price: "required",
        // ending_price: "required",
        // warranty: "required",
        // BRAKE_TYPE: "required",
        // CAPACITY_CC: "required",
        // engine_rated_rpm: "required",
        // COOLING: "required",
        // AIR_FILTER: "required",
        // fuel_pump_id: "required",
        // TORQUE: "required",
        // TRANSMISSION_TYPE: "required",
        // TRANSMISSION_CLUTCH: "required",
        // min_forward_speed: "required",
        // max_forward_speed: "required",
        // min_reverse_speed: "required",
        // max_reverse_speed: "required",
        // STEERING_DETAIL: "required",
        // STEERING_COLUMN: "required",
        // POWER_TAKEOFF_TYPE: "required",
        // power_take_off_rpm: "required",
        // totat_weight: "required",
        // WHEEL_BASE: "required",
        // LIFTING_CAPACITY: "required",
        // LINKAGE_POINT: "required",
        // fuel_tank_cc: "required",
        // WHEEL_DRIVE: "required",
        // front_tyre: "required",
        // rear_tyre: "required",
        // accessory: "required",
        // STATUS: "required",
        // description: "required",
      },
      messages: {
        brand_name: "Please enter the brand name",
        model: "Please enter the model",
        product_type_id: "Please select a product type",
        hp_category: "Please enter the HP category",
      },
      errorElement: "div",
      errorPlacement: function (error, element) {
        error.addClass("text-danger");
        error.insertAfter(element);
      },
      submitHandler: function (form) {
        alert("Form submitted successfully!");
      }
    });
  });

  function BackgroundUpload() {
    var imgWrap = "";
    var imgArray = [];

    function generateUniqueClassName(index) {
      return "background-image-" + index;
    }

    $('.background__inputfile').each(function () {
      $(this).on('change', function (e) {
        imgWrap = $(this).closest('.background__box').find('.background__img-wrap');
        var maxLength = $(this).attr('data-max_length');

        var files = e.target.files;
        var filesArr = Array.prototype.slice.call(files);
        var iterator = 0;
        filesArr.forEach(function (f, index) {

          if (!f.type.match('image.*')) {
            return;
          }

          if (imgArray.length > maxLength) {
            return false;
          } else {
            var len = 0;
            for (var i = 0; i < imgArray.length; i++) {
              if (imgArray[i] !== undefined) {
                len++;
              }
            }
            if (len > maxLength) {
              return false;
            } else {
              imgArray.push(f);

              var reader = new FileReader();
              reader.onload = function (e) {
                var className = generateUniqueClassName(iterator);
                var html = "<div class='background__img-box'><div onclick='BackgroundImage(\"" + className + "\")' style='background-image: url(" + e.target.result + ")' data-number='" + $(".background__img-close").length + "' data-file='" + f.name + "' class='img-bg " + className + "'><div class='background__img-close'></div></div></div>";
                imgWrap.append(html);
                iterator++;
              }
              reader.readAsDataURL(f);
            }
          }
        });
      });
    });

    $('body').on('click', ".background__img-close", function (e){
      var file = $(this).parent().data("file");
      for (var i = 0; i < imgArray.length; i++) {
        if (imgArray[i].name === file) {
          imgArray.splice(i, 1);
          break;
        }
      }
      $(this).parent().parent().remove();
    });
}

function get() {
        var url = "<?php echo $APIBaseURL; ?>getBrands";
        $.ajax({
            url: url,
            type: "GET",
            headers: {
                'Authorization': 'Bearer ' + localStorage.getItem('token')
            },
            success: function (data) {
                // console.log(data);
                const select = document.getElementById('brand_name');
                select.innerHTML = '';

                if (data.brands.length > 0) {
                    data.brands.forEach(row => {
                        const option = document.createElement('option');
                        // option.value = row.brand_id; // You might want to set a value for each option
                        option.textContent = row.brand_name;
                        select.appendChild(option);
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
    get();
// fetch lookup data in select box
function get_lookup() {
    var url = "<?php echo $APIBaseURL; ?>getLookupData";
    $.ajax({
        url: url,
        type: "GET",
        headers:{
            'Authorization': 'Bearer' + localStorage.getItem('token')
        },
        success: function (data) {
            // console.log(data);
           // const select = document.getElementById('lookupSelectbox');
           // select.innerHTML = ''; //Clear previous data
         // console.log(data.tractor_type[].lookup_data_value,"data.tractor_type.lookup_data_value.length")
           
                // data.tractor_type.forEach(row => {
             
                //     const option = document.createElement('option');
                //     option.brake_type_id= row.name;
                //     // option.cooling_id = row.name;
                //     // option.total_cyclinder_id= row.name; // Set the value attribute if needed
                //     var noofcylinder = document.getElementById("total_cyclinder_id");
                //     var brake_type_id = document.getElementById("brake_type_id");
                //     if(row.lookup_type_id == 16)
                //     brake_type_id.appendChild(option);
                  
                // });

                for (var i = 0; i <  data.tractor_type.length; i++) {
                        $("select#"+data.tractor_type[i].name).append('<option value="'+data.tractor_type[i].id+'">'+data.tractor_type[i].lookup_data_value+'</option>');

                    }
            
            // else {
                // Display a message if there's no valid data
               // select.innerHTML = '<option> No valid data available</option>';
           // }
        },
        error: function (error) {
            console.error('Error fetching data:', error);
        }
    });
}
get_lookup();


// insert data
function store(event) {
    event.preventDefault();
    console.log('jfhfhw');
    var brand_name = $('#brand_name').val();
    var model = $('#model').val();
    var product_type_id = $('#product_type_id').val();
    var hp_category = $('#hp_category').val();
    var TOTAL_CYCLINDER = $('#TOTAL_CYCLINDER').val();
    var horse_power = $('#horse_power').val();
    var gear_box_forward = $('#gear_box_forward').val();
    var gear_box_reverse = $('#gear_box_reverse').val();
    var BRAKE_TYPE = $('#BRAKE_TYPE').val();
    var starting_price = $('#starting_price').val();
    var  ending_price= $('#ending_price').val();
    var  warranty= $('#warranty').val();
    var tractor_type_id = $('#TRACTOR_TYPE').val();
    var image_name = $('#image_name').val();
    var CAPACITY_CC = $('#CAPACITY_CC').val();
    var engine_rated_rpm = $('#engine_rated_rpm').val();
    var COOLING = $('#COOLING').val();
    var AIR_FILTER = $('#AIR_FILTER').val();
    var fuel_pump_id = $('#fuel_pump_id').val();
    var TORQUE = $('#TORQUE').val();
    var TRANSMISSION_TYPE = $('#TRANSMISSION_TYPE').val();
    var TRANSMISSION_CLUTCH = $('#TRANSMISSION_CLUTCH').val();
    var min_forward_speed = $('#min_forward_speed').val();
    var max_forward_speed = $('#max_forward_speed').val();
    var min_reverse_speed = $('#min_reverse_speed').val();
    var max_reverse_speed = $('#max_reverse_speed').val();
    var STEERING_DETAIL = $('#STEERING_DETAIL').val();
    var STEERING_COLUMN = $('#STEERING_COLUMN').val();
    var POWER_TAKEOFF_TYPE = $('#POWER_TAKEOFF_TYPE').val();
    var power_take_off_rpm = $('#power_take_off_rpm').val();
    var totat_weight = $('#totat_weight').val();
    var WHEEL_BASE = $('#WHEEL_BASE').val();
    var LIFTING_CAPACITY = $('#LIFTING_CAPACITY').val();
    var LINKAGE_POINT = $('#LINKAGE_POINT').val();
    var fuel_tank_cc = $('#fuel_tank_cc').val();
    var WHEEL_DRIVE = $('#WHEEL_DRIVE').val();
    var front_tyre = $('#front_tyre').val();
    var rear_tyre = $('#rear_tyre').val();
    var accessory = $('#accessory').val();
    var STATUS = $('#STATUS').val();
    var description = $('#description').val();

    // Prepare data to send to the server
    var paraArr = {
      'brand_id': brand_name,
      'model': model,
      'product_type_id': product_type_id,
      'hp_category': hp_category,
      'total_cyclinder_id': TOTAL_CYCLINDER,
      'horse_power': horse_power,
      'gear_box_forward': gear_box_forward,
      'gear_box_reverse': gear_box_reverse,
      'brake_type_id': BRAKE_TYPE,
      'starting_price': starting_price,
      'ending_price': ending_price,
      'warranty': warranty,
      'tractor_type_id': tractor_type_id,
      'image_name': image_name,
      'CAPACITY_CC': CAPACITY_CC,
      'engine_rated_rpm': engine_rated_rpm,
      'COOLING': COOLING,
      'AIR_FILTER': AIR_FILTER,
      'fuel_pump_id': fuel_pump_id,
      'TORQUE': TORQUE,
      'TRANSMISSION_TYPE': TRANSMISSION_TYPE,
      'TRANSMISSION_CLUTCH': TRANSMISSION_CLUTCH,
      'min_forward_speed': min_forward_speed,
      'max_forward_speed': max_forward_speed,
      'min_reverse_speed': min_reverse_speed,
      'max_reverse_speed': max_reverse_speed,
      'STEERING_DETAIL': STEERING_DETAIL,
      'STEERING_COLUMN': STEERING_COLUMN,
      'POWER_TAKEOFF_TYPE': POWER_TAKEOFF_TYPE,
      'power_take_off_rpm': power_take_off_rpm,
      'totat_weight': totat_weight,
      'WHEEL_BASE': WHEEL_BASE,
      'LIFTING_CAPACITY': LIFTING_CAPACITY,
      'LINKAGE_POINT': LINKAGE_POINT,
      'fuel_tank_cc': fuel_tank_cc,
      'WHEEL_DRIVE': WHEEL_DRIVE,
      'front_tyre':front_tyre,
      'rear_tyre':rear_tyre,
      'accessory':accessory,
      'STATUS':STATUS,
      'description':description,
    };

    var url = "<?php echo $APIBaseURL; ?>storeProduct";
    console.log(url);
    var token = localStorage.getItem('token');
    var headers = {
      'Authorization': 'Bearer ' + token
    };
    $.ajax({
      url: url,
      type: "POST",
      data: paraArr,
      headers: headers,
      success: function (result) {
        console.log(result, "result");
        // window.location.href = "<?php echo $baseUrl; ?>tractor_listing.php"; 
        console.log("Add successfully");
        // alert('successfully inserted..!')
      },
      error: function (error) {
        console.error('Error fetching data:', error);
      }
    });
  }

  // fetch data
  function get_tractor_list() {
    var url = "<?php echo $APIBaseURL; ?>getProduct";
    console.log(url);
    $.ajax({
        url: url,
        type: "GET",
        headers: {
            'Authorization': 'Bearer ' + localStorage.getItem('token')
        },
        success: function (data) {
          console.log(data);
            const tableBody = document.getElementById('data-table');
            // tableBody.innerHTML = ''; // Clear previous data

            let users=data.product_type;

            if (users.length > 0) {
          console.log(typeof users);
                users.map(row => {
                  console.log(row);
                    const tableRow = document.createElement('tr');
                    let originalDate= new Date(row.created_at);

                    let day=originalDate.getDate();
                    let month=originalDate.getMonth()+1;
                    let year=originalDate.getFullYear();

                    let formatDate=`${day}-${month}-${year}`;
                    tableRow.innerHTML = `
                        <td>${row.id}</td>
                        <td>${row.brand_name}</td>
                        <td>${row.model_name}</td>
                        <td>${row.total_cyclinder_id}</td>
                        <td>${row.hp_category}</td>
                        <td>${row.horse_power}</td>
                        <td>${row.brake_type_id}</td>
                        <td>${row.steering_details_id}</td>
                        <td><div class="d-flex"><button class="btn btn-danger btn-sm mx-1" id="delete_user" onclick="destroy(${row.id});"><i class="fa fa-trash" style="font-size: 11px;"></i></button></div></td>
                    `;
                    tableBody.appendChild(tableRow);
                });
            } else {
                tableBody.innerHTML = '<tr><td colspan="7">No valid data available</td></tr>';
            }
        },
        error: function (error) {
            console.error('Error fetching data:', error);
        }
    });
}
get_tractor_list();
</script>

