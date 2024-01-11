
$(document).ready(function() {
    console.log("ready!");
    getTractorList();
    
    // $('#submit_enquiry').click(tractor_enquiry);
    // $('#submit_enquiry').on('click',function(){
    //     alert('sdfsadf');
    //     tractor_enquiry();
    // })
    // $('#submit_enquiry').click(function () {
    //     $('#contact-seller-call').submit();
    // });
    $('#contact-seller-call').submit(tractor_enquiry);

    $("#contact-seller-call").validate({
        rules: {
            brandName: {
                required: true
            },
            modeName: {
                required: true
            },
            firstName: {
                required: true
            },
            lastName: {
                required: true
            },
            mobile_number: {
                required: true,
                digits: true,
                minlength: 10
            },
            state: {
                required: true,
                notEqual: "Select State"
            },
            district: {
                required: true,
                notEqual: "Select District"
            },
            Tehsil: {
                required: true
            }
        },
        messages: {
            state: {
                notEqual: "Please select a state."
            },
            district: {
                notEqual: "Please select a district."
            }
        },
        submitHandler: function (form) {
            savedata();
            tractor_enquiry();
        }
    });

    // Custom validation method for notEqual rule
    $.validator.addMethod("notEqual", function (value, element, param) {
        return value !== param;
    }, "Value must not equal {0}");

    });



function model_click(){
    get();
    console.log("confirm")
  }

  function get() {
    var url = 'http://tractor-api.divyaltech.com/api/customer/get_all_brands';
    $.ajax({
        url: url,
        type: "GET",
        headers: {
            'Authorization': 'Bearer ' + localStorage.getItem('token')
        },
        success: function (data) {
            console.log(data);
            const selects = document.querySelectorAll('#brandName');

            selects.forEach(select => {
                select.innerHTML = '<option selected disabled value="">Please select an option</option>';

                if (data.brands.length > 0) {
                    data.brands.forEach(row => {
                        const option = document.createElement('option');
                        option.textContent = row.brand_name;
                        option.value = row.id;
                        console.log(option);
                        select.appendChild(option);
                    });
                } else {
                    select.innerHTML = '<option>No valid data available</option>';
                }
            });
        },
        error: function (error) {
            console.error('Error fetching data:', error);
        }
    });
}




function getTractorList() {
    var url = "http://tractor-api.divyaltech.com/api/customer/get_new_tractor";

    // Keep track of the total tractors and the currently displayed tractors
    var totalTractors = 0;
    var displayedTractors = 6; // Initially display 6 tractors

    $.ajax({
        url: url,
        type: "GET",
        success: function(data) {
            var productContainer = $("#productContainer");
            var loadMoreButton = $("#load_moretract");

            if (data.product.allProductData && data.product.allProductData.length > 0) {
                totalTractors = data.product.allProductData.length;

                // Display the initial set of 6 tractors
                displayTractors(data.product.allProductData.slice(0, displayedTractors));

                if (totalTractors <= displayedTractors) {
                    loadMoreButton.hide();
                } else {
                    loadMoreButton.show();
                }

                // Handle "Load More Tractors" button click
                loadMoreButton.click(function() {
                    // Display all tractors
                    displayedTractors = totalTractors;
                    displayTractors(data.product.allProductData);

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


function displayTractors(tractors) {
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
                                <button type="button" class="add_btn btn-success w-100" onclick="model_click()" data-bs-toggle="modal" data-bs-target="#used_tractor_callbnt_${p.product_id}">

                                <i class="fa-regular fa-handshake"></i> Get on Road Price
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
                    var tableRow  = `
                    <tr class="">
                        <td class="py-3">${p.model}</td>
                        <td class="py-3"><span>${p.hp_category}</span> HP</td>
                        <td class="py-3">Rs. <span>${p.starting_price}</span> - <span>${p.ending_price}</span>*</td>
                    </tr> 
                `;
                var tablerow_hp = `
                    <tr class="">
                        <td class="py-3">${p.model}</td>
                        <td class="py-3">Rs. <span>${p.starting_price}</span> - <span>${p.ending_price}</span>*</td>
                    </tr>
`;

                // Add event listener for modal opening
    $(".add_btn").on("click", function () {
        var productId = $(this).data("product-id");
        $("#used_tractor_callbnt_" + productId).modal("show");
    });
        // Append the new card to the container
        productContainer.append(newCard);
        console.log(tableData,"dfghj")
        tableData.append(tableRow);
        console.log(hp_wise)
        hp_wise.append(tablerow_hp);
       
    });
}

// enquiry form

function tractor_enquiry() {
    var brandName = $('#brandName').val();
    var modeName = $('#modeName').val();
    var firstName = $('#firstName').val();
    var lastName = $('#lastName').val();
    var mobile_number = $('#mobile_number').val();
    var state = $('#state').val();
    var district = $('#district').val();
    var Tehsil = $('#Tehsil').val();
    var enquiry_type_id =$('#enquiry_type_id').val();
    var paraArr = {
      'brand_name': brandName,
      'model': modeName,
      'first_name': firstName,
      'last_name': lastName,
      'mobile': mobile_number,
      'state': state,
      'district': district,
      'tehsil': Tehsil,
      'enquiry_type_id':enquiry_type_id,
    };
    // console.log(paraArr);
  
//   var apiBaseURL =APIBaseURL;
//   var url = apiBaseURL + 'customer_enquiries';
var url ='http://tractor-api.divyaltech.com/api/customer/customer_enquiries';
    console.log(url);
  
    var token = localStorage.getItem('token');
    var headers = {
      'Authorization': 'Bearer ' + token
    };
    $.ajax({
      url: url,
      type: "POST",
      data: paraArr,
      headers: headers,
      success: function (result) {
        console.log(result, "result");
        savedata();
    console.log("Add successfully");
    $("#used_tractor_callbnt_").modal('hide'); 
    var msg = "Added successfully !"
    $("#errorStatusLoading").modal('show');    
    $("#errorStatusLoading").find('.modal-title').html('<p class="text-center">Congratulation..! Requested Successful</p>');
 
    $("#errorStatusLoading").find('.modal-body').html(msg);
    $("#errorStatusLoading").find('.modal-body').html('<img src="assets/images/successfull.gif" style="display:block; margin:0 auto;" class="w-50 text-center" alt="Successfull Request"></img>');
    // $("#errorStatusLoading").find('.modal-body').html('sdfghj');
  
  
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
 

  function savedata(){
    tractor_enquiry();
    console.log("confirm");
    console.log("Form submitted successfully");
  }