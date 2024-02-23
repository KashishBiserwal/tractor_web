$(document).ready(function() {
    var allNews = []; // Array to store all news
    
    news_details_list(allNews);
});

function news_details_list(allNews) {
    var url = 'http://tractor-api.divyaltech.com/api/customer/news_details';

    $.ajax({
        url: url,
        type: "GET",
        success: function(data) {
            var productContainer = $("#productContainer");
            var loadMoreButton = $("#load_moretract");

            if (data.news_details && data.news_details.length > 0) {
                // Reverse the order of the news to display the latest ones first
                var reversedNews = data.news_details.slice().reverse();
                
                // Update the list of all news
                allNews = allNews.concat(reversedNews);
                
                // Display the latest 9 news items at the top in the opposite order
                displayNews(productContainer, reversedNews.slice(0, 9).reverse());

                // Show the "View All" button
                loadMoreButton.show();

                // Handle "View All" button click
                loadMoreButton.click(function() {
                    // Display all news items in the opposite order
                    displayNews(productContainer, allNews.reverse());
                    // Hide the "View All" button
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
    // Clear existing content
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
                            <img src="http://tractor-api.divyaltech.com/uploads/news_img/${a[0]}" class="engineoil_img  w-100" alt="img">
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
        
        // Use prepend to add the new news item at the beginning
        container.prepend(newCard);
    });
}
