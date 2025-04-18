$(document).ready(function() {
    $('#button2').click(add_insurance);
    getbrands();
});

function get_insurance_type() {
    var url = 'https://shopninja.in/bharatagri/api/public/api/customer/get_all_insurance_type';
    $.ajax({
        url: url,
        type: "GET",
        headers: {
            'Authorization': 'Bearer ' + localStorage.getItem('token')
        },
        success: function (data) {
            const selects = document.querySelectorAll('#insurance_type');
            selects.forEach(select => {
                select.innerHTML = '<option selected disabled value="">Please select an option</option>';
                if (data.insuranceType.length > 0) {
                    data.insuranceType.forEach(row => {
                        const option = document.createElement('option');
                        option.textContent = row.insurance_type_value;
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
get_insurance_type();

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
                        option.value = row.model;
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
function add_insurance(event) {
    event.preventDefault();
    enquiry_type_id = 17;
    var insurance_type = $('#insurance_type').val();
    var firstName = $('#first_name').val();
    var lastName = $('#last_name').val();
    var mobileNo = $('#mobile_number').val();
    var brand = $('#brand').val();
    var model = $('#model').val();
    var entermodel = $('#model').val();
    var vehicleRegNo = $('#vehicle_registered_number').val();
    var registeredYear = $('#registered_year').val();
    var state = $('#state').val();
    var tehsil = $('#tehsil').val();
    var district = $('#district').val();
    var previous_policy_claim = $('input[name="fav_rc"]:checked').val();
    // Prepare data to send to the server
    var paraArr = {
        'enquiry_type_id':enquiry_type_id,
      'insurance_type_id': insurance_type,
      'first_name': firstName,
      'last_name': lastName,
      'mobile': mobileNo,
      'brand_id': brand,
      'model': model,
      'model': entermodel,
      'vehicle_registered_num': vehicleRegNo,
      'registered_year': registeredYear,
      'state': state,
      'tehsil': tehsil,
      'district': district,
      'previous_policy_claim': previous_policy_claim,
    };
    var url = 'https://shopninja.in/bharatagri/api/public/api/customer/customer_enquiries';

    $.ajax({
      url: url,
      type: "POST",
      data: paraArr,
      success: function (result) { 
       var msg = " "
       $("#errorStatusLoading").modal('show');
       $("#errorStatusLoading").find('.modal-title').html('<p class="text-center">Thank you for contacting us. We will get back to you.</p>');
       $("#errorStatusLoading").find('.modal-body').html(msg);
       document.getElementById("myform").reset();
      },
      error: function (error) {
        console.error('Error fetching data:', error);
        var msg = error;
        $("#errorStatusLoading").modal('show');
        $("#errorStatusLoading").find('.modal-title').html('<p class="text-center">Process Failed..! Enter Valid Detail</p>');
        $("#errorStatusLoading").find('.modal-body').html(msg);
        $("#errorStatusLoading").find('.modal-body').html('<img src="assets/images/comp_3.gif" style="display:block; margin:0 auto;" class="w-50 text-center" alt="Successfull Request"></img>');
      }
    });
  }
  function getbrands() {
    var urlParams = new URLSearchParams(window.location.search);
    var Id = urlParams.get('brand_id');
    var url = "https://shopninja.in/bharatagri/api/public/api/customer/get_all_brands";
    var brandOrder = ['Mahindra', 'Swaraj', 'Sonalika', 'Tafe', 'Escorts', 'John Deere', 'Eicher', 'New Holland', 'Kubota', 'VST', 'Force', 'Preet', 'Indo Farm', 'Captain'];

    $.ajax({
        url: url,
        type: "GET",
        success: function(data) {
            console.log(data, 'abc');
            var slider_head = $("#slider_head");
            var brandContainer = $("#brandContainer");
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