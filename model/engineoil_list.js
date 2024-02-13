$(document).ready(function () {
  get('brand1');
  
  $('#engine_oil_btn').click(edit_user);
  
  $('#submit_btn').on('click', function(event) {
    store(event);
});
$('#add_trac').on('click', function() {
  get('brand');
});
  $('.js-example-basic-multiple').select2({
    dropdownParent: $('#myModal')
    
  });
  $('.js-example-basic-multiple2').select2({
    dropdownParent: $('#myModal2')
    
  });
  $('#subbnt').click(engineOil_add);
  $('.btn_edit').click(function() {
    var rowId = $(this).data('row-id');
    fetch_edit_data(rowId);
});
    //ImgUpload();
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
        },
        _image:{
          required:true,
        }
       
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
        },
        _image:{
          required:"This field is required",
        }
      },
      submitHandler: function (form) {
        var msg = "Form submitted successfully!"
        $("#errorStatusLoading").modal('show');
        $("#errorStatusLoading").find('.modal-title').html('Success');
        $("#errorStatusLoading").find('.modal-body').html(msg);
      },
    });

    $("#submit_btn").on("click", function () {
      $("#engine_oil_form").valid();
    });

    $("#engine_oil_form_1").validate({
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
        },
        _image:{
          required:true,
        }
       
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
        },
        _image:{
          required:"This field is required",
        }
      },
      submitHandler: function (form) {
        var msg = "Form submitted successfully!"
        $("#errorStatusLoading").modal('show');
        $("#errorStatusLoading").find('.modal-title').html('Success');
        $("#errorStatusLoading").find('.modal-body').html(msg);
      },
    });

    $("#engine_oil_btn").on("click", function () {
      $("#engine_oil_form_1").valid();
    });
  });
 
  
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
          let tableData = [];

          if (data.engine_oil_details && data.engine_oil_details.length > 0) {
              data.engine_oil_details.forEach(row => {
                //  const tableRow = document.createElement('tr');
                let action = `   <div class="d-flex">
                <button class="btn btn-warning btn-sm text-white mx-1" data-bs-toggle="modal" onclick="fetch_data(${row.id});" data-bs-target="#exampleModal" style="padding:5px">
              <i class="fa-solid fa-eye" style="font-size: 11px;"></i></button>
                    <button class="btn btn-primary btn-sm btn_edit" onclick="fetch_edit_data(${row.id});" data-bs-toggle="modal" data-bs-target="#staticBackdrop_1" id="yourUniqueIdHere" style="padding:5px">
                        <i class="fas fa-edit" style="font-size: 11px;"></i>
                    </button>
                    <button class="btn btn-danger btn-sm mx-1" onclick="destroy(${row.id});" style="padding:5px">
                        <i class="fa fa-trash" style="font-size: 11px;"></i>
                    </button>
                </div>`;

                // Push row data as an array into the tableData
                tableData.push([
                  serialNumber,
                  row.brand_name,
                  row.oil_model,
                  row.quantity,
                  action
              ]);

              serialNumber++;
          });

          // Initialize DataTable after preparing the tableData
          $('#example').DataTable().destroy();
          $('#example').DataTable({
                  data: tableData,
                  columns: [
                    { title: 'S.No.' },
                    { title: 'Brand' },
                    { title: 'Model Name' },
                    { title: 'Quantity' },
                    { title: 'Action', orderable: false } // Disable ordering for Action column
                ],
                  paging: true,
                  searching: false,
                  // ... other options ...
              });
         
          } else {
              tableBody.innerHTML = '<tr><td colspan="9">No valid data available</td></tr>';
          }
      },
      error: function (error) {
          console.error('Error fetching data:', error);
          var msg = error;
          $("#errorStatusLoading").modal('show');
          $("#errorStatusLoading").find('.modal-title').html('Error');
          $("#errorStatusLoading").find('.modal-body').html(msg);
      }
  });
}
engineOil_add();

// function get_engine_oil() {
//   // var url = "<?php echo $APIBaseURL; ?>getBrands";
//   var apiBaseURL =APIBaseURL;
//   var url = apiBaseURL + 'engine_oil';
//   console.log(url);

//   $.ajax({
//       url: url,

//       type: "GET",
//       headers: {
//           'Authorization': 'Bearer ' + localStorage.getItem('token')

//       },
//       success: function (data) {
//           console.log(data);
//           const select = document.getElementById('brand');
//           // select.innerHTML = '';

//           if (data.engine_oil_details.length > 0) {
//               data.engine_oil_details.forEach(row => {
//                   const option = document.createElement('option');
//                   option.value = row.id; // You might want to set a value for each option
//                   option.textContent = row.brand_name;
//                   select.appendChild(option);
//               });
//           } else {
//               select.innerHTML ='<option>No valid data available</option>';
//           }
//       },
//       error: function (error) {
//           console.error('Error fetching data:', error);
//       }
//   });
// }
// get_engine_oil();
function get(selectId) {
  var apiBaseURL =APIBaseURL;
  var url = apiBaseURL + 'get_brand_by_product_id/' + 7;
  $.ajax({
      url: url,
      type: "GET",
      headers: {
          'Authorization': 'Bearer ' + localStorage.getItem('token')
      },
      success: function (data) {
          console.log(data);
          const select = document.getElementById(selectId);
        
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
          var msg = error;
          $("#errorStatusLoading").modal('show');
          $("#errorStatusLoading").find('.modal-title').html('Error');
          $("#errorStatusLoading").find('.modal-body').html(msg);
      }
  });
}


// add data
function store(event) {
  event.preventDefault();

 var compatibleModel =[];
 $("#ass_list option:selected").each(function(){
  var value = $(this).val();
  if($.trim(value)){
    compatibleModel.push(value);
  }
});

  var image_names = document.getElementById('_image').files;
  var brand_name = $('#brand').val();
  var model_name = $('#model').val();
  var grade = $('#grade').val();
  var qualtity = $('#qualtity').val();
  var price = $('#price').val();
  var ass =  JSON.stringify(compatibleModel);
  console.log("model select : ",compatibleModel);
  var description = $('#textarea_').val();


  var apiBaseURL = APIBaseURL;
  var url = apiBaseURL + 'engine_oil';
  var token = localStorage.getItem('token');

  var headers = {
      'Authorization': 'Bearer ' + token
  };

  var data = new FormData();

  for (var x = 0; x < image_names.length; x++) {
      data.append('images[]', image_names[x]);
  }

  data.append('brand_id', brand_name);
  data.append('oil_model', model_name);
  data.append('grade', grade);
  data.append('quantity', qualtity);
  data.append('price', price);
  data.append('compatible_model', ass);
  data.append('description', description);

  $.ajax({
    url: url,
    type: "POST",
    data: data,
    headers: headers,
    processData: false,
    contentType: false,
    success: function (result) {
      console.log('Success:', result);
      // Clear form values
      $('#brand, #model, #grade, #qualtity, #price, #textarea_, #_image, #ass_list').val('');
      // window.location.reload();
      $("#staticBackdrop").modal('hide');
      engineOil_add();
      var msg = "Added successfully !"
        $("#errorStatusLoading").modal('show');
        $("#errorStatusLoading").find('.modal-title').html('Success');
        $("#errorStatusLoading").find('.modal-body').html(msg);
    },
    error: function (error) {
      console.error('Error:', error);
      var msg = error;
      $("#errorStatusLoading").modal('show');
      $("#errorStatusLoading").find('.modal-title').html('Error');
      $("#errorStatusLoading").find('.modal-body').html(msg);
    }
  });
}

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
      // get_tractor_list();
      engineOil_add();
      console.log("Delete request successful");
      var msg = "Deleted successfully !"
        $("#errorStatusLoading").modal('show');
        $("#errorStatusLoading").find('.modal-title').html('Success');
        $("#errorStatusLoading").find('.modal-body').html(msg);
    },
    error: function(error) {
      console.error('Error fetching data:', error);
      var msg = error;
      $("#errorStatusLoading").modal('show');
      $("#errorStatusLoading").find('.modal-title').html('Error');
      $("#errorStatusLoading").find('.modal-body').html(msg);
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
        document.getElementById('grade11').innerText = data.engine_oil_details[0].grade;
        document.getElementById('price_11').innerText = data.engine_oil_details[0].price;
        var compatibleModel = data.engine_oil_details[0].compatible_model;
        document.getElementById('compatible').innerText = Array.isArray(compatibleModel) ? compatibleModel.join(', ') : compatibleModel || 'N/A';
        document.getElementById('descrption').innerText = data.engine_oil_details[0].description;
    
        $("#selectedImagesContainer1").empty();
    
        if (data.engine_oil_details[0].image_names) {
            var imageNamesArray = Array.isArray(data.engine_oil_details[0].image_names) ? data.engine_oil_details[0].image_names : data.engine_oil_details[0].image_names.split(',');
    
            imageNamesArray.forEach(function (imageName) {
                var imageUrl = 'http://tractor-api.divyaltech.com/uploads/engine_oil_img/' + imageName.trim();
    
                var newCard = `
                    <div class="col-6 col-lg-4 col-md-4 col-sm-4">
                        <div class="brand-main d-flex box-shadow mt-2 text-center shadow">
                            <a class="weblink text-decoration-none text-dark" title="Tyre Image">
                                <img class="img-fluid w-100 h-100" src="${imageUrl}" alt="Tyre Image">
                            </a>
                        </div>
                    </div>
                `;
    
                $("#selectedImagesContainer1").append(newCard);
            });
        }
    },
      error: function (error) {
          console.error('Error fetching data:', error);
          var msg = error;
          $("#errorStatusLoading").modal('show');
          $("#errorStatusLoading").find('.modal-title').html('Error');
          $("#errorStatusLoading").find('.modal-body').html(msg);
      }
      
  });
}


// for image
jQuery(document).ready(function () {
  ImgUpload();
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
    console.log(ele);
    let thisId=ele.id;
    thisId=thisId.split('closeId');
    thisId=thisId[1];
    $("#"+ele.id).remove();
    $(".upload__img-closeDy"+thisId).remove();

  }

function fetch_edit_data(id) {
  get('brand_1');
  var apiBaseURL = APIBaseURL;
  var url = apiBaseURL + 'engine_oil/' + id;
  console.log(url);

    var headers = {
        'Authorization': 'Bearer ' + localStorage.getItem('token')
    };

    $.ajax({
      url: url,
      type: 'GET',
      headers: headers,
      success: function (response) {
          var Data = response.engine_oil_details [0];
          $('#idUser').val(Data.id);
          console.log(Data.brand_name,"Data.brand_name");
          var brandName = Data.brand_name.trim(); // Remove leading/trailing spaces if any

          // Loop through the options to find and select the matching one
          $('#brand_1 option').each(function() {
            var optionText = $(this).text().trim();
        
            if (optionText === brandName) {
                $(this).prop('selected', true);
                return false;
            }
        });
          $('#model_1').val(Data.oil_model);
          $('#grade_1').val(Data.grade);
          $('#qualtity_1').val(Data.quantity);
          $('#price_1').val(Data.price);
          var compatibleModels = JSON.parse(Data.compatible_model);

          // Loop through each value in the compatible_model array
          if (Array.isArray(compatibleModels)) {
              compatibleModels.forEach(function(model) {
                  // Loop through each option in the multiselect field
                  $('#ass_list_1 option').each(function() {
                      var optionValue = $(this).val();
                      // If the option value matches the model value, mark it as selected
                      if (optionValue === model) {
                          $(this).prop('selected', true);
                      }
                  });
              });
          }
          
          // Trigger change event to update the multiselect field display
          $('#ass_list_1').trigger('change');
          // $('#ass_list_1').val(Data.compatible_model);
          $('#textarea_1').val(Data.description);

          $("#selectedImagesContainer2").empty();
  
          if (Data.image_names) {
              // Check if Data.image_names is an array
              var imageNamesArray = Array.isArray(Data.image_names) ? Data.image_names : Data.image_names.split(',');
              var countclass=0;
              imageNamesArray.forEach(function (imageName) {
                  var imageUrl = 'http://tractor-api.divyaltech.com/uploads/engine_oil_img/' + imageName.trim();
                  countclass++;
                  var newCard = `
                      <div class="col-6 col-lg-6 col-md-6 col-sm-6 position-relative">
                      <div class="upload__img-close_button" id="closeId${countclass}" onclick="removeImage(this);"></div>
                          <div class="brand-main d-flex box-shadow mt-2 text-center shadow upload__img-closeDy${countclass}">
                          <input type="text" class="fetched_class_edit" value="${imageName}" hidden>
                              <a class="weblink text-decoration-none text-dark" title="Image">
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
      error: function (error) {
          console.error('Error fetching user data:', error);
          var msg = error;
          $("#errorStatusLoading").modal('show');
          $("#errorStatusLoading").find('.modal-title').html('Error');
          $("#errorStatusLoading").find('.modal-body').html(msg);
      }
  });
}

function edit_user(id){
  console.log(id);
  var edit_id = $("#idUser").val();
  var image_names = document.getElementById('_image1').files;
  var brand = $('#brand_1').val();
  var model = $('#model_1').val();
  var grade = $('#grade_1').val();
  var qualtity = $('#qualtity_1').val();
  var price = $('#price_1').val();
  var ass = JSON.stringify($('#ass_list_1').val());
  var description = $('#textarea_1').val();
 

  var apiBaseURL = APIBaseURL;
  var url = apiBaseURL + 'engine_oil/' + edit_id;
  var token = localStorage.getItem('token');
  var _method = 'put';
  var headers = {
      'Authorization': 'Bearer ' + token
  };

  var data = new FormData();

  for (var x = 0; x < image_names.length; x++) {
      data.append('images[]', image_names[x]);
  }
  data.append('_method', _method);
  data.append('id',edit_id)
  data.append('brand_id', brand);
  data.append('oil_model', model);
  data.append('grade', grade);
  data.append('quantity', qualtity);
  data.append('price', price);
  data.append('compatible_model',ass);
  data.append('description', description);
  var compatibleModel =[];


  $.ajax({
      url: url,
      type: "POST",
      data: data,
      headers: headers,
      processData: false,
      contentType: false,
       success: function (result) {
         console.log(result, "result");
        //  get();
       // window.location.reload();
         console.log("updated successfully");
         $("#staticBackdrop_1").modal('hide');
         var msg = "Updated successfully !"
        $("#errorStatusLoading").modal('show');
        $("#errorStatusLoading").find('.modal-title').html('Success');
        $("#errorStatusLoading").find('.modal-body').html(msg);
        engineOil_add();
       },
       error: function (error) {
         console.error('Error fetching data:', error);
         $("#staticBackdrop_1").modal('hide');
         var msg = error;
         $("#errorStatusLoading").modal('show');
         $("#errorStatusLoading").find('.modal-title').html('Error');
         $("#errorStatusLoading").find('.modal-body').html(msg);
       }
   })
 }
 
 function search_data() {
  var selectedBrand = $('#brand1').val();
  var brand_id = $('#brand_id').val();
  var model = $('#model1').val();
  var paraArr = {
    'brand_id': selectedBrand,
    'id':brand_id,
    'model':model,
  };

  var apiBaseURL = APIBaseURL;
  var url = apiBaseURL + 'search_for_engine_oil';
  $.ajax({
      url:url, 
      type: 'POST',
      data: paraArr,
    
      headers: {
          'Authorization': 'Bearer ' + localStorage.getItem('token')
      },
      success: function (searchData) {
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
 

  if(data.engineOilData && data.engineOilData.length > 0) {
      let tableData = []; 
      let serialNumber = 1; 
      data.engineOilData.forEach(row => {
          let action = `<div class="d-flex">
          <button class="btn btn-warning btn-sm text-white mx-1" data-bs-toggle="modal" onclick="fetch_data(${row.id});" data-bs-target="#exampleModal" style="padding:5px">
            <i class="fa-solid fa-eye" style="font-size: 11px;"></i>
          </button>
          <button class="btn btn-primary btn-sm btn_edit" onclick="fetch_edit_data(${row.id});" data-bs-toggle="modal" data-bs-target="#staticBackdrop_1" id="yourUniqueIdHere" style="padding:5px">
            <i class="fas fa-edit" style="font-size: 11px;"></i>
          </button>
          <button class="btn btn-danger btn-sm mx-1" onclick="destroy(${row.id});" style="padding:5px">
            <i class="fa fa-trash" style="font-size: 11px;"></i>
          </button>
          </div>`;

          tableData.push([
            serialNumber,
            row.brand_name,
            row.oil_model,
            row.quantity,
            action
        ]);

        serialNumber++;
    });

    // Initialize DataTable after preparing the tableData
    $('#example').DataTable().destroy();
    $('#example').DataTable({
            data: tableData,
            columns: [
              { title: 'S.No.' },
              { title: 'Brand' },
              { title: 'Model Name' },
              { title: 'Quantity' },
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

function resetform(){
  $('#brand1').val('');
  $('#model1').val('');
  engineOil_add();
}