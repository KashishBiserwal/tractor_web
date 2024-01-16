var EditIdmain_ = "";
var editId_state= false;

$(document).ready(function(){

    // $('#implement_btn').click(edit_id);
    // $('#Search').click(search);
     $('#submitbtn').click(store);
          jQuery.validator.addMethod("customPhoneNumber", function(value, element) {
          return /^[6-9]\d{9}$/.test(value); 
          }, "Phone number must start with 6 or above");
          $.validator.addMethod("validPrice", function(value, element) {
      
            const cleanedValue = value.replace(/,/g, '');
      
            return /^\d+$/.test(cleanedValue);
          }, "Please enter a valid price (digits and commas only)");
            
      $("#old_farm_implement").validate({
      
      rules: {
        category:{
            required: true,
        },
        brand: {
          required: true,
        },
        model: {
          required: true,
        },
        year: {
          required: true,
        },
        hours:{
          required: true,
        },
        price:{
          required: true,
          validPrice: true,
       
        },
        about:{
            required: true,
          },
          Mobile:{
          required:true, 
            maxlength:10,
            digits: true,
            customPhoneNumber: true
        },
        'files[]':{
            required:true,
        },
        name:{
          required: true,
        },
        lname:{
          required: true,
        },
        state:{
            required: true,
          },
          district:{
            required: true,
          }
    },
        messages:{
            category: {
            required: "This field is required",
          },
          brand: {
            required: "This field is required",
          },
          model: {
            required: "This field is required",
          },
          year: {
          required: "This field is required",
        },
        hours:{
          required: "This field is required",
        },
        price: {
          required: "This field is required",
          validPrice: "Please enter a valid price",
        },
        about:{
            required:"This field is required",
        },
        Mobile: {
            required:"This field is required",
            maxlength:"Enter only 10 digits",
            digits: "Please enter only digits"
        },
        name: {
            required: "This field is required",
          },
          lname: {
        required: "This field is required",
        },
        'files[]':{
            required:"This field is required",
        },
         state: {
          required: "This field is required",
        },
        district: {
          required: "This field is required",
        },
      
      },
      
      submitHandler: function (form) {
        alert("Form submitted successfully!");
      },
      });
  
    
      $("#submitbtn").on("click", function () {
    
        $("#old_farm_implement").valid();
      
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
            console.log('run store function');
            //  var typeDiv = document.getElementById('type_name');
               event.preventDefault();
              
               var image_names = document.getElementById('image').files;
               console.log('image',image_names);
               var form_type = $('#form_type').val();
               var product_type_id = $('#product_type_id').val();
               var enquiry_type_id = $('#enquiry_type_id').val();category
               var category = $('#category').val();
               var brand = $('#brand').val();
               var model = $('#model').val();
               var year = $('#year').val();
               var hours = $('#hours').val();
               var price = $('#price').val();
               var about = $('#about').val();
               var first_name = $('#name').val();
               var last_name = $('#lname').val();
               var Mobile = $('#Mobile').val();
               var state = $('#state').val();;
               var district = $('#district').val();
               var tehsil = $('#tehsil').val();
           
               var apiBaseURL =APIBaseURL;
              //  var url = apiBaseURL + 'customer_enquiries';
               var token = localStorage.getItem('token');
               var headers = {
                 'Authorization': 'Bearer ' + token
               };
          
               var _method = 'PUT'; 
              var url, method;
              
              console.log('edit state',editId_state);
              console.log('edit id', EditIdmain_);
              if (EditIdmain_) {
                  // Update mode
                  console.log(editId_state, "state");
                  console.log(EditIdmain_, "id edit");
                  _method = 'put';
                  url = apiBaseURL + 'customer_enquiries/' + EditIdmain_ ;
                  console.log(url);
                  method = 'POST'; 
              } else {
                  // Add mode
                  url = apiBaseURL + 'customer_enquiries';
                  method = 'POST';
              }
               var data = new FormData();
              
               for (var x = 0; x < image_names.length; x++) {
                 data.append("images[]", image_names[x]);
                 console.log("multiple image", image_names[x]);
               }
                 data.append('form_type',form_type);
                 data.append('_method',_method);
                 data.append('product_type_id', product_type_id);
                 data.append('enquiry_type_id', enquiry_type_id);
                 data.append('category', category);
                 data.append('brand_id', brand);
                 data.append('model', model);
                 data.append('purchase_year',year);
                 data.append('price',price);
                 data.append('hours_driven', hours);
                 data.append('about', about);
                 data.append('first_name', first_name);
                 data.append('last_name', last_name);
                 data.append('Mobile',Mobile);
                 data.append('state',state);
                 data.append('district',district);
                 data.append('tehsil',tehsil);
                //  data.append('description',description);
                 console.log(data, "okk");
          
               $.ajax({
                url: url,
                  type: method,
                  data: data,
                  headers: headers,
                  processData: false,
                  contentType: false,
                 success: function (result) {
                   console.log(result, "result");
                   // getTractorList();
                   console.log("Add successfully");
                   get_tractor_list();
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
            const select = document.getElementById('category');
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

// fetch data
function old_farm_implement() {
    var apiBaseURL = APIBaseURL;
    var url = apiBaseURL + 'get_old_implements';
    $.ajax({
        url: url,
        type: "GET",
        headers: {
            'Authorization': 'Bearer ' + localStorage.getItem('token')
        },
        success: function (data) {
            const tableBody = document.getElementById('data-table');
// console.log(data);
            if (data.enquiry_data && data.enquiry_data.length > 0) {
                let tableData = [];
                let counter = 1;

                data.enquiry_data.forEach(row => {
                    let action = `
                        <div class="d-flex">
                            <button class="btn btn-warning btn-sm text-white mx-1" data-bs-toggle="modal" onclick="fetch_data(${row.product_id});" data-bs-target="#old_farm_enq">
                            <i class="fa-solid fa-eye" style="font-size: 11px;"></i></button>
                            <button class="btn btn-primary btn-sm btn_edit" onclick="fetch_edit_data(${row.product_id});" data-bs-toggle="modal" data-bs-target="#old_farm_implement_enq" id="yourUniqueIdHere" style="padding:5px">
                              <i class="fas fa-edit" style="font-size: 11px;"></i>
                            </button>
                            <button class="btn btn-danger btn-sm mx-1" onclick="destroy(${row.product_id});" style="padding:5px">
                              <i class="fa fa-trash" style="font-size: 11px;"></i>
                            </button>
                        </div>`;

                    tableData.push([
                        counter,
                        formatDateTime(row.date),
                        row.brand_name,
                        row.name,
                        row.mobile,
                        row.purchase_year,
                        row.state,
                        row.district,
                        action
                    ]);

                    counter++;
                });

                $('#example').DataTable().destroy();
                $('#example').DataTable({
                    data: tableData,
                    columns: [
                        { title: 'S.No.' },
                        { title: 'Date' },
                        { title: 'Brand' },
                        { title: 'Name' },
                        { title: 'Mobile' },
                        { title: 'Year' },
                        { title: 'State' },
                        { title: 'District' },
                        { title: 'Action', orderable: false }
                    ],
                    paging: true,
                    searching: true,
                    // ... other options ...
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

old_farm_implement();