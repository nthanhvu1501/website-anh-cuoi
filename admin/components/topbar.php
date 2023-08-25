<header class="topbar" data-navbarbg="skin6">
    <nav class="navbar top-navbar navbar-expand-lg">
        <div class="navbar-header" data-logobg="skin6">
            <a class="nav-toggler waves-effect waves-light d-block d-lg-none" href="javascript:void(0)"><i
                    class="ti-menu ti-close"></i></a>
            <div class="navbar-brand">
                <a href="index.php">
                    <img srcset="../assets/images/logo.png 2x" alt="Logo">
                </a>
            </div>
            <a class="topbartoggler d-block d-lg-none waves-effect waves-light" href="javascript:void(0)"
                data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><i
                    class="ti-more"></i></a>
        </div>

        <div class="navbar-collapse collapse" id="navbarSupportedContent">
            <ul class="navbar-nav float-end ms-auto me-3 align-items-center">
                <li class="nav-item d-none d-md-block">
                    <!-- <a class="nav-link" href="javascript:void(0)">
                        <form>
                            <div class="customize-input">
                                <input class="form-control custom-shadow custom-radius border-0 bg-white" type="search"
                                    placeholder="Tìm kiếm..." aria-label="Search" name="keyword">
                                <i class="form-control-icon" data-feather="search"></i>
                            </div>
                        </form>
                    </a> -->

                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="javascript:void(0)" data-bs-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        <img src="../assets/images/users/profile-pic.jpg" alt="user" class="rounded-circle" width="40">
                        <span class="ms-2 d-none d-lg-inline-block">
                            <span>Hello,</span>
                            <span class="text-dark"><?= $_SESSION['admin']?></span>
                            <i data-feather="chevron-down" class="svg-icon"></i>
                        </span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end dropdown-menu-right user-dd animated flipInY">
                        <a class="dropdown-item" href="./action/logout_vuntpc07201.php">
                            <i data-feather="power" class="svg-icon me-2 ms-1">
                            </i>
                            Đăng xuất</a>
                    </div>
                </li>

            </ul>

        </div>
    </nav>
</header>