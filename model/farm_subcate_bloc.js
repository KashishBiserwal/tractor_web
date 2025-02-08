$(document).ready(function() {
    var allCards = []; 
    subcate(allCards);
});

function subcate(allCards) {
    var urlParams = new URLSearchParams(window.location.search);
    editId_stateedit = urlParams.get('id');
    var url = 'http://tractor-api.divyaltech.com/api/customer/implement_details_by_sub_category_id/'+editId_stateedit;

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
                            <img src="http://tractor-api.divyaltech.com/uploads/blog_img/${a[0]}" class="engineoil_img  w-100" alt="img" loading="lazy">
                        </a>
                    </div>
                    <div class="content mb-3 ms-3">
                        <button type="button" class="btn btn-warning mt-3">${p.blog_category} </button>
                        <div class="row mt-2">
                            <p class="fw-bold">${p.heading}</p>
                        </div>
                        <div class="row">
                            <p class="fw-bold"><span>publisher: </span>${p.publisher}</p>
                        </div>
                        <a href="blog_customer_inner.php?id=${p.id}" class="text-decoration-none pb-1">
                            <span class=""> Date/time-${p.date} </span>
                        </a>
                    </div>
                </div>
            </div>`;
    
        container.prepend(newCard);
    });
}
