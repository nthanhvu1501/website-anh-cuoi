<div class="container my-3">
    <div class="d-flex justify-content-between">

        <h3>Ảnh đã chọn</h3>
        <form action="./action/send-image_vuntpc07201.php" method="post">
            <input type="hidden" id="imageSelected" name="imageSelected" >
            <button class="btn btn-primary" name="send">Gửi</button>
        </form>
    </div>
    <div class="masonry" id="masonry" style="--i:3;">

    </div>
</div>
<script>
    let selectedImages = JSON.parse(localStorage.getItem("selectedImages")) || [];
    let input =document.getElementById('imageSelected')
    let masonry = document.getElementById('masonry')
    let html = '';
    getData()
    function getData() {
        input.value = selectedImages
        selectedImages.forEach(element => {
            html += `
            <div class="masonry-item mb-3">
                <img src="../uploads/${element}" class="carousel-image w-100 rounded-3">
            </div>
            `
        });
        masonry.innerHTML = html
    }

</script>