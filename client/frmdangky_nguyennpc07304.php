<!DOCTYPE html>
<html lang="en">
  <!DOCTYPE html>
  <html lang="en">
    <head>
      <meta charset="utf-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1" />
      <title>Đăng ký</title>
      <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65"
        crossorigin="anonymous"
      />
    </head>
    <body>
      <div
        class="vh-100 w-75 d-flex justify-content-center align-items-center m-auto"
      >
        <div class="container">
          <div class="row d-flex justify-content-center">
            <div class="col-12 col-md-8 col-lg-6">
              <div class="border border-3 border-warning"></div>
              <div class="bg-white shadow-lg">
                <div class="-body p-5">
                  <form class="mb-3 mt-md-4 needs-validation" novalidate>
                    <h2
                      class="fw-bold mb-2 text-uppercase"
                      style="color: #ffac88"
                    >
                      FPhoto
                    </h2>
                    <p class="mb-5">Hãy tạo tài khoản của bạn tại đây!</p>
                    <div class="mb-3">
                      <label for="username" class="form-label"
                        >Tên tài khoản:</label
                      >
                      <input
                        type="text"
                        class="form-control"
                        id="text"
                        placeholder="abc123"
                        require
                      />
                    </div>
                    <div class="invalid-feedback">
                      Không được bỏ trống Username
                    </div>
                    <div class="mb-3">
                      <label for="password" class="form-label">Mật Khẩu:</label>
                      <input
                        type="password"
                        class="form-control"
                        id="password"
                        placeholder="*******"
                        require
                      />
                    </div>
                    <div class="invalid-feedback">
                      Không được bỏ trống mật khẩu
                    </div>
                    <div class="mb-3">
                      <label for="password" class="form-label"
                        >Xác nhận mật Khẩu:</label
                      >
                      <input
                        type="password"
                        class="form-control"
                        id="password"
                        placeholder="*******"
                        require
                      />
                    </div>
                    <div class="invalid-feedback">
                      Không được bỏ trống phần xác nhận mật khẩu
                    </div>
                    <div class="mb-3">
                      <label for="username" class="form-label">Email:</label>
                      <input
                        type="text"
                        class="form-control"
                        id="text"
                        placeholder="abc123@gmail.com"
                        require
                      />
                    </div>
                    <div class="invalid-feedback">
                      Không được bỏ trống Email
                    </div>
                    <div class="d-grid">
                      <button class="btn btn-outline-dark" type="submit">
                        Đăng ký
                      </button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
        crossorigin="anonymous"
      ></script>
    </body>
  </html>
</html>
