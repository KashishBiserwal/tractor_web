$(document).ready(function () {
  $('.js-example-basic-multiple').select2({
    dropdownParent: $('#myModal')
    
  });
  $('#subbnt').click(engineOil_add);
  $('.btn_edit').click(function() {
    var rowId = $(this).data('row-id');
    fetch_edit_data(rowId);
});
    ImgUpload();
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
        }
        // _image:{
        //   required:true,
        //   minlength: 2,
        //   maxlength: 5,
       
        // }
       
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
        }
        // _image:{
        //   required:"This field is required",
        //   minlength: "Please upload at least 2 images",
        //   maxlength: "Maximum 5 images allowed",
        // }
      },
      submitHandler: function (form) {
        alert("Form submitted successfully!");
      },
    });

    $("#submit_btn").on("click", function () {
      $("#engine_oil_form").valid();
    });
  });
  $('#submit_btn').click(store);

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

  function store(event) {
    event.preventDefault();

    var image_names = document.getElementById('_image').files;
    var dealer_name = $('#dname').val();
    var brand = $('#brand').val();
    var email = $('#email').val();
    var cno = $('#cno').val();
    var address = $('#address').val();
    var state = $('#state_').val();
    var district = $('#dist').val();
    var tehsil = $('#tehsil').val();

    var apiBaseURL = APIBaseURL;
    var token = localStorage.getItem('token');
    var headers = {
        'Authorization': 'Bearer ' + token
    };

    // Check if an ID is present in the URL, indicating edit mode
    var urlParams = new URLSearchParams(window.location.search);
    var editId = urlParams.get('id');
    var _method = 'post'; 
    var url, method;
    
    console.log('edit state',editId_state);
    console.log('edit id', EditIdmain_);
    if (editId_state) {
        // Update mode
        console.log(editId_state);
        _method = 'put';
        url = apiBaseURL + 'dealer_data/' + EditIdmain_ ;
        console.log(url);
        method = 'POST'; 
    } else {
        // Add mode
        url = apiBaseURL + 'dealer_data';
        method = 'POST';
    }

    var data = new FormData();

    for (var x = 0; x < image_names.length; x++) {
        data.append("images[]", image_names[x]);
    }

    data.append('_method', _method);
    data.append('dealer_name', dealer_name);
    data.append('brand_id', brand);
    data.append('email', email);
    data.append('mobile', cno);
    data.append('address', address);
    data.append('state', state);
    data.append('district', district);
    data.append('tehsil', tehsil);

    $.ajax({
        url: url,
        type: method,
        data: data,
        headers: headers,
        processData: false,
        contentType: false,
        success: function (result) {
            console.log(result, "result");
            console.log("Operation successfully");
            // window.location.reload();
        },
        error: function (error) {
            console.error('Error:', error);
        }
    });

}



function engineOil_add() {
  var apiBaseURL = APIBaseURL;
  var url = apiBaseURL + 'engine_oil';
  $.ajax({
      url: url,
      type: "GET",
      headers: {
          'Authorization': 'Bearer ' + localStorage.getItem('token')
      },
      success: function (data) {
          const tableBody = document.getElementById('data-table');
          let serialNumber = 1;

          if (data.engine_oil_details && data.engine_oil_details.length > 0) {
              data.engine_oil_details.forEach(row => {
                  const tableRow = document.createElement('tr');
                  tableRow.innerHTML = `
                      <td>${serialNumber}</td>
                      <td>${row.brand_name}</td>
                      <td>${row.oil_model}</td>
                      <td>${row.quantity}</td>
                      <td>
                          <div class="d-flex">
                          <button class="btn btn-warning btn-sm text-white mx-1" data-bs-toggle="modal" onclick="fetch_data(${row.id});" data-bs-target="#exampleModal">
                        <i class="fa-solid fa-eye" style="font-size: 11px;"></i></button>
                              <button class="btn btn-primary btn-sm btn_edit" onclick="fetch_edit_data(${row.id});" data-bs-toggle="modal" data-bs-target="#staticBackdrop_model" id="yourUniqueIdHere">
                                  <i class="fas fa-edit" style="font-size: 11px;"></i>
                              </button>
                              <button class="btn btn-danger btn-sm mx-1" onclick="destroy(${row.id});">
                                  <i class="fa fa-trash" style="font-size: 11px;"></i>
                              </button>
                          </div>
                      </td>
                  `;
                  tableBody.appendChild(tableRow);
                  serialNumber++;
              });
          } else {
              tableBody.innerHTML = '<tr><td colspan="9">No valid data available</td></tr>';
          }
      },
      error: function (error) {
          console.error('Error fetching data:', error);
      }
  });
}
engineOil_add();

function get_brand() {
  // var url = "<?php echo $APIBaseURL; ?>getBrands";
  var apiBaseURL =APIBaseURL;
  var url = apiBaseURL + 'getBrands';
  $.ajax({
      url: url,
      type: "GET",
      headers: {
          'Authorization': 'Bearer ' + localStorage.getItem('token')
      },
      success: function (data) {
          console.log(data);
          const select = document.getElementById('brand');
          // select.innerHTML = '';

          if (data.brands.length > 0) {
              data.brands.forEach(row => {
                  const option = document.createElement('option');
                  option.value = row.id; // You might want to set a value for each option
                  option.textContent = row.brand_name;
                  select.appendChild(option);
              });
          } else {
              select.innerHTML ='<option>No valid data available</option>';
          }
      },
      error: function (error) {
          console.error('Error fetching data:', error);
      }
  });
}
get_brand();

// **delete***
function destroy(id) {
  var apiBaseURL = APIBaseURL;
  var url = apiBaseURL + 'engine_oil/' + id;
  console.log(url);
  var token = localStorage.getItem('token');

  if (!token) {
    console.error("Token is missing");
    return;
  }
  var isConfirmed = confirm("Are you sure you want to delete this data?");
  if (!isConfirmed) {
    return;
  }

  $.ajax({
    url: url,
    type: "DELETE",
    headers: {
      'Authorization': 'Bearer ' + token
    },
    success: function(result) {
      get_tractor_list();
      console.log("Delete request successful");
      alert("Delete operation successful");
    },
    error: function(error) {
      console.error('Error fetching data:', error);
      alert("Error during delete operation");
    }
  });
}

//*** edit ***//
// fetch edit data

function fetch_edit_data(product_id) {
  var apiBaseURL = APIBaseURL;
  var url = apiBaseURL + 'get_old_tractor_by_id/'+ product_id;

  var headers = {
    'Authorization': 'Bearer ' + localStorage.getItem('token')
  };

  $.ajax({
    url: url,
    type: 'GET',
    headers: headers,
    success: function(response) {
      var userData = response.product[0];

      // $('#enquiry_type_id1').val(userData.brand_name);
      $('#image_type_id1').val(userData.image_type_id);
      $('#tractor_type_id1').val(userData.tractor_type_id);
      $('#form_type1').val(userData.form_type);
      $('#first_name1').val(userData.first_name);
      $('#last_name1').val(userData.last_name);

      

      // $('#exampleModal').modal('show');
    },
    error: function(error) {
      console.error('Error fetching user data:', error);
    }
  });
}
//***view ***/
function fetch_data(id) {
  console.log(id, "id");
  console.log(window.location);
  var urlParams = new URLSearchParams(window.location.search);

  var productId = id;
  var apiBaseURL = APIBaseURL;
  var url = apiBaseURL + 'engine_oil/' + productId;

  var headers = {
      'Authorization': 'Bearer ' + localStorage.getItem('token')
  };

  $.ajax({
      url: url,
      type: "GET",
      headers: headers,
      success: function (data) {
        console.log(data, 'abc');
        document.getElementById('brand_name2').innerText = data.engine_oil_details[0].brand_name;
        document.getElementById('model2').innerText = data.engine_oil_details[0].oil_model;
        document.getElementById('quantity').innerText = data.engine_oil_details[0].quantity;
        document.getElementById('grade').innerText = data.engine_oil_details[0].grade;
        document.getElementById('price').innerText = data.engine_oil_details[0].price;
        document.getElementById('compatible').innerText = data.engine_oil_details[0].compatible_model;
        document.getElementById('descrption').innerText = data.engine_oil_details[0].description;
    
        $("#selectedImagesContainer").empty();
    
        if (data.engine_oil_details[0].image_names) {
            var imageNamesArray = Array.isArray(data.engine_oil_details[0].image_names) ? data.engine_oil_details[0].image_names : data.engine_oil_details[0].image_names.split(',');
    
            imageNamesArray.forEach(function (imageName) {
                var imageUrl = 'http://tractor-api.divyaltech.com/uploads/engine_oil_img/' + imageName.trim();
    
                var newCard = `
                    <div class="col-6 col-lg-6 col-md-6 col-sm-6">
                        <div class="brand-main d-flex box-shadow mt-2 text-center shadow">
                            <a class="weblink text-decoration-none text-dark" title="Tyre Image">
                                <img class="img-fluid w-100 h-100" src="${imageUrl}" alt="Tyre Image">
                            </a>
                        </div>
                    </div>
                `;
    
                $("#selectedImagesContainer").append(newCard);
            });
        }
    },
      error: function (error) {
          console.error('Error fetching data:', error);
      }
  });
}

