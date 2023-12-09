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
                <span>Old Harvester List</span>
              </li>
            </ol>
          </nav>
          <button type="button" id="add_trac" class="btn add_btn btn-success float-right" data-bs-toggle="modal"  data-bs-target="#staticBackdrop">
            <i class="fa fa-plus" aria-hidden="true"></i>Add Old Harvester
          </button>

          <!-- Modal -->
          <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-xl modal-dialog-centered">
              <div class="modal-content modal_box">
                <div class="modal-header modal_head">
                  <h5 class="modal-title text-white fw-bold" id="staticBackdropLabel">Add Old Harvester</h5>
                  <button type="button" class="btn-close btn-success" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body bg-light">
                        <div class="row justify-content-center">
                            <div class="col-lg-10">
                              <!-- <h4 class="text-center">Fill your Tractor Details</h4> -->
                              <form id="old_form">
                            <div class="row justify-content-center pt-4">
                                <h5 class="fw-bold">Your Harvester Information</h5>
                                <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                                  <div class="form-outline mt-3">
                                    <label class="form-label text-dark">Brand</label>
                                    <select class="form-select " aria-label=".form-select-lg example" id="brand"name="brand">
                                      <option value>Select Brand</option>
                                      <option value="1">Mahindra</option>
                                      <option value="2">svaraj</option>
                                      <option value="2">sonakila</option>
                                      </select>
                                  </div>
                                </div>
                                <div class="col-12 col-lg-6 col-md-6 col-sm-6 ">
                                  <div class="form-outline mt-3">
                                    <label for="name" class="form-label text-dark">Model Name</label>
                                    <input type="text" class="form-control" placeholder="Enter Your Model Name" id="model" name="model">
                                  </div>
                               </div>
                               <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                                  <div class="form-outline mt-3">
                                    <label class="form-label text-dark">Crop Type</label>
                                    <select class="form-select py-2 " aria-label=".form-select-lg example" id="crop_type" name="crop_type">
                                        <option value="">Select Crop Type</option>
                                        <option value="1">MultiCrop</option>
                                        <option value="2">Paddy</option>
                                        <option value="3">Maize</option>
                                        <option value="3">Sugarcane</option>
                                    </select>
                                  </div>
                                </div>
                                <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                                  <div class="form-outline mt-3">
                                    <label class="form-label text-dark"> Power Source</label>
                                    <select class="form-select py-2 " aria-label=".form-select-lg example" id="power" name="power">
                                      <option value="">Select Power Source</option>
                                      <option value="1">Self</option>
                                      <option value="2">Tractor Mounted</option>
                                    </select>
                                  </div>
                                </div>
                                <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                                  <div class="form-outline pt-3 mt-3">
                                    <label class="form-label text-dark">Hours</label>
                                    <select class="form-select py-2 " aria-label=".form-select-lg example" id="hours" name="hours">
                                          <option value>Select Hours</option>
                                          <option value="1">Less than 1000 </option>
                                          <option value="2">1001 - 2000</option>
                                          <option value="3">2001 - 3000</option>
                                          <option value="3">3001 - 4000</option>
                                          <option value="3">4001 - 5000</option>
                                          <option value="3">5001 - 6000</option>
                                          <option value="3">6001 - 7000</option>
                                          <option value="3">7001 - 8000</option>
                                          <option value="3">8001 - 9000</option>
                                          <option value="3">9001 - 10000</option>
                                          <option value="3">above 10000</option>
                                          <option value="3">Not Available</option>
                                      </select>
                                    </select>
                                  </div>
                                </div>
                                <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                                  <div class="form-outline pt-3 mt-3">
                                    <label class="form-label text-dark">Purchase Year</label>
                                    <select class="form-select py-2 " aria-label=".form-select-lg example" id="year" name="year">
                                          <option value="">Enter Purchase Year</option>
                                          <option value="1">2023</option>
                                          <option value="2">2022</option>
                                          <option value="3">2021</option>
                                          <option value="3">2020</option>
                                    </select>
                                  </div>
                                </div>
                                <div class="col-12 col-lg-6 col-md-6 col-sm-6 ">
                                  <div class="form-outline pt-3 mt-3">
                                    <label for="name" class="form-label text-dark">Price</label>
                                    <input type="text" class="form-control" placeholder="Enter Price" id="price" name="price">
                                  </div>
                               </div>
                                <div class="col-12 col-sm-6 col-lg-6 col-md-6 ">
                                  <div class="upload__box">
                                      <div class="upload__btn-box">
                                        <label>
                                          <p class="upload__btn">Upload images</p>
                                          <input type="file" multiple="" data-max_length="20" class="upload__inputfile" id="image" name="image">
                                        </label>
                                      </div>
                                      <p>Upload minimum 2 images</p>
                                      <div class="upload__img-wrap"></div>
                                    </div>
                                </div>
                                  <div class="col-12">
                                  <div class="form-outline">
                                  <label class="form-label text-dark">About</label>
                                  <textarea name="about" rows="4" cols="70" minlength="1" maxlength="255"></textarea>
                                  </div>
                               </div>
                                  <h5 class="fw-bold mt-3 ">Personal Information</h5>
                                <div class="col-12 col-sm-6 col-lg-6 col-md-6">
                                  <div class="form-outline mt-3">
                                    <label for="name" class="form-label text-dark">Name</label>
                                    <input type="text" class="form-control" id="name" name="name" placeholder="Enter Your Name">
                                  </div>
                               </div>
                                <div class="col-12 col-sm-6 col-lg-6 col-md-6">
                                  <div class="form-outline mt-3">
                                    <label for="name" class="form-label text-dark">Mobile</label>
                                    <input type="text" class="form-control"  id="Mobile" name="Mobile" placeholder="Enter Your Number">
                                  </div>
                                </div>
                                    <div class="col-12 col-sm-4 col-lg-4 col-md-4">
                                  <div class="form-outline mt-3">
                                    <label class="form-label text-dark">State</label>
                                    <select class="form-select" aria-label=".form-select-lg example" id="state" name="state">
                                        <option value="">Select State</option>
                                        <option value="1">Chhattisgarh</option>
                                        <option value="2">Others</option>
                                      </select>
                                  </div>
                                </div>
                                    <div class="col-12 col-sm-4 col-lg-4 col-md-4">
                                  <div class="form-outline mt-3">
                                    <label class="form-label text-dark">Districte</label>
                                    <select class="form-select" aria-label=".form-select-lg example" id="district" name="district">
                                        <option value="">Select Districte</option>
                                        <option value="1">Jagdalpur</option>
                                          <option value="2">Sarguja</option>
                                      </select>
                                  </div>
                                </div>
                                    <div class="col-12 col-sm-4 col-lg-4 col-md-4">
                                  <div class="form-outline mt-3">
                                    <label class="form-label text-dark">Tehsil</label>
                                    <select class="form-select" aria-label=".form-select-lg example" id="tehsil" name="tehsil">
                                        <option value="">Select Tehsil</option>
                                        <option value="1">Jagdalpur</option>
                                          <option value="2">Sarguja</option>
                                      </select>
                                  </div>
                                </div>
                                <div class="col-12 text-center mt-4"> 
                                  <button type="submit" class="btn btn-success fw-bold px-3 ">Submit</button>
                                </div>
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
    <div class="container ">
      <!-- Filter Card -->
      <div class="filter-card mb-2">
        <div class="card-body">
          <div class="row">
          <div class="col-12 col-sm-12 col-md-3 col-lg-3">
              <div class="form-outline">
                <label class="form-label"> Search by UID </label>
                <input type="text" id="uid" name="search_email" class="form-control" />
              </div>
            </div>
            <div class="col-12 col-sm-12 col-md-3 col-lg-3">
              <div class="form-outline">
                <label class="form-label">Search by Brand</label>
                <input type="email" id="brand" name="search_name" class="form-control" />
              </div>
            </div>
            <div class="col-12 col-sm-12 col-md-3 col-lg-3">
              <div class="form-outline">
                <label class="form-label">Search by Model Number</label>
                <input type="text" id="modal_no" name="search_email" class="form-control" />
              </div>
            </div>
            <div class="col-12 col-sm-12 col-md-3 col-lg-3">
              <div class="">
                <button type="button" class="btn-success px-4 py-2 btn" id="Reset">Reset</button>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Table Card -->
      <div class=" mb-5">
                            <div class="table-responsive">
                                <table  id="example" class="table dataTable no-footer py-1" width="100%">
                                    <thead>
                                        <tr>
                                            <th class="d-none d-md-table-cell text-white">S.No.</th>
                                            <th class="d-none d-md-table-cell text-white">Date</th>
                                            <th class="d-none d-md-table-cell text-white">UID</th>
                                            <th class="d-none d-md-table-cell text-white">Brand</th>
                                            <th class="d-none d-md-table-cell text-white"> Model </th>
                                            <th class="d-none d-md-table-cell text-white"> Year </th>
                                            <th class="d-none d-md-table-cell text-white"> Status </th>
                                            <th class="d-none d-md-table-cell text-white"> Model </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    </tbody>
                                </table>
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
</script>

<script>
    jQuery(document).ready(function () {
  ImgUpload();
   });

function ImgUpload() {
  var imgWrap = "";
  var imgArray = [];

  $('.upload__inputfile').each(function () {
    $(this).on('change', function (e) {
      imgWrap = $(this).closest('.upload__box').find('.upload__img-wrap');
      var maxLength = $(this).attr('data-max_length');

      var files = e.target.files;
      var filesArr = Array.prototype.slice.call(files);
      var iterator = 0;
      filesArr.forEach(function (f, index) {

        if (!f.type.match('image.*')) {
          return;
        }

        if (imgArray.length > maxLength) {
          return false
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
              var html = "<div class='upload__img-box'><div style='background-image: url(" + e.target.result + ")' data-number='" + $(".upload__img-close").length + "' data-file='" + f.name + "' class='img-bg'><div class='upload__img-close'></div></div></div>";
              imgWrap.append(html);
              iterator++;
            }
            reader.readAsDataURL(f);
          }
        }
      });
    });
  });

  $('body').on('click', ".upload__img-close", function (e) {
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
</script>
<script>
    $(document).ready(function () {
      jQuery.validator.addMethod("customPhoneNumber", function(value, element) {
    return /^[6-9]\d{9}$/.test(value); 
  }, "Phone number must start with 6 or above");

      $('#old_form').validate({
        rules: {
          brand: {
            required: true,
          },
          model: {
            required: true,
          },
          crop_type: {
            required: true,
          },
          power: {
            required: true,
          },
          hours: {
            required: true,
          },
          name: {
            required: true,
          },
          Mobile: {
            required:true,
          minlength: 10,
          maxlength:10,
           digits: true,
          customPhoneNumber: true
          },
          state: {
            required: true,
          },
          district: {
            required: true,
          },
          year:{
            required: true,
          },
          price:{
            required: true,
          },
          about:{
           required: true,
           minlength: 1, 
           maxlength: 1000 
          },
          image:{
            required: true,
          }
        },
        messages: {
          brand: {
            required:"This field is required",
          },
          model: {
            required: "This field is required",
          },
          crop_type: {
            required: "This field is required",
          },
          power: {
            required: "This field is required",
          },
          hours: {
            required: "This field is required",
          },
          name: {
            required: "This field is required",
          },
          Mobile: {
            required:"Please Enter Your Contact Number",
            minlength: "Phone Number must be of 10 Digit long",
            maxlength:"Enter only 10 digits",
            digits: "Please enter only digits"
          },
          state: {
            required: "This field is required",
          },
          district: {
            required: "This field is required",
          }, 
          year:{
            required: "This field is required",
          },
          price:{
            required: "This field is required",
          },
          about:{
            required: "This field is required",
          },
          image:{
            required: "This field is required",
          }
        },
        submitHandler: function (form) {
          form.submit();
        }
      });
    });
  </script>
                       