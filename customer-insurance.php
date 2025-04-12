<!DOCTYPE html>
<html lang="en">
<?php
include 'includes/headertag.php';
include 'includes/headertagadmin.php';

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


    .viewDetails{
        background-color: #B90405;
        color: white;
        padding: 10px 10px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 14px;
        margin: 4px 2px;
        cursor: pointer;
    }
    .viewformbutton{
        /* background-color: #B90405; */
        color: #B90405;
        border: 1px solid #B90405;
        padding: 10px 10px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 14px;
        cursor: pointer;
    }
    .insuranceCompanyImage{
        width: 200px;
        height: 100px;
        object-fit: cover;
        
    }

    .responsive-box {
  width: 100%;
}

@media (min-width: 768px) {
  .responsive-box {
    width: 25%;
  }
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
<script src="<?php $baseUrl; ?>model/find_new_insurance_new.js" defer></script>
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
    <section class="mainContainer">
        <div class="mt-5 my-4" style="max-width: 95%; width: auto;
">
            <!-- Toggle button for mobile -->
            <button class="btn buttonn d-md-none mb-3" onclick="toggleSidebar()">
                <i class="fas fa-bars"></i> Menu
            </button>
                   
            <div class="row" style="margin-left: auto;">
                <!-- Sidebar -->
                <div class="col-md-2 d-none d-md-block" id="sidebarMenu">
                    <div class="mb-4">
                        <?php include 'includes/categorySidebar.php'; ?>
                    </div>
                </div>
          

                <!-- Main Content -->
                <div class="col-12 col-md-10">
                    <h3 class="d-flex justify-content-center gap-2  text-center">New <span class="fw-bold" style="color: #B90405">INSURANCE</span></h3>
                    <div class="container py-5">
                        <h2 class="mb-4">Insurance Plans</h2>
                        <div  id="insuranceList">
                            <!-- Insurance cards will be injected here -->
                        </div>
                    </div>


                </div>

            </div>
            <!-- Mobile Sidebar (offcanvas-style) -->
            <div id="mobileSidebar" class="d-md-none" style="display: none; position: fixed; top: 16%; left: 0; width: 100%; height: 100vh;  background: white; padding: 20px; box-shadow: 2px 0 10px rgba(0,0,0,0.2); overflow-y: auto;">
           <button class="btn btn-danger mb-3" onclick="toggleSidebar()">Close</button>
           <?php include 'includes/categorySidebar.php'; ?>

            </div>

        </div>
        </div>
    </section>
    <?php
    include 'includes/footer.php';
    include 'includes/footertag.php';
    ?>

        <script>
        function toggleSidebar() {
            const sidebar = document.getElementById('mobileSidebar');
            sidebar.style.display = sidebar.style.display === 'none' || sidebar.style.display === '' ? 'block' : 'none';
        }
    </script>


</html>