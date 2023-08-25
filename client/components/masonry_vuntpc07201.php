<div class="container my-3">
    <div class="d-flex justify-content-between">
        <h3>Ảnh đã chọn</h3>

        <form action="./action/send-image_vuntpc07201.php" method="post">
            <input type="hidden" id="imageSelected" name="imageSelected">
            <?php
            if (isset($_SESSION['user'])):
                ?>
                <button class="btn btn-primary" name="send">Gửi</button>
                <?php
            else:
                ?>
                <a class="btn btn-outline-primary" href="./login_phuoctmpc07090.php">Gửi</a>
                <?php
            endif;
            ?>
        </form>
    </div>
    <div class="masonry" id="masonry" style="--i:3;">
    </div>
</div>
<script>
    let selectedImages = JSON.parse(localStorage.getItem("selectedImages"));
    let input = document.getElementById('imageSelected')
    let masonry = document.getElementById('masonry')
    let html = '';
    getData()
    function getData() {
        input.value = selectedImages
        selectedImages.forEach(element => {
            html += `
            <div class="masonry-item mb-3 position-relative">
                <img src="../uploads/${element}" class="carousel-image w-100 rounded-3">
                <button class="position-absolute top-0 end-0 btn btn-danger" onclick="deleteData(event)">X</button>
            </div>
            `
        });
        masonry.innerHTML = html
    }
    function deleteData(event) {
        let clickedButton = event.target;
        let imgSrc = clickedButton.previousElementSibling.getAttribute("src").split("/")[2];
        let imgIndex = selectedImages.indexOf(imgSrc);

        if (imgIndex !== -1) {
            selectedImages.splice(imgIndex, 1);
            localStorage.setItem("selectedImages", JSON.stringify(selectedImages));
            clickedButton.parentElement.remove();
        }
    }
</script>