<?php

include 'header.php'
?>
<div class="vh-100 w-75 d-flex justify-content-center align-items-center m-auto">
  <div class="container">
    <div class="row d-flex justify-content-center">
      <div class="col-12 col-md-8 col-lg-6">
        <div class="border border-3 border-warning"></div>
        <div class="bg-white shadow-lg">
          <div class="-body p-5">
            <form class="mb-3 mt-md-4 was-validated" method="post" action="./action/account-action_vuntpc07201.php"
              >
              <h2 class="fw-bold mb-2 text-uppercase" style="color: #ffac88">
                FPhoto
              </h2>
              <p class="mb-5">Hãy tạo tài khoản của bạn tại đây!</p>
              <div class="mb-3">
                <label for="fullName" class="form-label">Họ tên:</label>
                <input type="text" class="form-control" id="text" name="fullName" placeholder="Nguyễn Văn A" required />
                <div class="invalid-feedback">
                  Không được bỏ trống họ tên
                </div>
              </div>
              <div class="mb-3">
                <label for="username" class="form-label">Tên tài khoản:</label>
                <input type="text" class="form-control" id="username" name="username" placeholder="abc123" required />
                  <div class="invalid-feedback">
                    Không được bỏ trống tên tài khoản
                  </div>
              </div>
              <div class="mb-3">
                <label for="password" class="form-label">Mật Khẩu:</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="*******"
                  required />
                <div class="invalid-feedback">
                  Không được bỏ trống mật khẩu
                </div>
              </div>

              <div class="mb-3">
                <label for="username" class="form-label">Email:</label>
                <input type="text" class="form-control" id="email" name="email" placeholder="abc123@gmail.com"
                  required />
                <div class="invalid-feedback">
                  Không được bỏ trống Email
                </div>
              </div>
              <div class="d-grid">
                <button class="btn btn-outline-dark" type="submit" name="register">
                  Đăng ký
                </button>
              </div>
            </form>
            <div>
              <p class="mb-0  text-center">Đã có tài khoản? <a href="login_phuoctmpc07090.php"
                  class="text-primary fw-bold">Đăng nhập</a></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
<?php
include 'footer.php'
  ?>