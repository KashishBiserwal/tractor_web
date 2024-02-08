$(document).ready(function() {
    console.log("ready!");
    $('#delership_enq_btn').click(store);
    getdealerId();
    getDealerInnerId();
    getTractorList();
});

function getDealerInnerId() {
  console.log(window.location)
  var urlParams = new URLSearchParams(window.location.search);
  var customer_id = urlParams.get('id');
  console.log(customer_id,'sdfghjksdfghjk');
  var url = 'http://tractor-api.divyaltech.com/api/customer/get_dealer_enquiry_data_by_id/' + customer_id;
  
  $.ajax({    
      url: url,
      type: "GET",
      success: function(data) {
          console.log(data, 'abc');

          // Concatenate district and state
          var location = data.dealer_enquiry_details[0].district + ', ' + data.dealer_enquiry_details[0].state;

          // Update HTML elements with data
          document.getElementById('brand_main').innerText = data.dealer_enquiry_details[0].brand_name;
         
          document.getElementById('location').innerText = location;
          document.getElementById('email_id').innerText = data.dealer_enquiry_details[0].email;
          // document.getElementById('location_1').innerText = location;
          document.getElementById('brand_second').innerText = data.dealer_enquiry_details[0].brand_name;
          document.getElementById('mob_number').innerText = data.dealer_enquiry_details[0].mobile;
          document.getElementById('mystate').innerText = data.dealer_enquiry_details[0].state;
          document.getElementById('my_district').innerText = data.dealer_enquiry_details[0].district;
          document.getElementById('product_id').value = data.dealer_enquiry_details[0].product_id;

         
          var imageNames = data.dealer_enquiry_details[0].image_names.split(',');

          var carouselContainer = $('.swiper-wrapper_buy');

          carouselContainer.empty();
          imageNames.forEach(function(imageName) {
              var imageUrl = "http://tractor-api.divyaltech.com/uploads/dealer_img/" + imageName.trim(); // Update the path
              var slide = $('<div class="swiper-slide swiper-slide_buy"><img class="img_buy" src="' + imageUrl + '" /></div>');
              carouselContainer.append(slide);
          });

          var mySwiper = new Swiper('.swiper_buy', {
          });

          console.log(data, 'abc');
      },
      error: function (error) {
          console.error('Error fetching data:', error);
      }
  });
}



function getTractorList() {
  var url = "http://tractor-api.divyaltech.com/api/customer/get_new_tractor";

  // Keep track of the total tractors and the currently displayed tractors
  var totalTractors = 0;
  var displayedTractors = 6; // Initially display 6 tractors

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
              // Display the initial set of 6 tractors
              displayTractors(data.product.allProductData.slice(0, displayedTractors));

              if (totalTractors <= displayedTractors) {
                  loadMoreButton.hide();
              } else {
                  loadMoreButton.show();
              }

              // Handle "Load More Tractors" button click
              loadMoreButton.click(function() {
                  // Display all tractors
                  displayedTractors = totalTractors;
                  displayTractors(data.product.allProductData);

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


function displayTractors(tractors) {
  var productContainer = $("#productContainer");
  var tableData = $("#tableData");
  // Clear existing content
  productContainer.html('');
  tableData.html('');

  
  tractors.forEach(function (p) {
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
      var formId = `contact-seller-call_${p.product_id}`; 

      var newCard = `
                  <div class="col-12 col-lg-12 col-md-12 col-sm-12 mb-3"id="${cardId}">
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
                                      <button type="button" class="btn-close btn-success" data-bs-dismiss="modal" aria-label="Close"><img src="assets/images/close.png"></button>
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
                                                      <P class="text-danger">*Please make sure mobile no. must valid</p>
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
                                                  <select class="form-select py-2 " aria-label=".form-select-lg example" id="district" name="district">
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
                 
              
              // Add event listener for modal opening
  $(".add_btn").on("click", function () {
      var productId = $(this).data("product-id");
      $("#used_tractor_callbnt_" + productId).modal("show");
  });
      // Append the new card to the container
      productContainer.append(newCard);
      tableData.append(tableRow);
      // hp_wise.append(tablerow_hp);
     
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
  var product_id = $(`#${formId} #product_type_id`).val();
  var firstName = $(`#${formId} #firstName`).val();
  var lastName = $(`#${formId} #lastName`).val();
  var mobile_number = $(`#${formId} #mobile_number`).val();
  var state = $(`#${formId} #state`).val();
  var district = $(`#${formId} #district`).val();
  var Tehsil = $(`#${formId} #Tehsil`).val();
  var enquiry_type_id =$(`#${formId} #enquiry_type_id`).val();
  var paraArr = {
    'product_id':product_id,
    'product_type_id':product_type_id,
    'first_name': firstName,
    'last_name': lastName,
    'mobile': mobile_number,
    'state': state,
    'district': district,
    'tehsil': Tehsil,
    'enquiry_type_id':enquiry_type_id,
  };
  console.log(paraArr);
var url ='http://tractor-api.divyaltech.com/api/customer/customer_enquiries';

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



function store(event) {
    event.preventDefault();
    console.log('jfhfhw');
    var enquiry_type_id = 16;
    var product_id =2;
    var first_name = $('#f_name').val();
    var last_name = $('#l_name').val();
    var mobile = $('#mob_num').val();
    var state = $('#_state').val();
    var district = $('#_district').val();
    var tehsil = $('#_tehsil').val();
    var brand = $('#_brand').val();
  
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
      'brand_id':brand,
    };
   
  var apiBaseURL =APIBaseURL;
//   var url = apiBaseURL + 'customer_enquiries';
var url = "http://tractor-api.divyaltech.com/api/customer/customer_enquiries"
    console.log(url);
  
  
    // Make an AJAX request to the server
    $.ajax({
      url: url,
      type: "POST",
      data: paraArr,
      success: function (result) {
        console.log(result, "result");
        // alert('successfully inserted..!');
        // const new_data=data.product.filter((s)=>{ 
        //     if(s.product_type=="FOR_SELL_TRACTOR"){
        //         return s;
        //     }
        // });
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
        // 
      }
    });
  }

  function getdealerId() {
    console.log(window.location)
    var urlParams = new URLSearchParams(window.location.search);
    var Id = urlParams.get('id');
    var url = "http://tractor-api.divyaltech.com/api/customer/dealer_data/" + Id;
     console.log(url);
    $.ajax({
        url: url,
        type: "GET",
        success: function(data) {
        console.log(data, 'abc');
        /* document.getElementById('brand_name').innerText=data.engine_oil_details[0].brand_name ;
        document.getElementById('model_name').innerText=data.engine_oil_details[0].oil_model;
        document.getElementById('grade').innerText=data.engine_oil_details[0].grade;
        document.getElementById('quantity').innerText=data.engine_oil_details[0].quantity;
        document.getElementById('price').innerText=data.engine_oil_details[0].price;
        // document.getElementById('compatible_tractor').innerText=JSON.parse(data.engine_oil_details[0].compatible_model);
        document.getElementById('description').innerText=data.engine_oil_details[0].description;
     
            var product = data.engine_oil_details[0];
            var imageNames = product.image_names.split(',');
            var carouselContainer = $('.mySwiper2_data');
            var carouselContainer2 = $('.mySwiper_data');

            carouselContainer.empty();

            imageNames.forEach(function(imageName) {
                var imageUrl = "http://tractor-api.divyaltech.com/uploads/engine_oil_img/" + imageName.trim(); 
                var slide = $('<div class="swiper-slide swiper-slide_buy"><img class="img_buy" src="' + imageUrl + '" /></div>');
                var slide2 = $('<div class="swiper-slide swiper-slide_buy"><img class="img_buy" src="' + imageUrl + '" /></div>');
                carouselContainer.append(slide);
                carouselContainer2.append(slide2);
            });

           // Initialize or update the Swiper carousel
            var mySwiper = new Swiper('.mySwiper2_data', {
              // Your Swiper configuration options
          });
          var mySwiper = new Swiper('.mySwiper_data', {
              // Your Swiper configuration options
          }); */
        },
        error: function (error) {
            console.error('Error fetching data:', error);
        }
    });
}



// get brand
function get() {
  var apiBaseURL = APIBaseURL;
  var url = apiBaseURL + 'getBrands';

  $.ajax({
    url: url,
    type: "GET",
    headers: {
      'Authorization': 'Bearer ' + localStorage.getItem('token')
    },
    success: function (data) {
      console.log(data);

      const select = $('#_brand');
      select.empty(); // Clear existing options

      // Add a default option
      select.append('<option selected disabled value="">Please select Brand</option>');

      // Use an object to keep track of unique brands
      var uniqueBrands = {};

      $.each(data.brands, function (index, brand) {
        var brand_id = brand.id;
        var brand_name = brand.brand_name;

        // Check if the brand ID is not already in the object
        if (!uniqueBrands[brand_id]) {
          // Add brand ID to the object
          uniqueBrands[brand_id] = true;

          // Append the option to the dropdown
          select.append('<option value="' + brand_id + '">' + brand_name + '</option>');
        }
      });
    },
    error: function (error) {
      console.error('Error fetching data:', error);
    }
  });
}
get();