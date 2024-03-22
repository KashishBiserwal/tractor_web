var customer_id = "";
var editId_state= false;
$(document).ready(function() {
    $('#sub_btn_').click(store);
  get_rent_tractor_list();
  $('#Search').click(search_data);
   
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
                
                // Reverse the order of mergedData
                mergedData.reverse();

                let tableData = [];
                let counter = 0; // Initialize counter here

                mergedData.forEach(row => {
                    counter++; // Increment counter for each row

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
                        counter, // Use counter as serial number
                        row.date,
                        row.brand_name,
                        row.model,
                        row.first_name,
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
                        { title: 'Name' },
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
function fetch_data(product_id) {
    var productId = product_id;
    var url =  'http://tractor-api.divyaltech.com/api/customer/get_rent_data/' + productId;
    console.log(url);
    var headers = {
        'Authorization': 'Bearer ' + localStorage.getItem('token')
    };

    $.ajax({
        url: url,
        type: "GET",
        headers: headers,
        success: function(data) {
            console.log(data, 'abc');
            if (data.rent_details && data.rent_details.data1 && data.rent_details.data1.length > 0) {
                var rentData = data.rent_details.data1[0];
                document.getElementById('brand1').innerText = rentData.brand_name;
                console.log(rentData.brand_name);
                document.getElementById('model1').innerText = rentData.model;
                document.getElementById('first_name2').innerText = rentData.first_name;
                document.getElementById('last_name2').innerText = rentData.last_name;
                document.getElementById('monile').innerText = rentData.mobile;
                document.getElementById('date_2').innerText = rentData.date;
                document.getElementById('purchase_year1').innerText = rentData.purchase_year;
                document.getElementById('state2').innerText = rentData.state;
                document.getElementById('district2').innerText = rentData.district;
                document.getElementById('tehsil2').innerText = rentData.tehsil;
                
                $("#selectedImagesContainer-old").empty();
    
                if (rentData.images) {
                    var imageNamesArray = Array.isArray(rentData.images) ? rentData.images : rentData.images.split(',');
                     
                    imageNamesArray.forEach(function (image, index) {
                        var imageUrl = 'http://tractor-api.divyaltech.com/uploads/rent_img/' + image.trim();
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


// function fetch_data(product_id){
    
//     var productId = product_id;
//     var apiBaseURL = APIBaseURL;
//     var url = apiBaseURL + 'rent_data/' + productId;
//     var headers = {
//         'Authorization': 'Bearer ' + localStorage.getItem('token')
//     };
  
//     $.ajax({
//       url: url,
//       type: 'GET',
//       headers: headers,
    
//       success: function(response) {
//         var userData = response.rent_details.data1[0];
//         document.getElementById('brand1').innerText=userData.brand_name;
//         document.getElementById('model1').innerText=userData.model;
//         document.getElementById('first_name2').innerText=userData.first_name;
//         document.getElementById('last_name2').innerText=userData.last_name;
//         document.getElementById('monile').innerText=userData.mobile;
//         document.getElementById('date_2').innerText=userData.date;
//         document.getElementById('purchase_year1').innerText=userData.purchase_year;
//         document.getElementById('state2').innerText=userData.state_name;
//         document.getElementById('district2').innerText=userData.district_name;
//         document.getElementById('tehsil2').innerText=userData.tehsil_name;
        
//           // $('#exampleModal').modal('show');
//       },
//       error: function(error) {
//         console.error('Error fetching user data:', error);
//       }
//     });
//   }

    
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
                    newImage.className = 'img-fluid w-100 h-100'; 
                    newImage.src = imageUrl; 
                    newImage.alt = 'Image'; 
            
                    var newAnchor = document.createElement('a');
                    newAnchor.className = 'weblink text-decoration-none text-dark';
                    newAnchor.title = 'Image'; 
                    newAnchor.appendChild(newImage); 
            
                    var newDiv = document.createElement('div');
                    newDiv.className = 'brand-main d-flex box-shadow mt-2 text-center shadow upload__img-closeDy';
                    newDiv.appendChild(newAnchor); 
                    var closeButton = document.createElement('div');
                    closeButton.className = 'upload__img-close_button';
                    closeButton.id = 'closeId' + index; 
                    closeButton.onclick = function() {
                        removeImage(this); 
                    };
                    newDiv.appendChild(closeButton); 
                    var newColumnDiv = document.createElement('div');
                    newColumnDiv.className = 'col-6 col-lg-6 col-md-6 col-sm-6 position-relative';
                    newColumnDiv.appendChild(newDiv); 
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
    event.preventDefault();

    var enquiry_type_id = $('#enquiry_type_id').val();
    // var added_by = 0;
    var brand_name = $('#brand').val();
    var model = $('#model_main').val();
    var year = $('#year_main').val();
    var workingRadius = $('#workingRadius').val();
    var first_name = $('#myfname').val();
    var last_name = $('#mylname').val();
    var mobile = $('#mynumber').val();
    var state = $('#state_state').val();
    var district = $('#dist_district').val();
    var tehsil = $('#tehsil_t').val();
    var about = $('#textarea_d').val();
    var implementTypeArray = [];
    var rateArray = [];
    var ratePerArray = [];
    var imageFilesArray = [];

    // Iterate over each row in the table body
    $('#rentTractorTable tbody tr').each(function(index) {
        var row = $(this);

        var implement_type = row.find('.implement-type-input').val();
        var rate = row.find('.implement-rate-input').val();
        rate = rate.replace(/[\,\.\s]/g, '');
        var ratePer = row.find('.implement-unit-input').val();
        var image_names = row.find('.image-file-input')[0].files; // Assuming image input field class is .image-file-input

        // Push data into arrays
        implementTypeArray.push(implement_type);
        rateArray.push(rate);
        ratePerArray.push(ratePer);

        // Push each image file to imageFilesArray
        for (var i = 0; i < image_names.length; i++) {
            imageFilesArray.push(image_names[i]);
        }
    });

    // Create a FormData object
    var formData = new FormData();

    // Append form data
    // formData.append('added_by', added_by);
    formData.append('enquiry_type_id', enquiry_type_id);
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
        url: 'http://tractor-api.divyaltech.com/api/customer/customer_enquiries',
        type: 'POST',
        data: formData,
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


  function getBrandAdd() { 
    var url = 'http://tractor-api.divyaltech.com/api/customer/get_brand_for_finance';
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
                        get_Brandmodel(selectedBrandId);
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
  
  function get_Brandmodel(brand_id) {
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
  
  getBrandAdd();
  
  function get_year_and_hours() {
    console.log('initsfd')
    // var apiBaseURL = APIBaseURL;
    var url = 'http://tractor-api.divyaltech.com/api/customer/get_year_and_hours';
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
    var url = 'http://tractor-api.divyaltech.com/api/customer/get_implement_category';

    $.ajax({
        url: url,
        type: "GET",
        headers: {
            'Authorization': 'Bearer ' + localStorage.getItem('token')
        },
        success: function(data) {
            console.log(data);

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

function resetFormFields(){
    document.getElementById("rent_list_form_").reset(); // Reset the entire form
    
    // Reset each image input and its preview
    var imageInputs = document.getElementsByClassName("image-file-input");
    for (var i = 0; i < imageInputs.length; i++) {
        imageInputs[i].value = ''; 
        
        var imagePreviewId = "impImagePreview_" + i; // Get the corresponding image preview ID
        document.getElementById(imagePreviewId).setAttribute("src", ""); 
        
        var imageIcon = document.getElementById("impImagePreview_" + i).previousElementSibling; // Get the image icon element
        imageIcon.style.display = "block"; // Set the display property to "block" to show the image icon
    }
}
function getSearchBrand() { 
    var url = 'http://tractor-api.divyaltech.com/api/customer/get_brand_for_finance';
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
            const selects = document.querySelectorAll('#modelsearch');
  
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
  
  getSearchBrand();


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
          console.log(searchData,"hello brand");
          updateTable(searchData);
        },
        error: function (error) {
            console.error('Error searching for brands:', error);
        }
    });
  };
  function updateTable(data) {
    console.log('Received data:', data);

    const tableBody = document.getElementById('data-table');
    console.log('Table body:', tableBody);

    tableBody.innerHTML = '';
    let serialNumber = 1;

    if (data.rent_details && Object.keys(data.rent_details).length > 0) {
        let tableData = [];
        Object.values(data.rent_details).forEach(row => {
            console.log('Processing row:', row);

            let formattedDate = row.date ? formatDateTime(row.date) : 'Invalid Date';
            console.log('Formatted date:', formattedDate);

            let action = `<div class="d-flex">
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
            console.log('Action:', action);

            tableData.push([
                serialNumber,
                formattedDate,
                row.brand_name,
                row.model,
                row.first_name,
                row.purchase_year || '', 
                row.state_name || '',
                row.district_name || '', 
                action
            ]);

            serialNumber++;
        });

        console.log('Table data:', tableData);

        $('#example').DataTable().destroy();
        console.log('Destroyed previous DataTable');

        $('#example').DataTable({
            data: tableData,
            columns: [
                { title: 'S.No.' },
                { title: 'Date/Time' },
                { title: 'Brand' },
                { title: 'Model' },
                { title: 'Name' },
                { title: 'Purchase Year' },
                { title: 'State' },
                { title: 'District' },
                { title: 'Action', orderable: true }
            ],
            paging: true,
            searching: false
        });

        console.log('Initialized new DataTable');
    } else {
        // Display a message if there's no valid data
        tableBody.innerHTML = '<tr><td colspan="9">No valid data available</td></tr>';
        console.log('No valid data available');
    }
}


