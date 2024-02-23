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

            document.getElementById('news_heading').innerText = data.news_details[0].news_headline;
            document.getElementById('news_date').innerText = data.news_details[0].date;
            document.getElementById('heading_deatail').innerText = data.news_details[0].news_headline;
            document.getElementById('content').innerText = data.news_details[0].news_content;

            var images = data.news_details[0].image_names;
            var imageArray = images.split(',');
            var firstImage = imageArray.length > 0 ? imageArray[0].trim() : '';

            var imgContainer = document.getElementById('news_img');
            
            // Create image element
            var imgElement = document.createElement('img');
            imgElement.src = "http://tractor-api.divyaltech.com/uploads/news_img/" + firstImage;
            imgElement.alt = "Image";

            // Add event listener to adjust image size once it's loaded
            imgElement.addEventListener('load', function() {
                adjustImageSize(imgElement);
            });

            // Append image element to the container
            imgContainer.appendChild(imgElement);
        },
        error: function (error) {
            console.error('Error fetching data:', error);
        }
    });
}

function adjustImageSize(imgElement) {
    // Define maximum height for the image
    var maxHeight = 300; // Adjust this value as needed
    
    // Calculate aspect ratio
    var aspectRatio = imgElement.naturalWidth / imgElement.naturalHeight;

    // Calculate width based on the maximum height
    var newWidth = maxHeight * aspectRatio;

    // Set the new width and height to the image
    imgElement.style.width = newWidth + 'px';
    imgElement.style.height = maxHeight + 'px';
    imgElement.style.display = 'inline-block'; // Set display to inline-block to center the image horizontally
}
