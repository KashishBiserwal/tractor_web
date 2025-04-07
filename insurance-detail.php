<!DOCTYPE html>
<html lang="en">
<?php
include 'includes/headertag.php';
include 'includes/headertagadmin.php';
include 'includes/categorySidebar.php';
include 'includes/footertag.php';
include 'includes/spinner.php';
?>
<style>
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

    .custom-form {
        background-color: #fff;
        border-radius: 10px;
        padding: 20px;
        border-color: #999999;
    }

    .form-title {
        font-size: 24px;
        color: #444444;
        font-weight: bold;
        margin-bottom: 20px;
        text-align: center;
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

        .container {
            padding: 0 15px;
        }

    }

    .insuranceCompanyImage {
        max-height: 80px;
        object-fit: contain;
    }
</style>
<?php
include 'includes/header.php';
?>
<script>
    var APIBaseURL = "<?php echo $APIBaseURL; ?>";
</script>
<script>
    var baseUrl = "<?php echo $baseUrl; ?>";
</script>
<script src="<?php $baseUrl; ?>model/find_new_insurance.js" defer></script>
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
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

<body>
    <section class=" pt-5 bg-light" style="margin-top: 5rem;">
        <div class="container mt-4">

        </div>
    </section>

    <section>
        <div class="container my-4" style="width: auto;
    padding-left: 200px;
    padding-top: 29px;
">
            <div>
                <div>
                    <h3 class="d-flex justify-content-center gap-2 pb-3 text-center">New <span class="fw-bold" style="color: #B90405">INSURANCE</span></h3>

                    <div class="container py-5" id="insuranceDetail">
                        <!-- Insurance detail will be injected here -->
                    </div>

                    <div class="container my-5">
                        <h4 class="mb-3">Frequently Asked Questions</h4>
                        <div id="faqsContainer"></div>
                    </div>
                </div>

            </div>

        </div>
        </div>
    </section>
    <?php
    include 'includes/footer.php';
    include 'includes/footertag.php';
    ?>



</html>