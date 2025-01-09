$(document).ready(function() {
    console.log("ready!");
    $('#delership_enq_btn').click(store);
    getDealerInnerId();
    $('#Verify').click(verifyotp);
    getTractorList();
    get_blog();
    getpopularTractorList();
});

function getDealerInnerId() {
  console.log(window.location)
  var urlParams = new URLSearchParams(window.location.search);
  var customer_id = urlParams.get('id');
  console.log(customer_id,'sdfghjksdfghjk');

  var url = 'http://tractor-api.divyaltech.com/api/customer/dealer_data/' + customer_id;
  
  $.ajax({    
      url: url,
      type: "GET",
      success: function(data) {
        var userId = localStorage.getItem('id');
      getUserDetail(userId);
          console.log(data, 'abc');

          var location = data.dealer_details[0].district_name + ', ' + data.dealer_details[0].state_name;
          document.getElementById('brand_main').innerText = data.dealer_details[0].brand_name;
          document.getElementById('brand_second').innerText = data.dealer_details[0].brand_name;
          document.getElementById('location').innerText = location;
          document.getElementById('email_id').innerText = data.dealer_details[0].email;
          document.getElementById('mob_number').innerText = data.dealer_details[0].mobile;
          document.getElementById('mystate').innerText = data.dealer_details[0].state_name;
          document.getElementById('mydistrict').innerText = data.dealer_details[0].district_name;
          document.getElementById('product_id').value = data.dealer_details[0].id;
          document.getElementById('dealer_name').value = data.dealer_details[0].dealer_name;
          document.getElementById('mobile_number').value = data.dealer_details[0].mobile
          ;
          console.log(data, 'abc');
      },
      error: function (error) {
          console.error('Error fetching data:', error);
      }
  });
}



function getTractorList() {
  var url = "http://tractor-api.divyaltech.com/api/customer/get_new_tractor";
  var totalTractors = 0;
  var displayedTractors = 6; 
  $.ajax({
      url: url,
      type: "GET",
      success: function(data) {
          var productContainer = $("#productContainer");
          var loadMoreButton = $("#load_moretract");
          if (data.product.allProductData && data.product.allProductData.length > 0) {
              data.product.allProductData.sort(function(a, b) {
                  return b.product_id - a.product_id;
              });
              displayTractors(data.product.allProductData.slice(0, displayedTractors));

              if (totalTractors <= displayedTractors) {
                  loadMoreButton.hide();
              } else {
                  loadMoreButton.show();
              }
              loadMoreButton.click(function() {
                  displayedTractors = totalTractors;
                  displayTractors(data.product.allProductData);
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
      var cardId = `card_${p.product_id}`; 
      var modalId = `used_tractor_callbnt_${p.product_id}`; 
      var formId = `contact-seller-call_${p.product_id}`; 
      var userId = localStorage.getItem('id');
      getUserDetail(userId);
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
                                                      
                                                      </select>
                                                  </div>
                                              <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                                                  <label for="yr_dist" class="form-label text-dark"><i class="fa-solid fa-location-dot"></i> District</label>
                                                  <select class="form-select py-2 " aria-label=".form-select-lg example" id="district" name="district">
                                                   
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
  $(".add_btn").on("click", function () {
      var productId = $(this).data("product-id");
      $("#used_tractor_callbnt_" + productId).modal("show");
  });
      productContainer.append(newCard);
     
  });
}

function resetForm(formId) {
  document.getElementById(formId).reset();
}
function savedata(formId) {
  submit_enquiry(formId);
}

function submit_enquiry(formId) {
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
          $("#used_tractor_callbnt_").modal('hide'); 
          var msg = "Added successfully !"
          $("#errorStatusLoading").modal('show');    
          $("#errorStatusLoading").find('.modal-title').html('<p class="text-center">Congratulation..! Requested Successful</p>');
       
          $("#errorStatusLoading").find('.modal-body').html(msg);
          $("#errorStatusLoading").find('.modal-body').html('<img src="assets/images/7efs.gif" style="display:block; margin:0 auto;" class="w-50 text-center" alt="Successfull Request"></img>');
        
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
    if (isUserLoggedIn()) {
        var isConfirmed = confirm("Are you sure you want to submit the form?");
        if (isConfirmed) {
            submitForm();
            $('#staticBackdrop').modal('show');
        }
    } else {
        var mobile = $('#mob_num').val();
        get_otp(mobile);
    }
}

function isUserLoggedIn() {
    return localStorage.getItem('token_customer') && localStorage.getItem('mobile') && localStorage.getItem('id');
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
            $('#get_OTP_btn').modal('show'); 
        },
        error: function (error) {
            console.error('Error fetching data:', error);
        }
    });
}

function verifyotp() {
    var mobile = $('#mob_num').val();
    var otp = $('#otp').val();
    var paraArr = {
        'otp': otp,
        'mobile': mobile,
    };
    var url = 'http://tractor-api.divyaltech.com/api/customer/verify_otp';
    $.ajax({
        url: url,
        type: "POST",
        data: paraArr,
        success: function (result) {
            console.log(result);
            $('#get_OTP_btn').modal('hide');
            var isConfirmed = confirm("Are you sure you want to submit the form?");
            if (isConfirmed) {
                submitForm();
                $('#staticBackdrop').modal('show');
            }
        },
        error: function (xhr, textStatus, errorThrown) {
            console.log(xhr.status, 'error');
            // Handle different error scenarios
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

function submitForm() {
    var enquiry_type_id = $('#enquiry_type_id').val();
    var product_id = $('#product_id').val();
    var first_name = $('#f_name').val();
    var last_name = $('#l_name').val();
    var mobile = $('#mob_num').val();
    var state = $('#_state').val();
    var district = $('#_district').val();
    var tehsil = $('#_tehsil').val();
    var brand = $('#_brand').val();
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

    var url = "http://tractor-api.divyaltech.com/api/customer/customer_enquiries";
    $.ajax({
        url: url,
        type: "POST",
        data: paraArr,
        success: function (result) {
        },
        error: function (error) {
            console.error('Error submitting form:', error);
            // Handle error scenarios
            var msg = error;
            $("#errorStatusLoading").modal('show');
            $("#errorStatusLoading").find('.modal-title').html('<p class="text-center">Process Failed..! Enter Valid Detail</p>');
            $("#errorStatusLoading").find('.modal-body').html(msg);
            $("#errorStatusLoading").find('.modal-body').html('<img src="assets/images/comp_3.gif" style="display:block; margin:0 auto;" class="w-50 text-center" alt="Successfull Request"></img>');
        }
    });
}

function getUserDetail(id) {
    var url = "http://tractor-api.divyaltech.com/api/customer/get_customer_personal_info_by_id/" + id;
    console.log(url, 'url print ');

    var headers = {
        'Authorization': localStorage.getItem('token_customer')
    };

    $.ajax({
        url: url,
        type: "GET",
        headers: headers,
        success: function(response) {
            if (response.customerData && response.customerData.length > 0) {
                var customer = response.customerData[0];
                $('#dealership_enq_from #f_name').val(customer.first_name);
                $('#dealership_enq_from #l_name').val(customer.last_name);
                $('#dealership_enq_from #mob_num').val(customer.mobile);
                // $('#dealership_enq_from #_state').val(customer.state_id);
                // $('#dealership_enq_from #_district').val(customer.district);
                // $('#dealership_enq_from #_tehsil').val(customer.tehsil);
                
                // Disable fields if user is logged in
                if (isUserLoggedIn()) {
                    // Disable all input and select elements within the form
                    $('#dealership_enq_from input, #dealership_enq_from select').not('#_state,#_brand,#_district,#_tehsil').prop('disabled', true);
                }
            }
        },
        error: function(error) {
            console.error('Error fetching data:', error);
        }
    });
}

function isUserLoggedIn() {
    return localStorage.getItem('token_customer') && localStorage.getItem('mobile') && localStorage.getItem('id');
}
// get brand
function get() {
  var url = 'http://tractor-api.divyaltech.com/api/customer/get_brand_for_finance';
  $.ajax({
    url: url,
    type: "GET",
    headers: {
      'Authorization': 'Bearer ' + localStorage.getItem('token')
    },
    success: function (data) {
      const select = $('#_brand');
      select.empty(); 
      select.append('<option selected disabled value="">Please select Brand</option>');
      var uniqueBrands = {};

      $.each(data.brands, function (index, brand) {
        var brand_id = brand.id;
        var brand_name = brand.brand_name;
        if (!uniqueBrands[brand_id]) {
          uniqueBrands[brand_id] = true;
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


function get_blog() {
    var url = "http://tractor-api.divyaltech.com/api/customer/get_new_harvester";
    $.ajax({
        url: url,
        type: "GET",
        success: function (data) {
        if (data.product && data.product.length > 0) {
            var productContainer = $("#New_Tractor_Implements");
            data.product.forEach(function (p) {
                var images = p.image_names;
                var a = [];
        
                if (images) {
                    if (images.indexOf(',') > -1) {
                        a = images.split(',');
                    } else {
                        a = [images];
                    }
                }
                var newCard = `
                
                <div class="item box_shadow b-t-1">
                <a href="harvester_inner.php?product_id=${p.id}" class="h-auto success__stry__item d-flex flex-column text-decoration-none shadow">
                <div class="thumb">
                    <div>
                        <img src="http://tractor-api.divyaltech.com/uploads/product_img/${a[0]}" class=" engineoil_img object-fit-cover w-100" h-100" alt="harvester_img">
                    </div>
                </div>
                <div class="position-absolute" >
                    <p  style="font-size:13px;" class="rounded-pill bg-success text-white ms-1 text-center px-2 mt-1">Self Propelled</p>
                </div>
                <div class="content d-flex flex-column flex-grow-1 ">
                    
                    <div class="power text-center mt-3">
                    <div class="row text-center">
                        <div class="col-12 text-center">
                            <p class="fw-bold pe-3 text-primary">${name}</p>
                        </div>
                    </div>
                        <div class="row ">
                            <div class="col-12 "><p class="text-dark ps-2">Cutting Width : ${p.cutting_bar_width} Feet</p></div>
                            
                        </div>    
                    </div>
                </div>
                <div class="col-12 btn-success">
                    <button type="button" class="btn btn-success py-2 w-100"></i> 
                    Power : ${p.horse_power} HP
                    </button>
                </div>
            </a>
                </div>
            `;
                productContainer.append(newCard);
            });

            productContainer.owlCarousel({
                items:4,
                loop: true,
                margin: 10,
                nav: true, 
                autoplay: true, 
                autoplayTimeout: 3000,
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
                        nav: true,
                        loop: false
                    }
                }
            });
        }
    },
    error: function(error) {
        console.error('Error fetching data:', error);
    }
    });
}

function getpopularTractorList() {
    var url = "http://tractor-api.divyaltech.com/api/customer/get_new_tractor";
    $.ajax({
        url: url,
        type: "GET",
        success: function(data) {
            let new_arr = [];
            const new_data = data.product.accessory_and_tractor_type.filter((s) => {
                const arr = s.tractor_type_name.split(',');
                if (arr.includes('Popular')) {
                    new_arr.push(s.product_id);
                    return s.product_id;
                }
            });
            var productContainer = $("#New_Populer_Tractor");
            if (data.product.allProductData && data.product.allProductData.length > 0) {
                data.product.allProductData.forEach(function(p) {
                    if (new_arr.includes(p.product_id)) {
                        var images = p.image_names;
                        var a = [];

                        if (images) {
                            if (images.indexOf(',') > -1) {
                                a = images.split(',');
                            } else {
                                a = [images];
                            }
                        }
                        var newCard = `<div class="item box_shadow b-t-1">
                            <a class="text-decoration-none" href="detail_tractor.php?${p.product_id}">
                                <div class="thumb">
                                    <img src="http://tractor-api.divyaltech.com/uploads/product_img/${a[0]}" class="" alt="img">
                                </div>
                                <div class="new-tractor-content text-center b-t-1">
                                    <h6 class="fw-bold mt-2 text-decoration-none text-dark text-truncate">${p.brand_name} ${p.model}</h6>
                                    <p class="text-dark text-decoration-none mt-2 mb-0">From: ₹${p.starting_price}-${p.ending_price} lac*</p>
                                    <div class=" bg-success w-100 p-2">
                                    <a class="text-decoration-none text-white bg-success w-100" href="onload.php?${p.product_id}">
                                    
                                        <i class="fa-regular fa-handshake"></i> Get on Road Price
                                        </a>
                                        </div>
                                </div>
                            </a>
                        </div>`;
                        productContainer.append(newCard);
                    }
                });
                productContainer.owlCarousel({
                    items: 4,
                    loop: true,
                    margin: 10,
                    nav: true, 
                    autoplay: true, 
                    autoplayTimeout: 3000,
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
                            nav: true,
                            loop: false
                        }
                    }
                });
            }
        },
        error: function(error) {
            console.error('Error fetching data:', error);
        }
    });
}
