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
                            <!-- <form>
                                <div class="row justify-content-center pt-4">
                                   
                                    <div class="col-12 col-lg-6 col-sm-5 col-md-6 ">
                                      <div class="form-group">
                                        <input type="text" class="py-3" placeholder=" " id="brand">
                                        <label for="name" class="text-dark"> Brand Name</label>
                                      </div>
                                    </div>
                                    <div class="col-12 col-lg-6 col-sm-5 col-md-6">
                                      <div class="form-group">
                                        <input type="text" class="py-3" placeholder=" " id="model">
                                        <label for="name" class="text-dark ">Model</label>
                                      </div>
                                    </div>
                                    <div class="col-12 col-lg-6 col-sm-5 col-md-6  ">
                                      <div class="form-group">
                                        <input type="text" class="py-3" placeholder=" " id="category">
                                        <label for="name" class="text-dark">Category</label>
                                      </div>
                                    </div>
                                    <div class="col-12 col-lg-6 col-sm-5 col-md-6  ">
                                      <div class="form-group">
                                        <select class="form-select py-3" aria-label="Default select example">
                                          <option selected>Select Type</option>
                                          <option value="1">Tractor</option>
                                          <option value="2">Farm Implementation</option>
                                          <option value="3">Harvester</option>
                                        </select>
                                      </div>
                                    </div>
                                   
                                </div>
                                
                            </form> -->
                            <form action="" method="POST"  class="" id="form">
                                  <div class="filter-card ">
                                    <div class="card-body">
                                      <div class="row">
                                        
                                        <div class="col- col-sm-6 col-lg-6 col-md-6">
                                          <label class="text-dark"> Brand Name<span class="text-danger">*</span></label>
                                          <input type="text" class="form-control py-2" id="brand" placeholder="Enter brand">
                                          <small></small>
                                        </div>
                                        <div class="col- col-sm-6 col-lg-6 col-md-6">
                                          <label class="text-dark">Model<span class="text-danger">*</span></label>
                                          <input type="text" class="form-control py-2" id="model" placeholder="Enter Model">
                                          <small></small>
                                        </div>
                                        <div class="col- col-sm-6 col-lg-6 col-md-6">
                                          <label class="text-dark">Category<span class="text-danger">*</span></label>
                                          <input type="text" class="form-control py-2" id="category" placeholder="Enter Category">
                                          <small></small>
                                        </div>
                                        
                                        
                                        <div class="col-12 col-lg-6 col-sm-5 col-md-6  ">
                                          <div class="form-group mt-4 pt-1">
                                            <select class="form-select" aria-label="Default select example">
                                              <option selected>Select Type</option>
                                              <option value="1">Tractor</option>
                                              <option value="2">Farm Implementation</option>
                                              <option value="3">Harvester</option>
                                            </select>
                                          </div>
                                        </div>
                        
                                        <div class="col-12 ">
                                            <div class="text-center ">
                                                <button class="btn px-4 bg-success " id="save">Submit</button>
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
                  <option selected>Select Brand Name</option>
                  <option value="1">Mahindra</option>
                  <option value="2">Swaraj</option>
                  <option value="3">John Deere</option>
                </select>
              </div>
            </div>
            <div class="col-12 col-sm-12 col-md-4 col-lg-4">
              <div class="form-outline">
                <select class="form-select" aria-label="Default select example">
                  <option selected>Select Model Name</option>
                  <option value="1">Model1</option>
                  <option value="2">Model2</option>
                  <option value="3">Model3</option>
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
                                            <th class="d-none d-md-table-cell text-white">  Brand Name</th>
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
 const form = document.getElementById('form');
const brand = document.getElementById('brand');
const model = document.getElementById('model');
const category = document.getElementById('category');

// Show input error messages
function showError(input, message) {
    const formControl = input.parentElement;
    const small = formControl.querySelector('small');
    formControl.className = 'form-outline mb-4 error';
    small.innerText = message;
    small.classList.add('error-message');
}

// Show success color
function showSuccess(input) {
    const formControl = input.parentElement;
    formControl.className = 'form-outline mb-4 success';
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

    checkRequired([brand, model, category]);
    // checkEmail(email); // If you want to check email format
});


</script>