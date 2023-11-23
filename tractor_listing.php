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
                            <form>
                                <div class="row justify-content-center pt-4">
                                  <h5 class="fw-bold">Listing</h5>
                                    <div class="col-12 col-sm-6 col-lg-6 col-md-6 my-2">
                                      <select class="form-select py-2" aria-label="Default select example">
                                        <option selected> Brand</option>
                                        <option value="1">Mahindra</option>
                                        <option value="2">Swaraj</option>
                                        <option value="3">John Deere</option>
                                      </select>
                                    </div>
                                    <div class="col-12 col-sm-6 col-lg-6 col-md-6 my-2">
                                      <select class="form-select py-2" aria-label="Default select example">
                                          <option selected> Model Name</option>
                                          <option value="1">frsg</option>
                                          <option value="2">dffsdf</option>
                                          <option value="3">ggf</option>
                                      </select>
                                    </div>
                                    <div class="col-12 col-sm-4 col-lg-4 col-md-4 my-2">
                                      <select class="form-select py-2" aria-label="Default select example">
                                          <option selected> No of Cylinder</option>
                                          <option value="1">1</option>
                                          <option value="2">2</option>
                                          <option value="3">3</option>
                                          <option value="3">4</option>
                                      </select>
                                    </div>
                                    <div class="col-12 col-sm-4 col-lg-4 col-md-4 my-2">
                                      <div class="form-group">
                                        <input type="text" class="" placeholder=" " id="brand">
                                        <label for="name" class="text-dark "> HP Category</label>
                                      </div>
                                    </div>
                                    <div class="col-12 col-sm-4 col-lg-4 col-md-4 my-2">
                                      <select class="form-select py-2" aria-label="Default select example">
                                          <option selected> No of Cylinder</option>
                                          <option value="1">1</option>
                                          <option value="2">2</option>
                                          <option value="3">3</option>
                                          <option value="3">4</option>
                                      </select>
                                    </div>
                                    <div class="col-12 col-sm-4 col-lg-4 col-md-4">
                                      <div class="form-group">
                                        <input type="text" class="" placeholder=" " id="brand">
                                        <label for="name" class="text-dark ">Gear Box</label>
                                      </div>
                                    </div>
                                    <div class="col-12 col-sm-4 col-lg-4 col-md-4 ">
                                      <select class="form-select py-2" aria-label="Default select example">
                                          <option selected>Brakes</option>
                                          <option value="1">gbdf</option>
                                          <option value="2">fdvsdf</option>
                                          <option value="3">dfsd</option>
                                          <option value="3">fds</option>
                                      </select>
                                    </div>
                                    <div class="col-12 col-sm-4 col-lg-4 col-md-4">
                                      <div class="form-group">
                                        <input type="text" class="" placeholder=" " id="brand">
                                        <label for="name" class="text-dark ">Price</label>
                                      </div>
                                    </div>
                                    <div class="col-12 col-sm-7 col-lg-7 col-md-7">
                                      <div class="form-group">
                                        <input type="text" class="" placeholder=" " id="brand">
                                        <label for="name" class="text-dark ">Warranty</label>
                                      </div>
                                    </div>
                                    <div class="col-12 col-lg-3 col-sm-3 col-md-3">
                                      <h6>Select Tractor</h6>
                                      <input type="checkbox" class="checkbox-round ms-3" value="0-3"/><span class="ps-2 fs-6"> Mini Tractor</span><br />
                                      <input type="checkbox" class="checkbox-round ms-3" value="3-6"/><span class="ps-2 fs-6">4WD</span><br />
                                      <input type="checkbox" class="checkbox-round ms-3" value="6-9"/><span class="ps-2 fs-6">Upcoming</span><br />
                                      <input type="checkbox" class="checkbox-round ms-3" value="6-9"/><span class="ps-2 fs-6">  Popular</span><br />
                                      <input type="checkbox" class="checkbox-round ms-3" value="6-9"/><span class="ps-2 fs-6">Latest</span><br />
                                    </div>
                                    <div class="col-12 col-sm-2 col-lg-2 col-md-2 ps-3">
                                      <div class="background__box">
                                            <div class="background__btn-box ">
                                                <label class="background__btn">
                                                <p class="text-white bg-success p-2 rounded">Upload images</p>
                                                    <input type="file" data-max_length="20"name="imgfile"  ref="fileInput"
                                                    style="display: none"
                                                    @change="handleFileInput"
                                                    accept="image/png, image/jpg, image/jpeg" class="background__inputfile" id="banner_image">
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
                                      <select class="form-select py-2" aria-label="Default select example">
                                          <option selected>Capacity CC</option>
                                          <option value="1">gbdf</option>
                                          <option value="2">fdvsdf</option>
                                          <option value="3">dfsd</option>
                                          <option value="3">fds</option>
                                      </select>
                                    </div>
                                    <div class="col-12 col-sm-4 col-lg-4 col-md-4">
                                      <div class="form-group">
                                        <input type="text" class="" placeholder=" " id="brand">
                                        <label for="name" class="text-dark ">Engine Rated RPM</label>
                                      </div>
                                    </div>
                                    <div class="col-12 col-sm-4 col-lg-4 col-md-4">
                                      <select class="form-select py-2" value="cooling_id" name="cooling_id" id="cooling_id " aria-label="Default select example">
                                          <option selected>Select Cooling</option>
                                      </select>
                                    </div>
                                    <div class="col-12 col-sm-4 col-lg-4 col-md-4">
                                      <select class="form-select py-2" aria-label="Default select example">
                                          <option selected>Air Filter</option>
                                          <option value="1">gbdf</option>
                                          <option value="2">fdvsdf</option>
                                          <option value="3">dfsd</option>
                                          <option value="3">fds</option>
                                      </select>
                                    </div>
                                    <div class="col-12 col-sm-4 col-lg-4 col-md-4">
                                      <select class="form-select py-2" aria-label="Default select example">
                                          <option selected>Fuel Pump</option>
                                          <option value="1">gbdf</option>
                                          <option value="2">fdvsdf</option>
                                          <option value="3">dfsd</option>
                                          <option value="3">fds</option>
                                      </select>
                                    </div>
                                    <div class="col-12 col-sm-4 col-lg-4 col-md-4">
                                      <select class="form-select py-2" aria-label="Default select example">
                                          <option selected>Torque</option>
                                          <option value="1">gbdf</option>
                                          <option value="2">fdvsdf</option>
                                          <option value="3">dfsd</option>
                                          <option value="3">fds</option>
                                      </select>
                                    </div>
                                    <h5 class="fw-bold mt-4">Transmission Details</h5>
                                    <div class="col-12 col-sm-6 col-lg-6 col-md-6 mb-4">
                                      <select class="form-select py-2" aria-label="Default select example">
                                          <option selected>Type</option>
                                          <option value="1">gbdf</option>
                                          <option value="2">fdvsdf</option>
                                          <option value="3">dfsd</option>
                                          <option value="3">fds</option>
                                      </select>
                                    </div>
                                    <div class="col-12 col-sm-6 col-lg-6 col-md-6 mb-4">
                                      <select class="form-select py-2" aria-label="Default select example">
                                          <option selected>Clutch</option>
                                          <option value="1">gbdf</option>
                                          <option value="2">fdvsdf</option>
                                          <option value="3">dfsd</option>
                                          <option value="3">fds</option>
                                      </select>
                                    </div>
                                    <div class="col-12 col-sm-6 col-lg-6 col-md-6">
                                      <div class="form-group">
                                        <input type="text" class="" placeholder=" " id="brand">
                                        <label for="name" class="text-dark ">Forward Speed</label>
                                      </div>
                                    </div>
                                    <div class="col-12 col-sm-6 col-lg-6 col-md-6">
                                      <div class="form-group">
                                        <input type="text" class="" placeholder=" " id="brand">
                                        <label for="name" class="text-dark ">Reverse Speed</label>
                                      </div>
                                    </div>
                                    <h5 class="fw-bold"> Steering Details</h5>
                                    <div class="col-12 col-sm-6 col-lg-6 col-md-6">
                                      <select class="form-select py-2" aria-label="Default select example">
                                          <option selected>Type</option>
                                          <option value="1">gbdf</option>
                                          <option value="2">fdvsdf</option>
                                          <option value="3">dfsd</option>
                                          <option value="3">fds</option>
                                      </select>
                                    </div>
                                    <div class="col-12 col-sm-6 col-lg-6 col-md-6">
                                      <select class="form-select py-2" aria-label="Default select example">
                                          <option selected>Steering Coloumn</option>
                                          <option value="1">gbdf</option>
                                          <option value="2">fdvsdf</option>
                                          <option value="3">dfsd</option>
                                          <option value="3">fds</option>
                                      </select>
                                    </div>
                                    <h5 class="fw-bold mt-3 ">Power Take Off Details</h5>
                                    <div class="col-12 col-sm-6 col-lg-6 col-md-6">
                                      <select class="form-select py-2" aria-label="Default select example">
                                          <option selected>Type</option>
                                          <option value="1">gbdf</option>
                                          <option value="2">fdvsdf</option>
                                          <option value="3">dfsd</option>
                                          <option value="3">fds</option>
                                      </select>
                                    </div>
                                    <div class="col-12 col-sm-6 col-lg-6 col-md-6">
                                      <div class="form-group">
                                        <input type="text" class="" placeholder=" " id="brand">
                                        <label for="name" class="text-dark ">RPM</label>
                                      </div>
                                    </div>
                                    <h5 class="fw-bold">Dimensions And Weight Details</h5>
                                    <div class="col-12 col-sm-6 col-lg-6 col-md-6">
                                      <div class="form-group">
                                        <input type="text" class="" placeholder=" " id="brand">
                                        <label for="name" class="text-dark ">Total Weight</label>
                                      </div>
                                    </div>
                                    <div class="col-12 col-sm-6 col-lg-6 col-md-6">
                                      <select class="form-select py-2" aria-label="Default select example">
                                          <option selected>Wheel Base</option>
                                          <option value="1">gbdf</option>
                                          <option value="2">fdvsdf</option>
                                          <option value="3">dfsd</option>
                                          <option value="3">fds</option>
                                      </select>
                                    </div>
                                    <h5 class="fw-bold">Hydraulics Details</h5>
                                    <div class="col-12 col-sm-6 col-lg-6 col-md-6">
                                      <select class="form-select py-2" aria-label="Default select example">
                                          <option selected>Lifting Capacity</option>
                                          <option value="1">gbdf</option>
                                          <option value="2">fdvsdf</option>
                                          <option value="3">dfsd</option>
                                          <option value="3">fds</option>
                                      </select>
                                    </div>
                                    <div class="col-12 col-sm-6 col-lg-6 col-md-6">
                                      <select class="form-select py-2" aria-label="Default select example">
                                          <option selected>3 Point Linkage</option>
                                          <option value="1">gbdf</option>
                                          <option value="2">fdvsdf</option>
                                          <option value="3">dfsd</option>
                                          <option value="3">fds</option>
                                      </select>
                                    </div>
                                    <h5 class="fw-bold mt-3">Fuel Tank</h5>
                                    <div class="col-12 col-sm-6 col-lg-6 col-md-6">
                                      <div class="form-group">
                                        <input type="text" class="" placeholder=" " id="brand">
                                        <label for="name" class="text-dark ">Capacity(Ltr)</label>
                                      </div>
                                    </div>
                                    <h5 class="fw-bold"> Wheels And Tyres Details</h5>
                                    <div class="col-12 col-sm-4 col-lg-4 col-md-4">
                                      <select class="form-select py-2" aria-label="Default select example">
                                          <option selected>Wheel Drive</option>
                                          <option value="1">gbdf</option>
                                          <option value="2">fdvsdf</option>
                                          <option value="3">dfsd</option>
                                          <option value="3">fds</option>
                                      </select>
                                    </div>
                                    <div class="col-12 col-sm-4 col-lg-4 col-md-4">
                                      <div class="form-group">
                                        <input type="text" class="" placeholder=" " id="brand">
                                        <label for="name" class="text-dark ">Front</label>
                                      </div>
                                    </div>
                                    <div class="col-12 col-sm-4 col-lg-4 col-md-4">
                                      <div class="form-group">
                                        <input type="text" class="" placeholder=" " id="brand">
                                        <label for="name" class="text-dark ">Rear</label>
                                      </div>
                                    </div>
                                    <h5 class="fw-bold">Other Information Details</h5>
                                    <div class="col-12 col-sm-6 col-lg-6 col-md-6">
                                      <select class="form-select py-2" aria-label="Default select example">
                                          <option selected>Accessories</option>
                                          <option value="1">gbdf</option>
                                          <option value="2">fdvsdf</option>
                                          <option value="3">dfsd</option>
                                          <option value="3">fds</option>
                                      </select>
                                    </div>
                                    <div class="col-12 col-sm-6 col-lg-6 col-md-6">
                                      <div class="form-group">
                                        <input type="text" class="" placeholder=" " id="brand">
                                        <label for="name" class="text-dark ">Status</label>
                                      </div>
                                    </div>
                                    <div class="col-12 ">
                                      <div class="form-group">
                                        <input type="text" class="py-5" placeholder=" " id="brand">
                                        <label for="name" class="text-dark ">About</label>
                                      </div>
                                    </div>
                                </div>
                              </form>
                            </div>
                        </div>
                    </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary px-3" data-bs-dismiss="modal">Close</button>
                  <button type="button" class="btn btn-success fw-bold px-3">Submit</button>
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
                                            <!-- <th class="d-none d-md-table-cell text-dark">Category</th> -->
                                            <th class="d-none d-md-table-cell text-white">Brand</th>
                                            <th class="d-none d-md-table-cell text-white">Model</th>
                                            <th class="d-none d-md-table-cell text-white">No. of Cylinder</th>
                                            <th class="d-none d-md-table-cell text-white">PTO HP</th>
                                            <th class="d-none d-md-table-cell text-white"> HP Category</th>
                                            <th class="d-none d-md-table-cell text-white"> Gear Box</th>
                                            <th class="d-none d-md-table-cell text-white"> Brakes</th>
                                            <th class="d-none d-md-table-cell text-white">Steering</th>
                                            <th class="d-none d-md-table-cell text-white">Tyres</th>
                                        </tr>
                                    </thead>
                                    <tbody>
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
     jQuery(document).ready(function () {
    
    BackgroundUpload();
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

    $('body').on('click', ".background__img-close", function (e) {
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
    var url = "<?php echo $APIBaseURL; ?>getLookupData";
    $.ajax({
        url: url,
        type: "GET",
        headers: {
            'Authorization': 'Bearer' + localStorage.getItem('token')
        },
        success: function (data) {
            console.log(data);
            const select = document.getElementById('lookupSelectbox');
            select.innerHTML = ''; // Clear previous data

            if (data.lookup_type.length > 0) {
                data.lookup_type.forEach(row => {
                    const option = document.createElement('option');
                    option.textContent = row.cooling_id;
                    option.value = row.id; // Set the value attribute if needed
                    select.appendChild(option);
                });
            } else {
                // Display a message if there's no valid data
                select.innerHTML = '<option> No valid data available</option>';
            }
        },
        error: function (error) {
            console.error('Error fetching data:', error);
            // Display an error message or handle the error as needed
        }
    });
}
get();
   </script>