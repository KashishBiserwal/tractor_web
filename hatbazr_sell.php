<!DOCTYPE html>
<html lang="en">

<head>
   <?php
   include 'includes/headertag.php';
   ?>
</head>
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-6Z38E658LD"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-6Z38E658LD');
</script>
<body>
   <?php
   include 'includes/header.php';
   ?>

<section class=" mt-5 pt-5">
    <div class="container pt-3">
        <div class="py-1">
            <span class="text-white ">
                <a href="index.php" class="text-decoration-none header-link px-1">Home <i class="fa-solid fa-chevron-right px-1"></i></a>
                    <span class=""><span class="text-dark header-link  px-1">HaatBazar <i class="fa-solid fa-chevron-right px-1"></i> </span></span>
                    <span class="text-dark">Sell</span>
            </span> 
        </div>
    </div>
</section>
<!-- <section>
    <div class="d-sm-flex align-items-center justify-content-between w-100">
        <div class="col-md-2 mx-auto mb-4 mb-sm-0 text-center headline">
            <span class="text-secondary text-uppercase"></span>
            <h1 class=" text-danger fw-bold ps-5 ms-5">HaatBazar</h1>
            <h3 class="text-success ps-4">Apka Apna Bazar</h3>
            <h4 class="mb-4"></h4>
        </div>
            
        <div class="col-md-10 h-100 clipped" style="min-height: 350px; background-image: url(assets/images/hatbazar_sell.avif); background-position: center; background-size: cover;">

        </div>
    </div>
</section> -->
<section>
   <div class="container">
      <div class="formcard">
        <form action="" id="hatbazr_sell_form">
            <div class="container-fluid px-1 px-md-4 py-3 mx-auto">
               <div class="row d-flex justify-content-center">
                  <div class="col-12 col-md-11 col-lg-10 col-xl-9">
                     <div class=" card card0 border-0 shadow">
                     <div class="row">
                        <div class="col-12">
                           <div class="card00 m-2 border-0">
                           <div class="row text-center justify-content-center px-3">
                              <p class="prev text-danger"><span class="fa fa-long-arrow-left float-start"> Go Back</span></p id="back">
                              <h3 class="mt-4 text-danger">Sell Your Harvest</h3>
                           </div>
                           <div class="d-flex flex-md-row px-3 mt-4 flex-column-reverse">
                              <div class="col-md-6">
                                 <div class="card1">
                                 <ul id="progressbar" class="text-center ms-5">
                                    <li class="active step0"></li>
                                    <li class="step0"></li>
                                    <li class="step0"></li>
                                    <li class="step0"></li>
                                 </ul>
                                 <h5 class="mb-5 fw-bold">Harvest Information</h5>
                                 <h5 class="mb-5 fw-bold">Upload Image</h5>
                                 <h5 class="mb-5 fw-bold">Personal Information</h5>
                                 <h5 class="mt-3 pt-5 fw-bold">Success</h5>
                                 </div>
                              </div>
                              <div class="col-md-6">
                                 <div class="card2 first-screen show ml-2">
                                  <p>Fill Your Harvest Details Below:</p>
                                 <div class="row px-3 mt-4">
                                    <div class="col-12 ">
                                      <div class="form-group w-100">
                                          <select class="form-select py-2 mb-3" aria-label=".form-select-lg example" id="select_category">
                                             <option selected>Select Category</option>
                                             <option value="1">Vegetable</option>
                                             <option value="2">Fruits</option>
                                             <option value="3">Grain</option>
                                             <option value="3">Pulses</option>
                                          </select>
                                      </div>
                                    </div>
                                    <div class="col-12 ">
                                      <div class="form-group w-100">
                                          <select class="form-select py-2 " aria-label=".form-select-lg example" id="select_sub_categary">
                                             <option selected>Select Sub-Category</option>
                                             <option value="1">Potato</option>
                                             <option value="2">Papaya</option>
                                             <option value="3">Rice</option>
                                             <option value="3">Wheet</option>
                                          </select>
                                      </div>
                                    </div>
                                    <div class="col-12 ">
                                       <div class="input-group">
                                          <input type="number"  id="firstNumber" class="form-control text-black" placeholder="Quantity" aria-label="Text input with dropdown button">
                                          <select type="button" class="btn border border-secondary-2 h-25  dropdown-toggle" data-bs-toggle="dropdown">
                                             <ul class="dropdown-menu">
                                             <option class="dropdown-item" href="#">As per</option>
                                             <option class="dropdown-item" href="#">gram</option>
                                             <option class="dropdown-item" href="#">Kg</option>
                                             <option class="dropdown-item" href="#">Quintal</option>
                                             <option class="dropdown-item" href="#">Ton</option>
                                             <option class="dropdown-item" href="#">Pack</option>
                                             <option class="dropdown-item" href="#">Unit</option>
                                             </ul>
                                          </select>
                                       </div>
                                    </div>
                                    <div class="col-12 col-sm-6 col-md-6 col-lg-6 ">
                                       <div class="form-group w-100 mt-2">
                                          <input type="text" class="py-2" placeholder=" " id="secondNumber"  onchange="multiplyBy()" Value="">
                                          <label for="quantity" class="text-dark"> Price </label>
                                       </div>
                                    </div>
                                    <div class="col-12 col-sm-6 col-md-6 col-lg-6 mt-2 pt-1">
                                       <!-- <input type="button" onClick="multiplyBy()" Value="Multiply" /> -->
                                       <p >Total Price:  <span id = "result"class="text-danger fw-bold"> </span>/-</p>
                                         
                                    </div>
                                    <div class="col-12 ">
                                       <div class="form-group w-100">
                                          <input type="text" class="py-4" placeholder=" " id="about_your_harvest">
                                          <label for="quantity" class="text-dark">About Your  Harvest</label>
                                       </div>
                                    </div>
                                    <div class="next-button text-center ms-3" id="next_btn"> <span class="fa fa-arrow-right "></span> </div>
                                 </div>
                                 
                                 </div>
                                 <div class="card2 ml-2">
                                    <div class="row pe-3">
                                    <p class="pb-2 w-100">Upload File</p>
                                       <div class="col-12 ">
                                          <div class="form-group w-100">
                                             <input type="file" class="py-3" placeholder=" " name="file[]" id="quantity" multiple>
                                             <label for="quantity" class="text-dark">upload images</label>
                                          </div>
                                       </div>
                                       <div class="next-button text-center ms-3"> <span class="fa fa-arrow-right"></span> </div>
                                    </div>
                                   
                                 </div>
                                 <div class="card2 ml-2">
                                    <div class="row px-3">
                                       <p class="pb-2 w-100">Fill Your correct info</p>
                                       <div class="col-12">
                                          <div class="form-group w-100">
                                             <input type="Text" class="py-2" placeholder=" " name="name" id="name" >
                                             <label for="name" class="text-dark">Name</label>
                                          </div>
                                       </div>
                                       <div class="col-12">
                                          <div class="form-group w-100">
                                             <input type="Text" class="py-2" placeholder=" " name="name" id="Phone_no" >
                                             <label for="name" class="text-dark">Phone Number</label>
                                          </div>
                                       </div>
                                       <div class="col-12 col-sm-6 col-md-6 col-lg-6 ">
                                          <div class="form-group w-100">
                                             <select class="form-select py-2 " aria-label=".form-select-lg example">
                                                <option selected class="fs-6">Select State</option>
                                                <option value="kg">Chattisgarh</option>
                                                <option value="quintal">Other</option>
                                             </select>
                                          </div>
                                       </div>
                                       <div class="col-12 col-sm-6 col-md-6 col-lg-6 ">
                                          <div class="form-group w-100">
                                             <select class="form-select py-2 " aria-label=".form-select-lg example">
                                                <option selected class="fs-6">Select District</option>
                                                <option value="kg">Raigarh</option>
                                                <option value="quintal">Bilaspur</option>
                                                <option value="quintal">Ambikapur</option>
                                             </select>
                                          </div>
                                       </div>
                                       <div class="col-12  col-sm-6 col-md-6 col-lg-6">
                                          <div class="form-group w-100">
                                             <input type="Text" class="py-2" placeholder=" " name="tehsil" id="tehsil" >
                                             <label for="tehsil" class="text-dark">Tehsil</label>
                                          </div>
                                       </div>
                                       <div class="col-12 col-sm-6 col-md-6 col-lg-6">
                                          <div class="form-group w-100">
                                             <input type="Text" class="py-2" placeholder=" " name="pincode" id="pincode" >
                                             <label for="pincode" class="text-dark">Pincode</label>
                                          </div>
                                       </div>
                                       <div class="next-button text-center text-success ms-5 px-3 w-75">
                                          <a href="#" class="text-decoration-none text-white" id="submit">Submit</a>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="card2 ml-2">
                                    <div class="row px-3 mt-2 mb-4 text-center">
                                       <h2 class="col-12 text-danger"><strong>Success !</strong></h2>
                                       <div class="col-12 text-center"><img class="tick w-100 h-75" style="border-radius: 29%;" src="assets/images/237821848127202.gif"></div>
                                       <h6 class="col-12 "><i>Enjoy Your Day..!</i></h6>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           </div>
                           <div class="col-12">
                              <div class="row px-3 float-end">
                                 <!-- <h2 class="text-muted get-bonus mt-4 mb-5">Get Bonus <span class="text-danger">666</span> cookies</h2>  -->
                                 
                                 <img class="pic  mr-3 " src="assets/images/vege.png">
                              </div>
                           </div>
                        </div>
                     </div>
                     </div>
                  </div>
               </div>
            </div>
        </form>
      </div>
   </div>
</section>







<?php
    include 'includes/footer.php';
    include 'includes/footertag.php';

    ?>
    </html>
    <script>
      function multiplyBy()
{
        num1 = document.getElementById("firstNumber").value;
        num2 = document.getElementById("secondNumber").value;
        document.getElementById("result").innerHTML = num1 * num2;
}

 </script>
 <!-- <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script> -->
 <script>
//    $(document).ready(function(){
//       $('#hatbazr_sell_form').validate({
//        rules: {
//          name:{
//                required:true,
//             },
//             Phone_no:{
//                required:true,
//             },
//             tehsil:{
//                required:true,
//             },
//             pincode:{
//                required:true,
//             }
//          },
//          messages:{
//               name:"field is requred",
//               phone_no:"field is requred",
//               tehsil:"field is requred",
//               pincode:"field is requred"
//          },
//   submitHandler: function(form) {
//     form.submit();
//     }
//    });
//  });
$(document).ready(function(){
    $('#hatbazr_sell_form').validate({
      rules:{
         select_category:{
            required:true,
      },
      select_sub_categary:{
         required:true,
      },
      firstNumbe:{
         required:true,
      },
      secondNumber:{
         required:true,
      },
      about_your_harvest:{
         required:true,
      }
   },
   messages:{
      select_category:"Field is required",
      select_sub_categary:"Field is required",
      firstNumbe:"Field is required",
      secondNumber:"Field is required",
      about_your_harvest:"Field is required"
   },
   submiHandler: function(form){
      next_btn();
   }
    });
});


 </script>