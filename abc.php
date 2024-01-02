<!DOCTYPE html>
<html lang="en">
<head>
<?php
include 'includes/headertag.php';
   include 'includes/footertag.php';
   
   ?> 
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
  <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.valid"ate.min.js></script>
  <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Image Upload Table</title>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
</head>


<style>
    /* Add your custom styles here */
    .table-responsive {
        width: 100%;
        overflow-x: auto;
    }

    .upload-img-wrap {
        position: relative;
        width: 50px;
        height: 38px;
        overflow: hidden;
    }

    .upload-img-wrap i {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        font-size: 24px;
        color: #aaa;
    }

    /* Hide the file input visually */
    .image-file-input {
        display: none;
    }
    /* Add more styles as needed */
</style>

<div class="table-responsive my-3">
                                  <table id="rentTractorTable" class="table table-sm">
                                      <thead>
                                          <tr>
                                              <th>No.</th>
                                              <th width="80">Image</th>
                                              <th>Implement Type</th>
                                              <th>Rate</th>
                                              <th>Rate Per</th>
                                              <th>Action</th>
                                          </tr>
                                      </thead>
                                      <tbody>
                                          <tr>
                                              <td>1</td>
                                              <td>
                                              <td>
    <div class="card upload-img-wrap" style="background-image: none;">
        <i class="fas fa-image m-auto" style="cursor: pointer;" onclick="triggerFileInput('impImage_0')"></i>
        <input type="file" name="imp_image[]" id="impImage_0" class="image-file-input" accept="image/*" style="display: none;" required="" onchange="displayImagePreview(this, 'impImagePreview_0')">
    </div>
</td>
                                                  <!-- <div class="card upload-img-wrap">
                                               
                                                      <i class="fas fa-image m-auto" style="cursor: pointer;" onclick="triggerFileInput('impImage_0')"></i>
                                                      <input type="file" name="imp_image[]" id="impImage_0" class="image-file-input" accept="image/*" style="display: none;" required="" onchange="displayFileName(this)">
                                                  </div> -->
                                              </td>
                                              <td>
                                                  <div class="select-wrap">
                                                      <select name="imp_type_id[]" id="impType_0" class="form-control implement-type-input" >
                                                          <option value>Select</option>
                                                          <option value="type1">Type 1</option>
                                                          <option value="type2">Type 2</option>
                                                      </select>
                                                  </div>
                                              </td>
                                              <td>
                                                  <input type="text" name="implement_rate[]" id="impRate_0" class="form-control implement-rate-input" maxlength="10" placeholder="e.g- 1500">
                                              </td>
                                              <td>
                                                  <div class="select-wrap">
                                                      <select name="rate_per[]" id="impRatePer_0" class="form-control implement-unit-input">
                                                          <option value="">Select</option>
                                                          <option value="per1">Acar</option>
                                                          <option value="per2">Hour</option>
                                                      </select>
                                                  </div>
                                              </td>
                                              <td>
                                                  <button type="button" class="btn btn-danger" title="Remove Row" onclick="removeRow(this)">
                                                      <i class="fas fa-minus"></i>
                                                  </button>
                                              </td>
                                          </tr>
                                      </tbody>
                                      <tfoot>
                                          <tr>
                                              <td colspan="6" align="right">
                                                  <button type="button" class="btn" title="Add Row" id="addRentTractorRowBtn">
                                                      <i class="fas fa-plus"></i>
                                                  </button>
                                              </td>
                                          </tr>
                                      </tfoot>
                                  </table>
                              </div>

                              <!-- <img id="imagePreview" class="image-preview" alt="Image Preview"> -->
                              <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script>
    function triggerFileInput(inputId) {
        $('#' + inputId).trigger('click');
    }

    function displayImagePreview(input, previewId) {
        var preview = $('#' + previewId);
        var file = input.files[0];
        var reader = new FileReader();
        
        reader.onload = function () {
    console.log('FileReader onload:', reader.result);
    preview.attr('src', reader.result);
    console.log('Image src:', preview.attr('src'));
    preview.show();
};


        if (file) {
            reader.readAsDataURL(file);
        } else {
            preview.attr('src', '');
            preview.hide();
        }
    }

    function removeRow(button) {
        $(button).closest('tr').remove();
        updateSerialNumbers();
    }

    function updateSerialNumbers() {
        $('#rentTractorTable tbody tr').each(function (index) {
            var rowNumber = index + 1;
            $(this).find('td:first').text(rowNumber);

            // Update IDs for image, type, rate, and unit
            var newImageId = 'impImage_' + rowNumber;
            var newPreviewId = 'previewImage_' + rowNumber;
            $(this).find('.image-file-input').attr('id', newImageId);
            $(this).find('img').attr('id', newPreviewId).hide();
            $(this).find('.upload-img-wrap i').attr('onclick', 'triggerFileInput(\'' + newImageId + '\')');
            $(this).find('input[name^="imp_image"]').attr('id', newImageId);
            $(this).find('select[name^="imp_type_id"]').attr('id', 'impType_' + rowNumber);
            $(this).find('input[name^="implement_rate"]').attr('id', 'impRate_' + rowNumber);
            $(this).find('select[name^="rate_per"]').attr('id', 'impRatePer_' + rowNumber);
            $(this).find('button[onclick^="removeRow"]').attr('onclick', 'removeRow(this)');
        });
    }

    $(document).ready(function () {
        $('#addRentTractorRowBtn').click(function () {
            var newRow = $('#rentTractorTable tbody tr:last').clone();

            var newRowNumber = $('#rentTractorTable tbody tr').length + 1;
            newRow.find('td:first').text(newRowNumber);

            var newImageId = 'impImage_' + newRowNumber;
            var newPreviewId = 'previewImage_' + newRowNumber;
            newRow.find('.image-file-input').attr('id', newImageId);
            newRow.find('img').attr('id', newPreviewId).hide();
            newRow.find('.upload-img-wrap i').attr('onclick', 'triggerFileInput(\'' + newImageId + '\')');
            newRow.find('input[name^="imp_image"]').attr('id', newImageId);
            newRow.find('select[name^="imp_type_id"]').attr('id', 'impType_' + newRowNumber);
            newRow.find('input[name^="implement_rate"]').attr('id', 'impRate_' + newRowNumber);
            newRow.find('select[name^="rate_per"]').attr('id', 'impRatePer_' + newRowNumber);

            newRow.find('td:last').html('<button type="button" class="btn btn-danger" title="Remove Row" onclick="removeRow(this)"><i class="fas fa-minus"></i></button>');

            $('#rentTractorTable tbody').append(newRow);
            updateSerialNumbers();
        });
    });
</script>

</body>
</html>