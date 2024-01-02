<?php
include 'includes/headertag.php';
   include 'includes/footertag.php';
   
   ?> 
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
  <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
<!-- <style>
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
</style> -->
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

<body>
<!-- <form action="" method="POST"  class="" id="form_add">
                                  <div class="filter-card ">
                                    <div class="card-body">
                                      <div class="row">
                                        
                                        <div class="col- col-sm-6 col-lg-6 col-md-6">
                                          <label class="text-dark"> First Name<span class="text-danger">*</span></label>
                                          <input type="text" class="form-control py-2" for="first_name"  id="first_name" name="first_name" placeholder="Enter First Name">
                                          <small></small>
                                        </div>
                                       
                                        <div class="col- col-sm-6 col-lg-6 col-md-6">
                                          <label class="text-dark" for="last_name"> Last Name<span class="text-danger">*</span></label>
                                          <input type="text" class="form-control py-2"  name="last_name"   id="last_name" placeholder="Enter Last Name">
                                          <small></small>
                                        </div>
                                        <div class="col- col-sm-6 col-lg-6 col-md-6">
                                          <label class="text-dark">Contact Number<span class="text-danger">*</span></label>
                                          <input type="text" class="form-control py-2"  name="mobile" for="mobile" id="mobile" placeholder="Enter contact number">
                                          <small></small>
                                        </div>
                                        <div class="col- col-sm-6 col-lg-6 col-md-6">
                                          <label class="text-dark">Email ID<span class="text-danger">*</span></label>
                                          <input type="text" class="form-control py-2" id="email" name="email" for="email"  placeholder="Enter email id">
                                          <small></small>
                                        </div>
                                        
                                        <div class="col- col-sm-6 col-lg-6 col-md-6">
                                          <label class="text-dark">Password<span class="text-danger">*</span></label>
                                          <input type="text" class="form-control py-2" id="password"name="password" for="password"   placeholder="Enter Password">
                                          <small></small>
                                        </div>
                                        <div class="col- col-sm-6 col-lg-6 col-md-6">
                                          <label class="text-dark">Confirm Password<span class="text-danger">*</span></label>
                                          <input type="text" class="form-control py-2" id="password_confirmation" name="password_confirmation" for="password_confirmation" placeholder="Enter Password">
                                          <small></small>
                                          <div class="form-text confirm-message"></div>
                                        </div>
                                        <div class="col- col-sm-6 col-lg-6 col-md-6">
                                    
                                          <label class="text-dark">User Type<span class="text-danger">*</span></label>
                                            <select class="form-select py-2" aria-label="Default select example" name="user_type" id="user_type">
                                                <option value>Select User</option>
                                                <option value="1" >Admin</option>
                                                <option value="2">User</option>
                                            </select>
                                         
                                        </div>
                                        <div class="col-12 col-sm-6 col-md-6 col-lg-6">
                                        
                                          <label class="text-dark"> State<span class="text-danger">*</span></label>
                                            <select class="form-select py-2" aria-label="Default select example"  name="status" id="status">
                                                <option value>Select Status</option>
                                                <option value="1">Active</option>
                                                <option value="2">In Active</option>
                                            </select>
                                        
                                        </div>
                                        <div class="col-12 mt-4 ">
                                            <div class="text-center">
                                                <button class="btn px-5 bg-success text-white" id="save">Submit</button>
                                            </div>
                                        </div>
                                      </div>
                                  </div>
</form> -->
<!-- <div class="container">

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
                                  <div class="upload__box pt-3 mt-3">
                                      <div class="upload__btn-box">
                                        <label class="upload__btn">
                                          <p>Upload images</p>
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
</div> -->
<section style="padding: 0 15px;">
   <div class="">
      <div class="container">
        <div class="card-body d-flex align-items-center justify-content-between page_title">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb my-0 ms-2">
              <li class="breadcrumb-item">
                <span>News & Updates</span>
              </li>
            </ol>
          </nav>
           <button type="button" id="add_trac" class="btn add_btn btn-success float-right" data-bs-toggle="modal"  data-bs-target="#staticBackdrop">
              <i class="fa fa-plus" aria-hidden="true"></i>News & Update
            </button>
          <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered">
              <div class="modal-content modal_box">
                <div class="modal-header modal_head">
                  <h5 class="modal-title text-white fw-bold" id="staticBackdropLabel">Add New & Updates</h5>
                  <button type="button" class="btn-close btn-success" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body bg-light">
                        <div class="row justify-content-center">
                            <div class="col-lg-10">
                              <h4 class="text-center">Fill your Details</h4>
                            <form id="form_news_updates">
                                <div class="row justify-content-center pt-4">
                                    <div class="col-12 col-lg-6 col-md-6 col-sm-6 ">
                                      <div class="form-outline mt-3">
                                        <label for="name" class="form-label text-dark">News Category</label>
                                        <input type="text" class="form-control" placeholder="" id="brand" name="brand">
                                      </div>
                                    </div>
                                    <div class="col-12 col-lg-6 col-md-6 col-sm-6 ">
                                      <div class="form-outline mt-3">
                                        <label for="name" class="form-label text-dark">News Headline</label>
                                        <input type="text" class="form-control" placeholder="" id="headline" name="headline">
                                      </div>
                                    </div>
                                    <div class="col-12 my-4">
                                  <div class="form-outline">
                                  <label class="form-label text-dark">Body/ News Content</label>
                                  <textarea class="w-100" name="contant" id="contant" rows="4" cols="70" minlength="1" maxlength="255"></textarea>
                                  </div>
                               </div>
                                    <div class="col-12 text-center w-50">
                                        <div class="upload__box">
                                          <div class="upload__btn-box">
                                            <label >
                                              <p class="upload__btn ">Upload images</p>
                                              <input type="file" multiple="" data-max_length="20" class="upload__inputfile" id="image_" name="image_">
                                            </label>
                                            <p></p>
                                          </div>
                                          <div class="upload__img-wrap"></div>
                                        </div>
                                    </div>
                                   
                                </div>
                            </form>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary px-3" data-bs-dismiss="modal">Close</button>
                      <button type="submit" id="submitBtn" class="btn btn-success fw-bold px-3">Submit</button>
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
                <label class="form-label">Category</label>
                <input type="email" id="search_name" name="search_name" class="form-control" />
              </div>
            </div>
            <div class="col-12 col-sm-12 col-md-4 col-lg-4">
              <div class="form-outline">
                <label class="form-label">Headline</label>
                <input type="text" id="search_email" name="search_email" class="form-control" />
              </div>
            </div>
            <div class="col-12 col-sm-12 col-md-4 col-lg-4">
              <div class="text-center float-end">
              <button type="button" class="btn-success btn btn_search" id="Search">Search</button>
                <button type="button" class="btn-success btn mx-2 btn_search" id="Reset">Reset</button>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Table Card -->
        <div class=" mb-5">
          <div class="table-responsive">
              <table id="example" class="table dataTable no-footer py-1" width="100%">
                <thead>
                  <tr>
                    <th class="d-none d-md-table-cell text-dark">S.No.</th>
                    <th class="d-none d-md-table-cell text-dark">Date</th>
                    <th class="d-none d-md-table-cell text-dark">Category</th>
                    <th class="d-none d-md-table-cell text-dark">Headline </th>
                    <th class="d-none d-md-table-cell text-dark">Action</th>
                  </tr>
                </thead>
                <tbody>
                </tbody>
              </table>
           </div>
          </div>
        </div>
</section>
</body>



 
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>


<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>


 <script>
  $(document).ready(function () {


    $("#form_news_updates").validate({
    
      rules: {
        brand:{
          required: true,
        },
        headline:{
          required: true,
        },
        contant: {
          required: true,
        },
        image_:{
          required:true,
          minlength: 2,
          maxlength: 5,
       
        }
      },
  
      messages: {
       
        brand:{
          required:"This field is required",
        },
        headline:{
          required: "This field is required",
        },
        contant: {
          required: "This field is required",
        },
        image_:{
          required:"This field is required",
          minlength: 2,
          maxlength: 5,
       
        }
       
      },
      
      submitHandler: function (form) {
        alert("Form submitted successfully!");
      },
    });

   
    $("#submitBtn").on("click", function () {
   
      $("#form_news_updates").valid();
      
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
<!-- <script>
  $(document).ready(function () {
 
    $.validator.addMethod("validPrice", function(value, element) {
      
      const cleanedValue = value.replace(/,/g, '');

      return /^\d+$/.test(cleanedValue);
    }, "Please enter a valid price (digits and commas only)");

    $("#engine_oil_form").validate({
      rules: {
        brand: {
          required: true,
        },
        model: {
          required: true,
        },
      
        grade:{
          required:true,
        },
        qualtity:{
          required:true,
          digits: true,

        },
        price: {
          required: true,
          validPrice: true, 
        },
        compatible_tractor:{
          required: true,
        },
        textarea_: {
          required: true,
        },
        _image:{
          required:true,
          minlength: 2,
          maxlength: 5,
        }
       
      },
      messages: {
        brand: {
          required: "This field is required",
        },
        model: {
          required: "This field is required",
        },
      
        grade:{
          required:"This field is required",
        },
        
        qualtity:{
          required:"This field is required",
          digits: "Please enter only digits"

        },
        price: {
          required: "This field is required",
          validPrice: "Please enter a valid price",
        },
        compatible_tractor:{
          required: "This field is required",
        },
        textarea_: {
          required: "This field is required",
        },
        _image:{
          required:"This field is required",
          minlength: "Please upload at least 2 images",
          maxlength: "Maximum 5 images allowed",
        }
      },
      submitHandler: function (form) {
        alert("Form submitted successfully!");
      },
    });

    $("#submit_btn").on("click", function () {
      $("#engine_oil_form").valid();
      if ($("#engine_oil_form").valid()) {
        alert("Form is valid. Ready to submit!");
      }
    });
  });
</script> -->

  </html>