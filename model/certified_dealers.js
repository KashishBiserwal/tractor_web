var allDealers = []; // Array to hold all dealers

$(document).ready(function () {
  get_certifieddealers();
});

function get_certifieddealers() {
  var url = CustomerAPIBaseURL + "dealer_data";

  $.ajax({
    url: url,
    type: "GET",
    success: function (data) {
      if (data.dealer_details && data.dealer_details.length > 0) {
        // Reverse the order of the cards to display the latest ones first
        var reversedDealers = data.dealer_details.slice().reverse();

        // Update the list of all dealers
        allDealers = allDealers.concat(reversedDealers);

        // Display the latest 8 dealers at the top in the opposite order
        displaydealer(reversedDealers.slice(0, 8).reverse());

        // Show the "Load More" button if there are remaining dealers
        if (data.dealer_details.length > 8) {
          $("#load_moretract").show();
        }

        // Handle "Load More" button click
        $("#load_moretract").click(function () {
          // Display all dealers in the opposite order
          displaydealer(allDealers.reverse());
          // Hide the "Load More" button
          $("#load_moretract").hide();
        });
      }
    },
    error: function (error) {
      console.error("Error fetching data:", error);
    },
  });
}

function displaydealer(dealers) {
  var productContainer = $("#productContainer");

  // Clear existing content
  productContainer.html("");

  dealers.forEach(function (dealer) {
    var images = dealer.image_names ? dealer.image_names.split(",")[0] : "";
    var newCard = `
    <div class="col-12 col-md-4 px-3 py-3">
        <div class="d-flex border h-100 rounded-4 bg-white ">
            <!-- Image on the right -->
            <div class="ratio ratio-1x1 rounded-end-4 overflow-hidden" style="width: 40%;">
                <img src="${
                  dealer.img
                    ? "https://shopninja.in/bharatagri/api/public/" + dealer.img
                    : "assets/images/IMG-20240516-WA0006.jpg"
                }"
                     class="object-fit-cover w-100 h-100" alt="Dealer Image" loading="lazy">
            </div>
            
            <!-- Content on the left -->
            <div class="p-3 d-flex flex-column justify-content-between" style="width: 60%;">
                <div>
                    <a href="certified_dealers_inner.php?id=${
                      dealer.id
                    }" class="text-decoration-none text-dark">
                        <h5 class="card-title fw-bold text-truncate">${
                          dealer.dealer_name
                        }</h5>
                    </a>
                    <div class="d-flex flex-column gap-1 mt-2">
                        <p class="text-muted small text-truncate"><i class="bi bi-geo-alt"></i> ${
                          dealer.address
                        }</p>
                        <p class="text-muted small"><i class="bi bi-envelope"></i> ${
                          dealer.email
                        }</p>
                        <p class="text-muted small"><i class="bi bi-telephone"></i> ${
                          dealer.mobile
                        }</p>
                    </div>
                </div>
                <a href="certified_dealers_inner.php?id=${
                  dealer.id
                }" class="btn btn-danger mt-3 btn-sm rounded w-100">Contact Dealer</a>
            </div>
        </div>
    </div>
    `;

    // Use prepend to add the new card at the beginning
    productContainer.prepend(newCard);
  });
}

function searchdata() {
  var url =
    "https://shopninja.in/bharatagri/api/public/api/customer/search_for_dealer";
  var token = localStorage.getItem("token");
  var headers = {
    Authorization: "Bearer " + token,
  };

  var brandId = $("#b_brand").val(); // Get selected brand ID
  var stateId = $("#_state").val(); // Get selected state ID
  var districtId = $("#_district").val(); // Get selected district ID

  var data = {
    brand_id: brandId,
    state: stateId,
    district: districtId,
  };

  $.ajax({
    url: url,
    type: "POST",
    data: data,
    headers: headers,
    success: function (response) {
      console.log(response);
      console.log("Data stored successfully !");

      var productContainer = $("#productContainer");
      productContainer.empty(); // Clear existing content

      if (response.dealerData.length > 0) {
        // If there are matches, display the dealer cards in Section 2
        $.each(response.dealerData, function (index, dealer) {
          var images = dealer.image_names
            ? dealer.image_names.split(",")[0]
            : "";

          var newCard = `
                          <div class="col-12 col-md-4 px-3 py-3">
        <div class="d-flex border h-100 rounded-4 bg-white ">
            <!-- Image on the right -->
            <div class="ratio ratio-1x1 rounded-end-4 overflow-hidden" style="width: 40%;">
                <img src="${
                  dealer.img
                    ? "https://shopninja.in/bharatagri/api/public/" + dealer.img
                    : "assets/images/IMG-20240516-WA0006.jpg"
                }"
                     class="object-fit-cover w-100 h-100" alt="Dealer Image" loading="lazy">
            </div>
            
            <!-- Content on the left -->
            <div class="p-3 d-flex flex-column justify-content-between" style="width: 60%;">
                <div>
                    <a href="certified_dealers_inner.php?id=${
                      dealer.id
                    }" class="text-decoration-none text-dark">
                        <h5 class="card-title fw-bold text-truncate">${
                          dealer.dealer_name
                        }</h5>
                    </a>
                    <div class="d-flex flex-column gap-1 mt-2">
                        <p class="text-muted small text-truncate"><i class="bi bi-geo-alt"></i> ${
                          dealer.address
                        }</p>
                        <p class="text-muted small"><i class="bi bi-envelope"></i> ${
                          dealer.email
                        }</p>
                        <p class="text-muted small"><i class="bi bi-telephone"></i> ${
                          dealer.mobile
                        }</p>
                    </div>
                </div>
                <a href="certified_dealers_inner.php?id=${
                  dealer.id
                }" class="btn btn-danger mt-3 btn-sm rounded w-100">Contact Dealer</a>
            </div>
        </div>
    </div>
                    `;

          // Append the new card HTML to the product container
          productContainer.append(newCard);
        });

        // Hide Load More button if all data is displayed
        $("#load_moretract").hide();

        $("#noDataMessage").hide();
      } else {
        productContainer.html(
          '<h5 id="noDataMessage" class="text-center mt-4 text-danger"><img src="assets/images/404.gif" class="w-25" alt=""><br>Data not found..!</h5>'
        );

        $("#load_moretract").hide();
      }
    },
    error: function (xhr, textStatus, errorThrown) {
      if (xhr.status === 404) {
        var productContainer = $("#productContainer");
        productContainer.html(
          '<h5 id="noDataMessage" class="text-center mt-4 text-danger"><img src="assets/images/404.gif" class="w-25" alt=""><br>Data not found..!</h5>'
        );

        $("#load_moretract").hide();
      } else {
        console.error("Error fetching data:", errorThrown);
      }
    },
  });
}

function resetform() {
  $("#certified_dealer_from")[0].reset();
  $("#productContainer").empty();
  $("#noDataMessage").hide();
  get_certifieddealers();
}

function get() {
  var url =
    "https://shopninja.in/bharatagri/api/public/api/customer/get_brand_for_finance";
  $.ajax({
    url: url,
    type: "GET",
    headers: {
      Authorization: "Bearer " + localStorage.getItem("token"),
    },
    success: function (data) {
      const selects = document.querySelectorAll("#b_brand");
      selects.forEach((select) => {
        select.innerHTML =
          '<option selected disabled value="">Please select an option</option>';
        if (data.brands.length > 0) {
          data.brands.forEach((row) => {
            const option = document.createElement("option");
            option.textContent = row.brand_name;
            option.value = row.id;
            select.appendChild(option);
          });
        } else {
          select.innerHTML = "<option>No valid data available</option>";
        }
      });
    },
    error: function (error) {
      console.error("Error fetching data:", error);
    },
  });
}
get();
