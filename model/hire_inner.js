$(document).ready(function() {
    console.log("ready!");
    $('#button_hire').click(storedata);

    getHireTracById();


});
function getHireTracById() {
    console.log('tyufhghfjghyfjkh');
    var urlParams = new URLSearchParams(window.location.search);
    var Id = urlParams.get('id');
    console.log(Id,'fghjfdghjkdfghjfgh');
    var url = 'http://tractor-api.divyaltech.com/api/customer/get_rent_data_by_id/' + Id;
   
    $.ajax({
        url: url,
        type: "GET",
        success: function(data) {
        console.log(data, 'abc');
        document.getElementById('model_name').innerText=data.rent_details.data1[0].model;
        document.getElementById('name_first').innerText=data.rent_details.data1[0].first_name;
        document.getElementById('set_dist').innerText=data.rent_details.data1[0].district ;
        document.getElementById('set_state').innerText=data.rent_details.data1[0].state;
        document.getElementById('power_hp').innerText=data.rent_details.data2[0].rate;
        document.getElementById('engine_cc').innerText=data.rent_details.data2[0].rate_per;
        document.getElementById('model_name_2').innerText=data.rent_details.data1[0].model;
     
     
        var product = data.rent_details.data1[0];

        // Split the image names into an array
        var imageNames = product.image_name.split(',');

        // Select the carousel container
        var carouselContainer = $('.swiper-wrapper_buy');

        // Clear existing slides
        carouselContainer.empty();

        // Iterate through the image names and create carousel slides
        imageNames.forEach(function(imageName) {
            var imageUrl = "http://tractor-api.divyaltech.com/uploads/rent_img/" + imageName.trim(); // Update the path
            var slide = $('<div class="swiper-slide swiper-slide_buy"><img class="img_buy" src="' + imageUrl + '" /></div>');
            carouselContainer.append(slide);
        });

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

function storedata() {
    var enquiry_type_id = $('#enquiry_type_id').val();
    var product_id = 192;  // You may need to adjust this based on your logic
    var first_name = $('#first_name').val();
    var last_name = $('#last_name').val();
    var mobile_number = $('#mobile_number').val();
    var state = $('#the_state').val();
    var district = $('#the_district').val();
    var tehsil = $('#the_tehsil').val();

    var paraArr = {
        'enquiry_type_id': enquiry_type_id,
        'product_id': product_id,
        'first_name': first_name,
        'last_name': last_name,
        'mobile': mobile_number,
        'state': state,
        'district': district,
        'tehsil': tehsil,
    };

    var url = 'http://tractor-api.divyaltech.com/api/customer/customer_enquiries';

    // You can keep the token-related code if needed
    var token = localStorage.getItem('token');
    var headers = {
        'Authorization': 'Bearer ' + token
    };
    $.ajax({
        url: url,
        type: 'POST',  
        data: paraArr,
        // headers: headers, // Remove headers if not needed
        success: function (result) {
            console.log(result, "result");
            $("#used_tractor_callbnt_").modal('hide'); 
            var msg = "Added successfully !"
            $("#errorStatusLoading").modal('show');    
            $("#errorStatusLoading").find('.modal-title').html('<p class="text-center">Congratulation..! Requested Successful</p>');
            $("#errorStatusLoading").find('.modal-body').html(msg);
            $("#errorStatusLoading").find('.modal-body').html('<img src="assets/images/7efs.gif" style="display:block; margin:0 auto;" class="w-50 text-center" alt="Successfull Request"></img>');
            $("#staticBackdrop").modal('hide');
            
            // Reload the page after 2 seconds (adjust the time)
            setTimeout(function () {
                window.location.reload();
            }, 2000);
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

function displaynursery(nursery) {
    var productContainer = $("#productContainer");
    var tableData = $("#tableData");
    // Clear existing content
    productContainer.html('');
    tableData.html('');

    
    nursery.forEach(function (p) {
        console.log(p,"ppp")
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
        var modalId = `nursery_callbnt_${p.product_id}`; // Dynamic ID for the modal
        var formId = `nursery_enquiry_form_${p.product_id}`; // Dynamic ID for the form
        

        var newCard2 = `
        <div class="col-12 mb-4" id="${cardId}">
            <a href="nursery_inner.php?id=${p.id}"
                class="h-auto success__stry__item text-decoration-none d-flex flex-column shadow ">
                <div class="thumb">
                    <div>
                        <div class="ratio ratio-16x9">
                            <img src="http://tractor-api.divyaltech.com/uploads/nursery_img/${a[0]}" class="object-fit-cover " alt="img">
                        </div>
                    </div>
                </div>
                <div class="content d-flex flex-column flex-grow-1 ">
                    <div class="power text-center mt-3">
                        <div class="col-12">
                            <p class="text-success fw-bold">${p.nursery_name}</p>
                        </div>
                    </div>
                    <div class="row text-center">
                        <div class="col-12 text-center">
                            <p class="fw-bold pe-3">${p.district}, ${p.state}</p>
                        </div>
                    </div>
                </div>
            </a>
            <div class="col-12 btn-success">
                <button type="button" class="btn btn-success py-2 w-100" data-bs-toggle="modal"
                    data-bs-target="#${modalId}"><i class="fa-solid fa-phone"></i>
                    Contact Nursery
                </button>
            </div>
    
            <!-- Modal -->
            <div class="modal fade" id="${modalId}" data-bs-backdrop="static"
                data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel"
                aria-hidden="true">
                <div class="modal-dialog modal-lg modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header  modal_head">
                            <h5 class="modal-title text-white ms-1" id="staticBackdropLabel">Contact Nursery</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body my-3">
                            <div class="model-cont">
                                <form id="${formId}" method="POST" onsubmit="return false">
                                    <div class="row">
                                        <div class="col-12 col-lg-6 col-md-6 col-sm-6 " hidden>
                                            <label for="name" class="form-label fw-bold text-dark"> <i class="fa-regular fa-user"></i> enquiryName</label>
                                            <input type="text" class="form-control" placeholder="Enter Your Name" id="enquiry_type_id" value="11" name="fname">
                                        </div>
                                        <div class="col-12 col-lg-6 col-md-6 col-sm-6 " hidden>
                                            <label for="name" class="form-label fw-bold text-dark"> <i class="fa-regular fa-user"></i> product_id</label>
                                            <input type="text" class="form-control" id="product_id" value="${p.product_id}" hidden> 
                                        </div>
                                        <div class="col-12 col-lg-6 col-md-6 col-sm-6">
                                            <div class="form-outline">
                                                <label for="f_name" class="form-label fw-bold"> <i class="fa-regular fa-user"></i> First Name</label>
                                                <input type="text" class="form-control mb-0" placeholder="Enter Your Name" id="first_name_1" name="firstName">
                                            </div>
                                        </div>
                                        <div class="col-12 col-lg-6 col-md-6 col-sm-6">
                                            <div class="form-outline">
                                                <label for="last_name" class="form-label fw-bold"> <i class="fa-regular fa-user"></i> Last Name</label>
                                                <input type="text" class="form-control mb-0" placeholder="Enter Your Name" id="last_Name_1" name="lastName">
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-6 col-md-6 col-lg-6 mt-4">
                                            <div class="form-outline">
                                                <label for="eo_number" class="form-label fw-bold"> <i class="fa fa-phone" aria-hidden="true"></i> Phone Number</label>
                                                <input type="text" class="form-control mb-0" placeholder="Enter Number" id="mobile_number_1" name="mobile_number">
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-12 col-md-6 col-lg-6 mt-4">
                                            <div class="form-outline">
                                                <label for="eo_state" class="form-label fw-bold"> <i class="fas fa-location"></i> State</label>
                                                <select class="form-select py-2 " aria-label=".form-select-lg example" id="state_1" name="state">
                                                    <option value="" selected disabled=""> </option>  
                                                    <option value="Chhattisgarh">Chhattisgarh</option>
                                                    <option value="Other">Other</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-12 col-md-6 col-lg-6 mt-4">
                                            <div class="form-outline">
                                                <label for="eo_dist" class="form-label fw-bold"><i class="fa-solid fa-location-dot"></i> District</label>
                                                <select class="form-select py-2 " aria-label=".form-select-lg example" id="district_1" name="district">
                                                    <option value="" selected disabled=""></option>
                                                    <option value="Raipur">Raipur</option>
                                                    <option value="Bilaspur">Bilaspur</option>
                                                    <option value="Durg">Durg</option>
                                                </select>
                                            </div>                    
                                        </div>       
                                        <div class="col-12 col-sm-6 col-md-6 col-lg-6 mt-4">
                                            <div class="form-outline">
                                                <label for="eo_tehsil" class="form-label fw-bold "> Tehsil</label>
                                                <select class="form-select py-2 " aria-label=".form-select-lg example" id="Tehsil_1" name="Tehsil">
                                                    <option value="" selected disabled=""></option>
                                                    <option value="Raipur">Raipur</option>
                                                    <option value="Bilaspur">Bilaspur</option>
                                                    <option value="Durg">Durg</option>
                                                </select>
                                            </div>
                                        </div>
    
                                        <div class="text-center my-3">
                                            <button type="submit" id="submit_enquiry" class="btn add_btn btn-success w-100 btn_all" onclick="savedata('${formId}')" data-bs-dismiss="modal">Submit</button>        
                                        </div>  
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    `;
        // Append the new card to the container
        productContainer.append(newCard2);
    });

    $('#productContainer').owlCarousel({
        items: 4,
        loop: true,
        margin: 10,
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
                nav: false,
                loop: false
            }
        },
        loopFillGroupWithBlank: true // This may help in some cases
    });
}
