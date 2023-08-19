
function toggleSelection(button) {
  // Lấy thông tin ảnh từ thuộc tính src
  let img = button.parentElement.parentElement.children[0].src;
  imageSrc = img.replace(/^.*[\\\/]/, "");
  // Lấy danh sách các ảnh đã chọn từ localStorage
  let selectedImages = JSON.parse(localStorage.getItem("selectedImages")) || [];

  // Kiểm tra trạng thái button: đã chọn hay chưa
  if (selectedImages.includes(imageSrc)) {
    // Nếu ảnh đã được chọn, xóa khỏi danh sách và set trạng thái button về ban đầu
    selectedImages = selectedImages.filter(function (url) {
      return url !== imageSrc;
    });
    button.textContent = "Chọn ảnh";
    button.classList.remove('btn-success')
    button.classList.add('btn-outline-primary')
  } else {
    // Nếu ảnh chưa được chọn, thêm vào danh sách và set trạng thái button thành "đã chọn"
    selectedImages.push(imageSrc);
    button.textContent = "Đã chọn";
    button.classList.remove('btn-outline-primary')
    button.classList.add('btn-success')
  }

  // Lưu danh sách ảnh đã chọn vào localStorage
  localStorage.setItem("selectedImages", JSON.stringify(selectedImages));
}

// Kiểm tra trạng thái của ảnh trong localStorage và cập nhật trạng thái của button
document.addEventListener("DOMContentLoaded", function () {
  let buttons = document.getElementsByClassName("select-button");

  for (let i = 0; i < buttons.length; i++) {
    let imageSrc = buttons[i].previousElementSibling.src;

    let selectedImages =
      JSON.parse(localStorage.getItem("selectedImages")) || [];

    if (selectedImages.includes(imageSrc)) {
      buttons[i].textContent = "Đã chọn";
    }
  }
});
