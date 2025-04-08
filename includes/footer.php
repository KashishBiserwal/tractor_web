
<style>
  .footer-logo {
    max-height: 80px;
  }

  .footer {
    padding: 40px 0;
    background-color: #fdf5dc;
  }

  .footer h5 {
    font-weight: 600;
    margin-bottom: 20px;
  }

  .footer a {
    text-decoration: none;
    color: #333;
  }

  .footer a:hover {
    text-decoration: underline;
  }

  .social-icons i {
    font-size: 20px;
    margin-right: 15px;
    color: #555;
  }

  .footer-divider {
    border-top: 1px solid #c0bfbf;
    margin: 30px 0;
  }

  .playstore-img {
    width: 140px;
    margin-top: 20px;
  }

  .footer-bottom-icons {
    position: fixed;
    right: 20px;
    bottom: 20px;
    display: flex;
    flex-direction: column;
    gap: 10px;
  }

  .footer-bottom-icons .footer-btn {
    border-radius: 50%;
    width: 48px;
    height: 48px;
  }
</style>
<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>

<footer class="footer container-fluid">
  <div class="container">
    <div class="row mb-4 text-center text-md-start align-items-center">
      <div class="col-12 col-md-3 mb-3 mb-md-0">
        <a href="index.php" class="text-decoration-none d-inline-block">
          <img src="assets/images/tractor-logo.png" alt="reload img" class="logo" style="width: 80px; height:80px;">
        </a>
      </div>
      <div class="col-12 col-md-3 mb-3 mb-md-0">
        <p><i class="fas fa-map-marker-alt me-2"></i><strong>Corporate Office</strong><br>Gurugram, Sec-12, new road</p>
      </div>
      <div class="col-12 col-md-3 mb-3 mb-md-0">
        <p><i class="fas fa-envelope me-2"></i><strong>Email Us</strong><br>ask.bharatagimart@gmail.com</p>
      </div>
      <div class="col-12 col-md-3 social-icons d-flex justify-content-center justify-content-md-start mt-2 mt-md-0">
        <div>
          <strong><i class="fas fa-check me-2 mb-1"></i>Follow us</strong><br>
          <i class="fab fa-instagram"></i>
          <i class="fab fa-dribbble"></i>
          <i class="fab fa-twitter"></i>
          <i class="fab fa-youtube"></i>
        </div>
      </div>
    </div>

    <div class="footer-divider"></div>

    <div class="row text-center text-md-start">
      <div class="col-12 col-md-3 mb-4">
        <h5>About Us</h5>
        <p>Bharat Agri Marts is a dynamic online marketplace bridging the gap between buyers and sellers of agricultural equipment.</p>
        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/7/78/Google_Play_Store_badge_EN.svg/2560px-Google_Play_Store_badge_EN.svg.png" alt="Google Play" class="playstore-img">
      </div>

      <div class="col-6 col-md-2 mb-4">
        <h5>Our Terms</h5>
        <ul class="list-unstyled text-center text-md-start">
          <li><a href="about_us.php">About us</a></li>
          <li><a href="#">News</a></li>
          <li><a href="contact_us.php">Contact us</a></li>
          <li><a href="new_tractor_loan.php">Loans</a></li>
          <li><a href="privacy_policy.php">Privacy Policy</a></li>
        </ul>
      </div>

      <div class="col-6 col-md-2 mb-4">
        <h5>Old Product</h5>
        <ul class="list-unstyled text-center text-md-start">
          <li><a href="used_farm_imple.php">Buy Used Farm Implements</a></li>
          <li><a href="used_harvester.php">Buy Used Harvester</a></li>
          <li><a href="sell_used_trac.php">Sell Used Tractor</a></li>
          <li><a href="sell_used_harvester.php">Sell Used Harvester</a></li>
        </ul>
      </div>

      <div class="col-6 col-md-2 mb-4">
        <h5>Other Services</h5>
        <ul class="list-unstyled text-center text-md-start">
          <li><a href="used_tractor.php">Used Tractor</a></li>
          <li><a href="nursery_ui.php">Nursery</a></li>
          <li><a href="engine_oil.php">Engine Oil</a></li>
          <li><a href="tyre.php">Tyres</a></li>
        </ul>
      </div>

      <div class="col-6 col-md-3 mb-4">
        <h5>Our Network</h5>
        <img src="assets/images/map.svg" class="img-fluid" alt="Network Map">
      </div>
    </div>
  </div>
</footer>

<!-- Fixed Buttons -->
<div class="footer-bottom-icons">
  <button class="btn footer-btn btn-primary"><i class="fas fa-arrow-up"></i></button>
  <button class="btn footer-btn btn-danger"><i class="fas fa-headset"></i></button>
</div>
