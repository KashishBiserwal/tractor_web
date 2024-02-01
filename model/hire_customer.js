$(document).ready(function() {
    console.log("ready!");
    
    // $('#filter_tractor').click(filter_search);
   
});


function getHiretractor() {
    var url = "http://tractor-api.divyaltech.com/api/customer/get_rent_data";
    console.log(url);

    $.ajax({
        url: url,
        type: "GET",
        success: function (data) {
            var productContainer = $("#productContainer");
            var loadMoreButton = $("#loadMoreBtn");

            if (data.rent_details.data1 && data.rent_details.data1.length > 0) {
                // Display the initial set of 6 tractors from data1
                displaylist(data.rent_details.data1.slice(0, 6));

                if (data.rent_details.data1.length <= 6) {
                    loadMoreButton.hide();
                } else {
                    loadMoreButton.show();
                }

                // Handle "Load More Tractors" button click
                loadMoreButton.click(function () {
                    // Display all tractors from data1
                    displaylist(data.rent_details.data1);

                    // Hide the "Load More Tractors" button
                    loadMoreButton.hide();
                });
            }

            if (data.rent_details.data2 && data.rent_details.data2.length > 0) {
                // Process data from data2 as needed
                processDatatwo(data.rent_details.data2);
            }
        },
        error: function (error) {
            console.error('Error fetching data:', error);
        }
    });
}

function processDatatwo(data2) {
    var productContainer = $("#productContainer");

    data2.forEach(function (customer) {
        var rentMappingIds = customer.rent_mapping_ids.split(',');
        var implementTypeIds = customer.implement_type_ids.split(',');
        var rates = customer.rates.split(',');

        // Create a new div for the customer
        var customerDiv = $("<div class='customer-info'></div>");

        // Display information for each rent mapping
        rentMappingIds.forEach(function (rentMappingId, index) {
            var rentMappingInfo = `
                <div class="rental-info">
                    <p>Customer ID: ${customer.customer_id}</p>
                    <p>Rent Mapping ID: ${rentMappingId}</p>
                    <p>Implement Type ID: ${implementTypeIds[index]}</p>
                    <p>Rate: ${rates[index]}</p>
                    <hr>
                </div>
            `;

            // Append the rent mapping info to the customer div
            customerDiv.append(rentMappingInfo);
        });

        // Append the customer div to the product container
        productContainer.append(customerDiv);
    });
}

// Function to display data from data1
function displaylist(tractors) {
    var productContainer = $("#productContainer");

    tractors.forEach(function (p) {
        var images = p.image_names;
        var a = [];

        if (images) {
            if (images.indexOf(',') > -1) {
                a = images.split(',');
            } else {
                a = [images];
            }
        }

        var cardId = `card_${p.id}`; // Dynamic ID for the card
        var modalId = `used_tractor_callbnt_${p.id}`; // Dynamic ID for the modal
        var formId = `contact-seller-call${p.id}`; // Dynamic ID for the form

        var newCard = `
            <div class="col-12 col-lg-4 col-md-6 col-sm-6 mb-3" id="${cardId}">
                <div class="h-auto success__stry__item d-flex flex-column shadow ">
                    <div class="thumb">
                        <a href="hire_inner.php?id=${p.id}">
                            <div class="ratio ratio-16x9">
                                <img src="http://tractor-api.divyaltech.com/uploads/rent_img/${a[0]}" class="object-fit-cover" alt="${p.description}">
                            </div>
                        </a>
                    </div>
                    <div class="content d-flex flex-column flex-grow-1 ">
                        <div class="caption text-center">
                            <a href="hire_inner.php?id=${p.id}" class="text-decoration-none text-dark">
                                <p class="pt-3 " style="font-size: 17px;">
                                    <strong class="series_tractor_strong text-center fw-bold ">${p.brand_name}</strong>
                                </p>
                            </a>
                        </div>
                        <div class="power">
                            <a href="" class="text-decoration-none text-dark">
                                <div class="row text-center">
                                    <div class=" col-4 col-md-4 col-lg-4 col-sm-4">
                                        <p class="text-dark custom-font-size fw-bold"><i class="fa-solid fa-indian-rupee-sign"></i>${p.rates}</p>
                                    </div>
                                    <!-- Add 'rates' variable or replace it with an appropriate value -->
                                    <div class="col-4 col-md-4 col-lg-4 col-sm-4">
                                        <p class="text-dark custom-font-size fw-bold"><i class="fas fa-bolt "></i>Rates</p>
                                    </div>
                                    <div class=" col-4 col-md-4 col-lg-4 col-sm-4">
                                        <p class="text-dark custom-font-size fw-bold"><i class="fa-solid fa-gear"></i>${p.rates}</p>
                                    </div>
                                </div>
                                <div class="row text-center fw-bold text-primary">
                                    <div class=" col-12 mb-2">${p.district} ${p.state}</div>
                                </div>
                            </a>
                        </div>
                        <button type="button" class="add_btn btn-success w-100" data-bs-toggle="modal" data-bs-target="#${modalId}">
                            Send Enquiry
                        </button>
                    </div>
                </div>
                <div class="modal fade" id="${modalId}" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title text-dark fw-bold" id="staticBackdropLabel">Send
                            Rental Enquiry Mahindra 575 DI XP Plus</h4>
                            <button type="button" class="btn-close btn-success" data-bs-dismiss="modal" aria-label="Close"><img src="assets/images/close.png" class="w-25"></button>
                    </div>
                    <div class="modal-body">
                        <div class="model-cont">
                            <form id="${formId}" name="hire_inner" method="post">
                                <div class="row">
                                    <div class="col-12 col-sm-12 col-md-4 col-lg-4 mt-4">
                                        <div class="form-outline">
                                            <label class="form-label" for="first_name"><i
                                                    class="fa-regular fa-user"></i> First
                                                Name</label>
                                            <input type="text" id="first_name" name="first_name"
                                                class=" data_search form-control input-group-sm py-2" />
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-12 col-md-4 col-lg-4 mt-4">
                                        <div class="form-outline">
                                            <label class="form-label" for="last_name"><i
                                                    class="fa-regular fa-user"></i> Last
                                                Name</label>
                                            <input type="text" id="last_name" name="last_name"
                                                class=" data_search form-control input-group-sm py-2" />
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-12 col-md-4 col-lg-4 mt-4">
                                        <div class="form-outline">
                                            <label class="form-label" for="mobile_number"> <i
                                                    class="fa fa-phone" aria-hidden="true"></i>
                                                Mobile
                                                Number</label>
                                            <input type="text" id="mobile_number"
                                                name="mobile_number"
                                                class=" data_search form-control input-group-sm py-2" />
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-12 col-md-4 col-lg-4 mt-4">
                                        <div class="form-outline">
                                            <label class="form-label" for="state"> <i
                                                    class="fas fa-location"></i>

                                                State</label>
                                            <select class="form-select py-2"
                                                aria-label="Default select example" id="state"
                                                name="state">
                                                <option selected disabled>Select State </option>
                                                <option value="chhattisgarh">Chhattisgarh</option>
                                                <option value="others">Others</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-12 col-md-4 col-lg-4 mt-4">
                                        <div class="form-outline">
                                            <label class="form-label" for="district"> <i
                                                    class="fa-solid fa-location-dot"></i>
                                                District</label>
                                            <select class="form-select py-2"
                                                aria-label="Default select example" name="district"
                                                id="district">
                                                <option selected disabled>Select District</option>
                                                <option value="raipur">Raipur</option>
                                                <option value="bilaspur">Bilaspur</option>
                                                <option value="ambikapur">Ambikapur</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-12 col-md-4 col-lg-4 mt-4">
                                        <div class="form-outline">
                                            <label class="form-label" for="taluka">Tehsil</label>
                                            <select class="form-select py-2"
                                                aria-label="Default select example" name="taluka"
                                                id="taluka">
                                                <option selected disabled>Select Tehsil</option>
                                                <option value="raipur">Raipur</option>
                                                <option value="bilaspur">Bilaspur</option>
                                                <option value="ambikapur">Ambikapur</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary"
                            data-bs-dismiss="modal">Close</button>
                        <button type="button" id="button_hire" class="btn btn-danger" onclick="savedata('${formId}')">Request</button>
                    </div>
                </div>
            </div>
                </div>
            </div>
        `;

        // Append the new card to the container
        productContainer.append(newCard);
    });
}

// Call the getHiretractor function to fetch and display tractors
getHiretractor();