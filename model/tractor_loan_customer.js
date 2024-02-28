$(document).ready(function() {
    // $('#apply_loan').click(add_loan);
    $('#apply_loan').on('click', function (event) {
        applyForLoan(event);


        
    });
});

 
function get_loan_type() {
    var url = 'http://tractor-api.divyaltech.com/api/customer/get_all_loan_type';
    $.ajax({
        url: url,
        type: "GET",
        headers: {
            'Authorization': 'Bearer ' + localStorage.getItem('token')
        },
        success: function (data) {
            console.log(data);
            const selects = document.querySelectorAll('#loanType');

            selects.forEach(select => {
                select.innerHTML = '<option selected disabled value="">Please select an option</option>';

                if (data.loanType.length > 0) {
                    data.loanType.forEach(row => {
                        const option = document.createElement('option');
                        option.textContent = row.loan_type_value;
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
get_loan_type();

function getTheBrand() {
    var url = 'http://tractor-api.divyaltech.com/api/customer/get_brand_for_finance';
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
    $.ajax({
        url: url,
        type: "GET",
        headers: {
            'Authorization': 'Bearer ' + localStorage.getItem('token')
        },
        success: function (data) {
            console.log(data);
            const selects = document.querySelectorAll('#model');

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

getTheBrand();

function applyForLoan(event) {
    event.preventDefault();
    console.log('Applying for loan...');

    // Retrieve form data
    var enquiry_type_id = 15;
    var loanType = $('#loanType').val();
    var firstName = $('#firstName').val();
    var lastName = $('#lastName').val();
    var mobileNo = $('#mobileNo').val();
    var brand = $('#brand').val();
    var model = $('#model').val();
    // var enterModel = $('#enterModel').val();
    var vehicleRegNo = $('#vehicleRegNo').val();
    var registeredYear = $('#registeredYear').val();
    var state = $('#state').val();
    var tehsil = $('#tehsil').val();
    var district = $('#district').val();
    // var previous_policy_claim = $('input[name="fav_rc"]:checked').val();
    // console.log(previous_policy_claim,'previous_policy_claim');

    // Prepare data to send to the server
    var paraArr = {
        'enquiry_type_id':enquiry_type_id,
        'loan_type_id': loanType,
        'first_name': firstName,
        'last_name': lastName,
        'mobile': mobileNo,
        'brand_id': brand,
        'model': model,
        // 'model': enterModel,
        'vehicle_registered_num': vehicleRegNo,
        'registered_year': registeredYear,
        'state': state,
        'tehsil': tehsil,
        'district': district,
        // 'previous_policy_claim': previous_policy_claim
    };

    var url = 'http://tractor-api.divyaltech.com/api/customer/customer_enquiries';
    console.log(url);

    $.ajax({
      url: url,
      type: "POST",
      data: paraArr,
      success: function (result) {
        console.log(result, "result");
        console.log("Add successfully");
        
       var msg = " "
       $("#errorStatusLoading").modal('show');
       $("#errorStatusLoading").find('.modal-title').html('<p class="text-center">Thank you for contacting us. We will get back to you.</p>');
    
       $("#errorStatusLoading").find('.modal-body').html(msg);
    //    $("#errorStatusLoading").find('.modal-body').html('<img src="assets/images/successfull.gif" style="display:block; margin:0 auto;" class="w-50 text-center" alt="Successfull Request"></img>');
       document.getElementById("applicationForm").reset();
       
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

  populateDropdownsFromClass('state-dropdown', 'district-dropdown', 'tehsil-dropdown');