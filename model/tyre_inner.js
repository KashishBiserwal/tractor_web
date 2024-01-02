$(document).ready(function() {
    console.log("ready!");
    // $('#contact_seller').click(store);
    gettyre();
});

function gettyre() {
    console.log(window.location)
    var urlParams = new URLSearchParams(window.location.search);
    var productId = urlParams.get('id');
    var url = "http://tractor-api.divyaltech.com/api/customer/tyre_data/" + productId;
    console.log(url);
    $.ajax({
        url: url,
        type: "GET",
        success: function(data) {
        console.log(data, 'abc');
        document.getElementById('tyre').innerText=data.tyre_details[0].tyre_model;
        // console.log(data.product[0].brand_name);
       
        document.getElementById('tyre_type').innerText=data.tyre_details[0].tyre_category;
        // document.getElementById('engine_powerhp').innerText=data.product[0].hp_category;
        document.getElementById('tyre_size').innerText=data.tyre_details[0].tyre_size;
        var product = data.tyre_details[0];

        // Split the image names into an array
        var imageNames = tyre_details.image_names.split(',');

        // Select the carousel container
        var carouselContainer = $('.swiper-wrapper_buy');

        // Clear existing slides
        carouselContainer.empty();

        // Iterate through the image names and create carousel slides
        imageNames.forEach(function(imageName) {
            var imageUrl = "http://tractor-api.divyaltech.com/uploads/product_img/" + imageName.trim(); // Update the path
            var slide = $('<div class="swiper-slide swiper-slide_buy"><img class="img_buy" src="' + imageUrl + '" /></div>');
            carouselContainer.append(slide);
        });

        // Initialize or update the Swiper carousel
        var mySwiper = new Swiper('.swiper_buy', {
            // Your Swiper configuration options
        });
        console.log(data, 'abc');


        },
        error: function (error) {
            console.error('Error fetching data:', error);
        }
    });
}