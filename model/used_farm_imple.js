$(document).ready(function() {
    showOverlay(); 
    var cardsPerPage = 6;
    var cardsDisplayed = 0;
    var allCards = [];
    $('#filter_implement').click(filter_search);

    function getUsedFarmImplements() {
        var url = "https://shopninja.in/bharatagri/api/public/api/customer/get_old_implements";
    
        $.ajax({
            url: url,
            type: "GET",
            success: function (data) {
                allCards = data.getOldImplement || [];
                allCards.reverse(); 
                displayCards();
            },
            error: function (error) {
                console.error('Error fetching data:', error);
            },
            complete: function () {
                hideOverlay();
            },
        });
    }
    function displayCards() {
        var productContainer = $("#productContainer");

        for (var i = cardsDisplayed; i < Math.min(cardsDisplayed + cardsPerPage, allCards.length); i++) {
            appendCard(productContainer, allCards[i]);
        }
        
        cardsDisplayed = Math.min(cardsDisplayed + cardsPerPage, allCards.length);

        if (cardsDisplayed < allCards.length) {
            $("#loadMoreBtn").show();
        } else {
            $("#loadMoreBtn").hide();
        }
    }

    function appendCard(container, cardData) {
        var images = cardData.image_names ? cardData.image_names.split(',') : [];
        var brandmodel = cardData.brand_name + ' ' + cardData.model;
        var location = cardData.district_name + ' ' + cardData.state_name;
        var formattedPrice = formatPriceWithCommas(cardData.price);

        var cardHtml = `
            <div class="col-12 col-lg-4 col-md-4 col-sm-4 mt-3">
                <div class="h-auto success__stry__item d-flex flex-column shadow">
                    <div class="thumb">
                        <a href="used_farm_inner.php?id=${cardData.id}">
                            <div class="ratio ratio-16x9">
                                <img src='https://shopninja.in/bharatagri/api/public/uploads/product_img/${images[0]}' class="object-fit-cover" alt="${cardData.description}" loading="lazy">
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
                                <div class="col-12 col-lg-6 col-md-6 col-sm-6"><p class="text-success ps-2 text-truncate"><span>Price:- </span>${formattedPrice}</p></div>
                                <div class="col-12 col-lg-6 col-md-6 col-sm-6" style="padding-right: 32px;">
                                    <p id="adduser" type="" class="">
                                    <span>Year:- </span>${cardData.purchase_year}
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
    
        getUsedFarmImplements();
        $("#loadMoreBtn").on("click", function() {
            displayCards(); 
        });
    });

    function showOverlay() {
        $("#overlay").fadeIn(300);
    }
    function hideOverlay() {
        $("#overlay").fadeOut(300);
    }
    function get() {
        var url = 'https://shopninja.in/bharatagri/api/public/api/customer/state_data';
        $.ajax({
            url: url,
            type: "GET",
            headers: {
                'Authorization': 'Bearer ' + localStorage.getItem('token')
            },
            success: function(data) {
                console.log("State data:", data);
    
                const checkboxContainer = $('#state_state');
                checkboxContainer.empty(); 
                
                data.stateData.forEach(state => {
                    var checkboxHtml = '<input type="radio" class="checkbox-round mt-1 ms-3 state_checkbox" value="' + state.id + '"/>' +
                        '<span class="ps-2 fs-6">' + state.state_name + '</span> <br/>';
                    checkboxContainer.append(checkboxHtml);
                });
                getAllDistricts();
                $('.state_checkbox').on('click', function() {
                    var stateId = $(this).val();
                    getDistricts(stateId);
                });
            },
            error: function(error) {
                console.error('Error fetching state data:', error);
            }
        });
    }
    
    function getAllDistricts() {
        var url = 'https://shopninja.in/bharatagri/api/public/api/customer/all_districts';
        $.ajax({
            url: url,
            type: "GET",
            headers: {
                'Authorization': 'Bearer ' + localStorage.getItem('token')
            },
            success: function(data) {
                console.log("All District data:", data);
    
                const checkboxContainer = $('#district_dist');
                checkboxContainer.empty(); // Clear existing checkboxes
    
                if (data && data.districtData && data.districtData.length > 0) {
                    data.districtData.forEach(district => {
                        var checkboxHtml = '<input type="checkbox" class="checkbox-round mt-1 ms-3 district_checkbox" value="' + district.id + '" id="district_' + district.id + '"/>' +
                            '<label for="district_' + district.id + '" class="ps-2 fs-6">' + district.district_name + '</label> <br/>';
                        checkboxContainer.append(checkboxHtml);
                    });
                } else {
                    checkboxContainer.append('<p>No districts available.</p>');
                }
            },
            error: function(error) {
                console.error('Error fetching all districts:', error);
            }
        });
    }
    
    function getDistricts(stateId) {
        var url = 'https://shopninja.in/bharatagri/api/public/api/customer/get_district_by_state/' + stateId;
        $.ajax({
            url: url,
            type: "GET",
            headers: {
                'Authorization': 'Bearer ' + localStorage.getItem('token')
            },
            success: function(data) {
                console.log("District data for state ID " + stateId + ":", data);
    
                const checkboxContainer = $('#district_dist');
                checkboxContainer.empty(); // Clear existing checkboxes
    
                if (data && data.districtData && data.districtData.length > 0) {
                    data.districtData.forEach(district => {
                        var checkboxHtml = '<input type="checkbox" class="checkbox-round mt-1 ms-3 district_checkbox" value="' + district.id + '" id="district_' + district.id + '"/>' +
                            '<label for="district_' + district.id + '" class="ps-2 fs-6">' + district.district_name + '</label> <br/>';
                        checkboxContainer.append(checkboxHtml);
                    });
                } else {
                    checkboxContainer.append('<p>No districts available for state ID: ' + stateId + '</p>');
                }
            },
            error: function(error) {
                console.error('Error fetching districts for state ID ' + stateId + ':', error);
            }
        });
    }
    get();

    function get_barnd() {
        var url = 'https://shopninja.in/bharatagri/api/public/api/customer/get_brand_for_finance';
    
        $.ajax({
            url: url,
            type: "GET",
            headers: {
                'Authorization': 'Bearer ' + localStorage.getItem('token')
            },
            success: function (data) {
                console.log(data);
    
                const checkboxContainer = $('#checkboxContainer');
                checkboxContainer.empty(); 
    
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
    get_barnd();


    function get_year_and_hours() {
        var url = 'https://shopninja.in/bharatagri/api/public/api/customer/get_year_and_hours';
        $.ajax({
            url: url,
            type: "GET",
            headers: {
                'Authorization': 'Bearer ' + localStorage.getItem('token')
            },
            success: function(data) {
                console.log(data);
                var selectYearContainer = $("#P_year");
                selectYearContainer.empty();
                
                if (data.getYears && data.getYears.length > 0) {
                    data.getYears.reverse();
                    data.getYears.forEach(year => {
                        var checkboxHtml = '<input type="checkbox" class="checkbox-round mt-1 ms-3 year_checkbox" value="' + year + '"/>' +
                            '<span class="ps-2 fs-6">' + year + '</span><br />';
                        selectYearContainer.append(checkboxHtml);
                    });
                } else {
                    selectYearContainer.html('<p>No years available</p>');
                }
            },
            error: function(error) {
                console.error('Error fetching data:', error);
            }
        });
    }
    get_year_and_hours();

    function formatPriceWithCommas(price) {
        if (isNaN(price)) {
            return price; 
        }
        return new Intl.NumberFormat('en-IN').format(price);
    }

    var filteredCards = [];
    var cardsDisplayed = 0;
    var cardsPerPage = 6; 
    
    function filter_search() {
        var checkboxesBudget = $(".budget_checkbox:checked");
        var checkboxes = $(".brand_checkbox:checked"); 
        var checkboxes2 = $(".state_checkbox:checked");
        var checkboxes3 = $(".district_checkbox:checked");
        var checkboxes4 = $(".year_checkbox:checked");
    

        var selectedCheckboxValues = checkboxesBudget.map(function() {
            return $(this).val();
        }).get();
    
        var selectedCheckboxValuesFormatted = selectedCheckboxValues.map(function(value) {
            return value.replace(/,/g, ''); 
        });

        var selectedBrand = checkboxes.map(function () {
            return $(this).val();
        }).get();
        var selectedState = checkboxes2.map(function () {
            return $(this).val();
        }).get();
        var selectedDistrict = checkboxes3.map(function () {
            return $(this).val();
        }).get();
        var selectedYear = checkboxes4.map(function () {
            return $(this).val();
        }).get();
    
        var paraArr = {
            'brand_id': JSON.stringify(selectedBrand),
            'state': JSON.stringify(selectedState),
            'district': JSON.stringify(selectedDistrict),
            'purchase_year': JSON.stringify(selectedYear),
            'price_ranges': JSON.stringify(selectedCheckboxValuesFormatted),
        };
    
        var url = 'https://shopninja.in/bharatagri/api/public/api/customer/filter_for_old_implements';
        $.ajax({
            url: url,
            type: 'POST',
            data: paraArr,
            headers: {
                'Authorization': 'Bearer ' + localStorage.getItem('token')
            },
            success: function (searchData) {
                filteredCards = searchData.oldImplement;
                var productContainer = $("#productContainer");

                productContainer.empty();
            
                filteredCards.forEach(function (p) {
                    appendFilterCard(productContainer, p);
                });
            
                $("#loadMoreBtn").hide();
            },
            error: function (error) {
                console.error('Error searching for implements:', error);
                $("#productContainer").empty();
                $("#loadMoreBtn").hide();
                $("#noDataMessage").show();
                $("#noDataMessage img").attr("src", "assets/images/404.gif");
            },
            complete: function () {
                hideOverlay();
            },
        });
    }
    function appendFilterCard(filterContainer, cardData) {
        var formattedPrice = formatPriceWithCommas(cardData.price);
        var brandmodel = cardData.brand_name + ' ' + cardData.model;
        var location = cardData.district_name + ' ' + cardData.state_name;
        var newCard = `
        <div class="col-12 col-lg-4 col-md-4 col-sm-4 mt-3">
        <div class="h-auto success__stry__item d-flex flex-column shadow">
            <div class="thumb">
                <a href="used_farm_inner.php?id=${cardData.id}">
                    <div class="ratio ratio-16x9">
                        <img src='https://shopninja.in/bharatagri/api/public/uploads/product_img/${cardData.image_names.split(',')[0]}' class="object-fit-cover" alt="${cardData.description}" loading="lazy">
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
                        <div class="col-12 col-lg-6 col-md-6 col-sm-6"><p class="text-success ps-2 text-truncate"><span>Price:- </span>${formattedPrice}</p></div>
                        <div class="col-12 col-lg-6 col-md-6 col-sm-6" style="padding-right: 32px;">
                            <p id="adduser" type="" class="">
                            <span>Year:- </span>${cardData.purchase_year}
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
            filterContainer.append(newCard);
        }
        
        function displayNextSet() {
            var productContainer = $("#productContainer");
        
            // Display the next set of filtered cards
            filteredCards.slice(cardsDisplayed, cardsDisplayed + cardsPerPage).forEach(function (p) {
                appendFilterCard(productContainer, p); // Corrected function call
                cardsDisplayed++;
            });
        
            // Hide the "Load More" button if all filtered cards are displayed
            if (cardsDisplayed >= filteredCards.length) {
                $("#loadMoreBtn").hide();
            }
        }
        
        function resetform(){
            $('.brand_checkbox').val('');
            $('.state_checkbox').val('');
            $('.budget_checkbox').val('');
            $('.district_checkbox').val('');
            $('.brand_checkbox:checked').prop('checked', false);
            $('.budget_checkbox:checked').prop('checked', false);
            $('.state_checkbox:checked').prop('checked', false);
            $('.district_checkbox:checked').prop('checked', false);
            $("#noDataMessage").hide();
            window.location.reload();
            
          }