<?php
session_start();
if (isset($_GET['user_id'])) {
    $user_id = $_GET['user_id'];
} else {
    header('location: user-list_vuntpc07201.php');
}
?>
<?php
include './components/header.php'
?>

<div class="page-wrapper">
    <?php
    require '../connect.php';
    $user = $conn->query("SELECT * FROM user WHERE user_id ='$user_id'")->fetch_assoc();
    ?>
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-7 align-self-center">
                <h3 class="page-title text-truncate text-dark font-weight-medium mb-1">
                    <?= $user['fullName'] ?>
                </h3>
                <div class="d-flex align-items-center">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb m-0 p-0">
                            <li class="breadcrumb-item">
                                <a href="./index.php" class="text-muted">Dashboard</a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="./user-list_vuntpc07201.php" class="text-muted">
                                    Danh sách user
                                </a>
                            </li>
                            <li class="breadcrumb-item text-muted active" aria-current="page">
                                <?= $user['fullName'] ?>
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <div class="container mt-5">
        <!-- Thông tin user -->
        <div class="row bg-white p-3">
            <div class="col-md-2">
                <img src="../assets/images/users/1.jpg" alt="" class="d-block w-100 h-100 object-contain">
            </div>
            <div class="col-md-10">
                <div class="row">
                    <div class="col-md-6">
                        <table class="table">
                            <tr>
                                <th>ID:</th>
                                <td><?= $user['user_id'] ?></td>
                            </tr>
                            <tr>
                                <th>Họ tên:</th>
                                <td><?= $user['fullName'] ?></td>
                            </tr>
                            <tr>
                                <th>Username:</th>
                                <td><?= $user['username'] ?></td>
                            </tr>

                            <tr>
                                <th>Email:</th>
                                <td><?= $user['email'] ?></td>
                            </tr>
                        </table>
                    </div>
                    <div class="col-md-6">
                    <table class="table">
                            <tr>
                                <th>Phân quyền:</th>
                                <td><?= $user['permission'] ?></td>
                            </tr>
                            
                        </table>
                    </div>
                </div>

            </div>
        </div>
        <!-- Hình ảnh -->
        <div class="card mt-3">
            <div class="card-header">
                <div class="card-title">Hình ảnh đã chọn</div>
            </div>
            <div class="card-body">
                <div class="masonry" style="--i:5">
                    <?php
                    $sql = "SELECT * FROM imageselected WHERE user_id = '$user_id'";
                    $result = $conn->query($sql);
                    if ($result->num_rows > 0) :
                        while ($image = $result->fetch_assoc()) :
                    ?>
                            <div class="masonry-item mb-3 position-relative">
                                <img src="../uploads/<?= $image['image'] ?>" class="carousel-image w-100 rounded-3">
                                
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