$(document).ready(function() {
    $('#get_on_road').click(get_on_roadadd);
    getbrands();
});

function get() {
    var url = 'https://shopninja.in/bharatagri/api/public/api/customer/get_all_brands';
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
    var url = 'https://shopninja.in/bharatagri/api/public/api/customer/get_brand_model/' + brand_id;
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

    if (!validateForm()) {
        return; 
    }
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
    var url = 'https://shopninja.in/bharatagri/api/public/api/customer/customer_enquiries';

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
    var brand = $('#brand').val();
    var model = $('#model_1').val();
    var first_name = $('#first_name').val();
    var last_name = $('#last_name').val();
    var mobile_no = $('#mobile_no').val();
    var state = $('#state').val();
    var tehsil = $('#tehsil').val();
    var district = $('#district').val();

    if (!brand || !model || !first_name || !last_name || !mobile_no || !state || !tehsil || !district) {
        var msg = "Please fill out all required fields.";
        $("#errorStatusLoading").modal('show');
        // $("#errorStatusLoading").find('.modal-title').html('<p class="text-center">Form Validation Failed</p>');
        $("#errorStatusLoading").find('.modal-body').html(msg);
        return false; // Form is not valid
    }
    return true;
}

function getState() {
    var url = 'https://shopninja.in/bharatagri/api/public/api/customer/state_data';
    $.ajax({
        url: url,
        type: "GET",
        headers: {
            'Authorization': 'Bearer ' + localStorage.getItem('token')
        },
        success: function (data) {
            console.log("State Data:", data);
            const select = document.getElementById('state');
            select.innerHTML = '<option selected disabled value="">Please select a state</option>';

            // Populate all available states
            if (data.stateData && data.stateData.length > 0) {
                data.stateData.forEach(state => {
                    const option = document.createElement('option');
                    option.textContent = state.state_name;
                    option.value = state.id;
                    select.appendChild(option);
                });
            } else {
                select.innerHTML = '<option>No states available</option>';
            }
        },
        error: function (error) {
            console.error('Error fetching state data:', error);
        }
    });

    // State change event listener
    $('#state').change(function () {
        const stateId = $(this).val();
        if (stateId) {
            getDistricts(stateId);
        }
    });
}

function getDistricts(stateId) {
    var url = 'https://shopninja.in/bharatagri/api/public/api/customer/get_district_by_state/' + stateId;
    console.log("Fetching Districts for State:", url);

    const select = document.getElementById('district');
    select.innerHTML = '<option selected disabled value="">Please select a district</option>';

    $.ajax({
        url: url,
        type: "GET",
        headers: {
            'Authorization': 'Bearer ' + localStorage.getItem('token')
        },
        success: function (data) {
            console.log("District Data:", data);
            if (data.districtData && data.districtData.length > 0) {
                data.districtData.forEach(district => {
                    const option = document.createElement('option');
                    option.textContent = district.district_name;
                    option.value = district.id;
                    select.appendChild(option);
                });
            } else {
                select.innerHTML = '<option>No districts available for this state</option>';
            }
        },
        error: function (error) {
            console.error('Error fetching districts:', error);
        }
    });

    // District change event listener
    $('#district').change(function () {
        const districtId = $(this).val();
        if (districtId) {
            getTehsils(districtId);
        }
    });
}

function getTehsils(districtId) {
    var url = 'https://shopninja.in/bharatagri/api/public/api/customer/get_tehsil_by_district/' + districtId;
    console.log("Fetching Tehsils for District:", url);

    const select = document.getElementById('tehsil');
    select.innerHTML = '<option selected disabled value="">Please select a tehsil</option>';

    $.ajax({
        url: url,
        type: "GET",
        headers: {
            'Authorization': 'Bearer ' + localStorage.getItem('token')
        },
        success: function (data) {
            console.log("Tehsil Data:", data);
            if (data.tehsilData && data.tehsilData.length > 0) {
                data.tehsilData.forEach(tehsil => {
                    const option = document.createElement('option');
                    option.textContent = tehsil.tehsil_name;
                    option.value = tehsil.id;
                    select.appendChild(option);
                });
            } else {
                select.innerHTML = '<option>No tehsils available for this district</option>';
            }
        },
        error: function (error) {
            console.error('Error fetching tehsils:', error);
        }
    });
}
getState();

function getbrands() {
    var urlParams = new URLSearchParams(window.location.search);
    var Id = urlParams.get('brand_id');
    var url = "https://shopninja.in/bharatagri/api/public/api/customer/get_all_brands";
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
                                <img src="https://shopninja.in/bharatagri/api/public/uploads/brand_img/${brand.brand_img}">
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
                                <img src="https://shopninja.in/bharatagri/api/public/uploads/brand_img/${brand.brand_img}">
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