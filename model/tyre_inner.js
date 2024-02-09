$(document).ready(function() {
    console.log("ready!");
    $('#tyre_enq_btn').on('click', function() {
        store(); // Call your store function to handle form submission
    });
    gettyre();
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
            const selects = document.querySelectorAll('#brand_select');
  
            selects.forEach(select => {
                select.innerHTML = '<option selected disabled value="">Please select an option</option>';
  
                if (data.brands.length > 0) {
                    data.brands.forEach(row => {
                        const option = document.createElement('option');
                        option.textContent = row.brand_name;
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
  get();

// Store data through form
function store() {
    var enquiry_type_id = $('#enquiry_type_id').val();
    var product_id = 1; 
    var brand_name = $('#brand_select').val();
    var first_name = $('#f_name').val();
    var last_name = $('#l_name').val();
    var mobile = $('#mob_num').val();
    var state = $('#s_state').val();
    var district = $('#s_district').val();
    var tehsil = $('#t_tehsil').val();
  
    var apiBaseURL = "http://tractor-api.divyaltech.com/api";
    var endpoint = '/customer/customer_enquiries';
    var url = apiBaseURL + endpoint;

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
            console.log(result, 'result');
            $("#staticBackdrop3").modal('hide');
            var msg = 'Added successfully !';
            $("#errorStatusLoading").modal('show');
            $("#errorStatusLoading").find('.modal-title').html('<p class="text-center">Congratulation..! Requested Successful</p>');
            $("#errorStatusLoading").find('.modal-body').html(msg);
            $("#errorStatusLoading").find('.modal-body').html('<img src="assets/images/7efs.gif" style="display:block; margin:0 auto;" class="w-50 text-center" alt="Successfull Request"></img>');
            console.log('Add successfully');
         
             $(".modal-backdrop").hide();
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

function gettyre() {
    console.log(window.location)
    var urlParams = new URLSearchParams(window.location.search);
    var productId = urlParams.get('product_id');
    var url = "http://tractor-api.divyaltech.com/api/customer/get_tyre_data_by_id/" + productId;
    console.log(url);
    $.ajax({
        url: url,
        type: "GET",
        success: function(data) {
        console.log(data, 'abc');
        document.getElementById('brand_name1').innerText=data.tyre_details[0].brand_name;
        document.getElementById('tyre').innerText=data.tyre_details[0].tyre_model;
        document.getElementById('brand_name').innerText=data.tyre_details[0].tyre_model;
        // console.log(data.product[0].brand_name);
       
        document.getElementById('tyre_type').innerText=data.tyre_details[0].tyre_category;
        // document.getElementById('engine_powerhp').innerText=data.product[0].hp_category;
        document.getElementById('tyre_size').innerText=data.tyre_details[0].tyre_size;

            if(data.tyre_details[0].image_names != null){
                var imageNames = data.tyre_details[0].image_names.split(',');
            }
     

        // Select the carousel container
        var carouselContainer = $('.swiper-wrapper_buy');

        // Clear existing slides
        carouselContainer.empty();

        // Iterate through the image names and create carousel slides
        if(data.tyre_details[0].image_names != null){
        imageNames.forEach(function(imageName) {
            var imageUrl = "http://tractor-api.divyaltech.com/uploads/tyre_img/" + imageName.trim(); // Update the path
            var slide = $('<div class="swiper-slide swiper-slide_buy"><img class="img_buy" src="' + imageUrl + '" /></div>');
            carouselContainer.append(slide);
        });
    }

        // Initialize or update the Swiper carousel
        var mySwiper = new Swiper('.swiper_buy', {
            // Your Swiper configuration options
        });
        },
        error: function (error) {
            console.error('Error fetching data:', error);
        }
    });
}


