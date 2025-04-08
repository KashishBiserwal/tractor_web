<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    include 'includes/headertag.php';
    include 'includes/headertagadmin.php';
    $product_id = $_REQUEST['product_id'];
    //    echo $product_id;
    include 'includes/footertag.php';
    ?>

    <script>
        var APIBaseURL = "<?php echo $APIBaseURL; ?>";
    </script>
    <script>
        var baseUrl = "<?php echo $baseUrl; ?>";
    </script>
    <script src="<?php $baseUrl; ?>model/tractor_mistri_detail.js" defer></script>
    <script src="<?php $baseUrl; ?>model/State_dist_tehsil.js" defer></script>
</head>
<!-- Google tag (gtag.js) -->
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
                    <h4 class="head">Contact</h4>
                    <ul>
                        <li>
                            <p>Services : <span id="services"></span></>
                        </li>
                    </ul>
                    <ul>
                        <li>
                            <p>call : <span id="mistri_call"></span></>
                        </li>
                    </ul>
                    <ul>
                        <li>
                            <p>Address : <span id="total_cyclinder_value2"></span></>
                        </li>
                    </ul>



                </div>
            </div>
        </div>
    </section>

    <section class="container">
        <div class="gridd">
            <div class="left">
                <div class="tabs">
                    <div class="tab active" data-tab="description">About</div>

                </div>
                <div id="description" class="content active ">
                </div>


            </div>
            <!-- 
            <div class="right">
                <div class=" table-and-card pt-4">
                    <div class="">
                        
                        <div class="sticky my-3">
                            <div class="popular_used_tractor mb-3">
                                <h4 class="text-center fw-bold mt-3">Similar Tractors</h4>
                            </div>
                            <div class="popular-used-tractor">
                                <div id="productContainerpopular">
                                </div>
                                <div class=" text-center"><button class="btn btn-success" id="loadMoretract">Load
                                        More</button></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->
        </div>
    </section>

    <section class="section slider-section">
    </section>





    <?php
    include 'includes/footer.php';
    include 'includes/footertag.php';

    ?>


</html>

<script>
    $('#usedtractorforsell').owlCarousel({
        loop: true,
        margin: 10,
        nav: true,
        navText: [
            "<i class='fa fa-caret-left'></i>",
            "<i class='fa fa-caret-right'></i>"
        ],
        autoplay: false,
        autoplayTimeout: 3000,
        autoplayHoverPause: true,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 3
            },
            1000: {
                items: 3
            }
        }
    })
</script>
<script>
    document.querySelectorAll('.tab').forEach(tab => {
        tab.addEventListener('click', function() {
            document.querySelectorAll('.tab').forEach(t => t.classList.remove('active'));
            document.querySelectorAll('.content').forEach(c => c.classList.remove('active'));

            this.classList.add('active');
            document.getElementById(this.dataset.tab).classList.add('active');
        });
    });
</script>

