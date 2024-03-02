var allDealers = []; // Array to hold all dealers

$(document).ready(function() {
    get_certifieddealers();
});

function get_certifieddealers() {
    var url = CustomerAPIBaseURL + 'dealer_data';

    $.ajax({
        url: url,
        type: "GET",
        success: function(data) {
            if (data.dealer_details && data.dealer_details.length > 0) {
                // Reverse the order of the cards to display the latest ones first
                var reversedDealers = data.dealer_details.slice().reverse();
                
                // Update the list of all dealers
                allDealers = allDealers.concat(reversedDealers);
                
                // Display the latest 8 dealers at the top in the opposite order
                displaydealer(reversedDealers.slice(0, 8).reverse());

                // Show the "Load More" button if there are remaining dealers
                if (data.dealer_details.length > 8) {
                    $("#load_moretract").show();
                }

                // Handle "Load More" button click
                $("#load_moretract").click(function() {
                    // Display all dealers in the opposite order
                    displaydealer(allDealers.reverse());
                    // Hide the "Load More" button
                    $("#load_moretract").hide();
                });
            }
        },
        error: function(error) {
            console.error('Error fetching data:', error);
        }
    });
}

function displaydealer(dealers) {
    var productContainer = $("#productContainer");

    // Clear existing content
    productContainer.html('');

    dealers.forEach(function (dealer) {
        var images = dealer.image_names ? dealer.image_names.split(',')[0] : '';

        var newCard = `
            <div class="col-12 col-sm-3 col-md-3 col-lg-3 px-2 py-3 h-100">
                <div class="h-auto success__stry__item d-flex flex-column shadow">
                    <div class="thumb">
                        <a href="certified_dealers_inner.php?id=${dealer.id}">
                            <div class="ratio ratio-16x9">
                                <img src="http://tractor-api.divyaltech.com/uploads/dealer_img/${images}" class="object-fit-cover" alt="img">
                            </div>
                        </a>
                    </div>
                    <div class="position-absolute">
                        <p class="rounded-pill bg-warning text-center px-2 mt-1">Certified</p>
                    </div>
                    <div>
                        <a href="certified_dealers_inner.php?id=${dealer.id}" class="text-decoration-none text-dark">
                            <h6 class="fw-bold text-center mt-3">${dealer.dealer_name}</h6>
                        </a>
                        <div class="col-12 col-lg-12 col-md-12 col-sm-12">
                            <p class="text-center text-dark fw-bold">${dealer.brand_name} <span>Dealer</span></p>
                        </div>
                        <div class="justify-content-center d-flex">
                            <button type="button" class="btn btn-success w-100">Rangareddy, Telangana</button>
                        </div>
                    </div>
                </div>
            </div>
        `;

        // Use prepend to add the new card at the beginning
        productContainer.prepend(newCard);
    });
}
