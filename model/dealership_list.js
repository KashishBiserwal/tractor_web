$(document).ready(function () {
    $('#subbtn_').click(add_dealership);
    ImgUpload();
    $("#dealer_list_form").validate({
    
      rules: {
        dname: {
          required: true,
        },
        brand: {
          required: true,
        },
        email:{
          required:true,
         email:true
        },
        cno:{
            required:true,
            maxlength:10,
            digits: true,
            customPhoneNumber: true
        },
        address:{
          required:true,
        //   digits: true,

        },
        state_:{
          required: true,
        },
        dist: {
          required: true,
        }
      },
  
      messages: {
        dname: {
          required: "This field is required",
        },
        brand: {
          required: "This field is required",
        },
      
        email:{
          required:"This field is required",
          email:"Please Enter vaild Email",
        },
         cno:{
          required:"This field is required",
          maxlength:"Enter only 10 digits",
          digits: "Please enter only  digits"
        },
        address:{
          required:"This field is required",
        //   digits: "Please enter only digits"
        },
        state_:{
          required: "This field is required",
        },
        dist: {
          required: "This field is required",
        }
      },
      
      submitHandler: function (form) {
        alert("Form submitted successfully!");
      },
    });

   
    $("#subbtn_").on("click", function () {
   
      $("#dealer_list_form").valid();
  
    });
   
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


  function get() {
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
            select.innerHTML = '<option selected disabled value="">Please select an option</option>';

            if (data.brands.length > 0) {
                data.brands.forEach(row => {
                    const option = document.createElement('option');
                    option.textContent = row.brand_name;
                    option.value = row.id;
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
get();

function add_dealership(event) {
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

    var url, method;

    if (editId) {
        // Update mode
        console.log(editId);
        url = apiBaseURL + 'dealer_data?id=' + editId; 
        console.log(url);
        method = 'PUT';
    } else {
        // Add mode
        url = apiBaseURL + 'dealer_data';
        method = 'POST';
    }

    var data = new FormData();

    for (var x = 0; x < image_names.length; x++) {
        data.append("images[]", image_names[x]);
    }

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
            window.location.reload();
        },
        error: function (error) {
            console.error('Error:', error);
        }
    });

}

// get dealers
function get_dealers() {
    var apiBaseURL = APIBaseURL;
    var url = apiBaseURL + 'dealer_data';
    $.ajax({
        url: url,
        type: "GET",
        headers: {
            'Authorization': 'Bearer ' + localStorage.getItem('token')
        },
        success: function (data) {
            const tableBody = document.getElementById('data-table');
            let serialNumber = 1;
  
            if (data.dealer_details && data.dealer_details.length > 0) {
                data.dealer_details.forEach(row => {
                    const tableRow = document.createElement('tr');
                    tableRow.innerHTML = `
                        <td>${serialNumber}</td>
                        <td>${row.created_at}</td>
                        <td>${row.brand_name}</td>
                        <td>${row.mobile}</td>
                        <td>${row.state}</td>
                        <td>${row.district}</td>
                        <td>
                            <div class="d-flex">
                            <button class="btn btn-warning btn-sm text-white mx-1" data-bs-toggle="modal" onclick="fetch_data(${row.id});" data-bs-target="#view_model_dealers">
                            <i class="fa-solid fa-eye" style="font-size: 11px;"></i></button>
                                <button class="btn btn-primary btn-sm btn_edit" onclick="fetch_edit_data(${row.id});" data-bs-toggle="modal" data-bs-target="#staticBackdrop" id="yourUniqueIdHere">
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
  get_dealers();


  // **delete***
function destroy(id) {
    var apiBaseURL = APIBaseURL;
    var url = apiBaseURL + 'dealer_data/' + id;
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
        window.location.reload();
        get_dealers();

        console.log("Delete request successful");
        alert("Delete operation successful");
      },
      error: function(error) {
        console.error('Error fetching data:', error);
        alert("Error during delete operation");
      }
    });
  }

  //   for View
  function fetch_data(id) {
    console.log(id, "id");
    console.log(window.location);
    var urlParams = new URLSearchParams(window.location.search);
  
    var productId = id;
    var apiBaseURL = APIBaseURL;
    var url = apiBaseURL + 'dealer_data/' + productId;
  
    var headers = { 
        'Authorization': 'Bearer ' + localStorage.getItem('token')
    };
  
    $.ajax({
        url: url,
        type: "GET",
        headers: headers,
        success: function (data) {
          console.log(data, 'abc');
          document.getElementById('dealer_name').innerText = data.dealer_details[0].dealer_name;
          document.getElementById('brand_nmae').innerText = data.dealer_details[0].brand_name;
          document.getElementById('email_id').innerText = data.dealer_details[0].email;
          document.getElementById('contact').innerText = data.dealer_details[0].mobile;
          document.getElementById('state').innerText =data.dealer_details[0].state;
          document.getElementById('district').innerText = data.dealer_details[0].district;
          document.getElementById('tehsil_').innerText = data.dealer_details[0].tehsil;
          document.getElementById('addrss').innerText = data.dealer_details[0].address;
      
          $("#selectedImagesContainer").empty();
      
          if (data.dealer_details[0].image_names) {
              var imageNamesArray = Array.isArray(data.dealer_details[0].image_names) ? data.dealer_details[0].image_names : data.dealer_details[0].image_names.split(',');
      
              imageNamesArray.forEach(function (imageName) {
                  var imageUrl = 'http://tractor-api.divyaltech.com/uploads/dealers_img/' + imageName.trim();
      
                  var newCard = `
                      <div class="col-6 col-lg-6 col-md-6 col-sm-6">
                          <div class="brand-main d-flex box-shadow   mt-2 text-center shadow">
                              <a class="weblink text-decoration-none text-dark" title="Tyre Image">
                                  <img class="img-fluid w-100 h-100 " src="${imageUrl}" alt="Tyre Image">
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

  function fetch_edit_data(id) {
    var apiBaseURL = APIBaseURL;
    var url = apiBaseURL + 'dealer_data/' + id;
    console.log(url);
  
    var headers = {
        'Authorization': 'Bearer ' + localStorage.getItem('token')
    };
  
    $.ajax({
        url: url,
        type: 'GET',
        headers: headers,
        success: function (response) {
            var Data = response.dealer_details[0];
            $('#dname').val(Data.dealer_name);
            $('#brand').val(Data.brand_name);
            $('#email').val(Data.email);
            $('#cno').val(Data.mobile);
            $('#address').val(Data.address);
            $('#state_').val(Data.state);
            $('#dist').val(Data.district);
            $('#tehsil').val(Data.tehsil);
  
            // Clear existing images
            $("#selectedImagesContainer").empty();
  
            if (Data.image_names) {
                // Check if Data.image_names is an array
                var imageNamesArray = Array.isArray(Data.image_names) ? Data.image_names : Data.image_names.split(',');
  
                imageNamesArray.forEach(function (imageName) {
                    var imageUrl = 'http://tractor-api.divyaltech.com/uploads/dealers_img/' + imageName.trim();
  
                    var newCard = `
                        <div class="col-6 col-lg-6 col-md-6 col-sm-6">
                            <div class="brand-main d-flex box-shadow mt-2 text-center shadow">
                                <a class="weblink text-decoration-none text-dark" title="Image">
                                    <img class="img-fluid w-100 h-100" src="${imageUrl}" alt=" Image">
                                </a>
                            </div>
                        </div>
                    `;
                    // Append the new image element to the container
                    $("#selectedImagesContainer").append(newCard);
                });
            }
        },
        error: function (error) {
            console.error('Error fetching user data:', error);
        }
    });
  }