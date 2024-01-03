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
    <section style="padding: 0 15px 0 60px;">
   <div class="">
      <div class="">
      <div class="card-body d-flex align-items-center justify-content-between page_title">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb mb-0">
              <li class="breadcrumb-item">
                <span>Farm Equipment Listings</span>
              </li>
            </ol>
          </nav>
          <button type="button" id="add_trac" class="btn add_btn btn-success float-right btn_all" data-bs-toggle="modal"  data-bs-target="#staticBackdrop">
            <i class="fa fa-plus" aria-hidden="true"></i>Add Farm Equipments
          </button>

          <!-- Modal -->
          <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered">
              <div class="modal-content modal_box">
                <div class="modal-header modal_head">
                  <h5 class="modal-title text-white fw-bold" id="staticBackdropLabel">Add Farm Equipments</h5>
                  <button type="button" class="btn-close btn-success" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body bg-white">
                        <div class="row justify-content-center">
                            <div class="col-lg-10">
                              <h4 class="text-center" style="font-weight:600;">Fill your Details</h4>
                            <form>
                                <div class="row justify-content-center">
                                    <div class="col-12 col-lg-6 col-sm-5 col-md-6 mt-3">
                                      <div class="form-outline">
                                        <label for="name" class="form-label"> Brand</label>
                                        <input type="text" class="form-control" placeholder=" " id="brand">
                                       
                                      </div>
                                    </div>
                                    <div class="col-12 col-lg-6 col-sm-5 col-md-6 mt-3">
                                      <div class="form-outline">
                                        
                                        <label for="name" class="form-label">Name</label>
                                        <input type="text" class="form-control" placeholder=" " id="name">
                                      </div>
                                    </div>
                                    <div class="col-12 col-lg-6 col-sm-5 col-md-6 mt-3">
                                      <div class="form-outline">
                                      <label for="name" class="form-label">Implement Type</label>
                                        <input type="text" class="form-control" placeholder=" " id="type">
                                        
                                      </div>
                                    </div>
                                    <div class="col-12 col-lg-6 col-sm-5 col-md-6 mt-3">
                                      <div class="form-outline">
                                      <label for="name" class="form-label">Implement Power</label>
                                        <input type="text" class="form-control" placeholder=" " id="power">
                                        
                                      </div>
                                    </div>
                                    <div class="col-12 col-lg-7 col-sm-7 col-md-7 mt-3">
                                      <div class="form-outline">
                                      <label for="name" class="form-label">Categories</label>
                                        <input type="text" class="form-control" placeholder=" " id="category">
                                        
                                      </div>
                                    </div>
                                    <!-- <div class="col-12 col-lg-6 col-sm-5 col-md-6">
                                      <div class="form-group">
                                      <input type="file" name="files[]" class="" multiple >
                                      </div>
                                    </div> -->
                                    <div class="col-12 col-sm-5 col-lg-5 col-md-5 ps-3 mt-3">
                                      <div class="background__box">
                                            <div class="background__btn-box ">
                                                <label class="background__btn">
                                                <p class="text-white bg-success p-2 rounded">Upload Implements images</p>
                                                    <input type="file" data-max_length="20"name="imgfile"  ref="fileInput"
                                                    style="display: none"
                                                    @change="handleFileInput"
                                                    accept="image/png, image/jpg, image/jpeg" class="background__inputfile" id="image">
                                                    <small></small>
                                                </label>
                                            </div>
                                            <div class="">
                                                <div class="background__img-wrap"></div>
                                            </div>
                                      </div>
                                    </div>
                                    <div class="col-12 mt-3">
                                      <div class="form-outline">
                                      <label for="name" class="form-label">Description</label>
                                        <input type="text" class="py-5 w-100" placeholder=" " id="description">
                                        
                                      </div>
                                    </div>
                                  
                                </div>
                            </form>
                            </div>
                        </div>
                    </div>
                <div class="modal-footer">
                <button class="btn bg-success text-white btn_all" id="save">Submit</button>
                                          
                  <button type="button" class="btn btn-secondary btn_all" data-bs-dismiss="modal">Close</button>
                  <!-- <button type="button" class="btn btn-success fw-bold px-3">Submit</button> -->
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="">
      <!-- Filter Card -->
      <div class="filter-card mb-2">
        <div class="card-body">
        <form action="" id="myform" class="mb-0">
          <div class="row">
            <div class="col-12 col-sm-12 col-md-3 col-lg-3">
              <div class="form-outline">
              <label class="form-label">Category</label> 
                <select class="form-select form-control" aria-label="Default select example">
                    <option selected>Select Category</option>
                    <option value="1">Threser</option>
                    <option value="2">other</option>
                </select>
              </div>
            </div>
            <div class="col-12 col-sm-12 col-md-3 col-lg-3">
              <div class="form-outline">
              <label class="form-label">Name</label> 
                <select class="form-select form-control" aria-label="Default select example">
                    <option selected>Select Name</option>
                    <option value="1">name1</option>
                    <option value="2">name2</option>
                    <option value="3">name3</option>
                </select>
              </div>
            </div>
            <div class="col-12 col-sm-12 col-md-3 col-lg-3">
              <div class="form-outline">
              <label class="form-label">Brand</label>
                <select class="form-select form-control" aria-label="Default select example">
                    <option selected>Select Brand</option>
                    <option value="1">Mahindra</option>
                    <option value="2">Swaraj</option>
                    <option value="3">John Deere</option>
                </select>
              </div>
            </div>
            <div class="col-12 col-sm-12 col-md-3 col-lg-3">
              <div class="form-outline">
              <label class="form-label">Implement Type</label>
                <select class="form-select form-control" aria-label="Default select example">
                    <option selected>Select Implement Type</option>
                    <option value="1">Type1</option>
                    <option value="2">Type2</option>
                    <option value="3">Type3</option>
                </select>
              </div>
            </div>
           
            
            <div class="col-12 col-sm-12 col-md-12 col-lg-12 mt-3">
              <div class="text-center">
                <button type="button" class="btn-success btn btn_all" id="Search">Search</button>
                <button type="button" class="btn-success btn  btn_all" id="Reset">Reset</button>
              </div>
            </div>
          </div>
        </form>
        </div>
      </div>
      <!-- Table Card -->
      <div class=" mb-5">
            <div class="table-responsive shadow bg-white mt-3">
              <table id="example" class="table table-striped  table-hover table-bordered dataTable no-footer" width="100%; margin-bottom: 15px;">
                <thead class="">
                  <tr>
                                            <th class="d-none d-md-table-cell text-white">S.No.</th>
                                            <th class="d-none d-md-table-cell text-white">Category </th>
                                            <th class="d-none d-md-table-cell text-white">Photos</th>
                                            <th class="d-none d-md-table-cell text-white">Name </th>
                                            <th class="d-none d-md-table-cell text-white">Brand</th>
                                            <th class="d-none d-md-table-cell text-white"> Implement Type</th>
                                            <th class="d-none d-md-table-cell text-white"> Implement Power</th>
                                            <th class="d-none d-md-table-cell text-white"> Description</th>
                                            
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

const form = document.getElementById('form');
const brand = document.getElementById('brand');
const type = document.getElementById('type');
const power = document.getElementById('power');
const category = document.getElementById('category');
const image = document.getElementById('image');
const description = document.getElementById('description');



// Show input error messages
function showError(input, message) {
    const formControl = input.parentElement;
    const small = formControl.querySelector('small');
    formControl.className = 'form-outline mb-3 error';
    small.innerText = message;
    small.classList.add('error-message');
}

// Show success color
function showSuccess(input) {
    const formControl = input.parentElement;
    formControl.className = 'form-outline mb-3 success';
}

// Check required fields
function checkRequired(inputArr) {
    inputArr.forEach(function (input) {
        if (input.value.trim() === '') {
            showError(input, `${getFieldName(input)} is required`);
           
        } else {
            showSuccess(input);
        }
    });
}

// Check input length
function checkLength(input, min, max) {
    if (input.value.length < min) {
        showError(input, `${getFieldName(input)} must be at least ${min} characters`);
    } else if (input.value.length > max) {
        showError(input, `${getFieldName(input)} must be less than ${max} characters`);
    } else {
        showSuccess(input);
    }
}

// Get Field Name
function getFieldName(input) {
    return input.id.charAt(0).toUpperCase() + input.id.slice(1);
}

// Check email format
function checkEmail(input) {
    const emailValue = input.value.trim();
    const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (!emailPattern.test(emailValue)) {
        showError(input, 'Invalid email format');
    } else {
        showSuccess(input);
    }
}

// Event Listeners
form.addEventListener('submit', function (e) {
    e.preventDefault();

    checkRequired([brand, type,power,category,image,description]);
    // checkEmail(email); // If you want to check email format
});

   </script>