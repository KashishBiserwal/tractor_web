$(document).ready(function() {
    getnurseryList();
    $('#submit_enquiry').click(nursery_enquiry);
    $('#filter_button').click(filter_search);
    
    $("#nursery_enquiry_form").validate({
        rules: {
            product_id: {
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
            },
            district: {
                required: true,
                
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
            nursery_enquiry();
        }
    });


});

var cardsPerPage = 6; // Number of cards to show initially
var cardsDisplayed = 0; // Counter to keep track of the number of cards displayed
var allCards; //

function getnurseryList() {
    var url = CustomerAPIBaseURL + 'nursery_data';

    // Keep track of the total tractors and the currently displayed tractors
    var totalnursery = 0;
    var displayednursery = 6; // Initially display 6 tractors

    $.ajax({
        url: url,
        type: "GET",
        success: function(data) {
            var productContainer = $("#productContainer");
            var loadMoreButton = $("#load_moretract");

            if (data.nursery_data && data.nursery_data.length > 0) {
                totalEngineoil = data.nursery_data.length;

                // Display the initial set of 6 tractors
                displaynursery(data.nursery_data.slice(0, displayednursery));

                if (totalnursery <= displayednursery) {
                    loadMoreButton.hide();
                } else {
                    loadMoreButton.show();
                }

                // Handle "Load More Tractors" button click
                loadMoreButton.click(function() {
                    // Display all tractors
                    displayednursery = totalnursery;
                    displaynursery(data.nursery_data);

                    // Hide the "Load More Tractors" button
                    loadMoreButton.hide();
                });
            }
        },
        error: function(error) {
            console.error('Error fetching data:', error);
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
        
        var newCard = `
            <div class="col-12 col-lg-4 col-md-4 col-sm-4 mb-4" id="${cardId}">
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
        
        // Now you can use cardId, modalId, and formId in your application as needed.
        
                

  
//     var myDiv = $('#description_id');
// myDiv.text(myDiv.text().substring(0,120))
        // Append the new card to the container
        productContainer.append(newCard);
       
       
    });
}
function savedata(formId) {
    nursery_enquiry(formId);
    console.log("Form submitted successfully");
  }

function nursery_enquiry() {
    var enquiry_type_id = $('#enquiry_type_id').val();
    var product_id = 3;
    var first_name = $('#first_name_1').val();
    console.log('first_name',first_name)
    var last_name = $('#last_Name_1').val();
    var mobile_number = $('#mobile_number_1').val();
    var state = $('#state_1').val();
    var district = $('#district_1').val();
    var tehsil = $('#Tehsil_1').val();

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

    console.log(paraArr, 'sdfyuiofghjkfdghg');

    // Update the URL to the correct API endpoint
    var url = 'http://tractor-api.divyaltech.com/api/customer/customer_enquiries';

    console.log(url);

    // Remove the token-related code if authentication is not needed
    var token = localStorage.getItem('token');
    var headers = {
      'Authorization': 'Bearer ' + token
    };

    $.ajax({
        url: url,
        type: 'POST',
        data: paraArr,
        // Remove headers if not needed
        // headers: headers,
        success: function(result) {
            console.log(result, 'result');
            console.log('Add successfully');
            
            $("#nursery_callbnt_").modal('hide'); 
            var msg = "Added successfully !"
            $("#errorStatusLoading").modal('show');    
            $("#errorStatusLoading").find('.modal-title').html('<p class="text-center">Congratulation..! Requested Successful</p>');
         
            $("#errorStatusLoading").find('.modal-body').html(msg);
            $("#errorStatusLoading").find('.modal-body').html('<img src="assets/images/7efs.gif" style="display:block; margin:0 auto;" class="w-50 text-center" alt="Successfull Request"></img>');
          
            // Delayed execution of alert
           
        
            // getOldTractorById();
            console.log("Add successfully");
        },
    });
}

//   function savedata(){
//     nursery_enquiry();
//     console.log("confirm");
//     console.log("Form submitted successfully");
//   }

var filteredCards = [];
var cardsDisplayed = 0;
var cardsPerPage = 6; 

function filter_search() {
    var checkboxes = $(".state_checkbox:checked");
    var checkboxes2 = $(".district_checkbox:checked");
    var checkboxes3 = $(".tehsil_checkbox:checked");

    var selectedCheckboxValues = checkboxes.map(function () {
        return $(this).val();
    }).get();

    var selectedCheckboxValues2 = checkboxes2.map(function () {
        return $(this).val();
    }).get();

    var selectedteshil = checkboxes3.map(function () {
        return $(this).val();
    }).get();

    var paraArr = {
        'state': JSON.stringify(selectedCheckboxValues),
        'district': JSON.stringify(selectedCheckboxValues2),
        'tehsil': JSON.stringify(selectedteshil),
    };

    var url = 'http://tractor-api.divyaltech.com/api/customer/get_nursery_enquiry_data_by_filter';
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
    function appendCard(container, p) {
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
        
        var newCard = `
            <div class="col-12 col-lg-4 col-md-4 col-sm-4 mb-4" id="${cardId}">
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
        container.append(newCard);
    }

    function displayNextSet() {
        var productContainer = $("#productContainer");
    
        // Display the next set of filtered cards
        filteredCards.slice(cardsDisplayed, cardsDisplayed + cardsPerPage).forEach(function (p) {
            appendCard(productContainer, p);
            cardsDisplayed++;
        });
    
        // Hide the "Load More" button if all filtered cards are displayed
        if (cardsDisplayed >= filteredCards.length) {
            $("#loadMoreBtn").hide();
        }
    }
    
    $(document).on('click', '#loadMoreBtn', function () {
        // Display the next set of filtered cards when the "Load More" button is clicked
        displayNextSet();
    });

    appendCard(filterContainer, filter);
    displayNextSet();
}


  function resetform(){
    $('.state_checkbox').val('');
    $('.district_checkbox').val('');
    $('.tehsil_checkbox').val('');
    $('.state_checkbox:checked').prop('checked', false);
    $('.district_checkbox:checked').prop('checked', false);
    $('.tehsil_checkbox:checked').prop('checked', false);
    
    getnurseryList();
    // window.location.reload();
    
  }