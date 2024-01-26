$(document).ready(function() {
    console.log("ready!");
    getoldTractorList();
    $('#filter_tractor').click(filter_serach);
});

    var cardsPerPage = 9; // Number of cards to show initially
    var cardsDisplayed = 0; // Counter to keep track of the number of cards displayed
    var allCards; // Variable to store all cards

    function getoldTractorList() {
        var url = "http://tractor-api.divyaltech.com/api/customer/get_old_tractor";
        

        $.ajax({
            url: url,
            type: "GET",
            success: function (data) {
                var productContainer = $("#productContainer");
                // Clear the existing content in the container
                productContainer.empty();

                if (data.product && data.product.length > 0) {
                    allCards = data.product; 
                
                    allCards.sort(function(a, b) {
                        return b.customer_id - a.customer_id;
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
        var formId = `contact-seller-call_${p.product_id}`; // Dynamic ID for the form

        var newCard = `
    <div class="col-12 col-lg-4 col-md-4 col-sm-4 mb-4" id="${cardId}">
        <div class="h-auto success__stry__item d-flex flex-column shadow ">
            <div class="thumb">
                <a href="farmtrac_60.php?product_id=${p.customer_id}">
                    <div class="ratio ratio-16x9">
                        <img src="http://tractor-api.divyaltech.com/uploads/product_img/${a[0]}" class="object-fit-cover " alt="${p.description}">
                    </div>
                </a>
            </div>
            <div class="content d-flex flex-column flex-grow-1 ">
                <div class="caption text-center">
                    <a href="farmtrac_60.php?product_id=${p.customer_id}" class="text-decoration-none text-dark">
                        <p class="pt-3"><strong class="series_tractor_strong text-center h4 fw-bold ">${p.model}</strong></p>
                    </a>      
                </div>
                <div class=" row">
                    <div class="col-12 ms-2 ">
                        <p class="" id="district"><span id="engine_powerhp2">${p.brand_name}</span> | <span id="year">${p.purchase_year}</span>| ${p.district}</p>
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
               
                <div class="col-12">
                <button type="button" class="add_btn btn-success w-100" data-bs-toggle="modal" data-bs-target="#${modalId}">
                <i class="fa-regular fa-handshake mx-1"></i>Contact Seller
            </button>
                            </div>

                            <div class="modal fade" id="${modalId}" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                <div class="modal-dialog modal-lg modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header  modal_head">
                                        <h5 class="modal-title text-white ms-1" id="model_form">${p.model}</h5>
                                        <button type="button" class="btn-close btn-success" data-bs-dismiss="modal" aria-label="Close"><img src="assets/images/close.png"></button>
                                        </div>
                                        <!-- MODAL BODY -->
                                        <div class="modal-body">
                                        <form id="${formId}" method="POST" onsubmit="return false">
                                                <div class="row">
                                                <div class="row px-3 ">
                                    <div class="col-12 col-lg-6 col-md-6 col-sm-6 " hidden>
                                        <label for="name" class="form-label fw-bold text-dark"> <i class="fa-regular fa-user"></i> enquiryName</label>
                                        <input type="text" class="form-control" placeholder="Enter Your Name" id="enquiry_type_id" value="21" name="fname">
                                    </div>
                                    <div class="col-12 col-lg-6 col-md-6 col-sm-6 " hidden>
                                        <label for="name" class="form-label fw-bold text-dark"> <i class="fa-regular fa-user"></i> product_id</label>
                                        <input type="text" class="form-control" id="product_id" value="${p.product_id}" hidden> 
                                    </div>
                                    <div class="col-12 col-lg-6 col-md-6 col-sm-6 ">
                                        <label for="name" class="form-label fw-bold text-dark"> <i class="fa-regular fa-user"></i> First Name</label>
                                        <input type="text" class="form-control" placeholder="Enter Your Name" id="fname" name="fname">
                                    </div>
                                    <div class="col-12 col-lg-6 col-md-6 col-sm-6 ">
                                        <label for="name" class="form-label fw-bold text-dark"> <i class="fa-regular fa-user"></i> Last Name</label>
                                        <input type="text" class="form-control" placeholder="Enter Your Name" id="lname" name="lname">
                                    </div>
                                    <div class="col-12 ">
                                        <label for="number" class="form-label text-dark fw-bold"> <i class="fa fa-phone" aria-hidden="true"></i> Phone Number</label>
                                        <input type="text" class="form-control" placeholder="Enter Number" id="number" name="number">
                                    </div>
                                    <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                                        <label for="yr_state" class="form-label text-dark fw-bold" id="state" name="state"> <i class="fas fa-location"></i> State</label>
                                        <select class="form-select py-2" aria-label=".form-select-lg example" id="state_form" name="state">
                                            <option value>Select State</option>
                                            <option value="Chhattisgarh">Chhattisgarh</option>
                                            <option value="Other">Other</option>
                                        </select>
                                    </div>
                                    <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                                        <label class="form-label text-dark"><i class="fa-solid fa-location-dot"></i> District</label>
                                        <select class="form-select py-2 " aria-label=".form-select-lg example" name="district" id="district_form">
                                            <option value>Select District</option>
                                            <option value="Raipur">Raipur</option>
                                            <option value="Bilaspur">Bilaspur</option>
                                            <option value="Durg">Durg</option>
                                        </select>
                                    </div>
                                    <div class="col-12 col-sm-12 col-md-6 col-lg-6 mt-2">
                                        <label for="yr_tehsil" class="form-label text-dark"> Tehsil</label>
                                        <input type="yr_tehsil" class="form-control" placeholder="Enter Tehsil" id="tehsil" name="tehsil">
                                    </div>
                                    <div class="col-12 col-sm-12 col-md-6 col-lg-6 mt-2">
                                        <label for="yr_price" class="form-label text-dark">Price</label>
                                        <input type="yr_price" class="form-control" placeholder="Enter Price" id="price_form" name="price">
                                    </div>
                                    
                                    
                                </div>          
                                                </div> 
                                            
                                
                                                <div class="modal-footer">
                                                <button type="submit" id="submit_enquiry" class="btn add_btn btn-success w-100 btn_all" onclick="savedata('${formId}')"
                                                data-bs-dismiss="modal">Submit</button>
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

  function tractor_enquiry(formId) {
        // Use the formId to get values dynamically
        var enquiry_type_id = $(`#${formId} #enquiry_type_id`).val();
        var first_name = $(`#${formId} #fname`).val();
        var last_name = $(`#${formId} #lname`).val();
        var mobile = $(`#${formId} #number`).val();
        var state = $(`#${formId} #state_form`).val();
        var district = $(`#${formId} #district_form`).val();
        var tehsil = $(`#${formId} #tehsil`).val();
        var price = $(`#${formId} #price_form`).val();
        var product_id = $(`#${formId} #product_id`).val();
        var model_form = $(`#${formId} #model_form`).val();

  
    // Prepare data to send to the server
    var paraArr = {
      'product_id':product_id,
      'enquiry_type_id':enquiry_type_id,
      'first_name': first_name,
      'last_name':last_name,
      'mobile':mobile,
      'state':state,
      'district':district,
      'tehsil':tehsil,
      'price':price,
      'model':model_form,
    };
   
  var apiBaseURL =APIBaseURL;
//   var url = apiBaseURL + 'customer_enquiries';
var url = "http://tractor-api.divyaltech.com/api/customer/customer_enquiries";
    console.log(url);
  
  
    // Make an AJAX request to the server
    $.ajax({
      url: url,
      type: "POST",
      data: paraArr,
      success: function (result) {
        console.log(result, "result");
        
        $("#used_tractor_callbnt_").modal('hide'); 
        var msg = "Added successfully !"
        $("#errorStatusLoading").modal('show');    
        $("#errorStatusLoading").find('.modal-title').html('<p class="text-center">Congratulation..! Requested Successful</p>');
     
        $("#errorStatusLoading").find('.modal-body').html(msg);
        $("#errorStatusLoading").find('.modal-body').html('<img src="assets/images/7efs.gif" style="display:block; margin:0 auto;" class="w-50 text-center" alt="Successfull Request"></img>');
      
        // getOldTractorById();
        console.log("Add successfully");
      
      },
      error: function (error) {
        console.error('Error fetching data:', error);
        var msg = error;
        $("#errorStatusLoading").modal('show');
        $("#errorStatusLoading").find('.modal-title').html('<p class="text-center">Process Failed..! Enter Valid Detail</p>');
        $("#errorStatusLoading").find('.modal-body').html(msg);
        $("#errorStatusLoading").find('.modal-body').html('<img src="assets/images/comp_3.gif" style="display:block; margin:0 auto;" class="w-50 text-center" alt="Successfull Request"></img>');
        // 
      }
    });
  }

  function savedata(formId) {
    tractor_enquiry(formId);
    console.log("Form submitted successfully");
  }

// search cards by hp, brand, price, state, district
function get() {
    // var apiBaseURL = CustomerAPIBaseURL;
    var url = 'http://tractor-api.divyaltech.com/api/customer/get_brands';

    $.ajax({
        url: url,
        type: "GET",
        headers: {
            'Authorization': 'Bearer ' + localStorage.getItem('token')
        },
        success: function (data) {
            console.log(data);

            const checkboxContainer = $('#checkboxContainer');
            checkboxContainer.empty(); // Clear existing checkboxes

            // Loop through the data and add checkboxes
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

function filter_serach() {

    var selectedBrand = $('.brand_checkbox').val();
    var budget_checkbox = $('.budget_checkbox').val();
    var hp_checkbox = $('.hp_checkbox').val();

    var paraArr = {
      'brand_id': selectedBrand,
      'brand_id': budget_checkbox,
      'model':hp_checkbox, 
    }
  
    // var apiBaseURL = APIBaseURL;
    var url = 'http://tractor-api.divyaltech.com/api/customer/get_old_tractor_by_filter';
    $.ajax({
        url:url, 
        type: 'POST',
        data: paraArr,
      
        headers: {
            'Authorization': 'Bearer ' + localStorage.getItem('token')
        },
        success: function (searchData) {
          console.log(searchData,"hello brand");
          getoldTractorList(searchData);
        },
        error: function (error) {
            console.error('Error searching for brands:', error);
        }
    });
  };
//   function updateTable(data) {
//     const tableBody = document.getElementById('data-table');
//     tableBody.innerHTML = '';
//     // let serialNumber = 1; 
  
//     if(data.newHarvester && data.newHarvester.length > 0) {
//       let tableData = [];
//       let serialNumber = 1;
//         data.newHarvester.forEach(row => {
//             let action = `<div class="d-flex">
//             <button class="btn btn-warning btn-sm text-white mx-1" data-bs-toggle="modal" onclick="fetch_data(${row.id});" data-bs-target="#view_model_harvester">
//                       <i class="fa-solid fa-eye" style="font-size: 11px;"></i></button>
//                       <button class="btn btn-primary btn-sm btn_edit" onclick="fetch_edit_data(${row.id});" data-bs-toggle="modal" data-bs-target="#staticBackdrop" id="yourUniqueIdHere" style="padding:5px">
//                         <i class="fas fa-edit" style="font-size: 11px;"></i>
//                       </button>
//             <button class="btn btn-danger btn-sm mx-1" onclick="destroy(${row.id});">
//                 <i class="fa fa-trash" style="font-size: 11px;"></i>
//             </button>
//         </div>`;
  
//         tableData.push([
//           serialNumber,
//           row.brand_name,
//           row.model,
//           row.horse_power,
//           row.air_filter,
//           row.crops_type_value,
//           action
//       ]);
  
//       serialNumber++;
//     });
//       $('#example').DataTable().destroy();
//       $('#example').DataTable({
//               data: tableData,
//               columns: [
//                 { title: 'S.No.' },
//                 { title: 'Brand' },
//                 { title: 'Model Name' },
//                 { title: 'HP Power' },
//                 { title: 'Air Filter' },
//                 { title: 'Crops' },
//                 { title: 'Action', orderable: false } // Disable ordering for Action column
//             ],
//               paging: true,
//               searching: false,
//               // ... other options ...
//           });
//     } else {
//         // Display a message if there's no valid data
//         tableBody.innerHTML = '<tr><td colspan="4">No valid data available</td></tr>';
//     }
//   }
  function resetform(){
    $('.brand_checkbox').val('');
    $('.budget_checkbox').val('');
    $('.hp_checkbox').val('');
    
    getoldTractorList();
    // window.location.reload();
    
  }