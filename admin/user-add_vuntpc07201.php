<?php
session_start();
include './components/header.php'
?>
<?php 
if(isset($_GET['error_username'])):
?>
<script>alert("username đã tồn tại")</script>
<?php 
endif;
?>
<div class="page-wrapper">
<div class="page-breadcrumb">
        <div class="row">
            <div class="col-7 align-self-center">
                <h3 class="page-title text-truncate text-dark font-weight-medium mb-1">Thêm người dùng</h3>
                <div class="d-flex align-items-center">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb m-0 p-0">
                            <li class="breadcrumb-item"><a href="./index.php" class="text-muted">Dashboard</a></li>
                            <li class="breadcrumb-item text-muted active" aria-current="page">Thêm người dùng</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <div class="container mt-5">
        <div class="row align-items-center justify-content-center">
            <div class="col-md-6">
                <form action="./action/user-action_vuntpc07201.php" method="post" class="needs-validation bg-white p-4 mb-5" novalidate>
                    <div class="mb-3">
                        <label for="fullName">Họ tên:</label>
                        <input type="text" class="form-control" name="fullName" id="fullName" required>
                        <div class="invalid-feedback">Vui lòng nhập họ tên</div>
                    </div>
                    <div class="mb-3">
                        <label for="username">Username:</label>
                        <input type="text" class="form-control" name="username" id="username" required>
                        <div class="invalid-feedback">Vui lòng nhập username</div>
                    </div>
                    <div class="mb-3">
                        <label for="password">Password:</label>
                        <input type="password" class="form-control" name="password" id="password" required>
                        <div class="invalid-feedback">Vui lòng nhập password</div>
                    </div>
                    <div class="mb-3">
                        <label for="email">Email:</label>
                        <input type="email" class="form-control" name="email" id="email" required>
                        <div class="invalid-feedback">Vui lòng nhập email</div>
                    </div>
                    <div class="mb-3">
                        <label for="email">Phân quyền:</label>
                        <select name="permission" id="permission" class="form-select" required>
                            <option value="" selected disabled>---</option>
                            <option value="user">user</option>
                            <option value="admin">admin</option>
                        </select>
                        <div class="invalid-feedback">Vui lòng chọn phân quyền</div>
                    </div>
                    <button class="btn btn-primary" type="submit" name="user_add">Thêm</button>
                </form>
            </div>
        </div>
    </div>
    

</div>
<?php
include './components/footer.php';
?>