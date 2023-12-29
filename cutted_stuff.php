<!-- <script>
    $(document).ready(function () {
        // Initialize form validation
        $("#multi_step_form").validate({
            rules: {
                CAPACITY_CC:{
                    required: true,
                },
                engine_rated_rpm:{
                    required: true,
                },
                COOLING:{
                    required: true,
                },
                AIR_FILTER:{
                    required: true,
                },
                fuel_pump_id:{
                    required: true,
                },
                TORQUE:{
                    required: true,
                },
                TRANSMISSION_TYPE:{
                    required: true,
                },
                TRANSMISSION_CLUTCH:{
                    required: true,
                },
                min_forward_speed:{
                    required: true,
                },
                max_forward_speed:{
                    required: true,
                },
                min_reverse_speed:{
                    required: true,
                },
                max_reverse_speed:{
                    required: true,
                }
            },
            messages: {
                CAPACITY_CC:{
                    required:"This field is required",
                },
                engine_rated_rpm:{
                    required:"This field is required",
                },
                COOLING:{
                    required:"This field is required",
                },
                AIR_FILTER:{
                    required:"This field is required",
                },
                fuel_pump_id:{
                    required:"This field is required",
                },
                TORQUE:{
                    required:"This field is required",
                },
                TRANSMISSION_TYPE:{
                    required:"This field is required",
                },
                TRANSMISSION_CLUTCH:{
                    required:"This field is required",
                },
                min_forward_speed:{
                    required:"This field is required",
                },
                max_forward_speed:{
                    required:"This field is required",
                },
                min_reverse_speed:{
                    required:"This field is required",
                },
                max_reverse_speed:{
                    required:"This field is required",
                }
            },
        });

        $('#nextbtn2').on('click', function () {
            $('#multi_step_form').valid();
        });
    });
</script> -->
<!-- <script>
    document.addEventListener('DOMContentLoaded', function () {
    const form = document.getElementById('multi_step_form');
    const progress = document.getElementById('progress-bar');
    const steps = form.querySelectorAll('form');
    let currentStep = 0;

    updateProgressBar();

    function updateProgressBar() {
        const percent = (currentStep / (steps.length - 1)) * 100;
        progress.style.width = percent + '%';
    }

    function showStep(stepIndex) {
        steps.forEach((step, index) => {
            step.classList.remove('active');
            if (index === stepIndex) {
                step.classList.add('active');
            }
        });
    }

    document.getElementById('nextbtn1').addEventListener('click', function () {
        currentStep++;
        if (currentStep >= steps.length) {
            currentStep = steps.length - 1;
        }
        showStep(currentStep);
        updateProgressBar();
    });

    document.getElementById('prevbtn2').addEventListener('click', function () {
        currentStep--;
        if (currentStep < 0) {
            currentStep = 0;
        }
        showStep(currentStep);
        updateProgressBar();
    });

    // Add similar event listeners for other steps as needed
});

</script> -->

 

<!-- <script>
    $(document).ready(function () {
        // Function to show the specified step and focus on its first input field
        function showStep(stepIndex) {
            $('fieldset.step').hide();
            $('fieldset.step:nth-child(' + stepIndex + ')').fadeIn(150).addClass('current');
            $('fieldset.step:nth-child(' + stepIndex + ')').find('input').eq(0).focus();
        }

        // Click event for the progress bar
        $('.progress_holder').click(function () {
            var stepIndex = $(this).index() + 1;
            showStep(stepIndex);
            $('.progress_holder').removeClass('activated_step');
            $(this).addClass('activated_step');
        });

        // Initialize the first step
        $('.progress_holder:nth-child(1)').addClass('activated_step');

        // Click events for each progress step
        for (let i = 1; i <= 5; i++) {
            $('.progress_holder:nth-child(' + i + ')').click(function () {
                showStep(i);
                $('.progress_holder').removeClass('activated_step');
                $('.progress_holder:nth-child(' + i + ')').addClass('activated_step');
            });
        }

        // Next button click event
        $(".nextStep").click(function () {
            var current_fs = $(this).parents('fieldset');
            var next_fs = current_fs.next('fieldset');

            // Validation check for required fields
            if (areRequiredFieldsFilled(current_fs)) {
                // Proceed to the next step
                next_fs.fadeIn(150).addClass('current');
                current_fs.fadeOut(0).removeClass('current');

                // Update progress tracking logic here
                var stepIndex = parseInt(next_fs.attr('id').replace('step', ''));
                $('.progress_holder').removeClass('activated_step');
                $('.progress_holder:nth-child(' + stepIndex + ')').addClass('activated_step');
            } else {
                alert('Please fill in all required fields before proceeding.');
            }
        });

        // Previous button click event
        $(".prevStep").click(function (e) {
            e.preventDefault();
            var current_fs = $(this).parents('fieldset');
            var previous_fs = current_fs.prev('fieldset');

            // Show the previous step
            previous_fs.fadeIn(150).addClass('current');
            current_fs.fadeOut(0).removeClass('current');

            // Update progress tracking logic here
            var stepIndex = parseInt(previous_fs.attr('id').replace('step', ''));
            $('.progress_holder').removeClass('activated_step');
            $('.progress_holder:nth-child(' + stepIndex + ')').addClass('activated_step');
        });

        // Function to check if required fields are filled
        function areRequiredFieldsFilled(fieldset) {
            var empty = fieldset.find("input.required-field").filter(function () {
                return this.value.trim() === "";
            });
            return empty.length === 0;
        }
    });

</script> -->

<!-- <script>
      jQuery(document).ready(function () {
      ImgUpload();
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
</script> -->