$(document).ready(function() {
    news_details_list();
});

function news_details_list() {
    // Extract 'id' parameter from the URL using plain JavaScript
    var productId = getParameterByName('category_id');

    console.log('fghjkl', productId);

    var url = "http://tractor-api.divyaltech.com/api/customer/get_news_by_news_category/" + productId;
    console.log(url);
    var totalNews = 0;
    var displayedNews = 8; 

    $.ajax({
        url: url,
        type: "GET",
        success: function(data) {
            var productContainer = $("#productContainer");
            var loadMoreButton = $("#load_moretract");

            if (data.news_details && data.news_details.length > 0) {
                totalNews = data.news_details.length;

                displayNews(data.news_details.slice(0, displayedNews));

                if (totalNews <= displayedNews) {
                    loadMoreButton.hide();
                } else {
                    loadMoreButton.show();
                }
                loadMoreButton.click(function() {
                    displayedNews = totalNews;
                    displayNews(data.news_details);
                    loadMoreButton.hide();
                });
            }
        },
        error: function(error) {
            console.error('Error fetching data:', error);
        }
    });
}

function getParameterByName(name) {
    var urlParams = new URLSearchParams(window.location.search);
    return urlParams.get(name);
}
function displayNews(news) {
    var productContainer = $("#productContainer");
    news.forEach(function (p) {
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
                        <a href="news_content.php?id=${p.id}">
                            <img src="http://tractor-api.divyaltech.com/uploads/news_img/${a[0]}" class="engineoil_img w-100" alt="img">
                        </a>
                    </div>
                    <div class="content mb-3 ms-3">
                        <button type="button" class="btn btn-warning mt-3">${p.news_category}</button>
                        <div class="row mt-2">
                            <p class="fw-bold">${p.news_headline}</p>
                        </div>
                        <a href="news_content.php?id=${p.id}" class="text-decoration-none pb-1">
                            <span class=""> Date/time-${p.date} </span>
                        </a>
                    </div>
                </div>
            </div> 
        `;
        // Append the new card to the container
        productContainer.append(newCard);
    });
}