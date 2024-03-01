$(document).ready(function() {
    // $('#submit_enquiry').click(store);
    console.log("ready!");
    getbrands();
    getTractorList();
    getusedTractorList();
    getoldimplementList();
  

    $("#contact-seller-call").validate({
        rules: {
            brandName: {
                required: true
            },
            modeName: {
                required: true
            },
            firstName: {
                required: true
            },
            lastName: {
                required: true
            },
            mobile_number: {
                required: true,
                digits: true,
                minlength: 10
            },
            state: {
                required: true,
                notEqual: "Select State"
            },
            district: {
                required: true,
                notEqual: "Select District"
            },
            Tehsil: {
                required: true
            }
        },
        messages: {
            state: {
                notEqual: "Please select a state."
            },
            district: {
                notEqual: "Please select a district."
            }
        },
        submitHandler: function (form) {
            savedata();
            // tractor_enquiry();
        }
    });

    // Custom validation method for notEqual rule
    $.validator.addMethod("notEqual", function (value, element, param) {
        return value !== param;
    }, "Value must not equal {0}");


// Function to get the value of a query parameter from the URL
function getQueryParam(parameterName) {
    const urlParams = new URLSearchParams(window.location.search);
    return urlParams.get(parameterName);
}

function getbrands(){ 
   const brandId = getQueryParam('brand_id');
 
    const url = 'http://tractor-api.divyaltech.com/api/customer/get_new_tractor_by_brands/' + brandId;
    $.ajax({
        url: url,
        type: "GET",
        success: function(data) {
            document.getElementById('separated_brand').innerText=data.product.allProductData[0].brand_name;
    
            var slider_head = $("#slider_head");
            var brandContainer = $("#brandContainer");
            // Append slider heading and brand containers
            if (data.brands && data.brands.length > 0) {
                data.brands.forEach(function (p) {
                    if (p.id == brandId) {
                        console.log(p,"pp");
                        var slider_heading = `<h1 class="d3 mb-0 text-white display-5 fw-bold">${p.brand_name}</h1>`;
                        slider_head.append(slider_heading);
                    }
    
                    var brand_container = `
                        <div class="col-6 col-sm-6 col-md-2 col-lg-2 brand_section">
                            <a href="brands.php?brand_id=${p.id}">
                                <div class="d-block">
                                    <img src="http://tractor-api.divyaltech.com/uploads/brand_img/${p.brand_img}">
                                    <p>${p.brand_name}</p>
                                </div>
                            </a>
                        </div>`;
                    brandContainer.append(brand_container);
                });
    
                // Initialize Owl Carousel after adding cards
            }
        },
        error: function (error) {
            console.error('Error fetching data:', error);
        }
    });
}    




function getTractorList() {
    var urlParams = new URLSearchParams(window.location.search);
    var Id = urlParams.get('brand_id');
    var url = 'http://tractor-api.divyaltech.com/api/customer/get_new_tractor_by_brands/' + Id;
    console.log(url);
   
    var totalTractors = 0;
    var displayedTractors = 8; // Change the number of initially displayed tractors

    $.ajax({
        url: url,
        type: "GET",
        success: function(data) {
            var productContainer = $("#productContainer");
            var loadMoreButton = $("#load_moretract");

            if (data.product.allProductData && data.product.allProductData.length > 0) {
                // Sort the array in descending order based on product_id
                data.product.allProductData.sort(function(a, b) {
                    return b.product_id - a.product_id;
                });

                // Clear existing content
                productContainer.html('');

                // Display the initial set of 8 tractors
                displayTractors(productContainer, data.product.allProductData.slice(0, displayedTractors));

                // Check if there are more tractors than initially displayed
                if (data.product.allProductData.length > displayedTractors) {
                    loadMoreButton.show();
                } else {
                    loadMoreButton.hide();
                }

                // Handle "Load More Tractors" button click
                loadMoreButton.click(function() {
                    // Calculate the end index for the next batch of tractors
                    var nextBatchEndIndex = displayedTractors + 8;

                    // Display the next batch of tractors
                    displayTractors(productContainer, data.product.allProductData.slice(displayedTractors, nextBatchEndIndex));

                    // Update the number of displayed tractors
                    displayedTractors = nextBatchEndIndex;

                    // Check if there are still more tractors to load
                    if (displayedTractors >= data.product.allProductData.length) {
                        loadMoreButton.hide();
                    }
                });
            }
        },
        error: function(error) {
            console.error('Error fetching data:', error);
        }
    });
}
function displayTractors(productContainer, tractors) {
    tractors.forEach(function(p) {
        var images = p.image_names;
        var a = [];
        populateDropdowns(p.id);
        if (images) {
            if (images.indexOf(',') > -1) {
                a = images.split(',');
            } else {
                a = [images];
            }
        }
        var cardId = `card_${p.product_id}`; // Dynamic ID for the card
        var modalId = `used_tractor_callbnt_${p.product_id}`; // Dynamic ID for the modal
        var formId = `contact-seller-call_${p.product_id}`;

        var newCard = `
            <div class="col-12 col-lg-3 col-md-3 col-sm-3 mb-3 mt-4" id="${cardId}">
                <div class="h-auto success__stry__item d-flex flex-column shadow">
                    <div class="thumb">
                        <a href="detail_tractor.php?product_id=${p.product_id}">
                            <div class="p-3">
                                <img src="http://tractor-api.divyaltech.com/uploads/product_img/${a[0]}" class="object-fit-cover" alt="${p.description}" style="height:180px; width:100%;">
                            </div>
                        </a>
                    </div>
                    <div class="content d-flex flex-column flex-grow-1">
                        <div class="caption text-center">
                            <a href="detail_tractor.php?product_id=${p.product_id}" class="text-decoration-none text-dark">
                                <h4 class="text-center mt-2 text-capitalize">${p.brand_name} ${p.model}</h4>
                            </a>     
                        </div>
                        <div class="d-flex mx-auto" style="gap: 25px;">
                            <div>
                                <p class="float-end" style="font-size:14px;"><i class="fas fa-bolt me-2" style="color: #198754;"></i>${p.hp_category} HP</p>
                            </div>
                            <div>
                                <p class="float-start" style="font-size:14px;"><i class="fa fa-cog me-2" aria-hidden="true" style="color: #198754;"></i>${p.wheel_drive_value}</p>
                            </div>
                        </div>
                        <div class="col-12">
                            <button type="button" class="add_btn btn-success w-100"  data-bs-toggle="modal"  data-bs-target="#${modalId}">
                                <i class="fa-regular fa-handshake"></i> Get on Road Price
                            </button>
                        </div>
                        <div class="modal fade" id="${modalId}" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header  modal_head">
                                        <h5 class="modal-title text-white ms-1" id="staticBackdropLabel">${p.model}</h5>
                                        <button type="button" class="btn-close btn-success" data-bs-dismiss="modal" aria-label="Close"><img src="assets/images/close.png" class="w-25"></button>
                                    </div>
                                    <!-- MODAL BODY -->
                                    <div class="modal-body">
                                        <form  id="${formId}" method="POST" onsubmit="return false">
                                            <div class="row">
                                                <div class="col-12 col-lg-6 col-md-6 col-sm-6 " hidden>
                                                    <label for="name" class="form-label fw-bold text-dark"><i class="fa-duotone fa-chart-pie-simple"></i> product_id</label>
                                                    <input type="text" class="form-control" placeholder="Enter Your Name" id="product_id" value="${p.product_id}" name="">
                                                </div>
                                                <div class="col-12 col-lg-6 col-md-6 col-sm-6 " hidden>
                                                    <label for="name" class="form-label fw-bold text-dark"><i class="fa-duotone fa-chart-pie-simple"></i> Model Name</label>
                                                    <input type="text" class="form-control" placeholder="Enter Your Name" id="enquiry_type_id" value="2" name="iduser">
                                                </div>
                                                <div class="col-12 col-lg-6 col-md-6 col-sm-6 " hidden>
                                                    <label for="name" class="form-label fw-bold text-dark"><i class="fa-duotone fa-chart-pie-simple"></i> Model Name</label>
                                                    <input type="text" class="form-control" placeholder="Enter Your Name" id="product_type_id" value="${p.product_type_id}" name="iduser">
                                                </div>
                                                <div class="col-12 col-sm-6 col-md-6 col-lg-6">
                                                    <label for="" class="form-label text-dark fw-bold"> <i class="fa-regular fa-user"></i> First Name</label>
                                                    <input type="text" class="form-control" placeholder="Enter Number" id="firstName" name="firstName">
                                                </div>
                                                <div class="col-12 col-sm-6 col-md-6 col-lg-6">
                                                    <label for="" class="form-label text-dark fw-bold"><i class="fa-regular fa-user"></i> Last Name</label>
                                                    <input type="text" class="form-control" placeholder="Enter Number" id="lastName" name="lastName">
                                                </div>
                                                <div class="col-12 col-sm-6 col-md-6 col-lg-6">
                                                    <label for="number" class="form-label text-dark fw-bold"><i class="fa fa-phone" aria-hidden="true"></i> Mobile Number</label>
                                                    <input type="text" class="form-control" placeholder="Enter Number" id="mobile_number" name="mobile_number">
                                                    <p class="text-danger">*Please make sure mobile no. must valid</p>
                                                </div>
                                               
                                            <div class="col-12 col-sm-6 col-md-6 col-lg-6 mt-4">
                                            <div class="form-outline">
                                                <label for="state" class="form-label text-dark fw-bold"> <i class="fas fa-location"></i> State</label>
                                                <select class="form-select py-2 state-dropdown" aria-label=".form-select-lg example" id="state" name="state">
                                                    <!-- Options for state dropdown -->
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-6 col-md-6 col-lg-6 mt-4">
                                            <div class="form-outline">
                                                <label for="district" class="form-label fw-bold text-dark"><i class="fa-solid fa-location-dot"></i> District</label>
                                                <select class="form-select py-2 district-dropdown" aria-label=".form-select-lg example" id="district" name="district">
                                                    <!-- Options for district dropdown -->
                                                </select>
                                            </div>
                                        </div>       
                                        <div class="col-12 col-sm-6 col-md-6 col-lg-6 mt-4">
                                            <div class="form-outline">
                                                <label for="Tehsil" class="form-label fw-bold text-dark"> Tehsil</label>
                                                <select class="form-select py-2 tehsil-dropdown" aria-label=".form-select-lg example" id="Tehsil" name="Tehsil">
                                                    <option value="" selected disabled>Please select a tehsil</option>
                                                    <!-- Options for Tehsil dropdown -->
                                                </select>
                                            </div>
                                        </div>
                                            <div class="modal-footer">
                                                <button type="submit" id="submit_enquiry" class="btn add_btn btn-success w-100 btn_all" onclick="savedata('${formId}')" data-bs-dismiss="modal">Submit</button>
                                            </div>      
                                        </form>                             
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>`;
        productContainer.append(newCard);
     
    });

    // Add event listener for modal opening
    $(".add_btn").on("click", function() {
        var productId = $(this).data("product-id");
        $("#used_tractor_callbnt_" + productId).modal("show");
    });
}

});
// Call the functions

function populateDropdowns() {
    var stateDropdowns = document.querySelectorAll('.state-dropdown');
    var districtDropdowns = document.querySelectorAll('.district-dropdown');
    var tehsilDropdowns = document.querySelectorAll('.tehsil-dropdown');

    var defaultStateId = 7; // Define the default state ID here

    var selectYourStateOption = '<option value="">Select Your State</option>';
    var chhattisgarhOption = `<option value="${defaultStateId}">Chhattisgarh</option>`;

    stateDropdowns.forEach(function (dropdown) {
        dropdown.innerHTML = selectYourStateOption + chhattisgarhOption;

        // Fetch district data based on the selected state
        $.get(`http://tractor-api.divyaltech.com/api/customer/get_district_by_state/${defaultStateId}`, function(data) {
            var districtSelect = dropdown.closest('.row').querySelector('.district-dropdown');
            districtSelect.innerHTML = '<option value="">Please select a district</option>';
            data.districtData.forEach(district => {
                districtSelect.innerHTML += `<option value="${district.id}">${district.district_name}</option>`;
            });
        });
    });

    // Event listener for district dropdown
    districtDropdowns.forEach(function (dropdown) {
        dropdown.addEventListener('change', function() {
            var selectedDistrictId = this.value;
            var tehsilSelect = this.closest('.row').querySelector('.tehsil-dropdown');
            if (selectedDistrictId) {
                // Fetch tehsil data based on the selected district
                $.get(`http://tractor-api.divyaltech.com/api/customer/get_tehsil_by_district/${selectedDistrictId}`, function(data) {
                    tehsilSelect.innerHTML = '<option value="">Please select a tehsil</option>';
                    data.tehsilData.forEach(tehsil => {
                        tehsilSelect.innerHTML += `<option value="${tehsil.id}">${tehsil.tehsil_name}</option>`;
                    });
                });
            } else {
                tehsilSelect.innerHTML = '<option value="">Please select a district first</option>';
            }
        });
    });
}

function resetForm(formId) {
    // Reset the form by using its ID
    document.getElementById(formId).reset();
}
function savedata(formId) {
    submit_enquiry(formId);
    console.log("Form submitted successfully");
}


function submit_enquiry(formId) {
    console.log('fghjfghjfgh');
    var product_id = $(`#${formId} #product_id`).val();
    var product_type_id = $(`#${formId} #product_type_id`).val(); // Corrected variable name
    var firstName = $(`#${formId} #firstName`).val();
    var lastName = $(`#${formId} #lastName`).val();
    var mobile_number = $(`#${formId} #mobile_number`).val();
    var state = $(`#${formId} #state`).val();
    var district = $(`#${formId} #district`).val();
    var Tehsil = $(`#${formId} #Tehsil`).val();
    var enquiry_type_id = $(`#${formId} #enquiry_type_id`).val();
    var paraArr = {
        'product_id': product_id,
        'product_type_id': product_type_id,
        'first_name': firstName,
        'last_name': lastName,
        'mobile': mobile_number,
        'state': state,
        'district': district,
        'tehsil': Tehsil,
        'enquiry_type_id': enquiry_type_id,
    };
    console.log(paraArr);
    var url = 'http://tractor-api.divyaltech.com/api/customer/customer_enquiries';

    var token = localStorage.getItem('token');
    var headers = {
        'Authorization': 'Bearer ' + token
    };
    $.ajax({
        url: url,
        type: 'POST',
        data: paraArr,
        // headers: headers, // Remove headers if not needed
        success: function(result) {
            console.log(result, "result");
            // $(`#${formId}`).closest('.modal').modal('hide');
            $("#used_tractor_callbnt_").modal('hide');
            var msg = "Added successfully !"
            $("#errorStatusLoading").modal('show');
            $("#errorStatusLoading").find('.modal-title').html('<p class="text-center">Congratulation..! Requested Successful</p>');

            $("#errorStatusLoading").find('.modal-body').html(msg);
            $("#errorStatusLoading").find('.modal-body').html('<img src="assets/images/7efs.gif" style="display:block; margin:0 auto;" class="w-50 text-center" alt="Successfull Request"></img>');

            // getOldTractorById();
            console.log("Add successfully");
            resetForm(formId);
        },
        error: function(error) {
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

function getusedTractorList() {
    var urlParams = new URLSearchParams(window.location.search);
    var Id = urlParams.get('brand_id');
    var url = "http://tractor-api.divyaltech.com/api/customer/get_old_tractor";
    console.log(url);

    $.ajax({
        url: url,
        type: "GET",
        success: function(data) {
            console.log(data, 'xyz');
            var productContainer2 = $("#productContainer2");
             var used_tractor = $("#used_tractor");
      
            if (data.product && data.product.length > 0) {
              
                 var brandid = [];
                for (var j = 0; j < data.product.length; j++) {
                    if(data.product[j].brand_id == Id){
                    var model = data.product[j].brand_name;
                   
                    }
                }
                brandid.push(model);
                var used_tractor_heading = ` <h3 class="mb-0 py-4 text-uppercase">Used ${brandid[0]} Tractors</h3>`;
                used_tractor.append(used_tractor_heading);
                data.product.forEach(function (p) {
                    if(p.brand_id == Id){
                   
                            
                    var images = p.image_names;
                    var a = [];

                    if (images) {
                        if (images.indexOf(',') > -1) {
                            a = images.split(',');
                        } else {
                            a = [images];
                        }
                    }
                  
                 
                   
                  
                   
                    var newCard2 = `
                    <div class="item px-2 py-3 h-100 ">
                        <div class="h-auto success__stry__item box_shadow b-t-1">
                            <div class="thumb">
                                <a href="used_tractor.php">
                                    <div class="p-3 ratio ratio-16x9">
                                        <img src="http://tractor-api.divyaltech.com/uploads/product_img/${a[0]}" class="object-fit-cover  "  alt="img">
                                    </div>
                                </a>
                            </div>
                            <div class="content d-flex flex-column flex-grow-1 mx-3">
                                <a href="#" class="text-decoration-none text-dark">
                                    <h4 class=" mt-3" style="font-size: 20px;">${p.brand_name} ${p.model}</h4>
                                </a>
                                <p class="mb-1">${p.district}, ${p.state}</p>
        
                                
        
                                <div class="row mt-1 w-100 mx-auto">
                                    <div class="col-6 col-lg-6 col-md-6 col-sm-6 ps-0">
                                        <p class="mb-1"> <i class="fas fa-bolt"></i> ${p.hp_category} HP</p>
                                    </div>
                                    
                                    <div class="col-12 col-lg-6 col-md-6 col-sm-6 pe-0">
                                        <button class="btn btn-success p-1" style=" font-size: 12px;  text-align: right; float: right; ">Great Deal <i class="fa fa-thumbs-up" aria-hidden="true"></i></button>
                                    </div>
                                </div>
                                <a href="# " class="text-dark flex-grow-1 text-decoration-none">
                                    <p>Price: ₹ ${p.price}*</p>
                                </a>
                               
                            </div>
                        </div>
                    </div>`;

                    // Append the new card to the container
                    productContainer2.append(newCard2);
                  
                }
            
                });
            

              
             
            }

            $('#productContainer2').owlCarousel({
                items:4,
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
                    }
            })
        },
        error: function (error) {
            console.error('Error fetching data:', error);
        }
    });
}

// function getoldimplementList() {
//     var urlParams = new URLSearchParams(window.location.search);
//     var Id = urlParams.get('brand_id');
//     var url = "http://tractor-api.divyaltech.com/api/customer/get_old_implements";
//     console.log(url);

//     $.ajax({
//         url: url,
//         type: "GET",
//         success: function(data) {
//             console.log(data, 'xyz');
//             var productContainer3 = $("#productContainer3");
//              var old_implement = $("#old_implement");
      
//             if (data.getOldImplement && data.getOldImplement.length > 0) {
              
//                  var brandid = [];
//                 for (var j = 0; j < data.getOldImplement.length; j++) {
//                     if(data.getOldImplement[j].brand_id == Id){
//                     var model = data.getOldImplement[j].brand_name;
                   
//                     }
//                 }
//                 brandid.push(model);
//                 var old_implement_heading = `<h3 class="py-4 mb-0 text-uppercase">${brandid[0]} Tractor Implements</h3>`;
//                 old_implement.append(old_implement_heading);
//                 data.getOldImplement.forEach(function (p) {
//                     if(p.brand_id == Id){
                   
                            
//                     var images = p.image_names;
//                     var a = [];

//                     if (images) {
//                         if (images.indexOf(',') > -1) {
//                             a = images.split(',');
//                         } else {
//                             a = [images];
//                         }
//                     }
                  
                 
                   
                  
                   
//                     var newCard2 = `
//                     <div class="item  h-100 bg-white">
//                     <div class="h-auto success__stry__item d-flex flex-column box_shadow b-t-1 ">
//                         <div class="thumb">
//                             <a href="#">
//                                 <div class="">
//                                     <img src="http://tractor-api.divyaltech.com/uploads/product_img/${a[0]}" class="object-fit-cover " alt="img" style="height:200px">
//                                 </div>
//                             </a>
//                         </div>
//                         <div class="content d-flex flex-column flex-grow-1 " style="height:150px">
//                             <div class="caption text-center">
//                                 <a href="#" class="text-decoration-none text-dark">
//                                     <h5 class="pt-3"><strong class="series_tractor_strong text-center  fw-bold ">${p.brand_name} ${p.model}</strong></h5>
//                                 </a>        
//                             </div>
//                             <div class="power text-center mt-1">Price : ${p.price}</div>
//                             <div class="row text-center">
//                                 <div class="col-12">
//                                     <p class="fw-bold pe-2">${p.category_name} </p>
//                                 </div>
//                             </div>
//                         </div>
//                     </div>
//                 </div>`;

//                     // Append the new card to the container
//                     productContainer3.append(newCard2);
                  
//                 }
            
//                 });
            
//             }
//             $('#productContainer3').owlCarousel({
//                 items:4,
//                     loop: true,
//                     margin: 10,
//                     responsiveClass: true,
//                     responsive: {
//                         0: {
//                             items: 1,
//                             nav: false
//                         },
//                         600: {
//                             items: 3,
//                             nav: false
//                         },
//                         1000: {
//                             items: 4,
//                             nav: false,
//                             loop: false
//                         }
//                     }
//             })
//         },
//         error: function (error) {
//             console.error('Error fetching data:', error);
//         }
//     });
// }

