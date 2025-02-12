<!DOCTYPE html>
<html lang="en">

<head>
<?php
    include 'includes/headertag.php';
    include 'includes/headertagadmin.php';
   include 'includes/footertag.php';
   include 'includes/spinner.php';
   ?> 
    
</head>
<body>
<?php
   include 'includes/header.php';
   ?>

<section class="mt-5 pt-4 bg-light">
        <div class="container ">
            <div class="mt-5 pt-2">
                <span class="mt-5 text-white">
                    <a href="index.php" class="text-decoration-none header-link px-1">Home <i
                            class="fa-solid fa-chevron-right px-1"></i></a>

                    <span class="text-dark"> Tractor Mistri</span>
                </span>
            </div>
        </div>
    </section>

    <section>
        <div class="container mt-1">
        <div class="col-12">
                <h3 class="">TRACTORS <span class="text-success fw-bold"> MISTRI</span></h3>
                <div id="productContainer" class="row mt-4"></div>
                <div class="col-12 text-center">
                    <h5 id="noDataMessage" class="text-center mt-4 text-danger" style="display: none;">
                    <img src="assets/images/404.gif" class="w-25" alt=""></br>Data not found..!</h5>
                    <button type="button" id="loadMoreBtn" class="btn btn-success shadow px-5 w-40">Load More</button> 
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
    var url = "http://tractor-api.divyaltech.com/api/customer/tractor_mistri";
    $.ajax({
        url: url,
        type: "GET",
        success: function (response) {
            if (response.data && response.data.length > 0) {
                allCards = response.data.slice().reverse();
                displayCards();
            } else {
                $("#loadMoreBtn").hide();
            }
        },
        error: function (error) {
            console.error('Error fetching data:', error);
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
    var dummyImage = "assets/images/Tractor-mistri.jpg"; 

    var cardHtml = `
        <div class="col-3 col-lg-3 col-md-3 col-sm-3 mb-4">
            <div class="card shadow">
                <a href="tractor_mistri_inner.php?id=${p.id}">
                    <img src="${dummyImage}" class="card-img-top" alt="Tractor Image">
                </a>
                <div class="card-body bg-light text-center">
                    <h5 class="card-title">${p.first_name}</h5>
                    <p class="card-text">
                        <strong>Mobile No.:</strong> ${p.mobile}<br>
                     </p>
                </div>
            </div>
        </div>
    `;

    container.append(cardHtml);
}
getoldTractorList();

</script>