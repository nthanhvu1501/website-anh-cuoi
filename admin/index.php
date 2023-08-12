<?php
include './components/header.php'
    ?>

<div class="page-wrapper">
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-6">
                <form action="./action/add-image.php" method="post" enctype="multipart/form-data" id="formAdd" class="needs-validation" novalidate>
                <div class="card">
                    <div class="card-header">
                        <div class="card-title">Ảnh</div>
                    </div>
                    <div class="card-body">
                    <img class="imgPreview w-25 mb-1"></img>
                        <input class="form-control d-none" type="file" id="image" name="image"  onchange="displayImg(this)" required>
                        <div class="invalid-feedback">Vui lòng chọn ảnh</div>
                    </div>
                    <div class="card-footer">
                        <div  class="btn btn-secondary float-end" onclick="triggerClick()">
                            <i data-feather="upload-cloud" class="feather-icon"></i>
                            Tải ảnh
                        </div>
                    </div>
                </div>
                    <button type="submit" class="btn btn-primary" name="submit">
                        Lưu
                    </button>
                </form>
            </div>
        </div>
    </div>
<script>

    function triggerClick() {
        document.getElementById('image').click();
    }
    function displayImg(e) {
        if (e.files[[0]]) {
            var reader = new FileReader();
            reader.onload = function(e) {
                document.querySelector('.imgPreview').setAttribute('src', e.target.result);
            }
            reader.readAsDataURL(e.files[[0]]);
        }
    }
</script>

</div>
<?php
include './components/footer.php';
?>