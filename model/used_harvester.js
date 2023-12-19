
$(document).ready(function() {
    console.log("ready!");
    get_old_harvester();
});

function get_old_harvester() {
    var url = "http://tractor-api.divyaltech.com/api/customer/get_old_harvester";
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
            var productContainer = $("#productContainerharvester");

            if (data.product && data.product.length > 0) {
                data.product.forEach(function (p) {
                    console.log('tdfds',p);
                    // var images= p.image_names;
                    // if(images && images.indexOf(',')>-1){
                    //     var a = images.split(',')
                    //     // console.log('imagelength',a.length);
                    // }else{
                    //     var a = images;
                    //     // console.log('imagelength',images.length);

                    // }
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
                    <div class="col-12 col-lg-4 col-md-4 col-sm-4 mt-3 ">

                        <div class="h-auto success__stry__item d-flex flex-column shadow">
                            <div class="thumb">
                                <a href="used_harvester_inner.php?id=${p.product_id}">
                                    <div class="ratio ratio-16x9">
                                        <img src="http://tractor-api.divyaltech.com/customer/uploads/product_img/${a[0]}" class="object-fit-cover " alt="img">
                                    </div>
                                </a>
                            </div>
                            <div class="content d-flex flex-column flex-grow-1 ">
                                <div class="caption text-center">
                                    <a href="used_harvester_inner.php?id=${p.product_id}" class="text-decoration-none text-dark">
                                        <p class="pt-1"><strong class="series_tractor_strong text-center h4 fw-bold ">${p.model}</strong></p>
                                    </a>      
                                </div>
                                <div class="power text-center">
                                    <div class="row ">
                                        <div class="col-12 col-lg-6 col-md-6 col-sm-6"><p class="text-success ps-2">Price : ₹ <span>${p.price}</span></p></div>
                                        <div class="col-12 col-lg-6 col-md-6 col-sm-6" style="padding-right: 32px;">
                                             <p id="adduser" type="" class=" rounded-3"> Year : <span>${p.purchase_year}</span></p>
                                        </div>
                                    </div>  
                                    <div class="col-12 text-center">
                                        <p class="text-dark fw-bold">Hours : 8001 - 9000</p>
                                    </div>  
                                </div>
                            </div>
                            <div class="col-12">
                                <button type="button" id="adduser"class="btn-state btn-success w-100 text-decoration-none px-2 w-100"><span>${p.district}</span>, <span><span>${p.state}</span></span></a>
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