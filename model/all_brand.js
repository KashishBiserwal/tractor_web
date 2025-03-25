$(document).ready(function() {
  getbrands();   
});
function getbrands() {
    var urlParams = new URLSearchParams(window.location.search);
    var Id = urlParams.get('brand_id');
    var url = "https://shopninja.in/bharatagri/api/public/api/customer/get_all_brands";
    var brandOrder = ['Mahindra', 'Swaraj', 'Sonalika', 'Tafe', 'Escorts', 'John Deere', 'Eicher', 'New Holland', 'Kubota', 'VST', 'Force', 'Preet', 'Indo Farm', 'Captain'];

    $.ajax({
        url: url,
        type: "GET",
        success: function(data) {
            var slider_head = $("#slider_head");
            var brandContainer = $("#brandContainer");
            brandOrder.forEach(function(brandName) {
                var brand = data.brands.find(brand => brand.brand_name === brandName);
                if (brand) {
                    var brandContainerHtml = `<div class="col-6 col-sm-6 col-md-2 col-lg-2 brand_section">
                        <a href="brands.php?brand_id=${brand.id}">
                            <div class="d-block ">
                                <img src="https://shopninja.in/bharatagri/api/public/uploads/brand_img/${brand.brand_img}">
                                <p>${brand.brand_name}</p>
                            </div>
                        </a>
                    </div>`;
                    brandContainer.append(brandContainerHtml);
                }
            });

            var captainIndex = brandOrder.indexOf('Captain');
            if (captainIndex !== -1) {
                var remainingBrands = data.brands.filter(brand => !brandOrder.includes(brand.brand_name));
                remainingBrands.forEach(function(brand) {
                    var brandContainerHtml = `<div class="col-6 col-sm-6 col-md-2 col-lg-2 brand_section">
                        <a href="brands.php?brand_id=${brand.id}">
                            <div class="d-block ">
                                <img src="https://shopninja.in/bharatagri/api/public/uploads/brand_img/${brand.brand_img}">
                                <p>${brand.brand_name}</p>
                            </div>
                        </a>
                    </div>`;
                    brandContainer.append(brandContainerHtml);
                });
            }
        },
        error: function(error) {
            console.error('Error fetching data:', error);
        }
    });
}