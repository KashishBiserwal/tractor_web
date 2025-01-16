
document.getElementById("calculateEMI").addEventListener("click", function() {
  document.getElementById("section_1").style.display = "none";
  document.getElementById("section_2").style.display = "block";
});

  $(document).ready(function() {
    $("#brandModelForm").submit(function(event) {
        event.preventDefault();
        
        var brand = $("#brandSelect").val();
        var model = $("#modelSelect").val();
        const paraArr = {
            'brand_id': brand,
            'model': model,
        };
        var url = "<?php echo $CustomerAPIBaseURL; ?>get_price_by_brand_model";
        
        $.ajax({
            url: url,
            method: "POST",
            data: paraArr,
            success: function(response) {
    if (response.price) {
        var priceData = response.price;
        $("#description").html(priceData.description);
        $("#brand_main").text(priceData.brand_name);
        $("#main_brand").text(priceData.brand_name);
        $("#brand_model").text(priceData.model);

        var startingPrice = parseFloat(priceData.starting_price.replace('Rs. ', ''));
        var formattedPrice = startingPrice * 100000;

        $("#exShowroomPrice").val(formattedPrice);
        $("#downPaymentRange").val(formattedPrice);
        $("#downPaymentRange").attr("max", formattedPrice);
        $("#downPayment").val(formattedPrice);
        $("#downPayment").attr("max", formattedPrice);
        var imageNames = priceData.image_names.split(',');
        var imageUrl = "http://tractor-api.divyaltech.com/uploads/product_img/" + imageNames[0].trim();

        // Update the image source
        $(".img_buy").attr("src", imageUrl);
        updateEMI();
    } else {
        console.error('Price data not found in the response.');
    }
},
            error: function(xhr, textStatus, errorThrown) {
                console.error('Request failed:', textStatus);
                console.error('Error:', xhr.responseText);
            }
        });
    });
});

    document.querySelectorAll('.read-more').forEach(function(button, index) {
        button.addEventListener('click', function() {
            var moreContent = document.querySelectorAll('.more-content')[index];
            var buttonText = button.innerText.trim().toLowerCase();

            if (buttonText === 'read more') {
                moreContent.style.display = 'inline';
                button.innerText = 'Read Less';
            } else {
                moreContent.style.display = 'none';
                button.innerText = 'Read More';
            }
        });
    });

    function addOption(selectElement, optionText) {
        var option = document.createElement("option");
        option.text = optionText;
        selectElement.add(option);
    }
    $(document).ready(function() {
        $("#brandModelForm").validate({
            rules: {
                brandSelect: 'required',
                modelSelect: 'required',
            },
            submitHandler: function (form) {
                }
            });
    
        });

   function get_1() {
    var url = 'http://tractor-api.divyaltech.com/api/customer/get_brand_for_finance';
    $.ajax({
        url: url,
        type: "GET",
        headers: {
            'Authorization': 'Bearer ' + localStorage.getItem('token')
        },
        success: function (data) {
            // console.log(data);
            const select = document.getElementById('brandSelect');
            select.innerHTML = '<option selected disabled value="">Please select an option</option>';
  
            if (data.brands.length > 0) {
                data.brands.forEach(row => {
                    const option = document.createElement('option');
                    option.textContent = row.brand_name;
                    option.value = row.id;
                    // console.log(row.id,);
                    select.appendChild(option);
                });
  
                // Add event listener to brand dropdown
                select.addEventListener('change', function() {
                    const selectedBrandId = this.value;
                    get_model_1(selectedBrandId);
                });
            } else {
                select.innerHTML = '<option>No valid data available</option>';
            }
        },
        error: function (error) {
            console.error('Error fetching data:', error);
        }
    });
  }
  
  function get_model_1(id) {
    var url = 'http://tractor-api.divyaltech.com/api/customer/get_brand_model/' + id;
    $.ajax({
        url: url,
        type: "GET",
        headers: {
            'Authorization': 'Bearer ' + localStorage.getItem('token')
        },
        success: function (data) {
            console.log(data);
            const select = document.getElementById('modelSelect');
            select.innerHTML = '<option selected disabled value="">Please select an option</option>';
  
            if (data.model.length > 0) {
                data.model.forEach(row => {
                    const option = document.createElement('option');
                    option.textContent = row.model;
                    option.value = row.model;
                    select.appendChild(option);
  
                   
                });
            } else {
                select.innerHTML = '<option>No valid data available</option>';
            }
        },
        error: function (error) {
            console.error('Error fetching data:', error);
        }
    });
  }
get_1();


    document.querySelectorAll('.read-more').forEach(function(button, index) {
        button.addEventListener('click', function() {
            var moreContent = document.querySelectorAll('.more-content')[index];
            var buttonText = button.innerText.trim().toLowerCase();

            if (buttonText === 'read more') {
                moreContent.style.display = 'inline';
                button.innerText = 'Read Less';
            } else {
                moreContent.style.display = 'none';
                button.innerText = 'Read More';
            }
        });
    });
    var brandModelData = {
        "Brand 1": ["Model A", "Model B", "Model C"],
        "Brand 2": ["Model X", "Model Y", "Model Z"],
        "Brand 3": ["Model I", "Model II", "Model III"]
    };
    var brandSelect = document.getElementById("brandSelect");
    for (var brand in brandModelData) {
        var option = document.createElement("option");
        option.value = brand;
        option.text = brand;
        brandSelect.add(option);
    }
    function populateModels() {
        var brandSelect = document.getElementById("brandSelect");
        var modelSelect = document.getElementById("modelSelect");

        modelSelect.innerHTML = '<option value="">Select Model</option>';

        var selectedBrand = brandSelect.value;

        var models = brandModelData[selectedBrand];
        if (models) {
            models.forEach(function(model) {
                addOption(modelSelect, model);
            });
        }
    }
    function addOption(selectElement, optionText) {
        var option = document.createElement("option");
        option.text = optionText;
        selectElement.add(option);
    }
    $(document).ready(function() {
        $("#brandModelForm").validate({
            rules: {
                brandSelect: 'required',
                modelSelect: 'required',
            }
        });

    });

        // Update EMI when input values change
        $('#downPayment, #interestRate, #loanPeriod, #repaymentInterval').on('input change', function() {
            updateEMI();
        });

        // Update range slider values when textboxes change
        $('#downPayment').on('input', function() {
            var value = $(this).val() || 0; 
            $('#downPaymentRange').val(value);
            updateEMI();
        });

        $('#interestRate').on('input', function() {
            var value = $(this).val() || 0;  
            $('#interestRateRange').val(value);
            updateEMI();
        });
        $('#downPaymentRange').on('input', function() {
            $('#downPayment').val($(this).val());
            updateEMI();
        });
        $('#interestRateRange').on('input', function() {
            $('#interestRate').val($(this).val());
            updateEMI();
        });
        $('#downPayment').on('input', function() {
            var downPayment = parseFloat($(this).val());
            var errorMessage = $('#downPaymentError');
            if (downPayment < 0 || downPayment > 640000) {
                $(this).addClass('is-invalid');
                errorMessage.text('Downpayment must be between 0 and 640,000.');
            } else {
                $(this).removeClass('is-invalid');
                errorMessage.text('');
            }
        });
        $('#interestRate').on('input', function() {
            var interestRate = parseFloat($(this).val());
            var errorMessage = $('#interestRateError');
            if (interestRate < 11 || interestRate > 25) {
                $(this).addClass('is-invalid');
                errorMessage.text('Interest rate must be between 11 and 25.');
            } else {
                $(this).removeClass('is-invalid');
                errorMessage.text('');
            }
        });

        function updateEMI() {
            var exShowroomPrice = 640000; 
            var downPayment = parseFloat($('#downPayment').val());
            var loanAmount = exShowroomPrice - downPayment;
            var interestRate = parseFloat($('#interestRate').val());
            var loanPeriod = parseInt($('#loanPeriod').val());
            var repaymentInterval = $('#repaymentInterval').val();
            if (downPayment < 0 || downPayment > 640000 || interestRate < 11 || interestRate > 25) {
                return;
            }
            var monthlyInterestRate = (interestRate / 100) / 12;
            var numberOfPayments = loanPeriod;
            var emi;

            if (monthlyInterestRate > 0) {
                emi = (loanAmount * monthlyInterestRate * Math.pow(1 + monthlyInterestRate, numberOfPayments)) /
                    (Math.pow(1 + monthlyInterestRate, numberOfPayments) - 1);
            } else {
                emi = loanAmount / numberOfPayments;
            }
            if (repaymentInterval === 'quarterly') {
                emi *= 3;
                numberOfPayments /= 3;
            } else if (repaymentInterval === 'halfYearly') {
                emi *= 6;
                numberOfPayments /= 6;
            }
            $('#emiAmount').val(`₹${emi.toFixed(2)} ${repaymentInterval}`);
            $('#totalLoanAmount').val(`₹${loanAmount.toFixed(2)}`);
            $('#payableAmount').val(`₹${(emi * numberOfPayments).toFixed(2)}`);
            $('#extraPayment').val(`₹${((emi * numberOfPayments) - loanAmount).toFixed(2)}`);
        }
        updateEMI();

    $(document).ready(function() {
        $("#hire_inner").validate({
            rules: {
                first_name: 'required',

                last_name: 'required',
                mobile_number: {
                    required: true,
                    digits: true, 
                },
                state: "required",
                district: "required",
            }
        });
        $('#button_hire').on('click', function() {
            $('#hire_inner').valid();
            console.log($('#hire_inner').valid());
        });
    });

function updateEMI() {
    var exShowroomPrice = parseFloat($("#exShowroomPrice").val());
    var downPayment = exShowroomPrice * 0.1; // 10% of ex-showroom price
    var loanAmount = exShowroomPrice - downPayment;
    var interestRate = parseFloat($('#interestRate').val()) / 100;
    var loanPeriod = parseInt($('#loanPeriod').val());
    var repaymentInterval = $('#repaymentInterval').val();

    if (isNaN(exShowroomPrice) || isNaN(interestRate) || isNaN(loanPeriod)) {
        return;
    }
    $('#downPayment').val(downPayment.toFixed(2));
    var monthlyInterestRate = interestRate / 12;
    var numberOfPayments = loanPeriod;
    var emi;

    if (monthlyInterestRate > 0) {
        emi = (loanAmount * monthlyInterestRate * Math.pow(1 + monthlyInterestRate, numberOfPayments)) /
            (Math.pow(1 + monthlyInterestRate, numberOfPayments) - 1);
    } else {
        emi = loanAmount / numberOfPayments;
    }

    if (repaymentInterval === 'quarterly') {
        emi *= 3;
        numberOfPayments /= 3;
    } else if (repaymentInterval === 'halfYearly') {
        emi *= 6;
        numberOfPayments /= 6;
    }
    $('#emiAmount').val(`₹${emi.toFixed(2)} ${repaymentInterval}`);
    $('#totalLoanAmount').val(`₹${loanAmount.toFixed(2)}`);
    $('#payableAmount').val(`₹${(emi * numberOfPayments).toFixed(2)}`);
    $('#extraPayment').val(`₹${((emi * numberOfPayments) - loanAmount).toFixed(2)}`);
}
    updateEMI();