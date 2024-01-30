
$(document).ready(function() {
    console.log("ready!");
    getTractorList();
});



// function getTractorList() {
//     var url = "http://tractor-api.divyaltech.com/api/customer/get_new_tractor";
//     console.log(url);

//     $.ajax({
//         url: url,
//         type: "GET",
//         success: function(data) {
//             console.log(data, 'abc');
//             console.log('prachi',data.product.accessory_and_tractor_type[0].tractor_type_name);
//             let new_arr=[];
//             const new_data=data.product.accessory_and_tractor_type.filter((s)=>{ 
//                 const arr=s.tractor_type_name.split(',');
                
//                 console.log('arr',arr);
//                 if(arr.includes('Popular')){
//                     new_arr.push(s.product_id);
//                     // jisme upcoming tha uska product_id ko new arr me push
//                     return s.product_id;
//                 }
//             });
//             console.log('new_data',new_data);
//             console.log('new_arr',new_arr);
//             // if(new_data.product_id==)
//             var productContainer = $("#productContainer");
//             if (data.product.allProductData && data.product.allProductData.length > 0) {
//                 data.product.allProductData.forEach(function (p) {
//                     if(new_arr.includes(p.product_id)){
//                         // new aar me match aa rhi array 
//                         var images = p.image_names;
//                         var a = [];
    
//                         if (images) {
//                             if (images.indexOf(',') > -1) {
//                                 a = images.split(',');
//                             } else {
//                                 a = [images];
//                             }
//                         }
//                         var newCard = `
//                     <div class="col-12 col-lg-4 col-md-4 col-sm-4 mb-3">
//                     <div class="h-auto success__stry__item d-flex flex-column shadow ">
//                         <div class="thumb">
//                             <a href="${p.id}">
//                                 <div class="ratio ratio-16x9">
//                                     <img src="http://tractor-api.divyaltech.com/customer/uploads/product_img/${a[0]}"  class="object-fit-cover " alt="${p.description}">
//                                 </div>
//                             </a>
//                         </div>
//                         <div class="content d-flex flex-column flex-grow-1 ">
//                             <div class="caption text-center">
//                                 <a href="${p.id}" class="text-decoration-none text-dark">
//                                     <p class="pt-3"><strong class="series_tractor_strong text-center h4 fw-bold ">${p.model}</strong></p>
//                                 </a>      
//                             </div>
//                             <div class="power text-center mt-2">
//                                 <div class="row ">
//                                     <div class="col-12 col-lg-6 col-md-6 col-sm-6"><p class="text-dark ps-2"><i class="fas fa-bolt"></i>  ${p.hp_category}HP</p></div>
//                                     <div class="col-12 col-lg-6 col-md-6 col-sm-6" style="padding-right: 32px;">
//                                          <p id="adduser" type="" class="text-dark">
//                                           <i class="fa-solid fa-gear"></i>  ${p.engine_capacity_cc} CC </p>
//                                     </div>
//                                 </div>    
//                             </div>
//                             <div class="col-12">
//                                 <button id="adduser" type="button" class="add_btn btn-success w-100">
//                                 <i class="fa-regular fa-handshake"></i> Get on Road Price </button>
//                             </div>
//                         </div>
//                     </div>
//                 </div>
//                     `;

//                     // Append the new card to the container
//                     productContainer.append(newCard);
                
//                     }
//                     });

           
//             }
//         },
//         error: function (error) {
//             console.error('Error fetching data:', error);
//         }
//     });
// }
           

function getTractorList() {
    var url = "http://tractor-api.divyaltech.com/api/customer/get_new_tractor";

    // Keep track of the total tractors and the currently displayed tractors
    var totalTractors = 0;
    var displayedTractors = 0;

    $.ajax({
        url: url,
        type: "GET",
        success: function(data) {
            var productContainer = $("#productContainer");

            if (data.product.allProductData && data.product.allProductData.length > 0) {
                totalTractors = data.product.allProductData.length;

                // Display the initial set of 6 tractors
                displayTractors(data.product.allProductData.slice(0, 6));

                // Show the "Load More Tractors" button if there are more tractors
                if (totalTractors > 6) {
                    $("#load_moretract").show();
                }

                // Handle "Load More Tractors" button click
                $("#load_moretract").click(function() {
                    // Display all tractors
                    displayTractors(data.product.allProductData);

                    // Hide the "Load More Tractors" button
                    $("#load_moretract").hide();
                });
            }
        },
        error: function(error) {
            console.error('Error fetching data:', error);
        }
    });
}

function displayTractors(tractors) {
    var productContainer = $("#productContainer");

    tractors.forEach(function (p) {
        var images = p.image_names;
        var a = [];

        if (images) {
            if (images.indexOf(',') > -1) {
                a = images.split(',');
            } else {
                a = [images];
            }
        }
        var cardId = `card_${p.product_id}`; // Dynamic ID for the card
        var modalId = `used_tractor_callbnt_${p.product_id}`; // Dynamic ID for the modal
        var formId = `contact-seller-call_${p.product_id}`; 

        var newCard = `
                    <div class="col-12 col-lg-4 col-md-4 col-sm-4 mb-3"id="${cardId}">
                    <div class="h-auto success__stry__item d-flex flex-column shadow">
                        <div class="thumb">
                            <a href="detail_tractor.php?product_id=${p.product_id}">
                                <div class="ratio ratio-16x9">
                                <img src="http://tractor-api.divyaltech.com/uploads/product_img/${a[0]}" class="object-fit-cover" alt="${p.description}">
                                </div>
                            </a>
                        </div>
                        <div class="content d-flex flex-column flex-grow-1">
                            <div class="caption text-center">
                                <a href="detail_tractor.php?product_id=${p.product_id}" class="text-decoration-none text-dark">
                                    <p class="pt-3"><strong class="series_tractor_strong text-center h4 fw-bold ">${p.model}</strong></p>
                                </a>      
                            </div>
                            <div class="power text-center mt-2">
                                <div class="row">
                                    <div class="col-12 col-lg-6 col-md-6 col-sm-6"><p class="text-dark ps-2"><i class="fas fa-bolt"></i>  ${p.hp_category}HP</p></div>
                                    <div class="col-12 col-lg-6 col-md-6 col-sm-6" style="padding-right: 32px;">
                                         <p id="adduser" type="" class="text-dark">
                                          <i class="fa-solid fa-gear"></i>  ${p.engine_capacity_cc} CC </p>
                                    </div>
                                </div>    
                            </div>
                            <div class="col-12">
                                <button type="button" class="add_btn btn-success w-100" onclick="model_click()" data-bs-toggle="modal"  data-bs-target="#${modalId}">

                                <i class="fa-regular fa-handshake"></i> Get on Road Price
                                </button>
                            </div>

                            <div class="modal fade" id="${modalId}" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                <div class="modal-dialog modal-lg modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header  modal_head">
                                        <h5 class="modal-title text-white ms-1" id="staticBackdropLabel">${p.model}</h5>
                                        <button type="button" class="btn-close btn-success" data-bs-dismiss="modal" aria-label="Close"><img src="assets/images/close.png"></button>
                                        </div>
                                        <!-- MODAL BODY -->
                                        <div class="modal-body">
                                            <form  id="${formId}" method="POST" onsubmit="return false">
                                                <div class="row">
                                                    
                                                    <div class="col-12 col-lg-6 col-md-6 col-sm-6 " hidden>
                                                    <label for="name" class="form-label fw-bold text-dark"><i class="fa-duotone fa-chart-pie-simple"></i> product_id</label>
                                                    <input type="text" class="form-control" placeholder="Enter Your Name" id="product_id" value="${p.product_id}" name="">
                                                </div>
                                                    <div class="col-12 col-lg-6 col-md-6 col-sm-6 " hidden>
                                                    <label for="name" class="form-label fw-bold text-dark"><i class="fa-duotone fa-chart-pie-simple"></i> Model Name</label>
                                                    <input type="text" class="form-control" placeholder="Enter Your Name" id="enquiry_type_id" value="2" name="iduser">
                                                </div>
                                                   
                                                    <div class="col-12 col-sm-6 col-md-6 col-lg-6">
                                                        <label for="" class="form-label text-dark fw-bold"> <i class="fa-regular fa-user"></i> First Name</label>
                                                        <input type="text" class="form-control" placeholder="Enter Number" id="firstName" name="firstName">
                                                    </div>
                                                    <div class="col-12 col-sm-6 col-md-6 col-lg-6">
                                                        <label for="" class="form-label text-dark fw-bold"><i class="fa-regular fa-user"></i> Last Name</label>
                                                        <input type="text" class="form-control" placeholder="Enter Number" id="lastName" name="lastName">
                                                    </div>
                                                    <div class="col-12 col-sm-6 col-md-6 col-lg-6">
                                                        <label for="number" class="form-label text-dark fw-bold"><i class="fa fa-phone" aria-hidden="true"></i> Mobile Number</label>
                                                        <input type="text" class="form-control" placeholder="Enter Number" id="mobile_number" name="mobile_number">
                                                        <P class="text-danger">*Please make sure mobile no. must valid</p>
                                                    </div>
                                                    <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                                                        <label for="yr_state" class="form-label text-dark fw-bold"> <i class="fa-solid fa-location-dot"></i>  Select State</label>
                                                        <select class="form-select py-2 " aria-label=".form-select-lg example" id="state" name="state">
                                                            <option value>Select State</option>
                                                            <option value="Chhattisgarh">Chhattisgarh</option>
                                                            <option value="Other">Other</option>
                                                        </select>
                                                    </div>
                                                <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                                                    <label for="yr_dist" class="form-label text-dark"><i class="fa-solid fa-location-dot"></i> District</label>
                                                    <select class="form-select py-2 " aria-label=".form-select-lg example" id="district" name="district">
                                                        <option value>Select District</option>
                                                        <option value="Raipur">Raipur</option>
                                                        <option value="Bilaspur">Bilaspur</option>
                                                        <option value="Durg">Durg</option>
                                                    </select>
                                                </div>
                                                <div class="col-12 col-sm-6 col-md-6 col-lg-6">
                                                    <label for="yr_price" class="form-label text-dark">Tehsil</label>
                                                    <input type="text" class="form-control" placeholder="Enter Your Tehsil" id="Tehsil" name="Tehsil">
                                                </div>                          
                                                </div> 
                                            
                                
                                                <div class="modal-footer">
                                                <button type="submit" id="submit_enquiry" class="btn add_btn btn-success w-100 btn_all" onclick="savedata('${formId}')" data-bs-dismiss="modal">Submit</button>
                                                <!-- <a class="btn  text-primary" data-dismiss="modal">Ok</a> -->
                                                </div>      
                                            </form>                             
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                    `;

        // Append the new card to the container
        productContainer.append(newCard);
    });
}
