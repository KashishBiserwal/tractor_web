$(document).ready(function() {
    console.log("ready!");
    
    $('#filter_tractor').click(filter_search);
    // $('#button_hire').click(enquiry_form)
});



function formatPriceWithCommas(price) {
    // Check if the price is not a number
    if (isNaN(price)) {
        return price; // Return the original value if it's not a number
    }
    
    // Format the price with commas in Indian format
    return new Intl.NumberFormat('en-IN').format(price);
}

var cardsPerPage = 6; // Number of cards to show initially
var cardsDisplayed = 0; // Counter to keep track of the number of cards displayed
var abc = [];

// Function to get data from the API
function getHiretractor() {
    var url = "http://tractor-api.divyaltech.com/api/customer/get_rent_data";

    $.ajax({
        url: url,
        type: "GET",
        success: function (response) {
            var productContainer = $("#productContainer");
            productContainer.empty();

            abc = response.rent_details.data1.map(t1 => ({...t1, ...response.rent_details.data2.find(t2 => t2.customer_id === t1.id)}));

            // Display the initial set of cards
            displayNextSixCards(productContainer);

            // If there are more cards to load, show the "Load More" button
            if (abc.length > cardsPerPage) {
                $("#loadMoreBtn").show();
            } else {
                $("#loadMoreBtn").hide();
            }
        },
        error: function (error) {
            console.error('Error fetching data:', error);
        }
    });
}

// Function to display the next six cards
function displayNextSixCards(container) {
    var startIndex = Math.max(0, abc.length - cardsDisplayed - cardsPerPage); // Start index to slice from
    var endIndex = abc.length - cardsDisplayed; // End index to slice to
    var cardsToDisplay = abc.slice(startIndex, endIndex);
    cardsToDisplay.reverse().forEach(function (p) {
        appendCard(container, p);
    });
    cardsDisplayed += cardsPerPage;
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
        // var ratesArray = p.rates ? p.rates.split(',') : [];
        // var ratePersArray = p.rate_pers ? p.rate_pers.split(',') : [];
        var formattedPrice = formatPriceWithCommas(p.rate);
        // var rateDisplay = ratesArray.length > 0 ? `${ratesArray[0]}/${ratePersArray[0] || ''}` : '';
        // var rentMappingIds = p.rent_mapping_ids;
        // var district = p.district || '';
        // var state = p.state || '';
        var newCard = `
        <div class="col-12 col-lg-4 col-md-6 col-sm-6 mb-3" id="${cardId}">
        <div class="h-auto success__stry__item d-flex flex-column shadow ">
            <div class="thumb">
                <a href="hire_inner.php?id=${p.id}">
                    <div class="ratio ratio-16x9">
                        <img src="http://tractor-api.divyaltech.com/uploads/rent_img/${a[0]}" class="object-fit-cover " alt="${p.description}">
                    </div>
                </a>
                <div class="content d-flex flex-column flex-grow-1 ">
                    <div class="row text-center mt-1">
                        <p class="text-center fw-bold text-truncate " id="model_brand">${p.brand_name} ${p.model}</p>
                        <div class="col-4 col-md-4 col-lg-4 col-sm-4">
                        <p class="text-dark custom-font-size fw-bold"><i class="fa-solid fa-indian-rupee-sign"></i> ${formattedPrice}<span>/</span>${p.rate_per}</p>
                        </div>
                        <div class="col-4 col-md-4 col-lg-4 col-sm-4">
                           
                            <p class="text-dark custom-font-size fw-bold"> <i class="fas fa-calendar-alt"></i> Year: ${p.purchase_year}</p>
                        </div>
                        <div class="col-4 col-md-4 col-lg-4 col-sm-4">
                            <p class="text-dark custom-font-size fw-bold"> <i class="far fa-circle"></i> Radius ${p.working_radius}</p>
                        </div>
                    </div>
                    <div class=" row text-center mt-3">
                        <div class="col-10 justify-center m-auto">
                            <p class="fw-bold text-truncate" id="district">${p.district_name}<span id="year"></span>, ${p.state_name}</p>
                        </div>
                    </div> 
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
                                        <input type="yr_price" class="form-control price_form" placeholder="Enter Price" id="price_form" name="price">
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
        $('.price_form').on('input', function() {
            var value = $(this).val().replace(/\D/g, ''); // Remove non-digit characters
            var formattedValue = Number(value).toLocaleString('en-IN'); // Format using Indian numbering system
            $(this).val(formattedValue);
        });

    // Set cursor position to the beginning of each input field
    $('.price_form').each(function() {
        var input = this;
        input.focus();
        input.setSelectionRange(0, 0);
        input.style.textAlign = 'left';
    });
    }
    $(document).on('click', '#loadMoreBtn', function () {
        var productContainer = $("#productContainer");
        displayNextSixCards(productContainer);
    
        // If all cards are displayed, hide the "Load More" button
        if (cardsDisplayed >= abc.length) {
            $("#loadMoreBtn").hide();
        }
    });
    
    // Call the function to fetch data initially
    getHiretractor();




  function tractor_enquiry(formId) {
        // Use the formId to get values dynamically
        var enquiry_type_id = $(`#${formId} #enquiry_type_id`).val();
        var first_name = $(`#${formId} #fname`).val();
        var last_name = $(`#${formId} #lname`).val();
        var mobile = $(`#${formId} #number`).val();
        var state = $(`#${formId} #state_form`).val();
        var district = $(`#${formId} #district_form`).val();
        var tehsil = $(`#${formId} #tehsil`).val();
        var price = $(`#${formId} #price_form`).val();
        price = price.replace(/[\,\.\s]/g, '');
        var product_id = $(`#${formId} #product_id`).val();
        var model = $(`#${formId} #model`).val();
        var brand_name = $(`#${formId} #brand_name`).val();


  
    // Prepare data to send to the server
    var paraArr = {
      'product_subject_id':product_id,
      'enquiry_type_id':enquiry_type_id,
      'first_name': first_name,
      'last_name':last_name,
      'mobile':mobile,
      'state':state,
      'district':district,
      'tehsil':tehsil,
      'price':price,
      'model':model,
      'brand_name':brand_name,
    };
   
  var apiBaseURL =APIBaseURL;
//   var url = apiBaseURL + 'customer_enquiries';
var url = "http://tractor-api.divyaltech.com/api/customer/customer_enquiries";
    console.log(url);
  
  
    // Make an AJAX request to the server
    $.ajax({
      url: url,
      type: "POST",
      data: paraArr,
      success: function (result) {
        console.log(result, "result");
        
        $("#used_tractor_callbnt_").modal('hide'); 
        var msg = "Added successfully !"
        $("#errorStatusLoading").modal('show');    
        $("#errorStatusLoading").find('.modal-title').html('<p class="text-center">Congratulation..! Requested Successful</p>');
     
        $("#errorStatusLoading").find('.modal-body').html(msg);
        $("#errorStatusLoading").find('.modal-body').html('<img src="assets/images/7efs.gif" style="display:block; margin:0 auto;" class="w-50 text-center" alt="Successfull Request"></img>');
      
        // getOldTractorById();
        console.log("Add successfully");
      
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

  function savedata(formId) {
    tractor_enquiry(formId);
    console.log("Form submitted successfully");
  }

// search cards by hp, brand, price, state, district


var cardsPerPage = 6; // Number of cards to show initially
var cardsDisplayed = 0; // Counter to keep track of the number of cards displayed
var abc = []; 

function formatPrice(price) {
    // Remove commas if present, and parse as float
    return parseFloat(price.replace(/,/g, '') || 0);
}

function filter_search() {
    var checkboxes = $(".budget_checkbox:checked");
    var checkboxesState = $(".state_checkbox:checked");
    var checkboxesdist = $(".district_checkbox:checked");
    var checkboxesBrand = $(".brand_checkbox:checked");
    var checkboxesYear = $(".year_checkbox:checked");

    var selectedCheckboxValues = checkboxes.map(function() {
        return $(this).val();
    }).get();

    // Modify to handle comma-separated values
    var selectedCheckboxValuesFormatted = selectedCheckboxValues.map(function(value) {
        return value.replace(/,/g, ''); // Remove commas from values
    });

    var selectedState = checkboxesState.map(function() {
        return $(this).val();
    }).get();
    var selectedDistrict = checkboxesdist.map(function() {
        return $(this).val();
    }).get();
    var selectedBrand = checkboxesBrand.map(function() {
        return $(this).val();
    }).get();
    var selectedYear = checkboxesYear.map(function() {
        return $(this).val();
    }).get();

    var paraArr = {
        'brand_id': JSON.stringify(selectedBrand),
        'state': JSON.stringify(selectedState),
        'district': JSON.stringify(selectedDistrict),
        'price_ranges': JSON.stringify(selectedCheckboxValuesFormatted), // Use the modified array here
        // 'horse_power_ranges': JSON.stringify(selectedCheckboxState),
        'purchase_year': JSON.stringify(selectedYear),
    };


    var url = 'http://tractor-api.divyaltech.com/api/customer/get_old_tractor_by_filter';
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
       
        var formattedPrice = formatPriceWithCommas(p.rate);
        var newCard = `
        <div class="col-12 col-lg-4 col-md-6 col-sm-6 mb-3" id="${cardId}">
        <div class="h-auto success__stry__item d-flex flex-column shadow ">
            <div class="thumb">
                <a href="hire_inner.php?id=${p.id}">
                    <div class="ratio ratio-16x9">
                        <img src="http://tractor-api.divyaltech.com/uploads/rent_img/${a[0]}" class="object-fit-cover " alt="${p.description}">
                    </div>
                </a>
                <div class="content d-flex flex-column flex-grow-1 ">
                    <div class="row text-center mt-1">
                        <p class="text-center fw-bold text-truncate " id="model_brand">${p.brand_name} ${p.model}</p>
                        <div class="col-4 col-md-4 col-lg-4 col-sm-4">
                        <p class="text-dark custom-font-size fw-bold"><i class="fa-solid fa-indian-rupee-sign"></i> ${formattedPrice}<span>/</span>${p.rate_per}</p>
                        </div>
                        <div class="col-4 col-md-4 col-lg-4 col-sm-4">
                           
                            <p class="text-dark custom-font-size fw-bold"> <i class="fas fa-calendar-alt"></i> Year: ${p.purchase_year}</p>
                        </div>
                        <div class="col-4 col-md-4 col-lg-4 col-sm-4">
                            <p class="text-dark custom-font-size fw-bold"> <i class="far fa-circle"></i> Radius ${p.working_radius}</p>
                        </div>
                    </div>
                    <div class=" row text-center mt-3">
                        <div class="col-10 justify-center m-auto">
                            <p class="fw-bold text-truncate" id="district">${p.district_name}<span id="year"></span>, ${p.state_name}</p>
                        </div>
                    </div> 
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
                                        <input type="yr_price" class="form-control price_form" placeholder="Enter Price" id="price_form" name="price">
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

    function displayNextSet() {
        // var productContainer = $("#productContainer");
    
        // // Display the next set of filtered cards
        // filteredCards.slice(cardsDisplayed, cardsDisplayed + cardsPerPage).forEach(function (p) {
        //     appendCard(productContainer, p);
        //     cardsDisplayed++;
        // });
    
        // // Hide the "Load More" button if all filtered cards are displayed
        // if (cardsDisplayed >= filteredCards.length) {
        //     $("#loadMoreBtn").hide();
        // }
        var productContainer = $("#productContainer");
    
        var remainingCards = abc.length - cardsDisplayed;
        var cardsToAppend = Math.min(cardsPerPage, remainingCards);
    
        for (var i = cardsDisplayed; i < cardsDisplayed + cardsToAppend; i++) {
            appendCard(productContainer, abc[i]);
        }
    
        cardsDisplayed += cardsToAppend;
    
        if (cardsDisplayed >= abc.length) {
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
    $('.brand_checkbox').val('');
    $('.budget_checkbox').val('');
    $('.hp_checkbox').val('');
    $('.brand_checkbox:checked').prop('checked', false);
    $('.budget_checkbox:checked').prop('checked', false);
    $('.hp_checkbox:checked').prop('checked', false);
    
    window.location.reload();
    
  }


  function getBrand() {
    // var apiBaseURL = CustomerAPIBaseURL;
    var url = 'http://tractor-api.divyaltech.com/api/customer/get_brand_for_finance';

    $.ajax({
        url: url,
        type: "GET",
        headers: {
            'Authorization': 'Bearer ' + localStorage.getItem('token')
        },
        success: function (data) {
            console.log(data);

            const checkboxContainer = $('#checkboxContainer');
            checkboxContainer.empty(); // Clear existing checkboxes

            // Loop through the data and add checkboxes
            $.each(data.brands, function (index, brand) {
                var brand_id = brand.id;
                var brand_name = brand.brand_name;
                var checkboxHtml = '<input type="checkbox" class="checkbox-round mt-1 ms-3 brand_checkbox" value="' + brand_id + '"/>' +
                    '<span class="ps-2 fs-6">' + brand_name + '</span> <br/>';

                checkboxContainer.append(checkboxHtml);
            });
        },
        error: function (error) {
            console.error('Error fetching data:', error);
        }
    });
}
getBrand();

function getState() {
    var url = 'http://tractor-api.divyaltech.com/api/customer/state_data';
    $.ajax({
        url: url,
        type: "GET",
        headers: {
            'Authorization': 'Bearer ' + localStorage.getItem('token')
        },
        success: function(data) {
            console.log("State data:", data);

            const checkboxContainer = $('#state_state');
            checkboxContainer.empty(); // Clear existing checkboxes
            
            const stateId = 7; // Replace 7 with the desired state ID
            const filteredState = data.stateData.find(state => state.id === stateId);
            if (filteredState) {
                var checkboxHtml = '<input type="checkbox" class="checkbox-round mt-1 ms-3 state_checkbox" value="' + filteredState.id + '"/>' +
                    '<span class="ps-2 fs-6">' + filteredState.state_name + '</span> <br/>';
                checkboxContainer.append(checkboxHtml);
                // Call getDistricts with the stateId
                ge_tDistricts(stateId);
            } else {
                checkboxContainer.html('<p>No valid data available</p>');
            }
        },
        error: function(error) {
            console.error('Error fetching state data:', error);
        }
    });
}

function ge_tDistricts(stateId) {
    var url = 'http://tractor-api.divyaltech.com/api/customer/get_district_by_state/' + stateId;
    $.ajax({
        url: url,
        type: "GET",
        headers: {
            'Authorization': 'Bearer ' + localStorage.getItem('token')
        },
        success: function(data) {
            console.log("District data:", data);
            
            const checkboxContainer = $('#get_dist');
            checkboxContainer.empty(); // Clear existing checkboxes
            
            if (data && data.districtData && data.districtData.length > 0) {
                data.districtData.forEach(district => {
                    var checkboxHtml = '<input type="checkbox" class="checkbox-round mt-1 ms-3 district_checkbox" value="' + district.id + '" id="district_' + district.id + '"/>' +
                        '<label for="district_' + district.id + '" class="ps-2 fs-6">' + district.district_name + '</label> <br/>';
                    checkboxContainer.append(checkboxHtml);
                });
            } else {
                checkboxContainer.html('<p>No districts available for this state</p>');
            }
        },
        error: function(error) {
            console.error('Error fetching districts:', error);
        }
    });
}
// Call the get function to start fetching state data
getState();

function get_year_and_hours() {
    var url = 'http://tractor-api.divyaltech.com/api/customer/get_year_and_hours';
    $.ajax({
        url: url,
        type: "GET",
        headers: {
            'Authorization': 'Bearer ' + localStorage.getItem('token')
        },
        success: function(data) {
            console.log(data);
            var selectYearContainer = $("#P_year");
            selectYearContainer.empty(); // Clear existing content
            
            // Checkboxes for years
            if (data.getYears && data.getYears.length > 0) {
                // Reverse the array of years to display latest year at the top
                data.getYears.reverse();
                data.getYears.forEach(year => {
                    var checkboxHtml = '<input type="checkbox" class="checkbox-round mt-1 ms-3 year_checkbox" value="' + year + '"/>' +
                        '<span class="ps-2 fs-6">' + year + '</span><br />';
                    selectYearContainer.append(checkboxHtml);
                });
            } else {
                selectYearContainer.html('<p>No years available</p>');
            }
        },
        error: function(error) {
            console.error('Error fetching data:', error);
        }
    });
}
get_year_and_hours();