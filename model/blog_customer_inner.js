$(document).ready(function() {
    console.log("ready!");
 get_details();
});

function get_details() {
    var urlParams = new URLSearchParams(window.location.search);
    var productId = urlParams.get('id');
    var url = "http://tractor-api.divyaltech.com/api/customer/blog_details/" + productId;
    console.log(url);
    console.log(productId);
    $.ajax({
        url: url,
        type: "GET",
        success: function (data) {
            console.log(data, 'abc');

            document.getElementById('blog_heading').innerText = data.news_details[0].news_headline;
            document.getElementById('blog_date').innerText = data.news_details[0].date;
            document.getElementById('heading_deatail').innerText = data.news_details[0].news_headline;
            document.getElementById('content').innerText = data.news_details[0].news_content;

            var images = data.news_details[0].image_names;
            var imageArray = images.split(',');

            // Take the first image path
            var firstImage = imageArray.length > 0 ? imageArray[0].trim() : '';

            document.getElementById('blog_img').innerHTML = '<img src="http://tractor-api.divyaltech.com/uploads/blog_img/' + firstImage + '" class="w-100 " style="height:300px;"  alt="img">';
        },
        error: function (error) {
            console.error('Error fetching data:', error);
        }
    });
}