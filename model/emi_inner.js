$(document).ready(function() {
    console.log("ready!");

    getProductById();

})


function getProductById() {
    console.log(window.location)
var url = "http://tractor-api.divyaltech.com/api/customer/get_price_by_brand_model"
    console.log(url);
    $.ajax({
        url: url,
        type: "GET",
        success: function(data) {
    
        console.log(data, 'abc');
        
        document.getElementById('get_brand').value=data.price[0].brand_name;
        document.getElementById('get_model').value=data.price[0].model;

        document.getElementById('description').innerText=data.price[0].description;
        document.getElementById('brand_main').innerText=data.price[0].brand_name;
        document.getElementById('exShowroomPrice').innerText=data.price[0].starting_price;

        var product = data.price[0];

            var imageNames = product.image_names.split(',');

            var carouselContainer = $('.swiper-wrapper_buy');

            carouselContainer.empty();

            imageNames.forEach(function(imageName) {
                var imageUrl = "http://tractor-api.divyaltech.com/uploads/product_img/" + imageName.trim(); // Update the path
                var slide = $('<div class="swiper-slide swiper-slide_buy"><img class="img_buy" src="' + imageUrl + '" /></div>');
                carouselContainer.append(slide);
            });

            var mySwiper = new Swiper('.swiper_buy', {});
            console.log(data, 'abc');
        },
        error: function (error) {
            console.error('Error fetching data:', error);
        }
    });
}