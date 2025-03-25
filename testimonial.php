<?php
include 'includes/headertag.php';
include 'includes/headertagadmin.php';
?>

<body class="loaded">
  <div class="main-wrapper">
    <div class="app" id="app">
      <?php
      include 'includes/left_nav.php';
      include 'includes/header_admin.php';
      ?>
      
      <section style="padding: 0 15px;">
        <div class="container">
          <div class="card-body d-flex align-items-center justify-content-between page_title">
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb my-0 ms-2">
                <li class="breadcrumb-item"><span>Testimonials</span></li>
              </ol>
            </nav>
            <button type="button" class="btn btn-success float-right p-2" data-bs-toggle="modal" data-bs-target="#addTestimonialModal">
              <i class="fa fa-plus"></i> Add Testimonial
            </button>
          </div>
          
          <!-- Add Testimonial Modal -->
          <div class="modal fade" id="addTestimonialModal" tabindex="-1" aria-labelledby="addTestimonialModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="addTestimonialModalLabel">Add New Testimonial</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <form id="testimonial_form">
                    <div class="mb-3">
                      <label for="title" class="form-label">Title</label>
                      <input type="text" class="form-control" id="title" name="title">
                    </div>
                    <div class="mb-3">
                      <label for="description" class="form-label">Description</label>
                      <textarea class="form-control" id="description" name="description" rows="3"></textarea>
                    </div>
                    <div class="mb-3">
                      <label for="image" class="form-label">Image</label>
                      <input type="file" class="form-control" id="image" name="image" accept="image/*">
                    </div>
                  </form>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                  <button type="button" class="btn btn-primary" id="submit_btn">Save</button>
                </div>
              </div>
            </div>
          </div>
          
          <!-- Testimonials Table -->
          <div class="card shadow mt-3" style="margin-left: 20px;">
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-striped" id="testimonials_table">
                  <thead>
                    <tr>
                      <th>S.No.</th>
                      <th>Title</th>
                      <th>Description</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <!-- Data will be loaded here -->
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
  </div>

  <?php include 'includes/footertag.php'; ?>
  
  <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.3/dist/jquery.validate.min.js"></script>
  <script>
    var APIBaseURL = "https://shopninja.in/bharatagri/api/public/api/admin/";
  </script>
  <script src="model/testimonial_list.js"></script>
</body>
</html>