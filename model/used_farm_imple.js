$(document).ready(function() {
    var cardsPerPage = 6;
    var cardsDisplayed = 0;
    var allCards = [];

    // Function to fetch and display initial cards
    function getUsedFarmImplements() {
        var url = "http://tractor-api.divyaltech.com/api/customer/get_old_implements";

        $.ajax({
            url: url,
            type: "GET",
            success: function (data) {
                allCards = data.getOldImplement || [];
                displayCards();
            },
            error: function (error) {
                console.error('Error fetching data:', error);
            }
        });
    }

    // Function to display cards
    function displayCards() {
        var productContainer = $("#productContainer");

        // Display cards up to the current page limit
        for (var i = cardsDisplayed; i < Math.min(cardsDisplayed + cardsPerPage, allCards.length); i++) {
            appendCard(productContainer, allCards[i]);
        }
        
        // Update cards displayed count
        cardsDisplayed = Math.min(cardsDisplayed + cardsPerPage, allCards.length);

        // Hide or show the "Load More" button based on remaining cards
        if (cardsDisplayed < allCards.length) {
            $("#loadMoreBtn").show();
        } else {
            $("#loadMoreBtn").hide();
        }
    }

    // Function to append a card to the container
    function appendCard(container, cardData) {
        var images = cardData.image_names ? cardData.image_names.split(',') : [];
        var brandmodel = cardData.brand_name + ' ' + cardData.model;
        var location = cardData.district_name + ' ' + cardData.state_name;


        var cardHtml = `
            <div class="col-12 col-lg-4 col-md-4 col-sm-4 mt-3">
                <div class="h-auto success__stry__item d-flex flex-column shadow">
                    <div class="thumb">
                        <a href="used_farm_inner.php?id=${cardData.id}">
                            <div class="ratio ratio-16x9">
                                <img src='http://tractor-api.divyaltech.com/uploads/product_img/${images[0]}' class="object-fit-cover" alt="${cardData.description}">
                            </div>
                        </a>
                    </div>
                    <div class="content d-flex flex-column flex-grow-1">
                        <div class="caption text-center">
                            <a href="used_farm_inner.php?id=${cardData.id}" class="text-decoration-none text-dark">
                                <p class="pt-3"><strong class="series_tractor_strong text-center h6 text-truncate fw-bold">${brandmodel}</strong></p>
                            </a>      
                        </div>
                        <div class="power text-center mt-2">
                            <div class="row">
                                <div class="col-12 col-lg-6 col-md-6 col-sm-6"><p class="text-success ps-2 text-truncate"><span>Price:- </span>${cardData.price}</p></div>
                                <div class="col-12 col-lg-6 col-md-6 col-sm-6" style="padding-right: 32px;">
                                    <p id="adduser" type="" class="">
                                        <i class="fa-solid fa-clock"></i> ${cardData.hours_driven}
                                    </p>
                                </div>
                            </div>    
                        </div>
                    </div>
                    <div class="col-12">
                        <button type="button" id="adduser"class="btn-state state btn-success text-decoration-none text-truncate px-2 w-100">${location}</a>
                    </div>
                </div>
            </div>`;
            container.append(cardHtml);
        }
    
        // Load initial cards on page load
        getUsedFarmImplements();
    
        // Event listener for the "Load More" button
        $("#loadMoreBtn").on("click", function() {
            displayCards(); // Append more cards
        });
    });