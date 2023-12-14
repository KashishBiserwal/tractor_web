<!DOCTYPE html>
<html lang="en">
<head>
    <?php
        include 'includes/header.php';
        include 'includes/headertag.php';
    ?>
</head>
<body>
        <!-- HEADING Home > Blog-->
    <section class="mt-5 pt-5">
        <div class="container mt-4 pt-4">
            <div class="">
                <span class="mt-5 text-white pt-5 ">
                    <a href="index.php" class="text-decoration-none header-link px-1">Home <i class="fa-solid fa-chevron-right px-1"></i></a>
                </span>
                <span class="text-dark">Blogs</span>
                </span> 
            </div>
        </div>
    </section>

    <!-- Want to be Featured in Bharat Tractor Weekly News? Connect With Us -->
    <section>
        <div class="container">
            <div class="row  align-items-center my-3">       
                <div class="col-12">
                    <div class="py-3 my-3 ps-4">
                        <p class="fw-bold text-center fs-5">Want to be Featured in Bharat Tractor Blog? Connect With Us</p>
                        <p class="text-center mt-n-2"> <button class="btn btn-primary btn-lg btn-block">Write for Us</button></p> 
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php
    include 'includes/footer.php';
    include 'includes/footertag.php';
?>


    <script>
        $(document).ready(function() {
            $('#pagination-demo').twbsPagination({
  totalPages: 35,
  visiblePages: 7,
  onPageClick: function (event, page) {
    $('#page-content').text('Page ' + page);
  }
});
        });    
    </script>
</body>
</html>