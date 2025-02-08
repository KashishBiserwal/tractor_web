
var cardsPerPage = 6;
var allCards = [];
var cardsDisplayed = 0;
$(document).ready(function() {
    console.log("ready!");
    get_harvester();
    $('#filter_tractor').click(filter_search);
    showOverlay(); 
});
function showOverlay() {
    $("#overlay").fadeIn(300);
}
function hideOverlay() {
    $("#overlay").fadeOut(300);
}
function get_harvester() {
    var url = "http://tractor-api.divyaltech.com/api/customer/get_new_harvester";
    $.ajax({
        url: url,
        type: "GET",
        success: function (data) {
            var productContainer = $("#productContainer");
            productContainer.empty();
            if (data.product && data.product.length > 0) {
                var reversedCards = data.product.slice().reverse();
                reversedCards.slice(0, cardsPerPage).forEach(function (p) {
                    prependCard(productContainer, p);
                    cardsDisplayed++;
                });
                allCards = reversedCards;
                if (allCards.length > cardsPerPage) {
                    $("#loadMoreBtn").show();
                } else {
                    $("#loadMoreBtn").hide();
                }
            } else {
                $("#loadMoreBtn").hide();
            }
        },
        error: function (error) {
            console.error('Error fetching data:', error);
        },
        complete: function () {
            hideOverlay();
        },
    });
}
    function prependCard(container, p) {
        var images = p.image_names;
        var a = [];
        const name = p.brand_name +" "+p.model;

        if (images) {
            if (images.indexOf(',') > -1) {
                a = images.split(',');
            } else {
                a = [images];
            }
        }
        var newCard = `
        <div class="col-12 col-lg-4 col-md-4 col-sm-4 mb-4">
            <a href="harvester_inner.php?product_id=${p.id}" class="h-auto success__stry__item d-flex flex-column text-decoration-none shadow">
                <div class="thumb">
                    <div>
                        <img src="http://tractor-api.divyaltech.com/uploads/product_img/${a[0]}" class="engineoil_img object-fit-cover w-100" h-100" alt="harvester_img" loading="lazy">
                    </div>
                </div>
                <div class="position-absolute" >
                    <p  style="font-size:13px;" class="rounded-pill bg-success text-white ms-1 text-center px-2 mt-1">${p.power_source_value}</p>
                </div>
                <div class="content d-flex flex-column flex-grow-1 ">
                    
                    <div class="power text-center mt-3">
                    <div class="row text-center">
                        <div class="col-12 text-center">
                            <p class="fw-bold pe-3 text-primary text-truncate">${name}</p>
                        </div>
                    </div>
                        <div class="row ">
                            <div class="col-12 "><p class="text-dark ps-2">Cutting Width : ${p.cutting_bar_width} Feet</p></div>
                            
                        </div>    
                    </div>
                </div>
                <div class="col-12 btn-success">
                    <button type="button" class="btn btn-success py-2 w-100"></i> 
                    Power : ${p.horse_power} HP
                    </button>
                </div>
            </a>
        </div>
        `;
        container.append(newCard);
    }
    $(document).on('click', '#loadMoreBtn', function () {
        var productContainer = $("#productContainer");
    
        var nextCards = allCards.slice(cardsDisplayed, cardsDisplayed + cardsPerPage);
    
        nextCards.forEach(function (p) {
            prependCard(productContainer, p);
            cardsDisplayed++;
        });
    
        if (cardsDisplayed >= allCards.length) {
            $("#loadMoreBtn").hide();
        }
    });

var filteredCards = [];
var cardsDisplayed = 0;
var cardsPerPage = 6; 

function filter_search() {
    var checkboxes = $(".budget_checkbox:checked");
    var checkboxes2 = $(".hp_checkbox:checked");
    var checkboxesBrand = $(".brand_checkbox:checked");
    var checkboxesPower = $(".checkbox_power:checked");

    var selectedCheckboxValues = checkboxes.map(function () {
        return $(this).val();
    }).get();

    var selectedCheckboxValues2 = checkboxes2.map(function () {
        return $(this).val();
    }).get();

    var selectedBrand = checkboxesBrand.map(function () {
        return $(this).val();
    }).get();
    var selectedPower = checkboxesPower.map(function () {
        return $(this).val();
    }).get();
    var paraArr = {
        'brand_id': JSON.stringify(selectedBrand),
        'price_ranges': JSON.stringify(selectedCheckboxValues),
        'horse_power_ranges': JSON.stringify(selectedCheckboxValues2),
        'power_source_value': JSON.stringify(selectedPower),
    };

    var url = 'http://tractor-api.divyaltech.com/api/customer/get_new_harvester_by_filter';
    $.ajax({
        url: url,
        type: 'POST',
        data: paraArr,
        headers: {
            'Authorization': 'Bearer ' + localStorage.getItem('token')
        },
        success: function (searchData) {
            var filterContainer = $("#productContainer");
            filterContainer.empty();

            if (searchData.product.length > 0) {
                searchData.product.forEach(function (filter) {
                    appendFilterCard(filterContainer, filter);
                });
                $("#noDataMessage").hide();
            } else {
                $("#noDataMessage").show();
                $("#loadMoreBtn").hide();
            }
        },
        error: function (error) {
            console.error('Error searching for brands:', error);
        },
        complete: function () {
            hideOverlay();
        },
    });
}

function appendFilterCard(filterContainer, filter) {
    function appendCard(container, p) {
        var images = p.image_names;
        var a = [];
        const name = p.brand_name +" "+p.model;
        if (images) {
            if (images.indexOf(',') > -1) {
                a = images.split(',');
            } else {
                a = [images];
            }
        }
        var newCard = `
        <div class="col-12 col-lg-4 col-md-4 col-sm-4 mb-4">
        <a href="harvester_inner.php?product_id=${p.id}" class="h-auto success__stry__item d-flex flex-column text-decoration-none shadow">
            <div class="thumb">
                <div>
                    <img src="http://tractor-api.divyaltech.com/uploads/product_img/${a[0]}" class="engineoil_img object-fit-cover w-100" h-100" alt="harvester_img" loading="lazy">
                </div>
            </div>
            <div class="position-absolute" >
                <p  style="font-size:13px;" class="rounded-pill bg-success text-white ms-1 text-center px-2 mt-1">${p.power_source_value}</p>
            </div>
            <div class="content d-flex flex-column flex-grow-1 ">
                
                <div class="power text-center mt-3">
                <div class="row text-center">
                    <div class="col-12 text-center">
                        <p class="fw-bold pe-3 text-primary">${name}</p>
                    </div>
                </div>
                    <div class="row ">
                        <div class="col-12 "><p class="text-dark ps-2">Cutting Width : ${p.cutting_bar_width} Feet</p></div>
                        
                    </div>    
                </div>
            </div>
            <div class="col-12 btn-success">
                <button type="button" class="btn btn-success py-2 w-100"></i> 
                Power : ${p.horse_power} HP
                </button>
            </div>
        </a>
    </div> `;
        container.append(newCard);
    }

    function displayNextSet() {
        var productContainer = $("#productContainer");
        filteredCards.slice(cardsDisplayed, cardsDisplayed + cardsPerPage).forEach(function (p) {
            appendCard(productContainer, p);
            cardsDisplayed++;
        });
        if (cardsDisplayed >= filteredCards.length) {
            $("#loadMoreBtn").hide();
        }
    }
    
    $(document).on('click', '#loadMoreBtn', function () {
        displayNextSet();
    });
    appendCard(filterContainer, filter);
    displayNextSet();
}
var noDataMessage = $("#noDataMessage");
noDataMessage.hide();

function get_lookup() {
    var url = 'http://tractor-api.divyaltech.com/api/customer/getLookupData';
    $.ajax({
        url: url,
        type: "GET",
        headers: {
            'Authorization': 'Bearer ' + localStorage.getItem('token')
        },
        success: function (data) {
            var powerSourceDiv = $("#POWER_SOURCE");
            var filteredData = data.data.filter(item => item.name === "POWER_SOURCE");
            for (var i = 0; i < filteredData.length; i++) {
                var checkboxId = "powerSourceCheckbox" + i;
                var label = '<label for="' + checkboxId + '" class="ps-2 fs-6" style="margin-top:-8px;">' + filteredData[i].lookup_data_value + '</label><br />';
                var checkbox = '<input type="checkbox"  id="' + checkboxId + '" class="checkbox-round  mt-1 ms-3 checkbox_power " value="' + filteredData[i].id + '"/>';

                powerSourceDiv.append('<div class="d-flex"   >' + checkbox + label + '</div>');
            }
        },
        error: function (error) {
            console.error('Error fetching data:', error);
        }
    });
}
get_lookup();

function get() {
    var url = 'http://tractor-api.divyaltech.com/api/customer/get_brand_by_product_id/'+4;
    $.ajax({
        url: url,
        type: "GET",
        headers: {
            'Authorization': 'Bearer ' + localStorage.getItem('token')
        },
        success: function (data) {
            const checkboxContainer = $('#checkboxContainer');
            checkboxContainer.empty(); 
            $.each(data.brands, function (index, brand) {
                var brand_id = brand.id;
                var brand_name = brand.brand_name;
                var checkboxHtml = '<input type="checkbox" class="checkbox-round mt-1 ms-3 brand_checkbox" value="' + brand_id + '"/>' +
                    '<span class="ps-2 fs-6">' + brand_name + '</span> <br/>';

                checkboxContainer.append(checkboxHtml);
            });
        },
        error: function (error) {
            console.error('Error fetching data:', error);
        }
    });
}
get();

  function resetform(){
    $('.brand_checkbox').val('');
    $('.budget_checkbox').val('');
    $('.hp_checkbox').val('');
    $('.brand_checkbox:checked').prop('checked', false);
    $('.budget_checkbox:checked').prop('checked', false);
    $('.hp_checkbox:checked').prop('checked', false);
    get_harvester();
    $("#noDataMessage").hide();
    
  }