<?php include './header.php' ?>
<div class="vh-100 w-75 d-flex justify-content-center align-items-center m-auto">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-12 col-md-8 col-lg-6">
                <div class="border border-3 border-warning"></div>
                <div class=" bg-white shadow-lg">
                    <div class="-body p-5">
                        <form class="mb-3 mt-md-4 needs-validation" novalidate>
                            <h2 class="fw-bold mb-2 text-uppercase" style="color: #FFAC88;">FPhoto</h2>
                            <p class=" mb-5">Hãy nhập tài khoản và mật khẩu của bạn!</p>
                            <div class="mb-3">
                                <label for="username" class="form-label ">Tên tài khoản:</label>
                                <input type="text" class="form-control" id="text" placeholder="abc123" require>
                            </div>
                            <div class="invalid-feedback">
                                Không được bỏ trống Username
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label ">Mật Khẩu:</label>
                                <input type="password" class="form-control" id="password" placeholder="*******" require>
                            </div>
                            <div class="invalid-feedback">
                                Không được bỏ trống mật khẩu
                            </div>
                            <p class="small"><a class="text-primary" href="forget-password.html">Quên Mật Khẩu?</a></p>
                            <div class="d-grid">
                                <button class="btn btn-outline-dark" type="submit">Đăng nhập</button>
                            </div>
                        </form>
                        <div>
                            <p class="mb-0  text-center">Không có tài khoản? <a href="signup.html" class="text-primary fw-bold">Đăng Ký</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    // Example starter JavaScript for disabling form submissions if there are invalid fields
    (() => {
        'use strict'

        // Fetch all the forms we want to apply custom Bootstrap validation styles to
        const forms = document.querySelectorAll('.needs-validation')

        // Loop over them and prevent submission
        Array.from(forms).forEach(form => {
            form.addEventListener('submit', event => {
                if (!form.checkValidity()) {
                    event.preventDefault()
                    event.stopPropagation()
                }

                form.classList.add('was-validated')
            }, false)
        })
    })()
</script>