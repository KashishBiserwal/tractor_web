$(document).ready(function () {

    ImgUpload();
    $("#form_news_updates").validate({
    
      rules: {
        brand:{

          required: true,
        },
        headline:{

          required: true,
        },
        contant: {
          required: true,
        },
        image_:{

          required:true,
          minlength: 2,
          maxlength: 5,
       
        }
      },
  
      messages: {
       
        brand:{

          required:"This field is required",
        },
        headline:{

          required: "This field is required",
        },
        contant: {
          required: "This field is required",
        },
        image_:{

          required:"This field is required",
          minlength: 2,
          maxlength: 5,
       
        }
       
      },
      
      submitHandler: function (form) {
        alert("Form submitted successfully!");
      },
    });

   
    $("#submitBtn").on("click", function () {
   
      $("#form_news_updates").valid();
      if ($("#form_news_updates").valid()) {
        
        alert("Form is valid. Ready to submit!");
      }
    });
   
  });

  function ImgUpload() {
    var imgWrap = "";
    var imgArray = [];

    $('.upload__inputfile').each(function () {
      $(this).on('change', function (e) {
        imgWrap = $(this).closest('.upload__box').find('.upload__img-wrap');
        var maxLength = $(this).attr('data-max_length');

        var files = e.target.files;
        var filesArr = Array.prototype.slice.call(files);
        var iterator = 0;
        filesArr.forEach(function (f, index) {

          if (!f.type.match('image.*')) {
            return;
          }

          if (imgArray.length > maxLength) {
            return false
          } else {
            var len = 0;
            for (var i = 0; i < imgArray.length; i++) {
              if (imgArray[i] !== undefined) {
                len++;
              }
            }
            if (len > maxLength) {
              return false;
            } else {
              imgArray.push(f);

              var reader = new FileReader();
              reader.onload = function (e) {
                var html = "<div class='upload__img-box'><div style='background-image: url(" + e.target.result + ")' data-number='" + $(".upload__img-close").length + "' data-file='" + f.name + "' class='img-bg'><div class='upload__img-close'></div></div></div>";
                imgWrap.append(html);
                iterator++;
              }
              reader.readAsDataURL(f);
            }
          }
        });
      });
    });

    $('body').on('click', ".upload__img-close", function (e) {
      var file = $(this).parent().data("file");
      for (var i = 0; i < imgArray.length; i++) {
        if (imgArray[i].name === file) {
          imgArray.splice(i, 1);
          break;
        }
      }
      $(this).parent().parent().remove();
    });
  }