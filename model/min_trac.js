

$(document).ready(function() {
    console.log("ready!");
    getTractorList();
    get_allbrand();
});

function btndtl(id){
 alert(product_id);
};


function getTractorList() {
    var url = "http://192.168.1.41:8000/api/customer/get_new_tractor";
    console.log(url);

    $.ajax({
        url: url,
        type: "GET",
        success: function(data) {
            console.log(data, 'abc');
            console.log('prachi',data.product.accessory_and_tractor_type[0].tractor_type_name);
            let new_arr=[];
            const new_data=data.product.accessory_and_tractor_type.filter((s)=>{ 
                const arr=s.tractor_type_name.split(',');
                
                console.log('arr',arr);
                if(arr.includes('Mini')){
                    new_arr.push(s.product_id);
                    // jisme upcoming tha uska product_id ko new arr me push
                    return s.product_id;
                }
            });
            console.log('new_data',new_data);
            console.log('new_arr',new_arr);
            // if(new_data.product_id==)
            var productContainer = $("#productContainermini");
            if (data.product.allProductData && data.product.allProductData.length > 0) {
                data.product.allProductData.forEach(function (p) {
                    if(new_arr.includes(p.product_id)){
                        // new aar me match aa rhi array 
                        var newCard = `
                        <div class="col-12 col-lg-4 col-md-4 col-sm-4 mb-3">
                        <div class="h-auto success__stry__item d-flex flex-column shadow ">
                            <div class="thumb">
                                <a href="${p.id}">
                                    <div class="ratio ratio-16x9">

                                        <img src="${p.image_url}"
                                            class="object-fit-cover " alt="img">

                                    </div>
                                </a>
                            </div>
                            <div class="content d-flex flex-column flex-grow-1 ">
                                <div class="caption text-center">
                                    <a href="${p.id}" class="text-decoration-none text-dark">
                                        <p class="pt-3"><strong
                                                class="series_tractor_strong text-center h5 fw-bold ">${p.model}</strong></p>
                                    </a>
                                </div>
                                <div class="power">
                                    <a href="${p.id}" class="text-decoration-none text-dark">
                                        <div class="row ">
                                           
                                            <div class="col-6 col-lg-6 col-md-6 col-sm-6">
                                                <p class="text-dark"><i
                                                        class="fas fa-bolt mx-2"></i><span>${p.hp_category}</span> HP</p>
                                            </div>
                                          

                                            <div class="col-6 col-lg-6 col-md-6 col-sm-6">
                                                <p id="" type="" class="text-dark ">
                                                    <i class="fa-solid fa-gear mx-2"></i><span>${p.engine_capacity_cc}</span> CC
                                                </p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-12">
                                    <button id="" type="button" onclick="btndtl(${p.id})" class="add_btn btn  btn-success w-100"
                                        data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                                       Get On Road Price</button>
                                </div>
                            </div>
                        </div>
                        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static"
                            data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel"
                            aria-hidden="true">
                            <div class="modal-dialog modal-lg modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title text-dark fw-bold" id="staticBackdropLabel">Send
                                            Rental Enquiry Mahindra 575 DI XP Plus</h4>
                                    </div>
                                    <div class="modal-body">
                                        <div class="model-cont">
                                            <form id="hire_inner" name="hire_inner" method="post">
                                                <div class="row">
                                                    <div class="col-12 col-sm-12 col-md-4 col-lg-4 mt-4">
                                                        <div class="form-outline">
                                                            <label class="form-label" for="first_name">First
                                                                Name</label>
                                                            <input type="text" id="first_name" name="first_name"
                                                                class=" data_search form-control input-group-sm py-2" />
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-sm-12 col-md-4 col-lg-4 mt-4">
                                                        <div class="form-outline">
                                                            <label class="form-label" for="last_name">Last
                                                                Name</label>
                                                            <input type="text" id="last_name" name="last_name"
                                                                class=" data_search form-control input-group-sm py-2" />
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-sm-12 col-md-4 col-lg-4 mt-4">
                                                        <div class="form-outline">
                                                            <label class="form-label" for="mobile_number">Mobile
                                                                Number</label>
                                                            <input type="text" id="mobile_number"
                                                                name="mobile_number"
                                                                class=" data_search form-control input-group-sm py-2" />
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-sm-12 col-md-4 col-lg-4 mt-4">
                                                        <div class="form-outline">
                                                            <label class="form-label" for="state">State</label>
                                                            <select class="form-select py-2"
                                                                aria-label="Default select example" id="state"
                                                                name="state">
                                                                <option selected></option>
                                                                <option value="1">New Tractor Loan</option>
                                                                <option value="2">Used Tractor Loan,</option>
                                                                <option value="3">Loan Against Tractor</option>
                                                                <option value="4">Harvester Loan</option>
                                                                <option value="5">Used Harvester Loan</option>
                                                                <option value="6">Implement Loan</option>
                                                                <option value="7">Personal Loan</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-sm-12 col-md-4 col-lg-4 mt-4">
                                                        <div class="form-outline">
                                                            <label class="form-label"
                                                                for="district">District</label>
                                                            <select class="form-select py-2"
                                                                aria-label="Default select example" name="district"
                                                                id="district">
                                                                <option selected></option>
                                                                <option value="1">name1</option>
                                                                <option value="2">name2</option>
                                                                <option value="3">name3</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-sm-12 col-md-4 col-lg-4 mt-4">
                                                        <div class="form-outline">
                                                            <label class="form-label" for="taluka">Tehsil</label>
                                                            <select class="form-select py-2"
                                                                aria-label="Default select example" name="taluka"
                                                                id="taluka">
                                                                <option selected></option>
                                                                <option value="1">name1</option>
                                                                <option value="2">name2</option>
                                                                <option value="3">name3</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">Close</button>
                                        <button type="button" id="button_hire"
                                            class="btn btn-danger">Request</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
                <div class="col-12 text-center mt-3 mb-4 pt-2 ">
                    <button id="adduser2" type="button" class="add_btn btn btn-success">
                        <i class="fas fa-undo"></i> Load More tractors</button>
                </div>
            </div>
                    `;

                    // Append the new card to the container
                    productContainer.append(newCard);
                
                    }
                    });

           
            }
        },
        error: function (error) {
            console.error('Error fetching data:', error);
        }
    });
}



function get_allbrand() {
    var url = "http://192.168.1.41:8000/api/customer/getBrands";
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
            var productContainer = $("#brandcontainer");

            if (data.brands && data.brands.length > 0) {
                data.brands.forEach(function (b) {
                    var newCard = `
                    <div class="col-12 col-md-3 col-lg-3 col-sm-3">
                        <div class="tjcol states-block">
                            <div class="brand-main box-shadow mt-2 text-center">
                                <a class="weblink text-decoration-none text-dark" href="#" title="Sonalika Old Tractors">
                                <img class="img-fluid w-50" src="${b.image_url}" data-src="h" alt="Logo">
                                <p class="mb-0 oneline">${b.model}</p>
                                </a>
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




