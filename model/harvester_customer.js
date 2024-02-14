$(document).ready(function() {
    console.log("ready!");
    
    $('#filter_tractor').click(filter_search);
});

var cardsPerPage = 6; // Set the initial number of cards per page
var allCards = []; // Assuming this is a global variable to store all the cards
var cardsDisplayed = 0; // Track the number of cards displayed

function get_harvester() {
    var url = "http://tractor-api.divyaltech.com/api/customer/get_new_harvester";

    $.ajax({
        url: url,
        type: "GET",
        success: function (data) {
            var productContainer = $("#productContainer");
            // Clear the existing content in the container
            productContainer.empty();

            if (data.product && data.product.length > 0) {
                allCards = data.product;

                allCards.sort(function (a, b) {
                    return b.customer_id - a.customer_id;
                });

                // Display the initial set of cards (first 6)
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
    function appendCard(container, p) {
        var images = p.image_names;
        var a = [];
        const name = p.brand_name +" "+p.model;

        if (images) {
            if (images.indexOf(',') > -1) {
                a = images.split(',');
            } else {
                a = [images];
            }
        }
        var newCard = `
        <div class="col-12 col-lg-4 col-md-4 col-sm-4 mb-4">
            <a href="harvester_inner.php?product_id=${p.id}" class="h-auto success__stry__item d-flex flex-column text-decoration-none shadow">
                <div class="thumb">
                    <div>
                        <img src="http://tractor-api.divyaltech.com/uploads/product_img/${a[0]}" class="object-fit-cover w-100" alt="harvester_img">
                    </div>
                </div>
                <div class="position-absolute" >
                    <p  style="font-size:13px;" class="rounded-pill bg-success text-white ms-1 text-center px-2 mt-1">Self Propelled</p>
                </div>
                <div class="content d-flex flex-column flex-grow-1 ">
                    
                    <div class="power text-center mt-3">
                    <div class="row text-center">
                        <div class="col-12 text-center">
                            <p class="fw-bold pe-3 text-primary">${name}</p>
                        </div>
                    </div>
                        <div class="row ">
                            <div class="col-12 "><p class="text-dark ps-2">Cutting Width : ${p.cutting_bar_width} Feet</p></div>
                            
                        </div>    
                    </div>
                </div>
                <div class="col-12 btn-success">
                    <button type="button" class="btn btn-success py-2 w-100"></i> 
                    Power : ${p.horse_power} HP
                    </button>
                </div>
            </a>
        </div>
        `;
        container.append(newCard);
    }
    $(document).on('click', '#loadMoreBtn', function () {
        var productContainer = $("#productContainer");
    
        allCards.slice(cardsDisplayed, cardsDisplayed + cardsPerPage).forEach(function (p) {
            appendCard(productContainer, p);
            cardsDisplayed++;
        });
    
        // Hide the "Load More" button if all cards are displayed
        if (cardsDisplayed >= allCards.length) {
            $("#loadMoreBtn").hide();
        }
    });
    
    get_harvester();


var filteredCards = [];
var cardsDisplayed = 0;
var cardsPerPage = 6; 

function filter_search() {
    var checkboxes = $(".budget_checkbox:checked");
    var checkboxes2 = $(".hp_checkbox:checked");
    var checkboxesBrand = $(".brand_checkbox:checked");

    var selectedCheckboxValues = checkboxes.map(function () {
        return $(this).val();
    }).get();

    var selectedCheckboxValues2 = checkboxes2.map(function () {
        return $(this).val();
    }).get();

    var selectedBrand = checkboxesBrand.map(function () {
        return $(this).val();
    }).get();

    var paraArr = {
        'brand_id': JSON.stringify(selectedBrand),
        'price_ranges': JSON.stringify(selectedCheckboxValues),
        'horse_power_ranges': JSON.stringify(selectedCheckboxValues2),
    };

    var url = 'http://tractor-api.divyaltech.com/api/customer/get_old_tractor_by_filter';
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

            if (searchData.product.length > 0) {
                searchData.product.forEach(function (filter) {
                    appendFilterCard(filterContainer, filter);
                });

                $("#noDataMessage").hide();
                // $("#loadMoreBtn").show();
            } else {
                // Show the "Data not found" message
                $("#noDataMessage").show();
                $("#loadMoreBtn").hide();
            }
        },
        error: function (error) {
            console.error('Error searching for brands:', error);
        }
    });
}

function appendFilterCard(filterContainer, filter) {
    function appendCard(container, p) {
        var images = p.image_names;
        var a = [];
        const name = p.brand_name +" "+p.model;


        if (images) {
            if (images.indexOf(',') > -1) {
                a = images.split(',');
            } else {
                a = [images];
            }
        }
       
        var newCard = `
        <div class="col-12 col-lg-4 col-md-4 col-sm-4 mb-4">
        <a href="harvester_inner.php?product_id=${p.product_id}" class="h-auto success__stry__item d-flex flex-column text-decoration-none shadow ">
            <div class="thumb">
                <div>
                    <img src="http://tractor-api.divyaltech.com/uploads/product_img/${a[0]}" class="object-fit-cover w-100" alt="harvester_img">
                </div>
            </div>
            <div class="position-absolute" >
                <p  style="font-size:13px;" class="rounded-pill bg-success text-white ms-1 text-center px-2 mt-1">Self Propelled</p>
            </div>
            <div class="content d-flex flex-column flex-grow-1 ">
                
                <div class="power text-center mt-3">
                <div class="row text-center">
                    <div class="col-12 text-center">
                        <p class="fw-bold pe-3 text-primary">${name}</p>
                    </div>
                </div>
                    <div class="row ">
                        <div class="col-12 "><p class="text-dark ps-2">Cutting Width : ${p.cutting_bar_width} Feet</p></div>
                        
                    </div>    
                </div>
            </div>
            <div class="col-12 btn-success">
                <button type="button" class="btn btn-success py-2 w-100"></i> 
                Power : ${p.horse_power} HP
                </button>
            </div>
        </a>
    </div>

        `;
        container.append(newCard);
    }

    function displayNextSet() {
        var productContainer = $("#productContainer");
    
        // Display the next set of filtered cards
        filteredCards.slice(cardsDisplayed, cardsDisplayed + cardsPerPage).forEach(function (p) {
            appendCard(productContainer, p);
            cardsDisplayed++;
        });
    
        // Hide the "Load More" button if all filtered cards are displayed
        if (cardsDisplayed >= filteredCards.length) {
            $("#loadMoreBtn").hide();
        }
    }
    
    $(document).on('click', '#loadMoreBtn', function () {
        // Display the next set of filtered cards when the "Load More" button is clicked
        displayNextSet();
    });

    appendCard(filterContainer, filter);
    displayNextSet();
}
var noDataMessage = $("#noDataMessage");
noDataMessage.hide();

function get_lookup() {
    console.log('init');
    // var apiBaseURL = APIBaseURL;
    var url = 'http://tractor-api.divyaltech.com/api/customer/getLookupData';
    $.ajax({
        url: url,
        type: "GET",
        headers: {
            'Authorization': 'Bearer ' + localStorage.getItem('token')
        },
        success: function (data) {
            // lookup checkboxes for Power Source
            console.log(data, 'ok');
            var powerSourceDiv = $("#POWER_SOURCE");

            // Filter data based on the 'name' property
            var filteredData = data.data.filter(item => item.name === "POWER_SOURCE");

            // Iterate over the filtered data
            for (var i = 0; i < filteredData.length; i++) {
                var checkboxId = "powerSourceCheckbox" + i;
                var label = '<label for="' + checkboxId + '" class="ps-2 fs-6" style="margin-top:-8px;">' + filteredData[i].lookup_data_value + '</label><br />';
                var checkbox = '<input type="checkbox"  id="' + checkboxId + '" class="checkbox-round mt-1 ms-3 " value="' + filteredData[i].id + '"/>';

                powerSourceDiv.append('<div class="d-flex"   >' + checkbox + label + '</div>');
            }
        },
        error: function (error) {
            console.error('Error fetching data:', error);
        }
    });
}

get_lookup();

function get() {
    // var apiBaseURL = CustomerAPIBaseURL;
    var url = 'http://tractor-api.divyaltech.com/api/customer/get_brand_by_product_id/'+4;

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
            $.each(data.brands, function (index, brand) {
                var brand_id = brand.id;
                var brand_name = brand.brand_name;
                var checkboxHtml = '<input type="checkbox" class="checkbox-round mt-1 ms-3 brand_checkbox" value="' + brand_id + '"/>' +
                    '<span class="ps-2 fs-6">' + brand_name + '</span> <br/>';

                checkboxContainer.append(checkboxHtml);
            });
        },
        error: function (error) {
            console.error('Error fetching data:', error);
        }
    });
}
get();




  function resetform(){
    $('.brand_checkbox').val('');
    $('.budget_checkbox').val('');
    $('.hp_checkbox').val('');
    $('.brand_checkbox:checked').prop('checked', false);
    $('.budget_checkbox:checked').prop('checked', false);
    $('.hp_checkbox:checked').prop('checked', false);
    get_harvester();
    $("#noDataMessage").hide();
    // window.location.reload();
    
  }