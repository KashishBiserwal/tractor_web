var cardsPerPage = 6;
var allCards = [];
var cardsDisplayed = 0;

$(document).ready(function() {
    console.log("ready!");
    get_old_harvester();
    $('#filter_tractor').click(filter_search);
});

function get_old_harvester() {
    var url = "http://tractor-api.divyaltech.com/api/customer/get_old_harvester";
   
     $.ajax({
            url: url,
            type: "GET",
            success: function (data) {
                var productContainer = $("#productContainerharvester");
                // Clear the existing content in the container
                productContainer.empty();
    
                if (data.product && data.product.length > 0) {
                    // Reverse the order of the cards to display the latest ones first
                    var reversedCards = data.product.slice().reverse();
    
                    // Display the latest cards at the top
                    reversedCards.slice(0, cardsPerPage).forEach(function (p) {
                        prependCard(productContainer, p);
                        cardsDisplayed++;
                    });
    
                    // Update allCards to store all the cards
                    allCards = reversedCards;
    
                    // Show or hide the "Load More" button based on the number of cards
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
    function prependCard(container, p) {
        var images = p.image_names;
        var a = [];
        // const name = p.brand_name +" "+p.model;

        if (images) {
            if (images.indexOf(',') > -1) {
                a = images.split(',');
            } else {
                a = [images];
            }
        }
                    var newCard = `
                    <div class="col-12 col-lg-4 col-md-4 col-sm-4 mt-3 ">

                        <div class="h-auto success__stry__item d-flex flex-column shadow">
                            <div class="thumb">
                                <a href="used_harvester_inner.php?id=${p.customer_id}">
                                    <div class="ratio ratio-16x9">
                                        <img src="http://tractor-api.divyaltech.com/uploads/product_img/${a[0]}" class="object-fit-cover " alt="img">
                                    </div>
                                </a>
                            </div>
                            <div class="content d-flex flex-column flex-grow-1 ">
                                <div class="caption text-center">
                                    <a href="used_harvester_inner.php?id=${p.customer_id}" class="text-decoration-none text-dark">
                                  
                                        <p class="pt-1"><strong class="series_tractor_strong text-center h6 fw-bold text-truncate "><span>${p.brand_name}</span> <span>${p.model}</span></strong></p>
                                    </a>      
                                </div>
                                <div class="power text-center">
                                    <div class="row ">
                                        <div class="col-12 col-lg-6 col-md-6 col-sm-6"><p class="text-success text-truncate ps-2">Price : ₹ <span>${p.price}</span></p></div>
                                        <div class="col-12 col-lg-6 col-md-6 col-sm-6" style="padding-right: 32px;">
                                             <p id="adduser" type="" class=" rounded-3"> Year : <span>${p.purchase_year}</span></p>
                                        </div>
                                    </div>  
                                    <div class="col-12 text-center">
                                        <p class="text-dark fw-bold">Hours :<span>${p.hours_driven}</span> </p>
                                    </div>  
                                </div>
                            </div>
                            <div class="col-12">
                                <button type="button" id="adduser"class="btn-state btn-success w-100 text-decoration-none px-2 w-100 text-truncate"><span>${p.district_name}</span>, <span><span>${p.state_name}</span></span></a>
                            </div>
                        </div>
                    </div> 
                    `;

                    // Append the new card to the container
                    container.append(newCard);
                    $(document).on('click', '#loadMoreBtn', function () {
                        var productContainer = $("#productContainerharvester");
                    
                        // Get the next set of cards to display
                        var nextCards = allCards.slice(cardsDisplayed, cardsDisplayed + cardsPerPage);
                    
                        // Display the next set of cards
                        nextCards.forEach(function (p) {
                            prependCard(productContainer, p);
                            cardsDisplayed++;
                        });
                    
                        // Hide the "Load More" button if all cards are displayed
                        if (cardsDisplayed >= allCards.length) {
                            $("#loadMoreBtn").hide();
                        }

                    });
                }

                function get() {
                    var url = 'http://tractor-api.divyaltech.com/api/customer/state_data';
                    $.ajax({
                        url: url,
                        type: "GET",
                        headers: {
                            'Authorization': 'Bearer ' + localStorage.getItem('token')
                        },
                        success: function(data) {
                            console.log("State data:", data);
                
                            const checkboxContainer = $('#state_state');
                            checkboxContainer.empty(); // Clear existing checkboxes
                            
                            const stateId = 7; // Replace 7 with the desired state ID
                            const filteredState = data.stateData.find(state => state.id === stateId);
                            if (filteredState) {
                                var checkboxHtml = '<input type="checkbox" class="checkbox-round mt-1 ms-3 state_checkbox" value="' + filteredState.id + '"/>' +
                                    '<span class="ps-2 fs-6">' + filteredState.state_name + '</span> <br/>';
                                checkboxContainer.append(checkboxHtml);
                                // Call getDistricts with the stateId
                                getDistricts(stateId);
                            } else {
                                checkboxContainer.html('<p>No valid data available</p>');
                            }
                        },
                        error: function(error) {
                            console.error('Error fetching state data:', error);
                        }
                    });
                }
                
                function getDistricts(stateId) {
                    var url = 'http://tractor-api.divyaltech.com/api/customer/get_district_by_state/' + stateId;
                    $.ajax({
                        url: url,
                        type: "GET",
                        headers: {
                            'Authorization': 'Bearer ' + localStorage.getItem('token')
                        },
                        success: function(data) {
                            console.log("District data:", data);
                            
                            const checkboxContainer = $('#district_dist');
                            checkboxContainer.empty(); // Clear existing checkboxes
                            
                            if (data && data.districtData && data.districtData.length > 0) {
                                data.districtData.forEach(district => {
                                    var checkboxHtml = '<input type="checkbox" class="checkbox-round mt-1 ms-3 district_checkbox" value="' + district.id + '" id="district_' + district.id + '"/>' +
                                        '<label for="district_' + district.id + '" class="ps-2 fs-6">' + district.district_name + '</label> <br/>';
                                    checkboxContainer.append(checkboxHtml);
                                });
                            } else {
                                checkboxContainer.html('<p>No districts available for this state</p>');
                            }
                        },
                        error: function(error) {
                            console.error('Error fetching districts:', error);
                        }
                    });
                }
                // Call the get function to start fetching state data
                get();
                
                function get_barnd() {
                    // var apiBaseURL = CustomerAPIBaseURL;
                    var url = 'http://tractor-api.divyaltech.com/api/customer/get_brand_for_finance';
                
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
                get_barnd();

                function get_year_and_hours() {
                    var url = 'http://tractor-api.divyaltech.com/api/customer/get_year_and_hours';
                    $.ajax({
                        url: url,
                        type: "GET",
                        headers: {
                            'Authorization': 'Bearer ' + localStorage.getItem('token')
                        },
                        success: function(data) {
                            console.log(data);
                            var selectYearContainer = $("#P_year");
                            selectYearContainer.empty(); // Clear existing content
                            
                            // Checkboxes for years
                            if (data.getYears && data.getYears.length > 0) {
                                // Reverse the array of years to display latest year at the top
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

                var filteredCards = [];
                var cardsDisplayed = 0;
                var cardsPerPage = 6; 
                
                function filter_search() {
                    var checkboxes = $(".budget_checkbox:checked");
                    var checkboxes2 = $(".state_checkbox:checked");
                    var checkboxesBrand = $(".brand_checkbox:checked");
                    var checkboxesdist = $(".district_checkbox:checked");
                    var checkboxesYear = $(".year_checkbox:checked");

                    var selectedCheckboxValues = checkboxes.map(function () {
                        return $(this).val();
                    }).get();
                
                    var selectedCheckboxValues2 = checkboxes2.map(function () {
                        return $(this).val();
                    }).get();
                
                    var selectedBrand = checkboxesBrand.map(function () {
                        return $(this).val();
                    }).get();
                    var selectedDistrict = checkboxesdist.map(function () {
                        return $(this).val();
                    }).get();
                    var selectedYear = checkboxesYear.map(function () {
                        return $(this).val();
                    }).get();
                
                    var paraArr = {
                        'brand_id': JSON.stringify(selectedBrand),
                        'price_ranges': JSON.stringify(selectedCheckboxValues),
                        'state': JSON.stringify(selectedCheckboxValues2),
                        'district': JSON.stringify(selectedDistrict),
                        'purchase_year': JSON.stringify(selectedYear),
                    };
                
                    var url = 'http://tractor-api.divyaltech.com/api/customer/get_old_harvester_by_filter';
                    $.ajax({
                        url: url,
                        type: 'POST',
                        data: paraArr,
                        headers: {
                            'Authorization': 'Bearer ' + localStorage.getItem('token')
                        },
                        success: function (searchData) {
                            var filterContainer = $("#productContainerharvester");
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
                               
                            }
                            $("#loadMoreBtn").hide();
                        },
                        error: function (error) {
                            console.error('Error searching for brands:', error);
                        }
                    });
                }
                function appendFilterCard(filterContainer, filter) {
                    var newCard = `
                        <div class="col-12 col-lg-4 col-md-4 col-sm-4 mt-3 ">
                            <div class="h-auto success__stry__item d-flex flex-column shadow">
                                <div class="thumb">
                                    <a href="used_harvester_inner.php?id=${filter.customer_id}">
                                        <div class="ratio ratio-16x9">
                                            <img src="http://tractor-api.divyaltech.com/uploads/product_img/${filter.image_names.split(',')[0]}" class="object-fit-cover " alt="img">
                                        </div>
                                    </a>
                                </div>
                                <div class="content d-flex flex-column flex-grow-1 ">
                                    <div class="caption text-center">
                                        <a href="used_harvester_inner.php?id=${filter.customer_id}" class="text-decoration-none text-dark">
                                            <p class="pt-1"><strong class="series_tractor_strong text-center h6 fw-bold "><span>${filter.brand_name}</span> <span>${filter.model}</span></strong></p>
                                        </a>      
                                    </div>
                                    <div class="power text-center">
                                        <div class="row ">
                                            <div class="col-12 col-lg-6 col-md-6 col-sm-6"><p class="text-success ps-2">Price : ₹ <span>${filter.price}</span></p></div>
                                            <div class="col-12 col-lg-6 col-md-6 col-sm-6" style="padding-right: 32px;">
                                                 <p id="adduser" type="" class=" rounded-3"> Year : <span>${filter.purchase_year}</span></p>
                                            </div>
                                        </div>  
                                        <div class="col-12 text-center">
                                            <p class="text-dark fw-bold">Hours :<span>${filter.hours_driven}</span> </p>
                                        </div>  
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button type="button" id="adduser"class="btn-state btn-success w-100 text-decoration-none px-2 w-100"><span>${filter.district_name}</span>, <span><span>${filter.state_name}</span></span></a>
                                </div>
                            </div>
                        </div>`;
                        filterContainer.append(newCard);
                    }
                    
                    function displayNextSet() {
                        var productContainer = $("#productContainerharvester");
                    
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
                    
                    // $(document).on('click', '#loadMoreBtn', function () {
                    //     displayNextSet();
                    // });
                    
                   
                


                function resetform(){
                    $('.brand_checkbox').val('');
                    $('.state_checkbox').val('');
                    $('.budget_checkbox').val('');
                    $('.district_checkbox').val('');
                    $('.brand_checkbox:checked').prop('checked', false);
                    $('.budget_checkbox:checked').prop('checked', false);
                    $('.state_checkbox:checked').prop('checked', false);
                    $('.district_checkbox:checked').prop('checked', false);
                    // get_old_harvester();
                    $("#noDataMessage").hide();
                    window.location.reload();
                    
                  }

  