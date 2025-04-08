<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    include 'includes/headertag.php';
    include 'includes/headertagadmin.php';
    $id = $_REQUEST['id'];
    include 'includes/footertag.php';
    ?>

    <script> var APIBaseURL = "<?php echo $APIBaseURL; ?>";</script>
    <script> var baseUrl = "<?php echo $baseUrl; ?>";</script>
    <script src="<?php $baseUrl; ?>model/State_dist_tehsil.js" defer></script>
</head>
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-6Z38E658LD"></script>
<script>
    window.dataLayer = window.dataLayer || [];
    function gtag() { dataLayer.push(arguments); }
    gtag('js', new Date());

    gtag('config', 'G-6Z38E658LD');
</script>
<style>
    .head {
        font-size: 20px;
        font-weight: 600;
        color: #333;
        margin-bottom: 20px;
        background-color: #F2F2F2;
        padding-top: 10px;
        border-radius: 10px;
    }

    .highlights {
        background-color: #F2F2F2;
        padding: 10px 25px;
        border-radius: 10px;
        max-height: max-content;
    }

    .mainImage {
        width: 100%;
        height: 100%;
        object-fit: contain;
        border: 1px solid #F2F2F2;
        padding: 10px;
        border-radius: 10px;
    }

    #left-bar {
        display: grid;
    }

    .tabs {
        display: flex;
        gap: 10px;
        cursor: pointer;
    }

    .tab {
        padding: 10px 20px;
        border: 1px solid #ccc;
        border-bottom: none;
        background: #f1f1f1;
        border-radius: 10px 10px 0 0;
    }

    .tab.active {
        background: #233C50;
        font-weight: bold;
        color: white;
    }

    .content {
        display: none;
        padding: 20px;
        border-top: 2px solid #ccc;
    }

    .content.active {
        display: block;
    }

    .gridd {
        display: grid;
        grid-template-columns: 8fr 4fr;
        gap: 80px;
    }


    @media (max-width: 768px) {
        .row {
            margin-left: 0 !important;
            margin-right: 0 !important;
        }

        .col-6 {
            padding-left: 8px !important;
            padding-right: 8px !important;
        }

        .feature__gridIcon img {
            width: 40px;
            height: 40px;
        }

        .feature__gridProperty {
            font-size: 12px;
        }

        .engine_name {
            font-size: 11px;
        }

        .mt-130 {
            margin-top: 72px !important;
        }
    }

    .mt-130 {
        margin-top: 117px;
    }
</style>

<body>
    <?php
    include 'includes/header.php';
    ?>

    <section class="mt-130 bg-light" style="margin-top: 180px;">
        <div class="container">
            <div class="py-2">
                <span class="text-white">
                    <a href="index.php" class="text-decoration-none header-link px-1">Home
                        <i class="fa-solid fa-chevron-right px-1"></i>
                    </a>
                    <a href="" id="model_name" class="text-decoration-none header-link px-1"> <span
                            class="text-dark p"></span></a>
                </span>
            </div>
        </div>
    </section>

    <section id="Mahindra_575" class="mb-5">
        <div class="container pt-4">
            <div class="row">
                <div class="col-9">
                    <div>
                        <div id="tractor-images" class="d-flex gap-5">
                            <div id="left-bar"></div>
                            <div>
                                <img src="" id="main-image" alt="" class="mainImage">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-3 highlights">
                    <h4 class="head">Highlights</h4>
                    <ul>
                        <li>
                            <p>Brand : <span id="brand_name"></span></>
                        </li>
                    </ul>
                    <ul>
                        <li>
                            <p>Category : <span id="category"></span></>
                        </li>
                    </ul>
                    <ul>
                        <li>
                            <p> <span id="sub_category"></span></>
                        </li>
                    </ul>
                    
                    
                    <ul>
                        <li>
                            <button type="submit" class="btn fw-bold" style="background-color: #B90405; color: white" data-bs-toggle="modal" data-bs-target="#staticBackdrop3">
                           Send Enquiry
                    </button>
                                
                        </li>
                    </ul>

                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container">
            <div class="row ">
                <div class="col-12 col-lg-9 col-md-9 col-sm-9" >
                    <div class="my-4">
                        <div class="text-editor-black my-4 " style="background-color:#fff">
                            <h4><p class="mt-md mt-4 p-2 mb-3 my-4 assured">Specifications For <span id="imple_name"></span></p></h4>
                        </div>
                    </div>
                    <table class="table w-100 table-hover table table-striped my-4">
                        <thead>
                            <tr>
                            </tr>
                        </thead>
                        <tbody id="tableData"></tbody>
                    </table>
                </div>
                
            </section>

    <?php
    include 'includes/footer.php';
    include 'includes/footertag.php';
    ?>
    <div class="modal fade" id="staticBackdrop3" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-md modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title ms-1 brand_model" id="staticBackdropLabel"></h5>
                    <button type="button" data-bs-dismiss="modal" aria-label="Close"><img
                            src="assets/images/close.png" style="filter: brightness(0); width: 20px;"></button>
                </div>
                <!-- MODAL BODY -->
                <div class="modal-body">
                    <form id="inner_brand_form" method="POST" onsubmit="return false">
                        <div class="row gap-2">
                            <div class="col-12 " hidden>
                                <label for="name" class="form-label fw-bold text-dark"><i
                                        class="fa-duotone fa-chart-pie-simple"></i></label>
                                <input type="text" class="form-control" placeholder="Enter Your Name" id="product_id"
                                    value="" name="">
                            </div>
                            <div class="col-12 " hidden>
                                <label for="name" class="form-label fw-bold text-dark"><i
                                        class="fa-duotone fa-chart-pie-simple"></i> Model Name</label>
                                <input type="text" class="form-control" placeholder="Enter Your Name"
                                    id="enquiry_type_id" value="2" name="iduser">
                            </div>
                            <div class="col-12 " hidden>
                                <label for="name" class="form-label fw-bold text-dark"><i
                                        class="fa-duotone fa-chart-pie-simple"></i> Model Name</label>
                                <input type="text" class="form-control" placeholder="Enter Your Name"
                                    id="product_type_id" value="2" name="iduser">
                            </div>
                            <div class="col-12">
                                <input type="text" class="form-control" placeholder="Enter Your Name" id="fullname"
                                    name="fullname">
                            </div>
                            <div class="col-12">
                                <input type="number" class="form-control" placeholder="Enter Mobile Number" id="mobile_number"
                                    name="mobile_number">
                            </div>
                            <div class="col-12">
                                <div class="form-outline mb-2">
                                    <label for="state" class="form-label text-dark fw-bold">State</label>
                                    <select class="form-select py-2 state-dropdown" aria-label=".form-select-lg example"
                                        id="state" name="state">
                                    </select>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-outline my-2">
                                    <label for="district" class="form-label fw-bold text-dark"> District</label>
                                    <select class="form-select py-2 district-dropdown"
                                        aria-label=".form-select-lg example" id="district" name="district">
                                    </select>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-outline my-2">
                                    <label for="Tehsil" class="form-label fw-bold text-dark"> Tehsil</label>
                                    <select class="form-select py-2 tehsil-dropdown"
                                        aria-label=".form-select-lg example" id="Tehsil" name="Tehsil">
                                    </select>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="submit" id="submit_enquiry" class="btn add_btn w-100 btn_all" style="background-color: #B90405; color: white"
                                    onclick="savedata('${formId}')" data-bs-dismiss="modal">Submit</button>
                            </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</body>
<script>

$(document).ready(function() {
    get_detail();
    $('#submit_enquiry').click(submitForm);
    
});

function get_detail() {
    console.log(window.location);
    var urlParams = new URLSearchParams(window.location.search);
    var Id = urlParams.get('id');
    var url = "https://shopninja.in/bharatagri/api/public/api/customer/get_implement_details_by_id/" + Id;

    $.ajax({
        url: url,
        type: "GET",
        success: function(data) {
            var implementsData = data.getAllImplementsById[0].implements_data[0];
            var customData = data.getAllImplementsById[1].implement_custom_data;
            const brand_model = implementsData.brand_name + " " + implementsData.model;
            document.querySelector('.brand_model').innerText = brand_model;
            document.getElementById('brand_name').innerText = brand_model;
            document.getElementById('model_name').innerText = brand_model;
            // document.getElementById('model').innerText = implementsData.model;
            var cleanedString = implementsData.sub_category_name.replace(/[^\w\s]/gi, '');
            var spacedString = cleanedString.replace(/_/g, ' ');
            document.getElementById('sub_category').innerText = spacedString;
            document.getElementById('category').innerText = implementsData.category_name;
            document.getElementById('product_id').value = implementsData.product_id;
            document.getElementById('imple_name').innerText = brand_model;
    
            var tableData = $("#tableData");
            tableData.html('');
            console.log(customData, "customData");
    
            if (customData && customData.length > 0) {
                customData.forEach(function(customColumn) {
                    var columnName = customColumn[Object.keys(customColumn)[0]];
                    var value = customColumn[Object.keys(customColumn)[1]];
    
                    var tableRow = `
                        <tr class="">
                            <td class="fs-6"><span>${columnName} </span></td>
                            <td class="fs-6"><span>${value}</span></td>
                        </tr>
                    `;
                    tableData.append(tableRow);
                });
            }

            var imageNames = implementsData.image_names.split(',');
            var mainImageContainer =  $('#main-image');
            var mainImageUrl = "https://shopninja.in/bharatagri/api/public/uploads/product_img/" + imageNames[0].trim();
            mainImageContainer.attr('src', mainImageUrl);
            var leftBarContainer = $('#left-bar');
            var threeImageNames = imageNames.slice(0, 3);
            threeImageNames.forEach(function(imageName) {
                var imageUrl = "https://shopninja.in/bharatagri/api/public/uploads/product_img/" + imageName.trim();
                var image = $('<img class="img-fluid" style="width: 120px; cursor: pointer;" src="' + imageUrl + '" />');
                image.on('click', function() {
                    console.log(imageUrl, "imageUrl");
                    mainImageContainer.attr('src', imageUrl);
                });
                leftBarContainer.append(image);
            });
        },
        error: function(error) {
            console.error('Error fetching data:', error);
        }
    });
}

function submitForm() {
    var enquiry_type_id = $('#enquiry_type_id').val();
    var enquiry_type_id = $('#enquiry_type_id').val();
    var product_type_id = $('#product_type_id').val()
    var product_id = $('#product_id').val();
    var first_name = $('#fullname').val();
    var last_name = ""
    var mobile = $('#mobile_number').val();
    var state = $('#state').val();
    var district = $('#district').val();
    var tehsil = $('#Tehsil').val();
    var paraArr = {
        'product_id':product_id,
        'enquiry_type_id':enquiry_type_id,
        'product_type_id': product_type_id,
        'first_name': first_name,
        'last_name':last_name,
        'mobile':mobile,
        'state':state,
        'district':district,
        'tehsil':tehsil,
    };
    
    if(mobile.length < 10 || mobile.length > 10){
        $("#errorStatusLoading").modal('show');
        $("#errorStatusLoading").find('.modal-title').html('<p class="text-center">Process Failed..! Enter 10 digits Mobile Number</p>');
        return;
    }
    

    var url = "https://shopninja.in/bharatagri/api/public/api/customer/customer_enquiries";

    $.ajax({
        url: url,
        type: "POST",
        data: paraArr,
        success: function (result) {
            alert("Enquiry submitted successfully!");
            console.log("Form submitted successfully!");
        },
        error: function (error) {
            console.error('Error submitting form:', error);
            var msg = error;
            $("#errorStatusLoading").modal('show');
            $("#errorStatusLoading").find('.modal-title').html('<p class="text-center">Process Failed..! Enter Valid Detail</p>');
            $("#errorStatusLoading").find('.modal-body').html(msg);
            $("#errorStatusLoading").find('.modal-body').html('<img src="assets/images/comp_3.gif" style="display:block; margin:0 auto;" class="w-50 text-center" alt="Successfull Request"></img>');
        }
    });
}
</script>
</html>

