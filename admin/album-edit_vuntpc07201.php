<?php
session_start();
if (isset($_GET['album_id'])) {
    $album_id = $_GET['album_id'];
} else {
    header('location: album-list_vuntpc07201.php');
}
?>
<?php
include './components/header.php'
    ?>
<div class="page-wrapper">
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-7 align-self-center">
                <h3 class="page-title text-truncate text-dark font-weight-medium mb-1">Sửa album</h3>
                <div class="d-flex align-items-center">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb m-0 p-0">
                            <li class="breadcrumb-item"><a href="./index.php" class="text-muted">Dashboard</a></li>
                            <li class="breadcrumb-item"><a href="./album-list_vuntpc07201.php" class="text-muted">Danh
                                    sách album</a></li>
                            <li class="breadcrumb-item text-muted active" aria-current="page">Sửa album</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <div class="container mt-3">
        <?php
        require '../connect.php';
        $album = $conn->query("SELECT * FROM album WHERE album_id ='$album_id'")->fetch_assoc();
        ?>
        <form action="./action/album-action_vuntpc07201.php" method="post" enctype="multipart/form-data"
            class="needs-validation" novalidate>
            <div class="row">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">
                            <div class="card-title">
                                Thông tin
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="mb-3">
                                <label for="album_name" class="form-label">Tên Album</label>
                                <input type="text" id="album_name" name="album_name" class="form-control"
                                    value="<?= $album['name'] ?>" required>
                                <div class="invalid-feedback">Vui lòng nhập tên album</div>
                            </div>
                            <div class="mb-3">
                                <label for="album_description" class="form-label">Mô tả</label>

                                <textarea class="form-control" name="album_description" id="album_description" rows="5"
                                    required><?= $album['description'] ?></textarea>
                                <div class="invalid-feedback">Vui lòng nhập mô tả</div>
                            </div>
                            <div class="mb-3">
                                <label for="is_active">Trạng thái:</label>
                                <select name="is_active" id="is_active" class="form-select">
                                    <option value="" selected disabled>---</option>
                                    <option value="1" <?= $album['is_active']==1? "selected":""?>>Hiển thị</option>
                                    <option value="0" <?= $album['is_active']==0? "selected":""?>>Ẩn</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary d-sm-none d-lg-block mb-5" name="album_edit">
                        Lưu
                    </button>
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
                            <img class="imgPreview mb-1 d-block w-100"
                                src="../uploads/<?= $album['thumbnail'] ?>"></img>
                            <input class="form-control d-none" type="file" id="image" name="album_thumbnail"
                                onchange="displayImg(this)">
                            <div class="invalid-feedback">Vui lòng chọn ảnh</div>
                        </div>
                    </div>
                </div>
            </div>
            <input type="hidden" name="thumbnail_old" value="<?= $album['thumbnail'] ?>">
            <input type="hidden" name="album_id" value="<?= $album['album_id'] ?>">
            
            <button type="submit" class="btn btn-primary d-lg-none" name="album_edit">
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