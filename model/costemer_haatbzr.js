
$(document).ready(function() {
    $('#Verify').click(verifyotp1);
    var userId = localStorage.getItem('id');
    getUserDetail(userId);
    $('#btn_submit').click(store);
    $('#quantityInput').on('input', calculateTotalPrice);
    $('#unitSelect').on('change', calculateTotalPrice);
    $('#price').on('input', calculateTotalPrice);

    calculateTotalPrice();
    function calculateTotalPrice() {
        var quantity = parseFloat($('#quantityInput').val()) || 0;
        var unit = $('#unitSelect').val();
        var price = parseFloat($('#price').val().replace(/,/g, '')) || 0; // Remove commas before parsing

        var unitConversion = {
            'Each': 1,
            'gram': 1,
            'Kg': 1,
            'Quintal': 1,
            'Ton': 1,
            'Pack': 1,
        };

        var total = quantity * price * unitConversion[unit];
        var formattedTotal = formatPriceWithCommas(total);
        $('#tprice').val(formattedTotal);
    }
    function formatPriceWithCommas(price) {
        if (isNaN(price)) {
            return price; 
        }
        return price.toLocaleString('en-IN', { maximumFractionDigits: 2 });
    }
});
function category_main3() {
    var url =  'http://tractor-api.divyaltech.com/api/customer/haat_bazar_category';
    $.ajax({ 
        url: url,
        type: "GET",
        headers: {
            'Authorization': 'Bearer ' + localStorage.getItem('token')
        },
        success: function(data) {
            console.log(data);
            const select = document.getElementById('category');
            select.innerHTML = '<option selected disabled value="">Please select an option</option>';
  
            if (data.allCategory.length > 0) {
                data.allCategory.forEach(row => {
                    const option = document.createElement('option');
                    option.textContent = row.category_name;
                    option.value = row.id;
                    select.appendChild(option);
                });
            } else {
                select.innerHTML = '<option>No valid data available</option>';
            }
        },
        error: function(error) {
            console.error('Error fetching data:', error);
        }
    });
  }
  
  function get_sub_category(category_id) {
    var url =  'http://tractor-api.divyaltech.com/api/customer/haat_bazar_sub_category/' + category_id;
    var select = document.getElementById('subcategory');
    select.innerHTML = '<option selected disabled value="">Please select an option</option>';
    $.ajax({
        url: url,
        type: "GET",
        headers: {
            'Authorization': 'Bearer ' + localStorage.getItem('token')
        },
        success: function(data) {
            if (data.data.length > 0) {
                data.data.forEach(row => {
                    const option = document.createElement('option');
                    option.textContent = row.sub_category_name;
                    option.value = row.sub_category_id;
                    select.appendChild(option);
                });
            } else {
                const option = document.createElement('option');
                option.textContent = 'No sub-categories available';
                option.disabled = true;
                select.appendChild(option);
            }
        },
        error: function(error) {
            console.error('Error fetching sub-categories:', error);
        }
    });
  }
  category_main3();

var formDataArray = [];
function hatbazar_add(step) {
    var formId = "form-step-" + step;
    var form = $("#" + formId);
    var formData = form.serializeArray();
    formDataArray.push(formData);
    var nextStep = step + 1;
    var nextFormId = "form-step-" + nextStep;
    $("#" + formId).hide();
    $("#" + nextFormId).show();
}
function submitFormData() {
    var allFormData = [];
    for (var i = 0; i < formDataArray.length; i++) {
        allFormData = allFormData.concat(formDataArray[i]);
    }
    $.ajax({
        type: "POST",
        url: 'http://tractor-api.divyaltech.com/api/customer/haat_bazar',
        data: allFormData,
        success: function (response) {
            console.log("Data submitted successfully:", response);
        },
        error: function (error) {
            console.error("Error submitting data:", error);
        }
    });
}
    
function displayStep(step) {
    // Your logic to show/hide form steps
}

function store(event) {
    event.preventDefault();
    if (isUserLoggedIn()) {
        var isConfirmed = confirm("Are you sure you want to submit the form?");
        if (isConfirmed) {
            submitForm();
        }
    } else {
        var mobile = $('#number1').val();
        get_otp1(mobile);
    }
}

function isUserLoggedIn() {
    return localStorage.getItem('token_customer') && localStorage.getItem('mobile') && localStorage.getItem('id');
}

function get_otp1(phone) {
    var url = "http://tractor-api.divyaltech.com/api/customer/customer_login";
    var paraArr = {
        'mobile': phone,
    };
    $.ajax({
        url: url,
        type: "POST",
        data: paraArr,
        success: function (result) {
            console.log(result, "result");
            $('#get_OTP_btn').modal('show'); 
        },
        error: function (error) {
            console.error('Error fetching data:', error);
        }
    });
}

function verifyotp1() {
    var mobile = $('#number1').val();
    var otp = $('#otp1').val();
    var paraArr = {
        'otp': otp,
        'mobile': mobile,
    };
    var url = 'http://tractor-api.divyaltech.com/api/customer/verify_otp';
    $.ajax({
        url: url,
        type: "POST",
        data: paraArr,
        success: function (result) {
            console.log(result);
            $('#get_OTP_btn').modal('hide');
            var isConfirmed = confirm("Are you sure you want to submit the form?");
            if (isConfirmed) {
                submitForm();
              
            }
        },
        error: function (xhr, textStatus, errorThrown) {
            console.log(xhr.status, 'error');
            // Handle different error scenarios
            if (xhr.status === 401) {
                console.log('Invalid credentials');
                var htmlcontent = `<p>Invalid credentials!</p>`;
                document.getElementById("error_message").innerHTML = htmlcontent;
            } else if (xhr.status === 403) {
                console.log('Forbidden: You don\'t have permission to access this resource.');
                var htmlcontent = ` <p> You don't have permission to access this resource.</p>`;
                document.getElementById("error_message").innerHTML = htmlcontent;
            } else {
                console.log('An error occurred:', textStatus, errorThrown);
                var htmlcontent = `<p>An error occurred while processing your request.</p>`;
                document.getElementById("error_message").innerHTML = htmlcontent;
            }
        },
    });
}

function submitForm() {
    var enquiry_type_id = $('#enquiry_type_id').val();
    var image_type_id = 2; 
    var category = $('#category').val();
    var subcategory = $('#subcategory').val();
    var quantityInput = $('#quantityInput').val();
    var unitSelect = $('#unitSelect').val();
    var price = $('#price').val();
    price = price.replace(/[\,\.\s]/g, '');
    var tprice = $('#tprice').val();
    tprice = price.replace(/[\,\.\s]/g, '');
    var aboutharvest = $('#aboutharvest').val();
    var first_name = $('#fname1').val();
    var last_name = $('#lname1').val();
    var mobile = $('#number1').val();
    var state = $('#state1').val();
    var district = $('#district_1').val();
    var tehsil = $('#tehsil1').val();
    var image_names = document.getElementById('imageInput').files;

    var apiBaseURL = "http://tractor-api.divyaltech.com/api";
    var endpoint = '/customer/haat_bazar';
    var url = apiBaseURL + endpoint;
    var data = new FormData();
   
    data.append('enquiry_type_id', enquiry_type_id);
    data.append('image_type_id', image_type_id);
    data.append('category_name', category);
    data.append('sub_category_id', subcategory);
    data.append('quantity', quantityInput);
    data.append('as_per', unitSelect);
    data.append('price', price);
    data.append('price', tprice);
    data.append('about', aboutharvest);
    data.append('first_name', first_name);
    data.append('last_name', last_name);
    data.append('mobile', mobile);
    data.append('state', state);
    data.append('district', district);
    data.append('tehsil', tehsil);
  
    for (var x = 0; x < image_names.length; x++) {
        data.append("images[]", image_names[x]);
        console.log("multiple image", image_names[x]);
    }

    $.ajax({
        url: url,
        type: 'POST',
        data: data,
        processData: false,
        contentType: false,
        success: function (result) {
            var msg = 'Added successfully !';
            $("#errorStatusLoading").modal('show');
            $("#errorStatusLoading").find('.modal-title').html('<p class="text-center">Congratulation..! Requested Successful</p>');
            $("#errorStatusLoading").find('.modal-body').html(msg);
            $("#errorStatusLoading").find('.modal-body').html('<img src="assets/images/7efs.gif" style="display:block; margin:0 auto;" class="w-50 text-center" alt="Successfull Request"></img>');
            $('#errorStatusLoading').on('hidden.bs.modal', function () {
                window.location.reload();
            });
        },
        error: function (error) {
            console.error('Error submitting form:', error);
            var msg = error;
            $("#errorStatusLoading").modal('show');
            $("#errorStatusLoading").find('.modal-title').html('<p class="text-center">Process Failed..! Enter Valid Detail</p>');
            $("#errorStatusLoading").find('.modal-body').html(msg);
            $("#errorStatusLoading").find('.modal-body').html('<img src="assets/images/comp_3.gif" style="display:block; margin:0 auto;" class="w-50 text-center" alt="Successfull Request"></img>');
        }
    });
}
function getUserDetail(id) {
    var url = "http://tractor-api.divyaltech.com/api/customer/get_customer_personal_info_by_id/" + id;
    var headers = {
        'Authorization': localStorage.getItem('token_customer')
    };
    $.ajax({
        url: url,
        type: "GET",
        headers: headers,
        success: function(response) {
            console.log(response, "response");

            if (response.customerData && response.customerData.length > 0) {
                var customer = response.customerData[0];
                console.log(customer, 'customer details');
                
                $('#form-step-3 #fname1').val(customer.first_name);
                $('#form-step-3 #lname1').val(customer.last_name);
                $('#form-step-3 #number1').val(customer.mobile);
                // $('#form-step-3 #state1').val(customer.state_id);
                // $('#form-step-3 #district_1').val(customer.district);
                // $('#form-step-3 #tehsil1').val(customer.tehsil1);
                
                if (isUserLoggedIn()) {
                    $('#form-step-3 input, #form-step-3 select').not('#district_1,#tehsil1,#state1').prop('disabled', true);
                }
                
            }
        },
        error: function(error) {
            console.error('Error fetching data:', error);
        }
    });
}
function isUserLoggedIn() {
    return localStorage.getItem('token_customer') && localStorage.getItem('mobile') && localStorage.getItem('id');
}


