$(document).ready(function() {
    console.log("ready!");
    getoldTractorList();
});

function getoldTractorList() {
    var url = "http://tractor-api.divyaltech.com/api/customer/get_old_tractor";
    // console.log(url);

    $.ajax({
        url: url,
        type: "GET",
        success: function(data){
            console.log(data, 'abc');
            var productContainer = $("#productContainer");

            if (data.product && data.product.length > 0) {
                data.product.forEach(function (p) {
                    console.log(p,"pp");
                    var newCard = `
                        <div class="col-12 col-lg-4 col-md-4 col-sm-4 mb-4">
                            <div class="h-auto success__stry__item d-flex flex-column shadow ">
                                <div class="thumb">
                                    <a href="farmtrac_60.php?product_id=${p.product_id}">
                                        <div class="ratio ratio-16x9">
                                            <img src="${p.image_url}" class="object-fit-cover " alt="${p.description}">
                                        </div>
                                    </a>
                                </div>
                                <div class="content d-flex flex-column flex-grow-1 ">
                                    <div class="caption text-center">
                                        <a href="farmtrac_60.php?product_id=${p.product_id}" class="text-decoration-none text-dark">
                                            <p class="pt-3"><strong class="series_tractor_strong text-center h4 fw-bold ">${p.model}</strong></p>
                                        </a>      
                                    </div>
                                    <div class=" row">
                                        <div class="col-12 ms-2 ">
                                            <p class="" id="district"><span id="engine_powerhp2">${p.hp_category}</span> | <span id="year">${p.purchase_year}</span>| ${p.district}</p>
                                        </div>
                                    </div>
                                    <div class="row text-center">
                                        <div class="col-12 col-sm-6 col-md-6 col-lg-6">
                                            <p class="fw-bold ">Price: ₹<span id="price">${p.price}</p>
                                        </div>
                                        <div class="col-12 col-sm-6 col-md-6 col-lg-6">
                                            <p class="fw-bold pe-2">Great Deal  <i class="fa-regular fa-thumbs-up"></i></p>
                                        </div>
                                    </div>
                                </div>
                                <div class=" row state_btn">
                                    <div class="col-12 ">
                                        <button  type ="button" class="btn-success w-100 p-2 rounded-3 text-decoration-none  text-center" data-bs-toggle="modal" data-bs-target="#used_tractor_callbnt"><i class="fa-solid fa-phone pe-2"></i>Call Now</button> 
                                    </div>
                                </div>
                            </div>
                        </div>
                    `;
                    // Append the new card to the container
                    productContainer.append(newCard);
                });

              
                
            }
        },
        error: function (error) {
            console.error('Error fetching data:', error);
        }
    });
}

