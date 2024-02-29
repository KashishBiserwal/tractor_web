var EditIdmain_ = "";
var editId_state= false;
$(document).ready(function () {
    ImgUpload();
  $('#Search').click(searchdata);
  $("#Reset").click(function () {
    // Reset filter values
    $("#category_name").val("");
    $("#search_headline").val("");

    // Reset the dropdown to the default state
    $('#category_name').val(null).trigger('change');

    // Trigger the searchdata function after resetting filters
    searchdata();
    changeModalText();
}); 

  $('#submitBtn').click(add_news);
   
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
        'image_[]':{
          required:true,
        
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
        'image_[]':{
          required:"This field is required",
     
        }
       
      },
      
      submitHandler: function (form) {
        alert("Form submitted successfully!");
      },
    });

   
    $("#submitBtn").on("click", function () {
   
      $("#form_news_updates").valid();
      // if ($("#form_news_updates").valid()) {
        
      //   alert("Form is valid. Ready to submit!");
      // }
    });
   
  });
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

    var category = $('#brand').val();
    var headline = $('#headline').val();
    var content = $('#contant').val();
    var publisher = $('#publisher').val();
    var image = document.getElementById('image_').files[0];

    console.log("Selected image:", image); // Debugging statement

    var apiBaseURL = APIBaseURL;
    var token = localStorage.getItem('token');
    var headers = {
        'Authorization': 'Bearer ' + token
    };

    // Check if an ID is present in the URL, indicating edit mode
    var urlParams = new URLSearchParams(window.location.search);
    var editId = urlParams.get('id');
    var _method = 'post';
    var url, method;

    if (editId_state) {
        // Update mode
        _method = 'put';
        url = apiBaseURL + 'blog_details/' + EditIdmain_;
        method = 'POST';
    } else {
        // Add mode
        url = apiBaseURL + 'blog_details';
        method = 'POST';
    }

    var data = new FormData();

    if (image) {
        data.append("images[]", image); // Use "image" instead of "image_names" if uploading a single image
    }

    data.append('_method', _method);
    data.append('category_id', category);
    data.append('heading', headline);
    data.append('content', content);
    data.append('publisher', publisher);

    console.log("FormData:", data); // Debugging statement

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

                // Reverse the order of the data
                let reversedData = data.blog_details.slice().reverse();
                
                reversedData.forEach(row => {
                    let action = `
                        <div class="d-flex">
                          <button class="btn btn-warning btn-sm text-white mx-1" data-bs-toggle="modal" onclick="fetch_data(${row.id});" data-bs-target="#exampleModal">
                            <i class="fa-solid fa-eye" style="font-size: 11px;"></i></button>
                            <button class="btn btn-primary btn-sm btn_edit" onclick="fetch_edit_data(${row.id}); changeModalText();" data-bs-toggle="modal" data-bs-target="#staticBackdrop" id="yourUniqueIdHere">
                            <i class="fas fa-edit" style="font-size: 11px;"></i>
                          </button>
                          
                          <button class="btn btn-danger btn-sm mx-1" onclick="destroy(${row.id});">
                            <i class="fa fa-trash" style="font-size: 11px;"></i>
                          </button>
                        </div>`;

                    tableData.push([
                        counter,
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

  // for View
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
  
            var selectedImagesContainer = $("#selectedImagesContainer1");
            selectedImagesContainer.empty();
  
            if (userData.image_names) {
                var imageNamesArray = Array.isArray(userData.image_names) ? userData.image_names : userData.image_names.split(',');
  
                imageNamesArray.forEach(function (imageName) {
                    var imageUrl = 'http://tractor-api.divyaltech.com/uploads/blog_img/' + imageName.trim();
  
                    var newCard = `
                        <div class="col-6 col-lg-6 col-md-6 col-sm-6">
                            <div class="brand-main d-flex box-shadow mt-2 text-center shadow">
                                <a class="weblink text-decoration-none text-dark" title="Image">
                                    <img class="img-fluid w-100 h-100 " src="${imageUrl}" alt="Image">
                                </a>
                            </div>
                        </div>
                    `;
  
                    selectedImagesContainer.append(newCard);
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
            // $("#brand option").prop("selected", false);
            // $("#brand option[value='" + Data.blog_category + "']").prop("selected", true);

            var categoryDropdown = document.getElementById('brand');
            for (var i = 0; i < categoryDropdown.options.length; i++) {
                if (categoryDropdown.options[i].text === Data.blog_category) {
                    categoryDropdown.selectedIndex = i;
                    break;
                }
            }

            $('#headline').val(Data.heading);
            $('#contant').val(Data.content);
            $('#publisher').val(Data.publisher);
  
            // Clear existing images
            $("#selectedImagesContainer2").empty();
  
            if (Data.image_names) {
                // Check if Data.image_names is an array
                var imageNamesArray = Array.isArray(Data.image_names) ? Data.image_names : Data.image_names.split(',');
                var countclass = 0;
                imageNamesArray.forEach(function (imageName) {
                    var imageUrl = 'http://tractor-api.divyaltech.com/uploads/blog_img/' + imageName.trim();
                    countclass++;
                    var newCard = `
                        <div class="col-6 col-lg-6 col-md-6 col-sm-6 position-relative">
                            <div class="upload__img-close_button" id="closeId${countclass}" onclick="removeImage(this);"></div>
                            <div class="brand-main d-flex box-shadow mt-2 text-center shadow upload__img-closeDy${countclass}">
                                <a class="weblink text-decoration-none text-dark" title="Image">
                                    <img class="custom-image-size" src="${imageUrl}" alt="Image">
                                </a>
                            </div>
                        </div>`;
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

// search data
function searchdata() {
  var category_name = $('#category_name').val();
  var search_headline = $('#search_headline').val();

  var apiBaseURL = APIBaseURL;
  var url = apiBaseURL + 'search_for_blog_details';
  var token = localStorage.getItem('token');

  var headers = {
      'Authorization': 'Bearer ' + token
  };

  var data = new FormData();

  // Include both parameters in the search query if they are provided
  if (category_name) {
      data.append('blog_category_id', category_name);
  }
  
  if (search_headline) {
      data.append('blog_heading', search_headline);
  }

  $.ajax({
      url: url,
      type: "POST",
      data: data,
      headers: headers,
      processData: false,
      contentType: false,
      success: function (data) {
        console.log('Success:', data.blog_details);
        const tableBody = document.getElementById('data-table');
        let tableData = [];
        let counter = 1;
    
        if (data.blog_details && data.blog_details.length > 0) {
            data.blog_details.forEach(row => {
                let action = `
                    <div class="d-flex">
                        <button class="btn btn-warning btn-sm text-white mx-1" data-bs-toggle="modal" onclick="fetch_data(${row.id});" data-bs-target="#exampleModal">
                            <i class="fa-solid fa-eye" style="font-size: 11px;"></i>
                        </button>
                        <button class="btn btn-primary btn-sm btn_edit" onclick="fetch_edit_data(${row.id});" data-bs-toggle="modal" data-bs-target="#staticBackdrop" id="yourUniqueIdHere">
                            <i class="fas fa-edit" style="font-size: 11px;"></i>
                        </button>
                        <button class="btn btn-danger btn-sm mx-1" onclick="destroy(${row.id});">
                            <i class="fa fa-trash" style="font-size: 11px;"></i>
                        </button>
                    </div>`;
    
                // Push row data as an array into the tableData
                tableData.push([
                    counter,
                    row.date,
                    row.blog_category,
                    row.heading,
                    action
                ]);
    
                counter++;
            });
    
            // Initialize DataTable after preparing the tableData
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
                searching: false,
                // ... other options ...
            });
        } else {
            tableBody.innerHTML = '<tr><td colspan="5">No valid data available</td></tr>';
        }
    },
    error: function (error) {
        const tableBody = document.getElementById('data-table');
        if (error.status == 404) {
            tableBody.innerHTML = '<tr><td colspan="5">No valid data available</td></tr>';
            $('#example_paginate').hide();
        } else {
            console.error('Error fetching data:', error);
            tableBody.innerHTML = '<tr><td colspan="5">Error fetching data</td></tr>';
        }
    }
  });
}

function resetFormFields(){
    document.getElementById("form_news_updates").reset();
    document.getElementById("add_trac").innerHTML = 'Add Blog';
    document.getElementById("image_").value = ''; // Clear the value of the image input
    document.getElementById("selectedImagesContainer2").innerHTML = ''; // Optionally, clear any displayed images
}


document.addEventListener('DOMContentLoaded', function() {
    var myModal = document.getElementById('staticBackdrop');
    myModal.addEventListener('hidden.bs.modal', function () {
      var modalTitle = document.getElementById('staticBackdropLabel');
      modalTitle.innerText = 'Add Blog'; 
    });
  });


  var isEditClicked = false; 

  function changeModalText() {
    var modalTitle = document.getElementById('staticBackdropLabel');
    modalTitle.innerText = 'Update Blog';
  }

  function editButtonClicked() {
    isEditClicked = true; 
  }

  function resetIsEditClicked() {
    isEditClicked = false; 
  }
  // Function to handle the add button click
  function addButtonClicked() {
    if (isEditClicked) {
      changeModalText('Update Blog'); 
    } else {
      changeModalText('Add Blog'); 
    }
    resetIsEditClicked(); 
  }