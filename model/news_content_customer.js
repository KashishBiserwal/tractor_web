$(document).ready(function() {
 get_details();
});

function get_details() {
    var urlParams = new URLSearchParams(window.location.search);
    var productId = urlParams.get('id');
    var url = "https://shopninja.in/bharatagri/api/public/api/customer/get_news_details_by_id/" + productId;
    $.ajax({
        url: url,
        type: "GET",
        success: function (data) {
            document.getElementById('news_heading').innerText = data.news_details[0].news_headline;
            document.getElementById('news_date').innerText = data.news_details[0].date;
            document.getElementById('heading_deatail').innerText = data.news_details[0].news_headline;
            document.getElementById('content').innerText = data.news_details[0].news_content;

            var images = data.news_details[0].image_names;
            var imageArray = images.split(',');
            var firstImage = imageArray.length > 0 ? imageArray[0].trim() : '';

            if (firstImage) {
                var imgContainer = document.getElementById('news_img');
                var imgElement = document.createElement('img');
                imgElement.src = "https://shopninja.in/bharatagri/api/public/uploads/news_img/" + firstImage;
                imgElement.alt = "News Image";
                imgElement.className = "img-fluid rounded mx-auto d-block"; 
                imgElement.onload = function () {
                    adjustImageSize(imgElement);
                };

                imgContainer.appendChild(imgElement);
            } else {
                console.error("No image found in the response.");
            }
        },
        error: function (error) {
            console.error('Error fetching data:', error);
        }
    });
}

function adjustImageSize(imgElement) {
    var maxHeight = 300; 
    var maxWidth = 500;  
    var naturalWidth = imgElement.naturalWidth;
    var naturalHeight = imgElement.naturalHeight;
    var aspectRatio = naturalWidth / naturalHeight;
    if (naturalHeight > maxHeight) {
        imgElement.style.height = maxHeight + "px";
        imgElement.style.width = maxHeight * aspectRatio + "px";
    } else if (naturalWidth > maxWidth) {
        imgElement.style.width = maxWidth + "px";
        imgElement.style.height = maxWidth / aspectRatio + "px";
    } else {
        imgElement.style.height = naturalHeight + "px";
        imgElement.style.width = naturalWidth + "px";
    }
    imgElement.style.display = "inline-block";
}
