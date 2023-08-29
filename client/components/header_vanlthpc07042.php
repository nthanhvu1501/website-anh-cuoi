<?php 
session_start();
?>
<nav class="navbar navbar-expand-lg">
    <div class="container">
        <a class="navbar-brand" href="./index.php">
            <img srcset="../assets/images/logo.png 2x" alt="Logo">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">

            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="./index.php">Trang chủ</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="./image-selected_vuntpc07201.php">Ảnh đã chọn</a>
                </li>
            </ul>
            <form class="d-flex w-50 mx-auto" role="search" action="./index.php" method="get">
                <input class="form-control me-2" type="search" placeholder="Tìm kiếm album" name="keyword" aria-label="Search">
                <button class="btn btn-outline-primary" type="submit" name="search">
                    <i class="feather-icon" data-feather="search"></i>
                </button>
            </form>
            <div class="dropdown">

                <?php
                if (isset($_SESSION['user']) || isset($_SESSION['admin'])) :
                ?>
                    <a class="nav-link dropdown-toggle" href="javascript:void(0)" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="ms-2 d-none d-lg-inline-block"><span>Xin chào,</span>
                            <span class="text-dark">
                                <?= isset($_SESSION['user']) ?  $_SESSION['user'] : $_SESSION['admin'] ?>
                            </span>
                        </span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end dropdown-menu-right user-dd animated flipInY">
                        <a class="dropdown-item" href="./user-info_vuntpc07201.php">
                            <i data-feather="user" class="svg-icon me-2 ms-1"></i>
                            Tài khoản của tôi
                        </a>
                        <?php
                        if (isset($_SESSION['admin'])) :
                        ?>
                            <a class="dropdown-item" href="../admin">
                                <i data-feather="user" class="svg-icon me-2 ms-1"></i>
                                Admin
                            </a>
                        <?php
                        endif;
                        ?>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" name="logout" href="./action/logout.php">
                            <i data-feather="power" class="svg-icon me-2 ms-1"></i>
                            Đăng xuất
                        </a>
                    </div>
                <?php
                else :
                ?>
                    <a class="btn-login btn btn-primary text-white" href="./login_phuoctmpc07090.php">ĐĂNG NHẬP</a>
                <?php
                endif;
                ?>

            </div>


        </div>
    </div>
</nav>