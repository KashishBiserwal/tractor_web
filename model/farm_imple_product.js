var EditIdmain_ = "";
var editId_state = false;
var id = "";
$(document).ready(function () {
    $('#save').click(store);
    ImgUpload();  
    $('#search').click(search_data);
    $("#Reset").click(function () {
  
      $("#seach_subcat1").val("");
      $("#seach_subcat").val("");
      $("#brand_main").val("");
      get_product();
      
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
                select.addEventListener('change', function () {
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
    var url = apiBaseURL + 'get_implement_sub_cat_by_category_id/' + id;

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
                select.addEventListener('change', function () {
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
function get_subcategory_custom(id) {
    var apiBaseURL = APIBaseURL;
    var url = 'http://tractor-api.divyaltech.com/api/customer/implement_sub_category_by_id/' + id;
    console.log(url);
    editId_state = true;
    id = id;

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
                            <input type="text" class="form-control" name="custome[]" id="custom_${index + 1}" placeholder="Enter Value" aria-invalid="false" value="" required/>
                        </div>
                        
                    </div>
                `;

                tableData.append("<form>" + tableRow + "</form>");
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

function get_search() {
    var apiBaseURL = APIBaseURL;
    var url = apiBaseURL + 'get_implement_category';
    $.ajax({
        url: url,
        type: "GET",
        headers: {
            'Authorization': 'Bearer ' + localStorage.getItem('token')
        },
        success: function (data) {
            const select = document.getElementById('seach_subcat1'); // Corrected selector
            select.innerHTML = ''; // Clear previous data
            $(select).append('<option selected disabled value="">Please select Category</option>');

            if (data.allCategory.length > 0) {
                data.allCategory.forEach(row => {
                    const option = document.createElement('option');
                    option.textContent = row.category_name;
                    option.value = row.id;
                    select.appendChild(option);
                });
                select.addEventListener('change', function () {
                    const selectedCategoryId = this.value; // Corrected variable name
                    get_subcategory_search(selectedCategoryId);
                });
                
            } else {
                select.innerHTML = '<option>No valid data available</option>';
            }
        },
        error: function (error) {
            console.error('Error fetching data:', error);
            var msg = error.responseText; // Use responseText to get error message
            $("#errorStatusLoading").modal('show');
            $("#errorStatusLoading").find('.modal-title').html('Error');
            $("#errorStatusLoading").find('.modal-body').html(msg);
        }
    });
}

// get subcategory in select box
function get_subcategory_search(id) {
    var apiBaseURL = APIBaseURL;
    var url = apiBaseURL + 'get_implement_sub_cat_by_category_id/' + id;

    $.ajax({
        url: url,
        type: "GET",
        headers: {
            'Authorization': 'Bearer ' + localStorage.getItem('token')
        },
        success: function (data) {
            const select = document.getElementById('seach_subcat'); // Corrected selector
            select.innerHTML = ''; // Clear previous data
            $(select).append('<option selected disabled value="">Please select Subcategory</option>'); // Corrected placeholder text

            if (data.implementSubCategoryData.length > 0) {
                data.implementSubCategoryData.forEach(row => {
                    const option = document.createElement('option');
                    option.textContent = row.sub_category_name;
                    option.value = row.id;
                    select.appendChild(option);
                });
               
            } else {
                select.innerHTML = '<option>No valid data available</option>';
            }
        },
        error: function (error) {
            console.error('Error fetching data:', error);
            var msg = error.responseText; // Use responseText to get error message
            $("#errorStatusLoading").modal('show');
            $("#errorStatusLoading").find('.modal-title').html('Error');
            $("#errorStatusLoading").find('.modal-body').html(msg);
        }
    });
}

get_search();

// get brand and model
function get_brand() {
    var url = "http://tractor-api.divyaltech.com/api/customer/get_brand_by_product_id/" + 6;
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
    var model_main = $('#model').val();
    var lookup_type = $('#lookupSelectbox').val();
    var lookup_data_value = $('#lookupSelectbox2').val();
    var id = $('#idUser').val();
    // var image_names = $('#image_name').files[0]; 
    var image_names = document.getElementById('image_name').files;

    var apiBaseURL = APIBaseURL;
    // var url = apiBaseURL + 'implement_details';

    var token = localStorage.getItem('token');
    var headers = {
        'Authorization': 'Bearer ' + token
    };

    // var urlParams = new URLSearchParams(window.location.search);
    //   id = urlParams.get('id');
    // console.log("editId from URL:", editId_stateedit);
      _method = 'POST';
      var url, method;
      var _method = 'post'; 

      if (id !== '' && id !== null) {
        // Update mode
        _method = 'put';
        url = apiBaseURL + 'implement_details/' + id;
        console.log(url);
        method = 'POST'; 
      } else {
        url = apiBaseURL + 'implement_details';
        console.log('prachi');
        method = 'POST';
      }

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
    data.append('_method', _method);

    $.ajax({
        url: url,
        type: method,
        data: data,
        headers: headers,
        processData: false,
        contentType: false,
        success: function (result) {
            console.log(result, "result");
            console.log("Add successfully");
            var msg = "Added successfully !"
            $("#errorStatusLoading").modal('show');
            $("#errorStatusLoading").find('.modal-title').html('Success');
            $("#errorStatusLoading").find('.modal-body').html(msg);

            // Hide the modal immediately
            $("#staticBackdrop1").modal('hide');
            // get_data();

            // var alertConfirmation = confirm("Data added successfully. Do you want to reload the page?");
            // if (alertConfirmation) {
            //     window.location.reload();
            // }
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
                          <button class="btn btn-warning btn-sm text-white mx-1" data-bs-toggle="modal" onclick="fetch_data(${row.product_id});" data-bs-target="#exampleModal">
                            <i class="fa-solid fa-eye" style="font-size: 11px;"></i></button>
                          <button class="btn btn-primary btn-sm btn_edit" onclick="fetch_edit_data(${row.product_id});" data-bs-toggle="modal" data-bs-target="#staticBackdrop" id="yourUniqueIdHere">
                            <i class="fas fa-edit" style="font-size: 11px;"></i>
                          </button>
                          <button class="btn btn-danger btn-sm mx-1" onclick="destroy(${row.product_id});">
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


// view data by id

function fetch_data(userId) {
    var apiBaseURL = APIBaseURL;
    var url = apiBaseURL + 'get_implement_details_by_id/' + userId; // Use the userId parameter

    var headers = {
        'Authorization': 'Bearer ' + localStorage.getItem('token')
    };

    $.ajax({
        url: url,
        type: 'GET',
        headers: headers,
        success: function (response) {
            var userData = response.getAllImplementsById[0].implements_data[0];
            document.getElementById('category_view').innerText = userData.category_name;
            document.getElementById('subcategory_view').innerText = userData.sub_category_name;
            document.getElementById('brand_view').innerText = userData.brand_name;
            document.getElementById('model_view').innerText = userData.model;
            var implementDataContainer = $("#implementData");
            implementDataContainer.html('');
            if (response.getAllImplementsById[1][0].implement_custom_data && response.getAllImplementsById[1][0].implement_custom_data.length > 0) {
                response.getAllImplementsById[1][0].implement_custom_data.forEach(function (data) {
                    for (var key in data) {
                        var newCard1 = `
                            <div class="col-12 col-lg-4 col-md-4 col-sm-4">
                                <div class="text-center shadow">
                                    <p class="py-2">${key}: ${data[key]}</p>
                                </div>
                            </div>
                        `;
                        implementDataContainer.append(newCard1);
                    }
                });
            }

            var productContainer = $("#thumbnail");
            $("#thumbnail").empty();

            if (response.getAllImplementsById[0].implements_data[0].image_names && response.getAllImplementsById[0].implements_data[0].image_names.length > 0) {
                response.getAllImplementsById[0].implements_data[0].image_names.forEach(function (imageName) {
                    var newCard = `
                        <div class="col-6 col-lg-6 col-md-6 col-sm-6">
                            <div class="brand-main box-shadow mt-2 text-center shadow ">
                                <a class="weblink text-decoration-none text-dark" title="Old Tractors">
                                    <img class="img-fluid w-50" src="http://tractor-api.divyaltech.com/uploads/product_img/${imageName}"
                                        data-src="h" alt="Brand Logo">
                                </a>
                            </div>
                        </div>
                    `;
                    // Append the new card to the container
                    productContainer.append(newCard);
                });
            }

            // Handle implement_custom_data
            // var implementDataContainer = $("#implementData");
            // implementDataContainer.html('');

            // if (response.getAllImplementsById[1].implement_custom_data && response.getAllImplementsById[1].implement_custom_data.length > 0) {
            //     response.getAllImplementsById[1].implement_custom_data.forEach(function (data) {
            //         for (var key in data) {
            //             if (data.hasOwnProperty(key)) {
            //                 var newElement = '<p>' + key + ': ' + data[key] + '</p>';
            //                 implementDataContainer.append(newElement);
            //             }
            //         }
            //     });
            // }
        },
        error: function (error) {
            console.error('Error fetching user data:', error);
        }
    });
}
// fetch edit data
function fetch_edit_data(id) {
    var apiBaseURL = APIBaseURL;
    var url = apiBaseURL + 'get_implement_details_by_id/' + id;
    editId_state = true;
    id = id;

    var headers = {
        'Authorization': 'Bearer ' + localStorage.getItem('token')
    };

    $.ajax({
        url: url,
        type: 'GET',
        headers: headers,
        success: function (response) {
            var userData = response.getAllImplementsById[0].implements_data[0];
            $("#lookupSelectbox").replaceWith(`
    <div class="form-outline">
        <label for="lookupSelectbox" class="form-label">Category</label>
        <input type="text" class="form-control py-2" value="${userData.category_name}" id="lookupSelectbox" aria-label="Category" readonly>
    </div>
`);

// Set sub_category_name to #lookupSelectbox2 dropdown
$("#lookupSelectbox2").replaceWith(`
    <div class="form-outline">
        <label for="lookupSelectbox2" class="form-label">Sub-Category</label>
        <input type="text" class="form-control py-2" value="${response.getAllImplementsById[0].implements_data[0].sub_category_name}" id="lookupSelectbox2" aria-label="Sub-Category" readonly>
    </div>
`);
            $('#two_field').hide(); // Correct selector
           

            // Set product_id to #idUser input
            $('#idUser').val(userData.product_id);
            
            // Set brand_name to #model input
            $('#model').val(userData.model);
            
            // Set brand_name to #brand_main dropdown
            $("#brand_main option").prop("selected", false);
            $("#brand_main option[value='" + userData.brand_name + "']").prop("selected", true);
            
            // Set category_name to #lookupSelectbox dropdown
           
            

            var tableData = $("#fields");
            tableData.html('');

            if (response.getAllImplementsById[1][0].implement_custom_data && response.getAllImplementsById[1][0].implement_custom_data.length > 0) {
                response.getAllImplementsById[1][0].implement_custom_data.forEach(function (p, index) {

                    var customColumnName = Object.keys(p)[0];
                    var implementColumnName = p[customColumnName];
                    var customColumndata= Object.keys(p)[0];
                    var implementColumn = p[customColumndata];
                    

                    var tableRow = `
                        <div class="row form_field_outer_row">
                            <div class="form-group col-md-4">
                                <input type="text" class="form-control w_90" name="mobileb_no[]" value="${customColumnName}" id="mobileb_no_${index + 1}" readOnly />
                            </div>
                            <div class="form-group col-md-4">
                                <input type="text" class="form-control" name="no_type[]" id="no_type_${index + 1}" placeholder="Enter Value" aria-invalid="false" value="${implementColumnName}" readOnly/>
                            </div>
                            <div class="form-group col-md-4">
                            <input type="text" class="form-control" name="custome[]" id="custom_${index + 1}" placeholder="Enter Value" aria-invalid="false" value="${customColumndata}" required/>
                        </div>
                           
                        </div>
                    `;
                    tableData.append(tableRow);
                });
            }

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

// delete data
function destroy(id) {
    var apiBaseURL = APIBaseURL;
    var url = apiBaseURL + 'implement_details/' + id;

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
        success: function (result) {
            get_product();

            console.log("Delete request successful");
            alert("Delete operation successful");
        },
        error: function (error) {
            console.error('Error fetching data:', error);
            alert("Error during delete operation");
        }
    });
}


// search data

function search_data() {
    var seach_subcat1 = $('#seach_subcat1').val();
    var seach_subcat = $('#seach_subcat').val();
    var brand_main = $('#brand_main').val();
    var paraArr = {
      'implement_category_id': seach_subcat1,
      'implement_subcategory_id':seach_subcat,
      'brand_id':brand_main,
    };
  
    var apiBaseURL = APIBaseURL;
    var url = apiBaseURL + 'search_for_implement_details';
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

            if (data.getAllImplements && data.getAllImplements.length > 0) {
                let tableData = [];
                let counter = data.getAllImplements.length;

                data.getAllImplements.forEach(row => {
                    let action = `
                        <div class="d-flex">
                          <button class="btn btn-warning btn-sm text-white mx-1" data-bs-toggle="modal" onclick="fetch_data(${row.product_id});" data-bs-target="#exampleModal">
                            <i class="fa-solid fa-eye" style="font-size: 11px;"></i></button>
                          <button class="btn btn-primary btn-sm btn_edit" onclick="fetch_edit_data(${row.product_id});" data-bs-toggle="modal" data-bs-target="#staticBackdrop" id="yourUniqueIdHere">
                            <i class="fas fa-edit" style="font-size: 11px;"></i>
                          </button>
                          <button class="btn btn-danger btn-sm mx-1" onclick="destroy(${row.product_id});">
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
            }
    else {
        // Display a message if there's no valid data
        tableBody.innerHTML = '<tr><td colspan="4">No valid data available</td></tr>';
    }
  }

