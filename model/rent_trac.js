var customer_id = "";
var custo_id = "";
var editId_state= false;
var editId_state_fortrac= false;
$(document).ready(function() {
    $('#rent_submit_both').click(store);
    $('#rent_implement').click(StoreOnlyImplement);
    $('#rent_submit').click(StoreOnlyTractor);
  get_rent_tractor_list();
  $('#Search').click(search_data);
  $("#Reset").click(function () {

    $("#brandsearch").val("");
    $("#modelsearch").val("");
    $("#state_sct").val("");
    $("#district_sct").val("");
    window.location.reload();
    
    });
});
function formatPriceWithCommas(price) {
    if (isNaN(price)) {
        return price; 
    }
    return new Intl.NumberFormat('en-IN').format(price);
}
function formatDateTime(originalDateTimeStr) {
    const originalDateTime = new Date(originalDateTimeStr);

    const pad = (num) => (num < 10 ? '0' : '') + num;

    const day = pad(originalDateTime.getDate());
    const month = pad(originalDateTime.getMonth() + 1);
    const year = originalDateTime.getFullYear();
    const hours = pad(originalDateTime.getHours());
    const minutes = pad(originalDateTime.getMinutes());
    const seconds = pad(originalDateTime.getSeconds());

    return `${day}-${month}-${year} / ${hours}:${minutes}:${seconds}`;
    }

   // fetch data

   function get_rent_tractor_list() {
    var apiBaseURL = APIBaseURL;
    var url = apiBaseURL + 'rent_data';
    $.ajax({
        url: url,
        type: "GET",
        headers: {
            'Authorization': 'Bearer ' + localStorage.getItem('token')
        },
        success: function (response) {
            const tableBody = document.getElementById('data-table-rent');

            if (response.rent_details && response.rent_details.data1 && response.rent_details.data1.length > 0) {
                let mergedData = response.rent_details.data1.map(t1 => ({...t1, ...response.rent_details.data2.find(t2 => t2.customer_id === t1.id)})
                
            );
                mergedData.reverse();

                let tableData = [];
                let counter = 0; // Initialize counter here

                mergedData.forEach(row => {

                    counter++; // Increment counter for each row
                    const fullName = row.first_name + ' ' + row.last_name;
                    let action = `
                        <div class="d-flex">
                            <button class="btn btn-warning btn-sm text-white mx-1" data-bs-toggle="modal" onclick="fetch_data(${row.customer_id});" data-bs-target="#rent_view_model">
                                <i class="fa-solid fa-eye" style="font-size: 11px;"></i>
                            </button>
                            <button class="btn btn-primary btn-sm btn_edit" onclick="fetch_edit_data(${row.customer_id});" data-bs-toggle="modal" data-bs-target="#staticBackdrop" id="yourUniqueIdHere" style="padding:5px">
                            <i class="fas fa-edit" style="font-size: 11px;"></i>
                        </button>
                        <button class="btn btn-danger btn-sm mx-1" onclick="destroy(${row.customer_id});" style="padding:5px">
                            <i class="fa fa-trash" style="font-size: 11px;"></i>
                        </button>
                        </div>`;
                    tableData.push([
                        counter, 
                        row.date,
                        row.brand_name,
                        row.model,
                        fullName,
                        row.purchase_year,
                        row.state_name,
                        row.district_name,
                        action
                    ]);
                });

                $('#example').DataTable().destroy();
                $('#example').DataTable({
                    data: tableData,
                    columns: [
                        { title: 'S.No.' },
                        { title: 'Date/Time' },
                        { title: 'Brand' },
                        { title: 'Model' },
                        { title: 'Full Name' },
                        { title: 'Purchase Year' },
                        { title: 'State' },
                        { title: 'district' },
                        { title: 'Action', orderable: true }
                    ],
                    paging: true,
                    searching: false,
                });
            } else {
                tableBody.innerHTML = '<tr><td colspan="8">No valid data available</td></tr>';
            }
        },
        error: function (error) {
            console.error('Error fetching data:', error);
            if(error.status == '401' && error.responseJSON.error == 'Token expired or invalid'){
                $("#errorStatusLoading").modal('show');
                $("#errorStatusLoading").find('.modal-title').html('Error');
                $("#errorStatusLoading").find('.modal-body').html(error.responseJSON.error);
                window.location.href = baseUrl + "login.php"; 
             }
        }
    });
} 
function fetch_data(product_id) {
    var productId = product_id;
    var url =  'https://shopninja.in/bharatagri/api/public/api/customer/rent_data/' + productId;
    var headers = {
        'Authorization': 'Bearer ' + localStorage.getItem('token')
    };
    $.ajax({
        url: url,
        type: "GET",
        headers: headers,
        success: function(data) {
            if (data.rent_details && data.rent_details.data1 && data.rent_details.data1.length > 0) {
                var rentData = data.rent_details.data1[0];
                var rentData2 = data.rent_details.data2[0];
                document.getElementById('brand1').innerText = rentData.brand_name;
                document.getElementById('model1').innerText = rentData.model;
                document.getElementById('first_name2').innerText = rentData.first_name;
                document.getElementById('last_name2').innerText = rentData.last_name;
                document.getElementById('monile').innerText = rentData.mobile;
                document.getElementById('date_2').innerText = rentData.date;
                document.getElementById('purchase_year1').innerText = rentData.purchase_year;
                document.getElementById('state2').innerText = rentData.state_name;
                document.getElementById('district2').innerText = rentData.district_name;
                document.getElementById('tehsil2').innerText = rentData.tehsil_name;
                
                $("#selectedImagesContainer-old").empty();
                if (rentData2.images) {
                    var imageNamesArray = Array.isArray(rentData2.images) ? rentData2.images : rentData2.images.split(',');
                    imageNamesArray.forEach(function (image, index) {
                        var imageUrl = 'https://shopninja.in/bharatagri/api/public/uploads/rent_img/' + image.trim();
                        var newCard = `
                            <div class="col-12 col-md-3 col-lg-3 col-sm-3">
                                <div class="" id="closeId${index}"></div>
                                <div class="brand-main d-flex box-shadow mt-1 py-2 w-75 text-center shadow upload__img-closeDy${index}">
                                    <a class="weblink text-decoration-none text-dark" title="Tyre Image">
                                        <img class="img-fluid w-100 h-100" src="${imageUrl}" alt="Tyre Image">
                                    </a>
                                </div>
                            </div>
                        `;
                
                        // Append the new image element to the container
                        $("#selectedImagesContainer-old").append(newCard);
                    });
                }
            } else {
                console.error('No data found');
            }
        },
        error: function(error) {
            console.error('Error fetching data:', error);
        }
    });
}

function triggerFileInput(inputId) {
    $('#' + inputId).trigger('click');
}

function fetch_edit_data(customer_id) {
    console.log(customer_id, 'customer_id');
    var apiBaseURL = APIBaseURL;
    var url = apiBaseURL + 'rent_data/' + customer_id;
    editId_state = true;
    var headers = {
        'Authorization': 'Bearer' + localStorage.getItem('token')
    };
    $.ajax({
        url: url,
        type: 'GET',
        headers: headers,
        success: function(response) {
            var userData = response.rent_details.data1[0];
            var userData2 = response.rent_details.data2[0];  
    
            var implementTypeId = userData2 ? userData2.implement_type_id : null;
            var model = userData.model;
            var purchaseYear = userData.purchase_year;
            if (implementTypeId == 0 || implementTypeId == null) {
                // Enable 'Rent Tractor Only' tab
                $('#home-tab').removeClass('disabled');
                $('#profile-tab').addClass('disabled');
                $('#contact-tab').addClass('disabled');
        
                // Show only 'Rent Tractor Only' tab content
                $('#home-tab-pane').addClass('show active');
                $('#profile-tab-pane').removeClass('show active');
                $('#contact-tab-pane').removeClass('show active');
    
            } else if ((implementTypeId != 0 && implementTypeId != null) && (model == null || purchaseYear == null)) {
                // Enable 'Rent Implement Type Only' tab
                $('#profile-tab').removeClass('disabled');
                $('#home-tab').addClass('disabled');
                $('#contact-tab').addClass('disabled');
        
                // Show only 'Rent Implement Type Only' tab content
                $('#profile-tab-pane').addClass('show active');
                $('#home-tab-pane').removeClass('show active');
                $('#contact-tab-pane').removeClass('show active');

            } else if ((implementTypeId != 0 && implementTypeId != null) && (model != null && purchaseYear != null)) {
                // Enable 'Rent Tractor and Implement' tab
                $('#contact-tab').removeClass('disabled');
                $('#home-tab').addClass('disabled');
                $('#profile-tab').addClass('disabled');
        
                // Show only 'Rent Tractor and Implement' tab content
                $('#contact-tab-pane').addClass('show active');
                $('#home-tab-pane').removeClass('show active');
                $('#profile-tab-pane').removeClass('show active');
            }

            var userData = response.rent_details.data1[0];
            var userData2 = response.rent_details.data2;
            console.log('User Data:', userData);
            console.log('User Data 2:', userData2);
         
            // Rent Only Tractor
            $('#idUserForTracotr').val(userData.id);
            $('#enquiry_type_id').val(userData.enquiry_type_id);
            $('#implement_rent').val(userData2.rate);
            $('#workingRadius').val(userData.working_radius);
            $('#textarea_d').val(userData.description);
            $('#myfname').val(userData.first_name);
            $('#mylname').val(userData.last_name);
            $('#mynumber').val(userData.mobile);
            
            // Rent Tractor And Implement For both
            $('#idUser1').val(userData.id);
            $('#enquiry_type_id').val(userData.enquiry_type_id);
            $('#implement_rent').val(userData2.rate);
            $('#workingRadius3').val(userData.working_radius);
            $('#textarea_d3').val(userData.description);
            $('#myfname3').val(userData.first_name);
            $('#mylname3').val(userData.last_name);
            $('#mynumber2').val(userData.mobile);

            // Rent Implement For both
            $('#idUser2').val(userData.id);
            $('#enquiry_type_id').val(userData.enquiry_type_id);
            $('#implement_rent').val(userData2.rate);
            $('#workingRadius1').val(userData.working_radius);
            $('#textarea_d1').val(userData.description);
            $('#myfname1').val(userData.first_name);
            $('#mylname1').val(userData.last_name);
            $('#mynumber1').val(userData.mobile);
            setSelectedOption('state_state3', userData.state_id);
            getDistricts(userData.state_id, 'district-dropdown_rent', 'tehsil-dropdown_rent');
            setTimeout(function() {
              setSelectedOption('dist_district3', userData.district_id);
              populateTehsil(userData.district_id, 'tehsil-dropdown_rent', userData.tehsil_id);
            }, 2000); 
            var brandDropdown = document.getElementById('brand');
            for (var i = 0; i < brandDropdown.options.length; i++) {
                if (brandDropdown.options[i].text === userData.brand_name) {
                    brandDropdown.selectedIndex = i;
                    break;
                }
            }
            var brandDropdownboth = document.getElementById('brand3');
            for (var i = 0; i < brandDropdownboth.options.length; i++) {
                if (brandDropdownboth.options[i].text === userData.brand_name) {
                    brandDropdownboth.selectedIndex = i;
                    break;
                }
            }
            var brandDropdownboth = document.getElementById('brand_implement');
            for (var i = 0; i < brandDropdownboth.options.length; i++) {
                if (brandDropdownboth.options[i].text === userData.brand_name) {
                    brandDropdownboth.selectedIndex = i;
                    break;
                }
            }

             $('#model_main').empty(); 
             get_model_1(userData.brand_id); 
             
             setTimeout(function() { 
                 $("#model_main option").prop("selected", false);
                 $("#model_main option[value='" + userData.model + "']").prop("selected", true);
              
             }, 2000);

            $('#model_main3').empty(); 
            get_modelbrand(userData.brand_id); 
            
            setTimeout(function() { 
                $("#model_main3 option").prop("selected", false);
                $("#model_main3 option[value='" + userData.model + "']").prop("selected", true);
         
            }, 2000);

            $("#year_main3 option").prop("selected", false);
            $("#year_main3 option[value='" + userData.purchase_year + "']").prop("selected", true);
    
            $("#year_main1 option").prop("selected", false);
            $("#year_main1 option[value='" + userData.purchase_year + "']").prop("selected", true);
      
            setSelectedOption('state_state', userData.state_id);
            getDistricts(userData.state_id, 'district-dropdown', 'tehsil-dropdown');
            setTimeout(function() {
              setSelectedOption('dist_district', userData.district_id);
              populateTehsil(userData.district_id, 'tehsil-dropdown', userData.tehsil_id);
            }, 2000); 

            setSelectedOption('state_state1', userData.state_id);
            getDistricts(userData.state_id, 'district-dropdown1', 'tehsil-dropdown1');
            setTimeout(function() {
              setSelectedOption('dist_district1', userData.district_id);
              populateTehsil(userData.district_id, 'tehsil-dropdown1', userData.tehsil_id);
            }, 2000); 
           
            function updateTableRows(userData2, clearPrefilledValues) {
                var tableBody = $('#rentTractorTable tbody');
                if (clearPrefilledValues) {
                    tableBody.empty();
                }
                userData2.forEach(function(item, index) {
                    var formattedRate = formatPriceWithCommas(item.rate);
                    var imageUrl = 'https://shopninja.in/bharatagri/api/public/uploads/rent_img/' + item.images.trim();
                    var row = '<tr>' +
                        '<td>' + (index + 1) + '</td>' +
                        '<td>' +
                        '<div class="card upload-img-wrap" id="imageDiv_' + index + '">' +
                        '<img src="' + imageUrl + '" alt="Image" class="img-thumbnail image-clickable" id="image_' + index + '" readonly>' +
                        '</div>' +
                        '<input type="file" name="imp_' + index + '" id="impImage_' + index + '" class="image-file-input" accept="image/*" style="display: none;" onchange="displayImagePreview(this, \'impImagePreview_' + index + '\')" readonly>' +
                        '</td>' +
                        '<td>' +
                        '<div class="select-wrap">' +
                        '<select name="imp_type_id[]" id="impType_' + index + '" class="form-control implement-type-input" disabled>' +
                        '<option value="' + item.id + '">' + item.category_name + '</option>' +
                        '</select>' +
                        '</div>' +
                        '</td>' +
                        '<td>' +
                        '<input type="text" name="implement_rate[]" id="implement_rent_' + index + '" class="form-control implement-rate-input" maxlength="10" placeholder="e.g- 1,500" value="' + formattedRate + '" disabled>' +
                        '</td>' +
                        '<td>' +
                        '<div class="select-wrap">' +
                        '<select name="rate_per[]" id="impRatePer_' + index + '" class="form-control implement-unit-input" disabled>' +
                        '<option value="' + item.rate_per + '">' + item.rate_per + '</option>' +
                        '</select>' +
                        '</div>' +
                        '</td>' +
                        '<td>' +
                        '<button type="button" class="btn btn-danger" title="Remove Row" onclick="removeRow(this)">' +
                        '<i class="fas fa-minus"></i>' +
                        '</button>' +
                        '</td>' +
                        '</tr>';
                
                    tableBody.append(row);
                
                    $('#image_' + index).click(function() {
                    });
                });
            }
            updateTableRows(userData2, true);
    
            function updateTractorRentTableRows(userData2) {
                if (userData2.length > 0) {
                    var item = userData2[0];  // Get the first item since you only need one row
            
                    // Format the rate
                    var formattedRate = formatPriceWithCommas(item.rate);
                    var imageUrl = 'https://shopninja.in/bharatagri/api/public/uploads/rent_img/' + item.images.trim();
            
                    $('#selectedImage')
                        .attr('src', imageUrl)
                        .css('pointer-events', 'none') 
                        .show();
                    $('#implement_rent_0').val(formattedRate).attr('disabled', true); 
                    $('#impRatePer_0').val(item.rate_per).attr('disabled', true); 
            
                    $('.upload-img-wrap')
                        .css('pointer-events', 'none') 
                        .off('click'); 
                }
            }
            
            updateTractorRentTableRows(userData2, true);
            function updateImplementRentTableRows(userData2) {
                if (userData2.length > 0) {
                    var item = userData2[0];  // Get the first item since you only need one row
            
                    // Format the rate
                    var formattedRate = formatPriceWithCommas(item.rate);
            
                    // Prepare the image URL
                    var imageUrl = 'https://shopninja.in/bharatagri/api/public/uploads/rent_img/' + item.images.trim();
                    $('#selectedImage2')
                        .attr('src', imageUrl)
                        .css('pointer-events', 'none') 
                        .show(); 
                    $('#impType_1').html('<option value="' + item.id + '">' + item.category_name + '</option>').attr('disabled', true); ;
                    $('#implement_rent_1').val(formattedRate).attr('disabled', true); 
                    $('#impRatePer_1').val(item.rate_per).attr('disabled', true); 
                    $('.upload-img-wrap')
                    .css('pointer-events', 'none') 
                    .off('click'); 
                }
            }
            // Example usage
            updateImplementRentTableRows(userData2, true);
            
        },
        error: function(error) {
            console.error('Error fetching user data:', error);
        }
    });
}

function setSelectedOption(selectId, value) {
    var select = document.getElementById(selectId);
    for (var i = 0; i < select.options.length; i++) {
        if (select.options[i].value == value) {
            select.selectedIndex = i;
            break;
        }
    }
     // Disable the dropdown
}
function populateTehsil(districtId, selectId, tehsilId) {
    var select = document.getElementById(selectId);
    for (var i = 0; i < select.options.length; i++) {
        if (select.options[i].value == tehsilId) {
            select.options[i].selected = true;
            break;
        }
    }
}
function destroy(id)
 {
    var apiBaseURL = APIBaseURL;
    var url = apiBaseURL + 'customer_enquiries/' + id;
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
        alert("Delete operation successful");
      },
      error: function(error) {
        alert("Error during delete operation");
      }
    });
}
  function get_brand() {
    var url = "https://shopninja.in/bharatagri/api/public/api/customer/get_brand_by_product_id/" + 2;
    // var url = 'https://shopninja.in/bharatagri/api/public/api/customer/get_all_brands/'+ 6;
    $.ajax({
        url: url,
        type: "GET",
        headers: {
            'Authorization': 'Bearer ' + localStorage.getItem('token')
        },
        success: function (data) {
            const selects = document.querySelectorAll('#brand');
  
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
                        get_model_1(selectedBrandId);
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
  
  function get_model_1(brand_id) {
    var url = 'https://shopninja.in/bharatagri/api/public/api/customer/get_brand_model/' + brand_id;
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
                        // console.log(option);
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
  
  function get_year_and_hours() {
    var url = 'https://shopninja.in/bharatagri/api/public/api/customer/get_year_and_hours';
    $.ajax({
        url: url,
        type: "GET",
        headers: {
            'Authorization': 'Bearer ' + localStorage.getItem('token')
        },
        success: function (data) {
            var select_year = $("#year_main");
            select_year.empty(); // Clear existing options
            select_year.append('<option selected disabled="" value="">Please select an option</option>'); 
  
            // Sort the array in descending order
            data.getYears.sort(function(a, b) {
                return b - a;
            });
  
            for (var j = 0; j < data.getYears.length; j++) {
                select_year.append('<option value="' + data.getYears[j] + '">' + data.getYears[j] + '</option>');
            }
        },
        complete: function() {
            // You can add code here that will run after the request is complete
        },
        error: function (error) {
            console.error('Error fetching data:', error);
        }
    });
  }
  
  get_year_and_hours();

  function implementget() {
    var url = 'https://shopninja.in/bharatagri/api/public/api/customer/get_implement_category';

    $.ajax({
        url: url,
        type: "GET",
        headers: {
            'Authorization': 'Bearer ' + localStorage.getItem('token')
        },
        success: function(data) {
            const select = $('#impType_0');
            select.empty(); // Clear existing options

            // Add a default option
            select.append('<option selected disabled value="">Please select Implement Type</option>');

            // Use an object to keep track of unique categories
            var uniqueCategories = {};

            $.each(data.allCategory, function(index, category) {
                var implement_type = category.id;
                var category_name = category.category_name;

                // Check if the category ID is not already in the object
                if (!uniqueCategories[implement_type]) {
                    // Add category ID to the object
                    uniqueCategories[implement_type] = true;

                    // Append the option to the dropdown
                    select.append('<option value="' + implement_type + '">' + category_name + '</option>');
                }
            });
        },
        error: function(error) {
            console.error('Error fetching data:', error);
        }
    });
}
implementget();

function getSearchBrand() { 
    var url = 'https://shopninja.in/bharatagri/api/public/api/customer/get_brand_for_finance';
    $.ajax({
        url: url,
        type: "GET",
        headers: {
            'Authorization': 'Bearer ' + localStorage.getItem('token')
        },
        success: function (data) {
            const selects = document.querySelectorAll('#brandsearch');
  
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
                        get_model_get(selectedBrandId);
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
  
  function get_model_get(brand_id) {
    var url = 'https://shopninja.in/bharatagri/api/public/api/customer/get_brand_model/' + brand_id;
    $.ajax({
        url: url,
        type: "GET",
        headers: {
            'Authorization': 'Bearer ' + localStorage.getItem('token')
        },
        success: function (data) {
            const selects = document.querySelectorAll('#modelsearch');

            selects.forEach(select => {
                select.innerHTML = '<option selected disabled value="">Please select an option</option>';

                if (Array.isArray(data.model) && data.model.length > 0) {
                    data.model.forEach(modelName => {
                        const option = document.createElement('option');
                        option.textContent = modelName;
                        option.value = modelName; // Since it's an array of strings
                        select.appendChild(option);
                    });
                } else {
                    select.innerHTML = '<option>No valid data available</option>';
                }
            });
        },
        error: function (error) {
            console.error('Error fetching model data:', error);
        }
    });
}

  getSearchBrand();

  function getimplementbrand() { 
    var url = 'https://shopninja.in/bharatagri/api/public/api/customer/get_brand_for_finance';
    $.ajax({
        url: url,
        type: "GET",
        headers: {
            'Authorization': 'Bearer ' + localStorage.getItem('token')
        },
        success: function (data) {
            const selects = document.querySelectorAll('#brand_implement');
  
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
  getimplementbrand();
function get() { 
    var url = 'https://shopninja.in/bharatagri/api/public/api/customer/get_brand_for_finance';
    $.ajax({
        url: url,
        type: "GET",
        headers: {
            'Authorization': 'Bearer ' + localStorage.getItem('token')
        },
        success: function (data) {
            const selects = document.querySelectorAll('#brand');
  
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
  function getbrand() { 
    var url = 'https://shopninja.in/bharatagri/api/public/api/customer/get_brand_for_finance';
    $.ajax({
        url: url,
        type: "GET",
        headers: {
            'Authorization': 'Bearer ' + localStorage.getItem('token')
        },
        success: function (data) {
            const selects = document.querySelectorAll('#brand3');
  
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
                        get_modelbrand(selectedBrandId);
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
    
    function get_modelbrand(brand_id) {
        var url = 'https://shopninja.in/bharatagri/api/public/api/customer/get_brand_model/' + brand_id;
        $.ajax({
            url: url,
            type: "GET",
            headers: {
                'Authorization': 'Bearer ' + localStorage.getItem('token')
            },
            success: function (data) {
                const selects = document.querySelectorAll('#model_main3');
    
                selects.forEach(select => {
                    // Clear the existing options
                    select.innerHTML = '<option selected disabled value="">Please select an option</option>';
                
                    if (Array.isArray(data.model) && data.model.length > 0) {
                        data.model.forEach(modelName => {
                            const option = document.createElement('option');
                            option.textContent = modelName;  // Directly use the model name string
                            option.value = modelName;
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
  
getbrand();

function get_model(brand_id) {
    var url = 'https://shopninja.in/bharatagri/api/public/api/customer/get_brand_model/' + brand_id;
    $.ajax({
        url: url,
        type: "GET",
        headers: {
            'Authorization': 'Bearer ' + localStorage.getItem('token')
        },
        success: function (data) {
            const selects = document.querySelectorAll('#model_main');
  
            selects.forEach(select => {
                // Clear the existing options
                select.innerHTML = '<option selected disabled value="">Please select an option</option>';
            
                if (Array.isArray(data.model) && data.model.length > 0) {
                    data.model.forEach(modelName => {
                        const option = document.createElement('option');
                        option.textContent = modelName;  // Directly use the model name string
                        option.value = modelName;
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
  
  get();


  function get_year_and_hours() {
    var url = 'https://shopninja.in/bharatagri/api/public/api/customer/get_year_and_hours';
    $.ajax({
        url: url,
        type: "GET",
        headers: {
            'Authorization': 'Bearer ' + localStorage.getItem('token')
        },
        success: function (data) {
            var select_year = $("#year_main");
            select_year.empty(); // Clear existing options
            select_year.append('<option selected disabled="" value="">Please select an option</option>'); 
  
            // Sort the array in descending order
            data.getYears.sort(function(a, b) {
                return b - a;
            });
  
            for (var j = 0; j < data.getYears.length; j++) {
                select_year.append('<option value="' + data.getYears[j] + '">' + data.getYears[j] + '</option>');
            }
        },
        complete: function() {
            // You can add code here that will run after the request is complete
        },
        error: function (error) {
            console.error('Error fetching data:', error);
        }
    });
  }
  
  get_year_and_hours();

  function get_year() {
    var url = 'https://shopninja.in/bharatagri/api/public/api/customer/get_year_and_hours';
    $.ajax({
        url: url,
        type: "GET",
        headers: {
            'Authorization': 'Bearer ' + localStorage.getItem('token')
        },
        success: function (data) {
            var select_year = $("#year_main1");
            select_year.empty(); // Clear existing options
            select_year.append('<option selected disabled="" value="">Please select an option</option>'); 
  
            // Sort the array in descending order
            data.getYears.sort(function(a, b) {
                return b - a;
            });
  
            for (var j = 0; j < data.getYears.length; j++) {
                select_year.append('<option value="' + data.getYears[j] + '">' + data.getYears[j] + '</option>');
            }
        },
        complete: function() {
            // You can add code here that will run after the request is complete
        },
        error: function (error) {
            console.error('Error fetching data:', error);
        }
    });
  }
  
  get_year();
  function get_year_forboth() {
    var url = 'https://shopninja.in/bharatagri/api/public/api/customer/get_year_and_hours';
    $.ajax({
        url: url,
        type: "GET",
        headers: {
            'Authorization': 'Bearer ' + localStorage.getItem('token')
        },
        success: function (data) {
            var select_year = $("#year_main3");
            select_year.empty(); // Clear existing options
            select_year.append('<option selected disabled="" value="">Please select an option</option>'); 
  
            // Sort the array in descending order
            data.getYears.sort(function(a, b) {
                return b - a;
            });
  
            for (var j = 0; j < data.getYears.length; j++) {
                select_year.append('<option value="' + data.getYears[j] + '">' + data.getYears[j] + '</option>');
            }
        },
        complete: function() {
            // You can add code here that will run after the request is complete
        },
        error: function (error) {
            console.error('Error fetching data:', error);
        }
    });
  }
  
  get_year_forboth();

  function implementget() {
    var url = 'https://shopninja.in/bharatagri/api/public/api/customer/get_implement_category';

    $.ajax({
        url: url,
        type: "GET",
        headers: {
            'Authorization': 'Bearer ' + localStorage.getItem('token')
        },
        success: function(data) {
            const select = $('#impType_0');
            select.empty(); // Clear existing options

            // Add a default option
            select.append('<option selected disabled value="">Please select Implement Type</option>');

            // Use an object to keep track of unique categories
            var uniqueCategories = {};

            $.each(data.allCategory, function(index, category) {
                var implement_type = category.id;
                var category_name = category.category_name;

                // Check if the category ID is not already in the object
                if (!uniqueCategories[implement_type]) {
                    // Add category ID to the object
                    uniqueCategories[implement_type] = true;

                    // Append the option to the dropdown
                    select.append('<option value="' + implement_type + '">' + category_name + '</option>');
                }
            });
        },
        error: function(error) {
            console.error('Error fetching data:', error);
        }
    });
}
implementget();
   
function implementgetonly() {
    var url = 'https://shopninja.in/bharatagri/api/public/api/customer/get_implement_category';

    $.ajax({
        url: url,
        type: "GET",
        headers: {
            'Authorization': 'Bearer ' + localStorage.getItem('token')
        },
        success: function(data) {
          
             const select = $('#impType_1');
            select.empty(); // Clear existing options

            // Add a default option
            select.append('<option selected disabled value="">Please select Implement Type</option>');

            // Use an object to keep track of unique categories
            var uniqueCategories = {};

            $.each(data.allCategory, function(index, category) {
                var implement_type = category.id;
                var category_name = category.category_name;

                // Check if the category ID is not already in the object
                if (!uniqueCategories[implement_type]) {
                    // Add category ID to the object
                    uniqueCategories[implement_type] = true;

                    // Append the option to the dropdown
                    select.append('<option value="' + implement_type + '">' + category_name + '</option>');
                }
            });
        },
        error: function(error) {
            console.error('Error fetching data:', error);
        }
    });
}
implementgetonly();
function search_data() {

    var selectedBrand = $('#brandsearch').val();
    var model = $('#modelsearch').val();
    var state = $('#state_sct').val();
    var district = $('#district_sct').val();
  
    var paraArr = {
      'brand_id': selectedBrand,
      'model':model,
      'state':state,
      'district':district,
    };
  
    var apiBaseURL = APIBaseURL;
    var url = apiBaseURL + 'search_for_rent_enquiry';
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
    const tableBody = document.getElementById('data-table-rent');
     tableBody.innerHTML = '';

    if (data.rent_details && Object.keys(data.rent_details).length > 0) {
        let tableData = [];
        let counter = 0;
        Object.values(data.rent_details).forEach(row => {
       
            if (row.date && row.brand_name && row.model && row.first_name && row.purchase_year && row.state_name && row.district_name) {
                let formattedDate = row.date ? formatDateTime(row.date) : 'Invalid Date';
                counter++;
                const fullName = row.first_name + ' ' + row.last_name;
                let action = `<div class="d-flex">
                            <button class="btn btn-warning btn-sm text-white mx-1" data-bs-toggle="modal" onclick="fetch_data(${row.customer_id});" data-bs-target="#rent_view_model">
                                <i class="fa-solid fa-eye" style="font-size: 11px;"></i>
                            </button>
                            <button class="btn btn-primary btn-sm btn_edit" onclick="fetch_edit_data(${row.customer_id});" data-bs-toggle="modal" data-bs-target="#staticBackdrop" id="yourUniqueIdHere" style="padding:5px">
                                <i class="fas fa-edit" style="font-size: 11px;"></i>
                            </button>
                            <button class="btn btn-danger btn-sm mx-1" onclick="destroy(${row.customer_id});" style="padding:5px">
                                <i class="fa fa-trash" style="font-size: 11px;"></i>
                            </button>
                        </div>`;
                
                tableData.push([
                    counter,
                    formattedDate,
                    row.brand_name,
                    row.model,
                    fullName,
                    row.purchase_year,
                    row.state_name,
                    row.district_name,
                    action
                ]);
            }
        });

        $('#example').DataTable().destroy();
        $('#example').DataTable({
            data: tableData,
            columns: [
                { title: 'S.No.' },
                { title: 'Date/Time' },
                { title: 'Brand' },
                { title: 'Model' },
                { title: 'Full Name' },
                { title: 'Purchase Year' },
                { title: 'State' },
                { title: 'District' },
                { title: 'Action', orderable: false }
            ],
            paging: true,
            searching: false
        });
    } else {
        // Display a message if there's no valid data
        tableBody.innerHTML = '<tr><td colspan="9">No valid data available</td></tr>';
    }
}
function resetFormFields() {
    // Reset the forms
    document.getElementById("rent_list_form_").reset(); 
    document.getElementById("tractor_rent_form").reset();
    document.getElementById("implement_rent_form").reset();
   
    // Enable tabs
    $('#home-tab').removeClass('disabled');
    $('#profile-tab').removeClass('disabled');
    $('#contact-tab').removeClass('disabled');
   
   
    // Clear image inputs and reset image previews
    var imageInputs = document.getElementsByClassName("image-file-input");
    for (var i = 0; i < imageInputs.length; i++) {
        imageInputs[i].value = ''; // Clear file input

        var imagePreviewId = "impImagePreview_" + i;
        document.getElementById(imagePreviewId).setAttribute("src", ""); // Reset image preview

        var imageIcon = document.getElementById("impImagePreview_" + i).previousElementSibling;
        imageIcon.style.display = "block"; // Show image icon
    }

    // Reset and re-enable the tractor rent table
    var tractorTableBody = document.getElementById("rentTractorTable").getElementsByTagName('tbody')[0];
    var tractorNewRow = tractorTableBody.rows[0].cloneNode(true); // Clone the first row
    tractorTableBody.innerHTML = ''; // Clear all rows
    tractorTableBody.appendChild(tractorNewRow); // Add the cloned row

   
   
    // Enable pointer-events for image upload areas
    $('.upload-img-wrap').css('pointer-events', 'auto').on('click', function() {
        $(this).find('input[type="file"]').click();
    });
}



function store(event) {
    event.preventDefault();
    var enquiry_type_id = 18
    var customer_id = $('#idUser2').val();
    var brand_name = $('#brand3').val();
    var model = $('#model_main3').val();
    var year = $('#year_main3').val();
    var workingRadius = $('#workingRadius3').val();
    var first_name = $('#myfname3').val();
    var last_name = $('#mylname3').val();
    var mobile = $('#mynumber2').val();
    var state = $('#state_state3').val();
    var district = $('#dist_district3').val();
    var tehsil = $('#tehsil_t3').val();
    var about = $('#textarea_d3').val();
    var implementTypeArray = [];
    var rateArray = [];
    var ratePerArray = [];
    var imageFilesArray = [];

    $('#rentTractorTable tbody tr').each(function(index) {
        var row = $(this);
        var implement_type = row.find('.implement-type-input').val();
        var rate = row.find('.implement-rate-input').val();
        rate = rate.replace(/[\,\.\s]/g, '');
        var ratePer = row.find('.implement-unit-input').val();
        var image_names = row.find('input[type="file"]')[0].files;

        // Push data into arrays
        implementTypeArray.push(implement_type);
        rateArray.push(rate);
        ratePerArray.push(ratePer);

        // Push each image file to imageFilesArray
        for (var i = 0; i < image_names.length; i++) {
            imageFilesArray.push(image_names[i]);
        }
    });
    

    var apiBaseURL =APIBaseURL;
    var token = localStorage.getItem('token');
    var headers = {
      'Authorization': 'Bearer ' + token
    };

    var _method = 'POST';
   var url, method;
   
   if (editId_state!="" && editId_state!=" ") {
     
       _method = 'put';
       url = apiBaseURL + 'customer_enquiries/' + customer_id ;
     
       method = 'POST'; 
   } else {
       // Add mode
       url = apiBaseURL + 'customer_enquiries';
       method = 'POST';
   }
   var formData = new FormData();

   // Append form data
   formData.append('_method', _method);
   formData.append('enquiry_type_id', enquiry_type_id);
   // formData.append('forTractor', forTractor);
   formData.append('brand_id', brand_name);
   formData.append('model', model);
   formData.append('first_name', first_name);
   formData.append('last_name', last_name);
   formData.append('purchase_year', year);
   formData.append('working_radius', workingRadius);
   formData.append('mobile', mobile);
   formData.append('state', state);
   formData.append('district', district);
   formData.append('tehsil', tehsil);
   formData.append('message', about);
   // Append arrays as JSON strings
   formData.append('implement_type_id', JSON.stringify(implementTypeArray));
   formData.append('rate', JSON.stringify(rateArray));
   formData.append('rate_per', JSON.stringify(ratePerArray));
   // Append each image file
   for (var i = 0; i < imageFilesArray.length; i++) {
       formData.append('images[]', imageFilesArray[i]);
   }
    // Make an AJAX request to the server
    $.ajax({
        url: url,
        type: method,
        data: formData,
        headers: headers,
        processData: false,
        contentType: false,
        success: function(result) {
            console.log(result, "result");
            if (result.length) {
                // Do something
            }
            alert('successfully inserted..!')
        },
        error: function(error) {
            console.error('Error fetching data:', error);
        }
    });
}

function StoreOnlyImplement() {
    var enquiry_type_id = 18
    var forImplement =$('#forImplement').val();
    var brand_name = $('#brand_implement').val();
    var customer_id = $('#idUser1').val();
    var workingRadius = $('#workingRadius1').val();
    var first_name = $('#myfname1').val();
    var last_name = $('#mylname1').val();
    var mobile = $('#mynumber1').val();
    var state = $('#state_state1').val();
    var district = $('#dist_district1').val();
    var tehsil = $('#tehsil_t1').val();
    var about = $('#textarea_d1').val();
    var implementTypeArray = [];
    var rateArray = [];
    var ratePerArray = [];
    var imageFilesArray = [];

    $('#Implement_rent_only tbody tr').each(function(index) {
        var row = $(this);
        var implement_type = row.find('.implement-type-input').val();
        var rate = row.find('.implement-rate-input').val().replace(/[\,\.\s]/g, '');
        var ratePer = row.find('.implement-unit-input').val();
        var image_names = row.find('input[type="file"]')[0].files;

        // Push data into arrays
        implementTypeArray.push(implement_type);
        rateArray.push(rate);
        ratePerArray.push(ratePer);
        for (var i = 0; i < image_names.length; i++) {
            imageFilesArray.push(image_names[i]);
        }
       
    });
    var token = localStorage.getItem('token');
    var headers = {
      'Authorization': 'Bearer ' + token
    };
    var apiBaseURL =APIBaseURL;
    var _method = 'POST';
    var url, method;
    if (editId_state!="" && editId_state!=" ") {
        _method = 'put';
        url = apiBaseURL + 'customer_enquiries/' + customer_id ;
        method = 'POST'; 
    } else {
        url = apiBaseURL + 'customer_enquiries';
        method = 'POST';
    }

    var formData = new FormData();
    formData.append('_method', _method);
    formData.append('enquiry_type_id', enquiry_type_id);
    formData.append('forImplement', forImplement);
    formData.append('brand_id', brand_name);
    // formData.append('model', model);
    formData.append('first_name', first_name);
    formData.append('last_name', last_name);
    // formData.append('purchase_year', year);
    formData.append('working_radius', workingRadius);
    formData.append('mobile', mobile);
    formData.append('state', state);
    formData.append('district', district);
    formData.append('tehsil', tehsil);
    formData.append('message', about);
    formData.append('implement_type_id', JSON.stringify(implementTypeArray));
    formData.append('rate', JSON.stringify(rateArray));
    formData.append('rate_per', JSON.stringify(ratePerArray));

    for (var i = 0; i < imageFilesArray.length; i++) {
        formData.append('images[]', imageFilesArray[i]);
    }
    $.ajax({
        url: url,
        type: method,
        data: formData,
        headers: headers,
        processData: false,
        contentType: false,
        success: function(result) {
            console.log(result, "result");
            alert('successfully inserted..!');
        },
        error: function(error) {
            console.error('Error fetching data:', error);
            if (error.status === 500) {
                alert('successfully inserted..!');
            } else {
                alert('Please Upload the Image');
            }
        }
    });
    
}

function StoreOnlyTractor() {
    var enquiry_type_id = 18;
    var forTractor = $('#forTractor').val();
    var custo_id = $('#idUserForTracotr').val();
    var brand_name = $('#brand').val();
    var model = $('#model_main').val();
    var year = $('#year_main1').val();
    var workingRadius = $('#workingRadius').val();
    var first_name = $('#myfname').val();
    var last_name = $('#mylname').val();
    var mobile = $('#mynumber').val();
    var state = $('#state_state').val();
    var district = $('#dist_district').val();
    var tehsil = $('#tehsil_t').val();
    var about = $('#textarea_d').val();
    var rateArray = [];
    var ratePerArray = [];
    var imageFilesArray = [];

    $('#tractor_rent_only tbody tr').each(function(index) {
        var row = $(this);

        var rate = row.find('.implement-rate-input').val().replace(/[\,\.\s]/g, '');
        var ratePer = row.find('.implement-unit-input').val();
        var image_names = row.find('input[type="file"]')[0].files;

        rateArray.push(rate);
        ratePerArray.push(ratePer);
        for (var i = 0; i < image_names.length; i++) {
            imageFilesArray.push(image_names[i]);
        }

    });

    var apiBaseURL = APIBaseURL;
    var token = localStorage.getItem('token');
    var headers = {
        'Authorization': 'Bearer ' + token
    };

    var _method = 'POST';
    var url, method;
   
   if (editId_state!="" && editId_state!=" ") {
       _method = 'put';
       url = apiBaseURL + 'customer_enquiries/' + custo_id ;
       method = 'POST'; 
   } else {
       url = apiBaseURL + 'customer_enquiries';
       method = 'POST';
   }

    var formData = new FormData();
    formData.append('_method', _method);
    formData.append('enquiry_type_id', enquiry_type_id);
    formData.append('forTractor', forTractor);
    formData.append('brand_id', brand_name);
    formData.append('model', model);
    formData.append('first_name', first_name);
    formData.append('last_name', last_name);
    formData.append('purchase_year', year);
    formData.append('working_radius', workingRadius);
    formData.append('mobile', mobile);
    formData.append('state', state);
    formData.append('district', district);
    formData.append('tehsil', tehsil);
    formData.append('message', about);

    formData.append('rate', JSON.stringify(rateArray));
    formData.append('rate_per', JSON.stringify(ratePerArray));

    for (var i = 0; i < imageFilesArray.length; i++) {
        formData.append('images[]', imageFilesArray[i]);
    }

    $.ajax({
        url: url, 
        type: method, 
        data: formData,
        headers: headers,
        processData: false,
        contentType: false,
        success: function(result) {
          
            console.log(result, "result");
            alert('Successfully saved!');
        },
        error: function(error) {
            console.error('Error fetching data:', error);
        }
       
    });
    if (imageFilesArray.length === 0) {
        alert("Please Upload the Image .");
        return; // Stop the form submission
    }

    
}
