$(document).ready(function() {
    console.log("ready!");
    $('#delership_enq_btn').click(store);
    getdealerId();
    
});
function store(event) {
    event.preventDefault();
    console.log('jfhfhw');
    var enquiry_type_id = 14;
    var first_name = $('#f_name').val();
    var last_name = $('#l_name').val();
    var mobile = $('#mob_num').val();
    var state = $('#_state').val();
    var district = $('#_district').val();
    var tehsil = $('#_tehsil').val();
    var brand = $('#_brand').val();
  
    // Prepare data to send to the server
    var paraArr = {
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
var url = "http://tractor-api.divyaltech.com/api/customer/customer_enquiries";
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