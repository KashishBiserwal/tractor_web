$(document).ready(function () {
    $('#request-otp').click(getOTP);
    $('#verifyBtn').click(verifyOTP);
});

function getOTP() {
    var phone = $('#phone').val();
    var url = "http://tractor-api.divyaltech.com/api/customer/customer_login";
    var paraArr = {
        'mobile': phone,
    };
    $.ajax({
        url: url,
        type: "POST",
        data: paraArr,
        success: function (result) {
            console.log(result, "result");
            // Show the OTP verification section
            $('#loginContent').hide();
            $('#verify-otp').show();
        },
        error: function (error) {
            console.error('Error fetching data:', error);
        }
    });
}

function verifyOTP() {
    var mobile = $('#phone').val();
    var otp = $('#otp').val();
    var paraArr = {
        'mobile': mobile,
        'otp': otp
    };
    var url = 'http://tractor-api.divyaltech.com/api/customer/verify_otp';
    $.ajax({
        url: url,
        type: "POST",
        contentType: "application/json",
        data: JSON.stringify(paraArr),
        success: function (result) {
            console.log(result);
            // Access data field in the response
            var data = result.data;
            var userId = data.id;
            var userMobile = data.mobile;

            console.log(userId, 'User ID');
            console.log(userMobile, 'User Mobile');

            // Store token, mobile, and user id in localStorage
            localStorage.setItem('token', result.token);
            localStorage.setItem('mobile', userMobile);
            localStorage.setItem('id', userId);

            // Hide the login box
            $('.loginBox').hide();

            // Replace with user icon
            var icon = $('<i class="fa fa-user"></i>');
            $('.container').append(icon);

            // Redirect to userProfile.php
            window.location.href = 'userProfile.php';
        },
        error: function (xhr, textStatus, errorThrown) {
            // Handle errors
            console.log(xhr.status, 'error');
            if (xhr.status === 401) {
                console.log('Invalid credentials');
                var htmlcontent = `<p>Invalid credentials!</p>`;
                $('#error_message').html(htmlcontent);
            } else if (xhr.status === 403) {
                console.log('Forbidden: You don\'t have permission to access this resource.');
                var htmlcontent = `<p>You don't have permission to access this resource.</p>`;
                $('#error_message').html(htmlcontent);
            } else {
                console.log('An error occurred:', textStatus, errorThrown);
                var htmlcontent = `<p>An error occurred while processing your request.</p>`;
                $('#error_message').html(htmlcontent);
            }
        },
    });
}
