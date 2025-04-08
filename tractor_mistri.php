<!DOCTYPE html>
<html lang="en">
<head>
    <?php
        include 'includes/headertag.php';
        include 'includes/categorySidebar.php';
        include 'includes/headertagadmin.php';
        include 'includes/footertag.php';
        include 'includes/spinner.php';
    ?> 

    <style>
        .buttonn {
            background-color: #B90405;
            border: none;
            color: white;
            padding: 10px 20px;
            font-size: 14px;
            margin: 10px 0;
            cursor: pointer;
            border-radius: 5px;
        }

        label.error {
            color: red;
            font-size: 12px;
            display: block;
            margin-top: 5px;
        }

        .text-truncate {
            overflow: hidden;
            white-space: nowrap;
            text-overflow: ellipsis;
        }

        @media (max-width: 768px) {
            .mt-5 {
                margin-top: 10px !important;
            }
            .sidebar-padding {
                padding-left: 0 !important;
            }
        }

        @media (min-width: 769px) {
            .sidebar-padding {
                padding-left: 220px;
            }
        }
    </style>
</head>
<body>
    <?php include 'includes/header.php'; ?>

    <section class="mt-5 pt-4 bg-light">
        <div class="container">
            <div class="mt-5 pt-2">
                <span class="mt-5 text-white">
                    <a href="index.php" class="text-decoration-none header-link px-1">Home 
                        <i class="fa-solid fa-chevron-right px-1"></i>
                    </a>
                    <span class="text-dark">Tractor Mistri</span>
                </span>
            </div>
        </div>
    </section>

    <section>
        <div class="container mt-4" style="width: auto;
    padding-left: 210px;
    padding-top: 29px;
">
            <div class="col-12">
                <h3 class="text-center pb-3 d-flex justify-content-center gap-2">TRACTORS  
                    <span class="fw-bold" style="color: #B90405">MISTRI</span>
                </h3>
                <div id="productContainer" class="row g-3 mt-4"></div>
                <div class="col-12 text-center">
                    <h5 id="noDataMessage" class="text-danger mt-4" style="display: none;">
                        <img src="assets/images/404.gif" class="w-25" alt=""><br>Data not found..!
                    </h5>
                    <button type="button" id="loadMoreBtn" class="buttonn">Load More</button> 
                </div>
            </div>
        </div>
    </section>

    <?php
        include 'includes/footer.php';
        include 'includes/footertag.php';
    ?>
</body>
</html>

<script>
    var cardsPerPage = 6;
    var allCards = [];
    var cardsDisplayed = 0;

    function getoldTractorList() {
        var url = "https://shopninja.in/bharatagri/api/public/api/customer/tractor_mistri";
        $.ajax({
            url: url,
            type: "GET",
            success: function (response) {
                if (response.data && response.data.length > 0) {
                    allCards = response.data.slice().reverse();
                    displayCards();
                } else {
                    $("#loadMoreBtn").hide();
                    $("#noDataMessage").show();
                }
            },
            error: function (error) {
                console.error('Error fetching data:', error);
                $("#loadMoreBtn").hide();
                $("#noDataMessage").show();
            }
        });
    }

    function displayCards() {
        var productContainer = $("#productContainer");

        allCards.slice(cardsDisplayed, cardsDisplayed + cardsPerPage).forEach(function (p) {
            appendCard(productContainer, p);
            cardsDisplayed++;
        });

        if (cardsDisplayed >= allCards.length) {
            $("#loadMoreBtn").hide();
        } else {
            $("#loadMoreBtn").show();
        }
    }

    $(document).on('click', '#loadMoreBtn', function () {
        displayCards();
    });

    function appendCard(container, p) {


        var cardHtml = `
            <div class="col-12 col-sm-6 col-md-4">
              <div class="h-auto success__stry__item d-flex flex-column" style="border-radius: 10px; border: 1px solid #F2F2F2">
                    <div class="thumb">
                        <div>
                            <div class="ratio ratio-16x9">
                                   
                                  <img src="${p.img ? 'https://shopninja.in/bharatagri/api/public/' + p.img : 'assets/images/Tractor-mistri.jpg'}" class="img-fluid object-fit-cover rounded" alt="Tractor Image" loading="lazy">
                            </div>
                        </div>
                    </div>
                    <div class="content d-flex flex-column flex-grow-1 px-3 ">
                         <div class="caption text-left text-truncate">
                            <div class="col-12">
                                <p class="text-dark text-truncate mb-1">${p.first_name}</p>
                            </div>
                        </div>
                        <div class="row text-left">
                            <div class="col-12 text-left">
                             <p class="text-dark text-truncate mb-2">${p.mobile}</p>
                            </div>
                        </div>
                    </div>
              
                <div class="col-12 mt-2">
                <a href="tractor_mistri_detail.php?id=${p.id}">
                    <button type="button" style="background-color: #B90405; color: white; border-radius: 10px;" class="add_btn w-100"  >
                        View Detail
                    </button>
                    </a>
                </div>


            </div>
        `;

        container.append(cardHtml);
    }

    getoldTractorList();
</script>
