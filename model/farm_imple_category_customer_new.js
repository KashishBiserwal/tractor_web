$(document).ready(function() {
    getList();
});

var allCards = [];
var cardsPerPage = 9; 
var cardsDisplayed = 0; 
function getList() {
    var urlParams = new URLSearchParams(window.location.search);
    editId_stateedit = urlParams.get('id');
    var url = "https://shopninja.in/bharatagri/api/public/api/customer/implement_details_by_category_id/"+editId_stateedit;
    
    $.ajax({
        url: url,
        type: "GET",
        success: function (data) {
            var productContainer = $("#productContainer");
            productContainer.empty();
            if (data.getAllImplements && data.getAllImplements.length > 0) {
                allCards = data.getAllImplements; 
                allCards.sort(function(a, b) {
                    return b.id - a.id;
                });
                allCards.slice(0, cardsPerPage).forEach(function (p) {
                    displayInitialCards(productContainer, p);
                    cardsDisplayed++;
                });
            
                if (allCards.length > cardsPerPage) {
                    $("#load_moretract").show();
                } else {
                    $("#load_moretract").hide();
                }
            } else {
                $("#load_moretract").hide();
            }
        },
        error: function (error) {
            console.error('Error fetching data:', error);
        }
    });
}

function displayInitialCards(productContainer, p) {
    document.getElementById('heading_imple').innerText=p.category_name;
    const brand_model = p.brand_name + " " + p.model;
                var cleanedString = p.sub_category_name.replace(/[^\w\s]/gi, '');
                var spacedString = cleanedString.replace(/_/g, ' ');
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
<div class="col-12 col-sm-6 col-md-4 col-lg-3 mt-2 mb-2">
    <div class="success__stry__item shadow h-100" style="border-radius: 10px; padding: 10px;">
        <div class="thumb">
            <a href="detail_implement.php?id=${p.product_id}">
                <img src="https://shopninja.in/bharatagri/api/public/uploads/product_img/${a[0]}" class="engineoil_img w-100" style="height:204px; padding:10px 13px;" alt="img" loading="lazy">
            </a>
        </div>
        <div class="text-center pt-2">
            <h5 class="fs-6 fs-sm-5 fs-md-4 fs-lg-3">${brand_model}</h5> <!-- Responsive font size -->
            <div class="row justify-content-center mb-2">
                <div class="col-6">
                    <p class="fw-bold text-center py-2" style="background-color: #E9F5FF; border-radius: 30px;">
                        ${p.category_name}
                    </p>
                </div>
                <div class="col-6">
                    <p class="fw-bold text-center py-2" id="subcategory" style="background-color: #E9F5FF; border-radius: 30px;">
                        ${spacedString}
                    </p>
                </div>
            </div>
            <a href="detail_implement.php?id=${p.product_id}" class="text-decoration-none">
                <div style="background-color: #B90405; border-radius: 10px; padding-bottom: 5px;">
                    <p class="text-white text-decoration-none pt-2 fs-6 fs-sm-5 fs-md-4 fs-lg-3">View Details</p> <!-- Responsive font size -->
                </div>
            </a>
        </div>
    </div>
</div>


`;
    productContainer.append(newCard);
}

$(document).on('click', '#load_moretract', function(){
    var productContainer = $("#productContainer");

    allCards.slice(cardsDisplayed, cardsDisplayed + cardsPerPage).forEach(function (p) {
        displayInitialCards(productContainer, p);  
        cardsDisplayed++;
    });
    if (cardsDisplayed >= allCards.length) {
        $("#load_moretract").hide();
    }
});






   