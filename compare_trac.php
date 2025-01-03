<!DOCTYPE html>
<html lang="en">

   <?php
  include 'includes/headertag.php';
    //include 'includes/headertagadmin.php';
    include 'includes/footertag.php';
     
     ?> 
    <script> var baseUrl = "<?php echo $baseUrl; ?>";</script>
    <script src="<?php $baseUrl; ?>model/compare_trac.js"></script>
  <!-- Google tag (gtag.js) -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-6Z38E658LD"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-6Z38E658LD');
  </script>
  <style>
    #more {display: none;}
    .edit_btn {
      display: none;
    }
    #model_1, #model_2, #model_3 {
      display: none;
    }
  </style>
  <body>
  

  <?php
    include 'includes/header.php';
  ?>

  <section class="mt-4 pt-5 bg-light">
    <div class="container mt-4 pt-3">
      <div class="">
        <span class="mt-5 text-white pt-5 ">
          <a href="index.php" class="text-decoration-none header-link px-1">Home <i class="fa-solid fa-chevron-right px-1"></i></a>
        </span>
        <span class="text-dark">Compare</span>
      </div>
    </div>
  </section>

  <!-- section 1 which is display block first -->
  <section style="display: block;" id="section-1">
    <div class="container" id="an">      
    <h3 class="mt-3 mb-3 bg-light">Compare Tractors</h3> 
      <div class="row py-1" >
       
            <div class="col-12 col-lg-3 col-sm-3 col-md-3 mt-4 mb-5" id="">
              <div class="success__stry__item shadow h-100">
                  <div class="thumb">
                      <a href="#">
                          <div class="">
                              <img src="assets\images\bharattractor2.png" class="object-fit-cover mt-4 p-3 w-100" width="100px" height="200px" alt="img">
                          </div>
                      </a>
                  </div>
                  <div class="col-12 col-sm-12 col-md-4 col-lg-4 content mt-2  text-center w-100">
                    <div class="form-outline">
                      <label class="form-label" for="brand"></label>
                      <select class="form-select py-2 brandselect" aria-label="Default select example" name="brand" id="brand" >
                      </select>
                    </div>
                  </div>
                  <div class="col-12 col-sm-12 col-md-4 col-lg-4 content  text-center w-100">
                    <div class="form-outline">
                      <label class="form-label" for="model" text-dark></label>
                      <select class="form-select py-2 modelselect" aria-label="Default select example" name="model" id="model">
                        <option value="" selected >Please Select Model</option> 
                      </select>
                    </div>
                  </div>
                  <div class="content pb-1 text-center">
                    <!-- <div class="col-12  text-center"><i class="fas fa-pencil-alt edit_btn btn" id="edit_" onclick="valueblanck()"hidden></i></div> -->
                 <!-- <button><i class="fas fa-edit"></i></button> -->
                  </div>
              </div>
            </div>

          <div class="col-12 col-lg-3 col-sm-3 col-md-3 mt-4 mb-5">
              <div class="success__stry__item shadow h-100">
                  <div class="thumb">
                      <a href="#">
                          <div class="">
                              <img src="assets\images\bharattractor2.png" class="object-fit-cover mt-4 p-3 w-100" width="100px" height="200px" alt="img">
                          </div>
                      </a>
                  </div>
                  <div class="col-12 col-sm-12 col-md-4 col-lg-4 content mt-2  text-center w-100">
                    <div class="form-outline">

                    <label class="form-label" for="brand"></label>
                      <select class="form-select py-2 brandselect" aria-label="Default select example" name="brand_1" id="brand_1" onchange="showEditIcon2()">
                      </select>
                    </div>
                  </div>
                  <div class="col-12 col-sm-12 col-md-4 col-lg-4 content  text-center w-100">
                    <div class="form-outline">
                      <label class="form-label" for="model"></label>
                      <select class="form-select py-2 modelselect" aria-label="Default select example" name="model_1" id="model_1"style="display: inline-block;">
                      <option value="" selected >Please Select Model</option> 
                      </select>

                      <!-- <label class="form-label" for="brand"></label> 
                      <select class="form-select py-2 brandselect" aria-label="Default select example" name="brand" id="brand_1" onchange="showEditIcon2()">
                      </select>
                      
                    </div>
                  </div>
                  <div class="col-12 col-sm-12 col-md-4 col-lg-4 content  text-center w-100">
                    <div class="form-outline">
                      <label class="form-label" for="model_1"></label>
                      <select class="form-select py-2 modelselect" aria-label="Default select example" name="model_1" id="model_1">
                      <option value="" selected >Please Select Model</option> 
                       </select> -->
                    </div>
                  </div>
                  <div class="content pb-1 text-center">
                      <div class="col-12  text-center mt-1">
                        <div class="col-12  text-center"><i class="fas fa-pencil-alt edit_btn btn" id="edit_1" onclick="valueblanck1()" hidden></i></div>
                      </div>
                  </div>
              </div>
            </div>

            <div class="col-12 col-lg-3 col-sm-3 col-md-3 mt-4 mb-5">
              <div class="success__stry__item shadow h-100">
                  <div class="thumb">
                      <a href="#">
                          <div class="">
                              <img src="assets\images\bharattractor2.png" class="object-fit-cover mt-4 p-3 w-100" width="100px" height="200px" alt="img">
                          </div>
                      </a>
                  </div>
                  <div class="col-12 col-sm-12 col-md-4 col-lg-4 content mt-2 text-center w-100">
                    <div class="form-outline">
                      <label class="form-label" for="brand"></label>
                      <select class="form-select py-2 brandselect" aria-label="Default select example" name="brand" id="brand_2"onchange="showEditIcon3()">
                      
                      </select>
                    </div>
                  </div>
                   <div class="col-12 col-sm-12 col-md-4 col-lg-4 content  text-center w-100"> 
                    <div class="form-outline">
                      <label class="form-label" for="model_2"></label>
                      <select class="form-select py-2 modelselect" aria-label="Default select example" name="model_2" id="model_2"style="display: inline-block;">
                      <option>Please Select Model</option> 
                      </select>
                      
                    </div>
                   </div>
                  <div class="content pb-1 text-center">
                      <div class="col-12  text-center mt-1">
                        <div class="col-12  text-center"><i class="fas fa-pencil-alt edit_btn btn" id="edit_2" hidden onclick="valueblanck2()"></i></div>
                      </div>
                  </div>
              </div>
          </div>
          <div class="col-12 col-lg-3 col-sm-3 col-md-3 mt-4 mb-5">
              <div class="success__stry__item shadow h-100">
                  <div class="thumb">
                      <a href="#">
                          <div class="">
                              <img src="assets\images\bharattractor2.png" class="object-fit-cover mt-4 p-3 w-100" width="100px" height="200px" alt="img">
                          </div>
                      </a>
                  </div>
                  <div class="col-12 col-sm-12 col-md-4 col-lg-4 content mt-2 text-center w-100">
                    <div class="form-outline">
                      <label class="form-label" for="brand"></label>
                      <select class="form-select py-2 brandselect" aria-label="Default select example" name="brand" id="brand_3" onchange="showEditIcon4()">
                    
                      </select>
                    </div>
                  </div>
                  <div class="col-12 col-sm-12 col-md-4 col-lg-4 content  text-center w-100">
                    <div class="form-outline">
                      <label class="form-label" for="model_3"></label>
                      <select class="form-select py-2 modelselect" aria-label="Default select example" name="model" id="model_3"style="display: inline-block;">
                      <option value="" selected >Please Select Model</option>
                      </select>
                         
                    </div>
                  </div>
                  <div class="content pb-1 text-center">
                      <div class="col-12  text-center mt-1">
                        <div class="col-12  text-center"><i class="fas fa-pencil-alt edit_btn btn" id="edit_3" hidden onclick="valueblanck3()"></i></div>
                      </div>
                  </div>
              </div>
          </div>
          <div class="col-12  text-center mt-3">
          <button class="btn btn-success text-white col-12 px-5 w-50" id="compareButton" onclick="showall();">Compare</button>
          </div>

      </div>
    </div>
  </section>


<!-- section 2 which  is display none first -->


<section style="display: none;" id="section-2">
  <?php
    include 'compare_trac_model.php';
  ?>
</section>


  <section>
    <div class="container">
      <div class=" ps-5 pe-5">
        <a href="#" class="text-decoration-none fs-5 text-primary pb-1">
          <img src="assets\images\5-year-warranty-Mobile-Banner_1077x168Pxl.avif" class="object-fit-cover p-3 w-100" alt="img">                       
        </a>      
      </div>
    </div>
  </section>

  <section>
    <div class="container">
      <div class=" fw-bold fs-5 mt-3 ">
        <p class="mb-n4">Compare Tractors</p>
      </div>
      <p class="">BharatAgrimart's is a one-stop authentic online destination where you can compare a variety of Tractors and Farm Implements. All top tractor brands are available here including Mahindra, John Deere, Escorts, Sonalika, Eicher, TAFE, New Holland and many more. The information displayed on BharatAgrimart's is believed to be accurate, unbiased and correct. Choose at least two tractors as per your choice to compare based on their specifications, features, mileage, Price, overall perf<span id="dots">...</span><span id="more">ormance and warranty. All Indian Farmers can easily compare tractors of distinct varieties just in a few clicks. BharatAgrimart's brings a welfare opportunity to compare tractor price in India. This allows farmers from every region to compare tractors in India.

      BharatAgrimart's provides the most comprehensive tractor comparison tool in India on which you can select at least two or more tractors of your choice for comparison. This online platform provides all the useful guidelines for tractor comparison India. BharatAgrimart's always works to empower Indian farmers with a new tractor compare section.<br><br>

      Compare tractor prices in India, specifications, warranty and many more at one place and then select your dream tractor. For Further more inquiries stay tuned with BharatAgrimart's.</span></p>
      <button class="text-primary" onclick="myFunction()" id="myBtn">Read more</button>
      <script>
        function myFunction() {
          var dots = document.getElementById("dots");
          var moreText = document.getElementById("more");
          var btnText = document.getElementById("myBtn");

          if (dots.style.display === "none") {
            dots.style.display = "inline";
            btnText.innerHTML = "Read more"; 
            moreText.style.display = "none";
          } else {
            dots.style.display = "none";
            btnText.innerHTML = "Read less"; 
            moreText.style.display = "inline";
          }
        }
      </script>
    </div>
  </section>

   <?php
   include 'includes/footer.php';
   
   ?>
 <!-- <script>
  document.addEventListener("DOMContentLoaded", function () {
  const form = document.getElementById("an");
  let selectedValues = {};
  const compareButton = document.getElementById('compareButton');
  compareButton.setAttribute('disabled', 'disabled');

  form.addEventListener("change", function (event) {
    const selectedElement = event.target;
    if (selectedElement.tagName === "SELECT") {
      const selectedValue = selectedElement.value;
      const selectedText = selectedElement.options[selectedElement.selectedIndex].text;
      const parentContainer = selectedElement.closest('.success__stry__item');

      const selectedValueElement = document.createElement("div");
      selectedValueElement.style.textAlign = "center";
      selectedValueElement.style.fontSize = "18px";
      selectedValueElement.style.fontWeight = "bold";
      selectedValueElement.textContent = `${selectedText}`;

      parentContainer.appendChild(selectedValueElement);
      selectedElement.style.display = 'block'; 
      selectedValues[selectedElement.getAttribute("id")] = {
        value: selectedValue,
        text: selectedText
      };

      checkFilledCards();
    }
  });

  function resetDropdowns(editButton) {
    const parentContainer = editButton.closest('.success__stry__item');
    const brandSelect = parentContainer.querySelector('.brandselect');
    const modelSelect = parentContainer.querySelector('.modelselect');

    const selectedValuesElements = parentContainer.querySelectorAll('.selected-value');
    selectedValuesElements.forEach(valueElement => {
      valueElement.remove();
    });

    brandSelect.style.display = 'inline'; 
    modelSelect.style.display = 'inline'; 

    // Set the selected values back to the dropdowns
    brandSelect.value = selectedValues[brandSelect.id] ? selectedValues[brandSelect.id].value : '';
    modelSelect.value = selectedValues[modelSelect.id] ? selectedValues[modelSelect.id].value : '';

    checkFilledCards(); // Check again after resetting dropdowns
  }

  function checkFilledCards() {
    const modelSelect_1 = document.getElementById('model_1');
    if (selectedValues['model_1'] && selectedValues['model_1'].value !== '') {
      compareButton.removeAttribute('disabled');
    } else {
      compareButton.setAttribute('disabled', 'disabled');
    }
  }

  form.addEventListener("click", function (event) {
    const clickedElement = event.target;
    // if (clickedElement.classList.contains('edit_btn')) {
    //   resetDropdowns(clickedElement);
    // }
  });

  // compareButton.addEventListener("click", function () {
  //   const modalElement = document.getElementById('select_trac_modal');
  //   const modal = new bootstrap.Modal(modalElement);
  //   modal.show();
  // });

  // Fetch options function remains the same
  function fetchOptions(fieldName, selectElement) {
  }
  function extractSelectedBrandId() {
  }

  function get() {
    // Implementation remains the same
  }
});
 </script> -->

<script>
  document.addEventListener("DOMContentLoaded", function () {
  const form = document.getElementById("an");
  let selectedValues = {};
  const compareButton = document.getElementById('compareButton');
  compareButton.setAttribute('disabled', 'disabled');

  form.addEventListener("change", function (event) {
    const selectedElement = event.target;
    if (selectedElement.tagName === "SELECT") {
      const selectedValue = selectedElement.value;
      const selectedText = selectedElement.options[selectedElement.selectedIndex].text;
      const parentContainer = selectedElement.closest('.success__stry__item');

      // Remove any existing selected-value div before adding a new one
      let existingValueElement = parentContainer.querySelector('.selected-value');
      if (existingValueElement) {
        existingValueElement.remove();
      }
      const selectedValueElement = document.createElement("div");
      selectedValueElement.classList.add('selected-value');
      selectedValueElement.style.textAlign = "center";
      selectedValueElement.style.fontSize = "18px";
      selectedValueElement.style.fontWeight = "bold";
      selectedValueElement.textContent = `${selectedText}`;
     
      parentContainer.appendChild(selectedValueElement);
      selectedElement.style.display = 'block';  
      selectedValues[selectedElement.getAttribute("id")] = {
        value: selectedValue,
        text: selectedText
      };

      checkFilledCards();
    }
  });

  function resetDropdowns(editButton) {
    const parentContainer = editButton.closest('.success__stry__item');
    const brandSelect = parentContainer.querySelector('.brandselect');
    const modelSelect = parentContainer.querySelector('.modelselect');

    
    const selectedValuesElements = parentContainer.querySelectorAll('.selected-value');
    selectedValuesElements.forEach(valueElement => {
      valueElement.remove();
    });

    brandSelect.style.display = 'inline'; 
    modelSelect.style.display = 'inline'; 

    brandSelect.value = selectedValues[brandSelect.id] ? selectedValues[brandSelect.id].value : '';
    modelSelect.value = selectedValues[modelSelect.id] ? selectedValues[modelSelect.id].value : '';

    checkFilledCards(); // Check again after resetting dropdowns
  }

  function checkFilledCards() {
    let selectedBrands = 0;
    let selectedModels = 0;

    // Count the selected brands and models
    for (const key in selectedValues) {
      if (key.startsWith('brand') && selectedValues[key].value !== '') {
        selectedBrands++;
      }
      if (key.startsWith('model') && selectedValues[key].value !== '') {
        selectedModels++;
      }
    }

    // Enable compare button if at least 2 brands and 2 models are selected
    if (selectedBrands >= 2 && selectedModels >= 2) {
      compareButton.removeAttribute('disabled');
    } else {
      compareButton.setAttribute('disabled', 'disabled');
    }
  }

  // Event listener for the edit button to reset dropdowns
  form.addEventListener("click", function (event) {
    const clickedElement = event.target;
    if (clickedElement.classList.contains('edit_btn')) {
      resetDropdowns(clickedElement);
    }
  });
});

</script>


 </script>

  <script>
    // function showEditIcon() {
    //   var selectBox = document.getElementById("brand");
    //   var editIcon = document.getElementById("edit_");
    //   // Show the edit icon if a option is selected
    //   editIcon.style.display = selectBox.value ? "inline-block" : "none";
    // }
    // function showEditIcon2() {
    //   var selectBox = document.getElementById("brand_1");
    //   var editIcon = document.getElementById("edit_1");
    //   editIcon.style.display = selectBox.value ? "inline-block" : "none";
    //    var option = document.getElementById("model_1");
    //    option.style.display = selectBox.value ? "inline-block" : "none";
    // }
    // function showEditIcon3() {
    //   var selectBox = document.getElementById("brand_2");
    //   var editIcon = document.getElementById("edit_2");
    //   editIcon.style.display = selectBox.value ? "inline-block" : "none";
    //   var option = document.getElementById("model_2");
    //   option.style.display = selectBox.value ? "inline-block" : "none";
    // }
    // function showEditIcon4() {
    //   var selectBox = document.getElementById("brand_3");
    //   var editIcon = document.getElementById("edit_3");
    //   editIcon.style.display = selectBox.value ? "inline-block" : "none";
    //   var option = document.getElementById("model_3");
    //   option.style.display = selectBox.value ? "inline-block" : "none";
    // }
    


    function valueblanck(){
      $('#brand').val('');
      $('#model').val('');
    }
    function valueblanck1(){
      $('#brand_1').val('');
      $('#model_1').val('');
    }
    function valueblanck2(){
      $('#brand_2').val('');
      $('#model_2').val('');
    }
    function valueblanck3(){
      $('#brand_3').val('');
      $('#model_3').val('');
    }
  </script>






<script>
   function showall() {
    var section1 = document.getElementById('section-1');
    var section2 = document.getElementById('section-2');

    if (section1.style.display == 'block') {
      section1.style.display = 'none';
      section2.style.display = 'block';
    } else {
      section1.style.display = 'block';
      section2.style.display = 'none';
    }
  }

</script>
<script>
 function googleTranslateElementInit() {
 new google.translate.TranslateElement({
 pageLanguage: 'en',
 autoDisplay: 'true',
 includedLanguages:'en,hi,bn,mr,pa,or,te,ta,ml', // <- remove this line to show all language
 layout: google.translate.TranslateElement.InlineLayout.HORIZONTAL
 }, 'google_translate_element');
 }
</script>
</body>
</html>