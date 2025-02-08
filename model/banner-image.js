function previewImage(input, index) {
    const reader = new FileReader();
    reader.onload = function (e) {
      const imgElement = document.getElementById(`preview-img-${index}`);
      imgElement.src = e.target.result;
      imgElement.style.display = 'block'; // Ensure the image is visible after preview
    };
    if (input.files && input.files[0]) {
      reader.readAsDataURL(input.files[0]);
    }
  }
  
  function generateAndReplace() {
    const canvas = document.getElementById('card-canvas');
    const ctx = canvas.getContext('2d');
    const card = document.getElementById('card-container');
  
    // Collect uploaded images and descriptions
    const uploadedImages = [];
    const uploadedTexts = [];
    for (let i = 0; i < 8; i++) { // Adjust for total possible images
      const imgElement = document.getElementById(`preview-img-${i}`);
      const inputText = document.getElementById(`input-${i}`).value;
      if (imgElement.src && imgElement.src !== window.location.href) {
        uploadedImages.push(imgElement.src);
        uploadedTexts.push(inputText);
      }
    }
  
    // Get banner image and overlay text
    const bannerImg = document.querySelector('.card-header').style.backgroundImage.slice(5, -2); // Extract URL
    const overlayText = document.querySelector('.card-header .text-input-box').value;
  
    // Calculate canvas size dynamically
    const bannerHeight = 120;
    const imageHeight = uploadedImages.length === 1 ? 300 : 150; // Larger height for single image
    const textHeight = 20;
    const rowHeight = imageHeight + textHeight + 20; // Space for image, text, and padding
    const rows = Math.ceil(uploadedImages.length / 2); // 2 images per row
    const totalHeight = bannerHeight + rows * rowHeight;
  
    canvas.width = card.offsetWidth;
    canvas.height = totalHeight;
  
    // Clear canvas for new content
    ctx.clearRect(0, 0, canvas.width, canvas.height);
  
    // Draw the banner image
    const bannerPromise = new Promise((resolve) => {
      const img = new Image();
      img.src = bannerImg;
      img.onload = () => {
        ctx.drawImage(img, 0, 0, canvas.width, bannerHeight);
        // Add overlay text
        if (overlayText.trim()) {
          ctx.font = '11.5px Arial';
          ctx.fillStyle = 'black';
          ctx.textAlign = 'center';
          ctx.fillText(overlayText, canvas.width / 2, bannerHeight / 2 + 50);
        }
        resolve();
      };
    });
  
    // Draw uploaded images and their descriptions
    const uploadPromises = [];
    const columns = 2; // Images per row
    const imageWidth = uploadedImages.length === 1 ? canvas.width - 20 : (canvas.width / columns) - 20;
    const startY = bannerHeight + 10;
  
    uploadedImages.forEach((src, i) => {
      uploadPromises.push(
        new Promise((resolve) => {
          const img = new Image();
          img.src = src;
          const x = (i % columns) * (imageWidth + 20) + 10; // X position
          const y = startY + Math.floor(i / columns) * rowHeight; // Y position
  
          img.onload = () => {
            ctx.drawImage(img, x, y, imageWidth, imageHeight);
            ctx.font = '16px Arial';
            ctx.fillStyle = 'black';
            ctx.textAlign = 'center';
            ctx.fillText(uploadedTexts[i] || '', x + imageWidth / 2, y + imageHeight + 15);
            resolve();
          };
        })
      );
    });
  
    // If no images are uploaded
    if (uploadedImages.length === 0) {
      ctx.font = '20px Arial';
      ctx.fillStyle = 'gray';
      ctx.textAlign = 'center';
      ctx.fillText('No Images Uploaded', canvas.width / 2, canvas.height / 2);
    }
  
    // Render all content and replace card content with canvas output
    Promise.all([bannerPromise, ...uploadPromises]).then(() => {
      const imgData = canvas.toDataURL('image/png');
      card.innerHTML = `<img src="${imgData}" alt="Generated Card" style="width: 100%;">`;
    });
  }
  

// for update

function previewNewImage(input, index) {
    const reader = new FileReader();
    reader.onload = function (e) {
      document.getElementById(`new-preview-img-${index}`).src = e.target.result;
    };
    reader.readAsDataURL(input.files[0]);
  }
  
  function generateAndReplaceNew() {
    const canvas = document.getElementById('new-card-canvas');
    const ctx = canvas.getContext('2d');
    const card = document.getElementById('new-card-container');
  
    const uploadedImages = [];
    const uploadedTexts = [];
    for (let i = 0; i < 4; i++) {
      const imgElement = document.getElementById(`new-preview-img-${i}`);
      const inputText = document.getElementById(`new-input-${i}`).value;
      if (imgElement.src && imgElement.src !== window.location.href) {
        uploadedImages.push(imgElement.src);
        uploadedTexts.push(inputText);
      }
    }
  
    const bannerImg = document.querySelector('#new-card-container .card-header').style.backgroundImage.slice(5, -2);
    const overlayText = document.getElementById('new-text-input').value;
  
    let rows = Math.ceil(uploadedImages.length / 2);
    rows = rows || 1;
    const bannerHeight = 120;
    const imageHeight = uploadedImages.length === 1 ? 300 : 150;
    const textHeight = 20;
    const rowHeight = imageHeight + textHeight + 20;
    const totalHeight = bannerHeight + rows * rowHeight;
  
    canvas.width = card.offsetWidth;
    canvas.height = totalHeight;
  
    ctx.clearRect(0, 0, canvas.width, canvas.height);
  
    const bannerPromise = new Promise((resolve) => {
      const img = new Image();
      img.src = bannerImg;
      img.onload = () => {
        ctx.drawImage(img, 0, 0, canvas.width, bannerHeight);
  
        if (overlayText.trim() !== '') {
          ctx.font = '20px Arial';
          ctx.fillStyle = 'black';
          ctx.textAlign = 'center';
          ctx.fillText(overlayText, canvas.width / 2, bannerHeight / 2 + 50);
        }
        resolve();
      };
    });
  
    const uploadPromises = [];
    const columns = 2;
    const imageWidth = uploadedImages.length === 1 ? canvas.width - 20 : canvas.width / columns - 20;
    const startY = bannerHeight + 10;
  
    for (let i = 0; i < uploadedImages.length; i++) {
      uploadPromises.push(
        new Promise((resolve) => {
          const imgSrc = uploadedImages[i];
          const inputText = uploadedTexts[i];
          const x = (i % columns) * (imageWidth + 20) + 10;
          const y = startY + Math.floor(i / columns) * rowHeight;
  
          const img = new Image();
          img.src = imgSrc;
          img.onload = () => {
            ctx.drawImage(img, x, y, imageWidth, imageHeight);
            ctx.font = '16px Arial';
            ctx.fillStyle = 'black';
            ctx.textAlign = 'center';
            ctx.fillText(inputText || '', x + imageWidth / 2, y + imageHeight + 15);
            resolve();
          };
        })
      );
    }
  
    if (uploadedImages.length === 0) {
      ctx.font = '20px Arial';
      ctx.fillStyle = 'gray';
      ctx.textAlign = 'center';
      ctx.fillText('No Images Uploaded', canvas.width / 2, canvas.height / 2);
    }
  
    Promise.all([bannerPromise, ...uploadPromises]).then(() => {
      const imgData = canvas.toDataURL('image/png');
      const cardContainer = document.getElementById('new-card-container');
      cardContainer.innerHTML = `<img src="${imgData}" alt="Generated Card" style="width: 100%;">`;
    });
  }