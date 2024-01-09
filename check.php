<?php
include 'includes/headertag.php';
   include 'includes/footertag.php';
   
   ?> 
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
  <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
  <!-- <style>
      p {
        margin: 0;
    }

    .upload__box {
        padding: 40px;
        width: 50%;
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
    }

    .upload__img-wrap {
        display: flex; /* Change to flex to make it horizontal */
        margin-top: 10px;
        overflow-x: auto; /* Enable horizontal scrolling if needed */
    }

    .upload__img-box {
        flex: 0 0 auto; /* Remove calc() for auto width */
        margin: 0 10px 20px; 
        position: relative;
    }

    .upload__img-close {
        width: 24px;
        height: 24px;
        border-radius: 50%;
        background-color: rgba(0, 0, 0, 0.5);
        position: absolute;
        top: 10px;
        right: 10px;
        text-align: center;
        line-height: 24px;
        z-index: 1;
        cursor: pointer;
    }

    .upload__img-close:after {
        content: '\2716';
        font-size: 14px;
        color: white;
    }

    .img-bg {
        background-repeat: no-repeat;
        background-position: center;
        background-size: cover;
        position: relative;
        width: 160px;
        height: 125px;
    }
</style> -->
<style>
       p {
        margin: 0;
        }

        .upload__box {
        padding: 40px;
        width: 50;
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
        flex-wrap:nowrap;
        margin: 0 -50px;
        }

        .upload__img-box {
        flex: 0 0 calc(33.333% - 20px); 
        margin: 0 10px 20px; 
        position: relative;
        }

        .upload__img-close {
        width: 24px;
        height: 24px;
        border-radius: 50%;
        background-color: rgba(0, 0, 0, 0.5);
        position: absolute;
        top: 10px;
        right: 10px;
        text-align: center;
        line-height: 24px;
        z-index: 1;
        cursor: pointer;
        }

        .upload__img-close:after {
        content: '\2716';
        font-size: 14px;
        color: white;
        }

        .img-bg {
        background-repeat: no-repeat;
        background-position: center;
        background-size: cover;
        position: relative;
        width: 160px;
        height: 125px;
        }

</style>
<!-- <style>
            p {
        margin: 0;
        }

        .upload__box {
        padding: 40px;
        width: 50;
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
        #selectedImagesContainer {
        display: flex;
         flex-wrap: wrap;
        justify-content: center;
         }

     .upload__img-box {
    flex: 0 0 calc(33.333% - 20px);
    margin: 0 10px 20px;
    position: relative;
  }

        .upload__img-wrap {
        display: flex;
        flex-wrap:nowrap;
        margin: 0 -50px;
        }

        .upload__img-box {
        flex: 0 0 calc(33.333% - 20px); 
        margin: 0 10px 20px; 
        position: relative;
        }

        .upload__img-close {
        width: 24px;
        height: 24px;
        border-radius: 50%;
        background-color: rgba(0, 0, 0, 0.5);
        position: absolute;
        top: 10px;
        right: 10px;
        text-align: center;
        line-height: 24px;
        z-index: 1;
        cursor: pointer;
        }

        .upload__img-close:after {
        content: '\2716';
        font-size: 14px;
        color: white;
        }

        .img-bg {
        background-repeat: no-repeat;
        background-position: center;
        background-size: cover;
        position: relative;
        width: 160px;
        height: 125px;
        }
</style> -->
<body>
<!-- <form action="" method="POST"  class="" id="form_add">
                                  <div class="filter-card ">
                                    <div class="card-body">
                                      <div class="row">
                                        
                                        <div class="col- col-sm-6 col-lg-6 col-md-6">
                                          <label class="text-dark"> First Name<span class="text-danger">*</span></label>
                                          <input type="text" class="form-control py-2" for="first_name"  id="first_name" name="first_name" placeholder="Enter First Name">
                                          <small></small>
                                        </div>
                                       
                                        <div class="col- col-sm-6 col-lg-6 col-md-6">
                                          <label class="text-dark" for="last_name"> Last Name<span class="text-danger">*</span></label>
                                          <input type="text" class="form-control py-2"  name="last_name"   id="last_name" placeholder="Enter Last Name">
                                          <small></small>
                                        </div>
                                        <div class="col- col-sm-6 col-lg-6 col-md-6">
                                          <label class="text-dark">Contact Number<span class="text-danger">*</span></label>
                                          <input type="text" class="form-control py-2"  name="mobile" for="mobile" id="mobile" placeholder="Enter contact number">
                                          <small></small>
                                        </div>
                                        <div class="col- col-sm-6 col-lg-6 col-md-6">
                                          <label class="text-dark">Email ID<span class="text-danger">*</span></label>
                                          <input type="text" class="form-control py-2" id="email" name="email" for="email"  placeholder="Enter email id">
                                          <small></small>
                                        </div>
                                        
                                        <div class="col- col-sm-6 col-lg-6 col-md-6">
                                          <label class="text-dark">Password<span class="text-danger">*</span></label>
                                          <input type="text" class="form-control py-2" id="password"name="password" for="password"   placeholder="Enter Password">
                                          <small></small>
                                        </div>
                                        <div class="col- col-sm-6 col-lg-6 col-md-6">
                                          <label class="text-dark">Confirm Password<span class="text-danger">*</span></label>
                                          <input type="text" class="form-control py-2" id="password_confirmation" name="password_confirmation" for="password_confirmation" placeholder="Enter Password">
                                          <small></small>
                                          <div class="form-text confirm-message"></div>
                                        </div>
                                        <div class="col- col-sm-6 col-lg-6 col-md-6">
                                    
                                          <label class="text-dark">User Type<span class="text-danger">*</span></label>
                                            <select class="form-select py-2" aria-label="Default select example" name="user_type" id="user_type">
                                                <option value>Select User</option>
                                                <option value="1" >Admin</option>
                                                <option value="2">User</option>
                                            </select>
                                         
                                        </div>
                                        <div class="col-12 col-sm-6 col-md-6 col-lg-6">
                                        
                                          <label class="text-dark"> State<span class="text-danger">*</span></label>
                                            <select class="form-select py-2" aria-label="Default select example"  name="status" id="status">
                                                <option value>Select Status</option>
                                                <option value="1">Active</option>
                                                <option value="2">In Active</option>
                                            </select>
                                        
                                        </div>
                                        <div class="col-12 mt-4 ">
                                            <div class="text-center">
                                                <button class="btn px-5 bg-success text-white" id="save">Submit</button>
                                            </div>
                                        </div>
                                      </div>
                                  </div>
</form> -->
<!-- <div class="container">

                          <form id="old_form">
                            <div class="row justify-content-center pt-4">
                                <h5 class="fw-bold">Your Harvester Information</h5>
                                <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                                  <div class="form-outline mt-3">
                                    <label class="form-label text-dark">Brand</label>
                                    <select class="form-select " aria-label=".form-select-lg example" id="brand"name="brand">
                                      <option value>Select Brand</option>
                                      <option value="1">Mahindra</option>
                                      <option value="2">svaraj</option>
                                      <option value="2">sonakila</option>
                                      </select>
                                  </div>
                                </div>
                                <div class="col-12 col-lg-6 col-md-6 col-sm-6 ">
                                  <div class="form-outline mt-3">
                                    <label for="name" class="form-label text-dark">Model Name</label>
                                    <input type="text" class="form-control" placeholder="Enter Your Model Name" id="model" name="model">
                                  </div>
                               </div>
                               <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                                  <div class="form-outline mt-3">
                                    <label class="form-label text-dark">Crop Type</label>
                                    <select class="form-select py-2 " aria-label=".form-select-lg example" id="crop_type" name="crop_type">
                                        <option value="">Select Crop Type</option>
                                        <option value="1">MultiCrop</option>
                                        <option value="2">Paddy</option>
                                        <option value="3">Maize</option>
                                        <option value="3">Sugarcane</option>
                                    </select>
                                  </div>
                                </div>
                                <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                                  <div class="form-outline mt-3">
                                    <label class="form-label text-dark"> Power Source</label>
                                    <select class="form-select py-2 " aria-label=".form-select-lg example" id="power" name="power">
                                      <option value="">Select Power Source</option>
                                      <option value="1">Self</option>
                                      <option value="2">Tractor Mounted</option>
                                    </select>
                                  </div>
                                </div>
                                <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                                  <div class="form-outline pt-3 mt-3">
                                    <label class="form-label text-dark">Hours</label>
                                    <select class="form-select py-2 " aria-label=".form-select-lg example" id="hours" name="hours">
                                          <option value>Select Hours</option>
                                          <option value="1">Less than 1000 </option>
                                          <option value="2">1001 - 2000</option>
                                          <option value="3">2001 - 3000</option>
                                          <option value="3">3001 - 4000</option>
                                          <option value="3">4001 - 5000</option>
                                          <option value="3">5001 - 6000</option>
                                          <option value="3">6001 - 7000</option>
                                          <option value="3">7001 - 8000</option>
                                          <option value="3">8001 - 9000</option>
                                          <option value="3">9001 - 10000</option>
                                          <option value="3">above 10000</option>
                                          <option value="3">Not Available</option>
                                      </select>
                                    </select>
                                  </div>
                                </div>
                                <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                                  <div class="form-outline pt-3 mt-3">
                                    <label class="form-label text-dark">Purchase Year</label>
                                    <select class="form-select py-2 " aria-label=".form-select-lg example" id="year" name="year">
                                          <option value="">Enter Purchase Year</option>
                                          <option value="1">2023</option>
                                          <option value="2">2022</option>
                                          <option value="3">2021</option>
                                          <option value="3">2020</option>
                                    </select>
                                  </div>
                                </div>
                                <div class="col-12 col-lg-6 col-md-6 col-sm-6 ">
                                  <div class="form-outline pt-3 mt-3">
                                    <label for="name" class="form-label text-dark">Price</label>
                                    <input type="text" class="form-control" placeholder="Enter Price" id="price" name="price">
                                  </div>
                               </div>
                                <div class="col-12 col-sm-6 col-lg-6 col-md-6 ">
                                  <div class="upload__box pt-3 mt-3">
                                      <div class="upload__btn-box">
                                        <label class="upload__btn">
                                          <p>Upload images</p>
                                          <input type="file" multiple="" data-max_length="20" class="upload__inputfile" id="image" name="image">
                                        </label>
                                      </div>
                                      <p>Upload minimum 2 images</p>
                                      <div class="upload__img-wrap"></div>
                                    </div>
                                </div>
                                  <div class="col-12">
                                  <div class="form-outline">
                                  <label class="form-label text-dark">About</label>
                                  <textarea name="about" rows="4" cols="70" minlength="1" maxlength="255"></textarea>
                                  </div>
                               </div>
                                  <h5 class="fw-bold mt-3 ">Personal Information</h5>
                                <div class="col-12 col-sm-6 col-lg-6 col-md-6">
                                  <div class="form-outline mt-3">
                                    <label for="name" class="form-label text-dark">Name</label>
                                    <input type="text" class="form-control" id="name" name="name" placeholder="Enter Your Name">
                                  </div>
                               </div>
                                <div class="col-12 col-sm-6 col-lg-6 col-md-6">
                                  <div class="form-outline mt-3">
                                    <label for="name" class="form-label text-dark">Mobile</label>
                                    <input type="text" class="form-control"  id="Mobile" name="Mobile" placeholder="Enter Your Number">
                                  </div>
                                </div>
                                    <div class="col-12 col-sm-4 col-lg-4 col-md-4">
                                  <div class="form-outline mt-3">
                                    <label class="form-label text-dark">State</label>
                                    <select class="form-select" aria-label=".form-select-lg example" id="state" name="state">
                                        <option value="">Select State</option>
                                        <option value="1">Chhattisgarh</option>
                                        <option value="2">Others</option>
                                      </select>
                                  </div>
                                </div>
                                    <div class="col-12 col-sm-4 col-lg-4 col-md-4">
                                  <div class="form-outline mt-3">
                                    <label class="form-label text-dark">Districte</label>
                                    <select class="form-select" aria-label=".form-select-lg example" id="district" name="district">
                                        <option value="">Select Districte</option>
                                        <option value="1">Jagdalpur</option>
                                          <option value="2">Sarguja</option>
                                      </select>
                                  </div>
                                </div>
                                    <div class="col-12 col-sm-4 col-lg-4 col-md-4">
                                  <div class="form-outline mt-3">
                                    <label class="form-label text-dark">Tehsil</label>
                                    <select class="form-select" aria-label=".form-select-lg example" id="tehsil" name="tehsil">
                                        <option value="">Select Tehsil</option>
                                        <option value="1">Jagdalpur</option>
                                          <option value="2">Sarguja</option>
                                      </select>
                                  </div>
                                </div>
                                <div class="col-12 text-center mt-4"> 
                                  <button type="submit" class="btn btn-success fw-bold px-3 ">Submit</button>
                                </div>
                            </form>
</div> -->

   <section style="padding: 0 15px;">
    <div class="">
      <div class="container">
        <div class="card-body d-flex align-items-center justify-content-between page_title">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb my-0 ms-2">
              
              <li class="breadcrumb-item">
                <span>Tyres Listings</span>
              </li>
            </ol>
          </nav>
          <button type="button" id="add_trac" class="btn add_btn btn-success float-right" data-bs-toggle="modal"  data-bs-target="#staticBackdrop">
              <i class="fa fa-plus" aria-hidden="true"></i> Add New Tyres
          </button>

          <!-- Modal -->
          <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered">
              <div class="modal-content modal_box">
                <div class="modal-header modal_head">
                  <h5 class="modal-title text-white fw-bold" id="staticBackdropLabel"> Add Tyres </h5>
                  <button type="button" class="btn-close btn-success" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body bg-light">
                        <div class="row justify-content-center">
                            <div class="col-lg-10">
                              <h4 class="text-center">Fill your Details</h4>
                            <form id="form_tyre_list">
                                <div class="row justify-content-center pt-4">
                                    <div class="col-12 col-lg-6 col-md-6 col-sm-6 ">
                                      <div class="form-outline mt-3">
                                        <label for="name" class="form-label text-dark">Brand</label>
                                        <input type="text" class="form-control" placeholder="" id="brand" name="brand">
                                      </div>
                                    </div>
                                    <div class="col-12 col-lg-6 col-md-6 col-sm-6 ">
                                      <div class="form-outline mt-3">
                                        <label for="name" class="form-label text-dark">Tyre Model</label>
                                        <input type="text" class="form-control" placeholder="" id="tyre" name="tyre">
                                      </div>
                                    </div>
                                    <div class="col-12 col-lg-6 col-md-6 col-sm-6 ">
                                      <div class="form-outline mt-3">
                                        <label for="name" class="form-label text-dark">Tyre Position</label>
                                        <input type="text" class="form-control" placeholder="" id="tyre_position" name="tyre_position">
                                      </div>
                                    </div>
                                    <div class="col-12 col-lg-6 col-md-6 col-sm-6 ">
                                      <div class="form-outline mt-3">
                                        <label for="name" class="form-label text-dark">Size of the tyre</label>
                                        <input type="text" class="form-control" placeholder="" id="tyre_size" name="tyre_size">
                                      </div>
                                    </div>
                                    <div class="col-12 col-lg-6 col-md-6 col-sm-6 ">
                                      <div class="form-outline mt-3">
                                        <label for="name" class="form-label text-dark">Tyre Diameter</label>
                                        <input type="text" class="form-control" placeholder="" id="tyre_diameter" name="tyre_diameter">
                                      </div>
                                    </div>
                                    <div class="col-12 col-lg-6 col-md-6 col-sm-6 ">
                                      <div class="form-outline mt-3">
                                        <label for="name" class="form-label text-dark">Tyre Width</label>
                                        <input type="text" class="form-control" placeholder="" id="tyre_width" name="tyre_width">
                                      </div>
                                    </div>
                                    <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                                     <div class="form-outline my-3">
                                      <label for="yr_state" class="form-label text-dark">Category</label>
                                      <select class="form-select form-control" aria-label=".form-select-lg example"id="category" name="category">
                                          <option value>Select Categoey</option>
                                          <option value="1">tyre</option>
                                          <option value="2">....</option>
                                      </select>
                                    </div>
                                  </div>
                                    <div class="col-12 col-lg-6 col-md-6 col-sm-6">
                                      <div class="upload__box">
                                        <div class="upload__btn-box text-center">
                                          <label >
                                            <p class="upload__btn ">Upload images</p>
                                            <input type="file" multiple="" data-max_length="20" class="upload__inputfile" id="_image" name="_image">
                                          </label>
                                          <!-- <p></p> -->
                                        </div>
                                        <div id="selectedImagesContainer" class="upload__img-wrap"></div>
                                      </div>
                                    </div>
                                   
                                </div>
                            </form>
                            </div>
                        </div>
                    </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary px-3" data-bs-dismiss="modal">Close</button>
                  <button type="button" id="subbnt" class="btn btn-success fw-bold px-3">Submit</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <!-- Filter Card -->
      <div class="filter-card mb-2">
        <div class="card-body">
          <div class="row">
            <div class="col-12 col-sm-12 col-md-4 col-lg-4">
              <div class="form-outline">
                <label class="form-label">Brand</label>
                <select class="form-select" aria-label="Default select example">
                  <option selected>Select Brand</option>
                  <option value="1">Mahindra</option>
                  <option value="2">Swaraj</option>
                  <option value="3">John deere</option>
                </select>
              </div>
            </div>
            <div class="col-12 col-sm-12 col-md-4 col-lg-4">
              <div class="form-outline">
                <label class="form-label">Tyre Position</label>
                <select class="form-select" aria-label="Default select example">
                  <option selected>Select Position</option>
                  <option value="1">Front-Left</option>
                  <option value="2">Front-right</option>
                  <option value="2">Back-Left</option>
                  <option value="2">Back-right</option>
                </select>
              </div>
            </div>
            <div class="col-12 col-sm-12 col-md-4 col-lg-4">
              <div class="text-center">
                <button type="button" class="btn-success btn btn_search" id="Search">Search</button>
                <button type="button" class="btn-success btn  mx-2 btn_search" id="Reset">Reset</button>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Table Card -->
      <div class=" mb-5">
                            <div class="table-responsive">
                                <table id="example" class="table dataTable no-footer py-1" width="100%">
                                    <thead>
                                        <tr>
                                            <th class="d-none d-md-table-cell text-dark">S.No.</th>
                                            <th class="d-none d-md-table-cell text-dark">Brand</th>
                                            <th class="d-none d-md-table-cell text-dark">Model</th>
                                            <th class="d-none d-md-table-cell text-dark">Tyre Name</th>
                                            <th class="d-none d-md-table-cell text-dark">Tyre Position</th>
                                            <th class="d-none d-md-table-cell text-dark">Size</th>
                                            <th class="d-none d-md-table-cell text-dark">Action</th>
                                           
                                        </tr>
                                    </thead>
                                    <tbody>
                                    </tbody>
                                </table>
                            </div>
                       </div>
    </div>
   </section>
      
    
</div>
</div>
</body>

<?php
   include 'includes/footertag.php';
   ?><?php
   include 'includes/footertag.php';
   ?> 
</body>



<script>
  // $(document).ready(function () {
  //   // Initialize form validation on the form_news_updates form
  //   $("#form_news_updates").validate({
  //     // Specify validation rules
  //     rules: {
  //       brand: {
  //         required: true,
  //       },
  //       model_name: {
  //         required: true,
  //       },
  //       w3review: {
  //         required: true,
  //       },
  //     },
  //     // Specify validation error messages
  //     messages: {
  //       brand: {
  //         required: "Please enter the news category",
  //       },
  //       model_name: {
  //         required: "Please enter the news headline",
  //       },
  //       w3review: {
  //         required: "Please enter the news content",
  //       },
  //     },
  //     // Handle form submission
  //     submitHandler: function (form) {
  //       // If the form is valid, you can handle the submission here
  //       // For example, you can use AJAX to submit the form data
  //       alert("Form submitted successfully!");
  //     },
  //   });
  // });
 </script>
  <!-- Include jQuery -->
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

<!-- Include jQuery Validation Plugin -->
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>

<script>
  $(document).ready(function () {
    // Initialize form validation on the form_news_updates form
    $("#form_tyre_list").validate({
      // Specify validation rules
      rules: {
        brand: {
          required: true,
        },
        tyre: {
          required: true,
        },
        tyre_position: {
          required: true,
        },
        tyre_size: {
          required: true,
          digits: true,
        },
        _image: {
          required: true,
        },
        tyre_width:{
          required: true,
          digits: true,
        },
        tyre_diameter:{
          required: true,
          digits: true,
        },
        category:{
          required: true,
        }
      },
      // Specify validation error messages
      messages: {
        brand: {
          required: "This field is required",
        },
        tyre: {
          required: "This field is required",
        },
        tyre_position: {
          required: "This field is required",
        },
        tyre_size: {
          required: "This field is required",
          digits: "Please enter only digits"
        },
        _image: {
          required:"This field is required",
        },
        tyre_width:{
          required:"This field is required",
          digits: "Please enter only digits"
        },
        tyre_diameter:{
          required:"This field is required",
          digits: "Please enter only digits"
        },
        category:{
          required:"This field is required",
        }

       
      },
      
      submitHandler: function (form) {
        alert("Form submitted successfully!");
      },
    });

   
    $("#subbnt").on("click", function () {
   
      $("#form_tyre_list").valid();
      if ($("#form_tyre_list").valid()) {
        
        alert("Form is valid. Ready to submit!");
      }
    });
   
  });
</script>

 <!-- <script>
//         $(document).ready(function(){
//           jQuery.validator.addMethod("customPhoneNumber", function(value, element) {
//             return /^[6-9]\d{9}$/.test(value); 
//           }, "Phone number must start with 6 or above");

//           $('#password, #password_confirmation').on('keyup', function(){
//             $('.confirm-message').removeClass('success-message').removeClass('error-message');
//             let password=$('#password').val();
//             let confirm_password=$('#password_confirmation').val();
//             if(password===""){
//               $('.confirm-message').text("Password Field cannot be empty").addClass('error-message');
//             }
//             else if(confirm_password===""){
//                 $('.confirm-message').text("Confirm Password Field cannot be empty").addClass('error-message');
//             }
//             else if(confirm_password===password)
//             {
//                 $('.confirm-message').text('Password Match!').addClass('success-message');
//             }
//             else{
//                 $('.confirm-message').text("Password Doesn't Match!").addClass('error-message');
//             }

//           });
//    $('#form_add').validate({
//         rules:{
//           first_name:{
//                 required:true,
//             },
//             last_name:{
//                 required:true,
//             },
//             mobile:{
//               required:true,
//               minlength: 10,
//               maxlength:10,
//               digits: true,
//               customPhoneNumber: true
//             },
//             password:{
//                 required:true,
//                 minlength:5
//             },
//             password_confirmation:{
//              required:true,
//              minlength:5,
             
//              equalTo:'[name="password"]'
//             },
//             email:{
//                 required:true,
//                 email:true
//             },
//             user_type:{
//                 required:true,
//             },
//             status:{
//                 required:true,
//             }
//         },
//         messages:{
//           first_name:{
//                 required:"Please Enter Your First Name",
//             },
//             last_name:{
//                 required:"Please Enter Your Last Name",
//             },
//             mobile:{
//               required:"Please Enter Your Contact Number",
//               minlength: "Phone Number must be of 10 Digit long",
//               maxlength:"Enter on10 digits",
//               digits: "Please enter onlyly  digits" minlength: "Phone Number must be of 10 Digit long",
//               maxlength:"Enter on10 digits",
//               digits: "Please enter onlyly  digits"
//             },
//             password:{
//               required:"Please provide a valid password",
//               minlenght:"Enter password must be 8 character"
              
//             },
//             password_confirmation:{
//               required:"Please provide a valid password",
//               minlenght:"Enter password must be 8 character",
//               equalTo:"Please enter  as same password above"
//             },
//             email:{
//                 required:"Please Enter Your Email",
//             },
//             user_type:{
//                 required:"Please Select Your User Type",
//             },
//             status:{
//                 required:"Please select Your Status",
//             }
//         },
//         submitHandler: function(form) {
//     form.submit();
//         }
//     });
// });
//     </script>
<!-- <script>
    jQuery(document).ready(function () {
  ImgUpload();
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
</script>
<script>
    $(document).ready(function () {
      jQuery.validator.addMethod("customPhoneNumber", function(value, element) {
    return /^[6-9]\d{9}$/.test(value); 
  }, "Phone number must start with 6 or above");

      $('#old_form').validate({
        rules: {
          brand: {
            required: true,
          },
          model: {
            required: true,
          },
          crop_type: {
            required: true,
          },
          power: {
            required: true,
          },
          hours: {
            required: true,
          },
          name: {
            required: true,
          },
          Mobile: {
            required:true,
          minlength: 10,
          maxlength:10,
           digits: true,
          customPhoneNumber: true
          },
          state: {
            required: true,
          },
          district: {
            required: true,
          },
          year:{
            required: true,
          },
          price:{
            required: true,
          },
          about:{
           required: true,
           minlength: 1, 
           maxlength: 1000 
          },
          image:{
            required: true,
          }
        },
        messages: {
          brand: {
            required:"This field is required",
          },
          model: {
            required: "This field is required",
          },
          crop_type: {
            required: "This field is required",
          },
          power: {
            required: "This field is required",
          },
          hours: {
            required: "This field is required",
          },
          name: {
            required: "This field is required",
          },
          Mobile: {
            required:"Please Enter Your Contact Number",
            minlength: "Phone Number must be of 10 Digit long",
            maxlength:"Enter only 10 digits",
            digits: "Please enter only digits"
          },
          state: {
            required: "This field is required",
          },
          district: {
            required: "This field is required",
          }, 
          year:{
            required: "This field is required",
          },
          price:{
            required: "This field is required",
          },
          about:{
            required: "This field is required",
          },
          image:{
            required: "This field is required",
          }
        },
        submitHandler: function (form) {
          form.submit();
        }
      });
    });
  </script> -->

<script>
    jQuery(document).ready(function () {
    ImgUpload();
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
</script>

  </html>






   <!-- <div class="col-lg-10">
                            <form id="narsary_list_form"method="post"enctype="multipart/form-data" onsubmit="return false">
                                <div class="row justify-content-center pt-4">
                                        <div class="col-12 col-lg-6 col-sm-5 col-md-6 my-1">
                                          <div class="form-outline ">
                                            <label for="name" class="form-label text-dark">Nursery Name</label>
                                            <input type="text" class="form-control" placeholder="" id="name" name="name">
                                          </div>
                                        </div>
                                        <div class="col-12 col-lg-6 col-sm-5 col-md-6 ">
                                          <div class="form-outline">
                                            <label for="name" class="form-label text-dark">First Name</label>
                                            <input type="text" class="form-control" placeholder="" id="fname" name="fname">
                                          </div>
                                        </div>
                                        <div class="col-12 col-lg-6 col-sm-5 col-md-6 my-1">
                                          <div class="form-outline mt-2">
                                            <label for="name" class="form-label text-dark">Last Name</label>
                                            <input type="text" class="form-control" placeholder="" id="lname" name="lname">
                                          </div>
                                        </div>
                                        <div class="col-12 col-lg-6 col-sm-5 col-md-6 my-1">
                                          <div class="form-outline mt-2">
                                              <label for="name" class="form-label text-dark">Mobile Number</label>
                                              <input type="text" class="form-control" placeholder="" id="number" name="number">
                                          </div>
                                        </div>
                                        <div class="col-12 col-sm-4 col-md-4 col-lg-4">
                                          <div class="form-outline mt-3">
                                             <label class="form-label">State</label>
                                              <select class="form-select py-2" aria-label="Default select example" id="state_" name="state_">
                                                <option value>Select State</option>
                                                <option value="1">Chattisgarh</option>
                                                <option value="2">Other</option>
                                              </select>
                                          </div>
                                        </div>
                                        <div class="col-12 col-sm-4 col-md-4 col-lg-4">
                                          <div class="form-outline mt-3">
                                            <label class="form-label">District</label>
                                            <select class="form-select py-2" aria-label="Default select example" id="dist" name="dist">
                                              <option value>Select District</option>
                                              <option value="1">Raipur</option>
                                              <option value="2">Bilaspur</option>
                                              <option value="3">Surajpur</option>
                                            </select>
                                          </div>
                                        </div>
                                        <div class="col-12 col-sm-4 col-md-4 col-lg-4">
                                          <div class="form-outline mt-3">
                                            <label class="form-label">Tehsil</label>
                                            <select class="form-select py-2" aria-label="Default select example" id="tehsil">
                                              <option value>Select Tehsil</option>
                                              <option value="1">Raipur</option>
                                              <option value="2">Bilaspur</option>
                                              <option value="3">Surajpur</option>
                                            </select>
                                          </div>
                                        </div>
                                        <div class="col-12">
                                          <div class="form-outline mt-4">
                                            <label for="name" class="form-label text-dark">Location</label>
                                            <input type="text" class="form-control" placeholder="" id="loc" name="loc">
                                          </div>
                                        </div>
                                        <div class="col-12  ">
                                          <div class="form-outline mt-3">
                                            <label class="form-label text-dark">Description</label>
                                            <textarea rows="3" cols="70" class="w-100" minlength="1" maxlength="255" id="textarea_d" name="textarea_d"></textarea>
                                          </div>
                                        </div>
                                        <div class="col-12 col-lg-6 col-md-6 col-sm-6">
                                          <div class="upload__box mt-3">
                                            <div class="upload__btn-box text-center">
                                              <label >
                                                <p class="upload__btn ">Upload images</p>
                                                <input type="file" name='files[]' multiple="" data-max_length="20" class="upload__inputfile" id="_image">
                                              </label>
                                            </div>
                                            <div id="selectedImagesContainer" class="upload__img-wrap"></div>
                                          </div>
                                        </div>
                                </div> -->



                                $("#selectedImagesContainer").empty();

      if (userData.image_names) {
          var imageNamesArray = Array.isArray(userData.image_names) ? userData.image_names : userData.image_names.split(',');
      
          imageNamesArray.forEach(function (image_names) {
              var imageUrl = 'http://tractor-api.divyaltech.com/uploads/tyre_img/' + image_names.trim();
      
              var newCard = `
                  <div class="col-12 col-md-6 col-lg-4">
                      <div class="brand-main d-flex box-shadow mt-1 py-2 text-center shadow">
                          <a class="weblink text-decoration-none text-dark" title="Tyre Image">
                              <img class="img-fluid w-100 h-100" src="${imageUrl}" alt="Tyre Image">
                          </a>
                      </div>
                  </div>
              `;
      
              // Append the new image element to the container
              $("#selectedImagesContainer").append(newCard);
          });
      }





      <!-- sdfghjkl -->

      <!DOCTYPE html>
<html lang="en">
<head>
<?php
include 'includes/headertag.php';
   include 'includes/footertag.php';
   
   ?> 
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
  <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.valid"ate.min.js></script>
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
  
    /* Add your custom styles here */

    /* Hide the file input visually */
    .image-file-input {
        display: none;
    }

    /* Add more styles as needed */
    /* Add more styles as needed */
</style>
  </head>

<body>
<section style="padding: 0 15px;">
    <div class="">
      <div class="container">
        <div class="card-body d-flex align-items-center justify-content-between page_title">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb my-0 ms-2">
              
              <li class="breadcrumb-item">
                <span>Rent tractor List</span>
              </li>
            </ol>
          </nav>
          <button type="button" id="add_trac" class="btn add_btn btn-success float-right" data-bs-toggle="modal"  data-bs-target="#staticBackdrop">
              <i class="fa fa-plus" aria-hidden="true"></i> Add Rent Tractor
          </button>

          <!-- Modal -->
          <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered">
              <div class="modal-content modal_box">
                <div class="modal-header modal_head">
                  <h5 class="modal-title text-white fw-bold" id="staticBackdropLabel"> Add New Rent Tractor </h5>
                  <button type="button" class="btn-close btn-success" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body bg-light">
                  <div class="row justify-content-center">
                    <div class="col-lg-10">
                      <h4 class="text-center">Fill your Details</h4>
                      <form id="rent_list_form_">
                              <div class="row justify-content-center pt-4">
                                <div class="col-12 col-sm-4 col-md-4 col-lg-4">
                                  <div class="form-outline">
                                    <label class="form-label">Brand</label>
                                    <select class="form-select" aria-label="Default select example"id="brand" name="brand">
                                      <option value>Select Brand</option>
                                      <option value="1">Mahindra</option>
                                      <option value="2">Swaraj</option>
                                      <option value="3">John deere</option>
                                    </select>
                                  </div>
                                </div>
                                <div class="col-12 col-sm-4 col-md-4 col-lg-4">
                                  <div class="form-outline">
                                    <label class="form-label">Model</label>
                                    <select class="form-select" aria-label="Default select example"id="model" name="model">
                                      <option value>Select Model</option>
                                      <option value="1">Mahindra</option>
                                      <option value="2">Swaraj</option>
                                      <option value="3">John deere</option>
                                    </select>
                                  </div>
                                </div>
                                <div class="col-12 col-sm-4 col-md-4 col-lg-4">
                                  <div class="form-outline">
                                    <label class="form-label">Year</label>
                                    <select class="form-select" aria-label="Default select example"id="year" name="year">
                                      <option value>Select Year</option>
                                      <option value="1">2020</option>
                                      <option value="2">2021</option>
                                      <option value="3">2022</option>
                                    </select>
                                  </div>
                                </div>
                               
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
                                          <div class="card upload-img-wrap">
                                            <i class="fas fa-image m-auto" style="cursor: pointer;" onclick="triggerFileInput('impImage_0')"></i>
                                            <input type="file" name="imp_image[]" id="impImage_0" class="image-file-input" accept="image/*" style="display: none;" required="" onchange="displayImagePreview(this, 'impImagePreview_0')">
                                            <!-- <input type="file" name="imp_image[]" id="impImage_0" class="image-file-input" accept="image/*" required="" onchange="displayImagePreview(this, 'impImagePreview_0')"> -->
                                          </div>
                                        </td>
                                        <td>
                                          <div class="select-wrap">
                                            <select name="imp_type_id[]" id="impType_0" class="form-control implement-type-input">
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
                                            <button type="button" class="btn btn-success" title="Add Row" id="addRentTractorRowBtn">
                                            <i class="fas fa-plus"></i>
                                            </button>
                                        </td>
                                      </tr>
                                    </tfoot>
                                  </table>
                                </div>
                                <div class="col-12 col-lg-6 col-md-6 col-sm-6 ">
                                  <div class="form-outline mt-2">
                                    <label class="form-label text-dark">Working Area</label>
                                    <textarea rows="3" cols="70" class="w-100" minlength="1" maxlength="255" id="textarea_" name="textarea_"></textarea>
                                  </div>
                                </div>
                                <div class="col-12 col-lg-6 col-md-6 col-sm-6 ">
                                  <div class="form-outline mt-2">
                                    <label class="form-label text-dark">Description</label>
                                    <textarea rows="3" cols="70" class="w-100" minlength="1" maxlength="255" id="textarea_d" name="textarea_d"></textarea>
                                  </div>
                                </div>
                                <div class="text-center">
                                  <h4 class="pb-2 mt-2">Personal Information</h4>
                                </div>
                                <div class="col-12 col-lg-6 col-sm-5 col-md-6 my-1">
                                  <div class="form-outline mt-3">
                                    <label for="name" class="form-label text-dark">First Name</label>
                                    <input type="text" class="form-control" placeholder="" id="fname" name="fname">
                                  </div>
                                </div>
                                <div class="col-12 col-lg-6 col-sm-5 col-md-6 my-1">
                                  <div class="form-outline mt-3">
                                    <label for="name" class="form-label text-dark">Last Name</label>
                                    <input type="text" class="form-control" placeholder="" id="lname" name="lname">
                                  </div>
                                </div>
                                <div class="col-12 col-lg-6 col-sm-5 col-md-6 my-1">
                                  <div class="form-outline mt-2">
                                    <label for="name" class="form-label text-dark">Mobile Number</label>
                                    <input type="text" class="form-control" placeholder="" id="number" name="number">
                                  </div>
                                </div>
                                <div class="col-12 col-lg-6 col-sm-5 col-md-6 my-1">
                                  <div class="form-outline mt-2">
                                    <label class="form-label ">State</label>
                                    <select class="form-select py-2" aria-label="Default select example" id="state_" name="state_">
                                      <option value>Select State</option>
                                      <option value="1">Chattisgarh</option>
                                      <option value="2">Other</option>
                                    </select>
                                  </div>
                                </div>
                                <div class="col-12 col-lg-6 col-sm-5 col-md-6 my-1">
                                  <div class="form-outline mt-3">
                                    <label class="form-label ">District</label>
                                    <select class="form-select py-2" aria-label="Default select example" id="dist" name="dist">
                                      <option value>Select District</option>
                                      <option value="1">Raipur</option>
                                      <option value="2">Bilaspur</option>
                                    </select>
                                  </div>
                                </div>
                                <div class="col-12 col-lg-6 col-sm-5 col-md-6 my-1">
                                  <div class="form-outline mt-3">
                                    <label class="form-label">Tehsil</label>
                                    <select class="form-select py-2" aria-label="Default select example">
                                      <option value>Select Tehsil</option>
                                      <option value="1">Raipur</option>
                                      <option value="2">Bilaspur</option>
                                    </select>
                                  </div>
                                </div>
                              </div>
                      </form>
                    </div>
                  </div>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary px-3" data-bs-dismiss="modal">Close</button>
                  <button type="submit"  id="sub_btn_"class="btn btn-success fw-bold px-3">Submit</button>
                </div>
              </div>
            </div>
          </div> 
          <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered">
              <div class="modal-content modal_box">
                <div class="modal-header modal_head">
                  <h5 class="modal-title text-white fw-bold" id="staticBackdropLabel"> Add New Rent Tractor </h5>
                  <button type="button" class="btn-close btn-success" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body bg-light">
                  <div class="row justify-content-center">
                    <div class="col-lg-10">
                      <h4 class="text-center">Fill your Details</h4>
                      <form id="rent_list_form">
                        <div class="row justify-content-center pt-4">
                          <div class="col-12 col-sm-4 col-md-4 col-lg-4">
                            <div class="form-outline">
                              <label class="form-label">Brand</label>
                              <select class="form-select" aria-label="Default select example"id="brand" name="brand">
                                <option selected>Select Brand</option>
                                <option value="1">Mahindra</option>
                                <option value="2">Swaraj</option>
                                <option value="3">John deere</option>
                              </select>
                            </div>
                          </div>
                          <div class="col-12 col-sm-4 col-md-4 col-lg-4">
                            <div class="form-outline">
                              <label class="form-label">Model</label>
                              <select class="form-select" aria-label="Default select example"id="model" name="model">
                                <option selected>Select Model</option>
                                <option value="1">Mahindra</option>
                                <option value="2">Swaraj</option>
                                <option value="3">John deere</option>
                              </select>
                            </div>
                          </div>
                          <div class="col-12 col-sm-4 col-md-4 col-lg-4">
                            <div class="form-outline">
                              <label class="form-label">Year</label>
                              <select class="form-select" aria-label="Default select example"id="year" name="year">
                                <option selected>Select Year</option>
                                <option value="1">2020</option>
                                <option value="2">2021</option>
                                <option value="3">2022</option>
                              </select>
                            </div>
                          </div>
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
                                    <div class="card upload-img-wrap">
                                      <i class="fas fa-image m-auto" style="cursor: pointer;" onclick="triggerFileInput('impImage_0')"></i>
                                      <input type="file" name="imp_image[]" id="impImage_0" class="image-file-input" accept="image/*" style="display: none;" required="" onchange="displayFileName(this)">
                                    </div>
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
                          <div class="col-12 col-lg-6 col-md-6 col-sm-6 ">
                            <div class="form-outline mt-2">
                              <label class="form-label text-dark">Working Area</label>
                              <textarea rows="3" cols="70" class="w-100" minlength="1" maxlength="255" id="textarea_" name="textarea_"></textarea>
                            </div>
                          </div>
                          <div class="col-12 col-lg-6 col-md-6 col-sm-6 ">
                            <div class="form-outline mt-2">
                              <label class="form-label text-dark">Description</label>
                              <textarea rows="3" cols="70" class="w-100" minlength="1" maxlength="255" id="textarea_d" name="textarea_d"></textarea>
                            </div>
                          </div>
                          <div class="text-center">
                            <h4 class="pb-2 mt-2">Personal Information</h4>
                          </div>
                          <div class="col-12 col-lg-6 col-sm-5 col-md-6 my-1">
                            <div class="form-outline mt-3">
                              <label for="name" class="form-label text-dark">First Name</label>
                              <input type="text" class="form-control" placeholder="" id="fname" name="fname">
                            </div>
                          </div>
                          <div class="col-12 col-lg-6 col-sm-5 col-md-6 my-1">
                            <div class="form-outline mt-3">
                              <label for="name" class="form-label text-dark">Last Name</label>
                              <input type="text" class="form-control" placeholder="" id="lname" name="lname">
                            </div>
                          </div>
                          <div class="col-12 col-lg-6 col-sm-5 col-md-6 my-1">
                            <div class="form-outline mt-2">
                              <label for="name" class="form-label text-dark">Mobile Number</label>
                              <input type="text" class="form-control" placeholder="" id="number" name="number">
                            </div>
                          </div>
                          <div class="col-12 col-lg-6 col-sm-5 col-md-6 my-1">
                            <div class="form-outline mt-2">
                              <label class="form-label ">State</label>
                              <select class="form-select py-2" aria-label="Default select example" id="state_" name="state_">
                                <option value>Select State</option>
                                <option value="1">Chattisgarh</option>
                                <option value="2">Other</option>
                              </select>
                            </div>
                          </div>
                          <div class="col-12 col-lg-6 col-sm-5 col-md-6 my-1">
                            <div class="form-outline mt-3">
                              <label class="form-label ">District</label>
                              <select class="form-select py-2" aria-label="Default select example" id="dist" name="dist">
                                <option value>Select District</option>
                                <option value="1">Raipur</option>
                                <option value="2">Bilaspur</option>
                              </select>
                            </div>
                          </div>
                          <div class="col-12 col-lg-6 col-sm-5 col-md-6 my-1">
                            <div class="form-outline mt-3">
                              <label class="form-label">Tehsil</label>
                              <select class="form-select py-2" aria-label="Default select example">
                                <option value>Select Tehsil</option>
                                <option value="1">Raipur</option>
                                <option value="2">Bilaspur</option>
                              </select>
                            </div>
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary px-3" data-bs-dismiss="modal">Close</button>
                  <button type="submit"  id="sub_btn_"class="btn btn-success fw-bold px-3">Submit</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <!-- Filter Card -->
      <div class="filter-card mb-2">
        <div class="card-body">
          <div class="row">
            <div class="col-12 col-sm-12 col-md-3 col-lg-3">
              <div class="form-outline">
                <label class="form-label"> Brand Name</label>
                <select class="form-select py-2" aria-label="Default select example">
                    <option value>Select Brand</option>
                    <option value="1">Mahindra</option>
                    <option value="2">Swaraj</option>
                    <option value="3">John Deere</option>
                </select>
              </div>
            </div>
            <div class="col-12 col-sm-12 col-md-3 col-lg-3">
              <div class="form-outline ">
                <label class="form-label">Model</label>
                    <select class="form-select py-2" aria-label="Default select example">
                        <option value>Select Model</option>
                        <option value="1">3032 NX</option>
                        <option value="2">3030 NX</option>
                        <option value="3">3230 NX</option>
                    </select>
              </div>
            </div>
            <div class="col-12 col-sm-12 col-md-3 col-lg-3">
              <div class="form-outline">
                <label class="form-label">State</label>
                <select class="form-select py-2" aria-label="Default select example">
                    <option value>Select State</option>
                    <option value="1">Chattisgarh</option>
                    <option value="2">Other</option>
                </select>
              </div>
            </div>
            <div class="col-12 col-sm-12 col-md-3 col-lg-3">
              <div class="form-outline">
                <label class="form-label">District</label>
                <select class="form-select py-2" aria-label="Default select example">
                    <option value>Select District</option>
                    <option value="1">Raipur</option>
                    <option value="2">Bilaspur</option>
                    <option value="3">Surajpur</option>
                </select>
              </div>
            </div>
            <div class="col-12 my-5">
              <div class="text-center">
                <button type="button" class="btn-success btn px-3 pt-2" id="Search">Search</button>
                <button type="button" class="btn-success btn mx-2 px-3 pt-2" id="Reset">Reset</button>
              </div>
            </div>
          
          </div>
        </div>
      </div>
      <!-- Table Card -->
      <div class=" mb-5">
        <div class="table-responsive">
          <table id="example" class="table dataTable no-footer py-1" width="100%">
            <thead>
              <tr>
                <th class="d-none d-md-table-cell text-dark">S.No.</th>
                <th class="d-none d-md-table-cell text-dark">Date</th>
                <th class="d-none d-md-table-cell text-dark">Brand</th>
                <th class="d-none d-md-table-cell text-dark">Model</th>
                <th class="d-none d-md-table-cell text-dark">Name</th>
                <th class="d-none d-md-table-cell text-dark">Phone Number</th>
                <th class="d-none d-md-table-cell text-dark">Year</th>
                <th class="d-none d-md-table-cell text-dark">Implement Type</th>
                <th class="d-none d-md-table-cell text-dark">Action</th>
              </tr>
            </thead>
            <tbody>
            </tbody>
          </table>
         </div>
        </div>
    </div>
</section>

<?php
   include 'includes/footertag.php';
   ?>
   
   <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

<!-- <script>

    function triggerFileInput(inputId) {
        $('#' + inputId).trigger('click');
    }

    function displayImagePreview(input, previewId) {
        var preview = $('#' + previewId);
        var file = input.files[0];
        var reader = new FileReader();

        reader.onloadend = function () {
            preview.attr('src', reader.result);
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

            var newImageId = 'impImage_' + rowNumber;
            var newPreviewId = 'impImagePreview_' + rowNumber;
            $(this).find('.image-file-input').attr('id', newImageId);
            $(this).find('img').attr('id', newPreviewId);
            $(this).find('.upload-img-wrap i').attr('onclick', 'triggerFileInput(\'' + newImageId + '\')');
            $(this).find('input[name^="imp_image"]').attr('id', newImageId);
            $(this).find('img').attr('id', newPreviewId);
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
            var newPreviewId = 'impImagePreview_' + newRowNumber;
            newRow.find('.image-file-input').attr('id', newImageId);
            newRow.find('img').attr('id', newPreviewId).hide();
            newRow.find('.upload-img-wrap').html('<i class="fas fa-image m-auto" style="cursor: pointer;" onclick="triggerFileInput(\'' + newImageId + '\')"></i>' +
                '<input type="file" name="imp_image[]" id="' + newImageId + '" class="image-file-input" accept="image/*" style="display: none;" onchange="displayImagePreview(this, \'' + newPreviewId + '\')">' +
                '<img id="' + newPreviewId + '" src="" alt="Image Preview" style="max-width: 100%; max-height: 100%; display: none;">');

            newRow.find('select[name^="imp_type_id"]').attr('id', 'impType_' + newRowNumber);
            newRow.find('input[name^="implement_rate"]').attr('id', 'impRate_' + newRowNumber);
            newRow.find('select[name^="rate_per"]').attr('id', 'impRatePer_' + newRowNumber);

            newRow.find('td:last').html('<button type="button" class="btn btn-danger" title="Remove Row" onclick="removeRow(this)"><i class="fas fa-minus"></i></button>');

            $('#rentTractorTable tbody').append(newRow);
            updateSerialNumbers();
        });
    });
</script> -->






<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script>
    var elementToClone = document.getElementById('rentTractorTable');
    
  if (elementToClone) {
      var clonedElement = elementToClone.cloneNode(true);
      // Continue with the rest of your code
  } else {
      console.error('Element not found. Check the element ID.');
  }
      function triggerFileInput(inputId) {
          $('#' + inputId).trigger('click');
      }

      function displayFileName(input) {
          // Function to display the file name if needed
          var fileName = input.files[0].name;
          console.log("Selected file: " + fileName);
      }

      function displayImagePreview(input, previewId) {
          var preview = $('#' + previewId);
          var file = input.files[0];
          var reader = new FileReader();

          reader.onloadend = function () {
              preview.attr('src', reader.result);
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
              $(this).find('.image-file-input').attr('id', newImageId);
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
              newRow.find('.image-file-input').attr('id', newImageId);
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



<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>

<script>
  $(document).ready(function () {
    jQuery.validator.addMethod("customPhoneNumber", function(value, element) {
            return /^[6-9]\d{9}$/.test(value); 
          }, "Phone number must start with 6 or above");

    $("#rent_list_form_").validate({
      // Specify validation rules
      rules: {
        brand: {
          required: true,
        },
        model: {
          required: true,
        },
        year: {
          required: true,
        },
        textarea_: {
          required: true,
        },
        textarea_d: {
          required: true,
        },
        fname:{
          required: true,
        },
        lname:{
          required: true,
        },
        number:{
          required: true,
          maxlength:10,
          digits: true,
          customPhoneNumber: true
        },
        state_:{
          required: true,
        },
        dist:{
          required: true,
        }
      },
      // Specify validation error messages
      messages: {
        brand: {
          required: "This field is required",
        },
        model: {
          required: "This field is required",
        },
        year: {
          required: "This field is required",
        },
        textarea_: {
          required: "This field is required",
        },
        textarea_d: {
          required:"This field is required",
        },
        fname:{
          required:"This field is required",
        },
        lname:{
          required:"This field is required",
        },
        number:{
          required:"This field is required",
          maxlength:"Enter only 10 digits",
          digits: "Please enter only digits"
        },
        state_:{
          required:"This field is required",
        },
        dist:{
          required:"This field is required",
        }
      },
      
      submitHandler: function (form) {
        alert("Form submitted successfully!");
      },
    });

   
    $("#sub_btn_").on("click", function () {
   
      $("#rent_list_form_").valid();
    
    });
   
  });
</script>



</body>
</html>