$(document).ready(function() {
    console.log("ready!");
 get_details();
});

function get_details() {
    var urlParams = new URLSearchParams(window.location.search);
    var productId = urlParams.get('id');
    var url = "http://tractor-api.divyaltech.com/api/customer/get_news_details_by_id/" + productId;
    console.log(url);

    $.ajax({
        url: url,
        type: "GET",
        success: function (data) {
            console.log(data, 'abc');

            document.getElementById('news_heading').innerText = data.news_details[0].news_headline;
            document.getElementById('news_date').innerText = data.news_details[0].date;
            document.getElementById('heading_deatail').innerText = data.news_details[0].news_headline;
            document.getElementById('content').innerText = data.news_details[0].news_content;

            var images = data.news_details[0].image_names;
            var imageArray = images.split(',');

            // Take the first image path
            var firstImage = imageArray.length > 0 ? imageArray[0].trim() : '';

            document.getElementById('news_img').innerHTML = '<img src="http://tractor-api.divyaltech.com/uploads/news_img/' + firstImage + '" class="w-100 " style="height:300px;"  alt="img">';
        },
        error: function (error) {
            console.error('Error fetching data:', error);
        }
    });
}








