$(document).ready(function() {
    $('#get_on_road').click(get_on_roadadd);
    getbrands();
});


function get() {
    var url = 'http://tractor-api.divyaltech.com/api/customer/get_all_brands';
    $.ajax({
        url: url,
        type: "GET",
        headers: {
            'Authorization': 'Bearer ' + localStorage.getItem('token')
        },
        success: function (data) {
            console.log(data);
            const selects = document.querySelectorAll('#brand');

            selects.forEach(select => {
                select.innerHTML = '<option selected disabled value="">Please select an option</option>';

                if (data.brands.length > 0) {
                    data.brands.forEach(row => {
                        const option = document.createElement('option');
                        option.textContent = row.brand_name;
                        option.value = row.id;
                        console.log(option);
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
    console.log('Requesting models for brand ID:', brand_id); // Debugging statement
    $.ajax({
        url: url,
        type: "GET",
        headers: {
            'Authorization': 'Bearer ' + localStorage.getItem('token')
        },
        success: function (data) {
            console.log('Received models data:', data); // Debugging statement
            const selects = document.querySelectorAll('#model_1');

            selects.forEach(select => {
                select.innerHTML = '<option selected disabled value="">Please select an option</option>';

                if (data.model && data.model.length > 0) {
                    data.model.forEach(row => {
                        const option = document.createElement('option');
                        option.textContent = row.model;
                        option.value = row.model;
                        console.log('Adding model:', option); // Debugging statement
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
get();

function get_on_roadadd(event) {
    event.preventDefault();

    // Validate the form
    if (!validateForm()) {
        return; // Stop further execution if form is not valid
    }

    console.log('Form is valid. Proceeding with AJAX request...');

    // Prepare data to send to the server
    // var enquiry_type_id = 2;
    var enquiry_type_id = $('#enquiry_type_id').val();
    var brand = $('#brand').val();
    var model = $('#model_1').val();
    var first_name = $('#first_name').val();
    var last_name = $('#last_name').val();
    var mobile_no = $('#mobile_no').val();
    var state = $('#state').val();
    var tehsil = $('#tehsil').val();
    var district = $('#district').val();

    var paraArr = {
        'enquiry_type_id': enquiry_type_id,
        //'insurance_type_id': insurance_type,
        'first_name': first_name,
        'last_name': last_name,
        'mobile': mobile_no,
        'brand_id': brand,
        'model': model,
        'state': state,
        'tehsil': tehsil,
        'district': district,
    };

    // AJAX settings
    var url = 'http://tractor-api.divyaltech.com/api/customer/customer_enquiries';

    $.ajax({
        url: url,
        type: "POST",
        data: paraArr,
        success: function (result) {
            console.log(result, "result");
            console.log("Add successfully");
            var msg = 'Added successfully !';
            $("#errorStatusLoading").modal('show');
            $("#errorStatusLoading").find('.modal-title').html('<p class="text-center">Congratulation..! Requested Successful</p>');
            $("#errorStatusLoading").find('.modal-body').html(msg);
            $("#errorStatusLoading").find('.modal-body').html('<img src="assets/images/7efs.gif" style="display:block; margin:0 auto;" class="w-50 text-center" alt="Successfull Request"></img>');
            console.log('Add successfully');
            document.getElementById("tractor_submit_form").reset();
        },
        error: function (error) {
            console.error('Error fetching data:', error);
            var msg = error.statusText;
            $("#errorStatusLoading").modal('show');
            $("#errorStatusLoading").find('.modal-title').html('<p class="text-center">Process Failed..! Enter Valid Detail</p>');
            $("#errorStatusLoading").find('.modal-body').html(msg);
            $("#errorStatusLoading").find('.modal-body').html('<img src="assets/images/comp_3.gif" style="display:block; margin:0 auto;" class="w-50 text-center" alt="Successfull Request"></img>');
        }
    });
}

function validateForm() {
    // Perform validation on each form field
    var brand = $('#brand').val();
    var model = $('#model_1').val();
    var first_name = $('#first_name').val();
    var last_name = $('#last_name').val();
    var mobile_no = $('#mobile_no').val();
    var state = $('#state').val();
    var tehsil = $('#tehsil').val();
    var district = $('#district').val();

    // Example validation: Check if any of the required fields are empty
    if (!brand || !model || !first_name || !last_name || !mobile_no || !state || !tehsil || !district) {
        var msg = "Please fill out all required fields.";
        $("#errorStatusLoading").modal('show');
        // $("#errorStatusLoading").find('.modal-title').html('<p class="text-center">Form Validation Failed</p>');
        $("#errorStatusLoading").find('.modal-body').html(msg);
        return false; // Form is not valid
    }

    // If all validations pass, return true
    return true;
}


// function getState() {
//     var url = 'http://tractor-api.divyaltech.com/api/customer/state_data';
//     $.ajax({
//         url: url,
//         type: "GET",
//         headers: {
//             'Authorization': 'Bearer ' + localStorage.getItem('token')
//         },
//         success: function(data) {
//             console.log("State data:", data);

//             const checkboxContainer = $('#state');
//             checkboxContainer.empty(); // Clear existing checkboxes
            
//             const stateIds = [7, 15, 20, 26, 34]; // Array of State IDs you want to fetch checkboxes for

//             stateIds.forEach(stateId => {
//                 const filteredState = data.stateData.find(state => state.id === stateId);
//                 if (filteredState) {
//                     var checkboxHtml = '<input type="checkbox" class="checkbox-round mt-1 ms-3 state_checkbox" value="' + filteredState.id + '"/>' +
//                         '<span class="ps-2 fs-6">' + filteredState.state_name + '</span> <br/>';
//                     checkboxContainer.append(checkboxHtml);
//                 } else {
//                     checkboxContainer.append('<p>No valid data available for state ID: ' + stateId + '</p>');
//                 }
//             });

//             // Add event listeners to the state checkboxes
//             $('.state_checkbox').on('change', function() {
//                 var selectedStateId = $(this).val();
//                 if ($(this).is(':checked')) {
//                     ge_tDistricts(selectedStateId);
//                 }
//             });

//             // Initially load districts for the first state in stateIds
//             if (stateIds.length > 0) {
//                 ge_tDistricts(stateIds[0]);
//             }
//         },
//         error: function(error) {
//             console.error('Error fetching state data:', error);
//         }
//     });
// }

// function ge_tDistricts(stateId) {
//     var url = 'http://tractor-api.divyaltech.com/api/customer/get_district_by_state/' + stateId;
//     $.ajax({
//         url: url,
//         type: "GET",
//         headers: {
//             'Authorization': 'Bearer ' + localStorage.getItem('token')
//         },
//         success: function(data) {
//             console.log("District data for state ID " + stateId + ":", data);
            
//             const checkboxContainer = $('#district');
//             checkboxContainer.empty(); // Clear existing checkboxes
            
//             if (data && data.districtData && data.districtData.length > 0) {
//                 data.districtData.forEach(district => {
//                     var checkboxHtml = '<input type="checkbox" class="checkbox-round mt-1 ms-3 district_checkbox" value="' + district.id + '" id="district_' + district.id + '"/>' +
//                         '<label for="district_' + district.id + '" class="ps-2 fs-6">' + district.district_name + '</label> <br/>';
//                     checkboxContainer.append(checkboxHtml);
//                 });
//             } else {
//                 checkboxContainer.append('<p>No districts available for state ID: ' + stateId + '</p>');
//             }
//         },
//         error: function(error) {
//             console.error('Error fetching districts for state ID ' + stateId + ':', error);
//         }
//     });
// }

// getState();


function populateDropdowns(identifier) {
    var stateDropdowns = document.querySelectorAll(`#${identifier} .state-dropdown`);
    var districtDropdowns = document.querySelectorAll(`#${identifier} .district-dropdown`);
    var tehsilDropdowns = document.querySelectorAll(`#${identifier} .tehsil-dropdown`);

    const stateIds = [7, 15, 20, 26, 34];

    $.get('http://tractor-api.divyaltech.com/api/customer/state_data', function(stateDataResponse) {
        var stateData = stateDataResponse.stateData;
        var selectYourStateOption = '<option value="">Select Your State</option>';
        var stateOptions = stateData
            .filter(state => stateIds.includes(state.id))
            .map(state => `<option value="${state.id}">${state.state_name}</option>`)
            .join('');

        stateDropdowns.forEach(function (dropdown) {
            dropdown.innerHTML = selectYourStateOption + stateOptions;

            // Add event listener to state dropdown to fetch district data
            dropdown.addEventListener('change', function() {
                var selectedStateId = this.value;
                var districtSelect = this.closest('.row').querySelector('.district-dropdown');
                districtSelect.innerHTML = '<option value="">Please select a district</option>';
                if (selectedStateId) {
                    $.get(`http://tractor-api.divyaltech.com/api/customer/get_district_by_state/${selectedStateId}`, function(data) {
                        data.districtData.forEach(district => {
                            districtSelect.innerHTML += `<option value="${district.id}">${district.district_name}</option>`;
                        });
                    });
                }
            });
        });

        districtDropdowns.forEach(function (dropdown) {
            dropdown.addEventListener('change', function() {
                var selectedDistrictId = this.value;
                var tehsilSelect = this.closest('.row').querySelector('.tehsil-dropdown');
                if (selectedDistrictId) {
                    $.get(`http://tractor-api.divyaltech.com/api/customer/get_tehsil_by_district/${selectedDistrictId}`, function(data) {
                        tehsilSelect.innerHTML = '<option value="">Please select a tehsil</option>';
                        data.tehsilData.forEach(tehsil => {
                            tehsilSelect.innerHTML += `<option value="${tehsil.id}">${tehsil.tehsil_name}</option>`;
                        });
                    });
                } else {
                    tehsilSelect.innerHTML = '<option value="">Please select a district first</option>';
                }
            });
        });
    });
}


function getbrands() {
    var urlParams = new URLSearchParams(window.location.search);
    var Id = urlParams.get('brand_id');
    var url = "http://tractor-api.divyaltech.com/api/customer/get_all_brands";
    console.log(url);

    // Define the order of brands
    var brandOrder = ['Mahindra', 'Swaraj', 'Sonalika', 'Tafe', 'Escorts', 'John Deere', 'Eicher', 'New Holland', 'Kubota', 'VST', 'Force', 'Preet', 'Indo Farm', 'Captain'];

    $.ajax({
        url: url,
        type: "GET",
        success: function(data) {
            console.log(data, 'abc');
            var slider_head = $("#slider_head");
            var brandContainer = $("#brandContainer");

            // Iterate through the brand order
            brandOrder.forEach(function(brandName) {
                var brand = data.brands.find(brand => brand.brand_name === brandName);
                if (brand) {
                    var brandContainerHtml = `<div class="col-6 col-sm-6 col-md-2 col-lg-2 brand_section">
                        <a href="brands.php?brand_id=${brand.id}">
                            <div class="d-block ">
                                <img src="http://tractor-api.divyaltech.com/uploads/brand_img/${brand.brand_img}">
                                <p>${brand.brand_name}</p>
                            </div>
                        </a>
                    </div>`;
                    brandContainer.append(brandContainerHtml);
                }
            });

            // Append the remaining brands after "Captain"
            var captainIndex = brandOrder.indexOf('Captain');
            if (captainIndex !== -1) {
                var remainingBrands = data.brands.filter(brand => !brandOrder.includes(brand.brand_name));
                remainingBrands.forEach(function(brand) {
                    var brandContainerHtml = `<div class="col-6 col-sm-6 col-md-2 col-lg-2 brand_section">
                        <a href="brands.php?brand_id=${brand.id}">
                            <div class="d-block ">
                                <img src="http://tractor-api.divyaltech.com/uploads/brand_img/${brand.brand_img}">
                                <p>${brand.brand_name}</p>
                            </div>
                        </a>
                    </div>`;
                    brandContainer.append(brandContainerHtml);
                });
            }
        },
        error: function(error) {
            console.error('Error fetching data:', error);
        }
    });
}