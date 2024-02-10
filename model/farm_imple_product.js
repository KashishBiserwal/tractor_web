// get category in select box
function get() {
    var apiBaseURL = APIBaseURL;
    var url = apiBaseURL + 'get_implement_category';
    $.ajax({
        url: url,
        type: "GET",
        headers: {
            'Authorization': 'Bearer ' + localStorage.getItem('token')
        },
        success: function (data) {
            const select = document.getElementById('lookupSelectbox');
            select.innerHTML = ''; // Clear previous data
            $(select).append('<option selected disabled value="">Please select Category</option>');

            if (data.allCategory.length > 0) {
                data.allCategory.forEach(row => {
                    const option = document.createElement('option');
                    option.textContent = row.category_name;
                    option.value = row.id;
                    select.appendChild(option);
                });
                select.addEventListener('change', function() {
                    const selectedBrandId = this.value;
                    get_subcategory(selectedBrandId);
                });
            } else {
                select.innerHTML = '<option>No valid data available</option>';
            }
        },
        error: function (error) {
            console.error('Error fetching data:', error);
            var msg = error;
            $("#errorStatusLoading").modal('show');
            $("#errorStatusLoading").find('.modal-title').html('Error');
            $("#errorStatusLoading").find('.modal-body').html(msg);
        }
    });
}
// get subcategory in select box
function get_subcategory(id) {
    var apiBaseURL = APIBaseURL;
    var url = apiBaseURL + 'get_implement_sub_cat_by_category_id/'+ id;
    // var url= 'http://tractor-api.divyaltech.com/api/customer/get_implement_sub_cat_by_category_id/'+ id;
    http://tractor-api.divyaltech.com/api/customer/implement_sub_category_by_id/12
    
    $.ajax({
        url: url,
        type: "GET",
        headers: {
            'Authorization': 'Bearer ' + localStorage.getItem('token')
        },
        success: function (data) {
            const select = document.getElementById('lookupSelectbox2');
            select.innerHTML = ''; // Clear previous data
            $(select).append('<option selected disabled value="">Please select Category</option>');

            if (data.implementSubCategoryData.length > 0) {
                data.implementSubCategoryData.forEach(row => {
                    const option = document.createElement('option');
                    option.textContent = row.sub_category_name;
                    option.value = row.id;
                    select.appendChild(option);
                });
                select.addEventListener('change', function() {
                    const selectedsubId = this.value;
                    get_subcategory_custom(selectedsubId);
                });
            } else {
                select.innerHTML = '<option>No valid data available</option>';
            }
        },
        error: function (error) {
            console.error('Error fetching data:', error);
            var msg = error;
            $("#errorStatusLoading").modal('show');
            $("#errorStatusLoading").find('.modal-title').html('Error');
            $("#errorStatusLoading").find('.modal-body').html(msg);
        }
    });
}

// getc all custom data of sub category
function get_subcategory_custom(id){
    var apiBaseURL = APIBaseURL;
    var url = 'http://tractor-api.divyaltech.com/api/customer/implement_sub_category_by_id/' + id;
    console.log(url);
    editId_state= true;
    id= id;

    var headers = {
        'Authorization': 'Bearer ' + localStorage.getItem('token')
    };

    $.ajax({
        url: url,
        type: 'GET',
        headers: headers,
        success: function (response) {
            $('#two_field').hide(); // Correct selector

            var Data = response.allSubCategory;
            // var Data2 = response.allSubCategory;
            $('#idUser').val(Data.implement_sub_category[0].id);
            $("#lookupSelectbox option").prop("selected", false);
            $("#lookupSelectbox option[value='" + Data.implement_sub_category[0].category_name + "']").prop("selected", true);
            $('#lookup_data_value').val(Data.implement_sub_category[0].sub_category_name);

            var tableData = $("#fields");
            tableData.html('');

            Data.custom_data.forEach(function (p, index) {
                var tableRow = `
                    <div class="row form_field_outer_row">
                        <div class="form-group col-md-3">
                            <input type="text" class="form-control w_90" name="mobileb_no[]" value="${p.custom_column_name}" id="mobileb_no_${index + 1}" readOnly />
                        </div>
                        <div class="form-group col-md-3">
                            <input type="text" class="form-control" name="no_type[]" id="no_type_${index + 1}" placeholder="Enter Value" aria-invalid="false" value="${p.implement_column_name}" />
                        </div>
                        <div class="form-group col-md-4">
                            <input type="text" class="form-control" name="custome[]" id="custom_${index + 1}" placeholder="Enter Value" aria-invalid="false" value="" />
                        </div>
                        <div class="form-group col-md-2 add_del_btn_outer">
                            <button class="btn_round remove_node_btn_frm_field delete" data-index="${index + 1}" enable>
                                <i class="fas fa-trash-alt"></i>
                            </button>
                        </div>
                    </div>
                `;
                tableData.append(tableRow);
            });

            // Enable all delete buttons
            

            // Add event listener for delete buttons
            $(".remove_node_btn_frm_field").on("click", function () {
                var indexToDelete = $(this).data("index");
                console.log("Deleting field with ID: " + indexToDelete);
            });
            $(".delete").prop("disabled", false);

        },
        error: function (error) {
            console.error('Error fetching user data:', error);
            var msg = error;
            $("#errorStatusLoading").modal('show');
            $("#errorStatusLoading").find('.modal-title').html('Error');
            $("#errorStatusLoading").find('.modal-body').html(msg);
        }
    });
}

get();


function get_brand() {
    var url = 'http://tractor-api.divyaltech.com/api/customer/get_all_brands';
    // var url = 'http://tractor-api.divyaltech.com/api/admin/get_all_brands/'+ 6;
    $.ajax({
        url: url,
        type: "GET",
        headers: {
            'Authorization': 'Bearer ' + localStorage.getItem('token')
        },
        success: function (data) {
            const selects = document.querySelectorAll('#brand_main');
  
            selects.forEach(select => {
                select.innerHTML = '<option selected disabled value="">Please select an option</option>';
  
                if (data.brands.length > 0) {
                    data.brands.forEach(row => {
                        const option = document.createElement('option');
                        option.textContent = row.brand_name;
                        option.value = row.id;
                        select.appendChild(option);
                    });
  
                    // Add event listener to brand dropdown
                    select.addEventListener('change', function() {
                        const selectedBrandId = this.value;
                        get_model(selectedBrandId);
                    });
                } else {
                    select.innerHTML = '<option>No valid data available</option>';
                }
            });
        },
        error: function (error) {
            console.error('Error fetching data:', error);
        }
    });
  }
  
  function get_model(brand_id) {
    var url = 'http://tractor-api.divyaltech.com/api/customer/get_brand_model/' + brand_id;
    $.ajax({
        url: url,
        type: "GET",
        headers: {
            'Authorization': 'Bearer ' + localStorage.getItem('token')
        },
        success: function (data) {
            const selects = document.querySelectorAll('#model_main');
  
            selects.forEach(select => {
                select.innerHTML = '<option selected disabled value="">Please select an option</option>';
  
                if (data.model.length > 0) {
                    data.model.forEach(row => {
                        const option = document.createElement('option');
                        option.textContent = row.model;
                        option.value = row.id;
                        console.log(option);
                        select.appendChild(option);
                    });
                } else {
                    select.innerHTML = '<option>No valid data available</option>';
                }
            });
        },
        error: function (error) {
            console.error('Error fetching data:', error);
        }
    });
  }
  
  get_brand(); 