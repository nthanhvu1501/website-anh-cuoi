<?php
session_start();
include './components/header.php'
    ?>
<div class="page-wrapper">
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-7 align-self-center">
                <h3 class="page-title text-truncate text-dark font-weight-medium mb-1">Danh sách người dùng</h3>
                <div class="d-flex align-items-center">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb m-0 p-0">
                            <li class="breadcrumb-item"><a href="./index.php" class="text-muted">Dashboard</a></li>
                            <li class="breadcrumb-item text-muted active" aria-current="page">Danh sách người dùng</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <div class="container mt-5">
        <table class="table mb-5">
            <thead class="bg-light">
                <th>ID</th>
                <th>Họ tên</th>
                <th>Username</th>
                <th>Email</th>
                <th>Phân quyền</th>
                <th></th>
            </thead>
            <tbody class="bg-white">
                <?php
                require '../connect.php';
                $sql = $conn->query("SELECT * FROM user");
                if ($sql->num_rows > 0):
                    while ($user = $sql->fetch_assoc()):
                        ?>
                        <tr>
                            <td><?= $user['user_id']?></td>
                            <td><?= $user['fullName']?></td>
                            <td><?= $user['username']?></td>
                            <td><?= $user['email']?></td>
                            <td><?= $user['permission']?></td>
                            <td>
                                <a href="user-edit_vuntpc07201.php?user_id=<?= $user['user_id']?>"  class="btn btn-success"><i class="feather-icon" data-feather="edit"></i></a>
                                <button class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#modalDelete<?= $user['user_id'] ?>">
                                    <i class="feather-icon" data-feather="trash"></i>
                                </button>
                                <div class="modal fade" id="modalDelete<?= $user['user_id'] ?>" tabindex="-1"
                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h1 class="modal-title fs-5" id="exampleModalLabel">Xóa user</h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                Đồng ý xóa <span class="text-black fw-bold"><?= $user['username'] ?></span> ?
                                                <form action="./action/user-action_vuntpc07201.php" method="post">
                                                    <input type="hidden" name="user_id" id="user_id" value="<?= $user['user_id'] ?>">
                                                    <div class="float-end">
                                                        <button class="btn btn-danger" type="submit" name="user_delete">Xóa</button>
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