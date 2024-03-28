

$(document).ready(function() {
    console.log("ready!");
    $('#delership_enq_btn').click(store);
    get_oldharvester();
    get_harvester();
});


function get() {
    var url = 'http://tractor-api.divyaltech.com/api/customer/get_brand_for_finance';
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

// Store data through form
function store(event) {
    event.preventDefault();
    var enquiry_type_id = $('#enquiry_type_id').val();
    var product_id = 2; 
    var brand_name = $('#b_brand_1').val();
    var first_name = $('#f_name_1').val();
    var last_name = $('#l_name_1').val();
    var mobile = $('#mob_num').val();
    var state = $('#state_s').val();
    var district = $('#district_s').val();
    var tehsil = $('#t_tehsil').val();
  
   
    var apiBaseURL = "http://tractor-api.divyaltech.com/api";
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
  
    // Make an AJAX request to the server
    $.ajax({
        url: url,
        type: 'POST',
        data: data,
        processData: false,
        contentType: false,
        success: function (result) {
            console.log(result, 'result');
            $("#used_tractor_callbnt_").modal('hide');
            var msg = 'Added successfully !';
            $("#errorStatusLoading").modal('show');
            $("#errorStatusLoading").find('.modal-title').html('<p class="text-center">Congratulation..! Requested Successful</p>');
            $("#errorStatusLoading").find('.modal-body').html(msg);
            $("#errorStatusLoading").find('.modal-body').html('<img src="assets/images/7efs.gif" style="display:block; margin:0 auto;" class="w-50 text-center" alt="Successfull Request"></img>');
            console.log('Add successfully');
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

function get_harvester() {
    var url = "http://tractor-api.divyaltech.com/api/customer/get_new_harvester";
    

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
                  <img src="http://tractor-api.divyaltech.com/uploads/product_img/${a[0]}" alt="">
                  <div href="harvester_inner.php?product_id=${p.id}" class="over-layer"><i class="fa fa-link"></i></div>
                </div>
              </a>
              <div class="harvester_content_section mt-3 text-center">
                <a href="harvester_inner.php?product_id=${p.id}" class="text-decoration-none fw-bold text-dark"><h6 class="text-dark">${p.brand_name} ${p.model}</h6></a>
                <div class="row w-100">
                  <div class="col-6 p-0"> <p class="mb-0" style="font-size: 14px;">${p.horse_power} Hp</p></div>
                  <div class="col-6 p-0"> <p class="mb-0" style="font-size: 14px;">${p.crops_type_value}</p></div>
                </div>
                <button type="button" class="add_btn btn-success w-100 mt-3"><i class="fa-regular fa-handshake"></i> Get on Road Price</button>
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



function get_oldharvester() {
    var url = "http://tractor-api.divyaltech.com/api/customer/get_old_harvester";
    

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
                  <img src="http://tractor-api.divyaltech.com/uploads/product_img/${a[0]}" alt="">
                  <div href="used_harvester_inner.php?id=${p.id}" class="over-layer"><i class="fa fa-link"></i></div>
                </div>
              </a>
              <div class="harvester_content_section mt-3 text-center">
                <a href="used_harvester_inner.php?id=${p.id}" class="text-decoration-none fw-bold text-dark"><h6 class="text-dark">${p.brand_name} ${p.model}</h6></a>
                <div class="row w-100">
                  <div class="col-6 p-0"> <p class="mb-0" style="font-size: 14px; "><span>Hours Driven: </span>${p.hours_driven}</p></div>
                  <div class="col-6 p-0"> <p class="mb-0" style="font-size: 14px;">${p.crops_type_value}</p></div>
                </div>
                <button type="button" class="add_btn btn-success w-100 mt-3"><i class="fa-regular fa-handshake"></i> Get on Road Price</button>
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