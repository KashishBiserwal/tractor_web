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

  /*   ------------ hatbazar admin----------- */
//   $("#hatbazar_form").validate({
//       rules: {
//         category: {
//           required: true,
//         },
//         subcategory: {
//           required: true,
//         },
//         quantity: {
//           required: true,
//         },
//         quantity_per: {
//           required: true,
//         },
//         price: {
//           required: true,
//         },
//         about: {
//           required: true,
//         },
//         image: {
//           required: true,
//         },
//         name: {
//           required: true,
//         },
//         number: {
//           required: true,
//         },
//         state: {
//           required: true,
//         },
//         district: {
//           required: true,
//         },
//         tehsil: {
//           required: true,
//         },
//         pincode: {
//           required: true,
//         },
//       },
//       messages: {
//         category: "Category field is required",
//         subcategory: "Sub-Category field is required",
//         quantity: "Quantity field is required",
//         quantity_per: "Quantity per field is required",
//         price: "Price field is required",
//         about: "About Your Harvest field is required",
//         image: "Image field is required",
//         name: "Seller Name field is required",
//         number: "Mobile Number field is required",
//         state: "State field is required",
//         district: "District field is required",
//         tehsil: "Tehsil field is required",
//         pincode: "Pincode field is required",
//       },
//       success: function (element) {
//         // Hide the error message when the field becomes valid
//         label.hide();
//       },
//     });

//     function validateForm() {
//         if ($("#hatbazar_form").valid()) {
//           // Your form submission logic goes here
//           alert("Form is valid. Submitting...");
//         }
//       }
})
