$(document).ready(function() {
    console.log("ready!");
    $('#button_nursery').click(storedata);

  getNurseryById();
   getnurseryList();

});
function getNurseryById() {
    console.log('tyufhghfjghyfjkh');
    var urlParams = new URLSearchParams(window.location.search);
    var Id = urlParams.get('id');
    console.log(Id,'fghjfdghjkdfghjfgh');
    var url = 'http://tractor-api.divyaltech.com/api/customer/nursery_data/' + Id;
    // console.log(url);
    $.ajax({
        url: url,
        type: "GET",
        success: function(data) {
        console.log(data, 'abc');
        document.getElementById('district_main').innerText=data.nursery_data[0].district_name;
        document.getElementById('description').innerText=data.nursery_data[0].description;
        document.getElementById('address').innerText=data.nursery_data[0].address ;
        document.getElementById('state_1').innerText=data.nursery_data[0].state_name;
        document.getElementById('district_1').innerText=data.nursery_data[0].district_name;
        document.getElementById('tehsil_1').innerText=data.nursery_data[0].tehsil_name;
        document.getElementById('number_1').innerText=data.nursery_data[0].mobile;
     
     
        var imageNames = data.nursery_data[0].image_names.split(',');

        // Select the carousel container
        var carouselContainer = $('.swiper-wrapper_buy');

        // Clear existing slides
        carouselContainer.empty();

        // Iterate through the image names and create carousel slides
        imageNames.forEach(function(imageName) {
            var imageUrl = "http://tractor-api.divyaltech.com/uploads/nursery_img/" + imageName.trim(); // Update the path
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

function getnurseryList() {
    var url = CustomerAPIBaseURL + 'nursery_data';

    // Keep track of the total tractors and the currently displayed tractors
    var totalnursery = 0;
    var displayednursery = 8; // Initially display 6 tractors

    $.ajax({
        url: url,
        type: "GET",
        success: function(data) {
            var productContainer = $("#productContainer");
            var loadMoreButton = $("#load_moretract");

            if (data.nursery_data && data.nursery_data.length > 0) {
                totalnursery = data.nursery_data.length;

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

        var newCard = ` <div class="col-12 col-lg-3 col-md-3 col-sm-3 mb-4">
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
                        <p class="fw-bold pe-3">${p.district_name}, ${p.state_name}</p>
                    </div>
                </div>
            </div>
        </a>
        <div class="col-12 btn-success">
            <button type="button" class="btn btn-success py-2 w-100" data-bs-toggle="modal"
                data-bs-target="#nursery_callbnt_${p.id}"><i class="fa-solid fa-phone"></i>
                Contact Nursery
            </button>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="nursery_callbnt_${p.id}" data-bs-backdrop="static"
            data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel"
            aria-hidden="true">
                        <div class="modal-dialog modal-lg modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header  modal_head">
                    <h5 class="modal-title text-white ms-1" id="staticBackdropLabel">Contact Nursery</h5>
                    <button type="button" class="btn-close btn-success" data-bs-dismiss="modal" aria-label="Close"><img src="assets/images/close.png"></button>
                                </div>
                    <div class="modal-body my-3">
                        <div class="model-cont">
                            <form action="" id="nursery_form" class="bg-light shadow " method="post">
                                <div class="row">
                                <input type="hidden" id="product_id" value="${p.product_id}" >
                                <input type="hidden" id="enquiry_type_id" value="11" >
                                <div class="col-12 col-lg-6 col-md-6 col-sm-6">
                                <div class="form-outline">
                                <label for="fname" class="form-label "><i
                                        class="fa-regular fa-user"></i> First Name</label>
                                <input type="text" class="form-control" onkeydown="return /[a-zA-Z]/i.test(event.key)" id="fname" name="fname">
                            </div>
                              </div>
                              <div class="col-12 col-lg-6 col-md-6 col-sm-6">
                              <div class="form-outline">
                              <label for="lname" class="form-label "><i
                                      class="fa-regular fa-user"></i> Last Name</label>
                              <input type="text" class="form-control" onkeydown="return /[a-zA-Z]/i.test(event.key)" id="lname" name="lname">
                          </div>
                              </div>
                              <div class="col-12 col-sm-6 col-md-6 col-lg-6 mt-4">
                              <div class="form-outline ">
                              <label for="phone" class="form-label "><i class="fa fa-phone"
                                      aria-hidden="true"></i> Phone
                                  Number</label>
                              <input type="tel" class="form-control" id="phone" name="phone">
                          </div>
                              </div>
                              <div class="col-12 col-sm-12 col-md-6 col-lg-6 mt-4">
                                    <div class="form-outline ">
                                    <label for="state" class="form-label "><i
                                            class="fas fa-location"></i> State</label>
                                    <select class="form-select py-2 "
                                        aria-label=".form-select-lg example" id="state"
                                        name="state">
                                        <option value="" selected disabled></option>
                                        <option value="1">Chhattisgarh</option>
                                        <option value="2">Other</option>
                                    </select>
                                </div>
                              </div>
                              <div class="col-12 col-sm-12 col-md-6 col-lg-6 mt-4">
                              <div class="form-outline ">
                              <label for="district" class="form-label "><i
                                      class="fa-solid fa-location-dot"></i> District</label>
                              <select class="form-select py-2 "
                                  aria-label=".form-select-lg example" name="district"
                                  id="district">
                                  <option value="" selected disabled></option>
                                  <option value="1">Raipur</option>
                                  <option value="2">Bilaspur</option>
                                  <option value="2">Durg</option>
                              </select>
                          </div>                   
                              </div>       
                              <div class="col-12 col-sm-6 col-md-6 col-lg-6 mt-4">
                              <div class="form-outline ">
                              <label for="tehsil" class="form-label">Tehsil</label>
                              <select class="form-select py-2 "
                                  aria-label=".form-select-lg example" name="tehsil"
                                  id="tehsil">
                                  <option value="" selected disabled></option>
                                  <option value="1">Raipur</option>
                                  <option value="2">Bilaspur</option>
                                  <option value="2">Durg</option>
                              </select>
                          </div>
                              </div>

                              <div class="text-center my-3">
                              <button type="submit" id="submit_enquiry" class="btn add_btn btn-success w-100 btn_all" onclick="nursery_enquiry()" data-bs-dismiss="modal">Submit</button>        
                              </div>  
                                </div>
                            </form>
                        </div>
                    </div>
                 
                </div>
            </div>
        </div>

    </div> `;
                

  
    var myDiv = $('#description_id');
myDiv.text(myDiv.text().substring(0,120))
        // Append the new card to the container
        productContainer.append(newCard);
       
       
    });
}

function storedata(event) {
    event.preventDefault();
   
    var enquiry_type_id = $('#enquiry_type_id').val();
    var product_id = 3;
    var first_name = $('#fname').val();
    var last_name = $('#lname').val();
    var mobile = $('#phone').val();
    var state = $('#state').val();
    var district = $('#district').val();
    var tehsil = $('#tehsil').val();

    console.log('jfhfhw',product_id);
  
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
        <div class="col-12 col-lg-12 col-md-12 col-sm-12 mb-12" id="${cardId}">
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
                            <p class="fw-bold pe-3">${p.district_name}, ${p.state_name}</p>
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


populateDropdownsFromClass('state-dropdown', 'district-dropdown', 'tehsil-dropdown');
