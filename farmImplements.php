<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    include 'includes/header.php';
    include 'includes/headertag.php';

    include 'includes/headertagadmin.php';
    ?>
    <script src="<?php $baseUrl; ?>model/farm_imple_category_customer_new.js"></script>

    <script>
        var APIBaseURL = "<?php echo $APIBaseURL; ?>";
    </script>
    <script>
        var baseUrl = "<?php echo $baseUrl; ?>";
    </script>
</head>
<script async src="https://www.googletagmanager.com/gtag/js?id=G-6Z38E658LD"></script>
<script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'G-6Z38E658LD');
</script>

<style>
    .mainContainer {
        margin-top: 10rem;
    }

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

    .buttonn {
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
      /* Mobile view styles */
      @media (max-width: 768px) {
        .mainContainer {
            margin-top: 12rem;
        }

        .card {
            width: calc(50% - 20px); /* 2 cards per row */
        }

        #sidebarMenu {
            display: none;
        }

        .d-md-none {
            display: block;
        }

        #mobileSidebar {
            display: block;
        }

        .container {
            flex-direction: column;
            padding: 0;
        }

        #category-tabs {
            flex-direction: column;
        }

        #productContainer {
            flex-direction: column;
        }

        #load_moretract {
            width: 100%;
        }
    }

    /* Extra small mobile view styles */
    @media (max-width: 480px) {
        .card {
            width: 100%; /* Full-width for smaller screens */
        }

        .mainContainer {
            margin-top: 8rem;
        }

        .buttonn {
            font-size: 12px;
            padding: 8px;
        }
    }
</style>

<body>

   <div class="mainContainer">
    <section style="max-width: 95%; margin: auto;">
    <button class="btn buttonn d-md-none mb-3" onclick="toggleSidebar()">
                <i class="fas fa-bars"></i> Menu
            </button>

        <div class="row">
            <!-- Sidebar -->
            <div class="col-md-2 d-none d-md-block" id="sidebarMenu">
                <div class="mb-4">
                    <?php include 'includes/categorySidebar.php'; ?>
                </div>
            </div>
            <div class="col-12 col-md-10">
                <h1 class="d-flex align-center justify-content-center my-3 text-center fs-3" style="color: #B90405">IMPLEMENTS</h1>
                <div class="container" id="category-tabs" style="display: flex; flex-wrap: wrap; gap: 10px; margin-top: 10px;">
                </div>
                <h4 id="heading_imple" class="bg-light assured ps-3 py-2 mt-2"></h4>
                <div class="row" id="productContainer"></div>
                <div class="col-12 text-center mt-3 pt-2 mx-4 ">
                    <button id="load_moretract" type="button" class="add_btn buttonn">
                        Load More Implements
                    </button>
                </div>
            </div>
        </div>
    </section>
    </div>
    <!-- Mobile Sidebar (offcanvas-style) -->
    <div id="mobileSidebar" class="d-md-none" style="display: none; position: fixed; top: 16%; left: 0; width: 100%; height: 100vh;  background: white; padding: 20px; box-shadow: 2px 0 10px rgba(0,0,0,0.2); overflow-y: auto;">
        <button class="btn btn-danger mb-3" onclick="toggleSidebar()">Close</button>
        <?php include 'includes/categorySidebar.php'; ?>
    </div>

    <?php
    include 'includes/footer.php';
    include 'includes/footertag.php';
    ?>
</body>

</html>

<script>
    function toggleSidebar() {
        const sidebar = document.getElementById('mobileSidebar');
        sidebar.style.display = sidebar.style.display === 'none' || sidebar.style.display === '' ? 'block' : 'none';
    }
</script>
<script>
    $(document).ready(function() {
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
            success: function(data) {
                $("#category-tabs").empty();

                var newCard = data.allCategory.slice(0, 8).map(function(allCategory) {
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
                $("#select").on('click', function() {
                    const selectedBrandId = this.value;
                    get_subcategory(selectedBrandId);
                });
            },
            error: function(error) {
                console.error('Error fetching data:', error);
            }
        });
    }
</script>