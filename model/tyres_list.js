var EditIdmain_ = "";
var editId_state= false;
  $(document).ready(function () {
    $('#subbnt').click(tyre_add);
    $('.btn_edit').click(function() {
      var rowId = $(this).data('row-id');
      fetch_edit_data(rowId);
  });
    ImgUpload();
    // Initialize form validation on the form_news_updates form
    $("#form_tyre_list").validate({
        // Specify validation rules
        rules: {
          brand: {
            required: true,
          },
          tyre: {
            required: true,
          },
          tyre_position: {
            required: true,
          },
          tyre_size: {
            required: true,
            digits: true,
          },
          _image: {
            required: true,
          },
          tyre_width:{
            required: true,
            digits: true,
          },
          tyre_diameter:{
            required: true,
            digits: true,
          },
          category:{
            required: true,
          }
        },
        // Specify validation error messages
        messages: {
          brand: {
            required: "This field is required",
          },
          tyre: {
            required: "This field is required",
          },
          tyre_position: {
            required: "This field is required",
          },
          tyre_size: {
            required: "This field is required",
            digits: "Please enter only digits"
          },
          _image: {
            required:"This field is required",
          },
          tyre_width:{
            required:"This field is required",
            digits: "Please enter only digits"
          },
          tyre_diameter:{
            required:"This field is required",
            digits: "Please enter only digits"
          },
          category:{
            required:"This field is required",
          }
  
         
        },
        
        submitHandler: function (form) {
          alert("Form submitted successfully!");
        },
      });
  
     
      $("#subbnt").on("click", function () {
     
        $("#form_tyre_list").valid();
        if ($("#form_tyre_list").valid()) {
          
          alert("Form is valid. Ready to submit!");
        }
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

  // *****brand select*****//
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

// *****select category*****//
function get_category() {
  // var apiBaseURL = APIBaseURL;
  var url = "http://tractor-api.divyaltech.com/api/customer/get_tyre_category";
  $.ajax({
    url: url,
    type: "GET",
    headers: {
      'Authorization': 'Bearer ' + localStorage.getItem('token')
    },
    success: function (data) {
      console.log(data);
      const select = document.getElementById('category');
      select.innerHTML = '<option selected disabled value="">Please select an option</option>';

      if (data.tyre_category && data.tyre_category.length > 0) {
        data.tyre_category.forEach(row => {
          const option = document.createElement('option');
          option.value = row.id;
          option.textContent = row.category;
          select.appendChild(option);
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
get_category();



  // function tyre_add(event){
  //   event.preventDefault();
  //   console.log('run store function');
  //      var image_names = document.getElementById('_image').files;
  //      console.log('imgds',image_names);
  //      var brand = $('#brand').val();
  //      console.log(brand);
  //     var tyre_model = $('#tyre_model').val();
  //     var tyre_position = $('#tyre_position').val();
  //     var tyre_size = $('#tyre_size').val();
  //     var tyre_diameter = $('#tyre_diameter').val();
  //     var tyre_width = $('#tyre_width').val();
  //     var category = $('#category').val();
      
  //     console.log("brand_id",brand);
  //     console.log("tyre category id",category);
      
  //      var apiBaseURL =APIBaseURL;
  //      var url = apiBaseURL + 'tyre_data';
  //      var token = localStorage.getItem('token');
  //      var headers = {
  //        'Authorization': 'Bearer ' + token
  //      };
  //      var data = new FormData();
      
  //      for (var x = 0; x < image_names.length; x++) {
  //        data.append("images[]", image_names[x]);
  //        console.log("multiple image", image_names[x]);
  //      }
  //        data.append('brand_id',brand);
  //        data.append('tyre_model', tyre_model);
  //        data.append('tyre_position', tyre_position);
  //        data.append('tyre_size', tyre_size);
  //        data.append('tyre_diameter', tyre_diameter);
  //        data.append('tyre_width', tyre_width);
  //        data.append('tyre_category_id', category);
        
  //      $.ajax({
  //        url: url,
  //        type: "POST",
  //        data: data,
  //        headers: headers,
  //        processData: false, 
  //        contentType: false,
  //        success: function (result) {
  //          console.log(result, "result");
  //          // getTractorList();
  //          console.log("Add successfully");
  //           if(result.length){
  //          }
  //          // alert('successfully inserted..!')
  //        },
  //        error: function (error) {
  //          console.error('Error fetching data:', error);
  //        }
  //      });
  // }


  function tyre_add(event) {
    // event.preventDefault();

    var image_names = document.getElementById('_image').files;
    var brand = $('#brand').val();
    var tyre_model = $('#tyre_model').val();
    var tyre_position = $('#tyre_position').val();
    var tyre_size = $('#tyre_size').val();
    var tyre_diameter = $('#tyre_diameter').val();
    var tyre_width = $('#tyre_width').val();
    var category = $('#category').val();

    var apiBaseURL = APIBaseURL;
    var token = localStorage.getItem('token');
    var headers = {
        'Authorization': 'Bearer ' + token
    };

    // Check if an ID is present in the URL, indicating edit mode
    var urlParams = new URLSearchParams(window.location.search);
    var editId = urlParams.get('id');
    console.log("editId from URL:", editId);
    var url, method;
    console.log('edit state',editId_state);
    console.log('edit id', editId);

    if (editId_state) {
      console.log(editId);
        // Update mode
        url = apiBaseURL + 'tyre_data?id=' + EditIdmain_; 
        console.log(url);
        method = 'PUT';
    } else {
        // Add mode
        url = apiBaseURL + 'tyre_data';
        console.log('prachi');
        method = 'POST';
    }

    var data = new FormData();

    for (var x = 0; x < image_names.length; x++) {
        data.append("images[]", image_names[x]);
    }

    data.append('brand_id', brand);
    data.append('tyre_model', tyre_model);
    data.append('tyre_position', tyre_position);
    data.append('tyre_size', tyre_size);
    data.append('tyre_diameter', tyre_diameter);
    data.append('tyre_width', tyre_width);
    data.append('tyre_category_id', category);

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


//****get data***
function get_tyre_list() {
  var apiBaseURL = APIBaseURL;
  var url = apiBaseURL + 'tyre_data';
  $.ajax({
      url: url,
      type: "GET",
      headers: {
          'Authorization': 'Bearer' + localStorage.getItem('token')
      },
      success: function (data) {
          const tableBody = document.getElementById('data-table');
          let serialNumber = 1;

          if (data.tyre_details && data.tyre_details.length > 0){
              data.tyre_details.forEach(row => {
                  const tableRow = document.createElement('tr');
                  tableRow.innerHTML = `
                      <td>${serialNumber}</td>
                      <td>${row.brand_name}</td>
                      <td>${row.tyre_model}</td>
                      <td>${row.tyre_position}</td>
                      <td>${row.tyre_size}</td>
                      <td>
                          <div class="d-flex">
                              <button class="btn btn-warning btn-sm text-white mx-1" data-bs-toggle="modal" onclick="fetch_data(${row.id});" data-bs-target="#exampleModal"><i class="fas fa-eye" style="font-size: 11px;"></i></button>
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
              tableBody.innerHTML = '<tr><td colspan="7">No valid data available</td></tr>';
          }
      },
      error: function (error) {
          console.error('Error fetching data:', error);
      }
  });
}
get_tyre_list();

//****delete data***
function destroy(id) {
  var apiBaseURL = APIBaseURL;
  var url = apiBaseURL + 'tyre_data/' + id;
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
      // get_tyre_list();
      window.location.reload();
      console.log("Delete request successful");
      alert("Delete operation successful");
    },
    error: function(error) {
      console.error('Error fetching data:', error);
      alert("Error during delete operation");
    }
  });
}

function fetch_edit_data(id) {
  var apiBaseURL = APIBaseURL;
  var url = apiBaseURL + 'tyre_data/' + id;
  editId_state= true;
  EditIdmain_= id;

  var headers = {
      'Authorization': 'Bearer ' + localStorage.getItem('token')
  };

  $.ajax({
      url: url,
      type: 'GET',
      headers: headers,
      success: function (response) {
          var Data = response.tyre_details[0];

          $('#brand').val(Data.brand_name);
          $('#tyre').val(Data.tyre_model);
          $('#tyre_size').val(Data.tyre_size);
          $('#tyre_position').val(Data.tyre_position);
          var selectedCategoryId = Data.tyre_category_id;
          $('#category').val(selectedCategoryId).prop('selected', true);

          // Clear existing images
          // $("#selectedImagesContainer").empty();

          // if (Data.image_names) {
          //     // Check if Data.image_names is an array
          //     var imageNamesArray = Array.isArray(Data.image_names) ? Data.image_names : Data.image_names.split(',');

          //     imageNamesArray.forEach(function (imageName) {
          //         var imageUrl = 'http://tractor-api.divyaltech.com/uploads/tyre_img/' + imageName.trim();
          $("#selectedImagesContainer1").empty();

          if (Data.image_names) {
    var imageNamesArray = Array.isArray(Data.image_names) ? Data.image_names : Data.image_names.split(',');

    imageNamesArray.forEach(function (image_names) {
        var imageUrl = 'http://tractor-api.divyaltech.com/uploads/tyre_img/' + image_names.trim();

                  var newCard = `
                      <div class="col-6 col-lg-6 col-md-6 col-sm-6 position-relative">
                      <div class="background__img-close"></div>
                          <div class="brand-main d-flex box-shadow mt-2 text-center shadow">
                              <a class="weblink text-decoration-none text-dark" title="Tyre Image">
                                  <img class="img-fluid w-100 h-100 upload__inputfile" src="${imageUrl}" alt="Tyre Image">
                              </a>
                          </div>
                      </div>
                    
                      
                  `;

                  // Append the new image element to the container
                  $("#selectedImagesContainer1").append(newCard);
              });
          }
      },
      error: function (error) {
          console.error('Error fetching user data:', error);
      }
  });
}

function fetch_data(id) {
  console.log(id, "id");
  console.log(window.location);
  var urlParams = new URLSearchParams(window.location.search);

  var productId = id;
  var apiBaseURL = APIBaseURL;
  var url = apiBaseURL + 'tyre_data/' + productId;

  var headers = {
      'Authorization': 'Bearer ' + localStorage.getItem('token')
  };

  $.ajax({
      url: url,
      type: "GET",
      headers: headers,
      success: function (data) {
        console.log(data, 'abc');
        document.getElementById('brand_name2').innerText = data.tyre_details[0].brand_name;
        document.getElementById('model2').innerText = data.tyre_details[0].tyre_model;
        document.getElementById('quantity').innerText = data.tyre_details[0].tyre_position;
        document.getElementById('grade').innerText = data.tyre_details[0].tyre_size;
        document.getElementById('price').innerText = data.tyre_details[0].category;
    
        // $("#selectedImagesContainer1").empty();
    
        // if (data.tyre_details[0].image_names) {
        //     var imageNamesArray = Array.isArray(data.tyre_details[0].image_names) ? data.tyre_details[0].image_names : data.tyre_details[0].image_names.split(',');
    
        //     imageNamesArray.forEach(function (imageName) {
        //         var imageUrl = 'http://tractor-api.divyaltech.com/uploads/tyre_img/' + imageName.trim();
    
        //         var newCard = `
        //             <div class="col-6 col-lg-6 col-md-6 col-sm-6">
        //                 <div class="brand-main d-flex box-shadow   mt-2 text-center shadow">
        //                     <a class="weblink text-decoration-none text-dark" title="Tyre Image">
        //                         <img class="img-fluid w-100 h-100 " src="${imageUrl}" alt="Tyre Image">
        //                     </a>
        //                 </div>
        //             </div>
        //         `;
        $("#selectedImagesContainer").empty();

        if (data.tyre_details[0].image_names) {
  var imageNamesArray = Array.isArray(data.tyre_details[0].image_names) ? data.tyre_details[0].image_names : data.tyre_details[0].image_names.split(',');

  imageNamesArray.forEach(function (imageName) {
      var imageUrl = 'http://tractor-api.divyaltech.com/uploads/tyre_img/' + imageName.trim();

                var newCard = `
                    <div class="col-6 col-lg-6 col-md-6 col-sm-6 position-relative">
                    <div class="background__img-close"></div>
                        <div class="brand-main d-flex box-shadow mt-2 text-center shadow">
                            <a class="weblink text-decoration-none text-dark" title="Tyre Image">
                                <img class="img-fluid w-100 h-100 upload__inputfile" src="${imageUrl}" alt="Tyre Image">
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




function resetFormFields() {
  $('#_image').val('');
  $('#brand').val('');
  $('#tyre_model').val('');
  $('#tyre_position').val('');
  $('#tyre_size').val('');
  $('#tyre_diameter').val('');
  $('#tyre_width').val('');
  $('#category').val('');
}