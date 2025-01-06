<!DOCTYPE html>
<html lang="en">
  <head>
      <?php
        include 'includes/headertag.php';
        include 'includes/header.php';
        include 'includes/footertag.php';
        include 'includes/spinner.php';
      ?>
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
  
  <script> var CustomerAPIBaseURL = "<?php echo $CustomerAPIBaseURL; ?>";</script>
  <script> var baseUrl = "<?php echo $baseUrl; ?>";</script>
    <script src="<?php $baseUrl; ?>model/engineoil.js" defer></script>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
<style>
  .text-truncate {
    overflow: hidden;
    white-space: nowrap;
    text-overflow: ellipsis;
   
    }
</style>
  <section class="mt-4 pt-5 bg-light">
    <div class="container mt-4 pt-3">
      <div class="">
        <span class="mt-5 text-white pt-5 ">
          <a href="index.php" class="text-decoration-none header-link px-1">Home <i class="fa-solid fa-chevron-right px-1"></i></a>
        </span>
        <span class="text-dark">Engine Oil</span>
      </div>
    </div>
  </section>
  <section class="">
    <div class="container">       
      <div class="py-1 mb-3">
        <h1 class="mt-2 mb-3">Engine Oil</h1>
        <div id="productContainer" class="row"></div>
        <div class="col text-center mt-3">
          <button id="load_moretract" type="button" class=" btn add_btn btn-success p-2"><i class="fas fa-undo"></i>View All</button>
        </div>
      </div>
    </div>
  </section>
    <?php
      include 'includes/footer.php';
    ?>
<script>
 function googleTranslateElementInit() {
 new google.translate.TranslateElement({
 pageLanguage: 'en',
 autoDisplay: 'true',
 includedLanguages:'en,hi,bn,mr,pa,or,te,ta,ml',
 layout: google.translate.TranslateElement.InlineLayout.HORIZONTAL
 }, 'google_translate_element');
 }
</script>
</body>
</html>