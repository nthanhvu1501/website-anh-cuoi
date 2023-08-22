<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <style>
        .Fphoto {
            width: 125px;
            height: 44px;
            font-family: 'Inter';
            font-style: normal;
            font-weight: 700;
            font-size: 36px;
            line-height: 44px;
            color: #FFAC88;
            flex: none;
            order: 0;
            flex-grow: 0;
        }

        .span-footer {
            display: block;
            font-family: 'Inter';
            font-style: normal;
            font-weight: 400;
            font-size: 16px;
            line-height: 19px;
            color: #000000;
            margin-bottom: 20px;
        }


    </style>
</head>

<body>
    <footer class="bg-light">
        <div class="container overflow-hidden position-relative">
            <div class="row py-3 g-2 justify-content-between">
                <div class="col-md-4">
                    <a href="index.php">
                        <img srcset="../assets/images/logo.png 2x" alt="Logo">
                    </a>
                    <span class="span-footer mt-3">
                        <i class="bi bi-geo-alt-fill"></i> Toà nhà FPT Polytechnic, đường số 22, phường Thường Thạnh,
                        quận Cái Răng, TP Cần Thơ
                    </span>
                    <span class="span-footer">
                        <i class="bi bi-telephone-fill"></i> 099999999
                    </span>
                    <span class="span-footer">
                        <i class="bi bi-envelope-fill"></i> user@gmail.com
                    </span>
                </div>

                <div class="col-md-4">
                    <h4 class="my-3">Đăng kí nhận Email mới nhất</h4>
                    <div class="d-flex align-items-center justify-content-between">
                        <input type="email" class="form-control">
                        <button class="btn btn-primary text-white w-25 ms-2">Đăng kí</button>
                    </div>
                </div>
            </div>
            <div class="row text-center">
                <p>&copy; 2023. Copyright F Studio</p>
            </div>
        </div>
    </footer>
</body>

</html>