
  $(document).ready(function () {
    $('#subbnt').click(tyre_add);
    $('.btn_edit').click(function() {
      var rowId = $(this).data('row-id');
      fetch_edit_data(rowId);
  });
    ImgUpload();
    // Initialize form validation on the form_news_updates form
    $("#form_tyre_list").validate({
        // Specify validation rules
        rules: {
          brand: {
            required: true,
          },
          tyre: {
            required: true,
          },
          tyre_position: {
            required: true,
          },
          tyre_size: {
            required: true,
            digits: true,
          },
          _image: {
            required: true,
          },
          tyre_width:{
            required: true,
            digits: true,
          },
          tyre_diameter:{
            required: true,
            digits: true,
          },
          category:{
            required: true,
          }
        },
        // Specify validation error messages
        messages: {
          brand: {
            required: "This field is required",
          },
          tyre: {
            required: "This field is required",
          },
          tyre_position: {
            required: "This field is required",
          },
          tyre_size: {
            required: "This field is required",
            digits: "Please enter only digits"
          },
          _image: {
            required:"This field is required",
          },
          tyre_width:{
            required:"This field is required",
            digits: "Please enter only digits"
          },
          tyre_diameter:{
            required:"This field is required",
            digits: "Please enter only digits"
          },
          category:{
            required:"This field is required",
          }
  
         
        },
        
        submitHandler: function (form) {
          alert("Form submitted successfully!");
        },
      });
  
     
      $("#subbnt").on("click", function () {
     
        $("#form_tyre_list").valid();
        if ($("#form_tyre_list").valid()) {
          
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