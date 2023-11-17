<!DOCTYPE html>
<html lang="en">
  <head> <?php
   include 'includes/headertag.php';
   ?> 
  </head>
  <style>
     .form-outline .form-label {
  color: #454444;
  font-weight: 500;
  margin-bottom: 5px;
  position: absolute;
  margin-top: -12px;
  background: #fff;
  margin-left: 20px;
}
  </style>
  <body> <?php
   include 'includes/header.php';
   ?> <section class=" mt-5 pt-5 bg-light">
      <div class="container pt-3">
        <div class="py-2">
          <span class="text-white ">
            <a href="index.php" class="text-decoration-none header-link px-1">Home <i class="fa-solid fa-chevron-right px-1"></i>
            </a>
            <span class="">
              <span class="text-dark header-link  px-1">Enquiries <i class="fa-solid fa-chevron-right px-1"></i>
              </span>
            </span>
            <span class="text-dark">All Loan</span>
          </span>
        </div>
      </div>
    </section>
      <!--Banner-->
      <div class="container-fluid">
      <div class="row siv" id="">
        <img src="assets/images/tt.png" alt="reload img" class="w-100" style="height: 350px;">
        <div class="container-mid">
          <div class="row justify-content-center loan_form bg-light border border-dark">
          <h3 class="text-dark text-center mt-2">Secure Your Loan with the Best Rates</h3>
          <h6 class="text-dark text-center mt-2">Provide Your Details to Access Exclusive Loan Options</h6>
          
          <div class="col-12 col-sm-12 col-md-4 col-lg-4 mt-4">
              <div class="form-outline">
                <label class="form-label">Loan Type</label>
                <select class="form-select py-2" aria-label="Default select example">
                    <option value="#"></option>
                    <option value="1">New Tractor Loan</option>
                    <option value="2"> Used Tractor Loan,</option>
                    <option value="3">Loan Against Tractor</option>
                    <option value="4">Harvester Loan</option>
                    <option value="5">Used Harvester Loan</option>
                    <option value="6">Implement Loan</option>
                    <option value="7">Personal Loan</option>
                </select>
              </div>
            </div>
                  <div class="col-12 col-sm-12 col-md-4 col-lg-4 mt-4">
                  <div class="form-outline">
                    <label class="form-label">First Name</label>
                    <input type="text" id="name"  name="search_name" class=" data_search form-control input-group-sm py-2"/>
                  </div>
              </div>
              <div class="col-12 col-sm-12 col-md-4 col-lg-4 mt-4">
                  <div class="form-outline">
                    <label class="form-label">Last Name</label>
                    <input type="text" id="name"  name="search_name" class=" data_search form-control input-group-sm py-2"/>
                  </div>
              </div>
              <div class="col-12 col-sm-12 col-md-4 col-lg-4 mt-4">
                  <div class="form-outline">
                    <label class="form-label">Mobile Number</label>
                    <input type="text" id="name"  name="search_name" class=" data_search form-control input-group-sm py-2"/>
                  </div>
              </div>
              <div class="col-12 col-sm-12 col-md-4 col-lg-4 mt-4">
              <div class="form-outline">
                <label class="form-label">Brand</label>
                <select class="form-select py-2" aria-label="Default select example">
                    <option selected></option>
                    <option value="1">name1</option>
                    <option value="2">name2</option>
                    <option value="3">name3</option>
                </select>
              </div>
            </div>
            <div class="col-12 col-sm-12 col-md-4 col-lg-4 mt-4">
              <div class="form-outline">
                <label class="form-label">Model</label>
                <select class="form-select py-2" aria-label="Default select example">
                    <option selected></option>
                    <option value="1">name1</option>
                    <option value="2">name2</option>
                    <option value="3">name3</option>
                </select>
              </div>
            </div>
            <div class="col-12 col-sm-12 col-md-4 col-lg-4 mt-4">
                  <div class="form-outline">
                    <label class="form-label">Enter Model</label>
                    <input type="text" id="name"  name="search_name" class=" data_search form-control input-group-sm py-2"/>
                  </div>
              </div>
              <div class="col-12 col-sm-12 col-md-4 col-lg-4 mt-4">
                  <div class="form-outline">
                    <label class="form-label">Vehicle Registered Number</label>
                    <input type="text" id="name"  name="search_name" class=" data_search form-control input-group-sm py-2"/>
                  </div>
              </div>
                  
              <div class="col-12 col-sm-12 col-md-4 col-lg-4 mt-4">
              <div class="form-outline">
                <label class="form-label">Registered Year</label>
                <select class="form-select py-2" aria-label="Default select example">
                    <option selected></option>
                    <option value="1">name1</option>
                    <option value="2">name2</option>
                    <option value="3">name3</option>
                </select>
              </div>
            </div>
            <div class="col-12 col-sm-12 col-md-4 col-lg-4 mt-4">
              <div class="form-outline">
                <label class="form-label">State</label>
                <select class="form-select py-2" aria-label="Default select example">
                    <option selected></option>
                    <option value="1">name1</option>
                    <option value="2">name2</option>
                    <option value="3">name3</option>
                </select>
              </div>
            </div>
            <div class="col-12 col-sm-12 col-md-4 col-lg-4 mt-4">
              <div class="form-outline">
                <label class="form-label">District</label>
                <select class="form-select py-2" aria-label="Default select example">
                    <option selected></option>
                    <option value="1">name1</option>
                    <option value="2">name2</option>
                    <option value="3">name3</option>
                </select>
              </div>
            </div>
            <div class="col-12 col-sm-12 col-md-4 col-lg-4 mt-4">
              <div class="form-outline">
                <label class="form-label">Tehsil</label>
                <select class="form-select py-2" aria-label="Default select example">
                    <option selected></option>
                    <option value="1">name1</option>
                    <option value="2">name2</option>
                    <option value="3">name3</option>
                </select>
              </div>
            </div>
                  
                  
            <div class="col-12">
              <p class=" mt-3 "> Claims Made in Previous Policy</p>
              <div class="form-check form-check-inline ">
                <input class="form-check-input" type="radio" id="inlineCheckbox1" name="x" value="option1">
                <label class="form-check-label text-dark" for="inlineCheckbox1">Yes</label>
              </div>
              <div class="form-check form-check-inline text-center">
                <input class="form-check-input" type="radio" id="inlineCheckbox2" name="x" value="option2">
                <label class="form-check-label text-dark" for="inlineCheckbox2">No</label>
              </div>
            </div>
            <p class="text-center">By proceeding ahead you expressly agree to the Tractor Junctions <a href="#">Terms & Conditions*</a></p>
            <div class="d-grid col-8 mx-auto mb-3">
              <button type="submit" class="btn btn-success fw-bold">Apply for Loan</button>
            </div>
          </div>
        </div>
      </div>
    </div>
    </div>
    </div>
    <!--Banner End-->
    <!--Banner-->
    <!-- <div class="container-fluid">
      <div class="row siv" id="">
        <img src="assets/images/tt.png" alt="reload img" class="w-100">
        <div class="page-banner-content text-center position-absolute px-2">
          <h1 class="text-dark mt-4">Apply for New Tractor Loan</h1>
          <h6>Please fill the form to Get Your Loan</h6>
        </div>
        <div class="container-mid">
          <div class="row justify-content-center loan_form bg-light">
            <div class="col-md-6 mt-3">
              <input type="text" class="form-control" id="firstName" placeholder="Name">
            </div>
            <div class="col-md-6 mt-3">
              <input type="tel" class="form-control" id="lastName" placeholder="Mobile Number">
            </div>
            <div class="col-md-6 mt-3">
              <select class="form-control">
                <option>Select Brand</option>
                <option>Select Brand</option>
                <option>Select Brand</option>
                <option>Select Brand</option>
              </select>
            </div>
            <div class="col-md-6 mt-3">
              <select class="form-control">
                <option>Select Model</option>
                <option>Select Model</option>
                <option>Select Model</option>
                <option>Select Model</option>
              </select>
            </div>
            <div class="col-md-6 mt-3">
              <input type="text" class="form-control" id="state" placeholder="Enter Model">
            </div>
            <div class="col-md-6 mt-3">
              <input type="text" class="form-control" id="district" placeholder="Vehicle Registered Number">
            </div>
            <div class="col-md-6 mt-3">
              <select class="form-control">
                <option>Registered Year</option>
                <option>Registered Year</option>
                <option>Registered Year</option>
                <option>Registered Year</option>
              </select>
            </div>
            <div class="col-md-6 mt-3">
              <select class="form-control">
                <option>Select State</option>
                <option>Select State</option>
                <option>Select State</option>
                <option>Select State</option>
              </select>
            </div>
            <div class="col-12">
              <p class=" mt-3"> Claims Made in Previous Policy</p>
              <div class="form-check form-check-inline text-center">
                <input class="form-check-input" type="radio" id="inlineCheckbox1" name="x" value="option1">
                <label class="form-check-label text-dark" for="inlineCheckbox1">Yes</label>
              </div>
              <div class="form-check form-check-inline text-center">
                <input class="form-check-input" type="radio" id="inlineCheckbox2" name="x" value="option2">
                <label class="form-check-label text-dark" for="inlineCheckbox2">No</label>
              </div>
            </div>
            <p class="text-center mb-3">By Proceeding ahead you expressly agree to the Tractor Junctions Terms & Conditions</p>
            <div class="d-grid col-10 mx-auto mb-2">
              <button type="submit" class="btn btn-primary">Apply For Loan</button>
            </div>
          </div>
        </div>
      </div>
    </div>
    </div>
    </div>  -->
    <!--Banner End-->
    <!--Loan Section Start-->
    <!-- <div id="id1" class="alert alert-primary my-5 d-block" role="alert">
        <div class="container bg-light ">
          <div class="section-heading mb-2 mt-5 text-center">
            <h3 class="text-dark fw-bold">New Tractor Loan in 4 Steps</h3>
            <p class="mb-2">Get New tractor loan quickly by these 4 steps.</p>
          </div>

          <div class="row mt-4">
            <div class="col-12 col-sm-3 col-lg-3 col-md-3">
              <div class="why_con text-center">
                <img src="assets/images/icon-step-1.png" class=" mb-3 " alt="step1" style="width:40px;">
                <img src="assets/images/form.png" class="w-25 h-auto mb-3" alt="form">
                <h5 class="text-dark">Fill the Form</h5>
                <p class="mb-0 oneline text-dark">These details make the process quick.</p>
              </div>
            </div>
            <div class="col-12 col-sm-3 col-lg-3 col-md-3">
              <div class="why_con text-center">
                <img src="assets/images/icon-step-2.png" class=" mb-3 " alt="step2" style="width:40px;">
                <img src="assets/images/compare1.png" class="w-25 h-auto mb-3 " alt="compare">
                <h5 class="text-dark">Compare Offers</h5>
                <p class="mb-0 oneline text-dark">Choose the best loan offer for you.</p>
              </div>
            </div>
            <div class="col-12 col-sm-3 col-lg-3 col-md-3">
              <div class="why_con text-center">
                <img src="assets/images/icon-step-3.png" class="mb-3 " alt="step3" style="width:40px;">
                <img src="assets/images/approve.png" class="w-25 h-auto mb-3 " alt="approval">
                <h5 class="text-dark">Instant Approval</h5>
                <p class="mb-0 oneline text-dark">Get immediate approval from the bank.</p>
              </div>
            </div>
            <div class="col-12 col-sm-3 col-lg-3 col-md-3">
              <div class="why_con text-center">
                <img src="assets/images/icon-step-4.png" class=" mb-3 " alt="step4" style="width:40px;">
                <img src="assets/images/bank.png" class="w-25 h-auto mb-3 " alt="bank">
                <h5 class="text-dark">Money in your Account</h5>
                <p class="mb-0 oneline text-dark">You can get instant money in an account.</p>
              </div>
            </div>
          </div>
        </div>
      </div>  -->

      <!--/Loan Section End-->
      <!-- <section> 
        <div class="container bg-light my-5">
          <div class="col-12 assured mt-3">
            <h4 class="fw-bold p-2">Tractor Loan Translates to a New Way Of Farming!</h4>
          </div>
          <div>
            <p class="mt-3">We understand the importance of buying a trustworthy tractor to boost the productivity of agriculture. That's why Tractor Junction provides tailor-made loan solutions catering to your requirements and financial capacity. Now, you can drive towards success with the power of modern farming equipment. Don't let financial constraints hold you back from owning a tractor. </p>
            <p class="mt-3">Before buying a tractor for your farm, knowing the interest rates on tractor loans from various banks is vital. This helps you make an informed decision and find the best financing option for your agricultural investment. Compare rates to find the most suitable choice, Also Tractor Loan EMI Calculator tool is a perfect way to calculate your tractor EMI.</p>
          </div>
        </div>
      </section> -->
      <!-- Your Loan Path: Types and Eligibility Table -->


      <div class="container mt-4">
      <div class="text-center mb-3">
    <h3 class="text-dark fw-bold">Your Loan Path: Types and Eligibility</h3>
  </div>
  <table class="table table-bordered table-responsive mt-4 border border-dark">
    <thead>
      <tr class="text-center">
        <th>Type of Loan</th>
        <th>Eligibility</th>
        <th>Documents</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>New Tractor/ New Harvester</td>
        <td><li>Age 18 years to 65 years</li>
           <li>Income proof & minimum land holding of 2 acres</li>
        <td>
          <li>Land ownership proof.</li>
            <li>Aadhar Card/Voter Id/Passport/Driving license</li>
            <li>3 months bank statement</li>
            <li> CV 12 months track record</li>
       </tr>
      <tr>
        <td>Used Tractor/ Used Harvester</td>
        <td>
        <li>Age 18 years to 65 years</li>
         <li>Satisfactory prior credit history</li>
        </td>
        <td>
          <li>Land ownership proof.</li>
          <li>Aadhar Card/Voter Id/Passport/Driving license</li>
          <li>3 months bank statement</li>
          <li>CV 12 months track record</li>
          <li>Used tractor RC</li>
          <li>Used tractor insurance</li>
        </td>
      </tr>
      <tr>
        <td>Loan Against Tractor</td>
        <td>
          <li>Owner of tractor</li>
          <li>Proof of ownership</li>
          <li>Need to have paid at least 12 EMIs of Current Loan</li>
        </td>
        <td>
          <li>Proof of ownership (RC)</li>
          <li>Bank account statement</li>
          <li>KYC Documents</li>
          <li>Pan Card</li>
        </td>
      </tr>
      <tr>
      <td>Implement</td>
        <td>
          <li> Age 18 years to 65 years</li>
          <li>Satisfactory prior credit history</li>
         
        </td>
        <td>
          <li>Land ownership proof.</li>
          <li>Aadhar Card/Voter Id/Passport/Driving license</li>
          <li>3 months bank statement</li>
          <li>CV 12 months track record</li>
        </td>
        
      </tr>
      <tr>
      <td>Personal Loan</td>
        <td>
          <li>Personal loan eligibility depends on the lender's policy.</li>
          
        </td>
        <td>
          <li>Photo</li>
          <li>Aadhar Card/Voter Id/Passport/Driving license</li>
          <li>3 months bank statement</li>
          <li> Latest salary statement as Proof of Income</li>
        </td>
      </tr>
    </tbody>
  </table>
</div>

      <!-- Your Loan Path: Types and Eligibility Table End -->
      <!--Table Content-->
      <div class="container bg-light">
        <div class="section-heading mb-2  text-center ">
          <h3 class="text-dark fw-bold">Tractor Loan Interest Rate Comparison</h3>
          <p class="mb-2">Compare the new tractor loan interest rate below.</p>
        </div>
        <div class="row text-center">
          <table class="mb-3 table table-bordered border border-dark" style=" background-color:#77bd57;">
            <tbody>
              <thead>
                <tr> 
                  <th>Bank Name</th>
                  <th>Interest Rate</th>
                  <th>Loan Amount</th>
                  <th>Loan Tenure</th>
                </tr>
              </thead>
            <tbody>
              <tr>
                <td>ICICI Bank</td>
                <td>13% p.a. to 22% p.a.</td>
                <td>As per terms and conditions</td>
                <td>Up to 5 years</td>
              </tr>
              <tr>
                <td>State Bank of India </td>
                <td>9.00% p.a. - 10.25% p.a.</td>
                <td>Up to 100% finance</td>
                <td>Up to 5 years</td>
              </tr>
              <tr>
                <td>HDFC Bank</td>
                <td>12.57% p.a. to 23.26% p.a.*</td>
                <td>Up to 90% finance </td>
                <td> 12 months to 84 months</td>
              </tr>
              <tr>
                <td>Poonawalla Fincorp</td>
                <td>16% p.a. to 20% p.a.</td>
                <td> Up to 90% - 95% finance </td>
                <td>According to bank</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
      <!--Table Content End-->
      <!--New Tractor Loan Eligibility-->
      <div class="container bg-light mt-4">
        <div class="section-heading mb-2  text-center ">
          <h3 class="text-dark fw-bold">New Tractor Loan Eligibility</h3>
          <p class="mb-2">Check down below eligibility for a new tractor loan.</p>
        </div>
        <div class="row">
          <p>
            <i class="	fa fa-check-circle text-success px-2"></i>18 years - Minimum Age
          </p>
          <p>
            <i class="fa fa-check-circle text-success px-2"></i>65 years - Maximum Age
          </p>
          <p>
            <i class="fas fa-check-circle text-success px-2"></i>Income Proof and minimum land holding of 2 acres
          <p>
        </div>
      </div>
      <!--New Tractor Loan Eligibility End-->
      <!--Tractor Loan Docs.--->
      <div class="container bg-light">
        <div class="section-heading mb-2  text-center ">
          <h3 class="text-dark fw-bold">Tractor Loan Documents</h3>
          <p class="mb-2">Documents required for new tractor loan.</p>
        </div>
        <div class="row">
          <p>
            <i class="	fa fa-check-circle text-success px-2"></i>Land Ownership Proof
          </p>
          <p>
            <i class="fa fa-check-circle text-success px-2"></i>Address Proof : Aadhaar Card or Any one of Voter ID / Passport / Driving License
          </p>
          <p>
            <i class="fas fa-check-circle text-success px-2"></i>3 months bank statement
          </p>
          <p>
            <i class="fas fa-check-circle text-success px-2"></i>CV 12 months track record
          </p>
          <p>
            <i class="fas fa-check-circle text-success px-2"></i>Identity Proof : Aadhaar Card or Any one of Voter ID / PAN Card / Driving License / Passport
          </p>
        </div>
      </div>
      <!--Tractor Loan Docs end-->
      <!--Tractor Loan Interest Rate All Bank 2023-->
      <section>
        <div class="container my-4 bg-light">
          <div class="col-12 assured mt-3">
            <h3 class="fw-bold p-2">Tractor Loan Interest Rate All Bank 2023</h3>
          </div>
          <div>
            <p class="mt-3">Discovering the leading tractor loan financing firms, their characteristics, and rates can assist you in identifying the perfect interest rate option for your tractor loan requirements. Below we have discussed various tractor loans, tractor loan interest rates and tractor loan interest rates for your ease. You will find a detailed SBI Tractor Loan, HDFC Tractor Loan and Bank of Baroda Tractor Loan information here. Tractor Junction has partnered with L&T Finance, HDFC Bank, Kotak Mahindra Bank, and HDB Finance to offer you a range of flexible financing solutions to make your tractor purchase smooth and easy. </p>
          </div>
          <div class="col-12 assured mt-4">
            <h5 class="fw-bold p-2">SBI Tractor Loan</h5>
          </div>
          <div>
            <p>SBI, or State Bank of India, offers tractor loans to farmers and individuals looking to purchase tractors for agricultural or commercial purposes. SBI's tractor loan is available to anyone with at least 2 acres of land ownership. The interest rate starts at 9% onwards. You can also calculate your EMIs on the SBI tractor loan EMI calculator. It has attractive features, competitive interest rates, and flexible repayment options. </p>
          </div>
          <div class="col-12 assured mt-4">
            <h5 class="fw-bold p-2">Key Features</h5>
          </div>
          <div class="mt-4">
            <p>
              <i class="fa fa-key text-success px-2" aria-hidden="true"></i>To qualify for the loan, the borrower must have a regular income, and a 15% margin is required.
            </p>
            <p>
              <i class="fa fa-key text-success px-2" aria-hidden="true"></i>The borrower must take insurance for the tractor/accessories after the loan.
            </p>
            <p>
              <i class="fa fa-key text-success px-2" aria-hidden="true"></i>The lender charges a 0.5% upfront fee on the loan amount.
            </p>
          </div>
          <div class="col-12 assured mt-2">
            <h5 class="fw-bold p-2">HDFC Tractor Loan</h5>
          </div>
          <div>
            <p>HDFC Bank provides tractor loans to farmers and non-farmers, whether they want to buy a new or used tractor. The bank offers an attractive interest rate and fast approval, usually within 30 minutes. It also offers a hassle-free documentation process for applying for an <b class="text-primary">HDFC tractor loan.</b> Check out below to know more about the Key features: </p>
          </div>
          <div class="col-12 assured mt-4">
            <h5 class="fw-bold p-2">Key Features</h5>
          </div>
          <div class="mt-4">
            <p>
              <i class="fa fa-key text-success px-2" aria-hidden="true"></i>Prospective borrowers can get up to 90% of the tractor's price as a loan.
            </p>
            <p>
              <i class="fa fa-key text-success px-2" aria-hidden="true"></i>Borrowers can repay the loan conveniently through post-dated cheques, ECS, SI, etc.
            </p>
            <p>
              <i class="fa fa-key text-success px-2" aria-hidden="true"></i>Tractor loans can be availed with or without submitting collateral, providing flexibility to applicants.
            </p>
            <p>
              <i class="fa fa-key text-success px-2" aria-hidden="true"></i>Applicants must be at least 18 to be eligible for this loan.
            </p>
            <p>
              <i class="fa fa-key text-success px-2" aria-hidden="true"></i>The bank charges a processing fee of 2% of the loan amount.
            </p>
            <span>With these features and benefits, HDFC Bank's tractor loan is a reliable and convenient option for individuals looking to purchase tractors for their agricultural or personal needs.</span>
          </div>
          <div class="col-12 assured mt-4">
            <h5 class="fw-bold p-2">ICICI Tractor Loan</h5>
          </div>
          <div>
            <p>The ICICI tractor loan starts at 13.0%, whereas the ICICI tractor interest rate is 16.%. ICICI also provides an EMI calculator tractor loan to help you calculate EMI, interest rate and eligibility. ICICI Bank offers a tractor loan with eligibility for farmers and non-farmers, financing a certain percentage of the tractor's cost. </p>
          </div>
          <div class="col-12 assured mt-4">
            <h5 class="fw-bold p-2">Key Features</h5>
          </div>
          <div class="mt-4">
            <p>
              <i class="fa fa-key text-success px-2" aria-hidden="true"></i>The bank ensures flexibility in repayment options, where the tractor serves as collateral, simplifying the application process.
            </p>
            <p>
              <i class="fa fa-key text-success px-2" aria-hidden="true"></i>Additionally, borrowers benefit from attractive interest rates, quick loan processing, and minimal documentation requirements for ease of application.
            </p>
          </div>
          <div class="col-12 assured mt-4">
            <h5 class="fw-bold p-2">Poonawalla Fincorp Ltd Tractor Loans</h5>
          </div>
          <div>
            <p>Magma Fincorp, a prominent financial institution, provides tractor loans for new and used tractors nationwide. The loan service provider serves farmers in Telangana, Andhra Pradesh, Maharashtra, Tamil Nadu, Punjab, Madhya Pradesh, Uttar Pradesh, Rajasthan, Kerala, Karnataka, Orissa, West Bengal, Bihar, Jharkhand, Haryana, and Gujarat, among different spots. They make loan accessibility easier for those living in village areas. </p>
          </div>
          <div class="col-12 assured mt-4">
            <h5 class="fw-bold p-2">Key Features</h5>
          </div>
          <div class="mt-4">
            <p>
              <i class="fa fa-key text-success px-2 " aria-hidden="true"></i>The documentation process Magma Fincorp tractor loan is smooth and uncomplicated. Borrowers can opt for monthly, quarterly, or half-yearly repayments.
            </p>
            <p>
              <i class="fa fa-key text-success px-2" aria-hidden="true"></i>New tractor loans are available for existing customers without needing to submit land-holding documents.
            </p>
            <p>
              <i class="fa fa-key text-success px-2 " aria-hidden="true"></i>Borrowed loans can be foreclosed six months after disbursement, with preclosure charges set at 5% of the outstanding principal.
            </p>
          </div>
          <div class="col-12 assured mt-4">
            <h5 class="fw-bold p-2">Types of Documents Required for Tractor Loan</h5>
          </div>
          <div>
            <p>If you are applying for a tractor loan, you need to fulfil some legal requirements to avail loan easily. Below you can check out some essential documents required for Tractor Loan: </p>
          </div>
          <div class="mt-4">
            <p>
              <i class="fa-solid fa-file text-success px-2"></i> <b>Identification Proof:</b>Aadhar card, passport, driver's license.
            </p>
            <p>
              <i class="fa-solid fa-file  text-success px-2" aria-hidden="true"></i><b>Address Proof:</b> Utility bills, rental agreement, voter ID.
            </p>
            <p>
              <i class="fa-solid fa-file  text-success px-2 " aria-hidden="true"></i><b>Income Proof:</b> Salary slips, income tax returns, bank statements.
            </p>
            <p>
              <i class=" fa-solid fa-file text-success px-2" aria-hidden="true"></i><b>Business Proof:</b> Business license, and registration documents.
            </p>
            <p>
              <i class="fa-solid fa-file text-success px-2" aria-hidden="true"></i><b>Collateral Documents: </b>Land ownership proof, property documents.
            </p>
            <p>
              <i class="fa-solid fa-file  text-success px-2" aria-hidden="true"></i><b>Loan Application:</b> Filled and signed loan application form.
            </p>
            <p>
              <i class="fa-solid fa-file  text-success px-2" aria-hidden="true"></i><b>Quotation:</b> Tractor purchase quotation from the dealer.
            </p>
            <p>
              <i class="fa-solid fa-file  text-success px-2" aria-hidden="true"></i><b>Credit History:</b> Credit score and history report.
            </p>
            <p>
              <i class="fa-solid fa-file  text-success px-2" aria-hidden="true"></i><b>Guarantor Documents: </b>If applicable, identification and income proof of guarantor.
            </p>
            <p>
              <i class="fa-solid fa-file  text-success px-2" aria-hidden="true"></i><b>Legal Documents:</b> Any legal clearances or documents the lender requires.
            </p>
          </div>
          <div class="col-12 assured mt-4">
            <h5 class="fw-bold p-2">Why Is Tractor Junction Best For Tractor Loans?</h5>
          </div>
          <div>
            <p>Tractor Junction is considered a reliable choice for tractor loans for farmers due to the following reasons:</p>
          </div>
          <div class="mt-4">
            <p>
              <i class="fa-solid fa-leaf text-success px-1"></i>Tractor Junction specialises in agricultural equipment, particularly tractors, trucks and bikes. Therefore, this specialisation ensures a better understanding of farmers' loan requirements.
            </p>
            <p>
              <i class="fa-solid fa-leaf text-success px-1"></i>Tractor Junction has a wide network of dealers, lenders, and financial institutions, making connecting farmers with suitable loan options easier.
            </p>
            <p>
              <i class="fa-solid fa-leaf text-success px-1"></i>It offers tailored loan solutions based on individual farmer requirements, ensuring flexibility and a better fit for their financial situation.
            </p>
            <p>
              <i class="fa-solid fa-leaf text-success px-1"></i>To maintain transparency in loan terms, interest rates, and fees, ensuring farmers understand the financial commitment clearly.
            </p>
            <p>
              <i class="fa-solid fa-leaf text-success px-1"></i>Farmers can access Tractor Junction's services online, making the loan application and approval process more convenient and accessible, especially for those in remote areas.
            </p>
          </div>
          <div class="col-12 assured mt-4">
            <h5 class="fw-bold p-2">Get your Tractor Loan from leading lenders today!</h5>
          </div>
          <div>
            <p>Since third-party insurance is mandatory under Motor Vehicle Act, Why don't you check out Tractor Insurance for all-around protection? Get more info here​- Tractor Insurance.</p>
          </div>
        </div>
      </section>
      <!--Tractor Loan Interest Rate All Bank 2023 End-->
      <!--Question Section-->
      <section class="about bg-light">
        <div class="container">
          <div class="lecture_heading text-center">
            <h3 class="fw-bold mt-4 pt-4">FAQs on New Tractor Loan</h3>
            <p>Check out the frequently asked questions below.</p>
          </div>
          <div class="mt-4 pb-5">
            <div class="accordion " id="accordionFlushExample">
              <div class="accordion-item  rounded-3">
                <h2 class="accordion-header p-2" id="flush-headingOne">
                  <button class="accordion-button collapsed fw-bold h4" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne"> Que. Who can apply for a tractor loan? </button>
                </h2>
                <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                  <div class="accordion-body">
                    <p class="text-dark">Ans. All the cultivators and farmland owners can apply for a tractor loan.</p>
                  </div>
                </div>
              </div>
              <div class="accordion-item rounded-3 my-3">
                <h2 class="accordion-header p-2" id="flush-headingTwo">
                  <button class="accordion-button collapsed  fw-bold h4" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo"> Que. How long does repayment take, and what is the repayment rate for a tractor loan? </button>
                </h2>
                <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                  <div class="accordion-body">
                    <p class="text-dark">Ans. Tractor loan repayment takes around 60 months/5 years, and the repayment period will decide according to the customer's repayment capacity.</p>
                  </div>
                </div>
              </div>
              <div class="accordion-item  rounded-3 my-3">
                <h2 class="accordion-header p-2" id="flush-headingThree">
                  <button class="accordion-button collapsed  fw-bold h4" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree"> Que. Do I have to mortgage a property to get a tractor loan? </button>
                </h2>
                <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                  <div class="accordion-body">
                    <p class="text-dark">Ans.No, you don’t have to mortgage property to get a tractor loan.</p>
                  </div>
                </div>
              </div>
              <div class="accordion-item  rounded-3 my-3">
                <h2 class="accordion-header p-2" id="flush-heading4">
                  <button class="accordion-button collapsed  fw-bold h4" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse4" aria-expanded="false" aria-controls="flush-collapse4"> Que. Do I have to provide a guarantor when applying for a tractor loan? </button>
                </h2>
                <div id="flush-collapse4" class="accordion-collapse collapse" aria-labelledby="flush-heading4" data-bs-parent="#accordionFlushExample">
                  <div class="accordion-body">
                    <p class="text-dark">Ans. No, you have not required a guarantor when applying for a tractor loan.</p>
                  </div>
                </div>
              </div>
              <div class="accordion-item  rounded-3 my-3">
                <h2 class="accordion-header p-2" id="flush-heading5">
                  <button class="accordion-button collapsed  fw-bold h4" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse5" aria-expanded="false" aria-controls="flush-collapse5"> Que. Is a co-borrower required when applying for a tractor loan? </button>
                </h2>
                <div id="flush-collapse5" class="accordion-collapse collapse" aria-labelledby="flush-heading5" data-bs-parent="#accordionFlushExample">
                  <div class="accordion-body">
                    <p class="text-dark">Ans. Yes, a co-borrower is required when applying for a tractor loan.</p>
                  </div>
                </div>
              </div>
              <div class="accordion-item  rounded-3 my-3">
                <h2 class="accordion-header p-2" id="flush-heading6">
                  <button class="accordion-button collapsed  fw-bold h4" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse6" aria-expanded="false" aria-controls="flush-collapse6"> Que. What documents are required when applying for a tractor loan? </button>
                </h2>
                <div id="flush-collapse6" class="accordion-collapse collapse" aria-labelledby="flush-heading6" data-bs-parent="#accordionFlushExample">
                  <div class="accordion-body">
                    <p class="text-dark">Ans. Documents required for a tractor loan are duly filled in an application form, KYC (Identity proof and Address proof), Latest passport size photos, Loan Statements in case of existing loans and Land Documents.</p>
                  </div>
                </div>
              </div>
              <div class="accordion-item  rounded-3 my-3">
                <h2 class="accordion-header p-2" id="flush-headingoil">
                  <button class="accordion-button collapsed  fw-bold h4" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseoil" aria-expanded="false" aria-controls="flush-collapseoil"> Que. What are the minimum and maximum deposit limits? </button>
                </h2>
                <div id="flush-collapseoil" class="accordion-collapse collapse" aria-labelledby="flush-headingoil" data-bs-parent="#accordionFlushExample">
                  <div class="accordion-body">
                    <p class="text-dark">Ans. The difference between the tractor price and the loan amount is the margin. So now the choice is for the borrower to select the margin option according to their needs.</p>
                  </div>
                </div>
              </div>
              <div class="accordion-item  rounded-3 my-3">
                <h2 class="accordion-header p-2" id="flush-heading7">
                  <button class="accordion-button collapsed  fw-bold h4" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse7" aria-expanded="false" aria-controls="flush-collapse7"> Que. How long does it take to process and approve a tractor loan? </button>
                </h2>
                <div id="flush-collapse7" class="accordion-collapse collapse" aria-labelledby="flush-heading7" data-bs-parent="#accordionFlushExample">
                  <div class="accordion-body">
                    <p class="text-dark">Ans.The processing and approval of a tractor loan take 3 working days, provided the documents are complete.</p>
                  </div>
                </div>
              </div>
              <div class="accordion-item  rounded-3 my-3">
                <h2 class="accordion-header p-2" id="flush-heading8">
                  <button class="accordion-button collapsed  fw-bold h4" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse8" aria-expanded="false" aria-controls="flush-collapse8"> Que. What is the total amount of credit that can be released for a tractor loan? </button>
                </h2>
                <div id="flush-collapse8" class="accordion-collapse collapse" aria-labelledby="flush-heading8" data-bs-parent="#accordionFlushExample">
                  <div class="accordion-body">
                    <p class="text-dark">Ans. The total amount of credit that can be released for a tractor loan is 90% of the tractor price.</p>
                  </div>
                </div>
              </div>
              <div class="accordion-item  rounded-3 my-3">
                <h2 class="accordion-header p-2" id="flush-heading9">
                  <button class="accordion-button collapsed  fw-bold h4" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse9" aria-expanded="false" aria-controls="flush-collapse9"> Que. Can I close or repay a tractor loan early? </button>
                </h2>
                <div id="flush-collapse9" class="accordion-collapse collapse" aria-labelledby="flush-heading9" data-bs-parent="#accordionFlushExample">
                  <div class="accordion-body">
                    <p class="text-dark">Ans. Repayment and closure are not allowed for up to 6 months. After that, you can repay and close the loan with some charges mentioned in the loan agreement.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>  
      <!--Question Section End-->
      <!---Apply For Other Loan-->
      <section>
        <div class="container bg-light">
          <div class="section-heading mb-2  text-center ">
            <h3 class="text-dark fw-bold">Apply For Other Loan</h3>
            <p class="mb-2">Check out these loan types for your other needs.</p>
          </div>
          <div class="row mb-4">
            <div class="col-sm-4">
              <div class="card">
                <div class="card-body text-center" style="background-color: #e6eff5;">
                  <img src="assets\images\Tractor-Loan-2.jpg" style="width: 300px; height: 150px;">
                  <h6 class="card-title mt-3">USED TRACTOR LOAN</h6>
                  <a href="#" class="btn btn-success mt-2 ">
                    <i class="fa-solid fa-circle-info px-1"></i> Check Details </a>
                </div>
              </div>
            </div>
            <div class="col-sm-4">
              <div class="card">
                <div class="card-body text-center" style="background-color: #e6eff5;">
                  <img src="assets\images\tractor_loan.avif" style="width: 300px; height: 150px;">
                  <h6 class="card-title mt-3">LOAN AGAINST TRACTOR</h6>
                  <a href="#" class="btn btn-success mt-2">
                    <i class="fa-solid fa-circle-info  px-1"></i> Check Details </a>
                </div>
              </div>
            </div>
            <div class="col-sm-4">
              <div class="card">
                <div class="card-body text-center" style="background-color: #e6eff5;">
                  <img src="assets\images\Get-a-1.png" style="width: 300px; height: 150px;">
                  <h6 class="card-title mt-3">PERSONAL LOAN</h6>
                  <a href="#" class="btn btn-success mt-2">
                    <i class="fa-solid fa-circle-info  px-1"></i> Check Details </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!---Apply For Other Loan End-->
    </div>
    <!--Page-1 End New Tractor Loan -->
    <!--Page-2 Used Tractor Loan Page-->
    <!--Loan Section Start-->
    <div id="id2" class="alert alert-secondary my-5 d-none" role="alert">
      <div class="container bg-light">
        <div class="section-heading mb-2  text-center ">
          <h3 class="text-dark fw-bold">Used Tractor Loan in 3 easy steps</h3>
          <p class="mb-2">Instant used tractor loan in just 3 easy steps.</p>
        </div>
        <div class="row mt-4">
          <div class="col-12 col-sm-4 col-lg-4 col-md-4">
            <div class="why_con text-center">
              <img src="assets/images/icon-step-1.png" class=" mb-3 " alt="step1" style="width:40px;">
              <img src="assets/images/form.png" class="w-25 h-auto mb-3" alt="form">
              <h5 class="text-dark">Check Eligibility</h5>
              <p class="mb-0 oneline text-dark">You have to match your eligibility first.</p>
            </div>
          </div>
          <div class="col-12 col-sm-4 col-lg-4 col-md-4">
            <div class="why_con text-center">
              <img src="assets/images/icon-step-2.png" class=" mb-3" alt="step2" style="width:40px;">
              <img src="assets/images/select.png" class="w-25 h-auto mb-3" alt="compare">
              <h5 class="text-dark">Select from 55000+ Used Tractors</h5>
              <p class="mb-0 oneline text-dark">Choose the perfect used tractor for you.</p>
            </div>
          </div>
          <div class="col-12 col-sm-4 col-lg-4 col-md-4">
            <div class="why_con text-center">
              <img src="assets/images/icon-step-3.png" class="mb-3 " alt="step3" style="width:40px;">
              <img src="assets/images/home.png" class="w-25 h-auto mb-3 " alt="approval">
              <h5 class="text-dark">Take your tractor home</h5>
              <p class="mb-0 oneline text-dark">Fix your delivery date according to you.</p>
            </div>
          </div>
        </div>
      </div>
      <!--/Loan Section End-->
      <!--Table Content-->
      <div class="container bg-light mt-4">
        <div class="section-heading mb-2  text-center ">
          <h3 class="text-dark fw-bold">Tractor Loan Interest Rate Comparison</h3>
          <p class="mb-2">Compare the new tractor loan interest rate below.</p>
        </div>
        <div class="row text-center">
          <table class="mb-3 table table-bordered" style=" background-color:#77bd57;">
            <tbody>
              <thead>
                <tr>
                  <th>Bank Name</th>
                  <th>Interest Rate</th>
                  <th>Loan Amount</th>
                  <th>Loan Tenure</th>
                </tr>
              </thead>
            <tbody>
              <tr>
                <td>ICICI Bank</td>
                <td>13% p.a. to 22% p.a.</td>
                <td>As per terms and conditions</td>
                <td>Up to 5 years</td>
              </tr>
              <tr>
                <td>State Bank of India </td>
                <td>9.00% p.a. - 10.25% p.a.</td>
                <td>Up to 100% finance</td>
                <td>Up to 5 years</td>
              </tr>
              <tr>
                <td>HDFC Bank</td>
                <td>12.57% p.a. to 23.26% p.a.*</td>
                <td>Up to 90% finance </td>
                <td> 12 months to 84 months</td>
              </tr>
              <tr>
                <td>Poonawalla Fincorp</td>
                <td>16% p.a. to 20% p.a.</td>
                <td> Up to 90% - 95% finance </td>
                <td>According to bank</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
      <!--Table Content End-->
      <!--Old Tractor Loan Eligibility-->
      <div class="container bg-light mt-4">
        <div class="section-heading mb-2  text-center ">
          <h3 class="text-dark fw-bold">Used Tractor Loan Eligibility</h3>
          <p class="mb-2">Check out, are you eligible for a used tractor loan?</p>
        </div>
        <div class="row">
          <p>
            <i class="	fa fa-check-circle text-success px-2"></i>Farmers, as well as individuals, who use tractors for farming or commercial use.
          </p>
          <p>
            <i class="fa fa-check-circle text-success px-2"></i>Prior credit history should be satisfactory (if any)
          </p>
        </div>
      </div>
      <!--Old Tractor Loan Eligibility End-->
      <!--Tractor Loan Docs.--->
      <div class="container bg-light">
        <div class="section-heading mb-2  text-center ">
          <h3 class="text-dark fw-bold">Tractor Loan Documents</h3>
          <p class="mb-2">Necessary documents for immediate loan.</p>
        </div>
        <div class="row">
          <p>
            <i class="	fa fa-check-circle text-success px-2"></i>Land Ownership Proof
          </p>
          <p>
            <i class="fa fa-check-circle text-success px-2"></i>Identity Proof : Aadhaar Card or Any one of Voter ID / PAN Card / Driving License / Passport
          </p>
          <p>
            <i class="fas fa-check-circle text-success px-2"></i>Address Proof : Aadhaar Card or Any one of Voter ID / Passport / Driving License
          </p>
          <p>
            <i class="fas fa-check-circle text-success px-2"></i>3 months bank statement
          </p>
          <p>
            <i class="fas fa-check-circle text-success px-2"></i>CV 12 months track record
          </p>
          <p>
            <i class="fas fa-check-circle text-success px-2"></i>Used Tractor RC
          </p>
          <p>
            <i class="fas fa-check-circle text-success px-2"></i>Used Tractor Insurance
          </p>
        </div>
      </div>
      <!--Tractor Loan Docs end-->
      <!--Question Section-->
      <section class="about bg-light">
        <div class="container">
          <div class="lecture_heading text-center">
            <h3 class="fw-bold mt-4 pt-4">FAQs on Used Tractor Loan</h3>
            <p>Some frequently asked questions and answers.</p>
          </div>
          <div class="mt-4 pb-5">
            <div class="accordion " id="accordionFlushExample">
              <div class="accordion-item  rounded-3">
                <h2 class="accordion-header p-2" id="flush-headingOne">
                  <button class="accordion-button collapsed fw-bold h4" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne"> Que.What is the Interest rate of a used Tractor Loan? </button>
                </h2>
                <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                  <div class="accordion-body">
                    <p class="text-dark">Ans.9.00% - 23.26% is the interest rate of a used tractor loan.</p>
                  </div>
                </div>
              </div>
              <div class="accordion-item rounded-3 my-3">
                <h2 class="accordion-header p-2" id="flush-headingTwo">
                  <button class="accordion-button collapsed  fw-bold h4" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo"> Que.Where can I get a hustle free used tractor loan? </button>
                </h2>
                <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                  <div class="accordion-body">
                    <p class="text-dark">Ans.You can get hustle free used tractor loan at Tractor Junction.</p>
                  </div>
                </div>
              </div>
              <div class="accordion-item  rounded-3 my-3">
                <h2 class="accordion-header p-2" id="flush-headingThree">
                  <button class="accordion-button collapsed  fw-bold h4" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree"> Que.What is the margin to buy a second hand tractor on loan? </button>
                </h2>
                <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                  <div class="accordion-body">
                    <p class="text-dark">Ans. 15% is the margin to buy a second hand tractor on loan.</p>
                  </div>
                </div>
              </div>
              <div class="accordion-item  rounded-3 my-3">
                <h2 class="accordion-header p-2" id="flush-heading4">
                  <button class="accordion-button collapsed  fw-bold h4" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse4" aria-expanded="false" aria-controls="flush-collapse4"> Que. How much time will it take to approve a used tractor loan? </button>
                </h2>
                <div id="flush-collapse4" class="accordion-collapse collapse" aria-labelledby="flush-heading4" data-bs-parent="#accordionFlushExample">
                  <div class="accordion-body">
                    <p class="text-dark">Ans.You can immediately get money in your bank account after applying for a used tractor loan.</p>
                  </div>
                </div>
              </div>
              <div class="accordion-item  rounded-3 my-3">
                <h2 class="accordion-header p-2" id="flush-heading5">
                  <button class="accordion-button collapsed  fw-bold h4" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse5" aria-expanded="false" aria-controls="flush-collapse5"> Que.What is the maximum amount of used tractor loan? </button>
                </h2>
                <div id="flush-collapse5" class="accordion-collapse collapse" aria-labelledby="flush-heading5" data-bs-parent="#accordionFlushExample">
                  <div class="accordion-body">
                    <p class="text-dark">Ans.You can get up to 90% of the tractor's price as a loan.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!--Question Section End-->
      <!---Apply For Other Loan-->
      <section>
        <div class="container bg-light">
          <div class="section-heading mb-2  text-center ">
            <h3 class="text-dark fw-bold">Apply For Other Loan</h3>
            <p class="mb-2">Check out these loan types for your other needs.</p>
          </div>
          <div class="row mb-4">
            <div class="col-sm-4">
              <div class="card">
                <div class="card-body text-center" style="background-color: #e6eff5;">
                  <img src="assets\images\new-tractors.jpg" style="width: 300px; height: 150px;">
                  <h6 class="card-title mt-3">NEW TRACTOR LOAN</h6>
                  <a href="#" class="btn btn-success mt-2 ">
                    <i class="fa-solid fa-circle-info px-2"></i> Check Details </a>
                </div>
              </div>
            </div>
            <div class="col-sm-4">
              <div class="card">
                <div class="card-body text-center" style="background-color: #e6eff5;">
                  <img src="assets\images\tractor_loan.avif" style="width: 300px; height: 150px;">
                  <h6 class="card-title mt-3">LOAN AGAINST TRACTOR</h6>
                  <a href="#" class="btn btn-success mt-2">
                    <i class="fa-solid fa-circle-info px-2"></i> Check Details </a>
                </div>
              </div>
            </div>
            <div class="col-sm-4">
              <div class="card">
                <div class="card-body text-center" style="background-color: #e6eff5;">
                  <img src="assets\images\Get-a-1.png" style="width: 300px; height: 150px;">
                  <h6 class="card-title mt-3">PERSONAL LOAN</h6>
                  <a href="#" class="btn btn-success mt-2">
                    <i class="fa-solid fa-circle-info px-2"></i> Check Details </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
    <!---Apply For Other Loan End-->
    <!--Page-2 Used Tractor Loan Page End-->
    <!---Page-3 Loan Against Tractor-->
    <!--Loan Section Start-->
    <div id="id3" class="alert alert-success d-none my-5" role="alert">
      <div class="container bg-light ">
        <div class="section-heading mb-2  text-center ">
          <h3 class="text-dark fw-bold">Loan Against Tractor in 4 Steps</h3>
          <p class="mb-2">Get a loan against tractor quickly by following steps.</p>
        </div>
        <div class="row mt-4">
          <div class="col-12 col-sm-3 col-lg-3 col-md-3">
            <div class="why_con text-center">
              <img src="assets/images/icon-step-1.png" class=" mb-3 " alt="step1" style="width:40px;">
              <img src="assets/images/form.png" class="w-25 h-auto mb-3" alt="form">
              <h5 class="text-dark">Check Eligibility</h5>
              <p class="mb-0 oneline text-dark">Check the eligibility for the loan first.</p>
            </div>
          </div>
          <div class="col-12 col-sm-3 col-lg-3 col-md-3">
            <div class="why_con text-center">
              <img src="assets/images/icon-step-2.png" class=" mb-3 " alt="step2" style="width:40px;">
              <img src="assets/images/compare1.png" class="w-25 h-auto mb-3 " alt="compare">
              <h5 class="text-dark">Compare Offers</h5>
              <p class="mb-0 oneline text-dark">Choose the best loan offer for you.</p>
            </div>
          </div>
          <div class="col-12 col-sm-3 col-lg-3 col-md-3">
            <div class="why_con text-center">
              <img src="assets/images/icon-step-3.png" class="mb-3 " alt="step3" style="width:40px;">
              <img src="assets/images/approve.png" class="w-25 h-auto mb-3 " alt="approval">
              <h5 class="text-dark">Instant Approval</h5>
              <p class="mb-0 oneline text-dark">Get immediate approval from the bank.</p>
            </div>
          </div>
          <div class="col-12 col-sm-3 col-lg-3 col-md-3">
            <div class="why_con text-center">
              <img src="assets/images/icon-step-4.png" class=" mb-3 " alt="step4" style="width:40px;">
              <img src="assets/images/bank.png" class="w-25 h-auto mb-3 " alt="bank">
              <h5 class="text-dark">Get Money in Your Account</h5>
              <p class="mb-0 oneline text-dark">You can get instant money without mortgage your tractor.</p>
            </div>
          </div>
        </div>
      </div>
      <!--/Loan Section End-->
      <!--Table Content-->
      <div class="container bg-light">
        <div class="section-heading mb-2  text-center ">
          <h3 class="text-dark fw-bold">Loan Against Tractor Interest Rate Comparison</h3>
          <p class="mb-2">Compare the loan against tractor interest rate below.</p>
        </div>
        <div class="row text-center">
          <table class="mb-3 table table-bordered" style=" background-color:#77bd57;">
            <tbody>
              <thead>
                <tr>
                  <th>Bank Name</th>
                  <th>Interest Rate</th>
                  <th>Loan Amount</th>
                  <th>Loan Tenure</th>
                </tr>
              </thead>
            <tbody>
              <tr>
                <td>ICICI Bank</td>
                <td>13% p.a. to 22% p.a.</td>
                <td>As per terms and conditions</td>
                <td>Up to 5 years</td>
              </tr>
              <tr>
                <td>State Bank of India </td>
                <td>9.00% p.a. - 10.25% p.a.</td>
                <td>Up to 100% finance</td>
                <td>Up to 5 years</td>
              </tr>
              <tr>
                <td>HDFC Bank</td>
                <td>12.57% p.a. to 23.26% p.a.*</td>
                <td>Up to 90% finance </td>
                <td> 12 months to 84 months</td>
              </tr>
              <tr>
                <td>Poonawalla Fincorp</td>
                <td>16% p.a. to 20% p.a.</td>
                <td> Up to 90% - 95% finance </td>
                <td>According to bank</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
      <!--Table Content End-->
      <!--Loan Against Tractor Eligibility-->
      <div class="container bg-light mt-4">
        <div class="section-heading mb-2  text-center ">
          <h3 class="text-dark fw-bold">Loan Against Tractor Eligibility</h3>
          <p class="mb-2">Check down below eligibility for loan against tractor.</p>
        </div>
        <div class="row">
          <p>
            <i class="	fa fa-check-circle text-success px-2"></i>An owner of a tractor is eligible.
          </p>
          <p>
            <i class="fa fa-check-circle text-success px-2"></i>Must Have Proof of Ownership
          </p>
          <p>
            <i class="fas fa-check-circle text-success px-2"></i>Need to have paid at least 12 EMIs of Current Loan
          <p>
        </div>
      </div>
      <!--Loan Against Tractor Eligibility-->
      <!--Tractor Loan Docs.--->
      <div class="container bg-light">
        <div class="section-heading mb-2  text-center ">
          <h3 class="text-dark fw-bold">Loan Against Tractor Documents</h3>
          <p class="mb-2">Documents required for a loan against tractor</p>
        </div>
        <div class="row">
          <p>
            <i class="	fa fa-check-circle text-success px-2"></i>Proof of Ownership (Original RC)
          </p>
          <p>
            <i class="fa fa-check-circle text-success px-2"></i>bank account statement
          </p>
          <p>
            <i class="fas fa-check-circle text-success px-2"></i>KYC documents
          </p>
          <p>
            <i class="fas fa-check-circle text-success px-2"></i>Copy of PAN card
          </p>
        </div>
      </div>
      <!--Tractor Loan Docs end-->
      <!--Question Section-->
      <section class="about bg-light">
        <div class="container">
          <div class="lecture_heading text-center">
            <h3 class="fw-bold mt-4 pt-4">FAQs on Loan Against Tractor</h3>
            <p>Check out the frequently asked questions below.</p>
          </div>
          <div class="mt-4 pb-5">
            <div class="accordion " id="accordionFlushExample">
              <div class="accordion-item  rounded-3">
                <h2 class="accordion-header p-2" id="flush-headingOne">
                  <button class="accordion-button collapsed fw-bold h4" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne"> Que.What is the Interest rate of a Loan Against Tractor? </button>
                </h2>
                <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                  <div class="accordion-body">
                    <p class="text-dark">Ans.9.00% to 23.26% is the interest rate of a Loan Against Tractor.</p>
                  </div>
                </div>
              </div>
              <div class="accordion-item rounded-3 my-3">
                <h2 class="accordion-header p-2" id="flush-headingTwo">
                  <button class="accordion-button collapsed  fw-bold h4" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo"> Que.How can I get complete details about a loan against tractor? </button>
                </h2>
                <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                  <div class="accordion-body">
                    <p class="text-dark">Ans.At Tractor Junction, you can get complete details about a loan against tractor.</p>
                  </div>
                </div>
              </div>
              <div class="accordion-item  rounded-3 my-3">
                <h2 class="accordion-header p-2" id="flush-headingThree">
                  <button class="accordion-button collapsed  fw-bold h4" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree"> Que.How much time will it take to approve a loan against tractor? </button>
                </h2>
                <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                  <div class="accordion-body">
                    <p class="text-dark">Ans. You can immediately get after applying for a loan against tractor.</p>
                  </div>
                </div>
              </div>
              <div class="accordion-item  rounded-3 my-3">
                <h2 class="accordion-header p-2" id="flush-heading4">
                  <button class="accordion-button collapsed  fw-bold h4" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse4" aria-expanded="false" aria-controls="flush-collapse4"> Que. Who is eligible for a loan against tractor? </button>
                </h2>
                <div id="flush-collapse4" class="accordion-collapse collapse" aria-labelledby="flush-heading4" data-bs-parent="#accordionFlushExample">
                  <div class="accordion-body">
                    <p class="text-dark">Ans.The owner of a tractor is eligible for a loan against tractor.</p>
                  </div>
                </div>
              </div>
              <div class="accordion-item  rounded-3 my-3">
                <h2 class="accordion-header p-2" id="flush-heading5">
                  <button class="accordion-button collapsed  fw-bold h4" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse5" aria-expanded="false" aria-controls="flush-collapse5"> Que.Will I have to mortgage my tractor for loan against tractor? </button>
                </h2>
                <div id="flush-collapse5" class="accordion-collapse collapse" aria-labelledby="flush-heading5" data-bs-parent="#accordionFlushExample">
                  <div class="accordion-body">
                    <p class="text-dark">Ans. No, you will not have to mortgage your tractor for loan against tractor.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!--Question Section End-->
      <!---Apply For Other Loan-->
      <section>
        <div class="container bg-light">
          <div class="section-heading mb-2  text-center ">
            <h3 class="text-dark fw-bold">Apply For Other Loan</h3>
            <p class="mb-2">Check out these loan types for your other needs.</p>
          </div>
          <div class="row mb-4">
            <div class="col-sm-4">
              <div class="card">
                <div class="card-body text-center" style="background-color: #e6eff5;">
                  <img src="assets\images\new-tractors.jpg" style="width: 300px; height: 150px;">
                  <h6 class="card-title mt-3">NEW TRACTOR LOAN</h6>
                  <a href="#" class="btn btn-success mt-2 ">
                    <i class="fa-solid fa-circle-info px-2"></i> Check Details </a>
                </div>
              </div>
            </div>
            <div class="col-sm-4">
              <div class="card">
                <div class="card-body text-center" style="background-color: #e6eff5;">
                  <img src="assets\images\Tractor-Loan-2.jpg" style="width: 300px; height: 150px;">
                  <h6 class="card-title mt-3">USED TRACTOR LOAN</h6>
                  <a href="#" class="btn btn-success mt-2">
                    <i class="fa-solid fa-circle-info px-2"></i>Check Details </a>
                </div>
              </div>
            </div>
            <div class="col-sm-4">
              <div class="card">
                <div class="card-body text-center" style="background-color: #e6eff5;">
                  <img src="assets\images\Get-a-1.png" style="width: 300px; height: 150px;">
                  <h6 class="card-title mt-3">PERSONAL LOAN</h6>
                  <a href="#" class="btn btn-success mt-2">
                    <i class="fa-solid fa-circle-info px-2"></i> Check Details </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
    <!---Apply For Other Loan End-->
    <!---Page-3 Loan Against Tractor End-->
    <!---Page-4 Get Personal Loan-->
    <!--Loan Section Start-->
    <div id="id4" class="alert alert-success my-5 d-none" role="alert">
      <div class="container bg-light ">
        <div class="section-heading mb-2  text-center ">
          <h3 class="text-dark fw-bold">Get Personal Loan in 4 simple steps</h3>
          <p class="mb-2">Instant Personal loan by following these 4 steps</p>
        </div>
        <div class="row mt-4">
          <div class="col-12 col-sm-3 col-lg-3 col-md-3">
            <div class="why_con text-center">
              <img src="assets/images/icon-step-1.png" class=" mb-3 " alt="step1" style="width:40px;">
              <img src="assets/images/form.png" class="w-25 h-auto mb-3" alt="form">
              <h5 class="text-dark">Fill your details</h5>
              <p class="mb-0 oneline text-dark">You have to fill in your personal details</p>
            </div>
          </div>
          <div class="col-12 col-sm-3 col-lg-3 col-md-3">
            <div class="why_con text-center">
              <img src="assets/images/icon-step-2.png" class=" mb-3 " alt="step2" style="width:40px;">
              <img src="assets/images/select.png" class="w-25 h-auto mb-3 " alt="compare">
              <h5 class="text-dark">Select Loan Amount</h5>
              <p class="mb-0 oneline text-dark">Then, select the amount of personal loan</p>
            </div>
          </div>
          <div class="col-12 col-sm-3 col-lg-3 col-md-3">
            <div class="why_con text-center">
              <img src="assets/images/icon-step-3.png" class="mb-3 " alt="step3" style="width:40px;">
              <img src="assets/images/choose2.png" class="w-25 h-auto mb-3 " alt="approval">
              <h5 class="text-dark">Choose Bank Account</h5>
              <p class="mb-0 oneline text-dark">Now, you have to select bank account</p>
            </div>
          </div>
          <div class="col-12 col-sm-3 col-lg-3 col-md-3">
            <div class="why_con text-center">
              <img src="assets/images/icon-step-4.png" class=" mb-3 " alt="step4" style="width:40px;">
              <img src="assets/images/bank.png" class="w-25 h-auto mb-3 " alt="bank">
              <h5 class="text-dark">Instant Money in Account</h5>
              <p class="mb-0 oneline text-dark">You get money in your account instantly</p>
            </div>
          </div>
        </div>
      </div>
      <!--/Loan Section End-->
      <!--Table Content-->
      <div class="container bg-light">
        <div class="section-heading mb-2  text-center ">
          <h3 class="text-dark fw-bold">Tractor Loan Interest Rate Comparison</h3>
          <p class="mb-2">Compare the new tractor loan interest rate below.</p>
        </div>
        <div class="row text-center">
          <table class="mb-3 table table-bordered" style=" background-color:#77bd57;">
            <tbody>
              <thead>
                <tr>
                  <th>Bank Name</th>
                  <th>Interest Rate</th>
                  <th>Loan Amount</th>
                  <th>Loan Tenure</th>
                </tr>
              </thead>
            <tbody>
              <tr>
                <td>ICICI Bank</td>
                <td>13% p.a. to 22% p.a.</td>
                <td>As per terms and conditions</td>
                <td>Up to 5 years</td>
              </tr>
              <tr>
                <td>State Bank of India </td>
                <td>9.00% p.a. - 10.25% p.a.</td>
                <td>Up to 100% finance</td>
                <td>Up to 5 years</td>
              </tr>
              <tr>
                <td>HDFC Bank</td>
                <td>12.57% p.a. to 23.26% p.a.*</td>
                <td>Up to 90% finance </td>
                <td> 12 months to 84 months</td>
              </tr>
              <tr>
                <td>Poonawalla Fincorp</td>
                <td>16% p.a. to 20% p.a.</td>
                <td> Up to 90% - 95% finance </td>
                <td>According to bank</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
      <!--Table Content End-->
      <!--Personal Loan Eligibility-->
      <div class="container bg-light mt-4">
        <div class="section-heading mb-2  text-center ">
          <h3 class="text-dark fw-bold">Personal Loan Eligibility</h3>
          <p class="mb-2">Check your eligibility for personal loan</p>
        </div>
        <div class="row">
          <p>
            <i class="	fa fa-check-circle text-success px-2"></i>Personal loan eligibility depends on the lender's policy.
          </p>
        </div>
      </div>
      <!--New Tractor Loan Eligibility End-->
      <!--Tractor Loan Docs.--->
      <!-- <div class="container bg-light">
        <div class="section-heading mb-2  text-center ">
          <h3 class="text-dark fw-bold">Personal Loan Documents</h3>
          <p class="mb-2">Following are documents for personal loan</p>
        </div>
        <div class="row">
          <p>
            <i class="	fa fa-check-circle text-success px-2"></i>Photo
          </p>
          <p>
            <i class="fa fa-check-circle text-success px-2"></i>Address Proof such as Electricity bill, Passport
          </p>
          <p>
            <i class="fas fa-check-circle text-success px-2"></i>Bank statements
          </p>
          <p>
            <i class="fas fa-check-circle text-success px-2"></i>Identity Proof such as PAN card, Driving License
          </p>
          <p>
            <i class="fas fa-check-circle text-success px-2"></i>Latest salary statement as Proof of Income
          </p>
        </div>
      </div>  -->
      <!--Tractor Loan Docs end-->
      <!--Question Section-->
      <!-- <section class="about bg-light"> 
        <div class="container">
          <div class="lecture_heading text-center">
            <h3 class="fw-bold mt-4 pt-4">FAQs on Personal Loan</h3>
            <p>Check out the frequently asked questions below.</p>
          </div>
          <div class="mt-4 pb-5">
            <div class="accordion " id="accordionFlushExample">
              <div class="accordion-item  rounded-3">
                <h2 class="accordion-header p-2" id="flush-headingOne">
                  <button class="accordion-button collapsed fw-bold h4" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne"> Que.What is the Interest rate of a Personal Loan? </button>
                </h2>
                <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                  <div class="accordion-body">
                    <p class="text-dark">Ans.11.00% - 24.00% is the Interest rate of a Personal Loan.</p>
                  </div>
                </div>
              </div>
              <div class="accordion-item rounded-3 my-3">
                <h2 class="accordion-header p-2" id="flush-headingTwo">
                  <button class="accordion-button collapsed  fw-bold h4" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo"> Que. Where can I get a personal loan online? </button>
                </h2>
                <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                  <div class="accordion-body">
                    <p class="text-dark">Ans. You can get a personal loan online at Tractor Junction.</p>
                  </div>
                </div>
              </div>
              <div class="accordion-item  rounded-3 my-3">
                <h2 class="accordion-header p-2" id="flush-headingThree">
                  <button class="accordion-button collapsed  fw-bold h4" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree"> Que. Which are the documents required to get the personal loan? </button>
                </h2>
                <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                  <div class="accordion-body">
                    <p class="text-dark">Ans. Photo, identity proof, Address Proof, income proof and bank statement.</p>
                  </div>
                </div>
              </div>
              <div class="accordion-item  rounded-3 my-3">
                <h2 class="accordion-header p-2" id="flush-heading4">
                  <button class="accordion-button collapsed  fw-bold h4" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse4" aria-expanded="false" aria-controls="flush-collapse4"> Que. Why Tractor Junction for personal loan? </button>
                </h2>
                <div id="flush-collapse4" class="accordion-collapse collapse" aria-labelledby="flush-heading4" data-bs-parent="#accordionFlushExample">
                  <div class="accordion-body">
                    <p class="text-dark"> Tractor Junction is an authentic platform which connects you with India’s leading bank. You can also compare interest rates, EMI and others.</p>
                  </div>
                </div>
              </div>
              <div class="accordion-item  rounded-3 my-3">
                <h2 class="accordion-header p-2" id="flush-heading5">
                  <button class="accordion-button collapsed  fw-bold h4" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse5" aria-expanded="false" aria-controls="flush-collapse5"> Que. What is the age to avail personal loan? </button>
                </h2>
                <div id="flush-collapse5" class="accordion-collapse collapse" aria-labelledby="flush-heading5" data-bs-parent="#accordionFlushExample">
                  <div class="accordion-body">
                    <p class="text-dark">Ans. 23-57 years is the age to avail the personal loan.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section> -->
      <!--Question Section End-->
      <!---Apply For Other Loan-->
      <!-- <section> 
        <div class="container bg-light">
          <div class="section-heading mb-2  text-center ">
            <h3 class="text-dark fw-bold">Apply For Other Loan</h3>
            <p class="mb-2">Check out these loan types for your other needs.</p>
          </div>
          <div class="row mb-4">
            <div class="col-sm-4">
              <div class="card">
                <div class="card-body text-center" style="background-color: #e6eff5;">
                  <img src="assets\images\new-tractors.jpg" style="width: 300px; height: 150px;">
                  <h6 class="card-title mt-3">NEW TRACTOR LOAN</h6>
                  <a href="#" class="btn btn-success mt-2 ">
                    <i class="fa-solid fa-circle-info px-2"></i> Check Details </a>
                </div>
              </div>
            </div>
            <div class="col-sm-4">
              <div class="card">
                <div class="card-body text-center" style="background-color: #e6eff5;">
                  <img src="assets\images\Tractor-Loan-2.jpg" style="width: 300px; height: 150px;">
                  <h6 class="card-title mt-3">USED TRACTOR LOAN</h6>
                  <a href="#" class="btn btn-success mt-2">
                    <i class="fa-solid fa-circle-info px-2"></i> Check Details </a>
                </div>
              </div>
            </div>
            <div class="col-sm-4">
              <div class="card">
                <div class="card-body text-center" style="background-color: #e6eff5;">
                  <img src="assets\images\tractor_loan.avif" style="width: 300px; height: 150px;">
                  <h6 class="card-title mt-3">LOAN AGAINST TRACTOR</h6>
                  <a href="#" class="btn btn-success mt-2">
                    <i class="fa-solid fa-circle-info px-2"></i> Check Details </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>  -->
    <!---Apply For Other Loan End-->
    <!---Page-4 Get Personal Loan End--> <?php
    include 'includes/footer.php';
    include 'includes/footertag.php';

    ?> 
    <!-- <script>
      function button1() {
        console.log('button1');
        const id1 = document.getElementById('id1');
        id1.style.display = 'block';
        const id2 = document.getElementById('id2');
        id2.style.display = 'none';
        const id3 = document.getElementById('id3');
        id3.style.display = 'none';
        const id4 = document.getElementById('id4');
        id4.style.display = 'none';
      }

      function button2() {
        console.log('button2');
        const id1 = document.getElementById('id1');
        id1.style.display = 'none';
        const id2 = document.getElementById('id2');
        id2.style.display = 'block';
        const id3 = document.getElementById('id3');
        id3.style.display = 'none';
        const id4 = document.getElementById('id4');
        id4.style.display = 'none';
      }

      function button3() {
        console.log('button3');
        const id1 = document.getElementById('id1');
        id1.style.display = 'none';
        const id2 = document.getElementById('id2');
        id2.style.display = 'none';
        const id3 = document.getElementById('id3');
        id3.style.display = 'block';
        const id4 = document.getElementById('id4');
        id4.style.display = 'none';
      }

      function button4() {
        console.log('button4');
        const id1 = document.getElementById('id1');
        id1.style.display = 'none';
        const id2 = document.getElementById('id2');
        id2.style.display = 'none';
        const id3 = document.getElementById('id3');
        id3.style.display = 'none';
        const id4 = document.getElementById('id4');
        id4.style.display = 'block';
      }
    </script>  -->
  </body>
</html>