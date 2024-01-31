$(document).ready(function() {
    console.log("ready!");
    
    $('#filter_tractor').click(filter_search);
});

    var cardsPerPage = 6; // Number of cards to show initially
    var cardsDisplayed = 0; // Counter to keep track of the number of cards displayed
    var allCards; // Variable to store all cards

    function getTractorList() {
        var url = "http://tractor-api.divyaltech.com/api/customer/hire_data";
        

        $.ajax({
            url: url,
            type: "GET",
            success: function (data) {
                var productContainer = $("#productContainer");
                // Clear the existing content in the container
                productContainer.empty();

                if (data.hire_details && data.hire_details.length > 0) {
                    allCards = data.product; 
                
                    allCards.sort(function(a, b) {
                        return b.id - a.id;
                    });
                
                    // Display all cards
                    allCards.slice(0, cardsPerPage).forEach(function (p) {
                        appendCard(productContainer, p);
                        cardsDisplayed++;
                    });
                
                    if (allCards.length > cardsPerPage) {
                        $("#loadMoreBtn").show();
                    } else {
                        $("#loadMoreBtn").hide();
                    }
                } else {
                    // Hide the "Load More" button if there are no cards
                    $("#loadMoreBtn").hide();
                }
            },
            error: function (error) {
                console.error('Error fetching data:', error);
            }
        });
    }
    function appendCard(container, p) {
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
        var formId = `hire_inner${p.product_id}`; // Dynamic ID for the form

        var newCard = `
        <div class="col-12 col-lg-4 col-md-6 col-sm-6 mb-3"id="${cardId}">
        <div class="h-auto success__stry__item d-flex flex-column shadow ">
            <div class="thumb">
                <a href="hire_inner.php">
                    <div class="ratio ratio-16x9">

                        <img src="assets/images/575-di-xp-plus-1632207330.webp"
                            class="object-fit-cover " alt="img">

                    </div>
                </a>
            </div>
            <div class="content d-flex flex-column flex-grow-1 ">
                <div class="caption text-center">
                    <a href="hire_inner.php" class="text-decoration-none text-dark">
                        <p class="pt-3 " style="font-size: 17px;"><strong
                                class="series_tractor_strong text-center fw-bold ">Mahindra 575
                                DI XP Plus</strong></p>
                    </a>
                </div>
                <div class="power">
                    <a href="hire_inner.php" class="text-decoration-none text-dark">
                        <div class="row text-center">
                            <div class=" col-4 col-md-4 col-lg-4 col-sm-4">
                                <p class="text-dark custom-font-size fw-bold"> <i
                                        class="fa-solid fa-indian-rupee-sign"></i> 30/Acre</p>
                            </div>
                            <div class="col-4 col-md-4 col-lg-4 col-sm-4">
                                <p class="text-dark custom-font-size fw-bold"> <i
                                        class="fas fa-bolt "></i> 47 HP</p>
                            </div>

                            <div class=" col-4 col-md-4 col-lg-4 col-sm-4">
                                <p class="text-dark custom-font-size fw-bold"><i
                                        class="fa-solid fa-gear"></i> 2979 CC</p>
                            </div>
                        </div>
                        <div class="row text-center fw-bold text-primary">
                            <div class=" col-12 mb-2">
                                Dhamtari,Chhattisgarh
                            </div>

                        </div>
                    </a>
                </div>
                <div class="col-12">
                        <button type="button" class="add_btn btn-success w-100" data-bs-toggle="modal" data-bs-target="#${modalId}">
                Send Enquiry </button>
                </div>
                
            </div>
        </div>
        <div class="modal fade" id="${modalId}" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-dialog modal-lg modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title text-dark fw-bold" id="staticBackdropLabel">Send
                            Rental Enquiry Mahindra 575 DI XP Plus</h4>
                            <button type="button" class="btn-close btn-success" data-bs-dismiss="modal" aria-label="Close"><img src="assets/images/close.png" class="w-25"></button>
                    </div>
                    <div class="modal-body">
                        <div class="model-cont">
                         <form id="${formId}" method="POST" onsubmit="return false">
                                <div class="row">
                                    <div class="col-12 col-sm-12 col-md-4 col-lg-4 mt-4">
                                        <div class="form-outline">
                                            <label class="form-label" for="first_name"><i
                                                    class="fa-regular fa-user"></i> First
                                                Name</label>
                                            <input type="text" id="first_name" name="first_name"
                                                class=" data_search form-control input-group-sm py-2" />
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-12 col-md-4 col-lg-4 mt-4">
                                        <div class="form-outline">
                                            <label class="form-label" for="last_name"><i
                                                    class="fa-regular fa-user"></i> Last
                                                Name</label>
                                            <input type="text" id="last_name" name="last_name"
                                                class=" data_search form-control input-group-sm py-2" />
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-12 col-md-4 col-lg-4 mt-4">
                                        <div class="form-outline">
                                            <label class="form-label" for="mobile_number"> <i
                                                    class="fa fa-phone" aria-hidden="true"></i>
                                                Mobile
                                                Number</label>
                                            <input type="text" id="mobile_number"
                                                name="mobile_number"
                                                class=" data_search form-control input-group-sm py-2" />
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-12 col-md-4 col-lg-4 mt-4">
                                        <div class="form-outline">
                                            <label class="form-label" for="state"> <i
                                                    class="fas fa-location"></i>

                                                State</label>
                                            <select class="form-select py-2"
                                                aria-label="Default select example" id="state"
                                                name="state">
                                                <option selected disabled>Select State </option>
                                                <option value="chhattisgarh">Chhattisgarh</option>
                                                <option value="others">Others</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-12 col-md-4 col-lg-4 mt-4">
                                        <div class="form-outline">
                                            <label class="form-label" for="district"> <i
                                                    class="fa-solid fa-location-dot"></i>
                                                District</label>
                                            <select class="form-select py-2"
                                                aria-label="Default select example" name="district"
                                                id="district">
                                                <option selected disabled>Select District</option>
                                                <option value="raipur">Raipur</option>
                                                <option value="bilaspur">Bilaspur</option>
                                                <option value="ambikapur">Ambikapur</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-12 col-md-4 col-lg-4 mt-4">
                                        <div class="form-outline">
                                            <label class="form-label" for="taluka">Tehsil</label>
                                            <select class="form-select py-2"
                                                aria-label="Default select example" name="taluka"
                                                id="taluka">
                                                <option selected disabled>Select Tehsil</option>
                                                <option value="raipur">Raipur</option>
                                                <option value="bilaspur">Bilaspur</option>
                                                <option value="ambikapur">Ambikapur</option>
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
                        <button type="button" onclick="savedata('${formId}')" id="button_hire"
                            class="btn btn-danger">Request</button>
                            
                    </div>
                </div>
            </div>
        </div>
    </div>

        `;
        container.append(newCard);
    }
    $(document).on('click', '#loadMoreBtn', function(){
        var productContainer = $("#productContainer");

        allCards.slice(cardsDisplayed, cardsDisplayed + cardsPerPage).forEach(function (p) {
            appendCard(productContainer, p);
            cardsDisplayed++;
        });

        // Hide the "Load More" button if all cards are displayed
        if (cardsDisplayed >= allCards.length) {
            $("#loadMoreBtn").hide();
        }
    });

    getTractorList();