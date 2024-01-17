var EditIdmain_ = "";
var editId_state= false;
$(document).ready(function () {
  $('#submitBtn').click(add_news);
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
        publisher:{
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
        publisher: {
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
  function removeImage(ele){
    console.log("print ele");
      console.log(ele);
      let thisId=ele.id;
      thisId=thisId.split('closeId');
      thisId=thisId[1];
      $("#"+ele.id).remove();
      $(".upload__img-closeDy"+thisId).remove();
  
    }

  function get() {
    var apiBaseURL =APIBaseURL;
    var url = apiBaseURL + 'news_category';
    $.ajax({
        url: url,
        type: "GET",
        headers: {
            'Authorization': 'Bearer ' + localStorage.getItem('token')
        },
        success: function (data) {
            console.log(data);
            const select = document.getElementById('brand');
            select.innerHTML = '<option selected disabled value="">Please select an option</option>';

            if (data.news_category.length > 0) {
                data.news_category.forEach(row => {
                    const option = document.createElement('option');
                    option.textContent = row.category_name;
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
get();

function get_search() {
  var apiBaseURL =APIBaseURL;
  var url = apiBaseURL + 'news_category';
  $.ajax({
      url: url,
      type: "GET",
      headers: {
          'Authorization': 'Bearer ' + localStorage.getItem('token')
      },
      success: function (data) {
          console.log(data);
          const select = document.getElementById('category_name');
          select.innerHTML = '<option selected disabled value="">Please select an option</option>';

          if (data.news_category.length > 0) {
              data.news_category.forEach(row => {
                  const option = document.createElement('option');
                  option.textContent = row.category_name;
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
get_search();

function add_news(event) {
    event.preventDefault();

    var image_names = document.getElementById('image_').files;
    var category = $('#brand').val();
    var headline = $('#headline').val();
    var content = $('#contant').val();
    var publisher = $('#publisher').val();

    var apiBaseURL = APIBaseURL;
    console.log(apiBaseURL);
    var token = localStorage.getItem('token');
    var headers = {
        'Authorization': 'Bearer ' + token
    };

    // Check if an ID is present in the URL, indicating edit mode
    var urlParams = new URLSearchParams(window.location.search);
    var editId = urlParams.get('id');
    var _method = 'post'; 
    var url, method;
    
    console.log('edit state',editId_state);
    console.log('edit id', EditIdmain_);
    if (editId_state) {
        // Update mode
        console.log(editId_state);
        _method = 'put';
        url = apiBaseURL + 'blog_details/' + EditIdmain_ ;
        console.log(url);
        method = 'POST'; 
    } else {
        // Add mode
        url = apiBaseURL + 'blog_details';
        method = 'POST';
    }

    var data = new FormData();

    for (var x = 0; x < image_names.length; x++) {
        data.append("images[]", image_names[x]);
    }

    data.append('_method', _method);
    data.append('category_id', category);
    data.append('heading', headline);
    data.append('content', content);
    data.append('publisher', publisher);


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
            alert("successfully Inserted..!");
            $('#staticBackdrop').modal('hide');
            get_news();
        },
        error: function (error) {
            console.error('Error:', error);
        }
    });

}


function get_news() {
    var apiBaseURL = APIBaseURL;
    var url = apiBaseURL + 'blog_details';
    $.ajax({
        url: url,
        type: "GET",
        headers: {
            'Authorization': 'Bearer ' + localStorage.getItem('token')
        },
        success: function (data) {
            const tableBody = document.getElementById('data-table');

            if (data.blog_details && data.blog_details.length > 0) {
                let tableData = [];
                let counter = 1;

                data.blog_details.forEach(row => {
                    let action = `
                        <div class="d-flex">
                          <button class="btn btn-warning btn-sm text-white mx-1" data-bs-toggle="modal" onclick="fetch_data(${row.id});" data-bs-target="#exampleModal">
                                       <i class="fa-solid fa-eye" style="font-size: 11px;"></i></button>
                                       <button class="btn btn-primary btn-sm btn_edit" onclick="fetch_edit_data(${row.id});" data-bs-toggle="modal" data-bs-target="#staticBackdrop" id="yourUniqueIdHere">
                                                              <i class="fas fa-edit" style="font-size: 11px;"></i>
                                                           </button>
                                                           <button class="btn btn-danger btn-sm mx-1" onclick="destroy(${row.id});">
                                                                             <i class="fa fa-trash" style="font-size: 11px;"></i>
                                                              </button>
                        </div>`;

                    tableData.push([
                        counter,
                        // formatDateTime(row.date),
                        row.date,
                        row.blog_category,
                        row.heading,
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
                        { title: 'Blog Category' },
                        { title: 'Blog Headline' },
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
  get_news();


  // **delete***
function destroy(id) {
    var apiBaseURL = APIBaseURL;
    var url = apiBaseURL + 'blog_details/' + id;
    console.log(url);
    var token = localStorage.getItem('token');
  
    if (!token) {
      console.error("Token is missing");
      return;
    }
    var isConfirmed = confirm("Are you sure you want to delete this data?");
    if (!isConfirmed) {
      return;
    }
  
    $.ajax({
      url: url,
      type: "DELETE",
      headers: {
        'Authorization': 'Bearer ' + token
      },
      success: function(result) {
        window.location.reload();
        get_dealers();

        console.log("Delete request successful");
        alert("Delete operation successful");
      },
      error: function(error) {
        console.error('Error fetching data:', error);
        alert("Error during delete operation");
      }
    });
  }

  //   for View
  function fetch_data(id) {
    console.log(id, "id");
    console.log(window.location);
    var urlParams = new URLSearchParams(window.location.search);
  
    var productId = id;
    var apiBaseURL = APIBaseURL;
    var url = apiBaseURL + 'blog_details/' + productId;
  
    var headers = { 
        'Authorization': 'Bearer ' + localStorage.getItem('token')
    };
  
    $.ajax({
        url: url,
        type: "GET",
        headers: headers,
        success: function (response) {
          console.log(response, 'abc');
          var userData = response.blog_details[0];
          document.getElementById('news_cate').innerText = userData.blog_category;
          document.getElementById('headline_news').innerText = userData.heading;
          document.getElementById('content_news').innerText = userData.content;
          document.getElementById('publi').innerText = userData.publisher;
      
          $("#selectedImagesContainer1").empty();
      
          if (data.blog_details[0].image_names) {
              var imageNamesArray = Array.isArray(data.blog_details[0].image_names) ? data.blog_details[0].image_names : data.blog_details[0].image_names.split(',');
      
              imageNamesArray.forEach(function (imageName) {
                  var imageUrl = 'http://tractor-api.divyaltech.com/uploads/blog_img/' + imageName.trim();
      
                  var newCard = `
                      <div class="col-6 col-lg-6 col-md-6 col-sm-6">
                          <div class="brand-main d-flex box-shadow   mt-2 text-center shadow">
                              <a class="weblink text-decoration-none text-dark" title="Image">
                                  <img class="img-fluid w-100 h-100 " src="${imageUrl}" alt="Image">
                              </a>
                          </div>
                      </div>
                  `;
      
                  $("#selectedImagesContainer1").append(newCard);
              });
          }
      },
        error: function (error) {
            console.error('Error fetching data:', error);
        }
    });
  } 

  function fetch_edit_data(id) {
    var apiBaseURL = APIBaseURL;
    var url = apiBaseURL + 'blog_details/' + id;
    editId_state= true;
    EditIdmain_= id;
  
    var headers = {
        'Authorization': 'Bearer ' + localStorage.getItem('token')
    };
  
    $.ajax({
        url: url,
        type: 'GET',
        headers: headers,
        success: function (response) {
            var Data = response.blog_details[0];
            // $('#brand').val(Data.brand_name);
            $("#brand option").prop("selected", false);
            $("#brand option[value='" + Data.blog_category + "']").prop("selected", true);

            $('#headline').val(Data.heading);
            $('#contant').val(Data.content);
            $('#publisher').val(Data.publisher);
  
            // Clear existing images
            $("#selectedImagesContainer2").empty();
  
            if (Data.image_names) {
                // Check if Data.image_names is an array
                var imageNamesArray = Array.isArray(Data.image_names) ? Data.image_names : Data.image_names.split(',');
                var countclass=0;
                imageNamesArray.forEach(function (imageName) {
                    var imageUrl = 'http://tractor-api.divyaltech.com/uploads/news_img/' + imageName.trim();
                    countclass++;
                    var newCard = `
                        <div class="col-6 col-lg-6 col-md-6 col-sm-6 position-relative">
                        <div class="upload__img-close_button" id="closeId${countclass}" onclick="removeImage(this);"></div>
                            <div class="brand-main d-flex box-shadow mt-2 text-center shadow upload__img-closeDy${countclass}">
                                <a class="weblink text-decoration-none text-dark" title="Image">
                                    <img class="img-fluid w-100 h-100" src="${imageUrl}" alt="Image">
                                </a>
                            </div>
                        </div>
                    `;
                    // Append the new image element to the container
                    $("#selectedImagesContainer2").append(newCard);
                });
            }
        },
        error: function (error) {
            console.error('Error fetching user data:', error);
        }
    });
  }