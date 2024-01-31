var EditIdmain_ = "";
var editId_state= false;
  
$(document).ready(function(){
  ImgUpload();
    getbrand();
    $('#submit_btn').on('click', function(event) {
      $("#form_tyre_list").valid();
      store(event);
      
    });
    $('#Search').click(search_data);
            
      $("#form_tyre_list").validate({
      
      rules: {
        brand: {
          required: true,
        },
        tyre:{
          required: true,
        },
        tyre_position:{
          required: true,
        },
        tyre_size:{
          required: true,
        },
        tyre_width:{
          required: true,
        },
        category:{
          required:true, 
        },
        _image:{
          required:true,
        }
      },
  
      messages:{
        brand: {
          required: "This field is required",
        },
        tyre:{
          required: "This field is required",
        },
        tyre_position: {
          required: "This field is required",
        },
        tyre_size: {
          required:"This field is required",
          maxlength:"Enter only 10 digits",
          digits: "Please enter only digits"
        },
        tyre_width:{
            required:"This field is required",
            email:"Please Enter vaild Email",
          },
        
          category: {
          required: "This field is required",
        },
        _image: {
          required: "This field is required",
        },
      },
      
      submitHandler: function (form) {
        alert("Form submitted successfully!");
      },
      });
  
    
   
      });
  
      function geteditcategory() {
        var apiBaseURL = APIBaseURL;
        var url = apiBaseURL + 'get_tyre_category';
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
    
                if (data.tyre_category.length > 0) {
                    data.tyre_category.forEach(row => {
                        const option = document.createElement('option');
                        option.textContent = row.category;
                        option.value = row.id;
                        select.appendChild(option);
                    });
                } else {
                    select.innerHTML = '<option>No valid data available</option>';
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
    
    geteditcategory();
    

      


  // get tyre brand
  function getbrand() {
    var apiBaseURL =APIBaseURL;
    var url = apiBaseURL + 'get_tyre_brands';
    $.ajax({
        url: url,
        type: "GET",  
        headers: {
            'Authorization': 'Bearer' + localStorage.getItem('token')
        },
        success: function (data) {
            console.log(data);
            const select = document.getElementById('brand1');
            // select.innerHTML = '';

            select.innerHTML = '<option selected disabled value="">Please select an option</option>';
            if (data.brands.length > 0) {
                data.brands.forEach(row => {
                    const option = document.createElement('option');
                    option.value = row.id; 
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
    

function getbrand_edit() {
  // var url = "<?php echo $APIBaseURL; ?>getBrands";
  var apiBaseURL =APIBaseURL;
  var url = apiBaseURL + 'get_tyre_brands';
  $.ajax({
      url: url,
      type: "GET",  
      headers: {
          'Authorization': 'Bearer' + localStorage.getItem('token')
      },
      success: function (data) {
          console.log(data);
          const select = document.getElementById('brand');
          // select.innerHTML = '';

          if (data.brands.length > 0) {
              data.brands.forEach(row => {
                  const option = document.createElement('option');
                  option.value = row.id; 
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
getbrand_edit();
  
    
  //****get data***
  function get_tyre_list() {
    var apiBaseURL = APIBaseURL;
    var url = apiBaseURL + 'tyre_data';
    console.log('dfghjkiuytgf');
    
    $.ajax({
        url: url,
        type: "GET",
        headers: {
            'Authorization': 'Bearer ' + localStorage.getItem('token')
        },
        success: function (data) {
          var tableBody = document.getElementById('data-table');
          let serialNumber = 1;
          let tableData = [];
  
  
            if (data.tyre_details && data.tyre_details.length > 0){
                data.tyre_details.forEach(row => {
                   // const tableRow = document.createElement('tr');
                    let action = `  <div class="d-flex">
                    <button class="btn btn-warning btn-sm text-white mx-1" data-bs-toggle="modal" onclick="fetch_data(${row.id});" data-bs-target="#exampleModal" style="padding: 5px;"><i class="fas fa-eye" style="font-size: 11px;"></i></button>
                    <button class="btn btn-primary btn-sm btn_edit" onclick="fetch_edit_data(${row.id});" data-bs-toggle="modal" data-bs-target="#staticBackdrop" id="yourUniqueIdHere" style="padding: 5px;">
                        <i class="fas fa-edit" style="font-size: 11px;"></i>
                    </button>
                    <button class="btn btn-danger btn-sm mx-1" onclick="destroy(${row.id});" style="padding: 5px;">
                        <i class="fa fa-trash" style="font-size: 11px;"></i>
                    </button>
                </div>`;
    
                    // Push row data as an array into the tableData
                    tableData.push([
                      serialNumber,
                      row.brand_name,
                      row.tyre_model,
                      row.tyre_position,
                      row.tyre_size,
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
                        { title: 'Tyre Position' },
                        { title: 'Size' },
                        { title: 'Action', orderable: false } // Disable ordering for Action column
                    ],
                      paging: true,
                      searching: false,
                      // ... other options .................
                  })
                  
            } else {
              tableBody.innerHTML = '<tr><td colspan="9">No valid data available</td></tr>';
            }
        },
        error: function (error) {
            console.error('Error fetching data:', error);
        }
    });
  }


  
  get_tyre_list();
  
  
  function store(event) {
    event.preventDefault();
    var image_names = document.getElementById('image').files;
    var brand_name = $('#brand').val();
    var tyre_model = $('#tyre').val();
    var tyre_position = $('#tyre_position').val();
    var tyre_diameter = $('#tyre_diameter').val();
    var tyre_width = $('#tyre_width').val();
    var category = $('#category').val();
    var EditIdmain_ = $('#EditIdmain_').val();
    var tyre_size = tyre_diameter + 'X' + tyre_width;
  
   
    var apiBaseURL = APIBaseURL;
    var token = localStorage.getItem('token');
    var headers = {
        'Authorization': 'Bearer ' + token
    };
    var urlParams = new URLSearchParams(window.location.search);
    var _method = 'post'; 
    var url, method;
  
    if (EditIdmain_!="" && EditIdmain_!="") {
      // Update mode
      console.log(editId_state);
      _method = 'put';
      url = apiBaseURL + 'tyre_data/' + EditIdmain_ ;
      console.log(url);
      method = 'POST'; 
  } else {
      // Add mode
      url = apiBaseURL + 'tyre_data';
      method = 'POST';
  }
    var data = new FormData();
  
    for (var x = 0; x < image_names.length; x++) {
        data.append('images[]', image_names[x]);
    }

    data.append('_method', _method);
    data.append('EditIdmain_', EditIdmain_);
    data.append('brand_id', brand_name);
    data.append('tyre_model', tyre_model);
    data.append('tyre_position', tyre_position);
    data.append('tyre_size', tyre_size);
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
        console.log('Success:', result);
        // Clear form values
        $('#brand, #tyre, #tyre_position, #tyre_size, #tyre_width, #tyre_category_id, #_image').val('');
        // window.location.reload();
        $("#staticBackdrop").modal('hide');
        var msg = "Added successfully !"
          $("#errorStatusLoading").modal('show');
          $("#errorStatusLoading").find('.modal-title').html('Success');
          $("#errorStatusLoading").find('.modal-body').html(msg);
          window.location.reload();
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
  // for image
// jQuery(document).ready(function () {
 
// });

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
  // View data
  function fetch_data(Id) {
    var apiBaseURL = APIBaseURL;
    var url = apiBaseURL + 'tyre_data/'+ Id;
  
    var headers = {
      'Authorization': 'Bearer ' + localStorage.getItem('token')
    };
  
    $.ajax({
      url: url,
      type: 'GET',
      headers: headers,
    
      success: function(response) {
        console.log("tyre data:" , response)
        var userData = response.tyre_details[0];
        document.getElementById('brand_name2').innerText=userData.brand_name;
        document.getElementById('model2').innerText=userData.tyre_model;
        document.getElementById('quantity').innerText=userData.tyre_position;
        document.getElementById('grade').innerText=userData.tyre_size;
        document.getElementById('price').innerText=userData.tyre_category_id;
        $("#selectedImagesContainer1").empty();
      
          if (userData.image_names) {
              var imageNamesArray = Array.isArray(userData.image_names) ? userData.image_names : userData.image_names.split(',');
      
              imageNamesArray.forEach(function (imageName) {
                  var imageUrl = 'http://tractor-api.divyaltech.com/uploads/tyre_img/' + imageName.trim();
      
                  var newCard = `
                      <div class="col-4 col-lg-4 col-md-4 col-sm-4">
                          <div class="brand-main d-flex box-shadow   mt-2 text-center shadow">
                              <a class="weblink text-decoration-none text-dark" title="Image">
                                  <img class="img-fluid w-100 h-100 " src="${imageUrl}" alt="Image">
                              </a>
                          </div>
                      </div>
                  `;
      
                  $("#selectedImagesContainer1").append(newCard);
              });
          }
      },
      error: function(error) {
        console.error('Error fetching user data:', error);
      }
    });
  }
  
   // edit data 
  
   function fetch_edit_data(id) {
    var apiBaseURL = APIBaseURL;
    var url = apiBaseURL + 'tyre_data/'+ id;
    console.log(url);
  
    var headers = {
        'Authorization': 'Bearer ' + localStorage.getItem('token')
    };
  
    $.ajax({
        url: url,
        type: 'GET',
        headers: headers,
        success: function (response) {
            var Data = response.tyre_details[0];
            $('#EditIdmain_').val(Data.id);
            $("#brand option").prop("selected", false);
            $("#brand option[value='" + Data.brand_id+ "']").prop("selected", true);
    
            // $('#brand').val(Data.brand_name);
            $('#tyre').val(Data.tyre_model);
            $('#tyre_position').val(Data.tyre_position);
            $('#category').val(Data.tyre_category_id);
            var tyreSize = Data.tyre_size;
            // Split the string based on 'X'
            var tyreSizeParts = tyreSize.split('X');
            // Set the values in respective input fields
            $('#tyre_diameter').val(tyreSizeParts[0]); 
            $('#tyre_width').val(tyreSizeParts[1]);

            $("#selectedImagesContainer").empty();
      
            if (Data.image_names) {
                var imageNamesArray = Array.isArray(Data.image_names) ? Data.image_names : Data.image_names.split(',');
                var countclass = 0;
                imageNamesArray.forEach(function (imageName) {
                    var imageUrl = 'http://tractor-api.divyaltech.com/uploads/tyre_img/' + imageName.trim();
                    countclass++;
                    var newCard = `
                    <div class="col-12 col-md-4 col-lg-4 position-relative" style="left:6px;">
                    <div class="upload__img-close_button " id="closeId${countclass}" onclick="removeImage(this);"></div>
                    <div class="brand-main d-flex box-shadow mt-1 py-2 text-center shadow upload__img-closeDy${countclass}">
                        <a class="weblink text-decoration-none text-dark" title="Image">
                            <img class="img-fluid w-100 h-100" src="${imageUrl}" alt="Image">
                         </a>
                     </div>
                 </div>
                    `;
        
                    $("#selectedImagesContainer").append(newCard);
                });
            }
            
        },
        error: function (error) {
            console.error('Error fetching user data:', error);
        }
    });
  }
  
 
  
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
  
  
  function resetFormFields() {
    $('#brand').val('');
    $('#tyre').val('');
    $('#tyre_position').val('');
    $('#category').val('');
    $('#tyre_diameter').val('');
    $('#tyre_width').val('');
    $('#selectedImagesContainer').val('');
    $('#EditIdmain_').val('');
  } 


  // search data
  function search_data() {  
    var selectedBrand = $('#brand1').val();
    var search_position = $('#search_position').val();
    var paraArr = {
      'brand_id': selectedBrand,
      'tyre_position':search_position,
    };
  
    var apiBaseURL = APIBaseURL;
    var url = apiBaseURL + 'search_for_tyre';
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
    var tableBody = document.getElementById('data-table');
          let serialNumber = 1;
          let tableData = [];
  
  
            if (data.tyreData && data.tyreData.length > 0){
                data.tyreData.forEach(row => {
                   // const tableRow = document.createElement('tr');
                    let action = `  <div class="d-flex">
                    <button class="btn btn-warning btn-sm text-white mx-1" data-bs-toggle="modal" onclick="fetch_data(${row.id});" data-bs-target="#exampleModal" style="padding: 5px;"><i class="fas fa-eye" style="font-size: 11px;"></i></button>
                    <button class="btn btn-primary btn-sm btn_edit" onclick="fetch_edit_data(${row.id});" data-bs-toggle="modal" data-bs-target="#staticBackdrop" id="yourUniqueIdHere" style="padding: 5px;">
                        <i class="fas fa-edit" style="font-size: 11px;"></i>
                    </button>
                    <button class="btn btn-danger btn-sm mx-1" onclick="destroy(${row.id});" style="padding: 5px;">
                        <i class="fa fa-trash" style="font-size: 11px;"></i>
                    </button>
                </div>`;
    
                    // Push row data as an array into the tableData
                    tableData.push([
                      serialNumber,
                      row.brand_name,
                      row.tyre_model,
                      row.tyre_position,
                      row.tyre_size,
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
                        { title: 'Tyre Position' },
                        { title: 'Size' },
                        { title: 'Action', orderable: false } // Disable ordering for Action column
                    ],
                      paging: true,
                      searching: false,
                      // ... other options .................
                  })
                  
            } else {
              tableBody.innerHTML = '<tr><td colspan="9">No valid data available</td></tr>';
            }
  }

function resetform(){
  
  $("#brand1").val("");
  $("#search_position").val("");
  
  
  get_tyre_list();
  
}

   