<html lang="en">
  <head> 
    <?php
    include 'includes/headertag.php';
    include 'includes/headertagadmin.php';
    include 'includes/categorySidebar.php';
    include 'includes/footertag.php';
    include 'includes/header.php';
   ?> 
   <script src="<?php $baseUrl; ?>model/farm_imple_category_customer.js"></script>
  </head>
  <!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-6Z38E658LD"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());
  gtag('config', 'G-6Z38E658LD');
</script>
<body> 
<style>
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
.new-tractor-content h5{
    white-space: nowrap;
    text-overflow: ellipsis;
    overflow: hidden;
    font-size: 15px;
    margin-bottom: 0;
    text-transform: uppercase;
}
.table_detail_section tbody tr td, .table_detail_section table thead tr th{
  padding: 15px;
}
</style>
    <section class="mt-130 bg-light">
        <div class="container" >
          <div class="py-2">
            <span class="text-white"><a href="index.php" class="text-decoration-none header-link px-1">Home 
              <i class="fa-solid fa-chevron-right px-1"></i></a>
                <a href="" class="text-decoration-none header-link px-1" id="title_heading"> </a>
            </span>
          </div>
        </div>
    </section>
    <section class="bg-white">
      <div class="container">
        <div id="tractor_description"></div>
      </div>
    </section>
    <section  style="width: 75%; margin-left: auto; margin-right: 10px;" >
      <div class="container my-5">
        <h4 id="heading_imple" class="bg-light assured ps-3 py-2"></h4>
        <div class="row" id="productContainer"></div>
        <div class="col-12 text-center mt-3 pt-2 ">
          <button id="load_moretract" type="button" class="add_btn btn btn-success px-2">
            <i class="fas fa-undo"></i> Load More Implements
          </button>
        </div>
      </div>
    </section>

    <?php
    include 'includes/footer.php';

    ?>
  </body>


<script>
function show_detail(){
  $(".more_detail").show();
  $("#show_detail").hide();
}
function hide_detail(){
  $(".more_detail").hide();
  $("#show_detail").show();
}
   
</script>
<script>
 function googleTranslateElementInit() {
 new google.translate.TranslateElement({
 pageLanguage: 'en',
 autoDisplay: 'true',
 includedLanguages:'en,hi,bn,mr,pa,or,te,ta,ml', // <- remove this line to show all language
 layout: google.translate.TranslateElement.InlineLayout.HORIZONTAL
 }, 'google_translate_element');
 }
</script>
</html>