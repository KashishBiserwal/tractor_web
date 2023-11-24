$(document).ready(function() {
 

    if (document.getElementById('login')) {
        document.getElementById('login').addEventListener('click', function(event) {
            event.preventDefault();
            $("#form").submit();
        });
    }
});

function login() {
    var email = document.getElementById('email').value;
    var password = document.getElementById('password').value;
    var paraArr = {};
    paraArr['email'] = email;
    paraArr['password'] = password;
    var url = "<?php echo $APIBaseURL; ?>user_login";
    $.ajax({
        url: url,
        type: "POST",
        data: paraArr,
        success: function(result) {
        
        },
        complete: function(data) {
          console.log(data,"login");
            var res = data.responseJSON;
            if (data.status == 200) {
                console.log("login success");
                window.location.href = "<?php echo $baseUrl; ?>usermanagement.php"; 
            }
           
            localStorage.setItem("token", res.access_token);
            localStorage.setItem("expireIn", res.expires_in);
            // console.log("login successfully");
        },
        error: function(data) {
            console.log(data, "data");
            var res = data.responseJSON;
            if (data.status == 401) {
                console.log("invalid credentials");
                alert(" Please enter valid credentials..!");
            }
        }
    });
}