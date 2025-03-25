<?php
   include 'includes/headertagadmin.php';
   include 'includes/footertag.php';
   include 'includes/headertag.php';
   ?> 

<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

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
                <span>Model Listing</span>
              </li>
            </ol>
          </nav>
          <button type="button" id="add_trac" class="btn add_btn btn-success float-right btn_all" data-bs-toggle="modal"  data-bs-target="#staticBackdrop">
            <i class="fa fa-plus" aria-hidden="true"></i>Add New Model
          </button>
          <!-- Modal -->
          <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered">
              <div class="modal-content modal_box">
                <div class="modal-header modal_head">
                  <h5 class="modal-title text-white fw-bold" id="staticBackdropLabel">Add New Model</h5>
                  <button type="button" class="btn-close btn-success" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body bg-light">
                    <div class="row justify-content-center">
                        <div class="col-lg-10">
                            <form id="model_listing_form" method="POST">
                                <div class="row justify-content-center">
                                    <div class="col-6 mt-4">
                                        <div class="form-outline">
                                            <label for="brand_listing" class="form-label">Brand</label>
                                            <select class="form-select form-control py-2" value="brand_listing" for="brand_listing" id="brand_listing" aria-label="Default select example">
                                            <option value="" id="">Select Brand Name</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-6 mt-4">
                                        <div class="form-outline">
                                            <label for="model_listing" class="form-label text-dark">Model</label>
                                            <input type="text" class="form-control" placeholder=" " id="model_listing"  for="model_listing" name="model_listing">
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-12 col-lg-12 col-md-12 mt-3">
                                        <label for="name" class="text-dark fw-bold">Select Product Type</label>
                                        <div id="type_name" name="type_name" required></div>
                                    </div>
                                </div>
                            </form>
                            </div>
                        </div>
                    </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary px-3" data-bs-dismiss="modal">Close</button>
                  <button type="button" class="btn px-4 bg-success text-white" id="saveddd">Submit</button>
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
        <!-- <form action="" id="myform" class="mb-0">
          <div class="row">
            <div class="col-12 col-sm-12 col-md-8 col-lg-8"hidden>
              <div class="form-outline">
                <label class="form-label">Search By id</label>
                  <select class="js-select2 form-select form-control mb-0" id="brand_id">
                  </select>
              </div>
            </div>
            <div class="col-6 col-sm-12 col-md-4 col-lg-4">
              <div class="form-outline">
                    <label class="form-label">Search By Brand</label>
                    <select class="js-select2 form-select form-control mb-0" id="brand">
                    </select>
              </div>
               
            </div>
            <div class="col-12 col-sm-12 col-md-4 col-lg-4  text-center">
              <div class="d-flex float-end">
                <button type="button" class="btn-success btn px-5 btn_all" id="Search">Search</button>
                <button type="button" class="btn-success btn px-5 mx-2 btn_all"  id="Reset" onclick="resetForm()">Reset</button>
              </div>
                
            </div>
          </div>
        </form> -->
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
                    <th class="d-none d-md-table-cell text-white py-2">Model</th>
                    <th class="d-none d-md-table-cell text-white py-2" style="width: 100px !important;">Action</th>
                  </tr>
                </thead>
                <tbody id="data-table">
                </tbody>
              </table>
            </div>
        </div>
      </div>
    </section>
  </div>
</div>
<script>

$(document).ready(function() {
    $('#saveddd').click(storemodel);

    function storemodel(event) {
    event.preventDefault();

    var brand_id = $('#brand_listing').val();
    var model = $('#model_listing').val();
    var selectedCheckboxes = $('.product_type_checkbox:checked');
    var type_name = [];

    selectedCheckboxes.each(function () {
        type_name.push($(this).val());
    });

    console.log(type_name, "type_name"); // Debugging ke liye

    var formData = new FormData();
    formData.append('brand_id', brand_id);
    formData.append('model_name', model);

    // ✅ Instead of JSON.stringify, append each product_type_id separately
    type_name.forEach((id, index) => {
        formData.append(`product_type_id[${index}]`, id);
    });

        let urlrr = "https://shopninja.in/bharatagri/api/public/api/admin/StoreModels";
        var token = localStorage.getItem('token');
        var headers = {
            'Authorization': 'Bearer ' + token
        };

        $.ajax({
            url: urlrr,
            type: "POST",
            data: formData,
            processData: false,
            contentType: false,
            headers: headers,
            success: function(result) {
                console.log("Success:", result);
                alert('Successfully inserted..!');
                $('#staticBackdrop').modal('hide'); 

            },
            error: function(error) {
                console.error('Error:', error);
                console.error('Response Text:', error.responseText);
            }
        });
    }
});


function get_product_type(id) {
    var url = '<?php echo $APIBaseURL; ?>get_all_products_type';
    $.ajax({
        url: url,
        type: "GET",
        headers: {
            'Authorization': 'Bearer ' + localStorage.getItem('token')
        },
        success: function (data) {
            // lookup select
            console.log(data, 'ok');

            // checkbox
            $("#" + id).empty();

            for (var j = 0; j < data.getProductType.length; j++) {
                var product_type = data.getProductType[j].product_type_name;
                var product_id = data.getProductType[j].id;
                var strFirstThree = product_type.substring(0, 3);

                if (product_id !== 3 && product_id !== 5 && product_id !== 6 && product_id !== 7 && product_id !== 8 && product_type !== "HARVESTER" && product_type !== "IMPLEMENT"  && product_type !== "IMPLEMENT" && product_type !== "TYRE" && product_type !== "OIL") {
                    var checkbox = $('<input type="checkbox" class="product_type_checkbox" name="productTypes" id="tractor_type_' + product_id + '" value="' + product_id + '">');
                    var label = $('<label for="tractor_type_' + product_id + '">' + product_type + '</label>');

                    $("#" + id).append(checkbox);
                    $("#" + id).append(label);
                }
            }
        },
        complete: function () {},
        error: function (error) {
            console.error('Error fetching data:', error);
        }
    });
}


get_product_type('type_name');

function getBrands() {
    var url = "<?php echo $APIBaseURL; ?>getBrands";
  $.ajax({
      url: url,
      type: "GET",
      headers: {
          'Authorization': 'Bearer ' + localStorage.getItem('token')
      },
      success: function (data) {
          console.log(data);
          const select = document.getElementById('brand_listing');
          select.innerHTML = '<option selected disabled value="">Please select an option</option>';

          if (data.brands.length > 0) {
              data.brands.forEach(row => {
                  const option = document.createElement('option');
                  option.textContent = row.brand_name;
                  option.value = row.id;
                  select.appendChild(option);
              });

              // Add event listener to brand dropdown
              select.addEventListener('change', function() {
                  const selectedBrandId = this.value;
              
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
getBrands();
</script>