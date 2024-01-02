$("#dealer_list_form").validate({
    
    rules: {
      dname: {
        required: true,
      },
      brand: {
        required: true,
      },
      email:{
        required:true,
       email:true
      },
      cno:{
          required:true,
          maxlength:10,
          digits: true,
          customPhoneNumber: true
      },
      address:{
        required:true,
        digits: true,
      },
      state_:{
        required: true,
      },
      dist: {
        required: true,
      }
    },

    messages: {
      dname: {
        required: "This field is required",
      },
      brand: {
        required: "This field is required",
      },
    
      email:{
        required:"This field is required",
        email:"Please Enter vaild Email",
      },
       cno:{
        required:"This field is required",
        maxlength:"Enter only 10 digits",
        digits: "Please enter only  digits"
      },
      address:{
        required:"This field is required",
        digits: "Please enter only digits"
      },
      state_:{
        required: "This field is required",
      },
      dist: {
        required: "This field is required",
      }
    },
    
    submitHandler: function (form) {
      alert("Form submitted successfully!");
    },
  });

 
  $("#subbtn_").on("click", function () {
 
    $("#dealer_list_form").valid();

  });
 
});