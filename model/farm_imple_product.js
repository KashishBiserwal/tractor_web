var EditIdmain_ = "";
var editId_state= false;
var id= "";
$(document).ready(function() {
    $('#save').click(store);
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
// get category in select box
function get() {
    var apiBaseURL = APIBaseURL;
    var url = apiBaseURL + 'get_implement_category';
    $.ajax({
        url: url,
        type: "GET",
        headers: {
            'Authorization': 'Bearer ' + localStorage.getItem('token')
        },
        success: function (data) {
            const select = document.getElementById('lookupSelectbox');
            select.innerHTML = ''; // Clear previous data
            $(select).append('<option selected disabled value="">Please select Category</option>');

            if (data.allCategory.length > 0) {
                data.allCategory.forEach(row => {
                    const option = document.createElement('option');
                    option.textContent = row.category_name;
                    option.value = row.id;
                    select.appendChild(option);
                });
                select.addEventListener('change', function() {
                    const selectedBrandId = this.value;
                    get_subcategory(selectedBrandId);
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
// get subcategory in select box
function get_subcategory(id) {
    var apiBaseURL = APIBaseURL;
    var url = apiBaseURL + 'get_implement_sub_cat_by_category_id/'+ id;
    // var url= 'http://tractor-api.divyaltech.com/api/customer/get_implement_sub_cat_by_category_id/'+ id;
    http://tractor-api.divyaltech.com/api/customer/implement_sub_category_by_id/12
    
    $.ajax({
        url: url,
        type: "GET",
        headers: {
            'Authorization': 'Bearer ' + localStorage.getItem('token')
        },
        success: function (data) {
            const select = document.getElementById('lookupSelectbox2');
            select.innerHTML = ''; // Clear previous data
            $(select).append('<option selected disabled value="">Please select Category</option>');

            if (data.implementSubCategoryData.length > 0) {
                data.implementSubCategoryData.forEach(row => {
                    const option = document.createElement('option');
                    option.textContent = row.sub_category_name;
                    option.value = row.id;
                    select.appendChild(option);
                });
                select.addEventListener('change', function() {
                    const selectedsubId = this.value;
                    get_subcategory_custom(selectedsubId);
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

// getc all custom data of sub category
function get_subcategory_custom(id){
    var apiBaseURL = APIBaseURL;
    var url = 'http://tractor-api.divyaltech.com/api/customer/implement_sub_category_by_id/' + id;
    console.log(url);
    editId_state= true;
    id= id;

    var headers = {
        'Authorization': 'Bearer ' + localStorage.getItem('token')
    };

    $.ajax({
        url: url,
        type: 'GET',
        headers: headers,
        success: function (response) {
            $('#two_field').hide(); // Correct selector

            var Data = response.allSubCategory;
            // var Data2 = response.allSubCategory;
            $('#idUser').val(Data.implement_sub_category[0].id);
            $("#lookupSelectbox option").prop("selected", false);
            $("#lookupSelectbox option[value='" + Data.implement_sub_category[0].category_name + "']").prop("selected", true);
            $('#lookup_data_value').val(Data.implement_sub_category[0].sub_category_name);

            var tableData = $("#fields");
            tableData.html('');

            Data.custom_data.forEach(function (p, index) {
                var tableRow = `
                    <div class="row form_field_outer_row">
                        <div class="form-group col-md-4">
                            <input type="text" class="form-control w_90" name="mobileb_no[]" value="${p.custom_column_name}" id="mobileb_no_${index + 1}" readOnly />
                        </div>
                        <div class="form-group col-md-4">
                            <input type="text" class="form-control" name="no_type[]" id="no_type_${index + 1}" placeholder="Enter Value" aria-invalid="false" value="${p.implement_column_name}"  readOnly/>
                        </div>
                        <div class="form-group col-md-4">
                            <input type="text" class="form-control" name="custome[]" id="custom_${index + 1}" placeholder="Enter Value" aria-invalid="false" value="" />
                        </div>
                        
                    </div>
                `;
                tableData.append(tableRow);
            });

            // Enable all delete buttons
            

            // Add event listener for delete buttons
            $(".remove_node_btn_frm_field").on("click", function () {
                var indexToDelete = $(this).data("index");
                console.log("Deleting field with ID: " + indexToDelete);
            });
            $(".delete").prop("disabled", false);

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

get();

// get brand and model
function get_brand() {
    var url = "http://tractor-api.divyaltech.com/api/customer/get_brand_by_product_id/" + 6;
    // var url = 'http://tractor-api.divyaltech.com/api/customer/get_all_brands/'+ 6;
    $.ajax({
        url: url,
        type: "GET",
        headers: {
            'Authorization': 'Bearer ' + localStorage.getItem('token')
        },
        success: function (data) {
            const selects = document.querySelectorAll('#brand_main');
  
            selects.forEach(select => {
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
                        get_model(selectedBrandId);
                    });
                } else {
                    select.innerHTML = '<option>No valid data available</option>';
                }
            });
        },
        error: function (error) {
            console.error('Error fetching data:', error);
        }
    });
  }
  
  function get_model(brand_id) {
    var url = 'http://tractor-api.divyaltech.com/api/customer/get_brand_model/' + brand_id;
    $.ajax({
        url: url,
        type: "GET",
        headers: {
            'Authorization': 'Bearer ' + localStorage.getItem('token')
        },
        success: function (data) {
            const selects = document.querySelectorAll('#model_main');
  
            selects.forEach(select => {
                select.innerHTML = '<option selected disabled value="">Please select an option</option>';
  
                if (data.model.length > 0) {
                    data.model.forEach(row => {
                        const option = document.createElement('option');
                        option.textContent = row.model;
                        option.value = row.model;
                        console.log(option);
                        select.appendChild(option);
                    });
                } else {
                    select.innerHTML = '<option>No valid data available</option>';
                }
            });
        },
        error: function (error) {
            console.error('Error fetching data:', error);
        }
    });
  }
  
  get_brand(); 

// store data
function store(event) {
  event.preventDefault();

  var customDataArray = [];
  var implementDataArray = [];
  var DataArray = [];

  // Assuming you have multiple elements with IDs like 'mobileb_no_1', 'mobileb_no_2', etc.
  $('[id^="mobileb_no_"]').each(function () {
      customDataArray.push($(this).val());
  });

  // Assuming you have multiple elements with IDs like 'no_type_1', 'no_type_2', etc.
  $('[id^="no_type_"]').each(function () {
      implementDataArray.push($(this).val());
  });

  $('[id^="custom_"]').each(function () {
      DataArray.push($(this).val());
  });

  var customDataJson = JSON.stringify(customDataArray);
  var implementDataJson = JSON.stringify(implementDataArray);
  var DataArrayJson = JSON.stringify(DataArray);

  var brand_id = $('#brand_main').val();
  var model_main = $('#model_main').val();
  var lookup_type = $('#lookupSelectbox').val();
  var lookup_data_value = $('#lookupSelectbox2').val();
  var id = $('#idUser').val();
  // var image_names = $('#image_name').files[0]; 
  var image_names = document.getElementById('image_name').files;

  var apiBaseURL = APIBaseURL;
  var url = apiBaseURL + 'implement_details';

  var token = localStorage.getItem('token');
  var headers = {
      'Authorization': 'Bearer ' + token
  };
  
    // var urlParams = new URLSearchParams(window.location.search);
    //   id = urlParams.get('id');
      // console.log("editId from URL:", editId_stateedit);
    //   _method = 'POST';
    //   var url, method;
    //   console.log('edit state', id);
    //   var _method = 'post'; 
  
    //   if (id !== '' && id !== null) {
    //     // Update mode
    //     _method = 'put';
    //     url = apiBaseURL + 'implement_sub_category/' + id;
    //     console.log(url);
    //     method = 'POST'; 
    //   } else {
    //     url = apiBaseURL + 'implement_details';
    //     console.log('prachi');
    //     method = 'POST';
    //   }
  
    var data = new FormData();
    for (var i = 0; i < DataArray.length; i++) {
      data.append('CUSTOM_' + (i + 1), DataArray[i]);
  }
    for (var x = 0; x < image_names.length; x++) {
        data.append("thumbnail[]", image_names[x]);
        console.log("multiple image", image_names[x]);
      }
    data.append('id', id);
    data.append('brand_id', brand_id);
    data.append('model', model_main);
    data.append('implements_category_id', lookup_type);
    data.append('implement_sub_category_id', lookup_data_value);
    // data.append('custom_data', customDataJson);
    // data.append('implement_data', implementDataJson);
    // data.append('customDataJson', customDataJson);
    // data.append('thumbnail', image);
    // data.append('_method', _method);
  
    $.ajax({
      url: url,
      type: 'POST',
      data: data,
      headers: headers,
      processData: false,
      contentType: false,
      success: function(result) {
        console.log(result, "result");
        console.log("Add successfully");
        var msg = "Added successfully !"
        $("#errorStatusLoading").modal('show');
        $("#errorStatusLoading").find('.modal-title').html('Success');
        $("#errorStatusLoading").find('.modal-body').html(msg);
  
        // Hide the modal immediately
        $("#staticBackdrop1").modal('hide');
        // get_data();
       
        var alertConfirmation = confirm("Data added successfully. Do you want to reload the page?");
        if (alertConfirmation) {
          window.location.reload();
        }
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

  // get data in table
  function get_product() {
    var apiBaseURL = APIBaseURL;
    var url = apiBaseURL + 'implement_details';
    $.ajax({
        url: url,
        type: "GET",
        headers: {
            'Authorization': 'Bearer ' + localStorage.getItem('token')
        },
        success: function (data) {
            const tableBody = document.getElementById('data-table');

            if (data.getAllImplements && data.getAllImplements.length > 0) {
                let tableData = [];
                let counter = data.getAllImplements.length;

                data.getAllImplements.forEach(row => {
                    let action = `
                        <div class="d-flex">
                          <button class="btn btn-warning btn-sm text-white mx-1" data-bs-toggle="modal" onclick="fetch_data(${row.id});" data-bs-target="#exampleModal">
                            <i class="fa-solid fa-eye" style="font-size: 11px;"></i></button>
                          <button class="btn btn-primary btn-sm btn_edit" onclick="fetch_edit_data(${row.id});" data-bs-toggle="modal" data-bs-target="#staticBackdrop" id="yourUniqueIdHere">
                            <i class="fas fa-edit" style="font-size: 11px;"></i>
                          </button>
                          <button class="btn btn-danger btn-sm mx-1" onclick="destroy(${row.id});">
                            <i class="fa fa-trash" style="font-size: 11px;"></i>
                          </button>
                        </div>`;

                    tableData.push([
                        counter--,
                        row.category_name,
                        row.sub_category_name,
                        row.brand_name,
                        row.model,
                        action
                    ]);

                });

                $('#example').DataTable().destroy();
                $('#example').DataTable({
                    data: tableData,
                    columns: [
                        { title: 'S.No.' },
                        { title: 'Category Name' },
                        { title: 'Subcategory Name' },
                        { title: 'Brand' },
                        { title: 'Model' },
                        { title: 'Action', orderable: false }
                    ],
                    paging: true,
                    searching: true,
                });
            } else {
                tableBody.innerHTML = '<tr><td colspan="6">No valid data available</td></tr>';
            }
        },
        error: function (error) {
            console.error('Error fetching data:', error);
        }
    });
}

get_product();
