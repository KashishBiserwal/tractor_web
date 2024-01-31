$(document).ready(function() {
    console.log("ready!");
$('#button_nursery').on('click', function() {
    nursery_enquiry();
  });
   // getnurseryById();
   getnurseryList();

    // $('#engine_oil_form').submit(engineoil_enquiry);

    // $("#engine_oil_form").validate({
    //     rules: {
    //         brandName: {
    //             required: true
    //         },
    //         modeName: {
    //             required: true
    //         },
    //         firstName: {
    //             required: true
    //         },
    //         lastName: {
    //             required: true
    //         },
    //         mobile_number: {
    //             required: true,
    //             digits: true,
    //             minlength: 10
    //         },
    //         state: {
    //             required: true,
    //             notEqual: "Select State"
    //         },
    //         district: {
    //             required: true,
    //             notEqual: "Select District"
    //         },
    //         Tehsil: {
    //             required: true
    //         }
    //     },
    //     messages: {
    //         state: {
    //             notEqual: "Please select a state."
    //         },
    //         district: {
    //             notEqual: "Please select a district."
    //         }
    //     },
    //     submitHandler: function (form) {
    //         engineoil_enquiry();
    //     }
    // });

});
// function getnurseryById() {
//     console.log(window.location)
//     var urlParams = new URLSearchParams(window.location.search);
//     var Id = urlParams.get('id');
//     var url = "http://tractor-api.divyaltech.com/api/customer/nursery_data/" + Id;
//     // console.log(url);
//     $.ajax({
//         url: url,
//         type: "GET",
//         success: function(data) {
//         console.log(data, 'abc');
//         document.getElementById('brand_name').innerText=data.engine_oil_details[0].brand_name ;
//         document.getElementById('model_name').innerText=data.engine_oil_details[0].oil_model;
//         document.getElementById('grade').innerText=data.engine_oil_details[0].grade;
//         document.getElementById('quantity').innerText=data.engine_oil_details[0].quantity;
//         document.getElementById('price').innerText=data.engine_oil_details[0].price;
//         document.getElementById('compatible_tractor').innerText=JSON.parse(data.engine_oil_details[0].compatible_model);
//         document.getElementById('description').innerText=data.engine_oil_details[0].description;
     
//             var product = data.engine_oil_details[0];

//             var imageNames = product.image_names.split(',');

//             var carouselContainer = $('.swiper-wrapper_buy');

//             carouselContainer.empty();

//             imageNames.forEach(function(imageName) {
//                 var imageUrl = "http://tractor-api.divyaltech.com/uploads/engine_oil_img/" + imageName.trim(); // Update the path
//                 var slide = $('<div class="swiper-slide swiper-slide_buy"><img class="img_buy" src="' + imageUrl + '" /></div>');
//                 carouselContainer.append(slide);
//             });

//             var mySwiper = new Swiper('.swiper_buy', {
//             });
//             console.log(data, 'abc');
//         },
//         error: function (error) {
//             console.error('Error fetching data:', error);
//         }
//     });
// }

function getEngineoilById() {
    console.log(window.location)
    var urlParams = new URLSearchParams(window.location.search);
    var Id = urlParams.get('customer_id');
    var url = "http://tractor-api.divyaltech.com/api/customer/get_nursery_enquiry_data_by_id/" + Id;
    // console.log(url);
    $.ajax({
        url: url,
        type: "GET",
        success: function(data) {
        console.log(data, 'abc');
        document.getElementById('brand_name').innerText=data.engine_oil_details[0].brand_name ;
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
                var imageUrl = "http://tractor-api.divyaltech.com/uploads/nursery_img/" + imageName.trim(); 
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
                        <p class="fw-bold pe-3">${p.district}, ${p.state}</p>
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

function nursery_enquiry() {
 /*    var brandName = $('#brand_name').val();*/
 console.log(window.location)
     var urlParams = new URLSearchParams(window.location.search);
    var Id = urlParams.get('id');
    var productval = $('#product_id').val(); 
     if(productval == '' && productval == undefined){
        var product_id = Id; 
     }else{
        var product_id = productval; 
     }
   
    var firstName = $('#fname').val();
    var lastName = $('#lname').val();
    var mobile_number = $('#phone').val();
    var state = $('#state').val();
    var district = $('#district').val();
    var Tehsil = $('#tehsil').val();
    var enquiry_type_id =$('#enquiry_type_id').val();
    var paraArr = {
     /*  'brand_name': brandName,*/
      'product_id': product_id, 
      'first_name': firstName,
      'last_name': lastName,
      'mobile': mobile_number,
      'state': state,
      'district': district,
      'tehsil': Tehsil,
      'enquiry_type_id':enquiry_type_id,
    };
    // console.log(paraArr);
  
//   var apiBaseURL =APIBaseURL;
//   var url = apiBaseURL + 'customer_enquiries';
var url ='http://tractor-api.divyaltech.com/api/customer/customer_enquiries';
    console.log(url);
  
    var token = localStorage.getItem('token');
    var headers = {
      'Authorization': 'Bearer ' + token
    };
    $.ajax({
      url: url,
      type: "POST",
      data: paraArr,
      headers: headers,
      success: function (result) {
        console.log(result, "result");
    console.log("Add successfully");
    $("#used_tractor_callbnt_").modal('hide'); 
    var msg = "Added successfully !"
    $("#errorStatusLoading").modal('show');    
    $("#errorStatusLoading").find('.modal-title').html('<p class="text-center">Congratulation..! Requested Successful</p>');
 
    $("#errorStatusLoading").find('.modal-body').html(msg);
    $("#errorStatusLoading").find('.modal-body').html('<img src="assets/images/successfull.gif" style="display:block; margin:0 auto;" class="w-50 text-center" alt="Successfull Request"></img>');
    // $("#errorStatusLoading").find('.modal-body').html('sdfghj');
  
  
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