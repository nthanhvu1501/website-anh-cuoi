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
    <?php
    require '../connect.php';
    $album = $conn->query("SELECT * FROM album WHERE album_id ='$album_id'")->fetch_assoc();
    ?>
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-7 align-self-center">
                <h3 class="page-title text-truncate text-dark font-weight-medium mb-1">
                    <?= $album['name'] ?>
                </h3>
                <div class="d-flex align-items-center">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb m-0 p-0">
                            <li class="breadcrumb-item">
                                <a href="./index.php" class="text-muted">Dashboard</a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="./album-list_vuntpc07201.php" class="text-muted">
                                    Danh sách album
                                </a>
                            </li>
                            <li class="breadcrumb-item text-muted active" aria-current="page">
                                <?= $album['name'] ?>
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <div class="container mt-5">
        <!-- Thông tin album -->
        <div class="row bg-white p-3">
            <div class="col-md-6" style="max-height: 400px;">
                <img src="../uploads/<?= $album['thumbnail'] ?>" alt="<?= $album['thumbnail'] ?>" class="d-block w-100 h-100 object-contain">
            </div>
            <div class="col-md-6">
                <h3 class="text-black fw-bold">
                    <?= $album['name'] ?>
                </h3>
                <p>
                    <?= $album['description'] ?>
                </p>
            </div>
        </div>
        <!-- Hình ảnh -->
        <div class="card mt-3">
            <div class="card-header d-flex align-items-center justify-content-between">
                <div class="card-title">Hình ảnh</div>
                <a class="btn btn-outline-primary" href="./image-add_vuntpc07201.php">Thêm hình ảnh</a>
            </div>
            <div class="card-body">

                <div class="masonry" style="--i:5">
                    <?php
                    $sql = "SELECT * FROM image WHERE album_id = '$album_id'";
                    $result = $conn->query($sql);
                    if ($result->num_rows > 0):
                        while ($image = $result->fetch_assoc()):
                            ?>
                            <div class="masonry-item mb-3 position-relative">
                                <img src="../uploads/<?= $image['image'] ?>" class="carousel-image w-100 rounded-3">
                                <button class="masonry-btn position-absolute top-0 end-0 btn-danger btn"
                                    data-bs-toggle="modal" data-bs-target="#modalDelete<?= $image['image_id']?>">
                                    <i class="feather-icon" data-feather="trash"></i>
                                </button>
                                <!-- Modal delete -->
                                <div class="modal fade" id="modalDelete<?= $image['image_id']?>" tabindex="-1" aria-labelledby="exampleModalLabel"
                                    aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h1 class="modal-title fs-5" id="exampleModalLabel">Xóa hình ảnh</h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                Đồng ý xóa hình ảnh?
                                                <form action="./action/image-action_vuntp07201.php" method="post">
                                                    <input type="hidden" name="image_id" id="image_id" value="<?= $image['image_id'] ?>">
                                                    <input type="hidden" name="album_id" id="album_id" value="<?= $album['album_id'] ?>">
                                                    <div class="float-end">
                                                        <button class="btn btn-danger" type="submit" name="image_delete">Xóa</button>
                                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Hủy</button>
                                                    </div>
                                                </form>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php
                        endwhile;
                    endif;
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
include './components/footer.php';
?>