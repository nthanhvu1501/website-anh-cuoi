document.addEventListener("DOMContentLoaded", function () {
  const imageList = document.querySelector(".image-list");
  const modal = document.getElementById("carouselExampleIndicators");
  const modalInner = modal.querySelector(".carousel-inner");

  // Event listener for clicking on an image from the list
  imageList.addEventListener("click", function (event) {
    const clickedImage = event.target;
    if (clickedImage.classList.contains("carousel-image")) {
      const images = imageList.querySelectorAll(".carousel-image");
      const currentIndex = Array.from(images).indexOf(clickedImage);
      createCarouselSlides(images, currentIndex);
    }
  });

  function createCarouselSlides(images, currentIndex) {
    modalInner.innerHTML = "";
    images.forEach((image, index) => {
      const carouselItem = document.createElement("div");
      carouselItem.classList.add("carousel-item");

      if (index === currentIndex) {
        carouselItem.classList.add("active");
      }

      carouselItem.innerHTML = `
      <img src="${image.src}" class="d-block w-100">
      <div class="d-flex align-items-center justify-content-center mt-2">
      
       
        <a class="btn btn-outline-warning" href="./image-selected_vuntpc07201.php">Ảnh đã chọn</a>
      <button class="ms-2 btn btn-outline-primary btn-select" onclick="toggleSelection(this)">Chọn ảnh</button>
      </div>
      `;
      modalInner.appendChild(carouselItem);
    });
  }
});
