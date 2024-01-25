
$(document).ready(function() {
    console.log("ready!");
    getusedfarmimplement();
});

var cardsPerPage = 9; // Number of cards to show initially
var cardsDisplayed = 0; // Counter to keep track of the number of cards displayed
var allCards; // Variable to store all cards

function getusedfarmimplement() {
    var url = "http://tractor-api.divyaltech.com/api/customer/get_old_implements";
    

    $.ajax({
        url: url,
        type: "GET",
        success: function (data) {
            var productContainer = $("#productContainer");
            // Clear the existing content in the container
            productContainer.empty();

            if (data.getOldImplement && data.getOldImplement.length > 0) {
                allCards = data.getOldImplement; 
            
                allCards.sort(function(a, b) {
                    return b.customer_id - a.customer_id;
                });
            
                // Display all cards
                allCards.slice(0, cardsPerPage).forEach(function (p) {
                    appendCard(productContainer, p);
                    cardsDisplayed++;
                });
            
                if (allCards.length > cardsPerPage) {
                    $("#loadMoreBtn").show();
                } else {
                    $("#loadMoreBtn").hide();
                }
            } else {
                // Hide the "Load More" button if there are no cards
                $("#loadMoreBtn").hide();
            }
        },
        error: function (error) {
            console.error('Error fetching data:', error);
        }
    });
}

// Function to append a card to the container

function appendCard(container, p) {
    var images = p.image_names;
    var a = [];

    if (images) {
        if (images.indexOf(',') > -1) {
            a = images.split(',');
        } else {
            a = [images];
        }
    }
    const brandmodel = p.brand_name + '  ' + p.model;
    const location = p.district + '  ' + p.state;

    var newCard = `
    <div class="col-12 col-lg-4 col-md-4 col-sm-4 mt-3 ">
                        <div class="h-auto success__stry__item d-flex flex-column shadow ">
                            <div class="thumb">
                                <a href="used_farm_inner.php?id=${p.id}">
                                    <div class="ratio ratio-16x9">
                                        <img src='http://tractor-api.divyaltech.com/uploads/product_img/${a[0]}' class="object-fit-cover " alt="${p.description}">
                                    </div>
                                </a>
                            </div>
                            <div class="content d-flex flex-column flex-grow-1 ">
                                <div class="caption text-center">
                                    <a href="used_farm_inner.php?id="${p.id}" class="text-decoration-none text-dark">
                                        <p class="pt-3"><strong class="series_tractor_strong text-center h4 fw-bold ">${brandmodel}</strong></p>
                                    </a>      
                                </div>
                                <div class="power text-center mt-2">
                                    <div class="row ">
                                        <div class="col-12 col-lg-6 col-md-6 col-sm-6"><p class="text-success ps-2"><span>Price:- </span>${p.price}</p></div>
                                        <div class="col-12 col-lg-6 col-md-6 col-sm-6" style="padding-right: 32px;">
                                             <p id="adduser" type="" class="btn-success">
                                             <i class="fa-solid fa-clock"></i> ${p.hours_driven}</p>
                                        </div>
                                    </div>    
                                </div>
                            </div>
                            <div class="col-12">
                                    <button type="button" id="adduser"class="btn-state state btn-success text-decoration-none px-2 w-100">${location}</a>
                            </div>
                        </div>
                    </div>`;
    // Append the new card to the container
    container.append(newCard);
}