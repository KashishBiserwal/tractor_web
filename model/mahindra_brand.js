$(document).ready(function() {
    console.log("ready!");
    getTractorList();
});

function getTractorList() {
    var url = "http://192.168.1.41:8000/customer/get_new_tractor";
    console.log(url);

    $.ajax({
        url: url,
        type: "GET",
        success: function(data) {
            console.log(data, 'abc');
            var productContainer = $("#productContainer");

            if (data.product.allProductData && data.product.allProductData.length > 0) {
                data.product.allProductData.forEach(function (p) {
                    var newCard = `
                    <div class="item px-2 py-3 h-100 ">
                    <div class="h-auto success__stry__item shadow">
                        <div class="thumb">
                            <a href="Mahindra_575.php?id=${p.id}">
                                <div class="ratio ratio-16x9">
                                    <img src="${p.image_url}" class="object-fit-cover" alt="${p.description}">
                                </div>
                            </a>
                        </div>
                        <div class="content d-flex flex-column flex-grow-1 ">
                            <a href="${p.id}" class="text-decoration-none text-dark">
                                <h4 class="fw-bold mt-3 mx-3">${p.model}</h4>
                            </a>
                            <div class="row mt-1 ps-1">
                                <div class="col-12 col-lg-6 col-md-6 col-sm-6">
                                    <p class="ps-3"> <i class="fas fa-bolt"></i> ${p.hp_category} HP</p>
                                </div>
                                <div class="col-12 col-lg-6 col-md-6 col-sm-6">
                                    <p class="pe-5 me-4"> <i class="fa fa-cog" aria-hidden="true"></i> ${p.engine_capacity_cc} CC </p>
                                </div>
                            </div>
                            <a href="#" class="text-decoration-none text-dark pb-3 fw-bold">
                                <span class="p-3">
                                    Get On Road price
                                </span>
                                <span class="icon">
                                    <i class="fa-solid fa-chevron-right"></i>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
                    `;

                    // Append the new card to the container
                    productContainer.append(newCard);
                });

                // Initialize Owl Carousel after adding cards
                productContainer.owlCarousel({
                    items:3,
                    loop: true,
                    margin: 10,
                    responsiveClass: true,
                    responsive: {
                        0: {
                            items: 1,
                            nav: true
                        },
                        600: {
                            items: 3,
                            nav: false
                        },
                        1000: {
                            items: 3,
                            nav: true,
                            loop: false
                        }
                    }
                });
            }
        },
        error: function (error) {
            console.error('Error fetching data:', error);
        }
    });
}