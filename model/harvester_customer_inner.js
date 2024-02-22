$(document).ready(function() {
    console.log("ready!");
   
    getharvesterById();
    getharvesterList();
 $('#enquiry').click(harvester_enquiry);
});



function getharvesterById() {
    console.log(window.location)
    var urlParams = new URLSearchParams(window.location.search);
    var Id = urlParams.get('product_id');

    var url = "http://tractor-api.divyaltech.com/api/customer/get_new_harvester_by_id/" + Id;
   


    
    // console.log(url);
    $.ajax({
        url: url,
        type: "GET",
        success: function(data) {
            // var minCuttingHeight = data.product[0].min_cutting_height;
            // var maxCuttingHeight = data.product[0].max_cutting_height;
            
            // var concatenatedHeight = minCuttingHeight + ' - ' + maxCuttingHeight;
        console.log(data, 'abc');
        document.getElementById('brand_name').innerText=data.product[0].brand_name;
        document.getElementById('brand').innerText=data.product[0].brand_name;
        document.getElementById('model_name').innerText=data.product[0].model;
        document.getElementById('hp').innerText=data.product[0].horse_power;
        document.getElementById('cutting_width').innerText=data.product[0].cutting_bar_width;
        // document.getElementById('compatible_tractor').innerText=JSON.parse(data.engine_oil_details[0].compatible_model);
        document.getElementById('cylinder').innerText=data.product[0].total_cyclinder_value;
        document.getElementById('power_source').innerText=data.product[0].power_source_value;
        document.getElementById('crop').innerText=data.product[0].crops_type_value;
        document.getElementById('engine_type').innerText=data.product[0].engine_rated_rpm;
        document.getElementById('no_of_cylinder').innerText=data.product[0].total_cyclinder_value;
        document.getElementById('cooling_system').innerText=data.product[0].cooling_value;
        document.getElementById('cutting_bar_width').innerText=data.product[0].cutting_bar_width;
        document.getElementById('height_adj').innerText=data.product[0].cutter_bar_height_adjustment_value;
        document.getElementById('cutting_bar_height_max').innerText = concatenatedHeight;
        document.getElementById('reel_type').innerText=data.product[0].reel_type_value;
        document.getElementById('speed_adj').innerText=data.product[0].speed_adjustment_value;
        document.getElementById('height_adj').innerText=data.product[0].reel_height_adjustment_value;
        document.getElementById('dia_drum').innerText=data.product[0].threshing_drum_diameter;
        document.getElementById('length_drum').innerText=data.product[0].threshing_drum_length;
        document.getElementById('speed_drum').innerText=data.product[0].threshing_drum_speed_adjustment_value;
        document.getElementById('drum_adjustment').innerText=data.product[0].threshing_drum_speed_adjustment_value;
        document.getElementById('clearance_concave').innerText=data.product[0].clearance_concave;
        document.getElementById('tyre_front').innerText=data.product[0].front_tyre;
        document.getElementById('tyre_rear').innerText=data.product[0].rear_tyre;
        document.getElementById('dia_lenght').innerText=data.product[0].dimension_length;
        document.getElementById('dia_height').innerText=data.product[0].dimension_height;
        document.getElementById('min_ground_clear').innerText=data.product[0].ground_clearance;
        document.getElementById('fuel_tank').innerText=data.product[0].fuel_tank_capacity;
        document.getElementById('grain_tank_capacity').innerText=data.product[0].total_weight_without_grains;
            var product = data.product[0];
            var imageNames = product.image_names.split(',');
            var carouselContainer = $('.mySwiper2_data');
            var carouselContainer2 = $('.mySwiper_data');

            carouselContainer.empty();

            imageNames.forEach(function(imageName) {
                var imageUrl = "http://tractor-api.divyaltech.com/uploads/product_img/" + imageName.trim(); 
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

function harvester_enquiry() {
    var firstName = $('#f_name').val();
    var lastName = $('#last_name').val();
    var mobile_number = $('#mobile_number').val();
    var state = $('#state').val();
    var district = $('#district').val();
    var Tehsil = $('#Tehsil').val();
    // Assuming you have an input field for enquiry_type_id with the ID 'enquiry_type_id'
    var enquiry_type_id = $('#enquiry_type_id').val(); 

    var paraArr = {
        'first_name': firstName,
        'last_name': lastName,
        'mobile': mobile_number,
        'state': state,
        'district': district,
        'tehsil': Tehsil,
        'enquiry_type_id': enquiry_type_id,
    };

    var url = 'http://tractor-api.divyaltech.com/api/customer/customer_enquiries';
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
        success: function(result) {
            console.log(result, "result");
            console.log("Add successfully");
            $("#used_tractor_callbnt_").modal('hide');
            var msg = "Added successfully !"
            $("#errorStatusLoading").modal('show');
            $("#errorStatusLoading").find('.modal-title').html('<p class="text-center">Congratulation..! Requested Successful</p>');

            $("#errorStatusLoading").find('.modal-body').html(msg);
            $("#errorStatusLoading").find('.modal-body').html('<img src="assets/images/successfull.gif" style="display:block; margin:0 auto;" class="w-50 text-center" alt="Successfull Request"></img>');
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


     function getharvesterList() {
      var url = "http://tractor-api.divyaltech.com/api/customer/harvester";
      console.log(url);
  
      $.ajax({
          url: url,
          type: "GET",
          success: function(data) {
              console.log(data, 'abc');
              var productContainer = $("#productContainerharvester");
              // var slider_head = $("#slider_head");
  
              if (data.product && data.product.length > 0) {
                  data.product.forEach(function (p) {
                      console.log(p,"pp");
  
                      var images = p.image_names;
                      var a = [];
  
                      if (images) {
                          if (images.indexOf(',') > -1) {
                              a = images.split(',');
                          } else {
                              a = [images];
                          }
                      }
                      // var silder_heading = ` <h1 class="d3 mb-0 text-white display-5 fw-bold">${p.brand_name}</h1>`;
                      var newCard = `
                      <div class="col-12 col-lg-4 col-md-4 col-sm-4 mb-4">
                      <a href="harvester_inner.php?product_id=${p.id}" class="h-auto success__stry__item d-flex flex-column text-decoration-none shadow">
                          <div class="thumb">
                              <div>
                                  <img src="http://tractor-api.divyaltech.com/uploads/product_img/${a[0]}" class="object-fit-cover w-100" alt="harvester_img">
                              </div>
                          </div>
                          <div class="position-absolute" >
                              <p  style="font-size:13px;" class="rounded-pill bg-success text-white ms-1 text-center px-2 mt-1">Self Propelled</p>
                          </div>
                          <div class="content d-flex flex-column flex-grow-1 ">
                              
                              <div class="power text-center mt-3">
                              <div class="row text-center">
                                  <div class="col-12 text-center">
                                      <p class="fw-bold pe-3 text-primary">${p.id}</p>
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
  
                      // Append the new card to the container
                      productContainer.append(newCard);
                      // slider_head.append(silder_heading);
                  });
  
                  // Initialize Owl Carousel after adding cards
                  productContainer.owlCarousel({
                      items:3,
                      loop: true,
                      margin: 10,
                      responsiveClass: true,
                      responsive: {
                          0: {
                              items: 1,
                              nav: true
                          },
                          600: {
                              items: 3,
                              nav: false
                          },
                          1000: {
                              items: 3,
                              nav: true,
                              loop: false
                          }
                      }
                  });
              }
          },
          error: function (error) {
              console.error('Error fetching data:', error);
          }
      });
  }



