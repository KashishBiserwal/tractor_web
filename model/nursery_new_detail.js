function getProductById() {
    const urlParams = new URLSearchParams(window.location.search);
    const productId = urlParams.get('id');
    if (!productId) return;

    const url = `https://shopninja.in/bharatagri/api/public/api/customer/nursery_data/${productId}`;

    $.ajax({
        url,
        type: "GET",
        success: function (data) {
            if (!data || !data.nursery_data || data.nursery_data.length === 0) return;

            const nursery = data.nursery_data[0];
            document.getElementById('nursery_call').innerText = nursery.mobile;
            document.getElementById('total_cyclinder_value2').innerText = nursery.address;
            document.getElementById('model_name').innerText = nursery.nursery_name;
            document.getElementById('description').innerText = nursery.description;


            // const model = nursery.model;
            const imageNames = nursery.image_names.split(',').map(img => img.trim());
            const mainImageUrl = `https://shopninja.in/bharatagri/api/public/uploads/nursery_img/${imageNames[0]}`;

           
          

            // Update brand_model (if any)
            const brandModelElements = document.getElementsByClassName('brand_model');
            for (let i = 0; i < brandModelElements.length; i++) {
                brandModelElements[i].innerText = `${nursery_name}`;
            }

            // Main Image
            $('#main-image').attr('src', mainImageUrl);

            // Thumbnails in left bar
            const leftBarContainer = $('#left-bar').empty();

            imageNames.slice(0, 3).forEach(imageName => {
                
                const imageUrl = `https://shopninja.in/bharatagri/api/public/uploads/nursery_img/${imageName}`;
                const image = $(`<img class="img-fluid" style="width: 120px; height: 120px; margin-bottom: 10px; cursor: pointer;" src="${imageUrl}" />`);
                image.on('click', function () {
                    $('#main-image').attr('src', imageUrl);
                });
                leftBarContainer.append(image);
            });
        },
        error: function (error) {
            console.error('Error fetching product:', error);
        }
    });
}

function get_allbrand() {
    const url = "https://shopninja.in/bharatagri/api/public/api/customer/get_brands";
    const initialDisplayCount = 6;
    let displayedBrands = 0;

    $.ajax({
        url,
        type: "GET",
        success: function (data) {
            const brands = data.brands || [];
            const productContainer = $("#related_brand");
            if (!brands.length) return;

            displayBrands(brands.slice(0, initialDisplayCount));
            displayedBrands = initialDisplayCount;

            const loadMoreBtn = $("#loadMoreButton");
            if (displayedBrands >= brands.length) {
                loadMoreBtn.hide();
            } else {
                loadMoreBtn.show().off().on("click", function () {
                    const nextSlice = brands.slice(displayedBrands, displayedBrands + initialDisplayCount);
                    displayBrands(nextSlice);
                    displayedBrands += nextSlice.length;
                    if (displayedBrands >= brands.length) loadMoreBtn.hide();
                });
            }
        },
        error: function (error) {
            console.error('Error fetching brands:', error);
        }
    });
}

function displayBrands(brands) {
    const container = $("#related_brand");
    brands.forEach(b => {
        const card = `
            <div class="col-6 col-lg-6 col-md-6 col-sm-6 p-2">
                <div class="brand-main box_shadow text-center">
                    <a class="weblink text-decoration-none text-dark" href="#">
                        <img class="img-fluid" src="https://shopninja.in/bharatagri/api/public/uploads/brand_img/${b.brand_img}" alt="Brand Logo" style="height: 120px; padding: 10px;" loading="lazy">
                        <p class="mb-0 pb-1 oneline">${b.brand_name}</p>
                    </a>
                </div>
            </div>`;
        container.append(card);
    });
}

function getpopularTractorList() {
    const url = "https://shopninja.in/bharatagri/api/public/api/customer/get_new_tractor";

    $.ajax({
        url,
        type: "GET",
        success: function (data) {
            const popularIds = data.product.accessory_and_tractor_type
                .filter(item => item.tractor_type_name.includes("Popular"))
                .map(item => item.product_id);

            const allProducts = data.product.allProductData || [];
            displayPopularTractors(allProducts.slice(0, 6), popularIds);

            if (allProducts.length > 6) {
                $("#loadMoretract").show().off().on("click", function () {
                    window.location.href = "popular_tractors.php";
                });
            }
        },
        error: function (error) {
            console.error('Error fetching popular tractors:', error);
        }
    });
}

function displayPopularTractors(products, popularIds) {
    const container = $("#productContainerpopular");

    products.forEach(p => {
        if (!popularIds.includes(p.product_id)) return;

        const image = p.image_names?.split(',')[0] || '';
        const card = `
            <div class="used-tractor mb-3 d-flex flex-row shadow p-2" style="background-color:#fff">
                <div class="text-center">
                    <a href="detail_tractor.php?product_id=${p.product_id}">
                        <img src="https://shopninja.in/bharatagri/api/public/uploads/product_img/${image}" width="100" height="100" alt="${p.model}" style="border-radius: 10px;" loading="lazy">
                    </a>
                </div>
                <div class="px-2 d-flex flex-column justify-content-center">
                    <a href="detail_tractor.php?product_id=${p.product_id}" class="text-decoration-none">
                        <p class="mb-1">${p.model}</p>
                    </a>
                    <p class="trac">
                        <span class="bg-light"> ${p.hp_category} HP</span>
                        <span class="bg-light">${p.wheel_drive_value}</span>
                    </p>
                    <a href="#"><img src="assets/images/index_trac_files/park-solid_phone-call.svg" width="15" height="15" alt="Call"> Call Now</a>
                </div>
            </div>`;
        container.append(card);
    });
}

function isUserLoggedIn() {
    return localStorage.getItem('token_customer') && localStorage.getItem('mobile') && localStorage.getItem('id');
}

function store(event) {
    event.preventDefault();
    if (isUserLoggedIn()) {
        if (confirm("Are you sure you want to submit the form?")) {
            submitForm();
            $('#staticBackdrop').modal('show');
        }
    } else {
        const mobile = $('#number').val();
        get_otp(mobile);
    }
}

// Initialize on page load
$(document).ready(function () {
    getProductById();
    get_allbrand();
    getpopularTractorList();
});
