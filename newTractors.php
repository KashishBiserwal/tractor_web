<!DOCTYPE html>
<html lang="en">
<?php
include 'includes/headertag.php';
include 'includes/headertagadmin.php';
// include 'includes/categorySidebar.php';
include 'includes/footertag.php';
include 'includes/spinner.php';
?>
<style>
    .mainContainer{
        margin-top: 12rem;
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
        .mainContainer {
            margin-top: 8rem;
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
<script src="<?php $baseUrl; ?>model/find_new_tractor_new.js" defer></script>
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
                <div class="col-12 col-md-7">
                    <h3 class="d-flex justify-content-center gap-2 pb-3">
                        New <span class="fw-bold" style="color: #B90405">TRACTORS</span>
                    </h3>
                    <div id="productContainer" class="row"></div>
                    <div class="col-12 text-center mt-3 pt-2">
                        <button id="load_moretract" type="button" class="btn buttonn">
                            <i class="fas fa-undo"></i> Load More Tractors
                        </button>
                    </div>
                </div>


                <!-- Mobile Sidebar (offcanvas-style) -->
                <div id="mobileSidebar" class="d-md-none" style="display: none; position: fixed; top: 16%; left: 0; width: 100%; height: 100vh;  background: white; padding: 20px; box-shadow: 2px 0 10px rgba(0,0,0,0.2); overflow-y: auto;">
                    <button class="btn btn-danger mb-3" onclick="toggleSidebar()">Close</button>
                    <?php include 'includes/categorySidebar.php'; ?>
                </div>


                <!-- RESET APPLY FILTERS -->
                <div class="col-12 col-sm-3 col-lg-3 col-md-3 ">
                    <div class=" row mb-3" id="">
                        <div class="col-12">
                            <div class="row">
                                <div class="col-6 col-sm-6 p-2">
                                    <button type="button" onclick="resetform()" class="btn buttonn">
                                        <i class="fas fa-undo"></i> Reset
                                    </button>
                                </div>
                                <div class="col-6 col-sm-6 p-2">
                                    <button type="button" id="filter_tractor" class="btn buttonn w-100">
                                        <i class="fas fa-filter"></i> Apply Filter
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="scrollbar mb-3" id="">
                        <div class="force-overflow">
                            <h5 class="ps-1 text-dark fw-bold pt-2">Search By Brand</h5>
                            <div class="HP py-2 w-100" id="checkboxContainer"></div>
                        </div>
                    </div>
                    <div class="scrollbar mb-3" id="">
                        <div class="force-overflow">
                            <h5 class=" ps-1 text-dark fw-bold pt-2">Search By HP</h5>
                            <div class="HP py-2 w-100">
                                <input type="checkbox" class="checkbox-round mt-1 ms-3 hp_checkbox" id="vehicle1" name="vehicle1" value="0 - 20"><label for="vehicle1" class="fs-6 ps-2">0 HP - 20 HP</label><br>
                                <input type="checkbox" class="checkbox-round mt-1 ms-3 hp_checkbox" id="vehicle2" value="21 - 30" /><label class="ps-2 fs-6" for="vehicle2">21 HP - 30 HP</label><br />
                                <input type="checkbox" class="checkbox-round mt-1 ms-3 hp_checkbox" id="vehicle3" value="31 - 40" />
                                <lable class="ps-2 mt-0 fs-6" for="vehicle3">31 HP - 40 HP</lable><br />
                                <input type="checkbox" class="checkbox-round mt-1 ms-3 hp_checkbox" id="vehicle4" value="41 - 50" />
                                <lable class="ps-2 mt-0 fs-6" for="vehicle4">41 HP - 50 HP</lable><br />
                                <input type="checkbox" class="checkbox-round mt-1 ms-3 hp_checkbox" id="vehicle5" value="51 - 60" />
                                <lable class="ps-2 mt-0  fs-6" for="vehicle5">51 HP - 60 HP</lable><br />
                                <input type="checkbox" class="checkbox-round mt-1 ms-3 hp_checkbox" id="vehicle6" value="61 - 70" />
                                <lable class="ps-2 mt-0 fs-6" for="vehicle6">61 HP - 75 HP</lable><br />
                                <input type="checkbox" class="checkbox-round mt-1 ms-3 hp_checkbox" id="vehicle7" value="71 - 80" />
                                <lable class="ps-2 mt-0 fs-6" for="vehicle7">Above 75 Hp </lable><br />
                            </div>
                        </div>
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


    <script>
        function toggleSidebar() {
            const sidebar = document.getElementById('mobileSidebar');
            sidebar.style.display = sidebar.style.display === 'none' || sidebar.style.display === '' ? 'block' : 'none';
        }
    </script>

</html>