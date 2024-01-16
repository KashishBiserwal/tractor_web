$(document).ready(function() {
    console.log("ready!");
    getTractorList();
});
function getTractorList() {
    var url = "http://tractor-api.divyaltech.com/api/customer/get_haat_bazar";

    // Keep track of the total tractors and the currently displayed tractors
    var haat_bazar_data = 0;
    var displayedTractors = 6; // Initially display 6 tractors

    $.ajax({
        url: url,
        type: "GET",
        success: function(data) {
            var productContainer = $("#productContainer");
            var loadMoreButton = $("#load_more");

            if (data.allData.haat_bazar_data && data.allData.haat_bazar_data.length > 0) {
                haat_bazar_data = data.allData.haat_bazar_data.length;

                // Display the initial set of 6 tractors
                displaylist(data.allData.haat_bazar_data.slice(0, displayedTractors));

                if (haat_bazar_data <= displayedTractors) {
                    loadMoreButton.hide();
                } else {
                    loadMoreButton.show();
                }

                // Handle "Load More Tractors" button click
                loadMoreButton.click(function() {
                    // Display all tractors
                    displayedTractors = haat_bazar_data;
                    displaylist(data.allData.haat_bazar_data);

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


function displaylist(tractors) {
    var productContainer = $("#productContainer");
    var tableData = $("#tableData");
    // Clear existing content
    productContainer.html('');
    tableData.html('');

    
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

        var newCard = `
                    <div class="col-12 col-lg-4 col-md-4 col-sm-4 mb-3">
                    <div class="h-auto success__stry__item d-flex flex-column shadow">
                        <div class="thumb">
                            <a href="hatbzrbuy_inner.php?id=${p.haat_bazar_id}">
                                <div class="ratio ratio-16x9">
                                <img src="http://tractor-api.divyaltech.com/uploads/haat_bazar_img/${a[0]}" class="object-fit-cover" alt="${p.description}">
                                </div>
                            </a>
                        </div>
                        <div class="content d-flex flex-column flex-grow-1">
                            <div class="caption text-center">
                                <a href="hatbzrbuy_inner.php?id=${p.haat_bazar_id}" class="text-decoration-none text-dark">
                                    <p class="pt-3"><strong class="series_tractor_strong text-center h4 fw-bold ">${p.sub_category_name}</strong></p>
                                </a>      
                            </div>
                            <div class="power text-center mt-2">
                                <div class="row">
                                    <div class="col-12 col-lg-6 col-md-6 col-sm-6"><p class="text-dark ps-2"> ${p.haat_bazar_category_name}</p></div>
                                    <div class="col-12 col-lg-6 col-md-6 col-sm-6" style="padding-right: 32px;">
                                    <p class="text-success ps-2"><i class="fa fa-inr" aria-hidden="true"></i>
                                    ${p.price}/<span>  ${p.as_per}</span></p>
                                    </div>
                                </div>    
                            </div>
                            <div class="col-12">
                                            <p class=" text-center" id="district"><span id="engine_powerhp2"></span> ${p.district},<span id="year"> ${p.state}</span></p>
                                        </div>
                            <div class="col-12">
                                <button type="button" class="add_btn btn-success w-100" onclick="model_click()" data-bs-toggle="modal" data-bs-target="#used_tractor_callbnt_${p.product_id}">

                                <i class="fa-regular fa-handshake"></i> Contact Seller
                                </button>
                            </div>

                            <div class="modal fade" id="used_tractor_callbnt_${p.product_id}" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg modal-dialog-centered">
                              <div class="modal-content">
                                <div class="modal-header  modal_head">
                                  <h5 class="modal-title text-white ms-1" id="staticBackdropLabel">${p.model}</h5>
                                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <!-- MODAL BODY -->
                                <div class="modal-body">
                                <form  id="contact-seller-call" method="POST" onsubmit="return false">
                                    <div class="row">
                                        <div class="col-12 col-lg-6 col-md-6 col-sm-6">
                                            <label for="name" class="form-label fw-bold text-dark"> <i class="fa-brands fa-font-awesome"></i>  Brand Name</label>
                                            <select class="form-select py-2 " aria-label=".form-select-lg example" id="brandName" name="brandName">
                                           
                                            </select>
                                            
                                        </div>
                                        <div class="col-12 col-lg-6 col-md-6 col-sm-6 " hidden>
                                        <label for="name" class="form-label fw-bold text-dark"><i class="fa-duotone fa-chart-pie-simple"></i> Model Name</label>
                                        <input type="text" class="form-control" placeholder="Enter Your Name" id="enquiry_type_id" value="2" name="iduser">
                                    </div>
                                        <div class="col-12 col-lg-6 col-md-6 col-sm-6 ">
                                            <label for="name" class="form-label fw-bold text-dark"><i class="fa-duotone fa-chart-pie-simple"></i> Model Name</label>
                                            <input type="text" class="form-control" placeholder="Enter Your Name" id="modeName" name="modeName">
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
                                    <button type="submit" id="submit_enquiry" class="btn add_btn btn-success w-100 btn_all"onclick="savedata()" data-bs-dismiss="modal">Submit</button>
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

                // Add event listener for modal opening
    $(".add_btn").on("click", function () {
        var productId = $(this).data("product-id");
        $("#used_tractor_callbnt_" + productId).modal("show");
    });
        // Append the new card to the container
        productContainer.append(newCard);
      
       
    });
}
