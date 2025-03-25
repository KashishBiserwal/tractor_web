$(document).ready(function() {
    var allNews = []; // Array to store all news
    
    news_details_list(allNews);
});

function news_details_list(allNews) {
    var url = 'https://shopninja.in/bharatagri/api/public/api/customer/news_details';

    $.ajax({
        url: url,
        type: "GET",
        success: function(data) {
            var productContainer = $("#productContainer");
            var loadMoreButton = $("#load_moretract");

            if (data.news_details && data.news_details.length > 0) {
                var reversedNews = data.news_details.slice().reverse();
                allNews = allNews.concat(reversedNews);
                displayNews(productContainer, reversedNews.slice(0, 9).reverse());
                loadMoreButton.show();
                loadMoreButton.click(function() {
                    displayNews(productContainer, allNews.reverse());
                    loadMoreButton.hide();
                });
            }
        },
        error: function(error) {
            console.error('Error fetching data:', error);
        }
    });
}

function displayNews(container, news) {
    container.html('');
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
                            <img src="https://shopninja.in/bharatagri/api/public/uploads/news_img/${a[0]}" class="engineoil_img  w-100" alt="img" loading="lazy">
                        </a>
                    </div>
                    <div class="content mb-3 ms-3">
                        <button type="button" class="btn btn-warning mt-3">${p.news_category} </button>
                        <div class="row mt-2">
                            <p class="fw-bold">${p.news_headline}</p>
                        </div>
                        <a href="news_content.php?id=${p.id}" class="text-decoration-none pb-1">
                            <span class=""> Date/time-${p.date} </span>
                        </a>
                    </div>
                </div>
            </div>`;
        
        container.prepend(newCard);
    });
}
