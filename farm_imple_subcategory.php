<?php
include 'includes/headertag.php';
   include 'includes/headertagadmin.php';
   include 'includes/footertag.php';
   
   ?> 
<script> var APIBaseURL = "<?php echo $APIBaseURL; ?>";</script>
<script> var baseUrl = "<?php echo $baseUrl; ?>";</script>
    <script src="<?php $baseUrl; ?>model/farm_imple_subcategory.js"></script>
    <style>
        .btn_round {
  width: 35px;
  height: 35px;
  display: inline-block;
  border-radius: 50%;
  text-align: center;
  line-height: 35px;
  margin-left: 10px;
  border: 1px solid #ccc;
  cursor: pointer;
}
.btn_round:hover {
  color: #fff;
  background: rgb(74 166 90);
  border: 1px solid #6b4acc;
}

.btn_content_outer {
  display: inline-block;
  width: 85%;
}
.close_c_btn {
  width: 30px;
  height: 30px;
  position: absolute;
  right: 10px;
  top: 0px;
  line-height: 30px;
  border-radius: 50%;
  background: #ededed;
  border: 1px solid #ccc;
  color: #ff5c5c;
  text-align: center;
  cursor: pointer;
}

.add_icon {
  padding: 10px;
  border: 1px dashed #aaa;
  display: inline-block;
  border-radius: 50%;
  margin-right: 10px;
}
.add_group_btn {
  display: flex;
}
.add_group_btn i {
  font-size: 32px;
  display: inline-block;
  margin-right: 10px;
}

.add_group_btn span {
  margin-top: 8px;
}
.add_group_btn,
.clone_sub_task {
  cursor: pointer;
}

.sub_task_append_area .custom_square {
  cursor: move;
}

.del_btn_d {
  display: inline-block;
  position: absolute;
  right: 20px;
  border: 2px solid #ccc;
  border-radius: 50%;
  width: 40px;
  height: 40px;
  line-height: 40px;
  text-align: center;
  font-size: 18px;
}
    </style>
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
                <span>Farm Implement Sub-Category</span>
              </li>
            </ol>
          </nav>
          <button type="button" id="add_trac" class="btn add_btn btn-success float-right btn_all" data-bs-toggle="modal"  data-bs-target="#staticBackdrop1">
              <i class="fa fa-plus" aria-hidden="true"></i> Add Sub-Category
          </button>
  
                <!-- modal -->
                <div class="modal fade" id="staticBackdrop1" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                  <div class="modal-dialog modal-xl modal-dialog-centered">
                    <div class="modal-content modal_box">
                      <div class="modal-header modal_head">
                        <h5 class="modal-title text-white fw-bold" id="staticBackdropLabel">Add Subcategory</h5>
                        <button type="button" class="btn-close btn-success" data-bs-dismiss="modal" aria-label="Close"><img src="assets/images/close.png"></button>
                      </div>
                      <div class="modal-body bg-white">
                              <div class="row justify-content-center">
                                  <div class="col-12">
                                    <!-- <h5 class="text-center">Fill Details</h5> -->
                                    <form id="lookup_data_form" method="POST">
                                      <div class="row justify-content-center">
                                        <div class="col-12 col-sm-6 col-md-6 col-lg-6  mt-4" hidden>
                                          <div class="form-outline">
                                            <label for="lookup_data_value" class="form-label text-dark"> idUser</label>
                                              <input type="text" class="form-control" placeholder=" " value="" id="idUser"  for="idUser" name="">
                                          </div>
                                        </div>
                                        
                                        <!-- custom field -->
                                        <div class="col-md-12 form_sec_outer_task border">
                                            <div class="row">
                                                <div class="col-md-12 p-2 mb-3">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="row">
                                                                <div class="col-md-6 mt-2">
                                                                <h5 class="frm_section_n fw-bold">Add Custom Data</h5>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <label>Custom Data</label>
                                                </div>
                                                <div class="col-md-4">
                                                    <label> Implement Data </label>
                                                </div>
                                            </div>
                                            <div class="col-md-12 p-0">
                                                <div class="col-md-12 form_field_outer p-0" id="fields">
                                                  <div class="row form_field_outer_row">
                                                    <div class="form-group col-md-6">
                                                        <input type="text" class="form-control w_90" name="mobileb_no[]" id="mobileb_no_1" value="CUSTOM_1" readonly/>
                                                    </div>
                                                    <div class="form-group col-md-4">
                                                        <input type="text" class="form-control" name="no_type[]" id="no_type_1" placeholder="Enter Value"/>
                                                    </div>
                                                    <div class="form-group col-md-2 add_del_btn_outer">
                                                      <button class="btn_round remove_node_btn_frm_field" disabled>
                                                          <i class="fas fa-trash-alt"></i>
                                                      </button>
                                                    </div>
                                                  </div>
                                                </div>
                                                <div class="row ml-0 py-1">
                                                    <div class="py-1">
                                                        <button class="btn btn-outline-lite bg-light shadow float-end py-1 add_new_frm_field_btn"><i class="fas fa-plus add_icon"></i> Add New field row</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-6 col-md-6 col-lg-6  mt-4">
                                          <div class="form-outline">
                                              <label for="lookupSelectbox" class="form-label">Category</label>
                                                <select class="form-select form-control py-2" value="lookupSelectbox" for="lookupSelectbox" id="lookupSelectbox" aria-label="Default select example">
                                                  <option value="" id="lookupSelect">Select Category</option>
                                                </select>
                                          </div>
                                        </div>
                                        <div class="col-12 col-sm-6 col-md-6 col-lg-6  mt-4">
                                          <div class="form-outline">
                                            <label for="lookup_data_value" class="form-label text-dark"> Subcategory Name</label>
                                              <input type="text" class="form-control" placeholder=" " id="lookup_data_value"  for="lookup_data" name="lookup_datavalue">
                                          </div>
                                        </div>
                                        
                                        <div class="col-12 col-lg-6 col-md-6 col-sm-6 mt-3">
                                          <div class="upload__box m-5">
                                            <div class="upload__btn-box">
                                              <label>
                                                <p class="upload__btn">Upload image</p>
                                                <input type="file" class="upload__inputfile" id="image" name="image" accept="image/*">
                                              </label>  
                                            </div>
                                            <div id="selectedImagesContainer2" class="upload__img-wrap"></div>
                                          </div>
                                        </div>
                                      <div class="col-12 text-center">
                                      <button type="button" class="btn btn-success mt-3 w-25 mb-0 btn_all" id="lookup_data_submit">Submit</button>
                                      </div>
                                      
                                    </form>
                                  </div>
                              </div>
                          </div>
                        <!-- <div class="modal-footer">
                          <button type="button" class="btn btn-secondary px-3" data-bs-dismiss="modal">Close</button>
                        
                      </div> -->
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        
    <div class="">
      <!-- Filter Card -->
      <div class="filter-card">
        <div class="card-body">
            <form action="" id="myform" class="mb-0">
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-4 col-lg-4">
                        <div class="form-outline">
                            <label class="form-label">Search by Category</label>
                            <select class="form-select form-control py-2" id="lookup_type" name="name_1" value="" aria-label="Default select example">
                              <option value="" id="">Select Category</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-12 col-sm-12 col-md-4 col-lg-4">
                        <div class="form-outline">
                            <label class="form-label">Search by Sub category</label>
                            <select class="form-select form-control py-2" id="lookup_data" name="name_2" value="" aria-label="Default select example">
                              <option value="" id="">Select Sub Category</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-12 col-sm-12 col-md-4 col-lg-4">
                    <div class="text-center">
                      <button type="button" class="btn-success btn px-3 pt-2" id="Search" >Search</button>
                            <button type="button" class="btn-success btn mx-2 px-3 pt-2" id="Reset">Reset</button>
                      </div>
                    </div>
                    
                </div>
            </form>
        </div>
      </div>
      <!-- Table Card -->
      <div class=" mb-5  shadow bg-white mt-3 p-3">
      <div class="table-responsive">
            <table id="example" class="table table-striped  table-hover table-bordered  no-footer" width="100%;">
                 <thead>
                                        <tr>
                                            <th class="d-none d-md-table-cell text-white">ID</th>
                                            <th class="d-none d-md-table-cell text-white">Category Name </th>
                                            <th class="d-none d-md-table-cell text-white">Subcategrory Name</th>
                                            <th class="d-none d-md-table-cell text-white">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody id="data-table">
                                    </tbody>
                                </table>
                            </div>
      </div>
    </div>
   </section>
   <!-- view -->
   <div class="modal fade" id="view_new_harvester_enq" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-xl modal-dialog-centered">
              <div class="modal-content modal_box">
                <div class="modal-header modal_head">
                  <h5 class="modal-title text-white fw-bold" id="staticBackdropLabel"> New Harvester Enquiry Information </h5>
                  <button type="button" class="btn-close btn-success" data-bs-dismiss="modal" aria-label="Close"><img src="assets/images/close.png"></button>
                </div>
                  <div class="modal-body bg-light">
                    <div class="row ">
                        <div class="col-12">
                            <table class="table table-striped">
                                <tbody>
                                    <tr> 
                                        <td>Implement Category Name-</td>
                                        <td id="category_view"></td>
                                        <td>Subcategory Name-</td>
                                        <td id="subcategory_view"></td>
                                    </tr>
                                    <tr>
                                        <td>Thumbnail Image-</td>
                                        <!-- <td id="thumbnail"></td> -->
                                        <td id="thumbnail" class="row"></td>
                                    </tr>
                                </tbody>
                            </table>
                            <div class="justify-content-center" style="margin: 0 auto;">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                        <th scope="col">S.No</th>
                                        <th scope="col">Custom Data</th>
                                        <th scope="col">Implement Name</th>
                                        </tr>
                                    </thead>
                                    <tbody id="tableData">
                                    </tbody>
                                </table>
                            </div>
                            
                        </div>
                    </div>  
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary px-3" data-bs-dismiss="modal">Close</button>
                        <!-- <button type="submit" id="btn_sb" class="btn btn-success fw-bold px-3">Submit</button> -->
                    </div>
                </div>
            </div>
          </div>
    </div>
      
<!-- edit -->
                <div class="modal fade" id="staticBackdrop_2" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                  <div class="modal-dialog  modal-dialog-centered">
                    <div class="modal-content modal_box">
                      <div class="modal-header modal_head">
                        <h5 class="modal-title text-white fw-bold" id="staticBackdropLabel">Update Lookup Data</h5>
                        <button type="button" class="btn-close btn-success" data-bs-dismiss="modal" aria-label="Close"><img src="assets/images/close.png"></button>
                      </div>
                      <div class="modal-body bg-white">
                              <div class="row justify-content-center">
                                  <div class="col-12">
                                    <!-- <h5 class="text-center">Fill Details</h5> -->
                                    <form id="lookup_data_form_1" method="POST">
                                      <div class="row justify-content-center">
                                        <div class="col- col-sm-6 col-lg-6 col-md-6" hidden>
                                          <label class="text-dark"> id Name<span class="text-danger">*</span></label>
                                          <input type="text" class="form-control py-2" for="idUser"  id="idUser" name="first_name" placeholder="Enter First Name">
                                          <small></small>
                                        </div> 
                                        <div class="col-12 col-sm-12 col-md-12 col-lg-12  mt-4">
                                          <div class="form-outline">
                                            <label for="lookupSelectbox" class="form-label">Type</label>
                                              <select class="form-select form-control py-2" value="lookupSelectbox" for="lookup" id="lookupSelectbox1" name="lookup_Selectbox1" aria-label="Default select example">
                                                <option value="" >Select Type Name</option>
                                              </select>
                                          </div>
                                        </div>
                                        <div class="col-12 mt-4">
                                          <div class="form-outline">
                                            <label for="lookup_data_value" class="form-label text-dark"> Lookup Data Name</label>
                                              <input type="text" class="form-control" placeholder=" " id="lookup_data_value1"  for="lookup_data" name="lookup_datavalue1">
                                          </div>
                                        </div>
                                      </div>
                                      
                                    </form>
                                  </div>
                              </div>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary px-3" data-bs-dismiss="modal">Close</button>
                            <button type="button" id="dataeditbtn" class="btn btn-success fw-bold px-3">Save Chnage</button>
                          </div>
                    </div>
                  </div>
                </div>
    
</div>
</div>

  