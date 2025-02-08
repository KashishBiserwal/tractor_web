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
                                <img src="assets/images/IMG-20240516-WA0006.jpg" class="object-fit-contain" alt="img" loading="lazy">
                            </div>
                        </a>
                    </div>
                    <div class="position-absolute">
                        <p class="rounded-pill bg-warning text-center px-2 mt-1">Certified</p>
                    </div>
                    <div>
                        <a href="certified_dealers_inner.php?id=${dealer.id}" class="text-decoration-none text-dark">
                            <h6 class="fw-bold text-center text-truncate mt-3">${dealer.dealer_name}</h6>
                        </a>
                        <div class="col-12 col-lg-12 col-md-12 col-sm-12">
                            <p class="text-center text-dark fw-bold">${dealer.brand_name} <span>Dealer</span></p>
                        </div>
                        <div class="col-12">
                                <button type="button" id="adduser"class="btn-state btn-success w-100 text-decoration-none text-truncate px-2 w-100 text-truncate"><span>${dealer.district_name}</span>, <span><span>${dealer.state_name}</span></span></a>
                            </div>
                    </div>
                </div>
            </div>
        `;

        // Use prepend to add the new card at the beginning
        productContainer.prepend(newCard);
    });
}


function searchdata() {
    var url = 'http://tractor-api.divyaltech.com/api/customer/search_for_dealer';
    var token = localStorage.getItem('token');
    var headers = {
        'Authorization': 'Bearer ' + token
    };

    var brandId = $('#b_brand').val(); // Get selected brand ID
    var stateId = $('#_state').val(); // Get selected state ID
    var districtId = $('#_district').val(); // Get selected district ID

    var data = {
        brand_id: brandId,
        state: stateId,
        district: districtId
    };
    
    $.ajax({
        url: url,
        type: 'POST',
        data: data,
        headers: headers,
        success: function (response) {
            console.log(response);
            console.log("Data stored successfully !");
            
            var productContainer = $("#productContainer");
            productContainer.empty(); // Clear existing content
            
            if (response.dealerData.length > 0) {
                // If there are matches, display the dealer cards in Section 2
                $.each(response.dealerData, function(index, dealer) {
                    var images = dealer.image_names ? dealer.image_names.split(',')[0] : '';
    
                    var newCard = `
                        <div class="col-12 col-sm-3 col-md-3 col-lg-3 px-2 py-3 h-100">
                            <div class="h-auto success__stry__item d-flex flex-column shadow">
                                <div class="thumb">
                                    <a href="certified_dealers_inner.php?id=${dealer.id}">
                                        <div class="ratio ratio-16x9">
                                            <img src="assets/images/IMG-20240516-WA0006.jpg" class="object-fit-contain" alt="img" loading="lazy">
                                        </div>
                                    </a>
                                </div>
                                <div class="position-absolute">
                                    <p class="rounded-pill bg-warning text-center px-2 mt-1">Certified</p>'
                                </div>
                                <div>
                                    <a href="certified_dealers_inner.php?id=${dealer.id}" class="text-decoration-none text-dark">
                                        <h6 class="fw-bold text-center text-truncate mt-3">${dealer.dealer_name}</h6>
                                    </a>
                                    <div class="col-12 col-lg-12 col-md-12 col-sm-12">
                                        <p class="text-center text-dark fw-bold">${dealer.brand_name} <span>Dealer</span></p>
                                    </div>
                                    <div class="col-12">
                                <button type="button" id="adduser"class="btn-state btn-success w-100 text-decoration-none text-truncate px-2 w-100 text-truncate"><span>${dealer.district_name}</span>, <span><span>${dealer.state_name}</span></span></a>
                            </div>
                                </div>
                            </div>
                        </div>
                    `;
                    
                    // Append the new card HTML to the product container
                    productContainer.append(newCard);
                });
                
                // Hide Load More button if all data is displayed
                $("#load_moretract").hide();
                
                $("#noDataMessage").hide();
            } else {
                productContainer.html('<h5 id="noDataMessage" class="text-center mt-4 text-danger"><img src="assets/images/404.gif" class="w-25" alt=""><br>Data not found..!</h5>');
             
                $("#load_moretract").hide();
            }
        },
        error: function (xhr, textStatus, errorThrown) {
            if(xhr.status === 404) {
                var productContainer = $("#productContainer");
                productContainer.html('<h5 id="noDataMessage" class="text-center mt-4 text-danger"><img src="assets/images/404.gif" class="w-25" alt=""><br>Data not found..!</h5>');
         
                $("#load_moretract").hide();
            } else {
                console.error('Error fetching data:', errorThrown);
            }
        }
    });
}

function resetform() {
    $('#certified_dealer_from')[0].reset();
    $("#productContainer").empty(); 
    $("#noDataMessage").hide(); 
    get_certifieddealers();
}

function get() { 
    var url = 'http://tractor-api.divyaltech.com/api/customer/get_brand_for_finance';
    $.ajax({
        url: url,
        type: "GET",
        headers: {
            'Authorization': 'Bearer ' + localStorage.getItem('token')
        },
        success: function (data) {
            const selects = document.querySelectorAll('#b_brand');
            selects.forEach(select => {
                select.innerHTML = '<option selected disabled value="">Please select an option</option>';
                if (data.brands.length > 0) {
                    data.brands.forEach(row => {
                        const option = document.createElement('option');
                        option.textContent = row.brand_name;
                        option.value = row.id;
                        select.appendChild(option);
                    });
                } else {
                    select.innerHTML = '<option>No valid data available</option>';
                }
            });
        },
        error: function (error) {
            console.error('Error fetching data:', error);
        }
    });
  } 
  get();