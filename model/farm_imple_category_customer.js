
$(document).ready(function() {
    getList();
});

// Define global variables
var allCards = []; // Assuming this is a global variable to store all the cards
var cardsPerPage = 9; // Assuming the number of cards to display per page
var cardsDisplayed = 0; // Assuming a counter to keep track of displayed cards

// Function to fetch and display the list
function getList() {
    var url = "http://tractor-api.divyaltech.com/api/customer/implement_sub_category";

    $.ajax({
        url: url,
        type: "GET",
        success: function (data) {
            if (data.allSubCategory && data.allSubCategory.length > 0) {
                allCards = data.allSubCategory;

                // Sort cards based on sub_category_id
                allCards.sort(function(a, b) {
                    return b.sub_category_id - a.sub_category_id;
                });
                displayCards();
            } else {
                // Hide the "Load More" button if there are no cards
                $("#load_moretract").hide();
            }
        },
        error: function (error) {
            console.error('Error fetching data:', error);
        }
    });
}

// Function to display a set of cards
function displayCards() {
    var productContainer = $("#imple_card");
    productContainer.empty();

    // Display cards up to the specified limit
    allCards.slice(0, cardsPerPage).forEach(function (p) {
        displayTractorCard(productContainer, p);
        cardsDisplayed++;
    });

    // Show/hide "Load More" button based on remaining cards
    if (cardsDisplayed < allCards.length) {
        $("#load_moretract").show();
    } else {
        $("#load_moretract").hide();
    }
}

// Function to display a single tractor card
function displayTractorCard(productContainer, p) {
    document.getElementById('heading_imple').innerText=p.category_name;
    document.getElementById('title_heading').innerText=p.category_name ;
    var images = p.thumbnail ? p.thumbnail : ""; // Handle null case for thumbnail

    var newCard = `
        <div class="col-12 col-lg-4 col-sm-4 col-md-4 mt-2 mb-2">
            <div class="success__stry__item shadow h-100">
                <div class="thumb">
                    <a href="farm_subcate_inner.php?id=${p.sub_category_id}">
                        <img src="http://tractor-api.divyaltech.com/uploads/product_img/${images}" class="engineoil_img w-100" style="height:204px; padding:10px 13px;" alt="img">
                    </a>
                </div>
                <div class="text-center py-2">
                    <h5 mt-3">${p.category_name}</h5>
                    <p class="fw-bold">${p.sub_category_name}</p>
                </div>
            </div>
        </div>
    `;

    // Append the new card to the container
    productContainer.append(newCard);
}

// Event handler for "Load More" button click
$(document).on('click', '#load_moretract', function(){
    var productContainer = $("#imple_card");

    // Display the next set of cards
    allCards.slice(cardsDisplayed, cardsDisplayed + cardsPerPage).forEach(function (p) {
        displayTractorCard(productContainer, p);
        cardsDisplayed++;
    });

    // Hide the "Load More" button if all cards are displayed
    if (cardsDisplayed >= allCards.length) {
        $("#load_moretract").hide();
    }
});

// Call the getList function to initiate the process
getList();





   