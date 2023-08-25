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
    $user = $conn->query("SELECT * FROM user WHERE user_id='$user_id'")->fetch_assoc();
    ?>
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-7 align-self-center">
                <h3 class="page-title text-truncate text-dark font-weight-medium mb-1">
                    <?= $user['username'] ?>
                </h3>
                <div class="d-flex align-items-center">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb m-0 p-0">
                            <li class="breadcrumb-item"><a href="./index.php" class="text-muted">Dashboard</a></li>
                            <li class="breadcrumb-item"><a href="./user-list_vuntpc07201.php" class="text-muted">Danh sách người dùng</a></li>
                            <li class="breadcrumb-item text-muted active" aria-current="page">
                                <?= $user['username'] ?>
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <div class="container mt-5">
        <div class="row align-items-center justify-content-center">
            <div class="col-md-6">
                <form action="./action/user-action_vuntpc07201.php" method="post"
                    class="needs-validation bg-white p-4 mb-5" novalidate>
                    <div class="mb-3">
                        <label for="fullName">Họ tên:</label>
                        <input type="text" class="form-control" name="fullName" id="fullName"
                            value="<?= $user['fullName'] ?>" required>
                        <div class="invalid-feedback">Vui lòng nhập họ tên</div>
                    </div>
                    <div class="mb-3">
                        <label for="username">Username:</label>
                        <input type="text" class="form-control" name="username_new" id="username_new"
                            value="<?= $user['username'] ?>" required>
                        <div class="invalid-feedback">Vui lòng nhập username</div>
                    </div>
                    <div class="mb-3">
                        <label for="password">Password:</label>
                        <input type="password" class="form-control" name="password" id="password"
                            value="<?= $user['password'] ?>" required>
                        <div class="invalid-feedback">Vui lòng nhập password</div>
                    </div>
                    <div class="mb-3">
                        <label for="email">Email:</label>
                        <input type="email" class="form-control" name="email" id="email" value="<?= $user['email'] ?>"
                            required>
                        <div class="invalid-feedback">Vui lòng nhập email</div>
                    </div>
                    <div class="mb-3">
                        <label for="email">Phân quyền:</label>
                        <select name="permission" id="permission" class="form-select" required>
                            <option value="" selected disabled>---</option>
                            <option value="user" <?= $user['permission'] == "user" ? "selected" : "" ?>>user</option>
                            <option value="admin" <?= $user['permission'] == "admin" ? "selected" : "" ?>>admin</option>
                        </select>
                        <div class="invalid-feedback">Vui lòng chọn phân quyền</div>
                    </div>
                    <input type="hidden" value="<?= $user['user_id'] ?>" name="user_id">
                    <input type="hidden" value="<?= $user['username'] ?>" name="username_old">
                    <button class="btn btn-primary" type="submit" name="user_edit">Lưu</button>
                </form>
            </div>
        </div>
    </div>


</div>
<?php
include './components/footer.php';
?>