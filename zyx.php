
<!DOCTYPE html>
<html lang="en">
<head>
<?php
include 'includes/headertag.php';
   include 'includes/footertag.php';
 

   ?> 
     <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
   <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
   <head>
   <style>
                    p {
        margin: 0;
        }

        .upload__box {
        padding: 40px;
        width: 50;
        }

        .upload__inputfile {
        width: .1px;
        height: .1px;
        opacity: 0;
        overflow: hidden;
        position: absolute;
        z-index: -1;
        }

        .upload__btn {
        display: inline-block;
        font-weight: 600;
        color: #fff;
        text-align: center;
        min-width: 150px;
        padding: 5px;
        transition: all .3s ease;
        cursor: pointer;
        border: 2px solid;
        background-color:  #198754;
        border-color:  #198754;
        border-radius: 10px;
        line-height: 26px;
        font-size: 14px;
        }

        .upload__btn:hover {
        background-color: unset;
        color:  #198754;
        transition: all .3s ease;
        }

        .upload__btn-box {
        margin-bottom: 10px;
        margin-top:-25px;
        width: 150px;
        }

        .upload__img-wrap {
        display: flex;
        flex-wrap:nowrap;
        margin: 0 -50px;
        }

        .upload__img-box {
        flex: 0 0 calc(33.333% - 20px); 
        margin: 0 10px 20px; 
        position: relative;
        }

        .upload__img-close {
        width: 24px;
        height: 24px;
        border-radius: 50%;
        background-color: rgba(0, 0, 0, 0.5);
        position: absolute;
        top: 10px;
        right: 10px;
        text-align: center;
        line-height: 24px;
        z-index: 1;
        cursor: pointer;
        }

        .upload__img-close:after {
        content: '\2716';
        font-size: 14px;
        color: white;
        }

        .img-bg {
        background-repeat: no-repeat;
        background-position: center;
        background-size: cover;
        position: relative;
        width: 160px;
        height: 125px;
        }

</style>
   </head>
   <body>
    <!-- <section>
        <div class="cantainer">
                              <form id="form_specification">
                                <div class="row justify-content-center py-3">
                                  <h5 class="fw-bold mb-3">Specification</h5>
                                    <div class="col-12 col-sm-6 col-lg-6 col-md-6 my-2">
                                      <div class="form-outline">
                                        <label class="form-label">Brand</label>
                                        <select class="form-select py-2" name="brand" id="brand" aria-label="Default select example">
                                            <option selected disabled></option>
                                            <option value="1">Mahindra</option>
                                            <option value="2">Swaraj</option>
                                            <option value="3">John Deere</option>
                                        </select>
                                      </div>
                                    </div>
                                    <div class="col-12 col-sm-6 col-lg-6 col-md-6 my-2">
                                      <div class="form-outline">
                                        <label class="form-label">Model</label>
                                        <input type="text" name="model" id="model" class="form-control">
                                      </div>
                                    </div>
                                    <div class="col-12 col-sm-4 col-lg-4 col-md-4">
                                      <div class="form-outline">
                                        <label class="form-label">Engine Rated RPM</label>
                                        <input type="text" name="rpm" id="rpm" class="form-control">
                                      </div>
                                    </div>
                                    <div class="col-12 col-sm-4 col-lg-4 col-md-4">
                                      <div class="form-outline">
                                        <label class="form-label">HP Power</label>
                                        <input type="text" name="hp_power" id="hp_power" class="form-control">
                                      </div>
                                    </div>
                                    <div class="col-12 col-sm-4 col-lg-4 col-md-4 my-1">
                                      <div class="form-outline">
                                        <label class="form-label">Air Filter</label>
                                        <select class="form-select py-2" id="air_filter" name="air_filter" aria-label="Default select example">
                                            <option selected disabled></option>
                                            <option value="1">Mahindra</option>
                                            <option value="2">Swaraj</option>
                                            <option value="3">John Deere</option>
                                        </select>
                                      </div>
                                    </div>
                                    <div class="col-12 col-sm-6 col-lg-6 col-md-6 my-1">
                                      <div class="form-outline">
                                        <label class="form-label">Engine</label>
                                        <input type="text" name="engine" id="engine" class="form-control">
                                      </div>
                                    </div>
                                    <div class="col-12 col-sm-6 col-lg-6 col-md-6 my-1">
                                      <div class="form-outline">
                                        <label class="form-label">Cylinder</label>
                                        <select class="form-select py-2" id="cylinder" name="cylinder" aria-label="Default select example">
                                            <option selected disabled></option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3"> 3</option>
                                        </select>
                                      </div>
                                    </div>
                                    <h5 class="fw-bold">Cutter Bar & Cutting Mechanism</h5>
                                    <div class="col-12 col-sm-6 col-lg-6 col-md-6  my-2">
                                      <div class="form-outline">
                                        <label class="form-label">Cutter Bar Width (ft.)</label>
                                        <input type="text" name="cutting_bar" id="cutting_bar" class="form-control">
                                      </div>
                                    </div>
                                    <div class="col-12 col-sm-6 col-lg-6 col-md-6  my-2">
                                      <div class="form-outline">
                                        <label class="form-label">Maximum Cutting Height (ft.)</label>
                                        <input type="text" name="cuttingmax_height" id="cuttingmax_height" class="form-control">
                                      </div>
                                    </div>
                                    <div class="col-12 col-sm-6 col-lg-6 col-md-6 mt-2 ">
                                      <div class="form-outline">
                                        <label class="form-label">Minimum Cutting Height (ft.)</label>
                                        <input type="text" name="cuttingmin_height" id="cuttingmin_height" class="form-control">
                                      </div>
                                    </div>
                                    <div class="col-12 col-sm-6 col-lg-6 col-md-6 mt-2">
                                      <div class="form-outline">
                                        <label class="form-label">Height Adjustment (ft.)</label>
                                        <input type="text" name="height_adjust" id="height_adjust" class="form-control">
                                      </div>
                                    </div>
                                    <h5 class="fw-bold">Reel</h5>
                                    <div class="col-12 col-lg-4 col-sm-4 col-md-4 my-2">
                                      <div class="form-outline">
                                        <label class="form-label">Type</label>
                                        <input type="text" name="type" id="type" class="form-control">
                                      </div>
                                    </div>
                                    <div class="col-12 col-lg-4 col-sm-4 col-md-4 my-2">
                                      <div class="form-outline">
                                        <label class="form-label">Reel Diameter(mm)</label>
                                        <input type="text" name="reel_dia" id="reel_dia" class="form-control">
                                      </div>
                                    </div>
                                    <div class="col-12 col-lg-4 col-sm-4 col-md-4 my-2">
                                      <div class="form-outline">
                                        <label class="form-label">Speed Adjustment</label>
                                        <input type="text" name="speed_adj" id="speed_adj" class="form-control">
                                      </div>
                                    </div>
                                    <div class="col-12 col-lg-4 col-sm-4 col-md-4 my-2">
                                      <div class="form-outline">
                                        <label class="form-label">Minimum Revolution</label>
                                        <input type="text" name="min_revol" id="min_revol" class="form-control">
                                      </div>
                                    </div>
                                    <div class="col-12 col-lg-4 col-sm-4 col-md-4 my-2">
                                      <div class="form-outline">
                                        <label class="form-label">Maximum Revolution</label>
                                        <input type="text" name="max_revol" id="max_revol" class="form-control">
                                      </div>
                                    </div>
                                    <div class="col-12 col-lg-4 col-sm-4 col-md-4 my-2">
                                      <div class="form-outline">
                                        <label class="form-label">Height Adjustment(mm)</label>
                                        <input type="text" name="height_adj" id="height_adj" class="form-control">
                                      </div>
                                    </div>

                                    <h5 class="fw-bold">Cooling System</h5>
                                    <div class="col-sm-6 col-lg-6 col-md-6 mt-2">
                                      <div class="form-outline">
                                        <label class="form-label">Cooling System</label>
                                        <select class="form-select py-2" name="cool_system" id="cool_system" aria-label="Default select example">
                                            <option selected disabled></option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3"> 3</option>
                                        </select>
                                      </div>
                                    </div>
                                    <div class="col-sm-6 col-lg-6 col-md-6 mt-2">
                                      <div class="form-outline">
                                        <label class="form-label">Coolent Capacity</label>
                                        <input type="text" name="cool_capacity" id="cool_capacity" class="form-control">
                                      </div>
                                    </div>
                                    <h5 class="fw-bold">Threshing & Cleaning System</h5>
                                    <div class="col-12 col-sm-6 col-lg-6 col-md-6 my-2">
                                      <div class="form-outline">
                                        <label class="form-label">Thresing Drump Width(mm)</label>
                                        <input type="text" name="drump_width" id="drump_width" class="form-control">
                                      </div>
                                    </div>
                                    <div class="col-12 col-sm-6 col-lg-6 col-md-6 my-2 ">
                                      <div class="form-outline">
                                        <label class="form-label">Thresing Drump Length(mm)</label>
                                        <input type="text" name="drump_length" id="drump_length" class="form-control">
                                      </div>
                                    </div>
                                    <div class="col-12 col-sm-6 col-lg-6 col-md-6 my-2">
                                      <div class="form-outline">
                                        <label class="form-label">Thresing Drum Speed Adjustment</label>
                                        <input type="text" name="drump_adjust" id="drump_adjust" class="form-control">
                                      </div>
                                    </div>
                                    <div class="col-12 col-sm-6 col-lg-6 col-md-6 my-2">
                                      <div class="form-outline">
                                        <label class="form-label">Clearance Concave</label>
                                        <input type="text" name="clear_concave" id="clear_concave" class="form-control">
                                      </div>
                                    </div>
                                    <h5 class="fw-bold">Grain Handling</h5>
                                    <div class="col-12  col-sm-6 col-lg-6 col-md-6 my-2">
                                      <div class="form-outline">
                                        <label class="form-label">Grain Trank Capacity (m3)</label>
                                        <input type="text" name="tank_capa" id="tank_capa" class="form-control">
                                      </div>
                                    </div>
                                    <div class="col-12  col-sm-6 col-lg-6 col-md-6 my-2">
                                      <div class="form-outline">
                                        <label class="form-label">Clutch Type</label>
                                        <select class="form-select py-2" name="clutch_type" id="clutch_type" aria-label="Default select example">
                                            <option selected disabled></option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3"> 3</option>
                                        </select>
                                      </div>
                                    </div>
                                    <h5 class="fw-bold">Tyre Specification</h5>
                                    <div class="col-12  col-sm-6 col-lg-6 col-md-6 my-2">
                                      <div class="form-outline">
                                        <label class="form-label">Tyre Size(Front)</label>
                                        <input type="text" name="tyre_sizefront" id="tyre_sizefront" class="form-control">
                                      </div>
                                    </div>
                                    <div class="col-12  col-sm-6 col-lg-6 col-md-6 my-2">
                                      <div class="form-outline">
                                        <label class="form-label">Tyre Size(Rear)</label>
                                        <input type="text" name="tyre_sizerear" id="tyre_sizerear" class="form-control">
                                      </div>
                                    </div>
                                    <h5 class="fw-bold">Fuel & Capacity</h5>
                                    <div class="col-12 col-sm-6 col-lg-6 col-md-6 my-2">
                                      <div class="form-outline">
                                        <label class="form-label">Fuel Tank Capacity(L)</label>
                                        <input type="text" name="fuel_capacity" id="fuel_capacity" class="form-control">
                                      </div>
                                    </div>
                                    <div class="col-12  col-sm-6 col-lg-6 col-md-6 my-2">
                                      <div class="form-outline">
                                        <label class="form-label">Total weight Without Grain(kg)</label>
                                        <input type="text" name="weight_drain" id="weight_drain" class="form-control">
                                      </div>
                                    </div>
                                    <h5 class="fw-bold">Dimensions & Clearance</h5>
                                    <div class="col-12 col-sm-6 col-lg-6 col-md-6 my-2">
                                      <div class="form-outline">
                                        <label class="form-label">Length(mm)</label>
                                        <input type="text" name="dia_length" id="dia_length" class="form-control">
                                      </div>
                                    </div>
                                    <div class="col-12  col-sm-6 col-lg-6 col-md-6 my-2">
                                      <div class="form-outline">
                                        <label class="form-label">Height(mm)</label>
                                        <input type="text" name="dia_height" id="dia_height" class="form-control">
                                      </div>
                                    </div>
                                    <div class="col-12  col-sm-6 col-lg-6 col-md-6 my-2">
                                      <div class="form-outline">
                                        <label class="form-label">Width(mm)</label>
                                        <input type="text" name="dia_width" id="dia_width" class="form-control">
                                      </div>
                                    </div>
                                    <div class="col-12  col-sm-6 col-lg-6 col-md-6 my-2">
                                      <div class="form-outline">
                                        <label class="form-label">Ground Clearance</label>
                                        <input type="text" name="ground_clerance" id="ground_clerance" class="form-control">
                                      </div>
                                    </div>
                                    <h5 class="fw-bold">Crops & Additional Features</h5>
                                    <div class="col-12 col-lg-6 col-md-6 col-sm-6 mt-2">
                                      <div class="form-outline">
                                        <label class="form-label">Crops</label>
                                        <select class="form-select py-2" name="crops" id="crops aria-label="Default select example">
                                            <option selected disabled></option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                        </select>
                                      </div>
                                    </div>
                                    <div class="col-12 col-lg-6 col-md-6 col-sm-6">
                                      <div class="upload__box">
                                        <div class="upload__btn-box text-center">
                                          <label >
                                            <p class="upload__btn ">Upload images</p>
                                            <input type="file" multiple="" data-max_length="20" class="upload__inputfile" id="_image" name="_image">
                                          </label>
                                        </div>
                                        <div id="selectedImagesContainer" class="upload__img-wrap"></div>
                                      </div>
                                    </div>
                                </div>
                            </form>
  
                            <button type="submit" id="subbtn_" class="btn btn-success fw-bold px-3" id="add_harvester">Submit</button>
                              
                 </div>
</section> -->

<section style="padding: 0 15px;">
    <div class="">
      <div class="container">
        <div class="card-body d-flex align-items-center justify-content-between page_title">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb my-0 ms-2">
              
              <li class="breadcrumb-item">
                <span>Brand Listing</span>
              </li>
            </ol>
          </nav>
          <button type="button" id="add_trac" class="btn add_btn btn-success float-right" data-bs-toggle="modal"  data-bs-target="#staticBackdrop">
            <i class="fa fa-plus" aria-hidden="true"></i> Add New Brand
          </button>

          <!-- Modal -->
          <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered">
              <div class="modal-content modal_box">
                <div class="modal-header modal_head">
                  <h5 class="modal-title text-white fw-bold" id="staticBackdropLabel">Add New Brand</h5>
                  <button type="button" class="btn-close btn-success" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body bg-light">
                        <div class="row justify-content-center">
                            <div class="col-lg-10">
                              <h4 class="text-center">Fill your Brand Details</h4>
                              <form action="" method="POST"  class="" id="brand_listing_form">
                                  <div class="">
                                    <div class="">
                                      <div class="row">
                                      <div class="col-12 col-lg-6 col-sm-5 col-md-6 mt-4">
                                          <div class="form-outline ">
                                            <label for="name" class="form-label text-dark">Brand Name</label>
                                            <input type="text" class="form-control" placeholder="Enter brand" id="brand_name" name="brand_name">
                                          </div>
                                        </div>
                                        <div class="col-12 col-lg-6 col-md-6 col-sm-6">
                                          <div class="upload__box mt-2">
                                            <div class="upload__btn-box text-center">
                                              <label >
                                                <p class="upload__btn ">Upload images</p>
                                                <input type="file" multiple="" data-max_length="20" class="upload__inputfile" id="_image" name="_image">
                                              </label>
                                            </div>
                                            <div id="selectedImagesContainer" class="upload__img-wrap"></div>
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
                  <button class="btn px-4 bg-success text-white" id="save_btn">Submit</button>
                 
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
            <div class="col-12 col-sm-12 col-md-4 col-lg-4">
              <div class="form-outline">
                <select class="form-select" aria-label="Default select example">
                  <option selected> Brand Name</option>
                  <option value="1">Mahindra</option>
                  <option value="2">Swaraj</option>
                  <option value="3">John Deere</option>
                </select>
              </div>
            </div>
            <div class="col-12 col-sm-12 col-md-4 col-lg-4 text-center">
                <button type="button" class="btn-success px-3" id="Search">Search</button>
                <button type="button" class="btn-success px-3  mx-2 " id="Reset">Reset</button>
            </div>
          </div>
        </div>
      </div>
      <!-- Table Card -->
      <div class=" mb-5">
            <div class="table-responsive shadow bg-white">
              <table id="example" class="table bg-white table-striped table-hover py-1" width="100%">
                <thead class="">
                  <tr>
                        <th class="d-none d-md-table-cell text-white py-2">S.No.</th>
                        <th class="d-none d-md-table-cell text-white py-2">Brand Name</th>
                        <th class="d-none d-md-table-cell text-white py-2">Brand Image</th>
                        <th class="d-none d-md-table-cell text-white py-2">Action</th>
                  </tr>
                </thead>
                <tbody id="data-table">
                </tbody>
              </table>
            </div>
        </div>
    </div>
</section>
<?php
   include 'includes/footertag.php';
   ?>

  
<script>
        $(document).ready(function(){
          
  
          
    $("#brand_listing_form").validate({
    
    rules: {
        brand_name: {
        required: true,
      },
      
      _image: {
        required: true
      } 
    },

    messages:{
        brand_name: {
        required: "This field is required",
        },
        _image: {
        required:"This field is required",
        }
    },
    
    submitHandler: function (form) {
      alert("Form submitted successfully!");
    },
  });

 
  $("#save_btn").on("click", function () {
 
    $("#brand_listing_form").valid();
  });
   

  });
  
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
    </body>
<!-- <script>
  $(document).ready(function () {

    $("#form_specification").validate({
     
      rules: {
        brand: {
          required: true,
        },
        model: {
          required: true,
        },
        rpm: {
          required: true,
        },
        hp_power: {
          required: true,
        },
        air_filter: {
          required: true,
        },
        engine:{
          required: true,
        },
        cylinder:{
          required: true,
        },
        cutting_bar:{
          required: true,
          digits: true,
        },
        cuttingmax_height:{
          required: true,
          digits: true,
        },
        cuttingmin_height:{
          required: true,
          digits: true,
        },
        height_adjust:{
          required: true,
          digits: true,
        },
        type:{
          required: true,
        },
        reel_dia:{
          required: true,
          digits: true,
        },
        speed_adj:{
          required: true,
        },
        min_revol:{
          required: true,
        },
        max_revol:{
          required: true,
        },
        height_adj:{
          required: true,
          digits: true,
        },
        cool_system:{
          required: true,
        },
        cool_capacity:{
          required: true,
        },
        drump_width:{
          required: true,
          digits: true,
        },
        drump_length:{
          required: true,
          digits: true,
        },
        drump_adjust:{
          required: true,
        },
        clear_concave:{
          required: true,
        },
        tank_capa:{
          required: true,
        },
        clutch_type:{
          required: true,
        },
        tyre_sizefront:{
          required: true,
        },
        tyre_sizerear:{
          required: true,
        },
        fuel_capacity:{
          required: true,
        },
        weight_drain:{
          required: true,
          digits: true,
        },
        dia_length:{
          required: true,
          digits: true,
        },
        dia_height: {
          required: true,
          digits: true,
        },
        dia_width: {
          required: true,
          digits: true,
        },
        ground_clerance: {
          required: true,
        },
        crops: {
          required: true,
        },
        _image: {
          required: true,
        }
      },
     
      messages: {
        brand: {
          required: "This field is required",
        },
        model: {
          required: "This field is required",
        },
        rpm: {
          required: "This field is required",
        },
        hp_power: {
          required: "This field is required",
        },
        air_filter: {
          required:"This field is required",
        },
        engine:{
          required:"This field is required",
        },
        cylinder:{
          required:"This field is required",
        },
        cutting_bar:{
          required:"This field is required",
          digits: "Please enter only digits"
        },
        cuttingmax_height:{
          required:"This field is required",
          digits: "Please enter only digits"
        },
        cuttingmin_height:{
          required:"This field is required",
          digits: "Please enter only digits"
        },
        type:{
          required:"This field is required",
        },
        reel_dia:{
          required:"This field is required",
          digits: "Please enter only digits"
        },
        speed_adj:{
          required:"This field is required",
        },
        min_revol:{
          required:"This field is required",
        },
        max_revol:{
          required:"This field is required",
        },
        height_adj:{
          required:"This field is required",
          digits: "Please enter only digits"
        },
        cool_system:{
          required:"This field is required",
        },
        cool_capacity:{
          required:"This field is required",
        },
        drump_width:{
          required:"This field is required",
          digits: "Please enter only digits"
        },
        drump_length:{
          required:"This field is required",
          digits: "Please enter only digits"
        },
        drump_adjust:{
          required:"This field is required",
          digits: "Please enter only digits"
        },
        clear_concave:{
          required:"This field is required",
        },
        tank_capa:{
            required:"This field is required",
        },
        clutch_type:{
            required:"This field is required",
        },
        tank_capa:{
            required:"This field is required",
        },
        tyre_sizefront:{
            required:"This field is required",
        },
        tyre_sizerear:{
            required:"This field is required",
        },
        fuel_capacity:{
            required:"This field is required",
        },
        weight_drain:{
            required:"This field is required",
            digits: "Please enter only digits"
        },
        dia_length:{
            required:"This field is required",
            digits: "Please enter only digits"
        },
        dia_height: {
          required: "This field is required",
          digits: "Please enter only digits"
        },
        dia_width: {
          required: "This field is required",
          digits: "Please enter only digits"
        },
        ground_clerance: {
          required: "This field is required",
        },
        crops: {
          required: "This field is required",
        },
        _image: {
          required: "This field is required",
        }
      },
      
      submitHandler: function (form) {
        alert("Form submitted successfully!");
      },
    });

   
    $("#subbtn_").on("click", function () {
   
      $("#form_specification").valid();
      if ($("#form_specification").valid()) {
        
        alert("Form is valid. Ready to submit!");
      }
    });
   
  });
</script> -->