

<!DOCTYPE html>
<html lang="en">

<?php
  include 'includes/headertag.php';
?> 
<script> var APIBaseURL = "<?php echo $APIBaseURL; ?>";</script>
<script> var baseUrl = "<?php echo $baseUrl; ?>";</script>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<?php
   include 'includes/header.php';
?>
<section class="mt-4 pt-5 bg-light">
    <div class="container">
        <div class=" mt-4 pt-4">
            <span class="text-white pt-4 ">
                <a href="index.php" class="text-decoration-none header-link px-1">Home <i class="fa-solid fa-chevron-right px-1"></i></a>
                    <span class="text-dark">Contact Us</span>
            </span> 
        </div>
    </div>
</section>
<section class="pb-3">
    <div class="container mt-5">
        <h4 class="text-center">Contact Us</h4>
        <div class="row">
            <div class="col-12">
                <p class="pb-2">We value your time and are committed to providing the best solutions for all your agricultural equipment needs. Whether you’re looking to buy, sell, or inquire about products, our team is ready to assist you.</p>

                <h4 class="assured p-1 bg-light">Our Location</h4>
                <p class="fw-bold">📍 Address:</p>
                <p>Padmashree Apartment,</p>
                <p>Beside Shri Ram Hospital, Sattipara,</p>
                <p class="pb-3">Ambikapur, India, 497001</p>

                <h4 class="assured p-1 bg-light">Reach Out to Us</h4>
                <p class="fw-bold">📞 Phone Numbers:</p>
                <p>+91 7828249836</p>
                <p>+91 6260188089</p>
                <p class="pb-3">📧 Email: bharat.agrimart@gmail.com</p>

                <h4 class="assured p-1 bg-light">Connect With Us on Social Media</h4>
                <p>Stay connected and explore our latest updates, offers, and agricultural tips:</p>
                <ul class="pb-2">
                    <li>🌐 Facebook: <a href="https://www.facebook.com/people/Bharat-Agri-Marts/61570132388781/">Bharat Agri Marts</a></li>
                    <li>📸 Instagram: <a href="https://www.instagram.com/bharatagrimarts/" target="_blank">@bharatagrimarts</a></li>
                    <li>▶️ YouTube: <a href="https://www.youtube.com/@bharatagrimarts" target="_blank">Bharat Agri Marts</a></li>
                </ul>

                <h4 class="assured p-1 bg-light">Submit Your Query</h4>
                <p  class="pb-3">Have questions? Need assistance? Fill out the form below, and our team will contact you shortly!</p>
                <div class="row pb-5 mt-2">
                    <!-- <button type="button" class="btn btn-success w-25" data-bs-toggle="modal" data-bs-target="#contactModal">
                        Submit Your Query
                    </button>

                    <div class="modal fade" id="contactModal" tabindex="-1" aria-labelledby="contactModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header  bg-success">
                                    <h5 class="modal-title" id="contactModalLabel">Submit Your Query</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form id="contact_us_form" method="post">
                                        <div class="bg-light p-4">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label for="fullName" class="form-label text-dark fw-bold">Full Name</label>
                                                        <input type="text" class="form-control" id="fullName" name="full_name" required>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label for="email" class="form-label text-dark fw-bold">Email Address</label>
                                                        <input type="email" class="form-control" id="email" name="email_address" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label for="phoneNumber" class="form-label text-dark fw-bold">Phone Number</label>
                                                        <input type="text" class="form-control" id="phoneNumber" name="phone_number">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label for="subject" class="form-label text-dark fw-bold">Subject</label>
                                                        <input type="text" class="form-control" id="subject" name="subject" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="mb-3">
                                                        <label for="message" class="form-label text-dark fw-bold">Message/Query</label>
                                                        <textarea class="form-control" id="message" name="message" rows="3" required></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="text-center">
                                                <button type="button" class="btn btn-success w-25" id="contact_button">Submit</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div> -->

                    <div>
                    <form id="contact_us_form" method="post">
                                        <div class="bg-light p-4">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label for="fullName" class="form-label text-dark fw-bold">Full Name</label>
                                                        <input type="text" class="form-control" id="fullName" name="full_name" required>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label for="email" class="form-label text-dark fw-bold">Email Address</label>
                                                        <input type="email" class="form-control" id="email" name="email_address" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label for="phoneNumber" class="form-label text-dark fw-bold">Phone Number</label>
                                                        <input type="text" class="form-control" id="phoneNumber" name="phone_number">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label for="subject" class="form-label text-dark fw-bold">Subject</label>
                                                        <input type="text" class="form-control" id="subject" name="subject" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="mb-3">
                                                        <label for="message" class="form-label text-dark fw-bold">Message/Query</label>
                                                        <textarea class="form-control" id="message" name="message" rows="3" required></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="text-center">
                                                <button type="button" class="btn btn-success w-25" id="contact_button">Submit</button>
                                            </div>
                                        </div>
                                    </form>
                    </div>
                </div>
                <h4 class="assured p-1 bg-light">Why Choose Bharat Agri Marts?</h4>
                <ul>
                    <li>✅ Trusted Platform for buying and selling agricultural equipment</li>
                    <li>✅ User-Friendly Services designed to meet farmer and dealer needs</li>
                    <li>✅ Quick Support for inquiries and customer assistance</li>
                </ul>

                <h4 class="assured p-1 bg-light">Business Hours</h4>
                <p>🕒 Monday to Saturday: 9:00 AM – 8:00 PM</p>
                <p class="pb-3">🕒 Sunday: Closed</p>

                <h4 class="assured p-1 bg-light">Visit Us Today</h4>
                <p>Come to our office or reach out online. Your satisfaction is our priority, and we are here to support your agricultural success!</p>
            
            </div>
        </div>
    </div>
</section>

<?php
    include 'includes/footer.php'
    ?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.3/jquery.validate.min.js"></script>

<script>
$(document).ready(function () {
    // Initialize form validation
    $("#contact_us_form").validate({
        rules: {
            full_name: { required: true },
            email_address: { required: true, email: true },
            subject: { required: true },
            message: { required: true }
        },
        messages: {
            full_name: { required: "This Field is required" },
            email_address: { required: "This Field is required", email: "Please enter a valid email address" },
            subject: { required: "This Field is required" },
            message: { required: "This Field is required" }
        },
        errorPlacement: function (error, element) {
            error.insertAfter(element);  
        }
    });

    // Handle submit button click
    $('#contact_button').click(function () {
        if ($("#contact_us_form").valid()) {
            store();  // If form is valid, submit the data via AJAX
        } else {
            alert("Please correct the errors in the form.");
        }
    });
});

function store() {
    var name = $('#fullName').val();
    var email = $('#email').val();
    var phoneNumber = $('#phoneNumber').val();
    var subject = $('#subject').val();
    var message = $('#message').val();

    // var token = localStorage.getItem('token');
    // var headers = {};
    // if (token) {
    //     headers['Authorization'] = 'Bearer ' + token;
    // }

    var formData = new FormData();
    formData.append('full_name', name);
    formData.append('email_address', email);
    formData.append('phone_number', phoneNumber);
    formData.append('subject', subject);
    formData.append('message', message);

    $.ajax({
        url: 'http://tractor-api.divyaltech.com/api/customer/feedback',
        type: "POST",
        data: formData,
        // headers: headers,
        processData: false,
        contentType: false,
        success: function (response) {
            console.log('Success:', response);
            alert('Feedback submitted successfully!');
            $('#contact_us_form')[0].reset();  // Reset form after submission
            $('#contactModal').modal('hide');  // Hide modal after submission
        },
        error: function (xhr, status, error) {
            console.error('Error:', xhr.responseJSON || error);
            alert('Failed to submit feedback. Please try again.');
        }
    });
};
</script>

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