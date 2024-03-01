


$(document).ready(function() {

    getbrands();


    
});
function getbrands(){
    var urlParams = new URLSearchParams(window.location.search);
    var Id = urlParams.get('brand_id');
    var url = "http://tractor-api.divyaltech.com/api/customer/get_all_brands";
    console.log(url);

    $.ajax({
        url: url,
        type: "GET",
        success: function(data) {
            console.log(data, 'abc');
            var slider_head = $("#slider_head");
            var brandContainer = $("#brandContainer");

            if (data.brands && data.brands.length > 0) {
                data.brands.forEach(function (p) {
                    if(p.id == Id){
                    console.log(p,"pp");
                    var silder_heading = ` <h1 class="d3 mb-0 text-white display-5 fw-bold">${p.brand_name}</h1>`;
                  

                    // Append the new card to the container
                    slider_head.append(silder_heading);
                    }
                  

                    var brand_container = `<div class="col-6 col-sm-6 col-md-2 col-lg-2 brand_section">
                    <a href="brands.php?brand_id=${p.id}"><div class="d-block ">
                        <img src="http://tractor-api.divyaltech.com/uploads/brand_img/${p.brand_img}">
                        <p>${p.brand_name}</p>
                    </div></a>
                </div>`;
                  

                    brandContainer.append(brand_container);
                });


                // Initialize Owl Carousel after adding cards
              
            }
        },
        error: function (error) {
            console.error('Error fetching data:', error);
        }
    });
}