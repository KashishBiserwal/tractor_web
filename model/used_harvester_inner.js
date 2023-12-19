$(document).ready(function() {
    console.log("ready!");
    $('#contact_seller').click(store);
    // getoldTractorList();
    get_old_harvester_byiD();
    getpopularTractorList();
    getupcomimgTractorList();
    
});

function get_old_harvester_byiD() {
    console.log(window.location)
    var urlParams = new URLSearchParams(window.location.search);
    var productId = urlParams.get('product_id');
    console.log(productId);
    var url = "http://tractor-api.divyaltech.com/api/customer/get_old_harvester_by_id/" + productId;
    console.log(url);
    $.ajax({
        url: url,
        type: "GET",
        success: function(data) {
        console.log(data, 'abc');
    
        document.getElementById('model_name').innerText=data.product[0].model;
        document.getElementById('district').innerText=data.product[0].district;
        document.getElementById('state').innerText=data.product[0].state;
        document.getElementById('power_source').innerText=data.product[0].power_source;
        document.getElementById('hour').innerText=data.product[0].hour;
        document.getElementById('year').innerText=data.product[0].purchase_year;
        // console.log(data.product[0].brand_name);
        document.getElementById('model2').innerText=data.product[0].model;
        document.getElementById('brand').innerText=data.product[0].brand_name;
        document.getElementById('cutting_width').innerText=data.product[0].cutting_width;
        document.getElementById('crop_type').innerText=data.product[0].crop_type;
        document.getElementById('power_source').innerText=data.product[0].power_source;
        document.getElementById('hours').innerText=data.product[0].hours;
        document.getElementById('year').innerText=data.product[0].year;
        document.getElementById('price').innerText=data.product[0].price;
        document.getElementById('first_name').innerText=data.product[0].first_name;
        document.getElementById('last_name').innerText=data.product[0].last_name;
        document.getElementById('mobile').innerText=data.product[0].mobile;
        document.getElementById('email').innerText=data.product[0].email;
        document.getElementById('district').innerText=data.product[0].district;
        document.getElementById('state').innerText=data.product[0].state;
        document.getElementById('model3').innerText=data.product[0].model;
        document.getElementById('description').innerText=data.product[0].description;
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
var url = "http://tractor-api.divyaltech.com/api/customer/customer_enquiries";
    console.log(url);
  
  
    // Make an AJAX request to the server
    $.ajax({
      url: url,
      type: "POST",
      data: paraArr,
      success: function (result) {
        console.log(result, "result");
        console.log('prachi',data.product);
        const new_data=data.product.filter((s)=>{ 
            if(s.product_type=="FOR_SELL_TRACTOR"){
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
    var url = "http://tractor-api.divyaltech.com/api/customer/get_new_tractor";
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
                if(arr.includes('Popular')){
                    new_arr.push(s.product_id);
                    // jisme upcoming tha uska product_id ko new arr me push
                    return s.product_id;
                }
            });
            console.log('new_data',new_data);
            console.log('new_arr',new_arr);
            // if(new_data.product_id==)
            var productContainer = $("#productContainerpopular");
            if (data.product.allProductData && data.product.allProductData.length > 0) {
                data.product.allProductData.forEach(function (p) {
                    if(new_arr.includes(p.product_id)){
                        // new aar me match aa rhi array 
                        var newCard = `
                        <div class="tractor-list mb-3 box-shadow grey-bg d-flex flex-row shadow p-1">
                        <div class="tractor-list-left text-center">
                            <a href="detail_tractor.php?product_id=${p.product_id}" class="weblink">
                            <img src="${p.image_url}" id="image_popular" width="100" height="70" alt="${p.model}">
                            </a>
                        </div>
                        <div class="px-2 tractor-list-right d-flex flex-column justify-cintent-center">
                            <a href="detail_tractor.php?product_id=${p.product_id}" class="text-decoration-none"><p class="mb-1">${p.model} </p></a>
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
                
                    }
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
    var url = "http://tractor-api.divyaltech.com/api/customer/get_new_tractor";
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
                if(arr.includes('Upcoming')){
                    new_arr.push(s.product_id);
                    // jisme upcoming tha uska product_id ko new arr me push
                    return s.product_id;
                }
            });
            console.log('new_data',new_data);
            console.log('new_arr',new_arr);
            // if(new_data.product_id==)
            var productContainer = $("#productContainerupcoming");
            if (data.product.allProductData && data.product.allProductData.length > 0) {
                data.product.allProductData.forEach(function (p) {
                    if(new_arr.includes(p.product_id)){
                        // new aar me match aa rhi array 
                        var newCard = `
                        <div class="used-tractor mb-3 d-flex flex-row shadow p-2" style="background-color:#fff">
                        <div class="text-center">
                            <a href="detail_tractor.php?product_id=${p.product_id}" class="weblink">
                            <img src="${p.image_url}"  width="100" height="100" alt="" style=" border-radius: 10px;">
                            </a>
                        </div>
                        <div class="px-2 d-flex flex-column justify-cintent-center">
                           <a href="detail_tractor.php?product_id=${p.product_id}" class="text-decoration-none"><p class="mb-1">${p.model}</p></a>
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
                
                    }
                    });

           
            }
        },
        error: function (error) {
            console.error('Error fetching data:', error);
        }
    });
}





