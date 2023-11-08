<script>
$(document).ready(function() {
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
            password:"Please provide a valid password"
        },
        submitHandler: function(form) {
            login();
        }
    })
});
</script>
