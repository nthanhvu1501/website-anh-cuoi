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
      const img = document.createElement("img");
      img.src = image.src;
      img.classList.add("d-block", "w-100");
      carouselItem.appendChild(img);
      modalInner.appendChild(carouselItem);
    });
  }
});
