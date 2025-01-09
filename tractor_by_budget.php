<html lang="en">
<head> 
  <?php
    include 'includes/headertag.php';
    include 'includes/footertag.php';
   ?> 
</head>
    <!-- Google tag (gtag.js) -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-6Z38E658LD"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());
    gtag('config', 'G-6Z38E658LD');
  </script>
<body> 
<style>
 .thumb img {
    height: auto;
    width: 100%;
    max-width: 400px;
    max-height: 205px;
}
.new-tractor-content {
    padding: 15px 0 0;
    background-color: #fff;
}
.new-tractor-content h5{
    white-space: nowrap;
    text-overflow: ellipsis;
    overflow: hidden;
    font-size: 15px;
    margin-bottom: 0;
    text-transform: uppercase;
}
.table_detail_section tbody tr td, .table_detail_section table thead tr th{
  padding: 15px;
}
</style>
<?php
  include 'includes/header.php';
?>
<section class="mt-130 bg-light">
  <div class="container">
    <div class="py-2">
      <span class="text-white">
        <a href="index.php" class="text-decoration-none header-link px-1">Home <i
          class="fa-solid fa-chevron-right px-1"></i>
        </a>
        <a href="" class="text-decoration-none header-link px-1" id="link_head"> </a>
      </span>
    </div>
    <div id="title_heading"></div>
  </div>
</section>
<section class="bg-white">
  <div class="container">
    <div id="tractor_description"></div>
    <a class="btn_link" id="show_detail" onclick="show_detail()" style="display:block;">Read More</a>
    <div class="more_detail mt-4" style="display: none;">
      <div id="read_more_title"></div>
        <div class="table-responsive mx-auto">
          <table class="w-100 table_detail_section  table table-bordered" style="background-color: #f6f6f6 !important;">
            <thead>
              <tr>
                <th id="table_detail"></th>
                <th>Tractor HP</th>
                <th>Tractor Price</th>
              </tr>
            </thead>
            <tbody id="tractor_table_detail"></tbody>
          </table>
        </div>
        <a class="btn_link mt-3" onclick="hide_detail()">Read less</a>
      </div>
    </div>
  </section>
  <section>
    <div class="container my-5" >
      <div class="row w-100" id="tractor_card"></div>
    </div>
  </section>
    <?php
    include 'includes/footer.php';
    ?>
  </body>
</html>





<script>
    $(document).ready(function() {
    console.log("ready!");
    getsearchdata();
});
function show_detail(){
  $(".more_detail").show();
  $("#show_detail").hide();
}
function hide_detail(){
  $(".more_detail").hide();
  $("#show_detail").show();
}
    function getsearchdata() {
        var urlParams = new URLSearchParams(window.location.search);
    var Id = urlParams.get('budget');
    var arr = [];
    arr.push(Id);
    console.log(arr,"arr");
    var url = "http://tractor-api.divyaltech.com/api/customer/get_new_tractor_by_price_brand_hp";
    console.log(url);
    var paraArr = {
          'price_ranges': JSON.stringify(arr)
        };
    $.ajax({
        url: url,
          type: "POST",
          data: paraArr,
        success: function(data) {
          console.log(data.product.allProductData,"getdata")
          
          var breadcrumb_head = $('#link_head')
          var title_heading = $('#title_heading')
          var newCard = `<span class="text-dark p">Tractors  ${Id}</span> `;
          var newcard2 = `<h4 class="pb-2">Tractors  ${Id} in India</h4>`;
       
       // Append the new card to the container
       breadcrumb_head.append(newCard);
       title_heading.append(newcard2);
          if (data.product.allProductData && data.product.allProductData.length > 0) {
            console.log('Number of data:', data.product.allProductData.length);
            var count = data.product.allProductData.length;
              // Display the initial set of 6 tractors
             
              
            var productContainer = $("#tractor_description");
            var productContainer2 = $("#read_more_title");
            var productContainer3 = $("#table_detail");
            var newcard3 = `<p> ${count} tractors are available ${Id} Rupees at Tractor Junction. 
                The price range ${Id} can give you a perfect tractor model
                for your farming operations. Here you
                can get complete information regarding ${Id} tractors, including price,
                features and many more.
            </p>`;
            var newcard4 = `<h5>Tractors ${Id} Price List</h5>`;
            var newcard5 = `Tractors ${Id} `;
          productContainer.append(newcard3);
          productContainer2.append(newcard4);
          productContainer3.append(newcard5);
           data.product.allProductData.forEach(function (p) {
               var images = p.image_names;
               var a = [];
       
               if (images) {
                   if (images.indexOf(',') > -1) {
                       a = images.split(',');
                   } else {
                       a = [images];
                   }
               }

            
             //  productContainer.append(newCard);
             var productContainer4 = $("#tractor_table_detail");
             var productContainer5 = $("#tractor_card");
            var newcard6 = `<tr>
            <td>${p.brand_name} ${p.model}</td>
            <td>${p.horse_power}</td>
            <td>${p.starting_price} - ${p.ending_price} lakhs</td>
            </tr>`;
            var newcard7 = `<div class="col-12 col-sm-12 col-md-3 col-lg-3 mt-3">
          <div class="success__stry__item  box_shadow  b-t-1 h-100">
                        <a class="text-decoration-none " href="detail_tractor.php?${p.product_id}">
                        <div class="thumb">
                               <img src="http://tractor-api.divyaltech.com/uploads/product_img/${a[0]}" class="" alt="img" >
                         </div>
                        <div class="new-tractor-content text-center b-t-1">
                            <h5 class="fw-bold mt-2 text-decoration-none text-dark">${p.brand_name} ${p.model}</h5>
                         
                        
                            <p  class="text-dark text-decoration-none  mt-2 mb-0">From: ₹${p.starting_price}-${p.ending_price} lac*</p>
                       
                            <button type="button" class="add_btn btn-success w-100 mt-2">

                            <i class="fa-regular fa-handshake"></i> Get on Road Price
                            </button>
                         </div>
                      </a>
                       </div>
        </div>`;
               
               
            productContainer4.append(newcard6);
            productContainer5.append(newcard7);
             
           });

       }
        },
        error: function (error) {
            console.error('Error fetching data:', error);
        }
    });
}
</script>