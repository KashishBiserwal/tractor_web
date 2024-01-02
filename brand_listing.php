<?php
   include 'includes/headertagadmin.php';
   include 'includes/footertag.php';
   include 'includes/headertag.php';
   ?> 

<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script>
 $(document).ready(function() {
  $(".js-select2").select2({
    closeOnSelect: false
  });
});
</script>
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
   <section style="padding: 0 15px 0 60px;">
    <div class="">
      <div class="">
        <div class="card-body d-flex align-items-center justify-content-between page_title">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb my-0 ms-2">
              
              <li class="breadcrumb-item">
                <span>Brand Listing</span>
              </li>
            </ol>
          </nav>
          

          <button type="button" id="add_trac" class="btn add_btn btn-success float-right btn_all" data-bs-toggle="modal"  data-bs-target="#staticBackdrop">
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
                                          <input type="text" class="form-control py-2" id="brand_name" placeholder="Enter brand">
                                          <small></small>
                                        </div>
                                        <div class="col-12 col-sm-4 col-lg-4 col-md-4 ps-3">
                                          <div class="background__box mt-4 pt-1">
                                                <div class="background__btn-box ">
                                                    <label class="background__btn">
                                                    <p class="text-white bg-success p-2 rounded">Upload images</p>
                                                        <input type="file" id="brand_img" data-max_length="20"name="brand_img"  ref="fileInput"
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
    <div class="">
      <!-- Filter Card -->
      <div class="filter-card">
        <div class="card-body">
        <form action="" id="myform" class="mb-0">
          <div class="row">
            <div class="col-12 col-sm-12 col-md-4 col-lg-4">
            <div class="form-outline">
                    <label class="form-label">Search By Brand</label>
                    <select class="js-select2 form-select form-control mb-0" id="brand">
                    </select>
              </div>
            </div>
            <div class="col-12 col-sm-12 col-md-8 col-lg-8  text-center">
              <div class="d-flex float-end">
                <button type="button" class="btn-success btn px-5 btn_all" id="Search">Search</button>
                <button type="button" class="btn-success btn px-5 mx-2 btn_all" id="Reset">Reset</button>
              </div>
                
            </div>
          </div>
        </form>
        </div>
      </div>
      <!-- Table Card -->
      <div class=" mb-5">
            <div class="table-responsive shadow bg-white mt-3">
              <table id="example" class="table table-striped  table-hover table-bordered  no-footer" width="100%; margin-bottom: 15px;">
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

        <div class="modal fade" id="staticBackdrop_model" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Update Brand</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
              <h4 class="text-center">Fill your Brand Details</h4>
                <form action="" method="POST"  class="" id="formmodel">
                  <div class="">
                                    <div class="">
                                      <div class="row">
                                        
                                        <div class="col- col-sm-6 col-lg-6 col-md-6">
                                          <label class="text-dark"> Brand Name<span class="text-danger">*</span></label>
                                          <input type="text" class="form-control py-2" id="brand_name1" placeholder="Enter brand">
                                          <small></small>
                                        </div>
                                        <div class="col-12 col-sm-4 col-lg-4 col-md-4 ps-3">
                                          <div class="background__box mt-4 pt-1">
                                                <div class="background__btn-box ">
                                                    <label class="background__btn">
                                                    <p class="text-white bg-success p-2 rounded">Upload images</p>
                                                        <input type="file" id="brand_img1" data-max_length="20"name="brand_img"  ref="fileInput"
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
                        
                                        
                                      </div>
                  </div>
                </form>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="px-4 bg-success btn btn-primary" id="save_brand">Submit</button>
              </div>
            </div>
          </div>



        </div>


        


    </div>
   </section>
      
   
          <!-- model view -->
          <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
            <!-- <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel"> Brand Information</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div> -->
              <div class="modal-body">
                <h4 class="fw-bold mb-2">Brand Information</h4>
                <div class="container">
                  <div class="row">
                    <div class="col-12 col-lg-6 col-sm-6 col-md-6">
                      <h5>Brand Name: </h5>
                    </div>
                    <div class="col-12 col-lg-6 col-sm-6 col-md-6">
                      <p id="brand_name2" class="fw-bold"></p>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-12 col-lg-4 col-sm-4 col-md-4">
                      <h5>Image</h5>
                    </div>
                    <div class="col-12 col-lg-8 col-sm-8 col-md-8">
                     <div id="related_brand" class="row"></div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              </div> -->
            </div>
          </div>
        </div>
    
</div>
</div>


<?php
   
   ?> 
   <script>
     $(document).ready(function() {
      BackgroundUpload();
      $('#save').click(store);
      $('#dataedit').click(edit_brand);
    });
    // store data
  function store(event) {
    event.preventDefault();
    console.log('jfhfhw');
    var brand_name = document.getElementById('brand_name').value;
        var brand_img = document.getElementById('brand_img').files[0]; // Use files[0] to access the selected file
        var formData = new FormData(); // Create a FormData object to send the file

        formData.append('brand_name', brand_name);
        formData.append('brand_img', brand_img);
    var url = "<?php echo $APIBaseURL; ?>storeBrands";
    console.log(url);
    var token = localStorage.getItem('token');
    var headers = {
      'Authorization': 'Bearer ' + token
    };
    $.ajax({
      url: url,
      type: "POST",
      data:formData,
      processData: false, // Don't process the data
      contentType: false,
      headers: headers,
      success: function (result) {
        console.log(result, "result");
        // Redirect to a success page or perform other actions
        window.location.href = "<?php echo $baseUrl; ?>brand_listing.php"; 
        console.log("Add successfully");
        alert('successfully inserted..!')
      },
      error: function (error) {
        console.error('Error fetching data:', error);
        // window.location.href = baseUrl + "login.php";
      }
    });
  }
// fetch data
function get() {
    var url = "<?php echo $APIBaseURL; ?>getBrands";
    $.ajax({
        url: url,
        type: "GET",
        headers: {
            'Authorization': 'Bearer ' + localStorage.getItem('token')
        },
        success: function (data) {
            const tableBody = document.getElementById('data-table');
            tableBody.innerHTML = ''; // Clear previous data
            var select_brand = $("#brand");
            select_brand.empty(); // Clear existing options
            select_brand.append('<option selected disabled="" value="">Please select Brand</option>');
      console.log(data, 'ok');
      for (var j = 0; j < data.brands.length; j++) {
        var brand_name = data.brands[j].brand_name;
        console.log(brand_name);
        select_brand.append('<option value="' + brand_name + '">' + brand_name + '</option>');
      }

            let serialNumber = 1; // Initialize serial number

            if (data.brands.length > 0) {
                // Loop through the data and create table rows
                data.brands.map(row => {
                    const tableRow = document.createElement('tr');
                    tableRow.innerHTML = `
                        <td>${serialNumber}</td>
                        <td>${row.brand_name}</td>
                        <td>${row.brand_img}</td>
                        <td><div class="float-start"><button class="btn btn-warning btn-sm text-white mx-1" data-bs-toggle="modal" onclick="fetch_data(${row.id});" data-bs-target="#exampleModal" style="padding:5px">
                        <i class="fa-solid fa-eye" style="font-size: 11px;"></i></button>
                        <button class="btn btn-primary btn-sm btn_edit" onclick="fetch_edit_data(${row.id});" data-bs-toggle="modal" data-bs-target="#staticBackdrop_model" id="yourUniqueIdHere" style="padding:5px">
                          <i class="fas fa-edit" style="font-size: 11px;"></i></button>
                        </button> <button class="btn btn-danger btn-sm mx-1" id="delete_user" onclick="destroy(${row.id});" style="padding:5px"><i class="fa fa-trash" style="font-size: 11px;"></i></button></div>
                        
                        </td>
                    `;
                    tableBody.appendChild(tableRow);

                    // Increment serial number for the next row
                    serialNumber++;
                });
            } else {
                // Display a message if there's no valid data
                tableBody.innerHTML = '<tr><td colspan="7">No valid data available</td></tr>';
            }
        },
        error: function (error) {
            console.error('Error fetching data:', error);
            // Display an error message or handle the error as needed
        }
    });
}

get();

function fetch_edit_data(userId) {
  // var apiBaseURL = APIBaseURL;
  var url = '<?php echo $APIBaseURL; ?>getBrandsById/'+ userId;

  var headers = {
    'Authorization': 'Bearer ' + localStorage.getItem('token')
  };

  $.ajax({
    url: url,
    type: 'GET',
    headers: headers,
    success: function(response) {
      // var userData = response.brands[0];

      $('#brand_name1').val(response.brands[0].brand_name);
      $('#brand_img1').val(response.brands[0].brand_img);
     

      // $('#exampleModal').modal('show');
    },
    error: function(error) {
      console.error('Error fetching user data:', error);
    }
  });
}

function edit_brand(){
   alert('fherjlkferif');

  var brand1 = $("#brand_name1").val();
  var brand_img1 = $("#brand_img1").val();

  var paraArr = {
    'brand_name': brand1,
    'image': brand_img1,
  };
  var apiBaseURL = APIBaseURL;
  var url = apiBaseURL + 'updateBrands/' + 3;

  var headers = {
    'Authorization': 'Bearer ' + localStorage.getItem('token')
  };
  $.ajax({
    url: url,
      type: "PUT",
      data: paraArr,
      headers: headers,
      success: function (result) {
        console.log(result, "result");
        get();
        console.log("updated successfully");
        alert('successfully updated..!')
      },
      error: function (error) {
        console.error('Error fetching data:', error);
      }
  })
}


function fetch_data(id) {
  console.log(id,"id")
    console.log(window.location)
    var urlParams = new URLSearchParams(window.location.search);
 
    var productId = id;
    var url = "<?php echo $APIBaseURL; ?>getBrandsById/" + productId;
  
    // var url = "http://127.0.0.1:8000/api/admin/getBrandsById/" + productId;
    // console.log(url);
    var headers = {
    'Authorization': 'Bearer ' + localStorage.getItem('token')
  };
    $.ajax({
        url: url,
        type: "GET",
        headers: headers,
        success: function(data) {
        console.log(data, 'abc');
        document.getElementById('brand_name2').innerText=data.brands[0].brand_name;
        console.log(data.brands[0].brand_name);

        var productContainer = $("#related_brand");

        if (data.brands && data.brands.length > 0) {
            data.brands.forEach(function (b) {
                var newCard = `
                <div class=" col-6 col-lg-6 col-md-6 col-sm-6">
                        <div class="brand-main box-shadow mt-2 text-center shadow">
                            <a class="weblink text-decoration-none text-dark" 
                                title="Old Tractors">
                                <img class="img-fluid w-50" src="http://tractor-api.divyaltech.com/uploads/product_img/${b.brand_img}"
                                    data-src="h" alt="Brand Logo">
                                <p class="mb-0 oneline">${b.brand_name}</p>
                            </a>
                        </div>
                    </div>
                `;

                // Append the new card to the container
                productContainer.append(newCard);
            });


        }
},
error: function (error) {
console.error('Error fetching data:', error);
}
    });
}
// fetch_data();
// delete
function destroy(id) {
  var userConfirmation = confirm("Are you sure you want to delete this Brand ?");
  
  if (userConfirmation) {
    var url = "<?php echo $APIBaseURL; ?>deleteBrands/" + id;
    var token = localStorage.getItem('token');
    
    if (!token) {
      console.error("Token is missing");
      return;
    }

    $.ajax({
      url: url,
      type: "DELETE",
      headers: {
        'Authorization': 'Bearer ' + token
      },
      success: function(result) {
        get();
        console.log("Delete request successful");
        alert("Delete operation successful");
      },
      error: function(error) {
        console.error('Error fetching data:', error);
        alert("Error during delete operation");
      }
    });
  } else {
    // If the user cancels the operation
    console.log("Delete operation canceled");
  }
}



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
</body>