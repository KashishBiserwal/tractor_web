<script src="assets/js/jquery.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="assets/js/bootstrap.min.js"></script>

<script src="assets/js/datatables.js"></script>
<script src="assets/js/datatables.min.js"></script>
<script src="assets/js/owl.carousel.js"></script>
<script src="assets/js/owl.carousel.min.js"></script>
<script src="assets/js/jquery.validate.js"></script>
<script src="assets/js/jquery.validate.js"></script>

<script src="assets/js/swiper.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.20.0/jquery.validate.min.js"></script>
<!--main Js-->
<script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>

<script src="js/validation.js"></script>
<script src="js/main.js"></script>
<script src="assets/js/main.js"></script>
<script src="model/login.js"></script>
<script>
   $(window).on("load", function() {
    $(window).scroll(function() {
      var windowBottom = $(this).scrollTop() + $(this).innerHeight();

      $(".fade").each(function() {

        if (!$(this).hasClass("modal")) {
          /* Check the location of each desired element */
          var objectBottom = $(this).offset().top + $(this).outerHeight();

          /* If the element is completely within bounds of the window, fade it in */
          if (objectBottom < windowBottom) { //object comes into view (scrolling down)
            if ($(this).css("opacity") == 0) {
              $(this).fadeTo(200, 3);
            }
          } else { //object goes out of view (scrolling up)
            if ($(this).css("opacity") == 1) {
              $(this).fadeTo(500, 1);
            }
          }

        }

      });

    }).scroll(); //invoke scroll-handler on page-load
  });
</script>
</body>
</html>