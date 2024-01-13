$(document).ready(function () {
    // ImgUpload();
    // $('#submit').click(store);
    // $('#submit').click(store_subcategory);
    $('#submitbnt').click(hatbazar_add);
  //category form
   
  });

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
                const select = document.getElementById('subcategory');
    
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

    function hatbazar_add(event) {
        event.preventDefault();
    
        var image_names = document.getElementById('imageInput').files;
         var enquiry_type_id = $('#enquiry_type_id').val();
         var sub_category_id = $('#sub_category_id').val();
         var image_type_id = $('#image_type_id').val();
         var category = $('#category').val();
         var subcategory = $('#subcategory').val();
         var quantity = $('#quantity').val();
         var asPer = $('#asPer').val();
         var price = $('#price').val();
         var totalprice = $('#totalprice').val();
         var about = $('#aboutharvest').val();
         var first_name = $('#fname1').val();
         var last_name = $('#lname1').val();
         var number = $('#number1').val();
         var state = $('#state1').val();
         var district = $('#district1').val();
         var tehsil = $('#tehsil1').val();
        
         console.log(state_,"state");
         console.log(dist,"district");
    
         var apiBaseURL = APIBaseURL; 
        //      var url = apiBaseURL + 'haat_bazar';
             var token = localStorage.getItem('token');
             var headers = {
               'Authorization': 'Bearer ' + token
             };
    
        // Check if an ID is present in the URL, indicating edit mode
        var urlParams = new URLSearchParams(window.location.search);                            
        var editId = urlParams.get('id');
        // console.log("editId from URL:", editId);
        console.log('edit state', editId_state);
        console.log('edit id', EditIdmain_);
        var _method = 'post'; 
        var url, method;
    
        if (editId_state) {
          alert("fhjfg");
          console.log(editId_state);
          _method = 'put';
          url = apiBaseURL + 'haat_bazar/' + EditIdmain_ ;
          console.log(url);
          method = 'POST';  
      } else {
          // Add modeeditId from URL
          url = apiBaseURL + 'haat_bazar';
          console.log('prachi');
      method = 'POST';
      }
    
        var data = new FormData();
    
        for (var x = 0; x < image_names.length; x++) {
                     data.append("images[]", image_names[x]);
                     console.log("multiple image", image_names[x]);
                   }
                  data.append('_method', _method);
                  data.append('sub_category_id', sub_category_id);
                  data.append('enquiry_type_id', enquiry_type_id);
                  data.append('image_type_id',image_type_id);
                  data.append('_category', category);
                  data.append('tractor_type_id', subcategory);
                  data.append('quantity', quantity);
                  data.append('as_per', asPer);
                  data.append('price', price);
                  data.append('price', totalprice);
                  data.append('about', about);
                  data.append('first_name', first_name);
                  data.append('last_name', last_name);
                  data.append('mobile', number);
                  data.append('state', state);
                  data.append('district', district);
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
                console.log("Operation successfully");
                // window.location.reload();
            },
            error: function (error) {
                console.error('Error:', error);
            }
        });
    
    }

    
    