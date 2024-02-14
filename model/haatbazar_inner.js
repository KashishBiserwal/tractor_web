$(document).ready(function() {
    console.log("ready!");
    $('#button_nursery').click(storedata);
    getTractorList();
    gethaatbazzat();

    getProductById();
    // get_allbrand();
    getpopularTractorList();

    
});


function gethaatbazzat() {
  console.log(window.location)
  var urlParams = new URLSearchParams(window.location.search);
  var customer_id = urlParams.get('id');
  console.log(customer_id,'sdfghjksdfghjk');
  var url = 'http://tractor-api.divyaltech.com/api/customer/get_haat_bazar_by_id/' + customer_id;
  
  $.ajax({    
      url: url,
      type: "GET",
      success: function(data) {
          console.log(data, 'abc');
          // document.getElementById('category_name').innerText = data.allData.haat_bazar_category_name[0].model; 
          // Concatenate district and state
          // var location = data.haat_bazar_data[0].district + ', ' + data.haat_bazar_data[0].state;

          // Update HTML elements with data
          document.getElementById('Sub_category_main').innerText = data.allData.haat_bazar_data[0].sub_category_name; 
          document.getElementById('original_price').innerText = data.allData.haat_bazar_data[0].price;   
          document.getElementById('category_name_1').innerText = data.allData.haat_bazar_data[0].category_name;
          document.getElementById('sucategory_name').innerText = data.allData.haat_bazar_data[0].sub_category_name;
          document.getElementById('quantity').innerText = data.allData.haat_bazar_data[0].quantity;
          document.getElementById('price_as').innerText = data.allData.haat_bazar_data[0].price;
          document.getElementById('description_1').innerText = data.allData.haat_bazar_data[0].about;
          // document.getElementById('description').innerText = location;
          document.getElementById('first_name').innerText = data.allData.haat_bazar_data[0].first_name;
          document.getElementById('phone_number').innerText = data.allData.haat_bazar_data[0].mobile;
          document.getElementById('state_1').innerText = data.allData.haat_bazar_data[0].state;
          document.getElementById('district_1').innerText = data.allData.haat_bazar_data[0].district;
          document.getElementById('tehsil_1').innerText = data.allData.haat_bazar_data[0].tehsil;
          document.getElementById('product_id').value = data.allData.haat_bazar_data[0].product_id;
          document.getElementById('slr_name').value = data.allData.haat_bazar_data[0].first_name;
          document.getElementById('mob_num').value = data.allData.haat_bazar_data[0].mobile;
        
          var imageNames = data.allData.haat_bazar_data[0].image_names.split(',');

            // Select the carousel container
            var carouselContainer = $('.swiper-wrapper_buy');

            // Clear existing slides
            carouselContainer.empty();

            // Initialize an empty array to store Swiper slides
            var swiperSlides = [];

            // Iterate through the image names and create carousel slides
            imageNames.forEach(function(imageName, index) {
                var imageUrl = "http://tractor-api.divyaltech.com/uploads/haat_bazar_img/" + imageName.trim(); // Update the path
                var slide = $('<div class="swiper-slide swiper-slide_buy"><img class="img_buy" src="' + imageUrl + '" style="height: 300px;" /></div>'); // Set height here
                carouselContainer.append(slide);
                
                // Push the created slide into the swiperSlides array
                swiperSlides.push(slide);
            });

            // Initialize or update the Swiper carousel
            var mySwiper = new Swiper('.swiper_buy', {
                // Your Swiper configuration options
            });

            // Add click event listener to each slide
            swiperSlides.forEach(function(slide, index) {
                slide.on('click', function() {
                    // Slide to the clicked slide
                    mySwiper.slideTo(index);
                });
            });
          },
         
      error: function (error) {
          console.error('Error fetching data:', error);
      }
  });
}


// store data throught form

function storedata(event) {
    event.preventDefault();

    // Validate the form
    if ($('#nursery_form').valid()) {
        var enquiry_type_id = $('#enquiry_type_id').val();
        var product_id = 30;
        var first_name = $('#fname').val();
        var last_name = $('#lname').val();
        var mobile = $('#phone').val();
        var state = $('#state_2').val();
        var district = $('#district').val();
        var tehsil = $('#tehsil').val();
        var price = $('#price').val();
        console.log('jfhfhw', product_id);

        // Prepare data to send to the server
        var paraArr = {
            'product_id': product_id,
            'enquiry_type_id': enquiry_type_id,
            'first_name': first_name,
            'last_name': last_name,
            'mobile': mobile,
            'state': state,
            'district': district,
            'tehsil': tehsil,
            'price': price,
        };

        var apiBaseURL = APIBaseURL;
        var url = "http://tractor-api.divyaltech.com/api/customer/customer_enquiries";
        console.log(url);

        // Make an AJAX request to the server
        $.ajax({
            url: url,
            type: "POST",
            data: paraArr,
            success: function(result) {
                console.log(result, "result");
            
                // Reset the form
                $('#nursery_form')[0].reset();
            
                $("#used_tractor_callbnt_").modal('hide');
                var msg = "Added successfully !"
                // $("#errorStatusLoading").modal('show');
                // $("#errorStatusLoading").find('.modal-title').html('<p class="text-center">Congratulation..! Requested Successful</p>');
            
                $("#errorStatusLoading").find('.modal-body').html(msg);
                $("#errorStatusLoading").find('.modal-body').html('<img src="assets/images/7efs.gif" style="display:block; margin:0 auto;" class="w-50 text-center" alt="Successfull Request"></img>');
            
                // Open the model_seller_contact modal after clicking "Got It" in the alert
                $("#errorStatusLoading").on('hidden.bs.modal', function() {
                    $('#model_seller_contact').modal('show');
                });
            
                console.log("Add successfully");
            },
            error: function(error) {
                console.error('Error fetching data:', error);
                var msg = error;
                $("#errorStatusLoading").modal('show');
                $("#errorStatusLoading").find('.modal-title').html('<p class="text-center">Process Failed..! Enter Valid Detail</p>');
                $("#errorStatusLoading").find('.modal-body').html(msg);
                $("#errorStatusLoading").find('.modal-body').html('<img src="assets/images/comp_3.gif" style="display:block; margin:0 auto;" class="w-50 text-center" alt="Successfull Request"></img>');
            }
        });
    }
}

function resetform(){
  $('#fname').val('');
  $('#lname').val('');
  $('#phone').val('');
  $('#state_2').val('');
  $('#district').val('');
  $('#tehsil').val('');
  $('#price').val('');
  $('#slr_name').val('');
  $('#mob_num').val('');
  $('#model_seller_contact').modal('hide');
  gethaatbazzat();
  // window.location.reload();
}
function getTractorList() {
  var url = "http://tractor-api.divyaltech.com/api/customer/get_haat_bazar";

  // Keep track of the total tractors and the currently displayed tractors
  var haat_bazar_data = 0;
  var displayedTractors = 6; // Initially display 6 tractors

  $.ajax({
      url: url,
      type: "GET",
      success: function(data) {
          var productContainer = $("#productContainer");
          var loadMoreButton = $("#load_more");

          if (data.allData.haat_bazar_data && data.allData.haat_bazar_data.length > 0) {
              haat_bazar_data = data.allData.haat_bazar_data.length;

              // Display the initial set of 6 tractors
              displaylist(data.allData.haat_bazar_data.slice(0, displayedTractors));

              if (haat_bazar_data <= displayedTractors) {
                  loadMoreButton.hide();
              } else {
                  loadMoreButton.show();
              }

              // Handle "Load More Tractors" button click
              loadMoreButton.click(function() {
                  // Display all tractors
                  displayedTractors = haat_bazar_data;
                  displaylist(data.allData.haat_bazar_data);

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
function displaylist(tractors) {
  var productContainer = $("#productContainer");
  var tableData = $("#tableData");
  // Clear existing content
  productContainer.html('');
  tableData.html('');

  tractors.forEach(function(p) {
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
      var modalId = `used_tractor_callbnt_${p.product_id}`; // Dynamic ID for the modal
      var formId = `contact-seller-call${p.product_id}`; // Dynamic ID for the form
      
      var newCard = `
      <div class="col-12 col-lg-4 col-md-4 col-sm-4 mb-3" id="${cardId}">
          <div class="h-auto success__stry__item d-flex flex-column shadow">
           
              <div class="thumb">
              <a href="hatbzrbuy_inner.php?id=${p.haat_bazar_id}">
                  <div class="ratio ratio-16x9">
                      <img src="http://tractor-api.divyaltech.com/uploads/haat_bazar_img/${a[0]}" class="object-fit-cover " alt="${p.description}">
                  </div>
              </a>
          </div>
              <div class="content d-flex flex-column flex-grow-1">
                  <div class="caption text-center">
                      <a href="hatbzrbuy_inner.php?id=${p.haat_bazar_id}" class="text-decoration-none text-dark">
                          <p class="pt-3"><strong class="series_tractor_strong text-center h4 fw-bold ">${p.sub_category_name}</strong></p>
                      </a>
                  </div>
                  <div class="power text-center mt-2">
                      <div class="row">
                          <div class="col-12 col-lg-6 col-md-6 col-sm-6"><p class="text-dark ps-2"> ${p.category_name}</p></div>
                          <div class="col-12 col-lg-6 col-md-6 col-sm-6" style="padding-right: 32px;">
                              <p class="text-success ps-2"><i class="fa fa-inr" aria-hidden="true"></i>
                              ${p.price}/<span>  ${p.as_per}</span></p>
                          </div>
                      </div>
                  </div>
                  <div class="col-12">
                      <p class=" text-center" id="district"><span id="engine_powerhp2"></span> ${p.district},<span id="year"> ${p.state}</span></p>
                  </div>
                  <div class="col-12">
                      <button type="button" class="add_btn btn-success w-100" data-bs-toggle="modal" data-bs-target="#${modalId}" data-product-id="${p.product_id}">
                          <i class="fa-regular fa-handshake"></i> Contact Seller
                      </button>
                  </div>

                  <div class="modal fade" id="${modalId}" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                      <div class="modal-dialog modal-lg modal-dialog-centered">
                        <div class="modal-content">
                          <div class="modal-header  modal_head">
                            <h5 class="modal-title text-white ms-1" id="staticBackdropLabel">${p.model}</h5>
                            <button type="button" class="btn-close btn-success" data-bs-dismiss="modal" aria-label="Close"><img src="assets/images/close.png"></button>
                          </div>
                        
                              <!-- MODAL BODY -->
                              <div class="modal-body">
                                  <form id="${formId}" method="POST" onsubmit="return false">
                                      <div class="row">
                                          <div class="col-12 col-lg-6 col-md-6 col-sm-6 " hidden>
                                              <label for="name" class="form-label fw-bold text-dark"><i class="fa-duotone fa-chart-pie-simple"></i> Model Name</label>
                                              <input type="text" class="form-control" placeholder="Enter Your Name" id="enquiry_type_id" value="8" name="iduser">
                                          </div>
                                          <div class="col-12 col-lg-6 col-md-6 col-sm-6 " hidden>
                                          <label for="name" class="form-label fw-bold text-dark"> <i class="fa-regular fa-user"></i> product_id</label>
                                          <input type="text" class="form-control" id="product_id" value="${p.product_id}" hidden> 
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
                                              <p class="text-danger">*Please make sure mobile no. must be valid</p>
                                          </div>
                                          <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                                              <label for="yr_state" class="form-label text-dark fw-bold"> <i class="fa-solid fa-location-dot"></i>  Select State</label>
                                              <select class="form-select py-2 " aria-label=".form-select-lg example" id="state" name="state">
                                                  <option value>Select State</option>
                                                  <option value="Chhattisgarh">Chhattisgarh</option>
                                                  <option value="Other">Other</option>
                                              </select>
                                          </div>
                                          <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                                              <label for="yr_dist" class="form-label text-dark"><i class="fa-solid fa-location-dot"></i> District</label>
                                              <select class="form-select py-2 " aria-label=".form-select-lg example" id="district_1" name="district">
                                                  <option value>Select District</option>
                                                  <option value="Raipur">Raipur</option>
                                                  <option value="Bilaspur">Bilaspur</option>
                                                  <option value="Durg">Durg</option>
                                              </select>
                                          </div>
                                          <div class="col-12 col-sm-6 col-md-6 col-lg-6">
                                              <label for="yr_price" class="form-label text-dark">Tehsil</label>
                                              <input type="text" class="form-control" placeholder="Enter Your Tehsil" id="Tehsil" name="Tehsil">
                                          </div>
                                      </div>

                                      <div class="modal-footer">
                                          <button type="submit" id="submit_enquiry" class="btn add_btn btn-success w-100 btn_all" onclick="savedata('${formId}')" data-bs-dismiss="modal">Submit</button>
                                          <!-- <a class="btn  text-primary" data-dismiss="modal">Ok</a> -->
                                      </div>
                                  </form>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  `;

      // Append the new card to the container
      productContainer.append(newCard);

      // Add event listener for modal opening
   
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
  var enquiry_type_id = $(`#${formId} #enquiry_type_id`).val();
  var product_id = 30;  // You may need to adjust this based on your logic
  var first_name = $(`#${formId} #firstName`).val();
  var last_name = $(`#${formId} #lastName`).val();
  var mobile_number = $(`#${formId} #mobile_number`).val();
  var state = $(`#${formId} #state`).val();
  var district = $(`#${formId} #district_1`).val();
  var tehsil = $(`#${formId} #Tehsil`).val();

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


function displaylist(tractors) {
  var productContainer = $("#productContainer");
  var tableData = $("#tableData");
  // Clear existing content
  productContainer.html('');
  tableData.html('');

  tractors.forEach(function(p) {
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
      var modalId = `used_tractor_callbnt_${p.product_id}`; // Dynamic ID for the modal
      var formId = `contact-seller-call${p.product_id}`; // Dynamic ID for the form
      
      var newCard2 = `
          <div class="col-12  mb-3" id="${cardId}">
              <div class="h-auto success__stry__item d-flex flex-column shadow">
                  <div class="thumb">
                      <a href="hatbzrbuy_inner.php?id=${p.haat_bazar_id}">
                          <div class="ratio ratio-16x9">
                              <img src="http://tractor-api.divyaltech.com/uploads/haat_bazar_img/${a[0]}" class="object-fit-cover" alt="${p.description}">
                          </div>
                      </a>
                  </div>
                  <div class="content d-flex flex-column flex-grow-1">
                      <div class="caption text-center">
                          <a href="hatbzrbuy_inner.php?id=${p.haat_bazar_id}" class="text-decoration-none text-dark">
                              <p class="pt-3"><strong class="series_tractor_strong text-center h4 fw-bold ">${p.sub_category_name}</strong></p>
                          </a>
                      </div>
                      <div class="power text-center mt-2">
                          <div class="row">
                              <div class="col-12 col-lg-6 col-md-6 col-sm-6"><p class="text-dark ps-2"> ${p.haat_bazar_category_name}</p></div>
                              <div class="col-12 col-lg-6 col-md-6 col-sm-6" style="padding-right: 32px;">
                                  <p class="text-success ps-2"><i class="fa fa-inr" aria-hidden="true"></i>
                                  ${p.price}/<span>  ${p.as_per}</span></p>
                              </div>
                          </div>
                      </div>
                      <div class="col-12">
                          <p class=" text-center" id="district"><span id="engine_powerhp2"></span> ${p.district},<span id="year"> ${p.state}</span></p>
                      </div>
                      <div class="col-12">
                          <button type="button" class="add_btn btn-success w-100" data-bs-toggle="modal" data-bs-target="#${modalId}" data-product-id="${p.product_id}">
                              <i class="fa-regular fa-handshake"></i> Contact Seller
                          </button>
                      </div>

                      <div class="modal fade" id="${modalId}" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                          <div class="modal-dialog modal-lg modal-dialog-centered">
                            <div class="modal-content">
                              <div class="modal-header  modal_head">
                                <h5 class="modal-title text-white ms-1" id="staticBackdropLabel">${p.model}</h5>
                                <button type="button" class="btn-close btn-success" data-bs-dismiss="modal" aria-label="Close"><img src="assets/images/close.png"></button>
                              </div>
                            
                                  <!-- MODAL BODY -->
                                  <div class="modal-body">
                                      <form id="${formId}" method="POST" onsubmit="return false">
                                          <div class="row">
                                              <div class="col-12 col-lg-6 col-md-6 col-sm-6 " hidden>
                                                  <label for="name" class="form-label fw-bold text-dark"><i class="fa-duotone fa-chart-pie-simple"></i> Model Name</label>
                                                  <input type="text" class="form-control" placeholder="Enter Your Name" id="enquiry_type_id" value="8" name="iduser">
                                              </div>
                                              <div class="col-12 col-lg-6 col-md-6 col-sm-6 " hidden>
                                              <label for="name" class="form-label fw-bold text-dark"> <i class="fa-regular fa-user"></i> product_id</label>
                                              <input type="text" class="form-control" id="product_id" value="${p.product_id}" hidden> 
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
                                                  <p class="text-danger">*Please make sure mobile no. must be valid</p>
                                              </div>
                                              <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                                                  <label for="yr_state" class="form-label text-dark fw-bold"> <i class="fa-solid fa-location-dot"></i>  Select State</label>
                                                  <select class="form-select py-2 " aria-label=".form-select-lg example" id="state" name="state">
                                                      <option value>Select State</option>
                                                      <option value="Chhattisgarh">Chhattisgarh</option>
                                                      <option value="Other">Other</option>
                                                  </select>
                                              </div>
                                              <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                                                  <label for="yr_dist" class="form-label text-dark"><i class="fa-solid fa-location-dot"></i> District</label>
                                                  <select class="form-select py-2 " aria-label=".form-select-lg example" id="district_1" name="district">
                                                      <option value>Select District</option>
                                                      <option value="Raipur">Raipur</option>
                                                      <option value="Bilaspur">Bilaspur</option>
                                                      <option value="Durg">Durg</option>
                                                  </select>
                                              </div>
                                              <div class="col-12 col-sm-6 col-md-6 col-lg-6">
                                                  <label for="yr_price" class="form-label text-dark">Tehsil</label>
                                                  <input type="text" class="form-control" placeholder="Enter Your Tehsil" id="Tehsil" name="Tehsil">
                                              </div>
                                          </div>

                                          <div class="modal-footer">
                                              <button type="submit" id="submit_enquiry" class="btn add_btn btn-success w-100 btn_all" onclick="savedata('${formId}')" data-bs-dismiss="modal">Submit</button>
                                              <!-- <a class="btn  text-primary" data-dismiss="modal">Ok</a> -->
                                          </div>
                                      </form>
                                  </div>
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