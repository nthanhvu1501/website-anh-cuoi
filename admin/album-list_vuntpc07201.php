<?php
session_start();
include './components/header.php'
    ?>
<div class="page-wrapper">
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-7 align-self-center">
                <h3 class="page-title text-truncate text-dark font-weight-medium mb-1">Danh sách album</h3>
                <div class="d-flex align-items-center">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb m-0 p-0">
                            <li class="breadcrumb-item"><a href="./index.php" class="text-muted">Dashboard</a></li>
                            <li class="breadcrumb-item text-muted active" aria-current="page">Danh sách album</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <div class="container mt-5">

        <table class="table table-responsive mb-5">
            <thead class="bg-light">
                <th>ID</th>
                <th>Tên album</th>
                <th>Thumbnail</th>
                <th>Mô tả</th>
                <th>Trạng thái</th>
                <th></th>
            </thead>
            <tbody class="bg-white">
                <?php
                require '../connect.php';
                $sql = $conn->query("SELECT * FROM album");
                if ($sql->num_rows > 0):
                    while ($album = $sql->fetch_assoc()):
                        ?>
                        <tr class="align-middle">
                            <td>
                                <?= $album['album_id'] ?>
                            </td>
                            <td  style="width: 20% ">
                                <?= $album['name'] ?>
                            </td>
                            <td style="width: 200px; height: 200px;">
                                <img src="../uploads/<?= $album['thumbnail'] ?>" alt="<?= $album['thumbnail'] ?>"
                                    class="w-100 h-100 d-block object-contain">
                            </td>
                            <td>
                                <?= $album['description'] ?>
                            </td>
                            <td >
                                <?php
                                if ($album['is_active'] == 1):
                                    ?>
                                    <div class="text-success">Hiển thị</div>
                                    <?php
                                else:
                                    ?>
                                    <div class="text-danger">Ẩn</div>
                                <?php
                                endif
                                ?>
                            </td>
                            <td style="width:20%">
                                <a href="album-view_vuntpc07201.php?album_id=<?= $album['album_id'] ?>"
                                    class="btn btn-primary">xem</a>
                                <a href="album-edit_vuntpc07201.php?album_id=<?= $album['album_id'] ?>"
                                    class="btn btn-success"><i class="feather-icon" data-feather="edit"></i></a>
                                <button class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#modalDelete<?= $album['album_id'] ?>">
                                    <i class="feather-icon" data-feather="trash"></i>
                                </button>
                                <div class="modal fade" id="modalDelete<?= $album['album_id'] ?>" tabindex="-1"
                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h1 class="modal-title fs-5" id="exampleModalLabel">Xóa hình ảnh</h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                Đồng ý xóa <span class="text-black fw-bold"><?= $album['name'] ?></span> ?
                                                <form action="./action/album-action_vuntpc07201.php" method="post">
                                                    <input type="hidden" name="album_id" id="album_id"
                                                        value="<?= $album['album_id'] ?>">
                                                    <div class="float-end">
                                                        <button class="btn btn-danger" type="submit" name="album_delete">Xóa</button>
                                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Hủy</button>
                                                    </div>
                                                </form>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <?php
                    endwhile;
                endif;
                
                ?>
            </tbody>
        </table>

    </div>


</div>
<?php
include './components/footer.php';
?>