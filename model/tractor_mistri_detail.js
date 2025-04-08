

function viewTractorMistri() {
    console.log(window.location)
    var urlParams = new URLSearchParams(window.location.search);
    var Id = urlParams.get('id');
    var url = "https://shopninja.in/bharatagri/api/public/api/customer/tractor_mistri/" + Id; 
    var headers = {
        'Authorization': 'Bearer ' + localStorage.getItem('token')
    };

    $.ajax({
        url,
        headers: headers,
        type: "GET",
        success: function (response) {
            var userData = response.data;
            
           
            // Check if data exists
            if (!userData) {
                console.error("No data found!");
                return;
            }

            // Set text values directly
            document.getElementById('mistri_call').innerText = userData.mobile || " ";
            document.getElementById('description').innerText = userData.description || " ";
            document.getElementById('services').innerText = userData.tractor_services || " ";


            // const model = nursery.model;
            const imageNames = userData.img.split(',').map(img => img.trim());
            const mainImageUrl = `https://shopninja.in/bharatagri/api/public/uploads/${imageNames[0]}`;

           
          

            // Update brand_model (if any)
            const brandModelElements = document.getElementsByClassName('brand_model');
            for (let i = 0; i < brandModelElements.length; i++) {
                brandModelElements[i].innerText = `${nursery_name}`;
            }

            // Main Image
            $('#main-image').attr('src', mainImageUrl);

            // Thumbnails in left bar
            const leftBarContainer = $('#left-bar').empty();

            imageNames.slice(0, 3).forEach(imageName => {
                
                const imageUrl = `https://shopninja.in/bharatagri/api/public/uploads/${imageName}`;
                const image = $(`<img class="img-fluid" style="width: 120px; height: 120px; margin-bottom: 10px; cursor: pointer;" src="${imageUrl}" />`);
                image.on('click', function () {
                    $('#main-image').attr('src', imageUrl);
                });
                leftBarContainer.append(image);
            });
        },
        error: function (error) {
            console.error('Error fetching product:', error);
        }
    });
}




viewTractorMistri();
