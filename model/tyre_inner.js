$(document).ready(function() {
    console.log("ready!");
    // $('#contact_seller').click(store);
    gettyre();
});

function gettyre() {
    console.log(window.location)
    var urlParams = new URLSearchParams(window.location.search);
    var productId = urlParams.get('product_id');
    var url = "http://tractor-api.divyaltech.com/api/customer/get_tyre_data_by_id/" + productId;
    console.log(url);
    $.ajax({
        url: url,
        type: "GET",
        success: function(data) {
        console.log(data, 'abc');
        document.getElementById('brand_name1').innerText=data.tyre_details[0].brand_name;
        document.getElementById('tyre').innerText=data.tyre_details[0].tyre_model;
        document.getElementById('brand_name').innerText=data.tyre_details[0].tyre_model;
        // console.log(data.product[0].brand_name);
       
        document.getElementById('tyre_type').innerText=data.tyre_details[0].tyre_category;
        // document.getElementById('engine_powerhp').innerText=data.product[0].hp_category;
        document.getElementById('tyre_size').innerText=data.tyre_details[0].tyre_size;
        var product = data.tyre_details[0];

        // Split the image names into an array
        var imageNames = product.image_names.split(',');

        // Select the carousel container
        var carouselContainer = $('.mySwiper2_data');
        var carouselContainer2 = $('.mySwiper_data');

        // Clear existing slides
        carouselContainer.empty();

        // Iterate through the image names and create carousel slides
        imageNames.forEach(function(imageName) {
            var imageUrl = "http://tractor-api.divyaltech.com/uploads/tyre_img/" + imageName.trim(); // Update the path
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