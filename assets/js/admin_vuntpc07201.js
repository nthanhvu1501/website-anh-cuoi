function triggerClick() {
  document.getElementById("image").click();
}
let images = [];
function check_duplicate(name) {
  let check = false;
  if (images.length > 0) {
    for (let i = 0; i < images.length; i++) {
      if (images[i].name == name) {
        check = true;
        break;
      }
    }
  }
  return check;
}

function image_select() {
  let image = document.getElementById("image").files;
  console.log(image);
  for (let i = 0; i < image.length; i++) {
    if (check_duplicate(image[i].name)) {
      continue;
    } else {
      images.push({
        name: image[i].name,
        url: URL.createObjectURL(image[i]),
      });
    }
  }
  document.getElementById("images").innerHTML = image_show();

  document.getElementById("num-of-files").textContent =
    "Đã chọn " + image.length + " ảnh";
}

function image_show() {
  let image = "";
  images.forEach((item) => {
    image += `
                <div class="masonry-item mb-2 image-container position-relative">
                    <img src="${item.url}" alt="" class="w-100 rounded-4">
                </div>
                `;
  });
  return image;
}
