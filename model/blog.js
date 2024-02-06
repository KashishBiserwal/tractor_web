$(document).ready(function() {
    blog_details_list();
});

function blog_details_list() {
    // var CustomerAPIBaseURL =CustomerAPIBaseURL;
    // url = CustomerAPIBaseURL + 'news_category';
    url = 'http://tractor-api.divyaltech.com/api/customer/blog_details';

    var totalEngineoil = 0;
    var displayedEngineoil = 8; // Initially display 6 tractors

    $.ajax({
        url: url,
        type: "GET",
        success: function(data) {
            var productContainer = $("#productContainer");
            var loadMoreButton = $("#load_moretract");

            if (data.blog_details && data.blog_details.length > 0) {
                totalEngineoil = data.blog_details.length;

                // Display the initial set of 6 tractors
                displayEngineoil(data.blog_details.slice(0, displayedEngineoil));

                if (totalEngineoil <= displayedEngineoil) {
                    loadMoreButton.hide();
                } else {
                    loadMoreButton.show();
                }

                // Handle "Load More Tractors" button click
                loadMoreButton.click(function() {
                    // Display all tractors
                    displayedEngineoil = totalEngineoil;
                    displayEngineoil(data.blog_details);

                    // Hide the "Load More Tractors" button
                    loadMoreButton.hide();
                });
            }
        },
        error: function(error) {
            console.error('Error fetching data:', error);
        }
    });
}


function displayEngineoil(engineoil) {
    var productContainer = $("#productContainer");
    var tableData = $("#tableData");
    // Clear existing content
    productContainer.html('');
    tableData.html('');

    engineoil.forEach(function (p) {
        console.log(p, "ppp");
        var images = p.image_names;
        var a = [];

        if (images) {
            if (images.indexOf(',') > -1) {
                a = images.split(',');
            } else {
                a = [images];
            }
        }

        var newCard = `
                <div class="col-12 col-lg-4 col-sm-4 col-md-4 mt-2 mb-2">
                    <div class="success__stry__item shadow h-100">
                        <div class="thumb">
                            <a href="blog_customer_inner.php?id=${p.id}">
                            <img src="http://tractor-api.divyaltech.com/uploads/blog_img/${a[0]}" class="engineoil_img  w-100" alt="img">
                            </a>
                        </div>
                        <div class="content mb-3 ms-3">
                            <button type="button" class="btn btn-warning mt-3">${p.blog_category} </button>
                            <div class="row mt-2">
                                <p class="fw-bold">${p.heading}</p>
                            </div>
                            <div class="row">
                                <p class="fw-bold"><span>publisher: </span>${p.publisher}</p>
                            </div>
                            <a href="blog_customer_inner.php?id=${p.id}" class="text-decoration-none pb-1">
                                <span class=""> Date/time-${p.date} </span>
                            </a>
                        </div>
                    </div>
                </div> 
            `;

        // Use prepend to add the new card at the beginning
        productContainer.prepend(newCard);
    });
}
