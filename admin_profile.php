<!DOCTYPE html>
<html lang="en">

<head>
   <?php
   include 'includes/headertag.php';
   ?>
</head>
<div class="container">
    <div class="container my-5 ">
        <div class="row shadow prof_head py-2">
            <div class="col-12 col-md-3 col-sm-3 col-lg-3 ">
                <div class="avatar-upload ps-4">
                    <div class="avatar-edit">
                        <input type='file' id="imageUpload" accept=".png, .jpg, .jpeg" />
                        <label for="imageUpload"></label>
                    </div>
                    <div class="avatar-preview">
                        <div id="imagePreview" style="background-image: url('http://i.pravatar.cc/500?img=7');">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-9 col-sm-9 col-lg-9 text-align-center">
                <div class="profile_con mt-5">
                    <h4 class="fw-bold text-white">@User Name</h4>
                    <p class="text-white">Admin Name</p>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-4 col-md-4 col-lg-4 my-3">
                <div class="input-wrapper">
                    <label class="label_wrap text-dark fw-bold" for="first">@User Name</label>
                    <input class="input_wrap w-100" type="text">
                </div>
            </div>
            <div class="col-12 col-sm-4 col-md-4 col-lg-4 my-3">
                <div class="input-wrapper">
                    <label class="label_wrap text-dark fw-bold" for="first">First Name</label>
                    <input class="input_wrap w-100" type="text">
                </div>
            </div>
            <div class="col-12 col-sm-4 col-md-4 col-lg-4 my-3 ">
                <div class="input-wrapper w-100">
                    <label class="label_wrap text-dark fw-bold" for="first">Last Name</label>
                    <input class="input_wrap w-100" type="text">
                </div>
            </div>
            <div class="col-12 col-sm-8 col-md-8 col-lg-8 my-3">
                <div class="input-wrapper">
                    <label class="label_wrap text-dark fw-bold" for="first">Address</label>
                    <input class="input_wrap w-100 py-5" type="text">
                </div>
            </div>
            <div class="col-12 col-sm-4 col-md-4 col-lg-4 my-3 ">
                <p class="text-dark fw-bold ps-3">Select Gender</p>
                <div class="form-check my-3 ps-5">
                    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                    <label class="form-check-label text-dark ps-2" for="exampleRadios1">
                    Male
                    </label>
                </div>
                <div class="form-check mt-3 ps-5">
                    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                    <label class="form-check-label  text-dark ps-2" for="exampleRadios2">
                        Female
                    </label>
                </div>
            </div>
            <div class="col-12 col-sm-4 col-md-4 col-lg-4 my-3">
                <div class="input-wrapper">
                    <label class="label_wrap text-dark fw-bold" for="first">Email Id</label>
                    <input class="input_wrap w-100" type="text">
                </div>
            </div>
            <div class="col-12 col-sm-4 col-md-4 col-lg-4 my-3">
                <div class="input-wrapper">
                    <label class="label_wrap text-dark fw-bold" for="first">Mobile Number</label>
                    <input class="input_wrap w-100" type="text">
                </div>
            </div>
            <div class="col-12 col-sm-4 col-md-4 col-lg-4 my-3">
                <div class="input-wrapper">
                    <label class="label_wrap text-dark fw-bold" for="first">DOB</label>
                    <input class="input_wrap w-100" type="text">
                </div>
            </div>
            
        </div>
    </div>
    <div class="my4">
        <div class="col-12  text-center">
            <button type="button" class="btn-primary btn btn_search" id="Search">Update</button>
            <button type="button" class="btn-secondary btn mx-2 btn_search" id="Reset">Cancel</button>
        </div>
    </div>
</div>

   

<?php
include 'includes/footertag.php';
?>