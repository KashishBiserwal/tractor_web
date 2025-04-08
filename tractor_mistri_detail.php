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
        padding: 10px;
        border-radius: 10px;
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
     margin-top: 100px;
    }

    /* Responsive tweaks */
    @media (max-width: 768px) {
        .mainImage {
            width: 100%;
            height: auto;
        }

        #tractor-images {
            flex-direction: column;
        }

        .highlights {
            margin-top: 20px;
            border-radius: 12px;
        }

        .highlights li {
            padding: 5px 0;
            border-bottom: 1px dashed #ccc;
        }
    }

    /* Enhance Highlights UI */
    .highlights {
        background-color: #ffffff;
        box-shadow: 0 0 15px rgba(0, 0, 0, 0.08);
        padding: 20px;
        border-radius: 12px;
    }

    .highlights ul {
        padding-left: 0;
    }

    .highlights li {
        font-size: 15px;
        line-height: 1.6;
        padding: 8px 0;
        display: flex;
        justify-content: space-between;
        border-bottom: 1px solid #f1f1f1;
    }

    .highlights li:last-child {
        border-bottom: none;
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

   

    @media (max-width: 768px) {
        .highlights {
            margin-top: 20px;
            padding: 10px;
        }

        .highlights ul li {
            font-size: 14px;
            margin-bottom: 8px;
        }

        .highlights h4.head {
            font-size: 18px;
        }
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
                <div class=" col-md-9">
                    <div>
                        <div id="tractor-images" class="d-flex gap-5">
                            <div id="left-bar"></div>
                            <div>
                                <img src="" id="main-image" alt="" class="mainImage">
                            </div>
                        </div>
                    </div>
                    <section >
                        <div class="gridd">
                            <div class="left">
                                <div class="tabs">
                                    <div class="tab active" data-tab="description">About</div>
                                </div>
                                <div id="description" class="content active ">
                                </div>


                            </div>

                        </div>
                    </section>

                </div>
                <div class="col-12 col-md-3 highlights">
                    <h4 class="head">Highlights</h4>
                    <ul class="list-unstyled">
                        <li><strong>Name:</strong> <span id="name"></span></li>
                        <li><strong>Call:</strong> <span id="mistri_call"></span></li>
                        <li><strong>Services:</strong> <span id="services"></span></li>
                        <li><strong>Brand:</strong> <span id="brand"></span></li>
                        <li><strong>Model:</strong> <span id="model"></span></li>
                        <li><strong>Category:</strong> <span id="category"></span></li>
                        <li><strong>Contact Person:</strong> <span id="contact_person"></span></li>
                        <li><strong>Manpower:</strong> <span id="manpower"></span></li>
                        <li><strong>Doorstep Service:</strong> <span id="doorstep_service"></span></li>
                        <li><strong>State:</strong> <span id="state_name"></span></li>
                        <li><strong>District:</strong> <span id="district_name"></span></li>
                        <li><strong>Tehsil:</strong> <span id="tehsil_name"></span></li>
                        <li><strong>Address:</strong> <span id="local"></span></li>
                    </ul>
                </div>

            </div>
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