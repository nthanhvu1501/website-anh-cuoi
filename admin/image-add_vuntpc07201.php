<?php
session_start();
include './components/header.php'
    ?>
<div class="page-wrapper">
<div class="page-breadcrumb">
        <div class="row">
            <div class="col-7 align-self-center">
                <h3 class="page-title text-truncate text-dark font-weight-medium mb-1">Thêm hình ảnh</h3>
                <div class="d-flex align-items-center">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb m-0 p-0">
                            <li class="breadcrumb-item"><a href="./index.php" class="text-muted">Dashboard</a></li>
                            <li class="breadcrumb-item text-muted active" aria-current="page">Thêm hình ảnh</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <div class="container mt-5">
        <form action="./action/image-action_vuntp07201.php" method="post" enctype="multipart/form-data" id="formAdd"
            class="needs-validation" novalidate>
            <div class="card">
                <div class="card-header">
                    <div class="d-flex align-items-center justify-content-between">
                        <div class="card-title">Ảnh</div>
                        <div class="btn btn-secondary float-end" onclick="triggerClick()">
                            <i data-feather="upload-cloud" class="feather-icon"></i>
                            Tải ảnh
                        </div>
                    </div>
                </div>
                <div class="card-body ">
                    <p id="num-of-files">Chưa tải ảnh</p>
                    <div class="images">
                        <div class="masonry p-2" id="images" style="--i:4;"></div>
                    </div>
                    <input class="form-control d-none" type="file" id="image" name="image[]" onchange="image_select()"
                        required multiple>
                    <div class="invalid-feedback">Vui lòng chọn ảnh</div>
                </div>

            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header">
                            <div class="card-title">Album</div>
                        </div>
                        <div class="card-body">
                            <?php
                            require '../connect.php';
                            $sql = "SELECT * FROM album";
                            $result = $conn->query($sql);
                            if ($result->num_rows > 0):
                                while ($album = $result->fetch_assoc()):
                                    ?>
                                    <div class="form-check mb-1">
                                        <input class="form-check-input" type="radio" id="<?= $album['album_id'] ?>" name="album_id"
                                            value="<?= $album['album_id'] ?>" required>
                                        <label for="<?= $album['album_id'] ?>" class="form-check-label"><?= $album['name'] ?></label>
                                    </div>
                                    <div class="invalid-feedback">Vui lòng chọn album</div>
                                    <?php
                                endwhile;
                                ?>
                                <?php 
                                else:
                                ?>
                                <input type="text" class ="d-none" required>
                                <a class="btn btn-outline-primary" href="./album-add_vuntpc07201.php">Thêm album</a>
                                <div class="invalid-feedback">Vui lòng thêm album</div>
                                <?php 
                                endif;
                                ?>
                        </div>
                    </div>
                </div>
            </div>

            <button type="submit" class="btn btn-primary mb-5" name="image_add">
                Lưu
            </button>

        </form>

    </div>
    

</div>
<?php
include './components/footer.php';
?>