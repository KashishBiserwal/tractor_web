$(document).ready(function() {
    console.log("ready!");
    $('#submit_enquiry').click(get_otp);
    $('#Verify').click(verifyotp);
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
            // productContainer.empty();
            var fullname = response.rent_details.data1[0].first_name + ' ' + response.rent_details.data1[0].last_name;
            document.getElementById('slr_name').value=fullname;
            document.getElementById('mob_num').value = response.rent_details.data1[0].mobile;
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

function displayNextSixCards(container) {
    var startIndex = Math.max(0, abc.length - cardsDisplayed - cardsPerPage); 
    var endIndex = abc.length - cardsDisplayed; 
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
        var cardId = `card_${p.customer_id}`;
        var modalId = `used_tractor_callbnt_${p.customer_id}`; 
        var formId = `contact-seller-call_${p.customer_id}`; 
        var formattedPrice = formatPriceWithCommas(p.rate);
        var images = p.images;

        var newCard = `
        <div class="col-12 col-lg-4 col-md-6 col-sm-6 mb-3" id="${cardId}">
        <div class="h-auto success__stry__item d-flex flex-column shadow ">
            <div class="thumb">
                <a href="hire_inner.php?id=${p.customer_id}">
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
                                                    <label for="name" class="form-label fw-bold text-dark"><i class="fa-regular fa-user"></i> product_id</label>
                                                    <input type="text" class="form-control" id="id" value="${p.customer_id}"> 
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
                                                    <select class="form-select py-2 state-dropdown" aria-label=".form-select-lg example" id="state_form" name="state">
                                                    </select>
                                                </div>
                                                <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                                                    <label class="form-label text-dark"><i class="fa-solid fa-location-dot"></i> District</label>
                                                    <select class="form-select py-2 district-dropdown" aria-label=".form-select-lg example" name="district" id="district_form">
                                                    </select>
                                                </div>
                                                <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                                                    <label class="form-label text-dark mt-2"> Tehsil</label>
                                                    <select class="form-select py-2 tehsil-dropdown" aria-label=".form-select-lg example" Tehsil" id="tehsil" name="tehsil">
                                                    </select>
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
        populateDropdowns(p.id);
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



    function savedata(formId) {
        tractor_enquiry(formId);
        console.log("Form submitted successfully");
      }

      function openOTPModal() {
        $('#get_OTP_btn').modal('show');
    }

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
        var product_id = $(`#${formId} #id`).val();
    


  
    // Prepare data to send to the server
    var paraArr = {
      'product_id':product_id,
      'enquiry_type_id':enquiry_type_id,
      'first_name': first_name,
      'last_name':last_name,
      'mobile':mobile,
      'state':state,
      'district':district,
      'tehsil':tehsil,
      'price':price,
     
   
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
          var msg = "Added successfully !";
          // $('#get_OTP_btn').modal('show');
          $("#errorStatusLoading").modal('hide');
          // $("#get_OTP_btn_").modal('show');
          get_otp(mobile); // Pass mobile number to get_otp function
          openOTPModal();
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
  
    function get_otp(phone) {
      var url = "http://tractor-api.divyaltech.com/api/customer/customer_login";
   
      var paraArr = {
          'mobile': phone,
      };
  
      $.ajax({
          url: url,
          type: "POST",
          data: paraArr,
          success: function (result) {
              console.log(result, "result");
  
              // Once OTP is received, store mobile number in hidden field within modal
              $('#Mobile').val(phone);
  
          },
          error: function (error) {
              console.error('Error fetching data:', error);
          }
      });
  }
  
  function verifyotp() {
      var mobile = document.getElementById('Mobile').value;
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
              $('#staticBackdrop').modal('show');
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

 

// search cards by hp, brand, price, state, district
function formatPrice(price) {
    // Remove commas if present, and parse as float
    return parseFloat(price.replace(/,/g, '') || 0);
}

var cardsPerPage = 6;
var cardsDisplayed = 0;
var filteredCards = [];

function filter_search() {
    var checkboxes = $(".budget_checkbox:checked");
    var checkboxesState = $(".state_checkbox:checked");
    var checkboxesdist = $(".district_checkbox:checked");
    var checkboxesBrand = $(".brand_checkbox:checked");
    // var checkboxesYear = $(".year_checkbox:checked");

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
    // var selectedYear = checkboxesYear.map(function() {
    //     return $(this).val();
    // }).get();

    var paraArr = {
        'brand_id': JSON.stringify(selectedBrand),
        'state': JSON.stringify(selectedState),
        'district': JSON.stringify(selectedDistrict),
        'price_ranges': JSON.stringify(selectedCheckboxValuesFormatted),
        // 'purchase_year': JSON.stringify(selectedYear),
    };

    var url = 'http://tractor-api.divyaltech.com/api/customer/filter_for_rent_enquiry';
    $.ajax({
        url: url,
        type: 'POST',
        data: paraArr,
        headers: {
            'Authorization': 'Bearer ' + localStorage.getItem('token')
        },
        success: function(searchData) {
            var filterContainer = $("#productContainer");
            filterContainer.empty();
            // Combine data1 and data2 into one array
            if (searchData.rent_details && searchData.rent_details.data1 && searchData.rent_details.data2) {
                var data1 = searchData.rent_details.data1;
                var data2 = searchData.rent_details.data2;
    
                // Merge data1 and data2 based on customer_id
                data1.forEach(function(item1) {
                    var match = data2.find(function(item2) {
                        return item2.customer_id === item1.id;
                    });
                    if (match) {
                        var mergedItem = { ...item1, ...match };
                        allData.push(mergedItem);
                    }
                });
            }
    
            if (allData.length === 0) {
                // Show message if no data found
                $("#noDataMessage").show();
                $("#loadMoreBtn").hide();
            } else {
                // Display first set of filtered cards
                cardsDisplayed = 0;
                displayNextSet(allData);
                $("#noDataMessage").hide();
                $("#loadMoreBtn").show();
            }
        },
        error: function(error) {
            console.error('Error searching for brands:', error);
        }
    })
}

function appendFilterCard(filterContainer, p) {
    var images = p.images;
        var a = [];

        if (images) {
            if (images.indexOf(',') > -1) {
                a = images.split(',');
            } else {
                a = [images];
            }
        }
    var cardId = `card_${p.customer_id}`;
    var modalId = `used_tractor_callbnt_${p.customer_id}`; 
    var formId = `contact-seller-call_${p.customer_id}`; 
    var formattedPrice = formatPriceWithCommas(p.rate);
    var images = p.images;

    var newCard = `
    <div class="col-12 col-lg-4 col-md-6 col-sm-6 mb-3" id="${cardId}">
    <div class="h-auto success__stry__item d-flex flex-column shadow ">
        <div class="thumb">
            <a href="hire_inner.php?id=${p.customer_id}">
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
                                    <input type="text" class="form-control" id="product_id" value="${p.customer_id}" hidden> 
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
                                    <select class="form-select py-2 state-dropdown" aria-label=".form-select-lg example" id="state_form" name="state">
                                    </select>
                                </div>
                                <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                                    <label class="form-label text-dark"><i class="fa-solid fa-location-dot"></i> District</label>
                                    <select class="form-select py-2 district-dropdown" aria-label=".form-select-lg example" name="district" id="district_form">
                                    </select>
                                </div>
                                <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                                    <label class="form-label text-dark mt-2"> Tehsil</label>
                                    <select class="form-select py-2 tehsil-dropdown" aria-label=".form-select-lg example" Tehsil" id="tehsil" name="tehsil">
                                    </select>
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
             filterContainer.append(newCard);
}

function displayNextSet() {
    var productContainer = $("#productContainer");

    // Display the next set of filtered cards
    filteredCards.slice(cardsDisplayed, cardsDisplayed + cardsPerPage).forEach(function(p) {
        appendFilterCard(productContainer, p);
        cardsDisplayed++;
    });

    // Hide the "Load More" button if all filtered cards are displayed
    if (cardsDisplayed >= filteredCards.length) {
        $("#loadMoreBtn").hide();
    }
}

// Load more button click event
$(document).on('click', '#loadMoreBtn', function() {
    displayNextSet(allData);
});


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