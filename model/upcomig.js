
$(document).ready(function() {
    console.log("ready!");
    getTractorList();
});

function getTractorList() {
    var url = "http://tractor-api.divyaltech.com/api/customer/get_new_tractor";
    console.log(url);

    // Keep track of the total tractors and the currently displayed tractors
    var totalTractors = 0;
    var displayedTractors = 0;

    $.ajax({
        url: url,
        type: "GET",
        success: function(data) {
            console.log(data, 'abc');
            console.log('prachi', data.product.accessory_and_tractor_type[0].tractor_type_name);
            let new_arr = [];
            const new_data = data.product.accessory_and_tractor_type.filter((s) => {
                const arr = s.tractor_type_name.split(',');

                console.log('arr', arr);
                if (arr.includes('Upcoming')) {
                    new_arr.push(s.product_id);
                    return s.product_id;
                }
            });
            console.log('new_data', new_data);
            console.log('new_arr', new_arr);

            var productContainer = $("#productContainer");

            if (data.product.allProductData && data.product.allProductData.length > 0) {
                totalTractors = data.product.allProductData.length;

                // Display the initial set of 6 tractors
                displayTractors(data.product.allProductData.slice(0, 6), new_arr);

                // Show the "Load More Tractors" button if there are more tractors
                if (totalTractors > 6) {
                    $("#load_moretract").show();
                }

                // Handle "Load More Tractors" button click
                $("#load_moretract").click(function() {
                    // Display all tractors
                    displayTractors(data.product.allProductData, new_arr);

                    // Hide the "Load More Tractors" button
                    $("#load_moretract").hide();
                });
            }
        },
        error: function(error) {
            console.error('Error fetching data:', error);
        }
    });
}

function displayTractors(tractors, new_arr) {
    var productContainer = $("#productContainer");

    tractors.forEach(function(p) {
        if (new_arr.includes(p.product_id)) {
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
                <div class="col-12 col-lg-4 col-md-4 col-sm-4 mb-3">
                    <div class="h-auto success__stry__item d-flex flex-column shadow">
                        <div class="thumb">
                            <a href="${p.id}">
                                <div class="ratio ratio-16x9">
                                    <img src="http://tractor-api.divyaltech.com/customer/uploads/product_img/${a[0]}" class="object-fit-cover" alt="${p.description}">
                                </div>
                            </a>
                        </div>
                        <div class="content d-flex flex-column flex-grow-1">
                            <div class="caption text-center">
                                <a href="${p.id}" class="text-decoration-none text-dark">
                                    <p class="pt-3"><strong class="series_tractor_strong text-center h4 fw-bold ">${p.model}</strong></p>
                                </a>
                            </div>
                            <div class="power text-center mt-2">
                                <div class="row">
                                    <div class="col-12 col-lg-6 col-md-6 col-sm-6"><p class="text-dark ps-2"><i class="fas fa-bolt"></i> ${p.hp_category}HP</p></div>
                                    <div class="col-12 col-lg-6 col-md-6 col-sm-6" style="padding-right: 32px;">
                                        <p id="adduser" type="" class="text-dark">
                                            <i class="fa-solid fa-gear"></i> ${p.engine_capacity_cc} CC </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <button id="adduser" type="button" class="add_btn btn-success w-100">
                                    <i class="fa-regular fa-handshake"></i> Get on Road Price </button>
                            </div>
                        </div>
                    </div>
                </div>
            `;

            // Append the new card to the container
            productContainer.append(newCard);
        }
    });
}

