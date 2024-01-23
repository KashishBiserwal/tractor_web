$(document).ready(function() {
    news_details_list();
});

function news_details_list() {
    // var CustomerAPIBaseURL =CustomerAPIBaseURL;
    // url = CustomerAPIBaseURL + 'news_category';
    url = 'http://tractor-api.divyaltech.com/api/customer/news_details';

    // Keep track of the total tractors and the currently displayed tractors
    var totalEngineoil = 0;
    var displayedEngineoil = 8; // Initially display 6 tractors

    $.ajax({
        url: url,
        type: "GET",
        success: function(data) {
            var productContainer = $("#productContainer");
            var loadMoreButton = $("#load_moretract");

            if (data.news_details && data.news_details.length > 0) {
                totalEngineoil = data.news_details.length;

                // Display the initial set of 6 tractors
                displayEngineoil(data.news_details.slice(0, displayedEngineoil));

                if (totalEngineoil <= displayedEngineoil) {
                    loadMoreButton.hide();
                } else {
                    loadMoreButton.show();
                }

                // Handle "Load More Tractors" button click
                loadMoreButton.click(function() {
                    // Display all tractors
                    displayedEngineoil = totalEngineoil;
                    displayEngineoil(data.news_details);

                    // Hide the "Load More Tractors" button
                    loadMoreButton.hide();
                });
            }
        },
        error: function(error) {
            console.error('Error fetching data:', error);
        }
    });
}


function displayEngineoil(engineoil) {
    var productContainer = $("#productContainer");
    var tableData = $("#tableData");
    // Clear existing content
    productContainer.html('');
    tableData.html('');

    
    engineoil.forEach(function (p) {
        console.log(p,"ppp")
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
                </div> 
                    `;
                

  
    var myDiv = $('#description_id');
myDiv.text(myDiv.text().substring(0,120))
        // Append the new card to the container
        productContainer.append(newCard);
       
       
    });
}


//   function savedata(){
//     engineoil_enquiry();
//     console.log("confirm");
//     console.log("Form submitted successfully");
//   }