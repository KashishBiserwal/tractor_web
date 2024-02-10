
$(document).ready(function() {
    console.log("ready!");
    ImgUpload();
    $('#become_delership_enq_btn').click(store);
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


  function removeImage(ele){
    console.log("print ele");
      console.log(ele);
      let thisId=ele.id;
      thisId=thisId.split('closeId');
      thisId=thisId[1];
      $("#"+ele.id).remove();
      $(".upload__img-closeDy"+thisId).remove();
  
    }

function get_search() {
    var apiBaseURL = APIBaseURL;
    var url = apiBaseURL + 'getBrands';
  
    $.ajax({
      url: url,
      type: "GET",
      headers: {
        'Authorization': 'Bearer ' + localStorage.getItem('token')
      },
      success: function (data) {
        console.log(data);
  
        const select = $('#brand');
        select.empty(); // Clear existing options
  
        // Add a default option
        select.append('<option selected disabled value="">Please select Brand</option>');
  
        // Use an object to keep track of unique brands
        var uniqueBrands = {};
  
        $.each(data.brands, function (index, brand) {
          var brand_id = brand.id;
          var brand_name = brand.brand_name;
  
          // Check if the brand ID is not already in the object
          if (!uniqueBrands[brand_id]) {
            // Add brand ID to the object
            uniqueBrands[brand_id] = true;
  
            // Append the option to the dropdown
            select.append('<option value="' + brand_id + '">' + brand_name + '</option>');
          }
        });
      },
      error: function (error) {
        console.error('Error fetching data:', error);
      }
    });
  }
  get_search();

  function store(event) {
    event.preventDefault();

    var enquiry_type_id = $('#enquiry_type_id').val();
    var dealer_name = $('#dname').val();
    var brand_name = $('#brand').val();
    var email = $('#email').val();
    var address = $('#address_2').val();
    var mobile = $('#mobnumber').val();
    var state = $('#bcd_state').val();
    var district = $('#bcd_district').val();
    var tehsil = $('#bcd_tehsil').val();
    var image_names = document.getElementById('f_file').files;

    var apiBaseURL = "http://tractor-api.divyaltech.com/api";
    var endpoint = '/customer/customer_enquiries';
    var url = apiBaseURL + endpoint;

    var data = new FormData();
    // Append other form data
    data.append('enquiry_type_id', enquiry_type_id);
    data.append('brand_id', brand_name);
    data.append('dealer_name', dealer_name);
    data.append('email', email);
    data.append('message', address);
    data.append('mobile', mobile);
    data.append('state', state);
    data.append('district', district);
    data.append('tehsil', tehsil);


    for (var x = 0; x < image_names.length; x++) {
        data.append("dealer_img[]", image_names[x]);
        console.log("multiple image", image_names[x]);
    }
    //
    // Make an AJAX request to the server
    $.ajax({
        url: url,
        type: 'POST',
        data: data,
        processData: false,
        contentType: false,
        success: function (result) {
            console.log(result, 'result');
            $("#used_tractor_callbnt_").modal('hide');
            var msg = 'Added successfully !';
            $("#errorStatusLoading").modal('show');
            $("#errorStatusLoading").find('.modal-title').html('<p class="text-center">Congratulation..! Requested Successful</p>');
            $("#errorStatusLoading").find('.modal-body').html(msg);
            $("#errorStatusLoading").find('.modal-body').html('<img src="assets/images/7efs.gif" style="display:block; margin:0 auto;" class="w-50 text-center" alt="Successfull Request"></img>');
            console.log('Add successfully');
            document.getElementById("become_dealership_enq_from").reset();
            // document.getElementById("f_file").reset();
        },

        error: function (error) {
            console.error('Error fetching data:', error);
            var msg = error.statusText;
            $("#errorStatusLoading").modal('show');
            $("#errorStatusLoading").find('.modal-title').html('<p class="text-center">Process Failed..! Enter Valid Detail</p>');
            $("#errorStatusLoading").find('.modal-body').html(msg);
            $("#errorStatusLoading").find('.modal-body').html('<img src="assets/images/comp_3.gif" style="display:block; margin:0 auto;" class="w-50 text-center" alt="Successfull Request"></img>');
            document.getElementById("become_dealership_enq_from").reset();
          }
    });
}
