
$(document).ready(function() {
    console.log("ready!");
    getTractorList();
});

function getTractorList() {
    var url = "http://192.168.1.41:8000/api/customer/get_new_tractor";
    // console.log(url);

    $.ajax({
        url: url,
        type: "GET",
        success: function(data) {
            // console.log(data, 'abc');
            // const new_data=data.product[0].filter((s)=>{ 
            //     if(s.tractor_type_value=="Latest"){
            //         return s;
            //     }
            // });
            var productContainer = $("#productContainer");

            if (data.product.allProductData && data.product.allProductData.length > 0) {
                data.product.allProductData.forEach(function (p) {
                    var newCard = `
                    <div class="col-12 col-lg-4 col-md-4 col-sm-4 mb-3">
                    <div class="h-auto success__stry__item d-flex flex-column shadow ">
                        <div class="thumb">
                            <a href="detail_tractor.php?product_id=${p.product_id}">
                                <div class="ratio ratio-16x9">
                                    <img src="${p.image_url}"  class="object-fit-cover " alt="${p.description}">
                                </div>
                            </a>
                        </div>
                        <div class="content d-flex flex-column flex-grow-1 ">
                            <div class="caption text-center">
                                <a href="detail_tractor.php?product_id=${p.product_id}" class="text-decoration-none text-dark">
                                    <p class="pt-3"><strong class="series_tractor_strong text-center h4 fw-bold ">${p.model}</strong></p>
                                </a>      
                            </div>
                            <div class="power text-center mt-2">
                                <div class="row ">
                                    <div class="col-12 col-lg-6 col-md-6 col-sm-6"><p class="text-dark ps-2"><i class="fas fa-bolt"></i>  ${p.hp_category}HP</p></div>
                                    <div class="col-12 col-lg-6 col-md-6 col-sm-6" style="padding-right: 32px;">
                                         <p id="adduser" type="" class="text-dark">
                                          <i class="fa-solid fa-gear"></i>  ${p.engine_capacity_cc} CC </p>
                                    </div>
                                </div>    
                            </div>
                            <div class="col-12">
                                <button id="adduser" type="button" class="add_btn btn-success w-100">
                                <i class="fa-regular fa-handshake"></i> Get on Road Price </button>
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