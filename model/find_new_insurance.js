const BASE_URL = "https://shopninja.in/bharatagri/api/public/";

//get all insurance data
const API_URL = BASE_URL + "api/customer/get_all_insurance_data_customer";

fetch(API_URL)
  .then((res) => res.json())
  .then((res) => {
    const insuranceData = res.insurance_data;
    const list = document.getElementById("insuranceList");
    insuranceData.forEach((item) => {
      const card = document.createElement("div");
      card.className = "d-flex mb-4";
      card.style.cursor = "pointer";
      card.innerHTML = `
        <div class="cardinsurance-card d-flex gap-5 p-2 justify-content-around align-items-center shadow-sm rounded w-100">
          <img src="${
            BASE_URL + item.images
          }" class="insuranceCompanyImage" alt="${item.name}">
         
            <h5 class="card-title">${item.name}</h5>
            <p class="card-text">₹${item.price}</p>
            <div class="d-flex flex-column gap-2 w-25">
             <a href="insurance2.php?id=${
              item.id
            }">

            <button class="btn viewformbutton w-100 mt-2">Get Quote</button>
              </a>
            <a href="insurance-detail.php?id=${
              item.id
            }">

            <button class="btn viewDetails w-100 mt-2"'>View More</button>
           </a>
            </div>
       
        </div>
      `;
      list.appendChild(card);
    });
  });


function viewInsuranceForm(data) {
  localStorage.setItem("insuranceDetail", JSON.stringify(data));
  window.location.href = "insurance2.php"; // Detail page
}


const detailContainer = document.getElementById("insuranceDetail");
// Assuming you have a way to get the ID of the insurance data you want to display

const urlParams = new URLSearchParams(window.location.search);
const id = urlParams.get("id") 

fetch(`${BASE_URL}api/customer/get_insurance_data_by_id_customer/${id}`)
  .then((response) => response.json())
  .then((response) => {
    const data = response.insurance_data;
    const faqs = response.faqs;
    const faqsContainer = document.getElementById("faqsContainer");
    faqsContainer.innerHTML = ""; // Clear previous content

    if (faqs && faqs.length > 0) {
        faqsContainer.innerHTML = `
            <div class="accordion" id="faqAccordion"></div>
        `;
    
        const accordion = document.getElementById("faqAccordion");
    
        faqs.forEach((faq, index) => {
            const faqItem = document.createElement("div");
            faqItem.className = "accordion-item border mb-2";
    
            faqItem.innerHTML = `
                <h2 class="accordion-header" id="heading${index}">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse${index}" aria-expanded="false" aria-controls="collapse${index}">
                        ${faq.question}
                    </button>
                </h2>
                <div id="collapse${index}" class="accordion-collapse collapse" aria-labelledby="heading${index}" data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        ${faq.answer}
                    </div>
                </div>
            `;
    
            accordion.appendChild(faqItem);
        });
    } else {
        faqsContainer.innerHTML = `<p>No FAQs available.</p>`;
    }
    



    // Check if data is available


    if (data) {
      let rows = "";
      data.data.forEach((entry) => {
        rows += `
          <tr>
            <td>${entry.coverage}</td>
            <td>${entry.deductible}</td>
          </tr>`;
      });

         // Generate FAQ HTML
         let faqHTML = "";
         if (faqs && faqs.length > 0) {
           faqHTML += `
             <div class="card p-3 mt-4">
               <h5 class="mb-3">Frequently Asked Questions:</h5>
               <div class="accordion" id="faqAccordion">`;
   
           faqs.forEach((faq, index) => {
             faqHTML += `
               <div class="accordion-item">
                 <h2 class="accordion-header" id="heading${index}">
                   <button class="accordion-button ${index !== 0 ? 'collapsed' : ''}" type="button" data-bs-toggle="collapse" data-bs-target="#collapse${index}" aria-expanded="${index === 0}" aria-controls="collapse${index}">
                     ${faq.question}
                   </button>
                 </h2>
                 <div id="collapse${index}" class="accordion-collapse collapse ${index === 0 ? 'show' : ''}" aria-labelledby="heading${index}" data-bs-parent="#faqAccordion">
                   <div class="accordion-body">
                     ${faq.answer}
                   </div>
                 </div>
               </div>`;
           });
   
           faqHTML += `
               </div>
             </div>`;
         }
         
      detailContainer.innerHTML = `
        <div class="cardinsurance-card d-flex gap-5 p-2 justify-content-between align-items-center border-bottom w-100 mb-5 flex-wrap">
          <div class="d-flex align-items-center gap-2">
            <img src="${BASE_URL + data.images}" class="insuranceCompanyImage" alt="${data.name}" style="width: 80px; height: auto;">
            <h5 class="card-title mb-0">${data.name}</h5>
          </div>
          <p class="card-text fs-5 fw-bold text-success">₹${data.price}</p>
        </div>

        <div class="card p-3">
          <h5 class="mb-3">Coverage Details:</h5>
          <div class="table-responsive">
            <table class="table table-bordered table-striped">
              <thead class="table-light">
                <tr>
                  <th>Coverage</th>
                  <th>Deductible</th>
                </tr>
              </thead>
              <tbody>${rows}</tbody>
            </table>
          </div>
        </div>
      `;
    } else {
      detailContainer.innerHTML = `<p>No data found.</p>`;
    }
  })
  .catch((error) => {
    console.error("Error fetching insurance data:", error);
    detailContainer.innerHTML = `<p>Error fetching data.</p>`;
  });



//get all tractor data

document.addEventListener("DOMContentLoaded", function () {
  const brandSelect = document.getElementById("brandSelect");
  const modelSelect = document.getElementById("modelSelect");
  const stateSelect = document.getElementById("stateSelect");

  // 1. Populate Tractor Brands
  fetch("http://tractor-api.divyaltech.com/api/customer/get_all_brands")
    .then((res) => res.json())
    .then((data) => {
      data.brands.forEach((brand) => {
        const option = document.createElement("option");
        option.value = brand.id;
        option.textContent = brand.brand_name;
        brandSelect.appendChild(option);
      });
    });

  // 2. Populate Models when Brand is selected
  brandSelect.addEventListener("change", function () {
    const brandId = this.value;
    modelSelect.innerHTML = '<option selected disabled>Select Tractor Model</option>';

    fetch(`${BASE_URL}api/customer/get_brand_model/${brandId}`)
      .then((res) => res.json())
      .then((data) => {
        data.model.forEach((model) => {
          const option = document.createElement("option");
          option.value = model;
          option.textContent = model;
          modelSelect.appendChild(option);
        });
      });
  });

  // 3. Populate States
  fetch(`${BASE_URL}/api/customer/state_data`)
    .then((res) => res.json())
    .then((data) => {
      data.stateData.forEach((state) => {
        const option = document.createElement("option");
        option.value = state.state_name;
        option.textContent = state.state_name;
        stateSelect.appendChild(option);
      });
    });



// 4. Form Submission with Validation
document.getElementById("tractorForm").addEventListener("submit", function (e) {
    e.preventDefault();

    const brandSelect = document.getElementById("brandSelect");
    const modelSelect = document.getElementById("modelSelect");
    const stateSelect = document.getElementById("stateSelect");

    // Validation
    if (!brandSelect.value) {
        alert("Please select a tractor brand.");
        return;
    }

    if (!modelSelect.value) {
        alert("Please select a tractor model.");
        return;
    }

    if (!stateSelect.value) {
        alert("Please select a state.");
        return;
    }

    const urlParams = new URLSearchParams(window.location.search);
    const id = urlParams.get("id");

    const formData = new FormData(this);
    // You can manually append fixed values if needed
    formData.append("enquiry_type_id", "17");
    formData.append("product_subject_id", id);

    fetch(`${BASE_URL}api/customer/get_user_insurance_enquiry_data`, {
        method: "POST",
        body: formData, // No headers needed for FormData
    })
        .then((res) => res.json())
        .then((response) => {
            alert("Form submitted successfully!");
            console.log(response);
        })
        .catch((error) => {
            alert("Something went wrong.");
            console.error(error);
        });
});
});
