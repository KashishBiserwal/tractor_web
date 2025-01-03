$(document).ready(function() {
    console.log("ready!");
 get_details();
});

function get_details() {
    var urlParams = new URLSearchParams(window.location.search);
    var productId = urlParams.get('id');
    var url = "http://tractor-api.divyaltech.com/api/customer/get_news_details_by_id/" + productId;

    $.ajax({
        url: url,
        type: "GET",
        success: function (data) {
            console.log(data, 'abc');

            // Set text content
            document.getElementById('news_heading').innerText = data.news_details[0].news_headline;
            document.getElementById('news_date').innerText = data.news_details[0].date;
            document.getElementById('heading_deatail').innerText = data.news_details[0].news_headline;
            document.getElementById('content').innerText = data.news_details[0].news_content;

            // Process image data
            var images = data.news_details[0].image_names;
            var imageArray = images.split(',');
            var firstImage = imageArray.length > 0 ? imageArray[0].trim() : '';

            if (firstImage) {
                var imgContainer = document.getElementById('news_img');
                
                // Create and append the image
                var imgElement = document.createElement('img');
                imgElement.src = "http://tractor-api.divyaltech.com/uploads/news_img/" + firstImage;
                imgElement.alt = "News Image";
                imgElement.className = "img-fluid rounded mx-auto d-block"; // Responsive styling

                // Adjust image size dynamically
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
    // Maximum dimensions for the image
    var maxHeight = 300; // Adjust height as needed
    var maxWidth = 500;  // Adjust width as needed

    // Get natural dimensions
    var naturalWidth = imgElement.naturalWidth;
    var naturalHeight = imgElement.naturalHeight;

    // Calculate aspect ratio
    var aspectRatio = naturalWidth / naturalHeight;

    // Adjust dimensions based on max height and width
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

    // Center the image
    imgElement.style.display = "inline-block";
}
