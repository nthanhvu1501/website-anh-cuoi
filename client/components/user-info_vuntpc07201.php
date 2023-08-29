<?php
$user_id = $_SESSION['user_id'];
?>
<?php
require '../connect.php';
$user = $conn->query("SELECT * FROM user WHERE user_id ='$user_id'")->fetch_assoc();
?>
<div class="container my-3">
    <h1 class="text-center">Thông tin người dùng</h1>
    <div class="row bg-white p-3">
        <div class="col-md-2">
            <img src="../assets/images/users/1.jpg" alt="" class="d-block w-100 h-100 object-contain">
        </div>
        <div class="col-md-10">
            <div class="row">
                <div class="col-md-6">
                    <table class="table">
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
                
            </div>

        </div>
    </div>
    <!-- Hình ảnh -->
    <div class="card mt-3">
        <div class="card-header">
            <h4 class="card-title">Hình ảnh đã gửi</h4>
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
                            <form action="">

                            </form>
                        </div>
                <?php
                    endwhile;
                endif;
                ?>
            </div>
        </div>
    </div>
</div>