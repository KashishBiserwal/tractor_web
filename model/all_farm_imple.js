$(document).ready(function() {
    var allCards = []; // Array to store all cards
    
    all_implement(allCards);
    // $('#filter_tractor').click(filter_search);
});

function all_implement(allCards) {
    var url = 'http://tractor-api.divyaltech.com/api/customer/get_implement_category';

    $.ajax({
        url: url,
        type: "GET",
        success: function(data) {
            var productContainer = $("#productContainer");
            var loadMoreButton = $("#load_moretract");

            if (data.allCategory && data.allCategory.length > 0) {
                // Reverse the order of the cards to display the latest ones first
                var reversedCards = data.allCategory.slice().reverse();
                
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
                    <div class="content d-flex flex-column flex-grow-1 ">
                        <div class="caption text-center">
                            <a href="#" class="text-decoration-none text-dark">
                                <p class="pt-3"><strong class="series_tractor_strong text-center h4 fw-bold ">${p.category_name}</strong></p>
                            </a>      
                        </div>
                        <div class="row text-center">
                            <div class="col-6">
                                <p class="fw-bold ps-2 text-dark">${p.category_name}</p>
                            </div>
                            <div class="col-6">
                                <p class="fw-bold pe-2 text-dark">Tillage</p>
                            </div>
                        </div>
                        <div class=" bg-success">
                            <p class="text-white text-center pt-2">Power : 35 & Above</p>
                        </div>
                    </div>
                </div>
            </div>`;
        
        // Use prepend to add the new card at the beginning
        container.prepend(newCard);
    });
}
