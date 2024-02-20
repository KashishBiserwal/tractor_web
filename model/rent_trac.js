var customer_id = "";
var editId_state= false;
$(document).ready(function() {
    $('#sub_btn_').click(store);
  get_rent_tractor_list();
   
});

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
            const tableBody = document.getElementById('data-table');

            if (response.rent_details && response.rent_details.data1 && response.rent_details.data1.length > 0) {
                let mergedData = response.rent_details.data1.map(t1 => ({...t1, ...response.rent_details.data2.find(t2 => t2.customer_id === t1.id)}));

                let tableData = [];
                let counter = mergedData.length;

                mergedData.forEach(row => {
                    let action = `
                        <div class="d-flex">
                            <button class="btn btn-warning btn-sm text-white mx-1" data-bs-toggle="modal" onclick="fetch_data(${row.id});" data-bs-target="#rent_view_model">
                                <i class="fa-solid fa-eye" style="font-size: 11px;"></i>
                            </button>
                            <button class="btn btn-primary btn-sm btn_edit" onclick="fetch_edit_data(${row.id});" data-bs-toggle="modal" data-bs-target="#staticBackdrop" id="yourUniqueIdHere" style="padding:5px">
                            <i class="fas fa-edit" style="font-size: 11px;"></i>
                        </button>
                        <button class="btn btn-danger btn-sm mx-1" onclick="destroy(${row.id});" style="padding:5px">
                            <i class="fa fa-trash" style="font-size: 11px;"></i>
                        </button>
                        </div>`;

                    tableData.push([
                        counter,
                        formatDateTime(row.date),
                        row.brand_name,
                        row.model,
                        row.purchase_year,
                        row.state,
                        row.district,
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
        }
    });
}


// view data
function fetch_data(product_id){
    // alert(product_id);
    console.log(window.location)
    var urlParams = new URLSearchParams(window.location.search);
    
    var productId = product_id;
    var apiBaseURL = APIBaseURL;
    var url = apiBaseURL + 'rent_data/' + productId;
    var headers = {
    'Authorization': 'Bearer ' + localStorage.getItem('token')
    };
    $.ajax({
        url: url,
        type: "GET",
        headers: headers,
        success: function(data) {
        console.log(data, 'abc');
        document.getElementById('brand1').innerText=data.rent_details.data1[0].brand_name;
        document.getElementById('model1').innerText=data.rent_details.data1[0].model;
        document.getElementById('first_name2').innerText=data.rent_details.data1[0].first_name;
        document.getElementById('last_name2').innerText=data.rent_details.data1[0].last_name;
        document.getElementById('monile').innerText=data.rent_details.data1[0].mobile;
        document.getElementById('date_2').innerText=data.rent_details.data1[0].date;
        document.getElementById('purchase_year1').innerText=data.rent_details.data1[0].purchase_year;
        document.getElementById('state2').innerText=data.rent_details.data1[0].state;
        document.getElementById('district2').innerText=data.rent_details.data1[0].district;
        document.getElementById('tehsil2').innerText=data.rent_details.data1[0].tehsil;
       
       $("#selectedImagesContainer-old").empty();
    
        if (data.rent_details.data2[0].images) {
            var imageNamesArray = Array.isArray(data.rent_details.data2[0].images) ? data.rent_details.data2[0].images : data.rent_details.data2[0].images.split(',');
             
            var countclass=0;
            imageNamesArray.forEach(function (images) {
                var imageUrl = 'http://tractor-api.divyaltech.com/uploads/rent_img/' + images.trim();
                countclass++;
                var newCard = `
                    <div class="col-12 col-md-3 col-lg-3 col-sm-3">
                    <div class="" id="closeId${countclass}"></div>
                        <div class="brand-main d-flex box-shadow mt-1 py-2 w-75 text-center shadow upload__img-closeDy${countclass}">
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
    },
    error: function (error) {
    console.error('Error fetching data:', error);
    }
    });
    }


    
// fetch edit data

function fetch_edit_data(customer_id) {
    console.log(customer_id, 'customer_id');
    var apiBaseURL = APIBaseURL;
    var url = apiBaseURL + 'rent_data/' + customer_id;
    editId_state = true;
    var headers = {
        'Authorization': 'Bearer ' + localStorage.getItem('token')
    };

    $.ajax({
        url: url,
        type: 'GET',
        headers: headers,
        success: function(response) {
            var mergedData = response.rent_details.data1.map(data1Item => {
                var correspondingData2Item = response.rent_details.data2.find(data2Item => data2Item.customer_id === data1Item.id);
                return { ...data1Item, ...correspondingData2Item };
            });

            console.log('Merged data:', mergedData);

            // Populate form fields with merged data
            var userData = mergedData[0];

            $('#customer_id').val(userData.customer_id);
            $('#enquiry_type_id').val(userData.enquiry_type_id);
            // $('#implement_type_id').val(userData.implement_type_id);
            $('#impType_0').val(userData.implement_category);
            $('#workarea_').val(userData.working_radius);
            $('#textarea_d').val(userData.discription);
            $('#myfname').val(userData.first_name);
            $('#mylname').val(userData.last_name);
            $('#mynumber').val(userData.mobile);



            $("#implement_rent option").prop("selected", false);
            $("#implement_rent option[value='" + userData.rate + "']").prop("selected", true);

            $("#impRatePer_0 option").prop("selected", false);
            $("#impRatePer_0 option[value='" + userData.rate_per + "']").prop("selected", true);


            $("#state_state option").prop("selected", false);
            $("#state_state option[value='" + userData.state + "']").prop("selected", true);

            $("#dist_district option").prop("selected", false);
            $("#dist_district option[value='" + userData.district + "']").prop("selected", true);

            $("#tehsil_t option").prop("selected", false);
            $("#tehsil_t option[value='" + userData.tehsil + "']").prop("selected", true);

            $("#brand option").prop("selected", false);
            $("#brand option[value='" + userData.brand_name + "']").prop("selected", true);

            $("#model option").prop("selected", false);
            $("#model option[value='" + userData.model + "']").prop("selected", true);

            $("#year option").prop("selected", false);
            $("#year option[value='" + userData.purchase_year + "']").prop("selected", true);

            // Display images
            $("#selectedImagesContainer").empty();

            if (userData.image_names && userData.image_names.length > 0) {
                // Loop through each image name
                userData.image_names.forEach(function(imageName, index) {
                    // Construct the image URL
                    var imageUrl = 'http://tractor-api.divyaltech.com/uploads/rent_img/' + imageName.trim();
            
                    // Create a new 'img' element
                    var newImage = document.createElement('img');
                    newImage.className = 'img-fluid w-100 h-100'; // Add classes for styling
                    newImage.src = imageUrl; // Set the image source
                    newImage.alt = 'Image'; // Set the alt attribute
            
                    // Create a new 'a' element to wrap the image
                    var newAnchor = document.createElement('a');
                    newAnchor.className = 'weblink text-decoration-none text-dark';
                    newAnchor.title = 'Image'; // Set the title attribute
                    newAnchor.appendChild(newImage); // Append the image to the anchor element
            
                    // Create a new 'div' element to contain the image
                    var newDiv = document.createElement('div');
                    newDiv.className = 'brand-main d-flex box-shadow mt-2 text-center shadow upload__img-closeDy'; // Add classes for styling
                    newDiv.appendChild(newAnchor); // Append the anchor element to the div
            
                    // Create a new 'div' for the close button
                    var closeButton = document.createElement('div');
                    closeButton.className = 'upload__img-close_button';
                    closeButton.id = 'closeId' + index; // Set a unique ID for the close button
                    closeButton.onclick = function() {
                        removeImage(this); // Add onclick event to remove the image
                    };
                    newDiv.appendChild(closeButton); // Append the close button to the div
            
                    // Create a new 'div' for the column
                    var newColumnDiv = document.createElement('div');
                    newColumnDiv.className = 'col-6 col-lg-6 col-md-6 col-sm-6 position-relative'; // Add classes for styling
                    newColumnDiv.appendChild(newDiv); // Append the image container to the column
            
                    // Append the column to the 'selectedImagesContainer'
                    document.getElementById('selectedImagesContainer').appendChild(newColumnDiv);
                });
            }
        },
        error: function(error) {
            console.error('Error fetching user data:', error);
        }
    });
}

function store(event) {
    console.log('run store function');
    event.preventDefault();

    var enquiry_type_id = 18;
    var added_by = 1;
    var brand_name = $('#brand').val();
    var Model_name = $('#model').val();
    var purchase_year = $('#year').val();
    var working_radius = $('#workarea_').val();
    var textarea = $('#textarea_d').val();
    var first_name = $('#myfname').val();
    var last_name = $('#mylname').val();
    var mobile = $('#mynumber').val();
    var state = $('#state_state').val();
    var district = $('#dist_district').val();
    var tehsil = $('#tehsil_t').val();

    var data = new FormData();

    // Append form fields to FormData object
    data.append('enquiry_type_id', enquiry_type_id);
    data.append('added_by', added_by);
    data.append('brand_id', brand_name);
    data.append('model', Model_name);
    data.append('purchase_year', purchase_year);
    data.append('working_radius', working_radius);
    data.append('message', textarea);
    data.append('first_name', first_name);
    data.append('last_name', last_name);
    data.append('mobile', mobile);
    data.append('state', state);
    data.append('district', district);
    data.append('tehsil', tehsil);
// 'brand_id': JSON.stringify(selectedBrand),
    // Append impType array
            var implementTypeIds = [];
        $('select[name="imp_type_id"]').each(function() {
            implementTypeIds.push($(this).val());
        });
        data.append('implement_type_id', JSON.stringify(implementTypeIds));

        // Append implement_rent array
        var rates = [];
        $('input[name="implement_rate"]').each(function() {
            rates.push($(this).val());
        });
        data.append('rate', JSON.stringify(rates));

        // Append impRatePer array
        var ratePers = [];
        $('select[name="rate_per"]').each(function() {
            ratePers.push($(this).val());
        });
        data.append('rate_per', JSON.stringify(ratePers));

        // Append images
        var impImageFiles = document.getElementById('impImage_0').files;
        for (var i = 0; i < impImageFiles.length; i++) {
            data.append('images[]', impImageFiles[i]);
        }

    var apiBaseURL = 'http://tractor-api.divyaltech.com/api/admin/';
    var token = localStorage.getItem('token');
    var headers = {
        'Authorization': 'Bearer ' + token
    };

    var url = apiBaseURL + 'customer_enquiries'; // Endpoint URL
    var method = 'POST';

    $.ajax({
        url: url,
        type: method,
        data: data,
        headers: headers,
        processData: false,
        contentType: false, // Set content type to false for FormData
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
// Trigger the store function when the form is submitted
$('#rent_list_form_').submit(store);

  

function destroy(id) {
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


  function get() {
    var url = 'http://tractor-api.divyaltech.com/api/customer/get_all_brands';
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
  
  function get_model(brand_id) {
    var url = 'http://tractor-api.divyaltech.com/api/customer/get_brand_model/' + brand_id;
    $.ajax({
        url: url,
        type: "GET",
        headers: {
            'Authorization': 'Bearer ' + localStorage.getItem('token')
        },
        success: function (data) {
            const selects = document.querySelectorAll('#model');
  
            selects.forEach(select => {
                select.innerHTML = '<option selected disabled value="">Please select an option</option>';
  
                if (data.model.length > 0) {
                    data.model.forEach(row => {
                        const option = document.createElement('option');
                        option.textContent = row.model;
                        option.value = row.id;
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
  
  get();


  
function get_year_and_hours() {
    console.log('initsfd')
    var apiBaseURL = APIBaseURL;
    var url = apiBaseURL + 'get_year_and_hours';
    $.ajax({
        url: url,
        type: "GET",
        headers: {
            'Authorization': 'Bearer ' + localStorage.getItem('token')
        },
        success: function (data) {
          
            var select_year = $("#year");
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


function get_implement() {
    var url = 'http://tractor-api.divyaltech.com/api/customer/get_implement_category';
    $.ajax({
        url: url,
        type: "GET",
        headers: {
            'Authorization': 'Bearer ' + localStorage.getItem('token')
        },
        success: function (data) {
            const selects = document.querySelectorAll('#impType_0');
  
            selects.forEach(select => {
                select.innerHTML = '<option selected disabled value="">Please select an option</option>';
  
                if (data.allCategory.length > 0) {
                    data.allCategory.forEach(row => {
                        const option = document.createElement('option');
                        option.textContent = row.category_name;
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

get_implement();


populateDropdownsFromClass('state-dropdown', 'district-dropdown', 'tehsil-dropdown');

populateStateDropdown('state_select', 'district_select');