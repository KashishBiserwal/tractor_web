<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    include 'includes/header.php';
    include 'includes/headertag.php';
    include 'includes/categorySidebar.php';
    include 'includes/headertagadmin.php';
    ?>
       <script src="<?php $baseUrl; ?>model/farm_imple_category_customer_new.js"></script>

    <script> var APIBaseURL = "<?php echo $APIBaseURL; ?>";</script>
    <script> var baseUrl = "<?php echo $baseUrl; ?>";</script>
</head>
<script async src="https://www.googletagmanager.com/gtag/js?id=G-6Z38E658LD"></script>
<script>
    window.dataLayer = window.dataLayer || [];
    function gtag() { dataLayer.push(arguments); }
    gtag('js', new Date());

    gtag('config', 'G-6Z38E658LD');
</script>

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

    .new-tractor-content h5 {
        white-space: nowrap;
        text-overflow: ellipsis;
        overflow: hidden;
        font-size: 15px;
        margin-bottom: 0;
        text-transform: uppercase;
    }

    .table_detail_section tbody tr td,
    .table_detail_section table thead tr th {
        padding: 15px;
    }

    .card {
        width: calc(25% - 20px);
        height: 40px;
        background-color: #fff;
        border-radius: 5px;
        /* margin-bottom: 10px; */
        display: flex;
        align-items: center;
        justify-content: center;
        text-align: center;
        font-size: 16px;
        font-weight: bold;
    }

    .card a {
        text-decoration: none;
        color: black;
        width: 100%;
        height: 100%;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .buttonn{
        background-color: #B90405;
        border: none;
        color: white;
        padding: 10px 10px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 14px;
        margin: 4px 2px;
        cursor: pointer;
    }
</style>

<body>
    <section style="width: 80%; margin-left: auto;">
        
        <div class="mt-130 bg-light">
        
            <div class="container" style="margin-top: 40px;">
            
                <div class="py-2">
                    <span class="text-white"><a href="index.php" class="text-decoration-none header-link px-1">Home</a>
                    </span>
                </div>
            </div>
        </div>
        <h1 class="d-flex align-center justify-content-center my-3 text-center fs-3" style="color: #B90405">IMPLEMENTS</h1>
        <div class="container" id="category-tabs" style="display: flex; flex-wrap: wrap; gap: 10px; margin-top: 10px;">
        </div>
        <section style="">
            <div class="container my-5">
                <h4 id="heading_imple" class="bg-light assured ps-3 py-2"></h4>
                <div class="row" id="productContainer" ></div>
                <div class="col-12 text-center mt-3 pt-2 mx-4 ">
                    <button id="load_moretract" type="button" class="add_btn buttonn">
                     Load More Implements
                    </button>
                </div>
            </div>
        </section>
    </section>
    <?php
    include 'includes/footer.php';
    include 'includes/footertag.php';
    ?>
</body>

</html>

<script>

    $(document).ready(function () {
        get_implement();
    })

    function get_implement() {
        var url = 'https://shopninja.in/bharatagri/api/public/api/customer/get_implement_category';
        var headers = {
            'Authorization': 'Bearer ' + localStorage.getItem('token')
        };

        $.ajax({
            url: url,
            type: "GET",
            headers: headers,
            success: function (data) {
                $("#category-tabs").empty();

                var newCard = data.allCategory.slice(0, 8).map(function (allCategory) {
                    return `<div class="card" id="${allCategory.category_name.replace(/\s+/g, '')}">
                  <a class="fw-bold" class="card-link" href="farmImplements.php?id=${allCategory.id}">
                    ${allCategory.category_name}
                  </a>
                </div>`;
                });

                // Add "ALL Implement" after the first 8 brands
                newCard.push(`<div class="card">
                  <a class="fw-bold" class="card-link" href="allFarmImple.php">
                    ALL
                  </a>
                </div>
                   `);

                $("#category-tabs").append(newCard);

                // Assuming you have a select element with id "select"
                $("#select").on('click', function () {
                    const selectedBrandId = this.value;
                    get_subcategory(selectedBrandId);
                });
            },
            error: function (error) {
                console.error('Error fetching data:', error);
            }
        });
    }

    
</script>