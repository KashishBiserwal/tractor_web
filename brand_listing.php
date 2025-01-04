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
    closeOnSelect: true
  });
});
</script>
<style>
  .error-message {
    color: red;
  }
  .brand_table thead th:last-child{
    width: 100px !important;
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
          

          <button type="button" id="add_trac" class="btn add_btn btn-success float-right btn_all" data-bs-toggle="modal"  data-bs-target="#staticBackdrop" onclick="resetFormFields();">
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
                                          <input type="text" class="form-control py-2" id="brand_name" placeholder="Enter brand" required>
                                        </div>
                                        <div class="col-12 col-lg-6 col-md-6 col-sm-6">
                                          <div class="upload__box mt-5">
                                            <div class="upload__btn-box text-center">
                                              <label >
                                                <p class="upload__btn ">Upload images</p>
                                                <input type="file" multiple="" data-max_length="20" class="upload__inputfile" id="banner_image" name="banner_image" required>
                                              </label>
                                            </div>
                                            <div id="selectedImagesContainer" class="upload__img-wrap row" required></div>
                                          </div>
                                        </div>
                                        <div class="col-12 col-sm-12 col-lg-12 col-md-12 mt-3">
                                          <label for="name" class="text-dark fw-bold">Select Product Type</label>
                                          <div id="type_name" name="type_name" required></div>
                                        </div>
                                      </div>
                                  </div>
                              </form>
                            </div>
                        </div>
                    </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary px-3" data-bs-dismiss="modal">Close</button>
                  <button class="btn px-4 bg-success text-white" id="save">Submit</button>
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
            <div class="col-12 col-sm-12 col-md-4 col-lg-4"hidden>
              <div class="form-outline">
                <label class="form-label">Search By id</label>
                  <select class="js-select2 form-select form-control mb-0" id="brand_id">
                  </select>
              </div>
            </div>
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
                <button type="button" class="btn-success btn px-5 mx-2 btn_all"  id="Reset" onclick="resetForm()">Reset</button>
              </div>
                
            </div>
          </div>
        </form>
        </div>
      </div>
      <!-- Table Card -->
      <div class=" mb-5 shadow bg-white mt-3 p-3">
            <div class="table-responsive">
              <table id="example" class="table table-striped brand_table  table-hover table-bordered  no-footer" width="100%; margin-bottom: 15px;">
                <thead class="">
                  <tr>
                    <th class="d-none d-md-table-cell text-white py-2">S.No.</th>
                    <th class="d-none d-md-table-cell text-white py-2">Brand Name</th>
                    <th class="d-none d-md-table-cell text-white py-2">Brand Image</th>
                    <th class="d-none d-md-table-cell text-white py-2">Product Type</th>
                    <th class="d-none d-md-table-cell text-white py-2" style="width: 100px !important;">Action</th>
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
              <div class="modal-header bg-success">
                <h5 class="modal-title text-white" id="staticBackdropLabel">Update Brand</h5>
                <button type="button" class="btn-close btn-success" data-bs-dismiss="modal" aria-label="Close"><img src="assets/images/close.png"></button>
              </div>
                <div class="modal-body">
                  <h4 class="text-center">Fill your Brand Details</h4>
                  <form action="" method="POST"  class="" id="formmodel">
                    <div class="">
                      <div class="">
                        <div class="row">
                          <div class="col- col-sm-6 col-lg-6 col-md-6 mt-3" hidden >
                            <div class="form-outline">
                              <label class="form-label"> id Name<span class="text-danger">*</span></label>
                                <input type="text" class="form-control py-2" for="idUser"  id="idUser">
                                <small></small>
                            </div>
                          </div>
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
                                <input type="file" multiple="" data-max_length="20" class="upload__inputfile" id="banner_image" name="banner_image" required>
                                  <small></small>
                                </label>
                              </div>
                              <div class="">
                              <div class="background__img-wrap"  id="selectedImagesContainer2"></div>
                            </div>
                          </div>
                        </div>
                        <div class="col-12 col-sm-12 col-lg-12 col-md-12 mt-3">
                          <label for="name" class="text-dark fw-bold">Select Product Type</label>
                          <div id="type_name1" name="type_name1"></div>
                        </div>
                      </div>
                    </div>
                </form>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="px-4 bg-success btn btn-primary" data-bs-dismiss="modal" id="save_brand">Submit</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
          <!-- model view -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered modal-md">
        <div class="modal-content">
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
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<script>
  $(document).ready(function() {
    $("#form").validate({
      rules: {
        brand_name: {
          required: true,
        },
        brand_img: {
          required: true,
        },
        type_name:{
          required: true,
        }
      },
      messages: {
        brand_name: {
          required: 'This field is required',
        },
        banner_image: {
          required: 'This field is required',
        },
        type_name:{
          required: 'This field is required',
        }
      },
      submitHandler: function(form) {
        alert('Form is valid!'); 
      }
    });
    $("#save").click(function() {
      $("#form").valid();
    });
  });
</script>


   <script>
     $(document).ready(function() {
      // $('#Reset').on('click', function() {
      //   resetForm();
      // });
      
      ImgUpload();
      get_product_type();
      $('#save').click(store);
      $('#save_brand').click(edit_brand);
      $('#Search').click(search_data);

  
    });


  function get_product_type(id) {
    console.log('initsfd')
    var url = '<?php echo $APIBaseURL; ?>get_all_products_type';
    $.ajax({
        url: url,
        type: "GET",
        headers: {
            'Authorization': 'Bearer ' + localStorage.getItem('token')
        },
        success: function (data) {
          // lookup select
          console.log(data,'ok');
         

            // checkbox
            $("#" + id).empty();

            // var tractorTypesArray = [];
            
            for (var j = 0; j < data.getProductType.length; j++) {
              console.log( data.getProductType.product_type_name)
            var product_type = data.getProductType[j].product_type_name;
              var strFirstThree = product_type.substring(0,3);
              if(strFirstThree != 'OLD'){
                var checkbox = $('<input type="checkbox" class="product_type_checkbox" name="productTypes" id="tractor_type_' + data.getProductType[j].id + '" value="' + data.getProductType[j].id + '">');
                var label = $('<label for="tractor_type_' + data.getProductType[j].id + '">' + data.getProductType[j].product_type_name + '</label>');
            
              $("#" + id).append(checkbox);
              $("#" + id).append(label);
              }
            }
        },
         complete:function(){
        },
        error: function (error) {
            console.error('Error fetching data:', error);
        }
    });
}

get_product_type('type_name');
    function store(event) {
    event.preventDefault();
    console.log('jfhfhw');
    var form = $('#form');
    form.validate();

    if (form.valid()) {
        var brand_name = document.getElementById('brand_name').value;
        var brand_img = document.getElementById('banner_image').files[0];
        var selectedCheckboxes = $('.product_type_checkbox:checked');
        var type_name = [];

        selectedCheckboxes.each(function () {
            type_name.push($(this).val());
        });

        console.log(type_name, "type_name");

        // Convert the array to a JSON string
        var type_name_json = JSON.stringify(type_name);

        var formData = new FormData();
        formData.append('brand_name', brand_name);
        formData.append('brand_img', brand_img);
        formData.append('product_type_id', type_name_json);

        var url = "<?php echo $APIBaseURL; ?>storeBrands";
        console.log(url);
        var token = localStorage.getItem('token');
        var headers = {
            'Authorization': 'Bearer ' + token
        };

        $.ajax({
            url: url,
            type: "POST",
            data: formData,
            processData: false,
            contentType: false,
            headers: headers,
            success: function (result) {
                console.log(result, "result");
                window.location.href = "<?php echo $baseUrl; ?>brand_listing.php";
                console.log("Add successfully");
                alert('successfully inserted..!');
            },
            error: function (error) {
                console.error('Error fetching data:', error);
            }
        });
    } else {
        // Form validation failed, do not proceed with form submission
        console.log('Form validation failed.');
    }
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
            
            // Create an array to store unique brand names with their ids
            var uniqueBrandNames = [];

            console.log(data, 'ok');
            for (var j = 0; j < data.brands.length; j++) {
                var brand_id = data.brands[j].id;
                var brand_name = data.brands[j].brand_name;

                // Check if the brand name is not already in the array
                if (!uniqueBrandNames.find(item => item.name === brand_name)) {
                    // Add brand name and id to the array
                    uniqueBrandNames.push({ id: brand_id, name: brand_name });
                }

                console.log(brand_name);
            }

            // Add unique brand names to the dropdown
            uniqueBrandNames.forEach(function (brand) {
                select_brand.append('<option value="' + brand.id + '">' + brand.name + '</option>');
            });

            let serialNumber = 1; 

            if (data.brands.length > 0) {
                let tableData = [];
             
                data.brands.forEach(row => {
                    let action = `<div class="float-start"><button class="btn btn-warning btn-sm text-white mx-1" data-bs-toggle="modal" onclick="fetch_data(${row.id});" data-bs-target="#exampleModal" style="padding:5px">
                        <i class="fa-solid fa-eye" style="font-size: 11px;"></i></button>
                        <button class="btn btn-primary btn-sm btn_edit" onclick="fetch_edit_data(${row.id});" data-bs-toggle="modal" data-bs-target="#staticBackdrop_model" id="yourUniqueIdHere" style="padding:5px">
                          <i class="fas fa-edit" style="font-size: 11px;"></i></button>
                        </button> <button class="btn btn-danger btn-sm mx-1" id="delete_user" onclick="destroy(${row.id});" style="padding:5px"><i class="fa fa-trash" style="font-size: 11px;"></i></button></div>`;
                        tableData.push([
                            serialNumber,
                            row.brand_name,
                            row.brand_img,
                            row.product_type_names,
                            action
                          ]);

                          serialNumber++;
                });
                $('#example').DataTable().destroy();
                $('#example').DataTable({
                    data: tableData,
                    columns: [
                        { title: 'S.No.' },
                        { title: 'Brand Name' },
                        { title: 'Brand Image' },
                        { title: 'Product Types' }, 
                        { title: 'Action', orderable: false }
                    ],

                    paging: true,
                    searching: false,
                   
                });
            } else {
          
                tableBody.innerHTML = '<tr><td colspan="7">No valid data available</td></tr>';
                if(error.status == '401' && error.responseJSON.error == 'Token expired or invalid'){
            $("#errorStatusLoading").modal('show');
            $("#errorStatusLoading").find('.modal-title').html('Error');
            $("#errorStatusLoading").find('.modal-body').html(error.responseJSON.error);
            window.location.href = baseUrl + "login.php"; 

          }
            }
        },
        error: function (error) {
            console.error('Error fetching data:', error);
            // Display an error message or handle the error as needed
            if(error.status == '401' && error.responseJSON.error == 'Token expired or invalid'){
            $("#errorStatusLoading").modal('show');
            $("#errorStatusLoading").find('.modal-title').html('Error');
            $("#errorStatusLoading").find('.modal-body').html(error.responseJSON.error);
            window.location.href = baseUrl + "login.php"; 

          }
        }
    });
}
get();

function fetch_edit_data(userId) {
  // var apiBaseURL = APIBaseURL;
  get_product_type('type_name1');
  var url = '<?php echo $APIBaseURL; ?>getBrandsById/'+ userId;

  var headers = {
    'Authorization': 'Bearer ' + localStorage.getItem('token')
  };

  $.ajax({
    url: url,
    type: 'GET',
    headers: headers,
    success: function(response) {
      console.log(response,"response brand")
      // var userData = response.brands[0];
      $('#idUser').val(response.brands[0].id);
      $('#brand_name1').val(response.brands[0].brand_name);
      $('#type_name1').val(response.brands[0].product_type_names);
      
      // Clear existing checkboxes
      $('input[name="productTypes"]').prop('checked', false);

      // Check checkboxes based on response data
      if (response.brands[0].product_type_names) {
        var productTypesArray = response.brands[0].product_type_names.split(',');
        var productTypesid = response.brands[0].product_type_id.split(',');
        console.log(productTypesid,'productTypesid');
        productTypesid.forEach(function (productType) {
          // Trim to remove extra spaces
          var trimmedProductType = productType.trim();
          
          // Check the checkbox with matching value
          $('input[name="productTypes"][value="' + trimmedProductType + '"]').prop('checked', true);
        });
      }
      // $('#brand_img1').val(response.brands[0].brand_img);
                // Append the new card to the container
                // productContainer.append(newCard);
                $("#selectedImagesContainer2").empty();

                if (response.brands[0].brand_img) {
                  var imageNamesArray = Array.isArray(response.brands[0].brand_img) ? response.brands[0].brand_img : response.brands[0].brand_img.split(',');
                  var countclass=0;
                  imageNamesArray.forEach(function (brand_img) {
                      var imageUrl = 'http://tractor-api.divyaltech.com/uploads/brand_img/' + brand_img.trim();
                      countclass++;
                      var newCard = `
                          <div class="col-12 col-md-6 col-lg-4 position-relative" style="left:6px;">
                          <div class="upload__img-close_button " id="closeId${countclass}" onclick="removeImage(this);"></div>
                              <div class="brand-main d-flex box-shadow mt-1 py-2 text-center shadow upload__img-closeDy${countclass}">
                                  <a class="weblink text-decoration-none text-dark" title=" Image">
                                      <img class="img-fluid w-100 h-100" src="${imageUrl}" alt=" Image">
                                  </a>
                              </div>
                          </div>
                      `;
              
                    // Append the new image element to the container
                    $("#selectedImagesContainer2").append(newCard);
                 });
                }
    },
    error: function(error) {
      console.error('Error fetching user data:', error);
    }
  });
}

function edit_brand(){
  var edit_id = document.getElementById('idUser').value;

  var brand_name = document.getElementById('brand_name1').value;
  var checkboxes = document.querySelectorAll('input[name="productTypes"]:checked');
  // var type_name1 = Array.from(checkboxes).map(checkbox => checkbox.value);
  var type_name1 = Array.from(new Set(Array.from(checkboxes).map(checkbox => checkbox.value)));
  console.log('checkboxes',checkboxes);
  var _method = 'put';
  var brand_img1 = document.getElementById('brand_img1').files[0];

        var formData = new FormData();
        formData.append('brand_name', brand_name);
        formData.append('brand_img', brand_img1);
        formData.append('_method', _method);
        formData.append('product_type_id',`[${type_name1}]` );
        formData.append('id', edit_id,);
   var url = '<?php echo $APIBaseURL; ?>updateBrands/' + edit_id;
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
       
        console.log("Add successfully");
        alert('successfully Updated..!');
        get();
      },
      error: function (error) {
        console.error('Error fetching data:', error);
        // window.location.href = baseUrl + "login.php";
      }
    });
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
        $("#related_brand").empty();
      
        if (data.brands && data.brands.length > 0) {
            data.brands.forEach(function (b) {
              
                var newCard = `
                <div class=" col-6 col-lg-6 col-md-6 col-sm-6">
               
                        <div class="brand-main box-shadow mt-2 text-center shadow ">
                            <a class="weblink text-decoration-none text-dark" 
                                title="Old Tractors">
                                <img class="img-fluid w-50" src="http://tractor-api.divyaltech.com/uploads/brand_img/${b.brand_img}"
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

function search_data() {

    var selectedBrand = $('#brand').val();
    var brand_id = $('#brand_id').val();
    console.log(selectedBrand,"brand_id");
    var paraArr = {
      'brand_id': selectedBrand,
      //'id':brand_id,
    };

    var url = '<?php echo $APIBaseURL; ?>search_for_brand' ;
    $.ajax({
        url:url, 
        type: 'POST',
        data: paraArr,
       
        headers: {
            'Authorization': 'Bearer ' + localStorage.getItem('token')
        },
        success: function (searchData) {
          console.log(searchData,"hello brand");
          updateTable(searchData);
        },
        error: function (error) {
            console.error('Error searching for brands:', error);
        }
    });
};
function updateTable(data) {
    const tableBody = document.getElementById('data-table');
    tableBody.innerHTML = '';
    let serialNumber = 1; 

    if (data.brand && data.brand.length > 0) {
        let tableData = []; 
        data.brand.forEach(row => {
            let action = `<div class="float-start">
                <button class="btn btn-warning btn-sm text-white mx-1" data-bs-toggle="modal" onclick="fetch_data(${row.id});" data-bs-target="#exampleModal" style="padding:5px">
                    <i class="fa-solid fa-eye" style="font-size: 11px;"></i>
                </button>
                <button class="btn btn-primary btn-sm btn_edit" onclick="fetch_edit_data(${row.id});" data-bs-toggle="modal" data-bs-target="#staticBackdrop_model" id="yourUniqueIdHere" style="padding:5px">
                    <i class="fas fa-edit" style="font-size: 11px;"></i>
                </button>
                <button class="btn btn-danger btn-sm mx-1" id="delete_user" onclick="destroy(${row.id});" style="padding:5px">
                    <i class="fa fa-trash" style="font-size: 11px;"></i>
                </button>
            </div>`;

            tableData.push([
                        serialNumber,
                        row.brand_name,
                        row.brand_img,
                        row.product_type_names,
                        action
                    ]);

                    // Increment serial number for the next row
                    serialNumber++;
                });
                $('#example').DataTable().destroy();
                $('#example').DataTable({
                    data: tableData,
                    columns: [
                        { title: 'S.No.' },
                        { title: 'Brand Name' },
                        { title: 'Brand Image' },
                        { title: 'Product Type' },
                        { title: 'Action', orderable: false } // Disable ordering for Action column
                    ],
                    paging: true,
                    searching: false,
                    // ... other options ...
                });
    } else {
        // Display a message if there's no valid data
        tableBody.innerHTML = '<tr><td colspan="4">No valid data available</td></tr>';
    }
}
function fetchAllData() {
  var apiBaseURL = '<?php echo $APIBaseURL; ?>';
  var url = apiBaseURL + 'search_for_brand';

  $.ajax({
    url: url,
    type: 'POST',
    data: {},
    headers: {
      'Authorization': 'Bearer ' + localStorage.getItem('token')
    },
    success: function (allData) {
      updateTable(allData);
    },
    error: function (error) {
      console.error('Error fetching all data:', error);
    }
  });
}

// Function to reset the form and table
function resetForm() {
  // Reset the values of select elements using jQuery
  $('#brand').val('').trigger('change');
  $('#brand_id').val('').trigger('change');

  // Show all rows in the table
  $('#example tbody tr').show();

  // Fetch all data and update the table
  fetchAllData();
}

// Event listener for the Reset button
$(document).on('click', '#Reset', function () {
  resetForm();
});

// Event listener for the Search button
$(document).on('click', '#Search', function () {
  myFunction();
});

// Document ready function
$(document).ready(function () {
  // Initialize DataTable
  $('#example').DataTable({
    columns: [
      { title: 'S.No.' },
      { title: 'Brand Name' },
      { title: 'Brand Image' },
      { title: 'Product Type' },
      { title: 'Action', orderable: false }
    ],
    paging: true,
    searching: false,
    // ... other options ...
  });

  // Initial fetch and update when the page loads
  fetchAllData();
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
  
    function removeImage(ele){
      console.log("print ele");
        console.log(ele);
        let thisId=ele.id;
        thisId=thisId.split('closeId');
        thisId=thisId[1];
        $("#"+ele.id).remove();
        $(".upload__img-closeDy"+thisId).remove();
    
      }


function resetFormFields(){
    document.getElementById("form").reset();
    document.getElementById("banner_image").value = '';
    document.getElementById("selectedImagesContainer2").innerHTML = '';
    
    // Resetting checkboxes
    var checkboxes = document.getElementsByClassName('product_type_checkbox');
    for(var i=0; i<checkboxes.length; i++){
        checkboxes[i].checked = false;
    }
}
  </script>
</body>