var EditIdmain_ = "";
var editId_state= false;
$(document).ready(function(){
    ImgUpload();
    // $('#submitbtn').click(store);
    jQuery.validator.addMethod("customPhoneNumber", function(value, element) {
        return /^[6-9]\d{9}$/.test(value); 
      }, "Phone number must start with 6 or above");
    $('#Agriculture_college_form').validate({

        rules:{
            cname:{
                required: true,
            },
            state:{
                required: true,
            },
            district:{
                required: true,
            },
            Mobile:{
                required: true,
                maxlength:10,
                digits: true,
                customPhoneNumber: true
            }
        },
        messages:{
            cname: {
                required: "This field is required",
              },
              state: {
                required: "This field is required",
              },
              district: {
                required: "This field is required",
              },
              Mobile:{
                required:"This field is required",
                maxlength:"Enter only 10 digits",
                digits: "Please enter only digits"
              }
        }
    })
    $("#submitbtn").on("click", function () {
        $("#Agriculture_college_form").valid();
      });
})


function ImgUpload() {
  var imgWrap = "";

  $('.upload__inputfile').on('change', function (e) {
      var uploadBox = $(this).closest('.upload__box');
      imgWrap = uploadBox.find('.upload__img-wrap');
      var maxLength = 1; // Allow only one image to be uploaded

      var files = e.target.files;
      var filesArr = Array.prototype.slice.call(files);

      // Remove previously uploaded images
      // imgWrap.empty(); // Commented out this line to prevent removing previous images

      filesArr.forEach(function (f, index) {
          if (!f.type.match('image.*')) {
              return;
          }

          if (index >= maxLength) {
              return false;
          } else {
              var reader = new FileReader();
              reader.onload = function (e) {
                  // Check if there's already an image present
                  if (imgWrap.find('.upload__img-box').length > 0) {
                      // If an image is already present, replace it
                      imgWrap.find('.upload__img-box').replaceWith("<div class='upload__img-box'><div style='background-image: url(" + e.target.result + ")' data-file='" + f.name + "' class='img-bg'><div class='upload__img-close' onclick='removeImage(this)'></div></div></div>");
                  } else {
                      // Otherwise, append the new image
                      var html = "<div class='upload__img-box'><div style='background-image: url(" + e.target.result + ")' data-file='" + f.name + "' class='img-bg'><div class='upload__img-close' onclick='removeImage(this)'></div></div></div>";
                      imgWrap.append(html);
                  }
              }
              reader.readAsDataURL(f);
          }
      });
  });
}

function removeImage(ele) {
  $(ele).closest('.upload__img-box').remove();
  // Clear the input field so that the same file can be selected again
  $('.upload__inputfile').val('');
}
function removeImage(ele){
  console.log("print ele");
    console.log(ele);
    let thisId=ele.id;
    thisId=thisId.split('closeId');
    thisId=thisId[1];
    $("#"+ele.id).remove();
    $(".upload__img-closeDy"+thisId).remove();

  }
   
    function store(event) {
        event.preventDefault();
        var image_names = document.getElementById('_image').files;
        // var EditIdmain_ = $('#EditIdmain_').val();
        var college_name = $('#cname').val();
        var mobile = $('#Mobile').val();
        var state = $('#state').val();
        var district = $('#district').val();
        var tehsil = $('#tehsil').val();
  
        var _method = 'POST';
        var url, method;
      
        var apiBaseURL =APIBaseURL;
        var token = localStorage.getItem('token');
        var headers = {
         'Authorization': 'Bearer ' + token
        };
        if (EditIdmain_!="null" && EditIdmain_!="") {
            _method = 'put';
             url = apiBaseURL + 'customer_enquiries/' + EditIdmain_ ;
             console.log(url);
             method = 'POST'; 
        } else {
            url = apiBaseURL + 'customer_enquiries';
            method = 'POST';
        }
        var data = new FormData();
      
        for (var x = 0; x < image_names.length; x++) {
            data.append("images[]", image_names[x]);
             console.log("multiple image", image_names[x]);
        }
            data.append('id',EditIdmain_);
            data.append('_method',_method);
            data.append('first_name', first_name);
            data.append('mobile', mobile);
            data.append('state',state);
            data.append('district',district);
            data.append('tehsil',tehsil);
  
        $.ajax({
            url: url,
            type: method,
            data: data,
            headers: headers,
            processData: false,
            contentType: false,
            success: function (result) {
            console.log(result, "result");
            console.log("Add successfully");
            // old_farm_implement();
            // window.location.reload();
            },
            error: function (error) {
            console.error('Error fetching data:', error);
            }
        });
    }