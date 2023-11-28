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
              <table id="example" class="table dataTable no-footer py-1" width="100%">
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
      
    
</div>
</div>


<?php
   include 'includes/footertag.php';
   ?> 
   <script>
     $(document).ready(function() {
      BackgroundUpload();
      $('#save').click(store);
    });
    // store data
  function store(event) {
    event.preventDefault();
    console.log('jfhfhw');
    var brand_name = document.getElementById('brand_name').value;
        var brand_img = document.getElementById('brand_img').files[0]; // Use files[0] to access the selected file
        var formData = new FormData(); // Create a FormData object to send the file

        formData.append('brand_name', brand_name, );
        formData.append('brand_img', brand_img);

    // Define the URL where you want to send the data
    var url = "<?php echo $APIBaseURL; ?>storeBrands";
    console.log(url);

    // You may need to include headers, but you should ensure they are properly configured
    var token = localStorage.getItem('token');
    var headers = {
      'Authorization': 'Bearer ' + token
    };

    // Make an AJAX request to the server
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
          // console.log(data);
            const tableBody = document.getElementById('data-table');
            tableBody.innerHTML = ''; // Clear previous data

            

            if (data.brands.length > 0) {
          console.log(typeof data.brands);

                // Loop through the data and create table rows
                data.brands.map(row => {
                  console.log(row);
                    const tableRow = document.createElement('tr');
                    tableRow.innerHTML = `
                        <td>${row.id}</td>
                        <td>${row.brand_name}</td>
                        <td>${row.brand_img}</td>
                        <td><div class="d-flex"><button class="btn btn-danger btn-sm mx-1" id="delete_user" onclick="destroy(${row.id});"><i class="fa fa-trash" style="font-size: 11px;"></i></button></div></td>
                    `;
                    tableBody.appendChild(tableRow);
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

// delete
function destroy(id) {
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