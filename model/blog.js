$(document).ready(function() {
    var allCards = []; // Array to store all cards
    
    blog_details_list(allCards);
    $('#filter_tractor').click(filter_search);
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
                var reversedCards = data.blog_details.slice().reverse();
                
                allCards = allCards.concat(reversedCards);
                
                displayEngineoil(productContainer, reversedCards.slice(0, 9).reverse());

                loadMoreButton.show();

                loadMoreButton.click(function() {
                    displayEngineoil(productContainer, allCards.reverse());
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
                        <a href="blog_customer_inner.php?id=${p.id}">
                        <button type="button" class="btn btn-warning mt-3">${p.blog_category} </button>
                        </a>
                        <div class="row mt-2">
                            <p class="fw-bold">${p.heading}</p>
                        </div>
                        <div class="row">
                            <p class="fw-bold"><span>publisher: </span>${p.publisher}</p>
                        </div>
                        <div class="row">
                            <p class="fw-bold"><span>Date/time: </span>${p.date}</p>
                        </div>
                    </div>
                </div>
            </div>`;
        
        // Use prepend to add the new card at the beginning
        container.prepend(newCard);
    });
}

function get_category() {
    var url = 'http://tractor-api.divyaltech.com/api/customer/get_news_category';

    $.ajax({
        url: url,
        type: "GET",
        headers: {
            'Authorization': 'Bearer ' + localStorage.getItem('token')
        },
        success: function (data) {
            console.log(data);

            const checkboxContainer = $('#checkboxContainer');
            checkboxContainer.empty(); // Clear existing checkboxes

            // Loop through the data and add checkboxes
            $.each(data.news_category, function (index, category) {
                var category_id = category.id;
                var category_name = category.category_name;
                var checkboxHtml = '<input type="checkbox" class="checkbox-round mt-1 ms-3 category_checkbox" value="' + category_id + '"/>' +
                    '<span class="ps-2 fs-6">' + category_name + '</span> <br/>';

                checkboxContainer.append(checkboxHtml);
            });
        },
        error: function (error) {
            console.error('Error fetching data:', error);
        }
    });
}
get_category();


function filter_search() {
    var checkboxes = $(".category_checkbox:checked");
    var selectedCheckboxValues = checkboxes.map(function () {
        return $(this).val();
    }).get();

    var paraArr = {
        'blog_category_id': JSON.stringify(selectedCheckboxValues),
    };

    var url = 'http://tractor-api.divyaltech.com/api/customer/filter_for_blog_details';
    $.ajax({
        url: url,
        type: 'POST',
        data: paraArr,
        headers: {
            'Authorization': 'Bearer ' + localStorage.getItem('token')
        },
        success: function (searchData) {
            var filterContainer = $("#productContainer");
            filterContainer.empty();
        
            if (searchData.blog_details.length > 0) {
                // Display the filtered cards if there are search results
                displayFilteredCards(filterContainer, searchData.blog_details);
                $("#noDataMessage").hide(); // Hide the message if data is found
                $("#load_moretract").show();
            } else {
                // Show the "Data not found" message if there are no search results
                $("#noDataMessage").show();
                $("#load_moretract").hide();
            }
        },
        error: function (jqXHR, textStatus, errorThrown) {
            console.error('Error searching for blog details:', errorThrown);
            // Check if the error status is 404 (Not Found)
            if (jqXHR.status === 404) {
                // Hide all cards and show the "Data not found" message
                $("#productContainer").empty();
                $("#noDataMessage").show();
                $("#load_moretract").hide();
            }
        }
    });
}


function displayFilteredCards(container, filteredCards) {
    container.empty(); // Clear existing cards before displaying new ones

    filteredCards.forEach(function (card) {
        var images = card.image_names;
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
                        <a href="blog_customer_inner.php?id=${card.id}">
                            <img src="http://tractor-api.divyaltech.com/uploads/blog_img/${a[0]}" class="engineoil_img  w-100" alt="img">
                        </a>
                    </div>
                    <div class="content mb-3 ms-3">
                        <button type="button" class="btn btn-warning mt-3">${card.blog_category} </button>
                        <div class="row mt-2">
                            <p class="fw-bold">${card.heading}</p>
                        </div>
                        <div class="row">
                            <p class="fw-bold"><span>publisher: </span>${card.publisher}</p>
                        </div>
                        <a href="blog_customer_inner.php?id=${card.id}" class="text-decoration-none pb-1">
                            <span class=""> Date/time-${card.date} </span>
                        </a>
                    </div>
                </div>
            </div>`;
        
        // Use append to add the new card at the end
        container.append(newCard);
    });
}

function displayNextSet(container) {
    container.empty(); 
        if (filteredCards.length === 0) {
        displayEngineoil(container, allCards);
        cardsDisplayed = allCards.length;
    } else {
        filteredCards.slice(cardsDisplayed, cardsDisplayed + cardsPerPage).forEach(function (card) {
            appendFilterCard(container, card);
            cardsDisplayed++;
        });
    }
    if (cardsDisplayed >= filteredCards.length) {
        $("#load_moretract").hide();
    }
}

function resetform(){
    $('.category_checkbox').val('');
   $('.category_checkbox:checked').prop('checked', false);
    
    $("#noDataMessage").hide();
    window.location.reload();
    
  }