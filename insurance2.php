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
        font-size: 14px;
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
        color: #444;
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
        .form-title {
            font-size: 20px;
        }
    }
</style>
<?php include 'includes/header.php'; ?>
<script>
    var APIBaseURL = "<?php echo $APIBaseURL; ?>";
    var baseUrl = "<?php echo $baseUrl; ?>";
</script>
<script src="<?php echo $baseUrl; ?>model/find_new_insurance.js" defer></script>
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>

<!-- Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-6Z38E658LD"></script>
<script>
    window.dataLayer = window.dataLayer || [];
    function gtag() { dataLayer.push(arguments); }
    gtag('js', new Date());
    gtag('config', 'G-6Z38E658LD');
</script>

<body>
    <section class="pt-5 bg-light" style="margin-top: 5rem;">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 col-md-10 col-sm-12">
                    <h3 class="text-center mb-4">Fill this <span class="fw-bold" style="color: #B90405;">Form</span></h3>
                    <div class="custom-form border border-1 rounded-3 p-4 mb-4">
                        <form id="tractorForm">
                            <div class="mb-3">
                                <input type="text" class="form-control" placeholder="Enter Your Name" name="first_name" required />
                            </div>

                            <div class="mb-3">
                                <select id="brandSelect" class="form-select" name="brand_id" required>
                                    <option selected disabled>Select Tractor Brand</option>
                                </select>
                            </div>

                            <div class="mb-3">
                                <select id="modelSelect" class="form-select" name="model" required>
                                    <option selected disabled>Select Tractor Model</option>
                                </select>
                            </div>

                            <div class="mb-3">
                                <input type="text" class="form-control" placeholder="Vehicle Registered No." name="vehicle_no" required />
                            </div>

                            <div class="mb-3">
                                <select class="form-select" name="registered_year" required>
                                    <option selected disabled>Select Registered Year</option>
                                    <?php
                                    for ($year = 2030; $year >= 2001; $year--) {
                                        echo "<option value='$year'>$year</option>";
                                    }
                                    ?>
                                </select>
                            </div>

                            <div class="mb-4">
                                <select id="stateSelect" class="form-select" name="state" required>
                                    <option selected disabled>Select State</option>
                                </select>
                            </div>

                            <button type="submit" class="btn btn-danger w-100">Search</button>
                        </form>
                    </div>
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
