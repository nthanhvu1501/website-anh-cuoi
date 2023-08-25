<?php
session_start();
require '../connect.php';
if (!isset($_SESSION['admin'])) {
    header('location: ./login_phuoctmpc07090.php');
}
?>
<?php
include './components/header.php'
    ?>
<div class="page-wrapper">
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-7 align-self-center">
                <h3 class="page-title text-truncate text-dark font-weight-medium mb-1">Dashboard</h3>
                <div class="d-flex align-items-center">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb m-0 p-0">
                            <li class="breadcrumb-item"><a href="./index.php" class="text-muted">Dashboard</a></li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <div class="container mt-5">
        <div class="row vh-100">
            <div class="col-sm-6 col-lg-3">
                <div class="card border-end">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div>
                                <div class="d-inline-flex align-items-center">
                                    <h2 class="text-dark mb-1 font-weight-medium">
                                        <?php
                                        $album = $conn->query("SELECT count(album_id) as album_total FROM album")->fetch_assoc();
                                        echo $album['album_total']
                                        ?>
                                    </h2>
                                </div>
                                <h6 class="text-muted font-weight-normal mb-0 w-100 text-truncate">Album
                                </h6>
                            </div>
                            <div class="ms-auto mt-md-3 mt-lg-0">
                                <span class="opacity-7 text-muted"><i data-feather="book"></i></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3">
                <div class="card border-end">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div>
                                <div class="d-inline-flex align-items-center">
                                    <h2 class="text-dark mb-1 font-weight-medium">
                                        <?php
                                        $image = $conn->query("SELECT count(image_id) as image_total FROM image")->fetch_assoc();
                                        echo $image['image_total']
                                        ?>
                                    </h2>
                                </div>
                                <h6 class="text-muted font-weight-normal mb-0 w-100 text-truncate">Hình ảnh
                                </h6>
                            </div>
                            <div class="ms-auto mt-md-3 mt-lg-0">
                                <span class="opacity-7 text-muted"><i data-feather="image"></i></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3">
                <div class="card border-end">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div>
                                <div class="d-inline-flex align-items-center">
                                    <h2 class="text-dark mb-1 font-weight-medium">
                                        <?php
                                        $user = $conn->query("SELECT count(user_id) as user_total FROM user")->fetch_assoc();
                                        echo $user['user_total']
                                        ?>
                                    </h2>
                                </div>
                                <h6 class="text-muted font-weight-normal mb-0 w-100 text-truncate">Người dùng
                                </h6>
                            </div>
                            <div class="ms-auto mt-md-3 mt-lg-0">
                                <span class="opacity-7 text-muted"><i data-feather="user-plus"></i></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</div>
<?php
include './components/footer.php';
?>