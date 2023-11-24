$(document).ready(function() {
  /*   ------------ Login ----------- */
    $("#form").validate({
        rules: {
            email: {
                required: true,
                email: true
            },
            password: {
                required: true
            }
        },
        messages: {
            email: "Please Enter Your Email id",
            password: "Please provide a valid password"
        },
        submitHandler: function(form) {
            login();
        }
    });
    
})