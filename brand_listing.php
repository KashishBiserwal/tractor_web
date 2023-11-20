<?php
   include 'includes/headertagadmin.php';
  
   include 'includes/headertag.php';
   ?> 
    <style>
    .error-message {
    color: red;
   
}
</style>
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
                <span>Brand Listing</span>
              </li>
            </ol>
          </nav>
          

          <button type="button" id="add_trac" class="btn add_btn btn-success float-right" data-bs-toggle="modal"  data-bs-target="#staticBackdrop">
            <i class="fa fa-plus" aria-hidden="true"></i>Add New Brand
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
                              <form action="" method="POST"  class="" id="form">
                                  <div class="">
                                    <div class="">
                                      <div class="row">
                                        
                                        <div class="col- col-sm-6 col-lg-6 col-md-6">
                                          <label class="text-dark"> Brand Name<span class="text-danger">*</span></label>
                                          <input type="text" class="form-control py-2" id="brand" placeholder="Enter brand">
                                          <small></small>
                                        </div>
                                        <div class="col-12 col-sm-4 col-lg-4 col-md-4 ps-3">
                                          <div class="background__box mt-4 pt-1">
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
                        
                                        <div class="col-12 col-sm-2 col-lg-2 col-md-2 ">
                                            <div class="float-left mt-4 pt-2">
                                                <button class="btn px-4 bg-success text-white" id="save">Submit</button>
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
                            <div class="table-responsive">
                                <table id="example_brand" class="table dataTable no-footer py-1" width="100%">
                                    <thead>
                                        <tr>
                                          <th class="d-none d-md-table-cell text-white">S.No.</th>
                                          <th class="d-none d-md-table-cell text-white">Brand Name</th>
                                          <th class="d-none d-md-table-cell text-white">Model</th>
                                          <th class="d-none d-md-table-cell text-white">Category</th>
                                          <th class="d-none d-md-table-cell text-white">Action</th>
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
   </script>