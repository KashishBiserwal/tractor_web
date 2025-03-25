function getpopularTractorList(){$.ajax({url:"https://shopninja.in/bharatagri/api/public/api/customer/get_new_tractor",type:"GET",success:function(t){let r=[];t.product.accessory_and_tractor_type.filter(t=>{if(t.tractor_type_name.split(",").includes("Popular"))return r.push(t.product_id),t.product_id});var o=$("#popular_tractor");t.product.allProductData&&0<t.product.allProductData.length&&t.product.allProductData.forEach(function(t){var e,a;r.includes(t.product_id)&&(e=[],(a=t.image_names)&&(e=-1<a.indexOf(",")?a.split(","):[a]),a=`<div class="swiper-slide success__stry__item  box_shadow  b-t-1 h-100">
    <a class="text-decoration-none " href="detail_tractor.php?product_id=${t.product_id}">
    <div class="thumb">
           <img src="https://shopninja.in/bharatagri/api/public/uploads/product_img/${e[0]}" class="" alt="img" loading="lazy">
     </div>
    <div class="new-tractor-content text-center b-t-1">
        <h6 class="fw-bold mt-2 text-decoration-none text-truncate text-dark">${t.brand_name} ${t.model}</h6>
        <p  class="text-dark text-decoration-none  mt-2 mb-0">From: ₹${t.starting_price}-${t.ending_price} lac*</p>
        <button type="button" class="add_btn btn-success w-100 mt-2">
            <i class="fa-regular fa-handshake"></i> Get on Road Price
        </button>
     </div>
  </a>
   </div>`,o.append(a))})},error:function(t){console.error("Error fetching data:",t)}})}function getUpcomingTractorList(){$.ajax({url:"https://shopninja.in/bharatagri/api/public/api/customer/get_new_tractor",type:"GET",success:function(t){let r=[];t.product.accessory_and_tractor_type.filter(t=>{if(t.tractor_type_name.split(",").includes("Upcoming"))return r.push(t.product_id),t.product_id});var o=$("#upcoming_tractor");t.product.allProductData&&0<t.product.allProductData.length&&t.product.allProductData.forEach(function(t){var e,a;r.includes(t.product_id)&&(e=[],(a=t.image_names)&&(e=-1<a.indexOf(",")?a.split(","):[a]),a=` <div class="swiper-slide success__stry__item  box_shadow  b-t-1 h-100">
    <a   class="text-decoration-none " href="detail_tractor.php?product_id=${t.product_id}">
    <div class="thumb">
           <img src="https://shopninja.in/bharatagri/api/public/uploads/product_img/${e[0]}" class="" alt="img" loading="lazy">
     </div>
    <div class="new-tractor-content text-center b-t-1">
        <h6 class="fw-bold mt-2 text-decoration-none text-truncate text-dark">${t.brand_name} ${t.model}</h6>
        <p  class="text-dark text-decoration-none mt-2  mb-0">From: ₹${t.starting_price}-${t.ending_price} lac*</p>
        <button type="button" class="add_btn btn-success w-100 mt-2">
            <i class="fa-regular fa-handshake"></i> Get on Road Price
        </button>
     </div>
  </a>
   </div>`,o.append(a))})},error:function(t){console.error("Error fetching data:",t)}})}function getminiTractorList(){$.ajax({url:"https://shopninja.in/bharatagri/api/public/api/customer/get_new_tractor",type:"GET",success:function(t){let r=[];t.product.accessory_and_tractor_type.filter(t=>{if(t.tractor_type_name.split(",").includes("Mini"))return r.push(t.product_id),t.product_id});var o=$("#mini_tractor");t.product.allProductData&&0<t.product.allProductData.length&&t.product.allProductData.forEach(function(t){var e,a;r.includes(t.product_id)&&(e=[],(a=t.image_names)&&(e=-1<a.indexOf(",")?a.split(","):[a]),a=` <div class="swiper-slide success__stry__item  box_shadow  b-t-1 h-100">
    <a   class="text-decoration-none" href="detail_tractor.php?product_id=${t.product_id}">
        <div class="thumb">
            <img src="https://shopninja.in/bharatagri/api/public/uploads/product_img/${e[0]}" class="" alt="img" loading="lazy">
        </div>
        <div class="new-tractor-content text-center b-t-1">
            <h6 class="fw-bold mt-2 text-decoration-none text-truncate text-dark">${t.brand_name} ${t.model}</h6>
            <p  class="text-dark text-decoration-none mt-2  mb-0">From: ₹${t.starting_price}-${t.ending_price} lac*</p>
            <button type="button" class="add_btn btn-success w-100 mt-2">
                <i class="fa-regular fa-handshake"></i> Get on Road Price
            </button>
        </div>
    </a>
</div>`,o.append(a))})},error:function(t){console.error("Error fetching data:",t)}})}function getLatestTractorList(){$.ajax({url:"https://shopninja.in/bharatagri/api/public/api/customer/get_new_tractor",type:"GET",success:function(t){let r=[];t.product.accessory_and_tractor_type.filter(t=>{if(t.tractor_type_name.split(",").includes("Latest"))return r.push(t.product_id),t.product_id});var o=$("#Latest_tractor");t.product.allProductData&&0<t.product.allProductData.length&&t.product.allProductData.forEach(function(t){var e,a;r.includes(t.product_id)&&(e=[],(a=t.image_names)&&(e=-1<a.indexOf(",")?a.split(","):[a]),a=`  <div class="swiper-slide success__stry__item  box_shadow  b-t-1 h-100">
                            <a  class="text-decoration-none " href="detail_tractor.php?product_id=${t.product_id}">
                            <div class="thumb">
                                   <img src="https://shopninja.in/bharatagri/api/public/uploads/product_img/${e[0]}" class="" alt="img" loading="lazy">
                             </div>
                            <div class="new-tractor-content text-center b-t-1">
                                <h6 class="fw-bold mt-2 text-decoration-none text-truncate text-dark">${t.brand_name} ${t.model}</h6>
                             
                            
                                <p  class="text-dark text-decoration-none mt-2  mb-0">From: ₹${t.starting_price}-${t.ending_price} lac*</p>
                           
                                <button type="button" class="add_btn btn-success w-100 mt-2">

                                <i class="fa-regular fa-handshake"></i> Get on Road Price
                                </button>
                             </div>
                          </a>
                           </div>`,o.append(a))})},error:function(t){console.error("Error fetching data:",t)}})}function get_harvester(){$.ajax({url:"https://shopninja.in/bharatagri/api/public/api/customer/get_new_harvester",type:"GET",success:function(t){var r;t.product&&0<t.product.length&&(r=$("#new_harvester"),t.product.forEach(function(t){var e=t.image_names,a=[],e=(e&&(a=-1<e.indexOf(",")?e.split(","):[e]),`
<div class="item box_shadow b-t-1">
<a  href="harvester_inner.php?product_id=${t.id}" class="text-decoration-none fw-bold">
    <div class="harvester_img_section">
    <img src="https://shopninja.in/bharatagri/api/public/uploads/product_img/${a[0]}" alt="" loading="lazy">
    <div href="harvester_inner.php?product_id=${t.id}" class="over-layer"><i class="fa fa-link"></i></div>
    </div>
</a>
<div class="harvester_content_section mt-3 text-center">
    <a href="harvester_inner.php?product_id=${t.id}" class="text-decoration-none fw-bold text-dark"><h6 class="text-dark text-truncate">${t.brand_name} ${t.model}</h6></a>
    <div class="row w-100 contant-justify-center">
        <div class="col-6 p-0"> <p class="mb-0" style="font-size: 14px;">${t.horse_power} Hp</p></div>
        <div class="col-6 p-0 text-truncate" > <p class="mb-0"  style="font-size: 14px;">${t.crops_type_value}</p></div>
    </div>
    <a  href="harvester_inner.php?product_id=${t.id}">
        <button type="button" class="add_btn btn-success w-100 mt-3"><i class="fa-regular fa-handshake"></i> Get on Road Price</button>
    </a>
</div>
<div>
`);r.append(e)}),r.owlCarousel({items:4,loop:!0,margin:10,nav:!0,autoplay:!0,autoplayTimeout:3e3,responsiveClass:!0,responsive:{0:{items:1,nav:!1},600:{items:3,nav:!1},1e3:{items:4,nav:!0,loop:!1}}}))},error:function(t){console.error("Error fetching data:",t)}})}function get_oldharvester(){$.ajax({url:"https://shopninja.in/bharatagri/api/public/api/customer/get_old_harvester",type:"GET",success:function(t){var r;t.product&&0<t.product.length&&(r=$("#old_harvester"),t.product.forEach(function(t){var e=t.image_names,a=[],e=(e&&(a=-1<e.indexOf(",")?e.split(","):[e]),`
<div class="item box_shadow b-t-1">
<a  href="used_harvester_inner.php?id=${t.customer_id}" class="text-decoration-none fw-bold">
<div class="harvester_img_section">
<img src="https://shopninja.in/bharatagri/api/public/uploads/product_img/${a[0]}" alt="" loading="lazy">
<div href="used_harvester_inner.php?id=${t.customer_id}" class="over-layer"><i class="fa fa-link"></i></div>
</div>
</a>
<div class="harvester_content_section mt-3 text-center">
<a href="used_harvester_inner.php?id=${t.customer_id}" class="text-decoration-none fw-bold text-dark"><h6 class="text-dark">${t.brand_name} ${t.model}</h6></a>
<div class="row w-100">
<div class="col-6 p-0"> <p class="mb-0" style="font-size: 14px;"><span>Hours Driven: </span>${t.hours_driven}</p></div>
<div class="col-6 p-0"> <p class="mb-0" style="font-size: 14px;">${t.crops_type_value}</p></div>
</div>
<a  href="used_harvester_inner.php?id=${t.customer_id}">
<button type="button" class="add_btn btn-success w-100 mt-3"><i class="fa-regular fa-handshake"></i> Get on Road Price</button>
</a>
</div>
</div>
`);r.append(e)}),r.owlCarousel({items:4,loop:!0,margin:10,nav:!0,autoplay:!0,autoplayTimeout:3e3,responsiveClass:!0,responsive:{0:{items:1,nav:!1},600:{items:3,nav:!1},1e3:{items:4,nav:!0,loop:!1}}}))},error:function(t){console.error("Error fetching data:",t)}})}function get_All_News(){$.ajax({url:"https://shopninja.in/bharatagri/api/public/api/customer/news_details",type:"GET",success:function(t){var r;t.news_details&&0<t.news_details.length&&(r=$("#all_news"),t.news_details.forEach(function(t){var e=t.image_names,a=[],e=(e&&(a=-1<e.indexOf(",")?e.split(","):[e]),`

<div class="item box_shadow b-t-1">
<div class="thumb">
    <a href="news_content.php?id=${t.id}">
        <img src="https://shopninja.in/bharatagri/api/public/uploads/news_img/${a[0]}" class="engineoil_img  w-100" alt="img" loading="lazy">
    </a>
</div>
<div class="content mb-3 ms-3">
    <a href="news_content.php?id=${t.id}">
    <button type="button" class="btn btn-warning mt-3">${t.news_category} </button>
    </a>  
    <div class="row mt-2">
        <p class="fw-bold text-truncate" >${t.news_headline}</p>
    </div>
    <div class="row">
        <p class="fw-bold"><span>Date/time: </span>${t.date}</p>
    </div>
</div>
</div>
`);r.append(e)}),r.owlCarousel({items:4,loop:!0,margin:10,nav:!0,autoplay:!0,autoplayTimeout:3e3,responsiveClass:!0,responsive:{0:{items:1,nav:!1},600:{items:3,nav:!1},1e3:{items:4,nav:!0,loop:!1}}}))},error:function(t){console.error("Error fetching data:",t)}})}function get_blog(){$.ajax({url:"https://shopninja.in/bharatagri/api/public/api/customer/blog_details",type:"GET",success:function(t){var r;t.blog_details&&0<t.blog_details.length&&(r=$("#blog"),t.blog_details.forEach(function(t){var e=t.image_names,a=[],e=(e&&(a=-1<e.indexOf(",")?e.split(","):[e]),`

<div class="item box_shadow b-t-1">
<div class="thumb">
    <a href="blog_customer_inner.php?id=${t.id}">
        <img src="https://shopninja.in/bharatagri/api/public/uploads/blog_img/${a[0]}" class="engineoil_img  w-100" alt="img" loading="lazy">
   </a> </a>
</div>
<div class="content mb-3 ms-3">
<a href="blog_customer_inner.php?id=${t.id}">
    <button type="button" class="btn btn-warning mt-3">${t.blog_category} </button>
    </a>
    <div class="row mt-2">
        <p class="fw-bold text-truncate">${t.heading}</p>
    </div>
    <div class="row">
        <p class="fw-bold"><span>publisher: </span>${t.publisher}</p>
    </div>
    <div class="row">
        <p class="fw-bold"><span>Date/time: </span>${t.date}</p>
    </div>
    
</div>
</div>
`);r.append(e)}),r.owlCarousel({items:4,loop:!0,margin:10,nav:!0,autoplay:!0,autoplayTimeout:3e3,responsiveClass:!0,responsive:{0:{items:1,nav:!1},600:{items:3,nav:!1},1e3:{items:4,nav:!0,loop:!1}}}))},error:function(t){console.error("Error fetching data:",t)}})}function get_brand(){$.ajax({url:"https://shopninja.in/bharatagri/api/public/api/customer/get_brand_for_finance",type:"GET",headers:{Authorization:"Bearer "+localStorage.getItem("token")},success:function(t){document.querySelectorAll("#brand").forEach(a=>{a.innerHTML='<option selected disabled value="">Please select an option</option>',0<t.brands.length?(t.brands.forEach(t=>{var e=document.createElement("option");e.textContent=t.brand_name,e.value=t.id,a.appendChild(e)}),a.addEventListener("change",function(){var t=this.value;get_model_1(t)})):a.innerHTML="<option>No valid data available</option>"})},error:function(t){console.error("Error fetching data:",t)}})}$(document).ready(function(){getpopularTractorList(),getUpcomingTractorList(),getLatestTractorList(),getminiTractorList(),get_harvester(),get_oldharvester(),get_All_News(),get_blog()}),get_brand();