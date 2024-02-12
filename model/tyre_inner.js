$(document).ready(function() {
    console.log("ready!");
    $('#tyre_enq_btn').on('click', function() {
        store(); // Call your store function to handle form submission
    });
    gettyre();
    getTractorList();
});

function model_click(){
    get();
  }


function get() {
    var url = 'http://tractor-api.divyaltech.com/api/customer/get_tyre_brands';
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
    var product_id = $('#product_id').val();
    // var product_id = 2; 
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


function getTractorList() {
    var url = "http://tractor-api.divyaltech.com/api/customer/tyre_data";

    // Keep track of the total tractors and the currently displayed tractors
    var totalTyre = 0;
    var displayedTractors = 0;

    $.ajax({
        url: url,
        type: "GET",
        success: function(data) {
            var productContainer = $("#productContainer");
         

            if (data.tyre_details && data.tyre_details.length > 0) {
                totalTyre = data.tyre_details.length;

                // Display the initial set of 6 tractors
                displayTractors(data.tyre_details.slice(0, 6));

                // Show the "Load More Tractors" button if there are more tractors
                if (totalTyre > 6) {
                    $("#load_moretract").show();
                }

                // Handle "Load More Tractors" button click
                $("#load_moretract").click(function() {
                    // Display all tractors
                    displayTractors(data.tyre_details);

                    // Hide the "Load More Tractors" button
                    $("#load_moretract").hide();
                });
            }
        },
        error: function(error) {
            console.error('Error fetching data:', error);
        }
    });
}

function displayTractors(tractors) {
    var productContainer = $("#productContainer");
    var tableData = $("#tableData");
    // Clear existing content
    productContainer.html('');
    tableData.html('');
    tractors.sort((a, b) => b.product_id - a.product_id);
    var tractorsToDisplay = tractors.slice(0, 4);
    tractorsToDisplay.forEach(function (p) {
        var images = p.image_names;
        var a = [];

        if (images) {
            if (images.indexOf(',') > -1) {
                a = images.split(',');
            } else {
                a = [images];
            }
        }

        var cardId = `card_${p.product_id}`; // Dynamic ID for the card
        var modalId = `used_tractor_callbtn_${p.product_id}`; // Dynamic ID for the modal
        var formId = `contact-seller-call_${p.id}`;

        var newCard2 = `
        <div class="col-12 col-lg-3 col-md-3 col-sm-3 mb-3" id="${cardId}">
                                <div class="h-auto success__stry__item d-flex flex-column shadow tyre_card">
                                    <div class="thumb">
                                        <a href="tyre_inner.php?product_id=${p.id}">
                                            <div class="">

                                                <img width="275" height="150" src="http://tractor-api.divyaltech.com/uploads/tyre_img/${a[0]}" class="img-fluid" alt="img">

                                            </div>
                                        </a>
                                    </div>
                                    <div class="content d-flex flex-column flex-grow-1 ">
                                        <div class="caption text-center">
                                            <a href="tyre_inner.php?product_id=${p.id}" class="text-decoration-none text-dark">
                                                <p class="pt-3"><strong
                                                        class="series_tractor_strong text-center h6 fw-bold "> ${p.brand_name} ${p.tyre_model}</strong></p>
                                            </a>
                                        </div>
                                        <div class="power">
                                            <a href="tyre_inner.php" class="text-decoration-none text-dark">
                                            <div class="col-12 px-3">
                                                <div class="row ">
                                                   
                                                    <div class="col-6 col-lg-6 col-md-6 col-sm-6  engineoil_details pe-1">

                                                        <p class="text-dark" style="text-transform:uppercase; font-weight:bolder"> ${p.tyre_position}</p>
                                                    </div>
                                                    <div class="col-6 col-lg-6 col-md-6 col-sm-6  engineoil_details ps-1">

                                                        <p id="adduser" type="" class="text-dark">${p.tyre_size
                                                        }
                                                        </p>
                                                    </div>
                                                    <div class="col-12 col-lg-12 col-md-12 col-sm-12  engineoil_details">

                                                    <p class="text-dark ">Compatible with: <span style="text-transform:uppercase; font-weight:bolder">${p.tyre_category}</span></p>
                                                </div>
                                                </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-12">
                                           
                                            <button type="button" class="add_btn btn-success w-100" onclick="model_click()" data-bs-toggle="modal" data-bs-target="#${modalId}">
                                            Get  Price
                                            </button>
                                        </div>
                                    </div>
                                </div> 
                                <div class="modal fade" id="${modalId}" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-lg modal-dialog-centered">
                                        <div class="modal-content">
                                            <div class="modal-header  modal_head">
                                                <h5 class="modal-title text-white ms-1" id="staticBackdropLabel">Fill
                                                    the form to Get Tyre Price ${p.brand_name} ${p.tyre_model}</h4>
                                            </div>
                                            <div class="modal-body bg-white mt-3">
                                                <div class="model-cont">
                                                    <form id="${formId}" name="hire_inner" method="POST" onsubmit="return false">
                                                        <div class="row">
                                                            <input type="hidden" id="brandName" value="${p.brand_name}" >
                                                            <input type="hidden" id="modelName" value="${p.oil_model}" >
                                                            <input type="hidden" id="enquiry_type_id" value="10" >
                                                            <input type="hidden" id="product_id" value="${p.id}" >
                                                            <div class="col-12 col-lg-6 col-md-6 col-sm-6">
                                                                <div class="form-outline">
                                                                    <label for="f_name" class="form-label fw-bold text-dark"> <i class="fa-regular fa-user"></i> First Name</label>
                                                                    <input type="text" class="form-control mb-0" placeholder="Enter Your Name" id="firstName" name="firstName">
                                                                </div>
                                                            </div>
                                                            <div class="col-12 col-lg-6 col-md-6 col-sm-6">
                                                                <div class="form-outline">
                                                                    <label for="last_name" class="form-label fw-bold text-dark"> <i class="fa-regular fa-user"></i> Last Name</label>
                                                                    <input type="text" class="form-control mb-0" placeholder="Enter Your Name" id="lastName" name="lastName">
                                                                </div>
                                                            </div>
                                                            <div class="col-12 col-sm-6 col-md-6 col-lg-6 mt-4">
                                                                <div class="form-outline">
                                                                    <label for="eo_number" class="form-label text-dark fw-bold"> <i class="fa fa-phone" aria-hidden="true"></i> Phone Number</label>
                                                                    <input type="text" class="form-control mb-0" placeholder="Enter Number" id="mobile_number" name="mobile_number">
                                                                </div>
                                                            </div>
                                                            <div class="col-12 col-sm-12 col-md-6 col-lg-6 mt-4">
                                                                <div class="form-outline">
                                                                    <label for="eo_state" class="form-label text-dark fw-bold"> <i class="fas fa-location"></i> State</label>
                                                                    <select class="form-select py-2 " aria-label=".form-select-lg example" id="state" name="state">
                                                                        <option value="" selected disabled="">Select State </option>  
                                                                         <option value="Chhattisgarh">Chhattisgarh</option>
                                                                        <option value="Other">Other</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="col-12 col-sm-12 col-md-6 col-lg-6 mt-4">
                                                                <div class="form-outline">
                                                                    <label for="eo_dist" class="form-label fw-bold  text-dark"><i class="fa-solid fa-location-dot"></i> District</label>
                                                                    <select class="form-select py-2 " aria-label=".form-select-lg example" id="district" name="district">
                                                                        <option value="" selected disabled="">Select District</option>
                                                                        <option value="Raipur">Raipur</option>
                                                                        <option value="Bilaspur">Bilaspur</option>
                                                                        <option value="Durg">Durg</option>
                                                                    </select>
                                                                </div>                    
                                                            </div>       
                                                            <div class="col-12 col-sm-6 col-md-6 col-lg-6 mt-4">
                                                                <div class="form-outline">
                                                                    <label for="eo_tehsil" class="form-label fw-bold text-dark"> Tehsil</label>
                                                                    <select class="form-select py-2 " aria-label=".form-select-lg example" id="Tehsil" name="Tehsil">
                                                                        <option value="" selected disabled="">Select Tehsil</option>
                                                                        <option value="Durg">Durg</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div> 
                                                    </form>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-bs-dismiss="modal">Close</button>
                                                <button type="submit" id="button_hire" class="btn add_btn btn-success  btn_all" onclick="savedata('${formId}')" data-bs-dismiss="modal">Submit</button>        
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                    `;

                    productContainer.append(newCard2);
                });
            
                // Initialize Owl Carousel
                // initializeOwlCarousel();

                // function initializeOwlCarousel() {
                //     $('#productContainer').owlCarousel({
                //         items: 4,
                //         loop: true,
                //         margin: 10,
                //         responsiveClass: true,
                //         responsive: {
                //             0: {
                //                 items: 1,
                //                 nav: false
                //             },
                //             600: {
                //                 items: 3,
                //                 nav: false
                //             },
                //             1000: {
                //                 items: 4,
                //                 nav: false,
                //                 loop: false
                //             }
                //         },
                //         loopFillGroupWithBlank: true
                //     });
                // }
                 // Add an event listener to open the modal
    // $('[data-bs-toggle="modal"]').on('click', function () {
    //     var targetModalId = $(this).data('bs-target');
    //     $(targetModalId).modal('show');
    // });
}
            
           
function tyre_enquiry(formId) {
    var firstName = $(`#${formId} #firstName`).val();
    var product_id = $(`#${formId} #product_id`).val();
    var lastName = $(`#${formId} #lastName`).val();
    var mobile_number = $(`#${formId} #mobile_number`).val();
    var state = $(`#${formId} #state`).val();
    var district = $(`#${formId} #district`).val();
    var Tehsil = $(`#${formId} #Tehsil`).val();
    var enquiry_type_id =$(`#${formId} #enquiry_type_id`).val();
    var paraArr = {
      'first_name': firstName,
      'last_name': lastName,
      'mobile': mobile_number,
      'state': state,
      'district': district,
      'tehsil': Tehsil,
      'product_id':product_id,
      'enquiry_type_id':enquiry_type_id,
    };
  
//   var apiBaseURL =APIBaseURL;
//   var url = apiBaseURL + 'customer_enquiries';
var url ='http://tractor-api.divyaltech.com/api/customer/customer_enquiries';
    console.log(url);
  
    var token = localStorage.getItem('token');
    var headers = {
      'Authorization': 'Bearer ' + token
    };
    $.ajax({
      url: url,
      type: "POST",
      data: paraArr,
      headers: headers,
      success: function (result) {
        console.log(result, "result");
    console.log("Add successfully");
    $("#used_tractor_callbnt_").modal('hide'); 
    var msg = "Added successfully !"
    $("#errorStatusLoading").modal('show');    
    $("#errorStatusLoading").find('.modal-title').html('<p class="text-center">Congratulation..! Requested Successful</p>');
 
    $("#errorStatusLoading").find('.modal-body').html(msg);
    $("#errorStatusLoading").find('.modal-body').html('<img src="assets/images/successfull.gif" style="display:block; margin:0 auto;" class="w-50 text-center" alt="Successfull Request"></img>');
    $("#errorStatusLoading").find('.modal-body').html('sdfghj');
  
  
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
  function savedata(formId){
    tyre_enquiry(formId);
    console.log("confirm");
    console.log("Form submitted successfully");
  }