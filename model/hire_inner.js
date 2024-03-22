$(document).ready(function() {
    console.log("ready!");
    $('#button_hire').click(storedata);
    get_rent_data();
    getHireTracById();
    get_oldharvester();
    $('#Verify').click(verifyotp);
    
});
function getHireTracById() {

    var urlParams = new URLSearchParams(window.location.search);
    var Id = urlParams.get('id');
    var url = 'http://tractor-api.divyaltech.com/api/customer/get_rent_data_by_id/' + Id;
    $.ajax({
        url: url,
        type: "GET",
        success: function(data) {
            // Processing data on successful response
            var brand_model = data.rent_details.data1[0].brand_name + " " + data.rent_details.data1[0].model;
            var full_name = data.rent_details.data1[0].first_name + " " + data.rent_details.data1[0].last_name;
            var fullname = data.rent_details.data1[0].first_name + " " + data.rent_details.data1[0].last_name;
            // Setting data to specific HTML elements
            document.getElementById('brand_name1').innerText = brand_model;
            document.getElementById('name_first').innerText = full_name;
            document.getElementById('set_dist').innerText = data.rent_details.data1[0].district_name;
            document.getElementById('set_state').innerText = data.rent_details.data1[0].state_name;
            document.getElementById('power_hp').innerText = data.rent_details.data2[0].rate + "/-";
            document.getElementById('engine_cc').innerText = " per " + data.rent_details.data2[0].rate_per;
            document.getElementById('customer_id').value = data.rent_details.data2[0].customer_id;
            document.getElementById('brand_name_brand').innerText = data.rent_details.data1[0].brand_name;
            document.getElementById('model_form').innerText = data.rent_details.data1[0].model;
            document.getElementById('slr_name').value = fullname;
            document.getElementById('mob_num').value = data.rent_details.data1[0].mobile;
            // Extracting image names from data
            var imageNames = data.rent_details.data2[0].images.split(',');

            // Selecting the carousel container
            var carouselContainer = $('.swiper-wrapper_buy');

            // Clearing existing slides
            carouselContainer.empty();

            // Iterating through image names to create carousel slides
            imageNames.forEach(function(imageName) {
                var imageUrl = "http://tractor-api.divyaltech.com/uploads/rent_img/" + imageName.trim();
                var slide = $('<div class="swiper-slide swiper-slide_buy"><img class="img_buy" src="' + imageUrl + '" /></div>');
                carouselContainer.append(slide);
            });

            // Initializing or updating the Swiper carousel
            var mySwiper = new Swiper('.swiper_buy', {
                // Your Swiper configuration options
            });

        },
        error: function(error) {
            // Error handling
            console.error('Error fetching data:', error);
        }
    });
}

function storedata() {
    var enquiry_type_id = 19;
    // var model = $('#model_form').val(); 
    // var brand = $('#brand_name_brand').val();  
    var customer_id = $('#customer_id').val();  
    var first_name = $('#first_name').val();
    var last_name = $('#last_name').val();
    var mobile_number = $('#mobile_number').val();
    var state = $('#state_form').val();
    var district = $('#the_district').val();
    var tehsil = $('#the_tehsil').val();
    var price = $('#price_form').val();
    price = price.replace(/[\,\.\s]/g, '');
    var paraArr = {
        // 'model': model,
        // 'brand_id': brand,
        'enquiry_type_id': enquiry_type_id,
        'product_id': customer_id,
        'first_name': first_name,
        'last_name': last_name,
        'mobile': mobile_number,
        'state': state,
        'district': district,
        'tehsil': tehsil,
        'price': price,
    };

    var url = 'http://tractor-api.divyaltech.com/api/customer/customer_enquiries';

    // You can keep the token-related code if needed
    var token = localStorage.getItem('token');
    var headers = {
        'Authorization': 'Bearer ' + token
    };
    $.ajax({
        url: url,
        type: "POST",
        data: paraArr,
        success: function (result) {
          console.log(result, "result");
          $("#used_tractor_callbnt_").modal('hide'); 
          var msg = "Added successfully !";
          // $('#get_OTP_btn').modal('show');
          $("#errorStatusLoading").modal('hide');
          $('#get_OTP_btn').modal('show');
          get_otp(); // Pass mobile number to get_otp function
        
        },
        error: function (error) {
          console.error('Error fetching data:', error);
          var msg = error;
          $("#errorStatusLoading").modal('show');
          $("#errorStatusLoading").find('.modal-title').html('<p class="text-center">Process Failed..! Enter Valid Detail</p>');
          $("#errorStatusLoading").find('.modal-body').html(msg);
          $("#errorStatusLoading").find('.modal-body').html('<img src="assets/images/comp_3.gif" style="display:block; margin:0 auto;" class="w-50 text-center" alt="Successfull Request"></img>');
          // 
        }
      });
}
function get_otp() {
    var phone = $('#mobile_number').val();
    var url = "http://tractor-api.divyaltech.com/api/customer/customer_login";
 
    var paraArr = {
     'mobile': phone,
   };
   //  var token = localStorage.getItem('token');
   //   var headers = {
   //   'Headers': 'Bearer ' + token
   //   };
    $.ajax({
      url: url,
      type: "POST",
      data: paraArr,
     //  headers: headers,
      success: function (result) {
        console.log(result, "result");
       
      },
      error: function (error) {
        console.error('Error fetching data:', error);
      }
    });
  }


  function verifyotp() {
    var mobile = document.getElementById('mobile_number').value;
    var otp = document.getElementById('otp').value;

    var paraArr = {
        'otp': otp,
        'mobile': mobile,
    }
    var url = 'http://tractor-api.divyaltech.com/api/customer/verify_otp';
    $.ajax({
        url: url,
        type: "POST",
        data: paraArr,
        success: function (result) {
            console.log(result);

            // Assuming your model has an ID 'myModal', hide it on success
            $('#get_OTP_btn').modal('hide'); // Assuming it's a Bootstrap modal
            $('#staticBackdrop1').modal('show');
            // Reset input fields
            // document.getElementById('phone').value = ''; 
            // document.getElementById('otp').value = ''; 

            // Access data field in the response
        }, 
        error: function (xhr, textStatus, errorThrown) {
            console.log(xhr.status, 'error');
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
function get_rent_data() {
    var url = "http://tractor-api.divyaltech.com/api/customer/get_rent_data";

    $.ajax({
        url: url,
        type: "GET",
        success: function (response) {
            var productContainer = $("#new_harvester");
            productContainer.empty();

            var dataMerged = response.rent_details.data1.map(t1 => ({ ...t1, ...response.rent_details.data2.find(t2 => t2.customer_id === t1.id) }));

            dataMerged.forEach(function (p) {
                appendCard(productContainer, p);
            });
            productContainer.owlCarousel({
                items: 4,
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
                },
                loopFillGroupWithBlank: true
            });
        },
        error: function (error) {
            console.error('Error fetching data:', error);
        }
    });
}
    function appendCard(container, p) {
        var images = p.images;
        var a = [];

        if (images) {
            if (images.indexOf(',') > -1) {
                a = images.split(',');
            } else {
                a = [images];
            }
        }
        var cardId = `card_${p.product_id}`; // Dynamic ID for the card
        var modalId = `used_tractor_callbnt_${p.product_id}`; // Dynamic ID for the modal
        var formId = `contact-seller-call_${p.product_id}`; // Dynamic ID for the form

        var images = p.images;
        // var rates = p.rates;
        var ratesArray = p.rates ? p.rates.split(',') : [];
        var ratePersArray = p.rate_pers ? p.rate_pers.split(',') : [];

        var rateDisplay = ratesArray.length > 0 ? `${ratesArray[0]}/${ratePersArray[0] || ''}` : '';
        // var rentMappingIds = p.rent_mapping_ids;
        var district = p.district || '';
        var state = p.state || '';
        var newCard = `
        <div class="item box_shadow b-t-1" id="${cardId}"> 
        <div class="h-auto success__stry__item d-flex flex-column shadow ">
            <div class="thumb">
                <a href="hire_inner.php?id=${p.id}">
                    <div class="ratio ratio-16x9">
                        <img src="http://tractor-api.divyaltech.com/uploads/rent_img/${a[0]}" class="object-fit-cover " alt="${p.description}">
                    </div>
                </a>
                <div class="content d-flex flex-column flex-grow-1 ">
                    <div class="row text-center">
                        <p class="text-center fw-bold" id="model_brand">${p.brand_name} ${p.model}</p>
                        <div class="col-4 col-md-4 col-lg-4 col-sm-4">
                        <p class="text-dark custom-font-size fw-bold"><i class="fa-solid fa-indian-rupee-sign"></i> ${rateDisplay} </p>
                        </div>
                        <div class="col-4 col-md-4 col-lg-4 col-sm-4">
                           
                            <p class="text-dark custom-font-size fw-bold"> <i class="fas fa-calendar-alt"></i> Year: ${p.purchase_year}</p>
                        </div>
                        <div class="col-4 col-md-4 col-lg-4 col-sm-4">
                            <p class="text-dark custom-font-size fw-bold"> <i class="far fa-circle"></i> Radius ${p.working_radius}</p>
                        </div>
                    </div>
                        <div class="row text-center fw-bold text-primary">
                            <div class=" col-12 mb-2">${district || ''} ${state || ''}</div>
                        </div>
                        </a>
                    </div>
                    <button type="button" class="add_btn btn-success w-100" data-bs-toggle="modal" data-bs-target="#${modalId}">
                        Send Enquiry
                    </button>
                </div>
            </div>
            <div class="modal fade" id="${modalId}" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                <div class="modal-dialog modal-lg modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header modal_head">
                                        <h5 class="modal-title text-white ms-1" id="">Generate Enquiry</h5>
                                        <button type="button" class="btn-close btn-success" data-bs-dismiss="modal" aria-label="Close"><img src="assets/images/close.png" class="w-25"></button>
                                        </div>
                                        <!-- MODAL BODY -->
                                        <div class="modal-body">
                                        <form id="${formId}" method="POST" onsubmit="return false">
                                                <div class="row">
                                                <div class="row px-3 ">
                                    <div class="col-12 col-lg-6 col-md-6 col-sm-6 " hidden>
                                        <label for="name" class="form-label fw-bold text-dark"> <i class="fa-regular fa-user"></i> enquiryName</label>
                                        <input type="text" class="form-control" placeholder="Enter Your Name" id="enquiry_type_id" value="19" name="fname">
                                    </div>
                                    <div class="col-12 col-lg-6 col-md-6 col-sm-6 " hidden>
                                        <label for="name" class="form-label fw-bold text-dark"> <i class="fa-regular fa-user"></i> product_id</label>
                                        <input type="text" class="form-control" id="product_id" value="${p.id}" hidden> 
                                    </div>
                                    <div class="col-12 col-lg-6 col-md-6 col-sm-6 "hidden>
                                        <label for="name" class="form-label fw-bold text-dark"> <i class="fa-regular fa-user"></i> First Name</label>
                                        <input type="text" class="form-control" placeholder="Enter Your Name" value="${p.brand_name}" id="brand_name" name="">
                                    </div>
                                    <div class="col-12 col-lg-6 col-md-6 col-sm-6 "hidden>
                                        <label for="name" class="form-label fw-bold text-dark"> <i class="fa-regular fa-user"></i> First Name</label>
                                        <input type="text" class="form-control" placeholder="Enter Your Name" value="${p.model}" id="model" name="">
                                    </div>
                                    <div class="col-12 col-lg-6 col-md-6 col-sm-6 ">
                                        <label for="name" class="form-label fw-bold text-dark"> <i class="fa-regular fa-user"></i> First Name</label>
                                        <input type="text" class="form-control" placeholder="Enter Your Name" id="fname" name="fname">
                                    </div>
                                    <div class="col-12 col-lg-6 col-md-6 col-sm-6 ">
                                        <label for="name" class="form-label fw-bold text-dark"> <i class="fa-regular fa-user"></i> Last Name</label>
                                        <input type="text" class="form-control" placeholder="Enter Your Name" id="lname" name="lname">
                                    </div>
                                    <div class="col-12 ">
                                        <label for="number" class="form-label text-dark fw-bold"> <i class="fa fa-phone" aria-hidden="true"></i> Phone Number</label>
                                        <input type="text" class="form-control" placeholder="Enter Number" id="number" name="number">
                                        <p class="text-danger">*please provide valid Phone Number.</p>
                                    </div>
                                    <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                                        <label for="yr_state" class="form-label text-dark fw-bold" id="state" name="state"> <i class="fas fa-location"></i> State</label>
                                        <select class="form-select py-2" aria-label=".form-select-lg example" id="state_form" name="state">
                                            <option value>Select State</option>
                                            <option value="chhattisgarh">Chhattisgarh</option>
                                            <option value="other">Other</option>
                                        </select>
                                    </div>
                                    <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                                        <label class="form-label text-dark"><i class="fa-solid fa-location-dot"></i> District</label>
                                        <select class="form-select py-2 " aria-label=".form-select-lg example" name="district" id="district_form">
                                            <option value>Select District</option>
                                            <option value="raipur">Raipur</option>
                                            <option value="bilaspur">Bilaspur</option>
                                            <option value="durg">Durg</option>
                                        </select>
                                    </div>
                                    <div class="col-12 col-sm-12 col-md-6 col-lg-6 mt-2">
                                        <label for="yr_tehsil" class="form-label text-dark"> Tehsil</label>
                                        <input type="yr_tehsil" class="form-control" placeholder="Enter Tehsil" id="tehsil" name="tehsil">
                                    </div>
                                    <div class="col-12 col-sm-12 col-md-6 col-lg-6 mt-2">
                                        <label for="yr_price" class="form-label text-dark">Price</label>
                                        <input type="yr_price" class="form-control" placeholder="Enter Price" id="price_form" name="price">
                                    </div>
                                </div>          
                            </div>
                            <div class="modal-footer">
                            <button type="submit" id="submit_enquiry" class="btn add_btn btn-success w-100 btn_all" onclick="savedata('${formId}')"
                            data-bs-dismiss="modal">Submit</button>
                            </div>      
                            </form>                             
                            </div>
                            </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

             `;
        container.append(newCard);
    }
  
   // get_rent_data();
   function formatPriceWithCommas(price) {
    // Check if the price is not a number
    if (isNaN(price)) {
        return price; // Return the original value if it's not a number
    }
    
    // Format the price with commas in Indian format
    return new Intl.NumberFormat('en-IN').format(price);
}



    function get_oldharvester() {
        var url = "http://tractor-api.divyaltech.com/api/customer/get_old_harvester";
        
    
        $.ajax({
            url: url,
            type: "GET",
            success: function (data) {
            console.log(data, "harvster data")
    
            if (data.product && data.product.length > 0) {
               
                var productContainer = $("#old_harvester_car");
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
                    var formattedPrice = formatPriceWithCommas(p.price);
                    var newCard = `
                    <div class="item box_shadow b-t-1">
                    <div class="h-auto success__stry__item d-flex flex-column shadow">
                    <div class="thumb">
                        <a href="used_harvester_inner.php?id=${p.customer_id}">
                            <div class="ratio ratio-16x9">
                                <img src="http://tractor-api.divyaltech.com/uploads/product_img/${a[0]}" class="object-fit-cover " alt="img">
                            </div>
                        </a>
                    </div>
                    <div class="content d-flex flex-column flex-grow-1 ">
                        <div class="caption text-center">
                            <a href="used_harvester_inner.php?id=${p.customer_id}" class="text-decoration-none text-dark">
                          
                                <p class="pt-1"><strong class="series_tractor_strong text-center h6 fw-bold text-truncate "><span>${p.brand_name}</span> <span>${p.model}</span></strong></p>
                            </a>      
                        </div>
                        <div class="power text-center">
                            <div class="row ">
                                <div class="col-12 col-lg-6 col-md-6 col-sm-6"><p class="text-success text-truncate ps-2">Price : ₹ <span>${formattedPrice}</span></p></div>
                                <div class="col-12 col-lg-6 col-md-6 col-sm-6" style="padding-right: 32px;">
                                     <p id="adduser" type="" class=" rounded-3"> Year : <span>${p.purchase_year}</span></p>
                                </div>
                            </div>  
                            <div class="col-12 text-center">
                                <p class="text-dark fw-bold">Hours :<span>${p.hours_driven}</span> </p>
                            </div>  
                        </div>
                    </div>
                    <div class="col-12">
                        <a href="used_harvester_inner.php?id=${p.customer_id}" id="adduser"class="btn-state btn w-100 btn-success text-decoration-none text-white text-truncate p-2 text-truncate"><span>${p.district_name}</span>, <span><span>${p.state_name}</span></span>
                        </a>
                    </div>

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


 populateDropdownsFromClass('state-dropdown', 'district-dropdown', 'tehsil-dropdown');
