<?php
    include 'includes/headertag.php';
    include 'includes/headertagadmin.php';
    include 'includes/footertag.php';
?> 
  <script> var APIBaseURL = "<?php echo $APIBaseURL; ?>";</script>
  <script> var baseUrl = "<?php echo $baseUrl; ?>";</script>
    <script src="<?php $baseUrl; ?>model/agricultureAdmin.js"></script>
    <script src="<?php $baseUrl; ?>model/State_dist_tehsil.js"></script>
    <script src="<?php $baseUrl; ?>model/sdt.js"></script>
    <script src="<?php $baseUrl; ?>model/state2_dist2.js"></script>
<style>
     html * {
        box-sizing: border-box;
        }
        .mul_stp_frm{
            overflow-x: hidden;
        }

        
        p {
        margin: 0;
        }

         .upload__inputfile {
  width: .1px;
  height: .1px;
  opacity: 0;
  overflow: hidden;
  position: absolute;
  z-index: -1;
  }

  .upload__btn {
  display: inline-block;
  font-weight: 600;
  color: #fff;
  text-align: center;
  min-width: 150px;
  padding: 5px;
  transition: all .3s ease;
  cursor: pointer;
  border: 2px solid;
  background-color:  #198754;
  border-color:  #198754;
  border-radius: 10px;
  line-height: 26px;
  font-size: 14px;
  }

  .upload__btn:hover {
  background-color: unset;
  color:  #198754;
  transition: all .3s ease;
  }

  .upload__btn-box {
  margin-bottom: 10px;
  margin-top:-25px;
  }

  .upload__img-wrap {
    display: flex;
    flex-wrap: wrap;
  }

  .upload__img-box {
  flex: 0 0 calc(33.333% - 20px); 
  margin: 0 10px 20px; 
  position: relative;
  display: flex;
    flex-wrap: wrap;
  }

  .upload__img-close,.upload__img-close_button {
  width: 24px;
  height: 24px;
  border-radius: 50%;
  background-color: rgba(0, 0, 0, 0.5);
  position: absolute;
  top: 10px;
  right: 60px;
  text-align: center;
  line-height: 24px;
  z-index: 1;
  cursor: pointer;
  }

  .upload__img-close:after,.upload__img-close_button:after {
  content: '\2716';
  font-size: 14px;
  color: white;
  }
  

  .img-bg {
  background-repeat: no-repeat;
  background-position: center;
  background-size: contain;
  position: relative;
  width: 160px;
  height: 125px;
  }
        body {
            font-family: "Open Sans", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen-Sans, Ubuntu, Cantarell, "Helvetica Neue", Helvetica, Arial, sans-serif; 
        }
</style>
<body class="loaded"> 
    <div class="main-wrapper">
    <div class="app" id="app">
    <?php
        include 'includes/left_nav.php';
        include 'includes/header_admin.php';
    ?>
    <section style="padding: 0 15px 0 60px;">
        <div class="">
            <div class="">
                <div class="card-body d-flex align-items-center justify-content-between page_title">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb mb-0">
                            <li class="breadcrumb-item">
                                <span>Agriculture College</span>
                            </li>
                        </ol>
                    </nav>
                    <button type="button" id="add_trac" class="btn add_btn btn-success float-right add_trac p-1" data-bs-toggle="modal"  data-bs-target="#staticBackdrop" >
                        <i class="fa fa-plus" aria-hidden="true"></i> Add Agriculture College
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                        <div class="modal-dialog modal-xl modal-dialog-centered">
                            <div class="modal-content modal_box">
                                <div class="modal-header modal_head">
                                    <h5 class="modal-title text-white fw-bold" id="staticBackdropLabel">Add Agriculture College</h5>
                                    <button type="button" class="btn-close btn-success" data-bs-dismiss="modal" aria-label="Close"><img src="assets/images/close.png"></button>
                                </div>
                                <div class="modal-body bg-white">
                                    <div class="row justify-content-center">
                                        <div class="col-lg-10">
                                            <form id="Agriculture_college_form" enctype="multipart/form-data" onsubmit="return false">
                                                <div class="row justify-content-center pt-3">
                                                    <h5 class="fw-bold">Enter Agriculture College Information</h5>
                                                    <!-- <div class="col-12 col-lg-6 col-md-6 col-sm-6 mt-3" hidden >
                                                        <div class="form-outline ">
                                                            <label for="name" class="form-label text-dark">id</label>
                                                            <input type="text" class="form-control" placeholder="" value="" id="EditIdmain_" name="">
                                                        </div>
                                                    </div> -->
                                                    <div class="col-12 col-sm-6 col-lg-6 col-md-6  mt-4">
                                                        <div class="form-outline">
                                                            <label for="name" class="form-label text-dark">College Name</label>
                                                            <input type="text" class="form-control" id="cname" name="cname" placeholder="Enter Your College Name">
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-sm-6 col-lg-6 col-md-6 mt-4">
                                                        <div class="form-outline ">
                                                            <label for="name" class="form-label text-dark">Mobile</label>
                                                            <input type="text" class="form-control"  id="Mobile" name="Mobile" placeholder="Enter Your Number">
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-sm-6 col-lg-6 col-md-6 mt-4">
                                                        <div class="form-outline ">
                                                            <label class="form-label text-dark">State</label>
                                                            <select class="form-select form-control state-dropdown" aria-label=".form-select-lg example" id="state" name="state">
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-sm-6 col-lg-6 col-md-6 mt-4">
                                                        <div class="form-outline ">
                                                            <label class="form-label text-dark">District</label>
                                                            <select class="form-select form-control district-dropdown" aria-label=".form-select-lg example" id="district" name="district">
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-sm-6 col-lg-6 col-md-6 mt-4">
                                                        <div class="form-outline ">
                                                            <label class="form-label text-dark">Tehsil</label>
                                                            <select class="form-select form-control tehsil-dropdown" aria-label=".form-select-lg example" id="tehsil" name="tehsil">
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-sm-6 col-lg-6 col-md-6 mt-2 mb-0 m-0 p-1">
                                                        <div class="upload__box">
                                                            <div class="upload__btn-box">
                                                                <label>
                                                                    <p class="upload__btn w-100 m-5">Upload images</p>
                                                                    <input type="file" multiple="" data-max_length="20" class="upload__inputfile" id="f_file" name="_file">
                                                                </label>
                                                            </div>
                                                            <div class="col-sm-12">
                                                                <div id="selectedImagesContainer" class="upload__img-wrap" style="display:flex; flex-wrap:wrap;"></div>
                                                            </div>
                                                        </div>
                                                        <!-- <input type="file" id="_file" multiple="" class="w-100 pb-0 mb-auto" name="_file" required> -->
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer mt-3">
                                <button type="button" class="btn btn-secondary btn_all" data-bs-dismiss="modal">Close</button>
                                <button type="button" id="submitbtn" class="btn btn-success btn_all">Submit</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="">
                <!-- Filter Card -->
                <div class="filter-card mb-2">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12 col-sm-12 col-md-3 col-lg-3">
                                <div class="form-outline">
                                    <label class="form-label"> College Name</label>
                                    <input type="text" class="form-control" id="cpllege_name" name="cpllege_name" placeholder="Enter Your College Name">
                                </div>
                            </div>
                            <div class="col-12 col-sm-12 col-md-3 col-lg-3">
                                <div class="form-outline">
                                    <label class="form-label">State</label>
                                    <select class="form-select py-2 state_select" aria-label="Default select example"  id="state2">
                                    </select>
                                </div>
                            </div>
                            <div class="col-12 col-sm-12 col-md-3 col-lg-3">
                                <div class="form-outline">
                                    <label class="form-label">District</label>
                                    <select class="form-select py-2 district_select" aria-label="Default select example" id="district2">
                                    </select>
                                </div>
                            </div>
                            <div class="col-12 col-sm-12 col-md-3 col-lg-3">
                                <div class="text-center">
                                    <button type="button" class="btn-success btn px-3 pt-2" id="Search" onclick="searchdata()">Search</button>
                                    <button type="button" class="btn-success btn mx-2 px-3 pt-2" id="Reset" onclick="resetform()">Reset</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Table Card -->
                <div class=" mb-5">
                    <div class="table-responsive shadow bg-white mt-3">
                        <table id="example" class="table table-striped  table-hover table-bordered dataTable no-footer" width="100%; margin-bottom: 15px;">
                            <thead class="">
                                <tr>
                                    <th class="d-none d-md-table-cell text-white">S.No.</th>
                                    <th class="d-none d-md-table-cell text-white">Date/Time</th>
                                    <th class="d-none d-md-table-cell text-white">College Name</th>
                                    <th class="d-none d-md-table-cell text-white">Mobile Number</th>
                                    <th class="d-none d-md-table-cell text-white">State</th>
                                    <th class="d-none d-md-table-cell text-white">District</th>
                                    <th class="d-none d-md-table-cell text-white">Action</th>
                                </tr>
                            </thead>
                            <tbody id="data-table">
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- view -->
            <div class="modal fade" id="agr_clg_view" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg modal-dialog-centered">
                    <div class="modal-content modal_box">
                        <div class="modal-header modal_head">
                            <h5 class="modal-title text-white fw-bold" id="staticBackdropLabel">Agriculture College Information </h5>
                            <button type="button" class="btn-close btn-success" data-bs-dismiss="modal" aria-label="Close"><img src="assets/images/close.png"></button>
                        </div>
                        <div class="modal-body bg-light">
                            <div class="row ">
                                <div class="col-12">
                                    <table class="table table-striped">
                                        <tbody>
                                            <tr>
                                                <td>Agriculture College:-</td>
                                                <td id="agr_clg"></td>
                                                <td>Mobile Number-</td>
                                                <td id="mob_nub"></td>
                                            </tr>
                                            <tr>
                                            <td>State-</td>
                                                <td id="state_2"></td>
                                                <td>District-</td>
                                                <td id="district_2"></td>
                                            </tr>
                                            <tr>
                                                <td>Tehsil-</td>
                                                <td id="tehsil2"></td>
                                                <td>Date-</td>
                                                <td id="date_1"></td>
                                            </tr>
                                            <tr>
                                                <td>Upload images-</td>
                                                <td colspan="3">
                                                    <div class="col-12">
                                                        <div id="selectedImagesContainer1" class="upload__img-wrap row"></div>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>  
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary px-3" data-bs-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    </div>
    </div>

    <div class="modal fade" id="Edit_Agr_college" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                        <div class="modal-dialog modal-xl modal-dialog-centered">
                            <div class="modal-content modal_box">
                                <div class="modal-header modal_head">
                                    <h5 class="modal-title text-white fw-bold" id="staticBackdropLabel">Add Agriculture College</h5>
                                    <button type="button" class="btn-close btn-success" data-bs-dismiss="modal" aria-label="Close"><img src="assets/images/close.png"></button>
                                </div>
                                <div class="modal-body bg-white">
                                    <div class="row justify-content-center">
                                        <div class="col-lg-10">
                                            <form id="Agriculture_college_form" enctype="multipart/form-data" onsubmit="return false">
                                                <div class="row justify-content-center pt-3">
                                                    <h5 class="fw-bold">Enter Agriculture College Information</h5>
                                                    <!-- <div class="col-12 col-lg-6 col-md-6 col-sm-6 mt-3" hidden >
                                                        <div class="form-outline ">
                                                            <label for="name" class="form-label text-dark">id</label>
                                                            <input type="text" class="form-control" placeholder="" value="" id="EditIdmain_" name="">
                                                        </div>
                                                    </div> -->
                                                    <div class="col-12 col-lg-6 col-sm-5 col-md-6 my-1" hidden>
                                                        <div class="form-outline ">
                                                            <label for="name" class="form-label text-dark">College</label>
                                                            <input type="text" class="form-control" placeholder="" id="userId" name="name">
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-sm-6 col-lg-6 col-md-6  mt-4">
                                                        <div class="form-outline">
                                                            <label for="name" class="form-label text-dark">College Name</label>
                                                            <input type="text" class="form-control" id="cname_edit" name="cname" placeholder="Enter Your College Name">
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-sm-6 col-lg-6 col-md-6 mt-4">
                                                        <div class="form-outline ">
                                                            <label for="name" class="form-label text-dark">Mobile</label>
                                                            <input type="text" class="form-control"  id="Mobile_edit" name="Mobile" placeholder="Enter Your Number">
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-sm-6 col-lg-6 col-md-6 mt-4">
                                                        <div class="form-outline ">
                                                            <label class="form-label text-dark">State</label>
                                                            <select class="form-select form-control state-dropdown1" aria-label=".form-select-lg example" id="state_" name="state">
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-sm-6 col-lg-6 col-md-6 mt-4">
                                                        <div class="form-outline ">
                                                            <label class="form-label text-dark">District</label>
                                                            <select class="form-select form-control district-dropdown1" aria-label=".form-select-lg example" id="district_" name="district">
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-sm-6 col-lg-6 col-md-6 mt-4">
                                                        <div class="form-outline ">
                                                            <label class="form-label text-dark">Tehsil</label>
                                                            <select class="form-select form-control tehsil-dropdown1" aria-label=".form-select-lg example" id="tehsil_" name="tehsil">
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-sm-6 col-lg-6 col-md-6 mt-2 mb-0 m-0 p-1">
                                                        <div class="upload__box">
                                                            <div class="upload__btn-box">
                                                                <label>
                                                                    <p class="upload__btn w-100 m-5">Upload images</p>
                                                                    <input type="file"  class="upload__inputfile" id="f_file_edit" name="_file">
                                                                </label>
                                                            </div>
                                                            <div class="col-sm-12">
                                                                <div id="selectedImagesContainer2" class="upload__img-wrap" style="display:flex; flex-wrap:wrap;"></div>
                                                            </div>
                                                        </div>
                                                        <!-- <input type="file" id="_file" multiple="" class="w-100 pb-0 mb-auto" name="_file" required> -->
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer mt-3">
                                <button type="button" class="btn btn-secondary btn_all" data-bs-dismiss="modal">Close</button>
                                <button type="button" id="submitbtn_edit" class="btn btn-success btn_all">Submit</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
</body>
