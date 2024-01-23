$(document).ready(function() {
    get_certifieddealers();
   
});

function get_certifieddealers() {
    var url = CustomerAPIBaseURL + 'get_dealer_enquiry_data';

    // Keep track of the total tractors and the currently displayed tractors
    var totalnursery = 0;
    var displayednursery = 12; // Initially display 6 tractors

    $.ajax({
        url: url,
        type: "GET",
        success: function(data) {
            var productContainer = $("#productContainer");
            var loadMoreButton = $("#load_moretract");

            if (data.dealer_enquiry_details && data.dealer_enquiry_details.length > 0) {
                totalEngineoil = data.dealer_enquiry_details.length;

                // Display the initial set of 6 tractors
                displaydealer(data.dealer_enquiry_details.slice(0, displayednursery));

                if (totalnursery <= displayednursery) {
                    loadMoreButton.hide();
                } else {
                    loadMoreButton.show();
                }

                // Handle "Load More Tractors" button click
                loadMoreButton.click(function() {
                    // Display all tractors
                    displayednursery = totalnursery;
                    displaydealer(data.dealer_enquiry_details);

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


function displaydealer(dealer) {
    var productContainer = $("#productContainer");
    var tableData = $("#tableData");
    productContainer.html('');
    tableData.html('');

    
    dealer.forEach(function (p) {
        var images = p.image_names;
        var a = [];

        if (images) {
            if (images.indexOf(',') > -1) {
                a = images.split(',');
            } else {
                a = [images];
            }
        }

       
        var newCard = `   <div class="col-12 col-sm-3 col-md-3 col-lg-3 px-2 py-3 h-100">
                            <div class="h-auto success__stry__item d-flex flex-column shadow ">
                                <div class="thumb" >
                                    <a href="certified_dealers_inner.php?id=${p.id}">
                                    <div class="ratio ratio-16x9">
                                        <img src="http://tractor-api.divyaltech.com/uploads/dealer_img/${a[0]}" class="object-fit-cover " alt="img">
                                    </div>
                                    </a>            
                                </div>
                                <div class="position-absolute" >
                                    <p class="rounded-pill bg-warning text-center px-2 mt-1">Certified</p>
                                </div>
                                <div class="">
                                    <a href="certified_dealers_inner.php?id=${p.id}" class="text-decoration-none text-dark">
                                    <h5 class="fw-bold text-center mt-3 mx-3">${p.dealer_name}</h5>
                                    </a> 
                                    <div class="col-12 col-lg-12 col-md-12 col-sm-12">
                                    <p class=" text-center text-dark fw-bold ps-3">${p.brand_name} <span>Dealer</span></p>
                                    </div>              
                                    <div class="justify-content-center  d-flex">
                                    <button typt="button" class="btn btn-success w-100">Rangareddy, Telangana</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    `;
                

  
//     var myDiv = $('#description_id');
// myDiv.text(myDiv.text().substring(0,120))
        // Append the new card to the container
        productContainer.append(newCard);
       
       
    });
}
