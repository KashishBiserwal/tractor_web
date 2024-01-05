$(document).ready(function() {
    console.log("ready!");
    getTractorList();
});

function getTractorList() {
    var url = "http://tractor-api.divyaltech.com/api/customer/tyre_data";

    // Keep track of the total tractors and the currently displayed tractors
    var totalTyre = 0;
    var displayedTractors = 0;

    $.ajax({
        url: url,
        type: "GET",
        success: function(data) {
            var productContainer = $("#productContainer");
         

            if (data.tyre_details && data.tyre_details.length > 0) {
                totalTyre = data.tyre_details.length;

                // Display the initial set of 6 tractors
                displayTractors(data.tyre_details.slice(0, 6));

                // Show the "Load More Tractors" button if there are more tractors
                if (totalTyre > 6) {
                    $("#load_moretract").show();
                }

                // Handle "Load More Tractors" button click
                $("#load_moretract").click(function() {
                    // Display all tractors
                    displayTractors(data.tyre_details);

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
    var tableData = $("#tableData");

    tractors.forEach(function(p) {
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
                                <div class="h-auto success__stry__item d-flex flex-column shadow ">
                                    <div class="thumb">
                                        <a href="tyre_inner.php?product_id=${p.id}">
                                            <div class="ratio ratio-16x9">

                                                <img src="http://tractor-api.divyaltech.com/uploads/tyre_img/${a[0]}" class="" alt="img">

                                            </div>
                                        </a>
                                    </div>
                                    <div class="content d-flex flex-column flex-grow-1 ">
                                        <div class="caption text-center">
                                            <a href="tyre_inner.php?product_id=${p.id}" class="text-decoration-none text-dark">
                                                <p class="pt-3"><strong
                                                        class="series_tractor_strong text-center h6 fw-bold ">${p.tyre_model}</strong></p>
                                            </a>
                                        </div>
                                        <div class="power">
                                            <a href="tyre_inner.php" class="text-decoration-none text-dark">
                                                <div class="row text-center ">
                                                    <div class="col-4 col-lg-4 col-md-4 col-sm-4">

                                                        <p class="text-dark ">${p.tyre_category}</p>
                                                    </div>
                                                    <div class="col-4 col-lg-4 col-md-4 col-sm-4">

                                                        <p class="text-dark"> ${p.tyre_position}</p>
                                                    </div>
                                                    <div class="col-4 col-lg-4 col-md-4 col-sm-4">

                                                        <p id="adduser" type="" class="text-dark">${p.tyre_size
                                                        }
                                                        </p>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-12">
                                            <button id="adduser" type="button" class="add_btn  btn-success w-100"
                                                data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                                                Get Price</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static"
                                    data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel"
                                    aria-hidden="true">
                                    <div class="modal-dialog modal-lg modal-dialog-centered">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title text-dark fw-bold" id="staticBackdropLabel">Fill
                                                    the form to Get Tyre Price MRF SHAKTI LIFE 13.6 - 28</h4>
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
                                                                        aria-label="Default select example"
                                                                        name="district" id="district">
                                                                        <option selected></option>
                                                                        <option value="1">name1</option>
                                                                        <option value="2">name2</option>
                                                                        <option value="3">name3</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="col-12 col-sm-12 col-md-4 col-lg-4 mt-4">
                                                                <div class="form-outline">
                                                                    <label class="form-label"
                                                                        for="taluka">Tehsil</label>
                                                                    <select class="form-select py-2"
                                                                        aria-label="Default select example"
                                                                        name="taluka" id="taluka">
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


                    `;

                   
       // Append the new card to the container
       productContainer.append(newCard);
    });
}