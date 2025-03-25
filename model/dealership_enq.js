

$(document).ready(function() {
    $('#delership_enq_btn').click(store);
    $('#Verify').click(verifyotp1);
    var userId = localStorage.getItem('id');
    getUserDetail(userId);
    get_oldharvester();
    get_harvester();
});

function get() {
    var url = 'https://shopninja.in/bharatagri/api/public/api/customer/get_brand_for_finance';
    $.ajax({
        url: url,
        type: "GET",
        headers: {
            'Authorization': 'Bearer ' + localStorage.getItem('token')
        },
        success: function (data) {
            const selects = document.querySelectorAll('#b_brand_1');
  
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
  get();

  function store(event) {
    event.preventDefault();
    if (isUserLoggedIn()) {
        var isConfirmed = confirm("Are you sure you want to submit the form?");
        if (isConfirmed) {
            submitForm();
        }
    } else {
        var mobile = $('#mob_num').val();
        get_otp1(mobile);
    }
}

function isUserLoggedIn() {
    return localStorage.getItem('token_customer') && localStorage.getItem('mobile') && localStorage.getItem('id');
}

function get_otp1(phone) {
    var url = "https://shopninja.in/bharatagri/api/public/api/customer/customer_login";
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
    var mobile = $('#mob_num').val();
    var otp = $('#otp1').val();
    var paraArr = {
        'otp': otp,
        'mobile': mobile,
    };
    var url = 'https://shopninja.in/bharatagri/api/public/api/customer/verify_otp';
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
    var product_id = 2; 
    var brand_name = $('#b_brand_1').val();
    var first_name = $('#f_name_1').val();
    var last_name = $('#l_name_1').val();
    var mobile = $('#mob_num').val();
    var state = $('#state_s').val();
    var district = $('#district_s').val();
    var tehsil = $('#t_tehsil').val();
  
   
    var apiBaseURL = "https://shopninja.in/bharatagri/api/public/api";
    var endpoint = '/customer/customer_enquiries';
    var url = apiBaseURL + endpoint;

    // Create a FormData object and append all form data
    var data = new FormData();
    data.append('product_id', product_id);
    data.append('enquiry_type_id', enquiry_type_id);
    data.append('brand_id', brand_name);
    data.append('first_name', first_name);
    data.append('last_name', last_name);
    data.append('mobile', mobile);
    data.append('state', state);
    data.append('district', district);
    data.append('tehsil', tehsil);

    $.ajax({
        url: url,
        type: 'POST',
        data: data,
        processData: false,
        contentType: false,
        success: function (result) {
            console.log(result, "result");
            // Show success message or handle accordingly
            console.log("Form submitted successfully!");
            var msg = 'Added successfully !';
            $("#errorStatusLoading").modal('show');
            $("#errorStatusLoading").find('.modal-title').html('<p class="text-center">Congratulation..! Requested Successful</p>');
            $("#errorStatusLoading").find('.modal-body').html(msg);
            $("#errorStatusLoading").find('.modal-body').html('<img src="assets/images/7efs.gif" style="display:block; margin:0 auto;" class="w-50 text-center" alt="Successfull Request"></img>');
            // Reload page after OK is clicked
            $('#errorStatusLoading').on('hidden.bs.modal', function () {
                window.location.reload();
            });
        },
        error: function (error) {
            console.error('Error submitting form:', error);
            // Handle error scenarios
            var msg = error;
            $("#errorStatusLoading").modal('show');
            $("#errorStatusLoading").find('.modal-title').html('<p class="text-center">Process Failed..! Enter Valid Detail</p>');
            $("#errorStatusLoading").find('.modal-body').html(msg);
            $("#errorStatusLoading").find('.modal-body').html('<img src="assets/images/comp_3.gif" style="display:block; margin:0 auto;" class="w-50 text-center" alt="Successfull Request"></img>');
        }
    });
}
function getUserDetail(id) {
    var url = "https://shopninja.in/bharatagri/api/public/api/customer/get_customer_personal_info_by_id/" + id;
    console.log(url, 'url print ');

    var headers = {
        'Authorization': localStorage.getItem('token_customer')
    };

    $.ajax({
        url: url,
        type: "GET",
        headers: headers,
        success: function(response) {
            console.log(response, "response");

            // Check if customerData exists in the response and has at least one entry
            if (response.customerData && response.customerData.length > 0) {
                var customer = response.customerData[0];
                console.log(customer, 'customer details');
                
                // Set values based on form ID (used_farm_inner_from)
                $('#dealership_enq_from #f_name_1').val(customer.first_name);
                $('#dealership_enq_from #l_name_1').val(customer.last_name);
                $('#dealership_enq_from #mob_num').val(customer.mobile);
                // $('#dealership_enq_from #state_s').val(customer.state_id);
                // $('#dealership_enq_from #district_s').val(customer.district);
                // $('#dealership_enq_from #t_tehsil').val(customer.tehsil);
                
                if (isUserLoggedIn()) {
                    $('#dealership_enq_from input, #dealership_enq_from select').not('#state_s,#district_s,#t_tehsil,#b_brand_1').prop('disabled', true);
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

function get_harvester() {
    var url = "https://shopninja.in/bharatagri/api/public/api/customer/get_new_harvester";
    

    $.ajax({
        url: url,
        type: "GET",
        success: function (data) {
        console.log(data, "harvster data")

        if (data.product && data.product.length > 0) {
           
            var productContainer = $("#new_harvester");
            data.product.forEach(function (p) {
                var images = p.image_names;
                var a = [];
        
                if (images) {
                    if (images.indexOf(',') > -1) {
                        a = images.split(',');
                    } else {
                        a = [images];
                    }
                }
                var newCard = `
                <div class="item box_shadow b-t-1">
                <a  href="harvester_inner.php?product_id=${p.id}" class="text-decoration-none fw-bold">
                    <div class="harvester_img_section">
                    <img src="https://shopninja.in/bharatagri/api/public/uploads/product_img/${a[0]}" alt="">
                    <div href="harvester_inner.php?product_id=${p.id}" class="over-layer"><i class="fa fa-link"></i></div>
                    </div>
                </a>
                <div class="harvester_content_section mt-3 text-center">
                    <a href="harvester_inner.php?product_id=${p.id}" class="text-decoration-none fw-bold text-dark"><h6 class="text-dark text-truncate">${p.brand_name} ${p.model}</h6></a>
                    <div class="row w-100 contant-justify-center">
                        <div class="col-6 p-0"> <p class="mb-0" style="font-size: 14px;">${p.horse_power} Hp</p></div>
                        <div class="col-6 p-0 text-truncate" > <p class="mb-0"  style="font-size: 14px;">${p.crops_type_value}</p></div>
                    </div>
                    <a  href="harvester_inner.php?product_id=${p.id}">
                        <button type="button" class="add_btn btn-success w-100 mt-3"><i class="fa-regular fa-handshake"></i> Get on Road Price</button>
                    </a>
                </div>
            <div>
                `;
                productContainer.append(newCard);
            });

            productContainer.owlCarousel({
                items:4,
                loop: true,
                margin: 10,
                nav: true, 
                autoplay: true, 
                autoplayTimeout: 3000,
                responsiveClass: true,
                responsive: {
                    0: {
                        items: 1,
                        nav: false
                    },
                    600: {
                        items: 3,
                        nav: false
                    },
                    1000: {
                        items: 4,
                        nav: true,
                        loop: false
                    }
                }
            });
        }
    },
    error: function(error) {
        console.error('Error fetching data:', error);
    }
    });
}

function get_oldharvester() {
    var url = "https://shopninja.in/bharatagri/api/public/api/customer/get_old_harvester";
    

    $.ajax({
        url: url,
        type: "GET",
        success: function (data) {
        console.log(data, "harvster data")

        if (data.product && data.product.length > 0) {
           
            var productContainer = $("#old_harvester");
            data.product.forEach(function (p) {
                var images = p.image_names;
                var a = [];
        
                if (images) {
                    if (images.indexOf(',') > -1) {
                        a = images.split(',');
                    } else {
                        a = [images];
                    }
                }
                var newCard = `
                <div class="item box_shadow b-t-1">
              <a  href="used_harvester_inner.php?id=${p.id}" class="text-decoration-none fw-bold">
                <div class="harvester_img_section">
                  <img src="https://shopninja.in/bharatagri/api/public/uploads/product_img/${a[0]}" alt="">
                  <div href="used_harvester_inner.php?id=${p.id}" class="over-layer"><i class="fa fa-link"></i></div>
                </div>
              </a>
              <div class="harvester_content_section mt-3 text-center">
                <a href="used_harvester_inner.php?id=${p.id}" class="text-decoration-none fw-bold text-dark"><h6 class="text-dark">${p.brand_name} ${p.model}</h6></a>
                <div class="row w-100">
                  <div class="col-6 p-0"> <p class="mb-0" style="font-size: 14px; "><span>Hours Driven: </span>${p.hours_driven}</p></div>
                  <div class="col-6 p-0"> <p class="mb-0" style="font-size: 14px;">${p.crops_type_value}</p></div>
                </div>
                <a  href="used_harvester_inner.php?id=${p.id}" class="text-decoration-none fw-bold">
                <button type="button" class="add_btn btn-success w-100 mt-3"><i class="fa-regular fa-handshake"></i> Get on Road Price</button>
                </a>
              </div>
               
          
            </div>
                `;
        
                // Append the new card to the container
                productContainer.append(newCard);
            });

            productContainer.owlCarousel({
                items:4,
                loop: true,
                margin: 10,
                nav: true, // Enable navigation
                autoplay: true, // Enable auto-play
                autoplayTimeout: 3000,
                responsiveClass: true,
                responsive: {
                    0: {
                        items: 1,
                        nav: false
                    },
                    600: {
                        items: 3,
                        nav: false
                    },
                    1000: {
                        items: 4,
                        nav: true,
                        loop: false
                    }
                }
            });
        }
    },
    error: function(error) {
        console.error('Error fetching data:', error);
    }
    });
}