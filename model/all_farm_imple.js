$(document).ready(function() {
    var allCards = []; 
    all_implement(allCards);
});

function all_implement(allCards) {
    var url = 'http://tractor-api.divyaltech.com/api/customer/all_implement_details';
    $.ajax({
        url: url,
        type: "GET",
        success: function(data) {
            var productContainer = $("#productContainer");
            var loadMoreButton = $("#load_moretract");
            if (data.getAllImplements && data.getAllImplements.length > 0) {
                var reversedCards = data.getAllImplements.slice().reverse();
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
                        <a href="farm_subcate_inner.php?id=${p.product_id}">
                            <img src="http://tractor-api.divyaltech.com/uploads/product_img/${a[0]}" class="engineoil_img  w-100" alt="img">
                        </a>
                    </div>
                    <div class="content d-flex flex-column flex-grow-1 ">
                        <div class="caption text-center">
                            <a href="#" class="text-decoration-none text-dark">
                                <p class="pt-3"><strong class="series_tractor_strong text-center h6 fw-bold ">${p.sub_category_name}</strong></p>
                            </a>      
                        </div>
                        <div class="row text-center">
                            <div class="col-6">
                                <p class="fw-bold ps-2 text-dark">${p.category_name}</p>
                            </div>
                            <div class="col-6">
                                <p class="fw-bold pe-2 text-dark">${p.brand_name}</p>
                            </div>
                        </div>
                        <div class=" bg-success">
                            <p class="text-white text-center pt-2">Power : 35 & Above</p>
                        </div>
                    </div>
                </div>
            </div>`;
        
        container.prepend(newCard);
    });
}
