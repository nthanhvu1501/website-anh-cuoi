<?php
include './components/header.php';
?>
<?php

?>
<div class="page-wrapper">
    <!-- Button trigger modal -->

    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-7 align-self-center">
                <h3 class="page-title text-truncate text-dark font-weight-medium mb-1">Album</h3>

                <div class="d-flex align-items-center">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb m-0 p-0">
                            <li class="breadcrumb-item"><a href="./index.php" class="text-muted">Trang chủ</a></li>
                            <li class="breadcrumb-item text-muted active" aria-current="page">Album</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <div class="container mt-3">
        <form action="./action/album-action_vuntpc07201.php" method="post" enctype="multipart/form-data" class="needs-validation" novalidate>
            <div class="row">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">
                            <div class="card-title">
                                Thông tin
                            </div>
                        </div>
                        <div class="card-body ">
                            <div class="mb-3">
                                <label for="album_name" class="form-label">Tên Album</label>
                                <input type="text" id="album_name" name="album_name" class="form-control" required>
                                <div class="invalid-feedback">Vui lòng nhập tên album</div>
                            </div>
                            <div class="mb-3">
                                <label for="album_description" class="form-label">Mô tả</label>
                                <input type="text" id="album_description" name="album_description" class="form-control"
                                    required>
                                <div class="invalid-feedback">Vui lòng nhập mô tả</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-header">
                            <div class="d-flex align-items-center justify-content-between">
                                <div class="card-title">Thumbnail</div>

                                <div class="btn btn-secondary float-end" onclick="triggerClick()">
                                    <i data-feather="upload-cloud" class="feather-icon"></i>
                                    Tải ảnh
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <img class="imgPreview mb-1" width="300"></img>
                            <input class="form-control d-none" type="file" id="image" name="album_thumbnail"
                                onchange="displayImg(this)" required>
                            <div class="invalid-feedback">Vui lòng chọn ảnh</div>
                           
                        </div>

                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-primary" name="album_upload">
                Lưu
            </button>
        </form>
    </div>
</div>
<?php
include './components/footer.php';
?>

<script>
    function displayImg(e) {
        if (e.files[[0]]) {
            var reader = new FileReader();
            reader.onload = function (e) {
                document.querySelector('.imgPreview').setAttribute('src', e.target.result);
            }
            reader.readAsDataURL(e.files[[0]]);
        }
    }
</script>