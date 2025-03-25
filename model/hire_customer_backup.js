$(document).ready(function() {
    $('#filter_hiretractor').click(filter_search);
});

function getHiretractor() {
    var url = "https://shopninja.in/bharatagri/api/public/api/customer/get_rent_data";
    $.ajax({
        url: url,
        type: "GET",
        success: function (data) {
            var productContainer = $("#productContainer");
            var loadMoreButton = $("#loadMoreBtn");
            var data1 = data.rent_details.data1 || [];
            var data2 = data.rent_details.data2 || [];
            var combinedData = data1.concat(data2);
            console.log('Combined Data:', combinedData);

            if (combinedData && combinedData.length > 0) {
                displaylist(combinedData.slice(0, 6));

                if (combinedData.length <= 6) {
                    loadMoreButton.hide();
                } else {
                    loadMoreButton.show();
                }
                loadMoreButton.click(function () {
                    displaylist(combinedData);
                    loadMoreButton.hide();
                });
            }
        },
        error: function (error) {
            console.error('Error fetching data:', error);
        }
    });
}

function displaylist(tractors) {
    var productContainer = $("#productContainer");
    tractors.forEach(function (p) {
        var images = p.images ? p.images.split(',') : [];

        var cardId = `card_${p.id}`;
        var modalId = `used_tractor_callbnt_${p.id}`;
        var formId = `contact-seller-call${p.id}`;
        var imageUrl = images.length > 0 ? `https://shopninja.in/bharatagri/api/public/uploads/rent_img/${images[0]}` : '';
        var isValidImageUrl = imageUrl && imageUrl.trim() !== "";
        var ratePers = p.rate_pers || '';
        var rates = p.rates || '';
        var rentMappingIds = p.rent_mapping_ids || '';
        var newCard = `
            <div class="col-12 col-lg-4 col-md-6 col-sm-6 mb-3" id="${cardId}">
                <div class="h-auto success__stry__item d-flex flex-column shadow ">
                    <div class="thumb">
                        <a href="hire_inner.php?id=${p.id}">
                            <div class="ratio ratio-16x9">
                                ${isValidImageUrl ? `<img src="${imageUrl}" class="object-fit-cover" alt="img" loading="lazy">` : 'Image Not Available'}
                            </div>
                        </a>
                        <div class="content d-flex flex-column flex-grow-1 ">
                            <div class="row text-center">
                                <div class="col-4 col-md-4 col-lg-4 col-sm-4">
                                    <p class="text-dark custom-font-size fw-bold"><i class="fa-solid fa-indian-rupee-sign"></i>${rates}</p>
                                </div>
                                <div class="col-4 col-md-4 col-lg-4 col-sm-4">
                                    <p class="text-dark custom-font-size fw-bold"><i class="fas fa-bolt "></i>${ratePers}</p>
                                </div>
                                <div class="col-4 col-md-4 col-lg-4 col-sm-4">
                                    <p class="text-dark custom-font-size fw-bold"><i class="fa-solid fa-gear"></i>${rentMappingIds}</p>
                                </div>
                            </div>
                                <div class="row text-center fw-bold text-primary">
                                    <div class=" col-12 mb-2">${p.district || ''} ${p.state || ''}</div>
                                </div>
                                </a>
                            </div>
                            <button type="button" class="add_btn btn-success w-100" data-bs-toggle="modal" data-bs-target="#${modalId}">
                                Send Enquiry
                            </button>
                        </div>
                    </div>
                    <div class="modal fade the-model" id="${modalId}" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title text-dark fw-bold" id="staticBackdropLabel">Send
                                        Rental Enquiry Mahindra 575 DI XP Plus</h4>
                                    <button type="button" class="btn-close btn-success" data-bs-dismiss="modal" aria-label="Close"><img src="assets/images/close.png" class="w-25"></button>
                                </div>
                                <div class="modal-body">
                                    <div class="model-cont">
                                        <form id="${formId}" method="POST" onsubmit="return false">
                                        <div class="row">
                                        <div class="col-12 col-lg-6 col-md-6 col-sm-6 " hidden>
                                            <label for="name" class="form-label fw-bold text-dark"> <i class="fa-regular fa-user"></i> enquiryName</label>
                                            <input type="text" class="form-control" placeholder="Enter Your Name" id="enquiry_type_id" value="19" name="fname">
                                        </div>
                                        <div class="col-12 col-lg-6 col-md-6 col-sm-6 " hidden>
                                            <label for="name" class="form-label fw-bold text-dark"> <i class="fa-regular fa-user"></i> product_id</label>
                                            <input type="text" class="form-control" id="product_id" value="">
                                        </div>
                                        <div class="col-12 col-lg-6 col-md-6 col-sm-6 " hidden>
                                            <label for="name" class="form-label fw-bold text-dark"> <i class="fa-regular fa-user"></i> added_by</label>
                                            <input type="text" class="form-control" id="added_by" value="0">
                                        </div>
                                        <div class="col-12 col-sm-12 col-md-4 col-lg-4 mt-4">
                                            <div class="form-outline">
                                                <label class="form-label" for="first_name"><i
                                                        class="fa-regular fa-user"></i> First Name</label>
                                                <input type="text" id="first_name" name="first_name" class=" data_search form-control input-group-sm py-2" />
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-12 col-md-4 col-lg-4 mt-4">
                                            <div class="form-outline">
                                                <label class="form-label" for="last_name"><i class="fa-regular fa-user"></i> Last Name</label>
                                                <input type="text" id="last_name" name="last_name"class=" data_search form-control input-group-sm py-2" />
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-12 col-md-4 col-lg-4 mt-4">
                                            <div class="form-outline">
                                                <label class="form-label" for="mobile_number">Mobile Number</label>
                                                <input type="text" id="mobile_number"name="mobile_number" class=" data_search form-control input-group-sm py-2" />
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-12 col-md-4 col-lg-4 mt-4">
                                            <div class="form-outline">
                                                <label class="form-label" for="the_state"> <i class="fas fa-location"></i> State</label>
                                                <select class="form-select py-2" aria-label="Default select example" id="the_state"name="state">
                                                <option value="" selected disabled>Select State</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-12 col-md-4 col-lg-4 mt-4">
                                            <div class="form-outline">
                                                <label class="form-label" for="the_district"><i class="fa-solid fa-location-dot"></i>District</label>
                                                <select class="form-select py-2"aria-label="Default select example"name="district" id="the_district">
                                                <option value="" selected disabled>Select District</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-12 col-md-4 col-lg-4 mt-4">
                                            <div class="form-outline">
                                                <label class="form-label"for="the_tehsil">Tehsil</label>
                                                <select class="form-select py-2" aria-label="Default select example"name="tehsil" id="the_tehsil">
                                                <option value="" selected disabled>Select Tehsil</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                        </form>
                                        </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"data-bs-dismiss="modal">Close</button>
                                                <button type="button" class="btn btn-danger" id="button_hire" onclick="savedata('${formId}')">Request</button>

                                            </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        `;
        productContainer.append(newCard);
    });
}
getHiretractor();

function resetForm(formId) {
    document.getElementById(formId).reset();
}
function savedata(formId) {
    button_hire(formId);
    console.log("Form submitted successfully");
}

function button_hire(formId) {
    var enquiry_type_id = $(`#${formId} #enquiry_type_id`).val();
    var product_id = 192; 
    var first_name = $(`#${formId} #first_name`).val();
    var last_name = $(`#${formId} #last_name`).val();
    var mobile_number = $(`#${formId} #mobile_number`).val();
    var state = $(`#${formId} #the_state`).val();
    var district = $(`#${formId} #the_district`).val();
    var tehsil = $(`#${formId} #the_tehsil`).val();
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

    var url = 'https://shopninja.in/bharatagri/api/public/api/customer/customer_enquiries';
    var token = localStorage.getItem('token');
    var headers = {
        'Authorization': 'Bearer ' + token
    };
    $.ajax({
        url: url,
        type: 'POST',  
        data: paraArr,
        success: function (result) {
            $("#used_tractor_callbnt_").modal('hide'); 
            var msg = "Added successfully !"
            $("#errorStatusLoading").modal('show');    
            $("#errorStatusLoading").find('.modal-title').html('<p class="text-center">Congratulation..! Requested Successful</p>');
            $("#errorStatusLoading").find('.modal-body').html(msg);
            $("#errorStatusLoading").find('.modal-body').html('<img src="assets/images/7efs.gif" style="display:block; margin:0 auto;" class="w-50 text-center" alt="Successfull Request"></img>');
            $(".the-model").modal('hide');
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

var filteredCards = [];
var cardsDisplayed = 0;
var cardsPerPage = 6; 
function filter_search() {
    var checkboxes = $(".search_state_filter:checked");
    var checkboxes1 = $(".search_district_filter:checked");
    var checkboxesBrand = $(".search_brand_filter:checked");

    var selectedCheckboxValues = checkboxes.map(function () {
        return $(this).val();
    }).get();

    var selectedCheckboxValues1 = checkboxes1.map(function () {
        return $(this).val();
    }).get();

    var selectedBrand = checkboxesBrand.map(function () {
        return $(this).val();
    }).get();

    var paraArr = {
        'brand_id': JSON.stringify(selectedBrand),
        'state': JSON.stringify(selectedCheckboxValues),
        'district': JSON.stringify(selectedCheckboxValues1),
    };
    var url = 'https://shopninja.in/bharatagri/api/public/api/customer/hire_tractor_filter';
    $.ajax({
        url: url,
        type: 'POST',
        data: paraArr,
        headers: {
            'Authorization': 'Bearer ' + localStorage.getItem('token')
        },
        success: function (searchData) {
            var filterContainer = $("#productContainer");
            filterContainer.empty();
            searchData.product.forEach(function (filter) {
                appendFilterCard(filterContainer, filter);
            });
        },
        error: function (error) {
            console.error('Error searching for brands:', error);
        }
    });
}

function appendFilterCard(filterContainer, filter) {
    tractors.forEach(function (p) {
        var images;
        if (p.image_name) {
            images = p.image_name.indexOf(',') > -1 ? p.image_name.split(',') : [p.image_name];
        } else if (p.images) {
            images = p.images.split(',');
        } else {
            images = [];
        }
   
        var cardId = `card_${p.id}`;
        var modalId = `used_tractor_callbnt_${p.id}`;
        var formId = `contact-seller-call${p.id}`;
        var imageUrl = images.length > 0 ? `https://shopninja.in/bharatagri/api/public/uploads/rent_img/${images[0]}` : '';

        var isValidImageUrl = imageUrl && imageUrl.trim() !== "";
        var newCard = `
        <div class="col-12 col-lg-4 col-md-6 col-sm-6 mb-3" id="${cardId}">
                <div class="h-auto success__stry__item d-flex flex-column shadow ">
                    <div class="thumb">
                        <a href="hire_inner.php?id=${p.id}">
                            <div class="ratio ratio-16x9">
                                ${isValidImageUrl ? `<img src="${imageUrl}" class="object-fit-cover" alt="img" loading="lazy">` : 'Image Not Available'}
                            </div>
                        </a>
                        <div class="content d-flex flex-column flex-grow-1 ">
                            <div class="caption text-center">
                                <a href="hire_inner.php?id=${p.id}" class="text-decoration-none text-dark">
                                    <p class="pt-3 " style="font-size: 17px;">
                                        <strong class="series_tractor_strong text-center fw-bold ">${p.brand_name}</strong>
                                    </p>
                                </a>
                            </div>
                            <div class="power">
                                <a href="hire_inner.php?id=${p.id}" class="text-decoration-none text-dark">
                                    <div class="row text-center">
                                        <div class="col-4 col-md-4 col-lg-4 col-sm-4">
                                            <p class="text-dark custom-font-size fw-bold"><i class="fa-solid fa-indian-rupee-sign"></i>${p.rate_pers || p.rates}</p>
                                        </div>
                                        <div class="col-4 col-md-4 col-lg-4 col-sm-4">
                                            <p class="text-dark custom-font-size fw-bold"><i class="fas fa-bolt "></i>${p.rates}</p>
                                        </div>
                                        <div class="col-4 col-md-4 col-lg-4 col-sm-4">
                                            <p class="text-dark custom-font-size fw-bold"><i class="fa-solid fa-gear"></i>${p.rent_mapping_ids}</p>
                                        </div>
                                    </div>
                                    <div class="row text-center fw-bold text-primary">
                                        <div class=" col-12 mb-2">${p.district || ''} ${p.state || ''}</div>
                                    </div>
                                </a>
                            </div>
                            <button type="button" class="add_btn btn-success w-100" data-bs-toggle="modal" data-bs-target="#${modalId}">
                                Send Enquiry
                            </button>
                        </div>
                    </div>
                    <div class="modal fade the-model" id="${modalId}" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title text-dark fw-bold" id="staticBackdropLabel">Send
                                        Rental Enquiry Mahindra 575 DI XP Plus</h4>
                                    <button type="button" class="btn-close btn-success" data-bs-dismiss="modal" aria-label="Close"><img src="assets/images/close.png" class="w-25"></button>
                                </div>
                                <div class="modal-body">
                                    <div class="model-cont">
                                        <form id="${formId}" method="POST" onsubmit="return false">
                                        <div class="row">
                                        <div class="col-12 col-lg-6 col-md-6 col-sm-6 " hidden>
                                            <label for="name" class="form-label fw-bold text-dark"> <i class="fa-regular fa-user"></i> enquiryName</label>
                                            <input type="text" class="form-control" placeholder="Enter Your Name" id="enquiry_type_id" value="19" name="fname">
                                        </div>
                                        <div class="col-12 col-lg-6 col-md-6 col-sm-6 " hidden>
                                            <label for="name" class="form-label fw-bold text-dark"> <i class="fa-regular fa-user"></i> product_id</label>
                                            <input type="text" class="form-control" id="product_id" value="">
                                        </div>
                                        <div class="col-12 col-sm-12 col-md-4 col-lg-4 mt-4">
                                            <div class="form-outline">
                                                <label class="form-label" for="first_name"><i
                                                        class="fa-regular fa-user"></i> First Name</label>
                                                <input type="text" id="first_name" name="first_name" class=" data_search form-control input-group-sm py-2" />
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-12 col-md-4 col-lg-4 mt-4">
                                            <div class="form-outline">
                                                <label class="form-label" for="last_name"><i class="fa-regular fa-user"></i> Last Name</label>
                                                <input type="text" id="last_name" name="last_name"class=" data_search form-control input-group-sm py-2" />
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-12 col-md-4 col-lg-4 mt-4">
                                            <div class="form-outline">
                                                <label class="form-label" for="mobile_number">Mobile Number</label>
                                                <input type="text" id="mobile_number"name="mobile_number" class=" data_search form-control input-group-sm py-2" />
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-12 col-md-4 col-lg-4 mt-4">
                                            <div class="form-outline">
                                                <label class="form-label" for="the_state"> <i class="fas fa-location"></i> State</label>
                                                <select class="form-select py-2" aria-label="Default select example" id="the_state"name="state">
                                                <option value="" selected disabled></option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-12 col-md-4 col-lg-4 mt-4">
                                            <div class="form-outline">
                                                <label class="form-label" for="the_district"><i class="fa-solid fa-location-dot"></i>District</label>
                                                <select class="form-select py-2"aria-label="Default select example"name="district" id="the_district">
                                                    <option value="" selected disabled></option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-12 col-md-4 col-lg-4 mt-4">
                                            <div class="form-outline">
                                                <label class="form-label"for="the_tehsil">Tehsil</label>
                                                <select class="form-select py-2" aria-label="Default select example"name="tehsil" id="the_tehsil">
                                                    <option value="" selected disabled></option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                        </form>
                                        </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"data-bs-dismiss="modal">Close</button>
                                                <button type="button" class="btn btn-danger" id="button_hire" onclick="savedata('${formId}')">Request</button>

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
    });
    function displayNextSet() {
        var productContainer = $("#productContainer");
        filteredCards.slice(cardsDisplayed, cardsDisplayed + cardsPerPage).forEach(function (p) {
            appendCard(productContainer, p);
            cardsDisplayed++;
        });
        if (cardsDisplayed >= filteredCards.length) {
            $("#loadMoreBtn").hide();
        }
    }
    $(document).on('click', '#loadMoreBtn', function () {
        displayNextSet();
    });

    appendCard(filterContainer, filter);
    displayNextSet();
}
  function resetform(){
    $('.search_state_filter').val('');
    $('.search_district_filter').val('');
    $('.search_brand_filter').val('');
    $('.search_state_filter:checked').prop('checked', false);
    $('.search_district_filter:checked').prop('checked', false);
    $('.search_brand_filter:checked').prop('checked', false);
    getHiretractor();
    window.location.reload();
    
  }