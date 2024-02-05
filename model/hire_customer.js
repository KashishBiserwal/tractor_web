$(document).ready(function() {
    console.log("ready!");
    
    // $('#filter_tractor').click(filter_search);
});

    var cardsPerPage = 6; // Number of cards to show initially
    var cardsDisplayed = 0; // Counter to keep track of the number of cards displayed
    var allCards; // Variable to store all cards

    function getHiretractor() {
        var url = "http://tractor-api.divyaltech.com/api/customer/get_rent_data";
    
        $.ajax({
            url: url,
            type: "GET",
            success: function (response) {
                var productContainer = $("#productContainer");
                // Clear the existing content in the container
                productContainer.empty();
    
                if (response.rent_details && response.rent_details.data1 && response.rent_details.data1.length > 0) {
                    response.rent_details.data1.forEach(function (p) {
                        appendCard(productContainer, p);
                    });
                }
    
                if (response.rent_details && response.rent_details.data2 && response.rent_details.data2.length > 0) {
                    response.rent_details.data2.forEach(function (p) {
                        appendCard(productContainer, p);
                    });
                }
    
                $("#loadMoreBtn").toggle(productContainer.children().length > cardsPerPage);
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
        var rates = p.rates;
        var ratePers = p.rate_pers;
        var rentMappingIds = p.rent_mapping_ids;
        var district = p.district || '';
        var state = p.state || '';

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
                            <div class=" col-12 mb-2">${district || ''} ${state || ''}</div>
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
                                        <label class="form-label" for="state"> <i class="fas fa-location"></i> State</label>
                                        <select class="form-select py-2" aria-label="Default select example" id="the_state"name="state">
                                        <option value="" selected disabled>Select State</option>
                                        <option value="Chhattisgarh">Chhattisgarh</option>
                                        <option value="Other">Other</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-12 col-md-4 col-lg-4 mt-4">
                                    <div class="form-outline">
                                        <label class="form-label" for="district"><i class="fa-solid fa-location-dot"></i>District</label>
                                        <select class="form-select py-2"aria-label="Default select example"name="district" id="the_district">
                                        <option value="" selected disabled>Select District</option>
                                        <option value="Raipur">Raipur</option>
                                        <option value="Bilaspur">Bilaspur</option>
                                        <option value="Durg">Durg</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-12 col-md-4 col-lg-4 mt-4">
                                    <div class="form-outline">
                                        <label class="form-label"for="tehsil">Tehsil</label>
                                        <select class="form-select py-2" aria-label="Default select example"name="tehsil" id="the_tehsil">
                                        <option value="" selected disabled>Select Tehsil</option>
                                        <option value="Raipur">Raipur</option>
                                        <option value="Bilaspur">Bilaspur</option>
                                        <option value="Durg">Durg</option>
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
    }
    $(document).on('click', '#loadMoreBtn', function(){
        var productContainer = $("#productContainer");

        allCards.slice(cardsDisplayed, cardsDisplayed + cardsPerPage).forEach(function (p) {
            appendCard(productContainer, p);
            cardsDisplayed++;
        });

        // Hide the "Load More" button if all cards are displayed
        if (cardsDisplayed >= allCards.length) {
            $("#loadMoreBtn").hide();
        }
    });

    getHiretractor();
//   function tractor_enquiry(formId) {
//         // Use the formId to get values dynamically
//         var enquiry_type_id = $(`#${formId} #enquiry_type_id`).val();
//         var first_name = $(`#${formId} #fname`).val();
//         var last_name = $(`#${formId} #lname`).val();
//         var mobile = $(`#${formId} #number`).val();
//         var state = $(`#${formId} #state_form`).val();
//         var district = $(`#${formId} #district_form`).val();
//         var tehsil = $(`#${formId} #tehsil`).val();
//         var price = $(`#${formId} #price_form`).val();
//         var product_id = $(`#${formId} #product_id`).val();
//         var model_form = $(`#${formId} #model_form`).val();

  
//     // Prepare data to send to the server
//     var paraArr = {
//       'product_id':product_id,
//       'enquiry_type_id':enquiry_type_id,
//       'first_name': first_name,
//       'last_name':last_name,
//       'mobile':mobile,
//       'state':state,
//       'district':district,
//       'tehsil':tehsil,
//       'price':price,
//       'model':model_form,
//     };
   
//   var apiBaseURL =APIBaseURL;
// //   var url = apiBaseURL + 'customer_enquiries';
// var url = "http://tractor-api.divyaltech.com/api/customer/customer_enquiries";
//     console.log(url);
  
  
//     // Make an AJAX request to the server
//     $.ajax({
//       url: url,
//       type: "POST",
//       data: paraArr,
//       success: function (result) {
//         console.log(result, "result");
        
//         $("#used_tractor_callbnt_").modal('hide'); 
//         var msg = "Added successfully !"
//         $("#errorStatusLoading").modal('show');    
//         $("#errorStatusLoading").find('.modal-title').html('<p class="text-center">Congratulation..! Requested Successful</p>');
     
//         $("#errorStatusLoading").find('.modal-body').html(msg);
//         $("#errorStatusLoading").find('.modal-body').html('<img src="assets/images/7efs.gif" style="display:block; margin:0 auto;" class="w-50 text-center" alt="Successfull Request"></img>');
      
//         // getOldTractorById();
//         console.log("Add successfully");
      
//       },
//       error: function (error) {
//         console.error('Error fetching data:', error);
//         var msg = error;
//         $("#errorStatusLoading").modal('show');
//         $("#errorStatusLoading").find('.modal-title').html('<p class="text-center">Process Failed..! Enter Valid Detail</p>');
//         $("#errorStatusLoading").find('.modal-body').html(msg);
//         $("#errorStatusLoading").find('.modal-body').html('<img src="assets/images/comp_3.gif" style="display:block; margin:0 auto;" class="w-50 text-center" alt="Successfull Request"></img>');
//         // 
//       }
//     });
//   }

//   function savedata(formId) {
//     tractor_enquiry(formId);
//     console.log("Form submitted successfully");
//   }

// search cards by hp, brand, price, state, district
// function get() {
//     // var apiBaseURL = CustomerAPIBaseURL;
//     var url = 'http://tractor-api.divyaltech.com/api/customer/get_brands';

//     $.ajax({
//         url: url,
//         type: "GET",
//         headers: {
//             'Authorization': 'Bearer ' + localStorage.getItem('token')
//         },
//         success: function (data) {
//             console.log(data);

//             const checkboxContainer = $('#checkboxContainer');
//             checkboxContainer.empty(); // Clear existing checkboxes

//             // Loop through the data and add checkboxes
//             $.each(data.brands, function (index, brand) {
//                 var brand_id = brand.id;
//                 var brand_name = brand.brand_name;
//                 var checkboxHtml = '<input type="checkbox" class="checkbox-round mt-1 ms-3 brand_checkbox" value="' + brand_id + '"/>' +
//                     '<span class="ps-2 fs-6">' + brand_name + '</span> <br/>';

//                 checkboxContainer.append(checkboxHtml);
//             });
//         },
//         error: function (error) {
//             console.error('Error fetching data:', error);
//         }
//     });
// }
// get();

// var filteredCards = [];
// var cardsDisplayed = 0;
// var cardsPerPage = 6; 

// function filter_search() {
//     var checkboxes = $(".budget_checkbox:checked");
//     var checkboxes2 = $(".hp_checkbox:checked");
//     var checkboxesBrand = $(".brand_checkbox:checked");

//     var selectedCheckboxValues = checkboxes.map(function () {
//         return $(this).val();
//     }).get();

//     var selectedCheckboxValues2 = checkboxes2.map(function () {
//         return $(this).val();
//     }).get();

//     var selectedBrand = checkboxesBrand.map(function () {
//         return $(this).val();
//     }).get();

//     var paraArr = {
//         'brand_id': JSON.stringify(selectedBrand),
//         'price_ranges': JSON.stringify(selectedCheckboxValues),
//         'horse_power_ranges': JSON.stringify(selectedCheckboxValues2),
//     };

//     var url = 'http://tractor-api.divyaltech.com/api/customer/get_old_tractor_by_filter';
//     $.ajax({
//         url: url,
//         type: 'POST',
//         data: paraArr,
//         headers: {
//             'Authorization': 'Bearer ' + localStorage.getItem('token')
//         },
//         success: function (searchData) {
//             var filterContainer = $("#productContainer");
//             filterContainer.empty();

//             searchData.product.forEach(function (filter) {
//                 appendFilterCard(filterContainer, filter);
//             });

         
//         },
//         error: function (error) {
//             console.error('Error searching for brands:', error);
//         }
//     });
// }

// function appendFilterCard(filterContainer, filter) {
//     function appendCard(container, p) {
//         var images = p.image_names;
//         var a = [];

//         if (images) {
//             if (images.indexOf(',') > -1) {
//                 a = images.split(',');
//             } else {
//                 a = [images];
//             }
//         }
//         var cardId = `card_${p.product_id}`; // Dynamic ID for the card
//         var modalId = `used_tractor_callbnt_${p.product_id}`; // Dynamic ID for the modal
//         var formId = `contact-seller-call_${p.product_id}`; // Dynamic ID for the form

//         var newCard = `
//     <div class="col-12 col-lg-4 col-md-4 col-sm-4 mb-4" id="${cardId}">
//         <div class="h-auto success__stry__item d-flex flex-column shadow ">
//             <div class="thumb">
//                 <a href="farmtrac_60.php?product_id=${p.customer_id}">
//                     <div class="ratio ratio-16x9">
//                         <img src="http://tractor-api.divyaltech.com/uploads/product_img/${a[0]}" class="object-fit-cover " alt="${p.description}">
//                     </div>
//                 </a>
//             </div>
//             <div class="content d-flex flex-column flex-grow-1 ">
//                 <div class="caption text-center">
//                     <a href="farmtrac_60.php?product_id=${p.customer_id}" class="text-decoration-none text-dark">
//                         <p class="pt-3"><strong class="series_tractor_strong text-center h4 fw-bold ">${p.model}</strong></p>
//                     </a>      
//                 </div>
//                 <div class=" row">
//                     <div class="col-12 ms-2 ">
//                         <p class="" id="district"><span id="engine_powerhp2">${p.brand_name}</span> | <span id="year">${p.purchase_year}</span>| ${p.district}</p>
//                     </div>
//                 </div>
//                 <div class="row text-center">
//                     <div class="col-12 col-sm-6 col-md-6 col-lg-6">
//                         <p class="fw-bold ">Price: ₹<span id="price">${p.price}</p>
//                     </div>
//                     <div class="col-12 col-sm-6 col-md-6 col-lg-6">
//                         <p class="fw-bold pe-2">Great Deal  <i class="fa-regular fa-thumbs-up"></i></p>
//                     </div>
//                 </div>
//             </div>
//             <div class=" row state_btn">
               
//                 <div class="col-12">
//                 <button type="button" class="add_btn btn-success w-100" data-bs-toggle="modal" data-bs-target="#${modalId}">
//                 <i class="fa-regular fa-handshake mx-1"></i>Contact Seller
//             </button>
//                             </div>

//                             <div class="modal fade" id="${modalId}" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
//                                 <div class="modal-dialog modal-lg modal-dialog-centered">
//                                     <div class="modal-content">
//                                         <div class="modal-header  modal_head">
//                                         <h5 class="modal-title text-white ms-1" id="model_form">${p.model}</h5>
//                                         <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
//                                         </div>
//                                         <!-- MODAL BODY -->
//                                         <div class="modal-body">
//                                         <form id="${formId}" method="POST" onsubmit="return false">
//                                                 <div class="row">
//                                                 <div class="row px-3 ">
//                                     <div class="col-12 col-lg-6 col-md-6 col-sm-6 " hidden>
//                                         <label for="name" class="form-label fw-bold text-dark"> <i class="fa-regular fa-user"></i> enquiryName</label>
//                                         <input type="text" class="form-control" placeholder="Enter Your Name" id="enquiry_type_id" value="21" name="fname">
//                                     </div>
//                                     <div class="col-12 col-lg-6 col-md-6 col-sm-6 " hidden>
//                                         <label for="name" class="form-label fw-bold text-dark"> <i class="fa-regular fa-user"></i> product_id</label>
//                                         <input type="text" class="form-control" id="product_id" value="${p.product_id}" hidden> 
//                                     </div>
//                                     <div class="col-12 col-lg-6 col-md-6 col-sm-6 ">
//                                         <label for="name" class="form-label fw-bold text-dark"> <i class="fa-regular fa-user"></i> First Name</label>
//                                         <input type="text" class="form-control" placeholder="Enter Your Name" id="fname" name="fname">
//                                     </div>
//                                     <div class="col-12 col-lg-6 col-md-6 col-sm-6 ">
//                                         <label for="name" class="form-label fw-bold text-dark"> <i class="fa-regular fa-user"></i> Last Name</label>
//                                         <input type="text" class="form-control" placeholder="Enter Your Name" id="lname" name="lname">
//                                     </div>
//                                     <div class="col-12 ">
//                                         <label for="number" class="form-label text-dark fw-bold"> <i class="fa fa-phone" aria-hidden="true"></i> Phone Number</label>
//                                         <input type="text" class="form-control" placeholder="Enter Number" id="number" name="number">
//                                     </div>
//                                     <div class="col-12 col-sm-12 col-md-6 col-lg-6">
//                                         <label for="yr_state" class="form-label text-dark fw-bold" id="state" name="state"> <i class="fas fa-location"></i> State</label>
//                                         <select class="form-select py-2" aria-label=".form-select-lg example" id="state_form" name="state">
//                                             <option value>Select State</option>
//                                             <option value="Chhattisgarh">Chhattisgarh</option>
//                                             <option value="Other">Other</option>
//                                         </select>
//                                     </div>
//                                     <div class="col-12 col-sm-12 col-md-6 col-lg-6">
//                                         <label class="form-label text-dark"><i class="fa-solid fa-location-dot"></i> District</label>
//                                         <select class="form-select py-2 " aria-label=".form-select-lg example" name="district" id="district_form">
//                                             <option value>Select District</option>
//                                             <option value="Raipur">Raipur</option>
//                                             <option value="Bilaspur">Bilaspur</option>
//                                             <option value="Durg">Durg</option>
//                                         </select>
//                                     </div>
//                                     <div class="col-12 col-sm-12 col-md-6 col-lg-6 mt-2">
//                                         <label for="yr_tehsil" class="form-label text-dark"> Tehsil</label>
//                                         <input type="yr_tehsil" class="form-control" placeholder="Enter Tehsil" id="tehsil" name="tehsil">
//                                     </div>
//                                     <div class="col-12 col-sm-12 col-md-6 col-lg-6 mt-2">
//                                         <label for="yr_price" class="form-label text-dark">Price</label>
//                                         <input type="yr_price" class="form-control" placeholder="Enter Price" id="price_form" name="price">
//                                     </div>
                                    
                                    
//                                 </div>          
//                                                 </div> 
                                        
                                
//                                                 <div class="modal-footer">
//                                                 <button type="submit" id="submit_enquiry" class="btn add_btn btn-success w-100 btn_all" onclick="savedata('${formId}')"
//                                                 data-bs-dismiss="modal">Submit</button>
//                                                 </div>      
//                                             </form>                             
//                                         </div>
//                                     </div>
//                                 </div>
//                             </div>
//             </div>
//         </div>
//     </div>

//         `;
//         container.append(newCard);
//     }

//     function displayNextSet() {
//         var productContainer = $("#productContainer");
    
//         // Display the next set of filtered cards
//         filteredCards.slice(cardsDisplayed, cardsDisplayed + cardsPerPage).forEach(function (p) {
//             appendCard(productContainer, p);
//             cardsDisplayed++;
//         });
    
//         // Hide the "Load More" button if all filtered cards are displayed
//         if (cardsDisplayed >= filteredCards.length) {
//             $("#loadMoreBtn").hide();
//         }
//     }
    
//     $(document).on('click', '#loadMoreBtn', function () {
//         // Display the next set of filtered cards when the "Load More" button is clicked
//         displayNextSet();
//     });

//     appendCard(filterContainer, filter);
//     displayNextSet();
// }


//   function resetform(){
//     $('.brand_checkbox').val('');
//     $('.budget_checkbox').val('');
//     $('.hp_checkbox').val('');
//     $('.brand_checkbox:checked').prop('checked', false);
//     $('.budget_checkbox:checked').prop('checked', false);
//     $('.hp_checkbox:checked').prop('checked', false);
    
//     getoldTractorList();
//     window.location.reload();
    
//   }