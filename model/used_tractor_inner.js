$(document).ready(function() {
    console.log("ready!");
    $('#contact_seller').click(store);

    getOldTractorById();
    getpopularTractorList();
    getupcomimgTractorList();
    getoldTractorList();
});

function getOldTractorById() {
    console.log(window.location)
    var urlParams = new URLSearchParams(window.location.search);
    var productId = urlParams.get('id');
    var url = "http://192.168.1.44:8000/api/customer/get_old_tractor_by_id/" + productId;
    console.log(url);
    $.ajax({
        url: url,
        type: "GET",
        success: function(data) {
        console.log(data, 'abc');
    
        document.getElementById('model_name').innerText=data.product[0].model;
        // console.log(data.product[0].brand_name);
       
        document.getElementById('hours_driven').innerText=data.product[0].hours_driven;
        // document.getElementById('engine_powerhp').innerText=data.product[0].hp_category;
        document.getElementById('tyre_condition').innerText=data.product[0].tyre_condition;
        document.getElementById('engine_condition').innerText=data.product[0].engine_condition;
        document.getElementById('noc').innerText=data.product[0].noc;
        document.getElementById('rc_number').innerText=data.product[0].rc_number;
        document.getElementById('model_name2').innerText=data.product[0].model;
        document.getElementById('model_name4').innerText=data.product[0].model;
        document.getElementById('brand_name').innerText=data.product[0].brand_name;
         console.log(data.product[0].brand_name,"hasdgfasgdfj");
        document.getElementById('model_name3').innerText=data.product[0].model;
        document.getElementById('engine_powerhp2').innerText=data.product[0].hp_category;
        document.getElementById('tyre2').innerText=data.product[0].tyre_condition;
        document.getElementById('engine2').innerText=data.product[0].engine_condition;
        document.getElementById('name').innerText=data.product[0].first_name;
        document.getElementById('mobile').innerText=data.product[0].mobile;
        document.getElementById('email').innerText=data.product[0].email;
        document.getElementById('district').innerText=data.product[0].district;
        document.getElementById('state_td').innerText=data.product[0].state;
        document.getElementById('description').innerText=data.product[0].engine_condition;
        document.getElementById('model4').innerText=data.product[0].model;
        },
        error: function (error) {
            console.error('Error fetching data:', error);
        }
    });
}


// store data throught form
function store(event) {
    event.preventDefault();
    console.log('jfhfhw');
    var first_name = $('#fname').val();
    var last_name = $('#lname').val();
    var mobile = $('#number').val();
    var state = $('#state_form').val();
    var district = $('#district_form').val();
    var tehsil = $('#tehsil').val();
    var price = $('#price').val();
  
    // Prepare data to send to the server
    var paraArr = {
      'first_name': first_name,
      'last_name':last_name,
      'mobile':mobile,
      'state':state,
      'district':district,
      'tehsil':tehsil,
      'price':price,


    };
  
  var apiBaseURL =APIBaseURL;
//   var url = apiBaseURL + 'customer_enquiries';
var url = "http://192.168.1.44:8000/api/customer/customer_enquiries";
    console.log(url);
  
  
    // Make an AJAX request to the server
    $.ajax({
      url: url,
      type: "POST",
      data: paraArr,
      success: function (result) {
        console.log(result, "result");
        console.log('prachi',data.product.accessory_and_tractor_type.tractor_type_value);
        const new_data=data.product.accessory_and_tractor_type.filter((s)=>{ 
            if(s.form_type=="FOR_SELL_TRACTOR"){
                return s;
            }
        });
        console.log('form_type',new_data);
        getOldTractorById();
        console.log("Add successfully");
        alert('successfully inserted..!');
      },
      error: function (error) {
        console.error('Error fetching data:', error);
      }
    });
  }



  // get new popular tractor

function getpopularTractorList() {
    var url = "http://192.168.1.44:8000/api/customer/get_new_tractor";
    console.log("console url");

    $.ajax({
        url: url,
        type: "GET",
        success: function(data){
            console.log(data, 'abc');
            console.log('prachi',data.product.accessory_and_tractor_type.tractor_type_value);
            const new_data=data.product.accessory_and_tractor_type.filter((s)=>{ 
                if(s.tractor_type_value=="Upcoming"){
                    return s;
                }
            });
            var productContainer = $("#productContainerpopular");
            console.log('popular tractor',new_data);
            if (data.product.allProductData
                && data.product.allProductData
                .length > 0) {
                data.product.allProductData
                .forEach(function (p) {
                    var newCard = `
                    <div class="tractor-list mb-3 box-shadow grey-bg d-flex flex-row shadow p-1">
                        <div class="tractor-list-left text-center">
                            <a href="#" class="weblink">
                            <img src="${p.image_url}" id="image_popular" width="100" height="70" alt="${p.model}">
                            </a>
                        </div>
                        <div class="px-2 tractor-list-right d-flex flex-column justify-cintent-center">
                            <a href="#" class="text-decoration-none"><p class="mb-1">${p.model} </p></a>
                            <div class="tractor-list-info mb-0 boldfont">
                                <div class="row">
                                <div class="col-12 col-lg-5 col-md-5 col-sm-5">
                                    <p class=" bg-light m-1" style=" font-size: 0.9rem;"> <span> ${p.hp_category}</span><span>HP</span></p>
                                </div>
                                <div class="col-12 col-lg-7  col-md-7 col-sm-7">
                                    <p class=" bg-light m-1"style=" font-size: 0.9rem;"> ${p.wheel_drive_value}</p>
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
        },
        error: function (error) {
            console.error('Error fetching data:', error);
        }
    });
}

 // get new popular tractor

 function getupcomimgTractorList() {
    var url = "http://192.168.1.44:8000/api/customer/get_new_tractor";
    console.log("console url");

    $.ajax({
        url: url,
        type: "GET",
        success: function(data){
            console.log(data, 'abc');
            console.log('prachi',data.product.accessory_and_tractor_type.tractor_type_value);
            const new_data=data.product.accessory_and_tractor_type.filter((s)=>{ 
                if(s.tractor_type_value=="Upcoming"){
                    return s;
                }
            });
            var productContainer = $("#productContainerupcoming");
            console.log('popular tractor',new_data);
            if (data.product.allProductData
                && data.product.allProductData
                .length > 0) {
                data.product.allProductData
                .forEach(function (p) {
                    var newCard = `
                    <div class="used-tractor mb-3 d-flex flex-row shadow p-2" style="background-color:#fff">
                            <div class="text-center">
                                <a href="#" class="weblink">
                                <img src="${p.image_url}"  width="100" height="100" alt="" style=" border-radius: 10px;">
                                </a>
                            </div>
                            <div class="px-2 d-flex flex-column justify-cintent-center">
                               <a href="#" class="text-decoration-none"><p class="mb-1">${p.model}</p></a>
                               <div class="tractor-list-info mb-0 boldfont">
                               <div class="row">
                               <div class="col-12 col-lg-5 col-md-5 col-sm-5">
                                   <p class=" bg-light m-1" style=" font-size: 0.9rem;"> <span> ${p.hp_category}</span><span>HP</span></p>
                               </div>
                               <div class="col-12 col-lg-7  col-md-7 col-sm-7">
                                   <p class=" bg-light m-1"style=" font-size: 0.9rem;">${p.wheel_drive_value}</p>
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

// sililar used tractor

function getoldTractorList() {
    var url = "http://192.168.1.44:8000/api/customer/get_old_tractor";
    // console.log(url);

    $.ajax({
        url: url,
        type: "GET",
        success: function(data) {
            console.log(data, 'abc');
            var productContainer = $("#productContainersimilar");

            if (data.product && data.product.length > 0) {
                data.product.forEach(function (p) {
                    console.log(p,"pp");
                    var newCard = `
                        <div class="col-12 col-lg-3 col-md-3 col-sm-3 ">
                            <div class="h-auto success__stry__item d-flex flex-column shadow">
                                <div class="thumb">
                                    <a href="farmtrac_60.php?id=${p.product_id}">
                                        <div class="ratio ratio-16x9">
                                            <img src="${p.image_url}" class="object-fit-cover " alt="${p.description}">
                                        </div>
                                    </a>
                                </div>
                                <div class="content d-flex flex-column flex-grow-1 ">
                                    <div class="caption text-center">
                                        <a href="farmtrac_60.php?id=${p.product_id}" class="text-decoration-none text-dark">
                                            <p class="pt-3"><strong class="series_tractor_strong text-center h4 fw-bold ">${p.model}</strong></p>
                                        </a>      
                                    </div>
                                    <div class=" row">
                                        <div class="col-12 ms-2 ">
                                            <p class="" id="district"><span id="engine_powerhp2">${p.hp_category}</span> | <span id="year">${p.purchase_year}</span>| ${p.district}</p>
                                        </div>
                                    </div>
                                    <div class="row text-center">
                                        <div class="col-6">
                                            <p class="fw-bold ms-1">Price: ₹ <span id="price">${p.price}</p>
                                        </div>
                                        <div class="col-6">
                                            <p class="fw-bold pe-2">Great Deal  <i class="fa-regular fa-thumbs-up"></i></p>
                                        </div>
                                    </div>
                                </div>
                                <div class=" row state_btn">
                                    <div class="col-12 ">
                                        <button  type ="button" class="btn-success w-100 p-2 rounded-3 text-decoration-none  text-center" data-bs-toggle="modal" data-bs-target="#used_tractor_callbnt"><i class="fa-solid fa-phone pe-2"></i>Call Now</button> 
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
