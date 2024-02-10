$(document).ready(function() {
    var allCards = []; // Array to store all cards
    
    blog_details_list(allCards);
});

function blog_details_list(allCards) {
    var url = 'http://tractor-api.divyaltech.com/api/customer/blog_details';

    $.ajax({
        url: url,
        type: "GET",
        success: function(data) {
            var productContainer = $("#productContainer");
            var loadMoreButton = $("#load_moretract");

            if (data.blog_details && data.blog_details.length > 0) {
                // Reverse the order of the cards to display the latest ones first
                var reversedCards = data.blog_details.slice().reverse();
                
                // Update the list of all cards
                allCards = allCards.concat(reversedCards);
                
                // Display the latest 9 cards at the top in the opposite order
                displayEngineoil(productContainer, reversedCards.slice(0, 9).reverse());

                // Show the "View All" button
                loadMoreButton.show();

                // Handle "View All" button click
                loadMoreButton.click(function() {
                    // Display all cards in the opposite order
                    displayEngineoil(productContainer, allCards.reverse());
                    // Hide the "View All" button
                    loadMoreButton.hide();
                });
            }
        },
        error: function(error) {
            console.error('Error fetching data:', error);
        }
    });
}

function displayEngineoil(container, engineoil) {
    // Clear existing content
    container.html('');

    engineoil.forEach(function (p) {
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
            </div>`;
        
        // Use prepend to add the new card at the beginning
        container.prepend(newCard);
    });
}
