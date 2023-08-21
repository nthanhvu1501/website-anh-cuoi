<?php include './header.php' ?>
<div class="vh-100 w-75 d-flex justify-content-center align-items-center m-auto">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-12 col-md-8 col-lg-6">
                <div class="border border-3 border-warning"></div>
                <div class=" bg-white shadow-lg">
                    <div class="-body p-5">
                        <form class="mb-3 mt-md-4 needs-validation" method="post" action="./action/account-action_vuntpc07201.php" novalidate>
                            <div class="text-center mb-4">
                                <a href="">
                                    <img srcset="../assets/images/logo.png 2x" alt="">
                                </a>
                            </div>
                            <div class="mb-3">
                                <label for="username" class="form-label ">Tên tài khoản:</label>
                                <input type="text" class="form-control" id="text" name="username" placeholder="abc123" required>
                            </div>
                            <div class="invalid-feedback">
                                Không được bỏ trống Username
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label ">Mật Khẩu:</label>
                                <input type="password" class="form-control" id="password" name="password" placeholder="*******" required>
                            </div>
                            <div class="invalid-feedback">
                                Không được bỏ trống mật khẩu
                            </div>
                            <p class="small"><a class="text-primary" href="forget-password.html">Quên Mật Khẩu?</a></p>
                            <div class="d-grid">
                                <button class="btn btn-outline-dark" type="submit" name="login">Đăng nhập</button>
                            </div>
                        </form>
                        <div>
                            <p class="mb-0  text-center">Không có tài khoản? <a href="frmdangky_nguyennpc07304.php" class="text-primary fw-bold">Đăng Ký</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
