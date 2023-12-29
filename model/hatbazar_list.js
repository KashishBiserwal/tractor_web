
  $(document).ready(function () {
    ImgUpload();
    $('#btn_submit').click(store);
    $('#btn_subcat').click(store_subcategory);
    $('#save_btn').click(hatbazar_add);
    function calculateTotalPrice() {
        var quantity = parseFloat(document.getElementById('quantityInput').value) || 0;
        var unit = document.getElementById('unitSelect').value;
        var price = parseFloat(document.getElementById('price').value) || 0;

        var unitConversion = {
            'As per': 1,
            'gram': 1,
            'Kg': 1000,
            'Quintal': 100000,
            'Ton': 1000000,
            'Pack': 1,
            'Unit': 1
        };
        var total = quantity * price * unitConversion[unit];

        document.getElementById('tprice').value = total.toFixed(2);
    }

    document.getElementById('quantityInput').addEventListener('input', calculateTotalPrice);
    document.getElementById('unitSelect').addEventListener('change', calculateTotalPrice);
    document.getElementById('price').addEventListener('input', calculateTotalPrice);
  //category form
    $("#category_details").validate({
    
      rules: {
        category: {
          required: true,
        }
      },
  messages:{

      category: {
         required: "This field is required",
        }
      },
      
      submitHandler: function (form) {
        alert("Form submitted successfully!");
      },
    });

   
    $("#btn_submit").on("click", function () {
   
      $("#category_details").valid();
      if ($("#category_details").valid()) {
        
        alert("Form is valid. Ready to submit!");
      }
    });

    // sub-category form
    $("#sub_category_form").validate({
    
    rules: {
      category_: {
        required: true,
      },
      sub_category:{

        required: true,
      }
    },

    messages:{

      category_: {
        required: "This field is required",
      },
      sub_category:{

        required: "This field is required",
      }
    },
    
    submitHandler: function (form) {
      alert("Form submitted successfully!");
    },
  });

 
  $("#sub_bnt").on("click", function () {
 
    $("#sub_category_form").valid();
    if ($("#sub_category_form").valid()) {
      
      alert("Form is valid. Ready to submit!");
    }
  });
   
  // add hartbazar item form
          jQuery.validator.addMethod("customPhoneNumber", function(value, element) {
            return /^[6-9]\d{9}$/.test(value); 
          }, "Phone number must start with 6 or above");
  
          $.validator.addMethod("validPrice", function(value, element) {
      
      const cleanedValue = value.replace(/,/g, '');

      return /^\d+$/.test(cleanedValue);
    }, "Please enter a valid price (digits and commas only)");
    $("#hatbazar_form").validate({
    
    rules: {
      _category: {
        required: true,
      },
      sub_cate:{

        required: true,
      },
      firstNumber:{

        required: true,
      },
      price:{

        required: true,
          validPrice: true,
      },
      textarea_:{

        required: true,
      },
      _image:{

        required: true,
      },
      fname:{

        required: true,
      },
      lname:{

        required: true,
      },
      number:{

        required:true,
          minlength: 10,
          maxlength:10,
          digits: true,
          customPhoneNumber: true
      },
      state_:{

        required: true,
      },
      dist:{

        required: true,
      },
      unit: {
        required: true
      }
    },

    messages:{

      _category: {
        required: "This field is required",
      },
      sub_cate:{

        required: "This field is required",
      },
      firstNumber: {
        required: "This field is required",
      },
      price: {
        required: "This field is required",
          validPrice: "Please enter a valid price",
      },
      textarea_: {
        required: "This field is required",
      },
      _image: {
        required: "This field is required",
      },
      fname: {
        required: "This field is required",
      },
      lname: {
        required: "This field is required",
      },
      number: {
        required:"This field is required",
        minlength: "Phone Number must be of 10 Digit long",
        maxlength:"Enter only 10 digits",
        digits: "Please enter only digits"
      },
      state_: {
        required: "This field is required",
      },
      dist: {
        required: "This field is required",
      },
      unit: {
        required: "Please select a quantity and unit."
        }
    },
    
    submitHandler: function (form) {
      alert("Form submitted successfully!");
    },
  });

 
  $("#save_btn").on("click", function () {
 
    $("#hatbazar_form").valid();
   
  });
   

  });

    // Function to calculate total price
    
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

    //   add category
      function store(event) {
        event.preventDefault();
        console.log('jfhfhw');
        var category_name = $('#category').val();
        var paraArr = {
          'category_name': category_name
        };
      
      var apiBaseURL =APIBaseURL;
      var url = apiBaseURL + 'haat_bazar_category';
        console.log(url);
      
        var token = localStorage.getItem('token');
        var headers = {
          'Authorization': 'Bearer ' + token
        };
        $.ajax({
          url: url,
          type: "POST",
          data: paraArr,
          headers: headers,
          success: function (result) {
            console.log(result, "result");
         
            console.log("Add successfully");
            alert('successfully inserted..!')
          },
          error: function (error) {
            console.error('Error fetching data:', error);
          }
        });
      }

    // select category
    function get_category() {
        var apiBaseURL = APIBaseURL;
        var url = apiBaseURL + 'haat_bazar_category';
        $.ajax({
            url: url,
            type: "GET",
            headers: {
                'Authorization': 'Bearer ' + localStorage.getItem('token')
            },
            success: function (data) {
                console.log(data);
                const select = document.getElementById('_category');
                select.innerHTML = '<option selected disabled value="">Please select an option</option>';

                if (data.allCategory.length > 0) {
                    data.allCategory.forEach(row => {
                        const option = document.createElement('option');
                        option.textContent = row.category_name;
                        option.value = row.id;
                        select.appendChild(option);
                    });
                } else {
                    select.innerHTML = '<option>No valid data available</option>';
                }
            },
            error: function (error) {
                console.error('Error fetching data:', error);
            }
        });
    }
    get_category();

    function category_main() {
        var apiBaseURL = APIBaseURL;
        var url = apiBaseURL + 'haat_bazar_category';
        $.ajax({
            url: url,
            type: "GET",
            headers: {
                'Authorization': 'Bearer ' + localStorage.getItem('token')
            },
            success: function (data) {
                console.log(data);
                const select = document.getElementById('category_1');
                select.innerHTML = '<option selected disabled value="">Please select an option</option>';

                if (data.allCategory.length > 0) {
                    data.allCategory.forEach(row => {
                        const option = document.createElement('option');
                        option.textContent = row.category_name;
                        option.value = row.id;
                        select.appendChild(option);
                    });
                } else {
                    select.innerHTML = '<option>No valid data available</option>';
                }
            },
            error: function (error) {
                console.error('Error fetching data:', error);
            }
        });
    }
    category_main();
    
     // select category
     function get_category_main() {
        var apiBaseURL =APIBaseURL;
        var url = apiBaseURL + 'haat_bazar_sub_category';
        $.ajax({
            url: url,
            type: "GET",
            headers: {
                'Authorization': 'Bearer ' + localStorage.getItem('token')
            },
            success: function (data) {
                console.log(data);
                const select = document.getElementById('sub_cate');
    
                if (data.allSubCategory.length > 0) {
                    data.allSubCategory.forEach(row => {
                        const option = document.createElement('option');
                        option.textContent = row.sub_category_name;
                        option.value = row.id;
                        select.appendChild(option);
                    });
                } else {
                    select.innerHTML ='<option>No valid data available</option>';
                }
            },
            error: function (error) {
                console.error('Error fetching data:', error);
            }
        });
    }
    get_category_main();


    // subcategory
      function store_subcategory(event) {
        event.preventDefault();
        console.log('jfhfhw');
        var category_id = $('#category_id').val();
        var category_name = $('#category').val();
        var sub_category_name = $('#category_').val();
      
        // Prepare data to send to the server
        var paraArr = {
            'category_id':category_id,
          'category_name': category_name,
          'sub_category_name':sub_category_name,
        };
      
      var apiBaseURL =APIBaseURL;
      var url = apiBaseURL + 'haat_bazar_sub_category';
        console.log(url);
      
        var token = localStorage.getItem('token');
        var headers = {
          'Authorization': 'Bearer ' + token
        };
        $.ajax({
          url: url,
          type: "POST",
          data: paraArr,
          headers: headers,
          success: function (result) {
            console.log(result, "result");
         
            console.log("Add successfully");
            alert('successfully inserted..!')
          },
          error: function (error) {
            console.error('Error fetching data:', error);
          }
        });
      }
      // add hatbazar list
      function hatbazar_add(event) {
        console.log('run store function');
        var image_names = document.getElementById('_image').files;
        var enquiry_type_id = $('#enquiry_type_id').val();
        var sub_category_id = $('#sub_category_id').val();
        var _category = $('#_category').val();
        var sub_cate = $('#sub_cate').val();
        var unitSelect = $('#unitSelect').val();
        var quantityInput = $('#quantityInput').val();
        var price = $('#price').val();
        var tprice = $('#tprice').val();
        var textarea_ = $('#textarea_').val();
        var fname = $('#fname').val();
        var lname = $('#lname').val();
        var number = $('#number').val();
        var state_ = $('#state_').val();;
        var dist = $('#dist').val();
        var tehsil = $('#tehsil').val();
        var image_type_id = $('#image_type_id').val();

        var apiBaseURL = APIBaseURL; 
        var url = apiBaseURL + 'haat_bazar';
        var token = localStorage.getItem('token');
        var headers = {
          'Authorization': 'Bearer ' + token
        };
        var data = new FormData();
          
           for (var x = 0; x < image_names.length; x++) {
             data.append("images[]", image_names[x]);
             console.log("multiple image", image_names[x]);
           }
             data.append('sub_category_id', sub_category_id);
             data.append('enquiry_type_id', enquiry_type_id);
             data.append('_category', _category);
             data.append('tractor_type_id', sub_cate);
             data.append('quantity', quantityInput);
             data.append('as_per', unitSelect);
             data.append('price', tprice);
             data.append('about', textarea_);
             data.append('first_name', fname);
             data.append('last_name', lname);
             data.append('mobile', number);
             data.append('state', state_);
             data.append('district', dist);
             data.append('tehsil',tehsil);
             data.append('price',price);
             data.append('image_type_id',image_type_id);
           $.ajax({
             url: url,
             type: "POST",
             data: data,
             headers: headers,
             processData: false, 
             contentType: false,
             success: function (result) {
               console.log(result, "result");
               // getTractorList();
               console.log("Add successfully");
                if(result.length){
               //   get_tractor_list();
               }
               // alert('successfully inserted..!')
             },
             error: function (error) {
               console.error('Error fetching data:', error);
             }
           });
         }

         function get_haatbazar_list() {
            var apiBaseURL = APIBaseURL;
            var url = apiBaseURL + 'haat_bazar';
            $.ajax({
                url: url,
                type: "GET",
                headers: {
                    'Authorization': 'Bearer ' + localStorage.getItem('token')
                },
                success: function (data) {
                    const tableBody = document.getElementById('data-table');
                    let serialNumber = 1;
        
                    if (data.product && data.product.length > 0) {
                        data.product.forEach(row => {
                            const tableRow = document.createElement('tr');
                            tableRow.innerHTML = `
                                <td>${serialNumber}</td>
                                <td>${row.brand_name}</td>
                                <td>${row.model}</td>
                                <td>${row.purchase_year}</td>
                                <td>${row.state}</td>
                                <td>
                                    <div class="d-flex">
                                        <button class="btn btn-primary btn-sm btn_edit" onclick="fetch_edit_data(${row.product_id});" data-bs-toggle="modal" data-bs-target="#staticBackdrop_model" id="yourUniqueIdHere">
                                            <i class="fas fa-edit" style="font-size: 11px;"></i>
                                        </button>
                                        <button class="btn btn-danger btn-sm mx-1" onclick="destroy(${row.product_id});">
                                            <i class="fa fa-trash" style="font-size: 11px;"></i>
                                        </button>
                                    </div>
                                </td>
                            `;
                            tableBody.appendChild(tableRow);
                            serialNumber++;
                        });
                    } else {
                        tableBody.innerHTML = '<tr><td colspan="9">No valid data available</td></tr>';
                    }
                },
                error: function (error) {
                    console.error('Error fetching data:', error);
                }
            });
        }
        
        get_tractor_list();