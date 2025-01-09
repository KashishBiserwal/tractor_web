$(document).ready(function() {
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

            document.getElementById('blog_heading').innerText = data.blog_details[0].blog_category;
            document.getElementById('blog_date').innerText = data.blog_details[0].date;
            document.getElementById('publisher_name').innerText = data.blog_details[0].publisher;
            document.getElementById('heading_deatail').innerText = data.blog_details[0].heading;
            document.getElementById('content').innerText = data.blog_details[0].content;

            var images = data.blog_details[0].image_names;
            var imageArray = images.split(',');
            var firstImage = imageArray.length > 0 ? imageArray[0].trim() : '';

            var imgContainer = document.getElementById('blog_img');
            
            // Create image element
            var imgElement = document.createElement('img');
            imgElement.src = "http://tractor-api.divyaltech.com/uploads/blog_img/" + firstImage;
            imgElement.alt = "Image";
            imgElement.classList.add('img-fluid'); // Make image responsive

            // Append image element to the container
            imgContainer.appendChild(imgElement);
        },
        error: function (error) {
            console.error('Error fetching data:', error);
        }
    });
}
